<?php
/**
 * Page Name: Giridih to Bangalore Packers and Movers
 * Route Slug: giridih-to-bangalore-packers-and-movers
 * Description: Premium interstate relocation, tech household shifting, corporate IT employee transfer billing, enclosed car carrier transit, and bike shipping from Giridih to Bangalore.
 * Focus Keywords: giridih to bangalore packers and movers, packers and movers giridih to bangalore, house shifting giridih to bangalore, car transport giridih to bangalore, bike parcel giridih to bangalore, it movers bangalore
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Giridih to Bangalore Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Top-rated Giridih to Bangalore packers and movers. 1,850 km express container transit, 5-layer safety packaging, IT corporate claim billing, car & bike shipping. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/giridih-to-bangalore-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="giridih to bangalore packers and movers, packers and movers giridih to bangalore, house shifting giridih to bangalore, car transport giridih to bangalore, bike parcel giridih to bangalore, it movers bangalore">
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

    <!-- Scoped CSS for Route 14 (Giridih to Bangalore) -->
    <style>
        :root {
            --gir2ban-primary: #1e3a5f;
            --gir2ban-secondary: #0284c7;
            --gir2ban-accent: #f59e0b;
            --gir2ban-accent-light: #fef3c7;
            --gir2ban-dark: #0f172a;
            --gir2ban-gray-bg: #f8fafc;
            --gir2ban-card-border: #e2e8f0;
            --gir2ban-text: #334155;
            --gir2ban-text-muted: #64748b;
            --gir2ban-radius: 12px;
            --gir2ban-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
            --gir2ban-shadow-hover: 0 20px 30px -10px rgba(2, 132, 199, 0.18);
        }

        .gir2ban-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.92) 0%, rgba(30, 58, 95, 0.88) 100%), url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 70px 20px 65px;
            position: relative;
        }

        .gir2ban-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .gir2ban-breadcrumbs {
            font-size: 0.9rem;
            color: #cbd5e1;
            margin-bottom: 20px;
        }

        .gir2ban-breadcrumbs a {
            color: var(--gir2ban-accent);
            text-decoration: none;
        }

        .gir2ban-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(245, 158, 11, 0.18);
            border: 1px solid rgba(245, 158, 11, 0.5);
            color: var(--gir2ban-accent);
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 0.88rem;
            font-weight: 600;
            margin-bottom: 18px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .gir2ban-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            line-height: 1.25;
            font-weight: 800;
            margin-bottom: 18px;
            color: #ffffff;
        }

        .gir2ban-hero p {
            font-size: 1.12rem;
            line-height: 1.7;
            max-width: 780px;
            color: #e2e8f0;
            margin-bottom: 28px;
        }

        .gir2ban-hero-cta {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .gir2ban-btn-primary {
            background: var(--gir2ban-accent);
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

        .gir2ban-btn-primary:hover {
            background: #d97706;
            transform: translateY(-2px);
            color: #ffffff;
        }

        .gir2ban-btn-outline {
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

        .gir2ban-btn-outline:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: #ffffff;
        }

        .gir2ban-quick-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
            margin-top: 40px;
        }

        .gir2ban-stat-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 18px 20px;
            border-radius: var(--gir2ban-radius);
        }

        .gir2ban-stat-num {
            font-family: 'Outfit', sans-serif;
            font-size: 1.85rem;
            font-weight: 800;
            color: var(--gir2ban-accent);
            margin-bottom: 4px;
        }

        .gir2ban-stat-lbl {
            font-size: 0.88rem;
            color: #cbd5e1;
        }

        .gir2ban-section {
            padding: 60px 0;
        }

        .gir2ban-section-alt {
            background-color: var(--gir2ban-gray-bg);
        }

        .gir2ban-sec-head {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 45px;
        }

        .gir2ban-tag {
            display: inline-block;
            background: rgba(2, 132, 199, 0.1);
            color: var(--gir2ban-secondary);
            font-size: 0.82rem;
            font-weight: 700;
            padding: 4px 14px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            margin-bottom: 12px;
        }

        .gir2ban-sec-head h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            color: var(--gir2ban-dark);
            font-weight: 800;
            line-height: 1.3;
            margin-bottom: 14px;
        }

        .gir2ban-sec-head p {
            color: var(--gir2ban-text-muted);
            font-size: 1.05rem;
            line-height: 1.65;
        }

        .gir2ban-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 35px;
            align-items: center;
        }

        .gir2ban-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .gir2ban-grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .gir2ban-card {
            background: #ffffff;
            border: 1px solid var(--gir2ban-card-border);
            border-radius: var(--gir2ban-radius);
            padding: 26px;
            box-shadow: var(--gir2ban-shadow);
            transition: all 0.3s ease;
        }

        .gir2ban-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--gir2ban-shadow-hover);
            border-color: rgba(2, 132, 199, 0.3);
        }

        .gir2ban-card-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: rgba(2, 132, 199, 0.12);
            color: var(--gir2ban-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 18px;
        }

        .gir2ban-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.3rem;
            color: var(--gir2ban-dark);
            margin-bottom: 12px;
            font-weight: 700;
        }

        .gir2ban-card p {
            color: var(--gir2ban-text);
            font-size: 0.95rem;
            line-height: 1.65;
        }

        .gir2ban-img-wrapper {
            border-radius: var(--gir2ban-radius);
            overflow: hidden;
            box-shadow: var(--gir2ban-shadow);
        }

        .gir2ban-img-wrapper img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .gir2ban-img-wrapper:hover img {
            transform: scale(1.03);
        }

        .gir2ban-table-box {
            background: #ffffff;
            border-radius: var(--gir2ban-radius);
            box-shadow: var(--gir2ban-shadow);
            overflow: hidden;
            border: 1px solid var(--gir2ban-card-border);
            margin: 25px 0;
        }

        .gir2ban-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .gir2ban-table th {
            background: var(--gir2ban-primary);
            color: #ffffff;
            font-family: 'Outfit', sans-serif;
            padding: 16px 20px;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .gir2ban-table td {
            padding: 14px 20px;
            border-bottom: 1px solid #f1f5f9;
            color: var(--gir2ban-text);
            font-size: 0.94rem;
        }

        .gir2ban-table tr:nth-child(even) {
            background: #f8fafc;
        }

        .gir2ban-route-info-box {
            background: #eff6ff;
            border-left: 4px solid var(--gir2ban-secondary);
            padding: 22px 24px;
            border-radius: 0 10px 10px 0;
            margin: 25px 0;
        }

        .gir2ban-route-info-box h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            color: var(--gir2ban-primary);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .gir2ban-faq-item {
            background: #ffffff;
            border: 1px solid var(--gir2ban-card-border);
            border-radius: var(--gir2ban-radius);
            padding: 20px 24px;
            margin-bottom: 16px;
            box-shadow: var(--gir2ban-shadow);
        }

        .gir2ban-faq-item h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.12rem;
            color: var(--gir2ban-dark);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .gir2ban-faq-item p {
            color: var(--gir2ban-text);
            font-size: 0.95rem;
            line-height: 1.65;
            margin: 0;
        }

        .gir2ban-cta-banner {
            background: linear-gradient(135deg, #1e3a5f 0%, #0f172a 100%);
            border-radius: 16px;
            padding: 50px 30px;
            text-align: center;
            color: #ffffff;
            margin-top: 50px;
            box-shadow: 0 15px 30px rgba(15, 23, 42, 0.2);
        }

        .gir2ban-cta-banner h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.1rem;
            font-weight: 800;
            margin-bottom: 14px;
        }

        .gir2ban-cta-banner p {
            font-size: 1.05rem;
            max-width: 680px;
            margin: 0 auto 25px;
            color: #cbd5e1;
            line-height: 1.65;
        }

        @media (max-width: 768px) {
            .gir2ban-hero h1 {
                font-size: 2.1rem;
            }
            .gir2ban-grid-2 {
                grid-template-columns: 1fr;
            }
            .gir2ban-table th, .gir2ban-table td {
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
      "name": "Shree Ashirwad Packers and Movers Giridih to Bangalore",
      "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
      "@id": "https://www.shreeashirwadpackers.com/#giridih-to-bangalore-packers",
      "url": "https://www.shreeashirwadpackers.com/giridih-to-bangalore-packers-and-movers",
      "telephone": "+91-8409531615",
      "priceRange": "INR 18,000 - 98,000",
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
      "serviceType": "Long-Distance Pan-India Interstate Relocation Services",
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
          "@type": "City",
          "name": "Bengaluru, Karnataka"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Giridih to Bangalore Relocation Services",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Household Relocation from Giridih to Bangalore"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "IT & Tech Professional Relocation to Whitefield & Electronic City"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Enclosed Car Carrier to Bangalore"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Two-Wheeler Bike Parcel Express to Bangalore"
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
          "name": "Giridih to Bangalore Packers and Movers",
          "item": "https://www.shreeashirwadpackers.com/giridih-to-bangalore-packers-and-movers"
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
          "name": "What is the typical transit duration from Giridih to Bangalore?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The highway distance between Giridih and Bangalore is approximately 1,850 kilometers. Our direct closed container trucks complete the long-distance journey in roughly 4 to 5 days with full real-time GPS tracking updates provided to the customer."
          }
        },
        {
          "@type": "Question",
          "name": "Do you deliver to Whitefield, Electronic City, and Sarjapur Road in Bangalore?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, our delivery network covers every tech and residential corridor across Bangalore, including Whitefield, Electronic City (Phases 1 & 2), Bellandur, Marathahalli, Sarjapur Road, HSR Layout, Koramangala, Indiranagar, Manyata Tech Park, Hebbal, Yelahanka, and Bannerghatta Road."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide GST invoices for corporate IT relocation reimbursement?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we provide 100% compliant GST invoices, detailed item inventories, consignment notes (bilty), and stamped payment receipts accepted by leading IT firms, multinationals, PSUs, and software tech parks in Bangalore."
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
          "name": "What is the approximate cost of moving a 2 BHK apartment from Giridih to Bangalore?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A standard 2 BHK household relocation from Giridih to Bangalore typically ranges between INR 28,000 and 45,000 depending on volume, packing material tier, elevator accessibility, and specific high-rise floor levels at both ends."
          }
        }
      ]
    }
    </script>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <!-- Hero Section -->
    <header class="gir2ban-hero">
        <div class="gir2ban-container">
            <nav class="gir2ban-breadcrumbs" aria-label="breadcrumb">
                <a href="<?php echo SITE_BASE_URL; ?>/">Home</a> &raquo; 
                <a href="<?php echo SITE_BASE_URL; ?>/services">Intercity Routes</a> &raquo; 
                <span>Giridih to Bangalore</span>
            </nav>
            <div class="gir2ban-hero-badge">&#10004; Dedicated Interstate Silicon Valley Express Corridor</div>
            <h1>Premier Giridih to Bangalore Packers and Movers</h1>
            <p>
                Professional interstate relocation services from Giridih to Bengaluru, Whitefield, Electronic City, and HSR Layout. Complete household shifting, IT & tech employee transfers, enclosed car carrier transit, and bike courier with guaranteed GPS-tracked container transport.
            </p>
            <div class="gir2ban-hero-cta">
                <a href="tel:8409531615" class="gir2ban-btn-primary">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                    Call: 8409531615
                </a>
                <a href="#gir2ban-quote" class="gir2ban-btn-outline">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Request Free Estimate
                </a>
            </div>

            <div class="gir2ban-quick-stats">
                <div class="gir2ban-stat-card">
                    <div class="gir2ban-stat-num">1,850 KM</div>
                    <div class="gir2ban-stat-lbl">National Highway Transit Distance</div>
                </div>
                <div class="gir2ban-stat-card">
                    <div class="gir2ban-stat-num">4-5 Days</div>
                    <div class="gir2ban-stat-lbl">Doorstep Express Delivery</div>
                </div>
                <div class="gir2ban-stat-card">
                    <div class="gir2ban-stat-num">100% Safe</div>
                    <div class="gir2ban-stat-lbl">Weatherproof Container Fleet</div>
                </div>
                <div class="gir2ban-stat-card">
                    <div class="gir2ban-stat-num">GST Approved</div>
                    <div class="gir2ban-stat-lbl">IT & Corporate Claim Billing</div>
                </div>
            </div>
        </div>
    </header>

    <!-- Overview Section -->
    <section class="gir2ban-section">
        <div class="gir2ban-container">
            <div class="gir2ban-grid-2">
                <div>
                    <span class="gir2ban-tag">Premier Interstate Logistics</span>
                    <h2>Safe & Seamless Long-Distance Relocation from Giridih to Bangalore Silicon Hub</h2>
                    <p>
                        The interstate corridor between Giridih and Bengaluru (Bangalore) spans approximately 1,850 kilometers across four Indian states. It connects North Chota Nagpur’s prominent steel processing and mica trading hub directly with India’s premier Silicon Valley, startup capital, and biotechnology center.
                    </p>
                    <p>
                        Every year, hundreds of software developers, IT architects, corporate leaders, and tech founders from Giridih and surrounding Jharkhand cities relocate south to Bangalore’s bustling tech corridors in Whitefield, Electronic City, Bellandur, and Outer Ring Road. Long-distance moving across 1,850 kilometers requires dedicated, covered container transport, multi-layer shockproof packing, and precise logistical execution.
                    </p>
                    <p>
                        At Shree Ashirwad Packers and Movers, we specialize in end-to-end long-distance relocations along this national corridor. Whether you are moving into a gated villa community in Sarjapur, a luxury apartment in Indiranagar, or a modern high-rise in HSR Layout, we guarantee a punctual, secure, and stress-free moving experience.
                    </p>
                    <p>
                        Our specialized crews bring heavy-duty packing supplies, professional dismantle-and-reassemble toolkits, and sealed container carriers directly to your Giridih premises in Makatpur, Bada Chowk, Pachamba, Sirsia, Moti Nagar, or Baniadih. We pack, load, transport across national expressways safely, and unpack at your new home in Bangalore within 4 to 5 days.
                    </p>
                </div>
                <div>
                    <div class="gir2ban-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe transit container truck for Giridih to Bangalore relocation" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Highlights -->
    <section class="gir2ban-section gir2ban-section-alt">
        <div class="gir2ban-container">
            <div class="gir2ban-sec-head">
                <span class="gir2ban-tag">Dedicated Moving Solutions</span>
                <h2>Specialized Shifting Services: Giridih to Bangalore</h2>
                <p>Tailored moving services designed to handle family apartments, corporate suites, and vehicle transport.</p>
            </div>

            <div class="gir2ban-grid-3">
                <div class="gir2ban-card">
                    <div class="gir2ban-card-icon">&#127968;</div>
                    <h3>Complete Household Relocation</h3>
                    <p>
                        Comprehensive home shifting from 1 BHK to luxury duplexes. We pack, disassemble double beds and modular wardrobes, transport in covered containers, and reassemble everything at your Bangalore home.
                    </p>
                </div>

                <div class="gir2ban-card">
                    <div class="gir2ban-card-icon">&#128187;</div>
                    <h3>IT & Tech Professional Relocations</h3>
                    <p>
                        Specialized moving support for tech professionals moving to Whitefield, Electronic City, and Sarjapur Road. We provide standardized billing and inventories for instant reimbursement approval.
                    </p>
                </div>

                <div class="gir2ban-card">
                    <div class="gir2ban-card-icon">&#127970;</div>
                    <h3>Corporate Executive Shifting</h3>
                    <p>
                        Premium executive shifting including priority delivery, specialized white-glove setup, and multi-tier fragile care for premium leather furniture, crystal chandeliers, and modular kitchens.
                    </p>
                </div>

                <div class="gir2ban-card">
                    <div class="gir2ban-card-icon">&#128663;</div>
                    <h3>Door-to-Door Car Carrier</h3>
                    <p>
                        Secure car transport inside enclosed auto trailers. We transport hatchbacks, sedans, and SUVs from Giridih to Bangalore with wheel locks, protective bumper shields, and full transit insurance.
                    </p>
                </div>

                <div class="gir2ban-card">
                    <div class="gir2ban-card-icon">&#127949;</div>
                    <h3>Two-Wheeler Bike Courier</h3>
                    <p>
                        Bikes and scooters receive multi-layer wrapping with bubble sheets, corrugated cartons, and mirror padding. Fuel is drained to regulatory safety levels, battery terminals secured, and the vehicle is transported securely inside covered trucks.
                    </p>
                </div>

                <div class="gir2ban-card">
                    <div class="gir2ban-card-icon">&#128188;</div>
                    <h3>Commercial & Office Moving</h3>
                    <p>
                        Relocating business offices, retail merchandise, medical equipment, or IT workstations between Giridih and Bangalore. We deploy anti-static packaging, serial-numbered carton sealing, and systematic file archiving.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Packaging Standard Section -->
    <section class="gir2ban-section">
        <div class="gir2ban-container">
            <div class="gir2ban-grid-2">
                <div>
                    <div class="gir2ban-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="5 layer packing process for Giridih to Bangalore household shifting" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="gir2ban-tag">Protection Technology</span>
                    <h2>Engineered 5-Layer Packaging for Long-Distance Highway Transit</h2>
                    <p>
                        Covering 1,850 kilometers across four states requires packaging built to withstand prolonged mechanical vibration and weather changes. Shree Ashirwad adheres to an unyielding 5-layer packing methodology:
                    </p>
                    <ul style="color: var(--gir2ban-text); line-height: 1.8; padding-left: 20px; margin-bottom: 20px;">
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
    <section class="gir2ban-section gir2ban-section-alt">
        <div class="gir2ban-container">
            <div class="gir2ban-sec-head">
                <span class="gir2ban-tag">Transparent Tariff</span>
                <h2>Giridih to Bangalore Relocation Cost Estimates</h2>
                <p>Fair, itemized, and transparent pricing without hidden tolls or sudden fuel surcharges. Contact our team for an exact, tailored quotation.</p>
            </div>

            <div class="gir2ban-table-box">
                <table class="gir2ban-table">
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
                            <td><strong>1 BHK Apartment / Tech Flat</strong></td>
                            <td>Standard 3-Layer Corrugated</td>
                            <td>2 Packers + 2 Loaders</td>
                            <td>4 - 5 Days</td>
                            <td>&#8377; 18,000 - &#8377; 29,000</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Flat / Full House Shifting</strong></td>
                            <td>Premium 5-Layer Protective</td>
                            <td>3 Packers + 3 Loaders</td>
                            <td>4 - 5 Days</td>
                            <td>&#8377; 28,000 - &#8377; 45,000</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK / Executive Duplex Villa</strong></td>
                            <td>Super Heavy Bubble + Wooden Crates</td>
                            <td>4 Packers + 4 Loaders</td>
                            <td>5 - 6 Days</td>
                            <td>&#8377; 42,000 - &#8377; 68,000</td>
                        </tr>
                        <tr>
                            <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                            <td>Corrugated Foam + Bubble Wrap</td>
                            <td>Loading & Lashing Included</td>
                            <td>5 - 6 Days Delivery</td>
                            <td>&#8377; 5,500 - &#8377; 9,000</td>
                        </tr>
                        <tr>
                            <td><strong>Motor Car (Hatchback / Sedan)</strong></td>
                            <td>Enclosed Carrier Vehicle</td>
                            <td>Hydraulic Ramp Handling</td>
                            <td>5 - 6 Days Delivery</td>
                            <td>&#8377; 15,000 - &#8377; 25,000</td>
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

            <div class="gir2ban-route-info-box">
                <h4>Route Blueprint: Giridih to Bangalore Highway Transit Details</h4>
                <p>
                    <strong>Transit Path:</strong> Giridih &rarr; Ranchi / NH-43 &rarr; Sambalpur &rarr; Raipur &rarr; Hyderabad &rarr; Kurnool &rarr; Anantapur &rarr; Bangalore (Whitefield / Electronic City / HSR Layout). Total distance is roughly 1,850 km. Dedicated covered container trucks ensure prompt transit within 4 to 5 days.
                </p>
            </div>
        </div>
    </section>

    <!-- Vehicle Transport Section -->
    <section class="gir2ban-section">
        <div class="gir2ban-container">
            <div class="gir2ban-grid-2">
                <div>
                    <span class="gir2ban-tag">Vehicle Logistics</span>
                    <h2>Secure Two-Wheeler & Car Transport: Giridih to Bangalore</h2>
                    <p>
                        Driving personal vehicles over 1,850 kilometers across four states entails massive fuel costs, vehicle wear, and driver fatigue. Shree Ashirwad Packers and Movers provides a reliable, secure automotive carrier service.
                    </p>
                    <p>
                        Our specialized car transport trailers and enclosed single-vehicle carriers are equipped with safety winches, custom wheel locks, and soft bumper shields that ensure your vehicle stays completely stationary during the trip. Before loading at your Giridih residence, our field supervisor conducts a thorough multi-point exterior inspection, recording tire treads, fuel levels, and existing scratches on a formal Vehicle Condition Sheet.
                    </p>
                    <p>
                        For motorcycles and sports bikes, we use heavy-duty corrugated sheet wrapping around fuel tanks, headlamps, and chrome mirrors, followed by thick bubble insulation. Vehicles are delivered clean and undamaged right at your doorstep in Bangalore.
                    </p>
                </div>
                <div>
                    <div class="gir2ban-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transport carrier loading from Giridih to Bangalore" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="gir2ban-section gir2ban-section-alt">
        <div class="gir2ban-container">
            <div class="gir2ban-sec-head">
                <span class="gir2ban-tag">Service Advantages</span>
                <h2>Why Choose Shree Ashirwad for Giridih to Bangalore Moves</h2>
                <p>Reliable local operations, certified moving crews, and an unwavering focus on customer satisfaction.</p>
            </div>

            <div class="gir2ban-grid-4">
                <div class="gir2ban-card">
                    <div class="gir2ban-card-icon">&#9989;</div>
                    <h3>Trained In-House Staff</h3>
                    <p>We never use untrained daily wage contractors. Our permanent crew has mastered delicate furniture handling, electronics packing, and staircase maneuvering.</p>
                </div>

                <div class="gir2ban-card">
                    <div class="gir2ban-card-icon">&#128337;</div>
                    <h3>Direct Container Transit</h3>
                    <p>Direct door-to-door closed containers without transshipment or hub consolidation, minimizing transit delays and item misplacement.</p>
                </div>

                <div class="gir2ban-card">
                    <div class="gir2ban-card-icon">&#128176;</div>
                    <h3>Zero Hidden Costs</h3>
                    <p>Transparent written price quotations detailing toll charges, loading, unloading, packing supplies, and transit logistics with 100% upfront clarity.</p>
                </div>

                <div class="gir2ban-card">
                    <div class="gir2ban-card-icon">&#128221;</div>
                    <h3>Government Claim Invoices</h3>
                    <p>Full GST billing, computer-generated packing inventories, consignment notes, and stamped invoices compliant with IT Multinationals and PSU transfer norms.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Unpacking and Setup Section -->
    <section class="gir2ban-section">
        <div class="gir2ban-container">
            <div class="gir2ban-grid-2">
                <div>
                    <div class="gir2ban-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and home setup service in Bangalore" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="gir2ban-tag">Complete Destination Care</span>
                    <h2>Hassle-Free Unloading, Unpacking & Setup in Bangalore</h2>
                    <p>
                        A relocation is only half-finished when the truck arrives at your destination. Moving heavy cartons into upper floor apartments or assembling large modular wardrobes can quickly overwhelm a busy family. That is why Shree Ashirwad Packers and Movers provides full destination handling services in Bangalore.
                    </p>
                    <p>
                        Upon reaching your new home in Bangalore—whether it is located in Whitefield, Electronic City, Bellandur, Sarjapur, or HSR Layout—our team carefully unloads all articles, carries them up service elevators or staircases, and places each carton in its designated room.
                    </p>
                    <p>
                        Our skilled crew unpacks delicate dinnerware, reassembles double beds, positions large sofa sets, reattaches modular study desks, and clears away all leftover wrapping paper, shredded cardboard, and plastic rolls—leaving your new residence tidy and ready to live in.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Localities Covered -->
    <section class="gir2ban-section gir2ban-section-alt">
        <div class="gir2ban-container">
            <div class="gir2ban-sec-head">
                <span class="gir2ban-tag">Coverage Area</span>
                <h2>Neighborhoods Covered Across Giridih and Bangalore</h2>
                <p>Door-to-door pickup and delivery across every residential colony, commercial market, and surrounding industrial township.</p>
            </div>

            <div class="gir2ban-grid-2">
                <div class="gir2ban-card">
                    <h3>Pickup Locations in Giridih District</h3>
                    <p>
                        Makatpur, Bada Chowk, Pachamba, Sirsia, Moti Nagar, Baniadih, Buxidih, Giridih Court & Collectorate Colony, New Barganda, Mohanpur, Bengabad Road, and Jamua bypass.
                    </p>
                </div>

                <div class="gir2ban-card">
                    <h3>Delivery Locations in Bangalore Urban</h3>
                    <p>
                        Whitefield, Electronic City (Phases 1 & 2), Bellandur, Marathahalli, Sarjapur Road, HSR Layout, Koramangala, Indiranagar, Manyata Tech Park, Hebbal, Yelahanka, and Bannerghatta Road.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section class="gir2ban-section">
        <div class="gir2ban-container">
            <div class="gir2ban-sec-head">
                <span class="gir2ban-tag">Helpful Answers</span>
                <h2>Frequently Asked Questions: Giridih to Bangalore Relocation</h2>
                <p>Have questions about packing safety, timelines, or billing? Find immediate answers below.</p>
            </div>

            <div style="max-width: 880px; margin: 0 auto;">
                <div class="gir2ban-faq-item">
                    <h4>What is the typical transit duration from Giridih to Bangalore?</h4>
                    <p>
                        The highway distance between Giridih and Bangalore is approximately 1,850 kilometers. Our direct closed container trucks complete the long-distance journey in roughly 4 to 5 days with full real-time GPS tracking updates provided to the customer.
                    </p>
                </div>

                <div class="gir2ban-faq-item">
                    <h4>Do you deliver to Whitefield, Electronic City, and Sarjapur Road in Bangalore?</h4>
                    <p>
                        Yes, our delivery network covers every tech and residential corridor across Bangalore, including Whitefield, Electronic City (Phases 1 & 2), Bellandur, Marathahalli, Sarjapur Road, HSR Layout, Koramangala, Indiranagar, Manyata Tech Park, Hebbal, Yelahanka, and Bannerghatta Road.
                    </p>
                </div>

                <div class="gir2ban-faq-item">
                    <h4>Do you provide GST invoices for corporate IT relocation reimbursement?</h4>
                    <p>
                        Yes, we provide 100% compliant GST invoices, detailed item inventories, consignment notes (bilty), and stamped payment receipts accepted by leading IT firms, multinationals, PSUs, and software tech parks in Bangalore.
                    </p>
                </div>

                <div class="gir2ban-faq-item">
                    <h4>How are fragile furniture and electronics safeguarded during transit?</h4>
                    <p>
                        We implement a strict 5-tier packaging protocol utilizing virgin bubble wrap, heavy corrugated sheets, high-density edge corner protectors, stretch film wrapping, and reinforced adhesive sealing to prevent road shock absorption.
                    </p>
                </div>

                <div class="gir2ban-faq-item">
                    <h4>What is the approximate cost of moving a 2 BHK apartment from Giridih to Bangalore?</h4>
                    <p>
                        A standard 2 BHK household relocation from Giridih to Bangalore typically ranges between INR 28,000 and 45,000 depending on volume, packing material tier, elevator accessibility, and specific high-rise floor levels at both ends.
                    </p>
                </div>
            </div>

            <!-- Call to Action Banner -->
            <div class="gir2ban-cta-banner" id="gir2ban-quote">
                <h3>Ready to Relocate from Giridih to Bangalore?</h3>
                <p>
                    Contact Shree Ashirwad Packers and Movers today for an instant free moving estimate. Experience prompt, professional shifting with verified intercity relocation experts.
                </p>
                <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                    <a href="tel:8409531615" class="gir2ban-btn-primary" style="background: #f59e0b; color: #0f172a;">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                        Call 8409531615
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20relocation%20from%20Giridih%20to%20Bangalore." class="gir2ban-btn-outline" target="_blank" rel="noopener noreferrer">
                        Chat on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
