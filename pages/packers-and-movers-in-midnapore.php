<?php
/**
 * Page: Packers and Movers in Midnapore
 * Description: Dependable household shifting, university faculty relocation, administrative moving, and vehicle transport in Midnapore (Medinipur).
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
    <title>Packers and Movers in Midnapore | Reliable Moving Services</title>
    <meta name="description" content="Top-rated packers and movers in Midnapore (Medinipur). Verified house shifting, Vidyasagar University faculty moving, court officer transfers, and car bike carriers with zero damage.">
    <meta name="keywords" content="packers and movers in midnapore, movers and packers medinipur, house shifting midnapore, relocation services keranitola midnapore, transport company midnapore">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-midnapore">
    <meta property="og:title" content="Packers and Movers in Midnapore | Shree Ashirwad Packers">
    <meta property="og:description" content="Safe domestic shifting, educational institution moving, and vehicle transport across Midnapore and Paschim Medinipur with transparent rates.">
    <meta property="og:url" content="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-midnapore">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <style>
        /* Scoped CSS for Midnapore City Authority Hub - mdp prefix */
        .mdp-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px 40px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.6;
        }
        .mdp-hero-section {
            background: linear-gradient(135deg, #1e3a8a 0%, #0d9488 100%);
            color: #ffffff;
            border-radius: 14px;
            padding: 40px 25px;
            margin-bottom: 30px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .mdp-hero-title {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.25;
            color: #ffffff;
        }
        .mdp-hero-subtitle {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: #e0f2fe;
            max-width: 900px;
        }
        .mdp-meta-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }
        .mdp-badge-item {
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.35);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            color: #ffffff;
        }
        .mdp-main-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            margin-bottom: 35px;
        }
        @media (max-width: 900px) {
            .mdp-main-grid {
                grid-template-columns: 1fr;
            }
        }
        .mdp-content-col {
            min-width: 0;
        }
        .mdp-sidebar-col {
            min-width: 0;
        }
        .mdp-section {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 28px 24px;
            margin-bottom: 28px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .mdp-section-title {
            font-size: 1.65rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 18px;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
        }
        .mdp-lead-p {
            font-size: 1.05rem;
            color: #334155;
            margin-bottom: 16px;
        }
        .mdp-body-p {
            font-size: 0.98rem;
            color: #475569;
            margin-bottom: 16px;
        }
        .mdp-image-container {
            max-width: 580px;
            margin: 22px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border: 1px solid #cbd5e1;
            background: #f8fafc;
        }
        .mdp-image-container img {
            width: 100%;
            max-height: 380px;
            object-fit: cover;
            display: block;
        }
        .mdp-image-caption {
            padding: 10px 14px;
            font-size: 0.85rem;
            color: #475569;
            text-align: center;
            background: #f1f5f9;
            border-top: 1px solid #e2e8f0;
            font-weight: 500;
        }
        .mdp-highlight-box {
            background: #f0fdf4;
            border-left: 4px solid #16a34a;
            padding: 16px 20px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
        }
        .mdp-highlight-title {
            font-weight: 700;
            color: #166534;
            margin-bottom: 6px;
            font-size: 1.02rem;
        }
        .mdp-highlight-desc {
            font-size: 0.94rem;
            color: #14532d;
            margin: 0;
        }
        .mdp-card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 18px;
            margin: 22px 0;
        }
        .mdp-feature-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 18px;
            transition: all 0.2s ease;
        }
        .mdp-feature-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.06);
            border-color: #cbd5e1;
        }
        .mdp-card-head {
            font-weight: 700;
            font-size: 1.05rem;
            color: #0f766e;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .mdp-card-text {
            font-size: 0.92rem;
            color: #475569;
            margin: 0;
            line-height: 1.5;
        }
        .mdp-table-wrap {
            overflow-x: auto;
            margin: 22px 0;
        }
        .mdp-pricing-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.94rem;
        }
        .mdp-pricing-table th {
            background: #1e3a8a;
            color: #ffffff;
            text-align: left;
            padding: 12px 14px;
            font-weight: 600;
            border: 1px solid #1e3a8a;
        }
        .mdp-pricing-table td {
            padding: 11px 14px;
            border: 1px solid #e2e8f0;
            color: #334155;
        }
        .mdp-pricing-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .mdp-pricing-table tr:hover {
            background: #f1f5f9;
        }
        .mdp-steps-container {
            display: flex;
            flex-direction: column;
            gap: 14px;
            margin: 20px 0;
        }
        .mdp-step-item {
            display: flex;
            gap: 14px;
            align-items: flex-start;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 14px 16px;
        }
        .mdp-step-number {
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
        .mdp-step-body {
            flex: 1;
        }
        .mdp-step-heading {
            font-weight: 700;
            font-size: 0.98rem;
            color: #1e293b;
            margin-bottom: 4px;
        }
        .mdp-step-desc {
            font-size: 0.91rem;
            color: #475569;
            margin: 0;
        }
        .mdp-faq-accordion {
            margin: 20px 0;
        }
        .mdp-faq-item {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            margin-bottom: 12px;
            overflow: hidden;
        }
        .mdp-faq-question {
            background: #f8fafc;
            padding: 14px 18px;
            font-weight: 600;
            font-size: 1rem;
            color: #1e3a8a;
            cursor: pointer;
            border-bottom: 1px solid #e2e8f0;
        }
        .mdp-faq-answer {
            padding: 14px 18px;
            font-size: 0.93rem;
            color: #475569;
            background: #ffffff;
            line-height: 1.6;
        }
        .mdp-sidebar-box {
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            padding: 22px 18px;
            margin-bottom: 24px;
        }
        .mdp-sidebar-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 14px;
            border-bottom: 2px solid #0d9488;
            padding-bottom: 6px;
        }
        .mdp-cta-button {
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
        .mdp-cta-button:hover {
            background: #0f766e;
            color: #ffffff;
        }
        .mdp-cluster-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 22px;
            margin-top: 30px;
        }
        .mdp-cluster-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 14px;
        }
        .mdp-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 12px;
        }
        .mdp-cluster-link {
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
        .mdp-cluster-link:hover {
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
        "name": "Shree Ashirwad Packers and Movers Midnapore",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "@id": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-midnapore#movingcompany",
        "url": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-midnapore",
        "telephone": "+919334460424",
        "priceRange": "₹3,200 - ₹56,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Keranitola More, Collectorate Road",
            "addressLocality": "Midnapore",
            "addressRegion": "West Bengal",
            "postalCode": "721101",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 22.4257,
            "longitude": 87.3199
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
                "name": "Midnapore",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-midnapore"
            }
        ]
    }
    </script>

    <!-- Schema 3: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Academic & Administrative Household Relocation",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers Midnapore"
        },
        "areaServed": {
            "@type": "AdministrativeArea",
            "name": "Midnapore, Paschim Medinipur District, West Bengal"
        },
        "description": "Comprehensive packing, home shifting, Vidyasagar University faculty moves, district administrative transfers, and vehicle transport in Midnapore."
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
                "name": "What are the average household shifting charges in Midnapore (Medinipur)?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting charges within Midnapore (such as between Keranitola, Golkuan, Rabindra Nagar, and Rangamati) typically range between ₹3,200 and ₹6,500 for a 1 BHK, ₹5,500 to ₹11,000 for a 2 BHK, and ₹8,500 to ₹17,500 for a 3 BHK family house, covering packaging materials, labor, and transport."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide moving services for professors and students at Vidyasagar University?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we regularly handle relocation for faculty, research scholars, and administrative personnel at Vidyasagar University, Midnapore College (Autonomous), and Midnapore Medical College, with safe academic book packaging and lab instrument moving."
                }
            },
            {
                "@type": "Question",
                "name": "Can you handle twin-city shifting between Midnapore and Kharagpur across the Kangsabati River?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Midnapore and Kharagpur form a close twin-city urban corridor connected across the Kangsabati River. We operate daily shuttle and dedicated moving trucks between Midnapore and Kharagpur (including IIT campus and railway colonies) with fast turnaround times."
                }
            },
            {
                "@type": "Question",
                "name": "How do you protect delicate wooden furniture from heat and humidity in Midnapore?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We utilize 5-layer protective packaging consisting of virgin air-bubble sheets, heavy-duty corrugated board, foam edge guards, and stretch wrapping to safeguard all wooden surfaces and delicate electronics against friction and moisture."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="mdp-wrap">
    <!-- Hero Banner -->
    <section class="mdp-hero-section">
        <h1 class="mdp-hero-title">Packers and Movers in Midnapore</h1>
        <p class="mdp-hero-subtitle">Leading packing and moving company in Midnapore (Medinipur). Reliable household shifting, Vidyasagar University faculty transfers, district administrative moving, and vehicle transport across Paschim Medinipur.</p>
        <div class="mdp-meta-badges">
            <span class="mdp-badge-item">✓ Paschim Medinipur District Authority</span>
            <span class="mdp-badge-item">✓ Vidyasagar University & Medical College Moving</span>
            <span class="mdp-badge-item">✓ Midnapore-Kharagpur Twin City Direct Transit</span>
            <span class="mdp-badge-item">✓ Multi-Layer Protective Packaging</span>
        </div>
    </section>

    <!-- Main Content Layout -->
    <div class="mdp-main-grid">
        <div class="mdp-content-col">
            <!-- Section 1: Overview & Strategic Hub Role -->
            <section class="mdp-section">
                <h2 class="mdp-section-title">Reliable Relocation Services in Midnapore (Medinipur)</h2>
                <p class="mdp-lead-p">Midnapore, traditionally referred to as Medinipur, stands as the historic administrative, educational, and cultural headquarters of the Paschim Medinipur district in southern West Bengal. Located along the serene northern banks of the Kangsabati (Kasai) River, Midnapore holds profound historic significance in Bengal's renaissance and freedom movement. Today, the city thrives as an esteemed academic and administrative nexus anchored by Vidyasagar University, Midnapore College (Autonomous), Midnapore Medical College and Hospital, district courts, and traditional trading quarters. Across the river lies its industrial twin city Kharagpur, forming an integrated urban hub that demands moving services of verified integrity, academic delicacy, and swift transit capability.</p>
                
                <p class="mdp-body-p">At Shree Ashirwad Packers and Movers, we bring over sixteen years of specialized packing experience to Midnapore. Whether you are relocating your family between apartments in Keranitola, transferring university faculty quarters from Rangamati, or moving across the Kangsabati bridge to its sister hub via <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kharagpur">Packers and Movers in Kharagpur</a>, our trained moving crews execute every step with precision. Coordinated closely with our corporate headquarters via <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi">Packers and Movers in Ranchi</a> and state capital logistics via <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata">Packers and Movers in Kolkata</a>, we provide unified door-to-door relocation across India.</p>

                <div class="mdp-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loading in container truck in Midnapore">
                    <div class="mdp-image-caption">Systematic loading of household goods and cartons in Midnapore (Medinipur).</div>
                </div>

                <div class="mdp-highlight-box">
                    <div class="mdp-highlight-title">Why Midnapore Administrative & University Families Choose Us</div>
                    <div class="mdp-highlight-desc">From navigating dense traditional bazaars around Chhotobazar and Battala to deploying dedicated container freight along the Kangsabati bridge corridor, our operations team ensures strict adherence to transit schedules and zero cargo damage.</div>
                </div>

                <p class="mdp-body-p">Unlike unorganized local lorry contractors who depend on untrained day-laborers, our team consists of permanent, vetted packing technicians, certified carpenters, and background-checked drivers. We understand that your household possessions—from fragile chinaware to heavy wooden almirahs and modern smart televisions—carry deep emotional and financial worth. Every carton is packed with meticulous care.</p>

                <p class="mdp-body-p">Midnapore's proximity to National Highway 16 and National Highway 14 provides excellent transit links connecting northern Bengal through Bankura and southern corridors heading toward Odisha. Our modern fleet of closed container trucks navigates these crucial highway corridors daily, ensuring prompt transit times without intermediate unloading risks.</p>
            </section>

            <!-- Section 2: Specialized Relocation Offerings -->
            <section class="mdp-section">
                <h2 class="mdp-section-title">Comprehensive Relocation Solutions Across Midnapore</h2>
                <p class="mdp-lead-p">Every moving requirement in Midnapore has distinct characteristics based on cargo volume, elevator access, delicate glassware, and transit destination. We deliver customized shifting packages tailored to the unique residential and academic landscape of Medinipur.</p>

                <div class="mdp-card-grid">
                    <div class="mdp-feature-card">
                        <div class="mdp-card-head">🏠 Household Shifting</div>
                        <p class="mdp-card-text">Complete home relocation covering delicate chinaware, kitchen appliances, LED displays, wardrobes, and living room suites with room-specific unpacking.</p>
                    </div>
                    <div class="mdp-feature-card">
                        <div class="mdp-card-head">🎓 University Faculty & Student Moves</div>
                        <p class="mdp-card-text">Specialized moving for professors, researchers, and students from Vidyasagar University and Midnapore College with safe book carton packaging.</p>
                    </div>
                    <div class="mdp-feature-card">
                        <div class="mdp-card-head">⚖️ Administrative & Court Officer Relocations</div>
                        <p class="mdp-card-text">Priority transfers for district administrative personnel, judicial officers, and healthcare professionals with official documentation for claims.</p>
                    </div>
                    <div class="mdp-feature-card">
                        <div class="mdp-card-head">🚗 Vehicle Carrier (Car & Bike)</div>
                        <p class="mdp-card-text">Enclosed vehicle carriers and secured motorcycle transport with custom wheel chocks, heavy lashings, and comprehensive transit insurance.</p>
                    </div>
                </div>

                <div class="mdp-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Bubble wrap and carton packaging materials in Midnapore">
                    <div class="mdp-image-caption">Multi-layered protective packing materials used for fragile household items in Midnapore.</div>
                </div>

                <p class="mdp-body-p">Our local service vehicles operate seamlessly across all key sub-localities in Midnapore including Keranitola, Golkuan, Rabindra Nagar, Chhotobazar, Battala, Mirzabazar, Rangamati, Tantigeria, and Habibpur. For deep-water port logistics, we coordinate with <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-haldia">Packers and Movers in Haldia</a> and agricultural centers via <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bardhaman">Packers and Movers in Bardhaman</a>.</p>

                <p class="mdp-body-p">For clients transferring southwards to the state capital or major port facilities, our regular transport fleet ensures dependable connectivity to <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata">Packers and Movers in Kolkata</a> and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-howrah">Packers and Movers in Howrah</a>, as well as northern links through <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-siliguri">Packers and Movers in Siliguri</a>.</p>
            </section>

            <!-- Section 3: Material Quality & Step-by-Step Methodology -->
            <section class="mdp-section">
                <h2 class="mdp-section-title">Packing Standards & Systematic Relocation Process</h2>
                <p class="mdp-lead-p">The secret to zero transit damage lies in standardized packing protocols and systematic execution. In Midnapore, our crews arrive fully equipped with virgin packaging materials designed to withstand thermal variations and road vibrations.</p>

                <div class="mdp-steps-container">
                    <div class="mdp-step-item">
                        <div class="mdp-step-number">1</div>
                        <div class="mdp-step-body">
                            <div class="mdp-step-heading">Pre-Move Survey & Written Estimation</div>
                            <div class="mdp-step-desc">A qualified relocation surveyor evaluates your household items, checks building staircase or elevator clearance, and delivers a transparent written estimate with zero hidden levies.</div>
                        </div>
                    </div>
                    <div class="mdp-step-item">
                        <div class="mdp-step-number">2</div>
                        <div class="mdp-step-body">
                            <div class="mdp-step-heading">Multi-Layer Protective Packaging</div>
                            <div class="mdp-step-desc">Delicate glassware and kitchenware receive air-bubble cushioning, furniture is wrapped in corrugated sheets and stretch film, and mattresses are enclosed in dust-proof bags.</div>
                        </div>
                    </div>
                    <div class="mdp-step-item">
                        <div class="mdp-step-number">3</div>
                        <div class="mdp-step-body">
                            <div class="mdp-step-heading">Engineered Loading & Stacking</div>
                            <div class="mdp-step-desc">Heavy items form the stable base in weatherproof container trucks, followed by labeled medium cartons and secured fragile items fastened with heavy-duty cargo straps.</div>
                        </div>
                    </div>
                    <div class="mdp-step-item">
                        <div class="mdp-step-number">4</div>
                        <div class="mdp-step-body">
                            <div class="mdp-step-heading">Unloading, Assembly & Placement</div>
                            <div class="mdp-step-desc">Upon arrival at your new residence, our crew assists with room-specific unloading, unpacking, furniture reassembly, and debris clearance.</div>
                        </div>
                    </div>
                </div>

                <div class="mdp-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Bed furniture dismantling and reassembly in Midnapore">
                    <div class="mdp-image-caption">Skilled carpenters dismantling and protective wrapping modular bed sets in Midnapore.</div>
                </div>

                <p class="mdp-body-p">Whether you are shifting from an independent home in Rabindra Nagar or an apartment near Keranitola, our trained carpenters expertly dismantle king-size beds, modular wardrobes, and study units, securely bagging all fasteners and hardware so reassembly is quick and effortless.</p>

                <div class="mdp-highlight-box">
                    <div class="mdp-highlight-title">Zero-Scratch Guarantee for Modular Interiors</div>
                    <div class="mdp-highlight-desc">All wooden and glass modular furniture pieces are shielded with multi-ply corrugated sheets, thick foam corner buffers, and heavy-gauge polythene wrapping before stepping out of your apartment doors.</div>
                </div>

                <p class="mdp-body-p">We also supply heavy-duty hanging wardrobe carton boxes that allow your formal suits, designer dresses, and traditional ethnic wear to remain wrinkle-free on their original hangers throughout the moving journey.</p>
            </section>

            <!-- Section 4: Twin-City Logistics & Highway Transit -->
            <section class="mdp-section">
                <h2 class="mdp-section-title">Specialized Twin-City & Highway Transit in Midnapore</h2>
                <p class="mdp-lead-p">The close relationship between Midnapore and Kharagpur requires seamless twin-city transit coordination. Our team maintains rapid response vehicles crossing the Kangsabati bridge daily while managing regional highway routes.</p>

                <div class="mdp-card-grid">
                    <div class="mdp-feature-card">
                        <div class="mdp-card-head">🌉 Twin-City Fast Shuttle</div>
                        <p class="mdp-card-text">Daily express moving services connecting Midnapore with Kharagpur's IIT campus, railway settlements, and industrial areas across the river.</p>
                    </div>
                    <div class="mdp-feature-card">
                        <div class="mdp-card-head">📚 Academic Cargo Cataloging</div>
                        <p class="mdp-card-text">Specialized coded packing for university research papers, academic textbooks, scientific instruments, and computer hardware.</p>
                    </div>
                    <div class="mdp-feature-card">
                        <div class="mdp-card-head">📑 District Officer Documentation</div>
                        <p class="mdp-card-text">We supply IBA-approved consignment bills, transit insurance documents, and certified packing inventories for government and banking claim settlements.</p>
                    </div>
                    <div class="mdp-feature-card">
                        <div class="mdp-card-head">📦 Fragile Household Crating</div>
                        <p class="mdp-card-text">Custom wooden crates with shock-absorbent thermal foam padding for fragile glassware, modern televisions, and delicate electronic appliances.</p>
                    </div>
                </div>

                <div class="mdp-highlight-box">
                    <div class="mdp-highlight-title">All-Weather Waterproof Protection</div>
                    <div class="mdp-highlight-desc">Because Paschim Medinipur experiences intense summer heat followed by severe monsoons, our container trucks are fitted with watertight rubber gaskets, ensuring complete dryness for all household goods.</div>
                </div>

                <p class="mdp-body-p">For long-distance corridors heading toward our company headquarters via <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi">Packers and Movers in Ranchi</a> or western industrial hubs via <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-asansol">Packers and Movers in Asansol</a>, our dedicated fleet ensures direct transit without intermediate transshipment.</p>

                <p class="mdp-body-p">We also provide optional value-added services such as pre-move deep cleaning, wall mount television bracket de-installation, split air conditioner gas sealing and dismantling by certified HVAC technicians, and short-term secure household warehousing at fully covered, CCTV-monitored storage facilities.</p>
            </section>

            <!-- Section 5: Transparent Tariff Structure -->
            <section class="mdp-section">
                <h2 class="mdp-section-title">Transparent Price Estimator for Midnapore Relocations</h2>
                <p class="mdp-lead-p">We believe that honest moving starts with crystal-clear pricing. Below is an indicative rate chart for local relocations within Midnapore municipal limits. For customized cross-state or long-distance tariffs, explore our interactive <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">packers and movers charges calculator</a>.</p>

                <div class="mdp-table-wrap">
                    <table class="mdp-pricing-table">
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

                <div class="mdp-highlight-box">
                    <div class="mdp-highlight-title">Zero Hidden Surcharges Promise</div>
                    <div class="mdp-highlight-desc">Every formal quotation from Shree Ashirwad Packers includes packing materials, labor, transport, toll taxes, and standard insurance with complete clarity upfront.</div>
                </div>

                <div class="mdp-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Midnapore">
                    <div class="mdp-image-caption">Dedicated door-to-door closed carrier truck operating in Midnapore.</div>
                </div>

                <p class="mdp-body-p">Whether you are relocating locally within Midnapore or moving across state lines to Bihar, Jharkhand, Odisha, or Delhi NCR, our GPS-enabled container vehicles provide regular tracking updates and guaranteed on-time delivery.</p>

                <p class="mdp-body-p">For families in transitional housing or professionals renovating premises, we provide secure short-term and long-term warehousing facilities in Midnapore. Our warehouse spaces feature 24/7 CCTV surveillance, fire prevention systems, raised concrete plinths, and pest-controlled wooden storage pallets.</p>
            </section>

            <!-- Section 6: Frequently Asked Questions -->
            <section class="mdp-section">
                <h2 class="mdp-section-title">Frequently Asked Questions — Midnapore Relocation</h2>
                <div class="mdp-faq-accordion">
                    <div class="mdp-faq-item">
                        <div class="mdp-faq-question">What are the average household shifting charges in Midnapore (Medinipur)?</div>
                        <div class="mdp-faq-answer">Local shifting charges within Midnapore (such as between Keranitola, Golkuan, Rabindra Nagar, and Rangamati) typically range between ₹3,200 and ₹6,500 for a 1 BHK, ₹5,500 to ₹11,000 for a 2 BHK, and ₹8,500 to ₹17,500 for a 3 BHK family house, covering packaging materials, labor, and transport.</div>
                    </div>
                    <div class="mdp-faq-item">
                        <div class="mdp-faq-question">Do you provide moving services for professors and students at Vidyasagar University?</div>
                        <div class="mdp-faq-answer">Yes, we regularly handle relocation for faculty, research scholars, and administrative personnel at Vidyasagar University, Midnapore College (Autonomous), and Midnapore Medical College, with safe academic book packaging and lab instrument moving.</div>
                    </div>
                    <div class="mdp-faq-item">
                        <div class="mdp-faq-question">Can you handle twin-city shifting between Midnapore and Kharagpur across the Kangsabati River?</div>
                        <div class="mdp-faq-answer">Yes, Midnapore and Kharagpur form a close twin-city urban corridor connected across the Kangsabati River. We operate daily shuttle and dedicated moving trucks between Midnapore and Kharagpur (including IIT campus and railway colonies) with fast turnaround times.</div>
                    </div>
                    <div class="mdp-faq-item">
                        <div class="mdp-faq-question">How do you protect delicate wooden furniture from heat and humidity in Midnapore?</div>
                        <div class="mdp-faq-answer">We utilize 5-layer protective packaging consisting of virgin air-bubble sheets, heavy-duty corrugated board, foam edge guards, and stretch wrapping to safeguard all wooden surfaces and delicate electronics against friction and moisture.</div>
                    </div>
                </div>
            </section>

            <!-- Connected Localities Cluster Module -->
            <div class="mdp-cluster-card">
                <h3 class="mdp-cluster-title">Connected Localities & Regional Service Hubs</h3>
                <p class="mdp-body-p">Explore our verified packing and moving networks connecting Midnapore across West Bengal and Eastern India:</p>
                <div class="mdp-cluster-grid">
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kharagpur" class="mdp-cluster-link">Kharagpur Railway Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-haldia" class="mdp-cluster-link">Haldia Port Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata" class="mdp-cluster-link">Kolkata Authority Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-howrah" class="mdp-cluster-link">Howrah City Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bardhaman" class="mdp-cluster-link">Bardhaman City Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-durgapur" class="mdp-cluster-link">Durgapur Industrial Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-asansol" class="mdp-cluster-link">Asansol Rail Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi" class="mdp-cluster-link">Ranchi Corporate HQ</a>
                </div>
            </div>
        </div>

        <!-- Sidebar Column -->
        <aside class="mdp-sidebar-col">
            <div class="mdp-sidebar-box">
                <h3 class="mdp-sidebar-title">Midnapore Branch Desk</h3>
                <p class="mdp-body-p">Planning a move in Midnapore, Keranitola, or near Vidyasagar University? Contact our dedicated operations desk for an instant quotation.</p>
                <ul style="padding-left: 20px; margin-bottom: 15px; font-size: 0.93rem; color: #334155;">
                    <li><strong>Desk Address:</strong> Near Keranitola More, Collectorate Road, Midnapore</li>
                    <li><strong>Service Hours:</strong> 6:30 AM - 9:30 PM (Daily)</li>
                    <li><strong>Helpline:</strong> +91 9334460424</li>
                    <li><strong>Email:</strong> info@shreeashirwadpackers.com</li>
                </ul>
                <a href="<?php echo SITE_BASE_URL; ?>/contact" class="mdp-cta-button">Request Free Moving Quote</a>
            </div>

            <div class="mdp-sidebar-box">
                <h3 class="mdp-sidebar-title">Key Coverage Localities</h3>
                <ul style="padding-left: 20px; font-size: 0.91rem; color: #475569; line-height: 1.8;">
                    <li>Keranitola & Collectorate Zone</li>
                    <li>Vidyasagar University Campus</li>
                    <li>Rabindra Nagar & Golkuan</li>
                    <li>Midnapore Medical College Belt</li>
                    <li>Chhotobazar & Battala Bazaars</li>
                    <li>Rangamati & Tantigeria</li>
                    <li>Mirzabazar & Habibpur</li>
                    <li>Kangsabati River Twin-City Axis</li>
                </ul>
            </div>
        </aside>
    </div>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>
</body>
</html>
