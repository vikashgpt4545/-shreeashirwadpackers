<?php
/**
 * Page: Packers and Movers in Hardoi - Central Agricultural Hub, Sandila Industrial Belt & Sugar Mills
 * File: pages/packers-and-movers-in-hardoi.php
 * URL Slug: /packers-and-movers-in-hardoi
 */

if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__));
}
require_once ROOT_PATH . '/includes/config.php';

$page_title = 'Packers and Movers in Hardoi | Safe Household & Industrial Shifting';
$page_description = 'Top packers and movers in Hardoi. Professional household relocation, Sandila industrial belt transfers, sugar mill logistics, Civil Lines, and insured highway transit.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-hardoi';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">

    <!-- CSS Links -->
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Hardoi",
        "image": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
        "@id": "https://shreeashirwadpackers.com/packers-and-movers-in-hardoi#company",
        "url": "https://shreeashirwadpackers.com/packers-and-movers-in-hardoi",
        "telephone": "+919334404050",
        "priceRange": "₹₹",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Circular Road, Near Civil Lines",
            "addressLocality": "Hardoi",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "241001",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 27.3989,
            "longitude": 80.1309
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"
            ],
            "opens": "07:00",
            "closes": "22:00"
        },
        "sameAs": [
            "https://www.facebook.com/shreeashirwadpackers",
            "https://twitter.com/ashirwadpackers"
        ]
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
                "name": "Packers and Movers in Hardoi",
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
        "serviceType": "Relocation & Shifting Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers Hardoi"
        },
        "areaServed": {
            "@type": "City",
            "name": "Hardoi, Uttar Pradesh, India"
        },
        "description": "Comprehensive domestic household shifting, Sandila industrial estate relocations, sugar mill executive moves, and inter-city transport across Hardoi and Central UP."
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
                "name": "What are the standard household shifting charges in Hardoi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting charges in Hardoi range from ₹3,800 to ₹7,000 for a 1 BHK home, ₹6,800 to ₹12,500 for a 2 BHK apartment in Civil Lines or Circular Road, and ₹11,500 to ₹19,500 for a 3 BHK residence. Inter-city relocations depend on highway distance, volume of goods, and packing specifications. Upfront transparent estimates include labor, vehicle freight, and loading."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide relocation services for industrial units in Sandila Industrial Area and sugar mills in Hardoi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we handle specialized corporate and factory shifting across Sandila Industrial Area, UPSIDA complexes, and sugar mill townships in Hardoi. We provide heavy machinery crating, skidding, secure office document logistics, and executive family transfers."
                }
            },
            {
                "@type": "Question",
                "name": "How quickly can you execute a move from Hardoi to Lucknow, Bareilly, or Kanpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "With our direct highway access, express container shipments from Hardoi reach Lucknow in approximately 2 hours, Shahjahanpur in 1 hour, Bareilly in 2 hours, and Kanpur in 2.5 hours, ensuring timely loading and same-day delivery."
                }
            },
            {
                "@type": "Question",
                "name": "Is comprehensive transit insurance provided for goods moving from Hardoi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we arrange 100% comprehensive transit insurance policies through trusted national insurance companies. Our transit coverage protects your furniture, appliances, and fragile valuables against transit damages or highway contingencies from loading until final handover."
                }
            },
            {
                "@type": "Question",
                "name": "Can you transport cars and bikes safely from Hardoi to other states?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we operate enclosed automobile carrier containers and specialized hydraulic bike trailers. Vehicles are inspected, strapped with wheel stoppers, covered against highway dust, and tracked live from pickup to delivery across India."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles for Hardoi Hub page: prefix hrd- */
        .hrd-wrap {
            font-family: "Segoe UI", Roboto, Arial, sans-serif;
            color: #2c3e50;
            line-height: 1.7;
            background-color: #fcfcfc;
        }
        .hrd-hero {
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            color: #ffffff;
            padding: 60px 20px;
            text-align: center;
        }
        .hrd-hero h1 {
            font-size: 2.5rem;
            margin-bottom: 16px;
            font-weight: 700;
            letter-spacing: -0.5px;
        }
        .hrd-hero p {
            font-size: 1.2rem;
            max-width: 840px;
            margin: 0 auto 24px auto;
            color: #cbd5e1;
        }
        .hrd-hero-btn {
            display: inline-block;
            background-color: #f59e0b;
            color: #111827;
            padding: 14px 32px;
            font-weight: 700;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.3s ease;
        }
        .hrd-hero-btn:hover {
            background-color: #d97706;
            color: #ffffff;
        }
        .hrd-container {
            max-width: 1140px;
            margin: 0 auto;
            padding: 40px 20px;
        }
        .hrd-section {
            margin-bottom: 50px;
            background: #ffffff;
            border-radius: 12px;
            padding: 36px;
            box-shadow: 0 4px 18px rgba(0,0,0,0.05);
        }
        .hrd-section-heading {
            color: #1e293b;
            font-size: 1.9rem;
            margin-bottom: 12px;
            position: relative;
            padding-bottom: 12px;
            text-align: center;
        }
        .hrd-section-heading::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 70px;
            height: 4px;
            background-color: #f59e0b;
            border-radius: 2px;
        }
        .hrd-intro-p {
            text-align: center;
            font-size: 1.05rem;
            color: #4a5568;
            margin-bottom: 24px;
        }
        .hrd-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 28px;
            margin: 24px 0;
        }
        .hrd-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
            margin: 24px 0;
        }
        .hrd-card {
            background: #f8fafc;
            border-radius: 8px;
            padding: 24px;
            border-left: 4px solid #64748b;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .hrd-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 14px rgba(0,0,0,0.08);
        }
        .hrd-card h3 {
            color: #334155;
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 1.25rem;
        }
        .hrd-highlight-box {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-left: 5px solid #64748b;
            border-radius: 8px;
            padding: 20px 24px;
            margin: 24px 0;
        }
        .hrd-highlight-box h4 {
            color: #334155;
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 1.15rem;
        }
        .hrd-image-container {
            max-width: 580px;
            margin: 28px auto;
            text-align: center;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        }
        .hrd-image-container img {
            width: 100%;
            height: auto;
            display: block;
        }
        .hrd-image-caption {
            font-size: 0.9rem;
            color: #718096;
            padding: 8px 12px;
            background: #edf2f7;
            margin: 0;
        }
        .hrd-table-wrap {
            overflow-x: auto;
            margin: 24px 0;
        }
        .hrd-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        .hrd-table th, .hrd-table td {
            padding: 14px 18px;
            border: 1px solid #e2e8f0;
        }
        .hrd-table th {
            background-color: #334155;
            color: #ffffff;
            font-weight: 600;
        }
        .hrd-table tr:nth-child(even) {
            background-color: #f8fafc;
        }
        .hrd-faq-item {
            border-bottom: 1px solid #e2e8f0;
            padding: 20px 0;
        }
        .hrd-faq-item:last-child {
            border-bottom: none;
        }
        .hrd-faq-item h3 {
            color: #1e293b;
            font-size: 1.18rem;
            margin-bottom: 8px;
        }
        @media (max-width: 768px) {
            .hrd-hero h1 { font-size: 1.9rem; }
            .hrd-section { padding: 22px 18px; }
            .hrd-grid-2, .hrd-grid-3 { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body class="hrd-wrap">

<?php require_once ROOT_PATH . '/includes/header.php'; ?>

<!-- Hero Section -->
<section class="hrd-hero">
    <div class="hrd-container">
        <h1>Packers and Movers in Hardoi</h1>
        <p>Premium household relocation, Sandila industrial belt transfers, sugar mill logistics, Civil Lines, and insured highway transit with Shree Ashirwad Packers and Movers.</p>
        <a href="#quote-sec" class="hrd-hero-btn">Get an Instant Moving Quote</a>
    </div>
</section>

<div class="hrd-container">

    <!-- Section 1: Authority Introduction -->
    <section class="hrd-section" id="quote-sec">
        <h2 class="hrd-section-heading">Professional Relocation Services in Hardoi</h2>
        <p class="hrd-intro-p">Reliable household and corporate relocation solutions tailored for families, sugar mill professionals, and enterprises across Hardoi.</p>

        <p>Hardoi holds an essential strategic and economic position in the heart of Central Uttar Pradesh, situated conveniently between Lucknow to the southeast and Shahjahanpur and Bareilly to the northwest. Famed as an agricultural powerhouse with extensive sugarcane cultivation, Hardoi is home to prominent agro-industrial infrastructure including massive sugar mills at Rupapur, Loni, and Harpalpur, vast grain mandis, and the rapidly growing manufacturing corridor of Sandila Industrial Area (housing major multinational paint factories, confectionery units, and engineering complexes). The continuous expansion of industrial operations alongside administrative government offices, judicial institutions, and medical centers drives steady relocation demand among working professionals and families.</p>

        <p>Positioned along the main Northern Railway line connecting Lucknow with Moradabad and supported by well-maintained state highways linking Shahjahanpur, Sitapur, Farrukhabad, and Kanpur, Hardoi offers excellent multi-directional transit connectivity. Whether you are moving your home across central residential neighborhoods like Civil Lines, Circular Road, and Cinema Chauraha, shifting near Railway Ganj and Awas Vikas Colony, or coordinating industrial machinery transit to the Sandila manufacturing belt, Shree Ashirwad Packers and Movers delivers certified packing crews, heavy-duty packing supplies, and reliable covered container transport.</p>

        <div class="hrd-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods truck loading in Hardoi by Shree Ashirwad Packers and Movers">
            <p class="hrd-image-caption">Meticulous truck loading and systematic inventory verification by Shree Ashirwad Packers and Movers in Hardoi.</p>
        </div>

        <p>Our dedicated moving technicians in Hardoi understand the specific operational requirements of local and regional shifting. From dismantling intricate wooden furniture, wardrobes, and modular kitchen units to safeguarding delicate chinaware, flat-screen televisions, and home appliances with heavy-duty air bubble wraps and customized wooden crates, our team ensures complete physical and transit protection. We supervise each consignment with trained packing foremen who maintain punctual moving timelines across both congested central bazaar streets and newly expanding expressway townships. For corporate headquarters relocation and inter-state logistics support, visit our <a href="<?php echo SITE_BASE_URL; ?>/">company HQ hub page</a>.</p>
    </section>

    <!-- Section 2: Comprehensive Moving Capabilities -->
    <section class="hrd-section">
        <h2 class="hrd-section-heading">Tailored Moving Solutions for Hardoi Residents</h2>
        <p class="hrd-intro-p">Comprehensive packing, careful transit, and on-site reassembly designed to meet diverse relocation requirements.</p>

        <div class="hrd-grid-2">
            <div class="hrd-card">
                <h3>Residential Home Relocation</h3>
                <p>Complete household shifting services covering 1 BHK, 2 BHK, 3 BHK, and expansive family residences. We deliver multi-layered packing using multi-ply corrugated cartons, bubble wrap, corner guards, and edge protectors to safeguard every valuable possession.</p>
            </div>
            <div class="hrd-card">
                <h3>Sandila Industrial & Corporate Logistics</h3>
                <p>Specialized corporate shifting for manufacturing facilities, multinational paints, confectionery factories, and administrative offices in Sandila Industrial Area. We provide heavy equipment skidding, machinery crating, and off-peak moving schedules.</p>
            </div>
            <div class="hrd-card">
                <h3>Sugar Mill Executive Transfers</h3>
                <p>Dedicated relocation services for engineers, managers, and administrative officers stationed at sugar processing complexes across Rupapur and Hardoi. We ensure priority booking, fragile chinaware crating, and direct residential delivery.</p>
            </div>
            <div class="hrd-card">
                <h3>Express Automobile Transport</h3>
                <p>Safe and verified car and two-wheeler transportation using enclosed container carriers. Every automobile is secured with wheel chocks, heavy-duty tie-downs, dust-proof body sheets, and full transit insurance coverage.</p>
            </div>
        </div>

        <p>Our operational supervisors oversee every single consignment personally. Before a single box is loaded into our container truck, our team compiles an exhaustive inventory manifest detailing the physical state and item description of every package, guaranteeing total transparency upon final delivery.</p>

        <div class="hrd-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="High grade multi layer packaging materials deployed in Hardoi">
            <p class="hrd-image-caption">High-density bubble wrap, heavy-duty cartons, and stretch film protecting household belongings in Hardoi.</p>
        </div>

        <p>We deploy specialized packing methods for sensitive household assets. Glass tabletops, flat-screen LED televisions, kitchen chinaware, refrigerator coils, and antique family heirlooms receive individualized shock-absorbing packaging to prevent any structural damage during highway transit.</p>
    </section>

    <!-- Section 3: Transparent Pricing Estimates -->
    <section class="hrd-section">
        <h2 class="hrd-section-heading">Transparent Packers and Movers Charges in Hardoi</h2>
        <p class="hrd-intro-p">Clear, all-inclusive pricing estimates with zero hidden fees or unexpected destination surcharges.</p>

        <div class="hrd-table-wrap">
            <table class="hrd-table">
                <thead>
                    <tr>
                        <th>Shifting Type</th>
                        <th>Packing Material & Labor</th>
                        <th>Transport Vehicle Freight</th>
                        <th>Estimated Total Cost</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1 BHK Local Shift</td>
                        <td>₹1,800 - ₹3,200</td>
                        <td>₹2,000 - ₹3,800</td>
                        <td>₹3,800 - ₹7,000</td>
                    </tr>
                    <tr>
                        <td>2 BHK Local Shift</td>
                        <td>₹3,200 - ₹5,500</td>
                        <td>₹3,600 - ₹7,000</td>
                        <td>₹6,800 - ₹12,500</td>
                    </tr>
                    <tr>
                        <td>3 BHK Local Shift</td>
                        <td>₹5,500 - ₹9,000</td>
                        <td>₹6,000 - ₹10,500</td>
                        <td>₹11,500 - ₹19,500</td>
                    </tr>
                    <tr>
                        <td>4 BHK / Ancestral Home</td>
                        <td>₹8,000 - ₹13,500</td>
                        <td>₹9,000 - ₹15,000</td>
                        <td>₹17,000 - ₹28,500</td>
                    </tr>
                    <tr>
                        <td>Vehicle Transport (Bike)</td>
                        <td>₹800 - ₹1,500</td>
                        <td>₹1,500 - ₹3,200</td>
                        <td>₹2,300 - ₹4,700</td>
                    </tr>
                    <tr>
                        <td>Vehicle Transport (Car)</td>
                        <td>₹1,500 - ₹2,800</td>
                        <td>₹5,500 - ₹11,000</td>
                        <td>₹7,000 - ₹13,800</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <p>Moving prices are influenced by the total volume of goods, floor height at both premises, elevator availability, fragile item quantity, and the transit distance. We deliver written, binding quotes prior to booking so our clients have complete peace of mind. For an automated quote breakdown and distance calculations, utilize our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">live tariff calculator</a>.</p>

        <div class="hrd-highlight-box">
            <h4>Commercial & Corporate Relocation Billing Support</h4>
            <p>We furnish complete GST-compliant invoices, official consignment notes (bilty), transit insurance policies, and itemized moving cost sheets to assist government officials, manufacturing plant managers, and bank officers with prompt corporate reimbursement claims.</p>
        </div>
    </section>

    <!-- Section 4: Operational Workflow & Packaging -->
    <section class="hrd-section">
        <h2 class="hrd-section-heading">Step-by-Step Relocation Process in Hardoi</h2>
        <p class="hrd-intro-p">A methodical approach ensuring maximum safety, punctual arrival, and complete stress relief.</p>

        <div class="hrd-grid-3">
            <div class="hrd-card">
                <h3>1. Pre-Move Assessment</h3>
                <p>We conduct a thorough on-site or digital inventory review to evaluate box requirements, specialty crating needs, and vehicle dimensions, presenting an accurate estimate.</p>
            </div>
            <div class="hrd-card">
                <h3>2. Professional Packing</h3>
                <p>Our crew arrives on moving day equipped with virgin bubble wrap, 5-ply cartons, foam sheets, and sealing tape, expertly packing each item room by room.</p>
            </div>
            <div class="hrd-card">
                <h3>3. Secure Loading</h3>
                <p>Heavy wooden furniture, mattresses, and metal appliances are loaded first to establish a stable foundation, followed by boxed fragile items arranged with protective shock pads.</p>
            </div>
            <div class="hrd-card">
                <h3>4. GPS Highway Transit</h3>
                <p>Your consignment is transported in closed weatherproof container trucks driven by vetted long-haul drivers across Central UP and national highway networks.</p>
            </div>
            <div class="hrd-card">
                <h3>5. Careful Unloading</h3>
                <p>Upon arrival at your destination residence, our workers carefully offload every box and piece of furniture, placing items into their designated rooms per your floor plan.</p>
            </div>
            <div class="hrd-card">
                <h3>6. Assembly & Setup</h3>
                <p>We reassemble bed frames, study desks, and modular dining tables, positioning heavy appliances so your family can comfortably settle in without delay.</p>
            </div>
        </div>

        <p>Our moving crews include skilled carpentry technicians equipped with power tools to dismantle complex wardrobe sets, hydraulic beds, and wall-mounted shelving without causing damage to fixtures or wood joinery.</p>

        <div class="hrd-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture dismantling and wrapping in Hardoi">
            <p class="hrd-image-caption">Trained technicians dismantling modular furniture and securing corners with impact protection.</p>
        </div>

        <p>Following unpacking, we collect discarded packaging materials and empty carton boxes, leaving your newly occupied home orderly, functional, and ready for living.</p>
    </section>

    <!-- Section 5: Coverage in Key Localities -->
    <section class="hrd-section">
        <h2 class="hrd-section-heading">Serving Neighborhoods & Industrial Belts in Hardoi</h2>
        <p class="hrd-intro-p">Extensive network coverage throughout residential sectors, historical commercial avenues, and expressway corridors.</p>

        <div class="hrd-grid-3">
            <div class="hrd-card">
                <h3>Civil Lines & Circular Road</h3>
                <p>Upscale administrative and residential quarter accommodating judiciary officials, government administrators, and executive residences demanding premier shifting care.</p>
            </div>
            <div class="hrd-card">
                <h3>Sandila Industrial Area</h3>
                <p>Premier manufacturing hub along Lucknow highway hosting multinational corporations, paint manufacturers, and industrial engineering units requiring industrial shifting.</p>
            </div>
            <div class="hrd-card">
                <h3>Railway Ganj & Station Road</h3>
                <p>Central transit junction near Hardoi railway station accommodating commercial traders, railway personnel, and banking executives needing smooth relocation.</p>
            </div>
            <div class="hrd-card">
                <h3>Awas Vikas Colony & Asha Nagar</h3>
                <p>Well-planned residential neighborhoods featuring modern independent bungalows and apartments with regular local and inter-city shifting demands.</p>
            </div>
            <div class="hrd-card">
                <h3>Cinema Chauraha & Bazaar Area</h3>
                <p>Historic central market avenue where our compact loading vans navigate tight commercial lanes to execute prompt household and shop relocations.</p>
            </div>
            <div class="hrd-card">
                <h3>Shahjahanpur Road Corridor</h3>
                <p>Northwestern highway sector offering fast connectivity toward Shahjahanpur and Bareilly, with developing residential layouts and warehouse hubs.</p>
            </div>
        </div>

        <p>Our local Hardoi moving teams are intimately familiar with city traffic schedules, expressway toll plazas, and local municipal entry regulations. Whether navigating central bazaar lanes or accessing high-rise gated societies, our teams arrive prepared with appropriate trolley dollies and floor protectors.</p>

        <div class="hrd-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Hardoi">
            <p class="hrd-image-caption">Reliable covered container vehicles delivering door-to-door relocation across Hardoi.</p>
        </div>

        <p>Our modern fleet of fully weatherproof closed container trucks protects your goods from highway dust, rain, and transit vibration, ensuring every consignment arrives in mint condition.</p>

        <p>Choose Shree Ashirwad Packers and Movers for a professional, courteous, and timely relocation experience in Hardoi and across Uttar Pradesh.</p>
    </section>

    <!-- Section 6: Regional Hub Connections -->
    <section class="hrd-section">
        <h2 class="hrd-section-heading">Connected UP Hubs and Corridors</h2>
        <p class="hrd-intro-p">Direct highway links connecting Hardoi with primary industrial and commercial centers.</p>

        <div class="hrd-grid-3">
            <div class="hrd-card">
                <h3><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow">Lucknow Hub</a></h3>
                <p>Direct 2-hour state highway connection via Sandila linking Hardoi directly with the Uttar Pradesh state capital.</p>
            </div>
            <div class="hrd-card">
                <h3><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-shahjahanpur">Shahjahanpur Hub</a></h3>
                <p>Immediate 1-hour highway corridor via NH-30 link connecting Hardoi with Shahjahanpur industrial and thermal power hubs.</p>
            </div>
            <div class="hrd-card">
                <h3><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bareilly">Bareilly Hub</a></h3>
                <p>Direct 2-hour northern highway corridor linking Hardoi with Bareilly's major commercial and healthcare centers.</p>
            </div>
            <div class="hrd-card">
                <h3><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kanpur">Kanpur Hub</a></h3>
                <p>Vital southern transit corridor connecting Hardoi agro-trade with Kanpur's leather and commercial industrial capital.</p>
            </div>
            <div class="hrd-card">
                <h3><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-farrukhabad">Farrukhabad Hub</a></h3>
                <p>Direct western connection linking Hardoi with Farrukhabad textile printing and agricultural commodity trading centers.</p>
            </div>
            <div class="hrd-card">
                <h3><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ayodhya">Ayodhya Hub</a></h3>
                <p>Central UP eastern corridor providing seamless logistics access to Ayodhya and Purvanchal pilgrimage centers.</p>
            </div>
        </div>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section class="hrd-section">
        <h2 class="hrd-section-heading">Frequently Asked Questions - Hardoi Movers</h2>
        <p class="hrd-intro-p">Helpful answers regarding packing schedules, vehicle safety, and booking procedures.</p>

        <div class="hrd-faq-item">
            <h3>How early should I book packers and movers in Hardoi?</h3>
            <p>It is best to reserve your moving slot 3 to 4 days ahead for local residential shifting within Hardoi, and 5 to 7 days in advance for long-distance inter-state moves or month-end moving dates.</p>
        </div>

        <div class="hrd-faq-item">
            <h3>Do you operate on Sundays and public holidays?</h3>
            <p>Yes, our moving crews are available 7 days a week, including weekends and public holidays, allowing you to relocate conveniently without taking time off work.</p>
        </div>

        <div class="hrd-faq-item">
            <h3>Can I track my moving truck during transit?</h3>
            <p>Yes, all our long-distance container vehicles are equipped with GPS tracking systems, and our dedicated move coordinator provides regular location updates until delivery.</p>
        </div>

        <div class="hrd-faq-item">
            <h3>How do I receive a written estimate for my move in Hardoi?</h3>
            <p>Call our direct customer support at +91 93344 04050 or complete our online inquiry form. We will arrange a free on-site or digital inventory assessment and deliver an immediate itemized quote.</p>
        </div>

        <div class="hrd-faq-item">
            <h3>Can you transport cars and motorcycles safely from Hardoi to other states?</h3>
            <p>Yes, we operate enclosed automobile carrier containers and specialized hydraulic bike trailers. Vehicles are inspected, strapped with wheel stoppers, covered against highway dust, and tracked live from pickup to delivery across India.</p>
        </div>
    </section>

</div>

<?php require_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
