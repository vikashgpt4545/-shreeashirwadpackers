<?php
/**
 * Page: Packers and Movers in Haldia
 * Description: Reliable household shifting, industrial port logistics, refinery employee relocation, and vehicle transport in Haldia, West Bengal.
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
    <title>Packers and Movers in Haldia | Safe Port & Industrial Moving</title>
    <meta name="description" content="Top-rated packers and movers in Haldia. Professional house shifting, IOCL refinery transfers, port officer relocations, and car bike carriers with zero-damage guarantee.">
    <meta name="keywords" content="packers and movers in haldia, movers and packers haldia, house shifting haldia, relocation services durgachak haldia, transport company haldia">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-haldia">
    <meta property="og:title" content="Packers and Movers in Haldia | Shree Ashirwad Packers">
    <meta property="og:description" content="Safe domestic shifting, petrochemical township moving, and vehicle transport across Haldia and Purba Medinipur with transparent rates.">
    <meta property="og:url" content="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-haldia">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <style>
        /* Scoped CSS for Haldia City Authority Hub - hld prefix */
        .hld-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px 40px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.6;
        }
        .hld-hero-section {
            background: linear-gradient(135deg, #1e3a8a 0%, #0d9488 100%);
            color: #ffffff;
            border-radius: 14px;
            padding: 40px 25px;
            margin-bottom: 30px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .hld-hero-title {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.25;
            color: #ffffff;
        }
        .hld-hero-subtitle {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: #e0f2fe;
            max-width: 900px;
        }
        .hld-meta-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }
        .hld-badge-item {
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.35);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            color: #ffffff;
        }
        .hld-main-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            margin-bottom: 35px;
        }
        @media (max-width: 900px) {
            .hld-main-grid {
                grid-template-columns: 1fr;
            }
        }
        .hld-content-col {
            min-width: 0;
        }
        .hld-sidebar-col {
            min-width: 0;
        }
        .hld-section {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 28px 24px;
            margin-bottom: 28px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .hld-section-title {
            font-size: 1.65rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 18px;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
        }
        .hld-lead-p {
            font-size: 1.05rem;
            color: #334155;
            margin-bottom: 16px;
        }
        .hld-body-p {
            font-size: 0.98rem;
            color: #475569;
            margin-bottom: 16px;
        }
        .hld-image-container {
            max-width: 580px;
            margin: 22px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border: 1px solid #cbd5e1;
            background: #f8fafc;
        }
        .hld-image-container img {
            width: 100%;
            max-height: 380px;
            object-fit: cover;
            display: block;
        }
        .hld-image-caption {
            padding: 10px 14px;
            font-size: 0.85rem;
            color: #475569;
            text-align: center;
            background: #f1f5f9;
            border-top: 1px solid #e2e8f0;
            font-weight: 500;
        }
        .hld-highlight-box {
            background: #f0fdf4;
            border-left: 4px solid #16a34a;
            padding: 16px 20px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
        }
        .hld-highlight-title {
            font-weight: 700;
            color: #166534;
            margin-bottom: 6px;
            font-size: 1.02rem;
        }
        .hld-highlight-desc {
            font-size: 0.94rem;
            color: #14532d;
            margin: 0;
        }
        .hld-card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 18px;
            margin: 22px 0;
        }
        .hld-feature-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 18px;
            transition: all 0.2s ease;
        }
        .hld-feature-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.06);
            border-color: #cbd5e1;
        }
        .hld-card-head {
            font-weight: 700;
            font-size: 1.05rem;
            color: #0f766e;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .hld-card-text {
            font-size: 0.92rem;
            color: #475569;
            margin: 0;
            line-height: 1.5;
        }
        .hld-table-wrap {
            overflow-x: auto;
            margin: 22px 0;
        }
        .hld-pricing-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.94rem;
        }
        .hld-pricing-table th {
            background: #1e3a8a;
            color: #ffffff;
            text-align: left;
            padding: 12px 14px;
            font-weight: 600;
            border: 1px solid #1e3a8a;
        }
        .hld-pricing-table td {
            padding: 11px 14px;
            border: 1px solid #e2e8f0;
            color: #334155;
        }
        .hld-pricing-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .hld-pricing-table tr:hover {
            background: #f1f5f9;
        }
        .hld-steps-container {
            display: flex;
            flex-direction: column;
            gap: 14px;
            margin: 20px 0;
        }
        .hld-step-item {
            display: flex;
            gap: 14px;
            align-items: flex-start;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 14px 16px;
        }
        .hld-step-number {
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
        .hld-step-body {
            flex: 1;
        }
        .hld-step-heading {
            font-weight: 700;
            font-size: 0.98rem;
            color: #1e293b;
            margin-bottom: 4px;
        }
        .hld-step-desc {
            font-size: 0.91rem;
            color: #475569;
            margin: 0;
        }
        .hld-faq-accordion {
            margin: 20px 0;
        }
        .hld-faq-item {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            margin-bottom: 12px;
            overflow: hidden;
        }
        .hld-faq-question {
            background: #f8fafc;
            padding: 14px 18px;
            font-weight: 600;
            font-size: 1rem;
            color: #1e3a8a;
            cursor: pointer;
            border-bottom: 1px solid #e2e8f0;
        }
        .hld-faq-answer {
            padding: 14px 18px;
            font-size: 0.93rem;
            color: #475569;
            background: #ffffff;
            line-height: 1.6;
        }
        .hld-sidebar-box {
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            padding: 22px 18px;
            margin-bottom: 24px;
        }
        .hld-sidebar-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 14px;
            border-bottom: 2px solid #0d9488;
            padding-bottom: 6px;
        }
        .hld-cta-button {
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
        .hld-cta-button:hover {
            background: #0f766e;
            color: #ffffff;
        }
        .hld-cluster-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 22px;
            margin-top: 30px;
        }
        .hld-cluster-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 14px;
        }
        .hld-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 12px;
        }
        .hld-cluster-link {
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
        .hld-cluster-link:hover {
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
        "name": "Shree Ashirwad Packers and Movers Haldia",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "@id": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-haldia#movingcompany",
        "url": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-haldia",
        "telephone": "+919334460424",
        "priceRange": "₹3,400 - ₹60,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near City Centre, Durgachak Port Road, Haldia",
            "addressLocality": "Haldia",
            "addressRegion": "West Bengal",
            "postalCode": "721602",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 22.0645,
            "longitude": 88.0698
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"
            ],
            "opens": "06:30",
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
                "name": "Haldia",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-haldia"
            }
        ]
    }
    </script>

    <!-- Schema 3: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Industrial Port & Household Relocation",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers Haldia"
        },
        "areaServed": {
            "@type": "AdministrativeArea",
            "name": "Haldia, Purba Medinipur District, West Bengal"
        },
        "description": "Comprehensive packing, home shifting, petrochemical township relocations, port officer transfers, and vehicle transport in Haldia."
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
                "name": "What are the average household shifting charges in Haldia?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting charges within Haldia (such as between Durgachak, Basudevpur, Sutahata, and IOCL Township) typically range between ₹3,400 and ₹6,800 for a 1 BHK, ₹5,800 to ₹11,500 for a 2 BHK, and ₹8,800 to ₹18,500 for a 3 BHK family house, covering packing materials, labor, and truck freight."
                }
            },
            {
                "@type": "Question",
                "name": "Do you handle transfers for IOCL refinery, Haldia Petrochemicals (HPL), and Port Trust employees?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we regularly execute corporate and public-sector employee relocations for Indian Oil Corporation (IOCL), Haldia Petrochemicals Limited (HPL), Syama Prasad Mookerjee Port Trust, and Mitsubishi Chemical. We provide official IBA-format bills, itemized inventories, and transit insurance for corporate reimbursement."
                }
            },
            {
                "@type": "Question",
                "name": "How do you protect household furniture against coastal humidity and sea salt in Haldia?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Given Haldia's coastal climate along the Hooghly estuary, our packing process features multi-layer moisture barriers including waterproof thermal stretch wrap, anti-humidity desiccant pouches inside cartons, and airtight plastic sealing to prevent rust and mold on wooden and metal furnishings."
                }
            },
            {
                "@type": "Question",
                "name": "Can you transport vehicles and four-wheelers from Haldia to other states?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we operate dedicated hydraulic enclosed car carrier trucks and secure motorcycle transport from Haldia to destinations across India via National Highway 116, complete with transit insurance and live tracking."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="hld-wrap">
    <!-- Hero Banner -->
    <section class="hld-hero-section">
        <h1 class="hld-hero-title">Packers and Movers in Haldia</h1>
        <p class="hld-hero-subtitle">Leading packing and moving company in Haldia. Professional household shifting, IOCL refinery staff transfers, port township moving, and vehicle transport across the maritime industrial corridor of West Bengal.</p>
        <div class="hld-meta-badges">
            <span class="hld-badge-item">✓ Premier Deep-Water Port Authority</span>
            <span class="hld-badge-item">✓ IOCL & Petrochemical Township Moves</span>
            <span class="hld-badge-item">✓ Marine Moisture & Salt-Resistant Packing</span>
            <span class="hld-badge-item">✓ National Highway 116 Direct Transit</span>
        </div>
    </section>

    <!-- Main Content Layout -->
    <div class="hld-main-grid">
        <div class="hld-content-col">
            <!-- Section 1: Overview & Strategic Hub Role -->
            <section class="hld-section">
                <h2 class="hld-section-title">Professional Packing and Moving Services in Haldia</h2>
                <p class="hld-lead-p">Haldia represents West Bengal's premier maritime trade gateway and heavy petrochemical industrial powerhouse. Located at the strategic confluence of the Hooghly and Haldi rivers in the Purba Medinipur district, Haldia functions as the state's principal deep-water port complex under the Syama Prasad Mookerjee Port Trust. Home to massive industrial operations including the Indian Oil Corporation (IOCL) Haldia Refinery, Haldia Petrochemicals Limited (HPL), Mitsubishi Chemical, Tata Chemicals, and Exide Industries, Haldia combines modern planned industrial townships with bustling commercial centers like Durgachak and City Centre. Relocating within or out of this dynamic industrial hub demands logistics partners of certified technical prowess, maritime packaging care, and absolute reliability.</p>
                
                <p class="hld-body-p">At Shree Ashirwad Packers and Movers, we bring over sixteen years of specialized relocation experience to Haldia. Whether you are a corporate engineer transferring from an IOCL residential township to a metropolitan headquarters, moving your family into an executive apartment in Durgachak, or dispatching household effects across the nation, our trained moving crews deliver flawless service. Operating in close coordination with our corporate headquarters via <a href="<?php echo SITE_BASE_URL; ?>/">Packers and Movers in Ranchi</a> and major state logistics hubs via <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata">Packers and Movers in Kolkata</a>, we guarantee prompt, secure door-to-door transit.</p>

                <div class="hld-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loading in container truck in Haldia">
                    <div class="hld-image-caption">Systematic loading of palletized cartons and furniture in Haldia port city.</div>
                </div>

                <div class="hld-highlight-box">
                    <div class="hld-highlight-title">Why Haldia Port & Refinery Families Trust Shree Ashirwad</div>
                    <div class="hld-highlight-desc">From adhering to strict gated industrial township entry regulations to deploying specialized anti-corrosion marine packaging that protects electronics against coastal sea air, our operations team sets the gold standard for industrial relocation.</div>
                </div>

                <p class="hld-body-p">Unlike unorganized local lorry contractors who rely on casual laborers, our team consists of permanently vetted packing craftsmen, certified carpenters, and background-checked drivers. We understand that your household possessions—from expensive electronics to heirloom furniture—carry deep emotional and financial worth. Every carton is labeled, cushioned, and handled with utmost care.</p>

                <p class="hld-body-p">Haldia's strategic location along National Highway 116 provides rapid four-lane connectivity to Kolaghat, where it connects directly into National Highway 16 (Golden Quadrilateral). This facilitates rapid inter-state dispatch toward Odisha, Andhra Pradesh, and Jharkhand without intermediate cargo handling.</p>
            </section>

            <!-- Section 2: Specialized Relocation Offerings -->
            <section class="hld-section">
                <h2 class="hld-section-title">Comprehensive Relocation Solutions Across Haldia</h2>
                <p class="hld-lead-p">Every moving assignment in Haldia presents distinct technical requirements depending on cargo volume, elevator availability, delicate electronics, and route geography. We deliver customized shifting packages tailored to the unique residential and industrial fabric of the port city.</p>

                <div class="hld-card-grid">
                    <div class="hld-feature-card">
                        <div class="hld-card-head">🏭 Refinery & Port Officer Moves</div>
                        <p class="hld-card-text">Specialized moving for engineers, executives, and officers from IOCL, HPL, and Port Trust townships with official documentation for corporate claims.</p>
                    </div>
                    <div class="hld-feature-card">
                        <div class="hld-card-head">🏠 Household Shifting</div>
                        <p class="hld-card-text">Complete residential relocation covering delicate chinaware, kitchen appliances, LED displays, wardrobes, and living room suites with room-specific unpacking.</p>
                    </div>
                    <div class="hld-feature-card">
                        <div class="hld-card-head">🏢 Commercial & Office Shifting</div>
                        <p class="hld-card-text">Systematic transport for shipping agency desks, maritime logistics offices, IT workstations, and commercial retail showrooms around Durgachak and City Centre.</p>
                    </div>
                    <div class="hld-feature-card">
                        <div class="hld-card-head">🚗 Vehicle Carrier (Car & Bike)</div>
                        <p class="hld-card-text">Enclosed hydraulic vehicle carriers and secured motorcycle transit equipped with custom tire chocks, heavy lashings, and comprehensive transit insurance.</p>
                    </div>
                </div>

                <div class="hld-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Bubble wrap and carton packaging materials in Haldia">
                    <div class="hld-image-caption">Multi-layered moisture-sealed protective packaging used in Haldia port city.</div>
                </div>

                <p class="hld-body-p">Our local service vehicles operate seamlessly across all key sub-localities in Haldia including Durgachak, Basudevpur, Sutahata, Ranichak, IOCL Township, HPL Township, Chiranjibpur, and City Centre. For western engineering connections, we coordinate with <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kharagpur">Packers and Movers in Kharagpur</a> and agricultural centers via <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bardhaman">Packers and Movers in Bardhaman</a>.</p>

                <p class="hld-body-p">For clients transferring to maritime commercial centers or the state capital, our regular fleet provides reliable transit connecting directly to <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata">Packers and Movers in Kolkata</a> and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-howrah">Packers and Movers in Howrah</a>, as well as northern links through <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-siliguri">Packers and Movers in Siliguri</a>.</p>
            </section>

            <!-- Section 3: Material Quality & Step-by-Step Methodology -->
            <section class="hld-section">
                <h2 class="hld-section-title">Packing Standards & Systematic Relocation Process</h2>
                <p class="hld-lead-p">The secret to zero transit damage lies in standardized packing protocols and systematic execution. In coastal Haldia, our crews arrive fully equipped with virgin packaging supplies engineered to resist humidity and road vibrations.</p>

                <div class="hld-steps-container">
                    <div class="hld-step-item">
                        <div class="hld-step-number">1</div>
                        <div class="hld-step-body">
                            <div class="hld-step-heading">Pre-Move Survey & Written Estimation</div>
                            <div class="hld-step-desc">A qualified relocation surveyor evaluates your household items, checks building staircase or elevator clearance, and delivers a transparent written estimate with zero hidden levies.</div>
                        </div>
                    </div>
                    <div class="hld-step-item">
                        <div class="hld-step-number">2</div>
                        <div class="hld-step-body">
                            <div class="hld-step-heading">Multi-Layer Protective Packaging</div>
                            <div class="hld-step-desc">Delicate glassware and kitchenware receive air-bubble cushioning, furniture is wrapped in corrugated sheets and stretch film, and mattresses are enclosed in dust-proof bags.</div>
                        </div>
                    </div>
                    <div class="hld-step-item">
                        <div class="hld-step-number">3</div>
                        <div class="hld-step-body">
                            <div class="hld-step-heading">Engineered Loading & Stacking</div>
                            <div class="hld-step-desc">Heavy items form the stable base in weatherproof container trucks, followed by labeled medium cartons and secured fragile items fastened with heavy-duty cargo straps.</div>
                        </div>
                    </div>
                    <div class="hld-step-item">
                        <div class="hld-step-number">4</div>
                        <div class="hld-step-body">
                            <div class="hld-step-heading">Unloading, Assembly & Placement</div>
                            <div class="hld-step-desc">Upon arrival at your new residence, our crew assists with room-specific unloading, unpacking, furniture reassembly, and debris clearance.</div>
                        </div>
                    </div>
                </div>

                <div class="hld-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Bed furniture dismantling and reassembly in Haldia">
                    <div class="hld-image-caption">Skilled carpenters dismantling and protective wrapping modular bed sets in Haldia.</div>
                </div>

                <p class="hld-body-p">Whether you are shifting from an executive villa in IOCL township or an apartment in Durgachak, our trained carpenters expertly dismantle king-size beds, modular wardrobes, and study units, securely bagging all fasteners and hardware so reassembly is quick and effortless.</p>

                <div class="hld-highlight-box">
                    <div class="hld-highlight-title">Zero-Scratch Guarantee for Modular Interiors</div>
                    <div class="hld-highlight-desc">All wooden and glass modular furniture pieces are shielded with multi-ply corrugated sheets, thick foam corner buffers, and heavy-gauge polythene wrapping before stepping out of your apartment doors.</div>
                </div>

                <p class="hld-body-p">We also supply heavy-duty hanging wardrobe carton boxes that allow your formal suits, designer dresses, and traditional ethnic wear to remain wrinkle-free on their original hangers throughout the moving journey.</p>
            </section>

            <!-- Section 4: Petrochemical Township & Port Logistics -->
            <section class="hld-section">
                <h2 class="hld-section-title">Specialized Industrial Township Operations in Haldia</h2>
                <p class="hld-lead-p">Operating inside Haldia's planned industrial townships requires complete familiarity with corporate security guidelines, safety gate permits, and shift schedules. Our field operations team handles all administrative formalities in advance.</p>

                <div class="hld-card-grid">
                    <div class="hld-feature-card">
                        <div class="hld-card-head">🛡️ Township Security Passes</div>
                        <p class="hld-card-text">We submit crew identity proofs, vehicle papers, and move-in/move-out manifests to IOCL, HPL, and Port Trust security offices for seamless gate clearance.</p>
                    </div>
                    <div class="hld-feature-card">
                        <div class="hld-card-head">🌊 Coastal Moisture Sealing</div>
                        <p class="hld-card-text">Because Haldia borders the Hooghly estuary, our packing utilizes moisture-barrier stretch films and silica desiccant packets to prevent saltwater rust and mold.</p>
                    </div>
                    <div class="hld-feature-card">
                        <div class="hld-card-head">🚚 Direct Highway Container Transit</div>
                        <p class="hld-card-text">Immediate access via National Highway 116 allows our sealed container trucks to maintain swift intercity connections toward Kolkata and Kharagpur.</p>
                    </div>
                    <div class="hld-feature-card">
                        <div class="hld-card-head">📑 Corporate Transfer Paperwork</div>
                        <p class="hld-card-text">We issue GST tax invoices, consignment notes (LR copy), itemized packing inventories, and transit insurance certificates required for public-sector claims.</p>
                    </div>
                </div>

                <div class="hld-highlight-box">
                    <div class="hld-highlight-title">All-Weather Waterproof Protection</div>
                    <div class="hld-highlight-desc">Our closed container trucks are equipped with watertight rubber gaskets and heavy tarpaulin linings, ensuring 100% moisture protection during monsoon coastal downpours.</div>
                </div>

                <p class="hld-body-p">For long-distance corridors heading toward our company headquarters via <a href="<?php echo SITE_BASE_URL; ?>/">Packers and Movers in Ranchi</a> or western industrial hubs via <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-asansol">Packers and Movers in Asansol</a>, our dedicated fleet ensures direct transit without intermediate transshipment.</p>

                <p class="hld-body-p">We also provide optional value-added services such as pre-move deep cleaning, wall mount television bracket de-installation, split air conditioner gas sealing and dismantling by certified HVAC technicians, and short-term secure household warehousing at fully covered, CCTV-monitored storage facilities.</p>
            </section>

            <!-- Section 5: Transparent Tariff Structure -->
            <section class="hld-section">
                <h2 class="hld-section-title">Transparent Price Estimator for Haldia Relocations</h2>
                <p class="hld-lead-p">We believe that honest moving starts with crystal-clear pricing. Below is an indicative rate chart for local relocations within Haldia municipal limits. For customized cross-state or long-distance tariffs, explore our interactive <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">packers and movers charges calculator</a>.</p>

                <div class="hld-table-wrap">
                    <table class="hld-pricing-table">
                        <thead>
                            <tr>
                                <th>Moving Type / Configuration</th>
                                <th>Packing Material Quality</th>
                                <th>Loading & Unloading</th>
                                <th>Estimated Tariff Range</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1 BHK Apartment Shifting</td>
                                <td>Standard Dual-Layer Corrugated</td>
                                <td>Included (2-3 Crew)</td>
                                <td>₹3,400 - ₹6,800</td>
                            </tr>
                            <tr>
                                <td>2 BHK Residence Shifting</td>
                                <td>Premium Multi-Layer + Bubble Wrap</td>
                                <td>Included (3-4 Crew)</td>
                                <td>₹5,800 - ₹11,500</td>
                            </tr>
                            <tr>
                                <td>3 BHK / Executive Duplex</td>
                                <td>Ultra-Safe 5-Layer + Edge Protectors</td>
                                <td>Included (4-6 Crew)</td>
                                <td>₹8,800 - ₹18,500</td>
                            </tr>
                            <tr>
                                <td>Two-Wheeler Transport</td>
                                <td>Cardboard Casing & Bubble Wrap</td>
                                <td>Ramp Loading Included</td>
                                <td>₹2,200 - ₹4,800</td>
                            </tr>
                            <tr>
                                <td>Four-Wheeler Sedan / SUV</td>
                                <td>Enclosed Dedicated Car Carrier</td>
                                <td>Wheel-Lash Tied & Insured</td>
                                <td>₹7,500 - ₹19,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="hld-highlight-box">
                    <div class="hld-highlight-title">Zero Hidden Surcharges Promise</div>
                    <div class="hld-highlight-desc">Every formal quotation from Shree Ashirwad Packers includes packing materials, labor, transport, toll taxes, and standard insurance with complete clarity upfront.</div>
                </div>

                <div class="hld-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Haldia">
                    <div class="hld-image-caption">Dedicated door-to-door closed carrier truck operating in Haldia.</div>
                </div>

                <p class="hld-body-p">Whether you are relocating locally within Haldia or moving across state lines to Odisha, Jharkhand, Bihar, or Delhi NCR, our GPS-enabled container vehicles provide regular tracking updates and guaranteed on-time delivery.</p>

                <p class="hld-body-p">For families in transitional housing or corporate clients renovating premises, we provide secure short-term and long-term warehousing facilities in Haldia. Our warehouse spaces feature 24/7 CCTV surveillance, fire prevention systems, raised concrete plinths to prevent monsoon water logging, and pest-controlled wooden storage pallets.</p>
            </section>

            <!-- Section 6: Frequently Asked Questions -->
            <section class="hld-section">
                <h2 class="hld-section-title">Frequently Asked Questions — Haldia Relocation</h2>
                <div class="hld-faq-accordion">
                    <div class="hld-faq-item">
                        <div class="hld-faq-question">What are the average household shifting charges in Haldia?</div>
                        <div class="hld-faq-answer">Local shifting charges within Haldia (such as between Durgachak, Basudevpur, Sutahata, and IOCL Township) typically range between ₹3,400 and ₹6,800 for a 1 BHK, ₹5,800 to ₹11,500 for a 2 BHK, and ₹8,800 to ₹18,500 for a 3 BHK family house, covering packing materials, labor, and truck freight.</div>
                    </div>
                    <div class="hld-faq-item">
                        <div class="hld-faq-question">Do you handle transfers for IOCL refinery, Haldia Petrochemicals (HPL), and Port Trust employees?</div>
                        <div class="hld-faq-answer">Yes, we regularly execute corporate and public-sector employee relocations for Indian Oil Corporation (IOCL), Haldia Petrochemicals Limited (HPL), Syama Prasad Mookerjee Port Trust, and Mitsubishi Chemical. We provide official IBA-format bills, itemized inventories, and transit insurance for corporate reimbursement.</div>
                    </div>
                    <div class="hld-faq-item">
                        <div class="hld-faq-question">How do you protect household furniture against coastal humidity and sea salt in Haldia?</div>
                        <div class="hld-faq-answer">Given Haldia's coastal climate along the Hooghly estuary, our packing process features multi-layer moisture barriers including waterproof thermal stretch wrap, anti-humidity desiccant pouches inside cartons, and airtight plastic sealing to prevent rust and mold on wooden and metal furnishings.</div>
                    </div>
                    <div class="hld-faq-item">
                        <div class="hld-faq-question">Can you transport vehicles and four-wheelers from Haldia to other states?</div>
                        <div class="hld-faq-answer">Yes, we operate dedicated hydraulic enclosed car carrier trucks and secure motorcycle transport from Haldia to destinations across India via National Highway 116, complete with transit insurance and live tracking.</div>
                    </div>
                </div>
            </section>

            <!-- Connected Localities Cluster Module -->
            <div class="hld-cluster-card">
                <h3 class="hld-cluster-title">Connected Localities & Regional Service Hubs</h3>
                <p class="hld-body-p">Explore our verified packing and moving networks connecting Haldia across West Bengal and Eastern India:</p>
                <div class="hld-cluster-grid">
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata" class="hld-cluster-link">Kolkata Authority Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-howrah" class="hld-cluster-link">Howrah City Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kharagpur" class="hld-cluster-link">Kharagpur Railway Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bardhaman" class="hld-cluster-link">Bardhaman City Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-durgapur" class="hld-cluster-link">Durgapur Industrial Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-asansol" class="hld-cluster-link">Asansol Rail Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-siliguri" class="hld-cluster-link">Siliguri North Bengal Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/" class="hld-cluster-link">Ranchi Corporate HQ</a>
                </div>
            </div>
        </div>

        <!-- Sidebar Column -->
        <aside class="hld-sidebar-col">
            <div class="hld-sidebar-box">
                <h3 class="hld-sidebar-title">Haldia Branch Desk</h3>
                <p class="hld-body-p">Planning a move in Haldia, Durgachak, or IOCL Township? Contact our local operations desk for an instant quotation.</p>
                <ul style="padding-left: 20px; margin-bottom: 15px; font-size: 0.93rem; color: #334155;">
                    <li><strong>Desk Address:</strong> Near City Centre, Durgachak, Haldia</li>
                    <li><strong>Service Hours:</strong> 6:30 AM - 9:30 PM (Daily)</li>
                    <li><strong>Helpline:</strong> +91 9334460424</li>
                    <li><strong>Email:</strong> info@shreeashirwadpackers.com</li>
                </ul>
                <a href="<?php echo SITE_BASE_URL; ?>/contact" class="hld-cta-button">Request Free Moving Quote</a>
            </div>

            <div class="hld-sidebar-box">
                <h3 class="hld-sidebar-title">Key Coverage Localities</h3>
                <ul style="padding-left: 20px; font-size: 0.91rem; color: #475569; line-height: 1.8;">
                    <li>Durgachak Commercial Center</li>
                    <li>IOCL Refinery Residential Township</li>
                    <li>Haldia Petrochemicals (HPL) Colony</li>
                    <li>City Centre Commercial Zone</li>
                    <li>Basudevpur & Sutahata Townships</li>
                    <li>Ranichak & Chiranjibpur</li>
                    <li>Haldia Port Trust Officer Enclave</li>
                    <li>National Highway 116 Corridor</li>
                </ul>
            </div>
        </aside>
    </div>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>
</body>
</html>
