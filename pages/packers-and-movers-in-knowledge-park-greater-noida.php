<?php
/**
 * Page: Packers and Movers in Knowledge Park, Greater Noida
 * Description: Hyper-local authority hub for Shree Ashirwad Packers and Movers in Knowledge Park (I, II, III), Greater Noida.
 * Author: Shree Ashirwad Packers and Movers
 * Meta: 100% Handcrafted Hyper-Local Hub, Google Compliant Schemas, Scoped CSS Parity
 */
defined('ROOT_PATH') OR define('ROOT_PATH', realpath(__DIR__ . '/..'));
require_once ROOT_PATH . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packers and Movers in Knowledge Park Greater Noida | Student & Home Shifting</title>
    <meta name="description" content="Certified packers and movers in Knowledge Park Greater Noida. Expert student moving, faculty relocation, and household shifting across Sharda, Galgotias & GL Bajaj.">
    <meta name="keywords" content="packers and movers in knowledge park greater noida, student movers knowledge park, hostel shifting greater noida, faculty relocation knowledge park, sharda university packers movers">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-knowledge-park-greater-noida">
    <meta property="og:title" content="Packers and Movers in Knowledge Park Greater Noida | Shree Ashirwad Packers">
    <meta property="og:description" content="Affordable and reliable moving services in Knowledge Park Greater Noida. Specialized student packages, faculty moves, and pan-India relocations.">
    <meta property="og:url" content="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-knowledge-park-greater-noida">
    <meta property="og:type" content="website">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <style>
        /* Scoped styles for Knowledge Park Greater Noida Hub */
        .kp-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px 50px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            color: #1f2937;
            line-height: 1.7;
        }
        .kp-hero-section {
            background: linear-gradient(135deg, #312e81 0%, #4338ca 55%, #3730a3 100%);
            color: #ffffff;
            padding: 50px 20px;
            text-align: center;
            border-radius: 12px;
            margin-bottom: 35px;
            box-shadow: 0 8px 24px rgba(67, 56, 202, 0.2);
        }
        .kp-hero-title {
            font-size: 2.4rem;
            font-weight: 800;
            color: #ffffff;
            margin-top: 0;
            margin-bottom: 15px;
            line-height: 1.25;
        }
        .kp-hero-subtitle {
            font-size: 1.15rem;
            color: #e0e7ff;
            max-width: 860px;
            margin: 0 auto 22px;
            line-height: 1.6;
        }
        .kp-meta-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            margin-bottom: 25px;
        }
        .kp-badge {
            background-color: rgba(255, 255, 255, 0.15);
            color: #ffffff;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.88rem;
            font-weight: 500;
            backdrop-filter: blur(4px);
            border: 1px solid rgba(255, 255, 255, 0.25);
        }
        .kp-hero-cta {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .kp-btn-primary {
            background-color: #f59e0b;
            color: #ffffff;
            padding: 12px 26px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 700;
            font-size: 1rem;
            transition: all 0.2s ease;
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.35);
        }
        .kp-btn-primary:hover {
            background-color: #d97706;
            transform: translateY(-2px);
        }
        .kp-btn-secondary {
            background-color: transparent;
            color: #ffffff;
            border: 2px solid #ffffff;
            padding: 10px 24px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.2s ease;
        }
        .kp-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }
        .kp-section-heading {
            font-size: 1.9rem;
            color: #312e81;
            font-weight: 800;
            margin-top: 35px;
            margin-bottom: 18px;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .kp-section-heading::after {
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
        .kp-intro-p {
            font-size: 1.05rem;
            color: #374151;
            margin-bottom: 16px;
            line-height: 1.75;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
        }
        .kp-section-heading + .kp-intro-p {
            text-align: center;
            max-width: 860px;
            margin: 0 auto 24px;
            color: #4b5563;
        }
        .kp-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .kp-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .kp-grid-3 {
                grid-template-columns: 1fr;
            }
        }
        .kp-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .kp-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            border-color: #f59e0b;
        }
        .kp-card h3 {
            color: #312e81;
            font-size: 1.18rem;
            margin-top: 0;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .kp-card p {
            color: #4b5563;
            font-size: 0.95rem;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .kp-image-container {
            max-width: 580px;
            margin: 24px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }
        .kp-image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .kp-image-container img:hover {
            transform: scale(1.02);
        }
        .kp-image-caption {
            font-size: 0.85rem;
            color: #6b7280;
            text-align: center;
            padding: 8px 12px;
            background: #f9fafb;
            border-top: 1px solid #e5e7eb;
            font-style: italic;
        }
        .kp-table-responsive {
            overflow-x: auto;
            margin: 25px 0;
            background: #ffffff;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }
        .kp-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.95rem;
        }
        .kp-table th {
            background-color: #312e81;
            color: #ffffff;
            padding: 14px 16px;
            font-weight: 700;
            letter-spacing: 0.3px;
        }
        .kp-table td {
            padding: 12px 16px;
            border-bottom: 1px solid #e5e7eb;
            color: #374151;
        }
        .kp-table tr:last-child td {
            border-bottom: none;
        }
        .kp-table tr:nth-child(even) {
            background-color: #f8fafc;
        }
        .kp-highlight-box {
            background-color: #eef2ff;
            border-left: 4px solid #4338ca;
            padding: 20px 24px;
            border-radius: 0 8px 8px 0;
            margin: 25px auto;
            max-width: 980px;
        }
        .kp-highlight-box h4 {
            color: #312e81;
            font-size: 1.15rem;
            margin-top: 0;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .kp-step-card {
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
        .kp-step-num {
            background: #312e81;
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
        .kp-faq-item {
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            margin: 0 auto 14px;
            max-width: 950px;
            padding: 18px 22px;
            background: #ffffff;
        }
        .kp-faq-question {
            font-size: 1.12rem;
            font-weight: 700;
            color: #312e81;
            margin-top: 0;
            margin-bottom: 8px;
        }
        .kp-faq-answer {
            color: #4b5563;
            margin-bottom: 0;
            font-size: 0.98rem;
            line-height: 1.65;
        }
        .kp-cluster-nav {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 24px;
            margin: 35px auto 25px;
            max-width: 1000px;
        }
        .kp-cluster-nav h4 {
            color: #0f172a;
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 1.15rem;
            font-weight: 700;
            text-align: center;
        }
        .kp-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
            gap: 12px;
        }
        .kp-cluster-link {
            display: block;
            background: #ffffff;
            border: 1px solid #cbd5e1;
            padding: 10px 14px;
            border-radius: 8px;
            color: #312e81;
            text-decoration: none;
            font-size: 0.92rem;
            font-weight: 600;
            text-align: center;
            transition: all 0.2s ease;
        }
        .kp-cluster-link:hover {
            border-color: #312e81;
            background-color: #312e81;
            color: #ffffff;
            transform: translateY(-2px);
        }
        .kp-cta-banner {
            background: linear-gradient(135deg, #312e81 0%, #4338ca 100%);
            color: #ffffff;
            border-radius: 12px;
            padding: 35px 25px;
            text-align: center;
            margin: 35px auto 0;
            max-width: 1000px;
            box-shadow: 0 8px 20px rgba(67, 56, 202, 0.25);
        }
        .kp-cta-banner h3 {
            color: #ffffff;
            font-size: 1.6rem;
            font-weight: 800;
            margin-top: 0;
            margin-bottom: 12px;
        }
        .kp-cta-banner p {
            color: #e0e7ff;
            max-width: 750px;
            margin: 0 auto 20px;
            font-size: 1.05rem;
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Knowledge Park Greater Noida",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "telephone": "+91-8409531615",
        "email": "support@shreeashirwadpackers.com",
        "url": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-knowledge-park-greater-noida",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Knowledge Park II, Near Aqua Line Metro Station",
            "addressLocality": "Greater Noida",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "201310",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "28.4615",
            "longitude": "77.4988"
        },
        "priceRange": "₹2,500 - ₹45,000",
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
            "opens": "07:00",
            "closes": "22:00"
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
                "name": "Greater Noida Relocation",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-greater-noida"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Knowledge Park",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-knowledge-park-greater-noida"
            }
        ]
    }
    </script>

    <!-- Schema 3: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Student Moving & Faculty Relocation in Knowledge Park Greater Noida",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "Place",
            "name": "Knowledge Park I, II, III, Greater Noida, Uttar Pradesh"
        },
        "description": "Affordable student mini-moves, university hostel shifting, faculty household relocation, and institutional equipment transport in Knowledge Park Greater Noida.",
        "serviceType": "Relocation & Moving Services"
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
                "name": "Do you provide student mini-moving packages for Knowledge Park college students?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we specialize in low-cost, convenient mini-moving packages tailored for students shifting out of college hostels or PG accommodations near Sharda University, Galgotias University, and NIET. Packages cover cartons, books, study luggage, bicycles, and computers."
                }
            },
            {
                "@type": "Question",
                "name": "How do you handle faculty and professor household moves in Knowledge Park?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "For university faculty and researchers residing on campus or nearby housing societies, we provide full-service home relocation. This includes custom book packaging, fine furniture dismantling, delicate glassware protection, and complete unpacking assistance."
                }
            },
            {
                "@type": "Question",
                "name": "What are the moving rates for student shifting within Greater Noida?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Student hostel and PG mini-moves within Knowledge Park or to Pari Chowk start at just ₹2,500 to ₹4,500. Standard 1 BHK student apartments range between ₹3,500 and ₹6,000 including vehicle transport, loading, and unloading."
                }
            },
            {
                "@type": "Question",
                "name": "Can you ship student luggage back home to Bihar, Jharkhand, or Eastern India?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide shared and dedicated container parcel services connecting Knowledge Park directly to Patna, Gaya, Ranchi, Jamshedpur, Bokaro, and Dhanbad, ensuring affordable holiday and graduation transit with online tracking."
                }
            },
            {
                "@type": "Question",
                "name": "Can you relocate college computer labs and laboratory scientific instruments?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our commercial moving wing handles educational institutional logistics, safely transporting computer servers, chemistry lab equipment, audio-visual conference equipment, and library archives across campus blocks."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php require_once ROOT_PATH . '/includes/header.php'; ?>

<main class="kp-wrap">
    <!-- Hero Section -->
    <section class="kp-hero-section">
        <h1 class="kp-hero-title">Packers and Movers in Knowledge Park Greater Noida</h1>
        <p class="kp-hero-subtitle">The dedicated relocation authority for North India's premier educational capital. Affordable student hostel shifting, university faculty home moving, and institutional logistics across Knowledge Park I, II, and III.</p>
        <div class="kp-meta-badges">
            <span class="kp-badge">✓ Specialized Student Pocket-Friendly Packages</span>
            <span class="kp-badge">✓ Sharda, Galgotias & GL Bajaj Campus Experts</span>
            <span class="kp-badge">✓ Faculty & Professor Household Shifting</span>
            <span class="kp-badge">✓ Direct Parcel Corridors to Bihar & Jharkhand</span>
        </div>
        <div class="kp-hero-cta">
            <a href="tel:+918409531615" class="kp-btn-primary">Call Now: 084095 31615</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="kp-btn-secondary">Check Rate Calculator</a>
        </div>
    </section>

    <!-- Overview Section -->
    <section>
        <h2 class="kp-section-heading">Educational Hub Relocation Excellence in Knowledge Park</h2>
        <p class="kp-intro-p">Knowledge Park in Greater Noida stands as the unrivaled higher education, technological research, and institutional powerhouse of Northern India. Meticulously organized into distinct phases (Knowledge Park I, II, III, IV, and V), this sprawling academic enclave accommodates dozens of prestigious universities, engineering colleges, business academies, and international research organizations. Renowned institutions such as Sharda University, Galgotias University, Bennett University, Noida Institute of Engineering and Technology (NIET), GL Bajaj Institute of Technology and Management, Mangalmay Institute, ITS Engineering College, and the nearby Gautam Buddha University draw tens of thousands of scholars, professors, researchers, and technical staff from across the nation every academic year.</p>
        <p class="kp-intro-p">The relocation requirements within Knowledge Park are uniquely tailored around the academic calendar. At the end of semesters, during monsoon admissions, and following annual campus placement cycles, thousands of students relocate between private hostels, paying-guest accommodations, shared rental flats, and their home states. Simultaneously, university professors, deans, and administrative professionals move into campus staff quarters or nearby residential communities across Pari Chowk and Alpha sectors. Standard movers often lack the flexible packaging options, budget-friendly mini-move rates, and campus gate clearance protocols needed for academic moves. Shree Ashirwad Packers and Movers has designed specialized relocation packages specifically optimized for students, faculty members, and educational institutions in Knowledge Park.</p>

        <div class="kp-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Student and household goods loading in container truck in Knowledge Park Greater Noida" width="580" height="360">
            <div class="kp-image-caption">Systematic loading of student belongings, study desks, and household inventory in Knowledge Park</div>
        </div>

        <div class="kp-highlight-box">
            <h4>Knowledge Park II Metro Connectivity & Swift Expressway Access</h4>
            <p class="kp-intro-p">Conveniently positioned adjacent to the Knowledge Park II Metro Station along the Aqua Line and minutes from the Noida-Greater Noida Expressway, our rapid dispatch vehicles can navigate academic avenues effortlessly, providing on-time morning pickups even during busy exam and convocation periods.</p>
        </div>

        <p class="kp-intro-p">Whether you are a student moving into your first independent flat near Knowledge Park III, a graduating scholar shipping luggage back home to Eastern India, or a newly appointed professor relocating your family library and household goods from another state, Shree Ashirwad Packers and Movers provides polite, punctual, and highly economical moving solutions.</p>
        <p class="kp-intro-p">Our local team coordinates closely with hostel wardens, college security checkpoints, and private PG operators across Knowledge Park, ensuring all necessary gate entry passes and loading permissions are arranged ahead of time to eliminate moving-day friction.</p>
    </section>

    <!-- Specialized Services Grid -->
    <section>
        <h2 class="kp-section-heading">Specialized Moving Services Across Knowledge Park</h2>
        <p class="kp-intro-p">We provide targeted relocation capabilities designed around the budgets, timelines, and delicate equipment handling needs of the Knowledge Park academic community.</p>

        <div class="kp-grid-3">
            <div class="kp-card">
                <h3>Student Hostel & PG Mini-Moves</h3>
                <p>Budget-friendly shifting for student baggage, study tables, mattresses, desktop computers, books, and sports gear between college hostels and private apartments.</p>
            </div>
            <div class="kp-card">
                <h3>Faculty & Professor Relocation</h3>
                <p>Complete white-glove moving for university faculty and researchers, featuring custom carton packing for extensive book collections, academic awards, and modular furniture.</p>
            </div>
            <div class="kp-card">
                <h3>Campus Laboratory Logistics</h3>
                <p>Shockproof packaging and specialized transport for delicate laboratory equipment, scientific glass apparatus, testing machines, and computer lab networking servers.</p>
            </div>
            <div class="kp-card">
                <h3>Graduation Luggage Express</h3>
                <p>Door-to-door parcel transit sending graduating students' personal items directly to their home addresses in Bihar, Jharkhand, Bengal, or pan-India destinations.</p>
            </div>
            <div class="kp-card">
                <h3>Shared Container Economical Moves</h3>
                <p>Shared containerized transport options allowing students to split moving truck space with batchmates, dramatically reducing interstate relocation costs.</p>
            </div>
            <div class="kp-card">
                <h3>Two-Wheeler & Bicycle Transport</h3>
                <p>Enclosed bike carrier services transporting student scooters, motorcycles, and gear bicycles with pre-transit inspection and protective bubble wrapping.</p>
            </div>
        </div>

        <div class="kp-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Bubble wrap and carton packaging for Knowledge Park students" width="580" height="360">
            <div class="kp-image-caption">Reinforced 5-ply cartons, bubble wrap, and waterproof tape protect textbooks, laptops, and personal items</div>
        </div>

        <div class="kp-highlight-box">
            <h4>Parent Regional Authority & Transparent Moving Rates</h4>
            <p class="kp-intro-p">Explore our comprehensive citywide guide on the <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-greater-noida">Packers and Movers in Greater Noida</a> city hub, check our central gateway terminal at <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-pari-chowk-greater-noida">Packers and Movers in Pari Chowk Greater Noida</a>, or check instant shifting costs on our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">Live Tariff Calculator</a>.</p>
        </div>
    </section>

    <!-- Transparent Rate Table -->
    <section>
        <h2 class="kp-section-heading">Transparent Relocation Rates for Knowledge Park</h2>
        <p class="kp-intro-p">We believe in transparent, upfront student and family pricing with zero hidden surcharges. Below is our standard pricing structure for moves originating in Knowledge Park Greater Noida.</p>

        <div class="kp-table-responsive">
            <table class="kp-table">
                <thead>
                    <tr>
                        <th>Relocation Type</th>
                        <th>Standard Inclusions</th>
                        <th>Within Greater Noida</th>
                        <th>To Central Noida / Delhi NCR</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Student Hostel / Single Room</td>
                        <td>4–6 cartons, study table, luggage handling, small van</td>
                        <td>₹2,500 – ₹4,200</td>
                        <td>₹3,800 – ₹6,000</td>
                    </tr>
                    <tr>
                        <td>Shared 2-Student Flat</td>
                        <td>Full packing, 2 beds dismantle, study desks, local transport</td>
                        <td>₹4,500 – ₹7,500</td>
                        <td>₹6,500 – ₹10,500</td>
                    </tr>
                    <tr>
                        <td>1 BHK Student / Faculty Home</td>
                        <td>Complete home packing, bed dismantle, appliance setup</td>
                        <td>₹3,800 – ₹6,200</td>
                        <td>₹5,500 – ₹8,500</td>
                    </tr>
                    <tr>
                        <td>2 BHK Faculty Family Flat</td>
                        <td>Multi-layer packing, book library cartons, furniture carpentry</td>
                        <td>₹6,500 – ₹11,000</td>
                        <td>₹9,000 – ₹14,500</td>
                    </tr>
                    <tr>
                        <td>Two-Wheeler (Bike / Scooter)</td>
                        <td>Bubble wrap protection, ramp loading, direct transit</td>
                        <td>₹1,500 – ₹2,500</td>
                        <td>₹2,200 – ₹3,500</td>
                    </tr>
                    <tr>
                        <td>Inter-State Move (to Bihar / Jharkhand)</td>
                        <td>Closed container, toll, transit insurance, room setup</td>
                        <td>₹18,000 – ₹32,000 (1-2 BHK)</td>
                        <td>₹26,000 – ₹44,000 (3 BHK)</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="kp-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture dismantling and carpentry in Knowledge Park" width="580" height="360">
            <div class="kp-image-caption">Professional carpenters disassembling study desks and beds for safe transit across Greater Noida</div>
        </div>

        <div class="kp-highlight-box">
            <h4>All-Inclusive Guaranteed Estimates & Student Group Discounts</h4>
            <p class="kp-intro-p">Every formal quotation from Shree Ashirwad Packers and Movers is clear, transparent, and binding, covering all labor costs, transit permits, packing boxes, and fuel with zero surprise fees on moving day.</p>
            <p class="kp-intro-p" style="margin-bottom: 0;">We also provide flexible installment and student group discount options for college batches relocating together to the same city after graduation, making long-distance relocations exceptionally affordable.</p>
        </div>
    </section>

    <!-- 5-Step Operational Methodology -->
    <section>
        <h2 class="kp-section-heading">Our Proven 5-Step Academic Moving Workflow</h2>
        <p class="kp-intro-p">To deliver timely, stress-free relocations that fit around exam schedules and semester breaks, we follow a synchronized 5-step moving protocol.</p>

        <div class="kp-step-card">
            <div class="kp-step-num">1</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #312e81; font-weight: 700;">Inventory Survey & Student Budget Estimate</h4>
                <p class="kp-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Send us your item list or photos over WhatsApp for an instant student-discounted quote, customized around your specific room inventory and desired pickup date.</p>
            </div>
        </div>

        <div class="kp-step-card">
            <div class="kp-step-num">2</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #312e81; font-weight: 700;">Hostel & Campus Security Gate Clearance</h4>
                <p class="kp-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Our team coordinates with hostel wardens and security officers at Sharda, Galgotias, or NIET, providing driver ID proofs in advance for frictionless campus access.</p>
            </div>
        </div>

        <div class="kp-step-card">
            <div class="kp-step-num">3</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #312e81; font-weight: 700;">Systematic Packing with Heavy-Duty Cartons</h4>
                <p class="kp-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">We provide heavy-duty cardboard boxes, bubble wrap rolls, and waterproof tape to pack textbooks, academic notes, laptops, monitors, and personal clothes securely.</p>
            </div>
        </div>

        <div class="kp-step-card">
            <div class="kp-step-num">4</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #312e81; font-weight: 700;">Weatherproof Container Truck Transit</h4>
                <p class="kp-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Your items are loaded into closed, lockable container trucks protected from dust and rain. Real-time GPS tracking enables you to track your shipment every kilometer of the way.</p>
            </div>
        </div>

        <div class="kp-step-card">
            <div class="kp-step-num">5</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #312e81; font-weight: 700;">Safe Doorstep Delivery & Setup Assistance</h4>
                <p class="kp-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">At your destination, our staff unloads all boxes into your room, assists with assembling study tables and beds, and takes away all discarded packing debris.</p>
            </div>
        </div>

        <div class="kp-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Knowledge Park" width="580" height="360">
            <div class="kp-image-caption">Weatherproof covered container fleet providing prompt, damage-free delivery across Greater Noida</div>
        </div>
    </section>

    <!-- Why Choose Us Grid -->
    <section>
        <h2 class="kp-section-heading">Why Knowledge Park Colleges & Students Trust Us</h2>
        <p class="kp-intro-p">Over the last decade, Shree Ashirwad Packers and Movers has earned an outstanding reputation across Delhi NCR and Eastern India by holding ourselves to the highest standards of reliability, transparency, and customer care.</p>

        <div class="kp-grid-3">
            <div class="kp-card">
                <h3>Student-Friendly Pricing</h3>
                <p>Transparent mini-move tariffs designed specifically for college budgets, with zero hidden charges and special discounts on presentation of a valid college ID card.</p>
            </div>
            <div class="kp-card">
                <h3>Campus Gate Clearance Protocol</h3>
                <p>Our drivers and staff are well-versed in campus gate pass requirements at Sharda, Galgotias, Bennett, and NIET, ensuring no delays at entry gates.</p>
            </div>
            <div class="kp-card">
                <h3>Certified Background-Checked Staff</h3>
                <p>All crew members are permanent, police-verified professionals who work respectfully within university hostels and family residential apartments.</p>
            </div>
            <div class="kp-card">
                <h3>100% Comprehensive Transit Insurance</h3>
                <p>Full transit risk protection covering road transit, accidental collision, and weather hazards, ensuring total financial security for your laptops and appliances.</p>
            </div>
            <div class="kp-card">
                <h3>Flexible Moving Hours</h3>
                <p>We work around class schedules, exam periods, and weekend time slots, offering early morning or evening pickups to suit student convenience.</p>
            </div>
            <div class="kp-card">
                <h3>Direct Pan-India Highway Corridors</h3>
                <p>Direct routes from Knowledge Park to our central headquarters at <a href="<?php echo SITE_BASE_URL; ?>/">Packers and Movers in Ranchi</a>, plus direct links to Patna, Jamshedpur, and Dhanbad.</p>
            </div>
        </div>

        <div class="kp-highlight-box">
            <h4>Institutional Laboratory & Library Relocation Services</h4>
            <p class="kp-intro-p">We also provide institutional turnkey moving contracts for university libraries, chemistry and physics laboratories, and administrative departmental transfers with comprehensive inventory management and weekend execution.</p>
        </div>

        <p class="kp-intro-p">We additionally maintain secure, pest-controlled warehouse storage facilities near Pari Chowk where students can safely store luggage, books, and appliances during summer internships or semester breaks at highly nominal monthly rates.</p>
    </section>

    <!-- Frequently Asked Questions -->
    <section>
        <h2 class="kp-section-heading">Frequently Asked Questions &mdash; Knowledge Park Moving</h2>
        <p class="kp-intro-p">Here are practical answers to the most common questions students, faculty members, and researchers ask when organizing a move in Knowledge Park Greater Noida.</p>

        <div class="kp-faq-item">
            <h4 class="kp-faq-question">Do you provide student mini-moving packages for Knowledge Park college students?</h4>
            <p class="kp-faq-answer">Yes, we specialize in low-cost, convenient mini-moving packages tailored for students shifting out of college hostels or PG accommodations near Sharda University, Galgotias University, and NIET. Packages cover cartons, books, study luggage, bicycles, and computers.</p>
        </div>

        <div class="kp-faq-item">
            <h4 class="kp-faq-question">How do you handle faculty and professor household moves in Knowledge Park?</h4>
            <p class="kp-faq-answer">For university faculty and researchers residing on campus or nearby housing societies, we provide full-service home relocation. This includes custom book packaging, fine furniture dismantling, delicate glassware protection, and complete unpacking assistance.</p>
        </div>

        <div class="kp-faq-item">
            <h4 class="kp-faq-question">What are the moving rates for student shifting within Greater Noida?</h4>
            <p class="kp-faq-answer">Student hostel and PG mini-moves within Knowledge Park or to Pari Chowk start at just ₹2,500 to ₹4,500. Standard 1 BHK student apartments range between ₹3,500 and ₹6,000 including vehicle transport, loading, and unloading.</p>
        </div>

        <div class="kp-faq-item">
            <h4 class="kp-faq-question">Can you ship student luggage back home to Bihar, Jharkhand, or Eastern India?</h4>
            <p class="kp-faq-answer">Yes, we provide shared and dedicated container parcel services connecting Knowledge Park directly to Patna, Gaya, Ranchi, Jamshedpur, Bokaro, and Dhanbad, ensuring affordable holiday and graduation transit with online tracking.</p>
        </div>

        <div class="kp-faq-item">
            <h4 class="kp-faq-question">Can you relocate college computer labs and laboratory scientific instruments?</h4>
            <p class="kp-faq-answer">Yes, our commercial moving wing handles educational institutional logistics, safely transporting computer servers, chemistry lab equipment, audio-visual conference equipment, and library archives across campus blocks.</p>
        </div>
    </section>

    <!-- Connected Cluster Navigation -->
    <section class="kp-cluster-nav">
        <h4>Explore Connected Relocation Hubs Across Greater Noida & Noida</h4>
        <div class="kp-cluster-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-pari-chowk-greater-noida" class="kp-cluster-link">Pari Chowk Greater Noida</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-alpha-greater-noida" class="kp-cluster-link">Alpha Greater Noida</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-greater-noida" class="kp-cluster-link">Greater Noida City Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida-extension" class="kp-cluster-link">Noida Extension</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sector-150-noida" class="kp-cluster-link">Sector 150 Noida</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sector-137-noida" class="kp-cluster-link">Sector 137 Noida</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida" class="kp-cluster-link">Noida City Authority Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/" class="kp-cluster-link">Company Headquarters (Ranchi)</a>
        </div>
    </section>

    <!-- Call to Action Banner -->
    <section class="kp-cta-banner">
        <h3>Moving in Knowledge Park Greater Noida?</h3>
        <p>Get an affordable student, faculty, or home moving estimate from Greater Noida's trusted relocation team today.</p>
        <div class="kp-hero-cta">
            <a href="tel:+918409531615" class="kp-btn-primary">Call Now: 084095 31615</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="kp-btn-secondary">Check Rate Calculator</a>
        </div>
    </section>
</main>

<?php require_once ROOT_PATH . '/includes/footer.php'; ?>
</body>
</html>
