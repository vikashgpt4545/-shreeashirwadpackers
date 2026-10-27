<?php
/**
 * Page Name: Ramgarh to Patna Packers and Movers
 * Route Slug: ramgarh-to-patna-packers-and-movers
 * Description: Dedicated interstate relocation, household shifting, Danapur & Ramgarh Cantonment transfer claims, corporate moving, car carrier transit, and bike shipping from Ramgarh to Patna.
 * Focus Keywords: ramgarh to patna packers and movers, packers and movers ramgarh to patna, house shifting ramgarh to patna, car transport ramgarh to patna, bike parcel ramgarh to patna, movers from ramgarh to patna
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Ramgarh to Patna Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Top-rated Ramgarh to Patna packers and movers. 310 km transit via NH-20 & NH-22, same-day delivery, 5-layer safety packaging, Danapur Cantonment & CCL transfer billing, car & bike carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/ramgarh-to-patna-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="ramgarh to patna packers and movers, packers and movers ramgarh to patna, house shifting ramgarh to patna, car transport ramgarh to patna, bike parcel ramgarh to patna, movers from ramgarh to patna">
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

    <!-- Scoped CSS for Route 12 (Ramgarh to Patna) -->
    <style>
        :root {
            --ram2pat-primary: #1e3a5f;
            --ram2pat-secondary: #0284c7;
            --ram2pat-accent: #f59e0b;
            --ram2pat-accent-light: #fef3c7;
            --ram2pat-dark: #0f172a;
            --ram2pat-gray-bg: #f8fafc;
            --ram2pat-card-border: #e2e8f0;
            --ram2pat-text: #334155;
            --ram2pat-text-muted: #64748b;
            --ram2pat-radius: 12px;
            --ram2pat-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
            --ram2pat-shadow-hover: 0 20px 30px -10px rgba(2, 132, 199, 0.18);
        }

        .ram2pat-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.92) 0%, rgba(30, 58, 95, 0.88) 100%), url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 70px 20px 65px;
            position: relative;
        }

        .ram2pat-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .ram2pat-breadcrumbs {
            font-size: 0.9rem;
            color: #cbd5e1;
            margin-bottom: 20px;
        }

        .ram2pat-breadcrumbs a {
            color: var(--ram2pat-accent);
            text-decoration: none;
        }

        .ram2pat-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(245, 158, 11, 0.18);
            border: 1px solid rgba(245, 158, 11, 0.5);
            color: var(--ram2pat-accent);
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 0.88rem;
            font-weight: 600;
            margin-bottom: 18px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .ram2pat-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            line-height: 1.25;
            font-weight: 800;
            margin-bottom: 18px;
            color: #ffffff;
        }

        .ram2pat-hero p {
            font-size: 1.12rem;
            line-height: 1.7;
            max-width: 780px;
            color: #e2e8f0;
            margin-bottom: 28px;
        }

        .ram2pat-hero-cta {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .ram2pat-btn-primary {
            background: var(--ram2pat-accent);
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

        .ram2pat-btn-primary:hover {
            background: #d97706;
            transform: translateY(-2px);
            color: #ffffff;
        }

        .ram2pat-btn-outline {
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

        .ram2pat-btn-outline:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: #ffffff;
        }

        .ram2pat-quick-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
            margin-top: 40px;
        }

        .ram2pat-stat-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 18px 20px;
            border-radius: var(--ram2pat-radius);
        }

        .ram2pat-stat-num {
            font-family: 'Outfit', sans-serif;
            font-size: 1.85rem;
            font-weight: 800;
            color: var(--ram2pat-accent);
            margin-bottom: 4px;
        }

        .ram2pat-stat-lbl {
            font-size: 0.88rem;
            color: #cbd5e1;
        }

        .ram2pat-section {
            padding: 60px 0;
        }

        .ram2pat-section-alt {
            background-color: var(--ram2pat-gray-bg);
        }

        .ram2pat-sec-head {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 45px;
        }

        .ram2pat-tag {
            display: inline-block;
            background: rgba(2, 132, 199, 0.1);
            color: var(--ram2pat-secondary);
            font-size: 0.82rem;
            font-weight: 700;
            padding: 4px 14px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            margin-bottom: 12px;
        }

        .ram2pat-sec-head h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            color: var(--ram2pat-dark);
            font-weight: 800;
            line-height: 1.3;
            margin-bottom: 14px;
        }

        .ram2pat-sec-head p {
            color: var(--ram2pat-text-muted);
            font-size: 1.05rem;
            line-height: 1.65;
        }

        .ram2pat-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 35px;
            align-items: center;
        }

        .ram2pat-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .ram2pat-grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .ram2pat-card {
            background: #ffffff;
            border: 1px solid var(--ram2pat-card-border);
            border-radius: var(--ram2pat-radius);
            padding: 26px;
            box-shadow: var(--ram2pat-shadow);
            transition: all 0.3s ease;
        }

        .ram2pat-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--ram2pat-shadow-hover);
            border-color: rgba(2, 132, 199, 0.3);
        }

        .ram2pat-card-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: rgba(2, 132, 199, 0.12);
            color: var(--ram2pat-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 18px;
        }

        .ram2pat-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.3rem;
            color: var(--ram2pat-dark);
            margin-bottom: 12px;
            font-weight: 700;
        }

        .ram2pat-card p {
            color: var(--ram2pat-text);
            font-size: 0.95rem;
            line-height: 1.65;
        }

        .ram2pat-img-wrapper {
            border-radius: var(--ram2pat-radius);
            overflow: hidden;
            box-shadow: var(--ram2pat-shadow);
        }

        .ram2pat-img-wrapper img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .ram2pat-img-wrapper:hover img {
            transform: scale(1.03);
        }

        .ram2pat-table-box {
            background: #ffffff;
            border-radius: var(--ram2pat-radius);
            box-shadow: var(--ram2pat-shadow);
            overflow: hidden;
            border: 1px solid var(--ram2pat-card-border);
            margin: 25px 0;
        }

        .ram2pat-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .ram2pat-table th {
            background: var(--ram2pat-primary);
            color: #ffffff;
            font-family: 'Outfit', sans-serif;
            padding: 16px 20px;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .ram2pat-table td {
            padding: 14px 20px;
            border-bottom: 1px solid #f1f5f9;
            color: var(--ram2pat-text);
            font-size: 0.94rem;
        }

        .ram2pat-table tr:nth-child(even) {
            background: #f8fafc;
        }

        .ram2pat-route-info-box {
            background: #eff6ff;
            border-left: 4px solid var(--ram2pat-secondary);
            padding: 22px 24px;
            border-radius: 0 10px 10px 0;
            margin: 25px 0;
        }

        .ram2pat-route-info-box h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            color: var(--ram2pat-primary);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .ram2pat-faq-item {
            background: #ffffff;
            border: 1px solid var(--ram2pat-card-border);
            border-radius: var(--ram2pat-radius);
            padding: 20px 24px;
            margin-bottom: 16px;
            box-shadow: var(--ram2pat-shadow);
        }

        .ram2pat-faq-item h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.12rem;
            color: var(--ram2pat-dark);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .ram2pat-faq-item p {
            color: var(--ram2pat-text);
            font-size: 0.95rem;
            line-height: 1.65;
            margin: 0;
        }

        .ram2pat-cta-banner {
            background: linear-gradient(135deg, #1e3a5f 0%, #0f172a 100%);
            border-radius: 16px;
            padding: 50px 30px;
            text-align: center;
            color: #ffffff;
            margin-top: 50px;
            box-shadow: 0 15px 30px rgba(15, 23, 42, 0.2);
        }

        .ram2pat-cta-banner h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.1rem;
            font-weight: 800;
            margin-bottom: 14px;
        }

        .ram2pat-cta-banner p {
            font-size: 1.05rem;
            max-width: 680px;
            margin: 0 auto 25px;
            color: #cbd5e1;
            line-height: 1.65;
        }

        @media (max-width: 768px) {
            .ram2pat-hero h1 {
                font-size: 2.1rem;
            }
            .ram2pat-grid-2 {
                grid-template-columns: 1fr;
            }
            .ram2pat-table th, .ram2pat-table td {
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
      "name": "Shree Ashirwad Packers and Movers Ramgarh to Patna",
      "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
      "@id": "https://www.shreeashirwadpackers.com/#ramgarh-to-patna-packers",
      "url": "https://www.shreeashirwadpackers.com/ramgarh-to-patna-packers-and-movers",
      "telephone": "+91-8409531615",
      "priceRange": "INR 8,500 - 52,000",
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
          "name": "Ramgarh, Jharkhand"
        },
        {
          "@type": "City",
          "name": "Patna, Bihar"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Ramgarh to Patna Relocation Services",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Household Relocation from Ramgarh to Patna"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Danapur & Ramgarh Cantonment Transfers"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Car Carrier Shipping to Patna"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Two-Wheeler Bike Parcel Express to Patna"
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
          "name": "Ramgarh to Patna Packers and Movers",
          "item": "https://www.shreeashirwadpackers.com/ramgarh-to-patna-packers-and-movers"
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
          "name": "What is the typical transit duration from Ramgarh to Patna?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The highway distance between Ramgarh and Patna is approximately 310 kilometers via NH-20 and NH-22 passing Hazaribagh, Barhi, Chouparan, Dobhi, Gaya, and Jehanabad. Direct closed container trucks complete the transit in roughly 7 to 8.5 hours, providing guaranteed same-day delivery."
          }
        },
        {
          "@type": "Question",
          "name": "Do you deliver to Danapur Cantonment and all localities in Patna?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, our delivery network covers all residential colonies and defense zones across Patna, including Danapur Cantonment, Bailey Road, Kankarbagh, Boring Road, Patliputra Colony, Rajendra Nagar, Anisabad, and Saguna More."
          }
        },
        {
          "@type": "Question",
          "name": "Do you handle official transfer billing for Danapur Cantonment and defense personnel?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we provide 100% compliant GST invoices, detailed itemized inventories, consignment notes (bilty), and payment receipts accepted by military audit authorities (Danapur Cantonment / Bihar Regimental Centre), CCL, and banking departments."
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
          "name": "What is the approximate cost of moving a 2 BHK apartment from Ramgarh to Patna?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A standard 2 BHK household relocation from Ramgarh to Patna typically ranges between INR 13,000 and 21,500 depending on volume, floor levels, packing material tier, and elevator accessibility at both locations."
          }
        }
      ]
    }
    </script>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <!-- Hero Section -->
    <header class="ram2pat-hero">
        <div class="ram2pat-container">
            <nav class="ram2pat-breadcrumbs" aria-label="breadcrumb">
                <a href="<?php echo SITE_BASE_URL; ?>/">Home</a> &raquo; 
                <a href="<?php echo SITE_BASE_URL; ?>/services">Interstate Routes</a> &raquo; 
                <span>Ramgarh to Patna</span>
            </nav>
            <div class="ram2pat-hero-badge">&#10004; Dedicated Jharkhand-Bihar Express Highway Corridor</div>
            <h1>Reliable Ramgarh to Patna Packers and Movers</h1>
            <p>
                Professional interstate moving services from Ramgarh Cantonment, Barka-Sayal, and Patratu to Patna (Bailey Road, Kankarbagh, Danapur Cantonment, Boring Road). Complete household shifting, military & PSU transfer billing, enclosed car carrier transit, and bike courier with guaranteed same-day delivery.
            </p>
            <div class="ram2pat-hero-cta">
                <a href="tel:8409531615" class="ram2pat-btn-primary">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                    Call: 8409531615
                </a>
                <a href="#ram2pat-quote" class="ram2pat-btn-outline">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Request Free Estimate
                </a>
            </div>

            <div class="ram2pat-quick-stats">
                <div class="ram2pat-stat-card">
                    <div class="ram2pat-stat-num">310 KM</div>
                    <div class="ram2pat-stat-lbl">Highway Distance via NH-20 & NH-22</div>
                </div>
                <div class="ram2pat-stat-card">
                    <div class="ram2pat-stat-num">7-8.5 Hrs</div>
                    <div class="ram2pat-stat-lbl">Doorstep Express Delivery</div>
                </div>
                <div class="ram2pat-stat-card">
                    <div class="ram2pat-stat-num">100% Safe</div>
                    <div class="ram2pat-stat-lbl">Weatherproof Container Fleet</div>
                </div>
                <div class="ram2pat-stat-card">
                    <div class="ram2pat-stat-num">GST Approved</div>
                    <div class="ram2pat-stat-lbl">Danapur & Defense Claim Billing</div>
                </div>
            </div>
        </div>
    </header>

    <!-- Overview Section -->
    <section class="ram2pat-section">
        <div class="ram2pat-container">
            <div class="ram2pat-grid-2">
                <div>
                    <span class="ram2pat-tag">Premier Interstate Logistics</span>
                    <h2>Fast & Safe Relocation from Ramgarh to Patna Capital Region</h2>
                    <p>
                        The interstate corridor between Ramgarh and Patna spans approximately 310 kilometers along National Highway 20 and National Highway 22 via Mandu, Charhi, Hazaribagh bypass, Barhi, Chouparan ghat, Dobhi, Gaya, and Jehanabad. This vital interstate highway connects the military cantonment, coal mining commands, and thermal power facilities of Ramgarh District with the state administrative capital, commercial hub, and Danapur Cantonment of Patna.
                    </p>
                    <p>
                        With continuous employee transfers involving armed forces personnel relocating between Ramgarh Cantonment (Sikh & Punjab Regimental Centres) and Danapur Cantonment (Bihar Regimental Centre), state government officials, and banking professionals, dependable interstate shifting is essential. At Shree Ashirwad Packers and Movers, we guarantee safe, scheduled transit along this direct highway route.
                    </p>
                    <p>
                        Our specialized crews bring heavy-duty packing supplies, professional dismantle-and-reassemble toolkits, and sealed container carriers directly to your Ramgarh residence in Subhash Chowk, Gola Road, Barka-Sayal, or Patratu. We pack, load, transport across state borders safely, and unpack at your new home in Patna within 7 to 8.5 hours.
                    </p>
                    <p>
                        Furthermore, our logistics coordinators maintain strict adherence to interstate transport regulations, providing itemized invoices compliant with corporate, defense, and public sector transfer reimbursement criteria.
                    </p>
                </div>
                <div>
                    <div class="ram2pat-img-wrapper">
                        <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe transit container truck for Ramgarh to Patna relocation" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Highlights -->
    <section class="ram2pat-section ram2pat-section-alt">
        <div class="ram2pat-container">
            <div class="ram2pat-sec-head">
                <span class="ram2pat-tag">Dedicated Moving Solutions</span>
                <h2>Specialized Shifting Services: Ramgarh to Patna</h2>
                <p>Tailored moving services designed to handle family apartments, defense quarters, and vehicle transport.</p>
            </div>

            <div class="ram2pat-grid-3">
                <div class="ram2pat-card">
                    <div class="ram2pat-card-icon">&#127968;</div>
                    <h3>Complete Household Relocation</h3>
                    <p>
                        Comprehensive home shifting from 1 BHK to luxury duplexes. We pack, disassemble double beds and modular wardrobes, transport in covered containers, and reassemble everything at your Patna home.
                    </p>
                </div>

                <div class="ram2pat-card">
                    <div class="ram2pat-card-icon">&#9874;</div>
                    <h3>Danapur Cantonment Transfers</h3>
                    <p>
                        Specialized moving support for armed forces personnel transferring between Ramgarh Cantonment and Danapur Cantonment with military-compliant GST invoices and money receipts.
                    </p>
                </div>

                <div class="ram2pat-card">
                    <div class="ram2pat-card-icon">&#127970;</div>
                    <h3>PSU & Government Moves</h3>
                    <p>
                        Dedicated shifting support for state administration staff, CCL officers, and nationalized bank managers with computer-generated inventories and transparent documentation.
                    </p>
                </div>

                <div class="ram2pat-card">
                    <div class="ram2pat-card-icon">&#128663;</div>
                    <h3>Door-to-Door Car Carrier</h3>
                    <p>
                        Secure car transport inside enclosed auto trailers. We transport hatchbacks, sedans, and SUVs from Ramgarh to Patna with wheel locks, protective bumper shields, and full transit insurance.
                    </p>
                </div>

                <div class="ram2pat-card">
                    <div class="ram2pat-card-icon">&#127949;</div>
                    <h3>Two-Wheeler Bike Courier</h3>
                    <p>
                        Bikes and scooters receive multi-layer wrapping with bubble sheets, corrugated cartons, and mirror padding. Fuel is drained to regulatory safety levels, battery terminals secured, and the vehicle is transported securely inside covered trucks.
                    </p>
                </div>

                <div class="ram2pat-card">
                    <div class="ram2pat-card-icon">&#128188;</div>
                    <h3>Commercial & Office Moving</h3>
                    <p>
                        Relocating business offices, retail merchandise, medical equipment, or IT workstations between Ramgarh and Patna. We deploy anti-static packaging, serial-numbered carton sealing, and systematic file archiving.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Packaging Standard Section -->
    <section class="ram2pat-section">
        <div class="ram2pat-container">
            <div class="ram2pat-grid-2">
                <div>
                    <div class="ram2pat-img-wrapper">
                        <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="5 layer packing process for Ramgarh to Patna household shifting" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="ram2pat-tag">Protection Technology</span>
                    <h2>Engineered 5-Layer Packaging for Regional Interstate Transit</h2>
                    <p>
                        The 310-kilometer highway connecting Ramgarh to Patna passes through Chouparan ghat and heavily traversed four-lane corridors. To eliminate all transit vibration and dust contamination, Shree Ashirwad adheres to an unyielding 5-layer packing methodology:
                    </p>
                    <ul style="color: var(--ram2pat-text); line-height: 1.8; padding-left: 20px; margin-bottom: 20px;">
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
    <section class="ram2pat-section ram2pat-section-alt">
        <div class="ram2pat-container">
            <div class="ram2pat-sec-head">
                <span class="ram2pat-tag">Transparent Tariff</span>
                <h2>Ramgarh to Patna Relocation Cost Estimates</h2>
                <p>Fair, itemized, and transparent pricing without hidden tolls or sudden fuel surcharges. Contact our team for an exact, tailored quotation.</p>
            </div>

            <div class="ram2pat-table-box">
                <table class="ram2pat-table">
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
                            <td>Same Day (7 - 8.5 Hrs)</td>
                            <td>&#8377; 8,500 - &#8377; 14,000</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Flat / Full House Shifting</strong></td>
                            <td>Premium 5-Layer Protective</td>
                            <td>3 Packers + 3 Loaders</td>
                            <td>Same Day (7 - 8.5 Hrs)</td>
                            <td>&#8377; 13,000 - &#8377; 21,500</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK / Executive Duplex Villa</strong></td>
                            <td>Super Heavy Bubble + Wooden Crates</td>
                            <td>4 Packers + 4 Loaders</td>
                            <td>Same Day (8 - 9.5 Hrs)</td>
                            <td>&#8377; 19,500 - &#8377; 31,000</td>
                        </tr>
                        <tr>
                            <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                            <td>Corrugated Foam + Bubble Wrap</td>
                            <td>Loading & Lashing Included</td>
                            <td>Same Day Delivery</td>
                            <td>&#8377; 2,600 - &#8377; 4,000</td>
                        </tr>
                        <tr>
                            <td><strong>Motor Car (Hatchback / Sedan)</strong></td>
                            <td>Enclosed Carrier Vehicle</td>
                            <td>Hydraulic Ramp Handling</td>
                            <td>Same Day Delivery</td>
                            <td>&#8377; 6,500 - &#8377; 10,000</td>
                        </tr>
                        <tr>
                            <td><strong>Commercial / Industrial Setup</strong></td>
                            <td>Custom Anti-Static Crates</td>
                            <td>Technical Moving Team</td>
                            <td>Scheduled Window</td>
                            <td>Custom Audit Basis</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="ram2pat-route-info-box">
                <h4>Route Blueprint: Ramgarh to Patna Highway Transit Details</h4>
                <p>
                    <strong>Transit Path:</strong> Ramgarh Cantonment &rarr; Mandu &rarr; Charhi &rarr; Hazaribagh &rarr; Barhi &rarr; Chouparan &rarr; Dobhi &rarr; Gaya &rarr; Jehanabad &rarr; Patna (Bailey Road / Danapur Cantonment / Kankarbagh). Total distance is roughly 310 km. Dedicated covered container trucks ensure prompt same-day delivery within 7 to 8.5 hours.
                </p>
            </div>
        </div>
    </section>

    <!-- Vehicle Transport Section -->
    <section class="ram2pat-section">
        <div class="ram2pat-container">
            <div class="ram2pat-grid-2">
                <div>
                    <span class="ram2pat-tag">Vehicle Logistics</span>
                    <h2>Secure Two-Wheeler & Car Transport: Ramgarh to Patna</h2>
                    <p>
                        Driving personal vehicles between Ramgarh and Patna across 310 kilometers through busy state border checkpoints and ghat roads can be stressful. Shree Ashirwad Packers and Movers provides a reliable, secure automotive carrier service.
                    </p>
                    <p>
                        Our specialized car transport trailers and enclosed single-vehicle carriers are equipped with safety winches, custom wheel locks, and soft bumper shields that ensure your vehicle stays completely stationary during the trip. Before loading at your Ramgarh residence, our field supervisor conducts a thorough multi-point exterior inspection, recording tire treads, fuel levels, and existing scratches on a formal Vehicle Condition Sheet.
                    </p>
                    <p>
                        For motorcycles and sports bikes, we use heavy-duty corrugated sheet wrapping around fuel tanks, headlamps, and chrome mirrors, followed by thick bubble insulation. Vehicles are delivered clean and undamaged right at your doorstep in Patna.
                    </p>
                </div>
                <div>
                    <div class="ram2pat-img-wrapper">
                        <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transport carrier loading from Ramgarh to Patna" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="ram2pat-section ram2pat-section-alt">
        <div class="ram2pat-container">
            <div class="ram2pat-sec-head">
                <span class="ram2pat-tag">Service Advantages</span>
                <h2>Why Choose Shree Ashirwad for Ramgarh to Patna Moves</h2>
                <p>Reliable local operations, certified moving crews, and an unwavering focus on customer satisfaction.</p>
            </div>

            <div class="ram2pat-grid-4">
                <div class="ram2pat-card">
                    <div class="ram2pat-card-icon">&#9989;</div>
                    <h3>Trained In-House Staff</h3>
                    <p>We never use untrained daily wage contractors. Our permanent crew has mastered delicate furniture handling, electronics packing, and staircase maneuvering.</p>
                </div>

                <div class="ram2pat-card">
                    <div class="ram2pat-card-icon">&#128337;</div>
                    <h3>Same-Day 8-Hour Delivery</h3>
                    <p>Covering the 310 km distance in 7 to 8.5 hours, our dedicated container trucks deliver swiftly with guaranteed same-day delivery for your family.</p>
                </div>

                <div class="ram2pat-card">
                    <div class="ram2pat-card-icon">&#128176;</div>
                    <h3>Zero Hidden Costs</h3>
                    <p>Transparent written price quotations detailing toll charges, loading, unloading, packing supplies, and transit logistics with 100% upfront clarity.</p>
                </div>

                <div class="ram2pat-card">
                    <div class="ram2pat-card-icon">&#128221;</div>
                    <h3>Danapur & Defense Invoices</h3>
                    <p>Full GST billing, computer-generated packing inventories, consignment notes, and stamped invoices compliant with Danapur Cantonment and Defense transfer norms.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Unpacking and Setup Section -->
    <section class="ram2pat-section">
        <div class="ram2pat-container">
            <div class="ram2pat-grid-2">
                <div>
                    <div class="ram2pat-img-wrapper">
                        <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and home setup service in Patna" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="ram2pat-tag">Complete Destination Care</span>
                    <h2>Hassle-Free Unloading, Unpacking & Setup in Patna</h2>
                    <p>
                        A relocation is only half-finished when the truck arrives at your destination. Moving heavy cartons into upper floor apartments or assembling large modular wardrobes can quickly overwhelm a busy family. That is why Shree Ashirwad Packers and Movers provides full destination handling services across Patna.
                    </p>
                    <p>
                        Upon reaching your new home in Patna—whether it is located in Danapur Cantonment, Bailey Road, Kankarbagh, Boring Road, or Patliputra Colony—our team carefully unloads all articles, carries them up elevators or staircases, and places each carton in its designated room.
                    </p>
                    <p>
                        Our skilled crew unpacks delicate dinnerware, reassembles double beds, positions large sofa sets, reattaches modular study desks, and clears away all leftover wrapping paper, shredded cardboard, and plastic rolls—leaving your new residence tidy and ready to live in.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Localities Covered -->
    <section class="ram2pat-section ram2pat-section-alt">
        <div class="ram2pat-container">
            <div class="ram2pat-sec-head">
                <span class="ram2pat-tag">Coverage Area</span>
                <h2>Neighborhoods Covered Across Ramgarh and Patna</h2>
                <p>Door-to-door pickup and delivery across every residential colony, commercial market, and surrounding metropolitan neighborhood.</p>
            </div>

            <div class="ram2pat-grid-2">
                <div class="ram2pat-card">
                    <h3>Pickup Locations in Ramgarh District</h3>
                    <p>
                        Ramgarh Cantonment, Subhash Chowk, Gola Road, Chitarpur, Barka-Sayal CCL residential township, Patratu Thermal Power colony, Sirka, Rajrappa Project, and Kuju.
                    </p>
                </div>

                <div class="ram2pat-card">
                    <h3>Delivery Locations in Patna Capital Region</h3>
                    <p>
                        Danapur Cantonment, Bailey Road, Kankarbagh, Boring Road, Patliputra Colony, Rajendra Nagar, Anisabad, Saguna More, Bihta, and Ashiana Nagar.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section class="ram2pat-section">
        <div class="ram2pat-container">
            <div class="ram2pat-sec-head">
                <span class="ram2pat-tag">Helpful Answers</span>
                <h2>Frequently Asked Questions: Ramgarh to Patna Relocation</h2>
                <p>Have questions about packing safety, timelines, or billing? Find immediate answers below.</p>
            </div>

            <div style="max-width: 880px; margin: 0 auto;">
                <div class="ram2pat-faq-item">
                    <h4>What is the typical transit duration from Ramgarh to Patna?</h4>
                    <p>
                        The highway distance between Ramgarh and Patna is approximately 310 kilometers via NH-20 and NH-22 passing Hazaribagh, Barhi, Chouparan, Dobhi, Gaya, and Jehanabad. Direct closed container trucks complete the transit in roughly 7 to 8.5 hours, providing guaranteed same-day delivery.
                    </p>
                </div>

                <div class="ram2pat-faq-item">
                    <h4>Do you deliver to Danapur Cantonment and all localities in Patna?</h4>
                    <p>
                        Yes, our delivery network covers all residential colonies and defense zones across Patna, including Danapur Cantonment, Bailey Road, Kankarbagh, Boring Road, Patliputra Colony, Rajendra Nagar, Anisabad, and Saguna More.
                    </p>
                </div>

                <div class="ram2pat-faq-item">
                    <h4>Do you handle official transfer billing for Danapur Cantonment and defense personnel?</h4>
                    <p>
                        Yes, we provide 100% compliant GST invoices, detailed itemized inventories, consignment notes (bilty), and payment receipts accepted by military audit authorities (Danapur Cantonment / Bihar Regimental Centre), CCL, and banking departments.
                    </p>
                </div>

                <div class="ram2pat-faq-item">
                    <h4>How are fragile furniture and electronics safeguarded during transit?</h4>
                    <p>
                        We implement a strict 5-tier packaging protocol utilizing virgin bubble wrap, heavy corrugated sheets, high-density edge corner protectors, stretch film wrapping, and reinforced adhesive sealing to prevent road shock absorption.
                    </p>
                </div>

                <div class="ram2pat-faq-item">
                    <h4>What is the approximate cost of moving a 2 BHK apartment from Ramgarh to Patna?</h4>
                    <p>
                        A standard 2 BHK household relocation from Ramgarh to Patna typically ranges between INR 13,000 and 21,500 depending on volume, floor levels, packing material tier, and elevator accessibility at both locations.
                    </p>
                </div>
            </div>

            <!-- Call to Action Banner -->
            <div class="ram2pat-cta-banner" id="ram2pat-quote">
                <h3>Ready to Relocate from Ramgarh to Patna?</h3>
                <p>
                    Contact Shree Ashirwad Packers and Movers today for an instant free moving estimate. Experience prompt, professional shifting with verified interstate relocation experts.
                </p>
                <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                    <a href="tel:8409531615" class="ram2pat-btn-primary" style="background: #f59e0b; color: #0f172a;">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                        Call 8409531615
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20relocation%20from%20Ramgarh%20to%20Patna." class="ram2pat-btn-outline" target="_blank" rel="noopener noreferrer">
                        Chat on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
