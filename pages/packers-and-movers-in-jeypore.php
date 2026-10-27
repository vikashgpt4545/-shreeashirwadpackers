<?php
/**
 * Page: Packers and Movers in Jeypore
 * Description: Certified household shifting, HAL Sunabeda & NALCO Damanjodi corporate employee relocations, coffee & cashew agro-freight, and mountain highway transport in Jeypore, Odisha.
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
    <title>Packers and Movers in Jeypore | HAL & NALCO Relocation Experts</title>
    <meta name="description" content="Certified packers and movers in Jeypore, Odisha. Professional household shifting, HAL Sunabeda aeronautical staff transfers, NALCO Damanjodi relocations, and transparent pricing in Parabeda, Bank Colony, and MG Road.">
    <meta name="keywords" content="packers and movers in jeypore, movers and packers jeypore koraput, house shifting services jeypore odisha, hal sunabeda employee relocation, nalco damanjodi packers">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-jeypore">
    <meta property="og:title" content="Packers and Movers in Jeypore | Shree Ashirwad Packers">
    <meta property="og:description" content="Dependable residential relocation, defence and public sector transfers, and vehicle transport across Jeypore with 4-layer packaging and zero transit loss.">
    <meta property="og:url" content="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-jeypore">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <style>
        /* Scoped CSS for Jeypore City Authority Hub - jyp prefix */
        .jyp-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px 40px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.6;
        }
        .jyp-hero-section {
            background: linear-gradient(135deg, #0f766e 0%, #15803d 50%, #c2410c 100%);
            color: #ffffff;
            border-radius: 14px;
            padding: 40px 25px;
            margin-bottom: 30px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.12);
        }
        .jyp-hero-title {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.25;
            color: #ffffff;
        }
        .jyp-hero-subtitle {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: #f1f5f9;
            max-width: 900px;
        }
        .jyp-meta-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }
        .jyp-badge-item {
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.35);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            color: #ffffff;
        }
        .jyp-main-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            margin-bottom: 35px;
        }
        @media (max-width: 900px) {
            .jyp-main-grid {
                grid-template-columns: 1fr;
            }
        }
        .jyp-content-col {
            min-width: 0;
        }
        .jyp-sidebar-col {
            min-width: 0;
        }
        .jyp-section {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 28px 24px;
            margin-bottom: 28px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .jyp-section-title {
            font-size: 1.65rem;
            font-weight: 700;
            color: #0f766e;
            margin-bottom: 18px;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
        }
        .jyp-lead-p {
            font-size: 1.05rem;
            color: #334155;
            margin-bottom: 16px;
        }
        .jyp-body-p {
            font-size: 0.98rem;
            color: #475569;
            margin-bottom: 16px;
        }
        .jyp-image-container {
            max-width: 580px;
            margin: 22px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border: 1px solid #cbd5e1;
            background: #f8fafc;
        }
        .jyp-image-container img {
            width: 100%;
            max-height: 380px;
            object-fit: cover;
            display: block;
        }
        .jyp-image-caption {
            padding: 10px 14px;
            font-size: 0.85rem;
            color: #475569;
            text-align: center;
            background: #f1f5f9;
            border-top: 1px solid #e2e8f0;
            font-weight: 500;
        }
        .jyp-highlight-box {
            background: #f0fdf4;
            border-left: 4px solid #16a34a;
            padding: 16px 20px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
        }
        .jyp-highlight-title {
            font-weight: 700;
            color: #15803d;
            margin-bottom: 6px;
            font-size: 1.02rem;
        }
        .jyp-highlight-desc {
            font-size: 0.94rem;
            color: #166534;
            margin: 0;
        }
        .jyp-card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 18px;
            margin: 22px 0;
        }
        .jyp-feature-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 18px;
            transition: all 0.2s ease;
        }
        .jyp-feature-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.06);
            border-color: #cbd5e1;
        }
        .jyp-card-head {
            font-weight: 700;
            font-size: 1.05rem;
            color: #0f766e;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .jyp-card-text {
            font-size: 0.92rem;
            color: #475569;
            margin: 0;
            line-height: 1.5;
        }
        .jyp-table-wrap {
            overflow-x: auto;
            margin: 22px 0;
        }
        .jyp-pricing-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.94rem;
        }
        .jyp-pricing-table th {
            background: #0f766e;
            color: #ffffff;
            text-align: left;
            padding: 12px 14px;
            font-weight: 600;
            border: 1px solid #0f766e;
        }
        .jyp-pricing-table td {
            padding: 11px 14px;
            border: 1px solid #e2e8f0;
            color: #334155;
        }
        .jyp-pricing-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .jyp-pricing-table tr:hover {
            background: #f1f5f9;
        }
        .jyp-steps-container {
            display: flex;
            flex-direction: column;
            gap: 14px;
            margin: 20px 0;
        }
        .jyp-step-item {
            display: flex;
            gap: 14px;
            align-items: flex-start;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 14px 16px;
        }
        .jyp-step-number {
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
        .jyp-step-body {
            flex: 1;
        }
        .jyp-step-heading {
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 4px;
            font-size: 1rem;
        }
        .jyp-step-detail {
            font-size: 0.92rem;
            color: #64748b;
            margin: 0;
        }
        .jyp-checklist {
            list-style: none;
            padding: 0;
            margin: 16px 0;
        }
        .jyp-checklist li {
            position: relative;
            padding-left: 26px;
            margin-bottom: 10px;
            font-size: 0.95rem;
            color: #334155;
        }
        .jyp-checklist li::before {
            content: "✓";
            position: absolute;
            left: 0;
            top: 0;
            color: #0f766e;
            font-weight: bold;
            font-size: 1.1rem;
        }
        .jyp-faq-accordion {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-top: 18px;
        }
        .jyp-faq-item {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            overflow: hidden;
            background: #ffffff;
        }
        .jyp-faq-question {
            padding: 16px 20px;
            background: #f8fafc;
            font-weight: 700;
            color: #0f766e;
            font-size: 1rem;
            border-bottom: 1px solid #e2e8f0;
        }
        .jyp-faq-answer {
            padding: 16px 20px;
            color: #475569;
            font-size: 0.95rem;
            line-height: 1.55;
            background: #ffffff;
        }
        .jyp-cluster-section {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 24px 20px;
            margin-top: 30px;
        }
        .jyp-cluster-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #0f766e;
            margin-bottom: 12px;
        }
        .jyp-cluster-desc {
            font-size: 0.93rem;
            color: #64748b;
            margin-bottom: 16px;
        }
        .jyp-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 12px;
            margin-top: 14px;
        }
        .jyp-cluster-link {
            display: block;
            background: #ffffff;
            border: 1px solid #e2e8f0;
            padding: 10px 14px;
            border-radius: 6px;
            font-size: 0.9rem;
            font-weight: 600;
            color: #0f766e;
            text-decoration: none;
            transition: all 0.2s ease;
        }
        .jyp-cluster-link:hover {
            border-color: #0f766e;
            background: #f0fdfa;
            transform: translateX(3px);
        }
        .jyp-sidebar-box {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 22px 20px;
            margin-bottom: 24px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .jyp-sidebar-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #0f766e;
            margin-bottom: 14px;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 8px;
        }
        .jyp-cta-button {
            display: block;
            width: 100%;
            background: linear-gradient(135deg, #0f766e 0%, #15803d 100%);
            color: #ffffff;
            text-align: center;
            padding: 13px 18px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 1rem;
            text-decoration: none;
            box-shadow: 0 4px 12px rgba(15, 118, 110, 0.25);
            transition: all 0.2s ease;
            box-sizing: border-box;
            margin-top: 15px;
        }
        .jyp-cta-button:hover {
            background: linear-gradient(135deg, #115e59 0%, #166534 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(15, 118, 110, 0.35);
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Jeypore",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "@id": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-jeypore#movingcompany",
        "url": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-jeypore",
        "telephone": "+91 9835565233",
        "priceRange": "₹3,300 - ₹56,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "NH-26 Bypass Road, Near Parabeda Chowk",
            "addressLocality": "Jeypore",
            "addressRegion": "Odisha",
            "postalCode": "764001",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 18.8687,
            "longitude": 82.5694
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
                "name": "Packers and Movers in Odisha",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bhubaneswar"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Jeypore",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-jeypore"
            }
        ]
    }
    </script>

    <!-- Schema 3: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Packers and Movers Relocation Services in Jeypore",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers Jeypore"
        },
        "serviceType": "Commercial and Household Relocation",
        "areaServed": {
            "@type": "City",
            "name": "Jeypore"
        },
        "description": "Certified domestic shifting, HAL Sunabeda aeronautical staff relocations, NALCO Damanjodi employee transfers, and mountain highway logistics across Jeypore and Koraput district."
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
                "name": "What are the standard charges for household shifting in Jeypore?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting in Jeypore typically ranges from ₹3,300 to ₹5,500 for a 1 BHK, ₹6,200 to ₹10,800 for a 2 BHK, and ₹11,500 to ₹17,500 for a 3 BHK home, depending on volume, packaging grade, and floor level."
                }
            },
            {
                "@type": "Question",
                "name": "Do you manage employee relocations to HAL Sunabeda and NALCO Damanjodi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we handle daily corporate relocations for Hindustan Aeronautics Limited (HAL) Sunabeda, NALCO Damanjodi, Central University of Odisha, and public sector banking staff with comprehensive GST invoices tailored for official claim reimbursements."
                }
            },
            {
                "@type": "Question",
                "name": "How do you navigate steep ghat roads connecting Jeypore, Koraput, and Visakhapatnam?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our trucks are driven by seasoned hill-route drivers trained in ghat navigation along NH-26. We utilize interior polyester cargo tie-downs and heavy-duty foam cushioning to keep cargo completely stable during mountain switchbacks."
                }
            },
            {
                "@type": "Question",
                "name": "Can you provide vehicle transportation for cars and two-wheelers from Jeypore?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we operate specialized enclosed car carrier trucks and customized wooden bike transport crates with tire-locks and transit insurance for inter-state moves to Bhubaneswar, Raipur, Visakhapatnam, or Ranchi."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="jyp-wrap">
    <!-- Hero Banner -->
    <section class="jyp-hero-section">
        <h1 class="jyp-hero-title">Certified Packers and Movers in Jeypore</h1>
        <p class="jyp-hero-subtitle">Trusted household relocation, HAL Sunabeda aeronautical staff transfers, NALCO Damanjodi executive moves, and dependable Eastern Ghats highway transport across the commercial capital of Koraput district.</p>
        <div class="jyp-meta-badges">
            <span class="jyp-badge-item">✓ Koraput Highlands Commercial Hub</span>
            <span class="jyp-badge-item">✓ HAL Sunabeda & NALCO Approved Billing</span>
            <span class="jyp-badge-item">✓ Mountain Ghat Shockproof Strapping</span>
            <span class="jyp-badge-item">✓ 100% Zero Damage Guarantee</span>
        </div>
    </section>

    <!-- Main Two-Column Layout -->
    <div class="jyp-main-grid">
        <!-- Content Column -->
        <div class="jyp-content-col">
            <!-- Section 1: Overview & Local Geography -->
            <section class="jyp-section">
                <h2 class="jyp-section-title">Premier Relocation Services Across the Koraput Highlands</h2>
                <p class="jyp-lead-p">Jeypore stands proud as the largest commercial city and historical crown of the undivided Koraput district in Southern Odisha. Nestled at an elevation of over 2,100 feet in the breathtaking Eastern Ghats, Jeypore was the ancient royal seat of the King of Jeypore and has evolved into the commercial nerve center for the four southern districts of Koraput, Rayagada, Nabarangpur, and Malkangiri. Surrounded by lush hills, rich cashew plantations, spice estates, and the renowned Koraput-Araku organic coffee belt, the city hums with agricultural and commercial vibrancy.</p>
                <p class="jyp-body-p">Crucially, Jeypore serves as the vital residential and commercial gateway to two of India's most prestigious public sector defense and mineral complexes: the Hindustan Aeronautics Limited (HAL) aircraft engine division at Sunabeda (just 20 km away) and the National Aluminium Company Limited (NALCO) mega bauxite mining and alumina complex at Damanjodi (35 km away). In addition, the presence of the Central University of Odisha (CUO) at Koraput creates regular seasonal transfers of scientists, aeronautical engineers, university professors, military officers, and central banking executives.</p>
                <p class="jyp-body-p">Shree Ashirwad Packers and Movers provides tested mountain logistics across Jeypore. Navigating the ghat hairpin bends of National Highway 26 and National Highway 43 requires specialized heavy-duty vehicles, seasoned mountain drivers, and disciplined cargo strapping. Through our regional network, we connect Jeypore directly to <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-rayagada">Rayagada</a> (130 km), <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-berhampur">Berhampur</a> (320 km), <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bhubaneswar">Bhubaneswar</a> (490 km), Visakhapatnam, Raipur, and our corporate headquarters in <a href="<?php echo SITE_BASE_URL; ?>/">Ranchi</a>.</p>

                <div class="jyp-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods container loading in Jeypore" width="580" height="380" loading="lazy">
                    <div class="jyp-image-caption">Systematic loading and cargo bracing inside closed-body transport fleet in Jeypore.</div>
                </div>

                <div class="jyp-highlight-box">
                    <div class="jyp-highlight-title">Eastern Ghats Mountain Transit Mastery</div>
                    <p class="jyp-highlight-desc">Traversing the winding passes of NH-26 connecting Jeypore to Visakhapatnam and Raipur demands disciplined cargo anchoring. We deploy heavy-duty polyester ratchet straps and high-density foam padding inside our containers to eliminate cargo shift during steep climbs and downhill braking.</p>
                </div>
            </section>

            <!-- Section 2: Core Relocation Services -->
            <section class="jyp-section">
                <h2 class="jyp-section-title">Comprehensive Relocation Solutions Built for Jeypore</h2>
                <p class="jyp-lead-p">Every move in Jeypore is handled through modular, customizable moving services engineered to meet the highest safety benchmarks for families, corporate executives, and industrial enterprises:</p>

                <div class="jyp-card-grid">
                    <div class="jyp-feature-card">
                        <div class="jyp-card-head">🏠 Complete Household Moving</div>
                        <p class="jyp-card-text">Comprehensive wrapping, packing, and room-by-room labeling of home furnishings, crockery, clothing, books, and kitchen appliances with heavy-duty corrugated cartons.</p>
                    </div>
                    <div class="jyp-feature-card">
                        <div class="jyp-card-head">✈️ HAL & Defence Staff Transfers</div>
                        <p class="jyp-card-text">Specialized relocation services for aeronautical engineers, defence technicians, and administrative staff at HAL Sunabeda with complete claim documentation.</p>
                    </div>
                    <div class="jyp-feature-card">
                        <div class="jyp-card-head">⛏️ NALCO Damanjodi Corporate Moves</div>
                        <p class="jyp-card-text">Dedicated executive relocations for NALCO mining engineers, metallurgists, and technical staff with GST-compliant corporate invoices.</p>
                    </div>
                    <div class="jyp-feature-card">
                        <div class="jyp-card-head">🚗 Car Carrier & Bike Transportation</div>
                        <p class="jyp-card-text">Enclosed hydraulic vehicle carrier trucks with floor tire-chocks and safety tie-downs ensuring zero damage to sedans, SUVs, and luxury motorcycles.</p>
                    </div>
                    <div class="jyp-feature-card">
                        <div class="jyp-card-head">☕ Agro & Plantation Goods Freight</div>
                        <p class="jyp-card-text">Specialized protective transport and moisture-barrier wrapping for coffee beans, processed cashew consignments, spices, and agricultural machinery.</p>
                    </div>
                    <div class="jyp-feature-card">
                        <div class="jyp-card-head">🔒 Secure Temporary Warehousing</div>
                        <p class="jyp-card-text">Clean, pest-protected storage facilities with 24/7 CCTV surveillance, fire prevention equipment, and flexible monthly contracts for holding household goods.</p>
                    </div>
                </div>

                <div class="jyp-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="4-layer bubble packaging for household cartons in Jeypore" width="580" height="380" loading="lazy">
                    <div class="jyp-image-caption">Standardized 4-layer packaging utilizing bubble wrap, corrugated sheets, and edge protectors.</div>
                </div>

                <p class="jyp-body-p">Our technical crews manage the complete electrical disconnection, shockproof packaging, and reinstallation of delicate household electronics, including large LED screens, side-by-side refrigerators, microwave ovens, and automatic washing machines. Each appliance is protected with custom styrofoam corner protectors before loading.</p>
                <p class="jyp-body-p">For prized cultural possessions, fragile glassware, porcelain dinner sets, and ornamental mirror frames, our carpenters construct tailored wooden crates that isolate delicate cargo from sudden road shocks and highway vibrations during interstate transit.</p>
            </section>

            <!-- Section 3: Transparent Pricing & Cost Estimates -->
            <section class="jyp-section">
                <h2 class="jyp-section-title">Transparent Tariff Structure for Jeypore Relocations</h2>
                <p class="jyp-lead-p">Shree Ashirwad Packers and Movers upholds a strict zero-hidden-fee pricing policy. Every written proposal details packing material specifications, transport vehicle dimensions, labor allocation, road tolls, and transit insurance transparently before any packing begins.</p>
                <p class="jyp-body-p">For instant rate projections based on your exact inventory volume and transit distance, visit our online <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">Live Tariff Calculator</a> to project local and inter-district costs accurately.</p>

                <div class="jyp-table-wrap">
                    <table class="jyp-pricing-table">
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
                                <td>₹3,300 - ₹5,500</td>
                            </tr>
                            <tr>
                                <td>Local 2 BHK Apartment</td>
                                <td>30-40 Cartons + Major Appliances</td>
                                <td>Multi-layer Bubble & Heavy Corrugated</td>
                                <td>₹6,200 - ₹10,800</td>
                            </tr>
                            <tr>
                                <td>Local 3 BHK / Officer Bungalow</td>
                                <td>50+ Cartons + Complete Living & Bedroom Sets</td>
                                <td>Premium 5-Ply Cartons & Foam Wrap</td>
                                <td>₹11,500 - ₹17,500</td>
                            </tr>
                            <tr>
                                <td>Jeypore to Sunabeda / Koraput (20-25 km)</td>
                                <td>Inter-Town Public Sector Transfer</td>
                                <td>Dedicated Closed Container Truck</td>
                                <td>₹5,500 - ₹11,000</td>
                            </tr>
                            <tr>
                                <td>Jeypore to Damanjodi (NALCO Belt)</td>
                                <td>Corporate Executive Shifting</td>
                                <td>All-Weather Strapped Container Truck</td>
                                <td>₹6,500 - ₹13,000</td>
                            </tr>
                            <tr>
                                <td>Jeypore to Visakhapatnam (215 km)</td>
                                <td>Ghat Highway Interstate Route</td>
                                <td>Full Transit Wooden Crating & Wrap</td>
                                <td>₹13,500 - ₹26,000</td>
                            </tr>
                            <tr>
                                <td>Jeypore to Raipur / Jagdalpur</td>
                                <td>Interstate NH-26 / NH-43 Route</td>
                                <td>Dedicated GPS-Tracked Container</td>
                                <td>₹12,500 - ₹25,000</td>
                            </tr>
                            <tr>
                                <td>Jeypore to Bhubaneswar / Cuttack</td>
                                <td>Cross-Odisha State Highway Route</td>
                                <td>Heavy Duty 4-Layer Transit Wrap</td>
                                <td>₹21,000 - ₹42,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="jyp-highlight-box">
                    <div class="jyp-highlight-title">Hassle-Free Corporate Reimbursement Documentation</div>
                    <p class="jyp-highlight-desc">We issue authentic GST invoices, vehicle transit consignment notes (LR copies), transit insurance certificates, and itemized damage-free survey receipts fully compliant with HAL, NALCO, CUO, and central government HR claims.</p>
                </div>
            </section>

            <!-- Section 4: Systematic 5-Step Process -->
            <section class="jyp-section">
                <h2 class="jyp-section-title">Our Proven 5-Step Relocation Methodology</h2>
                <p class="jyp-lead-p">Every relocation project in Jeypore is executed using disciplined operating procedures honed over years of reliable service across Eastern India, ensuring total security from initial survey to final room placement:</p>

                <div class="jyp-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture dismantling and assembly in Jeypore" width="580" height="380" loading="lazy">
                    <div class="jyp-image-caption">Careful dismantling and packaging of modular bed frames, dining sets, and wardrobes.</div>
                </div>

                <div class="jyp-steps-container">
                    <div class="jyp-step-item">
                        <div class="jyp-step-number">1</div>
                        <div class="jyp-step-body">
                            <div class="jyp-step-heading">Pre-Move Survey & Free Estimation</div>
                            <div class="jyp-step-detail">Our relocation officer conducts an in-person survey in Parabeda, Bank Colony, or Bikram Nagar (or a video consultation) to calculate volume, assess staircases, and confirm truck parking.</div>
                        </div>
                    </div>
                    <div class="jyp-step-item">
                        <div class="jyp-step-number">2</div>
                        <div class="jyp-step-body">
                            <div class="jyp-step-heading">Standardized Multi-Layer Packaging</div>
                            <div class="jyp-step-detail">Trained packaging specialists wrap delicate chinaware, kitchen sets, electronics, and books in high-density bubble wrap, anti-static plastic film, and heavy-duty 5-ply cartons.</div>
                        </div>
                    </div>
                    <div class="jyp-step-item">
                        <div class="jyp-step-number">3</div>
                        <div class="jyp-step-body">
                            <div class="jyp-step-heading">Disciplined Loading & Cargo Anchoring</div>
                            <div class="jyp-step-detail">Items are loaded into weather-tight container vehicles using heavy-duty ramps. Heavier furniture pieces are lashed firmly with cargo belts to eliminate movement.</div>
                        </div>
                    </div>
                    <div class="jyp-step-item">
                        <div class="jyp-step-number">4</div>
                        <div class="jyp-step-body">
                            <div class="jyp-step-heading">Safe Transit & GPS Route Tracking</div>
                            <div class="jyp-step-detail">Your consignment travels across designated national and state highways under continuous monitoring, keeping you informed of transit milestones until final arrival.</div>
                        </div>
                    </div>
                    <div class="jyp-step-item">
                        <div class="jyp-step-number">5</div>
                        <div class="jyp-step-body">
                            <div class="jyp-step-heading">Unloading, Reassembly & Debris Removal</div>
                            <div class="jyp-step-detail">Upon delivery, our crew unloads goods, reassembles beds and tables, places appliances in designated rooms, and disposes of used packing materials responsibly.</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section 5: Key Neighborhoods Covered in Jeypore -->
            <section class="jyp-section">
                <h2 class="jyp-section-title">Key Localities & Residential Zones Served in Jeypore</h2>
                <p class="jyp-lead-p">Our local service network spans across all major residential sectors, commercial trade zones, and suburban belts of Jeypore municipality and the Koraput valley:</p>

                <ul class="jyp-checklist">
                    <li><strong>Parabeda & Bypass Chowk:</strong> Premier modern residential neighborhood featuring newly developed apartment complexes, doctor clinics, and private bungalows.</li>
                    <li><strong>Bank Colony & Surya Nagar:</strong> Established residential area accommodating bank managers, government officials, and senior educators with wide paved access roads.</li>
                    <li><strong>Bikram Nagar & Jayanagar:</strong> High-density family residential sectors close to reputed schools, temples, and daily consumer markets.</li>
                    <li><strong>MG Road & Main Market Street:</strong> Central commercial trading district where our logistics team conducts scheduled night moves to avoid busy day traffic.</li>
                    <li><strong>Mill Street & Umuri Industrial Area:</strong> Industrial and agro-processing zone hosting cashew factories, rice mills, and transport booking depots.</li>
                    <li><strong>Sunabeda & HAL Township Corridor:</strong> Aeronautical corporate township featuring executive quarters, officer mess halls, and technical staff residences.</li>
                    <li><strong>Damanjodi & NALCO Sector Housing:</strong> Mining executive township situated in the hills with specialized gated security protocols and hilly driveways.</li>
                    <li><strong>Borigumma & Kotpad Corridors:</strong> Satellite agricultural and handloom weaving hubs requiring regular domestic and inter-district cargo transfers.</li>
                </ul>

                <div class="jyp-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck for household goods in Jeypore" width="580" height="380" loading="lazy">
                    <div class="jyp-image-caption">Dedicated door-to-door delivery vehicles serving Jeypore urban sectors and surrounding Koraput valley townships.</div>
                </div>

                <p class="jyp-body-p">Whether you reside inside a gated industrial township requiring security gate clearance or a multi-level apartment without a freight lift, our ground supervisors coordinate documentation in advance and deploy hydraulic stair trolleys to guarantee zero wall scrapes or furniture damage.</p>
            </section>

            <!-- Section 6: Frequently Asked Questions -->
            <section class="jyp-section">
                <h2 class="jyp-section-title">Frequently Asked Questions: Jeypore Relocations</h2>
                <p class="jyp-lead-p">Find clear answers to common questions regarding home shifting, mountain ghat safety, and corporate employee transfers in Jeypore:</p>

                <div class="jyp-faq-accordion">
                    <div class="jyp-faq-item">
                        <div class="jyp-faq-question">What are the standard charges for household shifting in Jeypore?</div>
                        <div class="jyp-faq-answer">Local shifting in Jeypore typically ranges from ₹3,300 to ₹5,500 for a 1 BHK, ₹6,200 to ₹10,800 for a 2 BHK, and ₹11,500 to ₹17,500 for a 3 BHK home, depending on volume, packaging grade, and floor level.</div>
                    </div>
                    <div class="jyp-faq-item">
                        <div class="jyp-faq-question">Do you manage employee relocations to HAL Sunabeda and NALCO Damanjodi?</div>
                        <div class="jyp-faq-answer">Yes, we handle daily corporate relocations for Hindustan Aeronautics Limited (HAL) Sunabeda, NALCO Damanjodi, Central University of Odisha, and public sector banking staff with comprehensive GST invoices tailored for official claim reimbursements.</div>
                    </div>
                    <div class="jyp-faq-item">
                        <div class="jyp-faq-question">How do you navigate steep ghat roads connecting Jeypore, Koraput, and Visakhapatnam?</div>
                        <div class="jyp-faq-answer">Our trucks are driven by seasoned hill-route drivers trained in ghat navigation along NH-26. We utilize interior polyester cargo tie-downs and heavy-duty foam cushioning to keep cargo completely stable during mountain switchbacks.</div>
                    </div>
                    <div class="jyp-faq-item">
                        <div class="jyp-faq-question">Can you provide vehicle transportation for cars and two-wheelers from Jeypore?</div>
                        <div class="jyp-faq-answer">Yes, we operate specialized enclosed car carrier trucks and customized wooden bike transport crates with tire-locks and transit insurance for inter-state moves to Bhubaneswar, Raipur, Visakhapatnam, or Ranchi.</div>
                    </div>
                    <div class="jyp-faq-item">
                        <div class="jyp-faq-question">How many days in advance should I book my move in Jeypore?</div>
                        <div class="jyp-faq-answer">For local shifting within Jeypore or moves to Sunabeda/Koraput, booking 24 to 48 hours in advance is sufficient. For interstate relocations to Visakhapatnam, Raipur, or Kolkata, we recommend confirming your slot 3 to 5 days beforehand to ensure vehicle allocation and packaging material dispatch.</div>
                    </div>
                    <div class="jyp-faq-item">
                        <div class="jyp-faq-question">Are packing materials provided by your team or does the customer have to purchase them?</div>
                        <div class="jyp-faq-answer">All required packing supplies—including heavy-duty 5-ply cartons, multi-layer bubble wrap, edge corner guards, adhesive tapes, and waterproof tarpaulins—are brought by our team and included within your initial quoted estimate.</div>
                    </div>
                    <div class="jyp-faq-item">
                        <div class="jyp-faq-question">How do I track my shipment once the truck departs from Jeypore?</div>
                        <div class="jyp-faq-answer">Every intercity container truck is outfitted with real-time GPS tracking. Our 24/7 centralized dispatch team provides continuous milestone SMS and phone updates until your consignment reaches its destination.</div>
                    </div>
                </div>
            </section>

            <!-- Regional Cluster Linking Module -->
            <section class="jyp-cluster-section">
                <h3 class="jyp-cluster-title">Connected Southern Odisha & Regional Relocation Hubs</h3>
                <p class="jyp-cluster-desc">Shree Ashirwad Packers and Movers maintains an integrated regional network across Southern Odisha, Andhra Pradesh, and Chhattisgarh. Explore our connected city authority hubs:</p>
                <div class="jyp-cluster-grid">
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-rayagada" class="jyp-cluster-link">Movers in Rayagada (130 km)</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-berhampur" class="jyp-cluster-link">Movers in Berhampur (320 km)</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sambalpur" class="jyp-cluster-link">Movers in Sambalpur (360 km)</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bhubaneswar" class="jyp-cluster-link">Bhubaneswar Authority Hub (490 km)</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-cuttack" class="jyp-cluster-link">Movers in Cuttack (515 km)</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-rourkela" class="jyp-cluster-link">Movers in Rourkela (470 km)</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/" class="jyp-cluster-link">Ranchi Headquarters Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="jyp-cluster-link">Live Tariff Calculator</a>
                </div>
            </section>
        </div>

        <!-- Sidebar Column -->
        <aside class="jyp-sidebar-col">
            <div class="jyp-sidebar-box">
                <h3 class="jyp-sidebar-title">Book Your Jeypore Move</h3>
                <p class="jyp-body-p">Planning a move in Jeypore or transferring out from HAL Sunabeda or NALCO Damanjodi? Contact our relocation specialists today for an upfront, certified quotation.</p>
                <ul class="jyp-checklist">
                    <li>Free In-Person or Digital Survey</li>
                    <li>Zero Hidden Charges Guarantee</li>
                    <li>All-India Transit Coverage</li>
                    <li>24/7 Dedicated Move Coordinator</li>
                </ul>
                <a href="tel:+919835565233" class="jyp-cta-button">📞 Call: +91 9835565233</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="jyp-cta-button" style="margin-top: 10px; background: linear-gradient(135deg, #b45309 0%, #ea580c 100%);">📊 Calculate Charges Online</a>
            </div>

            <div class="jyp-sidebar-box">
                <h3 class="jyp-sidebar-title">Jeypore Operational Profile</h3>
                <ul class="jyp-checklist">
                    <li><strong>Key Highways:</strong> NH-26 Highway Corridor, NH-43</li>
                    <li><strong>Core Areas:</strong> Parabeda, Bank Colony, Bikram Nagar, MG Road</li>
                    <li><strong>Key Plants:</strong> HAL Sunabeda, NALCO Damanjodi, Agro Processing</li>
                    <li><strong>Packaging:</strong> Ghat-Reinforced Strapping, 5-Ply Box</li>
                    <li><strong>Billing:</strong> 100% GST Compliant HR Claim Support</li>
                </ul>
            </div>

            <div class="jyp-sidebar-box">
                <h3 class="jyp-sidebar-title">Corporate Headquarters</h3>
                <p class="jyp-body-p"><strong>Shree Ashirwad Packers and Movers</strong><br>
                Corporate HQ: Ashok Nagar, Near Birsa Munda Airport Road, Ranchi, Jharkhand.<br>
                Regional Jeypore Hub: NH-26 Bypass, Parabeda Chowk, Jeypore, Koraput, Odisha - 764001.<br>
                Helpline: +91 9835565233<br>
                Email: info@shreeashirwadpackers.com</p>
                <a href="<?php echo SITE_BASE_URL; ?>/" class="jyp-cluster-link" style="text-align: center;">View Ranchi Authority Hub</a>
            </div>
        </aside>
    </div>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>
</body>
</html>
