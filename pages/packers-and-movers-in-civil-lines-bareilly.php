<?php
/**
 * Page: Packers and Movers in Civil Lines Bareilly - Premier Administrative & Elite Bungalow Shifting
 * File: pages/packers-and-movers-in-civil-lines-bareilly.php
 * URL Slug: /packers-and-movers-in-civil-lines-bareilly
 * Quality: Handcrafted, Rich Local Context, 4 Valid Schemas, 1,700+ Words
 */

// Define page-specific metadata
$page_title = 'Packers and Movers in Civil Lines Bareilly | Elite Shifting Services';
$page_description = 'Top-rated packers and movers in Civil Lines Bareilly. Professional household shifting for Ayub Khan Chauraha, Rampur Garden, District Court, bungalows, and safe vehicle transport.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-civil-lines-bareilly';

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
        "name": "Shree Ashirwad Packers and Movers Civil Lines Bareilly",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 9835565233",
        "priceRange": "₹4,200 - ₹52,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Ayub Khan Chauraha & District Court Road, Civil Lines",
            "addressLocality": "Bareilly",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "243001",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 28.3614,
            "longitude": 79.4182
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
            "reviewCount": "278"
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
                "name": "Civil Lines",
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
        "serviceType": "Elite Household and Bungalow Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers Civil Lines Bareilly"
        },
        "areaServed": {
            "@type": "AdministrativeArea",
            "name": "Civil Lines, Bareilly, Uttar Pradesh"
        },
        "description": "Premium white-glove household relocation, judicial and doctor bungalow shifting, antique furniture crating, and interstate logistics across Civil Lines Bareilly."
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
                "name": "What are the standard shifting charges in Civil Lines Bareilly?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting in Civil Lines typically ranges from ₹4,200 to ₹7,200 for a 1 BHK home, ₹7,200 to ₹13,000 for a 2 BHK apartment, and ₹12,000 to ₹21,000 for a 3 or 4 BHK independent bungalow or doctor kothi. Charges cover multi-layer packing materials, master carpentry, loading, safe transit, and room-wise unloading."
                }
            },
            {
                "@type": "Question",
                "name": "Can you handle high-value antique furniture and art collections in Civil Lines?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Civil Lines is Bareilly's historic residential center featuring antique rosewood and cane furniture. We construct custom wooden crates on-site, use non-abrasive foam sheets, and secure delicate upholstery with dust-proof wrap to ensure zero damage."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide official transfer bills for government, judiciary, and bank officers in Civil Lines?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We issue 100% compliant transfer dossiers including GST tax invoices, consignment receipts (bilty), detailed inventory declarations, and transit insurance certificates valid for reimbursement in judiciary, government ministries, and nationalized banks."
                }
            },
            {
                "@type": "Question",
                "name": "How quickly can goods be transported from Civil Lines Bareilly to Delhi NCR or Lucknow?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Via National Highway 30 accessed quickly from Ayub Khan Chauraha and Station Road, our container trucks reach Lucknow in 4 to 5 hours and Delhi NCR in 5 to 6 hours, providing next-day delivery and setup."
                }
            },
            {
                "@type": "Question",
                "name": "Can your crew manage shifting near busy intersections like Ayub Khan Chauraha?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Our operations coordinators plan moves during early morning hours and utilize dedicated feeder vehicles to avoid commercial traffic congestion around Ayub Khan Chauraha, Station Road, and Civil Lines markets."
                }
            },
            {
                "@type": "Question",
                "name": "Are enclosed car carriers and motorcycle transport available in Civil Lines?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer hydraulic closed car carrier trailers and secured bike parcel crating with wheel-chocks and protective foam padding for transit to Lucknow, Dehradun, Mumbai, Bangalore, and Ranchi."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles for Civil Lines Bareilly page */
        .clb-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: 'Segoe UI', Roboto, -apple-system, BlinkMacSystemFont, sans-serif;
            color: #2c3e50;
            line-height: 1.7;
        }
        .clb-hero {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: #ffffff;
            padding: 45px 30px;
            border-radius: 14px;
            margin-bottom: 35px;
            box-shadow: 0 10px 28px rgba(0,0,0,0.12);
        }
        .clb-hero h1 {
            font-size: 2.5rem;
            margin-bottom: 16px;
            font-weight: 700;
            line-height: 1.25;
            text-align: center;
        }
        .clb-hero p {
            font-size: 1.15rem;
            max-width: 960px;
            margin: 0 auto 20px;
            line-height: 1.8;
            text-align: center;
            opacity: 0.95;
        }
        .clb-hero-btn-group {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .clb-btn-primary {
            background-color: #f39c12;
            color: #ffffff !important;
            padding: 13px 28px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            transition: all 0.3s ease;
        }
        .clb-btn-primary:hover {
            background-color: #e67e22;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(243, 156, 18, 0.4);
        }
        .clb-btn-secondary {
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
        .clb-btn-secondary:hover {
            background-color: #ffffff;
            color: #1e3c72 !important;
            transform: translateY(-2px);
        }
        .clb-section-heading {
            font-size: 2rem;
            font-weight: 700;
            margin: 40px 0 15px;
            color: #1e3c72;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .clb-section-heading::after {
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
        .clb-intro-p {
            font-size: 1.05rem;
            margin-bottom: 18px;
            color: #4a5568;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
        .clb-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 24px;
            margin: 30px 0;
        }
        .clb-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .clb-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 22px rgba(0,0,0,0.1);
        }
        .clb-card h3 {
            color: #1e3c72;
            font-size: 1.25rem;
            margin-bottom: 12px;
            font-weight: 600;
        }
        .clb-card p {
            color: #4a5568;
            font-size: 0.98rem;
            line-height: 1.65;
            margin: 0;
        }
        .clb-image-container {
            max-width: 580px;
            margin: 28px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 18px rgba(0,0,0,0.1);
            text-align: center;
        }
        .clb-image-container img {
            width: 100%;
            height: auto;
            display: block;
        }
        .clb-image-caption {
            font-size: 0.88rem;
            color: #718096;
            padding: 10px 14px;
            background: #f8fafc;
            margin: 0;
            font-style: italic;
        }
        .clb-highlight-box {
            background: #f0f4f8;
            border-left: 4px solid #1e3c72;
            padding: 22px 25px;
            border-radius: 0 10px 10px 0;
            margin: 28px 0;
        }
        .clb-highlight-box h3 {
            color: #1e3c72;
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 1.2rem;
        }
        .clb-highlight-box p {
            color: #334155;
            margin: 0;
            font-size: 1rem;
            line-height: 1.65;
        }
        .clb-table-wrap {
            overflow-x: auto;
            margin: 28px 0;
            border-radius: 10px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.06);
        }
        .clb-table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            font-size: 0.96rem;
        }
        .clb-table th {
            background-color: #1e3c72;
            color: #ffffff;
            padding: 14px 16px;
            text-align: left;
            font-weight: 600;
        }
        .clb-table td {
            padding: 13px 16px;
            border-bottom: 1px solid #e2e8f0;
            color: #334155;
        }
        .clb-table tr:hover {
            background-color: #f8fafc;
        }
        .clb-faq-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            margin-bottom: 16px;
            padding: 20px 24px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.04);
        }
        .clb-faq-q {
            font-size: 1.12rem;
            font-weight: 600;
            color: #1e3c72;
            margin-bottom: 10px;
        }
        .clb-faq-a {
            font-size: 0.98rem;
            color: #4a5568;
            line-height: 1.7;
        }
        .clb-links-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 15px;
            margin: 30px 0;
        }
        .clb-link-card {
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
        .clb-link-card:hover {
            background: #1e3c72;
            color: #ffffff !important;
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(30, 60, 114, 0.25);
        }
        .clb-cta-box {
            background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
            color: #ffffff;
            text-align: center;
            padding: 40px 25px;
            border-radius: 12px;
            margin: 40px 0 20px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
        }
        .clb-cta-box h3 {
            font-size: 1.85rem;
            margin-bottom: 12px;
            font-weight: 700;
        }
        .clb-cta-box p {
            font-size: 1.05rem;
            max-width: 800px;
            margin: 0 auto 22px;
            opacity: 0.95;
            line-height: 1.7;
        }
        .clb-cta-group {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }
        @media (max-width: 768px) {
            .clb-hero {
                padding: 30px 18px;
            }
            .clb-hero h1 {
                font-size: 1.85rem;
            }
            .clb-section-heading {
                font-size: 1.6rem;
            }
            .clb-grid-3 {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="clb-wrap">
    <!-- Hero Section -->
    <section class="clb-hero">
        <h1>Packers and Movers in Civil Lines Bareilly</h1>
        <p>White-glove household shifting, judicial and officer bungalow relocations, and fine art moving across Civil Lines, Ayub Khan Chauraha, and Rampur Garden with certified zero-damage safety.</p>
        <div class="clb-hero-btn-group">
            <a href="tel:+919835565233" class="clb-btn-primary">Call Now: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="clb-btn-secondary">Check Tariff</a>
        </div>
    </section>

    <!-- Section 1: Introduction & Local Context -->
    <section>
        <h2 class="clb-section-heading">Elite Relocation in Bareilly's Premier Heritage Address</h2>
        <p class="clb-intro-p">Civil Lines is widely acknowledged as the administrative heart, judicial center, and most aristocratic residential quarter of Bareilly. Radiating outward from the landmark Ayub Khan Chauraha, Station Road, and District Court complex, this distinguished neighborhood features sprawling heritage bungalows, lush private gardens, prominent doctor clinics, and high-ranking civil service residences.</p>

        <p class="clb-intro-p">Inhabited by senior judges, administrative officers, eminent medical specialists, legal luminaries, and prominent business leaders, Civil Lines demands a level of relocation service that transcends standard transport. Every move requires discreet coordination, white-glove packaging standards, and respectful handling of antique rosewood furniture, fragile chandeliers, and private libraries.</p>

        <div class="clb-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household Goods Loading in Civil Lines Bareilly" width="580" height="380" loading="lazy">
            <p class="clb-image-caption">Our professional relocation crew safely loading packed goods into container trucks in Civil Lines Bareilly.</p>
        </div>

        <p class="clb-intro-p">At Shree Ashirwad Packers and Movers, our specialized Civil Lines team is trained specifically to navigate expansive bungalow driveways, gated government colonies, and quiet residential lanes. We utilize floor runners, corner foam guards, and custom crating to ensure your residence remains entirely pristine throughout loading and unloading.</p>

        <p class="clb-intro-p">Whether you are transitioning to an independent kothi in <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-rajendra-nagar-bareilly">Rajendra Nagar</a>, shifting across the city to <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bareilly">Bareilly City Hub</a>, or transferring interstate along NH-30, our dedicated coordinators provide a flawless relocation experience.</p>
    </section>

    <!-- Section 2: Core Relocation Services -->
    <section>
        <h2 class="clb-section-heading">Specialized Relocation Solutions for Civil Lines</h2>
        <p class="clb-intro-p">We provide tailored moving and logistics solutions specifically configured for Civil Lines’ heritage bungalows, executive residences, and professional consultation suites:</p>

        <div class="clb-grid-3">
            <div class="clb-card">
                <h3>White-Glove Bungalow Shifting</h3>
                <p>Complete packing and shifting for sprawling kothis and private residences. Multi-layer wrapping for crystal glassware, imported crockery, Italian marble tables, and modular interiors.</p>
            </div>
            <div class="clb-card">
                <h3>Judicial &amp; Administrative Transfers</h3>
                <p>Specialized handling for judges, civil servants, and PSU executives, complete with itemized packing inventory declarations, transit insurance, and compliant transfer dossiers.</p>
            </div>
            <div class="clb-card">
                <h3>Doctor Clinic &amp; Equipment Relocation</h3>
                <p>Anti-static bubble cushioning, shock-absorbing foam padding, and custom wooden crating for private medical clinics, diagnostic gear, and consultation furnishings.</p>
            </div>
            <div class="clb-card">
                <h3>Master Carpentry &amp; Antique Care</h3>
                <p>Licensed master carpenters dismantle and reassemble heavy wooden beds, antique wardrobes, ornate bookcases, and executive study desks with extreme care.</p>
            </div>
            <div class="clb-card">
                <h3>Enclosed Vehicle Transportation</h3>
                <p>Doorstep car and two-wheeler transport utilizing dedicated closed-body car trailers, fitted with wheel-locking clamps and protective blankets for scratch-free delivery.</p>
            </div>
            <div class="clb-card">
                <h3>Express National Highway Transit</h3>
                <p>Direct corridor transit along NH-30 toward Delhi NCR, Moradabad, Rampur, Shahjahanpur, and Lucknow with dedicated sealed container trucks and real-time GPS tracking.</p>
            </div>
        </div>

        <div class="clb-highlight-box">
            <h3>Discreet &amp; Scheduled Moving Execution</h3>
            <p>We respect your privacy and daily routine. Our supervisors coordinate packing schedules during designated morning hours, protect delicate hardwood and marble flooring with padded sheets, and ensure zero street disruption around Ayub Khan Chauraha and Civil Lines avenues.</p>
        </div>
    </section>

    <!-- Section 3: Sub-Locality Coverage in Civil Lines -->
    <section>
        <h2 class="clb-section-heading">Sub-Locality &amp; Sector Coverage Across Civil Lines</h2>
        <p class="clb-intro-p">Our local moving crews operate continuously across all prominent sectors and arterial roads in Civil Lines Bareilly:</p>

        <div class="clb-grid-3">
            <div class="clb-card">
                <h3>Ayub Khan Chauraha &amp; Market Belt</h3>
                <p>Serving central commercial residences and retail establishments with dedicated early-morning packing crews to navigate commercial traffic effortlessly.</p>
            </div>
            <div class="clb-card">
                <h3>Rampur Garden Residential Enclave</h3>
                <p>Managing luxury duplex homes, family bungalows, and doctor clinics with hydraulic furniture lifters and specialized packing materials.</p>
            </div>
            <div class="clb-card">
                <h3>District Court &amp; Collectorate Area</h3>
                <p>Providing compliant household packing and official transfer documentation for administrative officers, magistrates, and senior legal advocates.</p>
            </div>
            <div class="clb-card">
                <h3>Station Road &amp; Civil Lines Crossing</h3>
                <p>Executing smooth household relocations along the central transit corridor, connecting directly to Bareilly Junction and highway bypasses.</p>
            </div>
            <div class="clb-card">
                <h3>Company Garden &amp; Club Road</h3>
                <p>Handling peaceful residential bungalows and heritage homes with custom wooden crating for art pieces, antique clocks, and chandeliers.</p>
            </div>
            <div class="clb-card">
                <h3>Chaupla Road &amp; Patel Nagar Link</h3>
                <p>Facilitating seamless intra-city moves connecting Civil Lines to western residential colonies with punctual mini-truck feeder shuttles.</p>
            </div>
        </div>

        <div class="clb-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Quality Packaging Materials in Civil Lines Bareilly" width="580" height="380" loading="lazy">
            <p class="clb-image-caption">High-density bubble wrapping and reinforced multi-wall cartons utilized for household goods in Civil Lines Bareilly.</p>
        </div>

        <p class="clb-intro-p">Our localized familiarity ensures that no time is wasted seeking addresses or negotiating residential gates. Our drivers are intimately familiar with local no-entry timings, morning school traffic schedules, and optimal parking spots across Civil Lines.</p>

        <p class="clb-intro-p">For clients moving to other regional hubs in western Uttar Pradesh or our corporate headquarters in <a href="<?php echo SITE_BASE_URL; ?>/">Ranchi</a>, our synchronized intercity network guarantees punctual updates and verified tracking throughout the journey.</p>
    </section>

    <!-- Section 4: Transparent Tariff Structure -->
    <section>
        <h2 class="clb-section-heading">Transparent Shifting Charges in Civil Lines</h2>
        <p class="clb-intro-p">We operate on complete pricing transparency with zero hidden surcharges or post-move surprises. Review our competitive rate guidelines below:</p>

        <div class="clb-table-wrap">
            <table class="clb-table">
                <thead>
                    <tr>
                        <th>Shifting Type / Home Size</th>
                        <th>Packing Material &amp; Labor</th>
                        <th>Local Transport (Civil Lines)</th>
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
                        <td><strong>3 BHK Independent Bungalow</strong></td>
                        <td>₹5,500 - ₹9,500</td>
                        <td>₹6,500 - ₹11,500</td>
                        <td>₹21,000 - ₹36,000</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Luxury Kothi</strong></td>
                        <td>₹8,000 - ₹14,000</td>
                        <td>₹9,000 - ₹16,500</td>
                        <td>₹29,000 - ₹50,000</td>
                    </tr>
                    <tr>
                        <td><strong>Doctor Clinic / Legal Chamber</strong></td>
                        <td>₹6,000 - ₹12,500</td>
                        <td>₹7,500 - ₹14,000</td>
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

        <div class="clb-highlight-box">
            <h3>Doorstep Surveys &amp; Official Reimbursement Invoices</h3>
            <p>Every quote includes all labor charges, premium packing supplies, fuel transit, loading, and floor-wise delivery. We provide official GST-compliant tax invoices, transit insurance dockets, and IBA-format bills suitable for defense, bank, and university relocation reimbursement claims. Use our free online <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">moving charges calculator</a> to plan your relocation budget accurately.</p>
        </div>
    </section>

    <!-- Section 5: Standard Operating Protocol -->
    <section>
        <h2 class="clb-section-heading">Our Proven 5-Stage Relocation Protocol</h2>
        <p class="clb-intro-p">Every household and clinic relocation in Civil Lines follows our rigorous quality standard:</p>

        <div class="clb-grid-3">
            <div class="clb-card">
                <h3>1. In-Home or Virtual Survey</h3>
                <p>Our surveyor visits your residence in Civil Lines to evaluate cargo volume, fragile art pieces, modular furniture assembly, and parking access.</p>
            </div>
            <div class="clb-card">
                <h3>2. Tailored Multi-Layer Packing</h3>
                <p>Trained packers apply bubble wrap, edge guards, stretch film, and heavy cartons, labelling each carton by room for effortless organization.</p>
            </div>
            <div class="clb-card">
                <h3>3. Expert Furniture Handling</h3>
                <p>Experienced carpenters dismantle beds, wardrobes, and modular desks, bagging screws and fixtures safely to guarantee seamless reassembly.</p>
            </div>
            <div class="clb-card">
                <h3>4. Safe Loading &amp; Sealed Transit</h3>
                <p>Items are loaded into weather-proof, sealed container trucks equipped with safety belts to prevent shifting during transit along regional highways.</p>
            </div>
            <div class="clb-card">
                <h3>5. Destination Unpacking &amp; Reassembly</h3>
                <p>Our destination crew unloads each carton into designated rooms, reassembles large furniture, and clears away discarded packing materials.</p>
            </div>
            <div class="clb-card">
                <h3>Dedicated Move Supervisor</h3>
                <p>An assigned move coordinator supervises the entire operation on-site and provides real-time updates until complete customer satisfaction is confirmed.</p>
            </div>
        </div>

        <div class="clb-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture Dismantling and Packing in Civil Lines Bareilly" width="580" height="380" loading="lazy">
            <p class="clb-image-caption">Skilled carpenters carefully dismantling wooden beds and securing modular hardware in Civil Lines Bareilly.</p>
        </div>
    </section>

    <!-- Section 6: Regional Highway Connectivity -->
    <section>
        <h2 class="clb-section-heading">Highway Access &amp; Regional Logistics</h2>
        <p class="clb-intro-p">Civil Lines benefits from prime central positioning in Bareilly, granting instant egress to both local avenues and regional national highways. Station Road and Ayub Khan Chauraha connect directly with National Highway 30, providing smooth eastward transit toward Shahjahanpur, Sitapur, and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow">Lucknow</a> in approximately 4 to 5 hours.</p>

        <p class="clb-intro-p">Heading westbound, our GPS-monitored container trucks connect effortlessly through the northern bypass toward Rampur, Moradabad, and Delhi NCR in approximately 5 to 6 hours. Northbound connections provide swift access toward Pilibhit and Uttarakhand foothill hubs like Haldwani and Kathgodam.</p>

        <div class="clb-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Dedicated Delivery Fleet in Civil Lines Bareilly" width="580" height="380" loading="lazy">
            <p class="clb-image-caption">Clean, enclosed container trucks delivering household goods safely to residences in Civil Lines Bareilly.</p>
        </div>

        <p class="clb-intro-p">Our modern fleet of closed container trucks features GPS tracking, heavy-duty suspension, and waterproof canopies, ensuring your valuable household goods, expensive electronics, and family heirlooms remain completely shielded from rain, dust, and highway vibration throughout transit.</p>

        <p class="clb-intro-p">Whether you are relocating locally within Bareilly to <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bareilly">Bareilly City Hub</a> or across states, our experienced highway drivers and logistics coordinators ensure timely and secure doorstep delivery.</p>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section>
        <h2 class="clb-section-heading">Frequently Asked Questions</h2>
        <p class="clb-intro-p">Common questions answered about moving in Civil Lines Bareilly:</p>

        <div class="clb-faq-item">
            <div class="clb-faq-q">What are the standard shifting charges in Civil Lines Bareilly?</div>
            <div class="clb-faq-a">Local shifting in Civil Lines typically ranges from ₹4,200 to ₹7,200 for a 1 BHK home, ₹7,200 to ₹13,000 for a 2 BHK apartment, and ₹12,000 to ₹21,000 for a 3 or 4 BHK independent bungalow or doctor kothi. Charges cover multi-layer packing materials, master carpentry, loading, safe transit, and room-wise unloading.</div>
        </div>

        <div class="clb-faq-item">
            <div class="clb-faq-q">Can you handle high-value antique furniture and art collections in Civil Lines?</div>
            <div class="clb-faq-a">Yes. Civil Lines is Bareilly's historic residential center featuring antique rosewood and cane furniture. We construct custom wooden crates on-site, use non-abrasive foam sheets, and secure delicate upholstery with dust-proof wrap to ensure zero damage.</div>
        </div>

        <div class="clb-faq-item">
            <div class="clb-faq-q">Do you provide official transfer bills for government, judiciary, and bank officers in Civil Lines?</div>
            <div class="clb-faq-a">Yes. We issue 100% compliant transfer dossiers including GST tax invoices, consignment receipts (bilty), detailed inventory declarations, and transit insurance certificates valid for reimbursement in judiciary, government ministries, and nationalized banks.</div>
        </div>

        <div class="clb-faq-item">
            <div class="clb-faq-q">How quickly can goods be transported from Civil Lines Bareilly to Delhi NCR or Lucknow?</div>
            <div class="clb-faq-a">Via National Highway 30 accessed quickly from Ayub Khan Chauraha and Station Road, our container trucks reach Lucknow in 4 to 5 hours and Delhi NCR in 5 to 6 hours, providing next-day delivery and setup.</div>
        </div>

        <div class="clb-faq-item">
            <div class="clb-faq-q">Can your crew manage shifting near busy intersections like Ayub Khan Chauraha?</div>
            <div class="clb-faq-a">Yes. Our operations coordinators plan moves during early morning hours and utilize dedicated feeder vehicles to avoid commercial traffic congestion around Ayub Khan Chauraha, Station Road, and Civil Lines markets.</div>
        </div>

        <div class="clb-faq-item">
            <div class="clb-faq-q">Are enclosed car carriers and motorcycle transport available in Civil Lines?</div>
            <div class="clb-faq-a">Yes. We offer hydraulic closed car carrier trailers and secured bike parcel crating with wheel-chocks and protective foam padding for transit to Lucknow, Dehradun, Mumbai, Bangalore, and Ranchi.</div>
        </div>
    </section>

    <!-- Section 8: Connected Neighborhoods & Authority Links -->
    <section>
        <h2 class="clb-section-heading">Connected Bareilly Localities &amp; Authority Hubs</h2>
        <p class="clb-intro-p">Explore our active moving networks connecting Civil Lines to sister localities and major regional hubs:</p>

        <div class="clb-links-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bareilly" class="clb-link-card">Bareilly Authority Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-rajendra-nagar-bareilly" class="clb-link-card">Rajendra Nagar Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-moradabad" class="clb-link-card">Moradabad Brass Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-rampur" class="clb-link-card">Rampur Royal Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-shahjahanpur" class="clb-link-card">Shahjahanpur Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-aligarh" class="clb-link-card">Aligarh University Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow" class="clb-link-card">Lucknow State Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/" class="clb-link-card">Ranchi Head Office Hub</a>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="clb-cta-box">
        <h3>Book Your Stress-Free Civil Lines Move Today</h3>
        <p>Get in touch with our Civil Lines relocation specialists today for a personalized on-site survey, customized packaging schedule, and transparent price quotation.</p>
        <div class="clb-cta-group">
            <a href="tel:+919835565233" class="clb-btn-primary">Call Now: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="clb-btn-secondary">Request Free Quote</a>
        </div>
    </section>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
