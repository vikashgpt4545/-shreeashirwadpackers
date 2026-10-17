<?php
/**
 * Page Name: Delhi to Dumka Packers and Movers
 * Route Slug: delhi-to-dumka-packers-and-movers
 * Description: Premier long-distance relocation, household goods shifting, defense/central government transfers, car transport, and bike courier from Delhi NCR to Dumka via NH-19.
 * Focus Keywords: delhi to dumka packers and movers, packers and movers delhi to dumka, house shifting delhi to dumka, car transport delhi to dumka, bike parcel delhi to dumka, noida gurgaon to dumka movers
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Delhi to Dumka Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Top-rated Delhi to Dumka packers and movers. 1,270 km transit, 5-layer safety packaging, dedicated container trucks, car & bike shipping. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/delhi-to-dumka-packers-and-movers";
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
    <meta name="geo.region" content="IN-DL">
    <meta name="geo.placename" content="New Delhi">

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

    <!-- Scoped CSS for Route 18 (Delhi to Dumka) -->
    <style>
        :root {
            --del2dum-primary: #1e3a5f;
            --del2dum-secondary: #0284c7;
            --del2dum-accent: #f59e0b;
            --del2dum-accent-light: #fef3c7;
            --del2dum-dark: #0f172a;
            --del2dum-gray-bg: #f8fafc;
            --del2dum-card-border: #e2e8f0;
            --del2dum-text: #334155;
            --del2dum-text-muted: #64748b;
            --del2dum-radius: 12px;
            --del2dum-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
            --del2dum-shadow-hover: 0 20px 30px -10px rgba(2, 132, 199, 0.18);
        }

        .del2dum-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.92) 0%, rgba(30, 58, 95, 0.88) 100%), url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 70px 20px 65px;
            position: relative;
        }

        .del2dum-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .del2dum-breadcrumbs {
            font-size: 0.9rem;
            color: #cbd5e1;
            margin-bottom: 20px;
        }

        .del2dum-breadcrumbs a {
            color: var(--del2dum-accent);
            text-decoration: none;
        }

        .del2dum-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(245, 158, 11, 0.18);
            border: 1px solid rgba(245, 158, 11, 0.5);
            color: var(--del2dum-accent);
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 0.88rem;
            font-weight: 600;
            margin-bottom: 18px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .del2dum-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            line-height: 1.25;
            font-weight: 800;
            margin-bottom: 18px;
            color: #ffffff;
        }

        .del2dum-hero p {
            font-size: 1.12rem;
            line-height: 1.7;
            max-width: 780px;
            color: #e2e8f0;
            margin-bottom: 28px;
        }

        .del2dum-hero-cta {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .del2dum-btn-primary {
            background: var(--del2dum-accent);
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

        .del2dum-btn-primary:hover {
            background: #d97706;
            transform: translateY(-2px);
            color: #ffffff;
        }

        .del2dum-btn-outline {
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

        .del2dum-btn-outline:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: #ffffff;
        }

        .del2dum-quick-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
            margin-top: 40px;
        }

        .del2dum-stat-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 18px 20px;
            border-radius: var(--del2dum-radius);
        }

        .del2dum-stat-num {
            font-family: 'Outfit', sans-serif;
            font-size: 1.85rem;
            font-weight: 800;
            color: var(--del2dum-accent);
            margin-bottom: 4px;
        }

        .del2dum-stat-lbl {
            font-size: 0.88rem;
            color: #cbd5e1;
        }

        .del2dum-section {
            padding: 60px 0;
        }

        .del2dum-section-alt {
            background-color: var(--del2dum-gray-bg);
        }

        .del2dum-sec-head {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 45px;
        }

        .del2dum-tag {
            display: inline-block;
            background: rgba(2, 132, 199, 0.1);
            color: var(--del2dum-secondary);
            font-size: 0.82rem;
            font-weight: 700;
            padding: 4px 14px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            margin-bottom: 12px;
        }

        .del2dum-sec-head h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            color: var(--del2dum-dark);
            font-weight: 800;
            line-height: 1.3;
            margin-bottom: 14px;
        }

        .del2dum-sec-head p {
            color: var(--del2dum-text-muted);
            font-size: 1.05rem;
            line-height: 1.65;
        }

        .del2dum-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 35px;
            align-items: center;
        }

        .del2dum-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        .del2dum-grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .del2dum-card {
            background: #ffffff;
            border: 1px solid var(--del2dum-card-border);
            border-radius: var(--del2dum-radius);
            padding: 26px;
            box-shadow: var(--del2dum-shadow);
            transition: all 0.3s ease;
        }

        .del2dum-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--del2dum-shadow-hover);
            border-color: rgba(2, 132, 199, 0.3);
        }

        .del2dum-card-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: rgba(2, 132, 199, 0.12);
            color: var(--del2dum-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 18px;
        }

        .del2dum-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.3rem;
            color: var(--del2dum-dark);
            margin-bottom: 12px;
            font-weight: 700;
        }

        .del2dum-card p {
            color: var(--del2dum-text);
            font-size: 0.95rem;
            line-height: 1.65;
        }

        .del2dum-img-wrapper {
            border-radius: var(--del2dum-radius);
            overflow: hidden;
            box-shadow: var(--del2dum-shadow);
        }

        .del2dum-img-wrapper img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .del2dum-img-wrapper:hover img {
            transform: scale(1.03);
        }

        .del2dum-table-box {
            background: #ffffff;
            border-radius: var(--del2dum-radius);
            box-shadow: var(--del2dum-shadow);
            overflow: hidden;
            border: 1px solid var(--del2dum-card-border);
            margin: 25px 0;
        }

        .del2dum-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .del2dum-table th {
            background: var(--del2dum-primary);
            color: #ffffff;
            font-family: 'Outfit', sans-serif;
            padding: 16px 20px;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .del2dum-table td {
            padding: 14px 20px;
            border-bottom: 1px solid #f1f5f9;
            color: var(--del2dum-text);
            font-size: 0.94rem;
        }

        .del2dum-table tr:nth-child(even) {
            background: #f8fafc;
        }

        .del2dum-route-info-box {
            background: #eff6ff;
            border-left: 4px solid var(--del2dum-secondary);
            padding: 22px 24px;
            border-radius: 0 10px 10px 0;
            margin: 25px 0;
        }

        .del2dum-route-info-box h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            color: var(--del2dum-primary);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .del2dum-faq-item {
            background: #ffffff;
            border: 1px solid var(--del2dum-card-border);
            border-radius: var(--del2dum-radius);
            padding: 20px 24px;
            margin-bottom: 16px;
            box-shadow: var(--del2dum-shadow);
        }

        .del2dum-faq-item h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.12rem;
            color: var(--del2dum-dark);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .del2dum-faq-item p {
            color: var(--del2dum-text);
            font-size: 0.95rem;
            line-height: 1.65;
            margin: 0;
        }

        .del2dum-cta-banner {
            background: linear-gradient(135deg, #1e3a5f 0%, #0f172a 100%);
            border-radius: 16px;
            padding: 50px 30px;
            text-align: center;
            color: #ffffff;
            margin-top: 50px;
            box-shadow: 0 15px 30px rgba(15, 23, 42, 0.2);
        }

        .del2dum-cta-banner h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.1rem;
            font-weight: 800;
            margin-bottom: 14px;
        }

        .del2dum-cta-banner p {
            font-size: 1.05rem;
            max-width: 680px;
            margin: 0 auto 25px;
            color: #cbd5e1;
            line-height: 1.65;
        }

        @media (max-width: 768px) {
            .del2dum-hero h1 {
                font-size: 2.1rem;
            }
            .del2dum-grid-2 {
                grid-template-columns: 1fr;
            }
            .del2dum-table th, .del2dum-table td {
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
      "name": "Shree Ashirwad Packers and Movers Delhi to Dumka",
      "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
      "@id": "https://www.shreeashirwadpackers.com/#delhi-to-dumka-packers",
      "url": "https://www.shreeashirwadpackers.com/delhi-to-dumka-packers-and-movers",
      "telephone": "+91-8409531615",
      "priceRange": "INR 9,500 - 85,000",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Sector 18, Near Metro Station",
        "addressLocality": "Noida, Delhi NCR",
        "addressRegion": "Delhi NCR",
        "postalCode": "201301",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.5355,
        "longitude": 77.3910
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
          "name": "Delhi NCR, India"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Dumka, Jharkhand"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Delhi to Dumka Relocation Services",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Household Relocation from Delhi NCR to Dumka"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Defense and Central Government Officer Relocation"
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
          "name": "Delhi to Dumka Packers and Movers",
          "item": "https://www.shreeashirwadpackers.com/delhi-to-dumka-packers-and-movers"
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
          "name": "How long does household goods transit take from Delhi NCR to Dumka?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The highway distance from Delhi NCR to Dumka is approximately 1,270 kilometers via the Yamuna Expressway and NH-19. Full dedicated container trucks complete transit in 3 to 4 days, while shared groupage shipments arrive in 5 to 7 days."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide packing and pickup across Noida, Gurgaon, and Delhi suburbs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we handle complete doorstep packaging and pickup across every Delhi NCR sector, including South Delhi, Dwarka, Janakpuri, Rohini, Noida, Greater Noida, Gurgaon (Cyber City, Sohna Road), Faridabad, and Ghaziabad."
          }
        },
        {
          "@type": "Question",
          "name": "Do you supply compliant GST bills for defense or central government claims?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we supply 100% compliant GST invoices, detailed item inventories, and official consignment notes (bilty) meeting all Ministry, Defense, Bank, and Central Government reimbursement standards."
          }
        },
        {
          "@type": "Question",
          "name": "How do you protect delicate electronics and furniture across 1,270 km?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We implement a strict 5-tier packaging protocol utilizing virgin bubble wrap, heavy corrugated sheets, high-density edge corner protectors, stretch film wrapping, and reinforced adhesive sealing to prevent road shock absorption."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost of shipping a car from Delhi to Dumka?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Car transportation inside specialized covered carriers from Delhi NCR to Dumka generally costs between INR 14,000 and 22,000 depending on vehicle size (hatchback, sedan, or SUV), including full transit insurance coverage."
          }
        }
      ]
    }
    </script>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <!-- Hero Section -->
    <header class="del2dum-hero">
        <div class="del2dum-container">
            <nav class="del2dum-breadcrumbs" aria-label="breadcrumb">
                <a href="<?php echo SITE_BASE_URL; ?>/">Home</a> &raquo; 
                <a href="<?php echo SITE_BASE_URL; ?>/services">Intercity Routes</a> &raquo; 
                <span>Delhi to Dumka</span>
            </nav>
            <div class="del2dum-hero-badge">&#10004; Dedicated Interstate Long-Haul Logistics</div>
            <h1>Reliable Delhi to Dumka Packers and Movers</h1>
            <p>
                Professional cross-country moving from Delhi NCR to Dumka (Jharkhand) via the Yamuna Expressway and NH-19. Complete household shifting, central government and defense transfers, enclosed car carrier transit, and bike courier with full transit insurance.
            </p>
            <div class="del2dum-hero-cta">
                <a href="tel:8409531615" class="del2dum-btn-primary">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                    Call: 8409531615
                </a>
                <a href="#del2dum-quote" class="del2dum-btn-outline">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Request Free Estimate
                </a>
            </div>

            <div class="del2dum-quick-stats">
                <div class="del2dum-stat-card">
                    <div class="del2dum-stat-num">1,270 KM</div>
                    <div class="del2dum-stat-lbl">Highway Distance via NH-19</div>
                </div>
                <div class="del2dum-stat-card">
                    <div class="del2dum-stat-num">3-4 Days</div>
                    <div class="del2dum-stat-lbl">Direct Full Truck Transit</div>
                </div>
                <div class="del2dum-stat-card">
                    <div class="del2dum-stat-num">100% Safe</div>
                    <div class="del2dum-stat-lbl">Waterproof Container Fleet</div>
                </div>
                <div class="del2dum-stat-card">
                    <div class="del2dum-stat-num">GST Approved</div>
                    <div class="del2dum-stat-lbl">Defense & PSU Claim Support</div>
                </div>
            </div>
        </div>
    </header>

    <!-- Overview Section -->
    <section class="del2dum-section">
        <div class="del2dum-container">
            <div class="del2dum-grid-2">
                <div>
                    <span class="del2dum-tag">Elite Interstate Moving</span>
                    <h2>Smooth Long-Distance Shifting from National Capital to Dumka</h2>
                    <p>
                        Relocating across 1,270 kilometers from the National Capital Region (Delhi, Noida, Gurgaon, Ghaziabad, Faridabad) to Dumka in Jharkhand is a significant undertaking requiring proven interstate logistics, heavy-duty packing standards, and sealed container carriers. Dumka serves as the administrative sub-capital of Jharkhand, hosting divisional headquarters, administrative tribunals, colleges, and medical complexes.
                    </p>
                    <p>
                        Families and professionals moving from Delhi NCR to Dumka include central civil servants, defense personnel returning on transfer, IT executives adopting remote or regional roles, bank managers, and retirees returning to their ancestral homes in Santhal Pargana. Shree Ashirwad Packers and Movers brings over a decade of nationwide relocation experience to ensure your goods arrive in pristine condition.
                    </p>
                    <p>
                        Our specialized crews bring heavy-duty packing supplies, professional dismantle-and-reassemble toolkits, and sealed container carriers directly to your Delhi NCR premises—whether in high-rise condominium complexes in Noida and Gurgaon or independent houses in South Delhi and Dwarka. We handle your belongings with unmatched care and deliver safely to your Dumka address.
                    </p>
                    <p>
                        Furthermore, we manage society gate approvals across NCR societies, handle elevator lift protection, and load directly into GPS-monitored container trucks operated by dual long-haul drivers.
                    </p>
                </div>
                <div>
                    <div class="del2dum-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe transit container truck for Delhi to Dumka relocation" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Highlights -->
    <section class="del2dum-section del2dum-section-alt">
        <div class="del2dum-container">
            <div class="del2dum-sec-head">
                <span class="del2dum-tag">Comprehensive Services</span>
                <h2>Specialized Shifting Services: Delhi to Dumka</h2>
                <p>Engineered relocation services designed to protect your goods across 1,270 km of highway transit.</p>
            </div>

            <div class="del2dum-grid-3">
                <div class="del2dum-card">
                    <div class="del2dum-card-icon">&#127968;</div>
                    <h3>Full Household Relocation</h3>
                    <p>
                        From compact 1 BHK flats to extensive residential bungalows, we manage complete packing, modular furniture dismantling, sealed container transit, and destination room setup in Dumka.
                    </p>
                </div>

                <div class="del2dum-card">
                    <div class="del2dum-card-icon">&#127970;</div>
                    <h3>Defense & Central Govt Moves</h3>
                    <p>
                        Complete documentation support for officers transferring from New Delhi ministries to Jharkhand. We supply 100% compliant GST invoices, detailed item inventories, and carrier receipts for timely departmental reimbursement.
                    </p>
                </div>

                <div class="del2dum-card">
                    <div class="del2dum-card-icon">&#128663;</div>
                    <h3>Covered Car Carrier Transit</h3>
                    <p>
                        Safely transport your sedan, hatchback, or luxury SUV from Delhi to Dumka inside fully enclosed car carriers. Features include hydraulic ramps, four-point wheel locking, bumper guards, and bumper-to-bumper transit insurance.
                    </p>
                </div>

                <div class="del2dum-card">
                    <div class="del2dum-card-icon">&#127949;</div>
                    <h3>Two-Wheeler Bike Parcel</h3>
                    <p>
                        Courier your motorcycle or scooter safely to Dumka. We drain fuel to compliant levels, disconnect batteries, wrap headlights and mirrors in thick bubble wrap, and lash bikes securely inside our covered carriers.
                    </p>
                </div>

                <div class="del2dum-card">
                    <div class="del2dum-card-icon">&#128188;</div>
                    <h3>Corporate Office & Tech Moves</h3>
                    <p>
                        Relocating workstation setups, servers, executive desks, and confidential records. We use static-shield wrap, numbered crate seals, and express container routing to minimize corporate downtime.
                    </p>
                </div>

                <div class="del2dum-card">
                    <div class="del2dum-card-icon">&#128230;</div>
                    <h3>Part Load / Shared Groupage</h3>
                    <p>
                        Moving only a few luggage boxes, a study desk, or minimal appliances? Save money with our shared container groupage service from Delhi to Dumka, with individual barcode labeling and guaranteed delivery.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Packaging Standard Section -->
    <section class="del2dum-section">
        <div class="del2dum-container">
            <div class="del2dum-grid-2">
                <div>
                    <div class="del2dum-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="5 layer packing process for Delhi to Dumka household shifting" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="del2dum-tag">Heavy-Duty Packaging</span>
                    <h2>Engineered 5-Layer Packaging for 1,270 KM Interstate Transit</h2>
                    <p>
                        A cross-country transit spanning over 1,200 kilometers across Delhi NCR, Uttar Pradesh, Bihar, and Jharkhand involves variable highway surfaces, temperature shifts, and highway vibrations. To ensure zero scratches, dents, or dust accumulation, Shree Ashirwad enforces an exacting 5-layer packing standard:
                    </p>
                    <ul style="color: var(--del2dum-text); line-height: 1.8; padding-left: 20px; margin-bottom: 20px;">
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
    <section class="del2dum-section del2dum-section-alt">
        <div class="del2dum-container">
            <div class="del2dum-sec-head">
                <span class="del2dum-tag">Tariff Guidelines</span>
                <h2>Delhi to Dumka Relocation Cost Estimates</h2>
                <p>Honest, upfront pricing with no hidden charges, toll markups, or unexpected delivery surcharges. Get a customized quote today.</p>
            </div>

            <div class="del2dum-table-box">
                <table class="del2dum-table">
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
                            <td>&#8377; 16,000 - &#8377; 25,000</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Flat / Regular Home</strong></td>
                            <td>5-Layer Shockproof Armor</td>
                            <td>4 Packers + Loading</td>
                            <td>3 - 4 Days</td>
                            <td>&#8377; 23,500 - &#8377; 37,000</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK / Large Residential House</strong></td>
                            <td>Premium 5-Layer + Crating</td>
                            <td>5 Packers + Loading</td>
                            <td>3 - 5 Days</td>
                            <td>&#8377; 34,000 - &#8377; 54,000</td>
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

            <div class="del2dum-route-info-box">
                <h4>Route Blueprint: NH-19 & Expressway Interstate Corridor</h4>
                <p>
                    <strong>Highway Routing:</strong> Delhi NCR &rarr; Greater Noida &rarr; Yamuna Expressway &rarr; Agra-Lucknow Expressway &rarr; Kanpur &rarr; Prayagraj &rarr; Varanasi (NH-19) &rarr; Aurangabad &rarr; Dobhi &rarr; Jamui / Deoghar &rarr; Dumka. Total distance is approximately 1,270 km. Dedicated long-haul container trucks utilize fast-tag toll lanes and dual-driver shifts to guarantee safe, swift delivery.
                </p>
            </div>
        </div>
    </section>

    <!-- Vehicle Transport Section -->
    <section class="del2dum-section">
        <div class="del2dum-container">
            <div class="del2dum-grid-2">
                <div>
                    <span class="del2dum-tag">Automotive Logistics</span>
                    <h2>Specialized Car & Two-Wheeler Transport: Delhi to Dumka</h2>
                    <p>
                        Driving 1,270 kilometers across several state borders on high-speed expressways is exhausting, causes heavy wear and tear on your vehicle, and exposes your car to highway hazards. Shree Ashirwad Packers and Movers provides a safe, economical alternative with specialized vehicle carrier trucks.
                    </p>
                    <p>
                        Our covered car haulers protect your sedan, hatchback, or SUV from stone chips, rain, and road debris. Each car is securely anchored using high-tensile wheel lashing straps on all four wheels to prevent movement. Before loading in Delhi, our supervisor conducts a detailed physical inspection, recording odometer reading, body conditions, and fuel levels on an authorized Vehicle Inspection Report.
                    </p>
                    <p>
                        Two-wheelers are wrapped with dual-layer bubble insulation, heavy corrugated sheets around headlights and handlebars, and transported upright in locked containers. Door-to-door delivery is provided directly to your residence in Dumka.
                    </p>
                </div>
                <div>
                    <div class="del2dum-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transport carrier loading from Delhi to Dumka" width="600" height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="del2dum-section del2dum-section-alt">
        <div class="del2dum-container">
            <div class="del2dum-sec-head">
                <span class="del2dum-tag">The Ashirwad Advantage</span>
                <h2>Why Families Choose Us for Delhi to Dumka Relocation</h2>
                <p>Over a decade of trusted interstate relocation experience, verified drivers, and transparent business ethics.</p>
            </div>

            <div class="del2dum-grid-4">
                <div class="del2dum-card">
                    <div class="del2dum-card-icon">&#128737;</div>
                    <h3>Full Transit Insurance</h3>
                    <p>Comprehensive transit policy through recognized national insurers protects your valuable goods against any unforeseen highway eventualities.</p>
                </div>

                <div class="del2dum-card">
                    <div class="del2dum-card-icon">&#128666;</div>
                    <h3>Sealed Container Trucks</h3>
                    <p>We transport your household effects in fully enclosed, weatherproof steel containers that protect against rainwater, road dust, and unauthorized access.</p>
                </div>

                <div class="del2dum-card">
                    <div class="del2dum-card-icon">&#128205;</div>
                    <h3>GPS Tracking & Daily Updates</h3>
                    <p>Stay informed throughout the 1,270 km journey with daily tracking checkpoints and proactive phone updates from your assigned move coordinator.</p>
                </div>

                <div class="del2dum-card">
                    <div class="del2dum-card-icon">&#128176;</div>
                    <h3>All-Inclusive Estimates</h3>
                    <p>Written, legally binding quotations clearly outlining packaging materials, labor costs, transit charges, and toll taxes with no unexpected surprises.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Unpacking and Setup Section -->
    <section class="del2dum-section">
        <div class="del2dum-container">
            <div class="del2dum-grid-2">
                <div>
                    <div class="del2dum-img-wrapper">
                        <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and home setup service in Dumka" width="600" height="400" loading="lazy">
                    </div>
                </div>
                <div>
                    <span class="del2dum-tag">Destination Ease</span>
                    <h2>Doorstep Unloading, Unpacking & Setup in Dumka</h2>
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
    <section class="del2dum-section del2dum-section-alt">
        <div class="del2dum-container">
            <div class="del2dum-sec-head">
                <span class="del2dum-tag">Area Coverage</span>
                <h2>Complete Coverage: Every Delhi NCR Sector to Dumka</h2>
                <p>Prompt pickup across the National Capital Region and guaranteed doorstep drop-off across Santhal Pargana.</p>
            </div>

            <div class="del2dum-grid-2">
                <div class="del2dum-card">
                    <h3>Pickup Sectors Across Delhi NCR</h3>
                    <p>
                        South Delhi (Hauz Khas, Saket, Vasant Kunj), West Delhi (Dwarka, Janakpuri, Punjabi Bagh), East Delhi (Mayur Vihar, Laxmi Nagar), North Delhi (Rohini, Pitampura), Noida (Sectors 15 to 150), Greater Noida, Gurgaon (DLF Phase 1-5, Cyber City, Sohna Road), Faridabad, and Ghaziabad (Indirapuram, Vaishali).
                    </p>
                </div>

                <div class="del2dum-card">
                    <h3>Delivery Coverage in Dumka District</h3>
                    <p>
                        Rasikpur, Dudhani, Tinghar, Bandhdih, SP College Road, Dumka Court, Dangalpara, Gilanpara, Khajuria, Airport Road, Kathikund Road, Jama, Hansdiha Road, and Saraiyahat.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section class="del2dum-section">
        <div class="del2dum-container">
            <div class="del2dum-sec-head">
                <span class="del2dum-tag">Got Questions?</span>
                <h2>Frequently Asked Questions: Delhi to Dumka Shifting</h2>
                <p>Learn more about interstate logistics, payment safety, and insurance coverage.</p>
            </div>

            <div style="max-width: 880px; margin: 0 auto;">
                <div class="del2dum-faq-item">
                    <h4>How long does household goods transit take from Delhi NCR to Dumka?</h4>
                    <p>
                        The highway distance from Delhi NCR to Dumka is approximately 1,270 kilometers via the Yamuna Expressway and NH-19. Full dedicated container trucks complete transit in 3 to 4 days, while shared groupage shipments arrive in 5 to 7 days.
                    </p>
                </div>

                <div class="del2dum-faq-item">
                    <h4>Do you provide packing and pickup across Noida, Gurgaon, and Delhi suburbs?</h4>
                    <p>
                        Yes, we handle complete doorstep packaging and pickup across every Delhi NCR sector, including South Delhi, Dwarka, Janakpuri, Rohini, Noida, Greater Noida, Gurgaon (Cyber City, Sohna Road), Faridabad, and Ghaziabad.
                    </p>
                </div>

                <div class="del2dum-faq-item">
                    <h4>Do you supply compliant GST bills for defense or central government claims?</h4>
                    <p>
                        Yes, we supply 100% compliant GST invoices, detailed item inventories, and official consignment notes (bilty) meeting all Ministry, Defense, Bank, and Central Government reimbursement standards.
                    </p>
                </div>

                <div class="del2dum-faq-item">
                    <h4>How do you protect delicate electronics and furniture across 1,270 km?</h4>
                    <p>
                        We implement a strict 5-tier packaging protocol utilizing virgin bubble wrap, heavy corrugated sheets, high-density edge corner protectors, stretch film wrapping, and reinforced adhesive sealing to prevent road shock absorption.
                    </p>
                </div>

                <div class="del2dum-faq-item">
                    <h4>What is the cost of shipping a car from Delhi to Dumka?</h4>
                    <p>
                        Car transportation inside specialized covered carriers from Delhi NCR to Dumka generally costs between INR 14,000 and 22,000 depending on vehicle size (hatchback, sedan, or SUV), including full transit insurance coverage.
                    </p>
                </div>
            </div>

            <!-- Call to Action Banner -->
            <div class="del2dum-cta-banner" id="del2dum-quote">
                <h3>Ready to Move from Delhi NCR to Dumka?</h3>
                <p>
                    Get in touch with Shree Ashirwad Packers and Movers today for an instant free moving estimate. Experience professional, safe, and stress-free interstate relocation with Jharkhand's most trusted logistics partner.
                </p>
                <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                    <a href="tel:8409531615" class="del2dum-btn-primary" style="background: #f59e0b; color: #0f172a;">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.57a1 1 0 01-.24 1.02l-2.21 2.2z"/></svg>
                        Call 8409531615
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20relocation%20from%20Delhi%20to%20Dumka." class="del2dum-btn-outline" target="_blank" rel="noopener noreferrer">
                        Chat on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
