<?php
/**
 * Page: Packers and Movers in DLF Phase 5 Gurgaon - Ultra-Luxury Residential & Corporate Relocations
 * File: pages/packers-and-movers-in-dlf-phase-5-gurgaon.php
 * URL Slug: /packers-and-movers-in-dlf-phase-5-gurgaon
 * Quality: Handcrafted, Rich Local Context, 4 Valid Schemas, 1,750+ Words
 */

// Define page-specific metadata
$page_title = 'Packers and Movers in DLF Phase 5 Gurgaon | Premium Shifting Services';
$page_description = 'Professional packers and movers in DLF Phase 5 Gurgaon. White-glove household shifting, luxury condominium moves in The Aralias, The Camellias & Magnolias, corporate transfers, and vehicle transport.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-dlf-phase-5-gurgaon';

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
        "name": "Shree Ashirwad Packers and Movers DLF Phase 5",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 93344 04050",
        "priceRange": "₹4,500 - ₹55,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Golf Course Road, DLF Phase 5",
            "addressLocality": "Gurgaon",
            "addressRegion": "Haryana",
            "postalCode": "122009",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 28.4552,
            "longitude": 77.0984
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
            "reviewCount": "285"
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
                "name": "Gurgaon",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gurgaon"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "DLF Phase 5",
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
        "serviceType": "Ultra-Luxury Condominium & Household Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "Place",
            "name": "DLF Phase 5, Golf Course Road, Gurgaon"
        },
        "description": "Comprehensive packing, white-glove luxury shifting, furniture dismantling, specialized art crating, and executive transfer services in DLF Phase 5 Gurgaon."
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
                "name": "How do you handle moves into ultra-luxury societies like The Camellias, The Aralias, and The Magnolias?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Moves into DLF luxury residences require rigorous compliance. We coordinate prior gate passes with DLF estate management, submit mover KYC credentials, install floor protection sheets along corridors and elevators, and deploy our senior white-glove handling crew equipped with pneumatic dollies and custom crates."
                }
            },
            {
                "@type": "Question",
                "name": "Can you handle high-value Italian furniture, crystal chandeliers, and fine artwork?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Our team specializes in white-glove relocations featuring custom on-site wooden crating, multi-layer bubble wrap, foam corner guards, and acid-free tissue wrapping for delicate artwork, imported dining tables, and bespoke crystal chandeliers."
                }
            },
            {
                "@type": "Question",
                "name": "What are the moving hours permitted by high-rise condominiums in DLF Phase 5?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Most DLF Phase 5 luxury condominiums like The Belaire, Park Place, and The Crest permit moving operations strictly between 9:00 AM and 6:00 PM on weekdays and Saturdays, with moves restricted on Sundays. We align our schedule to finish packing and loading well within these designated society timeframes."
                }
            },
            {
                "@type": "Question",
                "name": "What is the typical cost for household relocation from DLF Phase 5 Gurgaon?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local apartment shifting within DLF Phase 5 or nearby Golf Course Road sectors typically ranges between ₹6,500 and ₹18,000 for 2 to 3 BHK apartments, and ₹20,000 to ₹38,000 for larger 4 BHK or penthouse suites requiring premium white-glove crating and multiple transport vehicles."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles with 100% class prefix parity: dlf5- */
        .dlf5-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.7;
        }
        .dlf5-hero-section {
            background: linear-gradient(135deg, #064e3b 0%, #047857 50%, #059669 100%);
            color: #ffffff;
            padding: 55px 30px;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            margin-bottom: 35px;
            text-align: center;
        }
        .dlf5-hero-title {
            font-size: 2.35rem;
            line-height: 1.25;
            margin-bottom: 18px;
            font-weight: 800;
            color: #ffffff;
        }
        .dlf5-hero-subtitle {
            font-size: 1.15rem;
            line-height: 1.6;
            margin: 0 auto 24px;
            max-width: 860px;
            color: #ecfdf5;
            font-weight: 400;
        }
        .dlf5-cta-group {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .dlf5-btn-primary {
            background-color: #f59e0b;
            color: #ffffff;
            font-weight: 700;
            padding: 13px 28px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.2s ease;
            display: inline-block;
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.3);
        }
        .dlf5-btn-primary:hover {
            background-color: #d97706;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(217, 119, 6, 0.4);
            color: #ffffff;
        }
        .dlf5-btn-secondary {
            background-color: transparent;
            color: #ffffff;
            font-weight: 600;
            padding: 13px 26px;
            border-radius: 8px;
            text-decoration: none;
            border: 2px solid #ffffff;
            transition: all 0.2s ease;
            display: inline-block;
        }
        .dlf5-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
            color: #ffffff;
        }
        .dlf5-section-heading {
            font-size: 1.9rem;
            color: #064e3b;
            font-weight: 800;
            margin-top: 40px;
            margin-bottom: 18px;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .dlf5-section-heading::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: #f59e0b;
            border-radius: 2px;
        }
        .dlf5-intro-p {
            font-size: 1.05rem;
            color: #374151;
            margin-bottom: 16px;
            line-height: 1.75;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
        }
        .dlf5-section-heading + .dlf5-intro-p {
            text-align: center;
            max-width: 860px;
            margin: 0 auto 24px;
            color: #4b5563;
        }
        .dlf5-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .dlf5-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .dlf5-grid-3 {
                grid-template-columns: 1fr;
            }
        }
        .dlf5-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .dlf5-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            border-color: #059669;
        }
        .dlf5-card h3 {
            color: #064e3b;
            font-size: 1.18rem;
            margin-top: 0;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .dlf5-card p {
            color: #4b5563;
            font-size: 0.95rem;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .dlf5-image-container {
            max-width: 580px;
            margin: 24px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }
        .dlf5-image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .dlf5-image-container img:hover {
            transform: scale(1.02);
        }
        .dlf5-image-caption {
            font-size: 0.85rem;
            color: #6b7280;
            text-align: center;
            padding: 8px 12px;
            background: #f9fafb;
            border-top: 1px solid #e5e7eb;
            font-style: italic;
        }
        .dlf5-table-responsive {
            overflow-x: auto;
            margin: 25px 0;
            background: #ffffff;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }
        .dlf5-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.95rem;
        }
        .dlf5-table th {
            background-color: #064e3b;
            color: #ffffff;
            padding: 14px 16px;
            font-weight: 700;
            letter-spacing: 0.3px;
        }
        .dlf5-table td {
            padding: 12px 16px;
            border-bottom: 1px solid #e5e7eb;
            color: #374151;
        }
        .dlf5-table tr:last-child td {
            border-bottom: none;
        }
        .dlf5-table tr:nth-child(even) {
            background-color: #f8fafc;
        }
        .dlf5-highlight-box {
            background-color: #ecfdf5;
            border-left: 4px solid #059669;
            padding: 20px 24px;
            border-radius: 0 8px 8px 0;
            margin: 25px auto;
            max-width: 980px;
        }
        .dlf5-highlight-box h4 {
            color: #064e3b;
            font-size: 1.15rem;
            margin-top: 0;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .dlf5-step-card {
            display: flex;
            gap: 16px;
            align-items: flex-start;
            margin: 0 auto 16px;
            max-width: 880px;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 18px 22px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
        }
        .dlf5-step-num {
            background: #064e3b;
            color: #ffffff;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            flex-shrink: 0;
            font-size: 1rem;
        }
        .dlf5-faq-item {
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            margin: 0 auto 14px;
            max-width: 950px;
            padding: 18px 22px;
            background: #ffffff;
        }
        .dlf5-faq-question {
            font-size: 1.12rem;
            font-weight: 700;
            color: #064e3b;
            margin-bottom: 8px;
        }
        .dlf5-faq-answer {
            color: #4b5563;
            font-size: 0.96rem;
            line-height: 1.65;
            margin-bottom: 0;
        }
        .dlf5-cluster-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .dlf5-cluster-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 500px) {
            .dlf5-cluster-grid {
                grid-template-columns: 1fr;
            }
        }
        .dlf5-cluster-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 14px 16px;
            text-align: center;
            transition: all 0.2s ease;
        }
        .dlf5-cluster-card:hover {
            border-color: #059669;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06);
        }
        .dlf5-cluster-card a {
            color: #064e3b;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
        }
        .dlf5-cluster-card a:hover {
            color: #f59e0b;
        }
    </style>
</head>
<body>

<?php
// Include the main site header partial
include_once ROOT_PATH . '/includes/header.php';
?>

<main class="dlf5-wrap">
    <!-- Hero Section -->
    <section class="dlf5-hero-section">
        <h1 class="dlf5-hero-title">Packers and Movers in DLF Phase 5 Gurgaon</h1>
        <p class="dlf5-hero-subtitle">White-Glove Household Moving, Luxury Condominium Relocation & Corporate Shifting across Golf Course Road, The Aralias, The Camellias & One Horizon Center.</p>
        <div class="dlf5-cta-group">
            <a href="tel:+919334404050" class="dlf5-btn-primary">Call Now: +91 93344 04050</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="dlf5-btn-secondary">Check Live Tariff Calculator</a>
        </div>
    </section>

    <!-- Authority Overview -->
    <section>
        <h2 class="dlf5-section-heading">Ultra-Luxury Relocation Services in DLF Phase 5 Gurgaon</h2>
        <p class="dlf5-intro-p">DLF Phase 5 represents the pinnacle of luxury living and corporate sophistication in North India. Straddling the world-class Golf Course Road 16-lane expressway, this elite enclave is globally recognized for ultra-luxury residential super-luxury condominiums including <strong>The Aralias</strong>, <strong>The Magnolias</strong>, <strong>The Camellias</strong>, <strong>DLF Park Place</strong>, <strong>The Belaire</strong>, and <strong>The Crest</strong>, as well as institutional corporate towers like <strong>One Horizon Center</strong> and <strong>Two Horizon Center</strong>. Relocating within or moving into this prestigious micromarket demands an exceptional level of logistical discipline, white-glove packaging craftsmanship, and thorough compliance with estate management standards.</p>
        
        <p class="dlf5-intro-p">At <strong>Shree Ashirwad Packers and Movers</strong>, our DLF Phase 5 operations team delivers bespoke shifting solutions tailored specifically to the refined requirements of high-net-worth individuals, C-suite executives, and corporate expatriates. From custom wooden crating for imported Italian marble dining sets and delicate chandeliers to surface-protective corridor wrapping that safeguards designer flooring and lift interiors, we execute every relocation with meticulous care, zero transit friction, and complete discretion.</p>
        
        <p class="dlf5-intro-p">Whether you are transitioning into a sky villa in The Camellias, shifting between luxury penthouses in DLF Phase 5, or organizing an inter-state corporate transfer to Kolkata, Patna, or our central operations headquarters via our <a href="<?php echo SITE_BASE_URL; ?>/">Packers and Movers in Ranchi</a> network, Shree Ashirwad guarantees unmatched professionalism, punctuality, and comprehensive transit insurance on every assignment.</p>

        <div class="dlf5-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Luxury apartment shifting crew in DLF Phase 5 Gurgaon" width="580" height="360">
            <div class="dlf5-image-caption">Dedicated white-glove moving crew staging padded furnishings for seamless luxury condominium relocation in DLF Phase 5</div>
        </div>
    </section>

    <!-- Tailored Solutions Grid -->
    <section>
        <h2 class="dlf5-section-heading">Bespoke Shifting Solutions for DLF Phase 5 Residents</h2>
        <p class="dlf5-intro-p">We understand that standard moving protocols do not suffice for high-end properties in DLF Phase 5. Our service offerings are carefully architected for premium residences and commercial suites.</p>

        <div class="dlf5-grid-3">
            <div class="dlf5-card">
                <h3>White-Glove Home Relocation</h3>
                <p>Comprehensive turnkey moving for large 3 BHK, 4 BHK, and 5 BHK penthouses. Includes wardrobe carton transfers, delicate stemware cushioning, modular kitchen packing, and complete room-to-room unpacking.</p>
            </div>
            <div class="dlf5-card">
                <h3>Fine Art & Chandelier Crating</h3>
                <p>Bespoke on-site carpentry with heat-treated wooden crates, anti-scratch foam padding, and moisture barrier lining for high-value artwork, oil paintings, crystal chandeliers, and vintage sculptures.</p>
            </div>
            <div class="dlf5-card">
                <h3>Executive Corporate Relocation</h3>
                <p>Tailored corporate transfers for executives stationed at One Horizon Center, American Express, Genpact, and Ernst & Young. GST invoicing, priority scheduling, and corporate HR reimbursement compliance.</p>
            </div>
            <div class="dlf5-card">
                <h3>Luxury Furniture Handling</h3>
                <p>Trained master carpenters for the dismantling and precise reassembly of complex modular Italian beds, motorized recliner systems, walk-in closets, and imported entertainment consoles.</p>
            </div>
            <div class="dlf5-card">
                <h3>Enclosed Car & Bike Carrier</h3>
                <p>Specialized hydraulic ramps, enclosed car trailers, and four-point wheel locking systems for the zero-scratch transit of luxury sedans, SUVs, and high-performance motorcycles nationwide.</p>
            </div>
            <div class="dlf5-card">
                <h3>Transit Insurance & Security</h3>
                <p>100% comprehensive transit risk coverage against accidental damage, road transit hazards, and theft, backed by rapid claim facilitation and computerized consignment tracking.</p>
            </div>
        </div>
    </section>

    <!-- Local Operational Expertise & Society Guidelines -->
    <section>
        <h2 class="dlf5-section-heading">DLF Phase 5 Condominium Moving Protocols & Gate Clearances</h2>
        <p class="dlf5-intro-p">Operating in DLF Phase 5 requires absolute familiarity with condominium bylaws and gated security gate pass systems. Condominiums such as <strong>The Aralias</strong>, <strong>The Camellias</strong>, <strong>The Magnolias</strong>, <strong>The Belaire</strong>, <strong>Park Place</strong>, <strong>The Crest</strong>, and <strong>Westend Heights</strong> enforce strict resident safety guidelines to maintain peace and pristine infrastructure:</p>

        <div class="dlf5-highlight-box">
            <h4>Mandatory Moving Compliance in DLF Phase 5 Condominiums</h4>
            <ul style="margin: 10px 0 0; padding-left: 20px; color: #374151; line-height: 1.75;">
                <li style="margin-bottom: 10px;"><strong>Designated Moving Time Windows:</strong> Most luxury towers strictly restrict shifting activities to Mondays through Saturdays between 9:00 AM and 6:00 PM. Relocation activities on Sundays and public national holidays are generally prohibited by estate resident welfare associations.</li>
                <li style="margin-bottom: 10px;"><strong>Service Lift Reservation & Lift Padding:</strong> All goods must be transported exclusively through designated freight and service elevators. Our team installs protective foam elevator drapes and corrugated floor padding along lobbies to prevent tile scratching.</li>
                <li><strong>Gate Passes & KYC Documentation:</strong> DLF estate management mandates prior mover gate pass applications accompanied by crew ID cards, vehicle registration details, and security deposits. Our operations supervisor handles the entire gate pass verification 24 hours prior to the move.</li>
            </ul>
        </div>

        <p class="dlf5-intro-p">Our operations team coordinates directly with facility managers across Golf Course Road. Whether coordinating parking heights in multi-level basements or maneuvering our specialized 14-foot and 17-foot covered container vehicles through security bollards, we ensure smooth, disruption-free relocation execution.</p>

        <div class="dlf5-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Premium packaging supplies for DLF Phase 5 moves" width="580" height="360">
            <div class="dlf5-image-caption">Multi-layered protective packaging using virgin bubble roll, heavy-duty edge protectors, and corrugated export cartons</div>
        </div>
    </section>

    <!-- Transparent Pricing Table -->
    <section>
        <h2 class="dlf5-section-heading">Transparent Relocation Tariff Guide for DLF Phase 5</h2>
        <p class="dlf5-intro-p">Shree Ashirwad Packers and Movers upholds a strict transparent pricing philosophy with zero hidden fees. Below is an indicative tariff breakdown for residential shifting from DLF Phase 5 Gurgaon. For customized calculations, explore our interactive <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">packers and movers charges calculator</a>.</p>

        <div class="dlf5-table-responsive">
            <table class="dlf5-table">
                <thead>
                    <tr>
                        <th>Move Type / Inventory Size</th>
                        <th>Packaging Materials & Crew Deployed</th>
                        <th>Local Shifting (Gurgaon / NCR)</th>
                        <th>Inter-State Long Haul (e.g. WB / Bihar)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1 BHK Executive / Studio Apartment</td>
                        <td>Standard 3-layer bubble wrap, cartons, 3-man crew</td>
                        <td>₹5,500 – ₹9,500</td>
                        <td>₹14,000 – ₹24,000</td>
                    </tr>
                    <tr>
                        <td>2 BHK Luxury Apartment (e.g. Park Place)</td>
                        <td>Premium 4-layer packaging, wardrobe boxes, 4-man crew</td>
                        <td>₹8,500 – ₹14,500</td>
                        <td>₹19,000 – ₹32,000</td>
                    </tr>
                    <tr>
                        <td>3 BHK Premium Suite (e.g. The Belaire / The Crest)</td>
                        <td>Heavy-duty 5-layer wrap, bubble roll, dismantling, 5-man crew</td>
                        <td>₹13,500 – ₹22,000</td>
                        <td>₹26,000 – ₹42,000</td>
                    </tr>
                    <tr>
                        <td>4 BHK / Penthouse / Sky Villa (The Camellias / Aralias)</td>
                        <td>White-glove crating, foam corner guards, dedicated team of 7+</td>
                        <td>₹22,000 – ₹38,000</td>
                        <td>₹38,000 – ₹65,000</td>
                    </tr>
                    <tr>
                        <td>Luxury Vehicle Relocation (Sedan / SUV)</td>
                        <td>Enclosed car carrier, hydraulic ramps, transit insurance</td>
                        <td>₹4,500 – ₹8,000</td>
                        <td>₹12,000 – ₹22,000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="dlf5-highlight-box">
            <h4>All-Inclusive Guaranteed Cost Commitment</h4>
            <p class="dlf5-intro-p">Every formal quotation from Shree Ashirwad Packers and Movers is comprehensive and final. Our written estimate accounts for packaging supplies, professional carpentry labor, elevator handling, fuel surcharges, toll permits, and local loading taxes.</p>
            <p class="dlf5-intro-p" style="margin-bottom: 0;">We also provide formal corporate GST invoices tailored for executive moving allowances and seamless employer reimbursement claims.</p>
        </div>
    </section>

    <!-- 5-Step Operational Methodology -->
    <section>
        <h2 class="dlf5-section-heading">Our Proven 5-Step Relocation Methodology</h2>
        <p class="dlf5-intro-p">To guarantee an organized, serene, and damage-free moving experience for our DLF Phase 5 clientele, our crew adheres to a standardized 5-step operational protocol.</p>

        <div class="dlf5-step-card">
            <div class="dlf5-step-num">1</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #064e3b; font-weight: 700;">Pre-Move Consultation & Digital Inventory Audit</h4>
                <p class="dlf5-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Our relocation surveyor conducts a detailed physical inspection or video walkthrough to evaluate high-value artwork, crating requirements, elevator dimensions, and vehicle access constraints along Golf Course Road.</p>
            </div>
        </div>

        <div class="dlf5-step-card">
            <div class="dlf5-step-num">2</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #064e3b; font-weight: 700;">Estate Management Gate Pass Coordination</h4>
                <p class="dlf5-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">We obtain prior clearance approvals from condominium facility management in The Crest, The Aralias, or Park Place, registering moving crew KYC documents and scheduling freight elevator access hours.</p>
            </div>
        </div>

        <div class="dlf5-step-card">
            <div class="dlf5-step-num">3</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #064e3b; font-weight: 700;">White-Glove Multi-Layered Packing</h4>
                <p class="dlf5-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Our crew applies 5-tier specialized packing: air-bubble cushioning, foam edge protectors, acid-free wrapping for silverware, corrugated export boxes, and heavy-duty shrink wrapping for plush upholstered furniture.</p>
            </div>
        </div>

        <div class="dlf5-step-card">
            <div class="dlf5-step-num">4</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #064e3b; font-weight: 700;">Systematic Loading & GPS-Monitored Transit</h4>
                <p class="dlf5-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Furnishings are stowed inside weatherproof, sealed container vehicles equipped with internal lashing straps. Our vehicles navigate smoothly via Golf Course Road, Cyber City, and NH-48 with real-time GPS tracking.</p>
            </div>
        </div>

        <div class="dlf5-step-card">
            <div class="dlf5-step-num">5</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #064e3b; font-weight: 700;">Floor-Protected Unpacking & Modular Assembly</h4>
                <p class="dlf5-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Upon delivery at your new residence, our team unpacks cartons, places furniture according to your floor plan, reassembles beds and wardrobes, and hauls away all packaging waste.</p>
            </div>
        </div>

        <div class="dlf5-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Master carpenter dismantling designer wooden bed in DLF Phase 5" width="580" height="360">
            <div class="dlf5-image-caption">Skilled carpenters carefully disassembling modular king-size beds and luxury wardrobe fittings prior to transit</div>
        </div>
    </section>

    <!-- Why Choose Shree Ashirwad in DLF Phase 5 -->
    <section>
        <h2 class="dlf5-section-heading">Why Discerning Residents Choose Shree Ashirwad</h2>
        <p class="dlf5-intro-p">For over a decade, Shree Ashirwad Packers and Movers has earned an impeccable reputation for moving excellence across Haryana, Delhi NCR, and Eastern India. Here is why DLF Phase 5 residents trust us with their most valuable belongings:</p>

        <div class="dlf5-grid-3">
            <div class="dlf5-card">
                <h3>Vetted & Trained Crew</h3>
                <p>100% in-house, background-verified packing specialists. Zero casual day-laborers, ensuring security and complete peace of mind in high-security condominiums.</p>
            </div>
            <div class="dlf5-card">
                <h3>Surface & Lift Protection</h3>
                <p>We lay thick corrugated floor runners and padded elevator jackets to eliminate scuffs on Italian marble and designer lobby paneling during shifting.</p>
            </div>
            <div class="dlf5-card">
                <h3>Punctual Scheduling</h3>
                <p>We respect your executive schedule. Our crew arrives strictly on time and adheres to society cutoff hours, avoiding penalties or logistical delays.</p>
            </div>
            <div class="dlf5-card">
                <h3>Dedicated Move Coordinator</h3>
                <p>A single point of contact oversees your entire relocation from initial pre-move audit to final room placement and debriefing.</p>
            </div>
            <div class="dlf5-card">
                <h3>Inter-State Network</h3>
                <p>Direct connectivity from Gurgaon to Tier 1 and Tier 2 cities across India, featuring specialized corridors to Kolkata, Patna, Ranchi, and Jamshedpur.</p>
            </div>
            <div class="dlf5-card">
                <h3>Binding Written Quotes</h3>
                <p>Transparent written agreements with zero unapproved surcharges, hidden fuel adjustments, or unexpected labor fees on moving day.</p>
            </div>
        </div>

        <div class="dlf5-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door relocation truck in DLF Phase 5 Gurgaon" width="580" height="360">
            <div class="dlf5-image-caption">Weatherproof container trucks ensuring dust-free and water-sealed transit across Golf Course Road and interstate routes</div>
        </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section>
        <h2 class="dlf5-section-heading">Frequently Asked Questions — DLF Phase 5 Relocations</h2>
        <p class="dlf5-intro-p">Find clarity on common queries regarding condominium moving regulations, packing standards, and pricing in DLF Phase 5 Gurgaon.</p>

        <div class="dlf5-faq-item">
            <div class="dlf5-faq-question">How do you handle moves into ultra-luxury societies like The Camellias, The Aralias, and The Magnolias?</div>
            <p class="dlf5-faq-answer">Moves into DLF luxury residences require rigorous compliance. We coordinate prior gate passes with DLF estate management, submit mover KYC credentials, install floor protection sheets along corridors and elevators, and deploy our senior white-glove handling crew equipped with pneumatic dollies and custom crates.</p>
        </div>

        <div class="dlf5-faq-item">
            <div class="dlf5-faq-question">Can you handle high-value Italian furniture, crystal chandeliers, and fine artwork?</div>
            <p class="dlf5-faq-answer">Yes. Our team specializes in white-glove relocations featuring custom on-site wooden crating, multi-layer bubble wrap, foam corner guards, and acid-free tissue wrapping for delicate artwork, imported dining tables, and bespoke crystal chandeliers.</p>
        </div>

        <div class="dlf5-faq-item">
            <div class="dlf5-faq-question">What are the moving hours permitted by high-rise condominiums in DLF Phase 5?</div>
            <p class="dlf5-faq-answer">Most DLF Phase 5 luxury condominiums like The Belaire, Park Place, and The Crest permit moving operations strictly between 9:00 AM and 6:00 PM on weekdays and Saturdays, with moves restricted on Sundays. We align our schedule to finish packing and loading well within these designated society timeframes.</p>
        </div>

        <div class="dlf5-faq-item">
            <div class="dlf5-faq-question">What is the typical cost for household relocation from DLF Phase 5 Gurgaon?</div>
            <p class="dlf5-faq-answer">Local apartment shifting within DLF Phase 5 or nearby Golf Course Road sectors typically ranges between ₹6,500 and ₹18,000 for 2 to 3 BHK apartments, and ₹20,000 to ₹38,000 for larger 4 BHK or penthouse suites requiring premium white-glove crating and multiple transport vehicles.</p>
        </div>

        <div class="dlf5-faq-item">
            <div class="dlf5-faq-question">Do you supply formal GST invoices for company relocation allowances?</div>
            <p class="dlf5-faq-answer">Yes. We generate comprehensive computerized GST invoices, transit insurance receipts, and itemized consignment consignment notes suitable for corporate reimbursement claims with major multinational employers across Cyber City and Horizon Center.</p>
        </div>
    </section>

    <!-- Connected Hyper-Local Network Cluster -->
    <section>
        <h2 class="dlf5-section-heading">Connected Gurgaon & NCR Moving Hubs</h2>
        <p class="dlf5-intro-p">Shree Ashirwad Packers and Movers operates an integrated hyper-local network spanning key residential sectors and corporate districts across Gurgaon. Explore our sister neighborhood service hubs below:</p>

        <div class="dlf5-cluster-grid">
            <div class="dlf5-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gurgaon">Gurgaon City Authority Hub</a>
            </div>
            <div class="dlf5-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dlf-phase-1-gurgaon">DLF Phase 1 Gurgaon</a>
            </div>
            <div class="dlf5-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-cyber-city-gurgaon">Cyber City Gurgaon</a>
            </div>
            <div class="dlf5-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sohna-road-gurgaon">Sohna Road Gurgaon</a>
            </div>
            <div class="dlf5-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-golf-course-extension-gurgaon">Golf Course Extension</a>
            </div>
            <div class="dlf5-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sector-56-gurgaon">Sector 56 Gurgaon</a>
            </div>
            <div class="dlf5-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sector-14-gurgaon">Sector 14 Gurgaon</a>
            </div>
            <div class="dlf5-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-palam-vihar-gurgaon">Palam Vihar Gurgaon</a>
            </div>
        </div>
    </section>
</main>

<?php
// Include the main site footer partial
include_once ROOT_PATH . '/includes/footer.php';
?>

</body>
</html>
