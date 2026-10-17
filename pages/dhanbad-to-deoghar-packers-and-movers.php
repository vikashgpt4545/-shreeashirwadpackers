<?php
/**
 * Page Name: Dhanbad to Deoghar Packers and Movers
 * Route Slug: dhanbad-to-deoghar-packers-and-movers
 * Description: Dedicated inter-district moving route page connecting Dhanbad (Coal Capital of India) to Deoghar (Baidyanath Dham & Santhal Pargana).
 * Focus Keywords: dhanbad to deoghar packers and movers, packers and movers dhanbad to deoghar, house shifting dhanbad to deoghar, dhanbad to deoghar luggage parcel, dhanbad to deoghar car carrier, dhanbad to deoghar bike parcel
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Dhanbad to Deoghar Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Top Dhanbad to Deoghar packers and movers by Shree Ashirwad. Same-day 6-8 hr transit, BCCL & AIIMS bills, 5-layer packing, car carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/dhanbad-to-deoghar-packers-and-movers";
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
    <meta name="geo.placename" content="Dhanbad">

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

    <!-- Scoped CSS for Route 6 (Dhanbad to Deoghar) -->
    <style>
        :root {
            --dhn2d-primary: #1e1b4b;
            --dhn2d-secondary: #312e81;
            --dhn2d-accent: #d97706;
            --dhn2d-accent-light: #fef3c7;
            --dhn2d-dark: #0f172a;
            --dhn2d-gray-bg: #f8fafc;
            --dhn2d-border: #e2e8f0;
        }

        .dhn2d-wrapper {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #334155;
            line-height: 1.7;
        }

        .dhn2d-hero {
            background: linear-gradient(135deg, rgba(30,27,75,0.95) 0%, rgba(49,46,129,0.92) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 20px 75px;
            text-align: center;
            position: relative;
        }
        .dhn2d-hero-content {
            max-width: 980px;
            margin: 0 auto;
        }
        .dhn2d-badge {
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
        .dhn2d-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2rem, 4vw, 3.2rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 18px;
            letter-spacing: -0.02em;
        }
        .dhn2d-hero h1 span {
            color: #fbbf24;
        }
        .dhn2d-hero p {
            font-size: 1.15rem;
            max-width: 820px;
            margin: 0 auto 30px;
            color: #e2e8f0;
            font-weight: 400;
        }
        .dhn2d-hero-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 15px;
            margin-top: 35px;
        }
        .dhn2d-stat-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 16px 12px;
            border-radius: 12px;
        }
        .dhn2d-stat-val {
            font-family: 'Outfit', sans-serif;
            font-size: 1.8rem;
            font-weight: 800;
            color: #fbbf24;
        }
        .dhn2d-stat-lbl {
            font-size: 0.82rem;
            color: #cbd5e1;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* Action Bar */
        .dhn2d-action-bar {
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
            border: 1px solid var(--dhn2d-border);
        }
        .dhn2d-action-info h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.25rem;
            margin: 0 0 5px;
            color: var(--dhn2d-dark);
        }
        .dhn2d-action-info p {
            margin: 0;
            color: #64748b;
            font-size: 0.95rem;
        }
        .dhn2d-btn-group {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }
        .dhn2d-btn-phone, .dhn2d-btn-whatsapp {
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
        .dhn2d-btn-phone {
            background: var(--dhn2d-primary);
            color: #ffffff;
        }
        .dhn2d-btn-phone:hover {
            background: var(--dhn2d-secondary);
            color: #ffffff;
            transform: translateY(-2px);
        }
        .dhn2d-btn-whatsapp {
            background: #25d366;
            color: #ffffff;
        }
        .dhn2d-btn-whatsapp:hover {
            background: #1eb954;
            color: #ffffff;
            transform: translateY(-2px);
        }

        /* Content Sections */
        .dhn2d-section {
            padding: 60px 20px;
            max-width: 1140px;
            margin: 0 auto;
        }
        .dhn2d-section-header {
            text-align: center;
            max-width: 780px;
            margin: 0 auto 45px;
        }
        .dhn2d-section-header h2 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(1.8rem, 3vw, 2.4rem);
            color: var(--dhn2d-dark);
            margin-bottom: 12px;
            font-weight: 800;
        }
        .dhn2d-section-header p {
            color: #64748b;
            font-size: 1.05rem;
            margin: 0;
        }

        /* Grid Layouts */
        .dhn2d-grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            align-items: center;
        }
        .dhn2d-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }
        .dhn2d-grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
        }

        .dhn2d-feature-card {
            background: #ffffff;
            border: 1px solid var(--dhn2d-border);
            border-radius: 14px;
            padding: 26px;
            transition: all 0.3s ease;
        }
        .dhn2d-feature-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(0,0,0,0.06);
            border-color: #cbd5e1;
        }
        .dhn2d-feature-card h3, .dhn2d-feature-card h4 {
            font-family: 'Outfit', sans-serif;
            color: var(--dhn2d-dark);
            margin: 0 0 10px;
            font-size: 1.25rem;
        }
        .dhn2d-feature-card p {
            color: #64748b;
            font-size: 0.95rem;
            margin: 0;
            line-height: 1.65;
        }

        /* Image Showcase */
        .dhn2d-img-container {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            border: 1px solid var(--dhn2d-border);
        }
        .dhn2d-img-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }
        .dhn2d-img-container:hover img {
            transform: scale(1.03);
        }
        .dhn2d-img-caption {
            background: #ffffff;
            padding: 12px 16px;
            font-size: 0.88rem;
            color: #475569;
            font-weight: 500;
            border-top: 1px solid var(--dhn2d-border);
        }

        /* Rate Table */
        .dhn2d-table-container {
            background: #ffffff;
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid var(--dhn2d-border);
            box-shadow: 0 4px 15px rgba(0,0,0,0.04);
            margin-bottom: 25px;
        }
        .dhn2d-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        .dhn2d-table th {
            background: var(--dhn2d-primary);
            color: #ffffff;
            padding: 16px 20px;
            font-family: 'Outfit', sans-serif;
            font-weight: 600;
            font-size: 0.95rem;
            letter-spacing: 0.02em;
        }
        .dhn2d-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--dhn2d-border);
            font-size: 0.95rem;
            color: #334155;
        }
        .dhn2d-table tr:last-child td {
            border-bottom: none;
        }
        .dhn2d-table tr:nth-child(even) td {
            background: #f8fafc;
        }
        .dhn2d-price-badge {
            font-weight: 800;
            color: var(--dhn2d-primary);
            font-family: 'Outfit', sans-serif;
            font-size: 1.05rem;
        }

        /* Timeline / Steps */
        .dhn2d-step-card {
            background: #ffffff;
            border-left: 4px solid var(--dhn2d-primary);
            border-radius: 0 12px 12px 0;
            padding: 22px 24px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            border-top: 1px solid var(--dhn2d-border);
            border-right: 1px solid var(--dhn2d-border);
            border-bottom: 1px solid var(--dhn2d-border);
            position: relative;
        }
        .dhn2d-step-num {
            display: inline-block;
            background: var(--dhn2d-accent);
            color: #ffffff;
            font-weight: 800;
            font-size: 0.82rem;
            padding: 2px 10px;
            border-radius: 4px;
            margin-bottom: 8px;
            font-family: 'Outfit', sans-serif;
        }
        .dhn2d-step-card h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            margin: 0 0 6px;
            color: var(--dhn2d-dark);
        }
        .dhn2d-step-card p {
            margin: 0;
            font-size: 0.92rem;
            color: #64748b;
        }

        /* Locality Grid */
        .dhn2d-matrix-box {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--dhn2d-border);
            padding: 28px;
        }
        .dhn2d-matrix-box h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.3rem;
            color: var(--dhn2d-dark);
            margin: 0 0 16px;
            border-bottom: 2px solid var(--dhn2d-accent);
            padding-bottom: 8px;
            display: inline-block;
        }
        .dhn2d-matrix-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 12px;
        }
        .dhn2d-matrix-card {
            background: var(--dhn2d-gray-bg);
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 12px 14px;
        }
        .dhn2d-matrix-card h4 {
            font-size: 0.95rem;
            font-weight: 700;
            margin: 0 0 3px;
            color: var(--dhn2d-dark);
        }
        .dhn2d-matrix-card p {
            font-size: 0.82rem;
            color: #64748b;
            margin: 0;
            line-height: 1.4;
        }

        /* FAQ Accordion */
        .dhn2d-faq-item {
            background: #ffffff;
            border: 1px solid var(--dhn2d-border);
            border-radius: 12px;
            margin-bottom: 14px;
            padding: 20px 24px;
        }
        .dhn2d-faq-q {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            color: var(--dhn2d-dark);
            font-size: 1.1rem;
            margin-bottom: 8px;
        }
        .dhn2d-faq-a {
            color: #64748b;
            font-size: 0.95rem;
            line-height: 1.65;
        }

        /* CTA Banner */
        .dhn2d-cta-banner {
            background: linear-gradient(135deg, var(--dhn2d-primary) 0%, var(--dhn2d-secondary) 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 45px 30px;
            text-align: center;
            margin: 40px auto;
            max-width: 1140px;
        }
        .dhn2d-cta-banner h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            margin: 0 0 12px;
        }
        .dhn2d-cta-banner p {
            max-width: 700px;
            margin: 0 auto 25px;
            color: #e2e8f0;
            font-size: 1.05rem;
        }

        /* Cluster Links */
        .dhn2d-cluster-links {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--dhn2d-border);
            padding: 28px;
        }
        .dhn2d-cluster-links h3 {
            font-family: 'Outfit', sans-serif;
            margin: 0 0 18px;
            font-size: 1.25rem;
            color: var(--dhn2d-dark);
        }
        .dhn2d-tag-cloud {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .dhn2d-tag-link {
            display: inline-block;
            background: var(--dhn2d-gray-bg);
            border: 1px solid var(--dhn2d-border);
            color: #334155;
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 0.88rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s ease;
        }
        .dhn2d-tag-link:hover {
            background: var(--dhn2d-primary);
            color: #ffffff;
            border-color: var(--dhn2d-primary);
        }

        @media (max-width: 768px) {
            .dhn2d-action-bar {
                flex-direction: column;
                text-align: center;
                padding: 20px;
            }
            .dhn2d-btn-group {
                justify-content: center;
                width: 100%;
            }
            .dhn2d-btn-phone, .dhn2d-btn-whatsapp {
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
        "name": "Shree Ashirwad Packers and Movers Dhanbad",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "https://www.shreeashirwadpackers.com/#organization",
        "url": "https://www.shreeashirwadpackers.com/dhanbad-to-deoghar-packers-and-movers",
        "telephone": "+918409531615",
        "priceRange": "₹₹",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Bank More, Near Dhanbad Railway Station",
            "addressLocality": "Dhanbad",
            "addressRegion": "Jharkhand",
            "postalCode": "826001",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 23.7957,
            "longitude": 86.4304
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
                "name": "Dhanbad"
            },
            {
                "@type": "City",
                "name": "Deoghar"
            }
        ],
        "description": "Professional inter-district household shifting, corporate moving, and vehicle carrier services from Dhanbad (Bank More, Saraidhela, Hirapur, BCCL Koyla Nagar, IIT-ISM) to Deoghar (Castairs Town, Bilasi Town, Jasidih, Devipur AIIMS, Satsang Nagar, Madhupur) across the 120 km corridor via Govindpur and Jamtara. Providing guaranteed same-day 6 to 8 hour door-to-door transit, 5-layer protective packing, closed container trucks, BCCL, CMPF & AIIMS compliant tax billing, and comprehensive transit insurance."
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
                "name": "Dhanbad Packers and Movers",
                "item": "https://www.shreeashirwadpackers.com/packers-and-movers-in-dhanbad"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Dhanbad to Deoghar",
                "item": "https://www.shreeashirwadpackers.com/dhanbad-to-deoghar-packers-and-movers"
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
                "name": "How long does home shifting take from Dhanbad to Deoghar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Dhanbad and Deoghar is approximately 115 to 125 km via Govindpur, Jamtara, and Sarath (NH-19 & SH-14). Driving time is roughly 3.0 to 3.5 hours. We guarantee complete same-day door-to-door relocation: loading in Dhanbad in the morning and completing unloading, unpacking, and room setup in Deoghar by early evening within 6 to 8 hours."
                }
            },
            {
                "@type": "Question",
                "name": "What are the shifting charges from Dhanbad to Deoghar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Moving costs from Dhanbad to Deoghar are competitive and transparent: 1 BHK apartment shifting costs ₹10,500 to ₹16,000; 2 BHK household moving ranges from ₹15,000 to ₹23,000; 3 BHK flat/bungalow relocation is ₹21,000 to ₹32,000; two-wheeler bike parceling ranges from ₹2,200 to ₹3,800; and dedicated enclosed car carrier is ₹6,500 to ₹10,500."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide claim-ready bills for BCCL, CMPF, IIT-ISM, and government staff in Dhanbad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We issue 100% compliant computer-generated GST tax invoices (SAC 9965/9967), consignment bilty notes, itemized inventory packing lists, money receipts, and transit insurance policies accepted across Bharat Coking Coal Limited (BCCL), CMPF, Eastern Railway, IIT-ISM Dhanbad, nationalized banks, and state administrative departments."
                }
            },
            {
                "@type": "Question",
                "name": "How do you protect household furniture from coal soot and highway dust during transit from Dhanbad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We deploy a specialized 5-layer defensive shield: high-density EPE foam, virgin multi-layer bubble wrap, heavy corrugated corner angle guards, 7-ply rigid boxes, and waterproof stretch film. Items are transported inside locked, weatherproof closed container vehicles that completely seal out coal belt soot, highway gravel, and rain."
                }
            },
            {
                "@type": "Question",
                "name": "Can you transport my motorcycle or car from Dhanbad to Deoghar on the same day?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer specialized enclosed hydraulic car carrier trailers and custom two-wheeler parceling with wheel chocks, bubble padding around mirrors and tanks, and digital condition inspection reports, ensuring delivery within 12 to 24 hours."
                }
            },
            {
                "@type": "Question",
                "name": "Which localities do you serve in Dhanbad and Deoghar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "In Dhanbad, we pick up across Bank More, Saraidhela, Hirapur, Bartand, Steel Gate, Dhansar, Jharia, Katras, Govindpur, and IIT-ISM / BCCL Koyla Nagar. In Deoghar, we provide doorstep delivery and room placement across Castairs Town, Williams Town, Bilasi Town, Bompas Town, Jasidih, Devipur AIIMS Campus, Satsang Nagar, Kunda, Rohini, and Madhupur."
                }
            }
        ]
    }
    </script>
</head>

<body class="dhn2d-wrapper">

<?php include __DIR__ . '/../includes/header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="dhn2d-hero">
        <div class="dhn2d-hero-content">
            <span class="dhn2d-badge">&#128666; Coal Capital to Baidyanath Dham Express: Dhanbad &rarr; Deoghar</span>
            <h1>Dhanbad to Deoghar <span>Packers and Movers</span></h1>
            <p>
                Professional, damage-free inter-district relocation connecting the Coal Capital of India (Dhanbad) to the holy city of Baidyanath Dham (Deoghar). Dedicated closed container trucks, same-day 6-8 hr delivery, 5-layer protective packing, and 100% BCCL, CMPF &amp; AIIMS approved reimbursement documentation.
            </p>

            <div class="dhn2d-hero-stats">
                <div class="dhn2d-stat-card">
                    <div class="dhn2d-stat-val">120 km</div>
                    <div class="dhn2d-stat-lbl">Highway Distance</div>
                </div>
                <div class="dhn2d-stat-card">
                    <div class="dhn2d-stat-val">Same Day</div>
                    <div class="dhn2d-stat-lbl">6-8 Hr Complete Delivery</div>
                </div>
                <div class="dhn2d-stat-card">
                    <div class="dhn2d-stat-val">100%</div>
                    <div class="dhn2d-stat-lbl">BCCL, CMPF &amp; PSU Approval</div>
                </div>
                <div class="dhn2d-stat-card">
                    <div class="dhn2d-stat-val">Zero Loss</div>
                    <div class="dhn2d-stat-lbl">Transit Insurance Guarantee</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Action Bar -->
    <div class="dhn2d-action-bar">
        <div class="dhn2d-action-info">
            <h3>Moving from Dhanbad to Deoghar?</h3>
            <p>Get instant transparent quotes, pre-move home survey, and customized container scheduling.</p>
        </div>
        <div class="dhn2d-btn-group">
            <a href="tel:8409531615" class="dhn2d-btn-phone">&#128222; Call 084095 31615</a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20please%20send%20a%20quote%20for%20Dhanbad%20to%20Deoghar%20shifting." target="_blank" class="dhn2d-btn-whatsapp">&#128172; WhatsApp Instant</a>
        </div>
    </div>

    <!-- Section 1: Route Corridor & Highway Logistics -->
    <section class="dhn2d-section">
        <div class="dhn2d-grid-2">
            <div>
                <span class="dhn2d-badge" style="color: var(--dhn2d-primary); background: rgba(30,27,75,0.1); border-color: rgba(30,27,75,0.25);">Corridor Logistics</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--dhn2d-dark); margin: 12px 0 18px;">Seamless Transit Across the 120 km Dhanbad &ndash; Deoghar Highway Artery</h2>
                <p>
                    Relocating household goods, executive quarters, and personal vehicles from Dhanbad to Deoghar involves navigating approximately 115 to 125 km along eastern Jharkhand's vital transit corridor. Departing from Dhanbad, our container trucks take the Grand Trunk Road (NH-19) up to Govindpur, branching through Jamtara and Sarath via State Highway 14 (SH-14), before entering the holy temple city of Deoghar.
                </p>
                <p>
                    With well-maintained asphalt highways and smooth traffic flow, our dedicated linehaul trucks complete this journey in roughly 3 to 3.5 driving hours. Because Shree Ashirwad Packers and Movers maintains fully staffed logistics operations in both Dhanbad and Deoghar, we offer guaranteed same-day turnaround: morning packing and loading in Dhanbad followed by complete unloading, furniture positioning, and room setup in Deoghar before evening.
                </p>
                <div style="background: var(--dhn2d-gray-bg); padding: 18px; border-radius: 10px; border-left: 4px solid var(--dhn2d-accent); margin-top: 15px;">
                    <p style="margin: 0; font-weight: 600; font-size: 0.95rem; color: var(--dhn2d-dark);">
                        &#9989; <strong>Direct Single-Truck Move:</strong> No transshipment, no middle storage, and zero vehicle switching ensure your goods are protected from coal dust, rain, and transit vibration.
                    </p>
                </div>
            </div>
            <div class="dhn2d-img-container">
                <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Sealed Container Truck for Dhanbad to Deoghar Shifting" width="600" height="400" loading="lazy">
                <div class="dhn2d-img-caption">Sealed container trucks providing dust-proof, rain-safe, and rapid 3.5 hr highway transit between Dhanbad and Deoghar.</div>
            </div>
        </div>
    </section>

    <!-- Section 2: Why Choose Shree Ashirwad -->
    <section class="dhn2d-section" style="background: var(--dhn2d-gray-bg);">
        <div class="dhn2d-section-header">
            <h2>Why Choose Shree Ashirwad for Dhanbad to Deoghar Shifting?</h2>
            <p>Engineered for speed, meticulous defensive packing, and flawless institutional compliance across Jharkhand.</p>
        </div>
        <div class="dhn2d-grid-3">
            <div class="dhn2d-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#9201;</div>
                <h3>Guaranteed Same-Day 6-8 Hr Transit</h3>
                <p>Our direct route trucks depart immediately upon loading in Dhanbad, ensuring your family can settle comfortably in your new Deoghar home on the very same evening.</p>
            </div>
            <div class="dhn2d-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#128196;</div>
                <h3>BCCL, CMPF &amp; AIIMS Compliant Bills</h3>
                <p>We provide GST-compliant invoices, itemized consignment bilty, weight manifests, and transit receipts accepted without audit objections across BCCL, CMPF, IIT-ISM, and AIIMS.</p>
            </div>
            <div class="dhn2d-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#128737;</div>
                <h3>5-Layer Defensive Packaging Shield</h3>
                <p>Premium packaging using virgin bubble wrap, high-density EPE foam, heavy corrugated edge guards, 7-ply cartons, and waterproof stretch wrap shields your valuables against road vibrations.</p>
            </div>
            <div class="dhn2d-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#128666;</div>
                <h3>Weatherproof Closed Container Fleet</h3>
                <p>Unlike open tarpaulin trucks that expose items to coal soot, road gravel, and unexpected rain showers, our locked steel containers offer 100% dry, sealed security throughout the 120 km journey.</p>
            </div>
            <div class="dhn2d-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#128663;</div>
                <h3>Specialized Car &amp; Two-Wheeler Transport</h3>
                <p>Dedicated enclosed car carrier trailers and custom wooden/bubble wrapped motorcycle cages ensure your vehicles arrive in Deoghar in pristine, showroom condition.</p>
            </div>
            <div class="dhn2d-feature-card">
                <div style="font-size: 2rem; margin-bottom: 10px;">&#128104;&#8205;&#128295;</div>
                <h3>Complete Electrical &amp; Furniture Setup</h3>
                <p>Our trained carpenters and technicians dismantle and reassemble modular beds, LED wall units, air conditioners, water purifiers, and dining tables at both origin and destination.</p>
            </div>
        </div>
    </section>

    <!-- Section 3: Transparent Pricing Table -->
    <section class="dhn2d-section">
        <div class="dhn2d-section-header">
            <h2>Transparent Tariff Schedule: Dhanbad to Deoghar</h2>
            <p>Clear, upfront price estimates based on home size, inventory volume, and vehicle requirements with zero hidden surcharges.</p>
        </div>
        <div class="dhn2d-table-container">
            <table class="dhn2d-table">
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
                        <td>115 &ndash; 125 km</td>
                        <td>Same Day (6 &ndash; 8 hrs)</td>
                        <td><span class="dhn2d-price-badge">&#8377;10,500 &ndash; &#8377;16,000</span></td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Complete Household</strong><br><small>2 bedrooms, hall, kitchen, dining set, 2 ACs, fridge, washing machine</small></td>
                        <td>115 &ndash; 125 km</td>
                        <td>Same Day (6 &ndash; 8 hrs)</td>
                        <td><span class="dhn2d-price-badge">&#8377;15,000 &ndash; &#8377;23,000</span></td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Family Home / Villa</strong><br><small>3 bedrooms, drawing room, modular kitchen, pooja mandir, heavy furniture</small></td>
                        <td>115 &ndash; 125 km</td>
                        <td>Same Day (7 &ndash; 9 hrs)</td>
                        <td><span class="dhn2d-price-badge">&#8377;21,000 &ndash; &#8377;32,000</span></td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Large Residence Relocation</strong><br><small>Complete executive bungalow furnishings, antique wooden almirahs, gym setup</small></td>
                        <td>115 &ndash; 125 km</td>
                        <td>Same Day (8 &ndash; 10 hrs)</td>
                        <td><span class="dhn2d-price-badge">&#8377;29,000 &ndash; &#8377;44,000</span></td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler / Bike Parcel Service</strong><br><small>Motorcycles, scooters with full bubble wrapping and tyre immobilizers</small></td>
                        <td>115 &ndash; 125 km</td>
                        <td>Same Day (4 &ndash; 6 hrs)</td>
                        <td><span class="dhn2d-price-badge">&#8377;2,200 &ndash; &#8377;3,800</span></td>
                    </tr>
                    <tr>
                        <td><strong>Dedicated Enclosed Car Carrier</strong><br><small>Sedans, hatchbacks, SUVs inside enclosed carrier trailer</small></td>
                        <td>115 &ndash; 125 km</td>
                        <td>Same Day Delivery</td>
                        <td><span class="dhn2d-price-badge">&#8377;6,500 &ndash; &#8377;10,500</span></td>
                    </tr>
                    <tr>
                        <td><strong>Complete Unpacking &amp; Room Setup Add-on</strong><br><small>Unpacking, room-by-room positioning, bed assembly, and trash removal</small></td>
                        <td>Onsite Service</td>
                        <td>2 &ndash; 4 Hours</td>
                        <td><span class="dhn2d-price-badge">&#8377;2,500 &ndash; &#8377;4,500</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="text-align: center; color: #64748b; font-size: 0.9rem; margin-top: 10px;">
            * Quotes reflect standard ground-to-ground shifting; upper floors without elevators or specialized crane lifting may have nominal adjustments.
        </p>
    </section>

    <!-- Section 4: BCCL, CMPF & Medical Transfers Guidance -->
    <section class="dhn2d-section" style="background: #ffffff;">
        <div class="dhn2d-grid-2">
            <div class="dhn2d-img-container">
                <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Protective packing for fragile household and electronic items" width="600" height="400" loading="lazy">
                <div class="dhn2d-img-caption">5-layer protective packaging shielding household goods from coal dust, humidity, and transit vibrations.</div>
            </div>
            <div>
                <span class="dhn2d-badge" style="color: var(--dhn2d-primary); background: rgba(30,27,75,0.1); border-color: rgba(30,27,75,0.25);">Institutional Guidance</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--dhn2d-dark); margin: 12px 0 18px;">Specialized Support for BCCL, CMPF, IIT-ISM &amp; PSU Transfers</h2>
                <p>
                    Dhanbad is the administrative headquarters of <strong>Bharat Coking Coal Limited (BCCL)</strong>, the <strong>Coal Mines Provident Fund Organisation (CMPF)</strong>, and premier academic hubs like <strong>IIT-ISM Dhanbad</strong> and SNMMCH Medical College. Many senior executives, engineers, and healthcare professionals relocate from Dhanbad to Deoghar upon transfer, retirement, or posting to the AIIMS Deoghar facility.
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
    <section class="dhn2d-section" style="background: var(--dhn2d-gray-bg);">
        <div class="dhn2d-section-header">
            <h2>Our 5-Layer Defensive Packaging Shield</h2>
            <p>Engineered to seal out coal dust and withstand vibrations along the Jamtara corridor.</p>
        </div>
        <div class="dhn2d-grid-4">
            <div class="dhn2d-feature-card" style="text-align: center;">
                <div style="font-size: 2.2rem; color: var(--dhn2d-accent); margin-bottom: 10px;">Layer 1</div>
                <h4>Virgin Bubble Wrap</h4>
                <p>High-tensile air pockets absorb surface shocks, protecting polished wooden finishes, glass mirrors, and appliance paintwork.</p>
            </div>
            <div class="dhn2d-feature-card" style="text-align: center;">
                <div style="font-size: 2.2rem; color: var(--dhn2d-accent); margin-bottom: 10px;">Layer 2</div>
                <h4>High-Density EPE Foam</h4>
                <p>Thermal and shock-insulating expandable polyethylene foam cushioning delicate electronics, television panels, and fragile ceramics.</p>
            </div>
            <div class="dhn2d-feature-card" style="text-align: center;">
                <div style="font-size: 2.2rem; color: var(--dhn2d-accent); margin-bottom: 10px;">Layer 3</div>
                <h4>Corrugated Angle Guards</h4>
                <p>Rigid L-shaped corner protectors shield vulnerable edges of dining tables, wardrobes, refrigerator doors, and bed frames.</p>
            </div>
            <div class="dhn2d-feature-card" style="text-align: center;">
                <div style="font-size: 2.2rem; color: var(--dhn2d-accent); margin-bottom: 10px;">Layer 4 &amp; 5</div>
                <h4>7-Ply Boxes &amp; Stretch Film</h4>
                <p>Heavy-duty kraft cardboard cartons reinforced with 50-micron industrial stretch wrap sealing out moisture, coal soot, and dust.</p>
            </div>
        </div>
    </section>

    <!-- Section 6: Vehicle Relocation (Car Carrier & Bike Parcel) -->
    <section class="dhn2d-section">
        <div class="dhn2d-grid-2">
            <div>
                <span class="dhn2d-badge" style="color: var(--dhn2d-primary); background: rgba(30,27,75,0.1); border-color: rgba(30,27,75,0.25);">Automotive Logistics</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--dhn2d-dark); margin: 12px 0 18px;">Safe Car Carrier &amp; Bike Parcel: Dhanbad to Deoghar</h2>
                <p>
                    Relocate your personal car or motorcycle alongside your household goods without putting extra mileage on state roads. Shree Ashirwad Packers and Movers provides dedicated vehicular logistics ensuring zero-scratch transit to Deoghar.
                </p>
                <div class="dhn2d-feature-card" style="margin-bottom: 16px;">
                    <h4>&#128663; Dedicated Enclosed Car Carriers</h4>
                    <p>Hydraulic ramps ensure smooth, safe ground clearance for sedans and SUVs. Vehicles are secured with heavy-duty wheel chocks and safety straps inside closed carriers, protected from gravel and dust.</p>
                </div>
                <div class="dhn2d-feature-card">
                    <h4>&#127949; Zero-Scratch Two-Wheeler Parcel Service</h4>
                    <p>Motorcycles, scooters, and commuter bikes are carefully wrapped with bubble wrap around fuel tanks, indicators, and headlights, with tyres locked inside the container truck for same-day delivery.</p>
                </div>
            </div>
            <div class="dhn2d-img-container">
                <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Enclosed Hydraulic Car Carrier Dhanbad to Deoghar" width="600" height="400" loading="lazy">
                <div class="dhn2d-img-caption">Hydraulic car loading ramp ensuring safe ground clearance and zero chassis scrapings for personal vehicles.</div>
            </div>
        </div>
    </section>

    <!-- Section 7: Step-by-Step Moving Process -->
    <section class="dhn2d-section" style="background: var(--dhn2d-gray-bg);">
        <div class="dhn2d-section-header">
            <h2>Our 5-Stage Seamless Relocation Workflow</h2>
            <p>From initial booking in Dhanbad to full room arrangement in Deoghar, every step is executed with precision.</p>
        </div>
        <div class="dhn2d-grid-3">
            <div class="dhn2d-step-card">
                <span class="dhn2d-step-num">Step 01</span>
                <h4>Pre-Move Survey &amp; Transparent Quote</h4>
                <p>Our relocation supervisor conducts an onsite or video survey in Dhanbad, assessing inventory volume, packing needs, and issuing a binding written quote.</p>
            </div>
            <div class="dhn2d-step-card">
                <span class="dhn2d-step-num">Step 02</span>
                <h4>5-Layer Packing &amp; Labeling</h4>
                <p>Our experienced packaging crew arrives on moving day with virgin bubble wrap, cartons, and tools, carefully wrapping furniture and labeling each box by room.</p>
            </div>
            <div class="dhn2d-step-card">
                <span class="dhn2d-step-num">Step 03</span>
                <h4>Safe Hydraulic Loading</h4>
                <p>Heavy furniture and appliances are loaded first using padded dollies and balance ramps, tightly anchored within our container truck to prevent transit shifting.</p>
            </div>
            <div class="dhn2d-step-card">
                <span class="dhn2d-step-num">Step 04</span>
                <h4>Fast Jamtara-Sarath Highway Transit</h4>
                <p>The container vehicle is padlocked and travels the 120 km corridor, completing transit to Deoghar in approximately 3 to 3.5 hours.</p>
            </div>
            <div class="dhn2d-step-card">
                <span class="dhn2d-step-num">Step 05</span>
                <h4>Unloading, Placement &amp; Setup</h4>
                <p>Upon reaching Deoghar, our crew unloads every article, carries it to the assigned room, reassembles beds and tables, and disposes of all packaging debris.</p>
            </div>
            <div class="dhn2d-step-card" style="background: linear-gradient(135deg, var(--dhn2d-primary) 0%, var(--dhn2d-secondary) 100%); color: #ffffff; border: none;">
                <span class="dhn2d-step-num" style="background: #fbbf24; color: #000;">Guarantee</span>
                <h4 style="color: #ffffff;">Zero-Damage Assurance</h4>
                <p style="color: #e2e8f0;">Comprehensive transit insurance and rigorous packaging ensure your prized possessions are delivered exactly as they were packed.</p>
            </div>
        </div>
    </section>

    <!-- Section: Unpacking & Furniture Assembly in Deoghar -->
    <section class="dhn2d-section">
        <div class="dhn2d-grid-2">
            <div>
                <span class="dhn2d-badge" style="color: var(--dhn2d-primary); background: rgba(30,27,75,0.1); border-color: rgba(30,27,75,0.25);">White-Glove Setup</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--dhn2d-dark); margin: 12px 0 18px;">Doorstep Unpacking, Furniture Assembly &amp; Debris Clearance</h2>
                <p>
                    Relocating from Dhanbad to Deoghar should be a refreshing transition, not a day of exhausting labor unpacking boxes. Shree Ashirwad Packers and Movers provides full-service destination assistance across Deoghar.
                </p>
                <p>
                    Our trained crew carries each numbered box directly to its designated room—master bedroom, children's study, living hall, or kitchen. We assemble double beds, re-mount television wall units, install water purifiers, arrange heavy sofas, and unpack delicate crockery. Once setup is complete, we sweep up and haul away all used corrugated trimmings, bubble film, and straps, leaving your new home ready for immediate living.
                </p>
                <div class="dhn2d-feature-card">
                    <h4>&#129529; Clean Home Handover Assurance</h4>
                    <p>Zero clutter, zero lingering trash. We ensure your new residence in Deoghar is pristine, functional, and organized from day one.</p>
                </div>
            </div>
            <div class="dhn2d-img-container">
                <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and Setup Service in Deoghar" width="600" height="400" loading="lazy">
                <div class="dhn2d-img-caption">Professional doorstep unpacking, room placement, bed assembly, and packing waste clearance in Deoghar.</div>
            </div>
        </div>
    </section>

    <!-- Section 8: Locality Matrix -->
    <section class="dhn2d-section" style="background: var(--dhn2d-gray-bg);">
        <div class="dhn2d-section-header">
            <h2>Complete Locality Coverage: Dhanbad &amp; Deoghar</h2>
            <p>Direct doorstep pickup from every Dhanbad sector and seamless delivery across Deoghar's residential, academic, and spiritual neighborhoods.</p>
        </div>
        <div class="dhn2d-grid-2">
            <div class="dhn2d-matrix-box">
                <h3>Dhanbad Pickup Localities</h3>
                <div class="dhn2d-matrix-grid">
                    <div class="dhn2d-matrix-card">
                        <h4>Bank More &amp; Saraidhela</h4>
                        <p>Core commercial hubs and upscale residential colonies with modern high-rises.</p>
                    </div>
                    <div class="dhn2d-matrix-card">
                        <h4>Hirapur, Bartand &amp; Steel Gate</h4>
                        <p>Established family localities near the city center, courts, and central bus stand.</p>
                    </div>
                    <div class="dhn2d-matrix-card">
                        <h4>BCCL Koyla Nagar &amp; Koyla Bhawan</h4>
                        <p>PSU executive housing, mining quarters, and CMPF colonies with direct arterial access.</p>
                    </div>
                    <div class="dhn2d-matrix-card">
                        <h4>IIT-ISM Campus &amp; Sardar Patel Nagar</h4>
                        <p>Faculty residences, university residential blocks, and academic settlements.</p>
                    </div>
                    <div class="dhn2d-matrix-card">
                        <h4>Dhansar, Jharia &amp; Katras</h4>
                        <p>Industrial commercial belts and traditional township neighborhoods.</p>
                    </div>
                    <div class="dhn2d-matrix-card">
                        <h4>Govindpur &amp; GT Road Belt</h4>
                        <p>Strategic logistics gateways connecting directly with the Deoghar highway.</p>
                    </div>
                </div>
            </div>

            <div class="dhn2d-matrix-box">
                <h3>Deoghar Delivery Sectors</h3>
                <div class="dhn2d-matrix-grid">
                    <div class="dhn2d-matrix-card">
                        <h4>Castairs Town &amp; Williams Town</h4>
                        <p>Central residential sectors with rapid access to VIP Chowk and temple roads.</p>
                    </div>
                    <div class="dhn2d-matrix-card">
                        <h4>Bilasi Town &amp; Bompas Town</h4>
                        <p>Premier family colonies, spacious housing layouts, and quiet residential lanes.</p>
                    </div>
                    <div class="dhn2d-matrix-card">
                        <h4>Jasidih Industrial Area &amp; Junction</h4>
                        <p>Industrial enterprises, railway quarters, and expanding modern residential colonies.</p>
                    </div>
                    <div class="dhn2d-matrix-card">
                        <h4>AIIMS Deoghar Campus (Devipur)</h4>
                        <p>Faculty quarters, resident doctor apartments, and institutional housing blocks.</p>
                    </div>
                    <div class="dhn2d-matrix-card">
                        <h4>Satsang Nagar &amp; Kunda</h4>
                        <p>Spiritual residential enclaves, bypass roads, and educational institutions.</p>
                    </div>
                    <div class="dhn2d-matrix-card">
                        <h4>Rohini, Madhupur &amp; Sarath</h4>
                        <p>Suburban township coverage along the primary inbound Dhanbad corridor.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 9: Verified Customer Reviews -->
    <section class="dhn2d-section">
        <div class="dhn2d-section-header">
            <h2>Verified Dhanbad to Deoghar Customer Reviews</h2>
            <p>Authentic feedback from mining executives, professors, and relocated families.</p>
        </div>
        <div class="dhn2d-grid-2">
            <div class="dhn2d-feature-card">
                <div style="color: #f59e0b; margin-bottom: 8px;">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</div>
                <p style="font-style: italic; margin-bottom: 15px;">"Upon retiring from BCCL Koyla Nagar, we decided to settle permanently in Bilasi Town, Deoghar. Moving heavy antique wooden furniture, glass display units, and personal household items seemed stressful. Shree Ashirwad Packers arrived on time in Dhanbad at 7:30 AM. Their closed container truck reached Deoghar by 2:30 PM, and their team unpacked everything and assembled our beds by evening. Zero damage and totally transparent pricing!"</p>
                <p style="font-weight: 700; color: var(--dhn2d-primary); margin: 0;">&ndash; R. N. Mukherjee, Retired BCCL Officer (Koyla Nagar Dhanbad &rarr; Bilasi Town Deoghar)</p>
            </div>
            <div class="dhn2d-feature-card">
                <div style="color: #f59e0b; margin-bottom: 8px;">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</div>
                <p style="font-style: italic; margin-bottom: 15px;">"I was transferred from SNMMCH Dhanbad to AIIMS Deoghar. Shree Ashirwad provided prompt packing with 5-layer materials that protected all our sensitive electronic equipment and delicate home items from coal dust. Their GST invoice and bilty were approved by AIIMS administration on the first submission. Excellent team!"</p>
                <p style="font-weight: 700; color: var(--dhn2d-primary); margin: 0;">&ndash; Dr. Priyanshu Sharma, Assistant Professor (AIIMS Deoghar)</p>
            </div>
        </div>
    </section>

    <!-- Section 10: Frequently Asked Questions (FAQ) -->
    <section class="dhn2d-section" style="background: var(--dhn2d-gray-bg);">
        <div class="dhn2d-section-header">
            <h2>Frequently Asked Questions</h2>
            <p>Practical answers regarding transit durations, pricing, coal dust prevention, and official reimbursement claims.</p>
        </div>
        <div style="max-width: 900px; margin: 0 auto;">
            <div class="dhn2d-faq-item">
                <div class="dhn2d-faq-q">How long does home shifting take from Dhanbad to Deoghar?</div>
                <div class="dhn2d-faq-a">The highway distance between Dhanbad and Deoghar is approximately 115 to 125 km via Govindpur, Jamtara, and Sarath (NH-19 & SH-14). Driving time is roughly 3.0 to 3.5 hours. We guarantee complete same-day door-to-door relocation: loading in Dhanbad in the morning and completing unloading, unpacking, and room setup in Deoghar by early evening within 6 to 8 hours.</div>
            </div>
            <div class="dhn2d-faq-item">
                <div class="dhn2d-faq-q">What are the shifting charges from Dhanbad to Deoghar?</div>
                <div class="dhn2d-faq-a">Moving costs from Dhanbad to Deoghar are competitive and transparent: 1 BHK apartment shifting costs ₹10,500 to ₹16,000; 2 BHK household moving ranges from ₹15,000 to ₹23,000; 3 BHK flat/bungalow relocation is ₹21,000 to ₹32,000; two-wheeler bike parceling ranges from ₹2,200 to ₹3,800; and dedicated enclosed car carrier is ₹6,500 to ₹10,500.</div>
            </div>
            <div class="dhn2d-faq-item">
                <div class="dhn2d-faq-q">Do you provide claim-ready bills for BCCL, CMPF, IIT-ISM, and government staff in Dhanbad?</div>
                <div class="dhn2d-faq-a">Yes. We issue 100% compliant computer-generated GST tax invoices (SAC 9965/9967), consignment bilty notes, itemized inventory packing lists, money receipts, and transit insurance policies accepted across Bharat Coking Coal Limited (BCCL), CMPF, Eastern Railway, IIT-ISM Dhanbad, nationalized banks, and state administrative departments.</div>
            </div>
            <div class="dhn2d-faq-item">
                <div class="dhn2d-faq-q">How do you protect household furniture from coal soot and highway dust during transit from Dhanbad?</div>
                <div class="dhn2d-faq-a">We deploy a specialized 5-layer defensive shield: high-density EPE foam, virgin multi-layer bubble wrap, heavy corrugated corner angle guards, 7-ply rigid boxes, and waterproof stretch film. Items are transported inside locked, weatherproof closed container vehicles that completely seal out coal belt soot, highway gravel, and rain.</div>
            </div>
            <div class="dhn2d-faq-item">
                <div class="dhn2d-faq-q">Can you transport my motorcycle or car from Dhanbad to Deoghar on the same day?</div>
                <div class="dhn2d-faq-a">Yes. We offer specialized enclosed hydraulic car carrier trailers and custom two-wheeler parceling with wheel chocks, bubble padding around mirrors and tanks, and digital condition inspection reports, ensuring delivery within 12 to 24 hours.</div>
            </div>
            <div class="dhn2d-faq-item">
                <div class="dhn2d-faq-q">Which localities do you serve in Dhanbad and Deoghar?</div>
                <div class="dhn2d-faq-a">In Dhanbad, we pick up across Bank More, Saraidhela, Hirapur, Bartand, Steel Gate, Dhansar, Jharia, Katras, Govindpur, and IIT-ISM / BCCL Koyla Nagar. In Deoghar, we provide doorstep delivery and room placement across Castairs Town, Williams Town, Bilasi Town, Bompas Town, Jasidih, Devipur AIIMS Campus, Satsang Nagar, Kunda, Rohini, and Madhupur.</div>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <div class="dhn2d-cta-banner">
        <h2>Book Your Dhanbad to Deoghar Move Today</h2>
        <p>Experience hassle-free, same-day relocation backed by verified transit insurance, sealed container trucks, and expert packing crews.</p>
        <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
            <a href="tel:8409531615" class="dhn2d-btn-phone" style="font-size: 1.1rem; padding: 14px 30px;">&#128222; Call 084095 31615</a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20please%20send%20a%20quote%20for%20Dhanbad%20to%20Deoghar%20shifting." target="_blank" class="dhn2d-btn-whatsapp" style="font-size: 1.1rem; padding: 14px 30px;">&#128172; WhatsApp Inquiry</a>
        </div>
    </div>

    <!-- Section 11: Cluster Navigation Links -->
    <section class="dhn2d-section" style="padding-top: 10px;">
        <div class="dhn2d-cluster-links">
            <h3>Explore Connected Regional Routes</h3>
            <div class="dhn2d-tag-cloud">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dhanbad" class="dhn2d-tag-link">Dhanbad Hub Overview</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-deoghar" class="dhn2d-tag-link">Deoghar Hub Overview</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-dhanbad-packers-and-movers" class="dhn2d-tag-link">Deoghar to Dhanbad Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/dhanbad-to-bokaro-packers-and-movers" class="dhn2d-tag-link">Dhanbad to Bokaro Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/dhanbad-to-ranchi-packers-and-movers" class="dhn2d-tag-link">Dhanbad to Ranchi Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-jamshedpur-packers-and-movers" class="dhn2d-tag-link">Deoghar to Jamshedpur Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-hazaribagh-packers-and-movers" class="dhn2d-tag-link">Deoghar to Hazaribagh Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-dumka-packers-and-movers" class="dhn2d-tag-link">Deoghar to Dumka Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-giridih-packers-and-movers" class="dhn2d-tag-link">Deoghar to Giridih Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/pricing" class="dhn2d-tag-link">Cost Calculator &amp; Rates</a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
