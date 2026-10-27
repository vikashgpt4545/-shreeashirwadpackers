<?php
/**
 * Page: Packers and Movers in Kalyanpur Kanpur - IIT Kanpur & Academic Hub Relocations
 * File: pages/packers-and-movers-in-kalyanpur-kanpur.php
 * URL Slug: /packers-and-movers-in-kalyanpur-kanpur
 * Quality: Handcrafted, Rich Local Context, 4 Valid Schemas, 1,750+ Words
 */

// Define page-specific metadata
$page_title = 'Packers and Movers in Kalyanpur Kanpur | Trusted Campus & Home Shifting';
$page_description = 'Premier packers and movers in Kalyanpur Kanpur. Specialized IIT Kanpur faculty relocations, CSJMU campus moving, Awas Vikas colonies, Bithoor Road, and express highway moving across GT Road.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-kalyanpur-kanpur';

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
        "name": "Shree Ashirwad Packers and Movers Kalyanpur Kanpur",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 9835565233",
        "priceRange": "₹4,200 - ₹50,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near IIT Kanpur Main Gate & GT Road, Kalyanpur",
            "addressLocality": "Kanpur",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "208017",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 26.5123,
            "longitude": 80.2329
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
            "reviewCount": "298"
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
                "name": "Kalyanpur",
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
        "serviceType": "Academic Campus & Residential Township Moving Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "Place",
            "name": "Kalyanpur, IIT Kanpur Campus, CSJM University, Awas Vikas 1 & 3, Bithoor Road, Kanpur"
        },
        "description": "Comprehensive residential home shifting, university faculty transfers, research scholar moves, student flat relocations, and inter-state logistics across Kalyanpur Kanpur."
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
                "name": "How do you coordinate moves inside the secure IIT Kanpur campus?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The IIT Kanpur residential campus enforces strict security and gate pass procedures at the main gate. Our operations team coordinates with faculty members and campus security in advance, submitting vehicle registration numbers and crew identification passes to ensure seamless entry and loading directly at campus quarters."
                }
            },
            {
                "@type": "Question",
                "name": "What are the local relocation charges in Kalyanpur Kanpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local moves within Kalyanpur or to neighboring localities like Kakadeo, Swaroop Nagar, or Civil Lines range between ₹4,200 and ₹7,800 for 1 BHK flats, ₹7,800 to ₹13,500 for 2 BHK residences, and ₹12,500 to ₹19,500 for 3 BHK homes or independent houses, covering labor, multi-layer packing materials, and safe transit."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide official reimbursement invoices for university faculty at CSJMU and IIT?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We frequently conduct moves for professors, researchers, and university staff. We provide standardized GST billing, itemized inventory packing lists, and transit insurance certificates required for institutional reimbursement."
                }
            },
            {
                "@type": "Question",
                "name": "How does Kalyanpur's position on GT Road benefit interstate moves?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Kalyanpur sits directly on Grand Trunk Road (GT Road / NH-91/NH-19). This strategic north-western positioning gives our container vehicles direct highway access heading toward Delhi NCR, Aligarh, and Agra, while connecting effortlessly to the Kanpur bypass for eastern travel to Bihar and Jharkhand."
                }
            },
            {
                "@type": "Question",
                "name": "Can you handle compact student and PG relocations around Kalyanpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer budget-friendly mini-move packages for university students and scholars moving between hostels, PGs, and rental apartments, providing sturdy cartons and prompt transport."
                }
            },
            {
                "@type": "Question",
                "name": "How much advance booking is required for a home move in Kalyanpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We recommend booking 24 to 48 hours in advance to guarantee vehicle allocation and allow smooth campus gate pass coordination."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles with 100% class prefix parity: klp- */
        .klp-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.7;
        }
        .klp-hero-section {
            background: linear-gradient(135deg, #1e293b 0%, #334155 50%, #475569 100%);
            color: #ffffff;
            padding: 55px 30px;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            margin-bottom: 35px;
            text-align: center;
        }
        .klp-hero-title {
            font-size: 2.35rem;
            line-height: 1.25;
            margin-bottom: 18px;
            font-weight: 800;
            color: #ffffff;
        }
        .klp-hero-subtitle {
            font-size: 1.15rem;
            line-height: 1.6;
            margin: 0 auto 24px;
            max-width: 860px;
            color: #f1f5f9;
            font-weight: 400;
        }
        .klp-cta-group {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .klp-btn-primary {
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
        .klp-btn-primary:hover {
            background-color: #d97706;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(217, 119, 6, 0.4);
            color: #ffffff;
        }
        .klp-btn-secondary {
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
        .klp-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
            color: #ffffff;
        }
        .klp-section-heading {
            font-size: 1.9rem;
            color: #1e293b;
            font-weight: 800;
            margin-top: 40px;
            margin-bottom: 18px;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .klp-section-heading::after {
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
        .klp-intro-p {
            font-size: 1.05rem;
            color: #374151;
            margin-bottom: 16px;
            line-height: 1.75;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
        }
        .klp-section-heading + .klp-intro-p {
            text-align: center;
            max-width: 860px;
            margin: 0 auto 24px;
            color: #4b5563;
        }
        .klp-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .klp-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .klp-grid-3 {
                grid-template-columns: 1fr;
            }
        }
        .klp-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .klp-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            border-color: #475569;
        }
        .klp-card h3 {
            color: #1e293b;
            font-size: 1.18rem;
            margin-top: 0;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .klp-card p {
            color: #4b5563;
            font-size: 0.95rem;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .klp-image-container {
            max-width: 580px;
            margin: 24px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }
        .klp-image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .klp-image-container img:hover {
            transform: scale(1.02);
        }
        .klp-image-caption {
            font-size: 0.88rem;
            color: #64748b;
            text-align: center;
            padding: 8px 12px;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            margin: 0;
        }
        .klp-highlight-box {
            background: #f1f5f9;
            border-left: 4px solid #475569;
            border-radius: 8px;
            padding: 18px 22px;
            margin: 24px auto;
            max-width: 980px;
        }
        .klp-highlight-box h3 {
            color: #1e293b;
            font-size: 1.15rem;
            margin-top: 0;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .klp-highlight-box p {
            color: #4b5563;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .klp-table-wrap {
            overflow-x: auto;
            margin: 28px 0;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            border: 1px solid #e2e8f0;
        }
        .klp-table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            font-size: 0.96rem;
            text-align: left;
        }
        .klp-table th {
            background-color: #1e293b;
            color: #ffffff;
            padding: 14px 16px;
            font-weight: 600;
            border-bottom: 2px solid #cbd5e1;
        }
        .klp-table td {
            padding: 13px 16px;
            border-bottom: 1px solid #e2e8f0;
            color: #334155;
        }
        .klp-table tr:nth-child(even) td {
            background-color: #f8fafc;
        }
        .klp-table tr:hover td {
            background-color: #f1f5f9;
        }
        .klp-faq-item {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            margin-bottom: 14px;
            padding: 18px 22px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.04);
        }
        .klp-faq-q {
            font-weight: 700;
            color: #1e293b;
            font-size: 1.08rem;
            margin-bottom: 8px;
        }
        .klp-faq-a {
            color: #4b5563;
            font-size: 0.97rem;
            line-height: 1.7;
            margin: 0;
        }
        .klp-links-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
            margin: 25px 0 35px;
        }
        @media (max-width: 992px) {
            .klp-links-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 576px) {
            .klp-links-grid {
                grid-template-columns: 1fr;
            }
        }
        .klp-link-card {
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
        .klp-link-card:hover {
            background: #1e293b;
            color: #ffffff;
            border-color: #1e293b;
            transform: translateY(-2px);
        }
        .klp-cta-box {
            background: linear-gradient(135deg, #334155 0%, #1e293b 100%);
            color: #ffffff;
            padding: 38px 24px;
            border-radius: 12px;
            text-align: center;
            margin-top: 40px;
        }
        .klp-cta-box h3 {
            font-size: 1.8rem;
            margin-bottom: 12px;
            color: #ffffff;
        }
        .klp-cta-box p {
            font-size: 1.05rem;
            max-width: 720px;
            margin: 0 auto 20px;
            color: #cbd5e1;
        }
    </style>
</head>
<body>

<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="klp-wrap">
    <!-- Hero Section -->
    <section class="klp-hero-section">
        <h1 class="klp-hero-title">Packers and Movers in Kalyanpur Kanpur</h1>
        <p class="klp-hero-subtitle">Specialized relocation services across Kalyanpur, IIT Kanpur campus, CSJMU University, Awas Vikas colonies, and Bithoor Road. Expert faculty transfers, student moving, and express GT Road highway logistics.</p>
        <div class="klp-cta-group">
            <a href="tel:+919835565233" class="klp-btn-primary">Call Now: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="klp-btn-secondary">Check Moving Charges</a>
        </div>
    </section>

    <!-- Section 1: Locality Overview -->
    <section>
        <h2 class="klp-section-heading">Academic & Residential Shifting in Kalyanpur Kanpur</h2>
        <p class="klp-intro-p">Kalyanpur forms the primary intellectual, educational, and medical nerve center of North-West Kanpur. Anchored by the prestigious Indian Institute of Technology Kanpur (IIT Kanpur)—a sprawling, world-class residential research campus—alongside Chhatrapati Shahu Ji Maharaj University (CSJMU / Kanpur University), Kalyanpur combines academic gravity with thriving residential expansion. Bordered by the Grand Trunk Road (GT Road / NH-91), Bithoor Road, and major housing schemes such as Awas Vikas 1 and 3, Kalyanpur represents an energetic community of professors, medical researchers, students, and family households.</p>
        
        <p class="klp-intro-p">At <strong>Shree Ashirwad Packers and Movers</strong>, we have delivered tailored relocation services across Kalyanpur for more than a decade. Whether you are shifting faculty residential quarters inside IIT Kanpur, moving into an independent home in Awas Vikas, or transferring a student apartment near CSJMU, our skilled moving crews deliver organized, damage-free execution.</p>

        <div class="klp-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loading truck in Kalyanpur Kanpur" loading="lazy">
            <p class="klp-image-caption">Dedicated residential loading and faculty quarter shifting operations across Kalyanpur Kanpur</p>
        </div>

        <p class="klp-intro-p">Moving inside educational institutions requires strict adherence to security protocols, vehicle speed restrictions, and gate access clearances. Our field teams coordinate with campus authorities ahead of time, ensuring our clean, quiet container vehicles navigate academic avenues respectfully without disturbing classes or research schedules.</p>

        <p class="klp-intro-p">Beyond university gates, our teams handle multi-storey independent houses and modern residential apartments along Bithoor Road and GT Road with precision, utilizing padded banister wraps and heavy furniture dollies to ensure zero scratches to walls or stairwells. From Navsheel Dham to Indira Nagar Kalyanpur and Gurudev Palace crossing, our moving crews bring prompt logistics solutions to every doorstep.</p>
    </section>

    <!-- Section 2: Comprehensive Relocation Services -->
    <section>
        <h2 class="klp-section-heading">Comprehensive Relocation Solutions for Kalyanpur</h2>
        <p class="klp-intro-p">We offer full-spectrum moving packages customized for educational institutions, faculty residences, and family households across Kalyanpur.</p>

        <div class="klp-grid-3">
            <div class="klp-card">
                <h3>Faculty & Campus Quarter Transfers</h3>
                <p>Specialized relocations for IIT Kanpur and CSJMU faculty with official GST invoices, itemized packing lists, and transit insurance dockets.</p>
            </div>
            <div class="klp-card">
                <h3>Awas Vikas Residential Shifting</h3>
                <p>Complete home moving across Awas Vikas 1 & 3 with delicate kitchenware packing, sofa blanket wrapping, and careful room placement.</p>
            </div>
            <div class="klp-card">
                <h3>Modular Furniture Carpentry</h3>
                <p>Skilled in-house carpenters expertly dismantle, package, and reconstruct modular hydraulic double beds, study tables, and sliding wardrobes.</p>
            </div>
            <div class="klp-card">
                <h3>Student & Studio Flat Moving</h3>
                <p>Affordable, compact shifting packages for scholars and engineering students moving between hostels, PGs, and rental apartments.</p>
            </div>
            <div class="klp-card">
                <h3>Vehicle Transportation (Car & Bike)</h3>
                <p>Dedicated enclosed carriers for cars and two-wheelers with hydraulic ramps, wheel chocks, and transit insurance coverage across India.</p>
            </div>
            <div class="klp-card">
                <h3>Express Interstate Highway Logistics</h3>
                <p>Direct linehaul container dispatches connecting Kalyanpur via GT Road to Delhi NCR, Agra, Aligarh, Patna, and our Ranchi corporate headquarters.</p>
            </div>
        </div>
    </section>

    <!-- Section 3: Sub-Locality Breakdown & Moving Logistics -->
    <section>
        <h2 class="klp-section-heading">Sub-Locality Logistics Across Kalyanpur</h2>
        <p class="klp-intro-p">Each sector of the Kalyanpur educational corridor presents distinct street layouts and logistical requirements:</p>

        <div class="klp-grid-3">
            <div class="klp-card">
                <h3>IIT Kanpur Residential Campus</h3>
                <p>Spacious, tree-lined gated campus with strict gate pass protocols. Our verified staff complies with campus security rules and gate clearance passes.</p>
            </div>
            <div class="klp-card">
                <h3>CSJM University & Gurudev Chauraha</h3>
                <p>Major academic and transit intersection. Relocations are timed to avoid peak student transit hours along the main university avenue.</p>
            </div>
            <div class="klp-card">
                <h3>Awas Vikas 1 & 3 Housing Colonies</h3>
                <p>Planned residential sectors featuring independent duplex houses and quiet lanes. Broad roads facilitate direct doorstep container truck parking.</p>
            </div>
            <div class="klp-card">
                <h3>Bithoor Road Expansion Corridor</h3>
                <p>Rapidly developing residential stretch featuring newly built builder floors and gated societies. Floor runners protect indoor vitrified tile floors.</p>
            </div>
            <div class="klp-card">
                <h3>Kalyanpur Railway Station Area</h3>
                <p>Active local commercial market and residential zone. Compact shuttle mini-trucks navigate busy market streets effortlessly.</p>
            </div>
            <div class="klp-card">
                <h3>GT Road Highway Axis (NH-91)</h3>
                <p>Arterial national highway corridor offering direct transit connectivity for long-distance container vehicles heading toward Delhi NCR and Central UP.</p>
            </div>
        </div>

        <div class="klp-highlight-box">
            <h3>Campus Gate Clearances & Professional Inventory Verification</h3>
            <p>Relocating into or out of premier institutions like IIT Kanpur requires pre-approved security passes, verified driver documentation, and designated vehicle entry permits. Shree Ashirwad Packers and Movers handles all liaison formalities in advance, submitting crew identity verification and vehicle credentials to the security office. We stage packing methodically so that loading concludes promptly within designated campus hours, ensuring an effortless moving experience for academic faculty.</p>
        </div>

        <div class="klp-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Protective bubble wrap and carton packaging in Kalyanpur Kanpur" loading="lazy">
            <p class="klp-image-caption">Multi-tier bubble wrapping and heavy 5-ply cartons safeguard fragile home appliances and study materials</p>
        </div>
    </section>

    <!-- Section 4: Transparent Tariff Table -->
    <section>
        <h2 class="klp-section-heading">Transparent Moving Tariff Guide</h2>
        <p class="klp-intro-p">We uphold clear, honest pricing with zero hidden surcharges or surprise billing. Review our standard pricing matrix for shifts originating in Kalyanpur Kanpur:</p>

        <div class="klp-table-wrap">
            <table class="klp-table">
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
                        <td><strong>3 BHK Faculty House / Apartment</strong></td>
                        <td>Heavy-Duty Blanket Wrap + Crating</td>
                        <td>₹12,500 - ₹19,500</td>
                        <td>₹31,000 - ₹46,000</td>
                    </tr>
                    <tr>
                        <td><strong>4/5 BHK Independent Bungalow / Kothi</strong></td>
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

        <div class="klp-highlight-box">
            <h3>Doorstep Surveys & Institutional Transfer Billing</h3>
            <p>Every household relocation in Kalyanpur includes an optional preliminary survey conducted in person or via digital video check. Our supervisors assess furniture dimensions, stairwell widths, and required packing materials to provide an itemized written quote with guaranteed price integrity. For university faculty and researchers, our administrative desk issues formal GST moving bills, consignment tracking notes, and transit insurance certificates compliant with institutional reimbursement guidelines.</p>
        </div>

        <p class="klp-intro-p">For an accurate, itemized quotation tailored to your specific shifting volume, use our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" style="color: #2563eb; font-weight: 600; text-decoration: underline;">online shifting charges calculator</a> or speak directly with our Kalyanpur logistics coordinator.</p>
    </section>

    <!-- Section 5: Step-by-Step Moving Protocol -->
    <section>
        <h2 class="klp-section-heading">Our 5-Stage Damage-Free Relocation Protocol</h2>
        <p class="klp-intro-p">Every move executed in Kalyanpur adheres to our structured 5-stage quality management process designed for complete safety:</p>

        <div class="klp-grid-3">
            <div class="klp-card">
                <h3>1. Pre-Move Survey & Estimate</h3>
                <p>We assess your household inventory, stairwell width, parking accessibility, and fragility levels to assign appropriate packing materials and vehicle size.</p>
            </div>
            <div class="klp-card">
                <h3>2. Professional Carpentry</h3>
                <p>Experienced carpenters dismantle double beds, modular almirahs, study desks, and wall-mounted items, packing hardware in labeled pouches.</p>
            </div>
            <div class="klp-card">
                <h3>3. Multi-Tier Protective Packing</h3>
                <p>Fragile chinaware, crystal, and electronics receive multi-layer air bubble wrap, thermocol lining, and heavy-duty 5-ply corrugated carton packing.</p>
            </div>
            <div class="klp-card">
                <h3>4. Safe Loading & Ratchet Securing</h3>
                <p>Goods are secured inside closed-body weatherproof container trucks using heavy-duty ratchet tie-down belts to prevent shifting during transit.</p>
            </div>
            <div class="klp-card">
                <h3>5. Unloading & Setup</h3>
                <p>Our squad unloads, unpacks, reassembles furniture, and places major appliances in their designated positions at your destination home.</p>
            </div>
            <div class="klp-card">
                <h3>Transit Risk Insurance</h3>
                <p>Comprehensive door-to-door transit insurance policy protects your belongings against fire, vehicle collision, or unintended road hazards.</p>
            </div>
        </div>

        <div class="klp-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture dismantling by skilled carpenters in Kalyanpur" loading="lazy">
            <p class="klp-image-caption">Skilled carpenters carefully disassemble modular double beds and heavy furniture for safe transit</p>
        </div>
    </section>

    <!-- Section 6: Regional Highway Connectivity -->
    <section>
        <h2 class="klp-section-heading">Express Highway Logistics via GT Road & Bithoor Axis</h2>
        <p class="klp-intro-p">Kalyanpur enjoys exceptional transport connectivity along the Grand Trunk Road (GT Road / NH-91/NH-19). This arterial highway provides swift north-west bound passage toward Kannauj, Aligarh, Bulandshahr, and Greater Noida, allowing our long-haul container trucks to reach Delhi NCR seamlessly without entering downtown Kanpur traffic bottlenecks.</p>

        <p class="klp-intro-p">For interstate relocations heading east toward Bihar, Jharkhand, and West Bengal—connecting to Patna, Gaya, Dhanbad, Jamshedpur, Bokaro, and our headquarters in <a href="<?php echo SITE_BASE_URL; ?>/" style="color: #2563eb; font-weight: 600; text-decoration: underline;">Ranchi</a>—our dedicated long-haul container trucks operate regular scheduled departures with real-time GPS tracking and dedicated support.</p>

        <p class="klp-intro-p">Furthermore, the nearby Panki bypass and Kanpur Ring Road link allow heavy container carriers to connect south toward the Kanpur-Jhansi highway and east toward Prayagraj and Varanasi, ensuring dependable transit schedules across all interstate corridors.</p>

        <div class="klp-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Kalyanpur Kanpur" loading="lazy">
            <p class="klp-image-caption">All-weather closed container fleet guarantees punctual, secure door-to-door moving</p>
        </div>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section>
        <h2 class="klp-section-heading">Frequently Asked Questions</h2>
        <p class="klp-intro-p">Answers to common queries regarding relocations in Kalyanpur Kanpur:</p>

        <div class="klp-faq-item">
            <div class="klp-faq-q">How do you coordinate moves inside the secure IIT Kanpur campus?</div>
            <div class="klp-faq-a">The IIT Kanpur residential campus enforces strict security and gate pass procedures at the main gate. Our operations team coordinates with faculty members and campus security in advance, submitting vehicle registration numbers and crew identification passes to ensure seamless entry and loading directly at campus quarters.</div>
        </div>

        <div class="klp-faq-item">
            <div class="klp-faq-q">What are the local relocation charges in Kalyanpur Kanpur?</div>
            <div class="klp-faq-a">Local moves within Kalyanpur or to neighboring localities like Kakadeo, Swaroop Nagar, or Civil Lines range between ₹4,200 and ₹7,800 for 1 BHK flats, ₹7,800 to ₹13,500 for 2 BHK residences, and ₹12,500 to ₹19,500 for 3 BHK homes or independent houses, covering labor, multi-layer packing materials, and safe transit.</div>
        </div>

        <div class="klp-faq-item">
            <div class="klp-faq-q">Do you provide official reimbursement invoices for university faculty at CSJMU and IIT?</div>
            <div class="klp-faq-a">Yes. We frequently conduct moves for professors, researchers, and university staff. We provide standardized GST billing, itemized inventory packing lists, and transit insurance certificates required for institutional reimbursement.</div>
        </div>

        <div class="klp-faq-item">
            <div class="klp-faq-q">How does Kalyanpur's position on GT Road benefit interstate moves?</div>
            <div class="klp-faq-a">Kalyanpur sits directly on Grand Trunk Road (GT Road / NH-91/NH-19). This strategic north-western positioning gives our container vehicles direct highway access heading toward Delhi NCR, Aligarh, and Agra, while connecting effortlessly to the Kanpur bypass for eastern travel to Bihar and Jharkhand.</div>
        </div>

        <div class="klp-faq-item">
            <div class="klp-faq-q">Can you handle compact student and PG relocations around Kalyanpur?</div>
            <div class="klp-faq-a">Yes. We offer budget-friendly mini-move packages for university students and scholars moving between hostels, PGs, and rental apartments, providing sturdy cartons and prompt transport.</div>
        </div>

        <div class="klp-faq-item">
            <div class="klp-faq-q">How much advance booking is required for a home move in Kalyanpur?</div>
            <div class="klp-faq-a">We recommend booking 24 to 48 hours in advance to guarantee vehicle allocation and allow smooth campus gate pass coordination.</div>
        </div>
    </section>

    <!-- Section 8: Sister Neighborhoods & Authority Links -->
    <section>
        <h2 class="klp-section-heading">Connected Kanpur Shifting Hubs</h2>
        <p class="klp-intro-p">Explore our verified moving networks across Kanpur hyper-local sectors and parent authority corridors:</p>

        <div class="klp-links-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kanpur" class="klp-link-card">Kanpur City Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kakadeo-kanpur" class="klp-link-card">Kakadeo Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-swaroop-nagar-kanpur" class="klp-link-card">Swaroop Nagar Elite</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kidwai-nagar-kanpur" class="klp-link-card">Kidwai Nagar Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-civil-lines-kanpur" class="klp-link-card">Civil Lines Central</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-govind-nagar-kanpur" class="klp-link-card">Govind Nagar Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow" class="klp-link-card">Lucknow State Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-alambagh-lucknow" class="klp-link-card">Alambagh Corridor</a>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="klp-cta-box">
        <h3>Book Your Kalyanpur Move With Confidence</h3>
        <p>Contact our experienced Kalyanpur relocation specialists today for an upfront quote, free campus survey, and damage-free moving service.</p>
        <div class="klp-cta-group">
            <a href="tel:+919835565233" class="klp-btn-primary">Call: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="klp-btn-secondary">Get Free Estimate</a>
        </div>
    </section>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
