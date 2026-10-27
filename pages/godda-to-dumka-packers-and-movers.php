<?php
/**
 * Page Name: Godda to Dumka Packers and Movers
 * Route Slug: godda-to-dumka-packers-and-movers
 * Description: Trustworthy household shifting, ECL Lalmatia colliery transfers, Adani Power Plant staff relocation, and bike/car transport from Godda to Dumka via NH-133.
 * Focus Keywords: godda to dumka packers and movers, packers and movers godda to dumka, house shifting godda to dumka, car transport godda to dumka, bike parcel godda to dumka, ecl lalmatia movers dumka
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Godda to Dumka Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Safe & reliable Godda to Dumka packers and movers. 70 km transit via NH-133, 5-layer packing, ECL & Adani transfer billing, bike & car carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/godda-to-dumka-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="godda to dumka packers and movers, packers and movers godda to dumka, house shifting godda to dumka, car transport godda to dumka, bike parcel godda to dumka, ecl lalmatia movers dumka">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Godda">

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

    <!-- Scoped CSS for Route 10 (Godda to Dumka) -->
    <style>
        :root {
            --god2dum-primary: #1e3a5f;
            --god2dum-secondary: #0284c7;
            --god2dum-accent: #f59e0b;
            --god2dum-accent-light: #fef3c7;
            --god2dum-dark: #0f172a;
            --god2dum-gray-bg: #f8fafc;
            --god2dum-card-border: #e2e8f0;
            --god2dum-text: #334155;
            --god2dum-text-muted: #64748b;
            --god2dum-radius: 12px;
            --god2dum-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
            --god2dum-shadow-hover: 0 20px 30px -10px rgba(2, 132, 199, 0.18);
        }

        .god2dum-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.92) 0%, rgba(30, 58, 95, 0.88) 100%), url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 70px 20px 65px;
            position: relative;
        }

        .god2dum-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .god2dum-breadcrumbs {
            font-size: 0.9rem;
            color: #cbd5e1;
            margin-bottom: 20px;
        }

        .god2dum-breadcrumbs a {
            color: var(--god2dum-accent);
            text-decoration: none;
        }

        .god2dum-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(245, 158, 11, 0.18);
            border: 1px solid rgba(245, 158, 11, 0.5);
            color: var(--god2dum-accent);
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 0.88rem;
            font-weight: 600;
            margin-bottom: 18px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .god2dum-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            line-height: 1.25;
            font-weight: 800;
            margin-bottom: 18px;
            color: #ffffff;
        }

        .god2dum-hero p {
            font-size: 1.12rem;
            line-height: 1.7;
            max-width: 780px;
            color: #e2e8f0;
            margin-bottom: 28px;
        }

        .god2dum-hero-cta {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .god2dum-btn-primary {
            background: var(--god2dum-accent);
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

        .god2dum-btn-primary:hover {
            background: #d97706;
            transform: translateY(-2px);
            color: #ffffff;
        }

        .god2dum-btn-outline {
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

        .god2dum-btn-outline:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: #ffffff;
        }

        .god2dum-quick-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
            margin-top: 40px;
        }

        .god2dum-stat-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 18px 20px;
            border-radius: var(--god2dum-radius);
        }

        .god2dum-stat-num {
            font-family: 'Outfit', sans-serif;
            font-size: 1.85rem;
            font-weight: 800;
            color: var(--god2dum-accent);
            margin-bottom: 4px;
        }

        .god2dum-stat-lbl {
            font-size: 0.88rem;
            color: #cbd5e1;
        }

        .god2dum-section {
            padding: 60px 0;
        }

        .god2dum-section-alt {
            background-color: var(--god2dum-gray-bg);
        }

        .god2dum-sec-head {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 45px;
        }

        .god2dum-tag {
            display: inline-block;
            background: rgba(2, 132, 199, 0.1);
            color: var(--god2dum-secondary);
            font-size: 0.82rem;
            font-weight: 700;
            padding: 4px 14px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            margin-bottom: 12px;
        }

        .god2dum-sec-head h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            color: var(--god2dum-dark);
            font-weight: 800;
            line-height: 1.3;
            margin-bottom: 14px;
        }

        .god2dum-sec-head p {
            color: var(--god2dum-text-muted);
            font-size: 1.05rem;
            line-height: 1.65;
        }

        .god2dum-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 35px;
            align-items: center;
        }

        .god2dum-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .god2dum-grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .god2dum-card {
            background: #ffffff;
            border: 1px solid var(--god2dum-card-border);
            border-radius: var(--god2dum-radius);
            padding: 26px;
            box-shadow: var(--god2dum-shadow);
            transition: all 0.3s ease;
        }

        .god2dum-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--god2dum-shadow-hover);
            border-color: rgba(2, 132, 199, 0.3);
        }

        .god2dum-card-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: rgba(2, 132, 199, 0.12);
            color: var(--god2dum-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 18px;
        }

        .god2dum-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.3rem;
            color: var(--god2dum-dark);
            margin-bottom: 12px;
            font-weight: 700;
        }

        .god2dum-card p {
            color: var(--god2dum-text);
            font-size: 0.95rem;
            line-height: 1.65;
        }

        .god2dum-img-wrapper {
            border-radius: var(--god2dum-radius);
            overflow: hidden;
            box-shadow: var(--god2dum-shadow);
        }

        .god2dum-img-wrapper img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .god2dum-img-wrapper:hover img {
            transform: scale(1.03);
        }

        .god2dum-table-box {
            background: #ffffff;
            border-radius: var(--god2dum-radius);
            box-shadow: var(--god2dum-shadow);
            overflow: hidden;
            border: 1px solid var(--god2dum-card-border);
            margin: 25px 0;
        }

        .god2dum-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .god2dum-table th {
            background: var(--god2dum-primary);
            color: #ffffff;
            font-family: 'Outfit', sans-serif;
            padding: 16px 20px;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .god2dum-table td {
            padding: 14px 20px;
            border-bottom: 1px solid #f1f5f9;
            color: var(--god2dum-text);
            font-size: 0.94rem;
        }

        .god2dum-table tr:nth-child(even) {
            background: #f8fafc;
        }

        .god2dum-route-info-box {
            background: #eff6ff;
            border-left: 4px solid var(--god2dum-secondary);
            padding: 22px 24px;
            border-radius: 0 10px 10px 0;
            margin: 25px 0;
        }

        .god2dum-route-info-box h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            color: var(--god2dum-primary);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .god2dum-faq-item {
            background: #ffffff;
            border: 1px solid var(--god2dum-card-border);
            border-radius: var(--god2dum-radius);
            padding: 20px 24px;
            margin-bottom: 16px;
            box-shadow: var(--god2dum-shadow);
        }

        .god2dum-faq-item h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.12rem;
            color: var(--god2dum-dark);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .god2dum-faq-item p {
            color: var(--god2dum-text);
            font-size: 0.95rem;
            line-height: 1.65;
            margin: 0;
        }

        .god2dum-cta-banner {
            background: linear-gradient(135deg, #1e3a5f 0%, #0f172a 100%);
            border-radius: 16px;
            padding: 50px 30px;
            text-align: center;
            color: #ffffff;
            margin-top: 50px;
            box-shadow: 0 15px 30px rgba(15, 23, 42, 0.2);
        }

        .god2dum-cta-banner h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.1rem;
            font-weight: 800;
            margin-bottom: 14px;
        }

        .god2dum-cta-banner p {
            font-size: 1.05rem;
            max-width: 680px;
            margin: 0 auto 25px;
            color: #cbd5e1;
            line-height: 1.65;
        }

        @media (max-width: 768px) {
            .god2dum-hero h1 {
                font-size: 2.1rem;
            }
            .god2dum-grid-2 {
                grid-template-columns: 1fr;
            }
            .god2dum-table th, .god2dum-table td {
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
      "name": "Shree Ashirwad Packers and Movers Godda to Dumka",
      "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
      "@id": "https://www.shreeashirwadpackers.com/#godda-to-dumka-packers",
      "url": "https://www.shreeashirwadpackers.com/godda-to-dumka-packers-and-movers",
      "telephone": "+91-8409531615",
      "priceRange": "INR 4,500 - 45,000",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "College Road, Near Kargali Chowk",
        "addressLocality": "Godda",
        "addressRegion": "Jharkhand",
        "postalCode": "814133",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 24.8267,
        "longitude": 87.2132
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
      "serviceType": "Relocation and Transportation Services",
      "provider": {
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers",
        "telephone": "+91-8409531615",
        "url": "https://www.shreeashirwadpackers.com"
      },
      "areaServed": [
        {
          "@type": "AdministrativeArea",
          "name": "Godda, Jharkhand"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Dumka, Jharkhand"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Godda to Dumka Moving Services",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Household Relocation from Godda to Dumka"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "ECL Lalmatia Colliery Staff Relocation"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Adani Power Motia Plant Official Relocation"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Two-Wheeler and Car Carrier Service via NH-133"
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
          "name": "Intercity Relocation",
          "item": "https://www.shreeashirwadpackers.com/services"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Godda to Dumka Packers and Movers",
          "item": "https://www.shreeashirwadpackers.com/godda-to-dumka-packers-and-movers"
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
          "name": "What is the typical transit duration from Godda to Dumka?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The highway distance between Godda and Dumka is approximately 70 kilometers along NH-133. Our dedicated closed-container trucks complete the door-to-door transit in roughly 2 to 3 hours under normal traffic conditions."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide relocation assistance for ECL Lalmatia colliery employees?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we specialize in Eastern Coalfields Limited (ECL) employee relocations from Lalmatia, Mahagama, and Godda residential colonies. We supply 100% compliant GST invoices, itemized packing inventories, and stamped consignment receipts for departmental claim reimbursements."
          }
        },
        {
          "@type": "Question",
          "name": "Can you handle household goods transfers from Adani Motia Power Plant to Dumka?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Certainly. We regularly assist corporate executives and technical engineers transferring from the Adani Ultra Supercritical Thermal Power Plant at Motia to Dumka. We carry out gate-pass paperwork, premium 5-layer packing, and swift transit."
          }
        },
        {
          "@type": "Question",
          "name": "How are delicate household goods packed for this Santhal Pargana highway route?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We implement a strict 5-tier packaging protocol utilizing virgin bubble wrap, heavy corrugated sheets, high-density edge corner protectors, stretch film wrapping, and reinforced adhesive sealing to prevent road shock absorption along NH-133."
          }
        },
        {
          "@type": "Question",
          "name": "What is the approximate cost of moving a 2 BHK apartment from Godda to Dumka?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A standard 2 BHK household relocation from Godda to Dumka typically ranges between INR 10,500 and 17,500 depending on volume, floor levels, packing material tier, and elevator accessibility at both locations."
          }
        }
      ]
    }
    </script>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <!-- Hero Section -->
    <header class="god2dum-hero">
        <div class="god2dum-container">
            <nav class="god2dum-breadcrumbs" aria-label="breadcrumb">
                <a href="<?php echo SITE_BASE_URL; ?>/">Home</a> &raquo; 
                <a href="<?php echo SITE_BASE_URL; ?>/services">Intercity Routes</a> &raquo; 
                <span>Godda to Dumka</span>
            </nav>
            <div class="god2dum-hero-badge">&#10004; Verified Santhal Pargana Corridor Movers</div>
            <h1>Reliable Godda to Dumka Packers and Movers</h1>
            <p>
                Experience seamless, professional relocation from Godda to the sub-capital Dumka via NH-133. We deliver expert household shifting, ECL Lalmatia colliery transfer assistance, Adani Motia plant corporate moves, safe two-wheeler courier, and enclosed car shipping with full transit insurance.
            </p>
            <div class="god2dum-hero-cta">
                <a href="tel:8409531615" class="god2dum-btn-primary">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                    Call: 8409531615
                </a>
                <a href="#god2dum-quote" class="god2dum-btn-outline">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Request Free Estimate
                </a>
            </div>

            <div class="god2dum-quick-stats">
                <div class="god2dum-stat-card">
                    <div class="god2dum-stat-num">70 KM</div>
                    <div class="god2dum-stat-lbl">Highway Distance via NH-133</div>
                </div>
                <div class="god2dum-stat-card">
                    <div class="god2dum-stat-num">2-3 Hrs</div>
                    <div class="god2dum-stat-lbl">Doorstep Transit Window</div>
                </div>
                <div class="god2dum-stat-card">
                    <div class="god2dum-stat-num">100% Safe</div>
                    <div class="god2dum-stat-lbl">Zero Damage Transit Record</div>
                </div>
                <div class="god2dum-stat-card">
                    <div class="god2dum-stat-num">GST Claim</div>
                    <div class="god2dum-stat-lbl">ECL & Corporate Transfer Support</div>
                </div>
            </div>
        </div>
    </header>

    <!-- Overview Section -->
    <section class="god2dum-section">
        <div class="god2dum-container">
            <div class="god2dum-grid-2">
                <div>
                    <span class="god2dum-tag">Trusted Santhal Pargana Relocation</span>
                    <h2>Comprehensive Shifting from Godda to Dumka Headquarters</h2>
                    <p>
                        Relocating household effects, heavy home furniture, electronics, and vehicles from Godda to Dumka requires an organized logistics team intimately familiar with the Santhal Pargana region. Godda is a bustling commercial center flanked by the massive opencast operations of Eastern Coalfields Limited (ECL) in Lalmatia, the cutting-edge Adani Ultra Supercritical Thermal Power Plant at Motia, agricultural hubs, and thriving educational institutions. Dumka, as the administrative sub-capital of Jharkhand, hosts regional directorates, judicial complexes, universities, and commercial headquarters.
                    </p>
                    <p>
                        At Shree Ashirwad Packers and Movers, we specialize in high-efficiency intra-divisional relocations across the 70-kilometer NH-133 arterial stretch. Whether you are an ECL engineer relocating from the Lalmatia mining colony, an executive moving from the Adani Motia plant complex, a government administrative officer transferred to the Dumka Commissionerate, or a business owner moving to Rasikpur or Dudhani, we guarantee exceptional reliability, punctuality, and complete peace of mind.
                    </p>
                    <p>
                        Our specialized crews bring heavy-duty packing supplies, professional dismantle-and-reassemble toolkits, and sealed container carriers directly to your Godda premises—handling your beloved possessions with maximum caution and respect.
                    </p>
                </div>
                <div>
                    <div class="god2dum-img-wrapper">
                        <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe transit container truck for Godda to Dumka relocation" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Highlights -->
    <section class="god2dum-section god2dum-section-alt">
        <div class="god2dum-container">
            <div class="god2dum-sec-head">
                <span class="god2dum-tag">Our Dedicated Services</span>
                <h2>Specialized Relocation Solutions from Godda to Dumka</h2>
                <p>Tailored logistics designed to handle family apartments, industrial transfers, mining colony quarters, and delicate vehicle shipments.</p>
            </div>

            <div class="god2dum-grid-3">
                <div class="god2dum-card">
                    <div class="god2dum-card-icon">&#127968;</div>
                    <h3>Complete Household Relocation</h3>
                    <p>
                        From single room setups to sprawling residential duplexes, we provide end-to-end packing, furniture disassembly, secure container transit, and room-by-room unpacking in Dumka. Sofas, dining tables, king beds, and kitchenware receive individual attention.
                    </p>
                </div>

                <div class="god2dum-card">
                    <div class="god2dum-card-icon">&#9874;</div>
                    <h3>ECL Lalmatia Colliery Transfers</h3>
                    <p>
                        Full logistical assistance for Eastern Coalfields Limited staff moving from Lalmatia, Mahagama, and Rajmahal opencast quarters to Dumka. We generate standardized billing, packing lists, and company-approved receipts for straightforward claims.
                    </p>
                </div>

                <div class="god2dum-card">
                    <div class="god2dum-card-icon">&#9889;</div>
                    <h3>Adani Motia Power Plant Staff Moves</h3>
                    <p>
                        Tailored moving solutions for engineers, supervisors, and administrative personnel stationed at the Adani Motia Power Station. We arrange gate-passes, on-site inventory audits, and prompt weekend transfers so your work schedule remains uninterrupted.
                    </p>
                </div>

                <div class="god2dum-card">
                    <div class="god2dum-card-icon">&#128663;</div>
                    <h3>Door-to-Door Car Carrier</h3>
                    <p>
                        Safe, hydraulic-ramp car shipping using dedicated carrier trucks. We transport hatchbacks, sedans, and SUVs from Godda to your new residence in Dumka with bumper shields, wheel lockdowns, pre-transit condition logs, and transit insurance.
                    </p>
                </div>

                <div class="god2dum-card">
                    <div class="god2dum-card-icon">&#127949;</div>
                    <h3>Two-Wheeler Parcel & Courier</h3>
                    <p>
                        Bikes and scooters receive multi-layer wrapping with bubble sheets, corrugated cartons, and mirror padding. Fuel is drained to regulatory safety levels, battery terminals secured, and the vehicle is transported securely inside covered trucks.
                    </p>
                </div>

                <div class="god2dum-card">
                    <div class="god2dum-card-icon">&#128188;</div>
                    <h3>Corporate & Commercial Moves</h3>
                    <p>
                        Relocating bank branch offices, retail store inventory, hospital medical equipment, or IT workstations between Godda and Dumka. We deploy anti-static packaging, serial-numbered carton sealing, and systematic file archiving.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Packaging Standard Section -->
    <section class="god2dum-section">
        <div class="god2dum-container">
            <div class="god2dum-grid-2">
                <div>
                    <div class="god2dum-img-wrapper">
                        <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="5 layer packing process for Godda to Dumka household shifting" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="god2dum-tag">Protection Technology</span>
                    <h2>Engineered 5-Layer Packaging for NH-133 Highway Transit</h2>
                    <p>
                        The 70-kilometer route connecting Godda to Dumka via NH-133 crosses scenic rolling terrain, small commercial market hubs, and sections with intermittent road roughness. To eliminate all transit vibration and dust contamination, Shree Ashirwad adheres to an unyielding 5-layer packing methodology:
                    </p>
                    <ul style="color: var(--god2dum-text); line-height: 1.8; padding-left: 20px; margin-bottom: 20px;">
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
    <section class="god2dum-section god2dum-section-alt">
        <div class="god2dum-container">
            <div class="god2dum-sec-head">
                <span class="god2dum-tag">Transparent Tariff</span>
                <h2>Godda to Dumka Relocation Cost Estimates</h2>
                <p>Fair, itemized, and transparent pricing without hidden tolls or sudden fuel surcharges. Contact our team for an exact, tailored quotation.</p>
            </div>

            <div class="god2dum-table-box">
                <table class="god2dum-table">
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
                            <td><strong>1 BHK Apartment / Mining Quarter</strong></td>
                            <td>Standard 3-Layer Corrugated</td>
                            <td>2 Packers + 2 Loaders</td>
                            <td>Same Day (2 - 3 Hrs)</td>
                            <td>&#8377; 6,500 - &#8377; 10,500</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Flat / Full House Shifting</strong></td>
                            <td>Premium 5-Layer Protective</td>
                            <td>3 Packers + 3 Loaders</td>
                            <td>Same Day (2 - 4 Hrs)</td>
                            <td>&#8377; 10,500 - &#8377; 16,500</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK / Executive Duplex Villa</strong></td>
                            <td>Super Heavy Bubble + Wooden Crates</td>
                            <td>4 Packers + 4 Loaders</td>
                            <td>Same Day (3 - 5 Hrs)</td>
                            <td>&#8377; 16,000 - &#8377; 25,000</td>
                        </tr>
                        <tr>
                            <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                            <td>Corrugated Foam + Bubble Wrap</td>
                            <td>Loading & Lashing Included</td>
                            <td>24 Hours Delivery</td>
                            <td>&#8377; 2,000 - &#8377; 3,500</td>
                        </tr>
                        <tr>
                            <td><strong>Motor Car (Hatchback / Sedan)</strong></td>
                            <td>Enclosed Carrier Vehicle</td>
                            <td>Hydraulic Ramp Handling</td>
                            <td>Same Day Delivery</td>
                            <td>&#8377; 4,500 - &#8377; 8,000</td>
                        </tr>
                        <tr>
                            <td><strong>Adani / ECL Office & Lab Setup</strong></td>
                            <td>Custom Anti-Static Crates</td>
                            <td>Technical Moving Team</td>
                            <td>Scheduled Window</td>
                            <td>Custom Audit Basis</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="god2dum-route-info-box">
                <h4>Route Blueprint: NH-133 Highway Transit Details</h4>
                <p>
                    <strong>Transit Path:</strong> Godda town center &rarr; Kargali &rarr; Mahagama connector &rarr; Bausi crossway &rarr; Hansdiha Junction &rarr; Dumka Bypass &rarr; Rasikpur / Dudhani. Total distance is roughly 70 km. Trucks travel via well-paved sections of National Highway 133, minimizing road shocks and enabling swift same-day delivery.
                </p>
            </div>
        </div>
    </section>

    <!-- Vehicle Transport Section -->
    <section class="god2dum-section">
        <div class="god2dum-container">
            <div class="god2dum-grid-2">
                <div>
                    <span class="god2dum-tag">Automotive Logistics</span>
                    <h2>Secure Two-Wheeler & Car Transport: Godda to Dumka</h2>
                    <p>
                        Driving personal vehicles between Godda and Dumka during harsh weather or when juggling family household shifting can be tiring and risky. Shree Ashirwad Packers and Movers offers dedicated, secure automotive carrier solutions for bikes, scooters, family hatchbacks, luxury sedans, and SUVs.
                    </p>
                    <p>
                        Our specialized car transport trailers and enclosed single-vehicle flatbeds are equipped with safety winches, custom wheel locks, and soft bumper shields that ensure your vehicle stays completely stationary during the trip. Before loading at your Godda residence, our field supervisor conducts a thorough multi-point exterior inspection, recording tire treads, fuel levels, and existing scratches on a formal Vehicle Condition Sheet.
                    </p>
                    <p>
                        For motorcycles and sports bikes, we use heavy-duty corrugated sheet wrapping around fuel tanks, headlamps, and chrome mirrors, followed by thick bubble insulation. Vehicles are delivered clean and undamaged right at your doorstep in Dumka.
                    </p>
                </div>
                <div>
                    <div class="god2dum-img-wrapper">
                        <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transport carrier loading from Godda to Dumka" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="god2dum-section god2dum-section-alt">
        <div class="god2dum-container">
            <div class="god2dum-sec-head">
                <span class="god2dum-tag">Service Advantages</span>
                <h2>Why Residents Trust Us for Godda to Dumka Moves</h2>
                <p>Reliable local operations, certified moving crews, and an unwavering focus on customer satisfaction.</p>
            </div>

            <div class="god2dum-grid-4">
                <div class="god2dum-card">
                    <div class="god2dum-card-icon">&#9989;</div>
                    <h3>Trained In-House Staff</h3>
                    <p>We never use untrained daily wage contractors. Our permanent crew has mastered delicate furniture handling, electronics packing, and staircase maneuvering.</p>
                </div>

                <div class="god2dum-card">
                    <div class="god2dum-card-icon">&#128337;</div>
                    <h3>Same-Day Delivery</h3>
                    <p>Because the Godda-Dumka distance is just 70 km, our dedicated trucks load in the morning and deliver to Dumka by late afternoon on the very same day.</p>
                </div>

                <div class="god2dum-card">
                    <div class="god2dum-card-icon">&#128176;</div>
                    <h3>Zero Hidden Costs</h3>
                    <p>Transparent written price quotations detailing toll charges, loading, unloading, packing supplies, and transit logistics with 100% upfront clarity.</p>
                </div>

                <div class="god2dum-card">
                    <div class="god2dum-card-icon">&#128221;</div>
                    <h3>Government Claim Invoices</h3>
                    <p>Full GST billing, computer-generated packing inventories, consignment notes, and stamped invoices compliant with ECL, PSU, and bank transfer norms.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Unpacking and Setup Section -->
    <section class="god2dum-section">
        <div class="god2dum-container">
            <div class="god2dum-grid-2">
                <div>
                    <div class="god2dum-img-wrapper">
                        <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and home setup service in Dumka" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="god2dum-tag">Complete Destination Care</span>
                    <h2>Hassle-Free Unloading, Unpacking & Setup in Dumka</h2>
                    <p>
                        A relocation is only half-finished when the truck arrives at your destination. Moving heavy cartons into upper floor apartments or assembling large modular wardrobes can quickly overwhelm a busy family. That is why Shree Ashirwad Packers and Movers provides full destination handling services in Dumka.
                    </p>
                    <p>
                        Upon reaching your new home in Dumka—whether it is located in Tinghar, Rasikpur, Dudhani, Bandhdih, or near the Dumka Engineering College—our team carefully unloads all articles, carries them up elevators or staircases, and places each carton in its designated room.
                    </p>
                    <p>
                        Our skilled crew unpacks delicate dinnerware, reassembles double beds, positions large sofa sets, reattaches modular study desks, and clears away all leftover wrapping paper, shredded cardboard, and plastic rolls—leaving your new residence tidy and ready to live in.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Localities Covered -->
    <section class="god2dum-section god2dum-section-alt">
        <div class="god2dum-container">
            <div class="god2dum-sec-head">
                <span class="god2dum-tag">Coverage Area</span>
                <h2>Neighborhoods Covered Across Godda and Dumka</h2>
                <p>Door-to-door pickup and delivery across every residential colony, commercial market, and surrounding industrial township.</p>
            </div>

            <div class="god2dum-grid-2">
                <div class="god2dum-card">
                    <h3>Pickup Locations in Godda District</h3>
                    <p>
                        College Road, Routpara, Kargali Chowk, Lalmatia ECL Colliery Township, Mahagama, Pathargama, Poreyahat, Adani Motia Power Plant Residential Complex, Boarijor, Sundarpahari, Asanbani, and Godda Town Market.
                    </p>
                </div>

                <div class="god2dum-card">
                    <h3>Delivery Locations in Dumka City & Surroundings</h3>
                    <p>
                        Rasikpur, Dudhani, Tinghar, Bandhdih, SP College Road, Dumka Court & Collectorate Colony, Dangalpara, Gilanpara, Khajuria, Purana Dumka, Airport Road, Kathikund bypass, and Jama Road.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section class="god2dum-section">
        <div class="god2dum-container">
            <div class="god2dum-sec-head">
                <span class="god2dum-tag">Helpful Answers</span>
                <h2>Frequently Asked Questions: Godda to Dumka Relocation</h2>
                <p>Have questions about packing safety, timelines, or billing? Find immediate answers below.</p>
            </div>

            <div style="max-width: 880px; margin: 0 auto;">
                <div class="god2dum-faq-item">
                    <h4>What is the typical transit duration from Godda to Dumka?</h4>
                    <p>
                        The highway distance between Godda and Dumka is approximately 70 kilometers along NH-133. Our dedicated closed-container trucks complete the door-to-door transit in roughly 2 to 3 hours under normal traffic conditions.
                    </p>
                </div>

                <div class="god2dum-faq-item">
                    <h4>Do you provide relocation assistance for ECL Lalmatia colliery employees?</h4>
                    <p>
                        Yes, we specialize in Eastern Coalfields Limited (ECL) employee relocations from Lalmatia, Mahagama, and Godda residential colonies. We supply 100% compliant GST invoices, itemized packing inventories, and stamped consignment receipts for departmental claim reimbursements.
                    </p>
                </div>

                <div class="god2dum-faq-item">
                    <h4>Can you handle household goods transfers from Adani Motia Power Plant to Dumka?</h4>
                    <p>
                        Certainly. We regularly assist corporate executives and technical engineers transferring from the Adani Ultra Supercritical Thermal Power Plant at Motia to Dumka. We carry out gate-pass paperwork, premium 5-layer packing, and swift transit.
                    </p>
                </div>

                <div class="god2dum-faq-item">
                    <h4>How are delicate household goods packed for this Santhal Pargana highway route?</h4>
                    <p>
                        We implement a strict 5-tier packaging protocol utilizing virgin bubble wrap, heavy corrugated sheets, high-density edge corner protectors, stretch film wrapping, and reinforced adhesive sealing to prevent road shock absorption along NH-133.
                    </p>
                </div>

                <div class="god2dum-faq-item">
                    <h4>What is the approximate cost of moving a 2 BHK apartment from Godda to Dumka?</h4>
                    <p>
                        A standard 2 BHK household relocation from Godda to Dumka typically ranges between INR 10,500 and 17,500 depending on volume, floor levels, packing material tier, and elevator accessibility at both locations.
                    </p>
                </div>
            </div>

            <!-- Call to Action Banner -->
            <div class="god2dum-cta-banner" id="god2dum-quote">
                <h3>Ready to Relocate from Godda to Dumka?</h3>
                <p>
                    Contact Shree Ashirwad Packers and Movers today for an instant free moving estimate. Experience prompt, professional shifting with verified Santhal Pargana relocation experts.
                </p>
                <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                    <a href="tel:8409531615" class="god2dum-btn-primary" style="background: #f59e0b; color: #0f172a;">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                        Call 8409531615
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20relocation%20from%20Godda%20to%20Dumka." class="god2dum-btn-outline" target="_blank" rel="noopener noreferrer">
                        Chat on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
