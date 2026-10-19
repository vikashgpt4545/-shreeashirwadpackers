<?php
/**
 * Page Name: Ranchi to Kochi Packers and Movers
 * Route Slug: ranchi-to-kochi-packers-and-movers
 * Group: South India IT & Industrial Hubs (Route 39)
 * Distance: ~2,280 km via NH-44 / NH-544 or NH-16
 * Focus Keywords: ranchi to kochi packers and movers, packers and movers ranchi to kochi, household shifting ranchi to kochi, car transport ranchi to kochi, infopark kakkanad movers, ernakulam relocation services
 */

// Define page-specific metadata
$page_title = "Ranchi to Kochi Packers and Movers | Safe 2,280 km Relocation";
$page_description = "Reliable Ranchi to Kochi packers and movers. Verified household shifting, IT company moves & car carriers to Kakkanad InfoPark, Ernakulam & Aluva. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/ranchi-to-kochi-packers-and-movers";
$page_keywords = "ranchi to kochi packers and movers, packers and movers ranchi to kochi, household shifting ranchi to kochi, car transport ranchi to kochi, bike courier ranchi to kochi, infopark kakkanad packers, ernakulam relocation, smartcity kochi movers";

$current_page = 'services';
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
    <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:url" content="<?php echo $canonical_url; ?>">
    <meta property="og:type" content="article">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg">
    <meta property="og:image:alt" content="Ranchi to Kochi Packers and Movers - Shree Ashirwad Container Fleet">
    <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg">

    <!-- Favicon & Touch Icons -->
    <link rel="icon" type="image/png" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
    <link rel="shortcut icon" href="<?php echo SITE_BASE_URL; ?>/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Structured Data 1: MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Ranchi to Kochi",
        "url": "<?php echo $canonical_url; ?>",
        "logo": "<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "description": "Premium 2,280 km long-distance inter-state relocation from Ranchi to Kochi. Specialized household shifting, IT employee moves, naval transfers, and car carriers.",
        "telephone": "+91-8409531615",
        "priceRange": "INR 18,000 - 75,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Harmu Housing Colony, Argora",
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
        "areaServed": [
            {
                "@type": "City",
                "name": "Ranchi"
            },
            {
                "@type": "City",
                "name": "Kochi"
            }
        ],
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
        }
    }
    </script>

    <!-- Structured Data 2: BreadcrumbList Schema -->
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
                "item": "<?php echo SITE_BASE_URL; ?>/services"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Ranchi to Kochi Packers and Movers",
                "item": "<?php echo $canonical_url; ?>"
            }
        ]
    }
    </script>

    <!-- Structured Data 3: Service Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Long-Distance Inter-State Moving Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers",
            "telephone": "+91-8409531615",
            "url": "https://www.shreeashirwadpackers.com"
        },
        "areaServed": {
            "@type": "City",
            "name": "Kochi"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Ranchi to Kochi Moving Catalog",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "1 BHK Household Shifting Ranchi to Kochi"
                    },
                    "priceCurrency": "INR",
                    "price": "18500"
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "2 BHK Family Relocation Ranchi to Kochi"
                    },
                    "priceCurrency": "INR",
                    "price": "28500"
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "3 BHK Premium Villa Move Ranchi to Kochi"
                    },
                    "priceCurrency": "INR",
                    "price": "38500"
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Enclosed Car Transport Ranchi to Kochi"
                    },
                    "priceCurrency": "INR",
                    "price": "16500"
                }
            ]
        }
    }
    </script>

    <!-- Structured Data 4: FAQPage Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "How long does transit take for household goods from Ranchi to Kochi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Ranchi and Kochi is approximately 2,280 km via NH-44 and NH-544 or NH-16. Dedicated container trucks reach Kochi within 5 to 7 days, while shared consolidation vehicles take 7 to 9 days including interstate border clearances and toll checkpoint crossings."
                }
            },
            {
                "@type": "Question",
                "name": "How do you protect household electronics and furniture against Kerala coastal humidity and heavy rainfall?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Relocating to tropical Kerala requires specialized moisture protection. We pack sensitive electronics, LED screens, and wooden furniture using waterproof moisture-barrier polythene sheeting, silica gel desiccant packs inside sealed cartons, 50-micron bubble wraps, and multi-ply corrugated sheets inside watertight steel container bodies."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide relocation assistance for IT professionals moving to Kakkanad InfoPark and SmartCity Kochi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we frequently handle relocation for software engineers and IT professionals transferring to Kakkanad InfoPark, SmartCity Kochi, and Kalamassery tech parks. We offer specialized crating for multi-monitor workstations, ergonomic chairs, gaming setups, and express delivery timed with onboarding joining dates."
                }
            },
            {
                "@type": "Question",
                "name": "What are the estimated packing and moving charges from Ranchi to Kochi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Shifting costs for the 2,280 km route average Rs 18,500 to 25,000 for a 1 BHK home, Rs 28,000 to 38,500 for a 2 BHK apartment, and Rs 38,000 to 52,000 for a 3 BHK family house. Car shipping in covered carriers costs Rs 16,500 to 22,000, and two-wheeler parcel delivery costs Rs 6,500 to 9,500."
                }
            },
            {
                "@type": "Question",
                "name": "Do you offer military and naval transfer documentation for Southern Naval Command Kochi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we regularly assist Indian Navy officers and defense personnel posted to INS Dronacharya, INS Venduruthy, Cochin Shipyard, and Southern Naval Command headquarters. We provide verified IBA-approved consignment bills, itemized packing inventories, and GST bills for seamless defense reimbursement."
                }
            },
            {
                "@type": "Question",
                "name": "Is full transit insurance included for this 2,280 km long route?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we arrange comprehensive all-risk transit insurance through premier national insurance partners. It covers the entire 2,280 km transit against road accidents, overturned vehicles, highway pilferage, and elemental risks with hassle-free claim assistance."
                }
            }
        ]
    }
    </script>

    <!-- Scoped Custom Styling for Ranchi to Kochi Corridor Page -->
    <style>
        .rkc-wrap {
            --rkc-navy: #0e2942;
            --rkc-teal: #0d9488;
            --rkc-emerald: #059669;
            --rkc-amber: #d97706;
            --rkc-light-bg: #f8fafc;
            --rkc-card-bg: #ffffff;
            --rkc-border: #e2e8f0;
            --rkc-text-dark: #1e293b;
            --rkc-text-muted: #64748b;
            font-family: inherit;
            color: var(--rkc-text-dark);
            line-height: 1.7;
        }

        .rkc-hero {
            background: linear-gradient(135deg, rgba(14, 41, 66, 0.96), rgba(13, 148, 136, 0.88)), url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 4.5rem 1.5rem;
            text-align: center;
            position: relative;
        }

        .rkc-hero-content {
            max-width: 960px;
            margin: 0 auto;
        }

        .rkc-badge {
            display: inline-block;
            background: rgba(13, 148, 136, 0.3);
            border: 1px solid #2dd4bf;
            color: #ccfbf1;
            padding: 0.35rem 1.1rem;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 1.25rem;
        }

        .rkc-hero h1 {
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 1.2rem;
            color: #ffffff;
        }

        .rkc-hero p {
            font-size: clamp(1rem, 1.8vw, 1.2rem);
            color: #e2e8f0;
            margin-bottom: 2rem;
            max-width: 820px;
            margin-left: auto;
            margin-right: auto;
        }

        .rkc-hero-actions {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 2rem;
        }

        .rkc-btn-primary {
            background-color: var(--rkc-amber);
            color: #ffffff;
            padding: 0.85rem 1.75rem;
            border-radius: 6px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(217, 119, 6, 0.35);
        }

        .rkc-btn-primary:hover {
            background-color: #b45309;
            transform: translateY(-2px);
            color: #ffffff;
        }

        .rkc-btn-secondary {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(8px);
            color: #ffffff;
            border: 1px solid rgba(255, 255, 255, 0.4);
            padding: 0.85rem 1.75rem;
            border-radius: 6px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }

        .rkc-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.3);
            color: #ffffff;
            transform: translateY(-2px);
        }

        .rkc-hero-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 1.25rem;
            margin-top: 2.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            padding-top: 1.75rem;
        }

        .rkc-stat-box h4 {
            font-size: 1.75rem;
            font-weight: 800;
            color: #ccfbf1;
            margin: 0;
        }

        .rkc-stat-box span {
            font-size: 0.85rem;
            color: #cbd5e1;
        }

        .rkc-section {
            padding: 3.5rem 1.5rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .rkc-section-light {
            background-color: var(--rkc-light-bg);
            border-top: 1px solid var(--rkc-border);
            border-bottom: 1px solid var(--rkc-border);
        }

        .rkc-section-title {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .rkc-section-title h2 {
            font-size: clamp(1.75rem, 3vw, 2.35rem);
            font-weight: 800;
            color: var(--rkc-navy);
            margin-bottom: 0.75rem;
        }

        .rkc-section-title p {
            color: var(--rkc-text-muted);
            max-width: 720px;
            margin: 0 auto;
            font-size: 1.05rem;
        }

        .rkc-grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2.5rem;
            align-items: center;
        }

        .rkc-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.75rem;
        }

        .rkc-card {
            background-color: var(--rkc-card-bg);
            border: 1px solid var(--rkc-border);
            border-radius: 10px;
            padding: 1.75rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .rkc-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            border-color: var(--rkc-teal);
        }

        .rkc-card-icon {
            width: 48px;
            height: 48px;
            background-color: rgba(13, 148, 136, 0.12);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--rkc-teal);
            margin-bottom: 1.25rem;
        }

        .rkc-card h3 {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--rkc-navy);
            margin-bottom: 0.75rem;
        }

        .rkc-card p {
            font-size: 0.95rem;
            color: var(--rkc-text-muted);
            margin: 0;
            line-height: 1.6;
        }

        .rkc-image-container {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 12px 24px -6px rgba(0, 0, 0, 0.15);
            border: 1px solid var(--rkc-border);
        }

        .rkc-image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.4s ease;
        }

        .rkc-image-container:hover img {
            transform: scale(1.03);
        }

        .rkc-table-wrapper {
            overflow-x: auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--rkc-border);
            margin-top: 1.5rem;
        }

        .rkc-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.95rem;
        }

        .rkc-table th {
            background-color: var(--rkc-navy);
            color: #ffffff;
            padding: 1rem 1.25rem;
            font-weight: 700;
            white-space: nowrap;
        }

        .rkc-table td {
            padding: 0.95rem 1.25rem;
            border-bottom: 1px solid var(--rkc-border);
        }

        .rkc-table tr:last-child td {
            border-bottom: none;
        }

        .rkc-table tr:hover td {
            background-color: #f8fafc;
        }

        .rkc-highlight-tag {
            display: inline-block;
            background-color: #dcfce7;
            color: #15803d;
            font-size: 0.75rem;
            font-weight: 700;
            padding: 0.2rem 0.5rem;
            border-radius: 4px;
            margin-left: 0.5rem;
        }

        .rkc-timeline {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.5rem;
            position: relative;
            margin-top: 2rem;
        }

        .rkc-step {
            background-color: #ffffff;
            border: 1px solid var(--rkc-border);
            border-radius: 10px;
            padding: 1.5rem;
            position: relative;
        }

        .rkc-step-num {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background-color: var(--rkc-teal);
            color: #ffffff;
            font-weight: 800;
            border-radius: 50%;
            margin-bottom: 1rem;
            font-size: 1rem;
        }

        .rkc-step h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--rkc-navy);
            margin-bottom: 0.5rem;
        }

        .rkc-step p {
            font-size: 0.9rem;
            color: var(--rkc-text-muted);
            margin: 0;
            line-height: 1.5;
        }

        .rkc-faq-item {
            background-color: #ffffff;
            border: 1px solid var(--rkc-border);
            border-radius: 8px;
            margin-bottom: 1rem;
            overflow: hidden;
        }

        .rkc-faq-item summary {
            padding: 1.25rem;
            font-weight: 700;
            color: var(--rkc-navy);
            cursor: pointer;
            list-style: none;
            position: relative;
            padding-right: 2.5rem;
            background-color: #ffffff;
            transition: background-color 0.2s ease;
        }

        .rkc-faq-item summary::-webkit-details-marker {
            display: none;
        }

        .rkc-faq-item summary::after {
            content: "+";
            position: absolute;
            right: 1.25rem;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.4rem;
            font-weight: 600;
            color: var(--rkc-teal);
        }

        .rkc-faq-item[open] summary::after {
            content: "−";
        }

        .rkc-faq-item[open] summary {
            background-color: #f0fdfa;
        }

        .rkc-faq-body {
            padding: 1.25rem;
            color: var(--rkc-text-dark);
            font-size: 0.95rem;
            border-top: 1px solid var(--rkc-border);
            background-color: #ffffff;
            line-height: 1.65;
        }

        .rkc-cta-banner {
            background: linear-gradient(135deg, var(--rkc-navy) 0%, #115e59 100%);
            border-radius: 12px;
            padding: 3.5rem 2rem;
            text-align: center;
            color: #ffffff;
            margin: 3.5rem auto 1rem;
            max-width: 1100px;
        }

        .rkc-cta-banner h2 {
            font-size: clamp(1.8rem, 3.5vw, 2.5rem);
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 1rem;
        }

        .rkc-cta-banner p {
            font-size: 1.1rem;
            color: #cbd5e1;
            max-width: 680px;
            margin: 0 auto 2rem;
        }

        .rkc-cta-phones {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 2rem;
        }

        .rkc-phone-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #ffffff;
            padding: 0.65rem 1.4rem;
            border-radius: 50px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .rkc-phone-pill:hover {
            background: #ffffff;
            color: var(--rkc-navy);
        }

        @media (max-width: 768px) {
            .rkc-hero {
                padding: 3rem 1rem;
            }
            .rkc-section {
                padding: 2.5rem 1rem;
            }
            .rkc-hero-actions {
                flex-direction: column;
            }
            .rkc-btn-primary, .rkc-btn-secondary {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>

<?php include_once __DIR__ . '/../includes/header.php'; ?>

<main class="rkc-wrap">

    <!-- Hero Section -->
    <section class="rkc-hero">
        <div class="rkc-hero-content">
            <span class="rkc-badge">⭐ Safe Long-Haul Corridor | 2,280 km Direct Express Transit</span>
            <h1>Ranchi to Kochi Packers and Movers</h1>
            <p>Relocating from Jharkhand's capital to God's Own Country? Shree Ashirwad Packers and Movers provides trusted, zero-transshipment inter-state moving across the 2,280 km highway route with specialized moisture-barrier packing, enclosed car transport, and seamless delivery to Kakkanad InfoPark, Ernakulam, and Cochin Port.</p>
            
            <div class="rkc-hero-actions">
                <a href="tel:+918409531615" class="rkc-btn-primary">
                    📞 Call 8409531615
                </a>
                <a href="tel:+919835565233" class="rkc-btn-secondary">
                    📱 Call 9835565233
                </a>
                <a href="<?php echo SITE_BASE_URL; ?>/contact" class="rkc-btn-secondary">
                    📝 Get Free Route Quote
                </a>
            </div>

            <div class="rkc-hero-stats">
                <div class="rkc-stat-box">
                    <h4>2,280 KM</h4>
                    <span>Express Highway Corridor</span>
                </div>
                <div class="rkc-stat-box">
                    <h4>5 - 7 Days</h4>
                    <span>Sealed Container Delivery</span>
                </div>
                <div class="rkc-stat-box">
                    <h4>100%</h4>
                    <span>Waterproof &amp; Insured</span>
                </div>
                <div class="rkc-stat-box">
                    <h4>IBA Approved</h4>
                    <span>Defense &amp; Corporate Bills</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Route Overview & Inter-State Logistics -->
    <section class="rkc-section">
        <div class="rkc-grid-2">
            <div>
                <span style="color: var(--rkc-teal); font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.05em;">Pan-India Highway Corridor</span>
                <h2 style="font-size: 2rem; font-weight: 800; color: var(--rkc-navy); margin: 0.5rem 0 1.25rem;">Expert Long-Distance Logistics from Ranchi to Kochi</h2>
                <p>Relocating household goods, private automobiles, or corporate office assets across 2,280 km from the Chota Nagpur plateau to Kerala's coastal commercial metropolis demands sophisticated route management, robust fleet reliability, and specialized packaging engineered for diverse climate zones.</p>
                <p>Our dedicated transport carriers depart Ranchi through the scenic ring road, connecting via NH-43 / NH-30 through Raipur and Nagpur, or via the coastal NH-16 artery crossing Odisha and Andhra Pradesh. Merging into the high-speed NH-44 corridor via Bangalore, Salem, and Coimbatore, our trucks pass the scenic Palakkad Gap into Kerala along NH-544 through Thrissur and Aluva, reaching Kochi within 5 to 7 days.</p>
                <p>To eliminate the common risks of consignment damage and transit delays, Shree Ashirwad Packers and Movers implements a <strong>strict zero-transshipment protocol</strong>. As the premier brand of <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi" style="color: var(--rkc-teal); font-weight: 600; text-decoration: underline;">packers and movers in Ranchi</a>, we also manage seamless reciprocal return moves on our dedicated <a href="<?php echo SITE_BASE_URL; ?>/kochi-to-ranchi-packers-and-movers" style="color: var(--rkc-teal); font-weight: 600; text-decoration: underline;">Kochi to Ranchi packers and movers</a> corridor with equal dedication. Your belongings are systematically loaded into a dedicated, locked container in Ranchi and unsealed only at your final doorstep in Ernakulam or Kochi.</p>
            </div>
            <div class="rkc-image-container">
                <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Ranchi to Kochi Packers and Movers container truck transit" loading="lazy">
            </div>
        </div>
    </section>

    <!-- Neighborhood Coverage: Ranchi & Kochi -->
    <section class="rkc-section rkc-section-light">
        <div class="rkc-section-title">
            <h2>Seamless Door-to-Door Pickup &amp; Destination Coverage</h2>
            <p>From prime residential colonies and institutional hubs across Ranchi to major tech corridors, commercial centers, and residential suburbs in Kochi and Ernakulam.</p>
        </div>

        <div class="rkc-grid-2">
            <div class="rkc-card">
                <div class="rkc-card-icon">📍</div>
                <h3>Ranchi Pickup Sectors</h3>
                <p style="margin-bottom: 1rem;">Our Ranchi operations team provides on-time packing, furniture disassembly, and container loading across all key localities:</p>
                <ul style="padding-left: 1.25rem; font-size: 0.95rem; color: var(--rkc-text-muted); line-height: 1.8;">
                    <li><strong>Kanke Road &amp; Morabadi:</strong> Luxury apartments, academic institutions, and executive family residences.</li>
                    <li><strong>Bariatu &amp; Booty More:</strong> Medical college personnel, hospital consultants, and multi-storey gated communities.</li>
                    <li><strong>Ashok Nagar &amp; Harmu Colony:</strong> Administrative staff, government officers, and corporate professionals.</li>
                    <li><strong>HEC Dhurwa &amp; Namkum Cantt:</strong> PSU executives, defense officers, and military cantonment transfers.</li>
                    <li><strong>Lalpur, Circular Road &amp; Doranda:</strong> City-center residences, traditional homes, and commercial enterprises.</li>
                    <li><strong>Kokar, Tatisilwai &amp; BIT Mesra:</strong> Industrial park employees, engineering faculties, and suburban neighborhoods.</li>
                </ul>
            </div>

            <div class="rkc-card">
                <div class="rkc-card-icon">🌴</div>
                <h3>Kochi &amp; Ernakulam Delivery Hubs</h3>
                <p style="margin-bottom: 1rem;">Upon arrival in Kerala, our destination crew manages prompt unloading, room-specific placement, furniture reassembly, and debris hauling across:</p>
                <ul style="padding-left: 1.25rem; font-size: 0.95rem; color: var(--rkc-text-muted); line-height: 1.8;">
                    <li><strong>Kakkanad (InfoPark &amp; SmartCity):</strong> Modern IT apartments, tech executive villas, and high-rise condominiums.</li>
                    <li><strong>Ernakulam City &amp; Panampilly Nagar:</strong> Prestigious upscale residential neighborhoods, corporate suites, and villas.</li>
                    <li><strong>Edappally, Palarivattom &amp; Kaloor:</strong> Central urban hubs, family apartments, and shopping district communities.</li>
                    <li><strong>Aluva, Kalamassery &amp; Angamaly:</strong> Industrial estates, Cochin University staff quarters, and northern residential zones.</li>
                    <li><strong>Vyttila, Maradu &amp; Tripunithura:</strong> Mobility hub connectivity, historic residential pockets, and waterfront homes.</li>
                    <li><strong>Willingdon Island &amp; Fort Kochi:</strong> Cochin Port Trust officials, Naval Base quarters, and maritime corporate moves.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Specialized Services Section -->
    <section class="rkc-section">
        <div class="rkc-section-title">
            <h2>Our Specialized Relocation Solutions</h2>
            <p>Customized moving services designed to manage the unique demands of a 2,280 km inter-state journey from Ranchi to Kochi.</p>
        </div>

        <div class="rkc-grid-3">
            <div class="rkc-card">
                <div class="rkc-card-icon">🏠</div>
                <h3>Household &amp; Apartment Shifting</h3>
                <p>Complete home moving with 5-ply cartons, shock-absorbing bubble wrap, and multi-layer stretch film. We carefully dismantle beds, dining tables, and wardrobes, ensuring zero scratches or transit damage across the highway.</p>
            </div>

            <div class="rkc-card">
                <div class="rkc-card-icon">💻</div>
                <h3>IT Employee &amp; InfoPark Relocation</h3>
                <p>Specialized transfers for software engineers moving to Kakkanad InfoPark and SmartCity. We provide custom foam crating for multi-monitor workstations, high-end laptops, ergonomic setups, and audio gear with express delivery.</p>
            </div>

            <div class="rkc-card">
                <div class="rkc-card-icon">⚓</div>
                <h3>Naval &amp; Defense Personnel Transfers</h3>
                <p>Compliant relocation for military and Indian Navy personnel posted to Southern Naval Command, INS Dronacharya, or Cochin Shipyard. We provide IBA-approved consignment bills, stamped inventories, and GST bills for prompt claims reimbursement.</p>
            </div>

            <div class="rkc-card">
                <div class="rkc-card-icon">🚗</div>
                <h3>Enclosed Car Carrier Shipping</h3>
                <p>Doorstep vehicle pickup in Ranchi and safe delivery in Kochi via enclosed automobile carriers. Fitted with hydraulic ramps, wheel-locking fixtures, GPS live tracking, and comprehensive transit insurance protection.</p>
            </div>

            <div class="rkc-card">
                <div class="rkc-card-icon">🏍️</div>
                <h3>Bike Parcel &amp; Two-Wheeler Courier</h3>
                <p>Secure motorcycle transportation featuring fuel tank draining, multi-layered bubble packaging, handlebar and mirror cushioning, and rigid corrugated boxing to avoid any transit dents or scratches.</p>
            </div>

            <div class="rkc-card">
                <div class="rkc-card-icon">🏢</div>
                <h3>Corporate &amp; Commercial Moving</h3>
                <p>Complete office relocations covering server racks, modular office furniture, filing cabinets, and conference equipment with weekend transit scheduling to ensure zero loss of business productivity.</p>
            </div>
        </div>
    </section>

    <!-- Moisture & Electronics Protection Spotlight -->
    <section class="rkc-section rkc-section-light">
        <div class="rkc-grid-2">
            <div class="rkc-image-container">
                <img src="<?php echo SITE_BASE_URL; ?>/images/electronics-led-tv-crating-jharkhand.jpg" alt="Electronics and LED TV wooden crating for Ranchi to Kochi transit" loading="lazy">
            </div>
            <div>
                <span style="color: var(--rkc-teal); font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.05em;">Coastal Climate Packaging</span>
                <h2 style="font-size: 2rem; font-weight: 800; color: var(--rkc-navy); margin: 0.5rem 0 1.25rem;">Monsoon &amp; Moisture-Resistant Packaging for Kerala</h2>
                <p>Relocating across 2,280 km into Kerala exposes your household goods to high coastal humidity, frequent monsoon showers, and significant temperature shifts. Ordinary carton boxes often absorb ambient moisture, weakening cardboard integrity and putting electronic circuitry at risk.</p>
                <p>Shree Ashirwad Packers and Movers implements a specialized multi-barrier coastal protection protocol:</p>
                <ul style="padding-left: 1.25rem; font-size: 0.95rem; color: var(--rkc-text-muted); line-height: 1.8;">
                    <li><strong>Custom Wooden Crating:</strong> Heavy LED TVs, sound systems, and delicate glass tables are encased in solid wooden crates lined with high-density EPE foam.</li>
                    <li><strong>Vapor &amp; Moisture Barriers:</strong> Industrial-grade moisture-seal poly film encases all electronic items, preventing rust, condensation, and corrosion.</li>
                    <li><strong>Silica Gel Desiccants:</strong> Active desiccant pouches are inserted inside wardrobe boxes, book cartons, and electronic crates to absorb ambient humidity.</li>
                    <li><strong>Sealed Steel Containers:</strong> Our trucks feature heavy-duty, leak-tested steel bodies with rubber gasket doors to withstand torrential downpours.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Pricing & Distance Matrix Table -->
    <section class="rkc-section">
        <div class="rkc-section-title">
            <h2>Estimated Relocation Rates from Ranchi to Kochi</h2>
            <p>Clear, upfront pricing with zero hidden charges. Our quotes cover premium packing supplies, loading, interstate permits, highway tolls, and doorstep unloading.</p>
        </div>

        <div class="rkc-table-wrapper">
            <table class="rkc-table">
                <thead>
                    <tr>
                        <th>Consignment Scope</th>
                        <th>Approx Distance</th>
                        <th>Packing &amp; Labor</th>
                        <th>Highway Freight &amp; Tolls</th>
                        <th>Total Estimated Cost</th>
                        <th>Transit Timeline</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment Shifting</strong></td>
                        <td>~2,280 km</td>
                        <td>Rs 5,500 - 7,500</td>
                        <td>Rs 13,000 - 17,500</td>
                        <td><strong>Rs 18,500 - 25,000</strong></td>
                        <td>5 - 7 Days</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Family Home Move</strong> <span class="rkc-highlight-tag">Most Booked</span></td>
                        <td>~2,280 km</td>
                        <td>Rs 8,000 - 11,000</td>
                        <td>Rs 20,000 - 27,500</td>
                        <td><strong>Rs 28,000 - 38,500</strong></td>
                        <td>5 - 7 Days</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Luxury Villa Relocation</strong></td>
                        <td>~2,280 km</td>
                        <td>Rs 11,000 - 15,000</td>
                        <td>Rs 27,000 - 37,000</td>
                        <td><strong>Rs 38,000 - 52,000</strong></td>
                        <td>6 - 8 Days</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Large Bungalow Estate</strong></td>
                        <td>~2,280 km</td>
                        <td>Rs 15,000 - 21,000</td>
                        <td>Rs 40,000 - 54,000</td>
                        <td><strong>Rs 55,000 - 75,000</strong></td>
                        <td>6 - 8 Days</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler (Motorbike / Scooty)</strong></td>
                        <td>~2,280 km</td>
                        <td>Rs 2,000 - 2,800</td>
                        <td>Rs 4,500 - 6,700</td>
                        <td><strong>Rs 6,500 - 9,500</strong></td>
                        <td>5 - 7 Days</td>
                    </tr>
                    <tr>
                        <td><strong>Standard Car Carrier (Hatchback / Sedan)</strong></td>
                        <td>~2,280 km</td>
                        <td>Rs 3,000 - 4,000</td>
                        <td>Rs 13,500 - 18,000</td>
                        <td><strong>Rs 16,500 - 22,000</strong></td>
                        <td>6 - 8 Days</td>
                    </tr>
                    <tr>
                        <td><strong>SUV / Luxury Vehicle Enclosed Carrier</strong></td>
                        <td>~2,280 km</td>
                        <td>Rs 3,500 - 5,000</td>
                        <td>Rs 17,500 - 24,000</td>
                        <td><strong>Rs 21,000 - 29,000</strong></td>
                        <td>6 - 8 Days</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="font-size: 0.85rem; color: var(--rkc-text-muted); margin-top: 1rem; text-align: center;">*Note: Final pricing depends on total consignment weight/volume, floor level at pickup/delivery, elevator access, optional full-value transit insurance, and specialized crating needs.</p>
    </section>

    <!-- Car & Bike Carrier Spotlight -->
    <section class="rkc-section rkc-section-light">
        <div class="rkc-grid-2">
            <div>
                <span style="color: var(--rkc-teal); font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.05em;">Vehicle Transport Excellence</span>
                <h2 style="font-size: 2rem; font-weight: 800; color: var(--rkc-navy); margin: 0.5rem 0 1.25rem;">Covered Car &amp; Motorcycle Carrier Service to Kochi</h2>
                <p>Driving 2,280 km from Ranchi through multiple states and heavy highway corridors causes significant vehicle wear, tire degradation, and substantial fuel and toll expenses. Our specialized auto-carrier logistics offers an effortless, damage-free alternative.</p>
                <p>Before loading in Ranchi, our automotive inspector conducts a thorough condition audit, noting exterior condition, odometer readings, and battery health on a digital inspection sheet. Your automobile is loaded onto a hydraulic carrier, firmly anchored with wheel clamps, and monitored via real-time satellite GPS tracking throughout the journey.</p>
                <p>Whether delivering to Kakkanad, Panampilly Nagar, or Aluva, we provide convenient doorstep drop-off, ensuring your car or bike arrives clean, scratch-free, and ready to drive.</p>
            </div>
            <div class="rkc-image-container">
                <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transport carrier loading from Ranchi to Kochi" loading="lazy">
            </div>
        </div>
    </section>

    <!-- Relocation Workflow Process -->
    <section class="rkc-section">
        <div class="rkc-section-title">
            <h2>Our 5-Stage Systematic Relocation Process</h2>
            <p>From initial survey in Ranchi to final furniture placement in Kochi, our structured execution ensures complete peace of mind.</p>
        </div>

        <div class="rkc-timeline">
            <div class="rkc-step">
                <span class="rkc-step-num">1</span>
                <h4>Virtual or Home Survey</h4>
                <p>Our senior relocation estimator evaluates your household inventory via virtual video or home visit in Ranchi, providing an accurate, all-inclusive quotation.</p>
            </div>

            <div class="rkc-step">
                <span class="rkc-step-num">2</span>
                <h4>Multi-Layer Packing</h4>
                <p>Trained packers dismantle large furniture, wrap electronics with anti-static bubble sheet, crate delicate glass, and label every box room-by-room.</p>
            </div>

            <div class="rkc-step">
                <span class="rkc-step-num">3</span>
                <h4>Container Loading &amp; Sealing</h4>
                <p>Goods are scientifically organized inside our weatherproof metal container truck using heavy load straps, shock-absorbing mats, and sealed with a security lock.</p>
            </div>

            <div class="rkc-step">
                <span class="rkc-step-num">4</span>
                <h4>Express Highway Transit</h4>
                <p>Navigating via NH-44 and NH-544 with dual-driver rotation, our container trucks maintain constant transit progress, backed by automated GPS checkpoint alerts.</p>
            </div>

            <div class="rkc-step">
                <span class="rkc-step-num">5</span>
                <h4>Doorstep Delivery &amp; Setup</h4>
                <p>In Kochi, our local team carefully offloads each box, places furniture into designated rooms, reassembles beds and tables, and removes empty packing debris.</p>
            </div>
        </div>
    </section>

    <!-- Why Choose Shree Ashirwad Packers and Movers -->
    <section class="rkc-section rkc-section-light">
        <div class="rkc-grid-2">
            <div class="rkc-image-container">
                <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck Kochi Shree Ashirwad Packers" loading="lazy">
            </div>
            <div>
                <span style="color: var(--rkc-teal); font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.05em;">Why Trust Shree Ashirwad</span>
                <h2 style="font-size: 2rem; font-weight: 800; color: var(--rkc-navy); margin: 0.5rem 0 1.25rem;">Why Families &amp; Corporates Trust Us for Kochi Moves</h2>
                <p>Handling a 2,280 km inter-state relocation requires proven reliability, disciplined operations, and dedicated logistics infrastructure. Here is why thousands of clients trust Shree Ashirwad Packers and Movers:</p>
                <div style="margin-top: 1.5rem;">
                    <div style="display: flex; gap: 1rem; margin-bottom: 1.25rem; align-items: flex-start;">
                        <span style="font-size: 1.25rem; color: #0d9488;">✔</span>
                        <div>
                            <strong style="color: var(--rkc-navy);">Zero-Transshipment Guarantee:</strong>
                            <p style="margin: 0; font-size: 0.9rem; color: var(--rkc-text-muted);">Your goods remain securely locked inside the original container vehicle from Ranchi pickup to Kochi delivery without midway hub transfers.</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 1rem; margin-bottom: 1.25rem; align-items: flex-start;">
                        <span style="font-size: 1.25rem; color: #0d9488;">✔</span>
                        <div>
                            <strong style="color: var(--rkc-navy);">IBA-Format Defense &amp; Corporate Invoicing:</strong>
                            <p style="margin: 0; font-size: 0.9rem; color: var(--rkc-text-muted);">We provide compliant consignment notes, GST invoices, and itemized inventories eligible for 100% reimbursement by PSUs, MNCs, and defense departments.</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 1rem; margin-bottom: 1.25rem; align-items: flex-start;">
                        <span style="font-size: 1.25rem; color: #0d9488;">✔</span>
                        <div>
                            <strong style="color: var(--rkc-navy);">Full All-Risk Transit Insurance:</strong>
                            <p style="margin: 0; font-size: 0.9rem; color: var(--rkc-text-muted);">Comprehensive insurance policy protection safeguards against road accidents, severe weather, or unforeseen transit delays with quick claim settlement.</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <span style="font-size: 1.25rem; color: #0d9488;">✔</span>
                        <div>
                            <strong style="color: var(--rkc-navy);">Full Unpacking &amp; Reassembly Support:</strong>
                            <p style="margin: 0; font-size: 0.9rem; color: var(--rkc-text-muted);">Our Kochi team assists with room placement, furniture setup, and cleanup, allowing you to settle into your new home without stress.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions (Accordion) -->
    <section class="rkc-section">
        <div class="rkc-section-title">
            <h2>Frequently Asked Questions</h2>
            <p>Clear answers to common questions about relocating from Ranchi to Kochi.</p>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            <details class="rkc-faq-item">
                <summary>How long does transit take for household goods from Ranchi to Kochi?</summary>
                <div class="rkc-faq-body">
                    The total highway distance between Ranchi and Kochi is approximately 2,280 km via NH-44 and NH-544 or NH-16. Dedicated container trucks reach Kochi within 5 to 7 days, while shared consolidation vehicles take 7 to 9 days including interstate border clearances and toll checkpoint crossings.
                </div>
            </details>

            <details class="rkc-faq-item">
                <summary>How do you protect household electronics and furniture against Kerala coastal humidity and heavy rainfall?</summary>
                <div class="rkc-faq-body">
                    Relocating to tropical Kerala requires specialized moisture protection. We pack sensitive electronics, LED screens, and wooden furniture using waterproof moisture-barrier polythene sheeting, silica gel desiccant packs inside sealed cartons, 50-micron bubble wraps, and multi-ply corrugated sheets inside watertight steel container bodies.
                </div>
            </details>

            <details class="rkc-faq-item">
                <summary>Do you provide relocation assistance for IT professionals moving to Kakkanad InfoPark and SmartCity Kochi?</summary>
                <div class="rkc-faq-body">
                    Yes, we frequently handle relocation for software engineers and IT professionals transferring to Kakkanad InfoPark, SmartCity Kochi, and Kalamassery tech parks. We offer specialized crating for multi-monitor workstations, ergonomic chairs, gaming setups, and express delivery timed with onboarding joining dates.
                </div>
            </details>

            <details class="rkc-faq-item">
                <summary>What are the estimated packing and moving charges from Ranchi to Kochi?</summary>
                <div class="rkc-faq-body">
                    Shifting costs for the 2,280 km route average Rs 18,500 to 25,000 for a 1 BHK home, Rs 28,000 to 38,500 for a 2 BHK apartment, and Rs 38,000 to 52,000 for a 3 BHK family house. Car shipping in covered carriers costs Rs 16,500 to 22,000, and two-wheeler parcel delivery costs Rs 6,500 to 9,500.
                </div>
            </details>

            <details class="rkc-faq-item">
                <summary>Do you offer military and naval transfer documentation for Southern Naval Command Kochi?</summary>
                <div class="rkc-faq-body">
                    Yes, we regularly assist Indian Navy officers and defense personnel posted to INS Dronacharya, INS Venduruthy, Cochin Shipyard, and Southern Naval Command headquarters. We provide verified IBA-approved consignment bills, itemized packing inventories, and GST bills for seamless defense reimbursement.
                </div>
            </details>

            <details class="rkc-faq-item">
                <summary>Is full transit insurance included for this 2,280 km long route?</summary>
                <div class="rkc-faq-body">
                    Yes, we arrange comprehensive all-risk transit insurance through premier national insurance partners. It covers the entire 2,280 km transit against road accidents, overturned vehicles, highway pilferage, and elemental risks with hassle-free claim assistance.
                </div>
            </details>
        </div>
    </section>

    <!-- Connected South India Cluster Navigation -->
    <section class="rkc-section rkc-section-light" style="padding: 50px 0;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 1rem;">
            <div class="rkc-section-title" style="margin-bottom: 2rem;">
                <span style="color: var(--rkc-teal); font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.05em;">Connected Route Network</span>
                <h2>Explore Related South India Moving Corridors</h2>
                <p>Direct long-haul container linehaul connecting Ranchi with Kerala, Karnataka, Tamil Nadu, and Andhra Pradesh.</p>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1rem;">
                <a href="<?php echo SITE_BASE_URL; ?>/kochi-to-ranchi-packers-and-movers" style="display: flex; justify-content: space-between; align-items: center; background: #ffffff; padding: 1.1rem 1.25rem; border-radius: 8px; border: 1px solid var(--rkc-border); text-decoration: none; color: var(--rkc-navy); font-weight: 600; font-size: 0.95rem; box-shadow: 0 2px 4px rgba(0,0,0,0.03);">
                    <span>Kochi to Ranchi (Return)</span>
                    <span style="color: var(--rkc-teal);">→</span>
                </a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi" style="display: flex; justify-content: space-between; align-items: center; background: #ffffff; padding: 1.1rem 1.25rem; border-radius: 8px; border: 1px solid var(--rkc-border); text-decoration: none; color: var(--rkc-navy); font-weight: 600; font-size: 0.95rem; box-shadow: 0 2px 4px rgba(0,0,0,0.03);">
                    <span>Ranchi Headquarters Hub</span>
                    <span style="color: var(--rkc-teal);">→</span>
                </a>
                <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-trivandrum-packers-and-movers" style="display: flex; justify-content: space-between; align-items: center; background: #ffffff; padding: 1.1rem 1.25rem; border-radius: 8px; border: 1px solid var(--rkc-border); text-decoration: none; color: var(--rkc-navy); font-weight: 600; font-size: 0.95rem; box-shadow: 0 2px 4px rgba(0,0,0,0.03);">
                    <span>Ranchi to Trivandrum Route</span>
                    <span style="color: var(--rkc-teal);">→</span>
                </a>
                <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-coimbatore-packers-and-movers" style="display: flex; justify-content: space-between; align-items: center; background: #ffffff; padding: 1.1rem 1.25rem; border-radius: 8px; border: 1px solid var(--rkc-border); text-decoration: none; color: var(--rkc-navy); font-weight: 600; font-size: 0.95rem; box-shadow: 0 2px 4px rgba(0,0,0,0.03);">
                    <span>Ranchi to Coimbatore Corridor</span>
                    <span style="color: var(--rkc-teal);">→</span>
                </a>
                <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-kozhikode-packers-and-movers" style="display: flex; justify-content: space-between; align-items: center; background: #ffffff; padding: 1.1rem 1.25rem; border-radius: 8px; border: 1px solid var(--rkc-border); text-decoration: none; color: var(--rkc-navy); font-weight: 600; font-size: 0.95rem; box-shadow: 0 2px 4px rgba(0,0,0,0.03);">
                    <span>Ranchi to Kozhikode Route</span>
                    <span style="color: var(--rkc-teal);">→</span>
                </a>
                <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-bangalore-packers-and-movers" style="display: flex; justify-content: space-between; align-items: center; background: #ffffff; padding: 1.1rem 1.25rem; border-radius: 8px; border: 1px solid var(--rkc-border); text-decoration: none; color: var(--rkc-navy); font-weight: 600; font-size: 0.95rem; box-shadow: 0 2px 4px rgba(0,0,0,0.03);">
                    <span>Ranchi to Bangalore Express</span>
                    <span style="color: var(--rkc-teal);">→</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Call to Action Banner -->
    <section class="rkc-section" style="padding-top: 0;">
        <div class="rkc-cta-banner">
            <h2>Planning Your Move from Ranchi to Kochi?</h2>
            <p>Connect with our expert long-distance relocation coordinators today. Enjoy transparent pricing, dedicated container transit, and guaranteed on-time delivery to Kochi.</p>
            
            <div class="rkc-cta-phones">
                <a href="tel:+918409531615" class="rkc-phone-pill">
                    📞 +91 8409531615
                </a>
                <a href="tel:+919835565233" class="rkc-phone-pill">
                    📱 +91 9835565233
                </a>
                <a href="mailto:enquiry@shreeashirwadpackers.com" class="rkc-phone-pill">
                    ✉️ enquiry@shreeashirwadpackers.com
                </a>
            </div>

            <a href="<?php echo SITE_BASE_URL; ?>/contact" class="rkc-btn-primary" style="font-size: 1.05rem; padding: 1rem 2.25rem;">
                Request Free Relocation Quote Today
            </a>
        </div>
    </section>

</main>

<?php include_once __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>
