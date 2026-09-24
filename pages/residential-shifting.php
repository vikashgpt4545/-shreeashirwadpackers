<?php
/**
 * Residential Shifting Services Page - Shree Ashirwad Packers and Movers
 * Pure Core PHP Implementation
 * 
 * Deep E-E-A-T Content, Room-by-Room Packing, 1BHK-4BHK Packages, Transparent Pricing Matrix
 * Preserving exact canonical URL: https://www.shreeashirwadpackers.com/residential-shifting/
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
  <?php render_seo_tags('residential-shifting'); ?>

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
          <a href="<?php echo SITE_BASE_URL; ?>/#services" title="View All Shifting and Relocation Services">Services</a>
          <span class="breadcrumb-sep">&gt;</span>
          <span aria-current="page">Residential Shifting</span>
        </nav>
        <h1 class="page-hero-title">
          Residential Shifting Services in <span class="gradient-text">Ranchi, Jharkhand</span>
        </h1>
        <p class="page-hero-subtitle">
          Experience completely stress-free household relocation with Jharkhand's most trusted IBA approved movers. 15+ years of excellence, 25,000+ homes shifted, scientific 5-layer protective packing, and dedicated company container trucks.
        </p>
        <div class="about-cta-row" style="justify-content: center; margin-top: 24px;">
          <a href="tel:+918409531615" class="btn-primary-custom" title="Call Shree Ashirwad Packers for Home Shifting Quote: 8409531615">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
            Instant Moving Quote: 8409531615
          </a>
          <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn-outline-custom" title="Chat with House Shifting Specialist on WhatsApp">
            WhatsApp Survey &rarr;
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
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">25,000+</span>
              <span class="credential-title">Homes Relocated</span>
              <span class="credential-sub">Best Packers and Movers in Ranchi</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">Zero Damage</span>
              <span class="credential-title">Safety Guarantee</span>
              <span class="credential-sub">5-Layer Protective Cushioning</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">IBA Approved</span>
              <span class="credential-title">100% Claim Bills</span>
              <span class="credential-sub">Bank & Govt Employee Relocation</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
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

    <!-- 4. Section 1: Overview of Residential Shifting in Ranchi -->
    <section class="about-section" style="padding: 80px 0;">
      <div class="container">
        <div class="about-grid">
          
          <div class="about-images-wrapper">
            <div class="about-image-main">
              <img src="<?php echo SITE_BASE_URL; ?>/images/residential-relocation-cartons-ranchi.jpg" alt="Residential Household Relocation Cartons Packing in Ranchi - Shree Ashirwad Packers" title="Residential Shifting Services in Ranchi - Professional Household Relocation" width="560" height="380" loading="lazy">
              <div class="about-badge-floating">
                <span class="badge-num">100%</span>
                <span class="badge-txt">Stress-Free Moving</span>
              </div>
            </div>
            <div class="about-image-sub">
              <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe Transit Closed Container Truck in Ranchi - Shree Ashirwad Packers" title="Safe Transit Closed Container Truck for Residential Shifting" width="280" height="190" loading="lazy">
            </div>
          </div>

          <div class="about-content">
            <div class="section-tag">Jharkhand's #1 Home Shifting Specialists</div>
            <h2 class="section-title">
              Professional <span class="gradient-text">Residential Shifting Services in Ranchi</span>
            </h2>
            
            <p class="about-lead">
              Relocating your home is not just about transporting physical furniture; it represents packing up years of cherished family memories, fragile heirlooms, valuable electronics, and household investments. At <strong>Shree Ashirwad Packers and Movers</strong>, we deliver premium, stress-free <strong>residential shifting services in ranchi</strong> tailored to modern families, working professionals, and government personnel.
            </p>

            <p class="about-text">
              Household shifting in Ranchi presents distinct local logistics challenges. From navigating dense residential lanes in Lalpur, Upper Bazaar, and Doranda, to handling multistory apartment elevator restrictions in Morabadi, Bariatu, and Kanke Road, shifting demands experienced local expertise. Unlike unorganized transport brokers or informal street-corner handcart operators who lack proper packing supplies and hire casual daily-wage laborers, Shree Ashirwad Packers operates with permanent, police-verified moving technicians and company-owned closed container vehicles.
            </p>

            <p class="about-text">
              As established <strong>professional packers and movers in ranchi</strong> with more than 15 years of uninterrupted excellence, we handle every aspect of domestic house shifting. From dismantling modular beds and custom wardrobes to bubble-wrapping delicate kitchen bone china and providing doorstep reassembly at your new destination, our <strong>home shifting solutions</strong> ensure total peace of mind.
            </p>

            <div class="about-cta-row">
              <a href="tel:+918409531615" class="btn-primary-custom" title="Call for House Shifting Quote: 8409531615">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
                Call Office: 8409531615
              </a>
              <a href="<?php echo SITE_BASE_URL; ?>/contact" class="btn-outline-custom" title="Contact Shree Ashirwad Packers Ranchi Branch">Book Free Home Survey &rarr;</a>
            </div>

          </div>

        </div>
      </div>
    </section>

    <!-- 5. Section 2: Customized Shifting Packages by Home Size -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Tailored Home Relocation</div>
          <h2 class="section-title">
            Customized Shifting Packages for <span class="gradient-text">Every Home Size</span>
          </h2>
          <p class="section-subtitle">
            Whether shifting a compact studio apartment or relocating an expansive multi-story bungalow, our tailored <strong>household goods shifting services</strong> provide the exact manpower, packing materials, and container truck capacity you require.
          </p>
        </div>

        <div class="packages-grid">
          
          <div class="package-card">
            <span class="package-badge">Express Same-Day</span>
            <h3 class="package-title">1 BHK Flat Shifting</h3>
            <div class="package-price-est">From ₹3,500 - ₹6,500*</div>
            <p class="package-desc">
              Ideal for bachelors, young couples, and small apartments. Fast, efficient single-day packing and delivery using our 14-foot closed container carrier.
            </p>
            <ul class="package-features">
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> 2-3 Trained Packing Specialists</li>
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Standard 3-Layer Packing Kit</li>
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> 14ft Covered Container Truck</li>
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Complete Basic Furniture Setup</li>
            </ul>
            <a href="tel:+918409531615" class="btn-outline-custom text-center" title="Book 1 BHK House Shifting in Ranchi">Book 1 BHK Move</a>
          </div>

          <div class="package-card" style="border-color: var(--accent); position: relative;">
            <span class="package-badge" style="background: var(--accent); color: #fff;">Most Popular</span>
            <h3 class="package-title">2 BHK Family Relocation</h3>
            <div class="package-price-est">From ₹5,500 - ₹10,500*</div>
            <p class="package-desc">
              Comprehensive relocation for standard families. Includes modular furniture carpentry, delicate kitchen packing, and complete room-by-room unpacking.
            </p>
            <ul class="package-features">
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> 4-5 Professional Movers + Carpenter</li>
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> 5-Layer Heavy-Duty Bubble Wrapping</li>
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> 17ft/19ft Sealed All-Weather Truck</li>
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Double Bed & Wardrobe Assembly</li>
            </ul>
            <a href="tel:+918409531615" class="btn-primary-custom text-center" title="Book 2 BHK House Shifting in Ranchi">Book 2 BHK Move</a>
          </div>

          <div class="package-card">
            <span class="package-badge">Premium Executive</span>
            <h3 class="package-title">3 BHK Luxury Apartment</h3>
            <div class="package-price-est">From ₹9,000 - ₹16,000*</div>
            <p class="package-desc">
              Extensive multi-room relocation for large residences. Features specialized wooden crating for large smart TVs, chandeliers, and high-value fragile art.
            </p>
            <ul class="package-features">
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> 6-8 Certified Moving Technicians</li>
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Custom Wooden Crates for LED TVs</li>
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> 22ft Dedicated Multi-Axle Carrier</li>
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> On-Site Move Manager Supervision</li>
            </ul>
            <a href="tel:+918409531615" class="btn-outline-custom text-center" title="Book 3 BHK House Shifting in Ranchi">Book 3 BHK Move</a>
          </div>

          <div class="package-card">
            <span class="package-badge">VIP Comprehensive</span>
            <h3 class="package-title">4 BHK & Villa Moving</h3>
            <div class="package-price-est">Custom Quote*</div>
            <p class="package-desc">
              End-to-end luxury villa relocation. Includes antique teakwood furniture handling, temple mandir sanctified relocation, terrace plants, and dual vehicle fleet.
            </p>
            <ul class="package-features">
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Dedicated Senior Moving Crew</li>
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Premium Foam & Corrugated Wrap</li>
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Dual Fleet or 32ft Heavy Container</li>
              <li><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Complete Unpacking & Debris Clear</li>
            </ul>
            <a href="tel:+918409531615" class="btn-outline-custom text-center" title="Inquire About Villa and Bungalow Shifting">Inquire Villa Move</a>
          </div>

        </div>

      </div>
    </section>

    <!-- 6. Section 3: Room-by-Room Scientific 5-Layer Packing Methodology -->
    <section class="section" style="padding: 80px 0; background: #f8fafc;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Engineered Protection</div>
          <h2 class="section-title">
            Room-by-Room Scientific <span class="gradient-text">5-Layer Protective Packing</span>
          </h2>
          <p class="section-subtitle">
            Every room in your home contains unique articles requiring customized packaging techniques. We do not use generic recycled boxes; our crew applies specialized materials engineered to withstand transit vibrations.
          </p>
        </div>

        <div class="room-packing-grid">
          
          <div class="room-pack-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Master Carpenter Dismantling Hydraulic Double Bed in Ranchi - Shree Ashirwad Packers" title="Double Bed Furniture Dismantling and Assembly Service" class="room-pack-img" width="400" height="200" loading="lazy">
            <div class="room-pack-body">
              <h3 class="room-pack-title">Master Bedroom & Furniture</h3>
              <p class="room-pack-text">
                Our in-house carpenters dismantle hydraulic storage beds, sliding wardrobes, and dressing consoles. All wooden panels are blanket-wrapped with foam sheets and taped securely to prevent scratches. Mattresses receive hygienic heavy-duty zip covers.
              </p>
              <div class="room-pack-tags">
                <span class="room-pack-tag">Carpenter Included</span>
                <span class="room-pack-tag">Mattress Zip Covers</span>
                <span class="room-pack-tag">Hardware Pouches</span>
              </div>
            </div>
          </div>

          <div class="room-pack-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/kitchen-crockery-bubble-packing-ranchi.jpg" alt="Kitchen Crockery Bubble Packing in Ranchi - Shree Ashirwad Packers" title="Delicate Kitchen Crockery and Glassware Bubble Wrapping" class="room-pack-img" width="400" height="200" loading="lazy">
            <div class="room-pack-body">
              <h3 class="room-pack-title">Modular Kitchen & Crockery</h3>
              <p class="room-pack-text">
                Kitchen items require the highest packing density. Plates, bone china dinnerware, and glass tumblers are individually bubble-wrapped with virgin 100 GSM material and stacked upright inside heavy-duty 5-ply corrugated dish barrels.
              </p>
              <div class="room-pack-tags">
                <span class="room-pack-tag">100 GSM Bubble Wrap</span>
                <span class="room-pack-tag">Dish Barrel Cartons</span>
                <span class="room-pack-tag">Spice Pack Sealers</span>
              </div>
            </div>
          </div>

          <div class="room-pack-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/sofa-furniture-protective-packing-ranchi.jpg" alt="Living Room Sofa Fabric Protective Packing in Ranchi - Shree Ashirwad Packers" title="Living Room Sofa Furniture Protective Stretch Wrapping" class="room-pack-img" width="400" height="200" loading="lazy">
            <div class="room-pack-body">
              <h3 class="room-pack-title">Living Room & Upholstered Sofas</h3>
              <p class="room-pack-text">
                Fabric and leather sofas are shielded against dust, moisture, and stains using a multi-layer technique: soft inner foam padding, thick corrugated edge guards for armrests, and industrial stretch cling film sealing the entire exterior.
              </p>
              <div class="room-pack-tags">
                <span class="room-pack-tag">Stain Shield Wrap</span>
                <span class="room-pack-tag">Armrest Edge Guards</span>
                <span class="room-pack-tag">Moisture Barrier</span>
              </div>
            </div>
          </div>

          <div class="room-pack-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/household-appliances-protective-cover-ranchi.jpg" alt="Household Electronics and Appliances Protective Packing in Ranchi - Shree Ashirwad Packers" title="Household Appliances Protective Covering and Transit Preparation" class="room-pack-img" width="400" height="200" loading="lazy">
            <div class="room-pack-body">
              <h3 class="room-pack-title">Refrigerators & Home Appliances</h3>
              <p class="room-pack-text">
                Washing machine drums are secured with manufacturer transit bolts to prevent motor displacement on highway bumps. Refrigerators are defrosted, interior trays taped, and wrapped with shock-absorbing thermocol corners and laminated bubble film.
              </p>
              <div class="room-pack-tags">
                <span class="room-pack-tag">Transit Drum Bolts</span>
                <span class="room-pack-tag">Compressor Protection</span>
                <span class="room-pack-tag">AC De-installation</span>
              </div>
            </div>
          </div>

          <div class="room-pack-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/fragile-glassware-box-packing-ranchi.jpg" alt="Fragile Glassware and LED TV Wooden Crating in Ranchi - Shree Ashirwad Packers" title="Fragile Glassware and Smart LED TV Secure Packing" class="room-pack-img" width="400" height="200" loading="lazy">
            <div class="room-pack-body">
              <h3 class="room-pack-title">Smart LED TVs & Delicate Glass</h3>
              <p class="room-pack-text">
                Modern 55-inch to 85-inch OLED and LED screens cannot survive ordinary carton packing. We cushion the screen with high-density EPE foam, wrap it in heavy corrugated sheets, and build custom reinforced wooden crates for guaranteed safety.
              </p>
              <div class="room-pack-tags">
                <span class="room-pack-tag">Custom Wooden Crating</span>
                <span class="room-pack-tag">OLED Screen Guards</span>
                <span class="room-pack-tag">Shock Indicators</span>
              </div>
            </div>
          </div>

          <div class="room-pack-card">
            <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Pooja Mandir and Temple Relocation Setup in Ranchi - Shree Ashirwad Packers" title="Pooja Mandir and Temple Relocation Setup Service" class="room-pack-img" width="400" height="200" loading="lazy">
            <div class="room-pack-body">
              <h3 class="room-pack-title">Pooja Mandir & Sacred Deities</h3>
              <p class="room-pack-text">
                We handle your pooja room with the utmost sanctity and respect. Marble and brass idols are wrapped individually in fresh, clean white cotton linen and shockproof bubble padding, placed into marked sacred cartons, and loaded with top priority.
              </p>
              <div class="room-pack-tags">
                <span class="room-pack-tag">Sanctified Handling</span>
                <span class="room-pack-tag">Clean White Linen</span>
                <span class="room-pack-tag">Priority Placement</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- 7. Section 4: Local House Shifting in Ranchi vs Intercity Shifting -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="about-grid">
          
          <div class="about-images-wrapper">
            <div class="about-image-main">
              <img src="<?php echo SITE_BASE_URL; ?>/images/multistory-apartment-goods-loading-ranchi.jpg" alt="Multistory Apartment Household Goods Loading in Ranchi - Shree Ashirwad Packers" title="Multistory Apartment Household Goods Loading by Professional Crew" width="560" height="380" loading="lazy">
              <div class="about-badge-floating">
                <span class="badge-num">24 Dist.</span>
                <span class="badge-txt">Covered Across Jharkhand</span>
              </div>
            </div>
          </div>

          <div class="about-content">
            <div class="section-tag">City & Interstate Coverage</div>
            <h2 class="section-title">
              Local Shifting in Ranchi vs <span class="gradient-text">Intercity Relocation Across India</span>
            </h2>
            
            <p class="about-lead">
              Whether you are moving three streets away within Ranchi or relocating your complete household across states, Shree Ashirwad Packers provides dedicated logistics protocols optimized for distance and terrain.
            </p>

            <h3 style="font-size: 1.2rem; color: var(--primary); margin: 20px 0 8px; font-weight: 800;">
              1. Local Household Shifting Within Ranchi (Same-Day Delivery)
            </h3>
            <p class="about-text">
              For local shifting within Ranchi, timing and coordination are paramount. Our team arrives promptly at your current residence at 8:00 AM, completes multi-layer packing by noon, loads into our compact city container truck, and completes doorstep unloading, bed reassembly, and furniture placement at your new home before 6:00 PM. We actively service all Ranchi localities including <strong>Harmu Housing Colony, Kanke Road, Morabadi, Bariatu, Ashok Nagar, Doranda, Hinoo, Lalpur, Ratu Road, Dhurwa, Tupudana, and Namkum</strong>.
            </p>

            <h3 style="font-size: 1.2rem; color: var(--primary); margin: 20px 0 8px; font-weight: 800;">
              2. Domestic Intercity Shifting Across Jharkhand & Pan-India
            </h3>
            <p class="about-text">
              When shifting long-distance from Ranchi to other Jharkhand industrial hubs (such as <strong>Bokaro Steel City, Jamshedpur, Dhanbad, Deoghar, Hazaribagh, Ramgarh, or Giridih</strong>) or to major metropolitan centers across India (including <strong>New Delhi, Kolkata, Patna, Bengaluru, Mumbai, Pune, and Hyderabad</strong>), we deploy dedicated, sealed, all-weather closed container trucks with real-time GPS tracking. Your household goods travel directly without hub-reloading or sub-contracting, ensuring zero en-route loss or transit damage.
            </p>

          </div>

        </div>

      </div>
    </section>

    <!-- 8. Section 5: Transparent Pricing & Cost Matrix for House Shifting in Ranchi -->
    <section class="section" style="padding: 80px 0; background: #f8fafc;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Zero Hidden Fees</div>
          <h2 class="section-title">
            Transparent <span class="gradient-text">House Shifting Charges in Ranchi</span>
          </h2>
          <p class="section-subtitle">
            Budgeting your move should be simple and predictable. Review our standard cost matrix for local moves within Ranchi and domestic moves across Jharkhand.
          </p>
        </div>

        <div class="comparison-table-wrapper" style="margin-top: 30px;">
          <table class="comp-table">
            <thead>
              <tr>
                <th style="width: 25%;">Apartment Size / Move Type</th>
                <th style="width: 25%;">Packing Materials & Labor</th>
                <th style="width: 25%;">Local Shifting (Within Ranchi)</th>
                <th style="width: 25%;">Intercity Shifting (Jharkhand / Pan-India)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>1 BHK Apartment</strong></td>
                <td>Standard 3-Layer + 2 Movers</td>
                <td><strong style="color: var(--primary);">₹3,500 – ₹6,500</strong></td>
                <td><strong style="color: var(--accent);">₹11,000 – ₹22,000*</strong></td>
              </tr>
              <tr>
                <td><strong>2 BHK Family Flat</strong></td>
                <td>Premium 5-Layer + 4 Movers + Carpenter</td>
                <td><strong style="color: var(--primary);">₹5,500 – ₹10,500</strong></td>
                <td><strong style="color: var(--accent);">₹16,000 – ₹32,000*</strong></td>
              </tr>
              <tr>
                <td><strong>3 BHK Large Residence</strong></td>
                <td>Heavy-Duty Wrap + Crating + 6 Movers</td>
                <td><strong style="color: var(--primary);">₹9,000 – ₹16,000</strong></td>
                <td><strong style="color: var(--accent);">₹24,000 – ₹45,000*</strong></td>
              </tr>
              <tr>
                <td><strong>4 BHK / Bungalow / Villa</strong></td>
                <td>Comprehensive Custom Crating + 8 Movers</td>
                <td><strong style="color: var(--primary);">₹14,000 – ₹24,000</strong></td>
                <td><strong style="color: var(--accent);">₹35,000 – ₹65,000*</strong></td>
              </tr>
              <tr>
                <td><strong>Two-Wheeler / Bike Shifting</strong></td>
                <td>Foam Padding + Bubble Wrap + Wooden Crate</td>
                <td><strong style="color: var(--primary);">₹1,500 – ₹2,500</strong></td>
                <td><strong style="color: var(--accent);">₹4,000 – ₹8,500*</strong></td>
              </tr>
              <tr>
                <td><strong>Car Transport (Sedan/SUV)</strong></td>
                <td>Hydraulic Closed Car Carrier</td>
                <td><strong style="color: var(--primary);">₹2,500 – ₹4,500</strong></td>
                <td><strong style="color: var(--accent);">₹9,000 – ₹19,000*</strong></td>
              </tr>
            </tbody>
          </table>
        </div>

        <p style="font-size: 0.85rem; color: #64748b; margin-top: 14px; text-align: center;">
          *Note: Intercity shifting prices vary based on exact destination distance, toll taxes, applicable GST (5% with ITC or 18%), and optional transit insurance (typically 1.5% of declared goods value). Call our moving manager at <strong>8409531615</strong> for a binding written quote.
        </p>

      </div>
    </section>

    <!-- 9. Section 6: IBA Approved Billing for Bank & Govt Claims -->
    <section class="infra-section">
      <div class="container">
        
        <div class="compliance-box" style="margin-top: 0;">
          <div class="compliance-details">
            <div class="section-tag" style="background: rgba(255,255,255,0.15); color: #fff;">100% Reimbursement Clearance</div>
            <h3 style="font-size: 1.6rem; color: #ffffff; margin: 12px 0;">
              IBA Approved Moving Bills for Bank & Government Employees
            </h3>
            <p style="color: #cbd5e1; line-height: 1.65; margin-bottom: 16px;">
              Are you transferring to or from Ranchi as an officer of <strong>State Bank of India (SBI), Punjab National Bank (PNB), Bank of India, Canara Bank, Indian Railways, Coal India (CCL), SAIL Bokaro, MECON, CMPDI, CRPF, or Indian Army</strong>? Shree Ashirwad Packers provides legitimate IBA-approved bills and 100% GST-compliant invoices accepted for prompt reimbursement without audit queries.
            </p>
            <div class="compliance-badges-row">
              <span class="compliance-badge-pill">&check; Official IBA Lorry Receipt (Bilty / LR)</span>
              <span class="compliance-badge-pill">&check; GST Tax Invoice with SAC Code 996511</span>
              <span class="compliance-badge-pill">&check; Itemized Packing Inventory List</span>
              <span class="compliance-badge-pill">&check; Stamped Money Receipt</span>
              <span class="compliance-badge-pill">&check; Transit Insurance Policy Certificate</span>
            </div>
          </div>
          <div class="text-center">
            <a href="tel:+918409531615" class="btn-primary-custom" title="Inquire About IBA Approved Moving Bills: Call 8409531615">
              Verify IBA Billing: 8409531615
            </a>
          </div>
        </div>

      </div>
    </section>

    <!-- 10. Section 7: Step-by-Step Moving Day Checklist for Homeowners -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Organized Relocation Plan</div>
          <h2 class="section-title">
            Your Stress-Free <span class="gradient-text">Home Shifting Master Checklist</span>
          </h2>
          <p class="section-subtitle">
            Follow this simple, professional moving roadmap to make your household transition completely organized and effortless.
          </p>
        </div>

        <div class="checklist-grid">
          
          <div class="checklist-card">
            <span class="checklist-step">Phase 1: 7 Days Prior</span>
            <h3 class="checklist-title">Planning & Survey</h3>
            <ul class="checklist-items">
              <li>Schedule your free in-home physical survey with Shree Ashirwad Packers.</li>
              <li>Declutter old clothes, expired pantry items, and broken furniture.</li>
              <li>Inform your society management / RWA regarding the moving truck date.</li>
              <li>Separate essential personal documents, property papers, and passports.</li>
            </ul>
          </div>

          <div class="checklist-card">
            <span class="checklist-step">Phase 2: 2 Days Prior</span>
            <h3 class="checklist-title">Appliance Preparation</h3>
            <ul class="checklist-items">
              <li>Defrost your refrigerator and clean moisture trays completely.</li>
              <li>Empty fuel tanks of motorcycles and scooters if transporting vehicles.</li>
              <li>Pack an "Essentials First-Night Box" with toiletries, chargers, and medicines.</li>
              <li>Secure valuable gold jewelry, cash, and luxury watches in your personal bag.</li>
            </ul>
          </div>

          <div class="checklist-card">
            <span class="checklist-step">Phase 3: Moving Morning</span>
            <h3 class="checklist-title">Packing & Container Loading</h3>
            <ul class="checklist-items">
              <li>Meet our supervisor and review the room-by-room packing sequence.</li>
              <li>Inspect 5-layer wrapping on fragile chinaware, TV crates, and furniture.</li>
              <li>Sign off on the numbered itemized inventory list before container dispatch.</li>
              <li>Verify the company container metal lock and note the truck driver details.</li>
            </ul>
          </div>

          <div class="checklist-card">
            <span class="checklist-step">Phase 4: Destination Arrival</span>
            <h3 class="checklist-title">Unloading & Room Setup</h3>
            <ul class="checklist-items">
              <li>Guide crew to place numbered cartons into their respective bedrooms.</li>
              <li>Have our carpenters assemble your hydraulic beds, wardrobes, and tables.</li>
              <li>Inspect fragile boxes and electronics before signing the delivery slip.</li>
              <li>Our team clears all empty cartons, bubble wrap, and packing debris.</li>
            </ul>
          </div>

        </div>

      </div>
    </section>

    <!-- 11. Section 8: Comparison: Shree Ashirwad vs Local Street Movers -->
    <section class="comparison-section">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Quality Difference</div>
          <h2 class="section-title">
            Why Choose <span class="gradient-text">Shree Ashirwad Packers</span> vs Unorganized Local Movers?
          </h2>
          <p class="section-subtitle">
            See the concrete differences between certified professional house movers and casual transport contractors.
          </p>
        </div>

        <div class="comparison-table-wrapper">
          <table class="comp-table">
            <thead>
              <tr>
                <th style="width: 34%;">Quality Benchmark / Service Standard</th>
                <th class="col-brand" style="width: 33%;">Shree Ashirwad Packers and Movers</th>
                <th class="col-brokers" style="width: 33%;">Unverified Local Shifting Operators</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Accreditation & Quality Standards</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; IBA Approved & ISO 9001:2015 Certified</span></td>
                <td><span class="badge-no">&#x2717; Unregistered Local Handyman Groups</span></td>
              </tr>
              <tr>
                <td><strong>Packing Material Quality</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; 5-Layer (Virgin Bubble + 7-Ply Cartons + Foam)</span></td>
                <td><span class="badge-no">&#x2717; Used Grocery Cartons & Thin Tapes</span></td>
              </tr>
              <tr>
                <td><strong>Furniture Assembly & Carpentry</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; In-House Carpenters for Hydraulic Beds & Wardrobes</span></td>
                <td><span class="badge-no">&#x2717; Untrained Laborers Damaging Screws & Veneer</span></td>
              </tr>
              <tr>
                <td><strong>Fleet & Truck Ownership</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Company-Owned Sealed Metal Container Trucks</span></td>
                <td><span class="badge-no">&#x2717; Open Rental Trucks with Leaky Tarpaulins</span></td>
              </tr>
              <tr>
                <td><strong>Pricing Integrity</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; All-Inclusive Written Quote with Zero Hidden Fees</span></td>
                <td><span class="badge-no">&#x2717; Low Bait Quotes with Mid-Move Extortions</span></td>
              </tr>
              <tr>
                <td><strong>Transit Insurance Protection</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Full Value Insurance via Nationalized Insurers</span></td>
                <td><span class="badge-no">&#x2717; No Insurance Coverage or False Verbal Claims</span></td>
              </tr>
              <tr>
                <td><strong>Employer Reimbursement Bills</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; 100% Audit-Approved Legal Bilty & GST Bills</span></td>
                <td><span class="badge-no">&#x2717; Handwritten Kacha Slips (Rejected by Accounts)</span></td>
              </tr>
              <tr>
                <td><strong>Post-Move Unpacking & Setup</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Room-by-Room Setup & Debris Removal Included</span></td>
                <td><span class="badge-no">&#x2717; Dump Goods in Living Room and Leave</span></td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </section>

    <!-- Real Customer Reviews from Google My Business (GMB) -->
    <?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

    <!-- 12. Section 9: Frequently Asked Questions (FAQ) on Residential Shifting -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Clear Answers</div>
          <h2 class="section-title">
            Frequently Asked Questions on <span class="gradient-text">Residential Shifting in Ranchi</span>
          </h2>
          <p class="section-subtitle">
            Find answers to common questions about house shifting costs, packaging safety, booking timelines, and transit insurance.
          </p>
        </div>

        <div class="about-faq-grid">
          
          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>How much does residential shifting cost in Ranchi?</span>
            </div>
            <p class="about-faq-a">
              Local residential shifting in Ranchi typically costs ₹3,500 to ₹6,500 for a 1 BHK flat, ₹5,500 to ₹10,500 for a 2 BHK family home, and ₹9,000 to ₹16,000 for a 3 BHK luxury apartment. Exact pricing depends on packing material density, floor levels, elevator access, and custom wooden crating requirements.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>Do your carpenters dismantle and assemble modular double beds and wardrobes?</span>
            </div>
            <p class="about-faq-a">
              Yes, absolutely. Our moving team includes trained furniture carpenters who expertly dismantle complex hydraulic king-size beds, sliding modular wardrobes, and multi-piece dining sets at your origin home and reassemble them securely in your new residence.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>How do you protect fragile kitchen crockery and large smart LED TVs?</span>
            </div>
            <p class="about-faq-a">
              We employ a certified 5-layer packaging method: virgin 100 GSM air bubble film, EPE shock foam, heavy-duty 7-ply corrugated sheets, and corner edge guards. For high-value LED/OLED televisions and marble statues, we fabricate custom wooden crates for 100% impact protection.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>Are your moving bills officially IBA approved for Bank and Govt employee claims?</span>
            </div>
            <p class="about-faq-a">
              Yes, 100%. Shree Ashirwad Packers provides legitimate IBA-approved bills and 100% GST-compliant invoices (SAC 996511) accepted for transfer claims by State Bank of India (SBI), Punjab National Bank (PNB), Bank of India, Canara Bank, Railways, Coal India (CCL), SAIL Bokaro, CMPDI, and Central Defence units.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>How long does a local household shifting move take in Ranchi?</span>
            </div>
            <p class="about-faq-a">
              A standard 1 BHK or 2 BHK local move in Ranchi is completed within 5 to 8 hours on the very same day. Our crew arrives by 8:00 AM, finishes packing and loading by noon, and completes delivery, reassembly, and debris cleanup by late afternoon.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>How far in advance should I book Shree Ashirwad Packers for house shifting?</span>
            </div>
            <p class="about-faq-a">
              We recommend reserving your shifting date 24 to 48 hours in advance for local Ranchi relocations, and 3 to 5 days prior for intercity moves across Jharkhand or interstate. Same-day emergency bookings are also accommodated subject to container truck availability.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>What should I do with cash, jewelry, and personal confidential documents?</span>
            </div>
            <p class="about-faq-a">
              Under strict safety regulations, we advise all customers to personally carry valuable jewelry, hard cash, laptop data backups, and critical property/identity documents in their personal handbags during the move.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>What type of transit insurance is offered for domestic house shifting?</span>
            </div>
            <p class="about-faq-a">
              We offer comprehensive transit insurance underwritten by leading nationalized insurance companies. This covers physical loss or damage caused by fire, vehicle collision, overturning, or unforeseen highway transit hazards under Full Value Protection.
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
            <span class="cta-badge">Schedule Your Home Move Today</span>
            <h2 class="cta-title">
              Book Jharkhand's Most Trusted <span class="gradient-text">Residential Shifting in Ranchi</span>
            </h2>
            <p class="cta-subtitle">
              Ready for a smooth, hassle-free moving experience? Call our certified moving manager at <strong>8409531615</strong> or <strong>9835565233</strong> for an instant free home survey and guaranteed transparent pricing.
            </p>
            <div class="cta-buttons-row">
              <a href="tel:+918409531615" class="btn-cta-phone" title="Call Shree Ashirwad Packers at 8409531615">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
                <span>Call Hotline: <strong>8409531615</strong></span>
              </a>
              <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn-cta-whatsapp" title="Chat with Shree Ashirwad Packers on WhatsApp">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2z"/></svg>
                <span>WhatsApp Instant Estimate</span>
              </a>
            </div>
            <div class="cta-trust-items">
              <span>&check; 25,000+ Homes Relocated</span>
              <span>&check; 100% IBA Approved Bills</span>
              <span>&check; 4.9/5 Google Rating</span>
              <span>&check; Zero Damage Guarantee</span>
            </div>
          </div>
        </div>

        <!-- Localized Ranchi Localities & Jharkhand District Links -->
        <div class="neighborhoods-card" style="margin-top: 40px;">
          <h3 class="neighborhoods-title">
            <svg viewBox="0 0 24 24" width="20" height="20"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
            Professional Residential Shifting Coverage Across Ranchi & Jharkhand
          </h3>
          <p style="font-size: 0.9rem; color: #64748b; margin-bottom: 16px;">
            Our local home shifting and packing crews provide rapid dispatch across all Ranchi residential and commercial sectors:
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
