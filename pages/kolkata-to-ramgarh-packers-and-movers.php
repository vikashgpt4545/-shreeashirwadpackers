<?php
/**
 * Page Name: Kolkata to Ramgarh Packers and Movers
 * Route Slug: kolkata-to-ramgarh-packers-and-movers
 * Description: Professional interstate moving services, household relocation, CIL to CCL corporate transfers, defense claims, car carrier transit, and bike courier from Kolkata to Ramgarh.
 * Focus Keywords: kolkata to ramgarh packers and movers, packers and movers kolkata to ramgarh, house shifting kolkata to ramgarh, car transport kolkata to ramgarh, bike parcel kolkata to ramgarh, movers from kolkata to ramgarh
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Kolkata to Ramgarh Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Top-rated Kolkata to Ramgarh packers and movers. 365 km overnight container transit via NH-19, 5-layer safety packing, CIL-CCL & defense transfer billing, car carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/kolkata-to-ramgarh-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="kolkata to ramgarh packers and movers, packers and movers kolkata to ramgarh, house shifting kolkata to ramgarh, car transport kolkata to ramgarh, bike parcel kolkata to ramgarh, movers from kolkata to ramgarh">
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

    <!-- Scoped CSS for Route 16 (Kolkata to Ramgarh) -->
    <style>
        :root {
            --kol2ram-primary: #1e3a5f;
            --kol2ram-secondary: #0284c7;
            --kol2ram-accent: #f59e0b;
            --kol2ram-accent-light: #fef3c7;
            --kol2ram-dark: #0f172a;
            --kol2ram-gray-bg: #f8fafc;
            --kol2ram-card-border: #e2e8f0;
            --kol2ram-text: #334155;
            --kol2ram-text-muted: #64748b;
            --kol2ram-radius: 12px;
            --kol2ram-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
            --kol2ram-shadow-hover: 0 20px 30px -10px rgba(2, 132, 199, 0.18);
        }

        .kol2ram-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.92) 0%, rgba(30, 58, 95, 0.88) 100%), url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 70px 20px 65px;
            position: relative;
        }

        .kol2ram-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .kol2ram-breadcrumbs {
            font-size: 0.9rem;
            color: #cbd5e1;
            margin-bottom: 20px;
        }

        .kol2ram-breadcrumbs a {
            color: var(--kol2ram-accent);
            text-decoration: none;
        }

        .kol2ram-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(245, 158, 11, 0.18);
            border: 1px solid rgba(245, 158, 11, 0.5);
            color: var(--kol2ram-accent);
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 0.88rem;
            font-weight: 600;
            margin-bottom: 18px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .kol2ram-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            line-height: 1.25;
            font-weight: 800;
            margin-bottom: 18px;
            color: #ffffff;
        }

        .kol2ram-hero p {
            font-size: 1.12rem;
            line-height: 1.7;
            max-width: 780px;
            color: #e2e8f0;
            margin-bottom: 28px;
        }

        .kol2ram-hero-cta {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .kol2ram-btn-primary {
            background: var(--kol2ram-accent);
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

        .kol2ram-btn-primary:hover {
            background: #d97706;
            transform: translateY(-2px);
            color: #ffffff;
        }

        .kol2ram-btn-outline {
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

        .kol2ram-btn-outline:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: #ffffff;
        }

        .kol2ram-quick-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
            margin-top: 40px;
        }

        .kol2ram-stat-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 18px 20px;
            border-radius: var(--kol2ram-radius);
        }

        .kol2ram-stat-num {
            font-family: 'Outfit', sans-serif;
            font-size: 1.85rem;
            font-weight: 800;
            color: var(--kol2ram-accent);
            margin-bottom: 4px;
        }

        .kol2ram-stat-lbl {
            font-size: 0.88rem;
            color: #cbd5e1;
        }

        .kol2ram-section {
            padding: 60px 0;
        }

        .kol2ram-section-alt {
            background-color: var(--kol2ram-gray-bg);
        }

        .kol2ram-sec-head {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 45px;
        }

        .kol2ram-tag {
            display: inline-block;
            background: rgba(2, 132, 199, 0.1);
            color: var(--kol2ram-secondary);
            font-size: 0.82rem;
            font-weight: 700;
            padding: 4px 14px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            margin-bottom: 12px;
        }

        .kol2ram-sec-head h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            color: var(--kol2ram-dark);
            font-weight: 800;
            line-height: 1.3;
            margin-bottom: 14px;
        }

        .kol2ram-sec-head p {
            color: var(--kol2ram-text-muted);
            font-size: 1.05rem;
            line-height: 1.65;
        }

        .kol2ram-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 35px;
            align-items: center;
        }

        .kol2ram-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .kol2ram-grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .kol2ram-card {
            background: #ffffff;
            border: 1px solid var(--kol2ram-card-border);
            border-radius: var(--kol2ram-radius);
            padding: 26px;
            box-shadow: var(--kol2ram-shadow);
            transition: all 0.3s ease;
        }

        .kol2ram-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--kol2ram-shadow-hover);
            border-color: rgba(2, 132, 199, 0.3);
        }

        .kol2ram-card-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: rgba(2, 132, 199, 0.12);
            color: var(--kol2ram-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 18px;
        }

        .kol2ram-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.3rem;
            color: var(--kol2ram-dark);
            margin-bottom: 12px;
            font-weight: 700;
        }

        .kol2ram-card p {
            color: var(--kol2ram-text);
            font-size: 0.95rem;
            line-height: 1.65;
        }

        .kol2ram-img-wrapper {
            border-radius: var(--kol2ram-radius);
            overflow: hidden;
            box-shadow: var(--kol2ram-shadow);
        }

        .kol2ram-img-wrapper img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .kol2ram-img-wrapper:hover img {
            transform: scale(1.03);
        }

        .kol2ram-table-box {
            background: #ffffff;
            border-radius: var(--kol2ram-radius);
            box-shadow: var(--kol2ram-shadow);
            overflow: hidden;
            border: 1px solid var(--kol2ram-card-border);
            margin: 25px 0;
        }

        .kol2ram-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .kol2ram-table th {
            background: var(--kol2ram-primary);
            color: #ffffff;
            font-family: 'Outfit', sans-serif;
            padding: 16px 20px;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .kol2ram-table td {
            padding: 14px 20px;
            border-bottom: 1px solid #f1f5f9;
            color: var(--kol2ram-text);
            font-size: 0.94rem;
        }

        .kol2ram-table tr:nth-child(even) {
            background: #f8fafc;
        }

        .kol2ram-route-info-box {
            background: #eff6ff;
            border-left: 4px solid var(--kol2ram-secondary);
            padding: 22px 24px;
            border-radius: 0 10px 10px 0;
            margin: 25px 0;
        }

        .kol2ram-route-info-box h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            color: var(--kol2ram-primary);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .kol2ram-faq-item {
            background: #ffffff;
            border: 1px solid var(--kol2ram-card-border);
            border-radius: var(--kol2ram-radius);
            padding: 20px 24px;
            margin-bottom: 16px;
            box-shadow: var(--kol2ram-shadow);
        }

        .kol2ram-faq-item h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.12rem;
            color: var(--kol2ram-dark);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .kol2ram-faq-item p {
            color: var(--kol2ram-text);
            font-size: 0.95rem;
            line-height: 1.65;
            margin: 0;
        }

        .kol2ram-cta-banner {
            background: linear-gradient(135deg, #1e3a5f 0%, #0f172a 100%);
            border-radius: 16px;
            padding: 50px 30px;
            text-align: center;
            color: #ffffff;
            margin-top: 50px;
            box-shadow: 0 15px 30px rgba(15, 23, 42, 0.2);
        }

        .kol2ram-cta-banner h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.1rem;
            font-weight: 800;
            margin-bottom: 14px;
        }

        .kol2ram-cta-banner p {
            font-size: 1.05rem;
            max-width: 680px;
            margin: 0 auto 25px;
            color: #cbd5e1;
            line-height: 1.65;
        }

        @media (max-width: 768px) {
            .kol2ram-hero h1 {
                font-size: 2.1rem;
            }
            .kol2ram-grid-2 {
                grid-template-columns: 1fr;
            }
            .kol2ram-table th, .kol2ram-table td {
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
      "name": "Shree Ashirwad Packers and Movers Kolkata to Ramgarh",
      "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
      "@id": "https://www.shreeashirwadpackers.com/#kolkata-to-ramgarh-packers",
      "url": "https://www.shreeashirwadpackers.com/kolkata-to-ramgarh-packers-and-movers",
      "telephone": "+91-8409531615",
      "priceRange": "INR 12,000 - 55,000",
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
      "serviceType": "Interstate Relocation and Auto Carrier Services",
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
          "@type": "City",
          "name": "Ramgarh, Jharkhand"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Kolkata to Ramgarh Relocation Services",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Household Relocation from Kolkata to Ramgarh"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "CIL to CCL Corporate & Defense Transfer Claim Billing"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Car Carrier Shipping to Ramgarh"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Two-Wheeler Bike Parcel Express to Ramgarh"
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
          "name": "Kolkata to Ramgarh Packers and Movers",
          "item": "https://www.shreeashirwadpackers.com/kolkata-to-ramgarh-packers-and-movers"
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
          "name": "What is the typical transit duration from Kolkata to Ramgarh?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The highway distance between Kolkata and Ramgarh is approximately 365 kilometers via Dankuni, Durgapur, Asansol, Dhanbad, and Bokaro Steel City. Our dedicated closed container trucks deliver within 18 to 24 hours directly to your doorstep in Ramgarh."
          }
        },
        {
          "@type": "Question",
          "name": "Do you pick up from Salt Lake, New Town, and Howrah?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, our pickup operations cover the entire Kolkata metropolitan area including Salt Lake City, New Town, Rajarhat, Ballygunge, Alipore, Behala, Howrah, Dum Dum, Garia, Tollygunge, and Barrackpore."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide compliant transfer billing for Coal India and defense officers?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we provide 100% compliant GST invoices, detailed itemized inventories, consignment notes (bilty), and money receipts accepted by Coal India Limited (CIL HQ Kolkata), CCL, military authorities, and public sector units."
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
          "name": "What is the approximate cost of moving a 2 BHK apartment from Kolkata to Ramgarh?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A standard 2 BHK household relocation from Kolkata to Ramgarh typically ranges between INR 17,000 and 26,000 depending on volume, floor levels, packing material tier, and elevator accessibility at both locations."
          }
        }
      ]
    }
    </script>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <!-- Hero Section -->
    <header class="kol2ram-hero">
        <div class="kol2ram-container">
            <nav class="kol2ram-breadcrumbs" aria-label="breadcrumb">
                <a href="<?php echo SITE_BASE_URL; ?>/">Home</a> &raquo; 
                <a href="<?php echo SITE_BASE_URL; ?>/services">Interstate Routes</a> &raquo; 
                <span>Kolkata to Ramgarh</span>
            </nav>
            <div class="kol2ram-hero-badge">&#10004; Dedicated Interstate Express Cargo Corridor</div>
            <h1>Reliable Kolkata to Ramgarh Packers and Movers</h1>
            <p>
                Professional interstate moving services from Kolkata (Salt Lake, New Town, Ballygunge, Howrah) to Ramgarh Cantonment, Barka-Sayal CCL township, and Patratu. Complete household shifting, CIL to CCL transfer billing, enclosed car carrier transit, and bike courier with guaranteed safe delivery.
            </p>
            <div class="kol2ram-hero-cta">
                <a href="tel:8409531615" class="kol2ram-btn-primary">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                    Call: 8409531615
                </a>
                <a href="#kol2ram-quote" class="kol2ram-btn-outline">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Request Free Estimate
                </a>
            </div>

            <div class="kol2ram-quick-stats">
                <div class="kol2ram-stat-card">
                    <div class="kol2ram-stat-num">365 KM</div>
                    <div class="kol2ram-stat-lbl">Highway Distance via NH-19 & NH-320</div>
                </div>
                <div class="kol2ram-stat-card">
                    <div class="kol2ram-stat-num">18-24 Hrs</div>
                    <div class="kol2ram-stat-lbl">Overnight Express Delivery</div>
                </div>
                <div class="kol2ram-stat-card">
                    <div class="kol2ram-stat-num">100% Safe</div>
                    <div class="kol2ram-stat-lbl">Weatherproof Container Fleet</div>
                </div>
                <div class="kol2ram-stat-card">
                    <div class="kol2ram-stat-num">GST Approved</div>
                    <div class="kol2ram-stat-lbl">CIL-CCL & Defense Claim Billing</div>
                </div>
            </div>
        </div>
    </header>

    <!-- Overview Section -->
    <section class="kol2ram-section">
        <div class="kol2ram-container">
            <div class="kol2ram-grid-2">
                <div>
                    <span class="kol2ram-tag">Premier Interstate Logistics</span>
                    <h2>Fast & Safe Relocation from Kolkata Metropolis to Ramgarh</h2>
                    <p>
                        The interstate transit corridor connecting Kolkata with Ramgarh extends across roughly 365 kilometers along National Highway 19 (the historic Grand Trunk Road) and connects via Bokaro through National Highway 320 into Ramgarh Cantonment. This vital freight and passenger corridor links the commercial capital of eastern India with the mineral-rich, defense-anchored industrial belt of Ramgarh District in Jharkhand.
                    </p>
                    <p>
                        With continuous executive movements—such as Coal India Limited headquarters staff in Kolkata transferring to operational coal fields in CCL Barka-Sayal and Rajrappa, armed forces personnel reporting for duty at Ramgarh Cantonment (Sikh Regimental Centre and Punjab Regimental Centre), and professionals returning to their hometown—specialized moving solutions are in constant demand. At Shree Ashirwad Packers and Movers, we deliver dependable, scheduled door-to-door transit across this route.
                    </p>
                    <p>
                        Our specialized crews bring heavy-duty packing supplies, professional dismantle-and-reassemble toolkits, and sealed container carriers directly to your Kolkata home in Salt Lake, New Town, Howrah, or South Kolkata. We pack, load, transport across states safely, and unpack at your new home in Ramgarh within 18 to 24 hours.
                    </p>
                    <p>
                        Furthermore, our logistics coordinators maintain strict adherence to interstate transport regulations, providing itemized invoices compliant with corporate, defense, and public sector transfer reimbursement criteria.
                    </p>
                </div>
                <div>
                    <div class="kol2ram-img-wrapper">
                        <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe transit container truck for Kolkata to Ramgarh relocation" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Highlights -->
    <section class="kol2ram-section kol2ram-section-alt">
        <div class="kol2ram-container">
            <div class="kol2ram-sec-head">
                <span class="kol2ram-tag">Dedicated Moving Solutions</span>
                <h2>Specialized Shifting Services: Kolkata to Ramgarh</h2>
                <p>Tailored moving services designed to handle family apartments, defense quarters, and vehicle transport.</p>
            </div>

            <div class="kol2ram-grid-3">
                <div class="kol2ram-card">
                    <div class="kol2ram-card-icon">&#127968;</div>
                    <h3>Complete Household Relocation</h3>
                    <p>
                        Comprehensive home shifting from 1 BHK to luxury duplexes. We pack, disassemble double beds and modular wardrobes, transport in covered containers, and reassemble everything at your Ramgarh home.
                    </p>
                </div>

                <div class="kol2ram-card">
                    <div class="kol2ram-card-icon">&#9874;</div>
                    <h3>CIL to CCL Mining Transfers</h3>
                    <p>
                        Specialized moving support for Coal India and subsidiary executives transferring from Kolkata headquarters to CCL mining commands in Barka-Sayal, Rajrappa, and Sirka with standardized billing.
                    </p>
                </div>

                <div class="kol2ram-card">
                    <div class="kol2ram-card-icon">&#127894;</div>
                    <h3>Defense & Paramilitary Moves</h3>
                    <p>
                        Dedicated shifting support for armed forces personnel reporting for duty at Ramgarh Cantonment (SRC & PRC centres) with military-approved GST claims and inventory documentation.
                    </p>
                </div>

                <div class="kol2ram-card">
                    <div class="kol2ram-card-icon">&#128663;</div>
                    <h3>Door-to-Door Car Carrier</h3>
                    <p>
                        Secure car transport inside enclosed auto trailers. We transport hatchbacks, sedans, and SUVs from Kolkata to Ramgarh with wheel locks, protective bumper shields, and full transit insurance.
                    </p>
                </div>

                <div class="kol2ram-card">
                    <div class="kol2ram-card-icon">&#127949;</div>
                    <h3>Two-Wheeler Bike Courier</h3>
                    <p>
                        Bikes and scooters receive multi-layer wrapping with bubble sheets, corrugated cartons, and mirror padding. Fuel is drained to regulatory safety levels, battery terminals secured, and the vehicle is transported securely inside covered trucks.
                    </p>
                </div>

                <div class="kol2ram-card">
                    <div class="kol2ram-card-icon">&#128188;</div>
                    <h3>Commercial & Office Moving</h3>
                    <p>
                        Relocating business offices, retail merchandise, medical equipment, or IT workstations between Kolkata and Ramgarh. We deploy anti-static packaging, serial-numbered carton sealing, and systematic file archiving.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Packaging Standard Section -->
    <section class="kol2ram-section">
        <div class="kol2ram-container">
            <div class="kol2ram-grid-2">
                <div>
                    <div class="kol2ram-img-wrapper">
                        <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="5 layer packing process for Kolkata to Ramgarh household shifting" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="kol2ram-tag">Protection Technology</span>
                    <h2>Engineered 5-Layer Packaging for Interstate Highway Transit</h2>
                    <p>
                        The 365-kilometer highway connecting Kolkata to Ramgarh passes through busy industrial hubs and varying road surfaces. To eliminate all transit vibration and dust contamination, Shree Ashirwad adheres to an unyielding 5-layer packing methodology:
                    </p>
                    <ul style="color: var(--kol2ram-text); line-height: 1.8; padding-left: 20px; margin-bottom: 20px;">
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
    <section class="kol2ram-section kol2ram-section-alt">
        <div class="kol2ram-container">
            <div class="kol2ram-sec-head">
                <span class="kol2ram-tag">Transparent Tariff</span>
                <h2>Kolkata to Ramgarh Relocation Cost Estimates</h2>
                <p>Fair, itemized, and transparent pricing without hidden tolls or sudden fuel surcharges. Contact our team for an exact, tailored quotation.</p>
            </div>

            <div class="kol2ram-table-box">
                <table class="kol2ram-table">
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
                            <td>18 - 24 Hours</td>
                            <td>&#8377; 12,000 - &#8377; 18,000</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Flat / Full House Shifting</strong></td>
                            <td>Premium 5-Layer Protective</td>
                            <td>3 Packers + 3 Loaders</td>
                            <td>18 - 24 Hours</td>
                            <td>&#8377; 17,000 - &#8377; 26,000</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK / Executive Duplex Villa</strong></td>
                            <td>Super Heavy Bubble + Wooden Crates</td>
                            <td>4 Packers + 4 Loaders</td>
                            <td>18 - 24 Hours</td>
                            <td>&#8377; 25,000 - &#8377; 38,000</td>
                        </tr>
                        <tr>
                            <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                            <td>Corrugated Foam + Bubble Wrap</td>
                            <td>Loading & Lashing Included</td>
                            <td>24 - 36 Hours</td>
                            <td>&#8377; 3,500 - &#8377; 5,500</td>
                        </tr>
                        <tr>
                            <td><strong>Motor Car (Hatchback / Sedan)</strong></td>
                            <td>Enclosed Carrier Vehicle</td>
                            <td>Hydraulic Ramp Handling</td>
                            <td>24 - 48 Hours</td>
                            <td>&#8377; 10,000 - &#8377; 15,000</td>
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

            <div class="kol2ram-route-info-box">
                <h4>Route Blueprint: Kolkata to Ramgarh Highway Transit Details</h4>
                <p>
                    <strong>Transit Path:</strong> Kolkata (Salt Lake / Howrah) &rarr; Dankuni &rarr; Burdwan &rarr; Durgapur &rarr; Asansol &rarr; Dhanbad &rarr; Bokaro Steel City &rarr; Chas &rarr; Ramgarh Cantonment. Total distance is roughly 365 km. Dedicated covered container trucks ensure prompt overnight transit within 18 to 24 hours.
                </p>
            </div>
        </div>
    </section>

    <!-- Vehicle Transport Section -->
    <section class="kol2ram-section">
        <div class="kol2ram-container">
            <div class="kol2ram-grid-2">
                <div>
                    <span class="kol2ram-tag">Vehicle Logistics</span>
                    <h2>Secure Two-Wheeler & Car Transport: Kolkata to Ramgarh</h2>
                    <p>
                        Driving personal vehicles between Kolkata and Ramgarh across 365 kilometers through heavy freight corridors can cause unnecessary strain and vehicle wear. Shree Ashirwad Packers and Movers provides a reliable, secure automotive carrier service.
                    </p>
                    <p>
                        Our specialized car transport trailers and enclosed single-vehicle carriers are equipped with safety winches, custom wheel locks, and soft bumper shields that ensure your vehicle stays completely stationary during the trip. Before loading at your Kolkata residence, our field supervisor conducts a thorough multi-point exterior inspection, recording tire treads, fuel levels, and existing scratches on a formal Vehicle Condition Sheet.
                    </p>
                    <p>
                        For motorcycles and sports bikes, we use heavy-duty corrugated sheet wrapping around fuel tanks, headlamps, and chrome mirrors, followed by thick bubble insulation. Vehicles are delivered clean and undamaged right at your doorstep in Ramgarh.
                    </p>
                </div>
                <div>
                    <div class="kol2ram-img-wrapper">
                        <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transport carrier loading from Kolkata to Ramgarh" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="kol2ram-section kol2ram-section-alt">
        <div class="kol2ram-container">
            <div class="kol2ram-sec-head">
                <span class="kol2ram-tag">Service Advantages</span>
                <h2>Why Choose Shree Ashirwad for Kolkata to Ramgarh Moves</h2>
                <p>Reliable local operations, certified moving crews, and an unwavering focus on customer satisfaction.</p>
            </div>

            <div class="kol2ram-grid-4">
                <div class="kol2ram-card">
                    <div class="kol2ram-card-icon">&#9989;</div>
                    <h3>Trained In-House Staff</h3>
                    <p>We never use untrained daily wage contractors. Our permanent crew has mastered delicate furniture handling, electronics packing, and staircase maneuvering.</p>
                </div>

                <div class="kol2ram-card">
                    <div class="kol2ram-card-icon">&#128337;</div>
                    <h3>Fast 18-24 Hr Delivery</h3>
                    <p>Covering the 365 km distance overnight in 18 to 24 hours, our dedicated container trucks deliver swiftly with guaranteed schedule compliance for your family.</p>
                </div>

                <div class="kol2ram-card">
                    <div class="kol2ram-card-icon">&#128176;</div>
                    <h3>Zero Hidden Costs</h3>
                    <p>Transparent written price quotations detailing toll charges, loading, unloading, packing supplies, and transit logistics with 100% upfront clarity.</p>
                </div>

                <div class="kol2ram-card">
                    <div class="kol2ram-card-icon">&#128221;</div>
                    <h3>CIL-CCL & Defense Invoices</h3>
                    <p>Full GST billing, computer-generated packing inventories, consignment notes, and stamped invoices compliant with Coal India and Defense transfer norms.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Unpacking and Setup Section -->
    <section class="kol2ram-section">
        <div class="kol2ram-container">
            <div class="kol2ram-grid-2">
                <div>
                    <div class="kol2ram-img-wrapper">
                        <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and home setup service in Ramgarh" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="kol2ram-tag">Complete Destination Care</span>
                    <h2>Hassle-Free Unloading, Unpacking & Setup in Ramgarh</h2>
                    <p>
                        A relocation is only half-finished when the truck arrives at your destination. Moving heavy cartons into multi-story quarters or assembling large modular wardrobes can quickly overwhelm a busy family. That is why Shree Ashirwad Packers and Movers provides full destination handling services across Ramgarh District.
                    </p>
                    <p>
                        Upon reaching your new home in Ramgarh—whether it is located in Ramgarh Cantonment, Gola Road, Subhash Chowk, or CCL residential colonies in Barka-Sayal—our team carefully unloads all articles, carries them up staircases, and places each carton in its designated room.
                    </p>
                    <p>
                        Our skilled crew unpacks delicate dinnerware, reassembles double beds, positions large sofa sets, reattaches modular study desks, and clears away all leftover wrapping paper, shredded cardboard, and plastic rolls—leaving your new residence tidy and ready to live in.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Localities Covered -->
    <section class="kol2ram-section kol2ram-section-alt">
        <div class="kol2ram-container">
            <div class="kol2ram-sec-head">
                <span class="kol2ram-tag">Coverage Area</span>
                <h2>Neighborhoods Covered Across Kolkata and Ramgarh</h2>
                <p>Door-to-door pickup and delivery across every residential colony, commercial market, and surrounding metropolitan neighborhood.</p>
            </div>

            <div class="kol2ram-grid-2">
                <div class="kol2ram-card">
                    <h3>Pickup Locations in Kolkata Metropolis</h3>
                    <p>
                        Salt Lake City (Sectors 1-5), New Town, Rajarhat, Ballygunge, Alipore, Behala, Howrah, Dum Dum, Garia, Tollygunge, and Barrackpore.
                    </p>
                </div>

                <div class="kol2ram-card">
                    <h3>Delivery Locations in Ramgarh District</h3>
                    <p>
                        Ramgarh Cantonment, Subhash Chowk, Gola Road, Chitarpur, Barka-Sayal CCL residential township, Patratu Thermal Power colony, Sirka, Rajrappa Project, and Kuju.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section class="kol2ram-section">
        <div class="kol2ram-container">
            <div class="kol2ram-sec-head">
                <span class="kol2ram-tag">Helpful Answers</span>
                <h2>Frequently Asked Questions: Kolkata to Ramgarh Relocation</h2>
                <p>Have questions about packing safety, timelines, or billing? Find immediate answers below.</p>
            </div>

            <div style="max-width: 880px; margin: 0 auto;">
                <div class="kol2ram-faq-item">
                    <h4>What is the typical transit duration from Kolkata to Ramgarh?</h4>
                    <p>
                        The highway distance between Kolkata and Ramgarh is approximately 365 kilometers via Dankuni, Durgapur, Asansol, Dhanbad, and Bokaro Steel City. Our dedicated closed container trucks deliver within 18 to 24 hours directly to your doorstep in Ramgarh.
                    </p>
                </div>

                <div class="kol2ram-faq-item">
                    <h4>Do you pick up from Salt Lake, New Town, and Howrah?</h4>
                    <p>
                        Yes, our pickup operations cover the entire Kolkata metropolitan area including Salt Lake City, New Town, Rajarhat, Ballygunge, Alipore, Behala, Howrah, Dum Dum, Garia, Tollygunge, and Barrackpore.
                    </p>
                </div>

                <div class="kol2ram-faq-item">
                    <h4>Do you provide compliant transfer billing for Coal India and defense officers?</h4>
                    <p>
                        Yes, we provide 100% compliant GST invoices, detailed itemized inventories, consignment notes (bilty), and money receipts accepted by Coal India Limited (CIL HQ Kolkata), CCL, military authorities, and public sector units.
                    </p>
                </div>

                <div class="kol2ram-faq-item">
                    <h4>How are fragile furniture and electronics safeguarded during transit?</h4>
                    <p>
                        We implement a strict 5-tier packaging protocol utilizing virgin bubble wrap, heavy corrugated sheets, high-density edge corner protectors, stretch film wrapping, and reinforced adhesive sealing to prevent road shock absorption.
                    </p>
                </div>

                <div class="kol2ram-faq-item">
                    <h4>What is the approximate cost of moving a 2 BHK apartment from Kolkata to Ramgarh?</h4>
                    <p>
                        A standard 2 BHK household relocation from Kolkata to Ramgarh typically ranges between INR 17,000 and 26,000 depending on volume, floor levels, packing material tier, and elevator accessibility at both locations.
                    </p>
                </div>
            </div>

            <!-- Call to Action Banner -->
            <div class="kol2ram-cta-banner" id="kol2ram-quote">
                <h3>Ready to Relocate from Kolkata to Ramgarh?</h3>
                <p>
                    Contact Shree Ashirwad Packers and Movers today for an instant free moving estimate. Experience prompt, professional shifting with verified long-distance interstate relocation experts.
                </p>
                <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                    <a href="tel:8409531615" class="kol2ram-btn-primary" style="background: #f59e0b; color: #0f172a;">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                        Call 8409531615
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20relocation%20from%20Kolkata%20to%20Ramgarh." class="kol2ram-btn-outline" target="_blank" rel="noopener noreferrer">
                        Chat on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
