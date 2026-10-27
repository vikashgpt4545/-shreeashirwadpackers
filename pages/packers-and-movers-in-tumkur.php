<?php
/**
 * Page: Packers and Movers in Tumkur (Tumakuru)
 * File: pages/packers-and-movers-in-tumkur.php
 * URL Slug: packers-and-movers-in-tumkur
 * Status: Published
 */

if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__));
}
require_once ROOT_PATH . '/includes/config.php';

// Define page-level metadata
$page_title = "Packers and Movers in Tumkur Tumakuru | Trusted Shifting Services";
$page_description = "ISO certified packers and movers in Tumkur (Tumakuru). Expert household shifting, Vasantanarasapura industrial moving, SIT campus relocation & vehicle transport in SS Puram & Batawadi.";
$canonical_url = SITE_BASE_URL . "/packers-and-movers-in-tumkur";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="keywords" content="packers and movers in tumkur, packers and movers in tumakuru, packers and movers tumkur, household shifting tumkur, movers and packers vasantanarasapura, packers and movers ss puram tumkur, car transport tumkur">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Tumkur",
        "image": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+919334404050",
        "priceRange": "₹3,200 - ₹50,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "NH-48 Service Road, Near Batawadi Circle",
            "addressLocality": "Tumkur (Tumakuru)",
            "addressRegion": "Karnataka",
            "postalCode": "572103",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 13.3409,
            "longitude": 77.1010
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
                "Sunday"
            ],
            "opens": "07:00",
            "closes": "22:00"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "236"
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
                "name": "Karnataka",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bangalore"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Tumkur Tumakuru",
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
        "serviceType": "Industrial Corridor Relocation and Domestic Shifting",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "City",
            "name": "Tumkur"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Tumkur Shifting Services Catalog",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Household Relocation Services Tumkur"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Vasantanarasapura Industrial & Factory Logistics"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "SIT & University Faculty Moving Services"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Car Carrier & Bike Transport Tumkur"
                    }
                }
            ]
        }
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
                "name": "What are the packers and movers charges in Tumkur (Tumakuru)?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting in Tumkur starts at ₹3,200 to ₹5,800 for 1 BHK, ₹5,800 to ₹11,000 for 2 BHK, and ₹9,000 to ₹17,500 for 3 BHK homes. Relocations from Tumkur to Bangalore typically cost between ₹7,000 and ₹18,000 depending on consignment volume and floor levels."
                }
            },
            {
                "@type": "Question",
                "name": "Do you offer industrial relocation for Vasantanarasapura Industrial Area?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we handle heavy machinery rigging, industrial parts warehousing, and factory shifts in Vasantanarasapura, Antharasanahalli, and Dobbaspet industrial belts with hydraulic tail-lift trucks and cranes."
                }
            },
            {
                "@type": "Question",
                "name": "How much time does shifting from Tumkur to Bangalore take?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Because Tumkur is situated just 70 km from Bangalore along the NH-48 express corridor, transit generally takes only 2.5 to 3.5 hours, allowing same-day packing, transport, and delivery."
                }
            },
            {
                "@type": "Question",
                "name": "Can you handle student and faculty relocations near SIT and Tumkur University?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide specialized economical room and flat shifting for professors, researchers, and students near Siddaganga Institute of Technology (SIT), Sri Siddhartha Academy, and SS Puram."
                }
            },
            {
                "@type": "Question",
                "name": "Is goods transit insurance provided for interstate moves from Tumkur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide 100% comprehensive transit insurance coverage with itemized declaration receipts, supported through our central customer care headquarters in Ranchi."
                }
            },
            {
                "@type": "Question",
                "name": "How do you protect fragile items and expensive electronic appliances?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We utilize seven-layer corrugated cartons, high-density bubble sheets, custom wooden crates for LED displays, and anti-static wraps for computer monitors and kitchen appliances."
                }
            },
            {
                "@type": "Question",
                "name": "Can you move apartments in older Tumkur sectors without passenger elevators?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our certified crews are specially trained in manual stair-carry techniques using shoulder dollies and heavy-duty padded lifting straps to navigate narrow staircase landings in Mandipet, Gubbi Gate, and SS Puram without wall scuffs or furniture damage."
                }
            },
            {
                "@type": "Question",
                "name": "How do you secure goods during heavy monsoon rainfall in the Tumkur region?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "All consignments are packed with primary stretch film, placed inside closed metal container trucks with rubberized weatherproof seals, and elevated off the floor using wooden pallets and moisture-absorbing silica packets."
                }
            }
        ]
    }
    </script>

    <style>
        .tmk-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.65;
        }
        .tmk-header {
            background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%);
            color: #ffffff;
            padding: 45px 25px;
            border-radius: 12px;
            margin-bottom: 30px;
            text-align: center;
        }
        .tmk-header h1 {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.25;
            color: #ffffff;
        }
        .tmk-header p {
            font-size: 1.1rem;
            max-width: 900px;
            margin: 0 auto 20px;
            color: #e2e8f0;
        }
        .tmk-btn-wrap {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .tmk-btn-primary {
            background: #ea580c;
            color: #ffffff;
            padding: 12px 26px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 700;
            display: inline-block;
            transition: background 0.2s ease;
        }
        .tmk-btn-primary:hover {
            background: #c2410c;
        }
        .tmk-btn-secondary {
            background: #ffffff;
            color: #1e3a8a;
            padding: 12px 26px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 700;
            display: inline-block;
            transition: background 0.2s ease;
        }
        .tmk-btn-secondary:hover {
            background: #f1f5f9;
        }
        .tmk-section {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 32px 28px;
            margin-bottom: 30px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .tmk-section-heading {
            font-size: 1.75rem;
            color: #1e3a8a;
            margin-bottom: 16px;
            font-weight: 700;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
        }
        .tmk-subheading {
            font-size: 1.3rem;
            color: #0f172a;
            margin-top: 24px;
            margin-bottom: 12px;
            font-weight: 600;
        }
        .tmk-intro-p {
            font-size: 1.05rem;
            color: #334155;
            margin-bottom: 18px;
        }
        .tmk-highlight-box {
            background: #f8fafc;
            border-left: 4px solid #ea580c;
            padding: 20px 22px;
            border-radius: 0 8px 8px 0;
            margin: 24px 0;
        }
        .tmk-highlight-box h3 {
            font-size: 1.15rem;
            color: #1e3a8a;
            margin-top: 0;
            margin-bottom: 10px;
        }
        .tmk-highlight-box ul {
            margin: 0;
            padding-left: 20px;
        }
        .tmk-highlight-box li {
            margin-bottom: 8px;
            color: #334155;
        }
        .tmk-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 24px 0;
        }
        .tmk-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 20px 18px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .tmk-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 15px -3px rgba(0, 0, 0, 0.08);
        }
        .tmk-card h3 {
            font-size: 1.15rem;
            color: #1e3a8a;
            margin-top: 0;
            margin-bottom: 10px;
        }
        .tmk-card p {
            font-size: 0.95rem;
            color: #475569;
            margin: 0;
            line-height: 1.55;
        }
        .tmk-table {
            width: 100%;
            border-collapse: collapse;
            margin: 24px 0;
            background: #ffffff;
        }
        .tmk-table th {
            background: #1e3a8a;
            color: #ffffff;
            text-align: left;
            padding: 12px 14px;
            font-size: 0.95rem;
        }
        .tmk-table td {
            padding: 12px 14px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 0.92rem;
            color: #334155;
        }
        .tmk-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .tmk-image-container {
            max-width: 580px;
            margin: 28px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            text-align: center;
        }
        .tmk-image-container img {
            width: 100%;
            height: auto;
            display: block;
        }
        .tmk-image-caption {
            background: #f1f5f9;
            color: #475569;
            font-size: 0.88rem;
            padding: 8px 12px;
            margin: 0;
            text-align: center;
            border-top: 1px solid #e2e8f0;
        }
        .tmk-step-list {
            margin: 24px 0;
        }
        .tmk-step-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 18px 16px;
        }
        .tmk-step-num {
            background: #ea580c;
            color: #ffffff;
            font-weight: 800;
            font-size: 1.2rem;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 18px;
            flex-shrink: 0;
        }
        .tmk-step-content h3 {
            margin: 0 0 6px;
            font-size: 1.15rem;
            color: #1e3a8a;
        }
        .tmk-step-content p {
            margin: 0;
            font-size: 0.95rem;
            color: #475569;
        }
        .tmk-faq-item {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 18px 20px;
            margin-bottom: 14px;
        }
        .tmk-faq-item h3 {
            font-size: 1.15rem;
            color: #1e3a8a;
            margin-bottom: 8px;
            font-weight: 600;
        }
        .tmk-faq-item p {
            font-size: 0.96rem;
            color: #475569;
            margin: 0;
            line-height: 1.6;
        }
        .tmk-cluster-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin-top: 25px;
        }
        .tmk-cluster-card {
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            padding: 14px 10px;
            border-radius: 6px;
            text-align: center;
            transition: all 0.2s ease;
        }
        .tmk-cluster-card:hover {
            border-color: #ea580c;
            background: #fff;
            transform: translateY(-2px);
        }
        .tmk-cluster-card a {
            text-decoration: none;
            color: #1e3a8a;
            font-weight: 600;
            font-size: 0.92rem;
            display: block;
        }
        .tmk-cluster-card a:hover {
            color: #ea580c;
        }
        @media (max-width: 768px) {
            .tmk-grid-3 {
                grid-template-columns: 1fr;
            }
            .tmk-cluster-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .tmk-header h1 {
                font-size: 1.75rem;
            }
            .tmk-section {
                padding: 22px 16px;
            }
        }
    </style>
</head>
<body>
<?php include ROOT_PATH . '/includes/header.php'; ?>

<main class="tmk-wrap">
    <!-- Hero Header -->
    <header class="tmk-header">
        <h1>Packers and Movers in Tumkur (Tumakuru)</h1>
        <p>Premier Relocation Partner for Karnataka's Smart City, Vasantanarasapura Industrial Hub & NH-48 Bangalore Highway Corridor</p>
        <div class="tmk-btn-wrap">
            <a href="tel:+919334404050" class="tmk-btn-primary">Call Now: +91 9334404050</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="tmk-btn-secondary">Check Tariff Calculator</a>
        </div>
    </header>

    <!-- Section 1: Overview & Regional Importance -->
    <section class="tmk-section">
        <h2 class="tmk-section-heading">Professional Relocation & Industrial Shifting Across Tumkur</h2>
        <p class="tmk-intro-p">Tumkur, officially renamed Tumakuru, stands as one of Karnataka's most strategic industrial powerhouses and designated Smart Cities. Situated merely 70 kilometers northwest of <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bangalore">Bangalore</a> along National Highway 48, Tumkur bridges the state capital with the agricultural heartlands of central Karnataka and the mining corridors of Bellary and Davanagere. Known historically for the revered Siddaganga Math and its esteemed educational institutions like Siddaganga Institute of Technology (SIT), modern Tumkur has transformed into a critical economic nerve center hosting the massive Vasantanarasapura Industrial Area, Antharasanahalli Industrial Estate, and extensive Japanese industrial zones.</p>
        
        <p class="tmk-intro-p">At Shree Ashirwad Packers and Movers, we deliver comprehensive, end-to-end relocation services specifically tailored to the unique industrial and residential requirements of Tumkur. Whether you are shifting your family residence from SS Puram to Batawadi, transferring manufacturing equipment to the Vasantanarasapura corridor, or relocating corporate executives between Tumkur and Bangalore, our skilled crews provide unmatched precision, safety, and operational reliability.</p>

        <h3 class="tmk-subheading">Strategic Logistics Highway & Industrial Proximity</h3>
        <p class="tmk-intro-p">Tumkur's prime location along the Golden Quadrilateral highway network enables rapid freight connectivity. The toll expressway ensures that goods loaded in Tumkur reach key distribution nodes in Peenya, Nelamangala, and Yeshwanthpur within hours. Our dedicated container fleet operates daily shuttles across this vital artery, giving local manufacturers, business proprietors, and shifting families seamless same-day delivery options with GPS tracking and zero intermediate transfer risks.</p>

        <div class="tmk-highlight-box">
            <h3>Why Families and Enterprises in Tumkur Choose Shree Ashirwad</h3>
            <ul>
                <li><strong>Dedicated Highway Corridors:</strong> Direct daily container shuttles operating across NH-48, connecting Tumkur to Bangalore, Nelamangala, and Dobbaspet in under 3 hours.</li>
                <li><strong>Industrial Rigging Expertise:</strong> Specialized crane machinery and hydraulic tailgates for precision machine shifting in Vasantanarasapura and Antharasanahalli estates.</li>
                <li><strong>Education & Faculty Relocation:</strong> Tailored cost-effective shifting packages for scholars, teaching faculty, and administrators around SIT Campus and Tumkur University.</li>
                <li><strong>Multi-Layer Shockproof Packaging:</strong> Standardized 7-layer export-grade corrugated boxes, water-resistant stretch films, and air-bubble cushioning for all furniture and fragile goods.</li>
                <li><strong>Central Operations Oversight:</strong> Reliable tracking and verified logistics management supervised by our national headquarters in <a href="<?php echo SITE_BASE_URL; ?>/">Ranchi</a>.</li>
            </ul>
        </div>

        <div class="tmk-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Household Packing Services in Tumkur Karnataka" width="580" height="380" loading="lazy">
            <p class="tmk-image-caption">Certified packaging team packing household goods with export-grade materials in Tumkur.</p>
        </div>
    </section>

    <!-- Section 2: Comprehensive Shifting Services -->
    <section class="tmk-section">
        <h2 class="tmk-section-heading">Our Tailored Moving Services in Tumkur</h2>
        <p class="tmk-intro-p">We understand that shifting household treasures or enterprise inventory requires more than basic freight handling. Our specialized service verticals in Tumkur are engineered to meet every domestic, educational, and commercial relocation demand.</p>

        <h3 class="tmk-subheading">Comprehensive Solutions for Domestic and Commercial Clients</h3>
        <p class="tmk-intro-p">From high-rise apartments with tight elevator dimensions to expansive industrial machine bays, our teams deploy customized packaging tools and specialized vehicular configurations to ensure complete zero-damage transit.</p>

        <div class="tmk-grid-3">
            <div class="tmk-card">
                <h3>Household Shifting</h3>
                <p>Comprehensive domestic relocation across Batawadi, SS Puram, Kyathsandra, and Melekote. Full disassembly, protective packing, loading, transport, and reassembly at your new residence.</p>
            </div>
            <div class="tmk-card">
                <h3>Vasantanarasapura Logistics</h3>
                <p>Heavy machinery shifting, factory assembly transfers, and raw material transport for machine tooling, food processing, and auto component manufacturing units.</p>
            </div>
            <div class="tmk-card">
                <h3>SIT Faculty Relocations</h3>
                <p>Budget-friendly and scheduled moves for students, research scholars, and academic faculty across Siddaganga Institute of Technology and Sri Siddhartha Academy.</p>
            </div>
            <div class="tmk-card">
                <h3>Corporate & Office Shifting</h3>
                <p>Zero-downtime office relocations including computer server racks, modular workstations, filing systems, and executive furniture across Tumkur's commercial hubs.</p>
            </div>
            <div class="tmk-card">
                <h3>Car & Bike Transportation</h3>
                <p>Enclosed hydraulic car carrier trailers and individualized two-wheeler crating to safely transfer vehicles interstate or locally along the NH-48 corridor.</p>
            </div>
            <div class="tmk-card">
                <h3>Secure Warehousing</h3>
                <p>Clean, pest-controlled, and CCTV-monitored storage facilities for short-term and extended storage of household furniture, machinery, and commercial merchandise.</p>
            </div>
        </div>

        <div class="tmk-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg" alt="Furniture Wrapping and Packing in Tumkur" width="580" height="380" loading="lazy">
            <p class="tmk-image-caption">Multi-layer protective bubble wrap and edge guards applied to wooden furniture in Tumkur.</p>
        </div>
    </section>

    <!-- Section 3: Tariff & Pricing Table -->
    <section class="tmk-section">
        <h2 class="tmk-section-heading">Transparent Packers and Movers Rates in Tumkur</h2>
        <p class="tmk-intro-p">Shree Ashirwad maintains transparent, upfront pricing with zero hidden surcharges or surprise tolls. Review our indicative tariff structure below for local shifts within Tumkur and intercity moves along key Karnataka corridors.</p>

        <h3 class="tmk-subheading">Estimated Shifting Rates for Local and Intercity Corridors</h3>
        <p class="tmk-intro-p">Our standardized pricing reflects actual transit mileage, packing carton volume, labor deployment, and insurance parameters, guaranteeing zero financial ambiguity on moving day.</p>

        <table class="tmk-table">
            <thead>
                <tr>
                    <th>Relocation Type</th>
                    <th>Consignment Size</th>
                    <th>Packing Material & Labor</th>
                    <th>Standard Transit Rate</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Local Shifting (Tumkur City)</td>
                    <td>1 BHK Apartment</td>
                    <td>Included (Multi-layer)</td>
                    <td>₹3,200 - ₹5,800</td>
                </tr>
                <tr>
                    <td>Local Shifting (Tumkur City)</td>
                    <td>2 BHK Apartment</td>
                    <td>Included (Heavy crates)</td>
                    <td>₹5,800 - ₹11,000</td>
                </tr>
                <tr>
                    <td>Local Shifting (Tumkur City)</td>
                    <td>3 BHK / Independent House</td>
                    <td>Included (Premium packaging)</td>
                    <td>₹9,000 - ₹17,500</td>
                </tr>
                <tr>
                    <td>Tumkur to Bangalore Corridor</td>
                    <td>Complete Household (2 BHK)</td>
                    <td>Included (Highway transit)</td>
                    <td>₹8,500 - ₹16,000</td>
                </tr>
                <tr>
                    <td>Tumkur to Davanagere / Shimoga</td>
                    <td>Household Goods (2-3 BHK)</td>
                    <td>Full Crating & Transit</td>
                    <td>₹13,500 - ₹24,000</td>
                </tr>
                <tr>
                    <td>Tumkur to Pan-India Metros</td>
                    <td>Full Truckload (FTL)</td>
                    <td>Export standard packing</td>
                    <td>₹22,000 - ₹48,000</td>
                </tr>
            </tbody>
        </table>

        <div class="tmk-highlight-box">
            <h3>Need an Exact Estimate for Your Move?</h3>
            <p>Our online calculation system calculates real-time tariffs based on consignment cubic volume, floor levels, packing specifications, and distance. Check your instant quote via our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">Live Shifting Tariff Calculator</a> or connect with our customer team at +91 9334404050.</p>
        </div>

        <div class="tmk-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/fragile-glassware-box-packing-ranchi.jpg" alt="Fragile Glassware Packing in Tumkur" width="580" height="380" loading="lazy">
            <p class="tmk-image-caption">Individual item wrapping with bubble sheets and honeycomb cartons for delicate kitchenware.</p>
        </div>
    </section>

    <!-- Section 4: Neighborhoods Covered in Tumkur -->
    <section class="tmk-section">
        <h2 class="tmk-section-heading">Key Localities & Industrial Sectors Served Across Tumkur</h2>
        <p class="tmk-intro-p">Our local logistics fleet operates across every municipal ward, extension layout, and suburban industrial zone of Tumkur, ensuring prompt arrivals and rapid dispatch.</p>

        <h3 class="tmk-subheading">Hyper-Local Logistics Coverage Throughout Tumkur District</h3>
        <p class="tmk-intro-p">From the heritage streets surrounding the city core to the newly planned Smart City layouts along ring roads, our drivers possess intimate familiarity with local traffic patterns and narrow lane regulations.</p>

        <div class="tmk-grid-3">
            <div class="tmk-card">
                <h3>SS Puram & Ashok Nagar</h3>
                <p>Prime central residential sectors with bustling family communities, multi-storey flats, and established bungalows requiring careful furniture maneuvering.</p>
            </div>
            <div class="tmk-card">
                <h3>Batawadi & Kyathsandra</h3>
                <p>Fast-expanding highway nodes along NH-48 ideal for express intercity dispatches to Bangalore and Nelamangala with spacious residential layouts.</p>
            </div>
            <div class="tmk-card">
                <h3>SIT Extension & Campus Belt</h3>
                <p>Vibrant student and faculty residential zones adjacent to Siddaganga Institute of Technology, featuring compact studio homes and university hostels.</p>
            </div>
            <div class="tmk-card">
                <h3>Vasantanarasapura Industrial Hub</h3>
                <p>One of South India's largest integrated industrial corridors hosting heavy machine manufacturing, food processing parks, and logistics warehouses.</p>
            </div>
            <div class="tmk-card">
                <h3>Antharasanahalli & Dobbaspet</h3>
                <p>Key industrial estates specialized in metal fabrication, electronics assembly, and regional freight dispatch along the northern highway boundary.</p>
            </div>
            <div class="tmk-card">
                <h3>Melekote & Mandipet</h3>
                <p>Traditional trading centers, retail markets, and quiet residential streets requiring skilled truck navigation and punctual morning loading.</p>
            </div>
        </div>

        <div class="tmk-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Enclosed Container Moving Truck in Tumkur" width="580" height="380" loading="lazy">
            <p class="tmk-image-caption">Weatherproof sealed container vehicle ready for highway transit along the NH-48 corridor.</p>
        </div>
    </section>

    <!-- Section 5: Step-by-Step Relocation Process -->
    <section class="tmk-section">
        <h2 class="tmk-section-heading">Our 5-Step Guaranteed Shifting Workflow</h2>
        <p class="tmk-intro-p">Every successful relocation begins with structured planning. Our disciplined methodology ensures flawless execution from initial survey to final placement in Tumkur.</p>

        <h3 class="tmk-subheading">Structured Execution from Pre-Move Survey to Room Placement</h3>
        <p class="tmk-intro-p">By eliminating haphazard packing routines, our five-stage operational framework guarantees zero losses, absolute timeline adherence, and complete customer satisfaction.</p>

        <div class="tmk-step-list">
            <div class="tmk-step-item">
                <div class="tmk-step-num">1</div>
                <div class="tmk-step-content">
                    <h3>Pre-Move Survey & Written Quotation</h3>
                    <p>Our relocation supervisor conducts an in-person or virtual inventory assessment in Tumkur to determine item volume, delicate goods crating requirements, and provide a binding all-inclusive quote.</p>
                </div>
            </div>
            <div class="tmk-step-item">
                <div class="tmk-step-num">2</div>
                <div class="tmk-step-content">
                    <h3>Systematic Multi-Layer Packing</h3>
                    <p>On moving day, our uniformed packers arrive on time with premium supplies. Every electronic item, delicate chinaware, and wooden heirloom receives custom-fitted protective wrapping.</p>
                </div>
            </div>
            <div class="tmk-step-item">
                <div class="tmk-step-num">3</div>
                <div class="tmk-step-content">
                    <h3>Safe Loading & Highway Transit</h3>
                    <p>Goods are balanced carefully inside all-weather closed container trucks using heavy-duty ratchet straps and cushioning blankets to prevent shifting during transit on NH-48.</p>
                </div>
            </div>
            <div class="tmk-step-item">
                <div class="tmk-step-num">4</div>
                <div class="tmk-step-content">
                    <h3>Destination Unloading & Placement</h3>
                    <p>Upon arrival at your new residence or facility in Tumkur, our crew unloads every box into designated rooms according to detailed color-coded inventory tags.</p>
                </div>
            </div>
            <div class="tmk-step-item">
                <div class="tmk-step-num">5</div>
                <div class="tmk-step-content">
                    <h3>Unpacking, Assembly & Waste Clearance</h3>
                    <p>We reassemble all dismantled beds and dining tables, unpack essential cartons, and remove all discarded packing debris, leaving your new space neat and comfortable.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 6: Frequently Asked Questions -->
    <section class="tmk-section">
        <h2 class="tmk-section-heading">Frequently Asked Questions — Tumkur Shifting</h2>
        <div class="tmk-faq-item">
            <h3>What are the packers and movers charges in Tumkur (Tumakuru)?</h3>
            <p>Local shifting in Tumkur starts at ₹3,200 to ₹5,800 for 1 BHK, ₹5,800 to ₹11,000 for 2 BHK, and ₹9,000 to ₹17,500 for 3 BHK homes. Relocations from Tumkur to Bangalore typically cost between ₹7,000 and ₹18,000 depending on consignment volume and floor levels.</p>
        </div>
        <div class="tmk-faq-item">
            <h3>Do you offer industrial relocation for Vasantanarasapura Industrial Area?</h3>
            <p>Yes, we handle heavy machinery rigging, industrial parts warehousing, and factory shifts in Vasantanarasapura, Antharasanahalli, and Dobbaspet industrial belts with hydraulic tail-lift trucks and cranes.</p>
        </div>
        <div class="tmk-faq-item">
            <h3>How much time does shifting from Tumkur to Bangalore take?</h3>
            <p>Because Tumkur is situated just 70 km from Bangalore along the NH-48 express corridor, transit generally takes only 2.5 to 3.5 hours, allowing same-day packing, transport, and delivery.</p>
        </div>
        <div class="tmk-faq-item">
            <h3>Can you handle student and faculty relocations near SIT and Tumkur University?</h3>
            <p>Yes, we provide specialized economical room and flat shifting for professors, researchers, and students near Siddaganga Institute of Technology (SIT), Sri Siddhartha Academy, and SS Puram.</p>
        </div>
        <div class="tmk-faq-item">
            <h3>Is goods transit insurance provided for interstate moves from Tumkur?</h3>
            <p>Yes, we provide 100% comprehensive transit insurance coverage with itemized declaration receipts, supported through our central customer care headquarters in <a href="<?php echo SITE_BASE_URL; ?>/">Ranchi</a>.</p>
        </div>
        <div class="tmk-faq-item">
            <h3>How do you protect fragile items and expensive electronic appliances?</h3>
            <p>We utilize seven-layer corrugated cartons, high-density bubble sheets, custom wooden crates for LED displays, and anti-static wraps for computer monitors and kitchen appliances.</p>
        </div>
        <div class="tmk-faq-item">
            <h3>Can you move apartments in older Tumkur sectors without passenger elevators?</h3>
            <p>Yes, our certified crews are specially trained in manual stair-carry techniques using shoulder dollies and heavy-duty padded lifting straps to navigate narrow staircase landings in Mandipet, Gubbi Gate, and SS Puram without wall scuffs or furniture damage.</p>
        </div>
        <div class="tmk-faq-item">
            <h3>How do you secure goods during heavy monsoon rainfall in the Tumkur region?</h3>
            <p>All consignments are packed with primary stretch film, placed inside closed metal container trucks with rubberized weatherproof seals, and elevated off the floor using wooden pallets and moisture-absorbing silica packets.</p>
        </div>
    </section>

    <!-- Section 7: Connected Karnataka Hubs Cluster -->
    <section class="tmk-section">
        <h2 class="tmk-section-heading">Connected Karnataka Logistics & City Hubs</h2>
        <p class="tmk-intro-p">Shree Ashirwad Packers and Movers maintains an integrated statewide network connecting Tumkur to major commercial, coastal, and heritage hubs across Karnataka:</p>
        
        <div class="tmk-cluster-grid">
            <div class="tmk-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bangalore">Packers and Movers in Bangalore</a>
            </div>
            <div class="tmk-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-davanagere">Packers and Movers in Davanagere</a>
            </div>
            <div class="tmk-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-shimoga">Packers and Movers in Shimoga</a>
            </div>
            <div class="tmk-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-mysore">Packers and Movers in Mysore</a>
            </div>
            <div class="tmk-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hubli">Packers and Movers in Hubli</a>
            </div>
            <div class="tmk-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bellary">Packers and Movers in Bellary</a>
            </div>
            <div class="tmk-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-mangalore">Packers and Movers in Mangalore</a>
            </div>
            <div class="tmk-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-belgaum">Packers and Movers in Belgaum</a>
            </div>
        </div>
    </section>
</main>

<?php include ROOT_PATH . '/includes/footer.php'; ?>
</body>
</html>
