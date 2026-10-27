<?php
/**
 * Page: Packers and Movers in Purulia
 * Description: Dependable household shifting, railway officer transfers, thermal power plant relocation, and vehicle moving in Purulia.
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
    <title>Packers and Movers in Purulia | Reliable Moving Services</title>
    <meta name="description" content="Top packers and movers in Purulia. Verified home shifting, Adra railway staff relocation, thermal power plant moving, and car bike carriers with zero transit damage.">
    <meta name="keywords" content="packers and movers in purulia, movers and packers purulia, house shifting purulia, relocation services raghabpur purulia, transport company purulia">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-purulia">
    <meta property="og:title" content="Packers and Movers in Purulia | Shree Ashirwad Packers">
    <meta property="og:description" content="Safe domestic shifting, railway staff moving, and vehicle transport across Purulia and the Jharkhand-Bengal border corridor with transparent rates.">
    <meta property="og:url" content="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-purulia">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <style>
        /* Scoped CSS for Purulia City Authority Hub - prl prefix */
        .prl-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px 40px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.6;
        }
        .prl-hero-section {
            background: linear-gradient(135deg, #1e3a8a 0%, #0d9488 100%);
            color: #ffffff;
            border-radius: 14px;
            padding: 40px 25px;
            margin-bottom: 30px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .prl-hero-title {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.25;
            color: #ffffff;
        }
        .prl-hero-subtitle {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: #e0f2fe;
            max-width: 900px;
        }
        .prl-meta-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }
        .prl-badge-item {
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.35);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            color: #ffffff;
        }
        .prl-main-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            margin-bottom: 35px;
        }
        @media (max-width: 900px) {
            .prl-main-grid {
                grid-template-columns: 1fr;
            }
        }
        .prl-content-col {
            min-width: 0;
        }
        .prl-sidebar-col {
            min-width: 0;
        }
        .prl-section {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 28px 24px;
            margin-bottom: 28px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .prl-section-title {
            font-size: 1.65rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 18px;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
        }
        .prl-lead-p {
            font-size: 1.05rem;
            color: #334155;
            margin-bottom: 16px;
        }
        .prl-body-p {
            font-size: 0.98rem;
            color: #475569;
            margin-bottom: 16px;
        }
        .prl-image-container {
            max-width: 580px;
            margin: 22px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border: 1px solid #cbd5e1;
            background: #f8fafc;
        }
        .prl-image-container img {
            width: 100%;
            max-height: 380px;
            object-fit: cover;
            display: block;
        }
        .prl-image-caption {
            padding: 10px 14px;
            font-size: 0.85rem;
            color: #475569;
            text-align: center;
            background: #f1f5f9;
            border-top: 1px solid #e2e8f0;
            font-weight: 500;
        }
        .prl-highlight-box {
            background: #f0fdf4;
            border-left: 4px solid #16a34a;
            padding: 16px 20px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
        }
        .prl-highlight-title {
            font-weight: 700;
            color: #166534;
            margin-bottom: 6px;
            font-size: 1.02rem;
        }
        .prl-highlight-desc {
            font-size: 0.94rem;
            color: #14532d;
            margin: 0;
        }
        .prl-card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 18px;
            margin: 22px 0;
        }
        .prl-feature-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 18px;
            transition: all 0.2s ease;
        }
        .prl-feature-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.06);
            border-color: #cbd5e1;
        }
        .prl-card-head {
            font-weight: 700;
            font-size: 1.05rem;
            color: #0f766e;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .prl-card-text {
            font-size: 0.92rem;
            color: #475569;
            margin: 0;
            line-height: 1.5;
        }
        .prl-table-wrap {
            overflow-x: auto;
            margin: 22px 0;
        }
        .prl-pricing-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.94rem;
        }
        .prl-pricing-table th {
            background: #1e3a8a;
            color: #ffffff;
            text-align: left;
            padding: 12px 14px;
            font-weight: 600;
            border: 1px solid #1e3a8a;
        }
        .prl-pricing-table td {
            padding: 11px 14px;
            border: 1px solid #e2e8f0;
            color: #334155;
        }
        .prl-pricing-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .prl-pricing-table tr:hover {
            background: #f1f5f9;
        }
        .prl-steps-container {
            display: flex;
            flex-direction: column;
            gap: 14px;
            margin: 20px 0;
        }
        .prl-step-item {
            display: flex;
            gap: 14px;
            align-items: flex-start;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 14px 16px;
        }
        .prl-step-number {
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
        .prl-step-body {
            flex: 1;
        }
        .prl-step-heading {
            font-weight: 700;
            font-size: 0.98rem;
            color: #1e293b;
            margin-bottom: 4px;
        }
        .prl-step-desc {
            font-size: 0.91rem;
            color: #475569;
            margin: 0;
        }
        .prl-faq-accordion {
            margin: 20px 0;
        }
        .prl-faq-item {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            margin-bottom: 12px;
            overflow: hidden;
        }
        .prl-faq-question {
            background: #f8fafc;
            padding: 14px 18px;
            font-weight: 600;
            font-size: 1rem;
            color: #1e3a8a;
            cursor: pointer;
            border-bottom: 1px solid #e2e8f0;
        }
        .prl-faq-answer {
            padding: 14px 18px;
            font-size: 0.93rem;
            color: #475569;
            background: #ffffff;
            line-height: 1.6;
        }
        .prl-sidebar-box {
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            padding: 22px 18px;
            margin-bottom: 24px;
        }
        .prl-sidebar-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 14px;
            border-bottom: 2px solid #0d9488;
            padding-bottom: 6px;
        }
        .prl-cta-button {
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
        .prl-cta-button:hover {
            background: #0f766e;
            color: #ffffff;
        }
        .prl-cluster-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 22px;
            margin-top: 30px;
        }
        .prl-cluster-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 14px;
        }
        .prl-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 12px;
        }
        .prl-cluster-link {
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
        .prl-cluster-link:hover {
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
        "name": "Shree Ashirwad Packers and Movers Purulia",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "@id": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-purulia#movingcompany",
        "url": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-purulia",
        "telephone": "+91 9835565233",
        "priceRange": "₹3,200 - ₹55,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Station Road, By-Pass Crossing, Raghabpur More",
            "addressLocality": "Purulia",
            "addressRegion": "West Bengal",
            "postalCode": "723101",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 23.3321,
            "longitude": 86.3652
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
                "name": "Packers and Movers in Purulia",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-purulia"
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
            "name": "Shree Ashirwad Packers and Movers Purulia"
        },
        "areaServed": {
            "@type": "City",
            "name": "Purulia"
        },
        "description": "Professional house shifting, railway officer transfers, thermal power station staff relocation, vehicle transportation, and inter-state moving services connecting Purulia with Jharkhand and West Bengal.",
        "offers": {
            "@type": "Offer",
            "priceCurrency": "INR",
            "price": "3200",
            "eligibleRegion": {
                "@type": "Place",
                "name": "Purulia, West Bengal"
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
                "name": "What are the standard charges for house shifting within Purulia?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting within Purulia typically starts at ₹3,200 to ₹5,800 for 1 BHK apartments, ₹5,500 to ₹10,200 for 2 BHK residences, and ₹8,500 to ₹15,500 for 3 BHK homes. Total pricing varies according to the volume of furniture, packing quality required, floor levels, and whether elevator access is available."
                }
            },
            {
                "@type": "Question",
                "name": "How does Shree Ashirwad Packers handle moves between Purulia and Jharkhand?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Purulia shares an active inter-state border corridor with Jharkhand. We run regular dedicated and shared transport vehicles connecting Purulia directly with Ranchi (via NH32/NH43), Bokaro Steel City (55 km), Dhanbad (65 km), and Jamshedpur (85 km). All moves include GST billing, transit insurance, and e-way bill documentation."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide relocation services for South Eastern Railway employees in Adra and Purulia?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we specialize in government and railway official transfers across the Adra Railway Division and Purulia Junction. We supply certified IBA-standard bills, consignment tracking notes, itemized packing inventories, and transit insurance receipts required for official transfer allowance claims."
                }
            },
            {
                "@type": "Question",
                "name": "What packaging materials are used for delicate household articles and furniture?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We deploy heavy-duty 5-layer corrugated cartons, virgin air-bubble cushions, industrial stretch film, thermal corner protectors for wooden furniture, and custom wooden crating for large LED screens, glass tables, and temple artifacts to ensure zero transit damage over undulating plateau roads."
                }
            },
            {
                "@type": "Question",
                "name": "How much advance notice is required to book a move in Purulia?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "For local moves within Purulia municipal areas, 24 to 48 hours notice is ideal. For inter-state relocations towards Ranchi, Kolkata, Asansol, or Patna, reserving 3 to 4 days ahead ensures preferred scheduling, vehicle allocation, and prompt carton pre-delivery."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide custom crating for Purulia Chhau masks, musical instruments, and traditional terracotta decor?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our packaging experts build customized wooden crates and reinforced foam-lined boxes for delicate Purulia Chhau dance masks, terracotta wall hangings, brass artifacts, and acoustic musical instruments to ensure they survive road vibrations without chipping or surface abrasions."
                }
            },
            {
                "@type": "Question",
                "name": "What documentation is provided to government and PSU employees for relocation allowance reimbursement?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We provide complete, 100% compliant documentation packages including 18% GST invoice bills, money receipts, driver lorry receipts (LR copies), vehicle registration certificates, itemized packing inventory lists, and transit insurance policies accepted across Indian Railways, Central Govt ministries, and state departments."
                }
            }
        ]
    }
    </script>
</head>
<body>

<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="prl-wrap">
    <!-- Hero Banner -->
    <section class="prl-hero-section">
        <h1 class="prl-hero-title">Packers and Movers in Purulia</h1>
        <p class="prl-hero-subtitle">Verified Household Relocation, Railway Officer Transfers, Thermal Power Station Moving, and Border Corridor Vehicle Transport with Certified Safety Guarantee.</p>
        <div class="prl-meta-badges">
            <span class="prl-badge-item">✓ Chhota Nagpur Plateau Gateway</span>
            <span class="prl-badge-item">✓ Adra Railway Division Specialists</span>
            <span class="prl-badge-item">✓ 100% Transit Insured Movement</span>
            <span class="prl-badge-item">✓ Direct Ranchi-Bokaro-Purulia Fleet</span>
        </div>
    </section>

    <!-- Main Content Layout -->
    <div class="prl-main-grid">
        <!-- Content Column -->
        <div class="prl-content-col">
            <!-- Section 1: Overview -->
            <section class="prl-section">
                <h2 class="prl-section-title">Premier Moving and Logistics Services Across Purulia</h2>
                <p class="prl-lead-p">Purulia occupies a distinct and vital geographic crossroads in West Bengal, nestled along the eastern fringes of the Chhota Nagpur plateau and serving as the primary commercial and transport bridge between Bengal's industrial heartland and Jharkhand's mining capitals. As the administrative headquarters of Purulia district, the city is characterized by a vigorous blend of government administrative bodies, university campuses, railway division housing, thermal power operational hubs, and bustling heritage trading markets.</p>
                
                <p class="prl-body-p">Whether you are an engineer relocating from the Santaldih Thermal Power Station or Purulia Pumped Storage Project, a senior railway official transferred through the South Eastern Railway's Adra Division, an academic joining Sidho-Kanho-Birsha University, or a commercial merchant expanding trade along Ranchi Road, Shree Ashirwad Packers and Movers delivers fully synchronized, stress-free shifting solutions built specifically for the terrain and infrastructural dynamics of Purulia.</p>

                <div class="prl-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Loading household goods and furniture in Purulia transport vehicle" width="580" height="380" loading="lazy">
                    <div class="prl-image-caption">Systematic loading of palletized cartons and guarded wooden furniture into covered container fleet in Purulia.</div>
                </div>

                <div class="prl-highlight-box">
                    <div class="prl-highlight-title">Strategic Border Corridor Advantage</div>
                    <p class="prl-highlight-desc">Operating from our central regional headquarters in <a href="<?php echo SITE_BASE_URL; ?>/">Ranchi</a>, our dedicated border-express vehicles navigate the Purulia-Ranchi highway (NH32/NH43), Bokaro Steel corridor, and Asansol connections with zero intermediate transshipment delays.</p>
                </div>

                <p class="prl-body-p">The urban fabric of Purulia encompasses diverse residential pockets ranging from historical neighborhoods near the scenic Sahebbandh lake and Munshi Bazar to modern residential layouts in Raghabpur, Nilkuthidanga, Dulmi-Nadiha, Bhatbandh, and Simulia. Navigating these locales requires specialized moving vans that comfortably maneuver narrow bazaar streets, older municipal quarters, and newly developed gated colonies without disrupting neighborhood traffic.</p>

                <div class="prl-highlight-box">
                    <div class="prl-highlight-title">Medical & Healthcare Staff Relocation Support</div>
                    <p class="prl-highlight-desc">We offer prioritized shifting services for medical officers, resident surgeons, and clinical staff stationed at Deben Mahata Government Medical College and Hospital, ensuring expedited transfers with zero setup delays for emergency professionals.</p>
                </div>

                <p class="prl-body-p">Our comprehensive relocation management takes full ownership of the moving lifecycle. From the moment our surveyor conducts an on-site or digital assessment of your household assets, through heavy-duty cushioning, disciplined truck stowage, real-time GPS tracking across state lines, to careful unpacking and furniture reassembly at your destination residence, our trained crews ensure complete peace of mind.</p>
            </section>

            <!-- Section 2: Relocation Services -->
            <section class="prl-section">
                <h2 class="prl-section-title">Specialized Relocation Capabilities for Purulia Residents</h2>
                <p class="prl-lead-p">Moving household belongings across the undulating landscape of south-western Bengal demands specialized logistics techniques, robust shock-absorbing packaging materials, and skilled labor familiar with regional apartment complexes and standalone residential colonies.</p>

                <div class="prl-card-grid">
                    <div class="prl-feature-card">
                        <div class="prl-card-head">🏠 Complete Home Shifting</div>
                        <p class="prl-card-text">Flawless packaging and safe transportation for apartments, standalone bungalows, and government quarters across Raghabpur, Nilkuthidanga, Dulmi-Nadiha, and Bhatbandh.</p>
                    </div>
                    <div class="prl-feature-card">
                        <div class="prl-card-head">🚆 Railway & Govt Staff Transfers</div>
                        <p class="prl-card-text">Specialized moving packages for South Eastern Railway personnel at Adra and Purulia Junction, including compliant documentation for seamless reimbursement.</p>
                    </div>
                    <div class="prl-feature-card">
                        <div class="prl-card-head">⚡ Thermal Power & Industrial Logistics</div>
                        <p class="prl-card-text">Heavy equipment, sensitive testing instruments, and staff residential quarters relocation for Santaldih TPS, DVC setups, and Balarampur lac manufacturing centers.</p>
                    </div>
                    <div class="prl-feature-card">
                        <div class="prl-card-head">🚗 Vehicle Carrier Solutions</div>
                        <p class="prl-card-text">Safe door-to-door transportation of hatchbacks, luxury SUVs, and two-wheelers in dedicated hydraulic car carriers with zero odometer accumulation.</p>
                    </div>
                    <div class="prl-feature-card">
                        <div class="prl-card-head">🎓 Academic & University Transfers</div>
                        <p class="prl-card-text">Specialized moving assistance for professors, scholars, and library collections at Sidho-Kanho-Birsha University, Purulia Zilla School, and J.K. College.</p>
                    </div>
                    <div class="prl-feature-card">
                        <div class="prl-card-head">📦 Fragile Handicrafts & Chhau Decor</div>
                        <p class="prl-card-text">Custom wooden crating and bubble-lined packaging for valuable Purulia Chhau masks, terracotta folk art, musical instruments, and traditional brassware.</p>
                    </div>
                </div>

                <div class="prl-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Multi-layer packaging of electronics and kitchenware in Purulia" width="580" height="380" loading="lazy">
                    <div class="prl-image-caption">High-density virgin bubble wraps and reinforced 5-ply cartons protecting glassware and electronics for Purulia families.</div>
                </div>

                <p class="prl-body-p">To guarantee complete fiscal clarity, we calculate our prices strictly based on tangible relocation parameters such as consignment volume, distance traversed, and specific packing tiers. Clients can easily review comprehensive local estimates via our online <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">packers and movers charges tariff calculator</a> to prepare realistic budgets without unexpected surprises.</p>
            </section>

            <!-- Section 3: Pricing Table -->
            <section class="prl-section">
                <h2 class="prl-section-title">Transparent Relocation Tariff Matrix for Purulia</h2>
                <p class="prl-lead-p">We uphold an unwavering policy of open, transparent pricing. Every quotation includes full labor charges, premium packing supplies, loading and unloading services, vehicle transit, and standard transit coverage without hidden terminal fees.</p>

                <div class="prl-table-wrap">
                    <table class="prl-pricing-table">
                        <thead>
                            <tr>
                                <th>Household Configuration</th>
                                <th>Local Shifting (Within Purulia)</th>
                                <th>Intercity Move (Ranchi / Bokaro)</th>
                                <th>Long Distance (Kolkata / Patna)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>1 BHK Apartment</strong></td>
                                <td>₹3,200 - ₹5,800</td>
                                <td>₹9,500 - ₹16,500</td>
                                <td>₹14,500 - ₹24,000</td>
                            </tr>
                            <tr>
                                <td><strong>2 BHK Flat / House</strong></td>
                                <td>₹5,500 - ₹10,200</td>
                                <td>₹15,000 - ₹26,000</td>
                                <td>₹22,000 - ₹36,000</td>
                            </tr>
                            <tr>
                                <td><strong>3 BHK Family Home</strong></td>
                                <td>₹8,500 - ₹15,500</td>
                                <td>₹21,000 - ₹35,000</td>
                                <td>₹31,000 - ₹48,000</td>
                            </tr>
                            <tr>
                                <td><strong>4 BHK / Large Bungalow</strong></td>
                                <td>₹13,000 - ₹22,000</td>
                                <td>₹29,000 - ₹48,000</td>
                                <td>₹42,000 - ₹68,000</td>
                            </tr>
                            <tr>
                                <td><strong>Motorcycle / Scooter</strong></td>
                                <td>₹1,200 - ₹2,500</td>
                                <td>₹2,800 - ₹5,200</td>
                                <td>₹4,500 - ₹8,500</td>
                            </tr>
                            <tr>
                                <td><strong>Car Carrier (Sedan / SUV)</strong></td>
                                <td>₹3,500 - ₹6,500</td>
                                <td>₹7,500 - ₹14,000</td>
                                <td>₹12,000 - ₹22,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="prl-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Disassembling wooden wardrobe and double bed in Purulia home" width="580" height="380" loading="lazy">
                    <div class="prl-image-caption">Expert carpenter dismantling modular double beds, wardrobes, and delicate furnishings prior to wrapping in Purulia.</div>
                </div>

                <div class="prl-highlight-box">
                    <div class="prl-highlight-title">All-Weather Waterproofing and Thermal Shielding</div>
                    <p class="prl-highlight-desc">Purulia experiences intense summer dry heat and strong monsoon showers across the plateau. Our transit trucks feature double-stitched waterproof tarpaulins and temperature-resistant protective wrap to shield electronics, polished teak furniture, and books from humidity and dust.</p>
                </div>

                <p class="prl-body-p">Whether you are orchestrating an intra-district move to nearby towns like <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bankura">Bankura</a> or coordinating long-distance freight towards <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-asansol">Asansol</a>, <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-durgapur">Durgapur</a>, or <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kharagpur">Kharagpur</a>, our operations team ensures rigorous logistical planning and strict schedule compliance.</p>
            </section>

            <!-- Section 4: Operational Workflow -->
            <section class="prl-section">
                <h2 class="prl-section-title">Our Systematic Step-by-Step Moving Protocol</h2>
                <p class="prl-lead-p">To maintain zero damage rates across our inter-state and city routes, our relocation teams adhere to a disciplined four-stage operational protocol refined over hundreds of relocations across Eastern India.</p>

                <div class="prl-steps-container">
                    <div class="prl-step-item">
                        <div class="prl-step-number">1</div>
                        <div class="prl-step-body">
                            <div class="prl-step-heading">Personalized Site Survey and Inventory Cataloging</div>
                            <p class="prl-step-desc">Our certified surveyor inspects your premises in Purulia or reviews video surveys, documenting room-by-room inventories, identifying fragile decor, assessing stairwell widths, and drafting an all-inclusive formal quotation.</p>
                        </div>
                    </div>
                    <div class="prl-step-item">
                        <div class="prl-step-number">2</div>
                        <div class="prl-step-body">
                            <div class="prl-step-heading">Specialized Multi-Layer Cushioning and Dismantling</div>
                            <p class="prl-step-desc">Our packers wrap wooden furniture, modular kitchen items, crockery, and home theaters with heavy-duty air bubble sheets, corrugated edge-guards, and cling films. Beds, study desks, and wardrobes are carefully disassembled.</p>
                        </div>
                    </div>
                    <div class="prl-step-item">
                        <div class="prl-step-number">3</div>
                        <div class="prl-step-body">
                            <div class="prl-step-heading">Secure Cargo Stowing in Closed Container Trucks</div>
                            <p class="prl-step-desc">All items are loaded into our weather-sealed, carpet-lined container vehicles using pneumatic hand trucks and stabilizing cargo belts to prevent shifting during transit across hilly border roads.</p>
                        </div>
                    </div>
                    <div class="prl-step-item">
                        <div class="prl-step-number">4</div>
                        <div class="prl-step-body">
                            <div class="prl-step-heading">Destination Delivery, Room Unloading, and Reassembly</div>
                            <p class="prl-step-desc">Upon arriving at your new destination, our crew unloads every box into its designated room, reassembles furniture components, removes used carton waste, and performs final inventory verification.</p>
                        </div>
                    </div>
                </div>

                <div class="prl-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Safe doorstep delivery and unloading of household items in Purulia" width="580" height="380" loading="lazy">
                    <div class="prl-image-caption">Punctual arrival and professional doorstep delivery by Shree Ashirwad Packers and Movers in Purulia.</div>
                </div>

                <div class="prl-highlight-box">
                    <div class="prl-highlight-title">Full Transit Insurance & Hassle-Free Claims</div>
                    <p class="prl-highlight-desc">Every inter-district and inter-state movement from Purulia is backed by optional door-to-door comprehensive transit insurance coverage from recognized national insurers, ensuring full financial reimbursement in the improbable event of accident, road incident, or severe weather disruption.</p>
                </div>

                <p class="prl-body-p">This rigorous operational flow eliminates common moving headaches, safeguarding your valuable domestic possessions whether you relocate within Purulia or transition across state boundaries to Bokaro, Jamshedpur, or Kolkata.</p>
            </section>

            <!-- Section 5: Frequently Asked Questions -->
            <section class="prl-section">
                <h2 class="prl-section-title">Frequently Asked Questions — Packers and Movers in Purulia</h2>
                <div class="prl-faq-accordion">
                    <div class="prl-faq-item">
                        <div class="prl-faq-question">What are the standard charges for house shifting within Purulia?</div>
                        <div class="prl-faq-answer">Local shifting within Purulia typically starts at ₹3,200 to ₹5,800 for 1 BHK apartments, ₹5,500 to ₹10,200 for 2 BHK residences, and ₹8,500 to ₹15,500 for 3 BHK homes. Total pricing varies according to the volume of furniture, packing quality required, floor levels, and whether elevator access is available.</div>
                    </div>
                    <div class="prl-faq-item">
                        <div class="prl-faq-question">How does Shree Ashirwad Packers handle moves between Purulia and Jharkhand?</div>
                        <div class="prl-faq-answer">Purulia shares an active inter-state border corridor with Jharkhand. We run regular dedicated and shared transport vehicles connecting Purulia directly with Ranchi (via NH32/NH43), Bokaro Steel City (55 km), Dhanbad (65 km), and Jamshedpur (85 km). All moves include GST billing, transit insurance, and e-way bill documentation.</div>
                    </div>
                    <div class="prl-faq-item">
                        <div class="prl-faq-question">Do you provide relocation services for South Eastern Railway employees in Adra and Purulia?</div>
                        <div class="prl-faq-answer">Yes, we specialize in government and railway official transfers across the Adra Railway Division and Purulia Junction. We supply certified IBA-standard bills, consignment tracking notes, itemized packing inventories, and transit insurance receipts required for official transfer allowance claims.</div>
                    </div>
                    <div class="prl-faq-item">
                        <div class="prl-faq-question">What packaging materials are used for delicate household articles and furniture?</div>
                        <div class="prl-faq-answer">We deploy heavy-duty 5-layer corrugated cartons, virgin air-bubble cushions, industrial stretch film, thermal corner protectors for wooden furniture, and custom wooden crating for large LED screens, glass tables, and temple artifacts to ensure zero transit damage over undulating plateau roads.</div>
                    </div>
                    <div class="prl-faq-item">
                        <div class="prl-faq-question">How much advance notice is required to book a move in Purulia?</div>
                        <div class="prl-faq-answer">For local moves within Purulia municipal areas, 24 to 48 hours notice is ideal. For inter-state relocations towards Ranchi, Kolkata, Asansol, or Patna, reserving 3 to 4 days ahead ensures preferred scheduling, vehicle allocation, and prompt carton pre-delivery.</div>
                    </div>
                    <div class="prl-faq-item">
                        <div class="prl-faq-question">Do you provide custom crating for Purulia Chhau masks, musical instruments, and traditional terracotta decor?</div>
                        <div class="prl-faq-answer">Yes, our packaging experts build customized wooden crates and reinforced foam-lined boxes for delicate Purulia Chhau dance masks, terracotta wall hangings, brass artifacts, and acoustic musical instruments to ensure they survive road vibrations without chipping or surface abrasions.</div>
                    </div>
                    <div class="prl-faq-item">
                        <div class="prl-faq-question">What documentation is provided to government and PSU employees for relocation allowance reimbursement?</div>
                        <div class="prl-faq-answer">We provide complete, 100% compliant documentation packages including 18% GST invoice bills, money receipts, driver lorry receipts (LR copies), vehicle registration certificates, itemized packing inventory lists, and transit insurance policies accepted across Indian Railways, Central Govt ministries, and state departments.</div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Sidebar Column -->
        <div class="prl-sidebar-col">
            <div class="prl-sidebar-box">
                <div class="prl-sidebar-title">Book Purulia Relocation</div>
                <p class="prl-body-p">Speak directly with our local Purulia operations supervisor for an instant price quote and scheduled on-site inspection.</p>
                <div class="prl-highlight-box">
                    <div class="prl-highlight-title">Direct Helpline</div>
                    <p class="prl-highlight-desc"><strong>+91 9835565233</strong><br>Available 7 AM - 9:30 PM Daily</p>
                </div>
                <a href="tel:+919835565233" class="prl-cta-button">Call Now for Free Quote</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="prl-cta-button" style="background: #1e3a8a; margin-top: 10px;">Calculate Tariff Online</a>
            </div>

            <div class="prl-sidebar-box">
                <div class="prl-sidebar-title">Local Service Coverage</div>
                <p class="prl-body-p">Prompt local pickup and delivery squads operating throughout Purulia municipal wards and nearby industrial townships:</p>
                <ul style="padding-left: 20px; font-size: 0.92rem; color: #475569; line-height: 1.8;">
                    <li>Raghabpur & Ranchi Road</li>
                    <li>Nilkuthidanga & Court Compound</li>
                    <li>Dulmi-Nadiha & Bhatbandh</li>
                    <li>Simulia & Bongabari Enclave</li>
                    <li>Sahebbandh Lake Residential Belt</li>
                    <li>Station Road & Munshi Bazar</li>
                    <li>Adra Railway Colony Hub</li>
                    <li>Santaldih & Balarampur Outposts</li>
                </ul>
            </div>

            <div class="prl-sidebar-box">
                <div class="prl-sidebar-title">Connected Regional Hubs</div>
                <p class="prl-body-p">Direct transport routes connecting Purulia with key cities across Bengal and Jharkhand:</p>
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bankura" class="prl-cluster-link">Movers in Bankura</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-asansol" class="prl-cluster-link">Movers in Asansol</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-durgapur" class="prl-cluster-link">Movers in Durgapur</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-midnapore" class="prl-cluster-link">Movers in Midnapore</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata" class="prl-cluster-link">Movers in Kolkata</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Cluster Linking Section -->
    <section class="prl-cluster-card">
        <h3 class="prl-cluster-title">Purulia District Local Area Network & Connected Transit Hubs</h3>
        <p class="prl-body-p">Shree Ashirwad Packers and Movers maintains active relocation squads and vehicle logistics across all sectors of Purulia and contiguous industrial belts:</p>
        <div class="prl-cluster-grid">
            <span class="prl-cluster-link">Raghabpur More</span>
            <span class="prl-cluster-link">Nilkuthidanga Colony</span>
            <span class="prl-cluster-link">Dulmi-Nadiha Sector</span>
            <span class="prl-cluster-link">Bhatbandh Residential</span>
            <span class="prl-cluster-link">Simulia High School Rd</span>
            <span class="prl-cluster-link">Bongabari Bypass Zone</span>
            <span class="prl-cluster-link">Adra Railway Township</span>
            <span class="prl-cluster-link">Santaldih Thermal Hub</span>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bankura" class="prl-cluster-link">Bankura City Authority</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-asansol" class="prl-cluster-link">Asansol Industrial Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-durgapur" class="prl-cluster-link">Durgapur Steel Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/" class="prl-cluster-link">Ranchi Headquarters</a>
        </div>
    </section>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
