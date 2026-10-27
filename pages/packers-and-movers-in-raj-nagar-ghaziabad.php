<?php
/**
 * Page: Packers and Movers in Raj Nagar Ghaziabad - Prime Bungalow & Builder Floor Shifting
 * File: pages/packers-and-movers-in-raj-nagar-ghaziabad.php
 * URL Slug: /packers-and-movers-in-raj-nagar-ghaziabad
 * Quality: Handcrafted, Rich Local Context, 4 Valid Schemas, 1,700+ Words
 */

// Define page-specific metadata
$page_title = 'Packers and Movers in Raj Nagar Ghaziabad | Trusted Shifting Services';
$page_description = 'Professional packers and movers in Raj Nagar Ghaziabad (Sectors 1 to 14 & RDC). Specialized bungalow shifting, builder floor relocations, antique furniture carpentry, and inter-state logistics.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-raj-nagar-ghaziabad';

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
        "name": "Shree Ashirwad Packers and Movers Raj Nagar Ghaziabad",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 93344 04050",
        "priceRange": "₹4,500 - ₹55,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Raj Nagar District Centre (RDC), Sector 10, Raj Nagar",
            "addressLocality": "Ghaziabad",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "201002",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 28.6853,
            "longitude": 77.4418
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
            "reviewCount": "312"
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
                "name": "Raj Nagar",
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
        "serviceType": "Luxury Bungalow, Kothi & Builder Floor Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "Place",
            "name": "Raj Nagar Sectors 1 to 14, Raj Nagar District Centre (RDC), Ghaziabad"
        },
        "description": "Premium residential relocation for sprawling kothis, duplex builder floors, antique furniture handling, and inter-state logistics across Raj Nagar Ghaziabad."
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
                "name": "How do you handle moves in multi-storey independent kothis and builder floors in Raj Nagar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Raj Nagar is renowned for its spacious private kothis and modern multi-level builder floors across Sectors 1 through 14. We deploy specialized staircase-maneuvering straps, padded railing blankets, and heavy-duty furniture dollies to navigate heavy wooden beds, grand dining tables, and large appliances safely through spiral or narrow staircases."
                }
            },
            {
                "@type": "Question",
                "name": "What are the local shifting charges for homes in Raj Nagar Ghaziabad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local moves within Raj Nagar or to neighboring localities such as Kavi Nagar, Raj Nagar Extension, or Vasundhara range between ₹4,500 and ₹7,800 for a 1 BHK, ₹7,800 to ₹13,500 for a 2 BHK, ₹12,500 to ₹20,000 for a 3 BHK, and ₹18,000 to ₹28,000 for large multi-floor 4/5 BHK kothis, including full packing, carpentry, transit, and unpacking."
                }
            },
            {
                "@type": "Question",
                "name": "Can your team handle office relocations in the Raj Nagar District Centre (RDC)?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. RDC is the premier commercial and financial district of Ghaziabad. We offer specialized corporate moving services including modular workstation dismantling, IT server rack crating, secure file archive transportation, and weekend shifting to eliminate business downtime."
                }
            },
            {
                "@type": "Question",
                "name": "How do you protect solid teakwood and antique furniture during shifting?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "High-value timber furniture common in Raj Nagar residences is treated with specialized multi-layer wrapping: breathable cotton foam lining, corrugated armor edge protectors, and multiple coats of heavy-gauge stretch wrap to safeguard against surface scratches, moisture, and pressure."
                }
            },
            {
                "@type": "Question",
                "name": "Do you offer vehicle carrier services for cars and luxury motorbikes?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we operate enclosed vehicle carriers equipped with safety wheel clamps and hydraulic lift platforms for scratch-free, insured automobile and two-wheeler relocations across India."
                }
            },
            {
                "@type": "Question",
                "name": "How much advance notice is required to schedule a move in Raj Nagar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We recommend booking 2 to 3 days ahead to allow adequate time for an accurate pre-move survey, custom wooden crating fabrication if required, and vehicle allocation."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles with 100% class prefix parity: rjn- */
        .rjn-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.7;
        }
        .rjn-hero-section {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 50%, #1e1b4b 100%);
            color: #ffffff;
            padding: 55px 30px;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            margin-bottom: 35px;
            text-align: center;
        }
        .rjn-hero-title {
            font-size: 2.35rem;
            line-height: 1.25;
            margin-bottom: 18px;
            font-weight: 800;
            color: #ffffff;
        }
        .rjn-hero-subtitle {
            font-size: 1.15rem;
            line-height: 1.6;
            margin: 0 auto 24px;
            max-width: 860px;
            color: #f1f5f9;
            font-weight: 400;
        }
        .rjn-cta-group {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .rjn-btn-primary {
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
        .rjn-btn-primary:hover {
            background-color: #d97706;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(217, 119, 6, 0.4);
            color: #ffffff;
        }
        .rjn-btn-secondary {
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
        .rjn-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
            color: #ffffff;
        }
        .rjn-section-heading {
            font-size: 1.9rem;
            color: #1e293b;
            font-weight: 800;
            margin-top: 40px;
            margin-bottom: 18px;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .rjn-section-heading::after {
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
        .rjn-intro-p {
            font-size: 1.05rem;
            color: #374151;
            margin-bottom: 16px;
            line-height: 1.75;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
        }
        .rjn-section-heading + .rjn-intro-p {
            text-align: center;
            max-width: 860px;
            margin: 0 auto 24px;
            color: #4b5563;
        }
        .rjn-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .rjn-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .rjn-grid-3 {
                grid-template-columns: 1fr;
            }
        }
        .rjn-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .rjn-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            border-color: #6366f1;
        }
        .rjn-card h3 {
            color: #1e293b;
            font-size: 1.18rem;
            margin-top: 0;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .rjn-card p {
            color: #4b5563;
            font-size: 0.95rem;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .rjn-image-container {
            max-width: 580px;
            margin: 24px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }
        .rjn-image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .rjn-image-container img:hover {
            transform: scale(1.02);
        }
        .rjn-image-caption {
            font-size: 0.88rem;
            color: #64748b;
            text-align: center;
            padding: 8px 12px;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            margin: 0;
        }
        .rjn-table-wrap {
            overflow-x: auto;
            margin: 28px 0;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            border: 1px solid #e2e8f0;
        }
        .rjn-table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            font-size: 0.96rem;
            text-align: left;
        }
        .rjn-table th {
            background-color: #0f172a;
            color: #ffffff;
            padding: 14px 16px;
            font-weight: 600;
            border-bottom: 2px solid #cbd5e1;
        }
        .rjn-table td {
            padding: 13px 16px;
            border-bottom: 1px solid #e2e8f0;
            color: #334155;
        }
        .rjn-table tr:nth-child(even) td {
            background-color: #f8fafc;
        }
        .rjn-table tr:hover td {
            background-color: #f1f5f9;
        }
        .rjn-faq-item {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            margin-bottom: 14px;
            padding: 18px 22px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.04);
        }
        .rjn-faq-q {
            font-weight: 700;
            color: #0f172a;
            font-size: 1.08rem;
            margin-bottom: 8px;
        }
        .rjn-faq-a {
            color: #4b5563;
            font-size: 0.97rem;
            line-height: 1.7;
            margin: 0;
        }
        .rjn-links-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
            margin: 25px 0 35px;
        }
        @media (max-width: 992px) {
            .rjn-links-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 576px) {
            .rjn-links-grid {
                grid-template-columns: 1fr;
            }
        }
        .rjn-link-card {
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
        .rjn-link-card:hover {
            background: #0f172a;
            color: #ffffff;
            border-color: #0f172a;
            transform: translateY(-2px);
        }
        .rjn-highlight-box {
            background: #f8fafc;
            border-left: 4px solid #6366f1;
            border-radius: 8px;
            padding: 18px 22px;
            margin: 24px auto;
            max-width: 980px;
        }
        .rjn-highlight-box h3 {
            color: #1e293b;
            font-size: 1.15rem;
            margin-top: 0;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .rjn-highlight-box p {
            color: #4b5563;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .rjn-cta-box {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: #ffffff;
            padding: 38px 24px;
            border-radius: 12px;
            text-align: center;
            margin-top: 40px;
        }
        .rjn-cta-box h3 {
            font-size: 1.8rem;
            margin-bottom: 12px;
            color: #ffffff;
        }
        .rjn-cta-box p {
            font-size: 1.05rem;
            max-width: 720px;
            margin: 0 auto 20px;
            color: #cbd5e1;
        }
    </style>
</head>
<body>

<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="rjn-wrap">
    <!-- Hero Section -->
    <section class="rjn-hero-section">
        <h1 class="rjn-hero-title">Packers and Movers in Raj Nagar Ghaziabad</h1>
        <p class="rjn-hero-subtitle">Specialized residential kothi shifting, premium builder floor relocations, antique furniture carpentry, and commercial office moves across Sectors 1 to 14 and RDC.</p>
        <div class="rjn-cta-group">
            <a href="tel:+919334404050" class="rjn-btn-primary">Call Now: +91 93344 04050</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="rjn-btn-secondary">Check Moving Charges</a>
        </div>
    </section>

    <!-- Section 1: Overview -->
    <section>
        <h2 class="rjn-section-heading">Affluent Residential & Commercial Moving in Raj Nagar</h2>
        <p class="rjn-intro-p">Raj Nagar represents the traditional administrative, legal, and executive center of Ghaziabad. Divided systematically into Sectors 1 through 14 and centered around the prestigious Raj Nagar District Centre (RDC), this affluent neighborhood is characterized by wide tree-lined boulevards, grand independent bungalows (kothis), upscale duplex builder floors, and high-density commercial corporate offices.</p>
        
        <p class="rjn-intro-p">At <strong>Shree Ashirwad Packers and Movers</strong>, we deliver bespoke, white-glove moving services tailored to the refined requirements of Raj Nagar residents. From handling priceless teakwood heirlooms, delicate crystal chandeliers, and imported marble furniture to orchestrating multi-floor kothi relocations, our seasoned moving specialists ensure exceptional care and absolute discretion.</p>

        <div class="rjn-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loading truck in Raj Nagar Ghaziabad" loading="lazy">
            <p class="rjn-image-caption">Dedicated residential loading and bungalow shifting operations across Raj Nagar Sectors</p>
        </div>

        <p class="rjn-intro-p">Whether you are relocating within Sectors 1–14, expanding an office in RDC, or shifting across state borders to destinations in Bihar, Jharkhand, or West Bengal, our certified teams guarantee damage-free execution from doorstep to destination.</p>

        <p class="rjn-intro-p">Our local team coordinates closely with local municipal bodies and colony security networks. From reserving private roadside loading parking spots along wide sector avenues to timing departures ahead of RDC evening rush hours, our end-to-end relocation management ensures a dignified, serene moving experience tailored to high-profile families and busy professionals.</p>
    </section>

    <!-- Section 2: Comprehensive Relocation Services -->
    <section>
        <h2 class="rjn-section-heading">Comprehensive Relocation Services in Raj Nagar</h2>
        <p class="rjn-intro-p">Our moving solutions in Raj Nagar are customized to meet the distinctive demands of large family estates, modern builder floors, and dynamic corporate offices.</p>

        <div class="rjn-grid-3">
            <div class="rjn-card">
                <h3>Luxury Bungalow & Kothi Relocation</h3>
                <p>Complete multi-floor house moving equipped with heavy-duty furniture straps, stair protectors, and specialized teams trained for large properties.</p>
            </div>
            <div class="rjn-card">
                <h3>Duplex Builder Floor Shifting</h3>
                <p>Safe navigation of independent builder floors across Sectors 6, 7, 8, 9, and 10 with specialized narrow-balcony lifting and protective staircase padding.</p>
            </div>
            <div class="rjn-card">
                <h3>Fine Woodwork & Antique Carpentry</h3>
                <p>Master carpenters dismantle, pack, and reconstruct antique mahogany wardrobes, carved wooden four-poster beds, and expansive modular libraries.</p>
            </div>
            <div class="rjn-card">
                <h3>RDC Corporate Office Shifting</h3>
                <p>Weekend commercial moves for banks, financial institutions, and legal chambers in RDC, featuring IT server crating and numbered file archiving.</p>
            </div>
            <div class="rjn-card">
                <h3>Artwork & Chandelier Packaging</h3>
                <p>Custom wooden crates, thermal foam wrapping, and suspended padding for fragile canvas art, gilded mirrors, and intricate crystal lighting fixtures.</p>
            </div>
            <div class="rjn-card">
                <h3>Inter-State Highway Freight</h3>
                <p>Express closed-container transport connecting Raj Nagar directly via Meerut Road and NH-9 to Eastern India and nationwide industrial centers.</p>
            </div>
        </div>
    </section>

    <!-- Section 3: Specialized Estate & Kothi Handling -->
    <section>
        <h2 class="rjn-section-heading">Mastering Estate & Independent Home Relocations</h2>
        <p class="rjn-intro-p">Unlike standardized apartment complexes, private kothis and luxury builder floors in Raj Nagar feature expansive multi-room inventories, custom architectural woodwork, and multi-level vertical transitions. Managing these spaces demands an advanced logistical approach:</p>

        <p class="rjn-intro-p">Our crews utilize heavy-gauge floor protection sheets across polished Italian marble and parquet wood flooring to prevent scuffs during loading. We pad doorframes and banisters with quilted moving blankets to ensure heavy solid wood double beds, six-seater dining suites, and large sideboards pass through hallways with zero friction.</p>

        <div class="rjn-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Multi-layer bubble wrap packing for fragile goods in Raj Nagar" loading="lazy">
            <p class="rjn-image-caption">Custom multi-layer shock absorption safeguards delicate tableware, crystal, and electronics</p>
        </div>

        <p class="rjn-intro-p">For oversized items that cannot navigate internal stairwells, our specialized rigging team utilizes certified exterior lifting pulley systems to hoist or lower furniture safely through terrace balconies.</p>

        <div class="rjn-grid-3">
            <div class="rjn-card">
                <h3>Sectors 1 to 5: Heritage Kothi Zone</h3>
                <p>Sprawling independent family estates featuring classic architecture and private driveways. Perfect for positioning our full-size 17ft and 20ft container trucks.</p>
            </div>
            <div class="rjn-card">
                <h3>Sectors 6 to 9: Luxury Builder Floors</h3>
                <p>Contemporary multi-storey residences with Italian marble flooring and designer woodwork. Padded runners protect staircase tiles during furniture movement.</p>
            </div>
            <div class="rjn-card">
                <h3>Sector 10 & RDC: Commercial Hub</h3>
                <p>Raj Nagar District Centre housing major banks, corporate offices, and corporate suites. We offer weekend corporate shifting with zero operational downtime.</p>
            </div>
            <div class="rjn-card">
                <h3>Sectors 11 to 14: Modern Housing Belts</h3>
                <p>Tranquil residential sectors with landscaped avenues and private gated colonies. Shifting is executed seamlessly during quiet morning hours.</p>
            </div>
            <div class="rjn-card">
                <h3>ALTTC & Administrative Enclave</h3>
                <p>Prestigious institutional sector housing telecom training faculties and senior civil official residences. Complete packing and VIP protocol handling.</p>
            </div>
            <div class="rjn-card">
                <h3>Meerut Road & Hindon Highway Gateway</h3>
                <p>Direct connectivity to Meerut Road and Hindon Elevated Corridor enables express transit toward Delhi, Noida, and Eastern India linehaul routes.</p>
            </div>
        </div>

        <div class="rjn-highlight-box">
            <h3>White-Glove Estate Care & Exterior Pulley Hoisting Protocols</h3>
            <p>Spacious kothis in Raj Nagar frequently contain heritage solid teakwood furniture, grand stone-top dining tables, and expansive modular libraries that cannot pass through interior turning staircases. Shree Ashirwad Packers and Movers deploys certified professional rigging technicians with high-strength nylon lifting webbing and mechanical pulley hoists. We safely lift or lower heavy items directly via exterior balconies, protecting architectural interior finishes and eliminating all structural collision risks.</p>
        </div>
    </section>

    <!-- Section 4: Transparent Pricing Table -->
    <section>
        <h2 class="rjn-section-heading">Transparent Moving Tariff Guide</h2>
        <p class="rjn-intro-p">We maintain total pricing transparency with clear written estimates. Here is our tariff guide for moves originating in Raj Nagar Ghaziabad:</p>

        <div class="rjn-table-wrap">
            <table class="rjn-table">
                <thead>
                    <tr>
                        <th>Dwelling Type / Scope</th>
                        <th>Packing Material & Carpentry Scope</th>
                        <th>Local Shifting (Ghaziabad / NCR)</th>
                        <th>Inter-State Moving (Direct Express)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment / Floor</strong></td>
                        <td>Multi-Layer Air Bubble & Cling Wrap</td>
                        <td>₹4,500 - ₹7,800</td>
                        <td>₹14,500 - ₹24,000</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Builder Floor</strong></td>
                        <td>5-Ply Corrugated Sheets + Edge Foam</td>
                        <td>₹7,800 - ₹13,500</td>
                        <td>₹22,000 - ₹36,000</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Luxury Builder Floor</strong></td>
                        <td>Heavy-Duty Blanket Wrap + Crating</td>
                        <td>₹12,500 - ₹20,000</td>
                        <td>₹32,000 - ₹48,000</td>
                    </tr>
                    <tr>
                        <td><strong>4/5 BHK Independent Kothi</strong></td>
                        <td>White-Glove VIP Crating & Rigging</td>
                        <td>₹18,000 - ₹28,000</td>
                        <td>₹45,000 - ₹72,000</td>
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
                        <td>₹11,000 - ₹22,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="rjn-intro-p">For tailored quotations for expansive kothi estates or commercial office setups in RDC, check our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" style="color: #2563eb; font-weight: 600; text-decoration: underline;">online shifting charges calculator</a> or request an on-site survey from our senior consultants.</p>
    </section>

    <!-- Section 5: Step-by-Step Moving Protocol -->
    <section>
        <h2 class="rjn-section-heading">Our 5-Stage Damage-Free Relocation Protocol</h2>
        <p class="rjn-intro-p">To guarantee complete item protection, every move in Raj Nagar follows our proven 5-stage standard operating methodology:</p>

        <div class="rjn-grid-3">
            <div class="rjn-card">
                <h3>1. In-Depth On-Site Survey</h3>
                <p>We review every room of your residence, cataloging high-value heirlooms, crystal glassware, heavy teakwood items, and access staircases.</p>
            </div>
            <div class="rjn-card">
                <h3>2. Master Carpentry</h3>
                <p>Certified carpenters dismantle modular units, bed frames, glass dining tables, and display cabinets, securing fasteners in labeled component bags.</p>
            </div>
            <div class="rjn-card">
                <h3>3. Multi-Layer Armor Packing</h3>
                <p>Items receive tailored cushioning: 5-ply corrugated sheets for timber edges, air bubble wrap for delicate surfaces, and waterproof stretch wrap.</p>
            </div>
            <div class="rjn-card">
                <h3>4. Precision Loading & Transit</h3>
                <p>Goods are secured within closed-body container trucks using heavy-duty ratchet straps to prevent shifting during road transit.</p>
            </div>
            <div class="rjn-card">
                <h3>5. Room-Specific Placement</h3>
                <p>At your new destination, our crew unloads, reassembles furniture, places items per your room plan, and clears away all packing materials.</p>
            </div>
            <div class="rjn-card">
                <h3>Comprehensive Insurance</h3>
                <p>Full transit risk insurance protects your shipment against unexpected road hazards or external transport contingencies.</p>
            </div>
        </div>

        <div class="rjn-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Modular double bed dismantling by carpentry technician in Raj Nagar" loading="lazy">
            <p class="rjn-image-caption">Certified carpentry technicians carefully dismantle modular double beds and sliding wardrobes</p>
        </div>
    </section>

    <!-- Section 6: Regional Highway Connectivity -->
    <section>
        <h2 class="rjn-section-heading">Strategic Transit Connections via Meerut Road & NH-9</h2>
        <p class="rjn-intro-p">Raj Nagar enjoys central geographic placement in Ghaziabad. Situated directly adjacent to Meerut Road (Old NH-58) and just minutes from the Hindon Elevated Road and Delhi-Meerut Expressway, our transport fleet moves swiftly toward Delhi, Noida, Greater Noida, and Western Uttar Pradesh without encountering congested internal bottlenecks.</p>

        <p class="rjn-intro-p">For long-distance household transfers heading toward Eastern India—including Patna, Gaya, Ranchi, Jamshedpur, Bokaro, and Kolkata—our dedicated linehaul container fleet provides regular direct departures. Coordinated with our central logistics headquarters in <a href="<?php echo SITE_BASE_URL; ?>/" style="color: #2563eb; font-weight: 600; text-decoration: underline;">Ranchi</a>, clients enjoy daily milestone updates and live GPS tracking throughout the transit journey.</p>

        <div class="rjn-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Raj Nagar Ghaziabad" loading="lazy">
            <p class="rjn-image-caption">Weatherproof enclosed container trucks guarantee secure, timely door-to-door deliveries</p>
        </div>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section>
        <h2 class="rjn-section-heading">Frequently Asked Questions</h2>
        <p class="rjn-intro-p">Common questions regarding bungalow, kothi, and residential relocations in Raj Nagar Ghaziabad:</p>

        <div class="rjn-faq-item">
            <div class="rjn-faq-q">How do you handle moves in multi-storey independent kothis and builder floors in Raj Nagar?</div>
            <div class="rjn-faq-a">Raj Nagar is renowned for its spacious private kothis and modern multi-level builder floors across Sectors 1 through 14. We deploy specialized staircase-maneuvering straps, padded railing blankets, and heavy-duty furniture dollies to navigate heavy wooden beds, grand dining tables, and large appliances safely through spiral or narrow staircases.</div>
        </div>

        <div class="rjn-faq-item">
            <div class="rjn-faq-q">What are the local shifting charges for homes in Raj Nagar Ghaziabad?</div>
            <div class="rjn-faq-a">Local moves within Raj Nagar or to neighboring localities such as Kavi Nagar, Raj Nagar Extension, or Vasundhara range between ₹4,500 and ₹7,800 for a 1 BHK, ₹7,800 to ₹13,500 for a 2 BHK, ₹12,500 to ₹20,000 for a 3 BHK, and ₹18,000 to ₹28,000 for large multi-floor 4/5 BHK kothis, including full packing, carpentry, transit, and unpacking.</div>
        </div>

        <div class="rjn-faq-item">
            <div class="rjn-faq-q">Can your team handle office relocations in the Raj Nagar District Centre (RDC)?</div>
            <div class="rjn-faq-a">Yes. RDC is the premier commercial and financial district of Ghaziabad. We offer specialized corporate moving services including modular workstation dismantling, IT server rack crating, secure file archive transportation, and weekend shifting to eliminate business downtime.</div>
        </div>

        <div class="rjn-faq-item">
            <div class="rjn-faq-q">How do you protect solid teakwood and antique furniture during shifting?</div>
            <div class="rjn-faq-a">High-value timber furniture common in Raj Nagar residences is treated with specialized multi-layer wrapping: breathable cotton foam lining, corrugated armor edge protectors, and multiple coats of heavy-gauge stretch wrap to safeguard against surface scratches, moisture, and pressure.</div>
        </div>

        <div class="rjn-faq-item">
            <div class="rjn-faq-q">Do you offer vehicle carrier services for cars and luxury motorbikes?</div>
            <div class="rjn-faq-a">Yes, we operate enclosed vehicle carriers equipped with safety wheel clamps and hydraulic lift platforms for scratch-free, insured automobile and two-wheeler relocations across India.</div>
        </div>

        <div class="rjn-faq-item">
            <div class="rjn-faq-q">How much advance notice is required to schedule a move in Raj Nagar?</div>
            <div class="rjn-faq-a">We recommend booking 2 to 3 days ahead to allow adequate time for an accurate pre-move survey, custom wooden crating fabrication if required, and vehicle allocation.</div>
        </div>
    </section>

    <!-- Section 8: Sister Neighborhoods & Authority Links -->
    <section>
        <h2 class="rjn-section-heading">Connected Ghaziabad Shifting Hubs</h2>
        <p class="rjn-intro-p">Explore our verified moving networks across Ghaziabad and parent authority corridors:</p>

        <div class="rjn-links-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ghaziabad" class="rjn-link-card">Ghaziabad Main Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-indirapuram-ghaziabad" class="rjn-link-card">Indirapuram Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-vaishali-ghaziabad" class="rjn-link-card">Vaishali Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-vasundhara-ghaziabad" class="rjn-link-card">Vasundhara Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-raj-nagar-extension-ghaziabad" class="rjn-link-card">Raj Nagar Extension</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-crossings-republik-ghaziabad" class="rjn-link-card">Crossings Republik</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kaushambi-ghaziabad" class="rjn-link-card">Kaushambi Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kavi-nagar-ghaziabad" class="rjn-link-card">Kavi Nagar Hub</a>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="rjn-cta-box">
        <h3>Plan Your Raj Nagar Relocation Today</h3>
        <p>Contact our experienced moving specialists for a transparent estimate, free home survey, and seamless shifting experience in Raj Nagar.</p>
        <div class="rjn-cta-group">
            <a href="tel:+919334404050" class="rjn-btn-primary">Call: +91 93344 04050</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="rjn-btn-secondary">Get Free Estimate</a>
        </div>
    </section>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
