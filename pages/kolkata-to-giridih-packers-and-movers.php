<?php
/**
 * Page Name: Kolkata to Giridih Packers and Movers
 * Route Slug: kolkata-to-giridih-packers-and-movers
 * Description: Dependable interstate relocation, household shifting, corporate employee transfer billing, and enclosed car/bike transport from Kolkata to Giridih via NH-19 GT Road.
 * Focus Keywords: kolkata to giridih packers and movers, packers and movers kolkata to giridih, house shifting kolkata to giridih, car transport kolkata to giridih, bike parcel kolkata to giridih, movers from kolkata to giridih
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Kolkata to Giridih Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Top-rated Kolkata to Giridih packers and movers. 310 km via NH-19 GT Road, express delivery, 5-layer safety packaging, GST corporate claims, car & bike carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/kolkata-to-giridih-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="kolkata to giridih packers and movers, packers and movers kolkata to giridih, house shifting kolkata to giridih, car transport kolkata to giridih, bike parcel kolkata to giridih, movers from kolkata to giridih">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-WB">
    <meta name="geo.placename" content="Kolkata">

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

    <!-- Scoped CSS for Route 16 (Kolkata to Giridih) -->
    <style>
        :root {
            --kol2gir-primary: #1e3a5f;
            --kol2gir-secondary: #0284c7;
            --kol2gir-accent: #f59e0b;
            --kol2gir-accent-light: #fef3c7;
            --kol2gir-dark: #0f172a;
            --kol2gir-gray-bg: #f8fafc;
            --kol2gir-card-border: #e2e8f0;
            --kol2gir-text: #334155;
            --kol2gir-text-muted: #64748b;
            --kol2gir-radius: 12px;
            --kol2gir-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
            --kol2gir-shadow-hover: 0 20px 30px -10px rgba(2, 132, 199, 0.18);
        }

        .kol2gir-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.92) 0%, rgba(30, 58, 95, 0.88) 100%), url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 70px 20px 65px;
            position: relative;
        }

        .kol2gir-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .kol2gir-breadcrumbs {
            font-size: 0.9rem;
            color: #cbd5e1;
            margin-bottom: 20px;
        }

        .kol2gir-breadcrumbs a {
            color: var(--kol2gir-accent);
            text-decoration: none;
        }

        .kol2gir-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(245, 158, 11, 0.18);
            border: 1px solid rgba(245, 158, 11, 0.5);
            color: var(--kol2gir-accent);
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 0.88rem;
            font-weight: 600;
            margin-bottom: 18px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .kol2gir-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            line-height: 1.25;
            font-weight: 800;
            margin-bottom: 18px;
            color: #ffffff;
        }

        .kol2gir-hero p {
            font-size: 1.12rem;
            line-height: 1.7;
            max-width: 780px;
            color: #e2e8f0;
            margin-bottom: 28px;
        }

        .kol2gir-hero-cta {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .kol2gir-btn-primary {
            background: var(--kol2gir-accent);
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

        .kol2gir-btn-primary:hover {
            background: #d97706;
            transform: translateY(-2px);
            color: #ffffff;
        }

        .kol2gir-btn-outline {
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

        .kol2gir-btn-outline:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: #ffffff;
        }

        .kol2gir-quick-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
            margin-top: 40px;
        }

        .kol2gir-stat-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 18px 20px;
            border-radius: var(--kol2gir-radius);
        }

        .kol2gir-stat-num {
            font-family: 'Outfit', sans-serif;
            font-size: 1.85rem;
            font-weight: 800;
            color: var(--kol2gir-accent);
            margin-bottom: 4px;
        }

        .kol2gir-stat-lbl {
            font-size: 0.88rem;
            color: #cbd5e1;
        }

        .kol2gir-section {
            padding: 60px 0;
        }

        .kol2gir-section-alt {
            background-color: var(--kol2gir-gray-bg);
        }

        .kol2gir-sec-head {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 45px;
        }

        .kol2gir-tag {
            display: inline-block;
            background: rgba(2, 132, 199, 0.1);
            color: var(--kol2gir-secondary);
            font-size: 0.82rem;
            font-weight: 700;
            padding: 4px 14px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            margin-bottom: 12px;
        }

        .kol2gir-sec-head h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            color: var(--kol2gir-dark);
            font-weight: 800;
            line-height: 1.3;
            margin-bottom: 14px;
        }

        .kol2gir-sec-head p {
            color: var(--kol2gir-text-muted);
            font-size: 1.05rem;
            line-height: 1.65;
        }

        .kol2gir-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 35px;
            align-items: center;
        }

        .kol2gir-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .kol2gir-grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .kol2gir-card {
            background: #ffffff;
            border: 1px solid var(--kol2gir-card-border);
            border-radius: var(--kol2gir-radius);
            padding: 26px;
            box-shadow: var(--kol2gir-shadow);
            transition: all 0.3s ease;
        }

        .kol2gir-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--kol2gir-shadow-hover);
            border-color: rgba(2, 132, 199, 0.3);
        }

        .kol2gir-card-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: rgba(2, 132, 199, 0.12);
            color: var(--kol2gir-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 18px;
        }

        .kol2gir-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.3rem;
            color: var(--kol2gir-dark);
            margin-bottom: 12px;
            font-weight: 700;
        }

        .kol2gir-card p {
            color: var(--kol2gir-text);
            font-size: 0.95rem;
            line-height: 1.65;
        }

        .kol2gir-img-wrapper {
            border-radius: var(--kol2gir-radius);
            overflow: hidden;
            box-shadow: var(--kol2gir-shadow);
        }

        .kol2gir-img-wrapper img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .kol2gir-img-wrapper:hover img {
            transform: scale(1.03);
        }

        .kol2gir-table-box {
            background: #ffffff;
            border-radius: var(--kol2gir-radius);
            box-shadow: var(--kol2gir-shadow);
            overflow: hidden;
            border: 1px solid var(--kol2gir-card-border);
            margin: 25px 0;
        }

        .kol2gir-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .kol2gir-table th {
            background: var(--kol2gir-primary);
            color: #ffffff;
            font-family: 'Outfit', sans-serif;
            padding: 16px 20px;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .kol2gir-table td {
            padding: 14px 20px;
            border-bottom: 1px solid #f1f5f9;
            color: var(--kol2gir-text);
            font-size: 0.94rem;
        }

        .kol2gir-table tr:nth-child(even) {
            background: #f8fafc;
        }

        .kol2gir-route-info-box {
            background: #eff6ff;
            border-left: 4px solid var(--kol2gir-secondary);
            padding: 22px 24px;
            border-radius: 0 10px 10px 0;
            margin: 25px 0;
        }

        .kol2gir-route-info-box h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            color: var(--kol2gir-primary);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .kol2gir-faq-item {
            background: #ffffff;
            border: 1px solid var(--kol2gir-card-border);
            border-radius: var(--kol2gir-radius);
            padding: 20px 24px;
            margin-bottom: 16px;
            box-shadow: var(--kol2gir-shadow);
        }

        .kol2gir-faq-item h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.12rem;
            color: var(--kol2gir-dark);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .kol2gir-faq-item p {
            color: var(--kol2gir-text);
            font-size: 0.95rem;
            line-height: 1.65;
            margin: 0;
        }

        .kol2gir-cta-banner {
            background: linear-gradient(135deg, #1e3a5f 0%, #0f172a 100%);
            border-radius: 16px;
            padding: 50px 30px;
            text-align: center;
            color: #ffffff;
            margin-top: 50px;
            box-shadow: 0 15px 30px rgba(15, 23, 42, 0.2);
        }

        .kol2gir-cta-banner h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.1rem;
            font-weight: 800;
            margin-bottom: 14px;
        }

        .kol2gir-cta-banner p {
            font-size: 1.05rem;
            max-width: 680px;
            margin: 0 auto 25px;
            color: #cbd5e1;
            line-height: 1.65;
        }

        @media (max-width: 768px) {
            .kol2gir-hero h1 {
                font-size: 2.1rem;
            }
            .kol2gir-grid-2 {
                grid-template-columns: 1fr;
            }
            .kol2gir-table th, .kol2gir-table td {
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
      "name": "Shree Ashirwad Packers and Movers Kolkata to Giridih",
      "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
      "@id": "https://www.shreeashirwadpackers.com/#kolkata-to-giridih-packers",
      "url": "https://www.shreeashirwadpackers.com/kolkata-to-giridih-packers-and-movers",
      "telephone": "+91-8409531615",
      "priceRange": "INR 9,500 - 68,000",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Sector V, Salt Lake City",
        "addressLocality": "Kolkata",
        "addressRegion": "West Bengal",
        "postalCode": "700091",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 22.5726,
        "longitude": 88.3639
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
      "serviceType": "Interstate Relocation and Transportation Services",
      "provider": {
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers",
        "telephone": "+91-8409531615",
        "url": "https://www.shreeashirwadpackers.com"
      },
      "areaServed": [
        {
          "@type": "City",
          "name": "Kolkata, West Bengal"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Giridih, Jharkhand"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Kolkata to Giridih Relocation Services",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Household Relocation from Kolkata to Giridih"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Hometown Returning Families & Commercial Transfers"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Enclosed Car Carrier Shipping to Giridih"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Two-Wheeler Bike Parcel Express to Giridih"
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
          "name": "Kolkata to Giridih Packers and Movers",
          "item": "https://www.shreeashirwadpackers.com/kolkata-to-giridih-packers-and-movers"
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
          "name": "What is the typical transit duration from Kolkata to Giridih?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The highway distance between Kolkata and Giridih is approximately 310 kilometers via Dankuni, connecting directly to the 6-lane NH-19 (Grand Trunk Road) past Durgapur and Asansol, entering Giridih via Dumri or Tundi bypass. Our direct closed container trucks complete the door-to-door transit in roughly 7 to 8 hours, ensuring guaranteed same-day or 24-hour delivery."
          }
        },
        {
          "@type": "Question",
          "name": "Do you pick up from all areas across Kolkata and Howrah?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, our pickup network covers all zones of the Kolkata Metropolitan Area, including Salt Lake (Sectors I through V), New Town (Action Areas I, II, III), Rajarhat, Ballygunge, Alipore, Behala, Tollygunge, Jadavpur, Garia, Howrah, and Dum Dum."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide GST invoices for corporate transfer reimbursement in Kolkata?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we provide 100% compliant GST invoices, detailed item inventories, consignment notes (bilty), and stamped payment receipts accepted by leading IT firms, multinationals, PSUs, and banking corporations in Kolkata."
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
          "name": "What is the approximate cost of moving a 2 BHK apartment from Kolkata to Giridih?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A standard 2 BHK household relocation from Kolkata to Giridih typically ranges between INR 15,000 and 24,000 depending on volume, floor levels, packing material tier, and elevator accessibility at both locations."
          }
        }
      ]
    }
    </script>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <!-- Hero Section -->
    <header class="kol2gir-hero">
        <div class="kol2gir-container">
            <nav class="kol2gir-breadcrumbs" aria-label="breadcrumb">
                <a href="<?php echo SITE_BASE_URL; ?>/">Home</a> &raquo; 
                <a href="<?php echo SITE_BASE_URL; ?>/services">Intercity Routes</a> &raquo; 
                <span>Kolkata to Giridih</span>
            </nav>
            <div class="kol2gir-hero-badge">&#10004; Dedicated Interstate GT Road Express Corridor</div>
            <h1>Premier Kolkata to Giridih Packers and Movers</h1>
            <p>
                Professional intercity moving services from Kolkata, Salt Lake, and New Town to Giridih. Complete household shifting, corporate employee relocations, enclosed car carrier transit, and bike courier with guaranteed same-day delivery via the NH-19 expressway.
            </p>
            <div class="kol2gir-hero-cta">
                <a href="tel:8409531615" class="kol2gir-btn-primary">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                    Call: 8409531615
                </a>
                <a href="#kol2gir-quote" class="kol2gir-btn-outline">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Request Free Estimate
                </a>
            </div>

            <div class="kol2gir-quick-stats">
                <div class="kol2gir-stat-card">
                    <div class="kol2gir-stat-num">310 KM</div>
                    <div class="kol2gir-stat-lbl">Highway Distance via NH-19 GT Road</div>
                </div>
                <div class="kol2gir-stat-card">
                    <div class="kol2gir-stat-num">7-8 Hrs</div>
                    <div class="kol2gir-stat-lbl">Doorstep Express Delivery</div>
                </div>
                <div class="kol2gir-stat-card">
                    <div class="kol2gir-stat-num">100% Safe</div>
                    <div class="kol2gir-stat-lbl">Weatherproof Container Fleet</div>
                </div>
                <div class="kol2gir-stat-card">
                    <div class="kol2gir-stat-num">GST Approved</div>
                    <div class="kol2gir-stat-lbl">MNC & PSU Claim Billing</div>
                </div>
            </div>
        </div>
    </header>

    <!-- Overview Section -->
    <section class="kol2gir-section">
        <div class="kol2gir-container">
            <div class="kol2gir-grid-2">
                <div>
                    <span class="kol2gir-tag">Premier Interstate Logistics</span>
                    <h2>Fast & Safe Relocation from Kolkata Metropolis to Giridih Industrial Hub</h2>
                    <p>
                        The interstate corridor between Kolkata and Giridih spans approximately 310 kilometers, directly connecting Eastern India’s primary commercial, financial, and cultural metropolis with North Chota Nagpur’s prominent steel processing and mica trading center. Thousands of business executives, tech professionals, medical seekers, and students commute or relocate between these two powerhouse regions every year.
                    </p>
                    <p>
                        With immediate accessibility to the 6-lane National Highway 19 (Grand Trunk Road) at Dankuni, the highway journey to Giridih via Durgapur, Asansol, and Dumri is swift and well-paved. At Shree Ashirwad Packers and Movers, we specialize in seamless door-to-door interstate relocations between Kolkata and Giridih. Whether you are moving from a high-rise condominium in New Town, an apartment in Salt Lake Sector V, or a family residence in South Kolkata back to your native town in Giridih, we deliver an stress-free moving experience.
                    </p>
                    <p>
                        Our specialized crews bring heavy-duty packing supplies, professional dismantle-and-reassemble toolkits, and sealed container carriers directly to your Kolkata premises in Salt Lake, New Town, Rajarhat, Ballygunge, Alipore, or Behala. We pack, load, transport across the expressway safely, and unpack at your new home in Giridih within 7 to 8 hours.
                    </p>
                    <p>
                        Furthermore, our logistics coordinators maintain strict adherence to regional safety norms, providing itemized invoices compliant with corporate and public sector transfer reimbursement criteria.
                    </p>
                </div>
                <div>
                    <div class="kol2gir-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe transit container truck for Kolkata to Giridih relocation" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Highlights -->
    <section class="kol2gir-section kol2gir-section-alt">
        <div class="kol2gir-container">
            <div class="kol2gir-sec-head">
                <span class="kol2gir-tag">Dedicated Moving Solutions</span>
                <h2>Specialized Shifting Services: Kolkata to Giridih</h2>
                <p>Tailored moving services designed to handle family apartments, corporate suites, and vehicle transport.</p>
            </div>

            <div class="kol2gir-grid-3">
                <div class="kol2gir-card">
                    <div class="kol2gir-card-icon">&#127968;</div>
                    <h3>Complete Household Relocation</h3>
                    <p>
                        Comprehensive home shifting from 1 BHK to luxury duplexes. We pack, disassemble double beds and modular wardrobes, transport in covered containers, and reassemble everything at your Giridih home.
                    </p>
                </div>

                <div class="kol2gir-card">
                    <div class="kol2gir-card-icon">&#128187;</div>
                    <h3>Corporate & Returning Family Transfers</h3>
                    <p>
                        Specialized moving support for professionals moving from Kolkata to establish permanent homes in Giridih. We provide standardized billing and inventories for instant reimbursement approval.
                    </p>
                </div>

                <div class="kol2gir-card">
                    <div class="kol2gir-card-icon">&#127891;</div>
                    <h3>Student & Family Moving Packages</h3>
                    <p>
                        Economical and convenient partial-load and full-home shifting solutions for families moving household belongings safely across the state border.
                    </p>
                </div>

                <div class="kol2gir-card">
                    <div class="kol2gir-card-icon">&#128663;</div>
                    <h3>Door-to-Door Car Carrier</h3>
                    <p>
                        Secure car transport inside enclosed auto trailers. We transport hatchbacks, sedans, and SUVs from Kolkata to Giridih with wheel locks, protective bumper shields, and full transit insurance.
                    </p>
                </div>

                <div class="kol2gir-card">
                    <div class="kol2gir-card-icon">&#127949;</div>
                    <h3>Two-Wheeler Bike Courier</h3>
                    <p>
                        Bikes and scooters receive multi-layer wrapping with bubble sheets, corrugated cartons, and mirror padding. Fuel is drained to regulatory safety levels, battery terminals secured, and the vehicle is transported securely inside covered trucks.
                    </p>
                </div>

                <div class="kol2gir-card">
                    <div class="kol2gir-card-icon">&#128188;</div>
                    <h3>Commercial & Office Moving</h3>
                    <p>
                        Relocating business offices, retail merchandise, medical equipment, or IT workstations between Kolkata and Giridih. We deploy anti-static packaging, serial-numbered carton sealing, and systematic file archiving.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Packaging Standard Section -->
    <section class="kol2gir-section">
        <div class="kol2gir-container">
            <div class="kol2gir-grid-2">
                <div>
                    <div class="kol2gir-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="5 layer packing process for Kolkata to Giridih household shifting" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="kol2gir-tag">Protection Technology</span>
                    <h2>Engineered 5-Layer Packaging for Regional Highway Transit</h2>
                    <p>
                        The 310-kilometer highway connecting Kolkata to Giridih crosses active high-speed expressway corridors along NH-19. To eliminate all transit vibration and dust contamination, Shree Ashirwad adheres to an unyielding 5-layer packing methodology:
                    </p>
                    <ul style="color: var(--kol2gir-text); line-height: 1.8; padding-left: 20px; margin-bottom: 20px;">
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
    <section class="kol2gir-section kol2gir-section-alt">
        <div class="kol2gir-container">
            <div class="kol2gir-sec-head">
                <span class="kol2gir-tag">Transparent Tariff</span>
                <h2>Kolkata to Giridih Relocation Cost Estimates</h2>
                <p>Fair, itemized, and transparent pricing without hidden tolls or sudden fuel surcharges. Contact our team for an exact, tailored quotation.</p>
            </div>

            <div class="kol2gir-table-box">
                <table class="kol2gir-table">
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
                            <td>Express 24 Hrs</td>
                            <td>&#8377; 9,500 - &#8377; 15,000</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Flat / Full House Shifting</strong></td>
                            <td>Premium 5-Layer Protective</td>
                            <td>3 Packers + 3 Loaders</td>
                            <td>Express 24 Hrs</td>
                            <td>&#8377; 15,000 - &#8377; 24,000</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK / Executive Duplex Villa</strong></td>
                            <td>Super Heavy Bubble + Wooden Crates</td>
                            <td>4 Packers + 4 Loaders</td>
                            <td>Express 24-36 Hrs</td>
                            <td>&#8377; 23,000 - &#8377; 36,000</td>
                        </tr>
                        <tr>
                            <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                            <td>Corrugated Foam + Bubble Wrap</td>
                            <td>Loading & Lashing Included</td>
                            <td>24-48 Hours Delivery</td>
                            <td>&#8377; 3,000 - &#8377; 4,800</td>
                        </tr>
                        <tr>
                            <td><strong>Motor Car (Hatchback / Sedan)</strong></td>
                            <td>Enclosed Carrier Vehicle</td>
                            <td>Hydraulic Ramp Handling</td>
                            <td>24-48 Hours Delivery</td>
                            <td>&#8377; 7,500 - &#8377; 12,000</td>
                        </tr>
                        <tr>
                            <td><strong>IT Office / Corporate Lab Setup</strong></td>
                            <td>Custom Anti-Static Crates</td>
                            <td>Technical Moving Team</td>
                            <td>Scheduled Window</td>
                            <td>Custom Audit Basis</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="kol2gir-route-info-box">
                <h4>Route Blueprint: Kolkata to Giridih Highway Transit Details</h4>
                <p>
                    <strong>Transit Path:</strong> Kolkata (Salt Lake / New Town / South Kolkata) &rarr; Dankuni &rarr; Durgapur Expressway &rarr; Asansol &rarr; NH-19 (GT Road) &rarr; Dumri bypass &rarr; Giridih town center. Total distance is roughly 310 km. Dedicated covered container trucks ensure prompt transit within 7 to 8 hours.
                </p>
            </div>
        </div>
    </section>

    <!-- Vehicle Transport Section -->
    <section class="kol2gir-section">
        <div class="kol2gir-container">
            <div class="kol2gir-grid-2">
                <div>
                    <span class="kol2gir-tag">Vehicle Logistics</span>
                    <h2>Secure Two-Wheeler & Car Transport: Kolkata to Giridih</h2>
                    <p>
                        Driving personal vehicles between Kolkata and Giridih on the busy GT Road expressway among dense freight trucks can cause unnecessary tire wear and fatigue. Shree Ashirwad Packers and Movers provides a reliable, secure automotive carrier service.
                    </p>
                    <p>
                        Our specialized car transport trailers and enclosed single-vehicle carriers are equipped with safety winches, custom wheel locks, and soft bumper shields that ensure your vehicle stays completely stationary during the trip. Before loading at your Kolkata residence, our field supervisor conducts a thorough multi-point exterior inspection, recording tire treads, fuel levels, and existing scratches on a formal Vehicle Condition Sheet.
                    </p>
                    <p>
                        For motorcycles and sports bikes, we use heavy-duty corrugated sheet wrapping around fuel tanks, headlamps, and chrome mirrors, followed by thick bubble insulation. Vehicles are delivered clean and undamaged right at your doorstep in Giridih.
                    </p>
                </div>
                <div>
                    <div class="kol2gir-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transport carrier loading from Kolkata to Giridih" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="kol2gir-section kol2gir-section-alt">
        <div class="kol2gir-container">
            <div class="kol2gir-sec-head">
                <span class="kol2gir-tag">Service Advantages</span>
                <h2>Why Choose Shree Ashirwad for Kolkata to Giridih Moves</h2>
                <p>Reliable local operations, certified moving crews, and an unwavering focus on customer satisfaction.</p>
            </div>

            <div class="kol2gir-grid-4">
                <div class="kol2gir-card">
                    <div class="kol2gir-card-icon">&#9989;</div>
                    <h3>Trained In-House Staff</h3>
                    <p>We never use untrained daily wage contractors. Our permanent crew has mastered delicate furniture handling, electronics packing, and staircase maneuvering.</p>
                </div>

                <div class="kol2gir-card">
                    <div class="kol2gir-card-icon">&#128337;</div>
                    <h3>Express 24-Hr Delivery</h3>
                    <p>Covering the 310 km distance along NH-19 in just 7 to 8 hours, our dedicated container trucks deliver swiftly with minimum waiting time for your family.</p>
                </div>

                <div class="kol2gir-card">
                    <div class="kol2gir-card-icon">&#128176;</div>
                    <h3>Zero Hidden Costs</h3>
                    <p>Transparent written price quotations detailing toll charges, loading, unloading, packing supplies, and transit logistics with 100% upfront clarity.</p>
                </div>

                <div class="kol2gir-card">
                    <div class="kol2gir-card-icon">&#128221;</div>
                    <h3>Government Claim Invoices</h3>
                    <p>Full GST billing, computer-generated packing inventories, consignment notes, and stamped invoices compliant with MNC, Corporate, and PSU transfer norms.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Unpacking and Setup Section -->
    <section class="kol2gir-section">
        <div class="kol2gir-container">
            <div class="kol2gir-grid-2">
                <div>
                    <div class="kol2gir-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and home setup service in Giridih" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="kol2gir-tag">Complete Destination Care</span>
                    <h2>Hassle-Free Unloading, Unpacking & Setup in Giridih</h2>
                    <p>
                        A relocation is only half-finished when the truck arrives at your destination. Moving heavy cartons into upper floor apartments or assembling large modular wardrobes can quickly overwhelm a busy family. That is why Shree Ashirwad Packers and Movers provides full destination handling services in Giridih.
                    </p>
                    <p>
                        Upon reaching your new home in Giridih—whether it is located in Makatpur, Bada Chowk, Pachamba, Sirsia, or near Giridih Court—our team carefully unloads all articles, carries them up elevators or staircases, and places each carton in its designated room.
                    </p>
                    <p>
                        Our skilled crew unpacks delicate dinnerware, reassembles double beds, positions large sofa sets, reattaches modular study desks, and clears away all leftover wrapping paper, shredded cardboard, and plastic rolls—leaving your new residence tidy and ready to live in.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Localities Covered -->
    <section class="kol2gir-section kol2gir-section-alt">
        <div class="kol2gir-container">
            <div class="kol2gir-sec-head">
                <span class="kol2gir-tag">Coverage Area</span>
                <h2>Neighborhoods Covered Across Kolkata and Giridih</h2>
                <p>Door-to-door pickup and delivery across every residential colony, commercial market, and surrounding industrial township.</p>
            </div>

            <div class="kol2gir-grid-2">
                <div class="kol2gir-card">
                    <h3>Pickup Locations in Kolkata Metropolitan Area</h3>
                    <p>
                        Salt Lake (Sectors I, II, III, IV, V), New Town (Action Areas I, II, III), Rajarhat, Ballygunge, Alipore, Behala, Tollygunge, Jadavpur, Garia, Howrah, and Dum Dum.
                    </p>
                </div>

                <div class="kol2gir-card">
                    <h3>Delivery Locations in Giridih District</h3>
                    <p>
                        Makatpur, Bada Chowk, Pachamba, Sirsia, Moti Nagar, Baniadih, Buxidih, Giridih Court & Collectorate Colony, New Barganda, Mohanpur, Bengabad Road, and Jamua bypass.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section class="kol2gir-section">
        <div class="kol2gir-container">
            <div class="kol2gir-sec-head">
                <span class="kol2gir-tag">Helpful Answers</span>
                <h2>Frequently Asked Questions: Kolkata to Giridih Relocation</h2>
                <p>Have questions about packing safety, timelines, or billing? Find immediate answers below.</p>
            </div>

            <div style="max-width: 880px; margin: 0 auto;">
                <div class="kol2gir-faq-item">
                    <h4>What is the typical transit duration from Kolkata to Giridih?</h4>
                    <p>
                        The highway distance between Kolkata and Giridih is approximately 310 kilometers via Dankuni, connecting directly to the 6-lane NH-19 (Grand Trunk Road) past Durgapur and Asansol, entering Giridih via Dumri or Tundi bypass. Our direct closed container trucks complete the door-to-door transit in roughly 7 to 8 hours, ensuring guaranteed same-day or 24-hour delivery.
                    </p>
                </div>

                <div class="kol2gir-faq-item">
                    <h4>Do you pick up from all areas across Kolkata and Howrah?</h4>
                    <p>
                        Yes, our pickup network covers all zones of the Kolkata Metropolitan Area, including Salt Lake (Sectors I through V), New Town (Action Areas I, II, III), Rajarhat, Ballygunge, Alipore, Behala, Tollygunge, Jadavpur, Garia, Howrah, and Dum Dum.
                    </p>
                </div>

                <div class="kol2gir-faq-item">
                    <h4>Do you provide GST invoices for corporate transfer reimbursement in Kolkata?</h4>
                    <p>
                        Yes, we provide 100% compliant GST invoices, detailed item inventories, consignment notes (bilty), and stamped payment receipts accepted by leading IT firms, multinationals, PSUs, and banking corporations in Kolkata.
                    </p>
                </div>

                <div class="kol2gir-faq-item">
                    <h4>How are fragile furniture and electronics safeguarded during transit?</h4>
                    <p>
                        We implement a strict 5-tier packaging protocol utilizing virgin bubble wrap, heavy corrugated sheets, high-density edge corner protectors, stretch film wrapping, and reinforced adhesive sealing to prevent road shock absorption.
                    </p>
                </div>

                <div class="kol2gir-faq-item">
                    <h4>What is the approximate cost of moving a 2 BHK apartment from Kolkata to Giridih?</h4>
                    <p>
                        A standard 2 BHK household relocation from Kolkata to Giridih typically ranges between INR 15,000 and 24,000 depending on volume, floor levels, packing material tier, and elevator accessibility at both locations.
                    </p>
                </div>
            </div>

            <!-- Call to Action Banner -->
            <div class="kol2gir-cta-banner" id="kol2gir-quote">
                <h3>Ready to Relocate from Kolkata to Giridih?</h3>
                <p>
                    Contact Shree Ashirwad Packers and Movers today for an instant free moving estimate. Experience prompt, professional shifting with verified intercity relocation experts.
                </p>
                <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                    <a href="tel:8409531615" class="kol2gir-btn-primary" style="background: #f59e0b; color: #0f172a;">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                        Call 8409531615
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20relocation%20from%20Kolkata%20to%20Giridih." class="kol2gir-btn-outline" target="_blank" rel="noopener noreferrer">
                        Chat on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
