<?php
/**
 * Page: Packers and Movers in Patliputra Colony Patna
 * Tier: Tier 2 (Hyper-Local Neighborhood Hub)
 * Parent City Hub: pages/packers-and-movers-in-patna.php
 * Target URL: https://www.shreeashirwadpackers.com/packers-and-movers-in-patliputra-colony-patna
 */

$page_title = "Packers and Movers in Patliputra Colony Patna | Luxury Shifting";
$page_description = "Elite packers and movers in Patliputra Colony Patna. White-glove home shifting, bungalow moving, fine art crating & villa relocation across Patliputra Golambar, Alpana Market & Kurji. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/packers-and-movers-in-patliputra-colony-patna";
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
    <meta name="keywords" content="packers and movers in patliputra colony patna, home shifting patliputra colony, luxury movers patna, villa relocation patliputra, bungalow shifting patna, packers near patliputra golambar, alpana market movers patna">
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
    <meta name="geo.placename" content="Patliputra Colony, Patna">
    <meta name="geo.position" content="25.6315;85.1126">
    <meta name="ICBM" content="25.6315, 85.1126">

    <link rel="shortcut icon" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo SITE_BASE_URL; ?>/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Structured Data 1: MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Patliputra Colony Patna Hub",
        "image": "<?php echo SITE_BASE_URL; ?>/images/multistory-apartment-goods-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91-8409531615",
        "priceRange": "₹3,800 - ₹52,000",
        "description": "Premium white-glove packers and movers in Patliputra Colony Patna specializing in luxury villa relocation, antique furniture crating, corporate guest house moving, and intercity transit.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Main Road, Near Patliputra Golambar",
            "addressLocality": "Patna",
            "addressRegion": "Bihar",
            "postalCode": "800013",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 25.6315,
            "longitude": 85.1126
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
            "opens": "07:00",
            "closes": "22:00"
        },
        "areaServed": [
            { "@type": "AdministrativeArea", "name": "Patliputra Colony, Patna" },
            { "@type": "AdministrativeArea", "name": "Patliputra Golambar, Patna" },
            { "@type": "AdministrativeArea", "name": "Alpana Market, Patna" },
            { "@type": "AdministrativeArea", "name": "Kurji More, Patna" },
            { "@type": "AdministrativeArea", "name": "Patliputra Industrial Area, Patna" },
            { "@type": "AdministrativeArea", "name": "Loyola School Road, Patna" },
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
                "name": "Packers and Movers in Patliputra Colony Patna",
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
        "serviceType": "White-Glove Luxury Household and Villa Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers",
            "url": "https://www.shreeashirwadpackers.com"
        },
        "areaServed": {
            "@type": "AdministrativeArea",
            "name": "Patliputra Colony, Patna, Bihar"
        },
        "description": "White-glove household relocation, antique crating, modular kitchen dismantling, and vehicle transportation for luxury bungalows and apartments in Patliputra Colony, Patna."
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
                "name": "What are the shifting rates for villas and luxury flats in Patliputra Colony Patna?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "For local moves within Patliputra Colony or to neighboring sectors like Boring Road, SK Puri, or Bailey Road, moving charges typically average ₹3,800 to ₹7,000 for a 1 BHK flat, ₹7,000 to ₹13,500 for a 2 BHK apartment, and ₹12,000 to ₹20,000 for a 3 BHK residence. For sprawling independent bungalows and luxury duplexes, custom packages range from ₹18,000 to ₹28,000 with white-glove crating and dedicated supervisors."
                }
            },
            {
                "@type": "Question",
                "name": "How do you protect antique furniture and crystal glassware in Patliputra Colony homes?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Homes in Patliputra Colony frequently feature heritage furniture and imported crystal chandeliers. We use an exclusive 5-layer packaging protocol: anti-static foam wraps, multi-density bubble cushioning, custom wooden skeleton crates, corner guards, and industrial stretch film, ensuring zero impact or surface abrasion."
                }
            },
            {
                "@type": "Question",
                "name": "Do you follow colony cooperative society rules regarding quiet hours and truck parking?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Patliputra Housing Co-operative Society enforces strict residential cleanliness and quiet hour policies. Our moving crew operates exclusively between permitted morning and afternoon hours, uses driveway floor runners, and parks enclosed trucks without impeding local neighborhood access."
                }
            },
            {
                "@type": "Question",
                "name": "How quickly can your survey supervisor visit my bungalow near Patliputra Golambar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our mobile field operations unit is stationed right off Patliputra Golambar near Alpana Market. We can arrive at your residence anywhere in Patliputra Colony, Kurji, or along the Loyola School road within 20 to 35 minutes for a comprehensive on-site survey."
                }
            },
            {
                "@type": "Question",
                "name": "Do you offer corporate office and guest house shifting in Patliputra Industrial Area?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We manage corporate relocations, executive guest house transfers, and commercial logistics for business entities in and around the Patliputra Industrial Area, providing weekend moves to avoid operational downtime."
                }
            },
            {
                "@type": "Question",
                "name": "Is full comprehensive transit insurance included for intercity relocations?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. All intercity relocations originating from Patliputra Colony to cities like Ranchi, Jamshedpur, Kolkata, Bangalore, Pune, and Delhi NCR include 100% comprehensive transit risk coverage underwritten by leading national insurance corporations."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped CSS for Patliputra Colony Patna Page: Prefix pcp- */
        .pcp-hero {
            background: linear-gradient(135deg, #0e2b5c 0%, #061836 100%);
            color: #ffffff;
            padding: 60px 16px 50px;
            position: relative;
            text-align: center;
        }
        .pcp-hero-inner {
            max-width: 980px;
            margin: 0 auto;
        }
        .pcp-hero-badge {
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
        .pcp-hero-title {
            font-size: clamp(1.8rem, 3.5vw, 2.7rem);
            font-weight: 800;
            line-height: 1.25;
            margin-bottom: 18px;
            color: #ffffff;
        }
        .pcp-hero-desc {
            font-size: 1.05rem;
            line-height: 1.65;
            color: #d8e2f0;
            max-width: 820px;
            margin: 0 auto 28px;
        }
        .pcp-hero-pills {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-bottom: 25px;
        }
        .pcp-pill {
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.22);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.88rem;
            color: #ffffff;
        }
        .pcp-quick-bar {
            display: flex;
            justify-content: center;
            gap: 14px;
            flex-wrap: wrap;
            margin-top: 15px;
        }
        .pcp-quick-btn {
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
        .pcp-quick-btn:hover {
            background: #e64a19;
            transform: translateY(-2px);
        }
        .pcp-quick-btn.pcp-sec-btn {
            background: #25d366;
        }
        .pcp-quick-btn.pcp-sec-btn:hover {
            background: #1ebc59;
        }
        .pcp-section {
            padding: 55px 16px;
        }
        .pcp-section.pcp-bg-alt {
            background: #f8fafc;
        }
        .pcp-container {
            max-width: 1140px;
            margin: 0 auto;
        }
        .pcp-section-header {
            text-align: center;
            margin-bottom: 40px;
        }
        .pcp-section-title {
            font-size: clamp(1.5rem, 2.8vw, 2.1rem);
            font-weight: 800;
            color: #0e2b5c;
            margin-bottom: 12px;
            line-height: 1.3;
        }
        .pcp-section-subtitle {
            font-size: 1rem;
            color: #556987;
            max-width: 780px;
            margin: 0 auto;
            line-height: 1.6;
        }
        .pcp-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 28px;
            align-items: center;
        }
        .pcp-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }
        .pcp-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }
        @media (max-width: 900px) {
            .pcp-grid-3, .pcp-grid-4 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 768px) {
            .pcp-grid-2, .pcp-grid-3, .pcp-grid-4 {
                grid-template-columns: 1fr;
            }
        }
        .pcp-card {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            padding: 24px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.04);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .pcp-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.08);
        }
        .pcp-card-icon {
            font-size: 1.8rem;
            color: #ff5722;
            margin-bottom: 14px;
            display: inline-block;
        }
        .pcp-card-title {
            font-size: 1.15rem;
            font-weight: 700;
            color: #0e2b5c;
            margin-bottom: 10px;
            line-height: 1.4;
        }
        .pcp-card-text {
            font-size: 0.94rem;
            color: #556987;
            line-height: 1.6;
            margin: 0;
        }
        .pcp-image-box {
            max-width: 580px;
            margin: 20px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            background: #eef2f6;
        }
        .pcp-image-box img {
            width: 100%;
            height: auto;
            max-height: 420px;
            object-fit: cover;
            display: block;
        }
        .pcp-image-caption {
            font-size: 0.85rem;
            color: #64748b;
            text-align: center;
            padding: 10px 14px;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            margin: 0;
            font-style: italic;
        }
        .pcp-table-wrapper {
            overflow-x: auto;
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 14px rgba(0,0,0,0.04);
            margin: 24px 0;
        }
        .pcp-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.94rem;
        }
        .pcp-table th {
            background: #0e2b5c;
            color: #ffffff;
            padding: 14px 16px;
            font-weight: 700;
        }
        .pcp-table td {
            padding: 13px 16px;
            border-bottom: 1px solid #edf2f7;
            color: #334155;
        }
        .pcp-table tr:last-child td {
            border-bottom: none;
        }
        .pcp-table tr:hover td {
            background: #f8fafc;
        }
        .pcp-process-step {
            display: flex;
            gap: 18px;
            background: #ffffff;
            padding: 22px;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            margin-bottom: 16px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.03);
        }
        .pcp-process-num {
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
        .pcp-process-content h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: #0e2b5c;
            margin: 0 0 8px;
        }
        .pcp-process-content p {
            font-size: 0.93rem;
            color: #556987;
            line-height: 1.6;
            margin: 0;
        }
        .pcp-faq-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            margin-bottom: 14px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
        }
        .pcp-faq-question {
            padding: 18px 20px;
            font-weight: 700;
            color: #0e2b5c;
            font-size: 1.02rem;
            background: #ffffff;
            border-bottom: 1px solid #edf2f7;
        }
        .pcp-faq-answer {
            padding: 16px 20px 20px;
            color: #556987;
            font-size: 0.93rem;
            line-height: 1.65;
        }
        .pcp-cluster-box {
            background: #f1f5f9;
            border-radius: 12px;
            padding: 28px;
            border: 1px solid #e2e8f0;
            margin-top: 25px;
        }
        .pcp-cluster-link {
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
        .pcp-cluster-link:hover {
            background: #ff5722;
            color: #ffffff;
            border-color: #ff5722;
            transform: translateY(-2px);
        }
        .pcp-cta-box {
            background: linear-gradient(135deg, #0e2b5c 0%, #1e3a8a 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 40px 24px;
            text-align: center;
            margin-top: 35px;
        }
        .pcp-cta-title {
            font-size: clamp(1.4rem, 2.5vw, 1.9rem);
            font-weight: 800;
            margin-bottom: 12px;
            color: #ffffff;
        }
        .pcp-cta-desc {
            font-size: 0.98rem;
            color: #cbd5e1;
            max-width: 650px;
            margin: 0 auto 24px;
            line-height: 1.6;
        }
        .pcp-cta-btn {
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
        .pcp-cta-btn:hover {
            background: #e64a19;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
<?php require_once __DIR__ . '/../includes/header.php'; ?>

<!-- Breadcrumb Navigation Bar -->
<div style="background: #f1f5f9; padding: 12px 16px; border-bottom: 1px solid #e2e8f0; font-size: 0.88rem;">
    <div class="pcp-container">
        <a href="<?php echo SITE_BASE_URL; ?>/" style="color: #0e2b5c; text-decoration: none; font-weight: 600;">Home</a>
        <span style="margin: 0 8px; color: #94a3b8;">/</span>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patna" style="color: #0e2b5c; text-decoration: none; font-weight: 600;">Packers and Movers in Patna</a>
        <span style="margin: 0 8px; color: #94a3b8;">/</span>
        <span style="color: #64748b; font-weight: 600;">Patliputra Colony</span>
    </div>
</div>

<!-- Hero Section -->
<section class="pcp-hero">
    <div class="pcp-hero-inner">
        <span class="pcp-hero-badge">Luxury Villa & Fine Art Relocation</span>
        <h1 class="pcp-hero-title">Packers and Movers in Patliputra Colony Patna</h1>
        <p class="pcp-hero-desc">
            Shree Ashirwad Packers and Movers delivers premier white-glove residential relocation, bungalow shifting, and antique crating across Patliputra Colony, Patna. Serving Patliputra Golambar, Alpana Market, Kurji More, Sahdeo Mahto Marg, and the Patliputra Industrial corridor with custom wooden crating, specialized furniture carpentry, and discrete, damage-free moving services.
        </p>
        <div class="pcp-hero-pills">
            <span class="pcp-pill">✓ White-Glove Luxury Moving Care</span>
            <span class="pcp-pill">✓ Antique & Fine Art Crating</span>
            <span class="pcp-pill">✓ Society Quiet Hours Compliance</span>
            <span class="pcp-pill">✓ Master Carpentry Dismantling</span>
            <span class="pcp-pill">✓ 100% Comprehensive Transit Cover</span>
        </div>
        <div class="pcp-quick-bar">
            <a href="tel:+918409531615" class="pcp-quick-btn">
                <span>📞 Call 8409531615</span>
            </a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20home%20shifting%20in%20Patliputra%20Colony%20Patna" class="pcp-quick-btn pcp-sec-btn" target="_blank" rel="noopener noreferrer">
                <span>💬 WhatsApp Quick Quote</span>
            </a>
        </div>
    </div>
</section>

<!-- Section 1: Detailed Neighborhood Dynamics & Heritage Aesthetics -->
<section class="pcp-section">
    <div class="pcp-container">
        <div class="pcp-grid-2">
            <div>
                <span style="color: #ff5722; font-weight: 700; font-size: 0.88rem; text-transform: uppercase;">Patna's Elite Residential Enclave</span>
                <h2 class="pcp-section-title">White-Glove Moving for Patliputra Colony's Distinguished Homes</h2>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Founded in 1954 as the Patliputra Housing Co-operative Society, Patliputra Colony holds an iconic position as Patna's first planned, premier upscale residential neighborhood. Characterized by wide tree-shaded avenues, expansive landscaped villas, historic bungalows, prestigious institutions like Loyola High School, and prime retail hubs around Alpana Market, this enclave is home to retired judges, eminent surgeons, senior civil servants, and prominent business families.
                </p>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Shifting residences in Patliputra Colony requires far higher technical precision and discretion than standard commercial moves. Homes here often house precious vintage teakwood furniture, imported Italian chandeliers, fine oil paintings, fragile porcelain collections, and extensive private libraries. Furthermore, the residential cooperative society maintains strict community standards regarding peaceful living, requiring moving crews to avoid noisy operations during early mornings and maintain pristine driveway cleanliness.
                </p>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    At Shree Ashirwad Packers and Movers, our Patliputra Colony moving division operates with a specialized white-glove protocol. Our uniformed, background-verified crew lays protective carpet runners across polished marble floors, wraps antique furniture in multi-density foam and heavy moving blankets, and builds tailor-made wooden skeleton crates for valuable artwork and home electronics. With direct access to Boring Road, Kurji More, and the Digha-AIIMS elevated corridor, our trucks ensure prompt and graceful city and highway departures.
                </p>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7;">
                    Whether moving locally within Patliputra or relocating to Ranchi, Jamshedpur, Kolkata, Delhi, or Mumbai, our services connect directly with our parent <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patna" style="color: #0e2b5c; font-weight: 700; text-decoration: underline;">Packers and Movers in Patna</a> network and our company headquarters at <a href="<?php echo SITE_BASE_URL; ?>/" style="color: #0e2b5c; font-weight: 700; text-decoration: underline;">Packers and Movers in Ranchi</a>.
                </p>
            </div>
            <div>
                <div class="pcp-image-box">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/multistory-apartment-goods-loading-ranchi.jpg" alt="White glove luxury household shifting in Patliputra Colony Patna" loading="lazy">
                    <p class="pcp-image-caption">Careful handling of fine furniture and household items at upscale bungalows and apartments in Patliputra Colony, Patna.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 2: Specialized Local Moving Services -->
<section class="pcp-section pcp-bg-alt">
    <div class="pcp-container">
        <div class="pcp-section-header">
            <h2 class="pcp-section-title">Specialized Moving Services in Patliputra Colony Patna</h2>
            <p class="pcp-section-subtitle">Dedicated moving capabilities crafted for luxury bungalows, corporate guest houses, and fine art relocation.</p>
        </div>
        <div class="pcp-grid-3">
            <div class="pcp-card">
                <span class="pcp-card-icon">🏰</span>
                <h3 class="pcp-card-title">Luxury Villa & Bungalow Shifting</h3>
                <p class="pcp-card-text">
                    Comprehensive white-glove relocation tailored for expansive independent residences and duplex villas. Floor protection blankets, specialized upholstery covers, and dedicated supervisor management.
                </p>
            </div>
            <div class="pcp-card">
                <span class="pcp-card-icon">🎨</span>
                <h3 class="pcp-card-title">Fine Art & Chandelier Crating</h3>
                <p class="pcp-card-text">
                    Custom wooden skeleton crating and anti-static air bubble cushioning for oil paintings, bronze artifacts, imported crystal chandeliers, and grand grandfather clocks.
                </p>
            </div>
            <div class="pcp-card">
                <span class="pcp-card-icon">🏢</span>
                <h3 class="pcp-card-title">Corporate Guest House Moves</h3>
                <p class="pcp-card-text">
                    Specialized relocation for corporate guest houses, senior executive quarters, and commercial setups in the nearby Patliputra Industrial Area with zero downtime.
                </p>
            </div>
            <div class="pcp-card">
                <span class="pcp-card-icon">🚗</span>
                <h3 class="pcp-card-title">Enclosed Car & Bike Transport</h3>
                <p class="pcp-card-text">
                    Hydraulic enclosed car carrier transport for premium luxury sedans and SUVs from Patliputra Colony to Ranchi, Jamshedpur, Kolkata, Bangalore, or Delhi NCR.
                </p>
            </div>
            <div class="pcp-card">
                <span class="pcp-card-icon">📦</span>
                <h3 class="pcp-card-title">5-Layer Protective Armor</h3>
                <p class="pcp-card-text">
                    Virgin 5-ply corrugated sheets, dense bubble cushioning, stretch film, and wooden crating for televisions, glassware, and brass heirlooms to withstand long-distance highway travel.
                </p>
            </div>
            <div class="pcp-card">
                <span class="pcp-card-icon">🛡️</span>
                <h3 class="pcp-card-title">Transit Insurance & Storage Hub</h3>
                <p class="pcp-card-text">
                    Full comprehensive risk insurance covering all intercity relocations, coupled with clean, pest-controlled, and 24/7 CCTV-monitored warehouse storage facilities for temporary retention.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: Material Quality & Fine Carpentry Protocols -->
<section class="pcp-section">
    <div class="pcp-container">
        <div class="pcp-grid-2">
            <div>
                <div class="pcp-image-box">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Premium packaging materials deployed in Patliputra Colony Patna" loading="lazy">
                    <p class="pcp-image-caption">Virgin 5-ply corrugated cartons, bubble wrap cushioning, and moisture-proof stretch wrap for Patliputra Colony homes.</p>
                </div>
            </div>
            <div>
                <span style="color: #ff5722; font-weight: 700; font-size: 0.88rem; text-transform: uppercase;">Perfection in Every Detail</span>
                <h2 class="pcp-section-title">Master Carpentry & Packaging Protocols for Fine Homes</h2>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7; margin-bottom: 14px;">
                    Bungalows and luxury flats in Patliputra Colony often feature bespoke modular kitchen cabinets, imported glass dining tables, executive mahogany bookcases, and ornate brass doors. Our master carpenters use precision tools to ensure scratch-free transit:
                </p>
                <ul style="padding-left: 20px; color: #475569; font-size: 0.95rem; line-height: 1.8; margin-bottom: 18px;">
                    <li><strong>Custom Wooden Skeleton Crating:</strong> Delicate crystal chandeliers, imported mirrors, and 75-inch+ smart displays are sealed in custom-fabricated wooden skeleton crates.</li>
                    <li><strong>Scratch-Resistant Fabric Blankets:</strong> High-end velvet, leather sofas, and carved teakwood furniture are enveloped in thick quilted moving blankets and waterproof stretch film.</li>
                    <li><strong>Marble Surface Floor Protection:</strong> Our team lays protective runner mats across polished Italian marble and hardwood floors to prevent wheel marks or scratches during loading.</li>
                    <li><strong>Color-Coded Systematic Labeling:</strong> Cartons are labeled by room and contents, ensuring that unpacking at your destination is smooth and systematic.</li>
                </ul>
                <p style="font-size: 0.95rem; color: #475569; line-height: 1.7;">
                    To review standard pricing structures, consult our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" style="color: #0e2b5c; font-weight: 700; text-decoration: underline;">Transparent Relocation Tariff Calculator</a>.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section 4: Transparent Pricing Table -->
<section class="pcp-section pcp-bg-alt">
    <div class="pcp-container">
        <div class="pcp-section-header">
            <h2 class="pcp-section-title">Transparent Relocation Charges in Patliputra Colony Patna</h2>
            <p class="pcp-section-subtitle">Straightforward, competitive estimates with complete breakdown of packing supplies, labor, transit, and unloading.</p>
        </div>
        <div class="pcp-table-wrapper">
            <table class="pcp-table">
                <thead>
                    <tr>
                        <th>Housing Configuration / Inventory</th>
                        <th>Local Shifting (Within Patna / Nearby)</th>
                        <th>Intercity Shifting (Outside Patna)</th>
                        <th>Packaging Specs & Manpower</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment / Flat</strong></td>
                        <td>₹3,800 - ₹7,000</td>
                        <td>₹10,500 - ₹18,000</td>
                        <td>Standard 3-Layer Packing, 2-3 Skilled Packers</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Residential Flat / House</strong></td>
                        <td>₹7,000 - ₹13,500</td>
                        <td>₹16,000 - ₹28,000</td>
                        <td>Premium 4-Layer Packing, 4-5 Professional Crew</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Independent Home / Flat</strong></td>
                        <td>₹12,000 - ₹20,000</td>
                        <td>₹24,000 - ₹38,000</td>
                        <td>Heavy Duty 5-Layer Armor, 5-6 Trained Movers</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Bungalow / Luxury Villa</strong></td>
                        <td>₹18,000 - ₹28,000</td>
                        <td>₹35,000 - ₹54,000</td>
                        <td>Full Wooden Crating, Dedicated Move Manager</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler (Motorcycle / Scooter)</strong></td>
                        <td>₹1,200 - ₹2,500</td>
                        <td>₹3,500 - ₹6,500</td>
                        <td>Bubble Wrapping, Handlebar Bracing & Enclosed Carrier</td>
                    </tr>
                    <tr>
                        <td><strong>Car Relocation (Sedan / SUV)</strong></td>
                        <td>₹2,500 - ₹5,000</td>
                        <td>₹9,000 - ₹22,000</td>
                        <td>Dedicated Car Carrier, Wheel Stopper Lock & Full Cover</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="font-size: 0.88rem; color: #64748b; text-align: center; margin-top: 12px;">
            * Note: Final moving charges depend on floor level, elevator availability, walking distance from parking gate, and fragile crating volume.
        </p>
    </div>
</section>

<!-- Section 5: Step-by-Step Moving Process -->
<section class="pcp-section">
    <div class="pcp-container">
        <div class="pcp-grid-2">
            <div>
                <span style="color: #ff5722; font-weight: 700; font-size: 0.88rem; text-transform: uppercase;">Methodical Moving Framework</span>
                <h2 class="pcp-section-title">How We Manage Your Move in Patliputra Colony</h2>
                <div class="pcp-process-step">
                    <div class="pcp-process-num">1</div>
                    <div class="pcp-process-content">
                        <h4>Pre-Move Survey & Written Quotation</h4>
                        <p>Our supervisor visits your villa or bungalow in Patliputra Colony, evaluating furniture volume, fine art crating needs, and driveway access to provide a firm written estimate.</p>
                    </div>
                </div>
                <div class="pcp-process-step">
                    <div class="pcp-process-num">2</div>
                    <div class="pcp-process-content">
                        <h4>Multi-Layer Cushioning & Crating</h4>
                        <p>Our certified crew arrives equipped with 5-ply cartons, bubble wrap, stretch film, and carpentry tools to carefully dismantle beds and wrap delicate chandeliers and china.</p>
                    </div>
                </div>
                <div class="pcp-process-step">
                    <div class="pcp-process-num">3</div>
                    <div class="pcp-process-content">
                        <h4>Secure Loading & Smooth Colony Exit</h4>
                        <p>Goods are loaded into cushioned container trucks utilizing hydraulic ramps and padded safety belts. Drivers navigate colony avenues smoothly without disturbing neighborhood peace.</p>
                    </div>
                </div>
                <div class="pcp-process-step">
                    <div class="pcp-process-num">4</div>
                    <div class="pcp-process-content">
                        <h4>Prompt Unloading & Furniture Re-Assembly</h4>
                        <p>At your new residence, our crew unloads each carton room-by-room, reassembles beds and heavy cupboards, positions furniture according to your guidance, and cleans away debris.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="pcp-image-box">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Master carpenters dismantling furniture in Patliputra Colony Patna" loading="lazy">
                    <p class="pcp-image-caption">Professional dismantling and hardware labeling of modular beds and wardrobes by skilled technicians.</p>
                </div>
                <div class="pcp-image-box" style="margin-top: 24px;">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Modern container truck providing safe delivery in Patliputra Colony Patna" loading="lazy">
                    <p class="pcp-image-caption">Modern enclosed container trucks ensuring weather-safe door-to-door transit across Patna colonies.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 6: Specific Sector Insights for Patliputra Sub-Areas -->
<section class="pcp-section pcp-bg-alt">
    <div class="pcp-container">
        <div class="pcp-section-header">
            <h2 class="pcp-section-title">Navigating Key Zones in Patliputra Colony Patna</h2>
            <p class="pcp-section-subtitle">Hyper-local experience makes the difference. Here is how we manage moves across Patliputra's major sub-sectors.</p>
        </div>
        <div class="pcp-grid-4">
            <div class="pcp-card">
                <h3 class="pcp-card-title">Patliputra Golambar & Alpana Market</h3>
                <p class="pcp-card-text">
                    Core commercial and retail nexus. We coordinate loading during optimal morning hours (7:00 AM - 10:00 AM) to avoid midday market congestion.
                </p>
            </div>
            <div class="pcp-card">
                <h3 class="pcp-card-title">Loyola & Sahdeo Mahto Marg</h3>
                <p class="pcp-card-text">
                    Peaceful residential avenue lined with stately bungalows. Our drivers observe quiet moving practices and preserve clean, unblocked driveways.
                </p>
            </div>
            <div class="pcp-card">
                <h3 class="pcp-card-title">Kurji More & Digha Link</h3>
                <p class="pcp-card-text">
                    Gateway to the Digha-AIIMS elevated highway. Our vehicles utilize this express corridor to bypass congested city center bottlenecks.
                </p>
            </div>
            <div class="pcp-card">
                <h3 class="pcp-card-title">Patliputra Industrial Area</h3>
                <p class="pcp-card-text">
                    Commercial logistics and industrial zone. We execute corporate office transfers, machinery shifting, and guest house relocations over weekends.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section 7: Frequently Asked Questions (FAQ) -->
<section class="pcp-section">
    <div class="pcp-container">
        <div class="pcp-section-header">
            <h2 class="pcp-section-title">Frequently Asked Questions — Patliputra Colony Shifting</h2>
            <p class="pcp-section-subtitle">Real answers regarding moving logistics, costs, villa relocations, and safety in Patliputra Colony, Patna.</p>
        </div>
        <div style="max-width: 860px; margin: 0 auto;">
            <div class="pcp-faq-item">
                <div class="pcp-faq-question">What are the shifting rates for villas and luxury flats in Patliputra Colony Patna?</div>
                <div class="pcp-faq-answer">
                    For local moves within Patliputra Colony or to neighboring sectors like Boring Road, SK Puri, or Bailey Road, moving charges typically average ₹3,800 to ₹7,000 for a 1 BHK flat, ₹7,000 to ₹13,500 for a 2 BHK apartment, and ₹12,000 to ₹20,000 for a 3 BHK residence. For sprawling independent bungalows and luxury duplexes, custom packages range from ₹18,000 to ₹28,000 with white-glove crating and dedicated supervisors.
                </div>
            </div>
            <div class="pcp-faq-item">
                <div class="pcp-faq-question">How do you protect antique furniture and crystal glassware in Patliputra Colony homes?</div>
                <div class="pcp-faq-answer">
                    Homes in Patliputra Colony frequently feature heritage furniture and imported crystal chandeliers. We use an exclusive 5-layer packaging protocol: anti-static foam wraps, multi-density bubble cushioning, custom wooden skeleton crates, corner guards, and industrial stretch film, ensuring zero impact or surface abrasion.
                </div>
            </div>
            <div class="pcp-faq-item">
                <div class="pcp-faq-question">Do you follow colony cooperative society rules regarding quiet hours and truck parking?</div>
                <div class="pcp-faq-answer">
                    Yes. Patliputra Housing Co-operative Society enforces strict residential cleanliness and quiet hour policies. Our moving crew operates exclusively between permitted morning and afternoon hours, uses driveway floor runners, and parks enclosed trucks without impeding local neighborhood access.
                </div>
            </div>
            <div class="pcp-faq-item">
                <div class="pcp-faq-question">How quickly can your survey supervisor visit my bungalow near Patliputra Golambar?</div>
                <div class="pcp-faq-answer">
                    Our mobile field operations unit is stationed right off Patliputra Golambar near Alpana Market. We can arrive at your residence anywhere in Patliputra Colony, Kurji, or along the Loyola School road within 20 to 35 minutes for a comprehensive on-site survey.
                </div>
            </div>
            <div class="pcp-faq-item">
                <div class="pcp-faq-question">Do you offer corporate office and guest house shifting in Patliputra Industrial Area?</div>
                <div class="pcp-faq-answer">
                    Yes. We manage corporate relocations, executive guest house transfers, and commercial logistics for business entities in and around the Patliputra Industrial Area, providing weekend moves to avoid operational downtime.
                </div>
            </div>
            <div class="pcp-faq-item">
                <div class="pcp-faq-question">Is full comprehensive transit insurance included for intercity relocations?</div>
                <div class="pcp-faq-answer">
                    Yes. All intercity relocations originating from Patliputra Colony to cities like Ranchi, Jamshedpur, Kolkata, Bangalore, Pune, and Delhi NCR include 100% comprehensive transit risk coverage underwritten by leading national insurance corporations.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 8: Sister Neighborhoods Cluster Navigation & Long-Distance Corridors -->
<section class="pcp-section pcp-bg-alt">
    <div class="pcp-container">
        <div class="pcp-section-header">
            <h2 class="pcp-section-title">Explore Nearby Shifting Hubs Across Patna & Intercity Routes</h2>
            <p class="pcp-section-subtitle">Connecting Patliputra Colony with all major residential neighborhoods in Patna and interstate corridors.</p>
        </div>
        <div class="pcp-cluster-box">
            <h3 style="font-size: 1.15rem; color: #0e2b5c; font-weight: 700; margin-bottom: 12px;">Top Patna Neighborhood Authority Pages:</h3>
            <div>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patna" class="pcp-cluster-link" style="background: #0e2b5c; color: #ffffff; border-color: #0e2b5c;">★ Patna Central City Hub</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-boring-road-patna" class="pcp-cluster-link">Boring Road Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bailey-road-patna" class="pcp-cluster-link">Bailey Road Shifting</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ashiana-nagar-patna" class="pcp-cluster-link">Ashiana Nagar Shifting</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-danapur-patna" class="pcp-cluster-link">Danapur Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kankarbagh-patna" class="pcp-cluster-link">Kankarbagh Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-rajendra-nagar-patna" class="pcp-cluster-link">Rajendra Nagar Shifting</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-anisabad-patna" class="pcp-cluster-link">Anisabad Relocation</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-khagaul-patna" class="pcp-cluster-link">Khagaul Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-phulwari-sharif-patna" class="pcp-cluster-link">Phulwari Sharif Shifting</a>
            </div>
            <h3 style="font-size: 1.15rem; color: #0e2b5c; font-weight: 700; margin: 24px 0 12px;">Direct Long-Distance Corridors from Patna:</h3>
            <div>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-ranchi-packers-and-movers" class="pcp-cluster-link">Patna to Ranchi Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-jamshedpur-packers-and-movers" class="pcp-cluster-link">Patna to Jamshedpur Shifting</a>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-dhanbad-packers-and-movers" class="pcp-cluster-link">Patna to Dhanbad Relocation</a>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-bokaro-packers-and-movers" class="pcp-cluster-link">Patna to Bokaro Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/adityapur-to-patna-packers-and-movers" class="pcp-cluster-link">Adityapur to Patna Route</a>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-deoghar-packers-and-movers" class="pcp-cluster-link">Patna to Deoghar Route</a>
            </div>
        </div>

        <!-- Call to Action Banner -->
        <div class="pcp-cta-box">
            <h3 class="pcp-cta-title">Planning a Relocation in Patliputra Colony Patna?</h3>
            <p class="pcp-cta-desc">
                Contact our local Patliputra Colony moving specialists today for an authentic, transparent shifting quotation, white-glove furniture care, and punctual delivery.
            </p>
            <div style="display: flex; justify-content: center; gap: 14px; flex-wrap: wrap;">
                <a href="tel:+918409531615" class="pcp-cta-btn">Call Now: 8409531615</a>
                <a href="<?php echo SITE_BASE_URL; ?>/contact" class="pcp-cta-btn" style="background: transparent; border: 2px solid #ffffff;">Request Survey Online</a>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
