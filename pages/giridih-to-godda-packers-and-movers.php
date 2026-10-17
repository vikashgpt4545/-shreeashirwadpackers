<?php
/**
 * Page Name: Giridih to Godda Packers and Movers
 * Route Slug: giridih-to-godda-packers-and-movers
 * Description: Dependable intercity relocation, household shifting, Adani Power & ECL Lalmatia colliery transfer billing, and car/bike transport from Giridih to Godda via Deoghar / Hansdiha.
 * Focus Keywords: giridih to godda packers and movers, packers and movers giridih to godda, house shifting giridih to godda, car transport giridih to godda, bike parcel giridih to godda, adani power godda movers
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Giridih to Godda Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Top-rated Giridih to Godda packers and movers. 165 km transit, same-day delivery, 5-layer safety packaging, Adani Power & ECL transfer billing, car & bike shipping. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/giridih-to-godda-packers-and-movers";
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

    <!-- Scoped CSS for Route 3 (Giridih to Godda) -->
    <style>
        :root {
            --gir2god-primary: #1e3a5f;
            --gir2god-secondary: #0284c7;
            --gir2god-accent: #f59e0b;
            --gir2god-accent-light: #fef3c7;
            --gir2god-dark: #0f172a;
            --gir2god-gray-bg: #f8fafc;
            --gir2god-card-border: #e2e8f0;
            --gir2god-text: #334155;
            --gir2god-text-muted: #64748b;
            --gir2god-radius: 12px;
            --gir2god-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
            --gir2god-shadow-hover: 0 20px 30px -10px rgba(2, 132, 199, 0.18);
        }

        .gir2god-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.92) 0%, rgba(30, 58, 95, 0.88) 100%), url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 70px 20px 65px;
            position: relative;
        }

        .gir2god-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .gir2god-breadcrumbs {
            font-size: 0.9rem;
            color: #cbd5e1;
            margin-bottom: 20px;
        }

        .gir2god-breadcrumbs a {
            color: var(--gir2god-accent);
            text-decoration: none;
        }

        .gir2god-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(245, 158, 11, 0.18);
            border: 1px solid rgba(245, 158, 11, 0.5);
            color: var(--gir2god-accent);
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 0.88rem;
            font-weight: 600;
            margin-bottom: 18px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .gir2god-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            line-height: 1.25;
            font-weight: 800;
            margin-bottom: 18px;
            color: #ffffff;
        }

        .gir2god-hero p {
            font-size: 1.12rem;
            line-height: 1.7;
            max-width: 780px;
            color: #e2e8f0;
            margin-bottom: 28px;
        }

        .gir2god-hero-cta {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .gir2god-btn-primary {
            background: var(--gir2god-accent);
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

        .gir2god-btn-primary:hover {
            background: #d97706;
            transform: translateY(-2px);
            color: #ffffff;
        }

        .gir2god-btn-outline {
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

        .gir2god-btn-outline:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: #ffffff;
        }

        .gir2god-quick-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
            margin-top: 40px;
        }

        .gir2god-stat-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 18px 20px;
            border-radius: var(--gir2god-radius);
        }

        .gir2god-stat-num {
            font-family: 'Outfit', sans-serif;
            font-size: 1.85rem;
            font-weight: 800;
            color: var(--gir2god-accent);
            margin-bottom: 4px;
        }

        .gir2god-stat-lbl {
            font-size: 0.88rem;
            color: #cbd5e1;
        }

        .gir2god-section {
            padding: 60px 0;
        }

        .gir2god-section-alt {
            background-color: var(--gir2god-gray-bg);
        }

        .gir2god-sec-head {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 45px;
        }

        .gir2god-tag {
            display: inline-block;
            background: rgba(2, 132, 199, 0.1);
            color: var(--gir2god-secondary);
            font-size: 0.82rem;
            font-weight: 700;
            padding: 4px 14px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            margin-bottom: 12px;
        }

        .gir2god-sec-head h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            color: var(--gir2god-dark);
            font-weight: 800;
            line-height: 1.3;
            margin-bottom: 14px;
        }

        .gir2god-sec-head p {
            color: var(--gir2god-text-muted);
            font-size: 1.05rem;
            line-height: 1.65;
        }

        .gir2god-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 35px;
            align-items: center;
        }

        .gir2god-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .gir2god-grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .gir2god-card {
            background: #ffffff;
            border: 1px solid var(--gir2god-card-border);
            border-radius: var(--gir2god-radius);
            padding: 26px;
            box-shadow: var(--gir2god-shadow);
            transition: all 0.3s ease;
        }

        .gir2god-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--gir2god-shadow-hover);
            border-color: rgba(2, 132, 199, 0.3);
        }

        .gir2god-card-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: rgba(2, 132, 199, 0.12);
            color: var(--gir2god-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 18px;
        }

        .gir2god-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.3rem;
            color: var(--gir2god-dark);
            margin-bottom: 12px;
            font-weight: 700;
        }

        .gir2god-card p {
            color: var(--gir2god-text);
            font-size: 0.95rem;
            line-height: 1.65;
        }

        .gir2god-img-wrapper {
            border-radius: var(--gir2god-radius);
            overflow: hidden;
            box-shadow: var(--gir2god-shadow);
        }

        .gir2god-img-wrapper img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .gir2god-img-wrapper:hover img {
            transform: scale(1.03);
        }

        .gir2god-table-box {
            background: #ffffff;
            border-radius: var(--gir2god-radius);
            box-shadow: var(--gir2god-shadow);
            overflow: hidden;
            border: 1px solid var(--gir2god-card-border);
            margin: 25px 0;
        }

        .gir2god-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .gir2god-table th {
            background: var(--gir2god-primary);
            color: #ffffff;
            font-family: 'Outfit', sans-serif;
            padding: 16px 20px;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .gir2god-table td {
            padding: 14px 20px;
            border-bottom: 1px solid #f1f5f9;
            color: var(--gir2god-text);
            font-size: 0.94rem;
        }

        .gir2god-table tr:nth-child(even) {
            background: #f8fafc;
        }

        .gir2god-route-info-box {
            background: #eff6ff;
            border-left: 4px solid var(--gir2god-secondary);
            padding: 22px 24px;
            border-radius: 0 10px 10px 0;
            margin: 25px 0;
        }

        .gir2god-route-info-box h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            color: var(--gir2god-primary);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .gir2god-faq-item {
            background: #ffffff;
            border: 1px solid var(--gir2god-card-border);
            border-radius: var(--gir2god-radius);
            padding: 20px 24px;
            margin-bottom: 16px;
            box-shadow: var(--gir2god-shadow);
        }

        .gir2god-faq-item h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.12rem;
            color: var(--gir2god-dark);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .gir2god-faq-item p {
            color: var(--gir2god-text);
            font-size: 0.95rem;
            line-height: 1.65;
            margin: 0;
        }

        .gir2god-cta-banner {
            background: linear-gradient(135deg, #1e3a5f 0%, #0f172a 100%);
            border-radius: 16px;
            padding: 50px 30px;
            text-align: center;
            color: #ffffff;
            margin-top: 50px;
            box-shadow: 0 15px 30px rgba(15, 23, 42, 0.2);
        }

        .gir2god-cta-banner h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.1rem;
            font-weight: 800;
            margin-bottom: 14px;
        }

        .gir2god-cta-banner p {
            font-size: 1.05rem;
            max-width: 680px;
            margin: 0 auto 25px;
            color: #cbd5e1;
            line-height: 1.65;
        }

        @media (max-width: 768px) {
            .gir2god-hero h1 {
                font-size: 2.1rem;
            }
            .gir2god-grid-2 {
                grid-template-columns: 1fr;
            }
            .gir2god-table th, .gir2god-table td {
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
      "name": "Shree Ashirwad Packers and Movers Giridih to Godda",
      "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
      "@id": "https://www.shreeashirwadpackers.com/#giridih-to-godda-packers",
      "url": "https://www.shreeashirwadpackers.com/giridih-to-godda-packers-and-movers",
      "telephone": "+91-8409531615",
      "priceRange": "INR 7,000 - 55,000",
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
          "name": "Giridih, Jharkhand"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Godda, Jharkhand"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Giridih to Godda Relocation Services",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Household Relocation from Giridih to Godda"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Adani Power Motia Plant Employee Relocation"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "ECL Lalmatia Colliery Personnel Moves"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Car and Two-Wheeler Carrier to Godda"
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
          "name": "Giridih to Godda Packers and Movers",
          "item": "https://www.shreeashirwadpackers.com/giridih-to-godda-packers-and-movers"
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
          "name": "What is the typical transit duration from Giridih to Godda?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The highway distance between Giridih and Godda is approximately 165 kilometers via Bengabad, Madhupur, Deoghar, and Hansdiha along NH-114A and NH-133. Our direct closed container trucks complete the door-to-door transit in roughly 4.5 to 5.5 hours, ensuring guaranteed same-day delivery."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide moving assistance for Adani Power and ECL Lalmatia employees?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we regularly handle employee relocations to the Adani Ultra Supercritical Thermal Power Plant at Motia, as well as the Eastern Coalfields Limited (ECL) Rajmahal Open Cast Mining Project at Lalmatia. We supply 100% compliant GST invoices and itemized bills for official reimbursement."
          }
        },
        {
          "@type": "Question",
          "name": "Do you deliver to Mahagama, Pathargama, and Motia around Godda?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, our delivery network covers every part of Godda district, including Godda town center, Mahagama, Pathargama, Boarijor, Lalmatia ECL township, Motia Adani plant colony, and Sundarpahari."
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
          "name": "What is the approximate cost of moving a 2 BHK apartment from Giridih to Godda?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A standard 2 BHK household relocation from Giridih to Godda typically ranges between INR 12,500 and 19,500 depending on volume, floor levels, packing material tier, and elevator accessibility at both locations."
          }
        }
      ]
    }
    </script>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <!-- Hero Section -->
    <header class="gir2god-hero">
        <div class="gir2god-container">
            <nav class="gir2god-breadcrumbs" aria-label="breadcrumb">
                <a href="<?php echo SITE_BASE_URL; ?>/">Home</a> &raquo; 
                <a href="<?php echo SITE_BASE_URL; ?>/services">Intercity Routes</a> &raquo; 
                <span>Giridih to Godda</span>
            </nav>
            <div class="gir2god-hero-badge">&#10004; Dedicated Santhal Pargana Power Corridor</div>
            <h1>Dependable Giridih to Godda Packers and Movers</h1>
            <p>
                Professional intercity moving services from Giridih to Godda, Adani Power Plant (Motia), and ECL Lalmatia. Complete household shifting, corporate employee transfers, enclosed car carrier transit, and bike courier with guaranteed same-day delivery.
            </p>
            <div class="gir2god-hero-cta">
                <a href="tel:8409531615" class="gir2god-btn-primary">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                    Call: 8409531615
                </a>
                <a href="#gir2god-quote" class="gir2god-btn-outline">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Request Free Estimate
                </a>
            </div>

            <div class="gir2god-quick-stats">
                <div class="gir2god-stat-card">
                    <div class="gir2god-stat-num">165 KM</div>
                    <div class="gir2god-stat-lbl">Highway Distance via NH-133</div>
                </div>
                <div class="gir2god-stat-card">
                    <div class="gir2god-stat-num">4.5-5.5 Hrs</div>
                    <div class="gir2god-stat-lbl">Doorstep Same-Day Transit</div>
                </div>
                <div class="gir2god-stat-card">
                    <div class="gir2god-stat-num">100% Safe</div>
                    <div class="gir2god-stat-lbl">Weatherproof Container Fleet</div>
                </div>
                <div class="gir2god-stat-card">
                    <div class="gir2god-stat-num">GST Approved</div>
                    <div class="gir2god-stat-lbl">Adani Power & ECL Claims</div>
                </div>
            </div>
        </div>
    </header>

    <!-- Overview Section -->
    <section class="gir2god-section">
        <div class="gir2god-container">
            <div class="gir2god-grid-2">
                <div>
                    <span class="gir2god-tag">Premier Regional Logistics</span>
                    <h2>Fast & Safe Relocation from Giridih to Godda Energy Hub</h2>
                    <p>
                        The intercity corridor between Giridih and Godda spans approximately 165 kilometers, connecting North Chota Nagpur’s prominent steel processing and mica trading hub with eastern Jharkhand’s vital energy and mining capital. Godda is globally recognized for the 1,600 MW Adani Ultra Supercritical Thermal Power Plant at Motia, as well as the massive Eastern Coalfields Limited (ECL) Rajmahal Open Cast Project at Lalmatia.
                    </p>
                    <p>
                        At Shree Ashirwad Packers and Movers, we handle regular household, industrial, and vehicle relocations between Giridih and Godda. Whether you are an electrical engineer transferring to the Adani plant at Motia, an ECL colliery supervisor moving to Lalmatia or Mahagama, a civil service officer joining the Godda collectorate, or a business family establishing residency in Godda town, we guarantee an efficient, same-day moving experience.
                    </p>
                    <p>
                        Our specialized crews bring heavy-duty packing supplies, professional dismantle-and-reassemble toolkits, and sealed container carriers directly to your Giridih premises in Makatpur, Bada Chowk, Pachamba, Sirsia, Moti Nagar, or Baniadih. We pack, load, transport across the Deoghar-Hansdiha highway corridor safely, and deliver to your new home in Godda within 4.5 to 5.5 hours.
                    </p>
                    <p>
                        Furthermore, our logistics coordinators maintain strict adherence to regional safety norms, providing itemized invoices compliant with corporate and public sector transfer reimbursement criteria.
                    </p>
                </div>
                <div>
                    <div class="gir2god-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe transit container truck for Giridih to Godda relocation" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Highlights -->
    <section class="gir2god-section gir2god-section-alt">
        <div class="gir2god-container">
            <div class="gir2god-sec-head">
                <span class="gir2god-tag">Dedicated Moving Solutions</span>
                <h2>Specialized Shifting Services: Giridih to Godda</h2>
                <p>Tailored moving services designed to handle family apartments, power plant quarters, and vehicle transport.</p>
            </div>

            <div class="gir2god-grid-3">
                <div class="gir2god-card">
                    <div class="gir2god-card-icon">&#127968;</div>
                    <h3>Complete Household Relocation</h3>
                    <p>
                        Comprehensive home shifting from 1 BHK to luxury duplexes. We pack, disassemble double beds and modular wardrobes, transport in covered containers, and reassemble everything at your Godda home.
                    </p>
                </div>

                <div class="gir2god-card">
                    <div class="gir2god-card-icon">&#9889;</div>
                    <h3>Adani Power Plant Staff Relocations</h3>
                    <p>
                        Specialized moving support for Adani Power executives, engineers, and technicians relocating to Motia plant quarters. We provide standardized billing and inventories for instant reimbursement approval.
                    </p>
                </div>

                <div class="gir2god-card">
                    <div class="gir2god-card-icon">&#9874;</div>
                    <h3>ECL Lalmatia Colliery Transfers</h3>
                    <p>
                        Complete documentation and logistics support for Eastern Coalfields Limited personnel moving between Giridih and Lalmatia mining townships.
                    </p>
                </div>

                <div class="gir2god-card">
                    <div class="gir2god-card-icon">&#128663;</div>
                    <h3>Door-to-Door Car Carrier</h3>
                    <p>
                        Secure car transport inside enclosed auto trailers. We transport hatchbacks, sedans, and SUVs from Giridih to Godda with wheel locks, protective bumper shields, and full transit insurance.
                    </p>
                </div>

                <div class="gir2god-card">
                    <div class="gir2god-card-icon">&#127949;</div>
                    <h3>Two-Wheeler Bike Courier</h3>
                    <p>
                        Bikes and scooters receive multi-layer wrapping with bubble sheets, corrugated cartons, and mirror padding. Fuel is drained to regulatory safety levels, battery terminals secured, and the vehicle is transported securely inside covered trucks.
                    </p>
                </div>

                <div class="gir2god-card">
                    <div class="gir2god-card-icon">&#128188;</div>
                    <h3>Commercial & Office Moving</h3>
                    <p>
                        Relocating business offices, retail merchandise, medical equipment, or IT workstations between Giridih and Godda. We deploy anti-static packaging, serial-numbered carton sealing, and systematic file archiving.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Packaging Standard Section -->
    <section class="gir2god-section">
        <div class="gir2god-container">
            <div class="gir2god-grid-2">
                <div>
                    <div class="gir2god-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="5 layer packing process for Giridih to Godda household shifting" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="gir2god-tag">Protection Technology</span>
                    <h2>Engineered 5-Layer Packaging for Regional Highway Transit</h2>
                    <p>
                        The 165-kilometer highway connecting Giridih to Godda crosses rural roads, active industrial coal traffic, and fly ash corridors around Lalmatia and Motia. To eliminate all transit vibration and dust contamination, Shree Ashirwad adheres to an unyielding 5-layer packing methodology:
                    </p>
                    <ul style="color: var(--gir2god-text); line-height: 1.8; padding-left: 20px; margin-bottom: 20px;">
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
    <section class="gir2god-section gir2god-section-alt">
        <div class="gir2god-container">
            <div class="gir2god-sec-head">
                <span class="gir2god-tag">Transparent Tariff</span>
                <h2>Giridih to Godda Relocation Cost Estimates</h2>
                <p>Fair, itemized, and transparent pricing without hidden tolls or sudden fuel surcharges. Contact our team for an exact, tailored quotation.</p>
            </div>

            <div class="gir2god-table-box">
                <table class="gir2god-table">
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
                            <td><strong>1 BHK Apartment / Power Colony Flat</strong></td>
                            <td>Standard 3-Layer Corrugated</td>
                            <td>2 Packers + 2 Loaders</td>
                            <td>Same Day (4.5 - 5.5 Hrs)</td>
                            <td>&#8377; 7,500 - &#8377; 12,000</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Flat / Full House Shifting</strong></td>
                            <td>Premium 5-Layer Protective</td>
                            <td>3 Packers + 3 Loaders</td>
                            <td>Same Day (4.5 - 5.5 Hrs)</td>
                            <td>&#8377; 12,500 - &#8377; 19,500</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK / Executive Duplex Villa</strong></td>
                            <td>Super Heavy Bubble + Wooden Crates</td>
                            <td>4 Packers + 4 Loaders</td>
                            <td>Same Day (5 - 6 Hrs)</td>
                            <td>&#8377; 19,000 - &#8377; 29,000</td>
                        </tr>
                        <tr>
                            <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                            <td>Corrugated Foam + Bubble Wrap</td>
                            <td>Loading & Lashing Included</td>
                            <td>24 Hours Delivery</td>
                            <td>&#8377; 2,600 - &#8377; 4,200</td>
                        </tr>
                        <tr>
                            <td><strong>Motor Car (Hatchback / Sedan)</strong></td>
                            <td>Enclosed Carrier Vehicle</td>
                            <td>Hydraulic Ramp Handling</td>
                            <td>Same Day Delivery</td>
                            <td>&#8377; 5,800 - &#8377; 9,500</td>
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

            <div class="gir2god-route-info-box">
                <h4>Route Blueprint: Giridih to Godda Highway Transit Details</h4>
                <p>
                    <strong>Transit Path:</strong> Giridih town center &rarr; Bengabad &rarr; Madhupur link &rarr; Deoghar Bypass &rarr; Hansdiha &rarr; Godda Town &rarr; Motia (Adani Plant) / Mahagama / Lalmatia. Total distance is roughly 165 km. Dedicated covered container trucks ensure prompt same-day transit within 4.5 to 5.5 hours.
                </p>
            </div>
        </div>
    </section>

    <!-- Vehicle Transport Section -->
    <section class="gir2god-section">
        <div class="gir2god-container">
            <div class="gir2god-grid-2">
                <div>
                    <span class="gir2god-tag">Vehicle Logistics</span>
                    <h2>Secure Two-Wheeler & Car Transport: Giridih to Godda</h2>
                    <p>
                        Driving personal vehicles between Giridih and Godda through heavy industrial corridors with coal dumpers and thermal plant trailers can be exhausting and hazardous. Shree Ashirwad Packers and Movers provides a reliable, secure automotive carrier service.
                    </p>
                    <p>
                        Our specialized car transport trailers and enclosed single-vehicle carriers are equipped with safety winches, custom wheel locks, and soft bumper shields that ensure your vehicle stays completely stationary during the trip. Before loading at your Giridih residence, our field supervisor conducts a thorough multi-point exterior inspection, recording tire treads, fuel levels, and existing scratches on a formal Vehicle Condition Sheet.
                    </p>
                    <p>
                        For motorcycles and sports bikes, we use heavy-duty corrugated sheet wrapping around fuel tanks, headlamps, and chrome mirrors, followed by thick bubble insulation. Vehicles are delivered clean and undamaged right at your doorstep in Godda.
                    </p>
                </div>
                <div>
                    <div class="gir2god-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transport carrier loading from Giridih to Godda" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="gir2god-section gir2god-section-alt">
        <div class="gir2god-container">
            <div class="gir2god-sec-head">
                <span class="gir2god-tag">Service Advantages</span>
                <h2>Why Choose Shree Ashirwad for Giridih to Godda Moves</h2>
                <p>Reliable local operations, certified moving crews, and an unwavering focus on customer satisfaction.</p>
            </div>

            <div class="gir2god-grid-4">
                <div class="gir2god-card">
                    <div class="gir2god-card-icon">&#9989;</div>
                    <h3>Trained In-House Staff</h3>
                    <p>We never use untrained daily wage contractors. Our permanent crew has mastered delicate furniture handling, electronics packing, and staircase maneuvering.</p>
                </div>

                <div class="gir2god-card">
                    <div class="gir2god-card-icon">&#128337;</div>
                    <h3>Same-Day Delivery</h3>
                    <p>Because the Giridih-Godda distance is 165 km, our dedicated trucks load in the morning and deliver to Godda by evening on the very same day.</p>
                </div>

                <div class="gir2god-card">
                    <div class="gir2god-card-icon">&#128176;</div>
                    <h3>Zero Hidden Costs</h3>
                    <p>Transparent written price quotations detailing toll charges, loading, unloading, packing supplies, and transit logistics with 100% upfront clarity.</p>
                </div>

                <div class="gir2god-card">
                    <div class="gir2god-card-icon">&#128221;</div>
                    <h3>Government Claim Invoices</h3>
                    <p>Full GST billing, computer-generated packing inventories, consignment notes, and stamped invoices compliant with Adani Power, ECL, and PSU transfer norms.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Unpacking and Setup Section -->
    <section class="gir2god-section">
        <div class="gir2god-container">
            <div class="gir2god-grid-2">
                <div>
                    <div class="gir2god-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and home setup service in Godda" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="gir2god-tag">Complete Destination Care</span>
                    <h2>Hassle-Free Unloading, Unpacking & Setup in Godda</h2>
                    <p>
                        A relocation is only half-finished when the truck arrives at your destination. Moving heavy cartons into upper floor apartments or assembling large modular wardrobes can quickly overwhelm a busy family. That is why Shree Ashirwad Packers and Movers provides full destination handling services in Godda.
                    </p>
                    <p>
                        Upon reaching your new home in Godda—whether it is located in Godda town, Mahagama, Pathargama, Motia Adani plant colony, or Lalmatia ECL township—our team carefully unloads all articles, carries them up elevators or staircases, and places each carton in its designated room.
                    </p>
                    <p>
                        Our skilled crew unpacks delicate dinnerware, reassembles double beds, positions large sofa sets, reattaches modular study desks, and clears away all leftover wrapping paper, shredded cardboard, and plastic rolls—leaving your new residence tidy and ready to live in.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Localities Covered -->
    <section class="gir2god-section gir2god-section-alt">
        <div class="gir2god-container">
            <div class="gir2god-sec-head">
                <span class="gir2god-tag">Coverage Area</span>
                <h2>Neighborhoods Covered Across Giridih and Godda</h2>
                <p>Door-to-door pickup and delivery across every residential colony, commercial market, and surrounding industrial township.</p>
            </div>

            <div class="gir2god-grid-2">
                <div class="gir2god-card">
                    <h3>Pickup Locations in Giridih District</h3>
                    <p>
                        Makatpur, Bada Chowk, Pachamba, Sirsia, Moti Nagar, Baniadih, Buxidih, Giridih Court & Collectorate Colony, New Barganda, Mohanpur, Bengabad Road, and Jamua bypass.
                    </p>
                </div>

                <div class="gir2god-card">
                    <h3>Delivery Locations in Godda District</h3>
                    <p>
                        Godda Town Center, Rautara, Kargali, Motia (Adani Power Plant Township), Mahagama, Pathargama, Lalmatia (ECL Rajmahal Mining Colony), Boarijor, and Sundarpahari.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section class="gir2god-section">
        <div class="gir2god-container">
            <div class="gir2god-sec-head">
                <span class="gir2god-tag">Helpful Answers</span>
                <h2>Frequently Asked Questions: Giridih to Godda Relocation</h2>
                <p>Have questions about packing safety, timelines, or billing? Find immediate answers below.</p>
            </div>

            <div style="max-width: 880px; margin: 0 auto;">
                <div class="gir2god-faq-item">
                    <h4>What is the typical transit duration from Giridih to Godda?</h4>
                    <p>
                        The highway distance between Giridih and Godda is approximately 165 kilometers via Bengabad, Madhupur, Deoghar, and Hansdiha along NH-114A and NH-133. Our direct closed container trucks complete the door-to-door transit in roughly 4.5 to 5.5 hours, ensuring guaranteed same-day delivery.
                    </p>
                </div>

                <div class="gir2god-faq-item">
                    <h4>Do you provide moving assistance for Adani Power and ECL Lalmatia employees?</h4>
                    <p>
                        Yes, we regularly handle employee relocations to the Adani Ultra Supercritical Thermal Power Plant at Motia, as well as the Eastern Coalfields Limited (ECL) Rajmahal Open Cast Mining Project at Lalmatia. We supply 100% compliant GST invoices and itemized bills for official reimbursement.
                    </p>
                </div>

                <div class="gir2god-faq-item">
                    <h4>Do you deliver to Mahagama, Pathargama, and Motia around Godda?</h4>
                    <p>
                        Yes, our delivery network covers every part of Godda district, including Godda town center, Mahagama, Pathargama, Boarijor, Lalmatia ECL township, Motia Adani plant colony, and Sundarpahari.
                    </p>
                </div>

                <div class="gir2god-faq-item">
                    <h4>How are fragile furniture and electronics safeguarded during transit?</h4>
                    <p>
                        We implement a strict 5-tier packaging protocol utilizing virgin bubble wrap, heavy corrugated sheets, high-density edge corner protectors, stretch film wrapping, and reinforced adhesive sealing to prevent road shock absorption.
                    </p>
                </div>

                <div class="gir2god-faq-item">
                    <h4>What is the approximate cost of moving a 2 BHK apartment from Giridih to Godda?</h4>
                    <p>
                        A standard 2 BHK household relocation from Giridih to Godda typically ranges between INR 12,500 and 19,500 depending on volume, floor levels, packing material tier, and elevator accessibility at both locations.
                    </p>
                </div>
            </div>

            <!-- Call to Action Banner -->
            <div class="gir2god-cta-banner" id="gir2god-quote">
                <h3>Ready to Relocate from Giridih to Godda?</h3>
                <p>
                    Contact Shree Ashirwad Packers and Movers today for an instant free moving estimate. Experience prompt, professional shifting with verified intercity relocation experts.
                </p>
                <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                    <a href="tel:8409531615" class="gir2god-btn-primary" style="background: #f59e0b; color: #0f172a;">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                        Call 8409531615
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20relocation%20from%20Giridih%20to%20Godda." class="gir2god-btn-outline" target="_blank" rel="noopener noreferrer">
                        Chat on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
