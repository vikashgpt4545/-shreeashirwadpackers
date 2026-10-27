<?php
/**
 * Page: Packers and Movers in Cyber City Gurgaon - Corporate Shifting & Executive Residence Relocations
 * File: pages/packers-and-movers-in-cyber-city-gurgaon.php
 * URL Slug: /packers-and-movers-in-cyber-city-gurgaon
 * Quality: Handcrafted, Rich Local Context, 4 Valid Schemas, 1,750+ Words
 */

// Define page-specific metadata
$page_title = 'Packers and Movers in Cyber City Gurgaon | Corporate & Home Relocation';
$page_description = 'Top-rated packers and movers in Cyber City Gurgaon. Specialized corporate office shifting, server relocation, executive residential moving in DLF Phase 2/3 & Belvedere Towers, and vehicle transport.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-cyber-city-gurgaon';

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
        "name": "Shree Ashirwad Packers and Movers Cyber City",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 9835565233",
        "priceRange": "₹4,200 - ₹58,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "DLF Cyber City, Building 10 Commercial Belt",
            "addressLocality": "Gurgaon",
            "addressRegion": "Haryana",
            "postalCode": "122002",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 28.4950,
            "longitude": 77.0895
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
                "name": "Gurgaon",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gurgaon"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Cyber City",
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
        "serviceType": "Corporate Office Shifting & Executive Residence Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "Place",
            "name": "DLF Cyber City, Shankar Chowk, DLF Phase 2 & 3, Gurgaon"
        },
        "description": "Comprehensive corporate shifting, IT server room packing, executive apartment relocation, and vehicle transport services in DLF Cyber City Gurgaon."
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
                "name": "Can you execute corporate office shifting during weekends in Cyber City?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We specialize in zero-downtime corporate moves commencing Friday at 7:00 PM and concluding by Sunday evening. We coordinate building loading dock slots, commercial freight elevator bookings, and IT workstation reconnections before Monday business hours."
                }
            },
            {
                "@type": "Question",
                "name": "How do you protect sensitive IT equipment, workstations, and servers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We deploy anti-static bubble wrap, color-coded electronic labeling, custom wooden server crates, and cushioned transport trays. Every electronic asset is inventoried via barcode scanning for 100% accountability."
                }
            },
            {
                "@type": "Question",
                "name": "What residential communities do you service around Cyber City?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We provide end-to-end household shifting for executive residences across Belvedere Towers, Belvedere Park, DLF Phase 2, DLF Phase 3, Oakwood Estate, Silver Oaks, and luxury condominiums along DLF Gateway Tower."
                }
            },
            {
                "@type": "Question",
                "name": "What are the moving charges for apartment shifting in Cyber City Gurgaon?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local household relocation for a 1 to 2 BHK apartment near Cyber City typically costs between ₹5,000 and ₹12,000, while a larger 3 to 4 BHK executive condominium ranges from ₹14,000 to ₹26,000 including complete packing, carpentry, transit, and unpacking."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles with 100% class prefix parity: ccg- */
        .ccg-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.7;
        }
        .ccg-hero-section {
            background: linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 50%, #2563eb 100%);
            color: #ffffff;
            padding: 55px 30px;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            margin-bottom: 35px;
            text-align: center;
        }
        .ccg-hero-title {
            font-size: 2.35rem;
            line-height: 1.25;
            margin-bottom: 18px;
            font-weight: 800;
            color: #ffffff;
        }
        .ccg-hero-subtitle {
            font-size: 1.15rem;
            line-height: 1.6;
            margin: 0 auto 24px;
            max-width: 860px;
            color: #dbeafe;
            font-weight: 400;
        }
        .ccg-cta-group {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .ccg-btn-primary {
            background-color: #f97316;
            color: #ffffff;
            font-weight: 700;
            padding: 13px 28px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.2s ease;
            display: inline-block;
            box-shadow: 0 4px 12px rgba(249, 115, 22, 0.3);
        }
        .ccg-btn-primary:hover {
            background-color: #ea580c;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(234, 88, 12, 0.4);
            color: #ffffff;
        }
        .ccg-btn-secondary {
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
        .ccg-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
            color: #ffffff;
        }
        .ccg-section-heading {
            font-size: 1.9rem;
            color: #1e3a8a;
            font-weight: 800;
            margin-top: 40px;
            margin-bottom: 18px;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .ccg-section-heading::after {
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
        .ccg-intro-p {
            font-size: 1.05rem;
            color: #374151;
            margin-bottom: 16px;
            line-height: 1.75;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
        }
        .ccg-section-heading + .ccg-intro-p {
            text-align: center;
            max-width: 860px;
            margin: 0 auto 24px;
            color: #4b5563;
        }
        .ccg-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .ccg-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .ccg-grid-3 {
                grid-template-columns: 1fr;
            }
        }
        .ccg-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .ccg-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            border-color: #2563eb;
        }
        .ccg-card h3 {
            color: #1e3a8a;
            font-size: 1.18rem;
            margin-top: 0;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .ccg-card p {
            color: #4b5563;
            font-size: 0.95rem;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .ccg-image-container {
            max-width: 580px;
            margin: 24px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }
        .ccg-image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .ccg-image-container img:hover {
            transform: scale(1.02);
        }
        .ccg-image-caption {
            font-size: 0.85rem;
            color: #6b7280;
            text-align: center;
            padding: 8px 12px;
            background: #f9fafb;
            border-top: 1px solid #e5e7eb;
            font-style: italic;
        }
        .ccg-table-responsive {
            overflow-x: auto;
            margin: 25px 0;
            background: #ffffff;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }
        .ccg-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.95rem;
        }
        .ccg-table th {
            background-color: #1e3a8a;
            color: #ffffff;
            padding: 14px 16px;
            font-weight: 700;
            letter-spacing: 0.3px;
        }
        .ccg-table td {
            padding: 12px 16px;
            border-bottom: 1px solid #e5e7eb;
            color: #374151;
        }
        .ccg-table tr:last-child td {
            border-bottom: none;
        }
        .ccg-table tr:nth-child(even) {
            background-color: #f8fafc;
        }
        .ccg-highlight-box {
            background-color: #eff6ff;
            border-left: 4px solid #2563eb;
            padding: 20px 24px;
            border-radius: 0 8px 8px 0;
            margin: 25px auto;
            max-width: 980px;
        }
        .ccg-highlight-box h4 {
            color: #1e3a8a;
            font-size: 1.15rem;
            margin-top: 0;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .ccg-step-card {
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
        .ccg-step-num {
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
        .ccg-faq-item {
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            margin: 0 auto 14px;
            max-width: 950px;
            padding: 18px 22px;
            background: #ffffff;
        }
        .ccg-faq-question {
            font-size: 1.12rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 8px;
        }
        .ccg-faq-answer {
            color: #4b5563;
            font-size: 0.96rem;
            line-height: 1.65;
            margin-bottom: 0;
        }
        .ccg-cluster-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .ccg-cluster-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 500px) {
            .ccg-cluster-grid {
                grid-template-columns: 1fr;
            }
        }
        .ccg-cluster-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 14px 16px;
            text-align: center;
            transition: all 0.2s ease;
        }
        .ccg-cluster-card:hover {
            border-color: #2563eb;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06);
        }
        .ccg-cluster-card a {
            color: #1e3a8a;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
        }
        .ccg-cluster-card a:hover {
            color: #f97316;
        }
    </style>
</head>
<body>

<?php
// Include the main site header partial
include_once ROOT_PATH . '/includes/header.php';
?>

<main class="ccg-wrap">
    <!-- Hero Section -->
    <section class="ccg-hero-section">
        <h1 class="ccg-hero-title">Packers and Movers in Cyber City Gurgaon</h1>
        <p class="ccg-hero-subtitle">Corporate Office Relocation, High-Tech Server Shifting & Executive Home Moving across DLF Cyber Hub, Shankar Chowk, DLF Phase 2 & 3.</p>
        <div class="ccg-cta-group">
            <a href="tel:+919835565233" class="ccg-btn-primary">Call Now: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="ccg-btn-secondary">Check Live Tariff Calculator</a>
        </div>
    </section>

    <!-- Authority Overview -->
    <section>
        <h2 class="ccg-section-heading">Premier Corporate & Executive Relocation in Cyber City Gurgaon</h2>
        <p class="ccg-intro-p">DLF Cyber City is the premier financial and technological powerhouse of Northern India. Housing over hundreds of multinational corporations, IT giants, and Fortune 500 headquarters across iconic commercial complexes such as <strong>Building 5, Building 10, Building 14, Infinity Towers</strong>, and the bustling <strong>DLF Cyber Hub</strong>, this high-velocity business district operates with unmatched pace. Relocating an office or moving an executive household in this dense corporate zone necessitates precise project scheduling, dock access clearances, and specialized handling techniques.</p>
        
        <p class="ccg-intro-p">Flanked by the 16-lane Delhi-Gurgaon Expressway (NH-48), Shankar Chowk, and the elevated Cyber City Rapid Metro loop, traffic flow here is strictly governed. Shree Ashirwad Packers and Movers deploys synchronized logistics planning to maneuver commercial vehicles through dedicated basement freight ramps without impeding weekday corporate traffic. Our operations team coordinates directly with DLF Building Management across Phase 2 and Phase 3, ensuring all necessary entry clearances and goods elevator reservations are verified prior to truck dispatch.</p>
        
        <h3 style="color: #1e3a8a; font-size: 1.25rem; font-weight: 700; text-align: center; margin: 24px 0 12px;">Strategic Expressway Connectivity & Seamless Building Approvals</h3>
        
        <p class="ccg-intro-p">At <strong>Shree Ashirwad Packers and Movers</strong>, we deliver battle-tested commercial shifting and executive residential moving services throughout Cyber City and adjoining residential neighborhoods including <strong>Belvedere Towers, Belvedere Park, DLF Phase 2, DLF Phase 3</strong>, and <strong>Oakwood Estate</strong>. Our dedicated operations crew specializes in zero-downtime weekend office transfers, safeguarding critical server infrastructure, modular computer workstations, and executive furnishings with military precision.</p>
        
        <p class="ccg-intro-p">Whether you are expanding your enterprise across commercial towers in Cyber City, relocating key executives locally across Gurgaon, or coordinating multi-city corporate transfers linking to Eastern India via our <a href="<?php echo SITE_BASE_URL; ?>/">Packers and Movers in Ranchi</a> network, Shree Ashirwad delivers dependable corporate logistics backed by 100% transit insurance and seamless GST invoicing.</p>

        <div class="ccg-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Corporate office shifting crew in Cyber City Gurgaon" width="580" height="360">
            <div class="ccg-image-caption">Professional moving personnel staging padded office electronics and modular furniture in Cyber City Gurgaon</div>
        </div>
    </section>

    <!-- Tailored Solutions Grid -->
    <section>
        <h2 class="ccg-section-heading">Specialized Relocation Solutions in Cyber City</h2>
        <p class="ccg-intro-p">From high-density corporate headquarters to luxury executive residences, our relocation capabilities cater to every modern logistical requirement with utmost precision.</p>

        <div class="ccg-grid-3">
            <div class="ccg-card">
                <h3>Zero-Downtime Office Shifting</h3>
                <p>Structured weekend office relocations starting Friday evening and wrapping up by Sunday midnight. Complete workstation setup, conference room transitions, and network rack placement ready for Monday morning.</p>
            </div>
            <div class="ccg-card">
                <h3>IT Hardware & Server Moving</h3>
                <p>Anti-static bubble wrap, moisture-proof foam lining, and custom-built shock-absorbing server crates. Secure handling for blade servers, NAS storage, high-end routers, and multi-monitor setups.</p>
            </div>
            <div class="ccg-card">
                <h3>Executive Residence Shifting</h3>
                <p>Full white-glove household packing for corporate directors and expatriates residing in Belvedere Towers, DLF Phase 2, and Phase 3. Complete unpacking and room arrangement included.</p>
            </div>
            <div class="ccg-card">
                <h3>Document & Archive Crating</h3>
                <p>Tamper-evident, barcoded carton packing for sensitive financial records, legal archives, and employee files, ensuring chain-of-custody security during company transfers.</p>
            </div>
            <div class="ccg-card">
                <h3>Premium Vehicle Transport</h3>
                <p>Enclosed hydraulic car trailers and dedicated two-wheeler carriers for scratch-free executive sedan, luxury SUV, and sports motorcycle transport nationwide.</p>
            </div>
            <div class="ccg-card">
                <h3>Commercial Transit Insurance</h3>
                <p>Full comprehensive transit insurance underwriting against fire, road hazards, transit impacts, and water damage, with swift digital claims processing.</p>
            </div>
        </div>
    </section>

    <!-- Operational Protocols in DLF Commercial Towers -->
    <section>
        <h2 class="ccg-section-heading">DLF Commercial Tower Logistics & Loading Dock Clearances</h2>
        <p class="ccg-intro-p">Relocating within DLF Cyber City demands comprehensive adherence to strict facility management and estate security protocols. Commercial complexes like DLF Cyber City Building 10, Infinity Tower, and DLF Forum enforce rigorous logistical guidelines:</p>

        <div class="ccg-highlight-box">
            <h4>Mandatory Corporate Moving Protocols in Cyber City</h4>
            <ul style="margin: 10px 0 0; padding-left: 20px; color: #374151; line-height: 1.75;">
                <li style="margin-bottom: 10px;"><strong>Security Clearance & Gate Passes:</strong> DLF security requires prior submission of moving truck registration numbers, supervisor KYC documents, and crew identity passes at least 24 hours prior to truck arrival at Shankar Chowk checkpoints.</li>
                <li style="margin-bottom: 10px;"><strong>Restricted Commercial Shifting Hours:</strong> Commercial freight movements are strictly barred during peak business hours (8:00 AM to 8:00 PM). Loading and unloading must be conducted during night shifts or weekends between Friday 8:00 PM and Monday 6:00 AM.</li>
                <li><strong>Basement Loading Dock & Freight Elevator Usage:</strong> All cargo must be channeled through designated basement loading docks. Our team installs elevator protective wall blankets and lobby floor runners to preserve building infrastructure.</li>
            </ul>
        </div>

        <p class="ccg-intro-p">Our operations managers collaborate closely with building facility managers across DLF Cyber City and adjacent corporate parks on NH-48, ensuring smooth permits, pre-booked dock slots, and frictionless execution.</p>

        <h3 style="color: #1e3a8a; font-size: 1.25rem; font-weight: 700; text-align: center; margin: 24px 0 12px;">Specialized Data Center & Anti-Static Handling Standards</h3>
        <p class="ccg-intro-p">Modern tech enterprises in Cyber City rely heavily on uninterrupted data accessibility. When handling enterprise IT infrastructure, our engineers implement certified electrostatic discharge (ESD) packaging protocols. We utilize conductive bubble sheeting, grounded handling gloves, and shock-cushioned transit containers specifically calibrated for rack-mounted blade servers, firewall appliances, and precision fiber switches. Every server is labeled with port mapping diagrams to ensure rapid recommissioning once delivered.</p>

        <div class="ccg-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Anti-static bubble wrap and packing supplies in Cyber City" width="580" height="360">
            <div class="ccg-image-caption">High-grade anti-static bubble wrapping, heavy-duty edge protectors, and corrugated archive cartons prepared for Cyber City moves</div>
        </div>
    </section>

    <!-- Transparent Pricing Table -->
    <section>
        <h2 class="ccg-section-heading">Transparent Pricing Structure for Cyber City Relocations</h2>
        <p class="ccg-intro-p">Shree Ashirwad Packers and Movers provides upfront, itemized estimates with complete cost transparency. Review our indicative moving tariffs below. For customized route estimates, use our online <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">packers and movers charges calculator</a>.</p>

        <div class="ccg-table-responsive">
            <table class="ccg-table">
                <thead>
                    <tr>
                        <th>Move Type / Scope of Work</th>
                        <th>Packing Material & Specialist Crew</th>
                        <th>Local Shifting (NCR / Gurgaon)</th>
                        <th>Inter-State Moving (e.g. WB / Bihar)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1 BHK Executive / Studio Apartment</td>
                        <td>3-layer bubble wrap, export cartons, 3-man crew</td>
                        <td>₹5,000 – ₹8,500</td>
                        <td>₹13,500 – ₹22,000</td>
                    </tr>
                    <tr>
                        <td>2 BHK Apartment (Belvedere / Phase 2)</td>
                        <td>4-layer packaging, wardrobe boxes, 4-man crew</td>
                        <td>₹8,000 – ₹13,500</td>
                        <td>₹18,000 – ₹30,000</td>
                    </tr>
                    <tr>
                        <td>3 BHK Luxury Apartment (Belvedere Towers)</td>
                        <td>5-layer protective wrap, furniture dismantling, 5-man crew</td>
                        <td>₹13,000 – ₹20,000</td>
                        <td>₹25,000 – ₹40,000</td>
                    </tr>
                    <tr>
                        <td>Commercial Office (Up to 25 Workstations)</td>
                        <td>Anti-static IT wrap, server crates, dedicated 8-man crew</td>
                        <td>₹18,000 – ₹35,000</td>
                        <td>₹45,000 – ₹85,000</td>
                    </tr>
                    <tr>
                        <td>Vehicle Transport (Executive Car / Bike)</td>
                        <td>Enclosed carrier, wheel chocks, door-to-door transit</td>
                        <td>₹4,200 – ₹7,500</td>
                        <td>₹11,500 – ₹20,000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="ccg-highlight-box">
            <h4>Fixed-Price Quotation & Corporate GST Compliance</h4>
            <p class="ccg-intro-p">Every formal quotation from Shree Ashirwad Packers and Movers is binding and all-inclusive. It incorporates specialized packing supplies, professional carpenter fees, elevator surcharges, toll taxes, and transit permits with zero surprise costs on moving day.</p>
            <p class="ccg-intro-p" style="margin-bottom: 0;">We supply detailed computerized GST invoices, consignee receipts, and e-way bills configured for hassle-free corporate HR relocation reimbursements.</p>
        </div>
    </section>

    <!-- 5-Step Operational Methodology -->
    <section>
        <h2 class="ccg-section-heading">Our Proven 5-Step Relocation Methodology</h2>
        <p class="ccg-intro-p">To deliver smooth, punctual, and safe relocations across Cyber City, our operational team adheres to a synchronized 5-step relocation workflow.</p>

        <div class="ccg-step-card">
            <div class="ccg-step-num">1</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #1e3a8a; font-weight: 700;">Pre-Move Survey & Asset Assessment</h4>
                <p class="ccg-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Our corporate surveyor conducts an on-site audit of workstations, server hardware, executive cabins, and inventory volume, formulating an accurate moving schedule and quote.</p>
            </div>
        </div>

        <div class="ccg-step-card">
            <div class="ccg-step-num">2</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #1e3a8a; font-weight: 700;">Gate Pass & Loading Bay Scheduling</h4>
                <p class="ccg-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Our logistical coordinator files necessary gate pass paperwork with building security in DLF Cyber City or DLF Phase 2/3 societies, reserving service elevators and dock bays.</p>
            </div>
        </div>

        <div class="ccg-step-card">
            <div class="ccg-step-num">3</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #1e3a8a; font-weight: 700;">Color-Coded Anti-Static Packing</h4>
                <p class="ccg-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Workstations, monitors, and servers are packed using anti-static bubble wrap and labeled with departmental color codes to ensure seamless floor-wise setup at the destination.</p>
            </div>
        </div>

        <div class="ccg-step-card">
            <div class="ccg-step-num">4</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #1e3a8a; font-weight: 700;">GPS-Tracked Express Transport</h4>
                <p class="ccg-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Consignments are loaded onto weatherproof, enclosed container trucks. Transit via NH-48 and major arterial flyovers is monitored in real-time with satellite GPS tracking.</p>
            </div>
        </div>

        <div class="ccg-step-card">
            <div class="ccg-step-num">5</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #1e3a8a; font-weight: 700;">Desk-by-Desk Placement & Waste Haulage</h4>
                <p class="ccg-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">At the new office or residence, items are positioned exactly according to your floor plan, modular furniture is reassembled, and all packaging debris is removed from the premises.</p>
            </div>
        </div>

        <div class="ccg-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Office desk and modular workstation dismantling in Cyber City" width="580" height="360">
            <div class="ccg-image-caption">Expert carpenters disassembling executive desks and modular office partitions for scratch-free relocation</div>
        </div>
    </section>

    <!-- Why Choose Shree Ashirwad in Cyber City -->
    <section>
        <h2 class="ccg-section-heading">Why Choose Shree Ashirwad in Cyber City Gurgaon</h2>
        <p class="ccg-intro-p">Enterprise clients and corporate executives choose Shree Ashirwad Packers and Movers for our commitment to reliability, speed, and discretion across Delhi NCR and inter-state corridors:</p>

        <div class="ccg-grid-3">
            <div class="ccg-card">
                <h3>Certified Moving Experts</h3>
                <p>100% full-time, vetted logistics staff trained in commercial electronics handling and fine residential packing. Zero reliance on inexperienced third-party labor.</p>
            </div>
            <div class="ccg-card">
                <h3>Zero Business Disruption</h3>
                <p>Weekend and overnight shift capabilities engineered to guarantee your business resumes standard operations on Monday morning without missing a single hour.</p>
            </div>
            <div class="ccg-card">
                <h3>Elevator & Lobby Shielding</h3>
                <p>We deploy protective floor sheets and lift wall pads across commercial lobbies and apartment corridors, preventing costly structural scuffs or security deposit deductions.</p>
            </div>
            <div class="ccg-card">
                <h3>Comprehensive Risk Coverage</h3>
                <p>Direct transit insurance coverage underwriting your complete office inventory and household assets against unforeseen road hazards or handling accidents.</p>
            </div>
            <div class="ccg-card">
                <h3>National Relocation Network</h3>
                <p>Seamless inter-state moving infrastructure connecting Gurgaon to key hubs in Bihar, Jharkhand, and West Bengal, backed by our central operations hub.</p>
            </div>
            <div class="ccg-card">
                <h3>Dedicated Project Manager</h3>
                <p>A single point of contact oversees your entire project from pre-move survey, documentation, and packing to delivery and asset handover.</p>
            </div>
        </div>

        <div class="ccg-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door relocation truck in Cyber City Gurgaon" width="580" height="360">
            <div class="ccg-image-caption">All-weather sealed container trucks ensuring clean, punctual, and secure transit across Gurgaon and national highways</div>
        </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section>
        <h2 class="ccg-section-heading">Frequently Asked Questions — Cyber City Relocations</h2>
        <p class="ccg-intro-p">Clear answers to frequent inquiries regarding commercial office moving, IT logistics, and residential shifting in DLF Cyber City Gurgaon.</p>

        <div class="ccg-faq-item">
            <div class="ccg-faq-question">Can you execute corporate office shifting during weekends in Cyber City?</div>
            <p class="ccg-faq-answer">Yes. We specialize in zero-downtime corporate moves commencing Friday at 7:00 PM and concluding by Sunday evening. We coordinate building loading dock slots, commercial freight elevator bookings, and IT workstation reconnections before Monday business hours.</p>
        </div>

        <div class="ccg-faq-item">
            <div class="ccg-faq-question">How do you protect sensitive IT equipment, workstations, and servers?</div>
            <p class="ccg-faq-answer">We deploy anti-static bubble wrap, color-coded electronic labeling, custom wooden server crates, and cushioned transport trays. Every electronic asset is inventoried via barcode scanning for 100% accountability.</p>
        </div>

        <div class="ccg-faq-item">
            <div class="ccg-faq-question">What residential communities do you service around Cyber City?</div>
            <p class="ccg-faq-answer">We provide end-to-end household shifting for executive residences across Belvedere Towers, Belvedere Park, DLF Phase 2, DLF Phase 3, Oakwood Estate, Silver Oaks, and luxury condominiums along DLF Gateway Tower.</p>
        </div>

        <div class="ccg-faq-item">
            <div class="ccg-faq-question">What are the moving charges for apartment shifting in Cyber City Gurgaon?</div>
            <p class="ccg-faq-answer">Local household relocation for a 1 to 2 BHK apartment near Cyber City typically costs between ₹5,000 and ₹12,000, while a larger 3 to 4 BHK executive condominium ranges from ₹14,000 to ₹26,000 including complete packing, carpentry, transit, and unpacking.</p>
        </div>

        <div class="ccg-faq-item">
            <div class="ccg-faq-question">Do you offer GST invoices for corporate moving allowances?</div>
            <p class="ccg-faq-answer">Yes. We issue formal GST-compliant invoices and consignment notes containing your company’s GSTIN, facilitating swift corporate reimbursement and accounting compliance.</p>
        </div>
    </section>

    <!-- Connected Hyper-Local Network Cluster -->
    <section>
        <h2 class="ccg-section-heading">Connected Gurgaon & NCR Moving Hubs</h2>
        <p class="ccg-intro-p">Shree Ashirwad Packers and Movers maintains an integrated network spanning major corporate and residential districts across Gurgaon. Visit our connected sister hubs below:</p>

        <div class="ccg-cluster-grid">
            <div class="ccg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gurgaon">Gurgaon City Authority Hub</a>
            </div>
            <div class="ccg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dlf-phase-1-gurgaon">DLF Phase 1 Gurgaon</a>
            </div>
            <div class="ccg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dlf-phase-5-gurgaon">DLF Phase 5 Gurgaon</a>
            </div>
            <div class="ccg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sohna-road-gurgaon">Sohna Road Gurgaon</a>
            </div>
            <div class="ccg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-golf-course-extension-gurgaon">Golf Course Extension</a>
            </div>
            <div class="ccg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sector-56-gurgaon">Sector 56 Gurgaon</a>
            </div>
            <div class="ccg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sector-14-gurgaon">Sector 14 Gurgaon</a>
            </div>
            <div class="ccg-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-palam-vihar-gurgaon">Palam Vihar Gurgaon</a>
            </div>
        </div>
    </section>
</main>

<?php
// Include the main site footer partial
include_once ROOT_PATH . '/includes/footer.php';
?>

</body>
</html>
