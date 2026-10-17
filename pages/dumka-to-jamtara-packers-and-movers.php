<?php
/**
 * Page Name: Dumka to Jamtara Packers and Movers
 * Route Slug: dumka-to-jamtara-packers-and-movers
 * Description: Inter-district shifting route connecting Santhal Pargana sub-capital Dumka to Jamtara, Mihijam, and Karmatar.
 * Focus Keywords: dumka to jamtara packers and movers, packers and movers dumka to jamtara, house shifting dumka to jamtara, dumka to jamtara luggage transport, dumka to jamtara car carrier, dumka to jamtara bike parcel
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Dumka to Jamtara Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Quick Dumka to Jamtara packers and movers. 65 km fast 2 hr transit via SH-17, SKMU & commissionerate transfer bills, 5-layer packing, car transport. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/dumka-to-jamtara-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Dumka">

    <!-- Open Graph Metadata -->
    <meta property="og:type" content="business.business">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta property="og:url" content="<?php echo $canonical_url; ?>">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg">
    <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter Card Metadata -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg">

    <!-- Favicon & Stylesheets -->
    <link rel="icon" type="image/png" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
    <link rel="shortcut icon" href="<?php echo SITE_BASE_URL; ?>/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Scoped CSS for Route 9 (Dumka to Jamtara) -->
    <style>
        :root {
            --dum2jam-primary: #1e3a8a;
            --dum2jam-secondary: #0891b2;
            --dum2jam-accent: #d97706;
            --dum2jam-accent-light: #fef3c7;
            --dum2jam-dark: #0f172a;
            --dum2jam-gray-bg: #f8fafc;
            --dum2jam-border: #e2e8f0;
            --dum2jam-card-shadow: 0 10px 25px -5px rgba(30, 58, 138, 0.08), 0 8px 10px -6px rgba(30, 58, 138, 0.04);
        }

        .dum2jam-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 58, 138, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .dum2jam-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(217, 119, 6, 0.2);
            border: 1px solid rgba(217, 119, 6, 0.5);
            padding: 7px 18px;
            border-radius: 9999px;
            font-size: 0.88rem;
            font-weight: 700;
            color: #fde68a;
            margin-bottom: 22px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .dum2jam-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2.1rem, 4.2vw, 3.2rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
            color: #ffffff;
        }

        .dum2jam-hero p {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #cbd5e1;
            max-width: 780px;
            margin-bottom: 30px;
        }

        .dum2jam-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .dum2jam-btn-primary {
            background: linear-gradient(135deg, #d97706 0%, #b45309 100%);
            color: #ffffff;
            padding: 15px 32px;
            font-weight: 700;
            border-radius: 8px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 14px rgba(217, 119, 6, 0.4);
        }

        .dum2jam-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(217, 119, 6, 0.5);
            color: #ffffff;
        }

        .dum2jam-btn-secondary {
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.28);
            color: #ffffff;
            padding: 15px 30px;
            font-weight: 600;
            border-radius: 8px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            backdrop-filter: blur(8px);
            transition: all 0.3s ease;
        }

        .dum2jam-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.22);
            color: #ffffff;
        }

        .dum2jam-stat-ribbon {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: var(--dum2jam-card-shadow);
            margin-top: -35px;
            position: relative;
            z-index: 10;
            padding: 24px 30px;
            border: 1px solid var(--dum2jam-border);
        }

        .dum2jam-stat-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
            gap: 20px;
        }

        .dum2jam-stat-item {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .dum2jam-stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: var(--dum2jam-accent-light);
            color: var(--dum2jam-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            flex-shrink: 0;
        }

        .dum2jam-stat-label {
            font-size: 0.85rem;
            color: #64748b;
            text-transform: uppercase;
            font-weight: 600;
            margin-bottom: 3px;
        }

        .dum2jam-stat-val {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 800;
            color: var(--dum2jam-dark);
        }

        .dum2jam-section {
            padding: 70px 0;
        }

        .dum2jam-section-alt {
            background: var(--dum2jam-gray-bg);
            padding: 70px 0;
        }

        .dum2jam-heading-wrap {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }

        .dum2jam-pill {
            display: inline-block;
            background: #e0f2fe;
            color: #0284c7;
            font-weight: 700;
            font-size: 0.84rem;
            padding: 5px 16px;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 12px;
        }

        .dum2jam-heading-wrap h2 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(1.85rem, 3.2vw, 2.5rem);
            font-weight: 800;
            color: var(--dum2jam-dark);
            line-height: 1.25;
            margin-bottom: 15px;
        }

        .dum2jam-heading-wrap p {
            color: #475569;
            font-size: 1.05rem;
            line-height: 1.65;
        }

        .dum2jam-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 32px 28px;
            border: 1px solid var(--dum2jam-border);
            box-shadow: var(--dum2jam-card-shadow);
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .dum2jam-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 30px -8px rgba(30, 58, 138, 0.12);
        }

        .dum2jam-card-icon {
            width: 54px;
            height: 54px;
            background: #e0f2fe;
            color: var(--dum2jam-secondary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .dum2jam-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--dum2jam-dark);
            margin-bottom: 12px;
        }

        .dum2jam-card p {
            color: #64748b;
            font-size: 0.98rem;
            line-height: 1.65;
        }

        .dum2jam-table-wrap {
            overflow-x: auto;
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--dum2jam-border);
            box-shadow: var(--dum2jam-card-shadow);
            margin: 35px 0 20px;
        }

        .dum2jam-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            min-width: 650px;
        }

        .dum2jam-table th {
            background: #1e3a8a;
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 700;
            font-size: 0.96rem;
        }

        .dum2jam-table td {
            padding: 15px 20px;
            border-bottom: 1px solid var(--dum2jam-border);
            color: #334155;
            font-size: 0.94rem;
        }

        .dum2jam-table tr:hover td {
            background-color: #f8fafc;
        }

        .dum2jam-route-pill-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 35px;
        }

        .dum2jam-route-node {
            background: #ffffff;
            padding: 22px;
            border-radius: 10px;
            border-left: 4px solid var(--dum2jam-accent);
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            border-top: 1px solid var(--dum2jam-border);
            border-right: 1px solid var(--dum2jam-border);
            border-bottom: 1px solid var(--dum2jam-border);
        }

        .dum2jam-route-node h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            color: var(--dum2jam-dark);
            margin-bottom: 8px;
            font-weight: 700;
        }

        .dum2jam-route-node p {
            color: #64748b;
            font-size: 0.92rem;
            line-height: 1.55;
            margin: 0;
        }

        .dum2jam-img-showcase {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: var(--dum2jam-card-shadow);
            margin-bottom: 24px;
            border: 1px solid var(--dum2jam-border);
        }

        .dum2jam-img-showcase img {
            width: 100%;
            height: 270px;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .dum2jam-img-showcase:hover img {
            transform: scale(1.03);
        }

        .dum2jam-img-caption {
            padding: 15px 18px;
            background: #ffffff;
            font-size: 0.92rem;
            font-weight: 600;
            color: var(--dum2jam-dark);
            border-top: 1px solid var(--dum2jam-border);
        }

        .dum2jam-step-timeline {
            display: flex;
            flex-direction: column;
            gap: 24px;
            position: relative;
            margin-top: 40px;
        }

        .dum2jam-step-card {
            display: flex;
            gap: 20px;
            background: #ffffff;
            padding: 24px;
            border-radius: 12px;
            border: 1px solid var(--dum2jam-border);
            box-shadow: 0 4px 14px rgba(0,0,0,0.03);
        }

        .dum2jam-step-num {
            width: 44px;
            height: 44px;
            background: var(--dum2jam-primary);
            color: #ffffff;
            font-weight: 800;
            font-size: 1.25rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .dum2jam-step-body h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--dum2jam-dark);
            margin-bottom: 6px;
        }

        .dum2jam-step-body p {
            color: #64748b;
            font-size: 0.94rem;
            line-height: 1.6;
            margin: 0;
        }

        .dum2jam-faq-item {
            background: #ffffff;
            border: 1px solid var(--dum2jam-border);
            border-radius: 10px;
            margin-bottom: 16px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.02);
        }

        .dum2jam-faq-item summary {
            padding: 20px 24px;
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            font-size: 1.1rem;
            color: var(--dum2jam-dark);
            cursor: pointer;
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #ffffff;
        }

        .dum2jam-faq-item summary::-webkit-details-marker {
            display: none;
        }

        .dum2jam-faq-item summary::after {
            content: "+";
            font-size: 1.4rem;
            font-weight: 400;
            color: var(--dum2jam-accent);
        }

        .dum2jam-faq-item[open] summary::after {
            content: "−";
        }

        .dum2jam-faq-answer {
            padding: 0 24px 22px;
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
            border-top: 1px solid #f1f5f9;
            background: #fdfdfe;
        }

        .dum2jam-review-card {
            background: #ffffff;
            padding: 26px;
            border-radius: 12px;
            border: 1px solid var(--dum2jam-border);
            box-shadow: var(--dum2jam-card-shadow);
        }

        .dum2jam-review-stars {
            color: #f59e0b;
            font-size: 1.1rem;
            margin-bottom: 12px;
        }

        .dum2jam-review-card p {
            font-style: italic;
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.6;
            margin-bottom: 16px;
        }

        .dum2jam-review-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.88rem;
            border-top: 1px solid #f1f5f9;
            padding-top: 12px;
        }

        .dum2jam-review-author {
            font-weight: 700;
            color: var(--dum2jam-dark);
        }

        .dum2jam-review-loc {
            color: #94a3b8;
        }

        .dum2jam-highlight-box {
            background: linear-gradient(135deg, #eff6ff 0%, #fefce8 100%);
            border: 1px solid #fed7aa;
            border-radius: 12px;
            padding: 28px;
            margin: 30px 0;
        }

        .dum2jam-highlight-box h4 {
            font-family: 'Outfit', sans-serif;
            color: #9a3412;
            font-size: 1.25rem;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .dum2jam-highlight-box p {
            color: #334155;
            font-size: 0.96rem;
            line-height: 1.65;
            margin: 0;
        }

        @media (max-width: 768px) {
            .dum2jam-hero {
                padding: 60px 0 45px;
            }
            .dum2jam-stat-ribbon {
                margin-top: 15px;
                padding: 20px;
            }
            .dum2jam-cta-group {
                flex-direction: column;
                align-items: stretch;
            }
            .dum2jam-btn-primary, .dum2jam-btn-secondary {
                justify-content: center;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Dumka to Jamtara",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "https://www.shreeashirwadpackers.com/#movingcompany",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91-8409531615",
        "priceRange": "₹3,500 - ₹26,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Tinbazar Main Road, Near Bus Stand",
            "addressLocality": "Dumka",
            "addressRegion": "Jharkhand",
            "postalCode": "814101",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 24.2686,
            "longitude": 87.2486
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
                "Sunday"
            ],
            "opens": "07:00",
            "closes": "22:00"
        },
        "sameAs": [
            "https://www.facebook.com/shreeashirwadpackers",
            "https://twitter.com/ashirwadpackers"
        ]
    }
    </script>

    <!-- Schema 2: Service Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Inter-District Packers and Movers Service",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Dumka"
            },
            {
                "@type": "City",
                "name": "Jamtara"
            }
        ],
        "description": "Swift inter-district relocation from Santhal Pargana sub-capital Dumka to Jamtara covering government divisional transfers, SKMU university faculty moves, household goods, car carriers, and bike parcels.",
        "offers": {
            "@type": "Offer",
            "priceCurrency": "INR",
            "price": "3500",
            "availability": "https://schema.org/InStock"
        }
    }
    </script>

    <!-- Schema 3: BreadcrumbList Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "https://www.shreeashirwadpackers.com/"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "Dumka Packers and Movers",
                "item": "https://www.shreeashirwadpackers.com/packers-and-movers-in-dumka"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Dumka to Jamtara Route",
                "item": "<?php echo $canonical_url; ?>"
            }
        ]
    }
    </script>

    <!-- Schema 4: FAQPage Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What is the driving duration between Dumka and Jamtara?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Dumka and Jamtara is approximately 65 km. Our dedicated container fleet completes the drive within 1.5 to 2.5 hours via SH-17, enabling swift same-day packing, transit, and room setup."
                }
            },
            {
                "@type": "Question",
                "name": "How much does household shifting cost from Dumka to Jamtara?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Moving costs from Dumka to Jamtara average ₹3,500 to ₹6,500 for single room / 1 RK moves, ₹6,000 to ₹10,500 for a 1 BHK home, ₹9,500 to ₹15,000 for a 2 BHK apartment, and ₹14,000 to ₹21,000 for a 3 BHK family house."
                }
            },
            {
                "@type": "Question",
                "name": "Do you furnish valid transfer claim bills for SKMU and Commissionerate staff?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we specialize in government transfer billing. We provide valid GST invoices, IBA-standard consignment notes (LR/bilty), detailed packing manifests, and stamped money receipts needed for administrative, judicial, police, and bank transfer reimbursements."
                }
            },
            {
                "@type": "Question",
                "name": "Can you shift household goods directly to Mihijam or Karmatar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our delivery coverage spans the entire Jamtara district including Jamtara town, Mihijam, Karmatar (Vidyasagar), Nala, Kundahit, and all rural administrative blocks without any third-party transshipment."
                }
            },
            {
                "@type": "Question",
                "name": "How are fragile kitchen items and glass furniture protected?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We wrap glassware and crockery individually in air-bubble cushioning before packing into heavy corrugated cartons. Glass tabletops and mirrors are secured with thermocol corner pads and reinforced wooden framing."
                }
            }
        ]
    }
    </script>
</head>
<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<!-- Breadcrumbs Section -->
<nav class="breadcrumb-container" aria-label="breadcrumb" style="background: #f1f5f9; padding: 12px 0;">
    <div class="container">
        <ol class="breadcrumb" style="margin: 0; padding: 0; list-style: none; display: flex; flex-wrap: wrap; gap: 8px; font-size: 0.9rem;">
            <li><a href="<?php echo SITE_BASE_URL; ?>/" style="color: #0891b2; text-decoration: none;">Home</a> <span style="color: #94a3b8;">/</span></li>
            <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dumka" style="color: #0891b2; text-decoration: none;">Dumka</a> <span style="color: #94a3b8;">/</span></li>
            <li style="color: #64748b;" aria-current="page">Dumka to Jamtara</li>
        </ol>
    </div>
</nav>

<!-- Hero Section -->
<section class="dum2jam-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="dum2jam-hero-badge">Santhal Pargana Divisional Link &bull; 65 KM Fast Express</span>
                <h1>Reliable Dumka to Jamtara Packers and Movers</h1>
                <p>
                    Relocating from Dumka to Jamtara, Mihijam, or Karmatar? Shree Ashirwad Packers and Movers delivers rapid, zero-damage domestic shifting, government and SKMU university faculty transfers, and secure vehicle transportation. Serving Tinbazar, Rasikpur, Kathikund road, Dudhani, and Bandarjor to every part of Jamtara district.
                </p>
                <div class="dum2jam-cta-group">
                    <a href="tel:08409531615" class="dum2jam-btn-primary">
                        <i class="fa fa-phone"></i> Call 8409531615 for Free Quote
                    </a>
                    <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Dumka%20to%20Jamtara%20relocation" class="dum2jam-btn-secondary" target="_blank" rel="noopener">
                        <i class="fa fa-whatsapp"></i> WhatsApp Instant Estimate
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Ribbon -->
<div class="container">
    <div class="dum2jam-stat-ribbon">
        <div class="dum2jam-stat-grid">
            <div class="dum2jam-stat-item">
                <div class="dum2jam-stat-icon"><i class="fa fa-road"></i></div>
                <div>
                    <div class="dum2jam-stat-label">Highway Distance</div>
                    <div class="dum2jam-stat-val">~65 Kilometers</div>
                </div>
            </div>
            <div class="dum2jam-stat-item">
                <div class="dum2jam-stat-icon"><i class="fa fa-clock-o"></i></div>
                <div>
                    <div class="dum2jam-stat-label">Door Transit Duration</div>
                    <div class="dum2jam-stat-val">1.5 - 2.5 Hours</div>
                </div>
            </div>
            <div class="dum2jam-stat-item">
                <div class="dum2jam-stat-icon"><i class="fa fa-shield"></i></div>
                <div>
                    <div class="dum2jam-stat-label">Cargo Safety</div>
                    <div class="dum2jam-stat-val">100% Zero-Damage</div>
                </div>
            </div>
            <div class="dum2jam-stat-item">
                <div class="dum2jam-stat-icon"><i class="fa fa-file-text-o"></i></div>
                <div>
                    <div class="dum2jam-stat-label">Divisional & Govt Bills</div>
                    <div class="dum2jam-stat-val">100% Approved Bills</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Strategic Content Section -->
<section class="dum2jam-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="dum2jam-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Sealed waterproof moving container truck for Dumka to Jamtara transit" loading="lazy">
                    <div class="dum2jam-img-caption">
                        <i class="fa fa-truck" style="color: var(--dum2jam-accent); margin-right: 8px;"></i>
                        Waterproof container trucks operating daily along the Dumka &rarr; Jamtara SH-17 corridor.
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="dum2jam-pill">Divisional Headquarters to District Link</div>
                <h2 style="font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--dum2jam-dark); font-size: 2.1rem; margin-bottom: 18px;">
                    Fast, Safe & Organized Moving Between Dumka and Jamtara
                </h2>
                <p style="color: #475569; font-size: 1.02rem; line-height: 1.7; margin-bottom: 16px;">
                    As the administrative sub-capital of Jharkhand and the headquarters of the Santhal Pargana division, Dumka regularly facilitates official transfers, educational faculty postings from Sido Kanhu Murmu University (SKMU), banking relocations, and judicial personnel movements to neighboring Jamtara.
                </p>
                <p style="color: #475569; font-size: 1.02rem; line-height: 1.7; margin-bottom: 20px;">
                    Shree Ashirwad Packers and Movers eliminates all shifting friction. Our experienced moving crew handles full packaging at your Dumka residence using heavy-duty 5-layer corrugated sheets, air-bubble cushioning, foam edge protectors, and tamper-resistant shrink films. We secure your inventory into closed-body weather-sealed container trucks designed specifically to handle varying highway conditions without shifting or vibrating contents.
                </p>
                <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                    <div style="flex: 1 1 200px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px 18px;">
                        <strong style="color: #1e3a8a; display: block; margin-bottom: 4px;"><i class="fa fa-check-circle text-success"></i> Direct Highway Transit</strong>
                        <span style="color: #64748b; font-size: 0.9rem;">No midway hub offloading or re-stacking risks.</span>
                    </div>
                    <div style="flex: 1 1 200px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px 18px;">
                        <strong style="color: #1e3a8a; display: block; margin-bottom: 4px;"><i class="fa fa-check-circle text-success"></i> Corporate Reimbursement</strong>
                        <span style="color: #64748b; font-size: 0.9rem;">Approved GST paperwork for corporate claims.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Route Geography & Highway Overview -->
<section class="dum2jam-section-alt">
    <div class="container">
        <div class="dum2jam-heading-wrap">
            <span class="dum2jam-pill">Navigation Blueprint</span>
            <h2>Route Geography & Highway Transit Analysis</h2>
            <p>
                A well-maintained 65 km highway corridor connects Dumka with Jamtara, offering smooth transit and rapid door-to-door delivery.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="dum2jam-card">
                    <div class="dum2jam-card-icon"><i class="fa fa-map-signs"></i></div>
                    <h3>Primary Highway Corridor</h3>
                    <p>
                        The preferred freight route proceeds from Dumka south along SH-17, cutting past Jama or crossing through Sarath directly into Jamtara town. Paved two-lane state highways ensure smooth rolling conditions and minimal cargo vibration.
                    </p>
                </div>
            </div>
            <div class="dum2jam-card">
                <div class="dum2jam-card-icon"><i class="fa fa-clock-o"></i></div>
                <h3>Express Same-Day Delivery</h3>
                <p>
                    With only 65 kilometers between city centers, our clients enjoy unmatched moving speed. Loading is finished by morning, the container truck arrives before lunch, and our team reassembles beds and heavy appliances before sunset.
                </p>
            </div>
            <div class="dum2jam-card">
                <div class="dum2jam-card-icon"><i class="fa fa-shield"></i></div>
                <h3>Dedicated Container Security</h3>
                <p>
                    We never mix consignments from different customers. Your household effects travel inside an exclusive closed steel container truck, padlocked in your presence at Dumka and unsealed only when parked outside your new Jamtara home.
                </p>
            </div>
        </div>

        <!-- Major Node Points -->
        <div class="dum2jam-route-pill-grid">
            <div class="dum2jam-route-node">
                <h4>1. Origin Pickups: Dumka Divisional Hub</h4>
                <p>Full doorstep coverage across Tinbazar, Rasikpur, Kathikund road, Dudhani, Karharbil, Bandarjor, and Babu Para.</p>
            </div>
            <div class="dum2jam-route-node">
                <h4>2. Mid-Highway Arterials</h4>
                <p>Direct navigation along the SH-17 state highway corridor, avoiding bumpy village tracks and busy level crossings.</p>
            </div>
            <div class="dum2jam-route-node">
                <h4>3. Destination Delivery: Jamtara District</h4>
                <p>Prompt delivery, room-by-room unloading, and furniture assembly across Jamtara Town, Mihijam, Karmatar, Court Road, and Nala.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Portfolio Grid -->
<section class="dum2jam-section">
    <div class="container">
        <div class="dum2jam-heading-wrap">
            <span class="dum2jam-pill">Comprehensive Relocation Services</span>
            <h2>Tailored Shifting Solutions from Dumka to Jamtara</h2>
            <p>
                Whether you need complete 3BHK household shifting, a single two-wheeler parcel, or corporate office relocation, Shree Ashirwad provides dedicated specialized solutions.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="dum2jam-card">
                    <div class="dum2jam-card-icon"><i class="fa fa-home"></i></div>
                    <h3>Household Furniture Shifting</h3>
                    <p>
                        Comprehensive packing for wardrobes, modular beds, dining tables, sofa sets, kitchen glassware, and delicate home electronics using multi-layer protective packaging.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="dum2jam-card">
                    <div class="dum2jam-card-icon"><i class="fa fa-university"></i></div>
                    <h3>Government & Faculty Transfers</h3>
                    <p>
                        Turnkey relocation solutions compliant with government transfer guidelines. Includes customized packing schedules, priority unpacking, and GST-ready invoices.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="dum2jam-card">
                    <div class="dum2jam-card-icon"><i class="fa fa-car"></i></div>
                    <h3>Dedicated Car Carrier Service</h3>
                    <p>
                        Safe, damage-free motor car transportation utilizing enclosed hydraulic car haulers. Equipped with tire locks, safety harnesses, and transit insurance coverage.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="dum2jam-card">
                    <div class="dum2jam-card-icon"><i class="fa fa-motorcycle"></i></div>
                    <h3>Two-Wheeler Parcel Service</h3>
                    <p>
                        High-security bike parcel handling. Motorcycles and scooters are wrapped in corrugated wrap, bubble sheets, and wooden pallets to prevent highway scratches.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="dum2jam-card">
                    <div class="dum2jam-card-icon"><i class="fa fa-building"></i></div>
                    <h3>Industrial & Office Relocation</h3>
                    <p>
                        Disassembly, packing, and reinstallation of office workstations, server racks, desktop computer terminals, and sensitive commercial documents with minimal business downtime.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="dum2jam-card">
                    <div class="dum2jam-card-icon"><i class="fa fa-shield"></i></div>
                    <h3>Transit Insurance & Risk Management</h3>
                    <p>
                        Complete all-risk transit insurance protecting your precious assets against unpredictable road mishaps, rain damage, or unexpected transit delays from origin to destination.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Table Section -->
<section class="dum2jam-section-alt">
    <div class="container">
        <div class="dum2jam-heading-wrap">
            <span class="dum2jam-pill">Transparent Quotations</span>
            <h2>Dumka to Jamtara Shifting Cost Estimate</h2>
            <p>
                We believe in 100% upfront pricing with zero hidden charges, transparent toll calculations, and fair labour rates for door-to-door relocation.
            </p>
        </div>

        <div class="dum2jam-table-wrap">
            <table class="dum2jam-table">
                <thead>
                    <tr>
                        <th>Consignment Volume / Flat Size</th>
                        <th>Packaging Quality Tier</th>
                        <th>Vehicle Assigned</th>
                        <th>Estimated Price Range</th>
                        <th>Doorstep Transit Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 RK / Studio / Single Room Move</strong></td>
                        <td>Standard 3-Layer Corrugated</td>
                        <td>Tata Ace / Mahindra Pickup</td>
                        <td>₹3,500 - ₹6,500</td>
                        <td>Same Day (1.5 - 2 Hours)</td>
                    </tr>
                    <tr>
                        <td><strong>1 BHK Apartment Complete Move</strong></td>
                        <td>Premium 4-Layer Foam + Bubble</td>
                        <td>14-ft Closed Container</td>
                        <td>₹6,000 - ₹10,500</td>
                        <td>Same Day (1.5 - 2.5 Hours)</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Family Home Relocation</strong></td>
                        <td>Executive 5-Layer Heavy Duty</td>
                        <td>17-ft / 19-ft Sealed Container</td>
                        <td>₹9,500 - ₹15,000</td>
                        <td>Same Day (2 - 2.5 Hours)</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK / Independent House Move</strong></td>
                        <td>Ultra-Secure Multi-Layer & Wooden Crates</td>
                        <td>20-ft / 24-ft Container Truck</td>
                        <td>₹14,000 - ₹21,000</td>
                        <td>Same Day (2 - 3 Hours)</td>
                    </tr>
                    <tr>
                        <td><strong>Motorcycle / Scooter Parcel</strong></td>
                        <td>Dual-Layer Bubble + Corrugated Wrap</td>
                        <td>Dedicated Covered Carrier</td>
                        <td>₹1,500 - ₹2,600</td>
                        <td>Same Day / 24 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>Hatchback / Sedan Car Transport</strong></td>
                        <td>Hydraulic Enclosed Hauler</td>
                        <td>Specialized Car Carrier Truck</td>
                        <td>₹5,000 - ₹8,000</td>
                        <td>24 Hours</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="text-align: center; color: #64748b; font-size: 0.9rem; margin-top: 15px;">
            <em>Note: The rates displayed above are indicative and vary based on exact consignment volume, packing material requirements, elevator availability, and chosen insurance value. Call 8409531615 for an instant customized estimate.</em>
        </p>

        <div class="dum2jam-highlight-box">
            <h4><i class="fa fa-info-circle"></i> Why Dedicated Sealed Containers Matter for Neighboring Moves</h4>
            <p>
                Even for short 65 km inter-district relocations, utilizing dedicated closed containers prevents dust exposure, unexpected rain damage, and cargo movement. Your household effects are loaded, secured, and driven directly to Jamtara without intermediate unloading or cargo swapping.
            </p>
        </div>
    </div>
</section>

<!-- Visual Gallery & Packaging Methodology -->
<section class="dum2jam-section">
    <div class="container">
        <div class="dum2jam-heading-wrap">
            <span class="dum2jam-pill">Packaging Standards</span>
            <h2>Our High-Grade Packaging & Handling Standards</h2>
            <p>
                From delicate chinaware to heavy teakwood beds, see how our trained packaging specialists safeguard your valuable possessions during transit.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="dum2jam-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="High grade multi layer household goods packing by Shree Ashirwad crew" loading="lazy">
                    <div class="dum2jam-img-caption">
                        <strong>5-Layer Cushioning:</strong> Bubble wraps and high-density foam blankets protect wooden finishes and glass panels.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dum2jam-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car loading onto closed hydraulic transport carrier" loading="lazy">
                    <div class="dum2jam-img-caption">
                        <strong>Secured Vehicle Carriers:</strong> Hydraulic ramps and tire lashings ensure scratch-free automobile transport.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dum2jam-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Professional unpacking and room setup service in Jamtara" loading="lazy">
                    <div class="dum2jam-img-caption">
                        <strong>Room-Wise Unpacking:</strong> Reassembly of beds, furniture placement, and debris clean-up at your Jamtara residence.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5-Step Process Timeline -->
<section class="dum2jam-section-alt">
    <div class="container">
        <div class="dum2jam-heading-wrap">
            <span class="dum2jam-pill">Execution Plan</span>
            <h2>Our 5-Step Seamless Relocation Process</h2>
            <p>
                We have perfected an organized, transparent, and stress-free moving pipeline refined through hundreds of successful relocations.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="dum2jam-step-timeline">
                    <div class="dum2jam-step-card">
                        <div class="dum2jam-step-num">1</div>
                        <div class="dum2jam-step-body">
                            <h4>Pre-Move Survey & Free Quotation</h4>
                            <p>We review your shifting requirements either via in-home survey in Dumka or through video inventory assessment. We provide a clear, all-inclusive written estimate detailing transport, packing, labor, and GST.</p>
                        </div>
                    </div>
                    <div class="dum2jam-step-card">
                        <div class="dum2jam-step-num">2</div>
                        <div class="dum2jam-step-body">
                            <h4>Standardized Multi-Layer Packing</h4>
                            <p>Our experienced packaging crew arrives on moving day with specialized materials. Every piece of furniture, electronic gadget, and fragile kitchenware is labeled and wrapped following strict safety guidelines.</p>
                        </div>
                    </div>
                    <div class="dum2jam-step-card">
                        <div class="dum2jam-step-num">3</div>
                        <div class="dum2jam-step-body">
                            <h4>Systematic Loading & Container Sealing</h4>
                            <p>Heavier goods are loaded at base level with shock-absorbing foam pads, followed by lighter carton boxes and mattress bags. Once loaded, the container is locked and sealed in front of you.</p>
                        </div>
                    </div>
                    <div class="dum2jam-step-card">
                        <div class="dum2jam-step-num">4</div>
                        <div class="dum2jam-step-body">
                            <h4>Smooth 2-Hour Highway Transit</h4>
                            <p>Our professional highway drivers navigate the 65 km route along SH-17, maintaining steady speeds and avoiding bumpy bypass roads to eliminate shifting stress.</p>
                        </div>
                    </div>
                    <div class="dum2jam-step-card">
                        <div class="dum2jam-step-num">5</div>
                        <div class="dum2jam-step-body">
                            <h4>Unloading, Furniture Setup & Debris Removal</h4>
                            <p>Upon arrival in Jamtara or Mihijam, our team carries cartons into designated rooms, reassembles beds and dining tables, assists in unpacking, and disposes of discarded packing sheets cleanly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Customer Reviews Section -->
<section class="dum2jam-section">
    <div class="container">
        <div class="dum2jam-heading-wrap">
            <span class="dum2jam-pill">Client Testimonials</span>
            <h2>What Our Customers Say About Dumka to Jamtara Moving</h2>
            <p>
                Read verified reviews from clients who recently moved from Dumka to Jamtara with Shree Ashirwad.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="dum2jam-review-card">
                    <div class="dum2jam-review-stars">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p>
                        "I was transferred from SKMU Dumka to Jamtara college. Shree Ashirwad Packers took charge of everything. They packed my 2BHK flat in Rasikpur and delivered it safely to Jamtara by 2 PM. Very polite team!"
                    </p>
                    <div class="dum2jam-review-meta">
                        <span class="dum2jam-review-author">Prof. Alok Sen</span>
                        <span class="dum2jam-review-loc">Shifted to Jamtara College Road</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dum2jam-review-card">
                    <div class="dum2jam-review-stars">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p>
                        "Shifted our complete household goods from Dudhani to Mihijam. The team handled all our glass showcase items, double-door fridge, and TV with extra bubble padding. Everything arrived without a scratch."
                    </p>
                    <div class="dum2jam-review-meta">
                        <span class="dum2jam-review-author">Pooja Marandi</span>
                        <span class="dum2jam-review-loc">Shifted to Mihijam, Jamtara</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dum2jam-review-card">
                    <div class="dum2jam-review-stars">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p>
                        "Relocated my Hero Splendor and household goods from Tinbazar to Karmatar. Shifting was completed on the same day and the pricing was very reasonable. Highly recommend Shree Ashirwad Packers!"
                    </p>
                    <div class="dum2jam-review-meta">
                        <span class="dum2jam-review-author">Subrata Chatterjee</span>
                        <span class="dum2jam-review-loc">Shifted to Karmatar, Jamtara</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions Section -->
<section class="dum2jam-section-alt">
    <div class="container">
        <div class="dum2jam-heading-wrap">
            <span class="dum2jam-pill">Have Questions?</span>
            <h2>Frequently Asked Questions About Dumka to Jamtara Shifting</h2>
            <p>
                Find answers to common questions about moving schedules, packing methods, insurance documentation, and delivery commitments.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <details class="dum2jam-faq-item" open>
                    <summary>What is the driving duration between Dumka and Jamtara?</summary>
                    <div class="dum2jam-faq-answer">
                        The highway distance between Dumka and Jamtara is approximately 65 km. Our dedicated container fleet completes the drive within 1.5 to 2.5 hours via SH-17, enabling swift same-day packing, transit, and room setup.
                    </div>
                </details>

                <details class="dum2jam-faq-item">
                    <summary>How much does household shifting cost from Dumka to Jamtara?</summary>
                    <div class="dum2jam-faq-answer">
                        Moving costs from Dumka to Jamtara average ₹3,500 to ₹6,500 for single room / 1 RK moves, ₹6,000 to ₹10,500 for a 1 BHK home, ₹9,500 to ₹15,000 for a 2 BHK apartment, and ₹14,000 to ₹21,000 for a 3 BHK family house.
                    </div>
                </details>

                <details class="dum2jam-faq-item">
                    <summary>Do you furnish valid transfer claim bills for SKMU and Commissionerate staff?</summary>
                    <div class="dum2jam-faq-answer">
                        Yes, we specialize in government transfer billing. We provide valid GST invoices, IBA-standard consignment notes (LR/bilty), detailed packing manifests, and stamped money receipts needed for administrative, judicial, police, and bank transfer reimbursements.
                    </div>
                </details>

                <details class="dum2jam-faq-item">
                    <summary>Can you shift household goods directly to Mihijam or Karmatar?</summary>
                    <div class="dum2jam-faq-answer">
                        Yes, our delivery coverage spans the entire Jamtara district including Jamtara town, Mihijam, Karmatar (Vidyasagar), Nala, Kundahit, and all rural administrative blocks without any third-party transshipment.
                    </div>
                </details>

                <details class="dum2jam-faq-item">
                    <summary>How are fragile kitchen items and glass furniture protected?</summary>
                    <div class="dum2jam-faq-answer">
                        We wrap glassware and crockery individually in air-bubble cushioning before packing into heavy corrugated cartons. Glass tabletops and mirrors are secured with thermocol corner pads and reinforced wooden framing.
                    </div>
                </details>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section style="background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%); color: #ffffff; padding: 70px 0; text-align: center;">
    <div class="container">
        <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(2rem, 3.5vw, 2.8rem); font-weight: 800; margin-bottom: 20px;">
            Planning Your Move from Dumka to Jamtara?
        </h2>
        <p style="color: #cbd5e1; font-size: 1.15rem; max-width: 680px; margin: 0 auto 35px; line-height: 1.7;">
            Contact us today for a free, transparent shifting estimate. Let Jharkhand's premier moving team deliver your household treasures with unmatched care and reliability.
        </p>
        <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
            <a href="tel:08409531615" class="dum2jam-btn-primary" style="font-size: 1.1rem; padding: 16px 36px;">
                <i class="fa fa-phone"></i> Call 08409531615
            </a>
            <a href="https://wa.me/918409531615?text=Hi%20Shree%20Ashirwad,%20I%20want%20to%20book%20Dumka%20to%20Jamtara%20shifting" class="dum2jam-btn-secondary" style="font-size: 1.1rem; padding: 16px 36px;" target="_blank" rel="noopener">
                <i class="fa fa-whatsapp"></i> Chat on WhatsApp
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>
