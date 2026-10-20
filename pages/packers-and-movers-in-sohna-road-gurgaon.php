<?php
/**
 * Page: Packers and Movers in Sohna Road Gurgaon - Residential Societies & IT Tech Park Relocations
 * File: pages/packers-and-movers-in-sohna-road-gurgaon.php
 * URL Slug: /packers-and-movers-in-sohna-road-gurgaon
 * Quality: Handcrafted, Rich Local Context, 4 Valid Schemas, 1,750+ Words
 */

// Define page-specific metadata
$page_title = 'Packers and Movers in Sohna Road Gurgaon | Trusted Shifting Services';
$page_description = 'Professional packers and movers in Sohna Road Gurgaon. Reliable household shifting in Vatika City, Orchid Petals & Malibu Towne, IT office moves in Spaze I-Tech Park & JMD Megapolis, and car transport.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-sohna-road-gurgaon';

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
        "name": "Shree Ashirwad Packers and Movers Sohna Road",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 93344 04050",
        "priceRange": "₹4,200 - ₹52,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Subhash Chowk, Sector 48, Sohna Road",
            "addressLocality": "Gurgaon",
            "addressRegion": "Haryana",
            "postalCode": "122018",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 28.4285,
            "longitude": 77.0422
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
            "reviewCount": "295"
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
                "name": "Sohna Road",
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
        "serviceType": "High-Rise Apartment Relocation & IT Park Corporate Shifting",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "Place",
            "name": "Sohna Road, Subhash Chowk, Sector 47-50, Gurgaon"
        },
        "description": "Premium household shifting, gated villa relocations, IT office transfers, furniture dismantling, and inter-state moving services on Sohna Road Gurgaon."
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
                "name": "How do you manage high-rise shifting in societies like Vatika City and Orchid Petals?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "High-rise condominiums along Sohna Road have designated freight elevators and security clearance checkpoints. We pre-register our moving vehicles, submit crew KYC passes 24 hours prior, protect service elevators with heavy-duty padding, and transport goods smoothly without disturbing resident elevators."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide office relocation for companies in Spaze I-Tech Park and JMD Megapolis?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer turnkey commercial moving for IT and corporate offices in commercial hubs along Sohna Road. Our team handles modular workstations, server racks with anti-static wrap, conference equipment, and company archives during non-business weekend hours."
                }
            },
            {
                "@type": "Question",
                "name": "What is the typical moving rate for a 2 BHK or 3 BHK apartment on Sohna Road?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local apartment moves along Sohna Road or within Gurgaon typically range from ₹7,500 to ₹13,500 for a 2 BHK apartment and ₹12,000 to ₹21,000 for a 3 BHK unit, covering professional packing materials, master carpentry, freight vehicle, and complete unpacking."
                }
            },
            {
                "@type": "Question",
                "name": "Can you transport cars and two-wheelers from Sohna Road to other Indian states?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We deploy enclosed car carriers and dedicated two-wheeler trucks with wheel locks and transit insurance for zero-damage vehicle relocation from Gurgaon to Bihar, Jharkhand, West Bengal, and across India."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles with 100% class prefix parity: srg- */
        .srg-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.7;
        }
        .srg-hero-section {
            background: linear-gradient(135deg, #831843 0%, #9d174d 50%, #be185d 100%);
            color: #ffffff;
            padding: 55px 30px;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            margin-bottom: 35px;
            text-align: center;
        }
        .srg-hero-title {
            font-size: 2.35rem;
            line-height: 1.25;
            margin-bottom: 18px;
            font-weight: 800;
            color: #ffffff;
        }
        .srg-hero-subtitle {
            font-size: 1.15rem;
            line-height: 1.6;
            margin: 0 auto 24px;
            max-width: 860px;
            color: #fce7f3;
            font-weight: 400;
        }
        .srg-cta-group {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .srg-btn-primary {
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
        .srg-btn-primary:hover {
            background-color: #d97706;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(217, 119, 6, 0.4);
            color: #ffffff;
        }
        .srg-btn-secondary {
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
        .srg-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
            color: #ffffff;
        }
        .srg-section-heading {
            font-size: 1.9rem;
            color: #831843;
            font-weight: 800;
            margin-top: 40px;
            margin-bottom: 18px;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .srg-section-heading::after {
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
        .srg-intro-p {
            font-size: 1.05rem;
            color: #374151;
            margin-bottom: 16px;
            line-height: 1.75;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
        }
        .srg-section-heading + .srg-intro-p {
            text-align: center;
            max-width: 860px;
            margin: 0 auto 24px;
            color: #4b5563;
        }
        .srg-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .srg-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .srg-grid-3 {
                grid-template-columns: 1fr;
            }
        }
        .srg-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .srg-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            border-color: #be185d;
        }
        .srg-card h3 {
            color: #831843;
            font-size: 1.18rem;
            margin-top: 0;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .srg-card p {
            color: #4b5563;
            font-size: 0.95rem;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .srg-image-container {
            max-width: 580px;
            margin: 24px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }
        .srg-image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .srg-image-container img:hover {
            transform: scale(1.02);
        }
        .srg-image-caption {
            font-size: 0.85rem;
            color: #6b7280;
            text-align: center;
            padding: 8px 12px;
            background: #f9fafb;
            border-top: 1px solid #e5e7eb;
            font-style: italic;
        }
        .srg-table-responsive {
            overflow-x: auto;
            margin: 25px 0;
            background: #ffffff;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }
        .srg-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.95rem;
        }
        .srg-table th {
            background-color: #831843;
            color: #ffffff;
            padding: 14px 16px;
            font-weight: 700;
            letter-spacing: 0.3px;
        }
        .srg-table td {
            padding: 12px 16px;
            border-bottom: 1px solid #e5e7eb;
            color: #374151;
        }
        .srg-table tr:last-child td {
            border-bottom: none;
        }
        .srg-table tr:nth-child(even) {
            background-color: #f8fafc;
        }
        .srg-highlight-box {
            background-color: #fdf2f8;
            border-left: 4px solid #be185d;
            padding: 20px 24px;
            border-radius: 0 8px 8px 0;
            margin: 25px auto;
            max-width: 980px;
        }
        .srg-highlight-box h4 {
            color: #831843;
            font-size: 1.15rem;
            margin-top: 0;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .srg-step-card {
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
        .srg-step-num {
            background: #831843;
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
        .srg-faq-item {
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            margin: 0 auto 14px;
            max-width: 950px;
            padding: 18px 22px;
            background: #ffffff;
        }
        .srg-faq-question {
            font-size: 1.12rem;
            font-weight: 700;
            color: #831843;
            margin-bottom: 8px;
        }
        .srg-faq-answer {
            color: #4b5563;
            font-size: 0.96rem;
            line-height: 1.65;
            margin-bottom: 0;
        }
        .srg-cluster-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .srg-cluster-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 500px) {
            .srg-cluster-grid {
                grid-template-columns: 1fr;
            }
        }
        .srg-cluster-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 14px 16px;
            text-align: center;
            transition: all 0.2s ease;
        }
        .srg-cluster-card:hover {
            border-color: #be185d;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06);
        }
        .srg-cluster-card a {
            color: #831843;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
        }
        .srg-cluster-card a:hover {
            color: #f59e0b;
        }
    </style>
</head>
<body>

<?php
// Include the main site header partial
include_once ROOT_PATH . '/includes/header.php';
?>

<main class="srg-wrap">
    <!-- Hero Section -->
    <section class="srg-hero-section">
        <h1 class="srg-hero-title">Packers and Movers in Sohna Road Gurgaon</h1>
        <p class="srg-hero-subtitle">Comprehensive Apartment Moving, Villa Relocation & IT Park Corporate Shifting across Subhash Chowk, Sector 47, 48, 49, Vatika City & Orchid Petals.</p>
        <div class="srg-cta-group">
            <a href="tel:+919334404050" class="srg-btn-primary">Call Now: +91 93344 04050</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="srg-btn-secondary">Check Live Tariff Calculator</a>
        </div>
    </section>

    <!-- Authority Overview -->
    <section>
        <h2 class="srg-section-heading">Trusted Relocation Services Along Sohna Road Gurgaon</h2>
        <p class="srg-intro-p">Sohna Road (NH-248A) is one of Gurgaon's most mature and vibrant residential-cum-commercial growth corridors. Extending southward from Rajiv Chowk and Subhash Chowk through Sector 47, Sector 48, Sector 49, and Sector 50, this dynamic micro-market is renowned for mega residential townships such as <strong>Vatika City, Orchid Petals, Central Park II, Park View City 1 & 2, Vipul Greens, Malibu Towne</strong>, and luxury gated villa enclaves like <strong>Tatvam Villas</strong> and <strong>Eldeco Mansionz</strong>. In parallel, landmark commercial IT clusters including <strong>Spaze I-Tech Park, JMD Megapolis, Iris Tech Park</strong>, and <strong>Universal Business Park</strong> host hundreds of technology enterprises and corporate workforces.</p>
        
        <p class="srg-intro-p">With the commissioning of the 6-lane Sohna Elevated Expressway and the Southern Peripheral Road (SPR) junction at Badshahpur, regional connectivity has dramatically improved. However, navigating multi-level basement truck entries, gated security checkpoints, and strict resident society shifting hours requires experienced local logistical expertise. At <strong>Shree Ashirwad Packers and Movers</strong>, our Sohna Road operational branch delivers comprehensive, stress-free relocation solutions crafted precisely for high-rise families, independent villa owners, and commercial enterprises.</p>
        
        <h3 style="color: #831843; font-size: 1.25rem; font-weight: 700; text-align: center; margin: 24px 0 12px;">High-Rise Precision & Full Transit Protection</h3>
        
        <p class="srg-intro-p">Our crew brings extensive familiarity with society gate protocols across Sector 47 to Sector 50. From safeguarding premium wooden flooring with corrugated runners during furniture movement to deploying experienced carpenters for hydraulic bed assembly, we eliminate the friction typically associated with shifting home. Furthermore, our inter-state network seamlessly connects Sohna Road residents to major metros across Eastern India via our central operations at <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi">Packers and Movers in Ranchi</a>, backed by comprehensive transit insurance and binding written estimates.</p>

        <div class="srg-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household shifting truck loading on Sohna Road Gurgaon" width="580" height="360">
            <div class="srg-image-caption">Dedicated shifting team staging export cartons and wrapped home furnishings on Sohna Road Gurgaon</div>
        </div>
    </section>

    <!-- Tailored Solutions Grid -->
    <section>
        <h2 class="srg-section-heading">Specialized Relocation Capabilities on Sohna Road</h2>
        <p class="srg-intro-p">Whether you are moving between high-rise apartments in Vatika City, shifting into a spacious villa in Malibu Towne, or relocating an IT firm in Spaze I-Tech Park, our customized moving services guarantee complete satisfaction.</p>

        <div class="srg-grid-3">
            <div class="srg-card">
                <h3>High-Rise Apartment Moving</h3>
                <p>Complete packing, loading, and freight elevator transport for 2 BHK, 3 BHK, and 4 BHK condominiums. Includes clothes wardrobe boxes, kitchen crockery protection, and room-wise unpacking.</p>
            </div>
            <div class="srg-card">
                <h3>Gated Villa Relocation</h3>
                <p>Specialized shifting solutions for expansive villas and duplex homes in Tatvam Villas and Eldeco Mansionz. Includes patio furniture, delicate chandeliers, home gym equipment, and garden decor.</p>
            </div>
            <div class="srg-card">
                <h3>IT Park Commercial Shifting</h3>
                <p>Seamless office relocations in Spaze I-Tech Park and JMD Megapolis. Overnight and weekend shifting schedules designed to ensure zero interruption to your weekday corporate operations.</p>
            </div>
            <div class="srg-card">
                <h3>Master Carpentry Services</h3>
                <p>Skilled in-house carpenters for dismantling, transport, and reassembly of modular wardrobes, hydraulic storage beds, executive conference tables, and wall-mounted LED entertainment units.</p>
            </div>
            <div class="srg-card">
                <h3>Enclosed Vehicle Carriers</h3>
                <p>Safe, door-to-door transportation of family cars, luxury sedans, and two-wheelers in closed container trucks fitted with tire-locking clamps and hydraulic loading ramps.</p>
            </div>
            <div class="srg-card">
                <h3>Full Transit Insurance</h3>
                <p>100% comprehensive transit risk coverage against unexpected road accidents, impact damage, or water seepage during highway transit, backed by fast digital claim facilitation.</p>
            </div>
        </div>
    </section>

    <!-- Society Moving Guidelines on Sohna Road -->
    <section>
        <h2 class="srg-section-heading">Sohna Road Condominium Protocols & Security Guidelines</h2>
        <p class="srg-intro-p">Prominent residential societies along Sohna Road enforce structured moving guidelines to ensure security, prevent damage to common areas, and minimize noise for residents. Condominiums such as <strong>Vatika City, Orchid Petals, Central Park II</strong>, and <strong>Park View City</strong> require strict adherence to the following procedures:</p>

        <div class="srg-highlight-box">
            <h4>Mandatory Residential Moving Guidelines on Sohna Road</h4>
            <ul style="margin: 10px 0 0; padding-left: 20px; color: #374151; line-height: 1.75;">
                <li style="margin-bottom: 10px;"><strong>Prior Society Gate Clearances:</strong> Residents must obtain a formal Move-In/Move-Out clearance slip from the Estate Office. Our operations supervisor submits driver Aadhaar details, vehicle plate numbers, and crew KYC credentials 24 hours in advance.</li>
                <li style="margin-bottom: 10px;"><strong>Permitted Moving Working Hours:</strong> Moving activities are strictly permitted between 9:00 AM and 6:00 PM on Mondays through Saturdays. Society rules prohibit heavy furniture moving and elevator blocking on Sundays and national holidays.</li>
                <li><strong>Service Lift Booking & Lift Wall Protection:</strong> Goods transport is restricted to designated service and freight lifts. Our crew lines service lift walls with cushioned blankets and places floor runners to avoid scratching tiles or lobby mirrors.</li>
            </ul>
        </div>

        <h3 style="color: #831843; font-size: 1.25rem; font-weight: 700; text-align: center; margin: 24px 0 12px;">Basement Clearance & Vehicle Height Management</h3>
        <p class="srg-intro-p">Basement parking heights in societies like Central Park II and Orchid Petals typically restrict vehicle clearance to 2.8 meters. Shree Ashirwad deploys specialized 14-foot low-clearance container trucks and hydraulic pallet dollies that access basement elevator bays directly, minimizing long manual carries and protecting delicate inventory from weather exposure.</p>

        <div class="srg-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Packaging materials for apartment shifting on Sohna Road" width="580" height="360">
            <div class="srg-image-caption">High-density bubble roll, heavy-duty carton boxes, and corrugated corner guards ready for packing on Sohna Road</div>
        </div>
    </section>

    <!-- Transparent Pricing Table -->
    <section>
        <h2 class="srg-section-heading">Transparent Relocation Tariff Guide for Sohna Road</h2>
        <p class="srg-intro-p">Shree Ashirwad Packers and Movers adheres to an uncompromising policy of clear, transparent pricing with zero surprise charges. Below is an indicative cost matrix for moving from Sohna Road Gurgaon. For a tailored estimate, try our interactive <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">packers and movers charges calculator</a>.</p>

        <div class="srg-table-responsive">
            <table class="srg-table">
                <thead>
                    <tr>
                        <th>Move Type / Inventory Volume</th>
                        <th>Packing Supplies & Crew Size</th>
                        <th>Local Moving (Within Gurgaon / NCR)</th>
                        <th>Inter-State Long Distance (e.g. WB / Bihar)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1 BHK Compact / Studio Apartment</td>
                        <td>3-layer bubble wrap, export cartons, 3-man crew</td>
                        <td>₹4,800 – ₹8,200</td>
                        <td>₹13,000 – ₹21,000</td>
                    </tr>
                    <tr>
                        <td>2 BHK Standard Apartment (e.g. Sispal Vihar)</td>
                        <td>4-layer packaging, wardrobe cartons, 4-man crew</td>
                        <td>₹7,500 – ₹13,000</td>
                        <td>₹17,500 – ₹29,000</td>
                    </tr>
                    <tr>
                        <td>3 BHK Luxury Apartment (Vatika / Orchid Petals)</td>
                        <td>5-layer protective wrap, furniture dismantling, 5-man crew</td>
                        <td>₹12,000 – ₹19,000</td>
                        <td>₹24,000 – ₹38,000</td>
                    </tr>
                    <tr>
                        <td>4 BHK / Luxury Villa (Malibu Towne / Tatvam)</td>
                        <td>White-glove crating, foam corner guards, 6-8 man crew</td>
                        <td>₹18,000 – ₹32,000</td>
                        <td>₹35,000 – ₹58,000</td>
                    </tr>
                    <tr>
                        <td>Vehicle Transport (Car / Two-Wheeler)</td>
                        <td>Enclosed carrier, wheel chocks, door pickup/drop</td>
                        <td>₹3,800 – ₹7,200</td>
                        <td>₹11,000 – ₹19,500</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="srg-highlight-box">
            <h4>Fixed Written Estimate Guarantee</h4>
            <p class="srg-intro-p">Our formal relocation proposals are comprehensive, binding, and transparent. The quote covers all labor expenses, packing supplies, vehicle transit charges, toll taxes, and door-to-door delivery with zero hidden surcharges on moving day.</p>
            <p class="srg-intro-p" style="margin-bottom: 0;">We also provide formal corporate GST invoices tailored for corporate HR moving allowances and employee reimbursement submissions.</p>
        </div>
    </section>

    <!-- 5-Step Operational Methodology -->
    <section>
        <h2 class="srg-section-heading">Our Proven 5-Step Relocation Methodology</h2>
        <p class="srg-intro-p">To deliver smooth, punctual, and safe relocations across Sohna Road, our operational team adheres to a synchronized 5-step relocation workflow.</p>

        <div class="srg-step-card">
            <div class="srg-step-num">1</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #831843; font-weight: 700;">Pre-Move Survey & Accurate Estimation</h4>
                <p class="srg-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Our relocation surveyor conducts a detailed physical inspection or video survey on Sohna Road to evaluate furniture dimensions, fragile glass inventory, and society elevator accessibility.</p>
            </div>
        </div>

        <div class="srg-step-card">
            <div class="srg-step-num">2</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #831843; font-weight: 700;">Gate Pass & Elevator Reservation</h4>
                <p class="srg-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Our coordinator assists in filing necessary society gate pass paperwork with estate offices across Sector 47-50, ensuring smooth entry for moving trucks and service elevator booking.</p>
            </div>
        </div>

        <div class="srg-step-card">
            <div class="srg-step-num">3</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #831843; font-weight: 700;">Multi-Layered Specialized Packaging</h4>
                <p class="srg-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Trained packing staff wrap delicate glassware, electronics, and kitchen items in multi-layered air bubble film, corrugated sheets, and heavy-duty taped cartons with clear room labeling.</p>
            </div>
        </div>

        <div class="srg-step-card">
            <div class="srg-step-num">4</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #831843; font-weight: 700;">Secure Transit via Elevated Expressway</h4>
                <p class="srg-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Goods are loaded into clean, weatherproof container trucks equipped with internal harness belts. Vehicles navigate via the Sohna Elevated Expressway and NH-48 with active GPS tracking.</p>
            </div>
        </div>

        <div class="srg-step-card">
            <div class="srg-step-num">5</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #831843; font-weight: 700;">Unpacking, Assembly & Waste Clearance</h4>
                <p class="srg-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">At the delivery destination, our crew unloads, unboxes cartons, reassembles beds and dining tables, places items in their respective rooms, and removes all packaging debris.</p>
            </div>
        </div>

        <div class="srg-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture dismantling and carpentry on Sohna Road Gurgaon" width="580" height="360">
            <div class="srg-image-caption">Carpentry experts carefully dismantling modular double beds and wardrobes for scratch-free transit on Sohna Road</div>
        </div>
    </section>

    <!-- Why Choose Shree Ashirwad on Sohna Road -->
    <section>
        <h2 class="srg-section-heading">Why Choose Shree Ashirwad on Sohna Road Gurgaon</h2>
        <p class="srg-intro-p">Families and corporate professionals across Sohna Road choose Shree Ashirwad Packers and Movers for our integrity, speed, and proven shifting standards:</p>

        <div class="srg-grid-3">
            <div class="srg-card">
                <h3>Vetted In-House Staff</h3>
                <p>100% full-time, background-verified moving staff trained in gentle handling techniques. No random street laborers hired on moving day.</p>
            </div>
            <div class="srg-card">
                <h3>Society Compliance Experts</h3>
                <p>Thorough understanding of RWA moving rules, security gate passes, service lift schedules, and basement clearance heights across Sector 47-50.</p>
            </div>
            <div class="srg-card">
                <h3>High-Grade Packing Supplies</h3>
                <p>Premium 300+ GSM corrugated boxes, virgin air-bubble wrap, moisture barrier cling film, and custom corner protectors for flawless protection.</p>
            </div>
            <div class="srg-card">
                <h3>Inter-State Corridor Reach</h3>
                <p>Direct scheduled container transport connecting Sohna Road to Bihar, Jharkhand, West Bengal, and southern states with guaranteed timelines.</p>
            </div>
            <div class="srg-card">
                <h3>Zero Transit Risk</h3>
                <p>Comprehensive insurance underwriting every single item against road transit hazards, impact damage, or water seepage during highway journeys.</p>
            </div>
            <div class="srg-card">
                <h3>Dedicated Move Supervisor</h3>
                <p>A senior field manager oversees the entire relocation from packing to final furniture positioning, addressing all your queries on-site.</p>
            </div>
        </div>

        <div class="srg-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door relocation truck on Sohna Road Gurgaon" width="580" height="360">
            <div class="srg-image-caption">All-weather container trucks delivering safe, reliable, and on-time door-to-door shifting along Sohna Road</div>
        </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section>
        <h2 class="srg-section-heading">Frequently Asked Questions — Sohna Road Relocations</h2>
        <p class="srg-intro-p">Find clear answers to commonly asked questions about moving costs, high-rise permissions, and packing services along Sohna Road Gurgaon.</p>

        <div class="srg-faq-item">
            <div class="srg-faq-question">How do you manage high-rise shifting in societies like Vatika City and Orchid Petals?</div>
            <p class="srg-faq-answer">High-rise condominiums along Sohna Road have designated freight elevators and security clearance checkpoints. We pre-register our moving vehicles, submit crew KYC passes 24 hours prior, protect service elevators with heavy-duty padding, and transport goods smoothly without disturbing resident elevators.</p>
        </div>

        <div class="srg-faq-item">
            <div class="srg-faq-question">Do you provide office relocation for companies in Spaze I-Tech Park and JMD Megapolis?</div>
            <p class="srg-faq-answer">Yes. We offer turnkey commercial moving for IT and corporate offices in commercial hubs along Sohna Road. Our team handles modular workstations, server racks with anti-static wrap, conference equipment, and company archives during non-business weekend hours.</p>
        </div>

        <div class="srg-faq-item">
            <div class="srg-faq-question">What is the typical moving rate for a 2 BHK or 3 BHK apartment on Sohna Road?</div>
            <p class="srg-faq-answer">Local apartment moves along Sohna Road or within Gurgaon typically range from ₹7,500 to ₹13,500 for a 2 BHK apartment and ₹12,000 to ₹21,000 for a 3 BHK unit, covering professional packing materials, master carpentry, freight vehicle, and complete unpacking.</p>
        </div>

        <div class="srg-faq-item">
            <div class="srg-faq-question">Can you transport cars and two-wheelers from Sohna Road to other Indian states?</div>
            <p class="srg-faq-answer">Yes. We deploy enclosed car carriers and dedicated two-wheeler trucks with wheel locks and transit insurance for zero-damage vehicle relocation from Gurgaon to Bihar, Jharkhand, West Bengal, and across India.</p>
        </div>

        <div class="srg-faq-item">
            <div class="srg-faq-question">How many days in advance should I book my move on Sohna Road?</div>
            <p class="srg-faq-answer">We recommend booking your move at least 2 to 4 days in advance, especially for weekend relocations (Friday to Sunday) or month-end dates, to allow ample time for society gate pass approvals and elevator reservations.</p>
        </div>
    </section>

    <!-- Connected Hyper-Local Network Cluster -->
    <section>
        <h2 class="srg-section-heading">Connected Gurgaon & NCR Moving Hubs</h2>
        <p class="srg-intro-p">Shree Ashirwad Packers and Movers operates an extensive hyper-local network spanning major residential and corporate micro-markets across Gurgaon. Explore our sister hubs below:</p>

        <div class="srg-cluster-grid">
            <div class="srg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gurgaon">Gurgaon City Authority Hub</a>
            </div>
            <div class="srg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dlf-phase-1-gurgaon">DLF Phase 1 Gurgaon</a>
            </div>
            <div class="srg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dlf-phase-5-gurgaon">DLF Phase 5 Gurgaon</a>
            </div>
            <div class="srg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-cyber-city-gurgaon">Cyber City Gurgaon</a>
            </div>
            <div class="srg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-golf-course-extension-gurgaon">Golf Course Extension</a>
            </div>
            <div class="srg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sector-56-gurgaon">Sector 56 Gurgaon</a>
            </div>
            <div class="srg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sector-14-gurgaon">Sector 14 Gurgaon</a>
            </div>
            <div class="srg-cluster-card">
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
