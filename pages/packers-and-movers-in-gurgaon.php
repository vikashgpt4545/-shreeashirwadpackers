<?php
/**
 * Page: Packers and Movers in Gurgaon (Gurugram)
 * Description: Tier 1 City Authority Hub for Shree Ashirwad Packers and Movers in Gurgaon (Cyber City & Corporate NCR).
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
    <title>Packers and Movers in Gurgaon | Trusted Relocation Services</title>
    <meta name="description" content="Certified packers and movers in Gurgaon (Gurugram). Premier household shifting, corporate relocations, and luxury condominium moving across Cyber City, Golf Course Road & Sohna Road.">
    <meta name="keywords" content="packers and movers in gurgaon, movers and packers gurugram, house shifting gurgaon, cyber city packers movers, golf course road movers gurgaon">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gurgaon">
    <meta property="og:title" content="Packers and Movers in Gurgaon | Shree Ashirwad Packers">
    <meta property="og:description" content="Award-winning relocation services in Gurgaon. White-glove apartment shifting, corporate office moves, vehicle carriers, and pan-India moving.">
    <meta property="og:url" content="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gurgaon">
    <meta property="og:type" content="website">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <style>
        /* Scoped styles for Gurgaon City Authority Hub */
        .ggn-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px 50px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            color: #1f2937;
            line-height: 1.7;
        }
        .ggn-hero-section {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 55%, #334155 100%);
            color: #ffffff;
            padding: 50px 20px;
            text-align: center;
            border-radius: 12px;
            margin-bottom: 35px;
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.25);
        }
        .ggn-hero-title {
            font-size: 2.4rem;
            font-weight: 800;
            color: #ffffff;
            margin-top: 0;
            margin-bottom: 15px;
            line-height: 1.25;
        }
        .ggn-hero-subtitle {
            font-size: 1.15rem;
            color: #cbd5e1;
            max-width: 860px;
            margin: 0 auto 22px;
            line-height: 1.6;
        }
        .ggn-meta-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            margin-bottom: 25px;
        }
        .ggn-badge {
            background-color: rgba(255, 255, 255, 0.15);
            color: #ffffff;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.88rem;
            font-weight: 500;
            backdrop-filter: blur(4px);
            border: 1px solid rgba(255, 255, 255, 0.25);
        }
        .ggn-hero-cta {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .ggn-btn-primary {
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
        .ggn-btn-primary:hover {
            background-color: #d97706;
            transform: translateY(-2px);
        }
        .ggn-btn-secondary {
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
        .ggn-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }
        .ggn-section-heading {
            font-size: 1.9rem;
            color: #0f172a;
            font-weight: 800;
            margin-top: 35px;
            margin-bottom: 18px;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .ggn-section-heading::after {
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
        .ggn-intro-p {
            font-size: 1.05rem;
            color: #374151;
            margin-bottom: 16px;
            line-height: 1.75;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
        }
        .ggn-section-heading + .ggn-intro-p {
            text-align: center;
            max-width: 860px;
            margin: 0 auto 24px;
            color: #4b5563;
        }
        .ggn-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .ggn-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .ggn-grid-3 {
                grid-template-columns: 1fr;
            }
        }
        .ggn-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .ggn-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            border-color: #f59e0b;
        }
        .ggn-card h3 {
            color: #0f172a;
            font-size: 1.18rem;
            margin-top: 0;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .ggn-card p {
            color: #4b5563;
            font-size: 0.95rem;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .ggn-image-container {
            max-width: 580px;
            margin: 24px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }
        .ggn-image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .ggn-image-container img:hover {
            transform: scale(1.02);
        }
        .ggn-image-caption {
            font-size: 0.85rem;
            color: #6b7280;
            text-align: center;
            padding: 8px 12px;
            background: #f9fafb;
            border-top: 1px solid #e5e7eb;
            font-style: italic;
        }
        .ggn-table-responsive {
            overflow-x: auto;
            margin: 25px 0;
            background: #ffffff;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }
        .ggn-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.95rem;
        }
        .ggn-table th {
            background-color: #0f172a;
            color: #ffffff;
            padding: 14px 16px;
            font-weight: 700;
            letter-spacing: 0.3px;
        }
        .ggn-table td {
            padding: 12px 16px;
            border-bottom: 1px solid #e5e7eb;
            color: #374151;
        }
        .ggn-table tr:last-child td {
            border-bottom: none;
        }
        .ggn-table tr:nth-child(even) {
            background-color: #f8fafc;
        }
        .ggn-highlight-box {
            background-color: #f8fafc;
            border-left: 4px solid #334155;
            padding: 20px 24px;
            border-radius: 0 8px 8px 0;
            margin: 25px auto;
            max-width: 980px;
        }
        .ggn-highlight-box h4 {
            color: #0f172a;
            font-size: 1.15rem;
            margin-top: 0;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .ggn-step-card {
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
        .ggn-step-num {
            background: #0f172a;
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
        .ggn-faq-item {
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            margin: 0 auto 14px;
            max-width: 950px;
            padding: 18px 22px;
            background: #ffffff;
        }
        .ggn-faq-question {
            font-size: 1.12rem;
            font-weight: 700;
            color: #0f172a;
            margin-top: 0;
            margin-bottom: 8px;
        }
        .ggn-faq-answer {
            color: #4b5563;
            margin-bottom: 0;
            font-size: 0.98rem;
            line-height: 1.65;
        }
        .ggn-cluster-nav {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 24px;
            margin: 35px auto 25px;
            max-width: 1000px;
        }
        .ggn-cluster-nav h4 {
            color: #0f172a;
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 1.15rem;
            font-weight: 700;
            text-align: center;
        }
        .ggn-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
            gap: 12px;
        }
        .ggn-cluster-link {
            display: block;
            background: #ffffff;
            border: 1px solid #cbd5e1;
            padding: 10px 14px;
            border-radius: 8px;
            color: #0f172a;
            text-decoration: none;
            font-size: 0.92rem;
            font-weight: 600;
            text-align: center;
            transition: all 0.2s ease;
        }
        .ggn-cluster-link:hover {
            border-color: #f59e0b;
            background-color: #0f172a;
            color: #ffffff;
            transform: translateY(-2px);
        }
        .ggn-cta-banner {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: #ffffff;
            border-radius: 12px;
            padding: 35px 25px;
            text-align: center;
            margin: 35px auto 0;
            max-width: 1000px;
            box-shadow: 0 8px 20px rgba(15, 23, 42, 0.25);
        }
        .ggn-cta-banner h3 {
            color: #ffffff;
            font-size: 1.6rem;
            font-weight: 800;
            margin-top: 0;
            margin-bottom: 12px;
        }
        .ggn-cta-banner p {
            color: #cbd5e1;
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
        "name": "Shree Ashirwad Packers and Movers Gurgaon",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "telephone": "+91-8409531615",
        "email": "support@shreeashirwadpackers.com",
        "url": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gurgaon",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "DLF Cyber City, Sector 24",
            "addressLocality": "Gurgaon",
            "addressRegion": "Haryana",
            "postalCode": "122002",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "28.4595",
            "longitude": "77.0266"
        },
        "priceRange": "₹4,000 - ₹65,000",
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
                "name": "Gurgaon City Hub",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gurgaon"
            }
        ]
    }
    </script>

    <!-- Schema 3: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Luxury Apartment & Corporate Relocation Services in Gurgaon",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "City",
            "name": "Gurgaon (Gurugram), Haryana"
        },
        "description": "Comprehensive premium high-rise condominium moving, white-glove luxury villa relocation, corporate office shifting, and nationwide container logistics in Gurgaon.",
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
                "name": "How do you coordinate moves in luxury high-rises on Golf Course Road and DLF Phase 5?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "For luxury condominiums such as The Aralias, The Magnolias, and DLF Park Place, we assign a dedicated white-glove move supervisor. We secure prior estate gate passes, book designated service freight elevators for approved hours (10:00 AM to 5:00 PM), install padded protective elevator wall liners, and use rubber-wheeled trolleys to protect Italian marble flooring."
                }
            },
            {
                "@type": "Question",
                "name": "What are the moving rates for apartment shifting within Gurgaon?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local moves within Gurgaon range from ₹4,000 to ₹7,000 for 1 BHK, ₹7,500 to ₹13,000 for 2 BHK, and ₹12,000 to ₹20,000 for 3 BHK apartments. Premium luxury condominiums (4 BHK or penthouses) with custom wooden crating typically cost between ₹18,000 and ₹32,000."
                }
            },
            {
                "@type": "Question",
                "name": "Can you handle corporate office relocation in DLF Cyber City or Udyog Vihar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our specialized corporate relocation division conducts seamless office shifting across Cyber City, Horizon Center, Candor TechSpace, and Udyog Vihar. We provide weekend and overnight moves for IT servers, modular workstations, and executive conference suites with zero office downtime."
                }
            },
            {
                "@type": "Question",
                "name": "Can you provide long-distance interstate moving from Gurgaon to Bihar or Jharkhand?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we run regular closed container truck services connecting Gurgaon directly to Ranchi, Patna, Gaya, Jamshedpur, and Dhanbad via the Eastern Peripheral Expressway, Yamuna Expressway, and Purvanchal Expressway with 100% transit insurance and real-time GPS tracking."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide car and luxury vehicle carrier services in Gurgaon?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we operate enclosed hydraulic car carriers for premium sedans, luxury SUVs, and super-bikes, providing door-to-door transit with pre-dispatch condition reports and comprehensive insurance coverage."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php require_once ROOT_PATH . '/includes/header.php'; ?>

<main class="ggn-wrap">
    <!-- Hero Section -->
    <section class="ggn-hero-section">
        <h1 class="ggn-hero-title">Packers and Movers in Gurgaon</h1>
        <p class="ggn-hero-subtitle">The gold standard for white-glove luxury apartment relocation, executive villa shifting, and corporate IT moving across Millennium City. Serving DLF Cyber City, Golf Course Road, DLF Phase 1–5, Sohna Road, and Dwarka Expressway with 100% verified safety.</p>
        <div class="ggn-meta-badges">
            <span class="ggn-badge">✓ Golf Course Road White-Glove Specialists</span>
            <span class="ggn-badge">✓ DLF Cyber City Corporate Office Logistics</span>
            <span class="ggn-badge">✓ Custom Wooden Crating & Art Handling</span>
            <span class="ggn-badge">✓ 100% Insured Direct Highway Fleets</span>
        </div>
        <div class="ggn-hero-cta">
            <a href="tel:+918409531615" class="ggn-btn-primary">Call Now: 084095 31615</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="ggn-btn-secondary">Check Rate Calculator</a>
        </div>
    </section>

    <!-- Overview Section -->
    <section>
        <h2 class="ggn-section-heading">Premier Relocation & White-Glove Logistics in Gurgaon (Gurugram)</h2>
        <p class="ggn-intro-p">Gurgaon, officially recognized as Gurugram, represents India's foremost financial powerhouse, corporate technology hub, and premier luxury residential destination in the National Capital Region. Renowned globally as the "Millennium City," Gurgaon houses hundreds of Fortune 500 corporate headquarters, cutting-edge IT business parks, luxury shopping malls, and some of the country's most opulent residential condominiums. Stretching from the corporate core of DLF Cyber City and MG Road, through the high-profile luxury corridors of Golf Course Road and DLF Phases 1 through 5, down to the bustling high-rise strips of Sohna Road, Golf Course Extension Road, and the modern Dwarka Expressway (NH 248-BB), the city reflects an energetic, executive-driven cosmopolitan lifestyle.</p>
        <p class="ggn-intro-p">Relocating in Gurgaon demands an exceptionally sophisticated standard of logistics execution. High-net-worth residences in signature addresses—such as DLF The Aralias, The Magnolias, The Camellias, Ambience Caitriona, Central Park Resorts, M3M Golfestate, and Ireo Grand Arch—feature imported Italian marble furnishings, grand crystal chandeliers, priceless contemporary art, high-end electronics, wine chillers, and bespoke modular cabinetry that cannot be entrusted to ordinary movers. Furthermore, premier gated condominiums enforce stringent condominium management regulations: specific service elevator time slots (strictly between 10:00 AM and 5:00 PM), mandatory lift wall padding, zero-noise packing mandates, and underground basement height restrictions. Shree Ashirwad Packers and Movers has spent over a decade perfecting high-end residential and corporate logistics across Gurgaon, ensuring white-glove precision and total peace of mind.</p>

        <div class="ggn-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loading in container truck in Gurgaon" width="580" height="360">
            <div class="ggn-image-caption">Dedicated white-glove loading operations and cargo bracing inside covered container fleet in Gurgaon</div>
        </div>

        <div class="ggn-highlight-box">
            <h4>Strategic Highway Connectivity via NH-48 & Western Peripheral Expressway</h4>
            <p class="ggn-intro-p">Our primary Gurgaon logistics terminal provides immediate connectivity to National Highway 48 (Delhi-Jaipur Highway), the Western Peripheral Expressway (KMP Expressway), and the new Dwarka Expressway bypass, allowing our long-distance container trucks to depart directly towards Haryana, Rajasthan, Uttar Pradesh, Bihar, and Jharkhand without inner-city traffic bottlenecks.</p>
        </div>

        <p class="ggn-intro-p">Whether you are relocating an executive penthouse in DLF Phase 5, moving an independent kothi in Sector 14 or Palam Vihar, shifting corporate office headquarters in Cyber City, or transferring your household cross-country to our company headquarters in Jharkhand or Bihar, our certified crews deliver an exemplary moving experience marked by punctuality, politeness, and zero transit damage.</p>
        <p class="ggn-intro-p">Our local coordinators work closely with Gurgaon's premier resident welfare associations and facility management teams, securing advance estate gate passes, booking dedicated service freight elevators, and applying protective flooring covers along shared hallways to guarantee a spotless, frictionless move.</p>
    </section>

    <!-- Specialized Services Grid -->
    <section>
        <h2 class="ggn-section-heading">Comprehensive Relocation Solutions Across Gurgaon</h2>
        <p class="ggn-intro-p">We design customized relocation workflows structured specifically around the luxury condominiums, corporate offices, and plotted residential sectors of Gurgaon.</p>

        <div class="ggn-grid-3">
            <div class="ggn-card">
                <h3>White-Glove Luxury Apartment Moving</h3>
                <p>Turnkey moving for ultra-luxury residences across Golf Course Road and DLF Phase 5, featuring specialized marble padding, chandelier crating, and elevator protection.</p>
            </div>
            <div class="ggn-card">
                <h3>Cyber City Corporate Office Relocation</h3>
                <p>Structured office transfers for MNCs, IT firms, and corporate branches across Cyber City, Horizon Center, and Candor TechSpace with zero weekday business downtime.</p>
            </div>
            <div class="ggn-card">
                <h3>Custom Treated Wooden Crating</h3>
                <p>Custom-built treated timber crates with high-density foam cushioning for delicate art canvases, imported dining consoles, home theater screens, and glass sculptures.</p>
            </div>
            <div class="ggn-card">
                <h3>Master Furniture Carpentry</h3>
                <p>Expert dismantling and precision reassembly of hydraulic king beds, multi-door modular wardrobes, executive workstations, and customized wall shelving units.</p>
            </div>
            <div class="ggn-card">
                <h3>Direct Pan-India Highway Corridors</h3>
                <p>Scheduled containerized truck transport connecting Gurgaon to Eastern India corridors including Ranchi, Jamshedpur, Patna, Gaya, and Kolkata with live GPS tracking.</p>
            </div>
            <div class="ggn-card">
                <h3>Enclosed Auto & Superbike Carrier</h3>
                <p>Safe door-to-door transit for luxury sedans, premium SUVs, and superbikes using enclosed hydraulic car carriers with digital pre-dispatch condition reports.</p>
            </div>
        </div>

        <div class="ggn-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Bubble wrap and carton packaging for Gurgaon homes" width="580" height="360">
            <div class="ggn-image-caption">Multi-layer bubble wrap, foam corner protectors, and reinforced 5-ply cartons safeguard fragile luxury goods</div>
        </div>

        <div class="ggn-highlight-box">
            <h4>Parent Regional Authority & Transparent Moving Rates</h4>
            <p class="ggn-intro-p">Explore our regional NCR moving guides across <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida">Packers and Movers in Noida</a> and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-greater-noida">Packers and Movers in Greater Noida</a>, or check real-time transparent shifting costs on our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">Live Tariff Calculator</a>.</p>
        </div>
    </section>

    <!-- Transparent Rate Table -->
    <section>
        <h2 class="ggn-section-heading">Transparent Relocation Rates for Gurgaon</h2>
        <p class="ggn-intro-p">We maintain absolute pricing honesty with zero hidden fees. Below is our standard pricing structure for moves originating from or arriving in Gurgaon. Final prices depend on total household inventory, packing material grade, and distance.</p>

        <div class="ggn-table-responsive">
            <table class="ggn-table">
                <thead>
                    <tr>
                        <th>Housing / Move Category</th>
                        <th>Standard Service Inclusions</th>
                        <th>Within Gurgaon</th>
                        <th>To Delhi NCR / Noida</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1 BHK Executive Flat</td>
                        <td>Complete packing, loading, local transport, unloading</td>
                        <td>₹4,000 – ₹7,000</td>
                        <td>₹6,000 – ₹9,500</td>
                    </tr>
                    <tr>
                        <td>2 BHK Standard Apartment</td>
                        <td>Multi-layer packing, bed dismantle, transit setup</td>
                        <td>₹7,500 – ₹13,000</td>
                        <td>₹10,000 – ₹16,000</td>
                    </tr>
                    <tr>
                        <td>3 BHK High-Rise Condominium</td>
                        <td>Full bubble wrap, electronics crating, furniture carpentry</td>
                        <td>₹12,000 – ₹20,000</td>
                        <td>₹15,000 – ₹25,000</td>
                    </tr>
                    <tr>
                        <td>4 BHK / Penthouse / Golf Villa</td>
                        <td>White-glove packing, wooden crating, master crew, elevators padding</td>
                        <td>₹18,000 – ₹32,000</td>
                        <td>₹24,000 – ₹42,000</td>
                    </tr>
                    <tr>
                        <td>Corporate Office Workstations</td>
                        <td>Modular furniture dismantle, IT server packing, weekend move</td>
                        <td>₹12,000 – ₹28,000</td>
                        <td>Corridor-based quote</td>
                    </tr>
                    <tr>
                        <td>Inter-State Move (to Bihar / Jharkhand)</td>
                        <td>Closed container, toll, transit insurance, full room setup</td>
                        <td>₹24,000 – ₹40,000 (2 BHK)</td>
                        <td>₹32,000 – ₹55,000 (3 BHK)</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="ggn-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture dismantling and carpentry in Gurgaon" width="580" height="360">
            <div class="ggn-image-caption">Skilled carpenters disassembling hydraulic double beds and wardrobes for scratch-free elevator transport</div>
        </div>

        <div class="ggn-highlight-box">
            <h4>All-Inclusive Guaranteed Estimates & Corporate Billing</h4>
            <p class="gn-intro-p">Every formal quotation from Shree Ashirwad Packers and Movers is all-inclusive and fully documented, covering labor wages, packing materials, transit documentation, and basic unloading assistance at your destination.</p>
            <p class="gn-intro-p" style="margin-bottom: 0;">We also provide corporate HR relocation billing with comprehensive GST invoices suitable for company reimbursement claims, ensuring a hassle-free moving experience for working professionals.</p>
        </div>
    </section>

    <!-- 5-Step Operational Methodology -->
    <section>
        <h2 class="ggn-section-heading">Our Proven 5-Step Relocation Methodology</h2>
        <p class="ggn-intro-p">To deliver smooth, punctual, and safe relocations across Gurgaon, our operational team adheres to a synchronized 5-step relocation workflow.</p>

        <div class="ggn-step-card">
            <div class="ggn-step-num">1</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #0f172a; font-weight: 700;">Pre-Move Survey & Accurate Estimation</h4>
                <p class="ggn-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">We evaluate your inventory list via digital video consultation or an in-person villa visit in Gurgaon, assessing delicate art pieces, chandeliers, and elevator clearances to provide a clear, binding estimate.</p>
            </div>
        </div>

        <div class="ggn-step-card">
            <div class="ggn-step-num">2</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #0f172a; font-weight: 700;">Security Gate Pass & Society Permission</h4>
                <p class="ggn-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Our coordinators submit mover KYC documentation and vehicle numbers to society security offices across DLF Phase 5, Sohna Road, or Golf Course Road 24 hours prior, booking freight elevators for smooth morning entry.</p>
            </div>
        </div>

        <div class="ggn-step-card">
            <div class="ggn-step-num">3</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #0f172a; font-weight: 700;">Systematic Multi-Layered Packing</h4>
                <p class="ggn-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Using 5-ply corrugated cartons, premium bubble wrap, foam corner guards, and moisture-resistant stretch film, we individually cushion crockery, crystal decor, smart televisions, and home theater setups.</p>
            </div>
        </div>

        <div class="ggn-step-card">
            <div class="ggn-step-num">4</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #0f172a; font-weight: 700;">GPS-Monitored Shockproof Transportation</h4>
                <p class="ggn-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">All items are loaded into clean, weatherproof containerized moving trucks fitted with interior wall tie-down straps, ensuring zero shifting during expressway transit. Real-time GPS tracking keeps you informed throughout.</p>
            </div>
        </div>

        <div class="ggn-step-card">
            <div class="ggn-step-num">5</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #0f172a; font-weight: 700;">Unloading, Furniture Reassembly & Debris Removal</h4>
                <p class="ggn-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">At your new flat or villa, our team unloads items into their designated rooms, reassembles beds and dining tables, assists with preliminary unboxing, and cleans up all discarded packing scrap.</p>
            </div>
        </div>

        <div class="ggn-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Gurgaon" width="580" height="360">
            <div class="ggn-image-caption">Weatherproof covered container fleet providing prompt, scratch-free delivery across Gurgaon</div>
        </div>
    </section>

    <!-- Why Choose Us Grid -->
    <section>
        <h2 class="ggn-section-heading">Why Gurgaon Residents & Corporates Trust Shree Ashirwad</h2>
        <p class="ggn-intro-p">With thousands of successful moves conducted across Delhi NCR and Eastern India, Shree Ashirwad Packers and Movers has earned an unmatched reputation for integrity, reliability, and precision.</p>

        <div class="ggn-grid-3">
            <div class="ggn-card">
                <h3>Luxury High-Rise Experience</h3>
                <p>Our personnel are trained specifically for Gurgaon's premier high-rise condominiums, handling basement clearance ramps and service elevator protocols with utmost care.</p>
            </div>
            <div class="ggn-card">
                <h3>Certified Background-Checked Staff</h3>
                <p>All loaders, drivers, and packers are permanent, background-verified professionals who work respectfully within high-end family residential environments.</p>
            </div>
            <div class="ggn-card">
                <h3>Master Carpentry Assistance</h3>
                <p>Our moving units include experienced carpenters equipped with precision power tools to dismantle and reassemble all modern and designer furniture safely.</p>
            </div>
            <div class="ggn-card">
                <h3>100% Comprehensive Transit Insurance</h3>
                <p>Full third-party transit insurance coverage covering road transit, accidental collision, and weather hazards, ensuring total financial security for your goods.</p>
            </div>
            <div class="ggn-card">
                <h3>Dedicated Move Supervisor</h3>
                <p>A single dedicated coordinator manages your entire relocation schedule from initial survey to final placement, providing regular updates and direct support.</p>
            </div>
            <div class="ggn-card">
                <h3>Direct Pan-India Highway Corridors</h3>
                <p>Direct routes from Gurgaon to our central headquarters at <a href="<?php echo SITE_BASE_URL; ?>/">Packers and Movers in Ranchi</a>, plus direct links to Patna, Jamshedpur, and Dhanbad.</p>
            </div>
        </div>

        <div class="ggn-highlight-box">
            <h4>Commercial & Corporate Office Relocation Services</h4>
            <p class="ggn-intro-p">In addition to household shifting, our commercial division conducts retail store relocations, IT server transitions, and corporate office moves across DLF Cyber City, Udyog Vihar, and Golf Course Road with zero business downtime.</p>
        </div>

        <p class="ggn-intro-p">We also maintain secure, climate-controlled warehouse storage facilities near NH-48 where residents can safely store household goods, vehicles, or commercial inventory during home renovation or overseas assignments at nominal monthly fees.</p>
    </section>

    <!-- Frequently Asked Questions -->
    <section>
        <h2 class="ggn-section-heading">Frequently Asked Questions &mdash; Gurgaon Moving</h2>
        <p class="ggn-intro-p">Here are practical answers to the most common questions residents, corporate managers, and villa owners ask when planning a relocation in Gurgaon.</p>

        <div class="ggn-faq-item">
            <h4 class="ggn-faq-question">How do you coordinate moves in luxury high-rises on Golf Course Road and DLF Phase 5?</h4>
            <p class="ggn-faq-answer">For luxury condominiums such as The Aralias, The Magnolias, and DLF Park Place, we assign a dedicated white-glove move supervisor. We secure prior estate gate passes, book designated service freight elevators for approved hours (10:00 AM to 5:00 PM), install padded protective elevator wall liners, and use rubber-wheeled trolleys to protect Italian marble flooring.</p>
        </div>

        <div class="ggn-faq-item">
            <h4 class="ggn-faq-question">What are the moving rates for apartment shifting within Gurgaon?</h4>
            <p class="ggn-faq-answer">Local moves within Gurgaon range from ₹4,000 to ₹7,000 for 1 BHK, ₹7,500 to ₹13,000 for 2 BHK, and ₹12,000 to ₹20,000 for 3 BHK apartments. Premium luxury condominiums (4 BHK or penthouses) with custom wooden crating typically cost between ₹18,000 and ₹32,000.</p>
        </div>

        <div class="ggn-faq-item">
            <h4 class="ggn-faq-question">Can you handle corporate office relocation in DLF Cyber City or Udyog Vihar?</h4>
            <p class="ggn-faq-answer">Yes, our specialized corporate relocation division conducts seamless office shifting across Cyber City, Horizon Center, Candor TechSpace, and Udyog Vihar. We provide weekend and overnight moves for IT servers, modular workstations, and executive conference suites with zero office downtime.</p>
        </div>

        <div class="ggn-faq-item">
            <h4 class="ggn-faq-question">Can you provide long-distance interstate moving from Gurgaon to Bihar or Jharkhand?</h4>
            <p class="ggn-faq-answer">Yes, we run regular closed container truck services connecting Gurgaon directly to Ranchi, Patna, Gaya, Jamshedpur, and Dhanbad via the Eastern Peripheral Expressway, Yamuna Expressway, and Purvanchal Expressway with 100% transit insurance and real-time GPS tracking.</p>
        </div>

        <div class="ggn-faq-item">
            <h4 class="ggn-faq-question">Do you provide car and luxury vehicle carrier services in Gurgaon?</h4>
            <p class="ggn-faq-answer">Yes, we operate enclosed hydraulic car carriers for premium sedans, luxury SUVs, and super-bikes, providing door-to-door transit with pre-dispatch condition reports and comprehensive insurance coverage.</p>
        </div>
    </section>

    <!-- Connected Cluster Navigation -->
    <section class="ggn-cluster-nav">
        <h4>Explore Connected Relocation Hubs Across Gurgaon & Delhi NCR</h4>
        <div class="ggn-cluster-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dlf-phase-1-gurgaon" class="ggn-cluster-link">DLF Phase 1 Gurgaon</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dlf-phase-5-gurgaon" class="ggn-cluster-link">DLF Phase 5 Gurgaon</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-cyber-city-gurgaon" class="ggn-cluster-link">Cyber City Gurgaon</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sohna-road-gurgaon" class="ggn-cluster-link">Sohna Road Gurgaon</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-golf-course-extension-gurgaon" class="ggn-cluster-link">Golf Course Extension</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sector-56-gurgaon" class="ggn-cluster-link">Sector 56 Gurgaon</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sector-14-gurgaon" class="ggn-cluster-link">Sector 14 Gurgaon</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-palam-vihar-gurgaon" class="ggn-cluster-link">Palam Vihar Gurgaon</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida" class="ggn-cluster-link">Noida Authority Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-greater-noida" class="ggn-cluster-link">Greater Noida Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/" class="ggn-cluster-link">Company Headquarters (Ranchi)</a>
        </div>
    </section>

    <!-- Call to Action Banner -->
    <section class="ggn-cta-banner">
        <h3>Moving in Gurgaon (Gurugram)?</h3>
        <p>Get a guaranteed upfront moving quote from Gurgaon's highest-rated relocation professionals today.</p>
        <div class="ggn-hero-cta">
            <a href="tel:+918409531615" class="ggn-btn-primary">Call Now: 084095 31615</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="ggn-btn-secondary">Check Rate Calculator</a>
        </div>
    </section>
</main>

<?php require_once ROOT_PATH . '/includes/footer.php'; ?>
</body>
</html>
