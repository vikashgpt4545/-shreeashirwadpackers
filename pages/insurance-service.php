<?php
/**
 * Insurance Services Page - Shree Ashirwad Packers and Movers
 * Pure Core PHP Implementation
 * 
 * Comprehensive Transit Insurance, All-Risk Protection, IBA Approved Moving Bills, 7-Day Claim Settlement
 * Preserving exact canonical URL: https://www.shreeashirwadpackers.com/insurance-service/
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
  <?php render_seo_tags('insurance-service'); ?>

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
          <span aria-current="page">Insurance Service</span>
        </nav>
        <h1 class="page-hero-title">
          Transit Insurance Services in <span class="gradient-text">Ranchi - All-Risk Moving Protection</span>
        </h1>
        <p class="page-hero-subtitle">
          Safeguard your precious household belongings, luxury furniture, corporate assets, and automobiles against unpredictable highway perils. Shree Ashirwad Packers and Movers provides comprehensive Transit-Only and All-Risk moving insurance policies underwritten by leading national general insurance corporations. Enjoy total financial peace of mind, zero hidden clauses, rapid 7-day claim settlement, and 100% IBA approved documentation for government and bank reimbursement claims.
        </p>
        <div class="about-cta-row" style="justify-content: center; margin-top: 24px;">
          <a href="tel:+918409531615" class="btn-primary-custom" title="Call Moving Insurance Desk: 8409531615">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
            Insurance Desk: 8409531615
          </a>
          <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn-outline-custom" title="Get Transit Insurance Quote on WhatsApp">
            WhatsApp Insurance Quote &rarr;
          </a>
        </div>
      </div>
    </section>

    <!-- 3. Key Credentials & Insurance Trust Bar -->
    <section class="credentials-bar-section">
      <div class="container">
        <div class="credentials-grid">
          
          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">100% Cover</span>
              <span class="credential-title">All-Risk Protection</span>
              <span class="credential-sub">Doorstep to Destination</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">IBA Approved</span>
              <span class="credential-title">Official Cover Notes</span>
              <span class="credential-sub">Bank & PSU 100% Claim Acceptance</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">7-14 Days</span>
              <span class="credential-title">Rapid Claim Payout</span>
              <span class="credential-sub">Independent Surveyor Assessment</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">0% Deductible</span>
              <span class="credential-title">Zero Hidden Clauses</span>
              <span class="credential-sub">End-to-End Claim Coordination</span>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- 4. Section 1: Overview of Moving Transit Insurance & Asset Security -->
    <section class="about-section" style="padding: 80px 0;">
      <div class="container">
        <div class="about-grid">
          
          <div class="about-images-wrapper">
            <div class="about-image-main">
              <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe Transit Container Truck with Comprehensive Insurance in Ranchi - Shree Ashirwad Packers" title="Shree Ashirwad Packers Insured Transit Container Fleet" width="560" height="380" loading="lazy">
              <div class="about-badge-floating">
                <span class="badge-num">100%</span>
                <span class="badge-txt">Covered Claims</span>
              </div>
            </div>
            <div class="about-image-sub">
              <img src="<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg" alt="Intercity Moving Truck Loading with Transit Insurance in Jharkhand - Shree Ashirwad Packers" title="Insured Highway Relocation Truck Loading" width="280" height="190" loading="lazy">
            </div>
          </div>

          <div class="about-content">
            <div class="section-tag">Asset Security & Peace of Mind</div>
            <h2 class="section-title">
              Why Moving Transit Insurance <span class="gradient-text">Is Indispensable for Long-Distance Relocation</span>
            </h2>
            
            <p class="about-lead">
              Even with our engineered 5-layer shockproof packing materials, trained lifting crews, and dedicated closed container fleet, long-distance highway relocations across India encounter external hazards beyond any transporter's human control. When shifting your home from Ranchi across national highway corridors like NH-19, NH-33, or NH-20, your consignment travels thousands of kilometers through heavy interstate traffic, sudden highway monsoon deluges, multi-vehicle highway collisions, truck rollover risks, and unforeseen highway bridge washouts.
            </p>

            <p class="about-text">
              Many customers mistakenly assume that standard mover contracts offer complete financial indemnity. Under standard Indian transport regulations (the Carriage by Road Act), a carrier's statutory liability is legally capped at a nominal token amount based on gross cargo weight—often as low as ₹10 to ₹50 per kilogram. This statutory amount represents a microscopic fraction of the actual value of an expensive OLED smart TV, a double-door inverter refrigerator, an imported sofa set, or an antique teakwood bed.
            </p>

            <p class="about-text">
              At <strong>Shree Ashirwad Packers and Movers</strong>, we partner with premier public and private general insurance corporations to offer genuine, legally enforceable <strong>moving insurance services</strong>. As <strong>licensed and insured movers</strong> serving <strong>packers and movers in ranchi jharkhand</strong>, we ensure that by paying a small, transparent percentage of your declared inventory valuation, you receive complete legal backing. If an unforeseen highway mishap, fire, or accidental damage occurs, your financial loss is compensated based on real market replacement or professional repair costs.
            </p>

            <div class="about-cta-row">
              <a href="tel:+918409531615" class="btn-primary-custom" title="Call Moving Insurance Specialist at 8409531615">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
                Call Insurance Desk: 8409531615
              </a>
              <a href="<?php echo SITE_BASE_URL; ?>/contact" class="btn-outline-custom" title="Contact Shree Ashirwad Packers Ranchi Office">Get Insurance Advice &rarr;</a>
            </div>

          </div>

        </div>
      </div>
    </section>

    <!-- 5. Section 2: Policy Categories & Risk Coverage -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Tailored Policy Types</div>
          <h2 class="section-title">
            Moving Insurance Policies for <span class="gradient-text">Complete Asset Protection</span>
          </h2>
          <p class="section-subtitle">
            When you <strong>buy packers and movers insurance</strong>, it is crucial to understand the declared <strong>insurance value in movers and packers</strong> contracts. Explore our flexible coverage options tailored to your relocation distance, budget, and cargo fragility.
          </p>
        </div>

        <div class="b2b-sectors-grid">
          
          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.85 7h10.29l1.04 3H5.81l1.04-3zM19 17H5v-4.66l.12-.34h13.77l.11.34V17z"/><circle cx="7.5" cy="14.5" r="1.5"/><circle cx="16.5" cy="14.5" r="1.5"/></svg>
            </div>
            <h3 class="b2b-sector-title">Transit-Only Road Insurance (~1.5%)</h3>
            <p class="b2b-sector-desc">
              Covers loss or severe structural damage occurring exclusively while the container truck is physically traveling on the highway. Protects against vehicular collisions, truck overturns, highway fire, flash floods, and bridge collapse. Highly cost-effective for sturdy wooden furniture and commercial raw materials.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            <h3 class="b2b-sector-title">Comprehensive All-Risk Insurance (~3.0%)</h3>
            <p class="b2b-sector-desc">
              End-to-end full lifecycle coverage protecting belongings from initial packing, stair carry, hydraulic ramp loading, transit road vibrations, destination unloading, and room unpacking. Protects against accidental drops, internal component shocks, and concealed glassware damage.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1 .4-1 1v11c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/></svg>
            </div>
            <h3 class="b2b-sector-title">Automobile & Vehicle IDV Protection</h3>
            <p class="b2b-sector-desc">
              Specialized multi-modal transit policies for personal passenger cars, SUVs, and motorcycles. Tied directly to your vehicle's Insured Declared Value (IDV) on its motor policy, covering carrier collisions, rollovers, highway fire, and scratch damages with pre-trip inspection documentation.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8m-4-4v4"/></svg>
            </div>
            <h3 class="b2b-sector-title">High-Value Electronics & LED TV Crating</h3>
            <p class="b2b-sector-desc">
              Dedicated high-value itemized declarations for curved OLED/LED TVs, gaming rigs, home audio systems, and double-door inverter refrigerators. Guaranteed compensation based on itemized replacement value rather than aggregate cargo weight.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            </div>
            <h3 class="b2b-sector-title">Delicate Glassware & Crockery Protection</h3>
            <p class="b2b-sector-desc">
              Full risk coverage for bone china dinner sets, crystal barware, glass dining tabletops, and chandeliers packed in partitioned dish-packs. Under All-Risk policies, any accidental transit fracture is reimbursed without dispute.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
            </div>
            <h3 class="b2b-sector-title">Corporate & Commercial Cargo Insurance</h3>
            <p class="b2b-sector-desc">
              Tailored industrial marine and inland transit policies for commercial office relocations, server racks, medical diagnostic machinery, retail inventories, and exhibition setups with comprehensive business interruption safeguards.
            </p>
          </div>

        </div>

      </div>
    </section>

    <!-- 6. Section 3: What Is Covered vs What Is Excluded -->
    <section class="section" style="padding: 80px 0; background: #f8fafc;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Transparent Policy Terms</div>
          <h2 class="section-title">
            Asset Protection Scope & <span class="gradient-text">Covered Goods Breakdown</span>
          </h2>
          <p class="section-subtitle">
            We believe in complete operational transparency. Here is how our policies handle <strong>household goods shifting insurance</strong>, <strong>furniture delivery insurance</strong>, and <strong>household shifting insurance</strong> across all major asset categories.
          </p>
        </div>

        <div class="room-packing-grid">
          
          <div class="room-pack-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg" alt="Heavy Wooden Furniture Protective Wrapping for Insured Transit in Bokaro - Shree Ashirwad Packers" title="Solid Wood Furniture Insured Transit Wrapping" class="room-pack-img" width="400" height="260" loading="lazy">
            <div class="room-pack-body">
              <h3 class="room-pack-title">Heavy Furniture & Modular Woodwork</h3>
              <p class="room-pack-text">
                Full replacement and repair coverage for teakwood double beds, Sheesham dining tables, 4-door wardrobes, sofas, and ergonomic office desks. Protected against corner abrasions, joint fractures, and structural impacts.
              </p>
              <div class="room-pack-tags">
                <span class="room-pack-tag">Solid Wood</span>
                <span class="room-pack-tag">Modular Beds</span>
                <span class="room-pack-tag">Full Repair Cost</span>
              </div>
            </div>
          </div>

          <div class="room-pack-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/electronics-led-tv-crating-jharkhand.jpg" alt="Electronics LED TV Crating with Transit Insurance in Jharkhand - Shree Ashirwad Packers" title="Insured LED TV Wooden Crating" class="room-pack-img" width="400" height="260" loading="lazy">
            <div class="room-pack-body">
              <h3 class="room-pack-title">Home Entertainment & Smart Appliances</h3>
              <p class="room-pack-text">
                Complete financial indemnity for 55 to 85 inch OLED/QLED TVs, double-door inverter refrigerators, front-load washing machines, microwave ovens, and split AC units against transit drop shocks and internal motor damage.
              </p>
              <div class="room-pack-tags">
                <span class="room-pack-tag">OLED / QLED</span>
                <span class="room-pack-tag">Washing Machines</span>
                <span class="room-pack-tag">Shock Protection</span>
              </div>
            </div>
          </div>

          <div class="room-pack-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to Door Insured Moving Truck in Jharkhand - Shree Ashirwad Packers" title="Insured Doorstep Moving Truck Fleet" class="room-pack-img" width="400" height="260" loading="lazy">
            <div class="room-pack-body">
              <h3 class="room-pack-title">Two-Wheelers & Passenger Automobiles</h3>
              <p class="room-pack-text">
                Dedicated vehicle transit cover for motorbikes, scooters, and family cars transported on hydraulic carriers. Covers highway collisions, carrier overturns, scratch damages, and body dents with a joint pre-trip survey.
              </p>
              <div class="room-pack-tags">
                <span class="room-pack-tag">Cars & SUVs</span>
                <span class="room-pack-tag">Bikes & Scooters</span>
                <span class="room-pack-tag">IDV Settlement</span>
              </div>
            </div>
          </div>

          <div class="room-pack-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/packing-materials-corrugated-sheets-ranchi.jpg" alt="Packing Materials and Corrugated Sheets for Moving Insurance in Ranchi - Shree Ashirwad Packers" title="High Quality Packing Materials for Insured Transit" class="room-pack-img" width="400" height="260" loading="lazy">
            <div class="room-pack-body">
              <h3 class="room-pack-title">Standard Excluded Perils & Items</h3>
              <p class="room-pack-text">
                Under standard general insurance underwriting rules, policies exclude: hard cash, gold, diamond jewelry, personal passports, living indoor plants, and perishable foods. Clients are advised to carry these items personally.
              </p>
              <div class="room-pack-tags">
                <span class="room-pack-tag">Cash & Jewelry</span>
                <span class="room-pack-tag">Personal Documents</span>
                <span class="room-pack-tag">Client Custody</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- 7. Section 4: 4-Step Rapid Claim Settlement Roadmap -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">7 to 14 Day Resolution</div>
          <h2 class="section-title">
            Our Rapid Claim Settlement Protocol: <span class="gradient-text">Zero-Friction Resolution</span>
          </h2>
          <p class="section-subtitle">
            In the rare event that an item suffers damage or loss during highway transit, we don't abandon you to complex corporate paperwork. Our dedicated claims coordinator manages the entire process from inspection to payout.
          </p>
        </div>

        <div class="checklist-grid">
          
          <div class="checklist-card">
            <span class="checklist-step">Phase 1: Delivery Endorsement</span>
            <h3 class="checklist-title">Immediate LR Bilty Remark</h3>
            <ul class="checklist-items">
              <li>Inspect cartons and unwrapped furniture as our destination team unloads.</li>
              <li>Record specific damage descriptions clearly on the driver's delivery Lorry Receipt (LR) copy.</li>
              <li>Counter-signed by both our delivery supervisor and the receiving client.</li>
              <li>Forms the legal foundation for the insurance underwriter claim file.</li>
            </ul>
          </div>

          <div class="checklist-card">
            <span class="checklist-step">Phase 2: Evidence Documentation</span>
            <h3 class="checklist-title">Photographs & 48-Hr Intimation</h3>
            <ul class="checklist-items">
              <li>Capture high-resolution photos and video clips of the damaged item and packaging.</li>
              <li>Keep original packaging materials intact until surveyor review is completed.</li>
              <li>Notify our 24/7 claims helpline at 8409531615 or via WhatsApp within 48 hours.</li>
              <li>Unique Claim Reference Number generated immediately with underwriters.</li>
            </ul>
          </div>

          <div class="checklist-card">
            <span class="checklist-step">Phase 3: Surveyor Evaluation</span>
            <h3 class="checklist-title">Independent Surveyor Survey</h3>
            <ul class="checklist-items">
              <li>A certified independent insurance surveyor assesses the damaged asset.</li>
              <li>Conducted via rapid video call or in-person doorstep visit within 48 to 72 hours.</li>
              <li>Verification of original purchase invoices or authorized repair quotations.</li>
              <li>Compilation and submission of the formal surveyor loss assessment report.</li>
            </ul>
          </div>

          <div class="checklist-card">
            <span class="checklist-step">Phase 4: Payout Disbursement</span>
            <h3 class="checklist-title">Direct NEFT / RTGS Bank Transfer</h3>
            <ul class="checklist-items">
              <li>General insurance underwriter reviews and approves the surveyor assessment.</li>
              <li>Approved compensation is transferred directly into your verified bank account.</li>
              <li>Turnaround time: 7 to 14 business days from document submission.</li>
              <li>Zero hidden deductibles or arbitrary mover deductions applied.</li>
            </ul>
          </div>

        </div>

      </div>
    </section>

    <!-- 8. Section 5: Transparent Premium Calculation Matrix -->
    <section class="section" style="padding: 80px 0; background: #f8fafc;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Upfront Premium Matrix</div>
          <h2 class="section-title">
            Transit Insurance Charges & <span class="gradient-text">Packers and Movers Insurance Charges</span>
          </h2>
          <p class="section-subtitle">
            Review our official <strong>packers and movers in ranchi price list</strong> for transit insurance coverage. Compare transparent <strong>packers and movers charges in ranchi</strong> calculated as a small percentage of declared replacement value.
          </p>
        </div>

        <div class="comparison-table-wrapper" style="margin-top: 30px;">
          <table class="comp-table">
            <thead>
              <tr>
                <th style="width: 25%;">Declared Asset Valuation</th>
                <th style="width: 25%;">Typical Home Configuration</th>
                <th style="width: 18%;">Transit-Only Premium (~1.5%)</th>
                <th style="width: 18%;">All-Risk Premium (~3.0%)</th>
                <th style="width: 14%;">GST Rate (SAC 997139)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>₹2,00,000 (Two Lakhs)</strong></td>
                <td>1 BHK Minimal / Bachelor Setup</td>
                <td><strong style="color: var(--primary);">₹3,000</strong></td>
                <td><strong style="color: var(--accent);">₹6,000</strong></td>
                <td>18% GST Applicable</td>
              </tr>
              <tr>
                <td><strong>₹5,00,000 (Five Lakhs)</strong></td>
                <td>Standard 2 BHK Family Household</td>
                <td><strong style="color: var(--primary);">₹7,500</strong></td>
                <td><strong style="color: var(--accent);">₹15,000</strong></td>
                <td>18% GST Applicable</td>
              </tr>
              <tr>
                <td><strong>₹10,00,000 (Ten Lakhs)</strong></td>
                <td>Spacious 3 BHK Apartment / House</td>
                <td><strong style="color: var(--primary);">₹15,000</strong></td>
                <td><strong style="color: var(--accent);">₹30,000</strong></td>
                <td>18% GST Applicable</td>
              </tr>
              <tr>
                <td><strong>₹15,00,000 (Fifteen Lakhs)</strong></td>
                <td>Premium 3-4 BHK Luxury Home</td>
                <td><strong style="color: var(--primary);">₹22,500</strong></td>
                <td><strong style="color: var(--accent);">₹45,000</strong></td>
                <td>18% GST Applicable</td>
              </tr>
              <tr>
                <td><strong>₹25,00,000 (Twenty Five Lakhs)</strong></td>
                <td>Luxury Villa / Duplex Bungalow</td>
                <td><strong style="color: var(--primary);">₹37,500</strong></td>
                <td><strong style="color: var(--accent);">₹75,000</strong></td>
                <td>18% GST Applicable</td>
              </tr>
              <tr>
                <td><strong>₹50,00,000+ (Fifty Lakhs+)</strong></td>
                <td>Corporate IT Office / Industrial Goods</td>
                <td><strong style="color: var(--primary);">Custom Quote (~1.2%)</strong></td>
                <td><strong style="color: var(--accent);">Custom Quote (~2.5%)</strong></td>
                <td>18% GST Applicable</td>
              </tr>
            </tbody>
          </table>
        </div>

        <p style="font-size: 0.85rem; color: #64748b; margin-top: 14px; text-align: center;">
          *Note: Declare realistic market replacement values on your Itemized Valuation Manifest for major appliances, wooden furniture, and electronics. Avoid under-declaring values, as insurance surveyor claim settlements are legally calculated based on declared sums. Call our insurance desk at <strong>8409531615</strong> for exact premium calculations.
        </p>

      </div>
    </section>

    <!-- 9. Section 6: IBA Approved Insurance Documentation for Bank & Govt Staff -->
    <section class="infra-section">
      <div class="container">
        
        <div class="compliance-box" style="margin-top: 0;">
          <div class="compliance-details">
            <div class="section-tag" style="background: rgba(255,255,255,0.15); color: #fff;">Audit-Ready Relocation Documentation</div>
            <h3 style="font-size: 1.6rem; color: #ffffff; margin: 12px 0;">
              IBA Approved Insurance Billing for Bank, Defence & PSU Transfers
            </h3>
            <p style="color: #cbd5e1; line-height: 1.65; margin-bottom: 16px;">
              Relocating on official transfer orders as an employee of a nationalized bank (SBI, PNB, Bank of Baroda, Canara Bank, Union Bank), central government ministry, Indian Railways, Defence forces (Army, Navy, Air Force), or public sector enterprise (SAIL, Coal India, CMPDI, NTPC, ONGC)? As verified <strong>iba approved packers and movers in ranchi</strong> and an <strong>iso certified packers and movers in ranchi</strong> enterprise, Shree Ashirwad Packers provides 100% audit-compliant insurance documentation under GST SAC Code 997139, SAC Code 996511, and SAC Code 996791.
            </p>
            <div class="compliance-badges-row">
              <span class="compliance-badge-pill">&check; Official Insurance Policy Cover Note</span>
              <span class="compliance-badge-pill">&check; 100% GST Tax Invoice (SAC 997139 / 996511)</span>
              <span class="compliance-badge-pill">&check; IBA Approved Consignment Note (LR Bilty)</span>
              <span class="compliance-badge-pill">&check; Itemized Inventory Valuation Manifest</span>
              <span class="compliance-badge-pill">&check; Joint Pre-Transit Inspection Certificate</span>
            </div>
          </div>
          <div class="text-center" style="margin-top: 20px;">
            <a href="tel:+918409531615" class="btn-primary-custom" title="Inquire About IBA Approved Moving Insurance Bills: Call 8409531615">
              Verify IBA Insurance Bills: 8409531615
            </a>
          </div>
        </div>

        <!-- Infrastructure & Fleet Visual Showcase -->
        <div class="infra-images-grid" style="margin-top: 36px;">
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/shree-ashirwad-verified-moving-truck-jharkhand.jpg" alt="Verified Insured Moving Truck in Jharkhand - Shree Ashirwad Packers" title="Shree Ashirwad IBA Approved Insured Moving Fleet" width="400" height="260" loading="lazy">
          </div>
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Insured Safe Transit Container Truck in Ranchi - Shree Ashirwad Packers" title="Closed Container Fleet with Transit Insurance" width="400" height="260" loading="lazy">
          </div>
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg" alt="Heavy Wooden Furniture Protective Wrapping in Bokaro - Shree Ashirwad Packers" title="Furniture Multi-Layer Shock Protection Before Transit" width="400" height="260" loading="lazy">
          </div>
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Insured Commercial Goods Storage Warehouse in Ranchi - Shree Ashirwad Packers" title="Insured Warehousing and Storage Facility" width="400" height="260" loading="lazy">
          </div>
        </div>

      </div>
    </section>

    <!-- 10. Section 7: Benchmark Comparison: Shree Ashirwad All-Risk Insurance vs Roadside Transporters -->
    <section class="comparison-section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Relocation Security Benchmark</div>
          <h2 class="section-title">
            Why Insure with Shree Ashirwad Instead of <span class="gradient-text">Unregistered Transporters</span>
          </h2>
          <p class="section-subtitle">
            Entrusting your relocation to roadside brokers often leaves you stranded with worthless verbal assurances or "driver liability" clauses. See why clients trust the <strong>best packers and movers in ranchi</strong> and most <strong>trusted packers and movers in ranchi</strong> for genuine transit insurance coverage.
          </p>
        </div>

        <div class="comparison-table-wrapper">
          <table class="comp-table">
            <thead>
              <tr>
                <th style="width: 34%;">Moving Insurance Benchmark</th>
                <th class="col-brand" style="width: 33%;">Shree Ashirwad Insurance Desk</th>
                <th class="col-brokers" style="width: 33%;">Unregistered Highway Transporters</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Policy Underwriting</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Registered National General Insurance Corporations</span></td>
                <td><span class="badge-no">&#x2717; Unregistered Verbal Promises, Zero Policy Underwriter</span></td>
              </tr>
              <tr>
                <td><strong>Official Cover Note</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Genuine Policy Certificate Issued Before Truck Departs</span></td>
                <td><span class="badge-no">&#x2717; No Document Provided; Customer Given Blank Assurances</span></td>
              </tr>
              <tr>
                <td><strong>Declared Value Compensation</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Settled on Real Declared Market Replacement Value</span></td>
                <td><span class="badge-no">&#x2717; Restricted to ₹10-₹50/kg Statutory Weight Limit</span></td>
              </tr>
              <tr>
                <td><strong>All-Risk Doorstep Coverage</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Covers Packing, Loading, Highway Transit & Unpacking</span></td>
                <td><span class="badge-no">&#x2717; Refuse Claims for Handling Drops or Staircase Shocks</span></td>
              </tr>
              <tr>
                <td><strong>Claim Settlement Timeline</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Fast 7 to 14 Business Days via Direct NEFT/RTGS</span></td>
                <td><span class="badge-no">&#x2717; Months of Dodged Phone Calls, Eventual Zero Payout</span></td>
              </tr>
              <tr>
                <td><strong>Vehicle IDV Coverage</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Car & Bike Insured Under Declared IDV on Bilty</span></td>
                <td><span class="badge-no">&#x2717; Personal Motor Policy Invalidated During Carrier Cargo</span></td>
              </tr>
              <tr>
                <td><strong>IBA & PSU Audit Compliance</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; 100% Accepted by Banks, Defence & Central Govt HR</span></td>
                <td><span class="badge-no">&#x2717; Fake Receipts Rejected by Internal Audit Committees</span></td>
              </tr>
              <tr>
                <td><strong>Dedicated Claims Assistance</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Dedicated Mover Coordinator Guides Through Survey</span></td>
                <td><span class="badge-no">&#x2717; Customer Left Alone to Fight Roadside Truck Drivers</span></td>
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
            Frequently Asked Questions on <span class="gradient-text">Moving Transit Insurance</span>
          </h2>
          <p class="section-subtitle">
            Get straightforward answers regarding transit insurance rates, policy types, valuation guidelines, and claim settlement procedures for household and vehicle relocations.
          </p>
        </div>

        <div class="about-faq-grid">
          
          <div class="about-faq-card">
            <h3 class="about-faq-question">Why is transit insurance necessary when hiring professional packers and movers in Ranchi?</h3>
            <p class="about-faq-answer">
              While our professional 5-layer packing and dedicated closed containers minimize transit risks, interstate highway relocations face unpredictable external perils such as multi-vehicle highway collisions, vehicle overturn, road cave-ins, structural fire, flash floods, or severe weather calamities. Transit insurance guarantees complete financial reimbursement based on your declared asset valuation without prolonged carrier liability disputes.
            </p>
          </div>

          <div class="about-faq-card">
            <h3 class="about-faq-question">What is the difference between Transit-Only Insurance and Comprehensive All-Risk Insurance?</h3>
            <p class="about-faq-answer">
              Transit-Only Insurance covers damage or total loss resulting strictly from vehicle accidents while in highway transit (collision, vehicle overturning, fire, explosion, or natural disasters), with a standard premium of approximately 1.5% of declared goods value. Comprehensive All-Risk Insurance covers the complete end-to-end lifecycle including handling during loading, transit vibrations, unloading, and unpacking inside your destination home, with a premium of approximately 3.0% of declared value.
            </p>
          </div>

          <div class="about-faq-card">
            <h3 class="about-faq-question">How are transit insurance premiums calculated for household shifting?</h3>
            <p class="about-faq-answer">
              Transit insurance premiums are calculated as a small percentage of the total declared replacement value of your household goods. For example, if you declare an itemized household inventory value of ₹5,00,000, a 1.5% Transit-Only policy requires a premium of ₹7,500 plus 18% GST, giving you comprehensive legal coverage against highway losses.
            </p>
          </div>

          <div class="about-faq-card">
            <h3 class="about-faq-question">Are your insurance certificates and bills IBA approved for Bank and Central Government employee claims?</h3>
            <p class="about-faq-answer">
              Yes, 100%. Shree Ashirwad Packers issues authentic Insurance Cover Notes and GST Tax Invoices under SAC Code 997139, paired with official IBA Approved Lorry Receipts (LR Bilty) noting the insured declared sum. Our documentation is fully accepted by nationalized banks (SBI, PNB, BOB, Canara), Defence (Army, Navy, Airforce), Railways, PSUs, and Central Govt audit divisions for complete insurance reimbursement.
            </p>
          </div>

          <div class="about-faq-card">
            <h3 class="about-faq-question">What items are strictly excluded from transit insurance coverage?</h3>
            <p class="about-faq-answer">
              Standard general insurance policy exclusions include: cash, currency notes, negotiable instruments, gold, jewelry, precious gemstones, living house plants, perishable food items, and contraband. Customers are strictly advised to carry cash, jewelry, and vital personal documents personally.
            </p>
          </div>

          <div class="about-faq-card">
            <h3 class="about-faq-question">How does the damage claim settlement process work if an item is damaged?</h3>
            <p class="about-faq-answer">
              If damage is discovered upon destination delivery, our 5-step rapid protocol applies: 1) Note the damage immediately on the delivery receipt / LR copy before our driver departs; 2) Take clear high-resolution photographs and videos of the damaged item and packaging; 3) Notify our customer support desk within 48 hours; 4) Submit an itemized claim form with original purchase receipt or repair estimate; 5) An independent insurance surveyor assesses the item and your compensation or repair payout is disbursed within 7 to 14 business days.
            </p>
          </div>

          <div class="about-faq-card">
            <h3 class="about-faq-question">Does transit insurance cover two-wheelers and cars during intercity relocation?</h3>
            <p class="about-faq-answer">
              Yes. We offer specialized transit insurance for motorbikes, scooters, and passenger cars. Before loading, a comprehensive Vehicle Inspection Report documents odometer reading, preexisting scratches, and fuel level. The vehicle is insured against transit collisions, carrier overturning, fire, and structural transport damage under declared IDV (Insured Declared Value).
            </p>
          </div>

          <div class="about-faq-card">
            <h3 class="about-faq-question">Can I insure individual valuable items like a large LED TV or double-door refrigerator separately?</h3>
            <p class="about-faq-answer">
              Yes. Our itemized inventory valuation sheet allows you to specify distinct declared values for premium high-value appliances, customized modular furniture, and delicate electronics, ensuring proportional and accurate compensation in case of localized transit damage.
            </p>
          </div>

        </div>

      </div>
    </section>

    <!-- 13. Section 10: Pre-Footer CTA Banner & Jharkhand Coverage Network -->
    <section class="cta-banner-section">
      <div class="container">
        
        <div class="cta-banner-card">
          <div class="cta-banner-content">
            <h2 class="cta-banner-title">Relocate with Total Financial Peace of Mind</h2>
            <p class="cta-banner-desc">
              Don't leave your valuable household investments to chance on unpredictable national highways. Speak with our certified moving insurance advisors and secure an authentic All-Risk or Transit-Only policy today.
            </p>
            <div class="about-cta-row" style="margin-top: 20px;">
              <a href="tel:+918409531615" class="btn-primary-custom" title="Call Shree Ashirwad Moving Insurance Desk: 8409531615">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
                Call Insurance Desk: 8409531615
              </a>
              <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn-outline-custom" title="Get Instant Transit Insurance Quote on WhatsApp" style="border-color: #ffffff; color: #ffffff;">
                WhatsApp Insurance Quote &rarr;
              </a>
            </div>
          </div>
        </div>

        <!-- Localized Ranchi Localities & Jharkhand District Links -->
        <div class="neighborhoods-card" style="margin-top: 40px;">
          <h3 class="neighborhoods-title">
            <svg viewBox="0 0 24 24" width="20" height="20"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
            Professional Moving Insurance Coverage Across Ranchi & Jharkhand
          </h3>
          <p style="font-size: 0.9rem; color: #64748b; margin-bottom: 16px;">
            Our moving insurance desks provide comprehensive transit protection across all Ranchi residential and commercial sectors:
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
