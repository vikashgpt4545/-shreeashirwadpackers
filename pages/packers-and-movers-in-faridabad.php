<?php
/**
 * Page: Packers and Movers in Faridabad - City Authority Hub
 * File: pages/packers-and-movers-in-faridabad.php
 * URL Slug: /packers-and-movers-in-faridabad
 * Quality: Handcrafted, Rich Local Context, 4 Valid Schemas, 1,750+ Words
 */

// Define page-specific metadata
$page_title = 'Packers and Movers in Faridabad | Trusted Relocation Services';
$page_description = 'Premier packers and movers in Faridabad. Reliable residential house shifting, corporate office relocation, industrial logistics, and car transport across NIT, Greater Faridabad, and Sector 15.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-faridabad';

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
    <meta name="keywords" content="packers and movers in faridabad, best movers and packers faridabad, house shifting faridabad, nit faridabad movers, greater faridabad shifting, packers movers mathura road faridabad">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Schema 1: MovingCompany (LocalBusiness) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Faridabad",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 93344 04050",
        "priceRange": "₹4,200 - ₹52,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Main Mathura Road, Near Neelam Flyover, NIT",
            "addressLocality": "Faridabad",
            "addressRegion": "Haryana",
            "postalCode": "121001",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 28.4089,
            "longitude": 77.3178
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
                "name": "Haryana Hubs",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gurgaon"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Faridabad",
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
        "serviceType": "Comprehensive Residential, Corporate & Industrial Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "Place",
            "name": "Faridabad, NIT, Greater Faridabad, Neharpar, Sector 15, Sector 21, Ballabhgarh"
        },
        "description": "Full-scale house shifting, high-rise apartment relocations, industrial machinery packing, corporate office transitions, and inter-state logistics in Faridabad Haryana."
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
                "name": "How does Shree Ashirwad manage shifting in newly developed Greater Faridabad (Neharpar) societies?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Greater Faridabad (Sectors 75 to 89) consists of modern high-rise gated societies such as BPTP Parklands, Puri Pranayam, and Omaxe Heights. We coordinate directly with facility management offices for freight elevator bookings, gate passes, and deploy specialized platform trolleys for basement loading."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide industrial and factory shifting services in Faridabad's manufacturing belts?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Faridabad is a premier industrial metropolis home to heavy manufacturing and engineering hubs. We provide turnkey industrial shifting, including CNC machine crating, warehouse inventory transfers, electrical panel packaging, and heavy machinery rigging."
                }
            },
            {
                "@type": "Question",
                "name": "What are the local home shifting rates across Faridabad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local moves within Faridabad or to neighboring Delhi NCR hubs range from ₹4,200 to ₹7,500 for a 1 BHK, ₹7,500 to ₹13,000 for a 2 BHK apartment, and ₹12,000 to ₹19,500 for a 3 BHK builder floor or high-rise condominium, covering complete packing materials, carpentry disassembly, transport, and unloading."
                }
            },
            {
                "@type": "Question",
                "name": "Can you handle long-distance moves from Faridabad to Bihar, Jharkhand, and eastern India?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Faridabad is strategically connected to NH-19 (Grand Trunk Road / Delhi-Kolkata corridor) and the Eastern Peripheral Expressway (KGP). We operate regular linehaul container services connecting Faridabad directly to Patna, Ranchi, Dhanbad, Jamshedpur, and Kolkata with full GPS tracking."
                }
            },
            {
                "@type": "Question",
                "name": "Are moving trucks allowed on Mathura Road and internal NIT zones during daytime hours?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Commercial vehicle movement is restricted on certain central Faridabad arterial stretches during peak traffic hours (8:30 AM to 11:00 AM and 5:00 PM to 8:30 PM). Our dispatch supervisors schedule loading during early morning hours or deploy medium-sized 14-foot container vehicles that comply with municipal traffic rules."
                }
            },
            {
                "@type": "Question",
                "name": "How do you protect antique furniture and modular wooden cabinetry during shifting?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our professional carpenters disassemble modular beds and cabinetry, pack each component in high-density foam blankets, apply corner edge guards, and wrap them in heavy stretch film to prevent scratches or friction wear during transit."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles with 100% class prefix parity: fbd- */
        .fbd-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.7;
        }
        .fbd-hero-section {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
            color: #ffffff;
            padding: 55px 30px;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            margin-bottom: 35px;
            text-align: center;
        }
        .fbd-hero-title {
            font-size: 2.35rem;
            line-height: 1.25;
            margin-bottom: 18px;
            font-weight: 800;
            color: #ffffff;
        }
        .fbd-hero-subtitle {
            font-size: 1.15rem;
            line-height: 1.6;
            margin: 0 auto 24px;
            max-width: 860px;
            color: #f1f5f9;
            font-weight: 400;
        }
        .fbd-meta-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            margin-bottom: 25px;
        }
        .fbd-badge {
            background-color: rgba(255, 255, 255, 0.15);
            color: #ffffff;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.88rem;
            font-weight: 500;
            backdrop-filter: blur(4px);
            border: 1px solid rgba(255, 255, 255, 0.25);
        }
        .fbd-hero-cta {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .fbd-btn-primary {
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
        .fbd-btn-primary:hover {
            background-color: #d97706;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(217, 119, 6, 0.4);
            color: #ffffff;
        }
        .fbd-btn-secondary {
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
        .fbd-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
            color: #ffffff;
        }
        .fbd-section-heading {
            font-size: 1.9rem;
            color: #1e293b;
            font-weight: 800;
            margin-top: 40px;
            margin-bottom: 18px;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .fbd-section-heading::after {
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
        .fbd-intro-p {
            font-size: 1.05rem;
            color: #374151;
            margin-bottom: 16px;
            line-height: 1.75;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
        }
        .fbd-section-heading + .fbd-intro-p {
            text-align: center;
            max-width: 860px;
            margin: 0 auto 24px;
            color: #4b5563;
        }
        .fbd-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .fbd-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .fbd-grid-3 {
                grid-template-columns: 1fr;
            }
        }
        .fbd-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .fbd-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            border-color: #475569;
        }
        .fbd-card h3 {
            color: #1e293b;
            font-size: 1.18rem;
            margin-top: 0;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .fbd-card p {
            color: #4b5563;
            font-size: 0.95rem;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .fbd-image-container {
            max-width: 580px;
            margin: 24px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }
        .fbd-image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .fbd-image-container img:hover {
            transform: scale(1.02);
        }
        .fbd-image-caption {
            font-size: 0.88rem;
            color: #64748b;
            text-align: center;
            padding: 8px 12px;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            margin: 0;
        }
        .fbd-table-wrap {
            overflow-x: auto;
            margin: 25px 0;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
        }
        .fbd-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
            background-color: #ffffff;
        }
        .fbd-table th, .fbd-table td {
            padding: 14px 16px;
            text-align: left;
            border-bottom: 1px solid #e5e7eb;
        }
        .fbd-table th {
            background-color: #1e293b;
            color: #ffffff;
            font-weight: 600;
        }
        .fbd-table tr:hover {
            background-color: #f8fafc;
        }
        .fbd-highlight-box {
            background: #f8fafc;
            border-left: 4px solid #f59e0b;
            padding: 20px 24px;
            border-radius: 0 8px 8px 0;
            margin: 24px auto;
            max-width: 980px;
        }
        .fbd-highlight-box h3 {
            color: #1e293b;
            font-size: 1.15rem;
            margin-top: 0;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .fbd-highlight-box p {
            color: #4b5563;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .fbd-faq-item {
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 18px 22px;
            margin-bottom: 14px;
            background: #ffffff;
        }
        .fbd-faq-item h3 {
            color: #1e293b;
            font-size: 1.1rem;
            margin-top: 0;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .fbd-faq-item p {
            color: #4b5563;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .fbd-cluster-links {
            background: #f1f5f9;
            border-radius: 10px;
            padding: 24px;
            margin-top: 35px;
            border: 1px solid #e2e8f0;
        }
        .fbd-cluster-links h3 {
            font-size: 1.25rem;
            color: #1e293b;
            margin-top: 0;
            margin-bottom: 14px;
            text-align: center;
        }
        .fbd-cluster-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
        }
        @media (max-width: 900px) {
            .fbd-cluster-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 500px) {
            .fbd-cluster-grid {
                grid-template-columns: 1fr;
            }
        }
        .fbd-cluster-grid a {
            display: block;
            background: #ffffff;
            padding: 10px 14px;
            border-radius: 6px;
            text-decoration: none;
            color: #334155;
            font-weight: 500;
            font-size: 0.92rem;
            border: 1px solid #cbd5e1;
            transition: all 0.2s ease;
            text-align: center;
        }
        .fbd-cluster-grid a:hover {
            background: #1e293b;
            color: #ffffff;
            border-color: #1e293b;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="fbd-wrap">
    <!-- Hero Section -->
    <section class="fbd-hero-section">
        <h1 class="fbd-hero-title">Packers and Movers in Faridabad</h1>
        <p class="fbd-hero-subtitle">Trusted residential shifting, corporate office relocations, industrial logistics, and vehicle transportation across NIT, Greater Faridabad, Sector 15, and Delhi NCR corridors.</p>
        <div class="fbd-meta-badges">
            <span class="fbd-badge">IBA Approved Transport Standards</span>
            <span class="fbd-badge">100% Weatherproof Container Fleet</span>
            <span class="fbd-badge">Zero-Damage Guarantee</span>
            <span class="fbd-badge">Over 15 Years of NCR Moving Excellence</span>
        </div>
        <div class="fbd-hero-cta">
            <a href="tel:+919334404050" class="fbd-btn-primary">Call +91 93344 04050</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="fbd-btn-secondary">Check Tariff Calculator</a>
        </div>
    </section>

    <!-- Section 1: Faridabad Geographic & Economic Overview -->
    <section>
        <h2 class="fbd-section-heading">Faridabad's Premier Relocation & Logistics Infrastructure</h2>
        <p class="fbd-intro-p">As Haryana's oldest industrial powerhouse and an essential commercial cornerstone of the National Capital Region, Faridabad presents a unique, multi-layered urban landscape.</p>
        
        <p class="fbd-intro-p">Stretching along the high-traffic Delhi-Mathura National Highway (NH-19) and anchored by the Violet Metro Line from Badarpur border to Ballabhgarh, Faridabad bridges historic residential enclaves with ultramodern smart city infrastructure. From the planned post-independence blocks of New Industrial Town (NIT 1 to 5) and the leafy residential avenues of Sectors 14, 15, and 16, to the upscale foothills of Surajkund, Charmwood Village, and Green Field Colony, our moving operations cater to every micro-geography.</p>

        <div class="fbd-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loading in Faridabad container truck" width="580" height="386" loading="lazy">
            <p class="fbd-image-caption">Systematic loading and protective padding of residential goods in Faridabad Haryana.</p>
        </div>

        <p class="fbd-intro-p">Furthermore, the rapid emergence of Greater Faridabad (Neharpar Sectors 75 to 89) has transformed the district with massive multi-tower gated condominium townships like BPTP Parklands, Puri Pranayam, and Omaxe Heights. Shree Ashirwad Packers and Movers combines heavy industrial capability with delicate white-glove household packing, ensuring seamless transitions across every residential colony and industrial estate in Faridabad.</p>
    </section>

    <!-- Section 2: Comprehensive Moving Services -->
    <section>
        <h2 class="fbd-section-heading">Comprehensive Relocation Solutions Across Faridabad</h2>
        <p class="fbd-intro-p">Our comprehensive service suite is built to handle the diverse relocation requirements of families, government personnel, corporate executives, and manufacturing plants.</p>

        <div class="fbd-grid-3">
            <div class="fbd-card">
                <h3>Residential House & Kothi Shifting</h3>
                <p>Complete packing, loading, and safe transport for independent houses, kothis, and builder floors in NIT, Sector 15, Sector 16, and Old Faridabad with specialized furniture care.</p>
            </div>
            <div class="fbd-card">
                <h3>High-Rise Condominium Moving</h3>
                <p>Engineered shifting for Greater Faridabad high-rise towers, utilizing padded elevator staging, floor protection sheets, and coordinated facility management clearances.</p>
            </div>
            <div class="fbd-card">
                <h3>Industrial Machinery & Plant Relocation</h3>
                <p>Heavy-duty crating, electrical panel cushioning, and hydraulic rigging for manufacturing units, tool rooms, and automotive component workshops across Faridabad's industrial sectors.</p>
            </div>
            <div class="fbd-card">
                <h3>Corporate & Office Relocations</h3>
                <p>Systematic workstation dismantling, server rack handling, indexed document boxing, and weekend corporate relocations with minimal office downtime.</p>
            </div>
            <div class="fbd-card">
                <h3>Car & Two-Wheeler Transportation</h3>
                <p>Doorstep pickup using specialized enclosed car carriers with wheel locking clamps, comprehensive scratch inspection sheets, and full transit insurance coverage.</p>
            </div>
            <div class="fbd-card">
                <h3>Inter-State Corridor Logistics</h3>
                <p>Direct linehaul container routes connecting Faridabad via NH-19 and Eastern Peripheral Expressway (KGP) to Bihar, Jharkhand, West Bengal, and nationwide destinations.</p>
            </div>
        </div>

        <div class="fbd-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Five-layer protective bubble wrapping in Faridabad" width="580" height="386" loading="lazy">
            <p class="fbd-image-caption">High-density bubble wrapping and foam cushioning for fragile electronics and chinaware.</p>
        </div>
    </section>

    <!-- Section 3: Prominent Sectors & Moving Dynamics -->
    <section>
        <h2 class="fbd-section-heading">Navigating Faridabad's Key Neighborhoods & Sectors</h2>
        <p class="fbd-intro-p">Different sectors of Faridabad feature distinct road layouts, traffic conditions, and residential building designs that require tailored logistical planning.</p>

        <div class="fbd-grid-3">
            <div class="fbd-card">
                <h3>NIT (New Industrial Town 1 to 5)</h3>
                <p>Dense residential and commercial zones centered around Neelam Chowk, BK Chowk, and NIT markets. Shifting requires navigating bustling internal lanes with agile 14-foot container vehicles.</p>
            </div>
            <div class="fbd-card">
                <h3>Sectors 14, 15, 16 & 17</h3>
                <p>Faridabad's most established upscale residential sectors featuring sprawling independent kothis and modern builder floors, demanding expert furniture dismantling and fine art handling.</p>
            </div>
            <div class="fbd-card">
                <h3>Sector 21 (Badkhal & Enclaves)</h3>
                <p>Nestled near the Aravalli ridges and Badkhal Lake, encompassing Sector 21A, 21B, 21C, and 21D. Characterized by serene residential complexes and multi-level duplex apartments.</p>
            </div>
            <div class="fbd-card">
                <h3>Greater Faridabad (Neharpar Sectors 75-89)</h3>
                <p>The city's modern skyscraper belt with extensive gated communities. High-speed freight elevators and designated basement loading docks make structured shifting essential.</p>
            </div>
            <div class="fbd-card">
                <h3>Green Field Colony & Charmwood</h3>
                <p>Hilltop residential enclaves bordering South Delhi's Badarpur and Surajkund Road, demanding careful vehicle handling on winding ascents and guarded entry checkpoints.</p>
            </div>
            <div class="fbd-card">
                <h3>Ballabhgarh & Industrial Sectors</h3>
                <p>Massive industrial zones spanning Sectors 24, 25, 58, and 59, where heavy raw material transport, equipment crating, and commercial freight operations are concentrated.</p>
            </div>
        </div>

        <div class="fbd-highlight-box">
            <h3>Strategic Expressway & Highway Connectivity</h3>
            <p>Faridabad's unique geographical positioning along National Highway 19, the Eastern Peripheral Expressway (Kundli-Ghaziabad-Palwal / KGP), and the Delhi-Mumbai Expressway link road allows our container vehicles to initiate inter-state journeys swiftly. Consignments destined for eastern corridors (Patna, Ranchi, Kolkata) bypass central Delhi congestion entirely, saving up to 6 hours of transit time.</p>
        </div>
    </section>

    <!-- Section 4: Transparent Charges & Tariff Table -->
    <section>
        <h2 class="fbd-section-heading">Transparent Relocation Charges in Faridabad</h2>
        <p class="fbd-intro-p">We provide clear, honest estimates with zero hidden costs, unannounced stair fees, or surprise surcharges. Explore our estimated shifting tariffs below:</p>

        <div class="fbd-table-wrap">
            <table class="fbd-table">
                <thead>
                    <tr>
                        <th>Shifting Category</th>
                        <th>Packing Material & Labor</th>
                        <th>Local Shifting (Faridabad / NCR)</th>
                        <th>Domestic Outstation Transit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment / Floor</strong></td>
                        <td>₹2,000 - ₹3,500</td>
                        <td>₹4,200 - ₹7,500</td>
                        <td>₹13,000 - ₹23,000</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Flat / Builder Floor</strong></td>
                        <td>₹3,500 - ₹5,500</td>
                        <td>₹7,500 - ₹13,000</td>
                        <td>₹17,500 - ₹31,000</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Kothi / High-Rise Flat</strong></td>
                        <td>₹5,500 - ₹8,500</td>
                        <td>₹12,000 - ₹19,500</td>
                        <td>₹25,000 - ₹43,000</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Luxury Villa Relocation</strong></td>
                        <td>₹7,500 - ₹12,000</td>
                        <td>₹16,500 - ₹26,500</td>
                        <td>₹34,000 - ₹57,000</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler Transport</strong></td>
                        <td>₹1,000 - ₹1,800</td>
                        <td>₹2,000 - ₹3,800</td>
                        <td>₹4,800 - ₹9,000</td>
                    </tr>
                    <tr>
                        <td><strong>Four-Wheeler Car Moving</strong></td>
                        <td>₹1,500 - ₹2,500</td>
                        <td>₹3,200 - ₹6,000</td>
                        <td>₹10,000 - ₹18,500</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="fbd-highlight-box">
            <h3>Get an Itemized Quotation in Minutes</h3>
            <p>Moving charges vary based on cargo volume, packing specifications, walking distance from parking bays, and elevator access. Use our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" style="color: #d97706; font-weight: 600; text-decoration: underline;">online shifting charges calculator</a> or schedule a complimentary video/in-person survey with our Faridabad operations desk.</p>
        </div>
    </section>

    <!-- Section 5: Step-by-Step Moving Methodology -->
    <section>
        <h2 class="fbd-section-heading">Our 6-Step Precision Shifting Methodology</h2>
        <p class="fbd-intro-p">Every move executed by Shree Ashirwad Packers and Movers in Faridabad follows an uncompromising engineering protocol designed to guarantee zero damage.</p>

        <div class="fbd-grid-3">
            <div class="fbd-card">
                <h3>1. Pre-Move Inventory Audit</h3>
                <p>Our supervisor inspects your belongings, catalogs oversized furniture and electronics, and creates an indexed packing plan considering building elevator and parking access.</p>
            </div>
            <div class="fbd-card">
                <h3>2. Multi-Layered Packaging</h3>
                <p>We wrap fragile ceramics, glassware, and electronics in multi-layer bubble wrap, edge protectors, and double-wall heavy corrugated boxes to withstand transit vibrations.</p>
            </div>
            <div class="fbd-card">
                <h3>3. Furniture Carpentry & Disassembly</h3>
                <p>Skilled in-house carpenters dismantle modular wardrobes, hydraulic beds, and dining sets. Hardware bolts and brackets are cataloged in numbered pouches for accurate reassembly.</p>
            </div>
            <div class="fbd-card">
                <h3>4. Scientific Vehicle Staging</h3>
                <p>Heavy goods form the base layer secured with cargo tie-down straps. Fragile items and electronic cartons are layered on top to prevent pressure or shifting during highway travel.</p>
            </div>
            <div class="fbd-card">
                <h3>5. Weatherproof Closed Transit</h3>
                <p>Transported inside all-weather containerized trucks equipped with GPS tracking, protecting your goods against rain, dust, soot, and road grime from origin to destination.</p>
            </div>
            <div class="fbd-card">
                <h3>6. Unloading & Destination Setup</h3>
                <p>Our crew unloads and places boxes in designated rooms, reassembles all dismantled furniture, assists with appliance placement, and removes all discarded packaging waste.</p>
            </div>
        </div>

        <div class="fbd-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture dismantling and carpentry handling in Faridabad" width="580" height="386" loading="lazy">
            <p class="fbd-image-caption">Precision furniture disassembly and wrapped timber protection for Faridabad residences.</p>
        </div>

        <p class="fbd-intro-p">By coordinating every milestone with facility management, our field supervisors ensure that security gate guards, property managers, and elevator operators remain informed, ensuring that your moving day proceeds without friction.</p>

        <p class="fbd-intro-p">Whether you are relocating within Faridabad, shifting across the border to Delhi or Noida, or embarking on a long-distance move to eastern or southern India, our dedicated logistics infrastructure guarantees on-time delivery.</p>
    </section>

    <!-- Section 6: Why Choose Shree Ashirwad in Faridabad -->
    <section>
        <h2 class="fbd-section-heading">Why Choose Shree Ashirwad Packers and Movers</h2>
        <p class="fbd-intro-p">With thousands of successful relocations completed across Haryana and Delhi NCR, we are the trusted choice for families and businesses.</p>

        <div class="fbd-grid-3">
            <div class="fbd-card">
                <h3>100% In-House Trained Staff</h3>
                <p>We do not contract day labor. Our crews are full-time employees trained in condominium protocols, delicate handling, and polite resident communication.</p>
            </div>
            <div class="fbd-card">
                <h3>Zero-Damage Guarantee</h3>
                <p>Every fragile item is cushioned with premium packing materials, reinforced corner buffers, and strapped securely to avoid shifting during vehicle movement.</p>
            </div>
            <div class="fbd-card">
                <h3>Weatherproof Container Fleet</h3>
                <p>Our closed-body container fleet protects your belongings from dust, highway rain, exhaust soot, and extreme summer temperatures throughout the journey.</p>
            </div>
            <div class="fbd-card">
                <h3>Comprehensive Transit Insurance</h3>
                <p>Enjoy absolute peace of mind with full transit insurance policies covering any unforeseen transit accidents or environmental damage during long-distance moves.</p>
            </div>
            <div class="fbd-card">
                <h3>Real-Time Consignment Tracking</h3>
                <p>Receive live GPS location updates on your container vehicle, allowing you to plan your flight, train, or road travel in sync with your household delivery.</p>
            </div>
            <div class="fbd-card">
                <h3>On-Time Delivery Commitment</h3>
                <p>We honor strict pickup and delivery windows, ensuring you never have to wait inside an empty apartment for days waiting for your household goods to arrive.</p>
            </div>
        </div>

        <div class="fbd-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Shree Ashirwad door-to-door container delivery truck in Faridabad" width="580" height="386" loading="lazy">
            <p class="fbd-image-caption">Dedicated closed-body container fleet ensuring dust-free and weather-protected delivery.</p>
        </div>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section>
        <h2 class="fbd-section-heading">Frequently Asked Questions — Faridabad Shifting</h2>
        <p class="fbd-intro-p">Helpful answers to common shifting questions for residents and businesses planning relocations in Faridabad.</p>

        <div class="fbd-faq-item">
            <h3>How does Shree Ashirwad manage shifting in newly developed Greater Faridabad (Neharpar) societies?</h3>
            <p>Greater Faridabad (Sectors 75 to 89) consists of modern high-rise gated societies such as BPTP Parklands, Puri Pranayam, and Omaxe Heights. We coordinate directly with facility management offices for freight elevator bookings, gate passes, and deploy specialized platform trolleys for basement loading.</p>
        </div>

        <div class="fbd-faq-item">
            <h3>Do you provide industrial and factory shifting services in Faridabad's manufacturing belts?</h3>
            <p>Yes. Faridabad is a premier industrial metropolis home to heavy manufacturing and engineering hubs. We provide turnkey industrial shifting, including CNC machine crating, warehouse inventory transfers, electrical panel packaging, and heavy machinery rigging.</p>
        </div>

        <div class="fbd-faq-item">
            <h3>What are the local home shifting rates across Faridabad?</h3>
            <p>Local moves within Faridabad or to neighboring Delhi NCR hubs range from ₹4,200 to ₹7,500 for a 1 BHK, ₹7,500 to ₹13,000 for a 2 BHK apartment, and ₹12,000 to ₹19,500 for a 3 BHK builder floor or high-rise condominium, covering complete packing materials, carpentry disassembly, transport, and unloading.</p>
        </div>

        <div class="fbd-faq-item">
            <h3>Can you handle long-distance moves from Faridabad to Bihar, Jharkhand, and eastern India?</h3>
            <p>Yes. Faridabad is strategically connected to NH-19 (Grand Trunk Road / Delhi-Kolkata corridor) and the Eastern Peripheral Expressway (KGP). We operate regular linehaul container services connecting Faridabad directly to Patna, Ranchi, Dhanbad, Jamshedpur, and Kolkata with full GPS tracking.</p>
        </div>

        <div class="fbd-faq-item">
            <h3>Are moving trucks allowed on Mathura Road and internal NIT zones during daytime hours?</h3>
            <p>Commercial vehicle movement is restricted on certain central Faridabad arterial stretches during peak traffic hours (8:30 AM to 11:00 AM and 5:00 PM to 8:30 PM). Our dispatch supervisors schedule loading during early morning hours or deploy medium-sized 14-foot container vehicles that comply with municipal traffic rules.</p>
        </div>

        <div class="fbd-faq-item">
            <h3>How do you protect antique furniture and modular wooden cabinetry during shifting?</h3>
            <p>Our professional carpenters disassemble modular beds and cabinetry, pack each component in high-density foam blankets, apply corner edge guards, and wrap them in heavy stretch film to prevent scratches or friction wear during transit.</p>
        </div>
    </section>

    <!-- Section 8: Connected Neighborhood Hubs -->
    <section class="fbd-cluster-links">
        <h3>Explore Faridabad Neighborhood & NCR Relocation Hubs</h3>
        <p style="text-align: center; color: #64748b; font-size: 0.95rem; margin-bottom: 20px;">Seamless inter-connected moving services across major commercial and residential clusters:</p>
        <div class="fbd-cluster-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-nit-faridabad">NIT Faridabad</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sector-15-faridabad">Sector 15 Faridabad</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sector-21-faridabad">Sector 21 Faridabad</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-greater-faridabad">Greater Faridabad</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-green-field-faridabad">Green Field Faridabad</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gurgaon">Packers Movers Gurgaon</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida">Packers Movers Noida</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-delhi">Packers Movers Delhi</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">Live Tariff Rate Calculator</a>
            <a href="<?php echo SITE_BASE_URL; ?>/">Company HQ Ranchi</a>
        </div>
    </section>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
