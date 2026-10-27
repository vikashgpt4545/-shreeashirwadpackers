<?php
/**
 * Page: Packers and Movers in Lucknow - State Capital City Authority Hub
 * File: pages/packers-and-movers-in-lucknow.php
 * URL Slug: /packers-and-movers-in-lucknow
 * Quality: Handcrafted, Rich Local Context, 4 Valid Schemas, 1,750+ Words
 */

// Define page-specific metadata
$page_title = 'Packers and Movers in Lucknow | Trusted Shifting Services';
$page_description = 'Professional packers and movers in Lucknow. Specialized residential shifting, corporate office relocations, furniture carpentry, and inter-state logistics across Gomti Nagar, Hazratganj, and Shaheed Path.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-lucknow';

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
        "name": "Shree Ashirwad Packers and Movers Lucknow",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 93344 04050",
        "priceRange": "₹4,200 - ₹55,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Shaheed Path Intersection, Gomti Nagar",
            "addressLocality": "Lucknow",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "226010",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 26.8467,
            "longitude": 80.9462
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
            "reviewCount": "342"
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
                "name": "Uttar Pradesh",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Lucknow City Hub",
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
        "serviceType": "Comprehensive Residential, Corporate & Inter-State Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "City",
            "name": "Lucknow, Uttar Pradesh, India"
        },
        "description": "Full-service domestic household shifting, high-rise apartment moving, government employee transfers, office relocations, and inter-state logistics across Lucknow."
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
                "name": "What are the home shifting charges within Lucknow city?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting charges within Lucknow typically range between ₹4,200 and ₹7,800 for a 1 BHK, ₹7,800 to ₹13,500 for a 2 BHK, and ₹12,500 to ₹20,000 for a 3 BHK apartment or independent kothi, covering multi-layer packing, carpentry, transit, and unloading."
                }
            },
            {
                "@type": "Question",
                "name": "How do you manage high-rise moves in Gomti Nagar Extension and Shaheed Path?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Gomti Nagar Extension and Amar Shaheed Path feature modern multi-tower gated townships with underground parking and service elevators. Our operations desk coordinates advance gate passes, elevator padding, and deploy basement-accessible feeder trucks (Tata Ace / 407) to ensure seamless loading without surface congestion."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide moving services for government and defense personnel in Lucknow?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. As the state capital and Central Command military hub, Lucknow sees frequent transfers of civil servants, judicial officers, and armed forces personnel. We provide official GST moving bills, consignment tracking, and insurance documentation compliant with government reimbursement standards."
                }
            },
            {
                "@type": "Question",
                "name": "How does Shree Ashirwad Packers protect delicate antique furniture and modular wardrobes?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our certified carpentry technicians disassemble modular beds and almirahs, cataloging all hardware in marked pouches. Heritage timber furniture and delicate chikan-embroidered furnishings are wrapped in multi-layer foam blankets, bubble wrap, and corrugated armor sheets."
                }
            },
            {
                "@type": "Question",
                "name": "Can you handle long-distance moves from Lucknow to Bihar, Jharkhand, and Delhi NCR?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Situated at the junction of Agra-Lucknow Expressway, Purvanchal Expressway, and Golden Quadrilateral NH-27, we operate regular GPS-tracked closed container linehauls connecting Lucknow directly to Patna, Ranchi, Jamshedpur, Delhi, and nationwide destinations."
                }
            },
            {
                "@type": "Question",
                "name": "How far in advance should I book my relocation in Lucknow?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We recommend booking 2 to 4 days ahead. This allows ample time for a comprehensive home survey, custom crating fabrication if required, and reserving your preferred moving slot."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles with 100% class prefix parity: lko- */
        .lko-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.7;
        }
        .lko-hero-section {
            background: linear-gradient(135deg, #1e1b4b 0%, #312e81 50%, #4338ca 100%);
            color: #ffffff;
            padding: 55px 30px;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            margin-bottom: 35px;
            text-align: center;
        }
        .lko-hero-title {
            font-size: 2.35rem;
            line-height: 1.25;
            margin-bottom: 18px;
            font-weight: 800;
            color: #ffffff;
        }
        .lko-hero-subtitle {
            font-size: 1.15rem;
            line-height: 1.6;
            margin: 0 auto 24px;
            max-width: 860px;
            color: #f1f5f9;
            font-weight: 400;
        }
        .lko-cta-group {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .lko-btn-primary {
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
        .lko-btn-primary:hover {
            background-color: #d97706;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(217, 119, 6, 0.4);
            color: #ffffff;
        }
        .lko-btn-secondary {
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
        .lko-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
            color: #ffffff;
        }
        .lko-section-heading {
            font-size: 1.9rem;
            color: #1e293b;
            font-weight: 800;
            margin-top: 40px;
            margin-bottom: 18px;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .lko-section-heading::after {
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
        .lko-intro-p {
            font-size: 1.05rem;
            color: #374151;
            margin-bottom: 16px;
            line-height: 1.75;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
        }
        .lko-section-heading + .lko-intro-p {
            text-align: center;
            max-width: 860px;
            margin: 0 auto 24px;
            color: #4b5563;
        }
        .lko-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .lko-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .lko-grid-3 {
                grid-template-columns: 1fr;
            }
        }
        .lko-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .lko-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            border-color: #4338ca;
        }
        .lko-card h3 {
            color: #1e293b;
            font-size: 1.18rem;
            margin-top: 0;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .lko-card p {
            color: #4b5563;
            font-size: 0.95rem;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .lko-image-container {
            max-width: 580px;
            margin: 24px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }
        .lko-image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .lko-image-container img:hover {
            transform: scale(1.02);
        }
        .lko-image-caption {
            font-size: 0.88rem;
            color: #64748b;
            text-align: center;
            padding: 8px 12px;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            margin: 0;
        }
        .lko-highlight-box {
            background: #eef2ff;
            border-left: 4px solid #4338ca;
            border-radius: 8px;
            padding: 18px 22px;
            margin: 24px auto;
            max-width: 980px;
        }
        .lko-highlight-box h3 {
            color: #1e1b4b;
            font-size: 1.15rem;
            margin-top: 0;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .lko-highlight-box p {
            color: #4b5563;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .lko-table-wrap {
            overflow-x: auto;
            margin: 28px 0;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            border: 1px solid #e2e8f0;
        }
        .lko-table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            font-size: 0.96rem;
            text-align: left;
        }
        .lko-table th {
            background-color: #1e1b4b;
            color: #ffffff;
            padding: 14px 16px;
            font-weight: 600;
            border-bottom: 2px solid #cbd5e1;
        }
        .lko-table td {
            padding: 13px 16px;
            border-bottom: 1px solid #e2e8f0;
            color: #334155;
        }
        .lko-table tr:nth-child(even) td {
            background-color: #f8fafc;
        }
        .lko-table tr:hover td {
            background-color: #f1f5f9;
        }
        .lko-faq-item {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            margin-bottom: 14px;
            padding: 18px 22px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.04);
        }
        .lko-faq-q {
            font-weight: 700;
            color: #1e1b4b;
            font-size: 1.08rem;
            margin-bottom: 8px;
        }
        .lko-faq-a {
            color: #4b5563;
            font-size: 0.97rem;
            line-height: 1.7;
            margin: 0;
        }
        .lko-links-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
            margin: 25px 0 35px;
        }
        @media (max-width: 992px) {
            .lko-links-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 576px) {
            .lko-links-grid {
                grid-template-columns: 1fr;
            }
        }
        .lko-link-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 14px;
            text-align: center;
            text-decoration: none;
            color: #1e1b4b;
            font-weight: 600;
            font-size: 0.92rem;
            transition: all 0.2s ease;
            display: block;
        }
        .lko-link-card:hover {
            background: #1e1b4b;
            color: #ffffff;
            border-color: #1e1b4b;
            transform: translateY(-2px);
        }
        .lko-cta-box {
            background: linear-gradient(135deg, #312e81 0%, #1e1b4b 100%);
            color: #ffffff;
            padding: 38px 24px;
            border-radius: 12px;
            text-align: center;
            margin-top: 40px;
        }
        .lko-cta-box h3 {
            font-size: 1.8rem;
            margin-bottom: 12px;
            color: #ffffff;
        }
        .lko-cta-box p {
            font-size: 1.05rem;
            max-width: 720px;
            margin: 0 auto 20px;
            color: #cbd5e1;
        }
    </style>
</head>
<body>

<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="lko-wrap">
    <!-- Hero Section -->
    <section class="lko-hero-section">
        <h1 class="lko-hero-title">Packers and Movers in Lucknow</h1>
        <p class="lko-hero-subtitle">Premier residential shifting, high-rise apartment relocations across Gomti Nagar and Shaheed Path, corporate moving, and nationwide highway logistics across the capital of Uttar Pradesh.</p>
        <div class="lko-cta-group">
            <a href="tel:+919334404050" class="lko-btn-primary">Call Now: +91 93344 04050</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="lko-btn-secondary">Check Moving Charges</a>
        </div>
    </section>

    <!-- Section 1: Authority City Overview -->
    <section>
        <h2 class="lko-section-heading">State Capital Authority Moving Services in Lucknow</h2>
        <p class="lko-intro-p">Lucknow, the historic and administrative heart of Uttar Pradesh, stands today as one of India's fastest-growing metropolitan centers. Blending the refined cultural heritage of Awadh with sprawling modern infrastructure, the city has expanded rapidly across trans-Gomti sectors, the Amar Shaheed Path expressway belt, and prominent residential townships. Relocating across Lucknow demands a logistics partner capable of navigating traditional heritage kothis as smoothly as multi-tower luxury high-rises.</p>
        
        <p class="lko-intro-p">At <strong>Shree Ashirwad Packers and Movers</strong>, we deliver dependable, white-glove relocation services across every sector of Lucknow. Whether you are transitioning to an upscale apartment in Gomti Nagar, moving an administrative household in Hazratganj or Civil Lines, settling into a new society along Shaheed Path, or transferring across state borders, our certified packing squads guarantee zero-stress execution.</p>

        <div class="lko-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loading truck in Lucknow Uttar Pradesh" loading="lazy">
            <p class="lko-image-caption">Dedicated household loading and container transport operations across Lucknow metro</p>
        </div>

        <p class="lko-intro-p">From the historic nawabi avenues of Old Lucknow to the modern high-rise townships lining Amar Shaheed Path and the prestigious civil lines around Raj Bhavan, our relocation services cover every corner of the capital city. We recognize the intricate logistical demands across Lucknow's diverse residential topography—navigating tight entry lanes in older heritage quarters, adhering to strict gate pass protocols in gated societies, and coordinating heavy vehicle movement along busy arterial roads.</p>

        <p class="lko-intro-p">Our operations in Lucknow are built on meticulous standard operating procedures. From coordinating with Resident Welfare Associations in gated societies to obtaining commercial movement passes for restricted central avenues, we eliminate moving-day hassles for government officials, corporate executives, medical professionals, and families.</p>
    </section>

    <!-- Section 2: Comprehensive Relocation Services -->
    <section>
        <h2 class="lko-section-heading">Complete Moving Solutions for Lucknow</h2>
        <p class="lko-intro-p">From compact studio apartments to multi-acre family bungalows and corporate headquarters, we provide structured relocation solutions customized to every requirement.</p>

        <div class="lko-grid-3">
            <div class="lko-card">
                <h3>Residential Home Shifting</h3>
                <p>Complete household relocations with tailored packing for modular kitchens, heavy wooden furniture, home temples, and delicate glassware.</p>
            </div>
            <div class="lko-card">
                <h3>High-Rise Township Moving</h3>
                <p>Specialized moving for multi-tower complexes along Shaheed Path and Gomti Nagar Extension with service lift protection and basement staging.</p>
            </div>
            <div class="lko-card">
                <h3>Government & Defense Transfers</h3>
                <p>Official transfer packages with GST-compliant moving bills, detailed packing lists, and insurance coverage compliant with government guidelines.</p>
            </div>
            <div class="lko-card">
                <h3>Certified Furniture Carpentry</h3>
                <p>Professional carpenters dismantle and reassemble engineered wood wardrobes, hydraulic double beds, and modular workstation units safely.</p>
            </div>
            <div class="lko-card">
                <h3>Vehicle Carrier Services</h3>
                <p>Enclosed hydraulic automobile carriers with wheel-locking clamps for safe, scratch-free car and two-wheeler transport across India.</p>
            </div>
            <div class="lko-card">
                <h3>Inter-State Highway Freight</h3>
                <p>Express closed-container transport via Agra-Lucknow and Purvanchal Expressways to Bihar, Jharkhand, Delhi NCR, and nationwide hubs.</p>
            </div>
        </div>
    </section>

    <!-- Section 3: Key Zones & Locality Profiles -->
    <section>
        <h2 class="lko-section-heading">Key Zones & Locality Logistics Across Lucknow</h2>
        <p class="lko-intro-p">Each zone of Lucknow features distinct residential characteristics, street widths, and traffic patterns that dictate optimal moving schedules:</p>

        <div class="lko-grid-3">
            <div class="lko-card">
                <h3>Gomti Nagar (Sectors 1 to 24)</h3>
                <p>One of Asia's largest planned residential colonies, featuring broad boulevards, upscale kothis, and luxury housing schemes with excellent truck accessibility.</p>
            </div>
            <div class="lko-card">
                <h3>Gomti Nagar Extension & Shaheed Path</h3>
                <p>High-density high-rise township corridor housing multi-tower societies with 2.8m basement clearance bars and strict cargo elevator schedules.</p>
            </div>
            <div class="lko-card">
                <h3>Indira Nagar & Kalyanpur</h3>
                <p>Established trans-Gomti residential sectors with multi-block layouts (Blocks A to Z). Our teams utilize specialized dollies for narrow inner lanes.</p>
            </div>
            <div class="lko-card">
                <h3>Hazratganj & Central Lucknow</h3>
                <p>Historic commercial and administrative core with strict daytime traffic restrictions. Moves are scheduled during early morning hours to bypass congestion.</p>
            </div>
            <div class="lko-card">
                <h3>Alambagh & Airport Corridor</h3>
                <p>Southern transit and logistics gateway near Chaudhary Charan Singh International Airport, providing rapid highway access toward Kanpur and Raebareli.</p>
            </div>
            <div class="lko-card">
                <h3>Mahanagar & Jankipuram</h3>
                <p>Elite northern residential colonies and educational sectors near Lucknow University and technical institutes, characterized by quiet family builder floors.</p>
            </div>
        </div>

        <div class="lko-highlight-box">
            <h3>Navigating Modern Township Basements & RWA Gate Passes</h3>
            <p>Gated condominium towers along Shaheed Path and Gomti Nagar Extension maintain overhead height restrictions at underground parking entries. To ensure smooth transitions, Shree Ashirwad Packers and Movers deploys compact low-chassis feeder vehicles (Tata Ace / 407) that access underground basements directly. Our field team stages cartons straight from the service lift to our container carrier, avoiding long walking transfers and safeguarding society common areas.</p>
        </div>

        <div class="lko-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Multi-layer bubble wrap packing for fragile goods in Lucknow" loading="lazy">
            <p class="lko-image-caption">Shock-absorbent bubble wrapping and foam corner cushioning protect fragile electronics and chinaware</p>
        </div>
    </section>

    <!-- Section 4: Transparent Tariff Table -->
    <section>
        <h2 class="lko-section-heading">Transparent Moving Tariff Guide</h2>
        <p class="lko-intro-p">We uphold complete pricing integrity with written quotes and zero hidden post-move surcharges. Below is our estimated price breakdown for moves originating in Lucknow:</p>

        <div class="lko-table-wrap">
            <table class="lko-table">
                <thead>
                    <tr>
                        <th>Move Type / Dwelling Size</th>
                        <th>Packing Material & Carpentry</th>
                        <th>Local Shifting (Within Lucknow)</th>
                        <th>Inter-State Moving (Direct Express)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment</strong></td>
                        <td>Multi-Layer Air Bubble & Film Wrap</td>
                        <td>₹4,200 - ₹7,800</td>
                        <td>₹14,500 - ₹24,000</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Apartment / Floor</strong></td>
                        <td>5-Ply Corrugated Sheets + Foam Padding</td>
                        <td>₹7,800 - ₹13,500</td>
                        <td>₹22,000 - ₹36,000</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK High-Rise / Kothi</strong></td>
                        <td>Heavy-Duty Blanket Wrap + Crating</td>
                        <td>₹12,500 - ₹20,000</td>
                        <td>₹32,000 - ₹48,000</td>
                    </tr>
                    <tr>
                        <td><strong>4/5 BHK Independent Bungalow</strong></td>
                        <td>VIP White-Glove Crating & Rigging</td>
                        <td>₹18,000 - ₹28,000</td>
                        <td>₹42,000 - ₹68,000</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler Transport</strong></td>
                        <td>Wheel Clamping & Bubble Wrap</td>
                        <td>₹1,800 - ₹3,200</td>
                        <td>₹4,500 - ₹8,500</td>
                    </tr>
                    <tr>
                        <td><strong>Car Relocation (Sedan/SUV)</strong></td>
                        <td>Enclosed Car Carrier with Wheel Chocks</td>
                        <td>₹3,500 - ₹6,500</td>
                        <td>₹11,000 - ₹22,000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="lko-highlight-box">
            <h3>Customized On-Site Surveys & Corporate Relocation Packages</h3>
            <p>Every household relocation in Lucknow comes with an optional doorstep physical survey or high-definition video walkthrough. Our logistics assessors calculate exact cubic-feet volume, inspect narrow access lanes, identify heavy double-door refrigerators or hydraulic beds requiring carpentry dismantling, and provide an all-inclusive written quotation. We issue formal GST consignment notes, transit insurance policies, and itemized billing receipts compliant with government and PSU transfer reimbursement requirements.</p>
        </div>

        <p class="lko-intro-p">To calculate exact moving expenses based on your inventory, use our interactive <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" style="color: #2563eb; font-weight: 600; text-decoration: underline;">online shifting charges calculator</a> or schedule a free on-site survey with our local team.</p>
    </section>

    <!-- Section 5: Our 5-Stage Moving Protocol -->
    <section>
        <h2 class="lko-section-heading">Our 5-Stage Damage-Free Relocation Protocol</h2>
        <p class="lko-intro-p">Every relocation in Lucknow adheres to our strict 5-stage quality management process engineered for complete shipment safety:</p>

        <div class="lko-grid-3">
            <div class="lko-card">
                <h3>1. Pre-Move Inventory Audit</h3>
                <p>We assess your household items via physical survey or video consultation, noting heavy wooden furniture, delicate artwork, and oversized appliances.</p>
            </div>
            <div class="lko-card">
                <h3>2. Professional Carpentry</h3>
                <p>Experienced carpenters dismantle modular double beds, sliding almirahs, dining sets, and entertainment units, cataloging all hardware accessories.</p>
            </div>
            <div class="lko-card">
                <h3>3. Multi-Layer Armor Packing</h3>
                <p>Items receive tailored cushioning: 5-ply corrugated sheets for timber edges, air bubble wrap for delicate surfaces, and waterproof stretch wrap.</p>
            </div>
            <div class="lko-card">
                <h3>4. Precision Loading & Transit</h3>
                <p>Goods are secured within closed-body container trucks using heavy-duty ratchet straps to prevent shifting during road transit.</p>
            </div>
            <div class="lko-card">
                <h3>5. Destination Placement</h3>
                <p>At your new destination, our crew unloads, reassembles furniture, places items per your room plan, and clears away all packing materials.</p>
            </div>
            <div class="lko-card">
                <h3>Transit Insurance Protection</h3>
                <p>Full transit risk insurance protects your shipment against unexpected road hazards or external transport contingencies.</p>
            </div>
        </div>

        <div class="lko-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Modular double bed dismantling by carpentry technician in Lucknow" loading="lazy">
            <p class="lko-image-caption">Certified carpentry technicians carefully dismantle modular double beds and sliding wardrobes</p>
        </div>
    </section>

    <!-- Section 6: Regional Highway Connectivity -->
    <section>
        <h2 class="lko-section-heading">Express Highway Connectivity Across Uttar Pradesh & India</h2>
        <p class="lko-intro-p">Lucknow serves as the focal crossroads of India's most advanced expressway network. With the 302 km Agra-Lucknow Expressway linking seamlessly to the Yamuna Expressway, our container fleet reaches the Delhi NCR in under six hours. Simultaneously, the 341 km Purvanchal Expressway provides high-speed access to eastern Uttar Pradesh and Bihar, connecting Sultanpur, Azamgarh, Mau, and Ghazipur directly to the state capital.</p>

        <p class="lko-intro-p">For relocations heading toward Eastern India—including Patna, Gaya, Ranchi, Jamshedpur, Bokaro, and Kolkata—our dedicated linehaul container fleet provides regular direct departures. Coordinated with our central logistics headquarters in <a href="<?php echo SITE_BASE_URL; ?>/" style="color: #2563eb; font-weight: 600; text-decoration: underline;">Ranchi</a>, clients enjoy daily milestone updates and live GPS tracking throughout the transit journey.</p>

        <p class="lko-intro-p">Our container fleet also leverages the newly developed Ring Road network, linking Sitapur Road (NH-24), Hardoi Road, and Kanpur Road (NH-27) seamlessly. This enables our inter-city drivers to navigate around dense urban traffic, ensuring prompt departures and predictable arrival schedules for cross-country consignments moving between northern, central, and eastern India.</p>

        <div class="lko-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery container truck in Lucknow Uttar Pradesh" loading="lazy">
            <p class="lko-image-caption">Weatherproof enclosed container trucks guarantee secure, timely door-to-door deliveries nationwide</p>
        </div>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section>
        <h2 class="lko-section-heading">Frequently Asked Questions</h2>
        <p class="lko-intro-p">Common questions regarding household and commercial relocations in Lucknow:</p>

        <div class="lko-faq-item">
            <div class="lko-faq-q">What are the home shifting charges within Lucknow city?</div>
            <div class="lko-faq-a">Local shifting charges within Lucknow typically range between ₹4,200 and ₹7,800 for a 1 BHK, ₹7,800 to ₹13,500 for a 2 BHK, and ₹12,500 to ₹20,000 for a 3 BHK apartment or independent kothi, covering multi-layer packing, carpentry, transit, and unloading.</div>
        </div>

        <div class="lko-faq-item">
            <div class="lko-faq-q">How do you manage high-rise moves in Gomti Nagar Extension and Shaheed Path?</div>
            <div class="lko-faq-a">Gomti Nagar Extension and Amar Shaheed Path feature modern multi-tower gated townships with underground parking and service elevators. Our operations desk coordinates advance gate passes, elevator padding, and deploy basement-accessible feeder trucks (Tata Ace / 407) to ensure seamless loading without surface congestion.</div>
        </div>

        <div class="lko-faq-item">
            <div class="lko-faq-q">Do you provide moving services for government and defense personnel in Lucknow?</div>
            <div class="lko-faq-a">Yes. As the state capital and Central Command military hub, Lucknow sees frequent transfers of civil servants, judicial officers, and armed forces personnel. We provide official GST moving bills, consignment tracking, and insurance documentation compliant with government reimbursement standards.</div>
        </div>

        <div class="lko-faq-item">
            <div class="lko-faq-q">How does Shree Ashirwad Packers protect delicate antique furniture and modular wardrobes?</div>
            <div class="lko-faq-a">Our certified carpentry technicians disassemble modular beds and almirahs, cataloging all hardware in marked pouches. Heritage timber furniture and delicate chikan-embroidered furnishings are wrapped in multi-layer foam blankets, bubble wrap, and corrugated armor sheets.</div>
        </div>

        <div class="lko-faq-item">
            <div class="lko-faq-q">Can you handle long-distance moves from Lucknow to Bihar, Jharkhand, and Delhi NCR?</div>
            <div class="lko-faq-a">Yes. Situated at the junction of Agra-Lucknow Expressway, Purvanchal Expressway, and Golden Quadrilateral NH-27, we operate regular GPS-tracked closed container linehauls connecting Lucknow directly to Patna, Ranchi, Jamshedpur, Delhi, and nationwide destinations.</div>
        </div>

        <div class="lko-faq-item">
            <div class="lko-faq-q">How far in advance should I book my relocation in Lucknow?</div>
            <div class="lko-faq-a">We recommend booking 2 to 4 days ahead. This allows ample time for a comprehensive home survey, custom crating fabrication if required, and reserving your preferred moving slot.</div>
        </div>
    </section>

    <!-- Section 8: Sister Neighborhoods & Authority Links -->
    <section>
        <h2 class="lko-section-heading">Connected Lucknow Shifting Hubs</h2>
        <p class="lko-intro-p">Explore our verified moving networks across Lucknow hyper-local sectors and major Uttar Pradesh cities:</p>

        <div class="lko-links-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gomti-nagar-lucknow" class="lko-link-card">Gomti Nagar Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gomti-nagar-extension-lucknow" class="lko-link-card">Gomti Nagar Extension</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-indira-nagar-lucknow" class="lko-link-card">Indira Nagar Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-alambagh-lucknow" class="lko-link-card">Alambagh Corridor</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hazratganj-lucknow" class="lko-link-card">Hazratganj Central</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-mahanagar-lucknow" class="lko-link-card">Mahanagar Elite</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ashiyana-lucknow" class="lko-link-card">Ashiyana Colony</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-jankipuram-lucknow" class="lko-link-card">Jankipuram Tech</a>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="lko-cta-box">
        <h3>Plan Your Lucknow Relocation Today</h3>
        <p>Contact our experienced moving specialists for a transparent estimate, free home survey, and seamless shifting experience across Lucknow.</p>
        <div class="lko-cta-group">
            <a href="tel:+919334404050" class="lko-btn-primary">Call: +91 93344 04050</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="lko-btn-secondary">Get Free Estimate</a>
        </div>
    </section>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
