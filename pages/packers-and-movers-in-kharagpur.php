<?php
/**
 * Page: Packers and Movers in Kharagpur
 * Description: Dependable household shifting, IIT faculty relocation, railway transfer logistics, and vehicle moving in Kharagpur.
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
    <title>Packers and Movers in Kharagpur | Safe Moving Services</title>
    <meta name="description" content="Top packers and movers in Kharagpur. Verified household shifting, IIT Kharagpur faculty transfers, railway colony moving, and vehicle transport along NH 16 with zero damage.">
    <meta name="keywords" content="packers and movers in kharagpur, movers and packers kharagpur, house shifting iit kharagpur, relocation services kharagpur, transport company kharagpur">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kharagpur">
    <meta property="og:title" content="Packers and Movers in Kharagpur | Shree Ashirwad Packers">
    <meta property="og:description" content="Certified domestic shifting, academic campus moving, and car bike carriers across Kharagpur and Paschim Medinipur with transparent rates.">
    <meta property="og:url" content="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kharagpur">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <style>
        /* Scoped CSS for Kharagpur City Authority Hub - kgp prefix */
        .kgp-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px 40px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.6;
        }
        .kgp-hero-section {
            background: linear-gradient(135deg, #1e3a8a 0%, #0d9488 100%);
            color: #ffffff;
            border-radius: 14px;
            padding: 40px 25px;
            margin-bottom: 30px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .kgp-hero-title {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.25;
            color: #ffffff;
        }
        .kgp-hero-subtitle {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: #e0f2fe;
            max-width: 900px;
        }
        .kgp-meta-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }
        .kgp-badge-item {
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.35);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            color: #ffffff;
        }
        .kgp-main-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            margin-bottom: 35px;
        }
        @media (max-width: 900px) {
            .kgp-main-grid {
                grid-template-columns: 1fr;
            }
        }
        .kgp-content-col {
            min-width: 0;
        }
        .kgp-sidebar-col {
            min-width: 0;
        }
        .kgp-section {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 28px 24px;
            margin-bottom: 28px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .kgp-section-title {
            font-size: 1.65rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 18px;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
        }
        .kgp-lead-p {
            font-size: 1.05rem;
            color: #334155;
            margin-bottom: 16px;
        }
        .kgp-body-p {
            font-size: 0.98rem;
            color: #475569;
            margin-bottom: 16px;
        }
        .kgp-image-container {
            max-width: 580px;
            margin: 22px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border: 1px solid #cbd5e1;
            background: #f8fafc;
        }
        .kgp-image-container img {
            width: 100%;
            max-height: 380px;
            object-fit: cover;
            display: block;
        }
        .kgp-image-caption {
            padding: 10px 14px;
            font-size: 0.85rem;
            color: #475569;
            text-align: center;
            background: #f1f5f9;
            border-top: 1px solid #e2e8f0;
            font-weight: 500;
        }
        .kgp-highlight-box {
            background: #f0fdf4;
            border-left: 4px solid #16a34a;
            padding: 16px 20px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
        }
        .kgp-highlight-title {
            font-weight: 700;
            color: #166534;
            margin-bottom: 6px;
            font-size: 1.02rem;
        }
        .kgp-highlight-desc {
            font-size: 0.94rem;
            color: #14532d;
            margin: 0;
        }
        .kgp-card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 18px;
            margin: 22px 0;
        }
        .kgp-feature-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 18px;
            transition: all 0.2s ease;
        }
        .kgp-feature-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.06);
            border-color: #cbd5e1;
        }
        .kgp-card-head {
            font-weight: 700;
            font-size: 1.05rem;
            color: #0f766e;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .kgp-card-text {
            font-size: 0.92rem;
            color: #475569;
            margin: 0;
            line-height: 1.5;
        }
        .kgp-table-wrap {
            overflow-x: auto;
            margin: 22px 0;
        }
        .kgp-pricing-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.94rem;
        }
        .kgp-pricing-table th {
            background: #1e3a8a;
            color: #ffffff;
            text-align: left;
            padding: 12px 14px;
            font-weight: 600;
            border: 1px solid #1e3a8a;
        }
        .kgp-pricing-table td {
            padding: 11px 14px;
            border: 1px solid #e2e8f0;
            color: #334155;
        }
        .kgp-pricing-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .kgp-pricing-table tr:hover {
            background: #f1f5f9;
        }
        .kgp-steps-container {
            display: flex;
            flex-direction: column;
            gap: 14px;
            margin: 20px 0;
        }
        .kgp-step-item {
            display: flex;
            gap: 14px;
            align-items: flex-start;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 14px 16px;
        }
        .kgp-step-number {
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
        .kgp-step-body {
            flex: 1;
        }
        .kgp-step-heading {
            font-weight: 700;
            font-size: 0.98rem;
            color: #1e293b;
            margin-bottom: 4px;
        }
        .kgp-step-desc {
            font-size: 0.91rem;
            color: #475569;
            margin: 0;
        }
        .kgp-faq-accordion {
            margin: 20px 0;
        }
        .kgp-faq-item {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            margin-bottom: 12px;
            overflow: hidden;
        }
        .kgp-faq-question {
            background: #f8fafc;
            padding: 14px 18px;
            font-weight: 600;
            font-size: 1rem;
            color: #1e3a8a;
            cursor: pointer;
            border-bottom: 1px solid #e2e8f0;
        }
        .kgp-faq-answer {
            padding: 14px 18px;
            font-size: 0.93rem;
            color: #475569;
            background: #ffffff;
            line-height: 1.6;
        }
        .kgp-sidebar-box {
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            padding: 22px 18px;
            margin-bottom: 24px;
        }
        .kgp-sidebar-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 14px;
            border-bottom: 2px solid #0d9488;
            padding-bottom: 6px;
        }
        .kgp-cta-button {
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
        .kgp-cta-button:hover {
            background: #0f766e;
            color: #ffffff;
        }
        .kgp-cluster-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 22px;
            margin-top: 30px;
        }
        .kgp-cluster-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 14px;
        }
        .kgp-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 12px;
        }
        .kgp-cluster-link {
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
        .kgp-cluster-link:hover {
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
        "name": "Shree Ashirwad Packers and Movers Kharagpur",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "@id": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kharagpur#movingcompany",
        "url": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kharagpur",
        "telephone": "+919334460424",
        "priceRange": "₹3,200 - ₹58,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Prem Bazar More, IIT Main Gate Road",
            "addressLocality": "Kharagpur",
            "addressRegion": "West Bengal",
            "postalCode": "721301",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 22.3460,
            "longitude": 87.2320
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
                "name": "Kharagpur",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kharagpur"
            }
        ]
    }
    </script>

    <!-- Schema 3: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Academic Campus & Household Relocation",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers Kharagpur"
        },
        "areaServed": {
            "@type": "AdministrativeArea",
            "name": "Kharagpur, Paschim Medinipur District, West Bengal"
        },
        "description": "Comprehensive packing, home shifting, IIT Kharagpur faculty moves, railway officer transfers, and vehicle transport along NH 16 and NH 49."
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
                "name": "What are the average household shifting rates in Kharagpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting charges within Kharagpur (such as between Prem Bazar, Gol Bazar, Inda, and IIT campus quarters) typically range between ₹3,200 and ₹6,500 for a 1 BHK, ₹5,500 to ₹11,000 for a 2 BHK, and ₹8,500 to ₹17,500 for a 3 BHK residence, including packing materials, labor, and transport."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide relocation services inside the IIT Kharagpur campus?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we regularly execute moves for faculty, professors, and research staff residing in IIT Kharagpur campus quarters and surrounding residential areas like Hijli and Prem Bazar. We provide safe book carton packing, delicate research instrument packaging, and campus security gate clearance assistance."
                }
            },
            {
                "@type": "Question",
                "name": "Do you handle railway officer transfers from South Eastern Railway (SER) colonies?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Kharagpur houses one of India's largest railway settlements. We provide specialized packing and transfer services for railway officers, issuing standard IBA-approved consignment bills, itemized inventories, and transit insurance for reimbursement claims."
                }
            },
            {
                "@type": "Question",
                "name": "Can you shift vehicles from Kharagpur to southern states via NH 16?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Kharagpur is situated directly on the Golden Quadrilateral (NH 16) connecting to Bhubaneswar, Visakhapatnam, and Chennai. We operate enclosed vehicle carrier trucks equipped with wheel chocks and all-risk transit insurance."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="kgp-wrap">
    <!-- Hero Banner -->
    <section class="kgp-hero-section">
        <h1 class="kgp-hero-title">Packers and Movers in Kharagpur</h1>
        <p class="kgp-hero-subtitle">Premier packing and moving company in Kharagpur. Reliable household shifting, IIT Kharagpur faculty transfers, railway colony moving, and vehicle transport along the NH 16 Golden Quadrilateral corridor.</p>
        <div class="kgp-meta-badges">
            <span class="kgp-badge-item">✓ IIT Kharagpur Campus Specialist</span>
            <span class="kgp-badge-item">✓ Railway Workshop & Colony Moving</span>
            <span class="kgp-badge-item">✓ Golden Quadrilateral (NH 16) Direct Transit</span>
            <span class="kgp-badge-item">✓ Five-Layer Protective Packaging</span>
        </div>
    </section>

    <!-- Main Content Layout -->
    <div class="kgp-main-grid">
        <div class="kgp-content-col">
            <!-- Section 1: Overview & Strategic Hub Role -->
            <section class="kgp-section">
                <h2 class="kgp-section-title">Professional Packing and Moving Services in Kharagpur</h2>
                <p class="kgp-lead-p">Kharagpur stands as one of Eastern India's most prominent technological, industrial, and railway transportation junctions in the Paschim Medinipur district of West Bengal. Globally renowned as the birthplace of India's premier technical institute—Indian Institute of Technology (IIT Kharagpur)—and home to one of the world's longest railway platforms and largest railway workshops under the South Eastern Railway (SER), Kharagpur represents an energetic confluence of academia, heavy engineering, and multi-state transport corridors. Moving within or out of Kharagpur demands moving partners with verified industrial credentials, academic care, and highway excellence.</p>
                
                <p class="kgp-body-p">At Shree Ashirwad Packers and Movers, we have served the Kharagpur community for over sixteen years. Whether you are an IIT faculty member relocating from campus quarters in Hijli to an executive bungalow in Prem Bazar, a railway officer on transfer to a new divisional headquarters, or a commercial enterprise expanding near Vidyasagar Industrial Park, our trained moving crews deliver exceptional precision. Coordinated closely with our corporate headquarters via <a href="<?php echo SITE_BASE_URL; ?>/">Packers and Movers in Ranchi</a> and state capital logistics via <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata">Packers and Movers in Kolkata</a>, we provide unified door-to-door logistics across national highways.</p>

                <div class="kgp-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loading in container truck in Kharagpur">
                    <div class="kgp-image-caption">Careful loading of household consignments and furniture in Kharagpur.</div>
                </div>

                <div class="kgp-highlight-box">
                    <div class="kgp-highlight-title">Why Kharagpur Academic & Railway Families Choose Us</div>
                    <div class="kgp-highlight-desc">From complying with IIT campus entry protocols to managing large book collections, delicate research hardware, and heavy railway quarter furnishings, our moving crews adhere to strict zero-damage safety standards.</div>
                </div>

                <p class="kgp-body-p">Unlike unorganized local lorry operators who rely on untrained day-laborers, our team consists of permanently vetted packing craftsmen, licensed carpenters, and certified drivers. We understand that your household possessions—from personal research libraries to modern modular kitchens—carry immense personal value. Every item is treated with meticulous care and double-inspected before transit.</p>

                <p class="kgp-body-p">Kharagpur's position at the crossroads of National Highway 16 (Golden Quadrilateral connecting Kolkata to Chennai) and National Highway 49 (connecting toward Jamshedpur, Ranchi, and central India) provides unparalleled highway access. Our containerized trucks ensure smooth transit times with zero risk of mid-journey transshipment.</p>
            </section>

            <!-- Section 2: Specialized Relocation Offerings -->
            <section class="kgp-section">
                <h2 class="kgp-section-title">Comprehensive Relocation Solutions Across Kharagpur</h2>
                <p class="kgp-lead-p">Every relocation assignment in Kharagpur has unique operational requirements. We deliver customized shifting packages tailored to the distinct needs of academic scholars, railway personnel, industrial enterprises, and residential families.</p>

                <div class="kgp-card-grid">
                    <div class="kgp-feature-card">
                        <div class="kgp-card-head">🎓 IIT Campus & Academic Moving</div>
                        <p class="kgp-card-text">Specialized shifting for professors, research scholars, and students with custom book cartons, delicate instrument packaging, and campus gate clearance.</p>
                    </div>
                    <div class="kgp-feature-card">
                        <div class="kgp-card-head">🚆 Railway Colony & Officer Relocation</div>
                        <p class="kgp-card-text">Priority transfers for South Eastern Railway personnel from Hijli, Chhota Tengra, and Nimpura with official IBA-format documentation for expense claims.</p>
                    </div>
                    <div class="kgp-feature-card">
                        <div class="kgp-card-head">🏭 Industrial & Corporate Shifting</div>
                        <p class="kgp-card-text">Heavy machinery transport, warehouse shifting, and office workstation moving around Vidyasagar Industrial Park and Nimpura industrial zone.</p>
                    </div>
                    <div class="kgp-feature-card">
                        <div class="kgp-card-head">🚗 Vehicle Carrier (Car & Bike)</div>
                        <p class="kgp-card-text">Enclosed hydraulic vehicle carriers and secured motorcycle transit equipped with custom tire chocks, heavy lashings, and comprehensive transit insurance.</p>
                    </div>
                </div>

                <div class="kgp-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Bubble wrap and carton packaging materials in Kharagpur">
                    <div class="kgp-image-caption">Multi-layered protective packaging used for household and academic items in Kharagpur.</div>
                </div>

                <p class="kgp-body-p">Our local service vehicles operate seamlessly across all key sub-localities in Kharagpur including Prem Bazar, Gol Bazar, Inda, Malancha, Hijli, Chhota Tengra, Nimpura, Kaushalya, and Subhas Pally. For northern agricultural and industrial connections, we coordinate with <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bardhaman">Packers and Movers in Bardhaman</a> and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-durgapur">Packers and Movers in Durgapur</a>.</p>

                <p class="kgp-body-p">For clients transferring to maritime commercial centers or the state capital, our regular fleet provides reliable transit connecting directly to <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata">Packers and Movers in Kolkata</a> and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-howrah">Packers and Movers in Howrah</a>, as well as northern links through <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-siliguri">Packers and Movers in Siliguri</a>.</p>
            </section>

            <!-- Section 3: Material Quality & Step-by-Step Methodology -->
            <section class="kgp-section">
                <h2 class="kgp-section-title">Standardized Packing Process & Material Excellence</h2>
                <p class="kgp-lead-p">The secret to zero transit damage lies in standardized packing protocols and systematic execution. In Kharagpur, our crews arrive fully equipped with virgin packaging materials designed to withstand thermal variations and road vibrations.</p>

                <div class="kgp-steps-container">
                    <div class="kgp-step-item">
                        <div class="kgp-step-number">1</div>
                        <div class="kgp-step-body">
                            <div class="kgp-step-heading">Pre-Move Survey & Written Estimation</div>
                            <div class="kgp-step-desc">A qualified relocation surveyor evaluates your household items, checks building staircase or elevator clearance, and delivers a transparent written estimate with zero hidden levies.</div>
                        </div>
                    </div>
                    <div class="kgp-step-item">
                        <div class="kgp-step-number">2</div>
                        <div class="kgp-step-body">
                            <div class="kgp-step-heading">Multi-Layer Protective Packaging</div>
                            <div class="kgp-step-desc">Delicate glassware and kitchenware receive air-bubble cushioning, furniture is wrapped in corrugated sheets and stretch film, and mattresses are enclosed in dust-proof bags.</div>
                        </div>
                    </div>
                    <div class="kgp-step-item">
                        <div class="kgp-step-number">3</div>
                        <div class="kgp-step-body">
                            <div class="kgp-step-heading">Engineered Loading & Stacking</div>
                            <div class="kgp-step-desc">Heavy items form the stable base in weatherproof container trucks, followed by labeled medium cartons and secured fragile items fastened with heavy-duty cargo straps.</div>
                        </div>
                    </div>
                    <div class="kgp-step-item">
                        <div class="kgp-step-number">4</div>
                        <div class="kgp-step-body">
                            <div class="kgp-step-heading">Unloading, Assembly & Placement</div>
                            <div class="kgp-step-desc">Upon arrival at your new residence, our crew assists with room-specific unloading, unpacking, furniture reassembly, and debris clearance.</div>
                        </div>
                    </div>
                </div>

                <div class="kgp-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Bed furniture dismantling and reassembly in Kharagpur">
                    <div class="kgp-image-caption">Skilled carpenters dismantling and protective wrapping modular bed sets in Kharagpur.</div>
                </div>

                <p class="kgp-body-p">Whether you are shifting from an independent bungalow in Prem Bazar or a multi-storey apartment along Inda main road, our trained carpenters expertly dismantle king-size beds, modular wardrobes, and study units, securely bagging all fasteners and hardware so reassembly is quick and effortless.</p>

                <div class="kgp-highlight-box">
                    <div class="kgp-highlight-title">Zero-Scratch Guarantee for Modular Interiors</div>
                    <div class="kgp-highlight-desc">All wooden and glass modular furniture pieces are shielded with multi-ply corrugated sheets, thick foam corner buffers, and heavy-gauge polythene wrapping before stepping out of your apartment doors.</div>
                </div>

                <p class="kgp-body-p">We also supply heavy-duty hanging wardrobe carton boxes that allow your formal suits, designer dresses, and traditional ethnic wear to remain wrinkle-free on their original hangers throughout the moving journey.</p>
            </section>

            <!-- Section 4: Academic, Highway & Industrial Operations -->
            <section class="kgp-section">
                <h2 class="kgp-section-title">Specialized Academic & Highway Transit in Kharagpur</h2>
                <p class="kgp-lead-p">Operating in a city anchored by an elite educational campus and heavy highway traffic requires specialized logistical planning. Our team coordinates timing and equipment to guarantee smooth, unhindered moving.</p>

                <div class="kgp-card-grid">
                    <div class="kgp-feature-card">
                        <div class="kgp-card-head">🏛️ Campus Gate Protocol Compliance</div>
                        <p class="kgp-card-text">We submit crew identity proofs, vehicle details, and loading manifests in advance to IIT Kharagpur security gates for hassle-free campus entry.</p>
                    </div>
                    <div class="kgp-feature-card">
                        <div class="kgp-card-head">🛣️ NH 16 Direct Corridor Freight</div>
                        <p class="kgp-card-text">Direct access to the Golden Quadrilateral enables swift long-distance container truck dispatch toward Odisha, Andhra Pradesh, and Tamil Nadu.</p>
                    </div>
                    <div class="kgp-feature-card">
                        <div class="kgp-card-head">🏢 Railway Colony Transfer Papers</div>
                        <p class="kgp-card-text">We issue IBA-approved consignment bills, transit insurance documents, and certified packing inventories for railway and defense transfer claim settlements.</p>
                    </div>
                    <div class="kgp-feature-card">
                        <div class="kgp-card-head">📦 Fragile Scientific Hardware Crating</div>
                        <p class="kgp-card-text">Custom wooden crates with shock-absorbent thermal foam padding for delicate laboratory equipment, high-end computers, and fragile glass displays.</p>
                    </div>
                </div>

                <div class="kgp-highlight-box">
                    <div class="kgp-highlight-title">All-Weather Waterproof Protection</div>
                    <div class="kgp-highlight-desc">Because Kharagpur experiences strong sub-tropical monsoons, our closed container trucks are sealed with watertight rubber gaskets, ensuring zero water ingress during transit.</div>
                </div>

                <p class="kgp-body-p">For long-distance corridors heading toward our company headquarters via <a href="<?php echo SITE_BASE_URL; ?>/">Packers and Movers in Ranchi</a> or western industrial hubs via <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-asansol">Packers and Movers in Asansol</a>, our dedicated fleet ensures direct transit without intermediate transshipment.</p>

                <p class="kgp-body-p">We also provide optional value-added services such as pre-move deep cleaning, wall mount television bracket de-installation, split air conditioner gas sealing and dismantling by certified HVAC technicians, and short-term secure household warehousing at fully covered, CCTV-monitored storage facilities.</p>
            </section>

            <!-- Section 5: Transparent Tariff Structure -->
            <section class="kgp-section">
                <h2 class="kgp-section-title">Transparent Price Estimator for Kharagpur Relocations</h2>
                <p class="kgp-lead-p">We believe that honest moving starts with crystal-clear pricing. Below is an indicative rate chart for local relocations within Kharagpur municipal limits. For customized cross-state or long-distance tariffs, explore our interactive <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">packers and movers charges calculator</a>.</p>

                <div class="kgp-table-wrap">
                    <table class="kgp-pricing-table">
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
                                <td>₹7,500 - ₹18,500</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="kgp-highlight-box">
                    <div class="kgp-highlight-title">Zero Hidden Surcharges Promise</div>
                    <div class="kgp-highlight-desc">Every formal quotation from Shree Ashirwad Packers includes packing materials, labor, transport, toll taxes, and standard insurance with complete clarity upfront.</div>
                </div>

                <div class="kgp-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Kharagpur">
                    <div class="kgp-image-caption">Dedicated door-to-door closed carrier truck operating in Kharagpur.</div>
                </div>

                <p class="kgp-body-p">Whether you are relocating locally within Kharagpur or moving across state lines to Odisha, Jharkhand, Bihar, or Delhi NCR, our GPS-enabled container vehicles provide regular tracking updates and guaranteed on-time delivery.</p>

                <p class="kgp-body-p">For families in transitional housing or corporate clients renovating premises, we provide secure short-term and long-term warehousing facilities in Kharagpur. Our warehouse spaces feature 24/7 CCTV surveillance, fire prevention systems, raised concrete plinths, and pest-controlled wooden storage pallets.</p>
            </section>

            <!-- Section 6: Frequently Asked Questions -->
            <section class="kgp-section">
                <h2 class="kgp-section-title">Frequently Asked Questions — Kharagpur Relocation</h2>
                <div class="kgp-faq-accordion">
                    <div class="kgp-faq-item">
                        <div class="kgp-faq-question">What are the average household shifting rates in Kharagpur?</div>
                        <div class="kgp-faq-answer">Local shifting charges within Kharagpur (such as between Prem Bazar, Gol Bazar, Inda, and IIT campus quarters) typically range between ₹3,200 and ₹6,500 for a 1 BHK, ₹5,500 to ₹11,000 for a 2 BHK, and ₹8,500 to ₹17,500 for a 3 BHK residence, including packing materials, labor, and transport.</div>
                    </div>
                    <div class="kgp-faq-item">
                        <div class="kgp-faq-question">Do you provide relocation services inside the IIT Kharagpur campus?</div>
                        <div class="kgp-faq-answer">Yes, we regularly execute moves for faculty, professors, and research staff residing in IIT Kharagpur campus quarters and surrounding residential areas like Hijli and Prem Bazar. We provide safe book carton packing, delicate research instrument packaging, and campus security gate clearance assistance.</div>
                    </div>
                    <div class="kgp-faq-item">
                        <div class="kgp-faq-question">Do you handle railway officer transfers from South Eastern Railway (SER) colonies?</div>
                        <div class="kgp-faq-answer">Yes, Kharagpur houses one of India's largest railway settlements. We provide specialized packing and transfer services for railway officers, issuing standard IBA-approved consignment bills, itemized inventories, and transit insurance for reimbursement claims.</div>
                    </div>
                    <div class="kgp-faq-item">
                        <div class="kgp-faq-question">Can you shift vehicles from Kharagpur to southern states via NH 16?</div>
                        <div class="kgp-faq-answer">Yes, Kharagpur is situated directly on the Golden Quadrilateral (NH 16) connecting to Bhubaneswar, Visakhapatnam, and Chennai. We operate enclosed vehicle carrier trucks equipped with wheel chocks and all-risk transit insurance.</div>
                    </div>
                </div>
            </section>

            <!-- Connected Localities Cluster Module -->
            <div class="kgp-cluster-card">
                <h3 class="kgp-cluster-title">Connected Localities & Regional Service Hubs</h3>
                <p class="kgp-body-p">Explore our verified packing and moving networks connecting Kharagpur across West Bengal and Eastern India:</p>
                <div class="kgp-cluster-grid">
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata" class="kgp-cluster-link">Kolkata Authority Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-howrah" class="kgp-cluster-link">Howrah City Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bardhaman" class="kgp-cluster-link">Bardhaman City Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-durgapur" class="kgp-cluster-link">Durgapur Industrial Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-asansol" class="kgp-cluster-link">Asansol Rail Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-siliguri" class="kgp-cluster-link">Siliguri North Bengal Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/" class="kgp-cluster-link">Ranchi Corporate HQ</a>
                </div>
            </div>
        </div>

        <!-- Sidebar Column -->
        <aside class="kgp-sidebar-col">
            <div class="kgp-sidebar-box">
                <h3 class="kgp-sidebar-title">Kharagpur Branch Desk</h3>
                <p class="kgp-body-p">Planning a move in Kharagpur, Prem Bazar, or IIT campus? Contact our dedicated operations desk for an instant quotation.</p>
                <ul style="padding-left: 20px; margin-bottom: 15px; font-size: 0.93rem; color: #334155;">
                    <li><strong>Desk Address:</strong> Near Prem Bazar More, IIT Main Gate Road, Kharagpur</li>
                    <li><strong>Service Hours:</strong> 6:30 AM - 9:30 PM (Daily)</li>
                    <li><strong>Helpline:</strong> +91 9334460424</li>
                    <li><strong>Email:</strong> info@shreeashirwadpackers.com</li>
                </ul>
                <a href="<?php echo SITE_BASE_URL; ?>/contact" class="kgp-cta-button">Request Free Moving Quote</a>
            </div>

            <div class="kgp-sidebar-box">
                <h3 class="kgp-sidebar-title">Key Coverage Localities</h3>
                <ul style="padding-left: 20px; font-size: 0.91rem; color: #475569; line-height: 1.8;">
                    <li>IIT Kharagpur Campus Quarters</li>
                    <li>Prem Bazar & Hijli Enclaves</li>
                    <li>Gol Bazar Commercial District</li>
                    <li>Inda & Malancha Residential Belts</li>
                    <li>Chhota Tengra Railway Settlement</li>
                    <li>Nimpura Marshalling Yard & Industrial Zone</li>
                    <li>Vidyasagar Industrial Park Corridor</li>
                    <li>Kaushalya & Subhas Pally</li>
                </ul>
            </div>
        </aside>
    </div>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>
</body>
</html>
