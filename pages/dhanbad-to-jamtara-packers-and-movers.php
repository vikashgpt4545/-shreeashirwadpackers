<?php
/**
 * Page Name: Dhanbad to Jamtara Packers and Movers
 * Route Slug: dhanbad-to-jamtara-packers-and-movers
 * Description: Dedicated inter-district relocation route from Dhanbad coal city to Jamtara, Mihijam, and Karmatar.
 * Focus Keywords: dhanbad to jamtara packers and movers, packers and movers dhanbad to jamtara, house shifting dhanbad to jamtara, dhanbad to jamtara luggage transport, dhanbad to jamtara car carrier, dhanbad to jamtara bike parcel
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Dhanbad to Jamtara Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Quick Dhanbad to Jamtara packers and movers. 70 km fast 2-3 hr transit via Govindpur-NH-19, BCCL & bank transfer bills, 5-layer packing, car transport. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/dhanbad-to-jamtara-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="dhanbad to jamtara packers and movers, packers and movers dhanbad to jamtara, house shifting dhanbad to jamtara, dhanbad to jamtara luggage transport, dhanbad to jamtara car carrier, dhanbad to jamtara bike parcel">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Dhanbad">

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

    <!-- Scoped CSS for Route 7 (Dhanbad to Jamtara) -->
    <style>
        :root {
            --dhn2jam-primary: #1e3a5f;
            --dhn2jam-secondary: #0284c7;
            --dhn2jam-accent: #ea580c;
            --dhn2jam-accent-light: #ffedd5;
            --dhn2jam-dark: #0f172a;
            --dhn2jam-gray-bg: #f8fafc;
            --dhn2jam-border: #e2e8f0;
            --dhn2jam-card-shadow: 0 10px 25px -5px rgba(30, 58, 95, 0.08), 0 8px 10px -6px rgba(30, 58, 95, 0.04);
        }

        .dhn2jam-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 58, 95, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .dhn2jam-hero-badge {
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

        .dhn2jam-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2.1rem, 4.2vw, 3.2rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
            color: #ffffff;
        }

        .dhn2jam-hero p {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #cbd5e1;
            max-width: 780px;
            margin-bottom: 30px;
        }

        .dhn2jam-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .dhn2jam-btn-primary {
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

        .dhn2jam-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(234, 88, 12, 0.5);
            color: #ffffff;
        }

        .dhn2jam-btn-secondary {
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

        .dhn2jam-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.22);
            color: #ffffff;
        }

        .dhn2jam-stat-ribbon {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: var(--dhn2jam-card-shadow);
            margin-top: -35px;
            position: relative;
            z-index: 10;
            padding: 24px 30px;
            border: 1px solid var(--dhn2jam-border);
        }

        .dhn2jam-stat-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
            gap: 20px;
        }

        .dhn2jam-stat-item {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .dhn2jam-stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: var(--dhn2jam-accent-light);
            color: var(--dhn2jam-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            flex-shrink: 0;
        }

        .dhn2jam-stat-label {
            font-size: 0.85rem;
            color: #64748b;
            text-transform: uppercase;
            font-weight: 600;
            margin-bottom: 3px;
        }

        .dhn2jam-stat-val {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 800;
            color: var(--dhn2jam-dark);
        }

        .dhn2jam-section {
            padding: 70px 0;
        }

        .dhn2jam-section-alt {
            background: var(--dhn2jam-gray-bg);
            padding: 70px 0;
        }

        .dhn2jam-heading-wrap {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }

        .dhn2jam-pill {
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

        .dhn2jam-heading-wrap h2 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(1.85rem, 3.2vw, 2.5rem);
            font-weight: 800;
            color: var(--dhn2jam-dark);
            line-height: 1.25;
            margin-bottom: 15px;
        }

        .dhn2jam-heading-wrap p {
            color: #475569;
            font-size: 1.05rem;
            line-height: 1.65;
        }

        .dhn2jam-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 32px 28px;
            border: 1px solid var(--dhn2jam-border);
            box-shadow: var(--dhn2jam-card-shadow);
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .dhn2jam-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 30px -8px rgba(30, 58, 95, 0.12);
        }

        .dhn2jam-card-icon {
            width: 54px;
            height: 54px;
            background: #e0f2fe;
            color: var(--dhn2jam-secondary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .dhn2jam-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--dhn2jam-dark);
            margin-bottom: 12px;
        }

        .dhn2jam-card p {
            color: #64748b;
            font-size: 0.98rem;
            line-height: 1.65;
        }

        .dhn2jam-table-wrap {
            overflow-x: auto;
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--dhn2jam-border);
            box-shadow: var(--dhn2jam-card-shadow);
            margin: 35px 0 20px;
        }

        .dhn2jam-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            min-width: 650px;
        }

        .dhn2jam-table th {
            background: #1e3a5f;
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 700;
            font-size: 0.96rem;
        }

        .dhn2jam-table td {
            padding: 15px 20px;
            border-bottom: 1px solid var(--dhn2jam-border);
            color: #334155;
            font-size: 0.94rem;
        }

        .dhn2jam-table tr:hover td {
            background-color: #f8fafc;
        }

        .dhn2jam-route-pill-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 35px;
        }

        .dhn2jam-route-node {
            background: #ffffff;
            padding: 22px;
            border-radius: 10px;
            border-left: 4px solid var(--dhn2jam-accent);
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            border-top: 1px solid var(--dhn2jam-border);
            border-right: 1px solid var(--dhn2jam-border);
            border-bottom: 1px solid var(--dhn2jam-border);
        }

        .dhn2jam-route-node h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            color: var(--dhn2jam-dark);
            margin-bottom: 8px;
            font-weight: 700;
        }

        .dhn2jam-route-node p {
            color: #64748b;
            font-size: 0.92rem;
            line-height: 1.55;
            margin: 0;
        }

        .dhn2jam-img-showcase {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: var(--dhn2jam-card-shadow);
            margin-bottom: 24px;
            border: 1px solid var(--dhn2jam-border);
        }

        .dhn2jam-img-showcase img {
            width: 100%;
            height: 270px;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .dhn2jam-img-showcase:hover img {
            transform: scale(1.03);
        }

        .dhn2jam-img-caption {
            padding: 15px 18px;
            background: #ffffff;
            font-size: 0.92rem;
            font-weight: 600;
            color: var(--dhn2jam-dark);
            border-top: 1px solid var(--dhn2jam-border);
        }

        .dhn2jam-step-timeline {
            display: flex;
            flex-direction: column;
            gap: 24px;
            position: relative;
            margin-top: 40px;
        }

        .dhn2jam-step-card {
            display: flex;
            gap: 20px;
            background: #ffffff;
            padding: 24px;
            border-radius: 12px;
            border: 1px solid var(--dhn2jam-border);
            box-shadow: 0 4px 14px rgba(0,0,0,0.03);
        }

        .dhn2jam-step-num {
            width: 44px;
            height: 44px;
            background: var(--dhn2jam-primary);
            color: #ffffff;
            font-weight: 800;
            font-size: 1.25rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .dhn2jam-step-body h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--dhn2jam-dark);
            margin-bottom: 6px;
        }

        .dhn2jam-step-body p {
            color: #64748b;
            font-size: 0.94rem;
            line-height: 1.6;
            margin: 0;
        }

        .dhn2jam-faq-item {
            background: #ffffff;
            border: 1px solid var(--dhn2jam-border);
            border-radius: 10px;
            margin-bottom: 16px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.02);
        }

        .dhn2jam-faq-item summary {
            padding: 20px 24px;
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            font-size: 1.1rem;
            color: var(--dhn2jam-dark);
            cursor: pointer;
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #ffffff;
        }

        .dhn2jam-faq-item summary::-webkit-details-marker {
            display: none;
        }

        .dhn2jam-faq-item summary::after {
            content: "+";
            font-size: 1.4rem;
            font-weight: 400;
            color: var(--dhn2jam-accent);
        }

        .dhn2jam-faq-item[open] summary::after {
            content: "−";
        }

        .dhn2jam-faq-answer {
            padding: 0 24px 22px;
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
            border-top: 1px solid #f1f5f9;
            background: #fdfdfe;
        }

        .dhn2jam-review-card {
            background: #ffffff;
            padding: 26px;
            border-radius: 12px;
            border: 1px solid var(--dhn2jam-border);
            box-shadow: var(--dhn2jam-card-shadow);
        }

        .dhn2jam-review-stars {
            color: #f59e0b;
            font-size: 1.1rem;
            margin-bottom: 12px;
        }

        .dhn2jam-review-card p {
            font-style: italic;
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.6;
            margin-bottom: 16px;
        }

        .dhn2jam-review-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.88rem;
            border-top: 1px solid #f1f5f9;
            padding-top: 12px;
        }

        .dhn2jam-review-author {
            font-weight: 700;
            color: var(--dhn2jam-dark);
        }

        .dhn2jam-review-loc {
            color: #94a3b8;
        }

        .dhn2jam-highlight-box {
            background: linear-gradient(135deg, #eff6ff 0%, #fff7ed 100%);
            border: 1px solid #fed7aa;
            border-radius: 12px;
            padding: 28px;
            margin: 30px 0;
        }

        .dhn2jam-highlight-box h4 {
            font-family: 'Outfit', sans-serif;
            color: #c2410c;
            font-size: 1.25rem;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .dhn2jam-highlight-box p {
            color: #334155;
            font-size: 0.96rem;
            line-height: 1.65;
            margin: 0;
        }

        @media (max-width: 768px) {
            .dhn2jam-hero {
                padding: 60px 0 45px;
            }
            .dhn2jam-stat-ribbon {
                margin-top: 15px;
                padding: 20px;
            }
            .dhn2jam-cta-group {
                flex-direction: column;
                align-items: stretch;
            }
            .dhn2jam-btn-primary, .dhn2jam-btn-secondary {
                justify-content: center;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Dhanbad to Jamtara",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "https://www.shreeashirwadpackers.com/#movingcompany",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91-8409531615",
        "priceRange": "₹3,500 - ₹28,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Bank More, Near Overbridge",
            "addressLocality": "Dhanbad",
            "addressRegion": "Jharkhand",
            "postalCode": "826001",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 23.7957,
            "longitude": 86.4304
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
                "name": "Dhanbad"
            },
            {
                "@type": "City",
                "name": "Jamtara"
            }
        ],
        "description": "Short-distance rapid relocation from Coal Capital Dhanbad to Jamtara and Mihijam covering BCCL employee moves, residential household shifting, bike parcels, car carriers, and transit protection.",
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
                "name": "Dhanbad Packers and Movers",
                "item": "https://www.shreeashirwadpackers.com/packers-and-movers-in-dhanbad"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Dhanbad to Jamtara Route",
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
                "name": "How long does shifting take between Dhanbad and Jamtara?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The driving distance between Dhanbad and Jamtara is only around 70 km. Our dedicated container vehicles complete the journey within 2 to 3 hours via Govindpur and the NH-19 corridor, allowing complete same-day move completion."
                }
            },
            {
                "@type": "Question",
                "name": "What are the shifting rates from Dhanbad to Jamtara?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Shifting costs from Dhanbad to Jamtara average ₹3,500 to ₹7,000 for 1 RK / small studio flats, ₹6,500 to ₹11,000 for 1 BHK flats, ₹10,000 to ₹15,500 for 2 BHK homes, and ₹14,500 to ₹22,000 for 3 BHK bungalows. Transparent quotes with zero hidden extras."
                }
            },
            {
                "@type": "Question",
                "name": "Do you offer official relocation bills for BCCL, ECL, or railway transfers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide 100% compliant GST invoices, IBA-approved consignment bilty notes, detailed itemized packing manifests, and money receipts accepted by BCCL, ECL, Eastern Railway, banks, and government offices."
                }
            },
            {
                "@type": "Question",
                "name": "Can you shift household goods from Saraidhela or Hirapur to Mihijam directly?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide direct door-to-door transit from any Dhanbad neighborhood (Bank More, Saraidhela, Hirapur, Bartand, Katras) straight to Mihijam, Karmatar, or Jamtara town without transshipment."
                }
            },
            {
                "@type": "Question",
                "name": "How do you protect household goods from coal dust and road grime along the highway?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "All items are packed using airtight stretch film and 5-layer corrugated sheets before loading into fully closed waterproof steel containers, ensuring completely dust-free delivery to your new home."
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
            <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dhanbad" style="color: #0284c7; text-decoration: none;">Dhanbad</a> <span style="color: #94a3b8;">/</span></li>
            <li style="color: #64748b;" aria-current="page">Dhanbad to Jamtara</li>
        </ol>
    </div>
</nav>

<!-- Hero Section -->
<section class="dhn2jam-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="dhn2jam-hero-badge">Direct Coal Belt to Santhal Pargana &bull; 70 KM Fast Link</span>
                <h1>Reliable Dhanbad to Jamtara Packers and Movers</h1>
                <p>
                    Relocating from Dhanbad to Jamtara, Mihijam, or Karmatar? Shree Ashirwad Packers and Movers offers lightning-fast, zero-damage domestic shifting, BCCL and corporate employee moves, and secure vehicle transportation. Serving Bank More, Saraidhela, Hirapur, Bartand, Katras, and Govindpur to every corner of Jamtara district.
                </p>
                <div class="dhn2jam-cta-group">
                    <a href="tel:08409531615" class="dhn2jam-btn-primary">
                        <i class="fa fa-phone"></i> Call 8409531615 for Free Quote
                    </a>
                    <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Dhanbad%20to%20Jamtara%20relocation" class="dhn2jam-btn-secondary" target="_blank" rel="noopener">
                        <i class="fa fa-whatsapp"></i> WhatsApp Instant Estimate
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Ribbon -->
<div class="container">
    <div class="dhn2jam-stat-ribbon">
        <div class="dhn2jam-stat-grid">
            <div class="dhn2jam-stat-item">
                <div class="dhn2jam-stat-icon"><i class="fa fa-road"></i></div>
                <div>
                    <div class="dhn2jam-stat-label">Highway Distance</div>
                    <div class="dhn2jam-stat-val">~70 Kilometers</div>
                </div>
            </div>
            <div class="dhn2jam-stat-item">
                <div class="dhn2jam-stat-icon"><i class="fa fa-clock-o"></i></div>
                <div>
                    <div class="dhn2jam-stat-label">Door Transit Duration</div>
                    <div class="dhn2jam-stat-val">2 - 3 Hours</div>
                </div>
            </div>
            <div class="dhn2jam-stat-item">
                <div class="dhn2jam-stat-icon"><i class="fa fa-shield"></i></div>
                <div>
                    <div class="dhn2jam-stat-label">Cargo Safety</div>
                    <div class="dhn2jam-stat-val">Dust-Proof Sealed</div>
                </div>
            </div>
            <div class="dhn2jam-stat-item">
                <div class="dhn2jam-stat-icon"><i class="fa fa-file-text-o"></i></div>
                <div>
                    <div class="dhn2jam-stat-label">BCCL & Govt Claims</div>
                    <div class="dhn2jam-stat-val">100% Approved Bills</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Strategic Content Section -->
<section class="dhn2jam-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="dhn2jam-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Sealed waterproof moving truck for Dhanbad to Jamtara transit" loading="lazy">
                    <div class="dhn2jam-img-caption">
                        <i class="fa fa-truck" style="color: var(--dhn2jam-accent); margin-right: 8px;"></i>
                        Sealed container trucks running direct daily services from Dhanbad to Jamtara & Mihijam.
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="dhn2jam-pill">Fast Inter-District Transit</div>
                <h2 style="font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--dhn2jam-dark); font-size: 2.1rem; margin-bottom: 18px;">
                    Express Doorstep Relocation Between Dhanbad and Jamtara
                </h2>
                <p style="color: #475569; font-size: 1.02rem; line-height: 1.7; margin-bottom: 16px;">
                    Separated by just 70 kilometers of modern highway, the Dhanbad to Jamtara transit route is one of the most frequent moving corridors in eastern Jharkhand. Whether you are a mining employee from BCCL or ECL taking up a posting in Santhal Pargana, a healthcare worker moving to Jamtara Sadar Hospital, or a family relocating from bustling Bank More to a quiet home in Karmatar or Mihijam, our specialized relocation service ensures a hassle-free transition.
                </p>
                <p style="color: #475569; font-size: 1.02rem; line-height: 1.7; margin-bottom: 20px;">
                    Because coal mining districts like Dhanbad produce heavy airborne particulate dust along the Grand Trunk Road corridor, our team utilizes airtight multi-layer stretch wrap, sealed corrugated cartons, and dust-proof closed-body container trucks. Your clean sofas, mattresses, clothing, and electrical goods arrive in Jamtara completely fresh, unblemished, and ready for use.
                </p>
                <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                    <div style="flex: 1 1 200px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px 18px;">
                        <strong style="color: #1e3a5f; display: block; margin-bottom: 4px;"><i class="fa fa-check-circle text-success"></i> 2-3 Hour Quick Transit</strong>
                        <span style="color: #64748b; font-size: 0.9rem;">Packed in morning, settled before lunch.</span>
                    </div>
                    <div style="flex: 1 1 200px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px 18px;">
                        <strong style="color: #1e3a5f; display: block; margin-bottom: 4px;"><i class="fa fa-check-circle text-success"></i> Airtight Packing</strong>
                        <span style="color: #64748b; font-size: 0.9rem;">100% coal-dust and moisture resistant.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Route Geography & Highway Overview -->
<section class="dhn2jam-section-alt">
    <div class="container">
        <div class="dhn2jam-heading-wrap">
            <span class="dhn2jam-pill">Logistics Highway Blueprint</span>
            <h2>Route Geography & Highway Transit Analysis</h2>
            <p>
                A quick 70 km drive connects Dhanbad to Jamtara via Govindpur and the NH-19 corridor, providing smooth transit without highway stress.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="dhn2jam-card">
                    <div class="dhn2jam-card-icon"><i class="fa fa-map-signs"></i></div>
                    <h3>Primary Transit Corridor</h3>
                    <p>
                        The preferred route exits Dhanbad city via Govindpur to connect with NH-19 (GT Road). From Govindpur or Nirsa, well-paved state highways cut northeast directly toward Jamtara town and Mihijam, avoiding heavy railway crossing blockades.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dhn2jam-card">
                    <div class="dhn2jam-card-icon"><i class="fa fa-clock-o"></i></div>
                    <h3>Fast Same-Day Shifting</h3>
                    <p>
                        With a driving duration of only 2 to 3 hours, our clients enjoy complete same-day relocation. Our team packs your Dhanbad home in the morning, transports the container midday, and completes unpacking and bed reassembly in Jamtara by early evening.
                    </p>
                </div>
            </div>
            <div class="dhn2jam-card">
                <div class="dhn2jam-card-icon"><i class="fa fa-shield"></i></div>
                <h3>Exclusive Point-to-Point Trucking</h3>
                <p>
                    Even for short moves, we assign dedicated closed containers rather than shared freight. Your household effects are loaded, padlocked in your presence, and driven straight to your Jamtara destination without stops.
                </p>
            </div>
        </div>

        <!-- Major Node Points -->
        <div class="dhn2jam-route-pill-grid">
            <div class="dhn2jam-route-node">
                <h4>1. Origin Pickups: Dhanbad Coal Capital</h4>
                <p>Doorstep packing across Bank More, Saraidhela, Hirapur, Bartand, Steel Gate, Dhansar, Katras, Jharia, and Govindpur.</p>
            </div>
            <div class="dhn2jam-route-node">
                <h4>2. Mid-Highway Arterials</h4>
                <p>Swift transit along the Govindpur six-lane NH-19 expressway and smooth district connection roads leading into Santhal Pargana.</p>
            </div>
            <div class="dhn2jam-route-node">
                <h4>3. Destination Delivery: Jamtara District</h4>
                <p>Prompt delivery and room setup across Jamtara Town, Mihijam, Karmatar (Vidyasagar), Court Road, Nala, and Kundahit.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Portfolio Grid -->
<section class="dhn2jam-section">
    <div class="container">
        <div class="dhn2jam-heading-wrap">
            <span class="dhn2jam-pill">Comprehensive Relocation Services</span>
            <h2>Tailored Shifting Solutions from Dhanbad to Jamtara</h2>
            <p>
                Whether you need complete 3BHK household shifting, a single two-wheeler parcel, or corporate office relocation, Shree Ashirwad provides dedicated specialized solutions.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="dhn2jam-card">
                    <div class="dhn2jam-card-icon"><i class="fa fa-home"></i></div>
                    <h3>Household Furniture Shifting</h3>
                    <p>
                        Comprehensive packing for wardrobes, modular beds, dining tables, sofa sets, kitchen glassware, and delicate home electronics using multi-layer protective packaging.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="dhn2jam-card">
                    <div class="dhn2jam-card-icon"><i class="fa fa-briefcase"></i></div>
                    <h3>BCCL & PSU Employee Relocation</h3>
                    <p>
                        Turnkey relocation solutions compliant with corporate transfer guidelines. Includes customized packing schedules, priority unpacking, and GST-ready invoices.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="dhn2jam-card">
                    <div class="dhn2jam-card-icon"><i class="fa fa-car"></i></div>
                    <h3>Dedicated Car Carrier Service</h3>
                    <p>
                        Safe, damage-free motor car transportation utilizing enclosed hydraulic car haulers. Equipped with tire locks, safety harnesses, and transit insurance coverage.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="dhn2jam-card">
                    <div class="dhn2jam-card-icon"><i class="fa fa-motorcycle"></i></div>
                    <h3>Two-Wheeler Parcel Service</h3>
                    <p>
                        High-security bike parcel handling. Motorcycles and scooters are wrapped in corrugated wrap, bubble sheets, and wooden pallets to prevent highway scratches.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="dhn2jam-card">
                    <div class="dhn2jam-card-icon"><i class="fa fa-building"></i></div>
                    <h3>Industrial & Office Relocation</h3>
                    <p>
                        Disassembly, packing, and reinstallation of office workstations, server racks, desktop computer terminals, and sensitive commercial documents with minimal business downtime.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="dhn2jam-card">
                    <div class="dhn2jam-card-icon"><i class="fa fa-shield"></i></div>
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
<section class="dhn2jam-section-alt">
    <div class="container">
        <div class="dhn2jam-heading-wrap">
            <span class="dhn2jam-pill">Transparent Quotations</span>
            <h2>Dhanbad to Jamtara Shifting Cost Estimate</h2>
            <p>
                We believe in 100% upfront pricing with zero hidden charges, transparent toll calculations, and fair labour rates for door-to-door relocation.
            </p>
        </div>

        <div class="dhn2jam-table-wrap">
            <table class="dhn2jam-table">
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
                        <td>₹3,500 - ₹7,000</td>
                        <td>Same Day (2 - 2.5 Hours)</td>
                    </tr>
                    <tr>
                        <td><strong>1 BHK Apartment Complete Move</strong></td>
                        <td>Premium 4-Layer Foam + Bubble</td>
                        <td>14-ft Closed Container</td>
                        <td>₹6,500 - ₹11,000</td>
                        <td>Same Day (2 - 3 Hours)</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Family Home Relocation</strong></td>
                        <td>Executive 5-Layer Heavy Duty</td>
                        <td>17-ft / 19-ft Sealed Container</td>
                        <td>₹10,000 - ₹15,500</td>
                        <td>Same Day (2.5 - 3 Hours)</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK / Independent Bungalow</strong></td>
                        <td>Ultra-Secure Multi-Layer & Wooden Crates</td>
                        <td>20-ft / 24-ft Container Truck</td>
                        <td>₹14,500 - ₹22,000</td>
                        <td>Same Day (3 - 4 Hours)</td>
                    </tr>
                    <tr>
                        <td><strong>Motorcycle / Scooter Parcel</strong></td>
                        <td>Dual-Layer Bubble + Corrugated Wrap</td>
                        <td>Dedicated Covered Carrier</td>
                        <td>₹1,500 - ₹2,800</td>
                        <td>Same Day / 24 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>Hatchback / Sedan Car Transport</strong></td>
                        <td>Hydraulic Enclosed Hauler</td>
                        <td>Specialized Car Carrier Truck</td>
                        <td>₹5,000 - ₹8,500</td>
                        <td>24 Hours</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="text-align: center; color: #64748b; font-size: 0.9rem; margin-top: 15px;">
            <em>Note: The charges outlined above are indicative and vary based on consignment volume, floor levels, elevator availability, and chosen insurance value. Call 8409531615 for a precise doorstep estimate.</em>
        </p>

        <div class="dhn2jam-highlight-box">
            <h4><i class="fa fa-info-circle"></i> Why Dedicated Closed Containers Matter on Coalfield Corridors</h4>
            <p>
                Moving out of Dhanbad requires extra protection against coal dust and road grime. Unlike generic open trucks that leave furniture exposed under tarpaulins, Shree Ashirwad Packers assigns fully enclosed, waterproof steel container trucks. Every sofa, mattress, and electronic appliance arrives in Jamtara in pristine, spotless condition.
            </p>
        </div>
    </div>
</section>

<!-- Visual Gallery & Packaging Methodology -->
<section class="dhn2jam-section">
    <div class="container">
        <div class="dhn2jam-heading-wrap">
            <span class="dhn2jam-pill">Packaging Standards</span>
            <h2>Our High-Grade Packaging & Handling Standards</h2>
            <p>
                From delicate chinaware to heavy teakwood beds, see how our trained packaging specialists safeguard your valuable possessions during transit.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="dhn2jam-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="High grade multi layer household goods packing by Shree Ashirwad crew" loading="lazy">
                    <div class="dhn2jam-img-caption">
                        <strong>5-Layer Cushioning:</strong> Bubble wraps and high-density foam blankets protect wooden finishes and glass panels.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dhn2jam-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car loading onto closed hydraulic transport carrier" loading="lazy">
                    <div class="dhn2jam-img-caption">
                        <strong>Secured Vehicle Carriers:</strong> Hydraulic ramps and tire lashings ensure scratch-free automobile transport.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dhn2jam-img-showcase">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Professional unpacking and room setup service in Jamtara" loading="lazy">
                    <div class="dhn2jam-img-caption">
                        <strong>Room-Wise Unpacking:</strong> Reassembly of beds, furniture placement, and debris clean-up at your Jamtara residence.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5-Step Process Timeline -->
<section class="dhn2jam-section-alt">
    <div class="container">
        <div class="dhn2jam-heading-wrap">
            <span class="dhn2jam-pill">Execution Plan</span>
            <h2>Our 5-Step Seamless Relocation Process</h2>
            <p>
                We have perfected an organized, transparent, and stress-free moving pipeline refined through hundreds of successful relocations.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="dhn2jam-step-timeline">
                    <div class="dhn2jam-step-card">
                        <div class="dhn2jam-step-num">1</div>
                        <div class="dhn2jam-step-body">
                            <h4>Pre-Move Survey & Free Quotation</h4>
                            <p>We review your shifting requirements either via in-home survey in Dhanbad or through video inventory assessment. We provide a clear, all-inclusive written estimate detailing transport, packing, labor, and GST.</p>
                        </div>
                    </div>
                    <div class="dhn2jam-step-card">
                        <div class="dhn2jam-step-num">2</div>
                        <div class="dhn2jam-step-body">
                            <h4>Standardized Multi-Layer Packing</h4>
                            <p>Our experienced packaging crew arrives on moving day with specialized materials. Every piece of furniture, electronic gadget, and fragile kitchenware is labeled and wrapped following strict safety guidelines.</p>
                        </div>
                    </div>
                    <div class="dhn2jam-step-card">
                        <div class="dhn2jam-step-num">3</div>
                        <div class="dhn2jam-step-body">
                            <h4>Systematic Loading & Container Sealing</h4>
                            <p>Heavier goods are loaded at base level with shock-absorbing foam pads, followed by lighter carton boxes and mattress bags. Once loaded, the container is locked and sealed in front of you.</p>
                        </div>
                    </div>
                    <div class="dhn2jam-step-card">
                        <div class="dhn2jam-step-num">4</div>
                        <div class="dhn2jam-step-body">
                            <h4>Express 2-Hour Highway Transit</h4>
                            <p>Our professional highway drivers navigate the 70 km route through Govindpur smoothly, maintaining steady speeds and avoiding bumpy bypass roads to eliminate shifting stress.</p>
                        </div>
                    </div>
                    <div class="dhn2jam-step-card">
                        <div class="dhn2jam-step-num">5</div>
                        <div class="dhn2jam-step-body">
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
<section class="dhn2jam-section">
    <div class="container">
        <div class="j2bok-heading-wrap">
            <span class="dhn2jam-pill">Client Testimonials</span>
            <h2>What Our Customers Say About Dhanbad to Jamtara Relocation</h2>
            <p>
                Read verified reviews from clients who recently moved from Dhanbad to Jamtara with Shree Ashirwad.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="dhn2jam-review-card">
                    <div class="dhn2jam-review-stars">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p>
                        "Shifted my 2BHK flat from Saraidhela, Dhanbad to Mihijam. The crew was super efficient. They packed everything by 10 AM and by 1:30 PM goods were already delivered and assembled in Mihijam. Extremely happy with their speed and cleanliness!"
                    </p>
                    <div class="dhn2jam-review-meta">
                        <span class="dhn2jam-review-author">Abhishek Mukherjee</span>
                        <span class="dhn2jam-review-loc">Shifted to Mihijam, Jamtara</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dhn2jam-review-card">
                    <div class="dhn2jam-review-stars">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p>
                        "I was transferred from BCCL Koyla Bhawan to Jamtara district. Shree Ashirwad Packers provided official GST bills and handled my household shifting with utmost care. No hidden charges and 100% reimbursed."
                    </p>
                    <div class="dhn2jam-review-meta">
                        <span class="dhn2jam-review-author">Sunil Kumar Verma</span>
                        <span class="dhn2jam-review-loc">Shifted to Court Road, Jamtara</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dhn2jam-review-card">
                    <div class="dhn2jam-review-stars">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <p>
                        "Moved my complete home along with a Royal Enfield Meteor 350 from Bank More to Karmatar. Both the bike and my home electronics arrived in pristine shape. Great job by team Shree Ashirwad!"
                    </p>
                    <div class="dhn2jam-review-meta">
                        <span class="dhn2jam-review-author">Deepak Rajak</span>
                        <span class="dhn2jam-review-loc">Shifted to Karmatar, Jamtara</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions Section -->
<section class="dhn2jam-section-alt">
    <div class="container">
        <div class="dhn2jam-heading-wrap">
            <span class="dhn2jam-pill">Have Questions?</span>
            <h2>Frequently Asked Questions About Dhanbad to Jamtara Shifting</h2>
            <p>
                Find answers to common questions about moving schedules, packing methods, insurance documentation, and delivery commitments.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <details class="dhn2jam-faq-item" open>
                    <summary>How long does shifting take between Dhanbad and Jamtara?</summary>
                    <div class="dhn2jam-faq-answer">
                        The driving distance between Dhanbad and Jamtara is only around 70 km. Our dedicated container vehicles complete the journey within 2 to 3 hours via Govindpur and the NH-19 corridor, allowing complete same-day move completion.
                    </div>
                </details>

                <details class="dhn2jam-faq-item">
                    <summary>What are the shifting rates from Dhanbad to Jamtara?</summary>
                    <div class="dhn2jam-faq-answer">
                        Shifting costs from Dhanbad to Jamtara average ₹3,500 to ₹7,000 for 1 RK / small studio flats, ₹6,500 to ₹11,000 for 1 BHK flats, ₹10,000 to ₹15,500 for 2 BHK homes, and ₹14,500 to ₹22,000 for 3 BHK bungalows. Transparent quotes with zero hidden extras.
                    </div>
                </details>

                <details class="dhn2jam-faq-item">
                    <summary>Do you offer official relocation bills for BCCL, ECL, or railway transfers?</summary>
                    <div class="dhn2jam-faq-answer">
                        Yes, we provide 100% compliant GST invoices, IBA-approved consignment bilty notes, detailed itemized packing manifests, and money receipts accepted by BCCL, ECL, Eastern Railway, banks, and government offices.
                    </div>
                </details>

                <details class="dhn2jam-faq-item">
                    <summary>Can you shift household goods from Saraidhela or Hirapur to Mihijam directly?</summary>
                    <div class="dhn2jam-faq-answer">
                        Yes, we provide direct door-to-door transit from any Dhanbad neighborhood (Bank More, Saraidhela, Hirapur, Bartand, Katras) straight to Mihijam, Karmatar, or Jamtara town without transshipment.
                    </div>
                </details>

                <details class="dhn2jam-faq-item">
                    <summary>How do you protect household goods from coal dust and road grime along the highway?</summary>
                    <div class="dhn2jam-faq-answer">
                        All items are packed using airtight stretch film and 5-layer corrugated sheets before loading into fully closed waterproof steel containers, ensuring completely dust-free delivery to your new home.
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
            Planning Your Move from Dhanbad to Jamtara?
        </h2>
        <p style="color: #cbd5e1; font-size: 1.15rem; max-width: 680px; margin: 0 auto 35px; line-height: 1.7;">
            Contact us today for a free, transparent shifting estimate. Let Jharkhand's premier moving team deliver your household treasures with unmatched care and reliability.
        </p>
        <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
            <a href="tel:08409531615" class="dhn2jam-btn-primary" style="font-size: 1.1rem; padding: 16px 36px;">
                <i class="fa fa-phone"></i> Call 08409531615
            </a>
            <a href="https://wa.me/918409531615?text=Hi%20Shree%20Ashirwad,%20I%20want%20to%20book%20Dhanbad%20to%20Jamtara%20shifting" class="dhn2jam-btn-secondary" style="font-size: 1.1rem; padding: 16px 36px;" target="_blank" rel="noopener">
                <i class="fa fa-whatsapp"></i> Chat on WhatsApp
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>
