<?php
/**
 * Page Name: Giridih to Delhi Packers and Movers
 * Route Slug: giridih-to-delhi-packers-and-movers
 * Description: Premium long-distance interstate relocation, household shifting, corporate employee transfer billing, enclosed car carrier transit, and bike shipping from Giridih to Delhi NCR.
 * Focus Keywords: giridih to delhi packers and movers, packers and movers giridih to delhi, house shifting giridih to delhi, car transport giridih to delhi, bike parcel giridih to delhi, giridih to noida gurgaon movers
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Giridih to Delhi Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Top-rated Giridih to Delhi NCR packers and movers. 1,180 km transit via NH-19 GT Road, express delivery, 5-layer safety packaging, GST corporate claims, car & bike carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/giridih-to-delhi-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="giridih to delhi packers and movers, packers and movers giridih to delhi, house shifting giridih to delhi, car transport giridih to delhi, bike parcel giridih to delhi, giridih to noida gurgaon movers">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Giridih">

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

    <!-- Scoped CSS for Route 13 (Giridih to Delhi) -->
    <style>
        :root {
            --gir2del-primary: #1e3a5f;
            --gir2del-secondary: #0284c7;
            --gir2del-accent: #f59e0b;
            --gir2del-accent-light: #fef3c7;
            --gir2del-dark: #0f172a;
            --gir2del-gray-bg: #f8fafc;
            --gir2del-card-border: #e2e8f0;
            --gir2del-text: #334155;
            --gir2del-text-muted: #64748b;
            --gir2del-radius: 12px;
            --gir2del-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
            --gir2del-shadow-hover: 0 20px 30px -10px rgba(2, 132, 199, 0.18);
        }

        .gir2del-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.92) 0%, rgba(30, 58, 95, 0.88) 100%), url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 70px 20px 65px;
            position: relative;
        }

        .gir2del-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .gir2del-breadcrumbs {
            font-size: 0.9rem;
            color: #cbd5e1;
            margin-bottom: 20px;
        }

        .gir2del-breadcrumbs a {
            color: var(--gir2del-accent);
            text-decoration: none;
        }

        .gir2del-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(245, 158, 11, 0.18);
            border: 1px solid rgba(245, 158, 11, 0.5);
            color: var(--gir2del-accent);
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 0.88rem;
            font-weight: 600;
            margin-bottom: 18px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .gir2del-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            line-height: 1.25;
            font-weight: 800;
            margin-bottom: 18px;
            color: #ffffff;
        }

        .gir2del-hero p {
            font-size: 1.12rem;
            line-height: 1.7;
            max-width: 780px;
            color: #e2e8f0;
            margin-bottom: 28px;
        }

        .gir2del-hero-cta {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .gir2del-btn-primary {
            background: var(--gir2del-accent);
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

        .gir2del-btn-primary:hover {
            background: #d97706;
            transform: translateY(-2px);
            color: #ffffff;
        }

        .gir2del-btn-outline {
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

        .gir2del-btn-outline:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: #ffffff;
        }

        .gir2del-quick-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
            margin-top: 40px;
        }

        .gir2del-stat-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 18px 20px;
            border-radius: var(--gir2del-radius);
        }

        .gir2del-stat-num {
            font-family: 'Outfit', sans-serif;
            font-size: 1.85rem;
            font-weight: 800;
            color: var(--gir2del-accent);
            margin-bottom: 4px;
        }

        .gir2del-stat-lbl {
            font-size: 0.88rem;
            color: #cbd5e1;
        }

        .gir2del-section {
            padding: 60px 0;
        }

        .gir2del-section-alt {
            background-color: var(--gir2del-gray-bg);
        }

        .gir2del-sec-head {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 45px;
        }

        .gir2del-tag {
            display: inline-block;
            background: rgba(2, 132, 199, 0.1);
            color: var(--gir2del-secondary);
            font-size: 0.82rem;
            font-weight: 700;
            padding: 4px 14px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            margin-bottom: 12px;
        }

        .gir2del-sec-head h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            color: var(--gir2del-dark);
            font-weight: 800;
            line-height: 1.3;
            margin-bottom: 14px;
        }

        .gir2del-sec-head p {
            color: var(--gir2del-text-muted);
            font-size: 1.05rem;
            line-height: 1.65;
        }

        .gir2del-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 35px;
            align-items: center;
        }

        .gir2del-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .gir2del-grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .gir2del-card {
            background: #ffffff;
            border: 1px solid var(--gir2del-card-border);
            border-radius: var(--gir2del-radius);
            padding: 26px;
            box-shadow: var(--gir2del-shadow);
            transition: all 0.3s ease;
        }

        .gir2del-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--gir2del-shadow-hover);
            border-color: rgba(2, 132, 199, 0.3);
        }

        .gir2del-card-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: rgba(2, 132, 199, 0.12);
            color: var(--gir2del-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 18px;
        }

        .gir2del-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.3rem;
            color: var(--gir2del-dark);
            margin-bottom: 12px;
            font-weight: 700;
        }

        .gir2del-card p {
            color: var(--gir2del-text);
            font-size: 0.95rem;
            line-height: 1.65;
        }

        .gir2del-img-wrapper {
            border-radius: var(--gir2del-radius);
            overflow: hidden;
            box-shadow: var(--gir2del-shadow);
        }

        .gir2del-img-wrapper img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .gir2del-img-wrapper:hover img {
            transform: scale(1.03);
        }

        .gir2del-table-box {
            background: #ffffff;
            border-radius: var(--gir2del-radius);
            box-shadow: var(--gir2del-shadow);
            overflow: hidden;
            border: 1px solid var(--gir2del-card-border);
            margin: 25px 0;
        }

        .gir2del-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .gir2del-table th {
            background: var(--gir2del-primary);
            color: #ffffff;
            font-family: 'Outfit', sans-serif;
            padding: 16px 20px;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .gir2del-table td {
            padding: 14px 20px;
            border-bottom: 1px solid #f1f5f9;
            color: var(--gir2del-text);
            font-size: 0.94rem;
        }

        .gir2del-table tr:nth-child(even) {
            background: #f8fafc;
        }

        .gir2del-route-info-box {
            background: #eff6ff;
            border-left: 4px solid var(--gir2del-secondary);
            padding: 22px 24px;
            border-radius: 0 10px 10px 0;
            margin: 25px 0;
        }

        .gir2del-route-info-box h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            color: var(--gir2del-primary);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .gir2del-faq-item {
            background: #ffffff;
            border: 1px solid var(--gir2del-card-border);
            border-radius: var(--gir2del-radius);
            padding: 20px 24px;
            margin-bottom: 16px;
            box-shadow: var(--gir2del-shadow);
        }

        .gir2del-faq-item h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.12rem;
            color: var(--gir2del-dark);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .gir2del-faq-item p {
            color: var(--gir2del-text);
            font-size: 0.95rem;
            line-height: 1.65;
            margin: 0;
        }

        .gir2del-cta-banner {
            background: linear-gradient(135deg, #1e3a5f 0%, #0f172a 100%);
            border-radius: 16px;
            padding: 50px 30px;
            text-align: center;
            color: #ffffff;
            margin-top: 50px;
            box-shadow: 0 15px 30px rgba(15, 23, 42, 0.2);
        }

        .gir2del-cta-banner h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.1rem;
            font-weight: 800;
            margin-bottom: 14px;
        }

        .gir2del-cta-banner p {
            font-size: 1.05rem;
            max-width: 680px;
            margin: 0 auto 25px;
            color: #cbd5e1;
            line-height: 1.65;
        }

        @media (max-width: 768px) {
            .gir2del-hero h1 {
                font-size: 2.1rem;
            }
            .gir2del-grid-2 {
                grid-template-columns: 1fr;
            }
            .gir2del-table th, .gir2del-table td {
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
      "name": "Shree Ashirwad Packers and Movers Giridih to Delhi",
      "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
      "@id": "https://www.shreeashirwadpackers.com/#giridih-to-delhi-packers",
      "url": "https://www.shreeashirwadpackers.com/giridih-to-delhi-packers-and-movers",
      "telephone": "+91-8409531615",
      "priceRange": "INR 14,000 - 85,000",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Bada Chowk, Near Tower Chowk",
        "addressLocality": "Giridih",
        "addressRegion": "Jharkhand",
        "postalCode": "815301",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 24.1860,
        "longitude": 86.3075
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
      "serviceType": "Long-Distance Interstate Relocation Services",
      "provider": {
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers",
        "telephone": "+91-8409531615",
        "url": "https://www.shreeashirwadpackers.com"
      },
      "areaServed": [
        {
          "@type": "AdministrativeArea",
          "name": "Giridih, Jharkhand"
        },
        {
          "@type": "AdministrativeArea",
          "name": "National Capital Region (Delhi NCR)"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Giridih to Delhi NCR Relocation Services",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Household Relocation from Giridih to Delhi NCR"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Corporate & Tech Employee Moves to Noida & Gurgaon"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Dedicated Car Carrier to Delhi NCR"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Two-Wheeler Bike Parcel Express to Delhi"
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
          "name": "Giridih to Delhi Packers and Movers",
          "item": "https://www.shreeashirwadpackers.com/giridih-to-delhi-packers-and-movers"
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
          "name": "What is the typical transit duration from Giridih to Delhi NCR?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The highway distance between Giridih and Delhi NCR is approximately 1,180 kilometers via Dumri connecting to NH-19 (Grand Trunk Road), Varanasi, Prayagraj, Kanpur, and Agra via the Yamuna Expressway. Our dedicated GPS-tracked closed container trucks deliver within 38 to 48 hours directly to your doorstep."
          }
        },
        {
          "@type": "Question",
          "name": "Do you deliver to Noida, Greater Noida, and Gurgaon / Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, our delivery network covers the entire National Capital Region including South Delhi (Saket, Vasant Kunj, GK), West Delhi (Dwarka, Janakpuri), Noida (Sectors 50, 62, 137), Greater Noida, and Gurugram (DLF Phases 1-5, Cyber City, Golf Course Road, Sohna Road)."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide transit insurance for long-distance moves?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we arrange comprehensive transit insurance through reputed national insurance providers covering accidental damage, vehicle overturn, fire, and catastrophic highway risks for complete peace of mind."
          }
        },
        {
          "@type": "Question",
          "name": "How are fragile furniture and electronics safeguarded during transit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We implement a strict 5-tier packaging protocol utilizing virgin bubble wrap, heavy corrugated sheets, high-density edge corner protectors, stretch film wrapping, and reinforced adhesive sealing to prevent road shock absorption."
          }
        },
        {
          "@type": "Question",
          "name": "What is the approximate cost of moving a 2 BHK apartment from Giridih to Delhi NCR?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A standard 2 BHK household relocation from Giridih to Delhi NCR typically ranges between INR 24,000 and 38,000 depending on total volume, packing material grade, floor levels, and elevator accessibility at both premises."
          }
        }
      ]
    }
    </script>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <!-- Hero Section -->
    <header class="gir2del-hero">
        <div class="gir2del-container">
            <nav class="gir2del-breadcrumbs" aria-label="breadcrumb">
                <a href="<?php echo SITE_BASE_URL; ?>/">Home</a> &raquo; 
                <a href="<?php echo SITE_BASE_URL; ?>/services">Intercity Routes</a> &raquo; 
                <span>Giridih to Delhi NCR</span>
            </nav>
            <div class="gir2del-hero-badge">&#10004; Dedicated Interstate National Capital Express Corridor</div>
            <h1>Premier Giridih to Delhi Packers and Movers</h1>
            <p>
                Professional interstate relocation services from Giridih to Delhi, Noida, Gurgaon, and Faridabad. Complete household shifting, corporate employee relocations, enclosed car carrier transit, and bike courier with guaranteed GPS-tracked container transport via NH-19 and Yamuna Expressway.
            </p>
            <div class="gir2del-hero-cta">
                <a href="tel:8409531615" class="gir2del-btn-primary">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                    Call: 8409531615
                </a>
                <a href="#gir2del-quote" class="gir2del-btn-outline">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Request Free Estimate
                </a>
            </div>

            <div class="gir2del-quick-stats">
                <div class="gir2del-stat-card">
                    <div class="gir2del-stat-num">1,180 KM</div>
                    <div class="gir2del-stat-lbl">Highway Distance via NH-19 GT Road</div>
                </div>
                <div class="gir2del-stat-card">
                    <div class="gir2del-stat-num">38-48 Hrs</div>
                    <div class="gir2del-stat-lbl">Express Container Transit</div>
                </div>
                <div class="gir2del-stat-card">
                    <div class="gir2del-stat-num">100% Safe</div>
                    <div class="gir2del-stat-lbl">Weatherproof Container Fleet</div>
                </div>
                <div class="gir2del-stat-card">
                    <div class="gir2del-stat-num">GST Approved</div>
                    <div class="gir2del-stat-lbl">MNC & Govt Claim Billing</div>
                </div>
            </div>
        </div>
    </header>

    <!-- Overview Section -->
    <section class="gir2del-section">
        <div class="gir2del-container">
            <div class="gir2del-grid-2">
                <div>
                    <span class="gir2del-tag">Premier Interstate Logistics</span>
                    <h2>Safe & Seamless Long-Distance Relocation from Giridih to Delhi NCR</h2>
                    <p>
                        The interstate corridor between Giridih and the National Capital Region (Delhi, Noida, Gurgaon, Ghaziabad, and Faridabad) spans approximately 1,180 kilometers. It connects the industrial steel rolling mills, foundry clusters, and mica trading hub of North Chota Nagpur directly with India’s political, economic, and technological capital.
                    </p>
                    <p>
                        Giridih enjoys strategic proximity to the historic Grand Trunk Road (National Highway 19) via Dumri. This world-class multi-lane corridor runs through Varanasi, Prayagraj, Kanpur, and connects to the high-speed Yamuna Expressway directly into Greater Noida and Delhi. At Shree Ashirwad Packers and Movers, we specialize in end-to-end long-distance relocations along this national corridor.
                    </p>
                    <p>
                        Whether you are an IT professional moving to DLF Cyber City in Gurugram, an engineer transferring to tech parks in Noida Sector 62, a central civil services officer moving to Chanakyapuri or Dwarka, or a family shifting home, we guarantee a punctual, secure, and stress-free moving experience.
                    </p>
                    <p>
                        Our specialized crews bring heavy-duty packing supplies, professional dismantle-and-reassemble toolkits, and sealed container carriers directly to your Giridih premises in Makatpur, Bada Chowk, Pachamba, Sirsia, Moti Nagar, or Baniadih. We pack, load, transport across the highway safely, and unpack at your new home in Delhi NCR within 38 to 48 hours.
                    </p>
                </div>
                <div>
                    <div class="gir2del-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe transit container truck for Giridih to Delhi NCR relocation" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Highlights -->
    <section class="gir2del-section gir2del-section-alt">
        <div class="gir2del-container">
            <div class="gir2del-sec-head">
                <span class="gir2del-tag">Dedicated Moving Solutions</span>
                <h2>Specialized Shifting Services: Giridih to Delhi NCR</h2>
                <p>Tailored moving services designed to handle family apartments, corporate suites, and vehicle transport.</p>
            </div>

            <div class="gir2del-grid-3">
                <div class="gir2del-card">
                    <div class="gir2del-card-icon">&#127968;</div>
                    <h3>Complete Household Relocation</h3>
                    <p>
                        Comprehensive home shifting from 1 BHK to luxury duplexes. We pack, disassemble double beds and modular wardrobes, transport in covered containers, and reassemble everything at your Delhi NCR home.
                    </p>
                </div>

                <div class="gir2del-card">
                    <div class="gir2del-card-icon">&#128187;</div>
                    <h3>Corporate & Tech Relocations</h3>
                    <p>
                        Specialized moving support for tech professionals moving to Gurgaon Cyber City, Noida Expressway, and South Delhi. We provide standardized billing and inventories for instant reimbursement approval.
                    </p>
                </div>

                <div class="gir2del-card">
                    <div class="gir2del-card-icon">&#127979;</div>
                    <h3>Central Govt & Defense Transfers</h3>
                    <p>
                        Complete documentation and logistics support for central secretariat staff, armed forces officers, and PSU personnel moving between Giridih and Delhi NCR.
                    </p>
                </div>

                <div class="gir2del-card">
                    <div class="gir2del-card-icon">&#128663;</div>
                    <h3>Door-to-Door Car Carrier</h3>
                    <p>
                        Secure car transport inside enclosed auto trailers. We transport hatchbacks, sedans, and SUVs from Giridih to Delhi NCR with wheel locks, protective bumper shields, and full transit insurance.
                    </p>
                </div>

                <div class="gir2del-card">
                    <div class="gir2del-card-icon">&#127949;</div>
                    <h3>Two-Wheeler Bike Courier</h3>
                    <p>
                        Bikes and scooters receive multi-layer wrapping with bubble sheets, corrugated cartons, and mirror padding. Fuel is drained to regulatory safety levels, battery terminals secured, and the vehicle is transported securely inside covered trucks.
                    </p>
                </div>

                <div class="gir2del-card">
                    <div class="gir2del-card-icon">&#128188;</div>
                    <h3>Commercial & Office Moving</h3>
                    <p>
                        Relocating business offices, retail merchandise, medical equipment, or IT workstations between Giridih and Delhi NCR. We deploy anti-static packaging, serial-numbered carton sealing, and systematic file archiving.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Packaging Standard Section -->
    <section class="gir2del-section">
        <div class="gir2del-container">
            <div class="gir2del-grid-2">
                <div>
                    <div class="gir2del-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="5 layer packing process for Giridih to Delhi household shifting" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="gir2del-tag">Protection Technology</span>
                    <h2>Engineered 5-Layer Packaging for Long-Distance Highway Transit</h2>
                    <p>
                        Covering 1,180 kilometers across three state borders requires packaging built to withstand prolonged mechanical vibration and weather changes. Shree Ashirwad adheres to an unyielding 5-layer packing methodology:
                    </p>
                    <ul style="color: var(--gir2del-text); line-height: 1.8; padding-left: 20px; margin-bottom: 20px;">
                        <li><strong>Layer 1 (Direct Surface Guard):</strong> Ultra-fine stretch film wraps polished wooden finishes, leather upholstery, and refrigerator gloss panels to guard against scuffs and moisture.</li>
                        <li><strong>Layer 2 (Cushioning Shock Absorption):</strong> High-density virgin air bubble wrap shields LED televisions, crystal glassware, microwave ovens, washing machines, and porcelain decor.</li>
                        <li><strong>Layer 3 (Structural Reinforcement):</strong> Heavyweight 5-ply corrugated cardboards wrap furniture corners, wardrobe panels, bed headboards, and mirrors.</li>
                        <li><strong>Layer 4 (Corner Edge Armor):</strong> Rigid L-shaped corner guards protect table borders, glass tops, and wooden cabinetry from side impacts during loading.</li>
                        <li><strong>Layer 5 (Weatherproof Sealing):</strong> Heavy-gauge moisture-proof outer cling film and high-tensile strapping bands secure every bundle into an immovable, dust-free package.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Table Section -->
    <section class="gir2del-section gir2del-section-alt">
        <div class="gir2del-container">
            <div class="gir2del-sec-head">
                <span class="gir2del-tag">Transparent Tariff</span>
                <h2>Giridih to Delhi NCR Relocation Cost Estimates</h2>
                <p>Fair, itemized, and transparent pricing without hidden tolls or sudden fuel surcharges. Contact our team for an exact, tailored quotation.</p>
            </div>

            <div class="gir2del-table-box">
                <table class="gir2del-table">
                    <thead>
                        <tr>
                            <th>Relocation Type / Home Size</th>
                            <th>Packing Material Tier</th>
                            <th>Labor & Handling</th>
                            <th>Transit Duration</th>
                            <th>Estimated Pricing (INR)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>1 BHK Apartment / Studio Flat</strong></td>
                            <td>Standard 3-Layer Corrugated</td>
                            <td>2 Packers + 2 Loaders</td>
                            <td>38 - 48 Hours</td>
                            <td>&#8377; 15,000 - &#8377; 25,000</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Flat / Full House Shifting</strong></td>
                            <td>Premium 5-Layer Protective</td>
                            <td>3 Packers + 3 Loaders</td>
                            <td>38 - 48 Hours</td>
                            <td>&#8377; 24,000 - &#8377; 38,000</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK / Executive Duplex Villa</strong></td>
                            <td>Super Heavy Bubble + Wooden Crates</td>
                            <td>4 Packers + 4 Loaders</td>
                            <td>48 - 60 Hours</td>
                            <td>&#8377; 35,000 - &#8377; 55,000</td>
                        </tr>
                        <tr>
                            <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                            <td>Corrugated Foam + Bubble Wrap</td>
                            <td>Loading & Lashing Included</td>
                            <td>3 - 4 Days Delivery</td>
                            <td>&#8377; 4,500 - &#8377; 7,500</td>
                        </tr>
                        <tr>
                            <td><strong>Motor Car (Hatchback / Sedan)</strong></td>
                            <td>Enclosed Carrier Vehicle</td>
                            <td>Hydraulic Ramp Handling</td>
                            <td>3 - 4 Days Delivery</td>
                            <td>&#8377; 12,000 - &#8377; 19,000</td>
                        </tr>
                        <tr>
                            <td><strong>Corporate / IT Office Setup</strong></td>
                            <td>Custom Anti-Static Crates</td>
                            <td>Technical Moving Team</td>
                            <td>Scheduled Window</td>
                            <td>Custom Audit Basis</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="gir2del-route-info-box">
                <h4>Route Blueprint: Giridih to Delhi NCR Highway Transit Details</h4>
                <p>
                    <strong>Transit Path:</strong> Giridih town center &rarr; Dumri link &rarr; NH-19 (GT Road) &rarr; Varanasi &rarr; Prayagraj &rarr; Kanpur bypass &rarr; Agra bypass &rarr; Yamuna Expressway &rarr; Delhi NCR (Delhi, Noida, Gurgaon, Faridabad). Total distance is roughly 1,180 km. Direct container trucks ensure prompt transit within 38 to 48 hours.
                </p>
            </div>
        </div>
    </section>

    <!-- Vehicle Transport Section -->
    <section class="gir2del-section">
        <div class="gir2del-container">
            <div class="gir2del-grid-2">
                <div>
                    <span class="gir2del-tag">Vehicle Logistics</span>
                    <h2>Secure Two-Wheeler & Car Transport: Giridih to Delhi NCR</h2>
                    <p>
                        Driving personal vehicles over 1,180 kilometers on national highways entails massive fuel costs, vehicle wear, and driver fatigue. Shree Ashirwad Packers and Movers provides a reliable, secure automotive carrier service.
                    </p>
                    <p>
                        Our specialized car transport trailers and enclosed single-vehicle carriers are equipped with safety winches, custom wheel locks, and soft bumper shields that ensure your vehicle stays completely stationary during the trip. Before loading at your Giridih residence, our field supervisor conducts a thorough multi-point exterior inspection, recording tire treads, fuel levels, and existing scratches on a formal Vehicle Condition Sheet.
                    </p>
                    <p>
                        For motorcycles and sports bikes, we use heavy-duty corrugated sheet wrapping around fuel tanks, headlamps, and chrome mirrors, followed by thick bubble insulation. Vehicles are delivered clean and undamaged right at your doorstep in Delhi, Noida, or Gurgaon.
                    </p>
                </div>
                <div>
                    <div class="gir2del-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transport carrier loading from Giridih to Delhi NCR" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="gir2del-section gir2del-section-alt">
        <div class="gir2del-container">
            <div class="gir2del-sec-head">
                <span class="gir2del-tag">Service Advantages</span>
                <h2>Why Choose Shree Ashirwad for Giridih to Delhi Moves</h2>
                <p>Reliable local operations, certified moving crews, and an unwavering focus on customer satisfaction.</p>
            </div>

            <div class="gir2del-grid-4">
                <div class="gir2del-card">
                    <div class="gir2del-card-icon">&#9989;</div>
                    <h3>Trained In-House Staff</h3>
                    <p>We never use untrained daily wage contractors. Our permanent crew has mastered delicate furniture handling, electronics packing, and staircase maneuvering.</p>
                </div>

                <div class="gir2del-card">
                    <div class="gir2del-card-icon">&#128337;</div>
                    <h3>Direct Container Transit</h3>
                    <p>Direct door-to-door closed containers without transshipment or hub consolidation, minimizing transit delays and item misplacement.</p>
                </div>

                <div class="gir2del-card">
                    <div class="gir2del-card-icon">&#128176;</div>
                    <h3>Zero Hidden Costs</h3>
                    <p>Transparent written price quotations detailing toll charges, loading, unloading, packing supplies, and transit logistics with 100% upfront clarity.</p>
                </div>

                <div class="gir2del-card">
                    <div class="gir2del-card-icon">&#128221;</div>
                    <h3>Government Claim Invoices</h3>
                    <p>Full GST billing, computer-generated packing inventories, consignment notes, and stamped invoices compliant with Central Government, MNC, and PSU transfer norms.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Unpacking and Setup Section -->
    <section class="gir2del-section">
        <div class="gir2del-container">
            <div class="gir2del-grid-2">
                <div>
                    <div class="gir2del-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and home setup service in Delhi NCR" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="gir2del-tag">Complete Destination Care</span>
                    <h2>Hassle-Free Unloading, Unpacking & Setup in Delhi NCR</h2>
                    <p>
                        A relocation is only half-finished when the truck arrives at your destination. Moving heavy cartons into upper floor apartments or assembling large modular wardrobes can quickly overwhelm a busy family. That is why Shree Ashirwad Packers and Movers provides full destination handling services in Delhi NCR.
                    </p>
                    <p>
                        Upon reaching your new home in Delhi NCR—whether it is located in South Delhi, Dwarka, Noida Sector 62, Greater Noida, or Gurgaon Golf Course Road—our team carefully unloads all articles, carries them up service elevators or staircases, and places each carton in its designated room.
                    </p>
                    <p>
                        Our skilled crew unpacks delicate dinnerware, reassembles double beds, positions large sofa sets, reattaches modular study desks, and clears away all leftover wrapping paper, shredded cardboard, and plastic rolls—leaving your new residence tidy and ready to live in.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Localities Covered -->
    <section class="gir2del-section gir2del-section-alt">
        <div class="gir2del-container">
            <div class="gir2del-sec-head">
                <span class="gir2del-tag">Coverage Area</span>
                <h2>Neighborhoods Covered Across Giridih and Delhi NCR</h2>
                <p>Door-to-door pickup and delivery across every residential colony, commercial market, and surrounding industrial township.</p>
            </div>

            <div class="gir2del-grid-2">
                <div class="gir2del-card">
                    <h3>Pickup Locations in Giridih District</h3>
                    <p>
                        Makatpur, Bada Chowk, Pachamba, Sirsia, Moti Nagar, Baniadih, Buxidih, Giridih Court & Collectorate Colony, New Barganda, Mohanpur, Bengabad Road, and Jamua bypass.
                    </p>
                </div>

                <div class="gir2del-card">
                    <h3>Delivery Locations in Delhi NCR</h3>
                    <p>
                        South Delhi (Saket, Hauz Khas, GK), West Delhi (Dwarka, Janakpuri), Noida (Sectors 50, 62, 137), Greater Noida, and Gurugram (DLF Phases 1-5, Cyber City, Golf Course Road, Sohna Road).
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section class="gir2del-section">
        <div class="gir2del-container">
            <div class="gir2del-sec-head">
                <span class="gir2del-tag">Helpful Answers</span>
                <h2>Frequently Asked Questions: Giridih to Delhi NCR Relocation</h2>
                <p>Have questions about packing safety, timelines, or billing? Find immediate answers below.</p>
            </div>

            <div style="max-width: 880px; margin: 0 auto;">
                <div class="gir2del-faq-item">
                    <h4>What is the typical transit duration from Giridih to Delhi NCR?</h4>
                    <p>
                        The highway distance between Giridih and Delhi NCR is approximately 1,180 kilometers via Dumri connecting to NH-19 (Grand Trunk Road), Varanasi, Prayagraj, Kanpur, and Agra via the Yamuna Expressway. Our dedicated GPS-tracked closed container trucks deliver within 38 to 48 hours directly to your doorstep.
                    </p>
                </div>

                <div class="gir2del-faq-item">
                    <h4>Do you deliver to Noida, Greater Noida, and Gurgaon / Gurugram?</h4>
                    <p>
                        Yes, our delivery network covers the entire National Capital Region including South Delhi (Saket, Vasant Kunj, GK), West Delhi (Dwarka, Janakpuri), Noida (Sectors 50, 62, 137), Greater Noida, and Gurugram (DLF Phases 1-5, Cyber City, Golf Course Road, Sohna Road).
                    </p>
                </div>

                <div class="gir2del-faq-item">
                    <h4>Do you provide transit insurance for long-distance moves?</h4>
                    <p>
                        Yes, we arrange comprehensive transit insurance through reputed national insurance providers covering accidental damage, vehicle overturn, fire, and catastrophic highway risks for complete peace of mind.
                    </p>
                </div>

                <div class="gir2del-faq-item">
                    <h4>How are fragile furniture and electronics safeguarded during transit?</h4>
                    <p>
                        We implement a strict 5-tier packaging protocol utilizing virgin bubble wrap, heavy corrugated sheets, high-density edge corner protectors, stretch film wrapping, and reinforced adhesive sealing to prevent road shock absorption.
                    </p>
                </div>

                <div class="gir2del-faq-item">
                    <h4>What is the approximate cost of moving a 2 BHK apartment from Giridih to Delhi NCR?</h4>
                    <p>
                        A standard 2 BHK household relocation from Giridih to Delhi NCR typically ranges between INR 24,000 and 38,000 depending on total volume, packing material grade, floor levels, and elevator accessibility at both premises.
                    </p>
                </div>
            </div>

            <!-- Call to Action Banner -->
            <div class="gir2del-cta-banner" id="gir2del-quote">
                <h3>Ready to Relocate from Giridih to Delhi NCR?</h3>
                <p>
                    Contact Shree Ashirwad Packers and Movers today for an instant free moving estimate. Experience prompt, professional shifting with verified intercity relocation experts.
                </p>
                <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                    <a href="tel:8409531615" class="gir2del-btn-primary" style="background: #f59e0b; color: #0f172a;">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                        Call 8409531615
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20relocation%20from%20Giridih%20to%20Delhi." class="gir2del-btn-outline" target="_blank" rel="noopener noreferrer">
                        Chat on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
