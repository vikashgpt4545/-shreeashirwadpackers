<?php
/**
 * Footer Component
 * Shree Ashirwad Packers and Movers
 */

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/cluster-helper.php';
$base_url = SITE_BASE_URL;
?>
<?php render_contextual_district_cluster(); ?>
<footer class="site-footer" id="siteFooter">
  <div class="container">
    <div class="footer-grid">
      
      <!-- Footer Col 1: Brand Info & Overview -->
      <div class="footer-col footer-brand">
        <a href="<?php echo $base_url; ?>/" class="brand-logo" title="Shree Ashirwad Packers and Movers Homepage" style="margin-bottom:16px;">
          <img src="<?php echo $base_url; ?>/assets/images/logo.png" alt="<?php echo BRAND_SHORT_NAME; ?> Logo" title="Shree Ashirwad Packers and Movers Emblem" width="48" height="48">
          <div class="brand-info">
            <span class="brand-title" style="color:#ffffff;"><?php echo BRAND_SHORT_NAME; ?></span>
            <span class="brand-tagline">Relocation Specialists</span>
          </div>
        </a>
        <p>
          Leading government registered packers and movers in Ranchi and throughout Jharkhand. We offer transparent, prompt, and secure home shifting, office relocation, and car transport services.
        </p>

        <!-- Verified Social Links -->
        <div class="footer-social-wrapper">
          <a href="<?php echo SOCIAL_FACEBOOK; ?>" target="_blank" rel="noopener noreferrer" class="social-btn" title="Follow Shree Ashirwad Packers on Facebook" aria-label="Facebook">
            <svg viewBox="0 0 24 24" width="17" height="17"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
          </a>
          <a href="<?php echo SOCIAL_TWITTER; ?>" target="_blank" rel="noopener noreferrer" class="social-btn" title="Follow Shree Ashirwad Packers on Twitter" aria-label="Twitter / X">
            <svg viewBox="0 0 24 24" width="17" height="17"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
          </a>
          <a href="<?php echo SOCIAL_INSTAGRAM; ?>" target="_blank" rel="noopener noreferrer" class="social-btn" title="Follow Shree Ashirwad Packers on Instagram" aria-label="Instagram">
            <svg viewBox="0 0 24 24" width="17" height="17"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          </a>
          <a href="<?php echo SOCIAL_YOUTUBE; ?>" target="_blank" rel="noopener noreferrer" class="social-btn" title="Watch Shree Ashirwad Packers on YouTube" aria-label="YouTube">
            <svg viewBox="0 0 24 24" width="17" height="17"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
          </a>
          <a href="<?php echo SOCIAL_PINTEREST; ?>" target="_blank" rel="noopener noreferrer" class="social-btn" title="Visit Shree Ashirwad Packers on Pinterest" aria-label="Pinterest">
            <svg viewBox="0 0 24 24" width="17" height="17"><path d="M12 0C5.373 0 0 5.372 0 12c0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738.098.119.112.224.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24 12 24c6.627 0 12-5.373 12-12 0-6.628-5.373-12-12-12z"/></svg>
          </a>
        </div>
      </div>

      <!-- Footer Col 2: Verified Physical Addresses & Contacts -->
      <div class="footer-col">
        <h3 class="footer-col-title">Our Offices</h3>
        <div class="footer-addresses">
          <div class="footer-address-item">
            <svg viewBox="0 0 24 24" width="18" height="18"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 010-5 2.5 2.5 0 010 5z"/></svg>
            <div>
              <strong>Ranchi Headquarters:</strong>
              <?php echo RANCHI_HQ_FULL_ADDRESS; ?>
            </div>
          </div>

          <div class="footer-address-item">
            <svg viewBox="0 0 24 24" width="18" height="18"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 010-5 2.5 2.5 0 010 5z"/></svg>
            <div>
              <strong>Bokaro Branch:</strong>
              <?php echo BOKARO_BRANCH_FULL_ADDRESS; ?>
            </div>
          </div>

          <div class="footer-address-item">
            <svg viewBox="0 0 24 24" width="16" height="16"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
            <div>
              <strong>Phone:</strong>
              <a href="tel:<?php echo PRIMARY_PHONE_RAW; ?>" title="Call Primary Number: <?php echo PRIMARY_PHONE; ?>" style="color:#ffffff;"><?php echo PRIMARY_PHONE; ?></a>, 
              <a href="tel:<?php echo SECONDARY_PHONE_RAW; ?>" title="Call Secondary Number: <?php echo SECONDARY_PHONE; ?>" style="color:#ffffff;"><?php echo SECONDARY_PHONE; ?></a>
            </div>
          </div>

          <div class="footer-address-item">
            <svg viewBox="0 0 24 24" width="16" height="16"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
            <div>
              <strong>Email:</strong>
              <a href="mailto:<?php echo OFFICIAL_EMAIL; ?>" title="Email Shree Ashirwad Packers at <?php echo OFFICIAL_EMAIL; ?>" style="color:#ffffff;"><?php echo OFFICIAL_EMAIL; ?></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer Col 3: Useful Links -->
      <div class="footer-col">
        <h3 class="footer-col-title">Quick Links</h3>
        <ul class="footer-links-list">
          <li><a href="<?php echo $base_url; ?>/" title="Shree Ashirwad Packers Homepage">Home</a></li>
          <li><a href="<?php echo $base_url; ?>/about" title="About Shree Ashirwad Packers and Movers">About Us</a></li>
          <li><a href="<?php echo $base_url; ?>/gallery" title="Gallery of Shifting & Moving Operations">Gallery</a></li>
          <li><a href="<?php echo $base_url; ?>/pay-online" title="Pay Relocation Invoices Online">Pay Online</a></li>
          <li><a href="<?php echo $base_url; ?>/contact" title="Contact Us for Relocation Quotes">Contact Us</a></li>
          <li><a href="<?php echo $base_url; ?>/sitemap.xml" title="XML Sitemap for Search Engines">XML Sitemap</a></li>
        </ul>
      </div>

      <!-- Footer Col 4: Relocation Services (9 Exact Service URLs) -->
      <div class="footer-col">
        <h3 class="footer-col-title">Our Services</h3>
        <ul class="footer-links-list">
          <li><a href="<?php echo $base_url; ?>/residential-shifting/" title="Household Residential Shifting Services">Residential Shifting</a></li>
          <li><a href="<?php echo $base_url; ?>/business-shifting/" title="Corporate Business and Office Relocation">Business Shifting</a></li>
          <li><a href="<?php echo $base_url; ?>/vehicle-shifting/" title="Car and Bike Vehicle Transportation">Vehicle Shifting</a></li>
          <li><a href="<?php echo $base_url; ?>/packing-and-unpacking/" title="Multi-Layer Packing & Unpacking Services">Packing & Unpacking</a></li>
          <li><a href="<?php echo $base_url; ?>/loading-and-unloading-services/" title="Heavy Goods Loading & Unloading Services">Loading & Unloading</a></li>
          <li><a href="<?php echo $base_url; ?>/warehouse-service/" title="Safe Warehousing and Household Storage">Warehouse Service</a></li>
          <li><a href="<?php echo $base_url; ?>/international-service/" title="International Relocation and Freight Service">International Service</a></li>
          <li><a href="<?php echo $base_url; ?>/domestics-service/" title="Domestic Pan-India Intercity Shifting">Domestic Service</a></li>
          <li><a href="<?php echo $base_url; ?>/insurance-service/" title="Comprehensive Transit Insurance Coverage">Insurance Service</a></li>
        </ul>
      </div>

    </div>
  </div>

  <!-- Full 23 Jharkhand Cities Section (Preserving every location URL in pages list) -->
  <div class="footer-cities-section">
    <div class="container">
      <h4 class="footer-cities-title">Shree Ashirwad Packers and Movers: Serving All Cities in Jharkhand</h4>
      <ul class="footer-cities-grid">
        <li><a href="<?php echo $base_url; ?>/" title="Packers and Movers in Ranchi">Packers and Movers in Ranchi</a></li>
        <li><a href="<?php echo $base_url; ?>/packers-and-movers-in-hazaribagh" title="Packers and Movers in Hazaribagh">Packers and Movers in Hazaribagh</a></li>
        <li><a href="<?php echo $base_url; ?>/packers-and-movers-in-dhanbad" title="Packers and Movers in Dhanbad">Packers and Movers in Dhanbad</a></li>
        <li><a href="<?php echo $base_url; ?>/packers-and-movers-in-jamshedpur" title="Packers and Movers in Jamshedpur">Packers and Movers in Jamshedpur</a></li>
        <li><a href="<?php echo $base_url; ?>/packers-and-movers-in-deoghar" title="Packers and Movers in Deoghar">Packers and Movers in Deoghar</a></li>
        <li><a href="<?php echo $base_url; ?>/packers-and-movers-in-bokaro" title="Packers and Movers in Bokaro">Packers and Movers in Bokaro</a></li>
        <li><a href="<?php echo $base_url; ?>/packers-and-movers-in-giridih" title="Packers and Movers in Giridih">Packers and Movers in Giridih</a></li>
        <li><a href="<?php echo $base_url; ?>/packers-and-movers-in-chaibasa" title="Packers and Movers in Chaibasa">Packers and Movers in Chaibasa</a></li>
        <li><a href="<?php echo $base_url; ?>/packers-and-movers-in-simdega" title="Packers and Movers in Simdega">Packers and Movers in Simdega</a></li>
        <li><a href="<?php echo $base_url; ?>/packers-and-movers-in-khunti" title="Packers and Movers in Khunti">Packers and Movers in Khunti</a></li>
        <li><a href="<?php echo $base_url; ?>/packers-and-movers-in-ramgarh" title="Packers and Movers in Ramgarh">Packers and Movers in Ramgarh</a></li>
        <li><a href="<?php echo $base_url; ?>/packers-and-movers-in-saraikela-kharsawan" title="Packers and Movers in Saraikela-Kharsawan">Packers and Movers in Saraikela-Kharsawan</a></li>
        <li><a href="<?php echo $base_url; ?>/packers-and-movers-in-pakur" title="Packers and Movers in Pakur">Packers and Movers in Pakur</a></li>
        <li><a href="<?php echo $base_url; ?>/packers-and-movers-in-koderma" title="Packers and Movers in Koderma">Packers and Movers in Koderma</a></li>
        <li><a href="<?php echo $base_url; ?>/packers-and-movers-in-chatra" title="Packers and Movers in Chatra">Packers and Movers in Chatra</a></li>
        <li><a href="<?php echo $base_url; ?>/packers-and-movers-in-godda" title="Packers and Movers in Godda">Packers and Movers in Godda</a></li>
        <li><a href="<?php echo $base_url; ?>/packers-and-movers-in-latehar" title="Packers and Movers in Latehar">Packers and Movers in Latehar</a></li>
        <li><a href="<?php echo $base_url; ?>/packers-and-movers-in-palamu" title="Packers and Movers in Palamu">Packers and Movers in Palamu</a></li>
        <li><a href="<?php echo $base_url; ?>/packers-and-movers-in-dumka" title="Packers and Movers in Dumka">Packers and Movers in Dumka</a></li>
        <li><a href="<?php echo $base_url; ?>/packers-and-movers-in-gumla" title="Packers and Movers in Gumla">Packers and Movers in Gumla</a></li>
        <li><a href="<?php echo $base_url; ?>/packers-and-movers-in-jamtara" title="Packers and Movers in Jamtara">Packers and Movers in Jamtara</a></li>
        <li><a href="<?php echo $base_url; ?>/packers-and-movers-in-gharwha" title="Packers and Movers in Gharwha">Packers and Movers in Gharwha</a></li>
        <li><a href="<?php echo $base_url; ?>/packers-and-movers-in-daltonganj" title="Packers and Movers in Daltonganj">Packers and Movers in Daltonganj</a></li>
        <li><a href="<?php echo $base_url; ?>/packers-and-movers-in-lohardaga" title="Packers and Movers in Lohardaga">Packers and Movers in Lohardaga</a></li>
      </ul>
      <!-- Complete 158 Locations & Sub-Divisions Directory -->
      <?php render_footer_district_directory(); ?>
    </div>
  </div>

  <!-- Bottom Copyright Bar -->
  <div class="footer-bottom">
    <div class="container">
      <p>
        &copy; <?php echo date('Y'); ?> <strong><?php echo BUSINESS_NAME; ?></strong>. All Rights Reserved. | Designed for Excellence & Total Peace of Mind.
      </p>
    </div>
  </div>
</footer>

<!-- Floating Mobile Action Bar (Direct Call & WhatsApp on Smartphone) -->
<div class="floating-mobile-bar" aria-label="Quick Mobile Contacts">
  <div class="floating-mobile-grid">
    <a href="tel:<?php echo PRIMARY_PHONE_RAW; ?>" class="btn-floating-call" title="Call Shree Ashirwad Packers Now: <?php echo PRIMARY_PHONE; ?>">
      <svg viewBox="0 0 24 24" style="width:18px;height:18px;fill:currentColor;"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
      Call Now
    </a>
    <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn-floating-whatsapp" title="Chat on WhatsApp with Shree Ashirwad Packers">
      <svg viewBox="0 0 24 24" style="width:18px;height:18px;fill:currentColor;"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2z"/></svg>
      WhatsApp
    </a>
  </div>
</div>
