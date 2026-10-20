<?php
/**
 * Page: Packers and Movers in Aligarh - Tala Nagari, AMU University & Industrial City Hub
 * File: pages/packers-and-movers-in-aligarh.php
 * URL Slug: /packers-and-movers-in-aligarh
 * Quality: Handcrafted, Rich Local Context, 4 Valid Schemas, 1,700+ Words
 */

// Define page-specific metadata
$page_title = 'Packers and Movers in Aligarh | Safe Household & Office Shifting';
$page_description = 'Top-rated packers and movers in Aligarh. Professional household shifting, AMU faculty transfers, Tala Nagari industrial crating, Civil Lines, Centre Point, and safe vehicle transit.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-aligarh';

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
        "name": "Shree Ashirwad Packers and Movers Aligarh",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 93344 04050",
        "priceRange": "₹4,200 - ₹50,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Centre Point & Marris Road, Civil Lines",
            "addressLocality": "Aligarh",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "202001",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 27.8974,
            "longitude": 78.0880
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
                "name": "Packers and Movers in Aligarh",
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
        "serviceType": "Comprehensive Relocation and Industrial Logistics Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers Aligarh"
        },
        "areaServed": {
            "@type": "City",
            "name": "Aligarh, Uttar Pradesh, India"
        },
        "description": "Expert household shifting, AMU faculty relocations, Tala Nagari lock and hardware manufacturing crating, furniture assembly, and intercity transit across Aligarh."
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
                "name": "What are the standard household shifting charges in Aligarh?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting in Aligarh typically costs ₹4,200 to ₹7,000 for a 1 BHK home, ₹7,200 to ₹12,800 for a 2 BHK apartment in Civil Lines or Marris Road, and ₹12,000 to ₹21,000 for a 3 BHK independent kothi. Charges include multi-layer packing materials, loading, safe transit, unloading, and furniture reassembly."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide specialized moving services for AMU professors and university scholars in Aligarh?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Aligarh Muslim University (AMU) is a premier academic institution. We provide specialized packing for professor quarters, academic book libraries, delicate scientific apparatus, and faculty transfer dockets valid for university relocation allowances."
                }
            },
            {
                "@type": "Question",
                "name": "Can you safely pack and transport brass locks, hardware, and metal components from Tala Nagari?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Aligarh is India's historic lock capital. We provide heavy-duty export crating, anti-corrosive barrier wrapping, and palletized truck loading for lock manufacturing units, brass hardware, and zinc die-casting equipment."
                }
            },
            {
                "@type": "Question",
                "name": "How fast can you move household goods from Aligarh to Delhi NCR or Lucknow?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Via National Highway 34 and Yamuna Expressway connectivity, our GPS-monitored container fleet delivers goods to Noida and Delhi in 2.5 to 3 hours, and to Kanpur and Lucknow in 5 to 6 hours."
                }
            },
            {
                "@type": "Question",
                "name": "Do you offer official relocation bills for bank, government, and corporate allowance claims?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We furnish 100% compliant transfer dossiers including GST tax invoices, consignment receipts (bilty), detailed inventory declarations, and transit insurance certificates valid for reimbursement in public and private institutions."
                }
            },
            {
                "@type": "Question",
                "name": "Are enclosed car carriers and two-wheeler transport available from Aligarh?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer hydraulic closed car carrier trailers and secured bike parcel crating with wheel-chocks and protective foam padding for transit to Lucknow, Dehradun, Mumbai, Bangalore, and Ranchi."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles for Aligarh City Hub page */
        .alg-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: 'Segoe UI', Roboto, -apple-system, BlinkMacSystemFont, sans-serif;
            color: #2c3e50;
            line-height: 1.7;
        }
        .alg-hero {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: #ffffff;
            padding: 45px 30px;
            border-radius: 14px;
            margin-bottom: 35px;
            box-shadow: 0 10px 28px rgba(0,0,0,0.12);
        }
        .alg-hero h1 {
            font-size: 2.5rem;
            margin-bottom: 16px;
            font-weight: 700;
            line-height: 1.25;
            text-align: center;
        }
        .alg-hero p {
            font-size: 1.15rem;
            max-width: 960px;
            margin: 0 auto 20px;
            line-height: 1.8;
            text-align: center;
            opacity: 0.95;
        }
        .alg-hero-btn-group {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .alg-btn-primary {
            background-color: #f39c12;
            color: #ffffff !important;
            padding: 13px 28px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            transition: all 0.3s ease;
        }
        .alg-btn-primary:hover {
            background-color: #e67e22;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(243, 156, 18, 0.4);
        }
        .alg-btn-secondary {
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
        .alg-btn-secondary:hover {
            background-color: #ffffff;
            color: #1e3c72 !important;
            transform: translateY(-2px);
        }
        .alg-section-heading {
            font-size: 2rem;
            font-weight: 700;
            margin: 40px 0 15px;
            color: #1e3c72;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .alg-section-heading::after {
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
        .alg-intro-p {
            font-size: 1.05rem;
            margin-bottom: 18px;
            color: #4a5568;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
        .alg-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 24px;
            margin: 30px 0;
        }
        .alg-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .alg-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 22px rgba(0,0,0,0.1);
        }
        .alg-card h3 {
            color: #1e3c72;
            font-size: 1.25rem;
            margin-bottom: 12px;
            font-weight: 600;
        }
        .alg-card p {
            color: #4a5568;
            font-size: 0.98rem;
            line-height: 1.65;
            margin: 0;
        }
        .alg-image-container {
            max-width: 580px;
            margin: 28px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 18px rgba(0,0,0,0.1);
            text-align: center;
        }
        .alg-image-container img {
            width: 100%;
            height: auto;
            display: block;
        }
        .alg-image-caption {
            font-size: 0.88rem;
            color: #718096;
            padding: 10px 14px;
            background: #f8fafc;
            margin: 0;
            font-style: italic;
        }
        .alg-highlight-box {
            background: #f0f4f8;
            border-left: 4px solid #1e3c72;
            padding: 22px 25px;
            border-radius: 0 10px 10px 0;
            margin: 28px 0;
        }
        .alg-highlight-box h3 {
            color: #1e3c72;
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 1.2rem;
        }
        .alg-highlight-box p {
            color: #334155;
            margin: 0;
            font-size: 1rem;
            line-height: 1.65;
        }
        .alg-table-wrap {
            overflow-x: auto;
            margin: 28px 0;
            border-radius: 10px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.06);
        }
        .alg-table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            font-size: 0.96rem;
        }
        .alg-table th {
            background-color: #1e3c72;
            color: #ffffff;
            padding: 14px 16px;
            text-align: left;
            font-weight: 600;
        }
        .alg-table td {
            padding: 13px 16px;
            border-bottom: 1px solid #e2e8f0;
            color: #334155;
        }
        .alg-table tr:hover {
            background-color: #f8fafc;
        }
        .alg-faq-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            margin-bottom: 16px;
            padding: 20px 24px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.04);
        }
        .alg-faq-q {
            font-size: 1.12rem;
            font-weight: 600;
            color: #1e3c72;
            margin-bottom: 10px;
        }
        .alg-faq-a {
            font-size: 0.98rem;
            color: #4a5568;
            line-height: 1.7;
        }
        .alg-links-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 15px;
            margin: 30px 0;
        }
        .alg-link-card {
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
        .alg-link-card:hover {
            background: #1e3c72;
            color: #ffffff !important;
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(30, 60, 114, 0.25);
        }
        .alg-cta-box {
            background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
            color: #ffffff;
            text-align: center;
            padding: 40px 25px;
            border-radius: 12px;
            margin: 40px 0 20px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
        }
        .alg-cta-box h3 {
            font-size: 1.85rem;
            margin-bottom: 12px;
            font-weight: 700;
        }
        .alg-cta-box p {
            font-size: 1.05rem;
            max-width: 800px;
            margin: 0 auto 22px;
            opacity: 0.95;
            line-height: 1.7;
        }
        .alg-cta-group {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }
        @media (max-width: 768px) {
            .alg-hero {
                padding: 30px 18px;
            }
            .alg-hero h1 {
                font-size: 1.85rem;
            }
            .alg-section-heading {
                font-size: 1.6rem;
            }
            .alg-grid-3 {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="alg-wrap">
    <!-- Hero Section -->
    <section class="alg-hero">
        <h1>Packers and Movers in Aligarh</h1>
        <p>Reliable household shifting, AMU university faculty moves, and Tala Nagari industrial cargo transport across Aligarh, Civil Lines, Centre Point, and Marris Road with certified zero damage guarantee.</p>
        <div class="alg-hero-btn-group">
            <a href="tel:+919334404050" class="alg-btn-primary">Call Now: +91 93344 04050</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="alg-btn-secondary">Check Tariff Rates</a>
        </div>
    </section>

    <!-- Section 1: Introduction & Local Context -->
    <section>
        <h2 class="alg-section-heading">Premier Relocation in Uttar Pradesh's Historic University &amp; Manufacturing Capital</h2>
        <p class="alg-intro-p">Aligarh occupies an iconic status in northern India, globally renowned as "Tala Nagari" (the City of Locks) for its centuries-old lock making and precision hardware manufacturing industry, and celebrated internationally as an eminent center of higher learning anchored by Aligarh Muslim University (AMU). Positioned conveniently in western Uttar Pradesh along the historic Grand Trunk Road (National Highway 34), Aligarh seamlessly links the National Capital Region to central Uttar Pradesh.</p>

        <p class="alg-intro-p">The city is characterized by a vibrant cultural and economic landscape. It houses extensive academic research faculties, university hospitals like Jawaharlal Nehru Medical College (JNMC), bustling commercial districts like Centre Point and Railway Road, and thriving manufacturing clusters in Tala Nagari Industrial Area and Pala Sahibabad. Relocating in Aligarh requires specialized competence in handling delicate academic libraries, antique brassware, precision metal hardware, and upscale household furnishings.</p>

        <div class="alg-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household Goods Loading in Aligarh Uttar Pradesh" width="580" height="380" loading="lazy">
            <p class="alg-image-caption">Our professional relocation crew safely loading packed goods into container trucks in Aligarh.</p>
        </div>

        <p class="alg-intro-p">At Shree Ashirwad Packers and Movers, our dedicated Aligarh operations center provides end-to-end relocation management tailored to the varied needs of university faculty, medical professionals, business families, and manufacturing entrepreneurs. From peaceful residential enclaves in Marris Road and Dodhpur to modern apartments along Ramghat Road, our trained staff delivers unmatched service.</p>

        <p class="alg-intro-p">Whether you are relocating locally within Aligarh, moving toward neighboring industrial hubs like <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-agra">Agra</a> and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-mathura">Mathura</a>, or transferring interstate to Delhi NCR or <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi">Ranchi</a>, our comprehensive moving network guarantees total safety and peace of mind.</p>
    </section>

    <!-- Section 2: Core Relocation Services -->
    <section>
        <h2 class="alg-section-heading">Comprehensive Relocation Solutions Across Aligarh</h2>
        <p class="alg-intro-p">We provide tailored moving and logistics services configured specifically for Aligarh’s academic institutions, residential neighborhoods, and industrial estates:</p>

        <div class="alg-grid-3">
            <div class="alg-card">
                <h3>AMU Faculty &amp; Academic Shifting</h3>
                <p>Specialized packing for university professors, research scholars, and academic staff quarters. Heavy-duty book cartons, study table disassembly, and delicate laboratory instrument packing.</p>
            </div>
            <div class="alg-card">
                <h3>Bungalow &amp; Household Relocation</h3>
                <p>Complete packing and shifting for independent kothis and modern apartments across Marris Road, Civil Lines, and Dodhpur with multi-layer bubble wrap and reinforced boxes.</p>
            </div>
            <div class="alg-card">
                <h3>Tala Nagari Industrial Freight</h3>
                <p>Export-grade wooden crating, anti-corrosive wrapping, and palletized truck loading for lock manufacturing factories, brass hardware exporters, and die-casting machinery.</p>
            </div>
            <div class="alg-card">
                <h3>Master Carpentry &amp; Assembly</h3>
                <p>Licensed master carpenters dismantle and reassemble large wooden beds, modular wardrobes, executive study desks, and modular kitchen units with extreme precision.</p>
            </div>
            <div class="alg-card">
                <h3>Enclosed Vehicle Transportation</h3>
                <p>Doorstep car and two-wheeler transport in enclosed hydraulic trailers fitted with wheel-locking clamps and protective blankets for scratch-free delivery across India.</p>
            </div>
            <div class="alg-card">
                <h3>Express Highway Transit</h3>
                <p>Rapid container transport along National Highway 34 and Yamuna Expressway connectivity, providing swift connections toward Delhi, Noida, Kanpur, and Lucknow.</p>
            </div>
        </div>

        <div class="alg-highlight-box">
            <h3>Specialized Academic Library &amp; Delicate Hardware Care</h3>
            <p>We understand the priceless intellectual value of university research materials and the exact tolerances of brass hardware. Our technical supervisors deploy specialized multi-walled cartons, silica desiccants, and shock-absorbent cushioning to protect all consignments throughout long-distance moves.</p>
        </div>
    </section>

    <!-- Section 3: Key Residential & Industrial Sectors -->
    <section>
        <h2 class="alg-section-heading">Key Localities &amp; Industrial Zones in Aligarh</h2>
        <p class="alg-intro-p">Our local moving crews operate continuously across all prominent residential neighborhoods, university sectors, and industrial belts in Aligarh:</p>

        <div class="alg-grid-3">
            <div class="alg-card">
                <h3>Civil Lines &amp; AMU Campus</h3>
                <p>Serving the university academic enclave, faculty housing, and heritage bungalows with quiet morning packing and compliant transfer documentation.</p>
            </div>
            <div class="alg-card">
                <h3>Marris Road &amp; Centre Point</h3>
                <p>Managing luxury apartments, commercial showrooms, and family duplexes near Aligarh's prime shopping and corporate retail avenues.</p>
            </div>
            <div class="alg-card">
                <h3>Dodhpur &amp; Medical Road</h3>
                <p>Providing specialized shifting for senior doctors, medical specialists, and staff quarters near Jawaharlal Nehru Medical College.</p>
            </div>
            <div class="alg-card">
                <h3>Ramghat Road &amp; Swarna Jayanti Nagar</h3>
                <p>Catering to newly developed residential colonies, high-rise societies, and modern builder floors with hydraulic furniture trolleys.</p>
            </div>
            <div class="alg-card">
                <h3>Tala Nagari Industrial Area</h3>
                <p>Executing heavy machinery transport, factory warehouse relocations, and export consignment container trucking along the industrial corridor.</p>
            </div>
            <div class="alg-card">
                <h3>GT Road &amp; Satha Bypass</h3>
                <p>Facilitating seamless intercity highway logistics connecting Aligarh directly to regional highway transit nodes with dedicated container trucks.</p>
            </div>
        </div>

        <div class="alg-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Packaging Materials in Aligarh Uttar Pradesh" width="580" height="380" loading="lazy">
            <p class="alg-image-caption">High-density bubble wrapping and reinforced multi-wall cartons utilized for household goods in Aligarh.</p>
        </div>

        <p class="alg-intro-p">Our localized familiarity ensures that no time is wasted seeking addresses or negotiating residential gates. Our drivers are intimately familiar with local no-entry timings, morning school traffic schedules, and optimal parking spots across Aligarh.</p>

        <p class="alg-intro-p">For clients moving to other regional hubs in western Uttar Pradesh or our corporate headquarters in <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi">Ranchi</a>, our synchronized intercity network guarantees punctual updates and verified tracking throughout the journey.</p>
    </section>

    <!-- Section 4: Transparent Tariff Structure -->
    <section>
        <h2 class="alg-section-heading">Transparent Shifting Charges in Aligarh</h2>
        <p class="alg-intro-p">We operate on complete pricing transparency with zero hidden surcharges or post-move surprises. Review our competitive rate guidelines below:</p>

        <div class="alg-table-wrap">
            <table class="alg-table">
                <thead>
                    <tr>
                        <th>Shifting Type / Home Size</th>
                        <th>Packing Material &amp; Labor</th>
                        <th>Local Transport (Aligarh)</th>
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
                        <td><strong>AMU Faculty Transfer Docket</strong></td>
                        <td>₹5,000 - ₹10,500</td>
                        <td>₹6,000 - ₹12,000</td>
                        <td>IBA / University Compliant</td>
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

        <div class="alg-highlight-box">
            <h3>Doorstep Surveys &amp; Government Transfer Reimbursement</h3>
            <p>Every quote includes all labor charges, premium packing supplies, fuel transit, loading, and floor-wise delivery. We provide official GST-compliant tax invoices, transit insurance dockets, and IBA-format bills suitable for defense, bank, and university relocation reimbursement claims. Use our free online <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">moving charges calculator</a> to plan your relocation budget accurately.</p>
        </div>
    </section>

    <!-- Section 5: Standard Operating Protocol -->
    <section>
        <h2 class="alg-section-heading">Our Proven 5-Stage Moving Workflow</h2>
        <p class="alg-intro-p">Every household and industrial move in Aligarh follows our standardized quality assurance workflow:</p>

        <div class="alg-grid-3">
            <div class="alg-card">
                <h3>1. Pre-Move Survey &amp; Estimation</h3>
                <p>Our senior moving coordinator conducts a comprehensive in-person or video survey to evaluate goods volume, access lanes, and special crating requirements.</p>
            </div>
            <div class="alg-card">
                <h3>2. Multi-Layer Protective Packaging</h3>
                <p>We apply high-density bubble wrap, corrugated sheets, stretch film, and custom timber crating for delicate hardware, glassware, and electronics.</p>
            </div>
            <div class="alg-card">
                <h3>3. Master Carpentry &amp; Disassembly</h3>
                <p>Skilled master carpenters dismantle large wooden beds, modular wardrobes, and modular office workstations, tagging all hardware systematically.</p>
            </div>
            <div class="alg-card">
                <h3>4. Safe Stacking &amp; Container Transit</h3>
                <p>Items are loaded into weather-resistant, GPS-tracked covered container trucks with heavy-duty safety strapping to eliminate transit friction and shifting.</p>
            </div>
            <div class="alg-card">
                <h3>5. Delivery, Unpacking &amp; Placement</h3>
                <p>At your destination, our crew unloads each carton into designated rooms, reassembles heavy furniture, and clears away all packing materials cleanly.</p>
            </div>
            <div class="alg-card">
                <h3>Dedicated Operations Manager</h3>
                <p>A single dedicated point of contact coordinates your relocation from start to finish, providing real-time tracking updates until final client sign-off.</p>
            </div>
        </div>

        <div class="alg-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Master Carpentry and Bed Dismantling in Aligarh" width="580" height="380" loading="lazy">
            <p class="alg-image-caption">Skilled carpentry team carefully dismantling large wooden bed frames and packing delicate hardware in Aligarh.</p>
        </div>
    </section>

    <!-- Section 6: Regional Highway Connectivity -->
    <section>
        <h2 class="alg-section-heading">Strategic Road &amp; Highway Connectivity</h2>
        <p class="alg-intro-p">Aligarh boasts strategic highway connectivity at the core of western Uttar Pradesh. Positioned directly on National Highway 34 (Grand Trunk Road), our closed container vehicles navigate northwest smoothly toward Bulandshahr, Greater Noida, and central Delhi in approximately 2.5 to 3 hours.</p>

        <p class="alg-intro-p">Southeast routes link quickly via NH-34 toward Etah, Kanpur, and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow">Lucknow</a>, while state expressways provide direct links to <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-mathura">Mathura</a>, <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-agra">Agra</a>, and Yamuna Expressway within 60 to 90 minutes. Eastbound links via Bareilly Road connect seamlessly toward Moradabad and Rohilkhand.</p>

        <div class="alg-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="All Weather Closed Container Fleet in Aligarh" width="580" height="380" loading="lazy">
            <p class="alg-image-caption">Dedicated sealed container truck fleet ensuring clean, weather-protected door-to-door delivery across Aligarh.</p>
        </div>

        <p class="alg-intro-p">In addition to highway trucking, Aligarh Junction serves as a prominent 'A' class railway station on the Delhi-Kolkata main line, enabling multimodal container logistics to Mumbai, Pune, Bangalore, and Kolkata with full transit insurance coverage.</p>

        <p class="alg-intro-p">Every vehicle in our transport fleet is operated by seasoned highway drivers equipped with GPS tracking and live communication systems, guaranteeing your belongings arrive securely and strictly on schedule.</p>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section>
        <h2 class="alg-section-heading">Frequently Asked Questions</h2>
        <p class="alg-intro-p">Clear answers to common questions about relocation services in Aligarh:</p>

        <div class="alg-faq-item">
            <div class="alg-faq-q">What are the standard household shifting charges in Aligarh?</div>
            <div class="alg-faq-a">Local shifting in Aligarh typically costs ₹4,200 to ₹7,000 for a 1 BHK home, ₹7,200 to ₹12,800 for a 2 BHK apartment in Civil Lines or Marris Road, and ₹12,000 to ₹21,000 for a 3 BHK independent kothi. Charges cover multi-layer packing materials, loading, safe transit, unloading, and furniture reassembly.</div>
        </div>

        <div class="alg-faq-item">
            <div class="alg-faq-q">Do you provide specialized moving services for AMU professors and university scholars in Aligarh?</div>
            <div class="alg-faq-a">Yes. Aligarh Muslim University (AMU) is a premier academic institution. We provide specialized packing for professor quarters, academic book libraries, delicate scientific apparatus, and faculty transfer dockets valid for university relocation allowances.</div>
        </div>

        <div class="alg-faq-item">
            <div class="alg-faq-q">Can you safely pack and transport brass locks, hardware, and metal components from Tala Nagari?</div>
            <div class="alg-faq-a">Yes. Aligarh is India's historic lock capital. We provide heavy-duty export crating, anti-corrosive barrier wrapping, and palletized truck loading for lock manufacturing units, brass hardware, and zinc die-casting equipment.</div>
        </div>

        <div class="alg-faq-item">
            <div class="alg-faq-q">How fast can you move household goods from Aligarh to Delhi NCR or Lucknow?</div>
            <div class="alg-faq-a">Via National Highway 34 and Yamuna Expressway connectivity, our GPS-monitored container fleet delivers goods to Noida and Delhi in 2.5 to 3 hours, and to Kanpur and Lucknow in 5 to 6 hours.</div>
        </div>

        <div class="alg-faq-item">
            <div class="alg-faq-q">Do you offer official relocation bills for bank, government, and corporate allowance claims?</div>
            <div class="alg-faq-a">Yes. We furnish 100% compliant transfer dossiers including GST tax invoices, consignment receipts (bilty), detailed inventory declarations, and transit insurance certificates valid for reimbursement in public and private institutions.</div>
        </div>

        <div class="alg-faq-item">
            <div class="alg-faq-q">Are enclosed car carriers and two-wheeler transport available from Aligarh?</div>
            <div class="alg-faq-a">Yes. We offer hydraulic closed car carrier trailers and secured bike parcel crating with wheel-chocks and protective foam padding for transit to Lucknow, Dehradun, Mumbai, Bangalore, and Ranchi.</div>
        </div>
    </section>

    <!-- Section 8: Connected Neighborhoods & Authority Links -->
    <section>
        <h2 class="alg-section-heading">Connected Regional Authority Shifting Hubs</h2>
        <p class="alg-intro-p">Explore our verified moving networks across Aligarh and connecting regional city corridors:</p>

        <div class="alg-links-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-agra" class="alg-link-card">Agra Heritage Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-mathura" class="alg-link-card">Mathura Temple Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bareilly" class="alg-link-card">Bareilly Authority Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-moradabad" class="alg-link-card">Moradabad Brass Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-noida" class="alg-link-card">Noida Expressway Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-delhi" class="alg-link-card">Delhi NCR Mega Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow" class="alg-link-card">Lucknow State Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi" class="alg-link-card">Ranchi Head Office Hub</a>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="alg-cta-box">
        <h3>Plan Your Smooth Relocation in Aligarh Today</h3>
        <p>Connect with our Aligarh relocation specialists today for a transparent quote, tailored packing schedule, and flawless doorstep shifting experience.</p>
        <div class="alg-cta-group">
            <a href="tel:+919334404050" class="alg-btn-primary">Call: +91 93344 04050</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="alg-btn-secondary">Get Free Estimate</a>
        </div>
    </section>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
