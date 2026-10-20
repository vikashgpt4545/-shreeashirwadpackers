<?php
/**
 * Page: Packers and Movers in Pari Chowk, Greater Noida
 * Description: Hyper-local authority hub for Shree Ashirwad Packers and Movers in Pari Chowk, Greater Noida.
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
    <title>Packers and Movers in Pari Chowk Greater Noida | Trusted Relocations</title>
    <meta name="description" content="Certified packers and movers in Pari Chowk Greater Noida. Premium home shifting across Jaypee Greens, Ansal Plaza, NRI City & Eldeco Green Meadows.">
    <meta name="keywords" content="packers and movers in pari chowk greater noida, movers and packers pari chowk, house shifting pari chowk, jaypee greens packers movers, ansal plaza greater noida moving">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-pari-chowk-greater-noida">
    <meta property="og:title" content="Packers and Movers in Pari Chowk Greater Noida | Shree Ashirwad Packers">
    <meta property="og:description" content="Professional shifting and relocation services in Pari Chowk Greater Noida. High-rise apartment shifting, villa moving, and inter-state logistics.">
    <meta property="og:url" content="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-pari-chowk-greater-noida">
    <meta property="og:type" content="website">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <style>
        /* Scoped styles for Pari Chowk Greater Noida Hub */
        .pc-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px 50px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            color: #1f2937;
            line-height: 1.7;
        }
        .pc-hero-section {
            background: linear-gradient(135deg, #064e3b 0%, #059669 55%, #047857 100%);
            color: #ffffff;
            padding: 50px 20px;
            text-align: center;
            border-radius: 12px;
            margin-bottom: 35px;
            box-shadow: 0 8px 24px rgba(5, 150, 105, 0.2);
        }
        .pc-hero-title {
            font-size: 2.4rem;
            font-weight: 800;
            color: #ffffff;
            margin-top: 0;
            margin-bottom: 15px;
            line-height: 1.25;
        }
        .pc-hero-subtitle {
            font-size: 1.15rem;
            color: #d1fae5;
            max-width: 860px;
            margin: 0 auto 22px;
            line-height: 1.6;
        }
        .pc-meta-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            margin-bottom: 25px;
        }
        .pc-badge {
            background-color: rgba(255, 255, 255, 0.15);
            color: #ffffff;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.88rem;
            font-weight: 500;
            backdrop-filter: blur(4px);
            border: 1px solid rgba(255, 255, 255, 0.25);
        }
        .pc-hero-cta {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .pc-btn-primary {
            background-color: #f59e0b;
            color: #ffffff;
            padding: 12px 26px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 700;
            font-size: 1rem;
            transition: all 0.2s ease;
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.35);
        }
        .pc-btn-primary:hover {
            background-color: #d97706;
            transform: translateY(-2px);
        }
        .pc-btn-secondary {
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
        .pc-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }
        .pc-section-heading {
            font-size: 1.9rem;
            color: #064e3b;
            font-weight: 800;
            margin-top: 35px;
            margin-bottom: 18px;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .pc-section-heading::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: #f59e0b;
            border-radius: 2px;
        }
        .pc-intro-p {
            font-size: 1.05rem;
            color: #374151;
            margin-bottom: 16px;
            line-height: 1.75;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
        }
        .pc-section-heading + .pc-intro-p {
            text-align: center;
            max-width: 860px;
            margin: 0 auto 24px;
            color: #4b5563;
        }
        .pc-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .pc-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .pc-grid-3 {
                grid-template-columns: 1fr;
            }
        }
        .pc-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .pc-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            border-color: #f59e0b;
        }
        .pc-card h3 {
            color: #064e3b;
            font-size: 1.18rem;
            margin-top: 0;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .pc-card p {
            color: #4b5563;
            font-size: 0.95rem;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .pc-image-container {
            max-width: 580px;
            margin: 24px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }
        .pc-image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .pc-image-container img:hover {
            transform: scale(1.02);
        }
        .pc-image-caption {
            font-size: 0.85rem;
            color: #6b7280;
            text-align: center;
            padding: 8px 12px;
            background: #f9fafb;
            border-top: 1px solid #e5e7eb;
            font-style: italic;
        }
        .pc-table-responsive {
            overflow-x: auto;
            margin: 25px 0;
            background: #ffffff;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }
        .pc-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.95rem;
        }
        .pc-table th {
            background-color: #064e3b;
            color: #ffffff;
            padding: 14px 16px;
            font-weight: 700;
            letter-spacing: 0.3px;
        }
        .pc-table td {
            padding: 12px 16px;
            border-bottom: 1px solid #e5e7eb;
            color: #374151;
        }
        .pc-table tr:last-child td {
            border-bottom: none;
        }
        .pc-table tr:nth-child(even) {
            background-color: #f8fafc;
        }
        .pc-highlight-box {
            background-color: #ecfdf5;
            border-left: 4px solid #059669;
            padding: 20px 24px;
            border-radius: 0 8px 8px 0;
            margin: 25px auto;
            max-width: 980px;
        }
        .pc-highlight-box h4 {
            color: #064e3b;
            font-size: 1.15rem;
            margin-top: 0;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .pc-step-card {
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
        .pc-step-num {
            background: #064e3b;
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
        .pc-faq-item {
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            margin: 0 auto 14px;
            max-width: 950px;
            padding: 18px 22px;
            background: #ffffff;
        }
        .pc-faq-question {
            font-size: 1.12rem;
            font-weight: 700;
            color: #064e3b;
            margin-top: 0;
            margin-bottom: 8px;
        }
        .pc-faq-answer {
            color: #4b5563;
            margin-bottom: 0;
            font-size: 0.98rem;
            line-height: 1.65;
        }
        .pc-cluster-nav {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 24px;
            margin: 35px auto 25px;
            max-width: 1000px;
        }
        .pc-cluster-nav h4 {
            color: #0f172a;
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 1.15rem;
            font-weight: 700;
            text-align: center;
        }
        .pc-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
            gap: 12px;
        }
        .pc-cluster-link {
            display: block;
            background: #ffffff;
            border: 1px solid #cbd5e1;
            padding: 10px 14px;
            border-radius: 8px;
            color: #064e3b;
            text-decoration: none;
            font-size: 0.92rem;
            font-weight: 600;
            text-align: center;
            transition: all 0.2s ease;
        }
        .pc-cluster-link:hover {
            border-color: #064e3b;
            background-color: #064e3b;
            color: #ffffff;
            transform: translateY(-2px);
        }
        .pc-cta-banner {
            background: linear-gradient(135deg, #064e3b 0%, #059669 100%);
            color: #ffffff;
            border-radius: 12px;
            padding: 35px 25px;
            text-align: center;
            margin: 35px auto 0;
            max-width: 1000px;
            box-shadow: 0 8px 20px rgba(5, 150, 105, 0.25);
        }
        .pc-cta-banner h3 {
            color: #ffffff;
            font-size: 1.6rem;
            font-weight: 800;
            margin-top: 0;
            margin-bottom: 12px;
        }
        .pc-cta-banner p {
            color: #d1fae5;
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
        "name": "Shree Ashirwad Packers and Movers Pari Chowk",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "telephone": "+91-8409531615",
        "email": "support@shreeashirwadpackers.com",
        "url": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-pari-chowk-greater-noida",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Commercial Hub, Opposite Pari Chowk Metro Station",
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
                "name": "Greater Noida Relocation",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-greater-noida"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Pari Chowk",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-pari-chowk-greater-noida"
            }
        ]
    }
    </script>

    <!-- Schema 3: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Villa & Apartment Relocation in Pari Chowk Greater Noida",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "Place",
            "name": "Pari Chowk, Greater Noida, Uttar Pradesh"
        },
        "description": "Comprehensive golf villa moving, apartment shifting across Jaypee Greens, Ansal Plaza commercial logistics, and inter-state relocation in Pari Chowk.",
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
                "name": "How do you coordinate luxury villa moving in Jaypee Greens near Pari Chowk?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "For Jaypee Greens golf villas and high-end residences, we deploy dedicated white-glove moving teams. We obtain pre-move security gate passes, build custom wooden crates for chandeliers and artworks, use specialized furniture dollies, and ensure zero lawn or pavement tire scuffs."
                }
            },
            {
                "@type": "Question",
                "name": "How does truck access work near the busy Pari Chowk roundabout?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Pari Chowk is the busiest central junction of Greater Noida. We route our heavy moving container vehicles through designated service roads and express bypass ramps during non-commute morning hours (before 8:30 AM or between 11:30 AM and 4:00 PM) to ensure uninterrupted loading."
                }
            },
            {
                "@type": "Question",
                "name": "What are the local shifting charges around Pari Chowk?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local moves within Pari Chowk, NRI City, and neighboring sectors Alpha and Gamma range from ₹3,500 to ₹6,000 for 1 BHK, ₹6,500 to ₹11,000 for 2 BHK, and ₹10,500 to ₹16,500 for 3 BHK apartments, including full packing, labor, and transport."
                }
            },
            {
                "@type": "Question",
                "name": "Can you handle long-distance relocation from Pari Chowk to Jharkhand or Bihar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our central operational depot is located right at Pari Chowk with immediate entry onto the Yamuna Expressway. We offer direct GPS-tracked container transport to Ranchi, Jamshedpur, Patna, Gaya, and Dhanbad with 100% transit insurance."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide retail store and office moving services near Ansal Plaza?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we specialize in commercial relocations for retail shops, diagnostic centers, and corporate branch offices around Ansal Plaza, Omaxe Connaught Place, and the Pari Chowk commercial belt with overnight execution."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php require_once ROOT_PATH . '/includes/header.php'; ?>

<main class="pc-wrap">
    <!-- Hero Section -->
    <section class="pc-hero-section">
        <h1 class="pc-hero-title">Packers and Movers in Pari Chowk Greater Noida</h1>
        <p class="pc-hero-subtitle">The definitive relocation experts for Pari Chowk, Jaypee Greens, NRI City, and Eldeco Green Meadows. Providing white-glove villa moving, high-rise condominium shifting, and pan-India container logistics with 100% verified safety.</p>
        <div class="pc-meta-badges">
            <span class="pc-badge">✓ Jaypee Greens Luxury Villa Specialists</span>
            <span class="pc-badge">✓ Immediate Yamuna & Expressway Access</span>
            <span class="pc-badge">✓ Ansal Plaza Commercial Shifting</span>
            <span class="pc-badge">✓ 100% Insured Inter-State Moving</span>
        </div>
        <div class="pc-hero-cta">
            <a href="tel:+918409531615" class="pc-btn-primary">Call Now: 084095 31615</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="pc-btn-secondary">Check Rate Calculator</a>
        </div>
    </section>

    <!-- Overview Section -->
    <section>
        <h2 class="pc-section-heading">Premier Relocation Services at the Heart of Pari Chowk</h2>
        <p class="pc-intro-p">Pari Chowk stands as the undisputed monumental gateway, geographical core, and commercial epicenter of Greater Noida. Situated strategically at the exact convergence where the 6-lane Noida-Greater Noida Expressway merges into the city's arterial boulevard system and provides immediate access ramps to the Yamuna Expressway, Pari Chowk represents the focal point of the entire region's connectivity. Flanked by the bustling Pari Chowk Aqua Line Metro Station, iconic retail destinations like Ansal Plaza Greater Noida and The Grand Venice Mall, Omaxe Connaught Place (OCP Mall), and premier institutional zones, this landmark junction is surrounded by some of Greater Noida's most prestigious residential communities.</p>
        <p class="pc-intro-p">Surrounding Pari Chowk are elite residential landscapes, led by the world-renowned Jaypee Greens golf estate with its sprawling luxury villas, designer penthouses, and private golf greens. Adjacent residential sectors include NRI City, Eldeco Green Meadows, Parsvnath Platinum, Sector Alpha 1, Sector Gamma 1, and the Kasna Road institutional corridor. Relocating within this signature micro-market demands extraordinary finesse. Plotted luxury villas require specialized white-glove packing for delicate crystal chandeliers, antique teak furniture, high-value art canvases, imported marble consoles, and golf cart transport. Conversely, nearby high-rise condominiums require seamless gate-entry coordination, service elevator protection, and swift transit through regulated expressway access corridors. Shree Ashirwad Packers and Movers has operated its primary Greater Noida terminal adjacent to Pari Chowk for over a decade, providing unmatched speed, reliability, and security for every relocation.</p>

        <div class="pc-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loading in container truck in Pari Chowk Greater Noida" width="580" height="360">
            <div class="pc-image-caption">Dedicated fleet loading and containerized cargo handling at our Pari Chowk operational hub</div>
        </div>

        <div class="pc-highlight-box">
            <h4>Strategic Gateway to Yamuna Expressway & Central Fleet Staging</h4>
            <p class="pc-intro-p">Our central logistics hub near Pari Chowk serves as the primary staging terminal for our entire Greater Noida fleet. Trucks can effortlessly merge onto the Yamuna Expressway towards Jewar Airport, Agra, and Mathura, or connect directly via the Eastern Peripheral Expressway to interstate highways without entering urban city congestion.</p>
        </div>

        <p class="pc-intro-p">Whether you are relocating from an executive penthouse in Jaypee Greens, shifting into an independent kothi in nearby Alpha 1, or transferring your entire household long-distance across states to our company headquarters in Jharkhand or Bihar, our certified crews deliver an exemplary moving experience marked by punctuality, politeness, and zero transit damage.</p>
        <p class="pc-intro-p">Our specialized teams understand the estate rules of Jaypee Greens and gated colonies around Pari Chowk, including advance security clearances, designated non-peak freight hours (10:00 AM to 5:00 PM), and mandatory vehicle parking bay protocols that ensure zero inconvenience to your neighbors.</p>
    </section>

    <!-- Specialized Services Grid -->
    <section>
        <h2 class="pc-section-heading">Specialized Relocation Capabilities for Pari Chowk</h2>
        <p class="pc-intro-p">We design customized relocation workflows structured specifically around the distinct luxury villas, high-rise condominiums, and commercial retail establishments surrounding Pari Chowk.</p>

        <div class="pc-grid-3">
            <div class="pc-card">
                <h3>Jaypee Greens Golf Villa Moving</h3>
                <p>White-glove relocation for luxury villas and penthouses inside Jaypee Greens. We handle high-value artworks, chandeliers, grand dining sets, and golf equipment with custom crating.</p>
            </div>
            <div class="pc-card">
                <h3>Condominium & Apartment Shifting</h3>
                <p>Complete packing and shifting for 2 BHK, 3 BHK, and 4 BHK apartments across NRI City, Eldeco Green Meadows, and Parsvnath Platinum with elevator protection.</p>
            </div>
            <div class="pc-card">
                <h3>Ansal Plaza Commercial Relocation</h3>
                <p>Efficient retail store, corporate branch, and clinic relocation around Ansal Plaza and Omaxe Connaught Place with weekend and overnight moving schedules.</p>
            </div>
            <div class="pc-card">
                <h3>Fine Furniture Carpentry</h3>
                <p>Carpentry-assisted dismantling and reassembly of modular wardrobes, hydraulic storage beds, executive study consoles, and imported dining tables by master carpenters.</p>
            </div>
            <div class="pc-card">
                <h3>Inter-State Highway Corridors</h3>
                <p>Direct closed container routes connecting Pari Chowk to Eastern India destinations including Ranchi, Jamshedpur, Patna, Gaya, and Kolkata with live GPS tracking.</p>
            </div>
            <div class="pc-card">
                <h3>Luxury Car & Bike Transport</h3>
                <p>Door-to-door transportation for premium sedans, SUVs, and luxury motorbikes using enclosed hydraulic carriers with pre-dispatch condition photography.</p>
            </div>
        </div>

        <div class="pc-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Bubble wrap and carton packaging for Pari Chowk homes" width="580" height="360">
            <div class="pc-image-caption">Shock-absorbent bubble wraps, thermocol padding, and reinforced 5-ply cartons safeguard fragile luxury decor</div>
        </div>

        <div class="pc-highlight-box">
            <h4>Parent Regional Authority & Transparent Moving Rates</h4>
            <p class="pc-intro-p">Review our master regional relocation guide on the <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-greater-noida">Packers and Movers in Greater Noida</a> city authority page, explore adjacent high-rise routes on <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida-extension">Packers and Movers in Noida Extension</a>, or calculate real-time shifting costs on our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">Live Tariff Calculator</a>.</p>
        </div>
    </section>

    <!-- Transparent Rate Table -->
    <section>
        <h2 class="pc-section-heading">Transparent Relocation Rates for Pari Chowk</h2>
        <p class="pc-intro-p">We maintain absolute pricing transparency with zero hidden fees. Below is our standard pricing structure for moves originating from or arriving around Pari Chowk Greater Noida. Final quotes depend on total inventory volume, packaging quality tier, and elevator access.</p>

        <div class="pc-table-responsive">
            <table class="pc-table">
                <thead>
                    <tr>
                        <th>Housing / Move Category</th>
                        <th>Standard Service Inclusions</th>
                        <th>Within Pari Chowk Area</th>
                        <th>To Central Noida / Delhi NCR</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1 BHK Apartment Move</td>
                        <td>Complete packing, loading, local transport, unloading</td>
                        <td>₹3,500 – ₹6,000</td>
                        <td>₹5,500 – ₹8,500</td>
                    </tr>
                    <tr>
                        <td>2 BHK Society Flat</td>
                        <td>Multi-layer packing, bed dismantle, transit setup</td>
                        <td>₹6,500 – ₹11,000</td>
                        <td>₹9,000 – ₹14,500</td>
                    </tr>
                    <tr>
                        <td>3 BHK High-Rise Residence</td>
                        <td>Full bubble wrap, electronics crating, furniture carpentry</td>
                        <td>₹10,500 – ₹16,500</td>
                        <td>₹14,000 – ₹21,500</td>
                    </tr>
                    <tr>
                        <td>Jaypee Greens Luxury Villa (4+ BHK)</td>
                        <td>White-glove packing, wooden crating, golf gear, master crew</td>
                        <td>₹18,000 – ₹32,000</td>
                        <td>₹24,000 – ₹42,000</td>
                    </tr>
                    <tr>
                        <td>Retail Store / Commercial Unit</td>
                        <td>Fixtures packing, inventory transfer, commercial truck</td>
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

        <div class="pc-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture dismantling and carpentry in Pari Chowk" width="580" height="360">
            <div class="pc-image-caption">Master carpenters disassembling modular beds and wardrobes for scratch-free elevator transport</div>
        </div>

        <div class="pc-highlight-box">
            <h4>All-Inclusive Guaranteed Estimates & Transparent Billing</h4>
            <p class="pc-intro-p">Every formal quotation from Shree Ashirwad Packers and Movers is all-inclusive and fully documented, covering labor wages, packing materials, transit documentation, and basic unloading assistance at your destination.</p>
            <p class="pc-intro-p" style="margin-bottom: 0;">We also provide flexible scheduling for weekend shifting, ensuring that working families in Pari Chowk and surrounding IT hubs can complete their move seamlessly without taking time off from their professional duties.</p>
        </div>
    </section>

    <!-- 5-Step Operational Methodology -->
    <section>
        <h2 class="pc-section-heading">Our Proven 5-Step Moving Protocol</h2>
        <p class="pc-intro-p">To deliver smooth, punctual, and safe relocations across Pari Chowk, our operational team adheres to a synchronized 5-step relocation workflow.</p>

        <div class="pc-step-card">
            <div class="pc-step-num">1</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #064e3b; font-weight: 700;">Pre-Move Survey & Written Quote</h4>
                <p class="pc-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">We evaluate your inventory list via digital video consultation or an in-person villa visit in Jaypee Greens or NRI City, assessing delicate art pieces, chandeliers, and elevator clearances to provide a clear, binding estimate.</p>
            </div>
        </div>

        <div class="pc-step-card">
            <div class="pc-step-num">2</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #064e3b; font-weight: 700;">Security Gate Pass & RWA Approvals</h4>
                <p class="pc-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Our coordinators submit crew police verification documents and vehicle registration details to society management offices in advance, booking service elevators and ensuring seamless gate entry.</p>
            </div>
        </div>

        <div class="pc-step-card">
            <div class="pc-step-num">3</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #064e3b; font-weight: 700;">Precision Multi-Layered Packing</h4>
                <p class="pc-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Using 5-ply corrugated cartons, premium bubble wrap, foam corner guards, and moisture-resistant stretch film, we individually cushion crockery, crystal decor, smart televisions, and golf gear.</p>
            </div>
        </div>

        <div class="pc-step-card">
            <div class="pc-step-num">4</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #064e3b; font-weight: 700;">GPS-Monitored Shockproof Transportation</h4>
                <p class="pc-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">All items are loaded into clean, weatherproof containerized moving trucks fitted with interior wall tie-down straps, ensuring zero shifting during expressway transit. Real-time GPS tracking keeps you informed throughout.</p>
            </div>
        </div>

        <div class="pc-step-card">
            <div class="pc-step-num">5</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #064e3b; font-weight: 700;">Unloading, Furniture Reassembly & Debris Removal</h4>
                <p class="pc-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">At your new flat or villa, our team unloads items into their designated rooms, reassembles beds and dining tables, assists with preliminary unboxing, and collects all discarded packing scrap.</p>
            </div>
        </div>

        <div class="pc-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Pari Chowk" width="580" height="360">
            <div class="pc-image-caption">Weatherproof covered container trucks providing safe door-to-door delivery across Greater Noida</div>
        </div>
    </section>

    <!-- Why Choose Us Grid -->
    <section>
        <h2 class="pc-section-heading">Why Pari Chowk Residents Choose Shree Ashirwad</h2>
        <p class="pc-intro-p">With thousands of successful moves conducted across Delhi NCR and Eastern India, Shree Ashirwad Packers and Movers has earned an unmatched reputation for integrity, reliability, and precision.</p>

        <div class="pc-grid-3">
            <div class="pc-card">
                <h3>Immediate Hub Proximity</h3>
                <p>Our fleet staging depot is situated right at Pari Chowk, allowing fast response times, rapid truck dispatch, and on-time arrivals across all Greater Noida sectors.</p>
            </div>
            <div class="pc-card">
                <h3>Certified Background-Checked Staff</h3>
                <p>All loaders, drivers, and packers are permanent, background-verified professionals who work respectfully within high-end family residential environments.</p>
            </div>
            <div class="pc-card">
                <h3>White-Glove Luxury Expertise</h3>
                <p>Specialized handling protocols for golf villas, designer chandeliers, imported marble consoles, and expensive home theater electronics with zero scratches.</p>
            </div>
            <div class="pc-card">
                <h3>100% Comprehensive Transit Insurance</h3>
                <p>Full third-party transit insurance coverage covering road transit, accidental collision, and weather hazards, ensuring total financial security for your goods.</p>
            </div>
            <div class="pc-card">
                <h3>Dedicated Move Coordinator</h3>
                <p>A single dedicated coordinator manages your entire relocation schedule from initial survey to final placement, providing regular updates and direct support.</p>
            </div>
            <div class="pc-card">
                <h3>Direct Pan-India Highway Corridors</h3>
                <p>Direct routes from Pari Chowk to our central headquarters at <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi">Packers and Movers in Ranchi</a>, plus direct links to Patna, Jamshedpur, and Dhanbad.</p>
            </div>
        </div>

        <div class="pc-highlight-box">
            <h4>Commercial Retail Shifting Near Ansal Plaza</h4>
            <p class="pc-intro-p">In addition to luxury villa and home shifting, our specialized commercial team conducts retail store relocations, pharmacy logistics, and restaurant equipment transfers across Ansal Plaza and the Pari Chowk commercial belt with zero business downtime.</p>
        </div>

        <p class="pc-intro-p">We also provide climate-controlled short-term and extended storage in guarded, pest-controlled warehouses for homeowners remodeling their villas or awaiting possession of their new high-rise apartments.</p>
    </section>

    <!-- Frequently Asked Questions -->
    <section>
        <h2 class="pc-section-heading">Frequently Asked Questions &mdash; Pari Chowk Moving</h2>
        <p class="pc-intro-p">Here are practical answers to the most common questions residents, villa owners, and businesses ask when planning a relocation in Pari Chowk Greater Noida.</p>

        <div class="pc-faq-item">
            <h4 class="pc-faq-question">How do you coordinate luxury villa moving in Jaypee Greens near Pari Chowk?</h4>
            <p class="pc-faq-answer">For Jaypee Greens golf villas and high-end residences, we deploy dedicated white-glove moving teams. We obtain pre-move security gate passes, build custom wooden crates for chandeliers and artworks, use specialized furniture dollies, and ensure zero lawn or pavement tire scuffs.</p>
        </div>

        <div class="pc-faq-item">
            <h4 class="pc-faq-question">How does truck access work near the busy Pari Chowk roundabout?</h4>
            <p class="pc-faq-answer">Pari Chowk is the busiest central junction of Greater Noida. We route our heavy moving container vehicles through designated service roads and express bypass ramps during non-commute morning hours (before 8:30 AM or between 11:30 AM and 4:00 PM) to ensure uninterrupted loading.</p>
        </div>

        <div class="pc-faq-item">
            <h4 class="pc-faq-question">What are the local shifting charges around Pari Chowk?</h4>
            <p class="pc-faq-answer">Local moves within Pari Chowk, NRI City, and neighboring sectors Alpha and Gamma range from ₹3,500 to ₹6,000 for 1 BHK, ₹6,500 to ₹11,000 for 2 BHK, and ₹10,500 to ₹16,500 for 3 BHK apartments, including full packing, labor, and transport.</p>
        </div>

        <div class="pc-faq-item">
            <h4 class="pc-faq-question">Can you handle long-distance relocation from Pari Chowk to Jharkhand or Bihar?</h4>
            <p class="pc-faq-answer">Yes, our central operational depot is located right at Pari Chowk with immediate entry onto the Yamuna Expressway. We offer direct GPS-tracked container transport to Ranchi, Jamshedpur, Patna, Gaya, and Dhanbad with 100% transit insurance.</p>
        </div>

        <div class="pc-faq-item">
            <h4 class="pc-faq-question">Do you provide retail store and office moving services near Ansal Plaza?</h4>
            <p class="pc-faq-answer">Yes, we specialize in commercial relocations for retail shops, diagnostic centers, and corporate branch offices around Ansal Plaza, Omaxe Connaught Place, and the Pari Chowk commercial belt with overnight execution.</p>
        </div>
    </section>

    <!-- Connected Cluster Navigation -->
    <section class="pc-cluster-nav">
        <h4>Explore Connected Relocation Hubs Across Greater Noida & Noida</h4>
        <div class="pc-cluster-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-knowledge-park-greater-noida" class="pc-cluster-link">Knowledge Park Greater Noida</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-alpha-greater-noida" class="pc-cluster-link">Alpha Greater Noida</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-greater-noida" class="pc-cluster-link">Greater Noida City Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida-extension" class="pc-cluster-link">Noida Extension</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sector-150-noida" class="pc-cluster-link">Sector 150 Noida</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sector-137-noida" class="pc-cluster-link">Sector 137 Noida</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida" class="pc-cluster-link">Noida City Authority Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi" class="pc-cluster-link">Company Headquarters (Ranchi)</a>
        </div>
    </section>

    <!-- Call to Action Banner -->
    <section class="pc-cta-banner">
        <h3>Moving Near Pari Chowk Greater Noida?</h3>
        <p>Get a guaranteed upfront moving quote from Pari Chowk's top-rated relocation professionals today.</p>
        <div class="pc-hero-cta">
            <a href="tel:+918409531615" class="pc-btn-primary">Call Now: 084095 31615</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="pc-btn-secondary">Check Rate Calculator</a>
        </div>
    </section>
</main>

<?php require_once ROOT_PATH . '/includes/footer.php'; ?>
</body>
</html>
