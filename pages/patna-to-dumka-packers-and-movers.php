<?php
/**
 * Page Name: Patna to Dumka Packers and Movers
 * Route Slug: patna-to-dumka-packers-and-movers
 * Description: Dedicated intercity relocation, household goods shifting, Bihar-Jharkhand government transfer moves, and car/bike carrier from Patna to Dumka via Jamui and Deoghar.
 * Focus Keywords: patna to dumka packers and movers, packers and movers patna to dumka, house shifting patna to dumka, car transport patna to dumka, bike parcel patna to dumka, bihar jharkhand goods transport
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Patna to Dumka Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Fast & safe Patna to Dumka packers and movers. 260 km transit, same-day delivery, 5-layer packing, Bihar-Jharkhand transfer billing, car & bike shipping. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/patna-to-dumka-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="patna to dumka packers and movers, packers and movers patna to dumka, house shifting patna to dumka, car transport patna to dumka, bike parcel patna to dumka, bihar jharkhand goods transport">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-BR">
    <meta name="geo.placename" content="Patna">

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

    <!-- Scoped CSS for Route 17 (Patna to Dumka) -->
    <style>
        :root {
            --pat2dum-primary: #1e3a5f;
            --pat2dum-secondary: #0284c7;
            --pat2dum-accent: #f59e0b;
            --pat2dum-accent-light: #fef3c7;
            --pat2dum-dark: #0f172a;
            --pat2dum-gray-bg: #f8fafc;
            --pat2dum-card-border: #e2e8f0;
            --pat2dum-text: #334155;
            --pat2dum-text-muted: #64748b;
            --pat2dum-radius: 12px;
            --pat2dum-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
            --pat2dum-shadow-hover: 0 20px 30px -10px rgba(2, 132, 199, 0.18);
        }

        .pat2dum-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.92) 0%, rgba(30, 58, 95, 0.88) 100%), url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 70px 20px 65px;
            position: relative;
        }

        .pat2dum-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .pat2dum-breadcrumbs {
            font-size: 0.9rem;
            color: #cbd5e1;
            margin-bottom: 20px;
        }

        .pat2dum-breadcrumbs a {
            color: var(--pat2dum-accent);
            text-decoration: none;
        }

        .pat2dum-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(245, 158, 11, 0.18);
            border: 1px solid rgba(245, 158, 11, 0.5);
            color: var(--pat2dum-accent);
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 0.88rem;
            font-weight: 600;
            margin-bottom: 18px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .pat2dum-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            line-height: 1.25;
            font-weight: 800;
            margin-bottom: 18px;
            color: #ffffff;
        }

        .pat2dum-hero p {
            font-size: 1.12rem;
            line-height: 1.7;
            max-width: 780px;
            color: #e2e8f0;
            margin-bottom: 28px;
        }

        .pat2dum-hero-cta {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .pat2dum-btn-primary {
            background: var(--pat2dum-accent);
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

        .pat2dum-btn-primary:hover {
            background: #d97706;
            transform: translateY(-2px);
            color: #ffffff;
        }

        .pat2dum-btn-outline {
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

        .pat2dum-btn-outline:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: #ffffff;
        }

        .pat2dum-quick-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
            margin-top: 40px;
        }

        .pat2dum-stat-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 18px 20px;
            border-radius: var(--pat2dum-radius);
        }

        .pat2dum-stat-num {
            font-family: 'Outfit', sans-serif;
            font-size: 1.85rem;
            font-weight: 800;
            color: var(--pat2dum-accent);
            margin-bottom: 4px;
        }

        .pat2dum-stat-lbl {
            font-size: 0.88rem;
            color: #cbd5e1;
        }

        .pat2dum-section {
            padding: 60px 0;
        }

        .pat2dum-section-alt {
            background-color: var(--pat2dum-gray-bg);
        }

        .pat2dum-sec-head {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 45px;
        }

        .pat2dum-tag {
            display: inline-block;
            background: rgba(2, 132, 199, 0.1);
            color: var(--pat2dum-secondary);
            font-size: 0.82rem;
            font-weight: 700;
            padding: 4px 14px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            margin-bottom: 12px;
        }

        .pat2dum-sec-head h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            color: var(--pat2dum-dark);
            font-weight: 800;
            line-height: 1.3;
            margin-bottom: 14px;
        }

        .pat2dum-sec-head p {
            color: var(--pat2dum-text-muted);
            font-size: 1.05rem;
            line-height: 1.65;
        }

        .pat2dum-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 35px;
            align-items: center;
        }

        .pat2dum-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .pat2dum-grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .pat2dum-card {
            background: #ffffff;
            border: 1px solid var(--pat2dum-card-border);
            border-radius: var(--pat2dum-radius);
            padding: 26px;
            box-shadow: var(--pat2dum-shadow);
            transition: all 0.3s ease;
        }

        .pat2dum-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--pat2dum-shadow-hover);
            border-color: rgba(2, 132, 199, 0.3);
        }

        .pat2dum-card-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: rgba(2, 132, 199, 0.12);
            color: var(--pat2dum-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 18px;
        }

        .pat2dum-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.3rem;
            color: var(--pat2dum-dark);
            margin-bottom: 12px;
            font-weight: 700;
        }

        .pat2dum-card p {
            color: var(--pat2dum-text);
            font-size: 0.95rem;
            line-height: 1.65;
        }

        .pat2dum-img-wrapper {
            border-radius: var(--pat2dum-radius);
            overflow: hidden;
            box-shadow: var(--pat2dum-shadow);
        }

        .pat2dum-img-wrapper img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .pat2dum-img-wrapper:hover img {
            transform: scale(1.03);
        }

        .pat2dum-table-box {
            background: #ffffff;
            border-radius: var(--pat2dum-radius);
            box-shadow: var(--pat2dum-shadow);
            overflow: hidden;
            border: 1px solid var(--pat2dum-card-border);
            margin: 25px 0;
        }

        .pat2dum-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .pat2dum-table th {
            background: var(--pat2dum-primary);
            color: #ffffff;
            font-family: 'Outfit', sans-serif;
            padding: 16px 20px;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .pat2dum-table td {
            padding: 14px 20px;
            border-bottom: 1px solid #f1f5f9;
            color: var(--pat2dum-text);
            font-size: 0.94rem;
        }

        .pat2dum-table tr:nth-child(even) {
            background: #f8fafc;
        }

        .pat2dum-route-info-box {
            background: #eff6ff;
            border-left: 4px solid var(--pat2dum-secondary);
            padding: 22px 24px;
            border-radius: 0 10px 10px 0;
            margin: 25px 0;
        }

        .pat2dum-route-info-box h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            color: var(--pat2dum-primary);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .pat2dum-faq-item {
            background: #ffffff;
            border: 1px solid var(--pat2dum-card-border);
            border-radius: var(--pat2dum-radius);
            padding: 20px 24px;
            margin-bottom: 16px;
            box-shadow: var(--pat2dum-shadow);
        }

        .pat2dum-faq-item h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.12rem;
            color: var(--pat2dum-dark);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .pat2dum-faq-item p {
            color: var(--pat2dum-text);
            font-size: 0.95rem;
            line-height: 1.65;
            margin: 0;
        }

        .pat2dum-cta-banner {
            background: linear-gradient(135deg, #1e3a5f 0%, #0f172a 100%);
            border-radius: 16px;
            padding: 50px 30px;
            text-align: center;
            color: #ffffff;
            margin-top: 50px;
            box-shadow: 0 15px 30px rgba(15, 23, 42, 0.2);
        }

        .pat2dum-cta-banner h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.1rem;
            font-weight: 800;
            margin-bottom: 14px;
        }

        .pat2dum-cta-banner p {
            font-size: 1.05rem;
            max-width: 680px;
            margin: 0 auto 25px;
            color: #cbd5e1;
            line-height: 1.65;
        }

        @media (max-width: 768px) {
            .pat2dum-hero h1 {
                font-size: 2.1rem;
            }
            .pat2dum-grid-2 {
                grid-template-columns: 1fr;
            }
            .pat2dum-table th, .pat2dum-table td {
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
      "name": "Shree Ashirwad Packers and Movers Patna to Dumka",
      "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
      "@id": "https://www.shreeashirwadpackers.com/#patna-to-dumka-packers",
      "url": "https://www.shreeashirwadpackers.com/patna-to-dumka-packers-and-movers",
      "telephone": "+91-8409531615",
      "priceRange": "INR 8,000 - 60,000",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Boring Canal Road, Near Panchmukhi Mandir",
        "addressLocality": "Patna",
        "addressRegion": "Bihar",
        "postalCode": "800001",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 25.5941,
        "longitude": 85.1376
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
      "serviceType": "Interstate Relocation and Cargo Transportation",
      "provider": {
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers",
        "telephone": "+91-8409531615",
        "url": "https://www.shreeashirwadpackers.com"
      },
      "areaServed": [
        {
          "@type": "AdministrativeArea",
          "name": "Patna, Bihar"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Dumka, Jharkhand"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Patna to Dumka Relocation Services",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Household Relocation from Patna to Dumka"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "State Government and Bank Officer Relocation"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Enclosed Car Carrier Shipping from Patna to Dumka"
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
          "name": "Patna to Dumka Packers and Movers",
          "item": "https://www.shreeashirwadpackers.com/patna-to-dumka-packers-and-movers"
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
          "name": "What is the typical transit duration from Patna to Dumka?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The highway distance between Patna and Dumka is approximately 260 kilometers via NH-33, Mokama, Lakhisarai, Jamui, Chakai, and Deoghar. Our dedicated container trucks complete the transit in roughly 6 to 8 hours, guaranteeing same-day delivery."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide pickup from Boring Road, Kankarbagh, and Bailey Road in Patna?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we handle complete doorstep packaging and pickup across every Patna neighborhood, including Boring Road, Kankarbagh, Bailey Road, Danapur, Patliputra Colony, Rajendra Nagar, Anisabad, Ashiana Nagar, and Exhibition Road."
          }
        },
        {
          "@type": "Question",
          "name": "Do you supply GST invoices for Bihar-Jharkhand government transfer claims?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we provide 100% compliant GST invoices, detailed item inventories, money receipts, and consignment notes meeting all state administrative, judicial, railway, and bank reimbursement standards."
          }
        },
        {
          "@type": "Question",
          "name": "How are fragile furniture and electronics safeguarded on the Jamui-Deoghar stretch?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We implement a strict 5-tier packaging protocol utilizing virgin bubble wrap, heavy corrugated sheets, high-density edge corner protectors, stretch film wrapping, and reinforced adhesive sealing to prevent road shock absorption."
          }
        },
        {
          "@type": "Question",
          "name": "What is the approximate cost of moving a 2 BHK apartment from Patna to Dumka?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A standard 2 BHK household relocation from Patna to Dumka typically ranges between INR 13,500 and 21,000 depending on volume, floor levels, packing material tier, and elevator accessibility at both locations."
          }
        }
      ]
    }
    </script>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <!-- Hero Section -->
    <header class="pat2dum-hero">
        <div class="pat2dum-container">
            <nav class="pat2dum-breadcrumbs" aria-label="breadcrumb">
                <a href="<?php echo SITE_BASE_URL; ?>/">Home</a> &raquo; 
                <a href="<?php echo SITE_BASE_URL; ?>/services">Intercity Routes</a> &raquo; 
                <span>Patna to Dumka</span>
            </nav>
            <div class="pat2dum-hero-badge">&#10004; Verified Bihar to Jharkhand Express Corridor</div>
            <h1>Reliable Patna to Dumka Packers and Movers</h1>
            <p>
                Experience seamless, professional relocation from Bihar’s capital (Patna) to Dumka via Jamui, Chakai, and Deoghar. We provide complete household shifting, government employee transfers, enclosed car carrier transit, and bike courier with guaranteed same-day delivery.
            </p>
            <div class="pat2dum-hero-cta">
                <a href="tel:8409531615" class="pat2dum-btn-primary">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                    Call: 8409531615
                </a>
                <a href="#pat2dum-quote" class="pat2dum-btn-outline">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Request Free Estimate
                </a>
            </div>

            <div class="pat2dum-quick-stats">
                <div class="pat2dum-stat-card">
                    <div class="pat2dum-stat-num">260 KM</div>
                    <div class="pat2dum-stat-lbl">Transit Distance via Jamui & Deoghar</div>
                </div>
                <div class="pat2dum-stat-card">
                    <div class="pat2dum-stat-num">6-8 Hrs</div>
                    <div class="pat2dum-stat-lbl">Guaranteed Same-Day Transit</div>
                </div>
                <div class="pat2dum-stat-card">
                    <div class="pat2dum-stat-num">100% Safe</div>
                    <div class="pat2dum-stat-lbl">Sealed Container Carrier Fleet</div>
                </div>
                <div class="pat2dum-stat-card">
                    <div class="pat2dum-stat-num">GST Approved</div>
                    <div class="pat2dum-stat-lbl">Bihar & Jharkhand Govt Claims</div>
                </div>
            </div>
        </div>
    </header>

    <!-- Overview Section -->
    <section class="pat2dum-section">
        <div class="pat2dum-container">
            <div class="pat2dum-grid-2">
                <div>
                    <span class="pat2dum-tag">Trusted Interstate Relocation</span>
                    <h2>Comprehensive Shifting from Patna to Dumka Administrative Hub</h2>
                    <p>
                        The interstate connection between Patna in Bihar and Dumka in Jharkhand spans approximately 260 kilometers, traversing through Bakhtiyarpur, Mokama, Lakhisarai, Jamui, Chakai, and Deoghar along NH-33 and NH-333A. Patna is the political, educational, and commercial center of Bihar, while Dumka serves as the administrative sub-capital of Jharkhand, hosting the Santhal Pargana Divisional Commissionerate, judicial institutions, engineering colleges, and regional offices.
                    </p>
                    <p>
                        Families and professionals relocating along this route include state civil service officers, judicial magistrates, banking staff, professors, medical practitioners, and business families returning to their hometowns in Santhal Pargana. Shree Ashirwad Packers and Movers brings specialized expertise in Bihar-Jharkhand interstate transit, ensuring timely, safe, and stress-free execution.
                    </p>
                    <p>
                        Our permanent, skilled packing crews arrive directly at your Patna premises—whether located in high-rise societies in Bailey Road and Danapur, residential quarters in Boring Road and Patliputra, or bustling neighborhoods in Kankarbagh and Rajendra Nagar. We dismantle modular furniture, pack fragile china and appliances, load into closed container carriers, and deliver safely to your Dumka address on the very same day.
                    </p>
                    <p>
                        In addition, our logistics coordinators ensure hassle-free transit across state borders, adhering to commercial transport regulations, providing stamped e-way bills, and organizing swift unloading and room-by-room setup in Dumka.
                    </p>
                </div>
                <div>
                    <div class="pat2dum-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe transit container truck for Patna to Dumka relocation" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Highlights -->
    <section class="pat2dum-section pat2dum-section-alt">
        <div class="pat2dum-container">
            <div class="pat2dum-sec-head">
                <span class="pat2dum-tag">Dedicated Moving Solutions</span>
                <h2>Specialized Shifting Services: Patna to Dumka</h2>
                <p>Tailored logistics designed to handle family apartments, government transfers, and delicate vehicle shipments.</p>
            </div>

            <div class="pat2dum-grid-3">
                <div class="pat2dum-card">
                    <div class="pat2dum-card-icon">&#127968;</div>
                    <h3>Complete Household Relocation</h3>
                    <p>
                        From 1 BHK flats to extensive residential bungalows, we manage complete packing, modular furniture dismantling, sealed container transit, and destination room setup in Dumka.
                    </p>
                </div>

                <div class="pat2dum-card">
                    <div class="pat2dum-card-icon">&#127970;</div>
                    <h3>Govt & Bank Employee Transfers</h3>
                    <p>
                        Full logistical assistance for bank managers, corporate employees, and government officials relocating to Dumka. We generate standardized billing, packing lists, and company-approved receipts for straightforward claims.
                    </p>
                </div>

                <div class="pat2dum-card">
                    <div class="pat2dum-card-icon">&#128663;</div>
                    <h3>Door-to-Door Car Carrier</h3>
                    <p>
                        Safe, hydraulic-ramp car shipping using dedicated carrier trucks. We transport hatchbacks, sedans, and SUVs from Patna to your new residence in Dumka with bumper shields, wheel lockdowns, pre-transit condition logs, and transit insurance.
                    </p>
                </div>

                <div class="pat2dum-card">
                    <div class="pat2dum-card-icon">&#127949;</div>
                    <h3>Two-Wheeler Bike Courier</h3>
                    <p>
                        Bikes and scooters receive multi-layer wrapping with bubble sheets, corrugated cartons, and mirror padding. Fuel is drained to regulatory safety levels, battery terminals secured, and the vehicle is transported securely inside covered trucks.
                    </p>
                </div>

                <div class="pat2dum-card">
                    <div class="pat2dum-card-icon">&#128188;</div>
                    <h3>Office & Commercial Moving</h3>
                    <p>
                        Relocating business offices, retail merchandise, medical equipment, or IT workstations between Patna and Dumka. We deploy anti-static packaging, serial-numbered carton sealing, and systematic file archiving.
                    </p>
                </div>

                <div class="pat2dum-card">
                    <div class="pat2dum-card-icon">&#128230;</div>
                    <h3>Part Load / Shared Groupage</h3>
                    <p>
                        Moving only a few luggage boxes, a study desk, or minimal appliances? Save money with our shared container groupage service from Patna to Dumka, with individual barcode labeling and guaranteed delivery.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Packaging Standard Section -->
    <section class="pat2dum-section">
        <div class="pat2dum-container">
            <div class="pat2dum-grid-2">
                <div>
                    <div class="pat2dum-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="5 layer packing process for Patna to Dumka household shifting" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="pat2dum-tag">Protection Technology</span>
                    <h2>Engineered 5-Layer Packaging for Jamui-Deoghar Highway Transit</h2>
                    <p>
                        The 260-kilometer highway connecting Patna to Dumka crosses rural stretches and hilly sections around Chakai and Deoghar. To eliminate all transit vibration and dust contamination, Shree Ashirwad adheres to an unyielding 5-layer packing methodology:
                    </p>
                    <ul style="color: var(--pat2dum-text); line-height: 1.8; padding-left: 20px; margin-bottom: 20px;">
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
    <section class="pat2dum-section pat2dum-section-alt">
        <div class="pat2dum-container">
            <div class="pat2dum-sec-head">
                <span class="pat2dum-tag">Transparent Tariff</span>
                <h2>Patna to Dumka Relocation Cost Estimates</h2>
                <p>Fair, itemized, and transparent pricing without hidden tolls or sudden fuel surcharges. Contact our team for an exact, tailored quotation.</p>
            </div>

            <div class="pat2dum-table-box">
                <table class="pat2dum-table">
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
                            <td>2 Packers + 2 Loaders</td>
                            <td>Same Day (6 - 8 Hrs)</td>
                            <td>&#8377; 8,500 - &#8377; 14,000</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Flat / Full House Shifting</strong></td>
                            <td>Premium 5-Layer Protective</td>
                            <td>3 Packers + 3 Loaders</td>
                            <td>Same Day (6 - 8 Hrs)</td>
                            <td>&#8377; 13,500 - &#8377; 21,000</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK / Executive Duplex Villa</strong></td>
                            <td>Super Heavy Bubble + Wooden Crates</td>
                            <td>4 Packers + 4 Loaders</td>
                            <td>Same Day (7 - 9 Hrs)</td>
                            <td>&#8377; 20,000 - &#8377; 32,000</td>
                        </tr>
                        <tr>
                            <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                            <td>Corrugated Foam + Bubble Wrap</td>
                            <td>Loading & Lashing Included</td>
                            <td>24 Hours Delivery</td>
                            <td>&#8377; 2,800 - &#8377; 4,500</td>
                        </tr>
                        <tr>
                            <td><strong>Motor Car (Hatchback / Sedan)</strong></td>
                            <td>Enclosed Carrier Vehicle</td>
                            <td>Hydraulic Ramp Handling</td>
                            <td>Same Day Delivery</td>
                            <td>&#8377; 7,000 - &#8377; 11,000</td>
                        </tr>
                        <tr>
                            <td><strong>Commercial / Bank Office Setup</strong></td>
                            <td>Custom Anti-Static Crates</td>
                            <td>Technical Moving Team</td>
                            <td>Scheduled Window</td>
                            <td>Custom Audit Basis</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="pat2dum-route-info-box">
                <h4>Route Blueprint: Patna to Dumka Highway Transit Details</h4>
                <p>
                    <strong>Transit Path:</strong> Patna (Boring Road / Bailey Road) &rarr; Bakhtiyarpur &rarr; Mokama bypass &rarr; Lakhisarai &rarr; Jamui &rarr; Chakai &rarr; Deoghar &rarr; Dumka Bypass &rarr; Rasikpur / Dudhani. Total distance is roughly 260 km. Dedicated covered container trucks ensure prompt same-day transit within 6 to 8 hours.
                </p>
            </div>
        </div>
    </section>

    <!-- Vehicle Transport Section -->
    <section class="pat2dum-section">
        <div class="pat2dum-container">
            <div class="pat2dum-grid-2">
                <div>
                    <span class="pat2dum-tag">Automotive Logistics</span>
                    <h2>Secure Two-Wheeler & Car Transport: Patna to Dumka</h2>
                    <p>
                        Driving personal vehicles between Patna and Dumka on busy interstate highways with variable rural road sections can be exhausting. Shree Ashirwad Packers and Movers provides a reliable, secure automotive carrier service.
                    </p>
                    <p>
                        Our specialized car transport trailers and enclosed single-vehicle carriers are equipped with safety winches, custom wheel locks, and soft bumper shields that ensure your vehicle stays completely stationary during the trip. Before loading at your Patna residence, our field supervisor conducts a thorough multi-point exterior inspection, recording tire treads, fuel levels, and existing scratches on a formal Vehicle Condition Sheet.
                    </p>
                    <p>
                        For motorcycles and sports bikes, we use heavy-duty corrugated sheet wrapping around fuel tanks, headlamps, and chrome mirrors, followed by thick bubble insulation. Vehicles are delivered clean and undamaged right at your doorstep in Dumka.
                    </p>
                </div>
                <div>
                    <div class="pat2dum-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transport carrier loading from Patna to Dumka" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="pat2dum-section pat2dum-section-alt">
        <div class="pat2dum-container">
            <div class="pat2dum-sec-head">
                <span class="pat2dum-tag">Service Advantages</span>
                <h2>Why Choose Shree Ashirwad for Patna to Dumka Moves</h2>
                <p>Reliable interstate operations, certified moving crews, and an unwavering focus on customer satisfaction.</p>
            </div>

            <div class="pat2dum-grid-4">
                <div class="pat2dum-card">
                    <div class="pat2dum-card-icon">&#9989;</div>
                    <h3>Trained In-House Staff</h3>
                    <p>We never use untrained daily wage contractors. Our permanent crew has mastered delicate furniture handling, electronics packing, and staircase maneuvering.</p>
                </div>

                <div class="pat2dum-card">
                    <div class="pat2dum-card-icon">&#128337;</div>
                    <h3>Same-Day Delivery</h3>
                    <p>Because the Patna-Dumka distance is 260 km, our dedicated trucks load in the morning and deliver to Dumka by evening on the very same day.</p>
                </div>

                <div class="pat2dum-card">
                    <div class="pat2dum-card-icon">&#128176;</div>
                    <h3>Zero Hidden Costs</h3>
                    <p>Transparent written price quotations detailing toll charges, loading, unloading, packing supplies, and transit logistics with 100% upfront clarity.</p>
                </div>

                <div class="pat2dum-card">
                    <div class="pat2dum-card-icon">&#128221;</div>
                    <h3>Government Claim Invoices</h3>
                    <p>Full GST billing, computer-generated packing inventories, consignment notes, and stamped invoices compliant with Bihar and Jharkhand state transfer norms.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Unpacking and Setup Section -->
    <section class="pat2dum-section">
        <div class="pat2dum-container">
            <div class="pat2dum-grid-2">
                <div>
                    <div class="pat2dum-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and home setup service in Dumka" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="pat2dum-tag">Complete Destination Care</span>
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
    <section class="pat2dum-section pat2dum-section-alt">
        <div class="pat2dum-container">
            <div class="pat2dum-sec-head">
                <span class="pat2dum-tag">Coverage Area</span>
                <h2>Neighborhoods Covered Across Patna and Dumka</h2>
                <p>Door-to-door pickup and delivery across every residential colony, commercial market, and surrounding industrial township.</p>
            </div>

            <div class="pat2dum-grid-2">
                <div class="pat2dum-card">
                    <h3>Pickup Locations Across Patna</h3>
                    <p>
                        Boring Road, Kankarbagh, Bailey Road, Danapur, Patliputra Colony, Rajendra Nagar, Anisabad, Ashiana Nagar, Exhibition Road, Fraser Road, Saguna More, Digha, and Kumhrar.
                    </p>
                </div>

                <div class="pat2dum-card">
                    <h3>Delivery Locations in Dumka City & Surroundings</h3>
                    <p>
                        Rasikpur, Dudhani, Tinghar, Bandhdih, SP College Road, Dumka Court & Collectorate Colony, Dangalpara, Gilanpara, Khajuria, Purana Dumka, Airport Road, Kathikund bypass, and Jama Road.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section class="pat2dum-section">
        <div class="pat2dum-container">
            <div class="pat2dum-sec-head">
                <span class="pat2dum-tag">Helpful Answers</span>
                <h2>Frequently Asked Questions: Patna to Dumka Relocation</h2>
                <p>Have questions about packing safety, timelines, or billing? Find immediate answers below.</p>
            </div>

            <div style="max-width: 880px; margin: 0 auto;">
                <div class="pat2dum-faq-item">
                    <h4>What is the typical transit duration from Patna to Dumka?</h4>
                    <p>
                        The highway distance between Patna and Dumka is approximately 260 kilometers via NH-33, Mokama, Lakhisarai, Jamui, Chakai, and Deoghar. Our dedicated container trucks complete the transit in roughly 6 to 8 hours, guaranteeing same-day delivery.
                    </p>
                </div>

                <div class="pat2dum-faq-item">
                    <h4>Do you provide pickup from Boring Road, Kankarbagh, and Bailey Road in Patna?</h4>
                    <p>
                        Yes, we handle complete doorstep packaging and pickup across every Patna neighborhood, including Boring Road, Kankarbagh, Bailey Road, Danapur, Patliputra Colony, Rajendra Nagar, Anisabad, Ashiana Nagar, and Exhibition Road.
                    </p>
                </div>

                <div class="pat2dum-faq-item">
                    <h4>Do you supply GST invoices for Bihar-Jharkhand government transfer claims?</h4>
                    <p>
                        Yes, we provide 100% compliant GST invoices, detailed item inventories, money receipts, and consignment notes meeting all state administrative, judicial, railway, and bank reimbursement standards.
                    </p>
                </div>

                <div class="pat2dum-faq-item">
                    <h4>How are fragile furniture and electronics safeguarded on the Jamui-Deoghar stretch?</h4>
                    <p>
                        We implement a strict 5-tier packaging protocol utilizing virgin bubble wrap, heavy corrugated sheets, high-density edge corner protectors, stretch film wrapping, and reinforced adhesive sealing to prevent road shock absorption.
                    </p>
                </div>

                <div class="pat2dum-faq-item">
                    <h4>What is the approximate cost of moving a 2 BHK apartment from Patna to Dumka?</h4>
                    <p>
                        A standard 2 BHK household relocation from Patna to Dumka typically ranges between INR 13,500 and 21,000 depending on volume, floor levels, packing material tier, and elevator accessibility at both locations.
                    </p>
                </div>
            </div>

            <!-- Call to Action Banner -->
            <div class="pat2dum-cta-banner" id="pat2dum-quote">
                <h3>Ready to Relocate from Patna to Dumka?</h3>
                <p>
                    Contact Shree Ashirwad Packers and Movers today for an instant free moving estimate. Experience prompt, professional shifting with verified interstate relocation experts.
                </p>
                <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                    <a href="tel:8409531615" class="pat2dum-btn-primary" style="background: #f59e0b; color: #0f172a;">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                        Call 8409531615
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20relocation%20from%20Patna%20to%20Dumka." class="pat2dum-btn-outline" target="_blank" rel="noopener noreferrer">
                        Chat on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
