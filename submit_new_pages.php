<?php
/**
 * Automated Google Indexing API Submitter for NEW Expansion Pages (62 URLs)
 * Shree Ashirwad Packers and Movers
 */

if (function_exists('cli_set_process_title')) {
    @cli_set_process_title("Google Indexing Submitter - New Pages");
}

echo "=================================================================\n";
echo "  Google Indexing API: Submitting 62 New Expansion Pages         \n";
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
echo "      Authentication Successful!\n\n";

// 3. Define the 62 New Expansion Pages
$urls = [
    // Hazaribagh (9)
    "https://www.shreeashirwadpackers.com/hazaribagh-to-patna-packers-and-movers",
    "https://www.shreeashirwadpackers.com/packers-and-movers-bangalore-to-hazaribagh",
    "https://www.shreeashirwadpackers.com/household-shifting-services-in-hazaribagh",
    "https://www.shreeashirwadpackers.com/car-transport-in-hazaribagh",
    "https://www.shreeashirwadpackers.com/bike-transport-in-hazaribagh",
    "https://www.shreeashirwadpackers.com/hazaribagh-to-kolkata-packers-and-movers",
    "https://www.shreeashirwadpackers.com/hazaribagh-to-delhi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/hazaribagh-to-bokaro-packers-and-movers",
    "https://www.shreeashirwadpackers.com/complete-guide-to-house-shifting-in-hazaribagh",

    // Dhanbad (8)
    "https://www.shreeashirwadpackers.com/household-shifting-services-in-dhanbad",
    "https://www.shreeashirwadpackers.com/car-transport-in-dhanbad",
    "https://www.shreeashirwadpackers.com/bike-transport-in-dhanbad",
    "https://www.shreeashirwadpackers.com/dhanbad-to-kolkata-packers-and-movers",
    "https://www.shreeashirwadpackers.com/dhanbad-to-patna-packers-and-movers",
    "https://www.shreeashirwadpackers.com/dhanbad-to-delhi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/dhanbad-to-bokaro-packers-and-movers",
    "https://www.shreeashirwadpackers.com/complete-guide-to-house-shifting-in-dhanbad",

    // Dumka (7)
    "https://www.shreeashirwadpackers.com/household-shifting-services-in-dumka",
    "https://www.shreeashirwadpackers.com/car-transport-in-dumka",
    "https://www.shreeashirwadpackers.com/bike-transport-in-dumka",
    "https://www.shreeashirwadpackers.com/dumka-to-ranchi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/dumka-to-patna-packers-and-movers",
    "https://www.shreeashirwadpackers.com/dumka-to-kolkata-packers-and-movers",
    "https://www.shreeashirwadpackers.com/complete-guide-to-house-shifting-in-dumka",

    // Bokaro (8)
    "https://www.shreeashirwadpackers.com/bike-transport-in-bokaro",
    "https://www.shreeashirwadpackers.com/car-transport-in-bokaro",
    "https://www.shreeashirwadpackers.com/household-shifting-services-in-bokaro",
    "https://www.shreeashirwadpackers.com/bokaro-to-ranchi-packers-and-movers",
    "https://www.shreeashirwadpackers.com/bokaro-to-kolkata-packers-and-movers",
    "https://www.shreeashirwadpackers.com/packers-and-movers-bangalore-to-bokaro",
    "https://www.shreeashirwadpackers.com/bokaro-to-patna-packers-and-movers",
    "https://www.shreeashirwadpackers.com/complete-guide-to-house-shifting-in-bokaro",

    // Ranchi Phase 1 (20)
    "https://www.shreeashirwadpackers.com/complete-guide-to-house-shifting-in-ranchi",
    "https://www.shreeashirwadpackers.com/packers-and-movers-charges-in-ranchi",
    "https://www.shreeashirwadpackers.com/ranchi-to-bokaro-packers-and-movers",
    "https://www.shreeashirwadpackers.com/ranchi-to-hazaribagh-packers-and-movers",
    "https://www.shreeashirwadpackers.com/same-day-express-packers-and-movers-in-ranchi",
    "https://www.shreeashirwadpackers.com/how-to-avoid-fraud-packers-and-movers-in-ranchi",
    "https://www.shreeashirwadpackers.com/ranchi-to-pune-packers-and-movers",
    "https://www.shreeashirwadpackers.com/ranchi-to-mumbai-packers-and-movers",
    "https://www.shreeashirwadpackers.com/luxury-villa-and-fine-art-relocation-in-ranchi",
    "https://www.shreeashirwadpackers.com/student-and-bachelor-shifting-in-ranchi",
    "https://www.shreeashirwadpackers.com/government-and-psu-employee-relocation-guide-ranchi",
    "https://www.shreeashirwadpackers.com/ranchi-to-bhubaneswar-packers-and-movers",
    "https://www.shreeashirwadpackers.com/ranchi-to-chennai-packers-and-movers",
    "https://www.shreeashirwadpackers.com/senior-citizen-assisted-relocation-in-ranchi",
    "https://www.shreeashirwadpackers.com/pet-relocation-and-animal-transport-in-ranchi",
    "https://www.shreeashirwadpackers.com/ranchi-to-ahmedabad-packers-and-movers",
    "https://www.shreeashirwadpackers.com/ranchi-to-lucknow-packers-and-movers",
    "https://www.shreeashirwadpackers.com/it-office-and-data-center-relocation-in-ranchi",
    "https://www.shreeashirwadpackers.com/industrial-machinery-and-equipment-shifting-ranchi",
    "https://www.shreeashirwadpackers.com/luggage-courier-and-excess-baggage-service-in-ranchi",

    // Ranchi Phase 2 Interstate Corridors (10)
    "https://www.shreeashirwadpackers.com/ranchi-to-gurgaon-packers-and-movers",
    "https://www.shreeashirwadpackers.com/ranchi-to-noida-packers-and-movers",
    "https://www.shreeashirwadpackers.com/ranchi-to-jaipur-packers-and-movers",
    "https://www.shreeashirwadpackers.com/ranchi-to-raipur-packers-and-movers",
    "https://www.shreeashirwadpackers.com/ranchi-to-nagpur-packers-and-movers",
    "https://www.shreeashirwadpackers.com/ranchi-to-indore-packers-and-movers",
    "https://www.shreeashirwadpackers.com/ranchi-to-guwahati-packers-and-movers",
    "https://www.shreeashirwadpackers.com/ranchi-to-surat-packers-and-movers",
    "https://www.shreeashirwadpackers.com/ranchi-to-visakhapatnam-packers-and-movers",
    "https://www.shreeashirwadpackers.com/ranchi-to-chandigarh-packers-and-movers"
];

$totalUrls = count($urls);
echo "[3/3] Submitting $totalUrls New URLs to Google Indexing API...\n";
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
            echo "Make sure '$clientEmail' is added as an OWNER in Google Search Console.\n";
            exit(1);
        }
    }

    usleep(50000); // 50ms pause
}

echo "-----------------------------------------------------------------\n";
echo "SUMMARY:\n";
echo "Total Submitted: $totalUrls\n";
echo "Success: $successCount\n";
echo "Failed: $failCount\n";
echo "=================================================================\n";
