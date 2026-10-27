<?php
/**
 * Page: Packers and Movers in Kothrud Pune - Karve Road, Paud Road, Mayur Colony & Western Pune Cultural Hub
 * File: pages/packers-and-movers-in-kothrud-pune.php
 * URL Slug: /packers-and-movers-in-kothrud-pune
 */

if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__));
}
require_once ROOT_PATH . '/includes/config.php';

$page_title = 'Packers and Movers in Kothrud Pune | Reliable Household Shifting';
$page_description = 'Top packers and movers in Kothrud Pune. Dedicated home shifting across Karve Road, Paud Road, Mayur Colony, Dahanukar Colony, Chandani Chowk, and insured transit solutions.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-kothrud-pune';
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
        "name": "Shree Ashirwad Packers and Movers Kothrud",
        "image": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
        "@id": "https://shreeashirwadpackers.com/packers-and-movers-in-kothrud-pune#company",
        "url": "https://shreeashirwadpackers.com/packers-and-movers-in-kothrud-pune",
        "telephone": "+91 9835565233",
        "priceRange": "₹₹",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Karve Road, Near Mayur Colony Chowk",
            "addressLocality": "Kothrud, Pune",
            "addressRegion": "Maharashtra",
            "postalCode": "411038",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 18.5074,
            "longitude": 73.8077
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
                "name": "Pune",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-pune"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Kothrud",
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
        "name": "Packers and Movers Services in Kothrud Pune",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers Kothrud"
        },
        "serviceType": "Household Shifting, Traditional Family Relocation & Vehicle Transport",
        "areaServed": {
            "@type": "Place",
            "name": "Kothrud, Pune, Maharashtra"
        },
        "description": "Professional residential relocation, furniture disassembly, antique packing, and inter-city shifting services throughout Kothrud's established colonies."
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
                "name": "What are the packers and movers charges in Kothrud Pune?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local household shifting in Kothrud typically ranges from ₹3,200 to ₹5,500 for a 1 BHK, ₹5,500 to ₹9,800 for a 2 BHK, and ₹8,500 to ₹16,000 for a 3 BHK depending on items volume, elevator availability, and packing standards."
                }
            },
            {
                "@type": "Question",
                "name": "How do you manage shifting in older housing societies without elevators in Kothrud?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Many established societies in Mayur Colony and Dahanukar Colony have staircases without elevators. Our physically trained moving crews utilize stair-climbing gear, heavy-duty shoulder straps, and protective banister padding to carry heavy items safely."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide transit insurance for moves originating in Kothrud?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide 100% all-risk transit insurance for all domestic and long-distance household shifting, ensuring full monetary protection against road hazards or accidental loss."
                }
            },
            {
                "@type": "Question",
                "name": "Can you relocate household goods from Kothrud to Mumbai or Bangalore?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, with Chandani Chowk providing direct access to the Mumbai-Bangalore Highway (NH-48), we provide daily container truck services connecting Kothrud to Mumbai, Thane, Navi Mumbai, Bangalore, and across India."
                }
            },
            {
                "@type": "Question",
                "name": "How do I book a home survey for my relocation in Kothrud?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Simply call our Pune team at +91 9835565233 or submit our online inquiry form to schedule a free in-home inventory assessment and receive an itemized, transparent quotation."
                }
            }
        ]
    }
    </script>

    <style>
        .krd-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.65;
        }
        .krd-header {
            background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%);
            color: #ffffff;
            padding: 45px 25px;
            border-radius: 12px;
            margin-bottom: 30px;
            text-align: center;
        }
        .krd-header h1 {
            font-size: 2.3rem;
            margin-bottom: 15px;
            font-weight: 700;
            line-height: 1.25;
            color: #ffffff;
        }
        .krd-header p {
            font-size: 1.15rem;
            max-width: 860px;
            margin: 0 auto 20px;
            color: #e2e8f0;
        }
        .krd-btn-wrap {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .krd-btn-primary {
            background: #e11d48;
            color: #ffffff;
            padding: 12px 28px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            transition: background 0.2s ease;
        }
        .krd-btn-primary:hover {
            background: #be123c;
        }
        .krd-btn-secondary {
            background: #f8fafc;
            color: #0f172a;
            padding: 12px 28px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            transition: background 0.2s ease;
        }
        .krd-btn-secondary:hover {
            background: #e2e8f0;
        }
        .krd-section {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 35px 30px;
            margin-bottom: 30px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .krd-section-heading {
            font-size: 1.85rem;
            color: #0f172a;
            margin-bottom: 12px;
            font-weight: 700;
            position: relative;
            padding-bottom: 12px;
            text-align: center;
        }
        .krd-section-heading::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 70px;
            height: 3px;
            background: #e11d48;
            border-radius: 2px;
        }
        .krd-intro-p {
            font-size: 1.05rem;
            color: #475569;
            margin-bottom: 25px;
            text-align: center;
        }
        .krd-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
            margin: 25px 0;
        }
        .krd-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        .krd-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 24px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .krd-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.07);
        }
        .krd-card h3 {
            font-size: 1.25rem;
            color: #1e3a8a;
            margin-bottom: 10px;
            font-weight: 600;
        }
        .krd-card p {
            font-size: 0.98rem;
            color: #475569;
            margin-bottom: 0;
        }
        .krd-image-container {
            max-width: 580px;
            margin: 28px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.12);
            border: 1px solid #cbd5e1;
            background: #f8fafc;
        }
        .krd-image-container img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
        }
        .krd-image-caption {
            padding: 10px 15px;
            font-size: 0.88rem;
            color: #475569;
            background: #f1f5f9;
            text-align: center;
            border-top: 1px solid #e2e8f0;
            margin: 0;
        }
        .krd-table-responsive {
            overflow-x: auto;
            margin: 25px 0;
        }
        .krd-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
            background: #ffffff;
        }
        .krd-table th, .krd-table td {
            border: 1px solid #e2e8f0;
            padding: 12px 14px;
            text-align: left;
        }
        .krd-table th {
            background: #1e3a8a;
            color: #ffffff;
            font-weight: 600;
        }
        .krd-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .krd-highlight-box {
            background: #eff6ff;
            border-left: 4px solid #1e3a8a;
            padding: 20px 22px;
            border-radius: 0 8px 8px 0;
            margin: 25px 0;
        }
        .krd-faq-item {
            border-bottom: 1px solid #e2e8f0;
            padding: 20px 0;
        }
        .krd-faq-item:last-child {
            border-bottom: none;
        }
        .krd-faq-item h3 {
            font-size: 1.15rem;
            color: #0f172a;
            margin-bottom: 8px;
            font-weight: 600;
        }
        .krd-faq-item p {
            color: #475569;
            margin-bottom: 0;
            font-size: 0.96rem;
        }
        @media (max-width: 768px) {
            .krd-grid-2, .krd-grid-3 {
                grid-template-columns: 1fr;
            }
            .krd-header {
                padding: 30px 15px;
            }
            .krd-header h1 {
                font-size: 1.75rem;
            }
            .krd-section {
                padding: 22px 16px;
            }
            .krd-section-heading {
                font-size: 1.45rem;
            }
        }
    </style>
</head>
<body>

<?php require_once ROOT_PATH . '/includes/header.php'; ?>

<div class="krd-wrap">

    <!-- Header Hero Banner -->
    <header class="krd-header">
        <h1>Packers and Movers in Kothrud Pune</h1>
        <p>Reliable household shifting, antique furniture handling, and professional packing services across Karve Road, Paud Road, Mayur Colony, Dahanukar Colony, and Chandani Chowk.</p>
        <div class="krd-btn-wrap">
            <a href="tel:+919835565233" class="krd-btn-primary">Call +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="krd-btn-secondary">Check Tariff Rates</a>
        </div>
    </header>

    <!-- Section 1: Locality Overview & Living in Kothrud -->
    <section class="krd-section">
        <h2 class="krd-section-heading">Trusted Relocation Services in Kothrud Pune</h2>
        <p class="krd-intro-p">Dedicated home moving solutions designed for traditional family residences, independent bungalows, and modern apartment societies across Western Pune.</p>

        <p>Kothrud is one of Pune's most culturally vibrant, historically rich, and highly developed residential suburbs. Located in the southwestern sector of Pune between Karve Road and Paud Road, Kothrud holds a storied reputation as one of Asia's fastest-growing residential localities during the late 20th century, and it remains today a premier choice for long-term Pune families, academicians, and retired professionals.</p>

        <div class="krd-highlight-box">
            <p><strong>Traditional Colony & High-Rise Care:</strong> Whether shifting within established cooperative housing societies in Mayur Colony or new multi-story complexes near Chandani Chowk, our crews adapt their equipment for narrow access roads, staircases without elevators, and strict society moving hours.</p>
        </div>

        <p>At <strong>Shree Ashirwad Packers and Movers</strong>, we deliver customized, compassionate, and dependable relocation services tailored to Kothrud's unique residential landscape. We understand that moves in Kothrud often involve cherished family homes containing heavy solid-wood furniture, ancestral artifacts, extensive libraries, home temples (mandirs), and sensitive kitchen appliances that demand extraordinary care.</p>

        <p>Our experienced team takes pride in providing end-to-end relocation support. We provide physical pre-move walkthroughs, supply multi-layer protective packaging, dismantle large modular furniture, navigate tight colonial society stairwells, and transport your goods safely to your new address.</p>

        <div class="krd-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods truck loading in Kothrud Pune">
            <p class="krd-image-caption">Professional moving crews packing, cushioning, and loading residential goods into covered container trucks in Kothrud.</p>
        </div>

        <p>We work in seamless alignment with our regional authority hub for <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-pune">Packers and Movers in Pune</a>, giving Kothrud residents direct access to state-wide and nationwide transport corridors via Chandani Chowk and the Mumbai-Bangalore Highway (NH-48). From supplying specialized wardrobe boxes and heavy-duty bubble rolls to managing parking clearance along busy Paud Road, our team handles every operational detail.</p>

        <p>Whether you are shifting locally within Kothrud, moving to a nearby western suburb like Baner or Wakad, or relocating across India to metropolitan or regional destinations, Shree Ashirwad Packers and Movers guarantees the warmth, professionalism, punctuality, and complete integrity that make moving day stress-free for your entire household.</p>
    </section>

    <!-- Section 2: Comprehensive Moving Services -->
    <section class="krd-section">
        <h2 class="krd-section-heading">Our Comprehensive Relocation Services in Kothrud</h2>
        <p class="krd-intro-p">Full-spectrum moving and packing capabilities adapted to every residential and corporate shifting requirement.</p>

        <div class="krd-grid-3">
            <div class="krd-card">
                <h3>Household Goods Relocation</h3>
                <p>Systematic room-wise packing, heavy furniture cushioning, mandir dismantling, and complete setup for 1 BHK, 2 BHK, 3 BHK, and row houses.</p>
            </div>
            <div class="krd-card">
                <h3>Office & Commercial Shifting</h3>
                <p>Secure transport for coaching academies, corporate branch offices, clinic setups, and administrative furniture with minimal downtime.</p>
            </div>
            <div class="krd-card">
                <h3>Two-Wheeler & Car Transport</h3>
                <p>Protected covered carrier transport with wheel chocks and transit insurance for personal scooters, motorbikes, sedans, and family SUVs.</p>
            </div>
            <div class="krd-card">
                <h3>Inter-City & Interstate Moving</h3>
                <p>Regular long-distance container routes connecting Kothrud directly to Mumbai, Thane, Navi Mumbai, Bangalore, Hyderabad, and Eastern India.</p>
            </div>
            <div class="krd-card">
                <h3>Carpentry & Handyman Services</h3>
                <p>Skilled master carpenters for taking apart and setting up modular beds, heavy wardrobes, wall mirrors, TV mounts, and electrical appliances.</p>
            </div>
            <div class="krd-card">
                <h3>Secure Short & Long-Term Storage</h3>
                <p>Dry, pest-controlled, CCTV-monitored warehouse facilities available for temporary furniture storage during home renovations or travel.</p>
            </div>
        </div>

        <div class="krd-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Packaging materials in Kothrud Pune">
            <p class="krd-image-caption">Reinforced corrugated cartons, dense bubble roll padding, and stretch wrap securing delicate household items.</p>
        </div>

        <p>Our packing crews use only virgin, five-ply corrugated boxes, heavy air-bubble cushioning, edge protection caps, and moisture-resistant stretch film. Fragile glassware, porcelain dishes, decorative ceramics, and family heirlooms are individually wrapped and boxed with protective paper fill.</p>

        <p>We also provide comprehensive unpacking assistance, helping elderly residents and busy working families place their heavy furniture and unpack cartons so their new house feels like home immediately.</p>
    </section>

    <!-- Section 3: Shifting Charges & Transparent Costing -->
    <section class="krd-section">
        <h2 class="krd-section-heading">Packers and Movers Charges in Kothrud Pune</h2>
        <p class="krd-intro-p">Fair, transparent, and honest pricing with zero unannounced surcharges or unexpected add-ons.</p>

        <p>Shifting charges in Kothrud are determined by the volume of belongings, packing tier requested, floor levels at origin and destination, elevator availability, and overall transport distance. Below is our standard rate table for relocations within Pune and long-distance moves from Kothrud:</p>

        <div class="krd-table-responsive">
            <table class="krd-table">
                <thead>
                    <tr>
                        <th>Residence Type</th>
                        <th>Packing Material Cost</th>
                        <th>Labor & Loading Fee</th>
                        <th>Local Shifting (Within Pune)</th>
                        <th>Inter-City Relocation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment</strong></td>
                        <td>₹1,200 - ₹2,000</td>
                        <td>₹1,500 - ₹2,200</td>
                        <td>₹3,200 - ₹5,500</td>
                        <td>₹8,500 - ₹16,000</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Apartment</strong></td>
                        <td>₹2,200 - ₹3,800</td>
                        <td>₹2,200 - ₹3,500</td>
                        <td>₹5,500 - ₹9,800</td>
                        <td>₹14,500 - ₹24,500</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Apartment</strong></td>
                        <td>₹3,500 - ₹5,800</td>
                        <td>₹3,200 - ₹4,800</td>
                        <td>₹8,500 - ₹16,000</td>
                        <td>₹20,000 - ₹34,000</td>
                    </tr>
                    <tr>
                        <td><strong>Row House / Bungalow</strong></td>
                        <td>₹5,200 - ₹8,800</td>
                        <td>₹4,500 - ₹6,800</td>
                        <td>₹15,000 - ₹24,000</td>
                        <td>₹29,000 - ₹50,000</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler Transport</strong></td>
                        <td>₹600 - ₹1,000</td>
                        <td>₹500 - ₹800</td>
                        <td>₹1,500 - ₹2,500</td>
                        <td>₹3,800 - ₹7,500</td>
                    </tr>
                    <tr>
                        <td><strong>Four-Wheeler Car Carrier</strong></td>
                        <td>₹1,200 - ₹2,000</td>
                        <td>₹800 - ₹1,500</td>
                        <td>₹2,800 - ₹4,500</td>
                        <td>₹9,000 - ₹19,000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="krd-highlight-box">
            <p><strong>Clear Written Quotes:</strong> Our written quotations include high-grade packing cartons, bubble wrap, carpenter charges, transport vehicle freight, labor loading and unloading, and all highway toll taxes. We stand firmly behind our zero-hidden-fee guarantee.</p>
        </div>

        <p>To calculate customized long-distance relocation rates, consult our online <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">Packers and Movers Charges Calculator</a>. We provide clear, itemized contracts so you know exactly what is included prior to booking.</p>

        <p>All interstate shipments are coordinated through our centralized logistics division at <a href="<?php echo SITE_BASE_URL; ?>/">Packers and Movers in Ranchi</a>, ensuring continuous tracking, regular driver check-ins, and secure arrival at your destination.</p>
    </section>

    <!-- Section 4: Systematic Shifting Process -->
    <section class="krd-section">
        <h2 class="krd-section-heading">Our Proven 6-Step Shifting Methodology in Kothrud</h2>
        <p class="krd-intro-p">A methodical approach guaranteeing meticulous care, strict punctuality, and complete peace of mind.</p>

        <div class="krd-grid-3">
            <div class="krd-card">
                <h3>1. Initial Pre-Move Survey</h3>
                <p>We review your household inventory in person or digitally to determine required truck sizing, packing supplies, and stairwell access.</p>
            </div>
            <div class="krd-card">
                <h3>2. Careful Packing</h3>
                <p>Trained packers wrap your goods room by room using air-bubble wrap, edge protectors, and durable cartons, clearly labeling every box.</p>
            </div>
            <div class="krd-card">
                <h3>3. Furniture Carpentry</h3>
                <p>Heavy teakwood beds, modular almirahs, dining tables, and delicate mandirs are carefully disassembled and wrapped with quilted padding.</p>
            </div>
            <div class="krd-card">
                <h3>4. Safe Loading & Transit</h3>
                <p>Items are loaded into clean, covered container trucks using safety straps to eliminate vibration and friction on Pune city roads and highways.</p>
            </div>
            <div class="krd-card">
                <h3>5. Unloading & Setup</h3>
                <p>Our team unloads every carton into the appropriate room at your new home, systematically reassembling all dismantled furniture items.</p>
            </div>
            <div class="krd-card">
                <h3>6. Move Handover</h3>
                <p>Our move supervisor reviews the item inventory checklist with you to verify that every numbered package has arrived in immaculate condition.</p>
            </div>
        </div>

        <div class="krd-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture dismantling and carpentry in Kothrud">
            <p class="krd-image-caption">Expert carpenters dismantling and packaging large wooden beds and wardrobes for safe transit in Kothrud.</p>
        </div>

        <p>Our structured moving process protects both your belongings and your physical property. Our workers take care not to scratch walls, chip door frames, or scuff stair handrails during heavy carrying operations.</p>

        <p>Whether you are shifting locally within Kothrud or moving to another state, our organized methodology guarantees a seamless transition into your new home.</p>
    </section>

    <!-- Section 5: Why Choose Shree Ashirwad in Kothrud -->
    <section class="krd-section">
        <h2 class="krd-section-heading">Why Choose Shree Ashirwad in Kothrud Pune?</h2>
        <p class="krd-intro-p">Proven reliability, trained staff, and respectful moving practices tailored for Kothrud's established neighborhoods.</p>

        <div class="krd-grid-2">
            <div class="krd-card">
                <h3>Decades of Local Familiarity</h3>
                <p>Our crews have deep operational knowledge of Kothrud's colonies, including Karve Road, Paud Road, Mayur Colony, Dahanukar Colony, and Chandani Chowk.</p>
            </div>
            <div class="krd-card">
                <h3>All-Weather Container Trucks</h3>
                <p>Our covered container vehicles keep your household goods, electronics, and books completely dry and dust-free during transit.</p>
            </div>
            <div class="krd-card">
                <h3>Comprehensive Transit Insurance</h3>
                <p>We provide full all-risk transit insurance policies to give you complete financial protection against unexpected road accidents or severe weather.</p>
            </div>
            <div class="krd-card">
                <h3>Dedicated Move Supervisor</h3>
                <p>An experienced on-site supervisor manages your entire move, orchestrates loading operations, and answers all your questions promptly.</p>
            </div>
        </div>

        <div class="krd-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Kothrud">
            <p class="krd-image-caption">Reliable covered container vehicles delivering safe door-to-door household shifting across Kothrud.</p>
        </div>

        <p>Our commitment to honest pricing, punctual arrival, and courteous service has earned us the lasting trust of generations of Kothrud families. We treat every household item with the same respect and care that we would give our own.</p>

        <p>Contact our customer care team today to discuss your moving schedule, book a complimentary pre-move survey, and receive an all-inclusive written estimate.</p>
    </section>

    <!-- Section 6: Sister Localities & Connected Corridors -->
    <section class="krd-section">
        <h2 class="krd-section-heading">Sister Localities & Connected Pune Corridors</h2>
        <p class="krd-intro-p">Fast and convenient transit links connecting Kothrud with major residential hubs and business districts across Pune.</p>

        <div class="krd-grid-3">
            <div class="krd-card">
                <h3><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-baner-pune">Baner Hub</a></h3>
                <p>Northern residential and dining corridor connected directly via the western bypass highway from Chandani Chowk.</p>
            </div>
            <div class="krd-card">
                <h3><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-wakad-pune">Wakad Hub</a></h3>
                <p>High-growth residential neighbor along the Mumbai-Bangalore Highway offering modern apartment communities.</p>
            </div>
            <div class="krd-card">
                <h3><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hinjewadi-pune">Hinjewadi Hub</a></h3>
                <p>Major western IT corridor housing Rajiv Gandhi Infotech Park Phase 1-3, reachable in 25 minutes via bypass.</p>
            </div>
            <div class="krd-card">
                <h3><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hadapsar-pune">Hadapsar Hub</a></h3>
                <p>Eastern commercial township center housing Magarpatta Cybercity and prominent industrial zones.</p>
            </div>
            <div class="krd-card">
                <h3><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kharadi-pune">Kharadi Hub</a></h3>
                <p>Eastern counterpart IT corridor anchored by EON Free Zone and World Trade Center Pune.</p>
            </div>
            <div class="krd-card">
                <h3><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-mumbai">Mumbai Hub</a></h3>
                <p>Direct 3.5-hour expressway connectivity via Chandani Chowk linking Kothrud directly to Mumbai's business centers.</p>
            </div>
        </div>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section class="krd-section">
        <h2 class="krd-section-heading">Frequently Asked Questions - Kothrud Movers</h2>
        <p class="krd-intro-p">Clear answers regarding moving permissions, pricing estimates, antique furniture handling, and vehicle transportation.</p>

        <div class="krd-faq-item">
            <h3>What are the packers and movers charges in Kothrud Pune?</h3>
            <p>Local household shifting in Kothrud typically ranges from ₹3,200 to ₹5,500 for a 1 BHK, ₹5,500 to ₹9,800 for a 2 BHK, and ₹8,500 to ₹16,000 for a 3 BHK depending on items volume, elevator availability, and packing standards.</p>
        </div>

        <div class="krd-faq-item">
            <h3>How do you manage shifting in older housing societies without elevators in Kothrud?</h3>
            <p>Many established societies in Mayur Colony and Dahanukar Colony have staircases without elevators. Our physically trained moving crews utilize stair-climbing gear, heavy-duty shoulder straps, and protective banister padding to carry heavy items safely.</p>
        </div>

        <div class="krd-faq-item">
            <h3>Do you provide transit insurance for moves originating in Kothrud?</h3>
            <p>Yes, we provide 100% all-risk transit insurance for all domestic and long-distance household shifting, ensuring full monetary protection against road hazards or accidental loss.</p>
        </div>

        <div class="krd-faq-item">
            <h3>Can you relocate household goods from Kothrud to Mumbai or Bangalore?</h3>
            <p>Yes, with Chandani Chowk providing direct access to the Mumbai-Bangalore Highway (NH-48), we provide daily container truck services connecting Kothrud to Mumbai, Thane, Navi Mumbai, Bangalore, and across India.</p>
        </div>

        <div class="krd-faq-item">
            <h3>How do I book a home survey for my relocation in Kothrud?</h3>
            <p>Simply call our Pune team at +91 9835565233 or submit our online inquiry form to schedule a free in-home inventory assessment and receive an itemized, transparent quotation.</p>
        </div>
    </section>

</div>

<?php require_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
