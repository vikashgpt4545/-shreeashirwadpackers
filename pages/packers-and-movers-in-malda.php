<?php
/**
 * Page: Packers and Movers in Malda
 * Description: Reliable household shifting, silk and mango trade logistics, government staff transfers, and vehicle transport in Malda (English Bazar).
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
    <title>Packers and Movers in Malda | Dependable Relocation Services</title>
    <meta name="description" content="Top-rated packers and movers in Malda (English Bazar). Professional house shifting, government employee transfers, trade logistics, and car bike carriers with zero damage.">
    <meta name="keywords" content="packers and movers in malda, movers and packers english bazar, house shifting malda, relocation services rathbari malda, transport company malda">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-malda">
    <meta property="og:title" content="Packers and Movers in Malda | Shree Ashirwad Packers">
    <meta property="og:description" content="Safe domestic shifting, commercial trade moving, and vehicle transport across Malda and English Bazar with transparent pricing and zero-damage guarantee.">
    <meta property="og:url" content="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-malda">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <style>
        /* Scoped CSS for Malda City Authority Hub - mld prefix */
        .mld-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px 40px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.6;
        }
        .mld-hero-section {
            background: linear-gradient(135deg, #1e3a8a 0%, #0d9488 100%);
            color: #ffffff;
            border-radius: 14px;
            padding: 40px 25px;
            margin-bottom: 30px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .mld-hero-title {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.25;
            color: #ffffff;
        }
        .mld-hero-subtitle {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: #e0f2fe;
            max-width: 900px;
        }
        .mld-meta-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }
        .mld-badge-item {
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.35);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            color: #ffffff;
        }
        .mld-main-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            margin-bottom: 35px;
        }
        @media (max-width: 900px) {
            .mld-main-grid {
                grid-template-columns: 1fr;
            }
        }
        .mld-content-col {
            min-width: 0;
        }
        .mld-sidebar-col {
            min-width: 0;
        }
        .mld-section {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 28px 24px;
            margin-bottom: 28px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .mld-section-title {
            font-size: 1.65rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 18px;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
        }
        .mld-lead-p {
            font-size: 1.05rem;
            color: #334155;
            margin-bottom: 16px;
        }
        .mld-body-p {
            font-size: 0.98rem;
            color: #475569;
            margin-bottom: 16px;
        }
        .mld-image-container {
            max-width: 580px;
            margin: 22px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border: 1px solid #cbd5e1;
            background: #f8fafc;
        }
        .mld-image-container img {
            width: 100%;
            max-height: 380px;
            object-fit: cover;
            display: block;
        }
        .mld-image-caption {
            padding: 10px 14px;
            font-size: 0.85rem;
            color: #475569;
            text-align: center;
            background: #f1f5f9;
            border-top: 1px solid #e2e8f0;
            font-weight: 500;
        }
        .mld-highlight-box {
            background: #f0fdf4;
            border-left: 4px solid #16a34a;
            padding: 16px 20px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
        }
        .mld-highlight-title {
            font-weight: 700;
            color: #166534;
            margin-bottom: 6px;
            font-size: 1.02rem;
        }
        .mld-highlight-desc {
            font-size: 0.94rem;
            color: #14532d;
            margin: 0;
        }
        .mld-card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 18px;
            margin: 22px 0;
        }
        .mld-feature-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 18px;
            transition: all 0.2s ease;
        }
        .mld-feature-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.06);
            border-color: #cbd5e1;
        }
        .mld-card-head {
            font-weight: 700;
            font-size: 1.05rem;
            color: #0f766e;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .mld-card-text {
            font-size: 0.92rem;
            color: #475569;
            margin: 0;
            line-height: 1.5;
        }
        .mld-table-wrap {
            overflow-x: auto;
            margin: 22px 0;
        }
        .mld-pricing-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.94rem;
        }
        .mld-pricing-table th {
            background: #1e3a8a;
            color: #ffffff;
            text-align: left;
            padding: 12px 14px;
            font-weight: 600;
            border: 1px solid #1e3a8a;
        }
        .mld-pricing-table td {
            padding: 11px 14px;
            border: 1px solid #e2e8f0;
            color: #334155;
        }
        .mld-pricing-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .mld-pricing-table tr:hover {
            background: #f1f5f9;
        }
        .mld-steps-container {
            display: flex;
            flex-direction: column;
            gap: 14px;
            margin: 20px 0;
        }
        .mld-step-item {
            display: flex;
            gap: 14px;
            align-items: flex-start;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 14px 16px;
        }
        .mld-step-number {
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
        .mld-step-body {
            flex: 1;
        }
        .mld-step-heading {
            font-weight: 700;
            font-size: 0.98rem;
            color: #1e293b;
            margin-bottom: 4px;
        }
        .mld-step-desc {
            font-size: 0.91rem;
            color: #475569;
            margin: 0;
        }
        .mld-faq-accordion {
            margin: 20px 0;
        }
        .mld-faq-item {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            margin-bottom: 12px;
            overflow: hidden;
        }
        .mld-faq-question {
            background: #f8fafc;
            padding: 14px 18px;
            font-weight: 600;
            font-size: 1rem;
            color: #1e3a8a;
            cursor: pointer;
            border-bottom: 1px solid #e2e8f0;
        }
        .mld-faq-answer {
            padding: 14px 18px;
            font-size: 0.93rem;
            color: #475569;
            background: #ffffff;
            line-height: 1.6;
        }
        .mld-sidebar-box {
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            padding: 22px 18px;
            margin-bottom: 24px;
        }
        .mld-sidebar-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 14px;
            border-bottom: 2px solid #0d9488;
            padding-bottom: 6px;
        }
        .mld-cta-button {
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
        .mld-cta-button:hover {
            background: #0f766e;
            color: #ffffff;
        }
        .mld-cluster-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 22px;
            margin-top: 30px;
        }
        .mld-cluster-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 14px;
        }
        .mld-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 12px;
        }
        .mld-cluster-link {
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
        .mld-cluster-link:hover {
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
        "name": "Shree Ashirwad Packers and Movers Malda",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "@id": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-malda#movingcompany",
        "url": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-malda",
        "telephone": "+919334460424",
        "priceRange": "₹3,200 - ₹56,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Rathbari More, NH 12, English Bazar",
            "addressLocality": "Malda",
            "addressRegion": "West Bengal",
            "postalCode": "732101",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 25.0108,
            "longitude": 88.1411
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
                "name": "Malda",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-malda"
            }
        ]
    }
    </script>

    <!-- Schema 3: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Household & Commercial Trade Logistics",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers Malda"
        },
        "areaServed": {
            "@type": "AdministrativeArea",
            "name": "Malda, English Bazar, Purba Bardhaman to North Bengal Corridor"
        },
        "description": "Professional packing, household shifting, silk and mango trade commercial moving, government staff transfers, and vehicle transport in Malda."
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
                "name": "What are the local house moving charges in Malda (English Bazar)?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local household shifting within Malda (such as between Rathbari More, Mokdumpur, Mangalbari, and Old Malda) typically ranges from ₹3,200 to ₹6,500 for a 1 BHK, ₹5,500 to ₹11,000 for a 2 BHK, and ₹8,500 to ₹17,500 for a 3 BHK residence, including packing materials, labor, and truck freight."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide relocation services for government employees and bank officers in Malda?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Malda is a major divisional administrative headquarters. We regularly handle official transfers for government officers, school teachers, and bank managers, providing IBA-approved consignment bills, itemized inventories, and transit insurance for reimbursement claims."
                }
            },
            {
                "@type": "Question",
                "name": "Can you shift household items between Malda, Siliguri, and Kolkata?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Malda is situated on National Highway 12, the primary arterial highway connecting South and North Bengal. We operate daily closed container trucks between Malda, Siliguri to the north, and Kolkata/Howrah to the south."
                }
            },
            {
                "@type": "Question",
                "name": "How do you protect delicate electronics and furniture from moisture and road bumps?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We deploy multi-layered protective packaging including air bubble sheets, 5-ply corrugated cardboard boxes, corner buffers, and waterproof stretch wrapping, ensuring your electronics and polished wood furniture arrive in mint condition."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="mld-wrap">
    <!-- Hero Banner -->
    <section class="mld-hero-section">
        <h1 class="mld-hero-title">Packers and Movers in Malda</h1>
        <p class="mld-hero-subtitle">Premier packing and moving company in Malda (English Bazar). Dependable household shifting, government employee transfers, silk trade logistics, and vehicle carriers along the National Highway 12 corridor.</p>
        <div class="mld-meta-badges">
            <span class="mld-badge-item">✓ English Bazar & Old Malda Authority</span>
            <span class="mld-badge-item">✓ North-South Bengal Highway (NH 12) Axis</span>
            <span class="mld-badge-item">✓ Government & Banking Transfer Specialist</span>
            <span class="mld-badge-item">✓ Multi-Layer Protective Packaging</span>
        </div>
    </section>

    <!-- Main Content Layout -->
    <div class="mld-main-grid">
        <div class="mld-content-col">
            <!-- Section 1: Overview & Strategic Hub Role -->
            <section class="mld-section">
                <h2 class="mld-section-title">Reliable Relocation Services in Malda (English Bazar)</h2>
                <p class="mld-lead-p">Malda, historically known as English Bazar, serves as the pivotal geographical bridge connecting South Bengal with North Bengal and Northeast India. Positioned along the Mahananda River in the fertile agricultural plains of northern West Bengal, Malda is celebrated across the nation as the Silk and Mango Capital of Eastern India. As a bustling divisional administrative hub, bustling commercial trading center, and major railway junction on the Eastern Railway network, Malda features a dynamic blend of government quarters, business wholesale markets, and expanding residential neighborhoods. Moving home or business in Malda requires a dependable partner with authentic local expertise and robust highway logistics.</p>
                
                <p class="mld-body-p">At Shree Ashirwad Packers and Movers, we bring over sixteen years of dedicated moving experience to Malda. Whether you are relocating your family between apartments near Rathbari More, transferring from administrative quarters in Mokdumpur, or moving across the state to Siliguri or Kolkata, our trained moving crews deliver flawless service. Operating in close coordination with our corporate headquarters via <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi">Packers and Movers in Ranchi</a> and North Bengal megahubs through <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-siliguri">Packers and Movers in Siliguri</a>, we provide unified door-to-door relocation across India.</p>

                <div class="mld-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loading in container truck in Malda">
                    <div class="mld-image-caption">Systematic loading of household goods and cartons in Malda (English Bazar).</div>
                </div>

                <div class="mld-highlight-box">
                    <div class="mld-highlight-title">Why Malda Residents & Professionals Trust Shree Ashirwad</div>
                    <div class="mld-highlight-desc">From navigating dense traditional commercial bazaars near Foara More to coordinating direct container transit along National Highway 12, our operations supervisors ensure scheduled departures and zero cargo damage.</div>
                </div>

                <p class="mld-body-p">Unlike unorganized local lorry operators who depend on casual laborers, our team consists of permanent, vetted packing technicians, certified carpenters, and background-checked drivers. We understand that your household possessions—from fragile crockery to heavy wooden almirahs and smart televisions—carry deep emotional and financial worth. Every carton is packed with meticulous care.</p>

                <p class="mld-body-p">Malda's position directly along National Highway 12 (formerly NH 34) gives it superior north-south connectivity between Kolkata and Siliguri. Our modern fleet of closed container trucks navigates this crucial highway corridor daily, ensuring prompt transit times without intermediate unloading risks.</p>
            </section>

            <!-- Section 2: Specialized Relocation Offerings -->
            <section class="mld-section">
                <h2 class="mld-section-title">Comprehensive Relocation Solutions Across Malda</h2>
                <p class="mld-lead-p">Every moving requirement in Malda has distinct characteristics based on cargo volume, elevator access, delicate glassware, and transit destination. We deliver customized shifting packages tailored to the unique residential and commercial landscape of English Bazar.</p>

                <div class="mld-card-grid">
                    <div class="mld-feature-card">
                        <div class="mld-card-head">🏠 Household Shifting</div>
                        <p class="mld-card-text">Complete home relocation covering delicate chinaware, kitchen appliances, LED displays, wardrobes, and living room suites with room-specific unpacking.</p>
                    </div>
                    <div class="mld-feature-card">
                        <div class="mld-card-head">🏛️ Government & Bank Officer Moves</div>
                        <p class="mld-card-text">Specialized moving for district administrative personnel, judicial officers, bank managers, and teachers with official documentation for claims.</p>
                    </div>
                    <div class="mld-feature-card">
                        <div class="mld-card-head">🥭 Silk & Agro-Trade Logistics</div>
                        <p class="mld-card-text">Systematic transport for silk weaving units, agricultural processing machinery, trading inventory, and retail showroom fixtures across Malda district.</p>
                    </div>
                    <div class="mld-feature-card">
                        <div class="mld-card-head">🚗 Vehicle Carrier (Car & Bike)</div>
                        <p class="mld-card-text">Enclosed vehicle carriers and secured motorcycle transport with custom wheel chocks, heavy lashings, and comprehensive transit insurance.</p>
                    </div>
                </div>

                <div class="mld-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Bubble wrap and carton packaging materials in Malda">
                    <div class="mld-image-caption">Multi-layered protective packing materials used for fragile household items in Malda.</div>
                </div>

                <p class="mld-body-p">Our local service vehicles operate seamlessly across all key sub-localities in Malda including Rathbari, Foara More, Mokdumpur, Mangalbari, Maheshpur, Singatala, Malda Town railway station area, and Old Malda. For southern agricultural connections, we coordinate with <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bardhaman">Packers and Movers in Bardhaman</a> and industrial centers via <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-durgapur">Packers and Movers in Durgapur</a>.</p>

                <p class="mld-body-p">For clients transferring southwards to the state capital or major port facilities, our regular transport fleet ensures dependable connectivity to <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata">Packers and Movers in Kolkata</a> and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-howrah">Packers and Movers in Howrah</a>, as well as coastal connections via <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-haldia">Packers and Movers in Haldia</a>.</p>
            </section>

            <!-- Section 3: Material Quality & Step-by-Step Methodology -->
            <section class="mld-section">
                <h2 class="mld-section-title">Packing Standards & Systematic Relocation Process</h2>
                <p class="mld-lead-p">The secret to zero transit damage lies in standardized packing protocols and systematic execution. In Malda, our crews arrive fully equipped with virgin packaging materials designed to withstand thermal variations and road vibrations.</p>

                <div class="mld-steps-container">
                    <div class="mld-step-item">
                        <div class="mld-step-number">1</div>
                        <div class="mld-step-body">
                            <div class="mld-step-heading">Pre-Move Survey & Written Estimation</div>
                            <div class="mld-step-desc">A qualified relocation surveyor evaluates your household items, checks building staircase or elevator clearance, and delivers a transparent written estimate with zero hidden levies.</div>
                        </div>
                    </div>
                    <div class="mld-step-item">
                        <div class="mld-step-number">2</div>
                        <div class="mld-step-body">
                            <div class="mld-step-heading">Multi-Layer Protective Packaging</div>
                            <div class="mld-step-desc">Delicate glassware and kitchenware receive air-bubble cushioning, furniture is wrapped in corrugated sheets and stretch film, and mattresses are enclosed in dust-proof bags.</div>
                        </div>
                    </div>
                    <div class="mld-step-item">
                        <div class="mld-step-number">3</div>
                        <div class="mld-step-body">
                            <div class="mld-step-heading">Engineered Loading & Stacking</div>
                            <div class="mld-step-desc">Heavy items form the stable base in weatherproof container trucks, followed by labeled medium cartons and secured fragile items fastened with heavy-duty cargo straps.</div>
                        </div>
                    </div>
                    <div class="mld-step-item">
                        <div class="mld-step-number">4</div>
                        <div class="mld-step-body">
                            <div class="mld-step-heading">Unloading, Assembly & Placement</div>
                            <div class="mld-step-desc">Upon arrival at your new residence, our crew assists with room-specific unloading, unpacking, furniture reassembly, and debris clearance.</div>
                        </div>
                    </div>
                </div>

                <div class="mld-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Bed furniture dismantling and reassembly in Malda">
                    <div class="mld-image-caption">Skilled carpenters dismantling and protective wrapping modular bed sets in Malda.</div>
                </div>

                <p class="mld-body-p">Whether you are shifting from an independent home in Mangalbari or an apartment near Rathbari, our trained carpenters expertly dismantle king-size beds, modular wardrobes, and study units, securely bagging all fasteners and hardware so reassembly is quick and effortless.</p>

                <div class="mld-highlight-box">
                    <div class="mld-highlight-title">Zero-Scratch Guarantee for Modular Interiors</div>
                    <div class="mld-highlight-desc">All wooden and glass modular furniture pieces are shielded with multi-ply corrugated sheets, thick foam corner buffers, and heavy-gauge polythene wrapping before stepping out of your apartment doors.</div>
                </div>

                <p class="mld-body-p">We also supply heavy-duty hanging wardrobe carton boxes that allow your formal suits, designer dresses, and traditional ethnic wear to remain wrinkle-free on their original hangers throughout the moving journey.</p>
            </section>

            <!-- Section 4: Feeder Operations & Highway Logistics -->
            <section class="mld-section">
                <h2 class="mld-section-title">Specialized Feeder Operations & Highway Transit in Malda</h2>
                <p class="mld-lead-p">Relocating in Malda requires managing narrow market streets around Foara More and Singatala while maintaining direct highway connections along NH 12. Our team uses specialized equipment to overcome urban congestion.</p>

                <div class="mld-card-grid">
                    <div class="mld-feature-card">
                        <div class="mld-card-head">🚚 Compact Feeder Shuttles</div>
                        <p class="mld-card-text">We deploy mini-trucks for dense residential alleys in Old Malda and Mokdumpur, ferrying packed items safely to our highway container trucks.</p>
                    </div>
                    <div class="mld-feature-card">
                        <div class="mld-card-head">🛣️ NH 12 Direct Corridor Transit</div>
                        <p class="mld-card-text">Immediate access onto National Highway 12 enables swift long-distance container truck dispatch toward Siliguri, Raiganj, and Kolkata.</p>
                    </div>
                    <div class="mld-feature-card">
                        <div class="mld-card-head">📑 Government Transfer Documentation</div>
                        <p class="mld-card-text">We supply IBA-approved consignment bills, transit insurance documents, and certified packing inventories for government and banking claim settlements.</p>
                    </div>
                    <div class="mld-feature-card">
                        <div class="mld-card-head">📦 Fragile Household Crating</div>
                        <p class="mld-card-text">Custom wooden crates with shock-absorbent thermal foam padding for fragile glassware, modern televisions, and delicate electronic appliances.</p>
                    </div>
                </div>

                <div class="mld-highlight-box">
                    <div class="mld-highlight-title">All-Weather Waterproof Protection</div>
                    <div class="mld-highlight-desc">Because Malda experiences severe monsoon deluges, our container trucks are fitted with watertight rubber gaskets, ensuring complete dryness for all household goods.</div>
                </div>

                <p class="mld-body-p">For long-distance corridors heading toward our company headquarters via <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi">Packers and Movers in Ranchi</a> or western industrial hubs via <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-asansol">Packers and Movers in Asansol</a>, our dedicated fleet ensures direct transit without intermediate transshipment.</p>

                <p class="mld-body-p">We also provide optional value-added services such as pre-move deep cleaning, wall mount television bracket de-installation, split air conditioner gas sealing and dismantling by certified HVAC technicians, and short-term secure household warehousing at fully covered, CCTV-monitored storage facilities.</p>
            </section>

            <!-- Section 5: Transparent Tariff Structure -->
            <section class="mld-section">
                <h2 class="mld-section-title">Transparent Price Estimator for Malda Relocations</h2>
                <p class="mld-lead-p">We believe that honest moving starts with crystal-clear pricing. Below is an indicative rate chart for local relocations within Malda municipal limits. For customized cross-state or long-distance tariffs, explore our interactive <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">packers and movers charges calculator</a>.</p>

                <div class="mld-table-wrap">
                    <table class="mld-pricing-table">
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

                <div class="mld-highlight-box">
                    <div class="mld-highlight-title">Zero Hidden Surcharges Promise</div>
                    <div class="mld-highlight-desc">Every formal quotation from Shree Ashirwad Packers includes packing materials, labor, transport, toll taxes, and standard insurance with complete clarity upfront.</div>
                </div>

                <div class="mld-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Malda">
                    <div class="mld-image-caption">Dedicated door-to-door closed carrier truck operating in Malda.</div>
                </div>

                <p class="mld-body-p">Whether you are relocating locally within Malda or moving across state lines to Bihar, Jharkhand, Assam, or Delhi NCR, our GPS-enabled container vehicles provide regular tracking updates and guaranteed on-time delivery.</p>

                <p class="mld-body-p">For families in transitional housing or traders renovating commercial spaces, we provide secure short-term and long-term warehousing facilities in Malda. Our warehouse spaces feature 24/7 CCTV surveillance, fire prevention systems, raised concrete plinths, and pest-controlled wooden storage pallets.</p>
            </section>

            <!-- Section 6: Frequently Asked Questions -->
            <section class="mld-section">
                <h2 class="mld-section-title">Frequently Asked Questions — Malda Relocation</h2>
                <div class="mld-faq-accordion">
                    <div class="mld-faq-item">
                        <div class="mld-faq-question">What are the local house moving charges in Malda (English Bazar)?</div>
                        <div class="mld-faq-answer">Local household shifting within Malda (such as between Rathbari More, Mokdumpur, Mangalbari, and Old Malda) typically ranges from ₹3,200 to ₹6,500 for a 1 BHK, ₹5,500 to ₹11,000 for a 2 BHK, and ₹8,500 to ₹17,500 for a 3 BHK residence, including packing materials, labor, and truck freight.</div>
                    </div>
                    <div class="mld-faq-item">
                        <div class="mld-faq-question">Do you provide relocation services for government employees and bank officers in Malda?</div>
                        <div class="mld-faq-answer">Yes, Malda is a major divisional administrative headquarters. We regularly handle official transfers for government officers, school teachers, and bank managers, providing IBA-approved consignment bills, itemized inventories, and transit insurance for reimbursement claims.</div>
                    </div>
                    <div class="mld-faq-item">
                        <div class="mld-faq-question">Can you shift household items between Malda, Siliguri, and Kolkata?</div>
                        <div class="mld-faq-answer">Yes, Malda is situated on National Highway 12, the primary arterial highway connecting South and North Bengal. We operate daily closed container trucks between Malda, Siliguri to the north, and Kolkata/Howrah to the south.</div>
                    </div>
                    <div class="mld-faq-item">
                        <div class="mld-faq-question">How do you protect delicate electronics and furniture from moisture and road bumps?</div>
                        <div class="mld-faq-answer">We deploy multi-layered protective packaging including air bubble sheets, 5-ply corrugated cardboard boxes, corner buffers, and waterproof stretch wrapping, ensuring your electronics and polished wood furniture arrive in mint condition.</div>
                    </div>
                </div>
            </section>

            <!-- Connected Localities Cluster Module -->
            <div class="mld-cluster-card">
                <h3 class="mld-cluster-title">Connected Localities & Regional Service Hubs</h3>
                <p class="mld-body-p">Explore our verified packing and moving networks connecting Malda across West Bengal and Eastern India:</p>
                <div class="mld-cluster-grid">
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-siliguri" class="mld-cluster-link">Siliguri North Bengal Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bardhaman" class="mld-cluster-link">Bardhaman City Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata" class="mld-cluster-link">Kolkata Authority Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-howrah" class="mld-cluster-link">Howrah City Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-durgapur" class="mld-cluster-link">Durgapur Industrial Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-asansol" class="mld-cluster-link">Asansol Rail Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kharagpur" class="mld-cluster-link">Kharagpur Railway Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi" class="mld-cluster-link">Ranchi Corporate HQ</a>
                </div>
            </div>
        </div>

        <!-- Sidebar Column -->
        <aside class="mld-sidebar-col">
            <div class="mld-sidebar-box">
                <h3 class="mld-sidebar-title">Malda Branch Desk</h3>
                <p class="mld-body-p">Planning a move in Malda, English Bazar, or near Rathbari More? Contact our dedicated operations desk for an instant quotation.</p>
                <ul style="padding-left: 20px; margin-bottom: 15px; font-size: 0.93rem; color: #334155;">
                    <li><strong>Desk Address:</strong> Near Rathbari More, NH 12, English Bazar, Malda</li>
                    <li><strong>Service Hours:</strong> 6:30 AM - 9:30 PM (Daily)</li>
                    <li><strong>Helpline:</strong> +91 9334460424</li>
                    <li><strong>Email:</strong> info@shreeashirwadpackers.com</li>
                </ul>
                <a href="<?php echo SITE_BASE_URL; ?>/contact" class="mld-cta-button">Request Free Moving Quote</a>
            </div>

            <div class="mld-sidebar-box">
                <h3 class="mld-sidebar-title">Key Coverage Localities</h3>
                <ul style="padding-left: 20px; font-size: 0.91rem; color: #475569; line-height: 1.8;">
                    <li>Rathbari More Commercial Sector</li>
                    <li>English Bazar Municipal Core</li>
                    <li>Foara More & Central Market</li>
                    <li>Mokdumpur Residential Colony</li>
                    <li>Mangalbari & Maheshpur Enclaves</li>
                    <li>Malda Town Railway Station Belt</li>
                    <li>Old Malda Historic Enclave</li>
                    <li>National Highway 12 Corridor</li>
                </ul>
            </div>
        </aside>
    </div>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>
</body>
</html>
