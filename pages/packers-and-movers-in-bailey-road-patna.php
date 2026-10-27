<?php
/**
 * Page: Packers and Movers in Bailey Road Patna
 * Tier: Tier 2 (Hyper-Local Neighborhood Hub)
 * Parent City Hub: pages/packers-and-movers-in-patna.php
 * Target URL: https://www.shreeashirwadpackers.com/packers-and-movers-in-bailey-road-patna
 */

$page_title = "Packers and Movers in Bailey Road Patna | High-Rise Shifting";
$page_description = "Trusted packers and movers in Bailey Road Patna. Professional home shifting, high-rise apartment moves across Saguna Mor, Rupaspur, Raja Bazar & RPS Mor. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/packers-and-movers-in-bailey-road-patna";
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
    <meta name="keywords" content="packers and movers in bailey road patna, home shifting bailey road, movers saguna mor patna, rupaspur flat shifting, raja bazar packers patna, rps mor movers patna, apartment relocation bailey road patna">
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
    <meta name="geo.placename" content="Bailey Road, Patna">
    <meta name="geo.position" content="25.6092;85.0877">
    <meta name="ICBM" content="25.6092, 85.0877">

    <link rel="shortcut icon" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo SITE_BASE_URL; ?>/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Structured Data 1: MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Bailey Road Patna Hub",
        "image": "<?php echo SITE_BASE_URL; ?>/images/multistory-apartment-goods-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91-8409531615",
        "priceRange": "₹3,500 - ₹48,000",
        "description": "Licensed and certified packers and movers in Bailey Road Patna specializing in high-rise luxury apartment relocation, gated community moves, and intercity transit across Raja Bazar, RPS Mor, Rupaspur, and Saguna Mor.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Bailey Road, Near Saguna Mor Intersection",
            "addressLocality": "Patna",
            "addressRegion": "Bihar",
            "postalCode": "801503",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 25.6092,
            "longitude": 85.0877
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
            "opens": "07:00",
            "closes": "22:00"
        },
        "areaServed": [
            { "@type": "AdministrativeArea", "name": "Bailey Road, Patna" },
            { "@type": "AdministrativeArea", "name": "Saguna Mor, Patna" },
            { "@type": "AdministrativeArea", "name": "Rupaspur, Patna" },
            { "@type": "AdministrativeArea", "name": "RPS Mor, Patna" },
            { "@type": "AdministrativeArea", "name": "Raja Bazar, Patna" },
            { "@type": "AdministrativeArea", "name": "Sheikhpura, Patna" },
            { "@type": "AdministrativeArea", "name": "Gola Road, Patna" },
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
                "name": "Packers and Movers in Bailey Road Patna",
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
        "serviceType": "High-Rise Apartment and Household Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers",
            "url": "https://www.shreeashirwadpackers.com"
        },
        "areaServed": {
            "@type": "AdministrativeArea",
            "name": "Bailey Road, Patna, Bihar"
        },
        "description": "Professional residential relocation, furniture crating, elevator padding, and vehicle transport for high-rise gated communities along Bailey Road, Patna."
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
                "name": "What are the shifting charges for high-rise apartments on Bailey Road Patna?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "For local moves along Bailey Road (such as Raja Bazar, RPS Mor, Rupaspur, or Saguna Mor), shifting charges typically average ₹3,500 to ₹7,000 for a 1 BHK flat, ₹6,500 to ₹13,000 for a 2 BHK apartment, and ₹11,500 to ₹19,500 for a 3 BHK residence. Pricing includes multi-layer packing, lift handling, labor, and transport."
                }
            },
            {
                "@type": "Question",
                "name": "How do you manage move-in permissions and service lift bookings on Bailey Road?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Most modern societies along Bailey Road and Gola Road have strict RWA protocols regarding move-in timings (typically 9:00 AM to 6:00 PM) and elevator wall protection. Our team coordinates directly with society security, lays floor protection blankets, and covers elevator interiors to avoid penalty charges."
                }
            },
            {
                "@type": "Question",
                "name": "Can your trucks navigate Bailey Road flyovers and service lane intersections?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Bailey Road has extensive flyovers connecting Dak Bungalow to Danapur. Our drivers utilize designated service lane cut-outs at RPS Mor, Rupaspur, and Saguna Mor, deploying 14-foot and 17-foot enclosed container trucks engineered to clear residential apartment basement ramps."
                }
            },
            {
                "@type": "Question",
                "name": "How quickly can your survey supervisor visit my flat in Saguna Mor or Raja Bazar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our mobile operations team is stationed near the Saguna Mor flyover junction. A dedicated survey supervisor can arrive at your residential society within 30 to 45 minutes of booking for a complimentary on-site inventory check and written price quote."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide car carrier services from Bailey Road to other states?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we operate specialized enclosed car carrier trucks for transporting sedans, hatchbacks, and SUVs from Bailey Road Patna to Ranchi, Jamshedpur, Kolkata, Bangalore, Pune, and Delhi NCR with hydraulic loading ramps and full insurance cover."
                }
            },
            {
                "@type": "Question",
                "name": "What measures do you take to protect delicate glassware and LCD televisions?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We implement a strict 5-tier safety packaging protocol: anti-static bubble wrap, thermocol corner buffers, 5-ply corrugated sheets, industrial stretch film, and optional tailor-made wooden crating for large LED/OLED displays."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped CSS for Bailey Road Patna Page: Prefix brd- */
        .brd-hero {
            background: linear-gradient(135deg, #0e2b5c 0%, #061630 100%);
            color: #ffffff;
            padding: 60px 16px 50px;
            position: relative;
            text-align: center;
        }
        .brd-hero-inner {
            max-width: 980px;
            margin: 0 auto;
        }
        .brd-hero-badge {
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
        .brd-hero-title {
            font-size: clamp(1.8rem, 3.5vw, 2.7rem);
            font-weight: 800;
            line-height: 1.25;
            margin-bottom: 18px;
            color: #ffffff;
        }
        .brd-hero-desc {
            font-size: 1.05rem;
            line-height: 1.65;
            color: #d8e2f0;
            max-width: 820px;
            margin: 0 auto 28px;
        }
        .brd-hero-pills {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-bottom: 25px;
        }
        .brd-pill {
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.22);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.88rem;
            color: #ffffff;
        }
        .brd-quick-bar {
            display: flex;
            justify-content: center;
            gap: 14px;
            flex-wrap: wrap;
            margin-top: 15px;
        }
        .brd-quick-btn {
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
        .brd-quick-btn:hover {
            background: #e64a19;
            transform: translateY(-2px);
        }
        .brd-quick-btn.brd-sec-btn {
            background: #25d366;
        }
        .brd-quick-btn.brd-sec-btn:hover {
            background: #1ebc59;
        }
        .brd-section {
            padding: 55px 16px;
        }
        .brd-section.brd-bg-alt {
            background: #f8fafc;
        }
        .brd-container {
            max-width: 1140px;
            margin: 0 auto;
        }
        .brd-section-header {
            text-align: center;
            margin-bottom: 40px;
        }
        .brd-section-title {
            font-size: clamp(1.5rem, 2.8vw, 2.1rem);
            font-weight: 800;
            color: #0e2b5c;
            margin-bottom: 12px;
            line-height: 1.3;
        }
        .brd-section-subtitle {
            font-size: 1rem;
            color: #556987;
            max-width: 780px;
            margin: 0 auto;
            line-height: 1.6;
        }
        .brd-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 28px;
            align-items: center;
        }
        .brd-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }
        .brd-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }
        @media (max-width: 900px) {
            .brd-grid-3, .brd-grid-4 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 768px) {
            .brd-grid-2, .brd-grid-3, .brd-grid-4 {
                grid-template-columns: 1fr;
            }
        }
        .brd-card {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            padding: 24px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.04);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .brd-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.08);
        }
        .brd-card-icon {
            font-size: 1.8rem;
            color: #ff5722;
            margin-bottom: 14px;
            display: inline-block;
        }
        .brd-card-title {
            font-size: 1.15rem;
            font-weight: 700;
            color: #0e2b5c;
            margin-bottom: 10px;
            line-height: 1.4;
        }
        .brd-card-text {
            font-size: 0.94rem;
            color: #556987;
            line-height: 1.6;
            margin: 0;
        }
        .brd-image-box {
            max-width: 580px;
            margin: 20px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            background: #eef2f6;
        }
        .brd-image-box img {
            width: 100%;
            height: auto;
            max-height: 420px;
            object-fit: cover;
            display: block;
        }
        .brd-image-caption {
            font-size: 0.85rem;
            color: #64748b;
            text-align: center;
            padding: 10px 14px;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            margin: 0;
            font-style: italic;
        }
        .brd-table-wrapper {
            overflow-x: auto;
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 14px rgba(0,0,0,0.04);
            margin: 24px 0;
        }
        .brd-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.94rem;
        }
        .brd-table th {
            background: #0e2b5c;
            color: #ffffff;
            padding: 14px 16px;
            font-weight: 700;
        }
        .brd-table td {
            padding: 13px 16px;
            border-bottom: 1px solid #edf2f7;
            color: #334155;
        }
        .brd-table tr:last-child td {
            border-bottom: none;
        }
        .brd-table tr:hover td {
            background: #f8fafc;
        }
        .brd-process-step {
            display: flex;
            gap: 18px;
            background: #ffffff;
            padding: 22px;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            margin-bottom: 16px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.03);
        }
        .brd-process-num {
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
        .brd-process-content h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: #0e2b5c;
            margin: 0 0 8px;
        }
        .brd-process-content p {
            font-size: 0.93rem;
            color: #556987;
            line-height: 1.6;
            margin: 0;
        }
        .brd-faq-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            margin-bottom: 14px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
        }
        .brd-faq-question {
            padding: 18px 20px;
            font-weight: 700;
            color: #0e2b5c;
            font-size: 1.02rem;
            background: #ffffff;
            border-bottom: 1px solid #edf2f7;
        }
        .brd-faq-answer {
            padding: 16px 20px 20px;
            color: #556987;
            font-size: 0.93rem;
            line-height: 1.65;
        }
        .brd-cluster-box {
            background: #f1f5f9;
            border-radius: 12px;
            padding: 28px;
            border: 1px solid #e2e8f0;
            margin-top: 25px;
        }
        .brd-cluster-link {
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
        .brd-cluster-link:hover {
            background: #ff5722;
            color: #ffffff;
            border-color: #ff5722;
            transform: translateY(-2px);
        }
        .brd-cta-box {
            background: linear-gradient(135deg, #0e2b5c 0%, #1e3a8a 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 40px 24px;
            text-align: center;
            margin-top: 35px;
        }
        .brd-cta-title {
            font-size: clamp(1.4rem, 2.5vw, 1.9rem);
            font-weight: 800;
            margin-bottom: 12px;
            color: #ffffff;
        }
        .brd-cta-desc {
            font-size: 0.98rem;
            color: #cbd5e1;
            max-width: 650px;
            margin: 0 auto 24px;
            line-height: 1.6;
        }
        .brd-cta-btn {
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
        .brd-cta-btn:hover {
            background: #e64a19;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
<?php require_once __DIR__ . '/../includes/header.php'; ?>

<!-- Breadcrumb Navigation Bar -->
<div style="background: #f1f5f9; padding: 12px 16px; border-bottom: 1px solid #e2e8f0; font-size: 0.88rem;">
    <div class="brd-container">
        <a href="<?php echo SITE_BASE_URL; ?>/" style="color: #0e2b5c; text-decoration: none; font-weight: 600;">Home</a>
        <span style="margin: 0 8px; color: #94a3b8;">/</span>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patna" style="color: #0e2b5c; text-decoration: none; font-weight: 600;">Packers and Movers in Patna</a>
        <span style="margin: 0 8px; color: #94a3b8;">/</span>
        <span style="color: #64748b; font-weight: 600;">Bailey Road</span>
    </div>
</div>

<!-- Hero Section -->
<section class="brd-hero">
    <div class="brd-hero-inner">
        <span class="brd-hero-badge">High-Rise & Gated Community Specialists</span>
        <h1 class="brd-hero-title">Packers and Movers in Bailey Road Patna</h1>
        <p class="brd-hero-desc">
            Shree Ashirwad Packers and Movers delivers premium, zero-stress residential flat shifting, corporate office relocation, and enclosed car carriers across Bailey Road (Jawaharlal Nehru Marg), Patna. From Raja Bazar and Sheikhpura to RPS Mor, Rupaspur, and Saguna Mor, our specialized crew guarantees white-glove packaging, service elevator protection, and punctual transit.
        </p>
        <div class="brd-hero-pills">
            <span class="brd-pill">✓ 30-Min Fast Doorstep Assessment</span>
            <span class="brd-pill">✓ Society RWA Clearance Support</span>
            <span class="brd-pill">✓ Heavy Furniture Hoisting Straps</span>
            <span class="brd-pill">✓ 5-Layer Armor Box Packaging</span>
            <span class="brd-pill">✓ 100% Comprehensive Transit Cover</span>
        </div>
        <div class="brd-quick-bar">
            <a href="tel:+918409531615" class="brd-quick-btn">
                <span>📞 Call 8409531615</span>
            </a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20home%20shifting%20in%20Bailey%20Road%20Patna" class="brd-quick-btn brd-sec-btn" target="_blank" rel="noopener noreferrer">
                <span>💬 WhatsApp Quick Quote</span>
            </a>
        </div>
    </div>
</section>

<!-- Section 1: Detailed Neighborhood Dynamics & Flyover Logistics -->
<section class="brd-section">
    <div class="brd-container">
        <div class="brd-grid-2">
            <div>
                <span style="color: #ff5722; font-weight: 700; font-size: 0.88rem; text-transform: uppercase;">Patna's Premier Growth Corridor</span>
                <h2 class="brd-section-title">Specialized Relocation Along the Bailey Road Expressway Axis</h2>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Bailey Road (officially named Jawaharlal Nehru Marg) serves as the primary modern residential and commercial artery of Patna. Connecting the historic city center near Patna High Court and Dak Bungalow to the booming western suburban zones of Saguna Mor, Danapur, and Khagaul, this multi-lane expressway is lined with state-of-the-art multi-story residential towers, luxury duplex projects, government secretariats, and multi-specialty medical landmarks like Paras HMRI and IGIMS.
                </p>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Relocating along Bailey Road involves specific logistical parameters distinct from older city sectors. Modern gated complexes around RPS Mor, Rupaspur flyover, Gola Road intersection, and Saguna Mor enforce rigorous society regulations. These include mandated morning shifting hours, service elevator booking protocols, floor surface protection, and basement clearance restrictions for commercial carrier trucks.
                </p>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    At Shree Ashirwad Packers and Movers, our field supervisors maintain direct liaison with apartment resident welfare associations (RWAs). We utilize customized 14-foot and 17-foot enclosed container trucks engineered to clear residential podium heights and underground basement parking ramps. Padded moving blankets are installed inside lift cabins to prevent scratches on stainless steel elevators, guaranteeing a completely seamless handover.
                </p>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7;">
                    Whether shifting within Bailey Road or embarking on an interstate move, our services connect directly with our parent <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patna" style="color: #0e2b5c; font-weight: 700; text-decoration: underline;">Packers and Movers in Patna</a> network and our company headquarters at <a href="<?php echo SITE_BASE_URL; ?>/" style="color: #0e2b5c; font-weight: 700; text-decoration: underline;">Packers and Movers in Ranchi</a> for long-distance household transfers.
                </p>
            </div>
            <div>
                <div class="brd-image-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/multistory-apartment-goods-loading-ranchi.jpg" alt="High-rise apartment moving and elevator packing along Bailey Road Patna" loading="lazy">
                    <p class="brd-image-caption">Careful handling of furniture and heavy appliances at modern high-rise gated societies on Bailey Road, Patna.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 2: Specialized Local Moving Services -->
<section class="brd-section brd-bg-alt">
    <div class="brd-container">
        <div class="brd-section-header">
            <h2 class="brd-section-title">Specialized Moving Services in Bailey Road Patna</h2>
            <p class="brd-section-subtitle">Tailored relocation expertise for upscale high-rise apartments, corporate headquarters, and vehicle transportation.</p>
        </div>
        <div class="brd-grid-3">
            <div class="brd-card">
                <span class="brd-card-icon">🏢</span>
                <h3 class="brd-card-title">High-Rise Apartment Relocation</h3>
                <p class="brd-card-text">
                    Complete end-to-end flat shifting tailored for high-rise towers across Saguna Mor, Rupaspur, and RPS Mor. Full service elevator padding, heavy sofa hoisting, and systematic room-by-room box arrangement.
                </p>
            </div>
            <div class="brd-card">
                <span class="brd-card-icon">🛋️</span>
                <h3 class="brd-card-title">Modular Furniture Carpentry</h3>
                <p class="brd-card-text">
                    Professional dismantling and reassembly of modular wardrobes, hydraulic storage beds, executive study desks, and imported dining tables by certified carpenters with specialized mechanical toolsets.
                </p>
            </div>
            <div class="brd-card">
                <span class="brd-card-icon">🏥</span>
                <h3 class="brd-card-title">Medical Staff & Doctor Transfers</h3>
                <p class="brd-card-text">
                    With major healthcare institutions like Paras HMRI, IGIMS, and Mahavir Cancer Sansthan situated along this corridor, we provide expedited relocation packages for medical professionals and visiting consultants.
                </p>
            </div>
            <div class="brd-card">
                <span class="brd-card-icon">🚗</span>
                <h3 class="brd-card-title">Enclosed Car & Bike Transport</h3>
                <p class="brd-card-text">
                    Dedicated enclosed hydraulic car carriers and two-wheeler transport from Bailey Road to Ranchi, Jamshedpur, Kolkata, Delhi, Bangalore, or Mumbai. Zero road wear and complete insurance coverage.
                </p>
            </div>
            <div class="brd-card">
                <span class="brd-card-icon">📦</span>
                <h3 class="brd-card-title">5-Layer Protective Armor</h3>
                <p class="brd-card-text">
                    We exclusively deploy virgin 5-ply corrugated sheets, shock-absorbing bubble cushioning, stretch film, and heavy foam edge protectors to safeguard expensive woodwork and delicate porcelain against transit shocks.
                </p>
            </div>
            <div class="brd-card">
                <span class="brd-card-icon">🛡️</span>
                <h3 class="brd-card-title">Transit Insurance & Storage Hub</h3>
                <p class="brd-card-text">
                    Full comprehensive risk insurance covering all intercity relocations, coupled with clean, pest-controlled, and 24/7 CCTV-monitored warehouse storage facilities for temporary household retention.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: Material Quality & High-Rise Safety Standards -->
<section class="brd-section">
    <div class="brd-container">
        <div class="brd-grid-2">
            <div>
                <div class="brd-image-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Heavy duty multi layer packing materials deployed on Bailey Road Patna" loading="lazy">
                    <p class="brd-image-caption">5-ply corrugated cartons, bubble wrap cushioning, and waterproof stretch film ensuring total item security.</p>
                </div>
            </div>
            <div>
                <span style="color: #ff5722; font-weight: 700; font-size: 0.88rem; text-transform: uppercase;">Uncompromising Safety Standard</span>
                <h2 class="brd-section-title">High-Rise Packaging Protocols Built for Modern Living</h2>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7; margin-bottom: 14px;">
                    Apartments along the Bailey Road corridor frequently feature premium hardwood flooring, floor-to-ceiling glass balconies, Italian marble finishes, and delicate modular kitchen installations. Transporting heavy appliances through these spaces requires specialized material handling techniques:
                </p>
                <ul style="padding-left: 20px; color: #475569; font-size: 0.95rem; line-height: 1.8; margin-bottom: 18px;">
                    <li><strong>Elevator & Floor Surface Blanketing:</strong> We lay heavy protective runners across apartment hallways and pad elevator interiors to prevent scratches, marks, or scuffs during the move.</li>
                    <li><strong>Custom Crating for Smart Displays:</strong> High-end OLED, QLED, and 4K displays are encased in anti-static air bubble film and fortified inside custom-built wooden skeleton crates.</li>
                    <li><strong>Appliance Anti-Moisture Sealing:</strong> Refrigerators, dishwashers, and washing machines receive multi-layer stretch wrapping and corner bumpers to guard against transit humidity and surface impacts.</li>
                    <li><strong>Color-Coded Room Labeling:</strong> Boxes are clearly marked by room (Living Room, Kitchen, Kid's Bedroom, Master Bedroom) ensuring prompt, organized placement at your new apartment.</li>
                </ul>
                <p style="font-size: 0.95rem; color: #475569; line-height: 1.7;">
                    To view transparent shifting tariff estimates for all apartment layouts, visit our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" style="color: #0e2b5c; font-weight: 700; text-decoration: underline;">Transparent Relocation Tariff Calculator</a>.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section 4: Transparent Pricing Table -->
<section class="brd-section brd-bg-alt">
    <div class="brd-container">
        <div class="brd-section-header">
            <h2 class="brd-section-title">Transparent Relocation Charges in Bailey Road Patna</h2>
            <p class="brd-section-subtitle">Fair, upfront estimates with zero hidden costs. All quotes cover packing supplies, loading, transit, and unloading.</p>
        </div>
        <div class="brd-table-wrapper">
            <table class="brd-table">
                <thead>
                    <tr>
                        <th>Apartment Dimension / Inventory</th>
                        <th>Local Shifting (Within Patna Corridor)</th>
                        <th>Intercity Shifting (Patna to Other States)</th>
                        <th>Packaging Specs & Manpower</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment / Studio Flat</strong></td>
                        <td>₹3,500 - ₹7,000</td>
                        <td>₹10,500 - ₹18,000</td>
                        <td>Standard 3-Layer Packing, 2-3 Skilled Packers</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Residential Apartment</strong></td>
                        <td>₹6,500 - ₹13,000</td>
                        <td>₹16,000 - ₹28,000</td>
                        <td>Premium 4-Layer Packing, 4-5 Professional Crew</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK High-Rise Apartment</strong></td>
                        <td>₹11,500 - ₹19,500</td>
                        <td>₹24,000 - ₹38,000</td>
                        <td>Heavy Duty 5-Layer Armor, 5-6 Trained Movers</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Duplex / Penthouse</strong></td>
                        <td>₹16,500 - ₹27,000</td>
                        <td>₹34,000 - ₹52,000</td>
                        <td>Full Wooden Crating, Dedicated Move Manager</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                        <td>₹1,200 - ₹2,500</td>
                        <td>₹3,500 - ₹6,500</td>
                        <td>Bubble Wrapping, Handlebar Bracing & Enclosed Carrier</td>
                    </tr>
                    <tr>
                        <td><strong>Four-Wheeler (Hatchback / SUV)</strong></td>
                        <td>₹2,500 - ₹5,000</td>
                        <td>₹9,000 - ₹22,000</td>
                        <td>Dedicated Enclosed Car Carrier & Full Transit Insurance</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="font-size: 0.88rem; color: #64748b; text-align: center; margin-top: 12px;">
            * Note: Exact shifting charges depend on floor level, elevator availability, walking distance from basement parking bays, and special crating requirements. Contact us for a firm written quote.
        </p>
    </div>
</section>

<!-- Section 5: Step-by-Step Moving Process -->
<section class="brd-section">
    <div class="brd-container">
        <div class="brd-grid-2">
            <div>
                <span style="color: #ff5722; font-weight: 700; font-size: 0.88rem; text-transform: uppercase;">Structured 4-Phase Protocol</span>
                <h2 class="brd-section-title">How We Coordinate Your Move on Bailey Road</h2>
                <div class="brd-process-step">
                    <div class="brd-process-num">1</div>
                    <div class="brd-process-content">
                        <h4>On-Site Society Assessment & Clearance</h4>
                        <p>Our supervisor inspects your apartment in Raja Bazar, RPS Mor, or Saguna Mor, assessing inventory volume, service elevator capacity, society entry passes, and basement parking logistics.</p>
                    </div>
                </div>
                <div class="brd-process-step">
                    <div class="brd-process-num">2</div>
                    <div class="brd-process-content">
                        <h4>Precision 5-Layer Wrapping & Crating</h4>
                        <p>Our uniformed crew arrives punctually with virgin corrugated boxes, bubble cushioning, stretch film, and heavy-duty strapping tools. Fragile china, paintings, and smart TVs receive custom protection.</p>
                    </div>
                </div>
                <div class="brd-process-step">
                    <div class="brd-process-num">3</div>
                    <div class="brd-process-content">
                        <h4>Service Elevator Loading & Express Highway Transit</h4>
                        <p>Goods are carefully wheeled via padded hand-trolleys into the service elevator and loaded onto enclosed container vehicles. Vehicles navigate Bailey Road flyovers smoothly to minimize transit delays.</p>
                    </div>
                </div>
                <div class="brd-process-step">
                    <div class="brd-process-num">4</div>
                    <div class="brd-process-content">
                        <h4>Room-by-Room Placement & Furniture Assembly</h4>
                        <p>At your new residence, our crew carries items to designated rooms, reassembles modular beds and dining tables, assists in initial placement, and removes all discarded packing debris.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="brd-image-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Dedicated vehicle carrier for car transport along Bailey Road corridor" loading="lazy">
                    <p class="brd-image-caption">Dedicated enclosed carrier vehicles providing scratch-safe car and bike relocation services.</p>
                </div>
                <div class="brd-image-box" style="margin-top: 24px;">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Weather sealed delivery truck transporting household goods along Bailey Road Patna" loading="lazy">
                    <p class="brd-image-caption">Weather-sealed container vehicles engineered for secure urban and long-distance relocations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 6: Specific Sector Insights for Bailey Road Sub-Areas -->
<section class="brd-section brd-bg-alt">
    <div class="brd-container">
        <div class="brd-section-header">
            <h2 class="brd-section-title">Navigating Key Hubs Along the Bailey Road Corridor</h2>
            <p class="brd-section-subtitle">Hyper-local experience makes the difference. Here is how we manage moves across Bailey Road's major sub-sectors.</p>
        </div>
        <div class="brd-grid-4">
            <div class="brd-card">
                <h3 class="brd-card-title">Saguna Mor & Danapur Axis</h3>
                <p class="brd-card-text">
                    Major junction linking Bailey Road with Danapur Railway Station and Khagaul. We manage large gated high-rise developments, coordinating basement clearances and society security protocols.
                </p>
            </div>
            <div class="brd-card">
                <h3 class="brd-card-title">Rupaspur & Gola Road</h3>
                <p class="brd-card-text">
                    Vibrant residential zone with dozens of multi-story apartment projects. Our drivers utilize designated flyover service exits to access apartment driveways smoothly during off-peak morning hours.
                </p>
            </div>
            <div class="brd-card">
                <h3 class="brd-card-title">RPS Mor & Jalalpur</h3>
                <p class="brd-card-text">
                    Home to prominent educational institutions and established apartment communities. We schedule quick morning loading to ensure complete transit before school and office commuter rush.
                </p>
            </div>
            <div class="brd-card">
                <h3 class="brd-card-title">Raja Bazar & Sheikhpura</h3>
                <p class="brd-card-text">
                    High-density healthcare and commercial district near IGIMS and Paras HMRI. Our team manages specialized moves for doctors, professors, and administrative officers with utmost care.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section 7: Frequently Asked Questions (FAQ) -->
<section class="brd-section">
    <div class="brd-container">
        <div class="brd-section-header">
            <h2 class="brd-section-title">Frequently Asked Questions — Bailey Road Shifting</h2>
            <p class="brd-section-subtitle">Real answers to common questions about house relocation, costs, high-rise moves, and safety along Bailey Road, Patna.</p>
        </div>
        <div style="max-width: 860px; margin: 0 auto;">
            <div class="brd-faq-item">
                <div class="brd-faq-question">What are the shifting charges for high-rise apartments on Bailey Road Patna?</div>
                <div class="brd-faq-answer">
                    For local moves along Bailey Road (such as Raja Bazar, RPS Mor, Rupaspur, or Saguna Mor), shifting charges typically average ₹3,500 to ₹7,000 for a 1 BHK flat, ₹6,500 to ₹13,000 for a 2 BHK apartment, and ₹11,500 to ₹19,500 for a 3 BHK residence. Pricing includes multi-layer packing, lift handling, labor, and transport.
                </div>
            </div>
            <div class="brd-faq-item">
                <div class="brd-faq-question">How do you manage move-in permissions and service lift bookings on Bailey Road?</div>
                <div class="brd-faq-answer">
                    Most modern societies along Bailey Road and Gola Road have strict RWA protocols regarding move-in timings (typically 9:00 AM to 6:00 PM) and elevator wall protection. Our team coordinates directly with society security, lays floor protection blankets, and covers elevator interiors to avoid penalty charges.
                </div>
            </div>
            <div class="brd-faq-item">
                <div class="brd-faq-question">Can your trucks navigate Bailey Road flyovers and service lane intersections?</div>
                <div class="brd-faq-answer">
                    Yes. Bailey Road has extensive flyovers connecting Dak Bungalow to Danapur. Our drivers utilize designated service lane cut-outs at RPS Mor, Rupaspur, and Saguna Mor, deploying 14-foot and 17-foot enclosed container trucks engineered to clear residential apartment basement ramps.
                </div>
            </div>
            <div class="brd-faq-item">
                <div class="brd-faq-question">How quickly can your survey supervisor visit my flat in Saguna Mor or Raja Bazar?</div>
                <div class="brd-faq-answer">
                    Our mobile operations team is stationed near the Saguna Mor flyover junction. A dedicated survey supervisor can arrive at your residential society within 30 to 45 minutes of booking for a complimentary on-site inventory check and written price quote.
                </div>
            </div>
            <div class="brd-faq-item">
                <div class="brd-faq-question">Do you provide car carrier services from Bailey Road to other states?</div>
                <div class="brd-faq-answer">
                    Yes, we operate specialized enclosed car carrier trucks for transporting sedans, hatchbacks, and SUVs from Bailey Road Patna to Ranchi, Jamshedpur, Kolkata, Bangalore, Pune, and Delhi NCR with hydraulic loading ramps and full insurance cover.
                </div>
            </div>
            <div class="brd-faq-item">
                <div class="brd-faq-question">What measures do you take to protect delicate glassware and LCD televisions?</div>
                <div class="brd-faq-answer">
                    We implement a strict 5-tier safety packaging protocol: anti-static bubble wrap, thermocol corner buffers, 5-ply corrugated sheets, industrial stretch film, and optional tailor-made wooden crating for large LED/OLED displays.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 8: Sister Neighborhoods Cluster Navigation & Long-Distance Corridors -->
<section class="brd-section brd-bg-alt">
    <div class="brd-container">
        <div class="brd-section-header">
            <h2 class="brd-section-title">Explore Nearby Shifting Hubs Across Patna & Intercity Routes</h2>
            <p class="brd-section-subtitle">Connecting Bailey Road with every major residential locality in Patna and interstate corridors.</p>
        </div>
        <div class="brd-cluster-box">
            <h3 style="font-size: 1.15rem; color: #0e2b5c; font-weight: 700; margin-bottom: 12px;">Top Patna Neighborhood Authority Pages:</h3>
            <div>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patna" class="brd-cluster-link" style="background: #0e2b5c; color: #ffffff; border-color: #0e2b5c;">★ Patna Central City Hub</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kankarbagh-patna" class="brd-cluster-link">Kankarbagh Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-boring-road-patna" class="brd-cluster-link">Boring Road Relocation</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-danapur-patna" class="brd-cluster-link">Danapur Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ashiana-nagar-patna" class="brd-cluster-link">Ashiana Nagar Shifting</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patliputra-colony-patna" class="brd-cluster-link">Patliputra Colony Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-rajendra-nagar-patna" class="brd-cluster-link">Rajendra Nagar Shifting</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-anisabad-patna" class="brd-cluster-link">Anisabad Relocation</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-khagaul-patna" class="brd-cluster-link">Khagaul Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-phulwari-sharif-patna" class="brd-cluster-link">Phulwari Sharif Shifting</a>
            </div>
            <h3 style="font-size: 1.15rem; color: #0e2b5c; font-weight: 700; margin: 24px 0 12px;">Direct Long-Distance Corridors from Patna:</h3>
            <div>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-ranchi-packers-and-movers" class="brd-cluster-link">Patna to Ranchi Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-jamshedpur-packers-and-movers" class="brd-cluster-link">Patna to Jamshedpur Shifting</a>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-dhanbad-packers-and-movers" class="brd-cluster-link">Patna to Dhanbad Relocation</a>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-bokaro-packers-and-movers" class="brd-cluster-link">Patna to Bokaro Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/adityapur-to-patna-packers-and-movers" class="brd-cluster-link">Adityapur to Patna Route</a>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-deoghar-packers-and-movers" class="brd-cluster-link">Patna to Deoghar Route</a>
            </div>
        </div>

        <!-- Call to Action Banner -->
        <div class="brd-cta-box">
            <h3 class="brd-cta-title">Planning a Relocation Along Bailey Road Patna?</h3>
            <p class="brd-cta-desc">
                Contact our local Bailey Road moving specialists today for a transparent, guaranteed quotation, high-rise elevator protection, and damage-free moving services.
            </p>
            <div style="display: flex; justify-content: center; gap: 14px; flex-wrap: wrap;">
                <a href="tel:+918409531615" class="brd-cta-btn">Call Now: 8409531615</a>
                <a href="<?php echo SITE_BASE_URL; ?>/contact" class="brd-cta-btn" style="background: transparent; border: 2px solid #ffffff;">Request Survey Online</a>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
