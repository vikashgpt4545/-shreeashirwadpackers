<?php
/**
 * International Moving Services Page - Shree Ashirwad Packers and Movers
 * Pure Core PHP Implementation
 * 
 * Global Relocation Specialists, FCL & LCL Ocean Freight, Air Cargo Express, ISPM-15 Export Crating, Customs Clearance
 * Preserving exact canonical URL: https://www.shreeashirwadpackers.com/international-service/
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
  
  <!-- SEO & Schema Markup (Service, BreadcrumbList, FAQPage & MovingCompany) -->
  <?php render_seo_tags('international-service'); ?>

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
          <a href="<?php echo SITE_BASE_URL; ?>/#services" title="View All Relocation Services">Services</a>
          <span class="breadcrumb-sep">&gt;</span>
          <span aria-current="page">International Service</span>
        </nav>
        <h1 class="page-hero-title">
          International Moving Services in <span class="gradient-text">Ranchi - Global Relocation</span>
        </h1>
        <p class="page-hero-subtitle">
          Relocating across borders? Trust Jharkhand's premier international moving specialists. We manage complete door-to-door worldwide relocation, sea freight FCL/LCL, express air cargo, ISPM-15 export wooden crating, Indian port customs clearance, and overseas delivery across 150+ countries.
        </p>
        <div class="about-cta-row" style="justify-content: center; margin-top: 24px;">
          <a href="tel:+918409531615" class="btn-primary-custom" title="Call International Moving Desk: 8409531615">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
            International Quote: 8409531615
          </a>
          <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn-outline-custom" title="Get Overseas Relocation Estimate on WhatsApp">
            WhatsApp Estimate &rarr;
          </a>
        </div>
      </div>
    </section>

    <!-- 3. Key Credentials & Global Reach Trust Bar -->
    <section class="credentials-bar-section">
      <div class="container">
        <div class="credentials-grid">
          
          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">150+</span>
              <span class="credential-title">Countries Connected</span>
              <span class="credential-sub">Worldwide Door-to-Door Network</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">ISPM-15</span>
              <span class="credential-title">Certified Heat Treatment</span>
              <span class="credential-sub">IPPC Export Wooden Crates</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">100% Legal</span>
              <span class="credential-title">Customs Clearance</span>
              <span class="credential-sub">Seaport & Airport Documentation</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1 .4-1 1v11c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">Port Tie-Ups</span>
              <span class="credential-title">Kolkata & Mumbai JNPT</span>
              <span class="credential-sub">Road-Feeder Direct Transit</span>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- 4. Section 1: Overview of International Moving in Ranchi & Jharkhand -->
    <section class="about-section" style="padding: 80px 0;">
      <div class="container">
        <div class="about-grid">
          
          <div class="about-images-wrapper">
            <div class="about-image-main">
              <img src="<?php echo SITE_BASE_URL; ?>/images/waterproof-container-loading-jharkhand.jpg" alt="International Export Container Loading in Jharkhand - Shree Ashirwad Packers" title="International Moving Services in Ranchi - Global Relocation" width="560" height="380" loading="lazy">
              <div class="about-badge-floating">
                <span class="badge-num">150+</span>
                <span class="badge-txt">Global Destinations</span>
              </div>
            </div>
            <div class="about-image-sub">
              <img src="<?php echo SITE_BASE_URL; ?>/images/packing-materials-corrugated-sheets-ranchi.jpg" alt="Export Packaging Materials for International Shipping - Shree Ashirwad Packers" title="Export Packaging for International Relocation in Ranchi" width="280" height="190" loading="lazy">
            </div>
          </div>

          <div class="about-content">
            <div class="section-tag">Global Freight Forwarding</div>
            <h2 class="section-title">
              Specialized <span class="gradient-text">International Moving Services in Ranchi</span>
            </h2>
            
            <p class="about-lead">
              Relocating your household across international borders—whether immigrating to the United States, taking up an executive assignment in London, moving to Sydney, or joining a corporate firm in Dubai or Singapore—is vastly more intricate than relocating domestically. At Shree Ashirwad Packers and Movers, we provide comprehensive <strong>international moving services in ranchi</strong> and trusted <strong>international packers and movers in ranchi</strong> engineered for seamless worldwide relocation.
            </p>

            <p class="about-text">
              International moving involves navigating maritime cabotage laws, biosecurity quarantines, foreign customs tariffs, and multi-modal containerized transport. When inexperienced transporters attempt overseas shipments, raw wooden crates get confiscated and incinerated by foreign biosecurity agencies, goods get trapped in bonded warehouses incurring exorbitant demurrage charges, and standard cartons collapse under weeks of salty, humid ocean air.
            </p>

            <p class="about-text">
              As the premier <strong>packers and movers in ranchi jharkhand</strong>, we manage the entire global supply chain: professional multi-layer export packing in Ranchi, certified ISPM-15 heat-treated wooden crating, dedicated road-feeder transport to Kolkata Syama Prasad Mookerjee Port, Haldia, or Mumbai Nhava Sheva (JNPT), formal Indian Customs clearance, ocean or air freight booking, destination port clearance, and doorstep delivery with unpacking in over 150 countries.
            </p>

            <div class="about-cta-row">
              <a href="tel:+918409531615" class="btn-primary-custom" title="Call International Specialist at 8409531615">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
                Call Global Desk: 8409531615
              </a>
              <a href="<?php echo SITE_BASE_URL; ?>/contact" class="btn-outline-custom" title="Contact Shree Ashirwad Packers Ranchi Office">Request Overseas Plan &rarr;</a>
            </div>

          </div>

        </div>
      </div>
    </section>

    <!-- 5. Section 2: Multi-Modal Global Transit Options -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Global Freight Modes</div>
          <h2 class="section-title">
            Tailored International Transit: <span class="gradient-text">Sea Freight Shipping India</span>
          </h2>
          <p class="section-subtitle">
            Depending on your relocation timeline, budget, and cargo volume, we customize multi-modal freight solutions utilizing international ocean shipping lines and scheduled <strong>air freight baggage movers</strong>.
          </p>
        </div>

        <div class="b2b-sectors-grid">
          
          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
            </div>
            <h3 class="b2b-sector-title">FCL Ocean Shipping</h3>
            <p class="b2b-sector-desc">
              Recommended for full 2 BHK, 3 BHK, and 4 BHK villa relocations. You receive exclusive use of a 20ft or 40ft steel marine container loaded and sealed at your Ranchi doorstep with a tamper-proof customs bolt seal.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>
            </div>
            <h3 class="b2b-sector-title">LCL Consolidated Sea Freight</h3>
            <p class="b2b-sector-desc">
              The cost-effective choice when relocating partial furniture, personal luggage, or books. Goods are packed inside reinforced wooden liftvans and consolidated with other cargo, paying only for the volume utilized.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
            </div>
            <h3 class="b2b-sector-title">Express Air Cargo Baggage</h3>
            <p class="b2b-sector-desc">
              When you need essential belongings immediately upon landing abroad, our express international air cargo delivers within 5 to 8 business days. Ideal for laptops, priority wardrobe, documents, and baby essentials.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1 .4-1 1v11c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/></svg>
            </div>
            <h3 class="b2b-sector-title">Port Feeder Intermodal Transit</h3>
            <p class="b2b-sector-desc">
              We operate dedicated GPS-tracked closed container feeder trucks connecting Ranchi directly to primary Indian maritime gateways: Kolkata Port (Syama Prasad Mookerjee Port, 420 km), Haldia, and Mumbai JNPT.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            <h3 class="b2b-sector-title">Marine All-Risk Transit Insurance</h3>
            <p class="b2b-sector-desc">
              Ocean voyages entail risks of rough seas and container sweating. We arrange Institute Cargo Clauses (A) Marine All-Risk Transit Insurance covering total declared value from origin packing in Ranchi through to foreign delivery.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
            </div>
            <h3 class="b2b-sector-title">Global Doorstep Delivery</h3>
            <p class="b2b-sector-desc">
              Through our accredited partner moving networks across the Americas, Europe, Middle East, and Asia-Pacific, our destination crews handle customs release, delivery, complete unpacking, and debris removal.
            </p>
          </div>

        </div>

      </div>
    </section>

    <!-- 6. Section 3: International Export Packaging Standards (ISPM-15 Compliant) -->
    <section class="section" style="padding: 80px 0; background: #f8fafc;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Export Packaging Standards</div>
          <h2 class="section-title">
            ISPM-15 Certified Crating for <span class="gradient-text">Overseas Relocation Services Ranchi</span>
          </h2>
          <p class="section-subtitle">
            International maritime shipping subjects your possessions to months of saline ocean air, multi-directional g-forces, and strict foreign quarantine laws. Explore our specialized packaging engineering for <strong>global relocation services in ranchi</strong>.
          </p>
        </div>

        <div class="room-packing-grid">
          
          <div class="room-pack-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/electronics-led-tv-crating-jharkhand.jpg" alt="ISPM-15 Heat Treated Wooden Crating for Overseas Moving - Shree Ashirwad Packers" title="ISPM-15 Certified Export Wooden Crating Ranchi" class="room-pack-img" width="400" height="260" loading="lazy">
            <div class="room-pack-body">
              <h3 class="room-pack-title">ISPM-15 Heat-Treated Wooden Crates</h3>
              <p class="room-pack-text">
                All solid wood used in our crates undergoes core thermal heat treatment to a minimum temperature of 56°C for 30 minutes in certified kilns, permanently stamped with the recognized IPPC wheat emblem.
              </p>
              <div class="room-pack-tags">
                <span class="room-pack-tag">IPPC Stamped</span>
                <span class="room-pack-tag">USDA & DEFRA Compliant</span>
                <span class="room-pack-tag">Debarked Timber</span>
              </div>
            </div>
          </div>

          <div class="room-pack-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Moisture Barrier Vacuum Foil Packaging for Ocean Shipping - Shree Ashirwad Packers" title="Aluminum Barrier Foil Packaging for Sea Cargo" class="room-pack-img" width="400" height="260" loading="lazy">
            <div class="room-pack-body">
              <h3 class="room-pack-title">Aluminum Barrier Foil & Desiccant Sealing</h3>
              <p class="room-pack-text">
                To prevent "container rain" caused by temperature swings across equatorial waters, we seal delicate electronics, artwork, and fabrics in heat-welded multi-layer aluminum barrier foil with active silica desiccant pouches.
              </p>
              <div class="room-pack-tags">
                <span class="room-pack-tag">Anti-Container Rain</span>
                <span class="room-pack-tag">Silica Desiccants</span>
                <span class="room-pack-tag">Corrosion Inhibitors</span>
              </div>
            </div>
          </div>

          <div class="room-pack-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Heavy Duty Export Corrugated Cartons for Ocean Freight - Shree Ashirwad Packers" title="7-Ply Heavy Export Cartons for Sea Shipping" class="room-pack-img" width="400" height="260" loading="lazy">
            <div class="room-pack-body">
              <h3 class="room-pack-title">7-Ply Virgin Kraft Export Master Cartons</h3>
              <p class="room-pack-text">
                Standard domestic 3-ply cartons collapse under prolonged maritime stacking loads. We use heavy 7-ply virgin kraft master cartons engineered with high wet-bursting resistance, reinforced with cross-weave filament tape.
              </p>
              <div class="room-pack-tags">
                <span class="room-pack-tag">7-Ply Heavy Kraft</span>
                <span class="room-pack-tag">High Wet-Bursting</span>
                <span class="room-pack-tag">Filament Reinforced</span>
              </div>
            </div>
          </div>

          <div class="room-pack-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Multi Layer Foam and Quilted Furniture Padding for Ocean Transit - Shree Ashirwad Packers" title="International Furniture Padding and Wrapping" class="room-pack-img" width="400" height="260" loading="lazy">
            <div class="room-pack-body">
              <h3 class="room-pack-title">Multi-Layer Foam & Quilted Export Padding</h3>
              <p class="room-pack-text">
                Every piece of wooden and upholstered furniture undergoes a 5-layer protective wrapping process: non-abrasive foam, double air bubble wrap, heavy corrugated edge armor, quilted moving blankets, and heavy shrink wrap.
              </p>
              <div class="room-pack-tags">
                <span class="room-pack-tag">5-Layer Armor</span>
                <span class="room-pack-tag">Vibration Damped</span>
                <span class="room-pack-tag">Tagged Hardware Bags</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- 7. Section 4: Comprehensive Indian Customs Clearance & Port Documentation -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Indian Customs Clearance Protocols</div>
          <h2 class="section-title">
            Indian Seaport & Airport <span class="gradient-text">Customs Clearance India</span>
          </h2>
          <p class="section-subtitle">
            Exporting personal household belongings from India is legally regulated under the Customs Act 1962 and Transfer of Residence (TR) baggage regulations. Our licensed Custom House Agents (CHA) handle all formalities seamlessly.
          </p>
        </div>

        <div class="checklist-grid">
          
          <div class="checklist-card">
            <span class="checklist-step">Phase 1: Baggage Declaration</span>
            <h3 class="checklist-title">Annexure-A Filing</h3>
            <ul class="checklist-items">
              <li>Official formal declaration filed with Indian Customs certifying personal used effects.</li>
              <li>Verification that consignment contains zero commercial contraband or restricted goods.</li>
              <li>Signed by shipper with authorized power of attorney to our licensed CHA.</li>
              <li>Pre-clearance compliance review to avoid customs hold delays at seaport.</li>
            </ul>
          </div>

          <div class="checklist-card">
            <span class="checklist-step">Phase 2: Identity Verification</span>
            <h3 class="checklist-title">Passport & Visa Audit</h3>
            <ul class="checklist-items">
              <li>Submission of authenticated original passport copies and long-term overseas visas.</li>
              <li>Work permit or Permanent Residency (PR) card validation with embassy attestations.</li>
              <li>Confirmed one-way air flight ticket submission matching departure schedule.</li>
              <li>Employer transfer order verification for corporate and diplomatic assignments.</li>
            </ul>
          </div>

          <div class="checklist-card">
            <span class="checklist-step">Phase 3: Valuation Manifest</span>
            <h3 class="checklist-title">Itemized Packing List</h3>
            <ul class="checklist-items">
              <li>Detailed English-language packing list itemizing box numbers, descriptions, and values.</li>
              <li>Make, model, and serial numbers cataloged for all major electronic appliances.</li>
              <li>Separate packing list categorization for books, personal clothing, and silverware.</li>
              <li>Preparation of consular commercial invoice where required by destination country.</li>
            </ul>
          </div>

          <div class="checklist-card">
            <span class="checklist-step">Phase 4: Dock Inspection & B/L</span>
            <h3 class="checklist-title">Out of Charge Order</h3>
            <ul class="checklist-items">
              <li>Licensed CHA attends physical dock examination at Kolkata Port or Mumbai JNPT.</li>
              <li>Securing official customs Out of Charge (OOC) order permitting vessel loading.</li>
              <li>Issuance of Original Marine Bill of Lading (B/L) or Air Waybill (AWB).</li>
              <li>Container bolt-seal number officially recorded on shipping line manifest.</li>
            </ul>
          </div>

        </div>

      </div>
    </section>

    <!-- 8. Section 5: Destination Country Customs & International Cost Matrix -->
    <section class="section" style="padding: 80px 0; background: #f8fafc;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Global Destination Rules & Pricing</div>
          <h2 class="section-title">
            International Relocation <span class="gradient-text">Cost Matrix & Timelines</span>
          </h2>
          <p class="section-subtitle">
            Review our official <strong>packers and movers in ranchi price list</strong> for global shipping. Compare transparent <strong>packers and movers charges in ranchi</strong> for sea and air freight, with complete guidance on destination duty exemptions (US CBP 3299, UK ToR01, Canada BSF186, Australia DAFF, UAE Residence).
          </p>
        </div>

        <div class="comparison-table-wrapper" style="margin-top: 30px;">
          <table class="comp-table">
            <thead>
              <tr>
                <th style="width: 25%;">Destination Region & Ports</th>
                <th style="width: 20%;">Ocean Transit Time</th>
                <th style="width: 18%;">Air Cargo Time</th>
                <th style="width: 19%;">Ocean LCL (per CBM)</th>
                <th style="width: 18%;">Full 20ft Container (FCL)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>United Kingdom & Europe</strong><br><span style="font-size: 0.8rem; color: #64748b;">London, Felixstowe, Rotterdam, Hamburg</span></td>
                <td>30 – 45 Days</td>
                <td>5 – 8 Days</td>
                <td><strong style="color: var(--primary);">₹18,000 – ₹28,000</strong></td>
                <td><strong style="color: var(--accent);">₹3,20,000 – ₹4,80,000</strong></td>
              </tr>
              <tr>
                <td><strong>USA & Canada (East Coast)</strong><br><span style="font-size: 0.8rem; color: #64748b;">New York, New Jersey, Toronto, Montreal</span></td>
                <td>35 – 50 Days</td>
                <td>6 – 9 Days</td>
                <td><strong style="color: var(--primary);">₹22,000 – ₹32,000</strong></td>
                <td><strong style="color: var(--accent);">₹3,80,000 – ₹5,50,000</strong></td>
              </tr>
              <tr>
                <td><strong>USA & Canada (West Coast)</strong><br><span style="font-size: 0.8rem; color: #64748b;">Los Angeles, San Francisco, Vancouver</span></td>
                <td>40 – 55 Days</td>
                <td>6 – 9 Days</td>
                <td><strong style="color: var(--primary);">₹24,000 – ₹35,000</strong></td>
                <td><strong style="color: var(--accent);">₹4,20,000 – ₹6,00,000</strong></td>
              </tr>
              <tr>
                <td><strong>Australia & New Zealand</strong><br><span style="font-size: 0.8rem; color: #64748b;">Sydney, Melbourne, Brisbane, Auckland</span></td>
                <td>30 – 42 Days</td>
                <td>5 – 8 Days</td>
                <td><strong style="color: var(--primary);">₹20,000 – ₹30,000</strong></td>
                <td><strong style="color: var(--accent);">₹3,50,000 – ₹5,20,000</strong></td>
              </tr>
              <tr>
                <td><strong>UAE & Middle East</strong><br><span style="font-size: 0.8rem; color: #64748b;">Dubai, Abu Dhabi, Doha, Muscat</span></td>
                <td>15 – 25 Days</td>
                <td>3 – 5 Days</td>
                <td><strong style="color: var(--primary);">₹14,000 – ₹22,000</strong></td>
                <td><strong style="color: var(--accent);">₹2,40,000 – ₹3,80,000</strong></td>
              </tr>
              <tr>
                <td><strong>Singapore & Southeast Asia</strong><br><span style="font-size: 0.8rem; color: #64748b;">Singapore, Kuala Lumpur, Bangkok</span></td>
                <td>18 – 28 Days</td>
                <td>4 – 6 Days</td>
                <td><strong style="color: var(--primary);">₹15,000 – ₹24,000</strong></td>
                <td><strong style="color: var(--accent);">₹2,60,000 – ₹4,00,000</strong></td>
              </tr>
            </tbody>
          </table>
        </div>

        <p style="font-size: 0.85rem; color: #64748b; margin-top: 14px; text-align: center;">
          *Note: Costs include multi-layer export packing in Ranchi, road-feeder transit to seaport, Indian customs clearance, and ocean/air freight. Destination terminal handling charges (DTHC), quarantine inspections, and local taxes are assessed per destination tariff. Call our international desk at <strong>8409531615</strong> for a personalized survey.
        </p>

      </div>
    </section>

    <!-- 9. Section 6: IBA Approved Corporate Billing & 100% GST Compliance -->
    <section class="infra-section">
      <div class="container">
        
        <div class="compliance-box" style="margin-top: 0;">
          <div class="compliance-details">
            <div class="section-tag" style="background: rgba(255,255,255,0.15); color: #fff;">Audit-Ready Global Documentation</div>
            <h3 style="font-size: 1.6rem; color: #ffffff; margin: 12px 0;">
              IBA Approved Moving Bills for Overseas Corporate & Diplomatic Relocation
            </h3>
            <p style="color: #cbd5e1; line-height: 1.65; margin-bottom: 16px;">
              Are you an executive with a multinational corporation, an employee of State Bank of India (SBI), Bank of India (BOI), Coal India, SAIL Bokaro, CMPDI, or an officer in the Indian Foreign Service (IFS) transferring abroad? As verified <strong>iba approved packers and movers in ranchi</strong> and an <strong>iso certified packers and movers in ranchi</strong> enterprise, Shree Ashirwad Packers provides 100% audit-compliant international moving documentation under GST SAC Code 996511 and SAC Code 996791.
            </p>
            <div class="compliance-badges-row">
              <span class="compliance-badge-pill">&check; Marine Bill of Lading (B/L) / Air Waybill (AWB)</span>
              <span class="compliance-badge-pill">&check; 100% GST Export Invoice (SAC 996511 / 996791)</span>
              <span class="compliance-badge-pill">&check; Itemized Serialized English Packing Manifest</span>
              <span class="compliance-badge-pill">&check; ISPM-15 Heat-Treatment Phytosanitary Certificate</span>
              <span class="compliance-badge-pill">&check; Marine All-Risk Transit Insurance Certificate</span>
            </div>
          </div>
          <div class="text-center" style="margin-top: 20px;">
            <a href="tel:+918409531615" class="btn-primary-custom" title="Inquire About International Moving Documentation: Call 8409531615">
              Verify Global Documentation: 8409531615
            </a>
          </div>
        </div>

        <!-- Infrastructure & Fleet Visual Showcase -->
        <div class="infra-images-grid" style="margin-top: 36px;">
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/waterproof-container-loading-jharkhand.jpg" alt="Seaport Export Container Loading in Jharkhand - Shree Ashirwad Packers" title="Marine Container Stuffing and Loading" width="400" height="260" loading="lazy">
          </div>
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Fleet Door to Door Delivery Truck - Shree Ashirwad Packers" title="Dedicated Closed Container Delivery Truck" width="400" height="260" loading="lazy">
          </div>
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg" alt="Port Feeder Truck Loading in Jharkhand - Shree Ashirwad Packers" title="Port Feeder Road Transit to Kolkata and Mumbai" width="400" height="260" loading="lazy">
          </div>
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Bonded Transit Warehousing in Ranchi - Shree Ashirwad Packers" title="Bonded Warehouse Storage Facility Ranchi" width="400" height="260" loading="lazy">
          </div>
        </div>

      </div>
    </section>

    <!-- 10. Section 7: Benchmark Comparison: Shree Ashirwad vs Unregistered Freight Brokers -->
    <section class="comparison-section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Global Standards Benchmark</div>
          <h2 class="section-title">
            Why Choose Shree Ashirwad Instead of <span class="gradient-text">General Freight Brokers</span>
          </h2>
          <p class="section-subtitle">
            Entrusting your international relocation to domestic truck brokers often ends in customs seizure, exorbitant bonded demurrage penalties, or damaged goods. See why clients trust the <strong>best packers and movers in ranchi</strong> and most <strong>trusted packers and movers in ranchi</strong> for global relocation.
          </p>
        </div>

        <div class="comparison-table-wrapper">
          <table class="comp-table">
            <thead>
              <tr>
                <th style="width: 34%;">International Relocation Feature</th>
                <th class="col-brand" style="width: 33%;">Shree Ashirwad International Desk</th>
                <th class="col-brokers" style="width: 33%;">Unregistered Domestic Transporters</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Timber Export Certification</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; 100% ISPM-15 Heat-Treated IPPC Stamped Crates</span></td>
                <td><span class="badge-no">&#x2717; Untreated Raw Wood Confiscated & Incinerated Abroad</span></td>
              </tr>
              <tr>
                <td><strong>Customs House Agents (CHA)</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Direct Licensed CHA Representation at Kolkata & JNPT</span></td>
                <td><span class="badge-no">&#x2717; Rely on Unaccountable Third-Party Middlemen</span></td>
              </tr>
              <tr>
                <td><strong>Maritime Moisture Defense</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Aluminum Barrier Foil Sealing + Active Desiccants</span></td>
                <td><span class="badge-no">&#x2717; Standard Domestic Cardboard Prone to Tropical Mold</span></td>
              </tr>
              <tr>
                <td><strong>Overseas Doorstep Delivery</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Full Delivery, Unpacking & Setup in 150+ Countries</span></td>
                <td><span class="badge-no">&#x2717; Abandon Shipments at Foreign Ports Leaving You Stranded</span></td>
              </tr>
              <tr>
                <td><strong>Customs Tariff Knowledge</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Guidance for US 3299, UK ToR01, Canada BSF186</span></td>
                <td><span class="badge-no">&#x2717; Clueless on Foreign Tax Rules, Causing Heavy Duties</span></td>
              </tr>
              <tr>
                <td><strong>Marine All-Risk Insurance</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Full Value Marine All-Risk (Institute Cargo Clauses A)</span></td>
                <td><span class="badge-no">&#x2717; Domestic Truck Policy Void in International Waters</span></td>
              </tr>
              <tr>
                <td><strong>Tracking & Chain of Custody</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Continuous Vessel Tracking via Container Booking Number</span></td>
                <td><span class="badge-no">&#x2717; Zero Status Updates Once Truck Leaves Jharkhand</span></td>
              </tr>
              <tr>
                <td><strong>Official Claim Bills</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; IBA Approved GST Export Invoices (SAC 996511)</span></td>
                <td><span class="badge-no">&#x2717; Informal Receipts Rejected by Corporate HR</span></td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </section>

    <!-- 11. Real Customer Reviews from Google My Business (GMB) -->
    <?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

    <!-- 12. Section 9: Frequently Asked Questions (FAQ) -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Common Inquiries</div>
          <h2 class="section-title">
            Frequently Asked Questions on <span class="gradient-text">International Moving Services</span>
          </h2>
          <p class="section-subtitle">
            Clear, transparent answers regarding transit timelines, customs forms, ISPM-15 wood crating, and marine insurance from Ranchi.
          </p>
        </div>

        <div class="about-faq-grid">
          
          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>How long does international sea freight shipping take from Ranchi to the USA, UK, or Australia?</span>
            </div>
            <p class="about-faq-a">
              Total door-to-door transit times typically range from 30 to 45 days for the UK and European ports, 35 to 55 days for US East and West Coast ports, 25 to 40 days for Australia, and 15 to 25 days for the UAE and Middle East, including customs clearance and road-feeder transit from Ranchi.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>What is ISPM-15 certified wooden crating and why is it mandatory for overseas moving?</span>
            </div>
            <p class="about-faq-a">
              ISPM-15 (International Standards for Phytosanitary Measures No. 15) requires all raw timber packaging to be debarked and heat-treated to 56°C for 30 minutes, stamped with official IPPC markings. Foreign customs authorities (especially USA, Canada, Australia, and UK) immediately confiscate or re-export shipments packed in untreated wood to protect local ecosystems from invasive timber pests.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>What documents are required for Indian customs clearance when moving overseas from Ranchi?</span>
            </div>
            <p class="about-faq-a">
              You will need: a valid original Passport, long-term Visa or Work Permit / Permanent Residency (PR) Card, confirmed Air Ticket, Indian Customs Baggage Declaration Form signed by the shipper, detailed itemized Packing List with values, and an Employer Transfer Letter (for Transfer of Residence duty concessions).
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>What is the difference between FCL (Full Container Load) and LCL (Less than Container Load)?</span>
            </div>
            <p class="about-faq-a">
              FCL provides exclusive use of a dedicated 20ft (holds ~1-2 BHK) or 40ft (holds ~3-4 BHK) steel marine container sealed at your Ranchi home until overseas delivery. LCL consolidates smaller shipments (few boxes or partial furniture) inside custom wooden liftvans shared with other cargo in a single container, significantly reducing costs for smaller loads.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>Can I send urgent luggage or essential items by air freight instead of sea shipping?</span>
            </div>
            <p class="about-faq-a">
              Yes. We offer express international air cargo forwarding for essential clothing, kitchenware, baby equipment, and work laptops with 5 to 8 business days delivery, allowing you to settle in immediately while your primary ocean freight container is in transit.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>Are your international moving invoices and bills IBA approved for Bank and PSU employee claims?</span>
            </div>
            <p class="about-faq-a">
              Yes, 100%. Our moving bills, export documentation, and GST tax invoices comply with Indian Banks' Association (IBA) guidelines, accepted by public sector banks, PSUs, and multinational corporations for overseas transfer reimbursements.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>How are customs duties and taxes handled at destination countries?</span>
            </div>
            <p class="about-faq-a">
              Most countries permit duty-free and tax-free import of used personal household goods under Transfer of Residence (ToR) or personal effects exemptions, provided you have owned and used the goods for at least 6 to 12 months prior to shipping. Our customs team prepares all prerequisite declaration forms.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>What insurance coverage is provided for international overseas moves?</span>
            </div>
            <p class="about-faq-a">
              We arrange Comprehensive Marine All-Risk Transit Insurance through international maritime underwriters, covering the consignment from doorstep pickup in Ranchi, ocean or air transit, port handling, through to delivery and unpacking at your international residence under declared value.
            </p>
          </div>

        </div>

      </div>
    </section>

    <!-- 13. Section 10: Call to Action Banner & Network Links -->
    <section class="cta-banner-section">
      <div class="container">
        <div class="cta-banner-card">
          <div class="cta-banner-glow"></div>
          <div class="cta-banner-content">
            <span class="cta-badge">Book Certified International Movers</span>
            <h2 class="cta-title">
              Planning a Global Move from <span class="gradient-text">Ranchi or Jharkhand?</span>
            </h2>
            <p class="cta-subtitle">
              Connect with our international relocation desk today. Get a comprehensive, transparent quotation with full customs guidance, ISPM-15 crating, and marine transit insurance.
            </p>
            <div class="cta-buttons-row">
              <a href="tel:+918409531615" class="btn-cta-phone" title="Call International Moving Helpline: 8409531615">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
                <span>Call Hotline: <strong>8409531615</strong></span>
              </a>
              <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn-cta-whatsapp" title="Chat on WhatsApp for International Relocation Quote">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2z"/></svg>
                <span>WhatsApp Survey &rarr;</span>
              </a>
            </div>
            <div class="cta-trust-items">
              <span>&check; 150+ Countries Connected</span>
              <span>&check; ISPM-15 Certified Crating</span>
              <span>&check; 100% GST Export Invoices (SAC 996511)</span>
              <span>&check; Licensed Customs Clearance Agents</span>
            </div>
          </div>
        </div>

        <!-- Localized Ranchi Localities & Jharkhand District Links -->
        <div class="neighborhoods-card" style="margin-top: 40px;">
          <h3 class="neighborhoods-title">
            <svg viewBox="0 0 24 24" width="20" height="20"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
            International Relocation Pickups Across Ranchi & Jharkhand
          </h3>
          <p style="font-size: 0.9rem; color: #64748b; margin-bottom: 16px;">
            We offer specialized export packing and direct road-feeder container dispatch from all key residential sectors in Ranchi:
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

  <!-- Core JavaScript -->
  <script src="<?php echo SITE_BASE_URL; ?>/assets/js/main.js" defer></script>
</body>
</html>
