<?php
/**
 * Page: Packers and Movers in Rohini, Delhi
 * Description: Dedicated residential relocation, DDA pocket shifting, builder floor lifting, and inter-state logistics across Rohini Sectors 1 to 35, North West Delhi.
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
    <title>Packers and Movers in Rohini Delhi | DDA Pocket & Builder Floor Relocation</title>
    <meta name="description" content="Certified packers and movers in Rohini Delhi. Expert home shifting across Sectors 1 to 35, DDA pockets, builder floors, and inter-state relocation to Eastern India with zero transit damage.">
    <meta name="keywords" content="packers and movers in rohini delhi, movers and packers rohini sector 7, dda pocket shifting rohini, house shifting rohini sector 13, packers movers rithala, builder floor shifting rohini">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-rohini-delhi">
    <meta property="og:title" content="Packers and Movers in Rohini Delhi | Shree Ashirwad Packers">
    <meta property="og:description" content="Dependable household shifting, multi-tier packaging, and vehicle transit across Rohini Sectors 1-35, Outer Ring Road, and North West Delhi.">
    <meta property="og:url" content="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-rohini-delhi">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <style>
        /* Scoped CSS for Rohini Sub-City Local Hub - rhn prefix */
        .rhn-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px 40px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.6;
        }
        .rhn-hero-section {
            background: linear-gradient(135deg, #1e3a8a 0%, #0369a1 55%, #15803d 100%);
            color: #ffffff;
            border-radius: 14px;
            padding: 40px 25px;
            margin-bottom: 30px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.12);
        }
        .rhn-hero-title {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.25;
            color: #ffffff;
        }
        .rhn-hero-subtitle {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: #f0fdf4;
            max-width: 900px;
        }
        .rhn-meta-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 25px;
        }
        .rhn-badge {
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #ffffff;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.88rem;
            font-weight: 600;
        }
        .rhn-hero-cta {
            display: inline-flex;
            gap: 15px;
            flex-wrap: wrap;
        }
        .rhn-btn-primary {
            background-color: #f59e0b;
            color: #111827;
            font-weight: 700;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.2s ease;
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.35);
        }
        .rhn-btn-primary:hover {
            background-color: #d97706;
            color: #ffffff;
            transform: translateY(-2px);
        }
        .rhn-btn-secondary {
            background-color: transparent;
            color: #ffffff;
            font-weight: 600;
            padding: 12px 22px;
            border-radius: 8px;
            text-decoration: none;
            border: 2px solid #ffffff;
            transition: all 0.2s ease;
        }
        .rhn-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }
        .rhn-section-title {
            font-size: 1.85rem;
            font-weight: 750;
            color: #1e293b;
            margin-top: 35px;
            margin-bottom: 15px;
            border-left: 5px solid #0369a1;
            padding-left: 12px;
        }
        .rhn-section-subtitle {
            font-size: 1rem;
            color: #64748b;
            margin-bottom: 20px;
        }
        .rhn-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
            margin: 25px 0;
        }
        .rhn-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        .rhn-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin: 25px 0;
        }
        @media (max-width: 900px) {
            .rhn-grid-2, .rhn-grid-3, .rhn-grid-4 {
                grid-template-columns: 1fr;
            }
        }
        .rhn-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .rhn-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }
        .rhn-card-title {
            font-size: 1.22rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .rhn-highlight-box {
            background-color: #f0fdf4;
            border-left: 4px solid #16a34a;
            padding: 18px 20px;
            border-radius: 6px;
            margin: 22px 0;
        }
        .rhn-info-banner {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 20px;
            margin: 25px 0;
        }
        .rhn-image-container {
            max-width: 580px;
            margin: 22px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 22px rgba(0, 0, 0, 0.1);
        }
        .rhn-image-container img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
        }
        .rhn-image-caption {
            font-size: 0.85rem;
            color: #64748b;
            text-align: center;
            padding: 8px 10px;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
        }
        .rhn-table-wrap {
            overflow-x: auto;
            margin: 25px 0;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
        }
        .rhn-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
            text-align: left;
        }
        .rhn-table th {
            background: #0f172a;
            color: #ffffff;
            padding: 12px 15px;
            font-weight: 600;
        }
        .rhn-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #e2e8f0;
            color: #334155;
        }
        .rhn-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .rhn-table tr:hover {
            background: #f1f5f9;
        }
        .rhn-faq-item {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            margin-bottom: 14px;
            background: #ffffff;
            overflow: hidden;
        }
        .rhn-faq-question {
            padding: 16px 20px;
            background: #f8fafc;
            font-weight: 700;
            color: #0f172a;
            cursor: pointer;
            border-bottom: 1px solid #e2e8f0;
        }
        .rhn-faq-answer {
            padding: 16px 20px;
            color: #334155;
            line-height: 1.65;
        }
        .rhn-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 15px;
            margin: 25px 0;
        }
        .rhn-cluster-card {
            background: #ffffff;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            padding: 14px 16px;
            text-decoration: none;
            color: #1e293b;
            display: block;
            transition: all 0.2s ease;
        }
        .rhn-cluster-card:hover {
            border-color: #0369a1;
            background: #f0f9ff;
            transform: translateY(-2px);
        }
        .rhn-cluster-card strong {
            display: block;
            color: #0369a1;
            margin-bottom: 4px;
            font-size: 1rem;
        }
        .rhn-cluster-card span {
            font-size: 0.85rem;
            color: #64748b;
        }
        .rhn-badge-pill {
            display: inline-block;
            background: #e0f2fe;
            color: #0369a1;
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
        "name": "Shree Ashirwad Packers and Movers Rohini Delhi",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "telephone": "+91 9708323605",
        "email": "support@shreeashirwadpackers.com",
        "url": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-rohini-delhi",
        "priceRange": "₹3,500 - ₹52,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Pocket D-14, Sector 8 Main Road, Rohini Sub-City",
            "addressLocality": "Rohini, North West Delhi",
            "addressRegion": "Delhi",
            "postalCode": "110085",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 28.7041,
            "longitude": 77.1025
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
            "opens": "07:00",
            "closes": "22:00"
        },
        "areaServed": [
            "Rohini Sector 1 to 35",
            "DDA Pockets Sectors 7, 8, 9, 13, 14",
            "Rithala Metro Terminal",
            "Bhagwan Mahavir Marg",
            "Outer Ring Road Rohini",
            "Japanese Park Sector 10",
            "Deepali Enclave",
            "North West Delhi"
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
                "name": "Rohini Sub-City",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-rohini-delhi"
            }
        ]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "DDA Flat Shifting & Builder Floor Relocation in Rohini",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "AdministrativeArea",
            "name": "Rohini Sub-City, North West Delhi"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Rohini Relocation Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "DDA MIG/HIG Pocket Home Shifting"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Builder Floor Exterior Balcony Lifting"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Rohini Sector 1 to 35 Local Shifting"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Inter-State Vehicle & Household Transit from Rohini"
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
                "name": "How do you manage moving heavy furniture into upper builder floors without lifts in Rohini?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Many builder floors across Rohini Sectors 7, 8, 9, 13, and 15 have tight stairwells without elevators. Our certified crews use heavy-duty hoisting pulley systems and industrial nylon lifting belts to safely hoist large sofas, mattresses, and dining tables through front or rear balconies without damaging walls or railings."
                }
            },
            {
                "@type": "Question",
                "name": "What are the moving charges for local household shifting in Rohini?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting within Rohini Sectors 1 to 35 ranges from ₹3,500 to ₹7,000 for a 1 BHK, ₹6,000 to ₹11,500 for a 2 BHK flat, and ₹9,500 to ₹17,000 for a 3 BHK/4 BHK builder floor or DDA HIG apartment, including multi-tier packing, loading, transport, and unloading."
                }
            },
            {
                "@type": "Question",
                "name": "Do DDA pocket gate entry gates pose problems for container trucks in Rohini?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Many DDA residential pockets in Rohini feature height-barrier arches and restricted entrance gates. We utilize compact 14-foot enclosed container trucks engineered to clear these residential gates easily, ensuring trucks park directly below your block for rapid loading."
                }
            },
            {
                "@type": "Question",
                "name": "Can you relocate household goods from Rohini to Ranchi, Patna, or Kolkata?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Our inter-state transport corridor from Rohini to Eastern India operates daily via NH-19 and GT Road networks. Goods are packed in 4-layer waterproof materials and transported in sealed container trucks with active GPS tracking and transit insurance."
                }
            },
            {
                "@type": "Question",
                "name": "Do you offer modular wardrobe and bed dismantling in Rohini?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Our crew includes skilled carpenters equipped with cordless power drills and hardware organizers to disassemble king-size storage beds, sliding wardrobes, and modular study units, reassembling them securely in your new Rohini home."
                }
            },
            {
                "@type": "Question",
                "name": "How much advance notice is required to book a move in Rohini?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We advise booking 2 to 4 days ahead of your scheduled move, especially for weekend shifts and month-end dates when demand across Rohini sectors is particularly high."
                }
            },
            {
                "@type": "Question",
                "name": "Is transit insurance mandatory for inter-state moves from Rohini?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "While optional, comprehensive transit insurance is highly recommended for all long-distance moves originating from Rohini. We issue complete all-risk coverage policies backed by an itemized digital consignment sheet."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide complimentary pre-move surveys across Rohini sectors?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our field supervisors conduct free on-site physical surveys across all sectors from Sector 1 to Sector 35 in Rohini, as well as rapid video consultations for instant transparent quotations."
                }
            }
        ]
    }
    </script>
</head>
<body>

<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="rhn-wrap">
    <!-- Hero Section -->
    <section class="rhn-hero-section">
        <h1 class="rhn-hero-title">Packers and Movers in Rohini Delhi</h1>
        <p class="rhn-hero-subtitle">Dedicated DDA pocket flat shifting, builder floor balcony hoisting, and dependable inter-state household relocation across Rohini Sectors 1 to 35 with zero transit damage.</p>
        
        <div class="rhn-meta-badges">
            <span class="rhn-badge">Sectors 1 to 35 Covered</span>
            <span class="rhn-badge">DDA Pocket Experts</span>
            <span class="rhn-badge">Balcony Hoisting Rig</span>
            <span class="rhn-badge">Outer Ring Road Hub</span>
            <span class="rhn-badge">Zero Transit Damage</span>
        </div>

        <div class="rhn-hero-cta">
            <a href="tel:+919708323605" class="rhn-btn-primary">Call Relocation Desk: +91 9708323605</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="rhn-btn-secondary">Check Live Tariff Calculator</a>
        </div>
    </section>

    <!-- Section 1: Overview & North-West Delhi Infrastructure -->
    <section>
        <h2 class="rhn-section-title">North-West Delhi's Premier Relocation Specialists</h2>
        <p class="rhn-section-subtitle">Mastering Rohini's planned sector matrix, residential pocket gates, and builder floor logistics.</p>

        <p>Rohini stands as one of the National Capital Territory's largest and most vibrant planned urban clusters, sprawling across more than 35 meticulously demarcated sectors. From established residential neighborhoods in Sectors 7, 8, 9, 13, 14, and 15 lined with builder floors and multi-storey apartments, to rapidly developing residential pockets in Sectors 21 through 34, shifting household goods in Rohini presents distinct infrastructural challenges that require dedicated technical know-how.</p>

        <p>With narrow interior colony roads, height-restricted pocket entry gates, busy commercial intersections along Bhagwan Mahavir Marg, and multiple upper-floor residences lacking service elevators, traditional moving approaches often result in damaged furniture and frustrating delays. Shree Ashirwad Packers and Movers brings over 16 years of specialized field expertise, operating customized transport vehicles and trained personnel suited specifically to Rohini's layout.</p>

        <div class="rhn-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loaded into container truck in Rohini Delhi">
            <div class="rhn-image-caption">Systematic truck loading operations supervised by certified relocation executives in Rohini.</div>
        </div>

        <p>Whether you are shifting locally within Rohini—such as moving from a Sector 3 DDA pocket to a modern builder floor in Sector 13—or relocating inter-state to Eastern India (Ranchi, Jamshedpur, Patna, or Kolkata), our systematic moving protocol guarantees that every piece of furniture, glassware, and electronic equipment arrives in immaculate condition.</p>
    </section>

    <!-- Section 2: Comprehensive Local Relocation Services -->
    <section>
        <h2 class="rhn-section-title">Specialized Relocation Solutions Across Rohini Sectors</h2>
        <p class="rhn-section-subtitle">Tailored relocation services designed for builder floors, DDA flats, commercial offices, and long-distance moves.</p>

        <div class="rhn-grid-3">
            <div class="rhn-card">
                <h3 class="rhn-card-title">Builder Floor & Hoisting</h3>
                <p>Equipped with specialized manual and powered hoisting ropes to safely lift oversized sofas, double beds, and dining tables through exterior balconies when stairwells are too narrow.</p>
                <div class="rhn-badge-pill">Balcony Hoist</div>
                <div class="rhn-badge-pill">Narrow Stairwells</div>
                <div class="rhn-badge-pill">Zero Scratches</div>
            </div>

            <div class="rhn-card">
                <h3 class="rhn-card-title">DDA Pocket Flat Shifting</h3>
                <p>Navigating height-restricted residential arches and compact parking zones in DDA LIG, MIG, and HIG pockets across Sectors 1 to 18 using agile 14ft container vehicles.</p>
                <div class="rhn-badge-pill">Arch Clearance</div>
                <div class="rhn-badge-pill">Pocket Parking</div>
                <div class="rhn-badge-pill">RWA Compliant</div>
            </div>

            <div class="rhn-card">
                <h3 class="rhn-card-title">Inter-State Transit to East</h3>
                <p>Direct line container transit connecting Rohini via Outer Ring Road to NH-19 and GT Road towards Jharkhand, Bihar, and West Bengal with real-time tracking.</p>
                <div class="rhn-badge-pill">Ranchi HQ Line</div>
                <div class="rhn-badge-pill">Sealed Trucks</div>
                <div class="rhn-badge-pill">All-Risk Cover</div>
            </div>
        </div>

        <div class="rhn-highlight-box">
            <strong>Rohini Traffic Advisory:</strong> For sectors adjoining Bhagwan Mahavir Marg and Outer Ring Road (Sectors 3, 7, 8, and 9), local police guidelines restrict heavy container movement during peak morning and evening traffic hours. Our logistics desk schedules dispatch windows early in the morning (7:00 AM) or midday to ensure uninterrupted transit.
        </div>
    </section>

    <!-- Section 3: Multi-Layer Packaging Engineering -->
    <section>
        <h2 class="rhn-section-title">4-Layer Protective Packaging System for Rohini Relocations</h2>
        <p class="rhn-section-subtitle">Engineering superior material defense to safeguard valuable household goods against road vibrations and rough handling.</p>

        <p>Relocating from multi-level builder floors or walk-up DDA apartments places considerable stress on furniture joints and polished finishes. To counteract friction, moisture, and impact shocks, Shree Ashirwad Packers and Movers implements a standardized 4-layer packaging sequence on all household moves originating in Rohini.</p>

        <div class="rhn-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Multi-tier bubble wrapping and heavy-duty carton packing in Rohini">
            <div class="rhn-image-caption">High-density bubble wrap and export-grade corrugated boxes protect delicate belongings during transit.</div>
        </div>

        <div class="rhn-grid-2">
            <div class="rhn-card">
                <h3 class="rhn-card-title">1. Virgin Bubble Wrap & Foam Lining</h3>
                <p>Thick 100 GSM bubble film encapsulates electronics, glass tabletops, wall art, and polished wood to provide resilient cushion absorption against surface impact.</p>
            </div>
            <div class="rhn-card">
                <h3 class="rhn-card-title">2. Heavy-Duty Corrugated Corner Shields</h3>
                <p>Rigid 5-ply corner edge protectors shield sharp edges of wardrobes, beds, and dressing consoles, preventing dings during staircase turns and hoisting.</p>
            </div>
            <div class="rhn-card">
                <h3 class="rhn-card-title">3. Moisture & Rain LDPE Shrink Wrap</h3>
                <p>Industrial waterproof film is wrapped tightly across mattresses, upholstered sofas, and electronics, creating an airtight shield against dust and rain.</p>
            </div>
            <div class="rhn-card">
                <h3 class="rhn-card-title">4. Heavy Strapping & Digital Inventory</h3>
                <p>Tear-resistant nylon strapping secures cartons. Every package is labeled with room designations and indexed on a digital inventory slip signed by the client.</p>
            </div>
        </div>
    </section>

    <!-- Section 4: Transparent Pricing Table -->
    <section>
        <h2 class="rhn-section-title">Transparent Relocation Tariff for Rohini Sub-City</h2>
        <p class="rhn-section-subtitle">Standardized, upfront price rates with zero hidden charges, stairs markups, or fuel surprises.</p>

        <p>We believe in absolute financial transparency. Below is an indicative schedule of charges for local shifts within Rohini sectors and inter-state journeys originating from Rohini to Eastern India.</p>

        <div class="rhn-table-wrap">
            <table class="rhn-table">
                <thead>
                    <tr>
                        <th>Apartment / Move Type</th>
                        <th>Packing Standard</th>
                        <th>Local Shifting (Rohini Sectors)</th>
                        <th>Inter-State (Rohini to Ranchi / Patna)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Flat / Pocket DDA</strong></td>
                        <td>3-Ply Carton + Bubble Wrap</td>
                        <td>₹3,500 - ₹6,500</td>
                        <td>₹14,000 - ₹21,000</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK DDA / Builder Floor</strong></td>
                        <td>4-Layer Comprehensive Pack</td>
                        <td>₹6,000 - ₹11,000</td>
                        <td>₹21,000 - ₹32,000</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Upper Floor / Lift</strong></td>
                        <td>5-Ply Heavy Sheet + Bubble</td>
                        <td>₹9,000 - ₹15,500</td>
                        <td>₹30,000 - ₹44,000</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Independent House</strong></td>
                        <td>Complete Crating & Custom Wrap</td>
                        <td>₹13,500 - ₹22,000</td>
                        <td>₹42,000 - ₹62,000</td>
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
                        <td>₹13,500 - ₹23,000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <p>Planning an inter-state relocation from Rohini? Calculate exact moving costs in real-time using our interactive <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">Live Relocation Tariff Calculator</a>.</p>
    </section>

    <!-- Section 5: Furniture Dismantling & Technical Handling -->
    <section>
        <h2 class="rhn-section-title">Carpentry & Appliance Handling for Rohini Residences</h2>
        <p class="rhn-section-subtitle">Skilled technicians ensure flawless dismantling, safe transit, and accurate reassembly of modular interiors.</p>

        <div class="rhn-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture dismantling and bed reassembly in Rohini Delhi">
            <div class="rhn-image-caption">Skilled carpenters dismantling and cataloging hardware components before protective wrapping.</div>
        </div>

        <p>Builder floors and modern DDA apartments in Rohini frequently feature custom interior woodwork: large multi-door sliding wardrobes, king-sized hydraulic storage beds, wall-mounted TV display units, and modular home office desks. Moving these intricate units intact through narrow staircases inevitably causes irreversible joint and laminate damage.</p>

        <p>Our relocation crews include certified on-site carpenters equipped with specialized power tools. They methodically unbolt structural frames, label all hardware into sealed pouches, and wrap each component individually. Upon arrival at your new residence, our carpenters reassemble every piece of furniture, aligning drawers and hinges to perfection.</p>

        <div class="rhn-grid-2">
            <div class="rhn-card">
                <h3 class="rhn-card-title">Air Conditioner & RO Purifier Handling</h3>
                <p>Safe electrical dismounting of split and window ACs with copper pipe protection, alongside careful uninstallation of water purifiers and geysers.</p>
            </div>
            <div class="rhn-card">
                <h3 class="rhn-card-title">Glass Dining Tables & Crockery Units</h3>
                <p>Cushioned with high-density foam sheets and enclosed in heavy-duty customized wooden crates to prevent stress cracks during transit.</p>
            </div>
        </div>
    </section>

    <!-- Section 6: Door-to-Door Process & Fleet Management -->
    <section>
        <h2 class="rhn-section-title">Systematic Door-to-Door Relocation Protocol</h2>
        <p class="rhn-section-subtitle">From initial survey to final placement, our four-stage moving cycle delivers unmatched peace of mind.</p>

        <div class="rhn-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Rohini Delhi">
            <div class="rhn-image-caption">Punctual, GPS-monitored enclosed delivery vehicles stationed across Rohini sectors.</div>
        </div>

        <div class="rhn-grid-4">
            <div class="rhn-card">
                <h3 class="rhn-card-title">Step 1: Survey</h3>
                <p>Thorough assessment of inventory volume, pocket gate clearance, stairwell dimensions, and parking permissions.</p>
            </div>
            <div class="rhn-card">
                <h3 class="rhn-card-title">Step 2: Packing</h3>
                <p>Multi-layer protective wrapping, delicate item crating, and systematic room-by-room box labeling.</p>
            </div>
            <div class="rhn-card">
                <h3 class="rhn-card-title">Step 3: Transit</h3>
                <p>Transport in weather-proof container vehicles outfitted with real-time GPS tracking and transit safety locks.</p>
            </div>
            <div class="rhn-card">
                <h3 class="rhn-card-title">Step 4: Placement</h3>
                <p>Safe unloading, hoisting if required, furniture reassembly, room arrangement, and complete cleanup of packing debris.</p>
            </div>
        </div>

        <p>Our dedicated transport fleet in Rohini includes maneuverable 14-foot closed container trucks tailored to navigate the residential pocket gates of Sectors 3, 7, 8, 9, 11, and 16, ensuring that loading and unloading take place directly at your doorstep without causing street congestion.</p>
    </section>

    <!-- Section 7: Key Localities Covered in Rohini Sub-City -->
    <section>
        <h2 class="rhn-section-title">Comprehensive Coverage Across All Rohini Sectors</h2>
        <p class="rhn-section-subtitle">Prompt local response and dedicated packing units stationed across key sectors of North West Delhi.</p>

        <div class="rhn-info-banner">
            <p>Our moving crews operate daily across every sector and adjacent neighborhood of Rohini:</p>
            <ul style="columns: 2; -webkit-columns: 2; margin-top: 10px; line-height: 1.8;">
                <li><strong>Rohini Sector 1 to 5:</strong> Avantika, Mangolpuri border, Bhagwan Mahavir Marg stretch.</li>
                <li><strong>Rohini Sector 6 to 9:</strong> Prime DDA residential pockets, Sector 7/8 markets, Ayodhya Chowk.</li>
                <li><strong>Rohini Sector 10 to 14:</strong> Japanese Park, Metro Walk, Rohini Court, Sector 13/14 luxury apartments.</li>
                <li><strong>Rohini Sector 15 to 18:</strong> Established DDA HIG pockets, Badli link, Samaypur connectivity.</li>
                <li><strong>Rohini Sector 20 to 25:</strong> High-density new builder floors, Pooth Kalan, Rithala expansion zone.</li>
                <li><strong>Rohini Sector 26 to 35:</strong> New DDA housing schemes, UER-II connector, and Kanjhawala corridor.</li>
            </ul>
        </div>
    </section>

    <!-- Section 8: Frequently Asked Questions -->
    <section>
        <h2 class="rhn-section-title">Frequently Asked Questions: Rohini Moving</h2>
        <p class="rhn-section-subtitle">Real questions answered by our Rohini relocation operations desk.</p>

        <div class="rhn-faq-item">
            <div class="rhn-faq-question">How do you manage moving heavy furniture into upper builder floors without lifts in Rohini?</div>
            <div class="rhn-faq-answer">
                Many builder floors across Rohini Sectors 7, 8, 9, 13, and 15 have tight stairwells without elevators. Our certified crews use heavy-duty hoisting pulley systems and industrial nylon lifting belts to safely hoist large sofas, mattresses, and dining tables through front or rear balconies without damaging walls or railings.
            </div>
        </div>

        <div class="rhn-faq-item">
            <div class="rhn-faq-question">What are the moving charges for local household shifting in Rohini?</div>
            <div class="rhn-faq-answer">
                Local shifting within Rohini Sectors 1 to 35 ranges from ₹3,500 to ₹7,000 for a 1 BHK, ₹6,000 to ₹11,500 for a 2 BHK flat, and ₹9,500 to ₹17,000 for a 3 BHK/4 BHK builder floor or DDA HIG apartment, including multi-tier packing, loading, transport, and unloading.
            </div>
        </div>

        <div class="rhn-faq-item">
            <div class="rhn-faq-question">Do DDA pocket gate entry gates pose problems for container trucks in Rohini?</div>
            <div class="rhn-faq-answer">
                Many DDA residential pockets in Rohini feature height-barrier arches and restricted entrance gates. We utilize compact 14-foot enclosed container trucks engineered to clear these residential gates easily, ensuring trucks park directly below your block for rapid loading.
            </div>
        </div>

        <div class="rhn-faq-item">
            <div class="rhn-faq-question">Can you relocate household goods from Rohini to Ranchi, Patna, or Kolkata?</div>
            <div class="rhn-faq-answer">
                Yes. Our inter-state transport corridor from Rohini to Eastern India operates daily via NH-19 and GT Road networks. Goods are packed in 4-layer waterproof materials and transported in sealed container trucks with active GPS tracking and transit insurance.
            </div>
        </div>

        <div class="rhn-faq-item">
            <div class="rhn-faq-question">Do you offer modular wardrobe and bed dismantling in Rohini?</div>
            <div class="rhn-faq-answer">
                Yes. Our crew includes skilled carpenters equipped with cordless power drills and hardware organizers to disassemble king-size storage beds, sliding wardrobes, and modular study units, reassembling them securely in your new Rohini home.
            </div>
        </div>

        <div class="rhn-faq-item">
            <div class="rhn-faq-question">How much advance notice is required to book a move in Rohini?</div>
            <div class="rhn-faq-answer">
                We advise booking 2 to 4 days ahead of your scheduled move, especially for weekend shifts and month-end dates when demand across Rohini sectors is particularly high.
            </div>
        </div>

        <div class="rhn-faq-item">
            <div class="rhn-faq-question">Is transit insurance mandatory for inter-state moves from Rohini?</div>
            <div class="rhn-faq-answer">
                While optional, comprehensive transit insurance is highly recommended for all long-distance moves originating from Rohini. We issue complete all-risk coverage policies backed by an itemized digital consignment sheet.
            </div>
        </div>

        <div class="rhn-faq-item">
            <div class="rhn-faq-question">Do you provide complimentary pre-move surveys across Rohini sectors?</div>
            <div class="rhn-faq-answer">
                Yes, our field supervisors conduct free on-site physical surveys across all sectors from Sector 1 to Sector 35 in Rohini, as well as rapid video consultations for instant transparent quotations.
            </div>
        </div>
    </section>

    <!-- Section 9: Strategic Connected Internal Cluster Links -->
    <section>
        <h2 class="rhn-section-title">Explore Connected Relocation Hubs Across Delhi NCR</h2>
        <p class="rhn-section-subtitle">Seamless connectivity between Rohini and prominent regional commercial and residential hubs.</p>

        <div class="rhn-cluster-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-delhi" class="rhn-cluster-card">
                <strong>Delhi City Authority Hub</strong>
                <span>NCT Central Headquarters & Relocation Desk</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dwarka-delhi" class="rhn-cluster-card">
                <strong>Dwarka Sub-City Hub</strong>
                <span>South West Delhi Planned Mega Residential Cluster</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-pitampura-delhi" class="rhn-cluster-card">
                <strong>Pitampura Delhi Hub</strong>
                <span>Adjacent North Delhi Commercial & Residential Belt</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-janakpuri-delhi" class="rhn-cluster-card">
                <strong>Janakpuri Delhi Hub</strong>
                <span>West Delhi Prime Commercial & Housing Zone</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-paschim-vihar-delhi" class="rhn-cluster-card">
                <strong>Paschim Vihar Delhi Hub</strong>
                <span>Outer Ring Road Connected Housing Colony</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-karol-bagh-delhi" class="rhn-cluster-card">
                <strong>Karol Bagh Delhi Hub</strong>
                <span>Central Delhi Trading & Commercial Corridor</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gurgaon" class="rhn-cluster-card">
                <strong>Gurgaon City Hub</strong>
                <span>Cyber City & Corporate Headquarters Relocation</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida" class="rhn-cluster-card">
                <strong>Noida City Hub</strong>
                <span>Prime Tech & Corporate Metro Access</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi" class="rhn-cluster-card">
                <strong>Ranchi Headquarters</strong>
                <span>Company Main Authority & Eastern Logistics Hub</span>
            </a>
        </div>
    </section>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
