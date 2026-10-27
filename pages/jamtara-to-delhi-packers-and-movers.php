<?php
/**
 * Page Name: Jamtara to Delhi Packers and Movers
 * Route Slug: jamtara-to-delhi-packers-and-movers
 * Description: Long-distance nationwide relocation route connecting Jamtara to Delhi NCR, Noida, and Gurgaon.
 * Focus Keywords: jamtara to delhi packers and movers, packers and movers jamtara to delhi, house shifting jamtara to delhi, jamtara to delhi luggage parcel, jamtara to delhi car carrier, jamtara to gurgaon packers and movers
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Jamtara to Delhi Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Premier Jamtara to Delhi packers and movers. 1230 km express transit via NH-19 & Yamuna Expressway, central govt & defence transfer bills, 5-layer packing, car carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/jamtara-to-delhi-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="jamtara to delhi packers and movers, packers and movers jamtara to delhi, house shifting jamtara to delhi, jamtara to delhi luggage parcel, jamtara to delhi car carrier, jamtara to gurgaon packers and movers">
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

    <!-- Scoped CSS for Route 14 (Jamtara to Delhi) -->
    <style>
        :root {
            --j2del-primary: #1e3a8a;
            --j2del-secondary: #0284c7;
            --j2del-accent: #ea580c;
            --j2del-accent-light: #ffedd5;
            --j2del-dark: #0f172a;
            --j2del-gray-bg: #f8fafc;
            --j2del-border: #e2e8f0;
            --j2del-card-shadow: 0 10px 25px -5px rgba(30, 58, 138, 0.08), 0 8px 10px -6px rgba(30, 58, 138, 0.04);
        }

        .j2del-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 58, 138, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .j2del-hero-badge {
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

        .j2del-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2.1rem, 4.2vw, 3.2rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
            color: #ffffff;
        }

        .j2del-hero p {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #cbd5e1;
            max-width: 780px;
            margin-bottom: 30px;
        }

        .j2del-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .j2del-btn-primary {
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

        .j2del-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(234, 88, 12, 0.5);
            color: #ffffff;
        }

        .j2del-btn-secondary {
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

        .j2del-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.22);
            color: #ffffff;
        }

        .j2del-stat-ribbon {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: var(--j2del-card-shadow);
            margin-top: -35px;
            position: relative;
            z-index: 10;
            padding: 24px 30px;
            border: 1px solid var(--j2del-border);
        }

        .j2del-stat-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
            gap: 20px;
        }

        .j2del-stat-item {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .j2del-stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: var(--j2del-accent-light);
            color: var(--j2del-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            flex-shrink: 0;
        }

        .j2del-stat-label {
            font-size: 0.85rem;
            color: #64748b;
            text-transform: uppercase;
            font-weight: 600;
            margin-bottom: 3px;
        }

        .j2del-stat-val {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 800;
            color: var(--j2del-dark);
        }

        .j2del-section {
            padding: 70px 0;
        }

        .j2del-section-alt {
            background: var(--j2del-gray-bg);
            padding: 70px 0;
        }

        .j2del-heading-wrap {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }

        .j2del-pill {
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

        .j2del-heading-wrap h2 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(1.85rem, 3.2vw, 2.5rem);
            font-weight: 800;
            color: var(--j2del-dark);
            line-height: 1.25;
            margin-bottom: 15px;
        }

        .j2del-heading-wrap p {
            color: #475569;
            font-size: 1.05rem;
            line-height: 1.65;
        }

        .j2del-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 32px 28px;
            border: 1px solid var(--j2del-border);
            box-shadow: var(--j2del-card-shadow);
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .j2del-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 30px -8px rgba(30, 58, 138, 0.12);
        }

        .j2del-card-icon {
            width: 54px;
            height: 54px;
            background: #e0f2fe;
            color: var(--j2del-secondary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .j2del-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--j2del-dark);
            margin-bottom: 12px;
        }

        .j2del-card p {
            color: #64748b;
            font-size: 0.98rem;
            line-height: 1.65;
        }

        .j2del-table-wrap {
            overflow-x: auto;
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--j2del-border);
            box-shadow: var(--j2del-card-shadow);
            margin: 35px 0 20px;
        }

        .j2del-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            min-width: 650px;
        }

        .j2del-table th {
            background: #1e3a8a;
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 700;
            font-size: 0.96rem;
        }

        .j2del-table td {
            padding: 15px 20px;
            border-bottom: 1px solid var(--j2del-border);
            color: #334155;
            font-size: 0.94rem;
        }

        .j2del-table tr:hover td {
            background-color: #f8fafc;
        }

        .j2del-route-pill-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 35px;
        }

        .j2del-route-node {
            background: #ffffff;
            padding: 22px;
            border-radius: 10px;
            border-left: 4px solid var(--j2del-accent);
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            border-top: 1px solid var(--j2del-border);
            border-right: 1px solid var(--j2del-border);
            border-bottom: 1px solid var(--j2del-border);
        }

        .j2del-route-node h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            color: var(--j2del-dark);
            margin-bottom: 8px;
            font-weight: 700;
        }

        .j2del-route-node p {
            color: #64748b;
            font-size: 0.92rem;
            line-height: 1.55;
            margin: 0;
        }

        .j2del-img-showcase {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: var(--j2del-card-shadow);
            margin-bottom: 24px;
            border: 1px solid var(--j2del-border);
        }

        .j2del-img-showcase img {
            width: 100%;
            height: 270px;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .j2del-img-showcase:hover img {
            transform: scale(1.03);
        }

        .j2del-img-caption {
            padding: 15px 18px;
            background: #ffffff;
            font-size: 0.92rem;
            font-weight: 600;
            color: var(--j2del-dark);
            border-top: 1px solid var(--j2del-border);
        }

        .j2del-step-timeline {
            display: flex;
            flex-direction: column;
            gap: 24px;
            position: relative;
            margin-top: 40px;
        }

        .j2del-step-card {
            display: flex;
            gap: 20px;
            background: #ffffff;
            padding: 24px;
            border-radius: 12px;
            border: 1px solid var(--j2del-border);
            box-shadow: 0 4px 14px rgba(0,0,0,0.03);
        }

        .j2del-step-num {
            width: 44px;
            height: 44px;
            background: var(--j2del-primary);
            color: #ffffff;
            font-weight: 800;
            font-size: 1.25rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .j2del-step-body h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--j2del-dark);
            margin-bottom: 6px;
        }

        .j2del-step-body p {
            color: #64748b;
            font-size: 0.94rem;
            line-height: 1.6;
            margin: 0;
        }

        .j2del-faq-item {
            background: #ffffff;
            border: 1px solid var(--j2del-border);
            border-radius: 10px;
            margin-bottom: 16px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.02);
        }

        .j2del-faq-item summary {
            padding: 20px 24px;
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            font-size: 1.1rem;
            color: var(--j2del-dark);
            cursor: pointer;
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #ffffff;
        }

        .j2del-faq-item summary::-webkit-details-marker {
            display: none;
        }

        .j2del-faq-item summary::after {
            content: "+";
            font-size: 1.4rem;
            font-weight: 400;
            color: var(--j2del-accent);
        }

        .j2del-faq-item[open] summary::after {
            content: "−";
        }

        .j2del-faq-answer {
            padding: 0 24px 22px;
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
            border-top: 1px solid #f1f5f9;
            background: #fdfdfe;
        }

        .j2del-review-card {
            background: #ffffff;
            padding: 26px;
            border-radius: 12px;
            border: 1px solid var(--j2del-border);
            box-shadow: var(--j2del-card-shadow);
        }

        .j2del-review-stars {
            color: #f59e0b;
            font-size: 1.1rem;
            margin-bottom: 12px;
        }

        .j2del-review-card p {
            font-style: italic;
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.6;
            margin-bottom: 16px;
        }

        .j2del-review-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.88rem;
            border-top: 1px solid #f1f5f9;
            padding-top: 12px;
        }

        .j2del-review-author {
            font-weight: 700;
            color: var(--j2del-dark);
        }

        .j2del-review-loc {
            color: #94a3b8;
        }

        .j2del-highlight-box {
            background: linear-gradient(135deg, #eff6ff 0%, #fff7ed 100%);
            border: 1px solid #fed7aa;
            border-radius: 12px;
            padding: 28px;
            margin: 30px 0;
        }

        .j2del-highlight-box h4 {
            font-family: 'Outfit', sans-serif;
            color: #c2410c;
            font-size: 1.25rem;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .j2del-highlight-box p {
            color: #334155;
            font-size: 0.96rem;
            line-height: 1.65;
            margin: 0;
        }

        @media (max-width: 768px) {
            .j2del-hero {
                padding: 60px 0 45px;
            }
            .j2del-stat-ribbon {
                margin-top: 15px;
                padding: 20px;
            }
            .j2del-cta-group {
                flex-direction: column;
                align-items: stretch;
            }
            .j2del-btn-primary, .j2del-btn-secondary {
                justify-content: center;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Jamtara to Delhi",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "https://www.shreeashirwadpackers.com/#movingcompany",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91-8409531615",
        "priceRange": "₹12,000 - ₹75,000",
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
                "name": "Delhi"
            }
        ],
        "description": "Long-distance nationwide moving service from Jamtara to Delhi NCR covering central government transfers, defence personnel relocations, corporate moves, car carriers, and bike transport.",
        "offers": {
            "@type": "Offer",
            "priceCurrency": "INR",
            "price": "12000",
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
                "name": "Jamtara to Delhi Route",
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
                "name": "What is the transit duration for shifting household goods from Jamtara to Delhi NCR?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Jamtara and Delhi NCR is approximately 1,230 kilometers. Our dedicated container fleet completes the journey within 48 to 72 hours via NH-19 (Grand Trunk Road) and the Agra-Lucknow / Yamuna Expressway network."
                }
            },
            {
                "@type": "Question",
                "name": "How much does shifting cost from Jamtara to Delhi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Standard shifting charges from Jamtara to Delhi range from ₹12,000 to ₹18,000 for 1 RK / small studio flats, ₹18,000 to ₹28,500 for a standard 2 BHK home, and ₹29,000 to ₹48,000 for large 3 BHK family residences. Exact pricing depends on volume, elevator status, and packing tier."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide relocation bills for central government and defence transfers to Delhi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, absolutely. We issue 100% compliant GST invoices, IBA-format consignment notes (bilty), detailed packing inventories, and money receipts required for HR relocation allowances across ministries, paramilitary, defence forces, and private corporates."
                }
            },
            {
                "@type": "Question",
                "name": "Can you shift household goods into high-rise apartment complexes in Noida, Gurgaon, or Dwarka?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our delivery crew manages multi-story tower moves across Noida Sectors, Expressway societies, Gurgaon Golf Course Road, Cyber City, Dwarka, and Greater Noida, complying with gated society entry guidelines and utilizing high-speed service lifts."
                }
            },
            {
                "@type": "Question",
                "name": "How do you transport motor cars or two-wheelers to Delhi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We operate enclosed hydraulic car carriers and secured closed-container bike parcel services with wheel chocks, scratch-resistant corrugated wrapping, and tie-down lashings from Jamtara and Mihijam straight to your Delhi NCR residence."
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
            <li style="color: #64748b;" aria-current="page">Jamtara to Delhi</li>
        </ol>
    </div>
</nav>

<!-- Hero Section -->
<section class="j2del-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="j2del-hero-badge">Nationwide Express Highway Corridor &bull; 1230 KM</span>
                <h1>Reliable Jamtara to Delhi Packers and Movers</h1>
                <p>
                    Relocating from Jamtara or Mihijam to Delhi, Noida, Gurgaon, or Ghaziabad? Shree Ashirwad Packers and Movers delivers prompt, zero-damage domestic shifting, central government and defence employee relocations, and specialized vehicle transportation. Seamless doorstep service across Mihijam, Karmatar, and Jamtara to Dwarka, Rohini, South Delhi, Noida, and Gurugram.
                </p>
                <div class="j2del-cta-group">
                    <a href="tel:08409531615" class="j2del-btn-primary">
                        <i class="fa fa-phone"></i> Call 8409531615 for Free Quote
                    </a>
                    <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Jamtara%20to%20Delhi%20relocation" class="j2del-btn-secondary" target="_blank" rel="noopener">
                        <i class="fa fa-whatsapp"></i> WhatsApp Instant Estimate
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Ribbon -->
<div class="container">
    <div class="j2del-stat-ribbon">
        <div class="j2del-stat-grid">
            <div class="j2del-stat-item">
                <div class="j2del-stat-icon"><i class="fa fa-road"></i></div>
                <div>
                    <div class="j2del-stat-label">Highway Distance</div>
                    <div class="j2del-stat-val">~1,230 Kilometers</div>
                </div>
            </div>
            <div class="j2del-stat-item">
                <div class="j2del-stat-icon"><i class="fa fa-clock-o"></i></div>
                <div>
                    <div class="j2del-stat-label">Door Delivery Time</div>
                    <div class="j2del-stat-val">48 - 72 Hours</div>
                </div>
            </div>
            <div class="j2del-stat-item">
                <div class="j2del-stat-icon"><i class="fa fa-shield"></i></div>
                <div>
                    <div class="j2del-stat-label">Goods Security</div>
                    <div class="j2del-stat-val">Zero-Transit Loss</div>
                </div>
            </div>
            <div class="j2del-stat-item">
                <div class="j2del-stat-icon"><i class="fa fa-file-text-o"></i></div>
                <div>
                    <div class="j2del-stat-label">GST Corporate Invoices</div>
                    <div class="j2del-stat-val">100% Reimbursement</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Strategic Content Section -->
<section class="j2del-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="j2del-img-showcase">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Waterproof closed container truck for Jamtara to Delhi transit" loading="lazy">
                    <div class="j2del-img-caption">
                        <i class="fa fa-truck" style="color: var(--j2del-accent); margin-right: 8px;"></i>
                        Waterproof container trucks operating along the Jamtara &rarr; NH-19 &rarr; Delhi NCR corridor.
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="j2del-pill">Nationwide Long-Distance Moving</div>
                <h2 style="font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--j2del-dark); font-size: 2.1rem; margin-bottom: 18px;">
                    Safe, Fast & Reliable Moving from Jamtara to Delhi NCR
                </h2>
                <p style="color: #475569; font-size: 1.02rem; line-height: 1.7; margin-bottom: 16px;">
                    Relocating 1,230 kilometers from Jamtara to the National Capital Region (Delhi, Gurgaon, Noida, Ghaziabad, Faridabad) requires seasoned logistics expertise, heavy-duty packing, and reliable long-haul container trucks. Whether you are a central government employee transferred to a Delhi ministry, an IT professional moving to Cyber City Gurgaon, or a family relocating permanently, Shree Ashirwad Packers guarantees total safety.
                </p>
                <p style="color: #475569; font-size: 1.02rem; line-height: 1.7; margin-bottom: 20px;">
                    Our specialized packaging crews use export-grade 5-layer corrugated sheets, high-density bubble rolls, edge corner cushions, and stretch film to shield every item from vibrations and changing climate zones across Jharkhand, Bihar, Uttar Pradesh, and Delhi NCR. Your goods are locked in dedicated container trucks, sealed in your presence, and tracked via active GPS until delivery at your Delhi doorstep.
                </p>
                <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                    <div style="flex: 1 1 200px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px 18px;">
                        <strong style="color: #1e3a8a; display: block; margin-bottom: 4px;"><i class="fa fa-check-circle text-success"></i> Direct Sealed Container</strong>
                        <span style="color: #64748b; font-size: 0.9rem;">No hub offloading or midway transshipment.</span>
                    </div>
                    <div style="flex: 1 1 200px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px 18px;">
                        <strong style="color: #1e3a8a; display: block; margin-bottom: 4px;"><i class="fa fa-check-circle text-success"></i> Govt & Corporate Bills</strong>
                        <span style="color: #64748b; font-size: 0.9rem;">100% claim-compliant GST invoice & bilty.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Route Geography & Highway Overview -->
<section class="j2del-section-alt">
    <div class="container">
        <div class="j2del-heading-wrap">
            <span class="j2del-pill">Navigation Blueprint</span>
            <h2>Route Geography & Highway Transit Analysis</h2>
            <p>
                An established 1,230 km national highway corridor connects Jamtara with Delhi NCR via the Golden Quadrilateral (NH-19) and modern expressway corridors.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="j2del-card">
                    <div class="j2del-card-icon"><i class="fa fa-map-signs"></i></div>
                    <h3>Primary Transit Highway</h3>
                    <p>
                        The preferred route connects Jamtara via Govindpur (Dhanbad) to the six-lane NH-19 (Grand Trunk Road), traversing Barhi, Sasaram, Varanasi, Prayagraj bypass, Kanpur, and linking onto the Agra-Lucknow and Yamuna Expressways into Greater Noida and Delhi.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="j2del-card">
                    <div class="j2del-card-icon"><i class="fa fa-clock-o"></i></div>
                    <h3>48 to 72 Hour Delivery Schedule</h3>
                    <p>
                        Dual-driver commercial container trucks maintain continuous, regulated speeds across the national highway, allowing our operations team to achieve dependable 48 to 72 hour doorstep delivery schedules into Delhi, Noida, and Gurgaon.
                    </p>
                </div>
            </div>
            <div class="j2del-card">
                <div class="j2del-card-icon"><i class="fa fa-shield"></i></div>
                <h3>Dedicated Container Security</h3>
                <p>
                    Every container vehicle is fitted with GPS navigation and constant driver communication. Clients receive active milestone updates as the vehicle crosses Varanasi, Kanpur, Agra toll plaza, and reaches your destination in Delhi NCR.
                </p>
            </div>
        </div>

        <!-- Major Node Points -->
        <div class="j2del-route-pill-grid">
            <div class="j2del-route-node">
                <h4>1. Origin Pickups: Jamtara Region</h4>
                <p>Full-service coverage across Mihijam, Karmatar (Vidyasagar), Court Road, Dumka Road, Nala, Kundahit, and residential housing colonies.</p>
            </div>
            <div class="j2del-route-node">
                <h4>2. Mid-Transit Waypoints</h4>
                <p>Smooth transit through Dhanbad Govindpur NH-19, Varanasi bypass, Prayagraj, Kanpur, and the Yamuna Expressway.</p>
            </div>
            <div class="j2del-route-node">
                <h4>3. Destination Delivery: Delhi NCR</h4>
                <p>Doorstep delivery, room placement, and debris removal in Dwarka, Rohini, South Delhi, Noida, Greater Noida, and Gurgaon.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Portfolio Grid -->
<section class="j2del-section">
    <div class="container">
        <div class="j2del-heading-wrap">
            <span class="j2del-pill">Comprehensive Relocation Services</span>
            <h2>Tailored Shifting Solutions for Every Move</h2>
            <p>
                Whether you are moving a compact bachelor apartment, a luxury duplex, sensitive IT servers, or your personal automobile, Shree Ashirwad provides dedicated specialized solutions.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="j2del-card">
                    <div class="j2del-card-icon"><i class="fa fa-home"></i></div>
                    <h3>Household Goods Shifting</h3>
                    <p>
                        Comprehensive packing for wardrobes, modular beds, dining tables, sofa sets, kitchen glassware, and delicate home electronics using multi-layer protective packaging.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="j2del-card">
                    <div class="j2del-card-icon"><i class="fa fa-briefcase"></i></div>
                    <h3>Central Govt & Defence Relocation</h3>
                    <p>
                        Turnkey relocation solutions compliant with central government guidelines. Includes customized packing schedules, priority unpacking, and GST-ready invoices.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="j2del-card">
                    <div class="j2del-card-icon"><i class="fa fa-car"></i></div>
                    <h3>Dedicated Car Carrier Service</h3>
                    <p>
                        Safe, damage-free motor car transportation utilizing enclosed hydraulic car haulers. Equipped with tire locks, safety harnesses, and transit insurance coverage.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="j2del-card">
                    <div class="j2del-card-icon"><i class="fa fa-motorcycle"></i></div>
                    <h3>Two-Wheeler Parcel Service</h3>
                    <p>
                        High-security bike parcel handling. Motorcycles and scooters are wrapped in corrugated wrap, bubble sheets, and wooden pallets to prevent highway scratches.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="j2del-card">
                    <div class="j2del-card-icon"><i class="fa fa-building"></i></div>
                    <h3>Industrial & Office Relocation</h3>
                    <p>
                        Disassembly, packing, and reinstallation of office workstations, server racks, desktop computer terminals, and sensitive commercial documents with minimal business downtime.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="j2del-card">
                    <div class="j2del-card-icon"><i class="fa fa-shield"></i></div>
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
<section class="j2del-section-alt">
    <div class="container">
        <div class="j2del-heading-wrap">
            <span class="j2del-pill">Transparent Quotations</span>
            <h2>Jamtara to Delhi Shifting Cost Matrix</h2>
            <p>
                We believe in 100% upfront pricing with zero hidden charges, transparent toll calculations, and fair labour rates for door-to-door relocation.
            </p>
        </div>

        <div class="j2del-table-wrap">
            <table class="j2del-table">
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
                        <td>₹12,000 - ₹18,000</td>
                        <td>48 to 72 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>1 BHK Apartment Complete Move</strong></td>
                        <td>Premium 4-Layer Foam + Bubble</td>
                        <td>14-ft Closed Container</td>
                        <td>₹18,000 - ₹26,500</td>
                        <td>48 to 72 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Family Home Relocation</strong></td>
                        <td>Executive 5-Layer Heavy Duty</td>
                        <td>17-ft / 19-ft Sealed Container</td>
                        <td>₹25,000 - ₹36,500</td>
                        <td>48 to 72 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK / Independent Bungalow</strong></td>
                        <td>Ultra-Secure Multi-Layer & Wooden Crates</td>
                        <td>20-ft / 24-ft Container Truck</td>
                        <td>₹34,000 - ₹52,000</td>
                        <td>3 to 4 Days</td>
                    </tr>
                    <tr>
                        <td><strong>Motorcycle / Scooter Parcel</strong></td>
                        <td>Dual-Layer Bubble + Corrugated Wrap</td>
                        <td>Dedicated Covered Carrier</td>
                        <td>₹4,000 - ₹6,800</td>
                        <td>3 to 5 Days</td>
                    </tr>
                    <tr>
                        <td><strong>Hatchback / Sedan Car Transport</strong></td>
                        <td>Hydraulic Enclosed Hauler</td>
                        <td>Specialized Car Carrier Truck</td>
                        <td>₹12,500 - ₹19,500</td>
                        <td>3 to 5 Days</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="text-align: center; color: #64748b; font-size: 0.9rem; margin-top: 15px;">
            <em>Note: The charges outlined above are indicative and vary based on consignment volume, floor levels, elevator availability, and chosen insurance value. Call 8409531615 for a precise doorstep estimate.</em>
        </p>

        <div class="j2del-highlight-box">
            <h4><i class="fa fa-info-circle"></i> Why Dedicated Sealed Containers Matter for Long-Distance Interstate Moves</h4>
            <p>
                For long-distance routes like Jamtara to Delhi (1,230 km), choosing our dedicated closed-door container guarantees that your household effects are never mixed with external commercial cargo. Once packed at your Jamtara doorstep, the container doors are padlocked and seal-tagged in your presence, and will only be unsealed when the vehicle pulls into your new home driveway in Dwarka, Noida, or Gurgaon.
            </p>
        </div>
    </div>
</section>

<!-- Visual Gallery & Packaging Methodology -->
<section class="j2del-section">
    <div class="container">
        <div class="j2del-heading-wrap">
            <span class="j2del-pill">Packaging Standards</span>
            <h2>Our High-Grade Packaging & Handling Standards</h2>
            <p>
                From delicate chinaware to heavy teakwood beds, see how our trained packaging specialists safeguard your valuable possessions during transit.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="j2del-img-showcase">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="High grade multi layer household goods packing by Shree Ashirwad crew" loading="lazy">
                    <div class="j2del-img-caption">
                        <strong>5-Layer Cushioning:</strong> Bubble wraps and high-density foam blankets protect wooden finishes and glass panels.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="j2del-img-showcase">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car loading onto closed hydraulic transport carrier" loading="lazy">
                    <div class="j2del-img-caption">
                        <strong>Secured Vehicle Carriers:</strong> Hydraulic ramps and tire lashings ensure scratch-free automobile transport.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="j2del-img-showcase">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Professional unpacking and room setup service in Delhi" loading="lazy">
                    <div class="j2del-img-caption">
                        <strong>Room-Wise Unpacking:</strong> Reassembly of beds, furniture placement, and debris clean-up at your Delhi residence.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5-Step Process Timeline -->
<section class="j2del-section-alt">
    <div class="container">
        <div class="j2del-heading-wrap">
            <span class="j2del-pill">Execution Plan</span>
            <h2>Our 5-Step Seamless Relocation Process</h2>
            <p>
                We have perfected an organized, transparent, and stress-free moving pipeline refined through hundreds of successful relocations.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="j2del-step-timeline">
                    <div class="j2del-step-card">
                        <div class="j2del-step-num">1</div>
                        <div class="j2del-step-body">
                            <h4>Pre-Move Survey & Free Quotation</h4>
                            <p>We review your shifting requirements either via in-home survey in Jamtara or through video inventory assessment. We provide a clear, all-inclusive written estimate detailing transport, packing, labor, and GST.</p>
                        </div>
                    </div>
                    <div class="j2del-step-card">
                        <div class="j2del-step-num">2</div>
                        <div class="j2del-step-body">
                            <h4>Standardized Multi-Layer Packing</h4>
                            <p>Our experienced packaging crew arrives on moving day with specialized materials. Every piece of furniture, electronic gadget, and fragile kitchenware is labeled and wrapped following strict safety guidelines.</p>
                        </div>
                    </div>
                    <div class="j2del-step-card">
                        <div class="j2del-step-num">3</div>
                        <div class="j2del-step-body">
                            <h4>Systematic Loading & Container Sealing</h4>
                            <p>Heavier goods are loaded at base level with shock-absorbing foam pads, followed by lighter carton boxes and mattress bags. Once loaded, the container is locked and sealed in front of you.</p>
                        </div>
                    </div>
                    <div class="j2del-step-card">
                        <div class="j2del-step-num">4</div>
                        <div class="j2del-step-body">
                            <h4>Direct Express Transit via NH-19</h4>
                            <p>Our professional highway drivers navigate the 1230 km route through Varanasi, Kanpur, and Yamuna Expressway smoothly, maintaining steady speeds and avoiding bumpy bypass roads to eliminate shifting stress.</p>
                        </div>
                    </div>
                    <div class="j2del-step-card">
                        <div class="j2del-step-num">5</div>
                        <div class="j2del-step-body">
                            <h4>Unloading, Furniture Setup & Debris Removal</h4>
                            <p>Upon arrival in Delhi, Noida, or Gurgaon, our team carries cartons into designated rooms, reassembles beds and dining tables, assists in unpacking, and disposes of discarded packing sheets cleanly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Customer Reviews Section -->
<section class="j2del-section">
    <div class="container">
        <div class="j2del-heading-wrap">
            <span class="j2del-pill">Client Testimonials</span>
            <h2>What Our Relocated Customers Say</h2>
            <p>
                Read verified reviews from professionals and families who recently shifted from Jamtara to Delhi NCR with Shree Ashirwad.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="j2del-review-card">
                    <div class="j2del-review-stars">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p>
                        "I was transferred from Jamtara to a central government ministry in Delhi. Shree Ashirwad Packers packed my 3BHK household goods with unbelievable care. Not a single ceramic plate broke, and their GST invoice was reimbursed smoothly by my office."
                    </p>
                    <div class="j2del-review-meta">
                        <span class="j2del-review-author">Sunil Kumar Mishra</span>
                        <span class="j2del-review-loc">Shifted to Dwarka Sector 10, Delhi</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="j2del-review-card">
                    <div class="j2del-review-stars">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p>
                        "Relocated our complete home from Mihijam to Sector 62, Noida. Their team loaded everything on Monday morning and delivered Thursday midday in Noida. Zero damages and very professional driver."
                    </p>
                    <div class="j2del-review-meta">
                        <span class="j2del-review-author">Pratima Sen</span>
                        <span class="j2del-review-loc">Shifted to Noida Sector 62</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="j2del-review-card">
                    <div class="j2del-review-stars">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p>
                        "Booked my Honda City car along with a 2BHK flat shifting from Karmatar to Cyber City, Gurgaon. Both the car and furniture arrived in immaculate condition. Highly recommended logistics partner!"
                    </p>
                    <div class="j2del-review-meta">
                        <span class="j2del-review-author">Ritesh Agarwal</span>
                        <span class="j2del-review-loc">Shifted to Gurgaon, Haryana</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions Section -->
<section class="j2del-section-alt">
    <div class="container">
        <div class="j2del-heading-wrap">
            <span class="j2del-pill">Have Questions?</span>
            <h2>Frequently Asked Questions About Jamtara to Delhi Shifting</h2>
            <p>
                Find answers to common questions about moving schedules, packing methods, insurance documentation, and delivery commitments.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <details class="j2del-faq-item" open>
                    <summary>What is the transit duration for shifting household goods from Jamtara to Delhi NCR?</summary>
                    <div class="j2del-faq-answer">
                        The highway distance between Jamtara and Delhi NCR is approximately 1,230 kilometers. Our dedicated container fleet completes the journey within 48 to 72 hours via NH-19 (Grand Trunk Road) and the Agra-Lucknow / Yamuna Expressway network.
                    </div>
                </details>

                <details class="j2del-faq-item">
                    <summary>How much does shifting cost from Jamtara to Delhi?</summary>
                    <div class="j2del-faq-answer">
                        Standard shifting charges from Jamtara to Delhi range from ₹12,000 to ₹18,000 for 1 RK / small studio flats, ₹18,000 to ₹28,500 for a standard 2 BHK home, and ₹29,000 to ₹48,000 for large 3 BHK family residences. Exact pricing depends on volume, elevator status, and packing tier.
                    </div>
                </details>

                <details class="j2del-faq-item">
                    <summary>Do you provide relocation bills for central government and defence transfers to Delhi?</summary>
                    <div class="j2del-faq-answer">
                        Yes, absolutely. We issue 100% compliant GST invoices, IBA-format consignment notes (bilty), detailed packing inventories, and money receipts required for HR relocation allowances across ministries, paramilitary, defence forces, and private corporates.
                    </div>
                </details>

                <details class="j2del-faq-item">
                    <summary>Can you shift household goods into high-rise apartment complexes in Noida, Gurgaon, or Dwarka?</summary>
                    <div class="j2del-faq-answer">
                        Yes, our delivery crew manages multi-story tower moves across Noida Sectors, Expressway societies, Gurgaon Golf Course Road, Cyber City, Dwarka, and Greater Noida, complying with gated society entry guidelines and utilizing high-speed service lifts.
                    </div>
                </details>

                <details class="j2del-faq-item">
                    <summary>How do you transport motor cars or two-wheelers to Delhi?</summary>
                    <div class="j2del-faq-answer">
                        We operate enclosed hydraulic car carriers and secured closed-container bike parcel services with wheel chocks, scratch-resistant corrugated wrapping, and tie-down lashings from Jamtara and Mihijam straight to your Delhi NCR residence.
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
            Planning Your Move to Delhi NCR?
        </h2>
        <p style="color: #cbd5e1; font-size: 1.15rem; max-width: 680px; margin: 0 auto 35px; line-height: 1.7;">
            Contact us today for a free, transparent shifting estimate. Let India's trusted moving team deliver your household treasures with unmatched care and reliability.
        </p>
        <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
            <a href="tel:08409531615" class="j2del-btn-primary" style="font-size: 1.1rem; padding: 16px 36px;">
                <i class="fa fa-phone"></i> Call 08409531615
            </a>
            <a href="https://wa.me/918409531615?text=Hi%20Shree%20Ashirwad,%20I%20want%20to%20book%20Jamtara%20to%20Delhi%20shifting" class="j2del-btn-secondary" style="font-size: 1.1rem; padding: 16px 36px;" target="_blank" rel="noopener">
                <i class="fa fa-whatsapp"></i> Chat on WhatsApp
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>
