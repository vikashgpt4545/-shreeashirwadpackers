<?php
/**
 * Page Name: Chennai to Jamshedpur Packers and Movers
 * Route Slug: chennai-to-jamshedpur-packers-and-movers
 * Description: Dependable interstate household shifting, Tata Steel & automotive corporate transfers, car carrier, and commercial moving services from Chennai to Jamshedpur.
 * Focus Keywords: chennai to jamshedpur packers and movers, packers and movers chennai to jamshedpur, house shifting chennai to jamshedpur, car carrier chennai to jamshedpur, bike transport chennai to jamshedpur, household moving chennai jamshedpur
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/includes/config.php';
}

$page_title = "Chennai to Jamshedpur Packers and Movers | Reliable Shifting Services";
$page_desc = "Safe Chennai to Jamshedpur packers and movers. 1520 km direct transit via NH-16 East Coast corridor, 5-layer packing, Tata corporate transfer bills, car carrier. Call 9835565233.";
$canonical_url = "https://www.shreeashirwadpackers.com/chennai-to-jamshedpur-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="chennai to jamshedpur packers and movers, packers and movers chennai to jamshedpur, house shifting chennai to jamshedpur, car carrier chennai to jamshedpur, bike transport chennai to jamshedpur, household moving chennai jamshedpur">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-TN">
    <meta name="geo.placename" content="Chennai">

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

    <!-- Scoped CSS for Chennai to Jamshedpur -->
    <style>
        :root {
            --che2jam-primary: #1e3a8a;
            --che2jam-secondary: #0284c7;
            --che2jam-accent: #0284c7;
            --che2jam-accent-light: #e0f2fe;
            --che2jam-dark: #0f172a;
            --che2jam-gray-bg: #f8fafc;
            --che2jam-border: #e2e8f0;
            --che2jam-shadow: 0 10px 25px -5px rgba(30, 58, 138, 0.08), 0 8px 10px -6px rgba(30, 58, 138, 0.04);
        }

        .che2jam-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 58, 138, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .che2jam-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .che2jam-hero p.lead {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #e2e8f0;
            max-width: 820px;
            margin-bottom: 28px;
        }

        .che2jam-badge-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 30px;
        }

        .che2jam-badge {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.22);
            color: #ffffff;
            padding: 7px 16px;
            border-radius: 9999px;
            font-size: 0.88rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .che2jam-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .che2jam-btn-primary {
            background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%);
            color: #ffffff;
            font-weight: 700;
            padding: 14px 32px;
            border-radius: 10px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 4px 14px rgba(2, 132, 199, 0.35);
            transition: all 0.3s ease;
        }

        .che2jam-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(2, 132, 199, 0.45);
            color: #ffffff;
        }

        .che2jam-btn-secondary {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(6px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #ffffff;
            font-weight: 600;
            padding: 14px 28px;
            border-radius: 10px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .che2jam-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            color: #ffffff;
        }

        .che2jam-section {
            padding: 70px 0;
        }

        .che2jam-section-gray {
            background-color: var(--che2jam-gray-bg);
        }

        .che2jam-heading-center {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }

        .che2jam-heading-center h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--che2jam-dark);
            margin-bottom: 14px;
        }

        .che2jam-heading-center p {
            font-size: 1.05rem;
            color: #64748b;
            line-height: 1.65;
        }

        .che2jam-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .che2jam-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 36px;
            align-items: center;
        }

        .che2jam-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }

        .che2jam-card {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--che2jam-border);
            padding: 30px;
            box-shadow: var(--che2jam-shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .che2jam-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px -5px rgba(30, 58, 138, 0.12);
        }

        .che2jam-card-icon {
            width: 54px;
            height: 54px;
            border-radius: 12px;
            background: var(--che2jam-accent-light);
            color: var(--che2jam-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .che2jam-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--che2jam-dark);
            margin-bottom: 12px;
        }

        .che2jam-card p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
        }

        .che2jam-table-container {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--che2jam-border);
            overflow-x: auto;
            box-shadow: var(--che2jam-shadow);
            margin: 35px 0;
        }

        .che2jam-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .che2jam-table th {
            background: #0f172a;
            color: #ffffff;
            font-weight: 700;
            padding: 16px 20px;
            font-size: 0.98rem;
        }

        .che2jam-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--che2jam-border);
            color: #334155;
            font-size: 0.95rem;
        }

        .che2jam-table tr:last-child td {
            border-bottom: none;
        }

        .che2jam-table tr:hover td {
            background-color: #f1f5f9;
        }

        .che2jam-checklist {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .che2jam-checklist li {
            position: relative;
            padding-left: 28px;
            margin-bottom: 12px;
            color: #334155;
            font-size: 0.98rem;
            line-height: 1.6;
        }

        .che2jam-checklist li::before {
            content: "\2713";
            position: absolute;
            left: 0;
            top: 0;
            color: #10b981;
            font-weight: 800;
            font-size: 1.1rem;
        }

        .che2jam-img-wrap {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: var(--che2jam-shadow);
        }

        .che2jam-img-wrap img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.4s ease;
        }

        .che2jam-img-wrap:hover img {
            transform: scale(1.03);
        }

        .che2jam-faq-item {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--che2jam-border);
            padding: 24px;
            margin-bottom: 16px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        .che2jam-faq-item h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--che2jam-dark);
            margin-bottom: 10px;
        }

        .che2jam-faq-item p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
            margin: 0;
        }

        @media (max-width: 991px) {
            .che2jam-grid-3, .che2jam-grid-4 {
                grid-template-columns: repeat(2, 1fr);
            }
            .che2jam-grid-2 {
                grid-template-columns: 1fr;
            }
            .che2jam-hero h1 {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 640px) {
            .che2jam-grid-3, .che2jam-grid-4 {
                grid-template-columns: 1fr;
            }
            .che2jam-hero {
                padding: 60px 0 45px;
            }
            .che2jam-hero h1 {
                font-size: 1.85rem;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Chennai to Jamshedpur",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "<?php echo $canonical_url; ?>#company",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+919835565233",
        "priceRange": "INR 12,500 - 45,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Grand Southern Trunk Road, Guindy",
            "addressLocality": "Chennai",
            "addressRegion": "Tamil Nadu",
            "postalCode": "600032",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 13.0827,
            "longitude": 80.2707
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Chennai"
            },
            {
                "@type": "City",
                "name": "Jamshedpur"
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
            "opens": "00:00",
            "closes": "23:59"
        }
    }
    </script>

    <!-- Schema 2: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Interstate Relocation & Household Shifting",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "City",
            "name": "Jamshedpur, Jharkhand"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Chennai to Jamshedpur Moving Packages",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Chennai to Jamshedpur Household Shifting"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Chennai to Jamshedpur Car Carrier & Bike Transport"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Tata Group & Corporate Relocation Billing"
                    }
                }
            ]
        }
    }
    </script>

    <!-- Schema 3: BreadcrumbList -->
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
                "name": "Interstate Relocation",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Chennai to Jamshedpur Shifting",
                "item": "<?php echo $canonical_url; ?>"
            }
        ]
    }
    </script>

    <!-- Schema 4: FAQPage -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What is the highway transit time from Chennai to Jamshedpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The road distance between Chennai and Jamshedpur is approximately 1,520 km via the NH-16 coastal corridor. Dedicated container trucks typically reach within 48 to 72 hours, while shared part-load consignments take 4 to 6 days."
                }
            },
            {
                "@type": "Question",
                "name": "What are the estimated moving costs from Chennai to Jamshedpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Moving rates range from Rs 12,500 to Rs 21,000 for a 1 BHK apartment, Rs 18,500 to Rs 30,000 for a 2 BHK apartment, and Rs 25,000 to Rs 42,000 for a 3 BHK home. Costs include 5-layer packing, container transport, toll taxes, and door delivery."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide claimable GST invoices for Tata Steel and corporate transfers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Shree Ashirwad Packers and Movers issues 100% compliant GST invoices, detailed item packing lists, consignment consignment notes (bilty), and IBA-approved receipts recognized by Tata Steel, Tata Motors, and corporate employers."
                }
            },
            {
                "@type": "Question",
                "name": "How are cars and motorcycles transported from Chennai to Jamshedpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Vehicles are transported in enclosed hydraulic car carrier trailers and custom wooden motorcycle crates with wheel chocks, security straps, and comprehensive transit risk insurance."
                }
            },
            {
                "@type": "Question",
                "name": "Which areas in Chennai and Jamshedpur do you service?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "In Chennai, we cover Anna Nagar, T. Nagar, Adyar, Velachery, OMR, Porur, and Ambattur. In Jamshedpur, we deliver to Bistupur, Sakchi, Kadma, Sonari, Telco Colony, Golmuri, Baridih, and Adityapur."
                }
            },
            {
                "@type": "Question",
                "name": "Is transit insurance mandatory for interstate moves from Chennai to Jamshedpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "While optional, we strongly recommend our comprehensive transit insurance policy which covers accidental highway mishaps, overturning, and weather hazards with hassle-free claim settlements."
                }
            }
        ]
    }
    </script>
  <style>
    /* Responsive Image Containment & Mobile Safeguard - Compact & Balanced */
    .corridor-img-container, [class*="-feature-img"], [class*="-img-box"], [class*="img-showcase"], [class*="-img-card"], .che2jam-img-wrap {
      max-width: 440px !important;
      width: 100% !important;
      margin: 18px auto !important;
      overflow: hidden !important;
      border-radius: 12px !important;
      text-align: center !important;
    }

    .corridor-img-container img, [class*="-feature-img"] img, [class*="-img-box"] img, [class*="img-showcase"] img, [class*="-img-card"] img, .che2jam-img-wrap img {
      max-width: 440px !important;
      max-height: 220px !important;
      height: 220px !important;
      width: 100% !important;
      object-fit: cover !important;
      aspect-ratio: 16/9 !important;
      display: block !important;
      margin: 0 auto !important;
      border-radius: 10px !important;
    }

    @media (max-width: 768px) {
      .corridor-img-container, [class*="-feature-img"], [class*="-img-box"], [class*="img-showcase"], [class*="-img-card"], .che2jam-img-wrap {
        max-width: 320px !important;
        margin: 14px auto !important;
      }
      .corridor-img-container img, [class*="-feature-img"] img, [class*="-img-box"] img, [class*="img-showcase"] img, [class*="-img-card"] img, .che2jam-img-wrap img {
        max-width: 320px !important;
        max-height: 180px !important;
        height: 180px !important;
      }
    }
  </style>
</head>
<body>

<?php include __DIR__ . '/includes/header.php'; ?>

<!-- Hero Section -->
<section class="che2jam-hero">
    <div class="container">
        <div class="che2jam-badge-strip">
            <span class="che2jam-badge">&#9733; 1,520 KM Express Interstate Corridor</span>
            <span class="che2jam-badge">&#128666; Sealed All-Weather Closed Containers</span>
            <span class="che2jam-badge">&#128196; Tata Steel &amp; Corporate Claim Bills</span>
            <span class="che2jam-badge">&#128338; Fast 48-72 Hour Transit Delivery</span>
        </div>
        <h1>Packers and Movers from Chennai to Jamshedpur</h1>
        <p class="lead">
            Dependable, insured, and professional household shifting, vehicle transport, and corporate relocation services connecting Chennai to Jamshedpur. Experience 5-layer protective packaging, dedicated closed container trucks, and seamless doorstep delivery across the Steel City.
        </p>
        <div class="che2jam-cta-group">
            <a href="tel:+919835565233" class="che2jam-btn-primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call Hotline: 084095 31615
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact-us" class="che2jam-btn-secondary">
                Request Express Moving Quote &rarr;
            </a>
        </div>
    </div>
</section>

<!-- Competitor Ranking Keyword Content Box -->
<section style="padding: 40px 0 20px; background: #ffffff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-left: 5px solid #0d47a1; border-radius: 12px; padding: 30px; box-shadow: 0 4px 15px rgba(0,0,0,0.04);">
            <h3 style="color: #0f172a; font-size: 1.5rem; font-weight: 700; margin-top: 0; margin-bottom: 16px;">
                Packers and Movers from Chennai to Jamshedpur
            </h3>
            <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 12px;">
                Looking for the <strong>best packers and movers from Chennai to Jamshedpur</strong>? Shree Ashirwad Packers and Movers provides trusted <strong>household shifting</strong>, commercial <strong>office relocation</strong>, specialized <strong>bike transport</strong>, secure <strong>car transport</strong>, and complete moving solutions at affordable prices.
            </p>
            <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 12px;">
                Our experienced team offers safe packing, loading, unloading, direct transit transportation, and unpacking services across Chennai and Jamshedpur with timely delivery support.
            </p>
            <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 12px;">
                As one of the <strong>top-rated packers and movers near Chennai</strong>, we help families, military personnel, corporate executives, and businesses relocate locally and across Jharkhand and India without hassle.
            </p>
            <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 12px;">
                We cover major localities in Chennai and Jamshedpur along with nearby residential colonies, commercial centers, and industrial areas for fast and reliable shifting services.
            </p>
            <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 12px;">
                Whether you need <strong>local shifting in Chennai</strong>, intercity relocation to Jamshedpur, <strong>office moving</strong>, luggage transport, or vehicle transportation, our trained staff ensures secure handling and professional support.
            </p>
            <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 12px;">
                Customers choose our <strong>movers and packers service from Chennai to Jamshedpur</strong> for transparent pricing, careful goods handling, quick booking assistance, and dependable relocation planning.
            </p>
            <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 12px;">
                We also provide <strong>nearby packers and movers</strong> support with <strong>pincode-based scheduling</strong>, <strong>same-day shifting assistance</strong>, <strong>floor-to-floor handling</strong>, and flexible moving options.
            </p>
            <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 12px;">
                From small apartments (1 BHK, 2 BHK, 3 BHK) to large bungalows and corporate setups, our <strong>packing and moving company from Chennai to Jamshedpur</strong> delivers affordable, safe, and stress-free relocation services.
            </p>
            <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 12px;">
                If you are searching for reliable <strong>movers and packers near me from Chennai to Jamshedpur</strong>, our local team is available 24/7 for <strong>home shifting</strong>, storage, transport, and complete relocation assistance.
            </p>
            <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 0;">
                Our <strong>professional packers and movers service from Chennai to Jamshedpur</strong> is designed for safe household shifting, commercial relocation, <strong>furniture moving</strong>, and <strong>long-distance transportation</strong> at verified <strong>cheap and affordable packers and movers charges from Chennai to Jamshedpur</strong>. Call <strong><a href="tel:+919835565233" style="color: #0d47a1; font-weight: 700; text-decoration: none;">+91 9835565233</a></strong> for an instant quotation.
            </p>
        </div>
    </div>
</section>

<!-- Route Overview Section -->
<section class="che2jam-section">
    <div class="container">
        <div class="che2jam-grid-2">
            <div>
                <span style="color: var(--che2jam-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Connecting Tamil Nadu Capital to the Steel City</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--che2jam-dark); margin: 10px 0 20px;">
                    Express 1,520 KM Interstate Moving from Chennai to Jamshedpur
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Relocating between Chennai and Jamshedpur connects South India&rsquo;s leading industrial and software hub with Jharkhand&rsquo;s premier manufacturing powerhouse. Spanning approximately 1,520 km along the Golden Quadrilateral NH-16 (East Coast Highway), this interstate route witnesses continuous transfers of automotive engineers, Tata Group managers, IT specialists, and industrial professionals.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    At <strong>Shree Ashirwad Packers and Movers</strong>, we execute this long-haul corridor with precision logistics. Our high-capacity weatherproof container trucks depart on scheduled runs from Chennai via Nellore, Vijayawada, Visakhapatnam, and Bhubaneswar, navigating directly to Jamshedpur with delivery within 48 to 72 hours.
                </p>
                <ul class="che2jam-checklist">
                    <li>Doorstep pickup across Chennai including Anna Nagar, OMR, Velachery, and Ambattur</li>
                    <li>Multi-layer export-grade packaging protecting furniture against humidity and vibration</li>
                    <li>Direct sealed container transit with GPS satellite route tracking and checkpoint updates</li>
                    <li>Turnkey room placement, furniture assembly, and packaging waste disposal in Jamshedpur</li>
                </ul>
            </div>
            <div class="che2jam-img-wrap">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Chennai to Jamshedpur Sealed Container Shifting Truck">
            </div>
        </div>
    </div>
</section>

<!-- Core Shifting Services Grid -->
<section class="che2jam-section che2jam-section-gray">
    <div class="container">
        <div class="che2jam-heading-center">
            <h2>Comprehensive Shifting Services: Chennai to Jamshedpur</h2>
            <p>
                Custom-tailored moving solutions for corporate executives, manufacturing engineers, defense families, and residential homeowners.
            </p>
        </div>

        <div class="che2jam-grid-3">
            <div class="che2jam-card">
                <div class="che2jam-card-icon">&#127968;</div>
                <h3>Complete Home Relocation</h3>
                <p>
                    Full packing of furniture, modular kitchen items, appliances, and fragile chinaware using 5-ply cartons, shock-absorbing thermocol, and heavy stretch film.
                </p>
            </div>
            <div class="che2jam-card">
                <div class="che2jam-card-icon">&#128663;</div>
                <h3>Enclosed Car Carrier</h3>
                <p>
                    Dedicated hydraulic car trailers safely transport sedans, SUVs, and luxury vehicles along NH-16 without road wear, rock chips, or odometer elevation.
                </p>
            </div>
            <div class="che2jam-card">
                <div class="che2jam-card-icon">&#127949;</div>
                <h3>Two-Wheeler Bike Courier</h3>
                <p>
                    Specialized motorcycle transit utilizing multi-layer bubble wrap, handle padding, wheel chocks, and nylon harness belts to guarantee scratch-free delivery.
                </p>
            </div>
            <div class="che2jam-card">
                <div class="che2jam-card-icon">&#128188;</div>
                <h3>Tata Group Corporate Billing</h3>
                <p>
                    100% authentic GST invoices, detailed item inventories, consignment notes (bilty), and IBA-approved documentation compliant with Tata Steel, Tata Motors, and corporate reimbursement norms.
                </p>
            </div>
            <div class="che2jam-card">
                <div class="che2jam-card-icon">&#128230;</div>
                <h3>Part-Load &amp; Parcel Shifting</h3>
                <p>
                    Affordable sharing and single-room relocation options for IT professionals, bachelor setups, and students moving between Chennai and Jamshedpur.
                </p>
            </div>
            <div class="che2jam-card">
                <div class="che2jam-card-icon">&#128737;</div>
                <h3>Transit Risk Insurance</h3>
                <p>
                    Comprehensive optional transit insurance policy covering accidental damages, road perils, and external impacts with transparent claim settlement support.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Visual Feature Strip: Packaging Standards -->
<section class="che2jam-section">
    <div class="container">
        <div class="che2jam-grid-2">
            <div class="che2jam-img-wrap">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="5-Layer Protective Packing for Chennai to Jamshedpur Move">
            </div>
            <div>
                <span style="color: var(--che2jam-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Engineered Defensive Packaging</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--che2jam-dark); margin: 10px 0 20px;">
                    Five-Layer Protective Packaging for NH-16 Long-Haul Transit
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    The 1,520 km highway route along NH-16 traverses varied coastal terrain and high-speed highway conditions. Flawless multi-layer packing is critical to eliminate friction rubs, temperature variations, and road vibration shocks.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    Our trained packaging crews utilize specialized industrial packaging materials:
                </p>
                <ul class="che2jam-checklist">
                    <li><strong>Moisture-Resistant Cling Film:</strong> Primary seal guarding against coastal humidity, road dust, and moisture ingress.</li>
                    <li><strong>High-Density Bubble Cushioning:</strong> Thick air-bubble wraps protecting LED smart TVs, glassware, and audio equipment.</li>
                    <li><strong>Edge-Reinforced Corner Protectors:</strong> Rigid cardboard angles preventing corner dings on wooden tables and almirahs.</li>
                    <li><strong>7-Ply Heavy-Duty Export Cartons:</strong> Multi-wall corrugated boxes that resist crushing under vertical stacking loads.</li>
                    <li><strong>Security Strapping &amp; Room Coding:</strong> Durable poly strapping and color-coded labels specifying fragile alerts and room designation.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Shifting Rates Table -->
<section class="che2jam-section che2jam-section-gray">
    <div class="container">
        <div class="che2jam-heading-center">
            <h2>Chennai to Jamshedpur Moving Rates &amp; Price Estimates</h2>
            <p>
                Transparent, upfront pricing estimates with no hidden terminal fees or surprise loading surcharges.
            </p>
        </div>

        <div class="che2jam-table-container">
            <table class="che2jam-table">
                <thead>
                    <tr>
                        <th>Move Type / Household Size</th>
                        <th>Packing Material &amp; Labor</th>
                        <th>Transport / Container Cost</th>
                        <th>Estimated Total (&#8377;)</th>
                        <th>Transit Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 RK / Studio Setup</strong></td>
                        <td>&#8377; 3,500 - 5,000</td>
                        <td>&#8377; 9,000 - 13,000</td>
                        <td><strong>&#8377; 12,500 - 18,000</strong></td>
                        <td>48 - 60 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>1 BHK Complete Shifting</strong></td>
                        <td>&#8377; 4,500 - 7,000</td>
                        <td>&#8377; 11,000 - 16,000</td>
                        <td><strong>&#8377; 15,500 - 23,000</strong></td>
                        <td>48 - 72 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Residential Apartment</strong></td>
                        <td>&#8377; 6,500 - 10,000</td>
                        <td>&#8377; 16,000 - 24,000</td>
                        <td><strong>&#8377; 22,500 - 34,000</strong></td>
                        <td>48 - 72 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Independent Home</strong></td>
                        <td>&#8377; 9,000 - 14,000</td>
                        <td>&#8377; 22,000 - 32,000</td>
                        <td><strong>&#8377; 31,000 - 46,000</strong></td>
                        <td>60 - 72 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                        <td>&#8377; 1,200 - 1,800</td>
                        <td>&#8377; 4,500 - 6,500</td>
                        <td><strong>&#8377; 5,700 - 8,300</strong></td>
                        <td>3 - 4 Days</td>
                    </tr>
                    <tr>
                        <td><strong>Car Transport (Sedan / SUV)</strong></td>
                        <td>&#8377; 2,000 - 3,500</td>
                        <td>&#8377; 12,000 - 18,500</td>
                        <td><strong>&#8377; 14,000 - 22,000</strong></td>
                        <td>3 - 5 Days</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="text-align: center; color: #64748b; font-size: 0.92rem; margin-top: -10px;">
            * Rate estimates vary based on cubic volume of items, elevator availability, optional transit insurance, and seasonal freight conditions.
        </p>
    </div>
</section>

<!-- Visual Feature Strip: Vehicle Carrier -->
<section class="che2jam-section">
    <div class="container">
        <div class="che2jam-grid-2">
            <div>
                <span style="color: var(--che2jam-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Safe Vehicle Logistics</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--che2jam-dark); margin: 10px 0 20px;">
                    Enclosed Car Carrier &amp; Hydraulic Bike Relocation
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Driving 1,520 km between Chennai and Jamshedpur causes heavy tyre wear, high toll expenses, and physical exhaustion. Our specialized automobile carrier fleet provides a secure, zero-mileage transportation alternative.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    Every vehicle undergoes a thorough pre-dispatch inspection in Chennai documenting paint condition, odometer reading, and fuel levels:
                </p>
                <ul class="che2jam-checklist">
                    <li>Specialized wheel stops and hydraulic deck locks to prevent vehicle shift inside carrier trailers</li>
                    <li>Individual 3-layer bubble foam cushioning on motorcycle handles, headlamps, mirrors, and body panels</li>
                    <li>Full comprehensive vehicle transit risk insurance policy for absolute peace of mind</li>
                    <li>Door-to-door pickup in Chennai with direct offloading at your residence in Jamshedpur</li>
                </ul>
            </div>
            <div class="che2jam-img-wrap">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Chennai to Jamshedpur Enclosed Car Carrier Loading">
            </div>
        </div>
    </div>
</section>

<!-- Highway Logistics Section -->
<section class="che2jam-section che2jam-section-gray">
    <div class="container">
        <div class="che2jam-heading-center">
            <h2>Chennai to Jamshedpur Highway Logistics &amp; Travel Corridor</h2>
            <p>
                Systematic routing along the East Coast Corridor (NH-16) ensures punctual and safe transit.
            </p>
        </div>

        <div class="che2jam-grid-3">
            <div class="che2jam-card">
                <div class="che2jam-card-icon">&#128506;</div>
                <h3>Primary Route via NH-16 &amp; NH-20</h3>
                <p>
                    Departing Chennai via Tada, trucks join the 6-lane NH-16 traversing Nellore, Ongole, Vijayawada, Rajahmundry, Visakhapatnam, and Bhubaneswar, then branch onto NH-20 / NH-220 via Keonjhar entering Jamshedpur via Chaibasa. Total route spans 1,520 km.
                </p>
            </div>
            <div class="che2jam-card">
                <div class="che2jam-card-icon">&#128678;</div>
                <h3>Dual-Driver Highway Navigation</h3>
                <p>
                    For long-distance routes exceeding 1,000 km, we deploy experienced two-driver crews operating in rotating 6-hour shifts to ensure continuous transit progress without driver fatigue.
                </p>
            </div>
            <div class="che2jam-card">
                <div class="che2jam-card-icon">&#128667;</div>
                <h3>GPS-Monitored Sealed Trucks</h3>
                <p>
                    All containerized vehicles are fitted with satellite GPS systems. Real-time tracking updates are provided as the shipment passes major state checkposts in Tamil Nadu, Andhra Pradesh, Odisha, and Jharkhand.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Visual Feature Strip: Destination Setup -->
<section class="che2jam-section">
    <div class="container">
        <div class="che2jam-grid-2">
            <div class="che2jam-img-wrap">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and Setup Service Chennai to Jamshedpur">
            </div>
            <div>
                <span style="color: var(--che2jam-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Turnkey Destination Service</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--che2jam-dark); margin: 10px 0 20px;">
                    Careful Unloading, Furniture Assembly &amp; Debris Disposal
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Moving into your new home in Jamshedpur should feel refreshing and orderly. Our skilled local crew manages the heavy lifting, unloading each item directly into your designated rooms according to your layout preferences.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    We carefully place each box and unpack items with professional attentiveness:
                </p>
                <ul class="che2jam-checklist">
                    <li>Dismantling and reassembly of double beds, study tables, dining furniture, and wardrobe units</li>
                    <li>Careful placement of refrigerators, washing machines, and heavy home appliances</li>
                    <li>Unpacking and inspection of delicate electronics and crockery in your direct supervision</li>
                    <li>Collection and prompt disposal of used packing cardboard, bubbles, tapes, and stretch sheets</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Tata Group & Automotive Sector Relocation Specialization -->
<section class="che2jam-section che2jam-section-gray">
    <div class="container">
        <div class="che2jam-heading-center">
            <h2>Tata Group, Automobile &amp; Industrial Relocation Specialization</h2>
            <p>
                Tailored relocation workflows for engineering executives, Tata Group managers, and manufacturing personnel.
            </p>
        </div>

        <div class="che2jam-grid-3">
            <div class="che2jam-card">
                <div class="che2jam-card-icon">&#9874;</div>
                <h3>Chennai Auto Belt to Tata Motors &amp; Adityapur</h3>
                <p>
                    Automotive engineers and vendors relocating from the Oragadam / Sriperumbudur manufacturing hub in Chennai to Tata Motors and Adityapur auto-ancillary hub in Jamshedpur receive prompt corporate moving services with customized billing.
                </p>
            </div>
            <div class="che2jam-card">
                <div class="che2jam-card-icon">&#128646;</div>
                <h3>Tata Steel &amp; Corporate Re-allocations</h3>
                <p>
                    Connecting corporate offices in Chennai with Tata Steel headquarters and plants in Jamshedpur, we deliver end-to-end relocation management compliant with company HR policies.
                </p>
            </div>
            <div class="che2jam-card">
                <div class="che2jam-card-icon">&#127891;</div>
                <h3>IT Corridor to XLRI Academic Relocations</h3>
                <p>
                    We provide smooth household and book transfer services for researchers, faculty members, and management students moving from Chennai institutions to XLRI Jamshedpur.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Local Coverage Grid -->
<section class="che2jam-section">
    <div class="container">
        <div class="che2jam-heading-center">
            <h2>Full Pickup in Chennai &amp; Doorstep Delivery Across Jamshedpur</h2>
            <p>
                Our localized network spans every major neighborhood across Chennai and Jamshedpur.
            </p>
        </div>

        <div class="che2jam-grid-3">
            <div class="che2jam-card">
                <h3>Chennai Pickup Localities</h3>
                <p>
                    Fast doorstep inspection and packaging across all sectors of Chennai:
                </p>
                <ul class="che2jam-checklist">
                    <li><strong>IT &amp; Coastal Corridor:</strong> OMR, Thoraipakkam, Sholinganallur, ECR, Thiruvanmiyur</li>
                    <li><strong>Central &amp; South:</strong> T. Nagar, Adyar, Mylapore, Velachery, Alwarpet, Nungambakkam</li>
                    <li><strong>West &amp; North:</strong> Anna Nagar, Kilpauk, Mogappair, Porur, Vadapalani, Ambattur</li>
                    <li><strong>Suburban Zones:</strong> Tambaram, Chromepet, Guindy, Perambur, Avadi</li>
                </ul>
            </div>

            <div class="che2jam-card">
                <h3>Jamshedpur Delivery Coverage</h3>
                <p>
                    Unloading, placement, and setup across all Jamshedpur localities:
                </p>
                <ul class="che2jam-checklist">
                    <li><strong>Core Townships:</strong> Bistupur, Sakchi, Northern Town, Circuit House Area</li>
                    <li><strong>Tata Residential Colonies:</strong> Kadma, Sonari, Telco Colony, Golmuri, Baridih</li>
                    <li><strong>Industrial &amp; Developing Hubs:</strong> Adityapur (Phases 1-7), Gamharia, Jugsalai</li>
                    <li><strong>Suburban Extensions:</strong> Mango, Dimna Road, Pardih, Parsudih</li>
                </ul>
            </div>

            <div class="che2jam-card">
                <h3>Why Choose Shree Ashirwad?</h3>
                <p>
                    Trusted by hundreds of families and professionals moving across interstate corridors:
                </p>
                <ul class="che2jam-checklist">
                    <li>Dedicated company-owned closed container vehicles</li>
                    <li>Verified, trained in-house packing and handling crews</li>
                    <li>Authentic GST invoices for corporate and PSU reimbursements</li>
                    <li>48 to 72 hour fast transit with guaranteed delivery dates</li>
                    <li>Transparent pricing with zero hidden doorstep costs</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions -->
<section class="che2jam-section che2jam-section-gray">
    <div class="container">
        <div class="che2jam-heading-center">
            <h2>Frequently Asked Questions: Chennai to Jamshedpur Moving</h2>
            <p>
                Key details regarding pricing, highway transit, packing protection, and corporate claims.
            </p>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            <div class="che2jam-faq-item">
                <h3>What is the road distance and transit duration from Chennai to Jamshedpur?</h3>
                <p>
                    The road distance between Chennai and Jamshedpur is approximately 1,520 km via the NH-16 coastal corridor. Dedicated container trucks typically reach within 48 to 72 hours, while shared part-load consignments take 4 to 6 days.
                </p>
            </div>

            <div class="che2jam-faq-item">
                <h3>What are the shifting charges from Chennai to Jamshedpur?</h3>
                <p>
                    Estimated costs range from Rs 12,500 to Rs 21,000 for 1 BHK apartments, Rs 18,500 to Rs 30,000 for 2 BHK homes, and Rs 25,000 to Rs 42,000 for 3 BHK residences, covering 5-layer packing, container freight, toll charges, loading, and unloading.
                </p>
            </div>

            <div class="che2jam-faq-item">
                <h3>Do you provide claimable GST invoices for Tata Steel and corporate transfers?</h3>
                <p>
                    Yes, Shree Ashirwad Packers and Movers provides 100% authentic GST invoices, detailed item inventories, consignment notes (bilty), and IBA-approved receipts compliant with Tata Steel, Tata Motors, and corporate employee relocation policies.
                </p>
            </div>

            <div class="che2jam-faq-item">
                <h3>How are personal cars and motorcycles transported to Jamshedpur?</h3>
                <p>
                    Vehicles are safely transported in enclosed hydraulic car carrier trailers and custom wooden motorcycle crates with wheel chocks, security straps, and comprehensive transit risk insurance.
                </p>
            </div>

            <div class="che2jam-faq-item">
                <h3>Which areas in Chennai and Jamshedpur do you cover?</h3>
                <p>
                    In Chennai, we cover Anna Nagar, T. Nagar, Adyar, Velachery, OMR, Porur, Ambattur, and Guindy. In Jamshedpur, we deliver to Bistupur, Sakchi, Kadma, Sonari, Telco Colony, Golmuri, Baridih, and Adityapur.
                </p>
            </div>

            <div class="che2jam-faq-item">
                <h3>Is transit insurance available for Chennai to Jamshedpur moves?</h3>
                <p>
                    Yes, we provide comprehensive transit risk insurance covering unexpected highway accidents, external impacts, and adverse weather conditions with hassle-free claim settlement.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section style="background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%); color: #ffffff; padding: 65px 0; text-align: center;">
    <div class="container">
        <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; margin-bottom: 16px;">
            Book Your Chennai to Jamshedpur Move Today
        </h2>
        <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 720px; margin: 0 auto 30px;">
            Contact our relocation specialists for a detailed written quote, free pre-move assessment, and scheduled doorstep delivery.
        </p>
        <div style="display: flex; justify-content: center; gap: 18px; flex-wrap: wrap;">
            <a href="tel:+919835565233" style="background: #0284c7; color: #ffffff; font-weight: 700; padding: 14px 34px; border-radius: 10px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call Hotline: 084095 31615
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact-us" style="background: rgba(255,255,255,0.15); color: #ffffff; font-weight: 600; padding: 14px 28px; border-radius: 10px; text-decoration: none; border: 1px solid rgba(255,255,255,0.3);">
                Request Express Quote &rarr;
            </a>
        </div>
    </div>
</section>

<!-- Connected Shifting Resources Module -->
<section class="che2jam-section" style="padding: 40px 0; background: #f8fafc;">
    <div class="container">
        <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 30px; box-shadow: var(--che2jam-shadow);">
            <h3 style="font-family: 'Outfit', sans-serif; font-size: 1.35rem; font-weight: 700; color: #0f172a; margin-top: 0; margin-bottom: 12px;">Connected Interstate Moving Corridors &amp; Authority Hubs</h3>
            <p style="color: #64748b; font-size: 0.96rem; margin-bottom: 20px;">Explore verified relocation routes, tariff calculators, and reciprocal return corridors:</p>
            <ul style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 14px; padding-left: 0; list-style: none; margin: 0;">
                <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi" style="color: #0284c7; text-decoration: none; font-weight: 600;">&#8594; Packers and Movers in Ranchi (HQ)</a></li>
                <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-jamshedpur" style="color: #0284c7; text-decoration: none; font-weight: 600;">&#8594; Packers and Movers in Jamshedpur</a></li>
                <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" style="color: #0284c7; text-decoration: none; font-weight: 600;">&#8594; Live Shifting Charges &amp; Tariff Calculator</a></li>
                <li><a href="<?php echo SITE_BASE_URL; ?>/jamshedpur-to-chennai-packers-and-movers" style="color: #0284c7; text-decoration: none; font-weight: 600;">&#8594; Return Route: Jamshedpur to Chennai</a></li>
            </ul>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>