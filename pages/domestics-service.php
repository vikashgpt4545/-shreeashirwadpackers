<?php
/**
 * Domestic Moving Services Page - Shree Ashirwad Packers and Movers
 * Pure Core PHP Implementation
 * 
 * All-India Domestic Shifting, Intercity Relocation, Dedicated Closed Containers, GPS Tracking, IBA Approved Bills
 * Preserving exact canonical URL: https://www.shreeashirwadpackers.com/domestics-service/
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
  <?php render_seo_tags('domestics-service'); ?>

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
          <span aria-current="page">Domestic Service</span>
        </nav>
        <h1 class="page-hero-title">
          Domestic Moving Services in <span class="gradient-text">Ranchi - Pan-India Specialists</span>
        </h1>
        <p class="page-hero-subtitle">
          Planning an intercity or interstate relocation from Ranchi or anywhere in Jharkhand? Trust Shree Ashirwad Packers and Movers for dependable, zero-transshipment domestic shifting across all 28 Indian states. Featuring dedicated closed container trucks, satellite GPS live tracking, 5-layer shockproof packing, and 100% IBA approved billing for bank and corporate transfer claims.
        </p>
        <div class="about-cta-row" style="justify-content: center; margin-top: 24px;">
          <a href="tel:+918409531615" class="btn-primary-custom" title="Call Domestic Relocation Desk: 8409531615">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
            Domestic Quote: 8409531615
          </a>
          <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn-outline-custom" title="Get Intercity Shifting Estimate on WhatsApp">
            WhatsApp Estimate &rarr;
          </a>
        </div>
      </div>
    </section>

    <!-- 3. Key Credentials & Domestic Reach Trust Bar -->
    <section class="credentials-bar-section">
      <div class="container">
        <div class="credentials-grid">
          
          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">28 States</span>
              <span class="credential-title">Pan-India Reach</span>
              <span class="credential-sub">Door-to-Door Nationwide Network</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">IBA Approved</span>
              <span class="credential-title">Official Bills & Bilty</span>
              <span class="credential-sub">Bank & PSU 100% Claim Acceptance</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">Zero Risk</span>
              <span class="credential-title">No Transshipment</span>
              <span class="credential-sub">Sealed Direct Container Delivery</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1 .4-1 1v11c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">GPS Fleet</span>
              <span class="credential-title">Live Tracking 24/7</span>
              <span class="credential-sub">Dedicated Highway Dispatch</span>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- 4. Section 1: Overview of Domestic Moving in Ranchi & Jharkhand -->
    <section class="about-section" style="padding: 80px 0;">
      <div class="container">
        <div class="about-grid">
          
          <div class="about-images-wrapper">
            <div class="about-image-main">
              <img src="<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg" alt="Domestic Intercity Container Truck Loading in Jharkhand - Shree Ashirwad Packers" title="Domestic Moving Services in Ranchi - All India Container Relocation" width="560" height="380" loading="lazy">
              <div class="about-badge-floating">
                <span class="badge-num">28 States</span>
                <span class="badge-txt">Covered Direct</span>
              </div>
            </div>
            <div class="about-image-sub">
              <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe Transit Closed Container Truck in Ranchi - Shree Ashirwad Packers" title="Closed Container Shifting Fleet in Ranchi" width="280" height="190" loading="lazy">
            </div>
          </div>

          <div class="about-content">
            <div class="section-tag">National Logistics Excellence</div>
            <h2 class="section-title">
              Specialized <span class="gradient-text">Domestic Shifting Services in Ranchi</span>
            </h2>
            
            <p class="about-lead">
              Relocating your household across state borders—whether shifting from Ranchi to Bengaluru for a corporate assignment, moving to Delhi NCR for a central government posting, or transferring to Mumbai, Kolkata, or Pune—is fundamentally different from moving a few kilometers across town. At Shree Ashirwad Packers and Movers, we deliver trusted <strong>domestic shifting services</strong> and specialized <strong>domestic household shifting packers and movers</strong> designed for safe, zero-damage nationwide transit.
            </p>

            <p class="about-text">
              Long-distance domestic moves span hundreds to thousands of kilometers across national highways such as NH-19 (Grand Trunk Road), NH-33, and NH-20, exposing belongings to road vibrations, sharp turns, and extreme weather. Conventional local movers often use open-body tarpaulin trucks or unload furniture at intermediate highway hubs to switch vehicles. This dangerous practice—transshipment—is the primary cause of broken crockery, scratched solid wood furniture, and lost boxes during interstate transit.
            </p>

            <p class="about-text">
              As the premier <strong>packers and movers in ranchi jharkhand</strong>, we eliminate transit hazards through our uncompromising Zero-Transshipment Guarantee. Your household goods and appliances are packed with 5-layer shockproof materials, loaded into a dedicated closed steel container, locked with a unique tamper-proof numbered seal at your Ranchi doorstep, and opened only upon arrival at your new residence in your destination state.
            </p>

            <div class="about-cta-row">
              <a href="tel:+918409531615" class="btn-primary-custom" title="Call Domestic Shifting Specialist at 8409531615">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
                Call Domestic Desk: 8409531615
              </a>
              <a href="<?php echo SITE_BASE_URL; ?>/contact" class="btn-outline-custom" title="Contact Shree Ashirwad Packers Ranchi Office">Plan Interstate Move &rarr;</a>
            </div>

          </div>

        </div>
      </div>
    </section>

    <!-- 5. Section 2: Dedicated Fleet & Container Configurations -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Purpose-Built Fleet</div>
          <h2 class="section-title">
            Our Closed Container Fleet for <span class="gradient-text">Domestic Shifting</span>
          </h2>
          <p class="section-subtitle">
            We maintain our own dedicated fleet of modern, GPS-monitored closed container vehicles designed specifically for <strong>movers and packers for domestic shifting of household</strong>. Every vehicle undergoes rigorous safety inspections before hitting national highways.
          </p>
        </div>

        <div class="b2b-sectors-grid">
          
          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
            </div>
            <h3 class="b2b-sector-title">14-Foot Closed Container</h3>
            <p class="b2b-sector-desc">
              Custom-built for 1 BHK apartment moves, studio apartments, or bachelor relocations. Features ~550 cubic feet of volume with an insulated steel body, shock-absorbing flooring, and internal wall anchor rings.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>
            </div>
            <h3 class="b2b-sector-title">17-Foot Closed Container</h3>
            <p class="b2b-sector-desc">
              The industry benchmark for standard 2 BHK family relocations. Generates ~800 cubic feet of capacity, holding double beds, dining tables, refrigerators, washing machines, and 30 to 45 packed cartons without stacking stress.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1 .4-1 1v11c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/></svg>
            </div>
            <h3 class="b2b-sector-title">19-Foot Heavy Container</h3>
            <p class="b2b-sector-desc">
              Designed for spacious 2 BHK or full 3 BHK residences with extensive wooden furniture and appliances. Outfitted with high-traction flooring and vertical cargo lashing tracks for multi-level tie-downs.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            <h3 class="b2b-sector-title">24ft & 32ft Multi-Axle Haulers</h3>
            <p class="b2b-sector-desc">
              Our flagship heavy-duty haulers for 4+ BHK duplex homes or luxury villas where a family wants their complete home goods and personal car or motorcycle transported inside the exact same closed container vehicle.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            </div>
            <h3 class="b2b-sector-title">24/7 Satellite GPS Telematics</h3>
            <p class="b2b-sector-desc">
              Every vehicle in our long-distance fleet is fitted with certified GPS transponders and geofencing monitors. Our central control room in Ranchi tracks speed, rest halts, and toll crossings around the clock.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <h3 class="b2b-sector-title">National Highway Corridors</h3>
            <p class="b2b-sector-desc">
              Operating daily express dispatches via NH-19 (Grand Trunk Corridor), NH-33, NH-20, and Samruddhi Mahamarg, connecting Ranchi directly with Kolkata, Delhi NCR, Mumbai, Bengaluru, and Hyderabad.
            </p>
          </div>

        </div>

      </div>
    </section>

    <!-- 6. Section 3: Dedicated FTL vs Economical Shared LTL Shifting -->
    <section class="section" style="padding: 80px 0; background: #f8fafc;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Flexible Relocation Models</div>
          <h2 class="section-title">
            Flexible Domestic Options for <span class="gradient-text">Domestic Shifting Services India</span>
          </h2>
          <p class="section-subtitle">
            Whether you demand an exclusive container with express direct delivery or seek an economical shared-transit solution to lower your <strong>intercity packers and movers cost</strong>, explore our tailored logistics models.
          </p>
        </div>

        <div class="room-packing-grid">
          
          <div class="room-pack-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Dedicated Full Truck Load FTL Domestic Moving - Shree Ashirwad Packers" title="Dedicated Full Truck Load Container Shifting" class="room-pack-img" width="400" height="260" loading="lazy">
            <div class="room-pack-body">
              <h3 class="room-pack-title">Dedicated Full Truck Load (FTL)</h3>
              <p class="room-pack-text">
                An entire closed container truck is allocated exclusively to your consignment. Sealed with a numbered bolt lock at your Ranchi home and opened only in your presence at destination with zero intermediate reloading.
              </p>
              <div class="room-pack-tags">
                <span class="room-pack-tag">Exclusive Container</span>
                <span class="room-pack-tag">Fastest Transit</span>
                <span class="room-pack-tag">Zero Mix-Up</span>
              </div>
            </div>
          </div>

          <div class="room-pack-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Economical Shared Part Load LTL Domestic Moving - Shree Ashirwad Packers" title="Shared Part-Load Consolidated Shifting" class="room-pack-img" width="400" height="260" loading="lazy">
            <div class="room-pack-body">
              <h3 class="room-pack-title">Economical Shared Part-Load (LTL)</h3>
              <p class="room-pack-text">
                For bachelors, students, or partial moves of 10-25 cartons and few furniture items. Consignments are segregated using heavy plywood dividers and color-coded barcodes, saving up to 40% in shipping costs.
              </p>
              <div class="room-pack-tags">
                <span class="room-pack-tag">Save Up to 40%</span>
                <span class="room-pack-tag">Barcode Tagging</span>
                <span class="room-pack-tag">Plywood Dividers</span>
              </div>
            </div>
          </div>

          <div class="room-pack-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Combined Household Goods and Vehicle Transport in Ranchi - Shree Ashirwad Packers" title="Combined Household and Car Carrier Transport" class="room-pack-img" width="400" height="260" loading="lazy">
            <div class="room-pack-body">
              <h3 class="room-pack-title">Household & Car Combo Transport</h3>
              <p class="room-pack-text">
                Deploying specialized 24ft or 32ft MX closed container trucks with integrated wheel chocks and safety lashings, transporting your complete 2-3 BHK household plus your car or motorcycle under one single Bilty.
              </p>
              <div class="room-pack-tags">
                <span class="room-pack-tag">Car & Bike Combo</span>
                <span class="room-pack-tag">Wheel Chocks</span>
                <span class="room-pack-tag">Single Consignment</span>
              </div>
            </div>
          </div>

          <div class="room-pack-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Destination Unpacking and Furniture Setup Service - Shree Ashirwad Packers" title="Destination Unpacking and Reassembly Service" class="room-pack-img" width="400" height="260" loading="lazy">
            <div class="room-pack-body">
              <h3 class="room-pack-title">Destination Unpacking & Setup</h3>
              <p class="room-pack-text">
                Our destination team unloads goods using hydraulic ramps, carries boxes to designated rooms, unpackages furniture, reassembles double beds and dining tables, and removes all discarded packing debris.
              </p>
              <div class="room-pack-tags">
                <span class="room-pack-tag">Full Reassembly</span>
                <span class="room-pack-tag">Room Placement</span>
                <span class="room-pack-tag">Debris Removal</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- 7. Section 4: Intercity Route Network & Transit Timelines from Ranchi -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Nationwide Route Network</div>
          <h2 class="section-title">
            Intercity Transit Timelines & <span class="gradient-text">Packers and Movers Outstation Charge</span>
          </h2>
          <p class="section-subtitle">
            Operating from our central transportation hub in Ranchi with sub-depots in Bokaro, Dhanbad, and Jamshedpur, we maintain scheduled highway container dispatches across all major Indian economic corridors.
          </p>
        </div>

        <div class="checklist-grid">
          
          <div class="checklist-card">
            <span class="checklist-step">Corridor 1: Eastern Trunk</span>
            <h3 class="checklist-title">Kolkata, Patna & Bhubaneswar</h3>
            <ul class="checklist-items">
              <li>Distance: ~330 to 480 km via NH-19, NH-20, and NH-33.</li>
              <li>Dedicated FTL Transit: 18 to 36 hours door-to-door.</li>
              <li>Shared LTL Transit: 2 to 3 days with scheduled departures.</li>
              <li>Daily dispatches connecting Jharkhand to Bengal, Bihar & Odisha.</li>
            </ul>
          </div>

          <div class="checklist-card">
            <span class="checklist-step">Corridor 2: Northern Capital</span>
            <h3 class="checklist-title">Delhi NCR, Lucknow & Kanpur</h3>
            <ul class="checklist-items">
              <li>Distance: ~720 to 1,280 km via NH-19 Grand Trunk Expressway.</li>
              <li>Dedicated FTL Transit: 2 to 4 days door-to-door.</li>
              <li>Shared LTL Transit: 4 to 6 days via Varanasi / Prayagraj.</li>
              <li>Serving Noida, Gurugram, Ghaziabad, Faridabad & Greater Delhi.</li>
            </ul>
          </div>

          <div class="checklist-card">
            <span class="checklist-step">Corridor 3: Western Industrial</span>
            <h3 class="checklist-title">Mumbai, Pune & Ahmedabad</h3>
            <ul class="checklist-items">
              <li>Distance: ~1,590 to 1,680 km via NH-53 & Samruddhi Mahamarg.</li>
              <li>Dedicated FTL Transit: 4 to 5 days door-to-door.</li>
              <li>Shared LTL Transit: 6 to 7 days via Raipur and Nagpur.</li>
              <li>Direct express service to Navi Mumbai, Thane & Pune PCMC.</li>
            </ul>
          </div>

          <div class="checklist-card">
            <span class="checklist-step">Corridor 4: Southern Tech Hubs</span>
            <h3 class="checklist-title">Bengaluru, Hyderabad & Chennai</h3>
            <ul class="checklist-items">
              <li>Distance: ~1,250 to 1,850 km via NH-44 & NH-16 Eastern Coastal.</li>
              <li>Dedicated FTL Transit: 3 to 6 days door-to-door.</li>
              <li>Shared LTL Transit: 5 to 8 days with GPS tracking.</li>
              <li>Direct transit to Whitefield, Electronic City, Hitec City & OMR.</li>
            </ul>
          </div>

        </div>

      </div>
    </section>

    <!-- 8. Section 5: Transparent Intercity Cost Estimation Matrix -->
    <section class="section" style="padding: 80px 0; background: #f8fafc;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Upfront Pricing Policy</div>
          <h2 class="section-title">
            Intercity Moving Cost Matrix & <span class="gradient-text">Packers and Movers Charges Intercity</span>
          </h2>
          <p class="section-subtitle">
            Review our official <strong>packers and movers in ranchi price list</strong> for long-distance relocations. Compare transparent <strong>packers and movers charges in ranchi</strong> with zero hidden fuel surcharges, surprise toll add-ons, or unannounced delivery fees.
          </p>
        </div>

        <div class="comparison-table-wrapper" style="margin-top: 30px;">
          <table class="comp-table">
            <thead>
              <tr>
                <th style="width: 25%;">Distance Bracket & Typical Cities</th>
                <th style="width: 18%;">1 BHK / Bachelor</th>
                <th style="width: 19%;">2 BHK Family Home</th>
                <th style="width: 19%;">3 BHK Spacious House</th>
                <th style="width: 19%;">4 BHK / Villa Move</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>0 - 400 KM</strong><br><span style="font-size: 0.8rem; color: #64748b;">Kolkata, Patna, Gaya, Durgapur</span></td>
                <td>₹9,500 – ₹15,500</td>
                <td><strong style="color: var(--primary);">₹15,000 – ₹24,000</strong></td>
                <td><strong style="color: var(--accent);">₹22,000 – ₹34,000</strong></td>
                <td>₹32,000 – ₹48,000</td>
              </tr>
              <tr>
                <td><strong>401 - 800 KM</strong><br><span style="font-size: 0.8rem; color: #64748b;">Lucknow, Kanpur, Bhubaneswar, Varanasi</span></td>
                <td>₹14,000 – ₹21,000</td>
                <td><strong style="color: var(--primary);">₹22,000 – ₹32,000</strong></td>
                <td><strong style="color: var(--accent);">₹30,000 – ₹44,000</strong></td>
                <td>₹42,000 – ₹62,000</td>
              </tr>
              <tr>
                <td><strong>801 - 1,400 KM</strong><br><span style="font-size: 0.8rem; color: #64748b;">Delhi NCR, Hyderabad, Bhopal, Nagpur</span></td>
                <td>₹18,500 – ₹28,000</td>
                <td><strong style="color: var(--primary);">₹28,000 – ₹42,000</strong></td>
                <td><strong style="color: var(--accent);">₹38,000 – ₹56,000</strong></td>
                <td>₹54,000 – ₹78,000</td>
              </tr>
              <tr>
                <td><strong>1,401 - 2,200+ KM</strong><br><span style="font-size: 0.8rem; color: #64748b;">Bengaluru, Mumbai, Pune, Chennai, Ahmedabad</span></td>
                <td>₹24,000 – ₹36,000</td>
                <td><strong style="color: var(--primary);">₹36,000 – ₹52,000</strong></td>
                <td><strong style="color: var(--accent);">₹48,000 – ₹68,000</strong></td>
                <td>₹68,000 – ₹98,000</td>
              </tr>
            </tbody>
          </table>
        </div>

        <p style="font-size: 0.85rem; color: #64748b; margin-top: 14px; text-align: center;">
          *Note: Standard domestic shifting packages cover 5-layer export grade packing materials, expert disassembling/reassembling, heavy goods loading crew, closed container transportation, all state RTO permits, digital e-Way bills, and doorstep unloading. Call our domestic desk at <strong>8409531615</strong> for an exact written quote.
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
              IBA Approved Moving Bills for Bank, Defence & Central Govt Transfers
            </h3>
            <p style="color: #cbd5e1; line-height: 1.65; margin-bottom: 16px;">
              Are you transferring as an employee of a nationalized bank (SBI, PNB, Bank of Baroda, Canara Bank), central government ministry, Indian Railways, Defence establishment (Army, Navy, Air Force), or public sector enterprise (SAIL, Coal India, CMPDI, NTPC, ONGC)? As verified <strong>iba approved packers and movers in ranchi</strong> and an <strong>iso certified packers and movers in ranchi</strong> enterprise, Shree Ashirwad Packers provides 100% audit-compliant documentation under GST SAC Code 996511 and SAC Code 996791.
            </p>
            <div class="compliance-badges-row">
              <span class="compliance-badge-pill">&check; Official Stamped Consignment Note (LR Bilty)</span>
              <span class="compliance-badge-pill">&check; 100% GST Tax Invoice (SAC 996511 / 996791)</span>
              <span class="compliance-badge-pill">&check; Serialized Itemized Packing Manifest</span>
              <span class="compliance-badge-pill">&check; Certified Computer Weighbridge Slips</span>
              <span class="compliance-badge-pill">&check; Comprehensive Transit Insurance Certificate</span>
            </div>
          </div>
          <div class="text-center" style="margin-top: 20px;">
            <a href="tel:+918409531615" class="btn-primary-custom" title="Inquire About IBA Approved Domestic Moving Bills: Call 8409531615">
              Verify IBA Documentation: 8409531615
            </a>
          </div>
        </div>

        <!-- Infrastructure & Fleet Visual Showcase -->
        <div class="infra-images-grid" style="margin-top: 36px;">
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/shree-ashirwad-verified-moving-truck-jharkhand.jpg" alt="Shree Ashirwad Verified Domestic Moving Truck in Jharkhand" title="Verified Interstate Closed Container Fleet" width="400" height="260" loading="lazy">
          </div>
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Fleet Door to Door Delivery Truck - Shree Ashirwad Packers" title="Dedicated Closed Container Delivery Truck" width="400" height="260" loading="lazy">
          </div>
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg" alt="Heavy Wooden Furniture Protective Wrapping in Bokaro - Shree Ashirwad Packers" title="5-Layer Highway Grade Furniture Packing" width="400" height="260" loading="lazy">
          </div>
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Commercial Goods Storage and Handling Facility in Ranchi - Shree Ashirwad Packers" title="Secure Goods Warehousing and Transit Hub" width="400" height="260" loading="lazy">
          </div>
        </div>

      </div>
    </section>

    <!-- 10. Section 7: Benchmark Comparison: Shree Ashirwad vs Unregistered Domestic Transporters -->
    <section class="comparison-section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">National Benchmark</div>
          <h2 class="section-title">
            Why Choose Shree Ashirwad Instead of <span class="gradient-text">Unregistered Transporters</span>
          </h2>
          <p class="section-subtitle">
            Entrusting your interstate move to unregistered truck brokers often leads to transshipment damage, lost cartons, or highway extortion. See why clients trust the <strong>best packers and movers in ranchi</strong> and most <strong>trusted packers and movers in ranchi</strong> for all-India domestic shifting.
          </p>
        </div>

        <div class="comparison-table-wrapper">
          <table class="comp-table">
            <thead>
              <tr>
                <th style="width: 34%;">Domestic Relocation Benchmark</th>
                <th class="col-brand" style="width: 33%;">Shree Ashirwad Domestic Desk</th>
                <th class="col-brokers" style="width: 33%;">Unregistered Highway Transporters</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Transshipment Policy</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; 100% Zero-Transshipment Direct Delivery</span></td>
                <td><span class="badge-no">&#x2717; Unloaded at Multiple Hubs to Switch Trucks</span></td>
              </tr>
              <tr>
                <td><strong>Vehicle Type Deployed</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Dedicated All-Weather Closed Steel Containers</span></td>
                <td><span class="badge-no">&#x2717; Open Tarpaulin Trucks Prone to Rain & Dust</span></td>
              </tr>
              <tr>
                <td><strong>Real-Time GPS Tracking</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; 24/7 Satellite Telematics & Waypoint Alerts</span></td>
                <td><span class="badge-no">&#x2717; Driver Phones Switched Off on Highways</span></td>
              </tr>
              <tr>
                <td><strong>Highway Packing Standard</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; 5-Layer Shockproof Materials & Corner Armor</span></td>
                <td><span class="badge-no">&#x2717; Thin Single-Layer Plastic with Zero Cushioning</span></td>
              </tr>
              <tr>
                <td><strong>Combined Vehicle Moving</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Integrated Car & Bike Chocks Inside Container</span></td>
                <td><span class="badge-no">&#x2717; Driven Recklessly on Highways by Unknown Drivers</span></td>
              </tr>
              <tr>
                <td><strong>Transit Insurance Policy</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; All-Risk Transit Policy via National Insurers</span></td>
                <td><span class="badge-no">&#x2717; No Insurance, Complete Financial Loss on Accidents</span></td>
              </tr>
              <tr>
                <td><strong>Pricing Transparency</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Written Upfront Estimate, Zero Midday Demands</span></td>
                <td><span class="badge-no">&#x2717; Hidden Toll, Octroi & Delivery Extortion Fees</span></td>
              </tr>
              <tr>
                <td><strong>Official Claim Bills</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; IBA Approved GST Tax Invoices (SAC 996511)</span></td>
                <td><span class="badge-no">&#x2717; Handwritten Slips Rejected by Govt & Bank HR</span></td>
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
            Frequently Asked Questions on <span class="gradient-text">Domestic Moving Services</span>
          </h2>
          <p class="section-subtitle">
            Clear, transparent answers to help you plan an effortless, cost-effective intercity move from Ranchi to anywhere in India.
          </p>
        </div>

        <div class="about-faq-grid">
          
          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>How long does intercity domestic shifting take from Ranchi to metro cities?</span>
            </div>
            <p class="about-faq-a">
              Average road transit times from Ranchi in our dedicated closed container fleet: Kolkata or Patna: 24 to 36 hours; Delhi NCR, Lucknow, or Kanpur: 3 to 4 days; Mumbai, Pune, or Ahmedabad: 4 to 5 days; Bengaluru, Hyderabad, or Chennai: 4 to 6 days. Shared part-load consignments may take an additional 1 to 2 days for hub coordination.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>What is the difference between Full Truck Load (FTL) and Part Load (LTL)?</span>
            </div>
            <p class="about-faq-a">
              Full Truck Load (FTL) assigns a dedicated closed container truck exclusively to your household, sealed at your Ranchi home with a numbered tamper-proof seal and opened only at destination with zero transshipment. Part Load (LTL) consolidates smaller consignments inside a shared container with partitioned dividers and color-coded labels, saving up to 40% in transportation costs.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>Are your domestic moving bills and GST invoices IBA approved for Bank and Govt claims?</span>
            </div>
            <p class="about-faq-a">
              Yes, 100%. Shree Ashirwad Packers provides fully compliant IBA-approved moving bills, Consignment Notes (Lorry Receipt / LR Bilty), verified itemized inventory manifests, and 100% GST tax invoices (SAC 996511 / 996791). Our documentation is officially accepted by all nationalized banks, Defence, Railways, PSUs, and Central Govt audit divisions.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>How are domestic moving charges calculated from Ranchi to other Indian states?</span>
            </div>
            <p class="about-faq-a">
              Intercity domestic moving charges are calculated based on three primary factors: total distance in kilometers, volume and weight of household goods (dictating container size: 14ft, 17ft, 19ft, or 24ft), and packing service grade. Charges include packing materials, labor, highway toll taxes, national permit fees, e-Way bills, loading, transit, and destination unloading.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>Do you transfer goods to local third-party trucks at intermediate state borders?</span>
            </div>
            <p class="about-faq-a">
              No, never. We maintain a strict Zero Transshipment Guarantee. Your household goods remain inside the exact same closed container truck loaded at your Ranchi doorstep all the way until it pulls up outside your destination residence in another state, eliminating handling damages, lost cartons, and warehouse drops.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>Can I track my intercity moving truck while it travels across national highways?</span>
            </div>
            <p class="about-faq-a">
              Yes. Every vehicle in our long-distance fleet is outfitted with GPS satellite tracking hardware. You receive continuous SMS milestone updates at key border crossings and toll plazas, and our 24/7 highway coordination desk provides live GPS location coordinates upon request.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>What type of transit insurance is provided for long-distance domestic relocation?</span>
            </div>
            <p class="about-faq-a">
              We provide Comprehensive All-Risk Transit Insurance underwritten by leading national insurance partners. It protects your belongings against highway collisions, vehicle overturn, fire, explosion, flash floods, and severe transit accidents based on your declared item values.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>Can you transport my car or two-wheeler bike in the same domestic moving truck?</span>
            </div>
            <p class="about-faq-a">
              Yes. For complete family relocations, we deploy specialized 24ft or 32ft MX closed container trucks featuring integrated vehicle wheel-chock fixtures and safety tie-down lashings, enabling safe combined transit of your entire 2-3 BHK household plus your car or motorcycle under one single consignment note.
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
            <span class="cta-badge">Book Certified Interstate Movers</span>
            <h2 class="cta-title">
              Ready for a Smooth, Worry-Free <span class="gradient-text">Domestic Move from Ranchi?</span>
            </h2>
            <p class="cta-subtitle">
              Speak directly with our senior intercity relocation specialists. Get an itemized quote, free in-home or video survey, and guaranteed delivery schedule today.
            </p>
            <div class="cta-buttons-row">
              <a href="tel:+918409531615" class="btn-cta-phone" title="Call Shree Ashirwad Packers Domestic Helpline: 8409531615">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
                <span>Call Hotline: <strong>8409531615</strong></span>
              </a>
              <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn-cta-whatsapp" title="Chat on WhatsApp for Domestic Relocation Quote">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2z"/></svg>
                <span>WhatsApp Survey &rarr;</span>
              </a>
            </div>
            <div class="cta-trust-items">
              <span>&check; 28 States Connected</span>
              <span>&check; Zero Transshipment Guarantee</span>
              <span>&check; 100% GST Tax Invoices (SAC 996511)</span>
              <span>&check; IBA Approved Domestic Documentation</span>
            </div>
          </div>
        </div>

        <!-- Localized Ranchi Localities & Jharkhand District Links -->
        <div class="neighborhoods-card" style="margin-top: 40px;">
          <h3 class="neighborhoods-title">
            <svg viewBox="0 0 24 24" width="20" height="20"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
            Domestic Relocation Pickups Across Ranchi & Jharkhand
          </h3>
          <p style="font-size: 0.9rem; color: #64748b; margin-bottom: 16px;">
            We offer direct doorstep packing and dedicated closed container dispatch from all key residential sectors in Ranchi:
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
