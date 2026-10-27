<?php
/**
 * Page: Packers and Movers in Bardhaman
 * Description: Dependable household shifting, agricultural trade logistics, university relocation, and vehicle transport in Bardhaman (Burdwan).
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
    <title>Packers and Movers in Bardhaman | Professional Relocation Services</title>
    <meta name="description" content="Top-rated packers and movers in Bardhaman (Burdwan). Reliable household shifting, university staff moving, agro-commercial transport, and car bike carriers with transparent charges.">
    <meta name="keywords" content="packers and movers in bardhaman, movers and packers burdwan, house shifting bardhaman, relocation services bardhaman, transport company burdwan">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bardhaman">
    <meta property="og:title" content="Packers and Movers in Bardhaman | Shree Ashirwad Packers">
    <meta property="og:description" content="Safe domestic shifting, commercial transport, and vehicle moving services across Bardhaman and Purba Bardhaman district with zero-damage guarantee.">
    <meta property="og:url" content="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bardhaman">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <style>
        /* Scoped CSS for Bardhaman City Authority Hub - bdh prefix */
        .bdh-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px 40px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.6;
        }
        .bdh-hero-section {
            background: linear-gradient(135deg, #1e3a8a 0%, #0d9488 100%);
            color: #ffffff;
            border-radius: 14px;
            padding: 40px 25px;
            margin-bottom: 30px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .bdh-hero-title {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.25;
            color: #ffffff;
        }
        .bdh-hero-subtitle {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: #e0f2fe;
            max-width: 900px;
        }
        .bdh-meta-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }
        .bdh-badge-item {
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.35);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            color: #ffffff;
        }
        .bdh-main-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            margin-bottom: 35px;
        }
        @media (max-width: 900px) {
            .bdh-main-grid {
                grid-template-columns: 1fr;
            }
        }
        .bdh-content-col {
            min-width: 0;
        }
        .bdh-sidebar-col {
            min-width: 0;
        }
        .bdh-section {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 28px 24px;
            margin-bottom: 28px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .bdh-section-title {
            font-size: 1.65rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 18px;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
        }
        .bdh-lead-p {
            font-size: 1.05rem;
            color: #334155;
            margin-bottom: 16px;
        }
        .bdh-body-p {
            font-size: 0.98rem;
            color: #475569;
            margin-bottom: 16px;
        }
        .bdh-image-container {
            max-width: 580px;
            margin: 22px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border: 1px solid #cbd5e1;
            background: #f8fafc;
        }
        .bdh-image-container img {
            width: 100%;
            max-height: 380px;
            object-fit: cover;
            display: block;
        }
        .bdh-image-caption {
            padding: 10px 14px;
            font-size: 0.85rem;
            color: #475569;
            text-align: center;
            background: #f1f5f9;
            border-top: 1px solid #e2e8f0;
            font-weight: 500;
        }
        .bdh-highlight-box {
            background: #f0fdf4;
            border-left: 4px solid #16a34a;
            padding: 16px 20px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
        }
        .bdh-highlight-title {
            font-weight: 700;
            color: #166534;
            margin-bottom: 6px;
            font-size: 1.02rem;
        }
        .bdh-highlight-desc {
            font-size: 0.94rem;
            color: #14532d;
            margin: 0;
        }
        .bdh-card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 18px;
            margin: 22px 0;
        }
        .bdh-feature-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 18px;
            transition: all 0.2s ease;
        }
        .bdh-feature-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.06);
            border-color: #cbd5e1;
        }
        .bdh-card-head {
            font-weight: 700;
            font-size: 1.05rem;
            color: #0f766e;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .bdh-card-text {
            font-size: 0.92rem;
            color: #475569;
            margin: 0;
            line-height: 1.5;
        }
        .bdh-table-wrap {
            overflow-x: auto;
            margin: 22px 0;
        }
        .bdh-pricing-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.94rem;
        }
        .bdh-pricing-table th {
            background: #1e3a8a;
            color: #ffffff;
            text-align: left;
            padding: 12px 14px;
            font-weight: 600;
            border: 1px solid #1e3a8a;
        }
        .bdh-pricing-table td {
            padding: 11px 14px;
            border: 1px solid #e2e8f0;
            color: #334155;
        }
        .bdh-pricing-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .bdh-pricing-table tr:hover {
            background: #f1f5f9;
        }
        .bdh-steps-container {
            display: flex;
            flex-direction: column;
            gap: 14px;
            margin: 20px 0;
        }
        .bdh-step-item {
            display: flex;
            gap: 14px;
            align-items: flex-start;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 14px 16px;
        }
        .bdh-step-number {
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
        .bdh-step-body {
            flex: 1;
        }
        .bdh-step-heading {
            font-weight: 700;
            font-size: 0.98rem;
            color: #1e293b;
            margin-bottom: 4px;
        }
        .bdh-step-desc {
            font-size: 0.91rem;
            color: #475569;
            margin: 0;
        }
        .bdh-faq-accordion {
            margin: 20px 0;
        }
        .bdh-faq-item {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            margin-bottom: 12px;
            overflow: hidden;
        }
        .bdh-faq-question {
            background: #f8fafc;
            padding: 14px 18px;
            font-weight: 600;
            font-size: 1rem;
            color: #1e3a8a;
            cursor: pointer;
            border-bottom: 1px solid #e2e8f0;
        }
        .bdh-faq-answer {
            padding: 14px 18px;
            font-size: 0.93rem;
            color: #475569;
            background: #ffffff;
            line-height: 1.6;
        }
        .bdh-sidebar-box {
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            padding: 22px 18px;
            margin-bottom: 24px;
        }
        .bdh-sidebar-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 14px;
            border-bottom: 2px solid #0d9488;
            padding-bottom: 6px;
        }
        .bdh-cta-button {
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
        .bdh-cta-button:hover {
            background: #0f766e;
            color: #ffffff;
        }
        .bdh-cluster-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 22px;
            margin-top: 30px;
        }
        .bdh-cluster-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 14px;
        }
        .bdh-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 12px;
        }
        .bdh-cluster-link {
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
        .bdh-cluster-link:hover {
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
        "name": "Shree Ashirwad Packers and Movers Bardhaman",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "@id": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bardhaman#movingcompany",
        "url": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bardhaman",
        "telephone": "+91 9835565233",
        "priceRange": "₹3,200 - ₹55,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Grand Trunk Road, Near Curzon Gate & Tinkonia",
            "addressLocality": "Bardhaman",
            "addressRegion": "West Bengal",
            "postalCode": "713101",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 23.2324,
            "longitude": 87.8615
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
                "name": "Bardhaman",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bardhaman"
            }
        ]
    }
    </script>

    <!-- Schema 3: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Household Shifting & Transport Logistics",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers Bardhaman"
        },
        "areaServed": {
            "@type": "AdministrativeArea",
            "name": "Bardhaman, Purba Bardhaman District, West Bengal"
        },
        "description": "Professional packing, household shifting, university professor relocations, agricultural trade logistics, and car bike transportation across Bardhaman."
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
                "name": "What are the local house moving charges in Bardhaman (Burdwan)?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local household shifting within Bardhaman (such as between Curzon Gate, Golapbag, Badamtala, and Nababhat) typically costs ₹3,200 to ₹6,500 for a 1 BHK, ₹5,500 to ₹11,000 for a 2 BHK, and ₹8,500 to ₹17,500 for a 3 BHK family house, covering packaging, labor, and truck freight."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide relocation assistance for Burdwan University professors and medical college doctors?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we regularly handle academic and medical faculty transfers for Burdwan University (Golapbag campus) and Burdwan Medical College. We ensure careful handling of academic book collections, research files, diagnostic instruments, and personal residential furnishings."
                }
            },
            {
                "@type": "Question",
                "name": "Can you shift household goods from Bardhaman to Kolkata, Durgapur, or Asansol?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Bardhaman is strategically located directly on National Highway 19 (Grand Trunk Road). We operate daily direct container trucks connecting Bardhaman westward to Durgapur and Asansol, and eastward to Kolkata and Howrah."
                }
            },
            {
                "@type": "Question",
                "name": "How do you protect delicate wooden furniture and electrical appliances?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We apply 5-layer protective packaging consisting of heavy-gauge air bubble wrap, high-density corrugated sheets, corner edge guards, and stretch wrapping to safeguard all wooden finishes and delicate electronic circuitry against shock and moisture."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="bdh-wrap">
    <!-- Hero Banner -->
    <section class="bdh-hero-section">
        <h1 class="bdh-hero-title">Packers and Movers in Bardhaman</h1>
        <p class="bdh-hero-subtitle">Leading packing and moving company in Bardhaman (Burdwan). Dependable household shifting, university faculty transfers, agro-industrial transport, and vehicle moving along the Grand Trunk Road corridor.</p>
        <div class="bdh-meta-badges">
            <span class="bdh-badge-item">✓ Purba Bardhaman District Authority</span>
            <span class="bdh-badge-item">✓ Grand Trunk Road (NH 19) Direct Transit</span>
            <span class="bdh-badge-item">✓ Burdwan University & Medical Campus Moving</span>
            <span class="bdh-badge-item">✓ Multi-Layer Protective Packaging</span>
        </div>
    </section>

    <!-- Main Content Layout -->
    <div class="bdh-main-grid">
        <div class="bdh-content-col">
            <!-- Section 1: Overview & Neighborhood Profile -->
            <section class="bdh-section">
                <h2 class="bdh-section-title">Reliable Relocation Services in Bardhaman (Burdwan)</h2>
                <p class="bdh-lead-p">Bardhaman, historically celebrated as Burdwan, serves as the administrative, cultural, and agricultural capital of the Purba Bardhaman district. Universally acclaimed as the "Rice Bowl of Bengal", Bardhaman seamlessly blends deep historical heritage—marked by the iconic Curzon Gate and 108 Shiva Temples—with bustling commercial markets, expansive agro-processing rice mills, and prestigious educational institutions including Burdwan University and Burdwan Medical College. This dynamic economic ecosystem demands packing and moving services characterized by punctuality, delicate handling, and proven highway capability.</p>
                
                <p class="bdh-body-p">At Shree Ashirwad Packers and Movers, we bring over sixteen years of professional moving expertise to Bardhaman. Whether you are relocating your family between apartments near Badamtala, transferring your faculty residence from the Golapbag university campus, or shifting corporate offices near Tinkonia bus stand, our certified packing specialists deliver seamless execution. Operating in harmony with our corporate headquarters via <a href="<?php echo SITE_BASE_URL; ?>/">Packers and Movers in Ranchi</a> and state capital logistics via <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata">Packers and Movers in Kolkata</a>, we provide door-to-door relocation across India.</p>

                <div class="bdh-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loading in container truck in Bardhaman">
                    <div class="bdh-image-caption">Systematic loading of palletized cartons and furniture in Bardhaman (Burdwan).</div>
                </div>

                <div class="bdh-highlight-box">
                    <div class="bdh-highlight-title">Why Bardhaman Residents Choose Shree Ashirwad</div>
                    <div class="bdh-highlight-desc">From maneuvering through crowded historic bazaars around Curzon Gate to deploying dedicated container freight along the Grand Trunk Road (NH 19), our operations team ensures strict adherence to transit schedules and zero cargo damage.</div>
                </div>

                <p class="bdh-body-p">Unlike unorganized local lorry owners who depend on casual labor, our team comprises permanent, vetted packing technicians, certified carpenters, and background-checked drivers. We understand that your household possessions—from family heirlooms to modern modular furniture and sensitive electronics—represent immense personal value. Every carton is packed with surgical precision.</p>

                <p class="bdh-body-p">Bardhaman's strategic location along National Highway 19 provides direct four-lane connectivity between the industrial belt of Asansol-Durgapur and the metropolitan ports of Kolkata and Howrah. Our modern fleet of enclosed container trucks utilizes this high-speed corridor to ensure rapid transit times without intermediate unloading risks.</p>
            </section>

            <!-- Section 2: Specialized Relocation Offerings -->
            <section class="bdh-section">
                <h2 class="bdh-section-title">Comprehensive Shifting Solutions Across Bardhaman</h2>
                <p class="bdh-lead-p">Every moving requirement in Bardhaman has distinct characteristics based on cargo volume, elevator access, delicate glassware, and transit destination. We deliver customized shifting packages tailored to the unique residential and commercial landscape of Burdwan.</p>

                <div class="bdh-card-grid">
                    <div class="bdh-feature-card">
                        <div class="bdh-card-head">🏠 Household Shifting</div>
                        <p class="bdh-card-text">Complete home relocation covering delicate chinaware, kitchen appliances, LED displays, wardrobes, and living room suites with door-to-door unpacking assistance.</p>
                    </div>
                    <div class="bdh-feature-card">
                        <div class="bdh-card-head">🎓 Academic & Medical Staff Moves</div>
                        <p class="bdh-card-text">Specialized moving for professors, researchers, doctors, and students from Burdwan University and Burdwan Medical College with safe library packaging.</p>
                    </div>
                    <div class="bdh-feature-card">
                        <div class="bdh-card-head">🌾 Agro-Commercial Trade Logistics</div>
                        <p class="bdh-card-text">Systematic transport for agro-processing equipment, rice mill administrative offices, wholesale traders, and commercial showrooms across Purba Bardhaman.</p>
                    </div>
                    <div class="bdh-feature-card">
                        <div class="bdh-card-head">🚗 Car & Two-Wheeler Transport</div>
                        <p class="bdh-card-text">Enclosed vehicle carriers and secured wheel-chocked bike transportation across national highways with live GPS tracking and all-risk transit coverage.</p>
                    </div>
                </div>

                <div class="bdh-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Bubble wrap and carton packaging materials in Bardhaman">
                    <div class="bdh-image-caption">Multi-layered protective packing materials used for fragile household items in Bardhaman.</div>
                </div>

                <p class="bdh-body-p">Our local service vehicles operate seamlessly across all key sub-localities in Bardhaman including Curzon Gate, Tinkonia, Badamtala, Nababhat, Golapbag, Rajbati, Keshabganj Chatti, Birhata, and Alisha. For westbound moves connecting to Paschim Bardhaman's steel and mining corridor, we coordinate with <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-durgapur">Packers and Movers in Durgapur</a> and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-asansol">Packers and Movers in Asansol</a>.</p>

                <p class="bdh-body-p">For clients transferring southwards to the state capital or major port facilities, our regular transport fleet ensures dependable connectivity to <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata">Packers and Movers in Kolkata</a> and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-howrah">Packers and Movers in Howrah</a>, as well as northern links through <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-siliguri">Packers and Movers in Siliguri</a>.</p>
            </section>

            <!-- Section 3: Material Quality & Step-by-Step Methodology -->
            <section class="bdh-section">
                <h2 class="bdh-section-title">Packing Standards & Systematic Relocation Process</h2>
                <p class="bdh-lead-p">The secret to zero transit damage lies in standardized packing protocols and systematic execution. In Bardhaman, our crews arrive fully equipped with virgin packaging materials designed to withstand thermal variations and road vibrations.</p>

                <div class="bdh-steps-container">
                    <div class="bdh-step-item">
                        <div class="bdh-step-number">1</div>
                        <div class="bdn-step-body bdh-step-body">
                            <div class="bdh-step-heading">Pre-Move Survey & Accurate Estimation</div>
                            <div class="bdh-step-desc">A qualified relocation surveyor evaluates your household items, checks building staircase or elevator clearance, and delivers a transparent written estimate with zero hidden levies.</div>
                        </div>
                    </div>
                    <div class="bdh-step-item">
                        <div class="bdh-step-number">2</div>
                        <div class="bdh-step-body">
                            <div class="bdh-step-heading">Multi-Layer Protective Packaging</div>
                            <div class="bdh-step-desc">Delicate glassware and kitchenware receive air-bubble cushioning, furniture is wrapped in corrugated sheets and stretch film, and mattresses are enclosed in dust-proof bags.</div>
                        </div>
                    </div>
                    <div class="bdh-step-item">
                        <div class="bdh-step-number">3</div>
                        <div class="bdh-step-body">
                            <div class="bdh-step-heading">Engineered Loading & Stacking</div>
                            <div class="bdh-step-desc">Heavy items form the stable base in weatherproof container trucks, followed by labeled medium cartons and secured fragile items fastened with heavy-duty cargo straps.</div>
                        </div>
                    </div>
                    <div class="bdh-step-item">
                        <div class="bdh-step-number">4</div>
                        <div class="bdh-step-body">
                            <div class="bdh-step-heading">Unloading, Assembly & Placement</div>
                            <div class="bdh-step-desc">Upon arrival at your new residence, our crew assists with room-specific unloading, unpacking, furniture reassembly, and debris clearance.</div>
                        </div>
                    </div>
                </div>

                <div class="bdh-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Bed furniture dismantling and reassembly in Bardhaman">
                    <div class="bdh-image-caption">Skilled carpenters dismantling and protective wrapping modular bed sets in Bardhaman.</div>
                </div>

                <p class="bdh-body-p">Whether you are shifting from an independent ancestral house in Rajbati or a modern apartment along Grand Trunk Road, our trained carpenters expertly dismantle king-size beds, modular wardrobes, and study units, securely bagging all fasteners and hardware so reassembly is quick and effortless.</p>

                <div class="bdh-highlight-box">
                    <div class="bdh-highlight-title">Zero-Scratch Guarantee for Modular Interiors</div>
                    <div class="bdh-highlight-desc">All wooden and glass modular furniture pieces are shielded with multi-ply corrugated sheets, thick foam corner buffers, and heavy-gauge polythene wrapping before stepping out of your apartment doors.</div>
                </div>

                <p class="bdh-body-p">We also supply heavy-duty hanging wardrobe carton boxes that allow your formal suits, designer dresses, and traditional ethnic wear to remain wrinkle-free on their original hangers throughout the moving journey.</p>
            </section>

            <!-- Section 4: Academic, Commercial & Heritage Relocations -->
            <section class="bdh-section">
                <h2 class="bdh-section-title">Specialized Relocation in Heritage & University Zones</h2>
                <p class="bdh-lead-p">Relocating in Bardhaman requires a harmonious balance between navigating narrow historic heritage quarters around Curzon Gate and managing fast-paced highway freight along NH 19. Our team has the specialized equipment and local knowledge to handle both.</p>

                <div class="bdh-card-grid">
                    <div class="bdh-feature-card">
                        <div class="bdh-card-head">🏛️ Historic Town Core Navigation</div>
                        <p class="bdh-card-text">We deploy compact shuttle mini-trucks for dense lanes in Badamtala, Birhata, and Rajbati, transferring items to container trucks parked at broader bypass junctions.</p>
                    </div>
                    <div class="bdh-feature-card">
                        <div class="bdh-card-head">📚 University Library & Lab Moving</div>
                        <p class="bdh-card-text">Systematic catalog-coded packaging for university departments, academic books, lab glassware, and research apparatus with zero indexing loss.</p>
                    </div>
                    <div class="bdh-feature-card">
                        <div class="bdh-card-head">🚚 Direct Highway Container Transit</div>
                        <p class="bdh-card-text">Immediate access onto Grand Trunk Road (NH 19) allows our sealed container trucks to maintain swift intercity connections toward Kolkata and Asansol.</p>
                    </div>
                    <div class="bdh-feature-card">
                        <div class="bdh-card-head">📑 Corporate & Transfer Documentation</div>
                        <p class="bdh-card-text">We supply GST tax invoices, consignment notes (LR copy), itemized packing inventories, and transit insurance certificates required for official employee claim reimbursements.</p>
                    </div>
                </div>

                <div class="bdh-highlight-box">
                    <div class="bdh-highlight-title">All-Weather Moisture Sealing</div>
                    <div class="bdh-highlight-desc">To protect against humid monsoonal rains across the Bengal delta, all cartons and wooden furniture are wrapped in weather-proof stretch film with moisture-absorbent desiccant pouches.</div>
                </div>

                <p class="bdh-body-p">For long-distance corridors heading toward our company headquarters via <a href="<?php echo SITE_BASE_URL; ?>/">Packers and Movers in Ranchi</a>, our containerized vehicles travel directly without intermediate transshipment, ensuring unmatched security and timely arrival.</p>

                <p class="bdh-body-p">We also provide optional value-added services such as pre-move deep cleaning, wall mount television bracket de-installation, split air conditioner gas sealing and dismantling by certified HVAC technicians, and short-term secure household warehousing at fully covered, CCTV-monitored storage facilities.</p>
            </section>

            <!-- Section 5: Transparent Tariff Structure -->
            <section class="bdh-section">
                <h2 class="bdh-section-title">Transparent Price Estimator for Bardhaman Relocations</h2>
                <p class="bdh-lead-p">We believe that honest moving starts with crystal-clear pricing. Below is an indicative rate chart for local relocations within Bardhaman municipal limits. For customized cross-state or long-distance tariffs, explore our interactive <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">packers and movers charges calculator</a>.</p>

                <div class="bdh-table-wrap">
                    <table class="bdh-pricing-table">
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

                <div class="bdh-highlight-box">
                    <div class="bdh-highlight-title">Zero Hidden Surcharges Promise</div>
                    <div class="bdh-highlight-desc">Every formal quotation from Shree Ashirwad Packers includes packing materials, labor, transport, toll taxes, and standard insurance with complete clarity upfront.</div>
                </div>

                <div class="bdh-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Bardhaman">
                    <div class="bdh-image-caption">Dedicated door-to-door closed carrier truck operating in Bardhaman (Burdwan).</div>
                </div>

                <p class="bdh-body-p">Whether you are relocating locally within Bardhaman or moving across state lines to Bihar, Jharkhand, Odisha, or Delhi NCR, our GPS-enabled container vehicles provide regular tracking updates and guaranteed on-time delivery.</p>

                <p class="bdh-body-p">For families in transitional housing or agro-traders renovating office premises, we provide secure short-term and long-term warehousing facilities in Bardhaman. Our warehouse spaces feature 24/7 CCTV surveillance, fire prevention systems, raised concrete plinths, and pest-controlled wooden storage pallets.</p>
            </section>

            <!-- Section 6: Frequently Asked Questions -->
            <section class="bdh-section">
                <h2 class="bdh-section-title">Frequently Asked Questions — Bardhaman Relocation</h2>
                <div class="bdh-faq-accordion">
                    <div class="bdh-faq-item">
                        <div class="bdh-faq-question">What are the local house moving charges in Bardhaman (Burdwan)?</div>
                        <div class="bdh-faq-answer">Local household shifting within Bardhaman (such as between Curzon Gate, Golapbag, Badamtala, and Nababhat) typically costs ₹3,200 to ₹6,500 for a 1 BHK, ₹5,500 to ₹11,000 for a 2 BHK, and ₹8,500 to ₹17,500 for a 3 BHK family house, covering packaging, labor, and truck freight.</div>
                    </div>
                    <div class="bdh-faq-item">
                        <div class="bdh-faq-question">Do you provide relocation assistance for Burdwan University professors and medical college doctors?</div>
                        <div class="bdh-faq-answer">Yes, we regularly handle academic and medical faculty transfers for Burdwan University (Golapbag campus) and Burdwan Medical College. We ensure careful handling of academic book collections, research files, diagnostic instruments, and personal residential furnishings.</div>
                    </div>
                    <div class="bdh-faq-item">
                        <div class="bdh-faq-question">Can you shift household goods from Bardhaman to Kolkata, Durgapur, or Asansol?</div>
                        <div class="bdh-faq-answer">Yes, Bardhaman is strategically located directly on National Highway 19 (Grand Trunk Road). We operate daily direct container trucks connecting Bardhaman westward to Durgapur and Asansol, and eastward to Kolkata and Howrah.</div>
                    </div>
                    <div class="bdh-faq-item">
                        <div class="bdh-faq-question">How do you protect delicate wooden furniture and electrical appliances?</div>
                        <div class="bdh-faq-answer">We apply 5-layer protective packaging consisting of heavy-gauge air bubble wrap, high-density corrugated sheets, corner edge guards, and stretch wrapping to safeguard all wooden finishes and delicate electronic circuitry against shock and moisture.</div>
                    </div>
                </div>
            </section>

            <!-- Connected Localities Cluster Module -->
            <div class="bdh-cluster-card">
                <h3 class="bdh-cluster-title">Connected Localities & Regional Service Hubs</h3>
                <p class="bdh-body-p">Explore our verified packing and moving networks connecting Bardhaman across West Bengal and Eastern India:</p>
                <div class="bdh-cluster-grid">
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-durgapur" class="bdh-cluster-link">Durgapur Industrial Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-asansol" class="bdh-cluster-link">Asansol Rail Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata" class="bdh-cluster-link">Kolkata Authority Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-howrah" class="bdh-cluster-link">Howrah City Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-siliguri" class="bdh-cluster-link">Siliguri North Bengal Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/" class="bdh-cluster-link">Ranchi Corporate HQ</a>
                </div>
            </div>
        </div>

        <!-- Sidebar Column -->
        <aside class="bdh-sidebar-col">
            <div class="bdh-sidebar-box">
                <h3 class="bdh-sidebar-title">Bardhaman Branch Desk</h3>
                <p class="bdh-body-p">Planning a move in Bardhaman, Golapbag, or near Curzon Gate? Contact our local operations desk for an instant quotation.</p>
                <ul style="padding-left: 20px; margin-bottom: 15px; font-size: 0.93rem; color: #334155;">
                    <li><strong>Desk Address:</strong> Grand Trunk Road, Near Curzon Gate, Bardhaman</li>
                    <li><strong>Service Hours:</strong> 6:30 AM - 9:30 PM (Daily)</li>
                    <li><strong>Helpline:</strong> +91 9835565233</li>
                    <li><strong>Email:</strong> info@shreeashirwadpackers.com</li>
                </ul>
                <a href="<?php echo SITE_BASE_URL; ?>/contact" class="bdh-cta-button">Request Free Moving Quote</a>
            </div>

            <div class="bdh-sidebar-box">
                <h3 class="bdh-sidebar-title">Key Coverage Localities</h3>
                <ul style="padding-left: 20px; font-size: 0.91rem; color: #475569; line-height: 1.8;">
                    <li>Curzon Gate Heritage Zone</li>
                    <li>Burdwan University Golapbag Campus</li>
                    <li>Burdwan Medical College Complex</li>
                    <li>Tinkonia Central Bus Stand Environs</li>
                    <li>Badamtala & Nababhat Townships</li>
                    <li>Rajbati & Keshabganj Chatti</li>
                    <li>Grand Trunk Road (NH 19) Corridor</li>
                    <li>Alisha & Birhata Residential Belts</li>
                </ul>
            </div>
        </aside>
    </div>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>
</body>
</html>
