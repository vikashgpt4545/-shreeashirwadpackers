<?php
/**
 * Ranchi to Gumla Packers and Movers - Shree Ashirwad Packers and Movers
 * 
 * High-performance, fully SEO-optimized dedicated route landing page for express household,
 * vehicle transport, and institutional relocation between Jharkhand's state capital (Ranchi)
 * and its administrative and tribal cultural district headquarters (Gumla).
 * 
 * Target Keyword: ranchi to gumla packers and movers / packers and movers ranchi to gumla
 */

// Define page-specific metadata
$page_title = "Ranchi to Gumla Packers & Movers | Shree Ashirwad Packers";
$page_description = "Top Ranchi to Gumla packers and movers by Shree Ashirwad. Same-day 2-hr shifting via NH-43, Collectorate & Govt transfer bills, 5-layer packing. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/ranchi-to-gumla-packers-and-movers";

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="keywords" content="ranchi to gumla packers and movers, packers and movers ranchi to gumla, house shifting ranchi to gumla, ranchi to gumla luggage parcel, ranchi to gumla car transport, gumla collectorate employee shifting, packers and movers tower chowk gumla">
  <link rel="canonical" href="<?php echo $canonical_url; ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
  <link rel="shortcut icon" href="<?php echo SITE_BASE_URL; ?>/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">

  <!-- Typography & CSS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta property="og:url" content="<?php echo $canonical_url; ?>">
  <meta property="og:type" content="article">
  <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg">
  <meta property="og:image:alt" content="Ranchi to Gumla Packers and Movers - Shree Ashirwad Express Fleet">
  <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
  <meta property="og:locale" content="en_IN">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg">

  <!-- Geo Meta Tags for Origin Hub: Ranchi -->
  <meta name="geo.region" content="IN-JH">
  <meta name="geo.placename" content="Ranchi">
  <meta name="geo.position" content="23.3441;85.3096">
  <meta name="ICBM" content="23.3441, 85.3096">

  <!-- Structured Data: MovingCompany Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "MovingCompany",
    "@id": "<?php echo $canonical_url; ?>/#movingcompany",
    "name": "Shree Ashirwad Packers and Movers - Ranchi to Gumla Route",
    "alternateName": "Ranchi Gumla Express Linehaul Movers",
    "url": "<?php echo $canonical_url; ?>",
    "logo": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
    "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
    "description": "<?php echo $page_description; ?>",
    "telephone": "+918409531615",
    "email": "enquiry@shreeashirwadpackers.com",
    "priceRange": "₹₹",
    "currenciesAccepted": "INR",
    "paymentAccepted": "Cash, UPI, Net Banking, Cheque",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Anandpuri Chowk, Vidyanagar Road, Harmu",
      "addressLocality": "Ranchi",
      "addressRegion": "Jharkhand",
      "postalCode": "834002",
      "addressCountry": "IN"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 23.3441,
      "longitude": 85.3096
    },
    "openingHoursSpecification": [
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
        "opens": "00:00",
        "closes": "23:59"
      }
    ],
    "areaServed": [
      { "@type": "City", "name": "Ranchi" },
      { "@type": "City", "name": "Gumla" },
      { "@type": "State", "name": "Jharkhand" }
    ]
  }
  </script>

  <!-- Structured Data: Service Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "@id": "<?php echo $canonical_url; ?>/#service",
    "serviceType": "Intercity Relocation, Household Shifting, Gumla District Administration Transfers & Banking Staff Shifting",
    "name": "Ranchi to Gumla Packers and Movers Service",
    "provider": {
      "@type": "MovingCompany",
      "name": "Shree Ashirwad Packers and Movers",
      "telephone": "+918409531615",
      "url": "https://www.shreeashirwadpackers.com/"
    },
    "areaServed": [
      { "@type": "City", "name": "Ranchi" },
      { "@type": "City", "name": "Gumla" }
    ],
    "description": "Specialized same-day intercity relocation corridor connecting Ranchi to Gumla via NH-43 through Nagri, Bero and Sisai. Features 2.0 to 2.5-hour direct transit, dustproof 5-layer packaging, IBA-approved transfer bills for district administration, police personnel, missionary educators and bank managers, with same-day complete setup.",
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Ranchi to Gumla Relocation Services",
      "itemListElement": [
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Same-Day Express Household Shifting (1 BHK, 2 BHK, 3 BHK, 4 BHK)" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Gumla District Administration & Police Shifting Kit" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Missionary Institution & Educator Relocation Package" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Enclosed Two-Wheeler Parcel & Family Car Transport" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Part-Load Shared Container Transport" } }
      ]
    }
  }
  </script>

  <!-- Structured Data: BreadcrumbList Schema -->
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
        "name": "Jharkhand Intercity Routes",
        "item": "<?php echo SITE_BASE_URL; ?>/#routes"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Ranchi to Gumla Packers and Movers",
        "item": "<?php echo $canonical_url; ?>"
      }
    ]
  }
  </script>

  <!-- Structured Data: FAQPage Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "How much does it cost to move household goods from Ranchi to Gumla?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Shifting a standard 1 BHK household from Ranchi to Gumla typically costs between ₹7,500 and ₹10,500. A standard 2 BHK household costs between ₹11,000 and ₹14,500, while a larger 3 BHK household costs between ₹15,000 and ₹19,500. These all-inclusive quotes cover premium 5-layer packing materials, trained loading crew in Ranchi, toll taxes on NH-43, dedicated closed container vehicle transport, unloading at Gumla, and basic furniture placement."
        }
      },
      {
        "@type": "Question",
        "name": "How much time does the relocation take from Ranchi to Gumla?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "The road distance between Ranchi and Gumla is approximately 95 to 105 km via the well-engineered NH-43 national highway through Bero and Sisai. A dedicated container truck covers this distance in roughly 2.0 to 2.5 hours. With morning packing scheduled at 8:00 AM in Ranchi, your consignment is safely delivered, unloaded, and arranged in Gumla on the very same day before 3:00 PM."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide IBA-approved moving bills for Gumla government and bank employee reimbursements?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. Shree Ashirwad Packers and Movers provides 100% compliant documentation adhering to government, judicial, banking, and educational relocation reimbursement mandates. We issue official GST-compliant tax invoices (SAC 9965/9967), computerized itemized packing inventories, Lorry Receipts (Consignment Notes / Bilty), and driver receipts recognized by the Gumla Collectorate, Sessions Court, and public sector banks."
        }
      },
      {
        "@type": "Question",
        "name": "How do you protect household furniture and electronics during highway transit across the plateau?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We secure all furniture and electronic appliances with our 5-Layer Defensive Packaging Shield: double bubble cushioning, non-scratch virgin foam underlay, heavy-gauge corrugated edge boards, and multi-pass industrial stretch film. Inside our weatherproof closed containers, items are anchored using heavy-duty nylon ratchet straps so that vibrations and sudden road braking do not cause cargo shifting or impact damage."
        }
      },
      {
        "@type": "Question",
        "name": "Can I transport my motorbike or scooter along with my household items to Gumla?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. We offer safe enclosed two-wheeler transit. We drain the fuel, insulate all delicate parts, chrome, and mirrors in bubble wrap, pack them inside corrugated crates, and anchor the wheels firmly inside the container. Your bike travels on the same dedicated truck alongside your furniture without a scratch."
        }
      },
      {
        "@type": "Question",
        "name": "Which areas in Gumla do you serve for doorstep delivery?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We deliver door-to-door across all localities in Gumla District, including Gumla Sadar Town, Court Area, Collectorate Colony, Tower Chowk, DSP Road, Sisai Road, Palkot Road, Vikas Nagar, Karondi, Dumbo, Railway Link Colony, and K.O. College Area."
        }
      }
    ]
  }
  </script>

  <style>
    /* Unique Route Styling: Tribal Ochre & Earth Slate Theme */
    .route-gumla-hero {
      background: linear-gradient(135deg, #0f172a 0%, #1e293b 45%, #78350f 100%);
      color: #ffffff;
      padding: 60px 0 50px;
      position: relative;
    }
    .route-gumla-hero h1 {
      font-size: 2.35rem;
      font-weight: 800;
      color: #ffffff;
      margin-bottom: 15px;
      line-height: 1.25;
      font-family: 'Outfit', sans-serif;
    }
    .route-gumla-hero p {
      font-size: 1.12rem;
      color: #fde68a;
      max-width: 820px;
      line-height: 1.6;
      margin-bottom: 25px;
    }
    .badge-gumla-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-bottom: 20px;
    }
    .badge-gumla-pill {
      background: rgba(253, 230, 138, 0.12);
      border: 1px solid rgba(245, 158, 11, 0.4);
      color: #fde68a;
      padding: 7px 16px;
      border-radius: 24px;
      font-size: 0.88rem;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    /* Action Call Bar */
    .call-gumla-bar {
      background: #b45309;
      color: #ffffff;
      border-radius: 8px;
      padding: 18px 24px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 15px;
      margin-top: 25px;
      box-shadow: 0 10px 25px rgba(180, 83, 9, 0.25);
    }
    .call-gumla-bar .lead-text {
      font-size: 1.1rem;
      font-weight: 700;
      color: #ffffff;
    }
    .call-gumla-bar .phone-wrap {
      display: flex;
      gap: 15px;
      align-items: center;
    }
    .btn-gumla-call {
      background: #ffffff;
      color: #b45309;
      font-weight: 800;
      padding: 10px 22px;
      border-radius: 6px;
      text-decoration: none;
      font-size: 1rem;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: all 0.2s ease;
    }
    .btn-gumla-call:hover {
      background: #fef3c7;
      color: #92400e;
      transform: translateY(-1px);
    }

    /* Content Layout */
    .route-gumla-body {
      padding: 50px 0;
      background: #fafaf9;
    }
    .section-gumla-title {
      font-size: 1.95rem;
      font-weight: 800;
      color: #1c1917;
      margin-bottom: 12px;
      font-family: 'Outfit', sans-serif;
      position: relative;
    }
    .section-gumla-title::after {
      content: '';
      display: block;
      width: 55px;
      height: 4px;
      background: #b45309;
      margin-top: 8px;
      border-radius: 2px;
    }
    .route-gumla-p {
      font-size: 1.02rem;
      line-height: 1.72;
      color: #44403c;
      margin-bottom: 20px;
    }

    /* Logistics Specs Grid */
    .specs-gumla-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 20px;
      margin: 30px 0;
    }
    .spec-gumla-card {
      background: #ffffff;
      border: 1px solid #e7e5e4;
      border-top: 4px solid #b45309;
      border-radius: 8px;
      padding: 22px;
      box-shadow: 0 4px 14px rgba(0,0,0,0.04);
    }
    .spec-gumla-card h4 {
      font-size: 1.1rem;
      font-weight: 700;
      color: #1c1917;
      margin: 0 0 8px;
    }
    .spec-gumla-card p {
      font-size: 0.94rem;
      color: #57534e;
      margin: 0;
      line-height: 1.5;
    }

    /* Tariff Table */
    .table-gumla-wrap {
      overflow-x: auto;
      margin: 30px 0;
      background: #ffffff;
      border: 1px solid #e7e5e4;
      border-radius: 8px;
      box-shadow: 0 4px 14px rgba(0,0,0,0.03);
    }
    .tariff-gumla-tbl {
      width: 100%;
      border-collapse: collapse;
      text-align: left;
    }
    .tariff-gumla-tbl th {
      background: #1c1917;
      color: #ffffff;
      padding: 15px 18px;
      font-weight: 700;
      font-size: 0.95rem;
    }
    .tariff-gumla-tbl td {
      padding: 14px 18px;
      border-bottom: 1px solid #f5f5f4;
      font-size: 0.93rem;
      color: #292524;
    }
    .tariff-gumla-tbl tr:nth-child(even) {
      background: #fffbeb;
    }
    .tariff-gumla-tbl tr:hover {
      background: #fef3c7;
    }

    /* Advisory Box */
    .advisory-gumla-box {
      background: #ffffff;
      border-left: 5px solid #b45309;
      border-radius: 8px;
      padding: 28px;
      margin: 35px 0;
      box-shadow: 0 6px 18px rgba(0,0,0,0.04);
    }
    .advisory-gumla-box h3 {
      font-size: 1.35rem;
      font-weight: 800;
      color: #1c1917;
      margin-top: 0;
      margin-bottom: 12px;
    }

    /* 5-Layer Shield */
    .shield-gumla-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
      gap: 16px;
      margin: 30px 0;
    }
    .shield-gumla-card {
      background: #ffffff;
      border: 1px solid #fed7aa;
      border-radius: 8px;
      padding: 20px;
      text-align: center;
      transition: all 0.2s ease;
    }
    .shield-gumla-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 18px rgba(180, 83, 9, 0.12);
      border-color: #f97316;
    }
    .shield-gumla-card .num {
      width: 38px;
      height: 38px;
      background: #ffedd5;
      color: #c2410c;
      font-weight: 800;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 1.1rem;
      margin-bottom: 12px;
    }
    .shield-gumla-card h5 {
      font-size: 1.02rem;
      font-weight: 700;
      color: #1c1917;
      margin: 0 0 6px;
    }
    .shield-gumla-card p {
      font-size: 0.88rem;
      color: #57534e;
      margin: 0;
      line-height: 1.45;
    }

    /* Workflow Timeline */
    .timeline-gumla {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(190px, 1fr));
      gap: 15px;
      margin: 30px 0;
    }
    .timeline-step-gumla {
      background: #ffffff;
      border: 1px solid #e7e5e4;
      border-radius: 8px;
      padding: 20px 16px;
      position: relative;
    }
    .timeline-step-gumla .step-tag {
      font-size: 0.78rem;
      font-weight: 800;
      color: #b45309;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      margin-bottom: 6px;
      display: block;
    }
    .timeline-step-gumla h4 {
      font-size: 1rem;
      font-weight: 700;
      color: #1c1917;
      margin: 0 0 8px;
    }
    .timeline-step-gumla p {
      font-size: 0.9rem;
      color: #57534e;
      line-height: 1.5;
      margin: 0;
    }

    /* Locality Matrix */
    .locality-split-gumla {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 25px;
      margin: 30px 0;
    }
    @media (max-width: 768px) {
      .locality-split-gumla {
        grid-template-columns: 1fr;
      }
      .route-gumla-hero h1 {
        font-size: 1.85rem;
      }
    }
    .locality-col-gumla {
      background: #ffffff;
      border: 1px solid #e7e5e4;
      border-radius: 10px;
      padding: 24px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.03);
    }
    .locality-col-gumla h4 {
      font-size: 1.15rem;
      font-weight: 800;
      color: #1c1917;
      margin-top: 0;
      margin-bottom: 15px;
      border-bottom: 2px solid #fef3c7;
      padding-bottom: 8px;
    }
    .locality-list-gumla {
      list-style: none;
      padding: 0;
      margin: 0;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 8px;
    }
    .locality-list-gumla li {
      font-size: 0.92rem;
      color: #44403c;
      padding: 5px 0;
      display: flex;
      align-items: center;
      gap: 6px;
    }
    .locality-list-gumla li::before {
      content: '✔';
      color: #b45309;
      font-weight: 800;
      font-size: 0.85rem;
    }

    /* Image Showcase Layout */
    .img-showcase-gumla {
      margin: 35px 0;
    }
    .img-showcase-gumla img {
      max-width: 580px;
      width: 100%;
      height: 290px;
      object-fit: cover;
      border-radius: 10px;
      margin: 0 auto;
      display: block;
      box-shadow: 0 6px 18px rgba(0,0,0,0.09);
    }
    .img-showcase-gumla .caption {
      font-size: 0.88rem;
      color: #78716c;
      margin-top: 9px;
      text-align: center;
    }

    /* CTA Banner */
    .cta-banner-gumla {
      background: linear-gradient(135deg, #b45309 0%, #0f172a 100%);
      color: #ffffff;
      padding: 40px 25px;
      border-radius: 10px;
      text-align: center;
      margin: 45px 0;
    }
    .cta-banner-gumla h3 {
      color: #ffffff;
      font-size: 1.85rem;
      margin-top: 0;
      margin-bottom: 12px;
    }
    .cta-banner-gumla p {
      color: #fde68a;
      font-size: 1.05rem;
      max-width: 750px;
      margin: 0 auto 20px;
      line-height: 1.6;
    }
    .btn-cta-amber {
      display: inline-block;
      background: #f59e0b;
      color: #1c1917;
      font-weight: 800;
      padding: 13px 30px;
      border-radius: 6px;
      text-decoration: none;
      font-size: 1.05rem;
      transition: all 0.2s ease;
    }
    .btn-cta-amber:hover {
      background: #fbbf24;
      color: #1c1917;
      transform: translateY(-2px);
    }

    /* FAQ */
    .faq-gumla-item {
      background: #ffffff;
      border: 1px solid #e7e5e4;
      border-radius: 8px;
      margin-bottom: 14px;
      overflow: hidden;
    }
    .faq-gumla-q {
      padding: 18px 22px;
      font-weight: 700;
      font-size: 1.05rem;
      color: #1c1917;
      background: #fffbeb;
      border-bottom: 1px solid #fed7aa;
      margin: 0;
    }
    .faq-gumla-a {
      padding: 18px 22px;
      font-size: 0.95rem;
      line-height: 1.68;
      color: #44403c;
      margin: 0;
    }

    /* Cluster Link Box */
    .cluster-box-gumla {
      background: #ffffff;
      border: 1px solid #fed7aa;
      border-radius: 10px;
      padding: 30px;
      margin-top: 45px;
    }
    .cluster-grid-gumla {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
      gap: 12px;
      margin-top: 15px;
    }
    .cluster-link-gumla {
      display: block;
      padding: 10px 14px;
      background: #fffbeb;
      border: 1px solid #fed7aa;
      border-radius: 6px;
      color: #1c1917;
      text-decoration: none;
      font-weight: 600;
      font-size: 0.92rem;
      transition: all 0.2s ease;
    }
    .cluster-link-gumla:hover {
      background: #b45309;
      color: #ffffff;
      border-color: #b45309;
    }
  </style>
</head>
<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<!-- Hero Section -->
<section class="route-gumla-hero">
  <div class="container">
    <h1>Ranchi to Gumla Packers and Movers | Express Household Relocation</h1>
    <p>Certified door-to-door household shifting, specialized Gumla District Collectorate and police department transfer documentation, missionary institution relocation, and dustproof sealed container fleet transit connecting Ranchi to Gumla in 2 hours via NH-43.</p>
    
    <div class="badge-gumla-grid">
      <span class="badge-gumla-pill">⚡ 2.0 to 2.5-Hour Direct NH-43 Linehaul</span>
      <span class="badge-gumla-pill">🔒 100% Same-Day Shifting & Setup</span>
      <span class="badge-gumla-pill">📋 Gumla Collectorate & Banking Transfer Bills</span>
      <span class="badge-gumla-pill">🛡️ Weatherproof Sealed Containers</span>
      <span class="badge-gumla-pill">📦 Zero Transshipment Guarantee</span>
    </div>

    <!-- Quick Call Action Bar -->
    <div class="call-gumla-bar">
      <div class="lead-text">
        Relocating between Ranchi & Gumla? Reserve your dedicated container truck today:
      </div>
      <div class="phone-wrap">
        <a href="tel:+918409531615" class="btn-gumla-call">📞 Call 8409531615</a>
        <a href="tel:+919835565233" class="btn-gumla-call">📱 Call 9835565233</a>
      </div>
    </div>
  </div>
</section>

<!-- Main Body Content -->
<main class="route-gumla-body container">

  <!-- Section 1: Introduction & Route Overview -->
  <section>
    <h2 class="section-gumla-title">Professional Household & Institutional Relocation from Ranchi to Gumla</h2>
    <p class="route-gumla-p">
      Connecting Jharkhand’s capital city of Ranchi to the southwestern administrative headquarters of Gumla across a direct 100-kilometer national highway corridor, this route serves as a crucial residential link between the state capital and the Chota Nagpur southern plateau. Gumla is an important administrative center—anchoring the Gumla District Collectorate, Sessions Court, and Police Headquarters—while functioning as an educational and cultural hub with prominent missionary institutions, schools, and growing agro-business networks. Whether you are an officer transferring between the Jharkhand State Secretariat in Ranchi and the Gumla Collectorate, a doctor or healthcare specialist posted to Sadar Hospital, a bank manager on rotational posting, an educator joining Kartik Oraon College (K.O. College), or a family moving into a new residence in Tower Chowk or Vikas Nagar, <strong>Shree Ashirwad Packers and Movers</strong> provides an uncompromising, timely, and damage-free moving experience.
    </p>
    <p class="route-gumla-p">
      Unlike unorganized local transporters who rely on open-back trucks and multi-leg parcel transshipment hubs, Shree Ashirwad operates a dedicated, closed-container logistics network. Our fleet of all-weather container vehicles travels directly via National Highway 43 (NH-43, formerly NH-23) through Nagri, Bero, and Sisai. Because your consignment travels inside a sealed, GPS-tracked container assigned exclusively to your family or institution, your valuable belongings are shielded from transit rain, highway dust, humidity, and accidental loss. With loading initiated in Ranchi early in the morning, our seasoned crew delivers your items to your Gumla address within 2 to 2.5 hours, completing unloading and basic furniture assembly on the very same day.
    </p>

    <!-- Verified Image Asset 1 -->
    <div class="img-showcase-gumla">
      <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Ranchi to Gumla Packers and Movers Container Truck Fleet" width="580" height="290" loading="lazy">
      <div class="caption">Figure 1: Weatherproof sealed container linehaul truck loading in Ranchi for express 2-hour transit to Gumla via NH-43.</div>
    </div>
  </section>

  <!-- Section 2: Highway Corridor Logistics & Navigation -->
  <section style="margin-top: 40px;">
    <h2 class="section-gumla-title">Highway Corridor Logistics: Navigating NH-43 from Ranchi to Gumla</h2>
    <p class="route-gumla-p">
      The highway journey from Ranchi to Gumla spans approximately 95 to 105 kilometers across the undulating Chota Nagpur plateau and South Koel River basin. Departing Ranchi via Kathal More, Argora, or Birsa Chowk onto NH-43, the route passes Nagri, reaches Bero, and continues southwest through Sisai before entering Gumla town via Sisai Road or Tower Chowk. The highway is well-paved, featuring smooth 2-lane and 4-lane sections that allow steady speeds and minimal cargo vibration.
    </p>
    
    <div class="specs-gumla-grid">
      <div class="spec-gumla-card">
        <h4>🛣️ Highway Corridor</h4>
        <p>Direct linehaul along well-paved NH-43 (old NH-23) passing through Nagri, Bero, and Sisai straight into Gumla Sadar.</p>
      </div>
      <div class="spec-gumla-card">
        <h4>📏 Accurate Road Distance</h4>
        <p>Approximately 95 to 105 kilometers depending on your departure neighborhood in Ranchi and destination sector in Gumla.</p>
      </div>
      <div class="spec-gumla-card">
        <h4>⏱️ Express Transit Time</h4>
        <p>2.0 to 2.5 hours of smooth highway driving. Complete move completed within 4 to 5 hours from packing to room setup.</p>
      </div>
      <div class="spec-gumla-card">
        <h4>🛡️ Weatherproof Security</h4>
        <p>Weatherproof sealed containers, internal shock-absorbing ratchet straps, and airtight packaging safeguarding against plateau dust.</p>
      </div>
    </div>

    <p class="route-gumla-p">
      While the terrain between Ranchi and Gumla does not feature perilous mountain ghats, the route passes through agricultural and forested belts where seasonal rains and airborne dust are prevalent. Casual transporters who use open tarpaulin covers often expose goods to water seepage during sudden monsoon showers. Shree Ashirwad utilizes rigid, factory-sealed steel and FRP container bodies. Inside our trucks, heavy items such as double beds, almirahs, refrigerators, and dining sets are firmly secured against vehicle walls using heavy-duty nylon lashing belts, eliminating any risk of internal cargo shifting or impact damage.
    </p>
  </section>

  <!-- Section 3: Transparent Pricing & Tariff Schedule Table -->
  <section style="margin-top: 40px;">
    <h2 class="section-gumla-title">Clear & Itemized Tariff Schedule: Ranchi to Gumla Shifting Rates</h2>
    <p class="route-lohardaga-p">
      Shree Ashirwad Packers and Movers upholds complete commercial transparency with zero hidden charges. We provide all-inclusive written quotations covering every operational phase: premium multi-layer packing supplies, professional loading crew at Ranchi, dedicated sealed container vehicle fuel and toll expenses, unloading at your Gumla home, and placement of furniture in designated rooms.
    </p>

    <div class="table-gumla-wrap">
      <table class="tariff-gumla-tbl">
        <thead>
          <tr>
            <th>Home Configuration / Cargo Type</th>
            <th>Standard Packing & Transport</th>
            <th>Premium Multi-Layer & Setup</th>
            <th>Estimated Transit Time</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>1 BHK Apartment / Executive Flat</strong></td>
            <td>₹7,500 – ₹9,500</td>
            <td>₹9,500 – ₹11,000</td>
            <td>2.0 Hours (Same Day)</td>
          </tr>
          <tr>
            <td><strong>2 BHK Complete Family Household</strong></td>
            <td>₹11,000 – ₹13,000</td>
            <td>₹13,000 – ₹15,000</td>
            <td>2.0 – 2.5 Hours (Same Day)</td>
          </tr>
          <tr>
            <td><strong>3 BHK Spacious Home / Duplex</strong></td>
            <td>₹15,000 – ₹17,500</td>
            <td>₹17,500 – ₹20,000</td>
            <td>2.5 Hours (Same Day)</td>
          </tr>
          <tr>
            <td><strong>4 BHK / Bungalow Relocation</strong></td>
            <td>₹19,500 – ₹23,500</td>
            <td>₹23,500 – ₹27,500</td>
            <td>Dedicated Linehaul Fleet</td>
          </tr>
          <tr>
            <td><strong>Two-Wheeler Parcel (Bike / Scooter)</strong></td>
            <td>₹2,000 – ₹2,800</td>
            <td>₹2,800 – ₹3,500</td>
            <td>Enclosed Secured Space</td>
          </tr>
          <tr>
            <td><strong>Family Car Carrier (Sedan / SUV)</strong></td>
            <td>₹5,000 – ₹7,000</td>
            <td>₹7,000 – ₹9,000</td>
            <td>Hydraulic Enclosed Carrier</td>
          </tr>
        </tbody>
      </table>
    </div>
    <p style="font-size: 0.88rem; color: #78716c; margin-top: -10px;">
      <em>*Disclaimer: Exact costs depend on overall cargo volume, floor levels and elevator access at both locations, and optional insurance coverage. Call our helpline for an exact, binding quotation.</em>
    </p>
  </section>

  <!-- Section 4: District Administration, Missionary & Banking Advisory -->
  <section style="margin-top: 40px;">
    <div class="advisory-gumla-box">
      <h3>🏛️ Gumla District Administration, Missionary Institutions & Banking Relocation Support</h3>
      <p class="route-gumla-p" style="margin-bottom: 15px;">
        As the headquarters of Gumla District, Gumla town frequently sees transfers involving administrative officials, judicial officers, police inspectors, bank branch managers, and missionary educators. Shree Ashirwad Packers and Movers has specialized institutional moving procedures tailored to these rigorous administrative requirements:
      </p>
      <ul style="color: #44403c; line-height: 1.8; margin-bottom: 15px; padding-left: 20px;">
        <li><strong>District Collectorate & Police Claims:</strong> We provide 100% compliant documentation adhering to Jharkhand government transfer reimbursement rules: GST tax invoices under SAC 9965/9967, stamped Consignment Notes (Lorry Receipt / Bilty), itemized packing inventories, and driver receipts.</li>
        <li><strong>Missionary Schools & Charitable Trusts:</strong> Complete relocation assistance for educators, healthcare workers, and church administrators transferring between Ranchi diocesan institutions and Gumla schools and hospitals.</li>
        <li><strong>Public Sector Bank Employee Transfers:</strong> Official estimates and billing kits conforming to State Bank of India, Bank of India, and Jharkhand Rajya Gramin Bank relocation allowance guidelines.</li>
        <li><strong>Judicial & Healthcare Staff:</strong> Direct delivery into residential quarters at Court Colony or Sadar Hospital campus with uncrating and bed reassembly included.</li>
      </ul>
      <p class="route-gumla-p" style="margin-bottom: 0;">
        Whether you are moving into the Court Colony, DSP Road, Tower Chowk, or Palkot Road, our supervisors ensure a completely smooth, compliant transition with zero out-of-pocket reimbursement complications.
      </p>
    </div>

    <!-- Verified Image Asset 2 -->
    <div class="img-showcase-gumla">
      <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg" alt="Wooden Furniture Wrapping for Gumla Shifting" width="580" height="290" loading="lazy">
      <div class="caption">Figure 2: Multi-layer edge protection and stretch wrapping applied to large wooden furniture before departure to Gumla.</div>
    </div>
  </section>

  <!-- Section 5: 5-Layer Defensive Packaging Shield -->
  <section style="margin-top: 40px;">
    <h2 class="section-gumla-title">Our 5-Layer Defensive Packaging Shield for Plateau & Highway Transit</h2>
    <p class="route-gumla-p">
      The Ranchi-to-Gumla corridor involves road vibrations and exposure to red-soil dust. To safeguard your prized possessions against surface friction, moisture, and road bumps, Shree Ashirwad implements an industry-leading 5-layer protective packing protocol:
    </p>

    <div class="shield-gumla-grid">
      <div class="shield-gumla-card">
        <div class="num">1</div>
        <h5>Soft Polyethylene Underlay</h5>
        <p>Virgin non-scratch foam applied directly to polished wooden furniture, glass panels, and appliance exterior surfaces to prevent friction abrasions.</p>
      </div>
      <div class="shield-gumla-card">
        <div class="num">2</div>
        <h5>Shock-Absorbing Bubble Wrap</h5>
        <p>Heavy-duty double bubble wrap providing critical impact absorption for flat-screen LED TVs, microwave ovens, chinaware, and mirrors.</p>
      </div>
      <div class="shield-gumla-card">
        <div class="num">3</div>
        <h5>Rigid Cardboard Edge Guards</h5>
        <p>Reinforced multi-ply angled cardboard protectors fitted to wardrobe corners, dining tables, and sofa edges to prevent corner-crush damage.</p>
      </div>
      <div class="shield-gumla-card">
        <div class="num">4</div>
        <h5>Heavy 7-Ply Outer Cartons</h5>
        <p>Crush-resistant virgin 7-ply corrugated shipping boxes engineered to withstand vertical stacking inside closed container trucks.</p>
      </div>
      <div class="shield-gumla-card">
        <div class="num">5</div>
        <h5>Airtight Polyethylene Film</h5>
        <p>Industrial stretch wrap heat-wrapped around all packages to form a hermetic seal that blocks out red soil dust, humidity, and road grime.</p>
      </div>
    </div>

    <p class="route-gumla-p">
      Specialized handling is also applied to fragile pooja items, marble deities, brass idols, and home mandirs. Our crews construct custom padded wooden frames or heavy foam enclosures, treating sacred items with the highest standard of cultural care and physical security.
    </p>

    <!-- Verified Image Asset 3 -->
    <div class="img-showcase-gumla">
      <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/kitchen-crockery-bubble-packing-ranchi.jpg" alt="Kitchen Crockery Bubble Packing in Ranchi for Gumla Relocation" width="580" height="290" loading="lazy">
      <div class="caption">Figure 3: Multi-layer bubble wrapping and cell dividers applied to delicate glassware and chinaware before transit.</div>
    </div>
  </section>

  <!-- Section 6: Interactive 5-Step Moving Process -->
  <section style="margin-top: 40px;">
    <h2 class="section-gumla-title">Our Structured 5-Phase Relocation Process: Ranchi to Gumla</h2>
    <p class="route-gumla-p">
      Moving homes between Ranchi and Gumla is fast, systematic, and clearly coordinated from start to finish:
    </p>

    <div class="timeline-gumla">
      <div class="timeline-step-gumla">
        <span class="step-tag">Step 01</span>
        <h4>Survey & Quote</h4>
        <p>Free in-home survey in Ranchi or instant digital video inventory assessment. Transparent, binding quote provided with zero surprise charges.</p>
      </div>
      <div class="timeline-step-gumla">
        <span class="step-tag">Step 02</span>
        <h4>5-Layer Packing</h4>
        <p>Uniformed packing specialists arrive with premium materials. Furniture is disassembled, labeled room-by-room, and boxed systematically.</p>
      </div>
      <div class="timeline-step-gumla">
        <span class="step-tag">Step 03</span>
        <h4>Container Loading</h4>
        <p>Goods are loaded into dedicated closed containers using hydraulic tailgates and secured with heavy-duty interior cargo straps.</p>
      </div>
      <div class="timeline-step-gumla">
        <span class="step-tag">Step 04</span>
        <h4>Express Linehaul</h4>
        <p>Direct non-stop transit along NH-43 via Nagri, Bero, and Sisai. Live GPS updates keep you informed of truck progress in real time.</p>
      </div>
      <div class="timeline-step-gumla">
        <span class="step-tag">Step 05</span>
        <h4>Unload & Setup</h4>
        <p>Unloading at your Gumla residence, furniture reassembly, placing heavy items in rooms, and optional debris disposal.</p>
      </div>
    </div>
  </section>

  <!-- Section 7: Dual-City Locality Coverage Matrix -->
  <section style="margin-top: 40px;">
    <h2 class="section-gumla-title">Comprehensive Neighborhood Coverage in Ranchi & Gumla</h2>
    <p class="route-gumla-p">
      Shree Ashirwad provides direct doorstep pickup from every municipal ward and gated community in Ranchi, paired with guaranteed doorstep delivery throughout Gumla District:
    </p>

    <div class="locality-split-gumla">
      <div class="locality-col-gumla">
        <h4>📍 Ranchi Departure Localities (Doorstep Pickup)</h4>
        <ul class="locality-list-gumla">
          <li>Harmu Housing Colony</li>
          <li>Morabadi & Tagore Hill</li>
          <li>Bariatu & Booty More</li>
          <li>Kanke Road & CMPDI</li>
          <li>Doranda & AG Colony</li>
          <li>Ashok Nagar & Kadru</li>
          <li>Lalpur & Circular Road</li>
          <li>Kathal More & Argora</li>
          <li>Birsa Chowk & Hatia</li>
          <li>Namkum & Tupudana</li>
        </ul>
      </div>

      <div class="locality-col-gumla">
        <h4>🎯 Gumla Delivery Sectors (Doorstep Drop)</h4>
        <ul class="locality-list-gumla">
          <li>Gumla Sadar Town</li>
          <li>Court Area & Collectorate</li>
          <li>Tower Chowk & Main Market</li>
          <li>DSP Road & Officers Colony</li>
          <li>Sisai Road Residential Area</li>
          <li>Palkot Road Sector</li>
          <li>Vikas Nagar Colony</li>
          <li>Karondi & Dumbo</li>
          <li>Railway Link Colony</li>
          <li>K.O. College Campus Area</li>
        </ul>
      </div>
    </div>

    <!-- Verified Image Asset 4 -->
    <div class="img-showcase-gumla">
      <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/professional-loading-crew-ranchi.jpg" alt="Professional Loading Crew Securing Household Boxes in Ranchi" width="580" height="290" loading="lazy">
      <div class="caption">Figure 4: Professional loading crew securing household cartons and furniture in Ranchi for Gumla relocation.</div>
    </div>
  </section>

  <!-- Section 8: Two-Wheeler & Family Car Shifting Advisory -->
  <section style="margin-top: 40px;">
    <h2 class="section-gumla-title">Two-Wheeler & Family Car Relocation to Gumla</h2>
    <p class="route-gumla-p">
      Riding a motorcycle or driving an extra family car across highway freight traffic during a busy moving day can be exhausting. Shree Ashirwad Packers and Movers offers secure, enclosed vehicle relocation services tailored for two-wheelers and passenger cars:
    </p>
    <p class="route-gumla-p">
      <strong>Motorcycle & Scooter Relocation:</strong> Two-wheelers undergo complete physical inspection and photo documentation in Ranchi. The fuel tank is safely emptied, rearview mirrors and indicators are dismantled and bubble-wrapped, and the entire vehicle body is enveloped in heavy corrugated sheets and shrink film. Inside our enclosed carriers, bikes are secured in dedicated steel wheel-chock fixtures, preventing any tipping or surface scratching during transit.
    </p>
    <p class="route-gumla-p">
      <strong>Car Carrier Solutions:</strong> For passenger sedans, hatchbacks, and SUVs, we utilize dedicated covered car carriers equipped with hydraulic ramps. Your vehicle is driven onto rubber-padded runners and strapped down with heavy-duty polyester wheel ties. We perform odometer logging, battery isolations, and comprehensive pre-dispatch condition reports with full transit insurance coverage.
    </p>
  </section>

  <!-- Section 9: Call-to-Action Banner -->
  <section class="cta-banner-gumla">
    <h3>Plan Your Stress-Free Ranchi to Gumla Move Today</h3>
    <p>Contact our senior logistics coordinator for an instant written quotation, customized packing plan, and guaranteed same-day linehaul container booking.</p>
    <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
      <a href="tel:+918409531615" class="btn-cta-amber">📞 Call 8409531615</a>
      <a href="tel:+919835565233" class="btn-cta-amber">📱 Call 9835565233</a>
    </div>
  </section>

  <!-- Section 10: Frequently Asked Questions (FAQ) -->
  <section style="margin-top: 40px;">
    <h2 class="section-gumla-title">Frequently Asked Questions: Ranchi to Gumla Relocation</h2>
    
    <div class="faq-gumla-item">
      <h3 class="faq-gumla-q">How much does it cost to move household goods from Ranchi to Gumla?</h3>
      <p class="faq-gumla-a">
        Shifting a standard 1 BHK household from Ranchi to Gumla typically costs between ₹7,500 and ₹10,500. A standard 2 BHK household costs between ₹11,000 and ₹14,500, while a larger 3 BHK household costs between ₹15,000 and ₹19,500. These all-inclusive quotes cover premium 5-layer packing materials, trained loading crew in Ranchi, toll taxes on NH-43, dedicated closed container vehicle transport, unloading at Gumla, and basic furniture placement.
      </p>
    </div>

    <div class="faq-gumla-item">
      <h3 class="faq-gumla-q">How much time does the relocation take from Ranchi to Gumla?</h3>
      <p class="faq-gumla-a">
        The road distance between Ranchi and Gumla is approximately 95 to 105 km via the well-engineered NH-43 national highway through Bero and Sisai. A dedicated container truck covers this distance in roughly 2.0 to 2.5 hours. With morning packing scheduled at 8:00 AM in Ranchi, your consignment is safely delivered, unloaded, and arranged in Gumla on the very same day before 3:00 PM.
      </p>
    </div>

    <div class="faq-gumla-item">
      <h3 class="faq-gumla-q">Do you provide IBA-approved moving bills for Gumla government and bank employee reimbursements?</h3>
      <p class="faq-gumla-a">
        Yes. Shree Ashirwad Packers and Movers provides 100% compliant documentation adhering to government, judicial, banking, and educational relocation reimbursement mandates. We issue official GST-compliant tax invoices (SAC 9965/9967), computerized itemized packing inventories, Lorry Receipts (Consignment Notes / Bilty), and driver receipts recognized by the Gumla Collectorate, Sessions Court, and public sector banks.
      </p>
    </div>

    <div class="faq-gumla-item">
      <h3 class="faq-gumla-q">How do you protect household furniture and electronics during highway transit across the plateau?</h3>
      <p class="faq-gumla-a">
        We secure all furniture and electronic appliances with our 5-Layer Defensive Packaging Shield: double bubble cushioning, non-scratch virgin foam underlay, heavy-gauge corrugated edge boards, and multi-pass industrial stretch film. Inside our weatherproof closed containers, items are anchored using heavy-duty nylon ratchet straps so that vibrations and sudden road braking do not cause cargo shifting or impact damage.
      </p>
    </div>

    <div class="faq-gumla-item">
      <h3 class="faq-gumla-q">Can I transport my motorbike or scooter along with my household items to Gumla?</h3>
      <p class="faq-gumla-a">
        Yes. We offer safe enclosed two-wheeler transit. We drain the fuel, insulate all delicate parts, chrome, and mirrors in bubble wrap, pack them inside corrugated crates, and anchor the wheels firmly inside the container. Your bike travels on the same dedicated truck alongside your furniture without a scratch.
      </p>
    </div>

    <div class="faq-gumla-item">
      <h3 class="faq-gumla-q">Which areas in Gumla do you serve for doorstep delivery?</h3>
      <p class="faq-gumla-a">
        We deliver door-to-door across all localities in Gumla District, including Gumla Sadar Town, Court Area, Collectorate Colony, Tower Chowk, DSP Road, Sisai Road, Palkot Road, Vikas Nagar, Karondi, Dumbo, Railway Link Colony, and K.O. College Area.
      </p>
    </div>
  </section>

  <!-- Section 11: Interlinked Cluster Navigation Module -->
  <div class="cluster-box-gumla">
    <h3 style="margin-top:0; color:#1c1917;">Related Relocation Services & Jharkhand Intercity Corridors</h3>
    <p style="font-size: 0.95rem; color: #57534e;">Explore connected relocation hubs, pricing charts, and regional corridors connecting with Ranchi and Gumla:</p>
    <div class="cluster-grid-gumla">
      <a href="<?php echo SITE_BASE_URL; ?>/" class="cluster-link-gumla">🏠 Ranchi Headquarters Main Hub</a>
      <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="cluster-link-gumla">💰 Ranchi Relocation Tariff Chart</a>
      <a href="<?php echo SITE_BASE_URL; ?>/complete-guide-to-house-shifting-in-ranchi" class="cluster-link-gumla">📖 Complete Ranchi Shifting Guide</a>
      <a href="<?php echo SITE_BASE_URL; ?>/household-shifting-services-in-ranchi" class="cluster-link-gumla">📦 Household Shifting in Ranchi</a>
      <a href="<?php echo SITE_BASE_URL; ?>/car-transport-in-ranchi" class="cluster-link-gumla">🚗 Car Carrier Transport in Ranchi</a>
      <a href="<?php echo SITE_BASE_URL; ?>/bike-transport-in-ranchi" class="cluster-link-gumla">🏍️ Bike Transport in Ranchi</a>
      <a href="<?php echo SITE_BASE_URL; ?>/gumla-to-ranchi-packers-and-movers" class="cluster-link-gumla">🛣️ Gumla to Ranchi Return Route</a>
      <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gumla" class="cluster-link-gumla">📍 Packers and Movers in Gumla</a>
      <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-simdega-packers-and-movers" class="cluster-link-gumla">🛣️ Ranchi to Simdega Movers</a>
      <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-lohardaga-packers-and-movers" class="cluster-link-gumla">🛣️ Ranchi to Lohardaga Movers</a>
      <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-daltonganj-packers-and-movers" class="cluster-link-gumla">🛣️ Ranchi to Daltonganj Movers</a>
      <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-chaibasa-packers-and-movers" class="cluster-link-gumla">🛣️ Ranchi to Chaibasa Movers</a>
      <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-ramgarh-packers-and-movers" class="cluster-link-gumla">🛣️ Ranchi to Ramgarh Movers</a>
    </div>
  </div>

</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>
