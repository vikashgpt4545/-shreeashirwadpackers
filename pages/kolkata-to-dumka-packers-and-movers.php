<?php
/**
 * Page Name: Kolkata to Dumka Packers and Movers
 * Route Slug: kolkata-to-dumka-packers-and-movers
 * Description: Premier intercity relocation, household goods shifting, corporate employee transfers, and vehicle transport from Kolkata to Dumka via NH-19 / Panagarh / Suri.
 * Focus Keywords: kolkata to dumka packers and movers, packers and movers kolkata to dumka, house shifting kolkata to dumka, car transport kolkata to dumka, bike parcel kolkata to dumka, goods transport kolkata to dumka
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Kolkata to Dumka Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Top Kolkata to Dumka packers and movers. 295 km transit, 5-layer safety packaging, dedicated container trucks, car & bike shipping. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/kolkata-to-dumka-packers-and-movers";
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

    <!-- Scoped CSS for Route 16 (Kolkata to Dumka) -->
    <style>
        :root {
            --kol2dum-primary: #1e3a5f;
            --kol2dum-secondary: #0284c7;
            --kol2dum-accent: #f59e0b;
            --kol2dum-accent-light: #fef3c7;
            --kol2dum-dark: #0f172a;
            --kol2dum-gray-bg: #f8fafc;
            --kol2dum-card-border: #e2e8f0;
            --kol2dum-text: #334155;
            --kol2dum-text-muted: #64748b;
            --kol2dum-radius: 12px;
            --kol2dum-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
            --kol2dum-shadow-hover: 0 20px 30px -10px rgba(2, 132, 199, 0.18);
        }

        .kol2dum-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.92) 0%, rgba(30, 58, 95, 0.88) 100%), url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 70px 20px 65px;
            position: relative;
        }

        .kol2dum-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .kol2dum-breadcrumbs {
            font-size: 0.9rem;
            color: #cbd5e1;
            margin-bottom: 20px;
        }

        .kol2dum-breadcrumbs a {
            color: var(--kol2dum-accent);
            text-decoration: none;
        }

        .kol2dum-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(245, 158, 11, 0.18);
            border: 1px solid rgba(245, 158, 11, 0.5);
            color: var(--kol2dum-accent);
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 0.88rem;
            font-weight: 600;
            margin-bottom: 18px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .kol2dum-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            line-height: 1.25;
            font-weight: 800;
            margin-bottom: 18px;
            color: #ffffff;
        }

        .kol2dum-hero p {
            font-size: 1.12rem;
            line-height: 1.7;
            max-width: 780px;
            color: #e2e8f0;
            margin-bottom: 28px;
        }

        .kol2dum-hero-cta {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .kol2dum-btn-primary {
            background: var(--kol2dum-accent);
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

        .kol2dum-btn-primary:hover {
            background: #d97706;
            transform: translateY(-2px);
            color: #ffffff;
        }

        .kol2dum-btn-outline {
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

        .kol2dum-btn-outline:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: #ffffff;
        }

        .kol2dum-quick-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
            margin-top: 40px;
        }

        .kol2dum-stat-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 18px 20px;
            border-radius: var(--kol2dum-radius);
        }

        .kol2dum-stat-num {
            font-family: 'Outfit', sans-serif;
            font-size: 1.85rem;
            font-weight: 800;
            color: var(--kol2dum-accent);
            margin-bottom: 4px;
        }

        .kol2dum-stat-lbl {
            font-size: 0.88rem;
            color: #cbd5e1;
        }

        .kol2dum-section {
            padding: 60px 0;
        }

        .kol2dum-section-alt {
            background-color: var(--kol2dum-gray-bg);
        }

        .kol2dum-sec-head {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 45px;
        }

        .kol2dum-tag {
            display: inline-block;
            background: rgba(2, 132, 199, 0.1);
            color: var(--kol2dum-secondary);
            font-size: 0.82rem;
            font-weight: 700;
            padding: 4px 14px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            margin-bottom: 12px;
        }

        .kol2dum-sec-head h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            color: var(--kol2dum-dark);
            font-weight: 800;
            line-height: 1.3;
            margin-bottom: 14px;
        }

        .kol2dum-sec-head p {
            color: var(--kol2dum-text-muted);
            font-size: 1.05rem;
            line-height: 1.65;
        }

        .kol2dum-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 35px;
            align-items: center;
        }

        .kol2dum-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .kol2dum-grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .kol2dum-card {
            background: #ffffff;
            border: 1px solid var(--kol2dum-card-border);
            border-radius: var(--kol2dum-radius);
            padding: 26px;
            box-shadow: var(--kol2dum-shadow);
            transition: all 0.3s ease;
        }

        .kol2dum-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--kol2dum-shadow-hover);
            border-color: rgba(2, 132, 199, 0.3);
        }

        .kol2dum-card-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: rgba(2, 132, 199, 0.12);
            color: var(--kol2dum-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 18px;
        }

        .kol2dum-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.3rem;
            color: var(--kol2dum-dark);
            margin-bottom: 12px;
            font-weight: 700;
        }

        .kol2dum-card p {
            color: var(--kol2dum-text);
            font-size: 0.95rem;
            line-height: 1.65;
        }

        .kol2dum-img-wrapper {
            border-radius: var(--kol2dum-radius);
            overflow: hidden;
            box-shadow: var(--kol2dum-shadow);
        }

        .kol2dum-img-wrapper img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .kol2dum-img-wrapper:hover img {
            transform: scale(1.03);
        }

        .kol2dum-table-box {
            background: #ffffff;
            border-radius: var(--kol2dum-radius);
            box-shadow: var(--kol2dum-shadow);
            overflow: hidden;
            border: 1px solid var(--kol2dum-card-border);
            margin: 25px 0;
        }

        .kol2dum-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .kol2dum-table th {
            background: var(--kol2dum-primary);
            color: #ffffff;
            font-family: 'Outfit', sans-serif;
            padding: 16px 20px;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .kol2dum-table td {
            padding: 14px 20px;
            border-bottom: 1px solid #f1f5f9;
            color: var(--kol2dum-text);
            font-size: 0.94rem;
        }

        .kol2dum-table tr:nth-child(even) {
            background: #f8fafc;
        }

        .kol2dum-route-info-box {
            background: #eff6ff;
            border-left: 4px solid var(--kol2dum-secondary);
            padding: 22px 24px;
            border-radius: 0 10px 10px 0;
            margin: 25px 0;
        }

        .kol2dum-route-info-box h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            color: var(--kol2dum-primary);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .kol2dum-faq-item {
            background: #ffffff;
            border: 1px solid var(--kol2dum-card-border);
            border-radius: var(--kol2dum-radius);
            padding: 20px 24px;
            margin-bottom: 16px;
            box-shadow: var(--kol2dum-shadow);
        }

        .kol2dum-faq-item h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.12rem;
            color: var(--kol2dum-dark);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .kol2dum-faq-item p {
            color: var(--kol2dum-text);
            font-size: 0.95rem;
            line-height: 1.65;
            margin: 0;
        }

        .kol2dum-cta-banner {
            background: linear-gradient(135deg, #1e3a5f 0%, #0f172a 100%);
            border-radius: 16px;
            padding: 50px 30px;
            text-align: center;
            color: #ffffff;
            margin-top: 50px;
            box-shadow: 0 15px 30px rgba(15, 23, 42, 0.2);
        }

        .kol2dum-cta-banner h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.1rem;
            font-weight: 800;
            margin-bottom: 14px;
        }

        .kol2dum-cta-banner p {
            font-size: 1.05rem;
            max-width: 680px;
            margin: 0 auto 25px;
            color: #cbd5e1;
            line-height: 1.65;
        }

        @media (max-width: 768px) {
            .kol2dum-hero h1 {
                font-size: 2.1rem;
            }
            .kol2dum-grid-2 {
                grid-template-columns: 1fr;
            }
            .kol2dum-table th, .kol2dum-table td {
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
      "name": "Shree Ashirwad Packers and Movers Kolkata to Dumka",
      "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
      "@id": "https://www.shreeashirwadpackers.com/#kolkata-to-dumka-packers",
      "url": "https://www.shreeashirwadpackers.com/kolkata-to-dumka-packers-and-movers",
      "telephone": "+91-8409531615",
      "priceRange": "INR 8,500 - 65,000",
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
      "serviceType": "Intercity Relocation and Transportation Services",
      "provider": {
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers",
        "telephone": "+91-8409531615",
        "url": "https://www.shreeashirwadpackers.com"
      },
      "areaServed": [
        {
          "@type": "AdministrativeArea",
          "name": "Kolkata, West Bengal"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Dumka, Jharkhand"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Kolkata to Dumka Relocation Services",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Household Relocation from Kolkata to Dumka"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Corporate and Bank Officer Relocation"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Enclosed Car Carrier Shipping from Kolkata to Dumka"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Two-Wheeler Bike Courier to Dumka"
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
          "name": "Kolkata to Dumka Packers and Movers",
          "item": "https://www.shreeashirwadpackers.com/kolkata-to-dumka-packers-and-movers"
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
          "name": "What is the typical transit duration from Kolkata to Dumka?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The highway distance between Kolkata and Dumka is approximately 295 kilometers via NH-19 (Durgapur Expressway), Panagarh, Ilambazar, Suri, and Massanjore. Our dedicated container trucks complete the transit in roughly 7 to 9 hours, enabling same-day or swift overnight delivery."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide pickup from Salt Lake, New Town, and South Kolkata?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we handle complete doorstep packaging and pickup across every Kolkata neighborhood, including Salt Lake City, New Town Rajarhat, Jadavpur, Ballygunge, Behala, Howrah, Dum Dum, Alipore, Garia, and Barasat."
          }
        },
        {
          "@type": "Question",
          "name": "Do you supply GST invoices for government or corporate relocation claims?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we provide 100% compliant GST invoices, detailed item inventories, and official consignment notes (bilty) recognized by West Bengal and Jharkhand government bodies, nationalized banks, and corporate employers."
          }
        },
        {
          "@type": "Question",
          "name": "How are fragile chinaware and electronic appliances safeguarded?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We deploy a specialized 5-layer protective packing protocol comprising scratch-resistant cling film, dense air bubble cushioning, heavy 5-ply corrugated sheets, reinforced corner angle boards, and moisture-barrier exterior sealing to prevent transit vibration damage."
          }
        },
        {
          "@type": "Question",
          "name": "What is the approximate cost of moving a 2 BHK apartment from Kolkata to Dumka?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A standard 2 BHK household relocation from Kolkata to Dumka typically ranges between INR 14,500 and 22,500 depending on volume, floor levels, packing material tier, and elevator accessibility at both locations."
          }
        }
      ]
    }
    </script>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <!-- Hero Section -->
    <header class="kol2dum-hero">
        <div class="kol2dum-container">
            <nav class="kol2dum-breadcrumbs" aria-label="breadcrumb">
                <a href="<?php echo SITE_BASE_URL; ?>/">Home</a> &raquo; 
                <a href="<?php echo SITE_BASE_URL; ?>/services">Intercity Routes</a> &raquo; 
                <span>Kolkata to Dumka</span>
            </nav>
            <div class="kol2dum-hero-badge">&#10004; Dedicated Bengal to Jharkhand Interstate Route</div>
            <h1>Reliable Kolkata to Dumka Packers and Movers</h1>
            <p>
                Experience seamless, professional relocation from the City of Joy (Kolkata) to Dumka via NH-19 and the scenic Suri-Massanjore corridor. We provide complete household shifting, corporate executive relocations, enclosed car shipping, and bike courier with full transit insurance.
            </p>
            <div class="kol2dum-hero-cta">
                <a href="tel:8409531615" class="kol2dum-btn-primary">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                    Call: 8409531615
                </a>
                <a href="#kol2dum-quote" class="kol2dum-btn-outline">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Request Free Estimate
                </a>
            </div>

            <div class="kol2dum-quick-stats">
                <div class="kol2dum-stat-card">
                    <div class="kol2dum-stat-num">295 KM</div>
                    <div class="kol2dum-stat-lbl">Highway Distance via NH-19 & Suri</div>
                </div>
                <div class="kol2dum-stat-card">
                    <div class="kol2dum-stat-num">7-9 Hrs</div>
                    <div class="kol2dum-stat-lbl">Fast Doorstep Transit Window</div>
                </div>
                <div class="kol2dum-stat-card">
                    <div class="kol2dum-stat-num">100% Safe</div>
                    <div class="kol2dum-stat-lbl">Waterproof Container Fleet</div>
                </div>
                <div class="kol2dum-stat-card">
                    <div class="kol2dum-stat-num">GST Approved</div>
                    <div class="kol2dum-stat-lbl">Corporate & Govt Reimbursements</div>
                </div>
            </div>
        </div>
    </header>

    <!-- Overview Section -->
    <section class="kol2dum-section">
        <div class="kol2dum-container">
            <div class="kol2dum-grid-2">
                <div>
                    <span class="kol2dum-tag">Trusted Interstate Logistics</span>
                    <h2>Comprehensive Shifting from Kolkata to Dumka Sub-Capital</h2>
                    <p>
                        Relocating your household possessions or corporate office from the bustling metropolitan center of Kolkata to Dumka involves covering 295 kilometers along the high-speed Durgapur Expressway (NH-19) and connecting through Panagarh, Ilambazar, Suri, and the landmark Massanjore Dam into Jharkhand. Dumka serves as the administrative sub-capital of Jharkhand, hosting divisional headquarters, educational institutions, commercial centers, and residential developments.
                    </p>
                    <p>
                        Families and professionals moving from Kolkata to Dumka include state and central government employees on transfer, banking executives, healthcare specialists, business traders, and retirees returning to their native homes in Santhal Pargana. Shree Ashirwad Packers and Movers brings extensive regional experience, ensuring a dependable, smooth transition.
                    </p>
                    <p>
                        Our specialized crews bring heavy-duty packing supplies, professional dismantle-and-reassemble toolkits, and sealed container carriers directly to your Kolkata premises—whether in high-rise towers in Salt Lake, New Town, and Rajarhat or traditional residences in South Kolkata, Howrah, and Behala. We handle your belongings with unmatched care and deliver safely to your Dumka address.
                    </p>
                    <p>
                        Furthermore, we coordinate with housing society managements across Kolkata high-rises to manage gate passes, elevator usage permissions, and loading dock access. Our dedicated container trucks operate with GPS navigation, ensuring timely dispatch and arrival in Dumka within 7 to 9 hours.
                    </p>
                </div>
                <div>
                    <div class="kol2dum-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe transit container truck for Kolkata to Dumka relocation" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Highlights -->
    <section class="kol2dum-section kol2dum-section-alt">
        <div class="kol2dum-container">
            <div class="kol2dum-sec-head">
                <span class="kol2dum-tag">Our Dedicated Services</span>
                <h2>Specialized Shifting Services: Kolkata to Dumka</h2>
                <p>Tailored logistics designed to handle family apartments, corporate transfers, and delicate vehicle shipments.</p>
            </div>

            <div class="kol2dum-grid-3">
                <div class="kol2dum-card">
                    <div class="kol2dum-card-icon">&#127968;</div>
                    <h3>Complete Household Relocation</h3>
                    <p>
                        From 1 BHK apartments in New Town to multi-storey bungalows in South Kolkata, we manage complete packing, modular furniture dismantling, sealed container transit, and destination room setup in Dumka.
                    </p>
                </div>

                <div class="kol2dum-card">
                    <div class="kol2dum-card-icon">&#127970;</div>
                    <h3>Corporate & Banking Staff Relocations</h3>
                    <p>
                        Full logistical assistance for bank managers, corporate employees, and government officials relocating to Dumka. We generate standardized billing, packing lists, and company-approved receipts for straightforward claims.
                    </p>
                </div>

                <div class="kol2dum-card">
                    <div class="kol2dum-card-icon">&#128663;</div>
                    <h3>Door-to-Door Car Carrier</h3>
                    <p>
                        Safe, hydraulic-ramp car shipping using dedicated carrier trucks. We transport hatchbacks, sedans, and SUVs from Kolkata to your new residence in Dumka with bumper shields, wheel lockdowns, pre-transit condition logs, and transit insurance.
                    </p>
                </div>

                <div class="kol2dum-card">
                    <div class="kol2dum-card-icon">&#127949;</div>
                    <h3>Two-Wheeler Bike Courier</h3>
                    <p>
                        Bikes and scooters receive multi-layer wrapping with bubble sheets, corrugated cartons, and mirror padding. Fuel is drained to regulatory safety levels, battery terminals secured, and the vehicle is transported securely inside covered trucks.
                    </p>
                </div>

                <div class="kol2dum-card">
                    <div class="kol2dum-card-icon">&#128188;</div>
                    <h3>Office & Commercial Moving</h3>
                    <p>
                        Relocating business offices, retail merchandise, medical equipment, or IT workstations between Kolkata and Dumka. We deploy anti-static packaging, serial-numbered carton sealing, and systematic file archiving.
                    </p>
                </div>

                <div class="kol2dum-card">
                    <div class="kol2dum-card-icon">&#128230;</div>
                    <h3>Part Load / Shared Groupage</h3>
                    <p>
                        Moving only a few luggage boxes, a study desk, or minimal appliances? Save money with our shared container groupage service from Kolkata to Dumka, with individual barcode labeling and guaranteed delivery.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Packaging Standard Section -->
    <section class="kol2dum-section">
        <div class="kol2dum-container">
            <div class="kol2dum-grid-2">
                <div>
                    <div class="kol2dum-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="5 layer packing process for Kolkata to Dumka household shifting" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="kol2dum-tag">Protection Technology</span>
                    <h2>Engineered 5-Layer Packaging for NH-19 & Suri Highway Transit</h2>
                    <p>
                        The 295-kilometer highway connecting Kolkata to Dumka combines high-speed 6-lane expressways with state highway routes crossing through Birbhum and Santhal Pargana hills. To eliminate all transit vibration and dust contamination, Shree Ashirwad adheres to an unyielding 5-layer packing methodology:
                    </p>
                    <ul style="color: var(--kol2dum-text); line-height: 1.8; padding-left: 20px; margin-bottom: 20px;">
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
    <section class="kol2dum-section kol2dum-section-alt">
        <div class="kol2dum-container">
            <div class="kol2dum-sec-head">
                <span class="kol2dum-tag">Transparent Tariff</span>
                <h2>Kolkata to Dumka Relocation Cost Estimates</h2>
                <p>Fair, itemized, and transparent pricing without hidden tolls or sudden fuel surcharges. Contact our team for an exact, tailored quotation.</p>
            </div>

            <div class="kol2dum-table-box">
                <table class="kol2dum-table">
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
                            <td><strong>1 BHK Apartment / Flat</strong></td>
                            <td>Standard 3-Layer Corrugated</td>
                            <td>3 Packers + Loaders</td>
                            <td>Same Day (7 - 9 Hrs)</td>
                            <td>&#8377; 9,500 - &#8377; 15,000</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Flat / Full House Shifting</strong></td>
                            <td>Premium 5-Layer Protective</td>
                            <td>4 Packers + Loaders</td>
                            <td>Same Day (7 - 9 Hrs)</td>
                            <td>&#8377; 14,500 - &#8377; 22,500</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK / Large Duplex Villa</strong></td>
                            <td>Super Heavy Bubble + Wooden Crates</td>
                            <td>5 Packers + Loaders</td>
                            <td>Overnight (8 - 10 Hrs)</td>
                            <td>&#8377; 22,000 - &#8377; 34,000</td>
                        </tr>
                        <tr>
                            <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                            <td>Corrugated Foam + Bubble Wrap</td>
                            <td>Loading & Lashing Included</td>
                            <td>24 - 48 Hours</td>
                            <td>&#8377; 3,000 - &#8377; 5,000</td>
                        </tr>
                        <tr>
                            <td><strong>Motor Car (Hatchback / Sedan)</strong></td>
                            <td>Enclosed Carrier Vehicle</td>
                            <td>Hydraulic Ramp Handling</td>
                            <td>Same Day / Next Day</td>
                            <td>&#8377; 7,500 - &#8377; 12,000</td>
                        </tr>
                        <tr>
                            <td><strong>Corporate & Branch Office Setup</strong></td>
                            <td>Custom Anti-Static Crates</td>
                            <td>Technical Moving Team</td>
                            <td>Scheduled Window</td>
                            <td>Custom Audit Basis</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="kol2dum-route-info-box">
                <h4>Route Blueprint: NH-19 & Suri-Massanjore Corridor Details</h4>
                <p>
                    <strong>Transit Path:</strong> Kolkata (Salt Lake / Kona Expressway) &rarr; Dankuni &rarr; NH-19 Durgapur Expressway &rarr; Panagarh &rarr; Ilambazar &rarr; Suri &rarr; Massanjore Dam &rarr; Dumka Bypass &rarr; Rasikpur / Dudhani. Total distance is roughly 295 km. Dedicated covered container trucks ensure safe delivery in 7 to 9 hours.
                </p>
            </div>
        </div>
    </section>

    <!-- Vehicle Transport Section -->
    <section class="kol2dum-section">
        <div class="kol2dum-container">
            <div class="kol2dum-grid-2">
                <div>
                    <span class="kol2dum-tag">Automotive Logistics</span>
                    <h2>Secure Two-Wheeler & Car Transport: Kolkata to Dumka</h2>
                    <p>
                        Driving personal vehicles between Kolkata and Dumka during heavy commercial expressway traffic or monsoon rainstorms can be exhausting and hazardous. Shree Ashirwad Packers and Movers offers dedicated, secure automotive carrier solutions for bikes, scooters, family hatchbacks, luxury sedans, and SUVs.
                    </p>
                    <p>
                        Our specialized car transport trailers and enclosed single-vehicle carriers are equipped with safety winches, custom wheel locks, and soft bumper shields that ensure your vehicle stays completely stationary during the trip. Before loading at your Kolkata residence, our field supervisor conducts a thorough multi-point exterior inspection, recording tire treads, fuel levels, and existing scratches on a formal Vehicle Condition Sheet.
                    </p>
                    <p>
                        For motorcycles and sports bikes, we use heavy-duty corrugated sheet wrapping around fuel tanks, headlamps, and chrome mirrors, followed by thick bubble insulation. Vehicles are delivered clean and undamaged right at your doorstep in Dumka.
                    </p>
                </div>
                <div>
                    <div class="kol2dum-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transport carrier loading from Kolkata to Dumka" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="kol2dum-section kol2dum-section-alt">
        <div class="kol2dum-container">
            <div class="kol2dum-sec-head">
                <span class="kol2dum-tag">Service Advantages</span>
                <h2>Why Choose Shree Ashirwad for Kolkata to Dumka Moves</h2>
                <p>Reliable interstate operations, certified moving crews, and an unwavering focus on customer satisfaction.</p>
            </div>

            <div class="kol2dum-grid-4">
                <div class="kol2dum-card">
                    <div class="kol2dum-card-icon">&#9989;</div>
                    <h3>Trained In-House Staff</h3>
                    <p>We never use untrained daily wage contractors. Our permanent crew has mastered delicate furniture handling, electronics packing, and staircase maneuvering.</p>
                </div>

                <div class="kol2dum-card">
                    <div class="kol2dum-card-icon">&#128337;</div>
                    <h3>Same-Day / Overnight Delivery</h3>
                    <p>Covering the 295 km distance in 7 to 9 hours, our dedicated container trucks deliver swiftly with minimum waiting time for your family.</p>
                </div>

                <div class="kol2dum-card">
                    <div class="kol2dum-card-icon">&#128176;</div>
                    <h3>Zero Hidden Costs</h3>
                    <p>Transparent written price quotations detailing toll charges, loading, unloading, packing supplies, and transit logistics with 100% upfront clarity.</p>
                </div>

                <div class="kol2dum-card">
                    <div class="kol2dum-card-icon">&#128221;</div>
                    <h3>Government Claim Invoices</h3>
                    <p>Full GST billing, computer-generated packing inventories, consignment notes, and stamped invoices compliant with PSU, bank, and government transfer norms.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Unpacking and Setup Section -->
    <section class="kol2dum-section">
        <div class="kol2dum-container">
            <div class="kol2dum-grid-2">
                <div>
                    <div class="kol2dum-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and home setup service in Dumka" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="kol2dum-tag">Complete Destination Care</span>
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
    <section class="kol2dum-section kol2dum-section-alt">
        <div class="kol2dum-container">
            <div class="kol2dum-sec-head">
                <span class="kol2dum-tag">Coverage Area</span>
                <h2>Neighborhoods Covered Across Kolkata and Dumka</h2>
                <p>Door-to-door pickup and delivery across every residential colony, commercial market, and surrounding industrial township.</p>
            </div>

            <div class="kol2dum-grid-2">
                <div class="kol2dum-card">
                    <h3>Pickup Locations Across Kolkata</h3>
                    <p>
                        Salt Lake (Sectors 1-5), New Town Rajarhat, Jadavpur, Ballygunge, Alipore, Behala, Howrah, Dum Dum, Garia, Tollygunge, Kasba, Park Street, Barasat, and Kona Expressway.
                    </p>
                </div>

                <div class="kol2dum-card">
                    <h3>Delivery Locations in Dumka City & Surroundings</h3>
                    <p>
                        Rasikpur, Dudhani, Tinghar, Bandhdih, SP College Road, Dumka Court & Collectorate Colony, Dangalpara, Gilanpara, Khajuria, Purana Dumka, Airport Road, Kathikund bypass, and Jama Road.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section class="kol2dum-section">
        <div class="kol2dum-container">
            <div class="kol2dum-sec-head">
                <span class="kol2dum-tag">Helpful Answers</span>
                <h2>Frequently Asked Questions: Kolkata to Dumka Relocation</h2>
                <p>Have questions about packing safety, timelines, or billing? Find immediate answers below.</p>
            </div>

            <div style="max-width: 880px; margin: 0 auto;">
                <div class="kol2dum-faq-item">
                    <h4>What is the typical transit duration from Kolkata to Dumka?</h4>
                    <p>
                        The highway distance between Kolkata and Dumka is approximately 295 kilometers via NH-19 (Durgapur Expressway), Panagarh, Ilambazar, Suri, and Massanjore. Our dedicated container trucks complete the transit in roughly 7 to 9 hours, enabling same-day or swift overnight delivery.
                    </p>
                </div>

                <div class="kol2dum-faq-item">
                    <h4>Do you provide pickup from Salt Lake, New Town, and South Kolkata?</h4>
                    <p>
                        Yes, we handle complete doorstep packaging and pickup across every Kolkata neighborhood, including Salt Lake City, New Town Rajarhat, Jadavpur, Ballygunge, Behala, Howrah, Dum Dum, Alipore, Garia, and Barasat.
                    </p>
                </div>

                <div class="kol2dum-faq-item">
                    <h4>Do you supply GST invoices for government or corporate relocation claims?</h4>
                    <p>
                        Yes, we provide 100% compliant GST invoices, detailed item inventories, and official consignment notes (bilty) recognized by West Bengal and Jharkhand government bodies, nationalized banks, and corporate employers.
                    </p>
                </div>

                <div class="kol2dum-faq-item">
                    <h4>How are fragile chinaware and electronic appliances safeguarded?</h4>
                    <p>
                        We deploy a specialized 5-layer protective packing protocol comprising scratch-resistant cling film, dense air bubble cushioning, heavy 5-ply corrugated sheets, reinforced corner angle boards, and moisture-barrier exterior sealing to prevent transit vibration damage.
                    </p>
                </div>

                <div class="kol2dum-faq-item">
                    <h4>What is the approximate cost of moving a 2 BHK apartment from Kolkata to Dumka?</h4>
                    <p>
                        A standard 2 BHK household relocation from Kolkata to Dumka typically ranges between INR 14,500 and 22,500 depending on volume, floor levels, packing material tier, and elevator accessibility at both locations.
                    </p>
                </div>
            </div>

            <!-- Call to Action Banner -->
            <div class="kol2dum-cta-banner" id="kol2dum-quote">
                <h3>Ready to Relocate from Kolkata to Dumka?</h3>
                <p>
                    Contact Shree Ashirwad Packers and Movers today for an instant free moving estimate. Experience prompt, professional shifting with verified interstate relocation experts.
                </p>
                <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                    <a href="tel:8409531615" class="kol2dum-btn-primary" style="background: #f59e0b; color: #0f172a;">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                        Call 8409531615
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20relocation%20from%20Kolkata%20to%20Dumka." class="kol2dum-btn-outline" target="_blank" rel="noopener noreferrer">
                        Chat on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
