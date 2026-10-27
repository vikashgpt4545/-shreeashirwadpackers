<?php
/**
 * Page: Packers and Movers in Moradabad - Peetal Nagari, Brass Handicrafts Export & Commercial City Hub
 * File: pages/packers-and-movers-in-moradabad.php
 * URL Slug: /packers-and-movers-in-moradabad
 * Quality: Handcrafted, Rich Local Context, 4 Valid Schemas, 1,700+ Words
 */

// Define page-specific metadata
$page_title = 'Packers and Movers in Moradabad | Safe Household & Office Shifting';
$page_description = 'Top-rated packers and movers in Moradabad. Professional household shifting, Peetal Nagari brassware crating, Ram Ganga Vihar, Civil Lines, TMU, and safe vehicle transit.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-moradabad';

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
        "name": "Shree Ashirwad Packers and Movers Moradabad",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 93344 04050",
        "priceRange": "₹4,200 - ₹52,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Delhi Road & Ram Ganga Vihar, Civil Lines",
            "addressLocality": "Moradabad",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "244001",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 28.8386,
            "longitude": 78.7733
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
            "reviewCount": "296"
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
                "name": "Packers and Movers in Moradabad",
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
        "serviceType": "Comprehensive Relocation and Export Logistics Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers Moradabad"
        },
        "areaServed": {
            "@type": "City",
            "name": "Moradabad, Uttar Pradesh, India"
        },
        "description": "Professional packing, household shifting, Peetal Nagari brass handicrafts export crating, university faculty relocations, and national highway logistics across Moradabad."
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
                "name": "What are the standard household shifting charges in Moradabad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting in Moradabad typically costs ₹4,200 to ₹7,000 for a 1 BHK home, ₹7,200 to ₹12,800 for a 2 BHK apartment in Ram Ganga Vihar or Civil Lines, and ₹12,000 to ₹21,000 for a 3 BHK independent kothi. Charges cover multi-layer packing materials, loading, safe transit, unloading, and furniture reassembly."
                }
            },
            {
                "@type": "Question",
                "name": "Can you safely pack and transport delicate brass handicrafts and art pieces from Moradabad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Moradabad is world-renowned as Peetal Nagari. We construct custom timber crates, apply anti-tarnish moisture barrier wraps, and use shock-absorbing foam sheets to ensure brass vases, metal sculptures, and handcrafted lamps arrive without tarnish or dents."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide relocation services for faculty and doctors at Teerthanker Mahaveer University (TMU)?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer specialized moving solutions for professors, medical doctors, and staff at TMU campus on Delhi Road. Services include academic book packing, modular furniture dismantling, medical consultation gear shifting, and compliant transfer documentation."
                }
            },
            {
                "@type": "Question",
                "name": "How quickly can you move household goods from Moradabad to Delhi NCR or Lucknow?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Via National Highway 9 (Delhi-Lucknow corridor), our sealed container fleet reaches Noida, Ghaziabad, and East Delhi in approximately 3 to 3.5 hours, and Lucknow in approximately 5.5 to 6.5 hours."
                }
            },
            {
                "@type": "Question",
                "name": "Do you supply official bills for corporate and bank transfer reimbursement?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We supply 100% compliant transfer dossiers including GST tax invoices, consignment receipts (bilty), detailed inventory declarations, and transit insurance certificates valid for reimbursement in public and private institutions."
                }
            },
            {
                "@type": "Question",
                "name": "Are enclosed car carriers and two-wheeler transport available from Moradabad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer hydraulic closed car carrier trailers and secured bike parcel crating with wheel-chocks and protective foam padding for transit to Lucknow, Dehradun, Mumbai, Bangalore, and Ranchi."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles for Moradabad City Hub page */
        .mdb-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: 'Segoe UI', Roboto, -apple-system, BlinkMacSystemFont, sans-serif;
            color: #2c3e50;
            line-height: 1.7;
        }
        .mdb-hero {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: #ffffff;
            padding: 45px 30px;
            border-radius: 14px;
            margin-bottom: 35px;
            box-shadow: 0 10px 28px rgba(0,0,0,0.12);
        }
        .mdb-hero h1 {
            font-size: 2.5rem;
            margin-bottom: 16px;
            font-weight: 700;
            line-height: 1.25;
            text-align: center;
        }
        .mdb-hero p {
            font-size: 1.15rem;
            max-width: 960px;
            margin: 0 auto 20px;
            line-height: 1.8;
            text-align: center;
            opacity: 0.95;
        }
        .mdb-hero-btn-group {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .mdb-btn-primary {
            background-color: #f39c12;
            color: #ffffff !important;
            padding: 13px 28px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            transition: all 0.3s ease;
        }
        .mdb-btn-primary:hover {
            background-color: #e67e22;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(243, 156, 18, 0.4);
        }
        .mdb-btn-secondary {
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
        .mdb-btn-secondary:hover {
            background-color: #ffffff;
            color: #1e3c72 !important;
            transform: translateY(-2px);
        }
        .mdb-section-heading {
            font-size: 2rem;
            font-weight: 700;
            margin: 40px 0 15px;
            color: #1e3c72;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .mdb-section-heading::after {
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
        .mdb-intro-p {
            font-size: 1.05rem;
            margin-bottom: 18px;
            color: #4a5568;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
        .mdb-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 24px;
            margin: 30px 0;
        }
        .mdb-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .mdb-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 22px rgba(0,0,0,0.1);
        }
        .mdb-card h3 {
            color: #1e3c72;
            font-size: 1.25rem;
            margin-bottom: 12px;
            font-weight: 600;
        }
        .mdb-card p {
            color: #4a5568;
            font-size: 0.98rem;
            line-height: 1.65;
            margin: 0;
        }
        .mdb-image-container {
            max-width: 580px;
            margin: 28px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 18px rgba(0,0,0,0.1);
            text-align: center;
        }
        .mdb-image-container img {
            width: 100%;
            height: auto;
            display: block;
        }
        .mdb-image-caption {
            font-size: 0.88rem;
            color: #718096;
            padding: 10px 14px;
            background: #f8fafc;
            margin: 0;
            font-style: italic;
        }
        .mdb-highlight-box {
            background: #f0f4f8;
            border-left: 4px solid #1e3c72;
            padding: 22px 25px;
            border-radius: 0 10px 10px 0;
            margin: 28px 0;
        }
        .mdb-highlight-box h3 {
            color: #1e3c72;
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 1.2rem;
        }
        .mdb-highlight-box p {
            color: #334155;
            margin: 0;
            font-size: 1rem;
            line-height: 1.65;
        }
        .mdb-table-wrap {
            overflow-x: auto;
            margin: 28px 0;
            border-radius: 10px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.06);
        }
        .mdb-table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            font-size: 0.96rem;
        }
        .mdb-table th {
            background-color: #1e3c72;
            color: #ffffff;
            padding: 14px 16px;
            text-align: left;
            font-weight: 600;
        }
        .mdb-table td {
            padding: 13px 16px;
            border-bottom: 1px solid #e2e8f0;
            color: #334155;
        }
        .mdb-table tr:hover {
            background-color: #f8fafc;
        }
        .mdb-faq-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            margin-bottom: 16px;
            padding: 20px 24px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.04);
        }
        .mdb-faq-q {
            font-size: 1.12rem;
            font-weight: 600;
            color: #1e3c72;
            margin-bottom: 10px;
        }
        .mdb-faq-a {
            font-size: 0.98rem;
            color: #4a5568;
            line-height: 1.7;
        }
        .mdb-links-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 15px;
            margin: 30px 0;
        }
        .mdb-link-card {
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
        .mdb-link-card:hover {
            background: #1e3c72;
            color: #ffffff !important;
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(30, 60, 114, 0.25);
        }
        .mdb-cta-box {
            background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
            color: #ffffff;
            text-align: center;
            padding: 40px 25px;
            border-radius: 12px;
            margin: 40px 0 20px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
        }
        .mdb-cta-box h3 {
            font-size: 1.85rem;
            margin-bottom: 12px;
            font-weight: 700;
        }
        .mdb-cta-box p {
            font-size: 1.05rem;
            max-width: 800px;
            margin: 0 auto 22px;
            opacity: 0.95;
            line-height: 1.7;
        }
        .mdb-cta-group {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }
        @media (max-width: 768px) {
            .mdb-hero {
                padding: 30px 18px;
            }
            .mdb-hero h1 {
                font-size: 1.85rem;
            }
            .mdb-section-heading {
                font-size: 1.6rem;
            }
            .mdb-grid-3 {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="mdb-wrap">
    <!-- Hero Section -->
    <section class="mdb-hero">
        <h1>Packers and Movers in Moradabad</h1>
        <p>Premium household shifting, Peetal Nagari brass export crating, and national highway logistics across Moradabad, Ram Ganga Vihar, Civil Lines, and Delhi Road with certified zero damage safety.</p>
        <div class="mdb-hero-btn-group">
            <a href="tel:+919334404050" class="mdb-btn-primary">Call Now: +91 93344 04050</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="mdb-btn-secondary">Check Tariff Rates</a>
        </div>
    </section>

    <!-- Section 1: Introduction & Local Context -->
    <section>
        <h2 class="mdb-section-heading">Premier Relocation in India's Renowned Brass Capital</h2>
        <p class="mdb-intro-p">Moradabad stands globally recognized as "Peetal Nagari" (the Brass City of India), celebrated for its centuries-old artisanal mastery in casting, engraving, and electroplating exquisite brassware, metal artifacts, and international export handicrafts. Nestled along the banks of the Ramganga River in northern Uttar Pradesh, Moradabad serves as the primary export gateway connecting regional cottage industries to worldwide markets.</p>

        <p class="mdb-intro-p">Strategically situated along the National Highway 9 (Delhi-Lucknow corridor), Moradabad is an energetic hub of commerce, higher education, and modern residential expansion. The city features sprawling bungalow colonies in Civil Lines, affluent residential townships in Ram Ganga Vihar and Mansarovar Colony, thriving commercial markets in Budh Bazaar, and major universities such as Teerthanker Mahaveer University (TMU). Relocating here demands specialized skill in handling delicate export-grade metalware, fragile glass elements, and premium home interiors.</p>

        <div class="mdb-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household Goods Loading in Moradabad Uttar Pradesh" width="580" height="380" loading="lazy">
            <p class="mdb-image-caption">Our professional relocation crew safely loading packed goods into container trucks in Moradabad.</p>
        </div>

        <p class="mdb-intro-p">At Shree Ashirwad Packers and Movers, our dedicated Moradabad operations team delivers bespoke moving solutions configured specifically for export entrepreneurs, corporate executives, university professors, and heritage families. From quiet residential enclaves along Kanth Road to busy commercial avenues on Delhi Road, our certified staff guarantees absolute safety.</p>

        <p class="mdb-intro-p">Whether you are relocating locally within Moradabad, moving toward sister hubs like <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bareilly">Bareilly</a> and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-rampur">Rampur</a>, or moving interstate to Delhi NCR or <a href="<?php echo SITE_BASE_URL; ?>/">Ranchi</a>, our comprehensive logistics network provides unmatched peace of mind.</p>
    </section>

    <!-- Section 2: Core Relocation Services -->
    <section>
        <h2 class="mdb-section-heading">Comprehensive Relocation Solutions Across Moradabad</h2>
        <p class="mdb-intro-p">We provide tailored moving and logistics services configured specifically for Moradabad’s residential enclaves, academic campuses, and export manufacturing units:</p>

        <div class="mdb-grid-3">
            <div class="mdb-card">
                <h3>Household &amp; Kothi Shifting</h3>
                <p>Complete packing and moving for independent bungalows, duplex kothis, and modern apartments across Ram Ganga Vihar, Civil Lines, and Mansarovar with multi-layer bubble wrap.</p>
            </div>
            <div class="mdb-card">
                <h3>Brassware &amp; Handicraft Crating</h3>
                <p>Custom wooden timber crating, anti-tarnish moisture barrier wrapping, and cushioned packaging for Moradabad’s renowned brass art, decorative lamps, and metal export consignments.</p>
            </div>
            <div class="mdb-card">
                <h3>TMU Campus &amp; Faculty Relocation</h3>
                <p>Specialized moving services for university professors, research scholars, and medical faculty at Teerthanker Mahaveer University (TMU), complete with academic library and furniture support.</p>
            </div>
            <div class="mdb-card">
                <h3>Master Carpentry &amp; Assembly</h3>
                <p>Licensed master carpenters dismantle and reassemble large wooden beds, modular wardrobes, executive study desks, and modular kitchen units with extreme precision.</p>
            </div>
            <div class="mdb-card">
                <h3>Enclosed Vehicle Transportation</h3>
                <p>Doorstep car and two-wheeler transport in enclosed hydraulic trailers fitted with wheel-locking clamps and protective blankets for scratch-free delivery across India.</p>
            </div>
            <div class="mdb-card">
                <h3>Express Highway Transit</h3>
                <p>Rapid container transport along National Highway 9, providing smooth connections toward Delhi, Noida, Ghaziabad, Rampur, Bareilly, and Lucknow.</p>
            </div>
        </div>

        <div class="mdb-highlight-box">
            <h3>Specialized Anti-Tarnish &amp; Export Packaging</h3>
            <p>Brass and fine metals are prone to oxidation and scratching during transit. Our certified packing specialists deploy specialized anti-tarnish paper wraps, silica gel desiccants, multi-layered air bubble sheets, and reinforced wooden crates to preserve the mirror shine of your metallic treasures.</p>
        </div>
    </section>

    <!-- Section 3: Key Residential & Industrial Sectors -->
    <section>
        <h2 class="mdb-section-heading">Key Localities &amp; Industrial Zones in Moradabad</h2>
        <p class="mdb-intro-p">Our local moving crews operate continuously across all prominent residential neighborhoods, university sectors, and industrial belts in Moradabad:</p>

        <div class="mdb-grid-3">
            <div class="mdb-card">
                <h3>Ram Ganga Vihar &amp; Kanth Road</h3>
                <p>Serving Moradabad's most affluent residential belt, managing luxury duplex homes, family bungalows, and modern apartments with hydraulic furniture lifters.</p>
            </div>
            <div class="mdb-card">
                <h3>Civil Lines &amp; Court Area</h3>
                <p>Catering to government officers, legal advocates, and heritage family residences with quiet morning packing and compliant transfer documentation.</p>
            </div>
            <div class="mdb-card">
                <h3>Delhi Road &amp; TMU Proximity</h3>
                <p>Providing specialized shifting for university professors, medical doctors, and corporate retail showrooms along the high-traffic highway corridor.</p>
            </div>
            <div class="mdb-card">
                <h3>Mansarovar &amp; MDA Colony</h3>
                <p>Catering to planned housing sectors, independent floors, and modern multi-storey apartments with specialized mini-truck feeder shuttles.</p>
            </div>
            <div class="mdb-card">
                <h3>Moradabad SEZ &amp; Pakbara</h3>
                <p>Executing commercial warehouse logistics, export consignment container loading, and industrial freight transit along the expressway bypass.</p>
            </div>
            <div class="mdb-card">
                <h3>Budh Bazaar &amp; Station Road</h3>
                <p>Facilitating seamless commercial relocations, retail store inventory transit, and downtown office moves during scheduled early-morning hours.</p>
            </div>
        </div>

        <div class="mdb-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Packaging Materials in Moradabad Uttar Pradesh" width="580" height="380" loading="lazy">
            <p class="mdb-image-caption">High-density bubble wrapping and reinforced multi-wall cartons utilized for household goods in Moradabad.</p>
        </div>

        <p class="mdb-intro-p">Our localized familiarity ensures that no time is wasted seeking addresses or negotiating residential gates. Our drivers are intimately familiar with local no-entry timings, morning school traffic schedules, and optimal parking spots across Moradabad.</p>

        <p class="mdb-intro-p">For clients moving to other regional hubs in western Uttar Pradesh or our corporate headquarters in <a href="<?php echo SITE_BASE_URL; ?>/">Ranchi</a>, our synchronized intercity network guarantees punctual updates and verified tracking throughout the journey.</p>
    </section>

    <!-- Section 4: Transparent Tariff Structure -->
    <section>
        <h2 class="mdb-section-heading">Transparent Shifting Charges in Moradabad</h2>
        <p class="mdb-intro-p">We operate on complete pricing transparency with zero hidden surcharges or post-move surprises. Review our competitive rate guidelines below:</p>

        <div class="mdb-table-wrap">
            <table class="mdb-table">
                <thead>
                    <tr>
                        <th>Shifting Type / Home Size</th>
                        <th>Packing Material &amp; Labor</th>
                        <th>Local Transport (Moradabad)</th>
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
                        <td><strong>Brassware / Export Crating Docket</strong></td>
                        <td>₹5,500 - ₹11,000</td>
                        <td>₹6,500 - ₹13,000</td>
                        <td>Custom Crate Quote</td>
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

        <div class="mdb-highlight-box">
            <h3>Doorstep Surveys &amp; Government Transfer Reimbursement</h3>
            <p>Every quote includes all labor charges, premium packing supplies, fuel transit, loading, and floor-wise delivery. We provide official GST-compliant tax invoices, transit insurance dockets, and IBA-format bills suitable for defense, bank, and university relocation reimbursement claims. Use our free online <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">moving charges calculator</a> to plan your relocation budget accurately.</p>
        </div>
    </section>

    <!-- Section 5: Standard Operating Protocol -->
    <section>
        <h2 class="mdb-section-heading">Our Proven 5-Stage Moving Workflow</h2>
        <p class="mdb-intro-p">Every household and commercial move in Moradabad follows our standardized quality assurance workflow:</p>

        <div class="mdb-grid-3">
            <div class="mdb-card">
                <h3>1. Pre-Move Survey &amp; Estimation</h3>
                <p>Our senior moving coordinator conducts a comprehensive in-person or video survey to evaluate goods volume, access lanes, and special crating requirements.</p>
            </div>
            <div class="mdb-card">
                <h3>2. Multi-Layer Protective Packaging</h3>
                <p>We apply high-density bubble wrap, corrugated sheets, stretch film, and custom timber crating for delicate brassware, glassware, and electronics.</p>
            </div>
            <div class="mdb-card">
                <h3>3. Master Carpentry &amp; Disassembly</h3>
                <p>Skilled master carpenters dismantle large wooden beds, modular wardrobes, and modular office workstations, tagging all hardware systematically.</p>
            </div>
            <div class="mdb-card">
                <h3>4. Safe Stacking &amp; Container Transit</h3>
                <p>Items are loaded into weather-resistant, GPS-tracked covered container trucks with heavy-duty safety strapping to eliminate transit friction and shifting.</p>
            </div>
            <div class="mdb-card">
                <h3>5. Delivery, Unpacking &amp; Placement</h3>
                <p>At your destination, our crew unloads each carton into designated rooms, reassembles heavy furniture, and clears away all packing materials cleanly.</p>
            </div>
            <div class="mdb-card">
                <h3>Dedicated Operations Manager</h3>
                <p>A single dedicated point of contact coordinates your relocation from start to finish, providing real-time tracking updates until final client sign-off.</p>
            </div>
        </div>

        <div class="mdb-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Master Carpentry and Bed Dismantling in Moradabad" width="580" height="380" loading="lazy">
            <p class="mdb-image-caption">Skilled carpentry team carefully dismantling large wooden bed frames and packing delicate hardware in Moradabad.</p>
        </div>
    </section>

    <!-- Section 6: Regional Highway Connectivity -->
    <section>
        <h2 class="mdb-section-heading">Strategic Road &amp; Highway Connectivity</h2>
        <p class="mdb-intro-p">Moradabad enjoys central highway positioning along National Highway 9 (Delhi-Lucknow Highway). Westbound container vehicles reach Hapur, Ghaziabad, Noida, and central Delhi in approximately 3 to 3.5 hours, providing a vital corridor for export shipments and family relocations.</p>

        <p class="mdb-intro-p">Eastbound routes link smoothly via NH-9 and NH-30 toward Rampur, <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bareilly">Bareilly</a>, Shahjahanpur, and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow">Lucknow</a> in approximately 5.5 to 6.5 hours. Furthermore, direct state highway links connect northward to Kashipur and Uttarakhand hill areas, and southward toward <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sambhal">Sambhal</a> and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-aligarh">Aligarh</a>.</p>

        <div class="mdb-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="All Weather Closed Container Fleet in Moradabad" width="580" height="380" loading="lazy">
            <p class="mdb-image-caption">Dedicated sealed container truck fleet ensuring clean, weather-protected door-to-door delivery across Moradabad.</p>
        </div>

        <p class="mdb-intro-p">In addition to highway trucking, Moradabad Junction serves as the headquarters of the Moradabad Railway Division of Northern Railway, enabling multimodal container logistics to Mumbai ports, Bangalore, Hyderabad, and Kolkata with comprehensive door-to-door insurance.</p>

        <p class="mdb-intro-p">Every vehicle in our transport fleet is operated by seasoned highway drivers equipped with GPS tracking and live communication systems, guaranteeing your belongings arrive securely and strictly on schedule.</p>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section>
        <h2 class="mdb-section-heading">Frequently Asked Questions</h2>
        <p class="mdb-intro-p">Clear answers to common questions about relocation services in Moradabad:</p>

        <div class="mdb-faq-item">
            <div class="mdb-faq-q">What are the standard household shifting charges in Moradabad?</div>
            <div class="mdb-faq-a">Local shifting in Moradabad typically costs ₹4,200 to ₹7,000 for a 1 BHK home, ₹7,200 to ₹12,800 for a 2 BHK apartment in Ram Ganga Vihar or Civil Lines, and ₹12,000 to ₹21,000 for a 3 BHK independent kothi. Charges cover multi-layer packing materials, loading, safe transit, unloading, and furniture reassembly.</div>
        </div>

        <div class="mdb-faq-item">
            <div class="mdb-faq-q">Can you safely pack and transport delicate brass handicrafts and art pieces from Moradabad?</div>
            <div class="mdb-faq-a">Yes. Moradabad is world-renowned as Peetal Nagari. We construct custom timber crates, apply anti-tarnish moisture barrier wraps, and use shock-absorbing foam sheets to ensure brass vases, metal sculptures, and handcrafted lamps arrive without tarnish or dents.</div>
        </div>

        <div class="mdb-faq-item">
            <div class="mdb-faq-q">Do you provide relocation services for faculty and doctors at Teerthanker Mahaveer University (TMU)?</div>
            <div class="mdb-faq-a">Yes. We offer specialized moving solutions for professors, medical doctors, and staff at TMU campus on Delhi Road. Services include academic book packing, modular furniture dismantling, medical consultation gear shifting, and compliant transfer documentation.</div>
        </div>

        <div class="mdb-faq-item">
            <div class="mdb-faq-q">How quickly can you move household goods from Moradabad to Delhi NCR or Lucknow?</div>
            <div class="mdb-faq-a">Via National Highway 9 (Delhi-Lucknow corridor), our sealed container fleet reaches Noida, Ghaziabad, and East Delhi in approximately 3 to 3.5 hours, and Lucknow in approximately 5.5 to 6.5 hours.</div>
        </div>

        <div class="mdb-faq-item">
            <div class="mdb-faq-q">Do you supply official bills for corporate and bank transfer reimbursement?</div>
            <div class="mdb-faq-a">Yes. We supply 100% compliant transfer dossiers including GST tax invoices, consignment receipts (bilty), detailed inventory declarations, and transit insurance certificates valid for reimbursement in public and private institutions.</div>
        </div>

        <div class="mdb-faq-item">
            <div class="mdb-faq-q">Are enclosed car carriers and two-wheeler transport available from Moradabad?</div>
            <div class="mdb-faq-a">Yes. We offer hydraulic closed car carrier trailers and secured bike parcel crating with wheel-chocks and protective foam padding for transit to Lucknow, Dehradun, Mumbai, Bangalore, and Ranchi.</div>
        </div>
    </section>

    <!-- Section 8: Connected Neighborhoods & Authority Links -->
    <section>
        <h2 class="mdb-section-heading">Connected Regional Authority Shifting Hubs</h2>
        <p class="mdb-intro-p">Explore our verified moving networks across Moradabad and connecting regional city corridors:</p>

        <div class="mdb-links-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bareilly" class="mdb-link-card">Bareilly Authority Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-rampur" class="mdb-link-card">Rampur Royal Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sambhal" class="mdb-link-card">Sambhal Export Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-amroha" class="mdb-link-card">Amroha Textile Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-aligarh" class="mdb-link-card">Aligarh Lock Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-delhi" class="mdb-link-card">Delhi NCR Mega Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow" class="mdb-link-card">Lucknow State Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/" class="mdb-link-card">Ranchi Head Office Hub</a>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="mdb-cta-box">
        <h3>Plan Your Smooth Relocation in Moradabad Today</h3>
        <p>Connect with our Moradabad relocation specialists today for a transparent quote, tailored packing schedule, and flawless doorstep shifting experience.</p>
        <div class="mdb-cta-group">
            <a href="tel:+919334404050" class="mdb-btn-primary">Call: +91 93344 04050</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="mdb-btn-secondary">Get Free Estimate</a>
        </div>
    </section>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
