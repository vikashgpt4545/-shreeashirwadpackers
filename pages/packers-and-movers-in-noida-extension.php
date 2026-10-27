<?php
/**
 * Page: Packers and Movers in Noida Extension (Greater Noida West)
 * Description: Premier high-rise apartment relocation, furniture carpentry, household shifting, and corporate moving across Gaur City, Cherry County, Supertech Eco Village, and Arihant Arden.
 * Author: Shree Ashirwad Packers and Movers
 * Meta: 100% Handcrafted Hyper-Local Authority Hub, Google Compliant Schemas, Scoped CSS Parity
 */
defined('ROOT_PATH') OR define('ROOT_PATH', realpath(__DIR__ . '/..'));
require_once ROOT_PATH . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packers and Movers in Noida Extension | Greater Noida West Moving</title>
    <meta name="description" content="Certified packers and movers in Noida Extension (Greater Noida West). Expert high-rise apartment shifting across Gaur City, Cherry County, Nirala Estate & Ace City.">
    <meta name="keywords" content="packers and movers in noida extension, movers and packers greater noida west, gaur city packers and movers, house shifting noida extension, char murti packers movers">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida-extension">
    <meta property="og:title" content="Packers and Movers in Noida Extension | Shree Ashirwad Packers">
    <meta property="og:description" content="Professional shifting and relocation services in Noida Extension / Greater Noida West. High-rise society gate clearance, furniture dismantling, and pan-India moving.">
    <meta property="og:url" content="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida-extension">
    <meta property="og:type" content="website">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <style>
        /* Scoped styles for Noida Extension Hub */
        .next-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px 50px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            color: #1f2937;
            line-height: 1.7;
        }
        .next-hero-section {
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 55%, #1d4ed8 100%);
            color: #ffffff;
            padding: 50px 20px;
            text-align: center;
            border-radius: 12px;
            margin-bottom: 35px;
            box-shadow: 0 8px 24px rgba(37, 99, 235, 0.2);
        }
        .next-hero-title {
            font-size: 2.4rem;
            font-weight: 800;
            color: #ffffff;
            margin-top: 0;
            margin-bottom: 15px;
            line-height: 1.25;
        }
        .next-hero-subtitle {
            font-size: 1.15rem;
            color: #dbeafe;
            max-width: 860px;
            margin: 0 auto 22px;
            line-height: 1.6;
        }
        .next-meta-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            margin-bottom: 25px;
        }
        .next-badge {
            background-color: rgba(255, 255, 255, 0.15);
            color: #ffffff;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.88rem;
            font-weight: 500;
            backdrop-filter: blur(4px);
            border: 1px solid rgba(255, 255, 255, 0.25);
        }
        .next-hero-cta {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .next-btn-primary {
            background-color: #f97316;
            color: #ffffff;
            padding: 12px 26px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 700;
            font-size: 1rem;
            transition: all 0.2s ease;
            box-shadow: 0 4px 12px rgba(249, 115, 22, 0.35);
        }
        .next-btn-primary:hover {
            background-color: #ea580c;
            transform: translateY(-2px);
        }
        .next-btn-secondary {
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
        .next-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }
        .next-section-heading {
            font-size: 1.9rem;
            color: #1e3a8a;
            font-weight: 800;
            margin-top: 35px;
            margin-bottom: 18px;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .next-section-heading::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: #f97316;
            border-radius: 2px;
        }
        .next-intro-p {
            font-size: 1.05rem;
            color: #374151;
            margin-bottom: 16px;
            line-height: 1.75;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
        }
        .next-section-heading + .next-intro-p {
            text-align: center;
            max-width: 860px;
            margin: 0 auto 24px;
            color: #4b5563;
        }
        .next-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .next-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .next-grid-3 {
                grid-template-columns: 1fr;
            }
        }
        .next-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .next-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            border-color: #f97316;
        }
        .next-card h3 {
            color: #1e3a8a;
            font-size: 1.18rem;
            margin-top: 0;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .next-card p {
            color: #4b5563;
            font-size: 0.95rem;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .next-image-container {
            max-width: 580px;
            margin: 24px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }
        .next-image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .next-image-container img:hover {
            transform: scale(1.02);
        }
        .next-image-caption {
            font-size: 0.85rem;
            color: #6b7280;
            text-align: center;
            padding: 8px 12px;
            background: #f9fafb;
            border-top: 1px solid #e5e7eb;
            font-style: italic;
        }
        .next-table-responsive {
            overflow-x: auto;
            margin: 25px 0;
            background: #ffffff;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }
        .next-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.95rem;
        }
        .next-table th {
            background-color: #1e3a8a;
            color: #ffffff;
            padding: 14px 16px;
            font-weight: 700;
            letter-spacing: 0.3px;
        }
        .next-table td {
            padding: 12px 16px;
            border-bottom: 1px solid #e5e7eb;
            color: #374151;
        }
        .next-table tr:last-child td {
            border-bottom: none;
        }
        .next-table tr:nth-child(even) {
            background-color: #f8fafc;
        }
        .next-highlight-box {
            background-color: #eff6ff;
            border-left: 4px solid #2563eb;
            padding: 20px 24px;
            border-radius: 0 8px 8px 0;
            margin: 25px auto;
            max-width: 980px;
        }
        .next-highlight-box h4 {
            color: #1e3a8a;
            font-size: 1.15rem;
            margin-top: 0;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .next-step-card {
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
        .next-step-num {
            background: #1e3a8a;
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
        .next-faq-item {
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            margin: 0 auto 14px;
            max-width: 950px;
            padding: 18px 22px;
            background: #ffffff;
        }
        .next-faq-question {
            font-size: 1.12rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-top: 0;
            margin-bottom: 8px;
        }
        .next-faq-answer {
            color: #4b5563;
            margin-bottom: 0;
            font-size: 0.98rem;
            line-height: 1.65;
        }
        .next-cluster-nav {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 24px;
            margin: 35px auto 25px;
            max-width: 1000px;
        }
        .next-cluster-nav h4 {
            color: #0f172a;
            margin-top: 0;
            margin-bottom: 16px;
            font-size: 1.15rem;
            font-weight: 700;
            text-align: center;
        }
        .next-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
            gap: 12px;
        }
        .next-cluster-link {
            display: block;
            background: #ffffff;
            border: 1px solid #cbd5e1;
            padding: 10px 14px;
            border-radius: 8px;
            color: #1e3a8a;
            text-decoration: none;
            font-size: 0.92rem;
            font-weight: 600;
            text-align: center;
            transition: all 0.2s ease;
        }
        .next-cluster-link:hover {
            border-color: #1e3a8a;
            background-color: #1e3a8a;
            color: #ffffff;
            transform: translateY(-2px);
        }
        .next-cta-banner {
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%);
            color: #ffffff;
            border-radius: 12px;
            padding: 35px 25px;
            text-align: center;
            margin: 35px auto 0;
            max-width: 1000px;
            box-shadow: 0 8px 20px rgba(37, 99, 235, 0.25);
        }
        .next-cta-banner h3 {
            color: #ffffff;
            font-size: 1.6rem;
            font-weight: 800;
            margin-top: 0;
            margin-bottom: 12px;
        }
        .next-cta-banner p {
            color: #dbeafe;
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
        "name": "Shree Ashirwad Packers and Movers Noida Extension",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "telephone": "+91-8409531615",
        "email": "support@shreeashirwadpackers.com",
        "url": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida-extension",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Char Murti Chowk, Gaur City, Noida Extension",
            "addressLocality": "Greater Noida West",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "201009",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "28.6087",
            "longitude": "77.4273"
        },
        "priceRange": "₹3,500 - ₹50,000",
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
                "name": "Noida Relocation",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Noida Extension",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida-extension"
            }
        ]
    }
    </script>

    <!-- Schema 3: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "High-Rise Apartment & Household Relocation in Noida Extension",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "Place",
            "name": "Noida Extension / Greater Noida West, Uttar Pradesh"
        },
        "description": "Comprehensive apartment moving, freight elevator handling, basement shuttle vans, modular furniture assembly, and inter-state logistics in Greater Noida West.",
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
                "name": "How do you manage basement height restrictions in Gaur City and other mega societies?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Many residential towers in Noida Extension feature basement clearance limits of 2.4 to 2.8 meters. We utilize small low-profile shuttle vehicles (such as Tata Ace) to transfer packed cartons and furniture directly from your elevator landing to our large 14-foot or 17-foot container truck parked at the society perimeter loading dock."
                }
            },
            {
                "@type": "Question",
                "name": "What documents are required for move-in and move-out gate passes in Greater Noida West?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Most society estate management offices in Gaur City, Supertech Eco Village, and Cherry County require tenant NOC clearance, vehicle registration numbers, mover crew ID proofs, and a payment receipt for elevator movement charges. We provide all team credentials in advance to streamline gate approvals."
                }
            },
            {
                "@type": "Question",
                "name": "What are the moving charges within Noida Extension or to Central Noida?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local moves within Noida Extension typically cost ₹3,800 to ₹6,500 for a 1 BHK, ₹6,500 to ₹10,500 for a 2 BHK, and ₹10,000 to ₹16,000 for a 3 BHK apartment. Crossing to Central Noida (Sectors 62, 18, 50, 76) generally costs ₹1,000 to ₹2,000 extra depending on distance and toll charges."
                }
            },
            {
                "@type": "Question",
                "name": "Can you handle long-distance relocation from Noida Extension to Bihar or Jharkhand?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we operate dedicated GPS-enabled container routes connecting Greater Noida West directly to Patna, Gaya, Muzaffarpur, Ranchi, Jamshedpur, and Dhanbad with door-to-door delivery, full transit insurance, and IBA-approved corporate bills."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide packing and carpentry services for modular kitchens and wardrobes?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our moving crews include trained furniture carpenters who safely dismantle and reinstall modular wardrobes, hydraulic storage beds, dressing tables, study desks, and wall-mounted LED TV units without surface scratches."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php require_once ROOT_PATH . '/includes/header.php'; ?>

<main class="next-wrap">
    <!-- Hero Section -->
    <section class="next-hero-section">
        <h1 class="next-hero-title">Packers and Movers in Noida Extension</h1>
        <p class="next-hero-subtitle">NCR’s premier high-rise relocation specialists for Greater Noida West. Effortless apartment shifting, basement shuttle logistics, and society gate pass management across Gaur City, Cherry County, Supertech Eco Village, and Arihant Arden.</p>
        <div class="next-meta-badges">
            <span class="next-badge">✓ High-Rise Tower Specialists (20–32 Floors)</span>
            <span class="next-badge">✓ Basement Shuttle Vans Available</span>
            <span class="next-badge">✓ Gaur City RWA Gate Clearance</span>
            <span class="next-badge">✓ 100% Insured Inter-State Moving</span>
        </div>
        <div class="next-hero-cta">
            <a href="tel:+918409531615" class="next-btn-primary">Call Now: 084095 31615</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="next-btn-secondary">Check Rate Calculator</a>
        </div>
    </section>

    <!-- Overview Section -->
    <section>
        <h2 class="next-section-heading">High-Rise Relocation Mastery in Noida Extension (Greater Noida West)</h2>
        <p class="next-intro-p">Noida Extension, officially designated as Greater Noida West, represents the largest and most vibrant high-density residential transformation in the entire National Capital Region. Spanning across Sectors 1, 2, 3, 4, 10, 12, 16, 16B, 16C, and Techzone 4, this mega residential metropolis is home to hundreds of thousands of IT professionals, corporate executives, growing families, and commercial enterprises. Defined by signature landmarks such as Gaur City 1 and 2, Char Murti Chowk (Kisan Chowk), Ek Murti Chowk, Gaur City Mall, Galaxy Diamond Plaza, and Yatharth Super Speciality Hospital, the region bustles with dynamic daily residential activity.</p>
        <p class="next-intro-p">Shifting residences within or out of Noida Extension presents distinct logistical realities. The vast majority of societies here—including iconic mega-projects like Gaur City’s multiple avenues (11th, 12th, 14th, 16th), Cherry County, Supertech Eco Village (Phases I, II, III), Nirala Estate, Arihant Arden, Ace City, Panchsheel Hynish, Ajnara Le Garden, RG Luxury Homes, and Stellar Jeevan—consist of towering 20 to 32-story high-rise buildings. Relocations demand intricate coordination with Resident Welfare Associations, advance booking of service freight elevators, strict compliance with restricted shifting hours (typically 9:00 AM to 5:00 PM), and navigating underground basement ceiling height limitations. Shree Ashirwad Packers and Movers has mastered these localized complexities through years of continuous, verified service across Greater Noida West.</p>

        <div class="next-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loading in container truck in Noida Extension" width="580" height="360">
            <div class="next-image-caption">Dedicated high-rise loading operations and cargo stacking for apartment relocations in Noida Extension</div>
        </div>

        <div class="next-highlight-box">
            <h4>Basement Height Clearance & Feeder Shuttle Solutions</h4>
            <p class="next-intro-p">Many mega condominiums in Noida Extension restrict entry of large multi-axle freight trucks into basement corridors due to 2.4-meter height limits. Shree Ashirwad Packers and Movers deploys compact feeder shuttles (like Tata Ace and Mahindra Bolero Maxi Trucks) to transport your goods from the basement lift lobby directly to our large covered highway trucks stationed at the society’s designated perimeter loading bay.</p>
        </div>

        <p class="next-intro-p">Whether you are upgrading to a larger 3 BHK flat in Gaur City, shifting across the Hindon Bridge into Central Noida, or relocating long-distance to our company headquarters in Jharkhand or Bihar, our disciplined teams manage every phase with military precision, courteous customer service, and unyielding care for your household possessions.</p>
    </section>

    <!-- Specialized Services Grid -->
    <section>
        <h2 class="next-section-heading">Comprehensive Relocation Services Across Greater Noida West</h2>
        <p class="next-intro-p">We provide end-to-end relocation solutions structured specifically around the apartment layouts, elevator specifications, and traffic patterns of Noida Extension.</p>

        <div class="next-grid-3">
            <div class="next-card">
                <h3>High-Rise Apartment Moving</h3>
                <p>Seamless shifting for 1 BHK, 2 BHK, and 3 BHK flats in towers up to 32 stories across Gaur City, Cherry County, and Supertech Eco Village with full service elevator padding.</p>
            </div>
            <div class="next-card">
                <h3>Society Gate Pass Coordination</h3>
                <p>Advance documentation support, driver KYC submission, and facility management coordination to ensure zero delays at security check-posts on shifting morning.</p>
            </div>
            <div class="next-card">
                <h3>Modular Furniture Carpentry</h3>
                <p>Expert dismantling and accurate reassembly of hydraulic king beds, modular 4-door wardrobes, work-from-home computer setups, and study desks by master carpenters.</p>
            </div>
            <div class="next-card">
                <h3>Multi-Layer Fragile Packing</h3>
                <p>5-ply corrugated carton boxes, thick bubble wrap rolls, edge protectors, and cling film wrapping for delicate kitchen glassware, LED televisions, and imported showpieces.</p>
            </div>
            <div class="next-card">
                <h3>Inter-State Highway Corridors</h3>
                <p>Direct closed container transit connecting Noida Extension to Ranchi, Patna, Kolkata, Jamshedpur, Bokaro, and Dhanbad with real-time GPS location sharing.</p>
            </div>
            <div class="next-card">
                <h3>Vehicle Transportation Carriers</h3>
                <p>Safe door-to-door car and two-wheeler transportation using enclosed hydraulic carriers, complete with pre-dispatch condition reports and insurance backing.</p>
            </div>
        </div>

        <div class="next-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Bubble wrap and carton packaging for Noida Extension apartments" width="580" height="360">
            <div class="next-image-caption">Industrial-grade bubble film and reinforced corrugated boxes protect sensitive appliances from vibrations</div>
        </div>

        <div class="next-highlight-box">
            <h4>Parent Authority Pillar & Transparent Pricing</h4>
            <p class="next-intro-p">Review our master regional relocation guide on the <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida">Packers and Movers in Noida</a> authority page, check adjacent institutional routes on <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-greater-noida">Packers and Movers in Greater Noida</a>, or verify instant moving estimates on our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">Live Tariff Calculator</a>.</p>
        </div>
    </section>

    <!-- Transparent Rate Table -->
    <section>
        <h2 class="next-section-heading">Transparent Relocation Rates for Noida Extension</h2>
        <p class="next-intro-p">We believe in transparent pricing without unexpected hidden surcharges. Below is our standard rate breakdown for residential shifting in Noida Extension. Final costs depend on your inventory volume, packaging tier, and distance.</p>

        <div class="next-table-responsive">
            <table class="next-table">
                <thead>
                    <tr>
                        <th>Apartment Size</th>
                        <th>Service Inclusions</th>
                        <th>Within Noida Extension</th>
                        <th>To Central Noida / Delhi NCR</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1 BHK Apartment</td>
                        <td>Complete packing, loading, local transport, unloading</td>
                        <td>₹3,800 – ₹6,500</td>
                        <td>₹5,500 – ₹8,500</td>
                    </tr>
                    <tr>
                        <td>2 BHK High-Rise Flat</td>
                        <td>Standard bubble wrap, bed dismantle, transit setup</td>
                        <td>₹6,500 – ₹10,500</td>
                        <td>₹8,500 – ₹14,000</td>
                    </tr>
                    <tr>
                        <td>3 BHK High-Rise Flat</td>
                        <td>Multi-layer packing, full carpentry, LED TV packing</td>
                        <td>₹10,000 – ₹16,000</td>
                        <td>₹13,500 – ₹20,000</td>
                    </tr>
                    <tr>
                        <td>4 BHK / Penthouse</td>
                        <td>White-glove packing, wooden crating, dedicated crew</td>
                        <td>₹15,000 – ₹24,000</td>
                        <td>₹18,500 – ₹28,000</td>
                    </tr>
                    <tr>
                        <td>Small Feeder Shuttle (Tata Ace)</td>
                        <td>Basement-to-dock transfer with driver & fuel</td>
                        <td>₹1,200 – ₹2,200</td>
                        <td>Included in high-rise package</td>
                    </tr>
                    <tr>
                        <td>Inter-State Move (to Bihar / Jharkhand)</td>
                        <td>Full packing, container truck, toll, insurance, setup</td>
                        <td>₹22,000 – ₹38,000 (2 BHK)</td>
                        <td>₹28,000 – ₹48,000 (3 BHK)</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="next-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture dismantling and carpentry in Noida Extension" width="580" height="360">
            <div class="next-image-caption">Skilled carpenters disassembling hydraulic double beds and wardrobes for safe elevator transit</div>
        </div>

        <div class="next-highlight-box">
            <h4>All-Inclusive Guaranteed Estimates & Transparent Billing</h4>
            <p class="next-intro-p" style="margin-bottom: 0;">Every written quotation from Shree Ashirwad Packers and Movers is all-inclusive, explicitly covering fuel costs, labor wages, equipment charges, and GST billing with zero surprise additions on delivery day.</p>
        </div>
    </section>

    <!-- 5-Step Execution Methodology -->
    <section>
        <h2 class="next-section-heading">Our Proven 5-Step High-Rise Moving Workflow</h2>
        <p class="next-intro-p">Moving in high-density high-rise towers requires meticulous planning. We follow a proven 5-step operational protocol to guarantee punctuality and eliminate moving-day stress.</p>

        <div class="next-step-card">
            <div class="next-step-num">1</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #1e3a8a; font-weight: 700;">Pre-Move Digital or On-Site Survey</h4>
                <p class="next-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">We evaluate your inventory list via video consultation or physical visit in Noida Extension, assessing elevator dimensions, parking proximity, and specialized crating needs to produce an exact written quote.</p>
            </div>
        </div>

        <div class="next-step-card">
            <div class="next-step-num">2</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #1e3a8a; font-weight: 700;">RWA Permission & Gate Pass Processing</h4>
                <p class="next-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Our team supplies crew Aadhaar verification documents and truck details to your society facility office 24 hours prior to moving, securing approved service elevator slots and gate-entry clearance.</p>
            </div>
        </div>

        <div class="next-step-card">
            <div class="next-step-num">3</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #1e3a8a; font-weight: 700;">Systematic Multi-Layered Packing</h4>
                <p class="next-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">On moving morning, our trained packers arrive equipped with heavy-duty cartons, bubble wrap, thermocol sheets, and stretch film, methodically labeling and boxing room by room for effortless unboxing.</p>
            </div>
        </div>

        <div class="next-step-card">
            <div class="next-step-num">4</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #1e3a8a; font-weight: 700;">Protected Transit in Weatherproof Fleet</h4>
                <p class="next-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Goods are wheeled via padded dollies to the freight lift and transferred to our closed container truck. Live GPS tracking allows you to monitor your moving vehicle throughout its journey.</p>
            </div>
        </div>

        <div class="next-step-card">
            <div class="next-step-num">5</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #1e3a8a; font-weight: 700;">Unloading, Furniture Reassembly & Setup</h4>
                <p class="next-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">At your new flat, our crew places furniture and cartons into specified rooms, reassembles beds and dining tables, assists with preliminary unboxing, and collects all used packaging debris.</p>
            </div>
        </div>

        <div class="next-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Noida Extension" width="580" height="360">
            <div class="next-image-caption">Weatherproof covered container fleet providing prompt, scratch-free delivery across Greater Noida West</div>
        </div>
    </section>

    <!-- Why Choose Us Grid -->
    <section>
        <h2 class="next-section-heading">Why Residents in Greater Noida West Trust Shree Ashirwad</h2>
        <p class="next-intro-p">With thousands of successful moves conducted across Delhi NCR and Eastern India, Shree Ashirwad Packers and Movers has earned an unmatched reputation for integrity, reliability, and precision.</p>

        <div class="next-grid-3">
            <div class="next-card">
                <h3>Tower Logistics Familiarity</h3>
                <p>Our teams know the layout, security desks, and service elevators of nearly every major society in Noida Extension, eliminating confusion and avoidable delays.</p>
            </div>
            <div class="next-card">
                <h3>Certified Background-Checked Crew</h3>
                <p>All loaders, drivers, and packers are permanent, background-verified professionals who work respectfully within high-end family residential environments.</p>
            </div>
            <div class="next-card">
                <h3>Professional Carpentry Included</h3>
                <p>You don't need to hire separate carpenters. Our moving crew includes experienced handymen equipped with power drills to dismantle and reassemble all modern furniture.</p>
            </div>
            <div class="next-card">
                <h3>100% Comprehensive Insurance</h3>
                <p>Full transit risk protection covering road transit, accidental collision, and weather hazards, ensuring total financial security for your valuable electronics and furniture.</p>
            </div>
            <div class="next-card">
                <h3>Dedicated Move Coordinator</h3>
                <p>You receive a direct point of contact who coordinates timing, answers your questions, and manages your relocation itinerary from start to finish.</p>
            </div>
            <div class="next-card">
                <h3>Direct Long-Distance Corridors</h3>
                <p>Direct routes connecting Noida Extension to our central headquarters at <a href="<?php echo SITE_BASE_URL; ?>/">Packers and Movers in Ranchi</a>, plus Patna, Jamshedpur, and Dhanbad.</p>
            </div>
        </div>

        <div class="next-highlight-box">
            <h4>Commercial & Corporate Office Relocation in Techzone 4</h4>
            <p class="next-intro-p">In addition to household shifting, we execute structured commercial office moves across Techzone 4 and Gaur City commercial arcades, handling server racks, modular workstations, filing cabinets, and conference equipment over weekends with zero office downtime.</p>
        </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section>
        <h2 class="next-section-heading">Frequently Asked Questions &mdash; Noida Extension Moving</h2>
        <p class="next-intro-p">Here are practical answers to the most common questions residents ask when planning an apartment relocation in Greater Noida West.</p>

        <div class="next-faq-item">
            <h4 class="next-faq-question">How do you manage basement height restrictions in Gaur City and other mega societies?</h4>
            <p class="next-faq-answer">Many residential towers in Noida Extension feature basement clearance limits of 2.4 to 2.8 meters. We utilize small low-profile shuttle vehicles (such as Tata Ace) to transfer packed cartons and furniture directly from your elevator landing to our large 14-foot or 17-foot container truck parked at the society perimeter loading dock.</p>
        </div>

        <div class="next-faq-item">
            <h4 class="next-faq-question">What documents are required for move-in and move-out gate passes in Greater Noida West?</h4>
            <p class="next-faq-answer">Most society estate management offices in Gaur City, Supertech Eco Village, and Cherry County require tenant NOC clearance, vehicle registration numbers, mover crew ID proofs, and a payment receipt for elevator movement charges. We provide all team credentials in advance to streamline gate approvals.</p>
        </div>

        <div class="next-faq-item">
            <h4 class="next-faq-question">What are the moving charges within Noida Extension or to Central Noida?</h4>
            <p class="next-faq-answer">Local moves within Noida Extension typically cost ₹3,800 to ₹6,500 for a 1 BHK, ₹6,500 to ₹10,500 for a 2 BHK, and ₹10,000 to ₹16,000 for a 3 BHK apartment. Crossing to Central Noida (Sectors 62, 18, 50, 76) generally costs ₹1,000 to ₹2,000 extra depending on distance and toll charges.</p>
        </div>

        <div class="next-faq-item">
            <h4 class="next-faq-question">Can you handle long-distance relocation from Noida Extension to Bihar or Jharkhand?</h4>
            <p class="next-faq-answer">Yes, we operate dedicated GPS-enabled container routes connecting Greater Noida West directly to Patna, Gaya, Muzaffarpur, Ranchi, Jamshedpur, and Dhanbad with door-to-door delivery, full transit insurance, and IBA-approved corporate bills.</p>
        </div>

        <div class="next-faq-item">
            <h4 class="next-faq-question">Do you provide packing and carpentry services for modular kitchens and wardrobes?</h4>
            <p class="next-faq-answer">Yes, our moving crews include trained furniture carpenters who safely dismantle and reinstall modular wardrobes, hydraulic storage beds, dressing tables, study desks, and wall-mounted LED TV units without surface scratches.</p>
        </div>
    </section>

    <!-- Connected Cluster Navigation -->
    <section class="next-cluster-nav">
        <h4>Explore Connected Relocation Hubs Across Noida & Greater Noida</h4>
        <div class="next-cluster-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sector-62-noida" class="next-cluster-link">Sector 62 Noida</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sector-18-noida" class="next-cluster-link">Sector 18 Noida</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sector-137-noida" class="next-cluster-link">Sector 137 Noida</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sector-76-noida" class="next-cluster-link">Sector 76 Noida</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sector-50-noida" class="next-cluster-link">Sector 50 Noida</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sector-150-noida" class="next-cluster-link">Sector 150 Noida</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida" class="next-cluster-link">Noida Authority Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-greater-noida" class="next-cluster-link">Greater Noida Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/" class="next-cluster-link">Company Headquarters (Ranchi)</a>
        </div>
    </section>

    <!-- Call to Action Banner -->
    <section class="next-cta-banner">
        <h3>Moving in Noida Extension / Greater Noida West?</h3>
        <p>Get a guaranteed upfront moving quote from NCR's trusted high-rise relocation specialists today.</p>
        <div class="next-hero-cta">
            <a href="tel:+918409531615" class="next-btn-primary">Call Now: 084095 31615</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="next-btn-secondary">Check Rate Calculator</a>
        </div>
    </section>
</main>

<?php require_once ROOT_PATH . '/includes/footer.php'; ?>
</body>
</html>
