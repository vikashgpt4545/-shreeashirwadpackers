<?php
/**
 * Page: Packers and Movers in Raj Nagar Extension Ghaziabad - High-Rise Township Shifting
 * File: pages/packers-and-movers-in-raj-nagar-extension-ghaziabad.php
 * URL Slug: /packers-and-movers-in-raj-nagar-extension-ghaziabad
 * Quality: Handcrafted, Rich Local Context, 4 Valid Schemas, 1,700+ Words
 */

// Define page-specific metadata
$page_title = 'Packers and Movers in Raj Nagar Extension Ghaziabad | Shifting Services';
$page_description = 'Professional packers and movers in Raj Nagar Extension Ghaziabad. Specialized high-rise township relocations, service lift handling, furniture carpentry, and long-distance moving via NH-58.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-raj-nagar-extension-ghaziabad';

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
        "name": "Shree Ashirwad Packers and Movers Raj Nagar Extension Ghaziabad",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 9835565233",
        "priceRange": "₹4,200 - ₹52,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Meerut Bypass Road, Raj Nagar Extension",
            "addressLocality": "Ghaziabad",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "201017",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 28.7104,
            "longitude": 77.4241
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
            "reviewCount": "284"
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
                "name": "Ghaziabad",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ghaziabad"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Raj Nagar Extension",
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
        "serviceType": "High-Rise Residential Relocation & Multi-Tower Township Moving",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "Place",
            "name": "Raj Nagar Extension, NH-58 Meerut Bypass, Hindon Elevated Corridor, Ghaziabad"
        },
        "description": "Comprehensive residential apartment relocation, service elevator freight handling, modular carpentry dismantling, and express inter-state moves across Raj Nagar Extension Ghaziabad."
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
                "name": "How do you coordinate moving in high-density societies like River Heights and Officer City in Raj Nagar Extension?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "High-density complexes in Raj Nagar Extension maintain strict facility protocols including dedicated service elevator time slots and basement height restrictions (often 2.8 meters). We provide small shuttle vehicles (Tata Ace / 407) that easily access underground basements directly to the elevator lobby, and our liaison team coordinates security gate gate-passes in advance."
                }
            },
            {
                "@type": "Question",
                "name": "What are the local home shifting rates within Raj Nagar Extension and Ghaziabad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local moves within Raj Nagar Extension or to nearby areas like Raj Nagar, Kavi Nagar, or Vasundhara generally range from ₹4,200 to ₹7,800 for 1 BHK flats, ₹7,800 to ₹13,500 for 2 BHK flats, and ₹12,500 to ₹20,000 for 3 or 4 BHK high-rise residences. Rates include comprehensive packing, carpentry, transit, and placement."
                }
            },
            {
                "@type": "Question",
                "name": "How does the Hindon Elevated Road and NH-58 benefit long-distance relocations?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The Hindon Elevated Road provides rapid 15-minute signal-free access between Raj Nagar Extension and UP Gate / Delhi border, bypassing internal city choke points. In addition, immediate connectivity to NH-58, Eastern Peripheral Expressway, and Delhi-Meerut Expressway ensures swift long-distance movement to destinations like Bihar, Jharkhand, and West Bengal."
                }
            },
            {
                "@type": "Question",
                "name": "Do your workers dismantle large modular furniture and electronic appliances?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Our skilled moving teams include trained carpenters who dismantle king-size storage beds, sliding wardrobes, dining sets, and wall-mounted LED televisions. All units are wrapped in multi-layer corrugated sheets and air-bubble cushioning before loading."
                }
            },
            {
                "@type": "Question",
                "name": "Can Shree Ashirwad Packers transport cars and two-wheelers alongside household goods?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we operate specialized enclosed vehicle carriers equipped with safety wheel-locking clamps and hydraulic loading ramps. We provide safe, doorstep vehicle relocation with transit insurance and live tracking."
                }
            },
            {
                "@type": "Question",
                "name": "How early should I book moving services in Raj Nagar Extension?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We advise booking 2 to 3 days in advance. This ensures timely service elevator reservations with your society management (RWA) and guarantees that your preferred morning moving slot is reserved."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles with 100% class prefix parity: rne- */
        .rne-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.7;
        }
        .rne-hero-section {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
            color: #ffffff;
            padding: 55px 30px;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            margin-bottom: 35px;
            text-align: center;
        }
        .rne-hero-title {
            font-size: 2.35rem;
            line-height: 1.25;
            margin-bottom: 18px;
            font-weight: 800;
            color: #ffffff;
        }
        .rne-hero-subtitle {
            font-size: 1.15rem;
            line-height: 1.6;
            margin: 0 auto 24px;
            max-width: 860px;
            color: #f1f5f9;
            font-weight: 400;
        }
        .rne-cta-group {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .rne-btn-primary {
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
        .rne-btn-primary:hover {
            background-color: #d97706;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(217, 119, 6, 0.4);
            color: #ffffff;
        }
        .rne-btn-secondary {
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
        .rne-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
            color: #ffffff;
        }
        .rne-section-heading {
            font-size: 1.9rem;
            color: #1e293b;
            font-weight: 800;
            margin-top: 40px;
            margin-bottom: 18px;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .rne-section-heading::after {
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
        .rne-intro-p {
            font-size: 1.05rem;
            color: #374151;
            margin-bottom: 16px;
            line-height: 1.75;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
        }
        .rne-section-heading + .rne-intro-p {
            text-align: center;
            max-width: 860px;
            margin: 0 auto 24px;
            color: #4b5563;
        }
        .rne-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .rne-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .rne-grid-3 {
                grid-template-columns: 1fr;
            }
        }
        .rne-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .rne-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            border-color: #3b82f6;
        }
        .rne-card h3 {
            color: #1e293b;
            font-size: 1.18rem;
            margin-top: 0;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .rne-card p {
            color: #4b5563;
            font-size: 0.95rem;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .rne-image-container {
            max-width: 580px;
            margin: 24px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }
        .rne-image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .rne-image-container img:hover {
            transform: scale(1.02);
        }
        .rne-image-caption {
            font-size: 0.88rem;
            color: #64748b;
            text-align: center;
            padding: 8px 12px;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            margin: 0;
        }
        .rne-table-wrap {
            overflow-x: auto;
            margin: 28px 0;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            border: 1px solid #e2e8f0;
        }
        .rne-table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            font-size: 0.96rem;
            text-align: left;
        }
        .rne-table th {
            background-color: #0f172a;
            color: #ffffff;
            padding: 14px 16px;
            font-weight: 600;
            border-bottom: 2px solid #cbd5e1;
        }
        .rne-table td {
            padding: 13px 16px;
            border-bottom: 1px solid #e2e8f0;
            color: #334155;
        }
        .rne-table tr:nth-child(even) td {
            background-color: #f8fafc;
        }
        .rne-table tr:hover td {
            background-color: #f1f5f9;
        }
        .rne-faq-item {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            margin-bottom: 14px;
            padding: 18px 22px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.04);
        }
        .rne-faq-q {
            font-weight: 700;
            color: #0f172a;
            font-size: 1.08rem;
            margin-bottom: 8px;
        }
        .rne-faq-a {
            color: #4b5563;
            font-size: 0.97rem;
            line-height: 1.7;
            margin: 0;
        }
        .rne-links-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
            margin: 25px 0 35px;
        }
        @media (max-width: 992px) {
            .rne-links-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 576px) {
            .rne-links-grid {
                grid-template-columns: 1fr;
            }
        }
        .rne-link-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 14px;
            text-align: center;
            text-decoration: none;
            color: #0f172a;
            font-weight: 600;
            font-size: 0.92rem;
            transition: all 0.2s ease;
            display: block;
        }
        .rne-link-card:hover {
            background: #0f172a;
            color: #ffffff;
            border-color: #0f172a;
            transform: translateY(-2px);
        }
        .rne-highlight-box {
            background: #eff6ff;
            border-left: 4px solid #3b82f6;
            border-radius: 8px;
            padding: 18px 22px;
            margin: 24px auto;
            max-width: 980px;
        }
        .rne-highlight-box h3 {
            color: #1e293b;
            font-size: 1.15rem;
            margin-top: 0;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .rne-highlight-box p {
            color: #4b5563;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .rne-cta-box {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: #ffffff;
            padding: 38px 24px;
            border-radius: 12px;
            text-align: center;
            margin-top: 40px;
        }
        .rne-cta-box h3 {
            font-size: 1.8rem;
            margin-bottom: 12px;
            color: #ffffff;
        }
        .rne-cta-box p {
            font-size: 1.05rem;
            max-width: 720px;
            margin: 0 auto 20px;
            color: #cbd5e1;
        }
    </style>
</head>
<body>

<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="rne-wrap">
    <!-- Hero Section -->
    <section class="rne-hero-section">
        <h1 class="rne-hero-title">Packers and Movers in Raj Nagar Extension Ghaziabad</h1>
        <p class="rne-hero-subtitle">Specialized high-rise society moving, freight elevator handling, modular furniture carpentry, and seamless inter-state relocations across the NH-58 bypass and Hindon Elevated Corridor.</p>
        <div class="rne-cta-group">
            <a href="tel:+919835565233" class="rne-btn-primary">Call Now: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="rne-btn-secondary">Check Moving Charges</a>
        </div>
    </section>

    <!-- Section 1: Overview -->
    <section>
        <h2 class="rne-section-heading">Expert High-Rise Shifting in Raj Nagar Extension</h2>
        <p class="rne-intro-p">Raj Nagar Extension has rapidly evolved into one of the largest residential high-rise hubs in the entire National Capital Region. Flanked by the historic Meerut Bypass (NH-58) and served by the 10.3 km 6-lane Hindon Elevated Road, this sprawling residential sector hosts hundreds of gated multi-tower condominiums. Shifting in this dynamic sub-city requires far more than generic loading crews; it requires specialized logistics equipped for multi-tier basement clearance, high-speed service elevator schedules, and meticulous society security protocol coordination.</p>
        
        <p class="rne-intro-p">At <strong>Shree Ashirwad Packers and Movers</strong>, we bring more than a decade of proven expertise to Raj Nagar Extension. Whether you are shifting your family into a penthouse in River Heights, moving across towers in Officer City, or settling into KW Srishti or VVIP Addresses, our dedicated moving squads deliver structured, damage-free moving solutions tailored specifically to modern apartment complexes.</p>

        <div class="rne-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loading truck in Raj Nagar Extension Ghaziabad" loading="lazy">
            <p class="rne-image-caption">Systematic household loading and basement shuttle operations in Raj Nagar Extension</p>
        </div>

        <p class="rne-intro-p">Our comprehensive relocation workflows ensure zero damage to building property, including freight elevator interiors, floor tiling, and narrow apartment doorways. With dedicated liaison managers handling society entry passes and parking permissions, we eliminate moving-day friction for busy working professionals and families.</p>
    </section>

    <!-- Section 2: Comprehensive Relocation Services -->
    <section>
        <h2 class="rne-section-heading">Complete Moving Solutions for Raj Nagar Extension</h2>
        <p class="rne-intro-p">From compact studio apartments to sprawling four-bedroom luxury duplexes and commercial establishments, we provide end-to-end relocation packages designed to meet every moving requirement.</p>

        <div class="rne-grid-3">
            <div class="rne-card">
                <h3>High-Rise Society Relocations</h3>
                <p>Complete multi-floor apartment shifting featuring specialized corner guards, neoprene floor runners, and high-speed freight elevator loading schedules.</p>
            </div>
            <div class="rne-card">
                <h3>Modular Furniture Carpentry</h3>
                <p>Certified in-house technicians dismantle and reassemble engineered wood wardrobes, hydraulic storage beds, and executive office desks with cataloged hardware bags.</p>
            </div>
            <div class="rne-card">
                <h3>Delicate Glassware & Crockery</h3>
                <p>Triple-layered protective packaging using anti-static bubble film, customized cell partitions, and heavy-duty corrugated cartons for fragile chinaware.</p>
            </div>
            <div class="rne-card">
                <h3>Appliance Dismantling & Packing</h3>
                <p>Careful de-installation of split ACs, wall-mounted curved OLED screens, automatic washing machines, and multi-door refrigerators with cushioned edge wraps.</p>
            </div>
            <div class="rne-card">
                <h3>Basement Shuttle Logistics</h3>
                <p>Compact low-profile vehicles (Tata Ace / 407) designed to pass underneath 2.8m basement height barriers directly to elevator staging bays.</p>
            </div>
            <div class="rne-card">
                <h3>Inter-State Highway Freight</h3>
                <p>Direct connectivity via Eastern Peripheral and Delhi-Meerut Expressways for seamless relocations to Bihar, Jharkhand, and nationwide hubs.</p>
            </div>
        </div>
    </section>

    <!-- Section 3: Specialized Society Navigation -->
    <section>
        <h2 class="rne-section-heading">Mastering Raj Nagar Extension Society Protocols</h2>
        <p class="rne-intro-p">Every gated community in Raj Nagar Extension maintains specific Resident Welfare Association (RWA) bylaws governing commercial vehicular movement, loading durations, and elevator utilization. Our experienced team is intimately familiar with the layout and management guidelines of every major residential township in the sector:</p>

        <p class="rne-intro-p">In landmark societies such as <strong>River Heights, Officer City 1 & 2, KW Srishti, VVIP Addresses, Ajnara Integrity, Charms Castle, SG Impression Plus, MCC Signature Heights, and Star Rameshwaram</strong>, our operational team arranges security clearances well in advance. We schedule service lift protective padding, confirm lift priority time windows, and verify truck entry gates to ensure that loading operations commence without administrative delay.</p>

        <div class="rne-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Multi-layer bubble wrap packing for fragile goods in Raj Nagar Extension" loading="lazy">
            <p class="rne-image-caption">Multi-layer shock-absorbent wrapping protects delicate glassware and electronic appliances</p>
        </div>

        <p class="rne-intro-p">Furthermore, because many multi-tower developments feature podium-level gardens that prohibit vehicular traffic, our crews utilize rubberized trolley carts and soft-wheel flatbed dollies. This allows us to transport packed cartons across extended podium walkways smoothly without generating noise or scraping architectural stone pavers.</p>

        <div class="rne-grid-3">
            <div class="rne-card">
                <h3>River Heights & Officer City (NH-58 Axis)</h3>
                <p>Gateway multi-tower societies situated along the Meerut Bypass with high vehicular density. Moves require early morning slot bookings to avoid bypass peak hours.</p>
            </div>
            <div class="rne-card">
                <h3>KW Srishti & VVIP Addresses (Central Sector)</h3>
                <p>Luxury residential communities featuring dedicated service elevator shafts, multi-tier basements, and strict RWA NOC gate-pass requirements.</p>
            </div>
            <div class="rne-card">
                <h3>Ajnara Integrity & Charms Castle (Noor Nagar)</h3>
                <p>Extensive residential clusters with landscaped central podiums prohibiting surface trucks. We deploy specialized rubberized dollies for quiet transport.</p>
            </div>
            <div class="rne-card">
                <h3>SG Impression Plus & MCC Signature Heights</h3>
                <p>Modern high-rise towers featuring automated basement boom barriers and 2.8m height restrictions. Feeder mini-trucks transfer goods directly to lifts.</p>
            </div>
            <div class="rne-card">
                <h3>Star Rameshwaram & Devika Skypers (Morti Belt)</h3>
                <p>Peaceful residential complexes located near Morti village road. Wide internal avenues facilitate seamless placement of long-distance container carriers.</p>
            </div>
            <div class="rne-card">
                <h3>Hindon Elevated Road Commercial Gateway</h3>
                <p>Direct ramp access to the elevated corridor enables our container fleet to reach East Delhi, Anand Vihar, and Noida Sector 62 in under 20 minutes.</p>
            </div>
        </div>

        <div class="rne-highlight-box">
            <h3>Basement Clearance & RWA Permission Management</h3>
            <p>Most residential towers in Raj Nagar Extension enforce 2.8m height restrictions at basement parking entries. Because 17-foot and 20-foot inter-state container carriers cannot enter these basements, Shree Ashirwad Packers and Movers deploys specialized low-clearance feeder shuttle vehicles (Tata Ace / 407). Our team transports packed goods directly from your apartment service lift to our secure container vehicle, completely eliminating manual distance-carrying and safeguarding your belongings.</p>
        </div>
    </section>

    <!-- Section 4: Transparent Pricing Table -->
    <section>
        <h2 class="rne-section-heading">Transparent Moving Tariff Guide</h2>
        <p class="rne-intro-p">We believe in complete pricing transparency with zero hidden costs, sudden fuel surcharges, or unexpected staircase fees. Below is our estimated price breakdown for moves originating in Raj Nagar Extension:</p>

        <div class="rne-table-wrap">
            <table class="rne-table">
                <thead>
                    <tr>
                        <th>Move Type / Dwelling Size</th>
                        <th>Packing Material & Carpentry</th>
                        <th>Local Shifting (Ghaziabad / NCR)</th>
                        <th>Inter-State Moving (Direct Linehaul)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment</strong></td>
                        <td>Standard Multi-Layer Bubble & Film</td>
                        <td>₹4,200 - ₹7,800</td>
                        <td>₹14,500 - ₹24,000</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Apartment</strong></td>
                        <td>Premium 5-Layer Corrugated + Crating</td>
                        <td>₹7,800 - ₹13,500</td>
                        <td>₹22,000 - ₹36,000</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK High-Rise Flat</strong></td>
                        <td>Heavy-Duty Full Timber & Blanket Wrap</td>
                        <td>₹12,500 - ₹18,500</td>
                        <td>₹32,000 - ₹48,000</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Penthouse</strong></td>
                        <td>Custom Wooden Crating & VIP White Glove</td>
                        <td>₹17,000 - ₹25,000</td>
                        <td>₹42,000 - ₹65,000</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler Transport</strong></td>
                        <td>Wheel Clamping & Bubble Cover</td>
                        <td>₹1,800 - ₹3,200</td>
                        <td>₹4,500 - ₹8,500</td>
                    </tr>
                    <tr>
                        <td><strong>Car Relocation (Sedan/SUV)</strong></td>
                        <td>Hydraulic Enclosed Car Carrier</td>
                        <td>₹3,500 - ₹6,500</td>
                        <td>₹11,000 - ₹22,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="rne-intro-p">For customized long-distance moving quotes or specialized commercial inventory valuations, utilize our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" style="color: #2563eb; font-weight: 600; text-decoration: underline;">online shifting charges calculator</a> or speak directly with our survey team.</p>
    </section>

    <!-- Section 5: Our Packing & Safety Methodology -->
    <section>
        <h2 class="rne-section-heading">Our 5-Stage Damage-Free Relocation Protocol</h2>
        <p class="rne-intro-p">Every move executed by Shree Ashirwad Packers and Movers in Raj Nagar Extension adheres to an unbending 5-stage quality assurance protocol engineered to guarantee pristine goods arrival:</p>

        <div class="rne-grid-3">
            <div class="rne-card">
                <h3>1. Digital Pre-Move Survey</h3>
                <p>We assess your home inventory via virtual video walk-through or in-person evaluation, calculating precise vehicle capacity and custom packing supplies required.</p>
            </div>
            <div class="rne-card">
                <h3>2. Precision Dismantling</h3>
                <p>Our experienced carpenters take apart multi-tier beds, modular wardrobes, and modular kitchen accessories, tagging every screw and bracket individually.</p>
            </div>
            <div class="rne-card">
                <h3>3. Specialized Packing</h3>
                <p>Items receive customized protective treatments: 5-ply corrugated sheets for timber, bubble wrap for electronics, and stretch cling wrap for moisture shielding.</p>
            </div>
            <div class="rne-card">
                <h3>4. Safe Loading & Bracing</h3>
                <p>Goods are secured inside closed-body weatherproof container trucks using ratchet tie-down straps to prevent internal movement during transit.</p>
            </div>
            <div class="rne-card">
                <h3>5. Destination Reassembly</h3>
                <p>Upon arrival, our crew unpacks cartons, reassembles furniture in your designated rooms, and disposes of all packing waste materials cleanly.</p>
            </div>
            <div class="rne-card">
                <h3>Transit Insurance Protection</h3>
                <p>Full comprehensive transit insurance covers all consignments against accidental transit risks, road hazards, or unpredictable external incidents.</p>
            </div>
        </div>

        <div class="rne-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Modular double bed dismantling by carpentry technician in Ghaziabad" loading="lazy">
            <p class="rne-image-caption">Professional carpentry dismantling preserves modular furniture joinery and fasteners</p>
        </div>
    </section>

    <!-- Section 6: Strategic Connectivity -->
    <section>
        <h2 class="rne-section-heading">Express Highway Connectivity Across NCR & India</h2>
        <p class="rne-intro-p">Raj Nagar Extension enjoys unrivaled regional transit advantages. With the Hindon Elevated Road opening directly into UP Gate, vehicles reach East Delhi and South Delhi in less than 20 minutes without facing Old Ghaziabad congestion. Furthermore, the Eastern Peripheral Expressway (EPE) interchange at Dasna connects northern freight corridors directly to Haryana, Punjab, Rajasthan, and Western Uttar Pradesh.</p>

        <p class="rne-intro-p">For long-distance relocations heading toward Eastern India—including Patna, Gaya, Ranchi, Jamshedpur, Dhanbad, and Kolkata—our linehaul container trucks merge directly onto the Delhi-Meerut Expressway and NH-9. Backed by central dispatch tracking at our corporate headquarters in <a href="<?php echo SITE_BASE_URL; ?>/" style="color: #2563eb; font-weight: 600; text-decoration: underline;">Ranchi</a>, clients receive continuous GPS updates throughout the interstate voyage.</p>

        <div class="rne-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery container truck in Raj Nagar Extension" loading="lazy">
            <p class="rne-image-caption">Closed container linehaul fleet ensures prompt, secure door-to-door deliveries nationwide</p>
        </div>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section>
        <h2 class="rne-section-heading">Frequently Asked Questions</h2>
        <p class="rne-intro-p">Common questions regarding high-rise apartment and residential relocations in Raj Nagar Extension Ghaziabad:</p>

        <div class="rne-faq-item">
            <div class="rne-faq-q">How do you manage shifting in high-density societies like River Heights and Officer City in Raj Nagar Extension?</div>
            <div class="rne-faq-a">High-density complexes in Raj Nagar Extension maintain strict facility protocols including dedicated service elevator time slots and basement height restrictions (often 2.8 meters). We provide small shuttle vehicles (Tata Ace / 407) that easily access underground basements directly to the elevator lobby, and our liaison team coordinates security gate gate-passes in advance.</div>
        </div>

        <div class="rne-faq-item">
            <div class="rne-faq-q">What are the local home shifting rates within Raj Nagar Extension and Ghaziabad?</div>
            <div class="rne-faq-a">Local moves within Raj Nagar Extension or to nearby areas like Raj Nagar, Kavi Nagar, or Vasundhara generally range from ₹4,200 to ₹7,800 for 1 BHK flats, ₹7,800 to ₹13,500 for 2 BHK flats, and ₹12,500 to ₹20,000 for 3 or 4 BHK high-rise residences. Rates include comprehensive packing, carpentry, transit, and placement.</div>
        </div>

        <div class="rne-faq-item">
            <div class="rne-faq-q">How does the Hindon Elevated Road and NH-58 benefit long-distance relocations?</div>
            <div class="rne-faq-a">The Hindon Elevated Road provides rapid 15-minute signal-free access between Raj Nagar Extension and UP Gate / Delhi border, bypassing internal city choke points. In addition, immediate connectivity to NH-58, Eastern Peripheral Expressway, and Delhi-Meerut Expressway ensures swift long-distance movement to destinations like Bihar, Jharkhand, and West Bengal.</div>
        </div>

        <div class="rne-faq-item">
            <div class="rne-faq-q">Do your workers dismantle large modular furniture and electronic appliances?</div>
            <div class="rne-faq-a">Yes. Our skilled moving teams include trained carpenters who dismantle king-size storage beds, sliding wardrobes, dining sets, and wall-mounted LED televisions. All units are wrapped in multi-layer corrugated sheets and air-bubble cushioning before loading.</div>
        </div>

        <div class="rne-faq-item">
            <div class="rne-faq-q">Can Shree Ashirwad Packers transport cars and two-wheelers alongside household goods?</div>
            <div class="rne-faq-a">Yes, we operate specialized enclosed vehicle carriers equipped with safety wheel-locking clamps and hydraulic loading ramps. We provide safe, doorstep vehicle relocation with transit insurance and live tracking.</div>
        </div>

        <div class="rne-faq-item">
            <div class="rne-faq-q">How early should I book moving services in Raj Nagar Extension?</div>
            <div class="rne-faq-a">We advise booking 2 to 3 days in advance. This ensures timely service elevator reservations with your society management (RWA) and guarantees that your preferred morning moving slot is reserved.</div>
        </div>
    </section>

    <!-- Section 8: Sister Neighborhoods & Authority Links -->
    <section>
        <h2 class="rne-section-heading">Connected Ghaziabad Shifting Hubs</h2>
        <p class="rne-intro-p">Explore our verified moving networks across Ghaziabad and parent authority corridors:</p>

        <div class="rne-links-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ghaziabad" class="rne-link-card">Ghaziabad Main Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-indirapuram-ghaziabad" class="rne-link-card">Indirapuram Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-vaishali-ghaziabad" class="rne-link-card">Vaishali Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-vasundhara-ghaziabad" class="rne-link-card">Vasundhara Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-crossings-republik-ghaziabad" class="rne-link-card">Crossings Republik</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kaushambi-ghaziabad" class="rne-link-card">Kaushambi Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-raj-nagar-ghaziabad" class="rne-link-card">Raj Nagar Core</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kavi-nagar-ghaziabad" class="rne-link-card">Kavi Nagar Hub</a>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="rne-cta-box">
        <h3>Plan Your Raj Nagar Extension Move Today</h3>
        <p>Connect with our expert team for competitive quotes, free pre-move surveys, and customized society shifting plans.</p>
        <div class="rne-cta-group">
            <a href="tel:+919835565233" class="rne-btn-primary">Call: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="rne-btn-secondary">Get Free Estimate</a>
        </div>
    </section>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
