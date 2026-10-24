<?php
/**
 * Automated Google Indexing API Submitter for 178 Master Plan Pages
 * Priority: Phase 4 (Guides) -> Phase 2 (Specialized) -> Phase 3 (Hubs) -> Phase 1 (Corridors)
 * Shree Ashirwad Packers and Movers
 */

if (function_exists('cli_set_process_title')) {
    @cli_set_process_title("Google Indexing Submitter - 178 Master Plan Pages");
}

echo "=================================================================\n";
echo "   Google Indexing API: Submitting Master Plan Pages (178 URLs)  \n";
echo "   Shree Ashirwad Packers and Movers                             \n";
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
    'iss'   => $clientEmail,
    'scope' => 'https://www.googleapis.com/auth/indexing',
    'aud'   => 'https://oauth2.googleapis.com/token',
    'exp'   => $now + 3600,
    'iat'   => $now
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
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => http_build_query([
        'grant_type' => 'urn:ietf:params:oauth:grant-type:jwt-bearer',
        'assertion'  => $jwt
    ]),
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSL_VERIFYHOST => false,
    CURLOPT_TIMEOUT        => 15
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

// 2. Load Already Indexed URLs
$alreadyIndexed = [];
if (file_exists($progressFile)) {
    $alreadyIndexed = json_decode(file_get_contents($progressFile), true) ?: [];
}
$alreadyIndexedMap = array_flip($alreadyIndexed);

// 3. Define the 178 Master Plan Pages in Strict Priority Order
echo "[3/4] Preparing Master Plan Queue (Guides -> Services -> Hubs -> Corridors)...\n";

$priorityCategories = [
    'Phase 4: Tariff, GST, Billing & Claim Guides' => [
        'packers-and-movers-gst-rate',
        'iba-approved-packers-and-movers-bill-format',
        'how-to-calculate-packers-and-movers-charges',
        'packing-material-box-cost-guide',
        'household-goods-transit-insurance-claim-guide',
    ],
    'Phase 2: Specialized Moving Services Silo' => [
        'single-item-furniture-shifting-service',
        'luggage-delivery-and-baggage-transport',
        'pet-relocation-services-india',
        'indoor-plant-relocation-services',
        'data-center-server-and-office-relocation',
        'household-goods-storage-and-warehousing',
        'fragile-antique-and-piano-moving-service',
        'interstate-bike-parcel-and-courier-service',
    ],
    'Phase 3: High-Impact Regional & Hyper-Local Hubs' => [
        'packers-and-movers-in-goa',
        'packers-and-movers-in-kalyan-dombivli',
        'packers-and-movers-in-hubli-dharwad',
        'packers-and-movers-in-bhubaneswar-smart-city',
        'packers-and-movers-in-pimpri-chinchwad',
        'packers-and-movers-in-greater-noida-west',
        'packers-and-movers-in-dwarka-expressway',
        'packers-and-movers-in-golf-course-road-gurgaon',
        'packers-and-movers-in-new-gurgaon',
        'packers-and-movers-in-whitefield-kadugodi',
        'packers-and-movers-in-baner-pashan-pune',
        'packers-and-movers-in-rajarhat-kolkata',
    ],
    'Phase 1: High-Intent Pan-India Intercity Corridors' => [
        // Batch 3
        'gurgaon-to-bangalore-packers-and-movers',
        'bangalore-to-gurgaon-packers-and-movers',
        'pune-to-gurgaon-packers-and-movers',
        'gurgaon-to-pune-packers-and-movers',
        'mumbai-to-gurgaon-packers-and-movers',
        'gurgaon-to-mumbai-packers-and-movers',
        'kolkata-to-gurgaon-packers-and-movers',
        'gurgaon-to-kolkata-packers-and-movers',
        'chennai-to-gurgaon-packers-and-movers',
        'gurgaon-to-chennai-packers-and-movers',
        'noida-to-bangalore-packers-and-movers',
        'bangalore-to-noida-packers-and-movers',
        'ahmedabad-to-pune-packers-and-movers',
        'pune-to-ahmedabad-packers-and-movers',
        'ahmedabad-to-hyderabad-packers-and-movers',
        'hyderabad-to-ahmedabad-packers-and-movers',
        'mumbai-to-nagpur-packers-and-movers',
        'nagpur-to-mumbai-packers-and-movers',
        'indore-to-bhopal-packers-and-movers',
        'bhopal-to-indore-packers-and-movers',
        'jaipur-to-bangalore-packers-and-movers',
        'bangalore-to-jaipur-packers-and-movers',
        'delhi-to-bhopal-packers-and-movers',
        'bhopal-to-delhi-packers-and-movers',
        'delhi-to-dehradun-packers-and-movers',
        'dehradun-to-delhi-packers-and-movers',
        'chennai-to-bhubaneswar-packers-and-movers',
        'bhubaneswar-to-chennai-packers-and-movers',
        'chennai-to-tiruchirappalli-packers-and-movers',
        'tiruchirappalli-to-chennai-packers-and-movers',
        'chennai-to-tirunelveli-packers-and-movers',
        'tirunelveli-to-chennai-packers-and-movers',
        'chennai-to-vijayawada-packers-and-movers',
        'vijayawada-to-chennai-packers-and-movers',
        'mumbai-to-coimbatore-packers-and-movers',
        'coimbatore-to-mumbai-packers-and-movers',
        'mumbai-to-goa-packers-and-movers',
        'goa-to-mumbai-packers-and-movers',
        'pune-to-goa-packers-and-movers',
        'goa-to-pune-packers-and-movers',
        'bangalore-to-mysore-packers-and-movers',
        'mysore-to-bangalore-packers-and-movers',
        'bangalore-to-mangalore-packers-and-movers',
        'mangalore-to-bangalore-packers-and-movers',
        'hyderabad-to-kurnool-packers-and-movers',
        'kurnool-to-hyderabad-packers-and-movers',
        'hyderabad-to-kakinada-packers-and-movers',
        'kakinada-to-hyderabad-packers-and-movers',
        'hyderabad-to-rajahmundry-packers-and-movers',
        'rajahmundry-to-hyderabad-packers-and-movers',
        'hyderabad-to-visakhapatnam-packers-and-movers',
        'visakhapatnam-to-hyderabad-packers-and-movers',
        'hyderabad-to-vijayawada-packers-and-movers',
        'vijayawada-to-hyderabad-packers-and-movers',
        'chennai-to-pune-packers-and-movers',
        'pune-to-chennai-packers-and-movers',
        'kolkata-to-hyderabad-packers-and-movers',
        'hyderabad-to-kolkata-packers-and-movers',
        'bangalore-to-ahmedabad-packers-and-movers',
        'ahmedabad-to-bangalore-packers-and-movers',
        'delhi-to-ahmedabad-packers-and-movers',
        'ahmedabad-to-delhi-packers-and-movers',
        'bangalore-to-patna-packers-and-movers',
        'patna-to-bangalore-packers-and-movers',
        'delhi-to-patna-packers-and-movers',
        'patna-to-delhi-packers-and-movers',
        'chandigarh-to-bangalore-packers-and-movers',
        'bangalore-to-chandigarh-packers-and-movers',
        'mumbai-to-indore-packers-and-movers',
        'indore-to-mumbai-packers-and-movers',
        'pune-to-nagpur-packers-and-movers',
        'nagpur-to-pune-packers-and-movers',
        'bangalore-to-visakhapatnam-packers-and-movers',
        'visakhapatnam-to-bangalore-packers-and-movers',
        'delhi-to-chennai-packers-and-movers',
        'chennai-to-delhi-packers-and-movers',
        'pune-to-indore-packers-and-movers',
        'indore-to-pune-packers-and-movers',
        'bhopal-to-bangalore-packers-and-movers',
        'bangalore-to-bhopal-packers-and-movers',
        'delhi-to-raipur-packers-and-movers',
        'raipur-to-delhi-packers-and-movers',
        'hyderabad-to-indore-packers-and-movers',
        'indore-to-hyderabad-packers-and-movers',
        'chennai-to-madurai-packers-and-movers',
        'madurai-to-chennai-packers-and-movers',
        'bangalore-to-hubli-packers-and-movers',
        'hubli-to-bangalore-packers-and-movers',
        'vijayawada-to-bangalore-packers-and-movers',
        'bangalore-to-vijayawada-packers-and-movers',
        'chennai-to-nagercoil-packers-and-movers',
        'nagercoil-to-chennai-packers-and-movers',
        'tirupur-to-chennai-packers-and-movers',
        'chennai-to-tirupur-packers-and-movers',
        'chennai-to-thanjavur-packers-and-movers',
        'thanjavur-to-chennai-packers-and-movers',
        'hyderabad-to-guntur-packers-and-movers',
        'guntur-to-hyderabad-packers-and-movers',
        'delhi-to-kanpur-packers-and-movers',
        'kanpur-to-delhi-packers-and-movers',
        // Batch 2 & 1 Core Corridors
        'delhi-to-bangalore-packers-and-movers',
        'bangalore-to-delhi-packers-and-movers',
        'delhi-to-mumbai-packers-and-movers',
        'mumbai-to-delhi-packers-and-movers',
        'bangalore-to-mumbai-packers-and-movers',
        'mumbai-to-bangalore-packers-and-movers',
        'bangalore-to-hyderabad-packers-and-movers',
        'hyderabad-to-bangalore-packers-and-movers',
        'delhi-to-hyderabad-packers-and-movers',
        'hyderabad-to-delhi-packers-and-movers',
        'kolkata-to-delhi-packers-and-movers',
        'delhi-to-kolkata-packers-and-movers',
        'bangalore-to-kolkata-packers-and-movers',
        'kolkata-to-bangalore-packers-and-movers',
        'mumbai-to-kolkata-packers-and-movers',
        'kolkata-to-mumbai-packers-and-movers',
        'pune-to-bangalore-packers-and-movers',
        'bangalore-to-pune-packers-and-movers',
        'pune-to-delhi-packers-and-movers',
        'delhi-to-pune-packers-and-movers',
        'pune-to-mumbai-packers-and-movers',
        'mumbai-to-pune-packers-and-movers',
        'pune-to-hyderabad-packers-and-movers',
        'hyderabad-to-pune-packers-and-movers',
        'pune-to-kolkata-packers-and-movers',
        'kolkata-to-pune-packers-and-movers',
        'chennai-to-bangalore-packers-and-movers',
        'bangalore-to-chennai-packers-and-movers',
        'chennai-to-mumbai-packers-and-movers',
        'mumbai-to-chennai-packers-and-movers',
        'chennai-to-hyderabad-packers-and-movers',
        'hyderabad-to-chennai-packers-and-movers',
        'chennai-to-kolkata-packers-and-movers',
        'kolkata-to-chennai-packers-and-movers',
        'delhi-to-jaipur-packers-and-movers',
        'jaipur-to-delhi-packers-and-movers',
        'delhi-to-chandigarh-packers-and-movers',
        'chandigarh-to-delhi-packers-and-movers',
        'delhi-to-lucknow-packers-and-movers',
        'lucknow-to-delhi-packers-and-movers',
        'mumbai-to-ahmedabad-packers-and-movers',
        'ahmedabad-to-mumbai-packers-and-movers',
        'mumbai-to-hyderabad-packers-and-movers',
        'hyderabad-to-mumbai-packers-and-movers',
        'patna-to-delhi-packers-and-movers',
        'patna-to-hyderabad-packers-and-movers',
        'coimbatore-to-bangalore-packers-and-movers',
        'bangalore-to-coimbatore-packers-and-movers',
        'coimbatore-to-chennai-packers-and-movers',
        'chennai-to-coimbatore-packers-and-movers',
        'dhanbad-to-vizag-packers-and-movers',
        'jaipur-to-ranchi-packers-and-movers',
        'nagpur-to-jharkhand-packers-and-movers',
    ]
];

$baseUrl = 'https://www.shreeashirwadpackers.com/';
$queue = [];
$totalUnique = 0;

foreach ($priorityCategories as $categoryName => $slugs) {
    foreach ($slugs as $slug) {
        $url = $baseUrl . trim($slug);
        if (!isset($queue[$url])) {
            $queue[$url] = [
                'category' => $categoryName,
                'slug'     => $slug,
                'status'   => isset($alreadyIndexedMap[$url]) ? 'ALREADY_SUBMITTED' : 'PENDING'
            ];
            $totalUnique++;
        }
    }
}

$pendingQueue = array_filter($queue, fn($item) => $item['status'] === 'PENDING');
$pendingCount = count($pendingQueue);
$alreadyCount = $totalUnique - $pendingCount;

echo "      -> Total Master Plan Pages:  $totalUnique\n";
echo "      -> Already Submitted Prior:  $alreadyCount (Skipped)\n";
echo "      -> Pending to Submit Today:  $pendingCount\n\n";

if ($pendingCount === 0) {
    echo "SUCCESS: All 178 Master Plan pages are already submitted to Google Indexing API!\n";
    exit(0);
}

// 4. Batch Submit to Google Indexing API
echo "[4/4] Submitting to Google Indexing API (https://indexing.googleapis.com/v3)...\n";
echo "Note: Standard Google Indexing API limit is 200 URLs/day. We have $pendingCount URLs queued.\n";
echo "-----------------------------------------------------------------\n";

$apiUrl = 'https://indexing.googleapis.com/v3/urlNotifications:publish';
$successCount = 0;
$failCount = 0;
$currNum = 0;

foreach ($pendingQueue as $url => $item) {
    $currNum++;
    $payload = json_encode([
        'url'  => $url,
        'type' => 'URL_UPDATED'
    ]);

    $ch = curl_init($apiUrl);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $payload,
        CURLOPT_HTTPHEADER     => [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $accessToken
        ],
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_TIMEOUT        => 12
    ]);

    $response = curl_exec($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    unset($ch);

    if ($status === 200) {
        $successCount++;
        echo "[$currNum/$pendingCount] [OK 200] {$item['category']} -> $url\n";

        // Save progress immediately to prevent data loss
        $alreadyIndexed[] = $url;
        $alreadyIndexedMap[$url] = true;
        @file_put_contents($progressFile, json_encode(array_values(array_unique($alreadyIndexed)), JSON_PRETTY_PRINT));
    } else {
        $failCount++;
        $errData = json_decode($response, true);
        $errMsg = isset($errData['error']['message']) ? $errData['error']['message'] : $response;
        echo "[$currNum/$pendingCount] [ERR $status] $url -> $errMsg\n";

        // Handle Quota Limit (HTTP 429)
        if ($status === 429) {
            echo "\n-----------------------------------------------------------------\n";
            echo "STOPPED: Daily Google Indexing API Quota (200 URLs/day) reached.\n";
            echo "Successfully submitted $successCount URLs before hitting limit.\n";
            echo "Re-run this script tomorrow to submit remaining " . ($pendingCount - $currNum) . " URLs.\n";
            break;
        }

        // Handle GSC Permissions Error (HTTP 403)
        if ($status === 403 && $currNum === 1) {
            echo "\n-----------------------------------------------------------------\n";
            echo "STOPPED: Permission Denied (HTTP 403).\n";
            echo "Verify that '$clientEmail' is added as an OWNER in Google Search Console\n";
            echo "for 'https://www.shreeashirwadpackers.com' before submitting.\n";
            exit(1);
        }
    }

    // Gentle 60ms pause to respect API rate limits
    usleep(60000);
}

echo "-----------------------------------------------------------------\n";
echo "SUMMARY OF INDEXING SUBMISSION:\n";
echo "Total in Queue:       $pendingCount\n";
echo "Successfully Indexed: $successCount (200 OK)\n";
echo "Failed / Limit Exceed: $failCount\n";
echo "Total in Local Cache: " . count($alreadyIndexed) . "\n";
echo "=================================================================\n";
