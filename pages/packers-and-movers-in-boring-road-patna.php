<?php
/**
 * Page: Packers and Movers in Boring Road Patna
 * Tier: Tier 2 (Hyper-Local Neighborhood Hub)
 * Parent City Hub: pages/packers-and-movers-in-patna.php
 * Target URL: https://www.shreeashirwadpackers.com/packers-and-movers-in-boring-road-patna
 */

$page_title = "Packers and Movers in Boring Road Patna | Safe Home Shifting";
$page_description = "Top-rated packers and movers in Boring Road Patna. Professional home shifting, student room relocation, office shifting across Nageshwar Colony, Anandpuri & SK Puri. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/packers-and-movers-in-boring-road-patna";
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
    <meta name="keywords" content="packers and movers in boring road patna, home shifting boring road, packers nageshwar colony patna, movers anandpuri patna, room shifting boring canal road, packers and movers sk puri patna, student hostel shifting patna">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Data -->
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:url" content="<?php echo $canonical_url; ?>">
    <meta property="og:type" content="business.business">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/office-equipment-secure-packing-jamshedpur.jpg">
    <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/office-equipment-secure-packing-jamshedpur.jpg">

    <!-- Geo Tags -->
    <meta name="geo.region" content="IN-BR">
    <meta name="geo.placename" content="Boring Road, Patna">
    <meta name="geo.position" content="25.6137;85.1189">
    <meta name="ICBM" content="25.6137, 85.1189">

    <link rel="shortcut icon" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo SITE_BASE_URL; ?>/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Structured Data 1: MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Boring Road Patna Hub",
        "image": "<?php echo SITE_BASE_URL; ?>/images/office-equipment-secure-packing-jamshedpur.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91-8409531615",
        "priceRange": "₹3,500 - ₹45,000",
        "description": "Premium household shifting, corporate office relocation, student room moving, and vehicle carrier services in Boring Road, Patna, Bihar.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Boring Road Chauraha, Near Nageshwar Colony",
            "addressLocality": "Patna",
            "addressRegion": "Bihar",
            "postalCode": "800001",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 25.6137,
            "longitude": 85.1189
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
            "opens": "07:00",
            "closes": "22:00"
        },
        "areaServed": [
            { "@type": "AdministrativeArea", "name": "Boring Road, Patna" },
            { "@type": "AdministrativeArea", "name": "Boring Canal Road, Patna" },
            { "@type": "AdministrativeArea", "name": "Nageshwar Colony, Patna" },
            { "@type": "AdministrativeArea", "name": "Anandpuri, Patna" },
            { "@type": "AdministrativeArea", "name": "Sri Krishna Puri (SK Puri), Patna" },
            { "@type": "AdministrativeArea", "name": "Alkapuri, Patna" },
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
                "name": "Packers and Movers in Boring Road Patna",
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
            "name": "Boring Road, Patna, Bihar"
        },
        "description": "Comprehensive packing, loading, transport, unloading, and unpacking services for apartments, corporate offices, and student flats in Boring Road, Patna."
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
                "name": "What are the local moving charges in Boring Road Patna?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "For local moves within Boring Road or neighboring Patna localities (such as SK Puri, Anandpuri, or Bailey Road), charges typically range from ₹3,500 to ₹6,500 for a 1 BHK flat, ₹6,500 to ₹12,000 for a 2 BHK apartment, and ₹11,000 to ₹18,500 for a 3 BHK residence. Student single-room moves start from ₹2,500 depending on inventory."
                }
            },
            {
                "@type": "Question",
                "name": "How do you navigate heavy traffic and parking restrictions on Boring Road?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Boring Road Chauraha and Boring Canal Road experience intense commercial activity during afternoon and evening hours. We schedule loading operations either in the early morning (7:00 AM to 10:00 AM) or after 8:30 PM, utilizing maneuverable Tata Ace and 14-foot enclosed trucks to avoid traffic jams and parking citations."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide student room shifting for coaching aspirants on Boring Road?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Boring Road hosts hundreds of coaching institutes and student hostels. We offer budget-friendly mini-shifting packages covering study tables, desktop computers, books, mattress, coolers, and personal luggage with quick same-day delivery."
                }
            },
            {
                "@type": "Question",
                "name": "How quickly can your surveyor reach my flat in Nageshwar Colony or SK Puri?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our mobile team is stationed right near Boring Road Chauraha. We can arrive at your doorstep in Nageshwar Colony, Alkapuri, Anandpuri, or Sri Krishna Puri within 25 to 45 minutes for a free physical assessment and written estimate."
                }
            },
            {
                "@type": "Question",
                "name": "Can you handle elevator and staircase shifting in older apartments of Boring Road?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our certified labor crew is trained in specialized staircase maneuvering, heavy lifting straps, and balcony hoisting for oversized sofas and double beds that do not fit standard older passenger elevators."
                }
            },
            {
                "@type": "Question",
                "name": "Are my goods insured during intercity transport from Boring Road Patna?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Absolutely. For all intercity moves out of Boring Road to cities like Ranchi, Jamshedpur, Kolkata, Delhi, or Bangalore, we offer 100% comprehensive transit insurance with government-approved freight carriers."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped CSS for Boring Road Patna Page: Prefix brp- */
        .brp-hero {
            background: linear-gradient(135deg, #0e2b5c 0%, #0a1f42 100%);
            color: #ffffff;
            padding: 60px 16px 50px;
            position: relative;
            text-align: center;
        }
        .brp-hero-inner {
            max-width: 980px;
            margin: 0 auto;
        }
        .brp-hero-badge {
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
        .brp-hero-title {
            font-size: clamp(1.8rem, 3.5vw, 2.7rem);
            font-weight: 800;
            line-height: 1.25;
            margin-bottom: 18px;
            color: #ffffff;
        }
        .brp-hero-desc {
            font-size: 1.05rem;
            line-height: 1.65;
            color: #d8e2f0;
            max-width: 820px;
            margin: 0 auto 28px;
        }
        .brp-hero-pills {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-bottom: 25px;
        }
        .brp-pill {
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.22);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.88rem;
            color: #ffffff;
        }
        .brp-quick-bar {
            display: flex;
            justify-content: center;
            gap: 14px;
            flex-wrap: wrap;
            margin-top: 15px;
        }
        .brp-quick-btn {
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
        .brp-quick-btn:hover {
            background: #e64a19;
            transform: translateY(-2px);
        }
        .brp-quick-btn.brp-sec-btn {
            background: #25d366;
        }
        .brp-quick-btn.brp-sec-btn:hover {
            background: #1ebc59;
        }
        .brp-section {
            padding: 55px 16px;
        }
        .brp-section.brp-bg-alt {
            background: #f8fafc;
        }
        .brp-container {
            max-width: 1140px;
            margin: 0 auto;
        }
        .brp-section-header {
            text-align: center;
            margin-bottom: 40px;
        }
        .brp-section-title {
            font-size: clamp(1.5rem, 2.8vw, 2.1rem);
            font-weight: 800;
            color: #0e2b5c;
            margin-bottom: 12px;
            line-height: 1.3;
        }
        .brp-section-subtitle {
            font-size: 1rem;
            color: #556987;
            max-width: 780px;
            margin: 0 auto;
            line-height: 1.6;
        }
        .brp-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 28px;
            align-items: center;
        }
        .brp-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }
        .brp-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }
        @media (max-width: 900px) {
            .brp-grid-3, .brp-grid-4 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 768px) {
            .brp-grid-2, .brp-grid-3, .brp-grid-4 {
                grid-template-columns: 1fr;
            }
        }
        .brp-card {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            padding: 24px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.04);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .brp-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.08);
        }
        .brp-card-icon {
            font-size: 1.8rem;
            color: #ff5722;
            margin-bottom: 14px;
            display: inline-block;
        }
        .brp-card-title {
            font-size: 1.15rem;
            font-weight: 700;
            color: #0e2b5c;
            margin-bottom: 10px;
            line-height: 1.4;
        }
        .brp-card-text {
            font-size: 0.94rem;
            color: #556987;
            line-height: 1.6;
            margin: 0;
        }
        .brp-image-box {
            max-width: 580px;
            margin: 20px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            background: #eef2f6;
        }
        .brp-image-box img {
            width: 100%;
            height: auto;
            max-height: 420px;
            object-fit: cover;
            display: block;
        }
        .brp-image-caption {
            font-size: 0.85rem;
            color: #64748b;
            text-align: center;
            padding: 10px 14px;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            margin: 0;
            font-style: italic;
        }
        .brp-table-wrapper {
            overflow-x: auto;
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 14px rgba(0,0,0,0.04);
            margin: 24px 0;
        }
        .brp-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.94rem;
        }
        .brp-table th {
            background: #0e2b5c;
            color: #ffffff;
            padding: 14px 16px;
            font-weight: 700;
        }
        .brp-table td {
            padding: 13px 16px;
            border-bottom: 1px solid #edf2f7;
            color: #334155;
        }
        .brp-table tr:last-child td {
            border-bottom: none;
        }
        .brp-table tr:hover td {
            background: #f8fafc;
        }
        .brp-process-step {
            display: flex;
            gap: 18px;
            background: #ffffff;
            padding: 22px;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            margin-bottom: 16px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.03);
        }
        .brp-process-num {
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
        .brp-process-content h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: #0e2b5c;
            margin: 0 0 8px;
        }
        .brp-process-content p {
            font-size: 0.93rem;
            color: #556987;
            line-height: 1.6;
            margin: 0;
        }
        .brp-faq-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            margin-bottom: 14px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
        }
        .brp-faq-question {
            padding: 18px 20px;
            font-weight: 700;
            color: #0e2b5c;
            font-size: 1.02rem;
            background: #ffffff;
            border-bottom: 1px solid #edf2f7;
        }
        .brp-faq-answer {
            padding: 16px 20px 20px;
            color: #556987;
            font-size: 0.93rem;
            line-height: 1.65;
        }
        .brp-cluster-box {
            background: #f1f5f9;
            border-radius: 12px;
            padding: 28px;
            border: 1px solid #e2e8f0;
            margin-top: 25px;
        }
        .brp-cluster-link {
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
        .brp-cluster-link:hover {
            background: #ff5722;
            color: #ffffff;
            border-color: #ff5722;
            transform: translateY(-2px);
        }
        .brp-cta-box {
            background: linear-gradient(135deg, #0e2b5c 0%, #1e3a8a 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 40px 24px;
            text-align: center;
            margin-top: 35px;
        }
        .brp-cta-title {
            font-size: clamp(1.4rem, 2.5vw, 1.9rem);
            font-weight: 800;
            margin-bottom: 12px;
            color: #ffffff;
        }
        .brp-cta-desc {
            font-size: 0.98rem;
            color: #cbd5e1;
            max-width: 650px;
            margin: 0 auto 24px;
            line-height: 1.6;
        }
        .brp-cta-btn {
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
        .brp-cta-btn:hover {
            background: #e64a19;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
<?php require_once __DIR__ . '/../includes/header.php'; ?>

<!-- Breadcrumb Navigation Bar -->
<div style="background: #f1f5f9; padding: 12px 16px; border-bottom: 1px solid #e2e8f0; font-size: 0.88rem;">
    <div class="brp-container">
        <a href="<?php echo SITE_BASE_URL; ?>/" style="color: #0e2b5c; text-decoration: none; font-weight: 600;">Home</a>
        <span style="margin: 0 8px; color: #94a3b8;">/</span>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patna" style="color: #0e2b5c; text-decoration: none; font-weight: 600;">Packers and Movers in Patna</a>
        <span style="margin: 0 8px; color: #94a3b8;">/</span>
        <span style="color: #64748b; font-weight: 600;">Boring Road</span>
    </div>
</div>

<!-- Hero Section -->
<section class="brp-hero">
    <div class="brp-hero-inner">
        <span class="brp-hero-badge">Prime Residential & Commercial Shifting</span>
        <h1 class="brp-hero-title">Packers and Movers in Boring Road Patna</h1>
        <p class="brp-hero-desc">
            Shree Ashirwad Packers and Movers delivers fast, professional, and scratch-free home shifting, student flat moves, and corporate relocations across Boring Road, Patna. Serving Nageshwar Colony, Anandpuri, Sri Krishna Puri, Boring Canal Road, and Alkapuri with customized mini-trucks, five-layer protective packaging, and experienced handling crew.
        </p>
        <div class="brp-hero-pills">
            <span class="brp-pill">✓ 25-Min Quick Doorstep Survey</span>
            <span class="brp-pill">✓ Off-Peak Timed City Logistics</span>
            <span class="brp-pill">✓ Student & Coaching Flat Discounts</span>
            <span class="brp-pill">✓ Zero Transit Damage Warranty</span>
            <span class="brp-pill">✓ 100% Transparent Price Quotation</span>
        </div>
        <div class="brp-quick-bar">
            <a href="tel:+918409531615" class="brp-quick-btn">
                <span>📞 Call 8409531615</span>
            </a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20home%20shifting%20in%20Boring%20Road%20Patna" class="brp-quick-btn brp-sec-btn" target="_blank" rel="noopener noreferrer">
                <span>💬 WhatsApp Quick Quote</span>
            </a>
        </div>
    </div>
</section>

<!-- Section 1: Locality Dynamics & Relocation Realities -->
<section class="brp-section">
    <div class="brp-container">
        <div class="brp-grid-2">
            <div>
                <span style="color: #ff5722; font-weight: 700; font-size: 0.88rem; text-transform: uppercase;">Central Patna Mobility Hub</span>
                <h2 class="brp-section-title">Mastering Relocation in Patna's Most Dynamic Commercial Corridor</h2>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Boring Road stands at the beating heart of Patna's educational, retail, and upscale residential landscape. Connecting Bailey Road at Hartali Mor with Patliputra Colony and Boring Canal Road, this bustling arterial sector hosts premier coaching institutions, multi-specialty clinics, student hostels, and premium high-rise residences in Sri Krishna Puri (SK Puri), Nageshwar Colony, and Anandpuri.
                </p>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    However, moving household goods in Boring Road demands meticulous logistics planning. Narrow entry alleys off Boring Canal Road, dense student pedestrian traffic near A.N. College, and peak-hour commercial bottlenecks at Boring Road Chauraha make daytime parking difficult for large intercity freight trailers. Our field team circumvents these challenges through strategic scheduling—executing packing during quiet morning hours and deploying nimble Tata 407 and Mahindra Bolero pickup shuttles to transport items smoothly without causing street jams.
                </p>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    In residential clusters like Nageshwar Colony and Anandpuri, where many lanes date back several decades, overhead telephone cables, tight gate corners, and restricted on-street vehicle parking require practiced manual handling. Our supervisors coordinate with apartment security guards and neighborhood resident welfare committees beforehand to reserve dedicated driveway slots for our carrier vehicles. Furthermore, for high-rise towers in Sri Krishna Puri equipped with modern elevators, we install specialized protective wall quilts inside lift cabins to prevent any accidental scrapes or cosmetic damage during appliance transfers.
                </p>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7;">
                    Whether you are an engineering student transitioning to an apartment, a doctor shifting near Nageshwar Colony, or a family moving into an SK Puri penthouse, our services seamlessly connect with our city-wide <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patna" style="color: #0e2b5c; font-weight: 700; text-decoration: underline;">Packers and Movers in Patna</a> network and our national interstate headquarters at <a href="<?php echo SITE_BASE_URL; ?>/" style="color: #0e2b5c; font-weight: 700; text-decoration: underline;">Packers and Movers in Ranchi</a>.
                </p>
            </div>
            <div>
                <div class="brp-image-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/office-equipment-secure-packing-jamshedpur.jpg" alt="Commercial and residential packing services by Shree Ashirwad Packers in Boring Road Patna" loading="lazy">
                    <p class="brp-image-caption">Professional crating and packing for study setups, IT hardware, and modern offices in Boring Road, Patna.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 2: Specialized Local Relocation Offerings -->
<section class="brp-section brp-bg-alt">
    <div class="brp-container">
        <div class="brp-section-header">
            <h2 class="brp-section-title">Specialized Relocation Services in Boring Road Patna</h2>
            <p class="brp-section-subtitle">Comprehensive moving solutions customized for students, working professionals, families, and commercial establishments.</p>
        </div>
        <div class="brp-grid-3">
            <div class="kbp-card brp-card">
                <span class="brp-card-icon">🎓</span>
                <h3 class="brp-card-title">Student Room & Hostel Shifting</h3>
                <p class="brp-card-text">
                    Economical mini-move packages for students and coaching aspirants around Boring Road Chauraha and A.N. College. Same-day shifting for study tables, books, mattresses, personal computer setups, and mini-fridges.
                </p>
            </div>
            <div class="kbp-card brp-card">
                <span class="brp-card-icon">🏢</span>
                <h3 class="brp-card-title">Coaching & Corporate Office Moves</h3>
                <p class="brp-card-text">
                    Specialized relocation for coaching centers, digital academies, diagnostic laboratories, and retail showrooms along Boring Canal Road. We manage desks, projector systems, server racks, and filing cabinets with zero disruption.
                </p>
            </div>
            <div class="kbp-card brp-card">
                <span class="brp-card-icon">🛋️</span>
                <h3 class="brp-card-title">Luxury High-Rise Apartment Shifting</h3>
                <p class="brp-card-text">
                    White-glove shifting for premium residential apartments in Sri Krishna Puri and Nageshwar Colony. Includes elevator wall padding, protective carpet runners, and specialized furniture hoisting for bulky sectionals.
                </p>
            </div>
            <div class="kbp-card brp-card">
                <span class="brp-card-icon">📦</span>
                <h3 class="brp-card-title">5-Layer Shockproof Packaging</h3>
                <p class="brp-card-text">
                    We utilize virgin 5-ply corrugated cartons, high-density bubble wrap, foam corner protectors, and heavy stretch film. Every glassware piece, dinner set, and electronic appliance is packed with multi-layer cushioning.
                </p>
            </div>
            <div class="kbp-card brp-card">
                <span class="brp-card-icon">🛵</span>
                <h3 class="brp-card-title">Bike & Scooty Transportation</h3>
                <p class="brp-card-text">
                    Safe two-wheeler transport from Boring Road to Ranchi, Jamshedpur, Bokaro, Kolkata, or Delhi NCR. Handlebar strapping, mirror dismounting, bubble wrapping, and transit in dedicated closed vehicle trucks.
                </p>
            </div>
            <div class="kbp-card brp-card">
                <span class="brp-card-icon">🛡️</span>
                <h3 class="brp-card-title">Transit Insurance & Safe Storage</h3>
                <p class="brp-card-text">
                    Peace of mind with full-value comprehensive goods insurance for intercity moves originating in Boring Road, backed by flexible climate-controlled warehouse storage options during house painting or delayed flat possession.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: Packing Protocols & Electronics Safety -->
<section class="brp-section">
    <div class="brp-container">
        <div class="brp-grid-2">
            <div>
                <div class="brp-image-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/household-appliances-protective-cover-ranchi.jpg" alt="Protective packing for household appliances and kitchen items in Boring Road Patna" loading="lazy">
                    <p class="brp-image-caption">Custom padded covers for refrigerators, washing machines, and sensitive kitchen gadgets in Boring Road homes.</p>
                </div>
            </div>
            <div>
                <span style="color: #ff5722; font-weight: 700; font-size: 0.88rem; text-transform: uppercase;">Maximum Material Protection</span>
                <h2 class="brp-section-title">Superior Protective Protocols for High-Value Goods</h2>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7; margin-bottom: 14px;">
                    In affluent colonies like SK Puri, Nageshwar Colony, and Alkapuri, homes frequently contain high-end consumer appliances, imported crystal items, executive study libraries, and delicate artworks. Shree Ashirwad Packers adheres to strict quality guidelines to eliminate any possibility of scratch, dent, or breakage.
                </p>
                <ul style="padding-left: 20px; color: #475569; font-size: 0.95rem; line-height: 1.8; margin-bottom: 18px;">
                    <li><strong>Appliances Cushioning:</strong> Double-door frost-free refrigerators, microwave ovens, and washing machines receive thick foam padding, corner edge protectors, and waterproof outer wrapping.</li>
                    <li><strong>Anti-Static TV Packaging:</strong> Big-screen televisions (55” to 85”) are enclosed in anti-static bubble wrap and secured in customized heavy-duty wooden crates.</li>
                    <li><strong>Disassembly of Modular Furniture:</strong> Hydraulic beds, six-door wardrobes, and glass-top dining tables are dismantled with precision toolsets, labeled, and assembled at the new residence.</li>
                    <li><strong>Systematic Book & Document Crating:</strong> Study materials and business files are placed into reinforced water-resistant boxes with descriptive inventory markings.</li>
                </ul>
                <p style="font-size: 0.95rem; color: #475569; line-height: 1.7;">
                    Check our verified moving tariff schedule via our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" style="color: #0e2b5c; font-weight: 700; text-decoration: underline;">Transparent Relocation Tariff Calculator</a>.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section 4: Transparent Pricing Table -->
<section class="brp-section brp-bg-alt">
    <div class="brp-container">
        <div class="brp-section-header">
            <h2 class="brp-section-title">Transparent Relocation Charges in Boring Road Patna</h2>
            <p class="brp-section-subtitle">Standardized, honest rates with full breakdown of materials, labor, transportation, and setup.</p>
        </div>
        <div class="brp-table-wrapper">
            <table class="brp-table">
                <thead>
                    <tr>
                        <th>Shifting Scope / Living Setup</th>
                        <th>Local Shifting (Within Patna / Nearby)</th>
                        <th>Intercity Shifting (Outside Patna)</th>
                        <th>Packaging Specs & Manpower</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Student / Single Room Shifting</strong></td>
                        <td>₹2,500 - ₹5,000</td>
                        <td>₹7,500 - ₹14,000</td>
                        <td>Compact 2-Layer Packing, 2 Experienced Crew</td>
                    </tr>
                    <tr>
                        <td><strong>1 BHK Apartment / Flat</strong></td>
                        <td>₹3,500 - ₹6,500</td>
                        <td>₹10,000 - ₹17,500</td>
                        <td>Standard 3-Layer Packing, 3 Skilled Packers</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Residential Apartment</strong></td>
                        <td>₹6,500 - ₹12,000</td>
                        <td>₹15,500 - ₹26,000</td>
                        <td>Premium 4-Layer Packing, 4-5 Professional Crew</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Luxury Flat / House</strong></td>
                        <td>₹11,000 - ₹18,500</td>
                        <td>₹23,000 - ₹36,000</td>
                        <td>5-Layer Heavy Armor Packaging, 5-6 Trained Crew</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Bungalow / Duplex</strong></td>
                        <td>₹15,500 - ₹25,000</td>
                        <td>₹32,000 - ₹48,000</td>
                        <td>Full Wooden Crating, White Glove Dedicated Supervisor</td>
                    </tr>
                    <tr>
                        <td><strong>Motorcycle / Scooter Courier</strong></td>
                        <td>₹1,200 - ₹2,200</td>
                        <td>₹3,500 - ₹6,000</td>
                        <td>Foam Wrapping, Mirror Dismantle & Strapped Transit</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="font-size: 0.88rem; color: #64748b; text-align: center; margin-top: 12px;">
            * Rates may vary based on exact floor elevation, service lift availability, walking distance from parking gate, and high-value fragile crating.
        </p>
    </div>
</section>

<!-- Section 5: Step-by-Step Moving Process -->
<section class="brp-section">
    <div class="brp-container">
        <div class="brp-grid-2">
            <div>
                <span style="color: #ff5722; font-weight: 700; font-size: 0.88rem; text-transform: uppercase;">Seamless 4-Stage Protocol</span>
                <h2 class="brp-section-title">How We Manage Your Move in Boring Road</h2>
                <div class="brp-process-step">
                    <div class="brp-process-num">1</div>
                    <div class="brp-process-content">
                        <h4>Doorstep Assessment & Custom Plan</h4>
                        <p>Our operations officer visits your residence or commercial office in Boring Road, assessing packing volume, elevator dimensions, and lane parking options to formulate a fixed-price written quotation.</p>
                    </div>
                </div>
                <div class="brp-process-step">
                    <div class="brp-process-num">2</div>
                    <div class="brp-process-content">
                        <h4>Systematic Packing with Quality Supplies</h4>
                        <p>Our trained packers arrive equipped with virgin corrugated boxes, bubble cushioning, stretch film, and custom toolkits to systematically wrap household goods, appliances, and fragile crockery.</p>
                    </div>
                </div>
                <div class="brp-process-step">
                    <div class="brp-process-num">3</div>
                    <div class="brp-process-content">
                        <h4>Timed Loading & Smooth City Transit</h4>
                        <p>Loading is coordinated during optimal traffic windows using specialized enclosed vehicles. Padded straps and tie-down points secure furniture against transit movement through Patna's roads.</p>
                    </div>
                </div>
                <div class="brp-process-step">
                    <div class="brp-process-num">4</div>
                    <div class="brp-process-content">
                        <h4>Unloading, Furniture Re-Assembly & Setup</h4>
                        <p>At your new residence, our crew carries goods to designated rooms, reassembles beds and wardrobes, assists in initial placement, and removes all empty packing materials.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="brp-image-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Master carpentry team dismantling wooden furniture in Boring Road residence" loading="lazy">
                    <p class="brp-image-caption">Expert dismantling and hardware packing for designer wooden furniture and modular wardrobes.</p>
                </div>
                <div class="brp-image-box" style="margin-top: 24px;">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Enclosed container truck providing prompt door to door shifting in Boring Road Patna" loading="lazy">
                    <p class="brp-image-caption">Weather-sealed container vehicles engineered for secure urban and long-distance relocations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 6: Specific Sector Insights for Boring Road Sub-Areas -->
<section class="brp-section brp-bg-alt">
    <div class="brp-container">
        <div class="brp-section-header">
            <h2 class="brp-section-title">Navigating Key Colonies in Boring Road Patna</h2>
            <p class="brp-section-subtitle">Hyper-local knowledge ensures efficient, trouble-free moving across every sub-pocket of Boring Road.</p>
        </div>
        <div class="brp-grid-4">
            <div class="kbp-card brp-card">
                <h3 class="brp-card-title">Sri Krishna Puri (SK Puri)</h3>
                <p class="brp-card-text">
                    Patna's premier upscale residential enclave featuring modern apartment towers and lush bungalows around Children's Park. We coordinate with apartment management for lift access and quiet moving hours.
                </p>
            </div>
            <div class="kbp-card brp-card">
                <h3 class="brp-card-title">Nageshwar Colony</h3>
                <p class="brp-card-text">
                    Established residential and medical belt with narrow internal streets. We utilize compact 14-foot moving trucks to navigate corners easily without obstructing local traffic.
                </p>
            </div>
            <div class="kbp-card brp-card">
                <h3 class="brp-card-title">Anandpuri & Alkapuri</h3>
                <p class="brp-card-text">
                    Dense residential pocket connecting Boring Canal Road. Our team arranges early-morning loading slots to ensure swift transit before commercial market shutters open.
                </p>
            </div>
            <div class="kbp-card brp-card">
                <h3 class="brp-card-title">Boring Canal Road & Hartali Mor</h3>
                <p class="brp-card-text">
                    Major transit artery with high vehicular flow. Our experienced drivers coordinate directly with local traffic signals and use designated loading bays for seamless transfers.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section 7: Frequently Asked Questions (FAQ) -->
<section class="brp-section">
    <div class="brp-container">
        <div class="brp-section-header">
            <h2 class="brp-section-title">Frequently Asked Questions — Boring Road Relocation</h2>
            <p class="brp-section-subtitle">Helpful answers regarding moving logistics, costs, student shifting, and safety in Boring Road, Patna.</p>
        </div>
        <div style="max-width: 860px; margin: 0 auto;">
            <div class="brp-faq-item">
                <div class="brp-faq-question">What are the local moving charges in Boring Road Patna?</div>
                <div class="brp-faq-answer">
                    For local moves within Boring Road or neighboring Patna localities (such as SK Puri, Anandpuri, or Bailey Road), charges typically range from ₹3,500 to ₹6,500 for a 1 BHK flat, ₹6,500 to ₹12,000 for a 2 BHK apartment, and ₹11,000 to ₹18,500 for a 3 BHK residence. Student single-room moves start from ₹2,500 depending on inventory.
                </div>
            </div>
            <div class="brp-faq-item">
                <div class="brp-faq-question">How do you navigate heavy traffic and parking restrictions on Boring Road?</div>
                <div class="brp-faq-answer">
                    Boring Road Chauraha and Boring Canal Road experience intense commercial activity during afternoon and evening hours. We schedule loading operations either in the early morning (7:00 AM to 10:00 AM) or after 8:30 PM, utilizing maneuverable Tata Ace and 14-foot enclosed trucks to avoid traffic jams and parking citations.
                </div>
            </div>
            <div class="brp-faq-item">
                <div class="brp-faq-question">Do you provide student room shifting for coaching aspirants on Boring Road?</div>
                <div class="brp-faq-answer">
                    Yes. Boring Road hosts hundreds of coaching institutes and student hostels. We offer budget-friendly mini-shifting packages covering study tables, desktop computers, books, mattress, coolers, and personal luggage with quick same-day delivery.
                </div>
            </div>
            <div class="brp-faq-item">
                <div class="brp-faq-question">How quickly can your surveyor reach my flat in Nageshwar Colony or SK Puri?</div>
                <div class="brp-faq-answer">
                    Our mobile team is stationed right near Boring Road Chauraha. We can arrive at your doorstep in Nageshwar Colony, Alkapuri, Anandpuri, or Sri Krishna Puri within 25 to 45 minutes for a free physical assessment and written estimate.
                </div>
            </div>
            <div class="brp-faq-item">
                <div class="brp-faq-question">Can you handle elevator and staircase shifting in older apartments of Boring Road?</div>
                <div class="brp-faq-answer">
                    Yes, our certified labor crew is trained in specialized staircase maneuvering, heavy lifting straps, and balcony hoisting for oversized sofas and double beds that do not fit standard older passenger elevators.
                </div>
            </div>
            <div class="brp-faq-item">
                <div class="brp-faq-question">Are my goods insured during intercity transport from Boring Road Patna?</div>
                <div class="brp-faq-answer">
                    Absolutely. For all intercity moves out of Boring Road to cities like Ranchi, Jamshedpur, Kolkata, Delhi, or Bangalore, we offer 100% comprehensive transit insurance with government-approved freight carriers.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 8: Sister Neighborhoods Cluster Navigation & Long-Distance Corridors -->
<section class="brp-section brp-bg-alt">
    <div class="brp-container">
        <div class="brp-section-header">
            <h2 class="brp-section-title">Explore Nearby Shifting Hubs Across Patna & Intercity Routes</h2>
            <p class="brp-section-subtitle">Connecting Boring Road with all prominent residential neighborhoods in Patna and interstate corridors.</p>
        </div>
        <div class="brp-cluster-box">
            <h3 style="font-size: 1.15rem; color: #0e2b5c; font-weight: 700; margin-bottom: 12px;">Top Patna Neighborhood Authority Pages:</h3>
            <div>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patna" class="brp-cluster-link" style="background: #0e2b5c; color: #ffffff; border-color: #0e2b5c;">★ Patna Central City Hub</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kankarbagh-patna" class="brp-cluster-link">Kankarbagh Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bailey-road-patna" class="brp-cluster-link">Bailey Road Shifting</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patliputra-colony-patna" class="brp-cluster-link">Patliputra Colony Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-rajendra-nagar-patna" class="brp-cluster-link">Rajendra Nagar Shifting</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-danapur-patna" class="brp-cluster-link">Danapur Relocation</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ashiana-nagar-patna" class="brp-cluster-link">Ashiana Nagar Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-anisabad-patna" class="brp-cluster-link">Anisabad Shifting</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-khagaul-patna" class="brp-cluster-link">Khagaul Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-phulwari-sharif-patna" class="brp-cluster-link">Phulwari Sharif Relocation</a>
            </div>
            <h3 style="font-size: 1.15rem; color: #0e2b5c; font-weight: 700; margin: 24px 0 12px;">Direct Long-Distance Corridors from Patna:</h3>
            <div>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-ranchi-packers-and-movers" class="brp-cluster-link">Patna to Ranchi Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-jamshedpur-packers-and-movers" class="brp-cluster-link">Patna to Jamshedpur Shifting</a>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-dhanbad-packers-and-movers" class="brp-cluster-link">Patna to Dhanbad Relocation</a>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-bokaro-packers-and-movers" class="brp-cluster-link">Patna to Bokaro Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/adityapur-to-patna-packers-and-movers" class="brp-cluster-link">Adityapur to Patna Route</a>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-deoghar-packers-and-movers" class="brp-cluster-link">Patna to Deoghar Route</a>
            </div>
        </div>

        <!-- Call to Action Banner -->
        <div class="brp-cta-box">
            <h3 class="brp-cta-title">Planning a Relocation in Boring Road Patna?</h3>
            <p class="brp-cta-desc">
                Contact our local Boring Road moving specialists today for an instant free quotation, transparent pricing, and punctual, damage-free delivery.
            </p>
            <div style="display: flex; justify-content: center; gap: 14px; flex-wrap: wrap;">
                <a href="tel:+918409531615" class="brp-cta-btn">Call Now: 8409531615</a>
                <a href="<?php echo SITE_BASE_URL; ?>/contact" class="brp-cta-btn" style="background: transparent; border: 2px solid #ffffff;">Request Survey Online</a>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
