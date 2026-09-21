<?php
/**
 * Loading and Unloading Services Page - Shree Ashirwad Packers and Movers
 * Pure Core PHP Implementation
 * 
 * Deep Ergonomic Material Handling, Hydraulic Dollies, Truck Axle Weight Balancing, Multi-Story Staircase Rigging
 * Preserving exact canonical URL: https://www.shreeashirwadpackers.com/loading-and-unloading-services/
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
  <?php render_seo_tags('loading-and-unloading-services'); ?>

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
          <span aria-current="page">Loading and Unloading</span>
        </nav>
        <h1 class="page-hero-title">
          Loading and Unloading Services in <span class="gradient-text">Ranchi - Scientific Heavy Handling</span>
        </h1>
        <p class="page-hero-subtitle">
          Eliminate dropped items, cracked doorframes, and damaged floors with Jharkhand's certified heavy goods handlers. We deploy hydraulic pallet trucks, stair-climbing hand dollies, ergonomic shoulder-dolly harnesses, and balanced container stacking for zero-damage transit.
        </p>
        <div class="about-cta-row" style="justify-content: center; margin-top: 24px;">
          <a href="tel:+918409531615" class="btn-primary-custom" title="Call Heavy Handling Specialist: 8409531615">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
            Instant Loading Quote: 8409531615
          </a>
          <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn-outline-custom" title="Get Loading and Unloading Estimate on WhatsApp">
            WhatsApp Estimate &rarr;
          </a>
        </div>
      </div>
    </section>

    <!-- 3. Key Credentials & Heavy Lifting Safety Bar -->
    <section class="credentials-bar-section">
      <div class="container">
        <div class="credentials-grid">
          
          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">100% In-House</span>
              <span class="credential-title">Certified Rigging Crew</span>
              <span class="credential-sub">Zero Casual Street Laborers</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">99.9%</span>
              <span class="credential-title">Zero Drop Record</span>
              <span class="credential-sub">Scientific Ergonomic Mechanics</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">25,000+</span>
              <span class="credential-title">Containers Stacked</span>
              <span class="credential-sub">Precision Axle Weight Balance</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">Multi-Story</span>
              <span class="credential-title">High-Rise Expertise</span>
              <span class="credential-sub">Staircase & Elevator Handling</span>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- 4. Section 1: Overview of Loading and Unloading in Ranchi & Jharkhand -->
    <section class="about-section" style="padding: 80px 0;">
      <div class="container">
        <div class="about-grid">
          
          <div class="about-images-wrapper">
            <div class="about-image-main">
              <img src="<?php echo SITE_BASE_URL; ?>/images/professional-loading-crew-ranchi.jpg" alt="Professional Loading and Unloading Crew in Ranchi - Shree Ashirwad Packers" title="Loading and Unloading Services in Ranchi - Certified Heavy Handlers" width="560" height="380" loading="lazy">
              <div class="about-badge-floating">
                <span class="badge-num">100%</span>
                <span class="badge-txt">Certified Riggers</span>
              </div>
            </div>
            <div class="about-image-sub">
              <img src="<?php echo SITE_BASE_URL; ?>/images/waterproof-container-loading-jharkhand.jpg" alt="Waterproof Container Loading and Axle Weight Balancing - Shree Ashirwad Packers" title="Container Heavy Goods Loading in Jharkhand" width="280" height="190" loading="lazy">
            </div>
          </div>

          <div class="about-content">
            <div class="section-tag">Ergonomic Material Handling</div>
            <h2 class="section-title">
              Specialized <span class="gradient-text">Loading and Unloading Services in Ranchi</span>
            </h2>
            
            <p class="about-lead">
              Transport logistics research reveals that over 65% of all relocation damages occur during the manual phases of loading and offloading. At Shree Ashirwad Packers and Movers, we deliver precision-engineered <strong>loading and unloading services in ranchi</strong> designed to protect your valuable household goods and commercial assets from drops, structural stress, and scratches.
            </p>

            <p class="about-text">
              When unorganized movers attempt to carry heavy goods using raw force alone, they risk dropped furniture, gouged hardwood flooring, fractured staircase nosings, and personal injuries. Our moving crews operate under strict mechanical handling guidelines. By combining biomechanical leverage techniques with modern lifting equipment, we ensure that every wardrobe, double-door refrigerator, sofa set, and fragile carton is moved smoothly and safely.
            </p>

            <p class="about-text">
              Whether you are moving across town or preparing for an interstate relocation, choosing experienced <strong>movers and packers with loading and unloading</strong> ensures complete peace of mind. As the premier <strong>packers and movers in ranchi jharkhand</strong>, we deploy full-time, background-verified specialists who treat your belongings with exceptional care, guaranteeing flawless execution from your doorstep into the transport vehicle.
            </p>

            <div class="about-cta-row">
              <a href="tel:+918409531615" class="btn-primary-custom" title="Call Loading Specialist at 8409531615">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
                Call Loading Desk: 8409531615
              </a>
              <a href="<?php echo SITE_BASE_URL; ?>/contact" class="btn-outline-custom" title="Contact Shree Ashirwad Packers Ranchi Office">Request Loading Crew &rarr;</a>
            </div>

          </div>

        </div>
      </div>
    </section>

    <!-- 5. Section 2: Industrial Handling Equipment Portfolio -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Modern Handling Technology</div>
          <h2 class="section-title">
            Specialized Heavy-Lifting Gear Deployed for <span class="gradient-text">Furniture Loading Service</span>
          </h2>
          <p class="section-subtitle">
            We do not rely on sheer muscle power alone. Our Ranchi operations are equipped with specialized material handling tools engineered to move multi-hundred-kilogram household and commercial assets smoothly, quietly, and without a single scratch.
          </p>
        </div>

        <div class="b2b-sectors-grid">
          
          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1 .4-1 1v11c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/></svg>
            </div>
            <h3 class="b2b-sector-title">Hydraulic Pallet Trucks & Jacks</h3>
            <p class="b2b-sector-desc">
              Engineered for heavy household containers, large wooden crates, and industrial machinery, our 2.5-ton hydraulic pallet jacks lift dense cargo effortlessly with fingertip pump controls, minimizing manual ground handling.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            </div>
            <h3 class="b2b-sector-title">Carpeted 4-Wheel Furniture Dollies</h3>
            <p class="b2b-sector-desc">
              Custom-built heavy-duty hardwood dollies lined with non-marking industrial carpeting and polyurethane swivel casters. Ideal for gliding 3-seater sofas, dining tables, sideboards, and refrigerators across marble and hardwood floors.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
            </div>
            <h3 class="b2b-sector-title">Ergonomic Shoulder-Dolly Straps</h3>
            <p class="b2b-sector-desc">
              High-tensile nylon rigging harnesses that transfer the weight of bulky assets directly to the mover's major leg muscle groups, lowering the center of gravity and stabilizing heavy objects on landings and staircases.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M3 3h18v18H3z"/><path d="M3 9h18M9 21V9"/></svg>
            </div>
            <h3 class="b2b-sector-title">Stair-Climbing 3-Wheel Hand Trucks</h3>
            <p class="b2b-sector-desc">
              Equipped with a rotating triple-wheel assembly that climbs up step edges seamlessly without bumping or impacting stair nosings. Crucial for multi-story apartment moves in Ranchi lacking service elevator clearance.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </div>
            <h3 class="b2b-sector-title">Anti-Skid Aluminum Loading Ramps</h3>
            <p class="b2b-sector-desc">
              Heavy-duty ribbed aluminum bridge ramps connecting apartment porches and curbs directly to our truck beds. Provides an unbroken, non-skid incline for rolling dollies and loaded hand trucks without vertical tailgate lifting.
            </p>
          </div>

          <div class="b2b-sector-card">
            <div class="b2b-sector-icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
            </div>
            <h3 class="b2b-sector-title">Industrial E-Track Ratchet Cargo Belts</h3>
            <p class="b2b-sector-desc">
              High-tenacity polyester cargo straps with steel J-hooks locking directly into our container truck's internal rails. Every row of furniture and stacked cartons is locked down under tension, preventing forward or sideways shifting during transit.
            </p>
          </div>

        </div>

      </div>
    </section>

    <!-- 6. Section 3: Scientific Container Truck Stacking & Axle Balancing Protocol -->
    <section class="section" style="padding: 80px 0; background: #f8fafc;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Truck Stacking Science</div>
          <h2 class="section-title">
            4-Tier Stacking Protocol for <span class="gradient-text">Transport Loading Services</span>
          </h2>
          <p class="section-subtitle">
            Loading a long-distance container truck is an architectural science. Improper weight distribution creates dangerous vehicle sway on highways, while poor box stacking crushes lower cartons. We follow a strict 4-tier stacking hierarchy when <strong>loading and unloading furniture</strong> and fragile household cartons.
          </p>
        </div>

        <div class="room-packing-grid">
          
          <div class="room-pack-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/waterproof-container-loading-jharkhand.jpg" alt="Tier 1 Heavy Base Anchoring in Container Truck Jharkhand - Shree Ashirwad Packers" title="Heavy Base Axle Anchoring in Container Truck" class="room-pack-img" width="400" height="260" loading="lazy">
            <div class="room-pack-body">
              <h3 class="room-pack-title">Tier 1: Heavy Base Anchoring (Chassis Axles)</h3>
              <p class="room-pack-text">
                The heaviest household assets—including steel almirahs, double-door refrigerators, front-load washing machines, solid wood dressers, and crated machinery—are placed against the front bulkhead directly over the truck's rear drive axle.
              </p>
              <div class="room-pack-tags">
                <span class="room-pack-tag">Axle Stability</span>
                <span class="room-pack-tag">Padded Moving Blankets</span>
                <span class="room-pack-tag">Ratchet Load Straps</span>
              </div>
            </div>
          </div>

          <div class="room-pack-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg" alt="Tier 2 Interlocking Heavy Corrugated Tier in Truck - Shree Ashirwad Packers" title="Interlocking Heavy Corrugated Box Tier" class="room-pack-img" width="400" height="260" loading="lazy">
            <div class="room-pack-body">
              <h3 class="room-pack-title">Tier 2: Interlocking Heavy Corrugated Tier</h3>
              <p class="room-pack-text">
                Heavy-duty 5-ply cartons filled with dense items (such as books, kitchen cookware, tools, and pantry items) are laid across the floor like brickwork. This creates a flat, rigid secondary foundation that absorbs road shock without sagging.
              </p>
              <div class="room-pack-tags">
                <span class="room-pack-tag">Brick Pattern</span>
                <span class="room-pack-tag">5-Ply Cartons</span>
                <span class="room-pack-tag">Zero Slide Gaps</span>
              </div>
            </div>
          </div>

          <div class="room-pack-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Tier 3 Mid Weight Assets and Wall Rigging - Shree Ashirwad Packers" title="Mid-Weight Furniture Wall Rigging in Container" class="room-pack-img" width="400" height="260" loading="lazy">
            <div class="room-pack-body">
              <h3 class="room-pack-title">Tier 3: Mid-Weight Assets & Wall Rigging</h3>
              <p class="room-pack-text">
                Disassembled bed panels, dining table tops, sofa sections, study desks, and medium-sized cartons are positioned in the middle deck. Upright items like wrapped mattresses and glass tops are strapped flush against internal side walls.
              </p>
              <div class="room-pack-tags">
                <span class="room-pack-tag">Vertical Glass Rigging</span>
                <span class="room-pack-tag">EPE Foam Spacers</span>
                <span class="room-pack-tag">Load-Lock Bars</span>
              </div>
            </div>
          </div>

          <div class="room-pack-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Tier 4 Top Deck Fragile and Soft Cushioning - Shree Ashirwad Packers" title="Top Deck Fragile Goods Stacking" class="room-pack-img" width="400" height="260" loading="lazy">
            <div class="room-pack-body">
              <h3 class="room-pack-title">Tier 4: Top Deck Fragile & Soft Cushioning</h3>
              <p class="room-pack-text">
                The uppermost layer is exclusively reserved for light, delicate items: glassware and bone china boxes marked Fragile, custom-crated LED televisions, hanging wardrobe cartons, rolled carpets, and bagged soft pillows/duvets.
              </p>
              <div class="room-pack-tags">
                <span class="room-pack-tag">Zero Downward Pressure</span>
                <span class="room-pack-tag">Ceiling Buffer Pillows</span>
                <span class="room-pack-tag">Cargo Netting</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- 7. Section 4: Multi-Story Staircase Navigation & High-Rise Building Rigging -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">High-Rise Relocation Protocol</div>
          <h2 class="section-title">
            Navigating Tight Staircases with Professional <span class="gradient-text">Manpower for House Shifting</span>
          </h2>
          <p class="section-subtitle">
            Residential high-rises and standalone apartments across Ranchi often present unique physical hurdles, including small passenger lifts, narrow spiraling staircases, and restricted access hours. When you need skilled <strong>labour to move furniture</strong>, our trained <strong>house shifting helpers</strong> handle every obstacle with precision.
          </p>
        </div>

        <div class="checklist-grid">
          
          <div class="checklist-card">
            <span class="checklist-step">Phase 1: Architectural Survey</span>
            <h3 class="checklist-title">Entryway & Stairwell Audit</h3>
            <ul class="checklist-items">
              <li>Detailed physical measurement of door openings, stairwell turns, and ceiling clearance.</li>
              <li>Assessment of passenger elevator cabin dimensions and weight load limits.</li>
              <li>Identification of tight turning angles to pre-plan the transit path for large sofas and beds.</li>
              <li>Coordination with apartment society management for gate passes and lift reservations.</li>
            </ul>
          </div>

          <div class="checklist-card">
            <span class="checklist-step">Phase 2: Structural Protection</span>
            <h3 class="checklist-title">Floor & Doorway Shielding</h3>
            <ul class="checklist-items">
              <li>Heavy-duty neoprene floor runners installed along all primary walking corridors.</li>
              <li>High-density foam protectors wrapped around main wooden door jambs and corners.</li>
              <li>Quilted moving pads secured over stainless steel or wooden staircase handrails.</li>
              <li>Complete prevention of tile scuffs, wall paint scrapes, and chipped step nosings.</li>
            </ul>
          </div>

          <div class="checklist-card">
            <span class="checklist-step">Phase 3: Synchronized Handling</span>
            <h3 class="checklist-title">4-Man Coordinated Lifts</h3>
            <ul class="checklist-items">
              <li>Synchronized 4-mover teams assigned to heavy wardrobes, double-door fridges, and safes.</li>
              <li>Ergonomic shoulder harnesses distribute weight evenly across major leg muscle groups.</li>
              <li>Verbal communication protocol maintained at every landing, turn, and step transition.</li>
              <li>Steady, controlled pacing ensuring no sudden drops or momentum shifts on stairs.</li>
            </ul>
          </div>

          <div class="checklist-card">
            <span class="checklist-step">Phase 4: Exterior Rigging</span>
            <h3 class="checklist-title">Balcony Hoist Operations</h3>
            <ul class="checklist-items">
              <li>High-capacity manual pulley hoist systems deployed when stairways are impassable.</li>
              <li>Multi-point industrial rigging ropes secure oversized sofas, pianos, or dining tables.</li>
              <li>Soft padding cushions exterior railings and building facades during vertical lifting.</li>
              <li>Safe entry directly through spacious exterior balconies onto upper floors.</li>
            </ul>
          </div>

        </div>

      </div>
    </section>

    <!-- 8. Section 5: Transparent Labor & Handling Pricing Matrix -->
    <section class="section" style="padding: 80px 0; background: #f8fafc;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Fair & Honest Rates</div>
          <h2 class="section-title">
            Loading & Unloading Charges & <span class="gradient-text">Labor Rate Matrix</span>
          </h2>
          <p class="section-subtitle">
            Review our transparent <strong>packers and movers in ranchi price list</strong> for heavy handling, dedicated <strong>labour for home shifting</strong>, and professional <strong>helper for house shifting</strong>. Compare clear <strong>packers and movers charges in ranchi</strong> and get an upfront <strong>packers and movers ranchi cost estimate</strong> with zero hidden fees or midday demands.
          </p>
        </div>

        <div class="comparison-table-wrapper" style="margin-top: 30px;">
          <table class="comp-table">
            <thead>
              <tr>
                <th style="width: 25%;">Household Size / Move Scale</th>
                <th style="width: 20%;">Crew Size Allocated</th>
                <th style="width: 20%;">Loading Charges (Ground / Lift)</th>
                <th style="width: 20%;">Unloading Charges (Destination)</th>
                <th style="width: 15%;">Staircase Surcharge (No Lift)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>1 BHK Apartment</strong><br><span style="font-size: 0.8rem; color: #64748b;">Compact Move (~15-25 Cartons + Basic Furniture)</span></td>
                <td>2 – 3 Handlers</td>
                <td><strong style="color: var(--primary);">₹1,200 – ₹2,200</strong></td>
                <td><strong style="color: var(--accent);">₹1,000 – ₹1,800</strong></td>
                <td>₹200 – ₹350 / Floor</td>
              </tr>
              <tr>
                <td><strong>2 BHK Family Home</strong><br><span style="font-size: 0.8rem; color: #64748b;">Standard Flat (~30-50 Cartons + Appliances)</span></td>
                <td>3 – 4 Handlers</td>
                <td><strong style="color: var(--primary);">₹2,200 – ₹3,800</strong></td>
                <td><strong style="color: var(--accent);">₹1,800 – ₹3,200</strong></td>
                <td>₹350 – ₹500 / Floor</td>
              </tr>
              <tr>
                <td><strong>3 BHK Large Apartment</strong><br><span style="font-size: 0.8rem; color: #64748b;">Extensive Assets (~50-80 Cartons + Heavy Furniture)</span></td>
                <td>4 – 6 Handlers</td>
                <td><strong style="color: var(--primary);">₹3,800 – ₹6,000</strong></td>
                <td><strong style="color: var(--accent);">₹3,200 – ₹5,000</strong></td>
                <td>₹500 – ₹750 / Floor</td>
              </tr>
              <tr>
                <td><strong>4 BHK / Independent Villa</strong><br><span style="font-size: 0.8rem; color: #64748b;">Luxury Assets (~80-130+ Cartons + Valuables)</span></td>
                <td>6 – 8 Handlers</td>
                <td><strong style="color: var(--primary);">₹6,000 – ₹9,500</strong></td>
                <td><strong style="color: var(--accent);">₹5,000 – ₹8,000</strong></td>
                <td>₹750 – ₹1,200 / Floor</td>
              </tr>
              <tr>
                <td><strong>Specialty Heavy Rigging</strong><br><span style="font-size: 0.8rem; color: #64748b;">Heavy Iron Safe / Upright Piano / Marble Mandir</span></td>
                <td>Specialist Riggers</td>
                <td><strong style="color: var(--primary);">₹1,500 – ₹3,500 / Item</strong></td>
                <td><strong style="color: var(--accent);">₹1,200 – ₹3,000 / Item</strong></td>
                <td>Based on weight & access</td>
              </tr>
            </tbody>
          </table>
        </div>

        <p style="font-size: 0.85rem; color: #64748b; margin-top: 14px; text-align: center;">
          *Note: Loading and unloading services include handling gear, furniture dollies, shoulder harnesses, and floor runners. All invoices are GST-compliant under SAC code 996511 / 996791. Call our handling desk at <strong>8409531615</strong> for an exact written quote.
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
              IBA Approved Moving Bills for Loading, Freight & Handling Reimbursement
            </h3>
            <p style="color: #cbd5e1; line-height: 1.65; margin-bottom: 16px;">
              Are you an employee of State Bank of India (SBI), Punjab National Bank (PNB), Bank of India (BOI), Coal India, SAIL Bokaro, CMPDI, MECON, Indian Railways, or Defence transferring to or from Ranchi? As verified <strong>iba approved packers and movers in ranchi</strong> and an <strong>iso certified packers and movers in ranchi</strong> enterprise, Shree Ashirwad Packers provides 100% audit-compliant documentation under GST SAC Code 996511 and SAC Code 996791.
            </p>
            <div class="compliance-badges-row">
              <span class="compliance-badge-pill">&check; Official Stamped Lorry Receipt (Bilty)</span>
              <span class="compliance-badge-pill">&check; 100% GST Tax Invoice (SAC 996511 / 996791)</span>
              <span class="compliance-badge-pill">&check; Itemized & Serialized Goods Manifest</span>
              <span class="compliance-badge-pill">&check; Money Receipt with Formal Revenue Stamp</span>
              <span class="compliance-badge-pill">&check; Comprehensive Transit Insurance Certificate</span>
            </div>
          </div>
          <div class="text-center" style="margin-top: 20px;">
            <a href="tel:+918409531615" class="btn-primary-custom" title="Inquire About IBA Approved Moving Bills: Call 8409531615">
              Verify IBA Documentation: 8409531615
            </a>
          </div>
        </div>

        <!-- Infrastructure & Fleet Visual Showcase -->
        <div class="infra-images-grid" style="margin-top: 36px;">
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Fleet Door to Door Delivery Truck - Shree Ashirwad Packers" title="Dedicated Closed Container Delivery Truck" width="400" height="260" loading="lazy">
          </div>
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Commercial Goods Storage and Handling Facility in Ranchi - Shree Ashirwad Packers" title="Secure Goods Warehousing and Handling Center" width="400" height="260" loading="lazy">
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

    <!-- 10. Section 7: Benchmark Comparison: Shree Ashirwad vs Casual Street Labor -->
    <section class="comparison-section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Handling Benchmark</div>
          <h2 class="section-title">
            Why Choose Shree Ashirwad Instead of <span class="gradient-text">Casual Street Labor</span>
          </h2>
          <p class="section-subtitle">
            Hiring unverified roadside daily laborers to load your home might appear cheaper on paper, but a single dropped appliance or scratched floor costs ten times more than the savings. See why clients trust the <strong>best packers and movers in ranchi</strong> and most <strong>trusted packers and movers in ranchi</strong> for certified <strong>labor for moving furniture</strong>.
          </p>
        </div>

        <div class="comparison-table-wrapper">
          <table class="comp-table">
            <thead>
              <tr>
                <th style="width: 34%;">Handling Benchmark / Standard</th>
                <th class="col-brand" style="width: 33%;">Shree Ashirwad Packers & Movers</th>
                <th class="col-brokers" style="width: 33%;">Casual Roadside Laborers</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Staff Background & Verification</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; 100% Police-Verified Permanent Staff</span></td>
                <td><span class="badge-no">&#x2717; Anonymous Daily Wagers from Street Corners</span></td>
              </tr>
              <tr>
                <td><strong>Lifting Gear Deployed</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Hydraulic Pallet Jacks, Dollies & Shoulder Straps</span></td>
                <td><span class="badge-no">&#x2717; Bare Hands & Dragging Across Floor Tiles</span></td>
              </tr>
              <tr>
                <td><strong>Truck Stacking Methodology</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; 4-Tier Weight Balancing & Ratchet Tie-Downs</span></td>
                <td><span class="badge-no">&#x2717; Random Pile-Up Crushing Lower Cartons</span></td>
              </tr>
              <tr>
                <td><strong>Staircase & Wall Protection</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Neoprene Floor Runners & Door Jamb Guards</span></td>
                <td><span class="badge-no">&#x2717; Chipped Step Nosings & Gouged Wall Paint</span></td>
              </tr>
              <tr>
                <td><strong>Heavy Machinery / Safe Rigging</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Specialized Heavy Hoists & Rigging Lines</span></td>
                <td><span class="badge-no">&#x2717; Incapable of Moving Items Over 100 kg</span></td>
              </tr>
              <tr>
                <td><strong>Drop Damage Liability</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; 100% Comprehensive Transit Insurance Coverage</span></td>
                <td><span class="badge-no">&#x2717; Laborers Flee the Scene Upon Damage</span></td>
              </tr>
              <tr>
                <td><strong>Pricing Transparency</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Written Upfront Estimate, Zero Hidden Demands</span></td>
                <td><span class="badge-no">&#x2717; Aggressive Demands for Tips (Baksheesh) Midway</span></td>
              </tr>
              <tr>
                <td><strong>Official Reimbursement Bills</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; IBA Approved GST Tax Invoices (SAC 996511)</span></td>
                <td><span class="badge-no">&#x2717; No Invoices Provided, Claim Rejected</span></td>
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
            Frequently Asked Questions on <span class="gradient-text">Loading & Unloading Services</span>
          </h2>
          <p class="section-subtitle">
            Clear, transparent answers regarding our heavy handling gear, staircase procedures, labor-only hiring, and pricing in Ranchi.
          </p>
        </div>

        <div class="about-faq-grid">
          
          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>How do your movers handle heavy furniture on narrow staircases without elevators?</span>
            </div>
            <p class="about-faq-a">
              Our permanent moving crews utilize high-tensile nylon shoulder-dolly rigging straps, stair-climbing hand trucks, and non-slip handling gloves. We pad stair railings and doorframes, employing synchronized 4-man lifting maneuvers that leverage ergonomic body mechanics rather than reckless force.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>Can I hire Shree Ashirwad Packers only for loading or unloading my own rented truck?</span>
            </div>
            <p class="about-faq-a">
              Yes, absolutely. We provide labor-only loading and unloading services in Ranchi, Bokaro, and across Jharkhand. Our professional crew brings heavy-duty platform dollies, moving blankets, and tie-down ratchet straps to efficiently load or unload your self-arranged container or truck.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>What specialized equipment do you use for safe loading and unloading?</span>
            </div>
            <p class="about-faq-a">
              We deploy heavy-duty hydraulic pallet jacks, 4-wheel furniture dollies with non-marking rubber wheels, multi-angle aluminum loading ramps, staircase climbing hand trucks, industrial ratchet tie-downs, and quilted furniture pads.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>How do you balance weight inside the container truck to prevent transit damage?</span>
            </div>
            <p class="about-faq-a">
              We follow a strict 4-tier loading methodology: heaviest appliances and solid wood furniture are anchored forward over the truck axles, medium corrugated cartons interlock in the middle deck, light fragile boxes rest on top tiers, and all tiers are secured with E-track load-lock ratchet straps.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>Are your loading and unloading crews permanent trained staff or casual daily laborers?</span>
            </div>
            <p class="about-faq-a">
              100% of our loading handlers are full-time, background-verified permanent employees trained in ergonomic lifting, industrial rigging, and safe material handling. We never subcontract or hire unvetted casual laborers from the street.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>What safety precautions are taken to protect apartment floors, doorframes, and walls?</span>
            </div>
            <p class="about-faq-a">
              Before lifting begins, our team lays down neoprene floor runners to shield tiles and hardwood from scuffs, installs foam door jamb protectors on main entrances, and pads corner moldings with quilted moving blankets.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>How are loading and unloading charges calculated in Ranchi?</span>
            </div>
            <p class="about-faq-a">
              Charges depend on the household volume (1 BHK, 2 BHK, 3 BHK, or Villa), floor levels at origin and destination, availability of working elevators, walking lead distance from the truck to the door, and any oversized heavy assets like heavy iron safes or pianos.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>Are loading and unloading bills IBA approved for Bank and Central Government employee claims?</span>
            </div>
            <p class="about-faq-a">
              Yes, 100%. Our moving bills, consignment notes (LR/Bilty), and GST invoices (SAC Code 996511 / 996791) clearly itemize loading, transport, and unloading charges, fully compliant with Indian Banks' Association (IBA) reimbursement rules for Bank and Central Government staff.
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
            <span class="cta-badge">Certified Heavy Material Handlers</span>
            <h2 class="cta-title">
              Need Safe, Professional <span class="gradient-text">Loading & Unloading in Ranchi?</span>
            </h2>
            <p class="cta-subtitle">
              Protect your luxury furniture, delicate electronics, and home interiors. Contact Shree Ashirwad Packers in Ranchi for a guaranteed damage-free loading and unloading experience with certified in-house handlers.
            </p>
            <div class="cta-buttons-row">
              <a href="tel:+918409531615" class="btn-cta-phone" title="Call Shree Ashirwad Packers Loading Helpline: 8409531615">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
                <span>Call Hotline: <strong>8409531615</strong></span>
              </a>
              <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn-cta-whatsapp" title="Chat on WhatsApp for Loading and Unloading Quote">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2z"/></svg>
                <span>WhatsApp Survey &rarr;</span>
              </a>
            </div>
            <div class="cta-trust-items">
              <span>&check; 100% Police-Verified In-House Handlers</span>
              <span>&check; Zero Drop Record Guarantee</span>
              <span>&check; 100% GST Tax Invoices (SAC 996511)</span>
              <span>&check; IBA Approved Moving Documentation</span>
            </div>
          </div>
        </div>

        <!-- Localized Ranchi Localities & Jharkhand District Links -->
        <div class="neighborhoods-card" style="margin-top: 40px;">
          <h3 class="neighborhoods-title">
            <svg viewBox="0 0 24 24" width="20" height="20"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
            Professional Loading & Unloading Coverage Across Ranchi & Jharkhand
          </h3>
          <p style="font-size: 0.9rem; color: #64748b; margin-bottom: 16px;">
            Our mobile loading and rigging crews provide rapid dispatch across all Ranchi residential and commercial sectors:
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
