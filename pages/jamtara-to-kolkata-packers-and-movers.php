<?php
/**
 * Page Name: Jamtara to Kolkata Packers and Movers
 * Route Slug: jamtara-to-kolkata-packers-and-movers
 * Description: Dedicated inter-state express relocation route from Jamtara and Mihijam to Kolkata metropolitan region and suburbs.
 * Focus Keywords: jamtara to kolkata packers and movers, packers and movers jamtara to kolkata, house shifting jamtara to kolkata, jamtara to kolkata luggage parcel, jamtara to kolkata car carrier, jamtara to kolkata bike transport
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Jamtara to Kolkata Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Safe Jamtara to Kolkata packers and movers. 255 km direct transit via NH-19 Durgapur expressway, corporate & IT transfer bills, 5-layer packing, car carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/jamtara-to-kolkata-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="jamtara to kolkata packers and movers, packers and movers jamtara to kolkata, house shifting jamtara to kolkata, jamtara to kolkata luggage parcel, jamtara to kolkata car carrier, jamtara to kolkata bike transport">
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

    <!-- Scoped CSS for Route 12 (Jamtara to Kolkata) -->
    <style>
        :root {
            --j2kol-primary: #1e3a8a;
            --j2kol-secondary: #0284c7;
            --j2kol-accent: #ea580c;
            --j2kol-accent-light: #ffedd5;
            --j2kol-dark: #0f172a;
            --j2kol-gray-bg: #f8fafc;
            --j2kol-border: #e2e8f0;
            --j2kol-card-shadow: 0 10px 25px -5px rgba(30, 58, 138, 0.08), 0 8px 10px -6px rgba(30, 58, 138, 0.04);
        }

        .j2kol-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 58, 138, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .j2kol-hero-badge {
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

        .j2kol-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2.1rem, 4.2vw, 3.2rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
            color: #ffffff;
        }

        .j2kol-hero p {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #cbd5e1;
            max-width: 780px;
            margin-bottom: 30px;
        }

        .j2kol-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .j2kol-btn-primary {
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

        .j2kol-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(234, 88, 12, 0.5);
            color: #ffffff;
        }

        .j2kol-btn-secondary {
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

        .j2kol-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.22);
            color: #ffffff;
        }

        .j2kol-stat-ribbon {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: var(--j2kol-card-shadow);
            margin-top: -35px;
            position: relative;
            z-index: 10;
            padding: 24px 30px;
            border: 1px solid var(--j2kol-border);
        }

        .j2kol-stat-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
            gap: 20px;
        }

        .j2kol-stat-item {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .j2kol-stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: var(--j2kol-accent-light);
            color: var(--j2kol-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            flex-shrink: 0;
        }

        .j2kol-stat-label {
            font-size: 0.85rem;
            color: #64748b;
            text-transform: uppercase;
            font-weight: 600;
            margin-bottom: 3px;
        }

        .j2kol-stat-val {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 800;
            color: var(--j2kol-dark);
        }

        .j2kol-section {
            padding: 70px 0;
        }

        .j2kol-section-alt {
            background: var(--j2kol-gray-bg);
            padding: 70px 0;
        }

        .j2kol-heading-wrap {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }

        .j2kol-pill {
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

        .j2kol-heading-wrap h2 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(1.85rem, 3.2vw, 2.5rem);
            font-weight: 800;
            color: var(--j2kol-dark);
            line-height: 1.25;
            margin-bottom: 15px;
        }

        .j2kol-heading-wrap p {
            color: #475569;
            font-size: 1.05rem;
            line-height: 1.65;
        }

        .j2kol-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 32px 28px;
            border: 1px solid var(--j2kol-border);
            box-shadow: var(--j2kol-card-shadow);
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .j2kol-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 30px -8px rgba(30, 58, 138, 0.12);
        }

        .j2kol-card-icon {
            width: 54px;
            height: 54px;
            background: #e0f2fe;
            color: var(--j2kol-secondary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .j2kol-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--j2kol-dark);
            margin-bottom: 12px;
        }

        .j2kol-card p {
            color: #64748b;
            font-size: 0.98rem;
            line-height: 1.65;
        }

        .j2kol-table-wrap {
            overflow-x: auto;
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--j2kol-border);
            box-shadow: var(--j2kol-card-shadow);
            margin: 35px 0 20px;
        }

        .j2kol-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            min-width: 650px;
        }

        .j2kol-table th {
            background: #1e3a8a;
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 700;
            font-size: 0.96rem;
        }

        .j2kol-table td {
            padding: 15px 20px;
            border-bottom: 1px solid var(--j2kol-border);
            color: #334155;
            font-size: 0.94rem;
        }

        .j2kol-table tr:hover td {
            background-color: #f8fafc;
        }

        .j2kol-route-pill-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 35px;
        }

        .j2kol-route-node {
            background: #ffffff;
            padding: 22px;
            border-radius: 10px;
            border-left: 4px solid var(--j2kol-accent);
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            border-top: 1px solid var(--j2kol-border);
            border-right: 1px solid var(--j2kol-border);
            border-bottom: 1px solid var(--j2kol-border);
        }

        .j2kol-route-node h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            color: var(--j2kol-dark);
            margin-bottom: 8px;
            font-weight: 700;
        }

        .j2kol-route-node p {
            color: #64748b;
            font-size: 0.92rem;
            line-height: 1.55;
            margin: 0;
        }

        .j2kol-img-showcase {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: var(--j2kol-card-shadow);
            margin-bottom: 24px;
            border: 1px solid var(--j2kol-border);
        }

        .j2kol-img-showcase img {
            width: 100%;
            height: 270px;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .j2kol-img-showcase:hover img {
            transform: scale(1.03);
        }

        .j2kol-img-caption {
            padding: 15px 18px;
            background: #ffffff;
            font-size: 0.92rem;
            font-weight: 600;
            color: var(--j2kol-dark);
            border-top: 1px solid var(--j2kol-border);
        }

        .j2kol-step-timeline {
            display: flex;
            flex-direction: column;
            gap: 24px;
            position: relative;
            margin-top: 40px;
        }

        .j2kol-step-card {
            display: flex;
            gap: 20px;
            background: #ffffff;
            padding: 24px;
            border-radius: 12px;
            border: 1px solid var(--j2kol-border);
            box-shadow: 0 4px 14px rgba(0,0,0,0.03);
        }

        .j2kol-step-num {
            width: 44px;
            height: 44px;
            background: var(--j2kol-primary);
            color: #ffffff;
            font-weight: 800;
            font-size: 1.25rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .j2kol-step-body h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--j2kol-dark);
            margin-bottom: 6px;
        }

        .j2kol-step-body p {
            color: #64748b;
            font-size: 0.94rem;
            line-height: 1.6;
            margin: 0;
        }

        .j2kol-faq-item {
            background: #ffffff;
            border: 1px solid var(--j2kol-border);
            border-radius: 10px;
            margin-bottom: 16px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.02);
        }

        .j2kol-faq-item summary {
            padding: 20px 24px;
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            font-size: 1.1rem;
            color: var(--j2kol-dark);
            cursor: pointer;
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #ffffff;
        }

        .j2kol-faq-item summary::-webkit-details-marker {
            display: none;
        }

        .j2kol-faq-item summary::after {
            content: "+";
            font-size: 1.4rem;
            font-weight: 400;
            color: var(--j2kol-accent);
        }

        .j2kol-faq-item[open] summary::after {
            content: "−";
        }

        .j2kol-faq-answer {
            padding: 0 24px 22px;
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
            border-top: 1px solid #f1f5f9;
            background: #fdfdfe;
        }

        .j2kol-review-card {
            background: #ffffff;
            padding: 26px;
            border-radius: 12px;
            border: 1px solid var(--j2kol-border);
            box-shadow: var(--j2kol-card-shadow);
        }

        .j2kol-review-stars {
            color: #f59e0b;
            font-size: 1.1rem;
            margin-bottom: 12px;
        }

        .j2kol-review-card p {
            font-style: italic;
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.6;
            margin-bottom: 16px;
        }

        .j2kol-review-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.88rem;
            border-top: 1px solid #f1f5f9;
            padding-top: 12px;
        }

        .j2kol-review-author {
            font-weight: 700;
            color: var(--j2kol-dark);
        }

        .j2kol-review-loc {
            color: #94a3b8;
        }

        .j2kol-highlight-box {
            background: linear-gradient(135deg, #eff6ff 0%, #fff7ed 100%);
            border: 1px solid #fed7aa;
            border-radius: 12px;
            padding: 28px;
            margin: 30px 0;
        }

        .j2kol-highlight-box h4 {
            font-family: 'Outfit', sans-serif;
            color: #c2410c;
            font-size: 1.25rem;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .j2kol-highlight-box p {
            color: #334155;
            font-size: 0.96rem;
            line-height: 1.65;
            margin: 0;
        }

        @media (max-width: 768px) {
            .j2kol-hero {
                padding: 60px 0 45px;
            }
            .j2kol-stat-ribbon {
                margin-top: 15px;
                padding: 20px;
            }
            .j2kol-cta-group {
                flex-direction: column;
                align-items: stretch;
            }
            .j2kol-btn-primary, .j2kol-btn-secondary {
                justify-content: center;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Jamtara to Kolkata",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "https://www.shreeashirwadpackers.com/#movingcompany",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91-8409531615",
        "priceRange": "₹6,000 - ₹45,000",
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
                "name": "Kolkata"
            }
        ],
        "description": "Premium inter-state relocation from Jamtara to Kolkata metropolitan region covering 1BHK, 2BHK, 3BHK flats, IT and corporate employee transfers, car carriers, and bike transport.",
        "offers": {
            "@type": "Offer",
            "priceCurrency": "INR",
            "price": "6000",
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
                "name": "Jamtara to Kolkata Route",
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
                "name": "What is the transit duration for shifting household goods from Jamtara to Kolkata?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The driving distance between Jamtara and Kolkata is approximately 255 kilometers. Our dedicated container fleet completes the journey within 7 to 9 hours via the Durgapur Expressway (NH-19) and Dankuni tollway, allowing next-morning or same-day night delivery."
                }
            },
            {
                "@type": "Question",
                "name": "How much does shifting cost from Jamtara to Kolkata?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Standard shifting charges from Jamtara to Kolkata range from ₹6,000 to ₹10,500 for 1 RK / small flats, ₹11,000 to ₹17,500 for a standard 2 BHK home, and ₹18,500 to ₹32,000 for large 3 BHK family residences. Exact pricing depends on volume, elevator status, and packing tier."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide relocation bills for IT and multinational corporate transfers in Kolkata?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, absolutely. We issue 100% compliant GST invoices, IBA-format consignment notes (bilty), detailed packing inventories, and money receipts required for HR relocation allowances across Sector V Salt Lake, New Town, and Kolkata corporate offices."
                }
            },
            {
                "@type": "Question",
                "name": "Can you shift household goods into high-rise apartment complexes in Rajarhat New Town or South Kolkata?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our delivery crew manages multi-story tower moves across New Town Action Area 1-3, Salt Lake, Rajarhat, EM Bypass, and South Kolkata, complying with gated society entry guidelines and utilizing high-speed service lifts."
                }
            },
            {
                "@type": "Question",
                "name": "How do you transport motor cars or two-wheelers to Kolkata?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We operate enclosed hydraulic car carriers and secured closed-container bike parcel services with wheel chocks, scratch-resistant corrugated wrapping, and tie-down lashings from Jamtara and Mihijam straight to your Kolkata residence."
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
            <li style="color: #64748b;" aria-current="page">Jamtara to Kolkata</li>
        </ol>
    </div>
</nav>

<!-- Hero Section -->
<section class="j2kol-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="j2kol-hero-badge">Inter-State Metro Link &bull; 255 KM Express Highway</span>
                <h1>Reliable Jamtara to Kolkata Packers and Movers</h1>
                <p>
                    Relocating from Jamtara or Mihijam to Kolkata metropolitan city? Shree Ashirwad Packers and Movers delivers prompt, zero-damage household relocation, corporate employee transit, and specialized vehicle transportation. Seamlessly moving families and IT professionals across Mihijam, Karmatar, and Jamtara to Salt Lake, New Town, Rajarhat, Howrah, Garia, and South Kolkata.
                </p>
                <div class="j2kol-cta-group">
                    <a href="tel:08409531615" class="j2kol-btn-primary">
                        <i class="fa fa-phone"></i> Call 8409531615 for Free Quote
                    </a>
                    <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Jamtara%20to%20Kolkata%20relocation" class="j2kol-btn-secondary" target="_blank" rel="noopener">
                        <i class="fa fa-whatsapp"></i> WhatsApp Instant Estimate
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Ribbon -->
<div class="container">
    <div class="j2kol-stat-ribbon">
        <div class="j2kol-stat-grid">
            <div class="j2kol-stat-item">
                <div class="j2kol-stat-icon"><i class="fa fa-road"></i></div>
                <div>
                    <div class="j2kol-stat-label">Highway Distance</div>
                    <div class="j2kol-stat-val">~255 Kilometers</div>
                </div>
            </div>
            <div class="j2kol-stat-item">
                <div class="j2kol-stat-icon"><i class="fa fa-clock-o"></i></div>
                <div>
                    <div class="j2kol-stat-label">Door Delivery Time</div>
                    <div class="j2kol-stat-val">7 - 9 Hours</div>
                </div>
            </div>
            <div class="j2kol-stat-item">
                <div class="j2kol-stat-icon"><i class="fa fa-shield"></i></div>
                <div>
                    <div class="j2kol-stat-label">Goods Security</div>
                    <div class="j2kol-stat-val">Zero-Transit Loss</div>
                </div>
            </div>
            <div class="j2kol-stat-item">
                <div class="j2kol-stat-icon"><i class="fa fa-file-text-o"></i></div>
                <div>
                    <div class="j2kol-stat-label">GST Corporate Invoices</div>
                    <div class="j2kol-stat-val">100% Reimbursement</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Strategic Content Section -->
<section class="j2kol-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="j2kol-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Waterproof closed container truck for Jamtara to Kolkata transit" loading="lazy">
                    <div class="j2kol-img-caption">
                        <i class="fa fa-truck" style="color: var(--j2kol-accent); margin-right: 8px;"></i>
                        Waterproof container trucks operating daily along the Jamtara &rarr; Asansol &rarr; Kolkata NH-19 corridor.
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="j2kol-pill">Jharkhand to Bengal Capital Link</div>
                <h2 style="font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--j2kol-dark); font-size: 2.1rem; margin-bottom: 18px;">
                    Fast, Safe & Organized Moving Between Jamtara and Kolkata
                </h2>
                <p style="color: #475569; font-size: 1.02rem; line-height: 1.7; margin-bottom: 16px;">
                    Connecting Jamtara district with the city of Joy, Kolkata represents one of the most prominent inter-state relocation routes from Santhal Pargana. Because of deep cultural, educational, and commercial relationships between Bengal and Jamtara (historically home to Ishwar Chandra Vidyasagar in Karmatar), hundreds of families, students, and corporate personnel move annually between these regions.
                </p>
                <p style="color: #475569; font-size: 1.02rem; line-height: 1.7; margin-bottom: 20px;">
                    Shree Ashirwad Packers and Movers eliminates all shifting friction. Our experienced moving crew handles full packaging at your Jamtara, Mihijam, or Karmatar residence using heavy-duty 5-layer corrugated sheets, air-bubble cushioning, foam edge protectors, and tamper-resistant shrink films. We secure your inventory into closed-body weather-sealed container trucks designed specifically to handle varying highway conditions without shifting or vibrating contents.
                </p>
                <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                    <div style="flex: 1 1 200px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px 18px;">
                        <strong style="color: #1e3a8a; display: block; margin-bottom: 4px;"><i class="fa fa-check-circle text-success"></i> Direct Expressway Transit</strong>
                        <span style="color: #64748b; font-size: 0.9rem;">Smooth 6-lane Durgapur Expressway corridor.</span>
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
<section class="j2kol-section-alt">
    <div class="container">
        <div class="j2kol-heading-wrap">
            <span class="j2kol-pill">Navigation Blueprint</span>
            <h2>Route Geography & Highway Transit Analysis</h2>
            <p>
                A high-speed 255 km expressway corridor connects Jamtara with Kolkata via Asansol, Durgapur, Panagarh, and Dankuni, providing prompt, reliable transit.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="j2kol-card">
                    <div class="j2kol-card-icon"><i class="fa fa-map-signs"></i></div>
                    <h3>Primary Transit Corridor</h3>
                    <p>
                        The preferred freight route proceeds from Jamtara via Mihijam into West Bengal, picking up the six-lane NH-19 (Durgapur Expressway) through Asansol, Raniganj, Durgapur, Panagarh bypass, Burdwan, and Dankuni directly into Kolkata.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="j2kol-card">
                    <div class="j2kol-card-icon"><i class="fa fa-clock-o"></i></div>
                    <h3>Kolkata Entry Timing & No-Entry Rules</h3>
                    <p>
                        Heavy freight commercial trucks entering Kolkata via Vidyasagar Setu or Nivedita Setu are restricted during daytime hours (8 AM to 8 PM). Our drivers carefully time departures from Jamtara so that arrival aligns with unrestricted night and early-morning entry windows.
                    </p>
                </div>
            </div>
            <div class="j2kol-card">
                <div class="j2kol-card-icon"><i class="fa fa-shield"></i></div>
                <h3>Dedicated Container Security</h3>
                <p>
                    Every container vehicle is fitted with GPS navigation and constant driver communication. Clients receive active milestone updates as the vehicle passes Asansol, Burdwan, Dankuni toll plaza, and reaches your destination in Kolkata.
                </p>
            </div>
        </div>

        <!-- Major Node Points -->
        <div class="j2kol-route-pill-grid">
            <div class="j2kol-route-node">
                <h4>1. Origin Pickups: Jamtara Region</h4>
                <p>Full-service coverage across Mihijam, Karmatar (Vidyasagar), Court Road, Dumka Road, Nala, Kundahit, and residential housing colonies.</p>
            </div>
            <div class="j2kol-route-node">
                <h4>2. Mid-Transit Waypoints</h4>
                <p>Rapid transit via Mihijam border, Asansol NH-19, Panagarh bypass, Burdwan elevated corridor, and Dankuni intersection.</p>
            </div>
            <div class="j2kol-route-node">
                <h4>3. Destination Delivery: Kolkata Metro</h4>
                <p>Doorstep delivery, room placement, and debris removal in Salt Lake, New Town, Rajarhat, Howrah, Behala, Garia, and Alipore.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Portfolio Grid -->
<section class="j2kol-section">
    <div class="container">
        <div class="j2kol-heading-wrap">
            <span class="j2kol-pill">Comprehensive Relocation Services</span>
            <h2>Tailored Shifting Solutions for Every Move</h2>
            <p>
                Whether you are moving a compact bachelor apartment, a luxury duplex, sensitive IT servers, or your personal automobile, Shree Ashirwad provides dedicated specialized solutions.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="j2kol-card">
                    <div class="j2kol-card-icon"><i class="fa fa-home"></i></div>
                    <h3>Household Goods Shifting</h3>
                    <p>
                        Comprehensive packing for wardrobes, modular beds, dining tables, sofa sets, kitchen glassware, and delicate home electronics using multi-layer protective packaging.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="j2kol-card">
                    <div class="j2kol-card-icon"><i class="fa fa-briefcase"></i></div>
                    <h3>Corporate & IT Employee Relocation</h3>
                    <p>
                        Turnkey relocation solutions compliant with corporate transfer guidelines. Includes customized packing schedules, priority unpacking, and GST-ready invoices.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="j2kol-card">
                    <div class="j2kol-card-icon"><i class="fa fa-car"></i></div>
                    <h3>Dedicated Car Carrier Service</h3>
                    <p>
                        Safe, damage-free motor car transportation utilizing enclosed hydraulic car haulers. Equipped with tire locks, safety harnesses, and transit insurance coverage.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="j2kol-card">
                    <div class="j2kol-card-icon"><i class="fa fa-motorcycle"></i></div>
                    <h3>Two-Wheeler Parcel Service</h3>
                    <p>
                        High-security bike parcel handling. Motorcycles and scooters are wrapped in corrugated wrap, bubble sheets, and wooden pallets to prevent highway scratches.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="j2kol-card">
                    <div class="j2kol-card-icon"><i class="fa fa-building"></i></div>
                    <h3>Industrial & Office Relocation</h3>
                    <p>
                        Disassembly, packing, and reinstallation of office workstations, server racks, desktop computer terminals, and sensitive commercial documents with minimal business downtime.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="j2kol-card">
                    <div class="j2kol-card-icon"><i class="fa fa-shield"></i></div>
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
<section class="j2kol-section-alt">
    <div class="container">
        <div class="j2kol-heading-wrap">
            <span class="j2kol-pill">Transparent Quotations</span>
            <h2>Jamtara to Kolkata Shifting Cost Matrix</h2>
            <p>
                We believe in 100% upfront pricing with zero hidden charges, transparent toll calculations, and fair labour rates for door-to-door relocation.
            </p>
        </div>

        <div class="j2kol-table-wrap">
            <table class="j2kol-table">
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
                        <td>₹6,000 - ₹10,500</td>
                        <td>Same Day Night / 24 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>1 BHK Apartment Complete Move</strong></td>
                        <td>Premium 4-Layer Foam + Bubble</td>
                        <td>14-ft Closed Container</td>
                        <td>₹10,500 - ₹16,000</td>
                        <td>24 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Family Home Relocation</strong></td>
                        <td>Executive 5-Layer Heavy Duty</td>
                        <td>17-ft / 19-ft Sealed Container</td>
                        <td>₹15,000 - ₹22,500</td>
                        <td>24 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK / Independent Bungalow</strong></td>
                        <td>Ultra-Secure Multi-Layer & Wooden Crates</td>
                        <td>20-ft / 24-ft Container Truck</td>
                        <td>₹21,000 - ₹34,000</td>
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
                        <td>₹7,500 - ₹12,500</td>
                        <td>24 to 48 Hours</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="text-align: center; color: #64748b; font-size: 0.9rem; margin-top: 15px;">
            <em>Note: The charges outlined above are indicative and vary based on consignment volume, floor levels, elevator availability, and chosen insurance value. Call 8409531615 for a precise doorstep estimate.</em>
        </p>

        <div class="j2kol-highlight-box">
            <h4><i class="fa fa-info-circle"></i> Why Dedicated Sealed Containers Matter for Long-Distance Metro Moves</h4>
            <p>
                For routes between Jamtara and Kolkata, choosing our dedicated closed-door container guarantees that your household effects are never mixed with external commercial cargo. Once packed at your Jamtara doorstep, the container doors are padlocked and seal-tagged in your presence, and will only be unsealed when the vehicle pulls into your new home driveway in Salt Lake, New Town, or South Kolkata.
            </p>
        </div>
    </div>
</section>

<!-- Visual Gallery & Packaging Methodology -->
<section class="j2kol-section">
    <div class="container">
        <div class="j2kol-heading-wrap">
            <span class="j2kol-pill">Packaging Standards</span>
            <h2>Our High-Grade Packaging & Handling Standards</h2>
            <p>
                From delicate chinaware to heavy teakwood beds, see how our trained packaging specialists safeguard your valuable possessions during transit.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="j2kol-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="High grade multi layer household goods packing by Shree Ashirwad crew" loading="lazy">
                    <div class="j2kol-img-caption">
                        <strong>5-Layer Cushioning:</strong> Bubble wraps and high-density foam blankets protect wooden finishes and glass panels.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="j2kol-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car loading onto closed hydraulic transport carrier" loading="lazy">
                    <div class="j2kol-img-caption">
                        <strong>Secured Vehicle Carriers:</strong> Hydraulic ramps and tire lashings ensure scratch-free automobile transport.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="j2kol-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Professional unpacking and room setup service in Kolkata" loading="lazy">
                    <div class="j2kol-img-caption">
                        <strong>Room-Wise Unpacking:</strong> Reassembly of beds, furniture placement, and debris clean-up at your Kolkata residence.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5-Step Process Timeline -->
<section class="j2kol-section-alt">
    <div class="container">
        <div class="j2kol-heading-wrap">
            <span class="j2kol-pill">Execution Plan</span>
            <h2>Our 5-Step Seamless Relocation Process</h2>
            <p>
                We have perfected an organized, transparent, and stress-free moving pipeline refined through hundreds of successful relocations.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="j2kol-step-timeline">
                    <div class="j2kol-step-card">
                        <div class="j2kol-step-num">1</div>
                        <div class="j2kol-step-body">
                            <h4>Pre-Move Survey & Free Quotation</h4>
                            <p>We review your shifting requirements either via in-home survey in Jamtara or through video inventory assessment. We provide a clear, all-inclusive written estimate detailing transport, packing, labor, and GST.</p>
                        </div>
                    </div>
                    <div class="j2kol-step-card">
                        <div class="j2kol-step-num">2</div>
                        <div class="j2kol-step-body">
                            <h4>Standardized Multi-Layer Packing</h4>
                            <p>Our experienced packaging crew arrives on moving day with specialized materials. Every piece of furniture, electronic gadget, and fragile kitchenware is labeled and wrapped following strict safety guidelines.</p>
                        </div>
                    </div>
                    <div class="j2kol-step-card">
                        <div class="j2kol-step-num">3</div>
                        <div class="j2kol-step-body">
                            <h4>Systematic Loading & Container Sealing</h4>
                            <p>Heavier goods are loaded at base level with shock-absorbing foam pads, followed by lighter carton boxes and mattress bags. Once loaded, the container is locked and sealed in front of you.</p>
                        </div>
                    </div>
                    <div class="j2kol-step-card">
                        <div class="j2kol-step-num">4</div>
                        <div class="j2kol-step-body">
                            <h4>Direct Highway Transit via NH-19</h4>
                            <p>Our professional highway drivers navigate the 255 km route through Durgapur Expressway smoothly, maintaining steady speeds and avoiding bumpy bypass roads to eliminate shifting stress.</p>
                        </div>
                    </div>
                    <div class="j2kol-step-card">
                        <div class="j2kol-step-num">5</div>
                        <div class="j2kol-step-body">
                            <h4>Unloading, Furniture Setup & Debris Removal</h4>
                            <p>Upon arrival in Kolkata, our team carries cartons into designated rooms, reassembles beds and dining tables, assists in unpacking, and disposes of discarded packing sheets cleanly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Customer Reviews Section -->
<section class="j2kol-section">
    <div class="container">
        <div class="j2kol-heading-wrap">
            <span class="j2kol-pill">Client Testimonials</span>
            <h2>What Our Relocated Customers Say</h2>
            <p>
                Read verified reviews from professionals and families who recently shifted from Jamtara to Kolkata with Shree Ashirwad.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="j2kol-review-card">
                    <div class="j2kol-review-stars">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p>
                        "I was transferred from Jamtara to an IT company in New Town, Kolkata. Shree Ashirwad Packers packed my 3BHK household goods with unbelievable care. Not a single ceramic plate broke, and their GST invoice was reimbursed smoothly by my office."
                    </p>
                    <div class="j2kol-review-meta">
                        <span class="j2kol-review-author">Anirban Mukherjee</span>
                        <span class="j2kol-review-loc">Shifted to New Town, Kolkata</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="j2kol-review-card">
                    <div class="j2kol-review-stars">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p>
                        "Relocated our complete home from Mihijam to Salt Lake Sector 2. Their team loaded everything in the morning and the container delivered goods early next morning. Professional behavior and zero hidden expenses."
                    </p>
                    <div class="j2kol-review-meta">
                        <span class="j2kol-review-author">Swati Ghosh</span>
                        <span class="j2kol-review-loc">Shifted to Salt Lake, Kolkata</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="j2kol-review-card">
                    <div class="j2kol-review-stars">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p>
                        "Booked my Maruti Baleno along with a 2BHK flat shifting from Karmatar to Behala. Both the car and furniture arrived in immaculate condition. Highly recommended logistics partner!"
                    </p>
                    <div class="j2kol-review-meta">
                        <span class="j2kol-review-author">Tapas Sen</span>
                        <span class="j2kol-review-loc">Shifted to Behala, Kolkata</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions Section -->
<section class="j2kol-section-alt">
    <div class="container">
        <div class="j2kol-heading-wrap">
            <span class="j2kol-pill">Have Questions?</span>
            <h2>Frequently Asked Questions About Jamtara to Kolkata Shifting</h2>
            <p>
                Find answers to common questions about moving schedules, packing methods, insurance documentation, and delivery commitments.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <details class="j2kol-faq-item" open>
                    <summary>What is the transit duration for shifting household goods from Jamtara to Kolkata?</summary>
                    <div class="j2kol-faq-answer">
                        The driving distance between Jamtara and Kolkata is approximately 255 kilometers. Our dedicated container fleet completes the journey within 7 to 9 hours via the Durgapur Expressway (NH-19) and Dankuni tollway, allowing next-morning or same-day night delivery.
                    </div>
                </details>

                <details class="j2kol-faq-item">
                    <summary>How much does shifting cost from Jamtara to Kolkata?</summary>
                    <div class="j2kol-faq-answer">
                        Standard shifting charges from Jamtara to Kolkata range from ₹6,000 to ₹10,500 for 1 RK / small flats, ₹11,000 to ₹17,500 for a standard 2 BHK home, and ₹18,500 to ₹32,000 for large 3 BHK family residences. Exact pricing depends on volume, elevator status, and packing tier.
                    </div>
                </details>

                <details class="j2kol-faq-item">
                    <summary>Do you provide relocation bills for IT and multinational corporate transfers in Kolkata?</summary>
                    <div class="j2kol-faq-answer">
                        Yes, absolutely. We issue 100% compliant GST invoices, IBA-format consignment notes (bilty), detailed packing inventories, and money receipts required for HR relocation allowances across Sector V Salt Lake, New Town, and Kolkata corporate offices.
                    </div>
                </details>

                <details class="j2kol-faq-item">
                    <summary>Can you shift household goods into high-rise apartment complexes in Rajarhat New Town or South Kolkata?</summary>
                    <div class="j2kol-faq-answer">
                        Yes, our delivery crew manages multi-story tower moves across New Town Action Area 1-3, Salt Lake, Rajarhat, EM Bypass, and South Kolkata, complying with gated society entry guidelines and utilizing high-speed service lifts.
                    </div>
                </details>

                <details class="j2kol-faq-item">
                    <summary>How do you transport motor cars or two-wheelers to Kolkata?</summary>
                    <div class="j2kol-faq-answer">
                        We operate enclosed hydraulic car carriers and secured closed-container bike parcel services with wheel chocks, scratch-resistant corrugated wrapping, and tie-down lashings from Jamtara and Mihijam straight to your Kolkata residence.
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
            Planning Your Move to Kolkata?
        </h2>
        <p style="color: #cbd5e1; font-size: 1.15rem; max-width: 680px; margin: 0 auto 35px; line-height: 1.7;">
            Contact us today for a free, transparent shifting estimate. Let Jharkhand and Bengal's premier moving team deliver your household treasures with unmatched care and reliability.
        </p>
        <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
            <a href="tel:08409531615" class="j2kol-btn-primary" style="font-size: 1.1rem; padding: 16px 36px;">
                <i class="fa fa-phone"></i> Call 08409531615
            </a>
            <a href="https://wa.me/918409531615?text=Hi%20Shree%20Ashirwad,%20I%20want%20to%20book%20Jamtara%20to%20Kolkata%20shifting" class="j2kol-btn-secondary" style="font-size: 1.1rem; padding: 16px 36px;" target="_blank" rel="noopener">
                <i class="fa fa-whatsapp"></i> Chat on WhatsApp
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>
