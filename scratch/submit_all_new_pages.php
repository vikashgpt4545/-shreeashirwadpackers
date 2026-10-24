<?php
/**
 * Automated Google Indexing API Submitter for All Newly Pushed Pages
 * Shree Ashirwad Packers and Movers
 */

echo "=================================================================\n";
echo "  Google Indexing API: Submitting All Newly Pushed Pages         \n";
echo "=================================================================\n\n";

$keyFile = __DIR__ . '/../service_account.json';

if (!file_exists($keyFile)) {
    die("ERROR: service_account.json not found in " . dirname(__DIR__) . "\n");
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

// 1. Generate Signed JWT
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

// 2. Fetch Access Token
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
echo "      Authentication Successful! (Token valid for {$tokenData['expires_in']}s)\n\n";

// 3. Collect All Pages from Recent Commit
$repoDir = dirname(__DIR__);
$output = shell_exec("cd /d \"$repoDir\" && git diff-tree --no-commit-id --name-only -r 45f815b pages/");
$lines = array_filter(array_map('trim', explode("\n", $output)));

$urls = [];
foreach ($lines as $line) {
    if (substr($line, -4) === '.php') {
        $slug = basename($line, '.php');
        $urls[] = "https://www.shreeashirwadpackers.com/" . $slug;
    }
}

$totalUrls = count($urls);
echo "[3/3] Submitting $totalUrls Pages to Google Indexing API...\n";
echo "Note: Google Indexing API daily quota is typically 200 URLs/day.\n";
echo "-----------------------------------------------------------------\n";

$apiUrl = 'https://indexing.googleapis.com/v3/urlNotifications:publish';
$successCount = 0;
$failCount = 0;

foreach ($urls as $index => $url) {
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
        echo "[$currNum/$totalUrls] [OK 200] $url\n";
    } else {
        $failCount++;
        $errData = json_decode($response, true);
        $errMsg = isset($errData['error']['message']) ? $errData['error']['message'] : $response;
        echo "[$currNum/$totalUrls] [ERR $status] $url -> $errMsg\n";

        if ($status === 429) {
            echo "\n-----------------------------------------------------------------\n";
            echo "STOPPED: Daily Quota Limit Reached (HTTP 429). Resume tomorrow for remaining URLs.\n";
            break;
        }

        if ($status === 403 && $currNum === 1) {
            echo "\n-----------------------------------------------------------------\n";
            echo "STOPPED: Permission Denied (HTTP 403).\n";
            echo "Make sure '$clientEmail' is added as an OWNER in Google Search Console.\n";
            break;
        }
    }

    // 100ms pause to respect API rate limits
    usleep(100000);
}

echo "-----------------------------------------------------------------\n";
echo "SUBMISSION SUMMARY:\n";
echo "Total Attempted: " . ($successCount + $failCount) . " / $totalUrls\n";
echo "Successful: $successCount\n";
echo "Failed: $failCount\n";
echo "=================================================================\n";
