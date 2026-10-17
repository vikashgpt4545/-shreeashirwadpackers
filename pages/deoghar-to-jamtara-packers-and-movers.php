<?php
/**
 * Page Name: Deoghar to Jamtara Packers and Movers
 * Route Slug: deoghar-to-jamtara-packers-and-movers
 * Description: Dedicated inter-district relocation route from holy cultural capital Deoghar to Jamtara, Mihijam, and Karmatar.
 * Focus Keywords: deoghar to jamtara packers and movers, packers and movers deoghar to jamtara, house shifting deoghar to jamtara, deoghar to jamtara luggage transport, deoghar to jamtara car carrier, deoghar to jamtara bike parcel
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Deoghar to Jamtara Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Fast Deoghar to Jamtara packers and movers. 60 km quick 2 hr transit via Sarath-Palojori, government & railway transfer bills, 5-layer packing, car transport. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/deoghar-to-jamtara-packers-and-movers";
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
    <meta name="geo.placename" content="Deoghar">

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

    <!-- Scoped CSS for Route 8 (Deoghar to Jamtara) -->
    <style>
        :root {
            --deo2jam-primary: #155e75;
            --deo2jam-secondary: #0891b2;
            --deo2jam-accent: #c2410c;
            --deo2jam-accent-light: #ffedd5;
            --deo2jam-dark: #0f172a;
            --deo2jam-gray-bg: #f8fafc;
            --deo2jam-border: #e2e8f0;
            --deo2jam-card-shadow: 0 10px 25px -5px rgba(21, 94, 117, 0.08), 0 8px 10px -6px rgba(21, 94, 117, 0.04);
        }

        .deo2jam-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(21, 94, 117, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .deo2jam-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(194, 65, 12, 0.2);
            border: 1px solid rgba(194, 65, 12, 0.5);
            padding: 7px 18px;
            border-radius: 9999px;
            font-size: 0.88rem;
            font-weight: 700;
            color: #fed7aa;
            margin-bottom: 22px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .deo2jam-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2.1rem, 4.2vw, 3.2rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
            color: #ffffff;
        }

        .deo2jam-hero p {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #cbd5e1;
            max-width: 780px;
            margin-bottom: 30px;
        }

        .deo2jam-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .deo2jam-btn-primary {
            background: linear-gradient(135deg, #c2410c 0%, #9a3412 100%);
            color: #ffffff;
            padding: 15px 32px;
            font-weight: 700;
            border-radius: 8px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 14px rgba(194, 65, 12, 0.4);
        }

        .deo2jam-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(194, 65, 12, 0.5);
            color: #ffffff;
        }

        .deo2jam-btn-secondary {
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

        .deo2jam-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.22);
            color: #ffffff;
        }

        .deo2jam-stat-ribbon {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: var(--deo2jam-card-shadow);
            margin-top: -35px;
            position: relative;
            z-index: 10;
            padding: 24px 30px;
            border: 1px solid var(--deo2jam-border);
        }

        .deo2jam-stat-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
            gap: 20px;
        }

        .deo2jam-stat-item {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .deo2jam-stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: var(--deo2jam-accent-light);
            color: var(--deo2jam-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            flex-shrink: 0;
        }

        .deo2jam-stat-label {
            font-size: 0.85rem;
            color: #64748b;
            text-transform: uppercase;
            font-weight: 600;
            margin-bottom: 3px;
        }

        .deo2jam-stat-val {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 800;
            color: var(--deo2jam-dark);
        }

        .deo2jam-section {
            padding: 70px 0;
        }

        .deo2jam-section-alt {
            background: var(--deo2jam-gray-bg);
            padding: 70px 0;
        }

        .deo2jam-heading-wrap {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }

        .deo2jam-pill {
            display: inline-block;
            background: #cffafe;
            color: #0891b2;
            font-weight: 700;
            font-size: 0.84rem;
            padding: 5px 16px;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 12px;
        }

        .deo2jam-heading-wrap h2 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(1.85rem, 3.2vw, 2.5rem);
            font-weight: 800;
            color: var(--deo2jam-dark);
            line-height: 1.25;
            margin-bottom: 15px;
        }

        .deo2jam-heading-wrap p {
            color: #475569;
            font-size: 1.05rem;
            line-height: 1.65;
        }

        .deo2jam-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 32px 28px;
            border: 1px solid var(--deo2jam-border);
            box-shadow: var(--deo2jam-card-shadow);
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .deo2jam-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 30px -8px rgba(21, 94, 117, 0.12);
        }

        .deo2jam-card-icon {
            width: 54px;
            height: 54px;
            background: #cffafe;
            color: var(--deo2jam-primary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .deo2jam-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--deo2jam-dark);
            margin-bottom: 12px;
        }

        .deo2jam-card p {
            color: #64748b;
            font-size: 0.98rem;
            line-height: 1.65;
        }

        .deo2jam-table-wrap {
            overflow-x: auto;
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--deo2jam-border);
            box-shadow: var(--deo2jam-card-shadow);
            margin: 35px 0 20px;
        }

        .deo2jam-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            min-width: 650px;
        }

        .deo2jam-table th {
            background: #155e75;
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 700;
            font-size: 0.96rem;
        }

        .deo2jam-table td {
            padding: 15px 20px;
            border-bottom: 1px solid var(--deo2jam-border);
            color: #334155;
            font-size: 0.94rem;
        }

        .deo2jam-table tr:hover td {
            background-color: #f8fafc;
        }

        .deo2jam-route-pill-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 35px;
        }

        .deo2jam-route-node {
            background: #ffffff;
            padding: 22px;
            border-radius: 10px;
            border-left: 4px solid var(--deo2jam-accent);
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            border-top: 1px solid var(--deo2jam-border);
            border-right: 1px solid var(--deo2jam-border);
            border-bottom: 1px solid var(--deo2jam-border);
        }

        .deo2jam-route-node h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            color: var(--deo2jam-dark);
            margin-bottom: 8px;
            font-weight: 700;
        }

        .deo2jam-route-node p {
            color: #64748b;
            font-size: 0.92rem;
            line-height: 1.55;
            margin: 0;
        }

        .deo2jam-img-showcase {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: var(--deo2jam-card-shadow);
            margin-bottom: 24px;
            border: 1px solid var(--deo2jam-border);
        }

        .deo2jam-img-showcase img {
            width: 100%;
            height: 270px;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .deo2jam-img-showcase:hover img {
            transform: scale(1.03);
        }

        .deo2jam-img-caption {
            padding: 15px 18px;
            background: #ffffff;
            font-size: 0.92rem;
            font-weight: 600;
            color: var(--deo2jam-dark);
            border-top: 1px solid var(--deo2jam-border);
        }

        .deo2jam-step-timeline {
            display: flex;
            flex-direction: column;
            gap: 24px;
            position: relative;
            margin-top: 40px;
        }

        .deo2jam-step-card {
            display: flex;
            gap: 20px;
            background: #ffffff;
            padding: 24px;
            border-radius: 12px;
            border: 1px solid var(--deo2jam-border);
            box-shadow: 0 4px 14px rgba(0,0,0,0.03);
        }

        .deo2jam-step-num {
            width: 44px;
            height: 44px;
            background: var(--deo2jam-primary);
            color: #ffffff;
            font-weight: 800;
            font-size: 1.25rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .deo2jam-step-body h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--deo2jam-dark);
            margin-bottom: 6px;
        }

        .deo2jam-step-body p {
            color: #64748b;
            font-size: 0.94rem;
            line-height: 1.6;
            margin: 0;
        }

        .deo2jam-faq-item {
            background: #ffffff;
            border: 1px solid var(--deo2jam-border);
            border-radius: 10px;
            margin-bottom: 16px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.02);
        }

        .deo2jam-faq-item summary {
            padding: 20px 24px;
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            font-size: 1.1rem;
            color: var(--deo2jam-dark);
            cursor: pointer;
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #ffffff;
        }

        .deo2jam-faq-item summary::-webkit-details-marker {
            display: none;
        }

        .deo2jam-faq-item summary::after {
            content: "+";
            font-size: 1.4rem;
            font-weight: 400;
            color: var(--deo2jam-accent);
        }

        .deo2jam-faq-item[open] summary::after {
            content: "−";
        }

        .deo2jam-faq-answer {
            padding: 0 24px 22px;
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
            border-top: 1px solid #f1f5f9;
            background: #fdfdfe;
        }

        .deo2jam-review-card {
            background: #ffffff;
            padding: 26px;
            border-radius: 12px;
            border: 1px solid var(--deo2jam-border);
            box-shadow: var(--deo2jam-card-shadow);
        }

        .deo2jam-review-stars {
            color: #f59e0b;
            font-size: 1.1rem;
            margin-bottom: 12px;
        }

        .deo2jam-review-card p {
            font-style: italic;
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.6;
            margin-bottom: 16px;
        }

        .deo2jam-review-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.88rem;
            border-top: 1px solid #f1f5f9;
            padding-top: 12px;
        }

        .deo2jam-review-author {
            font-weight: 700;
            color: var(--deo2jam-dark);
        }

        .deo2jam-review-loc {
            color: #94a3b8;
        }

        .deo2jam-highlight-box {
            background: linear-gradient(135deg, #ecfeff 0%, #fff7ed 100%);
            border: 1px solid #a5f3fc;
            border-radius: 12px;
            padding: 28px;
            margin: 30px 0;
        }

        .deo2jam-highlight-box h4 {
            font-family: 'Outfit', sans-serif;
            color: #155e75;
            font-size: 1.25rem;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .deo2jam-highlight-box p {
            color: #334155;
            font-size: 0.96rem;
            line-height: 1.65;
            margin: 0;
        }

        @media (max-width: 768px) {
            .deo2jam-hero {
                padding: 60px 0 45px;
            }
            .deo2jam-stat-ribbon {
                margin-top: 15px;
                padding: 20px;
            }
            .deo2jam-cta-group {
                flex-direction: column;
                align-items: stretch;
            }
            .deo2jam-btn-primary, .deo2jam-btn-secondary {
                justify-content: center;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Deoghar to Jamtara",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "https://www.shreeashirwadpackers.com/#movingcompany",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91-8409531615",
        "priceRange": "₹3,500 - ₹26,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Castairs Town, Near Tower Chowk",
            "addressLocality": "Deoghar",
            "addressRegion": "Jharkhand",
            "postalCode": "814112",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 24.4826,
            "longitude": 86.7001
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
                "name": "Deoghar"
            },
            {
                "@type": "City",
                "name": "Jamtara"
            }
        ],
        "description": "Swift inter-district relocation from Deoghar to Jamtara covering household shifting, government official transfers, railway employee moves, car transport, and bike parcel services.",
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
                "name": "Deoghar Packers and Movers",
                "item": "https://www.shreeashirwadpackers.com/packers-and-movers-in-deoghar"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Deoghar to Jamtara Route",
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
                "name": "How much time is required for shifting from Deoghar to Jamtara?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Deoghar and Jamtara is only about 60 km. Our dedicated container vehicles complete the transit in approximately 1.5 to 2.5 hours via Sarath and Palojori, allowing for effortless same-day loading, delivery, and room setup."
                }
            },
            {
                "@type": "Question",
                "name": "What are the shifting charges between Deoghar and Jamtara?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Typical shifting rates from Deoghar to Jamtara range from ₹3,500 to ₹6,500 for single room / 1 RK setups, ₹6,000 to ₹10,500 for a 1 BHK flat, ₹9,500 to ₹15,000 for a 2 BHK home, and ₹14,000 to ₹21,000 for a spacious 3 BHK residence. All estimates are 100% transparent."
                }
            },
            {
                "@type": "Question",
                "name": "Do you offer GST billing for government, court, and railway employee transfers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We issue standardized GST-registered invoices, IBA-compliant bilty consignment notes, packing slips, and payment receipts accepted by Jharkhand state government departments, civil courts, and Eastern Railway divisions."
                }
            },
            {
                "@type": "Question",
                "name": "Can you shift household goods from Jasidih or Castairs Town to Mihijam directly?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we handle pickups across all Deoghar areas including Castairs Town, Bilasi Town, Jasidih, Satsang Nagar, and VIP Chowk, delivering straight to Mihijam, Karmatar, or Jamtara town without third-party transshipment."
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
            <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-deoghar" style="color: #0891b2; text-decoration: none;">Deoghar</a> <span style="color: #94a3b8;">/</span></li>
            <li style="color: #64748b;" aria-current="page">Deoghar to Jamtara</li>
        </ol>
    </div>
</nav>

<!-- Hero Section -->
<section class="deo2jam-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="deo2jam-hero-badge">Santhal Pargana Regional Corridor &bull; 60 KM Fast Transit</span>
                <h1>Reliable Deoghar to Jamtara Packers and Movers</h1>
                <p>
                    Relocating from Deoghar to Jamtara, Mihijam, or Karmatar? Shree Ashirwad Packers and Movers provides fast, zero-damage household shifting, government employee relocations, and secure vehicle transportation. Serving Castairs Town, Bilasi Town, Williams Town, Jasidih, and Satsang Nagar to every corner of Jamtara district.
                </p>
                <div class="deo2jam-cta-group">
                    <a href="tel:08409531615" class="deo2jam-btn-primary">
                        <i class="fa fa-phone"></i> Call 8409531615 for Free Quote
                    </a>
                    <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Deoghar%20to%20Jamtara%20relocation" class="deo2jam-btn-secondary" target="_blank" rel="noopener">
                        <i class="fa fa-whatsapp"></i> WhatsApp Instant Estimate
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Ribbon -->
<div class="container">
    <div class="deo2jam-stat-ribbon">
        <div class="deo2jam-stat-grid">
            <div class="deo2jam-stat-item">
                <div class="deo2jam-stat-icon"><i class="fa fa-road"></i></div>
                <div>
                    <div class="deo2jam-stat-label">Highway Distance</div>
                    <div class="deo2jam-stat-val">~60 Kilometers</div>
                </div>
            </div>
            <div class="deo2jam-stat-item">
                <div class="deo2jam-stat-icon"><i class="fa fa-clock-o"></i></div>
                <div>
                    <div class="deo2jam-stat-label">Door Transit Duration</div>
                    <div class="deo2jam-stat-val">1.5 - 2.5 Hours</div>
                </div>
            </div>
            <div class="deo2jam-stat-item">
                <div class="deo2jam-stat-icon"><i class="fa fa-shield"></i></div>
                <div>
                    <div class="deo2jam-stat-label">Cargo Safety</div>
                    <div class="deo2jam-stat-val">100% Zero-Damage</div>
                </div>
            </div>
            <div class="deo2jam-stat-item">
                <div class="deo2jam-stat-icon"><i class="fa fa-file-text-o"></i></div>
                <div>
                    <div class="deo2jam-stat-label">Govt & Railway Claims</div>
                    <div class="deo2jam-stat-val">100% Approved Bills</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Strategic Content Section -->
<section class="deo2jam-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="deo2jam-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Sealed waterproof moving container truck for Deoghar to Jamtara transit" loading="lazy">
                    <div class="deo2jam-img-caption">
                        <i class="fa fa-truck" style="color: var(--deo2jam-accent); margin-right: 8px;"></i>
                        Waterproof container trucks operating daily along the Deoghar &rarr; Sarath &rarr; Jamtara corridor.
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="deo2jam-pill">Neighboring District Express</div>
                <h2 style="font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--deo2jam-dark); font-size: 2.1rem; margin-bottom: 18px;">
                    Fast, Safe & Organized Moving Between Deoghar and Jamtara
                </h2>
                <p style="color: #475569; font-size: 1.02rem; line-height: 1.7; margin-bottom: 16px;">
                    Sharing contiguous borders in the Santhal Pargana division, Deoghar and Jamtara are deeply connected through administrative postings, judicial assignments, educational centers, and family ties. When teachers, bank managers, railway staff from Jasidih, or healthcare professionals transfer between these two neighboring districts, Shree Ashirwad Packers and Movers delivers a swift, zero-stress moving experience.
                </p>
                <p style="color: #475569; font-size: 1.02rem; line-height: 1.7; margin-bottom: 20px;">
                    Because the journey spans only 60 kilometers through Sarath and Palojori, our shifting operation is completed effortlessly in a single day. Our professional crew wraps each furniture piece, electronic gadget, and fragile kitchen item with multi-layer bubble cushioning and heavy corrugated sheets, loads them into dedicated closed container trucks, and completes doorstep delivery and room placement in Jamtara within a few hours.
                </p>
                <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                    <div style="flex: 1 1 200px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px 18px;">
                        <strong style="color: #155e75; display: block; margin-bottom: 4px;"><i class="fa fa-check-circle text-success"></i> Same-Day Shifting</strong>
                        <span style="color: #64748b; font-size: 0.9rem;">Packed, moved & settled in 4-6 hours.</span>
                    </div>
                    <div style="flex: 1 1 200px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px 18px;">
                        <strong style="color: #155e75; display: block; margin-bottom: 4px;"><i class="fa fa-check-circle text-success"></i> Transfer Allowance Bills</strong>
                        <span style="color: #64748b; font-size: 0.9rem;">Valid GST bills for government & bank claims.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Route Geography & Highway Overview -->
<section class="deo2jam-section-alt">
    <div class="container">
        <div class="deo2jam-heading-wrap">
            <span class="deo2jam-pill">Navigation Blueprint</span>
            <h2>Route Geography & Highway Transit Analysis</h2>
            <p>
                A smooth 60 km state highway corridor connects Deoghar to Jamtara via Sarath and Palojori, offering reliable road conditions and minimal traffic bottlenecks.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="deo2jam-card">
                    <div class="deo2jam-card-icon"><i class="fa fa-map-signs"></i></div>
                    <h3>Primary Transit Corridor</h3>
                    <p>
                        The preferred route exits Deoghar via Castairs Town or Kunda, proceeding south along the well-paved state highway via Sarath and Palojori directly into Jamtara town. This two-lane paved route provides smooth road surfaces with minimal transit jolts.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="deo2jam-card">
                    <div class="deo2jam-card-icon"><i class="fa fa-clock-o"></i></div>
                    <h3>Fast Same-Day Transit</h3>
                    <p>
                        With a driving duration of only 1.5 to 2.5 hours, our clients experience unmatched moving ease. Loading is finished by morning, the container truck arrives before lunch, and our team reassembles beds and heavy appliances before sunset.
                    </p>
                </div>
            </div>
            <div class="deo2jam-card">
                <div class="deo2jam-card-icon"><i class="fa fa-shield"></i></div>
                <h3>Dedicated Container Security</h3>
                <p>
                    We never mix consignments from different customers. Your household effects travel inside an exclusive closed steel container truck, padlocked in your presence at Deoghar and unsealed only when parked outside your new Jamtara home.
                </p>
            </div>
        </div>

        <!-- Major Node Points -->
        <div class="deo2jam-route-pill-grid">
            <div class="deo2jam-route-node">
                <h4>1. Origin Pickups: Deoghar City</h4>
                <p>Comprehensive pickup across Castairs Town, Bilasi Town, Williams Town, Jasidih, Satsang Nagar, Kunda, Rohini, and VIP Chowk.</p>
            </div>
            <div class="deo2jam-route-node">
                <h4>2. Mid-Highway Arterials</h4>
                <p>Direct navigation along the Sarath and Palojori state highway corridor, avoiding bumpy village tracks and busy level crossings.</p>
            </div>
            <div class="deo2jam-route-node">
                <h4>3. Destination Delivery: Jamtara District</h4>
                <p>Prompt delivery, room-by-room unloading, and furniture assembly across Jamtara Town, Mihijam, Karmatar, Court Road, and Nala.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Portfolio Grid -->
<section class="deo2jam-section">
    <div class="container">
        <div class="deo2jam-heading-wrap">
            <span class="deo2jam-pill">Comprehensive Relocation Services</span>
            <h2>Tailored Shifting Solutions from Deoghar to Jamtara</h2>
            <p>
                Whether you need complete 3BHK household shifting, a single two-wheeler parcel, or corporate office relocation, Shree Ashirwad provides dedicated specialized solutions.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="deo2jam-card">
                    <div class="deo2jam-card-icon"><i class="fa fa-home"></i></div>
                    <h3>Household Furniture Shifting</h3>
                    <p>
                        Comprehensive packing for wardrobes, modular beds, dining tables, sofa sets, kitchen glassware, and delicate home electronics using multi-layer protective packaging.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="deo2jam-card">
                    <div class="deo2jam-card-icon"><i class="fa fa-briefcase"></i></div>
                    <h3>Government & Judicial Transfers</h3>
                    <p>
                        Turnkey relocation solutions compliant with government transfer guidelines. Includes customized packing schedules, priority unpacking, and GST-ready invoices.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="deo2jam-card">
                    <div class="deo2jam-card-icon"><i class="fa fa-car"></i></div>
                    <h3>Dedicated Car Carrier Service</h3>
                    <p>
                        Safe, damage-free motor car transportation utilizing enclosed hydraulic car haulers. Equipped with tire locks, safety harnesses, and transit insurance coverage.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="deo2jam-card">
                    <div class="deo2jam-card-icon"><i class="fa fa-motorcycle"></i></div>
                    <h3>Two-Wheeler Parcel Service</h3>
                    <p>
                        High-security bike parcel handling. Motorcycles and scooters are wrapped in corrugated wrap, bubble sheets, and wooden pallets to prevent highway scratches.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="deo2jam-card">
                    <div class="deo2jam-card-icon"><i class="fa fa-building"></i></div>
                    <h3>Industrial & Office Relocation</h3>
                    <p>
                        Disassembly, packing, and reinstallation of office workstations, server racks, desktop computer terminals, and sensitive commercial documents with minimal business downtime.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="deo2jam-card">
                    <div class="deo2jam-card-icon"><i class="fa fa-shield"></i></div>
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
<section class="deo2jam-section-alt">
    <div class="container">
        <div class="deo2jam-heading-wrap">
            <span class="deo2jam-pill">Transparent Quotations</span>
            <h2>Deoghar to Jamtara Shifting Cost Estimate</h2>
            <p>
                We believe in 100% upfront pricing with zero hidden charges, transparent toll calculations, and fair labour rates for door-to-door relocation.
            </p>
        </div>

        <div class="deo2jam-table-wrap">
            <table class="deo2jam-table">
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

        <div class="deo2jam-highlight-box">
            <h4><i class="fa fa-info-circle"></i> Why Dedicated Sealed Containers Matter for Neighboring Moves</h4>
            <p>
                Even for short 60 km inter-district relocations, utilizing dedicated closed containers prevents dust exposure, unexpected rain damage, and cargo movement. Your household effects are loaded, secured, and driven directly to Jamtara without intermediate unloading or cargo swapping.
            </p>
        </div>
    </div>
</section>

<!-- Visual Gallery & Packaging Methodology -->
<section class="deo2jam-section">
    <div class="container">
        <div class="deo2jam-heading-wrap">
            <span class="deo2jam-pill">Packaging Standards</span>
            <h2>Our High-Grade Packaging & Handling Standards</h2>
            <p>
                From delicate chinaware to heavy teakwood beds, see how our trained packaging specialists safeguard your valuable possessions during transit.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="deo2jam-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="High grade multi layer household goods packing by Shree Ashirwad crew" loading="lazy">
                    <div class="deo2jam-img-caption">
                        <strong>5-Layer Cushioning:</strong> Bubble wraps and high-density foam blankets protect wooden finishes and glass panels.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="deo2jam-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car loading onto closed hydraulic transport carrier" loading="lazy">
                    <div class="deo2jam-img-caption">
                        <strong>Secured Vehicle Carriers:</strong> Hydraulic ramps and tire lashings ensure scratch-free automobile transport.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="deo2jam-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Professional unpacking and room setup service in Jamtara" loading="lazy">
                    <div class="deo2jam-img-caption">
                        <strong>Room-Wise Unpacking:</strong> Reassembly of beds, furniture placement, and debris clean-up at your Jamtara residence.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5-Step Process Timeline -->
<section class="deo2jam-section-alt">
    <div class="container">
        <div class="deo2jam-heading-wrap">
            <span class="deo2jam-pill">Execution Plan</span>
            <h2>Our 5-Step Seamless Relocation Process</h2>
            <p>
                We have perfected an organized, transparent, and stress-free moving pipeline refined through hundreds of successful relocations.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="deo2jam-step-timeline">
                    <div class="deo2jam-step-card">
                        <div class="deo2jam-step-num">1</div>
                        <div class="deo2jam-step-body">
                            <h4>Pre-Move Survey & Free Quotation</h4>
                            <p>We review your shifting requirements either via in-home survey in Deoghar or through video inventory assessment. We provide a clear, all-inclusive written estimate detailing transport, packing, labor, and GST.</p>
                        </div>
                    </div>
                    <div class="deo2jam-step-card">
                        <div class="deo2jam-step-num">2</div>
                        <div class="deo2jam-step-body">
                            <h4>Standardized Multi-Layer Packing</h4>
                            <p>Our experienced packaging crew arrives on moving day with specialized materials. Every piece of furniture, electronic gadget, and fragile kitchenware is labeled and wrapped following strict safety guidelines.</p>
                        </div>
                    </div>
                    <div class="deo2jam-step-card">
                        <div class="deo2jam-step-num">3</div>
                        <div class="deo2jam-step-body">
                            <h4>Systematic Loading & Container Sealing</h4>
                            <p>Heavier goods are loaded at base level with shock-absorbing foam pads, followed by lighter carton boxes and mattress bags. Once loaded, the container is locked and sealed in front of you.</p>
                        </div>
                    </div>
                    <div class="deo2jam-step-card">
                        <div class="deo2jam-step-num">4</div>
                        <div class="deo2jam-step-body">
                            <h4>Smooth 2-Hour Highway Transit</h4>
                            <p>Our professional highway drivers navigate the 60 km route through Sarath and Palojori, maintaining steady speeds and avoiding bumpy bypass roads to eliminate shifting stress.</p>
                        </div>
                    </div>
                    <div class="deo2jam-step-card">
                        <div class="deo2jam-step-num">5</div>
                        <div class="deo2jam-step-body">
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
<section class="deo2jam-section">
    <div class="container">
        <div class="deo2jam-heading-wrap">
            <span class="deo2jam-pill">Client Testimonials</span>
            <h2>What Our Customers Say About Deoghar to Jamtara Moving</h2>
            <p>
                Read verified reviews from clients who recently moved from Deoghar to Jamtara with Shree Ashirwad.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="deo2jam-review-card">
                    <div class="deo2jam-review-stars">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p>
                        "I was transferred from Deoghar civil court to Jamtara court. Shree Ashirwad Packers took charge of everything. They packed my 2BHK flat in Castairs Town and delivered it safely to Court Road in Jamtara by 2 PM. Very polite team!"
                    </p>
                    <div class="deo2jam-review-meta">
                        <span class="deo2jam-review-author">Madan Mohan Jha</span>
                        <span class="deo2jam-review-loc">Shifted to Court Road, Jamtara</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="deo2jam-review-card">
                    <div class="deo2jam-review-stars">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p>
                        "Shifted our complete household goods from Jasidih to Mihijam. The team handled all our glass showcase items, double-door fridge, and TV with extra bubble padding. Everything arrived without a scratch."
                    </p>
                    <div class="deo2jam-review-meta">
                        <span class="deo2jam-review-author">Sunita Sengupta</span>
                        <span class="deo2jam-review-loc">Shifted to Mihijam, Jamtara</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="deo2jam-review-card">
                    <div class="deo2jam-review-stars">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p>
                        "Relocated my Honda Activa and household goods from Bilasi Town to Karmatar. Shifting was completed on the same day and the pricing was very reasonable. Highly recommend Shree Ashirwad Packers!"
                    </p>
                    <div class="deo2jam-review-meta">
                        <span class="deo2jam-review-author">Rameshwar Murmu</span>
                        <span class="deo2jam-review-loc">Shifted to Karmatar, Jamtara</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions Section -->
<section class="deo2jam-section-alt">
    <div class="container">
        <div class="deo2jam-heading-wrap">
            <span class="deo2jam-pill">Have Questions?</span>
            <h2>Frequently Asked Questions About Deoghar to Jamtara Shifting</h2>
            <p>
                Find answers to common questions about moving schedules, packing methods, insurance documentation, and delivery commitments.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <details class="deo2jam-faq-item" open>
                    <summary>How much time is required for shifting from Deoghar to Jamtara?</summary>
                    <div class="deo2jam-faq-answer">
                        The highway distance between Deoghar and Jamtara is only about 60 km. Our dedicated container vehicles complete the transit in approximately 1.5 to 2.5 hours via Sarath and Palojori, allowing for effortless same-day loading, delivery, and room setup.
                    </div>
                </details>

                <details class="deo2jam-faq-item">
                    <summary>What are the shifting charges between Deoghar and Jamtara?</summary>
                    <div class="deo2jam-faq-answer">
                        Typical shifting rates from Deoghar to Jamtara range from ₹3,500 to ₹6,500 for single room / 1 RK setups, ₹6,000 to ₹10,500 for a 1 BHK flat, ₹9,500 to ₹15,000 for a 2 BHK home, and ₹14,000 to ₹21,000 for a spacious 3 BHK residence. All estimates are 100% transparent.
                    </div>
                </details>

                <details class="deo2jam-faq-item">
                    <summary>Do you offer GST billing for government, court, and railway employee transfers?</summary>
                    <div class="deo2jam-faq-answer">
                        Yes. We issue standardized GST-registered invoices, IBA-compliant bilty consignment notes, packing slips, and payment receipts accepted by Jharkhand state government departments, civil courts, and Eastern Railway divisions.
                    </div>
                </details>

                <details class="deo2jam-faq-item">
                    <summary>Can you shift household goods from Jasidih or Castairs Town to Mihijam directly?</summary>
                    <div class="deo2jam-faq-answer">
                        Yes, we handle pickups across all Deoghar areas including Castairs Town, Bilasi Town, Jasidih, Satsang Nagar, and VIP Chowk, delivering straight to Mihijam, Karmatar, or Jamtara town without third-party transshipment.
                    </div>
                </details>

                <details class="deo2jam-faq-item">
                    <summary>How are fragile kitchen items and glass furniture protected?</summary>
                    <div class="deo2jam-faq-answer">
                        We wrap glassware and crockery individually in air-bubble cushioning before packing into heavy corrugated cartons. Glass tabletops and mirrors are secured with thermocol corner pads and reinforced wooden framing.
                    </div>
                </details>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section style="background: linear-gradient(135deg, #155e75 0%, #0f172a 100%); color: #ffffff; padding: 70px 0; text-align: center;">
    <div class="container">
        <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(2rem, 3.5vw, 2.8rem); font-weight: 800; margin-bottom: 20px;">
            Planning Your Move from Deoghar to Jamtara?
        </h2>
        <p style="color: #cbd5e1; font-size: 1.15rem; max-width: 680px; margin: 0 auto 35px; line-height: 1.7;">
            Contact us today for a free, transparent shifting estimate. Let Jharkhand's premier moving team deliver your household treasures with unmatched care and reliability.
        </p>
        <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
            <a href="tel:08409531615" class="deo2jam-btn-primary" style="font-size: 1.1rem; padding: 16px 36px;">
                <i class="fa fa-phone"></i> Call 08409531615
            </a>
            <a href="https://wa.me/918409531615?text=Hi%20Shree%20Ashirwad,%20I%20want%20to%20book%20Deoghar%20to%20Jamtara%20shifting" class="deo2jam-btn-secondary" style="font-size: 1.1rem; padding: 16px 36px;" target="_blank" rel="noopener">
                <i class="fa fa-whatsapp"></i> Chat on WhatsApp
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>
