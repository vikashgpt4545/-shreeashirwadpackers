<?php
/**
 * Header Component
 * Shree Ashirwad Packers and Movers
 */

require_once __DIR__ . '/config.php';
$base_url = SITE_BASE_URL;
?>
<!-- Top Notification & Contact Bar -->
<div class="topbar">
  <div class="container topbar-wrapper">
    <div class="topbar-contact">
      <span class="topbar-item">
        <svg viewBox="0 0 24 24" width="14" height="14"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
        <span>Call:</span>
        <a href="tel:+918409531615" title="Call Shree Ashirwad Packers: 8409531615">8409531615</a> / <a href="tel:+919835565233" title="Call Shree Ashirwad Packers: 9835565233">9835565233</a>
      </span>
      <span class="topbar-item">
        <svg viewBox="0 0 24 24" width="14" height="14"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
        <a href="mailto:<?php echo OFFICIAL_EMAIL; ?>" title="Email Shree Ashirwad Packers at <?php echo OFFICIAL_EMAIL; ?>"><?php echo OFFICIAL_EMAIL; ?></a>
      </span>
    </div>
    <div class="topbar-badges">
      <span class="topbar-badge">IBA Approved Bills</span>
      <span class="topbar-badge">ISO 9001:2015 Certified</span>
      <span class="topbar-badge">100% GST Compliant Invoices</span>
    </div>
  </div>
</div>

<!-- Main Sticky Header Navigation -->
<header class="site-header" id="siteHeader">
  <div class="container header-wrapper">
    <!-- Brand Logo & Identity -->
    <a href="<?php echo $base_url; ?>/" class="brand-logo" title="Shree Ashirwad Packers and Movers Homepage">
      <img src="<?php echo $base_url; ?>/assets/images/logo.png" alt="<?php echo BRAND_SHORT_NAME; ?> Logo" title="Shree Ashirwad Packers and Movers Official Logo" width="46" height="46">
      <div class="brand-info">
        <span class="brand-title"><?php echo BRAND_SHORT_NAME; ?></span>
        <span class="brand-tagline">Packers & Movers Jharkhand</span>
      </div>
    </a>

    <!-- Navigation Menu Links -->
    <nav aria-label="Main Navigation">
      <ul class="nav-menu" id="navMenu">
        <li><a href="<?php echo $base_url; ?>/" class="nav-link active" title="Shree Ashirwad Packers Homepage">Home</a></li>
        <li><a href="<?php echo $base_url; ?>/about" class="nav-link" title="About Shree Ashirwad Packers and Movers">About</a></li>
        
        <!-- Services Dropdown (Preserving all 9 exact service URLs) -->
        <li class="nav-item-dropdown">
          <a href="<?php echo $base_url; ?>/residential-shifting/" class="nav-link" title="Relocation and Shifting Services in Jharkhand">
            Services
            <svg viewBox="0 0 24 24" style="width:14px;height:14px;fill:currentColor;margin-left:2px;"><path d="M7 10l5 5 5-5z"/></svg>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $base_url; ?>/residential-shifting/" class="dropdown-link" title="Household Residential Shifting Services">Residential Shifting</a></li>
            <li><a href="<?php echo $base_url; ?>/business-shifting/" class="dropdown-link" title="Corporate Office and Business Relocation Services">Business Shifting</a></li>
            <li><a href="<?php echo $base_url; ?>/vehicle-shifting/" class="dropdown-link" title="Car Transport and Two Wheeler Vehicle Shifting">Vehicle Shifting</a></li>
            <li><a href="<?php echo $base_url; ?>/packing-and-unpacking/" class="dropdown-link" title="Professional 4-Layer Packing and Unpacking Services">Packing and Unpacking</a></li>
            <li><a href="<?php echo $base_url; ?>/loading-and-unloading-services/" class="dropdown-link" title="Safe Loading and Unloading Services">Loading and Unloading</a></li>
            <li><a href="<?php echo $base_url; ?>/warehouse-service/" class="dropdown-link" title="Household Storage and Commercial Warehousing Services">Warehouse Service</a></li>
            <li><a href="<?php echo $base_url; ?>/international-service/" class="dropdown-link" title="International Cargo and Relocation Services">International Service</a></li>
            <li><a href="<?php echo $base_url; ?>/domestics-service/" class="dropdown-link" title="Domestic All India Shifting Services">Domestic Service</a></li>
            <li><a href="<?php echo $base_url; ?>/insurance-service/" class="dropdown-link" title="Transit Insurance and Risk Coverage Services">Insurance Service</a></li>
          </ul>
        </li>

        <li><a href="<?php echo $base_url; ?>/gallery" class="nav-link" title="Photo Gallery of Moving Operations">Gallery</a></li>
        <li><a href="<?php echo $base_url; ?>/contact" class="nav-link" title="Contact Shree Ashirwad Packers and Movers">Contact</a></li>
        <li><a href="<?php echo $base_url; ?>/pay-online" class="nav-link" title="Pay Moving Invoice Online">Pay Online</a></li>
      </ul>
    </nav>

    <!-- Header Action Button with Phone Number -->
    <div class="header-cta">
      <a href="tel:+918409531615" class="btn-header-phone" title="Call Shree Ashirwad Packers: 8409531615">
        <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
        <span>8409531615</span>
      </a>
    </div>

    <!-- Mobile Hamburger Toggle -->
    <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle mobile menu" aria-expanded="false">
      <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <line x1="3" y1="12" x2="21" y2="12"></line>
        <line x1="3" y1="6" x2="21" y2="6"></line>
        <line x1="3" y1="18" x2="21" y2="18"></line>
      </svg>
    </button>
  </div>
</header>
<script>
(function(){
  function syncH(){
    var tb = document.querySelector('.topbar');
    var sh = document.querySelector('.site-header');
    var h = (tb && window.getComputedStyle(tb).display !== 'none' ? tb.offsetHeight : 0) + (sh ? sh.offsetHeight : 0);
    if(h > 0) document.documentElement.style.setProperty('--header-height', h + 'px');
  }
  syncH();
  window.addEventListener('resize', syncH);
})();
</script>
