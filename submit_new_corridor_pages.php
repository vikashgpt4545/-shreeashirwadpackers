<?php
/**
 * Automated Google Indexing API Submitter for Newly Created Expansion Pages (440 URLs)
 * Shree Ashirwad Packers and Movers
 */

echo "=================================================================\n";
echo "  Google Indexing API: Submitting Newly Created Corridor Pages   \n";
echo "=================================================================\n\n";

$keyFile = __DIR__ . '/service_account.json';
$progressFile = __DIR__ . '/scratch/indexed_urls.json';

if (!file_exists($keyFile)) {
    die("ERROR: service_account.json not found in " . __DIR__ . "\n");
}

$keyData = json_decode(file_get_contents($keyFile), true);
if (empty($keyData['private_key']) || empty($keyData['client_email'])) {
    die("ERROR: Invalid service_account.json file.\n");
}

$clientEmail = $keyData['client_email'];
echo "[1/3] Service Account: $clientEmail\n";

function base64UrlEncode(string $data): string {
    return str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($data));
}

// 1. Generate Signed JWT & Obtain Access Token
echo "[2/3] Authenticating with Google OAuth2...\n";
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
    CURLOPT_TIMEOUT => 15
]);
$res = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
unset($ch);

$tokenData = json_decode($res, true);
if ($httpCode !== 200 || empty($tokenData['access_token'])) {
    die("ERROR: Failed to obtain access token (HTTP $httpCode):\n$res\n");
}

$accessToken = $tokenData['access_token'];
echo "      Authentication Successful!\n\n";

// 2. Fetch Newly Created Pages from RANCHI_ROUTE_PAGE_PROGRESS.md and Git
$urls = [];

// A. Extract all 133 Ranchi Corridor slugs from RANCHI_ROUTE_PAGE_PROGRESS.md
$mdFile = __DIR__ . '/RANCHI_ROUTE_PAGE_PROGRESS.md';
if (file_exists($mdFile)) {
    $mdContent = file_get_contents($mdFile);
    if (preg_match_all('/\|\s*\d+\s*\|\s*`([^`]+)`/', $mdContent, $matches)) {
        foreach ($matches[1] as $slug) {
            $urls[] = "https://www.shreeashirwadpackers.com/" . trim($slug);
        }
    }
}

// B. Extract from Git commit and working tree status
$gitFiles = [];
@exec('git diff --name-only HEAD~1 HEAD pages/', $gitFiles);
@exec('git status --porcelain pages/', $gitStatusFiles);
foreach ($gitStatusFiles as $line) {
    $parts = preg_split('/\s+/', trim($line));
    if (isset($parts[1])) $gitFiles[] = $parts[1];
}

foreach ($gitFiles as $file) {
    $file = trim($file);
    if (str_starts_with($file, 'pages/') && str_ends_with($file, '.php')) {
        $slug = str_replace(['pages/', '.php'], '', $file);
        $urls[] = "https://www.shreeashirwadpackers.com/{$slug}";
    }
}

$urls = array_values(array_unique($urls));

// 3. Load Progress (Skip already indexed URLs)
$alreadyIndexed = [];
if (file_exists($progressFile)) {
    $alreadyIndexed = json_decode(file_get_contents($progressFile), true) ?: [];
}

$pendingUrls = array_values(array_filter($urls, function($u) use ($alreadyIndexed) {
    return !in_array($u, $alreadyIndexed);
}));

$totalAll = count($urls);
$totalPending = count($pendingUrls);
$totalDone = count($alreadyIndexed);

echo "[3/3] Target: $totalAll New Pages ($totalDone already indexed, $totalPending pending submission)\n";
echo "-----------------------------------------------------------------\n";

if ($totalPending === 0) {
    echo "All $totalAll new expansion pages are already submitted!\n";
    exit(0);
}

$apiUrl = 'https://indexing.googleapis.com/v3/urlNotifications:publish';
$successCount = 0;
$failCount = 0;
$quotaHit = false;

foreach ($pendingUrls as $index => $url) {
    $currNum = $index + 1;
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
        CURLOPT_TIMEOUT => 10
    ]);

    $response = curl_exec($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    unset($ch);

    if ($status === 200) {
        $successCount++;
        $alreadyIndexed[] = $url;
        file_put_contents($progressFile, json_encode(array_values(array_unique($alreadyIndexed)), JSON_PRETTY_PRINT));
        echo "[$currNum/$totalPending] [OK 200] $url\n";
    } elseif ($status === 429) {
        $failCount++;
        echo "[$currNum/$totalPending] [QUOTA 429] Daily limit reached (Google limit: ~200 URLs/day).\n";
        $quotaHit = true;
        break;
    } else {
        $failCount++;
        $errData = json_decode($response, true);
        $errMsg = isset($errData['error']['message']) ? $errData['error']['message'] : $response;
        echo "[$currNum/$totalPending] [ERR $status] $url -> $errMsg\n";

        if ($status === 403 && $currNum === 1) {
            echo "\nSTOPPED: Permission Denied (HTTP 403).\nEnsure '$clientEmail' is added as an OWNER in Google Search Console.\n";
            exit(1);
        }
    }

    usleep(100000); // 100ms pause
}

echo "-----------------------------------------------------------------\n";
echo "SUBMISSION SUMMARY:\n";
echo "Total New Pages: $totalAll\n";
echo "Submitted This Session: $successCount\n";
echo "Total Successfully Indexed So Far: " . count($alreadyIndexed) . "/$totalAll\n";

if ($quotaHit) {
    $remaining = $totalAll - count($alreadyIndexed);
    echo "\nNOTE: Google's daily quota limit (~200 requests/day) was reached.\n";
    echo "$remaining URLs remain. Run this exact same command tomorrow to submit the next batch!\n";
}
echo "=================================================================\n";
