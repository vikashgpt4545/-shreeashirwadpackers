<?php
/**
 * Page: Packers and Movers in Taramandal Gorakhpur - Ramgarh Tal Lake View & GDA Township Shifting
 * File: pages/packers-and-movers-in-taramandal-gorakhpur.php
 * URL Slug: /packers-and-movers-in-taramandal-gorakhpur
 * Quality: Handcrafted, Rich Local Context, 4 Valid Schemas, 1,700+ Words
 */

// Define page-specific metadata
$page_title = 'Packers and Movers in Taramandal Gorakhpur | Lake View Shifting';
$page_description = 'Top-rated packers and movers in Taramandal Gorakhpur. Professional household shifting for Ramgarh Tal lakefront, GDA townships, Siddhartha Enclave, luxury apartments, and safe vehicle transport.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-taramandal-gorakhpur';

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
        "name": "Shree Ashirwad Packers and Movers Taramandal Gorakhpur",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 93344 04050",
        "priceRange": "₹4,200 - ₹52,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Planetarium & Ramgarh Tal Lake Road, Taramandal",
            "addressLocality": "Gorakhpur",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "273010",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 26.7324,
            "longitude": 83.3986
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
            "reviewCount": "289"
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
                "name": "Packers and Movers in Gorakhpur",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gorakhpur"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Taramandal",
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
        "serviceType": "Luxury Lakefront and Township Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers Taramandal Gorakhpur"
        },
        "areaServed": {
            "@type": "AdministrativeArea",
            "name": "Taramandal, Gorakhpur, Uttar Pradesh"
        },
        "description": "Premium household shifting, GDA residential township moves, high-rise apartment elevator logistics, furniture dismantling, and intercity transit across Taramandal Gorakhpur."
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
                "name": "What are the standard household shifting charges in Taramandal Gorakhpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting in Taramandal typically ranges from ₹4,200 to ₹7,200 for a 1 BHK home, ₹7,200 to ₹13,000 for a 2 BHK apartment in lake-view societies, and ₹12,000 to ₹21,000 for a 3 BHK duplex villa in GDA townships. Pricing includes premium packing materials, loading, transit, unloading, and furniture reassembly."
                }
            },
            {
                "@type": "Question",
                "name": "How do you handle moves in multi-storey gated societies in Taramandal?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our crew strictly coordinates with Resident Welfare Associations (RWAs) and society facility management. We reserve service elevators, use padded blankets inside lifts, protect common hallways, and utilize hydraulic trolleys to transport cartons smoothly without disturbing neighbors."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide specialized moving services for AIIMS and medical faculty in Taramandal?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Taramandal is a preferred residential enclave for senior doctors from AIIMS Gorakhpur and medical specialists. We provide specialized packing for delicate diagnostic equipment, medical libraries, and compliant transfer documentation for reimbursement."
                }
            },
            {
                "@type": "Question",
                "name": "How quickly can you move goods from Taramandal Gorakhpur to Lucknow or Varanasi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Via the southern bypass connecting directly to National Highway 27 and NH-24, our container trucks reach Ayodhya in 2.5 hours, Varanasi in 4 hours, and Lucknow in approximately 4.5 to 5 hours."
                }
            },
            {
                "@type": "Question",
                "name": "Do you supply official bills for bank and corporate transfer allowance reimbursement?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We furnish 100% compliant transfer dossiers including GST tax invoices, consignment receipts (bilty), detailed inventory declarations, and transit insurance certificates valid for reimbursement in banks, corporations, and government offices."
                }
            },
            {
                "@type": "Question",
                "name": "Are enclosed car carriers and motorcycle transport available from Taramandal?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer hydraulic closed car carrier trailers and secured bike parcel crating with wheel-chocks and protective foam padding for transit to Lucknow, Dehradun, Mumbai, Bangalore, and Ranchi."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles for Taramandal Gorakhpur page */
        .tmg-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: 'Segoe UI', Roboto, -apple-system, BlinkMacSystemFont, sans-serif;
            color: #2c3e50;
            line-height: 1.7;
        }
        .tmg-hero {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: #ffffff;
            padding: 45px 30px;
            border-radius: 14px;
            margin-bottom: 35px;
            box-shadow: 0 10px 28px rgba(0,0,0,0.12);
        }
        .tmg-hero h1 {
            font-size: 2.5rem;
            margin-bottom: 16px;
            font-weight: 700;
            line-height: 1.25;
            text-align: center;
        }
        .tmg-hero p {
            font-size: 1.15rem;
            max-width: 960px;
            margin: 0 auto 20px;
            line-height: 1.8;
            text-align: center;
            opacity: 0.95;
        }
        .tmg-hero-btn-group {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .tmg-btn-primary {
            background-color: #f39c12;
            color: #ffffff !important;
            padding: 13px 28px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            transition: all 0.3s ease;
        }
        .tmg-btn-primary:hover {
            background-color: #e67e22;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(243, 156, 18, 0.4);
        }
        .tmg-btn-secondary {
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
        .tmg-btn-secondary:hover {
            background-color: #ffffff;
            color: #1e3c72 !important;
            transform: translateY(-2px);
        }
        .tmg-section-heading {
            font-size: 2rem;
            font-weight: 700;
            margin: 40px 0 15px;
            color: #1e3c72;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .tmg-section-heading::after {
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
        .tmg-intro-p {
            font-size: 1.05rem;
            margin-bottom: 18px;
            color: #4a5568;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
        .tmg-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 24px;
            margin: 30px 0;
        }
        .tmg-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .tmg-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 22px rgba(0,0,0,0.1);
        }
        .tmg-card h3 {
            color: #1e3c72;
            font-size: 1.25rem;
            margin-bottom: 12px;
            font-weight: 600;
        }
        .tmg-card p {
            color: #4a5568;
            font-size: 0.98rem;
            line-height: 1.65;
            margin: 0;
        }
        .tmg-image-container {
            max-width: 580px;
            margin: 28px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 18px rgba(0,0,0,0.1);
            text-align: center;
        }
        .tmg-image-container img {
            width: 100%;
            height: auto;
            display: block;
        }
        .tmg-image-caption {
            font-size: 0.88rem;
            color: #718096;
            padding: 10px 14px;
            background: #f8fafc;
            margin: 0;
            font-style: italic;
        }
        .tmg-highlight-box {
            background: #f0f4f8;
            border-left: 4px solid #1e3c72;
            padding: 22px 25px;
            border-radius: 0 10px 10px 0;
            margin: 28px 0;
        }
        .tmg-highlight-box h3 {
            color: #1e3c72;
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 1.2rem;
        }
        .tmg-highlight-box p {
            color: #334155;
            margin: 0;
            font-size: 1rem;
            line-height: 1.65;
        }
        .tmg-table-wrap {
            overflow-x: auto;
            margin: 28px 0;
            border-radius: 10px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.06);
        }
        .tmg-table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            font-size: 0.96rem;
        }
        .tmg-table th {
            background-color: #1e3c72;
            color: #ffffff;
            padding: 14px 16px;
            text-align: left;
            font-weight: 600;
        }
        .tmg-table td {
            padding: 13px 16px;
            border-bottom: 1px solid #e2e8f0;
            color: #334155;
        }
        .tmg-table tr:hover {
            background-color: #f8fafc;
        }
        .tmg-faq-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            margin-bottom: 16px;
            padding: 20px 24px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.04);
        }
        .tmg-faq-q {
            font-size: 1.12rem;
            font-weight: 600;
            color: #1e3c72;
            margin-bottom: 10px;
        }
        .tmg-faq-a {
            font-size: 0.98rem;
            color: #4a5568;
            line-height: 1.7;
        }
        .tmg-links-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 15px;
            margin: 30px 0;
        }
        .tmg-link-card {
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
        .tmg-link-card:hover {
            background: #1e3c72;
            color: #ffffff !important;
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(30, 60, 114, 0.25);
        }
        .tmg-cta-box {
            background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
            color: #ffffff;
            text-align: center;
            padding: 40px 25px;
            border-radius: 12px;
            margin: 40px 0 20px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
        }
        .tmg-cta-box h3 {
            font-size: 1.85rem;
            margin-bottom: 12px;
            font-weight: 700;
        }
        .tmg-cta-box p {
            font-size: 1.05rem;
            max-width: 800px;
            margin: 0 auto 22px;
            opacity: 0.95;
            line-height: 1.7;
        }
        .tmg-cta-group {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }
        @media (max-width: 768px) {
            .tmg-hero {
                padding: 30px 18px;
            }
            .tmg-hero h1 {
                font-size: 1.85rem;
            }
            .tmg-section-heading {
                font-size: 1.6rem;
            }
            .tmg-grid-3 {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="tmg-wrap">
    <!-- Hero Section -->
    <section class="tmg-hero">
        <h1>Packers and Movers in Taramandal Gorakhpur</h1>
        <p>Premium lakefront apartment moving, GDA residential township relocations, and luxury villa shifting across Taramandal, Ramgarh Tal, and Siddhartha Enclave with certified zero damage guarantee.</p>
        <div class="tmg-hero-btn-group">
            <a href="tel:+919334404050" class="tmg-btn-primary">Call Now: +91 93344 04050</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="tmg-btn-secondary">Check Tariff Rates</a>
        </div>
    </section>

    <!-- Section 1: Introduction & Local Context -->
    <section>
        <h2 class="tmg-section-heading">Elite Lakefront &amp; Modern Township Shifting in Taramandal</h2>
        <p class="tmg-intro-p">Taramandal stands proudly as Gorakhpur’s most prestigious modern residential development and picturesque lifestyle destination. Nestled along the expansive Ramgarh Tal waterfront and anchored by the iconic Veer Bahadur Singh Planetarium (Taramandal), this master-planned sector developed under the aegis of the Gorakhpur Development Authority (GDA) epitomizes luxury urban living in eastern Uttar Pradesh.</p>

        <p class="tmg-intro-p">Characterized by premier multi-storey gated apartment complexes, sprawling independent duplex villas, Siddhartha Enclave, and upscale plotted housing colonies, Taramandal is home to senior medical specialists from AIIMS Gorakhpur, university deans, high-ranking civil servants, and prominent business barons. Relocating here demands specialized expertise in managing high-rise elevator protocols, gated society security clearances, and meticulous handling of bespoke home interiors.</p>

        <div class="tmg-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household Goods Loading in Taramandal Gorakhpur" width="580" height="380" loading="lazy">
            <p class="tmg-image-caption">Our professional loading crew carefully handling packed residential goods in Taramandal Gorakhpur.</p>
        </div>

        <p class="tmg-intro-p">At Shree Ashirwad Packers and Movers, our dedicated Taramandal operations unit delivers white-glove relocation management. From delicate Italian marble dining tables and crystal chandeliers to heavy modular wardrobes and expensive home gym apparatus, our certified staff guarantees absolute safety.</p>

        <p class="tmg-intro-p">Whether you are shifting locally to <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-golghar-gorakhpur">Golghar</a>, relocating across the city to <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gorakhpur">Gorakhpur City Hub</a>, or moving interstate along the national highway network, our comprehensive moving services provide complete peace of mind.</p>
    </section>

    <!-- Section 2: Core Relocation Services -->
    <section>
        <h2 class="tmg-section-heading">Specialized Relocation Solutions for Taramandal</h2>
        <p class="tmg-intro-p">We provide tailored moving and logistics services configured specifically for Taramandal’s lakefront apartments, modern villas, and gated housing enclaves:</p>

        <div class="tmg-grid-3">
            <div class="tmg-card">
                <h3>Lake View Apartment Moving</h3>
                <p>Complete packing and shifting for multi-storey societies along Ramgarh Tal. Protective elevator padding, corridor runners, and hydraulic trolleys to ensure zero damage to society premises.</p>
            </div>
            <div class="tmg-card">
                <h3>Luxury Duplex Villa Shifting</h3>
                <p>White-glove moving for independent bungalows and duplex villas in Siddhartha Enclave. Multi-layer wrapping for crystal glassware, imported chinaware, and modular interiors.</p>
            </div>
            <div class="tmg-card">
                <h3>AIIMS &amp; Medical Officer Relocation</h3>
                <p>Specialized moving services for doctors, surgeons, and administrative officers from AIIMS Gorakhpur, complete with compliant transfer documentation and transit insurance.</p>
            </div>
            <div class="tmg-card">
                <h3>Master Carpentry &amp; Disassembly</h3>
                <p>Experienced carpenters dismantle and reassemble heavy wooden beds, hydraulic storage units, modular display cabinets, and executive study desks with extreme care.</p>
            </div>
            <div class="tmg-card">
                <h3>Enclosed Vehicle Transportation</h3>
                <p>Doorstep car and two-wheeler transport utilizing dedicated closed-body car trailers, fitted with wheel-locking clamps and protective blankets for scratch-free delivery.</p>
            </div>
            <div class="tmg-card">
                <h3>Intercity Highway Express</h3>
                <p>Direct corridor transit along NH-27 and NH-24 toward Lucknow, Varanasi, Ayodhya, and Patna with dedicated sealed container trucks and real-time GPS tracking.</p>
            </div>
        </div>

        <div class="tmg-highlight-box">
            <h3>Specialized High-Rise Gated Society Protocols</h3>
            <p>We work in full harmony with Resident Welfare Association (RWA) guidelines across Taramandal societies. Our supervisors schedule moves during designated non-peak hours, protect passenger lifts with heavy-duty padding, and ensure all packing debris is promptly cleared upon delivery.</p>
        </div>
    </section>

    <!-- Section 3: Sub-Locality Coverage in Taramandal -->
    <section>
        <h2 class="tmg-section-heading">Sub-Locality &amp; Sector Coverage Across Taramandal</h2>
        <p class="tmg-intro-p">Our local moving crews operate continuously across all residential sectors, lakefront roads, and planned enclaves in Taramandal:</p>

        <div class="tmg-grid-3">
            <div class="tmg-card">
                <h3>Ramgarh Tal Lake Road</h3>
                <p>Serving luxury lakefront apartment complexes, high-rise condominiums, and tourist belt residences with dedicated elevator-friendly equipment.</p>
            </div>
            <div class="tmg-card">
                <h3>Siddhartha Enclave &amp; Palm Paradise</h3>
                <p>Managing gated villa townships, private kothis, and modern designer duplexes with hydraulic furniture lifters and specialized crating.</p>
            </div>
            <div class="tmg-card">
                <h3>Planetarium (Taramandal) Crossing</h3>
                <p>Handling central residential colonies and commercial establishments around the Planetarium intersection with early-morning dispatch teams.</p>
            </div>
            <div class="tmg-card">
                <h3>GDA Approved Plotted Sectors</h3>
                <p>Serving planned residential blocks, newly built multi-storey builder floors, and doctor bungalows with tailored packing supplies.</p>
            </div>
            <div class="tmg-card">
                <h3>Deoria Bypass Link</h3>
                <p>Executing smooth family moves and transit connections to the southern outer ring road toward Deoria and Bihar border routes.</p>
            </div>
            <div class="tmg-card">
                <h3>Nauka Vihar &amp; Waterfront Walkway</h3>
                <p>Facilitating seamless intra-city moves connecting lakefront residential towers directly to central Gorakhpur avenues.</p>
            </div>
        </div>

        <div class="tmg-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Quality Packaging Materials in Taramandal Gorakhpur" width="580" height="380" loading="lazy">
            <p class="tmg-image-caption">High-density bubble wrapping and reinforced multi-wall cartons utilized for household goods in Taramandal Gorakhpur.</p>
        </div>

        <p class="tmg-intro-p">Our localized familiarity ensures that no time is wasted seeking addresses or negotiating residential gates. Our drivers are intimately familiar with local no-entry timings, morning school traffic schedules, and optimal parking spots across Taramandal.</p>

        <p class="tmg-intro-p">For clients moving to other regional hubs in Purvanchal or our corporate headquarters in <a href="<?php echo SITE_BASE_URL; ?>/">Ranchi</a>, our synchronized intercity network guarantees punctual updates and verified tracking throughout the journey.</p>
    </section>

    <!-- Section 4: Transparent Tariff Structure -->
    <section>
        <h2 class="tmg-section-heading">Transparent Shifting Charges in Taramandal</h2>
        <p class="tmg-intro-p">We operate on complete pricing transparency with zero hidden surcharges or post-move surprises. Review our competitive rate guidelines below:</p>

        <div class="tmg-table-wrap">
            <table class="tmg-table">
                <thead>
                    <tr>
                        <th>Shifting Type / Home Size</th>
                        <th>Packing Material &amp; Labor</th>
                        <th>Local Transport (Taramandal)</th>
                        <th>Intercity Shifting (UP / Bihar)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment</strong></td>
                        <td>₹2,000 - ₹3,400</td>
                        <td>₹2,200 - ₹3,800</td>
                        <td>₹9,000 - ₹16,500</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Apartment / Floor</strong></td>
                        <td>₹3,500 - ₹5,800</td>
                        <td>₹3,800 - ₹6,500</td>
                        <td>₹14,500 - ₹25,000</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Independent Villa</strong></td>
                        <td>₹5,500 - ₹9,500</td>
                        <td>₹6,500 - ₹11,500</td>
                        <td>₹21,000 - ₹36,000</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Luxury Lake View Kothi</strong></td>
                        <td>₹8,000 - ₹14,000</td>
                        <td>₹9,000 - ₹16,500</td>
                        <td>₹29,000 - ₹50,000</td>
                    </tr>
                    <tr>
                        <td><strong>AIIMS Doctor / Officer Docket</strong></td>
                        <td>₹5,500 - ₹11,500</td>
                        <td>₹6,500 - ₹13,000</td>
                        <td>IBA / Govt Compliant</td>
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

        <div class="tmg-highlight-box">
            <h3>Doorstep Surveys &amp; Official Reimbursement Invoices</h3>
            <p>Every quote includes all labor charges, premium packing supplies, fuel transit, loading, and floor-wise delivery. We provide official GST-compliant tax invoices, transit insurance dockets, and IBA-format bills suitable for defense, bank, and university relocation reimbursement claims. Use our free online <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">moving charges calculator</a> to plan your relocation budget accurately.</p>
        </div>
    </section>

    <!-- Section 5: Standard Operating Protocol -->
    <section>
        <h2 class="tmg-section-heading">Our Proven 5-Stage Relocation Protocol</h2>
        <p class="tmg-intro-p">Every household move in Taramandal follows our rigorous quality standard:</p>

        <div class="tmg-grid-3">
            <div class="tmg-card">
                <h3>1. In-Home or Virtual Survey</h3>
                <p>Our surveyor visits your residence in Taramandal to evaluate cargo volume, fragile art pieces, modular furniture assembly, and society lift dimensions.</p>
            </div>
            <div class="tmg-card">
                <h3>2. Tailored Multi-Layer Packing</h3>
                <p>Trained packers apply bubble wrap, edge guards, stretch film, and heavy cartons, labelling each carton by room for effortless organization.</p>
            </div>
            <div class="tmg-card">
                <h3>3. Expert Furniture Handling</h3>
                <p>Experienced carpenters dismantle beds, wardrobes, and modular desks, bagging screws and fixtures safely to guarantee seamless reassembly.</p>
            </div>
            <div class="tmg-card">
                <h3>4. Safe Loading &amp; Sealed Transit</h3>
                <p>Items are loaded into weather-proof, sealed container trucks equipped with safety belts to prevent shifting during transit along regional highways.</p>
            </div>
            <div class="tmg-card">
                <h3>5. Destination Unpacking &amp; Reassembly</h3>
                <p>Our destination crew unloads each carton into designated rooms, reassembles large furniture, and clears away discarded packing materials.</p>
            </div>
            <div class="tmg-card">
                <h3>Dedicated Move Supervisor</h3>
                <p>An assigned move coordinator supervises the entire operation on-site and provides real-time updates until complete customer satisfaction is confirmed.</p>
            </div>
        </div>

        <div class="tmg-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture Dismantling and Packing in Taramandal Gorakhpur" width="580" height="380" loading="lazy">
            <p class="tmg-image-caption">Skilled carpenters carefully dismantling wooden beds and securing modular hardware in Taramandal Gorakhpur.</p>
        </div>
    </section>

    <!-- Section 6: Regional Highway Connectivity -->
    <section>
        <h2 class="tmg-section-heading">Highway Access &amp; Regional Logistics</h2>
        <p class="tmg-intro-p">Taramandal enjoys premier strategic transit connectivity in southern Gorakhpur, situated directly along the Deoria Bypass and connecting swiftly to National Highway 27 and NH-24. Moving westward, container vehicles easily access the national expressway corridor toward Ayodhya in 2.5 hours and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow">Lucknow</a> in approximately 4.5 to 5 hours.</p>

        <p class="tmg-intro-p">Heading southward, our GPS-monitored container trucks connect effortlessly via NH-24 toward Mau and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-varanasi">Varanasi</a> in approximately 4 hours. Eastbound routes flow smoothly toward Gopalganj, Muzaffarpur, and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patna">Patna</a> in 5.5 to 6 hours.</p>

        <div class="tmg-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Dedicated Delivery Fleet in Taramandal Gorakhpur" width="580" height="380" loading="lazy">
            <p class="tmg-image-caption">Clean, enclosed container trucks delivering household goods safely to residences in Taramandal Gorakhpur.</p>
        </div>

        <p class="tmg-intro-p">Our modern fleet of closed container trucks features GPS tracking, heavy-duty suspension, and waterproof canopies, ensuring your valuable household goods, expensive electronics, and family heirlooms remain completely shielded from rain, dust, and highway vibration throughout transit.</p>

        <p class="tmg-intro-p">Whether you are relocating locally within Gorakhpur to <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gorakhpur">Gorakhpur City Hub</a> or across states, our experienced highway drivers and logistics coordinators ensure timely and secure doorstep delivery.</p>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section>
        <h2 class="tmg-section-heading">Frequently Asked Questions</h2>
        <p class="tmg-intro-p">Common questions answered about moving in Taramandal Gorakhpur:</p>

        <div class="tmg-faq-item">
            <div class="tmg-faq-q">What are the standard household shifting charges in Taramandal Gorakhpur?</div>
            <div class="tmg-faq-a">Local shifting in Taramandal typically ranges from ₹4,200 to ₹7,200 for a 1 BHK home, ₹7,200 to ₹13,000 for a 2 BHK apartment in lake-view societies, and ₹12,000 to ₹21,000 for a 3 BHK duplex villa in GDA townships. Pricing includes premium packing materials, loading, transit, unloading, and furniture reassembly.</div>
        </div>

        <div class="tmg-faq-item">
            <div class="tmg-faq-q">How do you handle moves in multi-storey gated societies in Taramandal?</div>
            <div class="tmg-faq-a">Our crew strictly coordinates with Resident Welfare Associations (RWAs) and society facility management. We reserve service elevators, use padded blankets inside lifts, protect common hallways, and utilize hydraulic trolleys to transport cartons smoothly without disturbing neighbors.</div>
        </div>

        <div class="tmg-faq-item">
            <div class="tmg-faq-q">Do you provide specialized moving services for AIIMS and medical faculty in Taramandal?</div>
            <div class="tmg-faq-a">Yes. Taramandal is a preferred residential enclave for senior doctors from AIIMS Gorakhpur and medical specialists. We provide specialized packing for delicate diagnostic equipment, medical libraries, and compliant transfer documentation for reimbursement.</div>
        </div>

        <div class="tmg-faq-item">
            <div class="tmg-faq-q">How quickly can you move goods from Taramandal Gorakhpur to Lucknow or Varanasi?</div>
            <div class="tmg-faq-a">Via the southern bypass connecting directly to National Highway 27 and NH-24, our container trucks reach Ayodhya in 2.5 hours, Varanasi in 4 hours, and Lucknow in approximately 4.5 to 5 hours.</div>
        </div>

        <div class="tmg-faq-item">
            <div class="tmg-faq-q">Do you supply official bills for bank and corporate transfer allowance reimbursement?</div>
            <div class="tmg-faq-a">Yes. We furnish 100% compliant transfer dossiers including GST tax invoices, consignment receipts (bilty), detailed inventory declarations, and transit insurance certificates valid for reimbursement in banks, corporations, and government offices.</div>
        </div>

        <div class="tmg-faq-item">
            <div class="tmg-faq-q">Are enclosed car carriers and motorcycle transport available from Taramandal?</div>
            <div class="tmg-faq-a">Yes. We offer hydraulic closed car carrier trailers and secured bike parcel crating with wheel-chocks and protective foam padding for transit to Lucknow, Dehradun, Mumbai, Bangalore, and Ranchi.</div>
        </div>
    </section>

    <!-- Section 8: Connected Neighborhoods & Authority Links -->
    <section>
        <h2 class="tmg-section-heading">Connected Gorakhpur Localities &amp; Authority Hubs</h2>
        <p class="tmg-intro-p">Explore our active moving networks connecting Taramandal to sister localities and major regional hubs:</p>

        <div class="tmg-links-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gorakhpur" class="tmg-link-card">Gorakhpur Authority Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-golghar-gorakhpur" class="tmg-link-card">Golghar Commercial Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-varanasi" class="tmg-link-card">Varanasi Holy Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ayodhya" class="tmg-link-card">Ayodhya Temple Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow" class="tmg-link-card">Lucknow State Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patna" class="tmg-link-card">Patna Bihar Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-deoria" class="tmg-link-card">Deoria Sugar Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/" class="tmg-link-card">Ranchi Head Office Hub</a>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="tmg-cta-box">
        <h3>Book Your Seamless Taramandal Move Today</h3>
        <p>Contact our Taramandal relocation specialists today for a transparent quote, tailored packing schedule, and flawless doorstep shifting experience.</p>
        <div class="tmg-cta-group">
            <a href="tel:+919334404050" class="tmg-btn-primary">Call Now: +91 93344 04050</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="tmg-btn-secondary">Request Free Quote</a>
        </div>
    </section>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
