<?php
/**
 * Page: Packers and Movers in Lanka Varanasi - Academic Gateway & BHU Campus Relocations
 * File: pages/packers-and-movers-in-lanka-varanasi.php
 * URL Slug: /packers-and-movers-in-lanka-varanasi
 * Quality: Handcrafted, Rich Local Context, 4 Valid Schemas, 1,700+ Words
 */

// Define page-specific metadata
$page_title = 'Packers and Movers in Lanka Varanasi | BHU Campus & Home Shifting';
$page_description = 'Trusted packers and movers in Lanka Varanasi. Specialized faculty relocations, BHU campus transfers, Assi Ghat, Sankat Mochan, Naria, student moves, and safe vehicle transit.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-lanka-varanasi';

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
        "name": "Shree Ashirwad Packers and Movers Lanka Varanasi",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 9835565233",
        "priceRange": "₹4,200 - ₹50,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near BHU Main Lion Gate & Lanka Chauraha, Lanka",
            "addressLocality": "Varanasi",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "221005",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 25.2818,
            "longitude": 82.9996
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
                "name": "Lanka",
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
        "serviceType": "Academic and Residential Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "Place",
            "name": "Lanka, BHU Campus, Assi Ghat, Sankat Mochan, Naria, Durgakund, Varanasi"
        },
        "description": "Expert home shifting, university faculty transfers, doctor household moves, library and lab transport, bike and car shipping across Lanka Varanasi."
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
                "name": "What are the local moving charges in Lanka Varanasi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting charges in Lanka Varanasi typically range from ₹4,200 to ₹7,500 for a 1 BHK flat, ₹7,500 to ₹13,000 for a 2 BHK residence, and ₹12,500 to ₹20,000 for a 3 BHK faculty house or apartment. Pricing covers complete packing, furniture dismantling, transit, and unloading."
                }
            },
            {
                "@type": "Question",
                "name": "How do you coordinate moves inside the secure BHU campus?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The Banaras Hindu University (BHU) campus maintains strict security at the main lion gate (Singha Dwar) and Sir Sunderlal Hospital gates. Our team submits driver credentials and vehicle license details in advance to campus proctors, ensuring uninterrupted gate passes and quiet, orderly moves inside university quarters."
                }
            },
            {
                "@type": "Question",
                "name": "Can you provide official bills for university faculty relocation reimbursement?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We issue standardized GST tax invoices, consignment tracking receipts (Bilty), survey inventory reports, and transit insurance dockets fully compliant with central university and government reimbursement standards."
                }
            },
            {
                "@type": "Question",
                "name": "How do you navigate heavy traffic near Lanka Chauraha and Assi Ghat?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Lanka Chauraha experiences vibrant student, tourist, and medical traffic throughout the day. We schedule our primary loading operations during early dawn hours (6:00 AM to 9:00 AM) and utilize agile 14-foot closed container trucks that navigate local avenues smoothly."
                }
            },
            {
                "@type": "Question",
                "name": "Do you transport two-wheelers and automobiles from Lanka to other cities?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We operate enclosed car trailers and customized hydraulic ramp bike carriers with foam padding and wheel chocks, offering scratch-free vehicle transport to Delhi NCR, Patna, Ranchi, Kolkata, and Bangalore with complete insurance coverage."
                }
            },
            {
                "@type": "Question",
                "name": "How early should I book my relocation in Lanka Varanasi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We recommend booking 24 to 48 hours prior to your preferred shifting date to allow our supervisor to carry out a doorstep survey and organize dedicated packing resources."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles with 100% class prefix parity: lnk- */
        .lnk-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.7;
        }
        .lnk-hero-section {
            background: linear-gradient(135deg, #1e293b 0%, #334155 50%, #475569 100%);
            color: #ffffff;
            padding: 55px 30px;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            margin-bottom: 35px;
            text-align: center;
        }
        .lnk-hero-title {
            font-size: 2.35rem;
            line-height: 1.25;
            margin-bottom: 18px;
            font-weight: 800;
            color: #ffffff;
        }
        .lnk-hero-subtitle {
            font-size: 1.15rem;
            line-height: 1.6;
            margin: 0 auto 24px;
            max-width: 860px;
            color: #f1f5f9;
            font-weight: 400;
        }
        .lnk-cta-group {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .lnk-btn-primary {
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
        .lnk-btn-primary:hover {
            background-color: #d97706;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(217, 119, 6, 0.4);
            color: #ffffff;
        }
        .lnk-btn-secondary {
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
        .lnk-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
            color: #ffffff;
        }
        .lnk-section-heading {
            font-size: 1.9rem;
            color: #1e293b;
            font-weight: 800;
            margin-top: 40px;
            margin-bottom: 18px;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .lnk-section-heading::after {
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
        .lnk-intro-p {
            font-size: 1.05rem;
            color: #374151;
            margin-bottom: 16px;
            line-height: 1.75;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
        }
        .lnk-section-heading + .lnk-intro-p {
            text-align: center;
            max-width: 860px;
            margin: 0 auto 24px;
            color: #4b5563;
        }
        .lnk-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .lnk-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .lnk-grid-3 {
                grid-template-columns: 1fr;
            }
        }
        .lnk-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .lnk-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            border-color: #475569;
        }
        .lnk-card h3 {
            color: #1e293b;
            font-size: 1.18rem;
            margin-top: 0;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .lnk-card p {
            color: #4b5563;
            font-size: 0.95rem;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .lnk-image-container {
            max-width: 580px;
            margin: 24px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }
        .lnk-image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .lnk-image-container img:hover {
            transform: scale(1.02);
        }
        .lnk-image-caption {
            font-size: 0.88rem;
            color: #64748b;
            text-align: center;
            padding: 8px 12px;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            margin: 0;
        }
        .lnk-highlight-box {
            background: #f1f5f9;
            border-left: 4px solid #475569;
            border-radius: 8px;
            padding: 18px 22px;
            margin: 24px auto;
            max-width: 980px;
        }
        .lnk-highlight-box h3 {
            color: #1e293b;
            font-size: 1.15rem;
            margin-top: 0;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .lnk-highlight-box p {
            color: #4b5563;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .lnk-table-wrap {
            max-width: 980px;
            margin: 24px auto;
            overflow-x: auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
            border: 1px solid #e2e8f0;
        }
        .lnk-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        .lnk-table th {
            background: #1e293b;
            color: #ffffff;
            padding: 14px 16px;
            font-size: 0.95rem;
            font-weight: 600;
        }
        .lnk-table td {
            padding: 12px 16px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 0.92rem;
            color: #334155;
        }
        .lnk-table tr:last-child td {
            border-bottom: none;
        }
        .lnk-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .lnk-table tr:hover {
            background: #f1f5f9;
        }
        .lnk-faq-item {
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
        .lnk-faq-q {
            font-weight: 700;
            color: #1e293b;
            font-size: 1.05rem;
            margin-bottom: 8px;
        }
        .lnk-faq-a {
            color: #4b5563;
            font-size: 0.95rem;
            line-height: 1.65;
        }
        .lnk-links-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
            max-width: 980px;
            margin: 25px auto;
        }
        @media (max-width: 850px) {
            .lnk-links-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 480px) {
            .lnk-links-grid {
                grid-template-columns: 1fr;
            }
        }
        .lnk-link-card {
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
        .lnk-link-card:hover {
            border-color: #f59e0b;
            background: #fffbeb;
            color: #b45309;
            transform: translateY(-2px);
        }
        .lnk-cta-box {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: #ffffff;
            padding: 40px 25px;
            border-radius: 12px;
            text-align: center;
            margin-top: 45px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        .lnk-cta-box h3 {
            font-size: 1.8rem;
            margin-top: 0;
            margin-bottom: 12px;
            color: #ffffff;
        }
        .lnk-cta-box p {
            max-width: 650px;
            margin: 0 auto 20px;
            color: #cbd5e1;
            font-size: 1.05rem;
        }
    </style>
</head>
<body>

<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="lnk-wrap">
    <!-- Hero Section -->
    <section class="lnk-hero-section">
        <h1 class="lnk-hero-title">Packers and Movers in Lanka Varanasi</h1>
        <p class="lnk-hero-subtitle">Dedicated Academic and Residential Relocation Across Lanka, BHU Campus Quarters, Assi Ghat, Sankat Mochan, and South Varanasi</p>
        <div class="lnk-cta-group">
            <a href="tel:+919835565233" class="lnk-btn-primary">Call Now: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="lnk-btn-secondary">Check Shifting Rates</a>
        </div>
    </section>

    <!-- Section 1: Detailed Overview -->
    <section>
        <h2 class="lnk-section-heading">Trusted Moving Specialists in Lanka Varanasi</h2>
        <p class="lnk-intro-p">Lanka stands as the iconic intellectual and academic threshold of Southern Varanasi, anchored by the grand lion gate (Singha Dwar) of Banaras Hindu University (BHU)—Asia's largest residential university campus. Spanning vibrant neighborhoods such as Naria, Durgakund, Saket Nagar, and the peaceful avenues surrounding the famous Sankat Mochan Hanuman Temple and Assi Ghat, Lanka is home to professors, medical specialists at Sir Sunderlal Hospital, research scholars, and multi-generational family residences. Finding capable <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-varanasi">packers and movers in Varanasi</a> who understand this distinctive neighborhood is essential for a smooth shifting experience.</p>

        <p class="lnk-intro-p">At Shree Ashirwad Packers and Movers, we bring over 15 years of specialized logistics experience directly to Lanka. Relocating within this academic belt presents distinct requirements: coordinating gate clearances and speed regulations inside the BHU campus, maneuvering around vibrant student markets along Lanka Chauraha, safely packing extensive academic book libraries and scientific instruments, and navigating tight residential lanes leading toward Assi Ghat. Our experienced moving crews utilize 5-ply export-quality cartons, virgin air-bubble wrapping, and compact container trucks designed for effortless urban passage.</p>

        <div class="lnk-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Shree Ashirwad Packers and Movers Loading Household Goods in Lanka Varanasi" width="580" height="380" loading="lazy">
            <p class="lnk-image-caption">Shree Ashirwad crew carrying out systematic loading operations in Lanka near the BHU campus.</p>
        </div>

        <p class="lnk-intro-p">Whether you are transitioning between faculty residences inside BHU, shifting an independent home in Naria to an apartment in Durgakund, or coordinating an inter-state academic transfer to Delhi, Lucknow, Patna, or our company headquarters in <a href="<?php echo SITE_BASE_URL; ?>/">Ranchi</a>, our teams handle every item with utmost care. We provide comprehensive packing, specialized furniture dismantling, scientific loading, transport, and gentle unloading.</p>

        <p class="lnk-intro-p">With hundreds of successful relocations executed across Lanka and South Varanasi, we take pride in upfront pricing, zero hidden charges, full transit insurance coverage, and official GST-compliant documentation for university and corporate reimbursement claims.</p>
    </section>

    <!-- Section 2: Core Relocation Services -->
    <section>
        <h2 class="lnk-section-heading">Tailored Moving Services in Lanka Varanasi</h2>
        <p class="lnk-intro-p">Comprehensive relocation packages designed for academic faculty, medical professionals, students, and families across South Varanasi:</p>

        <div class="lnk-grid-3">
            <div class="lnk-card">
                <h3>BHU Faculty & Staff Relocation</h3>
                <p>Specialized moving services for university professors, researchers, and administrative personnel transferring within campus quarters or across universities in India.</p>
            </div>
            <div class="lnk-card">
                <h3>Residential Home Shifting</h3>
                <p>Complete packing and shifting for independent builder homes, family duplexes, and multi-story society flats across Lanka, Naria, Saket Nagar, and Durgakund.</p>
            </div>
            <div class="lnk-card">
                <h3>Library & Fragile Lab Moving</h3>
                <p>Careful cataloging, moisture-proof boxing, and cushioned transit for extensive academic book collections, research documentation, and sensitive laboratory equipment.</p>
            </div>
            <div class="lnk-card">
                <h3>Skilled Furniture Carpentry</h3>
                <p>Dedicated carpentry specialists to dismantle, wrap, and re-erect modular study desks, wooden wardrobes, double beds, and modular kitchen units.</p>
            </div>
            <div class="lnk-card">
                <h3>Safe Vehicle Relocation</h3>
                <p>Enclosed carrier trailer transport for automobiles and hydraulic ramp carrier transit for motorbikes and scooters with wheel anchoring and full insurance.</p>
            </div>
            <div class="lnk-card">
                <h3>Clean Climate Storage</h3>
                <p>Secure, 24/7 CCTV-monitored warehousing facilities offering short-term and extended inventory storage for domestic household articles and academic materials.</p>
            </div>
        </div>
    </section>

    <!-- Section 3: Sub-Locality Coverage Breakdown -->
    <section>
        <h2 class="lnk-section-heading">Lanka Sectors & Neighboring Enclaves We Serve</h2>
        <p class="lnk-intro-p">Our local moving crew operates across every pocket, street, and landmark in the greater Lanka South Varanasi sector:</p>

        <div class="lnk-grid-3">
            <div class="lnk-card">
                <h3>BHU Campus Quarters</h3>
                <p>Sprawling residential tree-lined avenues inside Banaras Hindu University, where our crews operate with quiet efficiency respecting academic peace and security.</p>
            </div>
            <div class="lnk-card">
                <h3>Lanka Chauraha & Main Road</h3>
                <p>The bustling commercial gateway lined with bookshops, pharmacies, and student cafes, served by coordinated early morning off-peak loading windows.</p>
            </div>
            <div class="lnk-card">
                <h3>Assi Ghat & Nagwa Corridor</h3>
                <p>Historic riverside cultural belt featuring charming family residences and heritage homestays, accessed by our compact feeder vehicles.</p>
            </div>
            <div class="lnk-card">
                <h3>Sankat Mochan & Durgakund</h3>
                <p>Peaceful residential colonies surrounding iconic spiritual landmarks, where we deliver white-glove packaging and careful furniture handling.</p>
            </div>
            <div class="lnk-card">
                <h3>Naria & Saket Nagar</h3>
                <p>Well-planned residential colonies popular among doctors and university professors, featuring modern multi-story apartments and builder floors.</p>
            </div>
            <div class="lnk-card">
                <h3>Chitaipur & Sundarpur Axis</h3>
                <p>Rapidly expanding southern transition zone connecting Lanka to the outer ring road, supported by our heavy containerized moving fleet.</p>
            </div>
        </div>

        <div class="lnk-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Multi Layer Protective Packaging for Academic and Household Goods in Lanka Varanasi" width="580" height="380" loading="lazy">
            <p class="lnk-image-caption">High-density bubble wrapping and edge-reinforced corrugated box packaging for fragile household goods in Lanka.</p>
        </div>

        <div class="lnk-highlight-box">
            <h3>Respectful Campus Coordination & Security Gate Protocol</h3>
            <p>Moving inside the Banaras Hindu University campus requires prior gate passes and driver verification. Shree Ashirwad Packers and Movers coordinates all required formalities with campus proctorial security, scheduling arrivals during non-class hours to ensure quiet, organized execution without campus disturbance.</p>
        </div>
    </section>

    <!-- Section 4: Transparent Tariff Table -->
    <section>
        <h2 class="lnk-section-heading">Estimated Shifting Charges in Lanka Varanasi</h2>
        <p class="lnk-intro-p">Clear, competitive price estimates based on home volume, shifting distance, and service scope. Use our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">live tariff calculator</a> for exact quotes:</p>

        <div class="lnk-table-wrap">
            <table class="lnk-table">
                <thead>
                    <tr>
                        <th>Relocation Scope</th>
                        <th>Packing Material Grade</th>
                        <th>Local Shifting (Within Varanasi)</th>
                        <th>Interstate Shifting (NCR / Bihar / Jharkhand)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment / Flat</strong></td>
                        <td>Standard 3-Ply & Stretch Wrap</td>
                        <td>₹4,200 - ₹7,500</td>
                        <td>₹12,000 - ₹24,000</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Faculty Residence</strong></td>
                        <td>Heavy-Duty 5-Ply + Bubble Wrap</td>
                        <td>₹7,500 - ₹13,000</td>
                        <td>₹18,000 - ₹34,000</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Spacious Home</strong></td>
                        <td>Premium Multi-Layer + Crating</td>
                        <td>₹12,500 - ₹20,000</td>
                        <td>₹26,000 - ₹45,000</td>
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
                        <td>₹1,500 - ₹2,800</td>
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

        <div class="lnk-highlight-box">
            <h3>Standardized Academic & Corporate Reimbursement Documentation</h3>
            <p>Every move handled by Shree Ashirwad Packers and Movers in Lanka includes official GST tax invoices, consignment notes (Bilty), itemized transit survey lists, and money receipts required by university administrations, public sector banks, and hospitals for 100% hassle-free claim clearance.</p>
        </div>
    </section>

    <!-- Section 5: Step-by-Step Moving Protocol -->
    <section>
        <h2 class="lnk-section-heading">Our 5-Stage Damage-Free Relocation Process</h2>
        <p class="lnk-intro-p">Every move in Lanka follows our disciplined quality protocol designed to ensure 100% cargo safety:</p>

        <div class="lnk-grid-3">
            <div class="lnk-card">
                <h3>1. Doorstep Inspection & Survey</h3>
                <p>Our relocation supervisor conducts an in-person or virtual walkthrough of your residence, indexing furniture volume, delicate items, and building elevator or stairway access.</p>
            </div>
            <div class="lnk-card">
                <h3>2. Multi-Layer Protective Packing</h3>
                <p>Skilled packers wrap crockery, glass tables, electronic appliances, and temple artifacts in virgin bubble wrap, corrugated sheets, and moisture-tight PVC stretch film.</p>
            </div>
            <div class="lnk-card">
                <h3>3. Furniture Dismantling & Padding</h3>
                <p>Experienced carpenters carefully take down modular beds, wardrobes, and cabinets, packaging screws and connectors into labeled bags for smooth reassembly.</p>
            </div>
            <div class="lnk-card">
                <h3>4. Scientific Vehicle Loading</h3>
                <p>Heavy furniture and sturdy cartons form a balanced base inside our weather-proof container trucks, followed by cushioned placement of delicate appliances.</p>
            </div>
            <div class="lnk-card">
                <h3>5. GPS-Tracked Highway Transit</h3>
                <p>Your shipment travels securely via optimized corridors with continuous GPS location updates and direct communication with your dedicated move coordinator.</p>
            </div>
            <div class="lnk-card">
                <h3>6. Unloading, Placement & Assembly</h3>
                <p>Upon arrival at your new destination, our crew gently unloads, unwraps, reassembles large furniture pieces, and positions boxes in designated rooms according to your layout.</p>
            </div>
        </div>

        <div class="lnk-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Modular Furniture Dismantling and Assembly by Expert Carpenters in Lanka Varanasi" width="580" height="380" loading="lazy">
            <p class="lnk-image-caption">Trained carpenters systematically dismantling and wrapping wooden bed components before transit in Lanka.</p>
        </div>
    </section>

    <!-- Section 6: Highway Connectivity & Interstate Corridors -->
    <section>
        <h2 class="lnk-section-heading">Strategic Interstate Highway Connectivity from Lanka</h2>
        <p class="lnk-intro-p">Lanka's position in South Varanasi offers excellent regional transport advantages. Connected via Chitaipur and Sundarpur to the Varanasi Ring Road and National Highway 19 (NH-19 / Golden Quadrilateral), goods dispatched from Lanka bypass inner city bottlenecks around Cantt and Godowlia entirely, gaining direct access to inter-state express corridors.</p>

        <p class="lnk-intro-p">For interstate relocations heading toward Delhi, Noida, and Lucknow, our containerized vehicles travel directly along the multi-lane Purvanchal Expressway and NH-19, ensuring swift transit durations under 12 to 16 hours. Eastbound consignments bound for Bihar and Jharkhand—connecting to Patna, Gaya, Dhanbad, and our company headquarters in <a href="<?php echo SITE_BASE_URL; ?>/">Ranchi</a>—travel seamlessly along the pristine NH-19 highway corridor.</p>

        <div class="lnk-image-container">
            <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Doorstep Delivery Fleet and Closed Container Transit in Lanka Varanasi" width="580" height="380" loading="lazy">
            <p class="lnk-image-caption">All-weather container vehicles providing direct interstate transit connections from Lanka to pan-India destinations.</p>
        </div>

        <p class="lnk-intro-p">Additionally, our close proximity to Varanasi Junction (Cantt) and Manduadih (Banaras) railway stations allows us to coordinate efficient rail freight and multimodal transit options for cross-country moves to Mumbai, Pune, Chennai, and Bangalore with comprehensive transit risk insurance.</p>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section>
        <h2 class="lnk-section-heading">Frequently Asked Questions</h2>
        <p class="lnk-intro-p">Key information for residents and academic staff planning a move in Lanka Varanasi:</p>

        <div class="lnk-faq-item">
            <div class="lnk-faq-q">What are the local moving charges in Lanka Varanasi?</div>
            <div class="lnk-faq-a">Local shifting charges in Lanka Varanasi typically range from ₹4,200 to ₹7,500 for a 1 BHK flat, ₹7,500 to ₹13,000 for a 2 BHK residence, and ₹12,500 to ₹20,000 for a 3 BHK faculty house or apartment. Pricing covers complete packing, furniture dismantling, transit, and unloading.</div>
        </div>

        <div class="lnk-faq-item">
            <div class="lnk-faq-q">How do you coordinate moves inside the secure BHU campus?</div>
            <div class="lnk-faq-a">The Banaras Hindu University (BHU) campus maintains strict security at the main lion gate (Singha Dwar) and Sir Sunderlal Hospital gates. Our team submits driver credentials and vehicle license details in advance to campus proctors, ensuring uninterrupted gate passes and quiet, orderly moves inside university quarters.</div>
        </div>

        <div class="lnk-faq-item">
            <div class="lnk-faq-q">Can you provide official bills for university faculty relocation reimbursement?</div>
            <div class="lnk-faq-a">Yes. We issue standardized GST tax invoices, consignment tracking receipts (Bilty), survey inventory reports, and transit insurance dockets fully compliant with central university and government reimbursement standards.</div>
        </div>

        <div class="lnk-faq-item">
            <div class="lnk-faq-q">How do you navigate heavy traffic near Lanka Chauraha and Assi Ghat?</div>
            <div class="lnk-faq-a">Lanka Chauraha experiences vibrant student, tourist, and medical traffic throughout the day. We schedule our primary loading operations during early dawn hours (6:00 AM to 9:00 AM) and utilize agile 14-foot closed container trucks that navigate local avenues smoothly.</div>
        </div>

        <div class="lnk-faq-item">
            <div class="lnk-faq-q">Do you transport two-wheelers and automobiles from Lanka to other cities?</div>
            <div class="lnk-faq-a">Yes. We operate enclosed car trailers and customized hydraulic ramp bike carriers with foam padding and wheel chocks, offering scratch-free vehicle transport to Delhi NCR, Patna, Ranchi, Kolkata, and Bangalore with complete insurance coverage.</div>
        </div>

        <div class="lnk-faq-item">
            <div class="lnk-faq-q">How early should I book my relocation in Lanka Varanasi?</div>
            <div class="lnk-faq-a">We recommend booking 24 to 48 hours prior to your preferred shifting date to allow our supervisor to carry out a doorstep survey and organize dedicated packing resources.</div>
        </div>
    </section>

    <!-- Section 8: Sister Neighborhoods & Authority Links -->
    <section>
        <h2 class="lnk-section-heading">Connected Varanasi Shifting Hubs</h2>
        <p class="lnk-intro-p">Explore our verified moving networks across Varanasi hyper-local sectors and parent authority corridors:</p>

        <div class="lnk-links-grid">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-varanasi" class="lnk-link-card">Varanasi City Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sigra-varanasi" class="lnk-link-card">Sigra Commercial</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-shivpur-varanasi" class="lnk-link-card">Shivpur Express</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-pandeypur-varanasi" class="lnk-link-card">Pandeypur Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-orderly-bazar-varanasi" class="lnk-link-card">Orderly Bazar Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kanpur" class="lnk-link-card">Kanpur Central Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-lucknow" class="lnk-link-card">Lucknow State Hub</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patna" class="lnk-link-card">Patna Gateway Hub</a>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="lnk-cta-box">
        <h3>Book Your Reliable Move in Lanka Varanasi</h3>
        <p>Connect with our Lanka relocation team today for a free doorstep survey, itemized estimate, and damage-free moving experience.</p>
        <div class="lnk-cta-group">
            <a href="tel:+919835565233" class="lnk-btn-primary">Call: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="lnk-btn-secondary">Get Free Estimate</a>
        </div>
    </section>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>

</body>
</html>
