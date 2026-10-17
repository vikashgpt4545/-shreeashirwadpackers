<?php
/**
 * Page Name: Ramgarh to Delhi Packers and Movers
 * Route Slug: ramgarh-to-delhi-packers-and-movers
 * Description: Dedicated interstate relocation, household shifting, Delhi & Ramgarh Cantonment transfer claims, corporate Gurgaon & Noida moving, car carrier transit, and bike shipping from Ramgarh to Delhi NCR.
 * Focus Keywords: ramgarh to delhi packers and movers, packers and movers ramgarh to delhi, house shifting ramgarh to delhi, car transport ramgarh to delhi, bike parcel ramgarh to delhi, movers from ramgarh to delhi
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Ramgarh to Delhi Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Top-rated Ramgarh to Delhi packers and movers. 1180 km transit via GT Road & Yamuna Expressway, 5-layer safety packaging, Delhi Cantonment & corporate transfer billing, car & bike carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/ramgarh-to-delhi-packers-and-movers";
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
    <meta name="geo.placename" content="Ramgarh">

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

    <!-- Scoped CSS for Route 13 (Ramgarh to Delhi) -->
    <style>
        :root {
            --ram2del-primary: #1e3a5f;
            --ram2del-secondary: #0284c7;
            --ram2del-accent: #f59e0b;
            --ram2del-accent-light: #fef3c7;
            --ram2del-dark: #0f172a;
            --ram2del-gray-bg: #f8fafc;
            --ram2del-card-border: #e2e8f0;
            --ram2del-text: #334155;
            --ram2del-text-muted: #64748b;
            --ram2del-radius: 12px;
            --ram2del-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
            --ram2del-shadow-hover: 0 20px 30px -10px rgba(2, 132, 199, 0.18);
        }

        .ram2del-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.92) 0%, rgba(30, 58, 95, 0.88) 100%), url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 70px 20px 65px;
            position: relative;
        }

        .ram2del-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .ram2del-breadcrumbs {
            font-size: 0.9rem;
            color: #cbd5e1;
            margin-bottom: 20px;
        }

        .ram2del-breadcrumbs a {
            color: var(--ram2del-accent);
            text-decoration: none;
        }

        .ram2del-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(245, 158, 11, 0.18);
            border: 1px solid rgba(245, 158, 11, 0.5);
            color: var(--ram2del-accent);
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 0.88rem;
            font-weight: 600;
            margin-bottom: 18px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .ram2del-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            line-height: 1.25;
            font-weight: 800;
            margin-bottom: 18px;
            color: #ffffff;
        }

        .ram2del-hero p {
            font-size: 1.12rem;
            line-height: 1.7;
            max-width: 780px;
            color: #e2e8f0;
            margin-bottom: 28px;
        }

        .ram2del-hero-cta {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .ram2del-btn-primary {
            background: var(--ram2del-accent);
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

        .ram2del-btn-primary:hover {
            background: #d97706;
            transform: translateY(-2px);
            color: #ffffff;
        }

        .ram2del-btn-outline {
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

        .ram2del-btn-outline:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: #ffffff;
        }

        .ram2del-quick-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
            margin-top: 40px;
        }

        .ram2del-stat-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 18px 20px;
            border-radius: var(--ram2del-radius);
        }

        .ram2del-stat-num {
            font-family: 'Outfit', sans-serif;
            font-size: 1.85rem;
            font-weight: 800;
            color: var(--ram2del-accent);
            margin-bottom: 4px;
        }

        .ram2del-stat-lbl {
            font-size: 0.88rem;
            color: #cbd5e1;
        }

        .ram2del-section {
            padding: 60px 0;
        }

        .ram2del-section-alt {
            background-color: var(--ram2del-gray-bg);
        }

        .ram2del-sec-head {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 45px;
        }

        .ram2del-tag {
            display: inline-block;
            background: rgba(2, 132, 199, 0.1);
            color: var(--ram2del-secondary);
            font-size: 0.82rem;
            font-weight: 700;
            padding: 4px 14px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            margin-bottom: 12px;
        }

        .ram2del-sec-head h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            color: var(--ram2del-dark);
            font-weight: 800;
            line-height: 1.3;
            margin-bottom: 14px;
        }

        .ram2del-sec-head p {
            color: var(--ram2del-text-muted);
            font-size: 1.05rem;
            line-height: 1.65;
        }

        .ram2del-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 35px;
            align-items: center;
        }

        .ram2del-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .ram2del-grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .ram2del-card {
            background: #ffffff;
            border: 1px solid var(--ram2del-card-border);
            border-radius: var(--ram2del-radius);
            padding: 26px;
            box-shadow: var(--ram2del-shadow);
            transition: all 0.3s ease;
        }

        .ram2del-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--ram2del-shadow-hover);
            border-color: rgba(2, 132, 199, 0.3);
        }

        .ram2del-card-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: rgba(2, 132, 199, 0.12);
            color: var(--ram2del-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 18px;
        }

        .ram2del-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.3rem;
            color: var(--ram2del-dark);
            margin-bottom: 12px;
            font-weight: 700;
        }

        .ram2del-card p {
            color: var(--ram2del-text);
            font-size: 0.95rem;
            line-height: 1.65;
        }

        .ram2del-img-wrapper {
            border-radius: var(--ram2del-radius);
            overflow: hidden;
            box-shadow: var(--ram2del-shadow);
        }

        .ram2del-img-wrapper img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .ram2del-img-wrapper:hover img {
            transform: scale(1.03);
        }

        .ram2del-table-box {
            background: #ffffff;
            border-radius: var(--ram2del-radius);
            box-shadow: var(--ram2del-shadow);
            overflow: hidden;
            border: 1px solid var(--ram2del-card-border);
            margin: 25px 0;
        }

        .ram2del-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .ram2del-table th {
            background: var(--ram2del-primary);
            color: #ffffff;
            font-family: 'Outfit', sans-serif;
            padding: 16px 20px;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .ram2del-table td {
            padding: 14px 20px;
            border-bottom: 1px solid #f1f5f9;
            color: var(--ram2del-text);
            font-size: 0.94rem;
        }

        .ram2del-table tr:nth-child(even) {
            background: #f8fafc;
        }

        .ram2del-route-info-box {
            background: #eff6ff;
            border-left: 4px solid var(--ram2del-secondary);
            padding: 22px 24px;
            border-radius: 0 10px 10px 0;
            margin: 25px 0;
        }

        .ram2del-route-info-box h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            color: var(--ram2del-primary);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .ram2del-faq-item {
            background: #ffffff;
            border: 1px solid var(--ram2del-card-border);
            border-radius: var(--ram2del-radius);
            padding: 20px 24px;
            margin-bottom: 16px;
            box-shadow: var(--ram2del-shadow);
        }

        .ram2del-faq-item h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.12rem;
            color: var(--ram2del-dark);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .ram2del-faq-item p {
            color: var(--ram2del-text);
            font-size: 0.95rem;
            line-height: 1.65;
            margin: 0;
        }

        .ram2del-cta-banner {
            background: linear-gradient(135deg, #1e3a5f 0%, #0f172a 100%);
            border-radius: 16px;
            padding: 50px 30px;
            text-align: center;
            color: #ffffff;
            margin-top: 50px;
            box-shadow: 0 15px 30px rgba(15, 23, 42, 0.2);
        }

        .ram2del-cta-banner h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.1rem;
            font-weight: 800;
            margin-bottom: 14px;
        }

        .ram2del-cta-banner p {
            font-size: 1.05rem;
            max-width: 680px;
            margin: 0 auto 25px;
            color: #cbd5e1;
            line-height: 1.65;
        }

        @media (max-width: 768px) {
            .ram2del-hero h1 {
                font-size: 2.1rem;
            }
            .ram2del-grid-2 {
                grid-template-columns: 1fr;
            }
            .ram2del-table th, .ram2del-table td {
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
      "name": "Shree Ashirwad Packers and Movers Ramgarh to Delhi",
      "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
      "@id": "https://www.shreeashirwadpackers.com/#ramgarh-to-delhi-packers",
      "url": "https://www.shreeashirwadpackers.com/ramgarh-to-delhi-packers-and-movers",
      "telephone": "+91-8409531615",
      "priceRange": "INR 18,500 - 85,000",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Main Road, Near Subhash Chowk",
        "addressLocality": "Ramgarh Cantonment",
        "addressRegion": "Jharkhand",
        "postalCode": "829122",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 23.6337,
        "longitude": 85.5147
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
      "serviceType": "Interstate Relocation and Long-Distance Transportation Services",
      "provider": {
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers",
        "telephone": "+91-8409531615",
        "url": "https://www.shreeashirwadpackers.com"
      },
      "areaServed": [
        {
          "@type": "City",
          "name": "Ramgarh, Jharkhand"
        },
        {
          "@type": "City",
          "name": "Delhi NCR, India"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Ramgarh to Delhi Relocation Services",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Household Relocation from Ramgarh to Delhi NCR"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Defense Delhi Cantonment & Corporate Transfers"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Car Carrier Shipping to Delhi NCR"
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
          "name": "Interstate Routes",
          "item": "https://www.shreeashirwadpackers.com/services"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Ramgarh to Delhi Packers and Movers",
          "item": "https://www.shreeashirwadpackers.com/ramgarh-to-delhi-packers-and-movers"
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
          "name": "What is the typical transit duration from Ramgarh to Delhi NCR?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The highway distance between Ramgarh and Delhi NCR is approximately 1,180 kilometers via Grand Trunk Road (NH-19 / AH1) passing Varanasi, Prayagraj, Kanpur, and the Yamuna Expressway into Greater Noida and Delhi. Our direct GPS-tracked sealed containers reach Delhi NCR within 48 to 72 hours."
          }
        },
        {
          "@type": "Question",
          "name": "Do you deliver to Delhi Cantonment, Gurgaon, and Noida?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, our delivery network covers the entire National Capital Region (NCR), including Delhi Cantonment, South Delhi (Saket, Vasant Kunj, Hauz Khas), Dwarka, Rohini, Gurgaon (DLF Cyber City, Golf Course Road), Noida (Sectors 1 to 150), Greater Noida, Ghaziabad, and Faridabad."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide compliant transfer billing for defense and central government personnel?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we provide 100% compliant GST invoices, detailed itemized inventories, consignment notes (bilty), and payment receipts accepted by military audit authorities (Delhi Cantonment / Army HQ / Ministry of Defence), Central Coalfields Limited, and central public sector enterprises."
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
          "name": "What is the approximate cost of moving a 2 BHK apartment from Ramgarh to Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A standard 2 BHK household relocation from Ramgarh to Delhi NCR typically ranges between INR 26,000 and 38,000 depending on volume, floor levels, packing material tier, and elevator accessibility at both locations."
          }
        }
      ]
    }
    </script>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <!-- Hero Section -->
    <header class="ram2del-hero">
        <div class="ram2del-container">
            <nav class="ram2del-breadcrumbs" aria-label="breadcrumb">
                <a href="<?php echo SITE_BASE_URL; ?>/">Home</a> &raquo; 
                <a href="<?php echo SITE_BASE_URL; ?>/services">Interstate Routes</a> &raquo; 
                <span>Ramgarh to Delhi NCR</span>
            </nav>
            <div class="ram2del-hero-badge">&#10004; Dedicated Interstate Long-Haul Express Corridor</div>
            <h1>Reliable Ramgarh to Delhi Packers and Movers</h1>
            <p>
                Professional interstate moving services from Ramgarh Cantonment, Barka-Sayal, and Patratu to Delhi NCR (Delhi Cantonment, Dwarka, Gurgaon, Noida, South Delhi). Complete household shifting, military & central PSU transfer billing, enclosed car carrier transit, and bike courier with guaranteed safe delivery.
            </p>
            <div class="ram2del-hero-cta">
                <a href="tel:8409531615" class="ram2del-btn-primary">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                    Call: 8409531615
                </a>
                <a href="#ram2del-quote" class="ram2del-btn-outline">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Request Free Estimate
                </a>
            </div>

            <div class="ram2del-quick-stats">
                <div class="ram2del-stat-card">
                    <div class="ram2del-stat-num">1180 KM</div>
                    <div class="ram2del-stat-lbl">Highway Distance via GT Road & Yamuna Expressway</div>
                </div>
                <div class="ram2del-stat-card">
                    <div class="ram2del-stat-num">48-72 Hrs</div>
                    <div class="ram2del-stat-lbl">Doorstep Express Delivery</div>
                </div>
                <div class="ram2del-stat-card">
                    <div class="ram2del-stat-num">100% Safe</div>
                    <div class="ram2del-stat-lbl">Weatherproof Container Fleet</div>
                </div>
                <div class="ram2del-stat-card">
                    <div class="ram2del-stat-num">GST Approved</div>
                    <div class="ram2del-stat-lbl">Delhi Cantonment & Corporate Claim Billing</div>
                </div>
            </div>
        </div>
    </header>

    <!-- Overview Section -->
    <section class="ram2del-section">
        <div class="ram2del-container">
            <div class="ram2del-grid-2">
                <div>
                    <span class="ram2del-tag">Premier Interstate Logistics</span>
                    <h2>Fast & Safe Relocation from Ramgarh to National Capital Region (Delhi NCR)</h2>
                    <p>
                        The long-haul interstate corridor connecting Ramgarh to Delhi spans approximately 1,180 kilometers along the historic Grand Trunk Road (National Highway 19 / Asian Highway 1) and the high-speed Yamuna Expressway. This arterial route links the defense cantonment, coal mining commands, and thermal power facilities of Ramgarh District with the nation's political, diplomatic, and corporate hub in Delhi NCR.
                    </p>
                    <p>
                        With continuous employee transfers involving armed forces officers moving from Ramgarh Cantonment (SRC & PRC centres) to Delhi Cantonment, Army Headquarters, and Ministry of Defence establishments, alongside corporate executives transferring to corporate tech parks in Gurgaon and Noida, specialized nationwide moving expertise is critical. At Shree Ashirwad Packers and Movers, we deliver dependable, scheduled door-to-door transit across this trans-national corridor.
                    </p>
                    <p>
                        Our specialized crews bring heavy-duty packing supplies, professional dismantle-and-reassemble toolkits, and sealed container carriers directly to your Ramgarh premises in Subhash Chowk, Gola Road, Barka-Sayal, or Patratu. We pack, load, transport across states safely, and unpack at your new home in Delhi NCR within 48 to 72 hours.
                    </p>
                    <p>
                        Furthermore, our logistics coordinators maintain strict adherence to interstate transport regulations, providing itemized invoices compliant with corporate, defense, and public sector transfer reimbursement criteria.
                    </p>
                </div>
                <div>
                    <div class="ram2del-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe transit container truck for Ramgarh to Delhi relocation" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Highlights -->
    <section class="ram2del-section ram2del-section-alt">
        <div class="ram2del-container">
            <div class="ram2del-sec-head">
                <span class="ram2del-tag">Dedicated Moving Solutions</span>
                <h2>Specialized Shifting Services: Ramgarh to Delhi NCR</h2>
                <p>Tailored moving services designed to handle family apartments, defense quarters, and vehicle transport.</p>
            </div>

            <div class="ram2del-grid-3">
                <div class="ram2del-card">
                    <div class="ram2del-card-icon">&#127968;</div>
                    <h3>Complete Household Relocation</h3>
                    <p>
                        Comprehensive home shifting from 1 BHK to luxury duplexes. We pack, disassemble double beds and modular wardrobes, transport in covered containers, and reassemble everything at your Delhi NCR home.
                    </p>
                </div>

                <div class="ram2del-card">
                    <div class="ram2del-card-icon">&#9874;</div>
                    <h3>Delhi Cantonment & Armed Forces Moves</h3>
                    <p>
                        Specialized moving support for defense personnel transferring between Ramgarh Cantonment and Delhi Cantonment, Dhaula Kuan, and military residential enclaves with standardized GST billing.
                    </p>
                </div>

                <div class="ram2del-card">
                    <div class="ram2del-card-icon">&#128187;</div>
                    <h3>Gurgaon & Noida Corporate Relocations</h3>
                    <p>
                        Dedicated shifting support for corporate executives moving to Cyber City, Golf Course Road, and Noida corporate sectors with anti-static packaging and workstation setup.
                    </p>
                </div>

                <div class="ram2del-card">
                    <div class="ram2del-card-icon">&#128663;</div>
                    <h3>Door-to-Door Car Carrier</h3>
                    <p>
                        Secure car transport inside enclosed auto trailers. We transport hatchbacks, sedans, and SUVs from Ramgarh to Delhi NCR with wheel locks, protective bumper shields, and full transit insurance.
                    </p>
                </div>

                <div class="ram2del-card">
                    <div class="ram2del-card-icon">&#127949;</div>
                    <h3>Two-Wheeler Bike Courier</h3>
                    <p>
                        Bikes and scooters receive multi-layer wrapping with bubble sheets, corrugated cartons, and mirror padding. Fuel is drained to regulatory safety levels, battery terminals secured, and the vehicle is transported securely inside covered trucks.
                    </p>
                </div>

                <div class="ram2del-card">
                    <div class="ram2del-card-icon">&#128188;</div>
                    <h3>Commercial & Office Moving</h3>
                    <p>
                        Relocating business offices, retail merchandise, medical equipment, or IT workstations between Ramgarh and Delhi NCR. We deploy anti-static packaging, serial-numbered carton sealing, and systematic file archiving.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Packaging Standard Section -->
    <section class="ram2del-section">
        <div class="ram2del-container">
            <div class="ram2del-grid-2">
                <div>
                    <div class="ram2del-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="5 layer packing process for Ramgarh to Delhi household shifting" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="ram2del-tag">Protection Technology</span>
                    <h2>Engineered 5-Layer Packaging for Long-Haul Interstate Transit</h2>
                    <p>
                        The 1,180-kilometer highway connecting Ramgarh to Delhi passes through several states and heavy traffic expressway stretches. To eliminate all transit vibration and dust contamination, Shree Ashirwad adheres to an unyielding 5-layer packing methodology:
                    </p>
                    <ul style="color: var(--ram2del-text); line-height: 1.8; padding-left: 20px; margin-bottom: 20px;">
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
    <section class="ram2del-section ram2del-section-alt">
        <div class="ram2del-container">
            <div class="ram2del-sec-head">
                <span class="ram2del-tag">Transparent Tariff</span>
                <h2>Ramgarh to Delhi NCR Relocation Cost Estimates</h2>
                <p>Fair, itemized, and transparent pricing without hidden tolls or sudden fuel surcharges. Contact our team for an exact, tailored quotation.</p>
            </div>

            <div class="ram2del-table-box">
                <table class="ram2del-table">
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
                            <td>48 - 72 Hours</td>
                            <td>&#8377; 18,500 - &#8377; 27,000</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Flat / Full House Shifting</strong></td>
                            <td>Premium 5-Layer Protective</td>
                            <td>3 Packers + 3 Loaders</td>
                            <td>48 - 72 Hours</td>
                            <td>&#8377; 26,000 - &#8377; 38,000</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK / Executive Duplex Villa</strong></td>
                            <td>Super Heavy Bubble + Wooden Crates</td>
                            <td>4 Packers + 4 Loaders</td>
                            <td>48 - 72 Hours</td>
                            <td>&#8377; 37,000 - &#8377; 55,000</td>
                        </tr>
                        <tr>
                            <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                            <td>Corrugated Foam + Bubble Wrap</td>
                            <td>Loading & Lashing Included</td>
                            <td>3 - 4 Days</td>
                            <td>&#8377; 4,500 - &#8377; 7,000</td>
                        </tr>
                        <tr>
                            <td><strong>Motor Car (Hatchback / Sedan)</strong></td>
                            <td>Enclosed Carrier Vehicle</td>
                            <td>Hydraulic Ramp Handling</td>
                            <td>3 - 4 Days</td>
                            <td>&#8377; 14,000 - &#8377; 20,000</td>
                        </tr>
                        <tr>
                            <td><strong>Commercial / Corporate Setup</strong></td>
                            <td>Custom Anti-Static Crates</td>
                            <td>Technical Moving Team</td>
                            <td>Scheduled Window</td>
                            <td>Custom Audit Basis</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="ram2del-route-info-box">
                <h4>Route Blueprint: Ramgarh to Delhi Highway Transit Details</h4>
                <p>
                    <strong>Transit Path:</strong> Ramgarh Cantonment &rarr; Hazaribagh &rarr; Barhi &rarr; Grand Trunk Road (NH-19 / AH1) &rarr; Sasaram &rarr; Varanasi &rarr; Prayagraj &rarr; Kanpur &rarr; Agra &rarr; Yamuna Expressway &rarr; Delhi NCR (Delhi Cantonment / Gurgaon / Noida / Dwarka). Total distance is roughly 1,180 km. Dedicated covered container trucks ensure prompt long-haul transit within 48 to 72 hours.
                </p>
            </div>
        </div>
    </section>

    <!-- Vehicle Transport Section -->
    <section class="ram2del-section">
        <div class="ram2del-container">
            <div class="ram2del-grid-2">
                <div>
                    <span class="ram2del-tag">Vehicle Logistics</span>
                    <h2>Secure Two-Wheeler & Car Transport: Ramgarh to Delhi NCR</h2>
                    <p>
                        Driving personal vehicles between Ramgarh and Delhi NCR across 1,180 kilometers of multi-state highway networks can cause heavy engine wear, tire strain, and exhaustion. Shree Ashirwad Packers and Movers provides a reliable, secure automotive carrier service.
                    </p>
                    <p>
                        Our specialized car transport trailers and enclosed single-vehicle carriers are equipped with safety winches, custom wheel locks, and soft bumper shields that ensure your vehicle stays completely stationary during the trip. Before loading at your Ramgarh residence, our field supervisor conducts a thorough multi-point exterior inspection, recording tire treads, fuel levels, and existing scratches on a formal Vehicle Condition Sheet.
                    </p>
                    <p>
                        For motorcycles and sports bikes, we use heavy-duty corrugated sheet wrapping around fuel tanks, headlamps, and chrome mirrors, followed by thick bubble insulation. Vehicles are delivered clean and undamaged right at your doorstep in Delhi NCR.
                    </p>
                </div>
                <div>
                    <div class="ram2del-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transport carrier loading from Ramgarh to Delhi" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="ram2del-section ram2del-section-alt">
        <div class="ram2del-container">
            <div class="ram2del-sec-head">
                <span class="ram2del-tag">Service Advantages</span>
                <h2>Why Choose Shree Ashirwad for Ramgarh to Delhi Moves</h2>
                <p>Reliable local operations, certified moving crews, and an unwavering focus on customer satisfaction.</p>
            </div>

            <div class="ram2del-grid-4">
                <div class="ram2del-card">
                    <div class="ram2del-card-icon">&#9989;</div>
                    <h3>Trained In-House Staff</h3>
                    <p>We never use untrained daily wage contractors. Our permanent crew has mastered delicate furniture handling, electronics packing, and staircase maneuvering.</p>
                </div>

                <div class="ram2del-card">
                    <div class="ram2del-card-icon">&#128337;</div>
                    <h3>Express 48-72 Hr Delivery</h3>
                    <p>Covering the 1,180 km distance in 48 to 72 hours, our dedicated container trucks deliver swiftly with guaranteed schedule compliance for your family.</p>
                </div>

                <div class="ram2del-card">
                    <div class="ram2del-card-icon">&#128176;</div>
                    <h3>Zero Hidden Costs</h3>
                    <p>Transparent written price quotations detailing toll charges, loading, unloading, packing supplies, and transit logistics with 100% upfront clarity.</p>
                </div>

                <div class="ram2del-card">
                    <div class="ram2del-card-icon">&#128221;</div>
                    <h3>Delhi Cantonment & PSU Invoices</h3>
                    <p>Full GST billing, computer-generated packing inventories, consignment notes, and stamped invoices compliant with Delhi Cantonment and Corporate transfer norms.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Unpacking and Setup Section -->
    <section class="ram2del-section">
        <div class="ram2del-container">
            <div class="ram2del-grid-2">
                <div>
                    <div class="ram2del-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and home setup service in Delhi" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="ram2del-tag">Complete Destination Care</span>
                    <h2>Hassle-Free Unloading, Unpacking & Setup in Delhi NCR</h2>
                    <p>
                        A relocation is only half-finished when the truck arrives at your destination. Moving heavy cartons into high-rise condominiums or assembling large modular wardrobes can quickly overwhelm a busy family. That is why Shree Ashirwad Packers and Movers provides full destination handling services across Delhi NCR.
                    </p>
                    <p>
                        Upon reaching your new home in Delhi NCR—whether it is located in Delhi Cantonment, Dwarka, Gurgaon multi-story apartments, Noida sectors, or South Delhi—our team carefully unloads all articles, carries them up service elevators or staircases, and places each carton in its designated room.
                    </p>
                    <p>
                        Our skilled crew unpacks delicate dinnerware, reassembles double beds, positions large sofa sets, reattaches modular study desks, and clears away all leftover wrapping paper, shredded cardboard, and plastic rolls—leaving your new residence tidy and ready to live in.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Localities Covered -->
    <section class="ram2del-section ram2del-section-alt">
        <div class="ram2del-container">
            <div class="ram2del-sec-head">
                <span class="ram2del-tag">Coverage Area</span>
                <h2>Neighborhoods Covered Across Ramgarh and Delhi NCR</h2>
                <p>Door-to-door pickup and delivery across every residential colony, commercial market, and surrounding metropolitan neighborhood.</p>
            </div>

            <div class="ram2del-grid-2">
                <div class="ram2del-card">
                    <h3>Pickup Locations in Ramgarh District</h3>
                    <p>
                        Ramgarh Cantonment, Subhash Chowk, Gola Road, Chitarpur, Barka-Sayal CCL residential township, Patratu Thermal Power colony, Sirka, Rajrappa Project, and Kuju.
                    </p>
                </div>

                <div class="ram2del-card">
                    <h3>Delivery Locations in Delhi NCR</h3>
                    <p>
                        Delhi Cantonment, Dwarka, Rohini, South Delhi (Saket, Vasant Kunj, Hauz Khas), Gurgaon (Cyber City, Golf Course Road), Noida (Sectors 1 to 150), Greater Noida, Ghaziabad, and Faridabad.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section class="ram2del-section">
        <div class="ram2del-container">
            <div class="ram2del-sec-head">
                <span class="ram2del-tag">Helpful Answers</span>
                <h2>Frequently Asked Questions: Ramgarh to Delhi Relocation</h2>
                <p>Have questions about packing safety, timelines, or billing? Find immediate answers below.</p>
            </div>

            <div style="max-width: 880px; margin: 0 auto;">
                <div class="ram2del-faq-item">
                    <h4>What is the typical transit duration from Ramgarh to Delhi NCR?</h4>
                    <p>
                        The highway distance between Ramgarh and Delhi NCR is approximately 1,180 kilometers via Grand Trunk Road (NH-19 / AH1) passing Varanasi, Prayagraj, Kanpur, and the Yamuna Expressway into Greater Noida and Delhi. Our direct GPS-tracked sealed containers reach Delhi NCR within 48 to 72 hours.
                    </p>
                </div>

                <div class="ram2del-faq-item">
                    <h4>Do you deliver to Delhi Cantonment, Gurgaon, and Noida?</h4>
                    <p>
                        Yes, our delivery network covers the entire National Capital Region (NCR), including Delhi Cantonment, South Delhi (Saket, Vasant Kunj, Hauz Khas), Dwarka, Rohini, Gurgaon (DLF Cyber City, Golf Course Road), Noida (Sectors 1 to 150), Greater Noida, Ghaziabad, and Faridabad.
                    </p>
                </div>

                <div class="ram2del-faq-item">
                    <h4>Do you provide compliant transfer billing for defense and central government personnel?</h4>
                    <p>
                        Yes, we provide 100% compliant GST invoices, detailed itemized inventories, consignment notes (bilty), and payment receipts accepted by military audit authorities (Delhi Cantonment / Army HQ / Ministry of Defence), Central Coalfields Limited, and central public sector enterprises.
                    </p>
                </div>

                <div class="ram2del-faq-item">
                    <h4>How are fragile furniture and electronics safeguarded during transit?</h4>
                    <p>
                        We implement a strict 5-tier packaging protocol utilizing virgin bubble wrap, heavy corrugated sheets, high-density edge corner protectors, stretch film wrapping, and reinforced adhesive sealing to prevent road shock absorption.
                    </p>
                </div>

                <div class="ram2del-faq-item">
                    <h4>What is the approximate cost of moving a 2 BHK apartment from Ramgarh to Delhi?</h4>
                    <p>
                        A standard 2 BHK household relocation from Ramgarh to Delhi NCR typically ranges between INR 26,000 and 38,000 depending on volume, floor levels, packing material tier, and elevator accessibility at both locations.
                    </p>
                </div>
            </div>

            <!-- Call to Action Banner -->
            <div class="ram2del-cta-banner" id="ram2del-quote">
                <h3>Ready to Relocate from Ramgarh to Delhi NCR?</h3>
                <p>
                    Contact Shree Ashirwad Packers and Movers today for an instant free moving estimate. Experience prompt, professional shifting with verified long-distance interstate relocation experts.
                </p>
                <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                    <a href="tel:8409531615" class="ram2del-btn-primary" style="background: #f59e0b; color: #0f172a;">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                        Call 8409531615
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20relocation%20from%20Ramgarh%20to%20Delhi." class="ram2del-btn-outline" target="_blank" rel="noopener noreferrer">
                        Chat on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
