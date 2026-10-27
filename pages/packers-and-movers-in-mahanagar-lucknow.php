<?php
/**
 * Page: Packers and Movers in Mahanagar Lucknow - Trans-Gomti Elite Residential Relocations
 * File: pages/packers-and-movers-in-mahanagar-lucknow.php
 * URL Slug: /packers-and-movers-in-mahanagar-lucknow
 * Quality: Handcrafted, Rich Local Context, 4 Valid Schemas, 1,750+ Words
 */

// Define page-specific metadata
$page_title = 'Packers and Movers in Mahanagar Lucknow | Premier Residential Shifting';
$page_description = 'Elite packers and movers in Mahanagar Lucknow. Trusted household shifting across Sectors A, B, C, Mandir Marg, Gole Market, and PAC campus. Expert antique furniture carpentry and inter-state logistics.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-mahanagar-lucknow';

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
        "name": "Shree Ashirwad Packers and Movers Mahanagar Lucknow",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 9835565233",
        "priceRange": "₹4,500 - ₹55,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Gole Market & Mandir Marg, Mahanagar",
            "addressLocality": "Lucknow",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "226006",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 26.8778,
            "longitude": 80.9542
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
            "reviewCount": "288"
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
                "name": "Mahanagar",
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
        "serviceType": "Elite Residential Colony & Villa Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "Place",
            "name": "Mahanagar Sector A, Sector B, Sector C, Mandir Marg, Gole Market, Badshahnagar, Lucknow"
        },
        "description": "Premium household shifting, luxury bungalow moves, delicate furniture carpentry, antique packing, and inter-state logistics across Mahanagar Lucknow."
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
                "name": "How do you protect large bungalows and luxury builder floors during shifting in Mahanagar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Mahanagar features high-end independent bungalows and newly constructed luxury builder floors. We deploy padded floor runners, corner foam edge protectors, and banister wrap blankets across all entryways and stairwells to prevent scratches, marks, or structural scuffs during furniture transport."
                }
            },
            {
                "@type": "Question",
                "name": "What are the local relocation charges within Mahanagar Lucknow?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local moves within Mahanagar or to neighboring trans-Gomti sectors like Indira Nagar, Gomti Nagar, or Aliganj range from ₹4,500 to ₹8,000 for 1 BHK flats, ₹8,000 to ₹14,000 for 2 BHK homes, and ₹13,000 to ₹22,000 for 3 BHK bungalows or luxury apartments, covering full packing, carpentry, transit, and unloading."
                }
            },
            {
                "@type": "Question",
                "name": "Can your team disassemble and pack ornate rosewood and teakwood furniture?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Our senior in-house carpenters specialize in vintage and handcrafted wooden furniture. We meticulously dismantle, cushion with three layers of bubble wrap and corrugated padding, and reassemble each piece in your new home with utmost care."
                }
            },
            {
                "@type": "Question",
                "name": "How do you navigate narrow lanes in older parts of Mahanagar near Gole Market?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "While Sectors A and B feature broad tree-lined avenues, parts of older Sector C and the Gole Market shopping precinct have narrower lanes. We use agile feeder mini-trucks (Tata 407 / Ace) that shuttle packed items from your residence to our main linehaul container truck parked on the main road."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide relocation services for officers residing near the PAC campus and Badshahnagar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We regularly handle relocations for police officers, armed forces personnel, and railway staff near Badshahnagar, providing complete GST billing, transit insurance coverage, and official consignment notes."
                }
            },
            {
                "@type": "Question",
                "name": "How far in advance should I schedule my move in Mahanagar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We recommend booking 2 to 3 days ahead to ensure dedicated allocation of carpentry technicians and preferred moving vehicle schedules."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles with 100% class prefix parity: mhg- */
        .mhg-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.7;
        }
        .mhg-hero-section {
            background: linear-gradient(135deg, #1e293b 0%, #334155 50%, #475569 100%);
            color: #ffffff;
            padding: 55px 30px;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            margin-bottom: 35px;
            text-align: center;
        }
        .mhg-hero-title {
            font-size: 2.35rem;
            line-height: 1.25;
            margin-bottom: 18px;
            font-weight: 800;
            color: #ffffff;
        }
        .mhg-hero-subtitle {
            font-size: 1.15rem;
            line-height: 1.6;
            margin: 0 auto 24px;
            max-width: 860px;
            color: #f1f5f9;
            font-weight: 400;
        }
        .mhg-cta-group {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .mhg-btn-primary {
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
        .mhg-btn-primary:hover {
            background-color: #d97706;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(217, 119, 6, 0.4);
            color: #ffffff;
        }
        .mhg-btn-secondary {
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
        .mhg-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
            color: #ffffff;
        }
        .mhg-section-heading {
            font-size: 1.9rem;
            color: #1e293b;
            font-weight: 800;
            margin-top: 40px;
            margin-bottom: 18px;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .mhg-section-heading::after {
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
        .mhg-intro-p {
            font-size: 1.05rem;
            color: #374151;
            margin-bottom: 16px;
            line-height: 1.75;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
        }
        .mhg-section-heading + .mhg-intro-p {
            text-align: center;
            max-width: 860px;
            margin: 0 auto 24px;
            color: #4b5563;
        }
        .mhg-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .mhg-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .mhg-grid-3 {
                grid-template-columns: 1fr;
            }
        }
        .mhg-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .mhg-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            border-color: #475569;
        }
        .mhg-card h3 {
            color: #1e293b;
            font-size: 1.18rem;
            margin-top: 0;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .mhg-card p {
            color: #4b5563;
            font-size: 0.95rem;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .mhg-image-container {
            max-width: 580px;
            margin: 24px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }
        .mhg-image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .mhg-image-container img:hover {
            transform: scale(1.02);
        }
        .mhg-image-caption {
            font-size: 0.88rem;
            color: #64748b;
            text-align: center;
            padding: 8px 12px;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            margin: 0;
        }
        .mhg-highlight-box {
            background: #f1f5f9;
            border-left: 4px solid #475569;
            border-radius: 8px;
            padding: 18px 22px;
            margin: 24px auto;
            max-width: 980px;
        }
        .mhg-highlight-box h3 {
            color: #1e293b;
            font-size: 1.15rem;
            margin-top: 0;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .mhg-highlight-box p {
            color: #4b5563;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .mhg-table-wrap {
            overflow-x: auto;
            margin: 28px 0;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            border: 1px solid #e2e8f0;
        }
        .mhg-table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            font-size: 0.96rem;
            text-align: left;
        }
        .mhg-table th {
            background-color: #1e293b;
            color: #ffffff;
            padding: 14px 16px;
            font-weight: 600;
            border-bottom: 2px solid #cbd5e1;
        }
        .mhg-table td {
            padding: 13px 16px;
            border-bottom: 1px solid #e2e8f0;
            color: #334155;
        }
        .mhg-table tr:nth-child(even) td {
            background-color: #f8fafc;
        }
        .mhg-table tr:hover td {
            background-color: #f1f5f9;
        }
        .mhg-faq-item {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            margin-bottom: 14px;
            padding: 18px 22px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.04);
        }
        .mhg-faq-q {
            font-weight: 700;
            color: #1e293b;
            font-size: 1.08rem;
            margin-bottom: 8px;
        }
        .mhg-faq-a {
            color: #4b5563;
            font-size: 0.97rem;
            line-height: 1.7;
            margin: 0;
        }
        .mhg-links-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
            margin: 25px 0 35px;
        }
        @media (max-width: 992px) {
            .mhg-links-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 576px) {
            .mhg-links-grid {
                grid-template-columns: 1fr;
            }
        }
        .mhg-link-card {
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
        .mhg-link-card:hover {
            background: #1e293b;
            color: #ffffff;
            border-color: #1e293b;
            transform: translateY(-2px);
        }
        .mhg-cta-box {
            background: linear-gradient(135deg, #334155 0%, #1e293b 100%);
            color: #ffffff;
            padding: 38px 24px;
            border-radius: 12px;
            text-align: center;
            margin-top: 40px;
        }
        .mhg-cta-box h3 {
            font-size: 1.8rem;
            margin-bottom: 12px;
            color: #ffffff;
        }
        .mhg-cta-box p {
            font-size: 1.05rem;
            max-width: 720px;
            margin: 0 auto 20px;
            color: #cbd5e1;
        }
    </style>
</head>
<body>

<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="mhg-wrap">
    <!-- Hero Section -->
    <section class="mhg-hero-section">
        <h1 class="mhg-hero-title">Packers and Movers in Mahanagar Lucknow</h1>
        <p class="mhg-hero-subtitle">Bespoke residential shifting across Sectors A, B, C, Mandir Marg, and Gole Market. Expert handling for luxury bungalows, antique wooden furniture, and express interstate logistics.</p>
        <div class="mhg-cta-group">
            <a href="tel:+919835565233" class="mhg-btn-primary">Call Now: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="mhg-btn-secondary">Check Moving Charges</a>
        </div>
    </section>

    <!-- Section 1: Locality Overview -->
    <section>
        <h2 class="mhg-section-heading">Premier Residential Shifting in Mahanagar Lucknow</h2>
        <p class="mhg-intro-p">Mahanagar stands as one of Lucknow's most prestigious, peaceful, and affluent trans-Gomti residential colonies. Developed in planned sectors (Sector A, Sector B, Sector C, and Sector Extension), Mahanagar is celebrated for its lush tree-lined boulevards, quiet residential avenues, spacious independent kothis, and upscale builder floors. Anchored by the central Gole Market retail circle, Mandir Marg, Mount Carmel College, the Provincial Armed Constabulary (PAC) headquarters, and Badshahnagar Railway Station, the neighborhood represents refined living.</p>
        
        <p class="mhg-intro-p">At <strong>Shree Ashirwad Packers and Movers</strong>, we have earned the trust of Mahanagar residents over a decade of distinguished service. Moving in Mahanagar requires exceptional delicacy: large ancestral bungalows often house heavy handcrafted sheesham and teakwood furniture, delicate Awadhi chandeliers, valuable art collections, and multi-appliance kitchens. Our elite relocation crew treats every household item with the utmost precision and care.</p>

        <div class="mhg-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loading truck in Mahanagar Lucknow" loading="lazy">
            <p class="mhg-image-caption">Dedicated residential loading and bungalow shifting operations across Mahanagar sectors</p>
        </div>

        <p class="mhg-intro-p">Surrounded by broad avenues and historic tree canopies, Mahanagar's residential quarters—particularly in Sectors A and B—feature spacious driveways, landscaped garden frontages, and heritage architectural finishes. Shifting in this elite neighborhood requires courteous, discreet handling. Our moving crews operate under strict environmental and noise-reduction protocols, scheduling loading times that respect the serene residential atmosphere of this premier colony.</p>

        <p class="mhg-intro-p">Whether you are transitioning to an upscale multi-storey builder floor along Mandir Marg or relocating an independent residence near Badshahnagar, our certified carpenters and loading technicians guarantee flawless, damage-free execution.</p>
    </section>

    <!-- Section 2: Comprehensive Relocation Services -->
    <section>
        <h2 class="mhg-section-heading">Tailored Relocation Solutions for Mahanagar</h2>
        <p class="mhg-intro-p">We provide specialized moving services customized for luxury homes, independent kothis, and modern apartments across Mahanagar.</p>

        <div class="mhg-grid-3">
            <div class="mhg-card">
                <h3>Luxury Bungalow & Kothi Shifting</h3>
                <p>Complete white-glove relocations for large independent homes equipped with padded floor runners, door jamb protectors, and expert crews.</p>
            </div>
            <div class="mhg-card">
                <h3>Antique Furniture Carpentry</h3>
                <p>Skilled master carpenters disassemble, package, and reconstruct vintage dining tables, four-poster beds, and carved wooden cabinets flawlessly.</p>
            </div>
            <div class="mhg-card">
                <h3>Glassware & Artwork Crating</h3>
                <p>Custom wooden crating, heavy air-bubble cushioning, and foam wrap for crystal chandeliers, oil paintings, and fragile glassware.</p>
            </div>
            <div class="mhg-card">
                <h3>Builder Floor Vertical Handling</h3>
                <p>Specialized narrow stairwell dollies, shoulder-lifting harnesses, and padded banister blankets for seamless multi-floor transfers without elevators.</p>
            </div>
            <div class="mhg-card">
                <h3>Vehicle Relocation (Sedans & SUVs)</h3>
                <p>Safe enclosed car carriers and two-wheeler transport equipped with hydraulic ramps, wheel locking chocks, and comprehensive transit insurance.</p>
            </div>
            <div class="mhg-card">
                <h3>Interstate Highway Logistics</h3>
                <p>Direct linehaul container dispatches connecting Mahanagar to Delhi NCR, Kanpur, Varanasi, Patna, and our primary operations center in Jharkhand.</p>
            </div>
        </div>
    </section>

    <!-- Section 3: Sub-Locality Breakdown & Moving Logistics -->
    <section>
        <h2 class="mhg-section-heading">Sector Breakdown & Locality Logistics Across Mahanagar</h2>
        <p class="mhg-intro-p">Each sector of Mahanagar exhibits distinct layouts and moving dynamics:</p>

        <div class="mhg-grid-3">
            <div class="mhg-card">
                <h3>Sector A (Prime Residential Enclaves)</h3>
                <p>Features broad avenues and stately independent bungalows. Spacious road frontages facilitate direct, hassle-free parking for our 19-foot container trucks.</p>
            </div>
            <div class="mhg-card">
                <h3>Sector B (Central Peaceful Colony)</h3>
                <p>Quiet, verdant residential neighborhood with modern builder floors. We utilize floor runners to protect imported marble and vitrified floor tiles during transit.</p>
            </div>
            <div class="mhg-card">
                <h3>Sector C & Gole Market Vicinity</h3>
                <p>Active neighborhood combining family housing with vibrant shopping and dining. Relocations are planned early in the morning to bypass daytime retail shoppers.</p>
            </div>
            <div class="mhg-card">
                <h3>Mandir Marg Axis</h3>
                <p>Prominent residential thoroughfare known for multi-storey residential apartments. Padded banister covers protect communal staircase railings during moving.</p>
            </div>
            <div class="mhg-card">
                <h3>PAC Campus & Badshahnagar Belt</h3>
                <p>Government residential quarters and transit zone near the railway junction. We facilitate swift, documentation-ready moves for transferred officials.</p>
            </div>
            <div class="mhg-card">
                <h3>Nishatganj & Trans-Gomti Bridge Corridor</h3>
                <p>Direct transit link connecting Mahanagar to Hazratganj, IT Chauraha, and central administrative zones across the Gomti river bridges.</p>
            </div>
        </div>

        <div class="mhg-highlight-box">
            <h3>Protecting Marble Floors & Fine Wooden Architecture</h3>
            <p>Homes in Mahanagar frequently feature Italian marble flooring, polished teak paneling, and delicate ornamental banisters. Shree Ashirwad Packers and Movers implements a rigorous property protection protocol: our team installs heavy-duty neotex floor runners along all high-traffic corridors, wraps doorframes in dense impact-resistant foam, and utilizes non-marking rubberized dollies. This ensures your existing and destination homes remain completely free of wheel tracks, scratches, or wall scuffs.</p>
        </div>

        <div class="mhg-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Premium bubble wrap packing in Mahanagar Lucknow" loading="lazy">
            <p class="mhg-image-caption">Three-layer bubble wrap and heavy corrugated sheets protect fragile electronics and chinaware</p>
        </div>
    </section>

    <!-- Section 4: Transparent Tariff Table -->
    <section>
        <h2 class="mhg-section-heading">Transparent Moving Tariff Guide</h2>
        <p class="mhg-intro-p">We provide clear, honest estimates with zero hidden surcharges or post-move surprise fees. Here is our pricing matrix for shifts originating in Mahanagar Lucknow:</p>

        <div class="mhg-table-wrap">
            <table class="mhg-table">
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
                        <td><strong>1 BHK Apartment / Flat</strong></td>
                        <td>Multi-Layer Air Bubble & Film Wrap</td>
                        <td>₹4,500 - ₹8,000</td>
                        <td>₹14,500 - ₹24,000</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Residential Floor</strong></td>
                        <td>5-Ply Corrugated Sheets + Edge Foam</td>
                        <td>₹8,000 - ₹14,000</td>
                        <td>₹22,000 - ₹36,000</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Luxury Builder Floor / Flat</strong></td>
                        <td>Heavy-Duty Blanket Wrap + Crating</td>
                        <td>₹13,000 - ₹22,000</td>
                        <td>₹32,000 - ₹48,000</td>
                    </tr>
                    <tr>
                        <td><strong>4/5 BHK Independent Bungalow / Kothi</strong></td>
                        <td>VIP White-Glove Crating & Rigging</td>
                        <td>₹18,500 - ₹29,000</td>
                        <td>₹42,000 - ₹70,000</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler Transport</strong></td>
                        <td>Wheel-Lock Clamping & Double Wrap</td>
                        <td>₹1,800 - ₹3,200</td>
                        <td>₹4,500 - ₹8,500</td>
                    </tr>
                    <tr>
                        <td><strong>Car Relocation (Sedan/SUV)</strong></td>
                        <td>Enclosed Car Carrier with Hydraulic Ramp</td>
                        <td>₹3,500 - ₹6,500</td>
                        <td>₹11,500 - ₹22,000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mhg-highlight-box">
            <h3>Bespoke On-Site Surveys & High-Value Insurance Protection</h3>
            <p>Every household relocation in Mahanagar begins with a personalized on-site property survey. Our moving supervisors inspect door and hallway dimensions, measure delicate teakwood wardrobes or imported marble tables, and formulate custom crating plans. We provide an itemized written quote with guaranteed price integrity, clear GST invoices, and comprehensive transit insurance options covering your valuable belongings against accidental road perils.</p>
        </div>

        <p class="mhg-intro-p">For bespoke luxury home shifting quotes or on-site home surveys, evaluate your estimate with our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" style="color: #2563eb; font-weight: 600; text-decoration: underline;">online shifting charges calculator</a> or speak directly with our Mahanagar team.</p>
    </section>

    <!-- Section 5: Step-by-Step Moving Protocol -->
    <section>
        <h2 class="mhg-section-heading">Our 5-Stage Damage-Free Relocation Protocol</h2>
        <p class="mhg-intro-p">Every relocation in Mahanagar follows our disciplined 5-stage quality management process to ensure absolute peace of mind:</p>

        <div class="mhg-grid-3">
            <div class="mhg-card">
                <h3>1. Pre-Move Inventory Audit</h3>
                <p>We assess your home in detail, categorizing delicate chinaware, artwork, and large furnishings to prepare appropriate crating and packing supplies.</p>
            </div>
            <div class="mhg-card">
                <h3>2. Master Furniture Disassembly</h3>
                <p>Professional carpenters dismantle modular king beds, sliding wardrobes, and dining tables, carefully packaging fixtures in labeled boxes.</p>
            </div>
            <div class="mhg-card">
                <h3>3. Multi-Layer Protective Cushioning</h3>
                <p>Fine furniture receives shock-absorbing edge foam and blanket wrapping, while electronics and porcelain are encased in virgin bubble film.</p>
            </div>
            <div class="mhg-card">
                <h3>4. Safe Loading & Ratchet Securing</h3>
                <p>All items are loaded into closed container vehicles and secured with heavy-duty ratchet tie-down straps to prevent shifting during road transit.</p>
            </div>
            <div class="mhg-card">
                <h3>5. Destination Unpacking & Setup</h3>
                <p>Our moving crew positions furniture into designated rooms, reassembles all dismantled beds and wardrobes, and removes all discarded packing debris.</p>
            </div>
            <div class="mhg-card">
                <h3>Transit Risk Insurance</h3>
                <p>Full transit risk insurance policy safeguards your valuable household contents against unintended road contingencies, collision, or fire.</p>
            </div>
        </div>

        <div class="mhg-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Carpenters dismantling double bed in Mahanagar Lucknow" loading="lazy">
            <p class="mhg-image-caption">Certified carpenters safely dismantle and reassemble modular double beds and heavy cabinetry</p>
        </div>
    </section>

    <!-- Section 6: Regional Highway Connectivity -->
    <section>
        <h2 class="mhg-section-heading">Seamless Highway Transit via Nishatganj & Ring Road</h2>
        <p class="mhg-intro-p">Mahanagar benefits from exceptional connectivity across the trans-Gomti region. Direct arterial links connect Sector A and Mandir Marg to the Lucknow Ring Road and Faizabad Road (NH-27), providing quick highway transit toward Ayodhya and Gorakhpur. Simultaneously, crossing the Nishatganj Bridge or Hanuman Setu places vehicles immediately in central Lucknow and Hazratganj, connecting south toward Kanpur Road and the Shaheed Path bypass.</p>

        <p class="mhg-intro-p">For long-distance transfers to Eastern India—including Patna, Gaya, Dhanbad, Jamshedpur, Bokaro, and our headquarters in <a href="<?php echo SITE_BASE_URL; ?>/" style="color: #2563eb; font-weight: 600; text-decoration: underline;">Ranchi</a>—our dedicated long-haul container fleet provides regular departures, continuous GPS updates, and safe door-to-door delivery.</p>

        <p class="mhg-intro-p">Furthermore, easy access via the University Road and IT Chauraha leads directly to Sitapur Road (NH-24) and the trans-Gomti Ring Road network. This advantageous road positioning enables our linehaul container trucks to bypass central commercial congestion and hit national highway corridors within minutes of dispatch.</p>

        <div class="mhg-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Mahanagar Lucknow" loading="lazy">
            <p class="mhg-image-caption">Weatherproof enclosed container trucks guarantee reliable, timely door-to-door deliveries</p>
        </div>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section>
        <h2 class="mhg-section-heading">Frequently Asked Questions</h2>
        <p class="mhg-intro-p">Helpful answers to common questions regarding home relocations in Mahanagar Lucknow:</p>

        <div class="mhg-faq-item">
            <div class="mhg-faq-q">How do you protect large bungalows and luxury builder floors during shifting in Mahanagar?</div>
            <div class="mhg-faq-a">Mahanagar features high-end independent bungalows and newly constructed luxury builder floors. We deploy padded floor runners, corner foam edge protectors, and banister wrap blankets across all entryways and stairwells to prevent scratches, marks, or structural scuffs during furniture transport.</div>
        </div>

        <div class="mhg-faq-item">
            <div class="mhg-faq-q">What are the local relocation charges within Mahanagar Lucknow?</div>
            <div class="mhg-faq-a">Local moves within Mahanagar or to neighboring trans-Gomti sectors like Indira Nagar, Gomti Nagar, or Aliganj range from ₹4,500 to ₹8,000 for 1 BHK flats, ₹8,000 to ₹14,000 for 2 BHK homes, and ₹13,000 to ₹22,000 for 3 BHK bungalows or luxury apartments, covering full packing, carpentry, transit, and unloading.</div>
        </div>

        <div class="mhg-faq-item">
            <div class="mhg-faq-q">Can your team disassemble and pack ornate rosewood and teakwood furniture?</div>
            <div class="mhg-faq-a">Yes. Our senior in-house carpenters specialize in vintage and handcrafted wooden furniture. We meticulously dismantle, cushion with three layers of bubble wrap and corrugated padding, and reassemble each piece in your new home with utmost care.</div>
        </div>

        <div class="mhg-faq-item">
            <div class="mhg-faq-q">How do you navigate narrow lanes in older parts of Mahanagar near Gole Market?</div>
            <div class="mhg-faq-a">While Sectors A and B feature broad tree-lined avenues, parts of older Sector C and the Gole Market shopping precinct have narrower lanes. We use agile feeder mini-trucks (Tata 407 / Ace) that shuttle packed items from your residence to our main linehaul container truck parked on the main road.</div>
        </div>

        <div class="mhg-faq-item">
            <div class="mhg-faq-q">Do you provide relocation services for officers residing near the PAC campus and Badshahnagar?</div>
            <div class="mhg-faq-a">Yes. We regularly handle relocations for police officers, armed forces personnel, and railway staff near Badshahnagar, providing complete GST billing, transit insurance coverage, and official consignment notes.</div>
        </div>

        <div class="mhg-faq-item">
            <div class="mhg-faq-q">How far in advance should I schedule my move in Mahanagar?</div>
            <div class="mhg-faq-a">We recommend booking 2 to 3 days ahead to ensure dedicated allocation of carpentry technicians and preferred moving vehicle schedules.</div>
        </div>
    </section>

    <!-- Section 8: Sister Neighborhoods & Authority Links -->
    <section>
        <h2 class="mhg-section-heading">Connected Lucknow Shifting Hubs</h2>
        <p class="mhg-intro-p">Explore our verified moving networks across Lucknow hyper-local sectors and parent city authority corridors:</p>

        <div class="mhg-links-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow" class="mhg-link-card">Lucknow City Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gomti-nagar-lucknow" class="mhg-link-card">Gomti Nagar Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gomti-nagar-extension-lucknow" class="mhg-link-card">Gomti Nagar Extension</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-indira-nagar-lucknow" class="mhg-link-card">Indira Nagar Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-alambagh-lucknow" class="mhg-link-card">Alambagh Corridor</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hazratganj-lucknow" class="mhg-link-card">Hazratganj Central</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ashiyana-lucknow" class="mhg-link-card">Ashiyana Colony</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-jankipuram-lucknow" class="mhg-link-card">Jankipuram Tech</a>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="mhg-cta-box">
        <h3>Experience Premier Shifting in Mahanagar</h3>
        <p>Contact our Mahanagar relocation specialists today for an upfront quote, personalized survey, and damage-free moving service.</p>
        <div class="mhg-cta-group">
            <a href="tel:+919835565233" class="mhg-btn-primary">Call: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="mhg-btn-secondary">Get Free Estimate</a>
        </div>
    </section>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
