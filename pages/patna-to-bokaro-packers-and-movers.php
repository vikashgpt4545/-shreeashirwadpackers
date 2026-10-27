<?php
/**
 * Page Name: Patna to Bokaro Packers and Movers
 * Description: Dedicated relocation service page for Patna, Bihar to Bokaro Steel City, Jharkhand.
 * Distance: ~330-350 km | Transit Time: 7-9 hours via NH-22 / NH-19 (GT Road) / Dumri or Nawada-Rajauli corridor.
 */

// Define Page Specific Meta Information
$pageTitle = "Patna to Bokaro Packers and Movers | Safe & Fast Intercity Relocation";
$pageDescription = "Professional Patna to Bokaro packers and movers service. Verified household shifting, car bike transport, office relocation, safe multi-layer packing, transparent pricing and fast 7-9 hr delivery.";
$canonicalUrl = "https://www.shreeashirwadpackers.com/patna-to-bokaro-packers-and-movers";

// Include Global Configuration & Header
require_once dirname(__DIR__) . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="patna to bokaro packers and movers, packers and movers patna to bokaro, house shifting patna to bokaro, car transport patna to bokaro, bike parcel patna to bokaro, intercity relocation patna to bokaro">
    <link rel="canonical" href="<?php echo $canonicalUrl; ?>">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Tags -->
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:url" content="<?php echo $canonicalUrl; ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg">

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg">

    <!-- Favicon & Stylesheet Links -->
    <link rel="icon" type="image/png" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
    <link rel="shortcut icon" href="<?php echo SITE_BASE_URL; ?>/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Patna to Bokaro Services",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "telephone": "+91 9835565233",
        "email": "info@shreeashirwadpackers.com",
        "url": "<?php echo $canonicalUrl; ?>",
        "priceRange": "₹7,500 - ₹46,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Boring Road / Danapur Road / Kankarbagh",
            "addressLocality": "Patna",
            "addressRegion": "Bihar",
            "postalCode": "800001",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 25.5941,
            "longitude": 85.1376
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
            "opens": "07:00",
            "closes": "22:00"
        },
        "sameAs": [
            "https://www.facebook.com/shreeashirwadpackers",
            "https://twitter.com/shreeashirwadp"
        ]
    }
    </script>

    <!-- Schema 2: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Intercity Relocation Services",
        "name": "Patna to Bokaro Relocation Service",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Patna"
            },
            {
                "@type": "City",
                "name": "Bokaro Steel City"
            }
        ],
        "description": "End-to-end household shifting, vehicle transport, corporate moving, and specialized packing from Patna, Bihar to Bokaro Steel City, Jharkhand.",
        "offers": {
            "@type": "Offer",
            "priceCurrency": "INR",
            "price": "7500",
            "priceValidUntil": "2027-12-31"
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
                "name": "Intercity Relocation",
                "item": "<?php echo SITE_BASE_URL; ?>/services"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Patna to Bokaro Packers and Movers",
                "item": "<?php echo $canonicalUrl; ?>"
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
                "name": "What is the typical transit time from Patna to Bokaro Steel City?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The road distance of approximately 330-350 km between Patna and Bokaro Steel City is usually completed within 7 to 9 hours under regular highway conditions via NH-22 and NH-19 (GT Road). Dedicated container trucks offer same-day or next-morning doorstep delivery."
                }
            },
            {
                "@type": "Question",
                "name": "How much does household shifting cost from Patna to Bokaro?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Moving charges typically range from ₹7,500 to ₹14,000 for a 1 BHK, ₹13,500 to ₹23,000 for a 2 BHK, ₹20,000 to ₹33,000 for a 3 BHK, and ₹27,000 to ₹46,000 for a 4 BHK villa or large family setup. Pricing includes multi-tier packing materials, loading, toll road tariffs, and unloading."
                }
            },
            {
                "@type": "Question",
                "name": "Which highway route is followed by your trucks between Patna and Bokaro?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We primarily operate via NH-22 from Patna through Jahanabad, Gaya, and Dobhi, connecting to the 6-lane Golden Quadrilateral NH-19 (GT Road) through Barhi and Bagodar up to Dumri, then taking SH-13 via Bermo directly into Bokaro Steel City. An alternate route runs via Bakhtiyarpur, Nawada, Rajauli Pass, Koderma, and Hazaribagh."
                }
            },
            {
                "@type": "Question",
                "name": "Can you safely transport two-wheelers and passenger cars from Patna to Bokaro?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide specialized car carrier trailers and enclosed container transport for motorbikes and cars. Vehicles undergo high-density foam padding, tyre wheel locks, battery isolation, and transit insurance coverage with digital pre-loading condition inspection reports."
                }
            },
            {
                "@type": "Question",
                "name": "Which residential sectors in Bokaro Steel City do you deliver to?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our local delivery fleet provides direct door delivery across all Bokaro Steel City sectors including Sector 1 through Sector 12, City Centre, Chas, Cooperative Colony, Balidih Industrial Area, Kurmidih, Bokaro Thermal, and Chandrapura."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide unpacking, furniture reassembly, and debris clearance in Bokaro?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our destination moving crew in Bokaro unpacks all cartons, reassembles beds, dining tables, modular storage units, and positions heavy appliances in your respective rooms. We also collect and clear out all used corrugated cartons and bubble wraps."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped Route Stylesheet: Prefix p2bko- */
        .p2bko-route-wrapper {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            color: #1e293b;
            background-color: #f8fafc;
            line-height: 1.7;
        }

        .p2bko-hero-section {
            background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 50%, #0369a1 100%);
            color: #ffffff;
            padding: 70px 20px 80px;
            position: relative;
            overflow: hidden;
        }
        .p2bko-hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 20% 30%, rgba(245, 158, 11, 0.15) 0%, transparent 60%);
            pointer-events: none;
        }
        .p2bko-hero-container {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }
        .p2bko-breadcrumbs {
            font-size: 0.88rem;
            color: #93c5fd;
            margin-bottom: 20px;
        }
        .p2bko-breadcrumbs a {
            color: #bfdbfe;
            text-decoration: none;
            transition: color 0.2s;
        }
        .p2bko-breadcrumbs a:hover {
            color: #f59e0b;
        }
        .p2bko-hero-grid {
            display: grid;
            grid-template-columns: 1.25fr 0.75fr;
            gap: 40px;
            align-items: center;
        }
        .p2bko-hero-title {
            font-family: 'Outfit', sans-serif;
            font-size: 2.7rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
            color: #ffffff;
        }
        .p2bko-hero-title span {
            color: #f59e0b;
            display: inline-block;
        }
        .p2bko-hero-lead {
            font-size: 1.15rem;
            color: #e2e8f0;
            margin-bottom: 30px;
            font-weight: 400;
        }
        .p2bko-hero-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 32px;
        }
        .p2bko-badge-item {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 8px 16px;
            border-radius: 30px;
            font-size: 0.85rem;
            font-weight: 600;
            color: #f8fafc;
        }

        .p2bko-hero-card {
            background: #ffffff;
            border-radius: 18px;
            padding: 32px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.35);
            color: #0f172a;
        }
        .p2bko-hero-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 12px;
            color: #0f172a;
        }
        .p2bko-hero-card p {
            font-size: 0.9rem;
            color: #64748b;
            margin-bottom: 24px;
        }
        .p2bko-quick-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
            margin-bottom: 24px;
        }
        .p2bko-stat-box {
            background: #f1f5f9;
            padding: 14px;
            border-radius: 12px;
            text-align: center;
        }
        .p2bko-stat-val {
            display: block;
            font-size: 1.35rem;
            font-weight: 800;
            color: #1e3a8a;
            font-family: 'Outfit', sans-serif;
        }
        .p2bko-stat-lbl {
            font-size: 0.76rem;
            color: #64748b;
            text-transform: uppercase;
            font-weight: 600;
        }
        .p2bko-cta-btn {
            display: block;
            width: 100%;
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            color: #ffffff;
            text-align: center;
            padding: 14px 20px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 1.05rem;
            text-decoration: none;
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 8px 18px rgba(217, 119, 6, 0.35);
        }
        .p2bko-cta-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 24px rgba(217, 119, 6, 0.45);
            color: #ffffff;
        }

        .p2bko-section {
            padding: 60px 20px;
        }
        .p2bko-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .p2bko-section-head {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 48px;
        }
        .p2bko-section-tag {
            font-size: 0.85rem;
            font-weight: 700;
            color: #0284c7;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: inline-block;
            margin-bottom: 8px;
        }
        .p2bko-section-title {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            font-weight: 800;
            color: #0f172a;
            line-height: 1.25;
            margin-bottom: 16px;
        }
        .p2bko-section-desc {
            font-size: 1.02rem;
            color: #475569;
        }

        .p2bko-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }
        .p2bko-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 36px;
        }
        .p2bko-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }

        .p2bko-feature-card {
            background: #ffffff;
            border-radius: 14px;
            padding: 30px;
            border: 1px solid #e2e8f0;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .p2bko-feature-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 30px -10px rgba(0, 0, 0, 0.08);
        }
        .p2bko-card-icon {
            width: 52px;
            height: 52px;
            border-radius: 12px;
            background: #e0f2fe;
            color: #0284c7;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 800;
            margin-bottom: 20px;
        }
        .p2bko-feature-card h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.25rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 12px;
        }
        .p2bko-feature-card p {
            font-size: 0.94rem;
            color: #64748b;
            line-height: 1.6;
        }

        .p2bko-media-block {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
            margin-bottom: 60px;
        }
        .p2bko-media-block.p2bko-reverse {
            direction: rtl;
        }
        .p2bko-media-block.p2bko-reverse > * {
            direction: ltr;
        }
        .p2bko-media-img {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 16px 36px rgba(0, 0, 0, 0.12);
        }
        .p2bko-media-img img {
            width: 100%;
            height: 380px;
            object-fit: cover;
            display: block;
            transition: transform 0.3s ease;
        }
        .p2bko-media-img:hover img {
            transform: scale(1.03);
        }
        .p2bko-media-content h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.9rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 18px;
            line-height: 1.3;
        }
        .p2bko-media-content p {
            font-size: 0.98rem;
            color: #475569;
            margin-bottom: 16px;
            line-height: 1.7;
        }

        .p2bko-table-container {
            overflow-x: auto;
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
            margin-bottom: 24px;
        }
        .p2bko-price-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            min-width: 600px;
        }
        .p2bko-price-table th {
            background: #0f172a;
            color: #ffffff;
            padding: 16px 20px;
            font-size: 0.92rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .p2bko-price-table td {
            padding: 16px 20px;
            border-bottom: 1px solid #f1f5f9;
            font-size: 0.95rem;
            color: #334155;
        }
        .p2bko-price-table tr:last-child td {
            border-bottom: none;
        }
        .p2bko-price-table tr:hover td {
            background: #f8fafc;
        }
        .p2bko-price-tag {
            font-weight: 700;
            color: #0369a1;
            font-family: 'Outfit', sans-serif;
            font-size: 1.05rem;
        }

        .p2bko-route-infobox {
            background: #e0f2fe;
            border-left: 5px solid #0284c7;
            padding: 24px;
            border-radius: 8px;
            margin-bottom: 40px;
        }
        .p2bko-route-infobox h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.2rem;
            font-weight: 700;
            color: #0369a1;
            margin-bottom: 8px;
        }
        .p2bko-route-infobox p {
            font-size: 0.95rem;
            color: #0f172a;
            margin: 0;
        }

        .p2bko-faq-list {
            max-width: 900px;
            margin: 0 auto;
        }
        .p2bko-faq-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 18px;
        }
        .p2bko-faq-item h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.18rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 12px;
        }
        .p2bko-faq-item p {
            font-size: 0.95rem;
            color: #475569;
            line-height: 1.65;
            margin: 0;
        }

        .p2bko-cta-bar {
            background: linear-gradient(135deg, #1e3a8a 0%, #0369a1 100%);
            border-radius: 18px;
            padding: 50px 40px;
            text-align: center;
            color: #ffffff;
            margin-top: 50px;
        }
        .p2bko-cta-bar h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 14px;
        }
        .p2bko-cta-bar p {
            font-size: 1.05rem;
            color: #e2e8f0;
            max-width: 680px;
            margin: 0 auto 30px;
        }
        .p2bko-cta-actions {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .p2bko-btn-white {
            background: #ffffff;
            color: #0f172a;
            padding: 14px 28px;
            border-radius: 10px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.2s;
        }
        .p2bko-btn-white:hover {
            background: #f1f5f9;
            transform: translateY(-2px);
        }
        .p2bko-btn-amber {
            background: #f59e0b;
            color: #ffffff;
            padding: 14px 28px;
            border-radius: 10px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.2s;
        }
        .p2bko-btn-amber:hover {
            background: #d97706;
            transform: translateY(-2px);
        }

        @media (max-width: 991px) {
            .p2bko-hero-grid,
            .p2bko-media-block,
            .p2bko-grid-3,
            .p2bko-grid-4 {
                grid-template-columns: 1fr;
            }
            .p2bko-media-block.p2bko-reverse {
                direction: ltr;
            }
            .p2bko-hero-title {
                font-size: 2.2rem;
            }
            .p2bko-section-title {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body class="p2bko-route-wrapper">

<?php include dirname(__DIR__) . '/includes/header.php'; ?>

<main>
    <!-- HERO SECTION -->
    <section class="p2bko-hero-section">
        <div class="p2bko-hero-container">
            <div class="p2bko-breadcrumbs">
                <a href="<?php echo SITE_BASE_URL; ?>/">Home</a> &rarr;
                <a href="<?php echo SITE_BASE_URL; ?>/services">Intercity Relocation</a> &rarr;
                <span>Patna to Bokaro Packers and Movers</span>
            </div>
            <div class="p2bko-hero-grid">
                <div>
                    <h1 class="p2bko-hero-title">Patna to Bokaro <span>Packers and Movers</span></h1>
                    <p class="p2bko-hero-lead">Fast, dependable, and insured intercity relocation from Patna, Bihar to Bokaro Steel City, Jharkhand. Specialized 5-layer protective packing, dedicated linehaul container trucks, direct highway routing via NH-22 and NH-19, and full destination setup across all Bokaro sectors.</p>
                    <div class="p2bko-hero-badges">
                        <span class="p2bko-badge-item">✓ 330-350 km in 7-9 Hours</span>
                        <span class="p2bko-badge-item">✓ Zero Transshipment Guarantee</span>
                        <span class="p2bko-badge-item">✓ Comprehensive Transit Insurance</span>
                        <span class="p2bko-badge-item">✓ Serving All Sectors 1-12 & Chas</span>
                    </div>
                </div>
                <div>
                    <div class="p2bko-hero-card">
                        <h3>Patna &rarr; Bokaro Quick Booking</h3>
                        <p>Get an honest, transparent quotation with guaranteed delivery timelines and zero hidden charges.</p>
                        <div class="p2bko-quick-stats">
                            <div class="p2bko-stat-box">
                                <span class="p2bko-stat-val">340 KM</span>
                                <span class="p2bko-stat-lbl">Distance</span>
                            </div>
                            <div class="p2bko-stat-box">
                                <span class="p2bko-stat-val">7-9 Hrs</span>
                                <span class="p2bko-stat-lbl">Transit Time</span>
                            </div>
                            <div class="p2bko-stat-box">
                                <span class="p2bko-stat-val">₹7,500+</span>
                                <span class="p2bko-stat-lbl">Starting Fare</span>
                            </div>
                            <div class="p2bko-stat-box">
                                <span class="p2bko-stat-val">100%</span>
                                <span class="p2bko-stat-lbl">Door-to-Door</span>
                            </div>
                        </div>
                        <a href="tel:+919835565233" class="p2bko-cta-btn">Call Now: +91 9835565233</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HIGHWAY ROUTE & OPERATIONAL PROFILE -->
    <section class="p2bko-section">
        <div class="p2bko-container">
            <div class="p2bko-section-head">
                <span class="p2bko-section-tag">Logistical Corridor</span>
                <h2 class="p2bko-section-title">Strategic Highway Routing from Patna to Bokaro</h2>
                <p class="p2bko-section-desc">We operate dedicated sealed container vehicles between Patna and Bokaro Steel City across verified national highways, ensuring rapid turnaround, toll-monitored routes, and complete cargo protection.</p>
            </div>

            <div class="p2bko-route-infobox">
                <h4>Primary Linehaul Route: NH-22 &rarr; Dobhi &rarr; NH-19 (GT Road) &rarr; Dumri &rarr; SH-13 &rarr; Bokaro</h4>
                <p>Our transport route moves outbound from Patna via the 4-lane NH-22 passing Punpun, Jahanabad, and Gaya to connect with the 6-lane National Highway 19 (Grand Trunk Road) at Dobhi. From Dobhi, our vehicles drive smoothly eastward across Chauparan, Barhi, and Bagodar to Dumri, then branch southward along State Highway 13 via Bermo and Chandrapura into Bokaro Steel City. Alternatively, during peak periods or special cargo schedules, we utilize the Patna &rarr; Bakhtiyarpur &rarr; Nawada &rarr; Rajauli Pass &rarr; Koderma &rarr; Hazaribagh &rarr; Ramgarh &rarr; Bokaro corridor (~350 km).</p>
            </div>

            <div class="p2bko-media-block">
                <div class="p2bko-media-img">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Dedicated linehaul container truck moving goods from Patna to Bokaro Steel City" loading="lazy">
                </div>
                <div class="p2bko-media-content">
                    <h3>Direct Sealed Container Transit Without Intermediate Handling</h3>
                    <p>Relocating across the Bihar-Jharkhand border requires logistical precision. Shree Ashirwad Packers and Movers guarantees dedicated sealed container trucks where your household goods, electronics, and personal assets are loaded, sealed with numbered locks at your Patna residence, and opened only upon arrival in Bokaro.</p>
                    <p>This strict zero-transshipment protocol prevents the common hazards of intercity transport such as mid-journey cross-docking, accidental offloading, rough handling, or dust and moisture contamination. Your belongings remain untouched inside the same waterproof, weatherproof steel-body container throughout the entire 340-kilometer transit.</p>
                    <p>Our heavy-duty fleet is equipped with modern GPS telematics, hydraulic shock dampers, cargo tie-downs, and experienced long-haul drivers who specialize in navigating the Bihar and Jharkhand highway networks with safety and punctuality.</p>
                </div>
            </div>

            <div class="p2bko-grid-3">
                <div class="p2bko-feature-card">
                    <div class="p2bko-card-icon">01</div>
                    <h4>Patna Pickup Coverage</h4>
                    <p>Seamless door-to-door packing services across Boring Road, Kankarbagh, Bailey Road, Danapur, Patliputra Colony, Rajendra Nagar, Ashiana Nagar, Anisabad, Digha, and Bihta industrial zones.</p>
                </div>
                <div class="p2bko-feature-card">
                    <div class="p2bko-card-icon">02</div>
                    <h4>Controlled Border Transit</h4>
                    <p>Smooth compliance through Bihar-Jharkhand toll barriers and commercial transport checkpoints at Dobhi, Barhi, and Dumri with complete electronic e-way documentation and legal clearances.</p>
                </div>
                <div class="p2bko-feature-card">
                    <div class="p2bko-card-icon">03</div>
                    <h4>Bokaro Sector Delivery</h4>
                    <p>Direct doorstep placement across Bokaro Steel City Sector 1 to Sector 12, City Centre, Chas, Cooperative Colony, Balidih Industrial Area, Kurmidih, Bokaro Thermal, and Chandrapura.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PACKING METHODOLOGY & SAFETY -->
    <section class="p2bko-section" style="background-color: #ffffff;">
        <div class="p2bko-container">
            <div class="p2bko-section-head">
                <span class="p2bko-section-tag">Engineered Protection</span>
                <h2 class="p2bko-section-title">5-Layer Multi-Tier Packaging Standards</h2>
                <p class="p2bko-section-desc">Every piece of furniture, fragile ceramic, delicate artwork, and major appliance receives custom multi-layer protective packaging before entering the transit truck.</p>
            </div>

            <div class="p2bko-media-block p2bko-reverse">
                <div class="p2bko-media-img">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Multi-layer protective packing for furniture and electronics before transit" loading="lazy">
                </div>
                <div class="p2bko-media-content">
                    <h3>Scientific Packaging That Shields Against Highway Shocks</h3>
                    <p>Intercity road transit involves varying road gradients, highway expansion joints, and braking vibrations. To neutralize these forces, our professional packing teams in Patna utilize a proven 5-tier wrapping technique.</p>
                    <p>We begin with virgin polyethylene cling film to preserve polished surfaces against dust and moisture, followed by high-density polyethylene bubble wrapping (45-55 GSM) for impact dissipation. Edge protectors and corner guards shield wood bevels and marble tops, while double-wall 7-ply corrugated sheets provide rigid puncture resistance.</p>
                    <p>For high-value smart TVs, refrigerators, and washing machines, custom thermocol inserts and reinforced wooden crates are deployed to eliminate internal movement and guarantee zero vibration damage during transit.</p>
                </div>
            </div>

            <div class="p2bko-grid-4">
                <div class="p2bko-feature-card">
                    <div class="p2bko-card-icon">📦</div>
                    <h4>Double-Wall Cartons</h4>
                    <p>Virgin kraft paper cartons engineered for heavy household loads, books, kitchenware, and wardrobe garments.</p>
                </div>
                <div class="p2bko-feature-card">
                    <div class="p2bko-card-icon">🛡️</div>
                    <h4>High-Density Bubbles</h4>
                    <p>Premium shock-absorbing bubble cushioning for porcelain crockery, glassware, crystal lamps, and framed art.</p>
                </div>
                <div class="p2bko-feature-card">
                    <div class="p2bko-card-icon">🪑</div>
                    <h4>Furniture Blankets</h4>
                    <p>Heavy quilted textile blankets to insulate sofas, dining sets, and solid Sheesham wood beds against scuffs and rubs.</p>
                </div>
                <div class="p2bko-feature-card">
                    <div class="p2bko-card-icon">🔒</div>
                    <h4>Heavy-Duty Strapping</h4>
                    <p>Industrial polypropylene banding and tamper-evident locking seals on every carton and container door.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- VEHICLE TRANSPORT & CARRIER FLEET -->
    <section class="p2bko-section">
        <div class="p2bko-container">
            <div class="p2bko-section-head">
                <span class="p2bko-section-tag">Vehicle Relocation</span>
                <h2 class="p2bko-section-title">Specialized Car and Bike Transport from Patna to Bokaro</h2>
                <p class="p2bko-section-desc">Shift your four-wheeler or two-wheeler safely between Patna and Bokaro Steel City with enclosed carrier logistics, zero driving wear, and comprehensive transit coverage.</p>
            </div>

            <div class="p2bko-media-block">
                <div class="p2bko-media-img">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Safe car and bike transport on specialized carriers from Patna to Bokaro" loading="lazy">
                </div>
                <div class="p2bko-media-content">
                    <h3>Zero-Wear Transportation for Cars and Motorbikes</h3>
                    <p>Driving your personal car or motorcycle across state highways involves unnecessary engine wear, highway toll expenses, and fatigue. Our dedicated vehicle relocation service transports your vehicle securely on specialized car carriers and enclosed hydraulic trucks.</p>
                    <p>Before loading at your residence in Patna, our certified inspectors conduct a meticulous pre-transit digital inspection recording odometer readings, paintwork condition, and fuel levels. The vehicle is secured onto carrier ramps using high-tensile wheel chocks, four-point nylon tie-down straps, and protective steering and seat covers.</p>
                    <p>Whether you own an executive sedan, premium SUV, commuter motorcycle, or sports bike, we provide safe door-to-door delivery in Bokaro Steel City with zero transit mileage added to your speedometer.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICING & COST SCHEDULE -->
    <section class="p2bko-section" style="background-color: #ffffff;">
        <div class="p2bko-container">
            <div class="p2bko-section-head">
                <span class="p2bko-section-tag">Transparent Pricing</span>
                <h2 class="p2bko-section-title">Patna to Bokaro Shifting Cost Estimates</h2>
                <p class="p2bko-section-desc">Clear, competitive, and honest pricing structures for Patna to Bokaro relocation with all packaging, labor, linehaul transport, and toll charges upfront.</p>
            </div>

            <div class="p2bko-table-container">
                <table class="p2bko-price-table">
                    <thead>
                        <tr>
                            <th>Relocation Type</th>
                            <th>Packing & Labor</th>
                            <th>Linehaul Freight (340 km)</th>
                            <th>Total Estimated Cost</th>
                            <th>Transit Window</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>1 BHK Complete Household</strong></td>
                            <td>₹3,500 - ₹5,000</td>
                            <td>₹4,000 - ₹9,000</td>
                            <td><span class="p2bko-price-tag">₹7,500 - ₹14,000</span></td>
                            <td>Same Day / Next Day</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Complete Household</strong></td>
                            <td>₹5,500 - ₹8,500</td>
                            <td>₹8,000 - ₹14,500</td>
                            <td><span class="p2bko-price-tag">₹13,500 - ₹23,000</span></td>
                            <td>12 - 24 Hours</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK Family Home Shifting</strong></td>
                            <td>₹8,500 - ₹12,500</td>
                            <td>₹11,500 - ₹20,500</td>
                            <td><span class="p2bko-price-tag">₹20,000 - ₹33,000</span></td>
                            <td>12 - 24 Hours</td>
                        </tr>
                        <tr>
                            <td><strong>4 BHK / Large Bungalow / Villa</strong></td>
                            <td>₹11,500 - ₹16,500</td>
                            <td>₹15,500 - ₹29,500</td>
                            <td><span class="p2bko-price-tag">₹27,000 - ₹46,000</span></td>
                            <td>24 - 36 Hours</td>
                        </tr>
                        <tr>
                            <td><strong>Two-Wheeler (Motorcycle / Scooter)</strong></td>
                            <td>₹1,000 - ₹1,800</td>
                            <td>₹1,800 - ₹3,000</td>
                            <td><span class="p2bko-price-tag">₹2,800 - ₹4,800</span></td>
                            <td>24 - 48 Hours</td>
                        </tr>
                        <tr>
                            <td><strong>Four-Wheeler (Hatchback / Sedan / SUV)</strong></td>
                            <td>₹1,500 - ₹2,500</td>
                            <td>₹6,000 - ₹10,500</td>
                            <td><span class="p2bko-price-tag">₹7,500 - ₹13,000</span></td>
                            <td>24 - 48 Hours</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="font-size: 0.88rem; color: #64748b; text-align: center;">*Prices are indicative estimates based on standard inventory volumes and ground-floor access. Final quotes are confirmed post free pre-move virtual or on-site survey.</p>
        </div>
    </section>

    <!-- DESTINATION SERVICES IN BOKARO -->
    <section class="p2bko-section">
        <div class="p2bko-container">
            <div class="p2bko-section-head">
                <span class="p2bko-section-tag">Turnkey Unpacking</span>
                <h2 class="p2bko-section-title">Complete Unpacking & Household Placement in Bokaro</h2>
                <p class="p2bko-section-desc">Our service does not end at unloading at the kerb. Our local Bokaro team brings your heavy furniture inside, unpacks boxes, and positions your home setup ready for living.</p>
            </div>

            <div class="p2bko-media-block p2bko-reverse">
                <div class="p2bko-media-img">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Doorstep unpacking and room arrangement services in Bokaro Steel City" loading="lazy">
                </div>
                <div class="p2bko-media-content">
                    <h3>Careful Furniture Assembly & Settling-in Assistance</h3>
                    <p>Relocating to a new city can be stressful if you are left facing towering stacks of unpacked corrugated boxes. Shree Ashirwad Packers and Movers provides an end-to-end destination settling service across all sectors in Bokaro Steel City.</p>
                    <p>Our destination crew carefully unloads each numbered carton, matching it with the pre-approved inventory ledger. Heavy wooden wardrobes, king-size beds, modular study tables, and dining setups are systematically reassembled using professional tooling.</p>
                    <p>All packaging materials including bubble wrap, cardboard boxes, and edge protectors are collected and removed from your premises, leaving your newly shifted Bokaro home spotless, organized, and ready for you and your family.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- STEP-BY-STEP PROCESS -->
    <section class="p2bko-section" style="background-color: #ffffff;">
        <div class="p2bko-container">
            <div class="p2bko-section-head">
                <span class="p2bko-section-tag">Seamless Flow</span>
                <h2 class="p2bko-section-title">How Our Patna to Bokaro Relocation Operates</h2>
                <p class="p2bko-section-desc">A structured 4-step workflow that ensures zero confusion, guaranteed timelines, and complete peace of mind from pickup to handover.</p>
            </div>

            <div class="p2bko-grid-4">
                <div class="p2bko-feature-card">
                    <div class="p2bko-card-icon">1</div>
                    <h4>Pre-Move Assessment</h4>
                    <p>Share your household inventory via phone call or video walkthrough. Receive an itemized written quote with guaranteed fixed rates.</p>
                </div>
                <div class="p2bko-feature-card">
                    <div class="p2bko-card-icon">2</div>
                    <h4>Expert Packing</h4>
                    <p>Our experienced packing crew arrives in Patna with boxes, bubble wraps, and foam. Every item is packed, inventoried, and labeled.</p>
                </div>
                <div class="p2bko-feature-card">
                    <div class="p2bko-card-icon">3</div>
                    <h4>Sealed Highway Transit</h4>
                    <p>Goods are loaded into dedicated steel container trucks, sealed with unique serial locks, and dispatched via NH-22 and NH-19.</p>
                </div>
                <div class="p2bko-feature-card">
                    <div class="p2bko-card-icon">4</div>
                    <h4>Unloading & Setup</h4>
                    <p>Prompt doorstep arrival in Bokaro. Goods are unloaded, unpacked, reassembled in respective rooms, and packaging waste removed.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FREQUENTLY ASKED QUESTIONS -->
    <section class="p2bko-section">
        <div class="p2bko-container">
            <div class="p2bko-section-head">
                <span class="p2bko-section-tag">Got Questions?</span>
                <h2 class="p2bko-section-title">Frequently Asked Questions: Patna to Bokaro Moving</h2>
                <p class="p2bko-section-desc">Common questions answered regarding transit routes, booking procedures, insurance policies, and pricing.</p>
            </div>

            <div class="p2bko-faq-list">
                <div class="p2bko-faq-item">
                    <h4>What is the typical transit time from Patna to Bokaro Steel City?</h4>
                    <p>The road distance of approximately 330-350 km between Patna and Bokaro Steel City is usually completed within 7 to 9 hours under regular highway conditions via NH-22 and NH-19 (GT Road). Dedicated container trucks offer same-day or next-morning doorstep delivery.</p>
                </div>
                <div class="p2bko-faq-item">
                    <h4>How much does household shifting cost from Patna to Bokaro?</h4>
                    <p>Moving charges typically range from ₹7,500 to ₹14,000 for a 1 BHK, ₹13,500 to ₹23,000 for a 2 BHK, ₹20,000 to ₹33,000 for a 3 BHK, and ₹27,000 to ₹46,000 for a 4 BHK villa or large family setup. Pricing includes multi-tier packing materials, loading, toll road tariffs, and unloading.</p>
                </div>
                <div class="p2bko-faq-item">
                    <h4>Which highway route is followed by your trucks between Patna and Bokaro?</h4>
                    <p>We primarily operate via NH-22 from Patna through Jahanabad, Gaya, and Dobhi, connecting to the 6-lane Golden Quadrilateral NH-19 (GT Road) through Barhi and Bagodar up to Dumri, then taking SH-13 via Bermo directly into Bokaro Steel City. An alternate route runs via Bakhtiyarpur, Nawada, Rajauli Pass, Koderma, and Hazaribagh.</p>
                </div>
                <div class="p2bko-faq-item">
                    <h4>Can you safely transport two-wheelers and passenger cars from Patna to Bokaro?</h4>
                    <p>Yes, we provide specialized car carrier trailers and enclosed container transport for motorbikes and cars. Vehicles undergo high-density foam padding, tyre wheel locks, battery isolation, and transit insurance coverage with digital pre-loading condition inspection reports.</p>
                </div>
                <div class="p2bko-faq-item">
                    <h4>Which residential sectors in Bokaro Steel City do you deliver to?</h4>
                    <p>Our local delivery fleet provides direct door delivery across all Bokaro Steel City sectors including Sector 1 through Sector 12, City Centre, Chas, Cooperative Colony, Balidih Industrial Area, Kurmidih, Bokaro Thermal, and Chandrapura.</p>
                </div>
                <div class="p2bko-faq-item">
                    <h4>Do you provide unpacking, furniture reassembly, and debris clearance in Bokaro?</h4>
                    <p>Yes, our destination moving crew in Bokaro unpacks all cartons, reassembles beds, dining tables, modular storage units, and positions heavy appliances in your respective rooms. We also collect and clear out all used corrugated cartons and bubble wraps.</p>
                </div>
            </div>

            <!-- CTA BANNER -->
            <div class="p2bko-cta-bar">
                <h3>Planning a Move from Patna to Bokaro Steel City?</h3>
                <p>Contact Shree Ashirwad Packers and Movers today for an instant free written quote, zero hidden costs, and trusted intercity relocation support.</p>
                <div class="p2bko-cta-actions">
                    <a href="tel:+919835565233" class="p2bko-btn-amber">Call +91 9835565233</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/contact" class="p2bko-btn-white">Request Free Quote Online</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>

</body>
</html>
