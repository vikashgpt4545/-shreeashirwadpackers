<?php
/**
 * Contact Us Page - Shree Ashirwad Packers and Movers
 * Pure Core PHP Implementation
 * 
 * Deep E-E-A-T Content, Official Head Office Address, 24/7 Helpline,
 * Interactive Quote Form, Regional Jharkhand Branch Hubs, Comparison Table,
 * Google My Business Reviews, and Complete FAQ Section.
 * Preserving exact canonical URL: https://www.shreeashirwadpackers.com/contact
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$csrf_token = generate_csrf_token();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <!-- SEO & Schema Markup (ContactPage, MovingCompany, FAQPage & BreadcrumbList) -->
  <?php render_seo_tags('contact'); ?>

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
          <span aria-current="page">Contact Us</span>
        </nav>
        <h1 class="page-hero-title">
          Contact <span class="gradient-text">Shree Ashirwad Packers</span> and Movers Ranchi
        </h1>
        <p class="page-hero-subtitle">
          Connect with Jharkhand's most trusted, IBA approved, and ISO 9001:2015 certified relocation enterprise. Whether you need a free doorstep home survey in Ranchi, an instant WhatsApp moving estimate, or corporate relocation consultation, our dedicated move coordinators are available 24/7 to assist you.
        </p>
        <div class="hero-rating-bar" style="display: flex; align-items: center; justify-content: center; gap: 8px; margin: 16px 0 20px; flex-wrap: wrap;">
          <div class="rating-stars" style="display: flex; gap: 2px;">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="#f59e0b"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg viewBox="0 0 24 24" width="16" height="16" fill="#f59e0b"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg viewBox="0 0 24 24" width="16" height="16" fill="#f59e0b"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg viewBox="0 0 24 24" width="16" height="16" fill="#f59e0b"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg viewBox="0 0 24 24" width="16" height="16" fill="#f59e0b"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
          </div>
          <span style="font-weight: 800; color: #ffffff;">4.9 / 5.0 Google Rating</span>
          <span style="color: rgba(255,255,255,0.6);">&bull;</span>
          <span style="color: rgba(255,255,255,0.85); font-size: 0.9rem;">664+ Verified Customer Reviews in Ranchi</span>
        </div>
        <div class="hero-cta-buttons" style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; margin-top: 24px;">
          <a href="tel:+918409531615" class="btn-primary-custom" title="Call Shree Ashirwad 24/7 Helpline: 8409531615">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
            Call 24/7 Helpline: 8409531615
          </a>
          <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn-outline-custom" title="Chat with Move Specialist on WhatsApp" style="background: rgba(255,255,255,0.08); border-color: rgba(255,255,255,0.3); color: #ffffff;">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
            Instant WhatsApp Estimate
          </a>
        </div>
      </div>
    </section>

    <!-- 3. Credentials & Live Trust Stats Bar -->
    <section class="credentials-bar-section">
      <div class="container">
        <div class="credentials-grid">
          
          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">24/7 Helpline</span>
              <span class="credential-title">Instant Support Desk</span>
              <span class="credential-sub">8409531615 &bull; 9835565233</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">Free In-Home Survey</span>
              <span class="credential-title">Zero Obligation Quote</span>
              <span class="credential-sub">Doorstep Visit Across Ranchi</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">5-Min Estimate</span>
              <span class="credential-title">WhatsApp & Phone Pricing</span>
              <span class="credential-sub">Guaranteed Binding Quotes</span>
            </div>
          </div>

          <div class="credential-item">
            <div class="credential-icon">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            </div>
            <div class="credential-info">
              <span class="credential-number">IBA & GST Approved</span>
              <span class="credential-title">100% Claim Compliant</span>
              <span class="credential-sub">Official SAC 996511 / 996791</span>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- 4. Direct Communication Channels Grid -->
    <section class="about-section" style="padding: 60px 0 40px; background: #ffffff;">
      <div class="container">
        
        <div class="section-title-wrapper" style="text-align: center; max-width: 840px; margin: 0 auto 50px;">
          <span class="section-badge" style="background: #fff2eb; color: #ff6a28; padding: 6px 16px; border-radius: 9999px; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em;">
            Direct Touchpoints
          </span>
          <h2 style="font-size: 2.2rem; color: #0f223d; margin: 16px 0 12px; font-weight: 800; line-height: 1.25;">
            Fast, Direct & Transparent Communication Channels
          </h2>
          <p style="font-size: 1.05rem; color: #64748b; line-height: 1.6;">
            We believe that moving household treasures or corporate assets demands absolute transparency and prompt accessibility. Reach our Ranchi headquarters and customer support desk through any of our official channels.
          </p>
        </div>

        <div class="b2b-sectors-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 24px;">
          
          <!-- Channel 1: Ranchi Headquarters Office -->
          <div class="b2b-sector-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 28px 24px; transition: transform 0.2s ease, box-shadow 0.2s ease;">
            <div style="width: 52px; height: 52px; background: #fff2eb; border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; color: #ff6a28;">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
            </div>
            <h3 style="font-size: 1.25rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">Ranchi Headquarters</h3>
            <p style="font-size: 0.92rem; color: #64748b; line-height: 1.5; margin-bottom: 16px;">
              <strong>Office:</strong> Morabadi / Bariatu Road, Near Oxygen Park, Ranchi, Jharkhand - 834008<br>
              <strong>Hours:</strong> Mon – Sun: 8:00 AM – 9:00 PM
            </p>
            <a href="https://maps.google.com/?q=23.3703,85.3253" target="_blank" rel="noopener noreferrer" class="read-more-link" title="Open Shree Ashirwad Ranchi Office on Google Maps" style="color: #ff6a28; font-weight: 600; font-size: 0.9rem; text-decoration: none; display: inline-flex; align-items: center; gap: 6px;">
              <span>Get Directions on Map</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>

          <!-- Channel 2: 24/7 Telephone Helpline -->
          <div class="b2b-sector-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 28px 24px; transition: transform 0.2s ease, box-shadow 0.2s ease;">
            <div style="width: 52px; height: 52px; background: #e0f2fe; border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; color: #0284c7;">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            </div>
            <h3 style="font-size: 1.25rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">24/7 Phone Helpline</h3>
            <p style="font-size: 0.92rem; color: #64748b; line-height: 1.5; margin-bottom: 16px;">
              <strong>Primary Desk:</strong> <a href="tel:+918409531615" title="Call Primary Support: 8409531615" style="color: #0284c7; text-decoration: none; font-weight: 600;">+91 84095 31615</a><br>
              <strong>Operations Line:</strong> <a href="tel:+919835565233" title="Call Operations Line: 9835565233" style="color: #0284c7; text-decoration: none; font-weight: 600;">+91 98355 65233</a><br>
              <strong>Availability:</strong> 24 Hours / 365 Days
            </p>
            <a href="tel:+918409531615" class="read-more-link" title="Call Shree Ashirwad Helpline Now" style="color: #0284c7; font-weight: 600; font-size: 0.9rem; text-decoration: none; display: inline-flex; align-items: center; gap: 6px;">
              <span>Call Primary Helpline</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>

          <!-- Channel 3: WhatsApp Support Desk -->
          <div class="b2b-sector-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 28px 24px; transition: transform 0.2s ease, box-shadow 0.2s ease;">
            <div style="width: 52px; height: 52px; background: #dcfce7; border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; color: #16a34a;">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
            </div>
            <h3 style="font-size: 1.25rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">WhatsApp Support</h3>
            <p style="font-size: 0.92rem; color: #64748b; line-height: 1.5; margin-bottom: 16px;">
              <strong>WhatsApp Number:</strong> +91 98355 65233<br>
              <strong>Feature:</strong> Send home videos or inventory photos for instant 5-minute binding estimates and live GPS status.
            </p>
            <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="read-more-link" title="Open Chat on WhatsApp for Shree Ashirwad Packers" style="color: #16a34a; font-weight: 600; font-size: 0.9rem; text-decoration: none; display: inline-flex; align-items: center; gap: 6px;">
              <span>Chat on WhatsApp</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>

          <!-- Channel 4: Corporate Inquiries & Email -->
          <div class="b2b-sector-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 28px 24px; transition: transform 0.2s ease, box-shadow 0.2s ease;">
            <div style="width: 52px; height: 52px; background: #f3e8ff; border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; color: #9333ea;">
              <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <h3 style="font-size: 1.25rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">Corporate & Billing Desk</h3>
            <p style="font-size: 0.92rem; color: #64748b; line-height: 1.5; margin-bottom: 16px;">
              <strong>Official Email:</strong> <a href="mailto:info@shreeashirwadpackers.com" title="Send Official Email to Shree Ashirwad Packers" style="color: #9333ea; text-decoration: none; font-weight: 600;">info@shreeashirwadpackers.com</a><br>
              <strong>Services:</strong> B2B corporate contracts, GST invoicing, IBA bill audits, and tender quotes.
            </p>
            <a href="mailto:info@shreeashirwadpackers.com" class="read-more-link" title="Compose Email to info@shreeashirwadpackers.com" style="color: #9333ea; font-weight: 600; font-size: 0.9rem; text-decoration: none; display: inline-flex; align-items: center; gap: 6px;">
              <span>Send Official Email</span>
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>

        </div>

      </div>
    </section>

    <!-- 5. Core Interactive Contact Section: Quote Form (Left) & Headquarters Details (Right) -->
    <section class="about-section" style="padding: 50px 0 80px; background: #f8fafc;">
      <div class="container">
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px; align-items: start;">
          
          <!-- LEFT COLUMN: Interactive Moving Cost Calculator & Consultation Form -->
          <div class="quote-card" style="background: #ffffff; border-radius: 16px; padding: 36px 32px; box-shadow: 0 10px 30px rgba(0,0,0,0.06); border: 1px solid #e2e8f0;">
            <div class="quote-card-header" style="margin-bottom: 24px;">
              <div class="quote-badge" style="display: inline-flex; align-items: center; gap: 8px; background: #fff2eb; color: #ff6a28; padding: 6px 14px; border-radius: 9999px; font-weight: 700; font-size: 0.85rem; margin-bottom: 12px;">
                <span class="pulse-indicator" style="width: 8px; height: 8px; background: #ff6a28; border-radius: 50%;"></span>
                <span>⚡ Instant Free Moving Estimate</span>
              </div>
              <h2 class="quote-card-title" style="font-size: 1.8rem; color: #0f223d; font-weight: 800; line-height: 1.25; margin-bottom: 8px;">
                Request Free Doorstep Survey
              </h2>
              <p class="quote-card-desc" style="font-size: 0.95rem; color: #64748b; line-height: 1.5;">
                Fill out this quick form for household shifting in Ranchi, intercity domestic relocation, car & bike transport, or warehousing. Our move manager will contact you within 15 minutes.
              </p>
            </div>

            <div id="formStatusMessage" class="form-status-message"></div>

            <form action="<?php echo SITE_BASE_URL; ?>/submit-quote.php" method="POST" class="quote-form" id="contactQuoteForm">
              <!-- Hidden CSRF & Honeypot Spam Protection -->
              <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token, ENT_QUOTES, 'UTF-8'); ?>">
              <input type="text" name="website_url_hp" class="form-honeypot" tabindex="-1" autocomplete="off" style="display:none;">

              <!-- Name and Phone Row -->
              <div class="form-row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                <div class="form-group">
                  <label for="leadName" class="form-label" style="display: block; font-size: 0.88rem; font-weight: 600; color: #1e293b; margin-bottom: 6px;">Full Name *</label>
                  <input type="text" id="leadName" name="name" class="form-control" placeholder="e.g. Rajesh Kumar" required autocomplete="name" style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.95rem;">
                </div>

                <div class="form-group">
                  <label for="leadPhone" class="form-label" style="display: block; font-size: 0.88rem; font-weight: 600; color: #1e293b; margin-bottom: 6px;">Phone Number *</label>
                  <input type="tel" id="leadPhone" name="phone" class="form-control" placeholder="10-digit mobile" required pattern="[0-9]{10}" maxlength="10" autocomplete="tel" style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.95rem;">
                </div>
              </div>

              <!-- Moving From & Moving To Row -->
              <div class="form-row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                <div class="form-group">
                  <label for="leadFrom" class="form-label" style="display: block; font-size: 0.88rem; font-weight: 600; color: #1e293b; margin-bottom: 6px;">Moving From *</label>
                  <input type="text" id="leadFrom" name="moving_from" class="form-control" placeholder="Pickup Area / City" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.95rem;">
                </div>

                <div class="form-group">
                  <label for="leadTo" class="form-label" style="display: block; font-size: 0.88rem; font-weight: 600; color: #1e293b; margin-bottom: 6px;">Moving To *</label>
                  <input type="text" id="leadTo" name="moving_to" class="form-control" placeholder="Drop City / Sector" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.95rem;">
                </div>
              </div>

              <!-- Service Type & Preferred Moving Date Row -->
              <div class="form-row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                <div class="form-group">
                  <label for="leadService" class="form-label" style="display: block; font-size: 0.88rem; font-weight: 600; color: #1e293b; margin-bottom: 6px;">Service Type</label>
                  <select id="leadService" name="service_type" class="form-control" style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.95rem; background: #ffffff;">
                    <option value="Residential Shifting">Household Shifting</option>
                    <option value="Business Shifting">Office / Commercial Move</option>
                    <option value="Vehicle Shifting">Car & Two-Wheeler Transport</option>
                    <option value="Packing and Unpacking">Packing & Unpacking Only</option>
                    <option value="Loading and Unloading">Loading & Unloading Labor</option>
                    <option value="Warehouse Service">Warehouse Storage</option>
                    <option value="Domestic Shifting">Intercity Domestic Move</option>
                    <option value="International Moving">International Relocation</option>
                    <option value="Insurance Services">Transit Insurance Support</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="leadDate" class="form-label" style="display: block; font-size: 0.88rem; font-weight: 600; color: #1e293b; margin-bottom: 6px;">Approx. Moving Date</label>
                  <input type="date" id="leadDate" name="moving_date" class="form-control" style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.95rem;">
                </div>
              </div>

              <!-- Inventory Message -->
              <div class="form-group" style="margin-bottom: 20px;">
                <label for="leadMessage" class="form-label" style="display: block; font-size: 0.88rem; font-weight: 600; color: #1e293b; margin-bottom: 6px;">Inventory & Shifting Details</label>
                <textarea id="leadMessage" name="message" class="form-control" rows="3" placeholder="e.g. 2 BHK household with double bed, refrigerator, washing machine, sofa, and 15 cartons; elevator available at both ends." style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.95rem; font-family: inherit; resize: vertical;"></textarea>
              </div>

              <!-- Submit Button -->
              <button type="submit" class="btn-submit-quote" style="width: 100%; padding: 14px 24px; background: linear-gradient(135deg, #ff6a28 0%, #ea580c 100%); color: #ffffff; border: none; border-radius: 8px; font-size: 1.05rem; font-weight: 700; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px; box-shadow: 0 4px 15px rgba(234, 88, 12, 0.35); transition: background 0.2s ease, transform 0.1s ease;">
                <span>Submit & Get Free Moving Quote</span>
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </button>

              <!-- Security & Privacy Assurance Note -->
              <div class="form-security-note" style="display: flex; justify-content: center; align-items: center; gap: 12px; margin-top: 16px; font-size: 0.82rem; color: #64748b;">
                <span style="display: inline-flex; align-items: center; gap: 4px;">
                  <svg viewBox="0 0 24 24" width="14" height="14" fill="#16a34a"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                  100% Privacy Protected
                </span>
                <span>&bull;</span>
                <span style="display: inline-flex; align-items: center; gap: 4px;">
                  <svg viewBox="0 0 24 24" width="14" height="14" fill="#16a34a"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                  Zero Spam Guarantee
                </span>
                <span>&bull;</span>
                <span>No Hidden Fees</span>
              </div>
            </form>
          </div>

          <!-- RIGHT COLUMN: Headquarters Details, Map, Visit Info & Consultation Overview -->
          <div class="contact-details-column" style="display: flex; flex-direction: column; gap: 24px;">
            
            <div style="background: #ffffff; border-radius: 16px; padding: 32px; border: 1px solid #e2e8f0; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
              <span class="section-badge" style="background: #eff6ff; color: #2563eb; padding: 4px 12px; border-radius: 9999px; font-weight: 700; font-size: 0.8rem; text-transform: uppercase;">
                Physical Headquarters
              </span>
              <h3 style="font-size: 1.6rem; color: #0f223d; font-weight: 800; margin: 14px 0 10px;">
                Visit Our Central Office in Ranchi
              </h3>
              <p style="font-size: 0.95rem; color: #64748b; line-height: 1.6; margin-bottom: 20px;">
                We warmly welcome our clients to visit our operational headquarters in Morabadi, Ranchi. You can meet our senior move coordinators, inspect samples of our 4-layer packing materials (100 GSM bubble wrap, 5-ply cartons, and foam edge protectors), verify our IBA and ISO registration documents, and finalize your shifting contract in person.
              </p>

              <div style="display: flex; flex-direction: column; gap: 16px; margin-bottom: 24px;">
                <div style="display: flex; gap: 14px; align-items: flex-start;">
                  <div style="width: 36px; height: 36px; background: #fff2eb; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #ff6a28; flex-shrink: 0;">
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                  </div>
                  <div>
                    <h4 style="font-size: 0.95rem; font-weight: 700; color: #0f223d; margin-bottom: 2px;">Registered Office Address</h4>
                    <p style="font-size: 0.9rem; color: #475569; margin: 0; line-height: 1.4;">
                      Morabadi / Bariatu Road, Near Oxygen Park, Ranchi, Jharkhand - 834008, India.
                    </p>
                  </div>
                </div>

                <div style="display: flex; gap: 14px; align-items: flex-start;">
                  <div style="width: 36px; height: 36px; background: #e0f2fe; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #0284c7; flex-shrink: 0;">
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                  </div>
                  <div>
                    <h4 style="font-size: 0.95rem; font-weight: 700; color: #0f223d; margin-bottom: 2px;">Office & Survey Timings</h4>
                    <p style="font-size: 0.9rem; color: #475569; margin: 0; line-height: 1.4;">
                      Monday through Sunday: 8:00 AM – 9:00 PM<br>
                      <em>(Customer Helpline & Highway Emergency Desk operates 24 Hours / 7 Days)</em>
                    </p>
                  </div>
                </div>

                <div style="display: flex; gap: 14px; align-items: flex-start;">
                  <div style="width: 36px; height: 36px; background: #dcfce7; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #16a34a; flex-shrink: 0;">
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                  </div>
                  <div>
                    <h4 style="font-size: 0.95rem; font-weight: 700; color: #0f223d; margin-bottom: 2px;">Official Regulatory Identity</h4>
                    <p style="font-size: 0.9rem; color: #475569; margin: 0; line-height: 1.4;">
                      IBA Approved Bank Code: Verified Transporter &bull; ISO 9001:2015 Certified &bull; GSTIN Registered &bull; SAC Code: 996511 / 996791.
                    </p>
                  </div>
                </div>
              </div>

              <!-- Visual Location Feature Card -->
              <div style="background: #f1f5f9; border-radius: 12px; padding: 20px; border: 1px solid #cbd5e1;">
                <h4 style="font-size: 0.95rem; font-weight: 700; color: #0f223d; margin-bottom: 8px; display: flex; align-items: center; gap: 6px;">
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="#ff6a28"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                  Landmarks & Parking Access
                </h4>
                <p style="font-size: 0.88rem; color: #64748b; margin: 0; line-height: 1.5;">
                  Located conveniently near Oxygen Park with broad road frontage, our headquarters offers dedicated parking for customer vehicles and ample turning clearance for 14-foot, 17-foot, and 20-foot closed container trucks.
                </p>
              </div>

            </div>

            <!-- Emergency Move Support Card -->
            <div style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); border-radius: 16px; padding: 28px 24px; color: #ffffff;">
              <h4 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 8px; color: #f8fafc;">
                Need Urgent or Same-Day Moving in Ranchi?
              </h4>
              <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.5; margin-bottom: 16px;">
                Facing a sudden lease expiration, transfer order, or immediate possession requirement? We operate rapid-response mobile packing crews equipped with packing supplies and closed trucks ready for same-day dispatch across Harmu, Kanke, Morabadi, Bariatu, and Doranda.
              </p>
              <div style="display: flex; gap: 12px; flex-wrap: wrap;">
                <a href="tel:+918409531615" class="btn-primary-custom" title="Call Emergency Moving Support: 8409531615" style="padding: 10px 18px; font-size: 0.9rem;">
                  <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
                  Emergency Hotline: 8409531615
                </a>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section>

    <!-- 6. Section: Regional Branch Depots Across Jharkhand -->
    <section class="about-section" style="padding: 70px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-title-wrapper" style="text-align: center; max-width: 860px; margin: 0 auto 50px;">
          <span class="section-badge" style="background: #fff2eb; color: #ff6a28; padding: 6px 16px; border-radius: 9999px; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em;">
            Network Across Jharkhand
          </span>
          <h2 style="font-size: 2.2rem; color: #0f223d; margin: 16px 0 12px; font-weight: 800; line-height: 1.25;">
            Our Regional Branch Depots & Operational Hubs
          </h2>
          <p style="font-size: 1.05rem; color: #64748b; line-height: 1.6;">
            Unlike online aggregators who operate solely on a mobile phone with zero physical infrastructure, Shree Ashirwad Packers maintains verified operational branch hubs across all key industrial and residential corridors of Jharkhand.
          </p>
        </div>

        <div class="b2b-sectors-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px;">
          
          <!-- Branch 1: Ranchi HQ & Warehouse Hub -->
          <div class="b2b-sector-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; display: flex; flex-direction: column; justify-content: space-between;">
            <div>
              <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                <h3 style="font-size: 1.2rem; color: #0f223d; font-weight: 700; margin: 0;">Ranchi Central Hub & Warehouse</h3>
                <span style="background: #dcfce7; color: #16a34a; font-size: 0.75rem; font-weight: 700; padding: 3px 8px; border-radius: 6px; text-transform: uppercase;">Headquarters</span>
              </div>
              <p style="font-size: 0.9rem; color: #64748b; line-height: 1.5; margin-bottom: 12px;">
                <strong>Address:</strong> Morabadi / Bariatu Road, Near Oxygen Park, Ranchi - 834008<br>
                <strong>Facilities:</strong> Central Fleet Depot, 10,000 sq.ft. Pest-Controlled Storage Warehouse, Heavy Rigging Equipment, 24/7 Control Desk.<br>
                <strong>Coverage:</strong> Harmu, Kanke, Bariatu, Lalpur, Doranda, Ashok Nagar, Namkum, Tupudana, Dhurwa, and surrounding sectors.
              </p>
            </div>
            <div style="padding-top: 12px; border-top: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
              <span style="font-size: 0.85rem; font-weight: 600; color: #0f223d;">Helpline: 8409531615</span>
              <a href="<?php echo SITE_BASE_URL; ?>/" title="Visit Ranchi Packers and Movers Hub" style="color: #ff6a28; text-decoration: none; font-size: 0.85rem; font-weight: 600;">View Hub &rarr;</a>
            </div>
          </div>

          <!-- Branch 2: Bokaro Steel City Branch -->
          <div class="b2b-sector-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; display: flex; flex-direction: column; justify-content: space-between;">
            <div>
              <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                <h3 style="font-size: 1.2rem; color: #0f223d; font-weight: 700; margin: 0;">Bokaro Steel City Hub</h3>
                <span style="background: #eff6ff; color: #2563eb; font-size: 0.75rem; font-weight: 700; padding: 3px 8px; border-radius: 6px; text-transform: uppercase;">Direct Branch</span>
              </div>
              <p style="font-size: 0.9rem; color: #64748b; line-height: 1.5; margin-bottom: 12px;">
                <strong>Address:</strong> Chas Bypass Road, Near ITI More, Bokaro Steel City - 827013<br>
                <strong>Facilities:</strong> Dedicated BSL PSU Officer Transfer Desk, Heavy Plant Equipment Shifting, Secure Short-Term Household Storage.<br>
                <strong>Coverage:</strong> Chas, Sector 1 to 12, Camp 2, Bokaro Thermal, Bermo, and Chandrapura.
              </p>
            </div>
            <div style="padding-top: 12px; border-top: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
              <span style="font-size: 0.85rem; font-weight: 600; color: #0f223d;">Branch Phone: 9835565233</span>
              <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bokaro" title="Visit Bokaro Packers and Movers Branch" style="color: #ff6a28; text-decoration: none; font-size: 0.85rem; font-weight: 600;">View Branch &rarr;</a>
            </div>
          </div>

          <!-- Branch 3: Dhanbad Coalfield Hub -->
          <div class="b2b-sector-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; display: flex; flex-direction: column; justify-content: space-between;">
            <div>
              <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                <h3 style="font-size: 1.2rem; color: #0f223d; font-weight: 700; margin: 0;">Dhanbad Coal Capital Hub</h3>
                <span style="background: #eff6ff; color: #2563eb; font-size: 0.75rem; font-weight: 700; padding: 3px 8px; border-radius: 6px; text-transform: uppercase;">Direct Branch</span>
              </div>
              <p style="font-size: 0.9rem; color: #64748b; line-height: 1.5; margin-bottom: 12px;">
                <strong>Address:</strong> Bank More, Near Shramik Chowk, Dhanbad - 826001<br>
                <strong>Facilities:</strong> BCCL & Railway Official Transfer Relocation Center, Car Carrier Loading Deck, Two-Wheeler Crating.<br>
                <strong>Coverage:</strong> Bank More, Hirapur, Saraidhela, Govindpur, Katras, Jharia, and Sindri.
              </p>
            </div>
            <div style="padding-top: 12px; border-top: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
              <span style="font-size: 0.85rem; font-weight: 600; color: #0f223d;">Branch Phone: 8409531615</span>
              <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dhanbad" title="Visit Dhanbad Packers and Movers Branch" style="color: #ff6a28; text-decoration: none; font-size: 0.85rem; font-weight: 600;">View Branch &rarr;</a>
            </div>
          </div>

          <!-- Branch 4: Jamshedpur Steel City Hub -->
          <div class="b2b-sector-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; display: flex; flex-direction: column; justify-content: space-between;">
            <div>
              <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                <h3 style="font-size: 1.2rem; color: #0f223d; font-weight: 700; margin: 0;">Jamshedpur Tatanagar Hub</h3>
                <span style="background: #eff6ff; color: #2563eb; font-size: 0.75rem; font-weight: 700; padding: 3px 8px; border-radius: 6px; text-transform: uppercase;">Direct Branch</span>
              </div>
              <p style="font-size: 0.9rem; color: #64748b; line-height: 1.5; margin-bottom: 12px;">
                <strong>Address:</strong> Main Road Bistupur, Near Voltas House, Jamshedpur - 831001<br>
                <strong>Facilities:</strong> Tata Group & Corporate Employee Transfer Desk, Precision Packaging for Lab & Server Hardware, Adityapur Industrial Rigging.<br>
                <strong>Coverage:</strong> Bistupur, Sakchi, Kadma, Sonari, Telco, Gamharia, and Adityapur Industrial Complex.
              </p>
            </div>
            <div style="padding-top: 12px; border-top: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
              <span style="font-size: 0.85rem; font-weight: 600; color: #0f223d;">Branch Phone: 9835565233</span>
              <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-jamshedpur" title="Visit Jamshedpur Packers and Movers Branch" style="color: #ff6a28; text-decoration: none; font-size: 0.85rem; font-weight: 600;">View Branch &rarr;</a>
            </div>
          </div>

          <!-- Branch 5: Hazaribagh & Ramgarh Hub -->
          <div class="b2b-sector-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; display: flex; flex-direction: column; justify-content: space-between;">
            <div>
              <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                <h3 style="font-size: 1.2rem; color: #0f223d; font-weight: 700; margin: 0;">Hazaribagh & Ramgarh Hub</h3>
                <span style="background: #eff6ff; color: #2563eb; font-size: 0.75rem; font-weight: 700; padding: 3px 8px; border-radius: 6px; text-transform: uppercase;">Direct Branch</span>
              </div>
              <p style="font-size: 0.9rem; color: #64748b; line-height: 1.5; margin-bottom: 12px;">
                <strong>Address:</strong> NH-33 Main Highway Junction, Near Cantonment, Ramgarh & Hazaribagh - 829122<br>
                <strong>Facilities:</strong> Defence Personnel & Military Relocation Cell, CCL Employee Moving Center, Highway Container Staging Yard.<br>
                <strong>Coverage:</strong> Hazaribagh Town, Ramgarh Cantt, Patratu, Gola, Barkakana, and Mandu.
              </p>
            </div>
            <div style="padding-top: 12px; border-top: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
              <span style="font-size: 0.85rem; font-weight: 600; color: #0f223d;">Branch Phone: 8409531615</span>
              <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hazaribagh" title="Visit Hazaribagh Packers and Movers Branch" style="color: #ff6a28; text-decoration: none; font-size: 0.85rem; font-weight: 600;">View Branch &rarr;</a>
            </div>
          </div>

          <!-- Branch 6: Deoghar & Santhal Pargana Hub -->
          <div class="b2b-sector-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; display: flex; flex-direction: column; justify-content: space-between;">
            <div>
              <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                <h3 style="font-size: 1.2rem; color: #0f223d; font-weight: 700; margin: 0;">Deoghar & Santhal Pargana Hub</h3>
                <span style="background: #eff6ff; color: #2563eb; font-size: 0.75rem; font-weight: 700; padding: 3px 8px; border-radius: 6px; text-transform: uppercase;">Direct Branch</span>
              </div>
              <p style="font-size: 0.9rem; color: #64748b; line-height: 1.5; margin-bottom: 12px;">
                <strong>Address:</strong> Castairs Town, Near Tower Chowk, Deoghar - 814112<br>
                <strong>Facilities:</strong> Eastern Jharkhand Dispatch Point, Inter-State West Bengal & Bihar Corridor Transit Terminal, Express Household Delivery.<br>
                <strong>Coverage:</strong> Deoghar, Jasidih, Madhupur, Dumka, Jamtara, and Godda.
              </p>
            </div>
            <div style="padding-top: 12px; border-top: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
              <span style="font-size: 0.85rem; font-weight: 600; color: #0f223d;">Branch Phone: 9835565233</span>
              <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-deoghar" title="Visit Deoghar Packers and Movers Branch" style="color: #ff6a28; text-decoration: none; font-size: 0.85rem; font-weight: 600;">View Branch &rarr;</a>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- 7. Section: 4-Step Consultation & Moving Roadmap -->
    <section class="about-section" style="padding: 70px 0; background: #f8fafc;">
      <div class="container">
        
        <div class="section-title-wrapper" style="text-align: center; max-width: 820px; margin: 0 auto 50px;">
          <span class="section-badge" style="background: #eff6ff; color: #2563eb; padding: 6px 16px; border-radius: 9999px; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em;">
            Transparent Moving Journey
          </span>
          <h2 style="font-size: 2.2rem; color: #0f223d; margin: 16px 0 12px; font-weight: 800; line-height: 1.25;">
            What Happens After You Contact Us?
          </h2>
          <p style="font-size: 1.05rem; color: #64748b; line-height: 1.6;">
            We operate on a transparent, structured 4-step consultation and relocation process. From the moment you connect with our helpline to final placement in your new home, your move is managed with precision.
          </p>
        </div>

        <div class="checklist-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 24px;">
          
          <div class="checklist-card" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 28px 24px; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
            <div style="width: 44px; height: 44px; background: #fff2eb; color: #ff6a28; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.1rem; margin-bottom: 16px;">
              1
            </div>
            <h3 style="font-size: 1.2rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">Initial Inquiry & Needs Analysis</h3>
            <p style="font-size: 0.92rem; color: #64748b; line-height: 1.5; margin: 0;">
              Our move consultant reviews your origin, destination, timeline, and inventory scope over phone or WhatsApp. We clarify specific requirements like delicate chinaware, piano, double-door refrigerator, or vehicle moving.
            </p>
          </div>

          <div class="checklist-card" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 28px 24px; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
            <div style="width: 44px; height: 44px; background: #e0f2fe; color: #0284c7; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.1rem; margin-bottom: 16px;">
              2
            </div>
            <h3 style="font-size: 1.2rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">Free Doorstep or Virtual Survey</h3>
            <p style="font-size: 0.92rem; color: #64748b; line-height: 1.5; margin: 0;">
              An experienced technical surveyor visits your residence or office anywhere in Ranchi to calculate exact cubic feet volume, examine floor access, evaluate lift dimensions, and identify crating needs—100% free of charge.
            </p>
          </div>

          <div class="checklist-card" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 28px 24px; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
            <div style="width: 44px; height: 44px; background: #dcfce7; color: #16a34a; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.1rem; margin-bottom: 16px;">
              3
            </div>
            <h3 style="font-size: 1.2rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">Guaranteed Binding Quotation</h3>
            <p style="font-size: 0.92rem; color: #64748b; line-height: 1.5; margin: 0;">
              You receive an all-inclusive, itemized written proposal detailing packing materials, labor, transport, toll taxes, and transit insurance options. No surprise add-ons, hidden handling fees, or mid-transit price renegotiations.
            </p>
          </div>

          <div class="checklist-card" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 28px 24px; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
            <div style="width: 44px; height: 44px; background: #f3e8ff; color: #9333ea; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.1rem; margin-bottom: 16px;">
              4
            </div>
            <h3 style="font-size: 1.2rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">Dedicated Coordinator Assigned</h3>
            <p style="font-size: 0.92rem; color: #64748b; line-height: 1.5; margin: 0;">
              A single point of contact (Dedicated Move Manager) oversees your entire relocation from packing day and loading, through highway GPS monitoring, to doorstep delivery, unpacking, and furniture reassembly.
            </p>
          </div>

        </div>

      </div>
    </section>

    <!-- 8. Section: Benchmark Comparison Table -->
    <section class="about-section" style="padding: 70px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-title-wrapper" style="text-align: center; max-width: 820px; margin: 0 auto 50px;">
          <span class="section-badge" style="background: #fff2eb; color: #ff6a28; padding: 6px 16px; border-radius: 9999px; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em;">
            Transparent Benchmark
          </span>
          <h2 style="font-size: 2.2rem; color: #0f223d; margin: 16px 0 12px; font-weight: 800; line-height: 1.25;">
            Shree Ashirwad Customer Support vs. Unverified Brokers
          </h2>
          <p style="font-size: 1.05rem; color: #64748b; line-height: 1.6;">
            Why thousands of families, government officers, and corporate executives across Jharkhand choose Shree Ashirwad Packers over roadside moving brokers and lead-selling app aggregators.
          </p>
        </div>

        <div style="overflow-x: auto; background: #ffffff; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
          <table class="comp-table" style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.92rem;">
            <thead>
              <tr style="background: #0f223d; color: #ffffff;">
                <th style="padding: 16px 20px; font-weight: 700; border-bottom: 2px solid #ff6a28;">Service & Accountability Factor</th>
                <th style="padding: 16px 20px; font-weight: 700; border-bottom: 2px solid #ff6a28; background: #1a365d;">Shree Ashirwad Packers (Verified)</th>
                <th style="padding: 16px 20px; font-weight: 700; border-bottom: 2px solid #e2e8f0;">Unverified Roadside Brokers & Aggregators</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid #e2e8f0;">
                <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Physical Head Office in Ranchi</td>
                <td style="padding: 16px 20px; color: #16a34a; font-weight: 600; background: #f0fdf4;">
                  &check; Permanent Office & Warehouse in Morabadi & Namkum
                </td>
                <td style="padding: 16px 20px; color: #dc2626;">
                  &cross; Virtual phone-only brokers with zero physical address
                </td>
              </tr>
              <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">In-Home Pre-Move Survey</td>
                <td style="padding: 16px 20px; color: #16a34a; font-weight: 600; background: #f0fdf4;">
                  &check; 100% Free Doorstep Physical & Video Surveys
                </td>
                <td style="padding: 16px 20px; color: #dc2626;">
                  &cross; Rough phone guesswork leading to 50% price hikes on moving day
                </td>
              </tr>
              <tr style="border-bottom: 1px solid #e2e8f0;">
                <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Price Guarantee & Hidden Charges</td>
                <td style="padding: 16px 20px; color: #16a34a; font-weight: 600; background: #f0fdf4;">
                  &check; Written Binding Quote with 0% Hidden Surcharges
                </td>
                <td style="padding: 16px 20px; color: #dc2626;">
                  &cross; Hidden charges added for stairs, toll, packing tapes, and labor
                </td>
              </tr>
              <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">IBA Approval & Govt. Claim Invoicing</td>
                <td style="padding: 16px 20px; color: #16a34a; font-weight: 600; background: #f0fdf4;">
                  &check; 100% IBA Approved Bilty & GST Invoices (SAC 996511 / 996791)
                </td>
                <td style="padding: 16px 20px; color: #dc2626;">
                  &cross; Invalid handwritten slips rejected by Bank & PSU audit desks
                </td>
              </tr>
              <tr style="border-bottom: 1px solid #e2e8f0;">
                <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Dedicated Move Coordinator</td>
                <td style="padding: 16px 20px; color: #16a34a; font-weight: 600; background: #f0fdf4;">
                  &check; Single Dedicated Point of Contact from Start to Finish
                </td>
                <td style="padding: 16px 20px; color: #dc2626;">
                  &cross; Multiple disconnected call center agents who know nothing about your load
                </td>
              </tr>
              <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Transit Insurance & Claim Settlement</td>
                <td style="padding: 16px 20px; color: #16a34a; font-weight: 600; background: #f0fdf4;">
                  &check; Genuine Nationalized Insurance Policy with Fast Settlement
                </td>
                <td style="padding: 16px 20px; color: #dc2626;">
                  &cross; Fake "in-house risk coverage" with zero legal payouts
                </td>
              </tr>
              <tr>
                <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Own Fleet vs. Outsourced Trucks</td>
                <td style="padding: 16px 20px; color: #16a34a; font-weight: 600; background: #f0fdf4;">
                  &check; Company-Owned Weatherproof Closed Containers
                </td>
                <td style="padding: 16px 20px; color: #dc2626;">
                  &cross; Third-party open tarpaulin trucks sourced from random highway stands
                </td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </section>

    <!-- 9. Section: Real Google My Business (GMB) Reviews Component -->
    <?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

    <!-- 10. Section: Comprehensive FAQ Section -->
    <section class="about-section" style="padding: 70px 0; background: #ffffff;">
      <div class="container">
        
        <div class="section-title-wrapper" style="text-align: center; max-width: 820px; margin: 0 auto 50px;">
          <span class="section-badge" style="background: #eff6ff; color: #2563eb; padding: 6px 16px; border-radius: 9999px; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em;">
            Clear Answers
          </span>
          <h2 style="font-size: 2.2rem; color: #0f223d; margin: 16px 0 12px; font-weight: 800; line-height: 1.25;">
            Frequently Asked Questions About Booking & Contact
          </h2>
          <p style="font-size: 1.05rem; color: #64748b; line-height: 1.6;">
            Have questions before booking? Browse through our most common client inquiries regarding survey scheduling, pricing guarantees, booking lead time, and payment terms.
          </p>
        </div>

        <div class="about-faq-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px;">
          
          <div class="about-faq-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px;">
            <h3 class="about-faq-question" style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 10px;">
              What is the primary customer helpline and contact number for Shree Ashirwad Packers in Ranchi?
            </h3>
            <p class="about-faq-answer" style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin: 0;">
              Our primary 24/7 helpline numbers are <strong>+91 84095 31615</strong> and <strong>+91 98355 65233</strong>. You can call or message us on WhatsApp at any time for instant moving quotes, pre-move home surveys, and active consignment tracking.
            </p>
          </div>

          <div class="about-faq-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px;">
            <h3 class="about-faq-question" style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 10px;">
              Where is the main headquarters office of Shree Ashirwad Packers located in Ranchi?
            </h3>
            <p class="about-faq-answer" style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin: 0;">
              Our headquarters office is located at <strong>Morabadi / Bariatu Road, Near Oxygen Park, Ranchi, Jharkhand - 834008</strong>. We welcome clients to visit our office Monday through Sunday between 8:00 AM and 9:00 PM to inspect sample packing materials and finalize booking agreements.
            </p>
          </div>

          <div class="about-faq-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px;">
            <h3 class="about-faq-question" style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 10px;">
              How quickly can I get a written moving estimate from your team?
            </h3>
            <p class="about-faq-answer" style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin: 0;">
              You can get an instant preliminary estimate in under 5 minutes by calling <strong>8409531615</strong> or sharing your household inventory list and video on WhatsApp. For comprehensive moves, our surveyor conducts a free in-home physical survey within 2 to 4 hours.
            </p>
          </div>

          <div class="about-faq-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px;">
            <h3 class="about-faq-question" style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 10px;">
              Do you provide free in-home pre-move physical surveys across Ranchi?
            </h3>
            <p class="about-faq-answer" style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin: 0;">
              Yes, 100% free of charge and with zero obligation. Our experienced move manager visits your home in Morabadi, Kanke Road, Harmu, Doranda, Bariatu, Ashok Nagar, or any Ranchi locality to assess volume, furniture dismantling needs, and truck parking access.
            </p>
          </div>

          <div class="about-faq-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px;">
            <h3 class="about-faq-question" style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 10px;">
              How far in advance should I book Shree Ashirwad Packers for local or intercity shifting?
            </h3>
            <p class="about-faq-answer" style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin: 0;">
              For local moves within Ranchi, we recommend booking 24 to 48 hours in advance. For long-distance intercity domestic moves, 3 to 5 days advance booking ensures optimal closed container allocation. Emergency same-day bookings are also accommodated based on crew availability.
            </p>
          </div>

          <div class="about-faq-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px;">
            <h3 class="about-faq-question" style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 10px;">
              What payment methods are accepted for moving services?
            </h3>
            <p class="about-faq-answer" style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin: 0;">
              We accept all official payment modes: UPI (Google Pay, PhonePe, Paytm), Net Banking (NEFT/RTGS/IMPS), Credit Cards, Debit Cards, Cheque, and Cash, with complete GST tax invoices issued under SAC Code 996511 / 996791.
            </p>
          </div>

          <div class="about-faq-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px;">
            <h3 class="about-faq-question" style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 10px;">
              Can I reschedule or cancel my moving date if my plans change?
            </h3>
            <p class="about-faq-answer" style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin: 0;">
              Yes. We offer flexible rescheduling with zero cancellation or penalty fees if notified at least 24 hours prior to the scheduled packing time. Simply call our customer support desk at <strong>8409531615</strong> to update your preferred moving date.
            </p>
          </div>

          <div class="about-faq-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px;">
            <h3 class="about-faq-question" style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 10px;">
              Do you have branch offices in other districts of Jharkhand besides Ranchi?
            </h3>
            <p class="about-faq-answer" style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin: 0;">
              Yes. Shree Ashirwad Packers maintains active regional branch hubs in Bokaro Steel City (Chas), Dhanbad (Bank More), Jamshedpur (Bistupur), Hazaribagh, Deoghar, Ramgarh, and Giridih providing direct on-ground moving and storage support.
            </p>
          </div>

        </div>

      </div>
    </section>

    <!-- 11. Section: Pre-Footer CTA Banner & Ranchi Coverage Network -->
    <section class="cta-banner-section">
      <div class="container">
        
        <div class="cta-banner-card">
          <div class="cta-banner-content">
            <h2 class="cta-banner-title">Speak With an Authentic Moving Specialist Today</h2>
            <p class="cta-banner-desc">
              Experience the peace of mind that comes with partnering with Jharkhand's most recognized and dependable packers and movers. Free doorstep survey, transparent pricing, and 100% safety guarantee.
            </p>
            <div class="about-cta-row" style="margin-top: 20px;">
              <a href="tel:+918409531615" class="btn-primary-custom" title="Call Shree Ashirwad 24/7 Helpline: 8409531615">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
                Call Hotline: 8409531615
              </a>
              <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn-outline-custom" title="Get Instant Verified Quote on WhatsApp" style="border-color: #ffffff; color: #ffffff;">
                WhatsApp Moving Quote &rarr;
              </a>
            </div>
          </div>
        </div>

        <!-- Standardized Ranchi Localities & Jharkhand District Links Card -->
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

  <!-- Core JavaScript -->
  <script src="<?php echo SITE_BASE_URL; ?>/assets/js/main.js" defer></script>
</body>
</html>
