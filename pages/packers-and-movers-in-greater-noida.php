<?php
/**
 * Page: Packers and Movers in Greater Noida
 * Description: Tier 1 City Authority Hub for Shree Ashirwad Packers and Movers in Greater Noida.
 * Author: Shree Ashirwad Packers and Movers
 * Meta: 100% Handcrafted City Authority Hub, Google Compliant Schemas, Scoped CSS Parity
 */
defined('ROOT_PATH') OR define('ROOT_PATH', realpath(__DIR__ . '/..'));
require_once ROOT_PATH . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packers and Movers in Greater Noida | Trusted Relocation Services</title>
    <meta name="description" content="Certified packers and movers in Greater Noida. Premier household shifting, student moves, industrial logistics, and corporate relocation across Pari Chowk, Knowledge Park, Alpha & Beta.">
    <meta name="keywords" content="packers and movers in greater noida, movers and packers greater noida, house shifting greater noida, pari chowk packers movers, knowledge park student shifting">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-greater-noida">
    <meta property="og:title" content="Packers and Movers in Greater Noida | Shree Ashirwad Packers">
    <meta property="og:description" content="Award-winning moving company in Greater Noida offering safe household shifting, vehicle transportation, and inter-state moving services.">
    <meta property="og:url" content="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-greater-noida">
    <meta property="og:type" content="website">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <style>
        /* Scoped styles for Greater Noida City Authority Hub */
        .gn-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px 50px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            color: #1f2937;
            line-height: 1.7;
        }
        .gn-hero-section {
            background: linear-gradient(135deg, #0c4a6e 0%, #0284c7 55%, #0369a1 100%);
            color: #ffffff;
            padding: 50px 20px;
            text-align: center;
            border-radius: 12px;
            margin-bottom: 35px;
            box-shadow: 0 8px 24px rgba(2, 132, 199, 0.2);
        }
        .gn-hero-title {
            font-size: 2.4rem;
            font-weight: 800;
            color: #ffffff;
            margin-top: 0;
            margin-bottom: 15px;
            line-height: 1.25;
        }
        .gn-hero-subtitle {
            font-size: 1.15rem;
            color: #e0f2fe;
            max-width: 860px;
            margin: 0 auto 22px;
            line-height: 1.6;
        }
        .gn-meta-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            margin-bottom: 25px;
        }
        .gn-badge {
            background-color: rgba(255, 255, 255, 0.15);
            color: #ffffff;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.88rem;
            font-weight: 500;
            backdrop-filter: blur(4px);
            border: 1px solid rgba(255, 255, 255, 0.25);
        }
        .gn-hero-cta {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .gn-btn-primary {
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
        .gn-btn-primary:hover {
            background-color: #c2410c;
            transform: translateY(-2px);
        }
        .gn-btn-secondary {
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
        .gn-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }
        .gn-section-heading {
            font-size: 1.9rem;
            color: #0c4a6e;
            font-weight: 800;
            margin-top: 35px;
            margin-bottom: 18px;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .gn-section-heading::after {
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
        .gn-intro-p {
            font-size: 1.05rem;
            color: #374151;
            margin-bottom: 16px;
            line-height: 1.75;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
        }
        .gn-section-heading + .gn-intro-p {
            text-align: center;
            max-width: 860px;
            margin: 0 auto 24px;
            color: #4b5563;
        }
        .gn-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .gn-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .gn-grid-3 {
                grid-template-columns: 1fr;
            }
        }
        .gn-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .gn-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            border-color: #ea580c;
        }
        .gn-card h3 {
            color: #0c4a6e;
            font-size: 1.18rem;
            margin-top: 0;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .gn-card p {
            color: #4b5563;
            font-size: 0.95rem;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .gn-image-container {
            max-width: 580px;
            margin: 24px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }
        .gn-image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .gn-image-container img:hover {
            transform: scale(1.02);
        }
        .gn-image-caption {
            font-size: 0.85rem;
            color: #6b7280;
            text-align: center;
            padding: 8px 12px;
            background: #f9fafb;
            border-top: 1px solid #e5e7eb;
            font-style: italic;
        }
        .gn-table-responsive {
            overflow-x: auto;
            margin: 25px 0;
            background: #ffffff;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }
        .gn-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.95rem;
        }
        .gn-table th {
            background-color: #0c4a6e;
            color: #ffffff;
            padding: 14px 16px;
            font-weight: 700;
            letter-spacing: 0.3px;
        }
        .gn-table td {
            padding: 12px 16px;
            border-bottom: 1px solid #e5e7eb;
            color: #374151;
        }
        .gn-table tr:last-child td {
            border-bottom: none;
        }
        .gn-table tr:nth-child(even) {
            background-color: #f8fafc;
        }
        .gn-highlight-box {
            background-color: #f0f9ff;
            border-left: 4px solid #0284c7;
            padding: 20px 24px;
            border-radius: 0 8px 8px 0;
            margin: 25px auto;
            max-width: 980px;
        }
        .gn-highlight-box h4 {
            color: #0c4a6e;
            font-size: 1.15rem;
            margin-top: 0;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .gn-step-card {
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
        .gn-step-num {
            background: #0c4a6e;
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
        .gn-faq-item {
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            margin: 0 auto 14px;
            max-width: 950px;
            padding: 18px 22px;
            background: #ffffff;
        }
        .gn-faq-question {
            font-size: 1.12rem;
            font-weight: 700;
            color: #0c4a6e;
            margin-top: 0;
            margin-bottom: 8px;
        }
        .gn-faq-answer {
            color: #4b5563;
            margin-bottom: 0;
            font-size: 0.98rem;
            line-height: 1.65;
        }
        .gn-cluster-nav {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 24px;
            margin: 35px auto 25px;
            max-width: 1000px;
        }
        .gn-cluster-nav h4 {
            color: #0f172a;
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 1.15rem;
            font-weight: 700;
            text-align: center;
        }
        .gn-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
            gap: 12px;
        }
        .gn-cluster-link {
            display: block;
            background: #ffffff;
            border: 1px solid #cbd5e1;
            padding: 10px 14px;
            border-radius: 8px;
            color: #0c4a6e;
            text-decoration: none;
            font-size: 0.92rem;
            font-weight: 600;
            text-align: center;
            transition: all 0.2s ease;
        }
        .gn-cluster-link:hover {
            border-color: #0c4a6e;
            background-color: #0c4a6e;
            color: #ffffff;
            transform: translateY(-2px);
        }
        .gn-cta-banner {
            background: linear-gradient(135deg, #0c4a6e 0%, #0284c7 100%);
            color: #ffffff;
            border-radius: 12px;
            padding: 35px 25px;
            text-align: center;
            margin: 35px auto 0;
            max-width: 1000px;
            box-shadow: 0 8px 20px rgba(2, 132, 199, 0.25);
        }
        .gn-cta-banner h3 {
            color: #ffffff;
            font-size: 1.6rem;
            font-weight: 800;
            margin-top: 0;
            margin-bottom: 12px;
        }
        .gn-cta-banner p {
            color: #e0f2fe;
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
        "name": "Shree Ashirwad Packers and Movers Greater Noida",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "telephone": "+91-8409531615",
        "email": "support@shreeashirwadpackers.com",
        "url": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-greater-noida",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Commercial Belt, Near Pari Chowk",
            "addressLocality": "Greater Noida",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "201308",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "28.4744",
            "longitude": "77.5040"
        },
        "priceRange": "₹3,500 - ₹55,000",
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
                "name": "Delhi NCR Relocation",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Greater Noida Hub",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-greater-noida"
            }
        ]
    }
    </script>

    <!-- Schema 3: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Comprehensive Relocation & Logistics Services in Greater Noida",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "City",
            "name": "Greater Noida, Uttar Pradesh"
        },
        "description": "Certified household shifting, student accommodation moving, corporate office relocation, and industrial machinery logistics across Greater Noida.",
        "serviceType": "Relocation & Logistics Services"
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
                "name": "What relocation services do you provide in Greater Noida?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We offer complete home shifting for plotted bungalows and high-rise apartments, student hostel transfers in Knowledge Park, corporate office moves, factory logistics across Ecotech and Surajpur, and pan-India container moving."
                }
            },
            {
                "@type": "Question",
                "name": "How do you handle moves around Pari Chowk during peak traffic hours?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Pari Chowk is the primary gateway into Greater Noida. We schedule truck transit during non-peak morning or early afternoon hours, utilizing the service lanes of the Noida-Greater Noida Expressway and Eastern Peripheral Expressway to avoid traffic bottlenecks."
                }
            },
            {
                "@type": "Question",
                "name": "What are the approximate moving rates for shifting within Greater Noida?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Shifting charges within Greater Noida start at ₹3,500 to ₹6,000 for 1 BHK, ₹6,500 to ₹11,000 for 2 BHK, and ₹10,500 to ₹17,000 for 3 BHK homes, depending on floor levels, packing specifications, and elevator access."
                }
            },
            {
                "@type": "Question",
                "name": "Can you handle inter-state moves from Greater Noida to Bihar and Jharkhand?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we run regular direct closed container trucks connecting Greater Noida directly to Ranchi, Patna, Gaya, Jamshedpur, Bokaro, and Dhanbad via the Yamuna Expressway and Agra-Lucknow Expressway with real-time GPS tracking."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide student-friendly mini-moving packages for Knowledge Park colleges?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide cost-effective mini-move packages for students and faculty across Sharda University, Galgotias University, and Bennett University, covering single-room baggage, books, laptops, and study desks."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php require_once ROOT_PATH . '/includes/header.php'; ?>

<main class="gn-wrap">
    <!-- Hero Section -->
    <section class="gn-hero-section">
        <h1 class="gn-hero-title">Packers and Movers in Greater Noida</h1>
        <p class="gn-hero-subtitle">The trusted authority for residential shifting, university student relocations, and industrial logistics across Greater Noida. Serving Pari Chowk, Knowledge Park, Alpha, Beta, Gamma, Delta, and Ecotech with 100% verified safety.</p>
        <div class="gn-meta-badges">
            <span class="gn-badge">✓ Pari Chowk Central Fleet Hub</span>
            <span class="gn-badge">✓ Knowledge Park Student & Faculty Shifting</span>
            <span class="gn-badge">✓ Plotted Villa & Sector Housing Specialists</span>
            <span class="gn-badge">✓ Direct Yamuna & Eastern Peripheral Routes</span>
        </div>
        <div class="gn-hero-cta">
            <a href="tel:+918409531615" class="gn-btn-primary">Call Now: 084095 31615</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="gn-btn-secondary">Check Rate Calculator</a>
        </div>
    </section>

    <!-- Overview Section -->
    <section>
        <h2 class="gn-section-heading">Premier Relocation & Logistics Infrastructure in Greater Noida</h2>
        <p class="gn-intro-p">Greater Noida represents one of modern India's most expansive, forward-looking planned urban centers. Administered by the Greater Noida Industrial Development Authority (GNIDA), this world-class metropolis is globally renowned for its grand boulevards, extensive green landscaping, top-tier academic institutions, and modern industrial hubs. Built around the iconic gateway of Pari Chowk, Greater Noida seamlessly integrates expansive educational clusters in Knowledge Park (Phases I through V), vibrant commercial and residential sectors (Alpha, Beta, Gamma, Delta, Omicron, Zeta, Chi, and Pi), and dynamic manufacturing centers across Ecotech and Surajpur.</p>
        <p class="gn-intro-p">The logistical fabric of Greater Noida is uniquely diverse. Unlike congested inner cities, Greater Noida features 60-meter wide arterial boulevards, seamless access to the 6-lane Noida-Greater Noida Expressway, direct connectivity to the Yamuna Expressway heading towards Mathura, Agra, and the upcoming Jewar International Airport, and unhindered bypass routes via the Eastern Peripheral Expressway (KGP Expressway). The Aqua Line Metro further threads through key residential and commercial sectors from Sector 51 Noida down to the Depot Station in Greater Noida. Shree Ashirwad Packers and Movers has established its primary Greater Noida operational base near Pari Chowk to provide rapid, verified moving services for residents, university faculties, students, and corporate facilities alike.</p>

        <div class="gn-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loading in container truck in Greater Noida" width="580" height="360">
            <div class="gn-image-caption">Professional loading and shock-absorbent stacking inside containerized trucks in Greater Noida</div>
        </div>

        <div class="gn-highlight-box">
            <h4>Strategic Highway Connectivity via Yamuna & Eastern Peripheral Expressways</h4>
            <p class="gn-intro-p">Our Greater Noida transport terminal provides immediate access to the Yamuna Expressway and Eastern Peripheral Expressway, enabling our heavy container trucks to depart directly towards Uttar Pradesh, Haryana, Rajasthan, Bihar, and Jharkhand without entering urban congestion zones.</p>
        </div>

        <p class="gn-intro-p">Whether you are relocating into an independent plotted kothi in Sector Alpha 1, moving an executive apartment in Sector Chi, shifting student belongings near Sharda University, or relocating corporate machinery across Ecotech, Shree Ashirwad Packers and Movers ensures an effortless moving experience backed by a 100% zero-damage guarantee.</p>
        <p class="gn-intro-p">Our local operations span across all key residential and commercial sectors of Greater Noida, including Alpha 1 and 2, Beta 1 and 2, Gamma 1 and 2, Delta 1, 2 and 3, Swarn Nagari, Pi 1 and 2, Chi 1 to 5, Zeta 1 and 2, and Omicron 1, 2 and 3. Each sector features a distinctive blend of spacious plotted residential properties, gated independent villa clusters, and ultra-modern high-rise condominiums that require specialized handling equipment, experienced furniture carpenters, and dedicated loading crews.</p>
    </section>

    <!-- Specialized Services Grid -->
    <section>
        <h2 class="gn-section-heading">Comprehensive Relocation Solutions Across Greater Noida</h2>
        <p class="gn-intro-p">We design customized relocation workflows tailored specifically to the diverse housing typologies, student cycles, and industrial requirements of Greater Noida.</p>

        <div class="gn-grid-3">
            <div class="gn-card">
                <h3>Plotted Kothi & Villa Relocation</h3>
                <p>Complete packing and shifting for independent duplex homes and multi-story bungalows across Sectors Alpha, Beta, Gamma, and Delta, handling heavy teak furniture and lawn items.</p>
            </div>
            <div class="gn-card">
                <h3>High-Rise Condominium Shifting</h3>
                <p>Specialized elevator padding and corridor protection for premier societies in Sectors Zeta, Chi, Pi, and Omicron, adhering to all RWA guidelines and security clearances.</p>
            </div>
            <div class="gn-card">
                <h3>Student & Faculty Mini-Moves</h3>
                <p>Affordable, efficient moving solutions for students and academic staff across Knowledge Park universities (Sharda, Galgotias, Bennett, Gautam Buddha University).</p>
            </div>
            <div class="gn-card">
                <h3>Industrial & Warehouse Logistics</h3>
                <p>Heavy machinery handling, warehouse stock transfers, and raw material transport across Surajpur Industrial Area, Ecotech, and Kasna manufacturing clusters.</p>
            </div>
            <div class="gn-card">
                <h3>Inter-State Highway Moving</h3>
                <p>Scheduled containerized truck transport connecting Greater Noida to Eastern India corridors including Ranchi, Jamshedpur, Patna, Gaya, and Kolkata with live GPS tracking.</p>
            </div>
            <div class="gn-card">
                <h3>Vehicle Transportation Carriers</h3>
                <p>Safe door-to-door transit for luxury sedans, SUVs, and motorbikes using enclosed hydraulic car carriers with digital pre-dispatch inspection reports.</p>
            </div>
        </div>

        <div class="gn-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Bubble wrap and carton packaging for Greater Noida homes" width="580" height="360">
            <div class="gn-image-caption">Multi-layer bubble wrap, edge guards, and heavy-duty 5-ply cartons safeguard fragile home essentials</div>
        </div>

        <div class="gn-highlight-box">
            <h4>Parent Regional Authority & Transparent Moving Rates</h4>
            <p class="gn-intro-p">Check our master metropolitan guide on the <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida">Packers and Movers in Noida</a> authority page, explore high-rise solutions on <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida-extension">Packers and Movers in Noida Extension</a>, or calculate real-time shifting costs on our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">Live Tariff Calculator</a>.</p>
        </div>
    </section>

    <!-- Transparent Rate Table -->
    <section>
        <h2 class="gn-section-heading">Transparent Relocation Rates for Greater Noida</h2>
        <p class="gn-intro-p">We uphold complete pricing honesty with zero hidden charges. Below is our standard pricing structure for moves originating from or arriving in Greater Noida. Final prices depend on total household inventory, packing material grade, and distance.</p>

        <div class="gn-table-responsive">
            <table class="gn-table">
                <thead>
                    <tr>
                        <th>Housing / Move Category</th>
                        <th>Service Inclusions</th>
                        <th>Within Greater Noida</th>
                        <th>To Noida / Delhi NCR</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Student Room / 1 RK Move</td>
                        <td>Carton packaging, baggage handling, small van transit</td>
                        <td>₹2,500 – ₹4,500</td>
                        <td>₹4,000 – ₹6,500</td>
                    </tr>
                    <tr>
                        <td>1 BHK Apartment Move</td>
                        <td>Full packing, loading, local transport, unloading</td>
                        <td>₹3,500 – ₹6,000</td>
                        <td>₹5,500 – ₹8,500</td>
                    </tr>
                    <tr>
                        <td>2 BHK Sector Flat / House</td>
                        <td>Multi-layer packing, bed dismantle, transit setup</td>
                        <td>₹6,500 – ₹11,000</td>
                        <td>₹9,000 – ₹14,500</td>
                    </tr>
                    <tr>
                        <td>3 BHK High-Rise / Plotted Kothi</td>
                        <td>Full bubble wrap, electronics crating, furniture carpentry</td>
                        <td>₹10,500 – ₹17,000</td>
                        <td>₹14,000 – ₹22,000</td>
                    </tr>
                    <tr>
                        <td>4 BHK Luxury Villa / Penthouse</td>
                        <td>White-glove packing, wooden crating, dedicated crew</td>
                        <td>₹16,000 – ₹25,000</td>
                        <td>₹20,000 – ₹32,000</td>
                    </tr>
                    <tr>
                        <td>Inter-State Move (to Bihar / Jharkhand)</td>
                        <td>Closed container, toll, transit insurance, full setup</td>
                        <td>₹22,000 – ₹36,000 (2 BHK)</td>
                        <td>₹28,000 – ₹48,000 (3 BHK)</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="gn-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture dismantling and carpentry in Greater Noida" width="580" height="360">
            <div class="gn-image-caption">Trained carpenters carefully disassembling modular beds and wooden wardrobes for scratch-free transit</div>
        </div>

        <div class="gn-highlight-box">
            <h4>All-Inclusive Guaranteed Pricing & Transparent Billing</h4>
            <p class="gn-intro-p">Every formal quotation from Shree Ashirwad Packers and Movers is transparent and binding, covering all labor charges, transit permits, packing supplies, and vehicle fuel with zero surprise surcharges on moving day.</p>
            <p class="gn-intro-p" style="margin-bottom: 0;">We also provide tailored billing structures for university students during academic session transitions (June-July and December-January) and corporate HR billing for executive transfers with comprehensive GST invoices suitable for company reimbursement claims.</p>
        </div>
    </section>

    <!-- 5-Step Operational Methodology -->
    <section>
        <h2 class="gn-section-heading">Our Proven 5-Step Relocation Methodology</h2>
        <p class="gn-intro-p">To deliver smooth, punctual, and safe relocations across Greater Noida, our operational team adheres to a synchronized 5-step relocation workflow.</p>

        <div class="gn-step-card">
            <div class="gn-step-num">1</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #0c4a6e; font-weight: 700;">Pre-Move Survey & Accurate Estimation</h4>
                <p class="gn-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">We evaluate your inventory list via digital video survey or an on-site visit in Greater Noida, inspecting furniture sizes, elevator clearances, and specialized crating needs to furnish a firm written quote.</p>
            </div>
        </div>

        <div class="gn-step-card">
            <div class="gn-step-num">2</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #0c4a6e; font-weight: 700;">Security Gate Pass & Society Permission</h4>
                <p class="gn-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Our coordinators submit mover KYC documentation and vehicle numbers to society security offices across Alpha, Beta, or Zeta sectors 24 hours prior, booking freight elevators for smooth morning entry.</p>
            </div>
        </div>

        <div class="gn-step-card">
            <div class="gn-step-num">3</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #0c4a6e; font-weight: 700;">Systematic Multi-Layered Packing</h4>
                <p class="gn-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Our crew utilizes heavy 5-ply cartons, bubble wrap, thermocol sheets, and moisture-resistant stretch film to methodically pack kitchen chinaware, electronics, books, and delicate home decor items.</p>
            </div>
        </div>

        <div class="gn-step-card">
            <div class="gn-step-num">4</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #0c4a6e; font-weight: 700;">GPS-Tracked Weatherproof Transportation</h4>
                <p class="gn-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Goods are loaded into clean, sealed containerized trucks equipped with internal tie-down straps to eliminate load shifting during expressway transit. Real-time GPS tracking keeps you informed throughout.</p>
            </div>
        </div>

        <div class="gn-step-card">
            <div class="gn-step-num">5</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #0c4a6e; font-weight: 700;">Unloading, Reassembly & Scrap Removal</h4>
                <p class="gn-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">At your destination, our team unloads items into their designated rooms, reassembles beds and dining tables, assists with preliminary unboxing, and cleans up all discarded packing scrap.</p>
            </div>
        </div>

        <div class="gn-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Greater Noida" width="580" height="360">
            <div class="gn-image-caption">All-weather container trucks delivering door-to-door relocations with zero transit damage in Greater Noida</div>
        </div>
    </section>

    <!-- Why Choose Us Grid -->
    <section>
        <h2 class="gn-section-heading">Why Greater Noida Residents Choose Shree Ashirwad</h2>
        <p class="gn-intro-p">With over a decade of excellence across Delhi NCR, Uttar Pradesh, and Eastern India, Shree Ashirwad Packers and Movers has earned an unmatched reputation for dependability, customer care, and fair pricing.</p>

        <div class="gn-grid-3">
            <div class="gn-card">
                <h3>Local Sector Expertise</h3>
                <p>Our drivers and handlers know the layout, security desks, and avenue roads of Alpha, Beta, Gamma, Delta, and Knowledge Park sectors intimately, avoiding navigation delays.</p>
            </div>
            <div class="gn-card">
                <h3>Certified Background-Checked Staff</h3>
                <p>All crew members are permanent, police-verified professionals who undergo rigorous training in careful handling, polite etiquette, and residential hygiene.</p>
            </div>
            <div class="gn-card">
                <h3>In-House Carpentry Assistance</h3>
                <p>Our moving units include experienced carpenters equipped with precision tools to safely dismantle and reassemble hydraulic storage beds, study consoles, and modular wardrobes.</p>
            </div>
            <div class="gn-card">
                <h3>Comprehensive Transit Insurance</h3>
                <p>We provide full third-party transit insurance coverage for inter-state and long-haul shipments, giving you complete financial security against unexpected transit mishaps.</p>
            </div>
            <div class="gn-card">
                <h3>Dedicated Move Supervisor</h3>
                <p>A single dedicated coordinator manages your entire relocation schedule from initial survey to final placement, providing regular updates and direct support.</p>
            </div>
            <div class="gn-card">
                <h3>Direct Pan-India Highway Corridors</h3>
                <p>Direct routes from Greater Noida to our central headquarters at <a href="<?php echo SITE_BASE_URL; ?>/">Packers and Movers in Ranchi</a>, plus direct links to Patna, Jamshedpur, and Dhanbad.</p>
            </div>
        </div>

        <div class="gn-highlight-box">
            <h4>Senior Citizen & Academic Discount Packages</h4>
            <p class="gn-intro-p">We offer special assisted moving packages for senior citizens relocating to peaceful plotted sectors in Greater Noida, as well as student discount coupons for college transfers across Knowledge Park.</p>
        </div>

        <p class="gn-intro-p">Our industrial moving wing additionally manages factory machinery transfers, electronics assembly equipment relocation, and corporate office shifting across Surajpur Industrial Area, Ecotech 1 to 12, and the Greater Noida Expo Mart corridor. We operate modern hydraulic equipment, pallet trucks, and heavy-duty machinery skates to execute complex industrial relocations with zero operational disruption.</p>
    </section>

    <!-- Frequently Asked Questions -->
    <section>
        <h2 class="gn-section-heading">Frequently Asked Questions &mdash; Greater Noida Moving</h2>
        <p class="gn-intro-p">Here are practical answers to the most common questions residents, students, and businesses ask when planning a move in Greater Noida.</p>

        <div class="gn-faq-item">
            <h4 class="gn-faq-question">What relocation services do you provide in Greater Noida?</h4>
            <p class="gn-faq-answer">We offer complete home shifting for plotted bungalows and high-rise apartments, student hostel transfers in Knowledge Park, corporate office moves, factory logistics across Ecotech and Surajpur, and pan-India container moving.</p>
        </div>

        <div class="gn-faq-item">
            <h4 class="gn-faq-question">How do you handle moves around Pari Chowk during peak traffic hours?</h4>
            <p class="gn-faq-answer">Pari Chowk is the primary gateway into Greater Noida. We schedule truck transit during non-peak morning or early afternoon hours, utilizing the service lanes of the Noida-Greater Noida Expressway and Eastern Peripheral Expressway to avoid traffic bottlenecks.</p>
        </div>

        <div class="gn-faq-item">
            <h4 class="gn-faq-question">What are the approximate moving rates for shifting within Greater Noida?</h4>
            <p class="gn-faq-answer">Shifting charges within Greater Noida start at ₹3,500 to ₹6,000 for 1 BHK, ₹6,500 to ₹11,000 for 2 BHK, and ₹10,500 to ₹17,000 for 3 BHK homes, depending on floor levels, packing specifications, and elevator access.</p>
        </div>

        <div class="gn-faq-item">
            <h4 class="gn-faq-question">Can you handle inter-state moves from Greater Noida to Bihar and Jharkhand?</h4>
            <p class="gn-faq-answer">Yes, we run regular direct closed container trucks connecting Greater Noida directly to Ranchi, Patna, Gaya, Jamshedpur, Bokaro, and Dhanbad via the Yamuna Expressway and Agra-Lucknow Expressway with real-time GPS tracking.</p>
        </div>

        <div class="gn-faq-item">
            <h4 class="gn-faq-question">Do you provide student-friendly mini-moving packages for Knowledge Park colleges?</h4>
            <p class="gn-faq-answer">Yes, we provide cost-effective mini-move packages for students and faculty across Sharda University, Galgotias University, and Bennett University, covering single-room baggage, books, laptops, and study desks.</p>
        </div>
    </section>

    <!-- Connected Cluster Navigation -->
    <section class="gn-cluster-nav">
        <h4>Explore Connected Relocation Hubs Across Greater Noida & Noida</h4>
        <div class="gn-cluster-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-pari-chowk-greater-noida" class="gn-cluster-link">Pari Chowk Greater Noida</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-knowledge-park-greater-noida" class="gn-cluster-link">Knowledge Park Greater Noida</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-alpha-greater-noida" class="gn-cluster-link">Alpha Greater Noida</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida-extension" class="gn-cluster-link">Noida Extension</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sector-150-noida" class="gn-cluster-link">Sector 150 Noida</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sector-137-noida" class="gn-cluster-link">Sector 137 Noida</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida" class="gn-cluster-link">Noida City Authority Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/" class="gn-cluster-link">Company Headquarters (Ranchi)</a>
        </div>
    </section>

    <!-- Call to Action Banner -->
    <section class="gn-cta-banner">
        <h3>Planning a Move in Greater Noida?</h3>
        <p>Get a guaranteed upfront moving quote from Greater Noida's highest-rated relocation professionals today.</p>
        <div class="gn-hero-cta">
            <a href="tel:+918409531615" class="gn-btn-primary">Call Now: 084095 31615</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="gn-btn-secondary">Check Rate Calculator</a>
        </div>
    </section>
</main>

<?php require_once ROOT_PATH . '/includes/footer.php'; ?>
</body>
</html>
