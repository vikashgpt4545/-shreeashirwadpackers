<?php
/**
 * Homepage - Shree Ashirwad Packers and Movers
 * Pure Core PHP Implementation
 * 
 * Scope: Header, Hero Section (Value Proposition + Lead Form), Footer.
 * Strictly NO extraneous sections.
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
  
  <!-- SEO & Schema Markup -->
  <?php render_seo_tags('home'); ?>

  <!-- Preconnect Google Fonts for High PageSpeed Core Web Vitals -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-MH5VFVB7R6"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-MH5VFVB7R6');
    gtag('config', '<?php echo GOOGLE_GTAG_ID; ?>');
  </script>
</head>
<body>

  <!-- 1. Header (Top Bar + Main Navigation) -->
  <?php include __DIR__ . '/includes/header.php'; ?>

  <!-- Main Content Area -->
  <main id="mainContent">
    <!-- 2. Hero Section (Left Value Proposition + Right Enquiry Form) -->
    <?php include __DIR__ . '/includes/hero.php'; ?>

    <!-- 3. Credentials & Live Trust Stats Bar -->
    <?php include __DIR__ . '/includes/sections/credentials-bar.php'; ?>

    <!-- 4. About Shree Ashirwad Packers and Movers -->
    <?php include __DIR__ . '/includes/sections/about.php'; ?>

    <!-- 5. 9 Core Relocation Services -->
    <?php include __DIR__ . '/includes/sections/services.php'; ?>

    <!-- 6. 4-Layer Protective Packing Methodology -->
    <?php include __DIR__ . '/includes/sections/packing-process.php'; ?>

    <!-- 7. IBA Approved Bills & Government / Bank Claims Guide -->
    <?php include __DIR__ . '/includes/sections/iba-billing.php'; ?>

    <!-- 8. Transparent Packers and Movers Charges & Pricing Matrix -->
    <?php include __DIR__ . '/includes/sections/pricing-table.php'; ?>

    <!-- 9. Hyper-Local Coverage in Ranchi Localities & 24 Jharkhand Districts -->
    <?php include __DIR__ . '/includes/sections/local-areas.php'; ?>

    <!-- 10. Real Customer Reviews from Google My Business (GMB) -->
    <?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

    <!-- 11. Step-by-Step Moving Process (How It Works) -->
    <?php include __DIR__ . '/includes/sections/how-it-works.php'; ?>

    <!-- 12. Frequently Asked Questions (FAQ) with Accordion -->
    <?php include __DIR__ . '/includes/sections/faq.php'; ?>

    <!-- 13. Pre-Footer Call to Action (CTA) Banner -->
    <?php include __DIR__ . '/includes/sections/cta-banner.php'; ?>
  </main>

  <!-- 3. Footer (Offices, Contacts, 23 Jharkhand Cities Grid & Mobile Actions) -->
  <?php include __DIR__ . '/includes/footer.php'; ?>

  <!-- Core Scripts -->
  <script src="<?php echo SITE_BASE_URL; ?>/assets/js/main.js" defer></script>
</body>
</html>
