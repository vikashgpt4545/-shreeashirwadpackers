<?php
/**
 * Page: Packers and Movers in Alpha, Greater Noida
 * Description: Hyper-local authority hub for Shree Ashirwad Packers and Movers in Sector Alpha 1 and Alpha 2, Greater Noida.
 * Author: Shree Ashirwad Packers and Movers
 * Meta: 100% Handcrafted Hyper-Local Hub, Google Compliant Schemas, Scoped CSS Parity
 */
defined('ROOT_PATH') OR define('ROOT_PATH', realpath(__DIR__ . '/..'));
require_once ROOT_PATH . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packers and Movers in Alpha Greater Noida | Kothi & Home Shifting</title>
    <meta name="description" content="Certified packers and movers in Alpha Greater Noida. Professional plotted bungalow shifting, independent kothi moving, and commercial logistics across Alpha 1 & Alpha 2.">
    <meta name="keywords" content="packers and movers in alpha greater noida, movers and packers alpha 1 greater noida, house shifting alpha 2 greater noida, kothi shifting greater noida, alpha commercial packers movers">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-alpha-greater-noida">
    <meta property="og:title" content="Packers and Movers in Alpha Greater Noida | Shree Ashirwad Packers">
    <meta property="og:description" content="Professional shifting and relocation services in Sector Alpha 1 and Alpha 2 Greater Noida. Plotted villa moving, commercial shifting, and inter-state logistics.">
    <meta property="og:url" content="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-alpha-greater-noida">
    <meta property="og:type" content="website">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <style>
        /* Scoped styles for Alpha Greater Noida Hub */
        .alp-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px 50px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            color: #1f2937;
            line-height: 1.7;
        }
        .alp-hero-section {
            background: linear-gradient(135deg, #134e4a 0%, #0d9488 55%, #0f766e 100%);
            color: #ffffff;
            padding: 50px 20px;
            text-align: center;
            border-radius: 12px;
            margin-bottom: 35px;
            box-shadow: 0 8px 24px rgba(13, 148, 136, 0.2);
        }
        .alp-hero-title {
            font-size: 2.4rem;
            font-weight: 800;
            color: #ffffff;
            margin-top: 0;
            margin-bottom: 15px;
            line-height: 1.25;
        }
        .alp-hero-subtitle {
            font-size: 1.15rem;
            color: #ccfbf1;
            max-width: 860px;
            margin: 0 auto 22px;
            line-height: 1.6;
        }
        .alp-meta-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            margin-bottom: 25px;
        }
        .alp-badge {
            background-color: rgba(255, 255, 255, 0.15);
            color: #ffffff;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.88rem;
            font-weight: 500;
            backdrop-filter: blur(4px);
            border: 1px solid rgba(255, 255, 255, 0.25);
        }
        .alp-hero-cta {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .alp-btn-primary {
            background-color: #ea580c;
            color: #ffffff;
            padding: 12px 26px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 700;
            font-size: 1rem;
            transition: all 0.2s ease;
            box-shadow: 0 4px 12px rgba(234, 88, 12, 0.35);
        }
        .alp-btn-primary:hover {
            background-color: #c2410c;
            transform: translateY(-2px);
        }
        .alp-btn-secondary {
            background-color: transparent;
            color: #ffffff;
            border: 2px solid #ffffff;
            padding: 10px 24px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.2s ease;
        }
        .alp-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }
        .alp-section-heading {
            font-size: 1.9rem;
            color: #134e4a;
            font-weight: 800;
            margin-top: 35px;
            margin-bottom: 18px;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .alp-section-heading::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: #ea580c;
            border-radius: 2px;
        }
        .alp-intro-p {
            font-size: 1.05rem;
            color: #374151;
            margin-bottom: 16px;
            line-height: 1.75;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
        }
        .alp-section-heading + .alp-intro-p {
            text-align: center;
            max-width: 860px;
            margin: 0 auto 24px;
            color: #4b5563;
        }
        .alp-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .alp-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .alp-grid-3 {
                grid-template-columns: 1fr;
            }
        }
        .alp-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .alp-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            border-color: #ea580c;
        }
        .alp-card h3 {
            color: #134e4a;
            font-size: 1.18rem;
            margin-top: 0;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .alp-card p {
            color: #4b5563;
            font-size: 0.95rem;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .alp-image-container {
            max-width: 580px;
            margin: 24px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }
        .alp-image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .alp-image-container img:hover {
            transform: scale(1.02);
        }
        .alp-image-caption {
            font-size: 0.85rem;
            color: #6b7280;
            text-align: center;
            padding: 8px 12px;
            background: #f9fafb;
            border-top: 1px solid #e5e7eb;
            font-style: italic;
        }
        .alp-table-responsive {
            overflow-x: auto;
            margin: 25px 0;
            background: #ffffff;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }
        .alp-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.95rem;
        }
        .alp-table th {
            background-color: #134e4a;
            color: #ffffff;
            padding: 14px 16px;
            font-weight: 700;
            letter-spacing: 0.3px;
        }
        .alp-table td {
            padding: 12px 16px;
            border-bottom: 1px solid #e5e7eb;
            color: #374151;
        }
        .alp-table tr:last-child td {
            border-bottom: none;
        }
        .alp-table tr:nth-child(even) {
            background-color: #f8fafc;
        }
        .alp-highlight-box {
            background-color: #f0fdfa;
            border-left: 4px solid #0d9488;
            padding: 20px 24px;
            border-radius: 0 8px 8px 0;
            margin: 25px auto;
            max-width: 980px;
        }
        .alp-highlight-box h4 {
            color: #134e4a;
            font-size: 1.15rem;
            margin-top: 0;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .alp-step-card {
            display: flex;
            gap: 16px;
            align-items: flex-start;
            margin: 0 auto 16px;
            max-width: 880px;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 18px 22px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
        }
        .alp-step-num {
            background: #134e4a;
            color: #ffffff;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            flex-shrink: 0;
            font-size: 1rem;
        }
        .alp-faq-item {
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            margin: 0 auto 14px;
            max-width: 950px;
            padding: 18px 22px;
            background: #ffffff;
        }
        .alp-faq-question {
            font-size: 1.12rem;
            font-weight: 700;
            color: #134e4a;
            margin-top: 0;
            margin-bottom: 8px;
        }
        .alp-faq-answer {
            color: #4b5563;
            margin-bottom: 0;
            font-size: 0.98rem;
            line-height: 1.65;
        }
        .alp-cluster-nav {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 24px;
            margin: 35px auto 25px;
            max-width: 1000px;
        }
        .alp-cluster-nav h4 {
            color: #0f172a;
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 1.15rem;
            font-weight: 700;
            text-align: center;
        }
        .alp-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
            gap: 12px;
        }
        .alp-cluster-link {
            display: block;
            background: #ffffff;
            border: 1px solid #cbd5e1;
            padding: 10px 14px;
            border-radius: 8px;
            color: #134e4a;
            text-decoration: none;
            font-size: 0.92rem;
            font-weight: 600;
            text-align: center;
            transition: all 0.2s ease;
        }
        .alp-cluster-link:hover {
            border-color: #134e4a;
            background-color: #134e4a;
            color: #ffffff;
            transform: translateY(-2px);
        }
        .alp-cta-banner {
            background: linear-gradient(135deg, #134e4a 0%, #0d9488 100%);
            color: #ffffff;
            border-radius: 12px;
            padding: 35px 25px;
            text-align: center;
            margin: 35px auto 0;
            max-width: 1000px;
            box-shadow: 0 8px 20px rgba(13, 148, 136, 0.25);
        }
        .alp-cta-banner h3 {
            color: #ffffff;
            font-size: 1.6rem;
            font-weight: 800;
            margin-top: 0;
            margin-bottom: 12px;
        }
        .alp-cta-banner p {
            color: #ccfbf1;
            max-width: 750px;
            margin: 0 auto 20px;
            font-size: 1.05rem;
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Alpha Greater Noida",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "telephone": "+91-8409531615",
        "email": "support@shreeashirwadpackers.com",
        "url": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-alpha-greater-noida",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Commercial Belt, Sector Alpha 1",
            "addressLocality": "Greater Noida",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "201308",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "28.4735",
            "longitude": "77.5118"
        },
        "priceRange": "₹3,500 - ₹52,000",
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
            "opens": "07:00",
            "closes": "22:00"
        }
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
                "name": "Greater Noida Relocation",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-greater-noida"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Alpha Greater Noida",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-alpha-greater-noida"
            }
        ]
    }
    </script>

    <!-- Schema 3: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Plotted Kothi & Home Relocation in Alpha Greater Noida",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "Place",
            "name": "Sector Alpha 1 & Alpha 2, Greater Noida, Uttar Pradesh"
        },
        "description": "Comprehensive independent kothi moving, plotted duplex shifting, commercial office relocation, and inter-state logistics in Alpha Greater Noida.",
        "serviceType": "Relocation & Moving Services"
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
                "name": "How do you navigate truck parking inside Sector Alpha 1 and Alpha 2 residential blocks?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Sectors Alpha 1 and 2 feature wide outer avenues and planned inner residential lanes across Blocks A through F. We deploy medium-chassis moving trucks (14-foot containers) and coordinate vehicle positioning directly in private driveways or designated street parking bays without blocking neighborhood traffic."
                }
            },
            {
                "@type": "Question",
                "name": "Can your team handle heavy antique furniture and terrace garden items from independent kothis?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our certified crews specialize in plotted kothi relocations. We dismantle heavy wooden double beds, wardrobes, and modular kitchens, pack delicate terrace planters in custom crates, and safely navigate internal duplex staircases using padded shoulder lifting straps."
                }
            },
            {
                "@type": "Question",
                "name": "What are the estimated relocation charges for shifting within Sector Alpha?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting charges within Sector Alpha 1 and 2 typically range from ₹3,500 to ₹6,000 for 1 BHK, ₹6,500 to ₹10,500 for a 2 BHK floor, and ₹10,500 to ₹17,000 for a multi-floor independent kothi or 3 BHK residence, including full packaging, labor, and transport."
                }
            },
            {
                "@type": "Question",
                "name": "Can you handle long-distance relocation from Sector Alpha to Bihar or Jharkhand?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our primary Greater Noida operations provide direct closed container routes connecting Sector Alpha to Ranchi, Jamshedpur, Patna, Gaya, and Dhanbad via the Yamuna Expressway with GPS tracking and comprehensive transit insurance."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide office and commercial shifting in Alpha 1 Commercial Centre?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we regularly execute corporate office, coaching institute, and retail shop relocations across the Alpha 1 Commercial Belt, providing weekend and after-hours moving with zero business interruption."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php require_once ROOT_PATH . '/includes/header.php'; ?>

<main class="alp-wrap">
    <!-- Hero Section -->
    <section class="alp-hero-section">
        <h1 class="alp-hero-title">Packers and Movers in Alpha Greater Noida</h1>
        <p class="alp-hero-subtitle">The leading relocation experts for Sector Alpha 1 and Alpha 2. Providing turnkey plotted kothi moving, independent villa shifting, commercial office transfers, and inter-state logistics with 100% verified safety.</p>
        <div class="alp-meta-badges">
            <span class="alp-badge">✓ Sector Alpha 1 & 2 Plotted Home Specialists</span>
            <span class="alp-badge">✓ Alpha Commercial Belt Logistics</span>
            <span class="alp-badge">✓ Master Carpentry & Staircase Rigging</span>
            <span class="alp-badge">✓ 100% Insured Direct Highway Fleets</span>
        </div>
        <div class="alp-hero-cta">
            <a href="tel:+918409531615" class="alp-btn-primary">Call Now: 084095 31615</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="alp-btn-secondary">Check Rate Calculator</a>
        </div>
    </section>

    <!-- Overview Section -->
    <section>
        <h2 class="alp-section-heading">Established Residential & Commercial Moving in Sector Alpha</h2>
        <p class="alp-intro-p">Sector Alpha stands as the founding cornerstone, most established residential neighborhood, and premier civic center of Greater Noida. Divided into Sector Alpha 1 and Sector Alpha 2, this centrally located enclave lies immediately adjacent to the iconic Pari Chowk, Sector Beta 1, Sector Gamma 1, and the bustling Commercial Belt. Home to prominent educational institutions like Ryan International School and Somerville School, prestigious healthcare facilities, community centers, and lush recreational spaces like the historic City Park, Sector Alpha offers a serene, mature urban lifestyle characterized by wide tree-lined avenues and spacious residential plots.</p>
        <p class="alp-intro-p">The residential landscape of Sector Alpha is uniquely distinguished by its plotted kothis, duplex bungalows, and builder floors across Blocks A, B, C, D, E, and F (with plot sizes ranging from 120 square meters to 500 square meters). Relocating within plotted residential sectors presents logistical characteristics distinct from high-rise towers. Rather than relying on service elevators, movers must safely navigate multi-story interior staircases, wide balconies, heavy teak wood furnishings, rooftop water filter units, and delicate terrace garden plants. Furthermore, the thriving Alpha 1 Commercial Centre houses bustling banks, corporate branch offices, coaching centers, and retail showrooms that require organized, time-sensitive commercial relocation services. Shree Ashirwad Packers and Movers brings over a decade of verified local expertise, dedicated furniture carpenters, and specialized lifting gear to execute seamless moves across Sector Alpha.</p>

        <div class="alp-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loading in container truck in Sector Alpha Greater Noida" width="580" height="360">
            <div class="alp-image-caption">Careful loading and cargo securing inside covered container trucks in Sector Alpha Greater Noida</div>
        </div>

        <div class="alp-highlight-box">
            <h4>Direct Access to Alpha 1 Metro Station & Pari Chowk Highway Ramps</h4>
            <p class="alp-intro-p">Conveniently positioned next to the Alpha 1 Metro Station on the Aqua Line and two minutes from Pari Chowk, our moving trucks can maneuver swiftly along Alpha's wide sector roads and merge onto the Noida-Greater Noida Expressway or Yamuna Expressway without delays.</p>
        </div>

        <p class="alp-intro-p">Whether you are moving into an independent duplex kothi in Sector Alpha 2, shifting a corporate office in Alpha Commercial Belt, or relocating your family across state borders to our company headquarters in Jharkhand or Bihar, our professional crews guarantee on-time arrival, courteous service, and complete transit safety.</p>
        <p class="alp-intro-p">Our team members take special care when parking our container vehicles along residential avenues, ensuring that neighbor gates, private driveways, and school commute routes remain completely unblocked during morning and afternoon loading hours.</p>
    </section>

    <!-- Specialized Services Grid -->
    <section>
        <h2 class="alp-section-heading">Specialized Relocation Capabilities for Sector Alpha</h2>
        <p class="alp-intro-p">We design customized relocation workflows structured specifically around the plotted bungalows, independent duplex houses, and commercial centers of Alpha 1 and Alpha 2.</p>

        <div class="alp-grid-3">
            <div class="alp-card">
                <h3>Plotted Kothi & Villa Shifting</h3>
                <p>Complete packing and shifting for multi-level plotted bungalows across Blocks A to F in Alpha 1 and 2, handling heavy teak furniture, temple units, and terrace items.</p>
            </div>
            <div class="alp-card">
                <h3>Staircase Rigging & Heavy Handling</h3>
                <p>Specialized shoulder harnesses, furniture dollies, and balcony hoisting straps to maneuver oversized double-door refrigerators and solid wood wardrobes safely down narrow stairs.</p>
            </div>
            <div class="alp-card">
                <h3>Alpha Commercial Belt Office Moves</h3>
                <p>Weekend and overnight commercial shifting for corporate branch offices, financial consultancies, clinics, and retail stores in the Alpha 1 Commercial Centre.</p>
            </div>
            <div class="alp-card">
                <h3>Modular Furniture Carpentry</h3>
                <p>Master carpenters on-site to dismantle and reassemble hydraulic storage beds, modular 4-door wardrobes, dressing tables, and customized study workstations.</p>
            </div>
            <div class="alp-card">
                <h3>Inter-State Highway Corridors</h3>
                <p>Direct closed container transit connecting Sector Alpha to Eastern India corridors including Ranchi, Jamshedpur, Patna, Gaya, and Kolkata with real-time GPS tracking.</p>
            </div>
            <div class="alp-card">
                <h3>Enclosed Auto & Bike Transport</h3>
                <p>Safe door-to-door transit for family cars, SUVs, and motorbikes using enclosed hydraulic carriers with digital pre-dispatch inspection reports.</p>
            </div>
        </div>

        <div class="alp-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Bubble wrap and carton packaging for Sector Alpha homes" width="580" height="360">
            <div class="alp-image-caption">Multi-layer bubble wrap, foam corner protectors, and 5-ply cartons safeguard glassware and furniture</div>
        </div>

        <div class="alp-highlight-box">
            <h4>Parent Regional Authority & Transparent Moving Rates</h4>
            <p class="alp-intro-p">Review our master regional relocation guide on the <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-greater-noida">Packers and Movers in Greater Noida</a> city authority page, check adjacent institutional routes on <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-knowledge-park-greater-noida">Packers and Movers in Knowledge Park Greater Noida</a>, or verify instant moving estimates on our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">Live Tariff Calculator</a>.</p>
        </div>
    </section>

    <!-- Transparent Rate Table -->
    <section>
        <h2 class="alp-section-heading">Transparent Relocation Rates for Sector Alpha</h2>
        <p class="alp-intro-p">We maintain absolute pricing transparency with zero hidden fees. Below is our standard pricing structure for moves originating in Sector Alpha 1 and Alpha 2 Greater Noida. Final costs depend on your inventory volume, packaging tier, and distance.</p>

        <div class="alp-table-responsive">
            <table class="alp-table">
                <thead>
                    <tr>
                        <th>Housing / Move Category</th>
                        <th>Standard Inclusions</th>
                        <th>Within Greater Noida</th>
                        <th>To Central Noida / Delhi NCR</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1 BHK Independent Floor</td>
                        <td>Complete packing, loading, local transport, unloading</td>
                        <td>₹3,500 – ₹6,000</td>
                        <td>₹5,500 – ₹8,500</td>
                    </tr>
                    <tr>
                        <td>2 BHK Builder Floor / House</td>
                        <td>Multi-layer packing, bed dismantle, transit setup</td>
                        <td>₹6,500 – ₹10,500</td>
                        <td>₹9,000 – ₹14,500</td>
                    </tr>
                    <tr>
                        <td>3 BHK Plotted Kothi (Single Floor)</td>
                        <td>Full bubble wrap, electronics crating, furniture carpentry</td>
                        <td>₹10,500 – ₹16,500</td>
                        <td>₹14,000 – ₹21,500</td>
                    </tr>
                    <tr>
                        <td>Full Duplex Kothi (300+ Sqm)</td>
                        <td>White-glove packing, wooden crating, master crew, stairs rigging</td>
                        <td>₹16,000 – ₹26,000</td>
                        <td>₹22,000 – ₹36,000</td>
                    </tr>
                    <tr>
                        <td>Commercial Office / Shop Move</td>
                        <td>Modular workstation dismantle, IT server packing, transit</td>
                        <td>₹8,000 – ₹18,000</td>
                        <td>Corridor-based quote</td>
                    </tr>
                    <tr>
                        <td>Inter-State Move (to Bihar / Jharkhand)</td>
                        <td>Closed container, toll, transit insurance, full room setup</td>
                        <td>₹22,000 – ₹36,000 (2 BHK)</td>
                        <td>₹28,000 – ₹48,000 (3 BHK)</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="alp-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture dismantling and carpentry in Sector Alpha" width="580" height="360">
            <div class="alp-image-caption">Skilled carpenters disassembling hydraulic double beds and wardrobes for scratch-free transit</div>
        </div>

        <div class="alp-highlight-box">
            <h4>All-Inclusive Guaranteed Estimates & Transparent Billing</h4>
            <p class="alp-intro-p">Every formal quotation from Shree Ashirwad Packers and Movers is all-inclusive and fully documented, covering labor wages, packing materials, transit documentation, and basic unloading assistance at your destination.</p>
            <p class="alp-intro-p" style="margin-bottom: 0;">We also provide flexible scheduling for weekend shifting, ensuring that working families in Sector Alpha and surrounding IT hubs can complete their move seamlessly without taking time off from their professional duties.</p>
        </div>
    </section>

    <!-- 5-Step Operational Methodology -->
    <section>
        <h2 class="alp-section-heading">Our Proven 5-Step Kothi Moving Workflow</h2>
        <p class="alp-intro-p">Moving in independent plotted kothis requires customized staging and meticulous care. We follow a proven 5-step operational protocol to guarantee punctuality and eliminate moving-day stress.</p>

        <div class="alp-step-card">
            <div class="alp-step-num">1</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #134e4a; font-weight: 700;">Pre-Move On-Site or Digital Survey</h4>
                <p class="alp-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">We evaluate your inventory list via digital video consultation or an in-person kothi visit in Sector Alpha 1 or 2, assessing staircase widths, large teak furniture, and crating needs to furnish a firm written quote.</p>
            </div>
        </div>

        <div class="alp-step-card">
            <div class="alp-step-num">2</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #134e4a; font-weight: 700;">Driveway & Lane Parking Coordination</h4>
                <p class="alp-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Our team coordinates truck arrival timing to park directly in your kothi driveway or allocated street parking bay, avoiding residential rush hours and ensuring unblocked neighborhood traffic.</p>
            </div>
        </div>

        <div class="alp-step-card">
            <div class="alp-step-num">3</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #134e4a; font-weight: 700;">Systematic Multi-Layered Packing</h4>
                <p class="alp-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Using heavy 5-ply cartons, bubble wrap, thermocol sheets, and moisture-resistant stretch film, we methodically pack kitchen chinaware, electronics, books, and delicate home decor items.</p>
            </div>
        </div>

        <div class="alp-step-card">
            <div class="alp-step-num">4</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #134e4a; font-weight: 700;">GPS-Monitored Shockproof Transportation</h4>
                <p class="alp-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">All items are loaded into clean, weatherproof containerized moving trucks fitted with interior wall tie-down straps, ensuring zero shifting during expressway transit. Real-time GPS tracking keeps you informed throughout.</p>
            </div>
        </div>

        <div class="alp-step-card">
            <div class="alp-step-num">5</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #134e4a; font-weight: 700;">Unloading, Furniture Reassembly & Debris Removal</h4>
                <p class="alp-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">At your new residence, our team unloads items into their designated rooms, reassembles beds and dining tables, assists with preliminary unboxing, and collects all discarded packing scrap.</p>
            </div>
        </div>

        <div class="alp-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Sector Alpha" width="580" height="360">
            <div class="alp-image-caption">Covered container fleet providing prompt, scratch-free delivery across Greater Noida</div>
        </div>
    </section>

    <!-- Why Choose Us Grid -->
    <section>
        <h2 class="alp-section-heading">Why Sector Alpha Residents Trust Shree Ashirwad</h2>
        <p class="alp-intro-p">With thousands of successful moves conducted across Delhi NCR and Eastern India, Shree Ashirwad Packers and Movers has earned an unmatched reputation for integrity, reliability, and precision.</p>

        <div class="alp-grid-3">
            <div class="alp-card">
                <h3>Plotted Kothi Experience</h3>
                <p>Our teams understand the architectural layout of Alpha duplexes, managing staircase navigation, heavy furniture disassembly, and driveway loading with precision.</p>
            </div>
            <div class="alp-card">
                <h3>Certified Background-Checked Staff</h3>
                <p>All loaders, drivers, and packers are permanent, background-verified professionals who work respectfully within high-end family residential environments.</p>
            </div>
            <div class="alp-card">
                <h3>Master Carpentry Assistance</h3>
                <p>Our moving crews include experienced carpenters equipped with precision power tools to dismantle and reassemble all modern and antique furniture safely.</p>
            </div>
            <div class="alp-card">
                <h3>100% Comprehensive Transit Insurance</h3>
                <p>Full third-party transit insurance coverage covering road transit, accidental collision, and weather hazards, ensuring total financial security for your goods.</p>
            </div>
            <div class="alp-card">
                <h3>Dedicated Move Supervisor</h3>
                <p>A single dedicated coordinator manages your entire relocation schedule from initial survey to final placement, providing regular updates and direct support.</p>
            </div>
            <div class="alp-card">
                <h3>Direct Pan-India Highway Corridors</h3>
                <p>Direct routes from Sector Alpha to our central headquarters at <a href="<?php echo SITE_BASE_URL; ?>/">Packers and Movers in Ranchi</a>, plus direct links to Patna, Jamshedpur, and Dhanbad.</p>
            </div>
        </div>

        <div class="alp-highlight-box">
            <h4>Senior Citizen Relocation Assistance in Sector Alpha</h4>
            <p class="alp-intro-p">Sector Alpha is home to many retired civil servants, defense personnel, and senior citizens. We offer specialized senior citizen moving assistance, providing gentle handling, complete room staging, and electrical appliance reconnection support.</p>
        </div>

        <p class="alp-intro-p">We additionally maintain secure, pest-controlled warehouse storage facilities near Pari Chowk where residents can safely store household goods during home remodeling or construction work at nominal monthly fees.</p>
    </section>

    <!-- Frequently Asked Questions -->
    <section>
        <h2 class="alp-section-heading">Frequently Asked Questions &mdash; Alpha Greater Noida Moving</h2>
        <p class="alp-intro-p">Here are practical answers to the most common questions residents, kothi owners, and businesses ask when planning a relocation in Sector Alpha Greater Noida.</p>

        <div class="alp-faq-item">
            <h4 class="alp-faq-question">How do you navigate truck parking inside Sector Alpha 1 and Alpha 2 residential blocks?</h4>
            <p class="alp-faq-answer">Sectors Alpha 1 and 2 feature wide outer avenues and planned inner residential lanes across Blocks A through F. We deploy medium-chassis moving trucks (14-foot containers) and coordinate vehicle positioning directly in private driveways or designated street parking bays without blocking neighborhood traffic.</p>
        </div>

        <div class="alp-faq-item">
            <h4 class="alp-faq-question">Can your team handle heavy antique furniture and terrace garden items from independent kothis?</h4>
            <p class="alp-faq-answer">Yes, our certified crews specialize in plotted kothi relocations. We dismantle heavy wooden double beds, wardrobes, and modular kitchens, pack delicate terrace planters in custom crates, and safely navigate internal duplex staircases using padded shoulder lifting straps.</p>
        </div>

        <div class="alp-faq-item">
            <h4 class="alp-faq-question">What are the estimated relocation charges for shifting within Sector Alpha?</h4>
            <p class="alp-faq-answer">Local shifting charges within Sector Alpha 1 and 2 typically range from ₹3,500 to ₹6,000 for 1 BHK, ₹6,500 to ₹10,500 for a 2 BHK floor, and ₹10,500 to ₹17,000 for a multi-floor independent kothi or 3 BHK residence, including full packaging, labor, and transport.</p>
        </div>

        <div class="alp-faq-item">
            <h4 class="alp-faq-question">Can you handle long-distance relocation from Sector Alpha to Bihar or Jharkhand?</h4>
            <p class="alp-faq-answer">Yes, our primary Greater Noida operations provide direct closed container routes connecting Sector Alpha to Ranchi, Jamshedpur, Patna, Gaya, and Dhanbad via the Yamuna Expressway with GPS tracking and comprehensive transit insurance.</p>
        </div>

        <div class="alp-faq-item">
            <h4 class="alp-faq-question">Do you provide office and commercial shifting in Alpha 1 Commercial Centre?</h4>
            <p class="alp-faq-answer">Yes, we regularly execute corporate office, coaching institute, and retail shop relocations across the Alpha 1 Commercial Belt, providing weekend and after-hours moving with zero business interruption.</p>
        </div>
    </section>

    <!-- Connected Cluster Navigation -->
    <section class="alp-cluster-nav">
        <h4>Explore Connected Relocation Hubs Across Greater Noida & Noida</h4>
        <div class="alp-cluster-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-pari-chowk-greater-noida" class="alp-cluster-link">Pari Chowk Greater Noida</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-knowledge-park-greater-noida" class="alp-cluster-link">Knowledge Park Greater Noida</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-greater-noida" class="alp-cluster-link">Greater Noida City Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida-extension" class="alp-cluster-link">Noida Extension</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sector-150-noida" class="alp-cluster-link">Sector 150 Noida</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sector-137-noida" class="alp-cluster-link">Sector 137 Noida</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida" class="alp-cluster-link">Noida City Authority Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/" class="alp-cluster-link">Company Headquarters (Ranchi)</a>
        </div>
    </section>

    <!-- Call to Action Banner -->
    <section class="alp-cta-banner">
        <h3>Moving in Sector Alpha Greater Noida?</h3>
        <p>Get a guaranteed upfront moving quote from Sector Alpha's most trusted kothi and home relocation team today.</p>
        <div class="alp-hero-cta">
            <a href="tel:+918409531615" class="alp-btn-primary">Call Now: 084095 31615</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="alp-btn-secondary">Check Rate Calculator</a>
        </div>
    </section>
</main>

<?php require_once ROOT_PATH . '/includes/footer.php'; ?>
</body>
</html>
