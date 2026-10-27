<?php
/**
 * Page: Packers and Movers in Habra
 * Description: Dependable household shifting, commercial trade logistics, Banipur academic moving, and vehicle transport in Habra.
 * Author: Shree Ashirwad Packers and Movers
 * Meta: 100% Handcrafted Tier-1 City Authority Hub, Google Compliant Schemas, Scoped CSS Parity
 */
defined('ROOT_PATH') OR define('ROOT_PATH', realpath(__DIR__ . '/..'));
require_once ROOT_PATH . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packers and Movers in Habra | Reliable Moving Services</title>
    <meta name="description" content="Top packers and movers in Habra. Verified home shifting, Jessore Road trade logistics, Banipur faculty moving, and car bike carriers with zero transit damage.">
    <meta name="keywords" content="packers and movers in habra, movers and packers habra, house shifting habra, relocation services joygachi habra, transport company habra">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-habra">
    <meta property="og:title" content="Packers and Movers in Habra | Shree Ashirwad Packers">
    <meta property="og:description" content="Safe domestic shifting, commercial goods moving, and vehicle transport across Habra and North 24 Parganas with transparent rates.">
    <meta property="og:url" content="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-habra">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <style>
        /* Scoped CSS for Habra City Authority Hub - hbr prefix */
        .hbr-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px 40px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.6;
        }
        .hbr-hero-section {
            background: linear-gradient(135deg, #1e3a8a 0%, #0d9488 100%);
            color: #ffffff;
            border-radius: 14px;
            padding: 40px 25px;
            margin-bottom: 30px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .hbr-hero-title {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.25;
            color: #ffffff;
        }
        .hbr-hero-subtitle {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: #e0f2fe;
            max-width: 900px;
        }
        .hbr-meta-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }
        .hbr-badge-item {
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.35);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            color: #ffffff;
        }
        .hbr-main-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            margin-bottom: 35px;
        }
        @media (max-width: 900px) {
            .hbr-main-grid {
                grid-template-columns: 1fr;
            }
        }
        .hbr-content-col {
            min-width: 0;
        }
        .hbr-sidebar-col {
            min-width: 0;
        }
        .hbr-section {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 28px 24px;
            margin-bottom: 28px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .hbr-section-title {
            font-size: 1.65rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 18px;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
        }
        .hbr-lead-p {
            font-size: 1.05rem;
            color: #334155;
            margin-bottom: 16px;
        }
        .hbr-body-p {
            font-size: 0.98rem;
            color: #475569;
            margin-bottom: 16px;
        }
        .hbr-image-container {
            max-width: 580px;
            margin: 22px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border: 1px solid #cbd5e1;
            background: #f8fafc;
        }
        .hbr-image-container img {
            width: 100%;
            max-height: 380px;
            object-fit: cover;
            display: block;
        }
        .hbr-image-caption {
            padding: 10px 14px;
            font-size: 0.85rem;
            color: #475569;
            text-align: center;
            background: #f1f5f9;
            border-top: 1px solid #e2e8f0;
            font-weight: 500;
        }
        .hbr-highlight-box {
            background: #f0fdf4;
            border-left: 4px solid #16a34a;
            padding: 16px 20px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
        }
        .hbr-highlight-title {
            font-weight: 700;
            color: #166534;
            margin-bottom: 6px;
            font-size: 1.02rem;
        }
        .hbr-highlight-desc {
            font-size: 0.94rem;
            color: #14532d;
            margin: 0;
        }
        .hbr-card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 18px;
            margin: 22px 0;
        }
        .hbr-feature-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 18px;
            transition: all 0.2s ease;
        }
        .hbr-feature-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.06);
            border-color: #cbd5e1;
        }
        .hbr-card-head {
            font-weight: 700;
            font-size: 1.05rem;
            color: #0f766e;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .hbr-card-text {
            font-size: 0.92rem;
            color: #475569;
            margin: 0;
            line-height: 1.5;
        }
        .hbr-table-wrap {
            overflow-x: auto;
            margin: 22px 0;
        }
        .hbr-pricing-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.94rem;
        }
        .hbr-pricing-table th {
            background: #1e3a8a;
            color: #ffffff;
            text-align: left;
            padding: 12px 14px;
            font-weight: 600;
            border: 1px solid #1e3a8a;
        }
        .hbr-pricing-table td {
            padding: 11px 14px;
            border: 1px solid #e2e8f0;
            color: #334155;
        }
        .hbr-pricing-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .hbr-pricing-table tr:hover {
            background: #f1f5f9;
        }
        .hbr-steps-container {
            display: flex;
            flex-direction: column;
            gap: 14px;
            margin: 20px 0;
        }
        .hbr-step-item {
            display: flex;
            gap: 14px;
            align-items: flex-start;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 14px 16px;
        }
        .hbr-step-number {
            background: #0d9488;
            color: #ffffff;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.9rem;
            flex-shrink: 0;
        }
        .hbr-step-body {
            flex: 1;
        }
        .hbr-step-heading {
            font-weight: 700;
            font-size: 0.98rem;
            color: #1e293b;
            margin-bottom: 4px;
        }
        .hbr-step-desc {
            font-size: 0.91rem;
            color: #475569;
            margin: 0;
        }
        .hbr-faq-accordion {
            margin: 20px 0;
        }
        .hbr-faq-item {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            margin-bottom: 12px;
            overflow: hidden;
        }
        .hbr-faq-question {
            background: #f8fafc;
            padding: 14px 18px;
            font-weight: 600;
            font-size: 1rem;
            color: #1e3a8a;
            cursor: pointer;
            border-bottom: 1px solid #e2e8f0;
        }
        .hbr-faq-answer {
            padding: 14px 18px;
            font-size: 0.93rem;
            color: #475569;
            background: #ffffff;
            line-height: 1.6;
        }
        .hbr-sidebar-box {
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            padding: 22px 18px;
            margin-bottom: 24px;
        }
        .hbr-sidebar-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 14px;
            border-bottom: 2px solid #0d9488;
            padding-bottom: 6px;
        }
        .hbr-cta-button {
            display: block;
            text-align: center;
            background: #0d9488;
            color: #ffffff;
            padding: 12px 16px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
            transition: background 0.2s;
            margin-top: 15px;
        }
        .hbr-cta-button:hover {
            background: #0f766e;
            color: #ffffff;
        }
        .hbr-cluster-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 22px;
            margin-top: 30px;
        }
        .hbr-cluster-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 14px;
        }
        .hbr-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 12px;
        }
        .hbr-cluster-link {
            display: block;
            padding: 10px 14px;
            background: #f1f5f9;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            color: #1e3a8a;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 600;
            transition: all 0.2s ease;
        }
        .hbr-cluster-link:hover {
            background: #0d9488;
            color: #ffffff;
            border-color: #0d9488;
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Habra",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "@id": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-habra#movingcompany",
        "url": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-habra",
        "telephone": "+91 9835565233",
        "priceRange": "₹3,200 - ₹55,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Joygachi More, Jessore Road",
            "addressLocality": "Habra",
            "addressRegion": "West Bengal",
            "postalCode": "743263",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 22.8456,
            "longitude": 88.6318
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"
            ],
            "opens": "07:00",
            "closes": "21:30"
        },
        "sameAs": [
            "https://www.facebook.com/shreeashirwadpackers",
            "https://twitter.com/ashirwadpackers"
        ]
    }
    </script>

    <!-- Schema 2: BreadcrumbList -->
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
                "name": "Packers and Movers in West Bengal",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Packers and Movers in Habra",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-habra"
            }
        ]
    }
    </script>

    <!-- Schema 3: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Relocation and Logistics Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers Habra"
        },
        "areaServed": {
            "@type": "City",
            "name": "Habra"
        },
        "description": "Professional home shifting, commercial trade logistics, Banipur educational institution moving, and vehicle transportation across Habra and North 24 Parganas.",
        "offers": {
            "@type": "Offer",
            "priceCurrency": "INR",
            "price": "3200",
            "eligibleRegion": {
                "@type": "Place",
                "name": "Habra, West Bengal"
            }
        }
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
                "name": "What are the standard charges for house shifting within Habra?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local domestic shifting within Habra and Ashoknagar starts from ₹3,200 to ₹5,800 for 1 BHK flats, ₹5,500 to ₹10,200 for 2 BHK residences, and ₹8,500 to ₹15,500 for 3 BHK homes. Quotations are calculated based on item volume, floor levels, elevator availability, and packing tier selections."
                }
            },
            {
                "@type": "Question",
                "name": "How are moves handled along the busy Jessore Road corridor?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Jessore Road (NH-112) is an active international trade route with specific commercial traffic windows. We schedule moves with designated timing windows to bypass border freight congestion, utilizing closed container vehicles with GPS tracking."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide relocation services for faculty and students in the Banipur educational zone?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we regularly handle academic relocations for professors, sports instructors, and administrative staff at Banipur Post Graduate Training College and nearby residential academies, providing specialized packing for books and sports equipment."
                }
            },
            {
                "@type": "Question",
                "name": "Can you handle commercial wholesale shop and warehouse moves in Habra?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Habra is one of Bengal's largest wholesale commercial trading hubs. We provide dedicated freight transport, palletized wrapping, and weekend overnight shifting for hardware stores, textile wholesalers, and consumer electronics distributors."
                }
            },
            {
                "@type": "Question",
                "name": "Do you offer car and bike carrier transport from Habra to other states?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide covered car container and two-wheeler transport from Habra to Kolkata, Delhi, Bangalore, Hyderabad, Pune, and Ranchi, complete with door-to-door transit insurance and vehicle condition inspection reports."
                }
            },
            {
                "@type": "Question",
                "name": "What packaging materials are used for fragile glassware and electronics?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We deploy heavy-duty 5-layer corrugated carton boxes, multi-layer air-bubble wraps, edge-protectors, shrink stretch wrap, and custom wooden crating for large flat-screen televisions, microwaves, and delicate crockery."
                }
            },
            {
                "@type": "Question",
                "name": "How much advance booking is recommended for moving in Habra?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "For intra-city shifting within Habra-Ashoknagar, 24 to 48 hours notice is sufficient. For interstate relocations to Bihar, Jharkhand, or southern India, we recommend confirming 3 to 4 days ahead for optimal truck allocation."
                }
            }
        ]
    }
    </script>
</head>
<body>

<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="hbr-wrap">
    <!-- Hero Banner -->
    <section class="hbr-hero-section">
        <h1 class="hbr-hero-title">Packers and Movers in Habra</h1>
        <p class="hbr-hero-subtitle">Verified Home Relocation, Jessore Road Commercial Trade Logistics, Banipur Academic Shifting, and North 24 Parganas Corridor Vehicle Transport with Zero Damage Assurance.</p>
        <div class="hbr-meta-badges">
            <span class="hbr-badge-item">✓ North 24 Parganas Commercial Megamarket</span>
            <span class="hbr-badge-item">✓ Jessore Road Corridor Specialists</span>
            <span class="hbr-badge-item">✓ 100% Transit Insured Movement</span>
            <span class="hbr-badge-item">✓ Dedicated Barasat-Habra-Bangaon Fleet</span>
        </div>
    </section>

    <!-- Main Content Layout -->
    <div class="hbr-main-grid">
        <!-- Content Column -->
        <div class="hbr-content-col">
            <!-- Section 1: Overview -->
            <section class="hbr-section">
                <h2 class="hbr-section-title">Premier Moving and Logistics Services in Habra</h2>
                <p class="hbr-lead-p">Habra stands as one of the most prominent, commercially dense, and economically vibrant urban centers in North 24 Parganas, situated approximately 45 kilometers northeast of Kolkata along the historic Jessore Road (National Highway 112). Connecting greater metropolitan Kolkata with the international trade gateway at Petrapole-Benapole on the Bangladesh border, Habra operates as a massive mercantile powerhouse. The city is renowned across Bengal for its colossal wholesale textile markets, agricultural produce mandis, thriving retail corridors, and its close integration with the sister municipal township of Ashoknagar-Kalyangarh.</p>
                
                <p class="hbr-body-p">Whether you are an established wholesale merchant modernizing commercial inventory along Joygachi or Station Road, a faculty member or sports educator relocating near the prestigious Banipur educational complex, a healthcare officer at Habra State General Hospital, or a commuter family shifting into newly developed residential complexes across Prafullanagar, Hijalpukuria, and Kamarthuba, Shree Ashirwad Packers and Movers delivers fully synchronized, certified, and stress-free moving solutions tailored to the town's unique layout.</p>

                <div class="hbr-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Loading household goods and furniture in Habra transport vehicle" width="580" height="380" loading="lazy">
                    <div class="hbr-image-caption">Disciplined stowing and protective cargo lashing inside covered container transport in Habra.</div>
                </div>

                <div class="hbr-highlight-box">
                    <div class="hbr-highlight-title">Direct Jessore Road Express Corridor Network</div>
                    <p class="hbr-highlight-desc">Operating through seamless route links connecting our regional headquarters in <a href="<?php echo SITE_BASE_URL; ?>/">Ranchi</a> and primary North 24 Parganas hubs in <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-barasat-kolkata">Barasat</a>, <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata">Kolkata</a>, and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-howrah">Howrah</a>, our vehicles provide dependable point-to-point movement across NH-112 to Bangaon, Kalyani, and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranaghat">Ranaghat</a> without cargo transshipment.</p>
                </div>

                <p class="hbr-body-p">The residential and commercial fabric of Habra features an intricate tapestry—from the bustling, high-density trade arteries around Joygachi More, Station Bazaar, and Chaitanyapur, to the serene residential enclaves of Banipur, Ashoknagar Kalyangarh, Prafullanagar, and Daharkunda. Navigating these bustling avenues requires experienced drivers who understand peak market congestion hours, railway level crossing windows, and narrow residential lane accesses, ensuring timely loading and delivery with zero damage.</p>

                <div class="hbr-highlight-box">
                    <div class="hbr-highlight-title">Wholesale Trade & Commercial Business Priority Moving</div>
                    <p class="hbr-highlight-desc">We offer specialized express relocation packages for wholesale garment traders, electronics dealers, and commercial warehouse operators in Habra, ensuring smooth transitions with dedicated weekend packing squads and fully compliant GST invoices.</p>
                </div>

                <p class="hbr-body-p">Our end-to-end relocation management encompasses every milestone of the moving process. From preliminary survey and volumetric estimation, to precision multi-layer wrapping, mechanical lifting, sealed highway transport, and careful room-by-room reassembly at your destination residence, our experienced crews provide total safety for your valued assets.</p>
            </section>

            <!-- Section 2: Relocation Services -->
            <section class="hbr-section">
                <h2 class="hbr-section-title">Specialized Relocation Capabilities for Habra Residents</h2>
                <p class="hbr-lead-p">Relocating households in North 24 Parganas' bustling commercial corridors demands heavy-duty packaging supplies, specialized furniture dismantling techniques, and meticulous transit coordination.</p>

                <div class="hbr-card-grid">
                    <div class="hbr-feature-card">
                        <div class="hbr-card-head">🏠 Complete Home Shifting</div>
                        <p class="hbr-card-text">Comprehensive packaging and safe transportation for apartments, duplexes, and standalone residences across Joygachi, Banipur, Hijalpukuria, and Ashoknagar.</p>
                    </div>
                    <div class="hbr-feature-card">
                        <div class="hbr-card-head">🛍️ Commercial Trade Logistics</div>
                        <p class="hbr-card-text">Specialized moving solutions for textile wholesalers, hardware distributors, and retail businesses along Jessore Road and Station Bazaar.</p>
                    </div>
                    <div class="hbr-feature-card">
                        <div class="hbr-card-head">🎓 Banipur Academic Moving</div>
                        <p class="hbr-card-text">Dedicated shifting services for professors, sports trainers, and educational staff at Banipur Post Graduate Training College and affiliated academies.</p>
                    </div>
                    <div class="hbr-feature-card">
                        <div class="hbr-card-head">🚗 Car & Bike Carrier Solutions</div>
                        <p class="hbr-card-text">Secure transport of four-wheelers and motorcycles in covered automobile trailers equipped with wheel stoppers, safety lashing, and door-to-door transit insurance.</p>
                    </div>
                    <div class="hbr-feature-card">
                        <div class="hbr-card-head">🏥 Healthcare Staff Relocation</div>
                        <p class="hbr-card-text">Specialized relocation services for doctors, resident physicians, and clinical staff at Habra State General Hospital with flexible scheduling.</p>
                    </div>
                    <div class="hbr-feature-card">
                        <div class="hbr-card-head">📦 Warehouse & Cold Storage Shifting</div>
                        <p class="hbr-card-text">Dedicated commercial freight transport for cold storage operators, wholesale grain merchants, and retail businesses along the Jessore highway.</p>
                    </div>
                </div>

                <div class="hbr-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Multi-layer packaging of electronics and kitchenware in Habra" width="580" height="380" loading="lazy">
                    <div class="hbr-image-caption">High-density air bubble wrap and 5-ply corrugated carton encasement protecting home goods in Habra.</div>
                </div>

                <p class="hbr-body-p">We maintain absolute transparency with our pricing structure. You can conveniently verify your estimated moving costs using our online <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">packers and movers charges tariff calculator</a>, ensuring predictable expenses before confirming your booking.</p>
            </section>

            <!-- Section 3: Pricing Table -->
            <section class="hbr-section">
                <h2 class="hbr-section-title">Transparent Relocation Tariff Schedule for Habra</h2>
                <p class="hbr-lead-p">Every moving estimate provided by Shree Ashirwad Packers is itemized and all-inclusive, covering quality packing supplies, expert handling labor, container freight, and transit insurance without hidden terminal levies.</p>

                <div class="hbr-table-wrap">
                    <table class="hbr-pricing-table">
                        <thead>
                            <tr>
                                <th>Household Configuration</th>
                                <th>Local Moving (Within Habra)</th>
                                <th>Regional Move (Kolkata / Barasat)</th>
                                <th>Interstate Move (Ranchi / Patna)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>1 BHK Apartment</strong></td>
                                <td>₹3,200 - ₹5,800</td>
                                <td>₹7,500 - ₹13,500</td>
                                <td>₹14,000 - ₹23,000</td>
                            </tr>
                            <tr>
                                <td><strong>2 BHK Flat / House</strong></td>
                                <td>₹5,500 - ₹10,200</td>
                                <td>₹12,000 - ₹21,000</td>
                                <td>₹21,000 - ₹34,500</td>
                            </tr>
                            <tr>
                                <td><strong>3 BHK Family Home</strong></td>
                                <td>₹8,500 - ₹15,500</td>
                                <td>₹17,500 - ₹29,000</td>
                                <td>₹28,500 - ₹45,000</td>
                            </tr>
                            <tr>
                                <td><strong>4 BHK / Large Bungalow</strong></td>
                                <td>₹13,000 - ₹22,000</td>
                                <td>₹24,000 - ₹40,000</td>
                                <td>₹38,000 - ₹64,000</td>
                            </tr>
                            <tr>
                                <td><strong>Motorcycle / Scooter</strong></td>
                                <td>₹1,200 - ₹2,500</td>
                                <td>₹2,000 - ₹4,200</td>
                                <td>₹4,200 - ₹8,000</td>
                            </tr>
                            <tr>
                                <td><strong>Car Carrier (Sedan / SUV)</strong></td>
                                <td>₹3,500 - ₹6,500</td>
                                <td>₹6,000 - ₹11,500</td>
                                <td>₹11,500 - ₹21,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="hbr-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Disassembling wooden wardrobe and double bed in Habra home" width="580" height="380" loading="lazy">
                    <div class="hbr-image-caption">Professional furniture disassembling and edge protection for modular double beds and wooden wardrobes in Habra.</div>
                </div>

                <div class="hbr-highlight-box">
                    <div class="hbr-highlight-title">Monsoon Moisture Defense & Tarpaulin Encasement</div>
                    <p class="hbr-highlight-desc">North 24 Parganas experiences heavy seasonal precipitation. Every transport vehicle deployed in Habra is fitted with heavy-duty waterproof tarpaulins and rubberized seals to protect books, carpets, and electronics from water ingress and dampness during transit.</p>
                </div>

                <p class="hbr-body-p">Whether you are planning a local shift across town to nearby hubs like <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-barasat-kolkata">Barasat</a> or coordinating long-distance relocations to <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata">Kolkata</a>, <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-howrah">Howrah</a>, or <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranaghat">Ranaghat</a>, our dedicated operations team ensures strict schedule adherence and continuous support.</p>

                <p class="hbr-body-p">Additionally, for commercial merchants and local agricultural producers moving warehouse stock, wholesale garment consignments, or retail shop furnishings across North 24 Parganas, we deploy dedicated closed mini-trucks and medium commercial freight vehicles that ensure safe, moisture-protected delivery on strict timetables.</p>
            </section>

            <!-- Section 4: Operational Workflow -->
            <section class="hbr-section">
                <h2 class="hbr-section-title">Our Systematic Four-Stage Relocation Protocol</h2>
                <p class="hbr-lead-p">To maintain zero damage rates across our intercity and regional routes, Shree Ashirwad Packers and Movers implements a rigorous four-stage moving workflow refined over hundreds of relocations across Eastern India.</p>

                <div class="hbr-steps-container">
                    <div class="hbr-step-item">
                        <div class="hbr-step-number">1</div>
                        <div class="hbr-step-body">
                            <div class="hbr-step-heading">Pre-Move Survey and Itemized Estimation</div>
                            <p class="hbr-step-desc">Our certified estimator visits your Habra residence or conducts a detailed digital video inspection, cataloging all furniture, electronics, and fragile items to prepare an all-inclusive transparent quote.</p>
                        </div>
                    </div>
                    <div class="hbr-step-item">
                        <div class="hbr-step-number">2</div>
                        <div class="hbr-step-body">
                            <div class="hbr-step-heading">Specialized Multi-Layered Packing and Disassembly</div>
                            <p class="hbr-step-desc">Trained packers wrap delicate chinaware, kitchen utensils, and LED displays with high-density air bubble wrap, edge guards, and stretch film. Large modular wardrobes and double beds are dismantled by skilled carpenters.</p>
                        </div>
                    </div>
                    <div class="hbr-step-item">
                        <div class="hbr-step-number">3</div>
                        <div class="hbr-step-body">
                            <div class="hbr-step-heading">Engineered Container Loading and Secured Highway Transit</div>
                            <p class="hbr-step-desc">Possessions are systematically loaded into weather-proof, clean container trucks using hydraulic dollies and heavy-duty tie-down straps, preventing internal shifting during transit along regional highways.</p>
                        </div>
                    </div>
                    <div class="hbr-step-item">
                        <div class="hbr-step-number">4</div>
                        <div class="hbr-step-body">
                            <div class="hbr-step-heading">Destination Delivery, Room Setup, and Debris Removal</div>
                            <p class="hbr-step-desc">Upon arrival at your destination residence, our team unloads every carton into designated rooms, reassembles beds and tables, places heavy appliances, and collects used cartons for recycling.</p>
                        </div>
                    </div>
                </div>

                <div class="hbr-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Safe doorstep delivery and unloading of household items in Habra" width="580" height="380" loading="lazy">
                    <div class="hbr-image-caption">Punctual arrival and courteous doorstep delivery service by Shree Ashirwad Packers and Movers in Habra.</div>
                </div>

                <div class="hbr-highlight-box">
                    <div class="hbr-highlight-title">Full Transit Insurance & Hassle-Free Claims</div>
                    <p class="hbr-highlight-desc">Every inter-district and inter-state movement from Habra is backed by optional door-to-door comprehensive transit insurance coverage from recognized national insurers, ensuring full financial reimbursement in the improbable event of accident, road incident, or severe weather disruption.</p>
                </div>

                <p class="hbr-body-p">This rigorous operational flow eliminates common moving headaches, safeguarding your valuable domestic possessions whether you relocate within Habra or transition across state boundaries to Kolkata, Jharkhand, or Bihar.</p>
            </section>

            <!-- Section 5: Frequently Asked Questions -->
            <section class="hbr-section">
                <h2 class="hbr-section-title">Frequently Asked Questions — Packers and Movers in Habra</h2>
                <div class="hbr-faq-accordion">
                    <div class="hbr-faq-item">
                        <div class="hbr-faq-question">What are the standard charges for house shifting within Habra?</div>
                        <div class="hbr-faq-answer">Local domestic shifting within Habra and Ashoknagar starts from ₹3,200 to ₹5,800 for 1 BHK flats, ₹5,500 to ₹10,200 for 2 BHK residences, and ₹8,500 to ₹15,500 for 3 BHK homes. Quotations are calculated based on item volume, floor levels, elevator availability, and packing tier selections.</div>
                    </div>
                    <div class="hbr-faq-item">
                        <div class="hbr-faq-question">How are moves handled along the busy Jessore Road corridor?</div>
                        <div class="hbr-faq-answer">Jessore Road (NH-112) is an active international trade route with specific commercial traffic windows. We schedule moves with designated timing windows to bypass border freight congestion, utilizing closed container vehicles with GPS tracking.</div>
                    </div>
                    <div class="hbr-faq-item">
                        <div class="hbr-faq-question">Do you provide relocation services for faculty and students in the Banipur educational zone?</div>
                        <div class="hbr-faq-answer">Yes, we regularly handle academic relocations for professors, sports instructors, and administrative staff at Banipur Post Graduate Training College and nearby residential academies, providing specialized packing for books and sports equipment.</div>
                    </div>
                    <div class="hbr-faq-item">
                        <div class="hbr-faq-question">Can you handle commercial wholesale shop and warehouse moves in Habra?</div>
                        <div class="hbr-faq-answer">Yes, Habra is one of Bengal's largest wholesale commercial trading hubs. We provide dedicated freight transport, palletized wrapping, and weekend overnight shifting for hardware stores, textile wholesalers, and consumer electronics distributors.</div>
                    </div>
                    <div class="hbr-faq-item">
                        <div class="hbr-faq-question">Do you offer car and bike carrier transport from Habra to other states?</div>
                        <div class="hbr-faq-answer">Yes, we provide covered car container and two-wheeler transport from Habra to Kolkata, Delhi, Bangalore, Hyderabad, Pune, and Ranchi, complete with door-to-door transit insurance and vehicle condition inspection reports.</div>
                    </div>
                    <div class="hbr-faq-item">
                        <div class="hbr-faq-question">What packaging materials are used for fragile glassware and electronics?</div>
                        <div class="hbr-faq-answer">We deploy heavy-duty 5-layer corrugated carton boxes, multi-layer air-bubble wraps, edge-protectors, shrink stretch wrap, and custom wooden crating for large flat-screen televisions, microwaves, and delicate crockery.</div>
                    </div>
                    <div class="hbr-faq-item">
                        <div class="hbr-faq-question">How much advance booking is recommended for moving in Habra?</div>
                        <div class="hbr-faq-answer">For intra-city shifting within Habra-Ashoknagar, 24 to 48 hours notice is sufficient. For interstate relocations to Bihar, Jharkhand, or southern India, we recommend confirming 3 to 4 days ahead for optimal truck allocation.</div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Sidebar Column -->
        <div class="hbr-sidebar-col">
            <div class="hbr-sidebar-box">
                <div class="hbr-sidebar-title">Book Habra Relocation</div>
                <p class="hbr-body-p">Speak directly with our local Habra operations supervisor for an instant price quote and scheduled on-site inspection.</p>
                <div class="hbr-highlight-box">
                    <div class="hbr-highlight-title">Direct Helpline</div>
                    <p class="hbr-highlight-desc"><strong>+91 9835565233</strong><br>Available 7 AM - 9:30 PM Daily</p>
                </div>
                <a href="tel:+919835565233" class="hbr-cta-button">Call Now for Free Quote</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="hbr-cta-button" style="background: #1e3a8a; margin-top: 10px;">Calculate Tariff Online</a>
            </div>

            <div class="hbr-sidebar-box">
                <div class="hbr-sidebar-title">Local Service Coverage</div>
                <p class="hbr-body-p">Prompt local pickup and delivery squads operating throughout Habra municipal wards and nearby commercial sectors:</p>
                <ul style="padding-left: 20px; font-size: 0.92rem; color: #475569; line-height: 1.8;">
                    <li>Joygachi & Jessore Road</li>
                    <li>Station Bazaar & Chaitanyapur</li>
                    <li>Ashoknagar Kalyangarh Hub</li>
                    <li>Banipur Educational Enclave</li>
                    <li>Hijalpukuria & Kamarthuba</li>
                    <li>Prafullanagar & Daharkunda</li>
                    <li>Nagarukhra Road Corridor</li>
                    <li>Gaighata & Bangaon Outposts</li>
                </ul>
            </div>

            <div class="hbr-sidebar-box">
                <div class="hbr-sidebar-title">Connected Regional Hubs</div>
                <p class="hbr-body-p">Direct transport routes connecting Habra with major cities across Bengal and neighboring states:</p>
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-barasat-kolkata" class="hbr-cluster-link">Movers in Barasat</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata" class="hbr-cluster-link">Movers in Kolkata</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-howrah" class="hbr-cluster-link">Movers in Howrah</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranaghat" class="hbr-cluster-link">Movers in Ranaghat</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Cluster Linking Section -->
    <section class="hbr-cluster-card">
        <h3 class="hbr-cluster-title">Habra Local Area Network & Connected Transit Hubs</h3>
        <p class="hbr-body-p">Shree Ashirwad Packers and Movers maintains active vehicle logistics and certified crews across all sectors of Habra and North 24 Parganas gateways:</p>
        <div class="hbr-cluster-grid">
            <span class="hbr-cluster-link">Joygachi Commercial</span>
            <span class="hbr-cluster-link">Station Road Market</span>
            <span class="hbr-cluster-link">Ashoknagar Township</span>
            <span class="hbr-cluster-link">Banipur Academic Hub</span>
            <span class="hbr-cluster-link">Hijalpukuria Residential</span>
            <span class="hbr-cluster-link">Kamarthuba Sector</span>
            <span class="hbr-cluster-link">Prafullanagar Enclave</span>
            <span class="hbr-cluster-link">Nagarukhra Road Area</span>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-barasat-kolkata" class="hbr-cluster-link">Barasat Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata" class="hbr-cluster-link">Kolkata Metro Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranaghat" class="hbr-cluster-link">Ranaghat Commercial</a>
            <a href="<?php echo SITE_BASE_URL; ?>/" class="hbr-cluster-link">Ranchi Headquarters</a>
        </div>
    </section>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
