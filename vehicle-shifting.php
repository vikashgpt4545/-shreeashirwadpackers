<?php
/**
 * Vehicle Shifting Services Page - Shree Ashirwad Packers and Movers
 * Pure Core PHP Implementation
 * 
 * Deep Automotive Relocation Content, Car Carrier Transit, Crated Bike Transport, 100% IBA Billing
 * Preserving exact canonical URL: https://www.shreeashirwadpackers.com/vehicle-shifting/
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
  <?php render_seo_tags('vehicle-shifting'); ?>

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
          <span aria-current="page">Vehicle Shifting</span>
        </nav>
        <h1 class="page-hero-title">
          Vehicle Shifting Services in <span class="gradient-text">Ranchi - Car & Bike Transport</span>
        </h1>
        <p class="page-hero-subtitle">
          Safeguard your automobile with Jharkhand's certified vehicle relocation experts. Specialized enclosed hydraulic car carriers, custom wooden-crated motorcycle packing, zero odometer highway transit, and pan-India doorstep delivery.
        </p>
        <div class="about-cta-row" style="justify-content: center; margin-top: 24px;">
          <a href="tel:+918409531615" class="btn-primary-custom" title="Call Vehicle Transport Specialist: 8409531615">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
            Instant Vehicle Quote: 8409531615
          </a>
          <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn-outline-custom" title="Get Vehicle Moving Estimate on WhatsApp">
            WhatsApp Estimate &rarr;
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
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/><path d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8h4.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h2"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">18,000+</span>
              <span class="credential-title">Vehicles Relocated</span>
              <span class="credential-sub">Top Car & Bike Transport Ranchi</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">Zero Odometer</span>
              <span class="credential-title">Highway Wear Protection</span>
              <span class="credential-sub">Enclosed Hydraulic Carriers</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">IBA Approved</span>
              <span class="credential-title">100% Claim Bills</span>
              <span class="credential-sub">Bank & Govt Employee Transfer</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">4.9 / 5.0 ★</span>
              <span class="credential-title">Google Verified</span>
              <span class="credential-sub">664+ Real Customer Reviews</span>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- 4. Section 1: Overview of Vehicle Transportation in Ranchi & Jharkhand -->
    <section class="about-section" style="padding: 80px 0;">
      <div class="container">
        <div class="about-grid">
          
          <div class="about-images-wrapper">
            <div class="about-image-main">
              <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Hydraulic Car Carrier Loading and Vehicle Shifting in Ranchi - Shree Ashirwad Packers" title="Vehicle Shifting Services in Ranchi - Professional Car Carrier Loading" width="560" height="380" loading="lazy">
              <div class="about-badge-floating">
                <span class="badge-num">100%</span>
                <span class="badge-txt">Enclosed Carriers</span>
              </div>
            </div>
            <div class="about-image-sub">
              <img src="<?php echo SITE_BASE_URL; ?>/images/two-wheeler-motorcycle-carrier-jharkhand.jpg" alt="Two Wheeler Motorcycle and Scooter Carrier in Jharkhand - Shree Ashirwad Packers" title="Two-Wheeler Motorcycle Carrier Transit" width="280" height="190" loading="lazy">
            </div>
          </div>

          <div class="about-content">
            <div class="section-tag">Automotive Logistics Specialists</div>
            <h2 class="section-title">
              Safe & Reliable <span class="gradient-text">Car & Bike Transport in Ranchi</span>
            </h2>
            
            <p class="about-lead">
              Your car or two-wheeler is one of your most valuable personal assets. Driving it across hundreds of highway kilometers when relocating exposes your vehicle to severe road hazards, tire punctures, stone chips, reckless traffic, and engine strain. At <strong>Shree Ashirwad Packers and Movers Ranchi</strong>, we provide premier <strong>car transport in ranchi</strong>, specialized <strong>bike transport in ranchi</strong>, and certified <strong>vehicle shifting packers and movers</strong> solutions that eliminate every mile of driving risk.
            </p>

            <p class="about-text">
              We operate an expansive fleet of specialized, enclosed hydraulic <strong>car carrier service in ranchi</strong> vehicles and custom wooden-crated <strong>motorcycle transport service in ranchi</strong> setups. Whether you need fast <strong>scooty transport from ranchi</strong> or heavy <strong>two wheeler transport in ranchi jharkhand</strong>, our local teams provide doorstep pickup. From high-density residential hubs served by our <strong>packers and movers in kanke road ranchi</strong>, <strong>packers and movers in harmu ranchi</strong>, and <strong>packers and movers in morabadi ranchi</strong>, to bustling commercial corridors handled by our <strong>packers and movers in bariatu ranchi</strong>, <strong>packers and movers in lalpur ranchi</strong>, <strong>packers and movers in doranda ranchi</strong>, and <strong>packers and movers in ratu road ranchi</strong>, we guarantee zero odometer highway transit.
            </p>

            <p class="about-text">
              Recognized as the <strong>best packers and movers in ranchi</strong> and among the most <strong>trusted packers and movers in ranchi</strong>, Shree Ashirwad Packers is proud to be the leading <strong>packers and movers in ranchi jharkhand</strong>. As accredited <strong>iba approved packers and movers in ranchi</strong> and an <strong>iso certified packers and movers in ranchi</strong> company, we seamlessly bridge Ranchi with <strong>packers and movers in jamshedpur</strong>, <strong>packers and movers in dhanbad</strong>, <strong>packers and movers in bokaro</strong>, <strong>packers and movers in deoghar</strong>, and <strong>packers and movers in hazaribagh</strong>. Every vehicle transported is backed by a 360-degree digital inspection report, full marine transit insurance underwritten by nationalized insurers, and legitimate documentation accepted by 100% of corporate and government employers for relocation claims.
            </p>

            <div class="about-cta-row">
              <a href="tel:+918409531615" class="btn-primary-custom" title="Call Vehicle Transport Desk at 8409531615">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
                Call Vehicle Desk: 8409531615
              </a>
              <a href="<?php echo SITE_BASE_URL; ?>/contact" class="btn-outline-custom" title="Contact Shree Ashirwad Packers Ranchi Office">Book Vehicle Survey &rarr;</a>
            </div>

          </div>

        </div>
      </div>
    </section>

    <!-- 5. Section 2: Dedicated Car Transportation Carrier Services -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Four-Wheeler Relocation</div>
          <h2 class="section-title">
            Enclosed Hydraulic <span class="gradient-text">Car Carrier Services in Ranchi</span>
          </h2>
          <p class="section-subtitle">
            From compact hatchbacks and executive sedans to luxury SUVs and vintage classics, we provide specialized enclosed metal carriers with zero road wear. Whether you require standalone car carrier relocation or combined <strong>household goods and car shifting india</strong>, explore our transparent <strong>car movers and packers charges</strong> and understand exact <strong>movers and packers charges for car</strong> transport across India.
          </p>
        </div>

        <div class="vehicle-types-grid">
          
          <div class="vehicle-type-card">
            <span class="vehicle-type-badge">Hatchback Cars</span>
            <h3 class="vehicle-type-title">Compact & Hatchbacks</h3>
            <div class="vehicle-type-price">From ₹2,500 local / ₹9,000 intercity*</div>
            <p class="vehicle-type-desc">
              Swift, i20, Tiago, Baleno, WagonR, and Grand i10. Smooth hydraulic ramp drive-on with 4-wheel chocks and soft tire straps preventing paint rubs.
            </p>
            <ul class="vehicle-type-features">
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Hydraulic Ramp Loading</li>
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Enclosed Weatherproof Carrier</li>
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> 360° Digital Condition Report</li>
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Doorstep Pickup & Delivery</li>
            </ul>
            <a href="tel:+918409531615" class="btn-outline-custom text-center" title="Book Hatchback Car Shifting">Book Hatchback</a>
          </div>

          <div class="vehicle-type-card" style="border-color: var(--accent);">
            <span class="vehicle-type-badge" style="background: var(--accent); color: #fff;">Executive Sedan</span>
            <h3 class="vehicle-type-title">Mid-Size & Luxury Sedans</h3>
            <div class="vehicle-type-price">From ₹3,000 local / ₹11,000 intercity*</div>
            <p class="vehicle-type-desc">
              Honda City, Hyundai Verna, Skoda Slavia, Ciaz, and luxury Mercedes/BMW sedans. Low approach angle ramps safeguard ground-clearance bumpers.
            </p>
            <ul class="vehicle-type-features">
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Zero Bumper Scrape Ramp</li>
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Individual Wheel Locking Chocks</li>
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Full Value Marine Insurance</li>
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> GPS Real-Time Satellite Tracking</li>
            </ul>
            <a href="tel:+918409531615" class="btn-primary-custom text-center" title="Book Sedan Car Shifting">Book Sedan Move</a>
          </div>

          <div class="vehicle-type-card">
            <span class="vehicle-type-badge">SUVs & MUVs</span>
            <h3 class="vehicle-type-title">SUVs, MUVs & 4x4s</h3>
            <div class="vehicle-type-price">From ₹3,500 local / ₹13,500 intercity*</div>
            <p class="vehicle-type-desc">
              Scorpio, Fortuner, XUV700, Harrier, Creta, Safari, and Thar. Heavy-duty chassis anchor tie-downs prevent suspension oscillation on highway curves.
            </p>
            <ul class="vehicle-type-features">
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> High-Capacity Hydraulic Ramp</li>
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Heavy-Duty Ratchet Anchor Belts</li>
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Weatherproof Sealed Canopy</li>
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Direct Move Coordinator Contact</li>
            </ul>
            <a href="tel:+918409531615" class="btn-outline-custom text-center" title="Book SUV Transport in Ranchi">Book SUV Move</a>
          </div>

          <div class="vehicle-type-card">
            <span class="vehicle-type-badge">Luxury & Electric</span>
            <h3 class="vehicle-type-title">Luxury & EV Vehicles</h3>
            <div class="vehicle-type-price">Custom Quote*</div>
            <p class="vehicle-type-desc">
              Audi, BMW, Mercedes, Jaguar, Porsche, and Electric Vehicles (EVs). Dedicated single-vehicle container carrier with specialized battery safety protocol.
            </p>
            <ul class="vehicle-type-features">
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Dedicated Closed Single Carrier</li>
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> EV Battery Health Protocol</li>
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> White Glove Doorstep Handoff</li>
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> VIP Transit Priority Status</li>
            </ul>
            <a href="tel:+918409531615" class="btn-outline-custom text-center" title="Inquire About Luxury Car Transport">Inquire VIP Move</a>
          </div>

        </div>

      </div>
    </section>

    <!-- 6. Section 3: Specialized Two-Wheeler, Scooter & Bike Transportation -->
    <section class="section" style="padding: 80px 0; background: #f8fafc;">
      <div class="container">
        
        <div class="about-grid">
          
          <div class="about-images-wrapper">
            <div class="about-image-main">
              <img src="<?php echo SITE_BASE_URL; ?>/images/bike-packing-shree-ashirwad-packers-jharkhand.jpg" alt="Motorcycle Bike Protective Packing and Crate Wrapping in Ranchi - Shree Ashirwad Packers" title="Specialized Bike Packing and Two-Wheeler Parcel Service" width="560" height="380" loading="lazy">
              <div class="about-badge-floating">
                <span class="badge-num">Crated</span>
                <span class="badge-txt">Zero Scratch Protection</span>
              </div>
            </div>
            <div class="about-image-sub">
              <img src="<?php echo SITE_BASE_URL; ?>/images/scooter-bike-safe-transit-packing-jharkhand.jpg" alt="Scooter and EV Two Wheeler Safe Transit Packing in Jharkhand - Shree Ashirwad Packers" title="Scooter and EV Two-Wheeler Protective Wrap" width="280" height="190" loading="lazy">
            </div>
          </div>

          <div class="about-content">
            <div class="section-tag">Two-Wheeler Relocation Engineering</div>
            <h2 class="section-title">
              Crated <span class="gradient-text">Bike Transport & Motorcycle Parcel in Ranchi</span>
            </h2>
            
            <p class="about-lead">
              Motorcycles and scooters are particularly prone to transit scratches, broken rear-view mirrors, bent levers, and handlebar misalignment if transported carelessly. When <strong>shifting motorcycle with packers and movers</strong>, customers often ask <strong>how much do packers and movers charge for bikes</strong>. At Shree Ashirwad Packers, our transparent <strong>bike movers and packers charges</strong>, clear <strong>bike packers and movers price</strong>, and fair <strong>two wheeler transportation charges movers and packers</strong> ensure premium 4-layer bike packing and wooden crate enclosure that delivers your vehicle in showroom condition.
            </p>

            <h3 style="font-size: 1.15rem; color: var(--primary); margin: 18px 0 8px; font-weight: 800;">
              Our 4-Layer Protective Bike Packing Standard:
            </h3>

            <ul class="infra-checklist">
              <li>
                <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                <span><strong>Layer 1: Virgin Bubble Wrap:</strong> Envelops the painted fuel tank, mudguards, speedometer console, and headlight assembly to absorb surface abrasions.</span>
              </li>
              <li>
                <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                <span><strong>Layer 2: High-Density EPE Foam Sleeves:</strong> Protects delicate side mirrors, brake levers, clutch cables, and turn indicators.</span>
              </li>
              <li>
                <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                <span><strong>Layer 3: Heavy Corrugated Sheet Wrap:</strong> Shields chrome exhaust silencers, engine crankcases, and alloy wheels against metal contact.</span>
              </li>
              <li>
                <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                <span><strong>Layer 4: Reinforced Wooden Crate Cage:</strong> The bike is bolted upright onto heavy wooden skids with front-wheel chocks and cross-braced timber framing, ensuring it never tips over during transit.</span>
              </li>
            </ul>

            <div class="about-cta-row" style="margin-top: 24px;">
              <a href="tel:+918409531615" class="btn-primary-custom" title="Call for Bike Transport Quote: 8409531615">
                Call Bike Desk: 8409531615
              </a>
            </div>

          </div>

        </div>

      </div>
    </section>

    <!-- 7. Section 4: Vehicle Pre-Transit Inspection & 360° Condition Report -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Total Transparency</div>
          <h2 class="section-title">
            Our 360° Digital <span class="gradient-text">Vehicle Condition Inspection Protocol</span>
          </h2>
          <p class="section-subtitle">
            Every vehicle handed over to Shree Ashirwad Packers undergoes a rigorous 4-step inspection documented on an official mutual agreement before truck loading.
          </p>
        </div>

        <div class="inspection-steps-grid">
          
          <div class="inspection-step-card">
            <span class="inspection-step-num">Step 01</span>
            <h3 class="inspection-step-title">Exterior 360° Body Check</h3>
            <p class="inspection-step-desc">
              Our supervisor walks around the vehicle with you, photographing and cataloging any preexisting scratches, minor stone chips, or bumper marks on the official inspection form.
            </p>
          </div>

          <div class="inspection-step-card">
            <span class="inspection-step-num">Step 02</span>
            <h3 class="inspection-step-title">Odometer & Fuel Logging</h3>
            <p class="inspection-step-desc">
              The exact odometer kilometer reading and current fuel level are logged and signed. We verify that fuel is kept at approximately 1/4 tank for safety regulations during transit.
            </p>
          </div>

          <div class="inspection-step-card">
            <span class="inspection-step-num">Step 03</span>
            <h3 class="inspection-step-title">Mechanical & Battery Check</h3>
            <p class="inspection-step-desc">
              Checking tire pressure, locking handbrake, and ensuring all loose accessories (dashcams, toll tags, toll cash, loose mats) are removed or safely stored.
            </p>
          </div>

          <div class="inspection-step-card">
            <span class="inspection-step-num">Step 04</span>
            <h3 class="inspection-step-title">Joint Sign-Off & Bilty</h3>
            <p class="inspection-step-desc">
              Both the customer and our move manager sign the official inspection slip. You receive a stamped digital copy along with the official IBA-approved Lorry Receipt (Bilty).
            </p>
          </div>

        </div>

      </div>
    </section>

    <!-- 8. Section 5: Transparent Pricing & Cost Matrix for Car & Bike Shifting -->
    <section class="section" style="padding: 80px 0; background: #f8fafc;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Honest Rates</div>
          <h2 class="section-title">
            Transparent <span class="gradient-text">Vehicle Transportation Charges Matrix</span>
          </h2>
          <p class="section-subtitle">
            Review realistic vehicle relocation charges for car and bike shifting within Ranchi and across major interstate routes. Explore our official <strong>packers and movers in ranchi price list</strong>, compare transparent <strong>packers and movers charges in ranchi</strong>, and get a precise <strong>packers and movers ranchi cost estimate</strong> from certified <strong>vehicle shifting packers and movers</strong>.
          </p>
        </div>

        <div class="comparison-table-wrapper" style="margin-top: 30px;">
          <table class="comp-table">
            <thead>
              <tr>
                <th style="width: 25%;">Vehicle Classification</th>
                <th style="width: 25%;">Packing & Carrier Type</th>
                <th style="width: 25%;">Local Intra-City (Ranchi)</th>
                <th style="width: 25%;">Interstate Metros (Delhi/Bangalore/Mumbai)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Standard Commuter Bike / Scooter</strong></td>
                <td>3-Layer Bubble Wrap + Corrugated Sheet</td>
                <td><strong style="color: var(--primary);">₹1,500 – ₹2,200</strong></td>
                <td><strong style="color: var(--accent);">₹3,800 – ₹6,500*</strong></td>
              </tr>
              <tr>
                <td><strong>Royal Enfield / Sports Cruiser Bike</strong></td>
                <td>4-Layer Wrap + Wooden Crate Cage</td>
                <td><strong style="color: var(--primary);">₹2,000 – ₹2,800</strong></td>
                <td><strong style="color: var(--accent);">₹5,500 – ₹8,500*</strong></td>
              </tr>
              <tr>
                <td><strong>Hatchback Car (Swift, i20, Tiago)</strong></td>
                <td>Enclosed Hydraulic Car Carrier</td>
                <td><strong style="color: var(--primary);">₹2,500 – ₹3,800</strong></td>
                <td><strong style="color: var(--accent);">₹9,500 – ₹16,000*</strong></td>
              </tr>
              <tr>
                <td><strong>Mid-Size Sedan (City, Verna, Slavia)</strong></td>
                <td>Enclosed Hydraulic Car Carrier</td>
                <td><strong style="color: var(--primary);">₹3,000 – ₹4,200</strong></td>
                <td><strong style="color: var(--accent);">₹11,500 – ₹18,000*</strong></td>
              </tr>
              <tr>
                <td><strong>Compact SUV (Creta, Brezza, Seltos)</strong></td>
                <td>Enclosed Hydraulic Car Carrier</td>
                <td><strong style="color: var(--primary);">₹3,200 – ₹4,500</strong></td>
                <td><strong style="color: var(--accent);">₹13,000 – ₹20,000*</strong></td>
              </tr>
              <tr>
                <td><strong>Full-Size SUV (Fortuner, Safari, XUV700)</strong></td>
                <td>Heavy-Duty Enclosed Car Carrier</td>
                <td><strong style="color: var(--primary);">₹3,800 – ₹5,500</strong></td>
                <td><strong style="color: var(--accent);">₹15,000 – ₹24,000*</strong></td>
              </tr>
            </tbody>
          </table>
        </div>

        <p style="font-size: 0.85rem; color: #64748b; margin-top: 14px; text-align: center;">
          *Note: Final intercity transportation charges vary based on distance, toll levies, state transit tax permits, and optional transit insurance (typically 1.5% of declared vehicle value). Call our vehicle manager at <strong>8409531615</strong> for a binding written quote.
        </p>

      </div>
    </section>

    <!-- 9. Section 6: IBA Approved Invoicing for Bank & Govt Vehicle Claims -->
    <section class="infra-section">
      <div class="container">
        
        <div class="compliance-box" style="margin-top: 0;">
          <div class="compliance-details">
            <div class="section-tag" style="background: rgba(255,255,255,0.15); color: #fff;">100% Employer Claim Approved</div>
            <h3 style="font-size: 1.6rem; color: #ffffff; margin: 12px 0;">
              IBA Approved Bills for Bank & Government Vehicle Shifting
            </h3>
            <p style="color: #cbd5e1; line-height: 1.65; margin-bottom: 16px;">
              Are you an employee of <strong>State Bank of India (SBI), Punjab National Bank (PNB), Bank of India, Indian Railways, Coal India (CCL), SAIL Bokaro, CMPDI, MECON, or Defence forces</strong> claiming vehicle transfer reimbursement? Shree Ashirwad Packers provides legitimate IBA-approved bills and 100% GST-compliant invoices accepted for prompt reimbursement without audit queries.
            </p>
            <div class="compliance-badges-row">
              <span class="compliance-badge-pill">&check; Official IBA Lorry Receipt (Bilty / LR)</span>
              <span class="compliance-badge-pill">&check; GST Tax Invoice with SAC Code 996511</span>
              <span class="compliance-badge-pill">&check; Vehicle Condition Inspection Certificate</span>
              <span class="compliance-badge-pill">&check; Money Receipt with Revenue Stamp</span>
              <span class="compliance-badge-pill">&check; Comprehensive Transit Insurance Certificate</span>
            </div>
          </div>
          <div class="text-center">
            <a href="tel:+918409531615" class="btn-primary-custom" title="Inquire About Vehicle IBA Billing: Call 8409531615">
              Verify Vehicle Bills: 8409531615
            </a>
          </div>
        </div>

        <!-- Vehicle Fleet & Transit Visual Showcase -->
        <div class="infra-images-grid" style="margin-top: 36px;">
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe Transit Enclosed Container Truck in Ranchi - Shree Ashirwad Packers" title="Safe Transit Enclosed Vehicle Carrier Truck in Ranchi" width="400" height="260" loading="lazy">
          </div>
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to Door Delivery Moving Truck Jharkhand - Shree Ashirwad Packers" title="Door-to-Door Vehicle Delivery Truck in Jharkhand" width="400" height="260" loading="lazy">
          </div>
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/waterproof-container-loading-jharkhand.jpg" alt="Waterproof Container Vehicle Loading in Jharkhand - Shree Ashirwad Packers" title="Waterproof Container Automobile Loading" width="400" height="260" loading="lazy">
          </div>
          <div class="infra-img-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/professional-loading-crew-ranchi.jpg" alt="Professional Loading Crew - Shree Ashirwad Packers Ranchi" title="Professional Vehicle Loading Crew in Ranchi" width="400" height="260" loading="lazy">
          </div>
        </div>

      </div>
    </section>

    <!-- 10. Section 7: Step-by-Step Vehicle Moving Preparation Guide -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Pre-Transit Checklist</div>
          <h2 class="section-title">
            How to Prepare Your <span class="gradient-text">Car & Bike for Transport</span>
          </h2>
          <p class="section-subtitle">
            Follow these essential preparation steps before our carrier arrives for pickup to ensure seamless transit.
          </p>
        </div>

        <div class="checklist-grid">
          
          <div class="checklist-card">
            <span class="checklist-step">Phase 1: Washing</span>
            <h3 class="checklist-title">Clean Vehicle Exterior</h3>
            <ul class="checklist-items">
              <li>Thoroughly wash your car or motorcycle to remove highway dirt and grime.</li>
              <li>A clean surface enables accurate documentation of preexisting scratches.</li>
              <li>Inspect tires and check inflation to standard operating pressure.</li>
            </ul>
          </div>

          <div class="checklist-card">
            <span class="checklist-step">Phase 2: Fuel Level</span>
            <h3 class="checklist-title">Drain Fuel to 1/4 Tank</h3>
            <ul class="checklist-items">
              <li>Keep fuel level at approximately 1/4 tank (enough for loading/unloading).</li>
              <li>For motorcycles, empty excess fuel to comply with highway fire safety.</li>
              <li>Ensure there are no fluid leaks (oil, brake fluid, or coolant).</li>
            </ul>
          </div>

          <div class="checklist-card">
            <span class="checklist-step">Phase 3: Accessories</span>
            <h3 class="checklist-title">Remove Personal Items</h3>
            <ul class="checklist-items">
              <li>Remove all personal items, cash, sunglasses, and perfume bottles from the car.</li>
              <li>Temporarily remove or deactivate automatic highway toll tags (FASTag).</li>
              <li>Detach magnetic phone holders, dashcams, and loose seat cushions.</li>
            </ul>
          </div>

          <div class="checklist-card">
            <span class="checklist-step">Phase 4: Documents</span>
            <h3 class="checklist-title">Prepare Paperwork Copies</h3>
            <ul class="checklist-items">
              <li>Photocopy of Registration Certificate (RC Book / Smart Card).</li>
              <li>Valid vehicle comprehensive insurance policy document.</li>
              <li>Valid Pollution Under Control (PUC) certificate.</li>
              <li>Copy of owner's Government photo ID (Aadhaar or PAN Card).</li>
            </ul>
          </div>

        </div>

      </div>
    </section>

    <!-- 11. Section 8: Head-to-Head Comparison: Shree Ashirwad vs Casual Transporters -->
    <section class="comparison-section">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Proven Quality Standards</div>
          <h2 class="section-title">
            Why Choose <span class="gradient-text">Shree Ashirwad Packers</span> vs Open Local Transporters
          </h2>
          <p class="section-subtitle">
            See the concrete differences between certified professional automotive carriers and casual truck operators when choosing <strong>professional packers and movers in ranchi</strong> for your car and two-wheeler transport.
          </p>
        </div>

        <div class="comparison-table-wrapper">
          <table class="comp-table">
            <thead>
              <tr>
                <th style="width: 34%;">Service Benchmark / Quality Standard</th>
                <th class="col-brand" style="width: 33%;">Shree Ashirwad Packers and Movers</th>
                <th class="col-brokers" style="width: 33%;">Open Transporters & Casual Tow Operators</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Transport Vehicle Type</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Enclosed Hydraulic Closed Car Carriers</span></td>
                <td><span class="badge-no">&#x2717; Open Flatbed Trucks or Driven Manually</span></td>
              </tr>
              <tr>
                <td><strong>Odometer Mileage Accumulation</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Zero Odometer Highway Transit</span></td>
                <td><span class="badge-no">&#x2717; Driven Over Roads Adding Hundreds of Kilometers</span></td>
              </tr>
              <tr>
                <td><strong>Bike Packaging Method</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; 4-Layer Wrap + Reinforced Wooden Crate Cage</span></td>
                <td><span class="badge-no">&#x2717; Tied with Ropes to Truck Railings (Scratches)</span></td>
              </tr>
              <tr>
                <td><strong>Pre-Transit Inspection Report</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; 360° Digital Condition Report Signed Jointly</span></td>
                <td><span class="badge-no">&#x2717; No Inspection (Disputes Over Damage)</span></td>
              </tr>
              <tr>
                <td><strong>Transit Insurance Coverage</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Full Value Marine Insurance with Nationalized Insurers</span></td>
                <td><span class="badge-no">&#x2717; No Insurance Policy or False Verbal Promises</span></td>
              </tr>
              <tr>
                <td><strong>IBA Approved Moving Bills</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; 100% Audit-Approved Bills for Bank & PSU Claims</span></td>
                <td><span class="badge-no">&#x2717; Handwritten Receipts (Rejected in Claims)</span></td>
              </tr>
              <tr>
                <td><strong>GPS Satellite Real-Time Tracking</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Live Highway Tracking via Move Dispatcher</span></td>
                <td><span class="badge-no">&#x2717; Unreachable Drivers and Vague Updates</span></td>
              </tr>
              <tr>
                <td><strong>Doorstep Pickup & Delivery</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Direct Door-to-Door Delivery Available</span></td>
                <td><span class="badge-no">&#x2717; Ask Customer to Collect at City Outskirts Hub</span></td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </section>

    <!-- Real Customer Reviews from Google My Business (GMB) -->
    <?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

    <!-- 12. Section 9: Frequently Asked Questions (FAQ) on Vehicle Shifting -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Clear Answers</div>
          <h2 class="section-title">
            Frequently Asked Questions on <span class="gradient-text">Car & Bike Shifting</span>
          </h2>
          <p class="section-subtitle">
            Find answers to common questions about car carrier transit, motorcycle crating, transit insurance, and booking timelines.
          </p>
        </div>

        <div class="about-faq-grid">
          
          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>How much does car transport from Ranchi to other states cost?</span>
            </div>
            <p class="about-faq-a">
              Car transportation charges generally range from ₹2,500 to ₹4,500 for local intra-city shifts, ₹9,000 to ₹16,000 for regional moves (such as Kolkata or Patna), and ₹14,000 to ₹24,000 for long-distance metros (such as Delhi, Bengaluru, Mumbai, or Pune) in enclosed hydraulic car carriers.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>How do you pack and secure motorcycles, scooters, and bikes for transit?</span>
            </div>
            <p class="about-faq-a">
              Two-wheelers undergo a certified 4-layer packaging process: bubble wrap on painted petrol tanks, foam protectors on mirrors, corrugated sheets on engine exhausts, and heavy-duty wooden crate framing with upright wheel chocks to prevent tipping.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>Do you transport cars by driving them or using dedicated enclosed carriers?</span>
            </div>
            <p class="about-faq-a">
              We transport cars exclusively inside specialized enclosed car carrier trucks equipped with hydraulic loading ramps. Your car is never driven over long-distance highways, ensuring zero odometer wear and total safety.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>What documents are required for car and bike shifting from Ranchi?</span>
            </div>
            <p class="about-faq-a">
              You will need photocopies of the vehicle Registration Certificate (RC), valid Vehicle Insurance Policy, Pollution Under Control (PUC) certificate, and the owner's Government ID (Aadhaar or PAN Card).
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>Is transit insurance included for vehicle shifting?</span>
            </div>
            <p class="about-faq-a">
              Yes. We arrange comprehensive Marine Transit Insurance through leading nationalized insurers covering total declared vehicle value against accidental transit risks, fire, or overturning.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>Are vehicle transportation bills IBA approved for Bank and Govt claims?</span>
            </div>
            <p class="about-faq-a">
              Yes, 100%. We provide complete IBA-approved Lorry Receipts (LR/Bilty), GST tax invoices with SAC code 996511, and vehicle condition inspection reports accepted by all public sector banks, PSUs, and central government departments.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>Can I put personal household goods or cartons inside the car during transport?</span>
            </div>
            <p class="about-faq-a">
              Light personal clothing or small boxes can be placed in the trunk/boot space, provided they do not obstruct driver visibility or exceed suspension weight limits. However, valuable jewelry or hazardous items are strictly prohibited.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>How long does car and bike delivery take from Ranchi to other states?</span>
            </div>
            <p class="about-faq-a">
              Transit times: Regional shifts (Kolkata/Patna) take 24 to 48 hours; Delhi NCR/Lucknow take 3 to 5 days; Bengaluru/Hyderabad/Mumbai/Pune take 5 to 7 days in dedicated enclosed carriers.
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
            <span class="cta-badge">Protect Your Vehicle on Every Highway</span>
            <h2 class="cta-title">
              Book Safe <span class="gradient-text">Car & Bike Shifting in Ranchi</span>
            </h2>
            <p class="cta-subtitle">
              Ready to transport your car or motorcycle with complete peace of mind? Speak directly with our automotive relocation manager at <strong>8409531615</strong> or <strong>9835565233</strong> for an instant quote and doorstep carrier scheduling.
            </p>
            <div class="cta-buttons-row">
              <a href="tel:+918409531615" class="btn-cta-phone" title="Call Vehicle Transport Specialist at 8409531615">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
                <span>Call Hotline: <strong>8409531615</strong></span>
              </a>
              <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn-cta-whatsapp" title="Chat with Vehicle Transport Desk on WhatsApp">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2z"/></svg>
                <span>WhatsApp Vehicle Estimate</span>
              </a>
            </div>
            <div class="cta-trust-items">
              <span>&check; 18,000+ Vehicles Moved</span>
              <span>&check; Zero Odometer Highway Transit</span>
              <span>&check; 100% IBA Approved Bills</span>
              <span>&check; Closed Hydraulic Carriers</span>
            </div>
          </div>
        </div>

        <!-- Localized Ranchi Localities & Jharkhand District Links -->
        <div class="neighborhoods-card" style="margin-top: 40px;">
          <h3 class="neighborhoods-title">
            <svg viewBox="0 0 24 24" width="20" height="20"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
            Professional Vehicle Shifting & Car Transport Coverage Across Ranchi & Jharkhand
          </h3>
          <p style="font-size: 0.9rem; color: #64748b; margin-bottom: 16px;">
            Our dedicated car carrier and bike transport crews provide doorstep vehicle pickup across all Ranchi localities:
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
