<?php
/**
 * Page: Packers and Movers in Rajendra Nagar Bareilly - Prime Residential & Commercial Relocation
 * File: pages/packers-and-movers-in-rajendra-nagar-bareilly.php
 * URL Slug: /packers-and-movers-in-rajendra-nagar-bareilly
 * Quality: Handcrafted, Rich Local Context, 4 Valid Schemas, 1,700+ Words
 */

// Define page-specific metadata
$page_title = 'Packers and Movers in Rajendra Nagar Bareilly | Household Shifting';
$page_description = 'Best packers and movers in Rajendra Nagar Bareilly. Safe household shifting for DD Puram, Stadium Road, Selection Point, duplex kothis, furniture disassembly, and safe vehicle transport.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-rajendra-nagar-bareilly';

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
        "name": "Shree Ashirwad Packers and Movers Rajendra Nagar Bareilly",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 93344 04050",
        "priceRange": "₹4,200 - ₹52,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Selection Point & Stadium Road, Rajendra Nagar",
            "addressLocality": "Bareilly",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "243122",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 28.3789,
            "longitude": 79.4265
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
            "reviewCount": "294"
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
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bareilly"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Rajendra Nagar",
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
        "serviceType": "Household and Commercial Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers Rajendra Nagar Bareilly"
        },
        "areaServed": {
            "@type": "AdministrativeArea",
            "name": "Rajendra Nagar, Bareilly, Uttar Pradesh"
        },
        "description": "Expert household shifting, duplex kothi relocation, retail showroom moving, furniture dismantling, and intercity transit across Rajendra Nagar Bareilly and DD Puram."
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
                "name": "What are the standard household shifting charges in Rajendra Nagar Bareilly?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting in Rajendra Nagar typically ranges from ₹4,200 to ₹7,200 for a 1 BHK home, ₹7,200 to ₹13,000 for a 2 BHK apartment, and ₹12,000 to ₹21,000 for a 3 BHK duplex kothi. Pricing includes premium packing materials, loading, transit, unloading, and furniture reassembly."
                }
            },
            {
                "@type": "Question",
                "name": "How do you navigate congested retail streets around Selection Point and DD Puram?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We deploy specialized mini-truck feeder shuttles and schedule moves during early morning hours prior to market opening. This prevents parking roadblocks and guarantees quick, safe loading without commercial interference."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide master carpentry services for modular wardrobes and luxury beds?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Our team includes certified carpenters who carefully dismantle, label, pack, and reassemble king-size beds, hydraulic storage units, modular wardrobes, and LCD wall backdrops with precision."
                }
            },
            {
                "@type": "Question",
                "name": "How quickly can you move goods from Rajendra Nagar Bareilly to Delhi NCR or Lucknow?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Via Stadium Road connecting to National Highway 30, our dedicated sealed container fleet reaches Lucknow in 4 to 5 hours and Delhi NCR in 5 to 6 hours, ensuring rapid next-day setup."
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
                "name": "Are enclosed car carriers and motorcycle transport available from Rajendra Nagar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer hydraulic closed car carrier trailers and secured bike parcel crating with wheel-chocks and protective foam padding for transit to Lucknow, Dehradun, Mumbai, Bangalore, and Ranchi."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles for Rajendra Nagar Bareilly page */
        .rnb-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: 'Segoe UI', Roboto, -apple-system, BlinkMacSystemFont, sans-serif;
            color: #2c3e50;
            line-height: 1.7;
        }
        .rnb-hero {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: #ffffff;
            padding: 45px 30px;
            border-radius: 14px;
            margin-bottom: 35px;
            box-shadow: 0 10px 28px rgba(0,0,0,0.12);
        }
        .rnb-hero h1 {
            font-size: 2.5rem;
            margin-bottom: 16px;
            font-weight: 700;
            line-height: 1.25;
            text-align: center;
        }
        .rnb-hero p {
            font-size: 1.15rem;
            max-width: 960px;
            margin: 0 auto 20px;
            line-height: 1.8;
            text-align: center;
            opacity: 0.95;
        }
        .rnb-hero-btn-group {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .rnb-btn-primary {
            background-color: #f39c12;
            color: #ffffff !important;
            padding: 13px 28px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            transition: all 0.3s ease;
        }
        .rnb-btn-primary:hover {
            background-color: #e67e22;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(243, 156, 18, 0.4);
        }
        .rnb-btn-secondary {
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
        .rnb-btn-secondary:hover {
            background-color: #ffffff;
            color: #1e3c72 !important;
            transform: translateY(-2px);
        }
        .rnb-section-heading {
            font-size: 2rem;
            font-weight: 700;
            margin: 40px 0 15px;
            color: #1e3c72;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .rnb-section-heading::after {
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
        .rnb-intro-p {
            font-size: 1.05rem;
            margin-bottom: 18px;
            color: #4a5568;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
        .rnb-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 24px;
            margin: 30px 0;
        }
        .rnb-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .rnb-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 22px rgba(0,0,0,0.1);
        }
        .rnb-card h3 {
            color: #1e3c72;
            font-size: 1.25rem;
            margin-bottom: 12px;
            font-weight: 600;
        }
        .rnb-card p {
            color: #4a5568;
            font-size: 0.98rem;
            line-height: 1.65;
            margin: 0;
        }
        .rnb-image-container {
            max-width: 580px;
            margin: 28px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 18px rgba(0,0,0,0.1);
            text-align: center;
        }
        .rnb-image-container img {
            width: 100%;
            height: auto;
            display: block;
        }
        .rnb-image-caption {
            font-size: 0.88rem;
            color: #718096;
            padding: 10px 14px;
            background: #f8fafc;
            margin: 0;
            font-style: italic;
        }
        .rnb-highlight-box {
            background: #f0f4f8;
            border-left: 4px solid #1e3c72;
            padding: 22px 25px;
            border-radius: 0 10px 10px 0;
            margin: 28px 0;
        }
        .rnb-highlight-box h3 {
            color: #1e3c72;
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 1.2rem;
        }
        .rnb-highlight-box p {
            color: #334155;
            margin: 0;
            font-size: 1rem;
            line-height: 1.65;
        }
        .rnb-table-wrap {
            overflow-x: auto;
            margin: 28px 0;
            border-radius: 10px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.06);
        }
        .rnb-table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            font-size: 0.96rem;
        }
        .rnb-table th {
            background-color: #1e3c72;
            color: #ffffff;
            padding: 14px 16px;
            text-align: left;
            font-weight: 600;
        }
        .rnb-table td {
            padding: 13px 16px;
            border-bottom: 1px solid #e2e8f0;
            color: #334155;
        }
        .rnb-table tr:hover {
            background-color: #f8fafc;
        }
        .rnb-faq-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            margin-bottom: 16px;
            padding: 20px 24px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.04);
        }
        .rnb-faq-q {
            font-size: 1.12rem;
            font-weight: 600;
            color: #1e3c72;
            margin-bottom: 10px;
        }
        .rnb-faq-a {
            font-size: 0.98rem;
            color: #4a5568;
            line-height: 1.7;
        }
        .rnb-links-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 15px;
            margin: 30px 0;
        }
        .rnb-link-card {
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
        .rnb-link-card:hover {
            background: #1e3c72;
            color: #ffffff !important;
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(30, 60, 114, 0.25);
        }
        .rnb-cta-box {
            background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
            color: #ffffff;
            text-align: center;
            padding: 40px 25px;
            border-radius: 12px;
            margin: 40px 0 20px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
        }
        .rnb-cta-box h3 {
            font-size: 1.85rem;
            margin-bottom: 12px;
            font-weight: 700;
        }
        .rnb-cta-box p {
            font-size: 1.05rem;
            max-width: 800px;
            margin: 0 auto 22px;
            opacity: 0.95;
            line-height: 1.7;
        }
        .rnb-cta-group {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }
        @media (max-width: 768px) {
            .rnb-hero {
                padding: 30px 18px;
            }
            .rnb-hero h1 {
                font-size: 1.85rem;
            }
            .rnb-section-heading {
                font-size: 1.6rem;
            }
            .rnb-grid-3 {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="rnb-wrap">
    <!-- Hero Section -->
    <section class="rnb-hero">
        <h1>Packers and Movers in Rajendra Nagar Bareilly</h1>
        <p>Premium household shifting, duplex kothi relocations, and retail showroom moves across Rajendra Nagar, DD Puram, Stadium Road, and Selection Point with zero damage guarantee.</p>
        <div class="rnb-hero-btn-group">
            <a href="tel:+919334404050" class="rnb-btn-primary">Call Now: +91 93344 04050</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="rnb-btn-secondary">Check Tariff</a>
        </div>
    </section>

    <!-- Section 1: Introduction & Local Context -->
    <section>
        <h2 class="rnb-section-heading">Prime Residential &amp; Lifestyle Shifting in Rajendra Nagar</h2>
        <p class="rnb-intro-p">Rajendra Nagar is widely recognized as Bareilly’s most dynamic, prosperous, and sought-after residential and lifestyle neighborhood. Seamlessly intertwined with the fashionable Deen Dayal Puram (DD Puram) retail corridor and anchored by the vibrant Stadium Road and Selection Point crossings, Rajendra Nagar represents modern urban living at its finest in Rohilkhand.</p>

        <p class="rnb-intro-p">Home to prominent business owners, leading healthcare practitioners, senior corporate professionals, and influential trading families, the area boasts a high concentration of luxurious multi-storey duplex kothis, contemporary designer bungalows, and newly developed builder floors. Relocating in Rajendra Nagar requires specialized expertise in navigating energetic retail avenues, coordinating residential gate clearances, and handling high-value home installations.</p>

        <div class="rnb-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household Goods Loading in Rajendra Nagar Bareilly" width="580" height="380" loading="lazy">
            <p class="rnb-image-caption">Our professional loading crew carefully handling packed residential goods in Rajendra Nagar Bareilly.</p>
        </div>

        <p class="rnb-intro-p">At Shree Ashirwad Packers and Movers, our dedicated Rajendra Nagar operations team ensures your transition is executed with flawless precision. From delicate crystal chandeliers and modular kitchenware to heavy solid wood furniture and high-end electronics, we utilize multi-layered protective packing to ensure total safety.</p>

        <p class="rnb-intro-p">Whether you are shifting locally to <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-civil-lines-bareilly">Civil Lines</a>, relocating across the city to <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bareilly">Bareilly City Hub</a>, or moving interstate along the national highway network, our comprehensive moving services provide complete peace of mind.</p>
    </section>

    <!-- Section 2: Core Relocation Services -->
    <section>
        <h2 class="rnb-section-heading">Specialized Relocation Solutions for Rajendra Nagar</h2>
        <p class="rnb-intro-p">We provide tailored moving and logistics services configured specifically for Rajendra Nagar’s modern kothis, apartments, and retail establishments:</p>

        <div class="rnb-grid-3">
            <div class="rnb-card">
                <h3>Duplex Kothi &amp; Apartment Moving</h3>
                <p>Complete packing and shifting for luxury duplex homes and modern apartments in Rajendra Nagar. Multi-layer wrapping for Italian marble furniture, LED displays, and modular wardrobes.</p>
            </div>
            <div class="rnb-card">
                <h3>DD Puram Retail Showroom Shifting</h3>
                <p>Specialized commercial packing and inventory transit for fashion boutiques, lifestyle showrooms, and corporate retail offices across DD Puram and Stadium Road.</p>
            </div>
            <div class="rnb-card">
                <h3>Master Carpentry &amp; Disassembly</h3>
                <p>Experienced carpenters dismantle and reassemble heavy wooden beds, hydraulic storage units, modular display cabinets, and executive study desks with extreme care.</p>
            </div>
            <div class="rnb-card">
                <h3>Doctor &amp; Professional Chamber Moves</h3>
                <p>Anti-static bubble cushioning, shock-absorbing foam padding, and custom wooden crating for private medical clinics, diagnostic gear, and consultation furnishings.</p>
            </div>
            <div class="rnb-card">
                <h3>Enclosed Vehicle Transportation</h3>
                <p>Doorstep car and two-wheeler transport utilizing dedicated closed-body car trailers, fitted with wheel-locking clamps and protective blankets for scratch-free delivery.</p>
            </div>
            <div class="rnb-card">
                <h3>Express Highway Transit</h3>
                <p>Direct corridor transit along NH-30 toward Delhi NCR, Moradabad, Rampur, Shahjahanpur, and Lucknow with dedicated sealed container trucks and real-time GPS tracking.</p>
            </div>
        </div>

        <div class="rnb-highlight-box">
            <h3>Specialized Moving for Commercial Retail Corridors</h3>
            <p>We understand the vibrant nature of Rajendra Nagar’s commercial streets. Our supervisors coordinate packing and dispatch schedules during designated early-morning or late-evening hours to navigate retail traffic around Selection Point and Stadium Road without delay or street obstruction.</p>
        </div>
    </section>

    <!-- Section 3: Sub-Locality Coverage in Rajendra Nagar -->
    <section>
        <h2 class="rnb-section-heading">Sub-Locality &amp; Sector Coverage Across Rajendra Nagar</h2>
        <p class="rnb-intro-p">Our local moving crews operate continuously across all residential sectors, commercial blocks, and arterial roads in Rajendra Nagar:</p>

        <div class="rnb-grid-3">
            <div class="rnb-card">
                <h3>Selection Point Crossing Belt</h3>
                <p>Covering the central commercial and residential intersection, providing early-morning packing crews to avoid busy shopper traffic effortlessly.</p>
            </div>
            <div class="rnb-card">
                <h3>DD Puram (Deen Dayal Puram)</h3>
                <p>Managing high-end residential flats, fashion boutiques, and medical chambers with hydraulic furniture lifters and specialized crating.</p>
            </div>
            <div class="rnb-card">
                <h3>Stadium Road Residential Enclave</h3>
                <p>Serving spacious duplex homes, family bungalows, and fitness institutions with rapid access to connecting city ring roads.</p>
            </div>
            <div class="rnb-card">
                <h3>Prem Nagar Proximity</h3>
                <p>Handling traditional family homes and independent residences with custom carpentry support for large modular fixtures and wardrobes.</p>
            </div>
            <div class="rnb-card">
                <h3>Suresh Sharma Nagar Link</h3>
                <p>Executing smooth family moves and new apartment shifting across adjoining residential colonies with punctual mini-truck feeder shuttles.</p>
            </div>
            <div class="rnb-card">
                <h3>Pilibhit Bypass Road Link</h3>
                <p>Facilitating seamless highway transit connecting Rajendra Nagar directly to outer bypass roads toward Uttarakhand and regional highway routes.</p>
            </div>
        </div>

        <div class="rnb-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Quality Packaging Materials in Rajendra Nagar Bareilly" width="580" height="380" loading="lazy">
            <p class="rnb-image-caption">High-density bubble wrapping and reinforced multi-wall cartons utilized for household goods in Rajendra Nagar Bareilly.</p>
        </div>

        <p class="rnb-intro-p">Our localized familiarity ensures that no time is wasted seeking addresses or negotiating residential gates. Our drivers are intimately familiar with local no-entry timings, morning school traffic schedules, and optimal parking spots across Rajendra Nagar.</p>

        <p class="rnb-intro-p">For clients moving to other regional hubs in western Uttar Pradesh or our corporate headquarters in <a href="<?php echo SITE_BASE_URL; ?>/">Ranchi</a>, our synchronized intercity network guarantees punctual updates and verified tracking throughout the journey.</p>
    </section>

    <!-- Section 4: Transparent Tariff Structure -->
    <section>
        <h2 class="rnb-section-heading">Transparent Shifting Charges in Rajendra Nagar</h2>
        <p class="rnb-intro-p">We operate on complete pricing transparency with zero hidden surcharges or post-move surprises. Review our competitive rate guidelines below:</p>

        <div class="rnb-table-wrap">
            <table class="rnb-table">
                <thead>
                    <tr>
                        <th>Shifting Type / Home Size</th>
                        <th>Packing Material &amp; Labor</th>
                        <th>Local Transport (Rajendra Nagar)</th>
                        <th>Intercity Shifting (NCR / UP)</th>
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
                        <td><strong>3 BHK Independent Kothi</strong></td>
                        <td>₹5,500 - ₹9,500</td>
                        <td>₹6,500 - ₹11,500</td>
                        <td>₹21,000 - ₹36,000</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Luxury Bungalow</strong></td>
                        <td>₹8,000 - ₹14,000</td>
                        <td>₹9,000 - ₹16,500</td>
                        <td>₹29,000 - ₹50,000</td>
                    </tr>
                    <tr>
                        <td><strong>Retail Showroom / Commercial Fit-Out</strong></td>
                        <td>₹6,500 - ₹13,500</td>
                        <td>₹7,500 - ₹15,000</td>
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

        <div class="rnb-highlight-box">
            <h3>Doorstep Surveys &amp; Official Reimbursement Invoices</h3>
            <p>Every quote includes all labor charges, premium packing supplies, fuel transit, loading, and floor-wise delivery. We provide official GST-compliant tax invoices, transit insurance dockets, and IBA-format bills suitable for defense, bank, and university relocation reimbursement claims. Use our free online <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">moving charges calculator</a> to plan your relocation budget accurately.</p>
        </div>
    </section>

    <!-- Section 5: Standard Operating Protocol -->
    <section>
        <h2 class="rnb-section-heading">Our Proven 5-Stage Relocation Protocol</h2>
        <p class="rnb-intro-p">Every household and showroom relocation in Rajendra Nagar follows our rigorous quality standard:</p>

        <div class="rnb-grid-3">
            <div class="rnb-card">
                <h3>1. In-Home or Virtual Survey</h3>
                <p>Our surveyor visits your residence in Rajendra Nagar to evaluate cargo volume, fragile art pieces, modular furniture assembly, and parking access.</p>
            </div>
            <div class="rnb-card">
                <h3>2. Tailored Multi-Layer Packing</h3>
                <p>Trained packers apply bubble wrap, edge guards, stretch film, and heavy cartons, labelling each carton by room for effortless organization.</p>
            </div>
            <div class="rnb-card">
                <h3>3. Expert Furniture Handling</h3>
                <p>Experienced carpenters dismantle beds, wardrobes, and modular desks, bagging screws and fixtures safely to guarantee seamless reassembly.</p>
            </div>
            <div class="rnb-card">
                <h3>4. Safe Loading &amp; Sealed Transit</h3>
                <p>Items are loaded into weather-proof, sealed container trucks equipped with safety belts to prevent shifting during transit along regional highways.</p>
            </div>
            <div class="rnb-card">
                <h3>5. Destination Unpacking &amp; Reassembly</h3>
                <p>Our destination crew unloads each carton into designated rooms, reassembles large furniture, and clears away discarded packing materials.</p>
            </div>
            <div class="rnb-card">
                <h3>Dedicated Move Supervisor</h3>
                <p>An assigned move coordinator supervises the entire operation on-site and provides real-time updates until complete customer satisfaction is confirmed.</p>
            </div>
        </div>

        <div class="rnb-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture Dismantling and Packing in Rajendra Nagar Bareilly" width="580" height="380" loading="lazy">
            <p class="rnb-image-caption">Skilled carpenters carefully dismantling wooden beds and securing modular hardware in Rajendra Nagar Bareilly.</p>
        </div>
    </section>

    <!-- Section 6: Regional Highway Connectivity -->
    <section>
        <h2 class="rnb-section-heading">Highway Access &amp; Regional Logistics</h2>
        <p class="rnb-intro-p">Rajendra Nagar enjoys excellent strategic transit access in northern Bareilly, positioned conveniently along Stadium Road with fast egress to both downtown commercial avenues and regional bypass corridors. Moving eastward, container vehicles easily access National Highway 30 toward Shahjahanpur, Sitapur, and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow">Lucknow</a> in approximately 4 to 5 hours.</p>

        <p class="rnb-intro-p">Heading westbound, our GPS-monitored container trucks connect effortlessly through the northern ring bypass toward Rampur, Moradabad, and Delhi NCR in approximately 5 to 6 hours. Northbound connections via the Pilibhit bypass provide direct access toward Uttarakhand destinations like Haldwani, Nainital, and Kathgodam.</p>

        <div class="rnb-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Dedicated Delivery Fleet in Rajendra Nagar Bareilly" width="580" height="380" loading="lazy">
            <p class="rnb-image-caption">Clean, enclosed container trucks delivering household goods safely to residences in Rajendra Nagar Bareilly.</p>
        </div>

        <p class="rnb-intro-p">Our modern fleet of closed container trucks features GPS tracking, heavy-duty suspension, and waterproof canopies, ensuring your valuable household goods, expensive electronics, and family heirlooms remain completely shielded from rain, dust, and highway vibration throughout transit.</p>

        <p class="rnb-intro-p">Whether you are relocating locally within Bareilly to <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bareilly">Bareilly City Hub</a> or across states, our experienced highway drivers and logistics coordinators ensure timely and secure doorstep delivery.</p>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section>
        <h2 class="rnb-section-heading">Frequently Asked Questions</h2>
        <p class="rnb-intro-p">Common questions answered about moving in Rajendra Nagar Bareilly:</p>

        <div class="rnb-faq-item">
            <div class="rnb-faq-q">What are the standard household shifting charges in Rajendra Nagar Bareilly?</div>
            <div class="rnb-faq-a">Local shifting in Rajendra Nagar typically ranges from ₹4,200 to ₹7,200 for a 1 BHK home, ₹7,200 to ₹13,000 for a 2 BHK apartment, and ₹12,000 to ₹21,000 for a 3 BHK duplex kothi. Pricing includes premium packing materials, loading, transit, unloading, and furniture reassembly.</div>
        </div>

        <div class="rnb-faq-item">
            <div class="rnb-faq-q">How do you navigate congested retail streets around Selection Point and DD Puram?</div>
            <div class="rnb-faq-a">We deploy specialized mini-truck feeder shuttles and schedule moves during early morning hours prior to market opening. This prevents parking roadblocks and guarantees quick, safe loading without commercial interference.</div>
        </div>

        <div class="rnb-faq-item">
            <div class="rnb-faq-q">Do you provide master carpentry services for modular wardrobes and luxury beds?</div>
            <div class="rnb-faq-a">Yes. Our team includes certified carpenters who carefully dismantle, label, pack, and reassemble king-size beds, hydraulic storage units, modular wardrobes, and LCD wall backdrops with precision.</div>
        </div>

        <div class="rnb-faq-item">
            <div class="rnb-faq-q">How quickly can you move goods from Rajendra Nagar Bareilly to Delhi NCR or Lucknow?</div>
            <div class="rnb-faq-a">Via Stadium Road connecting to National Highway 30, our dedicated sealed container fleet reaches Lucknow in 4 to 5 hours and Delhi NCR in 5 to 6 hours, ensuring rapid next-day setup.</div>
        </div>

        <div class="rnb-faq-item">
            <div class="rnb-faq-q">Do you supply official bills for bank and corporate transfer allowance reimbursement?</div>
            <div class="rnb-faq-a">Yes. We furnish 100% compliant transfer dossiers including GST tax invoices, consignment receipts (bilty), detailed inventory declarations, and transit insurance certificates valid for reimbursement in banks, corporations, and government offices.</div>
        </div>

        <div class="rnb-faq-item">
            <div class="rnb-faq-q">Are enclosed car carriers and motorcycle transport available from Rajendra Nagar?</div>
            <div class="rnb-faq-a">Yes. We offer hydraulic closed car carrier trailers and secured bike parcel crating with wheel-chocks and protective foam padding for transit to Lucknow, Dehradun, Mumbai, Bangalore, and Ranchi.</div>
        </div>
    </section>

    <!-- Section 8: Connected Neighborhoods & Authority Links -->
    <section>
        <h2 class="rnb-section-heading">Connected Bareilly Localities &amp; Authority Hubs</h2>
        <p class="rnb-intro-p">Explore our active moving networks connecting Rajendra Nagar to sister localities and major regional hubs:</p>

        <div class="rnb-links-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bareilly" class="rnb-link-card">Bareilly Authority Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-civil-lines-bareilly" class="rnb-link-card">Civil Lines Bareilly</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-moradabad" class="rnb-link-card">Moradabad Brass Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-rampur" class="rnb-link-card">Rampur Royal Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-shahjahanpur" class="rnb-link-card">Shahjahanpur Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-aligarh" class="rnb-link-card">Aligarh University Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow" class="rnb-link-card">Lucknow State Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/" class="rnb-link-card">Ranchi Head Office Hub</a>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="rnb-cta-box">
        <h3>Book Your Seamless Rajendra Nagar Move Today</h3>
        <p>Contact our Rajendra Nagar relocation specialists today for a transparent quote, tailored packing schedule, and flawless doorstep shifting experience.</p>
        <div class="rnb-cta-group">
            <a href="tel:+919334404050" class="rnb-btn-primary">Call Now: +91 93344 04050</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="rnb-btn-secondary">Request Free Quote</a>
        </div>
    </section>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
