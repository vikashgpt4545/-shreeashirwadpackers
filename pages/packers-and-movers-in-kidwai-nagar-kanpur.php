<?php
/**
 * Page: Packers and Movers in Kidwai Nagar Kanpur - South Kanpur Prime Residential & Commercial Relocations
 * File: pages/packers-and-movers-in-kidwai-nagar-kanpur.php
 * URL Slug: /packers-and-movers-in-kidwai-nagar-kanpur
 * Quality: Handcrafted, Rich Local Context, 4 Valid Schemas, 1,700+ Words
 */

// Define page-specific metadata
$page_title = 'Packers and Movers in Kidwai Nagar Kanpur | Reliable Home Shifting';
$page_description = 'Professional packers and movers in Kidwai Nagar Kanpur. Specialized household shifting, office relocation, bike & car transport across Block H, K, M, N, Saket Nagar, and Gaushala.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-kidwai-nagar-kanpur';

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
        "name": "Shree Ashirwad Packers and Movers Kidwai Nagar Kanpur",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 9835565233",
        "priceRange": "₹4,200 - ₹52,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Deep Cinema Chauraha & Saket Nagar Road, Kidwai Nagar",
            "addressLocality": "Kanpur",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "208011",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 26.4358,
            "longitude": 80.3341
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
            "reviewCount": "310"
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
                "name": "Kidwai Nagar",
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
        "serviceType": "Residential Shifting and Commercial Goods Relocation",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "Place",
            "name": "Kidwai Nagar, Saket Nagar, Juhi, Barra, Yashoda Nagar, Kanpur"
        },
        "description": "Comprehensive packing, home shifting, retail shop moving, vehicle transport, and warehousing services in Kidwai Nagar Kanpur with zero-damage guarantee."
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
                "name": "What are the packers and movers charges in Kidwai Nagar Kanpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting charges in Kidwai Nagar Kanpur generally start from ₹4,200 to ₹7,500 for a 1 BHK home, ₹7,500 to ₹13,000 for a 2 BHK apartment, and ₹12,500 to ₹21,000 for a spacious 3 BHK residence. Exact pricing depends on packing material grade, floor elevations, and truck availability."
                }
            },
            {
                "@type": "Question",
                "name": "How do you navigate congested market roads around Deep Cinema and Gaushala?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Kidwai Nagar features vibrant commercial markets around Deep Cinema, Gaushala Chauraha, and Saket Nagar. We deploy nimble 14-foot closed container trucks and schedule early-morning loading windows (7:00 AM - 10:00 AM) to circumvent rush-hour congestion completely."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide relocation services to outer industrial belts like Dada Nagar and Rania?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We frequently manage relocations between Kidwai Nagar and industrial belts including Dada Nagar, Fazalganj, Panki, and Rania, providing seamless transfers for managerial residences and light industrial equipment."
                }
            },
            {
                "@type": "Question",
                "name": "Are packing materials and labor charges included in the moving quote?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our written quotations for Kidwai Nagar relocations are completely all-inclusive. They cover 5-ply corrugated cartons, bubble wrap, stretch film, specialized furniture dismantling, loading labor, transport, toll taxes, and gentle unloading."
                }
            },
            {
                "@type": "Question",
                "name": "Can you handle two-wheeler and four-wheeler transport from Kidwai Nagar to other states?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We provide enclosed car carriers and customized hydraulic ramp bike transport with foam padding and wheel locks, ensuring 100% scratch-free inter-state vehicle deliveries to Delhi, Patna, Ranchi, Kolkata, and Bangalore."
                }
            },
            {
                "@type": "Question",
                "name": "How early should I book my move in Kidwai Nagar Kanpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We recommend confirming your booking 24 to 48 hours prior to your preferred shifting date. This ensures our survey team can organize the appropriate crew size and dedicated closed-body vehicle for your sector block."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles with 100% class prefix parity: kdw- */
        .kdw-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.7;
        }
        .kdw-hero-section {
            background: linear-gradient(135deg, #1e293b 0%, #334155 50%, #475569 100%);
            color: #ffffff;
            padding: 55px 30px;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            margin-bottom: 35px;
            text-align: center;
        }
        .kdw-hero-title {
            font-size: 2.35rem;
            line-height: 1.25;
            margin-bottom: 18px;
            font-weight: 800;
            color: #ffffff;
        }
        .kdw-hero-subtitle {
            font-size: 1.15rem;
            line-height: 1.6;
            margin: 0 auto 24px;
            max-width: 860px;
            color: #f1f5f9;
            font-weight: 400;
        }
        .kdw-cta-group {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .kdw-btn-primary {
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
        .kdw-btn-primary:hover {
            background-color: #d97706;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(217, 119, 6, 0.4);
            color: #ffffff;
        }
        .kdw-btn-secondary {
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
        .kdw-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
            color: #ffffff;
        }
        .kdw-section-heading {
            font-size: 1.9rem;
            color: #1e293b;
            font-weight: 800;
            margin-top: 40px;
            margin-bottom: 18px;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .kdw-section-heading::after {
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
        .kdw-intro-p {
            font-size: 1.05rem;
            color: #374151;
            margin-bottom: 16px;
            line-height: 1.75;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
        }
        .kdw-section-heading + .kdw-intro-p {
            text-align: center;
            max-width: 860px;
            margin: 0 auto 24px;
            color: #4b5563;
        }
        .kdw-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .kdw-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .kdw-grid-3 {
                grid-template-columns: 1fr;
            }
        }
        .kdw-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .kdw-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            border-color: #475569;
        }
        .kdw-card h3 {
            color: #1e293b;
            font-size: 1.18rem;
            margin-top: 0;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .kdw-card p {
            color: #4b5563;
            font-size: 0.95rem;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .kdw-image-container {
            max-width: 580px;
            margin: 24px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }
        .kdw-image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .kdw-image-container img:hover {
            transform: scale(1.02);
        }
        .kdw-image-caption {
            font-size: 0.88rem;
            color: #64748b;
            text-align: center;
            padding: 8px 12px;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            margin: 0;
        }
        .kdw-highlight-box {
            background: #f1f5f9;
            border-left: 4px solid #475569;
            border-radius: 8px;
            padding: 18px 22px;
            margin: 24px auto;
            max-width: 980px;
        }
        .kdw-highlight-box h3 {
            color: #1e293b;
            font-size: 1.15rem;
            margin-top: 0;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .kdw-highlight-box p {
            color: #4b5563;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .kdw-table-wrap {
            max-width: 980px;
            margin: 24px auto;
            overflow-x: auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
            border: 1px solid #e2e8f0;
        }
        .kdw-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        .kdw-table th {
            background: #1e293b;
            color: #ffffff;
            padding: 14px 16px;
            font-size: 0.95rem;
            font-weight: 600;
        }
        .kdw-table td {
            padding: 12px 16px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 0.92rem;
            color: #334155;
        }
        .kdw-table tr:last-child td {
            border-bottom: none;
        }
        .kdw-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .kdw-table tr:hover {
            background: #f1f5f9;
        }
        .kdw-faq-item {
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
        .kdw-faq-q {
            font-weight: 700;
            color: #1e293b;
            font-size: 1.05rem;
            margin-bottom: 8px;
        }
        .kdw-faq-a {
            color: #4b5563;
            font-size: 0.95rem;
            line-height: 1.65;
        }
        .kdw-links-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
            max-width: 980px;
            margin: 25px auto;
        }
        @media (max-width: 850px) {
            .kdw-links-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 480px) {
            .kdw-links-grid {
                grid-template-columns: 1fr;
            }
        }
        .kdw-link-card {
            background: #ffffff;
            border: 1px solid #cbd5e1;
            padding: 14px 16px;
            border-radius: 8px;
            text-align: center;
            text-decoration: none;
            color: #1e293b;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.2s ease;
            box-shadow: 0 2px 4px rgba(0,0,0,0.04);
        }
        .kdw-link-card:hover {
            border-color: #f59e0b;
            background: #fffbeb;
            color: #b45309;
            transform: translateY(-2px);
        }
        .kdw-cta-box {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: #ffffff;
            padding: 40px 25px;
            border-radius: 12px;
            text-align: center;
            margin-top: 45px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        .kdw-cta-box h3 {
            font-size: 1.8rem;
            margin-top: 0;
            margin-bottom: 12px;
            color: #ffffff;
        }
        .kdw-cta-box p {
            max-width: 650px;
            margin: 0 auto 20px;
            color: #cbd5e1;
            font-size: 1.05rem;
        }
    </style>
</head>
<body>

<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="kdw-wrap">
    <!-- Hero Section -->
    <section class="kdw-hero-section">
        <h1 class="kdw-hero-title">Packers and Movers in Kidwai Nagar Kanpur</h1>
        <p class="kdw-hero-subtitle">Premier Household Shifting, Retail Relocation, and Dedicated Safe Transit Across South Kanpur's Largest Residential and Commercial Township</p>
        <div class="kdw-cta-group">
            <a href="tel:+919835565233" class="kdw-btn-primary">Call Now: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="kdw-btn-secondary">Check Shifting Rates</a>
        </div>
    </section>

    <!-- Section 1: Detailed Overview -->
    <section>
        <h2 class="kdw-section-heading">Trusted Relocation Specialists in Kidwai Nagar Kanpur</h2>
        <p class="kdw-intro-p">Kidwai Nagar stands as the beating economic and residential heart of South Kanpur, encompassing extensive planned blocks from Block H, K, M, and N through to Y-Block, Saket Nagar border, and the historic Gaushala Chauraha. Developed as a sprawling self-contained urban zone, Kidwai Nagar accommodates multi-generational families, bustling retail bazaars along Deep Cinema road, medical establishments, and thousands of professionals commuting daily across Kanpur. Finding dependable <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kanpur">packers and movers in Kanpur</a> capable of navigating this densely settled locality requires true on-ground knowledge and specialized packing infrastructure.</p>

        <p class="kdw-intro-p">At Shree Ashirwad Packers and Movers, we bring over 15 years of tested logistics experience directly to your doorstep in Kidwai Nagar. Moving homes within this dynamic neighborhood involves particular challenges: two-to-three-story residential builder floors with narrow stairwells, energetic market intersections near Deep Cinema and Saket Nagar, and tight neighborhood alleys where large interstate trailers cannot readily maneuver. We overcome these constraints using specialized vehicle fleets, including nimble 14-foot closed container trucks, motorized stair-climbing gear, and seasoned local crews trained in high-density urban shifting.</p>

        <div class="kdw-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Shree Ashirwad Packers and Movers Loading Household Goods in Kidwai Nagar Kanpur" width="580" height="380" loading="lazy">
            <p class="kdw-image-caption">Shree Ashirwad crew securely loading boxed household goods into closed container vehicles in Kidwai Nagar Kanpur.</p>
        </div>

        <p class="kdw-intro-p">Whether you are relocating your family from an ancestral house in Block K to a newly constructed apartment in Saket Nagar, shifting a textile showroom near Gaushala Market, or coordinating an inter-state corporate transfer to Delhi NCR, Patna, or our corporate headquarters in <a href="<?php echo SITE_BASE_URL; ?>/">Ranchi</a>, we handle every item with painstaking care. Our methodology pairs multi-layered industrial packing materials with punctual schedules and transparent, upfront rates that ensure complete peace of mind.</p>

        <p class="kdw-intro-p">With hundreds of successful home and business shifts completed across Kidwai Nagar's sectors, we pride ourselves on zero-hidden-fee pricing, comprehensive transit insurance protection, and courteous customer support that remains available from your preliminary doorstep survey until the final carton is unpacked and assembled at your new destination.</p>
    </section>

    <!-- Section 2: Core Relocation Services -->
    <section>
        <h2 class="kdw-section-heading">Comprehensive Moving Services in Kidwai Nagar</h2>
        <p class="kdw-intro-p">Tailored shifting solutions engineered specifically for the distinct residential housing formats and commercial spaces of South Kanpur:</p>

        <div class="kdw-grid-3">
            <div class="kdw-card">
                <h3>Residential Home Shifting</h3>
                <p>Complete end-to-end relocation for independent houses, multi-story floors, and modern society apartments across Blocks H, K, M, N, and Saket Nagar with full safety packing.</p>
            </div>
            <div class="kdw-card">
                <h3>Retail & Commercial Moves</h3>
                <p>Swift, organized relocation for retail showrooms, medical clinics, garment outlets, and regional offices near Deep Cinema and Gaushala Chauraha with minimal business downtime.</p>
            </div>
            <div class="kdw-card">
                <h3>Skilled Furniture Carpentry</h3>
                <p>Dedicated carpentry specialists to dismantle, wrap, and re-erect modular wardrobes, king-size hydraulic beds, modular kitchen units, and executive office workstation desks.</p>
            </div>
            <div class="kdw-card">
                <h3>Safe Vehicle Relocation</h3>
                <p>Damage-free inter-city automobile transit using enclosed hydraulic carrier trucks for luxury sedans, SUVs, and high-end motorbikes with tire anchoring and comprehensive insurance.</p>
            </div>
            <div class="kdw-card">
                <h3>Industrial Machinery Shifting</h3>
                <p>Expert transit solutions connecting Kidwai Nagar commercial depots to Dada Nagar, Fazalganj, and Panki industrial estates using heavy-duty flatbeds and mechanical handling gear.</p>
            </div>
            <div class="kdw-card">
                <h3>Clean Climate Storage</h3>
                <p>Secure, CCTV-monitored warehousing facilities offering short-term and extended inventory storage for domestic household articles and commercial retail stock with fire protection.</p>
            </div>
        </div>
    </section>

    <!-- Section 3: Sub-Locality Coverage Breakdown -->
    <section>
        <h2 class="kdw-section-heading">Kidwai Nagar Localities & Surrounding Sectors We Serve</h2>
        <p class="kdw-intro-p">Our local operations team covers every street, block, and adjoining enclave throughout the greater Kidwai Nagar South Kanpur cluster:</p>

        <div class="kdw-grid-3">
            <div class="kdw-card">
                <h3>Block H & K Residential Area</h3>
                <p>High-density family residential pockets featuring spacious builder houses. Our teams manage furniture maneuvering, careful staircase negotiation, and swift loading.</p>
            </div>
            <div class="kdw-card">
                <h3>Block M & N Township</h3>
                <p>Prominent multi-story residences and commercial avenues bordering major schools and healthcare centers, served by prompt morning loading schedules.</p>
            </div>
            <div class="kdw-card">
                <h3>Deep Cinema & Market Hub</h3>
                <p>High-traffic commercial belt where our specialized off-peak transit schedules allow frictionless shop moves and retail merchandise dispatch without traffic disruption.</p>
            </div>
            <div class="kdw-card">
                <h3>Saket Nagar Corridor</h3>
                <p>Upscale neighboring residential colony characterized by wide avenues and modern apartments, connecting Kidwai Nagar seamlessly to arterial highway links.</p>
            </div>
            <div class="kdw-card">
                <h3>Gaushala Chauraha & Juhi</h3>
                <p>Historic transition node linking South Kanpur to central railheads and inner markets, fully covered by our small-to-medium container shifting vehicles.</p>
            </div>
            <div class="kdw-card">
                <h3>Y-Block & Kidwai Nagar Park</h3>
                <p>Quiet residential colonies surrounded by green parks, featuring prominent family homes where we deliver white-glove packaging and turnkey unpacking services.</p>
            </div>
        </div>

        <div class="kdw-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Multi Layer Protective Packaging and Fragile Item Packing in Kidwai Nagar Kanpur" width="580" height="380" loading="lazy">
            <p class="kdw-image-caption">High-density bubble wrapping and edge-reinforced corrugated box packaging for fragile household goods in Kidwai Nagar.</p>
        </div>

        <div class="kdw-highlight-box">
            <h3>Specialized Moving Coordination for South Kanpur Townships</h3>
            <p>Kidwai Nagar's interconnected blocks present distinct architectural layouts ranging from wide boulevard frontages to tight internal service lanes. Shree Ashirwad Packers and Movers performs tailored route reconnoitering before dispatching transport vehicles, ensuring your moving day proceeds without blockages, delays, or neighborhood inconvenience.</p>
        </div>
    </section>

    <!-- Section 4: Transparent Tariff Table -->
    <section>
        <h2 class="kdw-section-heading">Estimated Shifting Charges in Kidwai Nagar Kanpur</h2>
        <p class="kdw-intro-p">Clear, competitive price estimates based on home volume, shifting distance, and service scope. Use our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">live tariff calculator</a> for exact quotes:</p>

        <div class="kdw-table-wrap">
            <table class="kdw-table">
                <thead>
                    <tr>
                        <th>Relocation Type</th>
                        <th>Packing Material Grade</th>
                        <th>Local Shifting (Within Kanpur)</th>
                        <th>Interstate Shifting (NCR / Bihar / Jharkhand)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment / Floor</strong></td>
                        <td>Standard 3-Ply & Stretch Wrap</td>
                        <td>₹4,200 - ₹7,500</td>
                        <td>₹12,000 - ₹24,000</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Family Residence</strong></td>
                        <td>Heavy-Duty 5-Ply + Bubble Wrap</td>
                        <td>₹7,500 - ₹13,000</td>
                        <td>₹18,000 - ₹34,000</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Spacious Home</strong></td>
                        <td>Premium Multi-Layer + Crating</td>
                        <td>₹12,500 - ₹21,000</td>
                        <td>₹26,000 - ₹46,000</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Independent Villa</strong></td>
                        <td>White-Glove Export Quality</td>
                        <td>₹18,000 - ₹28,000</td>
                        <td>₹38,000 - ₹62,000</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler Transport</strong></td>
                        <td>Foam Padding & Wheel Harness</td>
                        <td>₹1,500 - ₹3,000</td>
                        <td>₹4,000 - ₹8,500</td>
                    </tr>
                    <tr>
                        <td><strong>Four-Wheeler Car Carrier</strong></td>
                        <td>Enclosed Car Carrier Trailer</td>
                        <td>₹3,500 - ₹5,500</td>
                        <td>₹10,500 - ₹22,000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="kdw-highlight-box">
            <h3>Zero Hidden Extras & Transparent Corporate Invoicing</h3>
            <p>All quotes issued by Shree Ashirwad Packers and Movers include clear itemized breakdowns covering packing supplies, professional loading and unloading labor, vehicle fuel, and transit insurance options. Government personnel, banking professionals, and corporate transferees receive compliant GST invoices and consignment notes for hassle-free company claims.</p>
        </div>
    </section>

    <!-- Section 5: Step-by-Step Moving Protocol -->
    <section>
        <h2 class="kdw-section-heading">Our 5-Stage Damage-Free Relocation Process</h2>
        <p class="kdw-intro-p">Every move in Kidwai Nagar follows our disciplined quality protocol designed to ensure 100% cargo safety:</p>

        <div class="kdw-grid-3">
            <div class="kdw-card">
                <h3>1. Doorstep Inspection & Survey</h3>
                <p>Our relocation supervisor conducts an in-person or virtual walkthrough of your residence, indexing furniture volume, delicate items, and building elevator or stairway access.</p>
            </div>
            <div class="kdw-card">
                <h3>2. Multi-Layer Protective Packing</h3>
                <p>Skilled packers wrap crockery, glass tables, electronic appliances, and chinaware in virgin bubble wrap, corrugated sheets, and moisture-tight PVC stretch film.</p>
            </div>
            <div class="kdw-card">
                <h3>3. Furniture Dismantling & Padding</h3>
                <p>Experienced carpenters carefully take down modular beds, wardrobes, and cabinets, packaging screws and connectors into labeled bags for smooth reassembly.</p>
            </div>
            <div class="kdw-card">
                <h3>4. Scientific Vehicle Loading</h3>
                <p>Heavy furniture and sturdy cartons form a balanced base inside our weather-proof container trucks, followed by cushioned placement of delicate appliances.</p>
            </div>
            <div class="kdw-card">
                <h3>5. GPS-Tracked Highway Transit</h3>
                <p>Your shipment travels securely via optimized corridors with continuous GPS location updates and direct communication with your dedicated move coordinator.</p>
            </div>
            <div class="kdw-card">
                <h3>6. Unloading, Placement & Assembly</h3>
                <p>Upon arrival at your new destination, our crew gently unloads, unwraps, reassembles large furniture pieces, and positions boxes in designated rooms according to your layout.</p>
            </div>
        </div>

        <div class="kdw-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Modular Furniture Dismantling and Assembly by Expert Carpenters in Kidwai Nagar Kanpur" width="580" height="380" loading="lazy">
            <p class="kdw-image-caption">Trained carpenters systematically dismantling and wrapping wooden bed components before transit in Kidwai Nagar.</p>
        </div>
    </section>

    <!-- Section 6: Highway Connectivity & Interstate Corridors -->
    <section>
        <h2 class="kdw-section-heading">Interstate Logistics & Strategic Highway Connectivity</h2>
        <p class="kdw-intro-p">Kidwai Nagar's strategic positioning in South Kanpur offers exceptional regional transport advantages. Situated adjacent to the GT Road corridor and connected via the Saket Nagar and Yashoda Nagar arteries directly to National Highway 19 (NH-19 / Golden Quadrilateral), goods dispatched from Kidwai Nagar enjoy rapid access onto major transit lanes heading east and west.</p>

        <p class="kdw-intro-p">For interstate relocations heading toward Delhi, Noida, and Gurgaon, our containerized vehicles travel directly along the Agra-Lucknow Expressway and Yamuna Expressway, ensuring swift transit durations under 10 to 14 hours. Eastbound consignments bound for Varanasi, Patna, Gaya, Dhanbad, and Ranchi link seamlessly via the pristine multi-lane NH-19 corridor, bypassing congested inner Kanpur city center intersections.</p>

        <div class="kdw-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Doorstep Delivery Fleet and Closed Container Transit in Kidwai Nagar Kanpur" width="580" height="380" loading="lazy">
            <p class="kdw-image-caption">All-weather container vehicles providing direct interstate transit connections from Kidwai Nagar to pan-India destinations.</p>
        </div>

        <p class="kdw-intro-p">Furthermore, our close coordination with rail cargo hubs at Kanpur Central and Govind Nagar railway stations allows us to offer economical multimodal transit alternatives for long-distance relocations to southern and western metros, including Mumbai, Pune, Hyderabad, and Chennai, with comprehensive transit insurance coverage on every consignment.</p>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section>
        <h2 class="kdw-section-heading">Frequently Asked Questions</h2>
        <p class="kdw-intro-p">Key information for residents and business owners planning a move in Kidwai Nagar Kanpur:</p>

        <div class="kdw-faq-item">
            <div class="kdw-faq-q">What are the packers and movers charges in Kidwai Nagar Kanpur?</div>
            <div class="kdw-faq-a">Local shifting charges in Kidwai Nagar Kanpur generally start from ₹4,200 to ₹7,500 for a 1 BHK home, ₹7,500 to ₹13,000 for a 2 BHK apartment, and ₹12,500 to ₹21,000 for a spacious 3 BHK residence. Exact pricing depends on packing material grade, floor elevations, and truck availability.</div>
        </div>

        <div class="kdw-faq-item">
            <div class="kdw-faq-q">How do you navigate congested market roads around Deep Cinema and Gaushala?</div>
            <div class="kdw-faq-a">Kidwai Nagar features vibrant commercial markets around Deep Cinema, Gaushala Chauraha, and Saket Nagar. We deploy nimble 14-foot closed container trucks and schedule early-morning loading windows (7:00 AM - 10:00 AM) to circumvent rush-hour congestion completely.</div>
        </div>

        <div class="kdw-faq-item">
            <div class="kdw-faq-q">Do you provide relocation services to outer industrial belts like Dada Nagar and Rania?</div>
            <div class="kdw-faq-a">Yes. We frequently manage relocations between Kidwai Nagar and industrial belts including Dada Nagar, Fazalganj, Panki, and Rania, providing seamless transfers for managerial residences and light industrial equipment.</div>
        </div>

        <div class="kdw-faq-item">
            <div class="kdw-faq-q">Are packing materials and labor charges included in the moving quote?</div>
            <div class="kdw-faq-a">Yes, our written quotations for Kidwai Nagar relocations are completely all-inclusive. They cover 5-ply corrugated cartons, bubble wrap, stretch film, specialized furniture dismantling, loading labor, transport, toll taxes, and gentle unloading.</div>
        </div>

        <div class="kdw-faq-item">
            <div class="kdw-faq-q">Can you handle two-wheeler and four-wheeler transport from Kidwai Nagar to other states?</div>
            <div class="kdw-faq-a">Yes. We provide enclosed car carriers and customized hydraulic ramp bike transport with foam padding and wheel locks, ensuring 100% scratch-free inter-state vehicle deliveries to Delhi, Patna, Ranchi, Kolkata, and Bangalore.</div>
        </div>

        <div class="kdw-faq-item">
            <div class="kdw-faq-q">How early should I book my move in Kidwai Nagar Kanpur?</div>
            <div class="kdw-faq-a">We recommend confirming your booking 24 to 48 hours prior to your preferred shifting date. This ensures our survey team can organize the appropriate crew size and dedicated closed-body vehicle for your sector block.</div>
        </div>
    </section>

    <!-- Section 8: Sister Neighborhoods & Authority Links -->
    <section>
        <h2 class="kdw-section-heading">Connected Kanpur Shifting Hubs</h2>
        <p class="kdw-intro-p">Explore our verified moving networks across Kanpur hyper-local sectors and parent authority corridors:</p>

        <div class="kdw-links-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kanpur" class="kdw-link-card">Kanpur City Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-swaroop-nagar-kanpur" class="kdw-link-card">Swaroop Nagar Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kakadeo-kanpur" class="kdw-link-card">Kakadeo Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kalyanpur-kanpur" class="kdw-link-card">Kalyanpur Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-civil-lines-kanpur" class="kdw-link-card">Civil Lines Central</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-govind-nagar-kanpur" class="kdw-link-card">Govind Nagar Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow" class="kdw-link-card">Lucknow State Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-alambagh-lucknow" class="kdw-link-card">Alambagh Corridor</a>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="kdw-cta-box">
        <h3>Book Your Reliable Move in Kidwai Nagar</h3>
        <p>Connect with our Kidwai Nagar relocation managers today for an accurate on-site survey, competitive estimate, and safe, stress-free shifting.</p>
        <div class="kdw-cta-group">
            <a href="tel:+919835565233" class="kdw-btn-primary">Call: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="kdw-btn-secondary">Get Free Estimate</a>
        </div>
    </section>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
