<?php
/**
 * Business Shifting Services Page - Shree Ashirwad Packers and Movers
 * Pure Core PHP Implementation
 * 
 * Deep Corporate B2B Content, Zero-Downtime Strategy, IT Server Handling, 100% GST Billing
 * Preserving exact canonical URL: https://www.shreeashirwadpackers.com/business-shifting/
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
  <?php render_seo_tags('business-shifting'); ?>

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
          <span aria-current="page">Business Shifting</span>
        </nav>
        <h1 class="page-hero-title">
          Business Shifting & <span class="gradient-text">Commercial Office Relocation in Ranchi</span>
        </h1>
        <p class="page-hero-subtitle">
          Ensure zero operational downtime with Jharkhand's premier corporate moving partner. Specialized data center and IT server transit, modular workstation carpentry, confidential document custody, and 100% GST compliant invoicing.
        </p>
        <div class="about-cta-row" style="justify-content: center; margin-top: 24px;">
          <a href="tel:+918409531615" class="btn-primary-custom" title="Call Corporate Move Desk: 8409531615">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
            Corporate Moving Desk: 8409531615
          </a>
          <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn-outline-custom" title="Schedule Corporate Survey via WhatsApp">
            WhatsApp Site Survey &rarr;
          </a>
        </div>
      </div>
    </section>

    <!-- 3. Key Credentials & Live Trust Stats Bar -->
    <section class="credentials-bar-section">
      <div class="container">
        <div class="credentials-grid">
          
          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">1,200+</span>
              <span class="credential-title">Offices Relocated</span>
              <span class="credential-sub">Top Corporate Movers in Ranchi</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">Zero Downtime</span>
              <span class="credential-title">Weekend Execution</span>
              <span class="credential-sub">Friday 6 PM to Monday 9 AM</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">100% GST Invoices</span>
              <span class="credential-title">SAC Code 996511</span>
              <span class="credential-sub">Full Input Tax Credit (ITC)</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">IBA & ISO Certified</span>
              <span class="credential-title">4.9 / 5.0 Google Rating</span>
              <span class="credential-sub">PSU & Corporate Approved</span>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- 4. Section 1: Overview of Business Shifting in Ranchi & Jharkhand -->
    <section class="about-section" style="padding: 80px 0;">
      <div class="container">
        <div class="about-grid">
          
          <div class="about-images-wrapper">
            <div class="about-image-main">
              <img src="<?php echo SITE_BASE_URL; ?>/images/office-equipment-secure-packing-jamshedpur.jpg" alt="Office Equipment Secure Packing and Business Shifting in Ranchi - Shree Ashirwad Packers" title="Business Shifting Services in Ranchi - Professional Commercial Relocation" width="560" height="380" loading="lazy">
              <div class="about-badge-floating">
                <span class="badge-num">B2B</span>
                <span class="badge-txt">Corporate Logistics</span>
              </div>
            </div>
            <div class="about-image-sub">
              <img src="<?php echo SITE_BASE_URL; ?>/images/heavy-machinery-office-shifting-jharkhand.jpg" alt="Commercial Equipment and Machinery Moving in Jharkhand - Shree Ashirwad Packers" title="Commercial Heavy Equipment and Machinery Shifting" width="280" height="190" loading="lazy">
            </div>
          </div>

          <div class="about-content">
            <div class="section-tag">Enterprise Commercial Logistics</div>
            <h2 class="section-title">
              Specialized <span class="gradient-text">Office Shifting Services in Ranchi</span>
            </h2>
            
            <p class="about-lead">
              Relocating a commercial workspace, corporate branch, or regional headquarters involves complex operational stakes. Unlike residential moves, professional <strong>office shifting services in ranchi</strong> and <strong>corporate relocation services in ranchi</strong> demand absolute precision, rigorous data security, specialized IT handling, and a strict commitment to zero billable business disruption. As a premier <strong>commercial moving services company</strong>, we deploy certified <strong>commercial movers</strong> and <strong>professional office movers</strong> who understand the extreme time sensitivity of business operations.
            </p>

            <p class="about-text">
              Ranchi serves as Jharkhand's premier commercial and administrative capital, housing major Public Sector Undertakings (PSUs) such as <strong>Central Coalfields Limited (CCL), CMPDI, MECON Limited, and Heavy Engineering Corporation (HEC)</strong> alongside regional offices of nationalized banks, IT software consulting firms, pharmaceutical distributors, and multinational corporations. From high-density corporate districts handled by our <strong>packers and movers in lalpur ranchi</strong> and <strong>packers and movers in doranda ranchi</strong>, to modern enterprise hubs served by our <strong>packers and movers in ashok nagar ranchi</strong> and <strong>packers and movers in harmu ranchi</strong>, as well as industrial belts managed by our <strong>packers and movers in tupudana ranchi</strong> and <strong>packers and movers in kokar ranchi</strong>, commercial enterprise moving requires seasoned <strong>office packers and movers in ranchi</strong>.
            </p>

            <p class="about-text">
              At <strong>Shree Ashirwad Packers and Movers Ranchi</strong>, we have engineered a dedicated corporate moving division with over 15 years of institutional experience. Recognized as the <strong>best packers and movers in ranchi</strong> and among the most <strong>trusted packers and movers in ranchi</strong>, we operate as <strong>IBA approved packers and movers in ranchi</strong> and <strong>ISO certified packers and movers in ranchi</strong>. As the premier <strong>packers and movers in ranchi jharkhand</strong>, whether you are transitioning a fast-growing 15-desk tech agency or shifting a multi-story corporate headquarters with 300+ workstations, data center servers, and confidential archive rooms, our certified <strong>commercial relocation services in ranchi</strong> and <strong>commercial packers and movers</strong> execute with military precision.
            </p>

            <div class="about-cta-row">
              <a href="tel:+918409531615" class="btn-primary-custom" title="Call Corporate Shifting Manager at 8409531615">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
                Direct Corporate Desk: 8409531615
              </a>
              <a href="<?php echo SITE_BASE_URL; ?>/contact" class="btn-outline-custom" title="Request Corporate Moving Proposal">Request Written Proposal &rarr;</a>
            </div>

          </div>

        </div>
      </div>
    </section>

    <!-- 5. Section 2: Tailored Commercial Solutions by Business Category -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Industry-Specific Solutions</div>
          <h2 class="section-title">
            Tailored Commercial Relocation for <span class="gradient-text">Every Business Sector</span>
          </h2>
          <p class="section-subtitle">
            Different enterprises have fundamentally distinct physical assets and regulatory requirements. Discover our specialized relocation protocols tailored for diverse industries across Jharkhand.
          </p>
        </div>

        <div class="b2b-sectors-grid">
          
          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M20 18c1.1 0 1.99-.9 1.99-2L22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2H0v2h24v-2h-4zM4 6h16v10H4V6z"/></svg>
            </div>
            <h3 class="b2b-sector-title">IT Firms & Tech Companies</h3>
            <p class="b2b-sector-desc">
              Anti-static packaging for servers, blade racks, network routers, and monitor arms. Color-coded peripheral pouches ensure each software engineer's setup is reconnected exactly at their new desk.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M4 10v7h3v-7H4zm6 0v7h3v-7h-3zM2 22h19v-3H2v3zm14-12v7h3v-7h-3zm-4.5-9L2 6v2h19V6l-9.5-5z"/></svg>
            </div>
            <h3 class="b2b-sector-title">Banks & Financial Institutions</h3>
            <p class="b2b-sector-desc">
              Heavy hydraulic handling of fireproof cash safes, currency sorting machines, passbook printers, and confidential loan record files sealed with numbered security zip tags.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M20 4H4v2h16V4zm1 10v-2l-1-5H4l-1 5v2h1v6h10v-6h4v6h2v-6h1zm-9 4H6v-4h6v4z"/></svg>
            </div>
            <h3 class="b2b-sector-title">Retail Stores & Showrooms</h3>
            <p class="b2b-sector-desc">
              Fragile glass display showcases, mannequins, illuminated signboards, point-of-sale systems, and cataloged merchandise inventory mapped with systematic carton barcodes. Our <strong>commercial goods shifting services</strong> ensure insured transit and safe floor placement.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M19 3H5c-1.1 0-1.99.9-1.99 2L3 19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-1 11h-4v4h-4v-4H6v-4h4V6h4v4h4v4z"/></svg>
            </div>
            <h3 class="b2b-sector-title">Clinics, Labs & Diagnostics</h3>
            <p class="b2b-sector-desc">
              Vibration-damped transit for sensitive optical analyzers, ultrasound scanners, centrifuge machines, dental chairs, and calibrated medical laboratory instruments.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3zM3.45 9L12 4.34 20.55 9 12 13.66 3.45 9zM5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82z"/></svg>
            </div>
            <h3 class="b2b-sector-title">Educational Institutions</h3>
            <p class="b2b-sector-desc">
              Systematic library shelf-by-shelf indexing, physics and chemistry laboratory apparatus packing, auditorium seating, and digital smart board unmounting and re-installation.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M22 13h-4V9l-6-6-6 6v4H2v8h20v-8zm-6-2.17l3.17 3.17H16v-3.17zM8 10.83L11.17 14H8v-3.17zM4 15h2v4H4v-4zm4 4v-3h8v3H8zm12 0h-2v-4h2v4z"/></svg>
            </div>
            <h3 class="b2b-sector-title">SMEs & Industrial Units</h3>
            <p class="b2b-sector-desc">
              As specialized <strong>industrial packers and movers</strong> and trusted <strong>corporate packers and movers</strong>, we handle precision CNC tooling, electrical distribution panels, hydraulic machinery, and factory supplies connecting Ranchi with <strong>packers and movers in bokaro</strong>, <strong>packers and movers in jamshedpur</strong>, and <strong>packers and movers in dhanbad</strong>.
            </p>
          </div>

        </div>

      </div>
    </section>

    <!-- 6. Section 3: Specialized Handling of Critical Commercial Assets -->
    <section class="section" style="padding: 80px 0; background: #f8fafc;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Asset Protection Protocols</div>
          <h2 class="section-title">
            Specialized Care for <span class="gradient-text">High-Value Commercial Assets</span>
          </h2>
          <p class="section-subtitle">
            Commercial equipment cannot be handled like standard household goods. We deploy purpose-built materials and experienced technicians for mission-critical office infrastructure.
          </p>
        </div>

        <div class="it-assets-grid">
          
          <div class="it-asset-card">
            <div class="it-asset-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M4 1v4h16V1H4zm14 3H6V2h12v2zm-14 3v4h16V7H4zm14 3H6V8h12v2zm-14 3v4h16v-4H4zm14 3H6v-2h12v2zm-14 3v4h16v-4H4zm14 3H6v-2h12v2z"/></svg>
            </div>
            <div class="it-asset-content">
              <h4>IT Server Racks & Networking Hubs</h4>
              <p>
                Server equipment requires electrostatic discharge (ESD) protection. We utilize specialized pink anti-static bubble wrap, moisture-absorbing silica packets, and shock-resistant custom crating. Network cables are tagged with source-destination color markers for rapid reconnectivity.
              </p>
            </div>
          </div>

          <div class="it-asset-card">
            <div class="it-asset-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
            </div>
            <div class="it-asset-content">
              <h4>Confidential Document Archives & Legal Files</h4>
              <p>
                Audit records, legal case files, and employee personnel documents are packed into heavy-duty file cartons with serial numbers. Each box is secured with tamper-evident security barcode seals, and a formal chain-of-custody manifest is signed prior to container dispatch.
              </p>
            </div>
          </div>

          <div class="it-asset-card">
            <div class="it-asset-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4V4c0-1.1-.9-2-2-2zm-2 12H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/></svg>
            </div>
            <div class="it-asset-content">
              <h4>Modular Workstation Cubicles & Carpentry</h4>
              <p>
                Modern office cubicles contain delicate aluminum frames, acoustic fabric panels, and integrated wire raceways. Our trained carpenters systematically dismantle partitions, bundle matching hardware screws in labeled bags, and reassemble them according to your new office CAD layout.
              </p>
            </div>
          </div>

          <div class="it-asset-card">
            <div class="it-asset-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 1.99-.9 1.99-2L23 5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z"/></svg>
            </div>
            <div class="it-asset-content">
              <h4>Boardroom Tables & Video Conference Panels</h4>
              <p>
                Solid wood conference tables, motorized presentation screens, and interactive smart displays are safeguarded with multi-layer foam cushioning, corrugated edge protectors, and waterproof cling wrap, preventing edge chipping or transit scuffs.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- 7. Section 4: Weekend "Zero-Downtime" Move Execution Strategy -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Zero Working Hour Loss</div>
          <h2 class="section-title">
            Our Weekend <span class="gradient-text">"Zero-Downtime" Move Roadmap</span>
          </h2>
          <p class="section-subtitle">
            How we transition your complete commercial office from Friday evening to Sunday night, ensuring your team resumes operations at full capacity on Monday morning.
          </p>
        </div>

        <div class="downtime-timeline-grid">
          
          <div class="downtime-card">
            <span class="downtime-time-pill">Friday • 6:00 PM</span>
            <h3 class="downtime-title">Phase 1: Mobilization</h3>
            <p class="downtime-desc">
              Employees log off. Our packing crews arrive with labeled crates. Department-wise color tagging of workstations, file archives, and common areas begins.
            </p>
          </div>

          <div class="downtime-card">
            <span class="downtime-time-pill">Friday • 9:00 PM</span>
            <h3 class="downtime-title">Phase 2: IT De-Installation</h3>
            <p class="downtime-desc">
              Under your IT lead's supervision, server racks are powered down, hard drives safely secured, and desktop setups packed into anti-static protective wraps.
            </p>
          </div>

          <div class="downtime-card">
            <span class="downtime-time-pill">Saturday • 8:00 AM</span>
            <h3 class="downtime-title">Phase 3: Loading & Transit</h3>
            <p class="downtime-desc">
              Carpenters dismantle modular cubicles. Everything is loaded into our dedicated closed container fleet and transported with real-time GPS tracking.
            </p>
          </div>

          <div class="downtime-card">
            <span class="downtime-time-pill">Saturday • 2:00 PM</span>
            <h3 class="downtime-title">Phase 4: Setup & Carpentry</h3>
            <p class="downtime-desc">
              Goods arrive at new facility. Crew places furniture per architectural floorplan. Carpenters reassemble cubicles, conference tables, and manager cabins.
            </p>
          </div>

          <div class="downtime-card">
            <span class="downtime-time-pill">Sunday • 4:00 PM</span>
            <h3 class="downtime-title">Phase 5: Ready for Monday</h3>
            <p class="downtime-desc">
              IT racks positioned, desks cleared of packing debris, and walkthrough inspection signed off. Your business opens Monday 9:00 AM without losing a single client call.
            </p>
          </div>

        </div>

      </div>
    </section>

    <!-- 8. Section 5: Transparent Pricing & Cost Factors for Office Shifting -->
    <section class="section" style="padding: 80px 0; background: #f8fafc;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Predictable Corporate Budgeting</div>
          <h2 class="section-title">
            Commercial Shifting Charges & <span class="gradient-text">Office Relocation Cost Matrix</span>
          </h2>
          <p class="section-subtitle">
            Review realistic <strong>commercial moving company prices</strong> and <strong>cubicle & warehouse moving company prices</strong> for local relocations within Ranchi and intercity corporate transfers across Jharkhand. Performing an upfront <strong>moving company price comparison</strong> ensures you partner with the <strong>best price moving company</strong> delivering zero downtime and full GST compliance. Review our comprehensive <strong>packers and movers in ranchi price list</strong>, understand transparent <strong>packers and movers charges in ranchi</strong>, and get a tailored <strong>packers and movers ranchi cost estimate</strong> before scheduling your corporate transition.
          </p>
        </div>

        <div class="comparison-table-wrapper" style="margin-top: 30px;">
          <table class="comp-table">
            <thead>
              <tr>
                <th style="width: 25%;">Office Scale & Workstations</th>
                <th style="width: 25%;">Manpower & Equipment Included</th>
                <th style="width: 25%;">Local Move (Within Ranchi)</th>
                <th style="width: 25%;">Intercity Move (Jharkhand Hubs)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Small Office (1 - 10 Desks)</strong></td>
                <td>4 Certified Movers + 1 Carpenter + 14ft Container</td>
                <td><strong style="color: var(--primary);">₹8,500 – ₹16,000</strong></td>
                <td><strong style="color: var(--accent);">₹22,000 – ₹38,000*</strong></td>
              </tr>
              <tr>
                <td><strong>Medium Office (10 - 30 Desks)</strong></td>
                <td>8 Certified Movers + 2 Carpenters + 19ft Container</td>
                <td><strong style="color: var(--primary);">₹18,000 – ₹35,000</strong></td>
                <td><strong style="color: var(--accent);">₹42,000 – ₹75,000*</strong></td>
              </tr>
              <tr>
                <td><strong>Corporate Branch (30 - 75 Desks)</strong></td>
                <td>14 Movers + 4 Carpenters + Move Manager + Dual Fleet</td>
                <td><strong style="color: var(--primary);">₹38,000 – ₹75,000</strong></td>
                <td><strong style="color: var(--accent);">₹85,000 – ₹1,50,000*</strong></td>
              </tr>
              <tr>
                <td><strong>Enterprise Facility (75 - 200+ Desks)</strong></td>
                <td>Dedicated Operations Team + Heavy Machinery Jacks + Fleet</td>
                <td><strong style="color: var(--primary);">Custom Enterprise Quote</strong></td>
                <td><strong style="color: var(--accent);">Custom Enterprise Quote*</strong></td>
              </tr>
              <tr>
                <td><strong>Server Rack / Data Center Moving</strong></td>
                <td>Anti-Static Wrapping + Custom Wooden Crate + Shock Foam</td>
                <td><strong style="color: var(--primary);">₹6,500 – ₹14,000</strong></td>
                <td><strong style="color: var(--accent);">₹15,000 – ₹30,000*</strong></td>
              </tr>
            </tbody>
          </table>
        </div>

        <p style="font-size: 0.85rem; color: #64748b; margin-top: 14px; text-align: center;">
          *Note: Corporate estimates include packing materials, labor, transport, dismantle/assembly carpentry, and GST tax invoice (SAC 996511). Call our corporate project lead at <strong>8409531615</strong> for a formal site survey and quotation.
        </p>

      </div>
    </section>

    <!-- 9. Section 6: IBA Approved Corporate Billing & 100% GST Compliance -->
    <section class="infra-section">
      <div class="container">
        
        <div class="compliance-box" style="margin-top: 0;">
          <div class="compliance-details">
            <div class="section-tag" style="background: rgba(255,255,255,0.15); color: #fff;">Audit-Ready Corporate Billing</div>
            <h3 style="font-size: 1.6rem; color: #ffffff; margin: 12px 0;">
              100% GST Invoices & IBA Approved Documentation for Companies
            </h3>
            <p style="color: #cbd5e1; line-height: 1.65; margin-bottom: 16px;">
              Commercial compliance is essential for corporate accounts audits and claiming Input Tax Credit (ITC). Shree Ashirwad Packers provides legitimate tax documentation under GST SAC Code 996511 (Goods Transport Agency) and SAC Code 996791 (Cargo Handling Services). We are officially registered with Indian Banks' Association (IBA) and ISO 9001:2015 certified.
            </p>
            <div class="compliance-badges-row">
              <span class="compliance-badge-pill">&check; Official Corporate GST Tax Invoice</span>
              <span class="compliance-badge-pill">&check; Input Tax Credit (ITC) Eligible</span>
              <span class="compliance-badge-pill">&check; Formal Vendor Registration Documentation</span>
              <span class="compliance-badge-pill">&check; Lorry Receipt / Bilty with IBA Code</span>
              <span class="compliance-badge-pill">&check; Comprehensive Transit Insurance Certificate</span>
            </div>
          </div>
          <div class="text-center" style="margin-top: 20px;">
            <a href="tel:+918409531615" class="btn-primary-custom" title="Inquire About Corporate GST Invoicing: Call 8409531615">
              Verify Corporate Billing: 8409531615
            </a>
          </div>
        </div>

        <!-- Corporate Fleet & Warehousing Visual Showcase -->
        <div class="infra-images-grid" style="margin-top: 36px;">
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Commercial Fleet Door to Door Delivery Truck - Shree Ashirwad Packers" title="Dedicated Commercial Delivery Truck in Jharkhand" width="400" height="260" loading="lazy">
          </div>
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Commercial Warehouse and Office Records Storage in Ranchi - Shree Ashirwad Packers" title="Commercial Goods Storage and Corporate Warehousing Facility" width="400" height="260" loading="lazy">
          </div>
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg" alt="Intercity Corporate Moving Truck Loading in Jharkhand - Shree Ashirwad Packers" title="Intercity Corporate Shifting Truck Loading" width="400" height="260" loading="lazy">
          </div>
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/electronics-led-tv-crating-jharkhand.jpg" alt="IT Server Racks and Video Display Crating in Jharkhand - Shree Ashirwad Packers" title="IT Equipment and Server Display Secure Crating" width="400" height="260" loading="lazy">
          </div>
        </div>

      </div>
    </section>

    <!-- 10. Section 7: Corporate Move Project Management Checklist -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Standard Operating Procedure</div>
          <h2 class="section-title">
            Corporate Relocation <span class="gradient-text">Project Management Roadmap</span>
          </h2>
          <p class="section-subtitle">
            How we collaborate with your HR, administrative facilities team, and IT department for an orderly, transparent transition.
          </p>
        </div>

        <div class="checklist-grid">
          
          <div class="checklist-card">
            <span class="checklist-step">Phase 1: Pre-Move Audit</span>
            <h3 class="checklist-title">Facility Assessment</h3>
            <ul class="checklist-items">
              <li>Comprehensive on-site physical survey of origin and new facilities.</li>
              <li>Review service elevator dimensions, loading dock clearances, and timings.</li>
              <li>Appoint dedicated Single Point of Contact (SPOC) Move Project Manager.</li>
              <li>Establish timeline schedule, building management permissions, and gate passes.</li>
            </ul>
          </div>

          <div class="checklist-card">
            <span class="checklist-step">Phase 2: Employee Protocol</span>
            <h3 class="checklist-title">Desk Preparation</h3>
            <ul class="checklist-items">
              <li>Distribute personal desk crate kits and pre-printed identification labels.</li>
              <li>Employees pack personal stationery, photos, and confidential notebooks.</li>
              <li>Department-wise color coding assigned to crates (e.g., Accounts, HR, Sales).</li>
              <li>IT team initiates systematic data backups and network severance protocol.</li>
            </ul>
          </div>

          <div class="checklist-card">
            <span class="checklist-step">Phase 3: Secure Execution</span>
            <h3 class="checklist-title">Packing & Transit</h3>
            <ul class="checklist-items">
              <li>Heavy-duty wrapping of executive cabins, boardrooms, and workstation panels.</li>
              <li>Anti-static cushioned packing for server racks and networking switches.</li>
              <li>Document crates sealed with tamper-evident security barcode locks.</li>
              <li>Continuous GPS monitored container transport to the new corporate site.</li>
            </ul>
          </div>

          <div class="checklist-card">
            <span class="checklist-step">Phase 4: Setup & Snagging</span>
            <h3 class="checklist-title">New Facility Handover</h3>
            <ul class="checklist-items">
              <li>Workstations reassembled per CAD layout and power ducts re-routed.</li>
              <li>Crates delivered directly to corresponding department desk numbers.</li>
              <li>Server racks positioned in new server room for IT reconnection.</li>
              <li>Complete removal of packing debris, carton boxes, and formal sign-off.</li>
            </ul>
          </div>

        </div>

      </div>
    </section>

    <!-- 11. Section 8: Head-to-Head Comparison: Shree Ashirwad vs General Transporters -->
    <section class="comparison-section">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">B2B Standard Benchmark</div>
          <h2 class="section-title">
            Why Companies Choose <span class="gradient-text">Shree Ashirwad Packers</span> vs General Transporters
          </h2>
          <p class="section-subtitle">
            See the concrete operational differences that make Shree Ashirwad Packers the preferred <strong>business packers and movers</strong> and <strong>best office movers</strong> for leading corporate enterprises and institutions across Jharkhand.
          </p>
        </div>

        <div class="comparison-table-wrapper">
          <table class="comp-table">
            <thead>
              <tr>
                <th style="width: 34%;">Corporate Benchmark / Standard</th>
                <th class="col-brand" style="width: 33%;">Shree Ashirwad Packers and Movers</th>
                <th class="col-brokers" style="width: 33%;">General Local Transporters & Brokers</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Dedicated Corporate Move Manager</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Single Point of Contact (SPOC) On-Site</span></td>
                <td><span class="badge-no">&#x2717; Multiple Uncoordinated Truck Drivers</span></td>
              </tr>
              <tr>
                <td><strong>Zero-Downtime Weekend Relocation</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Friday Evening to Sunday Night Execution</span></td>
                <td><span class="badge-no">&#x2717; Unpredictable Delays Halting Business Days</span></td>
              </tr>
              <tr>
                <td><strong>IT Server & Data Center Packing</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Anti-Static ESD Wrapping & Custom Crates</span></td>
                <td><span class="badge-no">&#x2717; Generic Used Cartons & Untrained Handling</span></td>
              </tr>
              <tr>
                <td><strong>Confidential Document Chain-of-Custody</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Numbered Tamper-Evident Security Barcode Seals</span></td>
                <td><span class="badge-no">&#x2717; Open Boxes Without Tracking or Manifest</span></td>
              </tr>
              <tr>
                <td><strong>Modular Workstation Carpentry</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Expert Dismantling & Reassembly per CAD Plan</span></td>
                <td><span class="badge-no">&#x2717; Untrained Labor Stripping Screws & Wires</span></td>
              </tr>
              <tr>
                <td><strong>100% GST Invoicing with Input Tax Credit</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Legitimate SAC 996511 / 996791 Tax Invoices</span></td>
                <td><span class="badge-no">&#x2717; Handwritten Receipts (Rejected by Auditors)</span></td>
              </tr>
              <tr>
                <td><strong>Fleet Ownership & Highway Safety</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Dedicated Company-Owned Closed Containers</span></td>
                <td><span class="badge-no">&#x2717; Open Rental Trucks Subject to Weather Damage</span></td>
              </tr>
              <tr>
                <td><strong>Comprehensive Corporate Insurance</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Full Value Transit Policy via Nationalized Insurers</span></td>
                <td><span class="badge-no">&#x2717; No Financial Protection for Asset Damage</span></td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </section>

    <!-- Real Customer Reviews from Google My Business (GMB) -->
    <?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

    <!-- 12. Section 9: Frequently Asked Questions (FAQ) on Business Shifting -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Corporate Clarifications</div>
          <h2 class="section-title">
            Frequently Asked Questions on <span class="gradient-text">Commercial Office Shifting</span>
          </h2>
          <p class="section-subtitle">
            Find answers to common corporate questions about zero-downtime execution, server safety, billing compliance, and move management.
          </p>
        </div>

        <div class="about-faq-grid">
          
          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>How do you ensure zero business downtime during office relocation?</span>
            </div>
            <p class="about-faq-a">
              We execute a disciplined weekend shifting roadmap: packing begins Friday evening after office hours, transit and workstation reassembly take place over Saturday and Sunday, and full network setup is completed so your employees resume work normally on Monday morning without billable hour loss.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>How are sensitive IT servers and office network equipment packed?</span>
            </div>
            <p class="about-faq-a">
              We use anti-static bubble wrap, custom foam padding, cable color-coding tags, and shock-resistant sealed containers. Server racks are transported in dedicated shock-absorbing crates to protect delicate circuitry and data drives.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>Do you provide GST tax invoices with Input Tax Credit (ITC) for corporate moves?</span>
            </div>
            <p class="about-faq-a">
              Yes, 100%. We issue complete corporate GST invoices under SAC code 996511 / 996791 detailing CGST, SGST, or IGST, complete with company PAN and GSTIN for seamless corporate accounts audit and Input Tax Credit.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>Can your team dismantle and reassemble modular office workstations and cubicles?</span>
            </div>
            <p class="about-faq-a">
              Yes. Our permanent crew includes experienced office furniture carpenters who systematically dismantle partition screens, raceways, conference tables, and executive desks, and reassemble them according to your new floor layout.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>How do you manage confidentiality for legal files and audit archives?</span>
            </div>
            <p class="about-faq-a">
              Confidential corporate documents are packed into numbered, tamper-evident security crates sealed with one-time barcode locks. A detailed chain-of-custody manifest is signed by our move manager and your company representative.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>How early should a company book Shree Ashirwad Packers for office relocation?</span>
            </div>
            <p class="about-faq-a">
              For small offices (under 20 desks), 3 to 5 days advance notice is ideal. For large corporate branches or multi-floor relocations (50-200+ desks), we recommend scheduling a site survey 1 to 2 weeks prior for proper fleet and resource allocation.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>Do you provide transit insurance for commercial assets and equipment?</span>
            </div>
            <p class="about-faq-a">
              Yes. We arrange comprehensive corporate transit insurance with premier nationalized insurers covering total asset valuation against transport risks, accidental impact, or vehicle damage during transit.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>Can you handle industrial machinery and heavy equipment moving?</span>
            </div>
            <p class="about-faq-a">
              Yes, our industrial logistics division operates hydraulic jacks, heavy machinery dollies, and crane-loading equipment for moving industrial equipment, electrical panels, and manufacturing tools across Jharkhand.
            </p>
          </div>

        </div>

      </div>
    </section>

    <!-- 13. Section 10: Pre-Footer Call to Action (CTA) Banner -->
    <section class="cta-banner-section">
      <div class="container">
        <div class="cta-banner-card">
          <div class="cta-banner-glow"></div>
          <div class="cta-banner-content">
            <span class="cta-badge">Partner With Jharkhand's #1 Corporate Mover</span>
            <h2 class="cta-title">
              Plan Your Zero-Downtime <span class="gradient-text">Office Relocation in Ranchi</span>
            </h2>
            <p class="cta-subtitle">
              Ready to transition your commercial workspace with total security and zero work disruption? Speak directly with our senior corporate move project lead at <strong>8409531615</strong> for a comprehensive on-site facility audit and formal written RFP proposal.
            </p>
            <div class="cta-buttons-row">
              <a href="tel:+918409531615" class="btn-cta-phone" title="Call Corporate Shifting Desk at 8409531615">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
                <span>Call Hotline: <strong>8409531615</strong></span>
              </a>
              <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn-cta-whatsapp" title="Chat with Corporate Moving Desk on WhatsApp">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2z"/></svg>
                <span>WhatsApp Corporate Survey</span>
              </a>
            </div>
            <div class="cta-trust-items">
              <span>&check; 1,200+ Corporate Offices Moved</span>
              <span>&check; Weekend Zero-Downtime Guarantee</span>
              <span>&check; 100% GST Tax Invoices (SAC 996511)</span>
              <span>&check; Confidential File Custody</span>
            </div>
          </div>
        </div>

        <!-- Localized Ranchi Localities & Jharkhand District Links -->
        <div class="neighborhoods-card" style="margin-top: 40px;">
          <h3 class="neighborhoods-title">
            <svg viewBox="0 0 24 24" width="20" height="20"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
            Professional Commercial & Office Shifting Coverage Across Ranchi & Jharkhand
          </h3>
          <p style="font-size: 0.9rem; color: #64748b; margin-bottom: 16px;">
            Our specialized commercial moving crews provide rapid dispatch across all Ranchi business districts and tech corridors:
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

  <!-- 14. Global Site Footer -->
  <?php include __DIR__ . '/includes/footer.php'; ?>

  <!-- Core JavaScript -->
  <script src="<?php echo SITE_BASE_URL; ?>/assets/js/main.js" defer></script>
</body>
</html>
