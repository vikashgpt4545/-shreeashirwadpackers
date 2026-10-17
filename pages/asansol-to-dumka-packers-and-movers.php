<?php
/**
 * Page Name: Asansol to Dumka Packers and Movers
 * Route Slug: asansol-to-dumka-packers-and-movers
 * Description: Dependable intercity relocation, household shifting, SAIL IISCO Burnpur staff moves, ECL colliery transfers, and vehicle transport from Asansol (West Bengal) to Dumka.
 * Focus Keywords: asansol to dumka packers and movers, packers and movers asansol to dumka, house shifting asansol to dumka, car transport asansol to dumka, bike parcel asansol to dumka, sail iisco burnpur to dumka movers
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Asansol to Dumka Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Fast & safe Asansol to Dumka packers and movers. 110 km transit, same-day delivery, 5-layer packing, SAIL IISCO & ECL transfer billing, car & bike shipping. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/asansol-to-dumka-packers-and-movers";
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
    <meta name="geo.region" content="IN-WB">
    <meta name="geo.placename" content="Asansol">

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

    <!-- Scoped CSS for Route 20 (Asansol to Dumka) -->
    <style>
        :root {
            --asn2dum-primary: #1e3a5f;
            --asn2dum-secondary: #0284c7;
            --asn2dum-accent: #f59e0b;
            --asn2dum-accent-light: #fef3c7;
            --asn2dum-dark: #0f172a;
            --asn2dum-gray-bg: #f8fafc;
            --asn2dum-card-border: #e2e8f0;
            --asn2dum-text: #334155;
            --asn2dum-text-muted: #64748b;
            --asn2dum-radius: 12px;
            --asn2dum-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
            --asn2dum-shadow-hover: 0 20px 30px -10px rgba(2, 132, 199, 0.18);
        }

        .asn2dum-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.92) 0%, rgba(30, 58, 95, 0.88) 100%), url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 70px 20px 65px;
            position: relative;
        }

        .asn2dum-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .asn2dum-breadcrumbs {
            font-size: 0.9rem;
            color: #cbd5e1;
            margin-bottom: 20px;
        }

        .asn2dum-breadcrumbs a {
            color: var(--asn2dum-accent);
            text-decoration: none;
        }

        .asn2dum-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(245, 158, 11, 0.18);
            border: 1px solid rgba(245, 158, 11, 0.5);
            color: var(--asn2dum-accent);
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 0.88rem;
            font-weight: 600;
            margin-bottom: 18px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .asn2dum-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            line-height: 1.25;
            font-weight: 800;
            margin-bottom: 18px;
            color: #ffffff;
        }

        .asn2dum-hero p {
            font-size: 1.12rem;
            line-height: 1.7;
            max-width: 780px;
            color: #e2e8f0;
            margin-bottom: 28px;
        }

        .asn2dum-hero-cta {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .asn2dum-btn-primary {
            background: var(--asn2dum-accent);
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

        .asn2dum-btn-primary:hover {
            background: #d97706;
            transform: translateY(-2px);
            color: #ffffff;
        }

        .asn2dum-btn-outline {
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

        .asn2dum-btn-outline:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: #ffffff;
        }

        .asn2dum-quick-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
            margin-top: 40px;
        }

        .asn2dum-stat-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 18px 20px;
            border-radius: var(--asn2dum-radius);
        }

        .asn2dum-stat-num {
            font-family: 'Outfit', sans-serif;
            font-size: 1.85rem;
            font-weight: 800;
            color: var(--asn2dum-accent);
            margin-bottom: 4px;
        }

        .asn2dum-stat-lbl {
            font-size: 0.88rem;
            color: #cbd5e1;
        }

        .asn2dum-section {
            padding: 60px 0;
        }

        .asn2dum-section-alt {
            background-color: var(--asn2dum-gray-bg);
        }

        .asn2dum-sec-head {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 45px;
        }

        .asn2dum-tag {
            display: inline-block;
            background: rgba(2, 132, 199, 0.1);
            color: var(--asn2dum-secondary);
            font-size: 0.82rem;
            font-weight: 700;
            padding: 4px 14px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            margin-bottom: 12px;
        }

        .asn2dum-sec-head h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            color: var(--asn2dum-dark);
            font-weight: 800;
            line-height: 1.3;
            margin-bottom: 14px;
        }

        .asn2dum-sec-head p {
            color: var(--asn2dum-text-muted);
            font-size: 1.05rem;
            line-height: 1.65;
        }

        .asn2dum-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 35px;
            align-items: center;
        }

        .asn2dum-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .asn2dum-grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .asn2dum-card {
            background: #ffffff;
            border: 1px solid var(--asn2dum-card-border);
            border-radius: var(--asn2dum-radius);
            padding: 26px;
            box-shadow: var(--asn2dum-shadow);
            transition: all 0.3s ease;
        }

        .asn2dum-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--asn2dum-shadow-hover);
            border-color: rgba(2, 132, 199, 0.3);
        }

        .asn2dum-card-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: rgba(2, 132, 199, 0.12);
            color: var(--asn2dum-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 18px;
        }

        .asn2dum-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.3rem;
            color: var(--asn2dum-dark);
            margin-bottom: 12px;
            font-weight: 700;
        }

        .asn2dum-card p {
            color: var(--asn2dum-text);
            font-size: 0.95rem;
            line-height: 1.65;
        }

        .asn2dum-img-wrapper {
            border-radius: var(--asn2dum-radius);
            overflow: hidden;
            box-shadow: var(--asn2dum-shadow);
        }

        .asn2dum-img-wrapper img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .asn2dum-img-wrapper:hover img {
            transform: scale(1.03);
        }

        .asn2dum-table-box {
            background: #ffffff;
            border-radius: var(--asn2dum-radius);
            box-shadow: var(--asn2dum-shadow);
            overflow: hidden;
            border: 1px solid var(--asn2dum-card-border);
            margin: 25px 0;
        }

        .asn2dum-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .asn2dum-table th {
            background: var(--asn2dum-primary);
            color: #ffffff;
            font-family: 'Outfit', sans-serif;
            padding: 16px 20px;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .asn2dum-table td {
            padding: 14px 20px;
            border-bottom: 1px solid #f1f5f9;
            color: var(--asn2dum-text);
            font-size: 0.94rem;
        }

        .asn2dum-table tr:nth-child(even) {
            background: #f8fafc;
        }

        .asn2dum-route-info-box {
            background: #eff6ff;
            border-left: 4px solid var(--asn2dum-secondary);
            padding: 22px 24px;
            border-radius: 0 10px 10px 0;
            margin: 25px 0;
        }

        .asn2dum-route-info-box h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            color: var(--asn2dum-primary);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .asn2dum-faq-item {
            background: #ffffff;
            border: 1px solid var(--asn2dum-card-border);
            border-radius: var(--asn2dum-radius);
            padding: 20px 24px;
            margin-bottom: 16px;
            box-shadow: var(--asn2dum-shadow);
        }

        .asn2dum-faq-item h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.12rem;
            color: var(--asn2dum-dark);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .asn2dum-faq-item p {
            color: var(--asn2dum-text);
            font-size: 0.95rem;
            line-height: 1.65;
            margin: 0;
        }

        .asn2dum-cta-banner {
            background: linear-gradient(135deg, #1e3a5f 0%, #0f172a 100%);
            border-radius: 16px;
            padding: 50px 30px;
            text-align: center;
            color: #ffffff;
            margin-top: 50px;
            box-shadow: 0 15px 30px rgba(15, 23, 42, 0.2);
        }

        .asn2dum-cta-banner h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.1rem;
            font-weight: 800;
            margin-bottom: 14px;
        }

        .asn2dum-cta-banner p {
            font-size: 1.05rem;
            max-width: 680px;
            margin: 0 auto 25px;
            color: #cbd5e1;
            line-height: 1.65;
        }

        @media (max-width: 768px) {
            .asn2dum-hero h1 {
                font-size: 2.1rem;
            }
            .asn2dum-grid-2 {
                grid-template-columns: 1fr;
            }
            .asn2dum-table th, .asn2dum-table td {
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
      "name": "Shree Ashirwad Packers and Movers Asansol to Dumka",
      "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
      "@id": "https://www.shreeashirwadpackers.com/#asansol-to-dumka-packers",
      "url": "https://www.shreeashirwadpackers.com/asansol-to-dumka-packers-and-movers",
      "telephone": "+91-8409531615",
      "priceRange": "INR 5,500 - 50,000",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "GT Road, Near Asansol Court",
        "addressLocality": "Asansol",
        "addressRegion": "West Bengal",
        "postalCode": "713304",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 23.6889,
        "longitude": 86.9661
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
      "serviceType": "Intercity Relocation and Cargo Transportation",
      "provider": {
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers",
        "telephone": "+91-8409531615",
        "url": "https://www.shreeashirwadpackers.com"
      },
      "areaServed": [
        {
          "@type": "AdministrativeArea",
          "name": "Asansol, West Bengal"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Dumka, Jharkhand"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Asansol to Dumka Moving Services",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Household Relocation from Asansol to Dumka"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "SAIL IISCO Burnpur Staff Relocation to Dumka"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Eastern Railway & Colliery Officer Transfers"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Two-Wheeler and Car Carrier Shipping to Dumka"
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
          "name": "Asansol to Dumka Packers and Movers",
          "item": "https://www.shreeashirwadpackers.com/asansol-to-dumka-packers-and-movers"
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
          "name": "What is the typical transit duration between Asansol and Dumka?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The highway distance between Asansol and Dumka is approximately 110 kilometers. Our direct closed container vehicles complete the doorstep journey in just 3 to 4 hours, guaranteeing prompt same-day delivery."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide moving assistance for SAIL IISCO employees from Burnpur to Dumka?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we regularly assist Steel Authority of India (SAIL IISCO) employees, engineers, and retirees moving from Burnpur, Riverside township, and Asansol colonies to Dumka. We supply 100% compliant GST invoices, detailed itemized inventories, and bills for official employer reimbursement."
          }
        },
        {
          "@type": "Question",
          "name": "Can you handle pickups from Raniganj, Kalla, and Neamatpur around Asansol?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Absolutely. We offer complete pickup coverage across the entire Asansol urban agglomeration, including Burnpur, Ushagram, Kalla, Chelidanga, Sen Raleigh Road, Asansol Court, Neamatpur, Kulti, Raniganj, and Jamuria."
          }
        },
        {
          "@type": "Question",
          "name": "How do you protect household furniture across the Bengal-Jharkhand highway?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We implement a strict 5-tier packaging protocol utilizing virgin bubble wrap, heavy corrugated sheets, high-density edge corner protectors, stretch film wrapping, and reinforced adhesive sealing to prevent road shock absorption."
          }
        },
        {
          "@type": "Question",
          "name": "What is the approximate cost of shifting a 2 BHK apartment from Asansol to Dumka?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A standard 2 BHK household relocation from Asansol to Dumka typically ranges between INR 11,500 and 18,500 depending on volume, floor levels, packing material tier, and elevator accessibility at both locations."
          }
        }
      ]
    }
    </script>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <!-- Hero Section -->
    <header class="asn2dum-hero">
        <div class="asn2dum-container">
            <nav class="asn2dum-breadcrumbs" aria-label="breadcrumb">
                <a href="<?php echo SITE_BASE_URL; ?>/">Home</a> &raquo; 
                <a href="<?php echo SITE_BASE_URL; ?>/services">Intercity Routes</a> &raquo; 
                <span>Asansol to Dumka</span>
            </nav>
            <div class="asn2dum-hero-badge">&#10004; Dedicated Bengal to Jharkhand Corridor Movers</div>
            <h1>Reliable Asansol to Dumka Packers and Movers</h1>
            <p>
                Fast, professional intercity relocation from Asansol (West Bengal) to Dumka (Jharkhand). Complete household shifting, SAIL IISCO Burnpur transfer billing, Eastern Railway officer moves, enclosed car carrier transit, and bike courier with same-day doorstep delivery.
            </p>
            <div class="asn2dum-hero-cta">
                <a href="tel:8409531615" class="asn2dum-btn-primary">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                    Call: 8409531615
                </a>
                <a href="#asn2dum-quote" class="asn2dum-btn-outline">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Request Free Estimate
                </a>
            </div>

            <div class="asn2dum-quick-stats">
                <div class="asn2dum-stat-card">
                    <div class="asn2dum-stat-num">110 KM</div>
                    <div class="asn2dum-stat-lbl">Direct Highway Distance</div>
                </div>
                <div class="asn2dum-stat-card">
                    <div class="asn2dum-stat-num">3-4 Hrs</div>
                    <div class="asn2dum-stat-lbl">Same-Day Transit Time</div>
                </div>
                <div class="asn2dum-stat-card">
                    <div class="asn2dum-stat-num">100% Safe</div>
                    <div class="asn2dum-stat-lbl">Dedicated Container Trucks</div>
                </div>
                <div class="asn2dum-stat-card">
                    <div class="asn2dum-stat-num">GST Claim</div>
                    <div class="asn2dum-stat-lbl">SAIL & Railway Transfer Bills</div>
                </div>
            </div>
        </div>
    </header>

    <!-- Overview Section -->
    <section class="asn2dum-section">
        <div class="asn2dum-container">
            <div class="asn2dum-grid-2">
                <div>
                    <span class="asn2dum-tag">Premier Regional Logistics</span>
                    <h2>Fast & Safe Relocation from Asansol Industrial Hub to Dumka</h2>
                    <p>
                        The intercity corridor between Asansol in West Bengal and Dumka in Jharkhand spans roughly 110 kilometers, directly linking Bengal's major industrial and railway junction with the Santhal Pargana sub-capital. Asansol hosts the landmark SAIL IISCO Steel Plant at Burnpur, Eastern Railway Divisional Headquarters, ECL colliery hubs in Sitarampur and Raniganj, and bustling commercial districts. Dumka serves as the divisional administrative center of Santhal Pargana, hosting regional courts, government complexes, and educational institutions.
                    </p>
                    <p>
                        At Shree Ashirwad Packers and Movers, we handle regular household, industrial, and vehicle relocations between Asansol and Dumka. Whether you are a steel plant engineer moving from Burnpur, a railway official transferring to Dumka junction, a business trader, or a family relocating permanently to Rasikpur or Dudhani, we guarantee an efficient, same-day moving experience.
                    </p>
                    <p>
                        Our specialized crews bring heavy-duty packing supplies, professional dismantle-and-reassemble toolkits, and sealed container carriers directly to your Asansol premises—whether in Burnpur, Ushagram, Sen Raleigh Road, Chelidanga, Kalla, or Raniganj. We pack, load, cross the state border safely, and deliver to your new home in Dumka within 3 to 4 hours.
                    </p>
                    <p>
                        Our logistical expertise ensures complete adherence to interstate transport regulations, compliant commercial tax documentation, and dedicated destination handling so your family enjoys a smooth, pleasant transition.
                    </p>
                </div>
                <div>
                    <div class="asn2dum-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe transit container truck for Asansol to Dumka relocation" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Highlights -->
    <section class="asn2dum-section asn2dum-section-alt">
        <div class="asn2dum-container">
            <div class="asn2dum-sec-head">
                <span class="asn2dum-tag">Dedicated Moving Solutions</span>
                <h2>Specialized Shifting Services: Asansol to Dumka</h2>
                <p>Tailored logistics designed to handle family apartments, industrial transfers, mining quarters, and delicate vehicle shipments.</p>
            </div>

            <div class="asn2dum-grid-3">
                <div class="asn2dum-card">
                    <div class="asn2dum-card-icon">&#127968;</div>
                    <h3>Complete Household Relocation</h3>
                    <p>
                        Comprehensive home shifting from 1 BHK to luxury duplexes. We pack, disassemble double beds and modular wardrobes, transport in covered containers, and reassemble everything at your Dumka home.
                    </p>
                </div>

                <div class="asn2dum-card">
                    <div class="asn2dum-card-icon">&#9874;</div>
                    <h3>SAIL IISCO Burnpur Staff Moves</h3>
                    <p>
                        Seamless moving assistance for Steel Authority of India Limited employees relocating to Dumka. We provide standardized billing and inventories for instant reimbursement approval.
                    </p>
                </div>

                <div class="asn2dum-card">
                    <div class="asn2dum-card-icon">&#128646;</div>
                    <h3>Railway & ECL Colliery Transfers</h3>
                    <p>
                        Complete documentation and logistics support for Eastern Railway and Eastern Coalfields Limited personnel moving from Asansol division to Dumka.
                    </p>
                </div>

                <div class="asn2dum-card">
                    <div class="asn2dum-card-icon">&#128663;</div>
                    <h3>Door-to-Door Car Carrier</h3>
                    <p>
                        Secure car transport inside enclosed auto trailers. We transport hatchbacks, sedans, and SUVs from Asansol to Dumka with wheel locks, protective bumper shields, and full transit insurance.
                    </p>
                </div>

                <div class="asn2dum-card">
                    <div class="asn2dum-card-icon">&#127949;</div>
                    <h3>Two-Wheeler Bike Courier</h3>
                    <p>
                        Bikes and scooters receive multi-layer wrapping with bubble sheets, corrugated cartons, and mirror padding. Fuel is drained to regulatory safety levels, battery terminals secured, and the vehicle is transported securely inside covered trucks.
                    </p>
                </div>

                <div class="asn2dum-card">
                    <div class="asn2dum-card-icon">&#128188;</div>
                    <h3>Commercial & Office Shifting</h3>
                    <p>
                        Relocating business offices, retail merchandise, medical equipment, or IT workstations between Asansol and Dumka. We deploy anti-static packaging, serial-numbered carton sealing, and systematic file archiving.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Packaging Standard Section -->
    <section class="asn2dum-section">
        <div class="asn2dum-container">
            <div class="asn2dum-grid-2">
                <div>
                    <div class="asn2dum-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="5 layer packing process for Asansol to Dumka household shifting" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="asn2dum-tag">Protection Technology</span>
                    <h2>Engineered 5-Layer Packaging for Border Highway Transit</h2>
                    <p>
                        The 110-kilometer highway connecting Asansol to Dumka crosses state boundary roads and industrial routes. To eliminate transit vibration and dust contamination, Shree Ashirwad adheres to an unyielding 5-layer packing methodology:
                    </p>
                    <ul style="color: var(--asn2dum-text); line-height: 1.8; padding-left: 20px; margin-bottom: 20px;">
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
    <section class="asn2dum-section asn2dum-section-alt">
        <div class="asn2dum-container">
            <div class="asn2dum-sec-head">
                <span class="asn2dum-tag">Transparent Tariff</span>
                <h2>Asansol to Dumka Relocation Cost Estimates</h2>
                <p>Fair, itemized, and transparent pricing without hidden tolls or sudden fuel surcharges. Contact our team for an exact, tailored quotation.</p>
            </div>

            <div class="asn2dum-table-box">
                <table class="asn2dum-table">
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
                            <td><strong>1 BHK Apartment / Railway Quarter</strong></td>
                            <td>Standard 3-Layer Corrugated</td>
                            <td>2 Packers + 2 Loaders</td>
                            <td>Same Day (3 - 4 Hrs)</td>
                            <td>&#8377; 7,000 - &#8377; 11,500</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Flat / Full House Shifting</strong></td>
                            <td>Premium 5-Layer Protective</td>
                            <td>3 Packers + 3 Loaders</td>
                            <td>Same Day (3 - 4 Hrs)</td>
                            <td>&#8377; 11,500 - &#8377; 18,500</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK / Executive Duplex Villa</strong></td>
                            <td>Super Heavy Bubble + Wooden Crates</td>
                            <td>4 Packers + 4 Loaders</td>
                            <td>Same Day (4 - 5 Hrs)</td>
                            <td>&#8377; 18,000 - &#8377; 27,000</td>
                        </tr>
                        <tr>
                            <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                            <td>Corrugated Foam + Bubble Wrap</td>
                            <td>Loading & Lashing Included</td>
                            <td>24 Hours Delivery</td>
                            <td>&#8377; 2,500 - &#8377; 4,000</td>
                        </tr>
                        <tr>
                            <td><strong>Motor Car (Hatchback / Sedan)</strong></td>
                            <td>Enclosed Carrier Vehicle</td>
                            <td>Hydraulic Ramp Handling</td>
                            <td>Same Day Delivery</td>
                            <td>&#8377; 5,500 - &#8377; 9,000</td>
                        </tr>
                        <tr>
                            <td><strong>SAIL / Industrial Lab & Office</strong></td>
                            <td>Custom Anti-Static Crates</td>
                            <td>Technical Moving Team</td>
                            <td>Scheduled Window</td>
                            <td>Custom Audit Basis</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="asn2dum-route-info-box">
                <h4>Route Blueprint: Asansol to Dumka Intercity Highway Details</h4>
                <p>
                    <strong>Transit Path:</strong> Asansol / Burnpur &rarr; GT Road &rarr; Neamatpur &rarr; Chittaranjan / Rupnarayanpur &rarr; Pattabari / Shikaripara &rarr; Dumka Bypass &rarr; Rasikpur / Dudhani. Total distance is roughly 110 km. Dedicated covered container trucks ensure prompt same-day transit within 3 to 4 hours.
                </p>
            </div>
        </div>
    </section>

    <!-- Vehicle Transport Section -->
    <section class="asn2dum-section">
        <div class="asn2dum-container">
            <div class="asn2dum-grid-2">
                <div>
                    <span class="asn2dum-tag">Vehicle Logistics</span>
                    <h2>Secure Two-Wheeler & Car Transport: Asansol to Dumka</h2>
                    <p>
                        Driving personal vehicles between Asansol and Dumka during heavy commercial traffic or bad weather can be risky. Shree Ashirwad Packers and Movers offers dedicated, secure automotive carrier solutions for bikes, scooters, family hatchbacks, luxury sedans, and SUVs.
                    </p>
                    <p>
                        Our specialized car transport trailers and enclosed single-vehicle carriers are equipped with safety winches, custom wheel locks, and soft bumper shields that ensure your vehicle stays completely stationary during the trip. Before loading at your Asansol residence, our field supervisor conducts a thorough multi-point exterior inspection.
                    </p>
                    <p>
                        For motorcycles and sports bikes, we use heavy-duty corrugated sheet wrapping around fuel tanks, headlamps, and chrome mirrors, followed by thick bubble insulation. Vehicles are delivered clean and undamaged right at your doorstep in Dumka.
                    </p>
                </div>
                <div>
                    <div class="asn2dum-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transport carrier loading from Asansol to Dumka" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="asn2dum-section asn2dum-section-alt">
        <div class="asn2dum-container">
            <div class="asn2dum-sec-head">
                <span class="asn2dum-tag">Service Advantages</span>
                <h2>Why Choose Shree Ashirwad for Asansol to Dumka Moves</h2>
                <p>Reliable local operations, certified moving crews, and an unwavering focus on customer satisfaction.</p>
            </div>

            <div class="asn2dum-grid-4">
                <div class="asn2dum-card">
                    <div class="asn2dum-card-icon">&#9989;</div>
                    <h3>Trained In-House Staff</h3>
                    <p>We never use untrained daily wage contractors. Our permanent crew has mastered delicate furniture handling, electronics packing, and staircase maneuvering.</p>
                </div>

                <div class="asn2dum-card">
                    <div class="asn2dum-card-icon">&#128337;</div>
                    <h3>Same-Day Delivery</h3>
                    <p>Because the Asansol-Dumka distance is just 110 km, our dedicated trucks load in the morning and deliver to Dumka by early afternoon on the very same day.</p>
                </div>

                <div class="asn2dum-card">
                    <div class="asn2dum-card-icon">&#128176;</div>
                    <h3>Zero Hidden Costs</h3>
                    <p>Transparent written price quotations detailing toll charges, loading, unloading, packing supplies, and transit logistics with 100% upfront clarity.</p>
                </div>

                <div class="asn2dum-card">
                    <div class="asn2dum-card-icon">&#128221;</div>
                    <h3>Government Claim Invoices</h3>
                    <p>Full GST billing, computer-generated packing inventories, consignment notes, and stamped invoices compliant with SAIL, Railway, and PSU transfer norms.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Unpacking and Setup Section -->
    <section class="asn2dum-section">
        <div class="asn2dum-container">
            <div class="asn2dum-grid-2">
                <div>
                    <div class="asn2dum-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and home setup service in Dumka" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="asn2dum-tag">Complete Destination Care</span>
                    <h2>Hassle-Free Unloading, Unpacking & Setup in Dumka</h2>
                    <p>
                        A relocation is only half-finished when the truck arrives at your destination. Moving heavy cartons into upper floor apartments or assembling large modular wardrobes can quickly overwhelm a busy family. That is why Shree Ashirwad Packers and Movers provides full destination handling services in Dumka.
                    </p>
                    <p>
                        Upon reaching your new home in Dumka—whether it is located in Tinghar, Rasikpur, Dudhani, Bandhdih, or near the SP College Road—our team carefully unloads all articles, carries them up elevators or staircases, and places each carton in its designated room.
                    </p>
                    <p>
                        Our skilled crew unpacks delicate dinnerware, reassembles double beds, positions large sofa sets, reattaches modular study desks, and clears away all leftover wrapping paper, shredded cardboard, and plastic rolls—leaving your new residence tidy and ready to live in.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Localities Covered -->
    <section class="asn2dum-section asn2dum-section-alt">
        <div class="asn2dum-container">
            <div class="asn2dum-sec-head">
                <span class="asn2dum-tag">Coverage Area</span>
                <h2>Neighborhoods Covered Across Asansol and Dumka</h2>
                <p>Door-to-door pickup and delivery across every residential colony, commercial market, and surrounding industrial township.</p>
            </div>

            <div class="asn2dum-grid-2">
                <div class="asn2dum-card">
                    <h3>Pickup Locations in Asansol Urban Area</h3>
                    <p>
                        Burnpur (Riverside & IISCO Township), Ushagram, Sen Raleigh Road, Chelidanga, Kalla, Asansol Court, Hutton Road, Neamatpur, Kulti, Raniganj, Jamuria, Domohani, and GT Road residential zones.
                    </p>
                </div>

                <div class="asn2dum-card">
                    <h3>Delivery Locations in Dumka District</h3>
                    <p>
                        Rasikpur, Dudhani, Tinghar, Bandhdih, SP College Road, Dumka Court & Collectorate Colony, Dangalpara, Gilanpara, Khajuria, Purana Dumka, Airport Road, Kathikund bypass, and Jama Road.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section class="asn2dum-section">
        <div class="asn2dum-container">
            <div class="asn2dum-sec-head">
                <span class="asn2dum-tag">Helpful Answers</span>
                <h2>Frequently Asked Questions: Asansol to Dumka Relocation</h2>
                <p>Have questions about packing safety, timelines, or billing? Find immediate answers below.</p>
            </div>

            <div style="max-width: 880px; margin: 0 auto;">
                <div class="asn2dum-faq-item">
                    <h4>What is the typical transit duration between Asansol and Dumka?</h4>
                    <p>
                        The highway distance between Asansol and Dumka is approximately 110 kilometers. Our direct closed container vehicles complete the doorstep journey in just 3 to 4 hours, guaranteeing prompt same-day delivery.
                    </p>
                </div>

                <div class="asn2dum-faq-item">
                    <h4>Do you provide moving assistance for SAIL IISCO employees from Burnpur to Dumka?</h4>
                    <p>
                        Yes, we regularly assist Steel Authority of India (SAIL IISCO) employees, engineers, and retirees moving from Burnpur, Riverside township, and Asansol colonies to Dumka. We supply 100% compliant GST invoices, detailed itemized inventories, and bills for official employer reimbursement.
                    </p>
                </div>

                <div class="asn2dum-faq-item">
                    <h4>Can you handle pickups from Raniganj, Kalla, and Neamatpur around Asansol?</h4>
                    <p>
                        Absolutely. We offer complete pickup coverage across the entire Asansol urban agglomeration, including Burnpur, Ushagram, Kalla, Chelidanga, Sen Raleigh Road, Asansol Court, Neamatpur, Kulti, Raniganj, and Jamuria.
                    </p>
                </div>

                <div class="asn2dum-faq-item">
                    <h4>How do you protect household furniture across the Bengal-Jharkhand highway?</h4>
                    <p>
                        We implement a strict 5-tier packaging protocol utilizing virgin bubble wrap, heavy corrugated sheets, high-density edge corner protectors, stretch film wrapping, and reinforced adhesive sealing to prevent road shock absorption.
                    </p>
                </div>

                <div class="asn2dum-faq-item">
                    <h4>What is the approximate cost of shifting a 2 BHK apartment from Asansol to Dumka?</h4>
                    <p>
                        A standard 2 BHK household relocation from Asansol to Dumka typically ranges between INR 11,500 and 18,500 depending on volume, floor levels, packing material tier, and elevator accessibility at both locations.
                    </p>
                </div>
            </div>

            <!-- Call to Action Banner -->
            <div class="asn2dum-cta-banner" id="asn2dum-quote">
                <h3>Ready to Relocate from Asansol to Dumka?</h3>
                <p>
                    Contact Shree Ashirwad Packers and Movers today for an instant free moving estimate. Experience prompt, professional shifting with verified intercity relocation experts.
                </p>
                <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                    <a href="tel:8409531615" class="asn2dum-btn-primary" style="background: #f59e0b; color: #0f172a;">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                        Call 8409531615
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20relocation%20from%20Asansol%20to%20Dumka." class="asn2dum-btn-outline" target="_blank" rel="noopener noreferrer">
                        Chat on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
