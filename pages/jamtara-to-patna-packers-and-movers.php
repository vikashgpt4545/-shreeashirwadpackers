<?php
/**
 * Page Name: Jamtara to Patna Packers and Movers
 * Route Slug: jamtara-to-patna-packers-and-movers
 * Description: Dedicated inter-state relocation route connecting Jamtara to Patna, Danapur, and the Bihar state capital region.
 * Focus Keywords: jamtara to patna packers and movers, packers and movers jamtara to patna, house shifting jamtara to patna, jamtara to patna luggage transport, jamtara to patna car carrier, jamtara to danapur packers and movers
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Jamtara to Patna Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Safe Jamtara to Patna packers and movers. 275 km direct transit via Deoghar-Jamui-Mokama-NH-31, government & corporate transfer bills, 5-layer packing, car transport. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/jamtara-to-patna-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="jamtara to patna packers and movers, packers and movers jamtara to patna, house shifting jamtara to patna, jamtara to patna luggage transport, jamtara to patna car carrier, jamtara to danapur packers and movers">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Jamtara">

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

    <!-- Scoped CSS for Route 13 (Jamtara to Patna) -->
    <style>
        :root {
            --j2pat-primary: #155e75;
            --j2pat-secondary: #0891b2;
            --j2pat-accent: #c2410c;
            --j2pat-accent-light: #ffedd5;
            --j2pat-dark: #0f172a;
            --j2pat-gray-bg: #f8fafc;
            --j2pat-border: #e2e8f0;
            --j2pat-card-shadow: 0 10px 25px -5px rgba(21, 94, 117, 0.08), 0 8px 10px -6px rgba(21, 94, 117, 0.04);
        }

        .j2pat-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(21, 94, 117, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .j2pat-hero-badge {
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

        .j2pat-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2.1rem, 4.2vw, 3.2rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
            color: #ffffff;
        }

        .j2pat-hero p {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #cbd5e1;
            max-width: 780px;
            margin-bottom: 30px;
        }

        .j2pat-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .j2pat-btn-primary {
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

        .j2pat-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(194, 65, 12, 0.5);
            color: #ffffff;
        }

        .j2pat-btn-secondary {
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

        .j2pat-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.22);
            color: #ffffff;
        }

        .j2pat-stat-ribbon {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: var(--j2pat-card-shadow);
            margin-top: -35px;
            position: relative;
            z-index: 10;
            padding: 24px 30px;
            border: 1px solid var(--j2pat-border);
        }

        .j2pat-stat-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
            gap: 20px;
        }

        .j2pat-stat-item {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .j2pat-stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: var(--j2pat-accent-light);
            color: var(--j2pat-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            flex-shrink: 0;
        }

        .j2pat-stat-label {
            font-size: 0.85rem;
            color: #64748b;
            text-transform: uppercase;
            font-weight: 600;
            margin-bottom: 3px;
        }

        .j2pat-stat-val {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 800;
            color: var(--j2pat-dark);
        }

        .j2pat-section {
            padding: 70px 0;
        }

        .j2pat-section-alt {
            background: var(--j2pat-gray-bg);
            padding: 70px 0;
        }

        .j2pat-heading-wrap {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }

        .j2pat-pill {
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

        .j2pat-heading-wrap h2 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(1.85rem, 3.2vw, 2.5rem);
            font-weight: 800;
            color: var(--j2pat-dark);
            line-height: 1.25;
            margin-bottom: 15px;
        }

        .j2pat-heading-wrap p {
            color: #475569;
            font-size: 1.05rem;
            line-height: 1.65;
        }

        .j2pat-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 32px 28px;
            border: 1px solid var(--j2pat-border);
            box-shadow: var(--j2pat-card-shadow);
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .j2pat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 30px -8px rgba(21, 94, 117, 0.12);
        }

        .j2pat-card-icon {
            width: 54px;
            height: 54px;
            background: #cffafe;
            color: var(--j2pat-primary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .j2pat-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--j2pat-dark);
            margin-bottom: 12px;
        }

        .j2pat-card p {
            color: #64748b;
            font-size: 0.98rem;
            line-height: 1.65;
        }

        .j2pat-table-wrap {
            overflow-x: auto;
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--j2pat-border);
            box-shadow: var(--j2pat-card-shadow);
            margin: 35px 0 20px;
        }

        .j2pat-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            min-width: 650px;
        }

        .j2pat-table th {
            background: #155e75;
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 700;
            font-size: 0.96rem;
        }

        .j2pat-table td {
            padding: 15px 20px;
            border-bottom: 1px solid var(--j2pat-border);
            color: #334155;
            font-size: 0.94rem;
        }

        .j2pat-table tr:hover td {
            background-color: #f8fafc;
        }

        .j2pat-route-pill-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 35px;
        }

        .j2pat-route-node {
            background: #ffffff;
            padding: 22px;
            border-radius: 10px;
            border-left: 4px solid var(--j2pat-accent);
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            border-top: 1px solid var(--j2pat-border);
            border-right: 1px solid var(--j2pat-border);
            border-bottom: 1px solid var(--j2pat-border);
        }

        .j2pat-route-node h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            color: var(--j2pat-dark);
            margin-bottom: 8px;
            font-weight: 700;
        }

        .j2pat-route-node p {
            color: #64748b;
            font-size: 0.92rem;
            line-height: 1.55;
            margin: 0;
        }

        .j2pat-img-showcase {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: var(--j2pat-card-shadow);
            margin-bottom: 24px;
            border: 1px solid var(--j2pat-border);
        }

        .j2pat-img-showcase img {
            width: 100%;
            height: 270px;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .j2pat-img-showcase:hover img {
            transform: scale(1.03);
        }

        .j2pat-img-caption {
            padding: 15px 18px;
            background: #ffffff;
            font-size: 0.92rem;
            font-weight: 600;
            color: var(--j2pat-dark);
            border-top: 1px solid var(--j2pat-border);
        }

        .j2pat-step-timeline {
            display: flex;
            flex-direction: column;
            gap: 24px;
            position: relative;
            margin-top: 40px;
        }

        .j2pat-step-card {
            display: flex;
            gap: 20px;
            background: #ffffff;
            padding: 24px;
            border-radius: 12px;
            border: 1px solid var(--j2pat-border);
            box-shadow: 0 4px 14px rgba(0,0,0,0.03);
        }

        .j2pat-step-num {
            width: 44px;
            height: 44px;
            background: var(--j2pat-primary);
            color: #ffffff;
            font-weight: 800;
            font-size: 1.25rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .j2pat-step-body h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--j2pat-dark);
            margin-bottom: 6px;
        }

        .j2pat-step-body p {
            color: #64748b;
            font-size: 0.94rem;
            line-height: 1.6;
            margin: 0;
        }

        .j2pat-faq-item {
            background: #ffffff;
            border: 1px solid var(--j2pat-border);
            border-radius: 10px;
            margin-bottom: 16px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.02);
        }

        .j2pat-faq-item summary {
            padding: 20px 24px;
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            font-size: 1.1rem;
            color: var(--j2pat-dark);
            cursor: pointer;
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #ffffff;
        }

        .j2pat-faq-item summary::-webkit-details-marker {
            display: none;
        }

        .j2pat-faq-item summary::after {
            content: "+";
            font-size: 1.4rem;
            font-weight: 400;
            color: var(--j2pat-accent);
        }

        .j2pat-faq-item[open] summary::after {
            content: "−";
        }

        .j2pat-faq-answer {
            padding: 0 24px 22px;
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
            border-top: 1px solid #f1f5f9;
            background: #fdfdfe;
        }

        .j2pat-review-card {
            background: #ffffff;
            padding: 26px;
            border-radius: 12px;
            border: 1px solid var(--j2pat-border);
            box-shadow: var(--j2pat-card-shadow);
        }

        .j2pat-review-stars {
            color: #f59e0b;
            font-size: 1.1rem;
            margin-bottom: 12px;
        }

        .j2pat-review-card p {
            font-style: italic;
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.6;
            margin-bottom: 16px;
        }

        .j2pat-review-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.88rem;
            border-top: 1px solid #f1f5f9;
            padding-top: 12px;
        }

        .j2pat-review-author {
            font-weight: 700;
            color: var(--j2pat-dark);
        }

        .j2pat-review-loc {
            color: #94a3b8;
        }

        .j2pat-highlight-box {
            background: linear-gradient(135deg, #ecfeff 0%, #fff7ed 100%);
            border: 1px solid #a5f3fc;
            border-radius: 12px;
            padding: 28px;
            margin: 30px 0;
        }

        .j2pat-highlight-box h4 {
            font-family: 'Outfit', sans-serif;
            color: #155e75;
            font-size: 1.25rem;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .j2pat-highlight-box p {
            color: #334155;
            font-size: 0.96rem;
            line-height: 1.65;
            margin: 0;
        }

        @media (max-width: 768px) {
            .j2pat-hero {
                padding: 60px 0 45px;
            }
            .j2pat-stat-ribbon {
                margin-top: 15px;
                padding: 20px;
            }
            .j2pat-cta-group {
                flex-direction: column;
                align-items: stretch;
            }
            .j2pat-btn-primary, .j2pat-btn-secondary {
                justify-content: center;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Jamtara to Patna",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "https://www.shreeashirwadpackers.com/#movingcompany",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91-8409531615",
        "priceRange": "₹6,500 - ₹45,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Station Road, Near Mihijam Check Post",
            "addressLocality": "Jamtara",
            "addressRegion": "Jharkhand",
            "postalCode": "815351",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 23.9614,
            "longitude": 86.8029
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
        "serviceType": "Inter-State Packers and Movers Service",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Jamtara"
            },
            {
                "@type": "City",
                "name": "Patna"
            }
        ],
        "description": "Safe inter-state relocation from Jamtara to Patna covering Bihar administrative transfers, bank personnel moves, residential furniture, car carriers, and bike transport.",
        "offers": {
            "@type": "Offer",
            "priceCurrency": "INR",
            "price": "6500",
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
                "name": "Jamtara Packers and Movers",
                "item": "https://www.shreeashirwadpackers.com/packers-and-movers-in-jamtara"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Jamtara to Patna Route",
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
                "name": "How long does shifting take between Jamtara and Patna?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Jamtara and Patna is approximately 275 kilometers via Deoghar, Jamui, Lakhisarai, and Mokama. Door-to-door transit takes 7.5 to 9.5 hours, allowing next-morning or same-day night delivery."
                }
            },
            {
                "@type": "Question",
                "name": "What are the shifting rates from Jamtara to Patna?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Standard shifting charges from Jamtara to Patna range from ₹6,500 to ₹11,000 for 1 RK / small flats, ₹11,500 to ₹18,000 for a standard 2 BHK home, and ₹19,000 to ₹33,000 for large 3 BHK family residences."
                }
            },
            {
                "@type": "Question",
                "name": "Do you offer GST billing for government, judicial, and railway employee transfers to Patna?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide 100% compliant GST invoices, IBA-approved consignment bilty notes, detailed itemized packing manifests, and money receipts accepted by Bihar government secretariats, high court departments, and railway offices."
                }
            },
            {
                "@type": "Question",
                "name": "Can you shift household goods into apartment societies in Bailey Road, Kankarbagh, or Danapur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our delivery crew manages multi-story tower moves across Bailey Road, Boring Road, Kankarbagh, Patliputra, Danapur, Saguna More, and Bihta with complete elevator unloading and room placement."
                }
            },
            {
                "@type": "Question",
                "name": "How do you transport motor cars or two-wheelers to Patna?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We operate enclosed hydraulic car carriers and secured closed-container bike parcel services with wheel chocks, scratch-resistant corrugated wrapping, and tie-down lashings from Jamtara and Mihijam straight to your Patna residence."
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
            <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-jamtara" style="color: #0891b2; text-decoration: none;">Jamtara</a> <span style="color: #94a3b8;">/</span></li>
            <li style="color: #64748b;" aria-current="page">Jamtara to Patna</li>
        </ol>
    </div>
</nav>

<!-- Hero Section -->
<section class="j2pat-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="j2pat-hero-badge">Inter-State Capital Corridor &bull; 275 KM Direct Express</span>
                <h1>Reliable Jamtara to Patna Packers and Movers</h1>
                <p>
                    Relocating from Jamtara or Mihijam to Patna, Danapur, or Bihar state capital region? Shree Ashirwad Packers and Movers delivers prompt, zero-damage domestic shifting, government and judicial employee transfers, and specialized vehicle transportation. Seamless doorstep service across Mihijam, Karmatar, and Jamtara to Bailey Road, Kankarbagh, Boring Road, Patliputra, and Danapur.
                </p>
                <div class="j2pat-cta-group">
                    <a href="tel:08409531615" class="j2pat-btn-primary">
                        <i class="fa fa-phone"></i> Call 8409531615 for Free Quote
                    </a>
                    <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Jamtara%20to%20Patna%20relocation" class="j2pat-btn-secondary" target="_blank" rel="noopener">
                        <i class="fa fa-whatsapp"></i> WhatsApp Instant Estimate
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Ribbon -->
<div class="container">
    <div class="j2pat-stat-ribbon">
        <div class="j2pat-stat-grid">
            <div class="j2pat-stat-item">
                <div class="j2pat-stat-icon"><i class="fa fa-road"></i></div>
                <div>
                    <div class="j2pat-stat-label">Highway Distance</div>
                    <div class="j2pat-stat-val">~275 Kilometers</div>
                </div>
            </div>
            <div class="j2pat-stat-item">
                <div class="j2pat-stat-icon"><i class="fa fa-clock-o"></i></div>
                <div>
                    <div class="j2pat-stat-label">Door Delivery Time</div>
                    <div class="j2pat-stat-val">7.5 - 9.5 Hours</div>
                </div>
            </div>
            <div class="j2pat-stat-item">
                <div class="j2pat-stat-icon"><i class="fa fa-shield"></i></div>
                <div>
                    <div class="j2pat-stat-label">Cargo Safety</div>
                    <div class="j2pat-stat-val">100% Zero-Damage</div>
                </div>
            </div>
            <div class="j2pat-stat-item">
                <div class="j2pat-stat-icon"><i class="fa fa-file-text-o"></i></div>
                <div>
                    <div class="j2pat-stat-label">Govt & PSU Claims</div>
                    <div class="j2pat-stat-val">100% Approved Bills</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Strategic Content Section -->
<section class="j2pat-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="j2pat-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Waterproof closed container truck for Jamtara to Patna transit" loading="lazy">
                    <div class="j2pat-img-caption">
                        <i class="fa fa-truck" style="color: var(--j2pat-accent); margin-right: 8px;"></i>
                        Waterproof container trucks operating daily along the Jamtara &rarr; Deoghar &rarr; Jamui &rarr; Patna corridor.
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="j2pat-pill">Jharkhand to Bihar Capital Link</div>
                <h2 style="font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--j2pat-dark); font-size: 2.1rem; margin-bottom: 18px;">
                    Fast, Safe & Organized Moving Between Jamtara and Patna
                </h2>
                <p style="color: #475569; font-size: 1.02rem; line-height: 1.7; margin-bottom: 16px;">
                    Connecting Jamtara district with Bihar's capital city, Patna represents one of the major inter-state administrative and residential moving corridors in eastern India. Whether you are a government official transferred to the Bihar Secretariat, a banking executive taking up a senior role in Patna, or a family relocating from Mihijam or Karmatar to Danapur or Kankarbagh, professional logistics ensures complete peace of mind.
                </p>
                <p style="color: #475569; font-size: 1.02rem; line-height: 1.7; margin-bottom: 20px;">
                    Shree Ashirwad Packers and Movers eliminates all shifting friction. Our experienced moving crew handles full packaging at your Jamtara residence using heavy-duty 5-layer corrugated sheets, air-bubble cushioning, foam edge protectors, and tamper-resistant shrink films. We secure your inventory into closed-body weather-sealed container trucks designed specifically to handle varying highway conditions without shifting or vibrating contents.
                </p>
                <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                    <div style="flex: 1 1 200px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px 18px;">
                        <strong style="color: #155e75; display: block; margin-bottom: 4px;"><i class="fa fa-check-circle text-success"></i> Direct Highway Transit</strong>
                        <span style="color: #64748b; font-size: 0.9rem;">No midway hub offloading or re-stacking risks.</span>
                    </div>
                    <div style="flex: 1 1 200px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px 18px;">
                        <strong style="color: #155e75; display: block; margin-bottom: 4px;"><i class="fa fa-check-circle text-success"></i> Corporate Reimbursement</strong>
                        <span style="color: #64748b; font-size: 0.9rem;">Approved GST paperwork for corporate claims.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Route Geography & Highway Overview -->
<section class="j2pat-section-alt">
    <div class="container">
        <div class="j2pat-heading-wrap">
            <span class="j2pat-pill">Navigation Blueprint</span>
            <h2>Route Geography & Highway Transit Analysis</h2>
            <p>
                A high-speed 275 km highway corridor connects Jamtara with Patna via Deoghar, Jamui, Lakhisarai, and Mokama, providing reliable, punctual transit.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="j2pat-card">
                    <div class="j2pat-card-icon"><i class="fa fa-map-signs"></i></div>
                    <h3>Primary Transit Corridor</h3>
                    <p>
                        The preferred freight route proceeds north from Jamtara via Sarath to Deoghar, crossing into Bihar through Chakai to Jamui, Lakhisarai, and linking with the four-lane NH-31 near Mokama directly into Patna via Bakhtiyarpur.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="j2pat-card">
                    <div class="j2pat-card-icon"><i class="fa fa-clock-o"></i></div>
                    <h3>Patna Entry Timing & Municipal Rules</h3>
                    <p>
                        Heavy freight commercial trucks entering Patna via Zero Mile or Mahatma Gandhi Setu face daytime restrictions. Our logistics coordinators time departures from Jamtara so that arrival coincides with unrestricted evening or early-morning entry windows.
                    </p>
                </div>
            </div>
            <div class="j2pat-card">
                <div class="j2pat-card-icon"><i class="fa fa-shield"></i></div>
                <h3>Dedicated Container Security</h3>
                <p>
                    Every container vehicle is fitted with GPS navigation and constant driver communication. Clients receive active milestone updates as the vehicle crosses Jamui, Lakhisarai, Mokama, and reaches your destination in Patna.
                </p>
            </div>
        </div>

        <!-- Major Node Points -->
        <div class="j2pat-route-pill-grid">
            <div class="j2pat-route-node">
                <h4>1. Origin Pickups: Jamtara Region</h4>
                <p>Full-service coverage across Mihijam, Karmatar (Vidyasagar), Court Road, Dumka Road, Nala, Kundahit, and residential housing colonies.</p>
            </div>
            <div class="j2pat-route-node">
                <h4>2. Mid-Transit Waypoints</h4>
                <p>Smooth transit through Deoghar bypass, Chakai hills, Jamui, Lakhisarai, and the four-lane NH-31 Mokama-Bakhtiyarpur expressway.</p>
            </div>
            <div class="j2pat-route-node">
                <h4>3. Destination Delivery: Patna Metro</h4>
                <p>Doorstep delivery, room placement, and debris removal in Bailey Road, Kankarbagh, Boring Road, Patliputra, Danapur, and Saguna More.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Portfolio Grid -->
<section class="j2pat-section">
    <div class="container">
        <div class="j2pat-heading-wrap">
            <span class="j2pat-pill">Comprehensive Relocation Services</span>
            <h2>Tailored Shifting Solutions for Every Move</h2>
            <p>
                Whether you are moving a compact bachelor apartment, a luxury duplex, sensitive IT servers, or your personal automobile, Shree Ashirwad provides dedicated specialized solutions.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="j2pat-card">
                    <div class="j2pat-card-icon"><i class="fa fa-home"></i></div>
                    <h3>Household Goods Shifting</h3>
                    <p>
                        Comprehensive packing for wardrobes, modular beds, dining tables, sofa sets, kitchen glassware, and delicate home electronics using multi-layer protective packaging.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="j2pat-card">
                    <div class="j2pat-card-icon"><i class="fa fa-university"></i></div>
                    <h3>Government & Bank Employee Relocation</h3>
                    <p>
                        Turnkey relocation solutions compliant with government transfer guidelines. Includes customized packing schedules, priority unpacking, and GST-ready invoices.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="j2pat-card">
                    <div class="j2pat-card-icon"><i class="fa fa-car"></i></div>
                    <h3>Dedicated Car Carrier Service</h3>
                    <p>
                        Safe, damage-free motor car transportation utilizing enclosed hydraulic car haulers. Equipped with tire locks, safety harnesses, and transit insurance coverage.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="j2pat-card">
                    <div class="j2pat-card-icon"><i class="fa fa-motorcycle"></i></div>
                    <h3>Two-Wheeler Parcel Service</h3>
                    <p>
                        High-security bike parcel handling. Motorcycles and scooters are wrapped in corrugated wrap, bubble sheets, and wooden pallets to prevent highway scratches.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="j2pat-card">
                    <div class="j2pat-card-icon"><i class="fa fa-building"></i></div>
                    <h3>Industrial & Office Relocation</h3>
                    <p>
                        Disassembly, packing, and reinstallation of office workstations, server racks, desktop computer terminals, and sensitive commercial documents with minimal business downtime.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="j2pat-card">
                    <div class="j2pat-card-icon"><i class="fa fa-shield"></i></div>
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
<section class="j2pat-section-alt">
    <div class="container">
        <div class="j2pat-heading-wrap">
            <span class="j2pat-pill">Transparent Quotations</span>
            <h2>Jamtara to Patna Shifting Cost Matrix</h2>
            <p>
                We believe in 100% upfront pricing with zero hidden charges, transparent toll calculations, and fair labour rates for door-to-door relocation.
            </p>
        </div>

        <div class="j2pat-table-wrap">
            <table class="j2pat-table">
                <thead>
                    <tr>
                        <th>Consignment Volume / Move Type</th>
                        <th>Packing Tier</th>
                        <th>Truck Assigned</th>
                        <th>Estimated Price Range</th>
                        <th>Doorstep Transit Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 RK / Studio / Single Room Move</strong></td>
                        <td>Standard 3-Layer Corrugated</td>
                        <td>Tata Ace / Mahindra Pickup</td>
                        <td>₹6,500 - ₹11,000</td>
                        <td>Same Day Night / 24 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>1 BHK Apartment Complete Move</strong></td>
                        <td>Premium 4-Layer Foam + Bubble</td>
                        <td>14-ft Closed Container</td>
                        <td>₹11,500 - ₹17,000</td>
                        <td>24 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Family Home Relocation</strong></td>
                        <td>Executive 5-Layer Heavy Duty</td>
                        <td>17-ft / 19-ft Sealed Container</td>
                        <td>₹16,000 - ₹23,500</td>
                        <td>24 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK / Independent Bungalow</strong></td>
                        <td>Ultra-Secure Multi-Layer & Wooden Crates</td>
                        <td>20-ft / 24-ft Container Truck</td>
                        <td>₹22,000 - ₹35,000</td>
                        <td>24 to 36 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>Motorcycle / Scooter Parcel</strong></td>
                        <td>Dual-Layer Bubble + Corrugated Wrap</td>
                        <td>Dedicated Covered Carrier</td>
                        <td>₹2,500 - ₹4,200</td>
                        <td>24 to 48 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>Hatchback / Sedan Car Transport</strong></td>
                        <td>Hydraulic Enclosed Hauler</td>
                        <td>Specialized Car Carrier Truck</td>
                        <td>₹7,500 - ₹13,000</td>
                        <td>24 to 48 Hours</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="text-align: center; color: #64748b; font-size: 0.9rem; margin-top: 15px;">
            <em>Note: The charges outlined above are indicative and vary based on consignment volume, floor levels, elevator availability, and chosen insurance value. Call 8409531615 for a precise doorstep estimate.</em>
        </p>

        <div class="j2pat-highlight-box">
            <h4><i class="fa fa-info-circle"></i> Why Dedicated Sealed Containers Matter for Inter-State Transit</h4>
            <p>
                For routes between Jamtara and Patna, choosing our dedicated closed-door container guarantees that your household effects are never mixed with external commercial cargo. Once packed at your Jamtara doorstep, the container doors are padlocked and seal-tagged in your presence, and will only be unsealed when the vehicle pulls into your new home driveway in Bailey Road, Kankarbagh, or Danapur.
            </p>
        </div>
    </div>
</section>

<!-- Visual Gallery & Packaging Methodology -->
<section class="j2pat-section">
    <div class="container">
        <div class="j2pat-heading-wrap">
            <span class="j2pat-pill">Packaging Standards</span>
            <h2>Our High-Grade Packaging & Handling Standards</h2>
            <p>
                From delicate chinaware to heavy teakwood beds, see how our trained packaging specialists safeguard your valuable possessions during transit.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="j2pat-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="High grade multi layer household goods packing by Shree Ashirwad crew" loading="lazy">
                    <div class="j2pat-img-caption">
                        <strong>5-Layer Cushioning:</strong> Bubble wraps and high-density foam blankets protect wooden finishes and glass panels.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="j2pat-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car loading onto closed hydraulic transport carrier" loading="lazy">
                    <div class="j2pat-img-caption">
                        <strong>Secured Vehicle Carriers:</strong> Hydraulic ramps and tire lashings ensure scratch-free automobile transport.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="j2pat-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Professional unpacking and room setup service in Patna" loading="lazy">
                    <div class="j2pat-img-caption">
                        <strong>Room-Wise Unpacking:</strong> Reassembly of beds, furniture placement, and debris clean-up at your Patna residence.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5-Step Process Timeline -->
<section class="j2pat-section-alt">
    <div class="container">
        <div class="j2pat-heading-wrap">
            <span class="j2pat-pill">Execution Plan</span>
            <h2>Our 5-Step Seamless Relocation Process</h2>
            <p>
                We have perfected an organized, transparent, and stress-free moving pipeline refined through hundreds of successful relocations.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="j2pat-step-timeline">
                    <div class="j2pat-step-card">
                        <div class="j2pat-step-num">1</div>
                        <div class="j2pat-step-body">
                            <h4>Pre-Move Survey & Free Quotation</h4>
                            <p>We review your shifting requirements either via in-home survey in Jamtara or through video inventory assessment. We provide a clear, all-inclusive written estimate detailing transport, packing, labor, and GST.</p>
                        </div>
                    </div>
                    <div class="j2pat-step-card">
                        <div class="j2pat-step-num">2</div>
                        <div class="j2pat-step-body">
                            <h4>Standardized Multi-Layer Packing</h4>
                            <p>Our experienced packaging crew arrives on moving day with specialized materials. Every piece of furniture, electronic gadget, and fragile kitchenware is labeled and wrapped following strict safety guidelines.</p>
                        </div>
                    </div>
                    <div class="j2pat-step-card">
                        <div class="j2pat-step-num">3</div>
                        <div class="j2pat-step-body">
                            <h4>Systematic Loading & Container Sealing</h4>
                            <p>Heavier goods are loaded at base level with shock-absorbing foam pads, followed by lighter carton boxes and mattress bags. Once loaded, the container is locked and sealed in front of you.</p>
                        </div>
                    </div>
                    <div class="j2pat-step-card">
                        <div class="j2pat-step-num">4</div>
                        <div class="j2pat-step-body">
                            <h4>Direct Highway Transit via NH-31</h4>
                            <p>Our professional highway drivers navigate the 275 km route through Jamui and Mokama expressway smoothly, maintaining steady speeds and avoiding bumpy bypass roads to eliminate shifting stress.</p>
                        </div>
                    </div>
                    <div class="j2pat-step-card">
                        <div class="j2pat-step-num">5</div>
                        <div class="j2pat-step-body">
                            <h4>Unloading, Furniture Setup & Debris Removal</h4>
                            <p>Upon arrival in Patna, our team carries cartons into designated rooms, reassembles beds and dining tables, assists in unpacking, and disposes of discarded packing sheets cleanly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Customer Reviews Section -->
<section class="j2pat-section">
    <div class="container">
        <div class="j2pat-heading-wrap">
            <span class="j2pat-pill">Client Testimonials</span>
            <h2>What Our Relocated Customers Say</h2>
            <p>
                Read verified reviews from professionals and families who recently shifted from Jamtara to Patna with Shree Ashirwad.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="j2pat-review-card">
                    <div class="j2pat-review-stars">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p>
                        "I was transferred from Jamtara district court to Patna High Court. Shree Ashirwad Packers packed my 3BHK household goods with unbelievable care. Not a single ceramic plate broke, and their GST invoice was reimbursed smoothly by my office."
                    </p>
                    <div class="j2pat-review-meta">
                        <span class="j2pat-review-author">Birendra Kumar Singh</span>
                        <span class="j2pat-review-loc">Shifted to Bailey Road, Patna</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="j2pat-review-card">
                    <div class="j2pat-review-stars">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p>
                        "Relocated our complete home from Mihijam to Kankarbagh, Patna. Their team loaded everything in the morning and the container delivered goods early next morning. Professional behavior and zero hidden expenses."
                    </p>
                    <div class="j2pat-review-meta">
                        <span class="j2pat-review-author">Meena Kumari</span>
                        <span class="j2pat-review-loc">Shifted to Kankarbagh, Patna</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="j2pat-review-card">
                    <div class="j2pat-review-stars">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p>
                        "Booked my Maruti Swift along with a 2BHK flat shifting from Karmatar to Danapur. Both the car and furniture arrived in immaculate condition. Highly recommended logistics partner!"
                    </p>
                    <div class="j2pat-review-meta">
                        <span class="j2pat-review-author">Vikash Ranjan</span>
                        <span class="j2pat-review-loc">Shifted to Danapur, Patna</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions Section -->
<section class="j2pat-section-alt">
    <div class="container">
        <div class="j2pat-heading-wrap">
            <span class="j2pat-pill">Have Questions?</span>
            <h2>Frequently Asked Questions About Jamtara to Patna Shifting</h2>
            <p>
                Find answers to common questions about moving schedules, packing methods, insurance documentation, and delivery commitments.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <details class="j2pat-faq-item" open>
                    <summary>How long does shifting take between Jamtara and Patna?</summary>
                    <div class="j2pat-faq-answer">
                        The highway distance between Jamtara and Patna is approximately 275 kilometers via Deoghar, Jamui, Lakhisarai, and Mokama. Door-to-door transit takes 7.5 to 9.5 hours, allowing next-morning or same-day night delivery.
                    </div>
                </details>

                <details class="j2pat-faq-item">
                    <summary>What are the shifting rates from Jamtara to Patna?</summary>
                    <div class="j2pat-faq-answer">
                        Standard shifting charges from Jamtara to Patna range from ₹6,500 to ₹11,000 for 1 RK / small flats, ₹11,500 to ₹18,000 for a standard 2 BHK home, and ₹19,000 to ₹33,000 for large 3 BHK family residences.
                    </div>
                </details>

                <details class="j2pat-faq-item">
                    <summary>Do you offer GST billing for government, judicial, and railway employee transfers to Patna?</summary>
                    <div class="j2pat-faq-answer">
                        Yes, we provide 100% compliant GST invoices, IBA-approved consignment bilty notes, detailed itemized packing manifests, and money receipts accepted by Bihar government secretariats, high court departments, and railway offices.
                    </div>
                </details>

                <details class="j2pat-faq-item">
                    <summary>Can you shift household goods into apartment societies in Bailey Road, Kankarbagh, or Danapur?</summary>
                    <div class="j2pat-faq-answer">
                        Yes, our delivery crew manages multi-story tower moves across Bailey Road, Boring Road, Kankarbagh, Patliputra, Danapur, Saguna More, and Bihta with complete elevator unloading and room placement.
                    </div>
                </details>

                <details class="j2pat-faq-item">
                    <summary>How do you transport motor cars or two-wheelers to Patna?</summary>
                    <div class="j2pat-faq-answer">
                        We operate enclosed hydraulic car carriers and secured closed-container bike parcel services with wheel chocks, scratch-resistant corrugated wrapping, and tie-down lashings from Jamtara and Mihijam straight to your Patna residence.
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
            Planning Your Move to Patna?
        </h2>
        <p style="color: #cbd5e1; font-size: 1.15rem; max-width: 680px; margin: 0 auto 35px; line-height: 1.7;">
            Contact us today for a free, transparent shifting estimate. Let Jharkhand and Bihar's trusted moving team deliver your household treasures with unmatched care and reliability.
        </p>
        <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
            <a href="tel:08409531615" class="j2pat-btn-primary" style="font-size: 1.1rem; padding: 16px 36px;">
                <i class="fa fa-phone"></i> Call 08409531615
            </a>
            <a href="https://wa.me/918409531615?text=Hi%20Shree%20Ashirwad,%20I%20want%20to%20book%20Jamtara%20to%20Patna%20shifting" class="j2pat-btn-secondary" style="font-size: 1.1rem; padding: 16px 36px;" target="_blank" rel="noopener">
                <i class="fa fa-whatsapp"></i> Chat on WhatsApp
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>
