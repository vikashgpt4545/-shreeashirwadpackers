<?php
/**
 * Ranchi to Chatra Packers and Movers - Shree Ashirwad Packers and Movers
 * 
 * High-performance, fully SEO-optimized dedicated route landing page for express household,
 * vehicle transport, and industrial-institutional relocation between Jharkhand's state capital
 * (Ranchi) and its northwestern power and mineral hub district (Chatra).
 * 
 * Target Keyword: ranchi to chatra packers and movers / packers and movers ranchi to chatra
 */

// Define page-specific metadata
$page_title = "Ranchi to Chatra Packers & Movers | Shree Ashirwad Packers";
$page_description = "Top Ranchi to Chatra packers and movers by Shree Ashirwad. Same-day 4-hr shifting via NH-22/522, NTPC & Govt transfer bills, 5-layer packing. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/ranchi-to-chatra-packers-and-movers";

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
  <meta name="keywords" content="ranchi to chatra packers and movers, packers and movers ranchi to chatra, house shifting ranchi to chatra, ranchi to chatra luggage parcel, ranchi to chatra car transport, chatra collectorate employee shifting, ntpc tandwa employee relocation, packers and movers main road chatra">
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
  <meta property="og:image:alt" content="Ranchi to Chatra Packers and Movers - Shree Ashirwad Express Fleet">
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

  <!-- Scoped Page Styling (Theme: Copper Ochre & Powerhouse Charcoal) -->
  <style>
    :root {
      --cht-primary: #b45309;
      --cht-primary-dark: #78350f;
      --cht-primary-light: #d97706;
      --cht-accent: #c2410c;
      --cht-accent-hover: #9a3412;
      --cht-slate-900: #0f172a;
      --cht-slate-800: #1e293b;
      --cht-slate-700: #334155;
      --cht-slate-100: #f1f5f9;
      --cht-slate-50: #fafaf9;
      --cht-card-bg: #ffffff;
      --cht-border: #e7e5e4;
      --cht-radius: 12px;
      --cht-shadow: 0 10px 25px -5px rgba(180, 83, 9, 0.08), 0 8px 10px -6px rgba(180, 83, 9, 0.04);
      --cht-shadow-lg: 0 20px 30px -10px rgba(180, 83, 9, 0.16);
    }

    .chatra-wrapper {
      font-family: 'Plus Jakarta Sans', sans-serif;
      color: var(--cht-slate-800);
      line-height: 1.7;
      background-color: #ffffff;
    }

    .chatra-hero-section {
      background: linear-gradient(135deg, var(--cht-slate-900) 0%, #1c1917 40%, var(--cht-primary-dark) 100%);
      color: #ffffff;
      padding: 60px 0 55px;
      position: relative;
      overflow: hidden;
    }

    .chatra-hero-section::before {
      content: '';
      position: absolute;
      top: -40%;
      right: -15%;
      width: 600px;
      height: 600px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(217, 119, 6, 0.15) 0%, rgba(255, 255, 255, 0) 70%);
      pointer-events: none;
    }

    .chatra-breadcrumb {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 8px;
      font-size: 0.88rem;
      margin-bottom: 22px;
    }

    .chatra-breadcrumb a {
      color: #cbd5e1;
      text-decoration: none;
      transition: color 0.2s ease;
    }

    .chatra-breadcrumb a:hover {
      color: #fed7aa;
    }

    .chatra-breadcrumb span {
      color: #64748b;
    }

    .chatra-breadcrumb .current {
      color: #fed7aa;
      font-weight: 600;
    }

    .chatra-hero-title {
      font-family: 'Outfit', sans-serif;
      font-size: 2.75rem;
      font-weight: 800;
      line-height: 1.2;
      margin-bottom: 18px;
      letter-spacing: -0.02em;
    }

    .chatra-hero-title span {
      color: #f59e0b;
      display: inline-block;
    }

    .chatra-hero-subtitle {
      font-size: 1.15rem;
      color: #e2e8f0;
      max-width: 820px;
      margin-bottom: 30px;
      line-height: 1.65;
    }

    .chatra-pills-row {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-bottom: 35px;
    }

    .chatra-pill {
      background: rgba(255, 255, 255, 0.08);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255, 255, 255, 0.18);
      border-radius: 50px;
      padding: 8px 18px;
      font-size: 0.88rem;
      font-weight: 600;
      color: #ffedd5;
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }

    .chatra-pill i {
      color: #f59e0b;
    }

    .chatra-cta-group {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      align-items: center;
    }

    .chatra-btn-primary {
      background: var(--cht-primary);
      color: #ffffff;
      font-weight: 700;
      padding: 14px 28px;
      border-radius: 8px;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      transition: all 0.25s ease;
      box-shadow: 0 4px 14px rgba(180, 83, 9, 0.4);
    }

    .chatra-btn-primary:hover {
      background: var(--cht-primary-dark);
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(180, 83, 9, 0.5);
      color: #ffffff;
    }

    .chatra-btn-secondary {
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.25);
      color: #ffffff;
      font-weight: 600;
      padding: 14px 24px;
      border-radius: 8px;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: background 0.25s ease;
    }

    .chatra-btn-secondary:hover {
      background: rgba(255, 255, 255, 0.2);
      color: #ffffff;
    }

    .chatra-action-bar {
      background: #1c1917;
      color: #ffffff;
      padding: 18px 0;
      border-bottom: 3px solid var(--cht-primary);
    }

    .chatra-action-bar-inner {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      gap: 15px;
    }

    .chatra-action-bar-item {
      display: flex;
      align-items: center;
      gap: 12px;
      font-size: 0.95rem;
    }

    .chatra-action-bar-item i {
      font-size: 1.25rem;
      color: #f59e0b;
    }

    .chatra-action-phone {
      font-weight: 700;
      color: #f59e0b;
      text-decoration: none;
    }

    .chatra-section {
      padding: 60px 0;
    }

    .chatra-section-alt {
      background-color: var(--cht-slate-50);
      padding: 60px 0;
    }

    .chatra-heading-group {
      text-align: center;
      max-width: 800px;
      margin: 0 auto 45px;
    }

    .chatra-badge {
      display: inline-block;
      background: rgba(180, 83, 9, 0.1);
      color: var(--cht-primary);
      padding: 5px 14px;
      border-radius: 50px;
      font-size: 0.82rem;
      font-weight: 700;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      margin-bottom: 12px;
    }

    .chatra-h2 {
      font-family: 'Outfit', sans-serif;
      font-size: 2.1rem;
      font-weight: 800;
      color: var(--cht-slate-900);
      margin-bottom: 14px;
      letter-spacing: -0.01em;
    }

    .chatra-p-lead {
      font-size: 1.05rem;
      color: var(--cht-slate-700);
    }

    .chatra-card {
      background: #ffffff;
      border: 1px solid var(--cht-border);
      border-radius: var(--cht-radius);
      padding: 30px;
      box-shadow: var(--cht-shadow);
      transition: all 0.3s ease;
      height: 100%;
    }

    .chatra-card:hover {
      box-shadow: var(--cht-shadow-lg);
      transform: translateY(-4px);
      border-color: rgba(180, 83, 9, 0.3);
    }

    .chatra-card-icon {
      width: 54px;
      height: 54px;
      border-radius: 12px;
      background: rgba(180, 83, 9, 0.1);
      color: var(--cht-primary);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      margin-bottom: 20px;
    }

    .chatra-h3 {
      font-family: 'Outfit', sans-serif;
      font-size: 1.35rem;
      font-weight: 700;
      color: var(--cht-slate-900);
      margin-bottom: 12px;
    }

    .chatra-table-container {
      background: #ffffff;
      border-radius: var(--cht-radius);
      border: 1px solid var(--cht-border);
      overflow-x: auto;
      box-shadow: var(--cht-shadow);
      margin-bottom: 25px;
    }

    .chatra-table {
      width: 100%;
      border-collapse: collapse;
      text-align: left;
    }

    .chatra-table th {
      background: var(--cht-primary);
      color: #ffffff;
      padding: 16px 20px;
      font-family: 'Outfit', sans-serif;
      font-weight: 700;
      font-size: 0.95rem;
    }

    .chatra-table td {
      padding: 16px 20px;
      border-bottom: 1px solid var(--cht-border);
      font-size: 0.92rem;
    }

    .chatra-table tr:last-child td {
      border-bottom: none;
    }

    .chatra-table tr:hover td {
      background: #fffbeb;
    }

    .chatra-table .price-val {
      font-weight: 700;
      color: var(--cht-primary);
      font-size: 1.05rem;
    }

    .chatra-media-box {
      border-radius: var(--cht-radius);
      overflow: hidden;
      box-shadow: var(--cht-shadow);
      margin-bottom: 25px;
      border: 1px solid var(--cht-border);
      background: #ffffff;
    }

    .chatra-media-box img {
      width: 100%;
      height: auto;
      display: block;
      transition: transform 0.4s ease;
    }

    .chatra-media-box:hover img {
      transform: scale(1.02);
    }

    .chatra-media-caption {
      padding: 14px 18px;
      font-size: 0.88rem;
      color: var(--cht-slate-700);
      background: var(--cht-slate-50);
      border-top: 1px solid var(--cht-border);
      font-style: italic;
    }

    .chatra-route-stat-box {
      background: #ffffff;
      border-left: 4px solid var(--cht-primary);
      border-radius: 0 var(--cht-radius) var(--cht-radius) 0;
      padding: 22px 25px;
      box-shadow: var(--cht-shadow);
      margin-bottom: 20px;
    }

    .chatra-matrix-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 25px;
    }

    .chatra-matrix-col {
      background: #ffffff;
      border-radius: var(--cht-radius);
      border: 1px solid var(--cht-border);
      padding: 25px;
      box-shadow: var(--cht-shadow);
    }

    .chatra-matrix-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .chatra-matrix-list li {
      padding: 8px 0;
      border-bottom: 1px dashed var(--cht-border);
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 0.92rem;
    }

    .chatra-matrix-list li:last-child {
      border-bottom: none;
    }

    .chatra-matrix-list li i {
      color: var(--cht-primary);
      font-size: 0.85rem;
    }

    .chatra-faq-item {
      background: #ffffff;
      border: 1px solid var(--cht-border);
      border-radius: var(--cht-radius);
      margin-bottom: 15px;
      padding: 24px;
      box-shadow: var(--cht-shadow);
      transition: border-color 0.25s ease;
    }

    .chatra-faq-item:hover {
      border-color: var(--cht-primary);
    }

    .chatra-faq-q {
      font-family: 'Outfit', sans-serif;
      font-size: 1.15rem;
      font-weight: 700;
      color: var(--cht-slate-900);
      margin-bottom: 10px;
      display: flex;
      align-items: flex-start;
      gap: 10px;
    }

    .chatra-faq-q i {
      color: var(--cht-accent);
      margin-top: 3px;
    }

    .chatra-faq-a {
      font-size: 0.95rem;
      color: var(--cht-slate-700);
      line-height: 1.7;
    }

    .chatra-cluster-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 15px;
    }

    .chatra-cluster-link {
      display: block;
      background: #ffffff;
      border: 1px solid var(--cht-border);
      border-radius: 8px;
      padding: 16px;
      text-decoration: none;
      color: var(--cht-slate-800);
      font-weight: 600;
      font-size: 0.9rem;
      transition: all 0.25s ease;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.02);
    }

    .chatra-cluster-link:hover {
      background: var(--cht-primary);
      color: #ffffff;
      border-color: var(--cht-primary);
      transform: translateY(-2px);
      box-shadow: 0 6px 12px rgba(180, 83, 9, 0.15);
    }

    @media (max-width: 991px) {
      .chatra-hero-title {
        font-size: 2.2rem;
      }
      .chatra-h2 {
        font-size: 1.8rem;
      }
    }

    @media (max-width: 767px) {
      .chatra-hero-section {
        padding: 40px 0;
      }
      .chatra-hero-title {
        font-size: 1.85rem;
      }
      .chatra-cta-group {
        flex-direction: column;
        align-items: stretch;
      }
      .chatra-btn-primary, .chatra-btn-secondary {
        justify-content: center;
      }
    }
  </style>
</head>
<body class="chatra-wrapper">

<?php
// Include site-wide navigation header
require_once __DIR__ . '/includes/header.php';
?>

<!-- 1. Hero Section -->
<section class="chatra-hero-section">
  <div class="container">
    <!-- Breadcrumb List -->
    <nav class="chatra-breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo SITE_BASE_URL; ?>/">Home</a>
      <span>/</span>
      <a href="<?php echo SITE_BASE_URL; ?>/">Packers & Movers Ranchi</a>
      <span>/</span>
      <span class="current">Ranchi to Chatra Shifting</span>
    </nav>

    <div class="row align-items-center">
      <div class="col-lg-12">
        <h1 class="chatra-hero-title">
          Ranchi to Chatra <span>Packers & Movers</span> Services
        </h1>
        <p class="chatra-hero-subtitle">
          Professional, safe, and dependable household relocation, corporate employee shifting, and vehicle transport between Ranchi and Chatra. Shree Ashirwad Packers and Movers operates dedicated closed container trucks connecting Jharkhand's capital with Chatra Sadar, Simaria, and the NTPC North Karanpura (Tandwa) power corridor. Enjoy guaranteed same-day 4-hour transit, 100% compliant transfer bills, and industrial-grade 5-layer dustproof packaging.
        </p>

        <!-- Route Feature Badges -->
        <div class="chatra-pills-row">
          <div class="chatra-pill">
            <i class="fa fa-road"></i> 3.5-Hour Direct Highway Linehaul
          </div>
          <div class="chatra-pill">
            <i class="fa fa-clock-o"></i> Guaranteed Same-Day Loading & Unloading
          </div>
          <div class="chatra-pill">
            <i class="fa fa-file-text-o"></i> NTPC Tandwa, CCL & Govt Transfer Invoices
          </div>
          <div class="chatra-pill">
            <i class="fa fa-shield"></i> All-Weather Sealed Dustproof Containers
          </div>
        </div>

        <!-- Call to Actions -->
        <div class="chatra-cta-group">
          <a href="tel:8409531615" class="chatra-btn-primary">
            <i class="fa fa-phone"></i> Call Express Team: 084095 31615
          </a>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quotation%20for%20Ranchi%20to%20Chatra%20shifting." class="chatra-btn-secondary" target="_blank" rel="noopener">
            <i class="fa fa-whatsapp"></i> Instant WhatsApp Quotation
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 2. Instant Inquiry & Direct Action Bar -->
<section class="chatra-action-bar">
  <div class="container">
    <div class="chatra-action-bar-inner">
      <div class="chatra-action-bar-item">
        <i class="fa fa-map-marker"></i>
        <span><strong>Dispatch Center:</strong> Kokar Industrial Area / Booty More, Ranchi</span>
      </div>
      <div class="chatra-action-bar-item">
        <i class="fa fa-truck"></i>
        <span><strong>Receiving Destination:</strong> Main Road, Collectorate & Tandwa Corridor, Chatra</span>
      </div>
      <div class="chatra-action-bar-item">
        <i class="fa fa-phone-square"></i>
        <span><strong>Helpline:</strong> <a href="tel:8409531615" class="chatra-action-phone">8409531615</a> / <a href="tel:9835565233" class="chatra-action-phone">9835565233</a></span>
      </div>
    </div>
  </div>
</section>

<!-- 3. Highway Corridor Logistics & Route Overview -->
<section class="chatra-section">
  <div class="container">
    <div class="chatra-heading-group">
      <span class="chatra-badge">Highway Corridor Logistics</span>
      <h2 class="chatra-h2">Ranchi to Chatra Moving Corridor: Highway Mechanics & Route Navigation</h2>
      <p class="chatra-p-lead">
        Connecting the capital city of Ranchi with Chatra—the northwestern threshold of Jharkhand and home to the gigantic NTPC North Karanpura mega power project and rich coal belts—requires specialized vehicle selection and experienced route management.
      </p>
    </div>

    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="chatra-route-stat-box">
          <h3 class="chatra-h3">Primary Route: NH-20 & NH-522 via Hazaribagh & Simaria</h3>
          <p>
            The smoothest commercial freight corridor connects Ranchi to Chatra via the 4-lane NH-20 expressway through Ormanjhi, Ramgarh bypass, and Hazaribagh cutoff, then turning west onto NH-522 via Simaria into Chatra Sadar. Spanning approximately <strong>140 to 148 kilometers</strong>, this route avoids rough rural roads and allows our closed container trucks to complete transit in just <strong>3.5 to 4.5 hours</strong>.
          </p>
        </div>

        <div class="chatra-route-stat-box">
          <h3 class="chatra-h3">Alternate Industrial Route: NH-39 & SH-19 via Kuru, Chandwa & Balumath</h3>
          <p>
            The alternate route branches from Ranchi along NH-39 through Kuru and Chandwa, continuing north along SH-19 through Balumath and Simaria to Chatra. Measuring approximately <strong>135 to 140 kilometers</strong>, this alignment offers direct connectivity for consignments bound for the mining hubs of Tandwa, Amrapali, and Magadh opencast coal fields.
          </p>
        </div>

        <div class="chatra-route-stat-box">
          <h3 class="chatra-h3">Coal Dust & Industrial Atmosphere Safeguards</h3>
          <p>
            The North Karanpura industrial basin features significant mining vehicle movement and airborne coal and mineral particles. Shree Ashirwad Packers and Movers utilizes hermetically sealed container bodies with heavy rubber gaskets around rear double doors, ensuring zero ingress of abrasive dust into mattresses, electronics, or upholstered furniture during transit.
          </p>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="chatra-media-box">
          <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Ranchi to Chatra Packers and Movers Container Fleet">
          <div class="chatra-media-caption">
            Figure 1: Sealed weatherproof container trucks traversing the Ranchi-Hazaribagh-Simaria-Chatra highway route with complete protection against highway elements.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 4. Transparent Tariff & Moving Cost Matrix -->
<section class="chatra-section-alt">
  <div class="container">
    <div class="chatra-heading-group">
      <span class="chatra-badge">Transparent Tariff Schedule</span>
      <h2 class="chatra-h2">Ranchi to Chatra Packers and Movers Rate Card</h2>
      <p class="chatra-p-lead">
        We provide upfront, transparent quotations with complete breakdown of packing supplies, transport vehicle freight, loading, unloading, and labor.
      </p>
    </div>

    <div class="chatra-table-container">
      <table class="chatra-table">
        <thead>
          <tr>
            <th>Shifting Type / Home Configuration</th>
            <th>Distance / Corridor</th>
            <th>Packing Materials Included</th>
            <th>Estimated Transit Time</th>
            <th>Standard Tariff Range</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>1 BHK Apartment Complete Move</strong></td>
            <td>135 - 145 km (NH-20/522)</td>
            <td>3-Layer Bubble, Corrugated Roll, Stretch Film</td>
            <td>3.5 - 4.5 Hours</td>
            <td><span class="price-val">₹6,800 - ₹9,800</span></td>
          </tr>
          <tr>
            <td><strong>2 BHK Family Household Relocation</strong></td>
            <td>135 - 145 km (NH-20/522)</td>
            <td>5-Layer Heavy Foam, Edge Protectors, Corrugated Boxes</td>
            <td>3.5 - 4.5 Hours</td>
            <td><span class="price-val">₹10,500 - ₹15,000</span></td>
          </tr>
          <tr>
            <td><strong>3 BHK Executive Villa / Flat Shifting</strong></td>
            <td>135 - 145 km (NH-20/522)</td>
            <td>5-Layer Premium, Wooden Crating for Fragiles, Foam Blankets</td>
            <td>4.0 - 5.0 Hours</td>
            <td><span class="price-val">₹15,000 - ₹22,000</span></td>
          </tr>
          <tr>
            <td><strong>4 BHK / Large Bungalow Shifting</strong></td>
            <td>135 - 145 km (NH-20/522)</td>
            <td>Full Multi-Layer Packaging, Dedicated 19-ft Closed Container</td>
            <td>4.5 - 5.5 Hours</td>
            <td><span class="price-val">₹21,000 - ₹29,000</span></td>
          </tr>
          <tr>
            <td><strong>Two-Wheeler / Motorbike Parcel</strong></td>
            <td>135 - 145 km (NH-20/522)</td>
            <td>Double Bubble Layer, Cardboard Casing, Mirror Foam</td>
            <td>Same-Day Dispatch</td>
            <td><span class="price-val">₹1,800 - ₹3,200</span></td>
          </tr>
          <tr>
            <td><strong>Sedan / SUV Car Carrier Transit</strong></td>
            <td>135 - 145 km (NH-20/522)</td>
            <td>Wheel Chocks, Enclosed Carrier / Trained Pilot Driving</td>
            <td>Same-Day Delivery</td>
            <td><span class="price-val">₹4,500 - ₹7,200</span></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="row mt-4">
      <div class="col-md-4">
        <div class="chatra-card">
          <div class="chatra-card-icon"><i class="fa fa-calculator"></i></div>
          <h3 class="chatra-h3">Zero Hidden Extras</h3>
          <p>
            Your price quote explicitly incorporates all loading labor, vehicle fuel, NH-20 expressway toll taxes, unloading at your Chatra residence, and room placement.
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="chatra-card">
          <div class="chatra-card-icon"><i class="fa fa-file-text"></i></div>
          <h3 class="chatra-h3">100% Tax & GST Compliant</h3>
          <p>
            We supply authentic GST invoices (SAC Code 9965 / 9967) essential for claiming employee relocation allowances from NTPC, CCL, central PSUs, banks, and state ministries.
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="chatra-card">
          <div class="chatra-card-icon"><i class="fa fa-shield"></i></div>
          <h3 class="chatra-h3">Transit Insurance Coverage</h3>
          <p>
            Protect high-value home theater systems, solid wooden furniture, and electronics with optional declared-value transit insurance offering complete peace of mind.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 5. Specialized Audiences: NTPC North Karanpura, CCL Mining & Collectorate Advisory -->
<section class="chatra-section">
  <div class="container">
    <div class="chatra-heading-group">
      <span class="chatra-badge">Specialized Shifting Verticals</span>
      <h2 class="chatra-h2">NTPC North Karanpura (Tandwa), CCL Coalfields & District Administrative Shifting</h2>
      <p class="chatra-p-lead">
        Chatra district combines intensive industrial mega-projects with vital civil administration and cultural centers. We deliver specialized relocation packages designed around each sector's operational requirements.
      </p>
    </div>

    <div class="row">
      <div class="col-lg-6 mb-4">
        <div class="chatra-card">
          <div class="chatra-card-icon"><i class="fa fa-bolt"></i></div>
          <h3 class="chatra-h3">NTPC North Karanpura Super Thermal Power Project (Tandwa)</h3>
          <p>
            NTPC’s 3x660 MW North Karanpura Super Thermal Power Project in Tandwa is one of India's flagship supercritical power facilities. Engineers, operational technicians, safety managers, and corporate officers frequently transfer between NTPC’s regional headquarters in Ranchi and the Tandwa township campus.
          </p>
          <p>
            Shree Ashirwad Packers and Movers provides specialized moving solutions for NTPC personnel. We package sensitive electronics, modular kitchen setups, workstations, and family belongings with protective stretch film, providing gate-pass documentation and IBA-approved corporate bills accepted seamlessly by NTPC finance divisions.
          </p>
        </div>
      </div>

      <div class="col-lg-6 mb-4">
        <div class="chatra-card">
          <div class="chatra-card-icon"><i class="fa fa-cubes"></i></div>
          <h3 class="chatra-h3">Central Coalfields Limited (CCL) Mining Executives</h3>
          <p>
            Chatra district houses major CCL opencast projects including the massive Amrapali and Magadh mining blocks. Executives, surveyors, mechanical engineers, and coal logistics supervisors relocating between Ranchi (Darbhanga House) and field postings in Chatra rely on our heavy-duty container transport.
          </p>
          <p>
            We deploy dustproof sealed packing to safeguard household electronics, furniture, and personal effects against the fine particulate coal dust prevalent across the mining belt.
          </p>
        </div>
      </div>

      <div class="col-lg-6 mb-4">
        <div class="chatra-card">
          <div class="chatra-card-icon"><i class="fa fa-university"></i></div>
          <h3 class="chatra-h3">District Collectorate, Civil Court & Police Administration</h3>
          <p>
            Officers, magistrates, and administrative staff regularly rotate between the Jharkhand State Secretariat / Police Headquarters in Ranchi and the Chatra District Collectorate, Civil Court, and Police Lines.
          </p>
          <p>
            Our dedicated government relocation package includes scheduled weekend packing, safe transport of official records and library collections, solid teakwood furniture handling, and prompt GST bill and consignment note issuance for government treasury reimbursement.
          </p>
        </div>
      </div>

      <div class="col-lg-6 mb-4">
        <div class="chatra-card">
          <div class="chatra-card-icon"><i class="fa fa-graduation-cap"></i></div>
          <h3 class="chatra-h3">Education, Healthcare, Banking & Cultural Institutions</h3>
          <p>
            Doctors rotating to Chatra Sadar Hospital, faculty members at Chatra College, banking executives from SBI and BOI, and trust administrators managing the historic Maa Bhadrakali Temple complex at Itkhori choose our direct door-to-door transit.
          </p>
          <p>
            We manage delicate laboratory kits, religious artwork, books, and household furnishings with utmost attention to safety, hygiene, and timely delivery.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 6. 5-Layer Defensive Packaging Shield -->
<section class="chatra-section-alt">
  <div class="container">
    <div class="chatra-heading-group">
      <span class="chatra-badge">Protection Engineering</span>
      <h2 class="chatra-h2">5-Layer Defensive Packaging Protocol for Dust & Vibration Resistance</h2>
      <p class="chatra-p-lead">
        Navigating highways near mining belts and industrial corridors requires specialized multi-layer defense against vibration, shocks, and fine coal-dust infiltration.
      </p>
    </div>

    <div class="row align-items-center">
      <div class="col-lg-6 mb-4">
        <div class="chatra-media-box">
          <img src="<?php echo SITE_BASE_URL; ?>/images/waterproof-container-loading-jharkhand.jpg" alt="Waterproof Container Loading for Ranchi to Chatra Transit">
          <div class="chatra-media-caption">
            Figure 2: Sealed container loading ensuring zero coal dust, humidity, or highway grit reaches packaged goods during NH-20/522 transit.
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-4">
        <div class="chatra-media-box">
          <img src="<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg" alt="Wooden Furniture Wrapping for Chatra Shifting">
          <div class="chatra-media-caption">
            Figure 3: Multi-layer corrugated wrapping and bubble padding shielding wooden beds and executive wardrobes against transit friction.
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="chatra-card">
          <div class="chatra-card-icon"><i class="fa fa-cubes"></i></div>
          <h3 class="chatra-h3">Layer 1 & 2: Air-Pocket Bubble Wrap & Foam Corners</h3>
          <p>
            Fragile items, mirror glass, TV panels, and wooden corners are swaddled in premium virgin bubble wrap and dense polyethylene foam corner protectors. This dampens shocks from road joints and speed bumps along the Simaria-Chatra road.
          </p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="chatra-card">
          <div class="chatra-card-icon"><i class="fa fa-archive"></i></div>
          <h3 class="chatra-h3">Layer 3 & 4: 5-Ply Corrugated Boards & Heavy Cartons</h3>
          <p>
            Heavy furniture surfaces, wardrobes, and kitchenware are boxed using heavy-duty 5-ply corrugated sheets. Crockery and delicate stemware are placed in partitioned honeycomb cartons with shredded craft cushioning.
          </p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="chatra-card">
          <div class="chatra-card-icon"><i class="fa fa-shield"></i></div>
          <h3 class="chatra-h3">Layer 5: Industrial Elastic Moisture & Dust Film</h3>
          <p>
            The exterior of every packed item is sealed with multiple wraps of heavy-gauge stretch film. This airtight barrier guarantees complete immunity against outdoor coal dust, highway diesel soot, and seasonal rains.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 7. Step-by-Step Moving Process -->
<section class="chatra-section">
  <div class="container">
    <div class="chatra-heading-group">
      <span class="chatra-badge">Operational Workflow</span>
      <h2 class="chatra-h2">5-Stage Structured Moving Process from Ranchi to Chatra</h2>
      <p class="chatra-p-lead">
        Our time-tested process ensures total transparency, punctuality, and stress-free execution from initial inquiry to final furniture setup.
      </p>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="chatra-card">
          <div class="chatra-card-icon"><i class="fa fa-list-ol"></i></div>
          <h3 class="chatra-h3">Stage 1: Pre-Move Assessment & Transparent Quote</h3>
          <p>
            Our relocation supervisor conducts an in-person physical assessment at your Ranchi residence or an item-by-item video walk-through. We calculate vehicle volume requirements, determine delicate packing necessities, and provide a binding written price quote with zero hidden extras.
          </p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="chatra-card">
          <div class="chatra-card-icon"><i class="fa fa-dropbox"></i></div>
          <h3 class="chatra-h3">Stage 2: Systematic Packing & Color-Coded Labeling</h3>
          <p>
            On moving day, our uniform-clad packing specialists arrive on time with fresh cartons, bubble wrap, packing paper, and tape. Every carton is distinctly labeled by room (Master Bedroom, Kitchen, Living Room, Industrial Gear) and itemized in a comprehensive packing inventory list.
          </p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="chatra-card">
          <div class="chatra-card-icon"><i class="fa fa-truck"></i></div>
          <h3 class="chatra-h3">Stage 3: Scientific Container Loading & Ratchet Lashing</h3>
          <p>
            Heavy appliances and wooden furniture are placed at the base of our closed container trucks, followed by lighter cartons and delicate goods. Cargo is strapped tightly using heavy-duty ratchet webbing to prevent any movement while driving along the highway.
          </p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="chatra-card">
          <div class="chatra-card-icon"><i class="fa fa-compass"></i></div>
          <h3 class="chatra-h3">Stage 4: Express Linehaul Transit via Hazaribagh & Simaria</h3>
          <p>
            The container departs Ranchi for the 140 km highway run. Equipped with GPS tracking, you receive regular location updates as our vehicle navigates past Ramgarh, Hazaribagh bypass, and Simaria, ensuring full visibility until arrival at your Chatra address.
          </p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="chatra-card">
          <div class="chatra-card-icon"><i class="fa fa-home"></i></div>
          <h3 class="chatra-h3">Stage 5: Unloading, Reassembly & Room Placement</h3>
          <p>
            Upon reaching Chatra or Tandwa, our team carefully unloads all items into designated rooms. Beds, dining tables, and modular units dismantled in Ranchi are reassembled. We remove leftover packaging waste, leaving your new home clean, comfortable, and immediately livable.
          </p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="chatra-card" style="background: linear-gradient(135deg, var(--cht-primary) 0%, var(--cht-primary-dark) 100%); color: #ffffff;">
          <div class="chatra-card-icon" style="background: rgba(255, 255, 255, 0.15); color: #f59e0b;"><i class="fa fa-check-circle"></i></div>
          <h3 class="chatra-h3" style="color: #ffffff;">100% Peace of Mind Guarantee</h3>
          <p style="color: #ffedd5;">
            With more than 15 years of operational experience across Jharkhand, Shree Ashirwad Packers and Movers guarantees zero lost parcels, zero unexpected rate hikes, and 100% customer satisfaction for every move.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 8. Dual-City Locality Coverage Matrix -->
<section class="chatra-section-alt">
  <div class="container">
    <div class="chatra-heading-group">
      <span class="chatra-badge">Locality Coverage Matrix</span>
      <h2 class="chatra-h2">Ranchi Pickup Points to Chatra Destination Neighborhoods</h2>
      <p class="chatra-p-lead">
        We serve every single sector and suburb across the Ranchi capital territory, providing seamless door-to-door delivery throughout Chatra municipal and industrial areas.
      </p>
    </div>

    <div class="chatra-matrix-grid">
      <!-- Ranchi Localities -->
      <div class="chatra-matrix-col">
        <h3 class="chatra-h3"><i class="fa fa-map-marker" style="color: var(--cht-primary);"></i> Ranchi Origin Hub (Pickup Localities)</h3>
        <p style="font-size: 0.9rem; color: var(--cht-slate-700); margin-bottom: 15px;">
          Express pickup available across all major residential, administrative, and commercial localities in Ranchi:
        </p>
        <ul class="chatra-matrix-list">
          <li><i class="fa fa-check"></i> Harmu Housing Colony & Vidhyapati Nagar</li>
          <li><i class="fa fa-check"></i> Morabadi, Tagore Hill & Antu Chowk</li>
          <li><i class="fa fa-check"></i> Bariatu, RIMS Colony & Booty More</li>
          <li><i class="fa fa-check"></i> Lalpur, Circular Road, Burdwan Compound & Kokar</li>
          <li><i class="fa fa-check"></i> Doranda, Hinoo, Birsa Chowk & AG Colony</li>
          <li><i class="fa fa-check"></i> Ashok Nagar, Kadru & Argora Bypass</li>
          <li><i class="fa fa-check"></i> Kanke Road, BNR Colony & Rock Garden Area</li>
          <li><i class="fa fa-check"></i> Ratu Road, Pandra, Kathal More & ITI Bus Stand</li>
          <li><i class="fa fa-check"></i> Hatia, Dhurwa, HEC Sector Areas & Tupudana</li>
          <li><i class="fa fa-check"></i> Namkum, Tatisilwai & Rampur Industrial Belt</li>
        </ul>
      </div>

      <!-- Chatra Localities -->
      <div class="chatra-matrix-col">
        <h3 class="chatra-h3"><i class="fa fa-map-pin" style="color: var(--cht-accent);"></i> Chatra Destination Hub (Delivery Sectors)</h3>
        <p style="font-size: 0.9rem; color: var(--cht-slate-700); margin-bottom: 15px;">
          Direct door-to-door unloading, room placement, and transit delivery across all Chatra areas:
        </p>
        <ul class="chatra-matrix-list">
          <li><i class="fa fa-check"></i> Chatra Sadar, Main Road & Bus Stand Area</li>
          <li><i class="fa fa-check"></i> Collectorate, Court Area & Civil Lines Quarters</li>
          <li><i class="fa fa-check"></i> Dhab Mohalla, Gudri Bazar & Market Complex</li>
          <li><i class="fa fa-check"></i> Kisunpur, Gari Khurd & Line Mohalla</li>
          <li><i class="fa fa-check"></i> Simaria Chowk & Simaria Block Residential Areas</li>
          <li><i class="fa fa-check"></i> Tandwa Town & NTPC North Karanpura Township</li>
          <li><i class="fa fa-check"></i> Amrapali & Magadh CCL Mining Colony Areas</li>
          <li><i class="fa fa-check"></i> Itkhori Road, Bhadrakali Temple Corridor</li>
          <li><i class="fa fa-check"></i> Hunterganj Link & Gidhaur Road Belt</li>
          <li><i class="fa fa-check"></i> Chatra College Area & Education Colony</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 9. Kitchen Crockery, Fragiles & Vehicle Shifting Advisory -->
<section class="chatra-section">
  <div class="container">
    <div class="chatra-heading-group">
      <span class="chatra-badge">Specialized Fragiles & Vehicles</span>
      <h2 class="chatra-h2">Delicate Kitchen Chinaware Packing & Vehicle Transport to Chatra</h2>
      <p class="chatra-p-lead">
        From delicate glassware and kitchen chinaware to family motorbikes and cars, we engineer custom transit safety protocols for every item class.
      </p>
    </div>

    <div class="row align-items-center">
      <div class="col-lg-6 mb-4">
        <div class="chatra-card">
          <h3 class="chatra-h3"><i class="fa fa-glass" style="color: var(--cht-primary);"></i> Delicate Kitchen Chinaware & Glassware Packaging</h3>
          <p>
            Kitchen crockery and glass items are among the most vulnerable goods during highway moves. We wrap every ceramic plate, crystal glass, and cup individually in virgin bubble wrap, packing them upright in heavy-duty double-wall cartons with cellular dividers.
          </p>
          <p>
            Cartons are clearly marked "FRAGILE / GLASS - THIS SIDE UP" and positioned in top cargo tiers to eliminate crushing pressure during transit.
          </p>
        </div>
      </div>

      <div class="col-lg-6 mb-4">
        <div class="chatra-card">
          <h3 class="chatra-h3"><i class="fa fa-motorcycle" style="color: var(--cht-accent);"></i> Two-Wheeler & Four-Wheeler Automobile Shifting</h3>
          <p>
            Need your commuter motorcycle or car transported to Chatra or Tandwa? We provide covered container two-wheeler parcels with bubble wrap, corrugated sheets, and wheel chocks to prevent transit scratches.
          </p>
          <p>
            Cars are inspected with joint physical condition mapping, providing safe door-to-door delivery throughout Chatra district.
          </p>
        </div>
      </div>
    </div>

    <div class="chatra-media-box">
      <img src="<?php echo SITE_BASE_URL; ?>/images/kitchen-crockery-bubble-packing-ranchi.jpg" alt="Kitchen Crockery Bubble Packing for Chatra Relocation">
      <div class="chatra-media-caption">
        Figure 4: Delicate kitchen chinaware and glassware individually bubble-padded and compartmentalized for the Ranchi to Chatra moving corridor.
      </div>
    </div>
  </div>
</section>

<!-- 10. Frequently Asked Questions (FAQ) Accordion -->
<section class="chatra-section-alt">
  <div class="container">
    <div class="chatra-heading-group">
      <span class="chatra-badge">Help & Frequently Asked Questions</span>
      <h2 class="chatra-h2">Frequently Asked Questions: Ranchi to Chatra Relocation</h2>
      <p class="chatra-p-lead">
        Find clear, practical answers to common questions regarding our Ranchi to Chatra packers and movers services.
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-10">
        <!-- FAQ 1 -->
        <div class="chatra-faq-item">
          <div class="chatra-faq-q">
            <i class="fa fa-question-circle"></i>
            How much time does it take for goods to reach Chatra from Ranchi?
          </div>
          <div class="chatra-faq-a">
            The road distance between Ranchi and Chatra via NH-20 and NH-522 (via Hazaribagh and Simaria) is approximately 140 to 148 kilometers. Direct container transit typically takes between 3.5 and 4.5 hours. When packing begins at 7:30 AM in Ranchi, the consignment arrives in Chatra by 1:00 PM, allowing our crew to unload, unpack, and arrange your furniture on the very same day.
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="chatra-faq-item">
          <div class="chatra-faq-q">
            <i class="fa fa-question-circle"></i>
            What is the typical cost of shifting a 2 BHK household from Ranchi to Chatra?
          </div>
          <div class="chatra-faq-a">
            A standard 2 BHK household relocation from Ranchi to Chatra typically ranges between ₹10,500 and ₹15,000. This price includes high-grade 5-layer packing materials (bubble wrap, corrugated sheets, stretch film), loading labor in Ranchi, NH-20 expressway tolls, fuel, enclosed container transport, unloading at your Chatra residence, and baseline room placement.
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="chatra-faq-item">
          <div class="chatra-faq-q">
            <i class="fa fa-question-circle"></i>
            Do you deliver to the NTPC North Karanpura township in Tandwa?
          </div>
          <div class="chatra-faq-a">
            Yes, we provide frequent direct shifting services to the NTPC North Karanpura Super Thermal Power Project township, staff quarters, and nearby residential zones in Tandwa. We are well-versed in plant gate-pass procedures, security entry norms, and corporate reimbursement documentation required by NTPC personnel.
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="chatra-faq-item">
          <div class="chatra-faq-q">
            <i class="fa fa-question-circle"></i>
            Do you provide authentic GST bills for government or corporate transfer claims?
          </div>
          <div class="chatra-faq-a">
            Yes, absolutely. We regularly provide complete transfer documentation for personnel transferring to the Chatra District Collectorate, Civil Court, Police Department, NTPC, CCL, SBI, and education departments. Our documentation package includes 100% compliant GST invoices (SAC 9965 / 9967), consignment bilty notes, and itemized inventory sheets accepted by all auditing bodies.
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="chatra-faq-item">
          <div class="chatra-faq-q">
            <i class="fa fa-question-circle"></i>
            How do you safeguard household goods from coal and mineral dust during transit?
          </div>
          <div class="chatra-faq-a">
            Chatra district is an active mining and thermal energy corridor. We protect your goods with our 5-layer packaging protocol, finishing every piece with heavy-duty stretch film wrapping. Furthermore, our closed container trucks feature all-weather rubberized door seals that completely isolate cargo from exterior airborne dust, soot, and road grit.
          </div>
        </div>

        <!-- FAQ 6 -->
        <div class="chatra-faq-item">
          <div class="chatra-faq-q">
            <i class="fa fa-question-circle"></i>
            How can I book a moving slot for Ranchi to Chatra shifting?
          </div>
          <div class="chatra-faq-a">
            Booking is straightforward. Call our direct helpline at 084095 31615 or 098355 65233, or contact us via WhatsApp. Our team will schedule a free in-person pre-move survey at your Ranchi home or conduct an online video assessment. We provide a transparent written quotation, and once confirmed, your container truck and packing team are reserved.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 11. Cluster Navigation & Related Route Links -->
<section class="chatra-section">
  <div class="container">
    <div class="chatra-heading-group">
      <span class="chatra-badge">Regional Highway Network</span>
      <h2 class="chatra-h2">Explore Other Dedicated Packers & Movers Routes from Ranchi</h2>
      <p class="chatra-p-lead">
        Looking for relocation services to other administrative, commercial, or mining centers across Jharkhand? Explore our network of dedicated daily route services.
      </p>
    </div>

    <div class="chatra-cluster-grid">
      <a href="<?php echo SITE_BASE_URL; ?>/" class="chatra-cluster-link">
        <i class="fa fa-map-marker"></i> Ranchi Moving Hub (Main Page)
      </a>
      <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-simdega-packers-and-movers" class="chatra-cluster-link">
        <i class="fa fa-arrow-right"></i> Ranchi to Simdega Shifting
      </a>
      <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-gumla-packers-and-movers" class="chatra-cluster-link">
        <i class="fa fa-arrow-right"></i> Ranchi to Gumla Shifting
      </a>
      <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-lohardaga-packers-and-movers" class="chatra-cluster-link">
        <i class="fa fa-arrow-right"></i> Ranchi to Lohardaga Shifting
      </a>
      <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-daltonganj-packers-and-movers" class="chatra-cluster-link">
        <i class="fa fa-arrow-right"></i> Ranchi to Daltonganj Shifting
      </a>
      <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-koderma-packers-and-movers" class="chatra-cluster-link">
        <i class="fa fa-arrow-right"></i> Ranchi to Koderma Shifting
      </a>
      <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-ramgarh-packers-and-movers" class="chatra-cluster-link">
        <i class="fa fa-arrow-right"></i> Ranchi to Ramgarh Shifting
      </a>
      <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-chaibasa-packers-and-movers" class="chatra-cluster-link">
        <i class="fa fa-arrow-right"></i> Ranchi to Chaibasa Shifting
      </a>
      <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-giridih-packers-and-movers" class="chatra-cluster-link">
        <i class="fa fa-arrow-right"></i> Ranchi to Giridih Shifting
      </a>
      <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-dumka-packers-and-movers" class="chatra-cluster-link">
        <i class="fa fa-arrow-right"></i> Ranchi to Dumka Shifting
      </a>
      <a href="<?php echo SITE_BASE_URL; ?>/pricing" class="chatra-cluster-link">
        <i class="fa fa-tag"></i> Packers and Movers Pricing Guide
      </a>
      <a href="<?php echo SITE_BASE_URL; ?>/contact-us" class="chatra-cluster-link">
        <i class="fa fa-envelope"></i> Contact Shree Ashirwad Office
      </a>
    </div>
  </div>
</section>

<!-- JSON-LD Structured Data Schema 1: MovingCompany -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MovingCompany",
  "name": "Shree Ashirwad Packers and Movers - Ranchi to Chatra Route",
  "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
  "@id": "https://www.shreeashirwadpackers.com/ranchi-to-chatra-packers-and-movers#movingcompany",
  "url": "https://www.shreeashirwadpackers.com/ranchi-to-chatra-packers-and-movers",
  "telephone": "+918409531615",
  "priceRange": "₹1,800 - ₹29,000",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Bariatu Road, Near RIMS",
    "addressLocality": "Ranchi",
    "addressRegion": "Jharkhand",
    "postalCode": "834009",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 23.3441,
    "longitude": 85.3096
  },
  "areaServed": [
    {
      "@type": "City",
      "name": "Ranchi"
    },
    {
      "@type": "City",
      "name": "Chatra"
    }
  ],
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
    "opens": "07:00",
    "closes": "22:00"
  }
}
</script>

<!-- JSON-LD Structured Data Schema 2: Service -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Ranchi to Chatra Packers and Movers Services",
  "serviceType": "Intercity Relocation Services",
  "provider": {
    "@type": "MovingCompany",
    "name": "Shree Ashirwad Packers and Movers",
    "url": "https://www.shreeashirwadpackers.com"
  },
  "areaServed": {
    "@type": "City",
    "name": "Chatra"
  },
  "description": "Full-service household relocation, NTPC North Karanpura Tandwa and CCL employee shifting, motorbike parcel, and car carrier transport between Ranchi and Chatra via NH-20 and NH-522.",
  "offers": {
    "@type": "AggregateOffer",
    "priceCurrency": "INR",
    "lowPrice": 1800,
    "highPrice": 29000,
    "offerCount": 6
  }
}
</script>

<!-- JSON-LD Structured Data Schema 3: BreadcrumbList -->
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
      "name": "Packers and Movers in Ranchi",
      "item": "https://www.shreeashirwadpackers.com/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Ranchi to Chatra Packers and Movers",
      "item": "https://www.shreeashirwadpackers.com/ranchi-to-chatra-packers-and-movers"
    }
  ]
}
</script>

<!-- JSON-LD Structured Data Schema 4: FAQPage -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How much time does it take for goods to reach Chatra from Ranchi?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The road distance between Ranchi and Chatra via NH-20 and NH-522 (via Hazaribagh and Simaria) is approximately 140 to 148 kilometers. Direct container transit typically takes between 3.5 and 4.5 hours. When packing begins at 7:30 AM in Ranchi, the consignment arrives in Chatra by 1:00 PM, allowing our crew to unload, unpack, and arrange your furniture on the very same day."
      }
    },
    {
      "@type": "Question",
      "name": "What is the typical cost of shifting a 2 BHK household from Ranchi to Chatra?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A standard 2 BHK household relocation from Ranchi to Chatra typically ranges between ₹10,500 and ₹15,000. This price includes high-grade 5-layer packing materials (bubble wrap, corrugated sheets, stretch film), loading labor in Ranchi, NH-20 expressway tolls, fuel, enclosed container transport, unloading at your Chatra residence, and baseline room placement."
      }
    },
    {
      "@type": "Question",
      "name": "Do you deliver to the NTPC North Karanpura township in Tandwa?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we provide frequent direct shifting services to the NTPC North Karanpura Super Thermal Power Project township, staff quarters, and nearby residential zones in Tandwa. We are well-versed in plant gate-pass procedures, security entry norms, and corporate reimbursement documentation required by NTPC personnel."
      }
    },
    {
      "@type": "Question",
      "name": "Do you provide authentic GST bills for government or corporate transfer claims?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, absolutely. We regularly provide complete transfer documentation for personnel transferring to the Chatra District Collectorate, Civil Court, Police Department, NTPC, CCL, SBI, and education departments. Our documentation package includes 100% compliant GST invoices (SAC 9965 / 9967), consignment bilty notes, and itemized inventory sheets accepted by all auditing bodies."
      }
    },
    {
      "@type": "Question",
      "name": "How do you safeguard household goods from coal and mineral dust during transit?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Chatra district is an active mining and thermal energy corridor. We protect your goods with our 5-layer packaging protocol, finishing every piece with heavy-duty stretch film wrapping. Furthermore, our closed container trucks feature all-weather rubberized door seals that completely isolate cargo from exterior airborne dust, soot, and road grit."
      }
    },
    {
      "@type": "Question",
      "name": "How can I book a moving slot for Ranchi to Chatra shifting?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Booking is straightforward. Call our direct helpline at 084095 31615 or 098355 65233, or contact us via WhatsApp. Our team will schedule a free in-person pre-move survey at your Ranchi home or conduct an online video assessment. We provide a transparent written quotation, and once confirmed, your container truck and packing team are reserved."
      }
    }
  ]
}
</script>

<?php
// Include site-wide footer
require_once __DIR__ . '/includes/footer.php';
?>
</body>
</html>
