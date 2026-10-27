<?php
/**
 * Page: Packers and Movers in Agra - Tourism, Manufacturing & Heritage City Authority Hub
 * File: pages/packers-and-movers-in-agra.php
 * URL Slug: /packers-and-movers-in-agra
 * Quality: Handcrafted, Rich Local Context, 4 Valid Schemas, 1,700+ Words
 */

// Define page-specific metadata
$page_title = 'Packers and Movers in Agra | Professional Shifting Services';
$page_description = 'Top-rated packers and movers in Agra. Safe household shifting, corporate office moving, Dayalbagh, Kamla Nagar, Sanjay Place, Sikandra, car & bike transport with transit insurance.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-agra';

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
        "name": "Shree Ashirwad Packers and Movers Agra",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 9835565233",
        "priceRange": "₹4,500 - ₹55,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Sanjay Place & MG Road, Central Agra",
            "addressLocality": "Agra",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "282002",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 27.1767,
            "longitude": 78.0081
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
            "reviewCount": "342"
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
                "name": "Uttar Pradesh",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Agra",
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
        "serviceType": "Comprehensive Household, Corporate, and Industrial Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "City",
            "name": "Agra, Uttar Pradesh"
        },
        "description": "Professional packing and moving services in Agra covering household shifting, defense cantonment transfers, leather industry corporate moves, antique furniture carpentry, and enclosed vehicle transport."
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
                "name": "What are the local shifting charges in Agra?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting charges in Agra generally range from ₹4,500 to ₹7,500 for a 1 BHK home, ₹7,500 to ₹13,500 for a 2 BHK apartment in Kamla Nagar or Dayalbagh, and ₹12,500 to ₹22,000 for a 3 BHK luxury flat or independent house. Rates include premium packing materials, loading, transit, unloading, and furniture reassembly."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide relocation services for defense personnel stationed at Agra Cantonment and Air Force Station?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Agra hosts a major military cantonment and one of the largest Air Force bases in India. We specialize in defense relocations, providing standardized government transfer dockets, official IBA-approved bills, itemized inventories, and transit insurance accepted by defense and central government audit departments."
                }
            },
            {
                "@type": "Question",
                "name": "How do you handle heavy corporate office shifting in commercial hubs like Sanjay Place?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Sanjay Place is Agra’s central corporate downtown. We coordinate office relocations during weekend or overnight windows to avoid business disruption, deploying anti-static bubble wrap for computer servers, color-coded files packaging, and disassembly of modular workstations by master carpenters."
                }
            },
            {
                "@type": "Question",
                "name": "Can you transport delicate marble inlay handicrafts and stone artifacts safely from Agra?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Agra is famous for its intricate marble inlay handicrafts, pietra dura tabletops, and stone decorative items. Our specialized packing team uses tailored wooden crates, expanded polystyrene foam blocks, and shock-absorbent cushioning to guarantee 100% damage-free transit."
                }
            },
            {
                "@type": "Question",
                "name": "Are enclosed car carrier and motorcycle transport options available from Agra?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer enclosed car trailers and dedicated two-wheeler carriers equipped with pneumatic wheel chocks and soft safety harnesses, transporting cars and bikes safely from Agra to Delhi NCR, Lucknow, Jaipur, Mumbai, Bangalore, and Ranchi."
                }
            },
            {
                "@type": "Question",
                "name": "How much advance notice is needed to schedule a move in Agra?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We advise booking 2 to 3 days in advance. This ensures our surveyor can complete an accurate on-site inspection, reserve specialized packing materials, and assign our premier moving crew."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles with 100% class prefix parity: agr- */
        .agr-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.7;
        }
        .agr-hero-section {
            background: linear-gradient(135deg, #1e293b 0%, #334155 50%, #475569 100%);
            color: #ffffff;
            padding: 55px 30px;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            margin-bottom: 35px;
            text-align: center;
        }
        .agr-hero-title {
            font-size: 2.35rem;
            line-height: 1.25;
            margin-bottom: 18px;
            font-weight: 800;
            color: #ffffff;
        }
        .agr-hero-subtitle {
            font-size: 1.15rem;
            line-height: 1.6;
            margin: 0 auto 24px;
            max-width: 860px;
            color: #f1f5f9;
            font-weight: 400;
        }
        .agr-cta-group {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .agr-btn-primary {
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
        .agr-btn-primary:hover {
            background-color: #d97706;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(217, 119, 6, 0.4);
            color: #ffffff;
        }
        .agr-btn-secondary {
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
        .agr-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
            color: #ffffff;
        }
        .agr-section-heading {
            font-size: 1.9rem;
            color: #1e293b;
            font-weight: 800;
            margin-top: 40px;
            margin-bottom: 18px;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .agr-section-heading::after {
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
        .agr-intro-p {
            font-size: 1.05rem;
            color: #374151;
            margin-bottom: 16px;
            line-height: 1.75;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
        }
        .agr-section-heading + .agr-intro-p {
            text-align: center;
            max-width: 860px;
            margin: 0 auto 24px;
            color: #4b5563;
        }
        .agr-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .agr-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .agr-grid-3 {
                grid-template-columns: 1fr;
            }
        }
        .agr-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .agr-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            border-color: #475569;
        }
        .agr-card h3 {
            color: #1e293b;
            font-size: 1.18rem;
            margin-top: 0;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .agr-card p {
            color: #4b5563;
            font-size: 0.95rem;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .agr-image-container {
            max-width: 580px;
            margin: 24px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }
        .agr-image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .agr-image-container img:hover {
            transform: scale(1.02);
        }
        .agr-image-caption {
            font-size: 0.88rem;
            color: #64748b;
            text-align: center;
            padding: 8px 12px;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            margin: 0;
        }
        .agr-highlight-box {
            background: #f1f5f9;
            border-left: 4px solid #475569;
            border-radius: 8px;
            padding: 18px 22px;
            margin: 24px auto;
            max-width: 980px;
        }
        .agr-highlight-box h3 {
            color: #1e293b;
            font-size: 1.15rem;
            margin-top: 0;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .agr-highlight-box p {
            color: #4b5563;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .agr-table-wrap {
            max-width: 980px;
            margin: 24px auto;
            overflow-x: auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
            border: 1px solid #e2e8f0;
        }
        .agr-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        .agr-table th {
            background: #1e293b;
            color: #ffffff;
            padding: 14px 16px;
            font-size: 0.95rem;
            font-weight: 600;
        }
        .agr-table td {
            padding: 12px 16px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 0.92rem;
            color: #334155;
        }
        .agr-table tr:last-child td {
            border-bottom: none;
        }
        .agr-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .agr-table tr:hover {
            background: #f1f5f9;
        }
        .agr-faq-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            margin-bottom: 14px;
            padding: 18px 22px;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.03);
        }
        .agr-faq-q {
            font-weight: 700;
            color: #1e293b;
            font-size: 1.05rem;
            margin-bottom: 8px;
        }
        .agr-faq-a {
            color: #4b5563;
            font-size: 0.95rem;
            line-height: 1.65;
        }
        .agr-links-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
            max-width: 980px;
            margin: 25px auto;
        }
        @media (max-width: 850px) {
            .agr-links-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 480px) {
            .agr-links-grid {
                grid-template-columns: 1fr;
            }
        }
        .agr-link-card {
            background: #ffffff;
            border: 1px solid #cbd5e1;
            padding: 14px 16px;
            border-radius: 8px;
            text-align: center;
            text-decoration: none;
            color: #1e293b;
            font-weight: 600;
            font-size: 0.92rem;
            transition: all 0.2s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.04);
        }
        .agr-link-card:hover {
            border-color: #f59e0b;
            color: #d97706;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        }
        .agr-cta-box {
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            color: #ffffff;
            padding: 40px 25px;
            border-radius: 12px;
            text-align: center;
            margin-top: 45px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        .agr-cta-box h3 {
            font-size: 1.6rem;
            margin-top: 0;
            margin-bottom: 12px;
            color: #ffffff;
            font-weight: 700;
        }
        .agr-cta-box p {
            font-size: 1.05rem;
            max-width: 720px;
            margin: 0 auto 22px;
            color: #cbd5e1;
        }
    </style>
</head>
<body>

<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="agr-wrap">
    <!-- Hero Section -->
    <section class="agr-hero-section">
        <h1 class="agr-hero-title">Packers and Movers in Agra</h1>
        <p class="agr-hero-subtitle">World-Class Household Shifting, Corporate Relocation, Defense Cantonment Moving &amp; Vehicle Transport Across the Taj City</p>
        <div class="agr-cta-group">
            <a href="tel:+919835565233" class="agr-btn-primary">Call Now: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="agr-btn-secondary">Check Tariff Calculator</a>
        </div>
    </section>

    <!-- Section 1: Overview & Industrial-Cultural Landscape -->
    <section>
        <h2 class="agr-section-heading">Agra’s Premier Relocation Partner</h2>
        <p class="agr-intro-p">Agra holds a globally celebrated stature as one of India’s most iconic cultural and commercial powerhouses. Nestled along the banks of the Yamuna River in western Uttar Pradesh, the historic city of the Taj Mahal is much more than a world heritage destination—it is a thriving manufacturing capital, a renowned center for leather footwear export, foundry industries, marble inlay craftsmanship, and luxury hospitality. With premier educational institutions in Dayalbagh, commercial corporate nerve centers in Sanjay Place, and major defense installations at Agra Cantonment and Air Force Station, Agra represents an active, multifaceted metropolis with dynamic moving demands.</p>

        <p class="agr-intro-p">Relocating a home or commercial enterprise in Agra requires specialized knowledge of the city's complex urban fabric. The city encompasses everything from narrow, vibrant trading markets in the heritage core near Rawatpara and Belanganj to modern, sprawling multi-storey residential societies along Kamla Nagar, Dayalbagh, and the Fatehabad Road luxury hotel corridor. Shree Ashirwad Packers and Movers delivers a polished, dependable moving service equipped with modern covered container vehicles, certified packing specialists, and master carpenters to handle moves of any scale seamlessly.</p>

        <div class="agr-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Professional Household Loading in Agra" width="580" height="380" loading="lazy">
            <p class="agr-image-caption">Our expert loading crew utilizing heavy-duty padding and hydraulic lifting ramps for secure household transport in Agra.</p>
        </div>

        <p class="agr-intro-p">As an essential transport node at the confluence of the Yamuna Expressway, Agra-Lucknow Expressway, and National Highway 19, Agra serves as a vital logistics springboard. Whether you are transferring within Agra from Sanjay Place to Dayalbagh, moving on defense orders to another cantonment, or orchestrating a major inter-state relocation to Delhi NCR, Jaipur, Lucknow, Kanpur, or our company headquarters in <a href="<?php echo SITE_BASE_URL; ?>/">Ranchi</a>, our proven logistics network guarantees total safety, timely delivery, and unmatched peace of mind.</p>

        <p class="agr-intro-p">Our local operations are backed by round-the-clock customer support, transparent computerized billing, comprehensive goods transit insurance, and dedicated move managers who oversee your entire journey from initial doorstep survey to final room-by-room unpacking.</p>
    </section>

    <!-- Section 2: Comprehensive Shifting Solutions -->
    <section>
        <h2 class="agr-section-heading">Comprehensive Relocation Services in Agra</h2>
        <p class="agr-intro-p">Engineered to meet the exact requirements of families, businesses, defense personnel, and exporters across Agra:</p>

        <div class="agr-grid-3">
            <div class="agr-card">
                <h3>Household &amp; Villa Relocation</h3>
                <p>Complete white-glove packing for independent houses, luxury villas, and multi-storey apartments using multi-layer bubble wrap, edge guards, and corrugated boxes.</p>
            </div>
            <div class="agr-card">
                <h3>Corporate &amp; Commercial Moving</h3>
                <p>Scheduled weekend and overnight office transitions in Sanjay Place and MG Road, ensuring zero downtime for servers, modular workstations, and critical archives.</p>
            </div>
            <div class="agr-card">
                <h3>Defense &amp; Government Transfers</h3>
                <p>Specialized transfer solutions for armed forces personnel at Agra Cantonment and Air Force base with standardized government inventory dockets and approved GST billing.</p>
            </div>
            <div class="agr-card">
                <h3>Marble &amp; Handicrafts Crating</h3>
                <p>Custom wooden crating and high-density foam padding engineered for Agra's exquisite marble inlay tabletops, stone artifacts, fine chinaware, and family heirlooms.</p>
            </div>
            <div class="agr-card">
                <h3>Car &amp; Motorcycle Transport</h3>
                <p>Enclosed vehicular carriers equipped with pneumatic wheel chocks and soft safety lashings, transporting sedans, SUVs, and bikes with comprehensive transit insurance.</p>
            </div>
            <div class="agr-card">
                <h3>Express Inter-State Corridors</h3>
                <p>Scheduled direct transit routes connecting Agra via Yamuna Expressway and Agra-Lucknow Expressway to Delhi NCR, Lucknow, Kanpur, Varanasi, Patna, and Ranchi.</p>
            </div>
        </div>
    </section>

    <!-- Section 3: Sub-Locality Breakdown -->
    <section>
        <h2 class="agr-section-heading">Agra Neighborhoods &amp; Industrial Zones We Serve</h2>
        <p class="agr-intro-p">Our logistics teams operate with precision across every key residential locality, commercial district, and industrial sector of Agra:</p>

        <div class="agr-grid-3">
            <div class="agr-card">
                <h3>Sanjay Place Downtown</h3>
                <p>The bustling central business district housing financial institutions, IT offices, and government complexes. We coordinate smooth corporate and executive residential relocations.</p>
            </div>
            <div class="agr-card">
                <h3>Dayalbagh Educational Sector</h3>
                <p>The peaceful, academic residential township known for educational institutions and green colonies. We provide specialized packing for faculty residences and study collections.</p>
            </div>
            <div class="agr-card">
                <h3>Kamla Nagar Commercial Core</h3>
                <p>North Agra’s prime residential and vibrant retail enclave. Our teams utilize compact container vehicles to maneuver through busy shopping avenues smoothly.</p>
            </div>
            <div class="agr-card">
                <h3>Sikandra Industrial &amp; Highway Hub</h3>
                <p>The strategic western gateway on NH-19 hosting industrial parks and residential schemes. Ideal for swift highway dispatch toward Delhi, Mathura, and Rajasthan.</p>
            </div>
            <div class="agr-card">
                <h3>Tajganj &amp; Fatehabad Road</h3>
                <p>The premier hospitality and luxury apartment corridor near the Taj Mahal. We manage discreet white-glove relocations for hotel executives and premium apartment residents.</p>
            </div>
            <div class="agr-card">
                <h3>Agra Cantonment &amp; Civil Lines</h3>
                <p>The spacious administrative, judicial, and defense sector. We specialize in military quarter moves and colonial bungalow relocations with complete documentation.</p>
            </div>
        </div>

        <div class="agr-highlight-box">
            <h3>Specialized Protection for Fragile Artifacts &amp; Electronics</h3>
            <p>From fragile marble inlay souvenirs and delicate glassware to large flat-screen smart televisions and high-end audio setups, we utilize virgin bubble cushioning, expanded polystyrene blocks, and moisture-sealed wrap to ensure complete protection throughout transit.</p>
        </div>

        <div class="agr-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Multi-Layer Household Packaging in Agra" width="580" height="380" loading="lazy">
            <p class="agr-image-caption">Multi-tier bubble cushioning, corner edge protectors, and heavy-duty 5-ply cartons ensuring 100% damage-free transit in Agra.</p>
        </div>
    </section>

    <!-- Section 4: Transparent Tariff Table -->
    <section>
        <h2 class="agr-section-heading">Transparent Moving Costs in Agra</h2>
        <p class="agr-intro-p">Honest, competitive, and clearly itemized shifting charges without hidden costs or sudden extras:</p>

        <div class="agr-table-wrap">
            <table class="agr-table">
                <thead>
                    <tr>
                        <th>Relocation Type / Home Size</th>
                        <th>Standard Packing &amp; Transit</th>
                        <th>Comprehensive Premium Service</th>
                        <th>Estimated Duration</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment Shifting</strong></td>
                        <td>₹4,500 - ₹6,500</td>
                        <td>₹6,500 - ₹7,500</td>
                        <td>4 - 6 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Residential Flat</strong></td>
                        <td>₹7,500 - ₹10,500</td>
                        <td>₹10,500 - ₹13,500</td>
                        <td>5 - 8 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Luxury Apartment / House</strong></td>
                        <td>₹12,500 - ₹16,500</td>
                        <td>₹16,500 - ₹22,000</td>
                        <td>1 Full Day</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Independent Villa</strong></td>
                        <td>₹18,000 - ₹25,000</td>
                        <td>₹25,000 - ₹34,000</td>
                        <td>1 - 2 Days</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler Transport</strong></td>
                        <td>₹2,000 - ₹4,000</td>
                        <td>₹4,000 - ₹5,500</td>
                        <td>Route Dependent</td>
                    </tr>
                    <tr>
                        <td><strong>Car Relocation (Hatchback/SUV)</strong></td>
                        <td>₹7,500 - ₹13,000</td>
                        <td>₹13,000 - ₹18,500</td>
                        <td>Route Dependent</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="agr-highlight-box">
            <h3>Doorstep Surveys &amp; Government Transfer Reimbursement</h3>
            <p>Relocating on defense, banking, or corporate posting? We furnish 100% compliant documentation including GST tax invoices, transit bilty receipts, signed inventory declarations, and transit insurance certificates. Plan your relocation budget anytime using our online <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">moving charges tariff calculator</a>.</p>
        </div>
    </section>

    <!-- Section 5: Standard Operating Protocol -->
    <section>
        <h2 class="agr-section-heading">Our Proven 5-Stage Relocation Protocol</h2>
        <p class="agr-intro-p">Every household and corporate move in Agra follows our standardized quality assurance workflow:</p>

        <div class="agr-grid-3">
            <div class="agr-card">
                <h3>1. Pre-Move Survey &amp; Estimation</h3>
                <p>Our senior moving coordinator conducts a comprehensive in-person or video survey to evaluate goods volume, access lanes, and special crating requirements.</p>
            </div>
            <div class="agr-card">
                <h3>2. Multi-Layer Protective Packaging</h3>
                <p>We apply high-density bubble wrap, corrugated sheets, stretch film, and custom timber crating for delicate marble items, glassware, and electronics.</p>
            </div>
            <div class="agr-card">
                <h3>3. Master Carpentry &amp; Disassembly</h3>
                <p>Skilled master carpenters dismantle large wooden beds, modular wardrobes, and modular office workstations, tagging all hardware systematically.</p>
            </div>
            <div class="agr-card">
                <h3>4. Safe Stacking &amp; Container Transit</h3>
                <p>Items are loaded into weather-resistant, GPS-tracked covered container trucks with heavy-duty safety strapping to eliminate transit friction and shifting.</p>
            </div>
            <div class="agr-card">
                <h3>5. Delivery, Unpacking &amp; Placement</h3>
                <p>At your destination, our crew unloads each carton into designated rooms, reassembles heavy furniture, and clears away all packing materials cleanly.</p>
            </div>
            <div class="agr-card">
                <h3>Dedicated Operations Manager</h3>
                <p>A single dedicated point of contact coordinates your relocation from start to finish, providing real-time tracking updates until final client sign-off.</p>
            </div>
        </div>

        <div class="agr-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Master Carpentry and Bed Dismantling in Agra" width="580" height="380" loading="lazy">
            <p class="agr-image-caption">Skilled carpentry team carefully dismantling large wooden bed frames and packing delicate hardware in Agra.</p>
        </div>
    </section>

    <!-- Section 6: Regional Highway Connectivity -->
    <section>
        <h2 class="agr-section-heading">Strategic Road &amp; Regional Expressway Connectivity</h2>
        <p class="agr-intro-p">Agra holds a premier geographic position in northern India's transport network. Situated at the nexus of India's world-class expressway network, the city provides unmatched transit speed toward all four cardinal directions.</p>

        <p class="agr-intro-p">Northbound consignments reach Greater Noida, Noida, and Delhi in approximately 2.5 to 3 hours via the 6-lane Yamuna Expressway. Eastbound shipments bound for Lucknow connect directly via the high-speed Agra-Lucknow Expressway, linking effortlessly toward <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kanpur">Kanpur</a>, Prayagraj, Varanasi, Patna, and our corporate headquarters in <a href="<?php echo SITE_BASE_URL; ?>/">Ranchi</a> along the Grand Trunk NH-19 corridor. Westbound traffic toward Bharatpur and Jaipur travels along NH-21, while southbound consignments toward Gwalior, Jhansi, and central India follow the 4-lane NH-44 highway.</p>

        <div class="agr-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="All Weather Closed Container Fleet in Agra" width="580" height="380" loading="lazy">
            <p class="agr-image-caption">Dedicated sealed container truck fleet ensuring clean, weather-protected door-to-door delivery across Agra.</p>
        </div>

        <p class="agr-intro-p">In addition to expressway trucking, Agra Cantt and Agra Fort railway stations provide exceptional connectivity on the North Central Railway network, allowing our multimodal logistics team to coordinate express container shipments to Mumbai, Pune, Hyderabad, and Bangalore with comprehensive door-to-door cargo insurance.</p>

        <p class="agr-intro-p">Our modern fleet of closed container trucks undergoes routine mechanical checks, and our drivers are seasoned professionals well-versed in expressway transit safety regulations, ensuring your household belongings reach their destination on time, every time.</p>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section>
        <h2 class="agr-section-heading">Frequently Asked Questions</h2>
        <p class="agr-intro-p">Clear answers to common questions about relocation services in Agra:</p>

        <div class="agr-faq-item">
            <div class="agr-faq-q">What are the local shifting charges in Agra?</div>
            <div class="agr-faq-a">Local shifting charges in Agra generally range from ₹4,500 to ₹7,500 for a 1 BHK home, ₹7,500 to ₹13,500 for a 2 BHK apartment in Kamla Nagar or Dayalbagh, and ₹12,500 to ₹22,000 for a 3 BHK luxury flat or independent house. Rates include premium packing materials, loading, transit, unloading, and furniture reassembly.</div>
        </div>

        <div class="agr-faq-item">
            <div class="agr-faq-q">Do you provide relocation services for defense personnel stationed at Agra Cantonment and Air Force Station?</div>
            <div class="agr-faq-a">Yes. Agra hosts a major military cantonment and one of the largest Air Force bases in India. We specialize in defense relocations, providing standardized government transfer dockets, official IBA-approved bills, itemized inventories, and transit insurance accepted by defense and central government audit departments.</div>
        </div>

        <div class="agr-faq-item">
            <div class="agr-faq-q">How do you handle heavy corporate office shifting in commercial hubs like Sanjay Place?</div>
            <div class="agr-faq-a">Sanjay Place is Agra’s central corporate downtown. We coordinate office relocations during weekend or overnight windows to avoid business disruption, deploying anti-static bubble wrap for computer servers, color-coded files packaging, and disassembly of modular workstations by master carpenters.</div>
        </div>

        <div class="agr-faq-item">
            <div class="agr-faq-q">Can you transport delicate marble inlay handicrafts and stone artifacts safely from Agra?</div>
            <div class="agr-faq-a">Yes. Agra is famous for its intricate marble inlay handicrafts, pietra dura tabletops, and stone decorative items. Our specialized packing team uses tailored wooden crates, expanded polystyrene foam blocks, and shock-absorbent cushioning to guarantee 100% damage-free transit.</div>
        </div>

        <div class="agr-faq-item">
            <div class="agr-faq-q">Are enclosed car carrier and motorcycle transport options available from Agra?</div>
            <div class="agr-faq-a">Yes. We offer enclosed car trailers and dedicated two-wheeler carriers equipped with pneumatic wheel chocks and soft safety harnesses, transporting cars and bikes safely from Agra to Delhi NCR, Lucknow, Jaipur, Mumbai, Bangalore, and Ranchi.</div>
        </div>

        <div class="agr-faq-item">
            <div class="agr-faq-q">How much advance notice is needed to schedule a move in Agra?</div>
            <div class="agr-faq-a">We advise booking 2 to 3 days in advance. This ensures our surveyor can complete an accurate on-site inspection, reserve specialized packing materials, and assign our premier moving crew.</div>
        </div>
    </section>

    <!-- Section 8: Connected Neighborhoods & Authority Links -->
    <section>
        <h2 class="agr-section-heading">Connected Agra Shifting Hubs</h2>
        <p class="agr-intro-p">Explore our verified moving networks across Agra hyper-local sectors and parent authority corridors:</p>

        <div class="agr-links-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dayalbagh-agra" class="agr-link-card">Dayalbagh Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kamla-nagar-agra" class="agr-link-card">Kamla Nagar Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sanjay-place-agra" class="agr-link-card">Sanjay Place Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sikandra-agra" class="agr-link-card">Sikandra Highway Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-mathura" class="agr-link-card">Mathura City Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-firozabad" class="agr-link-card">Firozabad Glass Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow" class="agr-link-card">Lucknow State Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-delhi" class="agr-link-card">Delhi NCR Mega Hub</a>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="agr-cta-box">
        <h3>Plan Your Smooth Relocation in Agra Today</h3>
        <p>Connect with our Agra relocation specialists today for a transparent quote, tailored packing schedule, and flawless doorstep shifting experience.</p>
        <div class="agr-cta-group">
            <a href="tel:+919835565233" class="agr-btn-primary">Call: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="agr-btn-secondary">Get Free Estimate</a>
        </div>
    </section>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
