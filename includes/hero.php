<?php
/**
 * Hero Section Component
 * High-Converting, Visually Stunning Split 2-Column Layout
 * Designed to fit 100% above-the-fold without scrolling or awkward voids
 */

require_once __DIR__ . '/config.php';
$csrf_token = generate_csrf_token();
?>
<section class="hero-section" id="heroSection">
  <!-- Ambient Lighting Decorative Background Elements -->
  <div class="hero-glow hero-glow-1"></div>
  <div class="hero-glow hero-glow-2"></div>

  <div class="container">
    <div class="hero-grid">
      
      <!-- LEFT COLUMN: Value Proposition, Trust Badges & Direct CTAs -->
      <div class="hero-content">
        <!-- Main Conversion Heading -->
        <h1 class="hero-title">
          Safe, Fast & Reliable<br>
          <span class="hero-gradient-text">Packers & Movers</span> in Ranchi
        </h1>

        <!-- Subtitle with Natural Verbatim Keywords -->
        <p class="hero-subtitle">
          Recognized as the <strong>best packers and movers in ranchi</strong> and trusted <strong>movers and packers in ranchi</strong>, Shree Ashirwad provides premier <strong>household shifting services in ranchi</strong>, corporate relocation, and <strong>bike transport in ranchi</strong> across Jharkhand.
        </p>

        <!-- Social Proof & Trust Bar -->
        <div class="hero-rating-bar">
          <div class="rating-stars">
            <svg viewBox="0 0 24 24" width="14" height="14" fill="#f59e0b"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg viewBox="0 0 24 24" width="14" height="14" fill="#f59e0b"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg viewBox="0 0 24 24" width="14" height="14" fill="#f59e0b"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg viewBox="0 0 24 24" width="14" height="14" fill="#f59e0b"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg viewBox="0 0 24 24" width="14" height="14" fill="#f59e0b"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
          </div>
          <span class="rating-score">4.9/5</span>
          <span class="rating-label">Google Rating (664+ Reviews)</span>
          <span class="rating-divider">•</span>
          <span class="rating-experience">15+ Years Trust</span>
        </div>

        <!-- 4 Premium Trust Chips -->
        <div class="hero-chips-grid">
          <div class="hero-chip">
            <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="#ff6a28" stroke-width="2.5"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg>
            <span>100% Damage-Free Guarantee</span>
          </div>
          <div class="hero-chip">
            <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="#ff6a28" stroke-width="2.5"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg>
            <span>IBA-Approved Claim Invoices</span>
          </div>
          <div class="hero-chip">
            <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="#ff6a28" stroke-width="2.5"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg>
            <span>Zero Hidden Shifting Charges</span>
          </div>
          <div class="hero-chip">
            <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="#ff6a28" stroke-width="2.5"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg>
            <span>Serving All 24 Districts</span>
          </div>
        </div>

        <!-- Primary Action Call / WhatsApp Buttons -->
        <div class="hero-actions">
          <a href="tel:+918409531615" class="btn-hero-call" title="Call Shree Ashirwad Packers">
            <span class="btn-icon-wrapper">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
            </span>
            <span class="btn-call-text">
              <small>Need Immediate Move?</small>
              <strong>Call: 8409531615</strong>
            </span>
          </a>

          <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn-hero-whatsapp" title="WhatsApp Shree Ashirwad Packers">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2z"/></svg>
            <span>WhatsApp Estimate</span>
          </a>
        </div>
      </div>

      <!-- RIGHT COLUMN: Premium Lead Quotation Card -->
      <div class="hero-form-wrapper">
        <div class="quote-card">
          <div class="quote-card-header">
            <div class="quote-badge">
              <span class="pulse-indicator"></span>
              <span>⚡ Instant Free Estimate</span>
            </div>
            <h2 class="quote-card-title">Get a Free Moving Quote</h2>
            <p class="quote-card-desc">Transparent pricing in 60 seconds • Zero obligation</p>
          </div>

          <div id="formStatusMessage" class="form-status-message"></div>

          <form action="<?php echo SITE_BASE_URL; ?>/submit-quote.php" method="POST" class="quote-form" id="heroQuoteForm">
            <!-- Hidden CSRF & Honeypot Spam Protection -->
            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token, ENT_QUOTES, 'UTF-8'); ?>">
            <input type="text" name="website_url_hp" class="form-honeypot" tabindex="-1" autocomplete="off">

            <!-- Name and Phone Row -->
            <div class="form-row">
              <div class="form-group">
                <label for="leadName" class="form-label">Full Name *</label>
                <input type="text" id="leadName" name="name" class="form-control" placeholder="Your Name" required autocomplete="name">
              </div>

              <div class="form-group">
                <label for="leadPhone" class="form-label">Phone Number *</label>
                <input type="tel" id="leadPhone" name="phone" class="form-control" placeholder="10-digit mobile" required pattern="[0-9]{10}" maxlength="10" autocomplete="tel">
              </div>
            </div>

            <!-- Moving From & Moving To Row -->
            <div class="form-row">
              <div class="form-group">
                <label for="leadFrom" class="form-label">Moving From *</label>
                <input type="text" id="leadFrom" name="moving_from" class="form-control" placeholder="Pickup City / Area" required>
              </div>

              <div class="form-group">
                <label for="leadTo" class="form-label">Moving To *</label>
                <input type="text" id="leadTo" name="moving_to" class="form-control" placeholder="Drop Destination" required>
              </div>
            </div>

            <!-- Service Required Dropdown & Items Row -->
            <div class="form-row">
              <div class="form-group">
                <label for="leadService" class="form-label">Service Type</label>
                <select id="leadService" name="service_type" class="form-control">
                  <option value="Residential Shifting">Household Shifting</option>
                  <option value="Business Shifting">Office Shifting</option>
                  <option value="Vehicle Shifting">Car & Bike Transport</option>
                  <option value="Packing and Unpacking">Packing & Unpacking</option>
                  <option value="Warehouse Service">Warehouse & Storage</option>
                  <option value="Domestic Shifting">Domestic Intercity</option>
                </select>
              </div>

              <div class="form-group">
                <label for="leadMessage" class="form-label">Shifting Details</label>
                <input type="text" id="leadMessage" name="message" class="form-control" placeholder="e.g. 1BHK, 2BHK, Bike">
              </div>
            </div>

            <!-- Submit Button with Arrow Icon -->
            <button type="submit" class="btn-submit-quote">
              <span>Calculate Moving Cost</span>
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </button>

            <!-- Security & Privacy Note -->
            <div class="form-security-note">
              <span class="sec-item">
                <svg viewBox="0 0 24 24" width="12" height="12" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                100% Privacy Protected
              </span>
              <span class="sec-sep">•</span>
              <span class="sec-item">
                <svg viewBox="0 0 24 24" width="12" height="12" fill="currentColor"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm1 14h-2v-2h2v2zm0-4h-2V7h2v5z"/></svg>
                Callback in 15 Mins
              </span>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>
