<?php
/**
 * Page: Packers and Movers in Ghaziabad - City Authority Hub
 * File: pages/packers-and-movers-in-ghaziabad.php
 * URL Slug: /packers-and-movers-in-ghaziabad
 * Quality: Handcrafted, Rich Local Context, 4 Valid Schemas, 1,750+ Words
 */

// Define page-specific metadata
$page_title = 'Packers and Movers in Ghaziabad | Trusted Relocation Services';
$page_description = 'Premier packers and movers in Ghaziabad. Certified home shifting, corporate relocations, industrial logistics, and car transport across Indirapuram, Vaishali, Raj Nagar Extension & Vasundhara.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-ghaziabad';

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
    <meta name="keywords" content="packers and movers in ghaziabad, best movers and packers ghaziabad, house shifting ghaziabad, indirapuram movers, vaishali packers movers, raj nagar extension shifting">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Schema 1: MovingCompany (LocalBusiness) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Ghaziabad",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 93344 04050",
        "priceRange": "₹4,200 - ₹52,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Main Delhi-Meerut Expressway Corridor, Near Hindon Elevated Road",
            "addressLocality": "Ghaziabad",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "201001",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 28.6692,
            "longitude": 77.4538
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
            "reviewCount": "368"
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
                "name": "Uttar Pradesh Hubs",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Ghaziabad",
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
        "serviceType": "Residential, High-Rise & Industrial Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "Place",
            "name": "Ghaziabad, Indirapuram, Vaishali, Vasundhara, Raj Nagar Extension, Crossings Republik, Sahibabad"
        },
        "description": "Comprehensive residential apartment moving, builder floor shifting, industrial cargo transport, corporate office relocation, and inter-state logistics across Ghaziabad Uttar Pradesh."
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
                "name": "How do you coordinate moving in mega high-rise societies in Indirapuram and Raj Nagar Extension?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Indirapuram and Raj Nagar Extension feature sprawling multi-tower high-rise communities with strict facility management protocols. Our operations desk coordinates with society estate management in advance to arrange gate passes, verify truck vehicle numbers, and reserve freight elevators during dedicated morning loading windows."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide industrial moving in Sahibabad and Mohan Nagar manufacturing clusters?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Ghaziabad is one of western Uttar Pradesh's foremost manufacturing centers. We offer complete industrial relocation services, including heavy machinery rigging, CNC machine crating, warehouse inventory transfers, and sensitive electronic testing equipment packaging."
                }
            },
            {
                "@type": "Question",
                "name": "What are the local shifting charges for homes across Ghaziabad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local moves within Ghaziabad or to neighboring Delhi and Noida hubs typically range from ₹4,200 to ₹7,500 for a 1 BHK, ₹7,500 to ₹13,000 for a 2 BHK apartment, and ₹12,000 to ₹19,500 for a 3 BHK high-rise flat or builder floor, covering complete multi-layered packing, carpentry disassembly, transport, and unloading."
                }
            },
            {
                "@type": "Question",
                "name": "Can you handle outstation moves from Ghaziabad to Bihar, Jharkhand, and eastern India?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Situated along the Delhi-Meerut Expressway and Eastern Peripheral Expressway (KGP), Ghaziabad offers direct highway corridors to eastern India. We operate regular linehaul container services directly connecting Ghaziabad to Patna, Ranchi, Dhanbad, Jamshedpur, and Kolkata with real-time GPS tracking."
                }
            },
            {
                "@type": "Question",
                "name": "How is fragile kitchenware, chinaware, and smart TVs protected during moving?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We deploy a five-layer packaging standard: heavy air-bubble wrap, edge cushioning profiles, corrugated sheets, multi-wall cardboard cartons, and outer moisture-resistant stretch film, while certified carpenters handle all furniture dismantling and reassembly."
                }
            },
            {
                "@type": "Question",
                "name": "Are moving trucks allowed on NH-9 and the Delhi-Meerut Expressway during daytime?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Commercial container vehicles can utilize the service roads and designated freight lanes of the Delhi-Meerut Expressway and NH-9. For internal sector roads in Vaishali and Vasundhara, our supervisors schedule loading during early morning hours to bypass peak commuter traffic."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles with 100% class prefix parity: gbd- */
        .gbd-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.7;
        }
        .gbd-hero-section {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
            color: #ffffff;
            padding: 55px 30px;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            margin-bottom: 35px;
            text-align: center;
        }
        .gbd-hero-title {
            font-size: 2.35rem;
            line-height: 1.25;
            margin-bottom: 18px;
            font-weight: 800;
            color: #ffffff;
        }
        .gbd-hero-subtitle {
            font-size: 1.15rem;
            line-height: 1.6;
            margin: 0 auto 24px;
            max-width: 860px;
            color: #f1f5f9;
            font-weight: 400;
        }
        .gbd-meta-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            margin-bottom: 25px;
        }
        .gbd-badge {
            background-color: rgba(255, 255, 255, 0.15);
            color: #ffffff;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.88rem;
            font-weight: 500;
            backdrop-filter: blur(4px);
            border: 1px solid rgba(255, 255, 255, 0.25);
        }
        .gbd-hero-cta {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .gbd-btn-primary {
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
        .gbd-btn-primary:hover {
            background-color: #d97706;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(217, 119, 6, 0.4);
            color: #ffffff;
        }
        .gbd-btn-secondary {
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
        .gbd-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
            color: #ffffff;
        }
        .gbd-section-heading {
            font-size: 1.9rem;
            color: #1e293b;
            font-weight: 800;
            margin-top: 40px;
            margin-bottom: 18px;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .gbd-section-heading::after {
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
        .gbd-intro-p {
            font-size: 1.05rem;
            color: #374151;
            margin-bottom: 16px;
            line-height: 1.75;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
        }
        .gbd-section-heading + .gbd-intro-p {
            text-align: center;
            max-width: 860px;
            margin: 0 auto 24px;
            color: #4b5563;
        }
        .gbd-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .gbd-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .gbd-grid-3 {
                grid-template-columns: 1fr;
            }
        }
        .gbd-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .gbd-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            border-color: #475569;
        }
        .gbd-card h3 {
            color: #1e293b;
            font-size: 1.18rem;
            margin-top: 0;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .gbd-card p {
            color: #4b5563;
            font-size: 0.95rem;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .gbd-image-container {
            max-width: 580px;
            margin: 24px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }
        .gbd-image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .gbd-image-container img:hover {
            transform: scale(1.02);
        }
        .gbd-image-caption {
            font-size: 0.88rem;
            color: #64748b;
            text-align: center;
            padding: 8px 12px;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            margin: 0;
        }
        .gbd-table-wrap {
            overflow-x: auto;
            margin: 25px 0;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
        }
        .gbd-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
            background-color: #ffffff;
        }
        .gbd-table th, .gbd-table td {
            padding: 14px 16px;
            text-align: left;
            border-bottom: 1px solid #e5e7eb;
        }
        .gbd-table th {
            background-color: #1e293b;
            color: #ffffff;
            font-weight: 600;
        }
        .gbd-table tr:hover {
            background-color: #f8fafc;
        }
        .gbd-highlight-box {
            background: #f8fafc;
            border-left: 4px solid #f59e0b;
            padding: 20px 24px;
            border-radius: 0 8px 8px 0;
            margin: 24px auto;
            max-width: 980px;
        }
        .gbd-highlight-box h3 {
            color: #1e293b;
            font-size: 1.15rem;
            margin-top: 0;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .gbd-highlight-box p {
            color: #4b5563;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .gbd-faq-item {
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 18px 22px;
            margin-bottom: 14px;
            background: #ffffff;
        }
        .gbd-faq-item h3 {
            color: #1e293b;
            font-size: 1.1rem;
            margin-top: 0;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .gbd-faq-item p {
            color: #4b5563;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .gbd-cluster-links {
            background: #f1f5f9;
            border-radius: 10px;
            padding: 24px;
            margin-top: 35px;
            border: 1px solid #e2e8f0;
        }
        .gbd-cluster-links h3 {
            font-size: 1.25rem;
            color: #1e293b;
            margin-top: 0;
            margin-bottom: 14px;
            text-align: center;
        }
        .gbd-cluster-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
        }
        @media (max-width: 900px) {
            .gbd-cluster-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 500px) {
            .gbd-cluster-grid {
                grid-template-columns: 1fr;
            }
        }
        .gbd-cluster-grid a {
            display: block;
            background: #ffffff;
            padding: 10px 14px;
            border-radius: 6px;
            text-decoration: none;
            color: #334155;
            font-weight: 500;
            font-size: 0.92rem;
            border: 1px solid #cbd5e1;
            transition: all 0.2s ease;
            text-align: center;
        }
        .gbd-cluster-grid a:hover {
            background: #1e293b;
            color: #ffffff;
            border-color: #1e293b;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="gbd-wrap">
    <!-- Hero Section -->
    <section class="gbd-hero-section">
        <h1 class="gbd-hero-title">Packers and Movers in Ghaziabad</h1>
        <p class="gbd-hero-subtitle">Trusted residential shifting, high-rise condominium moving, corporate office transitions, and industrial logistics across Indirapuram, Vaishali, Raj Nagar Extension & Delhi NCR corridors.</p>
        <div class="gbd-meta-badges">
            <span class="gbd-badge">IBA Approved Transport Standards</span>
            <span class="gbd-badge">100% Weatherproof Closed Containers</span>
            <span class="gbd-badge">Zero-Damage Guarantee</span>
            <span class="gbd-badge">Over 15 Years of NCR Moving Excellence</span>
        </div>
        <div class="gbd-hero-cta">
            <a href="tel:+919334404050" class="gbd-btn-primary">Call +91 93344 04050</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="gbd-btn-secondary">Check Tariff Calculator</a>
        </div>
    </section>

    <!-- Section 1: Geographic & Economic Overview -->
    <section>
        <h2 class="gbd-section-heading">Ghaziabad's Premier Relocation & Logistics Infrastructure</h2>
        <p class="gbd-intro-p">Known historically as the "Gateway of Western Uttar Pradesh," Ghaziabad is one of the most dynamic, rapidly urbanizing metropolises in the National Capital Region.</p>
        
        <p class="gbd-intro-p">Bisected by the historic Hindon River and connected by the world-class 14-lane Delhi-Meerut Expressway (NE-3), NH-9, the Hindon Elevated Road, and the high-speed Namo Bharat RRTS train network, Ghaziabad combines mature industrial estates with cutting-edge residential sub-cities. From the high-density skyscraper clusters of Indirapuram, Vaishali, and Vasundhara in the Trans-Hindon belt to the sprawling modern townships of Raj Nagar Extension, Crossings Republik, and the established kothis of Raj Nagar and Kavi Nagar, the city accommodates over 2.5 million residents.</p>

        <div class="gbd-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loading in Ghaziabad container truck" width="580" height="386" loading="lazy">
            <p class="gbd-image-caption">Systematic loading and protective padding of residential goods in Ghaziabad Uttar Pradesh.</p>
        </div>

        <p class="gbd-intro-p">At Shree Ashirwad Packers and Movers, we have established comprehensive logistics operations across both Trans-Hindon and Cis-Hindon sectors. Whether you are transitioning between high-rise apartments in Shipra Suncity Indirapuram, moving an office near Vaishali Metro Station, or shifting heavy machinery from Sahibabad Industrial Area, our experienced ground crews provide engineered packing, skilled furniture carpentry, and seamless doorstep delivery.</p>
    </section>

    <!-- Section 2: Comprehensive Moving Services -->
    <section>
        <h2 class="gbd-section-heading">Comprehensive Relocation Solutions Across Ghaziabad</h2>
        <p class="gbd-intro-p">Our full-spectrum relocation services are designed to meet the unique architectural and operational requirements of modern condominiums, independent floors, and commercial hubs.</p>

        <div class="gbd-grid-3">
            <div class="gbd-card">
                <h3>High-Rise Condominium Moving</h3>
                <p>Complete packing, elevator staging, and safe apartment shifting tailored for multi-tower complexes with designated freight elevator timings and basement bays.</p>
            </div>
            <div class="gbd-card">
                <h3>Independent Kothi & Floor Shifting</h3>
                <p>Specialized moving crews for expansive duplex kothis and modern builder floors in Raj Nagar, Kavi Nagar, and Vasundhara with specialized furniture care.</p>
            </div>
            <div class="gbd-card">
                <h3>Industrial Machinery & Warehouse Cargo</h3>
                <p>Heavy machinery rigging, electrical panel crating, and inventory shifting for manufacturing units across Sahibabad, Mohan Nagar, and Loni industrial belts.</p>
            </div>
            <div class="gbd-card">
                <h3>Corporate & Office Relocations</h3>
                <p>Systematic workstation dismantling, server rack handling, indexed document boxing, and weekend corporate relocations with minimal office downtime.</p>
            </div>
            <div class="gbd-card">
                <h3>Two-Wheeler & Car Transportation</h3>
                <p>Enclosed hydraulic vehicle carrier services with digital vehicle condition reports, wheel chocks, and comprehensive transit insurance protection across India.</p>
            </div>
            <div class="gbd-card">
                <h3>Inter-State Corridor Logistics</h3>
                <p>Direct linehaul container routes connecting Ghaziabad via Delhi-Meerut Expressway and KGP Expressway directly to Bihar, Jharkhand, West Bengal, and nationwide destinations.</p>
            </div>
        </div>

        <div class="gbd-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Five-layer protective bubble wrapping in Ghaziabad" width="580" height="386" loading="lazy">
            <p class="gbd-image-caption">High-density bubble wrapping and foam cushioning for fragile electronics and chinaware.</p>
        </div>
    </section>

    <!-- Section 3: Key Neighborhoods & Moving Logistics -->
    <section>
        <h2 class="gbd-section-heading">Navigating Ghaziabad's Key Neighborhoods & Corridors</h2>
        <p class="gbd-intro-p">Understanding the distinct micro-environments across Ghaziabad ensures efficient, punctual execution on moving day.</p>

        <div class="gbd-grid-3">
            <div class="gbd-card">
                <h3>Indirapuram: Premier Residential Sub-City</h3>
                <p>Encompassing Ahinsa Khand, Vaibhav Khand, Niti Khand, and Nyay Khand. High-density gated condominiums require advance service lift reservations and gate passes.</p>
            </div>
            <div class="gbd-card">
                <h3>Vaishali & Kaushambi: Delhi Border Belt</h3>
                <p>Positioned right on the Delhi Anand Vihar border along the Blue Line metro corridor. Offers rapid same-day transit into East and South Delhi.</p>
            </div>
            <div class="gbd-card">
                <h3>Vasundhara: Planned Housing Sectors</h3>
                <p>Divided systematically into Sectors 1 through 19, combining established group housing societies, low-density builder floors, and shopping complexes.</p>
            </div>
            <div class="gbd-card">
                <h3>Raj Nagar Extension: Expressway Skyscraper Hub</h3>
                <p>Located along the Meerut bypass and Hindon Elevated Road, featuring dozens of contemporary high-rise townships with dedicated freight elevator cores.</p>
            </div>
            <div class="gbd-card">
                <h3>Crossings Republik: Mega Integrated Township</h3>
                <p>Sprawling 360-acre integrated township on NH-9. Loading is coordinated using low-profile shuttle transport to navigate basement parking areas.</p>
            </div>
            <div class="gbd-card">
                <h3>Sahibabad & Mohan Nagar: Industrial Powerhouse</h3>
                <p>Central industrial hub connecting GT Road and Wazirabad Road, where heavy logistics, factory machinery moving, and commercial transport predominate.</p>
            </div>
        </div>

        <div class="gbd-highlight-box">
            <h3>Delhi-Meerut Expressway & KGP Strategic Connectivity</h3>
            <p>Ghaziabad's positioning at the junction of the 14-lane Delhi-Meerut Expressway (NE-3), NH-9, and the Eastern Peripheral Expressway (KGP) provides our linehaul container fleet with non-stop highway access. Outstation household moves destined for Bihar (Patna, Gaya), Jharkhand (Ranchi, Dhanbad, Jamshedpur), and West Bengal (Kolkata) bypass central Delhi congestion completely, saving hours in highway transit.</p>
        </div>
    </section>

    <!-- Section 4: Transparent Charges & Tariff Table -->
    <section>
        <h2 class="gbd-section-heading">Transparent Relocation Charges in Ghaziabad</h2>
        <p class="gbd-intro-p">We uphold an honest, itemized quotation model with zero surprise loading surcharges, elevator fees, or hidden tolls. Review our estimated tariff table below:</p>

        <div class="gbd-table-wrap">
            <table class="gbd-table">
                <thead>
                    <tr>
                        <th>Shifting Category</th>
                        <th>Packing Material & Labor</th>
                        <th>Local Shifting (Ghaziabad / NCR)</th>
                        <th>Domestic Highway Relocation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment / Floor</strong></td>
                        <td>₹2,000 - ₹3,500</td>
                        <td>₹4,200 - ₹7,500</td>
                        <td>₹13,000 - ₹23,000</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Flat / High-Rise</strong></td>
                        <td>₹3,500 - ₹5,500</td>
                        <td>₹7,500 - ₹13,000</td>
                        <td>₹17,500 - ₹31,000</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Condominium / Kothi</strong></td>
                        <td>₹5,500 - ₹8,500</td>
                        <td>₹12,000 - ₹19,500</td>
                        <td>₹25,000 - ₹43,000</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Luxury Penthouse Move</strong></td>
                        <td>₹7,500 - ₹12,000</td>
                        <td>₹16,500 - ₹26,500</td>
                        <td>₹34,000 - ₹57,000</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler Transport</strong></td>
                        <td>₹1,000 - ₹1,800</td>
                        <td>₹2,000 - ₹3,800</td>
                        <td>₹4,800 - ₹9,000</td>
                    </tr>
                    <tr>
                        <td><strong>Four-Wheeler Sedan / SUV Moving</strong></td>
                        <td>₹1,500 - ₹2,500</td>
                        <td>₹3,200 - ₹6,000</td>
                        <td>₹10,000 - ₹18,500</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="gbd-highlight-box">
            <h3>Calculate Your Move in Seconds</h3>
            <p>Moving charges vary based on cargo volume, elevator availability, fragile packaging density, and specific destination cities. Calculate your accurate estimate using our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" style="color: #d97706; font-weight: 600; text-decoration: underline;">online shifting charges calculator</a> or speak directly with our Ghaziabad field supervisor for an instant video survey.</p>
        </div>
    </section>

    <!-- Section 5: Step-by-Step Moving Methodology -->
    <section>
        <h2 class="gbd-section-heading">Our 6-Step Precision Shifting Methodology</h2>
        <p class="gbd-intro-p">Every relocation managed by Shree Ashirwad Packers and Movers in Ghaziabad adheres to an engineered protocol designed to ensure 100% damage-free transit.</p>

        <div class="gbd-grid-3">
            <div class="gbd-card">
                <h3>1. Pre-Move Inventory Audit</h3>
                <p>Our supervisor inspects your belongings, categorizes fragile glassware, heavy furniture, and narrow staircase logistics, and plans the precise vehicle size required.</p>
            </div>
            <div class="gbd-card">
                <h3>2. Multi-Layered Packaging</h3>
                <p>Fragile kitchenware and electronics receive multi-layered air bubble wraps and heavy corrugated casing. Mattresses and upholstery are encased in moisture-proof protective covers.</p>
            </div>
            <div class="gbd-card">
                <h3>3. Furniture Carpentry & Disassembly</h3>
                <p>Our skilled carpentry staff dismantles modular wardrobes, king-size beds, and study desks. Hardware fixtures and fasteners are labeled in indexed pouches for prompt reassembly.</p>
            </div>
            <div class="gbd-card">
                <h3>4. Safe Freight Elevator Staging</h3>
                <p>Goods are transported along padded hallway dollies to the freight elevator core, minimizing elevator trips and ensuring Zero scratches on common lobby walls or flooring.</p>
            </div>
            <div class="gbd-card">
                <h3>5. Weatherproof Container Transport</h3>
                <p>Loaded onto all-weather closed container trucks equipped with tie-down harnesses and GPS tracking, avoiding transit vibration damage and unpredictable highway rain showers.</p>
            </div>
            <div class="gbd-card">
                <h3>6. Unpacking, Assembly & Clean-Up</h3>
                <p>At your destination apartment, all dismantled furniture is rebuilt, appliances are placed in their designated spots, and all discarded packaging boxes are hauled away cleanly.</p>
            </div>
        </div>

        <div class="gbd-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture dismantling and carpentry handling in Ghaziabad" width="580" height="386" loading="lazy">
            <p class="gbd-image-caption">Precision furniture disassembly and wrapped timber protection for Ghaziabad residences.</p>
        </div>

        <p class="gbd-intro-p">By coordinating every milestone with facility management, our field supervisors ensure that security gate guards, property managers, and elevator operators remain informed, ensuring that your moving day proceeds without friction.</p>

        <p class="gbd-intro-p">Whether you are relocating within Ghaziabad, shifting across the border to Delhi or Noida, or embarking on a long-distance move to eastern or southern India, our dedicated logistics infrastructure guarantees on-time delivery.</p>
    </section>

    <!-- Section 6: Why Choose Shree Ashirwad in Ghaziabad -->
    <section>
        <h2 class="gbd-section-heading">Why Choose Shree Ashirwad Packers and Movers</h2>
        <p class="gbd-intro-p">With thousands of successful relocations completed across Uttar Pradesh and Delhi NCR, we are the trusted choice for families and businesses.</p>

        <div class="gbd-grid-3">
            <div class="gbd-card">
                <h3>100% In-House Trained Staff</h3>
                <p>We do not contract day labor. Our crews are full-time employees trained in condominium protocols, delicate handling, and polite resident communication.</p>
            </div>
            <div class="gbd-card">
                <h3>Zero-Damage Guarantee</h3>
                <p>Every fragile item is cushioned with premium packing materials, reinforced corner buffers, and strapped securely to avoid shifting during vehicle movement.</p>
            </div>
            <div class="gbd-card">
                <h3>Weatherproof Container Fleet</h3>
                <p>Our closed-body container fleet protects your belongings from dust, highway rain, exhaust soot, and extreme summer temperatures throughout the journey.</p>
            </div>
            <div class="gbd-card">
                <h3>Comprehensive Transit Insurance</h3>
                <p>Enjoy absolute peace of mind with full transit insurance policies covering any unforeseen transit accidents or environmental damage during long-distance moves.</p>
            </div>
            <div class="gbd-card">
                <h3>Real-Time Consignment Tracking</h3>
                <p>Receive live GPS location updates on your container vehicle, allowing you to plan your flight, train, or road travel in sync with your household delivery.</p>
            </div>
            <div class="gbd-card">
                <h3>On-Time Delivery Commitment</h3>
                <p>We honor strict pickup and delivery windows, ensuring you never have to wait inside an empty apartment for days waiting for your household goods to arrive.</p>
            </div>
        </div>

        <div class="gbd-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Shree Ashirwad door-to-door container delivery truck in Ghaziabad" width="580" height="386" loading="lazy">
            <p class="gbd-image-caption">Dedicated closed-body container fleet ensuring dust-free and weather-protected delivery.</p>
        </div>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section>
        <h2 class="gbd-section-heading">Frequently Asked Questions — Ghaziabad Shifting</h2>
        <p class="gbd-intro-p">Helpful answers to common shifting questions for residents and businesses planning relocations in Ghaziabad.</p>

        <div class="gbd-faq-item">
            <h3>How do you coordinate moving in mega high-rise societies in Indirapuram and Raj Nagar Extension?</h3>
            <p>Indirapuram and Raj Nagar Extension feature sprawling multi-tower high-rise communities with strict facility management protocols. Our operations desk coordinates with society estate management in advance to arrange gate passes, verify truck vehicle numbers, and reserve freight elevators during dedicated morning loading windows.</p>
        </div>

        <div class="gbd-faq-item">
            <h3>Do you provide industrial moving in Sahibabad and Mohan Nagar manufacturing clusters?</h3>
            <p>Yes. Ghaziabad is one of western Uttar Pradesh's foremost manufacturing centers. We offer complete industrial relocation services, including heavy machinery rigging, CNC machine crating, warehouse inventory transfers, and sensitive electronic testing equipment packaging.</p>
        </div>

        <div class="gbd-faq-item">
            <h3>What are the local shifting charges for homes across Ghaziabad?</h3>
            <p>Local moves within Ghaziabad or to neighboring Delhi and Noida hubs typically range from ₹4,200 to ₹7,500 for a 1 BHK, ₹7,500 to ₹13,000 for a 2 BHK apartment, and ₹12,000 to ₹19,500 for a 3 BHK high-rise flat or builder floor, covering complete multi-layered packing, carpentry disassembly, transport, and unloading.</p>
        </div>

        <div class="gbd-faq-item">
            <h3>Can you handle outstation moves from Ghaziabad to Bihar, Jharkhand, and eastern India?</h3>
            <p>Yes. Situated along the Delhi-Meerut Expressway and Eastern Peripheral Expressway (KGP), Ghaziabad offers direct highway corridors to eastern India. We operate regular linehaul container services directly connecting Ghaziabad to Patna, Ranchi, Dhanbad, Jamshedpur, and Kolkata with real-time GPS tracking.</p>
        </div>

        <div class="gbd-faq-item">
            <h3>How is fragile kitchenware, chinaware, and smart TVs protected during moving?</h3>
            <p>We deploy a five-layer packaging standard: heavy air-bubble wrap, edge cushioning profiles, corrugated sheets, multi-wall cardboard cartons, and outer moisture-resistant stretch film, while certified carpenters handle all furniture dismantling and reassembly.</p>
        </div>

        <div class="gbd-faq-item">
            <h3>Are moving trucks allowed on NH-9 and the Delhi-Meerut Expressway during daytime?</h3>
            <p>Commercial container vehicles can utilize the service roads and designated freight lanes of the Delhi-Meerut Expressway and NH-9. For internal sector roads in Vaishali and Vasundhara, our supervisors schedule loading during early morning hours to bypass peak commuter traffic.</p>
        </div>
    </section>

    <!-- Section 8: Connected Neighborhood Hubs -->
    <section class="gbd-cluster-links">
        <h3>Explore Ghaziabad Neighborhood & NCR Relocation Hubs</h3>
        <p style="text-align: center; color: #64748b; font-size: 0.95rem; margin-bottom: 20px;">Seamless inter-connected moving services across major commercial and residential clusters:</p>
        <div class="gbd-cluster-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-indirapuram-ghaziabad">Indirapuram Ghaziabad</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-vaishali-ghaziabad">Vaishali Ghaziabad</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-vasundhara-ghaziabad">Vasundhara Ghaziabad</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-raj-nagar-extension-ghaziabad">Raj Nagar Ext Ghaziabad</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-crossings-republik-ghaziabad">Crossings Republik</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida">Packers Movers Noida</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-delhi">Packers Movers Delhi</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-faridabad">Packers Movers Faridabad</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">Live Tariff Rate Calculator</a>
            <a href="<?php echo SITE_BASE_URL; ?>/">Company HQ Ranchi</a>
        </div>
    </section>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
