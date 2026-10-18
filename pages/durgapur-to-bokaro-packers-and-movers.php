<?php
/**
 * Page Name: Durgapur to Bokaro Packers and Movers
 * Route Slug: durgapur-to-bokaro-packers-and-movers
 * Description: Dedicated intercity moving route page from Durgapur (West Bengal) to Bokaro Steel City (Jharkhand).
 * Focus Keywords: durgapur to bokaro packers and movers, packers and movers durgapur to bokaro, house shifting durgapur to bokaro, durgapur to bokaro luggage parcel, durgapur to bokaro car carrier, durgapur to bokaro bike parcel
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Durgapur to Bokaro Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Top Durgapur to Bokaro packers and movers by Shree Ashirwad. Same-day 12-16h transit, SAIL corporate claim bills, 5-layer packing, car carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/durgapur-to-bokaro-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="durgapur to bokaro packers and movers, packers and movers durgapur to bokaro, house shifting durgapur to bokaro, durgapur to bokaro luggage parcel, durgapur to bokaro car carrier, durgapur to bokaro bike parcel">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Bokaro Steel City">

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

    <!-- Scoped CSS for Route 19 (Durgapur to Bokaro) -->
    <style>
        :root {
            --d2bko-primary: #1e293b;
            --d2bko-secondary: #334155;
            --d2bko-accent: #ea580c;
            --d2bko-accent-light: #ffedd5;
            --d2bko-dark: #0f172a;
            --d2bko-gray-bg: #f8fafc;
            --d2bko-border: #e2e8f0;
        }

        .d2bko-wrapper {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #334155;
            line-height: 1.7;
        }

        .d2bko-hero {
            background: linear-gradient(135deg, rgba(15,23,42,0.95) 0%, rgba(30,41,59,0.92) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 20px 75px;
            text-align: center;
            position: relative;
        }
        .d2bko-hero-content {
            max-width: 980px;
            margin: 0 auto;
        }
        .d2bko-badge {
            display: inline-block;
            background: rgba(234,88,12,0.22);
            border: 1px solid rgba(234,88,12,0.45);
            color: #ffedd5;
            padding: 6px 18px;
            border-radius: 50px;
            font-size: 0.88rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 20px;
        }
        .d2bko-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2rem, 4vw, 3.2rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 18px;
            color: #ffffff;
        }
        .d2bko-hero h1 span {
            color: #ea580c;
            display: inline-block;
        }
        .d2bko-hero p {
            font-size: 1.15rem;
            color: #e2e8f0;
            max-width: 820px;
            margin: 0 auto 30px;
            line-height: 1.7;
        }
        .d2bko-hero-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
            gap: 15px;
            margin: 35px 0 30px;
        }
        .d2bko-stat-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.14);
            border-radius: 12px;
            padding: 16px 12px;
            text-align: center;
        }
        .d2bko-stat-card .d2bko-stat-val {
            font-family: 'Outfit', sans-serif;
            font-size: 1.7rem;
            font-weight: 800;
            color: #f97316;
            margin-bottom: 4px;
        }
        .d2bko-stat-card .d2bko-stat-lbl {
            font-size: 0.85rem;
            color: #cbd5e1;
            font-weight: 500;
        }
        .d2bko-cta-group {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }
        .d2bko-btn-phone {
            background: #ea580c;
            color: #ffffff;
            font-weight: 700;
            padding: 13px 28px;
            border-radius: 8px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }
        .d2bko-btn-phone:hover {
            background: #c2410c;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 8px 18px rgba(234,88,12,0.35);
        }
        .d2bko-btn-whatsapp {
            background: #25d366;
            color: #ffffff;
            font-weight: 700;
            padding: 13px 28px;
            border-radius: 8px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }
        .d2bko-btn-whatsapp:hover {
            background: #1ebd5a;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 8px 18px rgba(37,211,102,0.35);
        }

        .d2bko-section {
            padding: 60px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .d2bko-section-header {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 40px;
        }
        .d2bko-section-header h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            color: var(--d2bko-primary);
            margin-bottom: 12px;
            font-weight: 800;
        }
        .d2bko-section-header p {
            color: #64748b;
            font-size: 1.05rem;
        }

        .d2bko-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }
        @media (max-width: 768px) {
            .d2bko-grid-2 {
                grid-template-columns: 1fr;
                gap: 25px;
            }
        }

        .d2bko-image-box {
            position: relative;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 12px 28px rgba(15,23,42,0.12);
        }
        .d2bko-image-box img {
            width: 100%;
            height: 320px;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }
        .d2bko-image-box:hover img {
            transform: scale(1.03);
        }
        .d2bko-image-caption {
            background: rgba(15,23,42,0.85);
            color: #ffffff;
            padding: 10px 16px;
            font-size: 0.85rem;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .d2bko-feature-card {
            background: #ffffff;
            border: 1px solid var(--d2bko-border);
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        .d2bko-feature-card:hover {
            border-color: var(--d2bko-accent);
            box-shadow: 0 10px 22px rgba(234,88,12,0.08);
            transform: translateY(-2px);
        }
        .d2bko-feature-card h3 {
            font-family: 'Outfit', sans-serif;
            color: var(--d2bko-primary);
            font-size: 1.25rem;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .d2bko-feature-card p {
            color: #64748b;
            margin: 0;
            font-size: 0.98rem;
        }

        .d2bko-table-wrapper {
            background: #ffffff;
            border: 1px solid var(--d2bko-border);
            border-radius: 12px;
            overflow-x: auto;
            box-shadow: 0 8px 20px rgba(15,23,42,0.05);
        }
        .d2bko-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.98rem;
        }
        .d2bko-table th {
            background: var(--d2bko-primary);
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 700;
            white-space: nowrap;
        }
        .d2bko-table td {
            padding: 15px 20px;
            border-bottom: 1px solid var(--d2bko-border);
            color: #475569;
        }
        .d2bko-table tr:last-child td {
            border-bottom: none;
        }
        .d2bko-table tr:hover td {
            background-color: #f1f5f9;
        }

        .d2bko-matrix-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 15px;
        }
        .d2bko-matrix-card {
            background: #ffffff;
            border: 1px solid var(--d2bko-border);
            border-radius: 10px;
            padding: 16px;
            border-left: 4px solid var(--d2bko-accent);
        }
        .d2bko-matrix-card h4 {
            color: var(--d2bko-primary);
            font-size: 1.05rem;
            margin: 0 0 6px;
            font-weight: 700;
        }
        .d2bko-matrix-card p {
            color: #64748b;
            font-size: 0.9rem;
            margin: 0;
            line-height: 1.5;
        }

        .d2bko-process-step {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
            align-items: flex-start;
        }
        .d2bko-step-num {
            background: var(--d2bko-accent);
            color: #ffffff;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 1.2rem;
            flex-shrink: 0;
            box-shadow: 0 6px 14px rgba(234,88,12,0.3);
        }
        .d2bko-step-content {
            background: #ffffff;
            border: 1px solid var(--d2bko-border);
            border-radius: 10px;
            padding: 18px 22px;
            flex-grow: 1;
        }
        .d2bko-step-content h3 {
            font-family: 'Outfit', sans-serif;
            color: var(--d2bko-primary);
            margin: 0 0 6px;
            font-size: 1.15rem;
        }
        .d2bko-step-content p {
            color: #64748b;
            margin: 0;
            line-height: 1.6;
        }

        .d2bko-faq-item {
            background: #ffffff;
            border: 1px solid var(--d2bko-border);
            border-radius: 10px;
            margin-bottom: 15px;
            overflow: hidden;
        }
        .d2bko-faq-q {
            padding: 18px 24px;
            font-weight: 700;
            color: var(--d2bko-primary);
            background: var(--d2bko-gray-bg);
            border-bottom: 1px solid var(--d2bko-border);
        }
        .d2bko-faq-a {
            padding: 20px 24px;
            color: #475569;
            line-height: 1.7;
            font-size: 0.98rem;
        }

        .d2bko-cta-banner {
            background: linear-gradient(135deg, var(--d2bko-primary) 0%, #0f172a 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 50px 30px;
            text-align: center;
            margin: 60px auto 20px;
            max-width: 1000px;
        }
        .d2bko-cta-banner h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            margin-bottom: 15px;
            color: #ffffff;
        }
        .d2bko-cta-banner p {
            font-size: 1.1rem;
            color: #cbd5e1;
            max-width: 720px;
            margin: 0 auto 30px;
        }
        .d2bko-cluster-links {
            background: #ffffff;
            border: 1px solid var(--d2bko-border);
            border-radius: 12px;
            padding: 30px;
            margin-top: 40px;
        }
        .d2bko-cluster-links h3 {
            color: var(--d2bko-primary);
            font-size: 1.25rem;
            margin-bottom: 20px;
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
        }
        .d2bko-tag-cloud {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .d2bko-tag-link {
            background: var(--d2bko-gray-bg);
            border: 1px solid var(--d2bko-border);
            padding: 8px 16px;
            border-radius: 6px;
            color: var(--d2bko-primary);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 600;
            transition: all 0.2s;
        }
        .d2bko-tag-link:hover {
            background: var(--d2bko-accent);
            color: #ffffff;
            border-color: var(--d2bko-accent);
        }
    </style>

    <!-- Schema 1: MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Durgapur to Bokaro",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "https://www.shreeashirwadpackers.com/#organization",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+918409531615",
        "priceRange": "INR 9,000 - 38,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Shop No. 12, City Centre, Sector 4",
            "addressLocality": "Bokaro Steel City",
            "addressRegion": "Jharkhand",
            "postalCode": "827004",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 23.6693,
            "longitude": 86.1511
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
            "opens": "07:00",
            "closes": "21:30"
        },
        "sameAs": [
            "https://www.facebook.com/shreeashirwadpackers",
            "https://www.instagram.com/shreeashirwadpackers"
        ]
    }
    </script>

    <!-- Schema 2: Service Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Intercity Relocation & Packers and Movers",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Durgapur"
            },
            {
                "@type": "City",
                "name": "Bokaro Steel City"
            }
        ],
        "description": "Premium same-day and 24-hour intercity relocation connecting Durgapur, West Bengal (City Centre, B-Zone, Steel Township DSP, A-Zone, Benachity, Muchipara, Bidhannagar, Alloy Steels Plant ASP, NIT Durgapur) to Bokaro Steel City across the 150 km corridor via NH-19 and NH-18. Offering 5-layer protective packing, dedicated weatherproof sealed container trucks, SAIL corporate reimbursement compliant invoicing, and comprehensive transit insurance."
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
                "name": "Bokaro Packers and Movers",
                "item": "https://www.shreeashirwadpackers.com/packers-and-movers-in-bokaro"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Durgapur to Bokaro",
                "item": "https://www.shreeashirwadpackers.com/durgapur-to-bokaro-packers-and-movers"
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
                "name": "How long does household shifting take from Durgapur to Bokaro Steel City?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Durgapur and Bokaro is approximately 140 to 165 km via NH-19 (GT Road) and NH-18 through Asansol, Govindpur, and Chas. Driving time is roughly 3.5 to 4.5 hours. We guarantee same-day delivery (packed in the morning, delivered by evening) or express next-day delivery within 16 to 24 hours across Bokaro Sectors 1 to 12, Cooperative Colony, and Chas."
                }
            },
            {
                "@type": "Question",
                "name": "What are the moving charges from Durgapur to Bokaro Steel City?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Estimated relocation costs from Durgapur to Bokaro are transparent and budget-friendly: 1 BHK apartment shifting costs ₹11,500 to ₹18,000; 2 BHK household moving ranges from ₹16,500 to ₹26,000; 3 BHK flat/bungalow relocation is ₹23,000 to ₹36,000; motorcycle or scooter parceling ranges from ₹2,500 to ₹4,500; and dedicated enclosed car transport ranges from ₹7,000 to ₹11,500."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide claim-ready bills for SAIL employees moving from DSP or ASP to Bokaro BSL?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Shree Ashirwad Packers and Movers provides 100% compliant computer-generated GST tax invoices (SAC 9965/9967), consignment bilty notes, stamped packing lists, money receipts, and transit insurance policies approved by SAIL finance cells across Durgapur Steel Plant (DSP), Alloy Steels Plant (ASP), and Bokaro Steel Plant (BSL)."
                }
            },
            {
                "@type": "Question",
                "name": "How is furniture and electronics protected against road vibration and coal dust?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We deploy a specialized 5-layer defensive shield comprising high-density EPE foam, virgin multi-layer bubble wrap, heavy corrugated edge guards, 7-ply rigid boxes, and waterproof stretch film. Items travel inside locked, weatherproof closed container vehicles that completely seal out coal belt soot, highway vibration, and rain."
                }
            },
            {
                "@type": "Question",
                "name": "Can you transport cars and two-wheelers from Durgapur to Bokaro?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer specialized enclosed hydraulic car carrier trailers and custom two-wheeler parceling with wheel chocks, bubble padding around mirrors and tanks, digital condition inspection reports, and transit insurance with delivery within 12 to 24 hours."
                }
            },
            {
                "@type": "Question",
                "name": "Which localities do you serve in Durgapur and Bokaro?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "In Durgapur, we pick up across City Centre, B-Zone, A-Zone, Benachity, Muchipara, Bidhannagar, DSP Township, ASP Colony, NIT Durgapur, Mission Hospital, Fuljhore, and Andal. In Bokaro, we provide doorstep delivery and room placement across Sectors 1 to 12, City Centre Sector 4, Cooperative Colony, Chira Chas, Chas Market, ITI Chas, and Balidih Industrial Area."
                }
            }
        ]
    }
    </script>
</head>

<body class="d2bko-wrapper">

<?php include __DIR__ . '/../includes/header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="d2bko-hero">
        <div class="d2bko-hero-content">
            <span class="d2bko-badge">&#9874; Direct Twin Steel Township Express: Durgapur &rarr; Bokaro</span>
            <h1>Durgapur to Bokaro <span>Packers and Movers</span></h1>
            <p>
                Professional, damage-free intercity relocation connecting Durgapur Steel City to Bokaro Steel City. Dedicated closed container trucks, same-day delivery, 5-layer protective packing, and 100% SAIL-approved reimbursement documentation.
            </p>

            <div class="d2bko-hero-stats">
                <div class="d2bko-stat-card">
                    <div class="d2bko-stat-val">150 km</div>
                    <div class="d2bko-stat-lbl">Corridor Distance</div>
                </div>
                <div class="d2bko-stat-card">
                    <div class="d2bko-stat-val">Same Day</div>
                    <div class="d2bko-stat-lbl">12-16 Hr Express Transit</div>
                </div>
                <div class="d2bko-stat-card">
                    <div class="d2bko-stat-val">100%</div>
                    <div class="d2bko-stat-lbl">SAIL &amp; PSU Bill Clearance</div>
                </div>
                <div class="d2bko-stat-card">
                    <div class="d2bko-stat-val">0%</div>
                    <div class="d2bko-stat-lbl">Damage Record Shield</div>
                </div>
            </div>

            <div class="d2bko-cta-group">
                <a href="tel:8409531615" class="d2bko-btn-phone">&#128222; Call 084095 31615</a>
                <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20please%20send%20a%20quote%20for%20Durgapur%20to%20Bokaro%20shifting." target="_blank" class="d2bko-btn-whatsapp">&#128172; WhatsApp Quote</a>
            </div>
        </div>
    </section>

    <!-- Section 1: Corridor Logistics & Roadway Breakdown -->
    <section class="d2bko-section">
        <div class="d2bko-grid-2">
            <div>
                <div class="d2bko-section-header" style="text-align: left; margin-bottom: 25px;">
                    <h2>The Twin Steel Plant Industrial Freight Artery</h2>
                    <p style="margin: 0;">Rapid highway logistics connecting Durgapur's manufacturing core to Bokaro Steel City via the NH-19 corridor.</p>
                </div>
                <p style="color: #475569; line-height: 1.8; margin-bottom: 18px;">
                    Relocating between Durgapur (West Bengal) and Bokaro Steel City (Jharkhand) represents one of Eastern India's most critical industrial relocation corridors. Connecting the twin public-sector steel giants—Durgapur Steel Plant (SAIL DSP) and Alloy Steels Plant (SAIL ASP) with Bokaro Steel Plant (SAIL BSL)—this 140 to 165 km artery demands unmatched punctuality, robust packaging, and specialized logistics.
                </p>
                <p style="color: #475569; line-height: 1.8; margin-bottom: 22px;">
                    Our linehaul container vehicles exit Durgapur through City Centre or Muchipara onto National Highway 19 (the historic Grand Trunk Road), cruising smoothly through Raniganj, Asansol, and Barakar. After crossing the interstate border at the Barakar River bridge, our trucks pass Nirsa, Govindpur, and Dhanbad, before turning onto NH-18 over the Telmachho Bridge across the Damodar River directly into Chas and Bokaro Steel City. With an actual driving time of only 3.5 to 4.5 hours, Shree Ashirwad Packers and Movers guarantees convenient same-day delivery: loaded in Durgapur by morning, delivered and unpacked in your Bokaro home the very same evening.
                </p>
                <div class="d2bko-feature-card">
                    <h3>&#128666; Sealed Container Freight Protection</h3>
                    <p>Unlike open tarpaulin trucks that expose home goods to highway grime, coal dust near Asansol-Dhanbad, and unpredictable weather, our all-weather sealed container trucks ensure your electronics, wooden furniture, and clothing arrive in showroom condition.</p>
                </div>
            </div>
            <div>
                <div class="d2bko-image-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Dedicated container truck navigating Durgapur to Bokaro highway corridor" loading="lazy">
                    <div class="d2bko-image-caption">GPS-monitored sealed container vehicles on the Durgapur-Asansol-Bokaro industrial corridor.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Transparent Tariff & Cost Estimates -->
    <section class="d2bko-section" style="background: var(--d2bko-gray-bg);">
        <div class="d2bko-section-header">
            <h2>Transparent Durgapur to Bokaro Moving Tariff</h2>
            <p>Clear, upfront pricing with zero hidden costs, covering all premium packing materials, loading labour, container transit, and unloading.</p>
        </div>
        <div class="d2bko-table-wrapper">
            <table class="d2bko-table">
                <thead>
                    <tr>
                        <th>Move Type / Volume</th>
                        <th>Standard Distance</th>
                        <th>Estimated Tariff Range</th>
                        <th>Transit &amp; Delivery Time</th>
                        <th>Packaging Inclusions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment Shifting</strong></td>
                        <td>~150 km</td>
                        <td>₹11,500 - ₹18,000</td>
                        <td>Same Day (10 - 14 hrs)</td>
                        <td>3-Layer bubble wrap, corrugated sheets, stretch wrap, wardrobe boxes</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Household Relocation</strong></td>
                        <td>~150 km</td>
                        <td>₹16,500 - ₹26,000</td>
                        <td>Same Day (12 - 16 hrs)</td>
                        <td>5-Layer defensive shield, heavy foam padding, appliance crating</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Quarter / Bungalow Move</strong></td>
                        <td>~150 km</td>
                        <td>₹23,000 - ₹36,000</td>
                        <td>Same Day / Next Day</td>
                        <td>Custom wooden crating, heavy edge guards, furniture dismounting</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Villa Executive Shifting</strong></td>
                        <td>~150 km</td>
                        <td>₹30,000 - ₹45,000</td>
                        <td>24 Hours Guaranteed</td>
                        <td>White-glove packing, fine art protection, room-by-room unpacking</td>
                    </tr>
                    <tr>
                        <td><strong>Motorcycle / Scooter Parcel</strong></td>
                        <td>~150 km</td>
                        <td>₹2,500 - ₹4,500</td>
                        <td>12 - 24 Hours</td>
                        <td>Tyre chocks, mirror foam wrap, fuel tank blanketing, wooden cage</td>
                    </tr>
                    <tr>
                        <td><strong>Sedan / SUV Car Carrier</strong></td>
                        <td>~150 km</td>
                        <td>₹7,000 - ₹11,500</td>
                        <td>24 Hours Doorstep</td>
                        <td>Enclosed hydraulic car carrier trailer, full transit insurance</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="text-align: center; color: #64748b; font-size: 0.9rem; margin-top: 15px;">
            *Rates are indicative estimates based on typical household density and elevator access. Written binding quotes are provided after free video or in-person survey.
        </p>
    </section>

    <!-- Section 3: SAIL Corporate Transfer & Institutional Advisory -->
    <section class="d2bko-section">
        <div class="d2bko-section-header">
            <h2>SAIL Corporate Transfer &amp; Institutional Advisory</h2>
            <p>Specialized relocation protocols crafted for engineers, managers, researchers, and healthcare professionals transferring to Bokaro.</p>
        </div>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 25px;">
            <div class="d2bko-feature-card">
                <h3>&#127970; Twin SAIL Steel Plant Transferees (DSP &rarr; BSL)</h3>
                <p>Transferring between Durgapur Steel Plant (DSP) or Alloy Steels Plant (ASP) and Bokaro Steel Plant (BSL) requires strict compliance with SAIL finance regulations. We provide 100% compliant computer-generated GST tax invoices (SAC 9965/9967), consignment bilty notes, stamped inventories, and transit insurance policies that guarantee hassle-free reimbursement from your department finance cell.</p>
            </div>
            <div class="d2bko-feature-card">
                <h3>&#9881; Heavy Engineering Vendors &amp; Balidih Suppliers</h3>
                <p>Suppliers, machining contractors, and equipment maintenance specialists relocating tools, precision test instruments, and family residences from Durgapur Industrial Area or Muchipara to Bokaro's Balidih Industrial Area benefit from our specialized heavy rigging, palletized freight handling, and zero-transshipment container transit.</p>
            </div>
            <div class="d2bko-feature-card">
                <h3>&#127891; Academic Scholars &amp; Healthcare Specialists</h3>
                <p>Academicians transferring between NIT Durgapur, Dr. B.C. Roy Engineering College, and Bokaro educational institutes (DPS Bokaro, Chinmaya, St. Xavier's), as well as medical staff moving from The Mission Hospital or DSP Hospital to Bokaro General Hospital (BGH), enjoy flexible weekend scheduling and white-glove book and laboratory instrument crating.</p>
            </div>
        </div>
    </section>

    <!-- Section 4: 5-Layer Defensive Packaging Shield -->
    <section class="d2bko-section" style="background: var(--d2bko-gray-bg);">
        <div class="d2bko-grid-2">
            <div>
                <div class="d2bko-image-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="5-layer household packaging for Durgapur to Bokaro shifting" loading="lazy">
                    <div class="d2bko-image-caption">High-density EPE foam, virgin bubble wrap, and 7-ply corrugated cartons protecting delicate items.</div>
                </div>
            </div>
            <div>
                <div class="d2bko-section-header" style="text-align: left; margin-bottom: 25px;">
                    <h2>Our 5-Layer Defensive Packaging Armor</h2>
                    <p style="margin: 0;">Engineered protection to insulate your cherished possessions against highway vibrations, road bumps, and coal soot.</p>
                </div>
                <p style="color: #475569; line-height: 1.8; margin-bottom: 18px;">
                    Moving across state lines requires far more than basic cardboard and tape. Over the 150 km journey along the Grand Trunk Road, items endure centrifugal forces, speed humps, and vibration over highway expansion joints. Our trained packing specialists deploy a comprehensive five-tier packing shield:
                </p>
                <div class="d2bko-feature-card">
                    <h3>1. High-Density EPE Foam &amp; Virgin Bubble Cushioning</h3>
                    <p>Delicate glassware, dinnerware, flat-screen televisions, and electronics are wrapped in shock-absorbent virgin air-bubble film and non-abrasive expanded polyethylene foam.</p>
                </div>
                <div class="d2bko-feature-card">
                    <h3>2. Rigid 7-Ply Cartons &amp; Corner Edge Protectors</h3>
                    <p>Heavy wooden furniture, dining tables, and wardrobes receive reinforced corner angle guards and heavy corrugated kraft sheets to eliminate edge scuffs and gouges.</p>
                </div>
                <div class="d2bko-feature-card">
                    <h3>3. Waterproof Thermal Stretch Wrapping</h3>
                    <p>A final outer layer of industrial-grade stretch film seals each carton and wrapped furniture piece, locking out moisture, rain, highway dust, and industrial particulate soot.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 5: Specialized Automotive Logistics -->
    <section class="d2bko-section">
        <div class="d2bko-grid-2">
            <div>
                <div class="d2bko-section-header" style="text-align: left; margin-bottom: 25px;">
                    <h2>Enclosed Car Carrier &amp; Two-Wheeler Parcel Service</h2>
                    <p style="margin: 0;">Relocate your personal vehicle with complete peace of mind and zero highway wear-and-tear.</p>
                </div>
                <p style="color: #475569; line-height: 1.8; margin-bottom: 18px;">
                    Driving your car or riding your motorcycle over the 150 km stretch of NH-19 through congested toll plazas and heavy industrial truck traffic carries unnecessary risk. Shree Ashirwad Packers and Movers operates dedicated vehicle transport solutions engineered for optimal safety and timely delivery:
                </p>
                <div class="d2bko-feature-card">
                    <h3>&#128663; Hydraulic Enclosed Car Carrier Trailers</h3>
                    <p>Your sedan, hatchback, or SUV is driven onto specialized hydraulic vehicle carriers. Secured with four-point wheel tie-downs and nylon straps, your car travels sheltered inside an enclosed metal container shielded from flying gravel and road grit.</p>
                </div>
                <div class="d2bko-feature-card">
                    <h3>&#127949; Zero-Vibration Motorcycle Parceling</h3>
                    <p>Bikes and scooters receive multi-layer foam packing around mirrors, fuel tanks, exhausts, and instrument clusters before being secured in sturdy crates within our linehaul vehicles, guaranteeing delivery without a single scratch.</p>
                </div>
            </div>
            <div>
                <div class="d2bko-image-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Enclosed hydraulic car carrier loading in Durgapur for delivery to Bokaro" loading="lazy">
                    <div class="d2bko-image-caption">Specialized hydraulic car trailers protecting personal vehicles during transit to Bokaro Steel City.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 6: Step-by-Step Moving Process -->
    <section class="d2bko-section" style="background: var(--d2bko-gray-bg);">
        <div class="d2bko-section-header">
            <h2>Our Seamless 5-Stage Relocation Process</h2>
            <p>A structured, predictable moving protocol that eliminates stress from initial survey to final room placement.</p>
        </div>
        <div style="max-width: 850px; margin: 0 auto;">
            <div class="d2bko-process-step">
                <div class="d2bko-step-num">1</div>
                <div class="d2bko-step-content">
                    <h3>Comprehensive Pre-Move Survey &amp; Transparent Quote</h3>
                    <p>Our relocation expert visits your Durgapur residence (or conducts an interactive video survey) to evaluate item volume, access constraints, and special packaging requirements, providing an all-inclusive binding quotation with zero hidden fees.</p>
                </div>
            </div>
            <div class="d2bko-process-step">
                <div class="d2bko-step-num">2</div>
                <div class="d2bko-step-content">
                    <h3>Systematic Packing &amp; Itemized Inventory Tagging</h3>
                    <p>On your chosen moving day, our uniform-clad packing crew arrives equipped with 5-layer materials. Every item is packed with precision and assigned a numbered barcode tag matching your consignment bilty ledger.</p>
                </div>
            </div>
            <div class="d2bko-process-step">
                <div class="d2bko-step-num">3</div>
                <div class="d2bko-step-content">
                    <h3>Secure Loading &amp; Sealed Container Lock</h3>
                    <p>Furniture and appliances are loaded into our dedicated container vehicle using heavy-duty ramps and safety straps to maintain balance. The vehicle is padlocked and sealed in your presence before dispatch.</p>
                </div>
            </div>
            <div class="d2bko-process-step">
                <div class="d2bko-step-num">4</div>
                <div class="d2bko-step-content">
                    <h3>Smooth NH-19 Transit with GPS Tracking</h3>
                    <p>Your shipment travels the 150 km route via Raniganj, Asansol, and Dhanbad under continuous GPS tracking. Our customer support desk keeps you informed of milestones as the truck enters Jharkhand.</p>
                </div>
            </div>
            <div class="d2bko-process-step">
                <div class="d2bko-step-num">5</div>
                <div class="d2bko-step-content">
                    <h3>Doorstep Delivery, Unloading &amp; Room Setup in Bokaro</h3>
                    <p>Upon arrival in Bokaro Steel City, our destination crew unloads each item, checks it against the inventory sheet, unpacks major furniture, reassembles beds, and disposes of all packaging debris, leaving your home spotless.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 7: Unpacking & Room Arrangement in Bokaro -->
    <section class="d2bko-section">
        <div class="d2bko-grid-2">
            <div>
                <div class="d2bko-section-header" style="text-align: left; margin-bottom: 25px;">
                    <h2>Turnkey Doorstep Setup in Bokaro Steel City</h2>
                    <p style="margin: 0;">Step into a fully functional, comfortable home the moment you arrive in Bokaro.</p>
                </div>
                <p style="color: #475569; line-height: 1.8; margin-bottom: 18px;">
                    Arriving at your new housing sector or quarter in Bokaro after an interstate move should feel exciting, not overwhelming. Shree Ashirwad Packers and Movers does not simply drop cartons on your porch. Our complete relocation package includes white-glove destination assistance:
                </p>
                <p style="color: #475569; line-height: 1.8; margin-bottom: 22px;">
                    Our trained crew carries each piece of furniture and labeled box to its designated room—bedrooms, kitchen, living room, or study. We reassemble modular beds, attach headboards, position wardrobes, place washing machines and refrigerators in utility spaces, and unpack delicate chinaware into kitchen cabinets.
                </p>
                <div class="d2bko-feature-card">
                    <h3>&#129529; Clean Debris Removal Guarantee</h3>
                    <p>Once all furniture and cartons are arranged to your satisfaction, our team sweeps and collects all used bubble wrap, tape, corrugated trimmings, and strapping bands, ensuring your new residence in Bokaro is spotless and ready for living.</p>
                </div>
            </div>
            <div>
                <div class="d2bko-image-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and furniture assembly services in Bokaro Steel City" loading="lazy">
                    <div class="d2bko-image-caption">Professional doorstep unpacking, furniture reassembly, and debris clearance in Bokaro residences.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 8: Dual-City Locality Matrix -->
    <section class="d2bko-section" style="background: var(--d2bko-gray-bg);">
        <div class="d2bko-section-header">
            <h2>Comprehensive Coverage: Durgapur &amp; Bokaro Hubs</h2>
            <p>Door-to-door logistics connecting every prime residential colony and industrial estate across both cities.</p>
        </div>
        <div class="d2bko-grid-2">
            <div>
                <h3 style="color: var(--d2bko-primary); margin-bottom: 15px; font-size: 1.3rem; font-family: 'Outfit', sans-serif;">&#128205; Durgapur Pickup Hubs Served</h3>
                <div class="d2bko-matrix-grid" style="grid-template-columns: 1fr;">
                    <div class="d2bko-matrix-card">
                        <h4>City Centre &amp; Bidhannagar</h4>
                        <p>Complete coverage across City Centre commercial towers, Bidhannagar housing projects, Mission Hospital vicinity, and Fuljhore.</p>
                    </div>
                    <div class="d2bko-matrix-card">
                        <h4>SAIL DSP &amp; ASP Steel Townships</h4>
                        <p>Specialized moving across B-Zone Steel Township, A-Zone residential avenues, DSP Hospital quarters, and Alloy Steels Plant officer colonies.</p>
                    </div>
                    <div class="d2bko-matrix-card">
                        <h4>Benachity &amp; Muchipara Commercial Hubs</h4>
                        <p>High-frequency apartment and commercial relocation across Benachity market streets, Muchipara expressway junctions, and GT Road apartments.</p>
                    </div>
                    <div class="d2bko-matrix-card">
                        <h4>NIT Durgapur Campus &amp; Academic Zone</h4>
                        <p>Dedicated student, faculty, and research relocation across Mahatma Gandhi Avenue, NIT campus residences, and Dr. B.C. Roy colleges.</p>
                    </div>
                    <div class="d2bko-matrix-card">
                        <h4>Andal Aerotropolis &amp; Durgapur Industrial Area</h4>
                        <p>Suburban coverage spanning Andal Kazi Nazrul Islam Airport city, industrial fabricators, and heavy machinery workshops.</p>
                    </div>
                </div>
            </div>
            <div>
                <h3 style="color: var(--d2bko-primary); margin-bottom: 15px; font-size: 1.3rem; font-family: 'Outfit', sans-serif;">&#128205; Bokaro Delivery Hubs Served</h3>
                <div class="d2bko-matrix-grid" style="grid-template-columns: 1fr;">
                    <div class="d2bko-matrix-card">
                        <h4>SAIL Steel Township (Sectors 1 to 12)</h4>
                        <p>Doorstep placement across all SAIL residential sectors (Sector 1, 2, 3, 4, 5, 6, 8, 9, 11, 12) and executive officer quarters.</p>
                    </div>
                    <div class="d2bko-matrix-card">
                        <h4>City Centre Sector 4 &amp; Administrative Hub</h4>
                        <p>Express setup in commercial high-rises, retail hub apartments, and government administrative residential colonies.</p>
                    </div>
                    <div class="d2bko-matrix-card">
                        <h4>Cooperative Colony &amp; Officers' Enclaves</h4>
                        <p>Tailored relocation for private villas, senior executives' bungalows, and premium residential layouts across Cooperative Colony.</p>
                    </div>
                    <div class="d2bko-matrix-card">
                        <h4>Chira Chas &amp; Chas Suburbs</h4>
                        <p>High-frequency delivery across modern gated communities in Chira Chas, ITI Chas, Checkpost, and Chas Commercial Market.</p>
                    </div>
                    <div class="d2bko-matrix-card">
                        <h4>Balidih Industrial Area &amp; Camp-2</h4>
                        <p>Suppliers, fabricators, and plant engineers shifting equipment and households into Balidih and Camp-2 colonies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 9: Verified Customer Reviews -->
    <section class="d2bko-section">
        <div class="d2bko-section-header">
            <h2>Verified Durgapur to Bokaro Relocation Reviews</h2>
            <p>Read authentic feedback from steel plant engineers, professors, and families who relocated with Shree Ashirwad.</p>
        </div>
        <div class="d2bko-grid-2">
            <div class="d2bko-feature-card">
                <div style="color: #f59e0b; margin-bottom: 8px;">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</div>
                <p style="font-style: italic; margin-bottom: 15px;">"I was transferred from Durgapur Steel Plant (DSP B-Zone) to Bokaro Steel Plant (BSL Sector 4). Shree Ashirwad provided an exceptional experience. They packed our 3 BHK quarter in Durgapur on Saturday morning, and the container truck delivered our goods to Bokaro by Saturday evening! All computer-generated GST bills were accepted immediately by SAIL finance without questions. 100% recommended!"</p>
                <p style="font-weight: 700; color: var(--d2bko-primary); margin: 0;">&ndash; Debashis Mukherjee, Assistant General Manager (SAIL DSP &rarr; BSL)</p>
            </div>
            <div class="d2bko-feature-card">
                <div style="color: #f59e0b; margin-bottom: 8px;">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</div>
                <p style="font-style: italic; margin-bottom: 15px;">"We relocated our family home from Bidhannagar, Durgapur to Cooperative Colony, Bokaro. Their 5-layer packing protected our heavy mahogany dining table and delicate chinaware flawlessly. Even my Hyundai Creta was transported on their enclosed carrier without a speck of dust. Their crew in Bokaro also reassembled all furniture. Truly professional service!"</p>
                <p style="font-weight: 700; color: var(--d2bko-primary); margin: 0;">&ndash; Sagnik Roy, Senior Software Architect, Cooperative Colony Bokaro</p>
            </div>
        </div>
    </section>

    <!-- Section 10: Frequently Asked Questions (FAQ) -->
    <section class="d2bko-section" style="background: var(--d2bko-gray-bg);">
        <div class="d2bko-section-header">
            <h2>Frequently Asked Questions</h2>
            <p>Clear, practical answers about scheduling, transit durations, vehicle transport, and PSU moving claims.</p>
        </div>
        <div style="max-width: 900px; margin: 0 auto;">
            <div class="d2bko-faq-item">
                <div class="d2bko-faq-q">How long does household shifting take from Durgapur to Bokaro Steel City?</div>
                <div class="d2bko-faq-a">The road distance between Durgapur and Bokaro is approximately 140 to 165 km via NH-19 (GT Road) and NH-18 through Asansol, Govindpur, and Chas. Driving time is roughly 3.5 to 4.5 hours. We guarantee same-day delivery (packed in the morning, delivered by evening) or express next-day delivery within 16 to 24 hours across Bokaro Sectors 1 to 12, Cooperative Colony, and Chas.</div>
            </div>
            <div class="d2bko-faq-item">
                <div class="d2bko-faq-q">What are the moving charges from Durgapur to Bokaro Steel City?</div>
                <div class="d2bko-faq-a">Estimated relocation costs from Durgapur to Bokaro are transparent and budget-friendly: 1 BHK apartment shifting costs ₹11,500 to ₹18,000; 2 BHK household moving ranges from ₹16,500 to ₹26,000; 3 BHK flat/bungalow relocation is ₹23,000 to ₹36,000; motorcycle or scooter parceling ranges from ₹2,500 to ₹4,500; and dedicated enclosed car transport ranges from ₹7,000 to ₹11,500.</div>
            </div>
            <div class="d2bko-faq-item">
                <div class="d2bko-faq-q">Do you provide claim-ready bills for SAIL employees moving from DSP or ASP to Bokaro BSL?</div>
                <div class="d2bko-faq-a">Yes. Shree Ashirwad Packers and Movers provides 100% compliant computer-generated GST tax invoices (SAC 9965/9967), consignment bilty notes, stamped packing lists, money receipts, and transit insurance policies approved by SAIL finance cells across Durgapur Steel Plant (DSP), Alloy Steels Plant (ASP), and Bokaro Steel Plant (BSL).</div>
            </div>
            <div class="d2bko-faq-item">
                <div class="d2bko-faq-q">How is furniture and electronics protected against road vibration and coal dust?</div>
                <div class="d2bko-faq-a">We deploy a specialized 5-layer defensive shield comprising high-density EPE foam, virgin multi-layer bubble wrap, heavy corrugated edge guards, 7-ply rigid boxes, and waterproof stretch film. Items travel inside locked, weatherproof closed container vehicles that completely seal out coal belt soot, highway vibration, and rain.</div>
            </div>
            <div class="d2bko-faq-item">
                <div class="d2bko-faq-q">Can you transport cars and two-wheelers from Durgapur to Bokaro?</div>
                <div class="d2bko-faq-a">Yes. We offer specialized enclosed hydraulic car carrier trailers and custom two-wheeler parceling with wheel chocks, bubble padding around mirrors and tanks, digital condition inspection reports, and transit insurance with delivery within 12 to 24 hours.</div>
            </div>
            <div class="d2bko-faq-item">
                <div class="d2bko-faq-q">Which localities do you serve in Durgapur and Bokaro?</div>
                <div class="d2bko-faq-a">In Durgapur, we pick up across City Centre, B-Zone, A-Zone, Benachity, Muchipara, Bidhannagar, DSP Township, ASP Colony, NIT Durgapur, Mission Hospital, Fuljhore, and Andal. In Bokaro, we provide doorstep delivery and room placement across Sectors 1 to 12, City Centre Sector 4, Cooperative Colony, Chira Chas, Chas Market, ITI Chas, and Balidih Industrial Area.</div>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <div class="d2bko-cta-banner">
        <h2>Book Your Durgapur to Bokaro Move Today</h2>
        <p>Experience hassle-free, same-day relocation across Eastern India's industrial heartland. Free pre-move survey, transparent binding quotations, and complete transit insurance coverage.</p>
        <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
            <a href="tel:8409531615" class="d2bko-btn-phone" style="font-size: 1.1rem; padding: 14px 30px;">&#128222; Call 084095 31615</a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20please%20send%20a%20quote%20for%20Durgapur%20to%20Bokaro%20shifting." target="_blank" class="d2bko-btn-whatsapp" style="font-size: 1.1rem; padding: 14px 30px;">&#128172; WhatsApp Inquiry</a>
        </div>
    </div>

    <!-- Section 11: Cluster Navigation Links -->
    <section class="d2bko-section" style="padding-top: 10px;">
        <div class="d2bko-cluster-links">
            <h3>Explore Connected Bokaro &amp; Interstate Relocation Routes</h3>
            <div class="d2bko-tag-cloud">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bokaro" class="d2bko-tag-link">Bokaro Hub Overview</a>
                <a href="<?php echo SITE_BASE_URL; ?>/bokaro-to-durgapur-packers-and-movers" class="d2bko-tag-link">Bokaro to Durgapur Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/kolkata-to-bokaro-packers-and-movers" class="d2bko-tag-link">Kolkata to Bokaro Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/bokaro-to-kolkata-packers-and-movers" class="d2bko-tag-link">Bokaro to Kolkata Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-bokaro-packers-and-movers" class="d2bko-tag-link">Patna to Bokaro Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/delhi-to-bokaro-packers-and-movers" class="d2bko-tag-link">Delhi to Bokaro Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/bokaro-to-delhi-packers-and-movers" class="d2bko-tag-link">Bokaro to Delhi Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/bokaro-to-dhanbad-packers-and-movers" class="d2bko-tag-link">Bokaro to Dhanbad Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/household-shifting-services-in-bokaro" class="d2bko-tag-link">Bokaro Household Shifting</a>
                <a href="<?php echo SITE_BASE_URL; ?>/car-transport-in-bokaro" class="d2bko-tag-link">Car Transport Bokaro</a>
                <a href="<?php echo SITE_BASE_URL; ?>/bike-transport-in-bokaro" class="d2bko-tag-link">Bike Transport Bokaro</a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
