<?php
/**
 * Page Name: Ranchi to Vijayawada Packers and Movers
 * Route Slug: ranchi-to-vijayawada-packers-and-movers
 * Group: South India IT & Industrial Hubs (Route 55)
 * Distance: ~1,090 km via NH-43 / NH-16 (Coastal Golden Quadrilateral)
 * Focus Keywords: ranchi to vijayawada packers and movers, packers and movers ranchi to vijayawada, household shifting ranchi to vijayawada, car transport ranchi to vijayawada, amaravati capital movers from ranchi, hcl gannavaram relocation, benz circle vijayawada packers
 */

// Define page-specific metadata
$page_title = "Ranchi to Vijayawada Packers and Movers | Fast 1,090 km Relocation";
$page_description = "Reliable Ranchi to Vijayawada (Amaravati) packers and movers. Safe household moving, car transport, HCL/AIIMS transfers & transit insurance. Direct container fleet. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/ranchi-to-vijayawada-packers-and-movers";
$page_keywords = "ranchi to vijayawada packers and movers, packers and movers ranchi to vijayawada, household shifting ranchi to vijayawada, car transport ranchi to amaravati, bike courier ranchi to vijayawada, benz circle packers, gannavaram it movers, auto nagar vijayawada";

$current_page = 'services';
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/seo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:url" content="<?php echo $canonical_url; ?>">
    <meta property="og:type" content="article">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg">
    <meta property="og:image:alt" content="Ranchi to Vijayawada Packers and Movers - Shree Ashirwad Intercity Logistics">
    <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg">

    <!-- Favicon & Touch Icons -->
    <link rel="icon" type="image/png" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
    <link rel="shortcut icon" href="<?php echo SITE_BASE_URL; ?>/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Structured Data 1: MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Ranchi to Vijayawada",
        "url": "<?php echo $canonical_url; ?>",
        "logo": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
        "image": "<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg",
        "description": "Professional intercity packers and movers service connecting Ranchi (Jharkhand) to Vijayawada / Amaravati (Andhra Pradesh). Safe household moving, car carriers, IT corporate transfers, and transit insurance.",
        "telephone": "+91-8409531615",
        "alternateTelephone": "+91-9835565233",
        "email": "enquiry@shreeashirwadpackers.com",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Harmu Road, Near Overbridge",
            "addressLocality": "Ranchi",
            "addressRegion": "Jharkhand",
            "postalCode": "834001",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 23.3441,
            "longitude": 85.3096
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Ranchi",
                "sameAs": "https://en.wikipedia.org/wiki/Ranchi"
            },
            {
                "@type": "City",
                "name": "Vijayawada",
                "sameAs": "https://en.wikipedia.org/wiki/Vijayawada"
            }
        ],
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            "opens": "07:00",
            "closes": "22:00"
        },
        "priceRange": "₹16,500 - ₹52,000"
    }
    </script>

    <!-- Structured Data 2: BreadcrumbList Schema -->
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
                "name": "Intercity Routes",
                "item": "<?php echo SITE_BASE_URL; ?>/services"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Ranchi to Vijayawada Packers and Movers",
                "item": "<?php echo $canonical_url; ?>"
            }
        ]
    }
    </script>

    <!-- Structured Data 3: Service Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Intercity Packers and Movers",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "City",
            "name": "Vijayawada"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Ranchi to Vijayawada Relocation Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Ranchi to Vijayawada Household Shifting",
                        "description": "5-layer packaging, furniture dismantling, all-weather container transport, and doorstep placement across Vijayawada and Amaravati."
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Car Carrier Transport Ranchi to Vijayawada",
                        "description": "Enclosed car carriers with hydraulic ramps, wheel chocks, digital condition inspection, and transit risk insurance."
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Two-Wheeler Bike Courier Ranchi to Vijayawada",
                        "description": "Customized foam wrapping, wooden safety crating, mirror protection, and direct residential delivery."
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "IT & Government Administrative Relocation",
                        "description": "Specialized relocation packages for corporate executives, HCL Gannavaram employees, and government officials transferring to Amaravati."
                    }
                }
            ]
        }
    }
    </script>

    <!-- Structured Data 4: FAQPage Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What is the transit duration for household goods from Ranchi to Vijayawada?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "For dedicated exclusive container trucks, the transit time between Ranchi and Vijayawada (approx. 1,090 km) is 3 to 4 days via the high-speed NH-16 coastal corridor. For shared or consolidated part-load shipments, delivery takes 4 to 6 days."
                }
            },
            {
                "@type": "Question",
                "name": "How much does it cost to move a 2 BHK apartment from Ranchi to Vijayawada?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Shifting charges for a standard 2 BHK household from Ranchi to Vijayawada generally range between ₹26,000 and ₹37,000, depending on cargo volume, packaging material tier, floor elevator access, and optional transit insurance."
                }
            },
            {
                "@type": "Question",
                "name": "Do you deliver to the Amaravati Capital Region and Gannavaram IT corridor?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Shree Ashirwad Packers and Movers delivers door-to-door across all areas in Vijayawada and the Amaravati capital territory, including Benz Circle, Moghalrajpuram, Auto Nagar, Kanuru, Poranki, Gannavaram IT SEZ, Tadepalli, Mangalagiri (AIIMS), and Velagapudi."
                }
            },
            {
                "@type": "Question",
                "name": "How is car transport executed safely on the NH-16 highway to Vijayawada?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Vehicles are transported inside customized enclosed car haulers equipped with wheel stoppers and heavy-duty nylon lashings. Our certified supervisor conducts an itemized pre-loading inspection with odometer and paint condition logging."
                }
            },
            {
                "@type": "Question",
                "name": "Can you handle corporate relocations for IT firms and government departments?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we specialize in corporate and public sector employee relocations, providing GST invoices, consignment notes (Bilty), and IBA-approved documentation recognized by IT companies in Gannavaram, government directorates, and public sector banks."
                }
            },
            {
                "@type": "Question",
                "name": "What packing precautions are taken for delicate electronic items and appliances?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Electronics such as LED TVs, computer monitors, and refrigerators receive a 5-layer pack featuring anti-static wrap, shock-absorbent 70+ GSM bubble sheeting, corner angle cushions, heavy corrugated wrapping, and optional tailor-made wooden crating."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped Page Styling: .rvij-* prefix */
        .rvij-hero {
            background: linear-gradient(135deg, #1E3A8A 0%, #0F172A 100%);
            color: #ffffff;
            padding: 60px 0 45px 0;
            position: relative;
        }
        .rvij-hero-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .rvij-badge {
            display: inline-block;
            background: #EFF6FF;
            color: #1D4ED8;
            font-size: 0.85rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            padding: 6px 14px;
            border-radius: 9999px;
            margin-bottom: 18px;
        }
        .rvij-title {
            font-size: 2.5rem;
            line-height: 1.2;
            font-weight: 800;
            margin-bottom: 18px;
            color: #ffffff;
        }
        .rvij-subtitle {
            font-size: 1.15rem;
            line-height: 1.6;
            color: #CBD5E1;
            max-width: 850px;
            margin-bottom: 25px;
        }
        .rvij-meta-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-top: 25px;
        }
        .rvij-meta-card {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 16px;
            border-radius: 8px;
            backdrop-filter: blur(4px);
        }
        .rvij-meta-label {
            font-size: 0.8rem;
            color: #94A3B8;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 4px;
        }
        .rvij-meta-val {
            font-size: 1.1rem;
            font-weight: 700;
            color: #F8FAFC;
        }
        .rvij-cta-bar {
            margin-top: 30px;
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            align-items: center;
        }
        .rvij-btn-primary {
            background: #2563EB;
            color: #ffffff !important;
            padding: 14px 28px;
            font-weight: 700;
            border-radius: 6px;
            text-decoration: none;
            display: inline-block;
            transition: background 0.2s ease;
        }
        .rvij-btn-primary:hover {
            background: #1D4ED8;
        }
        .rvij-btn-secondary {
            background: transparent;
            color: #ffffff !important;
            padding: 13px 26px;
            font-weight: 600;
            border-radius: 6px;
            text-decoration: none;
            border: 1px solid rgba(255, 255, 255, 0.3);
            display: inline-block;
            transition: all 0.2s ease;
        }
        .rvij-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: #ffffff;
        }
        .rvij-content-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 20px;
        }
        .rvij-section {
            margin-bottom: 50px;
        }
        .rvij-section-title {
            font-size: 1.9rem;
            color: #1E293B;
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        .rvij-section-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 55px;
            height: 3px;
            background: #2563EB;
            border-radius: 2px;
        }
        .rvij-text {
            font-size: 1.05rem;
            line-height: 1.8;
            color: #334155;
            margin-bottom: 18px;
        }
        .rvij-grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
            margin: 25px 0;
        }
        .rvij-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 22px;
            margin: 25px 0;
        }
        .rvij-card {
            background: #F8FAFC;
            border: 1px solid #E2E8F0;
            border-radius: 10px;
            padding: 24px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .rvij-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        }
        .rvij-card-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #0F172A;
            margin-bottom: 12px;
        }
        .rvij-img-block {
            max-width: 680px;
            margin: 28px auto;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            text-align: center;
            background: #F1F5F9;
        }
        .rvij-img-block img {
            width: 100%;
            max-height: 360px;
            object-fit: cover;
            display: block;
        }
        .rvij-img-caption {
            padding: 10px 15px;
            font-size: 0.9rem;
            color: #64748B;
            background: #F8FAFC;
            border-top: 1px solid #E2E8F0;
            font-style: italic;
        }
        .rvij-table-wrap {
            overflow-x: auto;
            margin: 25px 0;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            border: 1px solid #E2E8F0;
        }
        .rvij-table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            font-size: 0.98rem;
            text-align: left;
        }
        .rvij-table th {
            background: #1E3A8A;
            color: #ffffff;
            padding: 14px 18px;
            font-weight: 600;
            border: 1px solid #1D4ED8;
        }
        .rvij-table td {
            padding: 12px 18px;
            border: 1px solid #E2E8F0;
            color: #334155;
        }
        .rvij-table tr:nth-child(even) {
            background: #F8FAFC;
        }
        .rvij-timeline {
            margin: 25px 0;
            position: relative;
            padding-left: 25px;
            border-left: 3px solid #CBD5E1;
        }
        .rvij-timeline-step {
            margin-bottom: 25px;
            position: relative;
        }
        .rvij-timeline-step::before {
            content: '';
            position: absolute;
            left: -31px;
            top: 4px;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: #2563EB;
            border: 3px solid #ffffff;
        }
        .rvij-step-title {
            font-size: 1.15rem;
            font-weight: 700;
            color: #0F172A;
            margin-bottom: 6px;
        }
        .rvij-faq-item {
            border: 1px solid #E2E8F0;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 15px;
            background: #ffffff;
        }
        .rvij-faq-question {
            font-size: 1.15rem;
            font-weight: 700;
            color: #1E293B;
            margin-bottom: 10px;
        }
        .rvij-faq-answer {
            font-size: 1rem;
            line-height: 1.7;
            color: #475569;
        }
        .rvij-cta-box {
            background: linear-gradient(135deg, #1E3A8A 0%, #0F172A 100%);
            color: #ffffff;
            padding: 40px 30px;
            border-radius: 12px;
            text-align: center;
            margin: 45px 0;
        }
        .rvij-cta-box h3 {
            font-size: 1.8rem;
            color: #ffffff;
            margin-bottom: 12px;
        }
        .rvij-cta-box p {
            font-size: 1.1rem;
            color: #CBD5E1;
            max-width: 700px;
            margin: 0 auto 25px auto;
        }
        @media (max-width: 768px) {
            .rvij-title { font-size: 1.85rem; }
            .rvij-section-title { font-size: 1.5rem; }
            .rvij-cta-bar { flex-direction: column; align-items: stretch; }
            .rvij-btn-primary, .rvij-btn-secondary { text-align: center; }
        }
    </style>
</head>
<body>

<?php include_once __DIR__ . '/../includes/header.php'; ?>

<!-- Hero Section -->
<header class="rvij-hero">
    <div class="rvij-hero-container">
        <span class="rvij-badge">Ranchi to Andhra Pradesh Golden Quadrilateral Corridor</span>
        <h1 class="rvij-title">Ranchi to Vijayawada Packers and Movers</h1>
        <p class="rvij-subtitle">
            Direct, insured, and dependable intercity relocation logistics connecting Ranchi (Jharkhand) to Vijayawada and the Amaravati Capital Region (Andhra Pradesh). Engineered for corporate IT professionals, government personnel, medical specialists, and family household moves across 1,090 km.
        </p>
        <div class="rvij-meta-grid">
            <div class="rvij-meta-card">
                <div class="rvij-meta-label">Total Road Distance</div>
                <div class="rvij-meta-val">~1,090 km via NH-43 / NH-16</div>
            </div>
            <div class="rvij-meta-card">
                <div class="rvij-meta-label">Dedicated Transit Time</div>
                <div class="rvij-meta-val">3 - 4 Days (Direct Container Fleet)</div>
            </div>
            <div class="rvij-meta-card">
                <div class="rvij-meta-label">Shared Transit Time</div>
                <div class="rvij-meta-val">4 - 6 Days (Consolidated Coastal Runs)</div>
            </div>
            <div class="rvij-meta-card">
                <div class="rvij-meta-label">Risk Management</div>
                <div class="rvij-meta-val">100% Comprehensive Transit Insurance</div>
            </div>
        </div>
        <div class="rvij-cta-bar">
            <a href="tel:+918409531615" class="rvij-btn-primary">Call Booking Desk: +91 8409531615</a>
            <a href="tel:+919835565233" class="rvij-btn-secondary">Alternate Line: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact" class="rvij-btn-secondary">Request Free Survey & Quotation</a>
        </div>
    </div>
</header>

<!-- Main Container -->
<main class="rvij-content-wrap">

    <!-- Section 1: Overview & Strategic Corridor -->
    <section class="rvij-section">
        <h2 class="rvij-section-title">Professional Intercity Relocation from Ranchi to Vijayawada</h2>
        <p class="rvij-text">
            Connecting Ranchi—the capital city and industrial powerhouse of Jharkhand—with Vijayawada—the commercial and logistical heart of Andhra Pradesh and the gateway to the Amaravati Capital Region—requires an organized, high-speed freight partner. Spanning approximately 1,090 kilometers, this interstate corridor links the Chota Nagpur plateau to the fertile Krishna River delta, utilizing modern four-lane coastal expressways along National Highway 16.
        </p>
        <p class="rvij-text">
            Vijayawada is an economic dynamo featuring major commercial trade centers, Auto Nagar (one of Asia's largest automobile fabrication and spare-parts hubs), technological growth clusters like HCL Technologies at Gannavaram IT SEZ, premier healthcare hubs like AIIMS Mangalagiri, and the administrative machinery of Andhra Pradesh's State Secretariat at Velagapudi. As the leading brand of <a href="<?php echo SITE_BASE_URL; ?>/" style="color: #4338CA; font-weight: 600; text-decoration: underline;">packers and movers in Ranchi</a>, Shree Ashirwad Packers and Movers also operates dedicated return services on our reciprocal <a href="<?php echo SITE_BASE_URL; ?>/vijayawada-to-ranchi-packers-and-movers" style="color: #4338CA; font-weight: 600; text-decoration: underline;">Vijayawada to Ranchi packers and movers</a> corridor with direct GPS container fleets. We deliver customized relocation solutions engineered for corporate staff, government officials, defense personnel, and relocating families.
        </p>

        <!-- Image 1 -->
        <div class="rvij-img-block">
            <img src="<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg" alt="Ranchi to Vijayawada Intercity Shifting Truck Loading - Shree Ashirwad Packers" loading="lazy">
            <div class="rvij-img-caption">Direct company-owned container truck loading household goods for 1,090 km highway transit from Ranchi to Vijayawada.</div>
        </div>

        <p class="rvij-text">
            Unlike booking agents who pass consignments to third-party open trucks, Shree Ashirwad Packers and Movers manages your goods with our own covered container fleet and permanent packing staff. From careful itemized inventory cataloging in Morabadi, Bariatu, Kanke Road, Doranda, or Harmu in Ranchi to doorstep delivery, unpacking, and setup in Benz Circle, Moghalrajpuram, Auto Nagar, Kanuru, or Mangalagiri in Vijayawada, we ensure smooth and timely execution.
        </p>
    </section>

    <!-- Section 2: Transparent Pricing Guide -->
    <section class="rvij-section">
        <h2 class="rvij-section-title">Transparent Pricing Table: Ranchi to Vijayawada Moving Rates</h2>
        <p class="rvij-text">
            Our moving rates are determined transparently based on total cargo volume, packaging material tier, floor elevator access, and multi-state highway transit. Below is our transparent pricing schedule for Ranchi to Vijayawada moves:
        </p>

        <div class="rvij-table-wrap">
            <table class="rvij-table">
                <thead>
                    <tr>
                        <th>Move Type / Household Size</th>
                        <th>Volume Estimate</th>
                        <th>Standard Transit Package</th>
                        <th>Premium 5-Layer Multi-Pack</th>
                        <th>Estimated Transit Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 RK / Studio Flat</strong></td>
                        <td>250 - 350 cu. ft.</td>
                        <td>₹16,500 - ₹22,500</td>
                        <td>₹19,500 - ₹25,500</td>
                        <td>3 - 5 Days</td>
                    </tr>
                    <tr>
                        <td><strong>1 BHK Complete Household</strong></td>
                        <td>400 - 600 cu. ft.</td>
                        <td>₹21,000 - ₹29,000</td>
                        <td>₹24,500 - ₹33,000</td>
                        <td>3 - 5 Days</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Family Household</strong></td>
                        <td>700 - 1,000 cu. ft.</td>
                        <td>₹26,000 - ₹37,000</td>
                        <td>₹30,500 - ₹42,500</td>
                        <td>3 - 4 Days (Dedicated)</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Executive Residence</strong></td>
                        <td>1,100 - 1,500 cu. ft.</td>
                        <td>₹35,000 - ₹48,000</td>
                        <td>₹40,000 - ₹55,000</td>
                        <td>3 - 4 Days (Dedicated)</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Independent Villa</strong></td>
                        <td>1,600 - 2,200+ cu. ft.</td>
                        <td>₹45,000 - ₹62,000</td>
                        <td>₹52,000 - ₹70,000</td>
                        <td>2 - 3 Days (Exclusive Container)</td>
                    </tr>
                    <tr>
                        <td><strong>Motorcycle / Standard Bike</strong></td>
                        <td>Crated Two-Wheeler</td>
                        <td>₹5,500 - ₹7,200</td>
                        <td>₹6,800 - ₹8,500</td>
                        <td>4 - 6 Days</td>
                    </tr>
                    <tr>
                        <td><strong>Hatchback / Sedan Car Hauler</strong></td>
                        <td>Enclosed Car Carrier</td>
                        <td>₹15,000 - ₹20,000</td>
                        <td>₹17,500 - ₹22,500</td>
                        <td>4 - 5 Days</td>
                    </tr>
                    <tr>
                        <td><strong>SUV / Luxury Car Hauler</strong></td>
                        <td>Hydraulic Enclosed Trailer</td>
                        <td>₹18,500 - ₹24,500</td>
                        <td>₹21,500 - ₹27,500</td>
                        <td>4 - 5 Days</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="rvij-text">
            <em>Included in quotes: Doorstep loading, protective wrapping, road freight, GST e-Way bills, highway toll charges, unloading, and furniture positioning. Optional add-ons such as transit insurance (1.5% - 3% of declared value) and specialized wooden crating for antiques and luxury artworks are itemized with total clarity.</em>
        </p>
    </section>

    <!-- Section 3: Highway Route & Transit Engineering -->
    <section class="rvij-section">
        <h2 class="rvij-section-title">Highway Routing & Safety Engineering Across 1,090 km</h2>
        <p class="rvij-text">
            Transporting household goods between Jharkhand and coastal Andhra Pradesh benefits from well-maintained national highway connectivity. Our logistics operations team utilizes the prime coastal Golden Quadrilateral artery:
        </p>
        <div class="rvij-grid-2">
            <div class="rvij-card">
                <h3 class="rvij-card-title">Primary Coastal Route via NH-43 & NH-16</h3>
                <p class="rvij-text">
                    <strong>Ranchi &rarr; Chaibasa &rarr; Keonjhar &rarr; Jajpur &rarr; Cuttack / Bhubaneswar &rarr; Brahmapur &rarr; Srikakulam &rarr; Visakhapatnam &rarr; Rajahmundry &rarr; Eluru &rarr; Vijayawada.</strong>
                </p>
                <p class="rvij-text">
                    This is the premier high-speed transport corridor. Once joining National Highway 16 near Cuttack, the roadway provides a continuous four-to-six-lane divided expressway with grade-separated bypasses around major urban clusters like Visakhapatnam and Rajahmundry, ensuring rapid, stable transit.
                </p>
            </div>
            <div class="rvij-card">
                <h3 class="rvij-card-title">Alternative Route via Sambalpur & Rayagada (NH-26)</h3>
                <p class="rvij-text">
                    <strong>Ranchi &rarr; Rourkela &rarr; Sambalpur &rarr; Bolangir &rarr; Bhawanipatna &rarr; Rayagada &rarr; Vizianagaram &rarr; NH-16 &rarr; Vijayawada.</strong>
                </p>
                <p class="rvij-text">
                    This interior western Odisha corridor serves as an effective detour during seasonal coastal weather events. It offers scenic, steady plateau descents leading smoothly down into the North Andhra coastal plain.
                </p>
            </div>
        </div>

        <!-- Image 2 -->
        <div class="rvij-img-block">
            <img src="<?php echo SITE_BASE_URL; ?>/images/fragile-glassware-box-packing-ranchi.jpg" alt="Fragile Glassware and Delicate Box Packing - Shree Ashirwad Packers" loading="lazy">
            <div class="rvij-img-caption">Individual bubble wrapping and compartmentalized cellular boxing for fragile chinaware and delicate kitchen items.</div>
        </div>

        <p class="rvij-text">
            Every container truck in our fleet is equipped with active GPS tracking units, dual-driver shifts, fire extinguishers, and waterproof PVC interior tarpaulins. Our dispatch center in Ranchi monitors speed and location 24/7, keeping clients informed with regular SMS and WhatsApp updates.
        </p>
    </section>

    <!-- Section 4: 5-Layer Packing Standard -->
    <section class="rvij-section">
        <h2 class="rvij-section-title">5-Layer Protective Packaging for Road Transit</h2>
        <p class="rvij-text">
            Over a 1,090-kilometer highway journey, household items encounter highway vibrations, sudden braking, and ambient dust. Shree Ashirwad Packers and Movers implements a rigorous 5-layer packing standard:
        </p>
        <div class="rvij-grid-3">
            <div class="rvij-card">
                <h3 class="rvij-card-title">1. Virgin Polyethylene Stretch Wrap</h3>
                <p class="rvij-text">
                    Applied directly to wooden wardrobes, fabric sofas, and mattresses to lock out dust, prevent moisture penetration, and protect fine finishes.
                </p>
            </div>
            <div class="rvij-card">
                <h3 class="rvij-card-title">2. Heavy-Duty Bubble Wrap</h3>
                <p class="rvij-text">
                    High-density 70+ GSM air bubble sheeting wrapped around flat-screen television panels, refrigerators, microwave ovens, and washing machines.
                </p>
            </div>
            <div class="rvij-card">
                <h3 class="rvij-card-title">3. Compressed Corner Protectors</h3>
                <p class="rvij-text">
                    Rigid L-shaped corner cushions positioned along furniture edges, glass tabletops, and mirror frames to eliminate edge chipping during handling.
                </p>
            </div>
            <div class="rvij-card">
                <h3 class="rvij-card-title">4. Multi-Wall Corrugated Cartons</h3>
                <p class="rvij-text">
                    Custom-cut 5-ply and 7-ply heavy-duty cardboard boxes encasing wooden furniture, books, clothing, and kitchenware room by room.
                </p>
            </div>
            <div class="rvij-card">
                <h3 class="rvij-card-title">5. Reinforced Nylon Strapping</h3>
                <p class="rvij-text">
                    Tight cross-cinched nylon banding providing structural integrity, keeping multi-piece assemblies unified inside the container truck bay.
                </p>
            </div>
            <div class="rvij-card">
                <h3 class="rvij-card-title">Custom Timber Crating</h3>
                <p class="rvij-text">
                    Bespoke wooden cases built to measure on-site for antique chandeliers, marble temple mandirs, expensive OLED displays, and medical instruments.
                </p>
            </div>
        </div>

        <!-- Image 3 -->
        <div class="rvij-img-block">
            <img src="<?php echo SITE_BASE_URL; ?>/images/packing-materials-corrugated-sheets-ranchi.jpg" alt="Packing Materials and Corrugated Sheets - Shree Ashirwad Packers" loading="lazy">
            <div class="rvij-img-caption">High-grade packaging materials, bubble rolls, and corrugated sheets ready for residential move execution.</div>
        </div>
    </section>

    <!-- Section 5: Automobile Carrier & Motorcycle Transport -->
    <section class="rvij-section">
        <h2 class="rvij-section-title">Enclosed Car Transport & Bike Courier from Ranchi to Vijayawada</h2>
        <p class="rvij-text">
            Driving your personal car or riding a motorcycle over 1,000 kilometers causes heavy engine wear, highway fatigue, and road hazard risks. Shree Ashirwad Packers and Movers provides professional automobile carrier solutions:
        </p>
        <div class="rvij-grid-2">
            <div class="rvij-card">
                <h3 class="rvij-card-title">Enclosed Car Carriers</h3>
                <p class="rvij-text">
                    Vehicles are transported inside covered car haulers or dedicated container slots. Before loading, our certified supervisor compiles an itemized condition report with odometer readings, fuel logs, and high-definition photographs.
                </p>
                <p class="rvij-text">
                    Vehicles enter via hydraulic ramps and are secured at all four wheels using industrial nylon wheel chocks and lashing belts to eliminate movement during transit.
                </p>
            </div>
            <div class="rvij-card">
                <h3 class="rvij-card-title">Two-Wheeler Packaging & Delivery</h3>
                <p class="rvij-text">
                    Motorcycles and scooters undergo systematic preparation: fuel is drained down to reserve capacity to comply with national safety regulations, rearview mirrors and indicators are padded or dismounted, and the bike is wrapped in 3-layer foam before being secured inside a wooden safety crate.
                </p>
            </div>
        </div>

        <!-- Image 4 -->
        <div class="rvij-img-block">
            <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car Transport Carrier Loading Jharkhand - Shree Ashirwad Packers" loading="lazy">
            <div class="rvij-img-caption">Hydraulic loading and four-point wheel anchoring of private vehicles for long-distance intercity transit.</div>
        </div>
    </section>

    <!-- Section 6: Localities Covered in Vijayawada & Amaravati -->
    <section class="rvij-section">
        <h2 class="rvij-section-title">Comprehensive Doorstep Delivery Across Vijayawada Localities</h2>
        <p class="rvij-text">
            Our destination delivery network spans all prime residential extensions, commercial hubs, and institutional zones across Vijayawada and the Amaravati capital region:
        </p>
        <div class="rvij-grid-3">
            <div class="rvij-card">
                <h3 class="rvij-card-title">Prime Residential Suburbs</h3>
                <p class="rvij-text">
                    Benz Circle, Moghalrajpuram, Suryaraopet, Governorpet, Labbipet, and Patamata.
                </p>
            </div>
            <div class="rvij-card">
                <h3 class="rvij-card-title">Industrial & Commercial Hubs</h3>
                <p class="rvij-text">
                    Auto Nagar, Bhavanipuram, Gollapudi, Enikepadu, and Nidamanuru logistics clusters.
                </p>
            </div>
            <div class="rvij-card">
                <h3 class="rvij-card-title">IT & Airport Corridor</h3>
                <p class="rvij-text">
                    Gannavaram IT SEZ, HCL Campus, Kesarapalli, and Gannavaram Airport residential sectors.
                </p>
            </div>
            <div class="rvij-card">
                <h3 class="rvij-card-title">East Suburbs & High-Rises</h3>
                <p class="rvij-text">
                    Kanuru, Poranki, Tadigadapa, Penamaluru, and Bandar Road expanding residential enclaves.
                </p>
            </div>
            <div class="rvij-card">
                <h3 class="rvij-card-title">Amaravati Capital & Institutional</h3>
                <p class="rvij-text">
                    Tadepalli, Mangalagiri (AIIMS), Velagapudi (AP Secretariat), Uddandarayunipalem, and Undavalli.
                </p>
            </div>
            <div class="rvij-card">
                <h3 class="rvij-card-title">Railway & Central Zones</h3>
                <p class="rvij-text">
                    Railway Colony, Gunadala, Satyanarayanapuram, Gandhinagar, and Ajit Singh Nagar.
                </p>
            </div>
        </div>
    </section>

    <!-- Section 7: Step-by-Step Relocation Flow -->
    <section class="rvij-section">
        <h2 class="rvij-section-title">Our Systematic 6-Step Relocation Workflow</h2>
        <div class="rvij-timeline">
            <div class="rvij-timeline-step">
                <div class="rvij-step-title">Step 1: Free Pre-Move Assessment</div>
                <p class="rvij-text">
                    Our move coordinator inspects your home in Ranchi (or conducts a digital video assessment) to measure volume, assess fragile chinaware, and plan vehicle transport. You receive an all-inclusive written estimate.
                </p>
            </div>
            <div class="rvij-timeline-step">
                <div class="rvij-step-title">Step 2: Professional 5-Layer Packing</div>
                <p class="rvij-text">
                    Our trained crew arrives with premium materials, wrapping every item with stretch film, bubble wrap, corner guards, and numbered corrugated boxes. Every box is cataloged on the master moving manifest.
                </p>
            </div>
            <div class="rvij-timeline-step">
                <div class="rvij-step-title">Step 3: Systematic Loading & Weight Distribution</div>
                <p class="rvij-text">
                    Heavy furniture and appliances are positioned on the truck floor for low-center-of-gravity stability. Fragile items are placed on elevated shelves and secured with heavy ratchet straps to prevent shifting.
                </p>
            </div>
            <div class="rvij-timeline-step">
                <div class="rvij-step-title">Step 4: Interstate Transit & Active GPS Tracking</div>
                <p class="rvij-text">
                    The container truck travels with full GST e-Way bills and interstate transit permits. Clients receive regular SMS and WhatsApp updates from our Ranchi dispatch control room as the truck navigates the 1,090 km route.
                </p>
            </div>
            <div class="rvij-timeline-step">
                <div class="rvij-step-title">Step 5: Safe Unloading at Vijayawada</div>
                <p class="rvij-text">
                    Upon arrival at your new residence, our local team checks each carton against the master inventory manifest. Goods are carried safely into your home using hydraulic trolleys, avoiding wall or floor damage.
                </p>
            </div>
            <div class="rvij-timeline-step">
                <div class="rvij-step-title">Step 6: Furniture Assembly & Waste Cleanup</div>
                <p class="rvij-text">
                    Technicians reassemble double beds, dining tables, and modular wardrobes, place heavy appliances in designated positions, unpack fragile dinnerware onto kitchen counters, and collect all discarded packing materials.
                </p>
            </div>
        </div>
    </section>

    <!-- Section 8: Frequently Asked Questions -->
    <section class="rvij-section">
        <h2 class="rvij-section-title">Frequently Asked Questions: Ranchi to Vijayawada Relocation</h2>
        <div class="rvij-faq-item">
            <h3 class="rvij-faq-question">What is the transit duration for household goods from Ranchi to Vijayawada?</h3>
            <div class="rvij-faq-answer">
                For dedicated exclusive container trucks, the transit time between Ranchi and Vijayawada (approx. 1,090 km) is 3 to 4 days via the high-speed NH-16 coastal corridor. For shared or consolidated part-load shipments, delivery takes 4 to 6 days.
            </div>
        </div>
        <div class="rvij-faq-item">
            <h3 class="rvij-faq-question">How much does it cost to move a 2 BHK apartment from Ranchi to Vijayawada?</h3>
            <div class="rvij-faq-answer">
                Shifting charges for a standard 2 BHK household from Ranchi to Vijayawada generally range between ₹26,000 and ₹37,000, depending on cargo volume, packaging material tier, floor elevator access, and optional transit insurance.
            </div>
        </div>
        <div class="rvij-faq-item">
            <h3 class="rvij-faq-question">Do you deliver to the Amaravati Capital Region and Gannavaram IT corridor?</h3>
            <div class="rvij-faq-answer">
                Yes, Shree Ashirwad Packers and Movers delivers door-to-door across all areas in Vijayawada and the Amaravati capital territory, including Benz Circle, Moghalrajpuram, Auto Nagar, Kanuru, Poranki, Gannavaram IT SEZ, Tadepalli, Mangalagiri (AIIMS), and Velagapudi.
            </div>
        </div>
        <div class="rvij-faq-item">
            <h3 class="rvij-faq-question">How is car transport executed safely on the NH-16 highway to Vijayawada?</h3>
            <div class="rvij-faq-answer">
                Vehicles are transported inside customized enclosed car haulers equipped with wheel stoppers and heavy-duty nylon lashings. Our certified supervisor conducts an itemized pre-loading inspection with odometer and paint condition logging.
            </div>
        </div>
        <div class="rvij-faq-item">
            <h3 class="rvij-faq-question">Can you handle corporate relocations for IT firms and government departments?</h3>
            <div class="rvij-faq-answer">
                Yes, we specialize in corporate and public sector employee relocations, providing GST invoices, consignment notes (Bilty), and IBA-approved documentation recognized by IT companies in Gannavaram, government directorates, and public sector banks.
            </div>
        </div>
        <div class="rvij-faq-item">
            <h3 class="rvij-faq-question">What packing precautions are taken for delicate electronic items and appliances?</h3>
            <div class="rvij-faq-answer">
                Electronics such as LED TVs, computer monitors, and refrigerators receive a 5-layer pack featuring anti-static wrap, shock-absorbent 70+ GSM bubble sheeting, corner angle cushions, heavy corrugated wrapping, and optional tailor-made wooden crating.
            </div>
        </div>
    </section>

    <!-- Connected Andhra & South India Cluster Navigation -->
    <section class="rvij-section" style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 12px; padding: 35px 25px; margin: 40px 0;">
        <div style="text-align: center; max-width: 800px; margin: 0 auto 25px;">
            <span style="color: #E11D48; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.05em;">Connected Moving Corridors</span>
            <h2 style="font-size: 1.8rem; font-weight: 800; color: #0F172A; margin: 6px 0;">Explore Related Andhra &amp; South India Routes</h2>
            <p style="font-size: 0.95rem; color: #64748B; margin: 0;">Direct container linehaul linking Ranchi with coastal Andhra, Amaravati capital region, and southern IT hubs.</p>
        </div>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1rem;">
            <a href="<?php echo SITE_BASE_URL; ?>/vijayawada-to-ranchi-packers-and-movers" style="display: flex; justify-content: space-between; align-items: center; background: #ffffff; padding: 1.1rem 1.25rem; border-radius: 8px; border: 1px solid #E2E8F0; text-decoration: none; color: #4338CA; font-weight: 600; font-size: 0.95rem; box-shadow: 0 2px 4px rgba(0,0,0,0.03);">
                <span>Vijayawada to Ranchi (Return)</span>
                <span style="color: #E11D48;">→</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/" style="display: flex; justify-content: space-between; align-items: center; background: #ffffff; padding: 1.1rem 1.25rem; border-radius: 8px; border: 1px solid #E2E8F0; text-decoration: none; color: #4338CA; font-weight: 600; font-size: 0.95rem; box-shadow: 0 2px 4px rgba(0,0,0,0.03);">
                <span>Ranchi Headquarters Hub</span>
                <span style="color: #E11D48;">→</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-visakhapatnam-packers-and-movers" style="display: flex; justify-content: space-between; align-items: center; background: #ffffff; padding: 1.1rem 1.25rem; border-radius: 8px; border: 1px solid #E2E8F0; text-decoration: none; color: #4338CA; font-weight: 600; font-size: 0.95rem; box-shadow: 0 2px 4px rgba(0,0,0,0.03);">
                <span>Ranchi to Visakhapatnam Line</span>
                <span style="color: #E11D48;">→</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-hyderabad-packers-and-movers" style="display: flex; justify-content: space-between; align-items: center; background: #ffffff; padding: 1.1rem 1.25rem; border-radius: 8px; border: 1px solid #E2E8F0; text-decoration: none; color: #4338CA; font-weight: 600; font-size: 0.95rem; box-shadow: 0 2px 4px rgba(0,0,0,0.03);">
                <span>Ranchi to Hyderabad Corridor</span>
                <span style="color: #E11D48;">→</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-warangal-packers-and-movers" style="display: flex; justify-content: space-between; align-items: center; background: #ffffff; padding: 1.1rem 1.25rem; border-radius: 8px; border: 1px solid #E2E8F0; text-decoration: none; color: #4338CA; font-weight: 600; font-size: 0.95rem; box-shadow: 0 2px 4px rgba(0,0,0,0.03);">
                <span>Ranchi to Warangal Route</span>
                <span style="color: #E11D48;">→</span>
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-chennai-packers-and-movers" style="display: flex; justify-content: space-between; align-items: center; background: #ffffff; padding: 1.1rem 1.25rem; border-radius: 8px; border: 1px solid #E2E8F0; text-decoration: none; color: #4338CA; font-weight: 600; font-size: 0.95rem; box-shadow: 0 2px 4px rgba(0,0,0,0.03);">
                <span>Ranchi to Chennai Express</span>
                <span style="color: #E11D48;">→</span>
            </a>
        </div>
    </section>

    <!-- Section 9: Call to Action Banner -->
    <section class="rvij-cta-box">
        <h3>Plan Your Smooth Relocation from Ranchi to Vijayawada</h3>
        <p>
            Experience damage-free intercity relocation backed by certified packing professionals, direct GPS-enabled container fleets, and comprehensive all-risk transit insurance across 1,090 km.
        </p>
        <div class="rvij-cta-bar" style="justify-content: center;">
            <a href="tel:+918409531615" class="rvij-btn-primary">Call Now: +91 8409531615</a>
            <a href="tel:+919835565233" class="rvij-btn-secondary">Mobile: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact" class="rvij-btn-secondary">Book Free Pre-Move Survey</a>
        </div>
    </section>

</main>

<?php include_once __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>
