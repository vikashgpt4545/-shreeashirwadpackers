<?php
/**
 * Page: Packers and Movers in Bankura
 * Description: Dependable household shifting, medical staff relocation, handicraft trade transport, and vehicle moving in Bankura.
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
    <title>Packers and Movers in Bankura | Reliable Moving Services</title>
    <meta name="description" content="Top packers and movers in Bankura. Verified house shifting, Bankura Sammilani Medical College moving, handicraft trade logistics, and car bike carriers with zero damage.">
    <meta name="keywords" content="packers and movers in bankura, movers and packers bankura, house shifting bankura, relocation services machantala bankura, transport company bankura">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bankura">
    <meta property="og:title" content="Packers and Movers in Bankura | Shree Ashirwad Packers">
    <meta property="og:description" content="Safe domestic shifting, medical campus moving, and vehicle transport across Bankura and south-western West Bengal with transparent rates.">
    <meta property="og:url" content="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bankura">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <style>
        /* Scoped CSS for Bankura City Authority Hub - bnk prefix */
        .bnk-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px 40px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.6;
        }
        .bnk-hero-section {
            background: linear-gradient(135deg, #1e3a8a 0%, #0d9488 100%);
            color: #ffffff;
            border-radius: 14px;
            padding: 40px 25px;
            margin-bottom: 30px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .bnk-hero-title {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.25;
            color: #ffffff;
        }
        .bnk-hero-subtitle {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: #e0f2fe;
            max-width: 900px;
        }
        .bnk-meta-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }
        .bnk-badge-item {
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.35);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            color: #ffffff;
        }
        .bnk-main-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            margin-bottom: 35px;
        }
        @media (max-width: 900px) {
            .bnk-main-grid {
                grid-template-columns: 1fr;
            }
        }
        .bnk-content-col {
            min-width: 0;
        }
        .bnk-sidebar-col {
            min-width: 0;
        }
        .bnk-section {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 28px 24px;
            margin-bottom: 28px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .bnk-section-title {
            font-size: 1.65rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 18px;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
        }
        .bnk-lead-p {
            font-size: 1.05rem;
            color: #334155;
            margin-bottom: 16px;
        }
        .bnk-body-p {
            font-size: 0.98rem;
            color: #475569;
            margin-bottom: 16px;
        }
        .bnk-image-container {
            max-width: 580px;
            margin: 22px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border: 1px solid #cbd5e1;
            background: #f8fafc;
        }
        .bnk-image-container img {
            width: 100%;
            max-height: 380px;
            object-fit: cover;
            display: block;
        }
        .bnk-image-caption {
            padding: 10px 14px;
            font-size: 0.85rem;
            color: #475569;
            text-align: center;
            background: #f1f5f9;
            border-top: 1px solid #e2e8f0;
            font-weight: 500;
        }
        .bnk-highlight-box {
            background: #f0fdf4;
            border-left: 4px solid #16a34a;
            padding: 16px 20px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
        }
        .bnk-highlight-title {
            font-weight: 700;
            color: #166534;
            margin-bottom: 6px;
            font-size: 1.02rem;
        }
        .bnk-highlight-desc {
            font-size: 0.94rem;
            color: #14532d;
            margin: 0;
        }
        .bnk-card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 18px;
            margin: 22px 0;
        }
        .bnk-feature-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 18px;
            transition: all 0.2s ease;
        }
        .bnk-feature-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.06);
            border-color: #cbd5e1;
        }
        .bnk-card-head {
            font-weight: 700;
            font-size: 1.05rem;
            color: #0f766e;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .bnk-card-text {
            font-size: 0.92rem;
            color: #475569;
            margin: 0;
            line-height: 1.5;
        }
        .bnk-table-wrap {
            overflow-x: auto;
            margin: 22px 0;
        }
        .bnk-pricing-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.94rem;
        }
        .bnk-pricing-table th {
            background: #1e3a8a;
            color: #ffffff;
            text-align: left;
            padding: 12px 14px;
            font-weight: 600;
            border: 1px solid #1e3a8a;
        }
        .bnk-pricing-table td {
            padding: 11px 14px;
            border: 1px solid #e2e8f0;
            color: #334155;
        }
        .bnk-pricing-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .bnk-pricing-table tr:hover {
            background: #f1f5f9;
        }
        .bnk-steps-container {
            display: flex;
            flex-direction: column;
            gap: 14px;
            margin: 20px 0;
        }
        .bnk-step-item {
            display: flex;
            gap: 14px;
            align-items: flex-start;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 14px 16px;
        }
        .bnk-step-number {
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
        .bnk-step-body {
            flex: 1;
        }
        .bnk-step-heading {
            font-weight: 700;
            font-size: 0.98rem;
            color: #1e293b;
            margin-bottom: 4px;
        }
        .bnk-step-desc {
            font-size: 0.91rem;
            color: #475569;
            margin: 0;
        }
        .bnk-faq-accordion {
            margin: 20px 0;
        }
        .bnk-faq-item {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            margin-bottom: 12px;
            overflow: hidden;
        }
        .bnk-faq-question {
            background: #f8fafc;
            padding: 14px 18px;
            font-weight: 600;
            font-size: 1rem;
            color: #1e3a8a;
            cursor: pointer;
            border-bottom: 1px solid #e2e8f0;
        }
        .bnk-faq-answer {
            padding: 14px 18px;
            font-size: 0.93rem;
            color: #475569;
            background: #ffffff;
            line-height: 1.6;
        }
        .bnk-sidebar-box {
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            padding: 22px 18px;
            margin-bottom: 24px;
        }
        .bnk-sidebar-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 14px;
            border-bottom: 2px solid #0d9488;
            padding-bottom: 6px;
        }
        .bnk-cta-button {
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
        .bnk-cta-button:hover {
            background: #0f766e;
            color: #ffffff;
        }
        .bnk-cluster-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 22px;
            margin-top: 30px;
        }
        .bnk-cluster-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 14px;
        }
        .bnk-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 12px;
        }
        .bnk-cluster-link {
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
        .bnk-cluster-link:hover {
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
        "name": "Shree Ashirwad Packers and Movers Bankura",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "@id": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bankura#movingcompany",
        "url": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bankura",
        "telephone": "+919334460424",
        "priceRange": "₹3,200 - ₹55,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Machantala More, Katjuridanga Main Road",
            "addressLocality": "Bankura",
            "addressRegion": "West Bengal",
            "postalCode": "722101",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 23.2313,
            "longitude": 87.0784
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
                "name": "Bankura",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bankura"
            }
        ]
    }
    </script>

    <!-- Schema 3: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Medical Staff & Household Relocation",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers Bankura"
        },
        "areaServed": {
            "@type": "AdministrativeArea",
            "name": "Bankura, Bankura District, West Bengal"
        },
        "description": "Comprehensive packing, home shifting, Bankura Sammilani Medical College staff moving, handicraft trade transport, and vehicle moving in Bankura."
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
                "name": "What are the average household shifting charges in Bankura?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting charges within Bankura (such as between Machantala, Katjuridanga, Chandmaridanga, and School Danga) typically range between ₹3,200 and ₹6,500 for a 1 BHK, ₹5,500 to ₹11,000 for a 2 BHK, and ₹8,500 to ₹17,500 for a 3 BHK family house, covering packaging, labor, and transport."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide moving services for doctors and staff at Bankura Sammilani Medical College?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we regularly handle relocation for senior doctors, consultants, nursing staff, and medical faculty from Bankura Sammilani Medical College and Hospital, offering flexible weekend schedules and specialized handling for delicate books and medical instruments."
                }
            },
            {
                "@type": "Question",
                "name": "Can you safely transport terracotta handicrafts and Baluchari silk merchandise from Bankura?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Bankura and nearby Bishnupur are famous for Panchmura terracotta horses and Baluchari silk sarees. We utilize custom wooden crates lined with dense foam for fragile terracotta craft items and moisture-proof sealed cartons for luxury silk textiles."
                }
            },
            {
                "@type": "Question",
                "name": "Can you shift household goods between Bankura, Durgapur, Asansol, and Kharagpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Bankura is centrally situated along National Highway 14. We operate regular direct moving container trucks connecting Bankura northward to Durgapur, Raniganj, and Asansol, and southward to Midnapore and Kharagpur."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="bnk-wrap">
    <!-- Hero Banner -->
    <section class="bnk-hero-section">
        <h1 class="bnk-hero-title">Packers and Movers in Bankura</h1>
        <p class="bnk-hero-subtitle">Leading packing and moving company in Bankura. Dependable household shifting, Bankura Sammilani Medical College moving, handicraft trade logistics, and vehicle carriers along National Highway 14.</p>
        <div class="bnk-meta-badges">
            <span class="bnk-badge-item">✓ Bankura District Regional Authority</span>
            <span class="bnk-badge-item">✓ National Highway 14 Transit Axis</span>
            <span class="bnk-badge-item">✓ Medical College & University Staff Moving</span>
            <span class="bnk-badge-item">✓ Multi-Layer Protective Packaging</span>
        </div>
    </section>

    <!-- Main Content Layout -->
    <div class="bnk-main-grid">
        <div class="bnk-content-col">
            <!-- Section 1: Overview & Strategic Hub Role -->
            <section class="bnk-section">
                <h2 class="bnk-section-title">Reliable Relocation Services in Bankura</h2>
                <p class="bnk-lead-p">Bankura serves as the historic administrative, cultural, and trading center of the Bankura district in south-western West Bengal. Renowned globally for its distinctive red soil (Rarh region) culture, iconic terracotta horses from Panchmura, and close proximity to the historic temple town of Bishnupur, Bankura blends heritage craftsmanship with expanding healthcare, education, and commerce. Anchored by the prestigious Bankura Sammilani Medical College and Hospital, Bankura University, and bustling wholesale commercial areas around Machantala and Nutanganj, Bankura demands moving services that embody gentle craftsmanship, absolute safety, and robust highway transit capability.</p>
                
                <p class="bnk-body-p">At Shree Ashirwad Packers and Movers, we bring over sixteen years of specialized packing experience to Bankura. Whether you are relocating your family between apartments in Katjuridanga, moving an academic faculty residence from School Danga, or transferring to industrial cities in Paschim Bardhaman, our trained moving crews execute every step with precision. Coordinated closely with our corporate headquarters via <a href="<?php echo SITE_BASE_URL; ?>/">Packers and Movers in Ranchi</a> and state capital logistics via <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata">Packers and Movers in Kolkata</a>, we provide unified door-to-door relocation across India.</p>

                <div class="bnk-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loading in container truck in Bankura">
                    <div class="bnk-image-caption">Systematic loading of household goods and cartons in Bankura.</div>
                </div>

                <div class="bnk-highlight-box">
                    <div class="bnk-highlight-title">Why Bankura Medical & Business Families Choose Us</div>
                    <div class="bnk-highlight-desc">From navigating dense commercial lanes around Machantala to deploying dedicated container freight along National Highway 14, our operations team ensures strict adherence to transit schedules and zero cargo damage.</div>
                </div>

                <p class="bnk-body-p">Unlike unorganized local lorry contractors who depend on untrained day-laborers, our team consists of permanent, vetted packing technicians, certified carpenters, and background-checked drivers. We understand that your household possessions—from delicate terracotta artwork to heavy wooden wardrobes and modern smart appliances—carry deep emotional and financial worth. Every carton is packed with meticulous care.</p>

                <p class="bnk-body-p">Bankura's strategic alignment along National Highway 14 provides vital direct connectivity connecting northward to the industrial powerhouse of Durgapur and Asansol, and southward toward Midnapore and Kharagpur. Our modern fleet of closed container trucks navigates these highway corridors daily, ensuring prompt transit times without intermediate cargo handling risks.</p>
            </section>

            <!-- Section 2: Specialized Relocation Offerings -->
            <section class="bnk-section">
                <h2 class="bnk-section-title">Comprehensive Relocation Solutions Across Bankura</h2>
                <p class="bnk-lead-p">Every moving requirement in Bankura has distinct characteristics based on cargo volume, elevator access, delicate glassware, and transit destination. We deliver customized shifting packages tailored to the unique residential and commercial landscape of Bankura.</p>

                <div class="bnk-card-grid">
                    <div class="bnk-feature-card">
                        <div class="bnk-card-head">🏠 Household Shifting</div>
                        <p class="bnk-card-text">Complete home relocation covering delicate chinaware, kitchen appliances, LED displays, wardrobes, and living room suites with room-specific unpacking.</p>
                    </div>
                    <div class="bnk-feature-card">
                        <div class="bnk-card-head">🩺 Medical College & Faculty Moves</div>
                        <p class="bnk-card-text">Specialized moving for doctors, professors, and medical staff from Bankura Sammilani Medical College with safe book and diagnostic instrument packaging.</p>
                    </div>
                    <div class="bnk-feature-card">
                        <div class="bnk-card-head">🏺 Terracotta & Silk Trade Logistics</div>
                        <p class="bnk-card-text">Customized shock-proof wooden crating for delicate Panchmura terracotta craft, Bishnupur silk textiles, and commercial retail showrooms.</p>
                    </div>
                    <div class="bnk-feature-card">
                        <div class="bnk-card-head">🚗 Vehicle Carrier (Car & Bike)</div>
                        <p class="bnk-card-text">Enclosed vehicle carriers and secured motorcycle transport with custom wheel chocks, heavy lashings, and comprehensive transit insurance.</p>
                    </div>
                </div>

                <div class="bnk-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Bubble wrap and carton packaging materials in Bankura">
                    <div class="bnk-image-caption">Multi-layered protective packing materials used for fragile household items in Bankura.</div>
                </div>

                <p class="bnk-body-p">Our local service vehicles operate seamlessly across all key sub-localities in Bankura including Machantala, Katjuridanga, Chandmaridanga, School Danga, Nutanganj, Gobindanagar, Lokepur, and Lalbazar. For southern academic and railway connections, we coordinate with <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-midnapore">Packers and Movers in Midnapore</a> and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kharagpur">Packers and Movers in Kharagpur</a>.</p>

                <p class="bnk-body-p">For clients transferring northwards into the industrial coal and steel belt, our regular transport fleet ensures dependable connectivity to <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-durgapur">Packers and Movers in Durgapur</a> and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-asansol">Packers and Movers in Asansol</a>, as well as agricultural links via <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bardhaman">Packers and Movers in Bardhaman</a>.</p>
            </section>

            <!-- Section 3: Material Quality & Step-by-Step Methodology -->
            <section class="bnk-section">
                <h2 class="bnk-section-title">Packing Standards & Systematic Relocation Process</h2>
                <p class="bnk-lead-p">The secret to zero transit damage lies in standardized packing protocols and systematic execution. In Bankura, our crews arrive fully equipped with virgin packaging materials designed to withstand thermal variations and road vibrations.</p>

                <div class="bnk-steps-container">
                    <div class="bnk-step-item">
                        <div class="bnk-step-number">1</div>
                        <div class="bnk-step-body">
                            <div class="bnk-step-heading">Pre-Move Survey & Written Estimation</div>
                            <div class="bnk-step-desc">A qualified relocation surveyor evaluates your household items, checks building staircase or elevator clearance, and delivers a transparent written estimate with zero hidden levies.</div>
                        </div>
                    </div>
                    <div class="bnk-step-item">
                        <div class="bnk-step-number">2</div>
                        <div class="bnk-step-body">
                            <div class="bnk-step-heading">Multi-Layer Protective Packaging</div>
                            <div class="bnk-step-desc">Delicate glassware and kitchenware receive air-bubble cushioning, furniture is wrapped in corrugated sheets and stretch film, and mattresses are enclosed in dust-proof bags.</div>
                        </div>
                    </div>
                    <div class="bnk-step-item">
                        <div class="bnk-step-number">3</div>
                        <div class="bnk-step-body">
                            <div class="bnk-step-heading">Engineered Loading & Stacking</div>
                            <div class="bnk-step-desc">Heavy items form the stable base in weatherproof container trucks, followed by labeled medium cartons and secured fragile items fastened with heavy-duty cargo straps.</div>
                        </div>
                    </div>
                    <div class="bnk-step-item">
                        <div class="bnk-step-number">4</div>
                        <div class="bnk-step-body">
                            <div class="bnk-step-heading">Unloading, Assembly & Placement</div>
                            <div class="bnk-step-desc">Upon arrival at your new residence, our crew assists with room-specific unloading, unpacking, furniture reassembly, and debris clearance.</div>
                        </div>
                    </div>
                </div>

                <div class="bnk-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Bed furniture dismantling and reassembly in Bankura">
                    <div class="bnk-image-caption">Skilled carpenters dismantling and protective wrapping modular bed sets in Bankura.</div>
                </div>

                <p class="bnk-body-p">Whether you are shifting from an independent ancestral house in Lokepur or an apartment near Katjuridanga, our trained carpenters expertly dismantle king-size beds, modular wardrobes, and study units, securely bagging all fasteners and hardware so reassembly is quick and effortless.</p>

                <div class="bnk-highlight-box">
                    <div class="bnk-highlight-title">Zero-Scratch Guarantee for Modular Interiors</div>
                    <div class="bnk-highlight-desc">All wooden and glass modular furniture pieces are shielded with multi-ply corrugated sheets, thick foam corner buffers, and heavy-gauge polythene wrapping before stepping out of your apartment doors.</div>
                </div>

                <p class="bnk-body-p">We also supply heavy-duty hanging wardrobe carton boxes that allow your formal suits, designer dresses, and traditional ethnic wear to remain wrinkle-free on their original hangers throughout the moving journey.</p>
            </section>

            <!-- Section 4: Feeder Operations & Highway Logistics -->
            <section class="bnk-section">
                <h2 class="bnk-section-title">Specialized Feeder Operations & Highway Transit in Bankura</h2>
                <p class="bnk-lead-p">Relocating in Bankura requires managing narrow traditional market lanes around Nutanganj and Machantala while maintaining direct highway connections along NH 14. Our team uses specialized equipment to overcome urban congestion.</p>

                <div class="bnk-card-grid">
                    <div class="bnk-feature-card">
                        <div class="bnk-card-head">🚚 Compact Feeder Shuttles</div>
                        <p class="bnk-card-text">We deploy mini-trucks for dense residential alleys in Nutanganj and School Danga, ferrying packed items safely to our highway container trucks.</p>
                    </div>
                    <div class="bnk-feature-card">
                        <div class="bnk-card-head">🛣️ NH 14 Direct Corridor Transit</div>
                        <p class="bnk-card-text">Immediate access onto National Highway 14 enables swift long-distance container truck dispatch toward Durgapur, Asansol, and Kharagpur.</p>
                    </div>
                    <div class="bnk-feature-card">
                        <div class="bnk-card-head">📑 Medical & Government Documentation</div>
                        <p class="bnk-card-text">We supply IBA-approved consignment bills, transit insurance documents, and certified packing inventories for medical college and government claim settlements.</p>
                    </div>
                    <div class="bnk-feature-card">
                        <div class="bnk-card-head">🏺 Terracotta Art Protective Crating</div>
                        <p class="bnk-card-text">Custom wooden crates lined with thick foam buffers for fragile terracotta horse sculptures, clay plaques, and decorative artifacts.</p>
                    </div>
                </div>

                <div class="bnk-highlight-box">
                    <div class="bnk-highlight-title">All-Weather Waterproof Protection</div>
                    <div class="bnk-highlight-desc">Because south-western Bengal experiences intense summer weather followed by heavy monsoons, our container trucks are fitted with watertight rubber gaskets, ensuring complete dryness for all household goods.</div>
                </div>

                <p class="bnk-body-p">For long-distance corridors heading toward our company headquarters via <a href="<?php echo SITE_BASE_URL; ?>/">Packers and Movers in Ranchi</a> or metropolitan centers via <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-howrah">Packers and Movers in Howrah</a>, our dedicated fleet ensures direct transit without intermediate transshipment.</p>

                <p class="bnk-body-p">We also provide optional value-added services such as pre-move deep cleaning, wall mount television bracket de-installation, split air conditioner gas sealing and dismantling by certified HVAC technicians, and short-term secure household warehousing at fully covered, CCTV-monitored storage facilities.</p>
            </section>

            <!-- Section 5: Transparent Tariff Structure -->
            <section class="bnk-section">
                <h2 class="bnk-section-title">Transparent Price Estimator for Bankura Relocations</h2>
                <p class="bnk-lead-p">We believe that honest moving starts with crystal-clear pricing. Below is an indicative rate chart for local relocations within Bankura municipal limits. For customized cross-state or long-distance tariffs, explore our interactive <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">packers and movers charges calculator</a>.</p>

                <div class="bnk-table-wrap">
                    <table class="bnk-pricing-table">
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
                                <td>₹3,200 - ₹6,500</td>
                            </tr>
                            <tr>
                                <td>2 BHK Residence Shifting</td>
                                <td>Premium Multi-Layer + Bubble Wrap</td>
                                <td>Included (3-4 Crew)</td>
                                <td>₹5,500 - ₹11,000</td>
                            </tr>
                            <tr>
                                <td>3 BHK / Executive House</td>
                                <td>Ultra-Safe 5-Layer + Edge Protectors</td>
                                <td>Included (4-6 Crew)</td>
                                <td>₹8,500 - ₹17,500</td>
                            </tr>
                            <tr>
                                <td>Two-Wheeler Transport</td>
                                <td>Cardboard Casing & Bubble Wrap</td>
                                <td>Ramp Loading Included</td>
                                <td>₹2,000 - ₹4,500</td>
                            </tr>
                            <tr>
                                <td>Four-Wheeler Sedan / SUV</td>
                                <td>Enclosed Dedicated Car Carrier</td>
                                <td>Wheel-Lash Tied & Insured</td>
                                <td>₹7,500 - ₹18,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="bnk-highlight-box">
                    <div class="bnk-highlight-title">Zero Hidden Surcharges Promise</div>
                    <div class="bnk-highlight-desc">Every formal quotation from Shree Ashirwad Packers includes packing materials, labor, transport, toll taxes, and standard insurance with complete clarity upfront.</div>
                </div>

                <div class="bnk-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Bankura">
                    <div class="bnk-image-caption">Dedicated door-to-door closed carrier truck operating in Bankura.</div>
                </div>

                <p class="bnk-body-p">Whether you are relocating locally within Bankura or moving across state lines to Bihar, Jharkhand, Odisha, or Delhi NCR, our GPS-enabled container vehicles provide regular tracking updates and guaranteed on-time delivery.</p>

                <p class="bnk-body-p">For families in transitional housing or professionals renovating premises, we provide secure short-term and long-term warehousing facilities in Bankura. Our warehouse spaces feature 24/7 CCTV surveillance, fire prevention systems, raised concrete plinths, and pest-controlled wooden storage pallets.</p>
            </section>

            <!-- Section 6: Frequently Asked Questions -->
            <section class="bnk-section">
                <h2 class="bnk-section-title">Frequently Asked Questions — Bankura Relocation</h2>
                <div class="bnk-faq-accordion">
                    <div class="bnk-faq-item">
                        <div class="bnk-faq-question">What are the average household shifting charges in Bankura?</div>
                        <div class="bnk-faq-answer">Local shifting charges within Bankura (such as between Machantala, Katjuridanga, Chandmaridanga, and School Danga) typically range between ₹3,200 and ₹6,500 for a 1 BHK, ₹5,500 to ₹11,000 for a 2 BHK, and ₹8,500 to ₹17,500 for a 3 BHK family house, covering packaging, labor, and transport.</div>
                    </div>
                    <div class="bnk-faq-item">
                        <div class="bnk-faq-question">Do you provide moving services for doctors and staff at Bankura Sammilani Medical College?</div>
                        <div class="bnk-faq-answer">Yes, we regularly handle relocation for senior doctors, consultants, nursing staff, and medical faculty from Bankura Sammilani Medical College and Hospital, offering flexible weekend schedules and specialized handling for delicate books and medical instruments.</div>
                    </div>
                    <div class="bnk-faq-item">
                        <div class="bnk-faq-question">Can you safely transport terracotta handicrafts and Baluchari silk merchandise from Bankura?</div>
                        <div class="bnk-faq-answer">Yes, Bankura and nearby Bishnupur are famous for Panchmura terracotta horses and Baluchari silk sarees. We utilize custom wooden crates lined with dense foam for fragile terracotta craft items and moisture-proof sealed cartons for luxury silk textiles.</div>
                    </div>
                    <div class="bnk-faq-item">
                        <div class="bnk-faq-question">Can you shift household goods between Bankura, Durgapur, Asansol, and Kharagpur?</div>
                        <div class="bnk-faq-answer">Yes, Bankura is centrally situated along National Highway 14. We operate regular direct moving container trucks connecting Bankura northward to Durgapur, Raniganj, and Asansol, and southward to Midnapore and Kharagpur.</div>
                    </div>
                </div>
            </section>

            <!-- Connected Localities Cluster Module -->
            <div class="bnk-cluster-card">
                <h3 class="bnk-cluster-title">Connected Localities & Regional Service Hubs</h3>
                <p class="bnk-body-p">Explore our verified packing and moving networks connecting Bankura across West Bengal and Eastern India:</p>
                <div class="bnk-cluster-grid">
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-durgapur" class="bnk-cluster-link">Durgapur Industrial Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-asansol" class="bnk-cluster-link">Asansol Rail Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-midnapore" class="bnk-cluster-link">Midnapore City Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kharagpur" class="bnk-cluster-link">Kharagpur Railway Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bardhaman" class="bnk-cluster-link">Bardhaman City Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata" class="bnk-cluster-link">Kolkata Authority Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-howrah" class="bnk-cluster-link">Howrah City Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/" class="bnk-cluster-link">Ranchi Corporate HQ</a>
                </div>
            </div>
        </div>

        <!-- Sidebar Column -->
        <aside class="bnk-sidebar-col">
            <div class="bnk-sidebar-box">
                <h3 class="bnk-sidebar-title">Bankura Branch Desk</h3>
                <p class="bnk-body-p">Planning a move in Bankura, Machantala, or near Katjuridanga? Contact our dedicated operations desk for an instant quotation.</p>
                <ul style="padding-left: 20px; margin-bottom: 15px; font-size: 0.93rem; color: #334155;">
                    <li><strong>Desk Address:</strong> Near Machantala More, Katjuridanga Main Road, Bankura</li>
                    <li><strong>Service Hours:</strong> 6:30 AM - 9:30 PM (Daily)</li>
                    <li><strong>Helpline:</strong> +91 9334460424</li>
                    <li><strong>Email:</strong> info@shreeashirwadpackers.com</li>
                </ul>
                <a href="<?php echo SITE_BASE_URL; ?>/contact" class="bnk-cta-button">Request Free Moving Quote</a>
            </div>

            <div class="bnk-sidebar-box">
                <h3 class="bnk-sidebar-title">Key Coverage Localities</h3>
                <ul style="padding-left: 20px; font-size: 0.91rem; color: #475569; line-height: 1.8;">
                    <li>Machantala Commercial Crossing</li>
                    <li>Katjuridanga Residential Area</li>
                    <li>Bankura Sammilani Medical College</li>
                    <li>Chandmaridanga & School Danga</li>
                    <li>Nutanganj Wholesale Trading Market</li>
                    <li>Gobindanagar & Lokepur</li>
                    <li>Lalbazar & Court Compound</li>
                    <li>National Highway 14 Corridor</li>
                </ul>
            </div>
        </aside>
    </div>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>
</body>
</html>
