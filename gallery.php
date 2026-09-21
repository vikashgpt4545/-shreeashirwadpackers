<?php
/**
 * Gallery & Work Proof Page - Shree Ashirwad Packers and Movers
 * Pure Core PHP Implementation
 * 
 * High-E-E-A-T Photographic Evidence of Real Relocation Operations in Ranchi & Jharkhand
 * Real Moving Fleet, Trained In-House Crews, 5-Layer Packaging, Certified Warehouse & IBA Accreditations
 * Preserving exact canonical URL: https://www.shreeashirwadpackers.com/gallery
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <!-- SEO & Schema Markup (CollectionPage, ImageGallery, BreadcrumbList, FAQPage & MovingCompany) -->
  <?php render_seo_tags('gallery'); ?>

  <!-- Preconnect Google Fonts for High PageSpeed Core Web Vitals -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo GOOGLE_GTAG_ID; ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '<?php echo GOOGLE_GTAG_ID; ?>');
  </script>

  <style>
    /* Gallery Filter Controls */
    .gallery-filter-bar {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 10px;
      margin-bottom: 40px;
    }
    .gallery-filter-btn {
      background: #ffffff;
      border: 1px solid var(--border-color);
      color: #475569;
      padding: 9px 20px;
      border-radius: var(--radius-full);
      font-size: 0.9rem;
      font-weight: 700;
      cursor: pointer;
      transition: all 0.25s ease;
      box-shadow: var(--shadow-sm);
    }
    .gallery-filter-btn:hover,
    .gallery-filter-btn.active {
      background: var(--primary);
      color: #ffffff;
      border-color: var(--primary);
      box-shadow: 0 4px 14px rgba(15, 34, 61, 0.2);
    }

    /* Proof Gallery Grid */
    .proof-gallery-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
      gap: 28px;
    }
    @media (max-width: 640px) {
      .proof-gallery-grid {
        grid-template-columns: 1fr;
      }
    }
    .proof-card {
      background: #ffffff;
      border: 1px solid var(--border-color);
      border-radius: var(--radius-md);
      overflow: hidden;
      box-shadow: var(--shadow-sm);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      display: flex;
      flex-direction: column;
    }
    .proof-card:hover {
      transform: translateY(-6px);
      box-shadow: var(--shadow-lg);
    }
    .proof-card-media {
      position: relative;
      overflow: hidden;
      aspect-ratio: 16 / 10;
      background: #f1f5f9;
    }
    .proof-card-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.5s ease;
    }
    .proof-card:hover .proof-card-img {
      transform: scale(1.05);
    }
    .proof-badge-category {
      position: absolute;
      top: 14px;
      left: 14px;
      background: rgba(15, 34, 61, 0.85);
      backdrop-filter: blur(8px);
      color: #ffffff;
      font-size: 0.75rem;
      font-weight: 700;
      padding: 4px 12px;
      border-radius: var(--radius-full);
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }
    .proof-badge-location {
      position: absolute;
      bottom: 14px;
      right: 14px;
      background: rgba(255, 106, 40, 0.9);
      color: #ffffff;
      font-size: 0.75rem;
      font-weight: 700;
      padding: 4px 12px;
      border-radius: var(--radius-full);
      display: flex;
      align-items: center;
      gap: 5px;
    }
    .proof-card-body {
      padding: 22px;
      display: flex;
      flex-direction: column;
      flex: 1;
    }
    .proof-card-title {
      font-size: 1.15rem;
      font-weight: 800;
      color: var(--primary);
      margin-bottom: 10px;
      line-height: 1.4;
    }
    .proof-card-desc {
      font-size: 0.88rem;
      color: #64748b;
      line-height: 1.6;
      margin-bottom: 16px;
      flex: 1;
    }
    .proof-card-meta {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-top: 1px solid #f1f5f9;
      padding-top: 12px;
      font-size: 0.8rem;
      color: #94a3b8;
    }
    .proof-meta-tag {
      font-weight: 700;
      color: var(--accent);
    }
  </style>
</head>
<body>

  <!-- 1. Global Header Navigation -->
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main id="mainContent">

    <!-- 2. Page Hero & Interactive Breadcrumb Trail -->
    <section class="page-hero">
      <div class="hero-glow hero-glow-1"></div>
      <div class="hero-glow hero-glow-2"></div>
      <div class="container page-hero-wrapper">
        <nav class="breadcrumb-trail" aria-label="Breadcrumb">
          <a href="<?php echo SITE_BASE_URL; ?>/" title="Return to Shree Ashirwad Packers Homepage">Home</a>
          <span class="breadcrumb-sep">&gt;</span>
          <span aria-current="page">Work Proof & Gallery</span>
        </nav>
        <h1 class="page-hero-title">
          Authentic Moving Work Proof & <span class="gradient-text">Operations Gallery in Ranchi</span>
        </h1>
        <p class="page-hero-subtitle">
          In an industry crowded with fly-by-night brokers who rely on downloaded internet stock photos, Shree Ashirwad Packers and Movers believes in total operational transparency. Explore real, unedited photographs of our dedicated closed container fleet, permanent uniform-clad packing specialists, 5-layer shockproof materials, certified warehouse facility, and official IBA & ISO accreditations across Ranchi and Jharkhand.
        </p>
        <div class="about-cta-row" style="justify-content: center; margin-top: 24px;">
          <a href="tel:+918409531615" class="btn-primary-custom" title="Call Shree Ashirwad Proof & Operations Desk: 8409531615">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
            Operations Desk: 8409531615
          </a>
          <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn-outline-custom" title="Chat with Move Supervisor on WhatsApp">
            WhatsApp Live Estimate &rarr;
          </a>
        </div>
      </div>
    </section>

    <!-- 3. Key Credentials & Verified Proof Trust Bar -->
    <section class="credentials-bar-section">
      <div class="container">
        <div class="credentials-grid">
          
          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">25,000+</span>
              <span class="credential-title">Verified Relocations</span>
              <span class="credential-sub">Real Homes & Offices Moved</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">IBA Approved</span>
              <span class="credential-title">Government Recognized</span>
              <span class="credential-sub">100% Bank & PSU Reimbursement</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">ISO 9001:2015</span>
              <span class="credential-title">Certified Quality</span>
              <span class="credential-sub">Audited Packaging Protocols</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">4.9 ★ Rating</span>
              <span class="credential-title">664+ Google Reviews</span>
              <span class="credential-sub">Real Customer Testimonials</span>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- 4. Section 1: The Shree Ashirwad Proof Standards (E-E-A-T Authority) -->
    <section class="about-section" style="padding: 80px 0;">
      <div class="container">
        <div class="about-grid">
          
          <div class="about-images-wrapper">
            <div class="about-image-main">
              <img src="<?php echo SITE_BASE_URL; ?>/images/shree-ashirwad-verified-moving-truck-jharkhand.jpg" alt="Shree Ashirwad Verified Moving Truck in Jharkhand" title="Dedicated Closed Container Moving Fleet" width="560" height="380" loading="lazy">
              <div class="about-badge-floating">
                <span class="badge-num">100% Real</span>
                <span class="badge-txt">Fleet Proof</span>
              </div>
            </div>
            <div class="about-image-sub">
              <img src="<?php echo SITE_BASE_URL; ?>/images/professional-loading-crew-ranchi.jpg" alt="Professional Loading Crew in Ranchi - Shree Ashirwad Packers" title="Trained Permanent Moving Crew in Ranchi" width="280" height="190" loading="lazy">
            </div>
          </div>

          <div class="about-content">
            <div class="section-tag">Uncompromising Transparency</div>
            <h2 class="section-title">
              Why Real Operational Proof Matters: <span class="gradient-text">Eliminating Fake Transporter Risks</span>
            </h2>
            
            <p class="about-lead">
              When searching online for <strong>packers and movers in ranchi</strong>, homeowners and corporate clients are routinely bombarded by lead aggregators and roadside truck brokers presenting fictitious certificates, borrowed logos, and generic stock imagery downloaded from international websites. When the moving day arrives, these brokers dispatch open-body tarpaulin trucks and untrained daily-wage laborers picked up from highway crossroads.
            </p>

            <p class="about-text">
              At <strong>Shree Ashirwad Packers and Movers</strong>, we operate with complete, unvarnished honesty. Every photograph in this gallery demonstrates real, documented moves executed by our full-time, payroll-employed workforce across Jharkhand. Whether moving a 3 BHK family apartment in Morabadi, relocating corporate workstations in Lalpur, packing delicate bone china in Ashok Nagar, or loading luxury sedans in Bokaro, our visual proof represents our daily commitment to zero-damage relocation.
            </p>

            <p class="about-text">
              As the most <strong>trusted packers and movers in ranchi</strong> and an <strong>iba approved packers and movers in ranchi</strong> enterprise, our physical infrastructure includes a 10,000+ sq ft secure storage facility in Ranchi, a proprietary fleet of all-weather closed container trucks (14ft, 17ft, 19ft, 24ft, and 32ft MX), and high-grade hydraulic lifters that guarantee safety on every kilometer.
            </p>

            <div class="about-cta-row">
              <a href="tel:+918409531615" class="btn-primary-custom" title="Schedule Pre-Move Physical Survey at 8409531615">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
                Book Survey: 8409531615
              </a>
              <a href="<?php echo SITE_BASE_URL; ?>/contact" class="btn-outline-custom" title="Visit Shree Ashirwad Packers Ranchi Office">Visit Our Office &rarr;</a>
            </div>

          </div>

        </div>
      </div>
    </section>

    <!-- 5. Section 2: Interactive Operational Proof Gallery Grid -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">First-Hand Operational Evidence</div>
          <h2 class="section-title">
            Verified On-Ground Operations: <span class="gradient-text">Real Fleet, Team & Facilities</span>
          </h2>
          <p class="section-subtitle">
            Browse through categorized proof of real household shifts, office moves, vehicle carriers, engineered packaging, and warehouse storage operations across Jharkhand.
          </p>
        </div>

        <!-- Filter Controls -->
        <div class="gallery-filter-bar">
          <button class="gallery-filter-btn active" data-filter="all" title="View All Moving Work Proof">All Proofs (24)</button>
          <button class="gallery-filter-btn" data-filter="household" title="Filter Household Moving Proofs">Household Relocations</button>
          <button class="gallery-filter-btn" data-filter="corporate" title="Filter Corporate Office Moving Proofs">Office & Commercial</button>
          <button class="gallery-filter-btn" data-filter="vehicle" title="Filter Vehicle & Car Carrier Proofs">Car & Bike Transport</button>
          <button class="gallery-filter-btn" data-filter="packing" title="Filter 5-Layer Packaging Proofs">5-Layer Packaging</button>
          <button class="gallery-filter-btn" data-filter="warehouse" title="Filter Warehouse & Storage Facility Proofs">Warehouse Facility</button>
        </div>

        <!-- Gallery Grid -->
        <div class="proof-gallery-grid" id="proofGalleryGrid">
          
          <!-- Card 1: Verified Moving Truck -->
          <div class="proof-card" data-category="household">
            <div class="proof-card-media">
              <img src="<?php echo SITE_BASE_URL; ?>/images/shree-ashirwad-verified-moving-truck-jharkhand.jpg" alt="Shree Ashirwad Verified Moving Truck in Jharkhand" title="Dedicated Closed Container Fleet in Ranchi" class="proof-card-img" width="400" height="250" loading="lazy">
              <span class="proof-badge-category">Household Moving</span>
              <span class="proof-badge-location">
                <svg viewBox="0 0 24 24" width="12" height="12" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                Morabadi, Ranchi
              </span>
            </div>
            <div class="proof-card-body">
              <h3 class="proof-card-title">Dedicated Closed Container Fleet Dispatch</h3>
              <p class="proof-card-desc">
                Our branded 17-foot all-weather closed container truck deployed for an intercity 2 BHK household relocation from Morabadi, Ranchi. Zero transshipment and tamper-proof bolt locks ensure total transit security.
              </p>
              <div class="proof-card-meta">
                <span>Vehicle: 17ft Closed Container</span>
                <span class="proof-meta-tag">Verified Fleet</span>
              </div>
            </div>
          </div>

          <!-- Card 2: Professional Loading Crew -->
          <div class="proof-card" data-category="household">
            <div class="proof-card-media">
              <img src="<?php echo SITE_BASE_URL; ?>/images/professional-loading-crew-ranchi.jpg" alt="Professional Loading Crew in Ranchi - Shree Ashirwad Packers" title="Trained Permanent Loading Specialists" class="proof-card-img" width="400" height="250" loading="lazy">
              <span class="proof-badge-category">Loading Crew</span>
              <span class="proof-badge-location">
                <svg viewBox="0 0 24 24" width="12" height="12" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                Kanke Road, Ranchi
              </span>
            </div>
            <div class="proof-card-body">
              <h3 class="proof-card-title">Full-Time Payroll Loading Specialists</h3>
              <p class="proof-card-desc">
                Our permanent in-house lifting and rigging team handling heavy furniture and appliances at Kanke Road. Every crew member is police-verified, background-checked, and equipped with ergonomic shoulder lifting straps.
              </p>
              <div class="proof-card-meta">
                <span>Team: 100% Permanent Payroll</span>
                <span class="proof-meta-tag">Police Verified</span>
              </div>
            </div>
          </div>

          <!-- Card 3: Wooden Furniture Wrapping -->
          <div class="proof-card" data-category="packing">
            <div class="proof-card-media">
              <img src="<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg" alt="Heavy Wooden Furniture Protective Wrapping in Bokaro - Shree Ashirwad Packers" title="5-Layer Protective Furniture Packing" class="proof-card-img" width="400" height="250" loading="lazy">
              <span class="proof-badge-category">5-Layer Packing</span>
              <span class="proof-badge-location">
                <svg viewBox="0 0 24 24" width="12" height="12" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                Bokaro Steel City
              </span>
            </div>
            <div class="proof-card-body">
              <h3 class="proof-card-title">Solid Teakwood & Sheesham Furniture Armor</h3>
              <p class="proof-card-desc">
                Demonstrating our engineered 5-layer wrapping technique on a handcrafted Sheesham dining table. Uses virgin 100 GSM bubble wrap, EPE foam sheets, 7-ply corrugated corner guards, and heavy stretch film.
              </p>
              <div class="proof-card-meta">
                <span>Material: 100 GSM Bubble + EPE Foam</span>
                <span class="proof-meta-tag">Zero Scratches</span>
              </div>
            </div>
          </div>

          <!-- Card 4: Commercial Warehouse Facility -->
          <div class="proof-card" data-category="warehouse">
            <div class="proof-card-media">
              <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Commercial Goods Storage and Handling Facility in Ranchi - Shree Ashirwad Packers" title="10,000+ Sq Ft Insured Warehouse in Ranchi" class="proof-card-img" width="400" height="250" loading="lazy">
              <span class="proof-badge-category">Warehousing</span>
              <span class="proof-badge-location">
                <svg viewBox="0 0 24 24" width="12" height="12" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                Tupudana, Ranchi
              </span>
            </div>
            <div class="proof-card-body">
              <h3 class="proof-card-title">10,000+ Sq Ft Modern Storage Facility</h3>
              <p class="proof-card-desc">
                Physical verification of our Tupudana warehouse facility in Ranchi. Outfitted with elevated heavy-duty plastic pallets, 24/7 high-definition CCTV surveillance, multi-zone fire extinguishers, and biological pest control.
              </p>
              <div class="proof-card-meta">
                <span>Security: 24/7 CCTV + Fire + Pest</span>
                <span class="proof-meta-tag">Elevated Pallets</span>
              </div>
            </div>
          </div>

          <!-- Card 5: Car Transport Carrier -->
          <div class="proof-card" data-category="vehicle">
            <div class="proof-card-media">
              <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Insured Car Transport Carrier Loading in Jharkhand - Shree Ashirwad Packers" title="Hydraulic Enclosed Car Carrier Loading" class="proof-card-img" width="400" height="250" loading="lazy">
              <span class="proof-badge-category">Car Transport</span>
              <span class="proof-badge-location">
                <svg viewBox="0 0 24 24" width="12" height="12" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                Ranchi to Bengaluru
              </span>
            </div>
            <div class="proof-card-body">
              <h3 class="proof-card-title">Hydraulic Enclosed Car Carrier Loading</h3>
              <p class="proof-card-desc">
                Loading a client's passenger sedan onto our specialized hydraulic enclosed car carrier. Includes a 20-point joint condition survey, zero-odometer transit guarantee, and heavy wheel-chock lashings.
              </p>
              <div class="proof-card-meta">
                <span>Method: Hydraulic Ramp + Chocks</span>
                <span class="proof-meta-tag">Zero Odometer</span>
              </div>
            </div>
          </div>

          <!-- Card 6: Electronics LED TV Wooden Crating -->
          <div class="proof-card" data-category="packing">
            <div class="proof-card-media">
              <img src="<?php echo SITE_BASE_URL; ?>/images/electronics-led-tv-crating-jharkhand.jpg" alt="Electronics LED TV Crating with Transit Insurance in Jharkhand - Shree Ashirwad Packers" title="Custom Wooden Crating for Large Smart TVs" class="proof-card-img" width="400" height="250" loading="lazy">
              <span class="proof-badge-category">Custom Crating</span>
              <span class="proof-badge-location">
                <svg viewBox="0 0 24 24" width="12" height="12" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                Ashok Nagar, Ranchi
              </span>
            </div>
            <div class="proof-card-body">
              <h3 class="proof-card-title">Reinforced Wooden Crating for Smart TVs</h3>
              <p class="proof-card-desc">
                On-site carpentry fabrication of a custom plywood crate for a 65-inch curved OLED television in Ashok Nagar. Screen is shielded with antistatic foam, air bubble cushioning, and 12mm plywood battens.
              </p>
              <div class="proof-card-meta">
                <span>Asset: 65" Curved OLED Screen</span>
                <span class="proof-meta-tag">Custom Timber Crate</span>
              </div>
            </div>
          </div>

          <!-- Card 7: Office Equipment Moving -->
          <div class="proof-card" data-category="corporate">
            <div class="proof-card-media">
              <img src="<?php echo SITE_BASE_URL; ?>/images/office-equipment-secure-packing-jamshedpur.jpg" alt="Office Equipment Secure Packing in Jamshedpur - Shree Ashirwad Packers" title="Corporate Office Equipment Moving in Jamshedpur" class="proof-card-img" width="400" height="250" loading="lazy">
              <span class="proof-badge-category">Corporate Shifting</span>
              <span class="proof-badge-location">
                <svg viewBox="0 0 24 24" width="12" height="12" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                Bistupur, Jamshedpur
              </span>
            </div>
            <div class="proof-card-body">
              <h3 class="proof-card-title">Corporate IT Hardware & Workstation Shifting</h3>
              <p class="proof-card-desc">
                Relocating a 45-seat corporate financial office in Bistupur, Jamshedpur. Desktop towers, monitors, laser printers, and confidential files packed in anti-static materials with serialized barcode labels.
              </p>
              <div class="proof-card-meta">
                <span>Scope: 45 Workstations + Servers</span>
                <span class="proof-meta-tag">Weekend Zero Downtime</span>
              </div>
            </div>
          </div>

          <!-- Card 8: Fragile Glassware Packing -->
          <div class="proof-card" data-category="packing">
            <div class="proof-card-media">
              <img src="<?php echo SITE_BASE_URL; ?>/images/fragile-glassware-box-packing-ranchi.jpg" alt="Fragile Glassware Box Packing with All-Risk Moving Insurance in Ranchi - Shree Ashirwad Packers" title="Fragile Glassware and Crockery Partitioned Packing" class="proof-card-img" width="400" height="250" loading="lazy">
              <span class="proof-badge-category">Fragile Packing</span>
              <span class="proof-badge-location">
                <svg viewBox="0 0 24 24" width="12" height="12" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                Bariatu, Ranchi
              </span>
            </div>
            <div class="proof-card-body">
              <h3 class="proof-card-title">Partitioned Dish-Packs for Delicate Crockery</h3>
              <p class="proof-card-desc">
                Individual wrapping of fine bone china dinnerware and crystal stemware in Bariatu. Each item is cushioned with newsprint sheets, 50 GSM bubble wrap, and nestled inside corrugated cell partitions.
              </p>
              <div class="proof-card-meta">
                <span>Packing: Cell-Divided Dish-Pack</span>
                <span class="proof-meta-tag">100% Shock Absorbing</span>
              </div>
            </div>
          </div>

          <!-- Card 9: Bike Packing in Custom Crates -->
          <div class="proof-card" data-category="vehicle">
            <div class="proof-card-media">
              <img src="<?php echo SITE_BASE_URL; ?>/images/bike-packing-shree-ashirwad-packers-jharkhand.jpg" alt="Two Wheeler Bike Packing with Comprehensive Transit Insurance in Jharkhand - Shree Ashirwad Packers" title="Insured Two-Wheeler Motorcycle Packing" class="proof-card-img" width="400" height="250" loading="lazy">
              <span class="proof-badge-category">Bike Transport</span>
              <span class="proof-badge-location">
                <svg viewBox="0 0 24 24" width="12" height="12" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                Dhanbad to Pune
              </span>
            </div>
            <div class="proof-card-body">
              <h3 class="proof-card-title">Multi-Layer Protective Wrapping for Motorcycles</h3>
              <p class="proof-card-desc">
                Securing a 350cc Royal Enfield motorcycle for long-distance transit. Mirrors detached and packed, fuel drained, exhaust wrapped in heat-resistant bubble wrap, and tied down with nylon ratchet straps.
              </p>
              <div class="proof-card-meta">
                <span>Security: Ratchet Belts + Foam</span>
                <span class="proof-meta-tag">Zero Scratch Guarantee</span>
              </div>
            </div>
          </div>

          <!-- Card 10: Complete Household Packing in Dhanbad -->
          <div class="proof-card" data-category="household">
            <div class="proof-card-media">
              <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Complete Household Packing in Dhanbad - Shree Ashirwad Packers" title="Complete Household Packing in Dhanbad" class="proof-card-img" width="400" height="250" loading="lazy">
              <span class="proof-badge-category">Household Moving</span>
              <span class="proof-badge-location">
                <svg viewBox="0 0 24 24" width="12" height="12" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                Bank More, Dhanbad
              </span>
            </div>
            <div class="proof-card-body">
              <h3 class="proof-card-title">Comprehensive 3 BHK Household Pack in Dhanbad</h3>
              <p class="proof-card-desc">
                Full-service packing of a senior PSU executive residence in Bank More, Dhanbad. Complete inventory cataloged, room-by-room box labeling, and loading into our dedicated closed container vehicle.
              </p>
              <div class="proof-card-meta">
                <span>Inventory: 65 Cartons + Furniture</span>
                <span class="proof-meta-tag">IBA Approved Bilty</span>
              </div>
            </div>
          </div>

          <!-- Card 11: Heavy Machinery Office Shifting -->
          <div class="proof-card" data-category="corporate">
            <div class="proof-card-media">
              <img src="<?php echo SITE_BASE_URL; ?>/images/heavy-machinery-office-shifting-jharkhand.jpg" alt="Heavy Machinery and Office Shifting in Jharkhand - Shree Ashirwad Packers" title="Industrial Machinery and Heavy Rigging Move" class="proof-card-img" width="400" height="250" loading="lazy">
              <span class="proof-badge-category">Industrial Rigging</span>
              <span class="proof-badge-location">
                <svg viewBox="0 0 24 24" width="12" height="12" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                Namkum Industrial Area, Ranchi
              </span>
            </div>
            <div class="proof-card-body">
              <h3 class="proof-card-title">Heavy Industrial Machinery & Equipment Rigging</h3>
              <p class="proof-card-desc">
                Deploying heavy machinery roller dollies, hydraulic toe jacks, and crane winches to relocate heavy electrical switchgear and diagnostic laboratory machinery in the Namkum Industrial Area.
              </p>
              <div class="proof-card-meta">
                <span>Equipment: Hydraulic Jacks & Dollies</span>
                <span class="proof-meta-tag">Industrial Grade</span>
              </div>
            </div>
          </div>

          <!-- Card 12: Door-to-Door Delivery Truck -->
          <div class="proof-card" data-category="household">
            <div class="proof-card-media">
              <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to Door Insured Moving Truck in Jharkhand - Shree Ashirwad Packers" title="Dedicated Doorstep Delivery Container Truck" class="proof-card-img" width="400" height="250" loading="lazy">
              <span class="proof-badge-category">Doorstep Delivery</span>
              <span class="proof-badge-location">
                <svg viewBox="0 0 24 24" width="12" height="12" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                Doranda, Ranchi
              </span>
            </div>
            <div class="proof-card-body">
              <h3 class="proof-card-title">Intercity Doorstep Unloading & Delivery</h3>
              <p class="proof-card-desc">
                Direct container arrival outside a residential apartment complex in Doranda, Ranchi. Goods unloaded directly from the sealed container truck without any intermediate transshipment or hub dumping.
              </p>
              <div class="proof-card-meta">
                <span>Route: Delhi NCR to Ranchi</span>
                <span class="proof-meta-tag">Direct Doorstep</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- 6. Section 3: Official Certifications & Compliance Proofs -->
    <section class="infra-section">
      <div class="container">
        
        <div class="compliance-box" style="margin-top: 0;">
          <div class="compliance-details">
            <div class="section-tag" style="background: rgba(255,255,255,0.15); color: #fff;">Legitimate Government & Industry Accreditations</div>
            <h3 style="font-size: 1.6rem; color: #ffffff; margin: 12px 0;">
              Government Registered, IBA Approved & ISO 9001:2015 Certified Mover
            </h3>
            <p style="color: #cbd5e1; line-height: 1.65; margin-bottom: 16px;">
              Shree Ashirwad Packers and Movers is an officially audited and accredited relocation enterprise. Our credentials satisfy the most stringent audit committees of nationalized banks (SBI, PNB, Canara Bank, Bank of Baroda), Defence formations (Army, Navy, Air Force), Indian Railways, and Central Public Sector Undertakings (SAIL, Coal India, CMPDI, NTPC).
            </p>
            <div class="compliance-badges-row">
              <span class="compliance-badge-pill">&check; Official IBA Approval Code & Certificate</span>
              <span class="compliance-badge-pill">&check; ISO 9001:2015 Quality Management Certified</span>
              <span class="compliance-badge-pill">&check; 100% GST Registered (SAC 996511 / 996791 / 997139)</span>
              <span class="compliance-badge-pill">&check; MSME Udyam Enterprise Registered</span>
              <span class="compliance-badge-pill">&check; Commercial Fleet National Highway Permits</span>
            </div>
          </div>
          <div class="text-center" style="margin-top: 20px;">
            <a href="tel:+918409531615" class="btn-primary-custom" title="Inquire About IBA Approval & Documentation: Call 8409531615">
              Verify IBA Documentation: 8409531615
            </a>
          </div>
        </div>

        <!-- Infrastructure & Fleet Visual Showcase -->
        <div class="infra-images-grid" style="margin-top: 36px;">
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe Transit Closed Container Truck in Ranchi - Shree Ashirwad Packers" title="Closed Container Shifting Fleet in Ranchi" width="400" height="260" loading="lazy">
          </div>
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg" alt="Domestic Intercity Container Truck Loading in Jharkhand - Shree Ashirwad Packers" title="Insured Highway Relocation Truck Loading" width="400" height="260" loading="lazy">
          </div>
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/packing-materials-corrugated-sheets-ranchi.jpg" alt="Packing Materials and Corrugated Sheets in Ranchi - Shree Ashirwad Packers" title="Engineered 5-Layer Moving Materials" width="400" height="260" loading="lazy">
          </div>
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Commercial Goods Storage and Handling Facility in Ranchi - Shree Ashirwad Packers" title="Secure Goods Warehousing and Transit Hub" width="400" height="260" loading="lazy">
          </div>
        </div>

      </div>
    </section>

    <!-- 7. Section 4: Real-World Relocation Case Studies / Proof Logs -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Documented Case Studies</div>
          <h2 class="section-title">
            Real Project Logs: <span class="gradient-text">Recent Relocations from Ranchi</span>
          </h2>
          <p class="section-subtitle">
            Review detailed case study logs of actual relocations executed by our team, including inventory scope, container configurations, transit routes, and audit outcomes.
          </p>
        </div>

        <div class="checklist-grid">
          
          <div class="checklist-card">
            <span class="checklist-step">Case Study 1: Bank Officer Move</span>
            <h3 class="checklist-title">Ranchi to Bengaluru (1,850 km)</h3>
            <ul class="checklist-items">
              <li><strong>Client:</strong> Senior Branch Manager, State Bank of India.</li>
              <li><strong>Volume:</strong> 3 BHK Household Goods + 1 Royal Enfield Bullet 350.</li>
              <li><strong>Vehicle:</strong> Dedicated 19-Foot Closed Container with wheel chocks.</li>
              <li><strong>Transit Time:</strong> 5 Days Door-to-Door via NH-44 corridor.</li>
              <li><strong>Outcome:</strong> 100% Damage-Free, IBA Bilty approved on first HR submission.</li>
            </ul>
          </div>

          <div class="checklist-card">
            <span class="checklist-step">Case Study 2: Corporate IT Shifting</span>
            <h3 class="checklist-title">Lalpur to Namkum, Ranchi (12 km)</h3>
            <ul class="checklist-items">
              <li><strong>Client:</strong> Healthcare Software Solutions Firm (60 Employees).</li>
              <li><strong>Scope:</strong> 60 Workstations, 2 Server Racks, Conference AV Setup.</li>
              <li><strong>Execution:</strong> Saturday 8:00 AM to Sunday 6:00 PM over a single weekend.</li>
              <li><strong>Packaging:</strong> Anti-static bubble wrap, numbered security crates.</li>
              <li><strong>Outcome:</strong> Zero business downtime; full Monday 9:00 AM operations.</li>
            </ul>
          </div>

          <div class="checklist-card">
            <span class="checklist-step">Case Study 3: SUV & Home Combo</span>
            <h3 class="checklist-title">Bokaro Steel City to Pune (1,680 km)</h3>
            <ul class="checklist-items">
              <li><strong>Client:</strong> Steel Authority of India (SAIL) Deputy General Manager.</li>
              <li><strong>Scope:</strong> Complete 2 BHK Household + Hyundai Creta SUV.</li>
              <li><strong>Vehicle:</strong> Specialized 32-Foot MX Closed Container Truck.</li>
              <li><strong>Safety:</strong> Pre-trip vehicle survey, nylon ratchet wheel tie-downs.</li>
              <li><strong>Outcome:</strong> Reached Pune in 4 days with zero odometer addition.</li>
            </ul>
          </div>

          <div class="checklist-card">
            <span class="checklist-step">Case Study 4: Long-Term Storage</span>
            <h3 class="checklist-title">Harmu Housing Colony (8 Months)</h3>
            <ul class="checklist-items">
              <li><strong>Client:</strong> NRI Family Renovating Ancestral Bungalow in Harmu.</li>
              <li><strong>Scope:</strong> Antique Teakwood Furniture, Oil Paintings, Appliances.</li>
              <li><strong>Facility:</strong> Tupudana Warehouse, elevated plastic pallet storage.</li>
              <li><strong>Maintenance:</strong> Quarterly pest control, humidity & CCTV monitoring.</li>
              <li><strong>Outcome:</strong> Re-delivered after 8 months in 100% pristine condition.</li>
            </ul>
          </div>

        </div>

      </div>
    </section>

    <!-- 8. Section 5: Benchmark Comparison: Verified Mover vs Roadside Brokers with Fake Stock Photos -->
    <section class="comparison-section" style="padding: 80px 0; background: #f8fafc;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Authenticity Benchmark</div>
          <h2 class="section-title">
            Shree Ashirwad Verified Proof vs <span class="gradient-text">Unregistered Brokers with Stock Photos</span>
          </h2>
          <p class="section-subtitle">
            See why discerning clients and corporate audit committees verify on-ground operational evidence before entrusting their irreplaceable belongings to a moving company.
          </p>
        </div>

        <div class="comparison-table-wrapper">
          <table class="comp-table">
            <thead>
              <tr>
                <th style="width: 34%;">Operational Proof Benchmark</th>
                <th class="col-brand" style="width: 33%;">Shree Ashirwad Packers and Movers</th>
                <th class="col-brokers" style="width: 33%;">Unregistered Aggregators & Roadside Brokers</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Vehicle Fleet Authenticity</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Proprietary Closed Steel Containers with GPS</span></td>
                <td><span class="badge-no">&#x2717; Downloaded Stock Photos; Hire Open Tarpaulin Trucks</span></td>
              </tr>
              <tr>
                <td><strong>Lifting & Packing Personnel</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; 100% Full-Time Police-Verified Permanent Staff</span></td>
                <td><span class="badge-no">&#x2717; Untrained Daily-Wage Laborers from Street Corners</span></td>
              </tr>
              <tr>
                <td><strong>Government & IBA Accreditations</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Official IBA Approval Code & ISO 9001:2015 Audit</span></td>
                <td><span class="badge-no">&#x2717; Fake Logos Pasted on Website, Rejected by Bank HR</span></td>
              </tr>
              <tr>
                <td><strong>Physical Warehousing Facility</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; 10,000+ Sq Ft Real Facility Open for Client Inspection</span></td>
                <td><span class="badge-no">&#x2717; Virtual Address / Coworking Desk with Zero Storage Space</span></td>
              </tr>
              <tr>
                <td><strong>Packaging Material Standard</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; 5-Layer System: Virgin Bubble, EPE Foam, 7-Ply Cartons</span></td>
                <td><span class="badge-no">&#x2717; Single-Layer Dirty Recycled Boxes with No Cushioning</span></td>
              </tr>
              <tr>
                <td><strong>Custom Timber Crating</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; On-Site Custom Carpentry for Large Smart TVs & Glass</span></td>
                <td><span class="badge-no">&#x2717; Wrap TVs in Blankets; High Risk of Screen Cracking</span></td>
              </tr>
              <tr>
                <td><strong>Real Customer Reviews</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; 664+ Verified Google Reviews (4.9★ Real Profiles)</span></td>
                <td><span class="badge-no">&#x2717; Fake Fabricated Testimonials with Stolen Stock Headshots</span></td>
              </tr>
              <tr>
                <td><strong>Transit Insurance Coverage</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Authentic Cover Notes via Registered National Insurers</span></td>
                <td><span class="badge-no">&#x2717; Verbal Assurances of "Driver Liability" with Zero Payout</span></td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </section>

    <!-- 9. Real Customer Reviews from Google My Business (GMB) -->
    <?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

    <!-- 10. Section 7: Frequently Asked Questions (FAQ) -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Verification & Common Questions</div>
          <h2 class="section-title">
            Frequently Asked Questions on <span class="gradient-text">Our Work Proof & Operations</span>
          </h2>
          <p class="section-subtitle">
            Get clear answers about our operational proof, physical facility inspections, IBA approval verification, and moving standards.
          </p>
        </div>

        <div class="about-faq-grid">
          
          <div class="about-faq-card">
            <h3 class="about-faq-question">Are the photos in this gallery real on-ground operations of Shree Ashirwad Packers?</h3>
            <p class="about-faq-answer">
              Yes, 100%. Every photo displayed in this gallery depicts genuine relocation projects executed by our full-time, permanent moving crew, our dedicated closed container fleet, and our certified warehouse facility in Ranchi and across Jharkhand. We never use fake stock photos.
            </p>
          </div>

          <div class="about-faq-card">
            <h3 class="about-faq-question">How can I verify Shree Ashirwad Packers IBA approval and ISO 9001:2015 certification?</h3>
            <p class="about-faq-answer">
              Our IBA approval code and ISO 9001:2015 certificate numbers are printed on our official consignment notes (LR Bilty) and GST invoices. Clients can verify our credentials at our Ranchi headquarters at Morabadi or request digital verification copies via WhatsApp at 8409531615.
            </p>
          </div>

          <div class="about-faq-card">
            <h3 class="about-faq-question">Can I inspect the moving truck and packing materials before the relocation date?</h3>
            <p class="about-faq-answer">
              Yes, absolutely. We welcome customers to visit our central fleet depot and warehouse in Ranchi or request a pre-move physical survey where our move manager presents material samples including 100 GSM bubble wrap, 5-ply cartons, and EPE foam sheets.
            </p>
          </div>

          <div class="about-faq-card">
            <h3 class="about-faq-question">Do you use permanent company employees or temporary daily-wage laborers for moving?</h3>
            <p class="about-faq-answer">
              We employ 100% full-time, payroll-employed packing technicians and loading specialists who are police-verified, background-checked, and rigorously trained in furniture carpentry, appliance handling, and heavy rigging.
            </p>
          </div>

          <div class="about-faq-card">
            <h3 class="about-faq-question">Can I visit your warehouse facility in Ranchi to inspect goods storage conditions?</h3>
            <p class="about-faq-answer">
              Yes. Our warehousing facility in Ranchi is open for scheduled customer visits Monday through Saturday. You can inspect our elevated pallet racking, 24/7 CCTV surveillance system, fire safety equipment, and quarterly pest-control documentation.
            </p>
          </div>

          <div class="about-faq-card">
            <h3 class="about-faq-question">Do your trucks have GPS live tracking that clients can monitor?</h3>
            <p class="about-faq-answer">
              Yes. Every long-distance container truck in our fleet is equipped with satellite GPS transponders. Our central control room in Ranchi monitors highway movements 24/7, and clients receive live waypoint location updates during intercity moves.
            </p>
          </div>

          <div class="about-faq-card">
            <h3 class="about-faq-question">What proof do you provide for employer transfer reimbursement claims?</h3>
            <p class="about-faq-answer">
              We issue comprehensive audit-ready documentation: IBA-approved Consignment Note (LR Bilty), 100% GST Tax Invoice (SAC 996511 / 996791), serialized itemized packing manifest, weighbridge slips, and insurance cover notes accepted by all Banks, Defence, Railways, and PSUs.
            </p>
          </div>

          <div class="about-faq-card">
            <h3 class="about-faq-question">How do you protect luxury furniture and expensive LED TVs from transit scratches?</h3>
            <p class="about-faq-answer">
              We apply a scientific 5-layer packaging standard: virgin 100 GSM air bubble film, EPE shock foam, heavy-duty 7-ply corrugated sheets, edge corner guards, and custom wooden crating for large LED/OLED televisions and glass tabletops.
            </p>
          </div>

        </div>

      </div>
    </section>

    <!-- 11. Section 8: Pre-Footer CTA Banner & Ranchi Coverage Network -->
    <section class="cta-banner-section">
      <div class="container">
        
        <div class="cta-banner-card">
          <div class="cta-banner-content">
            <h2 class="cta-banner-title">Choose Jharkhand's Most Transparent & Proven Mover</h2>
            <p class="cta-banner-desc">
              Don't leave your cherished home investments to unverified roadside brokers. Experience the confidence of working with an authentic, IBA approved, and ISO certified moving leader with 15+ years of proven track record.
            </p>
            <div class="about-cta-row" style="margin-top: 20px;">
              <a href="tel:+918409531615" class="btn-primary-custom" title="Call Shree Ashirwad Moving Hotline: 8409531615">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
                Call Hotline: 8409531615
              </a>
              <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn-outline-custom" title="Get Instant Verified Quote on WhatsApp" style="border-color: #ffffff; color: #ffffff;">
                WhatsApp Moving Quote &rarr;
              </a>
            </div>
          </div>
        </div>

        <!-- Localized Ranchi Localities & Jharkhand District Links -->
        <div class="neighborhoods-card" style="margin-top: 40px;">
          <h3 class="neighborhoods-title">
            <svg viewBox="0 0 24 24" width="20" height="20"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
            Verified Operations Coverage Across Ranchi & Jharkhand
          </h3>
          <p style="font-size: 0.9rem; color: #64748b; margin-bottom: 16px;">
            Our mobile relocation and rigging crews provide rapid dispatch across all Ranchi residential and commercial sectors:
          </p>
          <div class="neighborhoods-tags">
            <span class="area-pill">Harmu Housing Colony</span>
            <span class="area-pill">Kanke Road</span>
            <span class="area-pill">Morabadi</span>
            <span class="area-pill">Bariatu</span>
            <span class="area-pill">Lalpur</span>
            <span class="area-pill">Doranda</span>
            <span class="area-pill">Ashok Nagar</span>
            <span class="area-pill">Argora</span>
            <span class="area-pill">Ratu Road</span>
            <span class="area-pill">Dhurwa</span>
            <span class="area-pill">Namkum</span>
            <span class="area-pill">Hinoo</span>
            <span class="area-pill">Tupudana Industrial Area</span>
            <span class="area-pill">Booty More</span>
            <span class="area-pill">Kokar</span>
            <span class="area-pill">Chutia</span>
          </div>
          <div style="margin-top: 20px; padding-top: 16px; border-top: 1px solid #e2e8f0;">
            <p style="font-size: 0.85rem; color: #64748b; margin-bottom: 8px;"><strong>Jharkhand District Branches:</strong></p>
            <div style="display: flex; flex-wrap: wrap; gap: 10px; font-size: 0.85rem;">
              <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bokaro" title="Packers and Movers in Bokaro" style="color: var(--primary); text-decoration: none; font-weight: 600;">Bokaro Steel City</a> &bull;
              <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-jamshedpur" title="Packers and Movers in Jamshedpur" style="color: var(--primary); text-decoration: none; font-weight: 600;">Jamshedpur Tatanagar</a> &bull;
              <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dhanbad" title="Packers and Movers in Dhanbad" style="color: var(--primary); text-decoration: none; font-weight: 600;">Dhanbad</a> &bull;
              <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-deoghar" title="Packers and Movers in Deoghar" style="color: var(--primary); text-decoration: none; font-weight: 600;">Deoghar</a> &bull;
              <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hazaribagh" title="Packers and Movers in Hazaribagh" style="color: var(--primary); text-decoration: none; font-weight: 600;">Hazaribagh</a> &bull;
              <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-giridih" title="Packers and Movers in Giridih" style="color: var(--primary); text-decoration: none; font-weight: 600;">Giridih</a> &bull;
              <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ramgarh" title="Packers and Movers in Ramgarh" style="color: var(--primary); text-decoration: none; font-weight: 600;">Ramgarh Cantt</a>
            </div>
          </div>
        </div>

      </div>
    </section>

  </main>

  <!-- Global Footer -->
  <?php include __DIR__ . '/includes/footer.php'; ?>

  <!-- Interactive Gallery Filter JavaScript -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var filterButtons = document.querySelectorAll('.gallery-filter-btn');
      var proofCards = document.querySelectorAll('.proof-card');

      filterButtons.forEach(function(btn) {
        btn.addEventListener('click', function() {
          filterButtons.forEach(function(b) { b.classList.remove('active'); });
          this.classList.add('active');

          var filterValue = this.getAttribute('data-filter');

          proofCards.forEach(function(card) {
            if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
              card.style.display = 'flex';
            } else {
              card.style.display = 'none';
            }
          });
        });
      });
    });
  </script>

  <!-- Core JavaScript -->
  <script src="<?php echo SITE_BASE_URL; ?>/assets/js/main.js" defer></script>
</body>
</html>
