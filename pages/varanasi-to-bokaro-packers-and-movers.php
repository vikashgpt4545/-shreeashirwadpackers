<?php
/**
 * Page Name: Varanasi to Bokaro Packers and Movers
 * Route Slug: varanasi-to-bokaro-packers-and-movers
 * Description: Dependable interstate household shifting, corporate office relocation, car carrier, and commercial moving services from Varanasi to Bokaro.
 * Focus Keywords: varanasi to bokaro packers and movers, packers and movers varanasi to bokaro, house shifting varanasi to bokaro, car carrier varanasi to bokaro, bike transport varanasi to bokaro, household moving varanasi bokaro
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/includes/config.php';
}

$page_title = "Varanasi to Bokaro Packers and Movers | Reliable Shifting Services";
$page_desc = "Safe Varanasi to Bokaro packers and movers. 470 km direct transit via NH-19 & NH-44 Grand Trunk Corridor, 5-layer packing, corporate transfer bills, car carrier. Call 9835565233.";
$canonical_url = "https://www.shreeashirwadpackers.com/varanasi-to-bokaro-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="varanasi to bokaro packers and movers, packers and movers varanasi to bokaro, house shifting varanasi to bokaro, car carrier varanasi to bokaro, bike transport varanasi to bokaro, household moving varanasi bokaro">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-UP">
    <meta name="geo.placename" content="Varanasi">

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

    <!-- Scoped CSS for Varanasi to Bokaro -->
    <style>
        :root {
            --c_var_bok-primary: #1e3a8a;
            --c_var_bok-secondary: #0284c7;
            --c_var_bok-accent: #0284c7;
            --c_var_bok-accent-light: #e0f2fe;
            --c_var_bok-dark: #0f172a;
            --c_var_bok-gray-bg: #f8fafc;
            --c_var_bok-border: #e2e8f0;
            --c_var_bok-shadow: 0 10px 25px -5px rgba(30, 58, 138, 0.08), 0 8px 10px -6px rgba(30, 58, 138, 0.04);
        }

        .c_var_bok-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 58, 138, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .c_var_bok-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .c_var_bok-hero p.lead {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #e2e8f0;
            max-width: 820px;
            margin-bottom: 28px;
        }

        .c_var_bok-badge-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 30px;
        }

        .c_var_bok-badge {
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

        .c_var_bok-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .c_var_bok-btn-primary {
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

        .c_var_bok-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(2, 132, 199, 0.45);
            color: #ffffff;
        }

        .c_var_bok-btn-secondary {
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

        .c_var_bok-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            color: #ffffff;
        }

        .c_var_bok-section {
            padding: 70px 0;
        }

        .c_var_bok-section-gray {
            background-color: var(--c_var_bok-gray-bg);
        }

        .c_var_bok-heading-center {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }

        .c_var_bok-heading-center h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--c_var_bok-dark);
            margin-bottom: 14px;
        }

        .c_var_bok-heading-center p {
            font-size: 1.05rem;
            color: #64748b;
            line-height: 1.65;
        }

        .c_var_bok-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .c_var_bok-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 36px;
            align-items: center;
        }

        .c_var_bok-card {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--c_var_bok-border);
            padding: 30px;
            box-shadow: var(--c_var_bok-shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .c_var_bok-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px -5px rgba(30, 58, 138, 0.12);
        }

        .c_var_bok-card-icon {
            width: 54px;
            height: 54px;
            border-radius: 12px;
            background: var(--c_var_bok-accent-light);
            color: var(--c_var_bok-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .c_var_bok-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--c_var_bok-dark);
            margin-bottom: 12px;
        }

        .c_var_bok-card p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
        }

        .c_var_bok-table-container {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--c_var_bok-border);
            overflow-x: auto;
            box-shadow: var(--c_var_bok-shadow);
            margin: 35px 0;
        }

        .c_var_bok-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .c_var_bok-table th {
            background: #0f172a;
            color: #ffffff;
            font-weight: 700;
            padding: 16px 20px;
            font-size: 0.98rem;
        }

        .c_var_bok-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--c_var_bok-border);
            color: #334155;
            font-size: 0.95rem;
        }

        .c_var_bok-table tr:last-child td {
            border-bottom: none;
        }

        .c_var_bok-table tr:hover td {
            background-color: #f1f5f9;
        }

        .c_var_bok-checklist {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .c_var_bok-checklist li {
            position: relative;
            padding-left: 28px;
            margin-bottom: 12px;
            color: #334155;
            font-size: 0.98rem;
            line-height: 1.6;
        }

        .c_var_bok-checklist li::before {
            content: "\2713";
            position: absolute;
            left: 0;
            top: 0;
            color: #10b981;
            font-weight: 800;
            font-size: 1.1rem;
        }

        .c_var_bok-img-wrap {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: var(--c_var_bok-shadow);
        }

        .c_var_bok-img-wrap img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.4s ease;
        }

        .c_var_bok-img-wrap:hover img {
            transform: scale(1.03);
        }

        .c_var_bok-faq-item {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--c_var_bok-border);
            padding: 24px;
            margin-bottom: 16px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        .c_var_bok-faq-item h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--c_var_bok-dark);
            margin-bottom: 10px;
        }

        .c_var_bok-faq-item p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
            margin: 0;
        }

        @media (max-width: 991px) {
            .c_var_bok-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
            .c_var_bok-grid-2 {
                grid-template-columns: 1fr;
            }
            .c_var_bok-hero h1 {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 640px) {
            .c_var_bok-grid-3 {
                grid-template-columns: 1fr;
            }
            .c_var_bok-hero {
                padding: 60px 0 45px;
            }
            .c_var_bok-hero h1 {
                font-size: 1.85rem;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Varanasi to Bokaro",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "<?php echo $canonical_url; ?>#company",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+919835565233",
        "priceRange": "INR 9,500 - 45,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Godowlia Main Road",
            "addressLocality": "Varanasi",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "221001",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 25.3176,
            "longitude": 82.9739
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Varanasi"
            },
            {
                "@type": "City",
                "name": "Bokaro"
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
            "name": "Bokaro, Jharkhand"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Varanasi to Bokaro Moving Packages",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Varanasi to Bokaro Household Shifting"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Varanasi to Bokaro Car Carrier & Bike Transport"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Corporate & Industrial Relocation Billing"
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
                "name": "Varanasi to Bokaro Shifting",
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
                "name": "What is the road distance and transit duration from Varanasi to Bokaro?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Varanasi and Bokaro is approximately 470 km via NH-19 & NH-44 Grand Trunk Corridor. Dedicated closed container trucks typically complete this transit in 10 - 14 hours."
                }
            },
            {
                "@type": "Question",
                "name": "What are the shifting charges from Varanasi to Bokaro?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Estimated costs range from Rs 10,300 - 14,935 for 1 BHK apartments, Rs 15,000 - 21,750 for 2 BHK homes, and Rs 21,500 - 31,175 for 3 BHK residences, covering 5-layer packing, container freight, tolls, and doorstep unloading."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide claimable GST invoices for corporate and government transfers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Shree Ashirwad Packers and Movers provides 100% authentic GST invoices, detailed itemized inventories, consignment notes (bilty), and IBA-compliant receipts recognized across corporate, public sector, and defense organizations."
                }
            },
            {
                "@type": "Question",
                "name": "How are cars and motorcycles transported from Varanasi to Bokaro?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Vehicles are safely transported in enclosed hydraulic car carrier trailers and custom wooden motorcycle crates with wheel chocks, security harness straps, and comprehensive transit insurance."
                }
            },
            {
                "@type": "Question",
                "name": "Which areas in Varanasi and Bokaro do you cover?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "In Varanasi, we cover Godowlia, Dashashwamedh, Chowk, Assi Ghat, Sigra and Varanasi Cantt, Orderly Bazar, Nadesar, Mall Road. In Bokaro, we deliver across Sector 1, Sector 2, Sector 3, Sector 4 (City Centre), Sector 5 and Sector 6, Sector 8, Sector 9, Sector 11, Sector 12."
                }
            },
            {
                "@type": "Question",
                "name": "Is transit insurance available for Varanasi to Bokaro moves?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide comprehensive transit risk insurance covering unexpected highway accidents, external impacts, and adverse weather conditions with hassle-free claim settlement."
                }
            }
        ]
    }
    </script>
  <style>
    /* Responsive Image Containment & Mobile Safeguard - Compact & Balanced */
    .corridor-img-container, [class*="-feature-img"], [class*="-img-box"], [class*="img-showcase"], [class*="-img-card"], .c_var_bok-img-wrap {
      max-width: 440px !important;
      width: 100% !important;
      margin: 18px auto !important;
      overflow: hidden !important;
      border-radius: 12px !important;
      text-align: center !important;
    }

    .corridor-img-container img, [class*="-feature-img"] img, [class*="-img-box"] img, [class*="img-showcase"] img, [class*="-img-card"] img, .c_var_bok-img-wrap img {
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
      .corridor-img-container, [class*="-feature-img"], [class*="-img-box"], [class*="img-showcase"], [class*="-img-card"], .c_var_bok-img-wrap {
        max-width: 320px !important;
        margin: 14px auto !important;
      }
      .corridor-img-container img, [class*="-feature-img"] img, [class*="-img-box"] img, [class*="img-showcase"] img, [class*="-img-card"] img, .c_var_bok-img-wrap img {
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
<section class="c_var_bok-hero">
    <div class="container">
        <div class="c_var_bok-badge-strip">
            <span class="c_var_bok-badge">&#9733; 470 KM Express Interstate Corridor</span>
            <span class="c_var_bok-badge">&#128666; Sealed All-Weather Closed Containers</span>
            <span class="c_var_bok-badge">&#128196; Corporate &amp; PSU Claim Invoices</span>
            <span class="c_var_bok-badge">&#128338; Fast 10 - 14 Hour Transit Delivery</span>
        </div>
        <h1>Packers and Movers from Varanasi to Bokaro</h1>
        <p class="lead">
            Dependable, insured, and professional household shifting, vehicle transport, and corporate relocation services connecting Varanasi to Bokaro. Experience 5-layer protective packaging, dedicated closed container trucks, and seamless doorstep delivery.
        </p>
        <div class="c_var_bok-cta-group">
            <a href="tel:+919835565233" class="c_var_bok-btn-primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call Hotline: 084095 31615
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact-us" class="c_var_bok-btn-secondary">
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
                Packers and Movers from Varanasi to Bokaro
            </h3>
            <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 12px;">
                Looking for the <strong>best packers and movers from Varanasi to Bokaro</strong>? Shree Ashirwad Packers and Movers provides trusted <strong>household shifting</strong>, commercial <strong>office relocation</strong>, specialized <strong>bike transport</strong>, secure <strong>car transport</strong>, and complete moving solutions at affordable prices.
            </p>
            <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 12px;">
                Our experienced team offers safe packing, loading, unloading, direct transit transportation, and unpacking services across Varanasi and Bokaro with timely delivery support.
            </p>
            <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 12px;">
                As one of the <strong>top-rated packers and movers near Varanasi</strong>, we help families, military personnel, corporate executives, and businesses relocate locally and across Jharkhand and India without hassle.
            </p>
            <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 12px;">
                We cover major localities in Varanasi and Bokaro along with nearby residential colonies, commercial centers, and industrial areas for fast and reliable shifting services.
            </p>
            <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 12px;">
                Whether you need <strong>local shifting in Varanasi</strong>, intercity relocation to Bokaro, <strong>office moving</strong>, luggage transport, or vehicle transportation, our trained staff ensures secure handling and professional support.
            </p>
            <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 12px;">
                Customers choose our <strong>movers and packers service from Varanasi to Bokaro</strong> for transparent pricing, careful goods handling, quick booking assistance, and dependable relocation planning.
            </p>
            <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 12px;">
                We also provide <strong>nearby packers and movers</strong> support with <strong>pincode-based scheduling</strong>, <strong>same-day shifting assistance</strong>, <strong>floor-to-floor handling</strong>, and flexible moving options.
            </p>
            <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 12px;">
                From small apartments (1 BHK, 2 BHK, 3 BHK) to large bungalows and corporate setups, our <strong>packing and moving company from Varanasi to Bokaro</strong> delivers affordable, safe, and stress-free relocation services.
            </p>
            <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 12px;">
                If you are searching for reliable <strong>movers and packers near me from Varanasi to Bokaro</strong>, our local team is available 24/7 for <strong>home shifting</strong>, storage, transport, and complete relocation assistance.
            </p>
            <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 0;">
                Our <strong>professional packers and movers service from Varanasi to Bokaro</strong> is designed for safe household shifting, commercial relocation, <strong>furniture moving</strong>, and <strong>long-distance transportation</strong> at verified <strong>cheap and affordable packers and movers charges from Varanasi to Bokaro</strong>. Call <strong><a href="tel:+919835565233" style="color: #0d47a1; font-weight: 700; text-decoration: none;">+91 9835565233</a></strong> for an instant quotation.
            </p>
        </div>
    </div>
</section>

<!-- Route Overview Section -->
<section class="c_var_bok-section">
    <div class="container">
        <div class="c_var_bok-grid-2">
            <div>
                <span style="color: var(--c_var_bok-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Connecting Varanasi with Bokaro</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--c_var_bok-dark); margin: 10px 0 20px;">
                    Express 470 KM Interstate Moving from Varanasi to Bokaro
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Relocating between Varanasi and Bokaro connects Uttar Pradesh&rsquo;s commercial centers with Jharkhand&rsquo;s premier industrial and administrative hubs. Direct highway transit along NH-19 & NH-44 Grand Trunk Corridor connecting Varanasi across Uttar Pradesh with Bokaro in Jharkhand, traversing monitored toll checkpoints.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    At <strong>Shree Ashirwad Packers and Movers</strong>, we execute this high-demand transit route with exceptional reliability. Our dedicated closed container vehicles operate on scheduled departures from Varanasi, navigating directly along national highway corridors to deliver your household possessions safely in Bokaro within 10 - 14 hours.
                </p>
                <ul class="c_var_bok-checklist">
                    <li>Doorstep pickup across all Varanasi neighborhoods with specialized packing crews</li>
                    <li>Advanced 5-layer protective packaging safeguarding furniture, glassware, and electronics</li>
                    <li>Direct container transit via NH-19 & NH-44 Grand Trunk Corridor with guaranteed delivery schedules</li>
                    <li>Complete room setup, furniture reassembly, and packaging debris collection in Bokaro</li>
                </ul>
            </div>
            <div class="c_var_bok-img-wrap">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Varanasi to Bokaro Container Truck Relocation">
            </div>
        </div>
    </div>
</section>

<!-- Core Shifting Services Grid -->
<section class="c_var_bok-section c_var_bok-section-gray">
    <div class="container">
        <div class="c_var_bok-heading-center">
            <h2>Comprehensive Shifting Services: Varanasi to Bokaro</h2>
            <p>
                Engineered for corporate executives, public sector employees, industrial managers, and residential families.
            </p>
        </div>

        <div class="c_var_bok-grid-3">
            <div class="c_var_bok-card">
                <div class="c_var_bok-card-icon">&#127968;</div>
                <h3>Complete Home Relocation</h3>
                <p>
                    Full packing of furniture, appliances, crockery, wardrobes, and electronics using heavy-gauge cartons and multi-ply bubble wrap. Safely delivered to your new residence in Bokaro.
                </p>
            </div>
            <div class="c_var_bok-card">
                <div class="c_var_bok-card-icon">&#128663;</div>
                <h3>Enclosed Car Transport</h3>
                <p>
                    Enclosed car trailers designed to transfer hatchbacks, sedans, and SUVs from Varanasi to Bokaro safely without adding highway miles or risking gravel chips.
                </p>
            </div>
            <div class="c_var_bok-card">
                <div class="c_var_bok-card-icon">&#127949;</div>
                <h3>Two-Wheeler Bike Shipping</h3>
                <p>
                    Specialized motorcycle transit utilizing multi-layer bubble wrap, handle padding, wheel chocks, and nylon harness belts to guarantee scratch-free delivery.
                </p>
            </div>
            <div class="c_var_bok-card">
                <div class="c_var_bok-card-icon">&#128188;</div>
                <h3>Corporate &amp; PSU Billing</h3>
                <p>
                    100% authentic GST invoices, detailed item inventories, consignment notes (bilty), and IBA-approved documentation compliant with corporate and government reimbursement policies.
                </p>
            </div>
            <div class="c_var_bok-card">
                <div class="c_var_bok-card-icon">&#128230;</div>
                <h3>Part Load &amp; Single Room Moves</h3>
                <p>
                    Affordable sharing and single-room relocation options for students and working professionals relocating with minimal luggage along this corridor.
                </p>
            </div>
            <div class="c_var_bok-card">
                <div class="c_var_bok-card-icon">&#128737;</div>
                <h3>Transit Risk Insurance</h3>
                <p>
                    Comprehensive optional transit insurance policy covering accidental damages, road perils, and external impacts with transparent claim settlement support.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Visual Feature Strip: Packaging Standards -->
<section class="c_var_bok-section">
    <div class="container">
        <div class="c_var_bok-grid-2">
            <div class="c_var_bok-img-wrap">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="5-Layer Protective Packing Varanasi to Bokaro">
            </div>
            <div>
                <span style="color: var(--c_var_bok-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Engineered Defensive Packaging</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--c_var_bok-dark); margin: 10px 0 20px;">
                    Five-Layer Protective Packaging for NH-19 & NH-44 Grand Trunk Corridor Highway Transit
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    The 470 km highway route across NH-19 & NH-44 Grand Trunk Corridor features varied highway speeds and road conditions. Flawless packaging is essential to absorb mechanical vibration and protect delicate finishes against abrasions.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    Our certified packing team enforces rigorous material standards:
                </p>
                <ul class="c_var_bok-checklist">
                    <li><strong>Cling Film Barrier:</strong> Non-static stretch wrap shielding wood finishes, leather upholstery, and fabrics against dirt and humidity.</li>
                    <li><strong>Bubble Cushioning:</strong> Multi-ply air bubble sheets wrapped tightly around LED screens, audio equipment, and kitchen electronics.</li>
                    <li><strong>Edge Reinforcement:</strong> Heavy corrugated corner pads preventing abrasions and chipping on polished dining tables and wardrobe doors.</li>
                    <li><strong>7-Ply Master Cartons:</strong> Heavy-duty corrugated boxes designed to bear stack weight during transport without buckling.</li>
                    <li><strong>Color-Coded Labeling:</strong> Clear identification tags on every box specifying room allocation and handling cautions.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Shifting Rates Table -->
<section class="c_var_bok-section c_var_bok-section-gray">
    <div class="container">
        <div class="c_var_bok-heading-center">
            <h2>Varanasi to Bokaro Moving Rates &amp; Price Estimates</h2>
            <p>
                Upfront, transparent quotes without hidden fuel surcharges or last-minute loading fees.
            </p>
        </div>

        <div class="c_var_bok-table-container">
            <table class="c_var_bok-table">
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
                        <td>&#8377; 2,500 - 3,750</td>
                        <td>&#8377; 4,500 - 6,525</td>
                        <td><strong>&#8377; 7,000 - 10,150</strong></td>
                        <td>10 - 14 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>1 BHK Complete Home</strong></td>
                        <td>&#8377; 3,800 - 5,890</td>
                        <td>&#8377; 6,500 - 9,425</td>
                        <td><strong>&#8377; 10,300 - 14,935</strong></td>
                        <td>10 - 14 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Residential Flat</strong></td>
                        <td>&#8377; 5,500 - 8,800</td>
                        <td>&#8377; 9,500 - 13,775</td>
                        <td><strong>&#8377; 15,000 - 21,750</strong></td>
                        <td>10 - 14 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Independent Home</strong></td>
                        <td>&#8377; 8,000 - 12,800</td>
                        <td>&#8377; 13,500 - 19,575</td>
                        <td><strong>&#8377; 21,500 - 31,175</strong></td>
                        <td>10 - 14 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                        <td>&#8377; 900 - 1,500</td>
                        <td>&#8377; 2,500 - 4,000</td>
                        <td><strong>&#8377; 3,400 - 5,500</strong></td>
                        <td>2 - 4 Days</td>
                    </tr>
                    <tr>
                        <td><strong>Car Transport (Sedan / SUV)</strong></td>
                        <td>&#8377; 1,500 - 2,800</td>
                        <td>&#8377; 7,500 - 12,000</td>
                        <td><strong>&#8377; 9,000 - 14,800</strong></td>
                        <td>2 - 4 Days</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="text-align: center; color: #64748b; font-size: 0.92rem; margin-top: -10px;">
            * Estimates reflect standard moving scopes. Final quotes depend on exact item count, floor levels, elevator access, and optional insurance choice.
        </p>
    </div>
</section>

<!-- Visual Feature Strip: Vehicle Carrier -->
<section class="c_var_bok-section">
    <div class="container">
        <div class="c_var_bok-grid-2">
            <div>
                <span style="color: var(--c_var_bok-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Secure Automobile Transit</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--c_var_bok-dark); margin: 10px 0 20px;">
                    Enclosed Car Carrier &amp; Safe Bike Transportation
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Avoid heavy highway traffic, toll queues, and unnecessary vehicle depreciation across the 470 km journey by utilizing our closed car and bike transit solutions between Varanasi and Bokaro.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    Each vehicle undergoes an inspection audit prior to dispatch from Varanasi, documenting body panels, existing paint status, and fuel levels:
                </p>
                <ul class="c_var_bok-checklist">
                    <li>Specialized wheel stops and hydraulic deck locks to prevent vehicle movement inside carriers</li>
                    <li>Individual foam cushioning on motorcycle handles, headlamps, mirrors, and exhaust pipes</li>
                    <li>Comprehensive vehicle transit insurance for total financial peace of mind</li>
                    <li>Prompt collection in Varanasi and direct delivery to your doorstep in Bokaro</li>
                </ul>
            </div>
            <div class="c_var_bok-img-wrap">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Varanasi to Bokaro Vehicle Transport Carrier">
            </div>
        </div>
    </div>
</section>

<!-- Highway Logistics Section -->
<section class="c_var_bok-section c_var_bok-section-gray">
    <div class="container">
        <div class="c_var_bok-heading-center">
            <h2>Varanasi to Bokaro Highway Logistics &amp; Travel Corridor</h2>
            <p>
                Proven highway routing along NH-19 & NH-44 Grand Trunk Corridor guarantees punctual, monitored transit across states.
            </p>
        </div>

        <div class="c_var_bok-grid-3">
            <div class="c_var_bok-card">
                <div class="c_var_bok-card-icon">&#128506;</div>
                <h3>Primary Route via NH-19 & NH-44 Grand Trunk Corridor</h3>
                <p>
                    Direct highway transit along NH-19 & NH-44 Grand Trunk Corridor connecting Varanasi across Uttar Pradesh with Bokaro in Jharkhand, traversing monitored toll checkpoints. Total highway distance is approximately 470 km traversed in 10 - 14 hours with scheduled transit stops.
                </p>
            </div>
            <div class="c_var_bok-card">
                <div class="c_var_bok-card-icon">&#128678;</div>
                <h3>Dual-Driver Crews &amp; Transit Schedules</h3>
                <p>
                    For long highway corridors, our operations team deploys experienced two-driver crews operating in rotating shifts to maintain continuous transit without driver fatigue.
                </p>
            </div>
            <div class="c_var_bok-card">
                <div class="c_var_bok-card-icon">&#128667;</div>
                <h3>GPS-Monitored Closed Containers</h3>
                <p>
                    All containerized trucks feature real-time satellite GPS tracking. Our customer support desk provides updates at major highway toll checkpoints along the route.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Visual Feature Strip: Destination Setup -->
<section class="c_var_bok-section">
    <div class="container">
        <div class="c_var_bok-grid-2">
            <div class="c_var_bok-img-wrap">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and Setup Service Varanasi to Bokaro">
            </div>
            <div>
                <span style="color: var(--c_var_bok-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Turnkey Destination Service</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--c_var_bok-dark); margin: 10px 0 20px;">
                    Careful Unloading, Furniture Assembly &amp; Debris Disposal
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    A truly satisfying relocation experience means waking up in a clean, fully functional home in Bokaro. Our skilled destination crew unloads every piece of furniture, reassembles dismounted frames, and handles all heavy lifting.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    We carefully place each box into its designated room based on your guidance:
                </p>
                <ul class="c_var_bok-checklist">
                    <li>Assembly of wooden beds, wardrobes, study tables, and dining furniture</li>
                    <li>Placement of refrigerators, washing machines, and heavy home appliances</li>
                    <li>Inspection of all glassware and fragile items in your presence</li>
                    <li>Collection and disposal of used packing cardboard, plastics, and tapes</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Corporate & Industrial Relocation Protocol -->
<section class="c_var_bok-section c_var_bok-section-gray">
    <div class="container">
        <div class="c_var_bok-heading-center">
            <h2>Corporate, Industrial &amp; PSU Relocation Specialization</h2>
            <p>
                Tailored moving procedures for corporate managers, government officials, and banking professionals.
            </p>
        </div>

        <div class="c_var_bok-grid-3">
            <div class="c_var_bok-card">
                <div class="c_var_bok-card-icon">&#9874;</div>
                <h3>Industrial Belt &amp; Manufacturing Moves</h3>
                <p>
                    Connecting Banaras Locomotive Works (BLW), Banarasi silk weaving, handicrafts, tourism, and Banaras Hindu University (BHU) with SAIL Bokaro Steel Plant, Electrosteel (Vedanta), Dalmia Cement, and ONGC Coal Bed Methane projects, we manage executive and technician relocations with end-to-end documentation.
                </p>
            </div>
            <div class="c_var_bok-card">
                <div class="c_var_bok-card-icon">&#128646;</div>
                <h3>Corporate &amp; Public Sector Transfers</h3>
                <p>
                    Managing employee relocations, executive transfers, and industrial supply chain support between Varanasi and Bokaro. We provide itemized packing lists, consignment notes, and GST invoices fully compliant with company claim policies.
                </p>
            </div>
            <div class="c_var_bok-card">
                <div class="c_var_bok-card-icon">&#127891;</div>
                <h3>Academic &amp; Institutional Moves</h3>
                <p>
                    We provide smooth household and library relocation services for professors, researchers, and students transferring between universities and institutions in Varanasi and Bokaro.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Local Coverage Grid -->
<section class="c_var_bok-section">
    <div class="container">
        <div class="c_var_bok-heading-center">
            <h2>Full Pickup in Varanasi &amp; Doorstep Delivery Across Bokaro</h2>
            <p>
                Our comprehensive moving operations extend across every neighborhood in Varanasi and Bokaro.
            </p>
        </div>

        <div class="c_var_bok-grid-3">
            <div class="c_var_bok-card">
                <h3>Varanasi Pickup Localities</h3>
                <p>
                    Prompt doorstep survey and packaging across all sectors of Varanasi:
                </p>
                <ul class="c_var_bok-checklist">
                    <li><strong>Ghats & Heritage:</strong> Godowlia, Dashashwamedh, Chowk, Assi Ghat, Sigra</li>
                    <li><strong>Cantt & Civil Lines:</strong> Varanasi Cantt, Orderly Bazar, Nadesar, Mall Road</li>
                    <li><strong>Institutional & Academic:</strong> BHU Campus, Lanka, Durgakund, Sunderpur</li>
                    <li><strong>Industrial & DLW:</strong> Banaras Locomotive Works (BLW), Shivpur, Ramnagar Industrial Area</li>
                </ul>
            </div>

            <div class="c_var_bok-card">
                <h3>Bokaro Delivery Coverage</h3>
                <p>
                    Unloading, room placement, and setup across all Bokaro neighborhoods:
                </p>
                <ul class="c_var_bok-checklist">
                    <li><strong>Township Sectors:</strong> Sector 1, Sector 2, Sector 3, Sector 4 (City Centre), Sector 5</li>
                    <li><strong>Outer Sectors:</strong> Sector 6, Sector 8, Sector 9, Sector 11, Sector 12</li>
                    <li><strong>Commercial & Chas:</strong> Chas Main Road, Bye Pass Road, ITI More, Dharamshala Chowk</li>
                    <li><strong>Industrial & Suburbs:</strong> Cooperative Colony, Balidih Industrial Area, Kurmidih, Bokaro Thermal</li>
                </ul>
            </div>

            <div class="c_var_bok-card">
                <h3>Why Choose Shree Ashirwad?</h3>
                <p>
                    Trusted by hundreds of families and businesses moving across India:
                </p>
                <ul class="c_var_bok-checklist">
                    <li>Company-owned weatherproof container vehicles</li>
                    <li>Experienced, background-verified full-time crew</li>
                    <li>Genuine GST invoices for government and PSU transfer claims</li>
                    <li>Fast 10 - 14-hour highway transit with scheduled doorstep delivery</li>
                    <li>Transparent pricing with zero hidden surcharges</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions -->
<section class="c_var_bok-section c_var_bok-section-gray">
    <div class="container">
        <div class="c_var_bok-heading-center">
            <h2>Frequently Asked Questions: Varanasi to Bokaro Shifting</h2>
            <p>
                Essential information on pricing, transit times, packing materials, and claim documentation.
            </p>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            <div class="c_var_bok-faq-item">
                <h3>What is the road distance and transit duration from Varanasi to Bokaro?</h3>
                <p>
                    The highway distance between Varanasi and Bokaro is approximately 470 km via NH-19 & NH-44 Grand Trunk Corridor. Dedicated container trucks complete this journey in 10 - 14 hours with scheduled doorstep delivery.
                </p>
            </div>

            <div class="c_var_bok-faq-item">
                <h3>What are the shifting charges from Varanasi to Bokaro?</h3>
                <p>
                    Estimated costs range from Rs 10,300 - 14,935 for 1 BHK apartments, Rs 15,000 - 21,750 for 2 BHK homes, and Rs 21,500 - 31,175 for 3 BHK residences, covering 5-layer packing, container freight, toll charges, loading, and unloading.
                </p>
            </div>

            <div class="c_var_bok-faq-item">
                <h3>Do you provide claimable GST invoices for corporate and government transfers?</h3>
                <p>
                    Yes, Shree Ashirwad Packers and Movers provides 100% authentic GST invoices, detailed item inventories, consignment notes (bilty), and IBA-approved receipts compliant with corporate and government reimbursement policies.
                </p>
            </div>

            <div class="c_var_bok-faq-item">
                <h3>How are personal cars and motorcycles transported to Bokaro?</h3>
                <p>
                    Vehicles are safely transported in enclosed hydraulic car carrier trailers and custom wooden motorcycle crates with wheel chocks, security straps, and comprehensive transit risk insurance.
                </p>
            </div>

            <div class="c_var_bok-faq-item">
                <h3>Which areas in Varanasi and Bokaro do you cover?</h3>
                <p>
                    In Varanasi, we cover Godowlia, Dashashwamedh, Chowk, Assi Ghat, Sigra and Varanasi Cantt, Orderly Bazar, Nadesar, Mall Road. In Bokaro, we deliver across Sector 1, Sector 2, Sector 3, Sector 4 (City Centre), Sector 5 and Sector 6, Sector 8, Sector 9, Sector 11, Sector 12.
                </p>
            </div>

            <div class="c_var_bok-faq-item">
                <h3>Is transit insurance available for Varanasi to Bokaro moves?</h3>
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
            Book Your Varanasi to Bokaro Move Today
        </h2>
        <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 720px; margin: 0 auto 30px;">
            Contact our moving experts for an accurate written estimate, complimentary pre-move assessment, and scheduled delivery.
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
<section class="c_var_bok-section" style="padding: 40px 0; background: #f8fafc;">
    <div class="container">
        <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 30px; box-shadow: var(--c_var_bok-shadow);">
            <h3 style="font-family: 'Outfit', sans-serif; font-size: 1.35rem; font-weight: 700; color: #0f172a; margin-top: 0; margin-bottom: 12px;">Connected Interstate Moving Corridors &amp; Authority Hubs</h3>
            <p style="color: #64748b; font-size: 0.96rem; margin-bottom: 20px;">Explore verified relocation routes, tariff calculators, and reciprocal return corridors:</p>
            <ul style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 14px; padding-left: 0; list-style: none; margin: 0;">
                <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi" style="color: #0284c7; text-decoration: none; font-weight: 600;">&#8594; Packers and Movers in Ranchi (HQ)</a></li>
                <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bokaro" style="color: #0284c7; text-decoration: none; font-weight: 600;">&#8594; Packers and Movers in Bokaro</a></li>
                <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" style="color: #0284c7; text-decoration: none; font-weight: 600;">&#8594; Live Shifting Charges &amp; Tariff Calculator</a></li>
                <li><a href="<?php echo SITE_BASE_URL; ?>/bokaro-to-varanasi-packers-and-movers" style="color: #0284c7; text-decoration: none; font-weight: 600;">&#8594; Return Route: Bokaro to Varanasi</a></li>
            </ul>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>