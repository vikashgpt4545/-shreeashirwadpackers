<?php
/**
 * Page: Packers and Movers in Sitapur - Sugar Industry Capital, Eye Care Heritage & NH-30 Corridor
 * File: pages/packers-and-movers-in-sitapur.php
 * URL Slug: /packers-and-movers-in-sitapur
 */

if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__));
}
require_once ROOT_PATH . '/includes/config.php';

$page_title = 'Packers and Movers in Sitapur | Safe Household & Commercial Shifting';
$page_description = 'Top packers and movers in Sitapur. Professional household relocation, sugar mill agro-logistics, eye hospital doctor transfers, Civil Lines, and insured highway transit.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-sitapur';
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
        "name": "Shree Ashirwad Packers and Movers Sitapur",
        "image": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
        "@id": "https://shreeashirwadpackers.com/packers-and-movers-in-sitapur#company",
        "url": "https://shreeashirwadpackers.com/packers-and-movers-in-sitapur",
        "telephone": "+919334404050",
        "priceRange": "₹₹",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Eye Hospital Road, Near Civil Lines",
            "addressLocality": "Sitapur",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "261001",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 27.5684,
            "longitude": 80.6829
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
                "name": "Packers and Movers in Sitapur",
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
            "name": "Shree Ashirwad Packers and Movers Sitapur"
        },
        "areaServed": {
            "@type": "City",
            "name": "Sitapur, Uttar Pradesh, India"
        },
        "description": "Comprehensive domestic household shifting, Hargaon and Biswan sugar mill executive transfers, medical healthcare relocations, and inter-city transport across Sitapur."
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
                "name": "What are the standard household shifting charges in Sitapur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting charges in Sitapur range from ₹3,800 to ₹7,000 for a 1 BHK home, ₹6,800 to ₹12,500 for a 2 BHK apartment in Civil Lines or Eye Hospital Road, and ₹11,500 to ₹19,500 for a 3 BHK residence. Inter-city relocations depend on highway distance, volume of goods, and packing specifications. Upfront transparent estimates include labor, vehicle freight, and loading."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide relocation services for doctors at Sitapur Eye Hospital and medical staff in Sitapur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we specialize in transfers for ophthalmologists, resident doctors, and clinical faculty associated with the historic Sitapur Eye Hospital and district medical college. We provide delicate handling for medical equipment, academic libraries, and delicate household electronics."
                }
            },
            {
                "@type": "Question",
                "name": "How quickly can you execute a move from Sitapur to Lucknow, Bareilly, or Shahjahanpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Positioned along four-lane NH-30, express container shipments from Sitapur reach Lucknow in approximately 1.5 hours, Shahjahanpur in 1.5 hours, and Bareilly in under 2.5 hours, ensuring timely loading, direct transit, and same-day delivery."
                }
            },
            {
                "@type": "Question",
                "name": "Is comprehensive transit insurance provided for goods moving from Sitapur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we arrange 100% comprehensive transit insurance policies through trusted national insurance companies. Our transit coverage protects your furniture, appliances, and fragile valuables against transit damages or highway contingencies from loading until final handover."
                }
            },
            {
                "@type": "Question",
                "name": "Can you transport cars and bikes safely from Sitapur to other states?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we operate enclosed automobile carrier containers and specialized hydraulic bike trailers. Vehicles are inspected, strapped with wheel stoppers, covered against highway dust, and tracked live from pickup to delivery across India."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles for Sitapur Hub page: prefix stp- */
        .stp-wrap {
            font-family: "Segoe UI", Roboto, Arial, sans-serif;
            color: #2c3e50;
            line-height: 1.7;
            background-color: #fcfcfc;
        }
        .stp-hero {
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            color: #ffffff;
            padding: 60px 20px;
            text-align: center;
        }
        .stp-hero h1 {
            font-size: 2.5rem;
            margin-bottom: 16px;
            font-weight: 700;
            letter-spacing: -0.5px;
        }
        .stp-hero p {
            font-size: 1.2rem;
            max-width: 840px;
            margin: 0 auto 24px auto;
            color: #cbd5e1;
        }
        .stp-hero-btn {
            display: inline-block;
            background-color: #f59e0b;
            color: #111827;
            padding: 14px 32px;
            font-weight: 700;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.3s ease;
        }
        .stp-hero-btn:hover {
            background-color: #d97706;
            color: #ffffff;
        }
        .stp-container {
            max-width: 1140px;
            margin: 0 auto;
            padding: 40px 20px;
        }
        .stp-section {
            margin-bottom: 50px;
            background: #ffffff;
            border-radius: 12px;
            padding: 36px;
            box-shadow: 0 4px 18px rgba(0,0,0,0.05);
        }
        .stp-section-heading {
            color: #1e293b;
            font-size: 1.9rem;
            margin-bottom: 12px;
            position: relative;
            padding-bottom: 12px;
            text-align: center;
        }
        .stp-section-heading::after {
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
        .stp-intro-p {
            text-align: center;
            font-size: 1.05rem;
            color: #4a5568;
            margin-bottom: 24px;
        }
        .stp-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 28px;
            margin: 24px 0;
        }
        .stp-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
            margin: 24px 0;
        }
        .stp-card {
            background: #f8fafc;
            border-radius: 8px;
            padding: 24px;
            border-left: 4px solid #64748b;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .stp-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 14px rgba(0,0,0,0.08);
        }
        .stp-card h3 {
            color: #334155;
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 1.25rem;
        }
        .stp-highlight-box {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-left: 5px solid #64748b;
            border-radius: 8px;
            padding: 20px 24px;
            margin: 24px 0;
        }
        .stp-highlight-box h4 {
            color: #334155;
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 1.15rem;
        }
        .stp-image-container {
            max-width: 580px;
            margin: 28px auto;
            text-align: center;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        }
        .stp-image-container img {
            width: 100%;
            height: auto;
            display: block;
        }
        .stp-image-caption {
            font-size: 0.9rem;
            color: #718096;
            padding: 8px 12px;
            background: #edf2f7;
            margin: 0;
        }
        .stp-table-wrap {
            overflow-x: auto;
            margin: 24px 0;
        }
        .stp-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        .stp-table th, .stp-table td {
            padding: 14px 18px;
            border: 1px solid #e2e8f0;
        }
        .stp-table th {
            background-color: #334155;
            color: #ffffff;
            font-weight: 600;
        }
        .stp-table tr:nth-child(even) {
            background-color: #f8fafc;
        }
        .stp-faq-item {
            border-bottom: 1px solid #e2e8f0;
            padding: 20px 0;
        }
        .stp-faq-item:last-child {
            border-bottom: none;
        }
        .stp-faq-item h3 {
            color: #1e293b;
            font-size: 1.18rem;
            margin-bottom: 8px;
        }
        @media (max-width: 768px) {
            .stp-hero h1 { font-size: 1.9rem; }
            .stp-section { padding: 22px 18px; }
            .stp-grid-2, .stp-grid-3 { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body class="stp-wrap">

<?php require_once ROOT_PATH . '/includes/header.php'; ?>

<!-- Hero Section -->
<section class="stp-hero">
    <div class="stp-container">
        <h1>Packers and Movers in Sitapur</h1>
        <p>Premium household relocation, sugar mill agro-logistics, eye care heritage healthcare moves, and insured highway transit with Shree Ashirwad Packers and Movers.</p>
        <a href="#quote-sec" class="stp-hero-btn">Get an Instant Moving Quote</a>
    </div>
</section>

<div class="stp-container">

    <!-- Section 1: Authority Introduction -->
    <section class="stp-section" id="quote-sec">
        <h2 class="stp-section-heading">Professional Relocation Services in Sitapur</h2>
        <p class="stp-intro-p">Trusted household shifting and agro-industrial logistics solutions tailored for families, sugar mill engineers, and healthcare staff across Sitapur.</p>

        <p>Sitapur holds an illustrious position in the historical and economic landscape of Central Uttar Pradesh, situated directly along National Highway 30 just 85 kilometers north of the state capital Lucknow. Renowned internationally for its landmark healthcare heritage (housing the world-famous Sitapur Eye Hospital established in 1927, which pioneered mobile ophthalmic surgery across northern India), Sitapur is equally celebrated for its immense sugarcane agro-industrial complex. With mega sugar processing plants and distilleries operating at Hargaon, Biswan, and Ramgarh, alongside plywood manufacturing units and the revered spiritual pilgrimage circuit of Naimisharanya (Neemsar), Sitapur accommodates a diverse population of doctors, industrial executives, agro-traders, and working families requiring dependable moving assistance.</p>

        <p>Positioned along the four-lane NH-30 corridor linking Lucknow, Lakhimpur Kheri, Shahjahanpur, and Bareilly, Sitapur offers unmatched regional connectivity. Whether you are shifting your family home across central residential neighborhoods like Civil Lines, Eye Hospital Road, and Arya Nagar, moving to planned suburban enclaves like Vaidehi Vatika and Transport Nagar, or arranging inter-state employee transfers toward Delhi NCR, Bihar, or Jharkhand, Shree Ashirwad Packers and Movers provides seasoned logistics personnel, premium packaging materials, and dependable containerized trucks.</p>

        <div class="stp-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods truck loading in Sitapur by Shree Ashirwad Packers and Movers">
            <p class="stp-image-caption">Meticulous truck loading and systematic inventory verification by Shree Ashirwad Packers and Movers in Sitapur.</p>
        </div>

        <p>Our dedicated moving technicians in Sitapur understand the specific operational requirements of local and regional shifting. From dismantling intricate wooden furniture, wardrobes, and modular kitchen units to safeguarding delicate chinaware, flat-screen televisions, and home appliances with heavy-duty air bubble wraps and customized wooden crates, our team ensures complete physical and transit protection. We supervise each consignment with trained packing foremen who maintain punctual moving timelines across both congested central bazaar streets and newly expanding expressway townships. For corporate headquarters relocation and inter-state logistics support, visit our <a href="<?php echo SITE_BASE_URL; ?>/">company HQ hub page</a>.</p>
    </section>

    <!-- Section 2: Comprehensive Moving Capabilities -->
    <section class="stp-section">
        <h2 class="stp-section-heading">Tailored Moving Solutions for Sitapur Residents</h2>
        <p class="stp-intro-p">Comprehensive packing, careful transit, and on-site reassembly designed to meet diverse relocation requirements.</p>

        <div class="stp-grid-2">
            <div class="stp-card">
                <h3>Residential Home Relocation</h3>
                <p>Complete household shifting services covering 1 BHK, 2 BHK, 3 BHK, and expansive family residences. We deliver multi-layered packing using multi-ply corrugated cartons, bubble wrap, corner guards, and edge protectors to safeguard every valuable possession.</p>
            </div>
            <div class="stp-card">
                <h3>Sugar Mill & Agro-Industrial Logistics</h3>
                <p>Dedicated relocation services for engineers, managers, and administrative officers stationed at sugar processing complexes across Hargaon, Biswan, and Ramgarh. We ensure priority booking, fragile chinaware crating, and direct residential delivery.</p>
            </div>
            <div class="stp-card">
                <h3>Hospital & Medical Staff Shifting</h3>
                <p>Specialized institutional transfers for ophthalmologists, surgeons, resident doctors, and nursing staff affiliated with Sitapur Eye Hospital and district health facilities. We provide delicate packaging for medical reference collections and sensitive equipment.</p>
            </div>
            <div class="stp-card">
                <h3>Express Automobile Transport</h3>
                <p>Safe and verified car and two-wheeler transportation using enclosed container carriers. Every automobile is secured with wheel chocks, heavy-duty tie-downs, dust-proof body sheets, and full transit insurance coverage.</p>
            </div>
        </div>

        <p>Our operational supervisors oversee every single consignment personally. Before a single box is loaded into our container truck, our team compiles an exhaustive inventory manifest detailing the physical state and item description of every package, guaranteeing total transparency upon final delivery.</p>

        <div class="stp-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="High grade multi layer packaging materials deployed in Sitapur">
            <p class="stp-image-caption">High-density bubble wrap, heavy-duty cartons, and stretch film protecting household belongings in Sitapur.</p>
        </div>

        <p>We deploy specialized packing methods for sensitive household assets. Glass tabletops, flat-screen LED televisions, kitchen chinaware, refrigerator coils, and antique family heirlooms receive individualized shock-absorbing packaging to prevent any structural damage during highway transit.</p>
    </section>

    <!-- Section 3: Transparent Pricing Estimates -->
    <section class="stp-section">
        <h2 class="stp-section-heading">Transparent Packers and Movers Charges in Sitapur</h2>
        <p class="stp-intro-p">Clear, all-inclusive pricing estimates with zero hidden fees or unexpected destination surcharges.</p>

        <div class="stp-table-wrap">
            <table class="stp-table">
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

        <div class="stp-highlight-box">
            <h4>Commercial & Healthcare Relocation Billing Support</h4>
            <p>We furnish complete GST-compliant invoices, official consignment notes (bilty), transit insurance policies, and itemized moving cost sheets to assist government officials, hospital medical staff, and agro-enterprise managers with prompt corporate reimbursement claims.</p>
        </div>
    </section>

    <!-- Section 4: Operational Workflow & Packaging -->
    <section class="stp-section">
        <h2 class="stp-section-heading">Step-by-Step Relocation Process in Sitapur</h2>
        <p class="stp-intro-p">A methodical approach ensuring maximum safety, punctual arrival, and complete stress relief.</p>

        <div class="stp-grid-3">
            <div class="stp-card">
                <h3>1. Pre-Move Assessment</h3>
                <p>We conduct a thorough on-site or digital inventory review to evaluate box requirements, specialty crating needs, and vehicle dimensions, presenting an accurate estimate.</p>
            </div>
            <div class="stp-card">
                <h3>2. Professional Packing</h3>
                <p>Our crew arrives on moving day equipped with virgin bubble wrap, 5-ply cartons, foam sheets, and sealing tape, expertly packing each item room by room.</p>
            </div>
            <div class="stp-card">
                <h3>3. Secure Loading</h3>
                <p>Heavy wooden furniture, mattresses, and metal appliances are loaded first to establish a stable foundation, followed by boxed fragile items arranged with protective shock pads.</p>
            </div>
            <div class="stp-card">
                <h3>4. GPS Highway Transit</h3>
                <p>Your consignment is transported in closed weatherproof container trucks driven by vetted long-haul drivers across NH-30 and Central UP expressway networks.</p>
            </div>
            <div class="stp-card">
                <h3>5. Careful Unloading</h3>
                <p>Upon arrival at your destination residence, our workers carefully offload every box and piece of furniture, placing items into their designated rooms per your floor plan.</p>
            </div>
            <div class="stp-card">
                <h3>6. Assembly & Setup</h3>
                <p>We reassemble bed frames, study desks, and modular dining tables, positioning heavy appliances so your family can comfortably settle in without delay.</p>
            </div>
        </div>

        <p>Our moving crews include skilled carpentry technicians equipped with power tools to dismantle complex wardrobe sets, hydraulic beds, and wall-mounted shelving without causing damage to fixtures or wood joinery.</p>

        <div class="stp-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture dismantling and wrapping in Sitapur">
            <p class="stp-image-caption">Trained technicians dismantling modular furniture and securing corners with impact protection.</p>
        </div>

        <p>Following unpacking, we collect discarded packaging materials and empty carton boxes, leaving your newly occupied home orderly, functional, and ready for living.</p>
    </section>

    <!-- Section 5: Coverage in Key Localities -->
    <section class="stp-section">
        <h2 class="stp-section-heading">Serving Neighborhoods & Industrial Belts in Sitapur</h2>
        <p class="stp-intro-p">Extensive network coverage throughout residential sectors, historical commercial avenues, and expressway corridors.</p>

        <div class="stp-grid-3">
            <div class="stp-card">
                <h3>Civil Lines & Collectorate</h3>
                <p>Premier administrative hub featuring district courts, government quarters, and executive bungalows demanding high-standard residential shifting care.</p>
            </div>
            <div class="stp-card">
                <h3>Eye Hospital Road & Arya Nagar</h3>
                <p>Historic healthcare enclave hosting doctors, hospital administrators, and central commercial stores with regular local shifting needs.</p>
            </div>
            <div class="stp-card">
                <h3>Vaidehi Vatika & Transport Nagar</h3>
                <p>Well-planned residential colonies with wide avenues, housing government employees, educators, and commercial families with active shifting demands.</p>
            </div>
            <div class="stp-card">
                <h3>Hargaon Sugar Mill Township</h3>
                <p>Agro-industrial town anchored by Oudh Sugar Mills, accommodating industrial engineers, technical staff, and sugar agro-enterprise workers.</p>
            </div>
            <div class="stp-card">
                <h3>Naimisharanya Pilgrimage Corridor</h3>
                <p>Sacred temple enclave featuring bustling ashrams, pilgrim guest houses, and residential priest colonies requiring respectful packing and transport services.</p>
            </div>
            <div class="stp-card">
                <h3>NH-30 Lucknow Highway Belt</h3>
                <p>Key transit artery linking Sitapur with the state capital, featuring newly constructed gated housing colonies, godowns, and commercial establishments.</p>
            </div>
        </div>

        <p>Our local Sitapur moving teams are intimately familiar with city traffic schedules, expressway toll plazas, and local municipal entry regulations. Whether navigating central bazaar lanes or accessing high-rise gated societies, our teams arrive prepared with appropriate trolley dollies and floor protectors.</p>

        <div class="stp-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Sitapur">
            <p class="stp-image-caption">Reliable covered container vehicles delivering door-to-door relocation across Sitapur.</p>
        </div>

        <p>Our modern fleet of fully weatherproof closed container trucks protects your goods from highway dust, rain, and transit vibration, ensuring every consignment arrives in mint condition.</p>

        <p>Choose Shree Ashirwad Packers and Movers for a professional, courteous, and timely relocation experience in Sitapur and across Uttar Pradesh.</p>
    </section>

    <!-- Section 6: Regional Hub Connections -->
    <section class="stp-section">
        <h2 class="stp-section-heading">Connected UP Hubs and Corridors</h2>
        <p class="stp-intro-p">Direct highway links connecting Sitapur with primary industrial and commercial centers.</p>

        <div class="stp-grid-3">
            <div class="stp-card">
                <h3><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow">Lucknow Hub</a></h3>
                <p>Immediate 1.5-hour four-lane highway corridor via NH-30 connecting Sitapur directly with the state capital and airport.</p>
            </div>
            <div class="stp-card">
                <h3><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-shahjahanpur">Shahjahanpur Hub</a></h3>
                <p>Direct 1.5-hour northwest highway link via NH-30 connecting Sitapur with Shahjahanpur industrial and thermal power hubs.</p>
            </div>
            <div class="stp-card">
                <h3><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bareilly">Bareilly Hub</a></h3>
                <p>Direct 2.5-hour northern highway corridor linking Sitapur with Bareilly's commercial and healthcare centers.</p>
            </div>
            <div class="stp-card">
                <h3><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hardoi">Hardoi Hub</a></h3>
                <p>Central UP agricultural transit link connecting Sitapur with Hardoi sugar processing and Sandila industrial estates.</p>
            </div>
            <div class="stp-card">
                <h3><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kanpur">Kanpur Hub</a></h3>
                <p>Vital highway corridor via Lucknow connecting Sitapur agro-trade with Kanpur commercial and leather capital.</p>
            </div>
            <div class="stp-card">
                <h3><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ayodhya">Ayodhya Hub</a></h3>
                <p>Central UP eastern corridor providing seamless logistics access to Ayodhya and Purvanchal pilgrimage centers.</p>
            </div>
        </div>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section class="stp-section">
        <h2 class="stp-section-heading">Frequently Asked Questions - Sitapur Movers</h2>
        <p class="stp-intro-p">Helpful answers regarding packing schedules, vehicle safety, and booking procedures.</p>

        <div class="stp-faq-item">
            <h3>How early should I book packers and movers in Sitapur?</h3>
            <p>It is best to reserve your moving slot 3 to 4 days ahead for local residential shifting within Sitapur, and 5 to 7 days in advance for long-distance inter-state moves or month-end moving dates.</p>
        </div>

        <div class="stp-faq-item">
            <h3>Do you operate on Sundays and public holidays?</h3>
            <p>Yes, our moving crews are available 7 days a week, including weekends and public holidays, allowing you to relocate conveniently without taking time off work.</p>
        </div>

        <div class="stp-faq-item">
            <h3>Can I track my moving truck during transit?</h3>
            <p>Yes, all our long-distance container vehicles are equipped with GPS tracking systems, and our dedicated move coordinator provides regular location updates until delivery.</p>
        </div>

        <div class="stp-faq-item">
            <h3>How do I receive a written estimate for my move in Sitapur?</h3>
            <p>Call our direct customer support at +91 93344 04050 or complete our online inquiry form. We will arrange a free on-site or digital inventory assessment and deliver an immediate itemized quote.</p>
        </div>

        <div class="stp-faq-item">
            <h3>Can you transport cars and motorcycles safely from Sitapur to other states?</h3>
            <p>Yes, we operate enclosed automobile carrier containers and specialized hydraulic bike trailers. Vehicles are inspected, strapped with wheel stoppers, covered against highway dust, and tracked live from pickup to delivery across India.</p>
        </div>
    </section>

</div>

<?php require_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
