<?php
/**
 * Packers and Movers in Ranchi - Shree Ashirwad Packers and Movers
 * Flagship Authority Landing Page
 * 
 * Target URL: https://www.shreeashirwadpackers.com/packers-and-movers-in-ranchi
 * Primary Focus: Leading Packers and Movers in Ranchi, Household Shifting, Office Relocation & Vehicle Transport
 */

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/seo.php';

$page_title = "Packers and Movers in Ranchi | Best Moving Company - Shree Ashirwad";
$page_description = "Looking for the best packers and movers in Ranchi? Shree Ashirwad offers trusted household shifting, office relocation, car & bike transport with 5-layer packing and verified local crews.";
$canonical_url = PRODUCTION_CANONICAL_DOMAIN . "/packers-and-movers-in-ranchi";
$meta_keywords = "packers and movers in ranchi, best packers and movers in ranchi, movers and packers near me in ranchi, household shifting in ranchi, office relocation ranchi, car transport in ranchi, bike transport ranchi, cheap and affordable packers and movers charges in ranchi, reliable movers and packers ranchi, local shifting services in ranchi, packing and moving company in ranchi";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="keywords" content="<?php echo htmlspecialchars($meta_keywords, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <meta name="author" content="<?php echo htmlspecialchars(BUSINESS_NAME, ENT_QUOTES, 'UTF-8'); ?>">
  <link rel="canonical" href="<?php echo $canonical_url; ?>">

  <!-- Open Graph -->
  <meta property="og:locale" content="en_IN">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:url" content="<?php echo $canonical_url; ?>">
  <meta property="og:site_name" content="<?php echo htmlspecialchars(BUSINESS_NAME, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="800">
  <meta property="og:image:alt" content="Packers and Movers in Ranchi Shree Ashirwad Loading Truck">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg">

  <!-- Geo Tags -->
  <meta name="geo.region" content="IN-JH">
  <meta name="geo.placename" content="Ranchi">
  <meta name="geo.position" content="23.3639813;85.3090259">
  <meta name="ICBM" content="23.3639813, 85.3090259">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
  <link rel="shortcut icon" href="<?php echo SITE_BASE_URL; ?>/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">

  <!-- Stylesheets & High PageSpeed Non-Blocking Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800;900&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800;900&display=swap" media="print" onload="this.media='all'">
  <noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800;900&display=swap">
  </noscript>
  <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

  <!-- Schema 1: MovingCompany -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "MovingCompany",
    "@id": "<?php echo $canonical_url; ?>/#movingcompany",
    "name": "Shree Ashirwad Packers and Movers Ranchi",
    "alternateName": "Shree Ashirwad Movers and Packers Ranchi",
    "url": "<?php echo $canonical_url; ?>",
    "logo": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
    "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
    "description": "<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>",
    "telephone": "+918409531615",
    "email": "enquiry@shreeashirwadpackers.com",
    "priceRange": "INR 3,500 - 45,000",
    "currenciesAccepted": "INR",
    "paymentAccepted": "Cash, UPI, Net Banking, Cheque",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Anandpuri Chowk, Vidyanagar Road, Harmu Housing Colony",
      "addressLocality": "Ranchi",
      "addressRegion": "Jharkhand",
      "postalCode": "834002",
      "addressCountry": "IN"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 23.3639813,
      "longitude": 85.3090259
    },
    "hasMap": "https://www.google.com/maps?cid=17894179374492933119",
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.9",
      "reviewCount": "703",
      "bestRating": "5",
      "worstRating": "1"
    },
    "areaServed": [
      {"@type": "AdministrativeArea", "name": "Ranchi"},
      {"@type": "AdministrativeArea", "name": "Harmu"},
      {"@type": "AdministrativeArea", "name": "Hatia"},
      {"@type": "AdministrativeArea", "name": "Lalpur"},
      {"@type": "AdministrativeArea", "name": "Morabadi"},
      {"@type": "AdministrativeArea", "name": "Bariatu"},
      {"@type": "AdministrativeArea", "name": "Doranda"},
      {"@type": "AdministrativeArea", "name": "Ashok Nagar"},
      {"@type": "AdministrativeArea", "name": "Ratu Road"},
      {"@type": "AdministrativeArea", "name": "Kanke"},
      {"@type": "AdministrativeArea", "name": "Jharkhand"}
    ]
  }
  </script>

  <!-- Schema 2: BreadcrumbList -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "<?php echo SITE_BASE_URL; ?>/"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Packers and Movers in Ranchi",
        "item": "<?php echo $canonical_url; ?>"
      }
    ]
  }
  </script>

  <!-- Schema 3: Service -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "Household Shifting & Relocation Services in Ranchi",
    "provider": {
      "@id": "<?php echo $canonical_url; ?>/#movingcompany"
    },
    "areaServed": {
      "@type": "City",
      "name": "Ranchi"
    },
    "description": "Comprehensive packing and moving services in Ranchi including local shifting, corporate office relocation, bike parcel, car container transport, and secured warehousing.",
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Ranchi Relocation Solutions",
      "itemListElement": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Ranchi Local Household Shifting"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Intercity Moving from Ranchi"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Car & Two-Wheeler Transportation Ranchi"
          }
        }
      ]
    }
  }
  </script>

  <!-- Schema 4: FAQPage -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "How much do packers and movers in Ranchi charge for local shifting?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Local shifting charges in Ranchi generally range from Rs 3,500 to Rs 6,500 for a 1 BHK, Rs 6,500 to Rs 11,500 for a 2 BHK, and Rs 11,000 to Rs 18,500 for a 3 BHK depending on goods volume, packing material tier, and floor level."
        }
      },
      {
        "@type": "Question",
        "name": "Which localities in Ranchi are covered for same-day shifting?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Shree Ashirwad provides same-day shifting across all major Ranchi localities including Harmu Housing Colony, Lalpur, Morabadi, Bariatu, Doranda, Hatia, Ashok Nagar, Ratu Road, Kanke, Hinoo, Kokar, Namkum, and Dhurwa."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide IBA approved bills for bank and government employee claims in Ranchi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we provide 100% authentic IBA approved moving bills with proper GST invoice, computerized consignment notes (bilty), and itemized transit insurance for claims at banks, PSUs, CCL, CMPDI, SAIL, and defense organizations."
        }
      },
      {
        "@type": "Question",
        "name": "How are delicate household items and electronics packed?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We enforce 5-layer protective packing utilizing high-density bubble wrap, edge-reinforced corner guards, 7-ply master corrugated cartons, waterproof stretch film, and custom wooden crating for LED TVs and glassware."
        }
      },
      {
        "@type": "Question",
        "name": "How do you handle car and bike transportation from Ranchi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Vehicles are safely moved in specialized hydraulic car carrier trailers and custom wooden motorcycle crates with wheel chocks, security harness straps, and comprehensive transit insurance."
        }
      },
      {
        "@type": "Question",
        "name": "How do I book reliable movers and packers near me in Ranchi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "You can call our Ranchi customer support at +91 8409531615 or submit your requirements online for an immediate free doorstep physical survey or video estimation and instant written quote."
        }
      }
    ]
  }
  </script>

  <!-- Scoped CSS for Ranchi Authority Hub -->
  <style>
    :root {
      --pmr-primary: #1e3a8a;
      --pmr-secondary: #0284c7;
      --pmr-accent: #0284c7;
      --pmr-accent-light: #e0f2fe;
      --pmr-dark: #0f172a;
      --pmr-gray-bg: #f8fafc;
      --pmr-border: #e2e8f0;
      --pmr-shadow: 0 10px 25px -5px rgba(30, 58, 138, 0.08), 0 8px 10px -6px rgba(30, 58, 138, 0.04);
    }

    .pmr-wrap {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 15px 50px;
      font-family: 'Outfit', sans-serif;
      color: #1e293b;
    }

    .pmr-hero {
      background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 58, 138, 0.90) 100%),
                  url('<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg') center/cover no-repeat;
      color: #ffffff;
      padding: 85px 30px 65px;
      border-radius: 16px;
      margin-bottom: 35px;
      text-align: center;
      position: relative;
    }

    .pmr-hero h1 {
      font-family: 'Outfit', sans-serif;
      font-size: 2.75rem;
      font-weight: 800;
      line-height: 1.2;
      margin-bottom: 20px;
      color: #ffffff;
    }

    .pmr-hero p.lead {
      font-size: 1.15rem;
      line-height: 1.7;
      color: #e2e8f0;
      max-width: 820px;
      margin: 0 auto 28px;
    }

    .pmr-badge-strip {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      justify-content: center;
      margin-bottom: 30px;
    }

    .pmr-badge {
      background: rgba(255, 255, 255, 0.12);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255, 255, 255, 0.22);
      color: #ffffff;
      padding: 7px 16px;
      border-radius: 9999px;
      font-size: 0.88rem;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }

    .pmr-cta-group {
      display: flex;
      flex-wrap: wrap;
      gap: 16px;
      justify-content: center;
      align-items: center;
    }

    .pmr-btn-primary {
      background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%);
      color: #ffffff;
      font-weight: 700;
      padding: 14px 32px;
      border-radius: 10px;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      box-shadow: 0 4px 14px rgba(2, 132, 199, 0.35);
      transition: all 0.3s ease;
    }

    .pmr-btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(2, 132, 199, 0.45);
      color: #ffffff;
    }

    .pmr-btn-secondary {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(6px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      color: #ffffff;
      font-weight: 600;
      padding: 14px 28px;
      border-radius: 10px;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .pmr-btn-secondary:hover {
      background: rgba(255, 255, 255, 0.25);
      color: #ffffff;
    }

    .pmr-section {
      padding: 60px 0;
    }

    .pmr-section-gray {
      background-color: var(--pmr-gray-bg);
      border-radius: 16px;
      padding: 60px 25px;
      margin: 30px 0;
    }

    .pmr-heading-center {
      text-align: center;
      max-width: 820px;
      margin: 0 auto 45px;
    }

    .pmr-heading-center h2 {
      font-family: 'Outfit', sans-serif;
      font-size: 2.25rem;
      font-weight: 800;
      color: var(--pmr-dark);
      margin-bottom: 14px;
    }

    .pmr-heading-center p {
      font-size: 1.05rem;
      color: #64748b;
      line-height: 1.65;
    }

    .pmr-grid-2 {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 36px;
      align-items: center;
    }

    .pmr-grid-3 {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 28px;
    }

    .pmr-card {
      background: #ffffff;
      border-radius: 14px;
      border: 1px solid var(--pmr-border);
      padding: 28px;
      box-shadow: var(--pmr-shadow);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .pmr-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 15px 30px -5px rgba(30, 58, 138, 0.12);
    }

    .pmr-card-icon {
      width: 54px;
      height: 54px;
      border-radius: 12px;
      background: var(--pmr-accent-light);
      color: var(--pmr-accent);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      margin-bottom: 18px;
      font-weight: bold;
    }

    .pmr-card h3, .pmr-card h4 {
      font-family: 'Outfit', sans-serif;
      font-size: 1.3rem;
      font-weight: 700;
      color: var(--pmr-dark);
      margin-top: 0;
      margin-bottom: 12px;
    }

    .pmr-card p {
      color: #475569;
      font-size: 0.96rem;
      line-height: 1.65;
      margin-bottom: 0;
    }

    .pmr-checklist {
      list-style: none;
      padding: 0;
      margin: 20px 0;
    }

    .pmr-checklist li {
      position: relative;
      padding-left: 28px;
      margin-bottom: 12px;
      color: #334155;
      font-size: 0.98rem;
      line-height: 1.6;
    }

    .pmr-checklist li::before {
      content: "\2713";
      position: absolute;
      left: 0;
      top: 0;
      color: #10b981;
      font-weight: 800;
      font-size: 1.1rem;
    }

    .pmr-table-container {
      background: #ffffff;
      border-radius: 14px;
      border: 1px solid var(--pmr-border);
      overflow-x: auto;
      box-shadow: var(--pmr-shadow);
      margin: 30px 0;
    }

    .pmr-table {
      width: 100%;
      border-collapse: collapse;
      text-align: left;
    }

    .pmr-table th {
      background: #0f172a;
      color: #ffffff;
      font-weight: 700;
      padding: 16px 20px;
      font-size: 0.98rem;
    }

    .pmr-table td {
      padding: 16px 20px;
      border-bottom: 1px solid var(--pmr-border);
      color: #334155;
      font-size: 0.95rem;
    }

    .pmr-table tr:last-child td {
      border-bottom: none;
    }

    .pmr-table tr:hover td {
      background-color: #f1f5f9;
    }

    .pmr-faq-item {
      background: #ffffff;
      border-radius: 12px;
      border: 1px solid var(--pmr-border);
      padding: 24px;
      margin-bottom: 16px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
    }

    .pmr-faq-item h3, .pmr-faq-item h4 {
      font-family: 'Outfit', sans-serif;
      font-size: 1.15rem;
      font-weight: 700;
      color: var(--pmr-dark);
      margin-top: 0;
      margin-bottom: 10px;
    }

    .pmr-faq-item p {
      color: #475569;
      font-size: 0.96rem;
      line-height: 1.65;
      margin: 0;
    }

    /* Responsive Image Containment */
    .pmr-img-wrap, .pmr-image-container {
      max-width: 440px !important;
      width: 100% !important;
      margin: 18px auto !important;
      overflow: hidden !important;
      border-radius: 14px !important;
      box-shadow: var(--pmr-shadow) !important;
      text-align: center !important;
    }

    .pmr-img-wrap img, .pmr-image-container img {
      max-width: 440px !important;
      max-height: 220px !important;
      height: 220px !important;
      width: 100% !important;
      object-fit: cover !important;
      aspect-ratio: 16/9 !important;
      display: block !important;
      margin: 0 auto !important;
      border-radius: 12px !important;
      transition: transform 0.4s ease;
    }

    .pmr-img-wrap:hover img, .pmr-image-container:hover img {
      transform: scale(1.03);
    }

    @media (max-width: 991px) {
      .pmr-grid-3 {
        grid-template-columns: repeat(2, 1fr);
      }
      .pmr-grid-2 {
        grid-template-columns: 1fr;
      }
      .pmr-hero h1 {
        font-size: 2.2rem;
      }
    }

    @media (max-width: 640px) {
      .pmr-grid-3 {
        grid-template-columns: 1fr;
      }
      .pmr-hero {
        padding: 50px 18px 40px;
      }
      .pmr-hero h1 {
        font-size: 1.85rem;
      }
      .pmr-img-wrap, .pmr-image-container {
        max-width: 320px !important;
      }
      .pmr-img-wrap img, .pmr-image-container img {
        max-width: 320px !important;
        max-height: 180px !important;
        height: 180px !important;
      }
    }
  </style>
</head>
<body>
  <?php include __DIR__ . '/../includes/header.php'; ?>

  <div class="pmr-wrap">
    
    <!-- Hero Banner -->
    <header class="pmr-hero">
      <div class="pmr-badge-strip">
        <span class="pmr-badge">&#9733; 4.9 Rating (703+ Google Reviews)</span>
        <span class="pmr-badge">&#128666; Sealed Weatherproof Container Trucks</span>
        <span class="pmr-badge">&#128196; IBA Approved Bills &amp; GST Invoices</span>
        <span class="pmr-badge">&#128338; Same-Day Local Ranchi Shifting</span>
      </div>
      <h1>Packers and Movers in Ranchi</h1>
      <p class="lead">
        Dependable, insured, and professional household shifting, vehicle transport, and corporate relocation services based in Ranchi. Experience 5-layer protective packing, dedicated closed container trucks, and seamless doorstep delivery across Jharkhand and all of India.
      </p>
      <div class="pmr-cta-group">
        <a href="tel:<?php echo PRIMARY_PHONE_RAW; ?>" class="pmr-btn-primary">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          Call Hotline: <?php echo PRIMARY_PHONE; ?>
        </a>
        <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="pmr-btn-secondary">
          WhatsApp Instant Quote &rarr;
        </a>
      </div>
    </header>

    <!-- Competitor Ranking Keyword Content Box (10 Paragraphs) -->
    <section style="padding: 20px 0 40px; background: #ffffff;">
      <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-left: 5px solid #0d47a1; border-radius: 12px; padding: 30px; box-shadow: 0 4px 15px rgba(0,0,0,0.04);">
        <h3 style="color: #0f172a; font-size: 1.5rem; font-weight: 700; margin-top: 0; margin-bottom: 16px;">
          Packers and Movers in Ranchi - Shree Ashirwad Packers
        </h3>
        <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 12px;">
          Looking for the <strong>best packers and movers in Ranchi</strong>? Shree Ashirwad Packers and Movers provides trusted <strong>household shifting in Ranchi</strong>, commercial <strong>office relocation</strong>, specialized <strong>bike transport</strong>, secure <strong>car transport in Ranchi</strong>, and complete moving solutions at affordable prices.
        </p>
        <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 12px;">
          Our experienced team offers safe packing, loading, unloading, direct transit transportation, and unpacking services across Ranchi and all districts of Jharkhand with timely doorstep delivery support.
        </p>
        <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 12px;">
          As one of the <strong>top-rated packers and movers near Ranchi</strong>, we help families, military personnel, bank officers, public sector executives, and businesses relocate locally and across India without hassle.
        </p>
        <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 12px;">
          We cover major localities in Ranchi including Harmu Housing Colony, Lalpur, Morabadi, Bariatu, Doranda, Hatia, Ashok Nagar, Ratu Road, Kanke, Hinoo, Kokar, Namkum, and Dhurwa for fast and reliable shifting services.
        </p>
        <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 12px;">
          Whether you need <strong>local shifting in Ranchi</strong>, intercity relocation to major metros, <strong>office moving</strong>, luggage transport, or vehicle transportation, our trained staff ensures secure handling and professional support.
        </p>
        <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 12px;">
          Customers choose our <strong>movers and packers service in Ranchi</strong> for transparent pricing, careful goods handling, quick booking assistance, and dependable relocation planning.
        </p>
        <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 12px;">
          We also provide <strong>nearby packers and movers</strong> support with <strong>pincode-based scheduling</strong> across 834001, 834002, 834003, 834004, 834005, 834008, 834009, 834010, <strong>same-day shifting assistance</strong>, <strong>floor-to-floor handling</strong>, and flexible moving options.
        </p>
        <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 12px;">
          From small apartments (1 BHK, 2 BHK, 3 BHK) to large bungalows and corporate setups, our <strong>packing and moving company in Ranchi</strong> delivers affordable, safe, and stress-free relocation services.
        </p>
        <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 12px;">
          If you are searching for reliable <strong>movers and packers near me in Ranchi</strong>, our local team at Anandpuri Chowk, Harmu is available 24/7 for <strong>home shifting</strong>, storage, transport, and complete relocation assistance.
        </p>
        <p style="font-size: 1rem; color: #334155; line-height: 1.8; margin-bottom: 0;">
          Our <strong>professional packers and movers service in Ranchi</strong> is designed for safe household shifting, commercial relocation, <strong>furniture moving</strong>, and <strong>long-distance transportation</strong> at verified <strong>cheap and affordable packers and movers charges in Ranchi</strong>. Call <strong><a href="tel:<?php echo PRIMARY_PHONE_RAW; ?>" style="color: #0d47a1; font-weight: 700; text-decoration: none;"><?php echo PRIMARY_PHONE; ?></a></strong> for an instant quotation.
        </p>
      </div>
    </section>

    <!-- Section 1: Authority & Operational Logistics in Ranchi -->
    <section class="pmr-section">
      <div class="pmr-grid-2">
        <div>
          <span style="color: var(--pmr-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">State Headquarters &amp; Operations Base</span>
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--pmr-dark); margin: 10px 0 20px;">
            Safe &amp; Reliable Movers and Packers in Ranchi
          </h2>
          <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
            Operating from our central headquarters at Anandpuri Chowk, Harmu Housing Colony, <strong>Shree Ashirwad Packers and Movers</strong> has served over 18,500 families, corporate professionals, and government personnel across Ranchi and Jharkhand. With company-owned sealed container trucks, certified packing specialists, and real-time transit tracking, we ensure every relocation is executed with complete safety.
          </p>
          <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
            Whether you are relocating within Ranchi neighborhoods or embarking on an interstate move to Delhi, Bangalore, Kolkata, or Mumbai, our dedicated relocation supervisors oversee every phase—from room-by-room inventorying to destination furniture placement.
          </p>
          <ul class="pmr-checklist">
            <li>Pincode-based rapid dispatch across Harmu (834002), Lalpur (834001), Hatia (834003), and Morabadi (834008)</li>
            <li>5-layer defensive packaging safeguarding delicate electronics, glassware, and polished wooden furniture</li>
            <li>GPS-monitored weatherproof container trucks preventing water damage, dust ingress, and transit vibrations</li>
            <li>100% authentic IBA-approved bills and GST invoices recognized by CCL, CMPDI, SAIL, and Central Government</li>
          </ul>
        </div>
        <div class="pmr-img-wrap">
          <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Packers and movers in Ranchi loading household goods in truck" loading="lazy" decoding="async">
        </div>
      </div>
    </section>

    <!-- Section 2: Core Shifting Services Grid (6 Cards) -->
    <section class="pmr-section pmr-section-gray">
      <div class="pmr-heading-center">
        <h2>Comprehensive Shifting Services in Ranchi</h2>
        <p>
          Tailored relocation solutions engineered for residential households, corporate businesses, defense personnel, and vehicle owners.
        </p>
      </div>

      <div class="pmr-grid-3">
        <div class="pmr-card">
          <div class="pmr-card-icon">&#127968;</div>
          <h3>Complete Household Shifting</h3>
          <p>
            Full packing of furniture, modular kitchen items, appliances, and fragile chinaware using 5-ply cartons, shock-absorbing thermocol, and heavy stretch film.
          </p>
        </div>
        <div class="pmr-card">
          <div class="pmr-card-icon">&#128188;</div>
          <h3>Office &amp; Commercial Relocation</h3>
          <p>
            Zero-downtime office moves covering IT workstations, server racks, confidential file archives, executive cabins, and boardroom conference setups across Ranchi.
          </p>
        </div>
        <div class="pmr-card">
          <div class="pmr-card-icon">&#128663;</div>
          <h3>Enclosed Car Carrier</h3>
          <p>
            Dedicated hydraulic car trailers safely transport sedans, hatchbacks, and SUVs from Ranchi across national highways with wheel chocks and transit insurance.
          </p>
        </div>
        <div class="pmr-card">
          <div class="pmr-card-icon">&#127949;</div>
          <h3>Two-Wheeler Bike Courier</h3>
          <p>
            Specialized motorcycle transit utilizing multi-layer bubble wrap, handle padding, wheel chocks, and nylon harness belts to guarantee scratch-free delivery.
          </p>
        </div>
        <div class="pmr-card">
          <div class="pmr-card-icon">&#128230;</div>
          <h3>Part Load &amp; Single Item Moves</h3>
          <p>
            Affordable sharing and single-room relocation options for students, bachelors, and professionals moving single appliances, sofas, or luggage parcels.
          </p>
        </div>
        <div class="pmr-card">
          <div class="pmr-card-icon">&#128737;</div>
          <h3>Warehousing &amp; Storage</h3>
          <p>
            Moisture-proof, 24/7 CCTV-monitored household storage and commercial warehousing facilities near Harmu Chowk with flexible monthly rental contracts.
          </p>
        </div>
      </div>
    </section>

    <!-- Section 3: 5-Layer Protective Packaging Standards (2-Col) -->
    <section class="pmr-section">
      <div class="pmr-grid-2">
        <div class="pmr-img-wrap">
          <img src="<?php echo SITE_BASE_URL; ?>/images/kitchen-crockery-bubble-packing-ranchi.jpg" alt="Fragile kitchen crockery bubble packing by packers and movers in Ranchi" loading="lazy" decoding="async">
        </div>
        <div>
          <span style="color: var(--pmr-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Flawless Material Quality</span>
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--pmr-dark); margin: 10px 0 20px;">
            Five-Layer Protective Packaging for Zero Highway Shock
          </h2>
          <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
            Whether traversing local city roads or bumpy interstate highways, protective packing is the first line of defense. Our certified packing teams enforce multi-layer material standards to insulate goods against impacts, moisture, and vibrations.
          </p>
          <ul class="pmr-checklist">
            <li><strong>Cling Film Barrier:</strong> Non-static stretch wrap shielding wood finishes, leather upholstery, and fabrics against dirt and humidity.</li>
            <li><strong>Bubble Cushioning:</strong> Multi-ply air bubble sheets wrapped tightly around LED screens, audio equipment, and kitchen electronics.</li>
            <li><strong>Edge Reinforcement:</strong> Heavy corrugated corner pads preventing abrasions and chipping on polished dining tables and wardrobe doors.</li>
            <li><strong>7-Ply Master Cartons:</strong> Heavy-duty corrugated boxes designed to bear stack weight during transport without buckling.</li>
            <li><strong>Color-Coded Labeling:</strong> Clear identification tags on every box specifying room allocation and handling cautions.</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Section 4: Shifting Rates & Pricing Table -->
    <section class="pmr-section pmr-section-gray">
      <div class="pmr-heading-center">
        <h2>Estimated Packers and Movers Charges in Ranchi</h2>
        <p>
          Transparent, upfront moving estimates with zero hidden fees. For customized calculations, check our live <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" style="color: #0284c7; font-weight: 700; text-decoration: underline;">Packers and Movers Charges in Ranchi</a> tool.
        </p>
      </div>

      <div class="pmr-table-container">
        <table class="pmr-table">
          <thead>
            <tr>
              <th>Relocation Scope / Home Size</th>
              <th>Local Shifting (Within Ranchi)</th>
              <th>Interstate Shifting (Pan-India)</th>
              <th>Packing Material &amp; Labor</th>
              <th>Estimated Transit Time</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>1 RK / Studio Setup</strong></td>
              <td>&#8377; 3,500 - 5,500</td>
              <td>&#8377; 9,500 - 16,000</td>
              <td>&#8377; 1,500 - 2,500</td>
              <td>Same Day (4 - 6 Hours)</td>
            </tr>
            <tr>
              <td><strong>1 BHK Complete Home</strong></td>
              <td>&#8377; 4,500 - 7,500</td>
              <td>&#8377; 13,000 - 22,000</td>
              <td>&#8377; 2,000 - 3,500</td>
              <td>Same Day (5 - 8 Hours)</td>
            </tr>
            <tr>
              <td><strong>2 BHK Residential Flat</strong></td>
              <td>&#8377; 7,000 - 12,500</td>
              <td>&#8377; 18,500 - 32,000</td>
              <td>&#8377; 3,500 - 5,500</td>
              <td>Same Day / Overnight</td>
            </tr>
            <tr>
              <td><strong>3 BHK Independent Home</strong></td>
              <td>&#8377; 11,500 - 19,000</td>
              <td>&#8377; 26,000 - 45,000</td>
              <td>&#8377; 5,000 - 8,000</td>
              <td>1 - 2 Days</td>
            </tr>
            <tr>
              <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
              <td>&#8377; 1,200 - 2,000</td>
              <td>&#8377; 3,500 - 6,500</td>
              <td>&#8377; 800 - 1,400</td>
              <td>Same Day / Next Day</td>
            </tr>
            <tr>
              <td><strong>Car Transport (Sedan / SUV)</strong></td>
              <td>&#8377; 2,500 - 4,000</td>
              <td>&#8377; 10,500 - 18,000</td>
              <td>&#8377; 1,500 - 2,500</td>
              <td>2 - 4 Days</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="text-align: center; color: #64748b; font-size: 0.92rem; margin-top: -10px;">
        * Rates reflect standard moving scopes. Final quotes depend on exact item count, floor levels, elevator availability, and optional transit insurance choice.
      </p>
    </section>

    <!-- Section 5: Specialized Vehicle Logistics (2-Col) -->
    <section class="pmr-section">
      <div class="pmr-grid-2">
        <div>
          <span style="color: var(--pmr-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Secure Automobile Logistics</span>
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--pmr-dark); margin: 10px 0 20px;">
            Enclosed Car Carrier &amp; Safe Bike Transportation
          </h2>
          <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
            Driving your vehicle across highway distances causes engine wear, tire tear, and road stress. Our enclosed car carriers and hydraulic motorcycle transports ensure zero-mileage, scratch-free transfer across India.
          </p>
          <ul class="pmr-checklist">
            <li>Hydraulic ramps and wheel stoppers locking automobiles firmly in place</li>
            <li>Custom 3-layer bubble foam wrapping on bike mirrors, fuel tanks, and exhausts</li>
            <li>Comprehensive pre-dispatch inspection audit with documented odometer and condition notes</li>
            <li>Doorstep pickup in Ranchi and direct offloading at your destination city residence</li>
          </ul>
        </div>
        <div class="pmr-img-wrap">
          <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Enclosed hydraulic car carrier loading for vehicle moving in Ranchi" loading="lazy" decoding="async">
        </div>
      </div>
    </section>

    <!-- Section 6: Floor-to-Floor Unloading & Setup (2-Col) -->
    <section class="pmr-section pmr-section-gray">
      <div class="pmr-grid-2">
        <div class="pmr-img-wrap">
          <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and furniture setup service in Ranchi by Shree Ashirwad" loading="lazy" decoding="async">
        </div>
        <div>
          <span style="color: var(--pmr-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Turnkey Destination Service</span>
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--pmr-dark); margin: 10px 0 20px;">
            Floor-to-Floor Unloading, Assembly &amp; Debris Disposal
          </h2>
          <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
            A complete relocation service means walking into a functional, comfortable home on moving day. Our trained local crew unloads cartons, reassembles dismounted furniture, and places heavy appliances in your designated rooms.
          </p>
          <ul class="pmr-checklist">
            <li>Reassembly of wooden double beds, wardrobes, study desks, and modular dining tables</li>
            <li>Placement of heavy refrigerators, washing machines, and home entertainment electronics</li>
            <li>Careful inspection of delicate chinaware and glassware in your direct presence</li>
            <li>Collection and prompt disposal of used packing cardboard, bubbles, tapes, and stretch film</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Section 7: Corporate, Public Sector & PSU Transfer Specialization -->
    <section class="pmr-section">
      <div class="pmr-heading-center">
        <h2>CCL, CMPDI, SAIL &amp; Government Transfer Specialization</h2>
        <p>
          Customized relocation protocols for public sector executives, railway officers, defense staff, and corporate managers.
        </p>
      </div>

      <div class="pmr-grid-3">
        <div class="pmr-card">
          <div class="pmr-card-icon">&#9874;</div>
          <h3>CCL &amp; CMPDI Headquarters Transfers</h3>
          <p>
            Officers transferring between Central Coalfields Limited (CCL) Darbhanga House, CMPDI Kanke Road, and mining areas receive customized door-to-door relocation with IBA-approved claim documents.
          </p>
        </div>
        <div class="pmr-card">
          <div class="pmr-card-icon">&#128646;</div>
          <h3>SAIL RDCIS, MECON &amp; HEC Relocations</h3>
          <p>
            Serving engineers and scientists from SAIL R&amp;D (RDCIS), MECON Limited, and HEC Township in Dhurwa, we manage household moves with itemized packing lists and compliant GST invoices.
          </p>
        </div>
        <div class="pmr-card">
          <div class="pmr-card-icon">&#127891;</div>
          <h3>Judiciary, High Court &amp; Bank Officers</h3>
          <p>
            Dedicated relocation assistance for judges and advocates of the High Court of Jharkhand, State Secretariat officials at Project Bhawan, and nationalized bank managers.
          </p>
        </div>
      </div>
    </section>

    <!-- Section 8: Complete Local Coverage Across All Ranchi Neighborhoods -->
    <section class="pmr-section pmr-section-gray">
      <div class="pmr-heading-center">
        <h2>Full Doorstep Coverage Across Every Ranchi Locality</h2>
        <p>
          Our localized fleet operates prompt doorstep surveys, same-day packing, and deliveries across all Ranchi zones:
        </p>
      </div>

      <div class="pmr-grid-3">
        <div class="pmr-card">
          <h3>Central &amp; Commercial Hubs</h3>
          <p>Prompt packing and moving support across busy commercial sectors:</p>
          <ul class="pmr-checklist">
            <li><strong>Main Road &amp; Lalpur:</strong> Circular Road, GEL Church Complex, Plaza Chowk</li>
            <li><strong>Ratu Road &amp; Pandra:</strong> Pandra Market Yard, ITI Bus Stand, Kishore Ganj</li>
            <li><strong>Hindpiri &amp; Daily Market:</strong> Upper Bazar, Cart Sarai Road, Church Road</li>
            <li><strong>Bariatu &amp; Booty More:</strong> RIMS Medical Campus, Tagore Hill Road, Chiraundi</li>
          </ul>
        </div>

        <div class="pmr-card">
          <h3>Prime Residential &amp; VIP Colonies</h3>
          <p>Tailored household moving for residential gated townships:</p>
          <ul class="pmr-checklist">
            <li><strong>Harmu Housing Colony:</strong> Anandpuri Chowk, Vidyanagar, Sahajanand Chowk</li>
            <li><strong>Morabadi &amp; Kanke Road:</strong> Oxygen Park, Rock Garden, BAU Campus</li>
            <li><strong>Ashok Nagar &amp; Kadru:</strong> VIP Colony, Argora Bypass, Harmu Bye Pass</li>
            <li><strong>Sail Township &amp; CMPDI:</strong> Dhurwa Sector 2 &amp; 3, Mecon Colony</li>
          </ul>
        </div>

        <div class="pmr-card">
          <h3>Southern &amp; Industrial Townships</h3>
          <p>High-frequency transportation across outer hubs:</p>
          <ul class="pmr-checklist">
            <li><strong>Doranda &amp; Hinoo:</strong> High Court Area, AG Colony, Airport Road, Shukla Colony</li>
            <li><strong>Hatia &amp; Birsa Chowk:</strong> Railway Colony, NIFFT, Singh More, Tupudana</li>
            <li><strong>Namkum &amp; Tatisilwai:</strong> Usha Martin Industrial Zone, Khelgaon, Mahilong</li>
            <li><strong>Dhurwa &amp; Ring Road:</strong> HEC Sector 4, JSCA Stadium, Shalimar Bazar</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Section 9: Top Outbound Intercity Corridors from Ranchi -->
    <section class="pmr-section">
      <div class="pmr-heading-center">
        <h2>Popular Long-Distance Moving Corridors from Ranchi</h2>
        <p>
          Explore dedicated container departures connecting Ranchi to key interstate commercial destinations:
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 14px; margin-top: 25px;">
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-patna-packers-and-movers" style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:14px 18px; text-decoration:none; color:#1e3a8a; font-weight:700; box-shadow:0 2px 6px rgba(0,0,0,0.04); display:flex; align-items:center; justify-content:space-between; transition:all 0.2s ease;">
          <span>&#8594; Ranchi to Patna Moving</span>
          <span style="color:#0284c7; font-size:0.85rem;">325 KM</span>
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-kolkata-packers-and-movers" style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:14px 18px; text-decoration:none; color:#1e3a8a; font-weight:700; box-shadow:0 2px 6px rgba(0,0,0,0.04); display:flex; align-items:center; justify-content:space-between; transition:all 0.2s ease;">
          <span>&#8594; Ranchi to Kolkata Express</span>
          <span style="color:#0284c7; font-size:0.85rem;">410 KM</span>
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-delhi-packers-and-movers" style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:14px 18px; text-decoration:none; color:#1e3a8a; font-weight:700; box-shadow:0 2px 6px rgba(0,0,0,0.04); display:flex; align-items:center; justify-content:space-between; transition:all 0.2s ease;">
          <span>&#8594; Ranchi to Delhi NCR</span>
          <span style="color:#0284c7; font-size:0.85rem;">1,240 KM</span>
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-bangalore-packers-and-movers" style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:14px 18px; text-decoration:none; color:#1e3a8a; font-weight:700; box-shadow:0 2px 6px rgba(0,0,0,0.04); display:flex; align-items:center; justify-content:space-between; transition:all 0.2s ease;">
          <span>&#8594; Ranchi to Bangalore IT Hub</span>
          <span style="color:#0284c7; font-size:0.85rem;">1,820 KM</span>
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-pune-packers-and-movers" style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:14px 18px; text-decoration:none; color:#1e3a8a; font-weight:700; box-shadow:0 2px 6px rgba(0,0,0,0.04); display:flex; align-items:center; justify-content:space-between; transition:all 0.2s ease;">
          <span>&#8594; Ranchi to Pune Relocation</span>
          <span style="color:#0284c7; font-size:0.85rem;">1,540 KM</span>
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-mumbai-packers-and-movers" style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:14px 18px; text-decoration:none; color:#1e3a8a; font-weight:700; box-shadow:0 2px 6px rgba(0,0,0,0.04); display:flex; align-items:center; justify-content:space-between; transition:all 0.2s ease;">
          <span>&#8594; Ranchi to Mumbai Metropolis</span>
          <span style="color:#0284c7; font-size:0.85rem;">1,620 KM</span>
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-hyderabad-packers-and-movers" style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:14px 18px; text-decoration:none; color:#1e3a8a; font-weight:700; box-shadow:0 2px 6px rgba(0,0,0,0.04); display:flex; align-items:center; justify-content:space-between; transition:all 0.2s ease;">
          <span>&#8594; Ranchi to Hyderabad Corridor</span>
          <span style="color:#0284c7; font-size:0.85rem;">1,260 KM</span>
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-bhubaneswar-packers-and-movers" style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:14px 18px; text-decoration:none; color:#1e3a8a; font-weight:700; box-shadow:0 2px 6px rgba(0,0,0,0.04); display:flex; align-items:center; justify-content:space-between; transition:all 0.2s ease;">
          <span>&#8594; Ranchi to Bhubaneswar</span>
          <span style="color:#0284c7; font-size:0.85rem;">460 KM</span>
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-jamshedpur-packers-and-movers" style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:14px 18px; text-decoration:none; color:#1e3a8a; font-weight:700; box-shadow:0 2px 6px rgba(0,0,0,0.04); display:flex; align-items:center; justify-content:space-between; transition:all 0.2s ease;">
          <span>&#8594; Ranchi to Jamshedpur Steel City</span>
          <span style="color:#0284c7; font-size:0.85rem;">130 KM</span>
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-dhanbad-packers-and-movers" style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:14px 18px; text-decoration:none; color:#1e3a8a; font-weight:700; box-shadow:0 2px 6px rgba(0,0,0,0.04); display:flex; align-items:center; justify-content:space-between; transition:all 0.2s ease;">
          <span>&#8594; Ranchi to Dhanbad Coal Capital</span>
          <span style="color:#0284c7; font-size:0.85rem;">165 KM</span>
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-bokaro-packers-and-movers" style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:14px 18px; text-decoration:none; color:#1e3a8a; font-weight:700; box-shadow:0 2px 6px rgba(0,0,0,0.04); display:flex; align-items:center; justify-content:space-between; transition:all 0.2s ease;">
          <span>&#8594; Ranchi to Bokaro Steel City</span>
          <span style="color:#0284c7; font-size:0.85rem;">110 KM</span>
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-hazaribagh-packers-and-movers" style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:14px 18px; text-decoration:none; color:#1e3a8a; font-weight:700; box-shadow:0 2px 6px rgba(0,0,0,0.04); display:flex; align-items:center; justify-content:space-between; transition:all 0.2s ease;">
          <span>&#8594; Ranchi to Hazaribagh Plateau</span>
          <span style="color:#0284c7; font-size:0.85rem;">95 KM</span>
        </a>
      </div>
    </section>

    <!-- Section 10: Frequently Asked Questions (6 FAQs) -->
    <section class="pmr-section pmr-section-gray">
      <div class="pmr-heading-center">
        <h2>Frequently Asked Questions: Shifting in Ranchi</h2>
        <p>
          Key information regarding rates, transit timelines, packing materials, and government claim documentation.
        </p>
      </div>

      <div style="max-width: 900px; margin: 0 auto;">
        <div class="pmr-faq-item">
          <h3>How much do packers and movers in Ranchi charge for local shifting?</h3>
          <p>
            Local home shifting charges in Ranchi generally range from Rs 3,500 to Rs 6,500 for a 1 BHK, Rs 6,500 to Rs 11,500 for a 2 BHK, and Rs 11,000 to Rs 18,500 for a 3 BHK depending on goods volume, packing material tier, and floor level.
          </p>
        </div>

        <div class="pmr-faq-item">
          <h3>Which localities in Ranchi are covered for same-day shifting?</h3>
          <p>
            Shree Ashirwad provides same-day shifting across all major Ranchi localities including Harmu Housing Colony, Lalpur, Morabadi, Bariatu, Doranda, Hatia, Ashok Nagar, Ratu Road, Kanke, Hinoo, Kokar, Namkum, and Dhurwa.
          </p>
        </div>

        <div class="pmr-faq-item">
          <h3>Do you provide IBA approved bills for bank and government employee claims in Ranchi?</h3>
          <p>
            Yes, we provide 100% authentic IBA approved moving bills with proper GST invoice, computerized consignment notes (bilty), and itemized transit insurance for claims at banks, PSUs, CCL, CMPDI, SAIL, and defense organizations.
          </p>
        </div>

        <div class="pmr-faq-item">
          <h3>How are delicate household items and electronics packed?</h3>
          <p>
            We enforce 5-layer protective packing utilizing high-density bubble wrap, edge-reinforced corner guards, 7-ply master corrugated cartons, waterproof stretch film, and custom wooden crating for LED TVs and glassware.
          </p>
        </div>

        <div class="pmr-faq-item">
          <h3>How do you handle car and bike transportation from Ranchi?</h3>
          <p>
            Vehicles are safely moved in specialized hydraulic car carrier trailers and custom wooden motorcycle crates with wheel chocks, security harness straps, and comprehensive transit insurance.
          </p>
        </div>

        <div class="pmr-faq-item">
          <h3>How do I book reliable movers and packers near me in Ranchi?</h3>
          <p>
            You can call our Ranchi customer support at +91 8409531615 or submit your requirements online for an immediate free doorstep physical survey or video estimation and instant written quote.
          </p>
        </div>
      </div>
    </section>

    <!-- Section 11: Call to Action Banner -->
    <section style="background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%); color: #ffffff; padding: 65px 25px; border-radius: 16px; text-align: center; margin-top: 40px;">
      <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; margin-bottom: 16px; color: #ffffff;">
        Book Your Ranchi Relocation Today
      </h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 720px; margin: 0 auto 30px;">
        Contact our Ranchi moving experts for an accurate written estimate, complimentary pre-move assessment, and scheduled doorstep delivery.
      </p>
      <div style="display: flex; justify-content: center; gap: 18px; flex-wrap: wrap;">
        <a href="tel:<?php echo PRIMARY_PHONE_RAW; ?>" style="background: #0284c7; color: #ffffff; font-weight: 700; padding: 14px 34px; border-radius: 10px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          Call Hotline: <?php echo PRIMARY_PHONE; ?>
        </a>
        <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" style="background: rgba(255,255,255,0.15); color: #ffffff; font-weight: 600; padding: 14px 28px; border-radius: 10px; text-decoration: none; border: 1px solid rgba(255,255,255,0.3);">
          WhatsApp Instant Quote &rarr;
        </a>
      </div>
    </section>

  </div>

  <?php include __DIR__ . '/../includes/footer.php'; ?>
  <script src="<?php echo SITE_BASE_URL; ?>/assets/js/main.js" defer></script>
</body>
</html>