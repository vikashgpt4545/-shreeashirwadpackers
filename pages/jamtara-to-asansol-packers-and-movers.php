<?php
/**
 * Page Name: Jamtara to Asansol Packers and Movers
 * Route Slug: jamtara-to-asansol-packers-and-movers
 * Description: Inter-state cross-border relocation route from Jamtara and Mihijam to Asansol, Burnpur (IISCO), and Paschim Bardhaman industrial hub.
 * Focus Keywords: jamtara to asansol packers and movers, packers and movers jamtara to asansol, house shifting jamtara to asansol, jamtara to asansol luggage transport, jamtara to asansol car carrier, jamtara to burnpur packers and movers
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Jamtara to Asansol Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Fast Jamtara to Asansol packers and movers. 35 km quick 1 hr cross-border transit via Mihijam-NH-19, IISCO & railway transfer bills, 5-layer packing, car carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/jamtara-to-asansol-packers-and-movers";
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

    <!-- Scoped CSS for Route 11 (Jamtara to Asansol) -->
    <style>
        :root {
            --j2asl-primary: #1e3a5f;
            --j2asl-secondary: #0284c7;
            --j2asl-accent: #ea580c;
            --j2asl-accent-light: #ffedd5;
            --j2asl-dark: #0f172a;
            --j2asl-gray-bg: #f8fafc;
            --j2asl-border: #e2e8f0;
            --j2asl-card-shadow: 0 10px 25px -5px rgba(30, 58, 95, 0.08), 0 8px 10px -6px rgba(30, 58, 95, 0.04);
        }

        .j2asl-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 58, 95, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .j2asl-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(234, 88, 12, 0.2);
            border: 1px solid rgba(234, 88, 12, 0.5);
            padding: 7px 18px;
            border-radius: 9999px;
            font-size: 0.88rem;
            font-weight: 700;
            color: #fed7aa;
            margin-bottom: 22px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .j2asl-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2.1rem, 4.2vw, 3.2rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
            color: #ffffff;
        }

        .j2asl-hero p {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #cbd5e1;
            max-width: 780px;
            margin-bottom: 30px;
        }

        .j2asl-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .j2asl-btn-primary {
            background: linear-gradient(135deg, #ea580c 0%, #c2410c 100%);
            color: #ffffff;
            padding: 15px 32px;
            font-weight: 700;
            border-radius: 8px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 14px rgba(234, 88, 12, 0.4);
        }

        .j2asl-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(234, 88, 12, 0.5);
            color: #ffffff;
        }

        .j2asl-btn-secondary {
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

        .j2asl-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.22);
            color: #ffffff;
        }

        .j2asl-stat-ribbon {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: var(--j2asl-card-shadow);
            margin-top: -35px;
            position: relative;
            z-index: 10;
            padding: 24px 30px;
            border: 1px solid var(--j2asl-border);
        }

        .j2asl-stat-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
            gap: 20px;
        }

        .j2asl-stat-item {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .j2asl-stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: var(--j2asl-accent-light);
            color: var(--j2asl-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            flex-shrink: 0;
        }

        .j2asl-stat-label {
            font-size: 0.85rem;
            color: #64748b;
            text-transform: uppercase;
            font-weight: 600;
            margin-bottom: 3px;
        }

        .j2asl-stat-val {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 800;
            color: var(--j2asl-dark);
        }

        .j2asl-section {
            padding: 70px 0;
        }

        .j2asl-section-alt {
            background: var(--j2asl-gray-bg);
            padding: 70px 0;
        }

        .j2asl-heading-wrap {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }

        .j2asl-pill {
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

        .j2asl-heading-wrap h2 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(1.85rem, 3.2vw, 2.5rem);
            font-weight: 800;
            color: var(--j2asl-dark);
            line-height: 1.25;
            margin-bottom: 15px;
        }

        .j2asl-heading-wrap p {
            color: #475569;
            font-size: 1.05rem;
            line-height: 1.65;
        }

        .j2asl-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 32px 28px;
            border: 1px solid var(--j2asl-border);
            box-shadow: var(--j2asl-card-shadow);
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .j2asl-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 30px -8px rgba(30, 58, 95, 0.12);
        }

        .j2asl-card-icon {
            width: 54px;
            height: 54px;
            background: #e0f2fe;
            color: var(--j2asl-secondary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .j2asl-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--j2asl-dark);
            margin-bottom: 12px;
        }

        .j2asl-card p {
            color: #64748b;
            font-size: 0.98rem;
            line-height: 1.65;
        }

        .j2asl-table-wrap {
            overflow-x: auto;
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--j2asl-border);
            box-shadow: var(--j2asl-card-shadow);
            margin: 35px 0 20px;
        }

        .j2asl-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            min-width: 650px;
        }

        .j2asl-table th {
            background: #1e3a5f;
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 700;
            font-size: 0.96rem;
        }

        .j2asl-table td {
            padding: 15px 20px;
            border-bottom: 1px solid var(--j2asl-border);
            color: #334155;
            font-size: 0.94rem;
        }

        .j2asl-table tr:hover td {
            background-color: #f8fafc;
        }

        .j2asl-route-pill-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 35px;
        }

        .j2asl-route-node {
            background: #ffffff;
            padding: 22px;
            border-radius: 10px;
            border-left: 4px solid var(--j2asl-accent);
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            border-top: 1px solid var(--j2asl-border);
            border-right: 1px solid var(--j2asl-border);
            border-bottom: 1px solid var(--j2asl-border);
        }

        .j2asl-route-node h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            color: var(--j2asl-dark);
            margin-bottom: 8px;
            font-weight: 700;
        }

        .j2asl-route-node p {
            color: #64748b;
            font-size: 0.92rem;
            line-height: 1.55;
            margin: 0;
        }

        .j2asl-img-showcase {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: var(--j2asl-card-shadow);
            margin-bottom: 24px;
            border: 1px solid var(--j2asl-border);
        }

        .j2asl-img-showcase img {
            width: 100%;
            height: 270px;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .j2asl-img-showcase:hover img {
            transform: scale(1.03);
        }

        .j2asl-img-caption {
            padding: 15px 18px;
            background: #ffffff;
            font-size: 0.92rem;
            font-weight: 600;
            color: var(--j2asl-dark);
            border-top: 1px solid var(--j2asl-border);
        }

        .j2asl-step-timeline {
            display: flex;
            flex-direction: column;
            gap: 24px;
            position: relative;
            margin-top: 40px;
        }

        .j2asl-step-card {
            display: flex;
            gap: 20px;
            background: #ffffff;
            padding: 24px;
            border-radius: 12px;
            border: 1px solid var(--j2asl-border);
            box-shadow: 0 4px 14px rgba(0,0,0,0.03);
        }

        .j2asl-step-num {
            width: 44px;
            height: 44px;
            background: var(--j2asl-primary);
            color: #ffffff;
            font-weight: 800;
            font-size: 1.25rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .j2asl-step-body h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--j2asl-dark);
            margin-bottom: 6px;
        }

        .j2asl-step-body p {
            color: #64748b;
            font-size: 0.94rem;
            line-height: 1.6;
            margin: 0;
        }

        .j2asl-faq-item {
            background: #ffffff;
            border: 1px solid var(--j2asl-border);
            border-radius: 10px;
            margin-bottom: 16px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.02);
        }

        .j2asl-faq-item summary {
            padding: 20px 24px;
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            font-size: 1.1rem;
            color: var(--j2asl-dark);
            cursor: pointer;
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #ffffff;
        }

        .j2asl-faq-item summary::-webkit-details-marker {
            display: none;
        }

        .j2asl-faq-item summary::after {
            content: "+";
            font-size: 1.4rem;
            font-weight: 400;
            color: var(--j2asl-accent);
        }

        .j2asl-faq-item[open] summary::after {
            content: "−";
        }

        .j2asl-faq-answer {
            padding: 0 24px 22px;
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
            border-top: 1px solid #f1f5f9;
            background: #fdfdfe;
        }

        .j2asl-review-card {
            background: #ffffff;
            padding: 26px;
            border-radius: 12px;
            border: 1px solid var(--j2asl-border);
            box-shadow: var(--j2asl-card-shadow);
        }

        .j2asl-review-stars {
            color: #f59e0b;
            font-size: 1.1rem;
            margin-bottom: 12px;
        }

        .j2asl-review-card p {
            font-style: italic;
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.6;
            margin-bottom: 16px;
        }

        .j2asl-review-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.88rem;
            border-top: 1px solid #f1f5f9;
            padding-top: 12px;
        }

        .j2asl-review-author {
            font-weight: 700;
            color: var(--j2asl-dark);
        }

        .j2asl-review-loc {
            color: #94a3b8;
        }

        .j2asl-highlight-box {
            background: linear-gradient(135deg, #eff6ff 0%, #fff7ed 100%);
            border: 1px solid #fed7aa;
            border-radius: 12px;
            padding: 28px;
            margin: 30px 0;
        }

        .j2asl-highlight-box h4 {
            font-family: 'Outfit', sans-serif;
            color: #c2410c;
            font-size: 1.25rem;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .j2asl-highlight-box p {
            color: #334155;
            font-size: 0.96rem;
            line-height: 1.65;
            margin: 0;
        }

        @media (max-width: 768px) {
            .j2asl-hero {
                padding: 60px 0 45px;
            }
            .j2asl-stat-ribbon {
                margin-top: 15px;
                padding: 20px;
            }
            .j2asl-cta-group {
                flex-direction: column;
                align-items: stretch;
            }
            .j2asl-btn-primary, .j2asl-btn-secondary {
                justify-content: center;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Jamtara to Asansol",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "https://www.shreeashirwadpackers.com/#movingcompany",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91-8409531615",
        "priceRange": "₹3,500 - ₹26,000",
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
                "name": "Asansol"
            }
        ],
        "description": "Cross-border inter-state relocation from Jamtara and Mihijam to Asansol and Burnpur covering IISCO SAIL transfers, residential moves, bike parcels, car carriers, and transit protection.",
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
                "name": "Jamtara Packers and Movers",
                "item": "https://www.shreeashirwadpackers.com/packers-and-movers-in-jamtara"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Jamtara to Asansol Route",
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
                "name": "How long does shifting take between Jamtara and Asansol?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The driving distance between Jamtara and Asansol is approximately 35 km via Mihijam, Rupnarayanpur, and NH-19. Door-to-door transit takes only 1 to 1.5 hours, making it an effortless same-day relocation."
                }
            },
            {
                "@type": "Question",
                "name": "What are the shifting rates from Jamtara to Asansol?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Shifting costs from Jamtara to Asansol average ₹3,500 to ₹6,500 for single room / 1 RK setups, ₹6,000 to ₹10,500 for a 1 BHK flat, ₹9,500 to ₹15,000 for a 2 BHK home, and ₹14,000 to ₹21,000 for a spacious 3 BHK residence."
                }
            },
            {
                "@type": "Question",
                "name": "Do you offer GST billing for SAIL IISCO Burnpur and Eastern Railway employee transfers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide 100% compliant GST invoices, IBA-approved consignment bilty notes, detailed itemized packing manifests, and money receipts accepted by SAIL-IISCO Burnpur, Eastern Railway Asansol division, banks, and government offices."
                }
            },
            {
                "@type": "Question",
                "name": "Can you shift household goods from Mihijam to Kalyanpur or Chelidanga directly?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we handle pickups across all Jamtara areas including Mihijam, Karmatar, and Court Road, delivering straight to Chelidanga, Ushagram, Burnpur, Sen Raleigh Road, or Kalyanpur Satellite Township in Asansol without transshipment."
                }
            },
            {
                "@type": "Question",
                "name": "Are there any border check-post delays when moving between Jharkhand and West Bengal?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our transport vehicles operate with all valid commercial permits, national fitness certificates, e-way bills, and tax clearances. We clear the Mihijam-Rupnarayanpur state boundary without unnecessary border holds."
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
            <li><a href="<?php echo SITE_BASE_URL; ?>/" style="color: #0284c7; text-decoration: none;">Home</a> <span style="color: #94a3b8;">/</span></li>
            <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-jamtara" style="color: #0284c7; text-decoration: none;">Jamtara</a> <span style="color: #94a3b8;">/</span></li>
            <li style="color: #64748b;" aria-current="page">Jamtara to Asansol</li>
        </ol>
    </div>
</nav>

<!-- Hero Section -->
<section class="j2asl-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="j2asl-hero-badge">Inter-State Cross-Border Express &bull; 35 KM Quick Link</span>
                <h1>Reliable Jamtara to Asansol Packers and Movers</h1>
                <p>
                    Relocating from Jamtara or Mihijam to Asansol, Burnpur, or Paschim Bardhaman? Shree Ashirwad Packers and Movers provides rapid, zero-damage domestic shifting, SAIL-IISCO employee transfers, and secure vehicle transportation. Seamless doorstep service across Mihijam, Karmatar, and Jamtara to Chelidanga, Ushagram, Burnpur, Kalyanpur, and Kalla.
                </p>
                <div class="j2asl-cta-group">
                    <a href="tel:08409531615" class="j2asl-btn-primary">
                        <i class="fa fa-phone"></i> Call 8409531615 for Free Quote
                    </a>
                    <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Jamtara%20to%20Asansol%20relocation" class="j2asl-btn-secondary" target="_blank" rel="noopener">
                        <i class="fa fa-whatsapp"></i> WhatsApp Instant Estimate
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Ribbon -->
<div class="container">
    <div class="j2asl-stat-ribbon">
        <div class="j2asl-stat-grid">
            <div class="j2asl-stat-item">
                <div class="j2asl-stat-icon"><i class="fa fa-road"></i></div>
                <div>
                    <div class="j2asl-stat-label">Highway Distance</div>
                    <div class="j2asl-stat-val">~35 Kilometers</div>
                </div>
            </div>
            <div class="j2asl-stat-item">
                <div class="j2asl-stat-icon"><i class="fa fa-clock-o"></i></div>
                <div>
                    <div class="j2asl-stat-label">Door Transit Duration</div>
                    <div class="j2asl-stat-val">1 - 1.5 Hours</div>
                </div>
            </div>
            <div class="j2asl-stat-item">
                <div class="j2asl-stat-icon"><i class="fa fa-shield"></i></div>
                <div>
                    <div class="j2asl-stat-label">Cargo Safety</div>
                    <div class="j2asl-stat-val">100% Zero-Damage</div>
                </div>
            </div>
            <div class="j2asl-stat-item">
                <div class="j2asl-stat-icon"><i class="fa fa-file-text-o"></i></div>
                <div>
                    <div class="j2asl-stat-label">SAIL & Railway Claims</div>
                    <div class="j2asl-stat-val">100% Approved Bills</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Strategic Content Section -->
<section class="j2asl-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="j2asl-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Dedicated closed container truck for Jamtara to Asansol transit" loading="lazy">
                    <div class="j2asl-img-caption">
                        <i class="fa fa-truck" style="color: var(--j2asl-accent); margin-right: 8px;"></i>
                        Regular closed container fleets plying the Jamtara &rarr; Mihijam &rarr; Asansol corridor.
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="j2asl-pill">Cross-Border Industrial Link</div>
                <h2 style="font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--j2asl-dark); font-size: 2.1rem; margin-bottom: 18px;">
                    Express Doorstep Relocation Between Jamtara and Asansol
                </h2>
                <p style="color: #475569; font-size: 1.02rem; line-height: 1.7; margin-bottom: 16px;">
                    Positioned right on the Jharkhand-West Bengal interstate border, Jamtara and Mihijam enjoy immediate economic and residential proximity to Asansol and Burnpur. With Chittaranjan Locomotive Works (CLW) on the border, SAIL IISCO Steel Plant at Burnpur, and Asansol serving as the commercial capital of Paschim Bardhaman, daily employee postings and household transfers between these twin zones are constant.
                </p>
                <p style="color: #475569; font-size: 1.02rem; line-height: 1.7; margin-bottom: 20px;">
                    Shree Ashirwad Packers and Movers makes this short cross-border transition rapid and completely stress-free. Spanning just 35 kilometers via Mihijam, Rupnarayanpur, and NH-19, our team completes systematic packing in the morning, handles necessary e-way documentation for inter-state commercial transport, and unloads at your Asansol or Burnpur residence within just a couple of hours.
                </p>
                <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                    <div style="flex: 1 1 200px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px 18px;">
                        <strong style="color: #1e3a5f; display: block; margin-bottom: 4px;"><i class="fa fa-check-circle text-success"></i> 1-Hour Transit</strong>
                        <span style="color: #64748b; font-size: 0.9rem;">Packed and moved in record time.</span>
                    </div>
                    <div style="flex: 1 1 200px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px 18px;">
                        <strong style="color: #1e3a5f; display: block; margin-bottom: 4px;"><i class="fa fa-check-circle text-success"></i> Interstate Compliance</strong>
                        <span style="color: #64748b; font-size: 0.9rem;">Valid e-way bill & GST consignment note.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Route Geography & Highway Overview -->
<section class="j2asl-section-alt">
    <div class="container">
        <div class="j2asl-heading-wrap">
            <span class="j2asl-pill">Logistics Highway Blueprint</span>
            <h2>Route Geography & Highway Transit Analysis</h2>
            <p>
                A smooth 35 km highway connects Jamtara with Asansol via Mihijam and the Grand Trunk Road (NH-19), ensuring quick, uninterrupted travel.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="j2asl-card">
                    <div class="j2asl-card-icon"><i class="fa fa-map-signs"></i></div>
                    <h3>Primary Transit Corridor</h3>
                    <p>
                        The preferred route exits Jamtara town through Mihijam, crosses the state border near Rupnarayanpur/Chittaranjan, and connects to NH-19 directly into Asansol. This well-maintained four-lane and two-lane network provides smooth tarmac and minimal transit shocks.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="j2asl-card">
                    <div class="j2asl-card-icon"><i class="fa fa-clock-o"></i></div>
                    <h3>Record 1-Hour Turnaround</h3>
                    <p>
                        With a driving duration of only 1 to 1.5 hours, clients experience lightning-fast relocations. Our packing team arrives early in Jamtara, loads all goods securely into closed container trucks, and completes room setup in Asansol before midday.
                    </p>
                </div>
            </div>
            <div class="j2asl-card">
                <div class="j2asl-card-icon"><i class="fa fa-shield"></i></div>
                <h3>Exclusive Point-to-Point Trucking</h3>
                <p>
                    We never mix consignments from different customers. Your household effects travel inside an exclusive closed steel container truck, padlocked in your presence at Jamtara and unsealed only when parked outside your new Asansol home.
                </p>
            </div>
        </div>

        <!-- Major Node Points -->
        <div class="j2asl-route-pill-grid">
            <div class="j2asl-route-node">
                <h4>1. Origin Pickups: Jamtara Region</h4>
                <p>Comprehensive pickup across Jamtara Town, Mihijam, Karmatar (Vidyasagar), Court Road, Station Road, and Nala.</p>
            </div>
            <div class="j2asl-route-node">
                <h4>2. Mid-Transit Waypoints</h4>
                <p>Smooth transit through Mihijam border check-post, Rupnarayanpur bypass, and the six-lane NH-19 expressway into Paschim Bardhaman.</p>
            </div>
            <div class="j2asl-route-node">
                <h4>3. Destination Delivery: Asansol & Burnpur</h4>
                <p>Prompt delivery, room-by-room unloading, and furniture setup across Chelidanga, Ushagram, Burnpur, Sen Raleigh Road, and Kalyanpur.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Portfolio Grid -->
<section class="j2asl-section">
    <div class="container">
        <div class="j2asl-heading-wrap">
            <span class="j2asl-pill">Comprehensive Relocation Services</span>
            <h2>Tailored Shifting Solutions from Jamtara to Asansol</h2>
            <p>
                Whether you need complete 3BHK household shifting, a single two-wheeler parcel, or corporate office relocation, Shree Ashirwad provides dedicated specialized solutions.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="j2asl-card">
                    <div class="j2asl-card-icon"><i class="fa fa-home"></i></div>
                    <h3>Household Furniture Shifting</h3>
                    <p>
                        Comprehensive packing for wardrobes, modular beds, dining tables, sofa sets, kitchen glassware, and delicate home electronics using multi-layer protective packaging.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="j2asl-card">
                    <div class="j2asl-card-icon"><i class="fa fa-industry"></i></div>
                    <h3>SAIL & Railway Employee Relocation</h3>
                    <p>
                        Turnkey relocation solutions compliant with corporate transfer guidelines. Includes customized packing schedules, priority unpacking, and GST-ready invoices.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="j2asl-card">
                    <div class="j2asl-card-icon"><i class="fa fa-car"></i></div>
                    <h3>Dedicated Car Carrier Service</h3>
                    <p>
                        Safe, damage-free motor car transportation utilizing enclosed hydraulic car haulers. Equipped with tire locks, safety harnesses, and transit insurance coverage.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="j2asl-card">
                    <div class="j2asl-card-icon"><i class="fa fa-motorcycle"></i></div>
                    <h3>Two-Wheeler Parcel Service</h3>
                    <p>
                        High-security bike parcel handling. Motorcycles and scooters are wrapped in corrugated wrap, bubble sheets, and wooden pallets to prevent highway scratches.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="j2asl-card">
                    <div class="j2asl-card-icon"><i class="fa fa-building"></i></div>
                    <h3>Industrial & Office Relocation</h3>
                    <p>
                        Disassembly, packing, and reinstallation of office workstations, server racks, desktop computer terminals, and sensitive commercial documents with minimal business downtime.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="j2asl-card">
                    <div class="j2asl-card-icon"><i class="fa fa-shield"></i></div>
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
<section class="j2asl-section-alt">
    <div class="container">
        <div class="j2asl-heading-wrap">
            <span class="j2asl-pill">Transparent Quotations</span>
            <h2>Jamtara to Asansol Shifting Cost Estimate</h2>
            <p>
                We believe in 100% upfront pricing with zero hidden charges, transparent toll calculations, and fair labour rates for door-to-door relocation.
            </p>
        </div>

        <div class="j2asl-table-wrap">
            <table class="j2asl-table">
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
                        <td>₹3,500 - ₹6,500</td>
                        <td>Same Day (1 Hour)</td>
                    </tr>
                    <tr>
                        <td><strong>1 BHK Apartment Complete Move</strong></td>
                        <td>Premium 4-Layer Foam + Bubble</td>
                        <td>14-ft Closed Container</td>
                        <td>₹6,000 - ₹10,500</td>
                        <td>Same Day (1 - 1.5 Hours)</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Family Home Relocation</strong></td>
                        <td>Executive 5-Layer Heavy Duty</td>
                        <td>17-ft / 19-ft Sealed Container</td>
                        <td>₹9,500 - ₹15,000</td>
                        <td>Same Day (1 - 1.5 Hours)</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK / Independent Bungalow</strong></td>
                        <td>Ultra-Secure Multi-Layer & Wooden Crates</td>
                        <td>20-ft / 24-ft Container Truck</td>
                        <td>₹14,000 - ₹21,000</td>
                        <td>Same Day (1.5 - 2 Hours)</td>
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
            <em>Note: The charges outlined above are indicative and vary based on consignment volume, floor levels, elevator availability, and chosen insurance value. Call 8409531615 for a precise doorstep estimate.</em>
        </p>

        <div class="j2asl-highlight-box">
            <h4><i class="fa fa-info-circle"></i> Why Dedicated Sealed Containers Matter for Cross-Border Moves</h4>
            <p>
                Even for short 35 km inter-state relocations, utilizing dedicated closed containers prevents dust exposure, unexpected rain damage, and cargo movement. Your household effects are loaded, secured, and driven directly to Asansol without intermediate unloading or cargo swapping.
            </p>
        </div>
    </div>
</section>

<!-- Visual Gallery & Packaging Methodology -->
<section class="j2asl-section">
    <div class="container">
        <div class="j2asl-heading-wrap">
            <span class="j2asl-pill">Packaging Standards</span>
            <h2>Our High-Grade Packaging & Handling Standards</h2>
            <p>
                From delicate chinaware to heavy teakwood beds, see how our trained packaging specialists safeguard your valuable possessions during transit.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="j2asl-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="High grade multi layer household goods packing by Shree Ashirwad crew" loading="lazy">
                    <div class="j2asl-img-caption">
                        <strong>5-Layer Cushioning:</strong> Bubble wraps and high-density foam blankets protect wooden finishes and glass panels.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="j2asl-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car loading onto closed hydraulic transport carrier" loading="lazy">
                    <div class="j2asl-img-caption">
                        <strong>Secured Vehicle Carriers:</strong> Hydraulic ramps and tire lashings ensure scratch-free automobile transport.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="j2asl-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Professional unpacking and room setup service in Asansol" loading="lazy">
                    <div class="j2asl-img-caption">
                        <strong>Room-Wise Unpacking:</strong> Reassembly of beds, furniture placement, and debris clean-up at your Asansol residence.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5-Step Process Timeline -->
<section class="j2asl-section-alt">
    <div class="container">
        <div class="j2asl-heading-wrap">
            <span class="j2asl-pill">Execution Plan</span>
            <h2>Our 5-Step Seamless Relocation Process</h2>
            <p>
                We have perfected an organized, transparent, and stress-free moving pipeline refined through hundreds of successful relocations.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="j2asl-step-timeline">
                    <div class="j2asl-step-card">
                        <div class="j2asl-step-num">1</div>
                        <div class="j2asl-step-body">
                            <h4>Pre-Move Survey & Free Quotation</h4>
                            <p>We review your shifting requirements either via in-home survey in Jamtara or through video inventory assessment. We provide a clear, all-inclusive written estimate detailing transport, packing, labor, and GST.</p>
                        </div>
                    </div>
                    <div class="j2asl-step-card">
                        <div class="j2asl-step-num">2</div>
                        <div class="j2asl-step-body">
                            <h4>Standardized Multi-Layer Packing</h4>
                            <p>Our experienced packaging crew arrives on moving day with specialized materials. Every piece of furniture, electronic gadget, and fragile kitchenware is labeled and wrapped following strict safety guidelines.</p>
                        </div>
                    </div>
                    <div class="j2asl-step-card">
                        <div class="j2asl-step-num">3</div>
                        <div class="j2asl-step-body">
                            <h4>Systematic Loading & Container Sealing</h4>
                            <p>Heavier goods are loaded at base level with shock-absorbing foam pads, followed by lighter carton boxes and mattress bags. Once loaded, the container is locked and sealed in front of you.</p>
                        </div>
                    </div>
                    <div class="j2asl-step-card">
                        <div class="j2asl-step-num">4</div>
                        <div class="j2asl-step-body">
                            <h4>Smooth 1-Hour Cross-Border Transit</h4>
                            <p>Our professional highway drivers navigate the 35 km route through Mihijam and Rupnarayanpur, maintaining steady speeds and avoiding bumpy bypass roads to eliminate shifting stress.</p>
                        </div>
                    </div>
                    <div class="j2asl-step-card">
                        <div class="j2asl-step-num">5</div>
                        <div class="j2asl-step-body">
                            <h4>Unloading, Furniture Setup & Debris Removal</h4>
                            <p>Upon arrival in Asansol or Burnpur, our team carries cartons into designated rooms, reassembles beds and dining tables, assists in unpacking, and disposes of discarded packing sheets cleanly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Customer Reviews Section -->
<section class="j2asl-section">
    <div class="container">
        <div class="j2asl-heading-wrap">
            <span class="j2asl-pill">Client Testimonials</span>
            <h2>What Our Customers Say About Jamtara to Asansol Relocation</h2>
            <p>
                Read verified reviews from clients who recently moved from Jamtara to Asansol with Shree Ashirwad.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="j2asl-review-card">
                    <div class="j2asl-review-stars">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p>
                        "Shifted my 2BHK home from Mihijam to Burnpur near IISCO steel township. The crew finished packing by 9 AM and by 11:30 AM everything was unpacked and positioned in our new flat. Lightning-fast service and polite team!"
                    </p>
                    <div class="j2asl-review-meta">
                        <span class="j2asl-review-author">Pranab Roy</span>
                        <span class="j2asl-review-loc">Shifted to Burnpur, Asansol</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="j2asl-review-card">
                    <div class="j2asl-review-stars">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p>
                        "I shifted from Jamtara town to Kalyanpur Satellite Township in Asansol. Shree Ashirwad Packers took charge of all packaging and provided GST bills that my office reimbursed without delay. Highly recommended!"
                    </p>
                    <div class="j2asl-review-meta">
                        <span class="j2asl-review-author">Debashis Ganguly</span>
                        <span class="j2asl-review-loc">Shifted to Kalyanpur, Asansol</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="j2asl-review-card">
                    <div class="j2asl-review-stars">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p>
                        "Moved my complete home along with a Suzuki Access scooter from Karmatar to Ushagram, Asansol. Both the scooter and all household goods arrived in pristine shape. Great job by team Shree Ashirwad!"
                    </p>
                    <div class="j2asl-review-meta">
                        <span class="j2asl-review-author">Sumit Pal</span>
                        <span class="j2asl-review-loc">Shifted to Ushagram, Asansol</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions Section -->
<section class="j2asl-section-alt">
    <div class="container">
        <div class="j2asl-heading-wrap">
            <span class="j2asl-pill">Have Questions?</span>
            <h2>Frequently Asked Questions About Jamtara to Asansol Shifting</h2>
            <p>
                Find answers to common questions about moving schedules, packing methods, insurance documentation, and delivery commitments.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <details class="j2asl-faq-item" open>
                    <summary>How long does shifting take between Jamtara and Asansol?</summary>
                    <div class="j2asl-faq-answer">
                        The driving distance between Jamtara and Asansol is approximately 35 km via Mihijam, Rupnarayanpur, and NH-19. Door-to-door transit takes only 1 to 1.5 hours, making it an effortless same-day relocation.
                    </div>
                </details>

                <details class="j2asl-faq-item">
                    <summary>What are the shifting rates from Jamtara to Asansol?</summary>
                    <div class="j2asl-faq-answer">
                        Shifting costs from Jamtara to Asansol average ₹3,500 to ₹6,500 for single room / 1 RK setups, ₹6,000 to ₹10,500 for a 1 BHK flat, ₹9,500 to ₹15,000 for a 2 BHK home, and ₹14,000 to ₹21,000 for a spacious 3 BHK residence.
                    </div>
                </details>

                <details class="j2asl-faq-item">
                    <summary>Do you offer GST billing for SAIL IISCO Burnpur and Eastern Railway employee transfers?</summary>
                    <div class="j2asl-faq-answer">
                        Yes, we provide 100% compliant GST invoices, IBA-approved consignment bilty notes, detailed itemized packing manifests, and money receipts accepted by SAIL-IISCO Burnpur, Eastern Railway Asansol division, banks, and government offices.
                    </div>
                </details>

                <details class="j2asl-faq-item">
                    <summary>Can you shift household goods from Mihijam to Kalyanpur or Chelidanga directly?</summary>
                    <div class="j2asl-faq-answer">
                        Yes, we handle pickups across all Jamtara areas including Mihijam, Karmatar, and Court Road, delivering straight to Chelidanga, Ushagram, Burnpur, Sen Raleigh Road, or Kalyanpur Satellite Township in Asansol without transshipment.
                    </div>
                </details>

                <details class="j2asl-faq-item">
                    <summary>Are there any border check-post delays when moving between Jharkhand and West Bengal?</summary>
                    <div class="j2asl-faq-answer">
                        Our transport vehicles operate with all valid commercial permits, national fitness certificates, e-way bills, and tax clearances. We clear the Mihijam-Rupnarayanpur state boundary without unnecessary border holds.
                    </div>
                </details>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section style="background: linear-gradient(135deg, #1e3a5f 0%, #0f172a 100%); color: #ffffff; padding: 70px 0; text-align: center;">
    <div class="container">
        <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(2rem, 3.5vw, 2.8rem); font-weight: 800; margin-bottom: 20px;">
            Planning Your Move from Jamtara to Asansol?
        </h2>
        <p style="color: #cbd5e1; font-size: 1.15rem; max-width: 680px; margin: 0 auto 35px; line-height: 1.7;">
            Contact us today for a free, transparent shifting estimate. Let Jharkhand and Bengal's trusted moving team deliver your household treasures with unmatched care and reliability.
        </p>
        <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
            <a href="tel:08409531615" class="j2asl-btn-primary" style="font-size: 1.1rem; padding: 16px 36px;">
                <i class="fa fa-phone"></i> Call 08409531615
            </a>
            <a href="https://wa.me/918409531615?text=Hi%20Shree%20Ashirwad,%20I%20want%20to%20book%20Jamtara%20to%20Asansol%20shifting" class="j2asl-btn-secondary" style="font-size: 1.1rem; padding: 16px 36px;" target="_blank" rel="noopener">
                <i class="fa fa-whatsapp"></i> Chat on WhatsApp
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>
