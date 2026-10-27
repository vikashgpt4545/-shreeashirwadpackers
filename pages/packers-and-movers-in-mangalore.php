<?php
/**
 * Page: Packers and Movers in Mangalore (Karnataka Coastal Authority Hub)
 * File: pages/packers-and-movers-in-mangalore.php
 * URL Slug: packers-and-movers-in-mangalore
 * Status: Published
 */

if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__));
}
require_once ROOT_PATH . '/includes/config.php';

// Define page-level metadata
$page_title = "Packers and Movers in Mangalore | Safe Shifting Services";
$page_description = "Certified packers and movers in Mangalore. Professional household shifting, port logistics, corporate office relocation & vehicle transport in Kadri, Bejai & Surathkal.";
$canonical_url = SITE_BASE_URL . "/packers-and-movers-in-mangalore";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="keywords" content="packers and movers in mangalore, packers and movers mangalore, household shifting mangalore, movers and packers mangalore, packers and movers kadri mangalore, packers and movers surathkal, car transportation mangalore">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Mangalore",
        "image": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 9835565233",
        "priceRange": "₹3,500 - ₹55,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Kadri Temple Road, Hampankatta Extension",
            "addressLocality": "Mangalore",
            "addressRegion": "Karnataka",
            "postalCode": "575002",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 12.9141,
            "longitude": 74.8560
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
            "reviewCount": "294"
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
        "serviceType": "Relocation and Port City Logistics Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "City",
            "name": "Mangalore"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Mangalore Relocation Services Catalog",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Coastal Residential House Shifting Mangalore"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Corporate & Port Logistics Moving Mangalore"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Industrial & Petrochemical Equipment Transport"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Car & Motorcycle Transportation Mangalore"
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
                "name": "What are the packers and movers charges in Mangalore?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting in Mangalore starts from ₹3,500 to ₹6,500 for 1 BHK, ₹6,500 to ₹12,500 for 2 BHK, and ₹10,500 to ₹19,500 for 3 BHK homes. Rates include moisture-proof packaging, certified labor, enclosed truck transit, and room-wise unpacking."
                }
            },
            {
                "@type": "Question",
                "name": "How do you protect household goods against coastal humidity and heavy coastal rainfall in Mangalore?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We implement coastal-grade waterproofing: multi-layer shrink wrapping, water-resistant tarpaulins, silica gel moisture absorbers, and sealed container trucks that prevent any dampness, sea-breeze corrosion, or rain ingress."
                }
            },
            {
                "@type": "Question",
                "name": "How long does household transit take from Mangalore to Bangalore?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Via National Highway 75 crossing the Western Ghats (Shiradi Ghat corridor), our container vehicles safely reach Bangalore in roughly 9 to 11 hours with real-time GPS tracking."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide moving services for industrial units in Baikampady and Surathkal?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our commercial logistics squad manages factory machinery, petrochemical supplies, raw materials, and corporate inventory across Baikampady KIADB and Surathkal industrial belts with heavy flatbeds and cranes."
                }
            },
            {
                "@type": "Question",
                "name": "Is transit insurance provided for relocations originating in Mangalore?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we issue 100% all-risk transit insurance policies with explicit itemized declarations, backed by our central customer operations in Ranchi."
                }
            },
            {
                "@type": "Question",
                "name": "Can you safely dismantle and reassemble heavy wooden and modular furniture in Mangalore?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our expert carpenters dismantle teakwood cots, wardrobes, and modular cabinets, wrapping each component in heavy bubble wrap and corrugated padding before precision reassembly at your destination."
                }
            }
        ]
    }
    </script>

    <style>
        .mng-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.65;
        }
        .mng-header {
            background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%);
            color: #ffffff;
            padding: 45px 25px;
            border-radius: 12px;
            margin-bottom: 30px;
            text-align: center;
        }
        .mng-header h1 {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.25;
            color: #ffffff;
        }
        .mng-header p {
            font-size: 1.1rem;
            max-width: 900px;
            margin: 0 auto 20px;
            color: #e2e8f0;
        }
        .mng-btn-wrap {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .mng-btn-primary {
            background: #ea580c;
            color: #ffffff;
            padding: 12px 26px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 700;
            display: inline-block;
            transition: background 0.2s ease;
        }
        .mng-btn-primary:hover {
            background: #c2410c;
        }
        .mng-btn-secondary {
            background: #ffffff;
            color: #1e3a8a;
            padding: 12px 26px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 700;
            display: inline-block;
            transition: background 0.2s ease;
        }
        .mng-btn-secondary:hover {
            background: #f1f5f9;
        }
        .mng-section {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 32px 28px;
            margin-bottom: 30px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .mng-section-heading {
            font-size: 1.75rem;
            color: #1e3a8a;
            margin-bottom: 16px;
            font-weight: 700;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
        }
        .mng-subheading {
            font-size: 1.3rem;
            color: #0f172a;
            margin-top: 24px;
            margin-bottom: 12px;
            font-weight: 600;
        }
        .mng-intro-p {
            font-size: 1.05rem;
            color: #334155;
            margin-bottom: 18px;
        }
        .mng-highlight-box {
            background: #f8fafc;
            border-left: 4px solid #ea580c;
            padding: 20px 22px;
            border-radius: 0 8px 8px 0;
            margin: 24px 0;
        }
        .mng-highlight-box h3 {
            font-size: 1.15rem;
            color: #1e3a8a;
            margin-top: 0;
            margin-bottom: 10px;
        }
        .mng-highlight-box ul {
            margin: 0;
            padding-left: 20px;
        }
        .mng-highlight-box li {
            margin-bottom: 8px;
            color: #334155;
        }
        .mng-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 24px 0;
        }
        .mng-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 20px 18px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .mng-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 15px -3px rgba(0, 0, 0, 0.08);
        }
        .mng-card h3 {
            font-size: 1.15rem;
            color: #1e3a8a;
            margin-top: 0;
            margin-bottom: 10px;
        }
        .mng-card p {
            font-size: 0.95rem;
            color: #475569;
            margin: 0;
            line-height: 1.55;
        }
        .mng-table {
            width: 100%;
            border-collapse: collapse;
            margin: 24px 0;
            background: #ffffff;
        }
        .mng-table th {
            background: #1e3a8a;
            color: #ffffff;
            text-align: left;
            padding: 12px 14px;
            font-size: 0.95rem;
        }
        .mng-table td {
            padding: 12px 14px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 0.92rem;
            color: #334155;
        }
        .mng-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .mng-image-container {
            max-width: 580px;
            margin: 28px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            text-align: center;
        }
        .mng-image-container img {
            width: 100%;
            height: auto;
            display: block;
        }
        .mng-image-caption {
            background: #f1f5f9;
            color: #475569;
            font-size: 0.88rem;
            padding: 8px 12px;
            margin: 0;
            text-align: center;
            border-top: 1px solid #e2e8f0;
        }
        .mng-step-list {
            margin: 24px 0;
        }
        .mng-step-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 18px 16px;
        }
        .mng-step-num {
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
        .mng-step-content h3 {
            margin: 0 0 6px;
            font-size: 1.15rem;
            color: #1e3a8a;
        }
        .mng-step-content p {
            margin: 0;
            font-size: 0.95rem;
            color: #475569;
        }
        .mng-faq-item {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 18px 20px;
            margin-bottom: 14px;
        }
        .mng-faq-item h3 {
            font-size: 1.15rem;
            color: #1e3a8a;
            margin-bottom: 8px;
            font-weight: 600;
        }
        .mng-faq-item p {
            font-size: 0.96rem;
            color: #475569;
            margin: 0;
            line-height: 1.6;
        }
        .mng-cluster-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin-top: 25px;
        }
        .mng-cluster-card {
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            padding: 14px 10px;
            border-radius: 6px;
            text-align: center;
            transition: all 0.2s ease;
        }
        .mng-cluster-card:hover {
            border-color: #ea580c;
            background: #fff;
            transform: translateY(-2px);
        }
        .mng-cluster-card a {
            text-decoration: none;
            color: #1e3a8a;
            font-weight: 600;
            font-size: 0.92rem;
            display: block;
        }
        .mng-cluster-card a:hover {
            color: #ea580c;
        }
        @media (max-width: 768px) {
            .mng-header {
                padding: 30px 15px;
            }
            .mng-header h1 {
                font-size: 1.8rem;
            }
            .mng-section {
                padding: 22px 16px;
            }
            .mng-section-heading {
                font-size: 1.45rem;
            }
            .mng-grid-3, .mng-cluster-grid {
                grid-template-columns: 1fr;
            }
            .mng-table th, .mng-table td {
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

<div class="mng-wrap">

    <!-- Hero Header -->
    <header class="mng-header">
        <h1>Packers and Movers in Mangalore</h1>
        <p>Premium household shifting, port cargo logistics, corporate office relocation, and automobile transport across Kadri, Bejai, Surathkal, Hampankatta, and Baikampady.</p>
        <div class="mng-btn-wrap">
            <a href="tel:+919835565233" class="mng-btn-primary">Call +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="mng-btn-secondary">Check Tariff Rates</a>
        </div>
    </header>

    <!-- Section 1: Locality Overview & Coastal Port Hub -->
    <section class="mng-section">
        <h2 class="mng-section-heading">Professional Relocation Services in Mangalore (Mangaluru)</h2>
        <p class="mng-intro-p">Nestled picturesquely between the rolling peaks of the Western Ghats and the Arabian Sea, Mangalore is Karnataka's premier port city, financial hub, and industrial gateway.</p>

        <p>As the headquarters of Dakshina Kannada district, Mangalore boasts a dynamic multifaceted economy driven by the New Mangalore Port (NMPT), petroleum refineries such as MRPL, chemical and fertilizer conglomerates in Baikampady, world-class medical universities, and prestigious engineering institutes like NITK Surathkal. Renowned for its cosmopolitan culture, lush coastal scenery, and thriving banking sector, Mangalore hosts an affluent, mobile population that expects world-class relocation standards.</p>

        <h3 class="mng-subheading">Coastal Weather Resistance & Western Ghats Transit Mastery</h3>
        <p>Mangalore experiences high coastal humidity, salty maritime breezes, and intense monsoon rainfall. Traditional packing materials often fail in this coastal atmosphere, leading to moisture seepage, mildew, or rust on sensitive electrical circuits and metallic furniture. Shree Ashirwad Packers and Movers implements custom coastal-grade packaging protocols featuring multi-layer moisture barriers, virgin bubble films, desiccant silica gel packets, and waterproof stretch wraps.</p>

        <p>Furthermore, moving cargo between Mangalore and inland Karnataka requires traversing the challenging Western Ghats passes along National Highway 75 (Shiradi Ghat) and National Highway 73 (Charmadi Ghat). Our fleet consists of heavy-duty, closed-body container trucks piloted by seasoned mountain highway drivers who ensure smooth, jostle-free transit through undulating terrain, whether moving to Bangalore, Mysore, or eastern destinations like Ranchi.</p>

        <div class="mng-highlight-box">
            <h3>Key Advantages of Shifting with Us in Mangalore</h3>
            <ul>
                <li><strong>Coastal-Grade Waterproofing:</strong> Heavy 4-layer shrink wrap, waterproof tarpaulins, and silica gel packs guarding against humidity and monsoon rain.</li>
                <li><strong>Western Ghats Route Expertise:</strong> Specially equipped air-suspension container trucks for safe crossing over Shiradi and Charmadi Ghat passes.</li>
                <li><strong>Industrial & Port Logistics:</strong> Hydraulic cranes and heavy-duty rigging for Baikampady KIADB, NMPT port cargo, and MRPL contractor moves.</li>
                <li><strong>Direct Pan-India Connectivity:</strong> Directly integrated with parent authority hubs in <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bangalore">Bangalore</a> and central headquarters in <a href="<?php echo SITE_BASE_URL; ?>/">Ranchi</a>.</li>
            </ul>
        </div>

        <div class="mng-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Household packing in Mangalore" title="Household relocation in Mangalore">
            <p class="mng-image-caption">Systematic room-by-room packing and moisture-proof wrapping for residential homes in Mangalore.</p>
        </div>
    </section>

    <!-- Section 2: Comprehensive Shifting Solutions -->
    <section class="mng-section">
        <h2 class="mng-section-heading">Comprehensive Shifting Solutions Across Mangalore</h2>
        <p class="mng-intro-p">We deliver tailored relocation services engineered to meet the unique challenges of coastal homes, educational institutes, and heavy marine industries.</p>

        <div class="mng-grid-3">
            <div class="mng-card">
                <h3>Residential House Shifting</h3>
                <p>Complete multi-layer packing, certified loading, containerized transit, and room-wise unpacking for 1, 2, 3, and 4 BHK homes in Kadri, Bejai, and Ullal.</p>
            </div>
            <div class="mng-card">
                <h3>Corporate & Bank Shifting</h3>
                <p>After-hours and weekend office relocation for bank headquarters, corporate branches, IT firms, and medical centers with zero downtime.</p>
            </div>
            <div class="mng-card">
                <h3>Industrial Machinery & Port Cargo</h3>
                <p>Heavy machinery handling, CNC apparatus crating, factory floor relocation, and marine hardware transport across Baikampady and NMPT.</p>
            </div>
        </div>

        <h3 class="mng-subheading">Teakwood Furniture Assembly & Fragile Inlay Art Preservation</h3>
        <p>Traditional Mangalorean heritage homes and modern coastal apartments showcase magnificent teak, rosewood, and jackfruit timber furnishings, along with delicate brass lamps, carved swings (Oonjal), and stained-glass partitions. Our certified carpenters handle the delicate dismantling of four-poster beds, heavy dining tables, and modular kitchen cabinets. Every bolt, screw, and bracket is secured in categorized hardware kits for precision reassembly at your destination.</p>

        <p>Kitchenware, porcelain chinaware, bone china, and coastal terracotta artifacts receive four layers of protective cushioning: individual bubble wrapping, 5-ply corrugated carton nesting, internal cell dividers, and thermocol cushioning, eliminating any risk of transit fractures or surface scuffing.</p>

        <h3 class="mng-subheading">Medical University, Faculty & Student Relocation Packages</h3>
        <p>Mangalore is internationally celebrated as a healthcare and medical education hub, home to institutions like KMC Mangalore, Father Muller, and NITK Surathkal. We provide specialized luggage courier services, academic library moving, and laboratory equipment crating for doctors, medical residents, professors, and engineering scholars transferring across Karnataka or pan-India universities.</p>

        <p>Sensitive electronic appliances—including smart televisions, double-door inverter refrigerators, and automatic washing machines—are secured with internal drum transit locks, thick quilted moving blankets, and heavy-gauge shrink wrap, ensuring 100% operational safety upon arrival.</p>

        <div class="mng-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg" alt="Protective wooden furniture wrapping in Mangalore" title="Furniture packing in Mangalore">
            <p class="mng-image-caption">High-density bubble wrap and corrugated edge buffers shielding valuable furniture in Mangalore.</p>
        </div>
    </section>

    <!-- Section 3: Sub-Localities & Neighborhood Micro-Hubs -->
    <section class="mng-section">
        <h2 class="mng-section-heading">Localities and Neighborhoods We Serve in Mangalore</h2>
        <p class="mng-intro-p">Our local moving vans and experienced crews provide comprehensive operational coverage across every prominent residential and industrial pocket of Mangalore:</p>

        <div class="mng-grid-3">
            <div class="mng-card">
                <h3>Kadri & Mallikatte</h3>
                <p>Serving prestigious residential addresses, temple hill enclaves, upscale apartments, and doctors' private residences along Kadri Main Road.</p>
            </div>
            <div class="mng-card">
                <h3>Bejai & Kadri Hills</h3>
                <p>Covering bustling commercial complexes, major shopping avenues, transit hubs, and modern multi-story high-rise apartment gated societies.</p>
            </div>
            <div class="mng-card">
                <h3>Surathkal & NITK Belt</h3>
                <p>Northern coastal educational hub housing faculty bungalows, student hostels, and residential layouts connecting toward Baikampady.</p>
            </div>
            <div class="mng-card">
                <h3>Hampankatta & Falnir</h3>
                <p>The historic financial and commercial heart of Mangalore, featuring legacy bank headquarters, commercial complexes, and apartments.</p>
            </div>
            <div class="mng-card">
                <h3>Kottara Chowki & Urwa</h3>
                <p>Fast-growing residential nodes connecting the city center with National Highway 66 and the coastal industrial corridors.</p>
            </div>
            <div class="mng-card">
                <h3>Ullal & Deralakatte</h3>
                <p>Southern educational and medical university belt housing university campuses, medical colleges, and expanding residential complexes.</p>
            </div>
        </div>

        <h3 class="mng-subheading">Automobile & Two-Wheeler Transportation Across Coastal Corridors</h3>
        <p>Mangalore's strategic location along National Highway 66 (connecting Mumbai, Goa, and Kerala) makes it an active hub for vehicle transit. We operate specialized covered car carrier trucks and enclosed bike parcel containers. Your car or motorcycle is inspected, safely tied down with wheel chocks and heavy-duty ratchet straps, and delivered scratch-free with full transit insurance protection.</p>

        <div class="mng-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/fragile-glassware-box-packing-ranchi.jpg" alt="Fragile packing services in Mangalore" title="Delicate packing in Mangalore">
            <p class="mng-image-caption">Individual bubble wrapping and shock-absorbent cell partitioning for glassware and crockery in Mangalore.</p>
        </div>
    </section>

    <!-- Section 4: Tariff Estimates & Transparent Pricing -->
    <section class="mng-section">
        <h2 class="mng-section-heading">Packers and Movers Charges in Mangalore</h2>
        <p class="mng-intro-p">We uphold 100% transparent pricing with clear itemized quotes. No hidden vehicle fees, no last-minute surcharge additions, and zero surprise costs on moving day.</p>

        <table class="mng-table">
            <thead>
                <tr>
                    <th>Home Configuration</th>
                    <th>Packing Material & Labor</th>
                    <th>Local Shifting (Within Mangalore)</th>
                    <th>Ghat Highway Move (Mangalore to Bangalore)</th>
                    <th>Interstate Shifting (To Eastern/Northern Hubs)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>1 BHK Apartment</strong></td>
                    <td>₹1,600 - ₹2,900</td>
                    <td>₹3,500 - ₹6,500</td>
                    <td>₹8,500 - ₹14,500</td>
                    <td>₹14,500 - ₹25,000</td>
                </tr>
                <tr>
                    <td><strong>2 BHK Apartment / House</strong></td>
                    <td>₹3,000 - ₹5,200</td>
                    <td>₹6,500 - ₹12,500</td>
                    <td>₹13,500 - ₹22,500</td>
                    <td>₹21,000 - ₹36,000</td>
                </tr>
                <tr>
                    <td><strong>3 BHK Apartment / Villa</strong></td>
                    <td>₹4,500 - ₹7,800</td>
                    <td>₹10,500 - ₹19,500</td>
                    <td>₹18,500 - ₹31,000</td>
                    <td>₹29,000 - ₹49,000</td>
                </tr>
                <tr>
                    <td><strong>4 BHK / Luxury Coastal Bungalow</strong></td>
                    <td>₹6,200 - ₹11,500</td>
                    <td>₹15,500 - ₹28,500</td>
                    <td>₹25,000 - ₹41,000</td>
                    <td>₹37,000 - ₹64,000</td>
                </tr>
                <tr>
                    <td><strong>Two Wheeler Parcel (Bike / Scooter)</strong></td>
                    <td>₹850 - ₹1,500</td>
                    <td>₹1,300 - ₹2,500</td>
                    <td>₹2,900 - ₹4,900</td>
                    <td>₹5,200 - ₹9,200</td>
                </tr>
            </tbody>
        </table>

        <p>Planning an intercity or interstate move from Mangalore? Check our interactive <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">Live Tariff Rates Calculator</a> for instant customized cost estimates based on inventory size and transit distance.</p>

        <h3 class="mng-subheading">Highway Corridors: NH 66 Coastal Highway & NH 75 to Bangalore</h3>
        <p>Departing from Mangalore, our container vehicles connect directly to NH 66 (running north toward Udupi, Goa, and Mumbai, and south toward Kerala) and NH 75 (connecting east across the Western Ghats to Hassan, Bangalore, and Chennai). Every vehicle is sealed, locked, and tracked via 24/7 digital GPS tracking.</p>

        <p>For long-distance consignments heading to eastern destinations—such as Ranchi, Jamshedpur, Patna, or Kolkata—we provide guaranteed direct point-to-point transit without intermediate transshipment, fully insured against all transit perils.</p>
    </section>

    <!-- Section 5: Systematic 5-Step Relocation Process -->
    <section class="mng-section">
        <h2 class="mng-section-heading">Our Proven 5-Step Relocation Workflow in Mangalore</h2>
        <p class="mng-intro-p">Every move follows our established standard operating procedure to deliver seamless efficiency, security, and stress-free execution.</p>

        <div class="mng-step-list">
            <div class="mng-step-item">
                <div class="mng-step-num">1</div>
                <div class="mng-step-content">
                    <h3>Pre-Move Survey & Written Quote</h3>
                    <p>Our relocation surveyor conducts an on-site inspection at your Mangalore home or commercial premises (or provides an instant video assessment) to evaluate volume, floor access, and approach lanes before offering a clear written quotation.</p>
                </div>
            </div>

            <div class="mng-step-item">
                <div class="mng-step-num">2</div>
                <div class="mng-step-content">
                    <h3>Multi-Layer Moisture-Proof Packing</h3>
                    <p>On scheduled moving day, our skilled team arrives equipped with virgin 5-ply cartons, bubble wrap, moisture-proof stretch film, edge guards, and labeling markers, packing every item systematically room by room.</p>
                </div>
            </div>

            <div class="mng-step-item">
                <div class="mng-step-num">3</div>
                <div class="mng-step-content">
                    <h3>Ergonomic Loading & Protective Stacking</h3>
                    <p>Heavy furniture and electronic appliances are moved using hydraulic lifters, dollies, and safety belts, then loaded into our covered container vehicles with protective cushioning between items to eliminate transit vibration.</p>
                </div>
            </div>

            <div class="mng-step-item">
                <div class="mng-step-num">4</div>
                <div class="mng-step-content">
                    <h3>GPS-Monitored Ghat & Highway Transit</h3>
                    <p>Your belongings travel in weatherproof, locked containers monitored via GPS navigation along state highways and National Highway 75, safeguarding against rain, moisture, and highway bumps.</p>
                </div>
            </div>

            <div class="mng-step-item">
                <div class="mng-step-num">5</div>
                <div class="mng-step-content">
                    <h3>Doorstep Delivery, Reassembly & Debris Removal</h3>
                    <p>Upon reaching your new home or commercial facility, our crew unloads every box into its assigned room, reassembles beds and modular units, places appliances, and cleans up discarded packing materials.</p>
                </div>
            </div>
        </div>

        <div class="mng-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Sealed container truck in Mangalore" title="Safe transit truck in Mangalore">
            <p class="mng-image-caption">Heavy-duty weatherproof container trucks providing safe, moisture-protected transit across Karnataka and pan-India routes.</p>
        </div>
    </section>

    <!-- Section 6: Frequently Asked Questions -->
    <section class="mng-section">
        <h2 class="mng-section-heading">Frequently Asked Questions — Mangalore Relocation</h2>
        <p class="mng-intro-p">Find clear, transparent answers to commonly asked questions about moving homes, corporate offices, and port cargo in Mangalore.</p>

        <div class="mng-faq-item">
            <h3>What are the packers and movers charges in Mangalore?</h3>
            <p>Local shifting in Mangalore starts from ₹3,500 to ₹6,500 for 1 BHK, ₹6,500 to ₹12,500 for 2 BHK, and ₹10,500 to ₹19,500 for 3 BHK homes. Rates include moisture-proof packaging, certified labor, enclosed truck transit, and room-wise unpacking.</p>
        </div>

        <div class="mng-faq-item">
            <h3>How do you protect household goods against coastal humidity and heavy coastal rainfall in Mangalore?</h3>
            <p>We implement coastal-grade waterproofing: multi-layer shrink wrapping, water-resistant tarpaulins, silica gel moisture absorbers, and sealed container trucks that prevent any dampness, sea-breeze corrosion, or rain ingress.</p>
        </div>

        <div class="mng-faq-item">
            <h3>How long does household transit take from Mangalore to Bangalore?</h3>
            <p>Via National Highway 75 crossing the Western Ghats (Shiradi Ghat corridor), our container vehicles safely reach Bangalore in roughly 9 to 11 hours with real-time GPS tracking.</p>
        </div>

        <div class="mng-faq-item">
            <h3>Do you provide moving services for industrial units in Baikampady and Surathkal?</h3>
            <p>Yes, our commercial logistics squad manages factory machinery, petrochemical supplies, raw materials, and corporate inventory across Baikampady KIADB and Surathkal industrial belts with heavy flatbeds and cranes.</p>
        </div>

        <div class="mng-faq-item">
            <h3>Is transit insurance provided for relocations originating in Mangalore?</h3>
            <p>Yes, we issue 100% all-risk transit insurance policies with explicit itemized declarations, backed by our central customer operations in Ranchi.</p>
        </div>

        <div class="mng-faq-item">
            <h3>Can you safely dismantle and reassemble heavy wooden and modular furniture in Mangalore?</h3>
            <p>Yes, our expert carpenters dismantle teakwood cots, wardrobes, and modular cabinets, wrapping each component in heavy bubble wrap and corrugated padding before precision reassembly at your destination.</p>
        </div>
    </section>

    <!-- Section 7: Connected Karnataka Hubs & Localities Cluster Module -->
    <section class="mng-section">
        <h2 class="mng-section-heading">Explore Connected Moving Hubs Across Karnataka</h2>
        <p class="mng-intro-p">Shree Ashirwad Packers and Movers maintains an extensive logistics network linking Mangalore with key cities and prominent regional hubs across Karnataka:</p>

        <div class="mng-cluster-grid">
            <div class="mng-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kadri-mangalore">Kadri Mangalore</a>
            </div>
            <div class="mng-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-surathkal-mangalore">Surathkal Mangalore</a>
            </div>
            <div class="mng-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bangalore">Bangalore Central Hub</a>
            </div>
            <div class="mng-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-mysore">Mysore Heritage Hub</a>
            </div>
            <div class="mng-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hubli">Hubli-Dharwad Hub</a>
            </div>
            <div class="mng-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-vidyanagar-hubli">Vidyanagar Hubli</a>
            </div>
            <div class="mng-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gokul-road-hubli">Gokul Road Hubli</a>
            </div>
            <div class="mng-cluster-card">
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
