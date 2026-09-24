<?php
/**
 * Automated Google Indexing API Batch Submitter
 * Shree Ashirwad Packers and Movers
 *
 * Reads all URLs from sitemap.xml and submits them directly to Google Indexing API.
 */

if (function_exists('cli_set_process_title')) {
    @cli_set_process_title("Google Indexing Submitter");
}

echo "=================================================================\n";
echo "   Google Indexing API Batch Submitter - Shree Ashirwad Packers   \n";
echo "=================================================================\n\n";

$keyFile = __DIR__ . '/service_account.json';
$sitemapFile = __DIR__ . '/sitemap.xml';

if (!file_exists($keyFile)) {
    die("ERROR: service_account.json not found in " . __DIR__ . "\n");
}
if (!file_exists($sitemapFile)) {
    die("ERROR: sitemap.xml not found in " . __DIR__ . "\n");
}

$keyData = json_decode(file_get_contents($keyFile), true);
if (empty($keyData['private_key']) || empty($keyData['client_email'])) {
    die("ERROR: Invalid service_account.json file.\n");
}

$clientEmail = $keyData['client_email'];
echo "[1/4] Service Account: $clientEmail\n";

// Helper for Base64Url
function base64UrlEncode($data) {
    return str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($data));
}

// 1. Generate Signed JWT
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
curl_close($ch);

$tokenData = json_decode($res, true);
if ($httpCode !== 200 || empty($tokenData['access_token'])) {
    die("ERROR: Failed to obtain access token (HTTP $httpCode):\n$res\n");
}

$accessToken = $tokenData['access_token'];
echo "      Authentication Successful! (Token valid for {$tokenData['expires_in']}s)\n\n";

// 3. Parse URLs from sitemap.xml
echo "[3/4] Parsing URLs from sitemap.xml...\n";
libxml_use_internal_errors(true);
$xml = simplexml_load_file($sitemapFile);
if ($xml === false) {
    die("ERROR: Failed to parse sitemap.xml\n");
}

$urls = [];
foreach ($xml->url as $urlNode) {
    $loc = trim((string)$urlNode->loc);
    if (!empty($loc)) {
        $urls[] = $loc;
    }
}

$totalUrls = count($urls);
echo "      Found $totalUrls URLs ready to submit.\n\n";

// 4. Batch Submit to Google Indexing API
echo "[4/4] Submitting URLs to Google Indexing API...\n";
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
    curl_close($ch);

    if ($status === 200) {
        $successCount++;
        echo "[$currNum/$totalUrls] [OK 200] $url\n";
    } else {
        $failCount++;
        $errData = json_decode($response, true);
        $errMsg = isset($errData['error']['message']) ? $errData['error']['message'] : $response;
        echo "[$currNum/$totalUrls] [ERR $status] $url -> $errMsg\n";

        // Stop early if 403 ownership error to prevent spamming errors
        if ($status === 403 && $currNum === 1) {
            echo "\n-----------------------------------------------------------------\n";
            echo "STOPPED: Permission Denied (HTTP 403).\n";
            echo "You must add '$clientEmail' as an OWNER in Google Search Console\n";
            echo "for 'https://www.shreeashirwadpackers.com' before submitting.\n";
            exit(1);
        }
    }

    // Gentle 50ms pause to respect API rate limits
    usleep(50000);
}

echo "-----------------------------------------------------------------\n";
echo "SUMMARY:\n";
echo "Total Submitted: $totalUrls\n";
echo "Success: $successCount\n";
echo "Failed: $failCount\n";
echo "=================================================================\n";
