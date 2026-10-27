<?php
/**
 * Page: Packers and Movers in Davanagere
 * File: pages/packers-and-movers-in-davanagere.php
 * URL Slug: packers-and-movers-in-davanagere
 * Status: Published
 */

if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__));
}
require_once ROOT_PATH . '/includes/config.php';

// Define page-level metadata
$page_title = "Packers and Movers in Davanagere | Safe Shifting Services";
$page_description = "Certified packers and movers in Davanagere. Professional household shifting, medical faculty relocation, textile machinery transport & car carrier in MCC 'A' Block & Vidyanagar.";
$canonical_url = SITE_BASE_URL . "/packers-and-movers-in-davanagere";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="keywords" content="packers and movers in davanagere, packers and movers davanagere, household shifting davanagere, movers and packers davanagere mcc, packers and movers harihar, car transportation davanagere, textile machinery shifting davanagere">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Davanagere",
        "image": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 9835565233",
        "priceRange": "₹3,200 - ₹52,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "PB Road, Near Bapuji Vidyanagar Crossing",
            "addressLocality": "Davanagere",
            "addressRegion": "Karnataka",
            "postalCode": "577004",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 14.4644,
            "longitude": 75.9218
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
            "reviewCount": "234"
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
                "name": "Davanagere",
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
        "serviceType": "Residential Shifting and Educational Relocation",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "City",
            "name": "Davanagere"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Davanagere Relocation Services Catalog",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Apartment & Villa Shifting Davanagere"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Medical & Engineering College Faculty Transfers"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Textile Machinery & Agro Equipment Transport"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Automobile & Two-Wheeler Transit Davanagere"
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
                "name": "What are the shifting charges in Davanagere?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting in Davanagere starts from ₹3,200 to ₹6,000 for 1 BHK, ₹6,000 to ₹11,500 for 2 BHK, and ₹9,500 to ₹18,000 for 3 BHK residences. Rates include packing cartons, skilled labor, covered vehicle transit, and destination room placement."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide relocation services for doctors and faculty at JJM Medical College and BIET?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we regularly handle relocations for medical professors, resident doctors, and engineering faculty in MCC 'A' Block, Vidyanagar, and Bapuji educational campuses with customized scheduling and professional handling."
                }
            },
            {
                "@type": "Question",
                "name": "How quickly can you move household goods from Davanagere to Bangalore?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Located halfway along the 6-lane NH 48 highway corridor, our container trucks reach Bangalore in roughly 4.5 to 5.5 hours, providing seamless same-day delivery with real-time GPS tracking."
                }
            },
            {
                "@type": "Question",
                "name": "Can you handle industrial machinery and factory transport in the Harihar industrial belt?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our commercial logistics team manages machine tools, textile looms, agro-processing equipment, and spare parts across the Harihar-Davanagere twin industrial corridor with hydraulic flatbed trucks and cranes."
                }
            },
            {
                "@type": "Question",
                "name": "Is full transit insurance included for moves originating in Davanagere?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide 100% comprehensive all-risk transit insurance policies with explicit itemized declarations, backed by our central customer operations in Ranchi."
                }
            },
            {
                "@type": "Question",
                "name": "How are antique wooden furniture and home electronics protected?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We utilize 4-tier packaging comprising soft foam padding, high-density bubble wrap, sturdy 5-ply corrugated cardboard sheets, and stretch film, with custom crating for TVs, mirrors, and glass cabinets."
                }
            }
        ]
    }
    </script>

    <style>
        .dvg-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.65;
        }
        .dvg-header {
            background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%);
            color: #ffffff;
            padding: 45px 25px;
            border-radius: 12px;
            margin-bottom: 30px;
            text-align: center;
        }
        .dvg-header h1 {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.25;
            color: #ffffff;
        }
        .dvg-header p {
            font-size: 1.1rem;
            max-width: 900px;
            margin: 0 auto 20px;
            color: #e2e8f0;
        }
        .dvg-btn-wrap {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .dvg-btn-primary {
            background: #ea580c;
            color: #ffffff;
            padding: 12px 26px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 700;
            display: inline-block;
            transition: background 0.2s ease;
        }
        .dvg-btn-primary:hover {
            background: #c2410c;
        }
        .dvg-btn-secondary {
            background: #ffffff;
            color: #1e3a8a;
            padding: 12px 26px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 700;
            display: inline-block;
            transition: background 0.2s ease;
        }
        .dvg-btn-secondary:hover {
            background: #f1f5f9;
        }
        .dvg-section {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 32px 28px;
            margin-bottom: 30px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .dvg-section-heading {
            font-size: 1.75rem;
            color: #1e3a8a;
            margin-bottom: 16px;
            font-weight: 700;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
        }
        .dvg-subheading {
            font-size: 1.3rem;
            color: #0f172a;
            margin-top: 24px;
            margin-bottom: 12px;
            font-weight: 600;
        }
        .dvg-intro-p {
            font-size: 1.05rem;
            color: #334155;
            margin-bottom: 18px;
        }
        .dvg-highlight-box {
            background: #f8fafc;
            border-left: 4px solid #ea580c;
            padding: 20px 22px;
            border-radius: 0 8px 8px 0;
            margin: 24px 0;
        }
        .dvg-highlight-box h3 {
            font-size: 1.15rem;
            color: #1e3a8a;
            margin-top: 0;
            margin-bottom: 10px;
        }
        .dvg-highlight-box ul {
            margin: 0;
            padding-left: 20px;
        }
        .dvg-highlight-box li {
            margin-bottom: 8px;
            color: #334155;
        }
        .dvg-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 24px 0;
        }
        .dvg-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 20px 18px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .dvg-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 15px -3px rgba(0, 0, 0, 0.08);
        }
        .dvg-card h3 {
            font-size: 1.15rem;
            color: #1e3a8a;
            margin-top: 0;
            margin-bottom: 10px;
        }
        .dvg-card p {
            font-size: 0.95rem;
            color: #475569;
            margin: 0;
            line-height: 1.55;
        }
        .dvg-table {
            width: 100%;
            border-collapse: collapse;
            margin: 24px 0;
            background: #ffffff;
        }
        .dvg-table th {
            background: #1e3a8a;
            color: #ffffff;
            text-align: left;
            padding: 12px 14px;
            font-size: 0.95rem;
        }
        .dvg-table td {
            padding: 12px 14px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 0.92rem;
            color: #334155;
        }
        .dvg-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .dvg-image-container {
            max-width: 580px;
            margin: 28px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            text-align: center;
        }
        .dvg-image-container img {
            width: 100%;
            height: auto;
            display: block;
        }
        .dvg-image-caption {
            background: #f1f5f9;
            color: #475569;
            font-size: 0.88rem;
            padding: 8px 12px;
            margin: 0;
            text-align: center;
            border-top: 1px solid #e2e8f0;
        }
        .dvg-step-list {
            margin: 24px 0;
        }
        .dvg-step-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 18px 16px;
        }
        .dvg-step-num {
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
        .dvg-step-content h3 {
            margin: 0 0 6px;
            font-size: 1.15rem;
            color: #1e3a8a;
        }
        .dvg-step-content p {
            margin: 0;
            font-size: 0.95rem;
            color: #475569;
        }
        .dvg-faq-item {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 18px 20px;
            margin-bottom: 14px;
        }
        .dvg-faq-item h3 {
            font-size: 1.15rem;
            color: #1e3a8a;
            margin-bottom: 8px;
            font-weight: 600;
        }
        .dvg-faq-item p {
            font-size: 0.96rem;
            color: #475569;
            margin: 0;
            line-height: 1.6;
        }
        .dvg-cluster-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin-top: 25px;
        }
        .dvg-cluster-card {
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            padding: 14px 10px;
            border-radius: 6px;
            text-align: center;
            transition: all 0.2s ease;
        }
        .dvg-cluster-card:hover {
            border-color: #ea580c;
            background: #fff;
            transform: translateY(-2px);
        }
        .dvg-cluster-card a {
            text-decoration: none;
            color: #1e3a8a;
            font-weight: 600;
            font-size: 0.92rem;
            display: block;
        }
        .dvg-cluster-card a:hover {
            color: #ea580c;
        }
        @media (max-width: 768px) {
            .dvg-header {
                padding: 30px 15px;
            }
            .dvg-header h1 {
                font-size: 1.8rem;
            }
            .dvg-section {
                padding: 22px 16px;
            }
            .dvg-section-heading {
                font-size: 1.45rem;
            }
            .dvg-grid-3, .dvg-cluster-grid {
                grid-template-columns: 1fr;
            }
            .dvg-table th, .dvg-table td {
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

<div class="dvg-wrap">

    <!-- Hero Header -->
    <header class="dvg-header">
        <h1>Packers and Movers in Davanagere</h1>
        <p>Premium residential shifting, medical faculty relocation, textile machinery transport, and vehicle moving across MCC 'A' Block, MCC 'B' Block, Vidyanagar, Kuvempu Nagar, and Harihar.</p>
        <div class="dvg-btn-wrap">
            <a href="tel:+919835565233" class="dvg-btn-primary">Call +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="dvg-btn-secondary">Check Tariff Rates</a>
        </div>
    </header>

    <!-- Section 1: Locality Overview & Textile Manchester of Karnataka -->
    <section class="dvg-section">
        <h2 class="dvg-section-heading">Professional Relocation Services in Davanagere</h2>
        <p class="dvg-intro-p">Celebrated across India as the 'Manchester of Karnataka' for its historic textile spinning mills and revered for its iconic culinary Benne Dosa heritage, Davanagere is Central Karnataka's premier educational and commercial node.</p>

        <p>Geographically positioned precisely at the heart of Karnataka along the 6-lane National Highway 48, Davanagere connects northern and southern Karnataka with exceptional ease. The city functions as an educational powerhouse, hosting premier medical and engineering institutions including the prestigious <strong>J.J.M. Medical College, Bapuji Institute of Engineering and Technology (BIET)</strong>, and Davanagere University. Upscale residential living flourishes in meticulously planned layouts like <strong>MCC 'A' Block, MCC 'B' Block, Kuvempu Nagar, Vidyanagar, and Anjaneya Badavane</strong>.</p>

        <h3 class="dvg-subheading">Central Highway Crossway & Harihar Twin Industrial Belt</h3>
        <p>Just 14 kilometers north along the banks of the Tungabhadra River lies the twin industrial town of Harihar, housing major engineering works, polyfiber plants, and agro-equipment manufacturers. The constant transit of doctors, professors, commercial traders, and industrial engineers between Davanagere, Hubli, and Bangalore demands highly structured moving services.</p>

        <p>Shree Ashirwad Packers and Movers delivers certified full-cycle relocation services designed specifically for Davanagere's mobile community. Whether shifting an upscale family bungalow in MCC Block, transferring research library gear for college professors, or transporting heavy textile apparatus to Bangalore or Mumbai, our dedicated teams ensure zero damage, transparent pricing, and punctual execution.</p>

        <div class="dvg-highlight-box">
            <h3>Key Advantages of Moving with Us in Davanagere</h3>
            <ul>
                <li><strong>Central Highway Express Shuttles:</strong> Rapid moves along NH 48 reaching Bangalore in 5 hours and Hubli in under 2 hours.</li>
                <li><strong>Medical & Educational Campus Experience:</strong> Dedicated packing for professors, resident doctors, and research scholars at JJM Medical College and BIET.</li>
                <li><strong>Harihar Industrial Belt Rigging:</strong> Heavy machinery handling, textile loom crating, and industrial spare parts logistics.</li>
                <li><strong>Pan-India Network Reliability:</strong> Directly connected with our regional authority hubs in <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hubli">Hubli</a>, <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bangalore">Bangalore</a>, and central headquarters in <a href="<?php echo SITE_BASE_URL; ?>/">Ranchi</a>.</li>
            </ul>
        </div>

        <div class="dvg-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Household packing in Davanagere" title="Household relocation in Davanagere">
            <p class="dvg-image-caption">Comprehensive household packing and organized labeling for residential homes in Davanagere.</p>
        </div>
    </section>

    <!-- Section 2: Comprehensive Shifting Solutions -->
    <section class="dvg-section">
        <h2 class="dvg-section-heading">Full-Spectrum Relocation Solutions Across Davanagere</h2>
        <p class="dvg-intro-p">We provide tailored moving solutions engineered to meet the unique requirements of medical professionals, college faculty, and business families.</p>

        <div class="dvg-grid-3">
            <div class="dvg-card">
                <h3>Residential House Shifting</h3>
                <p>Complete room-wise packing, specialized furniture dismantling, covered transit, and room placement for 1, 2, 3, and 4 BHK homes across MCC Blocks and Kuvempu Nagar.</p>
            </div>
            <div class="dvg-card">
                <h3>Medical & Campus Relocation</h3>
                <p>Specialized transfers for doctor clinics, medical faculty residences, research libraries, and student hostel rooms across JJM and BIET campuses.</p>
            </div>
            <div class="dvg-card">
                <h3>Textile & Industrial Machinery Moving</h3>
                <p>Heavy machinery handling, spinning equipment crating, factory floor transfers, and agro-equipment logistics in the Davanagere-Harihar corridor.</p>
            </div>
        </div>

        <h3 class="dvg-subheading">Carpentry Dismantling & Master Furniture Assembly</h3>
        <p>Homes in Davanagere feature a distinguished combination of heritage teakwood furniture, carved dining suites, and contemporary modular bedroom units. Our licensed in-house carpenters expertly dismantle king-sized cots, multi-door wardrobes, and modular kitchen units. Every component, screw, and bracket is categorized and packed into organized hardware pouches for exact reassembly at your destination.</p>

        <p>Kitchen crockery, glassware, fine bone china, and porcelain heirlooms receive rigorous treatment. Our crews wrap each individual fragile item in multilayer bubble sheeting before nesting them into heavy-duty 5-ply cartons separated by cellular partitions and thermocol base padding, completely eliminating internal motion and transit vibration.</p>

        <h3 class="dvg-subheading">Doctor Clinic Equipment, Library Archives & Electronics Care</h3>
        <p>With Davanagere serving as Central Karnataka's healthcare capital, our crews frequently move doctor consultation clinics, dental equipment, and sensitive diagnostic tools. We construct custom shock-absorbent timber crates lined with internal foam dampening and antistatic wraps to prevent electronic shock during road transit.</p>

        <p>Valuable home electronics—including double-door frost-free refrigerators, curved smart televisions, and front-load washing machines—are secured with internal drum transit locks, thick quilted moving blankets, and heavy-gauge shrink wrap, ensuring 100% operational safety upon arrival.</p>

        <div class="dvg-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg" alt="Protective wooden furniture wrapping in Davanagere" title="Furniture packing in Davanagere">
            <p class="dvg-image-caption">Multi-tier bubble wrapping and edge guards applied to premium furniture in Davanagere.</p>
        </div>
    </section>

    <!-- Section 3: Sub-Localities & Neighborhood Micro-Hubs -->
    <section class="dvg-section">
        <h2 class="dvg-section-heading">Localities and Enclaves We Serve in Davanagere</h2>
        <p class="dvg-intro-p">Our local moving vans and experienced field crews maintain continuous operational coverage across the following key residential and industrial sectors:</p>

        <div class="dvg-grid-3">
            <div class="dvg-card">
                <h3>MCC 'A' & 'B' Blocks</h3>
                <p>Serving prestigious residential avenues, doctors' private clinics, luxury multi-story apartments, and peaceful family residential layouts.</p>
            </div>
            <div class="dvg-card">
                <h3>Vidyanagar & BIET Enclave</h3>
                <p>Covering engineering campus quarters, student hostels, professor bungalows, and vibrant youth commercial shopping avenues.</p>
            </div>
            <div class="dvg-card">
                <h3>Kuvempu Nagar & Anjaneya Badavane</h3>
                <p>Upscale residential communities featuring modern apartments, independent duplex villas, and peaceful landscaped green avenues.</p>
            </div>
            <div class="dvg-card">
                <h3>PB Road & Commercial Hub</h3>
                <p>Serving major retail markets, commercial trade offices, automobile dealerships, and wholesale agro-commodity godowns.</p>
            </div>
            <div class="dvg-card">
                <h3>Harihar Industrial Twin Town</h3>
                <p>Heavy machinery manufacturing, polyfiber plants, river basin agricultural logistics, and industrial worker residential townships.</p>
            </div>
            <div class="dvg-card">
                <h3>Nittuvalli & Hadadi Road</h3>
                <p>Traditional residential quarters, textile weaving centers, expanding suburban housing colonies, and commercial transport yards.</p>
            </div>
        </div>

        <h3 class="dvg-subheading">Two-Wheeler Parcel & Vehicle Transportation Services</h3>
        <p>Davanagere residents and students transferring to Bangalore, Pune, Mumbai, or other interstate destinations rely on our dedicated vehicle transit solutions. We pack motorcycles, Royal Enfield bikes, and scooters using dense foam padding on fuel tanks, side mirrors, and exhausts. Vehicles are secured with wheel chocks and heavy-duty ratchet straps inside covered carriers, ensuring scratch-free delivery with full transit insurance coverage.</p>

        <div class="dvg-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/fragile-glassware-box-packing-ranchi.jpg" alt="Fragile packing services in Davanagere" title="Delicate packing in Davanagere">
            <p class="dvg-image-caption">Custom bubble wrapping and heavy-duty box crating for fragile glassware and delicate kitchenware.</p>
        </div>
    </section>

    <!-- Section 4: Tariff Estimates & Transparent Pricing -->
    <section class="dvg-section">
        <h2 class="dvg-section-heading">Packers and Movers Charges in Davanagere</h2>
        <p class="dvg-intro-p">We uphold 100% transparent pricing with clear itemized quotes. No hidden vehicle fees, no last-minute surcharge additions, and zero surprise costs on moving day.</p>

        <table class="dvg-table">
            <thead>
                <tr>
                    <th>Home Configuration</th>
                    <th>Packing Material & Labor</th>
                    <th>Local Shifting (Within Davanagere)</th>
                    <th>Highway Shifting (Davanagere to Bangalore)</th>
                    <th>Interstate Shifting (To Eastern/Northern Hubs)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>1 BHK Apartment</strong></td>
                    <td>₹1,500 - ₹2,700</td>
                    <td>₹3,200 - ₹6,000</td>
                    <td>₹7,500 - ₹13,500</td>
                    <td>₹13,500 - ₹23,000</td>
                </tr>
                <tr>
                    <td><strong>2 BHK Apartment / House</strong></td>
                    <td>₹2,800 - ₹4,800</td>
                    <td>₹6,000 - ₹11,500</td>
                    <td>₹12,500 - ₹21,000</td>
                    <td>₹19,000 - ₹34,000</td>
                </tr>
                <tr>
                    <td><strong>3 BHK Apartment / Villa</strong></td>
                    <td>₹4,000 - ₹7,200</td>
                    <td>₹9,500 - ₹18,000</td>
                    <td>₹17,000 - ₹29,000</td>
                    <td>₹27,000 - ₹46,000</td>
                </tr>
                <tr>
                    <td><strong>4 BHK / Luxury Bungalow</strong></td>
                    <td>₹5,800 - ₹10,500</td>
                    <td>₹14,500 - ₹26,000</td>
                    <td>₹23,000 - ₹38,000</td>
                    <td>₹35,000 - ₹60,000</td>
                </tr>
                <tr>
                    <td><strong>Two Wheeler Parcel (Bike / Scooter)</strong></td>
                    <td>₹750 - ₹1,350</td>
                    <td>₹1,150 - ₹2,200</td>
                    <td>₹2,600 - ₹4,500</td>
                    <td>₹4,800 - ₹8,500</td>
                </tr>
            </tbody>
        </table>

        <p>Planning an intercity or interstate move from Davanagere? Check our interactive <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">Live Tariff Rates Calculator</a> for instant customized cost estimates based on cargo volume and travel distance.</p>

        <h3 class="dvg-subheading">National Highway Transit via NH 48 Corridor</h3>
        <p>Davanagere sits directly on National Highway 48, allowing our container vehicles to travel swiftly toward Bangalore in under 5 hours, Hubli in under 2 hours, and Pune in under 8 hours. Every vehicle is monitored continuously via 24/7 satellite GPS tracking.</p>

        <p>Interstate consignments heading toward eastern commercial hubs—such as Ranchi, Patna, Kolkata, and Bhubaneswar—are transported in weatherproof, containerized trucks with full all-risk transit insurance and constant digital status updates managed centrally through our customer desk.</p>
    </section>

    <!-- Section 5: Systematic 5-Step Relocation Process -->
    <section class="dvg-section">
        <h2 class="dvg-section-heading">Our Proven 5-Step Relocation Workflow in Davanagere</h2>
        <p class="dvg-intro-p">Every move follows a rigorous operational protocol tested over thousands of successful relocations to guarantee zero damage and complete customer peace of mind.</p>

        <div class="dvg-step-list">
            <div class="dvg-step-item">
                <div class="dvg-step-num">1</div>
                <div class="dvg-step-content">
                    <h3>Pre-Move Survey & Written Quote</h3>
                    <p>Our relocation surveyor conducts an on-site visit to your Davanagere home or college quarters (or offers an instant video survey) to evaluate item volumes, elevator access, and truck approach paths before providing a transparent written quotation.</p>
                </div>
            </div>

            <div class="dvg-step-item">
                <div class="dvg-step-num">2</div>
                <div class="dvg-step-content">
                    <h3>Multi-Layer Professional Packing</h3>
                    <p>On scheduled moving day, our uniformed team arrives with virgin 5-ply cartons, bubble wrap, edge guards, and color-coded labels, packing and categorizing items room by room.</p>
                </div>
            </div>

            <div class="dvg-step-item">
                <div class="dvg-step-num">3</div>
                <div class="dvg-step-content">
                    <h3>Ergonomic Loading & Ratchet Securing</h3>
                    <p>Heavy furniture and electronic appliances are moved using hydraulic lifters, dollies, and safety belts, then strapped securely inside our closed container truck to prevent transit movement.</p>
                </div>
            </div>

            <div class="dvg-step-item">
                <div class="dvg-step-num">4</div>
                <div class="dvg-step-content">
                    <h3>GPS-Monitored Highway Transit</h3>
                    <p>Your goods travel in weatherproof, sealed container vehicles monitored via continuous GPS tracking, ensuring total protection from dust, rain, and highway vibrations.</p>
                </div>
            </div>

            <div class="dvg-step-item">
                <div class="dvg-step-num">5</div>
                <div class="dvg-step-content">
                    <h3>Doorstep Delivery, Reassembly & Debris Cleanup</h3>
                    <p>At your new destination, our crew unloads every box into its designated room, reassembles beds and modular furniture, assists with appliance placement, and removes all discarded packing waste.</p>
                </div>
            </div>
        </div>

        <div class="dvg-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Weatherproof container truck in Davanagere" title="Safe transit truck in Davanagere">
            <p class="dvg-image-caption">Weatherproof sealed container vehicles ensuring safe, dust-free, and rain-protected transit across Karnataka.</p>
        </div>
    </section>

    <!-- Section 6: Frequently Asked Questions -->
    <section class="dvg-section">
        <h2 class="dvg-section-heading">Frequently Asked Questions — Davanagere Relocation</h2>
        <p class="dvg-intro-p">Find clear, transparent answers to commonly asked questions about moving home, campus shifting, and industrial transport in Davanagere.</p>

        <div class="dvg-faq-item">
            <h3>What are the shifting charges in Davanagere?</h3>
            <p>Local shifting in Davanagere starts from ₹3,200 to ₹6,000 for 1 BHK, ₹6,000 to ₹11,500 for 2 BHK, and ₹9,500 to ₹18,000 for 3 BHK residences. Rates include packing cartons, skilled labor, covered vehicle transit, and destination room placement.</p>
        </div>

        <div class="dvg-faq-item">
            <h3>Do you provide relocation services for doctors and faculty at JJM Medical College and BIET?</h3>
            <p>Yes, we regularly handle relocations for medical professors, resident doctors, and engineering faculty in MCC 'A' Block, Vidyanagar, and Bapuji educational campuses with customized scheduling and professional handling.</p>
        </div>

        <div class="dvg-faq-item">
            <h3>How quickly can you move household goods from Davanagere to Bangalore?</h3>
            <p>Located halfway along the 6-lane NH 48 highway corridor, our container trucks reach Bangalore in roughly 4.5 to 5.5 hours, providing seamless same-day delivery with real-time GPS tracking.</p>
        </div>

        <div class="dvg-faq-item">
            <h3>Can you handle industrial machinery and factory transport in the Harihar industrial belt?</h3>
            <p>Yes, our commercial logistics team manages machine tools, textile looms, agro-processing equipment, and spare parts across the Harihar-Davanagere twin industrial corridor with hydraulic flatbed trucks and cranes.</p>
        </div>

        <div class="dvg-faq-item">
            <h3>Is full transit insurance included for moves originating in Davanagere?</h3>
            <p>Yes, we provide 100% comprehensive all-risk transit insurance policies with explicit itemized declarations, backed by our central customer operations in Ranchi.</p>
        </div>

        <div class="dvg-faq-item">
            <h3>How are antique wooden furniture and home electronics protected?</h3>
            <p>We utilize 4-tier packaging comprising soft foam padding, high-density bubble wrap, sturdy 5-ply corrugated cardboard sheets, and stretch film, with custom crating for TVs, mirrors, and glass cabinets.</p>
        </div>
    </section>

    <!-- Section 7: Connected Karnataka Hubs & Localities Cluster Module -->
    <section class="dvg-section">
        <h2 class="dvg-section-heading">Explore Connected Moving Hubs Across Karnataka</h2>
        <p class="dvg-intro-p">Shree Ashirwad Packers and Movers maintains an extensive logistics network linking Davanagere with key regional authority centers across Karnataka:</p>

        <div class="dvg-cluster-grid">
            <div class="dvg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hubli">Hubli-Dharwad Hub</a>
            </div>
            <div class="dvg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bangalore">Bangalore Central Hub</a>
            </div>
            <div class="dvg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-belgaum">Belgaum Foundry Hub</a>
            </div>
            <div class="dvg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gulbarga">Gulbarga Cement Hub</a>
            </div>
            <div class="dvg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-mysore">Mysore Heritage Hub</a>
            </div>
            <div class="dvg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-mangalore">Mangalore Port Hub</a>
            </div>
            <div class="dvg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-vidyanagar-hubli">Vidyanagar Hubli</a>
            </div>
            <div class="dvg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gokul-road-hubli">Gokul Road Hubli</a>
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
