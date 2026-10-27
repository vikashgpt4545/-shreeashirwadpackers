<?php
/**
 * Page: Packers and Movers in Shimoga (Shivamogga)
 * File: pages/packers-and-movers-in-shimoga.php
 * URL Slug: packers-and-movers-in-shimoga
 * Status: Published
 */

if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__));
}
require_once ROOT_PATH . '/includes/config.php';

// Define page-level metadata
$page_title = "Packers and Movers in Shimoga Shivamogga | Safe Shifting Services";
$page_description = "Certified packers and movers in Shimoga (Shivamogga). Professional household shifting, Bhadravati industrial transport, plantation logistics & vehicle carrier in Vinoba Nagar & Gopala.";
$canonical_url = SITE_BASE_URL . "/packers-and-movers-in-shimoga";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="keywords" content="packers and movers in shimoga, packers and movers in shivamogga, packers and movers shimoga, household shifting shimoga, movers and packers bhadravathi, packers and movers vinoba nagar shimoga, car transportation shimoga">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Shimoga",
        "image": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+919334404050",
        "priceRange": "₹3,200 - ₹52,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Bhadravati Road, Near Vinoba Nagar Circle",
            "addressLocality": "Shimoga (Shivamogga)",
            "addressRegion": "Karnataka",
            "postalCode": "577204",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 13.9299,
            "longitude": 75.5681
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
            "reviewCount": "228"
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
                "name": "Shimoga Shivamogga",
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
        "serviceType": "Malnad Gateway Relocation and Industrial Logistics",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "City",
            "name": "Shimoga"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Shimoga Relocation Services Catalog",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Residential Household Shifting Shimoga"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Bhadravati Steel & Paper Mill Industrial Moving"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Kuvempu University Faculty & Student Relocation"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Vehicle Transit & Plantation Cargo Logistics"
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
                "name": "What are the shifting rates in Shimoga (Shivamogga)?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting in Shimoga starts from ₹3,200 to ₹6,000 for 1 BHK, ₹6,000 to ₹11,500 for 2 BHK, and ₹9,500 to ₹18,000 for 3 BHK homes. Rates include packing cartons, skilled labor, covered vehicle transit, and destination placement."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide moving services for the Bhadravati industrial twin city (VISL and MPM)?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we regularly handle employee relocations and industrial cargo between Bhadravati (Visvesvaraya Iron and Steel Plant, Mysore Paper Mills), Shimoga, and other Karnataka cities with dedicated trucks and IBA billing."
                }
            },
            {
                "@type": "Question",
                "name": "How do you protect household goods against heavy Malnad monsoon rain in Shimoga?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Shimoga is the gateway to the heavy rainfall Malnad region. We implement complete weatherproofing: multi-layer shrink wrapping, water-resistant tarpaulins, silica gel packets, and sealed container vehicles."
                }
            },
            {
                "@type": "Question",
                "name": "How quickly can you move household goods from Shimoga to Bangalore?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Via National Highway 69 connecting through Tumkur, our container trucks safely reach Bangalore in roughly 5.5 to 6.5 hours with real-time GPS tracking."
                }
            },
            {
                "@type": "Question",
                "name": "Is transit insurance included for interstate relocations from Shimoga?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we issue 100% all-risk transit insurance policies with explicit itemized declarations, backed by our central customer operations in Ranchi."
                }
            },
            {
                "@type": "Question",
                "name": "Can you safely relocate delicate teakwood and rosewood furniture in Shimoga?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our certified carpenters dismantle heavy cots, antique sideboards, and modular wardrobes, wrapping each piece in thick bubble film and corrugated edge guards before reassembly at your destination."
                }
            }
        ]
    }
    </script>

    <style>
        .smg-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.65;
        }
        .smg-header {
            background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%);
            color: #ffffff;
            padding: 45px 25px;
            border-radius: 12px;
            margin-bottom: 30px;
            text-align: center;
        }
        .smg-header h1 {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.25;
            color: #ffffff;
        }
        .smg-header p {
            font-size: 1.1rem;
            max-width: 900px;
            margin: 0 auto 20px;
            color: #e2e8f0;
        }
        .smg-btn-wrap {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .smg-btn-primary {
            background: #ea580c;
            color: #ffffff;
            padding: 12px 26px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 700;
            display: inline-block;
            transition: background 0.2s ease;
        }
        .smg-btn-primary:hover {
            background: #c2410c;
        }
        .smg-btn-secondary {
            background: #ffffff;
            color: #1e3a8a;
            padding: 12px 26px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 700;
            display: inline-block;
            transition: background 0.2s ease;
        }
        .smg-btn-secondary:hover {
            background: #f1f5f9;
        }
        .smg-section {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 32px 28px;
            margin-bottom: 30px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .smg-section-heading {
            font-size: 1.75rem;
            color: #1e3a8a;
            margin-bottom: 16px;
            font-weight: 700;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
        }
        .smg-subheading {
            font-size: 1.3rem;
            color: #0f172a;
            margin-top: 24px;
            margin-bottom: 12px;
            font-weight: 600;
        }
        .smg-intro-p {
            font-size: 1.05rem;
            color: #334155;
            margin-bottom: 18px;
        }
        .smg-highlight-box {
            background: #f8fafc;
            border-left: 4px solid #ea580c;
            padding: 20px 22px;
            border-radius: 0 8px 8px 0;
            margin: 24px 0;
        }
        .smg-highlight-box h3 {
            font-size: 1.15rem;
            color: #1e3a8a;
            margin-top: 0;
            margin-bottom: 10px;
        }
        .smg-highlight-box ul {
            margin: 0;
            padding-left: 20px;
        }
        .smg-highlight-box li {
            margin-bottom: 8px;
            color: #334155;
        }
        .smg-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 24px 0;
        }
        .smg-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 20px 18px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .smg-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 15px -3px rgba(0, 0, 0, 0.08);
        }
        .smg-card h3 {
            font-size: 1.15rem;
            color: #1e3a8a;
            margin-top: 0;
            margin-bottom: 10px;
        }
        .smg-card p {
            font-size: 0.95rem;
            color: #475569;
            margin: 0;
            line-height: 1.55;
        }
        .smg-table {
            width: 100%;
            border-collapse: collapse;
            margin: 24px 0;
            background: #ffffff;
        }
        .smg-table th {
            background: #1e3a8a;
            color: #ffffff;
            text-align: left;
            padding: 12px 14px;
            font-size: 0.95rem;
        }
        .smg-table td {
            padding: 12px 14px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 0.92rem;
            color: #334155;
        }
        .smg-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .smg-image-container {
            max-width: 580px;
            margin: 28px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            text-align: center;
        }
        .smg-image-container img {
            width: 100%;
            height: auto;
            display: block;
        }
        .smg-image-caption {
            background: #f1f5f9;
            color: #475569;
            font-size: 0.88rem;
            padding: 8px 12px;
            margin: 0;
            text-align: center;
            border-top: 1px solid #e2e8f0;
        }
        .smg-step-list {
            margin: 24px 0;
        }
        .smg-step-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 18px 16px;
        }
        .smg-step-num {
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
        .smg-step-content h3 {
            margin: 0 0 6px;
            font-size: 1.15rem;
            color: #1e3a8a;
        }
        .smg-step-content p {
            margin: 0;
            font-size: 0.95rem;
            color: #475569;
        }
        .smg-faq-item {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 18px 20px;
            margin-bottom: 14px;
        }
        .smg-faq-item h3 {
            font-size: 1.15rem;
            color: #1e3a8a;
            margin-bottom: 8px;
            font-weight: 600;
        }
        .smg-faq-item p {
            font-size: 0.96rem;
            color: #475569;
            margin: 0;
            line-height: 1.6;
        }
        .smg-cluster-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin-top: 25px;
        }
        .smg-cluster-card {
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            padding: 14px 10px;
            border-radius: 6px;
            text-align: center;
            transition: all 0.2s ease;
        }
        .smg-cluster-card:hover {
            border-color: #ea580c;
            background: #fff;
            transform: translateY(-2px);
        }
        .smg-cluster-card a {
            text-decoration: none;
            color: #1e3a8a;
            font-weight: 600;
            font-size: 0.92rem;
            display: block;
        }
        .smg-cluster-card a:hover {
            color: #ea580c;
        }
        @media (max-width: 768px) {
            .smg-header {
                padding: 30px 15px;
            }
            .smg-header h1 {
                font-size: 1.8rem;
            }
            .smg-section {
                padding: 22px 16px;
            }
            .smg-section-heading {
                font-size: 1.45rem;
            }
            .smg-grid-3, .smg-cluster-grid {
                grid-template-columns: 1fr;
            }
            .smg-table th, .smg-table td {
                padding: 8px 10px;
                font-size: 0.88rem;
            }
        }
    </style>
</head>
<body>

<?php
// Include site header
require_once ROOT_PATH . '/includes/header.php';
?>

<div class="smg-wrap">

    <!-- Hero Header -->
    <header class="smg-header">
        <h1>Packers and Movers in Shimoga (Shivamogga)</h1>
        <p>Premium residential shifting, Bhadravati industrial logistics, Malnad plantation transfers, and automobile carrier across Vinoba Nagar, Gopala Gowda Extension, Vidyanagar, and VISL Township.</p>
        <div class="smg-btn-wrap">
            <a href="tel:+919334404050" class="smg-btn-primary">Call +91 93344 04050</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="smg-btn-secondary">Check Tariff Rates</a>
        </div>
    </header>

    <!-- Section 1: Locality Overview & Gateway to Malnad -->
    <section class="smg-section">
        <h2 class="smg-section-heading">Professional Relocation Services in Shimoga (Shivamogga)</h2>
        <p class="smg-intro-p">Celebrated as the enchanting 'Gateway to the Malnad' region and the crown jewel of the Western Ghats, Shimoga (Shivamogga) is a thriving agricultural, educational, and industrial capital.</p>

        <p>Gracefully situated on the banks of the sacred Tunga River, Shimoga serves as the commercial hub for rich arecanut, coffee, and paddy plantations. Just 18 kilometers to the southeast lies its industrial twin city, Bhadravati, famous across India for the pioneering <strong>Visvesvaraya Iron and Steel Plant (VISL - SAIL)</strong> and Mysore Paper Mills (MPM). The city is also an academic center hosting Kuvempu University at Jnana Sahyadri campus in Shankaraghatta, the Shimoga Institute of Medical Sciences (SIMS), and prominent engineering colleges.</p>

        <h3 class="smg-subheading">Malnad Monsoon Weatherproofing & Highway Connectivity</h3>
        <p>Shimoga receives heavy monsoon rainfall characteristic of the Western Ghats rainforest corridor. High atmospheric humidity and sudden downpours pose serious hazards to standard packing boxes and untreated furniture. Shree Ashirwad Packers and Movers implements specialized Malnad weatherproofing protocols: moisture-barrier shrink films, heavy-duty moving tarpaulins, silica gel packets, and sealed, locked container trucks that keep every household article completely dry.</p>

        <p>Positioned along National Highway 69 (connecting Bangalore via Tumkur) and National Highway 169 (connecting Mangalore via Thirthahalli), Shimoga enjoys excellent regional transit. Whether moving a residence in <strong>Vinoba Nagar, Gopala Gowda Extension, or Vidyanagar</strong>, or transferring corporate personnel between Bhadravati and Bangalore, our experienced crews provide seamless, stress-free relocations.</p>

        <div class="smg-highlight-box">
            <h3>Key Advantages of Moving with Us in Shimoga</h3>
            <ul>
                <li><strong>Malnad Monsoon-Grade Waterproofing:</strong> Heavy 4-layer shrink wrap, sealed containers, and silica gel desiccant packs guarding against rain and dampness.</li>
                <li><strong>Bhadravati Twin Industrial Expertise:</strong> Specialized corporate and factory transfer packages for VISL (SAIL) and MPM paper mill employees.</li>
                <li><strong>Fast Bangalore Highway Shuttles:</strong> Direct container transport on NH 69 reaching Bangalore in 6 hours with 24/7 digital GPS tracking.</li>
                <li><strong>Pan-India Network Reliability:</strong> Directly connected with our regional authority centers in <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hubli">Hubli</a>, <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bangalore">Bangalore</a>, and central headquarters in <a href="<?php echo SITE_BASE_URL; ?>/">Ranchi</a>.</li>
            </ul>
        </div>

        <div class="smg-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Household packing in Shimoga" title="Household relocation in Shimoga">
            <p class="smg-image-caption">Comprehensive household packing and organized labeling for residential homes in Shimoga (Shivamogga).</p>
        </div>
    </section>

    <!-- Section 2: Comprehensive Shifting Solutions -->
    <section class="smg-section">
        <h2 class="smg-section-heading">Full-Spectrum Relocation Solutions Across Shimoga</h2>
        <p class="smg-intro-p">We provide tailored moving solutions engineered to meet the unique demands of plantation owners, university faculty, and industrial steel engineers.</p>

        <div class="smg-grid-3">
            <div class="smg-card">
                <h3>Residential House Shifting</h3>
                <p>Complete room-wise packing, specialized furniture dismantling, covered transit, and room placement for 1, 2, 3, and 4 BHK homes across Vinoba Nagar and Gopala.</p>
            </div>
            <div class="smg-card">
                <h3>Bhadravati Industrial Moving</h3>
                <p>Heavy machinery handling, steel fabrication apparatus crating, factory floor transfers, and corporate township moves across VISL and MPM.</p>
            </div>
            <div class="smg-card">
                <h3>University Faculty & Student Relocation</h3>
                <p>Budget-friendly student luggage parcels, research lab crating, library book packing, and doorstep transfer for Kuvempu University scholars.</p>
            </div>
        </div>

        <h3 class="smg-subheading">Teakwood Carpentry Dismantling & Master Furniture Assembly</h3>
        <p>Homes in Shimoga and the surrounding Malnad plantation estates boast magnificent antique teakwood and rosewood furnishings, large wooden swings, and modular kitchen suites. Our certified in-house carpenters expertly dismantle king-sized cots, multi-door wardrobes, and modular units. Every component, screw, and bracket is categorized and packed into organized hardware pouches for exact reassembly at your destination.</p>

        <p>Kitchen crockery, glassware, fine bone china, and porcelain heirlooms receive rigorous treatment. Our crews wrap each individual fragile item in multilayer bubble sheeting before nesting them into heavy-duty 5-ply cartons separated by cellular partitions and thermocol base padding, completely eliminating internal motion and transit vibration.</p>

        <h3 class="smg-subheading">Plantation Estate Antiques, Sacred Mandirs & Electronics Care</h3>
        <p>Many traditional families in Shimoga cherish generational brass deepams, carved sandalwood deities, and antique clockwork. We clean and wrap every sacred artifact in virgin white paper, cushion it with thermocol, and place it into dedicated crates with religious reverence.</p>

        <p>Large household electronics—including double-door frost-free refrigerators, curved smart televisions, and front-load washing machines—are secured with internal drum transit locks, thick quilted moving blankets, and heavy-gauge shrink wrap, ensuring 100% operational safety upon arrival.</p>

        <div class="smg-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg" alt="Protective wooden furniture wrapping in Shimoga" title="Furniture packing in Shimoga">
            <p class="smg-image-caption">Multi-tier bubble wrapping and edge guards applied to premium furniture in Shimoga.</p>
        </div>
    </section>

    <!-- Section 3: Sub-Localities & Neighborhood Micro-Hubs -->
    <section class="smg-section">
        <h2 class="smg-section-heading">Localities and Enclaves We Serve in Shimoga</h2>
        <p class="smg-intro-p">Our local moving vans and experienced field crews maintain continuous operational coverage across the following key residential and industrial sectors:</p>

        <div class="smg-grid-3">
            <div class="smg-card">
                <h3>Vinoba Nagar & Tilak Nagar</h3>
                <p>Serving prestigious residential avenues, healthcare clinics, upscale multi-story apartments, and peaceful family residential layouts.</p>
            </div>
            <div class="smg-card">
                <h3>Gopala Gowda Extension</h3>
                <p>Modern planned residential layouts, spacious independent villas, doctors' residences, and quiet tree-lined avenues.</p>
            </div>
            <div class="smg-card">
                <h3>Vidyanagar & Jayanagar</h3>
                <p>Covering educational campuses, student hostels, professor bungalows, and vibrant commercial shopping arcades.</p>
            </div>
            <div class="smg-card">
                <h3>Bhadravati Twin Industrial City</h3>
                <p>Serving VISL (SAIL) steel plant township, MPM paper mill staff quarters, and heavy fabrication engineering workshops.</p>
            </div>
            <div class="smg-card">
                <h3>Gandhi Bazaar & Durgigudi</h3>
                <p>Traditional commercial retail markets, historic family bungalows, arecanut trade offices, and bustling downtown quarters.</p>
            </div>
            <div class="smg-card">
                <h3>Kuvempu University Shankaraghatta</h3>
                <p>Specialized moving solutions for faculty quarters, research scholars, student hostels, and academic library book archives.</p>
            </div>
        </div>

        <h3 class="smg-subheading">Two-Wheeler Parcel & Vehicle Transportation Services</h3>
        <p>Shimoga residents and students transferring to Bangalore, Mysore, Pune, or other interstate destinations rely on our dedicated vehicle transit solutions. We pack motorcycles, Royal Enfield bikes, and scooters using dense foam padding on fuel tanks, side mirrors, and exhausts. Vehicles are secured with wheel chocks and heavy-duty ratchet straps inside covered carriers, ensuring scratch-free delivery with full transit insurance coverage.</p>

        <div class="smg-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/fragile-glassware-box-packing-ranchi.jpg" alt="Fragile packing services in Shimoga" title="Delicate packing in Shimoga">
            <p class="smg-image-caption">Custom bubble wrapping and heavy-duty box crating for fragile glassware and delicate kitchenware.</p>
        </div>
    </section>

    <!-- Section 4: Tariff Estimates & Transparent Pricing -->
    <section class="smg-section">
        <h2 class="smg-section-heading">Packers and Movers Charges in Shimoga (Shivamogga)</h2>
        <p class="smg-intro-p">We uphold 100% transparent pricing with clear itemized quotes. No hidden vehicle fees, no last-minute surcharge additions, and zero surprise costs on moving day.</p>

        <table class="smg-table">
            <thead>
                <tr>
                    <th>Home Configuration</th>
                    <th>Packing Material & Labor</th>
                    <th>Local Shifting (Within Shimoga)</th>
                    <th>Highway Shifting (Shimoga to Bangalore)</th>
                    <th>Interstate Shifting (To Eastern/Northern Hubs)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>1 BHK Apartment</strong></td>
                    <td>₹1,500 - ₹2,700</td>
                    <td>₹3,200 - ₹6,000</td>
                    <td>₹7,800 - ₹13,800</td>
                    <td>₹13,800 - ₹23,500</td>
                </tr>
                <tr>
                    <td><strong>2 BHK Apartment / House</strong></td>
                    <td>₹2,800 - ₹4,800</td>
                    <td>₹6,000 - ₹11,500</td>
                    <td>₹12,800 - ₹21,500</td>
                    <td>₹19,500 - ₹34,500</td>
                </tr>
                <tr>
                    <td><strong>3 BHK Apartment / Villa</strong></td>
                    <td>₹4,000 - ₹7,200</td>
                    <td>₹9,500 - ₹18,000</td>
                    <td>₹17,500 - ₹29,500</td>
                    <td>₹27,500 - ₹47,000</td>
                </tr>
                <tr>
                    <td><strong>4 BHK / Luxury Malnad Bungalow</strong></td>
                    <td>₹5,800 - ₹10,500</td>
                    <td>₹14,500 - ₹26,500</td>
                    <td>₹23,500 - ₹39,000</td>
                    <td>₹35,500 - ₹61,000</td>
                </tr>
                <tr>
                    <td><strong>Two Wheeler Parcel (Bike / Scooter)</strong></td>
                    <td>₹750 - ₹1,350</td>
                    <td>₹1,150 - ₹2,200</td>
                    <td>₹2,700 - ₹4,600</td>
                    <td>₹4,900 - ₹8,800</td>
                </tr>
            </tbody>
        </table>

        <p>Planning an intercity or interstate move from Shimoga? Check our interactive <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">Live Tariff Rates Calculator</a> for instant customized cost estimates based on cargo volume and travel distance.</p>

        <h3 class="smg-subheading">National Highway Transit via NH 69 & NH 169 Corridors</h3>
        <p>Shimoga connects directly to National Highway 69, allowing our container vehicles to travel swiftly toward Bangalore in under 6 hours, and to Mangalore via NH 169 across the Western Ghats in under 5 hours. Every vehicle is monitored continuously via 24/7 satellite GPS tracking.</p>

        <p>Interstate consignments heading toward eastern commercial hubs—such as Ranchi, Patna, Kolkata, and Bhubaneswar—are transported in weatherproof, containerized trucks with full all-risk transit insurance and constant digital status updates managed centrally through our customer desk.</p>
    </section>

    <!-- Section 5: Systematic 5-Step Relocation Process -->
    <section class="smg-section">
        <h2 class="smg-section-heading">Our Proven 5-Step Relocation Workflow in Shimoga</h2>
        <p class="smg-intro-p">Every move follows a rigorous operational protocol tested over thousands of successful relocations to guarantee zero damage and complete customer peace of mind.</p>

        <div class="smg-step-list">
            <div class="smg-step-item">
                <div class="smg-step-num">1</div>
                <div class="smg-step-content">
                    <h3>Pre-Move Survey & Written Quote</h3>
                    <p>Our relocation surveyor conducts an on-site visit to your Shimoga home or Bhadravati plant quarters (or offers an instant video survey) to evaluate item volumes, elevator access, and truck approach paths before providing a transparent written quotation.</p>
                </div>
            </div>

            <div class="smg-step-item">
                <div class="smg-step-num">2</div>
                <div class="smg-step-content">
                    <h3>Multi-Layer Professional Packing</h3>
                    <p>On scheduled moving day, our uniformed team arrives with virgin 5-ply cartons, bubble wrap, edge guards, and color-coded labels, packing and categorizing items room by room.</p>
                </div>
            </div>

            <div class="smg-step-item">
                <div class="smg-step-num">3</div>
                <div class="smg-step-content">
                    <h3>Ergonomic Loading & Ratchet Securing</h3>
                    <p>Heavy furniture and electronic appliances are moved using hydraulic lifters, dollies, and safety belts, then strapped securely inside our closed container truck to prevent transit movement.</p>
                </div>
            </div>

            <div class="smg-step-item">
                <div class="smg-step-num">4</div>
                <div class="smg-step-content">
                    <h3>GPS-Monitored Highway Transit</h3>
                    <p>Your goods travel in weatherproof, sealed container vehicles monitored via continuous GPS tracking, ensuring total protection from dust, rain, and highway vibrations.</p>
                </div>
            </div>

            <div class="smg-step-item">
                <div class="smg-step-num">5</div>
                <div class="smg-step-content">
                    <h3>Doorstep Delivery, Reassembly & Debris Cleanup</h3>
                    <p>At your new destination, our crew unloads every box into its designated room, reassembles beds and modular furniture, assists with appliance placement, and removes all discarded packing waste.</p>
                </div>
            </div>
        </div>

        <div class="smg-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Weatherproof container truck in Shimoga" title="Safe transit truck in Shimoga">
            <p class="smg-image-caption">Weatherproof sealed container vehicles ensuring safe, dust-free, and rain-protected transit across Karnataka.</p>
        </div>
    </section>

    <!-- Section 6: Frequently Asked Questions -->
    <section class="smg-section">
        <h2 class="smg-section-heading">Frequently Asked Questions — Shimoga Relocation</h2>
        <p class="smg-intro-p">Find clear, transparent answers to commonly asked questions about moving home, industrial transport, and vehicle moving in Shimoga.</p>

        <div class="smg-faq-item">
            <h3>What are the shifting rates in Shimoga (Shivamogga)?</h3>
            <p>Local shifting in Shimoga starts from ₹3,200 to ₹6,000 for 1 BHK, ₹6,000 to ₹11,500 for 2 BHK, and ₹9,500 to ₹18,000 for 3 BHK homes. Rates include packing cartons, skilled labor, covered vehicle transit, and destination placement.</p>
        </div>

        <div class="smg-faq-item">
            <h3>Do you provide moving services for the Bhadravati industrial twin city (VISL and MPM)?</h3>
            <p>Yes, we regularly handle employee relocations and industrial cargo between Bhadravati (Visvesvaraya Iron and Steel Plant, Mysore Paper Mills), Shimoga, and other Karnataka cities with dedicated trucks and IBA billing.</p>
        </div>

        <div class="smg-faq-item">
            <h3>How do you protect household goods against heavy Malnad monsoon rain in Shimoga?</h3>
            <p>Shimoga is the gateway to the heavy rainfall Malnad region. We implement complete weatherproofing: multi-layer shrink wrapping, water-resistant tarpaulins, silica gel packets, and sealed container vehicles.</p>
        </div>

        <div class="smg-faq-item">
            <h3>How quickly can you move household goods from Shimoga to Bangalore?</h3>
            <p>Via National Highway 69 connecting through Tumkur, our container trucks safely reach Bangalore in roughly 5.5 to 6.5 hours with real-time GPS tracking.</p>
        </div>

        <div class="smg-faq-item">
            <h3>Is transit insurance included for interstate relocations from Shimoga?</h3>
            <p>Yes, we issue 100% all-risk transit insurance policies with explicit itemized declarations, backed by our central customer operations in Ranchi.</p>
        </div>

        <div class="smg-faq-item">
            <h3>Can you safely relocate delicate teakwood and rosewood furniture in Shimoga?</h3>
            <p>Yes, our certified carpenters dismantle heavy cots, antique sideboards, and modular wardrobes, wrapping each piece in thick bubble film and corrugated edge guards before reassembly at your destination.</p>
        </div>
    </section>

    <!-- Section 7: Connected Karnataka Hubs & Localities Cluster Module -->
    <section class="smg-section">
        <h2 class="smg-section-heading">Explore Connected Moving Hubs Across Karnataka</h2>
        <p class="smg-intro-p">Shree Ashirwad Packers and Movers maintains an extensive logistics network linking Shimoga with key regional authority centers across Karnataka:</p>

        <div class="smg-cluster-grid">
            <div class="smg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hubli">Hubli-Dharwad Hub</a>
            </div>
            <div class="smg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-davanagere">Davanagere Hub</a>
            </div>
            <div class="smg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bellary">Bellary Steel Hub</a>
            </div>
            <div class="smg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bangalore">Bangalore Central Hub</a>
            </div>
            <div class="smg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-mangalore">Mangalore Port Hub</a>
            </div>
            <div class="smg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-mysore">Mysore Heritage Hub</a>
            </div>
            <div class="smg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-belgaum">Belgaum Foundry Hub</a>
            </div>
            <div class="smg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gulbarga">Gulbarga Cement Hub</a>
            </div>
        </div>
    </section>

</div>

<?php
// Include site footer
require_once ROOT_PATH . '/includes/footer.php';
?>
</body>
</html>
