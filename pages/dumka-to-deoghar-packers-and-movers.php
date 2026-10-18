<?php
/**
 * Page Name: Dumka to Deoghar Packers and Movers
 * Route Slug: dumka-to-deoghar-packers-and-movers
 * Description: Dedicated inter-district moving route page connecting Dumka (Sub-Capital of Jharkhand & Santhal Pargana Divisional Headquarters) to Deoghar (Baidyanath Dham).
 * Focus Keywords: dumka to deoghar packers and movers, packers and movers dumka to deoghar, house shifting dumka to deoghar, dumka to deoghar luggage parcel, dumka to deoghar car carrier, dumka to deoghar bike parcel
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Dumka to Deoghar Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Top Dumka to Deoghar packers and movers by Shree Ashirwad. Same-day 4-6 hr transit, SKMU & AIIMS bills, 5-layer packing, car carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/dumka-to-deoghar-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="dumka to deoghar packers and movers, packers and movers dumka to deoghar, house shifting dumka to deoghar, dumka to deoghar luggage parcel, dumka to deoghar car carrier, dumka to deoghar bike parcel">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Dumka">

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

    <!-- Scoped CSS for Route 9 (Dumka to Deoghar) -->
    <style>
        :root {
            --dum2d-primary: #831843;
            --dum2d-secondary: #9d174d;
            --dum2d-accent: #f59e0b;
            --dum2d-accent-light: #fef3c7;
            --dum2d-dark: #0f172a;
            --dum2d-gray-bg: #f8fafc;
            --dum2d-border: #e2e8f0;
        }

        .dum2d-wrapper {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #334155;
            line-height: 1.7;
        }

        .dum2d-hero {
            background: linear-gradient(135deg, rgba(131,24,67,0.95) 0%, rgba(157,23,77,0.92) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 20px 75px;
            text-align: center;
            position: relative;
        }
        .dum2d-hero-content {
            max-width: 980px;
            margin: 0 auto;
        }
        .dum2d-badge {
            display: inline-block;
            background: rgba(245,158,11,0.25);
            border: 1px solid rgba(245,158,11,0.5);
            color: #fef3c7;
            padding: 6px 18px;
            border-radius: 50px;
            font-size: 0.88rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 20px;
        }
        .dum2d-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2rem, 4vw, 3.2rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 18px;
            letter-spacing: -0.02em;
        }
        .dum2d-hero h1 span {
            color: #fbbf24;
        }
        .dum2d-hero p {
            font-size: 1.15rem;
            max-width: 820px;
            margin: 0 auto 30px;
            color: #fce7f3;
            font-weight: 400;
        }
        .dum2d-hero-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 15px;
            margin-top: 35px;
        }
        .dum2d-stat-card {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.22);
            padding: 16px 12px;
            border-radius: 12px;
        }
        .dum2d-stat-val {
            font-family: 'Outfit', sans-serif;
            font-size: 1.8rem;
            font-weight: 800;
            color: #fbbf24;
        }
        .dum2d-stat-lbl {
            font-size: 0.82rem;
            color: #fce7f3;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* Action Bar */
        .dum2d-action-bar {
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
            border: 1px solid var(--dum2d-border);
        }
        .dum2d-action-info h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.25rem;
            margin: 0 0 5px;
            color: var(--dum2d-dark);
        }
        .dum2d-action-info p {
            margin: 0;
            color: #64748b;
            font-size: 0.95rem;
        }
        .dum2d-btn-group {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }
        .dum2d-btn-phone, .dum2d-btn-whatsapp {
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
        .dum2d-btn-phone {
            background: var(--dum2d-primary);
            color: #ffffff;
        }
        .dum2d-btn-phone:hover {
            background: var(--dum2d-secondary);
            color: #ffffff;
            transform: translateY(-2px);
        }
        .dum2d-btn-whatsapp {
            background: #25d366;
            color: #ffffff;
        }
        .dum2d-btn-whatsapp:hover {
            background: #1eb954;
            color: #ffffff;
            transform: translateY(-2px);
        }

        /* Content Sections */
        .dum2d-section {
            padding: 60px 20px;
            max-width: 1140px;
            margin: 0 auto;
        }
        .dum2d-section-header {
            text-align: center;
            max-width: 780px;
            margin: 0 auto 45px;
        }
        .dum2d-section-header h2 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(1.8rem, 3vw, 2.4rem);
            color: var(--dum2d-dark);
            margin-bottom: 12px;
            font-weight: 800;
        }
        .dum2d-section-header p {
            color: #64748b;
            font-size: 1.05rem;
            margin: 0;
        }

        /* Grid Layouts */
        .dum2d-grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            align-items: center;
        }
        .dum2d-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }
        .dum2d-grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
        }

        .dum2d-feature-card {
            background: #ffffff;
            border: 1px solid var(--dum2d-border);
            border-radius: 14px;
            padding: 26px;
            transition: all 0.3s ease;
        }
        .dum2d-feature-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(0,0,0,0.06);
            border-color: #cbd5e1;
        }
        .dum2d-feature-card h3, .dum2d-feature-card h4 {
            font-family: 'Outfit', sans-serif;
            color: var(--dum2d-dark);
            margin: 0 0 10px;
            font-size: 1.25rem;
        }
        .dum2d-feature-card p {
            color: #64748b;
            font-size: 0.95rem;
            margin: 0;
            line-height: 1.65;
        }

        /* Image Showcase */
        .dum2d-img-container {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            border: 1px solid var(--dum2d-border);
        }
        .dum2d-img-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }
        .dum2d-img-container:hover img {
            transform: scale(1.03);
        }
        .dum2d-img-caption {
            background: #ffffff;
            padding: 12px 16px;
            font-size: 0.88rem;
            color: #475569;
            font-weight: 500;
            border-top: 1px solid var(--dum2d-border);
        }

        /* Rate Table */
        .dum2d-table-container {
            background: #ffffff;
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid var(--dum2d-border);
            box-shadow: 0 4px 15px rgba(0,0,0,0.04);
            margin-bottom: 25px;
        }
        .dum2d-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        .dum2d-table th {
            background: var(--dum2d-primary);
            color: #ffffff;
            padding: 16px 20px;
            font-family: 'Outfit', sans-serif;
            font-weight: 600;
            font-size: 0.95rem;
            letter-spacing: 0.02em;
        }
        .dum2d-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--dum2d-border);
            font-size: 0.95rem;
            color: #334155;
        }
        .dum2d-table tr:last-child td {
            border-bottom: none;
        }
        .dum2d-table tr:nth-child(even) td {
            background: #f8fafc;
        }
        .dum2d-price-badge {
            font-weight: 800;
            color: var(--dum2d-primary);
            font-family: 'Outfit', sans-serif;
            font-size: 1.05rem;
        }

        /* Timeline / Steps */
        .dum2d-step-card {
            background: #ffffff;
            border-left: 4px solid var(--dum2d-primary);
            border-radius: 0 12px 12px 0;
            padding: 22px 24px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            border-top: 1px solid var(--dum2d-border);
            border-right: 1px solid var(--dum2d-border);
            border-bottom: 1px solid var(--dum2d-border);
            position: relative;
        }
        .dum2d-step-num {
            display: inline-block;
            background: var(--dum2d-accent);
            color: #ffffff;
            font-weight: 800;
            font-size: 0.82rem;
            padding: 2px 10px;
            border-radius: 4px;
            margin-bottom: 8px;
            font-family: 'Outfit', sans-serif;
        }
        .dum2d-step-card h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            margin: 0 0 6px;
            color: var(--dum2d-dark);
        }
        .dum2d-step-card p {
            margin: 0;
            font-size: 0.92rem;
            color: #64748b;
        }

        /* Locality Grid */
        .dum2d-matrix-box {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--dum2d-border);
            padding: 28px;
        }
        .dum2d-matrix-box h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.3rem;
            color: var(--dum2d-dark);
            margin: 0 0 16px;
            border-bottom: 2px solid var(--dum2d-accent);
            padding-bottom: 8px;
            display: inline-block;
        }
        .dum2d-matrix-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 12px;
        }
        .dum2d-matrix-card {
            background: var(--dum2d-gray-bg);
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 12px 14px;
        }
        .dum2d-matrix-card h4 {
            font-size: 0.95rem;
            font-weight: 700;
            margin: 0 0 3px;
            color: var(--dum2d-dark);
        }
        .dum2d-matrix-card p {
            font-size: 0.82rem;
            color: #64748b;
            margin: 0;
            line-height: 1.4;
        }

        /* FAQ Accordion */
        .dum2d-faq-item {
            background: #ffffff;
            border: 1px solid var(--dum2d-border);
            border-radius: 12px;
            margin-bottom: 14px;
            padding: 20px 24px;
        }
        .dum2d-faq-q {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            color: var(--dum2d-dark);
            font-size: 1.1rem;
            margin-bottom: 8px;
        }
        .dum2d-faq-a {
            color: #64748b;
            font-size: 0.95rem;
            line-height: 1.65;
        }

        /* CTA Banner */
        .dum2d-cta-banner {
            background: linear-gradient(135deg, var(--dum2d-primary) 0%, var(--dum2d-secondary) 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 45px 30px;
            text-align: center;
            margin: 40px auto;
            max-width: 1140px;
        }
        .dum2d-cta-banner h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            margin: 0 0 12px;
        }
        .dum2d-cta-banner p {
            max-width: 700px;
            margin: 0 auto 25px;
            color: #fce7f3;
            font-size: 1.05rem;
        }

        /* Cluster Links */
        .dum2d-cluster-links {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--dum2d-border);
            padding: 28px;
        }
        .dum2d-cluster-links h3 {
            font-family: 'Outfit', sans-serif;
            margin: 0 0 18px;
            font-size: 1.25rem;
            color: var(--dum2d-dark);
        }
        .dum2d-tag-cloud {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .dum2d-tag-link {
            display: inline-block;
            background: var(--dum2d-gray-bg);
            border: 1px solid var(--dum2d-border);
            color: #334155;
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 0.88rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s ease;
        }
        .dum2d-tag-link:hover {
            background: var(--dum2d-primary);
            color: #ffffff;
            border-color: var(--dum2d-primary);
        }

        @media (max-width: 768px) {
            .dum2d-action-bar {
                flex-direction: column;
                text-align: center;
                padding: 20px;
            }
            .dum2d-btn-group {
                justify-content: center;
                width: 100%;
            }
            .dum2d-btn-phone, .dum2d-btn-whatsapp {
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
        "name": "Shree Ashirwad Packers and Movers Dumka",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "https://www.shreeashirwadpackers.com/#organization",
        "url": "https://www.shreeashirwadpackers.com/dumka-to-deoghar-packers-and-movers",
        "telephone": "+918409531615",
        "priceRange": "₹₹",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Rasikpur Chowk, Near Dumka Railway Station",
            "addressLocality": "Dumka",
            "addressRegion": "Jharkhand",
            "postalCode": "814101",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 24.2686,
            "longitude": 87.2484
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
        "serviceType": "Inter-District Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Dumka"
            },
            {
                "@type": "City",
                "name": "Deoghar"
            }
        ],
        "description": "Professional inter-district home shifting, vehicle carrier, and office relocation connecting Dumka (Rasikpur, Dudhani, Tin Bazaar, SKMU, PJMCH) to Deoghar (Castairs Town, Bilasi Town, Jasidih, Devipur AIIMS, Satsang Nagar, Madhupur) across the 65 km Basukinath corridor via NH-114A. Providing guaranteed ultra-fast same-day 4 to 6 hour door-to-door delivery, 5-layer protective packing, closed container trucks, SKMU, PJMCH & AIIMS compliant tax billing, and full transit insurance."
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
                "name": "Dumka Packers and Movers",
                "item": "https://www.shreeashirwadpackers.com/packers-and-movers-in-dumka"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Dumka to Deoghar",
                "item": "https://www.shreeashirwadpackers.com/dumka-to-deoghar-packers-and-movers"
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
                "name": "What is the travel distance and moving time from Dumka to Deoghar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The road distance between Dumka and Deoghar is approximately 65 to 70 km via Jama, Jarmundi, Basukinath Dham, and Mohanpur (NH-114A). Driving time for our container trucks is around 1.5 to 2 hours. We provide express same-day shifting: loading in Dumka in the morning and completing unloading, unpacking, and setup in Deoghar within 4 to 6 hours door-to-door."
                }
            },
            {
                "@type": "Question",
                "name": "What are the shifting rates for Dumka to Deoghar household moves?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Due to the direct 65 km corridor, our rates are extremely economical: 1 BHK flat shifting is ₹8,500 to ₹13,500; 2 BHK household moving is ₹12,500 to ₹18,500; 3 BHK bungalow relocation ranges from ₹17,500 to ₹26,000; two-wheeler bike transport is ₹1,800 to ₹3,200; and dedicated enclosed car carrier is ₹5,500 to ₹9,500."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide claim-ready bills for SKMU Dumka professors and PJMCH medical staff?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We furnish 100% compliant computer-generated GST tax invoices (SAC 9965/9967), consignment bilty copies, itemized inventory packing lists, and transit insurance receipts accepted without objection by Sido Kanhu Murmu University (SKMU), Phulo Jhano Medical College (PJMCH), AIIMS Deoghar, Santhal Pargana Divisional Commissionerate, and nationalized banks."
                }
            },
            {
                "@type": "Question",
                "name": "How are temple mementos, brass idols, and delicate crockery secured?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Connecting Basukinath Dham and Baidyanath Dham, we specialize in pooja mandir and brass idol packing. We use virgin multi-layer bubble wrap, custom foam blocks, heavy-gauge thermocol encasements, and double-walled cartons marked with fragile indicators."
                }
            },
            {
                "@type": "Question",
                "name": "Can you shift my two-wheeler bike or car from Dumka to Deoghar on the same day?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer zero-scratch two-wheeler parceling with foam padding on indicators, handlebars, and fuel tanks, strapped securely inside our closed container truck. Dedicated enclosed car carrier transport is also executed within the same day."
                }
            },
            {
                "@type": "Question",
                "name": "Which areas in Deoghar do you cover for doorstep delivery?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We provide complete unloading and room setup across Castairs Town, Williams Town, Bilasi Town, Bompas Town, Jasidih, Devipur AIIMS Campus, Satsang Nagar, Kunda, Rohini, and Madhupur."
                }
            }
        ]
    }
    </script>
</head>

<body class="dum2d-wrapper">

<?php include __DIR__ . '/../includes/header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="dum2d-hero">
        <div class="dum2d-hero-content">
            <span class="dum2d-badge">&#128666; Santhal Pargana Twin Hub Express: Dumka &rarr; Deoghar</span>
            <h1>Dumka to Deoghar <span>Packers and Movers</span></h1>
            <p>
                Swift, reliable, and completely damage-free inter-district relocation connecting the Sub-Capital of Jharkhand (Dumka) to the holy city of Baidyanath Dham (Deoghar). Dedicated closed container trucks, express 4-6 hr door-to-door delivery, 5-layer protective packing, and 100% SKMU, PJMCH &amp; AIIMS approved reimbursement documentation.
            </p>

            <div class="dum2d-hero-stats">
                <div class="dum2d-stat-card">
                    <div class="dum2d-stat-val">65 km</div>
                    <div class="dum2d-stat-lbl">Highway Distance</div>
                </div>
                <div class="dum2d-stat-card">
                    <div class="dum2d-stat-val">4-6 Hrs</div>
                    <div class="dum2d-stat-lbl">Express Door-to-Door Delivery</div>
                </div>
                <div class="dum2d-stat-card">
                    <div class="dum2d-stat-val">100%</div>
                    <div class="dum2d-stat-lbl">SKMU, PJMCH &amp; PSU Approval</div>
                </div>
                <div class="dum2d-stat-card">
                    <div class="dum2d-stat-val">Zero Loss</div>
                    <div class="dum2d-stat-lbl">Transit Insurance Guarantee</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Action Bar -->
    <div class="dum2d-action-bar">
        <div class="dum2d-action-info">
            <h3>Relocating from Dumka to Deoghar?</h3>
            <p>Enjoy same-day express shifting, instant transparent pricing, and comprehensive transit insurance.</p>
        </div>
        <div class="dum2d-btn-group">
            <a href="tel:8409531615" class="dum2d-btn-phone">&#128222; Call 084095 31615</a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20please%20send%20a%20quote%20for%20Dumka%20to%20Deoghar%20shifting." target="_blank" class="dum2d-btn-whatsapp">&#128172; WhatsApp Instant</a>
        </div>
    </div>

    <!-- Section 1: Route Corridor & Highway Logistics -->
    <section class="dum2d-section">
        <div class="dum2d-grid-2">
            <div>
                <span class="dum2d-badge" style="color: var(--dum2d-primary); background: rgba(131,24,67,0.1); border-color: rgba(131,24,67,0.25);">Corridor Logistics</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--dum2d-dark); margin: 12px 0 18px;">Swift 65 km Santhal Pargana Corridor: NH-114A via Basukinath</h2>
                <p>
                    Connecting Dumka, the administrative sub-capital of Jharkhand, to Deoghar, the cultural and spiritual center of Santhal Pargana, is one of the most vital arteries in eastern Jharkhand. Spanning just 65 to 70 kilometers along National Highway 114A (NH-114A), this route passes through Jama, Jarmundi, the holy shrine of Basukinath Dham, and Mohanpur before entering Deoghar.
                </p>
                <p>
                    Because of this smooth, well-maintained two-lane highway, our specialized closed container vehicles complete the drive in just 1.5 to 2 hours. Shree Ashirwad Packers and Movers has established daily operations across both hubs, allowing us to offer unprecedented speed: our team begins packing and loading your home in Dumka after breakfast, and your complete 2 BHK or 3 BHK household is placed, unpacked, and fully set up in your new Deoghar home before sunset.
                </p>
                <div style="background: var(--dum2d-gray-bg); padding: 18px; border-radius: 10px; border-left: 4px solid var(--dum2d-accent); margin-top: 15px;">
                    <p style="margin: 0; font-weight: 600; font-size: 0.95rem; color: var(--dum2d-dark);">
                        &#9989; <strong>Express Turnaround Advantage:</strong> Direct single-truck door-to-door transit without intermediate storage or handling, ensuring that fragile temple artifacts, electronics, and wooden furniture arrive in flawless condition.
                    </p>
                </div>
            </div>
            <div class="dum2d-img-container">
                <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Dedicated Container Truck for Dumka to Deoghar Shifting" width="600" height="400" loading="lazy">
                <div class="dum2d-img-caption">Sealed container trucks providing dust-proof, rain-safe, and rapid 1.5 hr highway transit between Dumka and Deoghar.</div>
            </div>
        </div>
    </section>

    <!-- Section 2: Why Choose Shree Ashirwad -->
    <section class="dum2d-section" style="background: var(--dum2d-gray-bg);">
        <div class="dum2d-section-header">
            <h2>Why Choose Shree Ashirwad for Dumka to Deoghar Relocation?</h2>
            <p>Unmatched speed, local Santhal Pargana presence, and complete institutional moving expertise.</p>
        </div>
        <div class="dum2d-grid-3">
            <div class="dum2d-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#9201;</div>
                <h3>Ultra-Fast 4-6 Hr Turnaround</h3>
                <p>With only 65 km between the two cities, our dedicated crew completes loading, transportation, and setup in Deoghar within half a working day.</p>
            </div>
            <div class="dum2d-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#128196;</div>
                <h3>SKMU, PJMCH &amp; AIIMS Compliant Bills</h3>
                <p>We issue GST tax invoices, consignment notes, and stamped receipts fully accepted by SKMU Dumka, PJMCH, AIIMS Deoghar, and government departments.</p>
            </div>
            <div class="dum2d-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#128737;</div>
                <h3>5-Layer Protective Packaging</h3>
                <p>Multi-layer air bubble film, dense EPE foam, heavy corrugated edge guards, 7-ply cartons, and waterproof stretch wrap safeguard all furniture.</p>
            </div>
            <div class="dum2d-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#128666;</div>
                <h3>Weatherproof Steel Containers</h3>
                <p>Your goods travel safely inside locked, rigid container trucks shielded against road gravel, intense heat, and sudden monsoon downpours.</p>
            </div>
            <div class="dum2d-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#128663;</div>
                <h3>Safe Car &amp; Motorcycle Parceling</h3>
                <p>Relocate your car or bike with full foam cushioning, wheel immobilizers, and mirror protection, delivered on the very same day.</p>
            </div>
            <div class="dum2d-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#128104;&#8205;&#128295;</div>
                <h3>Complete Electrical &amp; Furniture Setup</h3>
                <p>Trained carpenters and appliance technicians dismantle double beds, wardrobes, water purifiers, and ACs, reassembling them flawlessly in Deoghar.</p>
            </div>
        </div>
    </section>

    <!-- Section 3: Transparent Pricing Table -->
    <section class="dum2d-section">
        <div class="dum2d-section-header">
            <h2>Transparent Tariff Schedule: Dumka to Deoghar</h2>
            <p>Economical, crystal-clear pricing tailored for the short 65 km inter-district move with zero hidden charges.</p>
        </div>
        <div class="dum2d-table-container">
            <table class="dum2d-table">
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
                        <td><strong>1 BHK Flat Shifting</strong><br><small>Living room, 1 bedroom, kitchen, TV, fridge &amp; washing machine</small></td>
                        <td>65 &ndash; 70 km</td>
                        <td>Same Day (4 &ndash; 6 hrs)</td>
                        <td><span class="dum2d-price-badge">&#8377;8,500 &ndash; &#8377;13,500</span></td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Complete Household</strong><br><small>2 bedrooms, hall, kitchen, dining set, 2 ACs, standard appliances</small></td>
                        <td>65 &ndash; 70 km</td>
                        <td>Same Day (5 &ndash; 7 hrs)</td>
                        <td><span class="dum2d-price-badge">&#8377;12,500 &ndash; &#8377;18,500</span></td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Family Home / Bungalow</strong><br><small>Extensive family furnishings, modular beds, delicate glassware &amp; pooja room</small></td>
                        <td>65 &ndash; 70 km</td>
                        <td>Same Day (6 &ndash; 8 hrs)</td>
                        <td><span class="dum2d-price-badge">&#8377;17,500 &ndash; &#8377;26,000</span></td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Large Residence Relocation</strong><br><small>Bungalow setup, heavy wooden almirahs, gym equipment, terrace goods</small></td>
                        <td>65 &ndash; 70 km</td>
                        <td>Same Day (7 &ndash; 9 hrs)</td>
                        <td><span class="dum2d-price-badge">&#8377;24,000 &ndash; &#8377;36,000</span></td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler / Bike Parcel Service</strong><br><small>Motorcycles, scooters with bubble wrapping and wheel lock security</small></td>
                        <td>65 &ndash; 70 km</td>
                        <td>Same Day (3 &ndash; 5 hrs)</td>
                        <td><span class="dum2d-price-badge">&#8377;1,800 &ndash; &#8377;3,200</span></td>
                    </tr>
                    <tr>
                        <td><strong>Dedicated Enclosed Car Carrier</strong><br><small>Sedans, hatchbacks, SUVs inside enclosed carrier trailer</small></td>
                        <td>65 &ndash; 70 km</td>
                        <td>Same Day Delivery</td>
                        <td><span class="dum2d-price-badge">&#8377;5,500 &ndash; &#8377;9,500</span></td>
                    </tr>
                    <tr>
                        <td><strong>Complete Unpacking &amp; Room Setup Add-on</strong><br><small>Unpacking, room-by-room positioning, bed assembly, and trash removal</small></td>
                        <td>Onsite Service</td>
                        <td>2 &ndash; 3 Hours</td>
                        <td><span class="dum2d-price-badge">&#8377;2,000 &ndash; &#8377;3,800</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="text-align: center; color: #64748b; font-size: 0.9rem; margin-top: 10px;">
            * Quotes reflect standard ground-to-ground shifting; upper floors without elevators or specialized crane lifting may have nominal adjustments.
        </p>
    </section>

    <!-- Section 4: Institutional & Medical Relocation Guidance -->
    <section class="dum2d-section" style="background: #ffffff;">
        <div class="dum2d-grid-2">
            <div class="dum2d-img-container">
                <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Protective packing for fragile household and medical equipment" width="600" height="400" loading="lazy">
                <div class="dum2d-img-caption">5-layer protective wrapping for medical research files, glassware, electronics, and delicate mandir articles.</div>
            </div>
            <div>
                <span class="dum2d-badge" style="color: var(--dum2d-primary); background: rgba(131,24,67,0.1); border-color: rgba(131,24,67,0.25);">Institutional Guidance</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--dum2d-dark); margin: 12px 0 18px;">Specialized Support for SKMU, PJMCH &amp; Administrative Transfers</h2>
                <p>
                    Because Dumka is the divisional headquarters of Santhal Pargana and houses <strong>Sido Kanhu Murmu University (SKMU)</strong> alongside <strong>Phulo Jhano Medical College &amp; Hospital (PJMCH)</strong>, professional transfers from Dumka to Deoghar occur on a frequent schedule. Healthcare specialists regularly move from PJMCH to AIIMS Deoghar, while judicial and administrative officers rotate from the Dumka Divisional Commissionerate to the Deoghar Collectorate.
                </p>
                <p>
                    Shree Ashirwad Packers and Movers eliminates reimbursement friction by supplying comprehensive documentation packages:
                </p>
                <ul style="color: #475569; padding-left: 20px; line-height: 1.8; font-size: 0.95rem;">
                    <li><strong>Computerized Tax Invoices:</strong> Valid GSTIN with SAC Code 9965 (Freight Transport Agency) and SAC 9967 (Cargo Handling), 100% compliant with government accounting regulations.</li>
                    <li><strong>Consignment Bilty (LR Copy):</strong> Formal transport note containing vehicle number, driver identity, loading date, and dispatch address.</li>
                    <li><strong>Certified Packing Manifest:</strong> Numbered itemized inventory signed by our supervisor for quick verification by administrative audit teams.</li>
                    <li><strong>Official Money Receipts:</strong> Stamped payment acknowledgments enabling seamless 100% claim settlement.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section 5: The 5-Layer Defensive Packaging Shield -->
    <section class="dum2d-section" style="background: var(--dum2d-gray-bg);">
        <div class="dum2d-section-header">
            <h2>Our 5-Layer Defensive Packaging Shield</h2>
            <p>Engineered to withstand vibrations along the Basukinath corridor, ensuring zero scratches or breakages.</p>
        </div>
        <div class="dum2d-grid-4">
            <div class="dum2d-feature-card" style="text-align: center;">
                <div style="font-size: 2.2rem; color: var(--dum2d-accent); margin-bottom: 10px;">Layer 1</div>
                <h4>Virgin Bubble Cushioning</h4>
                <p>High-tensile air pocket wrap absorbing initial surface friction on polished timber, appliances, and delicate glass surfaces.</p>
            </div>
            <div class="dum2d-feature-card" style="text-align: center;">
                <div style="font-size: 2.2rem; color: var(--dum2d-accent); margin-bottom: 10px;">Layer 2</div>
                <h4>Dense EPE Foam Sheets</h4>
                <p>Shock-absorbent cellular foam shielding TV screens, microwave ovens, kitchen glassware, and brass idols.</p>
            </div>
            <div class="dum2d-feature-card" style="text-align: center;">
                <div style="font-size: 2.2rem; color: var(--dum2d-accent); margin-bottom: 10px;">Layer 3</div>
                <h4>Heavy Angle Protectors</h4>
                <p>Reinforced corner cardboard armor safeguarding vulnerable edges of wardrobes, tables, dressing mirrors, and beds.</p>
            </div>
            <div class="dum2d-feature-card" style="text-align: center;">
                <div style="font-size: 2.2rem; color: var(--dum2d-accent); margin-bottom: 10px;">Layer 4 &amp; 5</div>
                <h4>7-Ply Cartons &amp; Stretch Wrap</h4>
                <p>Rigid kraft cartons sealed with industrial moisture-proof stretch film locking out highway dust and humidity.</p>
            </div>
        </div>
    </section>

    <!-- Section 6: Vehicle Relocation (Car Carrier & Bike Parcel) -->
    <section class="dum2d-section">
        <div class="dum2d-grid-2">
            <div>
                <span class="dum2d-badge" style="color: var(--dum2d-primary); background: rgba(131,24,67,0.1); border-color: rgba(131,24,67,0.25);">Automotive Logistics</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--dum2d-dark); margin: 12px 0 18px;">Safe Car Carrier &amp; Bike Parcel: Dumka to Deoghar</h2>
                <p>
                    Avoid tiring highway driving and vehicle wear during your house move. Shree Ashirwad provides dedicated automotive transport ensuring your car or motorcycle arrives at your new Deoghar address on the very same day.
                </p>
                <div class="dum2d-feature-card" style="margin-bottom: 16px;">
                    <h4>&#128663; Dedicated Enclosed Car Carriers</h4>
                    <p>Hydraulic loading ramps ensure safe ground clearance for luxury sedans and family SUVs. Cars are securely strapped with wheel chocks inside covered carriers, protected from stones, dust, and rain.</p>
                </div>
                <div class="dum2d-feature-card">
                    <h4>&#127949; Zero-Scratch Two-Wheeler Parcel Service</h4>
                    <p>Bikes and scooters receive multi-layer bubble wrapping on fuel tanks, turn indicators, and mirrors, with wheels immobilized inside the container truck for scratch-free arrival.</p>
                </div>
            </div>
            <div class="dum2d-img-container">
                <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Enclosed Hydraulic Car Carrier for Dumka to Deoghar" width="600" height="400" loading="lazy">
                <div class="dum2d-img-caption">Hydraulic car loading ramps providing zero-contact undercarriage safety for personal vehicles.</div>
            </div>
        </div>
    </section>

    <!-- Section 7: Step-by-Step Moving Process -->
    <section class="dum2d-section" style="background: var(--dum2d-gray-bg);">
        <div class="dum2d-section-header">
            <h2>Our 5-Stage Seamless Relocation Workflow</h2>
            <p>From initial booking in Dumka to full room arrangement in Deoghar, every step is executed with precision.</p>
        </div>
        <div class="dum2d-grid-3">
            <div class="dum2d-step-card">
                <span class="dum2d-step-num">Step 01</span>
                <h4>Pre-Move Survey &amp; Transparent Quote</h4>
                <p>Our relocation supervisor conducts an onsite or video survey in Dumka, assessing inventory volume, packing needs, and issuing a binding written quote.</p>
            </div>
            <div class="dum2d-step-card">
                <span class="dum2d-step-num">Step 02</span>
                <h4>5-Layer Packing &amp; Labeling</h4>
                <p>Our experienced packaging crew arrives on moving day with virgin bubble wrap, cartons, and tools, carefully wrapping furniture and labeling each box by room.</p>
            </div>
            <div class="dum2d-step-card">
                <span class="dum2d-step-num">Step 03</span>
                <h4>Safe Hydraulic Loading</h4>
                <p>Heavy furniture and appliances are loaded first using padded dollies and balance ramps, tightly anchored within our container truck to prevent transit shifting.</p>
            </div>
            <div class="dum2d-step-card">
                <span class="dum2d-step-num">Step 04</span>
                <h4>Fast NH-114A Highway Transit</h4>
                <p>The container vehicle is padlocked and travels the 65 km Basukinath corridor, completing transit to Deoghar in approximately 1.5 to 2 hours.</p>
            </div>
            <div class="dum2d-step-card">
                <span class="dum2d-step-num">Step 05</span>
                <h4>Unloading, Placement &amp; Setup</h4>
                <p>Upon reaching Deoghar, our crew unloads every article, carries it to the assigned room, reassembles beds and tables, and disposes of all packaging debris.</p>
            </div>
            <div class="dum2d-step-card" style="background: linear-gradient(135deg, var(--dum2d-primary) 0%, var(--dum2d-secondary) 100%); color: #ffffff; border: none;">
                <span class="dum2d-step-num" style="background: #fbbf24; color: #000;">Guarantee</span>
                <h4 style="color: #ffffff;">Zero-Damage Assurance</h4>
                <p style="color: #fce7f3;">Comprehensive transit insurance and rigorous packaging ensure your prized possessions are delivered exactly as they were packed.</p>
            </div>
        </div>
    </section>

    <!-- Section: Unpacking & Furniture Assembly in Deoghar -->
    <section class="dum2d-section">
        <div class="dum2d-grid-2">
            <div>
                <span class="dum2d-badge" style="color: var(--dum2d-primary); background: rgba(131,24,67,0.1); border-color: rgba(131,24,67,0.25);">White-Glove Setup</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--dum2d-dark); margin: 12px 0 18px;">Doorstep Unpacking, Furniture Assembly &amp; Debris Clearance</h2>
                <p>
                    Moving from Dumka to Deoghar should be an invigorating fresh beginning, not a day of exhausting labor unpacking boxes. Shree Ashirwad Packers and Movers provides full-service destination assistance across Deoghar.
                </p>
                <p>
                    Our trained crew carries each numbered box directly to its designated room—master bedroom, children's study, living hall, or kitchen. We assemble double beds, re-mount television wall units, install water purifiers, arrange heavy sofas, and unpack delicate crockery. Once setup is complete, we sweep up and haul away all used corrugated trimmings, bubble film, and straps, leaving your new home ready for immediate living.
                </p>
                <div class="dum2d-feature-card">
                    <h4>&#129529; Clean Home Handover Assurance</h4>
                    <p>Zero clutter, zero lingering trash. We ensure your new residence in Deoghar is pristine, functional, and organized from day one.</p>
                </div>
            </div>
            <div class="dum2d-img-container">
                <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and Setup Service in Deoghar" width="600" height="400" loading="lazy">
                <div class="dum2d-img-caption">Professional doorstep unpacking, room placement, bed assembly, and packing waste clearance in Deoghar.</div>
            </div>
        </div>
    </section>

    <!-- Section 8: Locality Matrix -->
    <section class="dum2d-section" style="background: var(--dum2d-gray-bg);">
        <div class="dum2d-section-header">
            <h2>Complete Locality Coverage: Dumka &amp; Deoghar</h2>
            <p>Direct doorstep pickup from every Dumka sector and seamless delivery across Deoghar's residential, academic, and spiritual neighborhoods.</p>
        </div>
        <div class="dum2d-grid-2">
            <div class="dum2d-matrix-box">
                <h3>Dumka Pickup Sectors</h3>
                <div class="dum2d-matrix-grid">
                    <div class="dum2d-matrix-card">
                        <h4>Rasikpur &amp; Dudhani</h4>
                        <p>Major commercial and upscale residential centers with modern family complexes.</p>
                    </div>
                    <div class="dum2d-matrix-card">
                        <h4>Tin Bazaar &amp; Gillanpara</h4>
                        <p>Historic trading hubs, central markets, and bustling residential neighborhoods.</p>
                    </div>
                    <div class="dum2d-matrix-card">
                        <h4>Bandhabpara &amp; SP College Road</h4>
                        <p>Peaceful academic colonies and residential homes with broad arterial roads.</p>
                    </div>
                    <div class="dum2d-matrix-card">
                        <h4>Sido Kanhu Murmu University (SKMU)</h4>
                        <p>Academic faculty quarters, research hostels, and university residential campus.</p>
                    </div>
                    <div class="dum2d-matrix-card">
                        <h4>Phulo Jhano Medical College (PJMCH)</h4>
                        <p>Doctors' residences, healthcare staff quarters, and hospital campus housing.</p>
                    </div>
                    <div class="dum2d-matrix-card">
                        <h4>Tata Showroom Chowk &amp; Airport Road</h4>
                        <p>Expanding modern townships, government colonies, and Kurwa bypass area.</p>
                    </div>
                </div>
            </div>

            <div class="dum2d-matrix-box">
                <h3>Deoghar Delivery Localities</h3>
                <div class="dum2d-matrix-grid">
                    <div class="dum2d-matrix-card">
                        <h4>Castairs Town &amp; Williams Town</h4>
                        <p>Central residential sectors with rapid access to VIP Chowk and temple roads.</p>
                    </div>
                    <div class="dum2d-matrix-card">
                        <h4>Bilasi Town &amp; Bompas Town</h4>
                        <p>Premier family colonies, spacious housing layouts, and quick arterial road connections.</p>
                    </div>
                    <div class="dum2d-matrix-card">
                        <h4>Jasidih Junction &amp; Industrial Area</h4>
                        <p>Railway quarters, industrial enterprises, and suburban residential settlements.</p>
                    </div>
                    <div class="dum2d-matrix-card">
                        <h4>AIIMS Deoghar Campus (Devipur)</h4>
                        <p>Faculty quarters, resident doctor apartments, and institutional housing blocks.</p>
                    </div>
                    <div class="dum2d-matrix-card">
                        <h4>Satsang Nagar &amp; Kunda</h4>
                        <p>Spiritual residential enclaves, bypass roads, and educational institutions.</p>
                    </div>
                    <div class="dum2d-matrix-card">
                        <h4>Rohini, Madhupur &amp; Mohanpur</h4>
                        <p>Direct coverage along the primary inbound Deoghar highway corridor.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 9: Verified Customer Reviews -->
    <section class="dum2d-section">
        <div class="dum2d-section-header">
            <h2>Verified Dumka to Deoghar Customer Reviews</h2>
            <p>Authentic accounts from medical doctors, university professors, and relocated families.</p>
        </div>
        <div class="dum2d-grid-2">
            <div class="dum2d-feature-card">
                <div style="color: #f59e0b; margin-bottom: 8px;">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</div>
                <p style="font-style: italic; margin-bottom: 15px;">"I was transferred from PJMCH Dumka to AIIMS Deoghar. Shree Ashirwad Packers packed our 2 BHK apartment in Dudhani Dumka by 9:30 AM, and everything was safely unloaded in our Devipur AIIMS doctors' quarters in Deoghar by 3:00 PM! The entire move took just over 5 hours door-to-door. Meticulous packing with zero scratches, and their GST invoice was approved effortlessly."</p>
                <p style="font-weight: 700; color: var(--dum2d-primary); margin: 0;">&ndash; Dr. Manisha Tudu, Assistant Professor (PJMCH Dumka &rarr; AIIMS Deoghar)</p>
            </div>
            <div class="dum2d-feature-card">
                <div style="color: #f59e0b; margin-bottom: 8px;">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</div>
                <p style="font-style: italic; margin-bottom: 15px;">"We moved from SP College Road Dumka to Satsang Nagar Deoghar. We had antique wooden furniture, glass display units, and temple pooja items. The crew wrapped everything in thick bubble wrap and corner angle armor. Our Honda Activa was packed with foam and delivered in spotless condition. Very polite crew and completely transparent pricing."</p>
                <p style="font-weight: 700; color: var(--dum2d-primary); margin: 0;">&ndash; Binod Bihari Mandal, Retired Lecturer (Dumka &rarr; Deoghar)</p>
            </div>
        </div>
    </section>

    <!-- Section 10: Frequently Asked Questions (FAQ) -->
    <section class="dum2d-section" style="background: var(--dum2d-gray-bg);">
        <div class="dum2d-section-header">
            <h2>Frequently Asked Questions</h2>
            <p>Practical answers regarding transit durations, pricing, pooja idol safety, and official reimbursement claims.</p>
        </div>
        <div style="max-width: 900px; margin: 0 auto;">
            <div class="dum2d-faq-item">
                <div class="dum2d-faq-q">What is the travel distance and moving time from Dumka to Deoghar?</div>
                <div class="dum2d-faq-a">The road distance between Dumka and Deoghar is approximately 65 to 70 km via Jama, Jarmundi, Basukinath Dham, and Mohanpur (NH-114A). Driving time for our container trucks is around 1.5 to 2 hours. We provide express same-day shifting: loading in Dumka in the morning and completing unloading, unpacking, and setup in Deoghar within 4 to 6 hours door-to-door.</div>
            </div>
            <div class="dum2d-faq-item">
                <div class="dum2d-faq-q">What are the shifting rates for Dumka to Deoghar household moves?</div>
                <div class="dum2d-faq-a">Due to the direct 65 km corridor, our rates are extremely economical: 1 BHK flat shifting is ₹8,500 to ₹13,500; 2 BHK household moving is ₹12,500 to ₹18,500; 3 BHK bungalow relocation ranges from ₹17,500 to ₹26,000; two-wheeler bike transport is ₹1,800 to ₹3,200; and dedicated enclosed car carrier is ₹5,500 to ₹9,500.</div>
            </div>
            <div class="dum2d-faq-item">
                <div class="dum2d-faq-q">Do you provide claim-ready bills for SKMU Dumka professors and PJMCH medical staff?</div>
                <div class="dum2d-faq-a">Yes. We furnish 100% compliant computer-generated GST tax invoices (SAC 9965/9967), consignment bilty copies, itemized inventory packing lists, and transit insurance receipts accepted without objection by Sido Kanhu Murmu University (SKMU), Phulo Jhano Medical College (PJMCH), AIIMS Deoghar, Santhal Pargana Divisional Commissionerate, and nationalized banks.</div>
            </div>
            <div class="dum2d-faq-item">
                <div class="dum2d-faq-q">How are temple mementos, brass idols, and delicate crockery secured?</div>
                <div class="dum2d-faq-a">Connecting Basukinath Dham and Baidyanath Dham, we specialize in pooja mandir and brass idol packing. We use virgin multi-layer bubble wrap, custom foam blocks, heavy-gauge thermocol encasements, and double-walled cartons marked with fragile indicators.</div>
            </div>
            <div class="dum2d-faq-item">
                <div class="dum2d-faq-q">Can you shift my two-wheeler bike or car from Dumka to Deoghar on the same day?</div>
                <div class="dum2d-faq-a">Yes. We offer zero-scratch two-wheeler parceling with foam padding on indicators, handlebars, and fuel tanks, strapped securely inside our closed container truck. Dedicated enclosed car carrier transport is also executed within the same day.</div>
            </div>
            <div class="dum2d-faq-item">
                <div class="dum2d-faq-q">Which areas in Deoghar do you cover for doorstep delivery?</div>
                <div class="dum2d-faq-a">We provide complete unloading and room setup across Castairs Town, Williams Town, Bilasi Town, Bompas Town, Jasidih, Devipur AIIMS Campus, Satsang Nagar, Kunda, Rohini, and Madhupur.</div>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <div class="dum2d-cta-banner">
        <h2>Book Your Dumka to Deoghar Express Move Today</h2>
        <p>Experience hassle-free, same-day Santhal Pargana relocation backed by verified transit insurance, sealed container trucks, and expert packing crews.</p>
        <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
            <a href="tel:8409531615" class="dum2d-btn-phone" style="font-size: 1.1rem; padding: 14px 30px;">&#128222; Call 084095 31615</a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20please%20send%20a%20quote%20for%20Dumka%20to%20Deoghar%20shifting." target="_blank" class="dum2d-btn-whatsapp" style="font-size: 1.1rem; padding: 14px 30px;">&#128172; WhatsApp Inquiry</a>
        </div>
    </div>

    <!-- Section 11: Cluster Navigation Links -->
    <section class="dum2d-section" style="padding-top: 10px;">
        <div class="dum2d-cluster-links">
            <h3>Explore Connected Santhal Pargana &amp; Regional Routes</h3>
            <div class="dum2d-tag-cloud">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dumka" class="dum2d-tag-link">Dumka Hub Overview</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-deoghar" class="dum2d-tag-link">Deoghar Hub Overview</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-dumka-packers-and-movers" class="dum2d-tag-link">Deoghar to Dumka Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/dumka-to-ranchi-packers-and-movers" class="dum2d-tag-link">Dumka to Ranchi Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-dumka-packers-and-movers" class="dum2d-tag-link">Ranchi to Dumka Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-dhanbad-packers-and-movers" class="dum2d-tag-link">Deoghar to Dhanbad Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-jamshedpur-packers-and-movers" class="dum2d-tag-link">Deoghar to Jamshedpur Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-hazaribagh-packers-and-movers" class="dum2d-tag-link">Deoghar to Hazaribagh Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-giridih-packers-and-movers" class="dum2d-tag-link">Deoghar to Giridih Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/pricing" class="dum2d-tag-link">Cost Calculator &amp; Rates</a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
