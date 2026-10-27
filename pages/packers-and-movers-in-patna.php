<?php
/**
 * Page Name: Packers and Movers in Patna
 * Target File: pages/packers-and-movers-in-patna.php
 * Target URL Slug: packers-and-movers-in-patna
 * Canonical URL: https://www.shreeashirwadpackers.com/packers-and-movers-in-patna
 * Tier: Tier 1 City Authority Hub (Patna Metropolitan & Regional Headquarters)
 * Focus Keywords: packers and movers in patna, best packers and movers in patna, movers and packers patna, household shifting patna, car transport in patna, local shifting in patna, iba approved packers in patna
 */

$page_title = "Packers and Movers in Patna | Safe Home & Office Shifting";
$page_description = "Reliable packers and movers in Patna by Shree Ashirwad Packers. IBA-approved household shifting, car & bike carrier, office relocation, 5-layer packing & GPS containers. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/packers-and-movers-in-patna";
$current_page = "services";

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
    <meta name="keywords" content="packers and movers in patna, best packers and movers in patna, movers and packers patna, household shifting patna, car transport in patna, bike courier patna, iba approved packers in patna, packers and movers boring road, packers and movers kankarbagh, packers and movers bailey road, packers and movers danapur patna">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <!-- Open Graph Metadata -->
    <meta property="og:locale" content="en_IN">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:url" content="<?php echo $canonical_url; ?>">
    <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="800">
    <meta property="og:image:alt" content="Packers and Movers in Patna - Shree Ashirwad Logistics Fleet">

    <!-- Twitter Card Metadata -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg">

    <!-- Geo Tags for Patna, Bihar -->
    <meta name="geo.region" content="IN-BR">
    <meta name="geo.placename" content="Patna">
    <meta name="geo.position" content="25.5941;85.1376">
    <meta name="ICBM" content="25.5941, 85.1376">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
    <link rel="shortcut icon" href="<?php echo SITE_BASE_URL; ?>/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">

    <!-- Google Fonts & Core Stylesheet -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- JSON-LD 1: MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "@id": "<?php echo $canonical_url; ?>/#movingcompany",
        "name": "Shree Ashirwad Packers and Movers Patna",
        "alternateName": "Shree Ashirwad Logistics Patna Hub",
        "url": "<?php echo $canonical_url; ?>",
        "logo": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "description": "Licensed and IBA-approved packers and movers in Patna providing household relocation, vehicle transportation, corporate moving, and secure storage across Bihar and India.",
        "telephone": "+918409531615",
        "priceRange": "₹₹",
        "email": "support@shreeashirwadpackers.com",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Saguna More, Bailey Road, Danapur",
            "addressLocality": "Patna",
            "addressRegion": "Bihar",
            "postalCode": "801503",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 25.5941,
            "longitude": 85.1376
        },
        "areaServed": [
            { "@type": "City", "name": "Patna" },
            { "@type": "AdministrativeArea", "name": "Danapur" },
            { "@type": "AdministrativeArea", "name": "Khagaul" },
            { "@type": "AdministrativeArea", "name": "Phulwari Sharif" },
            { "@type": "State", "name": "Bihar" }
        ],
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            "opens": "06:30",
            "closes": "22:30"
        }
    }
    </script>

    <!-- JSON-LD 2: BreadcrumbList Schema -->
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
                "name": "Services",
                "item": "<?php echo SITE_BASE_URL; ?>/#services"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Packers and Movers in Patna",
                "item": "<?php echo $canonical_url; ?>"
            }
        ]
    }
    </script>

    <!-- JSON-LD 3: Service Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Relocation and Logistics Services in Patna",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers Patna",
            "telephone": "+918409531615",
            "url": "<?php echo $canonical_url; ?>"
        },
        "areaServed": {
            "@type": "City",
            "name": "Patna"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Patna Relocation Services Catalog",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Local Household Shifting in Patna"
                    },
                    "priceCurrency": "INR",
                    "price": "4500"
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Interstate Relocation from Patna"
                    },
                    "priceCurrency": "INR",
                    "price": "14500"
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Car Carrier Transport in Patna"
                    },
                    "priceCurrency": "INR",
                    "price": "9500"
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Bike Courier & Packing in Patna"
                    },
                    "priceCurrency": "INR",
                    "price": "2800"
                }
            ]
        }
    }
    </script>

    <!-- JSON-LD 4: FAQPage Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "How much do packers and movers in Patna charge for local house shifting?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting charges in Patna typically range from ₹4,500 to ₹7,500 for a 1 BHK flat, ₹7,000 to ₹12,500 for a 2 BHK apartment, and ₹11,000 to ₹18,500 for a 3 BHK residence. Total pricing depends on packing material grade, floor levels, elevator availability, and moving truck parking access."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide moving services across narrow lanes in Old Patna and Kankarbagh?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. For congested localities like Kankarbagh tempo stands, Rajendra Nagar lanes, Bakerganj, and Ashok Rajpath, we deploy small shuttle vehicles (Tata Ace / Mahindra Bolero Maxi Truck) to ferry goods from narrow lanes to our large container trucks stationed on wide bypass roads."
                }
            },
            {
                "@type": "Question",
                "name": "Are your moving bills eligible for Central & Bihar Government transfer claims?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Absolutely. Shree Ashirwad Packers and Movers provides official 100% IBA-approved relocation bills, valid GST invoices (SAC 9965/9967), computerized bilty (consignment notes), and signed itemized inventory lists accepted by Patna Secretariat, High Court, AIIMS Patna, Indian Railways (ECR), and commercial banks."
                }
            },
            {
                "@type": "Question",
                "name": "How are moving trucks scheduled given heavy vehicle entry restrictions in Patna?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Patna Traffic Police enforces heavy vehicle no-entry rules during daytime peak hours (generally 8:00 AM to 10:00 PM on major arteries like Bailey Road, Fraser Road, and Ashok Rajpath). We plan long-distance dispatches through night-time departure windows or utilize daytime-permitted commercial mini-vans."
                }
            },
            {
                "@type": "Question",
                "name": "Do you handle car transport and bike courier from Patna to other states?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we operate specialized covered car carriers with hydraulic loading ramps and enclosed two-wheeler berths. Vehicles receive digital pre-dispatch inspection reports, foam and bubble wrapping, wheel lockdowns, and all-risk transit insurance."
                }
            },
            {
                "@type": "Question",
                "name": "How quickly can a pre-move home survey team arrive at my residence in Patna?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our Patna field supervisors can arrive at your doorstep in Boring Road, Bailey Road, Patliputra Colony, Kankarbagh, or Danapur within 60 to 90 minutes. We also provide instant virtual video surveys via WhatsApp for immediate quotations."
                }
            }
        ]
    }
    </script>

    <!-- Scoped Styles for Patna City Authority Hub (Prefix: .ptn-) -->
    <style>
        .ptn-wrap {
            --ptn-primary: #0f223d;
            --ptn-primary-dark: #081424;
            --ptn-emerald: #059669;
            --ptn-accent: #ff6a28;
            --ptn-accent-hover: #ea580c;
            --ptn-light-bg: #f8fafc;
            --ptn-card-bg: #ffffff;
            --ptn-border: #e2e8f0;
            --ptn-text-dark: #1e293b;
            --ptn-text-muted: #64748b;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--ptn-text-dark);
            line-height: 1.7;
        }

        .ptn-hero {
            background: linear-gradient(135deg, rgba(15, 34, 61, 0.96) 0%, rgba(5, 150, 105, 0.90) 100%), url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 4.8rem 1.5rem 4rem;
            text-align: center;
            position: relative;
        }

        .ptn-hero-content {
            max-width: 980px;
            margin: 0 auto;
        }

        .ptn-badge {
            display: inline-block;
            background: rgba(255, 106, 40, 0.25);
            border: 1px solid #fed7aa;
            color: #ffedd5;
            padding: 0.4rem 1.25rem;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 1.25rem;
        }

        .ptn-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2.1rem, 4.2vw, 3.2rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 1.25rem;
            color: #ffffff;
        }

        .ptn-hero p {
            font-size: clamp(1rem, 1.8vw, 1.18rem);
            color: #e2e8f0;
            margin-bottom: 2.2rem;
            max-width: 840px;
            margin-left: auto;
            margin-right: auto;
        }

        .ptn-hero-actions {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 2rem;
        }

        .ptn-btn-primary {
            background: linear-gradient(135deg, var(--ptn-accent) 0%, var(--ptn-accent-hover) 100%);
            color: #ffffff;
            padding: 0.9rem 1.85rem;
            border-radius: 6px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 14px rgba(255, 106, 40, 0.4);
        }

        .ptn-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 106, 40, 0.55);
            color: #ffffff;
        }

        .ptn-btn-secondary {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(8px);
            color: #ffffff;
            border: 1px solid rgba(255, 255, 255, 0.35);
            padding: 0.9rem 1.85rem;
            border-radius: 6px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }

        .ptn-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.28);
            transform: translateY(-2px);
            color: #ffffff;
        }

        .ptn-hero-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
            gap: 1.25rem;
            margin-top: 2.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            padding-top: 1.75rem;
        }

        .ptn-stat-box h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.85rem;
            font-weight: 800;
            color: #ecfdf5;
            margin: 0;
        }

        .ptn-stat-box span {
            font-size: 0.85rem;
            color: #cbd5e1;
        }

        .ptn-section {
            padding: 3.8rem 1.5rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .ptn-section-alt {
            background-color: var(--ptn-light-bg);
            border-top: 1px solid var(--ptn-border);
            border-bottom: 1px solid var(--ptn-border);
        }

        .ptn-section-title {
            text-align: center;
            margin-bottom: 2.8rem;
        }

        .ptn-section-title h2 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(1.8rem, 3.2vw, 2.4rem);
            font-weight: 800;
            color: var(--ptn-primary);
            margin-bottom: 0.75rem;
        }

        .ptn-section-title p {
            color: var(--ptn-text-muted);
            max-width: 760px;
            margin: 0 auto;
            font-size: 1.05rem;
        }

        .ptn-grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2.8rem;
            align-items: center;
        }

        .ptn-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.8rem;
        }

        .ptn-grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 1.5rem;
        }

        .ptn-card {
            background-color: var(--ptn-card-bg);
            border: 1px solid var(--ptn-border);
            border-radius: 12px;
            padding: 1.85rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .ptn-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 20px -3px rgba(0, 0, 0, 0.09);
            border-color: var(--ptn-emerald);
        }

        .ptn-card-icon {
            width: 50px;
            height: 50px;
            background-color: rgba(5, 150, 105, 0.12);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.55rem;
            margin-bottom: 1.25rem;
            color: var(--ptn-emerald);
        }

        .ptn-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--ptn-primary);
            margin-bottom: 0.75rem;
        }

        .ptn-card p {
            font-size: 0.95rem;
            color: var(--ptn-text-muted);
            margin: 0;
            line-height: 1.65;
        }

        /* Explicit Image Dimension Containment (Rule 11 Compliance) */
        .ptn-image-container {
            max-width: 580px;
            width: 100%;
            margin: 0 auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 12px 24px -6px rgba(0, 0, 0, 0.15);
            border: 1px solid var(--ptn-border);
            background: #ffffff;
        }

        .ptn-image-container img {
            width: 100%;
            height: auto;
            max-height: 440px;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .ptn-image-container:hover img {
            transform: scale(1.03);
        }

        /* Tariff Table Styling */
        .ptn-table-wrapper {
            overflow-x: auto;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--ptn-border);
            margin-top: 1.8rem;
        }

        .ptn-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.95rem;
            min-width: 680px;
        }

        .ptn-table th {
            background-color: var(--ptn-primary);
            color: #ffffff;
            padding: 1.1rem 1.25rem;
            font-weight: 700;
            white-space: nowrap;
        }

        .ptn-table td {
            padding: 1rem 1.25rem;
            border-bottom: 1px solid var(--ptn-border);
            vertical-align: middle;
        }

        .ptn-table tr:nth-child(even) td {
            background-color: #f8fafc;
        }

        .ptn-table tr:hover td {
            background-color: #f1f5f9;
        }

        .ptn-badge-pill {
            display: inline-block;
            background-color: #dcfce7;
            color: #15803d;
            font-size: 0.78rem;
            font-weight: 700;
            padding: 0.25rem 0.6rem;
            border-radius: 50px;
        }

        /* Step Process Timeline */
        .ptn-timeline {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .ptn-step {
            background-color: #ffffff;
            border: 1px solid var(--ptn-border);
            border-radius: 10px;
            padding: 1.6rem;
            position: relative;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.04);
        }

        .ptn-step-num {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            background-color: var(--ptn-emerald);
            color: #ffffff;
            font-weight: 800;
            border-radius: 50%;
            margin-bottom: 1rem;
            font-size: 1rem;
        }

        .ptn-step h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--ptn-primary);
            margin-bottom: 0.5rem;
        }

        .ptn-step p {
            font-size: 0.92rem;
            color: var(--ptn-text-muted);
            margin: 0;
            line-height: 1.55;
        }

        /* Neighborhood & Corridor Cluster Styling */
        .ptn-cluster-card {
            background: #ffffff;
            border: 1px solid var(--ptn-border);
            border-radius: 10px;
            padding: 1.25rem;
            text-decoration: none;
            color: inherit;
            display: block;
            transition: all 0.25s ease;
            box-shadow: 0 2px 4px rgba(0,0,0,0.03);
        }

        .ptn-cluster-card:hover {
            border-color: var(--ptn-accent);
            transform: translateY(-3px);
            box-shadow: 0 8px 16px rgba(255, 106, 40, 0.12);
        }

        .ptn-cluster-card h4 {
            font-size: 1.05rem;
            font-weight: 700;
            color: var(--ptn-primary);
            margin-bottom: 0.35rem;
        }

        .ptn-cluster-card p {
            font-size: 0.85rem;
            color: var(--ptn-text-muted);
            margin: 0;
            line-height: 1.45;
        }

        /* FAQ Accordion */
        .ptn-faq-item {
            background-color: #ffffff;
            border: 1px solid var(--ptn-border);
            border-radius: 8px;
            margin-bottom: 1rem;
            overflow: hidden;
        }

        .ptn-faq-item summary {
            padding: 1.25rem 1.5rem;
            font-weight: 700;
            color: var(--ptn-primary);
            cursor: pointer;
            list-style: none;
            position: relative;
            padding-right: 3rem;
            background-color: #ffffff;
            transition: background-color 0.2s ease;
        }

        .ptn-faq-item summary::-webkit-details-marker {
            display: none;
        }

        .ptn-faq-item summary::after {
            content: "+";
            position: absolute;
            right: 1.5rem;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--ptn-emerald);
        }

        .ptn-faq-item[open] summary::after {
            content: "−";
        }

        .ptn-faq-item[open] summary {
            background-color: #ecfdf5;
        }

        .ptn-faq-body {
            padding: 1.25rem 1.5rem;
            color: var(--ptn-text-dark);
            font-size: 0.95rem;
            border-top: 1px solid var(--ptn-border);
            background-color: #ffffff;
            line-height: 1.7;
        }

        /* Call To Action Banner */
        .ptn-cta-banner {
            background: linear-gradient(135deg, var(--ptn-primary) 0%, #064e3b 100%);
            border-radius: 14px;
            padding: 3.8rem 2rem;
            text-align: center;
            color: #ffffff;
            margin: 3.5rem auto 1rem;
            max-width: 1100px;
        }

        .ptn-cta-banner h2 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(1.9rem, 3.6vw, 2.6rem);
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 1rem;
        }

        .ptn-cta-banner p {
            font-size: 1.1rem;
            color: #cbd5e1;
            max-width: 720px;
            margin: 0 auto 2.2rem;
        }

        @media (max-width: 768px) {
            .ptn-hero {
                padding: 3.2rem 1rem 2.8rem;
            }
            .ptn-section {
                padding: 2.8rem 1rem;
            }
            .ptn-hero-actions {
                flex-direction: column;
            }
            .ptn-btn-primary, .ptn-btn-secondary {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>

<?php require_once __DIR__ . '/../includes/header.php'; ?>

<main class="ptn-wrap">

    <!-- HERO SECTION -->
    <section class="ptn-hero">
        <div class="ptn-hero-content">
            <span class="ptn-badge">🏆 IBA Approved &amp; ISO 9001:2015 Certified Logistics | Bihar Authority Hub</span>
            <h1>Packers and Movers in Patna</h1>
            <p>Moving within Bihar's historic capital or relocating nationwide? Shree Ashirwad Packers and Movers delivers premium, damage-free household shifting, corporate office transfers, and enclosed car/bike carrier shipping across Patna with multi-layer protective armor, dedicated container vehicles, and 100% transparent pricing.</p>
            
            <div class="ptn-hero-actions">
                <a href="tel:+918409531615" class="ptn-btn-primary">
                    📞 Call 8409531615
                </a>
                <a href="tel:+919835565233" class="ptn-btn-secondary">
                    📱 Call 9835565233
                </a>
                <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hi%20Shree%20Ashirwad,%20I%20need%20a%20moving%20quote%20for%20Patna" target="_blank" rel="noopener" class="ptn-btn-secondary">
                    💬 WhatsApp Instant Quote
                </a>
            </div>

            <div class="ptn-hero-stats">
                <div class="ptn-stat-box">
                    <h4>15+ Years</h4>
                    <span>Relocation Experience</span>
                </div>
                <div class="ptn-stat-box">
                    <h4>25,000+</h4>
                    <span>Happy Moves Completed</span>
                </div>
                <div class="ptn-stat-box">
                    <h4>100% Sealed</h4>
                    <span>GPS Monitored Fleet</span>
                </div>
                <div class="ptn-stat-box">
                    <h4>IBA Approved</h4>
                    <span>Govt &amp; PSU Transfer Claims</span>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 1: PATNA URBAN LOGISTICS & LOCAL EXPERTISE -->
    <section class="ptn-section">
        <div class="ptn-grid-2">
            <div>
                <span style="color: var(--ptn-emerald); font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.05em;">Capital City Authority Hub</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.1rem; font-weight: 800; color: var(--ptn-primary); margin: 0.5rem 0 1.25rem;">Navigating Patna's Complex Urban Infrastructure with Precision</h2>
                <p>As the commercial, administrative, and educational nucleus of Bihar, Patna presents distinctive logistical dynamics. Moving household furniture, delicate electronics, and heavy domestic equipment across Patna requires localized route knowledge, acute timing, and modern material handling gear.</p>
                <p>From the bustling, high-density residential corridors of Kankarbagh, Boring Road, and Rajendra Nagar to the rapidly developing multi-storey apartment clusters along Bailey Road, Saguna More, and Danapur, every neighborhood has unique access challenges. Historic sectors near Ashok Rajpath and Patna City feature narrow residential by-lanes where heavy 14-foot moving trucks cannot enter. Conversely, western high-rises require pre-booked service elevators, basement ramp clearances, and coordination with resident welfare associations (RWAs).</p>
                <p>Shree Ashirwad Packers and Movers solves these hurdles with a multi-vehicle staging system. For congested quarters, we deploy agile shuttle tempo trucks that navigate tight gullies to pack and extract goods swiftly, transferring them seamlessly into our heavy closed steel containers stationed on wide bypass arteries like NH-30, Bailey Road, or the Patna Ring Road.</p>
                <p>Furthermore, as the sister operations center of our flagship headquarters for <a href="<?php echo SITE_BASE_URL; ?>/" style="color: var(--ptn-emerald); font-weight: 700; text-decoration: underline;">packers and movers in Ranchi</a>, we maintain daily direct departures along the 320 km NH-22/NH-20 expressway on our reciprocal <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-patna-packers-and-movers" style="color: var(--ptn-emerald); font-weight: 700; text-decoration: underline;">Ranchi to Patna packers and movers</a> and <a href="<?php echo SITE_BASE_URL; ?>/patna-to-ranchi-packers-and-movers" style="color: var(--ptn-emerald); font-weight: 700; text-decoration: underline;">Patna to Ranchi packers and movers</a> express corridor.</p>
            </div>
            <div class="ptn-image-container">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Packers and Movers in Patna closed container truck fleet" loading="lazy">
            </div>
        </div>
    </section>

    <!-- SECTION 2: SPECIALIZED RELOCATION SERVICES IN PATNA -->
    <section class="ptn-section ptn-section-alt">
        <div class="ptn-section-title">
            <h2>Comprehensive Shifting Solutions Across Patna &amp; Beyond</h2>
            <p>From single-room bachelor apartments to sprawling institutional relocations, our seasoned operations crew manages every move with utmost diligence.</p>
        </div>

        <div class="ptn-grid-3">
            <div class="ptn-card">
                <div class="ptn-card-icon">🏠</div>
                <h3>Local Household Shifting</h3>
                <p>Room-by-room packaging, heavy wooden bed dismantling, sofa shrink-wrapping, and fragile crockery crating for seamless flat-to-flat shifting anywhere in Patna within 24 hours.</p>
            </div>

            <div class="ptn-card">
                <div class="ptn-card-icon">🚚</div>
                <h3>Interstate Long-Distance Moving</h3>
                <p>Dedicated sealed container vehicles connecting Patna to Delhi NCR, Kolkata, Bangalore, Mumbai, Pune, and Hyderabad with zero transshipment and door-to-door delivery.</p>
            </div>

            <div class="ptn-card">
                <div class="ptn-card-icon">🏢</div>
                <h3>Office &amp; Corporate Transfers</h3>
                <p>Minimal downtime office relocation including server rack packing, modular workstation disassembly, computer terminal packing, and indexed file cabinet transfers.</p>
            </div>

            <div class="ptn-card">
                <div class="ptn-card-icon">🚗</div>
                <h3>Covered Automobile Transportation</h3>
                <p>Specialized hydraulic double-decker carriers equipped with four-point wheel chocks, GPS tracking, and comprehensive all-risk transit insurance for sedans, hatchbacks, and SUVs.</p>
            </div>

            <div class="ptn-card">
                <div class="ptn-card-icon">🏍️</div>
                <h3>Two-Wheeler Bike Courier</h3>
                <p>Complete motorcycle and scooter packing with mirror removal, bubble cushioning, scratch-resistant corrugated wrap, and safe strapping inside covered parcel containers.</p>
            </div>

            <div class="ptn-card">
                <div class="ptn-card-icon">🏛️</div>
                <h3>Government &amp; PSU Transfers</h3>
                <p>Compliant relocation for Secretariat staff, High Court judicial officers, defense personnel, and bank managers with authentic IBA billing and itemized claim inventories.</p>
            </div>
        </div>
    </section>

    <!-- SECTION 3: TRANSPARENT PRICING & TARIFF SCHEDULE -->
    <section class="ptn-section">
        <div class="ptn-section-title">
            <h2>Transparent Packers and Movers Charges in Patna</h2>
            <p>Clear, competitive price estimates with zero hidden costs. All quotes include export-quality packing materials, skilled labor, loading/unloading, and container transit.</p>
        </div>

        <div class="ptn-table-wrapper">
            <table class="ptn-table">
                <thead>
                    <tr>
                        <th>Consignment Scope</th>
                        <th>Standard Packaging Tier</th>
                        <th>Labor &amp; Handling</th>
                        <th>Local Shifting (Within Patna)</th>
                        <th>Interstate Moving (To Jharkhand / Bengal)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment / RK Home</strong></td>
                        <td>3-Layer Corrugated &amp; Bubble</td>
                        <td>2-3 Trained Movers</td>
                        <td><span class="ptn-badge-pill">₹4,500 - ₹7,500</span></td>
                        <td>₹14,500 - ₹22,000</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Flat / Regular Family Home</strong></td>
                        <td>5-Layer Heavy Duty Armor</td>
                        <td>4-5 Trained Movers</td>
                        <td><span class="ptn-badge-pill">₹7,000 - ₹12,500</span></td>
                        <td>₹22,000 - ₹34,000</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Spacious Home / Villa</strong></td>
                        <td>5-Layer Armor + Wooden Crating</td>
                        <td>5-6 Trained Movers</td>
                        <td><span class="ptn-badge-pill">₹11,000 - ₹18,500</span></td>
                        <td>₹32,000 - ₹48,000</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Large Bungalow Move</strong></td>
                        <td>Full Customized Export Crate</td>
                        <td>7-9 Master Packers</td>
                        <td><span class="ptn-badge-pill">₹16,500 - ₹26,000</span></td>
                        <td>₹45,000 - ₹68,000</td>
                    </tr>
                    <tr>
                        <td><strong>Standard Motorcycle / Bike</strong></td>
                        <td>Corrugated Foam + Heavy Bubble</td>
                        <td>Specialist Lashing Crew</td>
                        <td><span class="ptn-badge-pill">₹1,500 - ₹2,500</span></td>
                        <td>₹3,500 - ₹6,500</td>
                    </tr>
                    <tr>
                        <td><strong>Motor Car (Hatchback / Sedan / SUV)</strong></td>
                        <td>Enclosed Hydraulic Auto Carrier</td>
                        <td>Driver + Ramp Inspector</td>
                        <td><span class="ptn-badge-pill">₹2,800 - ₹4,500</span></td>
                        <td>₹10,500 - ₹18,500</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="text-align: center; font-size: 0.9rem; color: var(--ptn-text-muted); margin-top: 1.25rem;">
            *Pricing varies based on actual inventory volume, floor elevation, availability of service elevators, and optional transit insurance. To check dynamic live rates, explore our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" style="color: var(--ptn-emerald); font-weight: 700; text-decoration: underline;">live packers and movers tariff calculator</a>.
        </p>
    </section>

    <!-- SECTION 4: 5-LAYER PACKING ARMOR PROTOCOL -->
    <section class="ptn-section ptn-section-alt">
        <div class="ptn-grid-2">
            <div class="ptn-image-container">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/residential-relocation-cartons-ranchi.jpg" alt="5-Layer robust household packing cartons in Patna" loading="lazy">
            </div>
            <div>
                <span style="color: var(--ptn-emerald); font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.05em;">Engineering Zero Damage</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.1rem; font-weight: 800; color: var(--ptn-primary); margin: 0.5rem 0 1.25rem;">Heavy-Duty 5-Tier Packaging Architecture</h2>
                <p>Whether moving across the Ganga over the Mahatma Gandhi Setu into Hajipur, or dispatching household assets down NH-22, road vibrations and dust pose serious threats to valuable assets. Shree Ashirwad Packers and Movers implements an uncompromising 5-stage packaging standard:</p>
                <ul style="padding-left: 1.25rem; font-size: 0.95rem; color: var(--ptn-text-muted); line-height: 1.85;">
                    <li><strong>Layer 1 - Scratch-Proof Stretch Wrap:</strong> Primary dust barrier preventing fine grit from adhering to glossy wood polish, leather upholstery, and painted surfaces.</li>
                    <li><strong>Layer 2 - Virgin Air Bubble Cushioning:</strong> 50-micron high-density bubble wrap absorbing road shocks, speed bumps, and minor impacts during vehicle transit.</li>
                    <li><strong>Layer 3 - Heavy-Duty 5-Ply Corrugated Sheets:</strong> Rigid paperboard wrapping reinforcing flat sides of LED TVs, refrigerators, wooden wardrobe panels, and glass dining tops.</li>
                    <li><strong>Layer 4 - Reinforced Corner Protectors:</strong> Compressed edge angle boards preventing chip-offs and structural pressure damage on furniture edges and glass corners.</li>
                    <li><strong>Layer 5 - Weatherproof Steel Outer Containers:</strong> Consignments are packed inside fully enclosed, locked steel container trucks that protect 100% against monsoon rains and dust storms.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- SECTION 5: STEP-BY-STEP MOVING WORKFLOW -->
    <section class="ptn-section">
        <div class="ptn-section-title">
            <h2>Our Standardized 5-Step Relocation Process</h2>
            <p>From your initial phone inquiry to final room arrangement, our streamlined workflow prevents confusion and delivers complete accountability.</p>
        </div>

        <div class="ptn-timeline">
            <div class="ptn-step">
                <span class="ptn-step-num">1</span>
                <h4>Pre-Move Assessment</h4>
                <p>Our field supervisor conducts a rapid in-person home survey or video consultation in Patna to assess packing requirements, elevator access, and vehicle requirements.</p>
            </div>

            <div class="ptn-step">
                <span class="ptn-step-num">2</span>
                <h4>Multi-Layer Packing</h4>
                <p>On moving day, our uniformed team arrives with 5-ply cartons, bubble wrap, wardrobe boxes, and toolkits to dismantle furniture and pack every item room-by-room.</p>
            </div>

            <div class="ptn-step">
                <span class="ptn-step-num">3</span>
                <h4>Safe Hydraulic Loading</h4>
                <p>Heavy appliances and furniture are systematically arranged using safety belts and shock-absorbing rubber padding inside our dedicated enclosed moving containers.</p>
            </div>

            <div class="ptn-step">
                <span class="ptn-step-num">4</span>
                <h4>GPS-Monitored Transit</h4>
                <p>Vehicles navigate permitted highway routes with live GPS monitoring. Clients receive scheduled SMS and WhatsApp status updates at key highway checkpoints.</p>
            </div>

            <div class="ptn-step">
                <span class="ptn-step-num">5</span>
                <h4>Unloading &amp; Placement</h4>
                <p>At destination, our crew unloads goods into designated bedrooms, reassembles beds and dining tables, and clears away discarded carton debris for immediate living comfort.</p>
            </div>
        </div>
    </section>

    <!-- SECTION 6: VEHICLE & CARRIER SPECIALIZATION -->
    <section class="ptn-section ptn-section-alt">
        <div class="ptn-grid-2">
            <div>
                <span style="color: var(--ptn-emerald); font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.05em;">Dedicated Automotive Shipping</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.1rem; font-weight: 800; color: var(--ptn-primary); margin: 0.5rem 0 1.25rem;">Safe Automobile &amp; Motorcycle Transport in Patna</h2>
                <p>Driving personal cars or motorbikes over long highway stretches across Bihar and interstate routes subjects vehicles to immense road wear, highway hazards, and driver exhaustion. Shree Ashirwad Packers and Movers provides enclosed carrier transport engineered for zero road contact.</p>
                <p>Prior to loading in Patna, our vehicle supervisor performs a joint 18-point vehicle inspection, logging fuel levels, odometer readings, and existing body condition. Vehicles are driven via low-incline hydraulic ramps into specialized carriers, secured with high-tensile wheel chocks, and covered with protective transit covers.</p>
                <p>Two-wheelers receive complete mirror removal, throttle cushioning, petrol drainage to safe levels, and are loaded in upright cushioned bays to eliminate scratches and denting throughout transit.</p>
            </div>
            <div class="ptn-image-container">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transport carrier loading service in Patna" loading="lazy">
            </div>
        </div>
    </section>

    <!-- SECTION 7: HYPER-LOCAL PATNA NEIGHBORHOOD CLUSTERS (TIER 2 DIRECTORY) -->
    <section class="ptn-section">
        <div class="ptn-section-title">
            <h2>Serving Every Neighborhood &amp; Colony Across Greater Patna</h2>
            <p>Our decentralized operations network ensures swift 60-minute mobilization across residential complexes, commercial zones, and suburban enclaves in Patna.</p>
        </div>

        <div class="ptn-grid-4">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kankarbagh-patna" class="ptn-cluster-card">
                <h4>📍 Kankarbagh</h4>
                <p>Asia's largest planned colony; specialized handling for tight residential colonies, Doctor's Colony &amp; tempo stands.</p>
            </a>

            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-boring-road-patna" class="ptn-cluster-card">
                <h4>📍 Boring Road</h4>
                <p>Premier student &amp; commercial zone; rapid packing for coaching hub flats, executive apartments &amp; Sri Krishna Puri.</p>
            </a>

            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bailey-road-patna" class="ptn-cluster-card">
                <h4>📍 Bailey Road</h4>
                <p>High-rise expressway corridor; service elevator coordination for Gola Road, Saguna More, and Rupaspur flats.</p>
            </a>

            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-danapur-patna" class="ptn-cluster-card">
                <h4>📍 Danapur Cantt</h4>
                <p>Military station &amp; railway divisional hub; defense officer transfers with certified IBA billing and bilty notes.</p>
            </a>

            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-rajendra-nagar-patna" class="ptn-cluster-card">
                <h4>📍 Rajendra Nagar</h4>
                <p>Central residential &amp; medical hub; specialized shuttle tempo logistics for narrow lanes and old family homes.</p>
            </a>

            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patliputra-colony-patna" class="ptn-cluster-card">
                <h4>📍 Patliputra Colony</h4>
                <p>Prestigious industrial &amp; upscale residential sector; antique furniture packaging and luxury villa relocations.</p>
            </a>

            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ashiana-nagar-patna" class="ptn-cluster-card">
                <h4>📍 Ashiana Nagar</h4>
                <p>Modern housing societies near Ashiana-Digha road; multi-tier apartment packaging and electronic crating.</p>
            </a>

            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-anisabad-patna" class="ptn-cluster-card">
                <h4>📍 Anisabad</h4>
                <p>South commercial bypass corridor; rapid highway fleet mobilization connecting Phulwari Sharif &amp; NH-30.</p>
            </a>

            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-khagaul-patna" class="ptn-cluster-card">
                <h4>📍 Khagaul</h4>
                <p>Western railway suburb and educational belt near IIT Patna; student room and railway employee shifting.</p>
            </a>

            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-phulwari-sharif-patna" class="ptn-cluster-card">
                <h4>📍 Phulwari Sharif</h4>
                <p>AIIMS medical hub and southern arterial bypass; physician, healthcare worker, and clinical asset moving.</p>
            </a>
        </div>
    </section>

    <!-- SECTION 8: CONNECTED INTERSTATE RELOCATION CORRIDORS -->
    <section class="ptn-section ptn-section-alt">
        <div class="ptn-section-title">
            <h2>Frequently Traveled Relocation Corridors Connecting Patna</h2>
            <p>Direct daily linehaul container vehicles connecting Patna to prominent regional industrial centers, state capitals, and educational hubs.</p>
        </div>

        <div class="ptn-grid-3">
            <a href="<?php echo SITE_BASE_URL; ?>/patna-to-ranchi-packers-and-movers" class="ptn-cluster-card">
                <h4>Patna to Ranchi Corridor</h4>
                <p>Daily 320 km linehaul transit via NH-22 past Gaya, Dobhi, and Hazaribagh into Jharkhand's capital within 10-12 hours.</p>
            </a>

            <a href="<?php echo SITE_BASE_URL; ?>/patna-to-bokaro-packers-and-movers" class="ptn-cluster-card">
                <h4>Patna to Bokaro Steel City</h4>
                <p>Regular industrial relocations for SAIL employees and engineering personnel via Barhi and Ramgarh.</p>
            </a>

            <a href="<?php echo SITE_BASE_URL; ?>/patna-to-dhanbad-packers-and-movers" class="ptn-cluster-card">
                <h4>Patna to Dhanbad Coal Capital</h4>
                <p>Specialized transfers for BCCL, IIT ISM faculty, and commercial families connecting GT Road and NH-20.</p>
            </a>

            <a href="<?php echo SITE_BASE_URL; ?>/patna-to-jamshedpur-packers-and-movers" class="ptn-cluster-card">
                <h4>Patna to Jamshedpur Steel Hub</h4>
                <p>Direct long-haul container trucks connecting Patna to Asia's industrial hub at Tata Steel and Adityapur.</p>
            </a>

            <a href="<?php echo SITE_BASE_URL; ?>/adityapur-to-patna-packers-and-movers" class="ptn-cluster-card">
                <h4>Adityapur to Patna Direct Route</h4>
                <p>Dedicated reciprocal transfers connecting auto-ancillary manufacturing clusters to Patna's commercial markets.</p>
            </a>

            <a href="<?php echo SITE_BASE_URL; ?>/patna-to-deoghar-packers-and-movers" class="ptn-cluster-card">
                <h4>Patna to Deoghar Corridor</h4>
                <p>Express shifting via Bakhtiyarpur, Mokama, Lakhisarai, and Jamui connecting the spiritual and AIIMS hub.</p>
            </a>
        </div>
    </section>

    <!-- SECTION 9: WHY CHOOSE SHREE ASHIRWAD PACKERS IN PATNA -->
    <section class="ptn-section">
        <div class="ptn-grid-2">
            <div class="ptn-image-container">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Professional packing crew at work in Patna" loading="lazy">
            </div>
            <div>
                <span style="color: var(--ptn-emerald); font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.05em;">The Trusted Brand</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.1rem; font-weight: 800; color: var(--ptn-primary); margin: 0.5rem 0 1.25rem;">Why 25,000+ Families Rely on Shree Ashirwad in Patna</h2>
                <p>With more than 15 years of seasoned logistics experience across Bihar and Eastern India, Shree Ashirwad Packers and Movers has earned an unmatched reputation for integrity, transparency, and careful craftsmanship.</p>
                <div style="margin-top: 1.5rem;">
                    <div style="display: flex; gap: 1rem; margin-bottom: 1.25rem; align-items: flex-start;">
                        <span style="font-size: 1.3rem; color: #059669;">✔</span>
                        <div>
                            <strong style="color: var(--ptn-primary); font-size: 1.05rem;">Zero-Transshipment Guarantee:</strong>
                            <p style="margin: 0; font-size: 0.92rem; color: var(--ptn-text-muted);">Your goods stay sealed inside the dedicated container in which they are loaded. We never unload or transfer items across intermediate third-party godowns.</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 1rem; margin-bottom: 1.25rem; align-items: flex-start;">
                        <span style="font-size: 1.3rem; color: #059669;">✔</span>
                        <div>
                            <strong style="color: var(--ptn-primary); font-size: 1.05rem;">Permanent Verified Personnel:</strong>
                            <p style="margin: 0; font-size: 0.92rem; color: var(--ptn-text-muted);">We employ experienced, police-verified master packers and carpenters instead of untrained day laborers, ensuring your delicate goods are treated with respect.</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 1rem; margin-bottom: 1.25rem; align-items: flex-start;">
                        <span style="font-size: 1.3rem; color: #059669;">✔</span>
                        <div>
                            <strong style="color: var(--ptn-primary); font-size: 1.05rem;">Comprehensive All-Risk Insurance:</strong>
                            <p style="margin: 0; font-size: 0.92rem; color: var(--ptn-text-muted);">Protect your high-value furniture, home electronics, and vehicles with genuine marine transit insurance covering highway accidents, fire, and unforeseen transit damages.</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 1rem; margin-bottom: 1.25rem; align-items: flex-start;">
                        <span style="font-size: 1.3rem; color: #059669;">✔</span>
                        <div>
                            <strong style="color: var(--ptn-primary); font-size: 1.05rem;">Written Upfront Commitments:</strong>
                            <p style="margin: 0; font-size: 0.92rem; color: var(--ptn-text-muted);">We provide clear, formal written contracts with locked quotation figures. We never demand unexpected surcharges or hidden gate fees on delivery day.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 10: FREQUENTLY ASKED QUESTIONS (ACCORDION) -->
    <section class="ptn-section ptn-section-alt">
        <div class="ptn-section-title">
            <h2>Frequently Asked Questions About Moving in Patna</h2>
            <p>Practical answers to key queries regarding shifting charges, local permits, packing standards, and moving day timelines in Patna.</p>
        </div>

        <div style="max-width: 860px; margin: 0 auto;">
            <details class="ptn-faq-item" open>
                <summary>How much do packers and movers in Patna charge for local house shifting?</summary>
                <div class="ptn-faq-body">
                    Local shifting charges in Patna typically range from ₹4,500 to ₹7,500 for a 1 BHK flat, ₹7,000 to ₹12,500 for a 2 BHK apartment, and ₹11,000 to ₹18,500 for a 3 BHK residence. Total pricing depends on packing material grade, floor levels, elevator availability, and moving truck parking access.
                </div>
            </details>

            <details class="ptn-faq-item">
                <summary>Do you provide moving services across narrow lanes in Old Patna and Kankarbagh?</summary>
                <div class="ptn-faq-body">
                    Yes. For congested localities like Kankarbagh tempo stands, Rajendra Nagar lanes, Bakerganj, and Ashok Rajpath, we deploy small shuttle vehicles (Tata Ace / Mahindra Bolero Maxi Truck) to ferry goods from narrow lanes to our large container trucks stationed on wide bypass roads.
                </div>
            </details>

            <details class="ptn-faq-item">
                <summary>Are your moving bills eligible for Central &amp; Bihar Government transfer claims?</summary>
                <div class="ptn-faq-body">
                    Absolutely. Shree Ashirwad Packers and Movers provides official 100% IBA-approved relocation bills, valid GST invoices (SAC 9965/9967), computerized bilty (consignment notes), and signed itemized inventory lists accepted by Patna Secretariat, High Court, AIIMS Patna, Indian Railways (ECR), and commercial banks.
                </div>
            </details>

            <details class="ptn-faq-item">
                <summary>How are moving trucks scheduled given heavy vehicle entry restrictions in Patna?</summary>
                <div class="ptn-faq-body">
                    Patna Traffic Police enforces heavy vehicle no-entry rules during daytime peak hours (generally 8:00 AM to 10:00 PM on major arteries like Bailey Road, Fraser Road, and Ashok Rajpath). We plan long-distance dispatches through night-time departure windows or utilize daytime-permitted commercial mini-vans.
                </div>
            </details>

            <details class="ptn-faq-item">
                <summary>Do you handle car transport and bike courier from Patna to other states?</summary>
                <div class="ptn-faq-body">
                    Yes, we operate specialized covered car carriers with hydraulic loading ramps and enclosed two-wheeler berths. Vehicles receive digital pre-dispatch inspection reports, foam and bubble wrapping, wheel lockdowns, and all-risk transit insurance.
                </div>
            </details>

            <details class="ptn-faq-item">
                <summary>How quickly can a pre-move home survey team arrive at my residence in Patna?</summary>
                <div class="ptn-faq-body">
                    Our Patna field supervisors can arrive at your doorstep in Boring Road, Bailey Road, Patliputra Colony, Kankarbagh, or Danapur within 60 to 90 minutes. We also provide instant virtual video surveys via WhatsApp for immediate quotations.
                </div>
            </details>
        </div>
    </section>

    <!-- SECTION 11: CALL TO ACTION BANNER -->
    <section class="ptn-section" style="padding-top: 1rem;">
        <div class="ptn-cta-banner">
            <h2>Ready for a Smooth, Hassle-Free Relocation in Patna?</h2>
            <p>Connect with our expert Patna moving supervisors today for an upfront, guaranteed quotation. Experience 5-layer protective packing, zero-transshipment containers, and dedicated doorstep customer support.</p>
            <div style="display: flex; gap: 1.25rem; justify-content: center; flex-wrap: wrap;">
                <a href="tel:+918409531615" class="ptn-btn-primary" style="font-size: 1.05rem; padding: 1rem 2.2rem;">
                    📞 Call 8409531615
                </a>
                <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad,%20I%20want%20a%20relocation%20quote%20for%20Patna" target="_blank" rel="noopener" class="ptn-btn-secondary" style="font-size: 1.05rem; padding: 1rem 2.2rem;">
                    💬 WhatsApp Free Quote
                </a>
                <a href="<?php echo SITE_BASE_URL; ?>/contact" class="ptn-btn-secondary" style="font-size: 1.05rem; padding: 1rem 2.2rem;">
                    📝 Online Quote Request
                </a>
            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>
