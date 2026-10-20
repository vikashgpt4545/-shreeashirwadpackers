<?php
/**
 * Page: Packers and Movers in Ashiana Nagar Patna
 * Tier: Tier 2 (Hyper-Local Neighborhood Hub)
 * Parent City Hub: pages/packers-and-movers-in-patna.php
 * Target URL: https://www.shreeashirwadpackers.com/packers-and-movers-in-ashiana-nagar-patna
 */

$page_title = "Packers and Movers in Ashiana Nagar Patna | Safe Home Shifting";
$page_description = "Trusted packers and movers in Ashiana Nagar Patna. Expert apartment shifting, gated society relocations across Phase 1 & 2, Ashiana-Digha Road, Magistrate Colony & Ram Nagari. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/packers-and-movers-in-ashiana-nagar-patna";
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
    <meta name="keywords" content="packers and movers in ashiana nagar patna, home shifting ashiana nagar, movers ashiana digha road patna, flat shifting magistrate colony patna, packers ram nagari patna, house relocation ashiana phase 1 patna, movers near passport office patna">
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
    <meta name="geo.placename" content="Ashiana Nagar, Patna">
    <meta name="geo.position" content="25.6178;85.0934">
    <meta name="ICBM" content="25.6178, 85.0934">

    <link rel="shortcut icon" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo SITE_BASE_URL; ?>/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Structured Data 1: MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Ashiana Nagar Patna Hub",
        "image": "<?php echo SITE_BASE_URL; ?>/images/multistory-apartment-goods-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91-8409531615",
        "priceRange": "₹3,500 - ₹48,000",
        "description": "Licensed packers and movers in Ashiana Nagar Patna specializing in modern gated community apartment shifting, government officer transfers, modular furniture packing, and intercity transit.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Ashiana-Digha Road, Near Ashiana Mor",
            "addressLocality": "Patna",
            "addressRegion": "Bihar",
            "postalCode": "800025",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 25.6178,
            "longitude": 85.0934
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
            "opens": "07:00",
            "closes": "22:00"
        },
        "areaServed": [
            { "@type": "AdministrativeArea", "name": "Ashiana Nagar, Patna" },
            { "@type": "AdministrativeArea", "name": "Ashiana Nagar Phase 1, Patna" },
            { "@type": "AdministrativeArea", "name": "Ashiana Nagar Phase 2, Patna" },
            { "@type": "AdministrativeArea", "name": "Magistrate Colony, Patna" },
            { "@type": "AdministrativeArea", "name": "Ram Nagari, Patna" },
            { "@type": "AdministrativeArea", "name": "Abhiyanta Nagar, Patna" },
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
                "name": "Packers and Movers in Ashiana Nagar Patna",
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
        "serviceType": "Residential Apartment and Household Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers",
            "url": "https://www.shreeashirwadpackers.com"
        },
        "areaServed": {
            "@type": "AdministrativeArea",
            "name": "Ashiana Nagar, Patna, Bihar"
        },
        "description": "Professional residential relocation, gated society elevator padding, furniture dismantling, and vehicle transportation in Ashiana Nagar, Patna."
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
                "name": "What are the local moving charges in Ashiana Nagar Patna?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "For local moves within Ashiana Nagar or to neighboring sectors like Bailey Road, Jagdeo Path, or Boring Road, charges typically average ₹3,500 to ₹6,500 for a 1 BHK flat, ₹6,500 to ₹12,500 for a 2 BHK apartment, and ₹11,000 to ₹19,000 for a 3 BHK residence. All quotes include packing materials, labor, transport, and unloading."
                }
            },
            {
                "@type": "Question",
                "name": "How do you coordinate with gated society RWAs in Ashiana Phase 1 and Phase 2?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Modern gated complexes in Ashiana Nagar enforce strict security norms regarding move-in schedules (typically 9:00 AM to 6:00 PM), elevator reservations, and basement parking clearances. Our team arranges security gate passes in advance, applies protective wall blankets inside service lifts, and ensures clean driveway operations."
                }
            },
            {
                "@type": "Question",
                "name": "Can your trucks navigate Ashiana-Digha Road during busy daytime hours?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Ashiana-Digha Road experiences steady vehicular traffic between Ashiana Mor and Digha. We schedule packing early in the morning and utilize nimble 14-foot enclosed container trucks that easily enter residential lanes in Magistrate Colony, Ram Nagari, and Abhiyanta Nagar without causing blockades."
                }
            },
            {
                "@type": "Question",
                "name": "How quickly can your survey supervisor visit my flat in Ashiana Nagar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our field operations desk is stationed near Ashiana Mor. A survey supervisor can reach your residence in Phase 1, Phase 2, Friends Colony, or near the Passport Office within 25 to 40 minutes for a free on-site inventory assessment and guaranteed written estimate."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide car and motorcycle carrier transport from Ashiana Nagar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer specialized bike packing with heavy bubble wrapping and handlebar bracing, along with enclosed hydraulic car carriers for sedans and SUVs to destinations across India including Ranchi, Jamshedpur, Kolkata, Bangalore, and Delhi NCR."
                }
            },
            {
                "@type": "Question",
                "name": "Do you assist with dismantling modular wardrobes and hydraulic storage beds in Ashiana flats?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our certified carpenters carefully dismantle hydraulic storage beds, modular wardrobes, and glass tables, packaging all hardware fasteners in labeled packets. Everything is reassembled and positioned at your destination."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped CSS for Ashiana Nagar Patna Page: Prefix anp- */
        .anp-hero {
            background: linear-gradient(135deg, #0e2b5c 0%, #071938 100%);
            color: #ffffff;
            padding: 60px 16px 50px;
            position: relative;
            text-align: center;
        }
        .anp-hero-inner {
            max-width: 980px;
            margin: 0 auto;
        }
        .anp-hero-badge {
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
        .anp-hero-title {
            font-size: clamp(1.8rem, 3.5vw, 2.7rem);
            font-weight: 800;
            line-height: 1.25;
            margin-bottom: 18px;
            color: #ffffff;
        }
        .anp-hero-desc {
            font-size: 1.05rem;
            line-height: 1.65;
            color: #d8e2f0;
            max-width: 820px;
            margin: 0 auto 28px;
        }
        .anp-hero-pills {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-bottom: 25px;
        }
        .anp-pill {
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.22);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.88rem;
            color: #ffffff;
        }
        .anp-quick-bar {
            display: flex;
            justify-content: center;
            gap: 14px;
            flex-wrap: wrap;
            margin-top: 15px;
        }
        .anp-quick-btn {
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
        .anp-quick-btn:hover {
            background: #e64a19;
            transform: translateY(-2px);
        }
        .anp-quick-btn.anp-sec-btn {
            background: #25d366;
        }
        .anp-quick-btn.anp-sec-btn:hover {
            background: #1ebc59;
        }
        .anp-section {
            padding: 55px 16px;
        }
        .anp-section.anp-bg-alt {
            background: #f8fafc;
        }
        .anp-container {
            max-width: 1140px;
            margin: 0 auto;
        }
        .anp-section-header {
            text-align: center;
            margin-bottom: 40px;
        }
        .anp-section-title {
            font-size: clamp(1.5rem, 2.8vw, 2.1rem);
            font-weight: 800;
            color: #0e2b5c;
            margin-bottom: 12px;
            line-height: 1.3;
        }
        .anp-section-subtitle {
            font-size: 1rem;
            color: #556987;
            max-width: 780px;
            margin: 0 auto;
            line-height: 1.6;
        }
        .anp-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 28px;
            align-items: center;
        }
        .anp-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }
        .anp-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }
        @media (max-width: 900px) {
            .anp-grid-3, .anp-grid-4 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 768px) {
            .anp-grid-2, .anp-grid-3, .anp-grid-4 {
                grid-template-columns: 1fr;
            }
        }
        .anp-card {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            padding: 24px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.04);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .anp-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.08);
        }
        .anp-card-icon {
            font-size: 1.8rem;
            color: #ff5722;
            margin-bottom: 14px;
            display: inline-block;
        }
        .anp-card-title {
            font-size: 1.15rem;
            font-weight: 700;
            color: #0e2b5c;
            margin-bottom: 10px;
            line-height: 1.4;
        }
        .anp-card-text {
            font-size: 0.94rem;
            color: #556987;
            line-height: 1.6;
            margin: 0;
        }
        .anp-image-box {
            max-width: 580px;
            margin: 20px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            background: #eef2f6;
        }
        .anp-image-box img {
            width: 100%;
            height: auto;
            max-height: 420px;
            object-fit: cover;
            display: block;
        }
        .anp-image-caption {
            font-size: 0.85rem;
            color: #64748b;
            text-align: center;
            padding: 10px 14px;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            margin: 0;
            font-style: italic;
        }
        .anp-table-wrapper {
            overflow-x: auto;
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 14px rgba(0,0,0,0.04);
            margin: 24px 0;
        }
        .anp-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.94rem;
        }
        .anp-table th {
            background: #0e2b5c;
            color: #ffffff;
            padding: 14px 16px;
            font-weight: 700;
        }
        .anp-table td {
            padding: 13px 16px;
            border-bottom: 1px solid #edf2f7;
            color: #334155;
        }
        .anp-table tr:last-child td {
            border-bottom: none;
        }
        .anp-table tr:hover td {
            background: #f8fafc;
        }
        .anp-process-step {
            display: flex;
            gap: 18px;
            background: #ffffff;
            padding: 22px;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            margin-bottom: 16px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.03);
        }
        .anp-process-num {
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
        .anp-process-content h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: #0e2b5c;
            margin: 0 0 8px;
        }
        .anp-process-content p {
            font-size: 0.93rem;
            color: #556987;
            line-height: 1.6;
            margin: 0;
        }
        .anp-faq-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            margin-bottom: 14px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
        }
        .anp-faq-question {
            padding: 18px 20px;
            font-weight: 700;
            color: #0e2b5c;
            font-size: 1.02rem;
            background: #ffffff;
            border-bottom: 1px solid #edf2f7;
        }
        .anp-faq-answer {
            padding: 16px 20px 20px;
            color: #556987;
            font-size: 0.93rem;
            line-height: 1.65;
        }
        .anp-cluster-box {
            background: #f1f5f9;
            border-radius: 12px;
            padding: 28px;
            border: 1px solid #e2e8f0;
            margin-top: 25px;
        }
        .anp-cluster-link {
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
        .anp-cluster-link:hover {
            background: #ff5722;
            color: #ffffff;
            border-color: #ff5722;
            transform: translateY(-2px);
        }
        .anp-cta-box {
            background: linear-gradient(135deg, #0e2b5c 0%, #1e3a8a 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 40px 24px;
            text-align: center;
            margin-top: 35px;
        }
        .anp-cta-title {
            font-size: clamp(1.4rem, 2.5vw, 1.9rem);
            font-weight: 800;
            margin-bottom: 12px;
            color: #ffffff;
        }
        .anp-cta-desc {
            font-size: 0.98rem;
            color: #cbd5e1;
            max-width: 650px;
            margin: 0 auto 24px;
            line-height: 1.6;
        }
        .anp-cta-btn {
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
        .anp-cta-btn:hover {
            background: #e64a19;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
<?php require_once __DIR__ . '/../includes/header.php'; ?>

<!-- Breadcrumb Navigation Bar -->
<div style="background: #f1f5f9; padding: 12px 16px; border-bottom: 1px solid #e2e8f0; font-size: 0.88rem;">
    <div class="anp-container">
        <a href="<?php echo SITE_BASE_URL; ?>/" style="color: #0e2b5c; text-decoration: none; font-weight: 600;">Home</a>
        <span style="margin: 0 8px; color: #94a3b8;">/</span>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patna" style="color: #0e2b5c; text-decoration: none; font-weight: 600;">Packers and Movers in Patna</a>
        <span style="margin: 0 8px; color: #94a3b8;">/</span>
        <span style="color: #64748b; font-weight: 600;">Ashiana Nagar</span>
    </div>
</div>

<!-- Hero Section -->
<section class="anp-hero">
    <div class="anp-hero-inner">
        <span class="anp-hero-badge">Modern Residential & Gated Society Experts</span>
        <h1 class="anp-hero-title">Packers and Movers in Ashiana Nagar Patna</h1>
        <p class="anp-hero-desc">
            Shree Ashirwad Packers and Movers delivers dependable, scratch-free apartment shifting, corporate executive relocations, and enclosed vehicle transport across Ashiana Nagar, Patna. Serving Phase 1, Phase 2, Ashiana-Digha Road, Magistrate Colony, Ram Nagari, and Abhiyanta Nagar with five-layer protective packaging, service elevator padding, and punctual delivery.
        </p>
        <div class="anp-hero-pills">
            <span class="anp-pill">✓ 25-Min Doorstep Survey</span>
            <span class="anp-pill">✓ Gated Society RWA Clearance</span>
            <span class="anp-pill">✓ Service Elevator Wall Protection</span>
            <span class="anp-pill">✓ 5-Layer Armor Packaging</span>
            <span class="anp-pill">✓ 100% Comprehensive Transit Cover</span>
        </div>
        <div class="anp-quick-bar">
            <a href="tel:+918409531615" class="anp-quick-btn">
                <span>📞 Call 8409531615</span>
            </a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20home%20shifting%20in%20Ashiana%20Nagar%20Patna" class="anp-quick-btn anp-sec-btn" target="_blank" rel="noopener noreferrer">
                <span>💬 WhatsApp Quick Quote</span>
            </a>
        </div>
    </div>
</section>

<!-- Section 1: Detailed Neighborhood Dynamics & Gated Colony Moving -->
<section class="anp-section">
    <div class="anp-container">
        <div class="anp-grid-2">
            <div>
                <span style="color: #ff5722; font-weight: 700; font-size: 0.88rem; text-transform: uppercase;">Western Patna Modern Enclave</span>
                <h2 class="anp-section-title">Seamless Relocation Across Ashiana Nagar's Planned Belts</h2>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Ashiana Nagar represents one of western Patna's most contemporary, organized, and preferred residential destinations. Situated along the Ashiana-Digha Road just south-west of Bailey Road and extending towards Jagdeo Path and Phulwari Sharif, this flourishing locality is segmented into planned sectors including Ashiana Nagar Phase 1, Phase 2, Magistrate Colony, Abhiyanta Nagar, Friends Colony, and Ram Nagari.
                </p>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Unlike older downtown localities, Ashiana Nagar is defined predominantly by modern multi-story gated apartment societies, cooperative housing societies, and spacious independent duplexes. The neighborhood hosts a large population of senior administrative officials, bank executives, IT consultants, and central government employees (with the Regional Passport Office located nearby).
                </p>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Moving in Ashiana Nagar requires navigating specific gated society protocols: securing RWA security clearances in advance, reserving passenger or service elevators, scheduling moves around peak commuter hours on Ashiana-Digha Road, and utilizing floor protection sheets to safeguard building common areas. Our field crew coordinates directly with society management, lays protective mats across lobby floors, and pads elevator interiors to guarantee an entirely hassle-free moving experience.
                </p>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Additionally, residential clusters like Magistrate Colony and Friends Colony feature serene cul-de-sacs with private gates where oversized long-haul trailers cannot easily park. Our logistics desk deploys customized 14-foot enclosed container trucks engineered to clear basement entrance arches and sharp internal turnings. For government officers and public sector bank managers stationed near the Regional Passport Office or Jagdeo Path, we provide dedicated weekend packing slots, full itemized consignment inventories, transit insurance receipts, and GST-compliant invoices for seamless employer reimbursement.
                </p>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7;">
                    Whether you are shifting locally within Ashiana Nagar or coordinating an interstate move, our services connect directly with our parent <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patna" style="color: #0e2b5c; font-weight: 700; text-decoration: underline;">Packers and Movers in Patna</a> network and our company headquarters at <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi" style="color: #0e2b5c; font-weight: 700; text-decoration: underline;">Packers and Movers in Ranchi</a>.
                </p>
            </div>
            <div>
                <div class="anp-image-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/multistory-apartment-goods-loading-ranchi.jpg" alt="Apartment moving and goods loading in Ashiana Nagar Patna" loading="lazy">
                    <p class="anp-image-caption">Careful handling of furniture and household goods at modern gated societies in Ashiana Nagar, Patna.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 2: Specialized Local Moving Services -->
<section class="anp-section anp-bg-alt">
    <div class="anp-container">
        <div class="anp-section-header">
            <h2 class="anp-section-title">Specialized Moving Services in Ashiana Nagar Patna</h2>
            <p class="anp-section-subtitle">Dedicated moving capabilities tailored for gated apartments, government executives, and vehicle transportation.</p>
        </div>
        <div class="anp-grid-3">
            <div class="anp-card">
                <span class="anp-card-icon">🏢</span>
                <h3 class="anp-card-title">Gated Apartment Relocation</h3>
                <p class="anp-card-text">
                    Comprehensive flat shifting tailored for modern gated societies in Phase 1 and Phase 2. Service elevator padding, floor protection runners, and systematic room-by-room box placement.
                </p>
            </div>
            <div class="anp-card">
                <span class="anp-card-icon">🛋️</span>
                <h3 class="anp-card-title">Modular Furniture Carpentry</h3>
                <p class="anp-card-text">
                    Skilled dismantling and precision reassembly of modular wardrobes, hydraulic storage beds, study units, and dining tables by certified carpenters with specialized mechanical toolsets.
                </p>
            </div>
            <div class="anp-card">
                <span class="anp-card-icon">🏛️</span>
                <h3 class="anp-card-title">Government & Corporate Moves</h3>
                <p class="anp-card-text">
                    Expedited transfer relocation for central government officers, passport officials, and corporate executives with itemized documentation, bilty receipts, and GST-compliant invoices.
                </p>
            </div>
            <div class="anp-card">
                <span class="anp-card-icon">🚗</span>
                <h3 class="anp-card-title">Car & Two-Wheeler Transport</h3>
                <p class="anp-card-text">
                    Doorstep pickup of sedans, SUVs, and motorbikes with enclosed hydraulic carrier transit from Ashiana Nagar to Ranchi, Jamshedpur, Kolkata, Bangalore, Pune, and Delhi NCR.
                </p>
            </div>
            <div class="anp-card">
                <span class="anp-card-icon">📦</span>
                <h3 class="anp-card-title">5-Layer Protective Armor</h3>
                <p class="anp-card-text">
                    Virgin 5-ply corrugated sheets, dense air bubble cushioning, industrial stretch wrap, and corner edge guards safeguard delicate glassware, paintings, and smart televisions.
                </p>
            </div>
            <div class="anp-card">
                <span class="anp-card-icon">🛡️</span>
                <h3 class="anp-card-title">Transit Insurance & Storage Hub</h3>
                <p class="anp-card-text">
                    Full comprehensive risk insurance covering all intercity relocations, coupled with clean, pest-controlled, and 24/7 CCTV-monitored warehouse storage facilities for temporary retention.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: Material Quality & Gated Society Moving Protocols -->
<section class="anp-section">
    <div class="anp-container">
        <div class="anp-grid-2">
            <div>
                <div class="anp-image-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="High density bubble wrap and corrugated boxes deployed in Ashiana Nagar Patna" loading="lazy">
                    <p class="anp-image-caption">Sturdy 5-ply cartons, shock-absorbing bubble wrap, and moisture-resistant stretch film for Ashiana Nagar homes.</p>
                </div>
            </div>
            <div>
                <span style="color: #ff5722; font-weight: 700; font-size: 0.88rem; text-transform: uppercase;">Zero-Damage Standard</span>
                <h2 class="anp-section-title">Strict Packaging Protocols for High-Value Consignments</h2>
                <p style="font-size: 0.96rem; color: #475569; line-height: 1.7; margin-bottom: 14px;">
                    Whether moving smart LED televisions, imported kitchen appliances, executive study desks, or delicate home decor, Shree Ashirwad Packers deploys systematic multi-layer protection designed to eliminate transit friction:
                </p>
                <ul style="padding-left: 20px; color: #475569; font-size: 0.95rem; line-height: 1.8; margin-bottom: 18px;">
                    <li><strong>Custom Wooden Skeleton Crates:</strong> Large LED/OLED televisions and PC monitors are wrapped in anti-static air bubble film before being secured into reinforced wooden crates.</li>
                    <li><strong>Scratch-Resistant Fabric Blankets:</strong> High-end velvet, leather sofas, and carved teakwood furniture are enveloped in thick quilted moving blankets and waterproof stretch film.</li>
                    <li><strong>Marble Surface Floor Protection:</strong> Our team lays protective runner mats across polished Italian marble and hardwood floors to prevent wheel marks or scratches during loading.</li>
                    <li><strong>Color-Coded Room Labeling:</strong> Cartons are labeled by room and contents, ensuring that unpacking at your destination is smooth and systematic.</li>
                </ul>
                <p style="font-size: 0.95rem; color: #475569; line-height: 1.7;">
                    Review standard pricing structures on our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" style="color: #0e2b5c; font-weight: 700; text-decoration: underline;">Transparent Relocation Tariff Calculator</a>.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section 4: Transparent Pricing Table -->
<section class="anp-section brd-bg-alt anp-bg-alt">
    <div class="anp-container">
        <div class="anp-section-header">
            <h2 class="anp-section-title">Transparent Relocation Charges in Ashiana Nagar Patna</h2>
            <p class="anp-section-subtitle">Straightforward, competitive estimates with complete breakdown of packing supplies, labor, transit, and unloading.</p>
        </div>
        <div class="anp-table-wrapper">
            <table class="anp-table">
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
                        <td>Standard 3-Layer Packing, 2-3 Skilled Packers</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Residential Flat / House</strong></td>
                        <td>₹6,500 - ₹12,500</td>
                        <td>₹15,500 - ₹27,000</td>
                        <td>Premium 4-Layer Packing, 4-5 Professional Crew</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Independent Home / Flat</strong></td>
                        <td>₹11,000 - ₹19,000</td>
                        <td>₹23,500 - ₹37,000</td>
                        <td>Heavy Duty 5-Layer Armor, 5-6 Trained Movers</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Bungalow / Luxury Duplex</strong></td>
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
<section class="anp-section">
    <div class="anp-container">
        <div class="anp-grid-2">
            <div>
                <span style="color: #ff5722; font-weight: 700; font-size: 0.88rem; text-transform: uppercase;">Methodical Moving Framework</span>
                <h2 class="anp-section-title">How We Manage Your Move in Ashiana Nagar</h2>
                <div class="anp-process-step">
                    <div class="anp-process-num">1</div>
                    <div class="anp-process-content">
                        <h4>Free On-Site Survey & Fixed Quote</h4>
                        <p>Our supervisor visits your apartment in Phase 1, Phase 2, or Magistrate Colony, assessing furniture volume, service elevator capacity, and parking access to provide a firm written estimate.</p>
                    </div>
                </div>
                <div class="anp-process-step">
                    <div class="anp-process-num">2</div>
                    <div class="anp-process-content">
                        <h4>Expert Dismantling & 5-Layer Packing</h4>
                        <p>Our certified packers arrive equipped with heavy corrugated boxes, bubble cushioning, stretch film, and carpentry toolkits to carefully dismantle beds and wrap delicate kitchen china.</p>
                    </div>
                </div>
                <div class="anp-process-step">
                    <div class="anp-process-num">3</div>
                    <div class="anp-process-content">
                        <h4>Careful Loading & Coordinated Street Transit</h4>
                        <p>Goods are loaded into cushioned, weatherproof container trucks utilizing hydraulic ramps and padded safety belts. Drivers navigate residential avenues easily to avoid blocking neighbors.</p>
                    </div>
                </div>
                <div class="anp-process-step">
                    <div class="anp-process-num">4</div>
                    <div class="anp-process-content">
                        <h4>Unloading, Furniture Re-Assembly & Setup</h4>
                        <p>At your new residence, our crew carries goods to designated rooms, reassembles beds and heavy cupboards, positions furniture according to your instructions, and clears away all packing debris.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="anp-image-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Dedicated car carrier vehicle transport in Ashiana Nagar Patna" loading="lazy">
                    <p class="anp-image-caption">Dedicated enclosed carrier vehicles providing scratch-safe car and bike relocation services.</p>
                </div>
                <div class="anp-image-box" style="margin-top: 24px;">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Dedicated delivery truck navigating residential roads in Ashiana Nagar Patna" loading="lazy">
                    <p class="anp-image-caption">Modern enclosed container trucks ensuring weather-safe door-to-door transit across Patna colonies.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 6: Specific Sector Insights for Ashiana Nagar Sub-Areas -->
<section class="anp-section anp-bg-alt">
    <div class="anp-container">
        <div class="anp-section-header">
            <h2 class="anp-section-title">Navigating Key Zones in Ashiana Nagar Patna</h2>
            <p class="anp-section-subtitle">Hyper-local experience makes the difference. Here is how we manage moves across Ashiana Nagar's major sub-sectors.</p>
        </div>
        <div class="anp-grid-4">
            <div class="anp-card">
                <h3 class="anp-card-title">Ashiana Phase 1 & Phase 2</h3>
                <p class="anp-card-text">
                    Core planned residential sectors with modern apartment societies. We coordinate with building security for service lift booking and clean basement parking.
                </p>
            </div>
            <div class="anp-card">
                <h3 class="anp-card-title">Magistrate Colony & Friends Colony</h3>
                <p class="anp-card-text">
                    Peaceful residential enclaves housing judicial and government officials. We follow quiet moving protocols and preserve clean, unblocked driveways.
                </p>
            </div>
            <div class="anp-card">
                <h3 class="anp-card-title">Ashiana Mor & Bailey Road Link</h3>
                <p class="anp-card-text">
                    Busy commercial junction with high traffic density. We schedule truck dispatches during early morning windows (7:00 AM - 10:00 AM) to avoid delays.
                </p>
            </div>
            <div class="anp-card">
                <h3 class="anp-card-title">Ram Nagari & Abhiyanta Nagar</h3>
                <p class="anp-card-text">
                    Rapidly growing apartment belt extending towards Digha. We deploy maneuverable 14-foot container trucks to navigate internal lanes smoothly.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section 7: Frequently Asked Questions (FAQ) -->
<section class="anp-section">
    <div class="anp-container">
        <div class="anp-section-header">
            <h2 class="anp-section-title">Frequently Asked Questions — Ashiana Nagar Relocation</h2>
            <p class="anp-section-subtitle">Real answers regarding moving logistics, costs, gated society rules, and safety in Ashiana Nagar, Patna.</p>
        </div>
        <div style="max-width: 860px; margin: 0 auto;">
            <div class="anp-faq-item">
                <div class="anp-faq-question">What are the local moving charges in Ashiana Nagar Patna?</div>
                <div class="anp-faq-answer">
                    For local moves within Ashiana Nagar or to neighboring sectors like Bailey Road, Jagdeo Path, or Boring Road, charges typically average ₹3,500 to ₹6,500 for a 1 BHK flat, ₹6,500 to ₹12,500 for a 2 BHK apartment, and ₹11,000 to ₹19,000 for a 3 BHK residence. All quotes include packing materials, labor, transport, and unloading.
                </div>
            </div>
            <div class="anp-faq-item">
                <div class="anp-faq-question">How do you coordinate with gated society RWAs in Ashiana Phase 1 and Phase 2?</div>
                <div class="anp-faq-answer">
                    Modern gated complexes in Ashiana Nagar enforce strict security norms regarding move-in schedules (typically 9:00 AM to 6:00 PM), elevator reservations, and basement parking clearances. Our team arranges security gate passes in advance, applies protective wall blankets inside service lifts, and ensures clean driveway operations.
                </div>
            </div>
            <div class="anp-faq-item">
                <div class="anp-faq-question">Can your trucks navigate Ashiana-Digha Road during busy daytime hours?</div>
                <div class="anp-faq-answer">
                    Ashiana-Digha Road experiences steady vehicular traffic between Ashiana Mor and Digha. We schedule packing early in the morning and utilize nimble 14-foot enclosed container trucks that easily enter residential lanes in Magistrate Colony, Ram Nagari, and Abhiyanta Nagar without causing blockades.
                </div>
            </div>
            <div class="anp-faq-item">
                <div class="anp-faq-question">How quickly can your survey supervisor visit my flat in Ashiana Nagar?</div>
                <div class="anp-faq-answer">
                    Our field operations desk is stationed near Ashiana Mor. A survey supervisor can reach your residence in Phase 1, Phase 2, Friends Colony, or near the Passport Office within 25 to 40 minutes for a free on-site inventory assessment and guaranteed written estimate.
                </div>
            </div>
            <div class="anp-faq-item">
                <div class="anp-faq-question">Do you provide car and motorcycle carrier transport from Ashiana Nagar?</div>
                <div class="anp-faq-answer">
                    Yes. We offer specialized bike packing with heavy bubble wrapping and handlebar bracing, along with enclosed hydraulic car carriers for sedans and SUVs to destinations across India including Ranchi, Jamshedpur, Kolkata, Bangalore, and Delhi NCR.
                </div>
            </div>
            <div class="anp-faq-item">
                <div class="anp-faq-question">Do you assist with dismantling modular wardrobes and hydraulic storage beds in Ashiana flats?</div>
                <div class="anp-faq-answer">
                    Yes, our certified carpenters carefully dismantle hydraulic storage beds, modular wardrobes, and glass tables, packaging all hardware fasteners in labeled packets. Everything is reassembled and positioned at your destination.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 8: Sister Neighborhoods Cluster Navigation & Long-Distance Corridors -->
<section class="anp-section anp-bg-alt">
    <div class="anp-container">
        <div class="anp-section-header">
            <h2 class="anp-section-title">Explore Nearby Shifting Hubs Across Patna & Intercity Routes</h2>
            <p class="anp-section-subtitle">Connecting Ashiana Nagar with all major residential neighborhoods in Patna and interstate corridors.</p>
        </div>
        <div class="anp-cluster-box">
            <h3 style="font-size: 1.15rem; color: #0e2b5c; font-weight: 700; margin-bottom: 12px;">Top Patna Neighborhood Authority Pages:</h3>
            <div>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patna" class="anp-cluster-link" style="background: #0e2b5c; color: #ffffff; border-color: #0e2b5c;">★ Patna Central City Hub</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bailey-road-patna" class="anp-cluster-link">Bailey Road Shifting</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-danapur-patna" class="anp-cluster-link">Danapur Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patliputra-colony-patna" class="anp-cluster-link">Patliputra Colony Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-boring-road-patna" class="anp-cluster-link">Boring Road Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kankarbagh-patna" class="anp-cluster-link">Kankarbagh Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-rajendra-nagar-patna" class="anp-cluster-link">Rajendra Nagar Shifting</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-anisabad-patna" class="anp-cluster-link">Anisabad Relocation</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-khagaul-patna" class="anp-cluster-link">Khagaul Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-phulwari-sharif-patna" class="anp-cluster-link">Phulwari Sharif Shifting</a>
            </div>
            <h3 style="font-size: 1.15rem; color: #0e2b5c; font-weight: 700; margin: 24px 0 12px;">Direct Long-Distance Corridors from Patna:</h3>
            <div>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-ranchi-packers-and-movers" class="anp-cluster-link">Patna to Ranchi Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-jamshedpur-packers-and-movers" class="anp-cluster-link">Patna to Jamshedpur Shifting</a>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-dhanbad-packers-and-movers" class="anp-cluster-link">Patna to Dhanbad Relocation</a>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-bokaro-packers-and-movers" class="anp-cluster-link">Patna to Bokaro Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/adityapur-to-patna-packers-and-movers" class="anp-cluster-link">Adityapur to Patna Route</a>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-deoghar-packers-and-movers" class="anp-cluster-link">Patna to Deoghar Route</a>
            </div>
        </div>

        <!-- Call to Action Banner -->
        <div class="anp-cta-box">
            <h3 class="anp-cta-title">Planning a Relocation in Ashiana Nagar Patna?</h3>
            <p class="anp-cta-desc">
                Contact our local Ashiana Nagar moving specialists today for an authentic, transparent shifting quotation, gated society elevator care, and punctual delivery.
            </p>
            <div style="display: flex; justify-content: center; gap: 14px; flex-wrap: wrap;">
                <a href="tel:+918409531615" class="anp-cta-btn">Call Now: 8409531615</a>
                <a href="<?php echo SITE_BASE_URL; ?>/contact" class="anp-cta-btn" style="background: transparent; border: 2px solid #ffffff;">Request Survey Online</a>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
