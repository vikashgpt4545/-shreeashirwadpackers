<?php
/**
 * Page Name: Dumka to Delhi Packers and Movers
 * Route Slug: dumka-to-delhi-packers-and-movers
 * Description: Premier intercity relocation, household goods shifting, car carrier shipping, and bike courier from Dumka to Delhi NCR via NH-19 / Yamuna Expressway.
 * Focus Keywords: dumka to delhi packers and movers, packers and movers dumka to delhi, house shifting dumka to delhi, car transport dumka to delhi, bike parcel dumka to delhi, goods transport dumka to delhi ncr
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Dumka to Delhi Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Top-rated Dumka to Delhi packers and movers. 1,270 km transit via NH-19, 5-layer safety packaging, dedicated container trucks, car & bike shipping. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/dumka-to-delhi-packers-and-movers";
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

    <!-- Scoped CSS for Route 11 (Dumka to Delhi) -->
    <style>
        :root {
            --dum2del-primary: #1e3a5f;
            --dum2del-secondary: #0284c7;
            --dum2del-accent: #f59e0b;
            --dum2del-accent-light: #fef3c7;
            --dum2del-dark: #0f172a;
            --dum2del-gray-bg: #f8fafc;
            --dum2del-card-border: #e2e8f0;
            --dum2del-text: #334155;
            --dum2del-text-muted: #64748b;
            --dum2del-radius: 12px;
            --dum2del-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
            --dum2del-shadow-hover: 0 20px 30px -10px rgba(2, 132, 199, 0.18);
        }

        .dum2del-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.92) 0%, rgba(30, 58, 95, 0.88) 100%), url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 70px 20px 65px;
            position: relative;
        }

        .dum2del-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .dum2del-breadcrumbs {
            font-size: 0.9rem;
            color: #cbd5e1;
            margin-bottom: 20px;
        }

        .dum2del-breadcrumbs a {
            color: var(--dum2del-accent);
            text-decoration: none;
        }

        .dum2del-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(245, 158, 11, 0.18);
            border: 1px solid rgba(245, 158, 11, 0.5);
            color: var(--dum2del-accent);
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 0.88rem;
            font-weight: 600;
            margin-bottom: 18px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .dum2del-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            line-height: 1.25;
            font-weight: 800;
            margin-bottom: 18px;
            color: #ffffff;
        }

        .dum2del-hero p {
            font-size: 1.12rem;
            line-height: 1.7;
            max-width: 780px;
            color: #e2e8f0;
            margin-bottom: 28px;
        }

        .dum2del-hero-cta {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .dum2del-btn-primary {
            background: var(--dum2del-accent);
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

        .dum2del-btn-primary:hover {
            background: #d97706;
            transform: translateY(-2px);
            color: #ffffff;
        }

        .dum2del-btn-outline {
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

        .dum2del-btn-outline:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: #ffffff;
        }

        .dum2del-quick-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
            margin-top: 40px;
        }

        .dum2del-stat-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 18px 20px;
            border-radius: var(--dum2del-radius);
        }

        .dum2del-stat-num {
            font-family: 'Outfit', sans-serif;
            font-size: 1.85rem;
            font-weight: 800;
            color: var(--dum2del-accent);
            margin-bottom: 4px;
        }

        .dum2del-stat-lbl {
            font-size: 0.88rem;
            color: #cbd5e1;
        }

        .dum2del-section {
            padding: 60px 0;
        }

        .dum2del-section-alt {
            background-color: var(--dum2del-gray-bg);
        }

        .dum2del-sec-head {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 45px;
        }

        .dum2del-tag {
            display: inline-block;
            background: rgba(2, 132, 199, 0.1);
            color: var(--dum2del-secondary);
            font-size: 0.82rem;
            font-weight: 700;
            padding: 4px 14px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            margin-bottom: 12px;
        }

        .dum2del-sec-head h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            color: var(--dum2del-dark);
            font-weight: 800;
            line-height: 1.3;
            margin-bottom: 14px;
        }

        .dum2del-sec-head p {
            color: var(--dum2del-text-muted);
            font-size: 1.05rem;
            line-height: 1.65;
        }

        .dum2del-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 35px;
            align-items: center;
        }

        .dum2del-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .dum2del-grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .dum2del-card {
            background: #ffffff;
            border: 1px solid var(--dum2del-card-border);
            border-radius: var(--dum2del-radius);
            padding: 26px;
            box-shadow: var(--dum2del-shadow);
            transition: all 0.3s ease;
        }

        .dum2del-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--dum2del-shadow-hover);
            border-color: rgba(2, 132, 199, 0.3);
        }

        .dum2del-card-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: rgba(2, 132, 199, 0.12);
            color: var(--dum2del-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 18px;
        }

        .dum2del-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.3rem;
            color: var(--dum2del-dark);
            margin-bottom: 12px;
            font-weight: 700;
        }

        .dum2del-card p {
            color: var(--dum2del-text);
            font-size: 0.95rem;
            line-height: 1.65;
        }

        .dum2del-img-wrapper {
            border-radius: var(--dum2del-radius);
            overflow: hidden;
            box-shadow: var(--dum2del-shadow);
        }

        .dum2del-img-wrapper img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .dum2del-img-wrapper:hover img {
            transform: scale(1.03);
        }

        .dum2del-table-box {
            background: #ffffff;
            border-radius: var(--dum2del-radius);
            box-shadow: var(--dum2del-shadow);
            overflow: hidden;
            border: 1px solid var(--dum2del-card-border);
            margin: 25px 0;
        }

        .dum2del-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .dum2del-table th {
            background: var(--dum2del-primary);
            color: #ffffff;
            font-family: 'Outfit', sans-serif;
            padding: 16px 20px;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .dum2del-table td {
            padding: 14px 20px;
            border-bottom: 1px solid #f1f5f9;
            color: var(--dum2del-text);
            font-size: 0.94rem;
        }

        .dum2del-table tr:nth-child(even) {
            background: #f8fafc;
        }

        .dum2del-route-info-box {
            background: #eff6ff;
            border-left: 4px solid var(--dum2del-secondary);
            padding: 22px 24px;
            border-radius: 0 10px 10px 0;
            margin: 25px 0;
        }

        .dum2del-route-info-box h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            color: var(--dum2del-primary);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .dum2del-faq-item {
            background: #ffffff;
            border: 1px solid var(--dum2del-card-border);
            border-radius: var(--dum2del-radius);
            padding: 20px 24px;
            margin-bottom: 16px;
            box-shadow: var(--dum2del-shadow);
        }

        .dum2del-faq-item h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.12rem;
            color: var(--dum2del-dark);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .dum2del-faq-item p {
            color: var(--dum2del-text);
            font-size: 0.95rem;
            line-height: 1.65;
            margin: 0;
        }

        .dum2del-cta-banner {
            background: linear-gradient(135deg, #1e3a5f 0%, #0f172a 100%);
            border-radius: 16px;
            padding: 50px 30px;
            text-align: center;
            color: #ffffff;
            margin-top: 50px;
            box-shadow: 0 15px 30px rgba(15, 23, 42, 0.2);
        }

        .dum2del-cta-banner h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.1rem;
            font-weight: 800;
            margin-bottom: 14px;
        }

        .dum2del-cta-banner p {
            font-size: 1.05rem;
            max-width: 680px;
            margin: 0 auto 25px;
            color: #cbd5e1;
            line-height: 1.65;
        }

        @media (max-width: 768px) {
            .dum2del-hero h1 {
                font-size: 2.1rem;
            }
            .dum2del-grid-2 {
                grid-template-columns: 1fr;
            }
            .dum2del-table th, .dum2del-table td {
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
      "name": "Shree Ashirwad Packers and Movers Dumka to Delhi",
      "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
      "@id": "https://www.shreeashirwadpackers.com/#dumka-to-delhi-packers",
      "url": "https://www.shreeashirwadpackers.com/dumka-to-delhi-packers-and-movers",
      "telephone": "+91-8409531615",
      "priceRange": "INR 9,500 - 85,000",
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
          "name": "Delhi NCR, India"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Dumka to Delhi Relocation Services",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Household Relocation from Dumka to Delhi NCR"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Central Government and PSU Officer Relocation"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Enclosed Car Carrier Shipping via Yamuna Expressway"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Two-Wheeler Bike Courier to Delhi, Noida & Gurgaon"
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
          "name": "Dumka to Delhi Packers and Movers",
          "item": "https://www.shreeashirwadpackers.com/dumka-to-delhi-packers-and-movers"
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
          "name": "How long does household transit take from Dumka to Delhi NCR?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The highway distance between Dumka and Delhi is roughly 1,270 kilometers via NH-114A, NH-19, and the Yamuna Expressway. Dedicated full-truck loads reach destination in 3 to 4 days, while shared container groupage consignments take approximately 5 to 7 days."
          }
        },
        {
          "@type": "Question",
          "name": "Do you offer doorstep delivery across Noida, Gurgaon, and Faridabad?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we provide end-to-end delivery throughout the entire National Capital Region (NCR), including Delhi South/West/North, Noida, Greater Noida, Gurgaon (Gurugram), Faridabad, and Ghaziabad."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide genuine GST bills for defense or government transfer claims?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Absolutely. We supply 100% compliant GST invoices, detailed itemized inventories, money receipts, and consignment notes meeting all Ministry, Defense, Bank, and Central Government reimbursement standards."
          }
        },
        {
          "@type": "Question",
          "name": "How do you protect delicate electronics and furniture across 1,270 km?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For long-haul transit across 1,270 kilometers, we implement reinforced 5-layer industrial packaging with air-bubble cushioning, edge guards, heavy-duty 5-ply corrugated sheets, moisture-barrier stretch wrap, and wooden crating for large glass tables and OLED TVs."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost of shipping a car from Dumka to Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Car transportation inside specialized covered carriers from Dumka to Delhi NCR generally costs between INR 14,000 and 22,000 depending on whether the vehicle is a hatchback, compact sedan, or large SUV, including transit insurance coverage."
          }
        }
      ]
    }
    </script>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <!-- Hero Section -->
    <header class="dum2del-hero">
        <div class="dum2del-container">
            <nav class="dum2del-breadcrumbs" aria-label="breadcrumb">
                <a href="<?php echo SITE_BASE_URL; ?>/">Home</a> &raquo; 
                <a href="<?php echo SITE_BASE_URL; ?>/services">Intercity Routes</a> &raquo; 
                <span>Dumka to Delhi</span>
            </nav>
            <div class="dum2del-hero-badge">&#10004; Dedicated Interstate Express Corridor</div>
            <h1>Premium Dumka to Delhi Packers and Movers</h1>
            <p>
                Professional long-distance relocation from Dumka (Jharkhand) to Delhi NCR via NH-19 and the Agra-Lucknow / Yamuna Expressway. We deliver complete home shifting, corporate relocations, defense and central government transfer claims, enclosed car transport, and bike parcel delivery with full transit insurance.
            </p>
            <div class="dum2del-hero-cta">
                <a href="tel:8409531615" class="dum2del-btn-primary">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                    Call: 8409531615
                </a>
                <a href="#dum2del-quote" class="dum2del-btn-outline">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Request Free Estimate
                </a>
            </div>

            <div class="dum2del-quick-stats">
                <div class="dum2del-stat-card">
                    <div class="dum2del-stat-num">1,270 KM</div>
                    <div class="dum2del-stat-lbl">Highway Distance via NH-19</div>
                </div>
                <div class="dum2del-stat-card">
                    <div class="dum2del-stat-num">3-4 Days</div>
                    <div class="dum2del-stat-lbl">Direct Full Truck Transit</div>
                </div>
                <div class="dum2del-stat-card">
                    <div class="dum2del-stat-num">100% Safe</div>
                    <div class="dum2del-stat-lbl">Waterproof Container Fleet</div>
                </div>
                <div class="dum2del-stat-card">
                    <div class="dum2del-stat-num">GST Approved</div>
                    <div class="dum2del-stat-lbl">Government & Corporate Claims</div>
                </div>
            </div>
        </div>
    </header>

    <!-- Overview Section -->
    <section class="dum2del-section">
        <div class="dum2del-container">
            <div class="dum2del-grid-2">
                <div>
                    <span class="dum2del-tag">Elite Long-Distance Shifting</span>
                    <h2>Seamless Interstate Moving from Dumka to National Capital Region</h2>
                    <p>
                        Relocating over 1,270 kilometers from the quiet administrative and cultural center of Dumka to the bustling metropolitan expanse of Delhi NCR demands seasoned logistics management, heavy-duty packing, and dependable containerized vehicles. Dumka residents relocating to the national capital include central government officers on transfer, IT and corporate professionals, medical specialists, university academicians, and students moving into Delhi, Noida, or Gurgaon.
                    </p>
                    <p>
                        At Shree Ashirwad Packers and Movers, we eliminate the stress of long-haul interstate relocation. Our experienced packing teams arrive at your home in Dumka—whether in Rasikpur, Dudhani, Tinghar, Bandhdih, or SP College Road—equipped with high-grade multi-layer packaging supplies, specialized furniture handling tools, and numbered inventory tags.
                    </p>
                    <p>
                        From systematic disassembling of modular beds and wardrobes to vacuum sealing soft goods and multi-layer shockproof boxing of high-end electronics, we prepare your consignment to easily withstand thousands of kilometers of highway vibration. With GPS-tracked container trucks and dedicated relocation managers, your move to Delhi is completely smooth and predictable.
                    </p>
                </div>
                <div>
                    <div class="dum2del-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe transit container truck for Dumka to Delhi relocation" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Highlights -->
    <section class="dum2del-section dum2del-section-alt">
        <div class="dum2del-container">
            <div class="dum2del-sec-head">
                <span class="dum2del-tag">Specialized Moving Services</span>
                <h2>End-to-End Solutions for Dumka to Delhi Relocation</h2>
                <p>Comprehensive shifting services tailored for residential, defense, corporate, and automotive long-distance requirements.</p>
            </div>

            <div class="dum2del-grid-3">
                <div class="dum2del-card">
                    <div class="dum2del-card-icon">&#127968;</div>
                    <h3>Full Household Relocation</h3>
                    <p>
                        Complete home shifting from 1 BHK to luxury bungalows. Our team handles dismantling, shockproof wrapping, heavy-duty corrugated boxing, secure truck loading, and doorstep delivery across all sectors of Delhi NCR.
                    </p>
                </div>

                <div class="dum2del-card">
                    <div class="dum2del-card-icon">&#127970;</div>
                    <h3>Defense & Central Govt Moves</h3>
                    <p>
                        Complete documentation support for officers transferring between Jharkhand and New Delhi ministries. We supply 100% compliant GST invoices, detailed item inventories, and carrier receipts for timely departmental reimbursement.
                    </p>
                </div>

                <div class="dum2del-card">
                    <div class="dum2del-card-icon">&#128663;</div>
                    <h3>Covered Car Carrier Transit</h3>
                    <p>
                        Safely transport your sedan, hatchback, or luxury SUV from Dumka to Delhi inside fully enclosed car carriers. Features include hydraulic ramps, four-point wheel locking, bumper guards, and bumper-to-bumper transit insurance.
                    </p>
                </div>

                <div class="dum2del-card">
                    <div class="dum2del-card-icon">&#127949;</div>
                    <h3>Two-Wheeler Bike Parcel</h3>
                    <p>
                        Courier your motorcycle or scooter safely to Delhi NCR. We drain fuel to compliant levels, disconnect batteries, wrap headlights and mirrors in thick bubble wrap, and lash bikes securely inside our covered carriers.
                    </p>
                </div>

                <div class="dum2del-card">
                    <div class="dum2del-card-icon">&#128188;</div>
                    <h3>Corporate Office & Tech Moves</h3>
                    <p>
                        Relocating workstation setups, servers, executive desks, and confidential records. We use static-shield wrap, numbered crate seals, and express container routing to minimize corporate downtime.
                    </p>
                </div>

                <div class="dum2del-card">
                    <div class="dum2del-card-icon">&#128230;</div>
                    <h3>Part Load / Shared Groupage</h3>
                    <p>
                        Moving only a few luggage boxes, a study desk, or minimal appliances? Save money with our shared container groupage service from Dumka to Delhi, with individual barcode labeling and guaranteed delivery.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Packaging Standard Section -->
    <section class="dum2del-section">
        <div class="dum2del-container">
            <div class="dum2del-grid-2">
                <div>
                    <div class="dum2del-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="5 layer packing process for Dumka to Delhi household shifting" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="dum2del-tag">Heavy-Duty Packaging</span>
                    <h2>Engineered 5-Layer Packaging for 1,270 KM Interstate Transit</h2>
                    <p>
                        A cross-country transit spanning over 1,200 kilometers across Jharkhand, Bihar, Uttar Pradesh, and Delhi NCR involves variable highway surfaces, temperature shifts, and highway vibrations. To ensure zero scratches, dents, or dust accumulation, Shree Ashirwad enforces an exacting 5-layer packing standard:
                    </p>
                    <ul style="color: var(--dum2del-text); line-height: 1.8; padding-left: 20px; margin-bottom: 20px;">
                        <li><strong>Layer 1 (Scratch Protection):</strong> Non-static stretch film applied to polished wood, glass fronts, and metal appliances to block fine highway dust and moisture.</li>
                        <li><strong>Layer 2 (Impact Cushioning):</strong> Premium multi-ply air-bubble wrap enveloping LED screens, fragile glassware, bone china, kitchen appliances, and artwork.</li>
                        <li><strong>Layer 3 (Rigid Protection):</strong> Dense 5-ply corrugated cardboard sheets wrapped tightly around furniture corners, table edges, mattresses, and armchairs.</li>
                        <li><strong>Layer 4 (Structural Edge Armor):</strong> Hardened edge protectors on all corners and delicate profiles to protect against shifting inside the truck during highway transit.</li>
                        <li><strong>Layer 5 (Sealing & Strapping):</strong> Waterproof polyolefin outer wraps sealed with heavy-duty reinforced cross-weave tape and tension bands for a weatherproof barrier.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Table Section -->
    <section class="dum2del-section dum2del-section-alt">
        <div class="dum2del-container">
            <div class="dum2del-sec-head">
                <span class="dum2del-tag">Tariff Guidelines</span>
                <h2>Dumka to Delhi Relocation Cost Estimates</h2>
                <p>Honest, upfront pricing with no hidden charges, toll markups, or unexpected delivery surcharges. Get a customized quote today.</p>
            </div>

            <div class="dum2del-table-box">
                <table class="dum2del-table">
                    <thead>
                        <tr>
                            <th>Relocation Type / Home Size</th>
                            <th>Packaging Standard</th>
                            <th>Handling & Crew</th>
                            <th>Transit Timeline</th>
                            <th>Estimated Pricing (INR)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>1 BHK Apartment / Studio</strong></td>
                            <td>3-Layer Corrugated + Bubble</td>
                            <td>3 Packers + Loading</td>
                            <td>3 - 4 Days</td>
                            <td>&#8377; 16,500 - &#8377; 26,000</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Flat / Regular Home</strong></td>
                            <td>5-Layer Shockproof Armor</td>
                            <td>4 Packers + Loading</td>
                            <td>3 - 4 Days</td>
                            <td>&#8377; 24,000 - &#8377; 38,000</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK / Large Residential House</strong></td>
                            <td>Premium 5-Layer + Crating</td>
                            <td>5 Packers + Loading</td>
                            <td>3 - 5 Days</td>
                            <td>&#8377; 35,000 - &#8377; 55,000</td>
                        </tr>
                        <tr>
                            <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                            <td>Corrugated Foam + Heavy Bubble</td>
                            <td>Lashing & Roll-on Loading</td>
                            <td>4 - 5 Days</td>
                            <td>&#8377; 4,500 - &#8377; 7,500</td>
                        </tr>
                        <tr>
                            <td><strong>Motor Car (Hatchback / Sedan)</strong></td>
                            <td>Enclosed Auto Carrier Trailer</td>
                            <td>Wheel Locks & Transit Cover</td>
                            <td>3 - 4 Days</td>
                            <td>&#8377; 14,000 - &#8377; 19,000</td>
                        </tr>
                        <tr>
                            <td><strong>SUV / Luxury Automobile</strong></td>
                            <td>Specialized Covered Transporter</td>
                            <td>Hydraulic Loading + Insurance</td>
                            <td>3 - 4 Days</td>
                            <td>&#8377; 17,500 - &#8377; 24,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="dum2del-route-info-box">
                <h4>Route Blueprint: NH-19 & Expressway Interstate Corridor</h4>
                <p>
                    <strong>Highway Routing:</strong> Dumka &rarr; Deoghar &rarr; Jasidih &rarr; Chakai &rarr; Jamui / Nawada &rarr; NH-19 (Grand Trunk Corridor via Varanasi, Prayagraj, Kanpur) &rarr; Agra-Lucknow Expressway / Yamuna Expressway &rarr; Greater Noida &rarr; Delhi NCR. Total distance is approximately 1,270 km. Our dedicated long-haul container trucks utilize fast-tag toll lanes and dual-driver shifts to guarantee safe, swift delivery.
                </p>
            </div>
        </div>
    </section>

    <!-- Vehicle Transport Section -->
    <section class="dum2del-section">
        <div class="dum2del-container">
            <div class="dum2del-grid-2">
                <div>
                    <span class="dum2del-tag">Automotive Logistics</span>
                    <h2>Specialized Car & Two-Wheeler Transport: Dumka to Delhi</h2>
                    <p>
                        Driving 1,270 kilometers across several state borders on high-speed expressways is exhausting, causes heavy wear and tear on your vehicle, and exposes your car to highway hazards. Shree Ashirwad Packers and Movers provides a safe, economical alternative with specialized vehicle carrier trucks.
                    </p>
                    <p>
                        Our covered car haulers protect your sedan, hatchback, or SUV from stone chips, rain, and road debris. Each car is securely anchored using high-tensile wheel lashing straps on all four wheels to prevent movement. Before loading in Dumka, our supervisor conducts a detailed physical inspection, recording odometer reading, body conditions, and fuel levels on an authorized Vehicle Inspection Report.
                    </p>
                    <p>
                        Two-wheelers are wrapped with dual-layer bubble insulation, heavy corrugated sheets around headlights and handlebars, and transported upright in locked containers. Door-to-door delivery is provided across Delhi, Noida, Greater Noida, and Gurgaon.
                    </p>
                </div>
                <div>
                    <div class="dum2del-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transport carrier loading from Dumka to Delhi" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="dum2del-section dum2del-section-alt">
        <div class="dum2del-container">
            <div class="dum2del-sec-head">
                <span class="dum2del-tag">The Ashirwad Advantage</span>
                <h2>Why Families Choose Us for Dumka to Delhi Relocation</h2>
                <p>Over a decade of trusted interstate relocation experience, verified drivers, and transparent business ethics.</p>
            </div>

            <div class="dum2del-grid-4">
                <div class="dum2del-card">
                    <div class="dum2del-card-icon">&#128737;</div>
                    <h3>Full Transit Insurance</h3>
                    <p>Comprehensive transit policy through recognized national insurers protects your valuable goods against any unforeseen highway eventualities.</p>
                </div>

                <div class="dum2del-card">
                    <div class="dum2del-card-icon">&#128666;</div>
                    <h3>Sealed Container Trucks</h3>
                    <p>We transport your household effects in fully enclosed, weatherproof steel containers that protect against rainwater, road dust, and unauthorized access.</p>
                </div>

                <div class="dum2del-card">
                    <div class="dum2del-card-icon">&#128205;</div>
                    <h3>GPS Tracking & Daily Updates</h3>
                    <p>Stay informed throughout the 1,270 km journey with daily tracking checkpoints and proactive phone updates from your assigned move coordinator.</p>
                </div>

                <div class="dum2del-card">
                    <div class="dum2del-card-icon">&#128176;</div>
                    <h3>All-Inclusive Estimates</h3>
                    <p>Written, legally binding quotations clearly outlining packaging materials, labor costs, transit charges, and toll taxes with no unexpected surprises.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Unpacking and Setup Section -->
    <section class="dum2del-section">
        <div class="dum2del-container">
            <div class="dum2del-grid-2">
                <div>
                    <div class="dum2del-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and home setup service in Delhi NCR" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="dum2del-tag">Destination Ease</span>
                    <h2>Doorstep Unloading, Unpacking & Setup Across Delhi NCR</h2>
                    <p>
                        Arriving in Delhi NCR and settling into high-rise societies in Noida, Gurgaon, or central Delhi can be overwhelming after a cross-country move. Shree Ashirwad Packers and Movers takes care of the final mile so you can settle in comfortably.
                    </p>
                    <p>
                        Our destination partner team meets the container truck directly at your residential tower in Delhi NCR, coordinates with society management for service elevator usage, and carefully carries every single carton into your apartment.
                    </p>
                    <p>
                        We assemble beds, place wardrobes and dining tables, unpack fragile crockery, position large home appliances, and clear away all plastic waste, cardboard scraps, and strapping debris—letting you begin your new chapter in Delhi without clutter or exhaustion.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Localities Covered -->
    <section class="dum2del-section dum2del-section-alt">
        <div class="dum2del-container">
            <div class="dum2del-sec-head">
                <span class="dum2del-tag">Area Coverage</span>
                <h2>Complete Coverage: Dumka to Every Delhi NCR Sector</h2>
                <p>Prompt pickup across Santhal Pargana and guaranteed doorstep drop-off across the National Capital Region.</p>
            </div>

            <div class="dum2del-grid-2">
                <div class="dum2del-card">
                    <h3>Pickup Coverage in Dumka District</h3>
                    <p>
                        Rasikpur, Dudhani, Tinghar, Bandhdih, SP College Road, Dumka Court, Dangalpara, Gilanpara, Khajuria, Airport Road, Kathikund Road, Jama, Hansdiha Road, and Saraiyahat.
                    </p>
                </div>

                <div class="dum2del-card">
                    <h3>Delivery Sectors Across Delhi NCR</h3>
                    <p>
                        South Delhi (Hauz Khas, Saket, Vasant Kunj), West Delhi (Dwarka, Janakpuri, Punjabi Bagh), East Delhi (Mayur Vihar, Laxmi Nagar), North Delhi (Rohini, Pitampura), Noida (Sectors 15 to 150), Greater Noida, Gurgaon (DLF Phase 1-5, Cyber City, Sohna Road), Faridabad, and Ghaziabad (Indirapuram, Vaishali).
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section class="dum2del-section">
        <div class="dum2del-container">
            <div class="dum2del-sec-head">
                <span class="dum2del-tag">Got Questions?</span>
                <h2>Frequently Asked Questions: Dumka to Delhi Shifting</h2>
                <p>Learn more about interstate logistics, payment safety, and insurance coverage.</p>
            </div>

            <div style="max-width: 880px; margin: 0 auto;">
                <div class="dum2del-faq-item">
                    <h4>How long does household transit take from Dumka to Delhi NCR?</h4>
                    <p>
                        The highway distance between Dumka and Delhi is roughly 1,270 kilometers via NH-114A, NH-19, and the Yamuna Expressway. Dedicated full-truck loads reach destination in 3 to 4 days, while shared container groupage consignments take approximately 5 to 7 days.
                    </p>
                </div>

                <div class="dum2del-faq-item">
                    <h4>Do you offer doorstep delivery across Noida, Gurgaon, and Faridabad?</h4>
                    <p>
                        Yes, we provide end-to-end delivery throughout the entire National Capital Region (NCR), including Delhi South/West/North, Noida, Greater Noida, Gurgaon (Gurugram), Faridabad, and Ghaziabad.
                    </p>
                </div>

                <div class="dum2del-faq-item">
                    <h4>Do you provide genuine GST bills for defense or government transfer claims?</h4>
                    <p>
                        Absolutely. We supply 100% compliant GST invoices, detailed itemized inventories, money receipts, and consignment notes meeting all Ministry, Defense, Bank, and Central Government reimbursement standards.
                    </p>
                </div>

                <div class="dum2del-faq-item">
                    <h4>How do you protect delicate electronics and furniture across 1,270 km?</h4>
                    <p>
                        For long-haul transit across 1,270 kilometers, we implement reinforced 5-layer industrial packaging with air-bubble cushioning, edge guards, heavy-duty 5-ply corrugated sheets, moisture-barrier stretch wrap, and wooden crating for large glass tables and OLED TVs.
                    </p>
                </div>

                <div class="dum2del-faq-item">
                    <h4>What is the cost of shipping a car from Dumka to Delhi?</h4>
                    <p>
                        Car transportation inside specialized covered carriers from Dumka to Delhi NCR generally costs between INR 14,000 and 22,000 depending on whether the vehicle is a hatchback, compact sedan, or large SUV, including transit insurance coverage.
                    </p>
                </div>
            </div>

            <!-- Call to Action Banner -->
            <div class="dum2del-cta-banner" id="dum2del-quote">
                <h3>Ready to Move from Dumka to Delhi NCR?</h3>
                <p>
                    Get in touch with Shree Ashirwad Packers and Movers today for an instant free moving estimate. Experience professional, safe, and stress-free interstate relocation with Jharkhand's most trusted logistics partner.
                </p>
                <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                    <a href="tel:8409531615" class="dum2del-btn-primary" style="background: #f59e0b; color: #0f172a;">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                        Call 8409531615
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20relocation%20from%20Dumka%20to%20Delhi." class="dum2del-btn-outline" target="_blank" rel="noopener noreferrer">
                        Chat on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
