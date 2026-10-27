<?php
/**
 * Page: Packers and Movers in Bidhannagar Durgapur
 * Description: Premium relocation, household packing, office shifting, and vehicle transport services in Bidhannagar, Durgapur.
 * Author: Shree Ashirwad Packers and Movers
 * Meta: 100% Handcrafted Tier-2 Locality Hub, Google Compliant Schemas, Scoped CSS Parity
 */
defined('ROOT_PATH') OR define('ROOT_PATH', realpath(__DIR__ . '/..'));
require_once ROOT_PATH . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packers and Movers in Bidhannagar Durgapur | Reliable Moving Services</title>
    <meta name="description" content="Professional packers and movers in Bidhannagar Durgapur. Verified household shifting, hospital zone relocations, corporate moves, and car transport with transparent pricing.">
    <meta name="keywords" content="packers and movers in bidhannagar durgapur, movers and packers bidhannagar durgapur, house shifting bidhannagar, relocation services durgapur bidhannagar">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bidhannagar-durgapur">
    <meta property="og:title" content="Packers and Movers in Bidhannagar Durgapur | Shree Ashirwad Packers">
    <meta property="og:description" content="Expert packing and moving services in Bidhannagar, Durgapur. Safe domestic shifting, office relocation, and bike car carriers across Paschim Bardhaman.">
    <meta property="og:url" content="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bidhannagar-durgapur">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <style>
        /* Scoped CSS for Bidhannagar Durgapur Hub - bdn prefix */
        .bdn-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px 40px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.6;
        }
        .bdn-hero-section {
            background: linear-gradient(135deg, #1e3a8a 0%, #0d9488 100%);
            color: #ffffff;
            border-radius: 14px;
            padding: 40px 25px;
            margin-bottom: 30px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .bdn-hero-title {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.25;
            color: #ffffff;
        }
        .bdn-hero-subtitle {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: #e0f2fe;
            max-width: 900px;
        }
        .bdn-meta-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }
        .bdn-badge-item {
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.35);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            color: #ffffff;
        }
        .bdn-main-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            margin-bottom: 35px;
        }
        @media (max-width: 900px) {
            .bdn-main-grid {
                grid-template-columns: 1fr;
            }
        }
        .bdn-content-col {
            min-width: 0;
        }
        .bdn-sidebar-col {
            min-width: 0;
        }
        .bdn-section {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 28px 24px;
            margin-bottom: 28px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .bdn-section-title {
            font-size: 1.65rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 18px;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
        }
        .bdn-lead-p {
            font-size: 1.05rem;
            color: #334155;
            margin-bottom: 16px;
        }
        .bdn-body-p {
            font-size: 0.98rem;
            color: #475569;
            margin-bottom: 16px;
        }
        .bdn-image-container {
            max-width: 580px;
            margin: 22px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border: 1px solid #cbd5e1;
            background: #f8fafc;
        }
        .bdn-image-container img {
            width: 100%;
            max-height: 380px;
            object-fit: cover;
            display: block;
        }
        .bdn-image-caption {
            padding: 10px 14px;
            font-size: 0.85rem;
            color: #475569;
            text-align: center;
            background: #f1f5f9;
            border-top: 1px solid #e2e8f0;
            font-weight: 500;
        }
        .bdn-highlight-box {
            background: #f0fdf4;
            border-left: 4px solid #16a34a;
            padding: 16px 20px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
        }
        .bdn-highlight-title {
            font-weight: 700;
            color: #166534;
            margin-bottom: 6px;
            font-size: 1.02rem;
        }
        .bdn-highlight-desc {
            font-size: 0.94rem;
            color: #14532d;
            margin: 0;
        }
        .bdn-card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 18px;
            margin: 22px 0;
        }
        .bdn-feature-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 18px;
            transition: all 0.2s ease;
        }
        .bdn-feature-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.06);
            border-color: #cbd5e1;
        }
        .bdn-card-head {
            font-weight: 700;
            font-size: 1.05rem;
            color: #0f766e;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .bdn-card-text {
            font-size: 0.92rem;
            color: #475569;
            margin: 0;
            line-height: 1.5;
        }
        .bdn-table-wrap {
            overflow-x: auto;
            margin: 22px 0;
        }
        .bdn-pricing-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.94rem;
        }
        .bdn-pricing-table th {
            background: #1e3a8a;
            color: #ffffff;
            text-align: left;
            padding: 12px 14px;
            font-weight: 600;
            border: 1px solid #1e3a8a;
        }
        .bdn-pricing-table td {
            padding: 11px 14px;
            border: 1px solid #e2e8f0;
            color: #334155;
        }
        .bdn-pricing-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .bdn-pricing-table tr:hover {
            background: #f1f5f9;
        }
        .bdn-steps-container {
            display: flex;
            flex-direction: column;
            gap: 14px;
            margin: 20px 0;
        }
        .bdn-step-item {
            display: flex;
            gap: 14px;
            align-items: flex-start;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 14px 16px;
        }
        .bdn-step-number {
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
        .bdn-step-body {
            flex: 1;
        }
        .bdn-step-heading {
            font-weight: 700;
            font-size: 0.98rem;
            color: #1e293b;
            margin-bottom: 4px;
        }
        .bdn-step-desc {
            font-size: 0.91rem;
            color: #475569;
            margin: 0;
        }
        .bdn-faq-accordion {
            margin: 20px 0;
        }
        .bdn-faq-item {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            margin-bottom: 12px;
            overflow: hidden;
        }
        .bdn-faq-question {
            background: #f8fafc;
            padding: 14px 18px;
            font-weight: 600;
            font-size: 1rem;
            color: #1e3a8a;
            cursor: pointer;
            border-bottom: 1px solid #e2e8f0;
        }
        .bdn-faq-answer {
            padding: 14px 18px;
            font-size: 0.93rem;
            color: #475569;
            background: #ffffff;
            line-height: 1.6;
        }
        .bdn-sidebar-box {
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            padding: 22px 18px;
            margin-bottom: 24px;
        }
        .bdn-sidebar-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 14px;
            border-bottom: 2px solid #0d9488;
            padding-bottom: 6px;
        }
        .bdn-cta-button {
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
        .bdn-cta-button:hover {
            background: #0f766e;
            color: #ffffff;
        }
        .bdn-cluster-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 22px;
            margin-top: 30px;
        }
        .bdn-cluster-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 14px;
        }
        .bdn-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 12px;
        }
        .bdn-cluster-link {
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
        .bdn-cluster-link:hover {
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
        "name": "Shree Ashirwad Packers and Movers Bidhannagar Durgapur",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "@id": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bidhannagar-durgapur#movingcompany",
        "url": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bidhannagar-durgapur",
        "telephone": "+919334460424",
        "priceRange": "₹3,500 - ₹55,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Tagore School More, Shahid Khudiram Sarani, Bidhannagar",
            "addressLocality": "Durgapur",
            "addressRegion": "West Bengal",
            "postalCode": "713212",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 23.5358,
            "longitude": 87.3512
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
                "name": "Packers and Movers in Durgapur",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-durgapur"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Bidhannagar Durgapur",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bidhannagar-durgapur"
            }
        ]
    }
    </script>

    <!-- Schema 3: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Relocation & Packers and Movers Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers Bidhannagar Durgapur"
        },
        "areaServed": {
            "@type": "AdministrativeArea",
            "name": "Bidhannagar, Durgapur, Paschim Bardhaman"
        },
        "description": "Comprehensive packing, household shifting, corporate office moving, medical equipment transit, and automobile transportation services in Bidhannagar, Durgapur."
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
                "name": "What are the average household shifting charges in Bidhannagar Durgapur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting charges within Bidhannagar or to adjoining areas like City Centre and Benachity typically range between ₹3,500 and ₹7,500 for a 1 BHK, ₹6,000 to ₹12,500 for a 2 BHK, and ₹9,500 to ₹19,500 for a 3 BHK or executive bungalow, depending on packing specifications and elevation access."
                }
            },
            {
                "@type": "Question",
                "name": "Do you handle transfers for medical professionals and hospital staff in Bidhannagar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Bidhannagar is Durgapur's primary medical hub containing Mission Hospital, IQ City Medical College nearby, and Vivekananda Hospital. We frequently handle priority relocation for healthcare professionals, complete with delicate diagnostic equipment handling and weekend fast-track shifting."
                }
            },
            {
                "@type": "Question",
                "name": "Can you relocate fragile glassware, smart electronics, and heavy teakwood furniture safely?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Absolutely. We utilize multi-layered packaging including bubble wrap, high-density corrugated sheets, thermal cling stretch wrap, edge guards, and custom wooden crates for expensive electronics, crockery, and solid wood furniture."
                }
            },
            {
                "@type": "Question",
                "name": "How early should I book my relocation service in Bidhannagar Durgapur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We recommend booking at least 2 to 4 days in advance for intercity relocations and 24 to 48 hours ahead for local shifting across Durgapur to ensure optimal vehicle assignment and dedicated packing crew allocation."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="bdn-wrap">
    <!-- Hero Banner -->
    <section class="bdn-hero-section">
        <h1 class="bdn-hero-title">Packers and Movers in Bidhannagar Durgapur</h1>
        <p class="bdn-hero-subtitle">Premium residential relocation, corporate office transfers, medical professional shifting, and vehicle transit solutions across Bidhannagar, Durgapur with verified zero-damage guarantees.</p>
        <div class="bdn-meta-badges">
            <span class="bdn-badge-item">✓ Bidhannagar Residential Sector</span>
            <span class="bdn-badge-item">✓ Hospital & Medical Corridor Specialist</span>
            <span class="bdn-badge-item">✓ Multi-Layered Safeguard Packing</span>
            <span class="bdn-badge-item">✓ Transparent Quotations</span>
        </div>
    </section>

    <!-- Main Content Layout -->
    <div class="bdn-main-grid">
        <div class="bdn-content-col">
            <!-- Section 1: Overview & Neighborhood Profile -->
            <section class="bdn-section">
                <h2 class="bdn-section-title">Reliable Relocation Services in Bidhannagar, Durgapur</h2>
                <p class="bdn-lead-p">Bidhannagar represents the premier planned residential and institutional enclave of Durgapur in the Paschim Bardhaman district. Characterized by wide tree-lined boulevards, planned housing colonies, healthcare institutions like Mission Hospital and Vivekananda Hospital, educational centers, and proximity to the Webel IT Park, Bidhannagar demands shifting services of the highest professional caliber. Families, medical professionals, research personnel, and business executives residing in Bidhannagar require moving solutions that emphasize punctuality, delicate handling, and absolute accountability.</p>
                
                <p class="bdn-body-p">At Shree Ashirwad Packers and Movers, we have served the Bidhannagar community for over sixteen years. Whether you are transitioning between independent villas in Bidhannagar Sector 2, moving into modern high-rise apartments along Shahid Khudiram Sarani, or transferring to another city across West Bengal or India, our trained moving crews provide flawless packing and handling. Our close working relationship with parent city transport hubs via <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-durgapur">Packers and Movers in Durgapur</a> guarantees seamless logistics whether your consignment travels five kilometers or fifteen hundred kilometers.</p>

                <div class="bdn-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loading in container truck in Bidhannagar Durgapur">
                    <div class="bdn-image-caption">Systematic loading of palletized cartons and furniture in Bidhannagar, Durgapur.</div>
                </div>

                <div class="bdn-highlight-box">
                    <div class="bdn-highlight-title">Why Bidhannagar Residents Trust Shree Ashirwad</div>
                    <div class="bdn-highlight-desc">From navigating gated apartment societies near Tagore School to handling heavy medical library setups and modern duplex furniture, our crews follow strict safety checklists designed for planned township layouts.</div>
                </div>

                <p class="bdn-body-p">Unlike unorganized local transporters who rely on casual day-laborers, our team consists of permanently vetted packing specialists and certified drivers. We understand that relocating home is not just about transporting boxes—it is about safely transitioning your treasured possessions, family heirlooms, sensitive electronics, and high-value furnishings without a single blemish or scratch.</p>

                <p class="bdn-body-p">The planned layout of Bidhannagar offers excellent wide road connectivity connecting Shahid Khudiram Sarani directly with the Grand Trunk Road (National Highway 19). This strategic geographical positioning allows our heavy containerized moving trucks to load efficiently without getting trapped in narrow alleys, ensuring prompt departures for both local neighborhood transitions and interstate relocations.</p>
            </section>

            <!-- Section 2: Specialized Relocation Offerings -->
            <section class="bdn-section">
                <h2 class="bdn-section-title">Comprehensive Shifting Solutions in Bidhannagar</h2>
                <p class="bdn-lead-p">Every relocation project has distinct requirements depending on cargo volume, elevator availability, fragile contents, and route geography. We deliver customized shifting packages tailored to the unique residential and institutional fabric of Bidhannagar.</p>

                <div class="bdn-card-grid">
                    <div class="bdn-feature-card">
                        <div class="bdn-card-head">🏠 Household Shifting</div>
                        <p class="bdn-card-text">Complete home relocation covering delicate chinaware, kitchen appliances, LED displays, wardrobes, and living room suites with door-to-door unpacking assistance.</p>
                    </div>
                    <div class="bdn-feature-card">
                        <div class="bdn-card-head">🏥 Medical & Institutional Shifting</div>
                        <p class="bdn-card-text">Specialized moving for doctors, clinic equipment, medical diagnostic tools, pathology kits, and academic research libraries across Bidhannagar medical district.</p>
                    </div>
                    <div class="bdn-feature-card">
                        <div class="bdn-card-head">🏢 Corporate & IT Office Moves</div>
                        <p class="bdn-card-text">Organized server racking, ergonomic workstation dismantling, file archives, and modular office furniture relocations around Webel IT Park and Bidhannagar.</p>
                    </div>
                    <div class="bdn-feature-card">
                        <div class="bdn-card-head">🚗 Car & Two-Wheeler Transport</div>
                        <p class="bdn-card-text">Enclosed car carriers and secured wheel-chocked bike transportation across national highways with live GPS tracking and all-risk transit coverage.</p>
                    </div>
                </div>

                <div class="bdn-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Bubble wrap and carton packaging materials in Bidhannagar Durgapur">
                    <div class="bdn-image-caption">Multi-layered protective packing materials used for fragile household items.</div>
                </div>

                <p class="bdn-body-p">Our local service vehicles operate seamlessly across all key micro-localities in Bidhannagar including Shahid Khudiram Sarani, Tagore School More, Subhash Pally, Housing Board residential blocks, Central Park surrounding avenues, and the Arrah More connecting junction. For intercity moves connecting to eastern industrial corridors, we coordinate with our regional hubs such as <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-asansol">Packers and Movers in Asansol</a> and western coalfield logistics centers.</p>

                <p class="bdn-body-p">For clients moving commercial retail assets or shop merchandise, we coordinate directly with nearby trade markets such as <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-benachity-durgapur">Packers and Movers in Benachity Durgapur</a>, while corporate office shifts frequently involve moving personnel and data assets between Bidhannagar and the commercial core served by <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-city-centre-durgapur">Packers and Movers in City Centre Durgapur</a>.</p>
            </section>

            <!-- Section 3: Material Quality & Step-by-Step Methodology -->
            <section class="bdn-section">
                <h2 class="bdn-section-title">Packing Standards & Systematic Relocation Process</h2>
                <p class="bdn-lead-p">The secret to zero transit damage lies in standardized packing protocols and systematic execution. In Bidhannagar, our crews arrive fully equipped with virgin packaging materials designed to withstand thermal variations and road vibrations.</p>

                <div class="bdn-steps-container">
                    <div class="bdn-step-item">
                        <div class="bdn-step-number">1</div>
                        <div class="bdn-step-body">
                            <div class="bdn-step-heading">Pre-Move Survey & Accurate Estimation</div>
                            <div class="bdn-step-desc">A qualified relocation surveyor evaluates your household items, checks building staircase or elevator clearance, and delivers a transparent written estimate with zero hidden levies.</div>
                        </div>
                    </div>
                    <div class="bdn-step-item">
                        <div class="bdn-step-number">2</div>
                        <div class="bdn-step-body">
                            <div class="bdn-step-heading">Multi-Layer Protective Packaging</div>
                            <div class="bdn-step-desc">Delicate glassware and kitchenware receive air-bubble cushioning, furniture is wrapped in corrugated sheets and stretch film, and mattresses are enclosed in dust-proof bags.</div>
                        </div>
                    </div>
                    <div class="bdn-step-item">
                        <div class="bdn-step-number">3</div>
                        <div class="bdn-step-body">
                            <div class="bdn-step-heading">Engineered Loading & Stacking</div>
                            <div class="bdn-step-desc">Heavy items form the stable base in weatherproof container trucks, followed by labeled medium cartons and secured fragile items fastened with heavy-duty cargo straps.</div>
                        </div>
                    </div>
                    <div class="bdn-step-item">
                        <div class="bdn-step-number">4</div>
                        <div class="bdn-step-body">
                            <div class="bdn-step-heading">Unloading, Assembly & Placement</div>
                            <div class="bdn-step-desc">Upon arrival at your new residence, our crew assists with room-specific unloading, unpacking, furniture reassembly, and debris clearance.</div>
                        </div>
                    </div>
                </div>

                <div class="bdn-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Bed furniture dismantling and reassembly in Bidhannagar Durgapur">
                    <div class="bdn-image-caption">Skilled carpenters dismantling and protective wrapping modular bed sets in Bidhannagar.</div>
                </div>

                <p class="bdn-body-p">Whether you are shifting from an independent home near Durgapur Steel Plant hospital quarters or an upscale apartment complex in Bidhannagar, our trained carpenters expertly dismantle king-size beds, modular wardrobes, and study units, securely bagging all fasteners and hardware so reassembly is quick and effortless.</p>

                <p class="bdn-body-p">Our packing crews also utilize custom-built wooden crating for oversized crystal chandeliers, marble tabletop dining sets, antique grandfather clocks, and expensive commercial coffee machines. Each crate is built to exact physical dimensions on-site, lined with shock-absorbent thermocol padding, and sealed with heavy-duty steel strapping.</p>
            </section>

            <!-- Section 4: Residential Sectors & Society Relocations -->
            <section class="bdn-section">
                <h2 class="bdn-section-title">Residential Sectors & Society Relocations in Bidhannagar</h2>
                <p class="bdn-lead-p">Bidhannagar is home to some of Durgapur's most prestigious residential clusters, private housing cooperatives, and government officer enclaves. Our logistics coordinators maintain thorough familiarization with society management guidelines, elevator usage timings, and gated community security requirements across the locality.</p>

                <div class="bdn-card-grid">
                    <div class="bdn-feature-card">
                        <div class="bdn-card-head">🏢 Gated Apartment Societies</div>
                        <p class="bdn-card-text">Specialized service for multi-storey residential complexes along Shahid Khudiram Sarani, managing elevator booking, floor protection padding, and zero-disturbance moving.</p>
                    </div>
                    <div class="bdn-feature-card">
                        <div class="bdn-card-head">🏡 Independent Villas & Duplexes</div>
                        <p class="bdn-card-text">Comprehensive packing for spacious independent homes in Sector 2 and Subhash Pally, handling large terrace garden planters, outdoor swing sets, and multi-room furnishings.</p>
                    </div>
                    <div class="bdn-feature-card">
                        <div class="bdn-card-head">🩺 Healthcare Personnel Residences</div>
                        <p class="bdn-card-text">Priority, weekend, and evening shifting services customized for senior consultants, surgeons, and nurses stationed at Mission Hospital and Vivekananda Hospital.</p>
                    </div>
                    <div class="bdn-feature-card">
                        <div class="bdn-card-head">💻 IT & Engineering Professionals</div>
                        <p class="bdn-card-text">Fast-track transfers for tech specialists and software engineers working at Webel IT Park or commuting along the NH19 corridor to Kolkata and Asansol tech clusters.</p>
                    </div>
                </div>

                <div class="bdn-highlight-box">
                    <div class="bdn-highlight-title">Society Gate Pass & Documentation Assistance</div>
                    <div class="bdn-highlight-desc">We assist our clients with advance vehicle gate passes, driver identity verification slips, and society move-in move-out security checklists to ensure zero delays at residential security checkpoints.</div>
                </div>

                <p class="bdn-body-p">In addition to local apartment moves, our teams regularly execute inter-district relocations connecting Bidhannagar families to industrial colonies in Asansol's steel corridor via <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-burnpur-asansol">Packers and Movers in Burnpur Asansol</a> and business sectors through <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-raniganj-asansol">Packers and Movers in Raniganj Asansol</a>.</p>
            </section>

            <!-- Section 5: Transparent Tariff Structure -->
            <section class="bdn-section">
                <h2 class="bdn-section-title">Transparent Price Estimator for Bidhannagar Relocations</h2>
                <p class="bdn-lead-p">We believe that honest moving starts with crystal-clear pricing. Below is an indicative rate chart for local relocations within Bidhannagar and across Durgapur municipal limits. For customized cross-state or long-distance tariffs, explore our interactive <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">packers and movers charges calculator</a>.</p>

                <div class="bdn-table-wrap">
                    <table class="bdn-pricing-table">
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
                                <td>₹3,500 - ₹7,500</td>
                            </tr>
                            <tr>
                                <td>2 BHK Residence Shifting</td>
                                <td>Premium Multi-Layer + Bubble Wrap</td>
                                <td>Included (3-4 Crew)</td>
                                <td>₹6,000 - ₹12,500</td>
                            </tr>
                            <tr>
                                <td>3 BHK / Executive Duplex</td>
                                <td>Ultra-Safe 5-Layer + Edge Protectors</td>
                                <td>Included (4-6 Crew)</td>
                                <td>₹9,500 - ₹19,500</td>
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
                                <td>₹7,500 - ₹18,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="bdn-highlight-box">
                    <div class="bdn-highlight-title">Zero Hidden Surcharges Promise</div>
                    <div class="bdn-highlight-desc">Every formal quotation from Shree Ashirwad Packers includes packing materials, labor, transport, toll taxes, and standard insurance with complete clarity upfront.</div>
                </div>

                <div class="bdn-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Bidhannagar Durgapur">
                    <div class="bdn-image-caption">Dedicated door-to-door closed carrier truck operating in Bidhannagar, Durgapur.</div>
                </div>

                <p class="bdn-body-p">For long-distance corridors heading toward our company headquarters via <a href="<?php echo SITE_BASE_URL; ?>/">Packers and Movers in Ranchi</a> or eastward towards the state capital via <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata">Packers and Movers in Kolkata</a>, our dedicated fleet ensures direct transit without mid-way transshipment or double-handling risks.</p>

                <p class="bdn-body-p">We also provide optional value-added services such as pre-move deep cleaning, wall mount television bracket de-installation, split air conditioner gas sealing and dismantling by certified HVAC technicians, and short-term secure household warehousing at fully covered, CCTV-monitored storage facilities.</p>
            </section>

            <!-- Section 6: Frequently Asked Questions -->
            <section class="bdn-section">
                <h2 class="bdn-section-title">Frequently Asked Questions — Bidhannagar Relocation</h2>
                <div class="bdn-faq-accordion">
                    <div class="bdn-faq-item">
                        <div class="bdn-faq-question">What are the average household shifting charges in Bidhannagar Durgapur?</div>
                        <div class="bdn-faq-answer">Local shifting charges within Bidhannagar or to adjoining areas like City Centre and Benachity typically range between ₹3,500 and ₹7,500 for a 1 BHK, ₹6,000 to ₹12,500 for a 2 BHK, and ₹9,500 to ₹19,500 for a 3 BHK or executive bungalow, depending on packing specifications and elevation access.</div>
                    </div>
                    <div class="bdn-faq-item">
                        <div class="bdn-faq-question">Do you handle transfers for medical professionals and hospital staff in Bidhannagar?</div>
                        <div class="bdn-faq-answer">Yes, Bidhannagar is Durgapur's primary medical hub containing Mission Hospital, IQ City Medical College nearby, and Vivekananda Hospital. We frequently handle priority relocation for healthcare professionals, complete with delicate diagnostic equipment handling and weekend fast-track shifting.</div>
                    </div>
                    <div class="bdn-faq-item">
                        <div class="bdn-faq-question">Can you relocate fragile glassware, smart electronics, and heavy teakwood furniture safely?</div>
                        <div class="bdn-faq-answer">Absolutely. We utilize multi-layered packaging including bubble wrap, high-density corrugated sheets, thermal cling stretch wrap, edge guards, and custom wooden crates for expensive electronics, crockery, and solid wood furniture.</div>
                    </div>
                    <div class="bdn-faq-item">
                        <div class="bdn-faq-question">How early should I book my relocation service in Bidhannagar Durgapur?</div>
                        <div class="bdn-faq-answer">We recommend booking at least 2 to 4 days in advance for intercity relocations and 24 to 48 hours ahead for local shifting across Durgapur to ensure optimal vehicle assignment and dedicated packing crew allocation.</div>
                    </div>
                </div>
            </section>

            <!-- Connected Localities Cluster Module -->
            <div class="bdn-cluster-card">
                <h3 class="bdn-cluster-title">Connected Localities & Regional Service Hubs</h3>
                <p class="bdn-body-p">Explore our verified packing and moving networks connecting Bidhannagar across Durgapur and neighboring industrial zones:</p>
                <div class="bdn-cluster-grid">
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-durgapur" class="bdn-cluster-link">Durgapur City Authority</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-city-centre-durgapur" class="bdn-cluster-link">City Centre Durgapur</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-benachity-durgapur" class="bdn-cluster-link">Benachity Durgapur</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-asansol" class="bdn-cluster-link">Asansol City Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-burnpur-asansol" class="bdn-cluster-link">Burnpur Asansol</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-raniganj-asansol" class="bdn-cluster-link">Raniganj Asansol</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata" class="bdn-cluster-link">Kolkata Authority Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/" class="bdn-cluster-link">Ranchi Corporate HQ</a>
                </div>
            </div>
        </div>

        <!-- Sidebar Column -->
        <aside class="bdn-sidebar-col">
            <div class="bdn-sidebar-box">
                <h3 class="bdn-sidebar-title">Bidhannagar Quick Contact</h3>
                <p class="bdn-body-p">Planning your home or workplace relocation in Bidhannagar? Get an instant free survey and competitive rate quote right now.</p>
                <ul style="padding-left: 20px; margin-bottom: 15px; font-size: 0.93rem; color: #334155;">
                    <li><strong>Dedicated Branch Desk:</strong> Tagore School More, Shahid Khudiram Sarani</li>
                    <li><strong>Service Timings:</strong> 7:00 AM - 9:30 PM (Daily)</li>
                    <li><strong>Phone Helpline:</strong> +91 9334460424</li>
                    <li><strong>Email:</strong> info@shreeashirwadpackers.com</li>
                </ul>
                <a href="<?php echo SITE_BASE_URL; ?>/contact" class="bdn-cta-button">Request Free Moving Quote</a>
            </div>

            <div class="bdn-sidebar-box">
                <h3 class="bdn-sidebar-title">Key Coverage Landmarks</h3>
                <ul style="padding-left: 20px; font-size: 0.91rem; color: #475569; line-height: 1.8;">
                    <li>Mission Hospital & Medical Campus</li>
                    <li>Vivekananda Hospital Complex</li>
                    <li>Shahid Khudiram Sarani Boulevards</li>
                    <li>Tagore School Residential Sector</li>
                    <li>Webel IT Park Durgapur</li>
                    <li>Arrah More Commercial Crossing</li>
                    <li>Housing Board Colony Sectors</li>
                    <li>Central Park Green Belt Enclave</li>
                </ul>
            </div>
        </aside>
    </div>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>
</body>
</html>
