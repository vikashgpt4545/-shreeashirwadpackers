<?php
/**
 * Page: Packers and Movers in Chitradurga
 * File: pages/packers-and-movers-in-chitradurga.php
 * URL Slug: packers-and-movers-in-chitradurga
 * Status: Published
 */

if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__));
}
require_once ROOT_PATH . '/includes/config.php';

// Define page-level metadata
$page_title = "Packers and Movers in Chitradurga | Trusted Shifting Services";
$page_description = "ISO certified packers and movers in Chitradurga Karnataka. Professional household shifting, Challakere Science City DRDO/IISc relocation, wind energy cargo & car transport in Kelagote & BD Road.";
$canonical_url = SITE_BASE_URL . "/packers-and-movers-in-chitradurga";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="keywords" content="packers and movers in chitradurga, packers and movers chitradurga, household shifting chitradurga, movers and packers kelagote chitradurga, challakere science city shifting, car transport chitradurga, packers and movers bd road chitradurga">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Chitradurga",
        "image": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+919334404050",
        "priceRange": "₹3,200 - ₹50,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "NH-48 Bypass, Near Kelagote Circle",
            "addressLocality": "Chitradurga",
            "addressRegion": "Karnataka",
            "postalCode": "577501",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 14.2251,
            "longitude": 76.3980
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
            "reviewCount": "216"
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
                "name": "Chitradurga",
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
        "serviceType": "Fort City Relocation & Science City Logistics",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "City",
            "name": "Chitradurga"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Chitradurga Relocation Services Catalog",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Household Relocation Services Chitradurga"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Challakere Science City DRDO & IISc Shifting"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Wind Energy & Renewable Sector Cargo Transport"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Car Carrier & Bike Transport Chitradurga"
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
                "name": "What are the packers and movers charges in Chitradurga?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting in Chitradurga starts from ₹3,200 to ₹5,800 for 1 BHK, ₹5,800 to ₹11,000 for 2 BHK, and ₹9,000 to ₹17,500 for 3 BHK homes. Moves to Bangalore (~200 km) typically range between ₹8,500 and ₹17,000 depending on volume and packing level."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide specialized relocation services for Challakere Science City (DRDO, IISc, ISRO, BARC)?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we regularly handle priority relocations for research scientists, defense engineers, and academic faculty working at the Challakere Aeronautical Test Range and IISc campus with official documentation and transit insurance."
                }
            },
            {
                "@type": "Question",
                "name": "How do you protect household furniture from wind-blown dust and rocky terrain in Chitradurga?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Chitradurga features strong winds and rocky elevation. We implement an airtight barrier protocol: initial plastic stretch wrap, heavy corrugated corner pads, secondary shrink film, and transit inside sealed container trucks."
                }
            },
            {
                "@type": "Question",
                "name": "How much time does transit take from Chitradurga to Bangalore via NH-48?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Via the six-lane National Highway 48 through Sira and Tumkur, our sealed container trucks complete the ~200 km journey to Bangalore in roughly 4 to 5 hours with real-time GPS tracking."
                }
            },
            {
                "@type": "Question",
                "name": "Can you handle equipment relocations for wind energy and solar power projects?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we handle technical cargo transport for wind farm components, inverter control panels, solar hardware, and substation tools across the Chitradurga renewable energy belt."
                }
            },
            {
                "@type": "Question",
                "name": "Is transit insurance included for household relocations from Chitradurga?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide 100% comprehensive all-risk transit insurance policies with explicit itemized valuation receipts, backed by our central customer care headquarters in Ranchi."
                }
            },
            {
                "@type": "Question",
                "name": "Can you shift vehicles like cars and motorbikes from Chitradurga?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we offer specialized enclosed car carrier transport and two-wheeler crating services to transport vehicles safely from Chitradurga to any location across India."
                }
            },
            {
                "@type": "Question",
                "name": "How do you manage apartment shifting in Kelagote and Medehally without service elevators?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our certified crews are specially trained in manual stair-carry techniques using shoulder dollies and heavy-duty padded lifting straps to navigate narrow staircase landings without wall scuffs or furniture damage."
                }
            }
        ]
    }
    </script>

    <style>
        .ctd-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.65;
        }
        .ctd-header {
            background: linear-gradient(135deg, #4338ca 0%, #0f172a 100%);
            color: #ffffff;
            padding: 45px 25px;
            border-radius: 12px;
            margin-bottom: 30px;
            text-align: center;
        }
        .ctd-header h1 {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.25;
            color: #ffffff;
        }
        .ctd-header p {
            font-size: 1.1rem;
            max-width: 900px;
            margin: 0 auto 20px;
            color: #e2e8f0;
        }
        .ctd-btn-wrap {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .ctd-btn-primary {
            background: #ea580c;
            color: #ffffff;
            padding: 12px 26px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 700;
            display: inline-block;
            transition: background 0.2s ease;
        }
        .ctd-btn-primary:hover {
            background: #c2410c;
        }
        .ctd-btn-secondary {
            background: #ffffff;
            color: #4338ca;
            padding: 12px 26px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 700;
            display: inline-block;
            transition: background 0.2s ease;
        }
        .ctd-btn-secondary:hover {
            background: #f1f5f9;
        }
        .ctd-section {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 32px 28px;
            margin-bottom: 30px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .ctd-section-heading {
            font-size: 1.75rem;
            color: #4338ca;
            margin-bottom: 16px;
            font-weight: 700;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
        }
        .ctd-subheading {
            font-size: 1.3rem;
            color: #0f172a;
            margin-top: 24px;
            margin-bottom: 12px;
            font-weight: 600;
        }
        .ctd-intro-p {
            font-size: 1.05rem;
            color: #334155;
            margin-bottom: 18px;
        }
        .ctd-highlight-box {
            background: #f8fafc;
            border-left: 4px solid #ea580c;
            padding: 20px 22px;
            border-radius: 0 8px 8px 0;
            margin: 24px 0;
        }
        .ctd-highlight-box h3 {
            font-size: 1.15rem;
            color: #4338ca;
            margin-top: 0;
            margin-bottom: 10px;
        }
        .ctd-highlight-box ul {
            margin: 0;
            padding-left: 20px;
        }
        .ctd-highlight-box li {
            margin-bottom: 8px;
            color: #334155;
        }
        .ctd-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 24px 0;
        }
        .ctd-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 20px 18px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .ctd-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 15px -3px rgba(0, 0, 0, 0.08);
        }
        .ctd-card h3 {
            font-size: 1.15rem;
            color: #4338ca;
            margin-top: 0;
            margin-bottom: 10px;
        }
        .ctd-card p {
            font-size: 0.95rem;
            color: #475569;
            margin: 0;
            line-height: 1.55;
        }
        .ctd-table {
            width: 100%;
            border-collapse: collapse;
            margin: 24px 0;
            background: #ffffff;
        }
        .ctd-table th {
            background: #4338ca;
            color: #ffffff;
            text-align: left;
            padding: 12px 14px;
            font-size: 0.95rem;
        }
        .ctd-table td {
            padding: 12px 14px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 0.92rem;
            color: #334155;
        }
        .ctd-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .ctd-image-container {
            max-width: 580px;
            margin: 28px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            text-align: center;
        }
        .ctd-image-container img {
            width: 100%;
            height: auto;
            display: block;
        }
        .ctd-image-caption {
            background: #f1f5f9;
            color: #475569;
            font-size: 0.88rem;
            padding: 8px 12px;
            margin: 0;
            text-align: center;
            border-top: 1px solid #e2e8f0;
        }
        .ctd-step-list {
            margin: 24px 0;
        }
        .ctd-step-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 18px 16px;
        }
        .ctd-step-num {
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
        .ctd-step-content h3 {
            margin: 0 0 6px;
            font-size: 1.15rem;
            color: #4338ca;
        }
        .ctd-step-content p {
            margin: 0;
            font-size: 0.95rem;
            color: #475569;
        }
        .ctd-faq-item {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 18px 20px;
            margin-bottom: 14px;
        }
        .ctd-faq-item h3 {
            font-size: 1.15rem;
            color: #4338ca;
            margin-bottom: 8px;
            font-weight: 600;
        }
        .ctd-faq-item p {
            font-size: 0.96rem;
            color: #475569;
            margin: 0;
            line-height: 1.6;
        }
        .ctd-cluster-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin-top: 25px;
        }
        .ctd-cluster-card {
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            padding: 14px 10px;
            border-radius: 6px;
            text-align: center;
            transition: all 0.2s ease;
        }
        .ctd-cluster-card:hover {
            border-color: #ea580c;
            background: #fff;
            transform: translateY(-2px);
        }
        .ctd-cluster-card a {
            text-decoration: none;
            color: #4338ca;
            font-weight: 600;
            font-size: 0.92rem;
            display: block;
        }
        .ctd-cluster-card a:hover {
            color: #ea580c;
        }
        @media (max-width: 768px) {
            .ctd-grid-3 {
                grid-template-columns: 1fr;
            }
            .ctd-cluster-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .ctd-header h1 {
                font-size: 1.75rem;
            }
            .ctd-section {
                padding: 22px 16px;
            }
        }
    </style>
</head>
<body>
<?php include ROOT_PATH . '/includes/header.php'; ?>

<main class="ctd-wrap">
    <!-- Hero Header -->
    <header class="ctd-header">
        <h1>Packers and Movers in Chitradurga</h1>
        <p>Premier Relocation Partner for Karnataka's Historic Stone Fort City, Challakere Science Hub & NH-48 / NH-50 Highway Crossroads</p>
        <div class="ctd-btn-wrap">
            <a href="tel:+919334404050" class="ctd-btn-primary">Call Now: +91 9334404050</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="ctd-btn-secondary">Check Tariff Calculator</a>
        </div>
    </header>

    <!-- Section 1: Overview & Regional Importance -->
    <section class="ctd-section">
        <h2 class="ctd-section-heading">Professional Relocation & Scientific Shifting Across Chitradurga</h2>
        <p class="ctd-intro-p">Chitradurga, immortalized in Karnataka's folklore as the impregnable Stone Fort City (Kallina Kote with its legendary seven concentric battlements) and the sacred land of courageous heroine Onake Obavva, is a pivotal strategic crossroads in central Karnataka. Positioned at the critical intersection of National Highway 48 (linking <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bangalore">Bangalore</a> and Pune) and National Highway 50 (linking northwards to <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hospet">Hospet</a> and Bijapur), Chitradurga commands exceptional transport logistics. In recent decades, the district has transformed into India's premier scientific test capital with the sprawling Challakere Science City—hosting major research campuses of DRDO (Aeronautical Test Range ATR), ISRO, BARC, and IISc.</p>
        
        <p class="ctd-intro-p">At Shree Ashirwad Packers and Movers, we deliver dependable, stress-free shifting services tailored to the distinctive needs of defense scientists, aerospace researchers, wind energy engineers, and family households across Chitradurga. Whether moving an apartment in Kelagote or Medehally, transferring high-tech lab equipment for scientific staff in Challakere, or relocating families along BD Road, our certified crews provide unmatched reliability, punctuality, and care. Our local transport managers maintain rigorous schedules to ensure that both industrial machinery and delicate household electronics receive white-glove packaging and safe transit.</p>

        <h3 class="ctd-subheading">Strategic Highway Arteries & High-Wind Weatherproof Packaging</h3>
        <p class="ctd-intro-p">Chitradurga's rugged hill topography and high wind speeds make it one of South India's largest wind power hubs, but this also exposes moving consignments to high dust levels and wind buffeting during transit. Shree Ashirwad counteracts these conditions with an advanced multi-layer packaging protocol: primary anti-static stretch wrap, thick corrugated padding, moisture-absorbing silica packets, and transit inside sealed container trucks with elevated pallet platforms. Our heavy-duty container trucks are designed to handle unpaved industrial bypasses and rural access roads leading into research centers without transit shocks.</p>

        <div class="ctd-highlight-box">
            <h3>Why Scientists, Engineers, and Families Choose Shree Ashirwad</h3>
            <ul>
                <li><strong>Challakere Science City Moving:</strong> Specialized priority transfer services for scientists, defense engineers, and researchers at DRDO, IISc, ISRO, and BARC campuses.</li>
                <li><strong>Wind & Solar Energy Logistics:</strong> Safe handling and transport of wind turbine components, electrical control panels, and substation equipment across the district.</li>
                <li><strong>High-Velocity Wind-Proof Packaging:</strong> Multi-layer airtight stretch wrapping and sealed heavy-duty container trucks to shield consignments from fine dust and gusts.</li>
                <li><strong>Direct Highway Shuttles:</strong> Daily dispatches along NH-48 connecting Chitradurga to Bangalore in under 4.5 hours and to <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-davanagere">Davanagere</a> and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hubli">Hubli</a> in under 2 hours.</li>
                <li><strong>Central Operations Oversight:</strong> End-to-end logistics coordination and 24/7 shipment tracking managed through our national headquarters in <a href="<?php echo SITE_BASE_URL; ?>/">Ranchi</a>.</li>
            </ul>
        </div>

        <div class="ctd-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Household Packing Services in Chitradurga Karnataka" width="580" height="380" loading="lazy">
            <p class="ctd-image-caption">Certified packaging team packing household goods with export-grade materials in Chitradurga.</p>
        </div>
    </section>

    <!-- Section 2: Comprehensive Shifting Verticals -->
    <section class="ctd-section">
        <h2 class="ctd-section-heading">Our Tailored Moving Services in Chitradurga</h2>
        <p class="ctd-intro-p">From high-ranking aerospace researchers to agricultural commodity merchants, our diverse client base in Chitradurga demands structured planning and custom execution. Our complete service verticals cover every moving scenario with utmost professionalism.</p>

        <h3 class="ctd-subheading">Comprehensive Solutions for Domestic and Commercial Clients</h3>
        <p class="ctd-intro-p">We employ trained personnel equipped with specialized lifting dollies, export-quality wrapping materials, and modern containerized transport trucks to ensure zero damage throughout the shifting cycle.</p>

        <div class="ctd-grid-3">
            <div class="ctd-card">
                <h3>Household Shifting</h3>
                <p>Complete residential moves across Kelagote, Medehally, BD Road, and Holalkere Road. Full disassembly of cots and dining tables, multi-layer protective packing, and destination reassembly.</p>
            </div>
            <div class="ctd-card">
                <h3>Challakere Science City Relocation</h3>
                <p>Specialized priority transfer services for scientists, researchers, and technical staff at DRDO, IISc, and ISRO campuses, providing full official documentation for seamless claims.</p>
            </div>
            <div class="ctd-card">
                <h3>Wind & Solar Sector Transport</h3>
                <p>Safe transportation of wind turbine components, solar panels, electrical inverter racks, and heavy maintenance tools across regional renewable energy projects.</p>
            </div>
            <div class="ctd-card">
                <h3>Corporate & Office Relocation</h3>
                <p>Zero-downtime office moves including computer servers, modular workstations, filing cabinets, and administrative records for banks and trading firms.</p>
            </div>
            <div class="ctd-card">
                <h3>Car & Two-Wheeler Transport</h3>
                <p>Enclosed automobile carrier trucks and customized wooden crating for two-wheelers, safeguarding your vehicle from weather and highway hazards across the highway network.</p>
            </div>
            <div class="ctd-card">
                <h3>Secure Warehousing</h3>
                <p>Pest-controlled, moisture-proof, and CCTV-monitored warehouse facilities for temporary household goods storage during job transfers or estate renovations.</p>
            </div>
        </div>

        <div class="ctd-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg" alt="Furniture Wrapping and Packing in Chitradurga" width="580" height="380" loading="lazy">
            <p class="ctd-image-caption">Multi-layer protective bubble wrap and edge guards applied to wooden furniture in Chitradurga.</p>
        </div>
    </section>

    <!-- Section 3: Tariff & Pricing Table -->
    <section class="ctd-section">
        <h2 class="ctd-section-heading">Transparent Packers and Movers Rates in Chitradurga</h2>
        <p class="ctd-intro-p">Shree Ashirwad upholds complete pricing transparency. We provide all-inclusive written estimates with no hidden extras, unexpected tolls, or last-minute charges. Review our standard tariff benchmarks below for local and intercity moves from Chitradurga.</p>

        <h3 class="ctd-subheading">Estimated Shifting Rates for Local and Highway Corridors</h3>
        <p class="ctd-intro-p">Our rates cover labor, export-quality packing supplies, transit vehicle costs, and basic transit insurance documentation to deliver exceptional reliability and value.</p>

        <table class="ctd-table">
            <thead>
                <tr>
                    <th>Relocation Type</th>
                    <th>Consignment Scope</th>
                    <th>Packing Material & Handling</th>
                    <th>Standard Transit Rate</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Local Shifting (Chitradurga City)</td>
                    <td>1 BHK Apartment</td>
                    <td>Included (Multi-layer)</td>
                    <td>₹3,200 - ₹5,800</td>
                </tr>
                <tr>
                    <td>Local Shifting (Chitradurga City)</td>
                    <td>2 BHK Apartment</td>
                    <td>Included (Heavy cartons)</td>
                    <td>₹5,800 - ₹11,000</td>
                </tr>
                <tr>
                    <td>Local Shifting (Chitradurga City)</td>
                    <td>3 BHK / Independent House</td>
                    <td>Included (Full Crating)</td>
                    <td>₹9,000 - ₹17,500</td>
                </tr>
                <tr>
                    <td>Chitradurga to Davanagere Corridor</td>
                    <td>Complete Household (2 BHK)</td>
                    <td>NH-48 Express Shifting</td>
                    <td>₹5,500 - ₹10,500</td>
                </tr>
                <tr>
                    <td>Chitradurga to Bangalore Corridor</td>
                    <td>Complete Household (2-3 BHK)</td>
                    <td>NH-48 Highway Transit</td>
                    <td>₹8,500 - ₹17,000</td>
                </tr>
                <tr>
                    <td>Chitradurga to Pan-India Metros</td>
                    <td>Full Truckload (FTL)</td>
                    <td>Export Standard Packing</td>
                    <td>₹22,000 - ₹48,000</td>
                </tr>
            </tbody>
        </table>

        <div class="ctd-highlight-box">
            <h3>Calculate Your Exact Moving Tariff</h3>
            <p>Our online calculation system calculates real-time shifting tariffs based on consignment volume, floor elevation, distance, and crating needs. Visit our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">Live Shifting Tariff Calculator</a> or contact our customer support team at +91 9334404050.</p>
        </div>

        <div class="ctd-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/fragile-glassware-box-packing-ranchi.jpg" alt="Fragile Glassware Packing in Chitradurga" width="580" height="380" loading="lazy">
            <p class="ctd-image-caption">Individual item wrapping with bubble sheets and honeycomb cartons for delicate kitchenware.</p>
        </div>
    </section>

    <!-- Section 4: Key Localities Covered in Chitradurga -->
    <section class="ctd-section">
        <h2 class="ctd-section-heading">Key Localities & Research Sectors Served Across Chitradurga</h2>
        <p class="ctd-intro-p">Our local operations fleet covers every municipal division, commercial zone, research campus, and suburban extension throughout Chitradurga district.</p>

        <h3 class="ctd-subheading">Comprehensive Neighborhood Coverage Across Greater Chitradurga</h3>
        <p class="ctd-intro-p">From the historic gates of the stone fortress to the modern research facilities of Challakere Science City, our drivers and packing crews ensure punctual arrivals and smooth loading.</p>

        <div class="ctd-grid-3">
            <div class="ctd-card">
                <h3>Kelagote & Medehally</h3>
                <p>The bustling central commercial and residential spine of Chitradurga hosting corporate offices, retail stores, banks, and modern family apartments.</p>
            </div>
            <div class="ctd-card">
                <h3>Challakere Science City Hub</h3>
                <p>Premier scientific and defense enclave hosting research campuses of DRDO Aeronautical Test Range, IISc, BARC, and ISRO facilities.</p>
            </div>
            <div class="ctd-card">
                <h3>BD Road & Holalkere Road</h3>
                <p>Fast-growing residential neighborhoods featuring newly developed independent houses, modern apartments, and quiet family residential streets.</p>
            </div>
            <div class="ctd-card">
                <h3>Fort Road & Burujanahatti</h3>
                <p>Historical quarter surrounding the Chitradurga stone fortress, featuring traditional family homes, artisan workshops, and bustling local markets.</p>
            </div>
            <div class="ctd-card">
                <h3>JCR Extension & Iyyana Halli</h3>
                <p>Well-planned residential layouts favored by civil servants, professors, and business proprietors seeking peaceful suburban family living.</p>
            </div>
            <div class="ctd-card">
                <h3>Industrial Area & Wind Farm Belt</h3>
                <p>Sprawling industrial zone hosting fabrication workshops, power grid substations, and wind turbine service centers along NH-48.</p>
            </div>
        </div>

        <div class="ctd-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Enclosed Container Moving Truck in Chitradurga" width="580" height="380" loading="lazy">
            <p class="ctd-image-caption">Weatherproof sealed container vehicle ready for highway transit along the NH-48 corridor.</p>
        </div>
    </section>

    <!-- Section 5: Step-by-Step Relocation Process -->
    <section class="ctd-section">
        <h2 class="ctd-section-heading">Our 5-Step Guaranteed Shifting Workflow</h2>
        <p class="ctd-intro-p">Every successful relocation begins with structured planning. Our disciplined methodology ensures flawless execution from initial survey to final placement in Chitradurga.</p>

        <h3 class="ctd-subheading">Structured Execution from Pre-Move Survey to Room Placement</h3>
        <p class="ctd-intro-p">By eliminating haphazard packing routines, our five-stage operational framework guarantees zero losses, absolute timeline adherence, and complete customer satisfaction.</p>

        <div class="ctd-step-list">
            <div class="ctd-step-item">
                <div class="ctd-step-num">1</div>
                <div class="ctd-step-content">
                    <h3>Pre-Move Survey & Written Quotation</h3>
                    <p>Our relocation supervisor conducts an in-person or virtual inventory assessment in Chitradurga to determine item volume, delicate goods crating requirements, and provide a binding all-inclusive quote.</p>
                </div>
            </div>
            <div class="ctd-step-item">
                <div class="ctd-step-num">2</div>
                <div class="ctd-step-content">
                    <h3>Systematic Multi-Layer Packing</h3>
                    <p>On moving day, our uniformed packers arrive on time with premium supplies. Every electronic item, delicate chinaware, and wooden heirloom receives custom-fitted protective wrapping.</p>
                </div>
            </div>
            <div class="ctd-step-item">
                <div class="ctd-step-num">3</div>
                <div class="ctd-step-content">
                    <h3>Safe Loading & Highway Transit</h3>
                    <p>Goods are balanced carefully inside all-weather closed container trucks using heavy-duty ratchet straps and cushioning blankets to prevent shifting during transit on NH-48.</p>
                </div>
            </div>
            <div class="ctd-step-item">
                <div class="ctd-step-num">4</div>
                <div class="ctd-step-content">
                    <h3>Destination Unloading & Placement</h3>
                    <p>Upon arrival at your new residence or facility in Chitradurga, our crew unloads every box into designated rooms according to detailed color-coded inventory tags.</p>
                </div>
            </div>
            <div class="ctd-step-item">
                <div class="ctd-step-num">5</div>
                <div class="ctd-step-content">
                    <h3>Unpacking, Assembly & Waste Clearance</h3>
                    <p>We reassemble all dismantled beds and dining tables, unpack essential cartons, and remove all discarded packing debris, leaving your new space neat and comfortable.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 6: Frequently Asked Questions -->
    <section class="ctd-section">
        <h2 class="ctd-section-heading">Frequently Asked Questions — Chitradurga Shifting</h2>
        <div class="ctd-faq-item">
            <h3>What are the packers and movers charges in Chitradurga?</h3>
            <p>Local shifting in Chitradurga starts from ₹3,200 to ₹5,800 for 1 BHK, ₹5,800 to ₹11,000 for 2 BHK, and ₹9,000 to ₹17,500 for 3 BHK homes. Moves to Bangalore (~200 km) typically range between ₹8,500 and ₹17,000 depending on volume and packing level.</p>
        </div>
        <div class="ctd-faq-item">
            <h3>Do you provide specialized relocation services for Challakere Science City (DRDO, IISc, ISRO, BARC)?</h3>
            <p>Yes, we regularly handle priority relocations for research scientists, defense engineers, and academic faculty working at the Challakere Aeronautical Test Range and IISc campus with official documentation and transit insurance.</p>
        </div>
        <div class="ctd-faq-item">
            <h3>How do you protect household furniture from wind-blown dust and rocky terrain in Chitradurga?</h3>
            <p>Chitradurga features strong winds and rocky elevation. We implement an airtight barrier protocol: initial plastic stretch wrap, heavy corrugated corner pads, secondary shrink film, and transit inside sealed container trucks.</p>
        </div>
        <div class="ctd-faq-item">
            <h3>How much time does transit take from Chitradurga to Bangalore via NH-48?</h3>
            <p>Via the six-lane National Highway 48 through Sira and Tumkur, our sealed container trucks complete the ~200 km journey to Bangalore in roughly 4 to 5 hours with real-time GPS tracking.</p>
        </div>
        <div class="ctd-faq-item">
            <h3>Can you handle equipment relocations for wind energy and solar power projects?</h3>
            <p>Yes, we handle technical cargo transport for wind farm components, inverter control panels, solar hardware, and substation tools across the Chitradurga renewable energy belt.</p>
        </div>
        <div class="ctd-faq-item">
            <h3>Is transit insurance included for household relocations from Chitradurga?</h3>
            <p>Yes, we provide 100% comprehensive all-risk transit insurance policies with explicit itemized valuation receipts, backed by our central customer care headquarters in <a href="<?php echo SITE_BASE_URL; ?>/">Ranchi</a>.</p>
        </div>
        <div class="ctd-faq-item">
            <h3>Can you shift vehicles like cars and motorbikes from Chitradurga?</h3>
            <p>Yes, we offer specialized enclosed car carrier transport and two-wheeler crating services to transport vehicles safely from Chitradurga to any location across India.</p>
        </div>
        <div class="ctd-faq-item">
            <h3>How do you manage apartment shifting in Kelagote and Medehally without service elevators?</h3>
            <p>Our certified crews are specially trained in manual stair-carry techniques using shoulder dollies and heavy-duty padded lifting straps to navigate narrow staircase landings without wall scuffs or furniture damage.</p>
        </div>
    </section>

    <!-- Section 7: Connected Karnataka Hubs Cluster -->
    <section class="ctd-section">
        <h2 class="ctd-section-heading">Connected Karnataka Logistics & City Hubs</h2>
        <p class="ctd-intro-p">Shree Ashirwad Packers and Movers maintains an integrated statewide network connecting Chitradurga to major commercial, industrial, and heritage hubs across Karnataka:</p>
        
        <div class="ctd-cluster-grid">
            <div class="ctd-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-davanagere">Packers and Movers in Davanagere</a>
            </div>
            <div class="ctd-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-tumkur">Packers and Movers in Tumkur</a>
            </div>
            <div class="ctd-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bangalore">Packers and Movers in Bangalore</a>
            </div>
            <div class="ctd-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hospet">Packers and Movers in Hospet</a>
            </div>
            <div class="ctd-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hubli">Packers and Movers in Hubli</a>
            </div>
            <div class="ctd-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bellary">Packers and Movers in Bellary</a>
            </div>
            <div class="ctd-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-shimoga">Packers and Movers in Shimoga</a>
            </div>
            <div class="ctd-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-belgaum">Packers and Movers in Belgaum</a>
            </div>
        </div>
    </section>
</main>

<?php include ROOT_PATH . '/includes/footer.php'; ?>
</body>
</html>
