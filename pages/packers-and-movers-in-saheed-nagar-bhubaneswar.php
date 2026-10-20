<?php
/**
 * Page: Packers and Movers in Saheed Nagar Bhubaneswar
 * Description: Dependable commercial shifting, high-street showroom moving, residential relocation, and vehicle transport in Saheed Nagar, Bhubaneswar.
 * Author: Shree Ashirwad Packers and Movers
 * Meta: 100% Handcrafted Tier-2 Hyper-Local Authority Hub, Google Compliant Schemas, Scoped CSS Parity
 */
defined('ROOT_PATH') OR define('ROOT_PATH', realpath(__DIR__ . '/..'));
require_once ROOT_PATH . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packers and Movers in Saheed Nagar Bhubaneswar | Commercial & Home</title>
    <meta name="description" content="Top-rated packers and movers in Saheed Nagar, Bhubaneswar. Professional office shifting, Janpath retail moving, household relocation, and vehicle transport with 100% safety.">
    <meta name="keywords" content="packers and movers in saheed nagar bhubaneswar, movers and packers saheed nagar, office shifting janpath bhubaneswar, house relocation rupali square, packers near maharishi college">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-saheed-nagar-bhubaneswar">
    <meta property="og:title" content="Packers and Movers in Saheed Nagar Bhubaneswar | Shree Ashirwad Packers">
    <meta property="og:description" content="Trusted commercial moving, residential shifting, and vehicle transport across Saheed Nagar, Janpath, and Rupali Square with zero damage guarantee.">
    <meta property="og:url" content="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-saheed-nagar-bhubaneswar">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <style>
        /* Scoped CSS for Saheed Nagar Bhubaneswar Local Hub - shd prefix */
        .shd-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px 40px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.6;
        }
        .shd-hero-section {
            background: linear-gradient(135deg, #1e3a8a 0%, #0d9488 100%);
            color: #ffffff;
            border-radius: 14px;
            padding: 40px 25px;
            margin-bottom: 30px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .shd-hero-title {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.25;
            color: #ffffff;
        }
        .shd-hero-subtitle {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: #e0f2fe;
            max-width: 900px;
        }
        .shd-meta-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }
        .shd-badge-item {
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.35);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            color: #ffffff;
        }
        .shd-main-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            margin-bottom: 35px;
        }
        @media (max-width: 900px) {
            .shd-main-grid {
                grid-template-columns: 1fr;
            }
        }
        .shd-content-col {
            min-width: 0;
        }
        .shd-sidebar-col {
            min-width: 0;
        }
        .shd-section {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 28px 24px;
            margin-bottom: 28px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .shd-section-title {
            font-size: 1.65rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 18px;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
        }
        .shd-lead-p {
            font-size: 1.05rem;
            color: #334155;
            margin-bottom: 16px;
        }
        .shd-body-p {
            font-size: 0.98rem;
            color: #475569;
            margin-bottom: 16px;
        }
        .shd-image-container {
            max-width: 580px;
            margin: 22px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border: 1px solid #cbd5e1;
            background: #f8fafc;
        }
        .shd-image-container img {
            width: 100%;
            max-height: 380px;
            object-fit: cover;
            display: block;
        }
        .shd-image-caption {
            padding: 10px 14px;
            font-size: 0.85rem;
            color: #475569;
            text-align: center;
            background: #f1f5f9;
            border-top: 1px solid #e2e8f0;
            font-weight: 500;
        }
        .shd-highlight-box {
            background: #f0fdf4;
            border-left: 4px solid #16a34a;
            padding: 16px 20px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
        }
        .shd-highlight-title {
            font-weight: 700;
            color: #166534;
            margin-bottom: 6px;
            font-size: 1.02rem;
        }
        .shd-highlight-desc {
            font-size: 0.94rem;
            color: #14532d;
            margin: 0;
        }
        .shd-card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 18px;
            margin: 22px 0;
        }
        .shd-feature-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 18px;
            transition: all 0.2s ease;
        }
        .shd-feature-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.06);
            border-color: #cbd5e1;
        }
        .shd-card-head {
            font-weight: 700;
            font-size: 1.05rem;
            color: #0f766e;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .shd-card-text {
            font-size: 0.92rem;
            color: #475569;
            margin: 0;
            line-height: 1.5;
        }
        .shd-table-wrap {
            overflow-x: auto;
            margin: 22px 0;
        }
        .shd-pricing-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.94rem;
        }
        .shd-pricing-table th {
            background: #1e3a8a;
            color: #ffffff;
            text-align: left;
            padding: 12px 14px;
            font-weight: 600;
            border: 1px solid #1e3a8a;
        }
        .shd-pricing-table td {
            padding: 11px 14px;
            border: 1px solid #e2e8f0;
            color: #334155;
        }
        .shd-pricing-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .shd-pricing-table tr:hover {
            background: #f1f5f9;
        }
        .shd-steps-container {
            display: flex;
            flex-direction: column;
            gap: 14px;
            margin: 20px 0;
        }
        .shd-step-item {
            display: flex;
            gap: 14px;
            align-items: flex-start;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 14px 16px;
        }
        .shd-step-number {
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
        .shd-step-body {
            flex: 1;
        }
        .shd-step-heading {
            font-weight: 700;
            font-size: 0.98rem;
            color: #1e293b;
            margin-bottom: 4px;
        }
        .shd-step-desc {
            font-size: 0.91rem;
            color: #475569;
            margin: 0;
        }
        .shd-faq-accordion {
            margin: 20px 0;
        }
        .shd-faq-item {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            margin-bottom: 12px;
            overflow: hidden;
        }
        .shd-faq-question {
            background: #f8fafc;
            padding: 14px 18px;
            font-weight: 600;
            font-size: 1rem;
            color: #1e3a8a;
            cursor: pointer;
            border-bottom: 1px solid #e2e8f0;
        }
        .shd-faq-answer {
            padding: 14px 18px;
            font-size: 0.93rem;
            color: #475569;
            background: #ffffff;
            line-height: 1.6;
        }
        .shd-sidebar-box {
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            padding: 22px 18px;
            margin-bottom: 24px;
        }
        .shd-sidebar-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 14px;
            border-bottom: 2px solid #0d9488;
            padding-bottom: 6px;
        }
        .shd-cta-button {
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
        .shd-cta-button:hover {
            background: #0f766e;
            color: #ffffff;
        }
        .shd-cluster-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 22px;
            margin-top: 30px;
        }
        .shd-cluster-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 14px;
        }
        .shd-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 12px;
        }
        .shd-cluster-link {
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
        .shd-cluster-link:hover {
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
        "name": "Shree Ashirwad Packers and Movers Saheed Nagar",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "@id": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-saheed-nagar-bhubaneswar#movingcompany",
        "url": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-saheed-nagar-bhubaneswar",
        "telephone": "+919334460424",
        "priceRange": "₹3,400 - ₹56,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Janpath, Near Maharishi College & Saheed Nagar Market",
            "addressLocality": "Saheed Nagar, Bhubaneswar",
            "addressRegion": "Odisha",
            "postalCode": "751007",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 20.2891,
            "longitude": 85.8435
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
                "name": "Bhubaneswar",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bhubaneswar"
            },
            {
                "@type": "ListItem",
                "position": 4,
                "name": "Saheed Nagar",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-saheed-nagar-bhubaneswar"
            }
        ]
    }
    </script>

    <!-- Schema 3: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Commercial Relocation & Premium Household Shifting",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers Saheed Nagar"
        },
        "areaServed": {
            "@type": "AdministrativeArea",
            "name": "Saheed Nagar, Janpath, Rupali Square, Bhubaneswar, Odisha"
        },
        "description": "Professional commercial office moving, high-street showroom relocation, residential shifting, and vehicle transport across Saheed Nagar and Janpath."
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
                "name": "What are the local relocation rates in Saheed Nagar, Bhubaneswar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local residential shifting in Saheed Nagar (including Maharishi College Road and Rupali Square) starts from ₹3,400 to ₹6,800 for a 1 BHK flat, ₹6,000 to ₹12,500 for a 2 BHK apartment, and ₹9,200 to ₹19,000 for a 3 BHK family home. Rates include heavy packaging materials, labor crews, and mini-truck transport."
                }
            },
            {
                "@type": "Question",
                "name": "How do you handle commercial office and showroom shifting along Janpath?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We execute commercial and retail shifting during night hours or weekends to prevent business downtime. We deploy barcode-labeled cartons, padded display case wraps, heavy file crate organizers, and specialized trolleys to protect glass showcases and IT electronics."
                }
            },
            {
                "@type": "Question",
                "name": "Can you shift household goods from Saheed Nagar to Ranchi, Kolkata, or Patna?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we run daily direct enclosed container vehicles from Saheed Nagar connecting directly via National Highway 16 and NH 20. Shipments receive 5-layer heavy wrapping, real-time GPS tracking, and comprehensive transit risk insurance with doorstep delivery."
                }
            },
            {
                "@type": "Question",
                "name": "How do you protect fragile crockery, expensive electronics, and home temple idols?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We utilize 80-micron virgin air bubble sheets, high-density thermocol corners, heavy corrugated cartons, and custom wooden crating for delicate kitchen glassware, LED TVs, acoustic audio systems, and consecrated pooja mandirs."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="shd-wrap">
    <!-- Hero Banner -->
    <section class="shd-hero-section">
        <h1 class="shd-hero-title">Packers and Movers in Saheed Nagar Bhubaneswar</h1>
        <p class="shd-hero-subtitle">Bhubaneswar's premier commercial and residential moving partner. Dependable office shifting, Janpath high-street showroom relocations, residential moving, and nationwide container transit.</p>
        <div class="shd-meta-badges">
            <span class="shd-badge-item">✓ Central Janpath Commercial Core</span>
            <span class="shd-badge-item">✓ Corporate & Showroom Moving Specialist</span>
            <span class="shd-badge-item">✓ Maharishi College & Rupali Square Zone</span>
            <span class="shd-badge-item">✓ 100% Transit Risk Protection</span>
        </div>
    </section>

    <!-- Main Content Layout -->
    <div class="shd-main-grid">
        <div class="shd-content-col">
            <!-- Section 1: Overview & Neighborhood Profile -->
            <section class="shd-section">
                <h2 class="shd-section-title">Reliable Relocation Services in Saheed Nagar, Bhubaneswar</h2>
                <p class="shd-lead-p">Saheed Nagar represents the beating commercial heart and premier retail downtown of Bhubaneswar. Bisected by the bustling Janpath arterial boulevard and anchored by landmark institutions like Maharishi College of Natural Law, Rupali Square, and the expansive Saheed Nagar Commercial Market, this prestigious locality hosts multinational brand showrooms, corporate legal chambers, financial consultancies, upscale multi-specialty polyclinics, and affluent traditional residential colonies. Positioned within minutes of Master Canteen railway station and the Utkal University Vani Vihar campus, Saheed Nagar demands packing and moving services characterized by punctuality, specialized handling, and flexible scheduling.</p>
                
                <p class="shd-body-p">At Shree Ashirwad Packers and Movers, we bring over sixteen years of professional relocation mastery to Saheed Nagar. Whether you are relocating a corporate headquarters near Janpath, expanding a high-street retail boutique, or transitioning your family into an established residence near Maharishi College Road, our certified packing specialists deliver flawless execution. Operating in seamless synergy with our parent city authority at <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bhubaneswar">Packers and Movers in Bhubaneswar</a>, sister central hub at <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-nayapalli-bhubaneswar">Packers and Movers in Nayapalli Bhubaneswar</a>, and corporate headquarters via <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi">Packers and Movers in Ranchi</a>, we provide nationwide moving reliability.</p>

                <div class="shd-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods truck loading in Saheed Nagar Bhubaneswar">
                    <div class="shd-image-caption">Systematic loading of palletized cartons and heavy appliances in Saheed Nagar.</div>
                </div>

                <div class="shd-highlight-box">
                    <div class="shd-highlight-title">Why Saheed Nagar Businesses & Residents Trust Shree Ashirwad</div>
                    <div class="shd-highlight-desc">From executing after-hours commercial moves on busy Janpath to managing white-glove residential packing in quiet colony avenues, our certified teams guarantee zero disruption, transparent billing, and zero cargo damage.</div>
                </div>

                <p class="shd-body-p">Commercial moves along Janpath and Rupali Square require specialized logistical strategy due to continuous daytime traffic and strict parking restrictions. Our operations management team schedules large vehicle loading during designated evening and early morning hours, deploying compact feeder trucks to ensure that your business operates without interruption or municipal delays.</p>

                <p class="shd-body-p">Furthermore, Saheed Nagar’s central location provides direct, swift access to the Cuttack-Puri highway corridor and National Highway 16 via Vani Vihar and Rasulgarh. Our enclosed GPS-tracked container trucks leverage this prime connectivity to deliver rapid interstate relocations toward Kolkata, Jamshedpur, Ranchi, Berhampur, and Bangalore with verified transit risk protection.</p>
            </section>

            <!-- Section 2: Comprehensive Relocation Services -->
            <section class="shd-section">
                <h2 class="shd-section-title">Specialized Relocation Capabilities in Saheed Nagar</h2>
                <p class="shd-lead-p">We provide end-to-end relocation solutions tailored to the diverse requirements of families, retail showrooms, corporate offices, medical professionals, and financial consultancies across Saheed Nagar.</p>

                <div class="shd-card-grid">
                    <div class="shd-feature-card">
                        <div class="shd-card-head">🏢 Commercial Office & Tech Relocation</div>
                        <p class="shd-card-text">Specialized corporate moving with anti-static wrapping for server racks, CPUs, network hardware, modular workstations, and confidential file records.</p>
                    </div>
                    <div class="shd-feature-card">
                        <div class="shd-card-head">🛍️ Retail Showroom & High-Street Moving</div>
                        <p class="shd-card-text">Padded packaging for glass display cases, luxury retail fixtures, inventory stockrooms, and lighting displays along Janpath with zero transit loss.</p>
                    </div>
                    <div class="shd-feature-card">
                        <div class="shd-card-head">🏠 Premium Residential Household Shifting</div>
                        <p class="shd-card-text">Complete home relocation including multi-layer packing of fragile kitchenware, furniture dismantling, wardrobe boxes, and careful placement in your new residence.</p>
                    </div>
                    <div class="shd-feature-card">
                        <div class="shd-card-head">🚗 Vehicle Transportation & Carrier Moving</div>
                        <p class="shd-card-text">Doorstep vehicle pickup and enclosed container carrier transit for motorbikes and cars with inspection reports and full transit insurance coverage.</p>
                    </div>
                </div>

                <div class="shd-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Bubble wrap packaging for fragile items in Saheed Nagar">
                    <div class="shd-image-caption">5-layer packaging using virgin air-bubble sheets and edge protectors in Saheed Nagar.</div>
                </div>

                <p class="shd-body-p">Our packaging material inventory is never compromised. We utilize premium 3-ply and 5-ply virgin kraft cardboard cartons, heavy-duty 80-micron air bubble wrapping, moisture-resistant stretch film, high-density thermocol sheets, and customized wooden crates for marble statues, delicate crystal chandeliers, and high-value paintings.</p>

                <p class="shd-body-p">For legal consultancies, Chartered Accountant firms, and polyclinics in Saheed Nagar, our dedicated moving supervisors oversee the entire packing process with itemized inventory dockets, tagging every box so unpacking and organizing at your new office is completed without confusion.</p>
            </section>

            <!-- Section 3: Transparent Pricing & Tariff Calculator -->
            <section class="shd-section">
                <h2 class="shd-section-title">Saheed Nagar Moving Charges & Standard Price Chart</h2>
                <p class="shd-lead-p">We uphold 100% pricing transparency. With Shree Ashirwad Packers and Movers, you receive a detailed, itemized written estimate with no hidden costs, surprise toll surcharges, or last-minute unloading extras.</p>

                <div class="shd-table-wrap">
                    <table class="shd-pricing-table">
                        <thead>
                            <tr>
                                <th>Move Type / Household Size</th>
                                <th>Local Shifting (Within Bhubaneswar)</th>
                                <th>Interstate Moving (To Ranchi / Kolkata)</th>
                                <th>Packaging Quality Level</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>1 BHK Apartment</strong></td>
                                <td>₹3,400 - ₹6,800</td>
                                <td>₹10,500 - ₹21,000</td>
                                <td>Standard 3-Layer Heavy Wrap</td>
                            </tr>
                            <tr>
                                <td><strong>2 BHK Apartment</strong></td>
                                <td>₹6,000 - ₹12,500</td>
                                <td>₹16,000 - ₹31,000</td>
                                <td>Premium 5-Layer Multi-Shield</td>
                            </tr>
                            <tr>
                                <td><strong>3 BHK Family House / Flat</strong></td>
                                <td>₹9,200 - ₹19,000</td>
                                <td>₹23,500 - ₹45,000</td>
                                <td>Executive Ultra-Shield + Crating</td>
                            </tr>
                            <tr>
                                <td><strong>4 BHK / Luxury Penthouse / Villa</strong></td>
                                <td>₹14,000 - ₹26,000</td>
                                <td>₹33,000 - ₹56,000</td>
                                <td>White-Glove VIP Full Crated</td>
                            </tr>
                            <tr>
                                <td><strong>Two-Wheeler (Motorcycle / Scooter)</strong></td>
                                <td>₹1,400 - ₹2,700</td>
                                <td>₹3,600 - ₹7,200</td>
                                <td>Triple Wrap + Wheel Protection</td>
                            </tr>
                            <tr>
                                <td><strong>Four-Wheeler (Hatchback / Sedan / SUV)</strong></td>
                                <td>₹2,500 - ₹4,400</td>
                                <td>₹9,200 - ₹19,200</td>
                                <td>Enclosed Dedicated Car Trailer</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="shd-highlight-box">
                    <div class="shd-highlight-title">Estimate Moving Costs Accurately</div>
                    <div class="shd-highlight-desc">Calculate your customized moving expenses based on volume, floor elevation, elevator availability, and transit distance by using our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">Live Moving Charges Calculator</a>.</div>
                </div>

                <p class="shd-body-p">Actual pricing is determined by inventory volume, the presence of heavy appliances like double-door refrigerators or solid teakwood wardrobes, fragile glassware proportion, staircase vs elevator handling, and total road distance. Contact our Saheed Nagar helpdesk for an exact no-obligation written quote.</p>

                <p class="shd-body-p">Every customer in Saheed Nagar receives an itemized moving docket that outlines vehicle freight, material costs, labor expenses, and optional transit risk insurance coverage with zero ambiguity. We never demand cash surcharges upon arrival at your destination tower.</p>
            </section>

            <!-- Section 4: Systematic 6-Step Relocation Process -->
            <section class="shd-section">
                <h2 class="shd-section-title">Our Proven 6-Step Moving Methodology</h2>
                <p class="shd-lead-p">Every move executed by Shree Ashirwad Packers and Movers adheres to a systematic operational workflow designed to ensure complete safety and timely delivery.</p>

                <div class="shd-steps-container">
                    <div class="shd-step-item">
                        <div class="shd-step-number">1</div>
                        <div class="shd-step-body">
                            <div class="shd-step-heading">Pre-Move Survey & Accurate Quotation</div>
                            <p class="shd-step-desc">Our moving surveyor conducts a thorough on-site or digital video assessment of all household goods, assessing fragile items and vehicle requirements to produce an exact written estimate.</p>
                        </div>
                    </div>
                    <div class="shd-step-item">
                        <div class="shd-step-number">2</div>
                        <div class="shd-step-body">
                            <div class="shd-step-heading">Standardized Multi-Layer Packing</div>
                            <p class="shd-step-desc">Our certified packing crew arrives on time with high-grade bubble wrap, corrugated sheets, waterproof film, and specialized boxes, packing every item according to fragility standards.</p>
                        </div>
                    </div>
                    <div class="shd-step-item">
                        <div class="shd-step-number">3</div>
                        <div class="shd-step-body">
                            <div class="shd-step-heading">Furniture Dismantling & Electronics Wrapping</div>
                            <p class="shd-step-desc">Trained carpenters systematically dismantle king-sized beds, modular wardrobes, and dining tables, carefully bagging all hardware, while televisions and ACs receive dedicated cushioned padding.</p>
                        </div>
                    </div>
                    <div class="shd-step-item">
                        <div class="shd-step-number">4</div>
                        <div class="shd-step-body">
                            <div class="shd-step-heading">Secure Container Truck Loading</div>
                            <p class="shd-step-desc">Boxes and wrapped furniture are loaded into our weather-proof enclosed container truck using heavy-duty ratchet straps and cushioning to prevent shifting during transit.</p>
                        </div>
                    </div>
                    <div class="shd-step-item">
                        <div class="shd-step-number">5</div>
                        <div class="shd-step-body">
                            <div class="shd-step-heading">Highway Transit with Live Tracking</div>
                            <p class="shd-step-desc">Our experienced drivers follow designated highway routes along NH 16 and NH 20, providing real-time location updates so you remain informed about your shipment's progress.</p>
                        </div>
                    </div>
                    <div class="shd-step-item">
                        <div class="shd-step-number">6</div>
                        <div class="shd-step-body">
                            <div class="shd-step-heading">Doorstep Unloading, Unpacking & Furniture Assembly</div>
                            <p class="shd-step-desc">Upon arrival at your new residence, our crew carefully unloads all items into designated rooms, reassembles dismantled furniture, and removes discarded packing materials.</p>
                        </div>
                    </div>
                </div>

                <div class="shd-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Bed furniture dismantling and modular packing in Saheed Nagar">
                    <div class="shd-image-caption">Professional furniture dismantling, hardware tagging, and protective wrapping in Saheed Nagar.</div>
                </div>

                <p class="shd-body-p">This meticulous 6-stage protocol eliminates the common risks associated with unorganized movers, such as broken crockery, scratched dining tabletops, or misplaced screws during bed reassembly. Our supervisors oversee every stage with clipboard checklists.</p>

                <p class="shd-body-p">Our in-house carpenters possess extensive experience handling modern modular furniture brands, motorized recliner sofas, and custom wall-mounted entertainment consoles commonly installed in modern apartments, guaranteeing that every piece is carefully re-anchored at your new flat.</p>
            </section>

            <!-- Section 5: Key Neighborhoods & City Coverage -->
            <section class="shd-section">
                <h2 class="shd-section-title">Major Localities & Residential Zones We Serve in Saheed Nagar</h2>
                <p class="shd-lead-p">Our local moving teams possess in-depth familiarity with Saheed Nagar's geography, municipal parking rules, commercial high-street protocols, and highway shortcuts. We maintain daily operations across all major sectors:</p>

                <div class="shd-card-grid">
                    <div class="shd-feature-card">
                        <div class="shd-card-head">📍 Janpath High-Street Corridor</div>
                        <p class="shd-card-text">Serving retail showrooms, commercial office complexes, and banks along the city’s premier central commercial thoroughfare with after-hours shifting.</p>
                    </div>
                    <div class="shd-feature-card">
                        <div class="shd-card-head">📍 Maharishi College & Market Environs</div>
                        <p class="shd-card-text">Affluent residential sectors featuring independent homes, duplexes, and apartment complexes with white-glove household moving.</p>
                    </div>
                    <div class="shd-feature-card">
                        <div class="shd-card-head">📍 Rupali Square & Vani Vihar Border</div>
                        <p class="shd-card-text">Convenient transit intersection adjacent to Utkal University, offering fast moving access for academic faculty and commercial offices.</p>
                    </div>
                    <div class="shd-feature-card">
                        <div class="shd-card-head">📍 Satya Nagar & Master Canteen Environs</div>
                        <p class="shd-card-text">Historic administrative and corporate enclave near Bhubaneswar railway station with dedicated doorstep packing and transit logistics.</p>
                    </div>
                </div>

                <div class="shd-image-container">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Saheed Nagar Bhubaneswar">
                    <div class="shd-image-caption">Dedicated closed-body container truck arriving for doorstep delivery in Saheed Nagar.</div>
                </div>

                <p class="shd-body-p">Whether you reside in a classic independent home near Maharishi College or operate a multi-storey retail showroom along Janpath, our fleet of small utility vehicles (Mahindra Bolero Maxi Truck) and full-sized closed container trucks guarantees uninterrupted doorstep access.</p>

                <p class="shd-body-p">In addition, our local moving coordinators assist with Society Gate passes, commercial building management clearances, and parking clearance documentation, ensuring that your moving day in Saheed Nagar proceeds without a single delay.</p>
            </section>

            <!-- Section 6: Frequently Asked Questions -->
            <section class="shd-section">
                <h2 class="shd-section-title">Frequently Asked Questions — Packers and Movers in Saheed Nagar</h2>
                <div class="shd-faq-accordion">
                    <div class="shd-faq-item">
                        <div class="shd-faq-question">What are the local relocation rates in Saheed Nagar, Bhubaneswar?</div>
                        <div class="shd-faq-answer">Local residential shifting in Saheed Nagar (including Maharishi College Road and Rupali Square) starts from ₹3,400 to ₹6,800 for a 1 BHK flat, ₹6,000 to ₹12,500 for a 2 BHK apartment, and ₹9,200 to ₹19,000 for a 3 BHK family home. Rates include heavy packaging materials, labor crews, and mini-truck transport.</div>
                    </div>
                    <div class="shd-faq-item">
                        <div class="shd-faq-question">How do you handle commercial office and showroom shifting along Janpath?</div>
                        <div class="shd-faq-answer">We execute commercial and retail shifting during night hours or weekends to prevent business downtime. We deploy barcode-labeled cartons, padded display case wraps, heavy file crate organizers, and specialized trolleys to protect glass showcases and IT electronics.</div>
                    </div>
                    <div class="shd-faq-item">
                        <div class="shd-faq-question">Can you shift household goods from Saheed Nagar to Ranchi, Kolkata, or Patna?</div>
                        <div class="shd-faq-answer">Yes, we run daily direct enclosed container vehicles from Saheed Nagar connecting directly via National Highway 16 and NH 20. Shipments receive 5-layer heavy wrapping, real-time GPS tracking, and comprehensive transit risk insurance with doorstep delivery.</div>
                    </div>
                    <div class="shd-faq-item">
                        <div class="shd-faq-question">How do you protect fragile crockery, expensive electronics, and home temple idols?</div>
                        <div class="shd-faq-answer">We utilize 80-micron virgin air bubble sheets, high-density thermocol corners, heavy corrugated cartons, and custom wooden crating for delicate kitchen glassware, LED TVs, acoustic audio systems, and consecrated pooja mandirs.</div>
                    </div>
                </div>
            </section>

            <!-- Connected Corridors & Regional Cluster Module -->
            <div class="shd-cluster-card">
                <h3 class="shd-cluster-title">Connected Transport Corridors & Sister Authority Hubs</h3>
                <p class="shd-body-p">Discover our high-frequency direct relocation routes connecting Saheed Nagar across Bhubaneswar, Odisha, Jharkhand, and Eastern India:</p>
                <div class="shd-cluster-grid">
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bhubaneswar" class="shd-cluster-link">Bhubaneswar Parent Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-nayapalli-bhubaneswar" class="shd-cluster-link">Nayapalli Central Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patia-bhubaneswar" class="shd-cluster-link">Patia Infocity Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-chandrasekharpur-bhubaneswar" class="shd-cluster-link">Chandrasekharpur Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-khandagiri-bhubaneswar" class="shd-cluster-link">Khandagiri Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-bhubaneswar-packers-and-movers" class="shd-cluster-link">Ranchi to Bhubaneswar Route</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/bhubaneswar-to-ranchi-packers-and-movers" class="shd-cluster-link">Bhubaneswar to Ranchi Route</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi" class="shd-cluster-link">Ranchi Corporate HQ</a>
                </div>
            </div>
        </div>

        <!-- Sidebar Column -->
        <aside class="shd-sidebar-col">
            <div class="shd-sidebar-box">
                <h3 class="shd-sidebar-title">Saheed Nagar Desk</h3>
                <p class="shd-body-p">Planning a move in Saheed Nagar, Janpath, Maharishi College Road, or Rupali Square? Reach out to our team for an immediate quotation.</p>
                <ul style="padding-left: 20px; margin-bottom: 15px; font-size: 0.93rem; color: #334155;">
                    <li><strong>Desk Address:</strong> Janpath, Near Saheed Nagar Market, Bhubaneswar</li>
                    <li><strong>Service Hours:</strong> 6:00 AM - 10:00 PM (Daily)</li>
                    <li><strong>Helpline:</strong> +91 9334460424</li>
                    <li><strong>Email:</strong> info@shreeashirwadpackers.com</li>
                </ul>
                <a href="<?php echo SITE_BASE_URL; ?>/contact" class="shd-cta-button">Request Free Moving Quote</a>
            </div>

            <div class="shd-sidebar-box">
                <h3 class="shd-sidebar-title">Key Coverage Localities</h3>
                <ul style="padding-left: 20px; font-size: 0.91rem; color: #475569; line-height: 1.8;">
                    <li>Janpath Commercial High-Street</li>
                    <li>Saheed Nagar Market Zone</li>
                    <li>Maharishi College Road Enclave</li>
                    <li>Rupali Square Intersection</li>
                    <li>Satya Nagar Border Colony</li>
                    <li>Vani Vihar & Utkal University Belt</li>
                    <li>Master Canteen Station Approach</li>
                    <li>Kharvela Nagar & Unit 3 Edge</li>
                </ul>
            </div>
        </aside>
    </div>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>
</body>
</html>
