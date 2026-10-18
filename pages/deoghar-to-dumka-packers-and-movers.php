<?php
/**
 * Page Name: Deoghar to Dumka Packers and Movers
 * Route Slug: deoghar-to-dumka-packers-and-movers
 * Description: Dedicated inter-district moving route page connecting Deoghar (Baidyanath Dham) to Dumka (Sub-Capital of Jharkhand & Santhal Pargana Divisional Headquarters).
 * Focus Keywords: deoghar to dumka packers and movers, packers and movers deoghar to dumka, house shifting deoghar to dumka, deoghar to dumka luggage parcel, deoghar to dumka car carrier, deoghar to dumka bike parcel
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Deoghar to Dumka Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Top Deoghar to Dumka packers and movers by Shree Ashirwad. Same-day 4-6 hr transit, AIIMS & SKMU bills, 5-layer packing, car carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/deoghar-to-dumka-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="deoghar to dumka packers and movers, packers and movers deoghar to dumka, house shifting deoghar to dumka, deoghar to dumka luggage parcel, deoghar to dumka car carrier, deoghar to dumka bike parcel">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Deoghar">

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

    <!-- Scoped CSS for Route 4 (Deoghar to Dumka) -->
    <style>
        :root {
            --d2dum-primary: #831843;
            --d2dum-secondary: #9d174d;
            --d2dum-accent: #f59e0b;
            --d2dum-accent-light: #fef3c7;
            --d2dum-dark: #0f172a;
            --d2dum-gray-bg: #f8fafc;
            --d2dum-border: #e2e8f0;
        }

        .d2dum-wrapper {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #334155;
            line-height: 1.7;
        }

        .d2dum-hero {
            background: linear-gradient(135deg, rgba(131,24,67,0.95) 0%, rgba(157,23,77,0.92) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 20px 75px;
            text-align: center;
            position: relative;
        }
        .d2dum-hero-content {
            max-width: 980px;
            margin: 0 auto;
        }
        .d2dum-badge {
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
        .d2dum-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2rem, 4vw, 3.2rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 18px;
            letter-spacing: -0.02em;
        }
        .d2dum-hero h1 span {
            color: #fbbf24;
        }
        .d2dum-hero p {
            font-size: 1.15rem;
            max-width: 820px;
            margin: 0 auto 30px;
            color: #fce7f3;
            font-weight: 400;
        }
        .d2dum-hero-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 15px;
            margin-top: 35px;
        }
        .d2dum-stat-card {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.22);
            padding: 16px 12px;
            border-radius: 12px;
        }
        .d2dum-stat-val {
            font-family: 'Outfit', sans-serif;
            font-size: 1.8rem;
            font-weight: 800;
            color: #fbbf24;
        }
        .d2dum-stat-lbl {
            font-size: 0.82rem;
            color: #fce7f3;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* Action Bar */
        .d2dum-action-bar {
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
            border: 1px solid var(--d2dum-border);
        }
        .d2dum-action-info h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.25rem;
            margin: 0 0 5px;
            color: var(--d2dum-dark);
        }
        .d2dum-action-info p {
            margin: 0;
            color: #64748b;
            font-size: 0.95rem;
        }
        .d2dum-btn-group {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }
        .d2dum-btn-phone, .d2dum-btn-whatsapp {
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
        .d2dum-btn-phone {
            background: var(--d2dum-primary);
            color: #ffffff;
        }
        .d2dum-btn-phone:hover {
            background: var(--d2dum-secondary);
            color: #ffffff;
            transform: translateY(-2px);
        }
        .d2dum-btn-whatsapp {
            background: #25d366;
            color: #ffffff;
        }
        .d2dum-btn-whatsapp:hover {
            background: #1eb954;
            color: #ffffff;
            transform: translateY(-2px);
        }

        /* Content Sections */
        .d2dum-section {
            padding: 60px 20px;
            max-width: 1140px;
            margin: 0 auto;
        }
        .d2dum-section-header {
            text-align: center;
            max-width: 780px;
            margin: 0 auto 45px;
        }
        .d2dum-section-header h2 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(1.8rem, 3vw, 2.4rem);
            color: var(--d2dum-dark);
            margin-bottom: 12px;
            font-weight: 800;
        }
        .d2dum-section-header p {
            color: #64748b;
            font-size: 1.05rem;
            margin: 0;
        }

        /* Grid Layouts */
        .d2dum-grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            align-items: center;
        }
        .d2dum-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }
        .d2dum-grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
        }

        .d2dum-feature-card {
            background: #ffffff;
            border: 1px solid var(--d2dum-border);
            border-radius: 14px;
            padding: 26px;
            transition: all 0.3s ease;
        }
        .d2dum-feature-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(0,0,0,0.06);
            border-color: #cbd5e1;
        }
        .d2dum-feature-card h3, .d2dum-feature-card h4 {
            font-family: 'Outfit', sans-serif;
            color: var(--d2dum-dark);
            margin: 0 0 10px;
            font-size: 1.25rem;
        }
        .d2dum-feature-card p {
            color: #64748b;
            font-size: 0.95rem;
            margin: 0;
            line-height: 1.65;
        }

        /* Image Showcase */
        .d2dum-img-container {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            border: 1px solid var(--d2dum-border);
        }
        .d2dum-img-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }
        .d2dum-img-container:hover img {
            transform: scale(1.03);
        }
        .d2dum-img-caption {
            background: #ffffff;
            padding: 12px 16px;
            font-size: 0.88rem;
            color: #475569;
            font-weight: 500;
            border-top: 1px solid var(--d2dum-border);
        }

        /* Rate Table */
        .d2dum-table-container {
            background: #ffffff;
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid var(--d2dum-border);
            box-shadow: 0 4px 15px rgba(0,0,0,0.04);
            margin-bottom: 25px;
        }
        .d2dum-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        .d2dum-table th {
            background: var(--d2dum-primary);
            color: #ffffff;
            padding: 16px 20px;
            font-family: 'Outfit', sans-serif;
            font-weight: 600;
            font-size: 0.95rem;
            letter-spacing: 0.02em;
        }
        .d2dum-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--d2dum-border);
            font-size: 0.95rem;
            color: #334155;
        }
        .d2dum-table tr:last-child td {
            border-bottom: none;
        }
        .d2dum-table tr:nth-child(even) td {
            background: #f8fafc;
        }
        .d2dum-price-badge {
            font-weight: 800;
            color: var(--d2dum-primary);
            font-family: 'Outfit', sans-serif;
            font-size: 1.05rem;
        }

        /* Timeline / Steps */
        .d2dum-step-card {
            background: #ffffff;
            border-left: 4px solid var(--d2dum-primary);
            border-radius: 0 12px 12px 0;
            padding: 22px 24px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            border-top: 1px solid var(--d2dum-border);
            border-right: 1px solid var(--d2dum-border);
            border-bottom: 1px solid var(--d2dum-border);
            position: relative;
        }
        .d2dum-step-num {
            display: inline-block;
            background: var(--d2dum-accent);
            color: #ffffff;
            font-weight: 800;
            font-size: 0.82rem;
            padding: 2px 10px;
            border-radius: 4px;
            margin-bottom: 8px;
            font-family: 'Outfit', sans-serif;
        }
        .d2dum-step-card h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            margin: 0 0 6px;
            color: var(--d2dum-dark);
        }
        .d2dum-step-card p {
            margin: 0;
            font-size: 0.92rem;
            color: #64748b;
        }

        /* Locality Grid */
        .d2dum-matrix-box {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--d2dum-border);
            padding: 28px;
        }
        .d2dum-matrix-box h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.3rem;
            color: var(--d2dum-dark);
            margin: 0 0 16px;
            border-bottom: 2px solid var(--d2dum-accent);
            padding-bottom: 8px;
            display: inline-block;
        }
        .d2dum-matrix-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 12px;
        }
        .d2dum-matrix-card {
            background: var(--d2dum-gray-bg);
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 12px 14px;
        }
        .d2dum-matrix-card h4 {
            font-size: 0.95rem;
            font-weight: 700;
            margin: 0 0 3px;
            color: var(--d2dum-dark);
        }
        .d2dum-matrix-card p {
            font-size: 0.82rem;
            color: #64748b;
            margin: 0;
            line-height: 1.4;
        }

        /* FAQ Accordion */
        .d2dum-faq-item {
            background: #ffffff;
            border: 1px solid var(--d2dum-border);
            border-radius: 12px;
            margin-bottom: 14px;
            padding: 20px 24px;
        }
        .d2dum-faq-q {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            color: var(--d2dum-dark);
            font-size: 1.1rem;
            margin-bottom: 8px;
        }
        .d2dum-faq-a {
            color: #64748b;
            font-size: 0.95rem;
            line-height: 1.65;
        }

        /* CTA Banner */
        .d2dum-cta-banner {
            background: linear-gradient(135deg, var(--d2dum-primary) 0%, var(--d2dum-secondary) 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 45px 30px;
            text-align: center;
            margin: 40px auto;
            max-width: 1140px;
        }
        .d2dum-cta-banner h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            margin: 0 0 12px;
        }
        .d2dum-cta-banner p {
            max-width: 700px;
            margin: 0 auto 25px;
            color: #fce7f3;
            font-size: 1.05rem;
        }

        /* Cluster Links */
        .d2dum-cluster-links {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--d2dum-border);
            padding: 28px;
        }
        .d2dum-cluster-links h3 {
            font-family: 'Outfit', sans-serif;
            margin: 0 0 18px;
            font-size: 1.25rem;
            color: var(--d2dum-dark);
        }
        .d2dum-tag-cloud {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .d2dum-tag-link {
            display: inline-block;
            background: var(--d2dum-gray-bg);
            border: 1px solid var(--d2dum-border);
            color: #334155;
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 0.88rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s ease;
        }
        .d2dum-tag-link:hover {
            background: var(--d2dum-primary);
            color: #ffffff;
            border-color: var(--d2dum-primary);
        }

        @media (max-width: 768px) {
            .d2dum-action-bar {
                flex-direction: column;
                text-align: center;
                padding: 20px;
            }
            .d2dum-btn-group {
                justify-content: center;
                width: 100%;
            }
            .d2dum-btn-phone, .d2dum-btn-whatsapp {
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
        "name": "Shree Ashirwad Packers and Movers Deoghar",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "https://www.shreeashirwadpackers.com/#organization",
        "url": "https://www.shreeashirwadpackers.com/deoghar-to-dumka-packers-and-movers",
        "telephone": "+918409531615",
        "priceRange": "₹₹",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Castairs Town, Near Baidyanath Dham Mandir",
            "addressLocality": "Deoghar",
            "addressRegion": "Jharkhand",
            "postalCode": "814112",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 24.4826,
            "longitude": 86.7011
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
                "name": "Deoghar"
            },
            {
                "@type": "City",
                "name": "Dumka"
            }
        ],
        "description": "Professional inter-district home shifting, vehicle carrier, and office relocation connecting Deoghar (Castairs Town, Bilasi Town, Jasidih, Devipur AIIMS, Satsang Nagar, Madhupur) to Dumka (Rasikpur, Dudhani, Tin Bazaar, SKMU University, Phulo Jhano Medical College PJMCH) across the 65 km Basukinath corridor via NH-114A. Providing guaranteed ultra-fast same-day 4 to 6 hour delivery, 5-layer protective packing, closed container trucks, AIIMS, SKMU & government claimable bills, and full transit insurance."
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
                "name": "Deoghar Packers and Movers",
                "item": "https://www.shreeashirwadpackers.com/packers-and-movers-in-deoghar"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Deoghar to Dumka",
                "item": "https://www.shreeashirwadpackers.com/deoghar-to-dumka-packers-and-movers"
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
                "name": "What is the travel distance and moving time from Deoghar to Dumka?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The road distance between Deoghar and Dumka is approximately 65 to 70 km via Mohanpur, Basukinath Dham, and Jarmundi (NH-114A). Driving time for our container trucks is around 1.5 to 2 hours. We provide express same-day shifting: loading in Deoghar in the morning and completing unloading, unpacking, and setup in Dumka within 4 to 6 hours door-to-door."
                }
            },
            {
                "@type": "Question",
                "name": "What are the shifting rates for Deoghar to Dumka household moves?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Due to the short 65 km corridor, our rates are extremely economical: 1 BHK flat shifting is ₹8,500 to ₹13,500; 2 BHK household moving is ₹12,500 to ₹18,500; 3 BHK bungalow relocation ranges from ₹17,500 to ₹26,000; two-wheeler bike transport is ₹1,800 to ₹3,200; and dedicated enclosed car carrier is ₹5,500 to ₹9,500."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide claim-ready bills for AIIMS Deoghar doctors and SKMU Dumka professors?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We furnish 100% compliant computer-generated GST tax invoices (SAC 9965/9967), consignment bilty copies, itemized inventory packing lists, and transit insurance receipts accepted without objection by AIIMS Deoghar, Sido Kanhu Murmu University (SKMU), Phulo Jhano Medical College (PJMCH), Santhal Pargana Divisional Commissionerate, and nationalized banks."
                }
            },
            {
                "@type": "Question",
                "name": "How are temple mementos, brass idols, and delicate crockery secured?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Being a spiritual artery connecting Baidyanath Dham and Basukinath Dham, we specialize in pooja mandir and brass idol packing. We use virgin multi-layer bubble wrap, custom foam blocks, heavy-gauge thermocol encasements, and double-walled cartons marked with fragile indicators."
                }
            },
            {
                "@type": "Question",
                "name": "Can you shift my two-wheeler bike or car from Deoghar to Dumka on the same day?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer zero-scratch two-wheeler parceling with foam padding on indicators, handlebars, and fuel tanks, strapped securely inside our closed container truck. Dedicated enclosed car carrier transport is also executed within the same day."
                }
            },
            {
                "@type": "Question",
                "name": "Which areas in Dumka do you cover for doorstep delivery?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We provide complete unloading and room setup across Rasikpur, Dudhani, Tin Bazaar, Gillanpara, Bandhabpara, SP College Road, Sido Kanhu Murmu University campus, Phulo Jhano Medical College (PJMCH) residential blocks, Tata Showroom Chowk, Airport Road, Kurwa, and Nonihat."
                }
            }
        ]
    }
    </script>
</head>

<body class="d2dum-wrapper">

<?php include __DIR__ . '/../includes/header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="d2dum-hero">
        <div class="d2dum-hero-content">
            <span class="d2dum-badge">&#128666; Santhal Pargana Twin Hub Express: Deoghar &rarr; Dumka</span>
            <h1>Deoghar to Dumka <span>Packers and Movers</span></h1>
            <p>
                Swift, reliable, and completely damage-free inter-district relocation connecting the holy city of Baidyanath Dham (Deoghar) to the Sub-Capital of Jharkhand (Dumka). Dedicated closed container trucks, express 4-6 hr door-to-door delivery, 5-layer protective packing, and 100% AIIMS, SKMU &amp; government approved reimbursement documentation.
            </p>

            <div class="d2dum-hero-stats">
                <div class="d2dum-stat-card">
                    <div class="d2dum-stat-val">65 km</div>
                    <div class="d2dum-stat-lbl">Highway Distance</div>
                </div>
                <div class="d2dum-stat-card">
                    <div class="d2dum-stat-val">4-6 Hrs</div>
                    <div class="d2dum-stat-lbl">Express Door-to-Door Delivery</div>
                </div>
                <div class="d2dum-stat-card">
                    <div class="d2dum-stat-val">100%</div>
                    <div class="d2dum-stat-lbl">AIIMS, SKMU &amp; PSU Approval</div>
                </div>
                <div class="d2dum-stat-card">
                    <div class="d2dum-stat-val">Zero Loss</div>
                    <div class="d2dum-stat-lbl">Transit Insurance Guarantee</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Action Bar -->
    <div class="d2dum-action-bar">
        <div class="d2dum-action-info">
            <h3>Relocating between Deoghar and Dumka?</h3>
            <p>Enjoy same-day express shifting, instant transparent pricing, and comprehensive transit insurance.</p>
        </div>
        <div class="d2dum-btn-group">
            <a href="tel:8409531615" class="d2dum-btn-phone">&#128222; Call 084095 31615</a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20please%20send%20a%20quote%20for%20Deoghar%20to%20Dumka%20shifting." target="_blank" class="d2dum-btn-whatsapp">&#128172; WhatsApp Instant</a>
        </div>
    </div>

    <!-- Section 1: Route Corridor & Highway Logistics -->
    <section class="d2dum-section">
        <div class="d2dum-grid-2">
            <div>
                <span class="d2dum-badge" style="color: var(--d2dum-primary); background: rgba(131,24,67,0.1); border-color: rgba(131,24,67,0.25);">Corridor Logistics</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--d2dum-dark); margin: 12px 0 18px;">Swift 65 km Santhal Pargana Corridor: NH-114A via Basukinath</h2>
                <p>
                    Connecting Deoghar, the cultural and spiritual center of Santhal Pargana, to Dumka, the administrative sub-capital of Jharkhand, is one of the most vital arteries in eastern Jharkhand. Spanning just 65 to 70 kilometers along National Highway 114A (NH-114A), this route passes through Mohanpur, the sacred pilgrimage hub of Basukinath Dham, Jarmundi, and Jama before entering Dumka.
                </p>
                <p>
                    Because of this smooth, well-maintained two-lane highway, our specialized closed container vehicles complete the drive in just 1.5 to 2 hours. Shree Ashirwad Packers and Movers has established daily operations across both hubs, allowing us to offer unprecedented speed: our team begins packing and loading your home in Deoghar after breakfast, and your complete 2 BHK or 3 BHK household is placed, unpacked, and fully set up in your new Dumka home before sunset.
                </p>
                <div style="background: var(--d2dum-gray-bg); padding: 18px; border-radius: 10px; border-left: 4px solid var(--d2dum-accent); margin-top: 15px;">
                    <p style="margin: 0; font-weight: 600; font-size: 0.95rem; color: var(--d2dum-dark);">
                        &#9989; <strong>Express Turnaround Advantage:</strong> Direct single-truck door-to-door transit without intermediate storage or handling, ensuring that fragile temple artifacts, electronics, and wooden furniture arrive in flawless condition.
                    </p>
                </div>
            </div>
            <div class="d2dum-img-container">
                <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Dedicated Container Truck for Deoghar to Dumka Shifting" width="600" height="400" loading="lazy">
                <div class="d2dum-img-caption">Sealed container trucks providing dust-proof, rain-safe, and rapid 1.5 hr highway transit between Deoghar and Dumka.</div>
            </div>
        </div>
    </section>

    <!-- Section 2: Why Choose Shree Ashirwad -->
    <section class="d2dum-section" style="background: var(--d2dum-gray-bg);">
        <div class="d2dum-section-header">
            <h2>Why Choose Shree Ashirwad for Deoghar to Dumka Relocation?</h2>
            <p>Unmatched speed, local Santhal Pargana presence, and complete institutional moving expertise.</p>
        </div>
        <div class="d2dum-grid-3">
            <div class="d2dum-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#9201;</div>
                <h3>Ultra-Fast 4-6 Hr Turnaround</h3>
                <p>With only 65 km between the two cities, our dedicated crew completes loading, transportation, and setup in Dumka within half a working day.</p>
            </div>
            <div class="d2dum-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#128196;</div>
                <h3>AIIMS, SKMU &amp; Government Compliant Bills</h3>
                <p>We issue GST tax invoices, consignment notes, and stamped receipts fully accepted by AIIMS Deoghar, SKMU Dumka, PJMCH, and government departments.</p>
            </div>
            <div class="d2dum-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#128737;</div>
                <h3>5-Layer Protective Packaging</h3>
                <p>Multi-layer air bubble film, dense EPE foam, heavy corrugated edge guards, 7-ply cartons, and waterproof stretch wrap safeguard all furniture.</p>
            </div>
            <div class="d2dum-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#128666;</div>
                <h3>Weatherproof Steel Containers</h3>
                <p>Your goods travel safely inside locked, rigid container trucks shielded against road gravel, intense heat, and sudden monsoon downpours.</p>
            </div>
            <div class="d2dum-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#128663;</div>
                <h3>Safe Car &amp; Motorcycle Parceling</h3>
                <p>Relocate your car or bike with full foam cushioning, wheel immobilizers, and mirror protection, delivered on the very same day.</p>
            </div>
            <div class="d2dum-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#128104;&#8205;&#128295;</div>
                <h3>Complete Electrical &amp; Furniture Setup</h3>
                <p>Trained carpenters and appliance technicians dismantle double beds, wardrobes, water purifiers, and ACs, reassembling them flawlessly in Dumka.</p>
            </div>
        </div>
    </section>

    <!-- Section 3: Transparent Pricing Table -->
    <section class="d2dum-section">
        <div class="d2dum-section-header">
            <h2>Transparent Tariff Schedule: Deoghar to Dumka</h2>
            <p>Economical, crystal-clear pricing tailored for the short 65 km inter-district move with zero hidden charges.</p>
        </div>
        <div class="d2dum-table-container">
            <table class="d2dum-table">
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
                        <td><span class="d2dum-price-badge">&#8377;8,500 &ndash; &#8377;13,500</span></td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Complete Household</strong><br><small>2 bedrooms, hall, kitchen, dining set, 2 ACs, standard appliances</small></td>
                        <td>65 &ndash; 70 km</td>
                        <td>Same Day (5 &ndash; 7 hrs)</td>
                        <td><span class="d2dum-price-badge">&#8377;12,500 &ndash; &#8377;18,500</span></td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Family Home / Bungalow</strong><br><small>Extensive family furnishings, modular beds, delicate glassware &amp; pooja room</small></td>
                        <td>65 &ndash; 70 km</td>
                        <td>Same Day (6 &ndash; 8 hrs)</td>
                        <td><span class="d2dum-price-badge">&#8377;17,500 &ndash; &#8377;26,000</span></td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Large Residence Relocation</strong><br><small>Bungalow setup, heavy wooden almirahs, gym equipment, terrace goods</small></td>
                        <td>65 &ndash; 70 km</td>
                        <td>Same Day (7 &ndash; 9 hrs)</td>
                        <td><span class="d2dum-price-badge">&#8377;24,000 &ndash; &#8377;36,000</span></td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler / Bike Parcel Service</strong><br><small>Motorcycles, scooters with bubble wrapping and wheel lock security</small></td>
                        <td>65 &ndash; 70 km</td>
                        <td>Same Day (3 &ndash; 5 hrs)</td>
                        <td><span class="d2dum-price-badge">&#8377;1,800 &ndash; &#8377;3,200</span></td>
                    </tr>
                    <tr>
                        <td><strong>Dedicated Enclosed Car Carrier</strong><br><small>Sedans, hatchbacks, SUVs inside enclosed carrier trailer</small></td>
                        <td>65 &ndash; 70 km</td>
                        <td>Same Day Delivery</td>
                        <td><span class="d2dum-price-badge">&#8377;5,500 &ndash; &#8377;9,500</span></td>
                    </tr>
                    <tr>
                        <td><strong>Complete Unpacking &amp; Room Setup Add-on</strong><br><small>Unpacking, room-by-room positioning, bed assembly, and trash removal</small></td>
                        <td>Onsite Service</td>
                        <td>2 &ndash; 3 Hours</td>
                        <td><span class="d2dum-price-badge">&#8377;2,000 &ndash; &#8377;3,800</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="text-align: center; color: #64748b; font-size: 0.9rem; margin-top: 10px;">
            * Quotes reflect standard ground-to-ground shifting; upper floors without elevators or specialized crane lifting may have nominal adjustments.
        </p>
    </section>

    <!-- Section 4: Institutional & Medical Relocation Guidance -->
    <section class="d2dum-section" style="background: #ffffff;">
        <div class="d2dum-grid-2">
            <div class="d2dum-img-container">
                <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Protective packing for fragile household and medical equipment" width="600" height="400" loading="lazy">
                <div class="d2dum-img-caption">5-layer protective wrapping for medical research files, glassware, electronics, and delicate mandir articles.</div>
            </div>
            <div>
                <span class="d2dum-badge" style="color: var(--d2dum-primary); background: rgba(131,24,67,0.1); border-color: rgba(131,24,67,0.25);">Institutional Guidance</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--d2dum-dark); margin: 12px 0 18px;">Specialized Support for AIIMS, SKMU &amp; Administrative Transfers</h2>
                <p>
                    Because Dumka is the divisional headquarters of Santhal Pargana and houses <strong>Sido Kanhu Murmu University (SKMU)</strong> alongside <strong>Phulo Jhano Medical College &amp; Hospital (PJMCH)</strong>, professional transfers between Deoghar and Dumka occur on a frequent schedule. Healthcare specialists regularly move between AIIMS Deoghar and PJMCH Dumka, while judicial and administrative officers rotate between the Deoghar Collectorate and the Dumka Divisional Commissionerate.
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
    <section class="d2dum-section" style="background: var(--d2dum-gray-bg);">
        <div class="d2dum-section-header">
            <h2>Our 5-Layer Defensive Packaging Shield</h2>
            <p>Engineered to withstand vibrations along the Basukinath corridor, ensuring zero scratches or breakages.</p>
        </div>
        <div class="d2dum-grid-4">
            <div class="d2dum-feature-card" style="text-align: center;">
                <div style="font-size: 2.2rem; color: var(--d2dum-accent); margin-bottom: 10px;">Layer 1</div>
                <h4>Virgin Bubble Cushioning</h4>
                <p>High-tensile air pocket wrap absorbing initial surface friction on polished timber, appliances, and delicate glass surfaces.</p>
            </div>
            <div class="d2dum-feature-card" style="text-align: center;">
                <div style="font-size: 2.2rem; color: var(--d2dum-accent); margin-bottom: 10px;">Layer 2</div>
                <h4>Dense EPE Foam Sheets</h4>
                <p>Shock-absorbent cellular foam shielding TV screens, microwave ovens, kitchen glassware, and brass idols.</p>
            </div>
            <div class="d2dum-feature-card" style="text-align: center;">
                <div style="font-size: 2.2rem; color: var(--d2dum-accent); margin-bottom: 10px;">Layer 3</div>
                <h4>Heavy Angle Protectors</h4>
                <p>Reinforced corner cardboard armor safeguarding vulnerable edges of wardrobes, tables, dressing mirrors, and beds.</p>
            </div>
            <div class="d2dum-feature-card" style="text-align: center;">
                <div style="font-size: 2.2rem; color: var(--d2dum-accent); margin-bottom: 10px;">Layer 4 &amp; 5</div>
                <h4>7-Ply Cartons &amp; Stretch Wrap</h4>
                <p>Rigid kraft cartons sealed with industrial moisture-proof stretch film locking out highway dust and humidity.</p>
            </div>
        </div>
    </section>

    <!-- Section 6: Vehicle Relocation (Car Carrier & Bike Parcel) -->
    <section class="d2dum-section">
        <div class="d2dum-grid-2">
            <div>
                <span class="d2dum-badge" style="color: var(--d2dum-primary); background: rgba(131,24,67,0.1); border-color: rgba(131,24,67,0.25);">Automotive Logistics</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--d2dum-dark); margin: 12px 0 18px;">Safe Car Carrier &amp; Bike Parcel: Deoghar to Dumka</h2>
                <p>
                    Avoid tiring highway driving and vehicle wear during your house move. Shree Ashirwad provides dedicated automotive transport ensuring your car or motorcycle arrives at your new Dumka address on the very same day.
                </p>
                <div class="d2dum-feature-card" style="margin-bottom: 16px;">
                    <h4>&#128663; Dedicated Enclosed Car Carriers</h4>
                    <p>Hydraulic loading ramps ensure safe ground clearance for luxury sedans and family SUVs. Cars are securely strapped with wheel chocks inside covered carriers, protected from stones, dust, and rain.</p>
                </div>
                <div class="d2dum-feature-card">
                    <h4>&#127949; Zero-Scratch Two-Wheeler Parcel Service</h4>
                    <p>Bikes and scooters receive multi-layer bubble wrapping on fuel tanks, turn indicators, and mirrors, with wheels immobilized inside the container truck for scratch-free arrival.</p>
                </div>
            </div>
            <div class="d2dum-img-container">
                <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Enclosed Hydraulic Car Carrier for Deoghar to Dumka" width="600" height="400" loading="lazy">
                <div class="d2dum-img-caption">Hydraulic car loading ramps providing zero-contact undercarriage safety for personal vehicles.</div>
            </div>
        </div>
    </section>

    <!-- Section 7: Step-by-Step Moving Process -->
    <section class="d2dum-section" style="background: var(--d2dum-gray-bg);">
        <div class="d2dum-section-header">
            <h2>Our 5-Stage Seamless Relocation Workflow</h2>
            <p>From initial booking in Deoghar to full room arrangement in Dumka, every step is executed with precision.</p>
        </div>
        <div class="d2dum-grid-3">
            <div class="d2dum-step-card">
                <span class="d2dum-step-num">Step 01</span>
                <h4>Pre-Move Survey &amp; Transparent Quote</h4>
                <p>Our relocation supervisor conducts an onsite or video survey in Deoghar, assessing inventory volume, packing needs, and issuing a binding written quote.</p>
            </div>
            <div class="d2dum-step-card">
                <span class="d2dum-step-num">Step 02</span>
                <h4>5-Layer Packing &amp; Labeling</h4>
                <p>Our experienced packaging crew arrives on moving day with virgin bubble wrap, cartons, and tools, carefully wrapping furniture and labeling each box by room.</p>
            </div>
            <div class="d2dum-step-card">
                <span class="d2dum-step-num">Step 03</span>
                <h4>Safe Hydraulic Loading</h4>
                <p>Heavy furniture and appliances are loaded first using padded dollies and balance ramps, tightly anchored within our container truck to prevent transit shifting.</p>
            </div>
            <div class="d2dum-step-card">
                <span class="d2dum-step-num">Step 04</span>
                <h4>Fast NH-114A Highway Transit</h4>
                <p>The container vehicle is padlocked and travels the 65 km Basukinath corridor, completing transit to Dumka in approximately 1.5 to 2 hours.</p>
            </div>
            <div class="d2dum-step-card">
                <span class="d2dum-step-num">Step 05</span>
                <h4>Unloading, Placement &amp; Setup</h4>
                <p>Upon reaching Dumka, our crew unloads every article, carries it to the assigned room, reassembles beds and tables, and disposes of all packaging debris.</p>
            </div>
            <div class="d2dum-step-card" style="background: linear-gradient(135deg, var(--d2dum-primary) 0%, var(--d2dum-secondary) 100%); color: #ffffff; border: none;">
                <span class="d2dum-step-num" style="background: #fbbf24; color: #000;">Guarantee</span>
                <h4 style="color: #ffffff;">Zero-Damage Assurance</h4>
                <p style="color: #fce7f3;">Comprehensive transit insurance and rigorous packaging ensure your prized possessions are delivered exactly as they were packed.</p>
            </div>
        </div>
    </section>

    <!-- Section: Unpacking & Furniture Assembly in Dumka -->
    <section class="d2dum-section">
        <div class="d2dum-grid-2">
            <div>
                <span class="d2dum-badge" style="color: var(--d2dum-primary); background: rgba(131,24,67,0.1); border-color: rgba(131,24,67,0.25);">White-Glove Setup</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--d2dum-dark); margin: 12px 0 18px;">Doorstep Unpacking, Furniture Assembly &amp; Debris Clearance</h2>
                <p>
                    Moving between Deoghar and Dumka should be an invigorating new beginning, not a day of exhausting labor unpacking boxes. Shree Ashirwad Packers and Movers provides full-service destination assistance across Dumka.
                </p>
                <p>
                    Our trained crew carries each numbered box directly to its designated room—master bedroom, children's study, living hall, or kitchen. We assemble double beds, re-mount television wall units, install water purifiers, arrange heavy sofas, and unpack delicate crockery. Once setup is complete, we sweep up and haul away all used corrugated trimmings, bubble film, and straps, leaving your new home ready for immediate living.
                </p>
                <div class="d2dum-feature-card">
                    <h4>&#129529; Clean Home Handover Assurance</h4>
                    <p>Zero clutter, zero lingering trash. We ensure your new residence in Dumka is pristine, functional, and organized from day one.</p>
                </div>
            </div>
            <div class="d2dum-img-container">
                <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and Setup Service in Dumka" width="600" height="400" loading="lazy">
                <div class="d2dum-img-caption">Professional doorstep unpacking, room placement, bed assembly, and packing waste clearance in Dumka.</div>
            </div>
        </div>
    </section>

    <!-- Section 8: Locality Matrix -->
    <section class="d2dum-section" style="background: var(--d2dum-gray-bg);">
        <div class="d2dum-section-header">
            <h2>Complete Locality Coverage: Deoghar &amp; Dumka</h2>
            <p>Direct doorstep pickup from every Deoghar sector and seamless delivery across Dumka's residential, academic, and administrative neighborhoods.</p>
        </div>
        <div class="d2dum-grid-2">
            <div class="d2dum-matrix-box">
                <h3>Deoghar Pickup Localities</h3>
                <div class="d2dum-matrix-grid">
                    <div class="d2dum-matrix-card">
                        <h4>Castairs Town &amp; Williams Town</h4>
                        <p>Central residential sectors with rapid access to VIP Chowk and temple roads.</p>
                    </div>
                    <div class="d2dum-matrix-card">
                        <h4>Bilasi Town &amp; Bompas Town</h4>
                        <p>Premier family colonies, spacious housing layouts, and quick arterial road connections.</p>
                    </div>
                    <div class="d2dum-matrix-card">
                        <h4>Jasidih Junction &amp; Industrial Area</h4>
                        <p>Railway quarters, industrial enterprises, and suburban residential settlements.</p>
                    </div>
                    <div class="d2dum-matrix-card">
                        <h4>AIIMS Deoghar Campus (Devipur)</h4>
                        <p>Faculty quarters, resident doctor apartments, and institutional housing blocks.</p>
                    </div>
                    <div class="d2dum-matrix-card">
                        <h4>Satsang Nagar &amp; Kunda</h4>
                        <p>Spiritual residential enclaves, bypass roads, and educational institutions.</p>
                    </div>
                    <div class="d2dum-matrix-card">
                        <h4>Rohini, Madhupur &amp; Mohanpur</h4>
                        <p>Direct coverage along the primary outbound Dumka highway corridor.</p>
                    </div>
                </div>
            </div>

            <div class="d2dum-matrix-box">
                <h3>Dumka Delivery Sectors</h3>
                <div class="d2dum-matrix-grid">
                    <div class="d2dum-matrix-card">
                        <h4>Rasikpur &amp; Dudhani</h4>
                        <p>Major commercial and upscale residential centers with modern family complexes.</p>
                    </div>
                    <div class="d2dum-matrix-card">
                        <h4>Tin Bazaar &amp; Gillanpara</h4>
                        <p>Historic trading hubs, central markets, and bustling residential neighborhoods.</p>
                    </div>
                    <div class="d2dum-matrix-card">
                        <h4>Bandhabpara &amp; SP College Road</h4>
                        <p>Peaceful academic colonies and residential homes with broad arterial roads.</p>
                    </div>
                    <div class="d2dum-matrix-card">
                        <h4>Sido Kanhu Murmu University (SKMU)</h4>
                        <p>Academic faculty quarters, research hostels, and university residential campus.</p>
                    </div>
                    <div class="d2dum-matrix-card">
                        <h4>Phulo Jhano Medical College (PJMCH)</h4>
                        <p>Doctors' residences, healthcare staff quarters, and hospital campus housing.</p>
                    </div>
                    <div class="d2dum-matrix-card">
                        <h4>Tata Showroom Chowk &amp; Airport Road</h4>
                        <p>Expanding modern townships, government colonies, and Kurwa bypass area.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 9: Verified Customer Reviews -->
    <section class="d2dum-section">
        <div class="d2dum-section-header">
            <h2>Verified Deoghar to Dumka Customer Reviews</h2>
            <p>Authentic accounts from medical doctors, university professors, and relocated families.</p>
        </div>
        <div class="d2dum-grid-2">
            <div class="d2dum-feature-card">
                <div style="color: #f59e0b; margin-bottom: 8px;">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</div>
                <p style="font-style: italic; margin-bottom: 15px;">"I was transferred from AIIMS Deoghar to Phulo Jhano Medical College (PJMCH) in Dumka. Shree Ashirwad Packers packed our 2 BHK apartment in Castairs Town by 9:00 AM, and everything was safely unloaded in our PJMCH doctors' quarters in Dumka by 2:30 PM! The entire move took under 6 hours door-to-door. Meticulous packing with zero scratches, and their GST invoice was approved effortlessly."</p>
                <p style="font-weight: 700; color: var(--d2dum-primary); margin: 0;">&ndash; Dr. S. K. Marandi, Assistant Professor (AIIMS Deoghar &rarr; PJMCH Dumka)</p>
            </div>
            <div class="d2dum-feature-card">
                <div style="color: #f59e0b; margin-bottom: 8px;">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</div>
                <p style="font-style: italic; margin-bottom: 15px;">"We moved our ancestral family home goods from Jasidih to Rasikpur, Dumka. We had heavy wooden cupboards, brass temple pooja items, and delicate glassware. The team used heavy bubble wrap and corrugated angle guards. Even my Honda Activa was packed with foam and arrived spotless. Highly recommend them for any move across Santhal Pargana!"</p>
                <p style="font-weight: 700; color: var(--d2dum-primary); margin: 0;">&ndash; Alok Kumar Jha, Businessman (Rasikpur, Dumka)</p>
            </div>
        </div>
    </section>

    <!-- Section 10: Frequently Asked Questions (FAQ) -->
    <section class="d2dum-section" style="background: var(--d2dum-gray-bg);">
        <div class="d2dum-section-header">
            <h2>Frequently Asked Questions</h2>
            <p>Practical answers regarding transit durations, pricing, pooja idol safety, and official reimbursement claims.</p>
        </div>
        <div style="max-width: 900px; margin: 0 auto;">
            <div class="d2dum-faq-item">
                <div class="d2dum-faq-q">What is the travel distance and moving time from Deoghar to Dumka?</div>
                <div class="d2dum-faq-a">The road distance between Deoghar and Dumka is approximately 65 to 70 km via Mohanpur, Basukinath Dham, and Jarmundi (NH-114A). Driving time for our container trucks is around 1.5 to 2 hours. We provide express same-day shifting: loading in Deoghar in the morning and completing unloading, unpacking, and setup in Dumka within 4 to 6 hours door-to-door.</div>
            </div>
            <div class="d2dum-faq-item">
                <div class="d2dum-faq-q">What are the shifting rates for Deoghar to Dumka household moves?</div>
                <div class="d2dum-faq-a">Due to the short 65 km corridor, our rates are extremely economical: 1 BHK flat shifting is ₹8,500 to ₹13,500; 2 BHK household moving is ₹12,500 to ₹18,500; 3 BHK bungalow relocation ranges from ₹17,500 to ₹26,000; two-wheeler bike transport is ₹1,800 to ₹3,200; and dedicated enclosed car carrier is ₹5,500 to ₹9,500.</div>
            </div>
            <div class="d2dum-faq-item">
                <div class="d2dum-faq-q">Do you provide claim-ready bills for AIIMS Deoghar doctors and SKMU Dumka professors?</div>
                <div class="d2dum-faq-a">Yes. We furnish 100% compliant computer-generated GST tax invoices (SAC 9965/9967), consignment bilty copies, itemized inventory packing lists, and transit insurance receipts accepted without objection by AIIMS Deoghar, Sido Kanhu Murmu University (SKMU), Phulo Jhano Medical College (PJMCH), Santhal Pargana Divisional Commissionerate, and nationalized banks.</div>
            </div>
            <div class="d2dum-faq-item">
                <div class="d2dum-faq-q">How are temple mementos, brass idols, and delicate crockery secured?</div>
                <div class="d2dum-faq-a">Being a spiritual artery connecting Baidyanath Dham and Basukinath Dham, we specialize in pooja mandir and brass idol packing. We use virgin multi-layer bubble wrap, custom foam blocks, heavy-gauge thermocol encasements, and double-walled cartons marked with fragile indicators.</div>
            </div>
            <div class="d2dum-faq-item">
                <div class="d2dum-faq-q">Can you shift my two-wheeler bike or car from Deoghar to Dumka on the same day?</div>
                <div class="d2dum-faq-a">Yes. We offer zero-scratch two-wheeler parceling with foam padding on indicators, handlebars, and fuel tanks, strapped securely inside our closed container truck. Dedicated enclosed car carrier transport is also executed within the same day.</div>
            </div>
            <div class="d2dum-faq-item">
                <div class="d2dum-faq-q">Which areas in Dumka do you cover for doorstep delivery?</div>
                <div class="d2dum-faq-a">We provide complete unloading and room setup across Rasikpur, Dudhani, Tin Bazaar, Gillanpara, Bandhabpara, SP College Road, Sido Kanhu Murmu University campus, Phulo Jhano Medical College (PJMCH) residential blocks, Tata Showroom Chowk, Airport Road, Kurwa, and Nonihat.</div>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <div class="d2dum-cta-banner">
        <h2>Book Your Deoghar to Dumka Express Move Today</h2>
        <p>Experience hassle-free, same-day Santhal Pargana relocation backed by verified transit insurance, sealed container trucks, and expert packing crews.</p>
        <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
            <a href="tel:8409531615" class="d2dum-btn-phone" style="font-size: 1.1rem; padding: 14px 30px;">&#128222; Call 084095 31615</a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20please%20send%20a%20quote%20for%20Deoghar%20to%20Dumka%20shifting." target="_blank" class="d2dum-btn-whatsapp" style="font-size: 1.1rem; padding: 14px 30px;">&#128172; WhatsApp Inquiry</a>
        </div>
    </div>

    <!-- Section 11: Cluster Navigation Links -->
    <section class="d2dum-section" style="padding-top: 10px;">
        <div class="d2dum-cluster-links">
            <h3>Explore Connected Deoghar &amp; Santhal Pargana Routes</h3>
            <div class="d2dum-tag-cloud">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-deoghar" class="d2dum-tag-link">Deoghar Hub Overview</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dumka" class="d2dum-tag-link">Dumka Hub Overview</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-dhanbad-packers-and-movers" class="d2dum-tag-link">Deoghar to Dhanbad Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-jamshedpur-packers-and-movers" class="d2dum-tag-link">Deoghar to Jamshedpur Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-hazaribagh-packers-and-movers" class="d2dum-tag-link">Deoghar to Hazaribagh Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-ranchi-packers-and-movers" class="d2dum-tag-link">Deoghar to Ranchi Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-deoghar-packers-and-movers" class="d2dum-tag-link">Ranchi to Deoghar Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-dumka-packers-and-movers" class="d2dum-tag-link">Ranchi to Dumka Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/dumka-to-ranchi-packers-and-movers" class="d2dum-tag-link">Dumka to Ranchi Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/pricing" class="d2dum-tag-link">Cost Calculator &amp; Rates</a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
