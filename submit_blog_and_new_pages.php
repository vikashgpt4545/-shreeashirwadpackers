<?php
/**
 * Automated Google Indexing API Batch Submitter
 * Priority Queue: 1. All 49 Handcrafted Blog Pages -> 2. Recent Pan-India Hub Pages
 * Shree Ashirwad Packers and Movers
 */

if (function_exists('cli_set_process_title')) {
    @cli_set_process_title("Google Indexing Submitter - Blog & Hub Pages");
}

echo "=================================================================\n";
echo "   Google Indexing API Submitter (Blogs First, Then Hub Pages)   \n";
echo "   Shree Ashirwad Packers and Movers                             \n";
echo "=================================================================\n\n";

$keyFile = __DIR__ . '/service_account.json';
$progressFile = __DIR__ . '/scratch/indexed_urls.json';
$blogLedgerFile = __DIR__ . '/BLOG_PAGE_PROGRESS.md';

if (!file_exists($keyFile)) {
    die("ERROR: service_account.json not found in " . __DIR__ . "\n");
}

$keyData = json_decode(file_get_contents($keyFile), true);
if (empty($keyData['private_key']) || empty($keyData['client_email'])) {
    die("ERROR: Invalid service_account.json file.\n");
}

$clientEmail = $keyData['client_email'];
echo "[1/4] Service Account: $clientEmail\n";

// Helper for Base64Url encoding
function base64UrlEncode(string $data): string {
    return str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($data));
}

// 1. Generate Signed JWT and Obtain OAuth2 Access Token
echo "[2/4] Authenticating with Google OAuth2...\n";
$now = time();
$headerEncoded = base64UrlEncode(json_encode(['alg' => 'RS256', 'typ' => 'JWT']));
$claimEncoded = base64UrlEncode(json_encode([
    'iss' => $clientEmail,
    'scope' => 'https://www.googleapis.com/auth/indexing',
    'aud' => 'https://oauth2.googleapis.com/token',
    'exp' => $now + 3600,
    'iat' => $now
]));

$signature = '';
$privateKey = openssl_pkey_get_private($keyData['private_key']);
if (!openssl_sign($headerEncoded . '.' . $claimEncoded, $signature, $privateKey, OPENSSL_ALGO_SHA256)) {
    die("ERROR: Failed to sign JWT with private key.\n");
}
$jwt = $headerEncoded . '.' . $claimEncoded . '.' . base64UrlEncode($signature);

$ch = curl_init('https://oauth2.googleapis.com/token');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query([
        'grant_type' => 'urn:ietf:params:oauth:grant-type:jwt-bearer',
        'assertion' => $jwt
    ]),
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSL_VERIFYHOST => false,
    CURLOPT_TIMEOUT => 15
]);
$res = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlErr = curl_error($ch);
unset($ch);

$tokenData = json_decode($res, true);
if ($httpCode !== 200 || empty($tokenData['access_token'])) {
    die("ERROR: Failed to obtain access token (HTTP $httpCode):\n$res\n$curlErr\n");
}

$accessToken = $tokenData['access_token'];
echo "      Authentication Successful! (Token valid for {$tokenData['expires_in']}s)\n\n";

// 2. Load Prior Indexing Progress
$alreadyIndexed = [];
if (file_exists($progressFile)) {
    $alreadyIndexed = json_decode(file_get_contents($progressFile), true) ?: [];
}
$alreadyIndexedMap = array_flip($alreadyIndexed);

// 3. Build Prioritized Submission Queue
echo "[3/4] Building Priority Queue (Blogs First -> Recent Hubs Next)...\n";

// Priority 1: Extract all 49 Blog Pages from BLOG_PAGE_PROGRESS.md
$blogQueue = [];
if (file_exists($blogLedgerFile)) {
    $lines = file($blogLedgerFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (str_starts_with(trim($line), '|') && strpos($line, '.php') !== false) {
            $cols = array_map('trim', explode('|', trim($line)));
            // Column 5 is URL Slug
            if (isset($cols[5])) {
                $slug = trim($cols[5], "` \t\n\r");
                $url = "https://www.shreeashirwadpackers.com/{$slug}";
                if (!isset($blogQueue[$url]) && !isset($alreadyIndexedMap[$url])) {
                    $blogQueue[$url] = 'BLOG';
                }
            }
        }
    }
}

// Priority 2: Extract Newly Published Pan-India Hub Pages from recent commits
$hubQueue = [];
$gitOutput = shell_exec('git diff-tree --no-commit-id --name-only -r 9cb3096 pages/');
if (!empty($gitOutput)) {
    $gitLines = array_filter(array_map('trim', explode("\n", $gitOutput)));
    foreach ($gitLines as $filePath) {
        if (str_starts_with($filePath, 'pages/') && str_ends_with($filePath, '.php')) {
            $slug = basename($filePath, '.php');
            $url = "https://www.shreeashirwadpackers.com/{$slug}";
            if (!isset($blogQueue[$url]) && !isset($hubQueue[$url]) && !isset($alreadyIndexedMap[$url])) {
                $hubQueue[$url] = 'HUB';
            }
        }
    }
}

// Combine: BLOGS FIRST, followed by HUBS
$submissionQueue = [];
foreach ($blogQueue as $url => $type) {
    $submissionQueue[] = ['url' => $url, 'type' => $type];
}
foreach ($hubQueue as $url => $type) {
    $submissionQueue[] = ['url' => $url, 'type' => $type];
}

$totalBlogs = count($blogQueue);
$totalHubs = count($hubQueue);
$totalQueue = count($submissionQueue);

echo "      -> Blog Pages in Queue:  $totalBlogs (Priority #1)\n";
echo "      -> Hub Pages in Queue:   $totalHubs (Priority #2)\n";
echo "      -> Total Pages in Queue: $totalQueue\n";
echo "      -> Already Indexed:      " . count($alreadyIndexed) . " (Skipped)\n\n";

if ($totalQueue === 0) {
    echo "SUCCESS: All target blog and hub pages are already submitted!\n";
    exit(0);
}

// 4. Submit to Google Indexing API
echo "[4/4] Submitting to Google Indexing API...\n";
echo "Note: Standard Google Indexing API quota is 200 URLs/day.\n";
echo "      Blog pages are placed first to guarantee they are indexed before daily quota!\n";
echo "-----------------------------------------------------------------\n";

$apiUrl = 'https://indexing.googleapis.com/v3/urlNotifications:publish';
$successCount = 0;
$failCount = 0;
$blogSuccessCount = 0;
$hubSuccessCount = 0;
$currNum = 0;

foreach ($submissionQueue as $index => $item) {
    $currNum = $index + 1;
    $url = $item['url'];
    $category = $item['type'];

    $payload = json_encode([
        'url' => $url,
        'type' => 'URL_UPDATED'
    ]);

    $ch = curl_init($apiUrl);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $payload,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $accessToken
        ],
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_TIMEOUT => 15
    ]);

    $response = curl_exec($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    unset($ch);

    if ($status === 200) {
        $successCount++;
        if ($category === 'BLOG') $blogSuccessCount++;
        else $hubSuccessCount++;

        echo "[$currNum/$totalQueue] [OK 200] [$category] $url\n";

        // Save progress immediately so nothing is lost if interrupted
        $alreadyIndexed[] = $url;
        file_put_contents($progressFile, json_encode(array_values(array_unique($alreadyIndexed)), JSON_PRETTY_PRINT));
    } else {
        $failCount++;
        $errData = json_decode($response, true);
        $errMsg = isset($errData['error']['message']) ? $errData['error']['message'] : $response;

        echo "[$currNum/$totalQueue] [ERR $status] [$category] $url -> $errMsg\n";

        // Handle Daily Quota Exceeded (HTTP 429)
        if ($status === 429) {
            echo "\n=================================================================\n";
            echo "NOTICE: Daily Google Indexing API Quota Reached (HTTP 429).\n";
            echo "All submitted URLs have been safely saved to 'scratch/indexed_urls.json'.\n";
            echo "You can re-run this exact same command tomorrow to resume seamlessly!\n";
            echo "=================================================================\n";
            break;
        }

        // Handle Permission Denied (HTTP 403)
        if ($status === 403 && $currNum === 1) {
            echo "\n-----------------------------------------------------------------\n";
            echo "STOPPED: Permission Denied (HTTP 403).\n";
            echo "Please ensure '$clientEmail' has OWNER permission in Google Search Console\n";
            echo "for 'https://www.shreeashirwadpackers.com'.\n";
            exit(1);
        }
    }

    // Polite 50ms delay between requests to stay well within burst rate limits
    usleep(50000);
}

echo "\n-----------------------------------------------------------------\n";
echo "INDEXING SUBMISSION SUMMARY:\n";
echo "Total Processed:     $currNum / $totalQueue\n";
echo "Successful:          $successCount\n";
echo "  -> Blogs Submitted: $blogSuccessCount / $totalBlogs\n";
echo "  -> Hubs Submitted:  $hubSuccessCount / $totalHubs\n";
echo "Failed:              $failCount\n";
echo "Saved in Ledger:     " . count($alreadyIndexed) . " URLs total\n";
echo "=================================================================\n";
