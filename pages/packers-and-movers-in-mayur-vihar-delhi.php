<?php
/**
 * Page: Packers and Movers in Mayur Vihar, Delhi
 * Description: Dedicated residential relocation, CGHS society flat shifting, Phase 1-3 moving, and inter-state logistics across Mayur Vihar, East Delhi.
 * Author: Shree Ashirwad Packers and Movers
 * Meta: 100% Handcrafted Hyper-Local Authority Hub, Google Compliant Schemas, Scoped CSS Parity
 */
defined('ROOT_PATH') OR define('ROOT_PATH', realpath(__DIR__ . '/..'));
require_once ROOT_PATH . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packers and Movers in Mayur Vihar Delhi | Phase 1, 2, 3 Relocation</title>
    <meta name="description" content="Certified packers and movers in Mayur Vihar Delhi. Expert shifting across Phase 1, Phase 2, Phase 3, CGHS societies, DDA flats, and inter-state moving to Eastern India with zero transit damage.">
    <meta name="keywords" content="packers and movers in mayur vihar delhi, movers and packers mayur vihar phase 1, cghs society shifting mayur vihar, mayur vihar phase 2 packers, mayur vihar phase 3 movers, east delhi packers">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-mayur-vihar-delhi">
    <meta property="og:title" content="Packers and Movers in Mayur Vihar Delhi | Shree Ashirwad Packers">
    <meta property="og:description" content="Professional household shifting, multi-tier packaging, and vehicle transit across Mayur Vihar Phase 1-3, CGHS societies, and East Delhi.">
    <meta property="og:url" content="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-mayur-vihar-delhi">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <style>
        /* Scoped CSS for Mayur Vihar Local Hub - myv prefix */
        .myv-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px 40px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.6;
        }
        .myv-hero-section {
            background: linear-gradient(135deg, #1e3a8a 0%, #0369a1 55%, #0f766e 100%);
            color: #ffffff;
            border-radius: 14px;
            padding: 40px 25px;
            margin-bottom: 30px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.12);
        }
        .myv-hero-title {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.25;
            color: #ffffff;
        }
        .myv-hero-subtitle {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: #ccfbf1;
            max-width: 900px;
        }
        .myv-meta-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 25px;
        }
        .myv-badge {
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #ffffff;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.88rem;
            font-weight: 600;
        }
        .myv-hero-cta {
            display: inline-flex;
            gap: 15px;
            flex-wrap: wrap;
        }
        .myv-btn-primary {
            background-color: #f59e0b;
            color: #111827;
            font-weight: 700;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.2s ease;
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.35);
        }
        .myv-btn-primary:hover {
            background-color: #d97706;
            color: #ffffff;
            transform: translateY(-2px);
        }
        .myv-btn-secondary {
            background-color: transparent;
            color: #ffffff;
            font-weight: 600;
            padding: 12px 22px;
            border-radius: 8px;
            text-decoration: none;
            border: 2px solid #ffffff;
            transition: all 0.2s ease;
        }
        .myv-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }
        .myv-section-title {
            font-size: 1.85rem;
            font-weight: 750;
            color: #1e293b;
            margin-top: 35px;
            margin-bottom: 15px;
            border-left: 5px solid #0f766e;
            padding-left: 12px;
        }
        .myv-section-subtitle {
            font-size: 1rem;
            color: #64748b;
            margin-bottom: 20px;
        }
        .myv-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
            margin: 25px 0;
        }
        .myv-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        .myv-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin: 25px 0;
        }
        @media (max-width: 900px) {
            .myv-grid-2, .myv-grid-3, .myv-grid-4 {
                grid-template-columns: 1fr;
            }
        }
        .myv-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .myv-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }
        .myv-card-title {
            font-size: 1.22rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .myv-highlight-box {
            background-color: #f0fdfa;
            border-left: 4px solid #0f766e;
            padding: 18px 20px;
            border-radius: 6px;
            margin: 22px 0;
        }
        .myv-info-banner {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 20px;
            margin: 25px 0;
        }
        .myv-image-container {
            max-width: 580px;
            margin: 22px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 22px rgba(0, 0, 0, 0.1);
        }
        .myv-image-container img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
        }
        .myv-image-caption {
            font-size: 0.85rem;
            color: #64748b;
            text-align: center;
            padding: 8px 10px;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
        }
        .myv-table-wrap {
            overflow-x: auto;
            margin: 25px 0;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
        }
        .myv-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
            text-align: left;
        }
        .myv-table th {
            background: #0f172a;
            color: #ffffff;
            padding: 12px 15px;
            font-weight: 600;
        }
        .myv-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #e2e8f0;
            color: #334155;
        }
        .myv-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .myv-table tr:hover {
            background: #f1f5f9;
        }
        .myv-faq-item {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            margin-bottom: 14px;
            background: #ffffff;
            overflow: hidden;
        }
        .myv-faq-question {
            padding: 16px 20px;
            background: #f8fafc;
            font-weight: 700;
            color: #0f172a;
            cursor: pointer;
            border-bottom: 1px solid #e2e8f0;
        }
        .myv-faq-answer {
            padding: 16px 20px;
            color: #334155;
            line-height: 1.65;
        }
        .myv-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 15px;
            margin: 25px 0;
        }
        .myv-cluster-card {
            background: #ffffff;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            padding: 14px 16px;
            text-decoration: none;
            color: #1e293b;
            display: block;
            transition: all 0.2s ease;
        }
        .myv-cluster-card:hover {
            border-color: #0f766e;
            background: #f0fdfa;
            transform: translateY(-2px);
        }
        .myv-cluster-card strong {
            display: block;
            color: #0f766e;
            margin-bottom: 4px;
            font-size: 1rem;
        }
        .myv-cluster-card span {
            font-size: 0.85rem;
            color: #64748b;
        }
        .myv-badge-pill {
            display: inline-block;
            background: #ccfbf1;
            color: #115e59;
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 0.82rem;
            font-weight: 600;
            margin-right: 6px;
            margin-bottom: 6px;
        }
    </style>

    <!-- JSON-LD Schemas: MovingCompany, BreadcrumbList, Service, FAQPage -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Mayur Vihar Delhi",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "telephone": "+91 9835565233",
        "email": "support@shreeashirwadpackers.com",
        "url": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-mayur-vihar-delhi",
        "priceRange": "₹3,500 - ₹54,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Pocket 1, Commercial Complex, Mayur Vihar Phase 1",
            "addressLocality": "Mayur Vihar, East Delhi",
            "addressRegion": "Delhi",
            "postalCode": "110091",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 28.6083,
            "longitude": 77.2954
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
            "opens": "07:00",
            "closes": "22:00"
        },
        "areaServed": [
            "Mayur Vihar Phase 1 (Pockets 1-5)",
            "Mayur Vihar Phase 2 (Pockets A-C)",
            "Mayur Vihar Phase 3 & Kondli",
            "CGHS Cooperative Housing Societies",
            "Acharya Niketan Market",
            "Noida Link Road Corridor",
            "NH-24 / Delhi-Meerut Expressway",
            "East Delhi"
        ]
    }
    </script>

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
                "name": "Delhi Packers and Movers",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-delhi"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Mayur Vihar Hub",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-mayur-vihar-delhi"
            }
        ]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "CGHS Apartment Shifting & Phase 1-3 Relocation in Mayur Vihar",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "AdministrativeArea",
            "name": "Mayur Vihar, East Delhi"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Mayur Vihar Relocation Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "CGHS Multi-Storey High-Rise Flat Shifting"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Mayur Vihar Phase 1, 2, 3 Residential Moving"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Noida Border Quick Corporate Shifting"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Inter-State Vehicle & Household Transit to Eastern India"
                    }
                }
            ]
        }
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "How do you handle CGHS society security rules and service elevator permissions in Mayur Vihar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Mayur Vihar's Cooperative Group Housing Societies (CGHS) across Phase 1 and Phase 2 require prior gate entry clearances. Our crew coordinates with the management committee, submitting digital staff credentials and truck details. We provide protective elevator wall padding and ensure moves conclude within approved daytime hours."
                }
            },
            {
                "@type": "Question",
                "name": "What are the moving charges for local household shifting in Mayur Vihar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting in Mayur Vihar ranges from ₹3,500 to ₹7,000 for a 1 BHK, ₹6,000 to ₹11,500 for a 2 BHK apartment, and ₹9,500 to ₹17,500 for a 3 BHK/4 BHK CGHS flat, covering four-layer packing, loading, transport, and unloading."
                }
            },
            {
                "@type": "Question",
                "name": "Do height-barrier gates in DDA pockets of Mayur Vihar pose problems for your container trucks?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Many residential pockets in Phase 1 and Phase 2 have overhead height-restriction barriers. We deploy compact 14-foot enclosed container vehicles specifically engineered to clear these residential gates easily, allowing trucks to park directly beside your building entrance."
                }
            },
            {
                "@type": "Question",
                "name": "Can you relocate household goods from Mayur Vihar to Ranchi, Patna, or Kolkata?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Mayur Vihar has immediate access to the Delhi-Meerut Expressway (NH-24) connecting swiftly onto NH-19 towards Jharkhand, Bihar, and West Bengal. Moves are executed with sealed container trucks, real-time GPS tracking, and comprehensive transit insurance."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide modular furniture dismantling and reassembly in Mayur Vihar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Our team includes experienced carpenters who dismantle hydraulic storage beds, sliding door wardrobes, and modular study desks, reassembling them securely at your destination flat."
                }
            },
            {
                "@type": "Question",
                "name": "How far in advance should I book packers and movers in Mayur Vihar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We advise booking 3 to 4 days ahead of your scheduled move, especially for weekend shifts and month-ends when residential demand across East Delhi is at its peak."
                }
            },
            {
                "@type": "Question",
                "name": "Is transit insurance provided for long-distance relocations from Mayur Vihar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, comprehensive transit insurance is provided for all inter-state movements originating from Mayur Vihar, supported by an itemized digital valuation inventory sheet."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide free pre-move surveys across Mayur Vihar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our local operations supervisor provides free on-site physical surveys across Phase 1, Phase 2, and Phase 3, as well as rapid video consultations via WhatsApp to deliver fixed transparent quotations."
                }
            }
        ]
    }
    </script>
</head>
<body>

<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="myv-wrap">
    <!-- Hero Section -->
    <section class="myv-hero-section">
        <h1 class="myv-hero-title">Packers and Movers in Mayur Vihar Delhi</h1>
        <p class="myv-hero-subtitle">Specialized CGHS high-rise apartment shifting, Phase 1 to 3 residential moving, elevator protection protocols, and dependable inter-state logistics with multi-tier packaging protection.</p>
        
        <div class="myv-meta-badges">
            <span class="myv-badge">Phase 1, 2, 3 Covered</span>
            <span class="myv-badge">CGHS High-Rise Specialists</span>
            <span class="myv-badge">Elevator Padding Protection</span>
            <span class="myv-badge">Noida Link Road Access</span>
            <span class="myv-badge">Zero Transit Damage</span>
        </div>

        <div class="myv-hero-cta">
            <a href="tel:+919835565233" class="myv-btn-primary">Call Relocation Desk: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="myv-btn-secondary">Check Live Tariff Calculator</a>
        </div>
    </section>

    <!-- Section 1: Overview & East Delhi Trans-Yamuna Residential Master Plan -->
    <section>
        <h2 class="myv-section-title">East Delhi's Premier Trans-Yamuna Relocation Specialists</h2>
        <p class="myv-section-subtitle">Navigating Mayur Vihar's planned phases, cooperative group housing societies, and prime expressway corridors with precision moving solutions.</p>

        <p>Mayur Vihar stands as East Delhi's most prestigious planned trans-Yamuna residential sub-city. Divided into three distinct phases—Mayur Vihar Phase 1 (featuring Pockets 1 through 5, Acharya Niketan commercial market, and elite societies like East End Apartments), Phase 2 (flanked by Sanjay Lake and organized Pockets A, B, and C), and Phase 3 (bordering Noida Sector 11 and Kondli)—the area accommodates civil servants, corporate executives, lawyers, and business entrepreneurs.</p>

        <p>Relocating in Mayur Vihar involves navigating unique residential society infrastructure: managing cooperative society gate entry clearances, providing protective elevator wall padding in multi-storey towers, steering clear of height-restricted pocket entry arches, and utilizing strategic access routes like Noida Link Road, Mayur Vihar Flyover, and NH-24 / Delhi-Meerut Expressway. Shree Ashirwad Packers and Movers brings more than 16 years of hands-on moving mastery to Mayur Vihar.</p>

        <div class="myv-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loaded into container truck in Mayur Vihar Delhi">
            <div class="myv-image-caption">Systematic truck loading operations supervised by certified relocation executives in Mayur Vihar.</div>
        </div>

        <p>Whether you are shifting locally within Mayur Vihar from Phase 1 Pocket 2 to a cooperative apartment in Phase 2, moving across the border to Noida or central Delhi via the Pink Line / Blue Line corridors, or relocating inter-state to Eastern India (Ranchi, Patna, Jamshedpur, or Kolkata), our certified operations personnel guarantee meticulous care, punctual transport, and complete peace of mind.</p>
    </section>

    <!-- Section 2: Comprehensive Local Relocation Services -->
    <section>
        <h2 class="myv-section-title">Specialized Relocation Solutions Across Mayur Vihar</h2>
        <p class="myv-section-subtitle">Tailored relocation services designed for CGHS high-rise towers, DDA pockets, and long-distance inter-state moves.</p>

        <div class="myv-grid-3">
            <div class="myv-card">
                <h3 class="myv-card-title">CGHS High-Rise Shifting</h3>
                <p>Complete packing and transit tailored for Mayur Vihar's cooperative housing societies. We coordinate RWA permissions, provide elevator padding, and execute silent loading.</p>
                <div class="myv-badge-pill">Elevator Padding</div>
                <div class="myv-badge-pill">CGHS Societies</div>
                <div class="myv-badge-pill">RWA Compliant</div>
            </div>

            <div class="myv-card">
                <h3 class="myv-card-title">Phase 1, 2, 3 Local Moves</h3>
                <p>Specialized relocations across DDA SFS flats, builder floors in Acharya Niketan, and residential pockets using agile 14ft closed container vehicles.</p>
                <div class="myv-badge-pill">Arch Clearance</div>
                <div class="myv-badge-pill">Pocket Parking</div>
                <div class="myv-badge-pill">Zero Road Blockage</div>
            </div>

            <div class="myv-card">
                <h3 class="myv-card-title">Inter-State Transit to East</h3>
                <p>Direct line container transit connecting Mayur Vihar via Delhi-Meerut Expressway (NH-24) to NH-19 towards Jharkhand, Bihar, and West Bengal with real-time GPS tracking.</p>
                <div class="myv-badge-pill">Ranchi HQ Line</div>
                <div class="myv-badge-pill">Sealed Trucks</div>
                <div class="myv-badge-pill">All-Risk Cover</div>
            </div>
        </div>

        <div class="myv-highlight-box">
            <strong>Mayur Vihar Society Protocol:</strong> Cooperative housing societies in Phase 1 and Phase 2 strictly enforce moving hours between 9:00 AM and 1:30 PM, and 3:30 PM to 6:30 PM, disallowing Sunday elevator moves in select blocks. Our operations managers align crew schedules to your society's specific moving bylaws.
        </div>
    </section>

    <!-- Section 3: Multi-Layer Packaging Engineering -->
    <section>
        <h2 class="myv-section-title">4-Layer Protective Packaging System for Mayur Vihar Relocations</h2>
        <p class="myv-section-subtitle">Engineering superior material defense to safeguard valuable household goods against road vibrations and rough handling.</p>

        <p>Relocating from multi-level builder floors or walk-up apartments places considerable stress on furniture joints and polished finishes. To counteract friction, moisture, and impact shocks, Shree Ashirwad Packers and Movers implements a standardized 4-layer packaging sequence on all household moves originating in Mayur Vihar.</p>

        <div class="myv-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Multi-tier bubble wrapping and heavy-duty carton packing in Mayur Vihar">
            <div class="myv-image-caption">High-density bubble wrap and export-grade corrugated boxes protect delicate belongings during transit.</div>
        </div>

        <div class="myv-grid-2">
            <div class="myv-card">
                <h3 class="myv-card-title">1. Virgin Bubble Wrap & Foam Lining</h3>
                <p>Thick 100 GSM bubble film encapsulates electronics, glass tabletops, wall art, and polished wood to provide resilient cushion absorption against surface impact.</p>
            </div>
            <div class="myv-card">
                <h3 class="myv-card-title">2. Heavy-Duty Corrugated Corner Shields</h3>
                <p>Rigid 5-ply corner edge protectors shield sharp edges of wardrobes, beds, and dressing consoles, preventing dings during staircase turns and hoisting.</p>
            </div>
            <div class="myv-card">
                <h3 class="myv-card-title">3. Moisture & Rain LDPE Shrink Wrap</h3>
                <p>Industrial waterproof film is wrapped tightly across mattresses, upholstered sofas, and electronics, creating an airtight shield against dust and rain.</p>
            </div>
            <div class="myv-card">
                <h3 class="myv-card-title">4. Heavy Strapping & Digital Inventory</h3>
                <p>Tear-resistant nylon strapping secures cartons. Every package is labeled with room designations and indexed on a digital inventory slip signed by the client.</p>
            </div>
        </div>
    </section>

    <!-- Section 4: Transparent Pricing Table -->
    <section>
        <h2 class="myv-section-title">Transparent Relocation Tariff for Mayur Vihar</h2>
        <p class="myv-section-subtitle">Standardized, upfront price rates with zero hidden charges, stairs markups, or fuel surprises.</p>

        <p>We believe in absolute financial transparency. Below is an indicative schedule of charges for local shifts within Mayur Vihar and inter-state journeys originating from East Delhi to Eastern India.</p>

        <div class="myv-table-wrap">
            <table class="myv-table">
                <thead>
                    <tr>
                        <th>Apartment / Move Type</th>
                        <th>Packing Standard</th>
                        <th>Local Shifting (Mayur Vihar Phase 1-3)</th>
                        <th>Inter-State (Mayur Vihar to Ranchi / Patna)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Flat / Apartment</strong></td>
                        <td>3-Ply Carton + Bubble Wrap</td>
                        <td>₹3,500 - ₹6,500</td>
                        <td>₹14,000 - ₹21,500</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK CGHS / DDA Flat</strong></td>
                        <td>4-Layer Comprehensive Pack</td>
                        <td>₹6,000 - ₹11,500</td>
                        <td>₹21,500 - ₹33,000</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK High-Rise Flat</strong></td>
                        <td>5-Ply Heavy Sheet + Bubble</td>
                        <td>₹9,500 - ₹16,500</td>
                        <td>₹31,000 - ₹45,000</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Luxury Penthouse</strong></td>
                        <td>Complete Crating & Custom Wrap</td>
                        <td>₹14,000 - ₹23,000</td>
                        <td>₹43,000 - ₹64,000</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler (Scooter / Bike)</strong></td>
                        <td>Bubble + Corrugated Carton</td>
                        <td>₹1,500 - ₹2,800</td>
                        <td>₹4,500 - ₹7,000</td>
                    </tr>
                    <tr>
                        <td><strong>Four-Wheeler (Car / Sedan / SUV)</strong></td>
                        <td>Enclosed Car Carrier</td>
                        <td>₹2,500 - ₹4,000</td>
                        <td>₹14,000 - ₹24,000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <p>Planning an inter-state relocation from Mayur Vihar? Calculate exact moving costs in real-time using our interactive <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">Live Relocation Tariff Calculator</a>.</p>
    </section>

    <!-- Section 5: Furniture Dismantling & Technical Handling -->
    <section>
        <h2 class="myv-section-title">Carpentry & Appliance Handling for Mayur Vihar Residences</h2>
        <p class="myv-section-subtitle">Skilled technicians ensure flawless dismantling, safe transit, and accurate reassembly of modular interiors.</p>

        <div class="myv-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture dismantling and bed reassembly in Mayur Vihar Delhi">
            <div class="myv-image-caption">Skilled carpenters dismantling and cataloging hardware components before protective wrapping.</div>
        </div>

        <p>Homes in Mayur Vihar feature customized modular interior woodwork: multi-door wardrobes, king-sized hydraulic storage beds, wall-mounted entertainment centers, and modular executive desks. Attempting to maneuver these large items through narrow builder floor staircases without systematic dismantling causes joint damage and wall scuffs.</p>

        <p>Our relocation crews include certified on-site carpenters equipped with specialized power tools. They methodically unbolt structural frames, label all hardware into sealed pouches, and wrap each component individually. Upon arrival at your new residence, our carpenters reassemble every piece of furniture, aligning drawers and hinges to perfection.</p>

        <div class="myv-grid-2">
            <div class="myv-card">
                <h3 class="myv-card-title">Air Conditioner & RO Purifier Handling</h3>
                <p>Safe electrical dismounting of split and window ACs with copper pipe protection, alongside careful uninstallation of water purifiers and geysers.</p>
            </div>
            <div class="myv-card">
                <h3 class="myv-card-title">Glass Dining Tables & Crockery Units</h3>
                <p>Cushioned with high-density foam sheets and enclosed in heavy-duty customized wooden crates to prevent stress cracks during transit.</p>
            </div>
        </div>
    </section>

    <!-- Section 6: Door-to-Door Process & Fleet Management -->
    <section>
        <h2 class="myv-section-title">Systematic Door-to-Door Relocation Protocol</h2>
        <p class="myv-section-subtitle">From initial survey to final placement, our four-stage moving cycle delivers unmatched peace of mind.</p>

        <div class="myv-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Mayur Vihar Delhi">
            <div class="myv-image-caption">Punctual, GPS-monitored enclosed delivery vehicles stationed across East Delhi.</div>
        </div>

        <div class="myv-grid-4">
            <div class="myv-card">
                <h3 class="myv-card-title">Step 1: Survey</h3>
                <p>Thorough assessment of inventory volume, pocket gate clearance, stairwell dimensions, and parking permissions.</p>
            </div>
            <div class="myv-card">
                <h3 class="myv-card-title">Step 2: Packing</h3>
                <p>Multi-layer protective wrapping, delicate item crating, and systematic room-by-room box labeling.</p>
            </div>
            <div class="myv-card">
                <h3 class="myv-card-title">Step 3: Transit</h3>
                <p>Transport in weather-proof container vehicles outfitted with real-time GPS tracking and transit safety locks.</p>
            </div>
            <div class="myv-card">
                <h3 class="myv-card-title">Step 4: Placement</h3>
                <p>Safe unloading, hoisting if required, furniture reassembly, room arrangement, and complete cleanup of packing debris.</p>
            </div>
        </div>

        <p>Our dedicated transport fleet in East Delhi includes maneuverable 14-foot closed container trucks tailored to navigate the residential pocket gates of Mayur Vihar Phase 1, Phase 2, and Phase 3, ensuring that loading and unloading take place directly at your doorstep without causing street congestion.</p>
    </section>

    <!-- Section 7: Key Localities Covered in Mayur Vihar -->
    <section>
        <h2 class="myv-section-title">Comprehensive Coverage Across All Mayur Vihar Phases</h2>
        <p class="myv-section-subtitle">Prompt local response and dedicated packing units stationed across key sectors of East Delhi.</p>

        <div class="myv-info-banner">
            <p>Our moving crews operate daily across every sector and adjacent neighborhood of Mayur Vihar:</p>
            <ul style="columns: 2; -webkit-columns: 2; margin-top: 10px; line-height: 1.8;">
                <li><strong>Mayur Vihar Phase 1:</strong> Pockets 1 to 5, Acharya Niketan Market, DDA SFS flats.</li>
                <li><strong>Mayur Vihar Phase 2:</strong> Pockets A, B, C, Sanjay Lake frontage, and cooperative societies.</li>
                <li><strong>Mayur Vihar Phase 3:</strong> Pocket A1, Kondli border, and direct Noida Sector 11 link.</li>
                <li><strong>East End Apartments & CGHS:</strong> Multi-storey high-rise gated residential societies.</li>
                <li><strong>Noida Link Road Corridor:</strong> High-speed access to Akshardham and Noida Sector 14/15.</li>
                <li><strong>Delhi-Meerut Expressway (NH-24):</strong> Direct highway connection to Ghaziabad and NH-19.</li>
            </ul>
        </div>
    </section>

    <!-- Section 8: Frequently Asked Questions -->
    <section>
        <h2 class="myv-section-title">Frequently Asked Questions: Mayur Vihar Moving</h2>
        <p class="myv-section-subtitle">Real questions answered by our Mayur Vihar relocation operations desk.</p>

        <div class="myv-faq-item">
            <div class="myv-faq-question">How do you handle CGHS society security rules and service elevator permissions in Mayur Vihar?</div>
            <div class="myv-faq-answer">
                Mayur Vihar's Cooperative Group Housing Societies (CGHS) across Phase 1 and Phase 2 require prior gate entry clearances. Our crew coordinates with the management committee, submitting digital staff credentials and truck details. We provide protective elevator wall padding and ensure moves conclude within approved daytime hours.
            </div>
        </div>

        <div class="myv-faq-item">
            <div class="myv-faq-question">What are the moving charges for local household shifting in Mayur Vihar?</div>
            <div class="myv-faq-answer">
                Local shifting in Mayur Vihar ranges from ₹3,500 to ₹7,000 for a 1 BHK, ₹6,000 to ₹11,500 for a 2 BHK apartment, and ₹9,500 to ₹17,500 for a 3 BHK/4 BHK CGHS flat, covering four-layer packing, loading, transport, and unloading.
            </div>
        </div>

        <div class="myv-faq-item">
            <div class="myv-faq-question">Do height-barrier gates in DDA pockets of Mayur Vihar pose problems for your container trucks?</div>
            <div class="myv-faq-answer">
                Many residential pockets in Phase 1 and Phase 2 have overhead height-restriction barriers. We deploy compact 14-foot enclosed container vehicles specifically engineered to clear these residential gates easily, allowing trucks to park directly beside your building entrance.
            </div>
        </div>

        <div class="myv-faq-item">
            <div class="myv-faq-question">Can you relocate household goods from Mayur Vihar to Ranchi, Patna, or Kolkata?</div>
            <div class="myv-faq-answer">
                Yes. Mayur Vihar has immediate access to the Delhi-Meerut Expressway (NH-24) connecting swiftly onto NH-19 towards Jharkhand, Bihar, and West Bengal. Moves are executed with sealed container trucks, real-time GPS tracking, and comprehensive transit insurance.
            </div>
        </div>

        <div class="myv-faq-item">
            <div class="myv-faq-question">Do you provide modular furniture dismantling and reassembly in Mayur Vihar?</div>
            <div class="myv-faq-answer">
                Yes. Our team includes experienced carpenters who dismantle hydraulic storage beds, sliding door wardrobes, and modular study desks, reassembling them securely at your destination flat.
            </div>
        </div>

        <div class="myv-faq-item">
            <div class="myv-faq-question">How far in advance should I book packers and movers in Mayur Vihar?</div>
            <div class="myv-faq-answer">
                We advise booking 3 to 4 days ahead of your scheduled move, especially for weekend shifts and month-ends when residential demand across East Delhi is at its peak.
            </div>
        </div>

        <div class="myv-faq-item">
            <div class="myv-faq-question">Is transit insurance provided for long-distance relocations from Mayur Vihar?</div>
            <div class="myv-faq-answer">
                Yes, comprehensive transit insurance is provided for all inter-state movements originating from Mayur Vihar, supported by an itemized digital valuation inventory sheet.
            </div>
        </div>

        <div class="myv-faq-item">
            <div class="myv-faq-question">Do you provide free pre-move surveys across Mayur Vihar?</div>
            <div class="myv-faq-answer">
                Yes, our local operations supervisor provides free on-site physical surveys across Phase 1, Phase 2, and Phase 3, as well as rapid video consultations via WhatsApp to deliver fixed transparent quotations.
            </div>
        </div>
    </section>

    <!-- Section 9: Strategic Connected Internal Cluster Links -->
    <section>
        <h2 class="myv-section-title">Explore Connected Relocation Hubs Across Delhi NCR</h2>
        <p class="myv-section-subtitle">Seamless connectivity between Mayur Vihar and prominent regional commercial and residential hubs.</p>

        <div class="myv-cluster-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-delhi" class="myv-cluster-card">
                <strong>Delhi City Authority Hub</strong>
                <span>NCT Central Headquarters & Relocation Desk</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-laxmi-nagar-delhi" class="myv-cluster-card">
                <strong>Laxmi Nagar Delhi Hub</strong>
                <span>East Delhi Commercial & Coaching Nerve Centre</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lajpat-nagar-delhi" class="myv-cluster-card">
                <strong>Lajpat Nagar Delhi Hub</strong>
                <span>Direct Access via DND & Barapullah Elevated Road</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-saket-delhi" class="myv-cluster-card">
                <strong>Saket Delhi Hub</strong>
                <span>South Delhi Corporate & Legal Hub</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-karol-bagh-delhi" class="myv-cluster-card">
                <strong>Karol Bagh Delhi Hub</strong>
                <span>Central Delhi Trading & Commercial Corridor</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dwarka-delhi" class="myv-cluster-card">
                <strong>Dwarka Sub-City Hub</strong>
                <span>Direct Metro Link via Blue Line Corridor</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida" class="myv-cluster-card">
                <strong>Noida City Hub</strong>
                <span>Immediate Border Crossing via Sector 14/15 Link</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ghaziabad" class="myv-cluster-card">
                <strong>Ghaziabad City Hub</strong>
                <span>Delhi-Meerut Expressway High-Speed Link</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/" class="myv-cluster-card">
                <strong>Ranchi Headquarters</strong>
                <span>Company Main Authority & Eastern Logistics Hub</span>
            </a>
        </div>
    </section>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
