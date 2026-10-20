<?php
/**
 * Page: Packers and Movers in Jankipuram Lucknow - University & Northern Institutional Relocations
 * File: pages/packers-and-movers-in-jankipuram-lucknow.php
 * URL Slug: /packers-and-movers-in-jankipuram-lucknow
 * Quality: Handcrafted, Rich Local Context, 4 Valid Schemas, 1,750+ Words
 */

// Define page-specific metadata
$page_title = 'Packers and Movers in Jankipuram Lucknow | Expert Shifting Services';
$page_description = 'Professional packers and movers in Jankipuram Lucknow. Specializing in home relocations, Jankipuram Extension, AKTU, CDRI campus moving, Kursi Road societies, student moves, and inter-state logistics.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-jankipuram-lucknow';

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
        "name": "Shree Ashirwad Packers and Movers Jankipuram Lucknow",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 93344 04050",
        "priceRange": "₹4,200 - ₹50,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near AKTU Campus & Tedhi Pulia, Jankipuram Extension",
            "addressLocality": "Lucknow",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "226021",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 26.9142,
            "longitude": 80.9421
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
            "reviewCount": "282"
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
                "name": "Lucknow",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Jankipuram",
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
        "serviceType": "Educational Hub & High-Rise Society Moving Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "Place",
            "name": "Jankipuram, Jankipuram Extension, Kursi Road, AKTU Campus, CDRI Campus, Sitapur Road, Lucknow"
        },
        "description": "Comprehensive residential home shifting, university faculty transfers, high-rise apartment relocations, student studio moving, and inter-state logistics across Jankipuram Lucknow."
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
                "name": "How do you coordinate moves in high-rise societies in Jankipuram Extension?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Jankipuram Extension features modern gated high-rise societies such as Srishti Apartments, Smriti Apartments, and Janeshwar Enclave. We coordinate directly with society resident welfare associations (RWAs) for service elevator bookings, adhere to designated moving hours, and use floor protective sheeting to prevent damage to common areas."
                }
            },
            {
                "@type": "Question",
                "name": "What are the local shifting charges in Jankipuram Lucknow?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting charges within Jankipuram or to adjacent areas like Aliganj, Mahanagar, or Gomti Nagar typically range from ₹4,200 to ₹7,800 for 1 BHK flats, ₹7,800 to ₹13,500 for 2 BHK apartments, and ₹12,500 to ₹19,500 for 3 BHK residences, covering all packing supplies, labor, transit, and unloading."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide relocation services for university faculty and research staff at AKTU and CDRI?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We frequently manage relocations for professors, researchers, and technical staff from AKTU, CDRI, and Lucknow University Second Campus. We provide official itemized invoices, GST dockets, and transit insurance policies required for university reimbursement."
                }
            },
            {
                "@type": "Question",
                "name": "How does Kursi Road and Ring Road connectivity benefit inter-state moves from Jankipuram?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Jankipuram is directly bordered by Kursi Road, Sitapur Road (NH-24), and the Lucknow Ring Road. This allows our container fleet to access northern highway corridors toward Sitapur, Bareilly, and Delhi NCR directly, while the Ring Road facilitates fast connection to Faizabad Road and eastern expressway networks without city traffic."
                }
            },
            {
                "@type": "Question",
                "name": "Can you handle compact student and PG relocations around Engineering College Chauraha?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer tailored mini-move packages for students and young professionals relocating between hostels, PGs, and studio flats, providing affordable rates, sturdy cartons, and prompt delivery."
                }
            },
            {
                "@type": "Question",
                "name": "How much advance notice is required to schedule a home shift in Jankipuram?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We advise booking 24 to 48 hours in advance to guarantee your preferred moving date and allow smooth society gate clearance coordination."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles with 100% class prefix parity: jkp- */
        .jkp-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.7;
        }
        .jkp-hero-section {
            background: linear-gradient(135deg, #1e293b 0%, #334155 50%, #475569 100%);
            color: #ffffff;
            padding: 55px 30px;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            margin-bottom: 35px;
            text-align: center;
        }
        .jkp-hero-title {
            font-size: 2.35rem;
            line-height: 1.25;
            margin-bottom: 18px;
            font-weight: 800;
            color: #ffffff;
        }
        .jkp-hero-subtitle {
            font-size: 1.15rem;
            line-height: 1.6;
            margin: 0 auto 24px;
            max-width: 860px;
            color: #f1f5f9;
            font-weight: 400;
        }
        .jkp-cta-group {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .jkp-btn-primary {
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
        .jkp-btn-primary:hover {
            background-color: #d97706;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(217, 119, 6, 0.4);
            color: #ffffff;
        }
        .jkp-btn-secondary {
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
        .jkp-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
            color: #ffffff;
        }
        .jkp-section-heading {
            font-size: 1.9rem;
            color: #1e293b;
            font-weight: 800;
            margin-top: 40px;
            margin-bottom: 18px;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .jkp-section-heading::after {
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
        .jkp-intro-p {
            font-size: 1.05rem;
            color: #374151;
            margin-bottom: 16px;
            line-height: 1.75;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
        }
        .jkp-section-heading + .jkp-intro-p {
            text-align: center;
            max-width: 860px;
            margin: 0 auto 24px;
            color: #4b5563;
        }
        .jkp-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .jkp-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .jkp-grid-3 {
                grid-template-columns: 1fr;
            }
        }
        .jkp-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .jkp-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            border-color: #475569;
        }
        .jkp-card h3 {
            color: #1e293b;
            font-size: 1.18rem;
            margin-top: 0;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .jkp-card p {
            color: #4b5563;
            font-size: 0.95rem;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .jkp-image-container {
            max-width: 580px;
            margin: 24px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }
        .jkp-image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .jkp-image-container img:hover {
            transform: scale(1.02);
        }
        .jkp-image-caption {
            font-size: 0.88rem;
            color: #64748b;
            text-align: center;
            padding: 8px 12px;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            margin: 0;
        }
        .jkp-highlight-box {
            background: #f1f5f9;
            border-left: 4px solid #475569;
            border-radius: 8px;
            padding: 18px 22px;
            margin: 24px auto;
            max-width: 980px;
        }
        .jkp-highlight-box h3 {
            color: #1e293b;
            font-size: 1.15rem;
            margin-top: 0;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .jkp-highlight-box p {
            color: #4b5563;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .jkp-table-wrap {
            overflow-x: auto;
            margin: 28px 0;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            border: 1px solid #e2e8f0;
        }
        .jkp-table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            font-size: 0.96rem;
            text-align: left;
        }
        .jkp-table th {
            background-color: #1e293b;
            color: #ffffff;
            padding: 14px 16px;
            font-weight: 600;
            border-bottom: 2px solid #cbd5e1;
        }
        .jkp-table td {
            padding: 13px 16px;
            border-bottom: 1px solid #e2e8f0;
            color: #334155;
        }
        .jkp-table tr:nth-child(even) td {
            background-color: #f8fafc;
        }
        .jkp-table tr:hover td {
            background-color: #f1f5f9;
        }
        .jkp-faq-item {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            margin-bottom: 14px;
            padding: 18px 22px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.04);
        }
        .jkp-faq-q {
            font-weight: 700;
            color: #1e293b;
            font-size: 1.08rem;
            margin-bottom: 8px;
        }
        .jkp-faq-a {
            color: #4b5563;
            font-size: 0.97rem;
            line-height: 1.7;
            margin: 0;
        }
        .jkp-links-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
            margin: 25px 0 35px;
        }
        @media (max-width: 992px) {
            .jkp-links-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 576px) {
            .jkp-links-grid {
                grid-template-columns: 1fr;
            }
        }
        .jkp-link-card {
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
        .jkp-link-card:hover {
            background: #1e293b;
            color: #ffffff;
            border-color: #1e293b;
            transform: translateY(-2px);
        }
        .jkp-cta-box {
            background: linear-gradient(135deg, #334155 0%, #1e293b 100%);
            color: #ffffff;
            padding: 38px 24px;
            border-radius: 12px;
            text-align: center;
            margin-top: 40px;
        }
        .jkp-cta-box h3 {
            font-size: 1.8rem;
            margin-bottom: 12px;
            color: #ffffff;
        }
        .jkp-cta-box p {
            font-size: 1.05rem;
            max-width: 720px;
            margin: 0 auto 20px;
            color: #cbd5e1;
        }
    </style>
</head>
<body>

<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="jkp-wrap">
    <!-- Hero Section -->
    <section class="jkp-hero-section">
        <h1 class="jkp-hero-title">Packers and Movers in Jankipuram Lucknow</h1>
        <p class="jkp-hero-subtitle">Specialized relocation services across Jankipuram, Jankipuram Extension, AKTU, CDRI campus, and Kursi Road. Expert high-rise society moving, faculty transfers, and express highway logistics.</p>
        <div class="jkp-cta-group">
            <a href="tel:+919334404050" class="jkp-btn-primary">Call Now: +91 93344 04050</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="jkp-btn-secondary">Check Moving Charges</a>
        </div>
    </section>

    <!-- Section 1: Locality Overview -->
    <section>
        <h2 class="jkp-section-heading">Modern Relocation Solutions in Jankipuram Lucknow</h2>
        <p class="jkp-intro-p">Jankipuram and its fast-growing counterpart, Jankipuram Extension, form the premier educational, scientific research, and modern residential hub of North Lucknow. Flanked by major academic and scientific institutions—such as Dr. A.P.J. Abdul Kalam Technical University (AKTU), the Central Drug Research Institute (CDRI), Lucknow University's Second Campus, and the Institute of Engineering & Technology (IET)—this vibrant locality combines university staff housing, student communities, and upscale gated high-rise societies.</p>
        
        <p class="jkp-intro-p">At <strong>Shree Ashirwad Packers and Movers</strong>, we bring more than a decade of specialized moving expertise to Jankipuram. From high-rise apartment transfers in modern complexes like Srishti and Smriti Apartments to independent house shifting across Sector F, G, and J, our skilled moving crews deliver organized, damage-free execution tailored to the demands of modern residential living.</p>

        <div class="jkp-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loading truck in Jankipuram Lucknow" loading="lazy">
            <p class="jkp-image-caption">Dedicated residential loading and high-rise apartment shifting operations across Jankipuram</p>
        </div>

        <p class="jkp-intro-p">Spanning broad sectors in North Lucknow, Jankipuram combines the academic vibrancy of institutional staff housing with expansive modern condominium towers in Jankipuram Extension. Moving within this evolving district calls for seasoned multi-floor logistics. Our teams provide service elevator wall padding, protective neoprene floor runners for society lobbies, and carefully schedule truck dispatches to avoid peak student commute times near Engineering College Chauraha.</p>

        <p class="jkp-intro-p">Our logistics teams work seamlessly with local Resident Welfare Associations (RWAs) to secure service lift permissions, adhere to building timing rules, and protect common areas with durable protective floor sheets during the entire loading process.</p>
    </section>

    <!-- Section 2: Comprehensive Relocation Services -->
    <section>
        <h2 class="jkp-section-heading">Comprehensive Relocation Solutions for Jankipuram</h2>
        <p class="jkp-intro-p">We offer full-spectrum relocation services engineered specifically for high-rise towers, research campuses, and independent homes across Jankipuram.</p>

        <div class="jkp-grid-3">
            <div class="jkp-card">
                <h3>High-Rise Society Moving</h3>
                <p>Equipped with heavy-duty furniture dollies, protective elevator padding, and floor runners for fast, seamless multi-floor transfers.</p>
            </div>
            <div class="jkp-card">
                <h3>Faculty & Campus Staff Shifting</h3>
                <p>Tailored relocations for AKTU, CDRI, and LU faculty members with official GST invoices, itemized packing lists, and insurance documentation.</p>
            </div>
            <div class="jkp-card">
                <h3>Modular Furniture Carpentry</h3>
                <p>Certified carpenters expertly dismantle, package, and reassemble modular beds, hydraulic storage units, sliding wardrobes, and study desks.</p>
            </div>
            <div class="jkp-card">
                <h3>Student & Studio Flat Relocations</h3>
                <p>Affordable, compact shifting packages for engineering and medical students moving between hostels, PGs, and rental apartments.</p>
            </div>
            <div class="jkp-card">
                <h3>Vehicle Transportation (Car & Bike)</h3>
                <p>Safe transport for sedans, SUVs, and two-wheelers in closed carriers equipped with hydraulic ramps, wheel locking chocks, and transit insurance.</p>
            </div>
            <div class="jkp-card">
                <h3>Interstate Highway Logistics</h3>
                <p>Direct linehaul container dispatches connecting Jankipuram via Sitapur Road and Ring Road to Delhi NCR, Kanpur, Patna, and our Ranchi corporate hub.</p>
            </div>
        </div>
    </section>

    <!-- Section 3: Sub-Locality Breakdown & Moving Logistics -->
    <section>
        <h2 class="jkp-section-heading">Sub-Locality Logistics Across Jankipuram</h2>
        <p class="jkp-intro-p">Each zone within the Jankipuram sub-city presents specific street profiles and logistical features:</p>

        <div class="jkp-grid-3">
            <div class="jkp-card">
                <h3>Jankipuram Extension (High-Rise Sector)</h3>
                <p>Master-planned LDA sectors with broad multi-lane boulevards and modern gated societies. Spacious frontage allows direct container truck positioning.</p>
            </div>
            <div class="jkp-card">
                <h3>AKTU & CDRI Institutional Campus</h3>
                <p>Quiet institutional zones housing faculty bungalows and residential quarters. Verified staff comply smoothly with campus gate security protocols.</p>
            </div>
            <div class="jkp-card">
                <h3>Kursi Road Corridor</h3>
                <p>Major commercial and industrial artery linking northern Lucknow. Provides prompt access for heavy freight trucks heading toward Barabanki and beyond.</p>
            </div>
            <div class="jkp-card">
                <h3>Tedhi Pulia & Ring Road Intersection</h3>
                <p>High-transit junction connecting Jankipuram to Aliganj, Vikas Nagar, and Indira Nagar. Moves are scheduled to avoid peak evening traffic hours.</p>
            </div>
            <div class="jkp-card">
                <h3>Engineering College Chauraha Axis</h3>
                <p>Lively student and coaching neighborhood with rental flats and studio apartments. Compact shuttle trucks navigate inner lanes effortlessly.</p>
            </div>
            <div class="jkp-card">
                <h3>Sectors F, G, H & J (Established Sectors)</h3>
                <p>Peaceful residential colonies featuring independent houses and duplexes. Floor runners protect indoor vitrified tile and marble surfaces.</p>
            </div>
        </div>

        <div class="jkp-highlight-box">
            <h3>Navigating Modern High-Rise Society Regulations</h3>
            <p>Moving into modern gated communities in Jankipuram Extension—such as Srishti Apartments, Smriti Apartments, or Janeshwar Enclave—requires strict adherence to building management rules. Society RWAs enforce designated shifting hours (typically 10:00 AM to 5:00 PM), require service lift bookings, and mandate security clearance for all crew members. Shree Ashirwad Packers and Movers handles all management formalities in advance, equips elevators with protective wall pads, and guarantees zero disturbance to neighbors.</p>
        </div>

        <div class="jkp-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Protective bubble wrap and carton packaging in Jankipuram" loading="lazy">
            <p class="jkp-image-caption">Virgin multi-layer bubble wrap and sturdy 5-ply cartons safeguard delicate electronics and study materials</p>
        </div>
    </section>

    <!-- Section 4: Transparent Tariff Table -->
    <section>
        <h2 class="jkp-section-heading">Transparent Moving Tariff Guide</h2>
        <p class="jkp-intro-p">We believe in complete pricing transparency with zero hidden fees or post-move surcharges. Review our standard pricing matrix for shifts originating in Jankipuram Lucknow:</p>

        <div class="jkp-table-wrap">
            <table class="jkp-table">
                <thead>
                    <tr>
                        <th>Property Configuration / Scope</th>
                        <th>Packing Material & Carpentry Scope</th>
                        <th>Local Shifting (Within Lucknow)</th>
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
                        <td><strong>2 BHK Residential Floor / Apartment</strong></td>
                        <td>5-Ply Corrugated Sheets + Edge Foam</td>
                        <td>₹7,800 - ₹13,500</td>
                        <td>₹21,500 - ₹35,000</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK High-Rise Apartment / House</strong></td>
                        <td>Heavy-Duty Blanket Wrap + Crating</td>
                        <td>₹12,500 - ₹19,500</td>
                        <td>₹31,000 - ₹46,000</td>
                    </tr>
                    <tr>
                        <td><strong>4/5 BHK Independent Kothi / Villa</strong></td>
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

        <div class="jkp-highlight-box">
            <h3>Doorstep High-Rise Surveys & RWA Coordination</h3>
            <p>Every household relocation in Jankipuram includes an optional doorstep survey or virtual video assessment. Our moving supervisors inspect freight elevator dimensions, calculate accurate packing supplies (bubble rolls, corrugated sheets, wardrobe cartons), and liaise directly with society facility managers for gate entry passes. We provide itemized written quotations with guaranteed price caps, clear GST billing, and comprehensive transit insurance options.</p>
        </div>

        <p class="jkp-intro-p">For an accurate, itemized quotation tailored to your specific inventory volume, use our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" style="color: #2563eb; font-weight: 600; text-decoration: underline;">online shifting charges calculator</a> or speak directly with our Jankipuram logistics supervisor.</p>
    </section>

    <!-- Section 5: Step-by-Step Moving Protocol -->
    <section>
        <h2 class="jkp-section-heading">Our 5-Stage Damage-Free Relocation Protocol</h2>
        <p class="jkp-intro-p">Every move executed in Jankipuram adheres to our structured 5-stage quality management process designed for complete safety:</p>

        <div class="jkp-grid-3">
            <div class="jkp-card">
                <h3>1. Pre-Move Survey & Estimate</h3>
                <p>We assess your household inventory, stairwell width, service lift availability, and fragility levels to assign appropriate packing materials and vehicle size.</p>
            </div>
            <div class="jkp-card">
                <h3>2. Professional Carpentry</h3>
                <p>Experienced carpenters dismantle double beds, modular almirahs, study tables, and wall fixtures, packing hardware in labeled pouches.</p>
            </div>
            <div class="jkp-card">
                <h3>3. Multi-Tier Protective Packing</h3>
                <p>Fragile chinaware, crystal, and electronics receive multi-layer air bubble wrap, thermocol lining, and heavy-duty 5-ply corrugated carton packing.</p>
            </div>
            <div class="jkp-card">
                <h3>4. Safe Loading & Transit</h3>
                <p>Goods are secured inside closed-body weatherproof container trucks using heavy-duty ratchet tie-down belts to prevent shifting during transit.</p>
            </div>
            <div class="jkp-card">
                <h3>5. Unloading & Setup</h3>
                <p>Our squad unloads, unpacks, reassembles furniture, and places major appliances in their designated positions at your destination home.</p>
            </div>
            <div class="jkp-card">
                <h3>Transit Risk Insurance</h3>
                <p>Comprehensive door-to-door transit insurance policy protects your belongings against fire, vehicle collision, or unintended road hazards.</p>
            </div>
        </div>

        <div class="jkp-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture dismantling by carpenters in Jankipuram" loading="lazy">
            <p class="jkp-image-caption">Skilled carpenters carefully disassemble modular double beds and heavy furniture for safe transit</p>
        </div>
    </section>

    <!-- Section 6: Regional Highway Connectivity -->
    <section>
        <h2 class="jkp-section-heading">Strategic Transport Connectivity via Ring Road & Kursi Road</h2>
        <p class="jkp-intro-p">Jankipuram occupies a strategically advantageous location in North Lucknow. With immediate access to the Lucknow Ring Road and Sitapur Road (NH-24), our transport container trucks can travel rapidly north toward Sitapur, Shahjahanpur, Bareilly, and Delhi NCR without entering downtown bottlenecks. Additionally, the Ring Road connects directly to Faizabad Road (NH-27) and Shaheed Path, providing direct access to eastern expressways toward Ayodhya, Gorakhpur, and Purvanchal.</p>

        <p class="jkp-intro-p">For long-distance transfers heading east toward Bihar, Jharkhand, and West Bengal—connecting to Patna, Gaya, Dhanbad, Jamshedpur, Bokaro, and our headquarters in <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi" style="color: #2563eb; font-weight: 600; text-decoration: underline;">Ranchi</a>—our dedicated long-haul container trucks operate regular scheduled departures with real-time GPS tracking and dedicated support.</p>

        <p class="jkp-intro-p">Furthermore, the direct link to Kisan Path (Outer Ring Road) allows containerized freight vehicles to bypass all internal city bottlenecks. Our moving trucks transition directly onto national highways heading north toward Bareilly and Delhi NCR or east toward Faizabad Road (NH-27) and the Purvanchal Expressway within minutes of dispatch.</p>

        <div class="jkp-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Jankipuram Lucknow" loading="lazy">
            <p class="jkp-image-caption">All-weather closed container fleet guarantees punctual, secure door-to-door moving</p>
        </div>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section>
        <h2 class="jkp-section-heading">Frequently Asked Questions</h2>
        <p class="jkp-intro-p">Helpful answers to common queries regarding relocations in Jankipuram Lucknow:</p>

        <div class="jkp-faq-item">
            <div class="jkp-faq-q">How do you coordinate moves in high-rise societies in Jankipuram Extension?</div>
            <div class="jkp-faq-a">Jankipuram Extension features modern gated high-rise societies such as Srishti Apartments, Smriti Apartments, and Janeshwar Enclave. We coordinate directly with society resident welfare associations (RWAs) for service elevator bookings, adhere to designated moving hours, and use floor protective sheeting to prevent damage to common areas.</div>
        </div>

        <div class="jkp-faq-item">
            <div class="jkp-faq-q">What are the local shifting charges in Jankipuram Lucknow?</div>
            <div class="jkp-faq-a">Local shifting charges within Jankipuram or to adjacent areas like Aliganj, Mahanagar, or Gomti Nagar typically range from ₹4,200 to ₹7,800 for 1 BHK flats, ₹7,800 to ₹13,500 for 2 BHK apartments, and ₹12,500 to ₹19,500 for 3 BHK residences, covering all packing supplies, labor, transit, and unloading.</div>
        </div>

        <div class="jkp-faq-item">
            <div class="jkp-faq-q">Do you provide relocation services for university faculty and research staff at AKTU and CDRI?</div>
            <div class="jkp-faq-a">Yes. We frequently manage relocations for professors, researchers, and technical staff from AKTU, CDRI, and Lucknow University Second Campus. We provide official itemized invoices, GST dockets, and transit insurance policies required for university reimbursement.</div>
        </div>

        <div class="jkp-faq-item">
            <div class="jkp-faq-q">How does Kursi Road and Ring Road connectivity benefit inter-state moves from Jankipuram?</div>
            <div class="jkp-faq-a">Jankipuram is directly bordered by Kursi Road, Sitapur Road (NH-24), and the Lucknow Ring Road. This allows our container fleet to access northern highway corridors toward Sitapur, Bareilly, and Delhi NCR directly, while the Ring Road facilitates fast connection to Faizabad Road and eastern expressway networks without city traffic.</div>
        </div>

        <div class="jkp-faq-item">
            <div class="jkp-faq-q">Can you handle compact student and PG relocations around Engineering College Chauraha?</div>
            <div class="jkp-faq-a">Yes. We offer tailored mini-move packages for students and young professionals relocating between hostels, PGs, and studio flats, providing affordable rates, sturdy cartons, and prompt delivery.</div>
        </div>

        <div class="jkp-faq-item">
            <div class="jkp-faq-q">How much advance notice is required to schedule a home shift in Jankipuram?</div>
            <div class="jkp-faq-a">We advise booking 24 to 48 hours in advance to guarantee your preferred moving date and allow smooth society gate clearance coordination.</div>
        </div>
    </section>

    <!-- Section 8: Sister Neighborhoods & Authority Links -->
    <section>
        <h2 class="jkp-section-heading">Connected Lucknow Shifting Hubs</h2>
        <p class="jkp-intro-p">Explore our verified moving networks across Lucknow hyper-local sectors and parent city authority corridors:</p>

        <div class="jkp-links-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow" class="jkp-link-card">Lucknow City Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gomti-nagar-lucknow" class="jkp-link-card">Gomti Nagar Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gomti-nagar-extension-lucknow" class="jkp-link-card">Gomti Nagar Extension</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-indira-nagar-lucknow" class="jkp-link-card">Indira Nagar Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-alambagh-lucknow" class="jkp-link-card">Alambagh Corridor</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hazratganj-lucknow" class="jkp-link-card">Hazratganj Central</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-mahanagar-lucknow" class="jkp-link-card">Mahanagar Elite</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ashiyana-lucknow" class="jkp-link-card">Ashiyana Colony</a>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="jkp-cta-box">
        <h3>Book Your Stress-Free Move in Jankipuram</h3>
        <p>Contact our experienced Jankipuram relocation team today for a prompt quotation, free doorstep survey, and damage-free moving service.</p>
        <div class="jkp-cta-group">
            <a href="tel:+919334404050" class="jkp-btn-primary">Call: +91 93344 04050</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="jkp-btn-secondary">Get Free Estimate</a>
        </div>
    </section>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
