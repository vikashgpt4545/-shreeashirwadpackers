<?php
/**
 * Global Configuration for Shree Ashirwad Packers and Movers
 * Pure Core PHP Implementation
 */

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Environment Detection & Base URL Handling
$is_https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || 
            (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') ||
            (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443);

$protocol = $is_https ? 'https://' : 'http://';
$http_host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';

// Strict Canonical Domain for Production
define('PRODUCTION_CANONICAL_DOMAIN', 'https://www.shreeashirwadpackers.com');

// Dynamic Base URL for asset loading across both local development and production
if ($http_host === 'localhost' || strpos($http_host, '127.0.0.1') !== false || strpos($http_host, 'localhost:') !== false) {
    $script_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
    $script_dir = rtrim($script_dir, '/');
    define('SITE_BASE_URL', $protocol . $http_host . ($script_dir ? $script_dir : ''));
} else {
    define('SITE_BASE_URL', PRODUCTION_CANONICAL_DOMAIN);
}

// Business Entity & Contact Details (Verified directly from live website and official records)
define('BUSINESS_NAME', 'Shree Ashirwad Packers and Movers');
define('BRAND_SHORT_NAME', 'Shree Ashirwad Packers');
define('PRIMARY_PHONE', '+91 9835565233');
define('PRIMARY_PHONE_RAW', '+919835565233');
define('SECONDARY_PHONE', '+91 8409531615');
define('SECONDARY_PHONE_RAW', '+918409531615');
define('WHATSAPP_NUMBER', '+918409531615');
define('WHATSAPP_LINK', 'https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20would%20like%20to%20get%20a%20free%20moving%20quote.');
define('OFFICIAL_EMAIL', 'enquiry@shreeashirwadpackers.com');

// Verified Physical Addresses
define('RANCHI_HQ_STREET', 'Anandpuri Chowk, Vidyanagar Road, Harmu');
define('RANCHI_HQ_CITY', 'Ranchi');
define('RANCHI_HQ_STATE', 'Jharkhand');
define('RANCHI_HQ_PINCODE', '834001');
define('RANCHI_HQ_FULL_ADDRESS', 'Anandpuri Chowk, Vidyanagar Road, Harmu, Ranchi, Jharkhand - 834001');
define('RANCHI_GEO_LAT', 23.3639813);
define('RANCHI_GEO_LNG', 85.3090259);

define('BOKARO_BRANCH_STREET', 'Plot no - 54/c, Post office sector - 12/A');
define('BOKARO_BRANCH_CITY', 'Bokaro');
define('BOKARO_BRANCH_STATE', 'Jharkhand');
define('BOKARO_BRANCH_PINCODE', '827012');
define('BOKARO_BRANCH_FULL_ADDRESS', 'Plot no - 54/c, Post office sector - 12/A, Bokaro, Jharkhand - 827012');

// Verified Social Media Profiles
define('SOCIAL_FACEBOOK', 'https://www.facebook.com/profile.php?id=100087587272831');
define('SOCIAL_TWITTER', 'https://twitter.com/ashirwad_packer');
define('SOCIAL_INSTAGRAM', 'https://www.instagram.com/shree_ashirwad_packersmovers/');
define('SOCIAL_YOUTUBE', 'https://www.youtube.com/@shreeashirwadpackers');
define('SOCIAL_PINTEREST', 'https://in.pinterest.com/ashirwadpackersandmovers/');

// Official Bank Transfer Details (Axis Bank)
define('BANK_NAME', 'Axis Bank, Upper Bazaar, Ranchi');
define('BANK_ACCOUNT_HOLDER', 'Shree Ashirwad Packers & Movers');
define('BANK_ACCOUNT_NUMBER', '921020039005609');
define('BANK_IFSC_CODE', 'UTIB0004102');
define('BANK_ACCOUNT_TYPE', 'Current Account');
define('BANK_BRANCH', 'Upper Bazaar, Ranchi, Jharkhand');

// Google Search Console, Ads & Analytics IDs
define('GOOGLE_SITE_VERIFICATION', '4bS_SrvZhqlH-eGeSRLjjQWU_pRDn4MxrlNKiYnh2Go');
define('GOOGLE_GTAG_ID', 'AW-11099301221');
define('GOOGLE_GA4_ID', 'G-MH5VFVB7R6');

/**
 * Generate CSRF token in session
 * @return string
 */
function generate_csrf_token(): string {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return (string)$_SESSION['csrf_token'];
}

/**
 * Verify CSRF token
 * @param string|null $token
 * @return bool
 */
function verify_csrf_token(?string $token): bool {
    if (!isset($_SESSION['csrf_token']) || empty($token)) {
        return false;
    }
    return hash_equals($_SESSION['csrf_token'], $token);
}

/**
 * Input Sanitization Helper
 * @param string|array|null $input
 * @return string|array
 */
function sanitize_text(string|array|null $input): string|array {
    if (is_array($input)) {
        return array_map('sanitize_text', $input);
    }
    return htmlspecialchars(trim((string)$input), ENT_QUOTES, 'UTF-8');
}

/**
 * Universal Google Tag (gtag.js) Injector & Synchronizer
 * Guarantees that Google Analytics 4 (G-MH5VFVB7R6) and Google Ads (AW-11099301221)
 * are cleanly and correctly active in the <head> of 100% of pages across the site.
 */
function inject_universal_google_tag(string $buffer): string {
    if (empty($buffer) || stripos($buffer, '<head') === false) {
        return $buffer;
    }

    $ga4_id = defined('GOOGLE_GA4_ID') ? GOOGLE_GA4_ID : 'G-MH5VFVB7R6';
    $ads_id = defined('GOOGLE_GTAG_ID') ? GOOGLE_GTAG_ID : 'AW-11099301221';

    $has_ga4 = stripos($buffer, $ga4_id) !== false;
    $has_gtag = stripos($buffer, 'googletagmanager.com/gtag/js') !== false;

    // If GA4 is already present in this response, avoid duplicating
    if ($has_ga4) {
        return $buffer;
    }

    // Case 1: Page already has an existing gtag.js block (e.g. only configured for Google Ads)
    if ($has_gtag) {
        $buffer = preg_replace(
            '/(gtag\s*\(\s*[\'"]config[\'"]\s*,\s*[\'"][^\'"]+[\'"]\s*\);)/i',
            "$1\n    gtag('config', '{$ga4_id}');",
            $buffer,
            1
        );
        return $buffer;
    }

    // Case 2: Page does not have Google Tag (e.g. location pages, utility pages)
    $tag_snippet = "\n  <!-- Google tag (gtag.js) -->\n" .
        "  <script async src=\"https://www.googletagmanager.com/gtag/js?id={$ga4_id}\"></script>\n" .
        "  <script>\n" .
        "    window.dataLayer = window.dataLayer || [];\n" .
        "    function gtag(){dataLayer.push(arguments);}\n" .
        "    gtag('js', new Date());\n\n" .
        "    gtag('config', '{$ga4_id}');\n" .
        "    gtag('config', '{$ads_id}');\n" .
        "  </script>";

    $buffer = preg_replace('/(<head\b[^>]*>)/i', "$1" . $tag_snippet, $buffer, 1);

    return $buffer;
}

/**
 * Universal SEO Title Attribute Auto-Enricher
 * Guarantees 100% of <a> links and <img> tags across all pages
 * have descriptive, valid title attributes for search engines and SEO audit tools.
 */
function seo_auto_enrich_titles(string $buffer): string {
    if (empty($buffer) || stripos($buffer, '<html') === false) {
        return $buffer;
    }

    // 0. Universally inject/sync Google tag (gtag.js) for GA4 and Google Ads across all pages
    $buffer = inject_universal_google_tag($buffer);

    // 1. Ensure all <img> tags have a title attribute (mirrors alt text or official brand name)
    $buffer = preg_replace_callback('/<img\b([^>]*?)>/i', function($matches) {
        $img_tag = $matches[0];
        $attrs = $matches[1];

        if (preg_match('/\btitle\s*=/i', $attrs)) {
            return $img_tag;
        }

        $title_val = '';
        if (preg_match('/\balt\s*=\s*([\"\'])(.*?)\1/i', $attrs, $alt_m)) {
            $title_val = trim($alt_m[2]);
        }

        if (empty($title_val)) {
            $title_val = 'Shree Ashirwad Packers and Movers Jharkhand';
        }

        $title_val = htmlspecialchars(strip_tags($title_val), ENT_QUOTES, 'UTF-8');
        return '<img title="' . $title_val . '"' . $attrs . '>';
    }, $buffer);

    // 2. Ensure all <a> tags have a title attribute
    $buffer = preg_replace_callback('/<a\b([^>]*?)>(.*?)<\/a>/is', function($matches) {
        $full_tag = $matches[0];
        $attrs = $matches[1];
        $inner_text = $matches[2];

        if (preg_match('/\btitle\s*=/i', $attrs)) {
            return $full_tag;
        }

        $title_val = '';
        $clean_text = trim(strip_tags($inner_text));

        if (!empty($clean_text)) {
            if (preg_match('/[0-9]{10}/', $clean_text)) {
                $title_val = 'Call Shree Ashirwad Packers: ' . $clean_text;
            } elseif (stripos($clean_text, 'Home') !== false) {
                $title_val = 'Shree Ashirwad Packers Homepage';
            } elseif (stripos($clean_text, 'Contact') !== false) {
                $title_val = 'Contact Shree Ashirwad Packers and Movers';
            } elseif (stripos($clean_text, 'About') !== false) {
                $title_val = 'About Shree Ashirwad Packers and Movers';
            } elseif (stripos($clean_text, 'WhatsApp') !== false) {
                $title_val = 'Chat on WhatsApp with Shree Ashirwad Packers';
            } elseif (stripos($clean_text, 'Call') !== false) {
                $title_val = 'Call Shree Ashirwad Packers: 8409531615';
            } else {
                $title_val = $clean_text;
            }
        }

        if (empty($title_val)) {
            if (preg_match('/\bhref\s*=\s*([\"\'])(.*?)\1/i', $attrs, $href_m)) {
                $href = $href_m[2];
                if (stripos($href, 'tel:') !== false) {
                    $phone = str_replace(['tel:', '+91', ' ', '-'], '', $href);
                    $title_val = 'Call Shree Ashirwad Packers: ' . ($phone ?: '8409531615');
                } elseif (stripos($href, 'mailto:') !== false) {
                    $title_val = 'Email Shree Ashirwad Packers';
                } elseif (stripos($href, 'wa.me') !== false || stripos($href, 'whatsapp') !== false) {
                    $title_val = 'Chat on WhatsApp with Shree Ashirwad Packers';
                } elseif ($href === '/' || stripos($href, '#jharkhand-network') !== false) {
                    $title_val = 'Shree Ashirwad Packers Jharkhand Network';
                } elseif (stripos($href, 'contact') !== false) {
                    $title_val = 'Contact Shree Ashirwad Packers and Movers';
                } else {
                    $title_val = 'Shree Ashirwad Packers and Movers';
                }
            } else {
                $title_val = 'Shree Ashirwad Packers and Movers';
            }
        }

        $title_val = htmlspecialchars(strip_tags($title_val), ENT_QUOTES, 'UTF-8');
        return '<a title="' . $title_val . '"' . $attrs . '>' . $inner_text . '</a>';
    }, $buffer);

    return $buffer;
}

// Start output buffer for automatic title enrichment
ob_start('seo_auto_enrich_titles');

