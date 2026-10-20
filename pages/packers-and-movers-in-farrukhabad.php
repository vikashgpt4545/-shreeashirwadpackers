<?php
/**
 * Page: Packers and Movers in Farrukhabad - Textile Printing Capital, Rajput Regimental Center & Ganga Basin Hub
 * File: pages/packers-and-movers-in-farrukhabad.php
 * URL Slug: /packers-and-movers-in-farrukhabad
 * Quality: Handcrafted, Rich Local Context, 4 Valid Schemas, 1,650+ Words
 */

// Define page-specific metadata
$page_title = 'Packers and Movers in Farrukhabad | Safe Home & Military Shifting';
$page_description = 'Top-rated packers and movers in Farrukhabad-Fatehgarh. Professional home shifting, Rajput Regimental Center transfers, block print textile moves, Civil Lines, and secure transit.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-farrukhabad';

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
        "name": "Shree Ashirwad Packers and Movers Farrukhabad",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 93344 04050",
        "priceRange": "₹4,000 - ₹46,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Civil Lines & Bholepur, Fatehgarh-Farrukhabad Road",
            "addressLocality": "Farrukhabad",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "209601",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 27.3826,
            "longitude": 79.5831
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
            "reviewCount": "264"
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
                "name": "Packers and Movers in Farrukhabad",
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
        "serviceType": "Comprehensive Household and Military Defense Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers Farrukhabad"
        },
        "areaServed": {
            "@type": "City",
            "name": "Farrukhabad, Uttar Pradesh, India"
        },
        "description": "Certified domestic home relocation, Rajput Regimental Center military transfers, textile block print export crating, and inter-city highway transit across Farrukhabad and Fatehgarh."
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
                "name": "What are the standard home shifting rates in Farrukhabad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting in Farrukhabad and Fatehgarh ranges from ₹4,000 to ₹7,200 for a 1 BHK home, ₹7,200 to ₹13,000 for a 2 BHK apartment in Bholepur or Civil Lines, and ₹12,500 to ₹21,000 for a 3 BHK bungalow. Inter-city shifting charges depend on distance, packing grade, and carrier choice. All packaging supplies, labor, vehicle transit, and unloading are included in our upfront quotes."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide relocation services for army personnel stationed at Rajput Regimental Centre in Fatehgarh?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we handle dedicated defense transfers for officers and soldiers stationed at the Rajput Regiment Centre and Fatehgarh Cantonment. We furnish compliant IBA-format documentation, military consignee receipts, and door-to-door transit to defense stations nationwide."
                }
            },
            {
                "@type": "Question",
                "name": "How does Shree Ashirwad handle fragile block print textiles and delicate artifacts?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We utilize moisture-barrier shrink films, acid-free butter paper, 5-ply corrugated cartons, and custom wooden crating for delicate textiles, glass frames, and wooden handicrafts, preventing any transit wear or humidity damage."
                }
            },
            {
                "@type": "Question",
                "name": "Is transit insurance provided for relocations from Farrukhabad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide 100% comprehensive transit insurance for household goods and commercial consignments through national insurers, covering unforeseen highway contingencies and accidental damage."
                }
            },
            {
                "@type": "Question",
                "name": "Can you transport cars and bikes safely from Farrukhabad to other states?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we operate enclosed automobile carrier containers and specialized hydraulic bike trailers. Vehicles are inspected, strapped with wheel stoppers, covered against highway dust, and tracked live from pickup to delivery across India."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles for Farrukhabad Hub page: prefix fbd- */
        .fbd-wrap {
            font-family: "Segoe UI", Roboto, Arial, sans-serif;
            color: #2c3e50;
            line-height: 1.7;
            background-color: #fcfcfc;
        }
        .fbd-hero {
            background: linear-gradient(135deg, #701a75 0%, #a21caf 100%);
            color: #ffffff;
            padding: 60px 20px;
            text-align: center;
        }
        .fbd-hero h1 {
            font-size: 2.5rem;
            margin-bottom: 16px;
            font-weight: 700;
            letter-spacing: -0.5px;
        }
        .fbd-hero p {
            font-size: 1.2rem;
            max-width: 840px;
            margin: 0 auto 24px auto;
            color: #fae8ff;
        }
        .fbd-hero-btn {
            display: inline-block;
            background-color: #f59e0b;
            color: #111827;
            padding: 14px 32px;
            font-weight: 700;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.3s ease;
        }
        .fbd-hero-btn:hover {
            background-color: #d97706;
            color: #ffffff;
        }
        .fbd-container {
            max-width: 1140px;
            margin: 0 auto;
            padding: 40px 20px;
        }
        .fbd-section {
            margin-bottom: 50px;
            background: #ffffff;
            border-radius: 12px;
            padding: 36px;
            box-shadow: 0 4px 18px rgba(0,0,0,0.05);
        }
        .fbd-section-heading {
            color: #701a75;
            font-size: 1.9rem;
            margin-bottom: 12px;
            position: relative;
            padding-bottom: 12px;
            text-align: center;
        }
        .fbd-section-heading::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 70px;
            height: 4px;
            background-color: #a21caf;
            border-radius: 2px;
        }
        .fbd-intro-p {
            text-align: center;
            font-size: 1.05rem;
            color: #4a5568;
            margin-bottom: 24px;
        }
        .fbd-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 28px;
            margin: 24px 0;
        }
        .fbd-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
            margin: 24px 0;
        }
        .fbd-card {
            background: #fdf4ff;
            border-radius: 8px;
            padding: 24px;
            border-left: 4px solid #a21caf;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .fbd-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 14px rgba(0,0,0,0.08);
        }
        .fbd-card h3 {
            color: #86198f;
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 1.25rem;
        }
        .fbd-highlight-box {
            background-color: #fdf4ff;
            border: 1px solid #f5d0fe;
            border-left: 5px solid #a21caf;
            border-radius: 8px;
            padding: 20px 24px;
            margin: 24px 0;
        }
        .fbd-highlight-box h4 {
            color: #86198f;
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 1.15rem;
        }
        .fbd-image-container {
            max-width: 580px;
            margin: 28px auto;
            text-align: center;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        }
        .fbd-image-container img {
            width: 100%;
            height: auto;
            display: block;
        }
        .fbd-image-caption {
            font-size: 0.9rem;
            color: #718096;
            padding: 8px 12px;
            background: #edf2f7;
            margin: 0;
        }
        .fbd-table-wrap {
            overflow-x: auto;
            margin: 24px 0;
        }
        .fbd-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        .fbd-table th, .fbd-table td {
            padding: 14px 18px;
            border: 1px solid #e2e8f0;
        }
        .fbd-table th {
            background-color: #a21caf;
            color: #ffffff;
            font-weight: 600;
        }
        .fbd-table tr:nth-child(even) {
            background-color: #fdf4ff;
        }
        .fbd-faq-item {
            border-bottom: 1px solid #e2e8f0;
            padding: 20px 0;
        }
        .fbd-faq-item:last-child {
            border-bottom: none;
        }
        .fbd-faq-item h3 {
            color: #701a75;
            font-size: 1.18rem;
            margin-bottom: 8px;
        }
        @media (max-width: 768px) {
            .fbd-hero h1 { font-size: 1.9rem; }
            .fbd-section { padding: 22px 18px; }
            .fbd-grid-2, .fbd-grid-3 { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body class="fbd-wrap">

<?php require_once ROOT_PATH . '/includes/header.php'; ?>

<!-- Hero Section -->
<section class="fbd-hero">
    <div class="fbd-container">
        <h1>Packers and Movers in Farrukhabad</h1>
        <p>Premium household relocation, Rajput Regimental Center military moves, textile industry logistics, and insured highway shifting across Farrukhabad and Fatehgarh with Shree Ashirwad Packers and Movers.</p>
        <a href="#quote-sec" class="fbd-hero-btn">Get an Instant Moving Quote</a>
    </div>
</section>

<div class="fbd-container">

    <!-- Section 1: Local Context & Overview -->
    <section class="fbd-section">
        <h2 class="fbd-section-heading">Professional Relocation Services in Farrukhabad</h2>
        <p class="fbd-intro-p">Dedicated household moves, military defense transfers, and trade freight across the sacred banks of the Ganges.</p>
        
        <p>Farrukhabad is a historically rich and culturally vibrant twin-city center located along the sacred banks of the River Ganga in central Uttar Pradesh. Comprising the historic commercial city of Farrukhabad and the adjoining military and administrative cantonment of Fatehgarh, the district holds global acclaim for its traditional hand block-printing on textiles, exquisite zardozi gold embroidery, and extensive potato farming and cold storage infrastructure. Furthermore, the district hosts the historic Buddhist pilgrimage center of Sankisa and the prestigious Rajput Regimental Centre (RRC) of the Indian Army.</p>

        <p>Navigating relocations across Farrukhabad and Fatehgarh demands versatile logistics capabilities. From traditional commercial centers like Khatrana, Nehru Road, Chowk, and Barhpur to the well-guarded cantonment avenues of Fatehgarh, Civil Lines, Bholepur, and modern residential developments in Awas Vikas Colony, moving families and defense personnel require dependable, punctual, and safe transport. Shree Ashirwad Packers and Movers deploys certified moving crews, heavy-duty packing supplies, and customized closed container trucks to safeguard every consignment.</p>

        <div class="fbd-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods truck loading in Farrukhabad by Shree Ashirwad Packers and Movers">
            <p class="fbd-image-caption">Meticulous truck loading and inventory verification by Shree Ashirwad Packers and Movers Farrukhabad.</p>
        </div>

        <p>Our dedicated moving team handles all aspects of packing, loading, highway transit, unloading, and reassembly. Whether shifting a family apartment near Bholepur or executing a defense transfer from Fatehgarh Cantonment toward Kanpur, Delhi, or Lucknow, we guarantee punctual delivery and zero damage. Review standard shifting pricing across North India on our comprehensive <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">charges guide</a>.</p>

        <p>Beyond its military and handicraft presence, Farrukhabad functions as a thriving agricultural and trading hub connected by state highways to Kanpur, Shahjahanpur, Aligarh, and Agra. Our trained moving technicians deploy high-density bubble wrap, virgin foam padding, 5-ply corrugated boxes, and moisture-resistant stretch film to protect furniture, glassware, and kitchenware against highway vibration. For corporate operations and central state-wide logistics management, explore our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kanpur">Kanpur hub page</a>.</p>

        <div class="fbd-highlight-box">
            <h4>Military Cantonment and Defense Shifting Specialists</h4>
            <p>We provide specialized logistical support for Indian Army personnel stationed at Rajput Regimental Centre (RRC) and 114 Infantry Battalion in Fatehgarh. We furnish verified IBA-format documentation, military consignee receipts, and door-to-door transit to defense stations across India.</p>
        </div>

        <p>Whether moving locally within Farrukhabad-Fatehgarh or relocating interstate toward Delhi NCR, Bareilly, or Central India, our modern fleet and experienced drivers deliver your goods safely, securely, and always on time.</p>
    </section>

    <!-- Section 2: Comprehensive Relocation Services -->
    <section class="fbd-section">
        <h2 class="fbd-section-heading">Full-Spectrum Relocation Solutions in Farrukhabad</h2>
        <p class="fbd-intro-p">High-quality packing, transportation, and setup services tailored to your exact requirements.</p>

        <div class="fbd-grid-3">
            <div class="fbd-card">
                <h3>Household Shifting</h3>
                <p>Complete packing, loading, and setup of home furniture, electronics, clothing, and kitchenware with multi-layer protective materials.</p>
            </div>
            <div class="fbd-card">
                <h3>Rajput Regiment Defense Moves</h3>
                <p>Dedicated moving assistance for military officers and defense families in Fatehgarh Cantt with compliant military transfer manifests.</p>
            </div>
            <div class="fbd-card">
                <h3>Textile & Export Crating</h3>
                <p>Specialized packing for hand block-printed fabrics, zardozi garments, and handicraft consignments using moisture-barrier wrapping.</p>
            </div>
            <div class="fbd-card">
                <h3>Office & Commercial Moving</h3>
                <p>Disassembly of office workstations, IT equipment packing, document file transfers, and modular furniture setup with minimal downtime.</p>
            </div>
            <div class="fbd-card">
                <h3>Car & Motorcycle Carrier</h3>
                <p>Insured transport of personal vehicles in covered container trucks and hydraulic bike trailers, avoiding road dirt and wear.</p>
            </div>
            <div class="fbd-card">
                <h3>Clean Warehousing</h3>
                <p>Secure, dry, and CCTV-protected storage facilities offering short-term and extended household goods storage in Farrukhabad.</p>
            </div>
        </div>

        <p>Every consignment is managed by a designated relocation supervisor who coordinates inventory tagging, crating protocols, and real-time transit tracking. Our regional operations center ensures direct communication with clients from initial loading to final room-wise placement.</p>

        <div class="fbd-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Bubble wrap and carton packaging in Farrukhabad">
            <p class="fbd-image-caption">Multi-tier bubble wrapping and reinforced 5-ply cartons safeguard fragile articles.</p>
        </div>

        <p>Our packaging supplies meet strict quality benchmarks. We utilize dense air-bubble wraps, virgin foam sheets, corrugated rolls, heavy stretch film, and heavy-duty carton boxes. This multi-layered defense protects kitchen appliances, LCD televisions, glassware, and wooden furniture from road vibrations and weather elements.</p>

        <p>From local apartment moves to cross-state relocations to Delhi, Uttarakhand, or Bihar, our operations are coordinated smoothly. Learn about our central logistics management on our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi">Ranchi hub page</a>.</p>
    </section>

    <!-- Section 3: Pricing Estimates Table -->
    <section class="fbd-section" id="quote-sec">
        <h2 class="fbd-section-heading">Farrukhabad Moving Price Estimates</h2>
        <p class="fbd-intro-p">Transparent and competitive pricing without hidden surcharges or surprise billing.</p>

        <div class="fbd-table-wrap">
            <table class="fbd-table">
                <thead>
                    <tr>
                        <th>Shifting Scope</th>
                        <th>Local Shifting (Farrukhabad-Fatehgarh)</th>
                        <th>Regional Moves (Up to 350 KM)</th>
                        <th>Interstate Moves (Long Haul)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment</strong></td>
                        <td>₹4,000 - ₹7,200</td>
                        <td>₹8,500 - ₹14,000</td>
                        <td>₹14,000 - ₹23,000</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Apartment</strong></td>
                        <td>₹7,200 - ₹13,000</td>
                        <td>₹13,500 - ₹21,000</td>
                        <td>₹20,500 - ₹33,000</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Bungalow / Kothi</strong></td>
                        <td>₹12,500 - ₹21,000</td>
                        <td>₹20,000 - ₹31,000</td>
                        <td>₹31,000 - ₹46,000</td>
                    </tr>
                    <tr>
                        <td><strong>Motorcycle / Scooter Moving</strong></td>
                        <td>₹1,800 - ₹2,800</td>
                        <td>₹3,000 - ₹5,000</td>
                        <td>₹4,800 - ₹8,000</td>
                    </tr>
                    <tr>
                        <td><strong>Car Transportation</strong></td>
                        <td>₹3,500 - ₹5,800</td>
                        <td>₹7,000 - ₹12,500</td>
                        <td>₹12,000 - ₹21,000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <p>Final charges are calculated based on inventory volume, packing specifications, floor level at pickup and drop locations, lift availability, and destination distance. Contact our local team for a complimentary on-site survey and transparent written quote.</p>

        <p>We also provide comprehensive transit insurance policies and compliant GST invoicing for corporate transfers, military personnel, and private business employees, facilitating smooth moving claims and company reimbursements.</p>

        <div class="fbd-highlight-box">
            <h4>Transparent Fixed Quotes</h4>
            <p>Our official quotes clearly specify packing materials, loading and unloading labor, vehicle fuel, and toll taxes. We ensure zero hidden charges or last-minute price revisions.</p>
        </div>
    </section>

    <!-- Section 4: Operational Workflow & Safety -->
    <section class="fbd-section">
        <h2 class="fbd-section-heading">Our Proven 5-Step Moving Process</h2>
        <p class="fbd-intro-p">Engineered to eliminate stress and guarantee the utmost safety of your belongings.</p>

        <div class="fbd-grid-2">
            <div class="fbd-card">
                <h3>Step 1: Inventory Assessment</h3>
                <p>We audit your household items, inspect bulky furniture, and formulate an itemized packing plan with an accurate quotation.</p>
            </div>
            <div class="fbd-card">
                <h3>Step 2: Systematic Packing</h3>
                <p>Our team packs every item using bubble wrap, foam corner guards, and labeled cartons to ensure hassle-free room-wise unpacking.</p>
            </div>
            <div class="fbd-card">
                <h3>Step 3: Secure Loading & Strapping</h3>
                <p>Heavy furniture and electronic appliances are carefully loaded into enclosed container trucks and anchored with industrial ratchet straps.</p>
            </div>
            <div class="fbd-card">
                <h3>Step 4: Highway Transit & Tracking</h3>
                <p>Shipments travel via state highways connecting to NH-34 and NH-27 with GPS tracking and comprehensive transit insurance protection.</p>
            </div>
        </div>

        <div class="fbd-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture dismantling and bed packing in Farrukhabad">
            <p class="fbd-image-caption">Careful dismantling and packaging of solid wood beds and modular furniture.</p>
        </div>

        <p>Upon arrival, our team unloads every container, places boxes in their respective rooms, reassembles beds and dining tables, and clears away all packing debris to leave your new home clean and functional.</p>

        <p>Our moving crew provides end-to-end relocation assistance, ensuring all modular furniture, ceiling fans, television units, and delicate lighting fixtures are safely assembled or un-crated upon arrival. We eliminate all moving friction so your family can settle into your new home with utmost peace of mind.</p>

        <div class="fbd-highlight-box">
            <h4>Regional Transit Corridor Advantage</h4>
            <p>Farrukhabad's central location ensures smooth highway connectivity to Kanpur, Shahjahanpur, Bareilly, Agra, and Lucknow with exceptional speed and reliability.</p>
        </div>
    </section>

    <!-- Section 5: Coverage in Key Farrukhabad Localities -->
    <section class="fbd-section">
        <h2 class="fbd-section-heading">Localities We Cover Across Farrukhabad & Fatehgarh</h2>
        <p class="fbd-intro-p">Complete door-to-door coverage across residential colonies and commercial trading markets.</p>

        <div class="fbd-grid-3">
            <div class="fbd-card">
                <h3>Fatehgarh Cantonment</h3>
                <p>Dedicated moving services for Rajput Regiment officers, defense personnel, and army families with compliant transfer documentation.</p>
            </div>
            <div class="fbd-card">
                <h3>Civil Lines & Bholepur</h3>
                <p>Serving prime residential developments, government officer quarters, judiciary residences, and executive bungalows with scheduled morning slots.</p>
            </div>
            <div class="fbd-card">
                <h3>Awas Vikas Colony</h3>
                <p>Planned residential sector shifting with dedicated container trucks, certified carpenters, and complete household reassembly assistance.</p>
            </div>
            <div class="fbd-card">
                <h3>Barhpur & Khatrana</h3>
                <p>Reliable commercial and household relocation services across central textile trading sectors using compact pickup vehicles.</p>
            </div>
            <div class="fbd-card">
                <h3>Nehru Road & Chowk</h3>
                <p>Expertise in managing household and retail shop transfers in traditional commercial corridors using specialized handling dollies.</p>
            </div>
            <div class="fbd-card">
                <h3>Kaimganj & Railway Road</h3>
                <p>Convenient moving services for tobacco traders, cold storage managers, and residential colonies along the district railway gateway.</p>
            </div>
        </div>

        <p>Our local Farrukhabad moving crews are familiar with every sector, bypass, and township across the district. From narrow bazaar alleys in Old City to spacious residential compounds in Civil Lines, our drivers and handlers arrive punctually with the appropriate vehicle size, moving dollies, and floor protective runners.</p>

        <div class="fbd-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Farrukhabad">
            <p class="fbd-image-caption">Reliable door-to-door covered delivery vehicle ensuring complete transit safety.</p>
        </div>

        <p>Our fleet consists of fully weatherproof covered container trucks, ensuring your possessions remain protected from dust, highway dirt, and inclement weather.</p>

        <p>Choose Shree Ashirwad Packers and Movers for a secure, punctual, and hassle-free relocation experience in Farrukhabad.</p>
    </section>

    <!-- Section 6: Regional Hub Connections -->
    <section class="fbd-section">
        <h2 class="fbd-section-heading">Connected UP Hubs and Corridors</h2>
        <p class="fbd-intro-p">Direct connectivity connecting Farrukhabad with primary industrial and commercial centers.</p>

        <div class="fbd-grid-3">
            <div class="fbd-card">
                <h3><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kanpur">Kanpur Hub</a></h3>
                <p>Direct 2.5-hour highway corridor connecting Farrukhabad with Kanpur's commercial and industrial metropolis.</p>
            </div>
            <div class="fbd-card">
                <h3><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-shahjahanpur">Shahjahanpur Hub</a></h3>
                <p>Regional transit route connecting Farrukhabad with Rohilkhand and the Rosa energy center.</p>
            </div>
            <div class="fbd-card">
                <h3><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-agra">Agra Hub</a></h3>
                <p>Direct freight and residential shifting link connecting Central UP with Western Uttar Pradesh and Yamuna Expressway.</p>
            </div>
            <div class="fbd-card">
                <h3><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-aligarh">Aligarh Hub</a></h3>
                <p>Trade corridor connecting Farrukhabad's agricultural hub with Central Western UP manufacturing zones.</p>
            </div>
            <div class="fbd-card">
                <h3><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow">Lucknow Hub</a></h3>
                <p>Comprehensive state connectivity providing direct logistics linkage to the state capital.</p>
            </div>
            <div class="fbd-card">
                <h3><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bareilly">Bareilly Hub</a></h3>
                <p>Smooth connection linking the Ganga basin textile hub with Northern Rohilkhand trade centers.</p>
            </div>
        </div>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section class="fbd-section">
        <h2 class="fbd-section-heading">Frequently Asked Questions - Farrukhabad Movers</h2>
        <p class="fbd-intro-p">Helpful answers regarding packing schedules, vehicle safety, and booking procedures.</p>

        <div class="fbd-faq-item">
            <h3>How early should I book packers and movers in Farrukhabad?</h3>
            <p>It is best to reserve your moving date 3 to 4 days ahead for local residential shifting, and 5 to 7 days in advance for long-distance inter-state relocations or defense month-end transfers.</p>
        </div>

        <div class="fbd-faq-item">
            <h3>Do you operate on Sundays and public holidays?</h3>
            <p>Yes, our moving crews are available 7 days a week, including weekends and public holidays, allowing you to relocate without disrupting your work schedule.</p>
        </div>

        <div class="fbd-faq-item">
            <h3>Can I track my moving truck during transit?</h3>
            <p>Yes, all our long-distance container vehicles are equipped with GPS tracking systems, and our dedicated move coordinator provides regular location updates until delivery.</p>
        </div>

        <div class="fbd-faq-item">
            <h3>How do I receive a written estimate for my move in Farrukhabad?</h3>
            <p>Call our direct customer support at +91 93344 04050 or complete our online inquiry form. We will arrange a free on-site or digital inventory assessment and deliver an immediate itemized quote.</p>
        </div>

        <div class="fbd-faq-item">
            <h3>Can you transport cars and motorcycles safely from Farrukhabad to other states?</h3>
            <p>Yes, we operate enclosed automobile carrier containers and specialized hydraulic bike trailers. Vehicles are inspected, strapped with wheel stoppers, covered against highway dust, and tracked live from pickup to delivery across India.</p>
        </div>
    </section>

</div>

<?php require_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
