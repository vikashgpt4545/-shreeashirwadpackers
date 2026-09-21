<?php
/**
 * Master URL Router & URL Preservation Controller
 * Shree Ashirwad Packers and Movers
 * 
 * Strict Accounting of all 46 URLs from the official source of truth (pages)
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

// Parse Request Path
$request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
$path = parse_url($request_uri, PHP_URL_PATH);
$path = '/' . ltrim($path ? $path : '/', '/');

// 301 Permanent Canonical Redirects for 9 Service /index URLs to /service/
$service_slugs = [
    'residential-shifting',
    'business-shifting',
    'vehicle-shifting',
    'packing-and-unpacking',
    'loading-and-unloading-services',
    'warehouse-service',
    'international-service',
    'domestics-service',
    'insurance-service'
];

foreach ($service_slugs as $svc) {
    if (preg_match('#^/' . preg_quote($svc, '#') . '/index(\.php)?/?$#i', $path)) {
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: ' . SITE_BASE_URL . '/' . $svc . '/');
        exit;
    }
}

// 301 Permanent Canonical Redirects for Spelling Duplicates & Ranchi Slug
if (preg_match('#^/packers-and-movers-in-nagaruntari(\.php)?/?$#i', $path)) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . SITE_BASE_URL . '/packers-and-movers-in-nagar-untari');
    exit;
}
if (preg_match('#^/packers-and-movers-in-husainabad(\.php)?/?$#i', $path)) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . SITE_BASE_URL . '/packers-and-movers-in-hussainabad');
    exit;
}
if (preg_match('#^/packers-and-movers-in-ranchi(\.php)?/?$#i', $path)) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . SITE_BASE_URL . '/');
    exit;
}
if (preg_match('#^/packers-and-movers-in-garhwa(\.php)?/?$#i', $path)) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . SITE_BASE_URL . '/packers-and-movers-in-gharwha');
    exit;
}
if (preg_match('#^/packers-and-movers-in-seraikela-kharsawan(\.php)?/?$#i', $path)) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . SITE_BASE_URL . '/packers-and-movers-in-saraikela-kharsawan');
    exit;
}
if (preg_match('#^/services(\.php)?/?$#i', $path)) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . SITE_BASE_URL . '/#services');
    exit;
}
if (preg_match('#^/(jharkhand|packers-and-movers-in-jharkhand)(\.php)?/?$#i', $path)) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . SITE_BASE_URL . '/#service-areas');
    exit;
}

// Direct file check for standalone scripts and static assets
$real_file = __DIR__ . str_replace('/', DIRECTORY_SEPARATOR, $path);
if ($path !== '/' && file_exists($real_file . '.php')) {
    include $real_file . '.php';
    exit;
}
if ($path !== '/' && file_exists($real_file) && !is_dir($real_file)) {
    $ext = strtolower(pathinfo($real_file, PATHINFO_EXTENSION));
    if ($ext === 'php') {
        include $real_file;
        exit;
    }
    $mimes = [
        'css' => 'text/css; charset=UTF-8',
        'js' => 'application/javascript; charset=UTF-8',
        'png' => 'image/png',
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'webp' => 'image/webp',
        'svg' => 'image/svg+xml',
        'ico' => 'image/x-icon',
        'json' => 'application/json',
        'xml' => 'application/xml',
        'txt' => 'text/plain; charset=UTF-8'
    ];
    if (isset($mimes[$ext])) {
        header('Content-Type: ' . $mimes[$ext]);
    }
    readfile($real_file);
    exit;
}

// Master Registry of all 46 Official URLs from "pages"
$routes_registry = [
    // 1. Homepage
    '/' => [
        'type' => 'homepage',
        'title' => 'Packers and Movers in Ranchi, Jharkhand: +91 9835565233 | Shree Ashirwad Packers',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/'
    ],

    // 2-4. Core / Utility Pages (No trailing slashes in source list)
    '/about' => [
        'type' => 'utility',
        'title' => 'About Shree Ashirwad Packers - 8409531615',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/about'
    ],
    '/gallery' => [
        'type' => 'utility',
        'title' => 'Gallery - Shree Ashirwad Packers and Movers Jharkhand',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/gallery'
    ],
    '/contact' => [
        'type' => 'utility',
        'title' => 'Contact Us - Shree Ashirwad Packers and Movers Ranchi',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/contact'
    ],
    '/pay-online' => [
        'type' => 'utility',
        'title' => 'Pay Online for Your Moving Services - Shree Ashirwad Packers',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/pay-online'
    ],

    // 5-13. 9 Core Services (With trailing slashes in source list)
    '/residential-shifting/' => [
        'type' => 'service',
        'title' => 'Residential Shifting Services in Ranchi - 8409531615',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/residential-shifting/'
    ],
    '/business-shifting/' => [
        'type' => 'service',
        'title' => 'Business Shifting Services in Ranchi - 8409531615',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/business-shifting/'
    ],
    '/vehicle-shifting/' => [
        'type' => 'service',
        'title' => 'Vehicle Shifting Services in Ranchi - 8409531615',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/vehicle-shifting/'
    ],
    '/packing-and-unpacking/' => [
        'type' => 'service',
        'title' => 'Packing and Unpacking Services in Ranchi - 8409531615',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/packing-and-unpacking/'
    ],
    '/loading-and-unloading-services/' => [
        'type' => 'service',
        'title' => 'Loading and Unloading Services in Ranchi - 8409531615',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/loading-and-unloading-services/'
    ],
    '/warehouse-service/' => [
        'type' => 'service',
        'title' => 'Warehouse Services in Ranchi - 8409531615',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/warehouse-service/'
    ],
    '/international-service/' => [
        'type' => 'service',
        'title' => 'International Moving Services in Ranchi - 8409531615',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/international-service/'
    ],
    '/domestics-service/' => [
        'type' => 'service',
        'title' => 'Domestic Moving Services in Ranchi - 8409531615',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/domestics-service/'
    ],
    '/insurance-service/' => [
        'type' => 'service',
        'title' => 'Insurance Services in Ranchi - 8409531615',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/insurance-service/'
    ],

    // 14-36. 23 Jharkhand Location Pages (No trailing slashes in source list)
    '/packers-and-movers-in-hazaribagh' => [
        'type' => 'location',
        'city' => 'Hazaribagh',
        'title' => 'Packers and Movers in Hazaribagh | Shree Ashirwad Packers',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/packers-and-movers-in-hazaribagh'
    ],
    '/packers-and-movers-in-dhanbad' => [
        'type' => 'location',
        'city' => 'Dhanbad',
        'title' => 'Packers and Movers in Dhanbad | Shree Ashirwad Packers',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/packers-and-movers-in-dhanbad'
    ],
    '/packers-and-movers-in-jamshedpur' => [
        'type' => 'location',
        'city' => 'Jamshedpur',
        'title' => 'Packers and Movers in Jamshedpur | Shree Ashirwad Packers',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/packers-and-movers-in-jamshedpur'
    ],
    '/packers-and-movers-in-deoghar' => [
        'type' => 'location',
        'city' => 'Deoghar',
        'title' => 'Packers and Movers in Deoghar | Trusted Relocation Service',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/packers-and-movers-in-deoghar'
    ],
    '/packers-and-movers-in-bokaro' => [
        'type' => 'location',
        'city' => 'Bokaro',
        'title' => 'Packers and Movers in Bokaro | Trusted Relocation Service',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/packers-and-movers-in-bokaro'
    ],
    '/packers-and-movers-in-giridih' => [
        'type' => 'location',
        'city' => 'Giridih',
        'title' => 'Packers and Movers in Giridih | Trusted Movers',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/packers-and-movers-in-giridih'
    ],
    '/packers-and-movers-in-chaibasa' => [
        'type' => 'location',
        'city' => 'Chaibasa',
        'title' => 'Packers and Movers in Chaibasa for Hassle-Free Relocation',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/packers-and-movers-in-chaibasa'
    ],
    '/packers-and-movers-in-simdega' => [
        'type' => 'location',
        'city' => 'Simdega',
        'title' => 'Packers and Movers in Simdega | Shree Ashirwad Packers',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/packers-and-movers-in-simdega'
    ],
    '/packers-and-movers-in-khunti' => [
        'type' => 'location',
        'city' => 'Khunti',
        'title' => 'Packers and Movers in Khunti for Seamless Shifting',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/packers-and-movers-in-khunti'
    ],
    '/packers-and-movers-in-ramgarh' => [
        'type' => 'location',
        'city' => 'Ramgarh',
        'title' => 'Shree Ashirwad Packers – Your Packers and Movers in Ramgarh',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/packers-and-movers-in-ramgarh'
    ],
    '/packers-and-movers-in-saraikela-kharsawan' => [
        'type' => 'location',
        'city' => 'Saraikela-Kharsawan',
        'title' => 'Packers and Movers in Saraikela-Kharsawan | Shree Ashirwad Packers',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/packers-and-movers-in-saraikela-kharsawan'
    ],
    '/packers-and-movers-in-pakur' => [
        'type' => 'location',
        'city' => 'Pakur',
        'title' => 'Packers and Movers in Pakur for Home, Office & Vehicle Shifting',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/packers-and-movers-in-pakur'
    ],
    '/packers-and-movers-in-koderma' => [
        'type' => 'location',
        'city' => 'Koderma',
        'title' => 'Shree Ashirwad Packers and Movers in Koderma',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/packers-and-movers-in-koderma'
    ],
    '/packers-and-movers-in-chatra' => [
        'type' => 'location',
        'city' => 'Chatra',
        'title' => 'Packers and Movers in Chatra | Shree Ashirwad Packers',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/packers-and-movers-in-chatra'
    ],
    '/packers-and-movers-in-godda' => [
        'type' => 'location',
        'city' => 'Godda',
        'title' => 'Expert Packers and Movers in Godda | Shree Ashirwad Packers',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/packers-and-movers-in-godda'
    ],
    '/packers-and-movers-in-latehar' => [
        'type' => 'location',
        'city' => 'Latehar',
        'title' => 'Best Packers and Movers in Latehar | Shree Ashirwad Packers',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/packers-and-movers-in-latehar'
    ],
    '/packers-and-movers-in-palamu' => [
        'type' => 'location',
        'city' => 'Palamu',
        'title' => 'Reliable Packers and Movers in Palamu | Shree Ashirwad Packers',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/packers-and-movers-in-palamu'
    ],
    '/packers-and-movers-in-dumka' => [
        'type' => 'location',
        'city' => 'Dumka',
        'title' => 'Packers and Movers in Dumka | Shree Ashirwad Packers',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/packers-and-movers-in-dumka'
    ],
    '/packers-and-movers-in-gumla' => [
        'type' => 'location',
        'city' => 'Gumla',
        'title' => 'Trusted Packers and Movers in Gumla | Shree Ashirwad Packers',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/packers-and-movers-in-gumla'
    ],
    '/packers-and-movers-in-jamtara' => [
        'type' => 'location',
        'city' => 'Jamtara',
        'title' => 'Professional Packers and Movers in Jamtara | Shree Ashirwad Packers',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/packers-and-movers-in-jamtara'
    ],
    '/packers-and-movers-in-gharwha' => [
        'type' => 'location',
        'city' => 'Garhwa',
        'title' => 'Packers and Movers in Garhwa - Reliable Moving Services',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/packers-and-movers-in-gharwha'
    ],
    '/packers-and-movers-in-daltonganj' => [
        'type' => 'location',
        'city' => 'Daltonganj',
        'title' => 'Packers and Movers in Daltonganj - Safe & Secure Shifting',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/packers-and-movers-in-daltonganj'
    ],
    '/packers-and-movers-in-lohardaga' => [
        'type' => 'location',
        'city' => 'Lohardaga',
        'title' => 'Packers and Movers in Lohardaga – Shree Ashirwad Packers',
        'canonical' => PRODUCTION_CANONICAL_DOMAIN . '/packers-and-movers-in-lohardaga'
    ],
];

// Exact Route Match
$matched_route = null;
if (isset($routes_registry[$path])) {
    $matched_route = $routes_registry[$path];
} else {
    // Flexible Trailing Slash Lookup (matches /about/ -> /about or /residential-shifting -> /residential-shifting/)
    $alt_path = (substr($path, -1) === '/') ? rtrim($path, '/') : $path . '/';
    if (isset($routes_registry[$alt_path])) {
        $matched_route = $routes_registry[$alt_path];
    }
}

// 1. Dispatch Homepage
if ($path === '/' || $path === '/index.php' || ($matched_route && $matched_route['type'] === 'homepage')) {
    include __DIR__ . '/index.php';
    exit;
}

// 1a. Dispatch Dedicated Standalone Page (Location or Content Page if file exists)
$clean_slug = trim($path, '/');
if (!empty($clean_slug)) {
    $potential_file = __DIR__ . '/' . $clean_slug . '.php';
    if (file_exists($potential_file)) {
        include $potential_file;
        exit;
    }
}

// 1b. Dispatch Dedicated About Page
if (($path === '/about' || $path === '/about/') && file_exists(__DIR__ . '/about.php')) {
    include __DIR__ . '/about.php';
    exit;
}

// 1c. Dispatch Dedicated Residential Shifting Page
if (($path === '/residential-shifting' || $path === '/residential-shifting/') && file_exists(__DIR__ . '/residential-shifting.php')) {
    include __DIR__ . '/residential-shifting.php';
    exit;
}

// 1d. Dispatch Dedicated Business Shifting Page
if (($path === '/business-shifting' || $path === '/business-shifting/') && file_exists(__DIR__ . '/business-shifting.php')) {
    include __DIR__ . '/business-shifting.php';
    exit;
}

// 1e. Dispatch Dedicated Vehicle Shifting Page
if (($path === '/vehicle-shifting' || $path === '/vehicle-shifting/') && file_exists(__DIR__ . '/vehicle-shifting.php')) {
    include __DIR__ . '/vehicle-shifting.php';
    exit;
}

// 1f. Dispatch Dedicated Packing and Unpacking Page
if (($path === '/packing-and-unpacking' || $path === '/packing-and-unpacking/') && file_exists(__DIR__ . '/packing-and-unpacking.php')) {
    include __DIR__ . '/packing-and-unpacking.php';
    exit;
}

// 1g. Dispatch Dedicated Loading and Unloading Page
if (($path === '/loading-and-unloading-services' || $path === '/loading-and-unloading-services/') && file_exists(__DIR__ . '/loading-and-unloading-services.php')) {
    include __DIR__ . '/loading-and-unloading-services.php';
    exit;
}

// 1h. Dispatch Dedicated Warehouse Service Page
if (($path === '/warehouse-service' || $path === '/warehouse-service/') && file_exists(__DIR__ . '/warehouse-service.php')) {
    include __DIR__ . '/warehouse-service.php';
    exit;
}

// 1i. Dispatch Dedicated International Moving Page
if (($path === '/international-service' || $path === '/international-service/') && file_exists(__DIR__ . '/international-service.php')) {
    include __DIR__ . '/international-service.php';
    exit;
}

// 1j. Dispatch Dedicated Domestic Moving Page
if (($path === '/domestics-service' || $path === '/domestics-service/') && file_exists(__DIR__ . '/domestics-service.php')) {
    include __DIR__ . '/domestics-service.php';
    exit;
}

// 1k. Dispatch Dedicated Insurance Services Page
if (($path === '/insurance-service' || $path === '/insurance-service/') && file_exists(__DIR__ . '/insurance-service.php')) {
    include __DIR__ . '/insurance-service.php';
    exit;
}

// 1l. Dispatch Dedicated Gallery Page
if (($path === '/gallery' || $path === '/gallery/') && file_exists(__DIR__ . '/gallery.php')) {
    include __DIR__ . '/gallery.php';
    exit;
}

// 1m. Dispatch Dedicated Contact Page
if (($path === '/contact' || $path === '/contact/') && file_exists(__DIR__ . '/contact.php')) {
    include __DIR__ . '/contact.php';
    exit;
}

// 2. Dispatch Managed Routes (All 45 preserved pages)
if ($matched_route) {
    http_response_code(200);
    $page_title = htmlspecialchars($matched_route['title'], ENT_QUOTES, 'UTF-8');
    $canonical_url = htmlspecialchars($matched_route['canonical'], ENT_QUOTES, 'UTF-8');
    $base_url = SITE_BASE_URL;
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php echo $page_title; ?></title>
      <meta name="robots" content="index, follow">
      <link rel="canonical" href="<?php echo $canonical_url; ?>">
      <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/style.css">
      <link rel="icon" type="image/png" href="<?php echo $base_url; ?>/assets/images/favicon.png">
    </head>
    <body>
      <?php include __DIR__ . '/includes/header.php'; ?>

      <main style="padding: 60px 0; background: #f8fafc; min-height: 50vh;">
        <div class="container" style="max-width: 800px; text-align: center; background: #ffffff; padding: 40px 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <span style="background:#fff2eb; color:#ff6a28; padding: 6px 14px; border-radius: 9999px; font-weight: 700; font-size: 0.85rem; text-transform: uppercase;">
            Shree Ashirwad Packers and Movers
          </span>
          <h1 style="font-size: 2rem; color: #0f223d; margin: 20px 0 12px; font-weight: 800;"><?php echo $page_title; ?></h1>
          <p style="color: #64748b; font-size: 1.05rem; line-height: 1.6; margin-bottom: 24px;">
            We provide fast, dependable, and affordable packing and moving solutions across Jharkhand. This page is active and accounted for in our new high-speed Core PHP system.
          </p>
          <div style="display:flex; justify-content:center; gap: 14px; flex-wrap: wrap;">
            <a href="tel:<?php echo PRIMARY_PHONE_RAW; ?>" class="btn-hero-call">Call: <?php echo PRIMARY_PHONE; ?></a>
            <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" class="btn-hero-whatsapp">WhatsApp Quote</a>
            <a href="<?php echo $base_url; ?>/" class="btn-header-quote">Back to Home</a>
          </div>
        </div>
      </main>

      <?php include __DIR__ . '/includes/footer.php'; ?>
      <script src="<?php echo $base_url; ?>/assets/js/main.js" defer></script>
    </body>
    </html>
    <?php
    exit;
}

// 3. Fallback: 404 handler for completely unregistered URLs
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404 - Page Not Found | Shree Ashirwad Packers</title>
  <meta name="robots" content="noindex, follow">
  <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">
</head>
<body style="display:flex; flex-direction:column; min-height:100vh;">
  <?php include __DIR__ . '/includes/header.php'; ?>
  <main style="flex:1; display:flex; align-items:center; justify-content:center; padding: 60px 20px; text-align:center;">
    <div style="max-width: 500px;">
      <h1 style="font-size: 4rem; color: var(--accent); font-weight: 800; margin-bottom: 8px;">404</h1>
      <h2 style="font-size: 1.5rem; color: var(--primary); margin-bottom: 14px;">Page Not Found</h2>
      <p style="color: var(--text-muted); margin-bottom: 24px;">The page you are looking for might have been moved or does not exist.</p>
      <a href="<?php echo SITE_BASE_URL; ?>/" class="btn-hero-call">Return to Homepage</a>
    </div>
  </main>
  <?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
