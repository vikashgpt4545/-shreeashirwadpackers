<?php
/**
 * Page Name: Jamshedpur to Deoghar Packers and Movers
 * Route Slug: jamshedpur-to-deoghar-packers-and-movers
 * Description: Dedicated intercity moving route page connecting Jamshedpur (The Steel City of India) to Deoghar (Baidyanath Dham & Santhal Pargana).
 * Focus Keywords: jamshedpur to deoghar packers and movers, packers and movers jamshedpur to deoghar, house shifting jamshedpur to deoghar, jamshedpur to deoghar luggage parcel, jamshedpur to deoghar car carrier, jamshedpur to deoghar bike parcel
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Jamshedpur to Deoghar Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Top Jamshedpur to Deoghar packers and movers by Shree Ashirwad. Same-day 10-12 hr transit, Tata & AIIMS bills, 5-layer packing, car carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/jamshedpur-to-deoghar-packers-and-movers";
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
    <meta name="geo.placename" content="Jamshedpur">

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

    <!-- Scoped CSS for Route 7 (Jamshedpur to Deoghar) -->
    <style>
        :root {
            --jsr2d-primary: #0f3c5c;
            --jsr2d-secondary: #164e63;
            --jsr2d-accent: #d97706;
            --jsr2d-accent-light: #fef3c7;
            --jsr2d-dark: #0f172a;
            --jsr2d-gray-bg: #f8fafc;
            --jsr2d-border: #e2e8f0;
        }

        .jsr2d-wrapper {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #334155;
            line-height: 1.7;
        }

        .jsr2d-hero {
            background: linear-gradient(135deg, rgba(15,60,92,0.95) 0%, rgba(22,78,99,0.92) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 20px 75px;
            text-align: center;
            position: relative;
        }
        .jsr2d-hero-content {
            max-width: 980px;
            margin: 0 auto;
        }
        .jsr2d-badge {
            display: inline-block;
            background: rgba(217,119,6,0.25);
            border: 1px solid rgba(217,119,6,0.5);
            color: #fef3c7;
            padding: 6px 18px;
            border-radius: 50px;
            font-size: 0.88rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 20px;
        }
        .jsr2d-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2rem, 4vw, 3.2rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 18px;
            letter-spacing: -0.02em;
        }
        .jsr2d-hero h1 span {
            color: #fbbf24;
        }
        .jsr2d-hero p {
            font-size: 1.15rem;
            max-width: 820px;
            margin: 0 auto 30px;
            color: #e2e8f0;
            font-weight: 400;
        }
        .jsr2d-hero-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 15px;
            margin-top: 35px;
        }
        .jsr2d-stat-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 16px 12px;
            border-radius: 12px;
        }
        .jsr2d-stat-val {
            font-family: 'Outfit', sans-serif;
            font-size: 1.8rem;
            font-weight: 800;
            color: #fbbf24;
        }
        .jsr2d-stat-lbl {
            font-size: 0.82rem;
            color: #cbd5e1;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* Action Bar */
        .jsr2d-action-bar {
            background: #ffffff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            border-radius: 16px;
            max-width: 960px;
            margin: -40px auto 40px;
            padding: 24px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            position: relative;
            z-index: 10;
            border: 1px solid var(--jsr2d-border);
        }
        .jsr2d-action-info h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.25rem;
            margin: 0 0 5px;
            color: var(--jsr2d-dark);
        }
        .jsr2d-action-info p {
            margin: 0;
            color: #64748b;
            font-size: 0.95rem;
        }
        .jsr2d-btn-group {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }
        .jsr2d-btn-phone, .jsr2d-btn-whatsapp {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 24px;
            border-radius: 10px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }
        .jsr2d-btn-phone {
            background: var(--jsr2d-primary);
            color: #ffffff;
        }
        .jsr2d-btn-phone:hover {
            background: var(--jsr2d-secondary);
            color: #ffffff;
            transform: translateY(-2px);
        }
        .jsr2d-btn-whatsapp {
            background: #25d366;
            color: #ffffff;
        }
        .jsr2d-btn-whatsapp:hover {
            background: #1eb954;
            color: #ffffff;
            transform: translateY(-2px);
        }

        /* Content Sections */
        .jsr2d-section {
            padding: 60px 20px;
            max-width: 1140px;
            margin: 0 auto;
        }
        .jsr2d-section-header {
            text-align: center;
            max-width: 780px;
            margin: 0 auto 45px;
        }
        .jsr2d-section-header h2 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(1.8rem, 3vw, 2.4rem);
            color: var(--jsr2d-dark);
            margin-bottom: 12px;
            font-weight: 800;
        }
        .jsr2d-section-header p {
            color: #64748b;
            font-size: 1.05rem;
            margin: 0;
        }

        /* Grid Layouts */
        .jsr2d-grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            align-items: center;
        }
        .jsr2d-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }
        .jsr2d-grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
        }

        .jsr2d-feature-card {
            background: #ffffff;
            border: 1px solid var(--jsr2d-border);
            border-radius: 14px;
            padding: 26px;
            transition: all 0.3s ease;
        }
        .jsr2d-feature-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(0,0,0,0.06);
            border-color: #cbd5e1;
        }
        .jsr2d-feature-card h3, .jsr2d-feature-card h4 {
            font-family: 'Outfit', sans-serif;
            color: var(--jsr2d-dark);
            margin: 0 0 10px;
            font-size: 1.25rem;
        }
        .jsr2d-feature-card p {
            color: #64748b;
            font-size: 0.95rem;
            margin: 0;
            line-height: 1.65;
        }

        /* Image Showcase */
        .jsr2d-img-container {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            border: 1px solid var(--jsr2d-border);
        }
        .jsr2d-img-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }
        .jsr2d-img-container:hover img {
            transform: scale(1.03);
        }
        .jsr2d-img-caption {
            background: #ffffff;
            padding: 12px 16px;
            font-size: 0.88rem;
            color: #475569;
            font-weight: 500;
            border-top: 1px solid var(--jsr2d-border);
        }

        /* Rate Table */
        .jsr2d-table-container {
            background: #ffffff;
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid var(--jsr2d-border);
            box-shadow: 0 4px 15px rgba(0,0,0,0.04);
            margin-bottom: 25px;
        }
        .jsr2d-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        .jsr2d-table th {
            background: var(--jsr2d-primary);
            color: #ffffff;
            padding: 16px 20px;
            font-family: 'Outfit', sans-serif;
            font-weight: 600;
            font-size: 0.95rem;
            letter-spacing: 0.02em;
        }
        .jsr2d-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--jsr2d-border);
            font-size: 0.95rem;
            color: #334155;
        }
        .jsr2d-table tr:last-child td {
            border-bottom: none;
        }
        .jsr2d-table tr:nth-child(even) td {
            background: #f8fafc;
        }
        .jsr2d-price-badge {
            font-weight: 800;
            color: var(--jsr2d-primary);
            font-family: 'Outfit', sans-serif;
            font-size: 1.05rem;
        }

        /* Timeline / Steps */
        .jsr2d-step-card {
            background: #ffffff;
            border-left: 4px solid var(--jsr2d-primary);
            border-radius: 0 12px 12px 0;
            padding: 22px 24px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            border-top: 1px solid var(--jsr2d-border);
            border-right: 1px solid var(--jsr2d-border);
            border-bottom: 1px solid var(--jsr2d-border);
            position: relative;
        }
        .jsr2d-step-num {
            display: inline-block;
            background: var(--jsr2d-accent);
            color: #ffffff;
            font-weight: 800;
            font-size: 0.82rem;
            padding: 2px 10px;
            border-radius: 4px;
            margin-bottom: 8px;
            font-family: 'Outfit', sans-serif;
        }
        .jsr2d-step-card h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            margin: 0 0 6px;
            color: var(--jsr2d-dark);
        }
        .jsr2d-step-card p {
            margin: 0;
            font-size: 0.92rem;
            color: #64748b;
        }

        /* Locality Grid */
        .jsr2d-matrix-box {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--jsr2d-border);
            padding: 28px;
        }
        .jsr2d-matrix-box h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.3rem;
            color: var(--jsr2d-dark);
            margin: 0 0 16px;
            border-bottom: 2px solid var(--jsr2d-accent);
            padding-bottom: 8px;
            display: inline-block;
        }
        .jsr2d-matrix-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 12px;
        }
        .jsr2d-matrix-card {
            background: var(--jsr2d-gray-bg);
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 12px 14px;
        }
        .jsr2d-matrix-card h4 {
            font-size: 0.95rem;
            font-weight: 700;
            margin: 0 0 3px;
            color: var(--jsr2d-dark);
        }
        .jsr2d-matrix-card p {
            font-size: 0.82rem;
            color: #64748b;
            margin: 0;
            line-height: 1.4;
        }

        /* FAQ Accordion */
        .jsr2d-faq-item {
            background: #ffffff;
            border: 1px solid var(--jsr2d-border);
            border-radius: 12px;
            margin-bottom: 14px;
            padding: 20px 24px;
        }
        .jsr2d-faq-q {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            color: var(--jsr2d-dark);
            font-size: 1.1rem;
            margin-bottom: 8px;
        }
        .jsr2d-faq-a {
            color: #64748b;
            font-size: 0.95rem;
            line-height: 1.65;
        }

        /* CTA Banner */
        .jsr2d-cta-banner {
            background: linear-gradient(135deg, var(--jsr2d-primary) 0%, var(--jsr2d-secondary) 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 45px 30px;
            text-align: center;
            margin: 40px auto;
            max-width: 1140px;
        }
        .jsr2d-cta-banner h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            margin: 0 0 12px;
        }
        .jsr2d-cta-banner p {
            max-width: 700px;
            margin: 0 auto 25px;
            color: #e2e8f0;
            font-size: 1.05rem;
        }

        /* Cluster Links */
        .jsr2d-cluster-links {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--jsr2d-border);
            padding: 28px;
        }
        .jsr2d-cluster-links h3 {
            font-family: 'Outfit', sans-serif;
            margin: 0 0 18px;
            font-size: 1.25rem;
            color: var(--jsr2d-dark);
        }
        .jsr2d-tag-cloud {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .jsr2d-tag-link {
            display: inline-block;
            background: var(--jsr2d-gray-bg);
            border: 1px solid var(--jsr2d-border);
            color: #334155;
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 0.88rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s ease;
        }
        .jsr2d-tag-link:hover {
            background: var(--jsr2d-primary);
            color: #ffffff;
            border-color: var(--jsr2d-primary);
        }

        @media (max-width: 768px) {
            .jsr2d-action-bar {
                flex-direction: column;
                text-align: center;
                padding: 20px;
            }
            .jsr2d-btn-group {
                justify-content: center;
                width: 100%;
            }
            .jsr2d-btn-phone, .jsr2d-btn-whatsapp {
                width: 100%;
                justify-content: center;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Jamshedpur",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "https://www.shreeashirwadpackers.com/#organization",
        "url": "https://www.shreeashirwadpackers.com/jamshedpur-to-deoghar-packers-and-movers",
        "telephone": "+918409531615",
        "priceRange": "₹₹",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Bistupur Main Road, Near Voltas House",
            "addressLocality": "Jamshedpur",
            "addressRegion": "Jharkhand",
            "postalCode": "831001",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 22.8046,
            "longitude": 86.2029
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
                "Sunday"
            ],
            "opens": "07:00",
            "closes": "22:00"
        },
        "sameAs": [
            "https://www.facebook.com/shreeashirwadpackers/",
            "https://twitter.com/ashirwadpackers"
        ]
    }
    </script>

    <!-- Schema 2: Service Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Intercity Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Jamshedpur"
            },
            {
                "@type": "City",
                "name": "Deoghar"
            }
        ],
        "description": "Professional intercity household shifting, corporate employee moving, and vehicle carrier services from Jamshedpur (Bistupur, Sakchi, Kadma, Sonari, Telco, Adityapur) to Deoghar (Castairs Town, Bilasi Town, Jasidih, Devipur AIIMS, Satsang Nagar, Madhupur) across the 220 km corridor via Chandil, Chas, and Giridih. Providing guaranteed same-day 10 to 12 hour door-to-door transit, 5-layer protective packing, closed container trucks, Tata Steel, Tata Motors & AIIMS compliant tax billing, and full transit insurance."
    }
    </script>

    <!-- Schema 3: BreadcrumbList Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "https://www.shreeashirwadpackers.com/"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "Jamshedpur Packers and Movers",
                "item": "https://www.shreeashirwadpackers.com/packers-and-movers-in-jamshedpur"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Jamshedpur to Deoghar",
                "item": "https://www.shreeashirwadpackers.com/jamshedpur-to-deoghar-packers-and-movers"
            }
        ]
    }
    </script>

    <!-- Schema 4: FAQPage Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What is the driving distance and transit duration from Jamshedpur to Deoghar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Jamshedpur and Deoghar is approximately 215 to 225 km via Chandil, Chas (Bokaro), Giridih, and Madhupur (NH-18 & NH-114A). Driving time for our container trucks is approximately 5.5 to 6.5 hours. We guarantee complete same-day 10 to 12 hour door-to-door relocation: loading in Jamshedpur early morning and finishing unloading, unpacking, and setup in Deoghar by evening."
                }
            },
            {
                "@type": "Question",
                "name": "What are the shifting charges from Jamshedpur to Deoghar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Household shifting rates from Jamshedpur to Deoghar are competitive and transparent: 1 BHK apartment shifting costs ₹12,000 to ₹18,000; 2 BHK household moving ranges from ₹17,000 to ₹25,500; 3 BHK flat/bungalow relocation is ₹23,500 to ₹35,000; two-wheeler bike parceling ranges from ₹2,600 to ₹4,400; and dedicated enclosed car carrier is ₹8,000 to ₹13,000."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide claim-ready bills for Tata Steel, Tata Motors, and Adityapur corporate staff in Jamshedpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We issue 100% compliant computer-generated GST tax invoices (SAC 9965/9967), consignment bilty notes, itemized inventory packing lists, money receipts, and comprehensive transit insurance policies accepted by Tata Steel, Tata Motors, Tata Power, Tinplate, Adityapur auto-ancillaries, and nationalized banks."
                }
            },
            {
                "@type": "Question",
                "name": "How is fragile household furniture protected during transit across the Chandil and Chas highways?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We deploy a specialized 5-layer defensive shield: high-density EPE foam, virgin multi-layer bubble wrap, heavy corrugated corner angle guards, 7-ply rigid boxes, and waterproof stretch film. Items are strapped securely inside locked container vehicles to eliminate internal movement during highway travel."
                }
            },
            {
                "@type": "Question",
                "name": "Can you transport my motorcycle or car from Jamshedpur to Deoghar on the same day?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer specialized enclosed hydraulic car carrier trailers and custom two-wheeler parceling with wheel chocks, bubble padding around mirrors and tanks, and digital condition inspection reports, ensuring delivery within 12 to 24 hours."
                }
            },
            {
                "@type": "Question",
                "name": "Which residential localities do you cover in Jamshedpur and Deoghar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "In Jamshedpur, we pick up across Bistupur, Sakchi, Kadma, Sonari, Telco Colony, Golmuri, Baridih, Mango, Adityapur, and Jugsalai. In Deoghar, we deliver across Castairs Town, Williams Town, Bilasi Town, Bompas Town, Jasidih, Devipur AIIMS Campus, Satsang Nagar, Kunda, Rohini, and Madhupur."
                }
            }
        ]
    }
    </script>
</head>

<body class="jsr2d-wrapper">

<?php include __DIR__ . '/../includes/header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="jsr2d-hero">
        <div class="jsr2d-hero-content">
            <span class="jsr2d-badge">&#128666; Steel City to Baidyanath Dham Express: Jamshedpur &rarr; Deoghar</span>
            <h1>Jamshedpur to Deoghar <span>Packers and Movers</span></h1>
            <p>
                Professional, damage-free intercity relocation connecting the industrial hub of Jamshedpur (Tatanagar) to the holy city of Baidyanath Dham (Deoghar). Dedicated closed container trucks, same-day 10-12 hr delivery, 5-layer protective packing, and 100% Tata Group, AIIMS &amp; PSU approved reimbursement documentation.
            </p>

            <div class="jsr2d-hero-stats">
                <div class="jsr2d-stat-card">
                    <div class="jsr2d-stat-val">220 km</div>
                    <div class="jsr2d-stat-lbl">Highway Distance</div>
                </div>
                <div class="jsr2d-stat-card">
                    <div class="jsr2d-stat-val">Same Day</div>
                    <div class="jsr2d-stat-lbl">10-12 Hr Complete Delivery</div>
                </div>
                <div class="jsr2d-stat-card">
                    <div class="jsr2d-stat-val">100%</div>
                    <div class="jsr2d-stat-lbl">Tata, AIIMS &amp; PSU Approval</div>
                </div>
                <div class="jsr2d-stat-card">
                    <div class="jsr2d-stat-val">Zero Loss</div>
                    <div class="jsr2d-stat-lbl">Transit Insurance Guarantee</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Action Bar -->
    <div class="jsr2d-action-bar">
        <div class="jsr2d-action-info">
            <h3>Moving from Jamshedpur to Deoghar?</h3>
            <p>Get instant transparent quotes, pre-move home survey, and customized container scheduling.</p>
        </div>
        <div class="jsr2d-btn-group">
            <a href="tel:8409531615" class="jsr2d-btn-phone">&#128222; Call 084095 31615</a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20please%20send%20a%20quote%20for%20Jamshedpur%20to%20Deoghar%20shifting." target="_blank" class="jsr2d-btn-whatsapp">&#128172; WhatsApp Instant</a>
        </div>
    </div>

    <!-- Section 1: Route Corridor & Highway Logistics -->
    <section class="jsr2d-section">
        <div class="jsr2d-grid-2">
            <div>
                <span class="jsr2d-badge" style="color: var(--jsr2d-primary); background: rgba(15,60,92,0.1); border-color: rgba(15,60,92,0.25);">Corridor Logistics</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--jsr2d-dark); margin: 12px 0 18px;">Seamless Transit Across the 220 km Jamshedpur &ndash; Deoghar Highway Corridor</h2>
                <p>
                    Relocating household goods, corporate executives, and personal vehicles from Jamshedpur to Deoghar spans approximately 215 to 225 kilometers across Jharkhand's industrial belt into Santhal Pargana. Departing from Jamshedpur, our container trucks take National Highway 18 (NH-18) through Chandil and Chas (Bokaro), before traversing State Highway 13 and National Highway 114A (NH-114A) via Giridih and Madhupur straight into Deoghar.
                </p>
                <p>
                    With well-engineered multi-lane highways and minimal transit bottlenecks, our dedicated container vehicles complete the drive in roughly 5.5 to 6.5 hours. Because Shree Ashirwad Packers and Movers maintains active operational hubs in both Jamshedpur and Deoghar, we guarantee complete same-day door-to-door transit: morning packing in Jamshedpur followed by complete unloading, furniture positioning, and room setup in Deoghar before bedtime.
                </p>
                <div style="background: var(--jsr2d-gray-bg); padding: 18px; border-radius: 10px; border-left: 4px solid var(--jsr2d-accent); margin-top: 15px;">
                    <p style="margin: 0; font-weight: 600; font-size: 0.95rem; color: var(--jsr2d-dark);">
                        &#9989; <strong>Direct Single-Truck Move:</strong> No transshipment, no intermediate storage, and zero vehicle switching ensure your goods are protected from dust, rain, and transit vibration.
                    </p>
                </div>
            </div>
            <div class="jsr2d-img-container">
                <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Sealed Container Truck for Jamshedpur to Deoghar Shifting" width="600" height="400" loading="lazy">
                <div class="jsr2d-img-caption">Sealed container trucks providing dust-proof, rain-safe, and rapid 6 hr highway transit between Jamshedpur and Deoghar.</div>
            </div>
        </div>
    </section>

    <!-- Section 2: Why Choose Shree Ashirwad -->
    <section class="jsr2d-section" style="background: var(--jsr2d-gray-bg);">
        <div class="jsr2d-section-header">
            <h2>Why Choose Shree Ashirwad for Jamshedpur to Deoghar Shifting?</h2>
            <p>Engineered for speed, meticulous defensive packing, and flawless institutional compliance across Jharkhand.</p>
        </div>
        <div class="jsr2d-grid-3">
            <div class="jsr2d-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#9201;</div>
                <h3>Guaranteed Same-Day 10-12 Hr Transit</h3>
                <p>Our direct route trucks depart immediately upon loading in Jamshedpur, ensuring your family can settle comfortably in your new Deoghar home on the very same night.</p>
            </div>
            <div class="jsr2d-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#128196;</div>
                <h3>Tata Group &amp; AIIMS Compliant Bills</h3>
                <p>We provide GST-compliant invoices, itemized consignment bilty, weight manifests, and transit receipts accepted without audit objections across Tata Steel, Tata Motors, and AIIMS.</p>
            </div>
            <div class="jsr2d-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#128737;</div>
                <h3>5-Layer Defensive Packaging Shield</h3>
                <p>Premium packaging using virgin bubble wrap, high-density EPE foam, heavy corrugated edge guards, 7-ply cartons, and waterproof stretch wrap shields your valuables against road vibrations.</p>
            </div>
            <div class="jsr2d-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#128666;</div>
                <h3>Weatherproof Closed Container Fleet</h3>
                <p>Unlike open tarpaulin trucks that expose items to industrial soot, road gravel, and unexpected rain showers, our locked steel containers offer 100% dry, sealed security throughout the 220 km journey.</p>
            </div>
            <div class="jsr2d-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#128663;</div>
                <h3>Specialized Car &amp; Two-Wheeler Transport</h3>
                <p>Dedicated enclosed car carrier trailers and custom wooden/bubble wrapped motorcycle cages ensure your vehicles arrive in Deoghar in pristine, showroom condition.</p>
            </div>
            <div class="jsr2d-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#128104;&#8205;&#128295;</div>
                <h3>Complete Electrical &amp; Furniture Setup</h3>
                <p>Our trained carpenters and technicians dismantle and reassemble modular beds, LED wall units, air conditioners, water purifiers, and dining tables at both origin and destination.</p>
            </div>
        </div>
    </section>

    <!-- Section 3: Transparent Pricing Table -->
    <section class="jsr2d-section">
        <div class="jsr2d-section-header">
            <h2>Transparent Tariff Schedule: Jamshedpur to Deoghar</h2>
            <p>Clear, upfront price estimates based on home size, inventory volume, and vehicle requirements with zero hidden surcharges.</p>
        </div>
        <div class="jsr2d-table-container">
            <table class="jsr2d-table">
                <thead>
                    <tr>
                        <th>Move Type / Consignment</th>
                        <th>Standard Distance</th>
                        <th>Estimated Transit Time</th>
                        <th>Standard Rate Range</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment Shifting</strong><br><small>Living room, 1 bedroom, kitchen &amp; standard appliances</small></td>
                        <td>215 &ndash; 225 km</td>
                        <td>Same Day (10 &ndash; 12 hrs)</td>
                        <td><span class="jsr2d-price-badge">&#8377;12,000 &ndash; &#8377;18,000</span></td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Complete Household</strong><br><small>2 bedrooms, hall, kitchen, dining set, 2 ACs, fridge, washing machine</small></td>
                        <td>215 &ndash; 225 km</td>
                        <td>Same Day (10 &ndash; 12 hrs)</td>
                        <td><span class="jsr2d-price-badge">&#8377;17,000 &ndash; &#8377;25,500</span></td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Family Home / Villa</strong><br><small>3 bedrooms, drawing room, modular kitchen, pooja mandir, heavy furniture</small></td>
                        <td>215 &ndash; 225 km</td>
                        <td>Same Day (11 &ndash; 13 hrs)</td>
                        <td><span class="jsr2d-price-badge">&#8377;23,500 &ndash; &#8377;35,000</span></td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Large Residence Relocation</strong><br><small>Complete executive bungalow furnishings, antique wooden almirahs, gym setup</small></td>
                        <td>215 &ndash; 225 km</td>
                        <td>Same Day to 24 hrs</td>
                        <td><span class="jsr2d-price-badge">&#8377;32,000 &ndash; &#8377;48,000</span></td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler / Bike Parcel Service</strong><br><small>Motorcycles, scooters with full bubble wrapping and tyre immobilizers</small></td>
                        <td>215 &ndash; 225 km</td>
                        <td>Same Day (8 &ndash; 12 hrs)</td>
                        <td><span class="jsr2d-price-badge">&#8377;2,600 &ndash; &#8377;4,400</span></td>
                    </tr>
                    <tr>
                        <td><strong>Dedicated Enclosed Car Carrier</strong><br><small>Sedans, hatchbacks, SUVs inside enclosed carrier trailer</small></td>
                        <td>215 &ndash; 225 km</td>
                        <td>24 Hours Doorstep</td>
                        <td><span class="jsr2d-price-badge">&#8377;8,000 &ndash; &#8377;13,000</span></td>
                    </tr>
                    <tr>
                        <td><strong>Complete Unpacking &amp; Room Setup Add-on</strong><br><small>Unpacking, room-by-room positioning, bed assembly, and trash removal</small></td>
                        <td>Onsite Service</td>
                        <td>2 &ndash; 4 Hours</td>
                        <td><span class="jsr2d-price-badge">&#8377;2,500 &ndash; &#8377;4,500</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="text-align: center; color: #64748b; font-size: 0.9rem; margin-top: 10px;">
            * Quotes reflect standard ground-to-ground shifting; upper floors without elevators or specialized crane lifting may have nominal adjustments.
        </p>
    </section>

    <!-- Section 4: Corporate, Medical & Administrative Transfers Guidance -->
    <section class="jsr2d-section" style="background: #ffffff;">
        <div class="jsr2d-grid-2">
            <div class="jsr2d-img-container">
                <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Protective packing for fragile household and corporate items" width="600" height="400" loading="lazy">
                <div class="jsr2d-img-caption">5-layer protective packaging shielding household goods from highway dust, vibration, and handling shocks.</div>
            </div>
            <div>
                <span class="jsr2d-badge" style="color: var(--jsr2d-primary); background: rgba(15,60,92,0.1); border-color: rgba(15,60,92,0.25);">Institutional Guidance</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--jsr2d-dark); margin: 12px 0 18px;">Specialized Support for Tata Group, Adityapur &amp; AIIMS Transfers</h2>
                <p>
                    Jamshedpur is the industrial powerhouse of Jharkhand, anchored by <strong>Tata Steel</strong>, <strong>Tata Motors</strong>, Tata Power, Tinplate, and hundreds of medium-to-large engineering enterprises in Adityapur. Many corporate executives, senior engineers, and medical consultants from Tata Main Hospital (TMH) and MGM Medical College relocate to Deoghar for retirement, ancestral home return, or postings to the expanding AIIMS Deoghar healthcare complex.
                </p>
                <p>
                    Shree Ashirwad Packers and Movers eliminates reimbursement friction by supplying comprehensive documentation packages:
                </p>
                <ul style="color: #475569; padding-left: 20px; line-height: 1.8; font-size: 0.95rem;">
                    <li><strong>Computerized Tax Invoices:</strong> Valid GSTIN with SAC Code 9965 (Freight Transport Agency) and SAC 9967 (Cargo Handling), 100% compliant with corporate accounting regulations.</li>
                    <li><strong>Consignment Bilty (LR Copy):</strong> Formal transport note containing vehicle number, driver identity, loading date, and dispatch address.</li>
                    <li><strong>Certified Packing Manifest:</strong> Numbered itemized inventory signed by our supervisor for quick verification by corporate audit teams.</li>
                    <li><strong>Official Money Receipts:</strong> Stamped payment acknowledgments enabling seamless 100% claim settlement.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section 5: The 5-Layer Defensive Packaging Shield -->
    <section class="jsr2d-section" style="background: var(--jsr2d-gray-bg);">
        <div class="jsr2d-section-header">
            <h2>Our 5-Layer Defensive Packaging Shield</h2>
            <p>Engineered to absorb vibrations and protect valuables across the Chandil-Giridih highway.</p>
        </div>
        <div class="jsr2d-grid-4">
            <div class="jsr2d-feature-card" style="text-align: center;">
                <div style="font-size: 2.2rem; color: var(--jsr2d-accent); margin-bottom: 10px;">Layer 1</div>
                <h4>Virgin Bubble Wrap</h4>
                <p>High-tensile air pockets absorb surface shocks, protecting polished wooden finishes, glass mirrors, and appliance paintwork.</p>
            </div>
            <div class="jsr2d-feature-card" style="text-align: center;">
                <div style="font-size: 2.2rem; color: var(--jsr2d-accent); margin-bottom: 10px;">Layer 2</div>
                <h4>High-Density EPE Foam</h4>
                <p>Thermal and shock-insulating expandable polyethylene foam cushioning delicate electronics, television panels, and fragile ceramics.</p>
            </div>
            <div class="jsr2d-feature-card" style="text-align: center;">
                <div style="font-size: 2.2rem; color: var(--jsr2d-accent); margin-bottom: 10px;">Layer 3</div>
                <h4>Corrugated Angle Guards</h4>
                <p>Rigid L-shaped corner protectors shield vulnerable edges of dining tables, wardrobes, refrigerator doors, and bed frames.</p>
            </div>
            <div class="jsr2d-feature-card" style="text-align: center;">
                <div style="font-size: 2.2rem; color: var(--jsr2d-accent); margin-bottom: 10px;">Layer 4 &amp; 5</div>
                <h4>7-Ply Boxes &amp; Stretch Film</h4>
                <p>Heavy-duty kraft cardboard cartons reinforced with 50-micron industrial stretch wrap sealing out moisture, dust, and humidity.</p>
            </div>
        </div>
    </section>

    <!-- Section 6: Vehicle Relocation (Car Carrier & Bike Parcel) -->
    <section class="jsr2d-section">
        <div class="jsr2d-grid-2">
            <div>
                <span class="jsr2d-badge" style="color: var(--jsr2d-primary); background: rgba(15,60,92,0.1); border-color: rgba(15,60,92,0.25);">Automotive Logistics</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--jsr2d-dark); margin: 12px 0 18px;">Safe Car Carrier &amp; Bike Parcel: Jamshedpur to Deoghar</h2>
                <p>
                    Relocate your personal car or motorcycle alongside your household goods without putting extra mileage on state roads. Shree Ashirwad Packers and Movers provides dedicated vehicular logistics ensuring zero-scratch transit to Deoghar.
                </p>
                <div class="jsr2d-feature-card" style="margin-bottom: 16px;">
                    <h4>&#128663; Dedicated Enclosed Car Carriers</h4>
                    <p>Hydraulic ramps ensure smooth, safe ground clearance for sedans and SUVs. Vehicles are secured with heavy-duty wheel chocks and safety straps inside closed carriers, protected from gravel and dust.</p>
                </div>
                <div class="jsr2d-feature-card">
                    <h4>&#127949; Zero-Scratch Two-Wheeler Parcel Service</h4>
                    <p>Motorcycles, scooters, and commuter bikes are carefully wrapped with bubble wrap around fuel tanks, indicators, and headlights, with tyres locked inside the container truck for same-day delivery.</p>
                </div>
            </div>
            <div class="jsr2d-img-container">
                <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Enclosed Hydraulic Car Carrier Jamshedpur to Deoghar" width="600" height="400" loading="lazy">
                <div class="jsr2d-img-caption">Hydraulic car loading ramp ensuring safe ground clearance and zero chassis scrapings for personal vehicles.</div>
            </div>
        </div>
    </section>

    <!-- Section 7: Step-by-Step Moving Process -->
    <section class="jsr2d-section" style="background: var(--jsr2d-gray-bg);">
        <div class="jsr2d-section-header">
            <h2>Our 5-Stage Seamless Relocation Workflow</h2>
            <p>From initial booking in Jamshedpur to full room arrangement in Deoghar, every step is executed with precision.</p>
        </div>
        <div class="jsr2d-grid-3">
            <div class="jsr2d-step-card">
                <span class="jsr2d-step-num">Step 01</span>
                <h4>Pre-Move Survey &amp; Transparent Quote</h4>
                <p>Our relocation supervisor conducts an onsite or video survey in Jamshedpur, assessing inventory volume, packing needs, and issuing a binding written quote.</p>
            </div>
            <div class="jsr2d-step-card">
                <span class="jsr2d-step-num">Step 02</span>
                <h4>5-Layer Packing &amp; Labeling</h4>
                <p>Our experienced packaging crew arrives on moving day with virgin bubble wrap, cartons, and tools, carefully wrapping furniture and labeling each box by room.</p>
            </div>
            <div class="jsr2d-step-card">
                <span class="jsr2d-step-num">Step 03</span>
                <h4>Safe Hydraulic Loading</h4>
                <p>Heavy furniture and appliances are loaded first using padded dollies and balance ramps, tightly anchored within our container truck to prevent transit shifting.</p>
            </div>
            <div class="jsr2d-step-card">
                <span class="jsr2d-step-num">Step 04</span>
                <h4>Smooth NH-18 &amp; NH-114A Highway Transit</h4>
                <p>The container vehicle is padlocked and travels the 220 km corridor under GPS monitoring, completing transit to Deoghar in approximately 5.5 to 6.5 hours.</p>
            </div>
            <div class="jsr2d-step-card">
                <span class="jsr2d-step-num">Step 05</span>
                <h4>Unloading, Placement &amp; Setup</h4>
                <p>Upon reaching Deoghar, our crew unloads every article, carries it to the assigned room, reassembles beds and tables, and disposes of all packaging debris.</p>
            </div>
            <div class="jsr2d-step-card" style="background: linear-gradient(135deg, var(--jsr2d-primary) 0%, var(--jsr2d-secondary) 100%); color: #ffffff; border: none;">
                <span class="jsr2d-step-num" style="background: #fbbf24; color: #000;">Guarantee</span>
                <h4 style="color: #ffffff;">Zero-Damage Assurance</h4>
                <p style="color: #e2e8f0;">Comprehensive transit insurance and rigorous packaging ensure your prized possessions are delivered exactly as they were packed.</p>
            </div>
        </div>
    </section>

    <!-- Section: Unpacking & Furniture Assembly in Deoghar -->
    <section class="jsr2d-section">
        <div class="jsr2d-grid-2">
            <div>
                <span class="jsr2d-badge" style="color: var(--jsr2d-primary); background: rgba(15,60,92,0.1); border-color: rgba(15,60,92,0.25);">White-Glove Setup</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--jsr2d-dark); margin: 12px 0 18px;">Doorstep Unpacking, Furniture Assembly &amp; Debris Clearance</h2>
                <p>
                    Relocating from Jamshedpur to Deoghar should be a refreshing transition, not a day of exhausting labor unpacking boxes. Shree Ashirwad Packers and Movers provides full-service destination assistance across Deoghar.
                </p>
                <p>
                    Our trained crew carries each numbered box directly to its designated room—master bedroom, children's study, living hall, or kitchen. We assemble double beds, re-mount television wall units, install water purifiers, arrange heavy sofas, and unpack delicate crockery. Once setup is complete, we sweep up and haul away all used corrugated trimmings, bubble film, and straps, leaving your new home ready for immediate living.
                </p>
                <div class="jsr2d-feature-card">
                    <h4>&#129529; Clean Home Handover Assurance</h4>
                    <p>Zero clutter, zero lingering trash. We ensure your new residence in Deoghar is pristine, functional, and organized from day one.</p>
                </div>
            </div>
            <div class="jsr2d-img-container">
                <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and Setup Service in Deoghar" width="600" height="400" loading="lazy">
                <div class="jsr2d-img-caption">Professional doorstep unpacking, room placement, bed assembly, and packing waste clearance in Deoghar.</div>
            </div>
        </div>
    </section>

    <!-- Section 8: Locality Matrix -->
    <section class="jsr2d-section" style="background: var(--jsr2d-gray-bg);">
        <div class="jsr2d-section-header">
            <h2>Complete Locality Coverage: Jamshedpur &amp; Deoghar</h2>
            <p>Direct doorstep pickup from every Jamshedpur sector and seamless delivery across Deoghar's residential, academic, and spiritual neighborhoods.</p>
        </div>
        <div class="jsr2d-grid-2">
            <div class="jsr2d-matrix-box">
                <h3>Jamshedpur Pickup Localities</h3>
                <div class="jsr2d-matrix-grid">
                    <div class="jsr2d-matrix-card">
                        <h4>Bistupur &amp; Sakchi</h4>
                        <p>Prime commercial center, company residences, and central residential avenues.</p>
                    </div>
                    <div class="jsr2d-matrix-card">
                        <h4>Kadma &amp; Sonari</h4>
                        <p>Premier family residential colonies, modern apartment complexes, and river view sectors.</p>
                    </div>
                    <div class="jsr2d-matrix-card">
                        <h4>Telco Colony &amp; Golmuri</h4>
                        <p>Automobile engineering staff townships, company quarters, and quiet family zones.</p>
                    </div>
                    <div class="jsr2d-matrix-card">
                        <h4>Adityapur Industrial Belt &amp; Gamharia</h4>
                        <p>Major manufacturing corridor, industrial housing blocks, and high-growth zones.</p>
                    </div>
                    <div class="jsr2d-matrix-card">
                        <h4>Baridih &amp; Mango</h4>
                        <p>Expanding residential complexes, educational institutes, and Dimna road colonies.</p>
                    </div>
                    <div class="jsr2d-matrix-card">
                        <h4>Jugsalai &amp; Tatanagar Railway Area</h4>
                        <p>Commercial wholesale markets, traditional family houses, and railway residential belts.</p>
                    </div>
                </div>
            </div>

            <div class="jsr2d-matrix-box">
                <h3>Deoghar Delivery Sectors</h3>
                <div class="jsr2d-matrix-grid">
                    <div class="jsr2d-matrix-card">
                        <h4>Castairs Town &amp; Williams Town</h4>
                        <p>Central residential sectors with rapid access to VIP Chowk and temple roads.</p>
                    </div>
                    <div class="jsr2d-matrix-card">
                        <h4>Bilasi Town &amp; Bompas Town</h4>
                        <p>Premier family colonies, spacious housing layouts, and quiet residential lanes.</p>
                    </div>
                    <div class="jsr2d-matrix-card">
                        <h4>Jasidih Industrial Area &amp; Junction</h4>
                        <p>Industrial enterprises, railway quarters, and expanding modern residential colonies.</p>
                    </div>
                    <div class="jsr2d-matrix-card">
                        <h4>AIIMS Deoghar Campus (Devipur)</h4>
                        <p>Faculty quarters, resident doctor apartments, and institutional housing blocks.</p>
                    </div>
                    <div class="jsr2d-matrix-card">
                        <h4>Satsang Nagar &amp; Kunda</h4>
                        <p>Spiritual residential enclaves, bypass roads, and educational institutions.</p>
                    </div>
                    <div class="jsr2d-matrix-card">
                        <h4>Rohini, Madhupur &amp; Sarath</h4>
                        <p>Suburban township coverage along the primary inbound highway corridor.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 9: Verified Customer Reviews -->
    <section class="jsr2d-section">
        <div class="jsr2d-section-header">
            <h2>Verified Jamshedpur to Deoghar Customer Reviews</h2>
            <p>Authentic feedback from corporate engineers, doctors, and relocated families.</p>
        </div>
        <div class="jsr2d-grid-2">
            <div class="jsr2d-feature-card">
                <div style="color: #f59e0b; margin-bottom: 8px;">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</div>
                <p style="font-style: italic; margin-bottom: 15px;">"After completing 32 years at Tata Motors Telco in Jamshedpur, we decided to settle in our ancestral home in Castairs Town, Deoghar. Moving heavy antique wooden cabinets, glass artifacts, and our home temple required top-tier packing. Shree Ashirwad Packers arrived punctually in Telco at 7:00 AM with heavy bubble wrap and edge protectors. By 6:00 PM, everything was delivered to Deoghar, unpacked, and assembled. Zero scratches and totally honest pricing!"</p>
                <p style="font-weight: 700; color: var(--jsr2d-primary); margin: 0;">&ndash; Subrata Banerjee, Retired Senior Manager (Telco Colony Jamshedpur &rarr; Deoghar)</p>
            </div>
            <div class="jsr2d-feature-card">
                <div style="color: #f59e0b; margin-bottom: 8px;">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</div>
                <p style="font-style: italic; margin-bottom: 15px;">"I was transferred from MGM Medical College Jamshedpur to AIIMS Deoghar. Shree Ashirwad provided prompt service with 5-layer materials that protected all our sensitive electronic equipment and delicate home items. Their GST invoice and bilty were approved by AIIMS administration on the first submission. Even my Hyundai Creta arrived scratch-free in their car carrier!"</p>
                <p style="font-weight: 700; color: var(--jsr2d-primary); margin: 0;">&ndash; Dr. Ananya Sen, Associate Professor (AIIMS Deoghar)</p>
            </div>
        </div>
    </section>

    <!-- Section 10: Frequently Asked Questions (FAQ) -->
    <section class="jsr2d-section" style="background: var(--jsr2d-gray-bg);">
        <div class="jsr2d-section-header">
            <h2>Frequently Asked Questions</h2>
            <p>Practical answers regarding transit durations, pricing, vehicle carriers, and official reimbursement claims.</p>
        </div>
        <div style="max-width: 900px; margin: 0 auto;">
            <div class="jsr2d-faq-item">
                <div class="jsr2d-faq-q">What is the driving distance and transit duration from Jamshedpur to Deoghar?</div>
                <div class="jsr2d-faq-a">The highway distance between Jamshedpur and Deoghar is approximately 215 to 225 km via Chandil, Chas (Bokaro), Giridih, and Madhupur (NH-18 & NH-114A). Driving time for our container trucks is approximately 5.5 to 6.5 hours. We guarantee complete same-day 10 to 12 hour door-to-door relocation: loading in Jamshedpur early morning and finishing unloading, unpacking, and setup in Deoghar by evening.</div>
            </div>
            <div class="jsr2d-faq-item">
                <div class="jsr2d-faq-q">What are the shifting charges from Jamshedpur to Deoghar?</div>
                <div class="jsr2d-faq-a">Household shifting rates from Jamshedpur to Deoghar are competitive and transparent: 1 BHK apartment shifting costs ₹12,000 to ₹18,000; 2 BHK household moving ranges from ₹17,000 to ₹25,500; 3 BHK flat/bungalow relocation is ₹23,500 to ₹35,000; two-wheeler bike parceling ranges from ₹2,600 to ₹4,400; and dedicated enclosed car carrier is ₹8,000 to ₹13,000.</div>
            </div>
            <div class="jsr2d-faq-item">
                <div class="jsr2d-faq-q">Do you provide claim-ready bills for Tata Steel, Tata Motors, and Adityapur corporate staff in Jamshedpur?</div>
                <div class="jsr2d-faq-a">Yes. We issue 100% compliant computer-generated GST tax invoices (SAC 9965/9967), consignment bilty notes, itemized inventory packing lists, money receipts, and comprehensive transit insurance policies accepted by Tata Steel, Tata Motors, Tata Power, Tinplate, Adityapur auto-ancillaries, and nationalized banks.</div>
            </div>
            <div class="jsr2d-faq-item">
                <div class="jsr2d-faq-q">How is fragile household furniture protected during transit across the Chandil and Chas highways?</div>
                <div class="jsr2d-faq-a">We deploy a specialized 5-layer defensive shield: high-density EPE foam, virgin multi-layer bubble wrap, heavy corrugated corner angle guards, 7-ply rigid boxes, and waterproof stretch film. Items are strapped securely inside locked container vehicles to eliminate internal movement during highway travel.</div>
            </div>
            <div class="jsr2d-faq-item">
                <div class="jsr2d-faq-q">Can you transport my motorcycle or car from Jamshedpur to Deoghar on the same day?</div>
                <div class="jsr2d-faq-a">Yes. We offer specialized enclosed hydraulic car carrier trailers and custom two-wheeler parceling with wheel chocks, bubble padding around mirrors and tanks, and digital condition inspection reports, ensuring delivery within 12 to 24 hours.</div>
            </div>
            <div class="jsr2d-faq-item">
                <div class="jsr2d-faq-q">Which residential localities do you cover in Jamshedpur and Deoghar?</div>
                <div class="jsr2d-faq-a">In Jamshedpur, we pick up across Bistupur, Sakchi, Kadma, Sonari, Telco Colony, Golmuri, Baridih, Mango, Adityapur, and Jugsalai. In Deoghar, we deliver across Castairs Town, Williams Town, Bilasi Town, Bompas Town, Jasidih, Devipur AIIMS Campus, Satsang Nagar, Kunda, Rohini, and Madhupur.</div>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <div class="jsr2d-cta-banner">
        <h2>Book Your Jamshedpur to Deoghar Move Today</h2>
        <p>Experience hassle-free, same-day relocation backed by verified transit insurance, sealed container trucks, and expert packing crews.</p>
        <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
            <a href="tel:8409531615" class="jsr2d-btn-phone" style="font-size: 1.1rem; padding: 14px 30px;">&#128222; Call 084095 31615</a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20please%20send%20a%20quote%20for%20Jamshedpur%20to%20Deoghar%20shifting." target="_blank" class="jsr2d-btn-whatsapp" style="font-size: 1.1rem; padding: 14px 30px;">&#128172; WhatsApp Inquiry</a>
        </div>
    </div>

    <!-- Section 11: Cluster Navigation Links -->
    <section class="jsr2d-section" style="padding-top: 10px;">
        <div class="jsr2d-cluster-links">
            <h3>Explore Connected Regional Routes</h3>
            <div class="jsr2d-tag-cloud">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-jamshedpur" class="jsr2d-tag-link">Jamshedpur Hub Overview</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-deoghar" class="jsr2d-tag-link">Deoghar Hub Overview</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-jamshedpur-packers-and-movers" class="jsr2d-tag-link">Deoghar to Jamshedpur Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/jamshedpur-to-bokaro-packers-and-movers" class="jsr2d-tag-link">Jamshedpur to Bokaro Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/jamshedpur-to-ranchi-packers-and-movers" class="jsr2d-tag-link">Jamshedpur to Ranchi Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-dhanbad-packers-and-movers" class="jsr2d-tag-link">Deoghar to Dhanbad Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-hazaribagh-packers-and-movers" class="jsr2d-tag-link">Deoghar to Hazaribagh Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-dumka-packers-and-movers" class="jsr2d-tag-link">Deoghar to Dumka Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-giridih-packers-and-movers" class="jsr2d-tag-link">Deoghar to Giridih Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/pricing" class="jsr2d-tag-link">Cost Calculator &amp; Rates</a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
