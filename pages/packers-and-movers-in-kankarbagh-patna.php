<?php
/**
 * Page: Packers and Movers in Kankarbagh Patna
 * Tier: Tier 2 (Hyper-Local Neighborhood Hub)
 * Parent City Hub: pages/packers-and-movers-in-patna.php
 * Target URL: https://www.shreeashirwadpackers.com/packers-and-movers-in-kankarbagh-patna
 */

$page_title = "Packers and Movers in Kankarbagh Patna | Safe Home Shifting Services";
$page_description = "Reliable packers and movers in Kankarbagh Patna. Professional home shifting, flat relocation, multi-layer packaging, and fast local moves across Doctor's Colony, Ashok Nagar & Kanti Factory Road. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/packers-and-movers-in-kankarbagh-patna";
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
    <meta name="keywords" content="packers and movers in kankarbagh patna, home shifting kankarbagh, packers in kankarbagh patna, house relocation doctor colony kankarbagh, ashok nagar patna movers, room shifting tempo stand kankarbagh, kankarbagh patna moving company">
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
    <meta name="geo.placename" content="Kankarbagh, Patna">
    <meta name="geo.position" content="25.5941;85.1612">
    <meta name="ICBM" content="25.5941, 85.1612">

    <link rel="shortcut icon" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo SITE_BASE_URL; ?>/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Structured Data 1: MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Kankarbagh Patna Hub",
        "image": "<?php echo SITE_BASE_URL; ?>/images/multistory-apartment-goods-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91-8409531615",
        "priceRange": "₹3,500 - ₹48,000",
        "description": "Licensed and insured packers and movers in Kankarbagh Patna offering premium residential home shifting, apartment moves, clinic relocations, and intercity transportation across Patna, Bihar.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Main Road, Near Tempo Stand, Kankarbagh",
            "addressLocality": "Patna",
            "addressRegion": "Bihar",
            "postalCode": "800020",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 25.5941,
            "longitude": 85.1612
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
            "opens": "07:00",
            "closes": "22:00"
        },
        "areaServed": [
            { "@type": "AdministrativeArea", "name": "Kankarbagh, Patna" },
            { "@type": "AdministrativeArea", "name": "Doctor's Colony, Kankarbagh" },
            { "@type": "AdministrativeArea", "name": "Ashok Nagar, Kankarbagh" },
            { "@type": "AdministrativeArea", "name": "Lohia Nagar, Kankarbagh" },
            { "@type": "AdministrativeArea", "name": "Kanti Factory Road, Kankarbagh" },
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
                "name": "Packers and Movers in Kankarbagh Patna",
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
        "serviceType": "Residential Household Relocation and Packing Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers",
            "url": "https://www.shreeashirwadpackers.com"
        },
        "areaServed": {
            "@type": "AdministrativeArea",
            "name": "Kankarbagh, Patna, Bihar"
        },
        "description": "Comprehensive packing, loading, transport, unloading, and unpacking services for apartments, independent houses, and commercial establishments in Kankarbagh, Patna."
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
                "name": "What are the average home shifting charges in Kankarbagh Patna?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting within Kankarbagh or nearby Patna localities typically costs between ₹3,500 and ₹7,000 for a 1 BHK flat, ₹6,500 to ₹12,500 for a 2 BHK apartment, and ₹11,000 to ₹19,000 for a 3 BHK home. Final rates depend on floor level, elevator availability, packing material volume, and moving distance."
                }
            },
            {
                "@type": "Question",
                "name": "Can moving trucks enter narrow residential lanes in Kankarbagh colonies?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Certain sectors of Kankarbagh such as Tiwary Bechar, Ashok Nagar lanes, and older residential alleys have tight street turns. We utilize nimble 14-foot Tata 407 vehicles, Mahindra Bolero Maxitrucks, and dedicated shuttle carriers to access interior apartment gates without disrupting neighborhood traffic."
                }
            },
            {
                "@type": "Question",
                "name": "How quickly can your survey team arrive in Kankarbagh for a physical estimate?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Because our field operations team is stationed along the Kankarbagh Main Road near Tempo Stand, an estimator can visit your residence or clinic in Kankarbagh within 30 to 60 minutes of your inquiry. We also provide instant video call surveys."
                }
            },
            {
                "@type": "Question",
                "name": "Do you handle furniture dismantling and reassembly for high-rise apartments in Kankarbagh?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our certified packers carry complete mechanical toolkits to dismantle modular beds, multi-door wardrobes, dining tables, and wall-mounted LED televisions. At your new residence, all items are carefully reassembled and positioned according to your room plan."
                }
            },
            {
                "@type": "Question",
                "name": "Do you assist with apartment society permissions and lift booking in Kankarbagh?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Many multi-story apartment complexes in Kankarbagh require prior security clearance and lift protection blankets. Our crew coordinates with the apartment RWA, lays protective floor sheets, and pads service elevator interiors to ensure zero damage to building property."
                }
            },
            {
                "@type": "Question",
                "name": "Do you offer transit insurance for household goods moving out of Kankarbagh?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide 100% comprehensive transit insurance coverage through national underwriters for all intercity moves originating from Kankarbagh, Patna. In the rare event of accidental transit damage, your claim is settled smoothly with transparent documentation."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped CSS for Kankarbagh Patna Page: Prefix kbp- */
        .kbp-hero {
            background: linear-gradient(135deg, #0e2b5c 0%, #081a38 100%);
            color: #ffffff;
            padding: 60px 16px 50px;
            position: relative;
            text-align: center;
        }
        .kbp-hero-inner {
            max-width: 980px;
            margin: 0 auto;
        }
        .kbp-hero-badge {
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
        .kbp-hero-title {
            font-size: clamp(1.8rem, 3.5vw, 2.7rem);
            font-weight: 800;
            line-height: 1.25;
            margin-bottom: 18px;
            color: #ffffff;
        }
        .kbp-hero-desc {
            font-size: 1.05rem;
            line-height: 1.65;
            color: #d8e2f0;
            max-width: 820px;
            margin: 0 auto 28px;
        }
        .kbp-hero-pills {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-bottom: 25px;
        }
        .kbp-pill {
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.22);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.88rem;
            color: #ffffff;
        }
        .kbp-quick-bar {
            display: flex;
            justify-content: center;
            gap: 14px;
            flex-wrap: wrap;
            margin-top: 15px;
        }
        .kbp-quick-btn {
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
        .kbp-quick-btn:hover {
            background: #e64a19;
            transform: translateY(-2px);
        }
        .kbp-quick-btn.kbp-sec-btn {
            background: #25d366;
        }
        .kbp-quick-btn.kbp-sec-btn:hover {
            background: #1ebc59;
        }
        .kbp-section {
            padding: 55px 16px;
        }
        .kbp-section.kbp-bg-alt {
            background: #f8fafc;
        }
        .kbp-container {
            max-width: 1140px;
            margin: 0 auto;
        }
        .kbp-section-header {
            text-align: center;
            margin-bottom: 40px;
        }
        .kbp-section-title {
            font-size: clamp(1.5rem, 2.8vw, 2.1rem);
            font-weight: 800;
            color: #0e2b5c;
            margin-bottom: 12px;
            line-height: 1.3;
        }
        .kbp-section-subtitle {
            font-size: 1rem;
            color: #556987;
            max-width: 780px;
            margin: 0 auto;
            line-height: 1.6;
        }
        .kbp-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 28px;
            align-items: center;
        }
        .kbp-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }
        .kbp-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }
        @media (max-width: 900px) {
            .kbp-grid-3, .kbp-grid-4 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 768px) {
            .kbp-grid-2, .kbp-grid-3, .kbp-grid-4 {
                grid-template-columns: 1fr;
            }
        }
        .kbp-card {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            padding: 24px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.04);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .kbp-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.08);
        }
        .kbp-card-icon {
            font-size: 1.8rem;
            color: #ff5722;
            margin-bottom: 14px;
            display: inline-block;
        }
        .kbp-card-title {
            font-size: 1.15rem;
            font-weight: 700;
            color: #0e2b5c;
            margin-bottom: 10px;
            line-height: 1.4;
        }
        .kbp-card-text {
            font-size: 0.94rem;
            color: #556987;
            line-height: 1.6;
            margin: 0;
        }
        .kbp-image-box {
            max-width: 580px;
            margin: 20px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            background: #eef2f6;
        }
        .kbp-image-box img {
            width: 100%;
            height: auto;
            max-height: 420px;
            object-fit: cover;
            display: block;
        }
        .kbp-image-caption {
            font-size: 0.85rem;
            color: #64748b;
            text-align: center;
            padding: 10px 14px;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            margin: 0;
            font-style: italic;
        }
        .kbp-table-wrapper {
            overflow-x: auto;
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 14px rgba(0,0,0,0.04);
            margin: 24px 0;
        }
        .kbp-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.94rem;
        }
        .kbp-table th {
            background: #0e2b5c;
            color: #ffffff;
            padding: 14px 16px;
            font-weight: 700;
        }
        .kbp-table td {
            padding: 13px 16px;
            border-bottom: 1px solid #edf2f7;
            color: #334155;
        }
        .kbp-table tr:last-child td {
            border-bottom: none;
        }
        .kbp-table tr:hover td {
            background: #f8fafc;
        }
        .kbp-process-step {
            display: flex;
            gap: 18px;
            background: #ffffff;
            padding: 22px;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            margin-bottom: 16px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.03);
        }
        .kbp-process-num {
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
        .kbp-process-content h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: #0e2b5c;
            margin: 0 0 8px;
        }
        .kbp-process-content p {
            font-size: 0.93rem;
            color: #556987;
            line-height: 1.6;
            margin: 0;
        }
        .kbp-faq-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            margin-bottom: 14px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
        }
        .kbp-faq-question {
            padding: 18px 20px;
            font-weight: 700;
            color: #0e2b5c;
            font-size: 1.02rem;
            background: #ffffff;
            border-bottom: 1px solid #edf2f7;
        }
        .kbp-faq-answer {
            padding: 16px 20px 20px;
            color: #556987;
            font-size: 0.93rem;
            line-height: 1.65;
        }
        .kbp-cluster-box {
            background: #f1f5f9;
            border-radius: 12px;
            padding: 28px;
            border: 1px solid #e2e8f0;
            margin-top: 25px;
        }
        .kbp-cluster-link {
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
        .kbp-cluster-link:hover {
            background: #ff5722;
            color: #ffffff;
            border-color: #ff5722;
            transform: translateY(-2px);
        }
        .kbp-cta-box {
            background: linear-gradient(135deg, #0e2b5c 0%, #1e3a8a 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 40px 24px;
            text-align: center;
            margin-top: 35px;
        }
        .kbp-cta-title {
            font-size: clamp(1.4rem, 2.5vw, 1.9rem);
            font-weight: 800;
            margin-bottom: 12px;
            color: #ffffff;
        }
        .kbp-cta-desc {
            font-size: 0.98rem;
            color: #cbd5e1;
            max-width: 650px;
            margin: 0 auto 24px;
            line-height: 1.6;
        }
        .kbp-cta-btn {
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
        .kbp-cta-btn:hover {
            background: #e64a19;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
<?php require_once __DIR__ . '/../includes/header.php'; ?>

<!-- Breadcrumb Navigation Bar -->
<div style="background: #f1f5f9; padding: 12px 16px; border-bottom: 1px solid #e2e8f0; font-size: 0.88rem;">
    <div class="kbp-container">
        <a href="<?php echo SITE_BASE_URL; ?>/" style="color: #0e2b5c; text-decoration: none; font-weight: 600;">Home</a>
        <span style="margin: 0 8px; color: #94a3b8;">/</span>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patna" style="color: #0e2b5c; text-decoration: none; font-weight: 600;">Packers and Movers in Patna</a>
        <span style="margin: 0 8px; color: #94a3b8;">/</span>
        <span style="color: #64748b; font-weight: 600;">Kankarbagh</span>
    </div>
</div>

<!-- Hero Section -->
<section class="kbp-hero">
    <div class="kbp-hero-inner">
        <span class="kbp-hero-badge">Verified Local Relocation Experts</span>
        <h1 class="kbp-hero-title">Packers and Movers in Kankarbagh Patna</h1>
        <p class="kbp-hero-desc">
            Shree Ashirwad Packers and Movers provides seamless, damage-free residential flat shifting, corporate office moves, and intercity relocation throughout Kankarbagh, Patna. From Doctor's Colony and Ashok Nagar to Tiwary Bechar and Kanti Factory Road, our dedicated local crew delivers five-star packing, careful elevator handling, and punctual transportation.
        </p>
        <div class="kbp-hero-pills">
            <span class="kbp-pill">✓ 30-Min Rapid Local Survey</span>
            <span class="kbp-pill">✓ 5-Layer Box Cushioning</span>
            <span class="kbp-pill">✓ High-Rise Elevator Specialists</span>
            <span class="kbp-pill">✓ Zero Hidden Charges</span>
            <span class="kbp-pill">✓ 100% Transit Protection</span>
        </div>
        <div class="kbp-quick-bar">
            <a href="tel:+918409531615" class="kbp-quick-btn">
                <span>📞 Call 8409531615</span>
            </a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20home%20shifting%20in%20Kankarbagh%20Patna" class="kbp-quick-btn kbp-sec-btn" target="_blank" rel="noopener noreferrer">
                <span>💬 WhatsApp Quick Quote</span>
            </a>
        </div>
    </div>
</section>

<!-- Section 1: Detailed Neighborhood Overview & Logistics -->
<section class="kbp-section">
    <div class="kbp-container">
        <div class="kbp-grid-2">
            <div>
                <span style="color: #ff5722; font-weight: 700; font-size: 0.88rem; text-transform: uppercase;">Hyper-Local Mastery</span>
                <h2 class="kbp-section-title">Reliable Relocation Across Asia's Premier Residential Hub: Kankarbagh</h2>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Kankarbagh is celebrated as one of the largest planned residential colonies in Asia, sprawling across dozens of established sectors and vibrant sub-localities. Housing a diverse blend of medical professionals, government officers, educators, businessmen, and corporate executives, Kankarbagh presents distinctive moving dynamics. While arterial streets like Kankarbagh Main Road and Old Bypass offer excellent vehicular access, numerous interior lanes—particularly around Tiwary Bechar, Ashok Nagar lanes, Chandmari Road, and older sectors of Doctor's Colony—can become tight for oversized container trailers.
                </p>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    At Shree Ashirwad Packers and Movers, our local logistics hub is stationed directly beside the Kankarbagh Tempo Stand. This strategic position enables our moving supervisors to conduct physical surveys within 30 to 45 minutes of your booking request. Whether you are shifting from an independent multi-story bungalow near Malahi Pakri or moving into a contemporary high-rise apartment complex near Kumhrar and Patrakar Nagar, our team deploys custom-sized Tata 407 and Mahindra Bolero pickup trucks engineered specifically for easy neighborhood maneuvering.
                </p>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7;">
                    Furthermore, as the central residential authority in South-Central Patna, Kankarbagh enjoys seamless road connectivity via the Patna Bypass Road and Rajendra Nagar Overbridge. Our operations seamlessly connect Kankarbagh residents to our parent <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patna" style="color: #0e2b5c; font-weight: 700; text-decoration: underline;">Packers and Movers in Patna</a> network as well as our company headquarters at <a href="<?php echo SITE_BASE_URL; ?>/" style="color: #0e2b5c; font-weight: 700; text-decoration: underline;">Packers and Movers in Ranchi</a> for interstate household relocations.
                </p>
            </div>
            <div>
                <div class="kbp-image-box">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/multistory-apartment-goods-loading-ranchi.jpg" alt="Packers and Movers loading household goods at Kankarbagh residential apartment Patna" loading="lazy">
                    <p class="kbp-image-caption">Careful handling of furniture and heavy goods at modern multi-story apartments in Kankarbagh, Patna.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 2: Specialized Local Services -->
<section class="kbp-section kbp-bg-alt">
    <div class="kbp-container">
        <div class="kbp-section-header">
            <h2 class="kbp-section-title">Specialized Moving Services in Kankarbagh Patna</h2>
            <p class="kbp-section-subtitle">Tailored relocation solutions designed for the unique requirements of Kankarbagh residents, doctors, and commercial enterprises.</p>
        </div>
        <div class="kbp-grid-3">
            <div class="kbp-card">
                <span class="kbp-card-icon">🏠</span>
                <h3 class="kbp-card-title">Complete Household Shifting</h3>
                <p class="kbp-card-text">
                    End-to-end flat and villa relocation covering bedroom furniture dismantling, heavy mattress packing, wardrobe sorting, and meticulous kitchen crockery cushioning for apartments in Doctor's Colony, Ashok Nagar, and Lohia Nagar.
                </p>
            </div>
            <div class="kbp-card">
                <span class="kbp-card-icon">🏥</span>
                <h3 class="kbp-card-title">Doctor Clinic & Diagnostic Lab Shifting</h3>
                <p class="kbp-card-text">
                    As Kankarbagh hosts Patna's premier healthcare hub in Doctor's Colony, we specialize in high-precision packing for medical diagnostics, ultrasound machines, sterilizers, dental chairs, and private clinic furniture with zero vibration shock.
                </p>
            </div>
            <div class="kbp-card">
                <span class="kbp-card-icon">🏢</span>
                <h3 class="kbp-card-title">Office & Commercial Shifting</h3>
                <p class="kbp-card-text">
                    Fast corporate relocation for consultancies, coaching institutes, IT setups, and retail establishments along Kankarbagh Main Road and Kanti Factory Road. Weekend and overnight shifting schedules minimize business downtime.
                </p>
            </div>
            <div class="kbp-card">
                <span class="kbp-card-icon">🚗</span>
                <h3 class="kbp-card-title">Car & Two-Wheeler Transport</h3>
                <p class="kbp-card-text">
                    Enclosed car carrier and dedicated bike moving solutions from Kankarbagh to any city across Bihar, Jharkhand, Bengal, Delhi NCR, and South India. Door pickup with wheel chocking and scratch-proof foam wrapping.
                </p>
            </div>
            <div class="kbp-card">
                <span class="kbp-card-icon">📦</span>
                <h3 class="kbp-card-title">5-Layer Protective Packaging</h3>
                <p class="kbp-card-text">
                    We exclusively deploy virgin heavy-duty 5-ply corrugated cartons, bubble wrap, industrial stretch wrap, thermocol sheets, and reinforced corrugated edge guards to safeguard delicate items against moisture and road bumps.
                </p>
            </div>
            <div class="kbp-card">
                <span class="kbp-card-icon">🛡️</span>
                <h3 class="kbp-card-title">Safe Storage & Transit Insurance</h3>
                <p class="kbp-card-text">
                    Short-term and long-term secure warehousing for household furniture during renovation or outstation deputation, combined with full comprehensive transit insurance policies underwritten by trusted national carriers.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: Material Quality & Packing Protocols -->
<section class="kbp-section">
    <div class="kbp-container">
        <div class="kbp-grid-2">
            <div>
                <div class="kbp-image-box">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="High quality multi layer packaging materials deployed by Shree Ashirwad Packers in Kankarbagh" loading="lazy">
                    <p class="kbp-image-caption">Heavy-duty corrugated boxes, bubble wrap cushioning, and moisture-proof stretch wrap for Kankarbagh homes.</p>
                </div>
            </div>
            <div>
                <span style="color: #ff5722; font-weight: 700; font-size: 0.88rem; text-transform: uppercase;">Zero-Damage Standard</span>
                <h2 class="kbp-section-title">Premium Packing Protocols Tailored for Kankarbagh Homes</h2>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7; margin-bottom: 14px;">
                    Many residential properties in Kankarbagh feature narrow staircases, multi-floor construction without service elevators, or high-value interior woodwork. Shifting delicate glassware, brass artifacts, modern smart televisions, and modular sofas through these spaces requires specialized material handling techniques.
                </p>
                <ul style="padding-left: 20px; color: #475569; font-size: 0.95rem; line-height: 1.8; margin-bottom: 18px;">
                    <li><strong>Custom Crating for Electronics:</strong> Large OLED/QLED screens and desktop setups are wrapped in anti-static air bubble film before being encased in sturdy wooden skeleton crates.</li>
                    <li><strong>Double-Layer Mattress & Fabric Protection:</strong> Mattresses and luxury upholstery receive heavy-gauge polythene sleeves to prevent road dust, grime, and monsoon moisture.</li>
                    <li><strong>Heavy Furniture Dismantling:</strong> King-sized hydraulic storage beds and 6-door wardrobes are disassembled systematically, hardware labeled in zip-pouches, and reassembled on delivery.</li>
                    <li><strong>Color-Coded Box Labeling:</strong> Cartons are labeled room-by-room (Master Bedroom, Kitchen, Drawing Room) to expedite unloading and eliminate chaotic searching at your new home.</li>
                </ul>
                <p style="font-size: 0.95rem; color: #475569; line-height: 1.7;">
                    For live transparent estimates on all moving tiers, consult our comprehensive <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" style="color: #0e2b5c; font-weight: 700; text-decoration: underline;">Packers and Movers Charges and Tariff Guide</a>.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section 4: Transparent Pricing Table -->
<section class="kbp-section kbp-bg-alt">
    <div class="kbp-container">
        <div class="kbp-section-header">
            <h2 class="kbp-section-title">Transparent Shifting Charges in Kankarbagh Patna</h2>
            <p class="kbp-section-subtitle">Clear, competitive estimates with zero hidden charges. Rates include packing materials, labor, loading, transport, and unloading.</p>
        </div>
        <div class="kbp-table-wrapper">
            <table class="kbp-table">
                <thead>
                    <tr>
                        <th>Shifting Type / Home Size</th>
                        <th>Local Shifting (Within Kankarbagh/Patna)</th>
                        <th>Intercity Shifting (Patna to Other Cities)</th>
                        <th>Packing Quality & Crew Size</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Flat / Studio Apartment</strong></td>
                        <td>₹3,500 - ₹7,000</td>
                        <td>₹10,500 - ₹18,500</td>
                        <td>Standard 3-Layer Packing, 2-3 Professional Packers</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Residential Apartment</strong></td>
                        <td>₹6,500 - ₹12,500</td>
                        <td>₹16,000 - ₹28,000</td>
                        <td>Premium 4-Layer Packing, 4-5 Professional Packers</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Independent House / Flat</strong></td>
                        <td>₹11,000 - ₹19,000</td>
                        <td>₹24,000 - ₹38,000</td>
                        <td>Heavy Duty 5-Layer Packing, 5-6 Experienced Crew</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Luxury Villa / Bungalow</strong></td>
                        <td>₹16,000 - ₹26,000</td>
                        <td>₹34,000 - ₹52,000</td>
                        <td>Full Crating + White Glove Service, Dedicated Supervisor</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler (Motorcycle / Scooter)</strong></td>
                        <td>₹1,200 - ₹2,500</td>
                        <td>₹3,500 - ₹6,500</td>
                        <td>Bubble Wrapping, Handlebar Bracing & Enclosed Transport</td>
                    </tr>
                    <tr>
                        <td><strong>Four-Wheeler (Hatchback / Sedan / SUV)</strong></td>
                        <td>₹2,500 - ₹5,000</td>
                        <td>₹9,000 - ₹21,000</td>
                        <td>Dedicated Car Carrier, Wheel Stopper Lock & Comprehensive Cover</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="font-size: 0.88rem; color: #64748b; text-align: center; margin-top: 12px;">
            * Note: Exact pricing depends on walking distance from parking spot to lift/staircase, floor level, elevator availability, fragile crating requirements, and seasonal peak dates. Contact us for a precise guaranteed quotation.
        </p>
    </div>
</section>

<!-- Section 5: Step-by-Step Moving Process -->
<section class="kbp-section">
    <div class="kbp-container">
        <div class="kbp-grid-2">
            <div>
                <span style="color: #ff5722; font-weight: 700; font-size: 0.88rem; text-transform: uppercase;">Structured Relocation Journey</span>
                <h2 class="kbp-section-title">How Our Kankarbagh Moving Team Executes Your Relocation</h2>
                <div class="kbp-process-step">
                    <div class="kbp-process-num">1</div>
                    <div class="kbp-process-content">
                        <h4>Pre-Move Inspection & Free Estimate</h4>
                        <p>Our supervisor visits your home in Doctor's Colony, Ashok Nagar, or Tiwary Bechar within an hour to evaluate furniture volume, lift access, lane width, and crating needs, giving you a transparent written estimate.</p>
                    </div>
                </div>
                <div class="kbp-process-step">
                    <div class="kbp-process-num">2</div>
                    <div class="kbp-process-content">
                        <h4>Systematic Multi-Layer Packing</h4>
                        <p>On moving morning, our uniformed crew arrives punctually with high-grade corrugated sheets, stretch wrap, bubble wrap, and crating gear. Each item is individually cushioned and inventoried.</p>
                    </div>
                </div>
                <div class="kbp-process-step">
                    <div class="kbp-process-num">3</div>
                    <div class="kbp-process-content">
                        <h4>Careful Loading & Neighborhood Navigation</h4>
                        <p>Goods are loaded into cushioned, weatherproof container trucks utilizing hydraulic ramps and padded safety belts. Our experienced drivers easily maneuver through Kankarbagh's bustling residential roads.</p>
                    </div>
                </div>
                <div class="kbp-process-step">
                    <div class="kbp-process-num">4</div>
                    <div class="kbp-process-content">
                        <h4>Safe Delivery, Unpacking & Furniture Assembly</h4>
                        <p>Upon arrival at your new destination, our crew unloads goods room-by-room, reassembles beds and heavy cupboards, positions furniture according to your instructions, and clears away all packing debris.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="kbp-image-box">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Skilled packers dismantling double bed furniture for safe apartment shifting in Kankarbagh Patna" loading="lazy">
                    <p class="kbp-image-caption">Professional dismantling and hardware labeling of modular beds and wardrobes by skilled technicians.</p>
                </div>
                <div class="kbp-image-box" style="margin-top: 24px;">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Dedicated door to door delivery truck navigating residential roads in Kankarbagh Patna" loading="lazy">
                    <p class="kbp-image-caption">Modern enclosed container trucks ensuring weather-safe door-to-door transit across Patna colonies.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 6: Specific Colony Advice & Navigational Insights -->
<section class="kbp-section kbp-bg-alt">
    <div class="kbp-container">
        <div class="kbp-section-header">
            <h2 class="kbp-section-title">Navigating Key Residential Zones in Kankarbagh</h2>
            <p class="kbp-section-subtitle">Hyper-local experience makes the difference. Here is how we manage moves in Kankarbagh's major sub-sectors.</p>
        </div>
        <div class="kbp-grid-4">
            <div class="kbp-card">
                <h3 class="kbp-card-title">Doctor's Colony</h3>
                <p class="kbp-card-text">
                    Home to dozens of senior medical specialists, clinics, and diagnostic labs. We arrange quiet early-morning packing schedules that respect consulting hours and ensure zero disturbance to nearby patients.
                </p>
            </div>
            <div class="kbp-card">
                <h3 class="kbp-card-title">Ashok Nagar & Tiwary Bechar</h3>
                <p class="kbp-card-text">
                    Featuring traditional multi-story family homes along moderately dense streets. We deploy compact carrier trucks to prevent road blockades and utilize exterior hoisting slings for massive furniture.
                </p>
            </div>
            <div class="kbp-card">
                <h3 class="kbp-card-title">Lohia Nagar & Tempo Stand</h3>
                <p class="kbp-card-text">
                    Centrally positioned with heavy daily market footfall. Our drivers schedule loading during off-peak morning hours (7:00 AM - 10:30 AM) to avoid midday congestion on the main transit corridors.
                </p>
            </div>
            <div class="kbp-card">
                <h3 class="kbp-card-title">Kanti Factory Road & Kumhrar</h3>
                <p class="kbp-card-text">
                    Rapidly developing high-rise apartment belt with gated societies. We coordinate directly with building security management for service lift booking, gate passes, and protected parking slots.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section 7: Frequently Asked Questions (FAQ) -->
<section class="kbp-section">
    <div class="kbp-container">
        <div class="kbp-section-header">
            <h2 class="kbp-section-title">Frequently Asked Questions — Kankarbagh Moving Services</h2>
            <p class="kbp-section-subtitle">Real answers to common questions about house relocation, costs, and timings in Kankarbagh, Patna.</p>
        </div>
        <div style="max-width: 860px; margin: 0 auto;">
            <div class="kbp-faq-item">
                <div class="kbp-faq-question">What are the average home shifting charges in Kankarbagh Patna?</div>
                <div class="kbp-faq-answer">
                    Local shifting within Kankarbagh or nearby Patna localities typically costs between ₹3,500 and ₹7,000 for a 1 BHK flat, ₹6,500 to ₹12,500 for a 2 BHK apartment, and ₹11,000 to ₹19,000 for a 3 BHK home. Final rates depend on floor level, elevator availability, packing material volume, and moving distance.
                </div>
            </div>
            <div class="kbp-faq-item">
                <div class="kbp-faq-question">Can moving trucks enter narrow residential lanes in Kankarbagh colonies?</div>
                <div class="kbp-faq-answer">
                    Yes. Certain sectors of Kankarbagh such as Tiwary Bechar, Ashok Nagar lanes, and older residential alleys have tight street turns. We utilize nimble 14-foot Tata 407 vehicles, Mahindra Bolero Maxitrucks, and dedicated shuttle carriers to access interior apartment gates without disrupting neighborhood traffic.
                </div>
            </div>
            <div class="kbp-faq-item">
                <div class="kbp-faq-question">How quickly can your survey team arrive in Kankarbagh for a physical estimate?</div>
                <div class="kbp-faq-answer">
                    Because our field operations team is stationed along the Kankarbagh Main Road near Tempo Stand, an estimator can visit your residence or clinic in Kankarbagh within 30 to 60 minutes of your inquiry. We also provide instant video call surveys.
                </div>
            </div>
            <div class="kbp-faq-item">
                <div class="kbp-faq-question">Do you handle furniture dismantling and reassembly for high-rise apartments in Kankarbagh?</div>
                <div class="kbp-faq-answer">
                    Yes, our certified packers carry complete mechanical toolkits to dismantle modular beds, multi-door wardrobes, dining tables, and wall-mounted LED televisions. At your new residence, all items are carefully reassembled and positioned according to your room plan.
                </div>
            </div>
            <div class="kbp-faq-item">
                <div class="kbp-faq-question">Do you assist with apartment society permissions and lift booking in Kankarbagh?</div>
                <div class="kbp-faq-answer">
                    Yes. Many multi-story apartment complexes in Kankarbagh require prior security clearance and lift protection blankets. Our crew coordinates with the apartment RWA, lays protective floor sheets, and pads service elevator interiors to ensure zero damage to building property.
                </div>
            </div>
            <div class="kbp-faq-item">
                <div class="kbp-faq-question">Do you offer transit insurance for household goods moving out of Kankarbagh?</div>
                <div class="kbp-faq-answer">
                    Yes, we provide 100% comprehensive transit insurance coverage through national underwriters for all intercity moves originating from Kankarbagh, Patna. In the rare event of accidental transit damage, your claim is settled smoothly with transparent documentation.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 8: Sister Neighborhoods Cluster Navigation & Long-Distance Routes -->
<section class="kbp-section kbp-bg-alt">
    <div class="kbp-container">
        <div class="kbp-section-header">
            <h2 class="kbp-section-title">Explore Nearby Shifting Hubs Across Patna & Intercity Routes</h2>
            <p class="kbp-section-subtitle">Serving every major residential locality in Patna along with regular long-distance moving corridors.</p>
        </div>
        <div class="kbp-cluster-box">
            <h3 style="font-size: 1.15rem; color: #0e2b5c; font-weight: 700; margin-bottom: 12px;">Top Patna Neighborhood Authority Pages:</h3>
            <div>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patna" class="kbp-cluster-link" style="background: #0e2b5c; color: #ffffff; border-color: #0e2b5c;">★ Patna Central City Hub</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-boring-road-patna" class="kbp-cluster-link">Boring Road Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bailey-road-patna" class="kbp-cluster-link">Bailey Road Shifting</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-rajendra-nagar-patna" class="kbp-cluster-link">Rajendra Nagar Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-danapur-patna" class="kbp-cluster-link">Danapur Relocation</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patliputra-colony-patna" class="kbp-cluster-link">Patliputra Colony Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ashiana-nagar-patna" class="kbp-cluster-link">Ashiana Nagar Shifting</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-anisabad-patna" class="kbp-cluster-link">Anisabad Relocation</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-khagaul-patna" class="kbp-cluster-link">Khagaul Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-phulwari-sharif-patna" class="kbp-cluster-link">Phulwari Sharif Shifting</a>
            </div>
            <h3 style="font-size: 1.15rem; color: #0e2b5c; font-weight: 700; margin: 24px 0 12px;">Direct Long-Distance Corridors from Patna:</h3>
            <div>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-ranchi-packers-and-movers" class="kbp-cluster-link">Patna to Ranchi Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-jamshedpur-packers-and-movers" class="kbp-cluster-link">Patna to Jamshedpur Shifting</a>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-dhanbad-packers-and-movers" class="kbp-cluster-link">Patna to Dhanbad Relocation</a>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-bokaro-packers-and-movers" class="kbp-cluster-link">Patna to Bokaro Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/adityapur-to-patna-packers-and-movers" class="kbp-cluster-link">Adityapur to Patna Route</a>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-deoghar-packers-and-movers" class="kbp-cluster-link">Patna to Deoghar Route</a>
            </div>
        </div>

        <!-- Call to Action Banner -->
        <div class="kbp-cta-box">
            <h3 class="kbp-cta-title">Planning a Relocation in Kankarbagh Patna?</h3>
            <p class="kbp-cta-desc">
                Get an authentic, transparent shifting quotation with guaranteed zero damage and punctual delivery. Our local Kankarbagh relocation experts are available 7 days a week.
            </p>
            <div style="display: flex; justify-content: center; gap: 14px; flex-wrap: wrap;">
                <a href="tel:+918409531615" class="kbp-cta-btn">Call Now: 8409531615</a>
                <a href="<?php echo SITE_BASE_URL; ?>/contact" class="kbp-cta-btn" style="background: transparent; border: 2px solid #ffffff;">Request Survey Online</a>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
