<?php
/**
 * Automated Google Indexing API Submitter for 40 New Expansion Pages (Routes 51–90)
 * Shree Ashirwad Packers and Movers
 */

echo "=================================================================\n";
echo "  Google Indexing API: Submitting 40 New Route Expansion Pages   \n";
echo "=================================================================\n\n";

$keyFile = __DIR__ . '/service_account.json';

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

// 3. Define the 40 New Expansion Pages (Routes 51 to 90)
$urls = [
    // Group E: Outbound Expansion (Routes 51 to 60)
    "https://www.shreeashirwadpackers.com/ranchi-to-jabalpur-packers-and-movers",
    "https://www.shreeashirwadpackers.com/ranchi-to-gwalior-packers-and-movers",
    "https://www.shreeashirwadpackers.com/ranchi-to-dehradun-packers-and-movers",
    "https://www.shreeashirwadpackers.com/ranchi-to-haridwar-packers-and-movers",
    "https://www.shreeashirwadpackers.com/ranchi-to-meerut-packers-and-movers",
    "https://www.shreeashirwadpackers.com/ranchi-to-faridabad-packers-and-movers",
    "https://www.shreeashirwadpackers.com/ranchi-to-ghaziabad-packers-and-movers",
    "https://www.shreeashirwadpackers.com/ranchi-to-gorakhpur-packers-and-movers",
    "https://www.shreeashirwadpackers.com/ranchi-to-agra-packers-and-movers",
    "https://www.shreeashirwadpackers.com/ranchi-to-vadodara-packers-and-movers",

    // Group F: Inbound Expansion (Routes 61 to 70)
    "https://www.shreeashirwadpackers.com/varanasi-to-ranchi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/kanpur-to-ranchi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/prayagraj-to-ranchi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/gaya-to-ranchi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/muzaffarpur-to-ranchi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/bhagalpur-to-ranchi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/rourkela-to-ranchi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/cuttack-to-ranchi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/asansol-to-ranchi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/bhopal-to-ranchi-packers-and-movers",

    // Group G: Inbound Outside-State Expansion (Routes 71 to 80)
    "https://www.shreeashirwadpackers.com/jabalpur-to-ranchi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/gwalior-to-ranchi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/dehradun-to-ranchi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/haridwar-to-ranchi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/meerut-to-ranchi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/faridabad-to-ranchi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/ghaziabad-to-ranchi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/gorakhpur-to-ranchi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/agra-to-ranchi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/vadodara-to-ranchi-packers-and-movers",

    // Group H & I: High-Traffic Pan-India Corridors (Routes 81 to 90)
    "https://www.shreeashirwadpackers.com/chandigarh-to-ranchi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/jaipur-to-ranchi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/surat-to-ranchi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/visakhapatnam-to-ranchi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/guwahati-to-ranchi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/ranchi-to-amritsar-packers-and-movers",
    "https://www.shreeashirwadpackers.com/amritsar-to-ranchi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/ranchi-to-ludhiana-packers-and-movers",
    "https://www.shreeashirwadpackers.com/ludhiana-to-ranchi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/ranchi-to-udaipur-packers-and-movers"
];

$totalUrls = count($urls);
echo "[3/3] Submitting $totalUrls URLs to Google Indexing API...\n";
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

        if ($status === 403 && $currNum === 1) {
            echo "\n-----------------------------------------------------------------\n";
            echo "STOPPED: Permission Denied (HTTP 403).\n";
            echo "Make sure '$clientEmail' is added as an OWNER in Google Search Console\n";
            echo "for 'https://www.shreeashirwadpackers.com'.\n";
            exit(1);
        }
    }

    // Gentle 100ms pause to respect API rate limits
    usleep(100000);
}

echo "-----------------------------------------------------------------\n";
echo "SUBMISSION SUMMARY:\n";
echo "Total Submitted: $totalUrls\n";
echo "Successful: $successCount\n";
echo "Failed: $failCount\n";
echo "=================================================================\n";
