<?php
/**
 * Page: Packers and Movers in Kadri Mangalore
 * File: pages/packers-and-movers-in-kadri-mangalore.php
 * URL Slug: packers-and-movers-in-kadri-mangalore
 * Status: Published
 */

if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__));
}
require_once ROOT_PATH . '/includes/config.php';

// Define page-level metadata
$page_title = "Packers and Movers in Kadri Mangalore | Safe Shifting Services";
$page_description = "Reliable packers and movers in Kadri Mangalore. Professional household shifting, temple artifact packing, luxury apartment moving & vehicle transport in Mallikatte & Kadri Hills.";
$canonical_url = SITE_BASE_URL . "/packers-and-movers-in-kadri-mangalore";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="keywords" content="packers and movers in kadri mangalore, packers and movers kadri mangalore, household shifting kadri mangalore, movers and packers kadri mangalore, packers and movers mallikatte mangalore, packers and movers kadri hills">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Kadri Mangalore",
        "image": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+919334404050",
        "priceRange": "₹3,400 - ₹52,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Kadri Temple Road, Near Kadri Park",
            "addressLocality": "Mangalore",
            "addressRegion": "Karnataka",
            "postalCode": "575002",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 12.8845,
            "longitude": 74.8582
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
            "reviewCount": "224"
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
                "name": "Mangalore",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-mangalore"
            },
            {
                "@type": "ListItem",
                "position": 4,
                "name": "Kadri Mangalore",
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
        "serviceType": "Luxury Household Shifting and Heritage Furniture Relocation",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "AdministrativeArea",
            "name": "Kadri Mangalore, Karnataka"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Kadri Relocation Services Catalog",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Apartment & Villa Shifting Kadri"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Temple Idols & Heritage Artifacts Packing"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Doctor Clinic & Commercial Shifting Mallikatte"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Car & Two-Wheeler Courier Kadri"
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
                "name": "What are the shifting rates in Kadri Mangalore?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting in Kadri starts at ₹3,400 to ₹6,200 for 1 BHK, ₹6,500 to ₹12,000 for 2 BHK, and ₹10,000 to ₹18,500 for 3 BHK residences. Rates include moisture-proof packing materials, certified loading crews, covered truck transit, and room placement."
                }
            },
            {
                "@type": "Question",
                "name": "How do you protect sacred brass lamps, puja mandirs, and temple stone idols in Kadri?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Kadri is steeped in sacred heritage around Kadri Manjunatha Temple. We treat sacred artifacts with utmost reverence, wrapping them in sanitized white paper, multiple bubble layers, thermocol padding, and custom wooden crates."
                }
            },
            {
                "@type": "Question",
                "name": "How do you navigate narrow residential avenues and steep slopes in Kadri Hills?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Kadri Hills features winding elevations and tree-shaded residential roads. We deploy compact 14ft and 17ft covered vehicles equipped with power steering and hydraulic ramps to maneuver effortlessly without street obstruction."
                }
            },
            {
                "@type": "Question",
                "name": "Can you safely relocate heavy antique rosewood and teak furniture?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our certified carpenters dismantle four-poster cots, carved sideboards, and glass cabinets, wrapping each component in heavy bubble wrap and corrugated padding before precision reassembly at your destination."
                }
            },
            {
                "@type": "Question",
                "name": "Is transit insurance provided for intercity relocations from Kadri?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we issue 100% all-risk transit insurance policies with explicit itemized declarations, coordinated through our central customer operations in Ranchi."
                }
            },
            {
                "@type": "Question",
                "name": "How quickly can you arrange household shifting from Kadri to Bangalore?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Via the NH 75 Shiradi Ghat corridor, our container trucks provide safe, reliable transit to Bangalore in roughly 9 to 11 hours with real-time GPS tracking updates."
                }
            }
        ]
    }
    </script>

    <style>
        .kdm-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.65;
        }
        .kdm-header {
            background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%);
            color: #ffffff;
            padding: 45px 25px;
            border-radius: 12px;
            margin-bottom: 30px;
            text-align: center;
        }
        .kdm-header h1 {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.25;
            color: #ffffff;
        }
        .kdm-header p {
            font-size: 1.1rem;
            max-width: 900px;
            margin: 0 auto 20px;
            color: #e2e8f0;
        }
        .kdm-btn-wrap {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .kdm-btn-primary {
            background: #ea580c;
            color: #ffffff;
            padding: 12px 26px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 700;
            display: inline-block;
            transition: background 0.2s ease;
        }
        .kdm-btn-primary:hover {
            background: #c2410c;
        }
        .kdm-btn-secondary {
            background: #ffffff;
            color: #1e3a8a;
            padding: 12px 26px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 700;
            display: inline-block;
            transition: background 0.2s ease;
        }
        .kdm-btn-secondary:hover {
            background: #f1f5f9;
        }
        .kdm-section {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 32px 28px;
            margin-bottom: 30px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .kdm-section-heading {
            font-size: 1.75rem;
            color: #1e3a8a;
            margin-bottom: 16px;
            font-weight: 700;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
        }
        .kdm-subheading {
            font-size: 1.3rem;
            color: #0f172a;
            margin-top: 24px;
            margin-bottom: 12px;
            font-weight: 600;
        }
        .kdm-intro-p {
            font-size: 1.05rem;
            color: #334155;
            margin-bottom: 18px;
        }
        .kdm-highlight-box {
            background: #f8fafc;
            border-left: 4px solid #ea580c;
            padding: 20px 22px;
            border-radius: 0 8px 8px 0;
            margin: 24px 0;
        }
        .kdm-highlight-box h3 {
            font-size: 1.15rem;
            color: #1e3a8a;
            margin-top: 0;
            margin-bottom: 10px;
        }
        .kdm-highlight-box ul {
            margin: 0;
            padding-left: 20px;
        }
        .kdm-highlight-box li {
            margin-bottom: 8px;
            color: #334155;
        }
        .kdm-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 24px 0;
        }
        .kdm-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 20px 18px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .kdm-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 15px -3px rgba(0, 0, 0, 0.08);
        }
        .kdm-card h3 {
            font-size: 1.15rem;
            color: #1e3a8a;
            margin-top: 0;
            margin-bottom: 10px;
        }
        .kdm-card p {
            font-size: 0.95rem;
            color: #475569;
            margin: 0;
            line-height: 1.55;
        }
        .kdm-table {
            width: 100%;
            border-collapse: collapse;
            margin: 24px 0;
            background: #ffffff;
        }
        .kdm-table th {
            background: #1e3a8a;
            color: #ffffff;
            text-align: left;
            padding: 12px 14px;
            font-size: 0.95rem;
        }
        .kdm-table td {
            padding: 12px 14px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 0.92rem;
            color: #334155;
        }
        .kdm-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .kdm-image-container {
            max-width: 580px;
            margin: 28px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            text-align: center;
        }
        .kdm-image-container img {
            width: 100%;
            height: auto;
            display: block;
        }
        .kdm-image-caption {
            background: #f1f5f9;
            color: #475569;
            font-size: 0.88rem;
            padding: 8px 12px;
            margin: 0;
            text-align: center;
            border-top: 1px solid #e2e8f0;
        }
        .kdm-step-list {
            margin: 24px 0;
        }
        .kdm-step-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 18px 16px;
        }
        .kdm-step-num {
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
        .kdm-step-content h3 {
            margin: 0 0 6px;
            font-size: 1.15rem;
            color: #1e3a8a;
        }
        .kdm-step-content p {
            margin: 0;
            font-size: 0.95rem;
            color: #475569;
        }
        .kdm-faq-item {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 18px 20px;
            margin-bottom: 14px;
        }
        .kdm-faq-item h3 {
            font-size: 1.15rem;
            color: #1e3a8a;
            margin-bottom: 8px;
            font-weight: 600;
        }
        .kdm-faq-item p {
            font-size: 0.96rem;
            color: #475569;
            margin: 0;
            line-height: 1.6;
        }
        .kdm-cluster-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin-top: 25px;
        }
        .kdm-cluster-card {
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            padding: 14px 10px;
            border-radius: 6px;
            text-align: center;
            transition: all 0.2s ease;
        }
        .kdm-cluster-card:hover {
            border-color: #ea580c;
            background: #fff;
            transform: translateY(-2px);
        }
        .kdm-cluster-card a {
            text-decoration: none;
            color: #1e3a8a;
            font-weight: 600;
            font-size: 0.92rem;
            display: block;
        }
        .kdm-cluster-card a:hover {
            color: #ea580c;
        }
        @media (max-width: 768px) {
            .kdm-header {
                padding: 30px 15px;
            }
            .kdm-header h1 {
                font-size: 1.8rem;
            }
            .kdm-section {
                padding: 22px 16px;
            }
            .kdm-section-heading {
                font-size: 1.45rem;
            }
            .kdm-grid-3, .kdm-cluster-grid {
                grid-template-columns: 1fr;
            }
            .kdm-table th, .kdm-table td {
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

<div class="kdm-wrap">

    <!-- Hero Header -->
    <header class="kdm-header">
        <h1>Packers and Movers in Kadri Mangalore</h1>
        <p>Premium residential shifting, heritage furniture crating, luxury apartment relocation, and sacred artifact moving across Kadri, Mallikatte, Kadri Hills, Shivabagh, and Balmatta.</p>
        <div class="kdm-btn-wrap">
            <a href="tel:+919334404050" class="kdm-btn-primary">Call +91 93344 04050</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="kdm-btn-secondary">Check Tariff Rates</a>
        </div>
    </header>

    <!-- Section 1: Locality Overview & Heritage Hill Enclave -->
    <section class="kdm-section">
        <h2 class="kdm-section-heading">Expert Shifting Services in Kadri Mangalore</h2>
        <p class="kdm-intro-p">Revered as Mangalore's most prestigious, culturally distinguished, and scenic residential hill enclave, Kadri represents the epitome of refined coastal living.</p>

        <p>Centered around the historic 10th-century Kadri Manjunatha Temple, this picturesque neighborhood features tree-lined avenues, rolling elevated topography, and tranquil botanical surroundings near Kadri Park. Connected seamlessly to <strong>Mallikatte, Kadri Hills, Shivabagh, Balmatta, and Nanthoor Junction</strong>, Kadri is home to eminent doctors, banking executives, senior judicial officers, and prominent business lineages residing in sprawling ancestral bungalows and modern luxury high-rise towers.</p>

        <h3 class="kdm-subheading">Elevated Topography & Heritage Residence Logistics</h3>
        <p>Kadri's undulating landscape presents unique logistical nuances, featuring steep private driveways, winding hill lanes, and lush overhead tropical tree canopies. Standard bulk transport trucks often face severe maneuvering constraints or risk scraping tree limbs in residential lanes. Shree Ashirwad Packers and Movers deploys custom low-profile 14ft and 17ft covered container vehicles engineered for agile hillside navigation.</p>

        <p>Whether you are shifting into a high-rise luxury penthouse overlooking the Arabian Sea or transferring precious heirloom antiques from a multi-generational estate in Mallikatte, our trained moving crews deliver meticulous white-glove packing, heavy lifting assistance, and silent, respectful loading that preserves neighborhood tranquility.</p>

        <div class="kdm-highlight-box">
            <h3>Specialized Moving Strengths in Kadri Mangalore</h3>
            <ul>
                <li><strong>Hillside & Penthouse Specialists:</strong> Agile medium container vans and hydraulic furniture lifts for hillside villas and high-rise penthouses.</li>
                <li><strong>Temple Artifact & Antique Preservation:</strong> Reverent packaging with clean white paper, dense bubble cushion, and custom timber crating for brass idols and rosewood heirlooms.</li>
                <li><strong>Coastal Weatherproof Standards:</strong> Multi-layer moisture shields and silica gel pouches protecting electronics and fabrics against coastal humidity.</li>
                <li><strong>Direct Port & Regional Hub Integration:</strong> Supported by parent <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-mangalore">Packers and Movers in Mangalore</a> and central headquarters in <a href="<?php echo SITE_BASE_URL; ?>/">Ranchi</a>.</li>
            </ul>
        </div>

        <div class="kdm-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Household packing in Kadri Mangalore" title="Household relocation in Kadri Mangalore">
            <p class="kdm-image-caption">Comprehensive household packing and organized labeling for residential homes in Kadri Mangalore.</p>
        </div>
    </section>

    <!-- Section 2: Comprehensive Shifting Solutions -->
    <section class="kdm-section">
        <h2 class="kdm-section-heading">Full-Spectrum Relocation Services Across Kadri</h2>
        <p class="kdm-intro-p">From high-end gated apartment communities near Kadri Hills to sprawling family estates in Mallikatte, our relocation packages are engineered for absolute safety.</p>

        <div class="kdm-grid-3">
            <div class="kdm-card">
                <h3>Residential Villa Shifting</h3>
                <p>Complete room-wise packing, specialized furniture dismantling, covered transit, and room placement for 1, 2, 3, and 4 BHK residences across Kadri.</p>
            </div>
            <div class="kdm-card">
                <h3>Temple Artifacts & Fine Art Crating</h3>
                <p>Custom wooden crating, bubble wrapping, and velvet cushioning for delicate temple lamps, brass murtis, Tanjore paintings, and antique clocks.</p>
            </div>
            <div class="kdm-card">
                <h3>Doctor Clinics & Corporate Offices</h3>
                <p>Weekend corporate moves for medical clinics, diagnostic suites, bank branches, and professional consultancies around Mallikatte and Balmatta.</p>
            </div>
        </div>

        <h3 class="kdm-subheading">Teakwood Carpentry Dismantling & Master Furniture Assembly</h3>
        <p>Residences in Kadri feature treasured collections of traditional Dakshina Kannada teakwood and rosewood furnishings, including four-poster cots, carved display cupboards, and ornate wooden swings (oonjal). Our licensed in-house carpenters expertly dismantle these intricate pieces, carefully padding every panel in high-density bubble wrap and corrugated edge protectors. All screws, brackets, and dowels are bagged into numbered hardware kits for swift reassembly at your new destination.</p>

        <p>Delicate household electronics—including curved smart televisions, double-door frost-free refrigerators, and front-load washing machines—are secured with internal drum locks, quilted moving blankets, and heavy-gauge shrink wrap. This ensures complete immunity against shock, road bumps, and moisture during transit across Mangalore or long-distance highways.</p>

        <h3 class="kdm-subheading">Fragile Crockery, Glassware & Sacred Mandir Care</h3>
        <p>Kitchenware, porcelain dinner sets, bone china, and crystal glassware receive our signature 4-tier packaging: each item is wrapped in bubble film, nestled into heavy 5-ply cartons, and separated by corrugated partitions to prevent transit friction. Family puja mandirs, brass deepams, and sacred stone sculptures are cleaned, wrapped in virgin white paper, cushioned with thermocol, and treated with supreme reverence throughout the journey.</p>

        <h3 class="kdm-subheading">Sandalwood Carvings, Antique Oonjals & Heritage Artworks</h3>
        <p>Many generational families in Kadri possess rare sandalwood elephant carvings, hand-carved mahogany sideboards, and heavy brass hanging chains used for ancestral courtyard swings (oonjal). Our specialized packing craftsmen wrap each timber carving in acid-free glassine paper before adding micro-cellular foam cushions and shock-resistant corrugated casing.</p>

        <p>Ceiling-suspended swing planks and ornate brass chains are carefully dismantled using specialized mechanical tools, wrapped in protective velvet blankets, and stored in padded crates. Upon arrival at your new residence, our senior carpenters assist with ceiling beam load verification and precision re-installation to ensure absolute family safety and historic preservation.</p>

        <div class="kdm-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg" alt="Protective wooden furniture wrapping in Kadri Mangalore" title="Furniture packing in Kadri Mangalore">
            <p class="kdm-image-caption">Multi-tier bubble wrapping and edge guards applied to premium furniture in Kadri Mangalore.</p>
        </div>
    </section>

    <!-- Section 3: Sub-Localities & Neighborhood Micro-Hubs -->
    <section class="kdm-section">
        <h2 class="kdm-section-heading">Localities and Enclaves We Serve Near Kadri</h2>
        <p class="kdm-intro-p">Our local moving vans and field teams provide complete operational coverage across all micro-localities surrounding Kadri:</p>

        <div class="kdm-grid-3">
            <div class="kdm-card">
                <h3>Mallikatte</h3>
                <p>Serving prime residential streets, healthcare clinics, upscale bakeries, and modern multi-story gated apartment complexes.</p>
            </div>
            <div class="kdm-card">
                <h3>Kadri Hills & Circuit House</h3>
                <p>Covering panoramic hill estates, high-ranking government quarters, luxury penthouses, and peaceful landscaped green avenues.</p>
            </div>
            <div class="kdm-card">
                <h3>Shivabagh & Balmatta</h3>
                <p>Established elite neighborhoods housing doctors, businessmen, and corporate executives with historic bungalows and luxury apartments.</p>
            </div>
            <div class="kdm-card">
                <h3>Kadri Temple Vicinity</h3>
                <p>Traditional heritage family homes, spiritual retreats, cultural institutions, and residential layouts near the historic temple tank.</p>
            </div>
            <div class="kdm-card">
                <h3>Nanthoor Junction & Bikkarnakatte</h3>
                <p>Crucial arterial highway intersections connecting Kadri seamlessly with National Highway 66 and National Highway 75.</p>
            </div>
            <div class="kdm-card">
                <h3>Bejai & Kuntikan Border</h3>
                <p>Commercial shopping zones, modern high-rise residential towers, and corporate office parks bordering northern Kadri.</p>
            </div>
        </div>

        <h3 class="kdm-subheading">Two-Wheeler Parcel & Vehicle Transportation</h3>
        <p>Kadri residents relocating to Bangalore, Mumbai, Pune, or other interstate destinations rely on our dedicated vehicle transit solutions. We pack motorcycles, Royal Enfield bikes, and scooters using dense foam padding on tanks, side mirrors, and exhausts. Vehicles are secured with wheel chocks and heavy-duty ratchet straps inside covered carriers, ensuring scratch-free delivery with full transit insurance coverage.</p>

        <div class="kdm-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/fragile-glassware-box-packing-ranchi.jpg" alt="Fragile packing services in Kadri Mangalore" title="Delicate packing in Kadri Mangalore">
            <p class="kdm-image-caption">Individual bubble wrapping and shock-absorbent cell partitioning for glassware and crockery in Kadri.</p>
        </div>
    </section>

    <!-- Section 4: Tariff Estimates & Transparent Pricing -->
    <section class="kdm-section">
        <h2 class="kdm-section-heading">Packers and Movers Charges in Kadri Mangalore</h2>
        <p class="kdm-intro-p">We maintain 100% transparent pricing with clear itemized quotes. No hidden vehicle fees, no last-minute surcharge additions, and zero surprise costs on moving day.</p>

        <table class="kdm-table">
            <thead>
                <tr>
                    <th>Home Configuration</th>
                    <th>Packing Material & Labor</th>
                    <th>Local Shifting (Kadri/Mangalore)</th>
                    <th>Highway Shifting (Mangalore to Bangalore)</th>
                    <th>Interstate Shifting (To Eastern/Northern Hubs)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>1 BHK Apartment</strong></td>
                    <td>₹1,500 - ₹2,800</td>
                    <td>₹3,400 - ₹6,200</td>
                    <td>₹8,200 - ₹14,200</td>
                    <td>₹14,200 - ₹24,500</td>
                </tr>
                <tr>
                    <td><strong>2 BHK Apartment / House</strong></td>
                    <td>₹2,900 - ₹5,000</td>
                    <td>₹6,500 - ₹12,000</td>
                    <td>₹13,200 - ₹22,000</td>
                    <td>₹20,500 - ₹35,500</td>
                </tr>
                <tr>
                    <td><strong>3 BHK Apartment / Villa</strong></td>
                    <td>₹4,200 - ₹7,600</td>
                    <td>₹10,000 - ₹18,500</td>
                    <td>₹18,000 - ₹30,500</td>
                    <td>₹28,500 - ₹48,000</td>
                </tr>
                <tr>
                    <td><strong>4 BHK / Luxury Hillside Bungalow</strong></td>
                    <td>₹6,000 - ₹11,200</td>
                    <td>₹15,000 - ₹27,500</td>
                    <td>₹24,500 - ₹40,500</td>
                    <td>₹36,500 - ₹63,000</td>
                </tr>
                <tr>
                    <td><strong>Two Wheeler Parcel (Bike / Scooter)</strong></td>
                    <td>₹800 - ₹1,450</td>
                    <td>₹1,250 - ₹2,400</td>
                    <td>₹2,800 - ₹4,800</td>
                    <td>₹5,000 - ₹9,000</td>
                </tr>
            </tbody>
        </table>

        <p>Planning an intercity or interstate move from Kadri Mangalore? Check our interactive <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">Live Tariff Rates Calculator</a> for instant customized cost estimates based on cargo volume and travel distance.</p>

        <h3 class="kdm-subheading">National Highway Transit via Nanthoor Junction</h3>
        <p>Kadri connects immediately to Nanthoor Junction, providing direct access to National Highway 75 (connecting eastward across the Western Ghats to Bangalore) and National Highway 66 (running along the scenic Arabian coastline toward Goa, Mumbai, and Kerala). Our container fleet provides guaranteed transit schedules with round-the-clock GPS tracking.</p>

        <p>Every long-distance move includes comprehensive all-risk transit insurance, regular GPS tracking updates via WhatsApp, and dedicated customer support managed through our central coordination team.</p>
    </section>

    <!-- Section 5: Systematic 5-Step Relocation Process -->
    <section class="kdm-section">
        <h2 class="kdm-section-heading">Our Proven 5-Step Relocation Workflow in Kadri</h2>
        <p class="kdm-intro-p">Every move follows a rigorous operational protocol tested over thousands of successful relocations to guarantee zero damage and complete customer peace of mind.</p>

        <div class="kdm-step-list">
            <div class="kdm-step-item">
                <div class="kdm-step-num">1</div>
                <div class="kdm-step-content">
                    <h3>Pre-Move Survey & Written Quote</h3>
                    <p>Our relocation surveyor conducts an on-site visit to your Kadri home (or offers an instant video survey) to evaluate item volumes, elevator access, and truck approach paths before providing a transparent written quotation.</p>
                </div>
            </div>

            <div class="kdm-step-item">
                <div class="kdm-step-num">2</div>
                <div class="kdm-step-content">
                    <h3>Multi-Layer Professional Packing</h3>
                    <p>On scheduled moving day, our uniformed team arrives with virgin 5-ply cartons, bubble wrap, edge guards, and color-coded labels, packing and categorizing items room by room.</p>
                </div>
            </div>

            <div class="kdm-step-item">
                <div class="kdm-step-num">3</div>
                <div class="kdm-step-content">
                    <h3>Ergonomic Loading & Ratchet Securing</h3>
                    <p>Heavy furniture and electronic appliances are moved using hydraulic lifters, dollies, and safety belts, then strapped securely inside our closed container truck to prevent transit movement.</p>
                </div>
            </div>

            <div class="kdm-step-item">
                <div class="kdm-step-num">4</div>
                <div class="kdm-step-content">
                    <h3>GPS-Monitored Highway Transit</h3>
                    <p>Your goods travel in weatherproof, sealed container vehicles monitored via continuous GPS tracking, ensuring total protection from dust, rain, and highway vibrations.</p>
                </div>
            </div>

            <div class="kdm-step-item">
                <div class="kdm-step-num">5</div>
                <div class="kdm-step-content">
                    <h3>Doorstep Delivery, Reassembly & Debris Cleanup</h3>
                    <p>At your new destination, our crew unloads every box into its designated room, reassembles beds and modular furniture, assists with appliance placement, and removes all discarded packing waste.</p>
                </div>
            </div>
        </div>

        <div class="kdm-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Weatherproof container truck in Kadri Mangalore" title="Safe transit truck in Kadri Mangalore">
            <p class="kdm-image-caption">Weatherproof sealed container vehicles ensuring safe, dust-free, and rain-protected transit across Karnataka.</p>
        </div>
    </section>

    <!-- Section 6: Frequently Asked Questions -->
    <section class="kdm-section">
        <h2 class="kdm-section-heading">Frequently Asked Questions — Kadri Relocation</h2>
        <p class="kdm-intro-p">Find clear, transparent answers to commonly asked questions about moving home, luxury shifting, and vehicle transport in Kadri Mangalore.</p>

        <div class="kdm-faq-item">
            <h3>What are the shifting rates in Kadri Mangalore?</h3>
            <p>Local shifting in Kadri starts at ₹3,400 to ₹6,200 for 1 BHK, ₹6,500 to ₹12,000 for 2 BHK, and ₹10,000 to ₹18,500 for 3 BHK residences. Rates include moisture-proof packing materials, certified loading crews, covered truck transit, and room placement.</p>
        </div>

        <div class="kdm-faq-item">
            <h3>How do you protect sacred brass lamps, puja mandirs, and temple stone idols in Kadri?</h3>
            <p>Kadri is steeped in sacred heritage around Kadri Manjunatha Temple. We treat sacred artifacts with utmost reverence, wrapping them in sanitized white paper, multiple bubble layers, thermocol padding, and custom wooden crates.</p>
        </div>

        <div class="kdm-faq-item">
            <h3>How do you navigate narrow residential avenues and steep slopes in Kadri Hills?</h3>
            <p>Kadri Hills features winding elevations and tree-shaded residential roads. We deploy compact 14ft and 17ft covered vehicles equipped with power steering and hydraulic ramps to maneuver effortlessly without street obstruction.</p>
        </div>

        <div class="kdm-faq-item">
            <h3>Can you safely relocate heavy antique rosewood and teak furniture?</h3>
            <p>Yes, our certified carpenters dismantle four-poster cots, carved sideboards, and glass cabinets, wrapping each component in heavy bubble wrap and corrugated padding before precision reassembly at your destination.</p>
        </div>

        <div class="kdm-faq-item">
            <h3>Is transit insurance provided for intercity relocations from Kadri?</h3>
            <p>Yes, we issue 100% all-risk transit insurance policies with explicit itemized declarations, coordinated through our central customer operations in Ranchi.</p>
        </div>

        <div class="kdm-faq-item">
            <h3>How quickly can you arrange household shifting from Kadri to Bangalore?</h3>
            <p>Via the NH 75 Shiradi Ghat corridor, our container trucks provide safe, reliable transit to Bangalore in roughly 9 to 11 hours with real-time GPS tracking updates.</p>
        </div>
    </section>

    <!-- Section 7: Connected Karnataka Hubs & Localities Cluster Module -->
    <section class="kdm-section">
        <h2 class="kdm-section-heading">Explore Connected Moving Hubs Across Karnataka</h2>
        <p class="kdm-intro-p">Shree Ashirwad Packers and Movers maintains an extensive logistics network linking Kadri Mangalore with key regional authority centers across Karnataka:</p>

        <div class="kdm-cluster-grid">
            <div class="kdm-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-mangalore">Mangalore Port Hub</a>
            </div>
            <div class="kdm-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-surathkal-mangalore">Surathkal Mangalore</a>
            </div>
            <div class="kdm-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bangalore">Bangalore Central Hub</a>
            </div>
            <div class="kdm-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-mysore">Mysore Heritage Hub</a>
            </div>
            <div class="kdm-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hubli">Hubli-Dharwad Hub</a>
            </div>
            <div class="kdm-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-vidyanagar-hubli">Vidyanagar Hubli</a>
            </div>
            <div class="kdm-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gokul-road-hubli">Gokul Road Hubli</a>
            </div>
            <div class="kdm-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-vijayanagar-mysore">Vijayanagar Mysore</a>
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
