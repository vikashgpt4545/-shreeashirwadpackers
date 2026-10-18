<?php
/**
 * Page Name: Jamtara to Bokaro Packers and Movers
 * Route Slug: jamtara-to-bokaro-packers-and-movers
 * Description: Specialized relocation route from Jamtara to Bokaro Steel City and Chas industrial & residential townships.
 * Focus Keywords: jamtara to bokaro packers and movers, packers and movers jamtara to bokaro, house shifting jamtara to bokaro, jamtara to bokaro parcel service, jamtara to bokaro car carrier, jamtara to chas packers and movers
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Jamtara to Bokaro Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Top Jamtara to Bokaro packers and movers. 120 km fast transit via Dhanbad & Chas, SAIL & BSL employee transfers, 5-layer packing, car transport. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/jamtara-to-bokaro-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="jamtara to bokaro packers and movers, packers and movers jamtara to bokaro, house shifting jamtara to bokaro, jamtara to bokaro parcel service, jamtara to bokaro car carrier, jamtara to chas packers and movers">
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

    <!-- Scoped CSS for Route 5 (Jamtara to Bokaro) -->
    <style>
        :root {
            --j2bok-primary: #1e293b;
            --j2bok-secondary: #0284c7;
            --j2bok-accent: #d97706;
            --j2bok-accent-light: #fef3c7;
            --j2bok-dark: #0f172a;
            --j2bok-gray-bg: #f8fafc;
            --j2bok-border: #e2e8f0;
            --j2bok-card-shadow: 0 10px 25px -5px rgba(15, 23, 42, 0.08), 0 8px 10px -6px rgba(15, 23, 42, 0.04);
        }

        .j2bok-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 41, 59, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .j2bok-hero-badge {
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

        .j2bok-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2.1rem, 4.2vw, 3.2rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
            color: #ffffff;
        }

        .j2bok-hero p {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #cbd5e1;
            max-width: 780px;
            margin-bottom: 30px;
        }

        .j2bok-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .j2bok-btn-primary {
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

        .j2bok-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(217, 119, 6, 0.5);
            color: #ffffff;
        }

        .j2bok-btn-secondary {
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

        .j2bok-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.22);
            color: #ffffff;
        }

        .j2bok-stat-ribbon {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: var(--j2bok-card-shadow);
            margin-top: -35px;
            position: relative;
            z-index: 10;
            padding: 24px 30px;
            border: 1px solid var(--j2bok-border);
        }

        .j2bok-stat-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
            gap: 20px;
        }

        .j2bok-stat-item {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .j2bok-stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: var(--j2bok-accent-light);
            color: var(--j2bok-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            flex-shrink: 0;
        }

        .j2bok-stat-label {
            font-size: 0.85rem;
            color: #64748b;
            text-transform: uppercase;
            font-weight: 600;
            margin-bottom: 3px;
        }

        .j2bok-stat-val {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 800;
            color: var(--j2bok-dark);
        }

        .j2bok-section {
            padding: 70px 0;
        }

        .j2bok-section-alt {
            background: var(--j2bok-gray-bg);
            padding: 70px 0;
        }

        .j2bok-heading-wrap {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }

        .j2bok-pill {
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

        .j2bok-heading-wrap h2 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(1.85rem, 3.2vw, 2.5rem);
            font-weight: 800;
            color: var(--j2bok-dark);
            line-height: 1.25;
            margin-bottom: 15px;
        }

        .j2bok-heading-wrap p {
            color: #475569;
            font-size: 1.05rem;
            line-height: 1.65;
        }

        .j2bok-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 32px 28px;
            border: 1px solid var(--j2bok-border);
            box-shadow: var(--j2bok-card-shadow);
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .j2bok-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 30px -8px rgba(15, 23, 42, 0.12);
        }

        .j2bok-card-icon {
            width: 54px;
            height: 54px;
            background: #e0f2fe;
            color: var(--j2bok-secondary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .j2bok-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--j2bok-dark);
            margin-bottom: 12px;
        }

        .j2bok-card p {
            color: #64748b;
            font-size: 0.98rem;
            line-height: 1.65;
        }

        .j2bok-table-wrap {
            overflow-x: auto;
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--j2bok-border);
            box-shadow: var(--j2bok-card-shadow);
            margin: 35px 0 20px;
        }

        .j2bok-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            min-width: 650px;
        }

        .j2bok-table th {
            background: #1e293b;
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 700;
            font-size: 0.96rem;
        }

        .j2bok-table td {
            padding: 15px 20px;
            border-bottom: 1px solid var(--j2bok-border);
            color: #334155;
            font-size: 0.94rem;
        }

        .j2bok-table tr:hover td {
            background-color: #f8fafc;
        }

        .j2bok-route-pill-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 35px;
        }

        .j2bok-route-node {
            background: #ffffff;
            padding: 22px;
            border-radius: 10px;
            border-left: 4px solid var(--j2bok-accent);
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            border-top: 1px solid var(--j2bok-border);
            border-right: 1px solid var(--j2bok-border);
            border-bottom: 1px solid var(--j2bok-border);
        }

        .j2bok-route-node h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            color: var(--j2bok-dark);
            margin-bottom: 8px;
            font-weight: 700;
        }

        .j2bok-route-node p {
            color: #64748b;
            font-size: 0.92rem;
            line-height: 1.55;
            margin: 0;
        }

        .j2bok-img-showcase {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: var(--j2bok-card-shadow);
            margin-bottom: 24px;
            border: 1px solid var(--j2bok-border);
        }

        .j2bok-img-showcase img {
            width: 100%;
            height: 270px;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .j2bok-img-showcase:hover img {
            transform: scale(1.03);
        }

        .j2bok-img-caption {
            padding: 15px 18px;
            background: #ffffff;
            font-size: 0.92rem;
            font-weight: 600;
            color: var(--j2bok-dark);
            border-top: 1px solid var(--j2bok-border);
        }

        .j2bok-step-timeline {
            display: flex;
            flex-direction: column;
            gap: 24px;
            position: relative;
            margin-top: 40px;
        }

        .j2bok-step-card {
            display: flex;
            gap: 20px;
            background: #ffffff;
            padding: 24px;
            border-radius: 12px;
            border: 1px solid var(--j2bok-border);
            box-shadow: 0 4px 14px rgba(0,0,0,0.03);
        }

        .j2bok-step-num {
            width: 44px;
            height: 44px;
            background: var(--j2bok-primary);
            color: #ffffff;
            font-weight: 800;
            font-size: 1.25rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .j2bok-step-body h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--j2bok-dark);
            margin-bottom: 6px;
        }

        .j2bok-step-body p {
            color: #64748b;
            font-size: 0.94rem;
            line-height: 1.6;
            margin: 0;
        }

        .j2bok-faq-item {
            background: #ffffff;
            border: 1px solid var(--j2bok-border);
            border-radius: 10px;
            margin-bottom: 16px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.02);
        }

        .j2bok-faq-item summary {
            padding: 20px 24px;
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            font-size: 1.1rem;
            color: var(--j2bok-dark);
            cursor: pointer;
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #ffffff;
        }

        .j2bok-faq-item summary::-webkit-details-marker {
            display: none;
        }

        .j2bok-faq-item summary::after {
            content: "+";
            font-size: 1.4rem;
            font-weight: 400;
            color: var(--j2bok-accent);
        }

        .j2bok-faq-item[open] summary::after {
            content: "−";
        }

        .j2bok-faq-answer {
            padding: 0 24px 22px;
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
            border-top: 1px solid #f1f5f9;
            background: #fdfdfe;
        }

        .j2bok-review-card {
            background: #ffffff;
            padding: 26px;
            border-radius: 12px;
            border: 1px solid var(--j2bok-border);
            box-shadow: var(--j2bok-card-shadow);
        }

        .j2bok-review-stars {
            color: #f59e0b;
            font-size: 1.1rem;
            margin-bottom: 12px;
        }

        .j2bok-review-card p {
            font-style: italic;
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.6;
            margin-bottom: 16px;
        }

        .j2bok-review-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.88rem;
            border-top: 1px solid #f1f5f9;
            padding-top: 12px;
        }

        .j2bok-review-author {
            font-weight: 700;
            color: var(--j2bok-dark);
        }

        .j2bok-review-loc {
            color: #94a3b8;
        }

        .j2bok-highlight-box {
            background: linear-gradient(135deg, #eff6ff 0%, #fefce8 100%);
            border: 1px solid #fed7aa;
            border-radius: 12px;
            padding: 28px;
            margin: 30px 0;
        }

        .j2bok-highlight-box h4 {
            font-family: 'Outfit', sans-serif;
            color: #9a3412;
            font-size: 1.25rem;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .j2bok-highlight-box p {
            color: #334155;
            font-size: 0.96rem;
            line-height: 1.65;
            margin: 0;
        }

        @media (max-width: 768px) {
            .j2bok-hero {
                padding: 60px 0 45px;
            }
            .j2bok-stat-ribbon {
                margin-top: 15px;
                padding: 20px;
            }
            .j2bok-cta-group {
                flex-direction: column;
                align-items: stretch;
            }
            .j2bok-btn-primary, .j2bok-btn-secondary {
                justify-content: center;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Jamtara to Bokaro",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "https://www.shreeashirwadpackers.com/#movingcompany",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91-8409531615",
        "priceRange": "₹4,000 - ₹32,000",
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
        "serviceType": "Inter-District Packers and Movers Service",
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
                "name": "Bokaro Steel City"
            }
        ],
        "description": "Professional door-to-door relocation service from Jamtara to Bokaro Steel City and Chas covering household goods, SAIL employee transfers, bike parcels, car transport, and complete transit insurance.",
        "offers": {
            "@type": "Offer",
            "priceCurrency": "INR",
            "price": "4000",
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
                "name": "Jamtara to Bokaro Route",
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
                "name": "How long does shifting take between Jamtara and Bokaro Steel City?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The total highway distance between Jamtara and Bokaro Steel City is approximately 120 km. Door-to-door transit generally takes 3.5 to 5 hours via Dhanbad and Chas bypass, allowing for same-day packing, transit, and unloading."
                }
            },
            {
                "@type": "Question",
                "name": "What are the shifting rates from Jamtara to Bokaro?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Rates for 1 BHK flats range from ₹7,000 to ₹12,000, 2 BHK homes from ₹11,000 to ₹16,500, and 3 BHK family residences from ₹15,500 to ₹25,000. Single room or student transfers start as low as ₹4,000."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide official GST bills for SAIL Bokaro Steel Plant transfers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we furnish 100% compliant GST invoices, IBA-approved consignment notes, packing manifests, and money receipts recognized by SAIL, BSL, government departments, and private firms for employee transfer allowances."
                }
            },
            {
                "@type": "Question",
                "name": "Can you shift household items to multi-story apartments in Bokaro Sectors?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our experienced loading crew manages delivery to any floor across Sector 1 through Sector 12, Co-operative Colony, City Centre, and Chas, utilizing high-capacity elevators or secure manual rope pulleys where needed."
                }
            },
            {
                "@type": "Question",
                "name": "How do you protect delicate electronics like LED TVs and double-door fridges?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "All appliances are shielded using heavy bubble wrap, thermocol edge corner buffers, corrugated cartons, and water-resistant stretch wrap to completely prevent scratches, internal vibration, or water ingress."
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
            <li style="color: #64748b;" aria-current="page">Jamtara to Bokaro</li>
        </ol>
    </div>
</nav>

<!-- Hero Section -->
<section class="j2bok-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="j2bok-hero-badge">Direct Steel City Link &bull; 120 KM Same-Day Express</span>
                <h1>Professional Jamtara to Bokaro Packers and Movers</h1>
                <p>
                    Relocating between Jamtara and Bokaro Steel City or Chas? Shree Ashirwad Packers and Movers delivers rapid, zero-damage domestic shifting, SAIL employee transfers, and secure vehicle transportation. Serving Mihijam, Karmatar, and Jamtara to Sector 1 through 12, Chas, Co-operative Colony, and BSL townships.
                </p>
                <div class="j2bok-cta-group">
                    <a href="tel:08409531615" class="j2bok-btn-primary">
                        <i class="fa fa-phone"></i> Call 8409531615 for Free Quote
                    </a>
                    <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Jamtara%20to%20Bokaro%20relocation" class="j2bok-btn-secondary" target="_blank" rel="noopener">
                        <i class="fa fa-whatsapp"></i> WhatsApp Instant Estimate
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Ribbon -->
<div class="container">
    <div class="j2bok-stat-ribbon">
        <div class="j2bok-stat-grid">
            <div class="j2bok-stat-item">
                <div class="j2bok-stat-icon"><i class="fa fa-road"></i></div>
                <div>
                    <div class="j2bok-stat-label">Highway Distance</div>
                    <div class="j2bok-stat-val">~120 Kilometers</div>
                </div>
            </div>
            <div class="j2bok-stat-item">
                <div class="j2bok-stat-icon"><i class="fa fa-clock-o"></i></div>
                <div>
                    <div class="j2bok-stat-label">Door Transit Duration</div>
                    <div class="j2bok-stat-val">3.5 - 5 Hours</div>
                </div>
            </div>
            <div class="j2bok-stat-item">
                <div class="j2bok-stat-icon"><i class="fa fa-shield"></i></div>
                <div>
                    <div class="j2bok-stat-label">Transit Safety</div>
                    <div class="j2bok-stat-val">Zero-Breakage Guarantee</div>
                </div>
            </div>
            <div class="j2bok-stat-item">
                <div class="j2bok-stat-icon"><i class="fa fa-file-text-o"></i></div>
                <div>
                    <div class="j2bok-stat-label">SAIL / GST Claims</div>
                    <div class="j2bok-stat-val">100% Approved Bills</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Strategic Content Section -->
<section class="j2bok-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="j2bok-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Dedicated closed container truck for Jamtara to Bokaro shifting" loading="lazy">
                    <div class="j2bok-img-caption">
                        <i class="fa fa-truck" style="color: var(--j2bok-accent); margin-right: 8px;"></i>
                        Regular closed container fleets plying the Jamtara &rarr; Dhanbad &rarr; Chas &rarr; Bokaro corridor.
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="j2bok-pill">Dedicated Steel City Express</div>
                <h2 style="font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--j2bok-dark); font-size: 2.1rem; margin-bottom: 18px;">
                    Smooth, Reliable Shifting Between Jamtara and Bokaro Steel City
                </h2>
                <p style="color: #475569; font-size: 1.02rem; line-height: 1.7; margin-bottom: 16px;">
                    The 120-kilometer passage connecting Jamtara with Bokaro Steel City is a vital residential corridor in eastern Jharkhand. Bokaro's world-class public sector steel plant (SAIL-BSL), extensive educational institutions (DPS, Chinmaya, St. Xavier's), and thriving commercial hub in Chas make it a frequent destination for relocating teachers, bank officers, engineers, and trading families from Jamtara and Mihijam.
                </p>
                <p style="color: #475569; font-size: 1.02rem; line-height: 1.7; margin-bottom: 20px;">
                    Shree Ashirwad Packers and Movers makes this transition painless and predictable. Because this route spans only 120 km, our clients benefit from true same-day execution: our crew completes systematic multi-layer packing in Jamtara early in the morning, transports your goods via the Dhanbad and Chas bypass, and delivers, unloads, and reassembles your furniture at your Bokaro residence by afternoon or evening.
                </p>
                <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                    <div style="flex: 1 1 200px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px 18px;">
                        <strong style="color: #0284c7; display: block; margin-bottom: 4px;"><i class="fa fa-check-circle text-success"></i> Same-Day Delivery</strong>
                        <span style="color: #64748b; font-size: 0.9rem;">Packed in morning, unpacked before nightfall.</span>
                    </div>
                    <div style="flex: 1 1 200px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px 18px;">
                        <strong style="color: #0284c7; display: block; margin-bottom: 4px;"><i class="fa fa-check-circle text-success"></i> SAIL / PSU Compliance</strong>
                        <span style="color: #64748b; font-size: 0.9rem;">Standardized GST bill & consignment bilty.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Route Geography & Highway Overview -->
<section class="j2bok-section-alt">
    <div class="container">
        <div class="j2bok-heading-wrap">
            <span class="j2bok-pill">Logistics Highway Blueprint</span>
            <h2>Route Geography & Highway Transit Analysis</h2>
            <p>
                A well-maintained arterial road network connects Jamtara with Bokaro Steel City, ensuring that vehicles face minimal vibration and zero midway cargo offloading.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="j2bok-card">
                    <div class="j2bok-card-icon"><i class="fa fa-map-signs"></i></div>
                    <h3>Primary Transit Highway</h3>
                    <p>
                        The most efficient path runs from Jamtara via Mihijam toward Govindpur (NH-19), cutting past Dhanbad through Mahuda and Chas via NH-18/NH-218 directly into Bokaro Steel City. This route features broad paved four-lane and two-lane sections ideal for containerized moving trucks.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="j2bok-card">
                    <div class="j2bok-card-icon"><i class="fa fa-clock-o"></i></div>
                    <h3>Chas & Bokaro Municipal Entry</h3>
                    <p>
                        Traffic over the Chas bypass and bridge can experience brief congestion during evening peak hours. Our logistics operations team plans departures to bypass peak hours, ensuring seamless delivery straight to residential township gates and gated high-rises.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="j2bok-card">
                    <div class="j2bok-card-icon"><i class="fa fa-shield"></i></div>
                    <h3>Exclusive Point-to-Point Trucking</h3>
                    <p>
                        Your items are loaded into dedicated, sealed container vehicles without consolidation. You hold the seal keys, eliminating mixing of goods and ensuring that not even a single carton goes missing along the highway.
                    </p>
                </div>
            </div>
        </div>

        <!-- Major Node Points -->
        <div class="j2bok-route-pill-grid">
            <div class="j2bok-route-node">
                <h4>1. Origin Pickups: Jamtara Region</h4>
                <p>Complete doorstep coverage across Mihijam, Karmatar, Court Road, Station Road, Nala, Kundahit, and nearby residential localities.</p>
            </div>
            <div class="j2bok-route-node">
                <h4>2. Mid-Highway Waypoints</h4>
                <p>Direct highway transit along Govindpur bypass, Dhanbad coalfield peripheral road, Mahuda junction, and Chas express flyovers.</p>
            </div>
            <div class="j2bok-route-node">
                <h4>3. Destination Delivery: Bokaro & Chas</h4>
                <p>Careful room-by-room unloading across Sector 1 through Sector 12, Co-operative Colony, City Centre, Chas township, and Bokaro Thermal.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Portfolio Grid -->
<section class="j2bok-section">
    <div class="container">
        <div class="j2bok-heading-wrap">
            <span class="j2bok-pill">Full Relocation Spectrum</span>
            <h2>Comprehensive Shifting Services for Jamtara to Bokaro</h2>
            <p>
                From single bachelor units and modular villas to corporate machinery and two-wheelers, we offer tailored solutions to meet every packing and transit need.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="j2bok-card">
                    <div class="j2bok-card-icon"><i class="fa fa-home"></i></div>
                    <h3>Household Furniture Shifting</h3>
                    <p>
                        Specialized packing for beds, dressing units, dining tables, sofa sets, showcase units, and kitchen cookware using heavy-duty 5-layer corrugated sheets and air-bubble wraps.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="j2bok-card">
                    <div class="j2bok-card-icon"><i class="fa fa-industry"></i></div>
                    <h3>SAIL & PSU Employee Relocation</h3>
                    <p>
                        Comprehensive corporate shifting packages with complete billing documentation, consignment note (bilty), and transit receipts conforming to SAIL and public sector HR allowances.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="j2bok-card">
                    <div class="j2bok-card-icon"><i class="fa fa-car"></i></div>
                    <h3>Secure Car Transportation</h3>
                    <p>
                        Enclosed hydraulic car carrier transport for sedans, SUVs, and hatchbacks. Equipped with safety wheel chocks, heavy lashings, and comprehensive transit insurance.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="j2bok-card">
                    <div class="j2bok-card-icon"><i class="fa fa-motorcycle"></i></div>
                    <h3>Bike & Scooter Parcel Service</h3>
                    <p>
                        Safe, scratch-proof two-wheeler transport from Jamtara to Bokaro. Vehicles are wrapped in triple-layer bubble cushioning, corrugated sheets, and strapped securely in transit vans.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="j2bok-card">
                    <div class="j2bok-card-icon"><i class="fa fa-briefcase"></i></div>
                    <h3>Office & Commercial Moving</h3>
                    <p>
                        Structured relocation for corporate offices, banks, clinics, and retail stores. Fast breakdown, organized tagging, and prompt setup to minimize operational disruption.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="j2bok-card">
                    <div class="j2bok-card-icon"><i class="fa fa-shield"></i></div>
                    <h3>Transit Insurance & Protection</h3>
                    <p>
                        All-risk transit insurance protecting household goods against unforeseen accidents, road spills, or severe weather disturbances during transit on the highway.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Table Section -->
<section class="j2bok-section-alt">
    <div class="container">
        <div class="j2bok-heading-wrap">
            <span class="j2bok-pill">Transparent Quotations</span>
            <h2>Jamtara to Bokaro Shifting Cost Estimate</h2>
            <p>
                We maintain an honest, upfront pricing policy with no hidden extras, surprise tolls, or unannounced labor charges on moving day.
            </p>
        </div>

        <div class="j2bok-table-wrap">
            <table class="j2bok-table">
                <thead>
                    <tr>
                        <th>Consignment Type / Volume</th>
                        <th>Packaging Quality Tier</th>
                        <th>Vehicle Assigned</th>
                        <th>Estimated Price Range</th>
                        <th>Standard Transit Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 RK / Studio / Few Luggage Items</strong></td>
                        <td>Standard 3-Layer Corrugated</td>
                        <td>Tata Ace / Mahindra Pickup</td>
                        <td>₹4,000 - ₹7,500</td>
                        <td>Same Day (3 - 4 Hours)</td>
                    </tr>
                    <tr>
                        <td><strong>1 BHK Apartment Complete Move</strong></td>
                        <td>Premium 4-Layer Foam + Bubble</td>
                        <td>14-ft Closed Container</td>
                        <td>₹7,000 - ₹12,000</td>
                        <td>Same Day (3.5 - 5 Hours)</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Family Home Relocation</strong></td>
                        <td>Executive 5-Layer Heavy Duty</td>
                        <td>17-ft / 19-ft Sealed Container</td>
                        <td>₹11,000 - ₹16,500</td>
                        <td>Same Day (4 - 5 Hours)</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK / Independent Bungalow</strong></td>
                        <td>Ultra-Secure Multi-Layer & Wooden Crates</td>
                        <td>20-ft / 24-ft Container Truck</td>
                        <td>₹15,500 - ₹25,000</td>
                        <td>Same Day (4 - 6 Hours)</td>
                    </tr>
                    <tr>
                        <td><strong>Motorcycle / Scooter Parcel</strong></td>
                        <td>Dual-Layer Bubble + Corrugated Wrap</td>
                        <td>Dedicated Covered Carrier</td>
                        <td>₹1,800 - ₹3,200</td>
                        <td>24 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>Hatchback / Sedan Car Carrier</strong></td>
                        <td>Hydraulic Enclosed Hauler</td>
                        <td>Specialized Car Carrier Truck</td>
                        <td>₹5,500 - ₹9,500</td>
                        <td>24 Hours</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="text-align: center; color: #64748b; font-size: 0.9rem; margin-top: 15px;">
            <em>Note: The charges outlined above are indicative and vary based on consignment volume, floor levels, elevator availability, and optional insurance coverage. Call 8409531615 for a precise doorstep estimate.</em>
        </p>

        <div class="j2bok-highlight-box">
            <h4><i class="fa fa-info-circle"></i> Why Dedicated Sealed Containers Matter for Bokaro Moves</h4>
            <p>
                Unlike local transport brokers who pile random cargo into open lorries, Shree Ashirwad Packers assigns closed, weather-sealed container vehicles. Your household assets are isolated from rain, coal dust along the Dhanbad highway stretch, and road grime. Every item reaches your Bokaro residence clean, fresh, and pristine.
            </p>
        </div>
    </div>
</section>

<!-- Visual Gallery & Packaging Methodology -->
<section class="j2bok-section">
    <div class="container">
        <div class="j2bok-heading-wrap">
            <span class="j2bok-pill">Packaging Standards</span>
            <h2>Premium Packing & Safe Handling Procedures</h2>
            <p>
                Our rigorous packaging protocols ensure that delicate electronics, fragile glassware, and heavy wooden furniture remain fully secure throughout the journey.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="j2bok-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Household furniture packing by skilled packers in Jamtara" loading="lazy">
                    <div class="j2jsr-img-caption">
                        <strong>5-Layer Cushioning:</strong> Air bubble wraps, stretch film, and heavy corrugated sheets protect every wooden edge.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="j2bok-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car loading onto closed hydraulic vehicle carrier" loading="lazy">
                    <div class="j2jsr-img-caption">
                        <strong>Secured Vehicle Carriers:</strong> Hydraulic ramps, tire chocks, and tie-down harnesses ensure scratchless vehicle transport.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="j2bok-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and furniture assembly service in Bokaro Steel City" loading="lazy">
                    <div class="j2jsr-img-caption">
                        <strong>Room-Wise Unpacking:</strong> Reassembly of beds, wardrobe positioning, and clean disposal of packing waste.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5-Step Process Timeline -->
<section class="j2bok-section-alt">
    <div class="container">
        <div class="j2bok-heading-wrap">
            <span class="j2bok-pill">Seamless Moving Steps</span>
            <h2>Our 5-Step Frictionless Relocation Process</h2>
            <p>
                From initial survey to final room placement in Bokaro, our systematic process ensures absolute transparency and stress-free execution.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="j2bok-step-timeline">
                    <div class="j2bok-step-card">
                        <div class="j2bok-step-num">1</div>
                        <div class="j2bok-step-body">
                            <h4>Doorstep Survey & Guaranteed Quote</h4>
                            <p>We evaluate your inventory via home visit in Jamtara or WhatsApp video assessment. We provide a transparent, all-inclusive written estimate covering packing, transport, taxes, and labor.</p>
                        </div>
                    </div>
                    <div class="j2bok-step-card">
                        <div class="j2bok-step-num">2</div>
                        <div class="j2bok-step-body">
                            <h4>Multi-Layer Protective Packing</h4>
                            <p>Our experienced packaging team wraps each furniture item, fragile piece of crockery, and sensitive home electronic device with heavy bubble wrap, foam sheets, and strong corrugated cartons.</p>
                        </div>
                    </div>
                    <div class="j2bok-step-card">
                        <div class="j2bok-step-num">3</div>
                        <div class="j2bok-step-body">
                            <h4>Careful Loading & Container Sealing</h4>
                            <p>Heavier appliances are placed at the container base with protective floor mats, followed by delicate carton boxes. The container is locked and sealed in your presence before departure.</p>
                        </div>
                    </div>
                    <div class="j2bok-step-card">
                        <div class="j2bok-step-num">4</div>
                        <div class="j2bok-step-body">
                            <h4>Direct Highway Transit to Bokaro</h4>
                            <p>Our skilled drivers navigate the 120 km highway via Dhanbad and Chas, avoiding congestion and bumpy village roads to ensure a gentle ride for your household cargo.</p>
                        </div>
                    </div>
                    <div class="j2bok-step-card">
                        <div class="j2bok-step-num">5</div>
                        <div class="j2bok-step-body">
                            <h4>Unloading, Furniture Setup & Waste Clean-Up</h4>
                            <p>Upon reaching your Bokaro home, our crew carries goods to designated rooms, reassembles beds and dining tables, assists in unpacking, and removes used packing debris.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Customer Reviews Section -->
<section class="j2bok-section">
    <div class="container">
        <div class="j2bok-heading-wrap">
            <span class="j2bok-pill">Satisfied Clients</span>
            <h2>What Our Customers Say About Jamtara to Bokaro Relocations</h2>
            <p>
                Discover how our clients rate our professionalism, punctuality, and care during their moves to Bokaro Steel City.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="j2bok-review-card">
                    <div class="j2bok-review-stars">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p>
                        "I was transferred to Bokaro Steel Plant from Jamtara district. Shree Ashirwad Packers managed the entire shifting within 6 hours. Their team took exceptional care of our wooden furniture and glass showcase. Excellent service!"
                    </p>
                    <div class="j2bok-review-meta">
                        <span class="j2bok-review-author">Prabhat Kumar Tiwary</span>
                        <span class="j2bok-review-loc">Shifted to Sector 4, Bokaro</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="j2bok-review-card">
                    <div class="j2bok-review-stars">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p>
                        "Relocated our 2BHK flat from Mihijam to Chas, Bokaro. The packing quality was outstanding with multi-layer bubble wrap and strong boxes. Zero damages and very affordable pricing."
                    </p>
                    <div class="j2bok-review-meta">
                        <span class="j2bok-review-author">Anjali Mahato</span>
                        <span class="j2bok-review-loc">Shifted to Chas, Bokaro</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="j2bok-review-card">
                    <div class="j2bok-review-stars">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p>
                        "Shifted our household goods along with a Royal Enfield bike from Karmatar to Sector 9. The vehicle was packed securely without even a faint scratch. Truly professional movers in Jharkhand."
                    </p>
                    <div class="j2bok-review-meta">
                        <span class="j2bok-review-author">Manoj Murmu</span>
                        <span class="j2bok-review-loc">Shifted to Sector 9, Bokaro</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions Section -->
<section class="j2bok-section-alt">
    <div class="container">
        <div class="j2bok-heading-wrap">
            <span class="j2bok-pill">Got Questions?</span>
            <h2>Frequently Asked Questions About Jamtara to Bokaro Shifting</h2>
            <p>
                Find answers to common questions about moving schedules, packing methods, insurance documentation, and delivery commitments.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <details class="j2bok-faq-item" open>
                    <summary>How long does shifting take between Jamtara and Bokaro Steel City?</summary>
                    <div class="j2bok-faq-answer">
                        The total highway distance between Jamtara and Bokaro Steel City is approximately 120 km. Door-to-door transit generally takes 3.5 to 5 hours via Dhanbad and Chas bypass, allowing for same-day packing, transit, and unloading.
                    </div>
                </details>

                <details class="j2bok-faq-item">
                    <summary>What are the shifting rates from Jamtara to Bokaro?</summary>
                    <div class="j2bok-faq-answer">
                        Rates for 1 BHK flats range from ₹7,000 to ₹12,000, 2 BHK homes from ₹11,000 to ₹16,500, and 3 BHK family residences from ₹15,500 to ₹25,000. Single room or student transfers start as low as ₹4,000.
                    </div>
                </details>

                <details class="j2bok-faq-item">
                    <summary>Do you provide official GST bills for SAIL Bokaro Steel Plant transfers?</summary>
                    <div class="j2bok-faq-answer">
                        Yes, we furnish 100% compliant GST invoices, IBA-approved consignment notes, packing manifests, and money receipts recognized by SAIL, BSL, government departments, and private firms for employee transfer allowances.
                    </div>
                </details>

                <details class="j2bok-faq-item">
                    <summary>Can you shift household items to multi-story apartments in Bokaro Sectors?</summary>
                    <div class="j2bok-faq-answer">
                        Yes, our experienced loading crew manages delivery to any floor across Sector 1 through Sector 12, Co-operative Colony, City Centre, and Chas, utilizing high-capacity elevators or secure manual rope pulleys where needed.
                    </div>
                </details>

                <details class="j2bok-faq-item">
                    <summary>How do you protect delicate electronics like LED TVs and double-door fridges?</summary>
                    <div class="j2bok-faq-answer">
                        All appliances are shielded using heavy bubble wrap, thermocol edge corner buffers, corrugated cartons, and water-resistant stretch wrap to completely prevent scratches, internal vibration, or water ingress.
                    </div>
                </details>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); color: #ffffff; padding: 70px 0; text-align: center;">
    <div class="container">
        <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(2rem, 3.5vw, 2.8rem); font-weight: 800; margin-bottom: 20px;">
            Planning Your Move to Bokaro Steel City?
        </h2>
        <p style="color: #cbd5e1; font-size: 1.15rem; max-width: 680px; margin: 0 auto 35px; line-height: 1.7;">
            Contact us today for a free, transparent shifting estimate. Let Jharkhand's premier moving team deliver your household treasures with unmatched care and reliability.
        </p>
        <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
            <a href="tel:08409531615" class="j2bok-btn-primary" style="font-size: 1.1rem; padding: 16px 36px;">
                <i class="fa fa-phone"></i> Call 08409531615
            </a>
            <a href="https://wa.me/918409531615?text=Hi%20Shree%20Ashirwad,%20I%20want%20to%20book%20Jamtara%20to%20Bokaro%20shifting" class="j2bok-btn-secondary" style="font-size: 1.1rem; padding: 16px 36px;" target="_blank" rel="noopener">
                <i class="fa fa-whatsapp"></i> Chat on WhatsApp
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>
