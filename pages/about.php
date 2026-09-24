<?php
/**
 * About Us Page - Shree Ashirwad Packers and Movers
 * Pure Core PHP Implementation
 * 
 * Deep E-E-A-T Content, Official Credentials, Company History, Fleet & Quality Standards
 * Preserving exact canonical URL: https://www.shreeashirwadpackers.com/about
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
  
  <!-- SEO & Schema Markup (AboutPage, Organization, FAQPage & BreadcrumbList) -->
  <?php render_seo_tags('about'); ?>

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

    <!-- 2. Page Hero & Interactive Breadcrumbs -->
    <section class="page-hero">
      <div class="hero-glow hero-glow-1"></div>
      <div class="hero-glow hero-glow-2"></div>
      <div class="container page-hero-wrapper">
        <nav class="breadcrumb-trail" aria-label="Breadcrumb">
          <a href="<?php echo SITE_BASE_URL; ?>/" title="Return to Shree Ashirwad Packers Homepage">Home</a>
          <span class="breadcrumb-sep">&gt;</span>
          <span aria-current="page">About Us</span>
        </nav>
        <h1 class="page-hero-title">
          About <span class="gradient-text">Shree Ashirwad Packers</span> and Movers
        </h1>
        <p class="page-hero-subtitle">
          Discover our 15-year journey from a localized moving service in Harmu, Ranchi to Jharkhand's most trusted, IBA-approved, and ISO 9001:2015 certified relocation enterprise.
        </p>
      </div>
    </section>

    <!-- 3. Credentials & Live Impact Stats -->
    <section class="credentials-bar-section">
      <div class="container">
        <div class="credentials-grid">
          
          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">4.9 / 5.0</span>
              <span class="credential-title">Google Verified Rating</span>
              <span class="credential-sub">664+ Reviews • Top Packers and Movers in Ranchi</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">15+ Years</span>
              <span class="credential-title">Proven Excellence</span>
              <span class="credential-sub">Trusted Packers and Movers in Ranchi Since 2009</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">100% IBA Approved</span>
              <span class="credential-title">Government & Bank Claims</span>
              <span class="credential-sub">IBA Approved Packers and Movers in Ranchi</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">25,000+</span>
              <span class="credential-title">Successful Relocations</span>
              <span class="credential-sub">ISO Certified Packers and Movers in Ranchi</span>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- 4. Our Origin Story & 15-Year Evolution -->
    <section class="about-section" style="padding: 80px 0;">
      <div class="container">
        <div class="about-grid">
          
          <div class="about-images-wrapper">
            <div class="about-image-main">
              <img src="<?php echo SITE_BASE_URL; ?>/images/professional-loading-crew-ranchi.jpg" alt="Professional Loading Crew - Shree Ashirwad Packers and Movers Ranchi" title="Professional Packers and Movers in Ranchi Loading Household Goods" width="560" height="380" loading="lazy">
              <div class="about-badge-floating">
                <span class="badge-num">2009</span>
                <span class="badge-txt">Founded in Harmu, Ranchi</span>
              </div>
            </div>
            <div class="about-image-sub">
              <img src="<?php echo SITE_BASE_URL; ?>/images/shree-ashirwad-verified-moving-truck-jharkhand.jpg" alt="Verified Company Owned Container Trucks - Shree Ashirwad Packers Jharkhand" title="Company Owned Container Moving Trucks - Shree Ashirwad Packers" width="280" height="190" loading="lazy">
            </div>
          </div>

          <div class="about-content">
            <div class="section-tag">Our History & Legacy</div>
            <h2 class="section-title">
              Pioneering Safe Relocation as <span class="gradient-text">Packers and Movers in Ranchi Jharkhand</span>
            </h2>
            
            <p class="about-lead">
              Established in 2009 in <strong>Harmu, Ranchi</strong>, <strong>Shree Ashirwad Packers and Movers</strong> was founded with a clear, unwavering mission: to transform the unorganized, stressful moving sector across Eastern India by establishing corporate professionalism, ethical pricing, and zero-compromise safety standards.
            </p>

            <p class="about-text">
              Fifteen years ago, families and transferring corporate executives across Jharkhand had very few reliable options. Shifting household goods meant relying on informal hand-cart operators, open transport trucks covered with leaky tarpaulins, and casual daily-wage laborers who had never received formal training in handling fragile goods. Transit damage was frequent, hidden charges surfaced mid-move, and bank employees struggled to get their shifting bills reimbursed.
            </p>

            <p class="about-text">
              Recognizing this critical void, Shree Ashirwad Packers introduced corporate standards to Jharkhand's logistics landscape. We invested in dedicated company-owned closed container trucks, established our headquarters on Harmu Bypass Road in Ranchi, and inaugurated a full-service branch at Sector 12/A in <strong>Bokaro Steel City</strong>.
            </p>

            <p class="about-text">
              Today, as recognized <strong>top packers and movers in ranchi</strong> and <strong>best packers and movers in ranchi</strong>, we have safely shifted more than 25,000 households, bank managers, defense officers, doctors, and businesses. Our active operations cover every corner of Jharkhand—including Jamshedpur, Dhanbad, Bokaro, Deoghar, Hazaribagh, Ramgarh, Giridih, Chaibasa, and Medininagar—while providing express interstate connections to New Delhi, Kolkata, Patna, Bengaluru, Mumbai, and Hyderabad.
            </p>

            <div class="about-cta-row">
              <a href="tel:+918409531615" class="btn-primary-custom" title="Call Shree Ashirwad Packers Moving Manager at 8409531615">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
                Call Office: 8409531615
              </a>
              <a href="<?php echo SITE_BASE_URL; ?>/contact" class="btn-outline-custom" title="Contact Shree Ashirwad Packers and Movers Ranchi Office">Reach Our Ranchi Office &rarr;</a>
            </div>

          </div>

        </div>

        <!-- 15-Year Timeline Milestones -->
        <div class="timeline-grid">
          <div class="timeline-card">
            <div class="timeline-year">2009</div>
            <h3 class="timeline-title">Foundation in Harmu, Ranchi</h3>
            <p class="timeline-desc">Inaugurated our first registered operations office near Vidyanagar Road, Harmu, providing personalized local household relocation with our first dedicated vehicle.</p>
          </div>
          <div class="timeline-card">
            <div class="timeline-year">2014</div>
            <h3 class="timeline-title">Container Fleet & Bokaro Branch</h3>
            <p class="timeline-desc">Acquired our dedicated fleet of all-weather closed container trucks and opened our Sector 12/A operational branch in Bokaro Steel City to serve industrial employees.</p>
          </div>
          <div class="timeline-card">
            <div class="timeline-year">2019</div>
            <h3 class="timeline-title">IBA Approval & ISO Certification</h3>
            <p class="timeline-desc">Achieved ISO 9001:2015 quality accreditation and standardized complete IBA-approved billing systems for nationalized bank and central government employee transfer claims.</p>
          </div>
          <div class="timeline-card">
            <div class="timeline-year">Present</div>
            <h3 class="timeline-title">25,000+ Moves & Pan-India Reach</h3>
            <p class="timeline-desc">Crossed 25,000+ completed relocations with a 4.9★ Google rating from 664+ verified reviews, operating daily express container routes across all 28 Indian states.</p>
          </div>
        </div>

      </div>
    </section>

    <!-- 5. Mission, Vision & Core Values -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Principles That Guide Every Move</div>
          <h2 class="section-title">
            Our Mission, Vision & <span class="gradient-text">Core Operational Pillars</span>
          </h2>
          <p class="section-subtitle">
            At <strong>Shree Ashirwad Packers and Movers</strong>, we don't just transport boxes; we protect memories, life investments, and family heirlooms. Our operations are anchored in four non-negotiable principles.
          </p>
        </div>

        <div class="pillars-grid">
          
          <div class="pillar-card">
            <div class="pillar-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
            </div>
            <h3 class="pillar-title">1. Absolute Zero-Damage Safety</h3>
            <p class="pillar-text">
              We treat every glassware set, antique wooden wardrobe, and electronic appliance as irreplaceable. By utilizing engineered 5-layer packaging materials and hydraulic container trucks, we ensure every article reaches your new doorstep in pristine original condition.
            </p>
          </div>

          <div class="pillar-card">
            <div class="pillar-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
            </div>
            <h3 class="pillar-title">2. 100% Upfront Transparency</h3>
            <p class="pillar-text">
              No hidden costs, no surprise fuel levies, and no sudden bargaining on moving morning. Our written quotation clearly specifies packing supplies, loading labor, transport mileage, and toll fees so you can plan your shifting budget with total confidence.
            </p>
          </div>

          <div class="pillar-card">
            <div class="pillar-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
            </div>
            <h3 class="pillar-title">3. Punctuality & Timeline Discipline</h3>
            <p class="pillar-text">
              Time is precious when settling into a new home or resuming commercial operations. We enforce strict schedule commitments, ensuring prompt morning arrival of packing teams, timely highway transit, and scheduled room-by-room delivery.
            </p>
          </div>

          <div class="pillar-card">
            <div class="pillar-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
            </div>
            <h3 class="pillar-title">4. Customer-Centric Empathy</h3>
            <p class="pillar-text">
              Moving home can be emotionally taxing. Our courteous, polite, and uniformed personnel provide hands-on assistance, patient handling of family elders' requests, and dedicated relocation managers accessible 24/7 on our direct contact line.
            </p>
          </div>

        </div>

      </div>
    </section>

    <!-- 6. Company Infrastructure, Container Fleet & Warehousing -->
    <section class="infra-section">
      <div class="container">
        <div class="infra-grid">
          
          <div class="infra-details">
            <div class="section-tag">Logistics Infrastructure</div>
            <h2 class="section-title">
              Company-Owned Fleet & <span class="gradient-text">Advanced Moving Infrastructure</span>
            </h2>
            <p class="about-lead">
              Unlike online booking portals or aggregator platforms that broker consignments to unverified third-party transporters, <strong>Shree Ashirwad Packers and Movers</strong> owns and operates an extensive in-house logistics fleet across Jharkhand.
            </p>
            <p class="about-text">
              Our fleet comprises custom-built, all-weather closed container trucks (ranging from 14-foot local city carriers to 32-foot multi-axle interstate containers). Every vehicle features GPS telemetry for continuous transit tracking, waterproof sealed metal bodies, and specialized internal tie-down anchor rings preventing road cargo displacement on highway curves.
            </p>

            <ul class="infra-checklist">
              <li>
                <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                <span><strong>Dedicated Closed Containers:</strong> Sealed against monsoon downpours, highway soot, dust storms, and road vibrations.</span>
              </li>
              <li>
                <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                <span><strong>Hydraulic Ramp Equipment:</strong> Smooth four-wheeler car carrier loading without bumper scrapes or undercarriage impact.</span>
              </li>
              <li>
                <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                <span><strong>Secure Elevated Warehouses:</strong> 24/7 CCTV surveillance, fire-retardant infrastructure, and pest-controlled moisture-free storage in Ranchi & Bokaro.</span>
              </li>
              <li>
                <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                <span><strong>Advanced Handling Gear:</strong> Industrial furniture dollies, stair-climbing straps, and heavy machinery jacks for safe multistory shifting.</span>
              </li>
            </ul>
          </div>

          <div class="infra-images-grid">
            <div class="infra-img-card">
              <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe Transit Closed Container Truck Ranchi - Shree Ashirwad Packers" title="Safe Transit Closed Container Truck in Ranchi" width="400" height="260" loading="lazy">
            </div>
            <div class="infra-img-card">
              <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Warehouse Storage Facility Ranchi - Shree Ashirwad Packers" title="Commercial Goods Storage and Household Warehousing in Ranchi" width="400" height="260" loading="lazy">
            </div>
            <div class="infra-img-card">
              <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to Door Delivery Moving Truck Jharkhand - Shree Ashirwad Packers" title="Door-to-Door Delivery Moving Truck in Jharkhand" width="400" height="260" loading="lazy">
            </div>
            <div class="infra-img-card">
              <img src="<?php echo SITE_BASE_URL; ?>/images/office-equipment-secure-packing-jamshedpur.jpg" alt="Office Equipment Secure Packing - Shree Ashirwad Packers Jamshedpur" title="Office Equipment and Commercial Relocation Packing" width="400" height="260" loading="lazy">
            </div>
          </div>

        </div>

        <!-- Compliance & Accreditation Banner Card -->
        <div class="compliance-box">
          <div class="compliance-details">
            <h3>Certified, Audited & Legally Compliant Shifting</h3>
            <p>
              As accredited <strong>iba approved packers and movers in ranchi</strong> and <strong>iso certified packers and movers in ranchi</strong>, we provide legitimate 5-document reimbursement kits required by Government departments, Central PSUs, and nationalized banks across India.
            </p>
            <div class="compliance-badges-row">
              <span class="compliance-badge-pill">&check; IBA Approved Moving Bills</span>
              <span class="compliance-badge-pill">&check; ISO 9001:2015 Certified</span>
              <span class="compliance-badge-pill">&check; 100% GST Tax Invoices (SAC 996511)</span>
              <span class="compliance-badge-pill">&check; Registered PAN & Trade Licenses</span>
            </div>
          </div>
          <div class="text-center">
            <a href="tel:+918409531615" class="btn-primary-custom" title="Inquire About IBA Approved Moving Bills: Call 8409531615">
              Verify Credentials: 8409531615
            </a>
          </div>
        </div>

      </div>
    </section>

    <!-- 7. Trained Moving Crew vs Daily Wage Labor -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="about-grid">
          
          <div class="about-images-wrapper">
            <div class="about-image-main">
              <img src="<?php echo SITE_BASE_URL; ?>/images/multistory-apartment-goods-loading-ranchi.jpg" alt="Trained Crew Loading Multi-Story Apartment - Shree Ashirwad Packers Ranchi" title="Trained Moving Crew Loading Multi-Story Apartment in Ranchi" width="560" height="380" loading="lazy">
              <div class="about-badge-floating">
                <span class="badge-num">100%</span>
                <span class="badge-txt">Background Verified Staff</span>
              </div>
            </div>
          </div>

          <div class="about-content">
            <div class="section-tag">Human Expertise Matters</div>
            <h2 class="section-title">
              Our Permanent, Trained Crew vs <span class="gradient-text">Unskilled Daily Labor</span>
            </h2>
            
            <p class="about-lead">
              The safety of your valuable household belongings depends directly on the people who handle them. Most local shifting contractors in Ranchi hire casual daily-wage laborers from street corners who lack basic packaging discipline, furniture assembly knowledge, or background screening.
            </p>

            <p class="about-text">
              At <strong>Shree Ashirwad Packers and Movers</strong>, we maintain an in-house, permanent team of full-time packing and loading technicians. Every crew member undergoes rigorous police verification, identity background screening, and hands-on packaging training before entering a customer's private residence.
            </p>

            <div class="about-features-list">
              <div class="about-feature-box">
                <div class="feature-icon-wrap">
                  <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                </div>
                <div class="feature-box-text">
                  <strong>Master Furniture Carpenters:</strong> Expert dismantling and reassembly of complex modular wardrobes, hydraulic king-size beds, modular computer workstations, and dining tables.
                </div>
              </div>

              <div class="about-feature-box">
                <div class="feature-icon-wrap">
                  <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                </div>
                <div class="feature-box-text">
                  <strong>Delicate Glassware Specialists:</strong> Individual bubble-pack wrapping and custom foam cell positioning for fragile porcelain, bone china dinner sets, temple mandir idols, and crystals.
                </div>
              </div>

              <div class="about-feature-box">
                <div class="feature-icon-wrap">
                  <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                </div>
                <div class="feature-box-text">
                  <strong>Dedicated Moving Supervisor:</strong> An experienced English and Hindi-speaking supervisor stays on-site from the initial packing tape roll to final room placement and debris clean-up.
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section>

    <!-- 8. Our 5-Step Precision Relocation Methodology -->
    <section class="section" style="padding: 80px 0; background: #f8fafc;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Standard Operating Procedure</div>
          <h2 class="section-title">
            Our Certified <span class="gradient-text">5-Step Relocation Methodology</span>
          </h2>
          <p class="section-subtitle">
            Every relocation executed by <strong>trusted packers and movers in ranchi</strong> follows a rigorous, time-tested process designed to eliminate moving stress and ensure zero damage from start to finish.
          </p>
        </div>

        <div class="process-5steps-grid">
          
          <div class="process-5step-card">
            <span class="step-num-pill">Step 01</span>
            <h3 class="step-card-title">Pre-Move Survey & Accurate Estimate</h3>
            <p class="step-card-desc">
              We conduct a comprehensive in-home physical survey or video walkthrough to evaluate your volume, identify delicate articles, assess elevator/staircase access, and provide an all-inclusive binding written estimate.
            </p>
          </div>

          <div class="process-5step-card">
            <span class="step-num-pill">Step 02</span>
            <h3 class="step-card-title">Scientific 5-Layer Protective Packing</h3>
            <p class="step-card-desc">
              Our specialists wrap goods with virgin bubble wrap, EPE foam sheets, heavy-duty 7-ply corrugated sheets, edge protectors, and waterproof stretch cling film. Custom wooden crates are built for large LED TVs and marble statues.
            </p>
          </div>

          <div class="process-5step-card">
            <span class="step-num-pill">Step 03</span>
            <h3 class="step-card-title">Engineered Container Loading</h3>
            <p class="step-card-desc">
              Heavy goods form the base layer, followed by medium cartons, with fragile boxes secured at the top. Everything is strapped securely using high-tensile ratchet belts inside our company-owned closed container vehicles.
            </p>
          </div>

          <div class="process-5step-card">
            <span class="step-num-pill">Step 04</span>
            <h3 class="step-card-title">GPS Tracked Highway Transit</h3>
            <p class="step-card-desc">
              Your consignment travels in sealed metal containers with continuous satellite GPS tracking. You receive real-time location updates from our central moving dispatch manager until arrival at the destination city.
            </p>
          </div>

          <div class="process-5step-card">
            <span class="step-num-pill">Step 05</span>
            <h3 class="step-card-title">Doorstep Setup & Clean-up</h3>
            <p class="step-card-desc">
              Our crew unloads, unpacks, and places each furniture item into your designated rooms. Beds and wardrobes are reassembled, appliances connected, and all used packing debris is cleaned up before our team departs.
            </p>
          </div>

        </div>

      </div>
    </section>

    <!-- 9. Spectrum of Specialized Services Across Jharkhand -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Comprehensive Shifting Solutions</div>
          <h2 class="section-title">
            Relocation Services Offered Across <span class="gradient-text">Jharkhand & Pan-India</span>
          </h2>
          <p class="section-subtitle">
            Whether shifting a studio apartment locally in Ranchi or relocating a corporate branch to another state, Shree Ashirwad Packers offers tailored moving solutions with dedicated specialized equipment.
          </p>
        </div>

        <div class="services-chips-grid">
          
          <div class="service-chip-card">
            <h4>Household Shifting Services in Ranchi</h4>
            <p>
              Complete home relocation for 1 BHK, 2 BHK, 3 BHK flats and independent bungalows in Ranchi, Bokaro, Jamshedpur, and Dhanbad with room-by-room unpacking.
            </p>
            <a href="<?php echo SITE_BASE_URL; ?>/residential-shifting/" class="service-chip-link" title="Explore Household Shifting Services in Ranchi">Learn more &rarr;</a>
          </div>

          <div class="service-chip-card">
            <h4>Office Shifting Services in Ranchi</h4>
            <p>
              Zero-downtime commercial corporate relocation including server racks, modular workstations, executive desks, conference rooms, and sensitive file archives.
            </p>
            <a href="<?php echo SITE_BASE_URL; ?>/business-shifting/" class="service-chip-link" title="Explore Office Shifting Services in Ranchi">Learn more &rarr;</a>
          </div>

          <div class="service-chip-card">
            <h4>Car Transport in Ranchi</h4>
            <p>
              Door-to-door hydraulic closed car carrier service ensuring scratch-free, zero-odometer transit for hatchbacks, sedans, and luxury SUVs across India.
            </p>
            <a href="<?php echo SITE_BASE_URL; ?>/vehicle-shifting/" class="service-chip-link" title="Explore Car Transport Services in Ranchi">Learn more &rarr;</a>
          </div>

          <div class="service-chip-card">
            <h4>Bike Transport in Ranchi</h4>
            <p>
              Specialized two-wheeler motorcycle and scooter packaging using thick foam wrapping, bubble wrap, and sturdy wooden crate enclosures to prevent scratches.
            </p>
            <a href="<?php echo SITE_BASE_URL; ?>/vehicle-shifting/" class="service-chip-link" title="Explore Bike Transport Services in Ranchi">Learn more &rarr;</a>
          </div>

          <div class="service-chip-card">
            <h4>Warehousing & Household Goods Storage</h4>
            <p>
              Secure, elevated, CCTV-monitored, moisture-free and pest-controlled storage facilities in Ranchi and Bokaro for flexible short-term and long-term storage needs.
            </p>
            <a href="<?php echo SITE_BASE_URL; ?>/warehouse-service/" class="service-chip-link" title="Explore Warehousing Storage in Ranchi">Learn more &rarr;</a>
          </div>

          <div class="service-chip-card">
            <h4>Interstate Relocation Pan-India</h4>
            <p>
              Daily container departures connecting Ranchi, Bokaro, and Jamshedpur to major Indian cities including Delhi NCR, Kolkata, Patna, Bengaluru, Mumbai, and Chennai.
            </p>
            <a href="<?php echo SITE_BASE_URL; ?>/domestics-service/" class="service-chip-link" title="Explore Interstate Moving Services">Learn more &rarr;</a>
          </div>

        </div>

      </div>
    </section>

    <!-- 10. Side-by-Side Comparison Table: Shree Ashirwad vs Local Brokers -->
    <section class="comparison-section">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Clear Distinction</div>
          <h2 class="section-title">
            Why Choose <span class="gradient-text">Shree Ashirwad Packers</span> vs Unorganized Local Movers?
          </h2>
          <p class="section-subtitle">
            See the concrete operational differences that make Shree Ashirwad Packers the safest, most dependable relocation partner across Jharkhand.
          </p>
        </div>

        <div class="comparison-table-wrapper">
          <table class="comp-table">
            <thead>
              <tr>
                <th style="width: 34%;">Service Feature / Quality Benchmark</th>
                <th class="col-brand" style="width: 33%;">Shree Ashirwad Packers and Movers</th>
                <th class="col-brokers" style="width: 33%;">Unverified Brokers & Local Transporters</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Company Accreditation & Licensing</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; IBA Approved & ISO 9001:2015 Certified</span></td>
                <td><span class="badge-no">&#x2717; Unregistered or Third-Party Intermediaries</span></td>
              </tr>
              <tr>
                <td><strong>Billing & GST Tax Invoices</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; 100% Audit-Approved Legal Invoices</span></td>
                <td><span class="badge-no">&#x2717; Handwritten Kacha Receipts (Rejected in Claims)</span></td>
              </tr>
              <tr>
                <td><strong>Fleet Ownership</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Dedicated Company-Owned Closed Containers</span></td>
                <td><span class="badge-no">&#x2717; Rented Open Trucks Covered with Tarpaulins</span></td>
              </tr>
              <tr>
                <td><strong>Labor Quality & Safety</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Background-Verified, Permanent Moving Staff</span></td>
                <td><span class="badge-no">&#x2717; Untrained Casual Daily-Wage Laborers</span></td>
              </tr>
              <tr>
                <td><strong>Packaging Standards</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Engineered 5-Layer (Bubble + 7-Ply Boxes + Foam)</span></td>
                <td><span class="badge-no">&#x2717; Cheap Recycled Cartons & Thin Tapes</span></td>
              </tr>
              <tr>
                <td><strong>Pricing Structure</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Binding Transparent Quote (Zero Hidden Fees)</span></td>
                <td><span class="badge-no">&#x2717; Low Initial Bait Quote with Sudden Moving-Day Extortions</span></td>
              </tr>
              <tr>
                <td><strong>Transit Insurance Support</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Full Value Protection with Nationalized Insurers</span></td>
                <td><span class="badge-no">&#x2717; No Formal Policy or False Verbal Promises</span></td>
              </tr>
              <tr>
                <td><strong>Physical Office in Jharkhand</strong></td>
                <td class="col-brand"><span class="badge-yes">&check; Established Offices in Harmu (Ranchi) & Bokaro</span></td>
                <td><span class="badge-no">&#x2717; Virtual Address or Call-Center Broker Setup</span></td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </section>

    <!-- 11. Frequently Asked Questions (FAQ) Section -->
    <section class="section" style="padding: 80px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-header text-center">
          <div class="section-tag">Frequently Asked Questions</div>
          <h2 class="section-title">
            Questions About <span class="gradient-text">Shree Ashirwad Packers and Movers</span>
          </h2>
          <p class="section-subtitle">
            Get clear, authentic answers about our credentials, fleet ownership, IBA approval, moving insurance, and service coverage across Jharkhand.
          </p>
        </div>

        <div class="about-faq-grid">
          
          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>Who is the owner and management of Shree Ashirwad Packers?</span>
            </div>
            <p class="about-faq-a">
              Shree Ashirwad Packers and Movers is an established independent logistics enterprise founded in 2009 in Harmu, Ranchi. It is actively operated by experienced logistics directors with over 15 years of hands-on relocation experience across Jharkhand, ensuring direct personal accountability for every move.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>Are your moving bills officially IBA approved for Bank and Govt claims?</span>
            </div>
            <p class="about-faq-a">
              Yes, 100%. We provide legitimate IBA-approved bills and 100% GST-compliant invoices (SAC 996511) accepted for transfer reimbursement by State Bank of India (SBI), Punjab National Bank (PNB), Canara Bank, Bank of India, Indian Railways, Coal India (CCL), SAIL Bokaro, CMPDI, MECON, CRPF, and Central Defence units.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>Does Shree Ashirwad Packers own its moving container trucks?</span>
            </div>
            <p class="about-faq-a">
              Yes. Unlike moving brokers or aggregator websites who outsource consignments to unverified third-party transporters, Shree Ashirwad Packers owns and operates a dedicated fleet of all-weather, sealed container vehicles equipped with real-time GPS tracking and internal cargo tie-downs.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>Which cities and districts in Jharkhand do you cover?</span>
            </div>
            <p class="about-faq-a">
              We operate primary branches in Ranchi (Harmu Bypass Road) and Bokaro Steel City (Sector 12/A), with full service coverage across all 24 districts of Jharkhand, including Jamshedpur, Dhanbad, Deoghar, Hazaribagh, Ramgarh, Giridih, Chaibasa, Medininagar, Dumka, and Koderma.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>What type of moving insurance is provided for household goods?</span>
            </div>
            <p class="about-faq-a">
              We provide 100% Comprehensive Transit Insurance with leading nationalized insurance companies covering risks of fire, highway collision, vehicle overturning, and natural calamities under Full Value Protection for complete financial safety.
            </p>
          </div>

          <div class="about-faq-card">
            <div class="about-faq-q">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
              <span>How can I book or contact Shree Ashirwad Packers for a survey?</span>
            </div>
            <p class="about-faq-a">
              You can call our direct customer helpline at <strong>8409531615</strong> or <strong>9835565233</strong>, or connect via WhatsApp to schedule a free in-home physical survey or instant video estimate with a relocation consultant.
            </p>
          </div>

        </div>

      </div>
    </section>

    <!-- 12. Pre-Footer Call to Action (CTA) -->
    <section class="cta-banner-section">
      <div class="container">
        <div class="cta-banner-card">
          <div class="cta-banner-glow"></div>
          <div class="cta-banner-content">
            <span class="cta-badge">Experience Effortless Shifting</span>
            <h2 class="cta-title">
              Connect with Jharkhand's <span class="gradient-text">Top Packers and Movers in Ranchi</span>
            </h2>
            <p class="cta-subtitle">
              Planning your household or corporate relocation? Dial our verified <strong>ranchi packers and movers contact number</strong> at <strong>8409531615</strong> for an immediate free in-home survey and binding estimate.
            </p>
            <div class="cta-buttons-row">
              <a href="tel:+918409531615" class="btn-cta-phone" title="Call Shree Ashirwad Packers at 8409531615">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
                <span>Call Hotline: <strong>8409531615</strong></span>
              </a>
              <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn-cta-whatsapp" title="Chat with Shree Ashirwad Packers on WhatsApp">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2z"/></svg>
                <span>WhatsApp Estimate</span>
              </a>
            </div>
            <div class="cta-trust-items">
              <span>&check; 15+ Years Experience</span>
              <span>&check; IBA Approved Invoices</span>
              <span>&check; 4.9/5 Google Rating</span>
              <span>&check; Serving All 24 Districts</span>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- 13. Global Site Footer -->
  <?php include __DIR__ . '/includes/footer.php'; ?>

  <!-- Core JavaScript -->
  <script src="<?php echo SITE_BASE_URL; ?>/assets/js/main.js" defer></script>
</body>
</html>
