<?php
/**
 * Page: Packers and Movers in Delhi
 * Description: Certified household shifting, central government officer relocations, corporate MNC executive transfers, and inter-state logistics across the National Capital Territory of Delhi.
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
    <title>Packers and Movers in Delhi | Certified Relocation Services NCT</title>
    <meta name="description" content="Top-rated packers and movers in Delhi NCR. Professional home shifting, central government transfers, corporate office moves, and transparent pricing in Dwarka, Rohini, South Delhi, and Vasant Kunj.">
    <meta name="keywords" content="packers and movers in delhi, movers and packers delhi, house shifting services delhi ncr, best packers in delhi, home relocation south delhi, packers movers dwarka rohini">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-delhi">
    <meta property="og:title" content="Packers and Movers in Delhi | Shree Ashirwad Packers">
    <meta property="og:description" content="Dependable domestic relocation, vehicle transportation, and corporate shifting across Delhi with 4-layer packaging and zero transit damage.">
    <meta property="og:url" content="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-delhi">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <style>
        /* Scoped CSS for Delhi National Capital Territory Authority Hub - dlh prefix */
        .dlh-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px 40px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.6;
        }
        .dlh-hero-section {
            background: linear-gradient(135deg, #1e3a8a 0%, #0369a1 50%, #b45309 100%);
            color: #ffffff;
            border-radius: 14px;
            padding: 40px 25px;
            margin-bottom: 30px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.12);
        }
        .dlh-hero-title {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.25;
            color: #ffffff;
        }
        .dlh-hero-subtitle {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: #f1f5f9;
            max-width: 900px;
        }
        .dlh-meta-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }
        .dlh-badge-item {
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.35);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            color: #ffffff;
        }
        .dlh-main-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            margin-bottom: 35px;
        }
        @media (max-width: 900px) {
            .dlh-main-grid {
                grid-template-columns: 1fr;
            }
        }
        .dlh-content-col {
            min-width: 0;
        }
        .dlh-sidebar-col {
            min-width: 0;
        }
        .dlh-section {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 28px 24px;
            margin-bottom: 28px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .dlh-section-title {
            font-size: 1.65rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 18px;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
        }
        .dlh-lead-p {
            font-size: 1.05rem;
            color: #334155;
            margin-bottom: 16px;
        }
        .dlh-body-p {
            font-size: 0.98rem;
            color: #475569;
            margin-bottom: 16px;
        }
        .dlh-image-container {
            max-width: 580px;
            margin: 22px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border: 1px solid #cbd5e1;
            background: #f8fafc;
        }
        .dlh-image-container img {
            width: 100%;
            max-height: 380px;
            object-fit: cover;
            display: block;
        }
        .dlh-image-caption {
            padding: 10px 14px;
            font-size: 0.85rem;
            color: #475569;
            text-align: center;
            background: #f1f5f9;
            border-top: 1px solid #e2e8f0;
            font-weight: 500;
        }
        .dlh-highlight-box {
            background: #f0fdf4;
            border-left: 4px solid #16a34a;
            padding: 16px 20px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
        }
        .dlh-highlight-title {
            font-weight: 700;
            color: #15803d;
            margin-bottom: 6px;
            font-size: 1.02rem;
        }
        .dlh-highlight-desc {
            font-size: 0.94rem;
            color: #166534;
            margin: 0;
        }
        .dlh-card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 18px;
            margin: 22px 0;
        }
        .dlh-feature-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 18px;
            transition: all 0.2s ease;
        }
        .dlh-feature-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.06);
            border-color: #cbd5e1;
        }
        .dlh-card-head {
            font-weight: 700;
            font-size: 1.05rem;
            color: #1e3a8a;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .dlh-card-text {
            font-size: 0.92rem;
            color: #475569;
            margin: 0;
            line-height: 1.5;
        }
        .dlh-table-wrap {
            overflow-x: auto;
            margin: 22px 0;
        }
        .dlh-pricing-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.94rem;
        }
        .dlh-pricing-table th {
            background: #1e3a8a;
            color: #ffffff;
            text-align: left;
            padding: 12px 14px;
            font-weight: 600;
            border: 1px solid #1e3a8a;
        }
        .dlh-pricing-table td {
            padding: 11px 14px;
            border: 1px solid #e2e8f0;
            color: #334155;
        }
        .dlh-pricing-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .dlh-pricing-table tr:hover {
            background: #f1f5f9;
        }
        .dlh-steps-container {
            display: flex;
            flex-direction: column;
            gap: 14px;
            margin: 20px 0;
        }
        .dlh-step-item {
            display: flex;
            gap: 14px;
            align-items: flex-start;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 14px 16px;
        }
        .dlh-step-number {
            background: #ea580c;
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
        .dlh-step-body {
            flex: 1;
        }
        .dlh-step-heading {
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 4px;
            font-size: 1rem;
        }
        .dlh-step-detail {
            font-size: 0.92rem;
            color: #64748b;
            margin: 0;
        }
        .dlh-checklist {
            list-style: none;
            padding: 0;
            margin: 16px 0;
        }
        .dlh-checklist li {
            position: relative;
            padding-left: 26px;
            margin-bottom: 10px;
            font-size: 0.95rem;
            color: #334155;
        }
        .dlh-checklist li::before {
            content: "✓";
            position: absolute;
            left: 0;
            top: 0;
            color: #16a34a;
            font-weight: bold;
            font-size: 1.1rem;
        }
        .dlh-faq-accordion {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-top: 18px;
        }
        .dlh-faq-item {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            overflow: hidden;
            background: #ffffff;
        }
        .dlh-faq-question {
            padding: 16px 20px;
            background: #f8fafc;
            font-weight: 700;
            color: #1e3a8a;
            font-size: 1rem;
            border-bottom: 1px solid #e2e8f0;
        }
        .dlh-faq-answer {
            padding: 16px 20px;
            color: #475569;
            font-size: 0.95rem;
            line-height: 1.55;
            background: #ffffff;
        }
        .dlh-cluster-section {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 24px 20px;
            margin-top: 30px;
        }
        .dlh-cluster-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 12px;
        }
        .dlh-cluster-desc {
            font-size: 0.93rem;
            color: #64748b;
            margin-bottom: 16px;
        }
        .dlh-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 12px;
            margin-top: 14px;
        }
        .dlh-cluster-link {
            display: block;
            background: #ffffff;
            border: 1px solid #e2e8f0;
            padding: 10px 14px;
            border-radius: 6px;
            font-size: 0.9rem;
            font-weight: 600;
            color: #1e3a8a;
            text-decoration: none;
            transition: all 0.2s ease;
        }
        .dlh-cluster-link:hover {
            border-color: #1e3a8a;
            background: #eff6ff;
            transform: translateX(3px);
        }
        .dlh-sidebar-box {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 22px 20px;
            margin-bottom: 24px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .dlh-sidebar-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 14px;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 8px;
        }
        .dlh-cta-button {
            display: block;
            width: 100%;
            background: linear-gradient(135deg, #1e3a8a 0%, #0369a1 100%);
            color: #ffffff;
            text-align: center;
            padding: 13px 18px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 1rem;
            text-decoration: none;
            box-shadow: 0 4px 12px rgba(30, 58, 138, 0.25);
            transition: all 0.2s ease;
            box-sizing: border-box;
            margin-top: 15px;
        }
        .dlh-cta-button:hover {
            background: linear-gradient(135deg, #172554 0%, #0284c7 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(30, 58, 138, 0.35);
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Delhi",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "@id": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-delhi#movingcompany",
        "url": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-delhi",
        "telephone": "+91 9835565233",
        "priceRange": "₹3,800 - ₹65,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Ring Road Logistics Complex, Near Dhaula Kuan",
            "addressLocality": "New Delhi",
            "addressRegion": "Delhi",
            "postalCode": "110010",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 28.6139,
            "longitude": 77.2090
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"
            ],
            "opens": "06:00",
            "closes": "22:00"
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
                "name": "Packers and Movers in Delhi NCR",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-delhi"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Delhi Authority Hub",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-delhi"
            }
        ]
    }
    </script>

    <!-- Schema 3: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Packers and Movers Relocation Services in Delhi",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers Delhi"
        },
        "serviceType": "Metropolitan and Interstate Relocation Services",
        "areaServed": {
            "@type": "AdministrativeArea",
            "name": "National Capital Territory of Delhi"
        },
        "description": "Premium household shifting, central government ministry transfers, corporate MNC executive relocations, and inter-state logistics across the National Capital Territory of Delhi."
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
                "name": "What are the standard charges for household shifting within Delhi NCR?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting in Delhi typically ranges from ₹3,800 to ₹6,500 for a 1 BHK, ₹7,000 to ₹12,500 for a 2 BHK, and ₹13,000 to ₹22,000 for a 3 BHK apartment, depending on volume, packing grade, floor level, and elevator availability."
                }
            },
            {
                "@type": "Question",
                "name": "How do you manage Delhi MCD commercial vehicle entry and no-entry timings?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Delhi enforces heavy commercial vehicle no-entry restrictions during morning peak hours (07:00–11:00) and evening peak hours (17:00–21:30). Our dispatch supervisors schedule loading and transport outside restricted windows using MCD green-tax-compliant CNG and electric container vehicles."
                }
            },
            {
                "@type": "Question",
                "name": "Do you handle central government, defence, and corporate employee transfers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we regularly handle relocations for central government ministry officials, defence personnel, public sector bank employees, and MNC corporate executives with 100% GST-compliant billing, consignment notes, and transit insurance tailored for HR reimbursement."
                }
            },
            {
                "@type": "Question",
                "name": "How do you handle moving in high-rise societies in Dwarka, Rohini, or Mayur Vihar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We coordinate security gate entries, service lift reservations, and society guard permissions in advance. Our team deploys hydraulic furniture dollies and corner protectors to ensure zero scratches to apartment corridors and elevators."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="dlh-wrap">
    <!-- Hero Banner -->
    <section class="dlh-hero-section">
        <h1 class="dlh-hero-title">Certified Packers and Movers in Delhi</h1>
        <p class="dlh-hero-subtitle">Premium household shifting, central government officer transfers, MNC corporate relocations, and high-speed inter-state highway transport across the National Capital Territory of Delhi.</p>
        <div class="dlh-meta-badges">
            <span class="dlh-badge-item">✓ National Capital Territory Authority Hub</span>
            <span class="dlh-badge-item">✓ Central Govt & Defence Approved Billing</span>
            <span class="dlh-badge-item">✓ MCD Green-Tax Compliant Fleet</span>
            <span class="dlh-badge-item">✓ 100% Zero Damage Guarantee</span>
        </div>
    </section>

    <!-- Main Two-Column Layout -->
    <div class="dlh-main-grid">
        <!-- Content Column -->
        <div class="dlh-content-col">
            <!-- Section 1: Overview & Local Geography -->
            <section class="dlh-section">
                <h2 class="dlh-section-title">Premier Relocation Services Across the National Capital Territory</h2>
                <p class="dlh-lead-p">The National Capital Territory (NCT) of Delhi functions as the political, administrative, and economic heart of India. Home to the Union Government ministries, foreign diplomatic missions in Chanakyapuri, the Supreme Court, premier healthcare institutions such as AIIMS, and world-class universities like Delhi University, JNU, and IIT Delhi, the capital region witnesses non-stop mobility. Families, civil servants, corporate executives, medical specialists, and entrepreneurs continuously relocate between the capital's distinct zones and nationwide economic centers.</p>
                <p class="dlh-body-p">Relocating within Delhi demands deep operational mastery of complex municipal dynamics. From navigating the busy arterial corridors of the Ring Road and Outer Ring Road to coordinating moves within dense residential neighborhoods across <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dwarka-delhi">Dwarka</a>, <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-rohini-delhi">Rohini</a>, <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-janakpuri-delhi">Janakpuri</a>, <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-pitampura-delhi">Pitampura</a>, <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-laxmi-nagar-delhi">Laxmi Nagar</a>, and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-vasant-kunj-delhi">Vasant Kunj</a>, moving teams must manage strict traffic regulations, peak-hour truck restrictions, and gated society access guidelines.</p>
                <p class="dlh-body-p">Shree Ashirwad Packers and Movers brings verified metropolitan infrastructure to Delhi. Operating clean, closed container fleets equipped with GPS tracking, we link Delhi seamlessly with sister NCR megacity hubs including <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida">Noida</a>, <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gurgaon">Gurgaon</a>, <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-faridabad">Faridabad</a>, and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ghaziabad">Ghaziabad</a>, alongside long-distance highway routes connecting to our corporate headquarters in <a href="<?php echo SITE_BASE_URL; ?>/">Ranchi</a>, Patna, Kolkata, and Mumbai.</p>

                <div class="dlh-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loading in container truck in Delhi" width="580" height="380" loading="lazy">
                    <div class="dlh-image-caption">Systematic loading and cargo bracing inside closed-body transport fleet in Delhi.</div>
                </div>

                <div class="dlh-highlight-box">
                    <div class="dlh-highlight-title">Navigating Delhi Peak-Hour Truck Regulations</div>
                    <p class="dlh-highlight-desc">Delhi Traffic Police strictly enforces no-entry restrictions for commercial vehicles during morning hours (07:00 to 11:00) and evening hours (17:00 to 21:30). Our operations supervisors coordinate move timings precisely outside these intervals, deploying MCD green-tax-compliant CNG and electric container trucks to prevent transit delays.</p>
                </div>
            </section>

            <!-- Section 2: Core Relocation Services -->
            <section class="dlh-section">
                <h2 class="dlh-section-title">Comprehensive Relocation Solutions Built for Delhi Residents</h2>
                <p class="dlh-lead-p">Every move within the National Capital Territory requires meticulous planning. Shree Ashirwad Packers and Movers delivers modular, end-to-end relocation packages designed to eliminate moving stress from start to finish:</p>

                <div class="dlh-card-grid">
                    <div class="dlh-feature-card">
                        <div class="dlh-card-head">🏠 Complete Household Moving</div>
                        <p class="dlh-card-text">Systematic wrapping, packing, and room-by-room labeling of home furnishings, crockery, clothing, books, and kitchen appliances with heavy-duty corrugated cartons.</p>
                    </div>
                    <div class="dlh-feature-card">
                        <div class="dlh-card-head">🏛️ Central Government & Ministry Transfers</div>
                        <p class="dlh-card-text">Specialized moving assistance for central secretariat officers, defence personnel, judges, and civil servants with complete documentation and claim invoices.</p>
                    </div>
                    <div class="dlh-feature-card">
                        <div class="dlh-card-head">🏢 Corporate & IT Office Relocation</div>
                        <p class="dlh-card-text">Structured relocation of workstations, server racks, confidential files, and executive suites across Connaught Place, Nehru Place, and Saket with zero downtime.</p>
                    </div>
                    <div class="dlh-feature-card">
                        <div class="dlh-card-head">🚗 Car Carrier & Bike Transportation</div>
                        <p class="dlh-card-text">Enclosed hydraulic vehicle carrier trucks with floor tire-chocks and safety tie-downs ensuring zero damage to sedans, SUVs, and luxury motorcycles.</p>
                    </div>
                    <div class="dlh-feature-card">
                        <div class="dlh-card-head">🏺 Fine Art & Antique Crating</div>
                        <p class="dlh-card-text">Customized wooden crating and shock-absorbent foam casing for priceless oil paintings, brass sculptures, delicate chandeliers, and antique furniture.</p>
                    </div>
                    <div class="dlh-feature-card">
                        <div class="dlh-card-head">🔒 Secure Temporary Warehousing</div>
                        <p class="dlh-card-text">Clean, pest-protected storage facilities with 24/7 CCTV surveillance, fire prevention equipment, and flexible monthly contracts for holding household goods.</p>
                    </div>
                </div>

                <div class="dlh-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="4-layer bubble packaging for household cartons in Delhi" width="580" height="380" loading="lazy">
                    <div class="dlh-image-caption">Standardized 4-layer packaging utilizing bubble wrap, corrugated sheets, and edge protectors.</div>
                </div>

                <p class="dlh-body-p">Our technical crews manage the complete electrical disconnection, shockproof packaging, and reinstallation of delicate household electronics, including large LED screens, side-by-side refrigerators, microwave ovens, and automatic washing machines. Each appliance is protected with custom styrofoam corner protectors before loading.</p>
                <p class="dlh-body-p">For prized cultural possessions, fragile glassware, porcelain dinner sets, and ornamental mirror frames, our carpenters construct tailored wooden crates that isolate delicate cargo from sudden road shocks and highway vibrations during interstate transit.</p>
            </section>

            <!-- Section 3: Transparent Pricing & Cost Estimates -->
            <section class="dlh-section">
                <h2 class="dlh-section-title">Transparent Tariff Structure for Delhi Relocations</h2>
                <p class="dlh-lead-p">Shree Ashirwad Packers and Movers upholds a strict zero-hidden-fee pricing policy. Every written proposal details packing material specifications, transport vehicle dimensions, labor allocation, road tolls, and transit insurance transparently before any packing begins.</p>
                <p class="dlh-body-p">For instant rate projections based on your exact inventory volume and transit distance, visit our online <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">Live Tariff Calculator</a> to project local and inter-district costs accurately.</p>

                <div class="dlh-table-wrap">
                    <table class="dlh-pricing-table">
                        <thead>
                            <tr>
                                <th>Relocation Type</th>
                                <th>Consignment Volume</th>
                                <th>Recommended Packaging</th>
                                <th>Indicative Cost Range</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Local 1 BHK Apartment</td>
                                <td>15-20 Cartons + Essential Furniture</td>
                                <td>Standard Bubble & 3-Ply Cartons</td>
                                <td>₹3,800 - ₹6,500</td>
                            </tr>
                            <tr>
                                <td>Local 2 BHK Apartment</td>
                                <td>30-40 Cartons + Major Appliances</td>
                                <td>Multi-layer Bubble & Heavy Corrugated</td>
                                <td>₹7,000 - ₹12,500</td>
                            </tr>
                            <tr>
                                <td>Local 3 BHK / Builder Floor</td>
                                <td>50+ Cartons + Complete Living & Bedroom Sets</td>
                                <td>Premium 5-Ply Cartons & Foam Wrap</td>
                                <td>₹13,000 - ₹22,000</td>
                            </tr>
                            <tr>
                                <td>Delhi to Noida / Greater Noida</td>
                                <td>Intra-NCR Cross-Border Move</td>
                                <td>Direct Dedicated Container Truck</td>
                                <td>₹6,500 - ₹14,000</td>
                            </tr>
                            <tr>
                                <td>Delhi to Gurgaon (Cyber City Corridor)</td>
                                <td>Intra-NCR Express Expressway Move</td>
                                <td>All-Weather Sealed Container Truck</td>
                                <td>₹7,500 - ₹16,000</td>
                            </tr>
                            <tr>
                                <td>Delhi to Jaipur / Chandigarh</td>
                                <td>Inter-State Highway Transit (NH-48 / NH-44)</td>
                                <td>Full Transit Wooden Crating & Wrap</td>
                                <td>₹15,000 - ₹30,000</td>
                            </tr>
                            <tr>
                                <td>Delhi to Lucknow / Kanpur</td>
                                <td>Yamuna & Agra Expressway Route</td>
                                <td>Heavy Duty Shockproof Packaging</td>
                                <td>₹18,000 - ₹36,000</td>
                            </tr>
                            <tr>
                                <td>Delhi to Ranchi / Patna / Kolkata</td>
                                <td>Long-Distance Trunk Highway Corridor</td>
                                <td>Heavy Duty 4-Layer Transit Wrap</td>
                                <td>₹24,000 - ₹48,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="dlh-highlight-box">
                    <div class="dlh-highlight-title">Hassle-Free Corporate Reimbursement Documentation</div>
                    <p class="dlh-highlight-desc">We issue authentic GST invoices, vehicle transit consignment notes (LR copies), transit insurance certificates, and itemized damage-free survey receipts fully compliant with Central Government ministries, defence audits, and MNC HR claims.</p>
                </div>
            </section>

            <!-- Section 4: Systematic 5-Step Process -->
            <section class="dlh-section">
                <h2 class="dlh-section-title">Our Proven 5-Step Relocation Methodology</h2>
                <p class="dlh-lead-p">Every relocation project in Delhi is executed using disciplined operating procedures honed over years of reliable service across Eastern India, ensuring total security from initial survey to final room placement:</p>

                <div class="dlh-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture dismantling and assembly in Delhi" width="580" height="380" loading="lazy">
                    <div class="dlh-image-caption">Careful dismantling and packaging of modular bed frames, dining sets, and wardrobes.</div>
                </div>

                <div class="dlh-steps-container">
                    <div class="dlh-step-item">
                        <div class="dlh-step-number">1</div>
                        <div class="dlh-step-body">
                            <div class="dlh-step-heading">Pre-Move Survey & Free Estimation</div>
                            <div class="dlh-step-detail">Our relocation officer conducts an in-person survey across Dwarka, Rohini, or South Delhi (or a video consultation) to calculate volume, assess staircases, and confirm truck parking.</div>
                        </div>
                    </div>
                    <div class="dlh-step-item">
                        <div class="dlh-step-number">2</div>
                        <div class="dlh-step-body">
                            <div class="dlh-step-heading">Standardized Multi-Layer Packaging</div>
                            <div class="dlh-step-detail">Trained packaging specialists wrap delicate chinaware, kitchen sets, electronics, and books in high-density bubble wrap, anti-static plastic film, and heavy-duty 5-ply cartons.</div>
                        </div>
                    </div>
                    <div class="dlh-step-item">
                        <div class="dlh-step-number">3</div>
                        <div class="dlh-step-body">
                            <div class="dlh-step-heading">Disciplined Loading & Cargo Anchoring</div>
                            <div class="dlh-step-detail">Items are loaded into weather-tight container vehicles using heavy-duty ramps. Heavier furniture pieces are lashed firmly with cargo belts to eliminate movement.</div>
                        </div>
                    </div>
                    <div class="dlh-step-item">
                        <div class="dlh-step-number">4</div>
                        <div class="dlh-step-body">
                            <div class="dlh-step-heading">Safe Transit & GPS Route Tracking</div>
                            <div class="dlh-step-detail">Your consignment travels across designated national and state highways under continuous monitoring, keeping you informed of transit milestones until final arrival.</div>
                        </div>
                    </div>
                    <div class="dlh-step-item">
                        <div class="dlh-step-number">5</div>
                        <div class="dlh-step-body">
                            <div class="dlh-step-heading">Unloading, Reassembly & Debris Removal</div>
                            <div class="dlh-step-detail">Upon delivery, our crew unloads goods, reassembles beds and tables, places appliances in designated rooms, and disposes of used packing materials responsibly.</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section 5: Key Neighborhoods Covered in Delhi -->
            <section class="dlh-section">
                <h2 class="dlh-section-title">Key Localities & Residential Zones Served Across Delhi</h2>
                <p class="dlh-lead-p">Our local service network spans across all major residential sectors, planned sub-cities, and commercial zones of the National Capital Territory:</p>

                <ul class="dlh-checklist">
                    <li><strong>Dwarka Sub-City (Sectors 1–26):</strong> Asia's largest planned residential sub-city featuring hundreds of high-rise DDA and CGHS societies near IGI Airport.</li>
                    <li><strong>Rohini Sub-City (Sectors 1–35):</strong> Massive North-West residential hub with wide sector roads, metro connectivity, and family builder floors.</li>
                    <li><strong>South Delhi Luxury Enclaves:</strong> Greater Kailash, Vasant Kunj, Saket, Hauz Khas, and Defence Colony featuring premium builder floors and diplomatic residences.</li>
                    <li><strong>West Delhi Commercial Belts:</strong> Janakpuri, Rajouri Garden, Punjabi Bagh, and Paschim Vihar with active trading markets and family residences.</li>
                    <li><strong>North Delhi & Civil Lines:</strong> Pitampura, Model Town, Ashok Vihar, and Civil Lines with established bungalows and business residences.</li>
                    <li><strong>East Delhi Trans-Yamuna:</strong> Mayur Vihar (Phases 1–3), Laxmi Nagar, Preet Vihar, and Patparganj with dense residential societies.</li>
                    <li><strong>Central Delhi Heritage Core:</strong> Karol Bagh, Connaught Place, Patel Nagar, and Chanakyapuri accommodating diplomatic and central government quarters.</li>
                    <li><strong>Dwarka Expressway Corridor:</strong> Fast-growing high-rise apartment strip connecting West Delhi seamlessly to New Gurgaon sectors.</li>
                </ul>

                <div class="dlh-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck for household goods in Delhi" width="580" height="380" loading="lazy">
                    <div class="dlh-image-caption">Dedicated door-to-door delivery vehicles serving Delhi urban sectors and gated high-rise societies.</div>
                </div>

                <p class="dlh-body-p">Whether you reside inside a gated multi-story apartment society requiring service lift bookings or an older builder floor located in a busy street, our operations supervisors coordinate permissions in advance and deploy hydraulic stair trolleys to guarantee zero wall scrapes or furniture damage.</p>
            </section>

            <!-- Section 6: Frequently Asked Questions -->
            <section class="dlh-section">
                <h2 class="dlh-section-title">Frequently Asked Questions: Delhi Relocations</h2>
                <p class="dlh-lead-p">Find clear answers to common questions regarding home shifting, MCD regulations, and corporate relocations in Delhi:</p>

                <div class="dlh-faq-accordion">
                    <div class="dlh-faq-item">
                        <div class="dlh-faq-question">What are the standard charges for household shifting within Delhi NCR?</div>
                        <div class="dlh-faq-answer">Local shifting in Delhi typically ranges from ₹3,800 to ₹6,500 for a 1 BHK, ₹7,000 to ₹12,500 for a 2 BHK, and ₹13,000 to ₹22,000 for a 3 BHK apartment, depending on volume, packing grade, floor level, and elevator availability.</div>
                    </div>
                    <div class="dlh-faq-item">
                        <div class="dlh-faq-question">How do you manage Delhi MCD commercial vehicle entry and no-entry timings?</div>
                        <div class="dlh-faq-answer">Delhi enforces heavy commercial vehicle no-entry restrictions during morning peak hours (07:00–11:00) and evening peak hours (17:00–21:30). Our dispatch supervisors schedule loading and transport outside restricted windows using MCD green-tax-compliant CNG and electric container vehicles.</div>
                    </div>
                    <div class="dlh-faq-item">
                        <div class="dlh-faq-question">Do you handle central government, defence, and corporate employee transfers?</div>
                        <div class="dlh-faq-answer">Yes, we regularly handle relocations for central government ministry officials, defence personnel, public sector bank employees, and MNC corporate executives with 100% GST-compliant billing, consignment notes, and transit insurance tailored for HR reimbursement.</div>
                    </div>
                    <div class="dlh-faq-item">
                        <div class="dlh-faq-question">How do you handle moving in high-rise societies in Dwarka, Rohini, or Mayur Vihar?</div>
                        <div class="dlh-faq-answer">We coordinate security gate entries, service lift reservations, and society guard permissions in advance. Our team deploys hydraulic furniture dollies and corner protectors to ensure zero scratches to apartment corridors and elevators.</div>
                    </div>
                    <div class="dlh-faq-item">
                        <div class="dlh-faq-question">How many days in advance should I book my move in Delhi?</div>
                        <div class="dlh-faq-answer">For local shifting within Delhi NCR, booking 24 to 48 hours in advance is sufficient. For long-distance interstate moves to Ranchi, Kolkata, Mumbai, or Bengaluru, we recommend confirming your slot 3 to 5 days beforehand to ensure vehicle allocation and packaging material dispatch.</div>
                    </div>
                    <div class="dlh-faq-item">
                        <div class="dlh-faq-question">Are packing materials provided by your team or does the customer have to purchase them?</div>
                        <div class="dlh-faq-answer">All required packing supplies—including heavy-duty 5-ply cartons, multi-layer bubble wrap, edge corner guards, adhesive tapes, and waterproof tarpaulins—are brought by our team and included within your initial quoted estimate.</div>
                    </div>
                    <div class="dlh-faq-item">
                        <div class="dlh-faq-question">How do I track my shipment once the truck departs from Delhi?</div>
                        <div class="dlh-faq-answer">Every intercity container truck is outfitted with real-time GPS tracking. Our 24/7 centralized dispatch team provides continuous milestone SMS and phone updates until your consignment reaches its destination.</div>
                    </div>
                </div>
            </section>

            <!-- Regional Cluster Linking Module -->
            <section class="dlh-cluster-section">
                <h3 class="dlh-cluster-title">Connected Delhi NCR Megacities & Localities</h3>
                <p class="dlh-cluster-desc">Shree Ashirwad Packers and Movers maintains an extensive network across the National Capital Region. Explore our connected city hubs and major Delhi localities:</p>
                <div class="dlh-cluster-grid">
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dwarka-delhi" class="dlh-cluster-link">Movers in Dwarka (West Delhi)</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-rohini-delhi" class="dlh-cluster-link">Movers in Rohini (North-West)</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida" class="dlh-cluster-link">Movers in Noida Authority Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gurgaon" class="dlh-cluster-link">Movers in Gurgaon Cyber City</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-faridabad" class="dlh-cluster-link">Movers in Faridabad Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ghaziabad" class="dlh-cluster-link">Movers in Ghaziabad Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/" class="dlh-cluster-link">Ranchi Headquarters Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="dlh-cluster-link">Live Tariff Calculator</a>
                </div>
            </section>
        </div>

        <!-- Sidebar Column -->
        <aside class="dlh-sidebar-col">
            <div class="dlh-sidebar-box">
                <h3 class="dlh-sidebar-title">Book Your Delhi Move</h3>
                <p class="dlh-body-p">Planning a move in Delhi or relocating to another city across India? Contact our relocation specialists today for an upfront, certified quotation.</p>
                <ul class="dlh-checklist">
                    <li>Free In-Person or Digital Survey</li>
                    <li>Zero Hidden Charges Guarantee</li>
                    <li>All-India Transit Coverage</li>
                    <li>24/7 Dedicated Move Coordinator</li>
                </ul>
                <a href="tel:+919835565233" class="dlh-cta-button">📞 Call: +91 9835565233</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="dlh-cta-button" style="margin-top: 10px; background: linear-gradient(135deg, #b45309 0%, #ea580c 100%);">📊 Calculate Charges Online</a>
            </div>

            <div class="dlh-sidebar-box">
                <h3 class="dlh-sidebar-title">Delhi NCT Operational Profile</h3>
                <ul class="dlh-checklist">
                    <li><strong>Key Highways:</strong> Ring Road, Outer Ring Road, NH-48, NH-44</li>
                    <li><strong>Core Areas:</strong> Dwarka, Rohini, South Delhi, Janakpuri, Mayur Vihar</li>
                    <li><strong>Transfers:</strong> Central Ministries, Defence, MNCs, Embassies</li>
                    <li><strong>Packaging:</strong> 4-Layer Foam, Corrugated Carton, Wooden Crating</li>
                    <li><strong>Billing:</strong> 100% GST Compliant HR Claim Support</li>
                </ul>
            </div>

            <div class="dlh-sidebar-box">
                <h3 class="dlh-sidebar-title">Corporate Headquarters</h3>
                <p class="dlh-body-p"><strong>Shree Ashirwad Packers and Movers</strong><br>
                Corporate HQ: Ashok Nagar, Near Birsa Munda Airport Road, Ranchi, Jharkhand.<br>
                Regional Delhi Hub: Ring Road Logistics Complex, Near Dhaula Kuan, New Delhi - 110010.<br>
                Helpline: +91 9835565233<br>
                Email: info@shreeashirwadpackers.com</p>
                <a href="<?php echo SITE_BASE_URL; ?>/" class="dlh-cluster-link" style="text-align: center;">View Ranchi Authority Hub</a>
            </div>
        </aside>
    </div>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>
</body>
</html>
