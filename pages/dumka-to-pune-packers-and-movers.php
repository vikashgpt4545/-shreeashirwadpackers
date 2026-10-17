<?php
/**
 * Page Name: Dumka to Pune Packers and Movers
 * Route Slug: dumka-to-pune-packers-and-movers
 * Description: Premium interstate relocation, household goods shifting, car carrier shipping, and bike courier from Dumka to Pune (Maharashtra) via NH-53 / NH-60.
 * Focus Keywords: dumka to pune packers and movers, packers and movers dumka to pune, house shifting dumka to pune, car transport dumka to pune, bike parcel dumka to pune, goods transport dumka to hinjawadi pune
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Dumka to Pune Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Top-rated Dumka to Pune packers and movers. 1,680 km transit, 5-layer safety packaging, dedicated container trucks, car & bike shipping. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/dumka-to-pune-packers-and-movers";
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
    <meta name="geo.placename" content="Dumka">

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

    <!-- Scoped CSS for Route 13 (Dumka to Pune) -->
    <style>
        :root {
            --dum2pun-primary: #1e3a5f;
            --dum2pun-secondary: #0284c7;
            --dum2pun-accent: #f59e0b;
            --dum2pun-accent-light: #fef3c7;
            --dum2pun-dark: #0f172a;
            --dum2pun-gray-bg: #f8fafc;
            --dum2pun-card-border: #e2e8f0;
            --dum2pun-text: #334155;
            --dum2pun-text-muted: #64748b;
            --dum2pun-radius: 12px;
            --dum2pun-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
            --dum2pun-shadow-hover: 0 20px 30px -10px rgba(2, 132, 199, 0.18);
        }

        .dum2pun-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.92) 0%, rgba(30, 58, 95, 0.88) 100%), url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 70px 20px 65px;
            position: relative;
        }

        .dum2pun-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .dum2pun-breadcrumbs {
            font-size: 0.9rem;
            color: #cbd5e1;
            margin-bottom: 20px;
        }

        .dum2pun-breadcrumbs a {
            color: var(--dum2pun-accent);
            text-decoration: none;
        }

        .dum2pun-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(245, 158, 11, 0.18);
            border: 1px solid rgba(245, 158, 11, 0.5);
            color: var(--dum2pun-accent);
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 0.88rem;
            font-weight: 600;
            margin-bottom: 18px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .dum2pun-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            line-height: 1.25;
            font-weight: 800;
            margin-bottom: 18px;
            color: #ffffff;
        }

        .dum2pun-hero p {
            font-size: 1.12rem;
            line-height: 1.7;
            max-width: 780px;
            color: #e2e8f0;
            margin-bottom: 28px;
        }

        .dum2pun-hero-cta {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .dum2pun-btn-primary {
            background: var(--dum2pun-accent);
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

        .dum2pun-btn-primary:hover {
            background: #d97706;
            transform: translateY(-2px);
            color: #ffffff;
        }

        .dum2pun-btn-outline {
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

        .dum2pun-btn-outline:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: #ffffff;
        }

        .dum2pun-quick-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
            margin-top: 40px;
        }

        .dum2pun-stat-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 18px 20px;
            border-radius: var(--dum2pun-radius);
        }

        .dum2pun-stat-num {
            font-family: 'Outfit', sans-serif;
            font-size: 1.85rem;
            font-weight: 800;
            color: var(--dum2pun-accent);
            margin-bottom: 4px;
        }

        .dum2pun-stat-lbl {
            font-size: 0.88rem;
            color: #cbd5e1;
        }

        .dum2pun-section {
            padding: 60px 0;
        }

        .dum2pun-section-alt {
            background-color: var(--dum2pun-gray-bg);
        }

        .dum2pun-sec-head {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 45px;
        }

        .dum2pun-tag {
            display: inline-block;
            background: rgba(2, 132, 199, 0.1);
            color: var(--dum2pun-secondary);
            font-size: 0.82rem;
            font-weight: 700;
            padding: 4px 14px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            margin-bottom: 12px;
        }

        .dum2pun-sec-head h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            color: var(--dum2pun-dark);
            font-weight: 800;
            line-height: 1.3;
            margin-bottom: 14px;
        }

        .dum2pun-sec-head p {
            color: var(--dum2pun-text-muted);
            font-size: 1.05rem;
            line-height: 1.65;
        }

        .dum2pun-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 35px;
            align-items: center;
        }

        .dum2pun-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .dum2pun-grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .dum2pun-card {
            background: #ffffff;
            border: 1px solid var(--dum2pun-card-border);
            border-radius: var(--dum2pun-radius);
            padding: 26px;
            box-shadow: var(--dum2pun-shadow);
            transition: all 0.3s ease;
        }

        .dum2pun-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--dum2pun-shadow-hover);
            border-color: rgba(2, 132, 199, 0.3);
        }

        .dum2pun-card-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: rgba(2, 132, 199, 0.12);
            color: var(--dum2pun-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 18px;
        }

        .dum2pun-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.3rem;
            color: var(--dum2pun-dark);
            margin-bottom: 12px;
            font-weight: 700;
        }

        .dum2pun-card p {
            color: var(--dum2pun-text);
            font-size: 0.95rem;
            line-height: 1.65;
        }

        .dum2pun-img-wrapper {
            border-radius: var(--dum2pun-radius);
            overflow: hidden;
            box-shadow: var(--dum2pun-shadow);
        }

        .dum2pun-img-wrapper img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .dum2pun-img-wrapper:hover img {
            transform: scale(1.03);
        }

        .dum2pun-table-box {
            background: #ffffff;
            border-radius: var(--dum2pun-radius);
            box-shadow: var(--dum2pun-shadow);
            overflow: hidden;
            border: 1px solid var(--dum2pun-card-border);
            margin: 25px 0;
        }

        .dum2pun-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .dum2pun-table th {
            background: var(--dum2pun-primary);
            color: #ffffff;
            font-family: 'Outfit', sans-serif;
            padding: 16px 20px;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .dum2pun-table td {
            padding: 14px 20px;
            border-bottom: 1px solid #f1f5f9;
            color: var(--dum2pun-text);
            font-size: 0.94rem;
        }

        .dum2pun-table tr:nth-child(even) {
            background: #f8fafc;
        }

        .dum2pun-route-info-box {
            background: #eff6ff;
            border-left: 4px solid var(--dum2pun-secondary);
            padding: 22px 24px;
            border-radius: 0 10px 10px 0;
            margin: 25px 0;
        }

        .dum2pun-route-info-box h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            color: var(--dum2pun-primary);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .dum2pun-faq-item {
            background: #ffffff;
            border: 1px solid var(--dum2pun-card-border);
            border-radius: var(--dum2pun-radius);
            padding: 20px 24px;
            margin-bottom: 16px;
            box-shadow: var(--dum2pun-shadow);
        }

        .dum2pun-faq-item h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.12rem;
            color: var(--dum2pun-dark);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .dum2pun-faq-item p {
            color: var(--dum2pun-text);
            font-size: 0.95rem;
            line-height: 1.65;
            margin: 0;
        }

        .dum2pun-cta-banner {
            background: linear-gradient(135deg, #1e3a5f 0%, #0f172a 100%);
            border-radius: 16px;
            padding: 50px 30px;
            text-align: center;
            color: #ffffff;
            margin-top: 50px;
            box-shadow: 0 15px 30px rgba(15, 23, 42, 0.2);
        }

        .dum2pun-cta-banner h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.1rem;
            font-weight: 800;
            margin-bottom: 14px;
        }

        .dum2pun-cta-banner p {
            font-size: 1.05rem;
            max-width: 680px;
            margin: 0 auto 25px;
            color: #cbd5e1;
            line-height: 1.65;
        }

        @media (max-width: 768px) {
            .dum2pun-hero h1 {
                font-size: 2.1rem;
            }
            .dum2pun-grid-2 {
                grid-template-columns: 1fr;
            }
            .dum2pun-table th, .dum2pun-table td {
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
      "name": "Shree Ashirwad Packers and Movers Dumka to Pune",
      "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
      "@id": "https://www.shreeashirwadpackers.com/#dumka-to-pune-packers",
      "url": "https://www.shreeashirwadpackers.com/dumka-to-pune-packers-and-movers",
      "telephone": "+91-8409531615",
      "priceRange": "INR 11,000 - 90,000",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Near Dudhani Chowk, Main Road",
        "addressLocality": "Dumka",
        "addressRegion": "Jharkhand",
        "postalCode": "814101",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 24.2686,
        "longitude": 87.2486
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
      "serviceType": "Long Distance Intercity Relocation",
      "provider": {
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers",
        "telephone": "+91-8409531615",
        "url": "https://www.shreeashirwadpackers.com"
      },
      "areaServed": [
        {
          "@type": "AdministrativeArea",
          "name": "Dumka, Jharkhand"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Pune, Maharashtra"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Dumka to Pune Relocation Services",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Household Relocation from Dumka to Pune"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "IT Professional and Corporate Relocation to Hinjawadi"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Enclosed Car Carrier Shipping to Pune / PCMC"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Two-Wheeler Bike Courier to Pune & PCMC"
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
          "name": "Dumka to Pune Packers and Movers",
          "item": "https://www.shreeashirwadpackers.com/dumka-to-pune-packers-and-movers"
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
          "name": "How long does transit take for household goods from Dumka to Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The highway distance between Dumka and Pune is approximately 1,680 kilometers via NH-53 / NH-60. Full dedicated container trucks complete the journey in 4 to 5 days, whereas shared groupage consignments take roughly 6 to 7 days."
          }
        },
        {
          "@type": "Question",
          "name": "Do you deliver to IT hubs like Hinjawadi, Wakad, Baner, and Kharadi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we provide direct residential delivery across all Pune IT corridors and residential townships, including Hinjawadi Phases 1 to 3, Wakad, Baner, Balewadi, Kharadi, Magarpatta City, Hadapsar, Viman Nagar, and Pimpri-Chinchwad (PCMC)."
          }
        },
        {
          "@type": "Question",
          "name": "How do you protect delicate electronics and furniture across 1,680 km?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We deploy a specialized 5-layer protective packing standard incorporating anti-scratch stretch wrap, high-density air bubble wrap, heavy 5-ply corrugated cardboard sheets, edge guards, and waterproof outer sealing to absorb long-haul highway vibrations."
          }
        },
        {
          "@type": "Question",
          "name": "Can I ship my car and motorcycle together with household goods?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we operate dedicated enclosed car carrier trailers and custom two-wheeler lashing bays. We provide pre-transit vehicle inspection reports, tire locking, and comprehensive transit insurance for complete peace of mind."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide GST invoices suitable for corporate HR reimbursement?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, our moving documentation is 100% compliant with corporate transfer guidelines. We provide official GST invoices, detailed itemized inventories, money receipts, and consignment notes accepted across all major IT companies and MNCs."
          }
        }
      ]
    }
    </script>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <!-- Hero Section -->
    <header class="dum2pun-hero">
        <div class="dum2pun-container">
            <nav class="dum2pun-breadcrumbs" aria-label="breadcrumb">
                <a href="<?php echo SITE_BASE_URL; ?>/">Home</a> &raquo; 
                <a href="<?php echo SITE_BASE_URL; ?>/services">Intercity Routes</a> &raquo; 
                <span>Dumka to Pune</span>
            </nav>
            <div class="dum2pun-hero-badge">&#10004; Reliable Western India Interstate Moving</div>
            <h1>Professional Dumka to Pune Packers and Movers</h1>
            <p>
                Trusted long-distance relocation from Dumka (Jharkhand) to Pune (Maharashtra). Dedicated household moving, tech employee transfers, Hinjawadi and Kharadi IT corridor delivery, enclosed car carrier transit, and bike courier with complete transit insurance.
            </p>
            <div class="dum2pun-hero-cta">
                <a href="tel:8409531615" class="dum2pun-btn-primary">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                    Call: 8409531615
                </a>
                <a href="#dum2pun-quote" class="dum2pun-btn-outline">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Request Free Estimate
                </a>
            </div>

            <div class="dum2pun-quick-stats">
                <div class="dum2pun-stat-card">
                    <div class="dum2pun-stat-num">1,680 KM</div>
                    <div class="dum2pun-stat-lbl">Transit Distance via NH-53 / NH-60</div>
                </div>
                <div class="dum2pun-stat-card">
                    <div class="dum2pun-stat-num">4-5 Days</div>
                    <div class="dum2pun-stat-lbl">Direct Dedicated Container Transit</div>
                </div>
                <div class="dum2pun-stat-card">
                    <div class="dum2pun-stat-num">100% Insured</div>
                    <div class="dum2pun-stat-lbl">Comprehensive Transit Policy</div>
                </div>
                <div class="dum2pun-stat-card">
                    <div class="dum2pun-stat-num">GST Approved</div>
                    <div class="dum2pun-stat-lbl">Corporate & PSU Claim Support</div>
                </div>
            </div>
        </div>
    </header>

    <!-- Overview Section -->
    <section class="dum2pun-section">
        <div class="dum2pun-container">
            <div class="dum2pun-grid-2">
                <div>
                    <span class="dum2pun-tag">Trusted Long-Distance Logistics</span>
                    <h2>Safe, Certified Relocation from Dumka to the Oxford of the East</h2>
                    <p>
                        Moving your household across 1,680 kilometers from Dumka in Jharkhand to Pune in Maharashtra involves traversing diverse terrains, multiple state checkposts, and high-speed highway corridors. Pune is an economic powerhouse renowned for its thriving information technology clusters in Hinjawadi and Kharadi, world-class automotive manufacturing in Bhosari and Chakan, and prestigious educational universities.
                    </p>
                    <p>
                        Whether you are an IT professional moving to a high-rise township in Wakad or Baner, an engineering executive transferring to the Pimpri-Chinchwad industrial zone, or a family relocating permanently, Shree Ashirwad Packers and Movers delivers flawless moving services with absolute peace of mind.
                    </p>
                    <p>
                        We deploy seasoned packing professionals directly to your Dumka residence in Rasikpur, Tinghar, Dudhani, or Bandhdih. Using high-grade protective packaging, heavy-duty cartons, and shock-absorbent cushioning, we secure your furniture, electronics, chinaware, and personal valuables before loading them into dedicated, weatherproof container vehicles.
                    </p>
                    <p>
                        In addition, our specialized long-distance teams have extensive experience with Pune’s unique residential landscape. High-density gated complexes across Wakad, Baner, Balewadi, and Kharadi enforce specific society by-laws regarding loading truck timings, elevator lift protection padding, and vehicle entry clearance. Our Pune destination team coordinates seamlessly with society facility managers, takes care of security documentation, and handles heavy carrying up service lifts to guarantee zero friction upon your arrival.
                    </p>
                    <p>
                        Whether you are moving an entire 3 BHK family duplex or shipping high-end electronics and two-wheelers for a young tech career in Rajiv Gandhi Infotech Park at Hinjawadi, our end-to-end relocation system protects your assets against moisture, dust, and highway bumps throughout the 1,680 km journey.
                    </p>
                </div>
                <div>
                    <div class="dum2pun-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe transit container truck for Dumka to Pune relocation" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Highlights -->
    <section class="dum2pun-section dum2pun-section-alt">
        <div class="dum2pun-container">
            <div class="dum2pun-sec-head">
                <span class="dum2pun-tag">Comprehensive Services</span>
                <h2>Specialized Shifting Services: Dumka to Pune</h2>
                <p>Engineered relocation services designed to protect your goods across 1,680 km of highway transit.</p>
            </div>

            <div class="dum2pun-grid-3">
                <div class="dum2pun-card">
                    <div class="dum2pun-card-icon">&#127968;</div>
                    <h3>Full Household Relocation</h3>
                    <p>
                        From compact 1 BHK flats to extensive independent bungalows, we provide complete packing, careful dismantling of king beds and wardrobes, sealed container transit, and room-by-room setup in Pune.
                    </p>
                </div>

                <div class="dum2pun-card">
                    <div class="dum2pun-card-icon">&#128187;</div>
                    <h3>IT Tech Relocation to Hinjawadi & Kharadi</h3>
                    <p>
                        Tailored moving assistance for software developers and corporate executives. We deploy electrostatic-protective wrapping for monitors, laptops, multi-screen consoles, and delicate personal electronics.
                    </p>
                </div>

                <div class="dum2pun-card">
                    <div class="dum2pun-card-icon">&#128663;</div>
                    <h3>Enclosed Car Carrier Shipping</h3>
                    <p>
                        Safe, hydraulic-ramp car shipping using dedicated carrier trucks. We transport hatchbacks, sedans, and SUVs from Dumka to your new residence in Pune with bumper shields, wheel lockdowns, pre-transit condition logs, and transit insurance.
                    </p>
                </div>

                <div class="dum2pun-card">
                    <div class="dum2pun-card-icon">&#127949;</div>
                    <h3>Two-Wheeler Bike Courier</h3>
                    <p>
                        Safe courier for motorcycles and scooters. Fuel is drained to regulatory safety standards, battery disconnected, mirrors padded with foam, and bikes secured in upright berths inside enclosed carriers.
                    </p>
                </div>

                <div class="dum2pun-card">
                    <div class="dum2pun-card-icon">&#128221;</div>
                    <h3>Corporate Relocation Billing</h3>
                    <p>
                        Compliant GST invoices, detailed item inventories, consignment notes (bilty), and payment receipts accepted by top IT firms, automobile corporations, and public sector companies.
                    </p>
                </div>

                <div class="dum2pun-card">
                    <div class="dum2pun-card-icon">&#128230;</div>
                    <h3>Budget-Friendly Shared Groupage</h3>
                    <p>
                        Moving a small consignment, student luggage, or bachelor setup? Our shared container groupage offers huge cost savings without sacrificing safety or delivery reliability.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Packaging Standard Section -->
    <section class="dum2pun-section">
        <div class="dum2pun-container">
            <div class="dum2pun-grid-2">
                <div>
                    <div class="dum2pun-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="5 layer packing process for Dumka to Pune household shifting" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="dum2pun-tag">Protective Engineering</span>
                    <h2>Engineered 5-Layer Packaging for 1,680 KM Long-Distance Transit</h2>
                    <p>
                        Traversing over 1,600 kilometers across Jharkhand, Odisha/Chhattisgarh, and Maharashtra subjects freight to significant highway vibrations and varying temperature conditions. Shree Ashirwad enforces an uncompromising 5-layer protective packing standard:
                    </p>
                    <ul style="color: var(--dum2pun-text); line-height: 1.8; padding-left: 20px; margin-bottom: 20px;">
                        <li><strong>Layer 1 (Scratch Protection):</strong> Surface-protecting stretch wrap seals wooden veneers, leather sofas, and gloss appliance surfaces against fine dust and scuffs.</li>
                        <li><strong>Layer 2 (Shock Absorption Cushioning):</strong> High-density air bubble wrap envelopes flat-screen televisions, microwave ovens, kitchen glassware, and delicate decor.</li>
                        <li><strong>Layer 3 (Rigid Protection):</strong> Tough 5-ply corrugated cardboard sheets wrapped tightly around furniture corners, table edges, mattresses, and armchairs.</li>
                        <li><strong>Layer 4 (Edge Armor Protection):</strong> Hardened edge protectors on all corners and delicate profiles to protect against shifting inside the truck during highway transit.</li>
                        <li><strong>Layer 5 (Weatherproof Sealing):</strong> Waterproof polyolefin outer wraps sealed with heavy-duty reinforced cross-weave tape and tension bands for a weatherproof barrier.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Table Section -->
    <section class="dum2pun-section dum2pun-section-alt">
        <div class="dum2pun-container">
            <div class="dum2pun-sec-head">
                <span class="dum2pun-tag">Clear Pricing</span>
                <h2>Dumka to Pune Relocation Cost Estimates</h2>
                <p>Transparent tariffs calculated based on volume, floor accessibility, packaging quality, and vehicle requirements.</p>
            </div>

            <div class="dum2pun-table-box">
                <table class="dum2pun-table">
                    <thead>
                        <tr>
                            <th>Relocation Type / Home Size</th>
                            <th>Packaging Tier</th>
                            <th>Crew & Handling</th>
                            <th>Transit Timeline</th>
                            <th>Estimated Pricing (INR)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>1 BHK Apartment / Studio</strong></td>
                            <td>3-Layer Corrugated + Bubble</td>
                            <td>3 Packers + Loading</td>
                            <td>4 - 5 Days</td>
                            <td>&#8377; 18,000 - &#8377; 28,000</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Flat / Regular Home</strong></td>
                            <td>5-Layer Shockproof Armor</td>
                            <td>4 Packers + Loading</td>
                            <td>4 - 5 Days</td>
                            <td>&#8377; 26,000 - &#8377; 42,000</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK / Large Villa</strong></td>
                            <td>Premium 5-Layer + Crating</td>
                            <td>5 Packers + Loading</td>
                            <td>5 - 6 Days</td>
                            <td>&#8377; 38,000 - &#8377; 60,000</td>
                        </tr>
                        <tr>
                            <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                            <td>Corrugated Foam + Heavy Bubble</td>
                            <td>Lashing & Roll-on Loading</td>
                            <td>5 - 6 Days</td>
                            <td>&#8377; 5,000 - &#8377; 8,000</td>
                        </tr>
                        <tr>
                            <td><strong>Motor Car (Hatchback / Sedan)</strong></td>
                            <td>Enclosed Auto Carrier Trailer</td>
                            <td>Wheel Locks & Transit Cover</td>
                            <td>4 - 5 Days</td>
                            <td>&#8377; 16,000 - &#8377; 22,000</td>
                        </tr>
                        <tr>
                            <td><strong>SUV / Luxury Automobile</strong></td>
                            <td>Specialized Covered Transporter</td>
                            <td>Hydraulic Loading + Insurance</td>
                            <td>4 - 5 Days</td>
                            <td>&#8377; 19,500 - &#8377; 26,500</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="dum2pun-route-info-box">
                <h4>Route Blueprint: NH-53 & Central-Western Expressway Highway Corridor</h4>
                <p>
                    <strong>Highway Routing:</strong> Dumka &rarr; Dhanbad / Bokaro &rarr; Ranchi &rarr; Rourkela &rarr; Raipur (NH-53) &rarr; Nagpur &rarr; Jalna &rarr; Ahmednagar &rarr; Pune. Total distance is approximately 1,680 km. Our dedicated long-haul container trucks utilize fast-tag toll lanes and dual-driver shifts to guarantee safe, swift delivery.
                </p>
            </div>
        </div>
    </section>

    <!-- Vehicle Transport Section -->
    <section class="dum2pun-section">
        <div class="dum2pun-container">
            <div class="dum2pun-grid-2">
                <div>
                    <span class="dum2pun-tag">Automotive Logistics</span>
                    <h2>Secure Two-Wheeler & Car Transport: Dumka to Pune</h2>
                    <p>
                        Driving 1,680 kilometers across central and western India can cause excessive tire wear, engine fatigue, and driver exhaustion. Shree Ashirwad Packers and Movers offers a secure, cost-effective automotive transport service.
                    </p>
                    <p>
                        We operate covered car carriers equipped with hydraulic ramps and four-point wheel locking systems. Prior to dispatch in Dumka, our move supervisor conducts a detailed vehicle condition audit, recording odometer readings, tire tread depth, and pre-existing marks.
                    </p>
                    <p>
                        Bikes and scooters receive multi-layer wrapping with corrugated foam sheets and bubble wrap around handle mirrors, fuel tanks, and exhausts. Vehicles are lashed inside covered carriers and delivered directly to your Pune address in pristine condition.
                    </p>
                </div>
                <div>
                    <div class="dum2pun-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transport carrier loading from Dumka to Pune" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="dum2pun-section dum2pun-section-alt">
        <div class="dum2pun-container">
            <div class="dum2pun-sec-head">
                <span class="dum2pun-tag">Key Benefits</span>
                <h2>Why Families Choose Shree Ashirwad for Dumka to Pune Moves</h2>
                <p>Demonstrated interstate experience, verified personnel, and commitment to total customer satisfaction.</p>
            </div>

            <div class="dum2pun-grid-4">
                <div class="dum2pun-card">
                    <div class="dum2pun-card-icon">&#128737;</div>
                    <h3>Comprehensive Insurance</h3>
                    <p>Full transit risk protection through recognized national underwriters safeguarding your belongings against unexpected events.</p>
                </div>

                <div class="dum2pun-card">
                    <div class="dum2pun-card-icon">&#128666;</div>
                    <h3>Sealed Container Fleet</h3>
                    <p>All household goods travel inside weatherproof, locked steel containers that safeguard against rain, road grit, and pilferage.</p>
                </div>

                <div class="dum2pun-card">
                    <div class="dum2pun-card-icon">&#128205;</div>
                    <h3>GPS Highway Tracking</h3>
                    <p>Receive scheduled updates on your truck's highway progress as it crosses key interstate checkposts between Jharkhand and Maharashtra.</p>
                </div>

                <div class="dum2pun-card">
                    <div class="dum2pun-card-icon">&#128176;</div>
                    <h3>Fixed Written Estimates</h3>
                    <p>Zero hidden surprises. All packing costs, loading, unloading, highway tolls, and taxes are clearly specified in our upfront quotation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Unpacking and Setup Section -->
    <section class="dum2pun-section">
        <div class="dum2pun-container">
            <div class="dum2pun-grid-2">
                <div>
                    <div class="dum2blr-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and home setup service in Pune" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="dum2pun-tag">Full Destination Care</span>
                    <h2>Apartment Unloading, Unpacking & Setup Across Pune</h2>
                    <p>
                        Settling into gated townships in Wakad, Hinjawadi, Baner, or Kharadi can be taxing without professional assistance. Our destination delivery team in Pune takes care of every detail upon the truck's arrival.
                    </p>
                    <p>
                        We coordinate society gate passes, utilize service elevators, carefully bring each carton into your residence, and place heavy furniture exactly where you want it.
                    </p>
                    <p>
                        Our crew unboxes fragile crockery, reassembles beds and study tables, positions refrigerators and washing machines, and collects all discarded wrapping materials—leaving your new Pune home organized, functional, and ready to live in.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Localities Covered -->
    <section class="dum2pun-section dum2pun-section-alt">
        <div class="dum2pun-container">
            <div class="dum2pun-sec-head">
                <span class="dum2pun-tag">Coverage Sectors</span>
                <h2>Neighborhoods Covered Across Dumka & Pune</h2>
                <p>Prompt pickup throughout Santhal Pargana and guaranteed doorstep drop-off across the Pune metropolitan area.</p>
            </div>

            <div class="dum2pun-grid-2">
                <div class="dum2pun-card">
                    <h3>Pickup Locations in Dumka District</h3>
                    <p>
                        Rasikpur, Dudhani, Tinghar, Bandhdih, SP College Road, Dumka Court, Dangalpara, Gilanpara, Khajuria, Airport Road, Kathikund Road, Jama, Hansdiha Road, and Saraiyahat.
                    </p>
                </div>

                <div class="dum2pun-card">
                    <h3>Delivery Sectors Across Pune & PCMC</h3>
                    <p>
                        Hinjawadi (Phases 1-3), Wakad, Baner, Balewadi, Aundh, Kothrud, Bavdhan, Kharadi, Magarpatta City, Hadapsar, Viman Nagar, Kalyani Nagar, Koregaon Park, Pimpri, Chinchwad, Bhosari, and Chakan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section class="dum2pun-section">
        <div class="dum2pun-container">
            <div class="dum2pun-sec-head">
                <span class="dum2pun-tag">Common Inquiries</span>
                <h2>Frequently Asked Questions: Dumka to Pune Shifting</h2>
                <p>Key information regarding moving timelines, vehicle carriers, safety standards, and insurance.</p>
            </div>

            <div style="max-width: 880px; margin: 0 auto;">
                <div class="dum2pun-faq-item">
                    <h4>How long does transit take for household goods from Dumka to Pune?</h4>
                    <p>
                        The highway distance between Dumka and Pune is approximately 1,680 kilometers via NH-53 / NH-60. Full dedicated container trucks complete the journey in 4 to 5 days, whereas shared groupage consignments take roughly 6 to 7 days.
                    </p>
                </div>

                <div class="dum2pun-faq-item">
                    <h4>Do you deliver to IT hubs like Hinjawadi, Wakad, Baner, and Kharadi?</h4>
                    <p>
                        Yes, we provide direct residential delivery across all Pune IT corridors and residential townships, including Hinjawadi Phases 1 to 3, Wakad, Baner, Balewadi, Kharadi, Magarpatta City, Hadapsar, Viman Nagar, and Pimpri-Chinchwad (PCMC).
                    </p>
                </div>

                <div class="dum2pun-faq-item">
                    <h4>How do you protect delicate electronics and furniture across 1,680 km?</h4>
                    <p>
                        We deploy a specialized 5-layer protective packing standard incorporating anti-scratch stretch wrap, high-density air bubble wrap, heavy 5-ply corrugated cardboard sheets, edge guards, and waterproof outer sealing to absorb long-haul highway vibrations.
                    </p>
                </div>

                <div class="dum2pun-faq-item">
                    <h4>Can I ship my car and motorcycle together with household goods?</h4>
                    <p>
                        Yes, we operate dedicated enclosed car carrier trailers and custom two-wheeler lashing bays. We provide pre-transit vehicle inspection reports, tire locking, and comprehensive transit insurance for complete peace of mind.
                    </p>
                </div>

                <div class="dum2pun-faq-item">
                    <h4>Do you provide GST invoices suitable for corporate HR reimbursement?</h4>
                    <p>
                        Yes, our moving documentation is 100% compliant with corporate transfer guidelines. We provide official GST invoices, detailed itemized inventories, money receipts, and consignment notes accepted across all major IT companies and MNCs.
                    </p>
                </div>
            </div>

            <!-- Call to Action Banner -->
            <div class="dum2pun-cta-banner" id="dum2pun-quote">
                <h3>Ready to Relocate from Dumka to Pune?</h3>
                <p>
                    Get in touch with Shree Ashirwad Packers and Movers today for an instant free moving estimate. Experience professional, safe, and stress-free long-distance relocation with India's trusted moving partners.
                </p>
                <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                    <a href="tel:8409531615" class="dum2pun-btn-primary" style="background: #f59e0b; color: #0f172a;">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                        Call 8409531615
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20relocation%20from%20Dumka%20to%20Pune." class="dum2pun-btn-outline" target="_blank" rel="noopener noreferrer">
                        Chat on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
