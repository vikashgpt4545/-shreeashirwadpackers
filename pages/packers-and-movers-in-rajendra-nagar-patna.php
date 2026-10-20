<?php
/**
 * Page: Packers and Movers in Rajendra Nagar Patna
 * Tier: Tier 2 (Hyper-Local Neighborhood Hub)
 * Parent City Hub: pages/packers-and-movers-in-patna.php
 * Target URL: https://www.shreeashirwadpackers.com/packers-and-movers-in-rajendra-nagar-patna
 */

$page_title = "Packers and Movers in Rajendra Nagar Patna | Safe Shifting";
$page_description = "Reputed packers and movers in Rajendra Nagar Patna. Professional home shifting, railway terminal transfers, furniture crating across Dinkar Golambar, Nala Road & Road 1-14. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/packers-and-movers-in-rajendra-nagar-patna";
$current_page = 'services';

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/seo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="keywords" content="packers and movers in rajendra nagar patna, home shifting rajendra nagar, movers near rajendra nagar terminal, dinkar golambar packers patna, nala road furniture shifting, house relocation rajendra nagar patna, packers road no patna">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Data -->
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:url" content="<?php echo $canonical_url; ?>">
    <meta property="og:type" content="business.business">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/multistory-apartment-goods-loading-ranchi.jpg">
    <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/multistory-apartment-goods-loading-ranchi.jpg">

    <!-- Geo Tags -->
    <meta name="geo.region" content="IN-BR">
    <meta name="geo.placename" content="Rajendra Nagar, Patna">
    <meta name="geo.position" content="25.6022;85.1586">
    <meta name="ICBM" content="25.6022, 85.1586">

    <link rel="shortcut icon" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo SITE_BASE_URL; ?>/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Structured Data 1: MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Rajendra Nagar Patna Hub",
        "image": "<?php echo SITE_BASE_URL; ?>/images/multistory-apartment-goods-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91-8409531615",
        "priceRange": "₹3,500 - ₹48,000",
        "description": "Licensed packers and movers in Rajendra Nagar Patna offering premier home relocation, railway staff transfer packaging, furniture crating, and intercity transit across Dinkar Golambar, Nala Road, and Kumhrar.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Road No. 1, Near Dinkar Golambar, Rajendra Nagar",
            "addressLocality": "Patna",
            "addressRegion": "Bihar",
            "postalCode": "800016",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 25.6022,
            "longitude": 85.1586
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
            "opens": "07:00",
            "closes": "22:00"
        },
        "areaServed": [
            { "@type": "AdministrativeArea", "name": "Rajendra Nagar, Patna" },
            { "@type": "AdministrativeArea", "name": "Rajendra Nagar Terminal (RJPB), Patna" },
            { "@type": "AdministrativeArea", "name": "Dinkar Golambar, Patna" },
            { "@type": "AdministrativeArea", "name": "Nala Road, Patna" },
            { "@type": "AdministrativeArea", "name": "Arya Kumar Road, Patna" },
            { "@type": "AdministrativeArea", "name": "Moin-ul-Haq Stadium Area, Patna" },
            { "@type": "AdministrativeArea", "name": "Patna, Bihar" }
        ]
    }
    </script>

    <!-- Structured Data 2: BreadcrumbList Schema -->
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
                "name": "Packers and Movers in Patna",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patna"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Packers and Movers in Rajendra Nagar Patna",
                "item": "<?php echo $canonical_url; ?>"
            }
        ]
    }
    </script>

    <!-- Structured Data 3: Service Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Residential Household and Commercial Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers",
            "url": "https://www.shreeashirwadpackers.com"
        },
        "areaServed": {
            "@type": "AdministrativeArea",
            "name": "Rajendra Nagar, Patna, Bihar"
        },
        "description": "Professional residential relocation, furniture dismantling, railway terminal transfer moves, and intercity transportation in Rajendra Nagar, Patna."
    }
    </script>

    <!-- Structured Data 4: FAQPage Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What are the household shifting charges in Rajendra Nagar Patna?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting charges within Rajendra Nagar or to nearby Patna localities (such as Kankarbagh, Exhibition Road, or Gandhi Maidan) typically range from ₹3,500 to ₹6,500 for a 1 BHK flat, ₹6,500 to ₹12,000 for a 2 BHK apartment, and ₹11,000 to ₹18,500 for a 3 BHK residence. All quotes include packing materials, labor, transport, and unloading."
                }
            },
            {
                "@type": "Question",
                "name": "How do your moving vehicles manage narrow lanes across Road No. 1 to 14 in Rajendra Nagar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Rajendra Nagar's numbered residential avenues (Road 1 through 14) feature calm residential streets interspersed with parked personal cars. We deploy nimble 14-foot Tata 407 vehicles and Mahindra Bolero pickup shuttles that easily enter residential gates without causing road blockades."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide urgent packing for railway officers near Rajendra Nagar Terminal (RJPB)?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Rajendra Nagar Terminal is a prime railway junction where officers and operational personnel receive transfer postings. We provide fast same-day packing, itemized packing inventories, transit insurance, and GST-compliant invoices for seamless official claims reimbursement."
                }
            },
            {
                "@type": "Question",
                "name": "How do you handle heavy wooden furniture moving from Nala Road market?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Because Nala Road is Patna's central timber and furniture trade market, many Rajendra Nagar residences feature heavy teakwood and Sheesham dining sets and wardrobes. Our certified carpenters carefully dismantle, pad, and crate heavy woodwork, reassembling it at your destination."
                }
            },
            {
                "@type": "Question",
                "name": "How quickly can your survey supervisor visit my residence in Rajendra Nagar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our mobile operations unit is stationed near Dinkar Golambar. A dedicated survey supervisor can arrive at your flat or bungalow within 25 to 40 minutes for a free on-site inventory assessment and fixed-price quotation."
                }
            },
            {
                "@type": "Question",
                "name": "Are my household goods insured during intercity transport from Rajendra Nagar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide 100% comprehensive transit insurance coverage with national underwriting partners for all long-distance relocations from Rajendra Nagar to Ranchi, Jamshedpur, Kolkata, Delhi, or Bangalore."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped CSS for Rajendra Nagar Patna Page: Prefix rnp- */
        .rnp-hero {
            background: linear-gradient(135deg, #0e2b5c 0%, #061733 100%);
            color: #ffffff;
            padding: 60px 16px 50px;
            position: relative;
            text-align: center;
        }
        .rnp-hero-inner {
            max-width: 980px;
            margin: 0 auto;
        }
        .rnp-hero-badge {
            display: inline-block;
            background: #ff5722;
            color: #ffffff;
            padding: 6px 16px;
            font-size: 0.85rem;
            font-weight: 700;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            margin-bottom: 18px;
        }
        .rnp-hero-title {
            font-size: clamp(1.8rem, 3.5vw, 2.7rem);
            font-weight: 800;
            line-height: 1.25;
            margin-bottom: 18px;
            color: #ffffff;
        }
        .rnp-hero-desc {
            font-size: 1.05rem;
            line-height: 1.65;
            color: #d8e2f0;
            max-width: 820px;
            margin: 0 auto 28px;
        }
        .rnp-hero-pills {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-bottom: 25px;
        }
        .rnp-pill {
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.22);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.88rem;
            color: #ffffff;
        }
        .rnp-quick-bar {
            display: flex;
            justify-content: center;
            gap: 14px;
            flex-wrap: wrap;
            margin-top: 15px;
        }
        .rnp-quick-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #ff5722;
            color: #ffffff !important;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 0.95rem;
            text-decoration: none;
            transition: transform 0.2s ease, background 0.2s ease;
        }
        .rnp-quick-btn:hover {
            background: #e64a19;
            transform: translateY(-2px);
        }
        .rnp-quick-btn.rnp-sec-btn {
            background: #25d366;
        }
        .rnp-quick-btn.rnp-sec-btn:hover {
            background: #1ebc59;
        }
        .rnp-section {
            padding: 55px 16px;
        }
        .rnp-section.rnp-bg-alt {
            background: #f8fafc;
        }
        .rnp-container {
            max-width: 1140px;
            margin: 0 auto;
        }
        .rnp-section-header {
            text-align: center;
            margin-bottom: 40px;
        }
        .rnp-section-title {
            font-size: clamp(1.5rem, 2.8vw, 2.1rem);
            font-weight: 800;
            color: #0e2b5c;
            margin-bottom: 12px;
            line-height: 1.3;
        }
        .rnp-section-subtitle {
            font-size: 1rem;
            color: #556987;
            max-width: 780px;
            margin: 0 auto;
            line-height: 1.6;
        }
        .rnp-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 28px;
            align-items: center;
        }
        .rnp-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }
        .rnp-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }
        @media (max-width: 900px) {
            .rnp-grid-3, .rnp-grid-4 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 768px) {
            .rnp-grid-2, .rnp-grid-3, .rnp-grid-4 {
                grid-template-columns: 1fr;
            }
        }
        .rnp-card {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            padding: 24px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.04);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .rnp-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.08);
        }
        .rnp-card-icon {
            font-size: 1.8rem;
            color: #ff5722;
            margin-bottom: 14px;
            display: inline-block;
        }
        .rnp-card-title {
            font-size: 1.15rem;
            font-weight: 700;
            color: #0e2b5c;
            margin-bottom: 10px;
            line-height: 1.4;
        }
        .rnp-card-text {
            font-size: 0.94rem;
            color: #556987;
            line-height: 1.6;
            margin: 0;
        }
        .rnp-image-box {
            max-width: 580px;
            margin: 20px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            background: #eef2f6;
        }
        .rnp-image-box img {
            width: 100%;
            height: auto;
            max-height: 420px;
            object-fit: cover;
            display: block;
        }
        .rnp-image-caption {
            font-size: 0.85rem;
            color: #64748b;
            text-align: center;
            padding: 10px 14px;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            margin: 0;
            font-style: italic;
        }
        .rnp-table-wrapper {
            overflow-x: auto;
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 14px rgba(0,0,0,0.04);
            margin: 24px 0;
        }
        .rnp-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.94rem;
        }
        .rnp-table th {
            background: #0e2b5c;
            color: #ffffff;
            padding: 14px 16px;
            font-weight: 700;
        }
        .rnp-table td {
            padding: 13px 16px;
            border-bottom: 1px solid #edf2f7;
            color: #334155;
        }
        .rnp-table tr:last-child td {
            border-bottom: none;
        }
        .rnp-table tr:hover td {
            background: #f8fafc;
        }
        .rnp-process-step {
            display: flex;
            gap: 18px;
            background: #ffffff;
            padding: 22px;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            margin-bottom: 16px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.03);
        }
        .rnp-process-num {
            flex-shrink: 0;
            width: 44px;
            height: 44px;
            background: #0e2b5c;
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 1.1rem;
        }
        .rnp-process-content h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: #0e2b5c;
            margin: 0 0 8px;
        }
        .rnp-process-content p {
            font-size: 0.93rem;
            color: #556987;
            line-height: 1.6;
            margin: 0;
        }
        .rnp-faq-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            margin-bottom: 14px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
        }
        .rnp-faq-question {
            padding: 18px 20px;
            font-weight: 700;
            color: #0e2b5c;
            font-size: 1.02rem;
            background: #ffffff;
            border-bottom: 1px solid #edf2f7;
        }
        .rnp-faq-answer {
            padding: 16px 20px 20px;
            color: #556987;
            font-size: 0.93rem;
            line-height: 1.65;
        }
        .rnp-cluster-box {
            background: #f1f5f9;
            border-radius: 12px;
            padding: 28px;
            border: 1px solid #e2e8f0;
            margin-top: 25px;
        }
        .rnp-cluster-link {
            display: inline-block;
            background: #ffffff;
            color: #0e2b5c;
            padding: 9px 16px;
            border-radius: 8px;
            border: 1px solid #cbd5e1;
            font-size: 0.88rem;
            font-weight: 600;
            text-decoration: none;
            margin: 5px;
            transition: all 0.2s ease;
        }
        .rnp-cluster-link:hover {
            background: #ff5722;
            color: #ffffff;
            border-color: #ff5722;
            transform: translateY(-2px);
        }
        .rnp-cta-box {
            background: linear-gradient(135deg, #0e2b5c 0%, #1e3a8a 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 40px 24px;
            text-align: center;
            margin-top: 35px;
        }
        .rnp-cta-title {
            font-size: clamp(1.4rem, 2.5vw, 1.9rem);
            font-weight: 800;
            margin-bottom: 12px;
            color: #ffffff;
        }
        .rnp-cta-desc {
            font-size: 0.98rem;
            color: #cbd5e1;
            max-width: 650px;
            margin: 0 auto 24px;
            line-height: 1.6;
        }
        .rnp-cta-btn {
            display: inline-block;
            background: #ff5722;
            color: #ffffff !important;
            padding: 14px 30px;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 700;
            text-decoration: none;
            box-shadow: 0 4px 14px rgba(255, 87, 34, 0.4);
            transition: background 0.2s ease, transform 0.2s ease;
        }
        .rnp-cta-btn:hover {
            background: #e64a19;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
<?php require_once __DIR__ . '/../includes/header.php'; ?>

<!-- Breadcrumb Navigation Bar -->
<div style="background: #f1f5f9; padding: 12px 16px; border-bottom: 1px solid #e2e8f0; font-size: 0.88rem;">
    <div class="rnp-container">
        <a href="<?php echo SITE_BASE_URL; ?>/" style="color: #0e2b5c; text-decoration: none; font-weight: 600;">Home</a>
        <span style="margin: 0 8px; color: #94a3b8;">/</span>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patna" style="color: #0e2b5c; text-decoration: none; font-weight: 600;">Packers and Movers in Patna</a>
        <span style="margin: 0 8px; color: #94a3b8;">/</span>
        <span style="color: #64748b; font-weight: 600;">Rajendra Nagar</span>
    </div>
</div>

<!-- Hero Section -->
<section class="rnp-hero">
    <div class="rnp-hero-inner">
        <span class="rnp-hero-badge">Central Patna Residential & Terminal Experts</span>
        <h1 class="rnp-hero-title">Packers and Movers in Rajendra Nagar Patna</h1>
        <p class="rnp-hero-desc">
            Shree Ashirwad Packers and Movers delivers dependable, damage-free household shifting, railway staff transfer packaging, and antique furniture relocation across Rajendra Nagar, Patna. Serving Dinkar Golambar, Road No. 1 to 14, Nala Road, Arya Kumar Road, and Rajendra Nagar Terminal (RJPB) with five-layer protective packaging, expert carpentry, and prompt local transit.
        </p>
        <div class="rnp-hero-pills">
            <span class="rnp-pill">✓ 25-Min Doorstep Survey</span>
            <span class="rnp-pill">✓ Heavy Teakwood Furniture Specialists</span>
            <span class="rnp-pill">✓ Railway Official Transfer Claims</span>
            <span class="rnp-pill">✓ Zero Scratch Handling</span>
            <span class="rnp-pill">✓ 100% Comprehensive Transit Cover</span>
        </div>
        <div class="rnp-quick-bar">
            <a href="tel:+918409531615" class="rnp-quick-btn">
                <span>📞 Call 8409531615</span>
            </a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20home%20shifting%20in%20Rajendra%20Nagar%20Patna" class="rnp-quick-btn rnp-sec-btn" target="_blank" rel="noopener noreferrer">
                <span>💬 WhatsApp Quick Quote</span>
            </a>
        </div>
    </div>
</section>

<!-- Section 1: Detailed Neighborhood Dynamics & Street Logistics -->
<section class="rnp-section">
    <div class="rnp-container">
        <div class="rnp-grid-2">
            <div>
                <span style="color: #ff5722; font-weight: 700; font-size: 0.88rem; text-transform: uppercase;">Central Heritage & Mobility Core</span>
                <h2 class="rnp-section-title">Established Relocation Excellence Across Rajendra Nagar</h2>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Named in honor of India's first President, Dr. Rajendra Prasad, Rajendra Nagar is celebrated as one of Patna's most venerable, cultured, and centrally positioned residential colonies. Bounded by the bustling Rajendra Nagar Terminal (RJPB) to the south, the historic Kumhrar archaeological precinct to the east, and commercial arteries like Nala Road and Dinkar Golambar to the west, this prestigious neighborhood houses high-ranking civil servants, renowned doctors, educators, and established business families.
                </p>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    The residential fabric of Rajendra Nagar is structured primarily along its renowned numbered avenues, Road No. 1 through Road No. 14. These tranquil, tree-lined residential streets are interspersed with multi-generation independent villas, modern boutique apartment redevelopments, and private medical clinics. Moving here requires thoughtful logistical planning: the commercial approaches from Dinkar Golambar and Nala Road—Patna's primary timber and furniture market—experience active trade traffic during midday, while the numbered residential lanes feature strict on-street parking norms.
                </p>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Shree Ashirwad Packers manages these local nuances through precision timing and appropriate vehicle sizing. Stationed near Dinkar Golambar, our operations team deploys compact 14-foot enclosed Tata 407 vehicles that easily enter interior residential gates without blocking access for neighbors. Furthermore, because Rajendra Nagar is connected directly to Kankarbagh via the railway overbridge and to Gandhi Maidan via Exhibition Road, our trucks navigate both local residential transfers and highway freight routes smoothly.
                </p>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7;">
                    Whether you are shifting locally within Rajendra Nagar or coordinating an interstate move, our services connect directly with our parent <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patna" style="color: #0e2b5c; font-weight: 700; text-decoration: underline;">Packers and Movers in Patna</a> network and our company headquarters at <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi" style="color: #0e2b5c; font-weight: 700; text-decoration: underline;">Packers and Movers in Ranchi</a>.
                </p>
            </div>
            <div>
                <div class="rnp-image-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/multistory-apartment-goods-loading-ranchi.jpg" alt="Packers and Movers loading household items in Rajendra Nagar Patna" loading="lazy">
                    <p class="rnp-image-caption">Careful handling of furniture and heavy appliances at residential homes and flats in Rajendra Nagar, Patna.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 2: Specialized Local Moving Services -->
<section class="rnp-section rnp-bg-alt">
    <div class="rnp-container">
        <div class="rnp-section-header">
            <h2 class="rnp-section-title">Specialized Moving Services in Rajendra Nagar Patna</h2>
            <p class="rnp-section-subtitle">Dedicated moving capabilities tailored for established households, railway executives, and antique furniture preservation.</p>
        </div>
        <div class="rnp-grid-3">
            <div class="rnp-card">
                <span class="rnp-card-icon">🏠</span>
                <h3 class="rnp-card-title">Complete Household Shifting</h3>
                <p class="rnp-card-text">
                    End-to-end relocation for independent houses and flats across Road No. 1 to 14. Full dismantling of master beds, wardrobe organization, and kitchen crockery protection.
                </p>
            </div>
            <div class="rnp-card">
                <span class="rnp-card-icon">🚆</span>
                <h3 class="rnp-card-title">Railway Terminal Staff Moves</h3>
                <p class="rnp-card-text">
                    Express transfer packing for railway officers and operational staff stationed at Rajendra Nagar Terminal (RJPB). Full consignment paperwork, bilty, and claim documentation.
                </p>
            </div>
            <div class="rnp-card">
                <span class="rnp-card-icon">🪵</span>
                <h3 class="rnp-card-title">Antique & Heavy Wood Crating</h3>
                <p class="rnp-card-text">
                    Proximity to Nala Road means many homes possess solid Sheesham, teakwood, and glass-inlaid furniture. Our master carpenters dismantle and cushion heavy heirlooms safely.
                </p>
            </div>
            <div class="rnp-card">
                <span class="rnp-card-icon">🚗</span>
                <h3 class="rnp-card-title">Car & Two-Wheeler Transport</h3>
                <p class="rnp-card-text">
                    Doorstep pickup of sedans, SUVs, and bikes with enclosed hydraulic carrier transit from Rajendra Nagar to Ranchi, Jamshedpur, Kolkata, Bangalore, and Delhi NCR.
                </p>
            </div>
            <div class="rnp-card">
                <span class="rnp-card-icon">📦</span>
                <h3 class="rnp-card-title">5-Layer Shockproof Packaging</h3>
                <p class="rnp-card-text">
                    Virgin 5-ply corrugated sheets, dense air bubble cushioning, industrial stretch wrap, and corner edge guards safeguard delicate glassware, paintings, and smart televisions.
                </p>
            </div>
            <div class="rnp-card">
                <span class="rnp-card-icon">🛡️</span>
                <h3 class="rnp-card-title">Transit Insurance & Safe Storage</h3>
                <p class="rnp-card-text">
                    100% comprehensive transit risk coverage through national underwriters, backed by clean, CCTV-monitored warehouse storage for goods during home renovation or delayed possession.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: Material Quality & Woodwork Care -->
<section class="rnp-section">
    <div class="rnp-container">
        <div class="rnp-grid-2">
            <div>
                <div class="rnp-image-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Multi layer bubble wrap and corrugated boxes deployed in Rajendra Nagar Patna" loading="lazy">
                    <p class="rnp-image-caption">5-ply corrugated boxes, bubble wrap cushioning, and moisture-proof stretch wrap for Rajendra Nagar homes.</p>
                </div>
            </div>
            <div>
                <span style="color: #ff5722; font-weight: 700; font-size: 0.88rem; text-transform: uppercase;">Unrivaled Protection</span>
                <h2 class="rnp-section-title">Master Carpentry & Packaging Protocols for Fine Homes</h2>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7; margin-bottom: 14px;">
                    Many family residences in Rajendra Nagar house elaborate home libraries, brass prayer altars, vintage chandeliers, and bespoke wooden cabinetry. Moving these high-value items through staircases requires specialized techniques:
                </p>
                <ul style="padding-left: 20px; color: #475569; font-size: 0.95rem; line-height: 1.8; margin-bottom: 18px;">
                    <li><strong>Custom Wooden Skeleton Crates:</strong> Fragile decorative mirrors, oversized smart televisions, and imported glassware sets are secured in custom-fitted wooden crates.</li>
                    <li><strong>Scratch-Resistant Furniture Sleeves:</strong> Polished dining table surfaces and carved headboards receive thick foam lining and heavy stretch wrap to prevent scratches.</li>
                    <li><strong>Appliance Anti-Moisture Padding:</strong> Refrigerators, washing machines, and microwave ovens receive multi-layer stretch wrapping and corner bumpers to guard against humidity.</li>
                    <li><strong>Room-Specific Carton Tagging:</strong> Every carton is labeled by room and contents, ensuring that unpacking at your destination is smooth and systematic.</li>
                </ul>
                <p style="font-size: 0.95rem; color: #475569; line-height: 1.7;">
                    Consult our transparent pricing structure on our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" style="color: #0e2b5c; font-weight: 700; text-decoration: underline;">Transparent Relocation Tariff Calculator</a>.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section 4: Transparent Pricing Table -->
<section class="rnp-section rnp-bg-alt">
    <div class="rnp-container">
        <div class="rnp-section-header">
            <h2 class="rnp-section-title">Transparent Relocation Charges in Rajendra Nagar Patna</h2>
            <p class="rnp-section-subtitle">Competitive, upfront estimates with zero hidden charges. All quotes include packing materials, labor, transport, and unloading.</p>
        </div>
        <div class="rnp-table-wrapper">
            <table class="rnp-table">
                <thead>
                    <tr>
                        <th>Housing Configuration / Home Size</th>
                        <th>Local Shifting (Within Patna / Nearby)</th>
                        <th>Intercity Shifting (Outside Patna)</th>
                        <th>Packaging Specs & Manpower</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment / Flat</strong></td>
                        <td>₹3,500 - ₹6,500</td>
                        <td>₹10,000 - ₹17,500</td>
                        <td>Standard 3-Layer Packing, 2-3 Skilled Crew</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Residential Flat / House</strong></td>
                        <td>₹6,500 - ₹12,000</td>
                        <td>₹15,500 - ₹26,500</td>
                        <td>Premium 4-Layer Packing, 4-5 Professional Crew</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Independent Home / Flat</strong></td>
                        <td>₹11,000 - ₹18,500</td>
                        <td>₹23,500 - ₹37,000</td>
                        <td>Heavy Duty 5-Layer Armor, 5-6 Trained Movers</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Bungalow / Family Villa</strong></td>
                        <td>₹16,000 - ₹26,000</td>
                        <td>₹33,000 - ₹50,000</td>
                        <td>Full Wooden Crating, Dedicated Move Manager</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                        <td>₹1,200 - ₹2,400</td>
                        <td>₹3,500 - ₹6,500</td>
                        <td>Bubble Wrapping, Handlebar Bracing & Enclosed Carrier</td>
                    </tr>
                    <tr>
                        <td><strong>Car Relocation (Sedan / SUV)</strong></td>
                        <td>₹2,500 - ₹5,000</td>
                        <td>₹9,000 - ₹21,000</td>
                        <td>Dedicated Car Carrier, Wheel Stopper Lock & Full Cover</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="font-size: 0.88rem; color: #64748b; text-align: center; margin-top: 12px;">
            * Note: Final moving costs depend on floor level, elevator availability, walking distance from parking gate, and fragile crating volume.
        </p>
    </div>
</section>

<!-- Section 5: Step-by-Step Moving Process -->
<section class="rnp-section">
    <div class="rnp-container">
        <div class="rnp-grid-2">
            <div>
                <span style="color: #ff5722; font-weight: 700; font-size: 0.88rem; text-transform: uppercase;">Methodical Moving Framework</span>
                <h2 class="rnp-section-title">How We Manage Your Move in Rajendra Nagar</h2>
                <div class="rnp-process-step">
                    <div class="rnp-process-num">1</div>
                    <div class="rnp-process-content">
                        <h4>Free On-Site Survey & Fixed Quote</h4>
                        <p>Our supervisor visits your home in Road No. 1-14 or near Dinkar Golambar, assessing furniture volume, staircase dimensions, and truck parking access to provide a firm written estimate.</p>
                    </div>
                </div>
                <div class="rnp-process-step">
                    <div class="rnp-process-num">2</div>
                    <div class="rnp-process-content">
                        <h4>Expert Dismantling & 5-Layer Packing</h4>
                        <p>Our certified packers arrive equipped with heavy corrugated boxes, bubble cushioning, stretch film, and carpentry toolkits to carefully dismantle beds and wrap delicate crockery.</p>
                    </div>
                </div>
                <div class="rnp-process-step">
                    <div class="rnp-process-num">3</div>
                    <div class="rnp-process-content">
                        <h4>Careful Loading & Coordinated Street Transit</h4>
                        <p>Goods are loaded into cushioned, weatherproof container trucks utilizing hydraulic ramps and padded safety belts. Drivers navigate residential avenues easily to avoid blocking neighbors.</p>
                    </div>
                </div>
                <div class="rnp-process-step">
                    <div class="rnp-process-num">4</div>
                    <div class="rnp-process-content">
                        <h4>Unloading, Furniture Re-Assembly & Setup</h4>
                        <p>At your new residence, our crew carries goods to designated rooms, reassembles beds and heavy cupboards, positions furniture according to your instructions, and clears away all packing debris.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="rnp-image-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Carpenters dismantling double bed furniture for moving in Rajendra Nagar Patna" loading="lazy">
                    <p class="rnp-image-caption">Professional dismantling and hardware labeling of modular beds and wardrobes by skilled technicians.</p>
                </div>
                <div class="rnp-image-box" style="margin-top: 24px;">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Dedicated delivery truck navigating residential roads in Rajendra Nagar Patna" loading="lazy">
                    <p class="rnp-image-caption">Modern enclosed container trucks ensuring weather-safe door-to-door transit across Patna colonies.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 6: Specific Sector Insights for Rajendra Nagar Sub-Areas -->
<section class="rnp-section rnp-bg-alt">
    <div class="rnp-container">
        <div class="rnp-section-header">
            <h2 class="rnp-section-title">Navigating Key Zones in Rajendra Nagar Patna</h2>
            <p class="rnp-section-subtitle">Hyper-local experience makes the difference. Here is how we manage moves across Rajendra Nagar's major sub-sectors.</p>
        </div>
        <div class="rnp-grid-4">
            <div class="rnp-card">
                <h3 class="rnp-card-title">Road No. 1 to Road No. 14</h3>
                <p class="rnp-card-text">
                    Core residential avenues featuring large family homes. We deploy compact moving shuttles to preserve street access and prevent blocking personal driveways.
                </p>
            </div>
            <div class="rnp-card">
                <h3 class="rnp-card-title">Rajendra Nagar Terminal (RJPB)</h3>
                <p class="rnp-card-text">
                    Major railway junction hub with railway colony quarters. We coordinate expedited move schedules for transferred railway executives and station personnel.
                </p>
            </div>
            <div class="rnp-card">
                <h3 class="rnp-card-title">Dinkar Golambar & Nala Road</h3>
                <p class="rnp-card-text">
                    High-density commercial and timber market node. We arrange early morning loading slots (7:00 AM - 10:00 AM) to beat heavy daytime market vehicle flow.
                </p>
            </div>
            <div class="rnp-card">
                <h3 class="rnp-card-title">Moin-ul-Haq Stadium & Kumhrar</h3>
                <p class="rnp-card-text">
                    Sports and heritage perimeter with peaceful apartment enclaves. We coordinate with society guards for lift reservations and basement loading bays.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section 7: Frequently Asked Questions (FAQ) -->
<section class="rnp-section">
    <div class="rnp-container">
        <div class="rnp-section-header">
            <h2 class="rnp-section-title">Frequently Asked Questions — Rajendra Nagar Relocation</h2>
            <p class="rnp-section-subtitle">Real answers to common questions about house relocation, costs, railway staff moves, and safety in Rajendra Nagar, Patna.</p>
        </div>
        <div style="max-width: 860px; margin: 0 auto;">
            <div class="rnp-faq-item">
                <div class="rnp-faq-question">What are the household shifting charges in Rajendra Nagar Patna?</div>
                <div class="rnp-faq-answer">
                    Local shifting charges within Rajendra Nagar or to nearby Patna localities (such as Kankarbagh, Exhibition Road, or Gandhi Maidan) typically range from ₹3,500 to ₹6,500 for a 1 BHK flat, ₹6,500 to ₹12,000 for a 2 BHK apartment, and ₹11,000 to ₹18,500 for a 3 BHK residence. All quotes include packing materials, labor, transport, and unloading.
                </div>
            </div>
            <div class="rnp-faq-item">
                <div class="rnp-faq-question">How do your moving vehicles manage narrow lanes across Road No. 1 to 14 in Rajendra Nagar?</div>
                <div class="rnp-faq-answer">
                    Rajendra Nagar's numbered residential avenues (Road 1 through 14) feature calm residential streets interspersed with parked personal cars. We deploy nimble 14-foot Tata 407 vehicles and Mahindra Bolero pickup shuttles that easily enter residential gates without causing road blockades.
                </div>
            </div>
            <div class="rnp-faq-item">
                <div class="rnp-faq-question">Do you provide urgent packing for railway officers near Rajendra Nagar Terminal (RJPB)?</div>
                <div class="rnp-faq-answer">
                    Yes. Rajendra Nagar Terminal is a prime railway junction where officers and operational personnel receive transfer postings. We provide fast same-day packing, itemized packing inventories, transit insurance, and GST-compliant invoices for seamless official claims reimbursement.
                </div>
            </div>
            <div class="rnp-faq-item">
                <div class="rnp-faq-question">How do you handle heavy wooden furniture moving from Nala Road market?</div>
                <div class="rnp-faq-answer">
                    Because Nala Road is Patna's central timber and furniture trade market, many Rajendra Nagar residences feature heavy teakwood and Sheesham dining sets and wardrobes. Our certified carpenters carefully dismantle, pad, and crate heavy woodwork, reassembling it at your destination.
                </div>
            </div>
            <div class="rnp-faq-item">
                <div class="rnp-faq-question">How quickly can your survey supervisor visit my residence in Rajendra Nagar?</div>
                <div class="rnp-faq-answer">
                    Our mobile operations unit is stationed near Dinkar Golambar. A dedicated survey supervisor can arrive at your flat or bungalow within 25 to 40 minutes for a free on-site inventory assessment and fixed-price quotation.
                </div>
            </div>
            <div class="rnp-faq-item">
                <div class="rnp-faq-question">Are my household goods insured during intercity transport from Rajendra Nagar?</div>
                <div class="rnp-faq-answer">
                    Yes, we provide 100% comprehensive transit insurance coverage with national underwriting partners for all long-distance relocations from Rajendra Nagar to Ranchi, Jamshedpur, Kolkata, Delhi, or Bangalore.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 8: Sister Neighborhoods Cluster Navigation & Long-Distance Corridors -->
<section class="rnp-section rnp-bg-alt">
    <div class="rnp-container">
        <div class="rnp-section-header">
            <h2 class="rnp-section-title">Explore Nearby Shifting Hubs Across Patna & Intercity Routes</h2>
            <p class="rnp-section-subtitle">Connecting Rajendra Nagar with all major residential neighborhoods in Patna and interstate corridors.</p>
        </div>
        <div class="rnp-cluster-box">
            <h3 style="font-size: 1.15rem; color: #0e2b5c; font-weight: 700; margin-bottom: 12px;">Top Patna Neighborhood Authority Pages:</h3>
            <div>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patna" class="rnp-cluster-link" style="background: #0e2b5c; color: #ffffff; border-color: #0e2b5c;">★ Patna Central City Hub</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kankarbagh-patna" class="rnp-cluster-link">Kankarbagh Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-boring-road-patna" class="rnp-cluster-link">Boring Road Relocation</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bailey-road-patna" class="rnp-cluster-link">Bailey Road Shifting</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-danapur-patna" class="rnp-cluster-link">Danapur Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patliputra-colony-patna" class="rnp-cluster-link">Patliputra Colony Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ashiana-nagar-patna" class="rnp-cluster-link">Ashiana Nagar Shifting</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-anisabad-patna" class="rnp-cluster-link">Anisabad Relocation</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-khagaul-patna" class="rnp-cluster-link">Khagaul Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-phulwari-sharif-patna" class="rnp-cluster-link">Phulwari Sharif Shifting</a>
            </div>
            <h3 style="font-size: 1.15rem; color: #0e2b5c; font-weight: 700; margin: 24px 0 12px;">Direct Long-Distance Corridors from Patna:</h3>
            <div>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-ranchi-packers-and-movers" class="rnp-cluster-link">Patna to Ranchi Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-jamshedpur-packers-and-movers" class="rnp-cluster-link">Patna to Jamshedpur Shifting</a>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-dhanbad-packers-and-movers" class="rnp-cluster-link">Patna to Dhanbad Relocation</a>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-bokaro-packers-and-movers" class="rnp-cluster-link">Patna to Bokaro Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/adityapur-to-patna-packers-and-movers" class="rnp-cluster-link">Adityapur to Patna Route</a>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-deoghar-packers-and-movers" class="rnp-cluster-link">Patna to Deoghar Route</a>
            </div>
        </div>

        <!-- Call to Action Banner -->
        <div class="rnp-cta-box">
            <h3 class="rnp-cta-title">Planning a Relocation in Rajendra Nagar Patna?</h3>
            <p class="rnp-cta-desc">
                Contact our local Rajendra Nagar moving specialists today for an authentic, transparent shifting quotation, professional furniture care, and punctual delivery.
            </p>
            <div style="display: flex; justify-content: center; gap: 14px; flex-wrap: wrap;">
                <a href="tel:+918409531615" class="rnp-cta-btn">Call Now: 8409531615</a>
                <a href="<?php echo SITE_BASE_URL; ?>/contact" class="rnp-cta-btn" style="background: transparent; border: 2px solid #ffffff;">Request Survey Online</a>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
