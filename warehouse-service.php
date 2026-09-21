<?php
/**
 * Warehouse Services Page - Shree Ashirwad Packers and Movers
 * Pure Core PHP Implementation
 * 
 * Deep Climate-Controlled Storage, 24/7 CCTV Surveillance, Elevated Pallet Racking, Digital Barcode Inventory
 * Preserving exact canonical URL: https://www.shreeashirwadpackers.com/warehouse-service/
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
  <?php render_seo_tags('warehouse-service'); ?>

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
          <span aria-current="page">Warehouse Service</span>
        </nav>
        <h1 class="page-hero-title">
          Warehouse Services in <span class="gradient-text">Ranchi - Secure 24/7 Monitored Storage</span>
        </h1>
        <p class="page-hero-subtitle">
          Safeguard your household furniture, commercial inventory, corporate archives, and vehicles in Jharkhand's certified storage facility. Equipped with 24/7 HD CCTV security, elevated moisture-proof pallet racking, biological pest control, and flexible weekly or monthly rental agreements.
        </p>
        <div class="about-cta-row" style="justify-content: center; margin-top: 24px;">
          <a href="tel:+918409531615" class="btn-primary-custom" title="Call Warehouse Specialist: 8409531615">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
            Instant Storage Quote: 8409531615
          </a>
          <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn-outline-custom" title="Get Warehousing Estimate on WhatsApp">
            WhatsApp Estimate &rarr;
          </a>
        </div>
      </div>
    </section>

    <!-- 3. Key Credentials & Facility Trust Bar -->
    <section class="credentials-bar-section">
      <div class="container">
        <div class="credentials-grid">
          
          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">24/7 CCTV</span>
              <span class="credential-title">Continuous HD Monitoring</span>
              <span class="credential-sub">Armed Guards & Cloud Backup</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">100% Termite</span>
              <span class="credential-title">& Moisture Protected</span>
              <span class="credential-sub">Quarterly Biological Pest Control</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">Elevated</span>
              <span class="credential-title">Heavy Pallet Racking</span>
              <span class="credential-sub">Zero Direct Concrete Contact</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">Barcode</span>
              <span class="credential-title">Serialized Inventory</span>
              <span class="credential-sub">Itemized Manifest Tracking</span>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- 4. Section 1: Overview of Warehousing in Ranchi & Jharkhand -->
    <section class="about-section" style="padding: 80px 0;">
      <div class="container">
        <div class="about-grid">
          
          <div class="about-images-wrapper">
            <div class="about-image-main">
              <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Commercial Goods and Household Storage Warehouse in Ranchi - Shree Ashirwad Packers" title="Warehouse Services in Ranchi - Secure 24/7 Storage Facility" width="560" height="380" loading="lazy">
              <div class="about-badge-floating">
                <span class="badge-num">100%</span>
                <span class="badge-txt">Secure Storage</span>
              </div>
            </div>
            <div class="about-image-sub">
              <img src="<?php echo SITE_BASE_URL; ?>/images/packing-materials-corrugated-sheets-ranchi.jpg" alt="Warehouse Protective Materials and Corrugated Packaging - Shree Ashirwad Packers" title="Protective Packaging for Storage in Ranchi" width="280" height="190" loading="lazy">
            </div>
          </div>

          <div class="about-content">
            <div class="section-tag">Storage Facility Engineering</div>
            <h2 class="section-title">
              Professional <span class="gradient-text">Warehouse Services in Ranchi</span>
            </h2>
            
            <p class="about-lead">
              In an era of rapid urban mobility, home renovations, and evolving corporate supply chains, temporary and long-term storage has become an essential logistical necessity. At Shree Ashirwad Packers and Movers, we deliver state-of-the-art <strong>warehouse services in ranchi</strong> and reliable <strong>household storage services in ranchi</strong> engineered to keep your belongings pristine, dry, and protected.
            </p>

            <p class="about-text">
              Families across Ranchi often experience unexpected relocation delays—such as awaiting flat possession in newly constructed residential towers, undergoing comprehensive home interior renovations, or embarking on temporary outstation job postings. Attempting to store valuable goods in rented damp basements or informal garages inevitably results in tragic damage from groundwater seepage, monsoon humidity spikes, mold, and destructive subterranean termites.
            </p>

            <p class="about-text">
              As the premier <strong>packers and movers in ranchi jharkhand</strong>, our purpose-built storage hubs in Ranchi (Tupudana Industrial Area and Harmu) and Bokaro offer fully engineered storage infrastructure. Every item is wrapped in multi-layer protective materials, cushioned with moisture barriers, and stored on elevated heavy-duty plastic pallets inside climate-shielded, pest-controlled, and fire-protected bays.
            </p>

            <div class="about-cta-row">
              <a href="tel:+918409531615" class="btn-primary-custom" title="Call Warehouse Specialist at 8409531615">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
                Call Storage Desk: 8409531615
              </a>
              <a href="<?php echo SITE_BASE_URL; ?>/contact" class="btn-outline-custom" title="Contact Shree Ashirwad Packers Ranchi Office">Reserve Storage Bay &rarr;</a>
            </div>

          </div>

        </div>
      </div>
    </section>

    <!-- 5. Section 2: Industrial Security & Preservation Architecture -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Facility Infrastructure</div>
          <h2 class="section-title">
            Preservation Architecture at Our <span class="gradient-text">Storage Facility in Ranchi</span>
          </h2>
          <p class="section-subtitle">
            Your belongings represent years of hard work and sentimental value. Discover how our <strong>safe storage services in ranchi</strong> integrate commercial multi-layer security, moisture defense, and biological pest control for absolute peace of mind.
          </p>
        </div>

        <div class="b2b-sectors-grid">
          
          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
            </div>
            <h3 class="b2b-sector-title">24/7 CCTV & Armed Security</h3>
            <p class="b2b-sector-desc">
              High-definition night-vision CCTV cameras monitor every storage corridor, loading dock, and entrance gate. Footage is backed up off-site on redundant cloud servers, reinforced by professional 24/7 on-site security guards.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
            </div>
            <h3 class="b2b-sector-title">Fire Detection & Suppression</h3>
            <p class="b2b-sector-desc">
              Equipped with multi-zone optical smoke sensors, heat alarms, and automated ABC dry-chemical extinguishers. Routine pressure testing and physical drills ensure swift response in any thermal incident.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 00-9.78 2.096A4.001 4.001 0 003 15z"/></svg>
            </div>
            <h3 class="b2b-sector-title">Monsoon Humidity & Moisture Defense</h3>
            <p class="b2b-sector-desc">
              Ranchi experiences heavy monsoons. Our warehouse buildings feature double-insulated roofing, elevated flood-proof plinth levels, industrial ceiling ventilation turbines, and silica desiccant pouches inside every wrapped asset.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            </div>
            <h3 class="b2b-sector-title">Biological Pest & Termite Control</h3>
            <p class="b2b-sector-desc">
              We execute scheduled quarterly biological pest eradication treatments conducted by licensed entomologists. Our preventative barriers eliminate rodents, termites, silverfish, and moths, keeping textiles and woodwork immaculate.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
            </div>
            <h3 class="b2b-sector-title">Elevated Pallet Racking</h3>
            <p class="b2b-sector-desc">
              We never place household cartons or furniture directly on bare concrete. Goods rest on heavy-duty, anti-static plastic pallets or structural steel racks 6 inches above the ground, enabling continuous sub-floor airflow circulation.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
            </div>
            <h3 class="b2b-sector-title">Biometric & Authorized Access</h3>
            <p class="b2b-sector-desc">
              Access to storage bays is strictly restricted to verified warehouse supervisors and registered clients accompanied by staff. No unauthorized outside persons or casual laborers are permitted entry, ensuring unbroken chain of custody.
            </p>
          </div>

        </div>

      </div>
    </section>

    <!-- 6. Section 3: Specialized Storage Solutions by Asset Category -->
    <section class="section" style="padding: 80px 0; background: #f8fafc;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Dedicated Storage Zones</div>
          <h2 class="section-title">
            Tailored Solutions for <span class="gradient-text">Household & Commercial Goods</span>
          </h2>
          <p class="section-subtitle">
            Different assets require distinct micro-environments and preservation protocols. Explore our specialized storage zones designed for <strong>commercial warehouse storage</strong>, professional <strong>furniture storage ranchi</strong>, and secure <strong>household goods storage in ranchi</strong>.
          </p>
        </div>

        <div class="room-packing-grid">
          
          <div class="room-pack-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Household Goods and Furniture Stored on Elevated Pallets - Shree Ashirwad Packers" title="Household Furniture Storage in Warehouse Ranchi" class="room-pack-img" width="400" height="260" loading="lazy">
            <div class="room-pack-body">
              <h3 class="room-pack-title">Household Furniture & Family Assets</h3>
              <p class="room-pack-text">
                Ideal for families renovating, awaiting flat possession, or moving temporarily abroad. Double beds, teakwood wardrobes, and sofas are disassembled, bubble-wrapped, stretch-sealed, and organized into dedicated pallet bays.
              </p>
              <div class="room-pack-tags">
                <span class="room-pack-tag">Silica Desiccants</span>
                <span class="room-pack-tag">Heavy PVC Covers</span>
                <span class="room-pack-tag">Dedicated Pallet Bays</span>
              </div>
            </div>
          </div>

          <div class="room-pack-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/waterproof-container-loading-jharkhand.jpg" alt="Commercial Business Inventory Storage in Warehouse Jharkhand - Shree Ashirwad Packers" title="Commercial Inventory and Merchandise Warehousing" class="room-pack-img" width="400" height="260" loading="lazy">
            <div class="room-pack-body">
              <h3 class="room-pack-title">Commercial Inventory & Retail Stock</h3>
              <p class="room-pack-text">
                Tailored for e-commerce sellers, retail chains, pharmaceutical distributors, and FMCG businesses requiring flexible overflow storage. Multi-tier pallet racking accommodates standard industrial pallets with forklift access.
              </p>
              <div class="room-pack-tags">
                <span class="room-pack-tag">1,500 kg Rack Rating</span>
                <span class="room-pack-tag">Rapid Dispatch Dock</span>
                <span class="room-pack-tag">SKU Batch Tracking</span>
              </div>
            </div>
          </div>

          <div class="room-pack-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Covered Automobile and Vehicle Storage Bays in Ranchi - Shree Ashirwad Packers" title="Automobile and Two-Wheeler Storage Bays" class="room-pack-img" width="400" height="260" loading="lazy">
            <div class="room-pack-body">
              <h3 class="room-pack-title">Automobile & Two-Wheeler Parking</h3>
              <p class="room-pack-text">
                Going on a long-term sabbatical or military deployment? Store your car or motorcycle in our covered, dust-free automobile parking bays. We provide periodic tire pressure checks, protective dust covers, and battery maintenance.
              </p>
              <div class="room-pack-tags">
                <span class="room-pack-tag">Covered Vehicle Bays</span>
                <span class="room-pack-tag">Battery Maintenance</span>
                <span class="room-pack-tag">Periodic Engine Runs</span>
              </div>
            </div>
          </div>

          <div class="room-pack-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Corporate Document Archival and File Storage Vaults in Ranchi - Shree Ashirwad Packers" title="Corporate File Storage and Document Archival" class="room-pack-img" width="400" height="260" loading="lazy">
            <div class="room-pack-body">
              <h3 class="room-pack-title">Corporate File Archival & Document Vaults</h3>
              <p class="room-pack-text">
                Banks, law firms, hospitals, and corporate headquarters must retain financial, tax, and medical records for 7–10 years. Our dry, fire-rated document vaults preserve paper records in barcode-tracked archival cartons.
              </p>
              <div class="room-pack-tags">
                <span class="room-pack-tag">Fireproof Cartons</span>
                <span class="room-pack-tag">Barcode Record Index</span>
                <span class="room-pack-tag">Confidentiality NDAs</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- 7. Section 4: Digital Barcoding & Complete Chain of Custody -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Inventory Tracking Precision</div>
          <h2 class="section-title">
            Digital Barcoding & <span class="gradient-text">Complete Chain of Custody</span>
          </h2>
          <p class="section-subtitle">
            The biggest worry families have when placing household goods or seeking <strong>luggage storage ranchi</strong> is the risk of misplaced cartons or unverified inventory. Shree Ashirwad Packers eliminates uncertainty through proprietary digitized inventory controls.
          </p>
        </div>

        <div class="checklist-grid">
          
          <div class="checklist-card">
            <span class="checklist-step">Phase 1: Pre-Intake Manifest</span>
            <h3 class="checklist-title">Itemized Cataloging</h3>
            <ul class="checklist-items">
              <li>Comprehensive physical inspection of all cartons, furniture, and appliances at your doorstep.</li>
              <li>Official serialized manifest created with exact item descriptions and condition notes.</li>
              <li>Both customer and move supervisor verify and sign the pre-intake manifest.</li>
              <li>High-resolution photos taken of pre-existing blemishes on luxury furniture.</li>
            </ul>
          </div>

          <div class="checklist-card">
            <span class="checklist-step">Phase 2: Serialized Tagging</span>
            <h3 class="checklist-title">Barcode Application</h3>
            <ul class="checklist-items">
              <li>Each carton and furniture piece receives a tamper-evident, weather-resistant barcode sticker.</li>
              <li>Barcodes encode customer ID, room classification, carton contents, and item number.</li>
              <li>Color-coded labels differentiate fragile china, electronics, and heavy hardware.</li>
              <li>Zero risk of box mix-ups with other consignments inside the warehouse.</li>
            </ul>
          </div>

          <div class="checklist-card">
            <span class="checklist-step">Phase 3: Bay & Aisle Mapping</span>
            <h3 class="checklist-title">Digital Coordinates</h3>
            <ul class="checklist-items">
              <li>Upon warehouse arrival, every barcode is scanned into our cloud inventory database.</li>
              <li>Assets are assigned to exact aisle, rack level, and pallet shelf coordinates.</li>
              <li>Customer receives a digital copy of the verified Warehouse Intake Receipt (WIR).</li>
              <li>Real-time inventory database updated with timestamp and bay location.</li>
            </ul>
          </div>

          <div class="checklist-card">
            <span class="checklist-step">Phase 4: Partial Retrieval</span>
            <h3 class="checklist-title">On-Demand Access</h3>
            <ul class="checklist-items">
              <li>Need winter clothing, travel bags, or important files while your home remodel continues?</li>
              <li>Notify our warehouse manager 24 hours in advance with your barcode serial numbers.</li>
              <li>Our staff retrieves the exact requested carton without disturbing your remaining bay.</li>
              <li>Immediate chain-of-custody update logged upon partial handover.</li>
            </ul>
          </div>

        </div>

      </div>
    </section>

    <!-- 8. Section 5: Transparent Warehouse Rental Pricing Matrix -->
    <section class="section" style="padding: 80px 0; background: #f8fafc;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Clear & Predictable Costing</div>
          <h2 class="section-title">
            Warehouse Storage Charges & <span class="gradient-text">Rental Rate Matrix</span>
          </h2>
          <p class="section-subtitle">
            Review our official <strong>packers and movers in ranchi price list</strong> for secure storage. Compare transparent <strong>packers and movers charges in ranchi</strong> and get an upfront <strong>packers and movers ranchi cost estimate</strong> for weekly or monthly storage with zero hidden maintenance fees.
          </p>
        </div>

        <div class="comparison-table-wrapper" style="margin-top: 30px;">
          <table class="comp-table">
            <thead>
              <tr>
                <th style="width: 25%;">Storage Scope / Household Volume</th>
                <th style="width: 20%;">Approx. Floor Area</th>
                <th style="width: 20%;">Monthly Rental (1–3 Months)</th>
                <th style="width: 20%;">Discounted Rate (6+ Months)</th>
                <th style="width: 15%;">Doorstep Pickup & Palletizing</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Luggage / Few Cartons</strong><br><span style="font-size: 0.8rem; color: #64748b;">5 to 15 Boxes or Student Travel Bags</span></td>
                <td>20 – 40 Sq. Ft.</td>
                <td><strong style="color: var(--primary);">₹900 – ₹1,500 / mo</strong></td>
                <td><strong style="color: var(--accent);">₹750 – ₹1,200 / mo</strong></td>
                <td>₹800 – ₹1,200</td>
              </tr>
              <tr>
                <td><strong>1 BHK Apartment Goods</strong><br><span style="font-size: 0.8rem; color: #64748b;">Compact Home (~15-25 Boxes + Bed/Fridge)</span></td>
                <td>60 – 100 Sq. Ft.</td>
                <td><strong style="color: var(--primary);">₹1,800 – ₹2,800 / mo</strong></td>
                <td><strong style="color: var(--accent);">₹1,500 – ₹2,400 / mo</strong></td>
                <td>₹2,500 – ₹3,800</td>
              </tr>
              <tr>
                <td><strong>2 BHK Family Home Goods</strong><br><span style="font-size: 0.8rem; color: #64748b;">Standard Household (~30-50 Boxes + Furniture)</span></td>
                <td>120 – 180 Sq. Ft.</td>
                <td><strong style="color: var(--primary);">₹3,200 – ₹4,800 / mo</strong></td>
                <td><strong style="color: var(--accent);">₹2,800 – ₹4,200 / mo</strong></td>
                <td>₹4,500 – ₹6,500</td>
              </tr>
              <tr>
                <td><strong>3 BHK Large Residence</strong><br><span style="font-size: 0.8rem; color: #64748b;">Extensive Assets (~50-80 Boxes + Full Appliances)</span></td>
                <td>200 – 300 Sq. Ft.</td>
                <td><strong style="color: var(--primary);">₹5,200 – ₹7,500 / mo</strong></td>
                <td><strong style="color: var(--accent);">₹4,500 – ₹6,500 / mo</strong></td>
                <td>₹6,500 – ₹9,500</td>
              </tr>
              <tr>
                <td><strong>Commercial Industrial Pallet</strong><br><span style="font-size: 0.8rem; color: #64748b;">Standard Euro Pallet Slot (Up to 1,200 kg)</span></td>
                <td>Per Pallet Slot</td>
                <td><strong style="color: var(--primary);">₹600 – ₹1,000 / Pallet</strong></td>
                <td><strong style="color: var(--accent);">₹500 – ₹850 / Pallet</strong></td>
                <td>Forklift offload incl.</td>
              </tr>
            </tbody>
          </table>
        </div>

        <p style="font-size: 0.85rem; color: #64748b; margin-top: 14px; text-align: center;">
          *Note: Storage includes 24/7 CCTV surveillance, quarterly biological pest management, and regular aeration. All invoices are GST-compliant under SAC code 996791 (Storage and Warehousing Services). Call our storage desk at <strong>8409531615</strong> for an exact written estimate.
        </p>

      </div>
    </section>

    <!-- 9. Section 6: IBA Approved Corporate Billing & 100% GST Compliance -->
    <section class="infra-section">
      <div class="container">
        
        <div class="compliance-box" style="margin-top: 0;">
          <div class="compliance-details">
            <div class="section-tag" style="background: rgba(255,255,255,0.15); color: #fff;">Audit-Ready Relocation Documentation</div>
            <h3 style="font-size: 1.6rem; color: #ffffff; margin: 12px 0;">
              IBA Approved Storage Bills for Bank & PSU Employee Claims
            </h3>
            <p style="color: #cbd5e1; line-height: 1.65; margin-bottom: 16px;">
              When officers from State Bank of India (SBI), Punjab National Bank (PNB), Bank of India (BOI), Coal India, SAIL Bokaro, CMPDI, MECON, Indian Railways, or Central Government transfer, employers often reimburse transit storage costs for 15 to 90 days. As verified <strong>iba approved packers and movers in ranchi</strong> and an <strong>iso certified packers and movers in ranchi</strong> enterprise, Shree Ashirwad Packers provides 100% audit-compliant documentation under GST SAC Code 996791.
            </p>
            <div class="compliance-badges-row">
              <span class="compliance-badge-pill">&check; Official Stamped Warehouse Deposit Receipt (WDR)</span>
              <span class="compliance-badge-pill">&check; 100% GST Storage Tax Invoice (SAC 996791)</span>
              <span class="compliance-badge-pill">&check; Itemized & Serialized Warehouse Inventory Manifest</span>
              <span class="compliance-badge-pill">&check; Revenue-Stamped Official Payment Receipt</span>
              <span class="compliance-badge-pill">&check; Comprehensive Warehouse Floater Insurance Policy</span>
            </div>
          </div>
          <div class="text-center" style="margin-top: 20px;">
            <a href="tel:+918409531615" class="btn-primary-custom" title="Inquire About IBA Approved Storage Bills: Call 8409531615">
              Verify Storage Documentation: 8409531615
            </a>
          </div>
        </div>

        <!-- Infrastructure & Fleet Visual Showcase -->
        <div class="infra-images-grid" style="margin-top: 36px;">
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Commercial Goods Storage and Handling Facility in Ranchi - Shree Ashirwad Packers" title="Secure Goods Warehousing and Handling Center" width="400" height="260" loading="lazy">
          </div>
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Fleet Door to Door Delivery Truck - Shree Ashirwad Packers" title="Dedicated Closed Container Delivery Truck" width="400" height="260" loading="lazy">
          </div>
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg" alt="Intercity Moving Truck Loading and Securing - Shree Ashirwad Packers" title="Intercity Cargo Stacking and Ratchet Securing" width="400" height="260" loading="lazy">
          </div>
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/heavy-machinery-office-shifting-jharkhand.jpg" alt="Heavy Machinery and Equipment Handling in Jharkhand - Shree Ashirwad Packers" title="Heavy Asset and Industrial Equipment Handling" width="400" height="260" loading="lazy">
          </div>
        </div>

      </div>
    </section>

    <!-- 10. Section 7: Benchmark Comparison: Shree Ashirwad vs Informal Rented Garages -->
    <section class="comparison-section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Storage Benchmark</div>
          <h2 class="section-title">
            Why Choose Shree Ashirwad Instead of <span class="gradient-text">Informal Rented Garages</span>
          </h2>
          <p class="section-subtitle">
            Renting an informal garage or unventilated basement might seem cheap initially, but water seepage, termite infestation, or theft turns it into a financial catastrophe. See why clients trust the <strong>best packers and movers in ranchi</strong> and most <strong>trusted packers and movers in ranchi</strong> for certified warehouse storage.
          </p>
        </div>

        <div class="comparison-table-wrapper">
          <table class="comp-table">
            <thead>
              <tr>
                <th style="width: 34%;">Storage Benchmark / Standard</th>
                <th class="col-brand" style="width: 33%;">Shree Ashirwad Modern Warehousing</th>
                <th class="col-brokers" style="width: 33%;">Informal Rented Garage / Basement</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Flooring & Moisture Barrier</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Elevated Heavy Pallets 6" Above Epoxy Floor</span></td>
                <td><span class="badge-no">&#x2717; Direct Concrete Contact Causing Dampness & Mildew</span></td>
              </tr>
              <tr>
                <td><strong>Security & Surveillance</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; 24/7 HD CCTV with Cloud Backup & Armed Guards</span></td>
                <td><span class="badge-no">&#x2717; Single Padlocked Rusty Shutter with Zero Security</span></td>
              </tr>
              <tr>
                <td><strong>Pest & Termite Defense</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Quarterly Professional Biological Fumigation</span></td>
                <td><span class="badge-no">&#x2717; Infested with Termites, Silverfish & Nesting Rats</span></td>
              </tr>
              <tr>
                <td><strong>Fire Safety Systems</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Multi-Zone Smoke Sensors & Dry-Chemical Extinguishers</span></td>
                <td><span class="badge-no">&#x2717; Total Absence of Fire Alarms or Extinguishers</span></td>
              </tr>
              <tr>
                <td><strong>Inventory Tracking</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Serialized Barcode Tagging & Mapped Bay Coordinates</span></td>
                <td><span class="badge-no">&#x2717; Disorganized Piles Leading to Lost Valuables</span></td>
              </tr>
              <tr>
                <td><strong>Insurance Protection</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Comprehensive Warehouse Floater Policy</span></td>
                <td><span class="badge-no">&#x2717; Zero Compensation for Theft, Water, or Fire Loss</span></td>
              </tr>
              <tr>
                <td><strong>Partial Retrieval</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Smooth Single-Box Retrieval with 24-hr Advance Notice</span></td>
                <td><span class="badge-no">&#x2717; Must Dismantle Entire Stack of Boxes Yourself</span></td>
              </tr>
              <tr>
                <td><strong>Official Claim Bills</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; IBA Approved GST Invoices (SAC 996791)</span></td>
                <td><span class="badge-no">&#x2717; Informal Cash Slips Rejected by Corporate HR</span></td>
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
            Frequently Asked Questions on <span class="gradient-text">Warehousing & Storage Services</span>
          </h2>
          <p class="section-subtitle">
            Clear, transparent answers regarding our storage security, pricing, access procedures, and billing in Ranchi.
          </p>
        </div>

        <div class="about-faq-grid">
          
          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>How secure is the Shree Ashirwad Packers warehouse facility in Ranchi?</span>
            </div>
            <p class="about-faq-a">
              Our warehousing facility features 24/7 high-definition CCTV camera coverage with remote cloud backup, physical perimeter fencing, security guards on duty 24/7, multi-zone smoke detectors, industrial fire extinguishers, and strict biometric entry control.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>How are monthly warehouse storage charges calculated in Ranchi?</span>
            </div>
            <p class="about-faq-a">
              Storage charges are calculated based on the volume of space occupied (cubic feet or square feet) and the rental duration. Typical monthly rates range from ₹1,800 to ₹2,800 for a 1 BHK, ₹3,200 to ₹4,800 for a 2 BHK, and ₹5,200 to ₹7,500 for a 3 BHK, with significant discounts on long-term 6-month or 1-year contracts.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>Can I store household goods for just a few days or weeks during home renovation?</span>
            </div>
            <p class="about-faq-a">
              Yes. We offer fully flexible storage plans starting from as short as 7 days, up to multiple months or years. You pay only for the exact duration your belongings remain safely in our warehouse.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>How do you protect furniture and wooden goods from termites, moisture, and dust?</span>
            </div>
            <p class="about-faq-a">
              All items are wrapped in moisture-proof stretch film and protective moving blankets, then stored on elevated heavy-duty plastic or treated wooden pallets 6 inches above the floor. Our facilities undergo routine quarterly biological pest control and humidity monitoring.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>Can I retrieve some of my stored items while the rest remains in the warehouse?</span>
            </div>
            <p class="about-faq-a">
              Yes, partial withdrawals are permitted. Thanks to our serialized barcode inventory system, our warehouse supervisor can retrieve specific labeled boxes with 24 hours advance notice without disturbing your remaining consignment.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>Are warehouse and storage bills IBA approved for Bank and Central Government employee claims?</span>
            </div>
            <p class="about-faq-a">
              Yes, 100%. We provide official GST tax invoices under SAC Code 996791 (Storage and Warehousing Services), warehouse deposit receipts, and verified inventory manifests fully accepted by PSUs, nationalized banks (SBI, PNB), Railways, and Central Government audit departments for transit storage allowances.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>What insurance coverage is provided for stored household goods in Ranchi?</span>
            </div>
            <p class="about-faq-a">
              All stored assets are protected under Comprehensive Warehouse Floater Insurance covering accidental risks including warehouse fire, lightning, earthquake, cyclone, structural flooding, and burglary under declared value.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>How are items tracked and cataloged inside the storage facility?</span>
            </div>
            <p class="about-faq-a">
              Upon arrival, every box and wrapped furniture item is affixed with a unique serialized barcode tag. You receive a digital copy and signed physical copy of the Warehouse Intake Manifest detailing item descriptions, condition notes, and rack bay coordinates.
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
            <span class="cta-badge">Book Safe & Secure Storage Today</span>
            <h2 class="cta-title">
              Need Clean, Monitored <span class="gradient-text">Storage in Ranchi?</span>
            </h2>
            <p class="cta-subtitle">
              Get an instant quotation for temporary or long-term storage of your home furniture, business inventory, or automobile. Safe, insured, 100% termite-free, and monitored 24/7.
            </p>
            <div class="cta-buttons-row">
              <a href="tel:+918409531615" class="btn-cta-phone" title="Call Shree Ashirwad Packers Storage Helpline: 8409531615">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
                <span>Call Hotline: <strong>8409531615</strong></span>
              </a>
              <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn-cta-whatsapp" title="Chat on WhatsApp for Warehousing Quote">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2z"/></svg>
                <span>WhatsApp Survey &rarr;</span>
              </a>
            </div>
            <div class="cta-trust-items">
              <span>&check; 24/7 CCTV & Security Guards</span>
              <span>&check; 100% Termite & Moisture Defense</span>
              <span>&check; 100% GST Tax Invoices (SAC 996791)</span>
              <span>&check; IBA Approved Storage Documentation</span>
            </div>
          </div>
        </div>

        <!-- Localized Ranchi Localities & Jharkhand District Links -->
        <div class="neighborhoods-card" style="margin-top: 40px;">
          <h3 class="neighborhoods-title">
            <svg viewBox="0 0 24 24" width="20" height="20"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
            Warehousing & Doorstep Retrieval Network Across Ranchi & Jharkhand
          </h3>
          <p style="font-size: 0.9rem; color: #64748b; margin-bottom: 16px;">
            We offer direct doorstep pickup and delivery between our central Ranchi warehouse and all residential neighborhoods:
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
