<?php
/**
 * Page Name: Deoghar to Giridih Packers and Movers
 * Route Slug: deoghar-to-giridih-packers-and-movers
 * Description: Dedicated inter-district moving route page connecting Deoghar (Baidyanath Dham) to Giridih (Land of Parasnath Hill & Mica Capital).
 * Focus Keywords: deoghar to giridih packers and movers, packers and movers deoghar to giridih, house shifting deoghar to giridih, deoghar to giridih luggage parcel, deoghar to giridih car carrier, deoghar to giridih bike parcel
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Deoghar to Giridih Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Top Deoghar to Giridih packers and movers by Shree Ashirwad. Same-day 4-6 hr transit, AIIMS & PSU bills, 5-layer packing, car carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/deoghar-to-giridih-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="deoghar to giridih packers and movers, packers and movers deoghar to giridih, house shifting deoghar to giridih, deoghar to giridih luggage parcel, deoghar to giridih car carrier, deoghar to giridih bike parcel">
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

    <!-- Scoped CSS for Route 5 (Deoghar to Giridih) -->
    <style>
        :root {
            --d2gir-primary: #1e3a8a;
            --d2gir-secondary: #2563eb;
            --d2gir-accent: #f59e0b;
            --d2gir-accent-light: #fef3c7;
            --d2gir-dark: #0f172a;
            --d2gir-gray-bg: #f8fafc;
            --d2gir-border: #e2e8f0;
        }

        .d2gir-wrapper {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #334155;
            line-height: 1.7;
        }

        .d2gir-hero {
            background: linear-gradient(135deg, rgba(30,58,138,0.95) 0%, rgba(37,99,235,0.92) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 20px 75px;
            text-align: center;
            position: relative;
        }
        .d2gir-hero-content {
            max-width: 980px;
            margin: 0 auto;
        }
        .d2gir-badge {
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
        .d2gir-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2rem, 4vw, 3.2rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 18px;
            letter-spacing: -0.02em;
        }
        .d2gir-hero h1 span {
            color: #fbbf24;
        }
        .d2gir-hero p {
            font-size: 1.15rem;
            max-width: 820px;
            margin: 0 auto 30px;
            color: #dbeafe;
            font-weight: 400;
        }
        .d2gir-hero-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 15px;
            margin-top: 35px;
        }
        .d2gir-stat-card {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.22);
            padding: 16px 12px;
            border-radius: 12px;
        }
        .d2gir-stat-val {
            font-family: 'Outfit', sans-serif;
            font-size: 1.8rem;
            font-weight: 800;
            color: #fbbf24;
        }
        .d2gir-stat-lbl {
            font-size: 0.82rem;
            color: #dbeafe;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* Action Bar */
        .d2gir-action-bar {
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
            border: 1px solid var(--d2gir-border);
        }
        .d2gir-action-info h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.25rem;
            margin: 0 0 5px;
            color: var(--d2gir-dark);
        }
        .d2gir-action-info p {
            margin: 0;
            color: #64748b;
            font-size: 0.95rem;
        }
        .d2gir-btn-group {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }
        .d2gir-btn-phone, .d2gir-btn-whatsapp {
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
        .d2gir-btn-phone {
            background: var(--d2gir-primary);
            color: #ffffff;
        }
        .d2gir-btn-phone:hover {
            background: var(--d2gir-secondary);
            color: #ffffff;
            transform: translateY(-2px);
        }
        .d2gir-btn-whatsapp {
            background: #25d366;
            color: #ffffff;
        }
        .d2gir-btn-whatsapp:hover {
            background: #1eb954;
            color: #ffffff;
            transform: translateY(-2px);
        }

        /* Content Sections */
        .d2gir-section {
            padding: 60px 20px;
            max-width: 1140px;
            margin: 0 auto;
        }
        .d2gir-section-header {
            text-align: center;
            max-width: 780px;
            margin: 0 auto 45px;
        }
        .d2gir-section-header h2 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(1.8rem, 3vw, 2.4rem);
            color: var(--d2gir-dark);
            margin-bottom: 12px;
            font-weight: 800;
        }
        .d2gir-section-header p {
            color: #64748b;
            font-size: 1.05rem;
            margin: 0;
        }

        /* Grid Layouts */
        .d2gir-grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            align-items: center;
        }
        .d2gir-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }
        .d2gir-grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
        }

        .d2gir-feature-card {
            background: #ffffff;
            border: 1px solid var(--d2gir-border);
            border-radius: 14px;
            padding: 26px;
            transition: all 0.3s ease;
        }
        .d2gir-feature-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(0,0,0,0.06);
            border-color: #cbd5e1;
        }
        .d2gir-feature-card h3, .d2gir-feature-card h4 {
            font-family: 'Outfit', sans-serif;
            color: var(--d2gir-dark);
            margin: 0 0 10px;
            font-size: 1.25rem;
        }
        .d2gir-feature-card p {
            color: #64748b;
            font-size: 0.95rem;
            margin: 0;
            line-height: 1.65;
        }

        /* Image Showcase */
        .d2gir-img-container {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            border: 1px solid var(--d2gir-border);
        }
        .d2gir-img-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }
        .d2gir-img-container:hover img {
            transform: scale(1.03);
        }
        .d2gir-img-caption {
            background: #ffffff;
            padding: 12px 16px;
            font-size: 0.88rem;
            color: #475569;
            font-weight: 500;
            border-top: 1px solid var(--d2gir-border);
        }

        /* Rate Table */
        .d2gir-table-container {
            background: #ffffff;
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid var(--d2gir-border);
            box-shadow: 0 4px 15px rgba(0,0,0,0.04);
            margin-bottom: 25px;
        }
        .d2gir-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        .d2gir-table th {
            background: var(--d2gir-primary);
            color: #ffffff;
            padding: 16px 20px;
            font-family: 'Outfit', sans-serif;
            font-weight: 600;
            font-size: 0.95rem;
            letter-spacing: 0.02em;
        }
        .d2gir-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--d2gir-border);
            font-size: 0.95rem;
            color: #334155;
        }
        .d2gir-table tr:last-child td {
            border-bottom: none;
        }
        .d2gir-table tr:nth-child(even) td {
            background: #f8fafc;
        }
        .d2gir-price-badge {
            font-weight: 800;
            color: var(--d2gir-primary);
            font-family: 'Outfit', sans-serif;
            font-size: 1.05rem;
        }

        /* Timeline / Steps */
        .d2gir-step-card {
            background: #ffffff;
            border-left: 4px solid var(--d2gir-primary);
            border-radius: 0 12px 12px 0;
            padding: 22px 24px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            border-top: 1px solid var(--d2gir-border);
            border-right: 1px solid var(--d2gir-border);
            border-bottom: 1px solid var(--d2gir-border);
            position: relative;
        }
        .d2gir-step-num {
            display: inline-block;
            background: var(--d2gir-accent);
            color: #ffffff;
            font-weight: 800;
            font-size: 0.82rem;
            padding: 2px 10px;
            border-radius: 4px;
            margin-bottom: 8px;
            font-family: 'Outfit', sans-serif;
        }
        .d2gir-step-card h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            margin: 0 0 6px;
            color: var(--d2gir-dark);
        }
        .d2gir-step-card p {
            margin: 0;
            font-size: 0.92rem;
            color: #64748b;
        }

        /* Locality Grid */
        .d2gir-matrix-box {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--d2gir-border);
            padding: 28px;
        }
        .d2gir-matrix-box h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.3rem;
            color: var(--d2gir-dark);
            margin: 0 0 16px;
            border-bottom: 2px solid var(--d2gir-accent);
            padding-bottom: 8px;
            display: inline-block;
        }
        .d2gir-matrix-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 12px;
        }
        .d2gir-matrix-card {
            background: var(--d2gir-gray-bg);
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 12px 14px;
        }
        .d2gir-matrix-card h4 {
            font-size: 0.95rem;
            font-weight: 700;
            margin: 0 0 3px;
            color: var(--d2gir-dark);
        }
        .d2gir-matrix-card p {
            font-size: 0.82rem;
            color: #64748b;
            margin: 0;
            line-height: 1.4;
        }

        /* FAQ Accordion */
        .d2gir-faq-item {
            background: #ffffff;
            border: 1px solid var(--d2gir-border);
            border-radius: 12px;
            margin-bottom: 14px;
            padding: 20px 24px;
        }
        .d2gir-faq-q {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            color: var(--d2gir-dark);
            font-size: 1.1rem;
            margin-bottom: 8px;
        }
        .d2gir-faq-a {
            color: #64748b;
            font-size: 0.95rem;
            line-height: 1.65;
        }

        /* CTA Banner */
        .d2gir-cta-banner {
            background: linear-gradient(135deg, var(--d2gir-primary) 0%, var(--d2gir-secondary) 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 45px 30px;
            text-align: center;
            margin: 40px auto;
            max-width: 1140px;
        }
        .d2gir-cta-banner h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            margin: 0 0 12px;
        }
        .d2gir-cta-banner p {
            max-width: 700px;
            margin: 0 auto 25px;
            color: #dbeafe;
            font-size: 1.05rem;
        }

        /* Cluster Links */
        .d2gir-cluster-links {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--d2gir-border);
            padding: 28px;
        }
        .d2gir-cluster-links h3 {
            font-family: 'Outfit', sans-serif;
            margin: 0 0 18px;
            font-size: 1.25rem;
            color: var(--d2gir-dark);
        }
        .d2gir-tag-cloud {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .d2gir-tag-link {
            display: inline-block;
            background: var(--d2gir-gray-bg);
            border: 1px solid var(--d2gir-border);
            color: #334155;
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 0.88rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s ease;
        }
        .d2gir-tag-link:hover {
            background: var(--d2gir-primary);
            color: #ffffff;
            border-color: var(--d2gir-primary);
        }

        @media (max-width: 768px) {
            .d2gir-action-bar {
                flex-direction: column;
                text-align: center;
                padding: 20px;
            }
            .d2gir-btn-group {
                justify-content: center;
                width: 100%;
            }
            .d2gir-btn-phone, .d2gir-btn-whatsapp {
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
        "url": "https://www.shreeashirwadpackers.com/deoghar-to-giridih-packers-and-movers",
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
                "name": "Giridih"
            }
        ],
        "description": "Professional inter-district home shifting, vehicle carrier, and office relocation connecting Deoghar (Castairs Town, Bilasi Town, Jasidih, Devipur AIIMS, Satsang Nagar, Madhupur) to Giridih (Makatpur, Barganda, Sirsia, Pachamba, Bhandaridih, Parasnath Madhuban) across the 65 km corridor via Madhupur and Bengabad. Providing guaranteed ultra-fast same-day 4 to 6 hour door-to-door delivery, 5-layer protective packing, weatherproof container trucks, AIIMS & government compliant billing, and full transit insurance."
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
                "name": "Deoghar to Giridih",
                "item": "https://www.shreeashirwadpackers.com/deoghar-to-giridih-packers-and-movers"
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
                "name": "What is the driving distance and moving time from Deoghar to Giridih?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Deoghar and Giridih is approximately 65 to 70 km via Rohini, Madhupur, and Bengabad. Driving time for our container trucks is about 1.5 to 2 hours. We provide guaranteed same-day 4 to 6 hour door-to-door relocation: loading your Deoghar home in the morning and completing unloading, unpacking, and setup in Giridih before the afternoon."
                }
            },
            {
                "@type": "Question",
                "name": "What are the shifting charges for household moving from Deoghar to Giridih?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "For the direct 65 km Deoghar to Giridih move, rates are very competitive: 1 BHK apartment shifting costs ₹8,500 to ₹13,500; 2 BHK household moving ranges from ₹12,500 to ₹18,500; 3 BHK family house/bungalow relocation is ₹17,500 to ₹26,000; two-wheeler bike parceling is ₹1,800 to ₹3,200; and dedicated enclosed car carrier is ₹5,500 to ₹9,500."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide claim-ready bills for government, bank, and medical staff in Giridih?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We furnish 100% compliant computer-generated GST tax invoices (SAC 9965/9967), consignment bilty notes, itemized packing inventory lists, money receipts, and transit insurance policies accepted across AIIMS Deoghar, Giridih District Collectorate, CCL, nationalized banks, and private industrial enterprises."
                }
            },
            {
                "@type": "Question",
                "name": "How do you protect delicate marble pooja mandirs and fragile glass?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We deploy a specialized 5-layer packaging protocol: high-density bubble wrap, shock-absorbent EPE foam sheets, corner angle guards, custom wooden crating for heavy marble, and heavy-duty shrink wrap that secures the shipment against vibration."
                }
            },
            {
                "@type": "Question",
                "name": "Can you transport my motorcycle or scooter from Deoghar to Giridih on the same day?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer zero-scratch bike parceling with foam padding on handlebars, mirrors, and fuel tanks, strapped securely inside our closed container truck for same-day delivery in Giridih within 4 to 5 hours."
                }
            },
            {
                "@type": "Question",
                "name": "Which residential colonies in Giridih do you serve for doorstep delivery?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We deliver directly across Makatpur, Barganda, Sirsia, Pachamba, Bhandaridih, New Barganda, Shastri Nagar, Buxidih, Mohanpur, Hazaribagh Road, and Parasnath Madhuban foothills."
                }
            }
        ]
    }
    </script>
</head>

<body class="d2gir-wrapper">

<?php include __DIR__ . '/../includes/header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="d2gir-hero">
        <div class="d2gir-hero-content">
            <span class="d2gir-badge">&#128666; Santhal Pargana to Mica Capital Express: Deoghar &rarr; Giridih</span>
            <h1>Deoghar to Giridih <span>Packers and Movers</span></h1>
            <p>
                Fast, dependable, and completely scratch-free inter-district relocation connecting the holy city of Baidyanath Dham (Deoghar) to the foot of Parasnath Hill and the Mica Capital (Giridih). Dedicated closed container trucks, same-day 4-6 hr express delivery, 5-layer protective packing, and 100% AIIMS &amp; government approved reimbursement documentation.
            </p>

            <div class="d2gir-hero-stats">
                <div class="d2gir-stat-card">
                    <div class="d2gir-stat-val">65 km</div>
                    <div class="d2gir-stat-lbl">Highway Distance</div>
                </div>
                <div class="d2gir-stat-card">
                    <div class="d2gir-stat-val">4-6 Hrs</div>
                    <div class="d2gir-stat-lbl">Express Door-to-Door Delivery</div>
                </div>
                <div class="d2gir-stat-card">
                    <div class="d2gir-stat-val">100%</div>
                    <div class="d2gir-stat-lbl">AIIMS, PSU &amp; Bank Approval</div>
                </div>
                <div class="d2gir-stat-card">
                    <div class="d2gir-stat-val">Zero Loss</div>
                    <div class="d2gir-stat-lbl">Transit Insurance Guarantee</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Action Bar -->
    <div class="d2gir-action-bar">
        <div class="d2gir-action-info">
            <h3>Planning Relocation between Deoghar and Giridih?</h3>
            <p>Get instant transparent estimates, free pre-move home inspection, and same-day container scheduling.</p>
        </div>
        <div class="d2gir-btn-group">
            <a href="tel:8409531615" class="d2gir-btn-phone">&#128222; Call 084095 31615</a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20please%20send%20a%20quote%20for%20Deoghar%20to%20Giridih%20shifting." target="_blank" class="d2gir-btn-whatsapp">&#128172; WhatsApp Instant</a>
        </div>
    </div>

    <!-- Section 1: Route Corridor & Highway Logistics -->
    <section class="d2gir-section">
        <div class="d2gir-grid-2">
            <div>
                <span class="d2gir-badge" style="color: var(--d2gir-primary); background: rgba(30,58,138,0.1); border-color: rgba(30,58,138,0.25);">Corridor Logistics</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--d2gir-dark); margin: 12px 0 18px;">Swift 65 km Direct Highway Artery: Deoghar &ndash; Madhupur &ndash; Giridih</h2>
                <p>
                    Connecting Deoghar to Giridih is one of the most frequently traversed inter-district trade and pilgrim routes in eastern Jharkhand. Spanning just 65 to 70 kilometers, the route proceeds from Deoghar via Rohini and Madhupur, branching through Bengabad directly into the heart of Giridih city.
                </p>
                <p>
                    With well-surfaced state highways and minimal transit bottlenecks, our dedicated container vehicles complete the drive in just 1.5 to 2 hours. Because Shree Ashirwad Packers and Movers maintains active logistics teams in both Deoghar and Giridih, we provide guaranteed same-day turnaround: morning packing in Deoghar followed by complete unloading, furniture positioning, and room setup in Giridih within 4 to 6 hours door-to-door.
                </p>
                <div style="background: var(--d2gir-gray-bg); padding: 18px; border-radius: 10px; border-left: 4px solid var(--d2gir-accent); margin-top: 15px;">
                    <p style="margin: 0; font-weight: 600; font-size: 0.95rem; color: var(--d2gir-dark);">
                        &#9989; <strong>Direct Single-Truck Transit:</strong> Zero intermediate transfers, zero transshipment handling, and zero vehicle changes ensure 100% item safety for precious heirlooms, marble mandirs, and electronic appliances.
                    </p>
                </div>
            </div>
            <div class="d2gir-img-container">
                <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Sealed Container Truck for Deoghar to Giridih Shifting" width="600" height="400" loading="lazy">
                <div class="d2gir-img-caption">Dedicated all-weather closed container trucks providing rapid, dust-free transit across the Deoghar-Madhupur-Giridih route.</div>
            </div>
        </div>
    </section>

    <!-- Section 2: Why Choose Shree Ashirwad -->
    <section class="d2gir-section" style="background: var(--d2gir-gray-bg);">
        <div class="d2gir-section-header">
            <h2>Why Choose Shree Ashirwad for Deoghar to Giridih Moving?</h2>
            <p>Engineered for rapid turnaround, robust packaging defense, and complete customer satisfaction.</p>
        </div>
        <div class="d2gir-grid-3">
            <div class="d2gir-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#9201;</div>
                <h3>Express 4-6 Hr Same-Day Shifting</h3>
                <p>Our direct container vehicles ensure that your complete household is packed, transported, and arranged in Giridih on the very same day.</p>
            </div>
            <div class="d2gir-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#128196;</div>
                <h3>100% Claim-Ready GST Invoices</h3>
                <p>Official tax invoices, consignment bilty, and itemized manifests compliant with AIIMS, government departments, and PSU reimbursement criteria.</p>
            </div>
            <div class="d2gir-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#128737;</div>
                <h3>5-Layer Defensive Packaging</h3>
                <p>Air bubble film, shock-absorbing EPE foam, heavy-duty angle edge guards, 7-ply cartons, and waterproof stretch wrap protect all furnishings.</p>
            </div>
            <div class="d2gir-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#128666;</div>
                <h3>Weatherproof Sealed Containers</h3>
                <p>Closed metal containers shield your goods from road gravel, mica dust, and unexpected weather conditions throughout the 65 km highway journey.</p>
            </div>
            <div class="d2gir-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#128663;</div>
                <h3>Enclosed Car Carrier &amp; Bike Parcel</h3>
                <p>Specialized hydraulic car trailers and bubble-wrapped motorcycle parceling guarantee zero-scratch vehicle delivery to Giridih.</p>
            </div>
            <div class="d2gir-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#128104;&#8205;&#128295;</div>
                <h3>Skilled Furniture &amp; Appliance Setup</h3>
                <p>Experienced carpenters and technicians dismantle and reassemble modular beds, wardrobes, dining sets, LED units, and water purifiers.</p>
            </div>
        </div>
    </section>

    <!-- Section 3: Transparent Pricing Table -->
    <section class="d2gir-section">
        <div class="d2gir-section-header">
            <h2>Transparent Tariff Schedule: Deoghar to Giridih</h2>
            <p>Economical, crystal-clear pricing tailored for the short 65 km inter-district move with zero hidden charges.</p>
        </div>
        <div class="d2gir-table-container">
            <table class="d2gir-table">
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
                        <td>65 &ndash; 70 km</td>
                        <td>Same Day (4 &ndash; 6 hrs)</td>
                        <td><span class="d2gir-price-badge">&#8377;8,500 &ndash; &#8377;13,500</span></td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Complete Household</strong><br><small>2 bedrooms, hall, kitchen, dining set, 2 ACs, fridge, washing machine</small></td>
                        <td>65 &ndash; 70 km</td>
                        <td>Same Day (5 &ndash; 7 hrs)</td>
                        <td><span class="d2gir-price-badge">&#8377;12,500 &ndash; &#8377;18,500</span></td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Family Home / Villa</strong><br><small>3 bedrooms, drawing room, modular kitchen, pooja mandir, heavy furniture</small></td>
                        <td>65 &ndash; 70 km</td>
                        <td>Same Day (6 &ndash; 8 hrs)</td>
                        <td><span class="d2gir-price-badge">&#8377;17,500 &ndash; &#8377;26,000</span></td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Large Residence Relocation</strong><br><small>Complete executive bungalow furnishings, antique wooden almirahs, gym setup</small></td>
                        <td>65 &ndash; 70 km</td>
                        <td>Same Day (7 &ndash; 9 hrs)</td>
                        <td><span class="d2gir-price-badge">&#8377;24,000 &ndash; &#8377;36,000</span></td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler / Bike Parcel Service</strong><br><small>Motorcycles, scooters with full bubble wrapping and tyre immobilizers</small></td>
                        <td>65 &ndash; 70 km</td>
                        <td>Same Day (3 &ndash; 5 hrs)</td>
                        <td><span class="d2gir-price-badge">&#8377;1,800 &ndash; &#8377;3,200</span></td>
                    </tr>
                    <tr>
                        <td><strong>Dedicated Enclosed Car Carrier</strong><br><small>Sedans, hatchbacks, SUVs inside enclosed carrier trailer</small></td>
                        <td>65 &ndash; 70 km</td>
                        <td>Same Day Delivery</td>
                        <td><span class="d2gir-price-badge">&#8377;5,500 &ndash; &#8377;9,500</span></td>
                    </tr>
                    <tr>
                        <td><strong>Complete Unpacking &amp; Room Setup Add-on</strong><br><small>Unpacking, room-by-room positioning, bed assembly, and trash removal</small></td>
                        <td>Onsite Service</td>
                        <td>2 &ndash; 3 Hours</td>
                        <td><span class="d2gir-price-badge">&#8377;2,000 &ndash; &#8377;3,800</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="text-align: center; color: #64748b; font-size: 0.9rem; margin-top: 10px;">
            * Quotes reflect standard ground-to-ground shifting; upper floors without elevators or specialized crane lifting may have nominal adjustments.
        </p>
    </section>

    <!-- Section 4: Commercial, Pilgrimage & Institutional Guidance -->
    <section class="d2gir-section" style="background: #ffffff;">
        <div class="d2gir-grid-2">
            <div class="d2gir-img-container">
                <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Packaging for fragile household and marble items" width="600" height="400" loading="lazy">
                <div class="d2gir-img-caption">Specialized packaging for marble temple mandirs, brass idols, and delicate chinaware.</div>
            </div>
            <div>
                <span class="d2gir-badge" style="color: var(--d2gir-primary); background: rgba(30,58,138,0.1); border-color: rgba(30,58,138,0.25);">Institutional Guidance</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--d2gir-dark); margin: 12px 0 18px;">Support for Commercial Traders, Pilgrims &amp; Government Transfers</h2>
                <p>
                    Giridih is globally recognized for its proximity to <strong>Shri Sammed Shikharji (Parasnath Hill)</strong>, the foremost Jain pilgrimage sanctuary, as well as being a historic center for mica processing and sponge iron production. Consequently, relocation between Deoghar and Giridih includes commercial merchants, industrial engineers, temple trust administrators, and judicial officials transferring from the Deoghar courts to Giridih.
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
    <section class="d2gir-section" style="background: var(--d2gir-gray-bg);">
        <div class="d2gir-section-header">
            <h2>Our Signature 5-Layer Defensive Packaging Shield</h2>
            <p>Every piece of furniture, high-end electronics, and sentimental heirloom receives industrial-grade protection.</p>
        </div>
        <div class="d2gir-grid-4">
            <div class="d2gir-feature-card" style="text-align: center;">
                <div style="font-size: 2.2rem; color: var(--d2gir-accent); margin-bottom: 10px;">Layer 1</div>
                <h4>Virgin Bubble Wrap</h4>
                <p>High-tensile air pockets absorb surface shocks, protecting polished wooden finishes, glass mirrors, and appliance paintwork.</p>
            </div>
            <div class="d2gir-feature-card" style="text-align: center;">
                <div style="font-size: 2.2rem; color: var(--d2gir-accent); margin-bottom: 10px;">Layer 2</div>
                <h4>High-Density EPE Foam</h4>
                <p>Thermal and shock-insulating expandable polyethylene foam cushioning delicate electronics, television panels, and fragile ceramics.</p>
            </div>
            <div class="d2gir-feature-card" style="text-align: center;">
                <div style="font-size: 2.2rem; color: var(--d2gir-accent); margin-bottom: 10px;">Layer 3</div>
                <h4>Corrugated Angle Guards</h4>
                <p>Rigid L-shaped corner protectors shield vulnerable edges of dining tables, wardrobes, refrigerator doors, and bed frames.</p>
            </div>
            <div class="d2gir-feature-card" style="text-align: center;">
                <div style="font-size: 2.2rem; color: var(--d2gir-accent); margin-bottom: 10px;">Layer 4 &amp; 5</div>
                <h4>7-Ply Boxes &amp; Stretch Film</h4>
                <p>Heavy-duty kraft cardboard cartons reinforced with 50-micron industrial stretch wrap sealing out moisture, dust, and humidity.</p>
            </div>
        </div>
    </section>

    <!-- Section 6: Vehicle Relocation (Car Carrier & Bike Parcel) -->
    <section class="d2gir-section">
        <div class="d2gir-grid-2">
            <div>
                <span class="d2gir-badge" style="color: var(--d2gir-primary); background: rgba(30,58,138,0.1); border-color: rgba(30,58,138,0.25);">Automotive Logistics</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--d2gir-dark); margin: 12px 0 18px;">Safe Car Carrier &amp; Bike Parcel: Deoghar to Giridih</h2>
                <p>
                    Relocate your personal car or motorcycle alongside your household goods without putting extra mileage on state roads. Shree Ashirwad Packers and Movers provides dedicated vehicular logistics ensuring zero-scratch transit to Giridih.
                </p>
                <div class="d2gir-feature-card" style="margin-bottom: 16px;">
                    <h4>&#128663; Dedicated Enclosed Car Carriers</h4>
                    <p>Hydraulic ramps ensure smooth, safe ground clearance for sedans and SUVs. Vehicles are secured with heavy-duty wheel chocks and safety straps inside closed carriers, protected from gravel and dust.</p>
                </div>
                <div class="d2gir-feature-card">
                    <h4>&#127949; Zero-Scratch Two-Wheeler Parcel Service</h4>
                    <p>Motorcycles, scooters, and commuter bikes are carefully wrapped with bubble wrap around fuel tanks, indicators, and headlights, with tyres locked inside the container truck for same-day delivery.</p>
                </div>
            </div>
            <div class="d2gir-img-container">
                <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Enclosed Hydraulic Car Carrier Deoghar to Giridih" width="600" height="400" loading="lazy">
                <div class="d2gir-img-caption">Hydraulic car loading ramp ensuring safe ground clearance and zero chassis scrapings for personal vehicles.</div>
            </div>
        </div>
    </section>

    <!-- Section 7: Step-by-Step Moving Process -->
    <section class="d2gir-section" style="background: var(--d2gir-gray-bg);">
        <div class="d2gir-section-header">
            <h2>Our 5-Stage Seamless Relocation Workflow</h2>
            <p>From initial booking in Deoghar to full room arrangement in Giridih, every step is executed with precision.</p>
        </div>
        <div class="d2gir-grid-3">
            <div class="d2gir-step-card">
                <span class="d2gir-step-num">Step 01</span>
                <h4>Pre-Move Survey &amp; Transparent Quote</h4>
                <p>Our relocation supervisor conducts an onsite or video survey in Deoghar, assessing inventory volume, packing needs, and issuing a binding written quote.</p>
            </div>
            <div class="d2gir-step-card">
                <span class="d2gir-step-num">Step 02</span>
                <h4>5-Layer Packing &amp; Labeling</h4>
                <p>Our experienced packaging crew arrives on moving day with virgin bubble wrap, cartons, and tools, carefully wrapping furniture and labeling each box by room.</p>
            </div>
            <div class="d2gir-step-card">
                <span class="d2gir-step-num">Step 03</span>
                <h4>Safe Hydraulic Loading</h4>
                <p>Heavy furniture and appliances are loaded first using padded dollies and balance ramps, tightly anchored within our container truck to prevent transit shifting.</p>
            </div>
            <div class="d2gir-step-card">
                <span class="d2gir-step-num">Step 04</span>
                <h4>Fast Madhupur-Giridih Highway Transit</h4>
                <p>The container vehicle is padlocked and travels the 65 km corridor, completing transit to Giridih in approximately 1.5 to 2 hours.</p>
            </div>
            <div class="d2gir-step-card">
                <span class="d2gir-step-num">Step 05</span>
                <h4>Unloading, Placement &amp; Setup</h4>
                <p>Upon reaching Giridih, our crew unloads every article, carries it to the assigned room, reassembles beds and tables, and disposes of all packaging debris.</p>
            </div>
            <div class="d2gir-step-card" style="background: linear-gradient(135deg, var(--d2gir-primary) 0%, var(--d2gir-secondary) 100%); color: #ffffff; border: none;">
                <span class="d2gir-step-num" style="background: #fbbf24; color: #000;">Guarantee</span>
                <h4 style="color: #ffffff;">Zero-Damage Assurance</h4>
                <p style="color: #dbeafe;">Comprehensive transit insurance and rigorous packaging ensure your prized possessions are delivered exactly as they were packed.</p>
            </div>
        </div>
    </section>

    <!-- Section: Unpacking & Furniture Assembly in Giridih -->
    <section class="d2gir-section">
        <div class="d2gir-grid-2">
            <div>
                <span class="d2gir-badge" style="color: var(--d2gir-primary); background: rgba(30,58,138,0.1); border-color: rgba(30,58,138,0.25);">White-Glove Setup</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--d2gir-dark); margin: 12px 0 18px;">Doorstep Unpacking, Furniture Assembly &amp; Debris Clearance</h2>
                <p>
                    Moving between Deoghar and Giridih should be an exhilarating fresh start, not an exhausting day of endless manual labor. Shree Ashirwad Packers and Movers provides full-service destination assistance across Giridih.
                </p>
                <p>
                    Our trained crew carries each numbered box directly to its designated room—master bedroom, children's study, living hall, or kitchen. We assemble double beds, re-mount television wall units, install water purifiers, arrange heavy sofas, and unpack delicate crockery. Once setup is complete, we sweep up and haul away all used corrugated trimmings, bubble film, and straps, leaving your new home ready for immediate living.
                </p>
                <div class="d2gir-feature-card">
                    <h4>&#129529; Clean Home Handover Assurance</h4>
                    <p>Zero clutter, zero lingering trash. We ensure your new residence in Giridih is pristine, functional, and organized from day one.</p>
                </div>
            </div>
            <div class="d2gir-img-container">
                <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and Setup Service in Giridih" width="600" height="400" loading="lazy">
                <div class="d2gir-img-caption">Professional doorstep unpacking, room placement, bed assembly, and packing waste clearance in Giridih.</div>
            </div>
        </div>
    </section>

    <!-- Section 8: Locality Matrix -->
    <section class="d2gir-section" style="background: var(--d2gir-gray-bg);">
        <div class="d2gir-section-header">
            <h2>Complete Locality Coverage: Deoghar &amp; Giridih</h2>
            <p>Direct doorstep pickup from every Deoghar sector and seamless delivery across Giridih's residential, commercial, and industrial neighborhoods.</p>
        </div>
        <div class="d2gir-grid-2">
            <div class="d2gir-matrix-box">
                <h3>Deoghar Pickup Localities</h3>
                <div class="d2gir-matrix-grid">
                    <div class="d2gir-matrix-card">
                        <h4>Castairs Town &amp; Williams Town</h4>
                        <p>Central residential sectors with rapid access to VIP Chowk and temple roads.</p>
                    </div>
                    <div class="d2gir-matrix-card">
                        <h4>Bilasi Town &amp; Bompas Town</h4>
                        <p>Premier family colonies, spacious housing layouts, and quick arterial road connections.</p>
                    </div>
                    <div class="d2gir-matrix-card">
                        <h4>Jasidih Junction &amp; Industrial Area</h4>
                        <p>Railway quarters, industrial enterprises, and suburban residential settlements.</p>
                    </div>
                    <div class="d2gir-matrix-card">
                        <h4>AIIMS Deoghar Campus (Devipur)</h4>
                        <p>Faculty quarters, resident doctor apartments, and institutional housing blocks.</p>
                    </div>
                    <div class="d2gir-matrix-card">
                        <h4>Satsang Nagar &amp; Kunda</h4>
                        <p>Spiritual residential enclaves, bypass roads, and educational institutions.</p>
                    </div>
                    <div class="d2gir-matrix-card">
                        <h4>Rohini, Madhupur &amp; Sarath</h4>
                        <p>Direct coverage along the primary outbound Giridih highway corridor.</p>
                    </div>
                </div>
            </div>

            <div class="d2gir-matrix-box">
                <h3>Giridih Delivery Sectors</h3>
                <div class="d2gir-matrix-grid">
                    <div class="d2gir-matrix-card">
                        <h4>Makatpur &amp; Bada Chowk</h4>
                        <p>Core commercial centers, shopping areas, and bustling family residential localities.</p>
                    </div>
                    <div class="d2gir-matrix-card">
                        <h4>Barganda &amp; New Barganda</h4>
                        <p>Upscale residential colonies, academic institutions, and quiet family homes.</p>
                    </div>
                    <div class="d2gir-matrix-card">
                        <h4>Sirsia &amp; Shastri Nagar</h4>
                        <p>Rapidly developing modern neighborhoods with spacious apartments and houses.</p>
                    </div>
                    <div class="d2gir-matrix-card">
                        <h4>Pachamba &amp; Bhandaridih</h4>
                        <p>Historic trading areas, industrial workshops, and established family quarters.</p>
                    </div>
                    <div class="d2gir-matrix-card">
                        <h4>Hazaribagh Road &amp; Buxidih</h4>
                        <p>Major arterial avenues with convenient logistics access and suburban developments.</p>
                    </div>
                    <div class="d2gir-matrix-card">
                        <h4>Parasnath Foothills (Madhuban)</h4>
                        <p>Jain pilgrimage dharamshalas, trust headquarters, and hospitality establishments.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 9: Verified Customer Reviews -->
    <section class="d2gir-section">
        <div class="d2gir-section-header">
            <h2>Verified Deoghar to Giridih Customer Reviews</h2>
            <p>Authentic feedback from relocated families, commercial merchants, and institutional staff.</p>
        </div>
        <div class="d2gir-grid-2">
            <div class="d2gir-feature-card">
                <div style="color: #f59e0b; margin-bottom: 8px;">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</div>
                <p style="font-style: italic; margin-bottom: 15px;">"We shifted our family from Castairs Town Deoghar to Barganda in Giridih. Moving our heavy wooden dining table, Godrej wardrobes, and marble pooja mandir was our biggest concern. Shree Ashirwad Packers arrived at 8:00 AM with clean bubble wrap and corner guards. The entire shipment was delivered to our new home in Giridih by 1:30 PM! The staff was courteous, quick, and very careful. Zero damage!"</p>
                <p style="font-weight: 700; color: var(--d2gir-primary); margin: 0;">&ndash; Vikas Jain, Merchant (Castairs Town Deoghar &rarr; Barganda Giridih)</p>
            </div>
            <div class="d2gir-feature-card">
                <div style="color: #f59e0b; margin-bottom: 8px;">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</div>
                <p style="font-style: italic; margin-bottom: 15px;">"I had to transfer from Jasidih railway area to Giridih court office. Shree Ashirwad provided prompt service, proper GST bills, and bilty for my departmental claims. Their closed truck protected our electronics from the dusty road. My Bajaj Pulsar bike was also parcelled safely without any scratches. Highly recommended for Deoghar to Giridih shifting."</p>
                <p style="font-weight: 700; color: var(--d2gir-primary); margin: 0;">&ndash; Rajesh Ranjan, Administrative Officer (Giridih)</p>
            </div>
        </div>
    </section>

    <!-- Section 10: Frequently Asked Questions (FAQ) -->
    <section class="d2gir-section" style="background: var(--d2gir-gray-bg);">
        <div class="d2gir-section-header">
            <h2>Frequently Asked Questions</h2>
            <p>Practical answers regarding transit durations, pricing, pooja idol safety, and official reimbursement claims.</p>
        </div>
        <div style="max-width: 900px; margin: 0 auto;">
            <div class="d2gir-faq-item">
                <div class="d2gir-faq-q">What is the driving distance and moving time from Deoghar to Giridih?</div>
                <div class="d2gir-faq-a">The highway distance between Deoghar and Giridih is approximately 65 to 70 km via Rohini, Madhupur, and Bengabad. Driving time for our container trucks is about 1.5 to 2 hours. We provide guaranteed same-day 4 to 6 hour door-to-door relocation: loading your Deoghar home in the morning and completing unloading, unpacking, and setup in Giridih before the afternoon.</div>
            </div>
            <div class="d2gir-faq-item">
                <div class="d2gir-faq-q">What are the shifting charges for household moving from Deoghar to Giridih?</div>
                <div class="d2gir-faq-a">For the direct 65 km Deoghar to Giridih move, rates are very competitive: 1 BHK apartment shifting costs ₹8,500 to ₹13,500; 2 BHK household moving ranges from ₹12,500 to ₹18,500; 3 BHK family house/bungalow relocation is ₹17,500 to ₹26,000; two-wheeler bike parceling is ₹1,800 to ₹3,200; and dedicated enclosed car carrier is ₹5,500 to ₹9,500.</div>
            </div>
            <div class="d2gir-faq-item">
                <div class="d2gir-faq-q">Do you provide claim-ready bills for government, bank, and medical staff in Giridih?</div>
                <div class="d2gir-faq-a">Yes. We furnish 100% compliant computer-generated GST tax invoices (SAC 9965/9967), consignment bilty notes, itemized packing inventory lists, money receipts, and transit insurance policies accepted across AIIMS Deoghar, Giridih District Collectorate, CCL, nationalized banks, and private industrial enterprises.</div>
            </div>
            <div class="d2gir-faq-item">
                <div class="d2gir-faq-q">How do you protect delicate marble pooja mandirs and fragile glass?</div>
                <div class="d2gir-faq-a">We deploy a specialized 5-layer packaging protocol: high-density bubble wrap, shock-absorbent EPE foam sheets, corner angle guards, custom wooden crating for heavy marble, and heavy-duty shrink wrap that secures the shipment against vibration.</div>
            </div>
            <div class="d2gir-faq-item">
                <div class="d2gir-faq-q">Can you transport my motorcycle or scooter from Deoghar to Giridih on the same day?</div>
                <div class="d2gir-faq-a">Yes. We offer zero-scratch bike parceling with foam padding on handlebars, mirrors, and fuel tanks, strapped securely inside our closed container truck for same-day delivery in Giridih within 4 to 5 hours.</div>
            </div>
            <div class="d2gir-faq-item">
                <div class="d2gir-faq-q">Which residential colonies in Giridih do you serve for doorstep delivery?</div>
                <div class="d2gir-faq-a">We deliver directly across Makatpur, Barganda, Sirsia, Pachamba, Bhandaridih, New Barganda, Shastri Nagar, Buxidih, Mohanpur, Hazaribagh Road, and Parasnath Madhuban foothills.</div>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <div class="d2gir-cta-banner">
        <h2>Book Your Deoghar to Giridih Move Today</h2>
        <p>Experience fast, dependable same-day inter-district moving with full transit insurance, locked container vehicles, and professional packers.</p>
        <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
            <a href="tel:8409531615" class="d2gir-btn-phone" style="font-size: 1.1rem; padding: 14px 30px;">&#128222; Call 084095 31615</a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20please%20send%20a%20quote%20for%20Deoghar%20to%20Giridih%20shifting." target="_blank" class="d2gir-btn-whatsapp" style="font-size: 1.1rem; padding: 14px 30px;">&#128172; WhatsApp Inquiry</a>
        </div>
    </div>

    <!-- Section 11: Cluster Navigation Links -->
    <section class="d2gir-section" style="padding-top: 10px;">
        <div class="d2gir-cluster-links">
            <h3>Explore Connected Deoghar &amp; Jharkhand Routes</h3>
            <div class="d2gir-tag-cloud">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-deoghar" class="d2gir-tag-link">Deoghar Hub Overview</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-giridih" class="d2gir-tag-link">Giridih Hub Overview</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-dhanbad-packers-and-movers" class="d2gir-tag-link">Deoghar to Dhanbad Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-jamshedpur-packers-and-movers" class="d2gir-tag-link">Deoghar to Jamshedpur Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-hazaribagh-packers-and-movers" class="d2gir-tag-link">Deoghar to Hazaribagh Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-dumka-packers-and-movers" class="d2gir-tag-link">Deoghar to Dumka Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-ranchi-packers-and-movers" class="d2gir-tag-link">Deoghar to Ranchi Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-deoghar-packers-and-movers" class="d2gir-tag-link">Ranchi to Deoghar Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-giridih-packers-and-movers" class="d2gir-tag-link">Ranchi to Giridih Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/pricing" class="d2gir-tag-link">Cost Calculator &amp; Rates</a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
