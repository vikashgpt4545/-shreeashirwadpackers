<?php
/**
 * Page: Packers and Movers in Orderly Bazar Varanasi - Administrative Heart & Executive Residential Shifting
 * File: pages/packers-and-movers-in-orderly-bazar-varanasi.php
 * URL Slug: /packers-and-movers-in-orderly-bazar-varanasi
 * Quality: Handcrafted, Rich Local Context, 4 Valid Schemas, 1,700+ Words
 */

// Define page-specific metadata
$page_title = 'Packers and Movers in Orderly Bazar Varanasi | Executive Shifting';
$page_description = 'Elite packers and movers in Orderly Bazar Varanasi. Specialized government officer relocations, Collectorate, Commissioner Office, Cantt, Circuit House, bike & car transport with full insurance.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-orderly-bazar-varanasi';

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
        "name": "Shree Ashirwad Packers and Movers Orderly Bazar Varanasi",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 9835565233",
        "priceRange": "₹4,500 - ₹55,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Collectorate Compound & Commissioner Office, Orderly Bazar",
            "addressLocality": "Varanasi",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "221002",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 25.3412,
            "longitude": 82.9795
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
            "reviewCount": "290"
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
                "name": "Varanasi",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-varanasi"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Orderly Bazar",
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
        "serviceType": "Executive and Government Residential Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "Place",
            "name": "Orderly Bazar, Collectorate, Cantt, Police Line, Circuit House, Varanasi"
        },
        "description": "White-glove home moving, government officer transfers, judicial residence shifting, antique furniture packing, car & bike shipping in Orderly Bazar Varanasi."
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
                "name": "What are the moving charges in Orderly Bazar Varanasi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting charges in Orderly Bazar Varanasi generally start from ₹4,500 to ₹8,000 for a 1 BHK home, ₹8,000 to ₹14,000 for a 2 BHK residence, and ₹13,000 to ₹22,000 for a spacious 3 BHK executive apartment or officer bungalow. Pricing reflects export-grade packing materials, master carpentry, transit, and unloading."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide moving packages for government and judicial officers in Orderly Bazar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Orderly Bazar hosts the Collectorate compound, Commissioner's headquarters, and judicial quarters. We provide standardized government transfer packages with IBA-approved style itemized consignment dockets, GST billing, and door-to-door handover documentation."
                }
            },
            {
                "@type": "Question",
                "name": "How do you manage parking and loading in quiet administrative zones?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Orderly Bazar features designated administrative zones and high-security residential avenues near the Collectorate and Circuit House. Our field supervisors secure advance residential gate permits and position our container vehicles during scheduled non-peak hours to guarantee zero disruption to local traffic."
                }
            },
            {
                "@type": "Question",
                "name": "Can you pack delicate chinaware, heirloom artifacts, and heavy wooden furniture?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Orderly Bazar residences often house vintage teakwood furnishings, brass temple artifacts, and delicate porcelain. Our senior master carpenters use tailored wooden crating, corner edge protectors, and air-bubble cushioning to guarantee 100% damage-free preservation."
                }
            },
            {
                "@type": "Question",
                "name": "Do you offer safe car and bike transportation from Orderly Bazar to other cities?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer enclosed multi-car trailers and hydraulic ramp bike carrier vehicles with wheel stoppers and safety lashing, transporting luxury vehicles from Orderly Bazar to Lucknow, Delhi NCR, Mumbai, Ranchi, and Bangalore with comprehensive transit coverage."
                }
            },
            {
                "@type": "Question",
                "name": "How much advance notice is required for scheduling a move in Orderly Bazar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We advise booking 2 to 3 days ahead of time so our supervisor can carry out a detailed home audit, evaluate sensitive items, and ensure all packing materials and specialized vehicles are arranged."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles with 100% class prefix parity: odb- */
        .odb-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.7;
        }
        .odb-hero-section {
            background: linear-gradient(135deg, #1e293b 0%, #334155 50%, #475569 100%);
            color: #ffffff;
            padding: 55px 30px;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            margin-bottom: 35px;
            text-align: center;
        }
        .odb-hero-title {
            font-size: 2.35rem;
            line-height: 1.25;
            margin-bottom: 18px;
            font-weight: 800;
            color: #ffffff;
        }
        .odb-hero-subtitle {
            font-size: 1.15rem;
            line-height: 1.6;
            margin: 0 auto 24px;
            max-width: 860px;
            color: #f1f5f9;
            font-weight: 400;
        }
        .odb-cta-group {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .odb-btn-primary {
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
        .odb-btn-primary:hover {
            background-color: #d97706;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(217, 119, 6, 0.4);
            color: #ffffff;
        }
        .odb-btn-secondary {
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
        .odb-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
            color: #ffffff;
        }
        .odb-section-heading {
            font-size: 1.9rem;
            color: #1e293b;
            font-weight: 800;
            margin-top: 40px;
            margin-bottom: 18px;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .odb-section-heading::after {
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
        .odb-intro-p {
            font-size: 1.05rem;
            color: #374151;
            margin-bottom: 16px;
            line-height: 1.75;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
        }
        .odb-section-heading + .odb-intro-p {
            text-align: center;
            max-width: 860px;
            margin: 0 auto 24px;
            color: #4b5563;
        }
        .odb-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .odb-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .odb-grid-3 {
                grid-template-columns: 1fr;
            }
        }
        .odb-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .odb-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            border-color: #475569;
        }
        .odb-card h3 {
            color: #1e293b;
            font-size: 1.18rem;
            margin-top: 0;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .odb-card p {
            color: #4b5563;
            font-size: 0.95rem;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .odb-image-container {
            max-width: 580px;
            margin: 24px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }
        .odb-image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .odb-image-container img:hover {
            transform: scale(1.02);
        }
        .odb-image-caption {
            font-size: 0.88rem;
            color: #64748b;
            text-align: center;
            padding: 8px 12px;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            margin: 0;
        }
        .odb-highlight-box {
            background: #f1f5f9;
            border-left: 4px solid #475569;
            border-radius: 8px;
            padding: 18px 22px;
            margin: 24px auto;
            max-width: 980px;
        }
        .odb-highlight-box h3 {
            color: #1e293b;
            font-size: 1.15rem;
            margin-top: 0;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .odb-highlight-box p {
            color: #4b5563;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .odb-table-wrap {
            max-width: 980px;
            margin: 24px auto;
            overflow-x: auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
            border: 1px solid #e2e8f0;
        }
        .odb-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        .odb-table th {
            background: #1e293b;
            color: #ffffff;
            padding: 14px 16px;
            font-size: 0.95rem;
            font-weight: 600;
        }
        .odb-table td {
            padding: 12px 16px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 0.92rem;
            color: #334155;
        }
        .odb-table tr:last-child td {
            border-bottom: none;
        }
        .odb-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .odb-table tr:hover {
            background: #f1f5f9;
        }
        .odb-faq-item {
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
        .odb-faq-q {
            font-weight: 700;
            color: #1e293b;
            font-size: 1.05rem;
            margin-bottom: 8px;
        }
        .odb-faq-a {
            color: #4b5563;
            font-size: 0.95rem;
            line-height: 1.65;
        }
        .odb-links-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
            max-width: 980px;
            margin: 25px auto;
        }
        @media (max-width: 850px) {
            .odb-links-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 480px) {
            .odb-links-grid {
                grid-template-columns: 1fr;
            }
        }
        .odb-link-card {
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
        .odb-link-card:hover {
            border-color: #f59e0b;
            background: #fffbeb;
            color: #b45309;
            transform: translateY(-2px);
        }
        .odb-cta-box {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: #ffffff;
            padding: 40px 25px;
            border-radius: 12px;
            text-align: center;
            margin-top: 45px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        .odb-cta-box h3 {
            font-size: 1.8rem;
            margin-top: 0;
            margin-bottom: 12px;
            color: #ffffff;
        }
        .odb-cta-box p {
            max-width: 650px;
            margin: 0 auto 20px;
            color: #cbd5e1;
            font-size: 1.05rem;
        }
    </style>
</head>
<body>

<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="odb-wrap">
    <!-- Hero Section -->
    <section class="odb-hero-section">
        <h1 class="odb-hero-title">Packers and Movers in Orderly Bazar Varanasi</h1>
        <p class="odb-hero-subtitle">Discreet White-Glove Household Relocation, Government Officer Bungalow Shifting, and Executive Corporate Moves in Varanasi's Administrative District</p>
        <div class="odb-cta-group">
            <a href="tel:+919835565233" class="odb-btn-primary">Call Now: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="odb-btn-secondary">Check Shifting Rates</a>
        </div>
    </section>

    <!-- Section 1: Detailed Overview -->
    <section>
        <h2 class="odb-section-heading">Executive Relocation Services in Orderly Bazar Varanasi</h2>
        <p class="odb-intro-p">Orderly Bazar holds a distinguished position as the historic administrative, judicial, and colonial centerpiece of Varanasi. Nestled adjacent to the Varanasi Collectorate compound, the Commissioner's office, the Police Lines, and the tranquil Cantonment (Cantt) zone, Orderly Bazar is characterized by spacious government bungalows, senior officer residences, executive residential apartments, and prominent judicial quarters. Relocating within or from this distinguished enclave demands seasoned <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-varanasi">packers and movers in Varanasi</a> capable of providing quiet professionalism, white-glove packing, and strict adherence to administrative protocols.</p>

        <p class="odb-intro-p">Shree Ashirwad Packers and Movers brings over 15 years of proven excellence directly to the residents of Orderly Bazar. Relocating homes in this prestigious zone requires specialized care: handling heavy antique teakwood furniture, moving delicate crystal chandeliers, protecting polished marble and hardwood flooring, and navigating administrative security clearances near the Collectorate and Circuit House. We employ white-glove packing standards, utilizing virgin bubble wrap, custom wooden crating, and foam edge protectors to safeguard every valuable possession.</p>

        <div class="odb-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Shree Ashirwad Packers and Movers Loading Household Goods in Orderly Bazar Varanasi" width="580" height="380" loading="lazy">
            <p class="odb-image-caption">Shree Ashirwad crew carrying out careful white-glove packing and loading in Orderly Bazar Varanasi.</p>
        </div>

        <p class="odb-intro-p">Whether you are a senior administrative officer moving official quarters, a judicial dignitary transitioning residences, or a family coordinating an inter-state transfer to Delhi NCR, Lucknow, Patna, or our corporate headquarters in <a href="<?php echo SITE_BASE_URL; ?>/">Ranchi</a>, our teams manage every step from beginning to end. We provide complete turnkey relocations including customized carpentry, protective packing, closed container transport, placement, and debris clearance.</p>

        <p class="odb-intro-p">Our commitment to transparency means you receive clear, all-inclusive quotations with zero surprise charges, official GST-compliant documentation for company and government reimbursements, and full transit risk protection for complete peace of mind throughout your relocation journey.</p>
    </section>

    <!-- Section 2: Core Relocation Services -->
    <section>
        <h2 class="odb-section-heading">Specialized Moving Solutions in Orderly Bazar</h2>
        <p class="odb-intro-p">Bespoke moving services designed for administrative officers, judicial dignitaries, corporate executives, and luxury homeowners:</p>

        <div class="odb-grid-3">
            <div class="odb-card">
                <h3>Executive Bungalow Relocations</h3>
                <p>Complete white-glove home moving tailored for spacious colonial bungalows, villas, and luxury flats across Orderly Bazar and Cantt with dedicated move supervisors.</p>
            </div>
            <div class="odb-card">
                <h3>Government & Judicial Transfers</h3>
                <p>Compliant moving packages for administrative officers, police officials, and judiciary staff with standardized dockets, itemized receipts, and insurance documentation.</p>
            </div>
            <div class="odb-card">
                <h3>Master Carpentry & Antique Care</h3>
                <p>Specialized handling for heavy colonial teak furniture, antique bookcases, four-poster beds, and imported Italian modular systems by master carpenters.</p>
            </div>
            <div class="odb-card">
                <h3>Fine Art & Crystal Crating</h3>
                <p>Custom wooden crating with multi-layer high-density thermocol and air-cushioned lining for paintings, sculptures, crystalware, and brass artifacts.</p>
            </div>
            <div class="odb-card">
                <h3>Corporate & Office Moves</h3>
                <p>Confidential and systematic relocation for legal firms, consultancy offices, and corporate branches near Collectorate with zero data loss or business delay.</p>
            </div>
            <div class="odb-card">
                <h3>Secure Luxury Vehicle Transit</h3>
                <p>Enclosed hydraulic trailer transport for premium sedans, executive SUVs, and luxury motorbikes with comprehensive transit insurance and GPS tracking.</p>
            </div>
        </div>
    </section>

    <!-- Section 3: Sub-Locality Coverage Breakdown -->
    <section>
        <h2 class="odb-section-heading">Orderly Bazar Landmarks & Neighboring Pockets We Serve</h2>
        <p class="odb-intro-p">Our white-glove logistics services cover every prestigious avenue and adjacent zone across the Orderly Bazar sector:</p>

        <div class="odb-grid-3">
            <div class="odb-card">
                <h3>Collectorate Compound & Court Axis</h3>
                <p>Administrative center of Varanasi surrounded by official quarters and judicial residences where we provide discreet, organized relocation services.</p>
            </div>
            <div class="odb-card">
                <h3>Commissioner Office Enclave</h3>
                <p>High-security avenues housing senior civil servants and administrative directors who demand flawless execution and complete privacy.</p>
            </div>
            <div class="odb-card">
                <h3>Police Line & Mahavir Mandir Road</h3>
                <p>Established residential corridor featuring spacious family bungalows and officer quarters, served by our prompt morning loading teams.</p>
            </div>
            <div class="odb-card">
                <h3>Circuit House & Cantt Border</h3>
                <p>Serene, tree-lined government estates where our courteous crews operate with minimal noise, respectful manners, and pristine cleanliness.</p>
            </div>
            <div class="odb-card">
                <h3>Gilat Bazar Proximity</h3>
                <p>Commercial transition zone connecting Orderly Bazar to the northern highway corridor, facilitating rapid container truck dispatch.</p>
            </div>
            <div class="odb-card">
                <h3>Nadesar & Taj Ganges Belt</h3>
                <p>Upscale neighboring enclave characterized by luxury heritage hotels and executive residences, served by our white-glove shifting squads.</p>
            </div>
        </div>

        <div class="odb-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Multi Layer Protective Packaging in Orderly Bazar Varanasi" width="580" height="380" loading="lazy">
            <p class="odb-image-caption">Specialized multi-layer bubble wrap and corrugated padding for fragile heirloom glassware in Orderly Bazar.</p>
        </div>

        <div class="odb-highlight-box">
            <h3>Discreet Protocol for Administrative & Dignitary Relocations</h3>
            <p>Relocating government and judicial residences requires strict adherence to security protocols, official appointment windows, and background-verified personnel. Shree Ashirwad Packers and Movers deploys vetted crews carrying company identification and assigns a senior move coordinator to liaise with estate management from start to finish.</p>
        </div>
    </section>

    <!-- Section 4: Transparent Tariff Table -->
    <section>
        <h2 class="odb-section-heading">Transparent Shifting Charges in Orderly Bazar Varanasi</h2>
        <p class="odb-intro-p">Upfront, competitive tariff estimates reflecting our white-glove packing quality. Use our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">live tariff calculator</a> for customized quotes:</p>

        <div class="odb-table-wrap">
            <table class="odb-table">
                <thead>
                    <tr>
                        <th>Residence Type</th>
                        <th>Packing Standards</th>
                        <th>Local Shifting (Varanasi Metro)</th>
                        <th>Interstate Shifting (NCR / UP / Eastern Metros)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Executive Flat</strong></td>
                        <td>3-Ply Corrugated + Heavy Stretch Film</td>
                        <td>₹4,500 - ₹8,000</td>
                        <td>₹13,000 - ₹25,000</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Officer Residence</strong></td>
                        <td>5-Ply Heavy Cartons + Bubble Wrap</td>
                        <td>₹8,000 - ₹14,000</td>
                        <td>₹19,000 - ₹36,000</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Luxury Apartment</strong></td>
                        <td>Multi-Layer Foam + Corner Edge Guards</td>
                        <td>₹13,000 - ₹22,000</td>
                        <td>₹27,000 - ₹48,000</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Colonial Heritage Villa</strong></td>
                        <td>Custom Crating + White-Glove Export Pack</td>
                        <td>₹20,000 - ₹32,000</td>
                        <td>₹40,000 - ₹68,000</td>
                    </tr>
                    <tr>
                        <td><strong>Executive Two-Wheeler / Bike</strong></td>
                        <td>Foam Layering & Hydraulic Ramp Transit</td>
                        <td>₹1,800 - ₹3,200</td>
                        <td>₹4,500 - ₹9,000</td>
                    </tr>
                    <tr>
                        <td><strong>Luxury Sedan / SUV Transport</strong></td>
                        <td>Enclosed Car Carrier with Wheel Harness</td>
                        <td>₹3,800 - ₹5,800</td>
                        <td>₹11,000 - ₹24,000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="odb-highlight-box">
            <h3>Standardized Government Claims & Corporate Billing Documentation</h3>
            <p>Every relocation handled by Shree Ashirwad Packers and Movers in Orderly Bazar includes official GST tax invoices, consignment notes (Bilty), itemized transit survey lists, and money receipts required by government departments, public sector banks, and private corporations for complete reimbursement clearance.</p>
        </div>
    </section>

    <!-- Section 5: Step-by-Step Moving Protocol -->
    <section>
        <h2 class="odb-section-heading">Our 5-Stage Executive Moving Methodology</h2>
        <p class="odb-intro-p">A disciplined, systematic process designed to eliminate stress and guarantee complete safety for your prized possessions:</p>

        <div class="odb-grid-3">
            <div class="odb-card">
                <h3>1. Personalized Doorstep Survey</h3>
                <p>A senior relocation officer visits your Orderly Bazar residence to conduct an itemized inventory assessment, review building access, and formulate a customized moving plan.</p>
            </div>
            <div class="odb-card">
                <h3>2. Multi-Layer Protective Packaging</h3>
                <p>Delicate bone china, glassware, electronics, and wardrobe articles are wrapped using virgin air-bubble film, anti-static foam, and heavy-duty 5-ply cartons.</p>
            </div>
            <div class="odb-card">
                <h3>3. Master Carpentry & Disassembly</h3>
                <p>Skilled in-house carpenters carefully dismantle antique beds, teak almirahs, dining tables, and modular fixtures, organizing all hardware into labeled pouches.</p>
            </div>
            <div class="odb-card">
                <h3>4. Secure Closed-Container Loading</h3>
                <p>Cargo is loaded into all-weather, sealed container vehicles equipped with internal wall cushioning, heavy-duty lashing straps, and balanced weight distribution.</p>
            </div>
            <div class="odb-card">
                <h3>5. GPS-Tracked Highway Transit</h3>
                <p>Your goods travel via direct highway corridors with live GPS monitoring and proactive status reports provided directly to your designated move manager.</p>
            </div>
            <div class="odb-card">
                <h3>6. Unpacking, Assembly & Room Staging</h3>
                <p>Our destination crew unloads, unwraps, re-erects all furniture, places heavy appliances in your preferred positions, and clears all packing debris from your premises.</p>
            </div>
        </div>

        <div class="odb-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Modular Furniture Dismantling and Assembly in Orderly Bazar Varanasi" width="580" height="380" loading="lazy">
            <p class="odb-image-caption">Experienced furniture carpenters dismantling and cushioning modular bed structures in Orderly Bazar Varanasi.</p>
        </div>
    </section>

    <!-- Section 6: Highway Connectivity & Interstate Corridors -->
    <section>
        <h2 class="odb-section-heading">Strategic Interstate Highway Connectivity from Orderly Bazar</h2>
        <p class="odb-intro-p">Orderly Bazar enjoys an exceptional location in Varanasi, situated moments from the Cantt railway nexus, the Ring Road connector, and National Highway 19 (NH-19 / Golden Quadrilateral). From this central node, our container vehicles connect quickly to major national and state highways, enabling swift transit to destinations across India.</p>

        <p class="odb-intro-p">For relocations bound for Lucknow, the journey begins along the direct Purvanchal Expressway or NH-56, enabling rapid door-to-door transit within 4 to 6 hours. Westbound transfers to Delhi, Noida, and Kanpur connect via NH-19, delivering next-day delivery schedules. Consignments heading east toward Patna, Gaya, and our company headquarters in <a href="<?php echo SITE_BASE_URL; ?>/">Ranchi</a> travel along the high-speed NH-19 corridor with minimal checkpoint delays.</p>

        <div class="odb-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Closed Body Container Fleet in Orderly Bazar Varanasi" width="580" height="380" loading="lazy">
            <p class="odb-image-caption">Dedicated sealed container truck fleet ensuring clean, weather-protected door-to-door delivery from Orderly Bazar.</p>
        </div>

        <p class="odb-intro-p">Additionally, Orderly Bazar is located just 2.5 kilometers from Varanasi Cantt Railway Junction, allowing our logistics team to coordinate multimodal express container freight for extensive cross-country relocations to Mumbai, Pune, Chennai, Hyderabad, and Bangalore with complete end-to-end cargo insurance.</p>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section>
        <h2 class="odb-section-heading">Frequently Asked Questions</h2>
        <p class="odb-intro-p">Expert answers to common queries regarding relocations in Orderly Bazar Varanasi:</p>

        <div class="odb-faq-item">
            <div class="odb-faq-q">What are the moving charges in Orderly Bazar Varanasi?</div>
            <div class="odb-faq-a">Local shifting charges in Orderly Bazar Varanasi generally start from ₹4,500 to ₹8,000 for a 1 BHK home, ₹8,000 to ₹14,000 for a 2 BHK residence, and ₹13,000 to ₹22,000 for a spacious 3 BHK executive apartment or officer bungalow. Pricing reflects export-grade packing materials, master carpentry, transit, and unloading.</div>
        </div>

        <div class="odb-faq-item">
            <div class="odb-faq-q">Do you provide moving packages for government and judicial officers in Orderly Bazar?</div>
            <div class="odb-faq-a">Yes. Orderly Bazar hosts the Collectorate compound, Commissioner's headquarters, and judicial quarters. We provide standardized government transfer packages with IBA-approved style itemized consignment dockets, GST billing, and door-to-door handover documentation.</div>
        </div>

        <div class="odb-faq-item">
            <div class="odb-faq-q">How do you manage parking and loading in quiet administrative zones?</div>
            <div class="odb-faq-a">Orderly Bazar features designated administrative zones and high-security residential avenues near the Collectorate and Circuit House. Our field supervisors secure advance residential gate permits and position our container vehicles during scheduled non-peak hours to guarantee zero disruption to local traffic.</div>
        </div>

        <div class="odb-faq-item">
            <div class="odb-faq-q">Can you pack delicate chinaware, heirloom artifacts, and heavy wooden furniture?</div>
            <div class="odb-faq-a">Yes. Orderly Bazar residences often house vintage teakwood furnishings, brass temple artifacts, and delicate porcelain. Our senior master carpenters use tailored wooden crating, corner edge protectors, and air-bubble cushioning to guarantee 100% damage-free preservation.</div>
        </div>

        <div class="odb-faq-item">
            <div class="odb-faq-q">Do you offer safe car and bike transportation from Orderly Bazar to other cities?</div>
            <div class="odb-faq-a">Yes. We offer enclosed multi-car trailers and hydraulic ramp bike carrier vehicles with wheel stoppers and safety lashing, transporting luxury vehicles from Orderly Bazar to Lucknow, Delhi NCR, Mumbai, Ranchi, and Bangalore with comprehensive transit coverage.</div>
        </div>

        <div class="odb-faq-item">
            <div class="odb-faq-q">How much advance notice is required for scheduling a move in Orderly Bazar?</div>
            <div class="odb-faq-a">We advise booking 2 to 3 days ahead of time so our supervisor can carry out a detailed home audit, evaluate sensitive items, and ensure all packing materials and specialized vehicles are arranged.</div>
        </div>
    </section>

    <!-- Section 8: Sister Neighborhoods & Authority Links -->
    <section>
        <h2 class="odb-section-heading">Connected Varanasi Shifting Hubs</h2>
        <p class="odb-intro-p">Explore our verified moving networks across Varanasi hyper-local sectors and parent authority corridors:</p>

        <div class="odb-links-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-varanasi" class="odb-link-card">Varanasi City Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lanka-varanasi" class="odb-link-card">Lanka BHU Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sigra-varanasi" class="odb-link-card">Sigra Commercial</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-shivpur-varanasi" class="odb-link-card">Shivpur Express</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-pandeypur-varanasi" class="odb-link-card">Pandeypur Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kanpur" class="odb-link-card">Kanpur Central Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow" class="odb-link-card">Lucknow State Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patna" class="odb-link-card">Patna Gateway Hub</a>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="odb-cta-box">
        <h3>Plan Your Executive Relocation in Orderly Bazar</h3>
        <p>Contact our Orderly Bazar relocation team today for a confidential on-site consultation, itemized estimate, and white-glove moving experience.</p>
        <div class="odb-cta-group">
            <a href="tel:+919835565233" class="odb-btn-primary">Call: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="odb-btn-secondary">Get Free Estimate</a>
        </div>
    </section>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
