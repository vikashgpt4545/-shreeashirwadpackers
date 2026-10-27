<?php
/**
 * Ranchi to Varanasi Packers and Movers - Shree Ashirwad Packers and Movers
 * 
 * High-performance, fully SEO-optimized dedicated route landing page for interstate household,
 * BHU university faculty, BLW railway personnel, banking executives, and family relocations from
 * Ranchi (Jharkhand) to Varanasi (Kashi / Banaras, Uttar Pradesh) along the Grand Trunk Road (NH-19).
 * 
 * Target Keyword: ranchi to varanasi packers and movers / packers and movers ranchi to varanasi
 */

// Define page-specific metadata
$page_title = "Ranchi to Varanasi Packers & Movers | Shree Ashirwad";
$page_description = "Top Ranchi to Varanasi packers and movers by Shree Ashirwad. Next-day express transit via NH-19 GT Road, E-Way bill & GST billing, 5-layer packing. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/ranchi-to-varanasi-packers-and-movers";

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
  <meta name="keywords" content="ranchi to varanasi packers and movers, packers and movers ranchi to varanasi, household shifting ranchi to varanasi, ranchi to bhu shifting, ranchi to varanasi luggage parcel, ranchi to varanasi bike transport, ranchi to varanasi car transport, ranchi to varanasi moving charges">
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
  <meta property="og:image:alt" content="Ranchi to Varanasi Packers and Movers - Shree Ashirwad Dedicated NH-19 GT Road Linehaul Fleet">
  <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
  <meta property="og:locale" content="en_IN">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg">

  <!-- Geo Meta Tags for Origin: Ranchi, Destination: Varanasi -->
  <meta name="geo.region" content="IN-JH">
  <meta name="geo.placename" content="Ranchi">
  <meta name="geo.position" content="23.3441;85.3096">
  <meta name="ICBM" content="23.3441, 85.3096">

  <!-- Scoped Page Styling (Theme: Imperial Saffron & Kashi Gold / Temple Sandstone) -->
  <style>
    :root {
      --r2v-primary: #b45309;
      --r2v-primary-dark: #92400e;
      --r2v-primary-deep: #0f172a;
      --r2v-accent: #d97706;
      --r2v-accent-hover: #b45309;
      --r2v-gold: #f59e0b;
      --r2v-slate-900: #0f172a;
      --r2v-slate-800: #1e293b;
      --r2v-slate-700: #334155;
      --r2v-slate-100: #f1f5f9;
      --r2v-slate-50: #fffbeb;
      --r2v-card-bg: #ffffff;
      --r2v-border: #fde68a;
      --r2v-radius: 12px;
      --r2v-shadow: 0 10px 25px -5px rgba(180, 83, 9, 0.08), 0 8px 10px -6px rgba(180, 83, 9, 0.04);
      --r2v-shadow-lg: 0 20px 30px -10px rgba(180, 83, 9, 0.16);
    }

    .r2v-wrapper {
      font-family: 'Plus Jakarta Sans', sans-serif;
      color: var(--r2v-slate-800);
      line-height: 1.7;
      background-color: #ffffff;
    }

    .r2v-hero-section {
      background: linear-gradient(135deg, var(--r2v-slate-900) 0%, #78350f 45%, var(--r2v-primary) 100%);
      color: #ffffff;
      padding: 60px 0 55px;
      position: relative;
      overflow: hidden;
    }

    .r2v-hero-section::before {
      content: '';
      position: absolute;
      top: -45%;
      right: -15%;
      width: 620px;
      height: 620px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(245, 158, 11, 0.22) 0%, rgba(255, 255, 255, 0) 70%);
      pointer-events: none;
    }

    .r2v-breadcrumb {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 8px;
      font-size: 0.88rem;
      margin-bottom: 22px;
    }

    .r2v-breadcrumb a {
      color: #cbd5e1;
      text-decoration: none;
      transition: color 0.2s ease;
    }

    .r2v-breadcrumb a:hover {
      color: #fde68a;
    }

    .r2v-breadcrumb span {
      color: #64748b;
    }

    .r2v-breadcrumb .current {
      color: #fde68a;
      font-weight: 600;
    }

    .r2v-hero-title {
      font-family: 'Outfit', sans-serif;
      font-size: 2.75rem;
      font-weight: 800;
      line-height: 1.2;
      margin-bottom: 18px;
      letter-spacing: -0.02em;
    }

    .r2v-hero-title span {
      color: #fbbf24;
      display: inline-block;
    }

    .r2v-hero-subtitle {
      font-size: 1.15rem;
      color: #e2e8f0;
      max-width: 820px;
      margin-bottom: 30px;
      line-height: 1.65;
    }

    .r2v-pills-row {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-bottom: 35px;
    }

    .r2v-pill {
      background: rgba(255, 255, 255, 0.08);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255, 255, 255, 0.18);
      border-radius: 50px;
      padding: 8px 18px;
      font-size: 0.88rem;
      font-weight: 600;
      color: #fef3c7;
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }

    .r2v-pill i {
      color: #fbbf24;
    }

    .r2v-cta-group {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      align-items: center;
    }

    .r2v-btn-primary {
      background: var(--r2v-gold);
      color: #0f172a;
      font-weight: 700;
      padding: 14px 28px;
      border-radius: 8px;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      transition: all 0.25s ease;
      box-shadow: 0 4px 14px rgba(245, 158, 11, 0.4);
    }

    .r2v-btn-primary:hover {
      background: #d97706;
      color: #ffffff;
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(217, 119, 6, 0.5);
    }

    .r2v-btn-secondary {
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

    .r2v-btn-secondary:hover {
      background: rgba(255, 255, 255, 0.2);
      color: #ffffff;
    }

    .r2v-action-bar {
      background: #78350f;
      color: #ffffff;
      padding: 18px 0;
      border-bottom: 3px solid var(--r2v-gold);
    }

    .r2v-action-bar-inner {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      gap: 15px;
    }

    .r2v-action-bar-item {
      display: flex;
      align-items: center;
      gap: 12px;
      font-size: 0.95rem;
    }

    .r2v-action-bar-item i {
      font-size: 1.25rem;
      color: #fbbf24;
    }

    .r2v-action-bar-item strong {
      color: #ffffff;
      font-weight: 700;
    }

    .r2v-action-links {
      display: flex;
      gap: 12px;
      align-items: center;
    }

    .r2v-phone-chip {
      background: rgba(255, 255, 255, 0.12);
      border: 1px solid rgba(255, 255, 255, 0.22);
      color: #ffffff;
      text-decoration: none;
      font-weight: 700;
      padding: 7px 16px;
      border-radius: 6px;
      font-size: 0.92rem;
      transition: all 0.2s ease;
    }

    .r2v-phone-chip:hover {
      background: var(--r2v-accent);
      border-color: var(--r2v-accent);
      color: #ffffff;
    }

    .r2v-whatsapp-chip {
      background: #25d366;
      color: #ffffff;
      text-decoration: none;
      font-weight: 700;
      padding: 7px 16px;
      border-radius: 6px;
      font-size: 0.92rem;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      transition: background 0.2s ease;
    }

    .r2v-whatsapp-chip:hover {
      background: #1eb857;
      color: #ffffff;
    }

    .r2v-section {
      padding: 65px 0;
    }

    .r2v-section-alt {
      background-color: #fffdf5;
    }

    .r2v-section-header {
      text-align: center;
      max-width: 820px;
      margin: 0 auto 45px;
    }

    .r2v-section-tag {
      font-size: 0.82rem;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      color: var(--r2v-primary);
      background: #fef3c7;
      padding: 5px 14px;
      border-radius: 30px;
      display: inline-block;
      margin-bottom: 12px;
    }

    .r2v-section-title {
      font-family: 'Outfit', sans-serif;
      font-size: 2.2rem;
      font-weight: 800;
      color: var(--r2v-slate-900);
      line-height: 1.25;
      margin-bottom: 15px;
    }

    .r2v-section-desc {
      font-size: 1.05rem;
      color: var(--r2v-slate-700);
      line-height: 1.7;
    }

    .r2v-card {
      background: #ffffff;
      border: 1px solid #fde68a;
      border-radius: var(--r2v-radius);
      padding: 30px;
      box-shadow: var(--r2v-shadow);
      transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .r2v-card:hover {
      transform: translateY(-4px);
      box-shadow: var(--r2v-shadow-lg);
    }

    .r2v-grid-2 {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 30px;
    }

    .r2v-grid-3 {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 25px;
    }

    .r2v-grid-4 {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
    }

    .r2v-badge-card {
      background: #ffffff;
      border: 1px solid var(--r2v-border);
      border-radius: var(--r2v-radius);
      padding: 24px;
      text-align: center;
      transition: all 0.2s ease;
    }

    .r2v-badge-card:hover {
      border-color: var(--r2v-primary);
      box-shadow: var(--r2v-shadow);
    }

    .r2v-badge-icon {
      width: 58px;
      height: 58px;
      margin: 0 auto 16px;
      border-radius: 12px;
      background: #fef3c7;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.6rem;
      color: var(--r2v-primary);
    }

    .r2v-badge-title {
      font-family: 'Outfit', sans-serif;
      font-size: 1.15rem;
      font-weight: 700;
      margin-bottom: 8px;
      color: var(--r2v-slate-900);
    }

    .r2v-badge-text {
      font-size: 0.9rem;
      color: var(--r2v-slate-700);
      line-height: 1.6;
    }

    .r2v-img-card {
      border-radius: var(--r2v-radius);
      overflow: hidden;
      background: #ffffff;
      border: 1px solid #fde68a;
      box-shadow: var(--r2v-shadow);
    }

    .r2v-img-card img {
      width: 100%;
      height: 230px;
      object-fit: cover;
      display: block;
      transition: transform 0.3s ease;
    }

    .r2v-img-card:hover img {
      transform: scale(1.03);
    }

    .r2v-img-content {
      padding: 20px;
    }

    .r2v-img-title {
      font-family: 'Outfit', sans-serif;
      font-size: 1.1rem;
      font-weight: 700;
      color: var(--r2v-slate-900);
      margin-bottom: 6px;
    }

    .r2v-img-desc {
      font-size: 0.88rem;
      color: var(--r2v-slate-700);
      line-height: 1.55;
    }

    .r2v-table-wrapper {
      background: #ffffff;
      border: 1px solid #fde68a;
      border-radius: var(--r2v-radius);
      overflow-x: auto;
      box-shadow: var(--r2v-shadow);
      margin-top: 25px;
    }

    .r2v-table {
      width: 100%;
      border-collapse: collapse;
      text-align: left;
      font-size: 0.94rem;
    }

    .r2v-table th {
      background: #78350f;
      color: #ffffff;
      padding: 16px 20px;
      font-weight: 700;
      font-family: 'Outfit', sans-serif;
      letter-spacing: 0.02em;
    }

    .r2v-table td {
      padding: 14px 20px;
      border-bottom: 1px solid #fde68a;
      color: var(--r2v-slate-800);
    }

    .r2v-table tr:last-child td {
      border-bottom: none;
    }

    .r2v-table tr:hover td {
      background-color: #fffbeb;
    }

    .r2v-table .price-val {
      font-weight: 800;
      color: var(--r2v-primary);
      font-size: 1.05rem;
    }

    .r2v-step-row {
      display: flex;
      position: relative;
      margin-bottom: 30px;
      gap: 25px;
    }

    .r2v-step-num {
      flex-shrink: 0;
      width: 52px;
      height: 52px;
      border-radius: 50%;
      background: var(--r2v-primary);
      color: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Outfit', sans-serif;
      font-weight: 800;
      font-size: 1.35rem;
      box-shadow: 0 4px 10px rgba(180, 83, 9, 0.35);
    }

    .r2v-step-body {
      background: #ffffff;
      border: 1px solid #fde68a;
      border-radius: var(--r2v-radius);
      padding: 22px 26px;
      flex-grow: 1;
      box-shadow: var(--r2v-shadow);
    }

    .r2v-step-title {
      font-family: 'Outfit', sans-serif;
      font-size: 1.2rem;
      font-weight: 700;
      color: var(--r2v-slate-900);
      margin-bottom: 8px;
    }

    .r2v-faq-item {
      background: #ffffff;
      border: 1px solid #fde68a;
      border-radius: var(--r2v-radius);
      margin-bottom: 16px;
      box-shadow: var(--r2v-shadow);
      overflow: hidden;
    }

    .r2v-faq-q {
      padding: 20px 24px;
      font-family: 'Outfit', sans-serif;
      font-size: 1.15rem;
      font-weight: 700;
      color: var(--r2v-slate-900);
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #ffffff;
      transition: background 0.2s ease;
    }

    .r2v-faq-q:hover {
      background: #fffbeb;
      color: var(--r2v-primary);
    }

    .r2v-faq-a {
      padding: 0 24px 22px;
      font-size: 0.98rem;
      color: var(--r2v-slate-700);
      line-height: 1.7;
      border-top: 1px solid #fde68a;
      padding-top: 16px;
    }

    .r2v-loc-tag {
      background: #ffffff;
      border: 1px solid #fcd34d;
      border-radius: 6px;
      padding: 8px 14px;
      font-size: 0.88rem;
      font-weight: 600;
      color: var(--r2v-slate-700);
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .r2v-loc-tag i {
      color: var(--r2v-primary);
    }

    .r2v-cluster-links {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-top: 20px;
    }

    .r2v-cluster-btn {
      background: #ffffff;
      border: 1px solid #fde68a;
      color: var(--r2v-primary);
      text-decoration: none;
      font-weight: 600;
      font-size: 0.9rem;
      padding: 10px 18px;
      border-radius: 6px;
      transition: all 0.2s ease;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .r2v-cluster-btn:hover {
      background: var(--r2v-primary);
      color: #ffffff;
      border-color: var(--r2v-primary);
      transform: translateY(-1px);
    }

    @media (max-width: 991px) {
      .r2v-grid-2, .r2v-grid-3, .r2v-grid-4 {
        grid-template-columns: 1fr;
      }
      .r2v-hero-title {
        font-size: 2.15rem;
      }
      .r2v-section-title {
        font-size: 1.75rem;
      }
      .r2v-action-bar-inner {
        flex-direction: column;
        align-items: flex-start;
      }
    }
  </style>
</head>
<body class="r2v-wrapper">

<?php
// Include site-wide header
require_once __DIR__ . '/includes/header.php';
?>

<!-- 1. Hero Section -->
<header class="r2v-hero-section">
  <div class="container">
    <nav class="r2v-breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo SITE_BASE_URL; ?>/">Home</a>
      <span>/</span>
      <a href="<?php echo SITE_BASE_URL; ?>/">Packers and Movers in Ranchi</a>
      <span>/</span>
      <span class="current">Ranchi to Varanasi Packers and Movers</span>
    </nav>

    <h1 class="r2v-hero-title">
      Ranchi to Varanasi Packers &amp; Movers <span>Next-Day Express Linehaul via NH-19</span>
    </h1>

    <p class="r2v-hero-subtitle">
      Relocating your household, BHU faculty quarters, BLW locomotive staff establishment, banking executive residence, or ancestral home from Ranchi to the holy spiritual city of Varanasi (Kashi / Banaras, Uttar Pradesh)? Shree Ashirwad Packers and Movers delivers premium 400-km interstate container linehaul along the four-lane NH-20 and six-lane NH-19 Grand Trunk Road (Golden Quadrilateral). Benefit from next-day doorstep arrival, zero-transshipment sealed container integrity, 100% compliant interstate E-Way bill &amp; GST invoicing, and multi-layer defensive packaging.
    </p>

    <div class="r2v-pills-row">
      <div class="r2v-pill"><i class="fas fa-university"></i> BHU &amp; BLW Corporate Relocation Compliant</div>
      <div class="r2v-pill"><i class="fas fa-shipping-fast"></i> Next-Day 400-KM GT Road Express</div>
      <div class="r2v-pill"><i class="fas fa-shield-alt"></i> Zero Transshipment Sealed Fleet</div>
      <div class="r2v-pill"><i class="fas fa-file-invoice-dollar"></i> Interstate E-Way Bill &amp; GST Invoicing</div>
    </div>

    <div class="r2v-cta-group">
      <a href="tel:+918409531615" class="r2v-btn-primary">
        <i class="fas fa-phone-alt"></i> Call Instant Helpline: 084095 31615
      </a>
      <a href="https://api.whatsapp.com/send?phone=919835565233&text=Hi%20Shree%20Ashirwad,%20I%20need%20a%20quote%20for%20Ranchi%20to%20Varanasi%20shifting." class="r2v-btn-secondary" target="_blank" rel="noopener">
        <i class="fab fa-whatsapp"></i> WhatsApp Quote (098355 65233)
      </a>
    </div>
  </div>
</header>

<!-- 2. Immediate Contact / Action Bar -->
<section class="r2v-action-bar">
  <div class="container">
    <div class="r2v-action-bar-inner">
      <div class="r2v-action-bar-item">
        <i class="fas fa-clock"></i>
        <div>
          <span>Next-Day Interstate Corridor Schedule: </span>
          <strong>Morning 8:00 AM Ranchi Loading &rarr; Next-Day Morning 9:00 AM Doorstep Placement in Varanasi</strong>
        </div>
      </div>
      <div class="r2v-action-bar-item">
        <i class="fas fa-headset"></i>
        <div>
          <span>Direct Coordinator: </span>
          <strong>+91 84095 31615 / +91 98355 65233</strong>
        </div>
      </div>
      <div class="r2v-action-links">
        <a href="tel:+918409531615" class="r2v-phone-chip"><i class="fas fa-phone-volume"></i> 084095 31615</a>
        <a href="https://api.whatsapp.com/send?phone=919835565233&text=Ranchi%20to%20Varanasi%20shifting%20quote%20enquiry" class="r2v-whatsapp-chip" target="_blank" rel="noopener">
          <i class="fab fa-whatsapp"></i> Quick Chat
        </a>
      </div>
    </div>
  </div>
</section>

<!-- 3. Highway Corridor Logistics & NH-19 Grand Trunk Linehaul Navigation -->
<section class="r2v-section">
  <div class="container">
    <div class="r2v-section-header">
      <span class="r2v-section-tag">Interstate Highway Logistics</span>
      <h2 class="r2v-section-title">Navigating the 400-km Ranchi to Varanasi NH-19 Grand Trunk Corridor</h2>
      <p class="r2v-section-desc">
        Connecting Jharkhand’s capital city, Ranchi, with the ancient cultural, academic, and economic capital of Eastern Uttar Pradesh, Varanasi, spans approximately 390 to 420 kilometers. Our dedicated container fleet operates via high-speed national expressways, avoiding urban traffic bottlenecks for guaranteed next-day delivery.
      </p>
    </div>

    <div class="r2v-grid-2">
      <div class="r2v-card">
        <h3 style="font-family: 'Outfit', sans-serif; font-size: 1.35rem; color: var(--r2v-slate-900); margin-bottom: 15px;">
          <i class="fas fa-route" style="color: var(--r2v-primary); margin-right: 8px;"></i> Primary Linehaul Corridor: Via Barhi, Sasaram &amp; Mughalsarai
        </h3>
        <p style="font-size: 0.96rem; color: var(--r2v-slate-700); line-height: 1.7; margin-bottom: 15px;">
          Our vehicles depart Ranchi via the four-lane NH-20 northbound arterial, cruising smoothly past Ramgarh and Hazaribagh to reach Barhi junction. At Barhi, our trucks seamlessly merge onto the six-lane Grand Trunk Road (Golden Quadrilateral NH-19), powering west across Chauparan, Dobhi, Sherghati, Aurangabad, Dehri-on-Sone, Sasaram, and Mohania into Pandit Deen Dayal Upadhyaya Junction (Mughalsarai) and across the Ganga bridge into Varanasi.
        </p>
        <p style="font-size: 0.96rem; color: var(--r2v-slate-700); line-height: 1.7;">
          Total expressway distance is approximately 400 kilometers. Direct highway run takes between 8 and 10 hours. With our synchronized operations, items loaded in Ranchi during the morning are transported overnight via high-speed linehaul, arriving fresh at your Varanasi doorstep (Lanka, Sigra, Mahmoorganj, Cantt, or Sarnath) for early morning room placement.
        </p>
      </div>

      <div class="r2v-card">
        <h3 style="font-family: 'Outfit', sans-serif; font-size: 1.35rem; color: var(--r2v-slate-900); margin-bottom: 15px;">
          <i class="fas fa-truck-moving" style="color: var(--r2v-primary); margin-right: 8px;"></i> Interstate Border Compliance &amp; 24/7 Satellite Tracking
        </h3>
        <p style="font-size: 0.96rem; color: var(--r2v-slate-700); line-height: 1.7; margin-bottom: 15px;">
          Interstate transit spanning Jharkhand, Bihar, and Uttar Pradesh requires thorough regulatory documentation. Shree Ashirwad Packers generates official electronic E-Way bills, computerized consignment notes (Bilty), and comprehensive transit insurance before wheels roll, ensuring zero detention at state border checkpoints.
        </p>
        <p style="font-size: 0.96rem; color: var(--r2v-slate-700); line-height: 1.7;">
          Every container truck features real-time GPS tracking. Our central traffic dispatch tower in Ranchi monitors vehicle velocity, checkpoint arrivals, and schedule milestones. Clients receive active WhatsApp transit milestone notifications as their consignment clears Barhi, Dobhi, Sasaram, and enters Varanasi.
        </p>
      </div>
    </div>

    <!-- Corridor Metrics Cards -->
    <div class="r2v-grid-4" style="margin-top: 35px;">
      <div class="r2v-badge-card">
        <div class="r2v-badge-icon"><i class="fas fa-road"></i></div>
        <div class="r2v-badge-title">390 - 420 KM</div>
        <div class="r2v-badge-text">Direct road distance via NH-20 &amp; six-lane NH-19 Grand Trunk expressway</div>
      </div>
      <div class="r2v-badge-card">
        <div class="r2v-badge-icon"><i class="fas fa-stopwatch"></i></div>
        <div class="r2v-badge-title">Next-Day Delivery</div>
        <div class="r2v-badge-text">Punctual next-morning doorstep delivery &amp; room arrangement in Varanasi</div>
      </div>
      <div class="r2v-badge-card">
        <div class="r2v-badge-icon"><i class="fas fa-lock"></i></div>
        <div class="r2v-badge-title">Zero Transshipment</div>
        <div class="r2v-badge-text">Dedicated container loaded and sealed in Ranchi opens only at Varanasi drop</div>
      </div>
      <div class="r2v-badge-card">
        <div class="r2v-badge-icon"><i class="fas fa-satellite-dish"></i></div>
        <div class="r2v-badge-title">Live GPS Tracking</div>
        <div class="r2v-badge-text">Active vehicle location updates shared directly with client via WhatsApp</div>
      </div>
    </div>
  </div>
</section>

<!-- 4. Verified Image Gallery Showcase -->
<section class="r2v-section r2v-section-alt">
  <div class="container">
    <div class="r2v-section-header">
      <span class="r2v-section-tag">Ground Fleet &amp; Packaging Standards</span>
      <h2 class="r2v-section-title">Verified Infrastructure for Ranchi to Varanasi Relocations</h2>
      <p class="r2v-section-desc">
        We execute all relocations using our own dedicated fleet of enclosed container trucks, trained packing specialists, and industrial-grade packing materials. Below are authentic photographs representing our high-standard operational process.
      </p>
    </div>

    <div class="r2v-grid-4">
      <div class="r2v-img-card">
        <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Weatherproof closed container truck for Ranchi to Varanasi NH-20/NH-19 corridor linehaul" loading="lazy">
        <div class="r2v-img-content">
          <h3 class="r2v-img-title">Sealed Interstate Fleet</h3>
          <p class="r2v-img-desc">Heavy-duty closed container trucks shielding home belongings from road dust, sudden rain, and highway vibrations during the 400 km linehaul.</p>
        </div>
      </div>

      <div class="r2v-img-card">
        <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg" alt="Multi-layer corrugated and foam protection for wooden furniture during interstate transit" loading="lazy">
        <div class="r2v-img-content">
          <h3 class="r2v-img-title">Wooden Furniture Armor</h3>
          <p class="r2v-img-desc">Multi-layer corrugated cardboard and dense foam wrap securing wooden almirahs, dining sets, and bed frames from friction marks or scratches.</p>
        </div>
      </div>

      <div class="r2v-img-card">
        <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/electronics-led-tv-crating-jharkhand.jpg" alt="Custom padded wooden crating and bubble protection for LED TVs and delicate appliances" loading="lazy">
        <div class="r2v-img-content">
          <h3 class="r2v-img-title">LED TV &amp; Appliance Crating</h3>
          <p class="r2v-img-desc">Custom padded wooden crating and triple bubble wrap securing LED televisions, monitors, microwaves, and delicate electronics from vibration damage.</p>
        </div>
      </div>

      <div class="r2v-img-card">
        <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/scooter-bike-safe-transit-packing-jharkhand.jpg" alt="Two-wheeler packaging with foam wrap and nylon lashings for commuter motorcycle transport" loading="lazy">
        <div class="r2v-img-content">
          <h3 class="r2v-img-title">Bike &amp; Scooter Transport</h3>
          <p class="r2v-img-desc">Foam sheet masking, mirror demounting, corrugated layering, and tire wheel locks ensuring zero scratches or mirror damage during highway transit.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 5. Transparent Tariff Schedule Table -->
<section class="r2v-section">
  <div class="container">
    <div class="r2v-section-header">
      <span class="r2v-section-tag">Clear &amp; Upfront Pricing</span>
      <h2 class="r2v-section-title">Ranchi to Varanasi Moving Charges &amp; Cost Estimation</h2>
      <p class="r2v-section-desc">
        We provide transparent, all-inclusive quotations with zero hidden surcharges. Our pricing includes multi-layer defensive packing, ground loading, sealed container transport via NH-19, toll taxes, E-Way bill clearance, unloading, and complete room arrangement in Varanasi.
      </p>
    </div>

    <div class="r2v-table-wrapper">
      <table class="r2v-table">
        <thead>
          <tr>
            <th>Shifting Type</th>
            <th>Household Configuration</th>
            <th>Packing Materials &amp; Crew</th>
            <th>Standard Transit</th>
            <th>Estimated Pricing</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>1 BHK Flat / Compact Shifting</strong></td>
            <td>1 Bed, Mattress, Refrigerator, Washing Machine, 10–14 Cartons</td>
            <td>3-Layer Packing, 3 Crew Members</td>
            <td>Next Day (8–10 Hrs)</td>
            <td><span class="price-val">&#8377; 12,500 - &#8377; 16,500</span></td>
          </tr>
          <tr>
            <td><strong>2 BHK Complete Household</strong></td>
            <td>2 Beds, 3-Seater Sofa, Dining Set, 2 TVs, Appliances, 20–25 Cartons</td>
            <td>5-Layer Defensive Shield, 4 Crew Members</td>
            <td>Next Day (8–10 Hrs)</td>
            <td><span class="price-val">&#8377; 18,500 - &#8377; 25,500</span></td>
          </tr>
          <tr>
            <td><strong>3 BHK Family Household</strong></td>
            <td>Full Furniture Set, Modular Units, Multiple ACs, Fridge, 30–45 Cartons</td>
            <td>Heavy Bubble Wrap &amp; Foam, 5 Crew Members</td>
            <td>Next Day (9–11 Hrs)</td>
            <td><span class="price-val">&#8377; 26,000 - &#8377; 34,500</span></td>
          </tr>
          <tr>
            <td><strong>4 BHK / Luxury Villa / Bungalow</strong></td>
            <td>Large Bungalow Inventory, Antiques, Heavy Steel Almirahs, 55+ Boxes</td>
            <td>Full Crating, Specialized Riggers, 6+ Crew</td>
            <td>Next Day (10–12 Hrs)</td>
            <td><span class="price-val">&#8377; 35,000 - &#8377; 46,000</span></td>
          </tr>
          <tr>
            <td><strong>Two-Wheeler Parcel Transport</strong></td>
            <td>Commuter Bike / Royal Enfield / Scooty</td>
            <td>Foam Masking, Bubble &amp; Nylon Lashings</td>
            <td>Next Day Express</td>
            <td><span class="price-val">&#8377; 3,500 - &#8377; 5,500</span></td>
          </tr>
          <tr>
            <td><strong>Dedicated Car Carrier Transit</strong></td>
            <td>Hatchback, Premium Sedan, or Compact SUV</td>
            <td>Hydraulic Wheel Locking Carrier</td>
            <td>Next Day Express</td>
            <td><span class="price-val">&#8377; 8,500 - &#8377; 13,000</span></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div style="background: #fffbeb; border: 1px solid var(--r2v-border); border-radius: var(--r2v-radius); padding: 22px; margin-top: 25px;">
      <p style="font-size: 0.95rem; color: var(--r2v-slate-800); margin: 0; line-height: 1.65;">
        <i class="fas fa-info-circle" style="color: var(--r2v-primary); margin-right: 8px;"></i>
        <strong>Transparent Pricing Guarantee:</strong> All quotes provided by Shree Ashirwad Packers and Movers are fixed prior to loading. The price includes toll tax along NH-20 &amp; NH-19, interstate border permits, fuel surcharges, loading labor, and GST billing. No hidden fees or unexpected demands on delivery.
      </p>
    </div>
  </div>
</section>

<!-- 6. BHU Faculty, Railway & Central Government Transfer Advisory -->
<section class="r2v-section r2v-section-alt">
  <div class="container">
    <div class="r2v-section-header">
      <span class="r2v-section-tag">University &amp; Central PSU Relocation Guide</span>
      <h2 class="r2v-section-title">BHU Faculty &amp; BLW Railway Transfer Reimbursement Advisory</h2>
      <p class="r2v-section-desc">
        Varanasi is a prominent hub for world-class education (Banaras Hindu University, IIT BHU) and industrial manufacturing (Banaras Locomotive Works BLW). We specialize in official transfer shifting for university professors, railway engineers, and central banking executives.
      </p>
    </div>

    <div class="r2v-grid-3">
      <div class="r2v-card">
        <div class="r2v-badge-icon"><i class="fas fa-file-invoice-dollar"></i></div>
        <h3 class="r2v-badge-title">Official GST Bills (SAC 9965/9967)</h3>
        <p class="r2v-badge-text">
          We provide 100% GST-compliant computerized tax invoices with active GSTIN, official seal, and SAC codes (9965 for road goods transport, 9967 for cargo handling &amp; packing). Fully verified and approved across BHU Registrar office, BLW, Indian Railways, SBI, and central PSUs.
        </p>
      </div>

      <div class="r2v-card">
        <div class="r2v-badge-icon"><i class="fas fa-receipt"></i></div>
        <h3 class="r2v-badge-title">Consignment Bilty &amp; E-Way Bill Clearance</h3>
        <p class="r2v-badge-text">
          Every booking includes a stamped Indian Motor Tariff Consignment Note (Lorry Receipt / Bilty) along with a serialized itemized packing inventory and valid E-Way Bill required for tax compliance across Jharkhand, Bihar, and UP state borders.
        </p>
      </div>

      <div class="r2v-card">
        <div class="r2v-badge-icon"><i class="fas fa-book-reader"></i></div>
        <h3 class="r2v-badge-title">Academic Library &amp; Book Crate Packaging</h3>
        <p class="r2v-badge-text">
          For university professors and research scholars transferring from BIT Mesra or Ranchi University to BHU, we provide moisture-proof book cartons with indexed serial tags, ensuring your academic collection arrives in pristine order.
        </p>
      </div>
    </div>

    <!-- Government Employee Benefits Checklist -->
    <div class="r2v-card" style="margin-top: 30px;">
      <h3 style="font-family: 'Outfit', sans-serif; font-size: 1.3rem; color: var(--r2v-slate-900); margin-bottom: 15px;">
        <i class="fas fa-check-circle" style="color: var(--r2v-primary); margin-right: 8px;"></i> Complete Document Dossier Delivered for Interstate Transfer Claims
      </h3>
      <div class="r2v-grid-2">
        <ul style="padding-left: 20px; font-size: 0.95rem; color: var(--r2v-slate-700); line-height: 1.8;">
          <li>Computerized Tax Invoice with GSTIN and authorized digital/physical stamp</li>
          <li>Consignment Note / Bilty with origin and destination station codes</li>
          <li>Itemized Packing List detailing serial-numbered box counts and goods description</li>
        </ul>
        <ul style="padding-left: 20px; font-size: 0.95rem; color: var(--r2v-slate-700); line-height: 1.8;">
          <li>Interstate E-Way Bill approved on the national GST portal</li>
          <li>Driver details, container registration number, and GPS linehaul dispatch log</li>
          <li>Transit Insurance Policy document with goods declaration for claim safety</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 7. 5-Layer Defensive Packaging Shield -->
<section class="r2v-section">
  <div class="container">
    <div class="r2v-section-header">
      <span class="r2v-section-tag">Defensive Packaging System</span>
      <h2 class="r2v-section-title">5-Layer Protective Shield Engineered for Long-Haul Interstate Transit</h2>
      <p class="r2v-section-desc">
        Traveling 400 kilometers across the Grand Trunk Road demands high-resilience packaging that shields goods from speed bumps, highway vibrations, and variable weather. We implement a systematic 5-layer protective wrapping protocol.
      </p>
    </div>

    <div class="r2v-grid-3">
      <div class="r2v-card">
        <h3 style="font-family: 'Outfit', sans-serif; font-size: 1.25rem; color: var(--r2v-slate-900); margin-bottom: 10px;">
          <i class="fas fa-box" style="color: var(--r2v-primary); margin-right: 8px;"></i> Layer 1 &amp; 2: Surface Film &amp; Foam Cushion
        </h3>
        <p style="font-size: 0.93rem; color: var(--r2v-slate-700); line-height: 1.65;">
          Direct surfaces of wood, glass, and polished metal receive virgin PE stretch cling film to block moisture and airborne dust, followed by a 2mm high-density foam wrapping layer that absorbs micro-vibrations generated on road surfaces.
        </p>
      </div>

      <div class="r2v-card">
        <h3 style="font-family: 'Outfit', sans-serif; font-size: 1.25rem; color: var(--r2v-slate-900); margin-bottom: 10px;">
          <i class="fas fa-shield-virus" style="color: var(--r2v-primary); margin-right: 8px;"></i> Layer 3: Heavy-Gauge Bubble Cushioning
        </h3>
        <p style="font-size: 0.93rem; color: var(--r2v-slate-700); line-height: 1.65;">
          Multi-chambered air bubble wrap is applied around crockery boxes, kitchen glassware, television displays, computer monitors, and glass tabletops, providing an air buffer capable of dissipating transit road bumps.
        </p>
      </div>

      <div class="r2v-card">
        <h3 style="font-family: 'Outfit', sans-serif; font-size: 1.25rem; color: var(--r2v-slate-900); margin-bottom: 10px;">
          <i class="fas fa-layer-group" style="color: var(--r2v-primary); margin-right: 8px;"></i> Layer 4 &amp; 5: 5-Ply Corrugated &amp; Ratchet Straps
        </h3>
        <p style="font-size: 0.93rem; color: var(--r2v-slate-700); line-height: 1.65;">
          Exterior surfaces are armored in heavy 5-ply corrugated sheets with reinforced angle edge protectors. Inside the closed container, high-tensile nylon ratchet straps clamp the load firmly to wall anchor tracks, preventing any shifting on highway turns.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- 8. Interactive 5-Step Relocation Workflow -->
<section class="r2v-section r2v-section-alt">
  <div class="container">
    <div class="r2v-section-header">
      <span class="r2v-section-tag">How It Works</span>
      <h2 class="r2v-section-title">Our Streamlined 5-Step Moving Process: Ranchi to Varanasi</h2>
      <p class="r2v-section-desc">
        From your initial quote to final furniture setup in Varanasi, our standardized relocation workflow guarantees zero anxiety and complete schedule reliability.
      </p>
    </div>

    <div style="max-width: 860px; margin: 0 auto;">
      <div class="r2v-step-row">
        <div class="r2v-step-num">1</div>
        <div class="r2v-step-body">
          <h3 class="r2v-step-title">Free In-Home or WhatsApp Video Survey</h3>
          <p style="font-size: 0.94rem; color: var(--r2v-slate-700); margin: 0;">
            Our moving surveyor visits your Ranchi residence or connects via live WhatsApp video to catalogue heavy furniture, electronics, two-wheelers, and box volumes. You receive a guaranteed written quotation within 30 minutes.
          </p>
        </div>
      </div>

      <div class="r2v-step-row">
        <div class="r2v-step-num">2</div>
        <div class="r2v-step-body">
          <h3 class="r2v-step-title">Systematic Color-Coded Packing</h3>
          <p style="font-size: 0.94rem; color: var(--r2v-slate-700); margin: 0;">
            Our trained packing crew arrives punctually with fresh cartons, bubble rolls, and corrugated sheets. Items are classified room-by-room, labeled with color-coded tags, and detailed in your official serialized transit inventory sheet.
          </p>
        </div>
      </div>

      <div class="r2v-step-row">
        <div class="r2v-step-num">3</div>
        <div class="r2v-step-body">
          <h3 class="r2v-step-title">Ergonomic Loading &amp; Sealed Container Lock</h3>
          <p style="font-size: 0.94rem; color: var(--r2v-slate-700); margin: 0;">
            Heavy furniture pieces and washing machines are loaded at the bottom, locked with ratchet tie-downs, followed by fragile items securely positioned above. The rear container door is locked with a unique tamper-evident seal in your presence.
          </p>
        </div>
      </div>

      <div class="r2v-step-row">
        <div class="r2v-step-num">4</div>
        <div class="r2v-step-body">
          <h3 class="r2v-step-title">Express Overnight NH-19 Highway Linehaul</h3>
          <p style="font-size: 0.94rem; color: var(--r2v-slate-700); margin: 0;">
            Our dedicated container vehicle drives via Barhi, Dobhi, Sasaram, and Mughalsarai to Varanasi. You receive milestone tracking updates via WhatsApp as the vehicle clears checkpoints along the highway.
          </p>
        </div>
      </div>

      <div class="r2v-step-row">
        <div class="r2v-step-num">5</div>
        <div class="r2v-step-body">
          <h3 class="r2v-step-title">Doorstep Unloading, Reassembly &amp; Setup</h3>
          <p style="font-size: 0.94rem; color: var(--r2v-slate-700); margin: 0;">
            Upon arrival at your new residence in Varanasi (Lanka, Sigra, Bhelupur, Mahmoorganj, Sarnath, etc.), our team unloads items, reassembles bed frames, aligns wardrobes, arranges kitchen cartons, and removes packing debris, leaving your home liveable.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 9. Dual-City Locality Matrix -->
<section class="r2v-section">
  <div class="container">
    <div class="r2v-section-header">
      <span class="r2v-section-tag">Complete Geographic Reach</span>
      <h2 class="r2v-section-title">Doorstep Pickup in Ranchi to Seamless Delivery in Varanasi</h2>
      <p class="r2v-section-desc">
        We serve all residential colonies, housing boards, and corporate hubs across Ranchi, delivering directly to every neighborhood in Greater Varanasi and surrounding districts.
      </p>
    </div>

    <div class="r2v-grid-2">
      <div class="r2v-card">
        <h3 style="font-family: 'Outfit', sans-serif; font-size: 1.3rem; color: var(--r2v-slate-900); margin-bottom: 18px;">
          <i class="fas fa-map-marker-alt" style="color: var(--r2v-primary); margin-right: 8px;"></i> Ranchi Pickup Neighborhoods
        </h3>
        <p style="font-size: 0.92rem; color: var(--r2v-slate-700); margin-bottom: 15px;">
          Our ground moving teams provide full coverage across all residential zones and housing colonies in Ranchi:
        </p>
        <div style="display: flex; flex-wrap: wrap; gap: 8px;">
          <span class="r2v-loc-tag"><i class="fas fa-check"></i> Harmu Housing Colony</span>
          <span class="r2v-loc-tag"><i class="fas fa-check"></i> Morabadi</span>
          <span class="r2v-loc-tag"><i class="fas fa-check"></i> Bariatu / RIMS Area</span>
          <span class="r2v-loc-tag"><i class="fas fa-check"></i> Lalpur &amp; Circular Road</span>
          <span class="r2v-loc-tag"><i class="fas fa-check"></i> Doranda &amp; Hinoo</span>
          <span class="r2v-loc-tag"><i class="fas fa-check"></i> Ashok Nagar</span>
          <span class="r2v-loc-tag"><i class="fas fa-check"></i> Namkum &amp; Tatisilwai</span>
          <span class="r2v-loc-tag"><i class="fas fa-check"></i> Kanke Road &amp; CMPDI</span>
          <span class="r2v-loc-tag"><i class="fas fa-check"></i> Argora &amp; Kathal More</span>
          <span class="r2v-loc-tag"><i class="fas fa-check"></i> Birsa Chowk &amp; Hatia</span>
        </div>
      </div>

      <div class="r2v-card">
        <h3 style="font-family: 'Outfit', sans-serif; font-size: 1.3rem; color: var(--r2v-slate-900); margin-bottom: 18px;">
          <i class="fas fa-map-pin" style="color: var(--r2v-primary); margin-right: 8px;"></i> Varanasi Destination Localities
        </h3>
        <p style="font-size: 0.92rem; color: var(--r2v-slate-700); margin-bottom: 15px;">
          Direct delivery, high-floor manual hoisting, and complete room placement across all Varanasi residential sectors:
        </p>
        <div style="display: flex; flex-wrap: wrap; gap: 8px;">
          <span class="r2v-loc-tag"><i class="fas fa-check"></i> Lanka / BHU Vicinity</span>
          <span class="r2v-loc-tag"><i class="fas fa-check"></i> Sigra &amp; Vidyapeeth Road</span>
          <span class="r2v-loc-tag"><i class="fas fa-check"></i> Bhelupur &amp; Durgakund</span>
          <span class="r2v-loc-tag"><i class="fas fa-check"></i> Mahmoorganj</span>
          <span class="r2v-loc-tag"><i class="fas fa-check"></i> Cantt / Cantonment Area</span>
          <span class="r2v-loc-tag"><i class="fas fa-check"></i> BLW / DLW Colony</span>
          <span class="r2v-loc-tag"><i class="fas fa-check"></i> Shivpur &amp; Orderly Bazar</span>
          <span class="r2v-loc-tag"><i class="fas fa-check"></i> Pandeypur &amp; Sarnath</span>
          <span class="r2v-loc-tag"><i class="fas fa-check"></i> Rohania &amp; GT Road Bypass</span>
          <span class="r2v-loc-tag"><i class="fas fa-check"></i> Ramnagar &amp; Babatpur</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 10. Two-Wheeler & Commuter Vehicle Shifting Advisory -->
<section class="r2v-section r2v-section-alt">
  <div class="container">
    <div class="r2v-section-header">
      <span class="r2v-section-tag">Vehicle Parcel Express</span>
      <h2 class="r2v-section-title">Two-Wheeler &amp; Car Transportation from Ranchi to Varanasi</h2>
      <p class="r2v-section-desc">
        Need to shift your commuter motorcycle, Royal Enfield, scooter, or personal family car alongside your household goods? We offer specialized vehicle carrier transport that guarantees zero odometer additions and scratch-free arrival.
      </p>
    </div>

    <div class="r2v-grid-2">
      <div class="r2v-card">
        <h3 style="font-family: 'Outfit', sans-serif; font-size: 1.3rem; color: var(--r2v-slate-900); margin-bottom: 12px;">
          <i class="fas fa-motorcycle" style="color: var(--r2v-primary); margin-right: 8px;"></i> Bike &amp; Scooter Parcel Logistics
        </h3>
        <p style="font-size: 0.95rem; color: var(--r2v-slate-700); line-height: 1.7; margin-bottom: 14px;">
          Two-wheelers undergo complete exterior pre-transit inspection. We wrap rear-view mirrors, headlamps, indicators, and fuel tanks in 3-layer bubble foam and corrugated sheets. The vehicle is rolled into our closed container and secured upright on wheel chocks with industrial ratchet belts.
        </p>
        <ul style="padding-left: 20px; font-size: 0.92rem; color: var(--r2v-slate-700); line-height: 1.65;">
          <li>Zero fuel drainage requirement for short intercity NH-19 transit</li>
          <li>Pre-dispatch digital video condition inspection recording</li>
          <li>Door-to-door delivery directly to your apartment or colony parking in Varanasi</li>
        </ul>
      </div>

      <div class="r2v-card">
        <h3 style="font-family: 'Outfit', sans-serif; font-size: 1.3rem; color: var(--r2v-slate-900); margin-bottom: 12px;">
          <i class="fas fa-car" style="color: var(--r2v-primary); margin-right: 8px;"></i> Dedicated Four-Wheeler Car Carrier Shifting
        </h3>
        <p style="font-size: 0.95rem; color: var(--r2v-slate-700); line-height: 1.7; margin-bottom: 14px;">
          For four-wheelers (hatchbacks, sedans, SUVs), we offer dedicated hydraulic car carriers and closed car trucks. Cars are loaded via specialized ramps, secured by tyre straps, and transported without self-driving wear-and-tear along the highway.
        </p>
        <ul style="padding-left: 20px; font-size: 0.92rem; color: var(--r2v-slate-700); line-height: 1.65;">
          <li>Full insurance coverage for vehicle transit protection</li>
          <li>Detailed job card detailing fuel level, odometer reading, and exterior inspection</li>
          <li>Punctual next-day delivery right to your new driveway in Varanasi</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 11. Route FAQ Accordion -->
<section class="r2v-section">
  <div class="container">
    <div class="r2v-section-header">
      <span class="r2v-section-tag">Frequently Asked Questions</span>
      <h2 class="r2v-section-title">Got Questions About Shifting from Ranchi to Varanasi?</h2>
      <p class="r2v-section-desc">
        Here are direct answers to common questions asked by Banaras Hindu University faculty, railway staff, and families planning a relocation from Ranchi to Varanasi.
      </p>
    </div>

    <div style="max-width: 860px; margin: 0 auto;">
      <div class="r2v-faq-item">
        <div class="r2v-faq-q">
          <span>How long does packing and transit take from Ranchi to Varanasi?</span>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="r2v-faq-a">
          For a standard 2 BHK or 3 BHK household, our packing crew begins at 8:00 AM in Ranchi and completes loading by 12:30 PM. Transit along NH-20 and the NH-19 Grand Trunk Road takes approximately 8 to 10 hours. Your goods arrive at your Varanasi address next morning, allowing our team to unload and arrange your furniture by early afternoon.
        </div>
      </div>

      <div class="r2v-faq-item">
        <div class="r2v-faq-q">
          <span>Are your bills valid for BHU, BLW and Central Government transfer claims?</span>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="r2v-faq-a">
          Yes, 100%. We provide complete computerized GST tax invoices with active GSTIN, SAC codes 9965/9967, Indian Motor Tariff Consignment Notes (Bilty), serialized itemized packing inventories, and electronic E-Way bills. Our paperwork is routinely submitted and accepted across BHU, Indian Railways, BLW, nationalized banks, and central ministries.
        </div>
      </div>

      <div class="r2v-faq-item">
        <div class="r2v-faq-q">
          <span>How do you protect fragile items and electronics over 400 km of highway transit?</span>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="r2v-faq-a">
          We use a 5-layer protective packaging system. Delicate electronics such as LED TVs are encased in custom padded wooden crates and heavy bubble wrap. Glassware and crockery receive individual foam wraps inside double-wall 5-ply cartons. Inside the closed container, all cargo is locked down with industrial nylon ratchet belts to prevent movement when driving along the expressway.
        </div>
      </div>

      <div class="r2v-faq-item">
        <div class="r2v-faq-q">
          <span>Do you generate the interstate E-Way bill required for UP border clearance?</span>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="r2v-faq-a">
          Yes, our logistics office generates the mandatory electronic E-Way bill on the national GST portal before truck dispatch. This document accompanies the vehicle alongside the tax invoice and bilty, ensuring smooth clearance through commercial tax checkpoints between Jharkhand, Bihar, and Uttar Pradesh.
        </div>
      </div>

      <div class="r2v-faq-item">
        <div class="r2v-faq-q">
          <span>Can my motorcycle or scooter be shifted in the same truck as my household items?</span>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="r2v-faq-a">
          Yes, our closed container trucks have dedicated space for two-wheelers. The bike is prepared with protective foam wrapping over the fuel tank, mirrors, and bodywork, then securely lashed using ratchet straps to heavy-duty anchor rings in the container wall. It travels alongside your furniture and is unloaded at your destination.
        </div>
      </div>

      <div class="r2v-faq-item">
        <div class="r2v-faq-q">
          <span>Are there any hidden costs or surprise toll charges added later?</span>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="r2v-faq-a">
          No. Our quotation is completely all-inclusive and fixed in writing before work begins. It covers all packing materials, loading labor, NH-20/NH-19 toll taxes, fuel charges, unloading, and basic room placement. The price on your written quote is exactly what you pay.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 12. Cluster Navigation Module -->
<section class="r2v-section r2v-section-alt">
  <div class="container">
    <div class="r2v-section-header">
      <span class="r2v-section-tag">Explore Shifting Network</span>
      <h2 class="r2v-section-title">Related Moving Routes &amp; Ranchi Relocation Resources</h2>
      <p class="r2v-section-desc">
        Shree Ashirwad Packers and Movers operates a comprehensive relocation network across Jharkhand, Bihar, and Uttar Pradesh. Explore our specialized services and neighboring corridor guides:
      </p>
    </div>

    <div class="r2v-cluster-links">
      <a href="<?php echo SITE_BASE_URL; ?>/" class="r2v-cluster-btn">
        <i class="fas fa-home"></i> Packers and Movers in Ranchi
      </a>
      <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="r2v-cluster-btn">
        <i class="fas fa-calculator"></i> Ranchi Moving Charges Guide
      </a>
      <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-patna-packers-and-movers" class="r2v-cluster-btn">
        <i class="fas fa-city"></i> Ranchi to Patna Route
      </a>
      <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-lucknow-packers-and-movers" class="r2v-cluster-btn">
        <i class="fas fa-route"></i> Ranchi to Lucknow Route
      </a>
      <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-gaya-packers-and-movers" class="r2v-cluster-btn">
        <i class="fas fa-road"></i> Ranchi to Gaya Route
      </a>
      <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-prayagraj-packers-and-movers" class="r2v-cluster-btn">
        <i class="fas fa-landmark"></i> Ranchi to Prayagraj Route
      </a>
      <a href="<?php echo SITE_BASE_URL; ?>/contact" class="r2v-cluster-btn">
        <i class="fas fa-envelope"></i> Contact &amp; Branch Office
      </a>
    </div>
  </div>
</section>

<!-- 13. Call To Action Footer Banner -->
<section class="r2v-section" style="background: linear-gradient(135deg, #78350f 0%, #0f172a 100%); color: #ffffff; text-align: center;">
  <div class="container">
    <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.3rem; font-weight: 800; margin-bottom: 15px; color: #ffffff;">
      Planning Your Move from Ranchi to Varanasi?
    </h2>
    <p style="font-size: 1.12rem; max-width: 720px; margin: 0 auto 30px; color: #e2e8f0; line-height: 1.7;">
      Get a guaranteed, all-inclusive quote today. Next-day delivery, BHU &amp; Central Government transfer bill compliance, and multi-layer defensive packing for a smooth relocation.
    </p>
    <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
      <a href="tel:+918409531615" class="r2v-btn-primary" style="font-size: 1.05rem;">
        <i class="fas fa-phone-alt"></i> Call Helpline: 084095 31615
      </a>
      <a href="https://api.whatsapp.com/send?phone=919835565233&text=Hi%20Shree%20Ashirwad,%20I%20need%20a%20quote%20for%20Ranchi%20to%20Varanasi%20shifting." class="r2v-btn-secondary" target="_blank" rel="noopener" style="font-size: 1.05rem;">
        <i class="fab fa-whatsapp"></i> Chat on WhatsApp (098355 65233)
      </a>
    </div>
  </div>
</section>

<?php
// Include site-wide footer
require_once __DIR__ . '/includes/footer.php';
?>

<!-- Structured Data Schemas -->

<!-- 1. MovingCompany Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MovingCompany",
  "name": "Shree Ashirwad Packers and Movers",
  "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
  "@id": "https://www.shreeashirwadpackers.com/#organization",
  "url": "https://www.shreeashirwadpackers.com",
  "telephone": "+918409531615",
  "priceRange": "₹₹",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Bariatu Road, Near RIMS",
    "addressLocality": "Ranchi",
    "addressRegion": "JH",
    "postalCode": "834009",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 23.3835,
    "longitude": 85.3582
  },
  "areaServed": [
    {
      "@type": "City",
      "name": "Ranchi"
    },
    {
      "@type": "City",
      "name": "Varanasi"
    }
  ],
  "sameAs": [
    "https://www.facebook.com/shreeashirwadpackers",
    "https://twitter.com/shreeashirwad"
  ]
}
</script>

<!-- 2. Service Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Interstate Relocation Services",
  "provider": {
    "@type": "MovingCompany",
    "name": "Shree Ashirwad Packers and Movers"
  },
  "areaServed": [
    {
      "@type": "State",
      "name": "Jharkhand"
    },
    {
      "@type": "State",
      "name": "Uttar Pradesh"
    }
  ],
  "name": "Ranchi to Varanasi Packers and Movers Service",
  "description": "Professional household shifting, BHU academic transfer relocation, and vehicle transport from Ranchi to Varanasi via NH-19 Grand Trunk expressway corridor.",
  "offers": {
    "@type": "Offer",
    "priceCurrency": "INR",
    "price": "12500",
    "availability": "https://schema.org/InStock",
    "url": "https://www.shreeashirwadpackers.com/ranchi-to-varanasi-packers-and-movers"
  }
}
</script>

<!-- 3. BreadcrumbList Schema -->
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
      "name": "Ranchi to Varanasi Packers and Movers",
      "item": "https://www.shreeashirwadpackers.com/ranchi-to-varanasi-packers-and-movers"
    }
  ]
}
</script>

<!-- 4. FAQPage Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How long does packing and transit take from Ranchi to Varanasi?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For a standard 2 BHK or 3 BHK household, our packing crew begins at 8:00 AM in Ranchi and completes loading by 12:30 PM. Transit along NH-20 and the NH-19 Grand Trunk Road takes approximately 8 to 10 hours. Your goods arrive at your Varanasi address next morning, allowing our team to unload and arrange your furniture by early afternoon."
      }
    },
    {
      "@type": "Question",
      "name": "Are your bills valid for BHU, BLW and Central Government transfer claims?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, 100%. We provide complete computerized GST tax invoices with active GSTIN, SAC codes 9965/9967, Indian Motor Tariff Consignment Notes (Bilty), serialized itemized packing inventories, and electronic E-Way bills. Our paperwork is routinely submitted and accepted across BHU, Indian Railways, BLW, nationalized banks, and central ministries."
      }
    },
    {
      "@type": "Question",
      "name": "How do you protect fragile items and electronics over 400 km of highway transit?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We use a 5-layer protective packaging system. Delicate electronics such as LED TVs are encased in custom padded wooden crates and heavy bubble wrap. Glassware and crockery receive individual foam wraps inside double-wall 5-ply cartons. Inside the closed container, all cargo is locked down with industrial nylon ratchet belts to prevent movement when driving along the expressway."
      }
    },
    {
      "@type": "Question",
      "name": "Do you generate the interstate E-Way bill required for UP border clearance?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, our logistics office generates the mandatory electronic E-Way bill on the national GST portal before truck dispatch. This document accompanies the vehicle alongside the tax invoice and bilty, ensuring smooth clearance through commercial tax checkpoints between Jharkhand, Bihar, and Uttar Pradesh."
      }
    },
    {
      "@type": "Question",
      "name": "Can my motorcycle or scooter be shifted in the same truck as my household items?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, our closed container trucks have dedicated space for two-wheelers. The bike is prepared with protective foam wrapping over the fuel tank, mirrors, and bodywork, then securely lashed using ratchet straps to heavy-duty anchor rings in the container wall. It travels alongside your furniture and is unloaded at your destination."
      }
    },
    {
      "@type": "Question",
      "name": "Are there any hidden costs or surprise toll charges added later?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. Our quotation is completely all-inclusive and fixed in writing before work begins. It covers all packing materials, loading labor, NH-20/NH-19 toll taxes, fuel charges, unloading, and basic room placement. The price on your written quote is exactly what you pay."
      }
    }
  ]
}
</script>

</body>
</html>
