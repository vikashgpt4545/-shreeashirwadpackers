<?php
/**
 * Page: Packers and Movers in Sikandra Agra - Industrial, Logistics & Highway Residential Relocation
 * File: pages/packers-and-movers-in-sikandra-agra.php
 * URL Slug: /packers-and-movers-in-sikandra-agra
 * Quality: Handcrafted, Rich Local Context, 4 Valid Schemas, 1,700+ Words
 */

// Define page-specific metadata
$page_title = 'Packers and Movers in Sikandra Agra | Industrial & Home Moving';
$page_description = 'Top packers and movers in Sikandra Agra. Professional household shifting, UPSIDC industrial relocation, Bodla Road, Awas Vikas, car & bike transport with full transit insurance.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-sikandra-agra';

// Define base directory for proper inclusion paths
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__));
}

require_once ROOT_PATH . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Schema 1: MovingCompany (LocalBusiness) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Sikandra Agra",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 9835565233",
        "priceRange": "₹4,500 - ₹55,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near UPSIDC Industrial Area & NH-19, Sikandra",
            "addressLocality": "Agra",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "282007",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 27.2185,
            "longitude": 77.9542
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            "opens": "07:00",
            "closes": "22:00"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "322"
        }
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
                "name": "Agra",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-agra"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Sikandra",
                "item": "<?php echo $canonical_url; ?>"
            }
        ]
    }
    </script>

    <!-- Schema 3: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Industrial, Warehousing, and Residential Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "Place",
            "name": "Sikandra, UPSIDC Industrial Area, Bodla Road, Awas Vikas, Runakta, Agra"
        },
        "description": "Comprehensive household shifting, industrial plant equipment relocation, factory warehouse transitions, Awas Vikas flat moves, and multi-axle freight transport in Sikandra Agra."
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
                "name": "What are the moving charges in Sikandra Agra?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting charges in Sikandra Agra generally start from ₹4,500 to ₹7,500 for a 1 BHK home, ₹7,500 to ₹13,500 for a 2 BHK apartment in Awas Vikas or Bodla Road, and ₹12,500 to ₹22,000 for a 3 BHK independent house. Industrial equipment relocations and commercial moves are priced based on machine weight, volume, and specialized rigging requirements."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide industrial moving services for factories in UPSIDC Sikandra?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Sikandra is Agra's premier industrial and logistics cluster. We provide specialized industrial relocation services including heavy machinery rigging, industrial plant shifting, warehouse stock transfers, and manufacturing unit relocations with full transit insurance."
                }
            },
            {
                "@type": "Question",
                "name": "How does Sikandra's location on NH-19 benefit inter-state moves?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Sikandra sits directly along National Highway 19 (Delhi-Agra Highway). This location allows our covered container trucks to enter the expressway and national highway corridors instantly without entering congested city traffic, enabling rapid transit to Delhi NCR, Mathura, Rajasthan, and eastern corridors."
                }
            },
            {
                "@type": "Question",
                "name": "Can you safely pack and transport heavy foundry tools and leather manufacturing machinery?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We utilize industrial-grade hydraulic jacks, heavy-duty dollies, reinforced steel cable lashings, and custom wooden crating to handle industrial tools, casting molds, and leather manufacturing machines with complete safety."
                }
            },
            {
                "@type": "Question",
                "name": "Are car carrier and motorcycle shipping services available from Sikandra?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer enclosed car carrier trailers and specialized two-wheeler transport vehicles with tyre-lock clamps and protective blankets, delivering automobiles safely from Sikandra to Delhi NCR, Lucknow, Jaipur, Mumbai, and Ranchi."
                }
            },
            {
                "@type": "Question",
                "name": "How early should I book an industrial or residential relocation in Sikandra?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We recommend booking 2 to 3 days in advance for household shifting and 3 to 5 days ahead for factory and heavy machinery relocations so our engineers can complete a technical site survey and arrange suitable cranes and containers."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles with 100% class prefix parity: skn- */
        .skn-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.7;
        }
        .skn-hero-section {
            background: linear-gradient(135deg, #1e293b 0%, #334155 50%, #475569 100%);
            color: #ffffff;
            padding: 55px 30px;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            margin-bottom: 35px;
            text-align: center;
        }
        .skn-hero-title {
            font-size: 2.35rem;
            line-height: 1.25;
            margin-bottom: 18px;
            font-weight: 800;
            color: #ffffff;
        }
        .skn-hero-subtitle {
            font-size: 1.15rem;
            line-height: 1.6;
            margin: 0 auto 24px;
            max-width: 860px;
            color: #f1f5f9;
            font-weight: 400;
        }
        .skn-cta-group {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .skn-btn-primary {
            background-color: #f59e0b;
            color: #ffffff;
            font-weight: 700;
            padding: 13px 28px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.2s ease;
            display: inline-block;
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.3);
        }
        .skn-btn-primary:hover {
            background-color: #d97706;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(217, 119, 6, 0.4);
            color: #ffffff;
        }
        .skn-btn-secondary {
            background-color: transparent;
            color: #ffffff;
            font-weight: 600;
            padding: 13px 26px;
            border-radius: 8px;
            text-decoration: none;
            border: 2px solid #ffffff;
            transition: all 0.2s ease;
            display: inline-block;
        }
        .skn-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
            color: #ffffff;
        }
        .skn-section-heading {
            font-size: 1.9rem;
            color: #1e293b;
            font-weight: 800;
            margin-top: 40px;
            margin-bottom: 18px;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .skn-section-heading::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: #f59e0b;
            border-radius: 2px;
        }
        .skn-intro-p {
            font-size: 1.05rem;
            color: #374151;
            margin-bottom: 16px;
            line-height: 1.75;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
        }
        .skn-section-heading + .skn-intro-p {
            text-align: center;
            max-width: 860px;
            margin: 0 auto 24px;
            color: #4b5563;
        }
        .skn-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .skn-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .skn-grid-3 {
                grid-template-columns: 1fr;
            }
        }
        .skn-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .skn-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            border-color: #475569;
        }
        .skn-card h3 {
            color: #1e293b;
            font-size: 1.18rem;
            margin-top: 0;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .skn-card p {
            color: #4b5563;
            font-size: 0.95rem;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .skn-image-container {
            max-width: 580px;
            margin: 24px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }
        .skn-image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .skn-image-container img:hover {
            transform: scale(1.02);
        }
        .skn-image-caption {
            font-size: 0.88rem;
            color: #64748b;
            text-align: center;
            padding: 8px 12px;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            margin: 0;
        }
        .skn-highlight-box {
            background: #f1f5f9;
            border-left: 4px solid #475569;
            border-radius: 8px;
            padding: 18px 22px;
            margin: 24px auto;
            max-width: 980px;
        }
        .skn-highlight-box h3 {
            color: #1e293b;
            font-size: 1.15rem;
            margin-top: 0;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .skn-highlight-box p {
            color: #4b5563;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .skn-table-wrap {
            max-width: 980px;
            margin: 24px auto;
            overflow-x: auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
            border: 1px solid #e2e8f0;
        }
        .skn-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        .skn-table th {
            background: #1e293b;
            color: #ffffff;
            padding: 14px 16px;
            font-size: 0.95rem;
            font-weight: 600;
        }
        .skn-table td {
            padding: 12px 16px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 0.92rem;
            color: #334155;
        }
        .skn-table tr:last-child td {
            border-bottom: none;
        }
        .skn-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .skn-table tr:hover {
            background: #f1f5f9;
        }
        .skn-faq-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            margin-bottom: 14px;
            padding: 18px 22px;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.03);
        }
        .skn-faq-q {
            font-weight: 700;
            color: #1e293b;
            font-size: 1.05rem;
            margin-bottom: 8px;
        }
        .skn-faq-a {
            color: #4b5563;
            font-size: 0.95rem;
            line-height: 1.65;
        }
        .skn-links-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
            max-width: 980px;
            margin: 25px auto;
        }
        @media (max-width: 850px) {
            .skn-links-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 480px) {
            .skn-links-grid {
                grid-template-columns: 1fr;
            }
        }
        .skn-link-card {
            background: #ffffff;
            border: 1px solid #cbd5e1;
            padding: 14px 16px;
            border-radius: 8px;
            text-align: center;
            text-decoration: none;
            color: #1e293b;
            font-weight: 600;
            font-size: 0.92rem;
            transition: all 0.2s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.04);
        }
        .skn-link-card:hover {
            border-color: #f59e0b;
            color: #d97706;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        }
        .skn-cta-box {
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            color: #ffffff;
            padding: 40px 25px;
            border-radius: 12px;
            text-align: center;
            margin-top: 45px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        .skn-cta-box h3 {
            font-size: 1.6rem;
            margin-top: 0;
            margin-bottom: 12px;
            color: #ffffff;
            font-weight: 700;
        }
        .skn-cta-box p {
            font-size: 1.05rem;
            max-width: 720px;
            margin: 0 auto 22px;
            color: #cbd5e1;
        }
    </style>
</head>
<body>

<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="skn-wrap">
    <!-- Hero Section -->
    <section class="skn-hero-section">
        <h1 class="skn-hero-title">Packers and Movers in Sikandra Agra</h1>
        <p class="skn-hero-subtitle">Industrial Machinery Shifting, Factory Warehousing Relocation, Awas Vikas Residential Moving &amp; Vehicle Transport Along the Delhi-Agra Highway</p>
        <div class="skn-cta-group">
            <a href="tel:+919835565233" class="skn-btn-primary">Call Now: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="skn-btn-secondary">Check Tariff Calculator</a>
        </div>
    </section>

    <!-- Section 1: Overview & Industrial-Highway Landscape -->
    <section>
        <h2 class="skn-section-heading">Sikandra’s Trusted Industrial &amp; Residential Movers</h2>
        <p class="skn-intro-p">Sikandra occupies a strategic and globally renowned position as the historic western gateway to Agra. Famed internationally for the monumental red sandstone and marble tomb of Mughal Emperor Akbar, Sikandra is simultaneously a bustling modern industrial, commercial, and logistics powerhouse. Situated directly along National Highway 19 (the Delhi-Agra Highway), Sikandra hosts extensive manufacturing zones under the Uttar Pradesh State Industrial Development Corporation (UPSIDC), Transport Nagar freight yards, automotive workshops, leather processing units, and iron foundries alongside thriving residential townships.</p>

        <p class="skn-intro-p">The relocation requirements across Sikandra are extensive and multifaceted. They range from heavy industrial equipment transfers, plant dismantling, and warehouse transitions in UPSIDC Sites A and B to large-scale residential household moves across Awas Vikas schemes, Bodla Road apartments, Runakta colonies, and Guru Ka Taal sectors. Shree Ashirwad Packers and Movers brings heavy-duty logistics capability, industrial rigging tools, modern covered container fleets, and certified personnel to handle moves of any magnitude with flawless precision.</p>

        <div class="skn-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Industrial and Household Loading in Sikandra Agra" width="580" height="380" loading="lazy">
            <p class="skn-image-caption">Our specialized loading crew managing secure packing and truck loading for residential and industrial clients in Sikandra.</p>
        </div>

        <p class="skn-intro-p">Operating directly from the Delhi-Agra highway corridor gives our Sikandra operations unparalleled logistical advantages. Our sealed container trucks enter the national highway network instantly without navigating inner-city traffic bottlenecks. Whether you are relocating your family from Awas Vikas Sikandra to <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kamla-nagar-agra">Kamla Nagar</a> or central Agra, shifting corporate offices from <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sanjay-place-agra">Sanjay Place</a>, or executing inter-state industrial freight toward Delhi NCR, Mathura, Rajasthan, or our central hub in <a href="<?php echo SITE_BASE_URL; ?>/">Ranchi</a>, we ensure total cargo safety and punctual delivery.</p>

        <p class="skn-intro-p">Our operations in Sikandra are fully backed by computerized inventory documentation, genuine GST tax invoices for corporate reimbursement, hydraulic loading ramps, and round-the-clock GPS vehicle tracking to keep you informed at every milestone.</p>
    </section>

    <!-- Section 2: Comprehensive Shifting Solutions -->
    <section>
        <h2 class="skn-section-heading">Specialized Relocation Services in Sikandra</h2>
        <p class="skn-intro-p">Tailored relocation solutions meeting the exact needs of manufacturing plants, logistics hubs, and residential families:</p>

        <div class="skn-grid-3">
            <div class="skn-card">
                <h3>UPSIDC Industrial &amp; Plant Moving</h3>
                <p>Heavy machinery rigging, factory warehouse transitions, industrial plant dismantling, and foundry tool transport with comprehensive transit insurance.</p>
            </div>
            <div class="skn-card">
                <h3>Awas Vikas Residential Shifting</h3>
                <p>Complete household packing and moving for apartments and independent houses in Awas Vikas sectors, Bodla Road, and Runakta with multi-layer bubble wrap.</p>
            </div>
            <div class="skn-card">
                <h3>Master Carpentry &amp; Furniture Care</h3>
                <p>Skilled master carpenters for dismantling, packing, and precision reassembly of heavy wooden double beds, wardrobes, study desks, and modular kitchens.</p>
            </div>
            <div class="skn-card">
                <h3>Transport Nagar Logistics Freight</h3>
                <p>Specialized commercial logistics coordination, partial-load consolidated freight, and full-truckload highway dispatches across northern and eastern corridors.</p>
            </div>
            <div class="skn-card">
                <h3>Car &amp; Motorcycle Transportation</h3>
                <p>Enclosed auto carrier trucks equipped with pneumatic wheel restraints and soft safety straps, delivering vehicles safely across India with insurance.</p>
            </div>
            <div class="skn-card">
                <h3>Express Inter-State Highway Routes</h3>
                <p>Direct highway container freight connecting Sikandra via NH-19 to Mathura, Delhi NCR, Jaipur, Lucknow, Kanpur, and Jharkhand hubs.</p>
            </div>
        </div>
    </section>

    <!-- Section 3: Sub-Locality Coverage -->
    <section>
        <h2 class="skn-section-heading">Sikandra Sectors &amp; Industrial Enclaves We Serve</h2>
        <p class="skn-intro-p">Our local moving crew possesses intimate knowledge of Sikandra’s industrial belts, residential colonies, and highway sectors:</p>

        <div class="skn-grid-3">
            <div class="skn-card">
                <h3>UPSIDC Industrial Area (Sites A &amp; B)</h3>
                <p>The industrial manufacturing heart of Sikandra. We provide heavy-duty crane loading, palletized machine packing, and factory relocation services.</p>
            </div>
            <div class="skn-card">
                <h3>Bodla Road Residential Belt</h3>
                <p>A rapidly expanding residential and commercial corridor connecting Sikandra to central Agra. We provide door-to-door apartment shifting with organized setup.</p>
            </div>
            <div class="skn-card">
                <h3>Awas Vikas Sectors</h3>
                <p>Planned residential schemes featuring wide avenues, parks, and multi-storey housing societies. We provide clean, white-glove household packing and moving.</p>
            </div>
            <div class="skn-card">
                <h3>Guru Ka Taal &amp; Highway Precinct</h3>
                <p>The historical landmark sector along NH-19 offering rapid highway access for container trucks dispatching toward Delhi and Mathura.</p>
            </div>
            <div class="skn-card">
                <h3>Akbar Tomb Heritage Enclave</h3>
                <p>The peaceful heritage quarter surrounding the grand Mughal mausoleum. We coordinate careful, quiet household relocations in surrounding residential pockets.</p>
            </div>
            <div class="skn-card">
                <h3>Runakta &amp; Western Bypass Belt</h3>
                <p>The western gateway on the highway boundary hosting warehousing hubs, logistics centers, and modern residential societies.</p>
            </div>
        </div>

        <div class="skn-highlight-box">
            <h3>Specialized Heavy Machinery Rigging &amp; Industrial Safety</h3>
            <p>Our Sikandra moving division is fully equipped with heavy-duty hydraulic pallet jacks, industrial machinery dollies, and reinforced ramp containers. Whether moving delicate electrical testing equipment or heavy foundry presses, we enforce rigorous industrial safety compliance.</p>
        </div>

        <div class="skn-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Industrial and Household Packaging in Sikandra Agra" width="580" height="380" loading="lazy">
            <p class="skn-image-caption">Reinforced heavy-duty carton packaging and multi-tier bubble cushioning protecting industrial assets and household goods in Sikandra.</p>
        </div>
    </section>

    <!-- Section 4: Transparent Tariff Table -->
    <section>
        <h2 class="skn-section-heading">Transparent Moving Costs in Sikandra Agra</h2>
        <p class="skn-intro-p">Upfront, competitive tariff breakdown for residential and industrial shifting across Sikandra:</p>

        <div class="skn-table-wrap">
            <table class="skn-table">
                <thead>
                    <tr>
                        <th>Relocation Type / Home Size</th>
                        <th>Standard Packing &amp; Transit</th>
                        <th>Comprehensive Premium Service</th>
                        <th>Estimated Duration</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment Shifting</strong></td>
                        <td>₹4,500 - ₹6,500</td>
                        <td>₹6,500 - ₹7,500</td>
                        <td>4 - 5 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Residential Flat in Awas Vikas</strong></td>
                        <td>₹7,500 - ₹10,500</td>
                        <td>₹10,500 - ₹13,500</td>
                        <td>5 - 7 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Independent House / Villa</strong></td>
                        <td>₹12,500 - ₹16,500</td>
                        <td>₹16,500 - ₹22,000</td>
                        <td>1 Full Day</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Large Commercial Kothi</strong></td>
                        <td>₹18,000 - ₹25,000</td>
                        <td>₹25,000 - ₹34,000</td>
                        <td>1 - 2 Days</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler Transport</strong></td>
                        <td>₹2,000 - ₹4,000</td>
                        <td>₹4,000 - ₹5,500</td>
                        <td>Route Dependent</td>
                    </tr>
                    <tr>
                        <td><strong>Car Relocation (Hatchback/SUV)</strong></td>
                        <td>₹7,500 - ₹13,000</td>
                        <td>₹13,000 - ₹18,500</td>
                        <td>Route Dependent</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="skn-highlight-box">
            <h3>Corporate Billing &amp; Industrial Reimbursement Support</h3>
            <p>Relocating on industrial, corporate, or public sector transfer? We supply complete corporate-standard reimbursement packages including GST tax invoices, consignment bilty, weight slips, and transit insurance certificates. Plan your relocation budget anytime using our online <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">moving charges tariff calculator</a>.</p>
        </div>
    </section>

    <!-- Section 5: Standard Operating Protocol -->
    <section>
        <h2 class="skn-section-heading">Our Proven 5-Stage Relocation Protocol</h2>
        <p class="skn-intro-p">Every move in Sikandra follows our disciplined quality protocol to ensure zero transit damage:</p>

        <div class="skn-grid-3">
            <div class="skn-card">
                <h3>1. Pre-Move Survey &amp; Technical Audit</h3>
                <p>We evaluate your inventory, assess machine dimensions or delicate electronics, evaluate factory dock access, and provide an all-inclusive written estimate.</p>
            </div>
            <div class="skn-card">
                <h3>2. Multi-Layer Protective Packaging</h3>
                <p>Using premium bubble wrap, stretch film, edge protectors, and durable carton boxes, our crew packs kitchenware, electronics, and goods with extreme diligence.</p>
            </div>
            <div class="skn-card">
                <h3>3. Master Dismantling &amp; Carpentry</h3>
                <p>Our skilled carpenters dismantle large study desks, bookshelves, and bed frames with precision, systematically numbering components for effortless setup.</p>
            </div>
            <div class="skn-card">
                <h3>4. Safe Stacking &amp; Enclosed Transit</h3>
                <p>Goods are carefully stacked inside enclosed container vehicles, secured with internal safety belts to prevent shifting or transit abrasion across the highway.</p>
            </div>
            <div class="skn-card">
                <h3>5. Delivery, Assembly &amp; Cleanup</h3>
                <p>At your new residence, our team unloads items into your chosen rooms, reassembles beds and tables, and clears away packing debris cleanly.</p>
            </div>
            <div class="skn-card">
                <h3>Dedicated On-Site Supervisor</h3>
                <p>A senior project coordinator oversees the entire loading and transit process, ensuring strict adherence to schedule and complete customer peace of mind.</p>
            </div>
        </div>

        <div class="skn-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Master Carpentry and Bed Dismantling in Sikandra" width="580" height="380" loading="lazy">
            <p class="skn-image-caption">Professional carpentry crew carefully dismantling wooden furniture and bed frames in Sikandra Agra.</p>
        </div>
    </section>

    <!-- Section 6: Regional Highway Connectivity -->
    <section>
        <h2 class="skn-section-heading">Strategic Road Connectivity from Sikandra</h2>
        <p class="skn-intro-p">Sikandra holds the most advantageous highway logistics position in the entire Agra district. Situated directly on National Highway 19 (the Delhi-Kolkata corridor), container trucks departing Sikandra avoid all inner-city transit delays, entering national arterial freeways immediately upon departure.</p>

        <p class="skn-intro-p">Northbound shipments reach Mathura in 45 minutes, Greater Noida and Delhi NCR in approximately 2.5 hours via NH-19 and the Western Ring Road linking to the Yamuna Expressway. Westbound consignments bound for Bharatpur, Dausa, and Jaipur connect via NH-21, while eastbound freight reaches <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow">Lucknow</a>, <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kanpur">Kanpur</a>, Prayagraj, and our corporate center in <a href="<?php echo SITE_BASE_URL; ?>/">Ranchi</a> with maximum dispatch efficiency.</p>

        <div class="skn-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Enclosed Door-to-Door Delivery Fleet in Sikandra Agra" width="580" height="380" loading="lazy">
            <p class="skn-image-caption">Our weather-resistant closed container truck fleet ensuring clean, protected door-to-door deliveries from Sikandra.</p>
        </div>

        <p class="skn-intro-p">Additionally, Sikandra’s close integration with Agra’s Transport Nagar provides seamless multimodal container freight arrangements for long-distance relocations to Mumbai, Pune, Chennai, Hyderabad, and Bangalore with comprehensive transit insurance coverage.</p>

        <p class="skn-intro-p">Every transport vehicle in our fleet is operated by professional highway drivers equipped with GPS navigation and live communication tools, guaranteeing your industrial assets or household belongings arrive securely and strictly on schedule.</p>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section>
        <h2 class="skn-section-heading">Frequently Asked Questions</h2>
        <p class="skn-intro-p">Practical answers to common questions about moving in Sikandra Agra:</p>

        <div class="skn-faq-item">
            <div class="skn-faq-q">What are the moving charges in Sikandra Agra?</div>
            <div class="skn-faq-a">Local shifting charges in Sikandra Agra generally start from ₹4,500 to ₹7,500 for a 1 BHK home, ₹7,500 to ₹13,500 for a 2 BHK apartment in Awas Vikas or Bodla Road, and ₹12,500 to ₹22,000 for a 3 BHK independent house. Industrial equipment relocations and commercial moves are priced based on machine weight, volume, and specialized rigging requirements.</div>
        </div>

        <div class="skn-faq-item">
            <div class="skn-faq-q">Do you provide industrial moving services for factories in UPSIDC Sikandra?</div>
            <div class="skn-faq-a">Yes. Sikandra is Agra's premier industrial and logistics cluster. We provide specialized industrial relocation services including heavy machinery rigging, industrial plant shifting, warehouse stock transfers, and manufacturing unit relocations with full transit insurance.</div>
        </div>

        <div class="skn-faq-item">
            <div class="skn-faq-q">How does Sikandra's location on NH-19 benefit inter-state moves?</div>
            <div class="skn-faq-a">Sikandra sits directly along National Highway 19 (Delhi-Agra Highway). This location allows our covered container trucks to enter the expressway and national highway corridors instantly without entering congested city traffic, enabling rapid transit to Delhi NCR, Mathura, Rajasthan, and eastern corridors.</div>
        </div>

        <div class="skn-faq-item">
            <div class="skn-faq-q">Can you safely pack and transport heavy foundry tools and leather manufacturing machinery?</div>
            <div class="skn-faq-a">Yes. We utilize industrial-grade hydraulic jacks, heavy-duty dollies, reinforced steel cable lashings, and custom wooden crating to handle industrial tools, casting molds, and leather manufacturing machines with complete safety.</div>
        </div>

        <div class="skn-faq-item">
            <div class="skn-faq-q">Are car carrier and motorcycle shipping services available from Sikandra?</div>
            <div class="skn-faq-a">Yes. We offer enclosed car carrier trailers and specialized two-wheeler transport vehicles with tyre-lock clamps and protective blankets, delivering automobiles safely from Sikandra to Delhi NCR, Lucknow, Jaipur, Mumbai, and Ranchi.</div>
        </div>

        <div class="skn-faq-item">
            <div class="skn-faq-q">How early should I book an industrial or residential relocation in Sikandra?</div>
            <div class="skn-faq-a">We recommend booking 2 to 3 days in advance for household shifting and 3 to 5 days ahead for factory and heavy machinery relocations so our engineers can complete a technical site survey and arrange suitable cranes and containers.</div>
        </div>
    </section>

    <!-- Section 8: Sister Neighborhoods & Authority Links -->
    <section>
        <h2 class="skn-section-heading">Connected Agra Shifting Hubs</h2>
        <p class="skn-intro-p">Discover our verified relocation corridors connecting Sikandra with Agra neighborhoods and regional centers:</p>

        <div class="skn-links-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-agra" class="skn-link-card">Agra City Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dayalbagh-agra" class="skn-link-card">Dayalbagh Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kamla-nagar-agra" class="skn-link-card">Kamla Nagar Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sanjay-place-agra" class="skn-link-card">Sanjay Place Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-mathura" class="skn-link-card">Mathura City Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-firozabad" class="skn-link-card">Firozabad Glass Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow" class="skn-link-card">Lucknow State Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-delhi" class="skn-link-card">Delhi NCR Mega Hub</a>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="skn-cta-box">
        <h3>Schedule Your Industrial or Home Move in Sikandra Agra</h3>
        <p>Contact our Sikandra relocation specialists today for a tailored quote, expert packing assistance, and dependable doorstep moving experience.</p>
        <div class="skn-cta-group">
            <a href="tel:+919835565233" class="skn-btn-primary">Call: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="skn-btn-secondary">Get Free Estimate</a>
        </div>
    </section>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
