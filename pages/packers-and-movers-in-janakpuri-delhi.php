<?php
/**
 * Page: Packers and Movers in Janakpuri, Delhi
 * Description: Premium residential relocation, builder floor shifting, District Centre commercial moving, and inter-state logistics across Janakpuri Blocks A to D, West Delhi.
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
    <title>Packers and Movers in Janakpuri Delhi | Builder Floor & District Centre Moving</title>
    <meta name="description" content="Certified packers and movers in Janakpuri Delhi. Expert home shifting across Blocks A, B, C, D, District Centre, builder floors, and inter-state relocation to Eastern India with zero damage.">
    <meta name="keywords" content="packers and movers in janakpuri delhi, movers and packers janakpuri block c, builder floor shifting janakpuri, house shifting janakpuri west, district centre janakpuri movers, jail road packers delhi">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-janakpuri-delhi">
    <meta property="og:title" content="Packers and Movers in Janakpuri Delhi | Shree Ashirwad Packers">
    <meta property="og:description" content="Dependable household shifting, multi-tier packaging, and vehicle transit across Janakpuri Blocks A-D, District Centre, and West Delhi.">
    <meta property="og:url" content="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-janakpuri-delhi">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <style>
        /* Scoped CSS for Janakpuri Local Hub - jkp prefix */
        .jkp-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px 40px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.6;
        }
        .jkp-hero-section {
            background: linear-gradient(135deg, #1e3a8a 0%, #0284c7 55%, #c026d3 100%);
            color: #ffffff;
            border-radius: 14px;
            padding: 40px 25px;
            margin-bottom: 30px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.12);
        }
        .jkp-hero-title {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.25;
            color: #ffffff;
        }
        .jkp-hero-subtitle {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: #fae8ff;
            max-width: 900px;
        }
        .jkp-meta-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 25px;
        }
        .jkp-badge {
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #ffffff;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.88rem;
            font-weight: 600;
        }
        .jkp-hero-cta {
            display: inline-flex;
            gap: 15px;
            flex-wrap: wrap;
        }
        .jkp-btn-primary {
            background-color: #f59e0b;
            color: #111827;
            font-weight: 700;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.2s ease;
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.35);
        }
        .jkp-btn-primary:hover {
            background-color: #d97706;
            color: #ffffff;
            transform: translateY(-2px);
        }
        .jkp-btn-secondary {
            background-color: transparent;
            color: #ffffff;
            font-weight: 600;
            padding: 12px 22px;
            border-radius: 8px;
            text-decoration: none;
            border: 2px solid #ffffff;
            transition: all 0.2s ease;
        }
        .jkp-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }
        .jkp-section-title {
            font-size: 1.85rem;
            font-weight: 750;
            color: #1e293b;
            margin-top: 35px;
            margin-bottom: 15px;
            border-left: 5px solid #c026d3;
            padding-left: 12px;
        }
        .jkp-section-subtitle {
            font-size: 1rem;
            color: #64748b;
            margin-bottom: 20px;
        }
        .jkp-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
            margin: 25px 0;
        }
        .jkp-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        .jkp-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin: 25px 0;
        }
        @media (max-width: 900px) {
            .jkp-grid-2, .jkp-grid-3, .jkp-grid-4 {
                grid-template-columns: 1fr;
            }
        }
        .jkp-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .jkp-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }
        .jkp-card-title {
            font-size: 1.22rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .jkp-highlight-box {
            background-color: #fdf4ff;
            border-left: 4px solid #c026d3;
            padding: 18px 20px;
            border-radius: 6px;
            margin: 22px 0;
        }
        .jkp-info-banner {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 20px;
            margin: 25px 0;
        }
        .jkp-image-container {
            max-width: 580px;
            margin: 22px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 22px rgba(0, 0, 0, 0.1);
        }
        .jkp-image-container img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
        }
        .jkp-image-caption {
            font-size: 0.85rem;
            color: #64748b;
            text-align: center;
            padding: 8px 10px;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
        }
        .jkp-table-wrap {
            overflow-x: auto;
            margin: 25px 0;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
        }
        .jkp-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
            text-align: left;
        }
        .jkp-table th {
            background: #0f172a;
            color: #ffffff;
            padding: 12px 15px;
            font-weight: 600;
        }
        .jkp-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #e2e8f0;
            color: #334155;
        }
        .jkp-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .jkp-table tr:hover {
            background: #f1f5f9;
        }
        .jkp-faq-item {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            margin-bottom: 14px;
            background: #ffffff;
            overflow: hidden;
        }
        .jkp-faq-question {
            padding: 16px 20px;
            background: #f8fafc;
            font-weight: 700;
            color: #0f172a;
            cursor: pointer;
            border-bottom: 1px solid #e2e8f0;
        }
        .jkp-faq-answer {
            padding: 16px 20px;
            color: #334155;
            line-height: 1.65;
        }
        .jkp-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 15px;
            margin: 25px 0;
        }
        .jkp-cluster-card {
            background: #ffffff;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            padding: 14px 16px;
            text-decoration: none;
            color: #1e293b;
            display: block;
            transition: all 0.2s ease;
        }
        .jkp-cluster-card:hover {
            border-color: #c026d3;
            background: #fdf4ff;
            transform: translateY(-2px);
        }
        .jkp-cluster-card strong {
            display: block;
            color: #c026d3;
            margin-bottom: 4px;
            font-size: 1rem;
        }
        .jkp-cluster-card span {
            font-size: 0.85rem;
            color: #64748b;
        }
        .jkp-badge-pill {
            display: inline-block;
            background: #fae8ff;
            color: #86198f;
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
        "name": "Shree Ashirwad Packers and Movers Janakpuri Delhi",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "telephone": "+91 9708323605",
        "email": "support@shreeashirwadpackers.com",
        "url": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-janakpuri-delhi",
        "priceRange": "₹3,500 - ₹54,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Shop 18, Block B-1 Market, Opp. District Centre",
            "addressLocality": "Janakpuri, West Delhi",
            "addressRegion": "Delhi",
            "postalCode": "110058",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 28.6219,
            "longitude": 77.0878
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
            "opens": "07:00",
            "closes": "22:00"
        },
        "areaServed": [
            "Janakpuri Blocks A, B, C, D",
            "Janakpuri District Centre",
            "Jail Road Commercial Corridor",
            "Janakpuri West Metro Interchange",
            "Janakpuri East & Chhoti Sabzi Mandi",
            "Posangipur Village & Environs",
            "Outer Ring Road Janakpuri",
            "West Delhi"
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
                "name": "Janakpuri Hub",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-janakpuri-delhi"
            }
        ]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Builder Floor Shifting & District Centre Commercial Relocation in Janakpuri",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "AdministrativeArea",
            "name": "Janakpuri, West Delhi"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Janakpuri Relocation Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Janakpuri Builder Floor Multi-Level Shifting"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Janakpuri District Centre Corporate Office Relocation"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Blocks A, B, C, D Local House Shifting"
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
                "name": "How do you navigate narrow residential lanes and parking in Janakpuri blocks?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Janakpuri's Blocks A, B, and C have dense residential rows with frequent vehicle parking on both sides of internal roads. We deploy compact 14-foot closed container trucks that maneuver easily through internal colony gates, parking directly outside your house gate for rapid, obstacle-free loading."
                }
            },
            {
                "@type": "Question",
                "name": "What are the moving charges for local household shifting in Janakpuri?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting within Janakpuri ranges from ₹3,500 to ₹7,000 for a 1 BHK, ₹6,500 to ₹12,000 for a 2 BHK apartment or builder floor, and ₹10,000 to ₹17,500 for a 3 BHK/4 BHK independent kothi, including four-layer packing, loading, transport, and unloading."
                }
            },
            {
                "@type": "Question",
                "name": "Can you shift commercial offices located in Janakpuri District Centre?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We handle corporate office moves across Janakpuri District Centre, Westend Mall, and Jail Road commercial complexes. We provide weekend and overnight shifting to ensure zero business disruption, using color-coded IT equipment bins and anti-static bubble wrapping for server racks."
                }
            },
            {
                "@type": "Question",
                "name": "Do you offer inter-state relocation from Janakpuri to Ranchi, Patna, or Jamshedpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our direct-route container fleet links Janakpuri to Jharkhand, Bihar, and West Bengal via the Outer Ring Road and NH-19 corridor. Moves include comprehensive transit insurance, real-time GPS tracking, and dedicated container security seals."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide balcony hoisting for large sofas in Janakpuri builder floors?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. For second, third, and fourth-floor builder floors with tight stairways, our crew utilizes certified nylon lifting slings and pulley systems to safely hoist large 3-seater sofas, king-size mattresses, and heavy wooden furniture over balconies with zero scratch risk."
                }
            },
            {
                "@type": "Question",
                "name": "How far in advance should I schedule my Janakpuri relocation?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We recommend reserving your move 3 to 4 days ahead, particularly for weekend dates and month-ends when residential shifting volume across Janakpuri and West Delhi is peak."
                }
            },
            {
                "@type": "Question",
                "name": "Is transit insurance included for long-distance shifting from Janakpuri?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, all inter-state moves are covered under our all-risk transit insurance policy. Our relocation supervisor provides an itemized valuation manifest before departure."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide free pre-move surveys in Janakpuri?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our local operations supervisor provides free on-site physical surveys across all blocks of Janakpuri, or quick video surveys via WhatsApp to issue transparent, fixed quotes."
                }
            }
        ]
    }
    </script>
</head>
<body>

<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="jkp-wrap">
    <!-- Hero Section -->
    <section class="jkp-hero-section">
        <h1 class="jkp-hero-title">Packers and Movers in Janakpuri Delhi</h1>
        <p class="jkp-hero-subtitle">Specialized builder floor shifting, Janakpuri District Centre corporate moves, Blocks A to D residential relocation, and trusted inter-state logistics with multi-tier packaging protection.</p>
        
        <div class="jkp-meta-badges">
            <span class="jkp-badge">Blocks A, B, C, D Covered</span>
            <span class="jkp-badge">District Centre Corporate Moves</span>
            <span class="jkp-badge">Balcony Furniture Hoisting</span>
            <span class="jkp-badge">Metro Line Connectivity</span>
            <span class="jkp-badge">Zero Transit Damage</span>
        </div>

        <div class="jkp-hero-cta">
            <a href="tel:+919708323605" class="jkp-btn-primary">Call Relocation Desk: +91 9708323605</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="jkp-btn-secondary">Check Live Tariff Calculator</a>
        </div>
    </section>

    <!-- Section 1: Overview & West Delhi Infrastructure -->
    <section>
        <h2 class="jkp-section-title">West Delhi's Premier Residential & Commercial Relocation Specialists</h2>
        <p class="jkp-section-subtitle">Navigating Janakpuri's structured avenues, prominent commercial complexes, and modern builder floors with precision moving solutions.</p>

        <p>Janakpuri stands as the undisputed heart of West Delhi, renowned for its organized residential blocks (Blocks A, B, C, and D), high-end commercial vibrancy at the Janakpuri District Centre, and strategic transit connectivity along the Outer Ring Road and Najafgarh Road. With the Janakpuri West Metro Interchange linking both the Blue Line and the Magenta Line directly to IGI Airport and Noida, Janakpuri attracts business professionals, corporate executives, and multigenerational families who demand premium moving standards.</p>

        <p>Moving in Janakpuri involves navigating unique neighborhood characteristics: from expansive independent bungalows and modern builder floors with narrow stairwells to active commercial sectors along Jail Road and the bustling District Centre. Shree Ashirwad Packers and Movers brings more than 16 years of battle-tested moving expertise to Janakpuri, deploying customized equipment and trained crews to ensure a flawless shifting experience.</p>

        <div class="jkp-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loaded into container truck in Janakpuri Delhi">
            <div class="jkp-image-caption">Systematic truck loading operations supervised by certified relocation executives in Janakpuri.</div>
        </div>

        <p>Whether you are shifting within Janakpuri from Block C to a newly renovated builder floor in Block B1, relocating your consulting office to the Janakpuri District Centre, or planning a long-distance transfer to Eastern India (Ranchi, Patna, Jamshedpur, or Dhanbad), our dedicated logistics network guarantees punctual, safe, and transparent services.</p>
    </section>

    <!-- Section 2: Comprehensive Local Relocation Services -->
    <section>
        <h2 class="jkp-section-title">Specialized Relocation Solutions Across Janakpuri</h2>
        <p class="jkp-section-subtitle">Tailored relocation services designed for residential builder floors, commercial offices, and long-distance inter-state transfers.</p>

        <div class="jkp-grid-3">
            <div class="jkp-card">
                <h3 class="jkp-card-title">Builder Floor & Kothi Moves</h3>
                <p>Equipped with specialized manual and powered hoisting ropes to safely lift oversized sofas, double beds, and dining tables through exterior balconies when stairwells are too narrow.</p>
                <div class="jkp-badge-pill">Balcony Hoist</div>
                <div class="jkp-badge-pill">Kothi Shifting</div>
                <div class="jkp-badge-pill">Zero Scratches</div>
            </div>

            <div class="jkp-card">
                <h3 class="jkp-card-title">District Centre Corporate Moves</h3>
                <p>Complete corporate relocations across Janakpuri District Centre, Piccadily complex, and Jail Road commercial stretches with color-coded crates and weekend execution.</p>
                <div class="jkp-badge-pill">Server Racks</div>
                <div class="jkp-badge-pill">Zero Downtime</div>
                <div class="jkp-badge-pill">Weekend Shifting</div>
            </div>

            <div class="jkp-card">
                <h3 class="jkp-card-title">Inter-State Transit to East</h3>
                <p>Direct line container transit connecting Janakpuri via Outer Ring Road to NH-19 towards Jharkhand, Bihar, and West Bengal with real-time GPS tracking.</p>
                <div class="jkp-badge-pill">Ranchi HQ Line</div>
                <div class="jkp-badge-pill">Sealed Trucks</div>
                <div class="jkp-badge-pill">All-Risk Cover</div>
            </div>
        </div>

        <div class="jkp-highlight-box">
            <strong>Janakpuri Advisory:</strong> For residential blocks adjoining Jail Road and Outer Ring Road (Blocks A2, B2, and C4), local market parking and peak commercial traffic can restrict large vehicle entry during late afternoons. Our dispatch managers arrange morning loading slots (8:00 AM) to ensure hassle-free container staging.
        </div>
    </section>

    <!-- Section 3: Multi-Layer Packaging Engineering -->
    <section>
        <h2 class="jkp-section-title">4-Layer Protective Packaging System for Janakpuri Relocations</h2>
        <p class="jkp-section-subtitle">Engineering superior material defense to safeguard valuable household goods against road vibrations and rough handling.</p>

        <p>Relocating from multi-level builder floors or walk-up apartments places considerable stress on furniture joints and polished finishes. To counteract friction, moisture, and impact shocks, Shree Ashirwad Packers and Movers implements a standardized 4-layer packaging sequence on all household moves originating in Janakpuri.</p>

        <div class="jkp-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Multi-tier bubble wrapping and heavy-duty carton packing in Janakpuri">
            <div class="jkp-image-caption">High-density bubble wrap and export-grade corrugated boxes protect delicate belongings during transit.</div>
        </div>

        <div class="jkp-grid-2">
            <div class="jkp-card">
                <h3 class="jkp-card-title">1. Virgin Bubble Wrap & Foam Lining</h3>
                <p>Thick 100 GSM bubble film encapsulates electronics, glass tabletops, wall art, and polished wood to provide resilient cushion absorption against surface impact.</p>
            </div>
            <div class="jkp-card">
                <h3 class="jkp-card-title">2. Heavy-Duty Corrugated Corner Shields</h3>
                <p>Rigid 5-ply corner edge protectors shield sharp edges of wardrobes, beds, and dressing consoles, preventing dings during staircase turns and hoisting.</p>
            </div>
            <div class="jkp-card">
                <h3 class="jkp-card-title">3. Moisture & Rain LDPE Shrink Wrap</h3>
                <p>Industrial waterproof film is wrapped tightly across mattresses, upholstered sofas, and electronics, creating an airtight shield against dust and rain.</p>
            </div>
            <div class="jkp-card">
                <h3 class="jkp-card-title">4. Heavy Strapping & Digital Inventory</h3>
                <p>Tear-resistant nylon strapping secures cartons. Every package is labeled with room designations and indexed on a digital inventory slip signed by the client.</p>
            </div>
        </div>
    </section>

    <!-- Section 4: Transparent Pricing Table -->
    <section>
        <h2 class="jkp-section-title">Transparent Relocation Tariff for Janakpuri</h2>
        <p class="jkp-section-subtitle">Standardized, upfront price rates with zero hidden charges, stairs markups, or fuel surprises.</p>

        <p>We believe in absolute financial transparency. Below is an indicative schedule of charges for local shifts within Janakpuri blocks and inter-state journeys originating from Janakpuri to Eastern India.</p>

        <div class="jkp-table-wrap">
            <table class="jkp-table">
                <thead>
                    <tr>
                        <th>Apartment / Move Type</th>
                        <th>Packing Standard</th>
                        <th>Local Shifting (Janakpuri Blocks)</th>
                        <th>Inter-State (Janakpuri to Ranchi / Patna)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment / Floor</strong></td>
                        <td>3-Ply Carton + Bubble Wrap</td>
                        <td>₹3,500 - ₹6,500</td>
                        <td>₹14,000 - ₹21,500</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Builder Floor</strong></td>
                        <td>4-Layer Comprehensive Pack</td>
                        <td>₹6,500 - ₹11,500</td>
                        <td>₹21,500 - ₹33,000</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Floor / Independent House</strong></td>
                        <td>5-Ply Heavy Sheet + Bubble</td>
                        <td>₹9,500 - ₹16,500</td>
                        <td>₹31,000 - ₹45,000</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Luxury Kothi</strong></td>
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

        <p>Planning an inter-state relocation from Janakpuri? Calculate exact moving costs in real-time using our interactive <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">Live Relocation Tariff Calculator</a>.</p>
    </section>

    <!-- Section 5: Furniture Dismantling & Technical Handling -->
    <section>
        <h2 class="jkp-section-title">Carpentry & Appliance Handling for Janakpuri Residences</h2>
        <p class="jkp-section-subtitle">Skilled technicians ensure flawless dismantling, safe transit, and accurate reassembly of modular interiors.</p>

        <div class="jkp-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture dismantling and bed reassembly in Janakpuri Delhi">
            <div class="jkp-image-caption">Skilled carpenters dismantling and cataloging hardware components before protective wrapping.</div>
        </div>

        <p>Modern homes and kothis across Janakpuri feature custom interior woodwork: large multi-door sliding wardrobes, king-sized hydraulic storage beds, wall-mounted TV display units, and modular home office desks. Moving these intricate units intact through narrow staircases inevitably causes irreversible joint and laminate damage.</p>

        <p>Our relocation crews include certified on-site carpenters equipped with specialized power tools. They methodically unbolt structural frames, label all hardware into sealed pouches, and wrap each component individually. Upon arrival at your new residence, our carpenters reassemble every piece of furniture, aligning drawers and hinges to perfection.</p>

        <div class="jkp-grid-2">
            <div class="jkp-card">
                <h3 class="jkp-card-title">Air Conditioner & RO Purifier Handling</h3>
                <p>Safe electrical dismounting of split and window ACs with copper pipe protection, alongside careful uninstallation of water purifiers and geysers.</p>
            </div>
            <div class="jkp-card">
                <h3 class="jkp-card-title">Glass Dining Tables & Crockery Units</h3>
                <p>Cushioned with high-density foam sheets and enclosed in heavy-duty customized wooden crates to prevent stress cracks during transit.</p>
            </div>
        </div>
    </section>

    <!-- Section 6: Door-to-Door Process & Fleet Management -->
    <section>
        <h2 class="jkp-section-title">Systematic Door-to-Door Relocation Protocol</h2>
        <p class="jkp-section-subtitle">From initial survey to final placement, our four-stage moving cycle delivers unmatched peace of mind.</p>

        <div class="jkp-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Janakpuri Delhi">
            <div class="jkp-image-caption">Punctual, GPS-monitored enclosed delivery vehicles stationed across Janakpuri blocks.</div>
        </div>

        <div class="jkp-grid-4">
            <div class="jkp-card">
                <h3 class="jkp-card-title">Step 1: Survey</h3>
                <p>Thorough assessment of inventory volume, pocket gate clearance, stairwell dimensions, and parking permissions.</p>
            </div>
            <div class="jkp-card">
                <h3 class="jkp-card-title">Step 2: Packing</h3>
                <p>Multi-layer protective wrapping, delicate item crating, and systematic room-by-room box labeling.</p>
            </div>
            <div class="jkp-card">
                <h3 class="jkp-card-title">Step 3: Transit</h3>
                <p>Transport in weather-proof container vehicles outfitted with real-time GPS tracking and transit safety locks.</p>
            </div>
            <div class="jkp-card">
                <h3 class="jkp-card-title">Step 4: Placement</h3>
                <p>Safe unloading, hoisting if required, furniture reassembly, room arrangement, and complete cleanup of packing debris.</p>
            </div>
        </div>

        <p>Our dedicated transport fleet in Janakpuri includes maneuverable 14-foot closed container trucks tailored to navigate the residential block gates of Blocks A, B, C, and D, ensuring that loading and unloading take place directly at your doorstep without causing street congestion.</p>
    </section>

    <!-- Section 7: Key Localities Covered in Janakpuri Sub-City -->
    <section>
        <h2 class="jkp-section-title">Comprehensive Coverage Across All Janakpuri Blocks</h2>
        <p class="jkp-section-subtitle">Prompt local response and dedicated packing units stationed across key blocks of West Delhi.</p>

        <div class="jkp-info-banner">
            <p>Our moving crews operate daily across every block and adjacent neighborhood of Janakpuri:</p>
            <ul style="columns: 2; -webkit-columns: 2; margin-top: 10px; line-height: 1.8;">
                <li><strong>Block A (A1, A2, A3):</strong> Major builder floors, prominent schools, and Outer Ring Road frontage.</li>
                <li><strong>Block B (B1, B2, B3):</strong> Established kothis, quiet residential avenues, and B-Block main market.</li>
                <li><strong>Block C (C1, C2, C3, C4):</strong> High-density residential hub, Chhoti Sabzi Mandi, and metro proximity.</li>
                <li><strong>Block D & District Centre:</strong> Commercial corporate towers, Piccadily complex, and Posangipur link.</li>
                <li><strong>Jail Road Retail Belt:</strong> Furniture and commercial showroom relocations.</li>
                <li><strong>Janakpuri West Interchange:</strong> Connectivity towards Dwarka, Airport line, and Uttam Nagar.</li>
            </ul>
        </div>
    </section>

    <!-- Section 8: Frequently Asked Questions -->
    <section>
        <h2 class="jkp-section-title">Frequently Asked Questions: Janakpuri Moving</h2>
        <p class="jkp-section-subtitle">Real questions answered by our Janakpuri relocation operations desk.</p>

        <div class="jkp-faq-item">
            <div class="jkp-faq-question">How do you navigate narrow residential lanes and parking in Janakpuri blocks?</div>
            <div class="jkp-faq-answer">
                Janakpuri's Blocks A, B, and C have dense residential rows with frequent vehicle parking on both sides of internal roads. We deploy compact 14-foot closed container trucks that maneuver easily through internal colony gates, parking directly outside your house gate for rapid, obstacle-free loading.
            </div>
        </div>

        <div class="jkp-faq-item">
            <div class="jkp-faq-question">What are the moving charges for local household shifting in Janakpuri?</div>
            <div class="jkp-faq-answer">
                Local shifting within Janakpuri ranges from ₹3,500 to ₹7,000 for a 1 BHK, ₹6,500 to ₹12,000 for a 2 BHK apartment or builder floor, and ₹10,000 to ₹17,500 for a 3 BHK/4 BHK independent kothi, including four-layer packing, loading, transport, and unloading.
            </div>
        </div>

        <div class="jkp-faq-item">
            <div class="jkp-faq-question">Can you shift commercial offices located in Janakpuri District Centre?</div>
            <div class="jkp-faq-answer">
                Yes. We handle corporate office moves across Janakpuri District Centre, Westend Mall, and Jail Road commercial complexes. We provide weekend and overnight shifting to ensure zero business disruption, using color-coded IT equipment bins and anti-static bubble wrapping for server racks.
            </div>
        </div>

        <div class="jkp-faq-item">
            <div class="jkp-faq-question">Do you offer inter-state relocation from Janakpuri to Ranchi, Patna, or Jamshedpur?</div>
            <div class="jkp-faq-answer">
                Yes, our direct-route container fleet links Janakpuri to Jharkhand, Bihar, and West Bengal via the Outer Ring Road and NH-19 corridor. Moves include comprehensive transit insurance, real-time GPS tracking, and dedicated container security seals.
            </div>
        </div>

        <div class="jkp-faq-item">
            <div class="jkp-faq-question">Do you provide balcony hoisting for large sofas in Janakpuri builder floors?</div>
            <div class="jkp-faq-answer">
                Yes. For second, third, and fourth-floor builder floors with tight stairways, our crew utilizes certified nylon lifting slings and pulley systems to safely hoist large 3-seater sofas, king-size mattresses, and heavy wooden furniture over balconies with zero scratch risk.
            </div>
        </div>

        <div class="jkp-faq-item">
            <div class="jkp-faq-question">How far in advance should I schedule my Janakpuri relocation?</div>
            <div class="jkp-faq-answer">
                We recommend reserving your move 3 to 4 days ahead, particularly for weekend dates and month-ends when residential shifting volume across Janakpuri and West Delhi is peak.
            </div>
        </div>

        <div class="jkp-faq-item">
            <div class="jkp-faq-question">Is transit insurance included for long-distance shifting from Janakpuri?</div>
            <div class="jkp-faq-answer">
                Yes, all inter-state moves are covered under our all-risk transit insurance policy. Our relocation supervisor provides an itemized valuation manifest before departure.
            </div>
        </div>

        <div class="jkp-faq-item">
            <div class="jkp-faq-question">Do you provide free pre-move surveys in Janakpuri?</div>
            <div class="jkp-faq-answer">
                Yes, our local operations supervisor provides free on-site physical surveys across all blocks of Janakpuri, or quick video surveys via WhatsApp to issue transparent, fixed quotes.
            </div>
        </div>
    </section>

    <!-- Section 9: Strategic Connected Internal Cluster Links -->
    <section>
        <h2 class="jkp-section-title">Explore Connected Relocation Hubs Across Delhi NCR</h2>
        <p class="jkp-section-subtitle">Seamless connectivity between Janakpuri and prominent regional commercial and residential hubs.</p>

        <div class="jkp-cluster-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-delhi" class="jkp-cluster-card">
                <strong>Delhi City Authority Hub</strong>
                <span>NCT Central Headquarters & Relocation Desk</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dwarka-delhi" class="jkp-cluster-card">
                <strong>Dwarka Sub-City Hub</strong>
                <span>South West Delhi Planned Mega Residential Cluster</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-rohini-delhi" class="jkp-cluster-card">
                <strong>Rohini Sub-City Hub</strong>
                <span>North-West Delhi Planned Sectors 1 to 35</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-pitampura-delhi" class="jkp-cluster-card">
                <strong>Pitampura Delhi Hub</strong>
                <span>North Delhi Prime Residential & Retail Zone</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-uttam-nagar-delhi" class="jkp-cluster-card">
                <strong>Uttam Nagar Delhi Hub</strong>
                <span>Adjacent West Delhi High-Density Colony</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-paschim-vihar-delhi" class="jkp-cluster-card">
                <strong>Paschim Vihar Delhi Hub</strong>
                <span>Established Outer Ring Road Housing Hub</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-karol-bagh-delhi" class="jkp-cluster-card">
                <strong>Karol Bagh Delhi Hub</strong>
                <span>Central Delhi Trading & Commercial Corridor</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gurgaon" class="jkp-cluster-card">
                <strong>Gurgaon City Hub</strong>
                <span>Cyber City & Corporate Headquarters Relocation</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida" class="jkp-cluster-card">
                <strong>Noida City Hub</strong>
                <span>Prime Tech & Corporate Metro Access</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi" class="jkp-cluster-card">
                <strong>Ranchi Headquarters</strong>
                <span>Company Main Authority & Eastern Logistics Hub</span>
            </a>
        </div>
    </section>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
