<?php
/**
 * Page Name: Dumka to Bangalore Packers and Movers
 * Route Slug: dumka-to-bangalore-packers-and-movers
 * Description: Reliable pan-India intercity relocation, household goods shifting, car carrier shipping, and bike transport from Dumka to Bangalore (Bengaluru) via NH-16 / NH-44.
 * Focus Keywords: dumka to bangalore packers and movers, packers and movers dumka to bangalore, house shifting dumka to bangalore, car transport dumka to bangalore, bike parcel dumka to bangalore, goods transport dumka to bengaluru
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Dumka to Bangalore Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Top-rated Dumka to Bangalore packers and movers. 1,850 km transit, 5-layer safety packaging, dedicated container trucks, car & bike shipping. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/dumka-to-bangalore-packers-and-movers";
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
    <meta name="geo.placename" content="Dumka">

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

    <!-- Scoped CSS for Route 12 (Dumka to Bangalore) -->
    <style>
        :root {
            --dum2blr-primary: #1e3a5f;
            --dum2blr-secondary: #0284c7;
            --dum2blr-accent: #f59e0b;
            --dum2blr-accent-light: #fef3c7;
            --dum2blr-dark: #0f172a;
            --dum2blr-gray-bg: #f8fafc;
            --dum2blr-card-border: #e2e8f0;
            --dum2blr-text: #334155;
            --dum2blr-text-muted: #64748b;
            --dum2blr-radius: 12px;
            --dum2blr-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
            --dum2blr-shadow-hover: 0 20px 30px -10px rgba(2, 132, 199, 0.18);
        }

        .dum2blr-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.92) 0%, rgba(30, 58, 95, 0.88) 100%), url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 70px 20px 65px;
            position: relative;
        }

        .dum2blr-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .dum2blr-breadcrumbs {
            font-size: 0.9rem;
            color: #cbd5e1;
            margin-bottom: 20px;
        }

        .dum2blr-breadcrumbs a {
            color: var(--dum2blr-accent);
            text-decoration: none;
        }

        .dum2blr-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(245, 158, 11, 0.18);
            border: 1px solid rgba(245, 158, 11, 0.5);
            color: var(--dum2blr-accent);
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 0.88rem;
            font-weight: 600;
            margin-bottom: 18px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .dum2blr-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            line-height: 1.25;
            font-weight: 800;
            margin-bottom: 18px;
            color: #ffffff;
        }

        .dum2blr-hero p {
            font-size: 1.12rem;
            line-height: 1.7;
            max-width: 780px;
            color: #e2e8f0;
            margin-bottom: 28px;
        }

        .dum2blr-hero-cta {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .dum2blr-btn-primary {
            background: var(--dum2blr-accent);
            color: #0f172a;
            font-weight: 700;
            padding: 13px 28px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(245, 158, 11, 0.4);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .dum2blr-btn-primary:hover {
            background: #d97706;
            transform: translateY(-2px);
            color: #ffffff;
        }

        .dum2blr-btn-outline {
            background: transparent;
            color: #ffffff;
            font-weight: 600;
            padding: 13px 26px;
            border-radius: 8px;
            text-decoration: none;
            border: 2px solid rgba(255, 255, 255, 0.6);
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .dum2blr-btn-outline:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: #ffffff;
        }

        .dum2blr-quick-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
            margin-top: 40px;
        }

        .dum2blr-stat-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 18px 20px;
            border-radius: var(--dum2blr-radius);
        }

        .dum2blr-stat-num {
            font-family: 'Outfit', sans-serif;
            font-size: 1.85rem;
            font-weight: 800;
            color: var(--dum2blr-accent);
            margin-bottom: 4px;
        }

        .dum2blr-stat-lbl {
            font-size: 0.88rem;
            color: #cbd5e1;
        }

        .dum2blr-section {
            padding: 60px 0;
        }

        .dum2blr-section-alt {
            background-color: var(--dum2blr-gray-bg);
        }

        .dum2blr-sec-head {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 45px;
        }

        .dum2blr-tag {
            display: inline-block;
            background: rgba(2, 132, 199, 0.1);
            color: var(--dum2blr-secondary);
            font-size: 0.82rem;
            font-weight: 700;
            padding: 4px 14px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            margin-bottom: 12px;
        }

        .dum2blr-sec-head h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            color: var(--dum2blr-dark);
            font-weight: 800;
            line-height: 1.3;
            margin-bottom: 14px;
        }

        .dum2blr-sec-head p {
            color: var(--dum2blr-text-muted);
            font-size: 1.05rem;
            line-height: 1.65;
        }

        .dum2blr-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 35px;
            align-items: center;
        }

        .dum2blr-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .dum2blr-grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .dum2blr-card {
            background: #ffffff;
            border: 1px solid var(--dum2blr-card-border);
            border-radius: var(--dum2blr-radius);
            padding: 26px;
            box-shadow: var(--dum2blr-shadow);
            transition: all 0.3s ease;
        }

        .dum2blr-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--dum2blr-shadow-hover);
            border-color: rgba(2, 132, 199, 0.3);
        }

        .dum2blr-card-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: rgba(2, 132, 199, 0.12);
            color: var(--dum2blr-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 18px;
        }

        .dum2blr-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.3rem;
            color: var(--dum2blr-dark);
            margin-bottom: 12px;
            font-weight: 700;
        }

        .dum2blr-card p {
            color: var(--dum2blr-text);
            font-size: 0.95rem;
            line-height: 1.65;
        }

        .dum2blr-img-wrapper {
            border-radius: var(--dum2blr-radius);
            overflow: hidden;
            box-shadow: var(--dum2blr-shadow);
        }

        .dum2blr-img-wrapper img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .dum2blr-img-wrapper:hover img {
            transform: scale(1.03);
        }

        .dum2blr-table-box {
            background: #ffffff;
            border-radius: var(--dum2blr-radius);
            box-shadow: var(--dum2blr-shadow);
            overflow: hidden;
            border: 1px solid var(--dum2blr-card-border);
            margin: 25px 0;
        }

        .dum2blr-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .dum2blr-table th {
            background: var(--dum2blr-primary);
            color: #ffffff;
            font-family: 'Outfit', sans-serif;
            padding: 16px 20px;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .dum2blr-table td {
            padding: 14px 20px;
            border-bottom: 1px solid #f1f5f9;
            color: var(--dum2blr-text);
            font-size: 0.94rem;
        }

        .dum2blr-table tr:nth-child(even) {
            background: #f8fafc;
        }

        .dum2blr-route-info-box {
            background: #eff6ff;
            border-left: 4px solid var(--dum2blr-secondary);
            padding: 22px 24px;
            border-radius: 0 10px 10px 0;
            margin: 25px 0;
        }

        .dum2blr-route-info-box h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            color: var(--dum2blr-primary);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .dum2blr-faq-item {
            background: #ffffff;
            border: 1px solid var(--dum2blr-card-border);
            border-radius: var(--dum2blr-radius);
            padding: 20px 24px;
            margin-bottom: 16px;
            box-shadow: var(--dum2blr-shadow);
        }

        .dum2blr-faq-item h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.12rem;
            color: var(--dum2blr-dark);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .dum2blr-faq-item p {
            color: var(--dum2blr-text);
            font-size: 0.95rem;
            line-height: 1.65;
            margin: 0;
        }

        .dum2blr-cta-banner {
            background: linear-gradient(135deg, #1e3a5f 0%, #0f172a 100%);
            border-radius: 16px;
            padding: 50px 30px;
            text-align: center;
            color: #ffffff;
            margin-top: 50px;
            box-shadow: 0 15px 30px rgba(15, 23, 42, 0.2);
        }

        .dum2blr-cta-banner h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.1rem;
            font-weight: 800;
            margin-bottom: 14px;
        }

        .dum2blr-cta-banner p {
            font-size: 1.05rem;
            max-width: 680px;
            margin: 0 auto 25px;
            color: #cbd5e1;
            line-height: 1.65;
        }

        @media (max-width: 768px) {
            .dum2blr-hero h1 {
                font-size: 2.1rem;
            }
            .dum2blr-grid-2 {
                grid-template-columns: 1fr;
            }
            .dum2blr-table th, .dum2blr-table td {
                padding: 12px 14px;
                font-size: 0.88rem;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MovingCompany",
      "name": "Shree Ashirwad Packers and Movers Dumka to Bangalore",
      "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
      "@id": "https://www.shreeashirwadpackers.com/#dumka-to-bangalore-packers",
      "url": "https://www.shreeashirwadpackers.com/dumka-to-bangalore-packers-and-movers",
      "telephone": "+91-8409531615",
      "priceRange": "INR 12,000 - 95,000",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Near Dudhani Chowk, Main Road",
        "addressLocality": "Dumka",
        "addressRegion": "Jharkhand",
        "postalCode": "814101",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 24.2686,
        "longitude": 87.2486
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
        "opens": "06:00",
        "closes": "22:00"
      },
      "sameAs": [
        "https://www.facebook.com/shreeashirwadpackers",
        "https://www.instagram.com/shreeashirwadpackers"
      ]
    }
    </script>

    <!-- Schema 2: Service Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "serviceType": "Long Distance Intercity Relocation",
      "provider": {
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers",
        "telephone": "+91-8409531615",
        "url": "https://www.shreeashirwadpackers.com"
      },
      "areaServed": [
        {
          "@type": "AdministrativeArea",
          "name": "Dumka, Jharkhand"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Bangalore, Karnataka"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Dumka to Bangalore Relocation Services",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Household Relocation from Dumka to Bangalore"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Tech Professional and Corporate Relocation"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Enclosed Car Carrier Shipping to Bengaluru"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Two-Wheeler Bike Courier to Bangalore IT Corridors"
            }
          }
        ]
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
          "name": "Intercity Routes",
          "item": "https://www.shreeashirwadpackers.com/services"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Dumka to Bangalore Packers and Movers",
          "item": "https://www.shreeashirwadpackers.com/dumka-to-bangalore-packers-and-movers"
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
          "name": "What is the transit duration for household goods from Dumka to Bangalore?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The highway distance between Dumka and Bangalore is approximately 1,850 kilometers. Direct dedicated container vehicles arrive within 4 to 5 days, while shared container groupage shipments reach their destination in 6 to 8 days."
          }
        },
        {
          "@type": "Question",
          "name": "Do you deliver to tech suburbs like Whitefield, Electronic City, and Sarjapur?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we deliver directly to all Bangalore gated communities, high-rise apartments, and tech corridors, including Whitefield, Electronic City, Bellandur, Sarjapur Road, HSR Layout, Koramangala, Marathahalli, Manyata Tech Park, and Kanakapura Road."
          }
        },
        {
          "@type": "Question",
          "name": "How do you ensure zero damage over an 1,850 km long-distance transit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We employ our certified 5-layer protective packing protocol comprising scratch-resistant cling film, dense air bubble cushioning, heavy 5-ply corrugated sheets, reinforced corner angle boards, and moisture-barrier exterior sealing to prevent transit vibration damage."
          }
        },
        {
          "@type": "Question",
          "name": "Can you ship cars and bikes along with household belongings?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we offer specialized covered car trailer services and insured motorcycle courier. Vehicles receive physical pre-load inspection, lashing inside container carriers, and prompt delivery right to your Bangalore apartment."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide corporate GST invoices for company relocation claims?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we issue 100% compliant GST invoices, detailed item inventories, and official consignment notes (bilty) recognized by IT enterprises, multinational corporations, banks, and government institutions."
          }
        }
      ]
    }
    </script>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <!-- Hero Section -->
    <header class="dum2blr-hero">
        <div class="dum2blr-container">
            <nav class="dum2blr-breadcrumbs" aria-label="breadcrumb">
                <a href="<?php echo SITE_BASE_URL; ?>/">Home</a> &raquo; 
                <a href="<?php echo SITE_BASE_URL; ?>/services">Intercity Routes</a> &raquo; 
                <span>Dumka to Bangalore</span>
            </nav>
            <div class="dum2blr-hero-badge">&#10004; Verified Long-Haul Interstate Carrier</div>
            <h1>Dependable Dumka to Bangalore Packers and Movers</h1>
            <p>
                Professional cross-country moving services from Dumka (Jharkhand) to Bangalore (Bengaluru, Karnataka). Specialized household relocation, tech employee transfers, high-rise gated society delivery, car carrier transportation, and two-wheeler shipping with complete transit insurance.
            </p>
            <div class="dum2blr-hero-cta">
                <a href="tel:8409531615" class="dum2blr-btn-primary">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                    Call: 8409531615
                </a>
                <a href="#dum2blr-quote" class="dum2blr-btn-outline">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Request Free Estimate
                </a>
            </div>

            <div class="dum2blr-quick-stats">
                <div class="dum2blr-stat-card">
                    <div class="dum2blr-stat-num">1,850 KM</div>
                    <div class="dum2blr-stat-lbl">Transit Distance via NH-16 / NH-44</div>
                </div>
                <div class="dum2blr-stat-card">
                    <div class="dum2blr-stat-num">4-5 Days</div>
                    <div class="dum2blr-stat-lbl">Direct Dedicated Container Transit</div>
                </div>
                <div class="dum2blr-stat-card">
                    <div class="dum2blr-stat-num">100% Insured</div>
                    <div class="dum2blr-stat-lbl">Comprehensive Policy Coverage</div>
                </div>
                <div class="dum2blr-stat-card">
                    <div class="dum2blr-stat-num">Corporate GST</div>
                    <div class="dum2blr-stat-lbl">100% Claim Compliant Invoices</div>
                </div>
            </div>
        </div>
    </header>

    <!-- Overview Section -->
    <section class="dum2blr-section">
        <div class="dum2blr-container">
            <div class="dum2blr-grid-2">
                <div>
                    <span class="dum2blr-tag">Premier Pan-India Logistics</span>
                    <h2>Smooth Intercity Relocation from Dumka to Bengaluru Silicon Hub</h2>
                    <p>
                        A cross-country relocation of 1,850 kilometers from Santhal Pargana’s administrative center in Dumka to India's Silicon Valley in Bangalore represents a major lifestyle transition. Whether you are a software engineer joining a technology major in Whitefield or Bellandur, a corporate executive transferred to Electronic City, or a family establishing roots in Bengaluru, reliable logistics are paramount.
                    </p>
                    <p>
                        Shree Ashirwad Packers and Movers brings over a decade of long-haul logistics expertise to your doorstep. We recognize that moving fragile chinaware, high-definition curved displays, solid mahogany wooden furniture, and expensive modular kitchen electronics across eastern and southern India requires specialized packing discipline and sealed container equipment.
                    </p>
                    <p>
                        Our permanent, background-verified team arrives at your Dumka home in Rasikpur, Tinghar, Dudhani, or Bandhdih with heavy-duty supplies. We dismantle furniture, custom-wrap each component, crate delicate glass items, and load your goods into weatherproof container trucks designed specifically for long highway routes.
                    </p>
                    <p>
                        Furthermore, we understand the specific challenges faced when moving into Bengaluru's premier residential townships and gated communities across Whitefield, Electronic City, and Sarjapur Road. Many high-rise condominium complexes impose stringent moving-in time restrictions, service elevator security procedures, and dedicated cargo parking regulations. Our experienced moving coordinators pre-arrange all mandatory building transit documentation, supply elevator padding, and schedule truck arrival to match your society's designated moving slots.
                    </p>
                    <p>
                        For IT professionals and corporate managers, we implement rigorous anti-static electrostatic discharge (ESD) wrapping for high-value tech devices, home-office work stations, ergonomic gaming chairs, curved 4K monitors, and external drives. We guarantee complete data hardware safety and pristine physical condition upon arrival at your new Bangalore residence.
                    </p>
                </div>
                <div>
                    <div class="dum2blr-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe transit container truck for Dumka to Bangalore relocation" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Highlights -->
    <section class="dum2blr-section dum2blr-section-alt">
        <div class="dum2blr-container">
            <div class="dum2blr-sec-head">
                <span class="dum2blr-tag">Our Moving Solutions</span>
                <h2>Comprehensive Moving Services: Dumka to Bangalore</h2>
                <p>Engineered relocation services designed to protect your goods over 1,850 km of highway transit.</p>
            </div>

            <div class="dum2blr-grid-3">
                <div class="dum2blr-card">
                    <div class="dum2blr-card-icon">&#127968;</div>
                    <h3>Full Apartment & Villa Relocation</h3>
                    <p>
                        From studio apartments to luxurious 4 BHK independent villas, we manage every step—professional packing, dismantling, high-tensile strapping, container transit, and destination room setup in Bangalore.
                    </p>
                </div>

                <div class="dum2blr-card">
                    <div class="dum2blr-card-icon">&#128187;</div>
                    <h3>IT Professional & Corporate Transfers</h3>
                    <p>
                        Specialized moving support for tech professionals moving to IT corridors. We handle ergonomic workstations, multi-screen setups, gaming rigs, and high-value personal electronics with electrostatic discharge (ESD) wrap.
                    </p>
                </div>

                <div class="dum2blr-card">
                    <div class="dum2blr-card-icon">&#128663;</div>
                    <h3>Enclosed Car Carrier Service</h3>
                    <p>
                        Ship your car safely from Dumka to Bangalore inside fully enclosed auto trailers. We ensure four-point tire lashing, bumper padding, vehicle condition mapping, and insurance coverage.
                    </p>
                </div>

                <div class="dum2blr-card">
                    <div class="dum2blr-card-icon">&#127949;</div>
                    <h3>Two-Wheeler Bike Courier</h3>
                    <p>
                        Safe bike and scooter courier service. We dismantle rear-view mirrors, wrap handle grips and fuel tanks with dense foam wrap, and anchor bikes in upright positions within closed container carriers.
                    </p>
                </div>

                <div class="dum2blr-card">
                    <div class="dum2blr-card-icon">&#128221;</div>
                    <h3>Corporate Relocation Billing</h3>
                    <p>
                        Full GST invoices, computer-generated itemized packing lists, transit consignment notes, and stamped cash receipts that satisfy corporate HR reimbursement criteria.
                    </p>
                </div>

                <div class="dum2blr-card">
                    <div class="dum2blr-card-icon">&#128230;</div>
                    <h3>Cost-Effective Shared Groupage</h3>
                    <p>
                        Moving a small consignment, student luggage, or bachelor setup? Our shared container groupage offers huge cost savings without sacrificing safety or delivery reliability.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Packaging Standard Section -->
    <section class="dum2blr-section">
        <div class="dum2blr-container">
            <div class="dum2del-grid-2">
                <div>
                    <div class="dum2blr-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="5 layer packing process for Dumka to Bangalore household shifting" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="dum2blr-tag">Packaging Engineering</span>
                    <h2>Engineered 5-Layer Packaging for 1,850 KM Interstate Transit</h2>
                    <p>
                        Transporting household goods across several states over 1,850 km subjects consignments to prolonged highway vibrations, monsoon humidity, and climatic changes. To guarantee zero damage, Shree Ashirwad enforces an uncompromising 5-layer packing methodology:
                    </p>
                    <ul style="color: var(--dum2blr-text); line-height: 1.8; padding-left: 20px; margin-bottom: 20px;">
                        <li><strong>Layer 1 (Scratch Protection):</strong> High-clarity stretch wrap prevents surface abrasion on gloss paints, wooden veneers, and metallic refrigerator doors.</li>
                        <li><strong>Layer 2 (Cushioning Shock Absorption):</strong> Heavy-gauge air bubble wrap blankets flat-screen TVs, audio systems, fragile crockery, and mirrors.</li>
                        <li><strong>Layer 3 (Rigid Armor):</strong> Tough 5-ply corrugated cardboard sheets envelope sofas, bed frames, dining sets, and wardrobe panels.</li>
                        <li><strong>Layer 4 (Edge Armor Protection):</strong> Heavy-duty L-shaped fiber corner boards absorb impact on vulnerable table edges and marble tops.</li>
                        <li><strong>Layer 5 (Weatherproof Seal):</strong> Heavy-duty waterproof polyolefin outer wrap secured with cross-filament tape shields your cargo from moisture and road grime.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Table Section -->
    <section class="dum2blr-section dum2blr-section-alt">
        <div class="dum2blr-container">
            <div class="dum2blr-sec-head">
                <span class="dum2blr-tag">Clear Pricing</span>
                <h2>Dumka to Bangalore Relocation Cost Estimates</h2>
                <p>Transparent tariffs calculated based on volume, floor accessibility, packaging quality, and vehicle requirements.</p>
            </div>

            <div class="dum2blr-table-box">
                <table class="dum2blr-table">
                    <thead>
                        <tr>
                            <th>Relocation Type / Home Size</th>
                            <th>Packaging Tier</th>
                            <th>Crew & Handling</th>
                            <th>Transit Timeline</th>
                            <th>Estimated Pricing (INR)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>1 BHK Apartment / Studio</strong></td>
                            <td>3-Layer Corrugated + Bubble</td>
                            <td>3 Packers + Loading</td>
                            <td>4 - 5 Days</td>
                            <td>&#8377; 19,000 - &#8377; 30,000</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Flat / Regular Home</strong></td>
                            <td>5-Layer Shockproof Armor</td>
                            <td>4 Packers + Loading</td>
                            <td>4 - 5 Days</td>
                            <td>&#8377; 28,000 - &#8377; 44,000</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK / Large Villa</strong></td>
                            <td>Premium 5-Layer + Crating</td>
                            <td>5 Packers + Loading</td>
                            <td>5 - 6 Days</td>
                            <td>&#8377; 40,000 - &#8377; 65,000</td>
                        </tr>
                        <tr>
                            <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                            <td>Corrugated Foam + Heavy Bubble</td>
                            <td>Lashing & Roll-on Loading</td>
                            <td>5 - 6 Days</td>
                            <td>&#8377; 5,500 - &#8377; 8,500</td>
                        </tr>
                        <tr>
                            <td><strong>Motor Car (Hatchback / Sedan)</strong></td>
                            <td>Enclosed Auto Carrier Trailer</td>
                            <td>Wheel Locks & Transit Cover</td>
                            <td>4 - 5 Days</td>
                            <td>&#8377; 17,000 - &#8377; 23,000</td>
                        </tr>
                        <tr>
                            <td><strong>SUV / Luxury Automobile</strong></td>
                            <td>Specialized Covered Transporter</td>
                            <td>Hydraulic Loading + Insurance</td>
                            <td>4 - 5 Days</td>
                            <td>&#8377; 21,000 - &#8377; 28,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="dum2blr-route-info-box">
                <h4>Route Blueprint: NH-16 & Eastern Coastline Corridor to Bengaluru</h4>
                <p>
                    <strong>Highway Routing:</strong> Dumka &rarr; Asansol / Dhanbad &rarr; Kharagpur &rarr; Balasore &rarr; Bhubaneswar &rarr; Visakhapatnam &rarr; Vijayawada &rarr; Tirupati &rarr; Hoskote / Electronic City &rarr; Bengaluru. Total highway distance is roughly 1,850 km. With fast-tag electronic tolling and verified dual drivers, our sealed trucks deliver safely within 4 to 5 days.
                </p>
            </div>
        </div>
    </section>

    <!-- Vehicle Transport Section -->
    <section class="dum2blr-section">
        <div class="dum2blr-container">
            <div class="dum2blr-grid-2">
                <div>
                    <span class="dum2blr-tag">Vehicle Logistics</span>
                    <h2>Safe Car & Bike Shipping: Dumka to Bangalore</h2>
                    <p>
                        Driving personal cars or motorcycles across nearly two thousand kilometers is physically punishing, exposes your vehicle to highway accidents, and accelerates engine wear. Shree Ashirwad Packers and Movers eliminates these concerns with our specialized enclosed vehicle logistics.
                    </p>
                    <p>
                        We operate covered multi-car trailers and single-car container carriers equipped with heavy-duty tire locking mechanisms and hydraulic ramps. Before transit begins in Dumka, our move specialist creates a comprehensive digital inspection report recording fuel level, odometer reading, and exterior condition.
                    </p>
                    <p>
                        Motorcycles and performance scooters receive specialized corrugated foam layering over fuel tanks, handles, and tail lights. Each two-wheeler is firmly tethered inside enclosed container compartments. Direct doorstep delivery is completed across all Bangalore neighborhoods.
                    </p>
                </div>
                <div>
                    <div class="dum2blr-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transport carrier loading from Dumka to Bangalore" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="dum2blr-section dum2blr-section-alt">
        <div class="dum2blr-container">
            <div class="dum2blr-sec-head">
                <span class="dum2blr-tag">Why Trust Us</span>
                <h2>Why Choose Shree Ashirwad for Dumka to Bangalore Moves</h2>
                <p>Reliable service, experienced crew, and complete dedication to your possessions.</p>
            </div>

            <div class="dum2blr-grid-4">
                <div class="dum2blr-card">
                    <div class="dum2blr-card-icon">&#128737;</div>
                    <h3>Full Value Transit Insurance</h3>
                    <p>Every long-haul consignment is protected by comprehensive transit insurance policies covering unforeseen highway hazards or accidental damages.</p>
                </div>

                <div class="dum2blr-card">
                    <div class="dum2blr-card-icon">&#128666;</div>
                    <h3>Dedicated Sealed Containers</h3>
                    <p>No open-body trucks. We transport all goods inside sealed, waterproof steel containers with personal one-time tamper-evident locks.</p>
                </div>

                <div class="dum2blr-card">
                    <div class="dum2blr-card-icon">&#128205;</div>
                    <h3>Milestone Tracking Updates</h3>
                    <p>Receive regular SMS and WhatsApp status reports as your container truck progresses through major highway checkposts along the route.</p>
                </div>

                <div class="dum2blr-card">
                    <div class="dum2blr-card-icon">&#128176;</div>
                    <h3>Zero Hidden Surcharges</h3>
                    <p>Clear, transparent written quotes outlining packing materials, labor, freight, state taxes, and GST with no unexpected additions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Unpacking and Setup Section -->
    <section class="dum2blr-section">
        <div class="dum2blr-container">
            <div class="dum2blr-grid-2">
                <div>
                    <div class="dum2blr-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and home setup service in Bangalore" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="dum2blr-tag">Destination Comfort</span>
                    <h2>Apartment Unloading, Unpacking & Setup in Bengaluru</h2>
                    <p>
                        Navigating high-rise residential towers and strict gated society entry procedures across Bangalore requires professional coordination. Our Bengaluru destination operations team ensures an easy, hassle-free move-in experience.
                    </p>
                    <p>
                        We coordinate service elevator access with society facility teams in Whitefield, Bellandur, Sarjapur, or Electronic City. Our crew carefully unloads each container, safely brings items up to your apartment floor, and places cartons in the appropriate rooms.
                    </p>
                    <p>
                        Our team unboxes delicate chinaware, reassembles beds and modular furniture, positions refrigerators and washing machines, and collects all packaging debris, leaving your new Bengaluru apartment clean, functional, and ready to enjoy from day one.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Localities Covered -->
    <section class="dum2blr-section dum2blr-section-alt">
        <div class="dum2blr-container">
            <div class="dum2blr-sec-head">
                <span class="dum2blr-tag">Service Locations</span>
                <h2>Neighborhoods Covered Across Dumka & Bangalore</h2>
                <p>Prompt pickup throughout Santhal Pargana and direct delivery across Bengaluru's tech and residential corridors.</p>
            </div>

            <div class="dum2blr-grid-2">
                <div class="dum2blr-card">
                    <h3>Pickup Locations in Dumka District</h3>
                    <p>
                        Rasikpur, Dudhani, Tinghar, Bandhdih, SP College Road, Dumka Court, Dangalpara, Gilanpara, Khajuria, Airport Road, Kathikund Road, Jama, Hansdiha Road, and Saraiyahat.
                    </p>
                </div>

                <div class="dum2blr-card">
                    <h3>Delivery Sectors Across Bangalore (Bengaluru)</h3>
                    <p>
                        Whitefield, Electronic City, Bellandur, Sarjapur Road, HSR Layout, Koramangala, Marathahalli, Manyata Tech Park, Hebbal, Indiranagar, Jayanagar, Bannerghatta Road, Kanakapura Road, Malleshwaram, and Yelahanka.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section class="dum2blr-section">
        <div class="dum2blr-container">
            <div class="dum2blr-sec-head">
                <span class="dum2blr-tag">Helpful Details</span>
                <h2>Frequently Asked Questions: Dumka to Bangalore Relocation</h2>
                <p>Clear answers to common questions about cross-country moving timelines, safety, and insurance.</p>
            </div>

            <div style="max-width: 880px; margin: 0 auto;">
                <div class="dum2blr-faq-item">
                    <h4>What is the transit duration for household goods from Dumka to Bangalore?</h4>
                    <p>
                        The highway distance between Dumka and Bangalore is approximately 1,850 kilometers. Direct dedicated container vehicles arrive within 4 to 5 days, while shared container groupage shipments reach their destination in 6 to 8 days.
                    </p>
                </div>

                <div class="dum2blr-faq-item">
                    <h4>Do you deliver to tech suburbs like Whitefield, Electronic City, and Sarjapur?</h4>
                    <p>
                        Yes, we deliver directly to all Bangalore gated communities, high-rise apartments, and tech corridors, including Whitefield, Electronic City, Bellandur, Sarjapur Road, HSR Layout, Koramangala, Marathahalli, Manyata Tech Park, and Kanakapura Road.
                    </p>
                </div>

                <div class="dum2blr-faq-item">
                    <h4>How do you ensure zero damage over an 1,850 km long-distance transit?</h4>
                    <p>
                        We employ our certified 5-layer protective packing protocol comprising scratch-resistant cling film, dense air bubble cushioning, heavy 5-ply corrugated sheets, reinforced corner angle boards, and moisture-barrier exterior sealing to prevent transit vibration damage.
                    </p>
                </div>

                <div class="dum2blr-faq-item">
                    <h4>Can you ship cars and bikes along with household belongings?</h4>
                    <p>
                        Yes, we offer specialized covered car trailer services and insured motorcycle courier. Vehicles receive physical pre-load inspection, lashing inside container carriers, and prompt delivery right to your Bangalore apartment.
                    </p>
                </div>

                <div class="dum2blr-faq-item">
                    <h4>Do you provide corporate GST invoices for company relocation claims?</h4>
                    <p>
                        Yes, we issue 100% compliant GST invoices, detailed item inventories, and official consignment notes (bilty) recognized by IT enterprises, multinational corporations, banks, and government institutions.
                    </p>
                </div>
            </div>

            <!-- Call to Action Banner -->
            <div class="dum2blr-cta-banner" id="dum2blr-quote">
                <h3>Ready to Move from Dumka to Bangalore?</h3>
                <p>
                    Contact Shree Ashirwad Packers and Movers today for an instant free moving estimate. Experience professional, safe, and stress-free long-distance relocation with India's trusted moving partners.
                </p>
                <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                    <a href="tel:8409531615" class="dum2blr-btn-primary" style="background: #f59e0b; color: #0f172a;">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                        Call 8409531615
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20relocation%20from%20Dumka%20to%20Bangalore." class="dum2blr-btn-outline" target="_blank" rel="noopener noreferrer">
                        Chat on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
