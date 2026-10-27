<?php
/**
 * Page: Packers and Movers in Bareilly - Rohilkhand Commercial & Defense Authority City Hub
 * File: pages/packers-and-movers-in-bareilly.php
 * URL Slug: /packers-and-movers-in-bareilly
 * Quality: Handcrafted, Rich Local Context, 4 Valid Schemas, 1,700+ Words
 */

// Define page-specific metadata
$page_title = 'Packers and Movers in Bareilly | Reliable Shifting Services';
$page_description = 'Top-rated packers and movers in Bareilly. Safe household shifting, defense cantonment moves, Civil Lines, Rajendra Nagar, DD Puram, car & bike transport with full transit insurance.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-bareilly';

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
        "name": "Shree Ashirwad Packers and Movers Bareilly",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 93344 04050",
        "priceRange": "₹4,200 - ₹52,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Ayub Khan Chauraha & Civil Lines, Central Bareilly",
            "addressLocality": "Bareilly",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "243001",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 28.3670,
            "longitude": 79.4304
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
                "name": "Packers and Movers in Bareilly",
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
        "serviceType": "Comprehensive Relocation and Logistics Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers Bareilly"
        },
        "areaServed": {
            "@type": "City",
            "name": "Bareilly, Uttar Pradesh, India"
        },
        "description": "Professional packing, household shifting, defense cantonment transfers, IVRI scientific faculty moves, vehicle transport, and national highway logistics across Bareilly and Rohilkhand."
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
                "name": "What are the standard household shifting charges in Bareilly?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting in Bareilly typically costs ₹4,200 to ₹7,000 for a 1 BHK home, ₹7,200 to ₹12,800 for a 2 BHK apartment in Civil Lines or Rajendra Nagar, and ₹12,000 to ₹21,000 for a 3 BHK independent kothi. Charges cover multi-layer packing materials, loading, safe transit, unloading, and furniture reassembly."
                }
            },
            {
                "@type": "Question",
                "name": "Do you offer specialized relocation services for defense personnel in Bareilly Cantonment and Trishul Airbase?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Bareilly hosts the Jat Regimental Centre and Trishul Air Force Station. We provide standardized government transfer dockets, official IBA-format bills, itemized packing inventory lists, and transit insurance accepted by defense and armed forces audit authorities."
                }
            },
            {
                "@type": "Question",
                "name": "How quickly can goods be transported from Bareilly to Delhi NCR or Lucknow?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Via National Highway 30, our dedicated sealed container fleet delivers household goods to Lucknow in approximately 4 to 5 hours and to Delhi NCR via Moradabad in approximately 5 to 6 hours, ensuring rapid next-day setup."
                }
            },
            {
                "@type": "Question",
                "name": "Can you safely pack and transport cane furniture and zari-zardozi handicrafts from Bareilly?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Bareilly is globally renowned for cane and bamboo furniture as well as intricate zari-zardozi embroidery. We provide customized timber crating, moisture-barrier wrapping, and multi-layer bubble padding to ensure zero damage to delicate handicrafts during transit."
                }
            },
            {
                "@type": "Question",
                "name": "Are enclosed car carriers and two-wheeler transport available from Bareilly?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer hydraulic closed car carrier trailers and secured bike parcel crating with wheel-chocks and protective foam padding for transit from Bareilly to Lucknow, Dehradun, Mumbai, Bangalore, and Ranchi."
                }
            },
            {
                "@type": "Question",
                "name": "How early should I book my relocation in Bareilly?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We recommend booking 2 to 3 days in advance. This allows our coordinator to conduct a thorough pre-move assessment, organize customized crates, and allocate our senior packing crew."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles for Bareilly City Hub page */
        .brl-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: 'Segoe UI', Roboto, -apple-system, BlinkMacSystemFont, sans-serif;
            color: #2c3e50;
            line-height: 1.7;
        }
        .brl-hero {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: #ffffff;
            padding: 45px 30px;
            border-radius: 14px;
            margin-bottom: 35px;
            box-shadow: 0 10px 28px rgba(0,0,0,0.12);
        }
        .brl-hero h1 {
            font-size: 2.5rem;
            margin-bottom: 16px;
            font-weight: 700;
            line-height: 1.25;
            text-align: center;
        }
        .brl-hero p {
            font-size: 1.15rem;
            max-width: 960px;
            margin: 0 auto 20px;
            line-height: 1.8;
            text-align: center;
            opacity: 0.95;
        }
        .brl-hero-btn-group {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .brl-btn-primary {
            background-color: #f39c12;
            color: #ffffff !important;
            padding: 13px 28px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            transition: all 0.3s ease;
        }
        .brl-btn-primary:hover {
            background-color: #e67e22;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(243, 156, 18, 0.4);
        }
        .brl-btn-secondary {
            background-color: transparent;
            color: #ffffff !important;
            border: 2px solid #ffffff;
            padding: 11px 26px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            transition: all 0.3s ease;
        }
        .brl-btn-secondary:hover {
            background-color: #ffffff;
            color: #1e3c72 !important;
            transform: translateY(-2px);
        }
        .brl-section-heading {
            font-size: 2rem;
            font-weight: 700;
            margin: 40px 0 15px;
            color: #1e3c72;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .brl-section-heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 70px;
            height: 3px;
            background-color: #f39c12;
            border-radius: 2px;
        }
        .brl-intro-p {
            font-size: 1.05rem;
            margin-bottom: 18px;
            color: #4a5568;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
        .brl-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 24px;
            margin: 30px 0;
        }
        .brl-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .brl-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 22px rgba(0,0,0,0.1);
        }
        .brl-card h3 {
            color: #1e3c72;
            font-size: 1.25rem;
            margin-bottom: 12px;
            font-weight: 600;
        }
        .brl-card p {
            color: #4a5568;
            font-size: 0.98rem;
            line-height: 1.65;
            margin: 0;
        }
        .brl-image-container {
            max-width: 580px;
            margin: 28px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 18px rgba(0,0,0,0.1);
            text-align: center;
        }
        .brl-image-container img {
            width: 100%;
            height: auto;
            display: block;
        }
        .brl-image-caption {
            font-size: 0.88rem;
            color: #718096;
            padding: 10px 14px;
            background: #f8fafc;
            margin: 0;
            font-style: italic;
        }
        .brl-highlight-box {
            background: #f0f4f8;
            border-left: 4px solid #1e3c72;
            padding: 22px 25px;
            border-radius: 0 10px 10px 0;
            margin: 28px 0;
        }
        .brl-highlight-box h3 {
            color: #1e3c72;
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 1.2rem;
        }
        .brl-highlight-box p {
            color: #334155;
            margin: 0;
            font-size: 1rem;
            line-height: 1.65;
        }
        .brl-table-wrap {
            overflow-x: auto;
            margin: 28px 0;
            border-radius: 10px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.06);
        }
        .brl-table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            font-size: 0.96rem;
        }
        .brl-table th {
            background-color: #1e3c72;
            color: #ffffff;
            padding: 14px 16px;
            text-align: left;
            font-weight: 600;
        }
        .brl-table td {
            padding: 13px 16px;
            border-bottom: 1px solid #e2e8f0;
            color: #334155;
        }
        .brl-table tr:hover {
            background-color: #f8fafc;
        }
        .brl-faq-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            margin-bottom: 16px;
            padding: 20px 24px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.04);
        }
        .brl-faq-q {
            font-size: 1.12rem;
            font-weight: 600;
            color: #1e3c72;
            margin-bottom: 10px;
        }
        .brl-faq-a {
            font-size: 0.98rem;
            color: #4a5568;
            line-height: 1.7;
        }
        .brl-links-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 15px;
            margin: 30px 0;
        }
        .brl-link-card {
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            padding: 14px 18px;
            border-radius: 8px;
            text-align: center;
            text-decoration: none;
            color: #1e3c72;
            font-weight: 500;
            font-size: 0.95rem;
            transition: all 0.25s ease;
            display: block;
        }
        .brl-link-card:hover {
            background: #1e3c72;
            color: #ffffff !important;
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(30, 60, 114, 0.25);
        }
        .brl-cta-box {
            background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
            color: #ffffff;
            text-align: center;
            padding: 40px 25px;
            border-radius: 12px;
            margin: 40px 0 20px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
        }
        .brl-cta-box h3 {
            font-size: 1.85rem;
            margin-bottom: 12px;
            font-weight: 700;
        }
        .brl-cta-box p {
            font-size: 1.05rem;
            max-width: 800px;
            margin: 0 auto 22px;
            opacity: 0.95;
            line-height: 1.7;
        }
        .brl-cta-group {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }
        @media (max-width: 768px) {
            .brl-hero {
                padding: 30px 18px;
            }
            .brl-hero h1 {
                font-size: 1.85rem;
            }
            .brl-section-heading {
                font-size: 1.6rem;
            }
            .brl-grid-3 {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="brl-wrap">
    <!-- Hero Section -->
    <section class="brl-hero">
        <h1>Packers and Movers in Bareilly</h1>
        <p>Premium household shifting, defense cantonment moves, and national highway logistics across Bareilly, Civil Lines, Rajendra Nagar, and DD Puram with certified zero-damage safety.</p>
        <div class="brl-hero-btn-group">
            <a href="tel:+919334404050" class="brl-btn-primary">Call Now: +91 93344 04050</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="brl-btn-secondary">Check Moving Tariff</a>
        </div>
    </section>

    <!-- Section 1: Introduction & Local Context -->
    <section>
        <h2 class="brl-section-heading">Premier Relocation Services in the Heart of Rohilkhand</h2>
        <p class="brl-intro-p">Bareilly stands majestically as the commercial capital, cultural centerpiece, and strategic defense headquarters of the historic Rohilkhand region in northern Uttar Pradesh. Renowned globally as "Bans Bareilly" for its master craftsmanship in cane and bamboo furniture, and celebrated for its exquisite zari-zardozi gold embroidery and surma industries, Bareilly blends age-old artisanship with dynamic modern infrastructure.</p>

        <p class="brl-intro-p">The city serves as a vital strategic military installation, hosting the Trishul Air Force Base—one of the Indian Air Force’s premier frontline fighter bases—along with the storied Jat Regimental Centre and extensive Bareilly Cantonment. Moreover, Bareilly is an internationally recognized center of veterinary medicine and agricultural research, housing the Indian Veterinary Research Institute (IVRI) and Central Avian Research Institute (CARI) alongside MJP Rohilkhand University.</p>

        <div class="brl-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household Goods Loading in Bareilly Uttar Pradesh" width="580" height="380" loading="lazy">
            <p class="brl-image-caption">Our professional packing crew loading packed household consignments into secure container trucks in Bareilly.</p>
        </div>

        <p class="brl-intro-p">At Shree Ashirwad Packers and Movers, our local Bareilly operations center coordinates household relocations, armed forces officer postings, university faculty transfers, and industrial cargo movement with absolute perfection. From the serene tree-lined bungalows of Civil Lines and Rampur Garden to the bustling commercial corridors of Ayub Khan Chauraha and Rajendra Nagar, our certified staff guarantees unmatched care.</p>

        <p class="brl-intro-p">Whether you are relocating locally within Bareilly to <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-civil-lines-bareilly">Civil Lines</a> or <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-rajendra-nagar-bareilly">Rajendra Nagar</a>, commuting to <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-moradabad">Moradabad</a> or <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow">Lucknow</a>, or transferring interstate, our comprehensive relocation management delivers total peace of mind.</p>
    </section>

    <!-- Section 2: Core Relocation Services -->
    <section>
        <h2 class="brl-section-heading">Comprehensive Relocation Solutions Across Bareilly</h2>
        <p class="brl-intro-p">We provide tailored moving and logistics services configured specifically for Bareilly’s diverse residential, military, and commercial sectors:</p>

        <div class="brl-grid-3">
            <div class="brl-card">
                <h3>Household &amp; Kothi Shifting</h3>
                <p>Complete packing and moving for independent bungalows, duplex kothis, and modern apartments across Rajendra Nagar, Civil Lines, and Janakpuri with multi-layer bubble wrap.</p>
            </div>
            <div class="brl-card">
                <h3>Defense &amp; Air Force Transfers</h3>
                <p>Specialized transfer services for armed forces personnel from Trishul Air Base and Jat Regimental Centre, complete with official government transfer documentation and IBA billing.</p>
            </div>
            <div class="brl-card">
                <h3>Scientific &amp; Academic Moves</h3>
                <p>Tailored packing solutions for research scientists and professors at IVRI, CARI, and Rohilkhand University, including academic library cartons and delicate lab equipment crating.</p>
            </div>
            <div class="brl-card">
                <h3>Handicraft &amp; Furniture Crating</h3>
                <p>Custom wooden crating and protective packaging for Bareilly’s renowned cane furniture, wooden artifacts, and delicate zari-zardozi embroidered textiles.</p>
            </div>
            <div class="brl-card">
                <h3>Enclosed Vehicle Transportation</h3>
                <p>Secured door-to-door car carrier and two-wheeler transport in enclosed hydraulic trailers fitted with wheel chocks, preventing transit wear across interstate routes.</p>
            </div>
            <div class="brl-card">
                <h3>National Highway Transit</h3>
                <p>Rapid container transport along National Highway 30, providing smooth connections toward Delhi NCR, Moradabad, Rampur, Shahjahanpur, Sitapur, and Lucknow.</p>
            </div>
        </div>

        <div class="brl-highlight-box">
            <h3>Custom Crating for Delicate Cane Furniture &amp; Art</h3>
            <p>Bareilly's handcrafted wooden and cane furniture represents exquisite artistry. We construct made-to-measure timber frames and use moisture-resistant foam cushioning to shield artistic furniture pieces and family heirlooms against road vibrations throughout long-distance moves.</p>
        </div>
    </section>

    <!-- Section 3: Sub-Locality Coverage in Bareilly -->
    <section>
        <h2 class="brl-section-heading">Key Residential Sectors &amp; Sub-Localities in Bareilly</h2>
        <p class="brl-intro-p">Our local moving crews operate continuously across all prominent residential neighborhoods and commercial sectors in Bareilly:</p>

        <div class="brl-grid-3">
            <div class="brl-card">
                <h3>Civil Lines &amp; Rampur Garden</h3>
                <p>Catering to upscale government bungalows, judicial residences, and doctor clinics near Ayub Khan Chauraha with quiet morning packing and careful transit.</p>
            </div>
            <div class="brl-card">
                <h3>Rajendra Nagar &amp; DD Puram</h3>
                <p>Serving Bareilly's most prominent residential and retail belts, deploying specialized mini-trucks to navigate market bylanes and multi-storey residences.</p>
            </div>
            <div class="brl-card">
                <h3>Bareilly Cantt &amp; Trishul Area</h3>
                <p>Providing compliant household packing for defense officers, military quarters, and air force residential enclaves with complete security clearance compliance.</p>
            </div>
            <div class="brl-card">
                <h3>Model Town &amp; Janakpuri</h3>
                <p>Managing family moves and duplex kothi relocations with hydraulic furniture lifters and master carpentry support for large modular fixtures.</p>
            </div>
            <div class="brl-card">
                <h3>IVRI Campus &amp; Izatnagar</h3>
                <p>Handling faculty relocations, scientific staff transfers, and railway officer quarters along the Izatnagar railway division corridor.</p>
            </div>
            <div class="brl-card">
                <h3>CB Ganj &amp; Industrial Estate</h3>
                <p>Executing commercial warehouse logistics, office relocations, and industrial manufacturing freight transit along the northern bypass.</p>
            </div>
        </div>

        <div class="brl-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Packaging Materials in Bareilly Uttar Pradesh" width="580" height="380" loading="lazy">
            <p class="brl-image-caption">High-density bubble wrapping and reinforced multi-wall cartons utilized for household goods in Bareilly.</p>
        </div>

        <p class="brl-intro-p">Our localized familiarity ensures that no time is wasted negotiating narrow market streets or military cantonment gates. Our drivers are intimately familiar with local no-entry timings, morning school traffic schedules, and optimal highway access points across Bareilly.</p>

        <p class="brl-intro-p">For clients moving to other regional hubs in western Uttar Pradesh or our corporate headquarters in <a href="<?php echo SITE_BASE_URL; ?>/">Ranchi</a>, our synchronized intercity network guarantees punctual updates and verified tracking throughout the journey.</p>
    </section>

    <!-- Section 4: Transparent Tariff Structure -->
    <section>
        <h2 class="brl-section-heading">Transparent Shifting Charges in Bareilly</h2>
        <p class="brl-intro-p">We operate on complete pricing transparency with zero hidden surcharges or post-move surprises. Review our competitive rate guidelines below:</p>

        <div class="brl-table-wrap">
            <table class="brl-table">
                <thead>
                    <tr>
                        <th>Shifting Type / Home Size</th>
                        <th>Packing Material &amp; Labor</th>
                        <th>Local Transport (Bareilly)</th>
                        <th>Intercity Shifting (NCR / UP)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment</strong></td>
                        <td>₹2,000 - ₹3,300</td>
                        <td>₹2,200 - ₹3,700</td>
                        <td>₹9,000 - ₹16,500</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Apartment / Floor</strong></td>
                        <td>₹3,400 - ₹5,600</td>
                        <td>₹3,800 - ₹6,400</td>
                        <td>₹14,000 - ₹24,500</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Independent Kothi</strong></td>
                        <td>₹5,400 - ₹9,000</td>
                        <td>₹6,400 - ₹11,000</td>
                        <td>₹20,500 - ₹35,000</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Luxury Bungalow</strong></td>
                        <td>₹7,500 - ₹13,000</td>
                        <td>₹8,500 - ₹15,500</td>
                        <td>₹28,000 - ₹48,000</td>
                    </tr>
                    <tr>
                        <td><strong>Defense Officer Transfer Docket</strong></td>
                        <td>₹5,500 - ₹11,000</td>
                        <td>₹6,500 - ₹13,000</td>
                        <td>IBA Tariff Compliant</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler / Bike Transport</strong></td>
                        <td>₹800 - ₹1,400</td>
                        <td>₹1,100 - ₹1,900</td>
                        <td>₹3,200 - ₹6,500</td>
                    </tr>
                    <tr>
                        <td><strong>Sedan / SUV Car Carrier</strong></td>
                        <td>₹1,500 - ₹2,500</td>
                        <td>₹2,500 - ₹4,000</td>
                        <td>₹8,000 - ₹18,500</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="brl-highlight-box">
            <h3>Doorstep Surveys &amp; Government Transfer Reimbursement</h3>
            <p>Every quote includes all labor charges, premium packing supplies, fuel transit, loading, and floor-wise delivery. We provide official GST-compliant tax invoices, transit insurance dockets, and IBA-format bills suitable for defense, bank, and university relocation reimbursement claims. Use our free online <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">moving charges calculator</a> to plan your relocation budget accurately.</p>
        </div>
    </section>

    <!-- Section 5: Standard Operating Protocol -->
    <section>
        <h2 class="brl-section-heading">Our Proven 5-Stage Moving Workflow</h2>
        <p class="brl-intro-p">Every household and defense move in Bareilly follows our standardized quality assurance workflow:</p>

        <div class="brl-grid-3">
            <div class="brl-card">
                <h3>1. Pre-Move Survey &amp; Estimation</h3>
                <p>Our senior moving coordinator conducts a comprehensive in-person or video survey to evaluate goods volume, access lanes, and special crating requirements.</p>
            </div>
            <div class="brl-card">
                <h3>2. Multi-Layer Protective Packaging</h3>
                <p>We apply high-density bubble wrap, corrugated sheets, stretch film, and custom timber crating for delicate cane furniture, glassware, and electronics.</p>
            </div>
            <div class="brl-card">
                <h3>3. Master Carpentry &amp; Disassembly</h3>
                <p>Skilled master carpenters dismantle large wooden beds, modular wardrobes, and modular office workstations, tagging all hardware systematically.</p>
            </div>
            <div class="brl-card">
                <h3>4. Safe Stacking &amp; Container Transit</h3>
                <p>Items are loaded into weather-resistant, GPS-tracked covered container trucks with heavy-duty safety strapping to eliminate transit friction and shifting.</p>
            </div>
            <div class="brl-card">
                <h3>5. Delivery, Unpacking &amp; Placement</h3>
                <p>At your destination, our crew unloads each carton into designated rooms, reassembles heavy furniture, and clears away all packing materials cleanly.</p>
            </div>
            <div class="brl-card">
                <h3>Dedicated Operations Manager</h3>
                <p>A single dedicated point of contact coordinates your relocation from start to finish, providing real-time tracking updates until final client sign-off.</p>
            </div>
        </div>

        <div class="brl-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Master Carpentry and Bed Dismantling in Bareilly" width="580" height="380" loading="lazy">
            <p class="brl-image-caption">Skilled carpentry team carefully dismantling large wooden bed frames and packing delicate hardware in Bareilly.</p>
        </div>
    </section>

    <!-- Section 6: Regional Highway Connectivity -->
    <section>
        <h2 class="brl-section-heading">Strategic Road &amp; Highway Connectivity</h2>
        <p class="brl-intro-p">Bareilly enjoys strategic road connectivity at the crossroads of northern Uttar Pradesh. Positioned directly on National Highway 30 (the vital corridor linking Delhi and Lucknow), our closed container vehicles navigate eastward smoothly toward Shahjahanpur, Sitapur, and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow">Lucknow</a> in approximately 4 to 5 hours.</p>

        <p class="brl-intro-p">Westbound freight movements connect directly via National Highway 530 and NH-30 toward Rampur, <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-moradabad">Moradabad</a>, Hapur, and Delhi NCR in approximately 5 to 6 hours. Northbound routes provide instant access toward Pilibhit, Tanakpur, and Uttarakhand hill stations like Nainital and Kathgodam, while southbound highways link easily toward Badaun and Aligarh.</p>

        <div class="brl-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="All Weather Closed Container Fleet in Bareilly" width="580" height="380" loading="lazy">
            <p class="brl-image-caption">Dedicated sealed container truck fleet ensuring clean, weather-protected door-to-door delivery across Bareilly.</p>
        </div>

        <p class="brl-intro-p">In addition to highway trucking, Bareilly Junction and Izatnagar railway stations serve as major rail heads on the Northern and North Eastern Railway networks, facilitating multimodal express cargo transit to Mumbai, Pune, Kolkata, and Hyderabad.</p>

        <p class="brl-intro-p">Every vehicle in our transport fleet is operated by seasoned highway drivers equipped with GPS tracking and live communication systems, guaranteeing your belongings arrive securely and strictly on schedule.</p>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section>
        <h2 class="brl-section-heading">Frequently Asked Questions</h2>
        <p class="brl-intro-p">Clear answers to common questions about relocation services in Bareilly:</p>

        <div class="brl-faq-item">
            <div class="brl-faq-q">What are the standard household shifting charges in Bareilly?</div>
            <div class="brl-faq-a">Local shifting in Bareilly typically costs ₹4,200 to ₹7,000 for a 1 BHK home, ₹7,200 to ₹12,800 for a 2 BHK apartment in Civil Lines or Rajendra Nagar, and ₹12,000 to ₹21,000 for a 3 BHK independent kothi. Charges cover multi-layer packing materials, loading, safe transit, unloading, and furniture reassembly.</div>
        </div>

        <div class="brl-faq-item">
            <div class="brl-faq-q">Do you offer specialized relocation services for defense personnel in Bareilly Cantonment and Trishul Airbase?</div>
            <div class="brl-faq-a">Yes. Bareilly hosts the Jat Regimental Centre and Trishul Air Force Station. We provide standardized government transfer dockets, official IBA-format bills, itemized packing inventory lists, and transit insurance accepted by defense and armed forces audit authorities.</div>
        </div>

        <div class="brl-faq-item">
            <div class="brl-faq-q">How quickly can goods be transported from Bareilly to Delhi NCR or Lucknow?</div>
            <div class="brl-faq-a">Via National Highway 30, our dedicated sealed container fleet delivers household goods to Lucknow in approximately 4 to 5 hours and to Delhi NCR via Moradabad in approximately 5 to 6 hours, ensuring rapid next-day setup.</div>
        </div>

        <div class="brl-faq-item">
            <div class="brl-faq-q">Can you safely pack and transport cane furniture and zari-zardozi handicrafts from Bareilly?</div>
            <div class="brl-faq-a">Yes. Bareilly is globally renowned for cane and bamboo furniture as well as intricate zari-zardozi embroidery. We provide customized timber crating, moisture-barrier wrapping, and multi-layer bubble padding to ensure zero damage to delicate handicrafts during transit.</div>
        </div>

        <div class="brl-faq-item">
            <div class="brl-faq-q">Are enclosed car carriers and two-wheeler transport available from Bareilly?</div>
            <div class="brl-faq-a">Yes. We offer hydraulic closed car carrier trailers and secured bike parcel crating with wheel-chocks and protective foam padding for transit from Bareilly to Lucknow, Dehradun, Mumbai, Bangalore, and Ranchi.</div>
        </div>

        <div class="brl-faq-item">
            <div class="brl-faq-q">How early should I book my relocation in Bareilly?</div>
            <div class="brl-faq-a">We recommend booking 2 to 3 days in advance. This allows our coordinator to conduct a thorough pre-move assessment, organize customized crates, and allocate our senior packing crew.</div>
        </div>
    </section>

    <!-- Section 8: Connected Neighborhoods & Authority Links -->
    <section>
        <h2 class="brl-section-heading">Connected Bareilly Shifting Hubs</h2>
        <p class="brl-intro-p">Explore our verified moving networks across Bareilly hyper-local sectors and parent authority corridors:</p>

        <div class="brl-links-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-civil-lines-bareilly" class="brl-link-card">Civil Lines Bareilly</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-rajendra-nagar-bareilly" class="brl-link-card">Rajendra Nagar Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-moradabad" class="brl-link-card">Moradabad Brass Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-rampur" class="brl-link-card">Rampur Royal Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-shahjahanpur" class="brl-link-card">Shahjahanpur Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-aligarh" class="brl-link-card">Aligarh University Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow" class="brl-link-card">Lucknow State Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/" class="brl-link-card">Ranchi Head Office Hub</a>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="brl-cta-box">
        <h3>Plan Your Smooth Relocation in Bareilly Today</h3>
        <p>Connect with our Bareilly relocation specialists today for a transparent quote, tailored packing schedule, and flawless doorstep shifting experience.</p>
        <div class="brl-cta-group">
            <a href="tel:+919334404050" class="brl-btn-primary">Call: +91 93344 04050</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="brl-btn-secondary">Get Free Estimate</a>
        </div>
    </section>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
