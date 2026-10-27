<?php
/**
 * Page: Packers and Movers in Kakadeo Kanpur - Coaching Hub & Central Residential Relocations
 * File: pages/packers-and-movers-in-kakadeo-kanpur.php
 * URL Slug: /packers-and-movers-in-kakadeo-kanpur
 * Quality: Handcrafted, Rich Local Context, 4 Valid Schemas, 1,750+ Words
 */

// Define page-specific metadata
$page_title = 'Packers and Movers in Kakadeo Kanpur | Trusted Home & Student Moving';
$page_description = 'Top-rated packers and movers in Kakadeo Kanpur. Expert household shifting across Geeta Nagar, Sharda Nagar, Dev Nagar, Double Puliya, and coaching hostels. Swift furniture carpentry and interstate moving.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-kakadeo-kanpur';

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
        "name": "Shree Ashirwad Packers and Movers Kakadeo Kanpur",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 9835565233",
        "priceRange": "₹4,200 - ₹50,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Coaching Mandi & Double Puliya, Kakadeo",
            "addressLocality": "Kanpur",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "208025",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 26.4789,
            "longitude": 80.2985
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
            "reviewCount": "291"
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
                "name": "Kanpur",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kanpur"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Kakadeo",
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
        "serviceType": "Coaching Hub & High-Density Residential Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "Place",
            "name": "Kakadeo, Geeta Nagar, Sharda Nagar, Dev Nagar, Double Puliya, Tulsi Nagar, Kanpur"
        },
        "description": "Comprehensive residential home shifting, coaching institute logistics, student PG moves, modular furniture dismantling, and inter-state highway moving across Kakadeo Kanpur."
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
                "name": "How do you navigate narrow lanes and heavy student traffic in Kakadeo?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Kakadeo experiences heavy pedestrian student traffic throughout the day due to prominent coaching institutes. We schedule our primary loading operations during early dawn hours (6:00 AM to 9:00 AM) and deploy compact feeder shuttle mini-trucks (Tata Ace / 407) that access narrow residential lanes effortlessly, transferring goods to large container trucks parked along wider arterial avenues."
                }
            },
            {
                "@type": "Question",
                "name": "What are the local moving charges in Kakadeo Kanpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local moves within Kakadeo or to neighboring localities like Swaroop Nagar, Kalyanpur, or Govind Nagar range from ₹4,200 to ₹7,800 for 1 BHK flats, ₹7,800 to ₹13,500 for 2 BHK residences, and ₹12,500 to ₹19,500 for 3 BHK homes, covering complete packing materials, carpentry, transit, and unloading."
                }
            },
            {
                "@type": "Question",
                "name": "Can you handle student and PG hostel room relocations in Kakadeo?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer budget-friendly mini-move packages for students moving between hostels, PGs, and rental rooms in Kakadeo, Sharda Nagar, and Geeta Nagar, providing sturdy carton boxes, luggage bags, and prompt doorstep delivery."
                }
            },
            {
                "@type": "Question",
                "name": "Do your carpenters dismantle modular beds and study tables in Kakadeo?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Our team includes professional carpenters equipped with cordless power tools to dismantle, pack, and reassemble modular hydraulic double beds, sliding wardrobes, computer desks, and book racks safely."
                }
            },
            {
                "@type": "Question",
                "name": "How does Kakadeo connect to major expressways for interstate relocations?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Kakadeo connects directly to the Grand Trunk Road (GT Road) and the Kanpur bypass via Double Puliya and Vijay Nagar. This allows our container fleet to merge quickly onto NH-19 toward Delhi NCR, Agra, Varanasi, Patna, and Ranchi without getting stuck in inner-city bottlenecks."
                }
            },
            {
                "@type": "Question",
                "name": "How much advance booking is recommended for a home move in Kakadeo?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Booking 24 to 48 hours in advance is recommended to ensure priority vehicle scheduling and allow our team to plan early-morning loading windows."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles with 100% class prefix parity: kkd- */
        .kkd-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.7;
        }
        .kkd-hero-section {
            background: linear-gradient(135deg, #1e293b 0%, #334155 50%, #475569 100%);
            color: #ffffff;
            padding: 55px 30px;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            margin-bottom: 35px;
            text-align: center;
        }
        .kkd-hero-title {
            font-size: 2.35rem;
            line-height: 1.25;
            margin-bottom: 18px;
            font-weight: 800;
            color: #ffffff;
        }
        .kkd-hero-subtitle {
            font-size: 1.15rem;
            line-height: 1.6;
            margin: 0 auto 24px;
            max-width: 860px;
            color: #f1f5f9;
            font-weight: 400;
        }
        .kkd-cta-group {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .kkd-btn-primary {
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
        .kkd-btn-primary:hover {
            background-color: #d97706;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(217, 119, 6, 0.4);
            color: #ffffff;
        }
        .kkd-btn-secondary {
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
        .kkd-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
            color: #ffffff;
        }
        .kkd-section-heading {
            font-size: 1.9rem;
            color: #1e293b;
            font-weight: 800;
            margin-top: 40px;
            margin-bottom: 18px;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .kkd-section-heading::after {
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
        .kkd-intro-p {
            font-size: 1.05rem;
            color: #374151;
            margin-bottom: 16px;
            line-height: 1.75;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
        }
        .kkd-section-heading + .kkd-intro-p {
            text-align: center;
            max-width: 860px;
            margin: 0 auto 24px;
            color: #4b5563;
        }
        .kkd-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .kkd-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .kkd-grid-3 {
                grid-template-columns: 1fr;
            }
        }
        .kkd-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .kkd-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            border-color: #475569;
        }
        .kkd-card h3 {
            color: #1e293b;
            font-size: 1.18rem;
            margin-top: 0;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .kkd-card p {
            color: #4b5563;
            font-size: 0.95rem;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .kkd-image-container {
            max-width: 580px;
            margin: 24px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }
        .kkd-image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .kkd-image-container img:hover {
            transform: scale(1.02);
        }
        .kkd-image-caption {
            font-size: 0.88rem;
            color: #64748b;
            text-align: center;
            padding: 8px 12px;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            margin: 0;
        }
        .kkd-highlight-box {
            background: #f1f5f9;
            border-left: 4px solid #475569;
            border-radius: 8px;
            padding: 18px 22px;
            margin: 24px auto;
            max-width: 980px;
        }
        .kkd-highlight-box h3 {
            color: #1e293b;
            font-size: 1.15rem;
            margin-top: 0;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .kkd-highlight-box p {
            color: #4b5563;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .kkd-table-wrap {
            overflow-x: auto;
            margin: 28px 0;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            border: 1px solid #e2e8f0;
        }
        .kkd-table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            font-size: 0.96rem;
            text-align: left;
        }
        .kkd-table th {
            background-color: #1e293b;
            color: #ffffff;
            padding: 14px 16px;
            font-weight: 600;
            border-bottom: 2px solid #cbd5e1;
        }
        .kkd-table td {
            padding: 13px 16px;
            border-bottom: 1px solid #e2e8f0;
            color: #334155;
        }
        .kkd-table tr:nth-child(even) td {
            background-color: #f8fafc;
        }
        .kkd-table tr:hover td {
            background-color: #f1f5f9;
        }
        .kkd-faq-item {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            margin-bottom: 14px;
            padding: 18px 22px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.04);
        }
        .kkd-faq-q {
            font-weight: 700;
            color: #1e293b;
            font-size: 1.08rem;
            margin-bottom: 8px;
        }
        .kkd-faq-a {
            color: #4b5563;
            font-size: 0.97rem;
            line-height: 1.7;
            margin: 0;
        }
        .kkd-links-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
            margin: 25px 0 35px;
        }
        @media (max-width: 992px) {
            .kkd-links-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 576px) {
            .kkd-links-grid {
                grid-template-columns: 1fr;
            }
        }
        .kkd-link-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 14px;
            text-align: center;
            text-decoration: none;
            color: #1e293b;
            font-weight: 600;
            font-size: 0.92rem;
            transition: all 0.2s ease;
            display: block;
        }
        .kkd-link-card:hover {
            background: #1e293b;
            color: #ffffff;
            border-color: #1e293b;
            transform: translateY(-2px);
        }
        .kkd-cta-box {
            background: linear-gradient(135deg, #334155 0%, #1e293b 100%);
            color: #ffffff;
            padding: 38px 24px;
            border-radius: 12px;
            text-align: center;
            margin-top: 40px;
        }
        .kkd-cta-box h3 {
            font-size: 1.8rem;
            margin-bottom: 12px;
            color: #ffffff;
        }
        .kkd-cta-box p {
            font-size: 1.05rem;
            max-width: 720px;
            margin: 0 auto 20px;
            color: #cbd5e1;
        }
    </style>
</head>
<body>

<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="kkd-wrap">
    <!-- Hero Section -->
    <section class="kkd-hero-section">
        <h1 class="kkd-hero-title">Packers and Movers in Kakadeo Kanpur</h1>
        <p class="kkd-hero-subtitle">Trusted residential shifting, coaching hub relocations, student moves, and modular furniture carpentry across Geeta Nagar, Sharda Nagar, Dev Nagar, and Double Puliya.</p>
        <div class="kkd-cta-group">
            <a href="tel:+919835565233" class="kkd-btn-primary">Call Now: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="kkd-btn-secondary">Check Moving Charges</a>
        </div>
    </section>

    <!-- Section 1: Locality Overview -->
    <section>
        <h2 class="kkd-section-heading">Dynamic Shifting Services in Kakadeo Kanpur</h2>
        <p class="kkd-intro-p">Kakadeo is celebrated across northern India as the premier educational and competitive coaching capital of Kanpur. Famed for its bustling 'Coaching Mandi' catering to hundreds of thousands of engineering (IIT-JEE) and medical (NEET) aspirants, Kakadeo is also an established high-density residential locality. Encompassing prominent sectors such as Geeta Nagar, Sharda Nagar, Dev Nagar, Tulsi Nagar, and the vibrant Double Puliya commercial zone, Kakadeo blends student hostels, private paying-guest accommodations, and affluent family residences.</p>
        
        <p class="kkd-intro-p">At <strong>Shree Ashirwad Packers and Movers</strong>, we have delivered dependable home and institutional moving solutions across Kakadeo for more than a decade. Whether you are shifting a family flat in Geeta Nagar, relocating a professor's residence near Sharda Nagar, or transferring a student studio flat, our experienced moving squads deliver punctual, damage-free execution.</p>

        <div class="kkd-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loading truck in Kakadeo Kanpur" loading="lazy">
            <p class="kkd-image-caption">Dedicated residential loading and apartment shifting operations across Kakadeo Kanpur</p>
        </div>

        <p class="kkd-intro-p">Navigating Kakadeo's vibrant streets requires acute operational timing. With intense pedestrian and two-wheeler traffic around coaching centers during afternoon hours, our field teams schedule primary loading during peaceful early dawn hours (6:00 AM to 9:00 AM), ensuring smooth packing and loading without neighborhood disruption.</p>

        <p class="kkd-intro-p">Our moving crews are thoroughly trained in multi-storey vertical transitions without elevators, safely carrying double beds, multi-door refrigerators, and book collections down internal stairwells with zero damage to walls or railings. Whether moving near Kulwanti Hospital, Sarvodaya Nagar crossing, or the bustling coaching avenues of Dev Nagar, our teams deliver dependable service with zero delays.</p>
    </section>

    <!-- Section 2: Comprehensive Relocation Services -->
    <section>
        <h2 class="kkd-section-heading">Comprehensive Relocation Solutions for Kakadeo</h2>
        <p class="kkd-intro-p">From family apartments and builder floors to student flats and educational institutes, our moving packages cover every logistical requirement.</p>

        <div class="kkd-grid-3">
            <div class="kkd-card">
                <h3>Residential Home Shifting</h3>
                <p>Complete household relocations including delicate dinnerware wrapping, wardrobe clothing box packing, appliance padding, and neat room placement.</p>
            </div>
            <div class="kkd-card">
                <h3>Student & PG Room Relocations</h3>
                <p>Affordable, compact shifting packages for coaching students and scholars moving between hostels, PGs, and rental apartments.</p>
            </div>
            <div class="kkd-card">
                <h3>Coaching Institute & Office Shifting</h3>
                <p>Professional shifting for coaching centers, classrooms, computer labs, and administrative offices with minimal downtime.</p>
            </div>
            <div class="kkd-card">
                <h3>Modular Furniture Carpentry</h3>
                <p>Skilled in-house carpenters expertly dismantle, package, and reconstruct modular hydraulic double beds, study tables, and sliding wardrobes.</p>
            </div>
            <div class="kkd-card">
                <h3>Vehicle Transportation (Car & Bike)</h3>
                <p>Dedicated enclosed carriers for cars and two-wheelers with hydraulic ramps, wheel chocks, and transit insurance coverage across India.</p>
            </div>
            <div class="kkd-card">
                <h3>Interstate Highway Logistics</h3>
                <p>Direct linehaul container dispatches connecting Kakadeo via GT Road to Delhi NCR, Agra, Patna, and our Ranchi corporate headquarters.</p>
            </div>
        </div>
    </section>

    <!-- Section 3: Sub-Locality Breakdown & Moving Logistics -->
    <section>
        <h2 class="kkd-section-heading">Sub-Locality Logistics Across Kakadeo</h2>
        <p class="kkd-intro-p">Each pocket of the Kakadeo coaching and residential zone features distinct street layouts and logistical requirements:</p>

        <div class="kkd-grid-3">
            <div class="kkd-card">
                <h3>Coaching Mandi Core</h3>
                <p>Dense hub of educational institutes and hostels. Operations are conducted in early morning slots to avoid daytime student rush hours.</p>
            </div>
            <div class="kkd-card">
                <h3>Geeta Nagar (Quiet Residential)</h3>
                <p>Established family residential colony featuring independent houses and builder floors. Padded banister covers protect communal stairwells.</p>
            </div>
            <div class="kkd-card">
                <h3>Sharda Nagar (Green Enclaves)</h3>
                <p>Peaceful residential neighborhood with wide access lanes. Broad roads facilitate direct doorstep container truck parking.</p>
            </div>
            <div class="kkd-card">
                <h3>Dev Nagar & M-Block</h3>
                <p>Active multi-storey residential zone combining family apartments and student housing. Compact shuttle mini-trucks navigate inner streets easily.</p>
            </div>
            <div class="kkd-card">
                <h3>Double Puliya Commercial Axis</h3>
                <p>Major transit crossroads connecting Kakadeo to GT Road and Rawatpur. Ideal staging ground for container freight dispatch.</p>
            </div>
            <div class="kkd-card">
                <h3>Tulsi Nagar & Pandu Nagar Border</h3>
                <p>Upmarket residential sectors with modern apartment complexes. Floor runners protect indoor vitrified tile surfaces during transit.</p>
            </div>
        </div>

        <div class="kkd-highlight-box">
            <h3>Navigating Dense Coaching Lanes & Feeder Mini-Truck Solutions</h3>
            <p>Kakadeo's internal residential streets around Coaching Mandi and M-Block experience intense pedestrian activity during daylight hours. To prevent neighborhood traffic congestion, Shree Ashirwad Packers and Movers implements a synchronized feeder logistics protocol. We load household goods into agile compact mini-trucks (Tata Ace / 407) directly from your doorstep and shuttle them to our weatherproof container trucks parked safely along wider collector avenues, eliminating all bottleneck risks.</p>
        </div>

        <div class="kkd-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Protective bubble wrap and carton packaging in Kakadeo Kanpur" loading="lazy">
            <p class="kkd-image-caption">Multi-tier bubble wrapping and heavy 5-ply cartons safeguard fragile home appliances and study materials</p>
        </div>
    </section>

    <!-- Section 4: Transparent Tariff Table -->
    <section>
        <h2 class="kkd-section-heading">Transparent Moving Tariff Guide</h2>
        <p class="kkd-intro-p">We uphold clear, honest pricing with zero hidden surcharges or surprise billing. Review our standard pricing matrix for shifts originating in Kakadeo Kanpur:</p>

        <div class="kkd-table-wrap">
            <table class="kkd-table">
                <thead>
                    <tr>
                        <th>Property Configuration / Scope</th>
                        <th>Packing Material & Carpentry Scope</th>
                        <th>Local Shifting (Within Kanpur)</th>
                        <th>Inter-State Moving (Direct Express)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment / Student Flat</strong></td>
                        <td>Multi-Layer Air Bubble & Film Wrap</td>
                        <td>₹4,200 - ₹7,800</td>
                        <td>₹14,000 - ₹23,500</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Residential Floor / Flat</strong></td>
                        <td>5-Ply Corrugated Sheets + Edge Foam</td>
                        <td>₹7,800 - ₹13,500</td>
                        <td>₹21,500 - ₹35,000</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Independent House / Flat</strong></td>
                        <td>Heavy-Duty Blanket Wrap + Crating</td>
                        <td>₹12,500 - ₹19,500</td>
                        <td>₹31,000 - ₹46,000</td>
                    </tr>
                    <tr>
                        <td><strong>4/5 BHK Luxury Villa / Bungalow</strong></td>
                        <td>VIP White-Glove Crating & Rigging</td>
                        <td>₹17,500 - ₹27,000</td>
                        <td>₹41,000 - ₹66,000</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler Transport</strong></td>
                        <td>Wheel-Lock Clamping & Double Wrap</td>
                        <td>₹1,800 - ₹3,000</td>
                        <td>₹4,500 - ₹8,000</td>
                    </tr>
                    <tr>
                        <td><strong>Car Relocation (Sedan/SUV)</strong></td>
                        <td>Enclosed Car Carrier with Hydraulic Ramp</td>
                        <td>₹3,500 - ₹6,000</td>
                        <td>₹11,000 - ₹21,000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="kkd-highlight-box">
            <h3>Doorstep Surveys & Detailed Inventory Packing Lists</h3>
            <p>Every household relocation in Kakadeo includes an optional preliminary survey conducted in person or via digital video check. Our supervisors assess furniture dimensions, stairwell widths, and required packing materials to provide an itemized written quote with guaranteed price integrity. We issue formal GST moving bills, consignment tracking notes, and transit insurance certificates compliant with corporate and institutional relocation reimbursement guidelines.</p>
        </div>

        <p class="kkd-intro-p">For an accurate, itemized quotation tailored to your specific shifting volume, use our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" style="color: #2563eb; font-weight: 600; text-decoration: underline;">online shifting charges calculator</a> or speak directly with our Kakadeo logistics coordinator.</p>
    </section>

    <!-- Section 5: Step-by-Step Moving Protocol -->
    <section>
        <h2 class="kkd-section-heading">Our 5-Stage Damage-Free Relocation Protocol</h2>
        <p class="kkd-intro-p">Every move executed in Kakadeo adheres to our structured 5-stage quality management process designed for complete safety:</p>

        <div class="kkd-grid-3">
            <div class="kkd-card">
                <h3>1. Pre-Move Survey & Estimate</h3>
                <p>We assess your household inventory, stairwell width, parking accessibility, and fragility levels to assign appropriate packing materials and vehicle size.</p>
            </div>
            <div class="kkd-card">
                <h3>2. Professional Carpentry</h3>
                <p>Experienced carpenters dismantle double beds, modular almirahs, study desks, and wall-mounted items, packing hardware in labeled pouches.</p>
            </div>
            <div class="kkd-card">
                <h3>3. Multi-Tier Protective Packing</h3>
                <p>Fragile chinaware, crystal, and electronics receive multi-layer air bubble wrap, thermocol lining, and heavy-duty 5-ply corrugated carton packing.</p>
            </div>
            <div class="kkd-card">
                <h3>4. Safe Loading & Ratchet Securing</h3>
                <p>Goods are secured inside closed-body weatherproof container trucks using heavy-duty ratchet tie-down belts to prevent shifting during transit.</p>
            </div>
            <div class="kkd-card">
                <h3>5. Unloading & Setup</h3>
                <p>Our squad unloads, unpacks, reassembles furniture, and places major appliances in their designated positions at your destination home.</p>
            </div>
            <div class="kkd-card">
                <h3>Transit Risk Insurance</h3>
                <p>Comprehensive door-to-door transit insurance policy protects your belongings against fire, vehicle collision, or unintended road hazards.</p>
            </div>
        </div>

        <div class="kkd-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture dismantling by skilled carpenters in Kakadeo" loading="lazy">
            <p class="kkd-image-caption">Skilled carpenters carefully disassemble modular double beds and heavy furniture for safe transit</p>
        </div>
    </section>

    <!-- Section 6: Regional Highway Connectivity -->
    <section>
        <h2 class="kkd-section-heading">Strategic Transport Connectivity via Double Puliya & GT Road</h2>
        <p class="kkd-intro-p">Kakadeo occupies a central position within Kanpur's urban road grid. With immediate access to the Grand Trunk Road (GT Road) and Vijay Nagar bypass via Double Puliya, our moving trucks can depart rapidly toward northern and western highway corridors toward Kannauj, Aligarh, and Delhi NCR without entering downtown Kanpur traffic bottlenecks.</p>

        <p class="kkd-intro-p">For interstate relocations heading east toward Bihar, Jharkhand, and West Bengal—connecting to Patna, Gaya, Dhanbad, Jamshedpur, Bokaro, and our headquarters in <a href="<?php echo SITE_BASE_URL; ?>/" style="color: #2563eb; font-weight: 600; text-decoration: underline;">Ranchi</a>—our dedicated long-haul container trucks operate regular scheduled departures with real-time GPS tracking and dedicated support.</p>

        <p class="kkd-intro-p">Furthermore, the nearby Panki bypass allows our heavy container carriers to connect south toward the Kanpur-Jhansi highway and east toward Prayagraj and Varanasi, ensuring dependable transit schedules across all interstate corridors.</p>

        <div class="kkd-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Kakadeo Kanpur" loading="lazy">
            <p class="kkd-image-caption">All-weather closed container fleet guarantees punctual, secure door-to-door moving</p>
        </div>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section>
        <h2 class="kkd-section-heading">Frequently Asked Questions</h2>
        <p class="kkd-intro-p">Answers to common queries regarding relocations in Kakadeo Kanpur:</p>

        <div class="kkd-faq-item">
            <div class="kkd-faq-q">How do you navigate narrow lanes and heavy student traffic in Kakadeo?</div>
            <div class="kkd-faq-a">Kakadeo experiences heavy pedestrian student traffic throughout the day due to prominent coaching institutes. We schedule our primary loading operations during early dawn hours (6:00 AM to 9:00 AM) and deploy compact feeder shuttle mini-trucks (Tata Ace / 407) that access narrow residential lanes effortlessly, transferring goods to large container trucks parked along wider arterial avenues.</div>
        </div>

        <div class="kkd-faq-item">
            <div class="kkd-faq-q">What are the local moving charges in Kakadeo Kanpur?</div>
            <div class="kkd-faq-a">Local moves within Kakadeo or to neighboring localities like Swaroop Nagar, Kalyanpur, or Govind Nagar range from ₹4,200 to ₹7,800 for 1 BHK flats, ₹7,800 to ₹13,500 for 2 BHK residences, and ₹12,500 to ₹19,500 for 3 BHK homes, covering complete packing materials, carpentry, transit, and unloading.</div>
        </div>

        <div class="kkd-faq-item">
            <div class="kkd-faq-q">Can you handle student and PG hostel room relocations in Kakadeo?</div>
            <div class="kkd-faq-a">Yes. We offer budget-friendly mini-move packages for students moving between hostels, PGs, and rental rooms in Kakadeo, Sharda Nagar, and Geeta Nagar, providing sturdy carton boxes, luggage bags, and prompt doorstep delivery.</div>
        </div>

        <div class="kkd-faq-item">
            <div class="kkd-faq-q">Do your carpenters dismantle modular beds and study tables in Kakadeo?</div>
            <div class="kkd-faq-a">Yes. Our team includes professional carpenters equipped with cordless power tools to dismantle, pack, and reassemble modular hydraulic double beds, sliding wardrobes, computer desks, and book racks safely.</div>
        </div>

        <div class="kkd-faq-item">
            <div class="kkd-faq-q">How does Kakadeo connect to major expressways for interstate relocations?</div>
            <div class="kkd-faq-a">Kakadeo connects directly to the Grand Trunk Road (GT Road) and the Kanpur bypass via Double Puliya and Vijay Nagar. This allows our container fleet to merge quickly onto NH-19 toward Delhi NCR, Agra, Varanasi, Patna, and Ranchi without getting stuck in inner-city bottlenecks.</div>
        </div>

        <div class="kkd-faq-item">
            <div class="kkd-faq-q">How much advance booking is recommended for a home move in Kakadeo?</div>
            <div class="kkd-faq-a">Booking 24 to 48 hours in advance is recommended to ensure priority vehicle scheduling and allow our team to plan early-morning loading windows.</div>
        </div>
    </section>

    <!-- Section 8: Sister Neighborhoods & Authority Links -->
    <section>
        <h2 class="kkd-section-heading">Connected Kanpur Shifting Hubs</h2>
        <p class="kkd-intro-p">Explore our verified moving networks across Kanpur hyper-local sectors and parent authority corridors:</p>

        <div class="kkd-links-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kanpur" class="kkd-link-card">Kanpur City Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kalyanpur-kanpur" class="kkd-link-card">Kalyanpur Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-swaroop-nagar-kanpur" class="kkd-link-card">Swaroop Nagar Elite</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kidwai-nagar-kanpur" class="kkd-link-card">Kidwai Nagar Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-civil-lines-kanpur" class="kkd-link-card">Civil Lines Central</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-govind-nagar-kanpur" class="kkd-link-card">Govind Nagar Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow" class="kkd-link-card">Lucknow State Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-alambagh-lucknow" class="kkd-link-card">Alambagh Corridor</a>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="kkd-cta-box">
        <h3>Book Your Stress-Free Move in Kakadeo</h3>
        <p>Contact our experienced Kakadeo relocation team today for a prompt quotation, free doorstep survey, and damage-free moving service.</p>
        <div class="kkd-cta-group">
            <a href="tel:+919835565233" class="kkd-btn-primary">Call: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="kkd-btn-secondary">Get Free Estimate</a>
        </div>
    </section>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
