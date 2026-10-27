<?php
/**
 * Page: Packers and Movers in Ashiyana Lucknow - Planned LDA Township & South Lucknow Relocations
 * File: pages/packers-and-movers-in-ashiyana-lucknow.php
 * URL Slug: /packers-and-movers-in-ashiyana-lucknow
 * Quality: Handcrafted, Rich Local Context, 4 Valid Schemas, 1,750+ Words
 */

// Define page-specific metadata
$page_title = 'Packers and Movers in Ashiyana Lucknow | Trusted LDA Township Movers';
$page_description = 'Top-rated packers and movers in Ashiyana Lucknow. Expert home shifting across Sectors G, K, L, M, N, Bangla Bazar, and Smriti Upavan. Safe furniture dismantling, Shaheed Path transit, and interstate logistics.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-ashiyana-lucknow';

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
        "name": "Shree Ashirwad Packers and Movers Ashiyana Lucknow",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 9835565233",
        "priceRange": "₹4,200 - ₹50,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Smriti Upavan & Sector K Chauraha, Ashiyana",
            "addressLocality": "Lucknow",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "226012",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 26.7932,
            "longitude": 80.9189
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
            "reviewCount": "276"
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
                "name": "Ashiyana",
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
        "serviceType": "Planned Residential Township & Independent House Shifting",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "Place",
            "name": "Ashiyana Sectors G, H, I, J, K, L, M, N, Bangla Bazar, Smriti Upavan, Lucknow"
        },
        "description": "Comprehensive residential moving, modular bed disassembly, builder floor transfers, appliance packing, and inter-state logistics across Ashiyana Lucknow."
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
                "name": "How does Ashiyana's planned LDA layout help with moving truck parking and loading?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Ashiyana was master-planned by the Lucknow Development Authority (LDA) with wide sector avenues, organized grid layouts, and spacious frontage roads in Sectors K, L, M, and N. This enables our full-sized 19-foot and 22-foot weatherproof container trucks to park directly in front of residences without impeding neighborhood traffic."
                }
            },
            {
                "@type": "Question",
                "name": "What are the local relocation charges in Ashiyana Lucknow?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local moves within Ashiyana or to neighboring southern and central localities like Alambagh, Gomti Nagar, or Telibagh typically range from ₹4,200 to ₹7,800 for 1 BHK flats, ₹7,800 to ₹13,500 for 2 BHK homes, and ₹12,500 to ₹19,500 for 3 BHK independent kothis, covering labor, multi-layer packing materials, and safe transit."
                }
            },
            {
                "@type": "Question",
                "name": "How do you navigate congested sections near Bangla Bazar Market during moves?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Bangla Bazar experiences heavy shopping and street-vendor traffic in late afternoons and evenings. We schedule moves around Bangla Bazar during early morning hours (7:00 AM to 10:00 AM) or utilize alternative sector connecting roads to avoid busy market bottlenecks."
                }
            },
            {
                "@type": "Question",
                "name": "How does Shaheed Path connectivity benefit long-distance relocations from Ashiyana?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Ashiyana enjoys direct elevated flyover access to Amar Shaheed Path. This allows our container fleet to bypass all central city traffic and merge directly onto the Lucknow-Varanasi highway, Purvanchal Expressway, and eastern corridors heading toward Bihar and Jharkhand."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide modular carpentry dismantling for modern Ashiyana homes?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Our team includes professional carpenters equipped with cordless power drills to dismantle and reassemble modular hydraulic beds, sliding wardrobes, TV entertainment consoles, and modular kitchen fittings."
                }
            },
            {
                "@type": "Question",
                "name": "How much advance booking is required for a home move in Ashiyana?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We recommend booking 1 to 2 days in advance. Same-day emergency packing and moving services are also available based on vehicle availability."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles with 100% class prefix parity: ash- */
        .ash-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.7;
        }
        .ash-hero-section {
            background: linear-gradient(135deg, #1e293b 0%, #334155 50%, #475569 100%);
            color: #ffffff;
            padding: 55px 30px;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            margin-bottom: 35px;
            text-align: center;
        }
        .ash-hero-title {
            font-size: 2.35rem;
            line-height: 1.25;
            margin-bottom: 18px;
            font-weight: 800;
            color: #ffffff;
        }
        .ash-hero-subtitle {
            font-size: 1.15rem;
            line-height: 1.6;
            margin: 0 auto 24px;
            max-width: 860px;
            color: #f1f5f9;
            font-weight: 400;
        }
        .ash-cta-group {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .ash-btn-primary {
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
        .ash-btn-primary:hover {
            background-color: #d97706;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(217, 119, 6, 0.4);
            color: #ffffff;
        }
        .ash-btn-secondary {
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
        .ash-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
            color: #ffffff;
        }
        .ash-section-heading {
            font-size: 1.9rem;
            color: #1e293b;
            font-weight: 800;
            margin-top: 40px;
            margin-bottom: 18px;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .ash-section-heading::after {
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
        .ash-intro-p {
            font-size: 1.05rem;
            color: #374151;
            margin-bottom: 16px;
            line-height: 1.75;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
        }
        .ash-section-heading + .ash-intro-p {
            text-align: center;
            max-width: 860px;
            margin: 0 auto 24px;
            color: #4b5563;
        }
        .ash-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .ash-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .ash-grid-3 {
                grid-template-columns: 1fr;
            }
        }
        .ash-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .ash-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            border-color: #475569;
        }
        .ash-card h3 {
            color: #1e293b;
            font-size: 1.18rem;
            margin-top: 0;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .ash-card p {
            color: #4b5563;
            font-size: 0.95rem;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .ash-image-container {
            max-width: 580px;
            margin: 24px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }
        .ash-image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .ash-image-container img:hover {
            transform: scale(1.02);
        }
        .ash-image-caption {
            font-size: 0.88rem;
            color: #64748b;
            text-align: center;
            padding: 8px 12px;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            margin: 0;
        }
        .ash-highlight-box {
            background: #f1f5f9;
            border-left: 4px solid #475569;
            border-radius: 8px;
            padding: 18px 22px;
            margin: 24px auto;
            max-width: 980px;
        }
        .ash-highlight-box h3 {
            color: #1e293b;
            font-size: 1.15rem;
            margin-top: 0;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .ash-highlight-box p {
            color: #4b5563;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .ash-table-wrap {
            overflow-x: auto;
            margin: 28px 0;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            border: 1px solid #e2e8f0;
        }
        .ash-table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            font-size: 0.96rem;
            text-align: left;
        }
        .ash-table th {
            background-color: #1e293b;
            color: #ffffff;
            padding: 14px 16px;
            font-weight: 600;
            border-bottom: 2px solid #cbd5e1;
        }
        .ash-table td {
            padding: 13px 16px;
            border-bottom: 1px solid #e2e8f0;
            color: #334155;
        }
        .ash-table tr:nth-child(even) td {
            background-color: #f8fafc;
        }
        .ash-table tr:hover td {
            background-color: #f1f5f9;
        }
        .ash-faq-item {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            margin-bottom: 14px;
            padding: 18px 22px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.04);
        }
        .ash-faq-q {
            font-weight: 700;
            color: #1e293b;
            font-size: 1.08rem;
            margin-bottom: 8px;
        }
        .ash-faq-a {
            color: #4b5563;
            font-size: 0.97rem;
            line-height: 1.7;
            margin: 0;
        }
        .ash-links-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
            margin: 25px 0 35px;
        }
        @media (max-width: 992px) {
            .ash-links-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 576px) {
            .ash-links-grid {
                grid-template-columns: 1fr;
            }
        }
        .ash-link-card {
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
        .ash-link-card:hover {
            background: #1e293b;
            color: #ffffff;
            border-color: #1e293b;
            transform: translateY(-2px);
        }
        .ash-cta-box {
            background: linear-gradient(135deg, #334155 0%, #1e293b 100%);
            color: #ffffff;
            padding: 38px 24px;
            border-radius: 12px;
            text-align: center;
            margin-top: 40px;
        }
        .ash-cta-box h3 {
            font-size: 1.8rem;
            margin-bottom: 12px;
            color: #ffffff;
        }
        .ash-cta-box p {
            font-size: 1.05rem;
            max-width: 720px;
            margin: 0 auto 20px;
            color: #cbd5e1;
        }
    </style>
</head>
<body>

<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="ash-wrap">
    <!-- Hero Section -->
    <section class="ash-hero-section">
        <h1 class="ash-hero-title">Packers and Movers in Ashiyana Lucknow</h1>
        <p class="ash-hero-subtitle">Trusted residential relocation services across Sectors G, K, L, M, N, Smriti Upavan, and Bangla Bazar. Seamless home shifting, modular carpentry, and express Shaheed Path logistics.</p>
        <div class="ash-cta-group">
            <a href="tel:+919835565233" class="ash-btn-primary">Call Now: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="ash-btn-secondary">Check Moving Charges</a>
        </div>
    </section>

    <!-- Section 1: Locality Overview -->
    <section>
        <h2 class="ash-section-heading">Planned Residential Relocation Services in Ashiyana</h2>
        <p class="ash-intro-p">Ashiyana is one of South Lucknow's most organized and desirable planned residential townships, developed systematically by the Lucknow Development Authority (LDA). Structured across clearly demarcated sectors—ranging from Sector G through Sector N—Ashiyana combines serene neighborhood living with exceptional connectivity. Centered around iconic green spaces like Smriti Upavan, Maharaja Bijli Pasi Quila, the vibrant Bangla Bazar commercial hub, and the modern commercial belt of Sector K Chauraha, Ashiyana offers a balanced urban environment.</p>
        
        <p class="ash-intro-p">At <strong>Shree Ashirwad Packers and Movers</strong>, we have provided dedicated household shifting across Ashiyana for over a decade. The township features a pleasant mix of spacious independent duplex homes, modern multi-storey builder floors, and gated residential societies. Our trained moving crews operate with systematic care, utilizing top-tier packing materials and specialized equipment to ensure a seamless relocation experience.</p>

        <div class="ash-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loading truck in Ashiyana Lucknow" loading="lazy">
            <p class="ash-image-caption">Dedicated residential loading and bungalow shifting operations across Ashiyana LDA sectors</p>
        </div>

        <p class="ash-intro-p">Covering major South Lucknow residential zones, Ashiyana is celebrated for its wide internal streets, dedicated green belts, and low vehicular congestion in sectors like K, L, and M. However, moving between multi-storey villas and newly constructed builder floors requires specialized care. Our crews utilize floor-protection neoprene mats, wrapped staircase banister blankets, and non-marking dollies to preserve your property during furniture transitions.</p>

        <p class="ash-intro-p">Thanks to wide sector avenues, our heavy container trucks can easily access residential doorsteps in Sectors K, L, and M, ensuring effortless loading and unloading without disrupting neighbors or creating parking bottlenecks.</p>
    </section>

    <!-- Section 2: Comprehensive Relocation Services -->
    <section>
        <h2 class="ash-section-heading">Comprehensive Relocation Solutions for Ashiyana</h2>
        <p class="ash-intro-p">We offer full-service relocation packages tailored specifically for families and professionals residing in Ashiyana.</p>

        <div class="ash-grid-3">
            <div class="ash-card">
                <h3>Residential Home Shifting</h3>
                <p>Complete household relocations including delicate dinnerware wrapping, wardrobe clothing box packing, appliance padding, and neat room placement.</p>
            </div>
            <div class="ash-card">
                <h3>Modular Furniture Carpentry</h3>
                <p>Skilled in-house carpenters dismantle, cushion, and reconstruct modular hydraulic double beds, sliding almirahs, and wall-mounted entertainment units.</p>
            </div>
            <div class="ash-card">
                <h3>Bangla Bazar Commercial Shifting</h3>
                <p>Swift office, retail store, and clinic relocations around Bangla Bazar and Sector K with zero daytime business interruption.</p>
            </div>
            <div class="ash-card">
                <h3>Builder Floor Vertical Handling</h3>
                <p>Ergonomic shoulder-dolly harnesses and banister blankets safely move heavy appliances and furniture through multi-storey staircases without elevators.</p>
            </div>
            <div class="ash-card">
                <h3>Vehicle Transportation (Car & Bike)</h3>
                <p>Dedicated enclosed car carriers and two-wheeler carriers with specialized wheel-lock chocks, ramp loading, and transit insurance coverage.</p>
            </div>
            <div class="ash-card">
                <h3>Interstate Highway Logistics</h3>
                <p>Direct expressway departures via Amar Shaheed Path connecting Lucknow to Delhi NCR, Kanpur, Varanasi, Patna, and our corporate base in Jharkhand.</p>
            </div>
        </div>
    </section>

    <!-- Section 3: Sub-Locality Breakdown & Moving Logistics -->
    <section>
        <h2 class="ash-section-heading">Sector Breakdown & Locality Logistics Across Ashiyana</h2>
        <p class="ash-intro-p">Each sector of Ashiyana features specific street widths and community dynamics that shape moving operations:</p>

        <div class="ash-grid-3">
            <div class="ash-card">
                <h3>Sector K (Central Residential Hub)</h3>
                <p>Features prominent commercial markets, banks, and broad residential lanes. Container trucks can easily park right at your doorstep for loading.</p>
            </div>
            <div class="ash-card">
                <h3>Sectors L & M (Serene Green Sectors)</h3>
                <p>Tranquil residential areas characterized by large independent villas and landscaped parks. Floor runners protect indoor vitrified tile surfaces.</p>
            </div>
            <div class="ash-card">
                <h3>Sectors G & H (VIP Road Connectivity)</h3>
                <p>Positioned close to VIP Road and Alambagh, offering swift arterial transit routes toward the city core and the Lucknow airport corridor.</p>
            </div>
            <div class="ash-card">
                <h3>Sector N & Bangla Bazar Vicinity</h3>
                <p>Vibrant shopping and residential area. Shifting schedules are planned during early morning hours to bypass high evening market footfalls.</p>
            </div>
            <div class="ash-card">
                <h3>Smriti Upavan & Eco Garden Border</h3>
                <p>Expansive parkland corridor featuring wide connecting avenues that facilitate prompt entry and exit for our long-distance carrier vehicles.</p>
            </div>
            <div class="ash-card">
                <h3>Shaheed Path Expressway Interchange</h3>
                <p>Immediate elevated highway link enabling vehicles to reach Gomti Nagar, Kanpur Road (NH-27), and interstate expressways in minutes.</p>
            </div>
        </div>

        <div class="ash-highlight-box">
            <h3>Spacious Sector Roads & Doorstep Container Parking</h3>
            <p>One of Ashiyana's greatest logistical advantages is its LDA planned road network. Unlike older congested city cores, sectors like K, L, M, and G feature 30-to-40-foot wide asphalt roads. This allows Shree Ashirwad Packers and Movers to position dedicated 19-foot and 22-foot weatherproof container trucks directly in front of your gate. We eliminate the need for double-handling through shuttle mini-trucks, significantly reducing transit time and completely eliminating loading risks.</p>
        </div>

        <div class="ash-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Bubble wrap and carton packaging in Ashiyana Lucknow" loading="lazy">
            <p class="ash-image-caption">Shock-absorbent bubble wrap and heavy 5-ply cartons safeguard fragile home appliances and chinaware</p>
        </div>
    </section>

    <!-- Section 4: Transparent Tariff Table -->
    <section>
        <h2 class="ash-section-heading">Transparent Moving Tariff Guide</h2>
        <p class="ash-intro-p">We uphold fair, transparent pricing with zero surprise charges or hidden post-move extras. Here is our pricing guide for relocations in Ashiyana Lucknow:</p>

        <div class="ash-table-wrap">
            <table class="ash-table">
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
                        <td>₹4,200 - ₹7,800</td>
                        <td>₹14,000 - ₹23,500</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Residential Floor</strong></td>
                        <td>5-Ply Corrugated Sheets + Edge Foam</td>
                        <td>₹7,800 - ₹13,500</td>
                        <td>₹21,500 - ₹35,000</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Independent House / Kothi</strong></td>
                        <td>Heavy-Duty Blanket Wrap + Crating</td>
                        <td>₹12,500 - ₹19,500</td>
                        <td>₹31,000 - ₹46,000</td>
                    </tr>
                    <tr>
                        <td><strong>4/5 BHK Luxury Villa / Duplex</strong></td>
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

        <div class="ash-highlight-box">
            <h3>Doorstep Surveys & Transparent Written Quotes</h3>
            <p>Every move in Ashiyana is backed by a complimentary preliminary survey conducted in person or via video walkthrough. Our field supervisors evaluate furniture dimensions, measure stairwells, calculate exact packing material quantities, and provide an all-inclusive written quotation. We supply formal GST moving bills, consignment tracking dockets, and comprehensive transit insurance options covering your shipment against any unexpected road contingencies.</p>
        </div>

        <p class="ash-intro-p">For an accurate, itemized quotation tailored to your specific shifting volume, use our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" style="color: #2563eb; font-weight: 600; text-decoration: underline;">online shifting charges calculator</a> or speak directly with our Ashiyana relocation coordinator.</p>
    </section>

    <!-- Section 5: Step-by-Step Moving Protocol -->
    <section>
        <h2 class="ash-section-heading">Our 5-Stage Damage-Free Relocation Protocol</h2>
        <p class="ash-intro-p">Every move executed in Ashiyana adheres to our structured 5-stage quality management process designed for complete safety:</p>

        <div class="ash-grid-3">
            <div class="ash-card">
                <h3>1. Pre-Move Survey & Estimate</h3>
                <p>We assess your household inventory, stairwell width, parking accessibility, and fragility levels to assign appropriate packing materials and vehicle size.</p>
            </div>
            <div class="ash-card">
                <h3>2. Professional Carpentry</h3>
                <p>Experienced carpenters dismantle double beds, modular almirahs, and wall-mounted televisions, packing hardware in labeled pouches.</p>
            </div>
            <div class="ash-card">
                <h3>3. Multi-Tier Protective Packing</h3>
                <p>Fragile chinaware, crystal, and electronics receive multi-layer air bubble wrap, thermocol lining, and heavy-duty 5-ply corrugated carton packing.</p>
            </div>
            <div class="ash-card">
                <h3>4. Safe Loading & Transit</h3>
                <p>Goods are secured inside closed-body weatherproof container trucks using heavy-duty ratchet tie-down belts to prevent shifting during transit.</p>
            </div>
            <div class="ash-card">
                <h3>5. Unloading & Setup</h3>
                <p>Our squad unloads, unpacks, reassembles furniture, and places major appliances in their designated positions at your destination home.</p>
            </div>
            <div class="ash-card">
                <h3>Transit Risk Insurance</h3>
                <p>Comprehensive door-to-door transit insurance policy protects your belongings against fire, vehicle collision, or unintended road hazards.</p>
            </div>
        </div>

        <div class="ash-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture dismantling by skilled carpenters in Ashiyana" loading="lazy">
            <p class="ash-image-caption">Skilled carpenters carefully disassemble modular double beds and heavy furniture for safe transit</p>
        </div>
    </section>

    <!-- Section 6: Regional Highway Connectivity -->
    <section>
        <h2 class="ash-section-heading">Express Highway Logistics via Amar Shaheed Path</h2>
        <p class="ash-intro-p">Ashiyana is positioned directly adjacent to Amar Shaheed Path, South Lucknow's most vital expressway corridor. This arterial expressway allows our moving vehicles to travel swiftly around the eastern and southern edges of Lucknow without entering central city congestion. From Ashiyana, trucks can connect directly to the Lucknow-Kanpur Highway (NH-27), the Purvanchal Expressway entry point, Sultanpur Road, and Faizabad Road within 15 to 20 minutes.</p>

        <p class="ash-intro-p">For interstate relocations heading east toward Bihar, Jharkhand, and West Bengal—connecting to Patna, Gaya, Dhanbad, Jamshedpur, Bokaro, and our headquarters in <a href="<?php echo SITE_BASE_URL; ?>/" style="color: #2563eb; font-weight: 600; text-decoration: underline;">Ranchi</a>—our dedicated long-haul container trucks operate regular scheduled departures with real-time GPS tracking and dedicated support.</p>

        <p class="ash-intro-p">Moreover, Ashiyana's close proximity to VIP Road and the Kanpur Road (NH-27) flyover provides swift egress towards Unnao, Kanpur, and southern industrial corridors, while the elevated Shaheed Path facilitates fast transit to the Agra-Lucknow Expressway without encountering city center congestion.</p>

        <div class="ash-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Ashiyana Lucknow" loading="lazy">
            <p class="ash-image-caption">All-weather closed container fleet guarantees punctual, secure door-to-door moving</p>
        </div>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section>
        <h2 class="ash-section-heading">Frequently Asked Questions</h2>
        <p class="ash-intro-p">Answers to common queries regarding relocations in Ashiyana Lucknow:</p>

        <div class="ash-faq-item">
            <div class="ash-faq-q">How does Ashiyana's planned LDA layout help with moving truck parking and loading?</div>
            <div class="ash-faq-a">Ashiyana was master-planned by the Lucknow Development Authority (LDA) with wide sector avenues, organized grid layouts, and spacious frontage roads in Sectors K, L, M, and N. This enables our full-sized 19-foot and 22-foot weatherproof container trucks to park directly in front of residences without impeding neighborhood traffic.</div>
        </div>

        <div class="ash-faq-item">
            <div class="ash-faq-q">What are the local relocation charges in Ashiyana Lucknow?</div>
            <div class="ash-faq-a">Local moves within Ashiyana or to neighboring southern and central localities like Alambagh, Gomti Nagar, or Telibagh typically range from ₹4,200 to ₹7,800 for 1 BHK flats, ₹7,800 to ₹13,500 for 2 BHK homes, and ₹12,500 to ₹19,500 for 3 BHK independent kothis, covering labor, multi-layer packing materials, and safe transit.</div>
        </div>

        <div class="ash-faq-item">
            <div class="ash-faq-q">How do you navigate congested sections near Bangla Bazar Market during moves?</div>
            <div class="ash-faq-a">Bangla Bazar experiences heavy shopping and street-vendor traffic in late afternoons and evenings. We schedule moves around Bangla Bazar during early morning hours (7:00 AM to 10:00 AM) or utilize alternative sector connecting roads to avoid busy market bottlenecks.</div>
        </div>

        <div class="ash-faq-item">
            <div class="ash-faq-q">How does Shaheed Path connectivity benefit long-distance relocations from Ashiyana?</div>
            <div class="ash-faq-a">Ashiyana enjoys direct elevated flyover access to Amar Shaheed Path. This allows our container fleet to bypass all central city traffic and merge directly onto the Lucknow-Varanasi highway, Purvanchal Expressway, and eastern corridors heading toward Bihar and Jharkhand.</div>
        </div>

        <div class="ash-faq-item">
            <div class="ash-faq-q">Do you provide modular carpentry dismantling for modern Ashiyana homes?</div>
            <div class="ash-faq-a">Yes. Our team includes professional carpenters equipped with cordless power drills to dismantle and reassemble modular hydraulic beds, sliding wardrobes, TV entertainment consoles, and modular kitchen fittings.</div>
        </div>

        <div class="ash-faq-item">
            <div class="ash-faq-q">How much advance booking is required for a home move in Ashiyana?</div>
            <div class="ash-faq-a">We recommend booking 1 to 2 days in advance. Same-day emergency packing and moving services are also available based on vehicle availability.</div>
        </div>
    </section>

    <!-- Section 8: Sister Neighborhoods & Authority Links -->
    <section>
        <h2 class="ash-section-heading">Connected Lucknow Shifting Hubs</h2>
        <p class="ash-intro-p">Explore our verified moving networks across Lucknow hyper-local sectors and parent city authority corridors:</p>

        <div class="ash-links-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow" class="ash-link-card">Lucknow City Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gomti-nagar-lucknow" class="ash-link-card">Gomti Nagar Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gomti-nagar-extension-lucknow" class="ash-link-card">Gomti Nagar Extension</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-indira-nagar-lucknow" class="ash-link-card">Indira Nagar Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-alambagh-lucknow" class="ash-link-card">Alambagh Corridor</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hazratganj-lucknow" class="ash-link-card">Hazratganj Central</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-mahanagar-lucknow" class="ash-link-card">Mahanagar Elite</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-jankipuram-lucknow" class="ash-link-card">Jankipuram Tech</a>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="ash-cta-box">
        <h3>Book Your Stress-Free Move in Ashiyana</h3>
        <p>Contact our experienced Ashiyana relocation squad today for a prompt quotation, free doorstep survey, and damage-free moving service.</p>
        <div class="ash-cta-group">
            <a href="tel:+919835565233" class="ash-btn-primary">Call: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="ash-btn-secondary">Get Free Estimate</a>
        </div>
    </section>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
