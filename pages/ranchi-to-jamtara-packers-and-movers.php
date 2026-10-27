<?php
/**
 * Page Name: Ranchi to Jamtara Packers and Movers
 * Route Slug: ranchi-to-jamtara-packers-and-movers
 * Description: Dedicated capital-to-district relocation route from Ranchi to Jamtara, Mihijam, and Karmatar.
 * Focus Keywords: ranchi to jamtara packers and movers, packers and movers ranchi to jamtara, house shifting ranchi to jamtara, ranchi to jamtara luggage parcel, ranchi to jamtara car carrier, ranchi to jamtara bike parcel
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Ranchi to Jamtara Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Fast Ranchi to Jamtara packers and movers. 220 km direct transit via Ramgarh-Dhanbad-NH-19, Secretariat & judicial transfer bills, 5-layer packing, car transport. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/ranchi-to-jamtara-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="ranchi to jamtara packers and movers, packers and movers ranchi to jamtara, house shifting ranchi to jamtara, ranchi to jamtara luggage parcel, ranchi to jamtara car carrier, ranchi to jamtara bike parcel">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Ranchi">

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

    <!-- Scoped CSS for Route 6 (Ranchi to Jamtara) -->
    <style>
        :root {
            --r2jam-primary: #0f766e;
            --r2jam-secondary: #0284c7;
            --r2jam-accent: #b45309;
            --r2jam-accent-light: #fef3c7;
            --r2jam-dark: #0f172a;
            --r2jam-gray-bg: #f8fafc;
            --r2jam-border: #e2e8f0;
            --r2jam-card-shadow: 0 10px 25px -5px rgba(15, 118, 110, 0.08), 0 8px 10px -6px rgba(15, 118, 110, 0.04);
        }

        .r2jam-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(15, 118, 110, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .r2jam-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(180, 83, 9, 0.2);
            border: 1px solid rgba(180, 83, 9, 0.5);
            padding: 7px 18px;
            border-radius: 9999px;
            font-size: 0.88rem;
            font-weight: 700;
            color: #fed7aa;
            margin-bottom: 22px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .r2jam-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2.1rem, 4.2vw, 3.2rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
            color: #ffffff;
        }

        .r2jam-hero p {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #cbd5e1;
            max-width: 780px;
            margin-bottom: 30px;
        }

        .r2jam-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .r2jam-btn-primary {
            background: linear-gradient(135deg, #b45309 0%, #92400e 100%);
            color: #ffffff;
            padding: 15px 32px;
            font-weight: 700;
            border-radius: 8px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 14px rgba(180, 83, 9, 0.4);
        }

        .r2jam-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(180, 83, 9, 0.5);
            color: #ffffff;
        }

        .r2jam-btn-secondary {
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

        .r2jam-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.22);
            color: #ffffff;
        }

        .r2jam-stat-ribbon {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: var(--r2jam-card-shadow);
            margin-top: -35px;
            position: relative;
            z-index: 10;
            padding: 24px 30px;
            border: 1px solid var(--r2jam-border);
        }

        .r2jam-stat-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
            gap: 20px;
        }

        .r2jam-stat-item {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .r2jam-stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: var(--r2jam-accent-light);
            color: var(--r2jam-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            flex-shrink: 0;
        }

        .r2jam-stat-label {
            font-size: 0.85rem;
            color: #64748b;
            text-transform: uppercase;
            font-weight: 600;
            margin-bottom: 3px;
        }

        .r2jam-stat-val {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 800;
            color: var(--r2jam-dark);
        }

        .r2jam-section {
            padding: 70px 0;
        }

        .r2jam-section-alt {
            background: var(--r2jam-gray-bg);
            padding: 70px 0;
        }

        .r2jam-heading-wrap {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }

        .r2jam-pill {
            display: inline-block;
            background: #ccfbf1;
            color: #0f766e;
            font-weight: 700;
            font-size: 0.84rem;
            padding: 5px 16px;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 12px;
        }

        .r2jam-heading-wrap h2 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(1.85rem, 3.2vw, 2.5rem);
            font-weight: 800;
            color: var(--r2jam-dark);
            line-height: 1.25;
            margin-bottom: 15px;
        }

        .r2jam-heading-wrap p {
            color: #475569;
            font-size: 1.05rem;
            line-height: 1.65;
        }

        .r2jam-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 32px 28px;
            border: 1px solid var(--r2jam-border);
            box-shadow: var(--r2jam-card-shadow);
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .r2jam-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 30px -8px rgba(15, 118, 110, 0.12);
        }

        .r2jam-card-icon {
            width: 54px;
            height: 54px;
            background: #ccfbf1;
            color: var(--r2jam-primary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .r2jam-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--r2jam-dark);
            margin-bottom: 12px;
        }

        .r2jam-card p {
            color: #64748b;
            font-size: 0.98rem;
            line-height: 1.65;
        }

        .r2jam-table-wrap {
            overflow-x: auto;
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--r2jam-border);
            box-shadow: var(--r2jam-card-shadow);
            margin: 35px 0 20px;
        }

        .r2jam-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            min-width: 650px;
        }

        .r2jam-table th {
            background: #0f766e;
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 700;
            font-size: 0.96rem;
        }

        .r2jam-table td {
            padding: 15px 20px;
            border-bottom: 1px solid var(--r2jam-border);
            color: #334155;
            font-size: 0.94rem;
        }

        .r2jam-table tr:hover td {
            background-color: #f8fafc;
        }

        .r2jam-route-pill-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 35px;
        }

        .r2jam-route-node {
            background: #ffffff;
            padding: 22px;
            border-radius: 10px;
            border-left: 4px solid var(--r2jam-accent);
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            border-top: 1px solid var(--r2jam-border);
            border-right: 1px solid var(--r2jam-border);
            border-bottom: 1px solid var(--r2jam-border);
        }

        .r2jam-route-node h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            color: var(--r2jam-dark);
            margin-bottom: 8px;
            font-weight: 700;
        }

        .r2jam-route-node p {
            color: #64748b;
            font-size: 0.92rem;
            line-height: 1.55;
            margin: 0;
        }

        .r2jam-img-showcase {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: var(--r2jam-card-shadow);
            margin-bottom: 24px;
            border: 1px solid var(--r2jam-border);
        }

        .r2jam-img-showcase img {
            width: 100%;
            height: 270px;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .r2jam-img-showcase:hover img {
            transform: scale(1.03);
        }

        .r2jam-img-caption {
            padding: 15px 18px;
            background: #ffffff;
            font-size: 0.92rem;
            font-weight: 600;
            color: var(--r2jam-dark);
            border-top: 1px solid var(--r2jam-border);
        }

        .r2jam-step-timeline {
            display: flex;
            flex-direction: column;
            gap: 24px;
            position: relative;
            margin-top: 40px;
        }

        .r2jam-step-card {
            display: flex;
            gap: 20px;
            background: #ffffff;
            padding: 24px;
            border-radius: 12px;
            border: 1px solid var(--r2jam-border);
            box-shadow: 0 4px 14px rgba(0,0,0,0.03);
        }

        .r2jam-step-num {
            width: 44px;
            height: 44px;
            background: var(--r2jam-primary);
            color: #ffffff;
            font-weight: 800;
            font-size: 1.25rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .r2jam-step-body h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--r2jam-dark);
            margin-bottom: 6px;
        }

        .r2jam-step-body p {
            color: #64748b;
            font-size: 0.94rem;
            line-height: 1.6;
            margin: 0;
        }

        .r2jam-faq-item {
            background: #ffffff;
            border: 1px solid var(--r2jam-border);
            border-radius: 10px;
            margin-bottom: 16px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.02);
        }

        .r2jam-faq-item summary {
            padding: 20px 24px;
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            font-size: 1.1rem;
            color: var(--r2jam-dark);
            cursor: pointer;
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #ffffff;
        }

        .r2jam-faq-item summary::-webkit-details-marker {
            display: none;
        }

        .r2jam-faq-item summary::after {
            content: "+";
            font-size: 1.4rem;
            font-weight: 400;
            color: var(--r2jam-accent);
        }

        .r2jam-faq-item[open] summary::after {
            content: "−";
        }

        .r2jam-faq-answer {
            padding: 0 24px 22px;
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
            border-top: 1px solid #f1f5f9;
            background: #fdfdfe;
        }

        .r2jam-review-card {
            background: #ffffff;
            padding: 26px;
            border-radius: 12px;
            border: 1px solid var(--r2jam-border);
            box-shadow: var(--r2jam-card-shadow);
        }

        .r2jam-review-stars {
            color: #f59e0b;
            font-size: 1.1rem;
            margin-bottom: 12px;
        }

        .r2jam-review-card p {
            font-style: italic;
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.6;
            margin-bottom: 16px;
        }

        .r2jam-review-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.88rem;
            border-top: 1px solid #f1f5f9;
            padding-top: 12px;
        }

        .r2jam-review-author {
            font-weight: 700;
            color: var(--r2jam-dark);
        }

        .r2jam-review-loc {
            color: #94a3b8;
        }

        .r2jam-highlight-box {
            background: linear-gradient(135deg, #f0fdfa 0%, #fffbeb 100%);
            border: 1px solid #99f6e4;
            border-radius: 12px;
            padding: 28px;
            margin: 30px 0;
        }

        .r2jam-highlight-box h4 {
            font-family: 'Outfit', sans-serif;
            color: #0f766e;
            font-size: 1.25rem;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .r2jam-highlight-box p {
            color: #334155;
            font-size: 0.96rem;
            line-height: 1.65;
            margin: 0;
        }

        @media (max-width: 768px) {
            .r2jam-hero {
                padding: 60px 0 45px;
            }
            .r2jam-stat-ribbon {
                margin-top: 15px;
                padding: 20px;
            }
            .r2jam-cta-group {
                flex-direction: column;
                align-items: stretch;
            }
            .r2jam-btn-primary, .r2jam-btn-secondary {
                justify-content: center;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Ranchi to Jamtara",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "https://www.shreeashirwadpackers.com/#movingcompany",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91-8409531615",
        "priceRange": "₹4,500 - ₹36,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Harmu Road, Near Sahajanand Chowk",
            "addressLocality": "Ranchi",
            "addressRegion": "Jharkhand",
            "postalCode": "834002",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 23.3441,
            "longitude": 85.3096
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
                "name": "Ranchi"
            },
            {
                "@type": "City",
                "name": "Jamtara"
            }
        ],
        "description": "Expert inter-district relocation from Jharkhand capital Ranchi to Jamtara district covering government administrative transfers, judicial staff moves, residential furniture, car carriers, and bike parcels.",
        "offers": {
            "@type": "Offer",
            "priceCurrency": "INR",
            "price": "4500",
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
                "name": "Ranchi Packers and Movers",
                "item": "https://www.shreeashirwadpackers.com/"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Ranchi to Jamtara Route",
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
                "name": "How much time does shifting take from Ranchi to Jamtara?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Ranchi and Jamtara is approximately 220 km. Our dedicated container trucks cover this distance in 6.5 to 8.5 hours via Ramgarh, Bokaro/Chas, and Dhanbad bypass, ensuring guaranteed same-day delivery."
                }
            },
            {
                "@type": "Question",
                "name": "What is the shifting cost for 1BHK, 2BHK, and 3BHK homes from Ranchi to Jamtara?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Indicative shifting prices from Ranchi to Jamtara are ₹8,000 to ₹13,500 for a 1 BHK home, ₹12,500 to ₹19,000 for a 2 BHK apartment, and ₹17,500 to ₹29,000 for a 3 BHK family house. Compact moves or single rooms start around ₹4,500."
                }
            },
            {
                "@type": "Question",
                "name": "Do you furnish valid transfer claim bills for Jharkhand Government & Secretariat employees?",
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
                "name": "How can I transport my car or bike safely from Ranchi to Jamtara?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We operate closed container vehicle carriers equipped with wheel stoppers and safety lashings. Your two-wheeler or car is loaded with ramp hydraulics, protected with bubble film, and covered by transit insurance."
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
            <li><a href="<?php echo SITE_BASE_URL; ?>/" style="color: #0f766e; text-decoration: none;">Home</a> <span style="color: #94a3b8;">/</span></li>
            <li><a href="<?php echo SITE_BASE_URL; ?>/" style="color: #0f766e; text-decoration: none;">Ranchi</a> <span style="color: #94a3b8;">/</span></li>
            <li style="color: #64748b;" aria-current="page">Ranchi to Jamtara</li>
        </ol>
    </div>
</nav>

<!-- Hero Section -->
<section class="r2jam-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="r2jam-hero-badge">Capital to Santhal Pargana Corridor &bull; 220 KM Express</span>
                <h1>Reliable Ranchi to Jamtara Packers and Movers</h1>
                <p>
                    Relocating from Ranchi to Jamtara, Mihijam, or Karmatar? Shree Ashirwad Packers and Movers guarantees zero-damage household relocation, government transfer moves, and prompt vehicle carrier solutions. Seamless doorstep service across Kanke Road, Morabadi, Bariatu, Doranda, Lalpur, and Harmu to every part of Jamtara district.
                </p>
                <div class="r2jam-cta-group">
                    <a href="tel:08409531615" class="r2jam-btn-primary">
                        <i class="fa fa-phone"></i> Call 8409531615 for Free Quote
                    </a>
                    <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Ranchi%20to%20Jamtara%20relocation" class="r2jam-btn-secondary" target="_blank" rel="noopener">
                        <i class="fa fa-whatsapp"></i> WhatsApp Instant Estimate
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Ribbon -->
<div class="container">
    <div class="r2jam-stat-ribbon">
        <div class="r2jam-stat-grid">
            <div class="r2jam-stat-item">
                <div class="r2jam-stat-icon"><i class="fa fa-road"></i></div>
                <div>
                    <div class="r2jam-stat-label">Highway Distance</div>
                    <div class="r2jam-stat-val">~220 Kilometers</div>
                </div>
            </div>
            <div class="r2jam-stat-item">
                <div class="r2jam-stat-icon"><i class="fa fa-clock-o"></i></div>
                <div>
                    <div class="r2jam-stat-label">Doorstep Delivery Time</div>
                    <div class="r2jam-stat-val">6.5 - 8.5 Hours</div>
                </div>
            </div>
            <div class="r2jam-stat-item">
                <div class="r2jam-stat-icon"><i class="fa fa-shield"></i></div>
                <div>
                    <div class="r2jam-stat-label">Transit Guarantee</div>
                    <div class="r2jam-stat-val">100% Zero-Damage</div>
                </div>
            </div>
            <div class="r2jam-stat-item">
                <div class="r2jam-stat-icon"><i class="fa fa-file-text-o"></i></div>
                <div>
                    <div class="r2jam-stat-label">Govt & Bank Invoices</div>
                    <div class="r2jam-stat-val">100% Claim Compliant</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Strategic Content Section -->
<section class="r2jam-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="r2jam-img-showcase">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Waterproof closed container truck for Ranchi to Jamtara transit" loading="lazy">
                    <div class="r2jam-img-caption">
                        <i class="fa fa-truck" style="color: var(--r2jam-accent); margin-right: 8px;"></i>
                        Sealed container trucks providing point-to-point transit from Ranchi to Jamtara and Mihijam.
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="r2jam-pill">Capital to District Relocation</div>
                <h2 style="font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--r2jam-dark); font-size: 2.1rem; margin-bottom: 18px;">
                    Stress-Free Moving from Jharkhand Capital to Jamtara District
                </h2>
                <p style="color: #475569; font-size: 1.02rem; line-height: 1.7; margin-bottom: 16px;">
                    As the administrative, judicial, and financial epicenter of Jharkhand, Ranchi routinely witnesses personnel transfers to eastern districts including Jamtara. Whether you are an officer posted to the Jamtara Collectorate, a judicial magistrate shifting to the District Court, a railway professional heading to Chittaranjan/Mihijam, or a family returning to your ancestral residence in Karmatar or Nala, safe relocation is paramount.
                </p>
                <p style="color: #475569; font-size: 1.02rem; line-height: 1.7; margin-bottom: 20px;">
                    Shree Ashirwad Packers and Movers eliminates all shifting friction. Our Ranchi crew arrives promptly with heavy corrugated cartons, premium multi-layer bubble wrap, foam rolls, and heavy-duty strapping tape. We disassemble modular wardrobes, wrap LCD screens, pack fragile kitchen glassware into compartmentalized boxes, and transport everything in weather-shielded container trucks directly to Jamtara.
                </p>
                <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                    <div style="flex: 1 1 200px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px 18px;">
                        <strong style="color: #0f766e; display: block; margin-bottom: 4px;"><i class="fa fa-check-circle text-success"></i> Direct Highway Transit</strong>
                        <span style="color: #64748b; font-size: 0.9rem;">No midway cargo transfers or hub delays.</span>
                    </div>
                    <div style="flex: 1 1 200px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px 18px;">
                        <strong style="color: #0f766e; display: block; margin-bottom: 4px;"><i class="fa fa-check-circle text-success"></i> Transfer Allowance Bills</strong>
                        <span style="color: #64748b; font-size: 0.9rem;">Approved GST bilty for quick reimbursement.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Route Geography & Highway Overview -->
<section class="r2jam-section-alt">
    <div class="container">
        <div class="r2jam-heading-wrap">
            <span class="r2jam-pill">Logistics Highway Blueprint</span>
            <h2>Route Geography & Highway Transit Analysis</h2>
            <p>
                Our transport coordinators evaluate roadway conditions across the Chota Nagpur plateau into Santhal Pargana to ensure smooth, punctual transit.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="r2jam-card">
                    <div class="r2jam-card-icon"><i class="fa fa-map-signs"></i></div>
                    <h3>Primary Transit Highway</h3>
                    <p>
                        The preferred freight route follows the four-lane NH-33 from Ranchi through Ormanjhi, Ramgarh Cantt, cutting across towards Bokaro/Chas, and proceeding past Dhanbad via NH-19 (Grand Trunk Road) to Govindpur, where regional arterials branch directly into Jamtara.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="r2jam-card">
                    <div class="r2jam-card-icon"><i class="fa fa-clock-o"></i></div>
                    <h3>Departure & City Exit Timing</h3>
                    <p>
                        To avoid peak morning traffic on Ranchi's Booty More and Ormanjhi toll gates, our packing team operates with military precision. We schedule truck departures around noon or early afternoon, reaching Jamtara by evening without encountering highway gridlocks.
                    </p>
                </div>
            </div>
            <div class="r2jam-card">
                <div class="r2jam-card-icon"><i class="fa fa-shield"></i></div>
                <h3>Closed Container Safety</h3>
                <p>
                    All items travel inside completely closed, waterproof container trucks. Your consignment is secured with heavy cargo nets, padded sidewalls, and floor cushions to eliminate internal movement during highway travel.
                </p>
            </div>
        </div>

        <!-- Major Node Points -->
        <div class="r2jam-route-pill-grid">
            <div class="r2jam-route-node">
                <h4>1. Origin Pickups: Ranchi Capital Region</h4>
                <p>Comprehensive pickup across Morabadi, Bariatu, Kanke Road, Lalpur, Harmu Housing Colony, Doranda, Hinoo, Namkum, and Tupudana.</p>
            </div>
            <div class="r2jam-route-node">
                <h4>2. Mid-Highway Waypoints</h4>
                <p>Direct navigation via Ramgarh valley bypass, Chas flyover, Mahuda junction, Govindpur NH-19 corridor, and Jamtara connecting road.</p>
            </div>
            <div class="r2jam-route-node">
                <h4>3. Destination Delivery: Jamtara District</h4>
                <p>Safe unloading and setup across Jamtara Town, Court Compound, Mihijam, Karmatar (Vidyasagar), Nala, Kundahit, and nearby blocks.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Portfolio Grid -->
<section class="r2jam-section">
    <div class="container">
        <div class="r2jam-heading-wrap">
            <span class="r2jam-pill">Full Relocation Spectrum</span>
            <h2>Comprehensive Shifting Services from Ranchi to Jamtara</h2>
            <p>
                We provide tailored shifting solutions whether you require an all-inclusive household shifting package, dedicated vehicle transport, or office equipment relocation.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="r2jam-card">
                    <div class="r2jam-card-icon"><i class="fa fa-home"></i></div>
                    <h3>Household Goods Relocation</h3>
                    <p>
                        High-grade packing for bedroom sets, sofas, dining tables, modular kitchens, LED televisions, and delicate crockery using specialized multi-layer packaging.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="r2jam-card">
                    <div class="r2jam-card-icon"><i class="fa fa-university"></i></div>
                    <h3>Government & Judicial Transfers</h3>
                    <p>
                        Specialized relocation support for government officers, judicial staff, police personnel, and bank managers transferred from Ranchi to Jamtara with approved GST documentation.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="r2jam-card">
                    <div class="r2jam-card-icon"><i class="fa fa-car"></i></div>
                    <h3>Automobile Transportation</h3>
                    <p>
                        Safe enclosed car transport service utilizing hydraulic carriers equipped with safety wheel chocks, side padding, and comprehensive transit insurance.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="r2jam-card">
                    <div class="r2jam-card-icon"><i class="fa fa-motorcycle"></i></div>
                    <h3>Two-Wheeler Parcel Service</h3>
                    <p>
                        Door-to-door bike and scooter parcel handling. Packed with bubble film and corrugated sheets, strapped firmly in closed container trucks to prevent any road abrasions.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="r2jam-card">
                    <div class="r2jam-card-icon"><i class="fa fa-briefcase"></i></div>
                    <h3>Office & IT Equipment Moving</h3>
                    <p>
                        Disassembly, organized labeling, and safe transit for corporate workstations, computer peripherals, confidential archives, and office furniture.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="r2jam-card">
                    <div class="r2jam-card-icon"><i class="fa fa-shield"></i></div>
                    <h3>Transit Insurance & Protection</h3>
                    <p>
                        Comprehensive all-risk transit insurance safeguarding all your declared household belongings against unexpected highway collisions or unpredictable transit events.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Table Section -->
<section class="r2jam-section-alt">
    <div class="container">
        <div class="r2jam-heading-wrap">
            <span class="r2jam-pill">Transparent Quotations</span>
            <h2>Ranchi to Jamtara Shifting Cost Estimate</h2>
            <p>
                Transparent pricing with no surprise toll charges or hidden packing fees on the day of your move.
            </p>
        </div>

        <div class="j2bok-table-wrap">
            <table class="r2jam-table">
                <thead>
                    <tr>
                        <th>Consignment Volume / Flat Type</th>
                        <th>Packing Material Grade</th>
                        <th>Truck Assigned</th>
                        <th>Estimated Price Range</th>
                        <th>Doorstep Transit Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 RK / Studio / Student Luggage</strong></td>
                        <td>Standard 3-Layer Corrugated</td>
                        <td>Tata Ace / Mahindra Pickup</td>
                        <td>₹4,500 - ₹8,500</td>
                        <td>Same Day (6 - 7 Hours)</td>
                    </tr>
                    <tr>
                        <td><strong>1 BHK Apartment Complete Move</strong></td>
                        <td>Premium 4-Layer Foam + Bubble</td>
                        <td>14-ft Closed Container</td>
                        <td>₹8,000 - ₹13,500</td>
                        <td>Same Day (6.5 - 8 Hours)</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Family Home Relocation</strong></td>
                        <td>Executive 5-Layer Heavy Duty</td>
                        <td>17-ft / 19-ft Sealed Container</td>
                        <td>₹12,500 - ₹19,000</td>
                        <td>Same Day (7 - 8.5 Hours)</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK / Independent House Move</strong></td>
                        <td>Ultra-Secure Multi-Layer & Wooden Crates</td>
                        <td>20-ft / 24-ft Container Truck</td>
                        <td>₹17,500 - ₹29,000</td>
                        <td>Same Day or Next Morning</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                        <td>Dual-Layer Bubble + Corrugated Wrap</td>
                        <td>Dedicated Covered Carrier</td>
                        <td>₹2,200 - ₹3,800</td>
                        <td>24 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>Hatchback / Sedan Car Carrier</strong></td>
                        <td>Wheel-Locked Specialized Carrier</td>
                        <td>Hydraulic Enclosed Carrier</td>
                        <td>₹7,000 - ₹11,000</td>
                        <td>24 to 48 Hours</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="text-align: center; color: #64748b; font-size: 0.9rem; margin-top: 15px;">
            <em>Note: The rates listed above are transparent estimates. Actual cost depends on exact volume of goods, floor number, lift availability, and chosen insurance value. Call 8409531615 for a firm quotation.</em>
        </p>

        <div class="r2jam-highlight-box">
            <h4><i class="fa fa-info-circle"></i> Complete Reimbursement Documentation for Government Officers</h4>
            <p>
                Transferring from Project Building Secretariat, High Court, or central government offices in Ranchi to Jamtara? We issue complete company-sealed documentation including 100% compliant GST invoices, IBA-format consignment notes, itemized packing lists, and advance money receipts to guarantee immediate claims settlement.
            </p>
        </div>
    </div>
</section>

<!-- Visual Gallery & Packaging Methodology -->
<section class="r2jam-section">
    <div class="container">
        <div class="r2jam-heading-wrap">
            <span class="r2jam-pill">Packaging Standards</span>
            <h2>Rigorous Packaging & Handling Standards</h2>
            <p>
                Review our systematic protective wrapping procedures engineered to prevent scratches, dents, and vibrations during highway travel.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="r2jam-img-showcase">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Household furniture packing by skilled packers in Ranchi" loading="lazy">
                    <div class="r2jam-img-caption">
                        <strong>5-Layer Cushioning:</strong> Multi-layer bubble wrap, foam corner protectors, and heavy corrugated sheets protect every wooden edge.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="r2jam-img-showcase">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car loading onto closed hydraulic vehicle carrier" loading="lazy">
                    <div class="r2jam-img-caption">
                        <strong>Secured Vehicle Carriers:</strong> Hydraulic ramps, tire chocks, and tie-down harnesses ensure scratchless vehicle transport.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="r2jam-img-showcase">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and furniture assembly service in Jamtara" loading="lazy">
                    <div class="r2jam-img-caption">
                        <strong>Room-Wise Unpacking:</strong> Reassembly of beds, wardrobe positioning, and clean disposal of packing waste in Jamtara.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5-Step Process Timeline -->
<section class="r2jam-section-alt">
    <div class="container">
        <div class="r2jam-heading-wrap">
            <span class="r2jam-pill">Execution Plan</span>
            <h2>Our 5-Step Seamless Relocation Process</h2>
            <p>
                From initial survey in Ranchi to final room placement in Jamtara, our structured methodology ensures peace of mind.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="r2jam-step-timeline">
                    <div class="r2jam-step-card">
                        <div class="r2jam-step-num">1</div>
                        <div class="r2jam-step-body">
                            <h4>Initial Survey & Transparent Quotation</h4>
                            <p>We review your items either through an in-person home survey in Ranchi or via video inventory check, delivering a transparent all-inclusive quote with no hidden charges.</p>
                        </div>
                    </div>
                    <div class="r2jam-step-card">
                        <div class="r2jam-step-num">2</div>
                        <div class="r2jam-step-body">
                            <h4>Specialized Multi-Layer Packing</h4>
                            <p>Our skilled packers wrap each item using 5 layers of premium protective material, including heavy bubble rolls, edge protectors, and corrugated boxes labeled room by room.</p>
                        </div>
                    </div>
                    <div class="r2jam-step-card">
                        <div class="r2jam-step-num">3</div>
                        <div class="r2jam-step-body">
                            <h4>Systematic Loading & Container Sealing</h4>
                            <p>Cargo is loaded into weather-shielded closed container trucks with heavy padding and security lashings. The container is locked and sealed in your presence before departure.</p>
                        </div>
                    </div>
                    <div class="r2jam-step-card">
                        <div class="r2jam-step-num">4</div>
                        <div class="r2jam-step-body">
                            <h4>Safe Highway Transit to Jamtara</h4>
                            <p>Our experienced drivers navigate the 220 km highway via Ramgarh, Bokaro, and Dhanbad bypass, maintaining steady speeds and providing regular location updates.</p>
                        </div>
                    </div>
                    <div class="r2jam-step-card">
                        <div class="r2jam-step-num">5</div>
                        <div class="r2jam-step-body">
                            <h4>Doorstep Delivery, Unpacking & Setup</h4>
                            <p>Upon arrival in Jamtara, our crew carries your goods inside, assists with room-by-room furniture assembly, and disposes of packing carton waste neatly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Customer Reviews Section -->
<section class="r2jam-section">
    <div class="container">
        <div class="r2jam-heading-wrap">
            <span class="r2jam-pill">Client Testimonials</span>
            <h2>What Our Customers Say About Ranchi to Jamtara Moving</h2>
            <p>
                Read reviews from clients who recently moved from Ranchi to Jamtara with Shree Ashirwad Packers and Movers.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="r2jam-review-card">
                    <div class="r2jam-review-stars">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p>
                        "Transferred from Ranchi secretariat to the Jamtara administrative office. Shree Ashirwad Packers handled my entire 3BHK flat shifting with extreme care. The GST invoice and bilty were approved by my department without any objections."
                    </p>
                    <div class="r2jam-review-meta">
                        <span class="r2jam-review-author">Birendra Kumar Das</span>
                        <span class="r2jam-review-loc">Shifted to Court Compound, Jamtara</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="r2jam-review-card">
                    <div class="r2jam-review-stars">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p>
                        "We moved our home from Kanke Road, Ranchi to Mihijam. The team arrived on time at 7 AM, completed packaging smoothly, and delivered everything safely by 5 PM. No broken items and very polite staff."
                    </p>
                    <div class="r2jam-review-meta">
                        <span class="r2jam-review-author">Shampa Banerjee</span>
                        <span class="r2jam-review-loc">Shifted to Mihijam, Jamtara</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="r2jam-review-card">
                    <div class="r2jam-review-stars">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p>
                        "Shifted my Honda City car and 2BHK furniture from Morabadi to Karmatar. The car carrier service was top-notch with zero scratches, and the furniture was delivered directly to my doorstep. Best moving company in Jharkhand!"
                    </p>
                    <div class="r2jam-review-meta">
                        <span class="r2jam-review-author">Saurabh Ranjan</span>
                        <span class="r2jam-review-loc">Shifted to Karmatar, Jamtara</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions Section -->
<section class="r2jam-section-alt">
    <div class="container">
        <div class="r2jam-heading-wrap">
            <span class="r2jam-pill">Have Questions?</span>
            <h2>Frequently Asked Questions About Ranchi to Jamtara Shifting</h2>
            <p>
                Find answers to common questions about moving schedules, packing methods, insurance documentation, and delivery commitments.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <details class="r2jam-faq-item" open>
                    <summary>How much time does shifting take from Ranchi to Jamtara?</summary>
                    <div class="r2jam-faq-answer">
                        The highway distance between Ranchi and Jamtara is approximately 220 km. Our dedicated container trucks cover this distance in 6.5 to 8.5 hours via Ramgarh, Bokaro/Chas, and Dhanbad bypass, ensuring guaranteed same-day delivery.
                    </div>
                </details>

                <details class="r2jam-faq-item">
                    <summary>What is the shifting cost for 1BHK, 2BHK, and 3BHK homes from Ranchi to Jamtara?</summary>
                    <div class="r2jam-faq-answer">
                        Indicative shifting prices from Ranchi to Jamtara are ₹8,000 to ₹13,500 for a 1 BHK home, ₹12,500 to ₹19,000 for a 2 BHK apartment, and ₹17,500 to ₹29,000 for a 3 BHK family house. Compact moves or single rooms start around ₹4,500.
                    </div>
                </details>

                <details class="r2jam-faq-item">
                    <summary>Do you furnish valid transfer claim bills for Jharkhand Government & Secretariat employees?</summary>
                    <div class="r2jam-faq-answer">
                        Yes, we specialize in government transfer billing. We provide valid GST invoices, IBA-standard consignment notes (LR/bilty), detailed packing manifests, and stamped money receipts needed for administrative, judicial, police, and bank transfer reimbursements.
                    </div>
                </details>

                <details class="r2jam-faq-item">
                    <summary>Can you shift household goods directly to Mihijam or Karmatar?</summary>
                    <div class="r2jam-faq-answer">
                        Yes, our delivery coverage spans the entire Jamtara district including Jamtara town, Mihijam, Karmatar (Vidyasagar), Nala, Kundahit, and all rural administrative blocks without any third-party transshipment.
                    </div>
                </details>

                <details class="r2jam-faq-item">
                    <summary>How can I transport my car or bike safely from Ranchi to Jamtara?</summary>
                    <div class="r2jam-faq-answer">
                        We operate closed container vehicle carriers equipped with wheel stoppers and safety lashings. Your two-wheeler or car is loaded with ramp hydraulics, protected with bubble film, and covered by transit insurance.
                    </div>
                </details>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section style="background: linear-gradient(135deg, #0f766e 0%, #0f172a 100%); color: #ffffff; padding: 70px 0; text-align: center;">
    <div class="container">
        <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(2rem, 3.5vw, 2.8rem); font-weight: 800; margin-bottom: 20px;">
            Ready to Move from Ranchi to Jamtara?
        </h2>
        <p style="color: #cbd5e1; font-size: 1.15rem; max-width: 680px; margin: 0 auto 35px; line-height: 1.7;">
            Get an instant, transparent shifting estimate today. Experience the unmatched safety, speed, and reliability of Shree Ashirwad Packers and Movers.
        </p>
        <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
            <a href="tel:08409531615" class="r2jam-btn-primary" style="font-size: 1.1rem; padding: 16px 36px;">
                <i class="fa fa-phone"></i> Call 08409531615
            </a>
            <a href="https://wa.me/918409531615?text=Hi%20Shree%20Ashirwad,%20I%20want%20to%20book%20Ranchi%20to%20Jamtara%20shifting" class="r2jam-btn-secondary" style="font-size: 1.1rem; padding: 16px 36px;" target="_blank" rel="noopener">
                <i class="fa fa-whatsapp"></i> Chat on WhatsApp
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>
