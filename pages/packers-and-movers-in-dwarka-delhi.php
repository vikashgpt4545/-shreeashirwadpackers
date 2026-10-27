<?php
/**
 * Page: Packers and Movers in Dwarka, Delhi
 * Description: Premium residential relocation, CGHS high-rise apartment moving, DDA sector shifting, and inter-state logistics across Dwarka Sub-City, South West Delhi.
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
    <title>Packers and Movers in Dwarka Delhi | CGHS Society Relocation</title>
    <meta name="description" content="Certified packers and movers in Dwarka Delhi. Specialized in CGHS apartments, DDA sectors 1 to 26, Dwarka Expressway villas, and inter-state relocations with zero transit damage.">
    <meta name="keywords" content="packers and movers in dwarka delhi, movers and packers dwarka, cghs society shifting dwarka, house shifting dwarka sector 6, packers movers sector 10 dwarka, dwarka expressway packers">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dwarka-delhi">
    <meta property="og:title" content="Packers and Movers in Dwarka Delhi | Shree Ashirwad Packers">
    <meta property="og:description" content="Professional household shifting, multi-tier packaging, and vehicle transit across Dwarka Sectors 1-26, Ramphal Chowk, and Dwarka Expressway.">
    <meta property="og:url" content="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dwarka-delhi">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <style>
        /* Scoped CSS for Dwarka Sub-City Local Hub - dwk prefix */
        .dwk-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px 40px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.6;
        }
        .dwk-hero-section {
            background: linear-gradient(135deg, #1e3a8a 0%, #0284c7 55%, #0d9488 100%);
            color: #ffffff;
            border-radius: 14px;
            padding: 40px 25px;
            margin-bottom: 30px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.12);
        }
        .dwk-hero-title {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.25;
            color: #ffffff;
        }
        .dwk-hero-subtitle {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: #f0fdfa;
            max-width: 900px;
        }
        .dwk-meta-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 25px;
        }
        .dwk-badge {
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #ffffff;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.88rem;
            font-weight: 600;
        }
        .dwk-hero-cta {
            display: inline-flex;
            gap: 15px;
            flex-wrap: wrap;
        }
        .dwk-btn-primary {
            background-color: #f59e0b;
            color: #111827;
            font-weight: 700;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.2s ease;
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.35);
        }
        .dwk-btn-primary:hover {
            background-color: #d97706;
            color: #ffffff;
            transform: translateY(-2px);
        }
        .dwk-btn-secondary {
            background-color: transparent;
            color: #ffffff;
            font-weight: 600;
            padding: 12px 22px;
            border-radius: 8px;
            text-decoration: none;
            border: 2px solid #ffffff;
            transition: all 0.2s ease;
        }
        .dwk-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }
        .dwk-section-title {
            font-size: 1.85rem;
            font-weight: 750;
            color: #1e293b;
            margin-top: 35px;
            margin-bottom: 15px;
            border-left: 5px solid #0284c7;
            padding-left: 12px;
        }
        .dwk-section-subtitle {
            font-size: 1rem;
            color: #64748b;
            margin-bottom: 20px;
        }
        .dwk-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
            margin: 25px 0;
        }
        .dwk-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        .dwk-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin: 25px 0;
        }
        @media (max-width: 900px) {
            .dwk-grid-2, .dwk-grid-3, .dwk-grid-4 {
                grid-template-columns: 1fr;
            }
        }
        .dwk-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .dwk-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }
        .dwk-card-title {
            font-size: 1.22rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .dwk-highlight-box {
            background-color: #f0fdfa;
            border-left: 4px solid #0d9488;
            padding: 18px 20px;
            border-radius: 6px;
            margin: 22px 0;
        }
        .dwk-info-banner {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 20px;
            margin: 25px 0;
        }
        .dwk-image-container {
            max-width: 580px;
            margin: 22px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 22px rgba(0, 0, 0, 0.1);
        }
        .dwk-image-container img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
        }
        .dwk-image-caption {
            font-size: 0.85rem;
            color: #64748b;
            text-align: center;
            padding: 8px 10px;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
        }
        .dwk-table-wrap {
            overflow-x: auto;
            margin: 25px 0;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
        }
        .dwk-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
            text-align: left;
        }
        .dwk-table th {
            background: #0f172a;
            color: #ffffff;
            padding: 12px 15px;
            font-weight: 600;
        }
        .dwk-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #e2e8f0;
            color: #334155;
        }
        .dwk-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .dwk-table tr:hover {
            background: #f1f5f9;
        }
        .dwk-faq-item {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            margin-bottom: 14px;
            background: #ffffff;
            overflow: hidden;
        }
        .dwk-faq-question {
            padding: 16px 20px;
            background: #f8fafc;
            font-weight: 700;
            color: #0f172a;
            cursor: pointer;
            border-bottom: 1px solid #e2e8f0;
        }
        .dwk-faq-answer {
            padding: 16px 20px;
            color: #334155;
            line-height: 1.65;
        }
        .dwk-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 15px;
            margin: 25px 0;
        }
        .dwk-cluster-card {
            background: #ffffff;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            padding: 14px 16px;
            text-decoration: none;
            color: #1e293b;
            display: block;
            transition: all 0.2s ease;
        }
        .dwk-cluster-card:hover {
            border-color: #0284c7;
            background: #f0f9ff;
            transform: translateY(-2px);
        }
        .dwk-cluster-card strong {
            display: block;
            color: #0284c7;
            margin-bottom: 4px;
            font-size: 1rem;
        }
        .dwk-cluster-card span {
            font-size: 0.85rem;
            color: #64748b;
        }
        .dwk-badge-pill {
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
        "name": "Shree Ashirwad Packers and Movers Dwarka Delhi",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "telephone": "+91 9835565233",
        "email": "support@shreeashirwadpackers.com",
        "url": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dwarka-delhi",
        "priceRange": "₹3,500 - ₹55,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Plot 14, Sector 10 Market Complex, Dwarka Sub-City",
            "addressLocality": "Dwarka, South West Delhi",
            "addressRegion": "Delhi",
            "postalCode": "110075",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 28.5921,
            "longitude": 77.0460
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
            "opens": "07:00",
            "closes": "22:00"
        },
        "areaServed": [
            "Dwarka Sector 1 to 26",
            "Ramphal Chowk Sector 7",
            "Dwarka Expressway NH-248BB",
            "Sector 21 Metro Hub",
            "Yashobhoomi Sector 25",
            "Palam Extension",
            "Kakrola",
            "South West Delhi"
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
                "name": "Dwarka Sub-City",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dwarka-delhi"
            }
        ]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Cooperative Group Housing Society (CGHS) Shifting & Inter-State Relocation",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "AdministrativeArea",
            "name": "Dwarka Sub-City, Delhi NCR"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Dwarka Relocation Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "CGHS Multi-Storey High-Rise Apartment Shifting"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "DDA Flat & Builder Floor Packing & Moving"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Dwarka Expressway Corporate Office & Villa Moving"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Car Carrier & Two-Wheeler Transit from Dwarka"
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
                "name": "How do you handle CGHS society security rules and elevator permissions in Dwarka?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our relocation crew arrives with pre-filled gate entry forms, supervisor identification, and vehicle registration numbers required by Dwarka Cooperative Group Housing Societies (CGHS). We coordinate with the society management office for service elevator bookings, provide protective elevator wall padding, and ensure movements conclude within permissible daytime hours."
                }
            },
            {
                "@type": "Question",
                "name": "What are the moving charges for local household shifting within Dwarka?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting within Dwarka Sectors 1 to 26 ranges from ₹3,500 to ₹7,500 for a 1 BHK, ₹6,500 to ₹12,000 for a 2 BHK apartment, and ₹10,000 to ₹18,000 for a 3 BHK/4 BHK CGHS flat, covering four-layer packaging, loading, transport, unloading, and basic unpacking."
                }
            },
            {
                "@type": "Question",
                "name": "Are there truck parking and entry restrictions in Dwarka sectors?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "While Dwarka has wide master plan avenues, residential sector internal roads and society gates often restrict large 32ft multi-axle containers. We deploy maneuverable 14-foot and 17-foot enclosed GPS-tracked trucks suited for DDA pockets and CGHS gates, complying with Delhi Traffic Police day-time commercial vehicle norms."
                }
            },
            {
                "@type": "Question",
                "name": "Can you relocate household goods from Dwarka to Eastern India like Ranchi or Patna?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Inter-state relocation from Dwarka to Ranchi, Patna, Kolkata, Jamshedpur, and Dhanbad is our flagship corridor. Goods are packed with heavy-duty export corrugated rolls, wrapped in moisture-resistant stretch film, and dispatched with sealed container door locks and real-time GPS tracking."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide modular furniture dismantling and reassembly in Dwarka?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Our team includes trained carpenters equipped with specialized power tools to dismantle modular king-size beds, hydraulic storage units, sliding multi-door wardrobes, and modular study tables, reassembling them securely at your destination flat."
                }
            },
            {
                "@type": "Question",
                "name": "How early should I book packers and movers in Dwarka?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We recommend reserving your shifting slot 3 to 5 days in advance, particularly for month-end dates and weekends when Dwarka society elevators and moving slots experience heavy resident booking."
                }
            },
            {
                "@type": "Question",
                "name": "Do you offer full transit insurance for relocations originating in Dwarka?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide 100% comprehensive transit insurance for inter-state moves and all-risk goods coverage. We generate a digitized itemized inventory valuation sheet before loading commences."
                }
            },
            {
                "@type": "Question",
                "name": "Can I obtain a quick pre-move survey for my Dwarka apartment?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer free on-site physical surveys across all Dwarka sectors from Sector 1 to Sector 26, as well as rapid video survey options via WhatsApp for instant quotation generation."
                }
            }
        ]
    }
    </script>
</head>
<body>

<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="dwk-wrap">
    <!-- Hero Section -->
    <section class="dwk-hero-section">
        <h1 class="dwk-hero-title">Packers and Movers in Dwarka Delhi</h1>
        <p class="dwk-hero-subtitle">Specialized CGHS apartment shifting, DDA sector flat relocations, Dwarka Expressway luxury home moving, and dependable inter-state transfers with multi-tier packaging protection.</p>
        
        <div class="dwk-meta-badges">
            <span class="dwk-badge">Sectors 1 to 26 Covered</span>
            <span class="dwk-badge">CGHS Society Protocols</span>
            <span class="dwk-badge">Zero Transit Damage</span>
            <span class="dwk-badge">GPS-Tracked Fleets</span>
            <span class="dwk-badge">Direct Highway Access</span>
        </div>

        <div class="dwk-hero-cta">
            <a href="tel:+919835565233" class="dwk-btn-primary">Call Relocation Desk: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="dwk-btn-secondary">Check Live Tariff Calculator</a>
        </div>
    </section>

    <!-- Section 1: Overview & Sub-City Infrastructure -->
    <section>
        <h2 class="dwk-section-title">Premier Relocation Expertise in Asia's Largest Planned Sub-City</h2>
        <p class="dwk-section-subtitle">Navigating Dwarka's unique grid layout, cooperative society by-laws, and sector connectivity with dedicated moving logistics.</p>

        <p>Dwarka Sub-City in South West Delhi represents one of India's most methodically planned residential hubs, accommodating over one million residents across its distinct Sectors 1 through 26. From prestigious Cooperative Group Housing Societies (CGHS) along Sector 6, Sector 10, and Sector 12 to expansive DDA SFS duplexes in Sector 11 and high-rise developments neighboring the Dwarka Expressway (NH-248BB), shifting homes in this micro-market requires an intimate understanding of sector access routes, security protocols, and high-rise lift operations.</p>

        <p>Shree Ashirwad Packers and Movers brings over 16 years of hands-on logistics mastery to Dwarka. Our specialized moving crews understand that shifting here is entirely unlike navigating traditional inner-city Delhi colonies. With broad avenues, multi-gate security check-posts, and strict Resident Welfare Association (RWA) moving windows, our operations are engineered to deliver prompt, frictionless, and completely stress-free transitions.</p>

        <div class="dwk-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loaded into container truck in Dwarka Delhi">
            <div class="dwk-image-caption">Systematic truck loading operations supervised by certified relocation executives in Dwarka.</div>
        </div>

        <p>Whether you are shifting locally between Sector 7 Ramphal Chowk and Sector 22, taking possession of an apartment along the modern Dwarka Expressway corridor near Yashobhoomi (Sector 25), or transferring out of the National Capital Territory to eastern industrial centers like Ranchi, Patna, or Kolkata, our specialized fleet and trained personnel ensure absolute security for your prized home possessions.</p>
    </section>

    <!-- Section 2: Comprehensive Local Relocation Services -->
    <section>
        <h2 class="dwk-section-title">Specialized Relocation Solutions Across Dwarka Sectors</h2>
        <p class="dwk-section-subtitle">Tailored relocation workflows designed specifically for residential, commercial, and vehicle shifting requirements.</p>

        <div class="dwk-grid-3">
            <div class="dwk-card">
                <h3 class="dwk-card-title">CGHS Apartment Shifting</h3>
                <p>Complete packing and transit tailored for Dwarka's multi-storey cooperative society complexes. We manage society gate approvals, elevator padding, and swift transfer without disturbing neighboring residents.</p>
                <div class="dwk-badge-pill">SFS Flats</div>
                <div class="dwk-badge-pill">Elevator Padding</div>
                <div class="dwk-badge-pill">Gate Clearance</div>
            </div>

            <div class="dwk-card">
                <h3 class="dwk-card-title">Corporate Office Shifting</h3>
                <p>Smooth transitions for corporate branches, consultancy firms, and tech setups across Sector 12 City Centre, Dwarka Sector 21 transport hub, and commercial complexes near Yashobhoomi.</p>
                <div class="dwk-badge-pill">Server Racks</div>
                <div class="dwk-badge-pill">Zero Downtime</div>
                <div class="dwk-badge-pill">Color-Coded Crates</div>
            </div>

            <div class="dwk-card">
                <h3 class="dwk-card-title">Inter-State Long-Distance</h3>
                <p>Dedicated direct-route container logistics from Dwarka to Jharkhand, Bihar, West Bengal, and Odisha. Complete insurance coverage, digitized inventory tracking, and door delivery.</p>
                <div class="dwk-badge-pill">Ranchi HQ Line</div>
                <div class="dwk-badge-pill">Sealed Containers</div>
                <div class="dwk-badge-pill">GPS Monitoring</div>
            </div>
        </div>

        <div class="dwk-highlight-box">
            <strong>Dwarka Special Note:</strong> For CGHS societies in Sector 4, Sector 6, Sector 9, and Sector 10, society offices generally permit loading and elevator access between 9:00 AM and 1:00 PM, and 3:00 PM to 7:00 PM. Our planning managers schedule loading teams in exact sync with your society’s approved time windows.
        </div>
    </section>

    <!-- Section 3: Multi-Layer Packaging Engineering -->
    <section>
        <h2 class="dwk-section-title">4-Layer Packaging Protocol for Ultimate Transit Safety</h2>
        <p class="dwk-section-subtitle">Engineered packaging materials that protect delicate electronics, glassware, and premium wooden furnishings against vibrations and weather.</p>

        <p>In high-rise apartment relocations, household goods face significant physical handling: from indoor packing, navigating narrow corridors, elevator rides, loading dock staging, to road transportation across national expressways. To ensure zero scratches, fractures, or impact abrasions, Shree Ashirwad Packers and Movers implements a rigorous 4-layer packaging standard on every job.</p>

        <div class="dwk-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Multi-tier bubble wrapping and heavy-duty carton packing in Dwarka">
            <div class="dwk-image-caption">High-density bubble wrap and export-grade corrugated boxes protect delicate belongings during transit.</div>
        </div>

        <div class="dwk-grid-2">
            <div class="dwk-card">
                <h3 class="dwk-card-title">1. Primary Foam & Bubble Shield</h3>
                <p>High-grade 100 GSM bubble film and virgin foam padding wrap all polished wooden surfaces, lacquered cabinets, glass vitrines, and large television screens. This layer cushions against physical shocks and abrasions.</p>
            </div>
            <div class="dwk-card">
                <h3 class="dwk-card-title">2. Edge Guards & Corrugated Armor</h3>
                <p>Corner protectors and heavy-ply 5-ply/7-ply corrugated sheets shield vulnerable table edges, sofa legs, and wardrobe corners from mechanical impact during staircase or lift maneuvering.</p>
            </div>
            <div class="dwk-card">
                <h3 class="dwk-card-title">3. Moisture & Dust Film Sealing</h3>
                <p>Multi-layered LDPE stretch wrap is applied across mattresses, upholstered sofas, and boxed electronics, forming an impenetrable barrier against monsoon humidity, highway rain, and atmospheric dust.</p>
            </div>
            <div class="dwk-card">
                <h3 class="dwk-card-title">4. Heavy Strapping & Labeling</h3>
                <p>High-tensile polypropylene strapping binds loaded cartons, preventing box flexure. Each carton is tagged with room-specific color labels and indexed in the digital consignment registry.</p>
            </div>
        </div>
    </section>

    <!-- Section 4: Transparent Pricing Table -->
    <section>
        <h2 class="dwk-section-title">Transparent Relocation Tariff for Dwarka Sub-City</h2>
        <p class="dwk-section-subtitle">Honest, crystal-clear pricing without hidden surcharge surprises, fuel markups, or last-minute stair charges.</p>

        <p>We pride ourselves on 100% transparent pricing. Below is an indicative schedule of rates for local movements within Dwarka sectors and long-distance inter-state relocations originating from Dwarka to our core eastern hubs.</p>

        <div class="dwk-table-wrap">
            <table class="dwk-table">
                <thead>
                    <tr>
                        <th>Apartment / Move Type</th>
                        <th>Packing & Materials</th>
                        <th>Local Shifting (Dwarka Sectors)</th>
                        <th>Inter-State (Delhi to Ranchi / Patna)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Flat / Studio</strong></td>
                        <td>Premium 3-Ply & Bubble Wrap</td>
                        <td>₹3,500 - ₹6,500</td>
                        <td>₹14,500 - ₹22,000</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK CGHS Apartment</strong></td>
                        <td>4-Layer Protective Pack</td>
                        <td>₹6,500 - ₹11,500</td>
                        <td>₹22,000 - ₹34,000</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK High-Rise Flat</strong></td>
                        <td>Heavy Duty 5-Ply + Wooden Crates</td>
                        <td>₹9,500 - ₹16,500</td>
                        <td>₹32,000 - ₹46,000</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Luxury Penthouse</strong></td>
                        <td>Full Customized Crating & Foam</td>
                        <td>₹14,000 - ₹24,000</td>
                        <td>₹44,000 - ₹65,000</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                        <td>Corrugated Bubble Wrap + Crate</td>
                        <td>₹1,800 - ₹3,000</td>
                        <td>₹4,500 - ₹7,500</td>
                    </tr>
                    <tr>
                        <td><strong>Four-Wheeler (Hatchback / SUV)</strong></td>
                        <td>Dedicated Covered Car Carrier</td>
                        <td>₹2,500 - ₹4,500</td>
                        <td>₹14,000 - ₹24,000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <p>Need an accurate quotation based on your exact volume of furniture, elevator access, and destination coordinates? Use our automated <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">Live Relocation Tariff Calculator</a> to compute instant estimates.</p>
    </section>

    <!-- Section 5: Furniture Dismantling & Technical Handling -->
    <section>
        <h2 class="dwk-section-title">Expert Modular Furniture Dismantling & Appliance Handling</h2>
        <p class="dwk-section-subtitle">Trained carpenters and electrical technicians ensure safe breakdown, transit, and accurate reassembly at your new residence.</p>

        <div class="dwk-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture dismantling and bed reassembly in Dwarka Delhi">
            <div class="dwk-image-caption">Skilled carpenters dismantling and cataloging hardware components before protective wrapping.</div>
        </div>

        <p>Modern homes across Dwarka feature complex modular woodwork: customized hydraulic king-size beds, multi-door sliding wardrobes, wall-mounted entertainment consoles, and delicate modular kitchen racks. Forcing these items through standard doorways or elevator cars without systematic dismantling leads to structural joint damage.</p>

        <p>Our relocation crews include skilled carpenters who methodically disassemble complex furniture units. Screws, bolts, fasteners, and hydraulic hinges are bagged, labeled, and fastened to their respective components. At your destination home, our technicians reassemble each unit with precision, aligning hinges, drawers, and brackets to their original operational state.</p>

        <div class="dwk-grid-2">
            <div class="dwk-card">
                <h3 class="dwk-card-title">Air Conditioner Uninstallation</h3>
                <p>Safe uncoupling of split and window AC units, refrigerant gas preservation, and secure packaging of copper piping and indoor blowers for transit.</p>
            </div>
            <div class="dwk-card">
                <h3 class="dwk-card-title">Large Screen TV & Electronics Packaging</h3>
                <p>LED/OLED television screens are encased in thermocol sheets, surrounded by dense bubble film, and secured inside wooden reinforced crates.</p>
            </div>
        </div>
    </section>

    <!-- Section 6: Door-to-Door Process & Fleet Management -->
    <section>
        <h2 class="dwk-section-title">Seamless Door-to-Door Moving Workflow in Dwarka</h2>
        <p class="dwk-section-subtitle">A step-by-step verified execution protocol guaranteeing punctual delivery and zero hassle.</p>

        <div class="dwk-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Dwarka Delhi">
            <div class="dwk-image-caption">Punctual, GPS-monitored enclosed delivery vehicles stationed across Dwarka sectors.</div>
        </div>

        <div class="dwk-grid-4">
            <div class="dwk-card">
                <h3 class="dwk-card-title">Step 1: Survey</h3>
                <p>Physical or video walkthrough to evaluate inventory volume, lift size, truck parking, and packing materials needed.</p>
            </div>
            <div class="dwk-card">
                <h3 class="dwk-card-title">Step 2: Packing</h3>
                <p>Careful 4-layer wrapping on moving day with color coding and systematic itemized inventory documentation.</p>
            </div>
            <div class="dwk-card">
                <h3 class="dwk-card-title">Step 3: Transit</h3>
                <p>Transport in enclosed, water-tight container vehicles equipped with satellite GPS tracking and experienced drivers.</p>
            </div>
            <div class="dwk-card">
                <h3 class="dwk-card-title">Step 4: Setup</h3>
                <p>Unloading, elevator transport, positioning into designated rooms, reassembly of beds, and removal of waste packing debris.</p>
            </div>
        </div>

        <p>Our fleet operating across Dwarka includes purpose-built 14-foot, 17-foot, and 20-foot closed container trucks designed to negotiate the internal security arches and barrier gates common to CGHS complexes, avoiding road blockages and ensuring compliance with Delhi Traffic Police municipal directives.</p>
    </section>

    <!-- Section 7: Key Localities Covered in Dwarka Sub-City -->
    <section>
        <h2 class="dwk-section-title">Complete Coverage Across All Dwarka Sectors & Enclaves</h2>
        <p class="dwk-section-subtitle">Prompt local response and dedicated packing units stationed across key sectors of South West Delhi.</p>

        <div class="dwk-info-banner">
            <p>Our moving teams operate across every sector of Dwarka Sub-City and adjoining growth corridors:</p>
            <ul style="columns: 2; -webkit-columns: 2; margin-top: 10px; line-height: 1.8;">
                <li><strong>Dwarka Sector 1 to 5:</strong> Mahavir Enclave, Palam Extension, Madhu Vihar vicinity.</li>
                <li><strong>Dwarka Sector 6 to 10:</strong> Central CGHS hub, Sector 6 Market, Sector 10 DDA complexes, sports complex.</li>
                <li><strong>Dwarka Sector 11 to 14:</strong> Metro line stretch, Sector 12 City Centre, Sector 13 & 14 Netaji Subhash University corridor.</li>
                <li><strong>Dwarka Sector 18 to 22:</strong> High-end residential CGHS enclaves, Sector 21 inter-modal metro station, Pacific D21 Mall area.</li>
                <li><strong>Dwarka Sector 23 to 26:</strong> Pochanpur, Bharat Vandana Park, Yashobhoomi Convention Center, diplomatic enclave vicinity.</li>
                <li><strong>Dwarka Expressway Corridor (NH-248BB):</strong> New luxury high-rises, Sector 102-113 expressway boundary, and Bijwasan link.</li>
            </ul>
        </div>
    </section>

    <!-- Section 8: Frequently Asked Questions -->
    <section>
        <h2 class="dwk-section-title">Frequently Asked Questions: Dwarka Moving</h2>
        <p class="dwk-section-subtitle">Real questions answered by our Dwarka relocation operations desk.</p>

        <div class="dwk-faq-item">
            <div class="dwk-faq-question">How do you handle CGHS society security rules and elevator permissions in Dwarka?</div>
            <div class="dwk-faq-answer">
                Our relocation crew arrives with pre-filled gate entry forms, supervisor identification, and vehicle registration numbers required by Dwarka Cooperative Group Housing Societies (CGHS). We coordinate with the society management office for service elevator bookings, provide protective elevator wall padding, and ensure movements conclude within permissible daytime hours.
            </div>
        </div>

        <div class="dwk-faq-item">
            <div class="dwk-faq-question">What are the moving charges for local household shifting within Dwarka?</div>
            <div class="dwk-faq-answer">
                Local shifting within Dwarka Sectors 1 to 26 ranges from ₹3,500 to ₹7,500 for a 1 BHK, ₹6,500 to ₹12,000 for a 2 BHK apartment, and ₹10,000 to ₹18,000 for a 3 BHK/4 BHK CGHS flat, covering four-layer packaging, loading, transport, unloading, and basic unpacking.
            </div>
        </div>

        <div class="dwk-faq-item">
            <div class="dwk-faq-question">Are there truck parking and entry restrictions in Dwarka sectors?</div>
            <div class="dwk-faq-answer">
                While Dwarka has wide master plan avenues, residential sector internal roads and society gates often restrict large 32ft multi-axle containers. We deploy maneuverable 14-foot and 17-foot enclosed GPS-tracked trucks suited for DDA pockets and CGHS gates, complying with Delhi Traffic Police day-time commercial vehicle norms.
            </div>
        </div>

        <div class="dwk-faq-item">
            <div class="dwk-faq-question">Can you relocate household goods from Dwarka to Eastern India like Ranchi or Patna?</div>
            <div class="dwk-faq-answer">
                Yes. Inter-state relocation from Dwarka to Ranchi, Patna, Kolkata, Jamshedpur, and Dhanbad is our flagship corridor. Goods are packed with heavy-duty export corrugated rolls, wrapped in moisture-resistant stretch film, and dispatched with sealed container door locks and real-time GPS tracking.
            </div>
        </div>

        <div class="dwk-faq-item">
            <div class="dwk-faq-question">Do you provide modular furniture dismantling and reassembly in Dwarka?</div>
            <div class="dwk-faq-answer">
                Yes. Our team includes trained carpenters equipped with specialized power tools to dismantle modular king-size beds, hydraulic storage units, sliding multi-door wardrobes, and modular study tables, reassembling them securely at your destination flat.
            </div>
        </div>

        <div class="dwk-faq-item">
            <div class="dwk-faq-question">How early should I book packers and movers in Dwarka?</div>
            <div class="dwk-faq-answer">
                We recommend reserving your shifting slot 3 to 5 days in advance, particularly for month-end dates and weekends when Dwarka society elevators and moving slots experience heavy resident booking.
            </div>
        </div>

        <div class="dwk-faq-item">
            <div class="dwk-faq-question">Do you offer full transit insurance for relocations originating in Dwarka?</div>
            <div class="dwk-faq-answer">
                Yes, we provide 100% comprehensive transit insurance for inter-state moves and all-risk goods coverage. We generate a digitized itemized inventory valuation sheet before loading commences.
            </div>
        </div>

        <div class="dwk-faq-item">
            <div class="dwk-faq-question">Can I obtain a quick pre-move survey for my Dwarka apartment?</div>
            <div class="dwk-faq-answer">
                Yes. We offer free on-site physical surveys across all Dwarka sectors from Sector 1 to Sector 26, as well as rapid video survey options via WhatsApp for instant quotation generation.
            </div>
        </div>
    </section>

    <!-- Section 9: Strategic Connected Internal Cluster Links -->
    <section>
        <h2 class="dwk-section-title">Explore Connected Relocation Hubs Across Delhi NCR</h2>
        <p class="dwk-section-subtitle">Seamless connectivity between Dwarka and prominent regional commercial and residential hubs.</p>

        <div class="dwk-cluster-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-delhi" class="dwk-cluster-card">
                <strong>Delhi City Authority Hub</strong>
                <span>NCT Central Headquarters & Relocation Desk</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-rohini-delhi" class="dwk-cluster-card">
                <strong>Rohini Delhi Hub</strong>
                <span>North-West Delhi Planned Sectors 1 to 35</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-janakpuri-delhi" class="dwk-cluster-card">
                <strong>Janakpuri Delhi Hub</strong>
                <span>West Delhi Prime Commercial & Residential Belt</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-pitampura-delhi" class="dwk-cluster-card">
                <strong>Pitampura Delhi Hub</strong>
                <span>North Delhi Residential & Commercial Center</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-uttam-nagar-delhi" class="dwk-cluster-card">
                <strong>Uttam Nagar Delhi Hub</strong>
                <span>Adjacent West Delhi High-Density Colony</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-paschim-vihar-delhi" class="dwk-cluster-card">
                <strong>Paschim Vihar Delhi Hub</strong>
                <span>Established Outer Ring Road Housing Hub</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-vasant-kunj-delhi" class="dwk-cluster-card">
                <strong>Vasant Kunj Delhi Hub</strong>
                <span>South Delhi Diplomatic & Institutional Enclave</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gurgaon" class="dwk-cluster-card">
                <strong>Gurgaon City Hub</strong>
                <span>Dwarka Expressway Cyber City Connection</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida" class="dwk-cluster-card">
                <strong>Noida City Hub</strong>
                <span>Direct Access via Blue Line & Expressways</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/" class="dwk-cluster-card">
                <strong>Ranchi Headquarters</strong>
                <span>Company Main Authority & Eastern Logistics Hub</span>
            </a>
        </div>
    </section>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
