<?php
/**
 * Page Name: Giridih to Hazaribagh Packers and Movers
 * Route Slug: giridih-to-hazaribagh-packers-and-movers
 * Description: Dedicated inter-district moving route page from Giridih to Hazaribagh across the Grand Trunk Road / NH-20 corridor.
 * Focus Keywords: giridih to hazaribagh packers and movers, packers and movers giridih to hazaribagh, house shifting giridih to hazaribagh, giridih to hazaribagh luggage parcel, giridih to hazaribagh car carrier, giridih to hazaribagh bike transport
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Giridih to Hazaribagh Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Best Giridih to Hazaribagh packers and movers by Shree Ashirwad. Fast 2.5 hr transit via Bagodar, 5-layer packing, car/bike parcel, GST billing. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/giridih-to-hazaribagh-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Giridih">

    <!-- Open Graph Metadata -->
    <meta property="og:type" content="business.business">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta property="og:url" content="<?php echo $canonical_url; ?>">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg">
    <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter Card Metadata -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg">

    <!-- Favicon & Stylesheets -->
    <link rel="icon" type="image/png" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
    <link rel="shortcut icon" href="<?php echo SITE_BASE_URL; ?>/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Scoped CSS for Route 8 (Giridih to Hazaribagh) -->
    <style>
        :root {
            --g2hzb-primary: #19385c;
            --g2hzb-secondary: #087f5b;
            --g2hzb-accent: #d9480f;
            --g2hzb-accent-light: #fff4e6;
            --g2hzb-dark: #0c1e33;
            --g2hzb-gray-bg: #f8fafc;
            --g2hzb-border: #e2e8f0;
            --g2hzb-text-main: #334155;
            --g2hzb-text-dark: #0f172a;
            --g2hzb-shadow-sm: 0 4px 6px -1px rgba(0,0,0,0.05);
            --g2hzb-shadow-md: 0 10px 15px -3px rgba(0,0,0,0.08);
            --g2hzb-shadow-lg: 0 20px 25px -5px rgba(0,0,0,0.12);
        }

        .g2hzb-hero {
            background: linear-gradient(135deg, rgba(12,30,51,0.92) 0%, rgba(25,56,92,0.86) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 90px 20px 80px;
            position: relative;
        }
        .g2hzb-hero-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .g2hzb-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(217,72,15,0.25);
            border: 1px solid #d9480f;
            color: #ffc9a8;
            padding: 6px 16px;
            border-radius: 50px;
            font-size: 0.88rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 20px;
        }
        .g2hzb-title {
            font-family: 'Outfit', sans-serif;
            font-size: 2.85rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
            color: #ffffff;
        }
        .g2hzb-subtitle {
            font-size: 1.18rem;
            line-height: 1.7;
            color: #e2e8f0;
            max-width: 860px;
            margin-bottom: 35px;
        }
        .g2hzb-hero-cta {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }
        .g2hzb-btn-primary {
            background: #d9480f;
            color: #ffffff;
            padding: 16px 36px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(217,72,15,0.35);
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }
        .g2hzb-btn-primary:hover {
            background: #b63a0a;
            transform: translateY(-2px);
            color: #ffffff;
        }
        .g2hzb-btn-outline {
            background: rgba(255,255,255,0.08);
            border: 2px solid rgba(255,255,255,0.3);
            color: #ffffff;
            padding: 14px 30px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .g2hzb-btn-outline:hover {
            background: rgba(255,255,255,0.2);
            color: #ffffff;
        }

        .g2hzb-breadcrumbs {
            background: #ffffff;
            border-bottom: 1px solid var(--g2hzb-border);
            padding: 14px 20px;
            font-size: 0.9rem;
        }
        .g2hzb-breadcrumbs-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            gap: 8px;
            align-items: center;
            color: #64748b;
        }
        .g2hzb-breadcrumbs a {
            color: var(--g2hzb-primary);
            text-decoration: none;
        }
        .g2hzb-breadcrumbs a:hover {
            text-decoration: underline;
        }

        .g2hzb-section {
            padding: 70px 20px;
        }
        .g2hzb-section-alt {
            background: var(--g2hzb-gray-bg);
        }
        .g2hzb-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .g2hzb-heading-wrap {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }
        .g2hzb-tag {
            color: var(--g2hzb-accent);
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.88rem;
            letter-spacing: 0.08em;
            display: block;
            margin-bottom: 10px;
        }
        .g2hzb-sec-title {
            font-family: 'Outfit', sans-serif;
            font-size: 2.25rem;
            color: var(--g2hzb-text-dark);
            margin-bottom: 16px;
            font-weight: 800;
        }
        .g2hzb-sec-desc {
            color: var(--g2hzb-text-main);
            font-size: 1.05rem;
            line-height: 1.7;
        }

        .g2hzb-metrics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 24px;
            margin-top: 30px;
        }
        .g2hzb-metric-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 28px 24px;
            border: 1px solid var(--g2hzb-border);
            box-shadow: var(--g2hzb-shadow-sm);
            text-align: center;
            transition: all 0.3s ease;
        }
        .g2hzb-metric-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--g2hzb-shadow-md);
            border-color: var(--g2hzb-accent);
        }
        .g2hzb-metric-num {
            font-family: 'Outfit', sans-serif;
            font-size: 2.3rem;
            font-weight: 800;
            color: var(--g2hzb-primary);
            margin-bottom: 8px;
        }
        .g2hzb-metric-lbl {
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--g2hzb-text-main);
        }

        .g2hzb-grid-2col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }
        .g2hzb-content-box p {
            color: var(--g2hzb-text-main);
            font-size: 1.05rem;
            line-height: 1.8;
            margin-bottom: 20px;
        }
        .g2hzb-img-box {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--g2hzb-shadow-lg);
        }
        .g2hzb-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .g2hzb-table-wrap {
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid var(--g2hzb-border);
            box-shadow: var(--g2hzb-shadow-md);
            margin-top: 30px;
        }
        .g2hzb-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        .g2hzb-table th {
            background: var(--g2hzb-primary);
            color: #ffffff;
            padding: 16px 20px;
            font-family: 'Outfit', sans-serif;
            font-size: 1.05rem;
            font-weight: 600;
        }
        .g2hzb-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--g2hzb-border);
            color: var(--g2hzb-text-main);
            font-size: 0.95rem;
        }
        .g2hzb-table tr:hover td {
            background-color: #f1f5f9;
        }
        .g2hzb-table .g2hzb-price-col {
            font-weight: 700;
            color: var(--g2hzb-accent);
        }

        .g2hzb-cards-3col {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 28px;
            margin-top: 40px;
        }
        .g2hzb-feature-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 32px 26px;
            border: 1px solid var(--g2hzb-border);
            box-shadow: var(--g2hzb-shadow-sm);
            transition: all 0.3s ease;
        }
        .g2hzb-feature-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--g2hzb-shadow-md);
            border-color: var(--g2hzb-primary);
        }
        .g2hzb-card-icon {
            width: 52px;
            height: 52px;
            background: var(--g2hzb-accent-light);
            color: var(--g2hzb-accent);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 20px;
            font-weight: 800;
        }
        .g2hzb-feature-title {
            font-family: 'Outfit', sans-serif;
            font-size: 1.3rem;
            color: var(--g2hzb-text-dark);
            margin-bottom: 12px;
            font-weight: 700;
        }
        .g2hzb-feature-card p {
            color: var(--g2hzb-text-main);
            font-size: 0.96rem;
            line-height: 1.7;
        }

        .g2hzb-faq-accordion {
            max-width: 900px;
            margin: 40px auto 0;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }
        .g2hzb-faq-item {
            background: #ffffff;
            border: 1px solid var(--g2hzb-border);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--g2hzb-shadow-sm);
        }
        .g2hzb-faq-q {
            padding: 20px 24px;
            font-family: 'Outfit', sans-serif;
            font-size: 1.12rem;
            font-weight: 700;
            color: var(--g2hzb-text-dark);
            background: #ffffff;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background 0.2s ease;
        }
        .g2hzb-faq-q:hover {
            background: #f8fafc;
        }
        .g2hzb-faq-a {
            padding: 0 24px 22px;
            color: var(--g2hzb-text-main);
            font-size: 0.98rem;
            line-height: 1.75;
        }

        .g2hzb-cluster-box {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--g2hzb-border);
            padding: 30px;
            box-shadow: var(--g2hzb-shadow-sm);
            margin-top: 40px;
        }
        .g2hzb-cluster-links {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 15px;
        }
        .g2hzb-cluster-link {
            background: var(--g2hzb-gray-bg);
            border: 1px solid var(--g2hzb-border);
            color: var(--g2hzb-primary);
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 0.88rem;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.2s ease;
        }
        .g2hzb-cluster-link:hover {
            background: var(--g2hzb-primary);
            color: #ffffff;
            border-color: var(--g2hzb-primary);
        }

        @media (max-width: 991px) {
            .g2hzb-grid-2col {
                grid-template-columns: 1fr;
            }
            .g2hzb-title {
                font-size: 2.2rem;
            }
            .g2hzb-sec-title {
                font-size: 1.85rem;
            }
        }
        @media (max-width: 600px) {
            .g2hzb-title {
                font-size: 1.8rem;
            }
            .g2hzb-hero {
                padding: 60px 15px 50px;
            }
            .g2hzb-section {
                padding: 50px 15px;
            }
            .g2hzb-table th, .g2hzb-table td {
                padding: 12px 14px;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Giridih to Hazaribagh Division",
        "description": "Licensed inter-district relocation and logistics agency operating dedicated daily moving services between Giridih and Hazaribagh. Complete packing, vehicle courier, and corporate relocation.",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91-8409531615",
        "email": "support@shreeashirwadpackers.com",
        "priceRange": "₹5,500 - ₹25,000",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Makatpur Main Chowk / Bada Chowk Area",
            "addressLocality": "Giridih",
            "addressRegion": "Jharkhand",
            "postalCode": "815301",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 24.1856,
            "longitude": 86.3059
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
            "opens": "07:00",
            "closes": "22:00"
        },
        "sameAs": [
            "https://www.facebook.com/shreeashirwadpackers",
            "https://twitter.com/shreeashirwadpm"
        ]
    }
    </script>

    <!-- Schema 2: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Interdistrict Relocation Service",
        "name": "Giridih to Hazaribagh Packers and Movers Service",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers",
            "telephone": "+91-8409531615"
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Giridih"
            },
            {
                "@type": "City",
                "name": "Hazaribagh"
            }
        ],
        "description": "Door-to-door household shifting, car carrier shipping, bike parcel, and commercial moving from Giridih to Hazaribagh via SH-13 and GT Road / NH-20.",
        "offers": {
            "@type": "AggregateOffer",
            "priceCurrency": "INR",
            "lowPrice": "1800",
            "highPrice": "25000",
            "offerCount": "10"
        }
    }
    </script>

    <!-- Schema 3: BreadcrumbList -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "<?php echo SITE_BASE_URL; ?>/"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "Packers and Movers in Hazaribagh",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hazaribagh"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Giridih to Hazaribagh Relocation",
                "item": "<?php echo $canonical_url; ?>"
            }
        ]
    }
    </script>

    <!-- Schema 4: FAQPage -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "How much time does shifting take from Giridih to Hazaribagh?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Giridih and Hazaribagh is approximately 105 to 115 km via SH-13 to Bagodar junction and onward along NH-20. Total driving time for our container truck is 2.5 to 3 hours. Loading in the morning enables complete doorstep delivery and unpacking in Hazaribagh by afternoon."
                }
            },
            {
                "@type": "Question",
                "name": "What are the moving rates from Giridih to Hazaribagh?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Standard tariffs range from ₹8,500 to ₹13,500 for a 1 BHK home, ₹12,500 to ₹18,500 for a 2 BHK apartment, and ₹17,000 to ₹25,000 for a 3 BHK family house. Two-wheeler parcel costs between ₹1,800 and ₹3,000, while car carrier transport ranges from ₹5,500 to ₹8,500."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide claimable bills for state government and bank transfers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We issue 100% genuine GST tax invoices, consignment bilty copies, transit insurance paperwork, and signed inventory lists acceptable by state administrative departments, nationalized banks, civil courts, and corporate firms."
                }
            },
            {
                "@type": "Question",
                "name": "Which highway route is used for goods transport between Giridih and Hazaribagh?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our trucks travel from Giridih along SH-13 through Pirtand to the Bagodar GT Road junction, then head westbound on NH-20 through Bishnugarh and Ichak directly into Hazaribagh town."
                }
            },
            {
                "@type": "Question",
                "name": "Can you pack and move fragile glassware and electronics safely?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We use 5-layer scientific packing including air-bubble wrap, thermo-foam cushioning, corrugated corner guards, and custom wooden crating for delicate items such as LED TVs, glassware, marble temples, and computers."
                }
            },
            {
                "@type": "Question",
                "name": "Which areas in Giridih are covered for pickup?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We provide doorstep pickup across all areas of Giridih including Makatpur, Bada Chowk, Pachamba, Sirsia, Mohanpur, Buxidih, New Barganda, Isri Bazar, Station Road, and surrounding residential colonies."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php include __DIR__ . '/../includes/header.php'; ?>

<!-- Breadcrumbs -->
<nav class="g2hzb-breadcrumbs" aria-label="Breadcrumbs">
    <div class="g2hzb-breadcrumbs-container">
        <a href="<?php echo SITE_BASE_URL; ?>/">Home</a> &rsaquo;
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hazaribagh">Hazaribagh Hub</a> &rsaquo;
        <span>Giridih to Hazaribagh</span>
    </div>
</nav>

<!-- Hero Section -->
<header class="g2hzb-hero">
    <div class="g2hzb-hero-container">
        <span class="g2hzb-badge">&#10004; Express Highway Corridor &bull; Same-Day Moving</span>
        <h1 class="g2hzb-title">Reliable Giridih to Hazaribagh Packers and Movers</h1>
        <p class="g2hzb-subtitle">Stress-free home shifting, vehicle transportation, and corporate transfers from Giridih to Hazaribagh. 110 km direct route via Bagodar &amp; NH-20 with 5-layer packing, guaranteed zero-damage transit, and transparent pricing.</p>
        <div class="g2hzb-hero-cta">
            <a href="tel:+918409531615" class="g2hzb-btn-primary">&#9742; Call 8409531615</a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact-us" class="g2hzb-btn-outline">Request Free Quote</a>
        </div>
    </div>
</header>

<!-- Quick Stats Bar -->
<section class="g2hzb-section g2hzb-section-alt">
    <div class="g2hzb-container">
        <div class="g2hzb-heading-wrap">
            <span class="g2hzb-tag">Corridor Highlights</span>
            <h2 class="g2hzb-sec-title">Route Benchmarks &amp; Efficiency Standards</h2>
            <p class="g2hzb-sec-desc">Connecting the mica and industrial hub of Giridih to North Chotanagpur's administrative heartland in Hazaribagh.</p>
        </div>
        <div class="g2hzb-metrics-grid">
            <div class="g2hzb-metric-card">
                <div class="g2hzb-metric-num">110 km</div>
                <div class="g2hzb-metric-lbl">Direct Corridor Distance</div>
            </div>
            <div class="g2hzb-metric-card">
                <div class="g2hzb-metric-num">2.5 &ndash; 3.0 Hrs</div>
                <div class="g2hzb-metric-lbl">Express Truck Driving Time</div>
            </div>
            <div class="g2hzb-metric-card">
                <div class="g2hzb-metric-num">Same-Day</div>
                <div class="g2hzb-metric-lbl">Morning Move, Evening Setup</div>
            </div>
            <div class="g2hzb-metric-card">
                <div class="g2hzb-metric-num">100%</div>
                <div class="g2hzb-metric-lbl">GST Invoice &amp; Insurance Protection</div>
            </div>
        </div>
    </div>
</section>

<!-- Route Overview & Regional Context -->
<section class="g2hzb-section">
    <div class="g2hzb-container">
        <div class="g2hzb-grid-2col">
            <div class="g2hzb-content-box">
                <span class="g2hzb-tag">Regional Logistics Analysis</span>
                <h2 class="g2hzb-sec-title">Seamless Shifting from Giridih to Hazaribagh</h2>
                <p>Relocating household belongings or commercial assets from Giridih &mdash; whether from Makatpur, Bada Chowk, Pachamba, or the industrial clusters near Sirsia and Mohanpur &mdash; to Hazaribagh requires an agile logistics team familiar with both urban corridors and state highway networks. Shree Ashirwad Packers and Movers brings over a decade of hands-on experience handling moves between these neighboring economic centers.</p>
                <p>Spanning roughly 105 to 115 km, the transit originates in Giridih, proceeds via State Highway 13 through Pirtand to the Grand Trunk Road junction at Bagodar, and joins the four-lane National Highway 20 toward Bishnugarh, Ichak, and Hazaribagh town. The trip takes only 2.5 to 3 hours under normal traffic, enabling our teams to complete full-home pack, load, transit, unload, and furniture reassembly within a single business day.</p>
                <p>Whether you are a government officer reassigned to North Chotanagpur divisional headquarters, a faculty member taking up a post at Vinoba Bhave University (VBU), a judicial officer transferring to the District Court, or a family settling in Korrah or Canary Hill, we ensure your personal belongings arrive in flawless condition.</p>
            </div>
            <div class="g2hzb-img-box">
                <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Dedicated container moving truck on the road between Giridih and Hazaribagh" loading="lazy" width="600" height="400">
            </div>
        </div>
    </div>
</section>

<!-- Pricing Transparency Table -->
<section class="g2hzb-section g2hzb-section-alt">
    <div class="g2hzb-container">
        <div class="g2hzb-heading-wrap">
            <span class="g2hzb-tag">Transparent Pricing</span>
            <h2 class="g2hzb-sec-title">Giridih to Hazaribagh Relocation Tariff Card</h2>
            <p class="g2hzb-sec-desc">Clear, competitive price estimates tailored to your house size and volume requirements. No hidden surcharges, tolls, or unexpected packing fees.</p>
        </div>
        <div class="g2hzb-table-wrap">
            <table class="g2hzb-table">
                <thead>
                    <tr>
                        <th>Move Type</th>
                        <th>Packing Material &amp; Crew Size</th>
                        <th>Estimated Transit</th>
                        <th>Price Estimate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment Shifting</strong></td>
                        <td>Multi-layer corrugated boxes, bubble cushioning, 3 crew members</td>
                        <td>2.5 &ndash; 3.0 Hours</td>
                        <td class="g2hzb-price-col">₹8,500 &ndash; ₹13,500</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Family Home Move</strong></td>
                        <td>5-layer packaging, wardrobe cartons, appliance safety, 4 crew</td>
                        <td>Same-Day Delivery</td>
                        <td class="g2hzb-price-col">₹12,500 &ndash; ₹18,500</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK / Independent House</strong></td>
                        <td>Full wooden crating, furniture dismantle/reassemble, 5-6 crew</td>
                        <td>Same-Day Delivery</td>
                        <td class="g2hzb-price-col">₹17,000 &ndash; ₹25,000</td>
                    </tr>
                    <tr>
                        <td><strong>Dedicated Two-Wheeler Parcel</strong></td>
                        <td>Tank bubble-wrap, handlebar/mirror foam, closed truck transport</td>
                        <td>Same-Day Delivery</td>
                        <td class="g2hzb-price-col">₹1,800 &ndash; ₹3,000</td>
                    </tr>
                    <tr>
                        <td><strong>Hatchback / Sedan Car Transport</strong></td>
                        <td>Dedicated carrier vehicle, wheel locking, photographic inspection</td>
                        <td>Same-Day / 24 Hours</td>
                        <td class="g2hzb-price-col">₹5,500 &ndash; ₹7,500</td>
                    </tr>
                    <tr>
                        <td><strong>SUV / Large Vehicle Moving</strong></td>
                        <td>Hydraulic ramp enclosed carrier, full transit risk insurance</td>
                        <td>Same-Day / 24 Hours</td>
                        <td class="g2hzb-price-col">₹6,500 &ndash; ₹8,500</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Packing Standards Section -->
<section class="g2hzb-section">
    <div class="g2hzb-container">
        <div class="g2hzb-grid-2col">
            <div class="g2hzb-img-box">
                <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Multi-layer protective household packaging for Giridih to Hazaribagh move" loading="lazy" width="600" height="400">
            </div>
            <div class="g2hzb-content-box">
                <span class="g2hzb-tag">Packing Excellence</span>
                <h2 class="g2hzb-sec-title">Advanced 5-Layer Packaging Technology</h2>
                <p>Every home relocation handled by Shree Ashirwad Packers and Movers adheres to standardized protective workflows. Road vibrations, occasional uneven road patches, and sudden braking can cause severe damage if goods are packed with inferior materials.</p>
                <p>Our 5-layer packing system provides uncompromising defense:</p>
                <ul style="color: var(--g2hzb-text-main); line-height: 1.8; margin-left: 20px; margin-bottom: 20px;">
                    <li><strong>Layer 1 - Scratch Guard:</strong> High-stretch polythene wrap applied directly to polished wooden wardrobes, dining tables, and leather furniture to shield against friction marks and moisture.</li>
                    <li><strong>Layer 2 - Shock Absorption:</strong> Multi-ply heavy-duty air-bubble sheets wrapped around delicate bone china crockery, glassware, microwave ovens, and computers.</li>
                    <li><strong>Layer 3 - Heavy-Duty Corrugated Board:</strong> Rigid corrugated sheets wrapped over bed headboards, sofa armrests, and corner edges.</li>
                    <li><strong>Layer 4 - Custom Wooden Crating:</strong> Custom timber frames designed specifically for oversized smart televisions, stone temples, and valuable antique items.</li>
                    <li><strong>Layer 5 - Lashing &amp; Anchoring:</strong> High-tension poly-strapping bands securely anchoring each box and furniture element within the truck container.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Vehicle Transport Section -->
<section class="g2hzb-section g2hzb-section-alt">
    <div class="g2hzb-container">
        <div class="g2hzb-grid-2col">
            <div class="g2hzb-content-box">
                <span class="g2hzb-tag">Safe Vehicle Moving</span>
                <h2 class="g2hzb-sec-title">Car Carrier &amp; Two-Wheeler Parcel Services</h2>
                <p>Driving your personal car or motorbike across inter-district highways like SH-13 and GT Road exposes your vehicle to road construction dust, stone chips, and driver exhaustion. Shree Ashirwad Packers and Movers offers secure, insured vehicle transportation from Giridih to Hazaribagh.</p>
                <p>For motorcycles and scooters, our technicians drain excess fuel, cushion mirrors and turn signals in heavy foam, and anchor the bike onto specialized floor clamps inside our closed containers. Your vehicle remains shielded from sun, rain, and highway grime throughout the trip.</p>
                <p>For sedans, hatchbacks, and SUVs, we utilize specialized car carriers equipped with hydraulic ramps, heavy-duty wheel chocks, and four-point harness belts. A comprehensive pre-loading inspection report logs fuel levels and existing body conditions so you receive your vehicle in exactly the state it was handed over.</p>
            </div>
            <div class="g2hzb-img-box">
                <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Automobile carrier loading personal car for transit from Giridih to Hazaribagh" loading="lazy" width="600" height="400">
            </div>
        </div>
    </div>
</section>

<!-- Destination Delivery & Setup -->
<section class="g2hzb-section">
    <div class="g2hzb-container">
        <div class="g2hzb-grid-2col">
            <div class="g2hzb-img-box">
                <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and home arrangement service at Hazaribagh" loading="lazy" width="600" height="400">
            </div>
            <div class="g2hzb-content-box">
                <span class="g2hzb-tag">End-to-End Care</span>
                <h2 class="g2hzb-sec-title">Hazaribagh Doorstep Unpacking &amp; Setup</h2>
                <p>Our moving service does not stop at unloading boxes at your doorstep. Moving is only truly complete when your family feels at home. Our trained crew unloads every carton, brings heavy furniture upstairs, and places each item in its specified room in your new Hazaribagh home.</p>
                <p>Our technicians reassemble modular beds, attach wardrobe handles, set up dining sets, and arrange heavy household appliances like washing machines and refrigerators in position. Once unpacking is concluded, our staff cleans up all discarded corrugated sheets, bubble wrap clippings, and plastic waste, leaving your new residence clean, tidy, and ready to live in.</p>
                <p><strong>Government &amp; Bank Transfer Paperwork:</strong> We supply all documentation required for company reimbursement including GST tax invoices, consignment bilty, transit insurance receipts, and stamped packing lists.</p>
            </div>
        </div>
    </div>
</section>

<!-- Commercial & Institutional Relocations -->
<section class="g2hzb-section" style="background: #ffffff;">
    <div class="g2hzb-container">
        <div class="g2hzb-grid-2col">
            <div class="g2hzb-content-box">
                <span class="g2hzb-tag">Institutional Solutions</span>
                <h2 class="g2hzb-sec-title">Corporate, Judicial &amp; Commercial Office Relocations</h2>
                <p>Beyond family homes, Shree Ashirwad Packers and Movers is the preferred relocation contractor for government officials, judicial magistrates, banking staff, and commercial enterprises moving between Giridih and Hazaribagh. We manage delicate institutional records, legal files, server racks, office workstations, and conference furniture with strict confidentiality and barcode tracking.</p>
                <p>For officers transferring between Giridih Civil Court and Hazaribagh District Court, or administrative personnel reporting to the North Chotanagpur Divisional Commissionerate, we deliver customized weekend shifting so administrative workflow suffers zero disruption. All files are boxed in numbered anti-static archives and loaded into lockable container trucks.</p>
                <p>Commercial shops, pharmaceutical distributors, and trading firms in Makatpur and Pachamba expanding or shifting branches to Hazaribagh market hubs enjoy scheduled night freight, express cargo transit, and full transit risk indemnification.</p>
            </div>
            <div class="g2hzb-content-box" style="background: var(--g2hzb-gray-bg); padding: 36px 30px; border-radius: 12px; border: 1px solid var(--g2hzb-border);">
                <h3 style="font-family: 'Outfit', sans-serif; font-size: 1.35rem; color: var(--g2hzb-text-dark); margin-bottom: 16px;">Comprehensive Documentation Included</h3>
                <ul style="color: var(--g2hzb-text-main); font-size: 0.95rem; line-height: 1.8; margin-left: 20px; margin-bottom: 0;">
                    <li>Official 100% compliant GST Tax Invoice with SAC 9965/9967</li>
                    <li>IBA-Approved Consignment Note (Lorry Receipt / Bilty)</li>
                    <li>Item-by-item verified inventory checklist signed by supervisors</li>
                    <li>Transit insurance policy covering transit road contingencies</li>
                    <li>Advance cost estimation and competitive formal quotations</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Step-by-Step Moving Process -->
<section class="g2hzb-section g2hzb-section-alt">
    <div class="g2hzb-container">
        <div class="g2hzb-heading-wrap">
            <span class="g2hzb-tag">Systematic Procedure</span>
            <h2 class="g2hzb-sec-title">Our 6-Step Moving Workflow</h2>
            <p class="g2hzb-sec-desc">A predictable, hassle-free moving experience designed specifically for the Giridih to Hazaribagh route.</p>
        </div>
        <div class="g2hzb-cards-3col">
            <div class="g2hzb-feature-card">
                <div class="g2hzb-card-icon">1</div>
                <h3 class="g2hzb-feature-title">Pre-Move Assessment</h3>
                <p>We review your home inventory via phone, WhatsApp video, or in-person survey across Giridih to recommend the ideal truck size and supply an all-inclusive cost estimate.</p>
            </div>
            <div class="g2hzb-feature-card">
                <div class="g2hzb-card-icon">2</div>
                <h3 class="g2hzb-feature-title">Professional Packing</h3>
                <p>Our team arrives at your Giridih residence with complete packaging materials, carefully wrapping furniture, disassembling beds, and packing fragile items in labeled boxes.</p>
            </div>
            <div class="g2hzb-feature-card">
                <div class="g2hzb-card-icon">3</div>
                <h3 class="g2hzb-feature-title">Scientific Loading</h3>
                <p>Heavy goods are placed on the truck floor, cushioned by moving blankets, while lighter boxes and delicate electronics are secured in top positions using cargo lashings.</p>
            </div>
            <div class="g2hzb-feature-card">
                <div class="g2hzb-card-icon">4</div>
                <h3 class="g2hzb-feature-title">Express Highway Transit</h3>
                <p>Our dedicated container truck travels via SH-13 and NH-20 with real-time GPS tracking, avoiding unnecessary stops and delivering directly to Hazaribagh within 3 hours.</p>
            </div>
            <div class="g2hzb-feature-card">
                <div class="g2hzb-card-icon">5</div>
                <h3 class="g2hzb-feature-title">Unloading &amp; Room Setup</h3>
                <p>Upon arrival in Hazaribagh, our crew carries items into the designated rooms, reassembles beds and tables, and places large appliances in position.</p>
            </div>
            <div class="g2hzb-feature-card">
                <div class="g2hzb-card-icon">6</div>
                <h3 class="g2hzb-feature-title">Debris Disposal &amp; Handover</h3>
                <p>We clear away all discarded cartons and bubble wrap scrap, conduct a final checklist inspection with you, and hand over your finalized GST billing documents.</p>
            </div>
        </div>
    </div>
</section>

<!-- Locality Coverage Section -->
<section class="g2hzb-section">
    <div class="g2hzb-container">
        <div class="g2hzb-grid-2col">
            <div class="g2hzb-content-box">
                <span class="g2hzb-tag">Complete Locality Coverage</span>
                <h2 class="g2hzb-sec-title">From Every Giridih Ward to All Hazaribagh Neighborhoods</h2>
                <p>Our logistics network covers every municipal ward, residential enclave, and commercial area of Giridih. We routinely dispatch moving crews to Makatpur, Bada Chowk, Pachamba, Sirsia, Mohanpur, Isri Bazar, Buxidih, New Barganda, and Giridih Station Road.</p>
                <p>In Hazaribagh, our destination teams provide direct doorstep delivery across Matwari, Korrah, Canary Hill Road, Nawabganj, Okni, Hurhuru, Babugaon, Pugmil, Demotand, Dipugarha, BSF Meru Cantonment, and Vinoba Bhave University campus.</p>
            </div>
            <div class="g2hzb-content-box" style="background: var(--g2hzb-gray-bg); padding: 36px 30px; border-radius: 12px; border: 1px solid var(--g2hzb-border);">
                <h3 style="font-family: 'Outfit', sans-serif; font-size: 1.3rem; color: var(--g2hzb-text-dark); margin-bottom: 14px;">Giridih Pickup Localities</h3>
                <p style="color: var(--g2hzb-text-main); font-size: 0.95rem; line-height: 1.7; margin-bottom: 20px;">Makatpur, Bada Chowk, Pachamba, Sirsia Industrial Belt, Mohanpur, Isri Bazar, Buxidih, New Barganda, Giridih Railway Colony, Alkapuri.</p>
                <h3 style="font-family: 'Outfit', sans-serif; font-size: 1.3rem; color: var(--g2hzb-text-dark); margin-bottom: 14px;">Hazaribagh Destination Localities</h3>
                <p style="color: var(--g2hzb-text-main); font-size: 0.95rem; line-height: 1.7; margin-bottom: 0;">Matwari, Korrah Chowk, Canary Hill Enclave, Nawabganj, Okni, Hurhuru, Babugaon, Dipugarha, Demotand, Pugmil, BSF Meru, Police Training Academy, VBU Campus.</p>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions -->
<section class="g2hzb-section g2hzb-section-alt">
    <div class="g2hzb-container">
        <div class="g2hzb-heading-wrap">
            <span class="g2hzb-tag">Help &amp; Clarifications</span>
            <h2 class="g2hzb-sec-title">Frequently Asked Questions: Giridih to Hazaribagh Move</h2>
            <p class="g2hzb-sec-desc">Common questions answered regarding transit duration, moving costs, packing methods, and paperwork.</p>
        </div>
        <div class="g2hzb-faq-accordion">
            <div class="g2hzb-faq-item">
                <div class="g2hzb-faq-q">How much time does shifting take from Giridih to Hazaribagh? <span>+</span></div>
                <div class="g2hzb-faq-a">The highway distance between Giridih and Hazaribagh is approximately 105 to 115 km via SH-13 to Bagodar junction and onward along NH-20. Total driving time for our container truck is 2.5 to 3 hours. Loading in the morning enables complete doorstep delivery and unpacking in Hazaribagh by afternoon.</div>
            </div>
            <div class="g2hzb-faq-item">
                <div class="g2hzb-faq-q">What are the moving rates from Giridih to Hazaribagh? <span>+</span></div>
                <div class="g2hzb-faq-a">Standard tariffs range from ₹8,500 to ₹13,500 for a 1 BHK home, ₹12,500 to ₹18,500 for a 2 BHK apartment, and ₹17,000 to ₹25,000 for a 3 BHK family house. Two-wheeler parcel costs between ₹1,800 and ₹3,000, while car carrier transport ranges from ₹5,500 to ₹8,500.</div>
            </div>
            <div class="g2hzb-faq-item">
                <div class="g2hzb-faq-q">Do you provide claimable bills for state government and bank transfers? <span>+</span></div>
                <div class="g2hzb-faq-a">Yes. We issue 100% genuine GST tax invoices, consignment bilty copies, transit insurance paperwork, and signed inventory lists acceptable by state administrative departments, nationalized banks, civil courts, and corporate firms.</div>
            </div>
            <div class="g2hzb-faq-item">
                <div class="g2hzb-faq-q">Which highway route is used for goods transport between Giridih and Hazaribagh? <span>+</span></div>
                <div class="g2hzb-faq-a">Our trucks travel from Giridih along SH-13 through Pirtand to the Bagodar GT Road junction, then head westbound on NH-20 through Bishnugarh and Ichak directly into Hazaribagh town.</div>
            </div>
            <div class="g2hzb-faq-item">
                <div class="g2hzb-faq-q">Can you pack and move fragile glassware and electronics safely? <span>+</span></div>
                <div class="g2hzb-faq-a">Yes. We use 5-layer scientific packing including air-bubble wrap, thermo-foam cushioning, corrugated corner guards, and custom wooden crating for delicate items such as LED TVs, glassware, marble temples, and computers.</div>
            </div>
            <div class="g2hzb-faq-item">
                <div class="g2hzb-faq-q">Which areas in Giridih are covered for pickup? <span>+</span></div>
                <div class="g2hzb-faq-a">We provide doorstep pickup across all areas of Giridih including Makatpur, Bada Chowk, Pachamba, Sirsia, Mohanpur, Buxidih, New Barganda, Isri Bazar, Station Road, and surrounding residential colonies.</div>
            </div>
        </div>
    </div>
</section>

<!-- Cluster Links -->
<section class="g2hzb-section">
    <div class="g2hzb-container">
        <div class="g2hzb-cluster-box">
            <span class="g2hzb-tag">Interconnected Service Corridors</span>
            <h3 style="font-family: 'Outfit', sans-serif; font-size: 1.35rem; color: var(--g2hzb-text-dark); margin-bottom: 10px;">Explore Related Jharkhand Relocation Routes</h3>
            <p style="color: var(--g2hzb-text-main); font-size: 0.95rem; line-height: 1.6;">Shree Ashirwad Packers and Movers operates dedicated corridors linking Hazaribagh with Giridih and other key centers across Jharkhand:</p>
            <div class="g2hzb-cluster-links">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hazaribagh" class="g2hzb-cluster-link">Hazaribagh Main Hub</a>
                <a href="<?php echo SITE_BASE_URL; ?>/hazaribagh-to-giridih-packers-and-movers" class="g2hzb-cluster-link">Hazaribagh to Giridih</a>
                <a href="<?php echo SITE_BASE_URL; ?>/hazaribagh-to-dhanbad-packers-and-movers" class="g2hzb-cluster-link">Hazaribagh to Dhanbad</a>
                <a href="<?php echo SITE_BASE_URL; ?>/dhanbad-to-hazaribagh-packers-and-movers" class="g2hzb-cluster-link">Dhanbad to Hazaribagh</a>
                <a href="<?php echo SITE_BASE_URL; ?>/hazaribagh-to-jamshedpur-packers-and-movers" class="g2hzb-cluster-link">Hazaribagh to Jamshedpur</a>
                <a href="<?php echo SITE_BASE_URL; ?>/jamshedpur-to-hazaribagh-packers-and-movers" class="g2hzb-cluster-link">Jamshedpur to Hazaribagh</a>
                <a href="<?php echo SITE_BASE_URL; ?>/hazaribagh-to-ramgarh-packers-and-movers" class="g2hzb-cluster-link">Hazaribagh to Ramgarh</a>
                <a href="<?php echo SITE_BASE_URL; ?>/hazaribagh-to-koderma-packers-and-movers" class="g2hzb-cluster-link">Hazaribagh to Koderma</a>
                <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-hazaribagh-packers-and-movers" class="g2hzb-cluster-link">Ranchi to Hazaribagh</a>
                <a href="<?php echo SITE_BASE_URL; ?>/hazaribagh-to-ranchi-packers-and-movers" class="g2hzb-cluster-link">Hazaribagh to Ranchi</a>
                <a href="<?php echo SITE_BASE_URL; ?>/bokaro-to-hazaribagh-packers-and-movers" class="g2hzb-cluster-link">Bokaro to Hazaribagh</a>
                <a href="<?php echo SITE_BASE_URL; ?>/hazaribagh-to-bokaro-packers-and-movers" class="g2hzb-cluster-link">Hazaribagh to Bokaro</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-hazaribagh-packers-and-movers" class="g2hzb-cluster-link">Deoghar to Hazaribagh</a>
                <a href="<?php echo SITE_BASE_URL; ?>/hazaribagh-to-deoghar-packers-and-movers" class="g2hzb-cluster-link">Hazaribagh to Deoghar</a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
