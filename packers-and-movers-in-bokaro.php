<?php
/**
 * Packers and Movers in Bokaro - Shree Ashirwad Packers and Movers
 * Pure Core PHP Implementation
 * 
 * Target URL: https://www.shreeashirwadpackers.com/packers-and-movers-in-bokaro
 * Title: Packers and Movers in Bokaro - 8409531615
 * Branch Office: Plot no - 54/c, Post office sector - 12/A, Bokaro, Jharkhand - 827012
 * Coordinates: 23.6693° N, 86.1511° E
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$page_title = "Packers and Movers in Bokaro - 8409531615";
$page_description = "Hire verified packers and movers in Bokaro & Chas by Shree Ashirwad Packers. IBA approved bills, 5-layer packing, home shifting, vehicle transport. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/packers-and-movers-in-bokaro";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title><?php echo $page_title; ?></title>
  <meta name="description" content="<?php echo $page_description; ?>">
  <meta name="keywords" content="packers and movers in bokaro, packers and movers in chas bokaro, best packers and movers in bokaro, top packers and movers in bokaro, household shifting services in bokaro, car transport in bokaro, bike transport in bokaro, packers and movers in sector 4 bokaro, packers and movers in sector 12 bokaro, iba approved packers and movers in bokaro, packers and movers in bokaro charges">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <meta name="author" content="<?php echo htmlspecialchars(BUSINESS_NAME, ENT_QUOTES, 'UTF-8'); ?>">
  <link rel="canonical" href="<?php echo $canonical_url; ?>">

  <!-- Open Graph / Facebook / WhatsApp Preview -->
  <meta property="og:locale" content="en_IN">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo $page_title; ?>">
  <meta property="og:description" content="<?php echo $page_description; ?>">
  <meta property="og:url" content="<?php echo $canonical_url; ?>">
  <meta property="og:site_name" content="<?php echo htmlspecialchars(BUSINESS_NAME, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg">
  <meta property="og:image:width" content="1204">
  <meta property="og:image:height" content="1600">
  <meta property="og:image:alt" content="Packers and Movers in Bokaro Shree Ashirwad Packers">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo $page_title; ?>">
  <meta name="twitter:description" content="<?php echo $page_description; ?>">
  <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg">

  <!-- Google Verification & Geo Tags -->
  <meta name="google-site-verification" content="<?php echo htmlspecialchars(GOOGLE_SITE_VERIFICATION, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="theme-color" content="#1a2b4c">
  <meta name="geo.region" content="IN-JH">
  <meta name="geo.placename" content="Bokaro Steel City">
  <meta name="geo.position" content="23.6693;86.1511">
  <meta name="ICBM" content="23.6693, 86.1511">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
  <link rel="shortcut icon" href="<?php echo SITE_BASE_URL; ?>/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">

  <!-- Fonts & Core Stylesheet -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

  <!-- Google Tag Manager / Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo GOOGLE_GTAG_ID; ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '<?php echo GOOGLE_GTAG_ID; ?>');
  </script>

  <!-- Structured Data: MovingCompany / LocalBusiness Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "MovingCompany",
    "@id": "<?php echo $canonical_url; ?>/#movingcompany",
    "name": "Shree Ashirwad Packers and Movers Bokaro",
    "alternateName": "Shree Ashirwad Packers Bokaro",
    "url": "<?php echo $canonical_url; ?>",
    "logo": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
    "image": "<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg",
    "description": "<?php echo $page_description; ?>",
    "telephone": "+918409531615",
    "email": "enquiry@shreeashirwadpackers.com",
    "priceRange": "₹₹",
    "keywords": "packers and movers in bokaro, packers and movers in chas bokaro, best packers and movers in bokaro, top packers and movers in bokaro, household shifting services in bokaro, car transport in bokaro, bike transport in bokaro, iba approved packers and movers in bokaro, packers and movers in bokaro charges",
    "currenciesAccepted": "INR",
    "paymentAccepted": "Cash, UPI, Net Banking, Cheque",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Plot no - 54/c, Post office sector - 12/A",
      "addressLocality": "Bokaro Steel City",
      "addressRegion": "Jharkhand",
      "postalCode": "827012",
      "addressCountry": "IN"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 23.6693,
      "longitude": 86.1511
    },
    "hasMap": "https://maps.google.com/?q=23.6693,86.1511",
    "openingHoursSpecification": [
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
          "Saturday",
          "Sunday"
        ],
        "opens": "00:00",
        "closes": "23:59"
      }
    ],
    "areaServed": [
      {
        "@type": "AdministrativeArea",
        "name": "Bokaro Steel City"
      },
      {
        "@type": "AdministrativeArea",
        "name": "Chas"
      },
      {
        "@type": "AdministrativeArea",
        "name": "Bokaro District"
      }
    ]
  }
  </script>

  <!-- Structured Data: BreadcrumbList Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "<?php echo SITE_BASE_URL; ?>/"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Jharkhand",
        "item": "<?php echo SITE_BASE_URL; ?>/#services"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Packers and Movers in Bokaro",
        "item": "<?php echo $canonical_url; ?>"
      }
    ]
  }
  </script>

  <!-- Structured Data: FAQPage Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "What are the packers and movers charges in Bokaro for local house shifting?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Local shifting charges in Bokaro typically range between ₹3,500 and ₹7,000 for a 1 BHK home, ₹6,500 to ₹12,000 for a 2 BHK home, and ₹10,000 to ₹18,000 for a 3 BHK home. Exact charges depend on packing material tiers, floor levels, elevator availability, and transit distance between sectors or Chas."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide IBA approved moving bills for SAIL and PSU employees in Bokaro?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, Shree Ashirwad Packers provides 100% genuine IBA approved bills, GST invoices, consignment notes (bilty), and car condition reports. These documents comply fully with reimbursement guidelines for SAIL Bokaro Steel Plant (BSL), central government departments, banks, and defense personnel."
        }
      },
      {
        "@type": "Question",
        "name": "Where is your branch office located in Bokaro?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Our verified local branch office in Bokaro is located at Plot no - 54/c, Post office sector - 12/A, Bokaro, Jharkhand - 827012. You can contact our local moving coordinator directly at 8409531615 or 9835565233."
        }
      },
      {
        "@type": "Question",
        "name": "Do you handle relocations from Bokaro Steel City sectors to Chas?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we regularly manage residential and commercial shifting between Bokaro Steel City sectors (such as Sector 1, 4, 6, 9, 12) and Chas municipal areas (such as Chas Bazar, ITI More, Bypass Road, and Checkpost). Our team coordinates truck transit across the Garga bridge smoothly."
        }
      },
      {
        "@type": "Question",
        "name": "How do you ensure the safety of fragile items and electronic appliances during shifting?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We utilize a specialized 5-layer protective packing protocol. Fragile glassware, chinaware, and LED televisions receive double-layer air bubble wrap, corner foam protectors, corrugated fiberboard layering, stretch film moisture barriers, and custom wooden crating where necessary."
        }
      },
      {
        "@type": "Question",
        "name": "Can you transport cars and two-wheelers from Bokaro to other Indian states?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we provide dedicated enclosed car carrier trailers and wooden-crated bike transportation from Bokaro to all major Indian cities including Patna, Kolkata, Delhi NCR, Bengaluru, Hyderabad, and Mumbai, complete with door-to-door pickup and transit insurance."
        }
      },
      {
        "@type": "Question",
        "name": "How much advance notice is required to book a move in Bokaro?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "While we recommend booking 2 to 4 days in advance to ensure preferred truck scheduling and packing crew allocation, we also accommodate emergency and same-day moving requests across Bokaro Steel City and Chas based on vehicle availability."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide warehouse and luggage storage facilities in Bokaro?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we offer secure, CCTV-monitored, moisture-protected, and pest-controlled warehouse storage facilities in Jharkhand for short-term and long-term storage of household goods, office archives, and industrial equipment."
        }
      }
    ]
  }
  </script>
</head>
<body>

  <!-- Header Navigation -->
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main id="mainContent">

    <!-- Hero Section -->
    <section class="page-hero" style="position:relative; padding: 70px 0 50px; background: linear-gradient(135deg, #0b1727 0%, #102a45 60%, #1a3a5f 100%); color: #ffffff; overflow: hidden;">
      <div class="hero-glow hero-glow-1" style="position:absolute; top:-100px; left:-100px; width:400px; height:400px; background:radial-gradient(circle, rgba(255,106,40,0.15) 0%, rgba(255,106,40,0) 70%); border-radius:50%; pointer-events:none;"></div>
      <div class="hero-glow hero-glow-2" style="position:absolute; bottom:-100px; right:-100px; width:500px; height:500px; background:radial-gradient(circle, rgba(30,144,255,0.15) 0%, rgba(30,144,255,0) 70%); border-radius:50%; pointer-events:none;"></div>
      
      <div class="container page-hero-wrapper" style="position:relative; z-index:2; max-width:1140px; margin:0 auto; padding:0 20px;">
        <nav class="breadcrumb-trail" aria-label="Breadcrumb" style="margin-bottom:20px; font-size:0.9rem; color:#94a3b8;">
          <a href="<?php echo SITE_BASE_URL; ?>/" style="color:#cbd5e1; text-decoration:none;">Home</a>
          <span class="breadcrumb-sep" style="margin:0 8px; color:#64748b;">&gt;</span>
          <a href="<?php echo SITE_BASE_URL; ?>/#services" style="color:#cbd5e1; text-decoration:none;">Services</a>
          <span class="breadcrumb-sep" style="margin:0 8px; color:#64748b;">&gt;</span>
          <span aria-current="page" style="color:#ff6a28; font-weight:600;">Packers and Movers in Bokaro</span>
        </nav>
        
        <h1 class="page-hero-title" style="font-size: clamp(2rem, 4vw, 3rem); font-weight:800; line-height:1.2; margin-bottom:18px;">
          Packers and Movers in Bokaro - <span class="gradient-text" style="background: linear-gradient(90deg, #ff6a28, #ff8c52); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Shree Ashirwad Packers</span>
        </h1>
        
        <p class="page-hero-subtitle" style="font-size:1.15rem; line-height:1.7; color:#cbd5e1; max-width:880px; margin-bottom:28px;">
          Looking for trusted, certified, and professional packers and movers in Bokaro? Shree Ashirwad Packers and Movers brings over 15 years of industry excellence to Bokaro Steel City, Chas, and surrounding industrial belts. With our dedicated branch office in Sector 12/A, we deliver 100% damage-free household shifting, corporate relocations, industrial logistics, and vehicle transportation backed by authentic IBA-approved documentation.
        </p>

        <div class="hero-cta-buttons" style="display:flex; flex-wrap:wrap; gap:16px; align-items:center;">
          <a href="tel:<?php echo SECONDARY_PHONE_RAW; ?>" class="btn-primary-custom" style="display:inline-flex; align-items:center; gap:10px; background:#ff6a28; color:#ffffff; padding:14px 28px; border-radius:8px; font-weight:700; text-decoration:none; box-shadow: 0 4px 15px rgba(255,106,40,0.35); transition: all 0.3s ease;">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
            Call Bokaro Office: 8409531615
          </a>
          <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn-outline-custom" style="display:inline-flex; align-items:center; gap:10px; background:rgba(255,255,255,0.08); border:1px solid rgba(255,255,255,0.25); color:#ffffff; padding:14px 26px; border-radius:8px; font-weight:600; text-decoration:none; backdrop-filter:blur(6px); transition: all 0.3s ease;">
            WhatsApp Moving Estimate &rarr;
          </a>
        </div>
      </div>
    </section>

    <!-- Trust Credentials Bar -->
    <section class="credentials-bar-section" style="background:#ffffff; padding:30px 0; border-bottom:1px solid #e2e8f0;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">
        <div class="credentials-grid" style="display:grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap:24px; align-items:center;">
          
          <div class="credential-item" style="display:flex; align-items:center; gap:16px;">
            <div style="background:#fff2eb; color:#ff6a28; width:52px; height:52px; border-radius:10px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
              <svg viewBox="0 0 24 24" width="26" height="26" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            </div>
            <div>
              <div style="font-size:1.4rem; font-weight:800; color:#0f223d;">15+ Years</div>
              <div style="font-size:0.88rem; color:#64748b;">Relocation Excellence</div>
            </div>
          </div>

          <div class="credential-item" style="display:flex; align-items:center; gap:16px;">
            <div style="background:#eff6ff; color:#2563eb; width:52px; height:52px; border-radius:10px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
              <svg viewBox="0 0 24 24" width="26" height="26" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
            </div>
            <div>
              <div style="font-size:1.4rem; font-weight:800; color:#0f223d;">IBA Approved</div>
              <div style="font-size:0.88rem; color:#64748b;">100% Claim Reimbursement</div>
            </div>
          </div>

          <div class="credential-item" style="display:flex; align-items:center; gap:16px;">
            <div style="background:#f0fdf4; color:#16a34a; width:52px; height:52px; border-radius:10px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
              <svg viewBox="0 0 24 24" width="26" height="26" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
            </div>
            <div>
              <div style="font-size:1.4rem; font-weight:800; color:#0f223d;">5-Layer Packing</div>
              <div style="font-size:0.88rem; color:#64748b;">Zero-Damage Guarantee</div>
            </div>
          </div>

          <div class="credential-item" style="display:flex; align-items:center; gap:16px;">
            <div style="background:#fef3c7; color:#d97706; width:52px; height:52px; border-radius:10px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
              <svg viewBox="0 0 24 24" width="26" height="26" fill="currentColor"><path d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm13.5-9l1.96 2.5H17V9.5h2.5zm-1.5 9c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/></svg>
            </div>
            <div>
              <div style="font-size:1.4rem; font-weight:800; color:#0f223d;">Dedicated Fleet</div>
              <div style="font-size:0.88rem; color:#64748b;">Closed Container Trucks</div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Main Content Body -->
    <div class="container" style="max-width:1140px; margin:50px auto; padding:0 20px;">
      
      <!-- Section 1: Detailed Introduction & Local Context (Visually Broken Up, No Wall of Text) -->
      <section style="margin-bottom:60px;">
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:36px; align-items:center;">
          <div>
            <span style="background:#fff2eb; color:#ff6a28; padding:4px 12px; border-radius:9999px; font-weight:700; font-size:0.82rem; text-transform:uppercase; display:inline-block; margin-bottom:12px;">
              Bokaro Shifting Experts
            </span>
            <h2 style="font-size:clamp(1.8rem, 3vw, 2.3rem); font-weight:800; color:#0f223d; margin-bottom:18px; line-height:1.25;">
              Trusted Packers and Movers in Bokaro Steel City & Chas
            </h2>
            <p style="font-size:1.02rem; line-height:1.75; color:#334155; margin-bottom:16px;">
              Bokaro Steel City, celebrated as the industrial capital of Jharkhand and home to the massive Bokaro Steel Plant (SAIL), presents a specialized relocation environment. From organized township sectors to the vibrant commercial markets of Chas across the Garga River, finding an experienced moving partner is essential.
            </p>
            <p style="font-size:1.02rem; line-height:1.75; color:#334155; margin-bottom:20px;">
              Shree Ashirwad Packers and Movers has earned an unmatched reputation as Jharkhand's premier relocation specialist. With our local branch office situated in Sector 12/A, we deliver personalized, transparent, and prompt shifting services designed specifically for Bokaro families, public sector executives, and local business owners.
            </p>
            
            <!-- Quick Feature Highlight Pills -->
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px; margin-bottom:24px;">
              <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:8px; padding:12px; display:flex; align-items:center; gap:10px;">
                <span style="color:#ff6a28; font-weight:800; font-size:1.1rem;">&#10003;</span>
                <span style="font-size:0.9rem; font-weight:600; color:#0f223d;">IBA Approved Invoices</span>
              </div>
              <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:8px; padding:12px; display:flex; align-items:center; gap:10px;">
                <span style="color:#ff6a28; font-weight:800; font-size:1.1rem;">&#10003;</span>
                <span style="font-size:0.9rem; font-weight:600; color:#0f223d;">5-Layer Cushioning</span>
              </div>
              <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:8px; padding:12px; display:flex; align-items:center; gap:10px;">
                <span style="color:#ff6a28; font-weight:800; font-size:1.1rem;">&#10003;</span>
                <span style="font-size:0.9rem; font-weight:600; color:#0f223d;">Local Sector 12/A Office</span>
              </div>
              <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:8px; padding:12px; display:flex; align-items:center; gap:10px;">
                <span style="color:#ff6a28; font-weight:800; font-size:1.1rem;">&#10003;</span>
                <span style="font-size:0.9rem; font-weight:600; color:#0f223d;">Zero Hidden Charges</span>
              </div>
            </div>

          </div>

          <!-- Image 1: Correct 3:4 Aspect Ratio Container -->
          <div style="display:flex; justify-content:center;">
            <figure style="margin:0; max-width:400px; width:100%;">
              <div style="position:relative; width:100%; aspect-ratio:3/4; border-radius:14px; overflow:hidden; box-shadow:0 8px 25px rgba(0,0,0,0.08); background:#f1f5f9;">
                <img 
                  src="<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg" 
                  alt="Professional wooden furniture wrapping and packing in Bokaro Steel City" 
                  loading="lazy" 
                  style="width:100%; height:100%; object-fit:cover; display:block;"
                >
              </div>
              <figcaption style="margin-top:10px; font-size:0.85rem; color:#64748b; text-align:center; font-style:italic;">
                Multi-layer protective bubble & corrugated wrapping for wooden furniture in Bokaro
              </figcaption>
            </figure>
          </div>
        </div>

        <!-- Two Column Key Moving Drivers Box -->
        <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:12px; padding:28px; margin-top:35px;">
          <h3 style="font-size:1.25rem; font-weight:700; color:#0f223d; margin-bottom:16px;">
            Key Relocation Dynamics in the Bokaro Region
          </h3>
          <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:20px;">
            <div style="background:#ffffff; border:1px solid #edf2f7; border-radius:8px; padding:18px;">
              <h4 style="font-size:1.05rem; font-weight:700; color:#ff6a28; margin-bottom:8px;">SAIL & PSU Quarter Movements</h4>
              <p style="font-size:0.92rem; line-height:1.6; color:#475569; margin:0;">
                Regular employee transfers between BSL township sectors (Sectors 1, 3, 4, 6, 9, 12) require specialized dismantling of heavy teak furniture, steel almirahs, and prompt issuance of company-approved moving bills.
              </p>
            </div>
            <div style="background:#ffffff; border:1px solid #edf2f7; border-radius:8px; padding:18px;">
              <h4 style="font-size:1.05rem; font-weight:700; color:#2563eb; margin-bottom:8px;">Chas Commercial & Residential Boom</h4>
              <p style="font-size:0.92rem; line-height:1.6; color:#475569; margin:0;">
                The rapid development of multi-story apartments along Chas Bypass and ITI More attracts families upgrading their homes, requiring disciplined maneuvering through dense commercial traffic.
              </p>
            </div>
            <div style="background:#ffffff; border:1px solid #edf2f7; border-radius:8px; padding:18px;">
              <h4 style="font-size:1.05rem; font-weight:700; color:#16a34a; margin-bottom:8px;">Balidih Industrial Logistics</h4>
              <p style="font-size:0.92rem; line-height:1.6; color:#475569; margin:0;">
                The Balidih Industrial Area (BIADA) houses engineering workshops, manufacturing plants, and fabrication units needing precision transport of machinery, spares, and office files.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Section 2: Comprehensive Relocation Services in Bokaro -->
      <section style="margin-bottom:60px;">
        <h2 style="font-size:2rem; font-weight:800; color:#0f223d; margin-bottom:16px;">
          Comprehensive Shifting & Relocation Services in Bokaro
        </h2>
        <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:30px;">
          Every household and business in Bokaro has distinct moving requirements. We provide an exhaustive array of specialized relocation services executed by in-house trained crews using top-tier packaging materials.
        </p>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:24px; margin-bottom:35px;">
          
          <!-- Service Card 1 -->
          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; padding:26px; box-shadow:0 2px 8px rgba(0,0,0,0.04); display:flex; flex-direction:column; justify-content:space-between;">
            <div>
              <div style="color:#ff6a28; font-size:1.8rem; margin-bottom:12px;">&#127968;</div>
              <h3 style="font-size:1.25rem; font-weight:700; color:#0f223d; margin-bottom:10px;">
                <a href="<?php echo SITE_BASE_URL; ?>/residential-shifting/" style="color:#0f223d; text-decoration:none;">Household Shifting Services</a>
              </h3>
              <p style="font-size:0.95rem; line-height:1.6; color:#475569; margin-bottom:16px;">
                Complete home relocation for apartments, independent houses, and SAIL quarters. From delicate crockery and heavy double beds to modular kitchens and wardrobes, our crew dismantles, multi-layer wraps, transports, and reassembles every item seamlessly.
              </p>
            </div>
            <a href="<?php echo SITE_BASE_URL; ?>/residential-shifting/" style="color:#ff6a28; font-weight:600; font-size:0.92rem; text-decoration:none;">Explore Home Shifting &rarr;</a>
          </div>

          <!-- Service Card 2 -->
          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; padding:26px; box-shadow:0 2px 8px rgba(0,0,0,0.04); display:flex; flex-direction:column; justify-content:space-between;">
            <div>
              <div style="color:#2563eb; font-size:1.8rem; margin-bottom:12px;">&#128188;</div>
              <h3 style="font-size:1.25rem; font-weight:700; color:#0f223d; margin-bottom:10px;">
                <a href="<?php echo SITE_BASE_URL; ?>/business-shifting/" style="color:#0f223d; text-decoration:none;">Corporate & Office Relocation</a>
              </h3>
              <p style="font-size:0.95rem; line-height:1.6; color:#475569; margin-bottom:16px;">
                Zero-downtime office shifting for commercial enterprises in Sector 4 City Centre and Chas Bazar. We handle IT workstation packing, server relocation, confidential document file coding, conference furniture, and modular cubicle reinstallation.
              </p>
            </div>
            <a href="<?php echo SITE_BASE_URL; ?>/business-shifting/" style="color:#2563eb; font-weight:600; font-size:0.92rem; text-decoration:none;">Explore Office Shifting &rarr;</a>
          </div>

          <!-- Service Card 3 -->
          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; padding:26px; box-shadow:0 2px 8px rgba(0,0,0,0.04); display:flex; flex-direction:column; justify-content:space-between;">
            <div>
              <div style="color:#16a34a; font-size:1.8rem; margin-bottom:12px;">&#128663;</div>
              <h3 style="font-size:1.25rem; font-weight:700; color:#0f223d; margin-bottom:10px;">
                <a href="<?php echo SITE_BASE_URL; ?>/vehicle-shifting/" style="color:#0f223d; text-decoration:none;">Car Carrier & Bike Transportation</a>
              </h3>
              <p style="font-size:0.95rem; line-height:1.6; color:#475569; margin-bottom:16px;">
                Safe, insured vehicle transportation across India using enclosed car carriers and wooden-crated bike packing. Equipped with wheel locks, safety harnesses, and GPS tracking for sedans, SUVs, and motorcycles.
              </p>
            </div>
            <a href="<?php echo SITE_BASE_URL; ?>/vehicle-shifting/" style="color:#16a34a; font-weight:600; font-size:0.92rem; text-decoration:none;">Explore Vehicle Shifting &rarr;</a>
          </div>

          <!-- Service Card 4 -->
          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; padding:26px; box-shadow:0 2px 8px rgba(0,0,0,0.04); display:flex; flex-direction:column; justify-content:space-between;">
            <div>
              <div style="color:#8b5cf6; font-size:1.8rem; margin-bottom:12px;">&#128230;</div>
              <h3 style="font-size:1.25rem; font-weight:700; color:#0f223d; margin-bottom:10px;">
                <a href="<?php echo SITE_BASE_URL; ?>/packing-and-unpacking/" style="color:#0f223d; text-decoration:none;">5-Layer Packing & Unpacking</a>
              </h3>
              <p style="font-size:0.95rem; line-height:1.6; color:#475569; margin-bottom:16px;">
                Scientific packaging utilizing virgin bubble wrap, corrugated sheets, foam edge protectors, waterproof stretch wraps, and heavy-duty carton boxes. Full post-move unpacking and placement assistance included.
              </p>
            </div>
            <a href="<?php echo SITE_BASE_URL; ?>/packing-and-unpacking/" style="color:#8b5cf6; font-weight:600; font-size:0.92rem; text-decoration:none;">Explore Packing Services &rarr;</a>
          </div>

          <!-- Service Card 5 -->
          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; padding:26px; box-shadow:0 2px 8px rgba(0,0,0,0.04); display:flex; flex-direction:column; justify-content:space-between;">
            <div>
              <div style="color:#ea580c; font-size:1.8rem; margin-bottom:12px;">&#128651;</div>
              <h3 style="font-size:1.25rem; font-weight:700; color:#0f223d; margin-bottom:10px;">
                <a href="<?php echo SITE_BASE_URL; ?>/loading-and-unloading-services/" style="color:#0f223d; text-decoration:none;">Loading & Unloading Services</a>
              </h3>
              <p style="font-size:0.95rem; line-height:1.6; color:#475569; margin-bottom:16px;">
                Trained moving laborers equipped with hydraulic trolleys, lifting straps, furniture sliders, and safety gear. Zero damage to stairwells, doorways, walls, or delicate flooring in multi-story apartments.
              </p>
            </div>
            <a href="<?php echo SITE_BASE_URL; ?>/loading-and-unloading-services/" style="color:#ea580c; font-weight:600; font-size:0.92rem; text-decoration:none;">Explore Loading Services &rarr;</a>
          </div>

          <!-- Service Card 6 -->
          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; padding:26px; box-shadow:0 2px 8px rgba(0,0,0,0.04); display:flex; flex-direction:column; justify-content:space-between;">
            <div>
              <div style="color:#0284c7; font-size:1.8rem; margin-bottom:12px;">&#127981;</div>
              <h3 style="font-size:1.25rem; font-weight:700; color:#0f223d; margin-bottom:10px;">
                <a href="<?php echo SITE_BASE_URL; ?>/warehouse-service/" style="color:#0f223d; text-decoration:none;">Warehousing & Household Storage</a>
              </h3>
              <p style="font-size:0.95rem; line-height:1.6; color:#475569; margin-bottom:16px;">
                Secure, climate-controlled, pest-treated warehouse facilities for short-term and long-term storage of household goods, business inventory, and machinery with 24/7 CCTV surveillance and insurance coverage.
              </p>
            </div>
            <a href="<?php echo SITE_BASE_URL; ?>/warehouse-service/" style="color:#0284c7; font-weight:600; font-size:0.92rem; text-decoration:none;">Explore Warehouse Storage &rarr;</a>
          </div>

        </div>

        <!-- Image 2 & Feature Spotlight: Car Carrier & Transport -->
        <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:14px; padding:28px; display:grid; grid-template-columns:repeat(auto-fit, minmax(300px, 1fr)); gap:30px; align-items:center;">
          <div style="display:flex; justify-content:center;">
            <figure style="margin:0; max-width:380px; width:100%;">
              <div style="position:relative; width:100%; aspect-ratio:3/4; border-radius:12px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.08); background:#f1f5f9;">
                <img 
                  src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" 
                  alt="Car carrier loading and vehicle transport service in Bokaro" 
                  loading="lazy" 
                  style="width:100%; height:100%; object-fit:cover; display:block;"
                >
              </div>
              <figcaption style="margin-top:10px; font-size:0.85rem; color:#64748b; text-align:center; font-style:italic;">
                Car carrier loading with hydraulic ramp & safety wheel stoppers for Bokaro clients
              </figcaption>
            </figure>
          </div>
          <div>
            <span style="background:#eff6ff; color:#2563eb; padding:4px 12px; border-radius:9999px; font-weight:700; font-size:0.82rem; text-transform:uppercase; display:inline-block; margin-bottom:10px;">
              Specialized Automobile Transport
            </span>
            <h3 style="font-size:1.4rem; font-weight:800; color:#0f223d; margin-bottom:14px;">
              Zero-Scratch Vehicle Shifting from Bokaro
            </h3>
            <p style="font-size:0.98rem; line-height:1.7; color:#475569; margin-bottom:16px;">
              Transporting personal sedans, hatchbacks, SUVs, or luxury motorcycles over long distances requires dedicated infrastructure. We do not drive your car over highways; we load it onto closed hydraulic car trailers.
            </p>
            <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:10px; color:#334155; font-size:0.92rem;">
              <li style="display:flex; align-items:center; gap:8px;">
                <span style="color:#16a34a; font-weight:bold;">&#10004;</span>
                <span>Pre-loading physical inspection with photo-verified condition report</span>
              </li>
              <li style="display:flex; align-items:center; gap:8px;">
                <span style="color:#16a34a; font-weight:bold;">&#10004;</span>
                <span>Four-point wheel locking system ensuring zero in-transit movement</span>
              </li>
              <li style="display:flex; align-items:center; gap:8px;">
                <span style="color:#16a34a; font-weight:bold;">&#10004;</span>
                <span>Comprehensive transit insurance coverage underwritten by leading national insurers</span>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!-- Section 3: In-Depth Locality Coverage Across Bokaro -->
      <section style="margin-bottom:60px;">
        <h2 style="font-size:2rem; font-weight:800; color:#0f223d; margin-bottom:20px;">
          Locality & Sector Coverage Matrix in Bokaro District
        </h2>
        <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:24px;">
          Shree Ashirwad Packers and Movers operates dedicated localized moving crews across all residential sectors, commercial zones, and industrial subdivisions of Bokaro. Below is an overview of our specialized coverage across the district:
        </p>

        <div style="display:grid; grid-template-columns:1fr 1fr; gap:28px; margin-bottom:35px;">
          
          <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:12px; padding:24px;">
            <h3 style="font-size:1.2rem; font-weight:700; color:#0f223d; margin-bottom:14px; border-bottom:2px solid #ff6a28; padding-bottom:8px;">
              Bokaro Steel City Sectors
            </h3>
            <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:12px; color:#475569; font-size:0.95rem;">
              <li><strong>Sector 1 & Sector 2:</strong> Well-established residential avenues, older quarter complexes requiring customized furniture dismantling for narrow stairwells.</li>
              <li><strong>Sector 3 & Sector 5:</strong> Dense employee housing with high volumes of transfer moves during financial and academic year-ends.</li>
              <li><strong>Sector 4 (City Centre):</strong> Commercial hubs, retail stores, coaching institutes, and executive residences requiring timed night-moving to prevent retail disruption.</li>
              <li><strong>Sector 6, 8 & 9:</strong> Large residential quarters, extensive school zones (DPS, Chinmaya) requiring coordinated family relocation services.</li>
              <li><strong>Sector 11 & Sector 12 (including 12/A):</strong> Location of our local branch office, modern residential apartments, and direct connectivity to Chas bypass.</li>
            </ul>
          </div>

          <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:12px; padding:24px;">
            <h3 style="font-size:1.2rem; font-weight:700; color:#0f223d; margin-bottom:14px; border-bottom:2px solid #2563eb; padding-bottom:8px;">
              Chas & Satellite Industrial Belts
            </h3>
            <ul style="list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:12px; color:#475569; font-size:0.95rem;">
              <li><strong>Chas Municipal Corporation:</strong> Chas Bazar, ITI More, Checkpost, Jhopro, and Bypass Road, demanding skilled navigation through bustling commercial thoroughfares.</li>
              <li><strong>Cooperative Colony & Camp 2:</strong> High-density private residential neighborhoods with multi-story bungalows and apartment towers.</li>
              <li><strong>Balidih Industrial Area (BIADA):</strong> Industrial manufacturing facilities, engineering workshops, and ancillary steel processing logistics.</li>
              <li><strong>Chandrapura & Bermo Coal Belt:</strong> Power plant township logistics (DVC Chandrapura) and mining executive relocations in Phusro and Bermo.</li>
              <li><strong>Gomia, Jaridih, Petarwar & Chandankiyari:</strong> Rural and semi-urban moving connectivity along the NH-320 and Purulia road arteries.</li>
            </ul>
          </div>

        </div>

        <!-- Image 3: Fleet & Truck Display (Correct 3:4 Aspect Ratio Container) -->
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(300px, 1fr)); gap:30px; align-items:center; background:#ffffff; border:1px solid #e2e8f0; border-radius:14px; padding:26px;">
          <div>
            <span style="background:#f0fdf4; color:#16a34a; padding:4px 12px; border-radius:9999px; font-weight:700; font-size:0.82rem; text-transform:uppercase; display:inline-block; margin-bottom:10px;">
              Company-Owned Moving Fleet
            </span>
            <h3 style="font-size:1.4rem; font-weight:800; color:#0f223d; margin-bottom:14px;">
              All-Weather Closed Container Vehicles
            </h3>
            <p style="font-size:0.98rem; line-height:1.7; color:#475569; margin-bottom:14px;">
              Unlike local freight brokers who hire open tarpaulin trucks, Shree Ashirwad Packers maintains dedicated company container vehicles. This guarantees complete protection against coal-dust, sudden monsoons, and highway theft.
            </p>
            <p style="font-size:0.98rem; line-height:1.7; color:#475569; margin:0;">
              Every vehicle is equipped with active GPS tracking, enabling our Bokaro logistics supervisors to monitor transit milestones 24 hours a day.
            </p>
          </div>
          <div style="display:flex; justify-content:center;">
            <figure style="margin:0; max-width:380px; width:100%;">
              <div style="position:relative; width:100%; aspect-ratio:3/4; border-radius:12px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.08); background:#f1f5f9;">
                <img 
                  src="<?php echo SITE_BASE_URL; ?>/images/shree-ashirwad-verified-moving-truck-jharkhand.jpg" 
                  alt="Shree Ashirwad Packers and Movers verified moving truck in Bokaro" 
                  loading="lazy" 
                  style="width:100%; height:100%; object-fit:cover; display:block;"
                >
              </div>
              <figcaption style="margin-top:10px; font-size:0.85rem; color:#64748b; text-align:center; font-style:italic;">
                Our verified, sealed container moving truck stationed at Bokaro branch
              </figcaption>
            </figure>
          </div>
        </div>
      </section>

      <!-- Section 4: Transparent Cost Matrix & Pricing Table -->
      <section style="margin-bottom:60px;">
        <h2 style="font-size:2rem; font-weight:800; color:#0f223d; margin-bottom:16px;">
          Transparent Packers and Movers Charges in Bokaro
        </h2>
        <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:24px;">
          We believe in 100% upfront pricing with no hidden charges, surprise fuel surcharges, or post-transit price escalations. The tables below outline realistic market estimates for local shifting within Bokaro and Chas, as well as popular intercity routes connecting Bokaro with major Indian urban centers.
        </p>

        <!-- Local Shifting Rates Table -->
        <div style="overflow-x:auto; margin-bottom:35px; border-radius:10px; box-shadow:0 2px 10px rgba(0,0,0,0.05);">
          <table style="width:100%; border-collapse:collapse; background:#ffffff; text-align:left; font-size:0.95rem;">
            <thead>
              <tr style="background:#0f223d; color:#ffffff;">
                <th style="padding:14px 18px; font-weight:700;">Home Configuration</th>
                <th style="padding:14px 18px; font-weight:700;">Packing & Materials</th>
                <th style="padding:14px 18px; font-weight:700;">Labor & Handling</th>
                <th style="padding:14px 18px; font-weight:700;">Local Transport (Within Bokaro)</th>
                <th style="padding:14px 18px; font-weight:700;">Total Estimated Cost</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom:1px solid #e2e8f0;">
                <td style="padding:14px 18px; font-weight:600; color:#0f223d;">1 RK / 1 BHK Flat</td>
                <td style="padding:14px 18px; color:#475569;">₹1,200 – ₹2,200</td>
                <td style="padding:14px 18px; color:#475569;">₹1,200 – ₹2,000</td>
                <td style="padding:14px 18px; color:#475569;">₹1,100 – ₹2,800</td>
                <td style="padding:14px 18px; font-weight:700; color:#ff6a28;">₹3,500 – ₹7,000</td>
              </tr>
              <tr style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                <td style="padding:14px 18px; font-weight:600; color:#0f223d;">2 BHK Flat / Quarter</td>
                <td style="padding:14px 18px; color:#475569;">₹2,200 – ₹4,000</td>
                <td style="padding:14px 18px; color:#475569;">₹2,000 – ₹3,500</td>
                <td style="padding:14px 18px; color:#475569;">₹2,300 – ₹4,500</td>
                <td style="padding:14px 18px; font-weight:700; color:#ff6a28;">₹6,500 – ₹12,000</td>
              </tr>
              <tr style="border-bottom:1px solid #e2e8f0;">
                <td style="padding:14px 18px; font-weight:600; color:#0f223d;">3 BHK Apartment / Bungalow</td>
                <td style="padding:14px 18px; color:#475569;">₹3,500 – ₹6,000</td>
                <td style="padding:14px 18px; color:#475569;">₹3,000 – ₹5,500</td>
                <td style="padding:14px 18px; color:#475569;">₹3,500 – ₹6,500</td>
                <td style="padding:14px 18px; font-weight:700; color:#ff6a28;">₹10,000 – ₹18,000</td>
              </tr>
              <tr style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                <td style="padding:14px 18px; font-weight:600; color:#0f223d;">4 BHK / Large Villa</td>
                <td style="padding:14px 18px; color:#475569;">₹5,000 – ₹9,000</td>
                <td style="padding:14px 18px; color:#475569;">₹4,500 – ₹7,500</td>
                <td style="padding:14px 18px; color:#475569;">₹5,500 – ₹9,500</td>
                <td style="padding:14px 18px; font-weight:700; color:#ff6a28;">₹15,000 – ₹26,000</td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Intercity & Vehicle Transport Rates Table -->
        <h3 style="font-size:1.3rem; font-weight:700; color:#0f223d; margin-bottom:16px;">
          Intercity Moving & Vehicle Relocation Rates from Bokaro
        </h3>
        <div style="overflow-x:auto; border-radius:10px; box-shadow:0 2px 10px rgba(0,0,0,0.05);">
          <table style="width:100%; border-collapse:collapse; background:#ffffff; text-align:left; font-size:0.95rem;">
            <thead>
              <tr style="background:#1e3a5f; color:#ffffff;">
                <th style="padding:14px 18px; font-weight:700;">Route Destination</th>
                <th style="padding:14px 18px; font-weight:700;">Distance (Approx.)</th>
                <th style="padding:14px 18px; font-weight:700;">1-2 BHK Complete Shifting</th>
                <th style="padding:14px 18px; font-weight:700;">Two-Wheeler Transport</th>
                <th style="padding:14px 18px; font-weight:700;">Car Carrier Transport</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom:1px solid #e2e8f0;">
                <td style="padding:14px 18px; font-weight:600; color:#0f223d;">Bokaro to Ranchi</td>
                <td style="padding:14px 18px; color:#475569;">~115 km (NH-320)</td>
                <td style="padding:14px 18px; color:#475569;">₹11,000 – ₹18,000</td>
                <td style="padding:14px 18px; color:#475569;">₹2,000 – ₹3,500</td>
                <td style="padding:14px 18px; color:#475569;">₹6,500 – ₹9,500</td>
              </tr>
              <tr style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                <td style="padding:14px 18px; font-weight:600; color:#0f223d;">Bokaro to Dhanbad</td>
                <td style="padding:14px 18px; color:#475569;">~45 km (NH-218)</td>
                <td style="padding:14px 18px; color:#475569;">₹8,000 – ₹14,000</td>
                <td style="padding:14px 18px; color:#475569;">₹1,800 – ₹2,800</td>
                <td style="padding:14px 18px; color:#475569;">₹5,000 – ₹7,500</td>
              </tr>
              <tr style="border-bottom:1px solid #e2e8f0;">
                <td style="padding:14px 18px; font-weight:600; color:#0f223d;">Bokaro to Jamshedpur</td>
                <td style="padding:14px 18px; color:#475569;">~125 km (via Purulia/NH-18)</td>
                <td style="padding:14px 18px; color:#475569;">₹12,000 – ₹20,000</td>
                <td style="padding:14px 18px; color:#475569;">₹2,500 – ₹4,000</td>
                <td style="padding:14px 18px; color:#475569;">₹7,000 – ₹10,500</td>
              </tr>
              <tr style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                <td style="padding:14px 18px; font-weight:600; color:#0f223d;">Bokaro to Patna</td>
                <td style="padding:14px 18px; color:#475569;">~310 km (NH-20 / NH-33)</td>
                <td style="padding:14px 18px; color:#475569;">₹18,000 – ₹32,000</td>
                <td style="padding:14px 18px; color:#475569;">₹3,500 – ₹5,500</td>
                <td style="padding:14px 18px; color:#475569;">₹10,500 – ₹15,000</td>
              </tr>
              <tr style="border-bottom:1px solid #e2e8f0;">
                <td style="padding:14px 18px; font-weight:600; color:#0f223d;">Bokaro to Kolkata</td>
                <td style="padding:14px 18px; color:#475569;">~305 km (NH-19 / Grand Trunk)</td>
                <td style="padding:14px 18px; color:#475569;">₹17,000 – ₹30,000</td>
                <td style="padding:14px 18px; color:#475569;">₹3,500 – ₹5,000</td>
                <td style="padding:14px 18px; color:#475569;">₹10,000 – ₹14,500</td>
              </tr>
              <tr style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                <td style="padding:14px 18px; font-weight:600; color:#0f223d;">Bokaro to Delhi NCR</td>
                <td style="padding:14px 18px; color:#475569;">~1,180 km (NH-19 Corridor)</td>
                <td style="padding:14px 18px; color:#475569;">₹32,000 – ₹55,000</td>
                <td style="padding:14px 18px; color:#475569;">₹5,500 – ₹8,000</td>
                <td style="padding:14px 18px; color:#475569;">₹16,000 – ₹24,000</td>
              </tr>
              <tr style="border-bottom:1px solid #e2e8f0;">
                <td style="padding:14px 18px; font-weight:600; color:#0f223d;">Bokaro to Bengaluru</td>
                <td style="padding:14px 18px; color:#475569;">~1,780 km (NH-16 / NH-44)</td>
                <td style="padding:14px 18px; color:#475569;">₹42,000 – ₹72,000</td>
                <td style="padding:14px 18px; color:#475569;">₹6,500 – ₹9,500</td>
                <td style="padding:14px 18px; color:#475569;">₹19,000 – ₹28,000</td>
              </tr>
            </tbody>
          </table>
        </div>
        <p style="font-size:0.88rem; color:#64748b; margin-top:12px; font-style:italic;">
          * Note: Actual costs are influenced by total item volume, floor levels without elevator access, specialized crating requirements, and optional transit insurance coverage (typically 3% of declared consignment value).
        </p>
      </section>

      <!-- Section 5: The Scientific 5-Step Relocation Process -->
      <section style="margin-bottom:60px;">
        <h2 style="font-size:2rem; font-weight:800; color:#0f223d; margin-bottom:20px;">
          Our Scientific 5-Step Moving Process in Bokaro
        </h2>
        <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:30px;">
          At Shree Ashirwad Packers and Movers, we treat every move as a precision engineering project. We follow an internationally benchmarked 5-stage relocation methodology designed to ensure total safety, complete transparency, and zero damage.
        </p>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(300px, 1fr)); gap:24px;">
          
          <div style="background:#ffffff; border-left:4px solid #ff6a28; border-radius:0 10px 10px 0; padding:22px; box-shadow:0 2px 8px rgba(0,0,0,0.04);">
            <div style="font-size:0.85rem; font-weight:800; color:#ff6a28; text-transform:uppercase; letter-spacing:1px; margin-bottom:6px;">Stage 01</div>
            <h3 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:10px;">Pre-Move Survey & Fixed Quote</h3>
            <p style="font-size:0.92rem; line-height:1.6; color:#475569;">
              Our moving estimator conducts a comprehensive physical survey at your home in Bokaro or Chas (or a convenient video survey via WhatsApp). We catalog large furniture, delicate glass, electronic appliances, and vehicle details to provide an all-inclusive, binding written quotation.
            </p>
          </div>

          <div style="background:#ffffff; border-left:4px solid #2563eb; border-radius:0 10px 10px 0; padding:22px; box-shadow:0 2px 8px rgba(0,0,0,0.04);">
            <div style="font-size:0.85rem; font-weight:800; color:#2563eb; text-transform:uppercase; letter-spacing:1px; margin-bottom:6px;">Stage 02</div>
            <h3 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:10px;">Multi-Layer Protective Packing</h3>
            <p style="font-size:0.92rem; line-height:1.6; color:#475569;">
              On moving day, our certified packing crew arrives on time with high-grade packaging materials. We apply multi-layer bubble wrap to electronics, heavy-duty corrugated sheets to wooden furniture, plastic stretch wraps to fabric sofas, and custom wooden crating for chandeliers and TVs.
            </p>
          </div>

          <div style="background:#ffffff; border-left:4px solid #16a34a; border-radius:0 10px 10px 0; padding:22px; box-shadow:0 2px 8px rgba(0,0,0,0.04);">
            <div style="font-size:0.85rem; font-weight:800; color:#16a34a; text-transform:uppercase; letter-spacing:1px; margin-bottom:6px;">Stage 03</div>
            <h3 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:10px;">Ergonomic & Secure Loading</h3>
            <p style="font-size:0.92rem; line-height:1.6; color:#475569;">
              Our experienced loaders utilize hydraulic lifting trolleys, furniture sliders, and heavy-duty load straps. Goods are strategically arranged inside closed-container trucks with heavier items locked at the base and lighter cartons secured above to prevent transit shift.
            </p>
          </div>

          <div style="background:#ffffff; border-left:4px solid #8b5cf6; border-radius:0 10px 10px 0; padding:22px; box-shadow:0 2px 8px rgba(0,0,0,0.04);">
            <div style="font-size:0.85rem; font-weight:800; color:#8b5cf6; text-transform:uppercase; letter-spacing:1px; margin-bottom:6px;">Stage 04</div>
            <h3 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:10px;">GPS-Tracked Safe Transit</h3>
            <p style="font-size:0.92rem; line-height:1.6; color:#475569;">
              Your shipment travels inside weather-proof, tamper-sealed container vehicles. For long-distance intercity transit, clients receive regular status updates from our central transport dispatch team, ensuring complete peace of mind throughout the journey.
            </p>
          </div>

          <div style="background:#ffffff; border-left:4px solid #ea580c; border-radius:0 10px 10px 0; padding:22px; box-shadow:0 2px 8px rgba(0,0,0,0.04);">
            <div style="font-size:0.85rem; font-weight:800; color:#ea580c; text-transform:uppercase; letter-spacing:1px; margin-bottom:6px;">Stage 05</div>
            <h3 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:10px;">Unloading, Unpacking & Setup</h3>
            <p style="font-size:0.92rem; line-height:1.6; color:#475569;">
              Upon arrival at your destination residence in Bokaro or another city, our destination crew unloads every box into its designated room, unpacks items upon request, reassembles dismantled beds and tables, and removes empty packing debris.
            </p>
          </div>

        </div>
      </section>

      <!-- Section: Relocation Challenges & Expert Solutions in Bokaro -->
      <section style="margin-bottom:60px;">
        <h2 style="font-size:2rem; font-weight:800; color:#0f223d; margin-bottom:20px;">
          Bokaro-Specific Moving Challenges & How We Solve Them
        </h2>
        <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:24px;">
          Relocating within or out of Bokaro presents specific logistical scenarios distinct from other cities in Jharkhand. Our 15+ years of operational experience across the Bokaro district allows us to proactively resolve these common hurdles:
        </p>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:24px;">
          
          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:22px; box-shadow:0 2px 6px rgba(0,0,0,0.03);">
            <h3 style="font-size:1.15rem; font-weight:700; color:#ff6a28; margin-bottom:10px;">
              SAIL Quarters & Multi-Floor Stairwells
            </h3>
            <p style="font-size:0.95rem; line-height:1.6; color:#475569;">
              Many residential quarters in Sectors 1, 2, 3, 5, and 6 are multi-story walk-ups without elevators. Moving heavy steel almirahs, double beds, and washing machines down narrow concrete staircases requires specialist rigging techniques. Our crew uses padded shoulder lifting harnesses and protective blankets to prevent scuffing building walls or stair rails.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:22px; box-shadow:0 2px 6px rgba(0,0,0,0.03);">
            <h3 style="font-size:1.15rem; font-weight:700; color:#2563eb; margin-bottom:10px;">
              Garga Bridge & Chas Traffic Congestion
            </h3>
            <p style="font-size:0.95rem; line-height:1.6; color:#475569;">
              The Garga Bridge connecting Bokaro Steel City to Chas experiences intense vehicular congestion during morning and evening rush hours. We plan all cross-river truck dispatch during optimized non-peak windows (between 11:00 AM and 3:30 PM, or early mornings) to ensure your goods spend minimal time idling in traffic.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:22px; box-shadow:0 2px 6px rgba(0,0,0,0.03);">
            <h3 style="font-size:1.15rem; font-weight:700; color:#16a34a; margin-bottom:10px;">
              Coal-Dust & Industrial Transit Protection
            </h3>
            <p style="font-size:0.95rem; line-height:1.6; color:#475569;">
              The industrial proximity of steel operations, thermal power stations in Chandrapura, and mining corridors in Bermo generates airborne particulate matter. Standard open-body trucks allow dust to infiltrate mattresses and sofas. We exclusively deploy closed-body, weather-tight container vehicles with dual moisture-seal barriers.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:22px; box-shadow:0 2px 6px rgba(0,0,0,0.03);">
            <h3 style="font-size:1.15rem; font-weight:700; color:#8b5cf6; margin-bottom:10px;">
              Quarter Handover Clearance Protocols
            </h3>
            <p style="font-size:0.95rem; line-height:1.6; color:#475569;">
              When vacating company housing in BSL sectors, employees must undergo rigorous township estate inspections. Our team assists with complete wall-safe unmounting of geysers, air conditioners, fans, and curtain rods, ensuring your quarter is left in clean, inspectable condition without damaged fittings.
            </p>
          </div>

        </div>
      </section>

      <!-- Section: Practical Pre-Move Checklist for Bokaro Families (With Image 4) -->
      <section style="margin-bottom:60px;">
        <h2 style="font-size:2rem; font-weight:800; color:#0f223d; margin-bottom:20px;">
          Step-by-Step Relocation Checklist for Bokaro Residents
        </h2>
        <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:24px;">
          To help you plan a smooth relocation, our moving supervisors have assembled this practical, chronological checklist tailored to moving in Bokaro Steel City and Chas:
        </p>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:30px; align-items:flex-start;">
          
          <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:12px; padding:28px;">
            <div style="display:flex; flex-direction:column; gap:20px;">
              
              <div style="display:flex; gap:16px; align-items:flex-start;">
                <div style="background:#ff6a28; color:#ffffff; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; flex-shrink:0;">1</div>
                <div>
                  <h3 style="font-size:1.1rem; font-weight:700; color:#0f223d; margin-bottom:4px;">4 Weeks Before: Declutter & Schedule Survey</h3>
                  <p style="font-size:0.93rem; color:#475569; margin:0; line-height:1.6;">
                    Sort through storage lofts, balconies, and storage rooms. Donate or discard unused items to reduce consignment volume. Contact Shree Ashirwad Packers at 8409531615 to schedule a free pre-move physical survey at your Bokaro residence.
                  </p>
                </div>
              </div>

              <div style="display:flex; gap:16px; align-items:flex-start;">
                <div style="background:#2563eb; color:#ffffff; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; flex-shrink:0;">2</div>
                <div>
                  <h3 style="font-size:1.1rem; font-weight:700; color:#0f223d; margin-bottom:4px;">3 Weeks Before: Secure Society & Sector Gate Passes</h3>
                  <p style="font-size:0.93rem; color:#475569; margin:0; line-height:1.6;">
                    If residing in an apartment complex in Chas or a restricted residential sector in Bokaro Steel City, notify the society administration or maintenance office. Secure permission for moving truck entry and elevator reservation for loading day.
                  </p>
                </div>
              </div>

              <div style="display:flex; gap:16px; align-items:flex-start;">
                <div style="background:#16a34a; color:#ffffff; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; flex-shrink:0;">3</div>
                <div>
                  <h3 style="font-size:1.1rem; font-weight:700; color:#0f223d; margin-bottom:4px;">2 Weeks Before: Transfer Utilities & Bank Records</h3>
                  <p style="font-size:0.93rem; color:#475569; margin:0; line-height:1.6;">
                    Initiate transfer of broadband fiber connections, LPG gas cylinders, and postal addresses. For PSU or defense transfers, request IBA-approved moving quotation documentation from our office for advance travel grant reimbursement.
                  </p>
                </div>
              </div>

              <div style="display:flex; gap:16px; align-items:flex-start;">
                <div style="background:#8b5cf6; color:#ffffff; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; flex-shrink:0;">4</div>
                <div>
                  <h3 style="font-size:1.1rem; font-weight:700; color:#0f223d; margin-bottom:4px;">2 Days Before: Appliance Prep & Essentials Box</h3>
                  <p style="font-size:0.93rem; color:#475569; margin:0; line-height:1.6;">
                    Defrost refrigerators, drain washing machine hoses, and disconnect electronics. Pack an "Essentials Box" containing medicines, important documents, chargers, toiletries, and changes of clothes that will travel with you personally.
                  </p>
                </div>
              </div>

            </div>
          </div>

          <!-- Image 4: Two Wheeler & Bike Transit Packing (Correct 3:4 Aspect Ratio Container) -->
          <div style="display:flex; flex-direction:column; align-items:center;">
            <figure style="margin:0; max-width:380px; width:100%;">
              <div style="position:relative; width:100%; aspect-ratio:3/4; border-radius:12px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.08); background:#f1f5f9;">
                <img 
                  src="<?php echo SITE_BASE_URL; ?>/images/bike-packing-shree-ashirwad-packers-jharkhand.jpg" 
                  alt="Two wheeler and motorcycle packing service in Bokaro" 
                  loading="lazy" 
                  style="width:100%; height:100%; object-fit:cover; display:block;"
                >
              </div>
              <figcaption style="margin-top:10px; font-size:0.85rem; color:#64748b; text-align:center; font-style:italic;">
                Custom wooden crating and bubble wrapping for two-wheeler transport in Bokaro
              </figcaption>
            </figure>
          </div>

        </div>
      </section>

      <!-- Section: Interactive Location Map & Verified Coordinates -->
      <section style="margin-bottom:60px;">
        <h2 style="font-size:2rem; font-weight:800; color:#0f223d; margin-bottom:16px;">
          Bokaro Steel City Map & Branch Location Coordinates
        </h2>
        <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:24px;">
          Our branch office is centrally positioned in Sector 12/A, offering fast access to both Bokaro Steel City sectors and the Chas municipality. Check our exact location on the interactive Google Map below:
        </p>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(300px, 1fr)); gap:28px; align-items:center; background:#f8fafc; border:1px solid #e2e8f0; border-radius:14px; padding:24px;">
          
          <!-- Responsive Google Map Embed -->
          <div style="position:relative; width:100%; height:360px; border-radius:10px; overflow:hidden; box-shadow:0 4px 12px rgba(0,0,0,0.06); border:1px solid #cbd5e1;">
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116997.74474773873!2d86.07923485!3d23.66929655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f42301c223a763%3A0x2ff25c1cb5a2a29c!2sBokaro%20Steel%20City%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1710000000000!5m2!1sen!2sin" 
              width="100%" 
              height="100%" 
              style="border:0;" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade"
              title="Map of Bokaro Steel City - Shree Ashirwad Packers and Movers">
            </iframe>
          </div>

          <!-- Location Information & Geographic Coordinates Card -->
          <div style="display:flex; flex-direction:column; gap:16px;">
            <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:18px;">
              <h3 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:8px;">
                Verified Geographic Coordinates
              </h3>
              <div style="display:flex; flex-direction:column; gap:8px; font-size:0.92rem; color:#475569;">
                <div><strong>Latitude:</strong> 23.6693° N</div>
                <div><strong>Longitude:</strong> 86.1511° E</div>
                <div><strong>Elevation:</strong> ~210 meters above sea level</div>
                <div><strong>District Headquarters:</strong> Bokaro Steel City (Camp 2 / Sector 1)</div>
              </div>
            </div>

            <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:18px;">
              <h3 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:8px;">
                Major Transport Hubs & Connectivity
              </h3>
              <div style="display:flex; flex-direction:column; gap:6px; font-size:0.9rem; color:#475569;">
                <div><strong>Railway:</strong> Bokaro Steel City Junction (BKSC) – 12 km</div>
                <div><strong>Highways:</strong> NH-320 (Ranchi Corridor) & NH-218 (Dhanbad-Purulia)</div>
                <div><strong>Airport:</strong> Bokaro Airport (SAIL/UDAN) & Ranchi Birsa Munda (IXR)</div>
              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- Section 6: Local Branch Office Card & Commitment -->
      <section style="margin-bottom:60px;">
        <div style="background:linear-gradient(135deg, #f8fafc 0%, #edf2f7 100%); border:1px solid #cbd5e1; border-radius:14px; padding:35px; display:grid; grid-template-columns:repeat(auto-fit, minmax(300px, 1fr)); gap:32px; align-items:center;">
          <div>
            <span style="background:#ff6a28; color:#ffffff; font-size:0.82rem; font-weight:700; padding:4px 12px; border-radius:9999px; text-transform:uppercase;">
              Verified Local Branch
            </span>
            <h2 style="font-size:1.8rem; font-weight:800; color:#0f223d; margin:16px 0 12px;">
              Shree Ashirwad Packers Bokaro Office
            </h2>
            <p style="color:#475569; font-size:1rem; line-height:1.6; margin-bottom:20px;">
              Visit our verified local branch in Bokaro Steel City to discuss your relocation requirements, inspect packing materials, or collect physical moving consignment documents.
            </p>
            <div style="display:flex; flex-direction:column; gap:12px; color:#334155; font-size:0.95rem;">
              <div style="display:flex; align-items:flex-start; gap:10px;">
                <strong style="color:#0f223d; min-width:80px;">Address:</strong>
                <span>Plot no - 54/c, Post office sector - 12/A, Bokaro, Jharkhand - 827012</span>
              </div>
              <div style="display:flex; align-items:center; gap:10px;">
                <strong style="color:#0f223d; min-width:80px;">Phone:</strong>
                <a href="tel:<?php echo SECONDARY_PHONE_RAW; ?>" style="color:#ff6a28; font-weight:700; text-decoration:none;">8409531615</a> / <a href="tel:<?php echo PRIMARY_PHONE_RAW; ?>" style="color:#0f223d; font-weight:700; text-decoration:none;">9835565233</a>
              </div>
              <div style="display:flex; align-items:center; gap:10px;">
                <strong style="color:#0f223d; min-width:80px;">Email:</strong>
                <a href="mailto:<?php echo OFFICIAL_EMAIL; ?>" style="color:#2563eb; text-decoration:none;">enquiry@shreeashirwadpackers.com</a>
              </div>
              <div style="display:flex; align-items:center; gap:10px;">
                <strong style="color:#0f223d; min-width:80px;">Working Hours:</strong>
                <span>24/7 Helpline | Office: 7:00 AM – 9:00 PM (All 7 Days)</span>
              </div>
            </div>
            <div style="margin-top:24px; display:flex; gap:14px; flex-wrap:wrap;">
              <a href="tel:<?php echo SECONDARY_PHONE_RAW; ?>" class="btn-primary-custom" style="background:#0f223d; color:#ffffff; padding:12px 24px; border-radius:6px; font-weight:700; text-decoration:none; font-size:0.95rem;">
                Call Bokaro Branch
              </a>
              <a href="<?php echo SITE_BASE_URL; ?>/contact" style="background:#ffffff; border:1px solid #cbd5e1; color:#0f223d; padding:12px 20px; border-radius:6px; font-weight:600; text-decoration:none; font-size:0.95rem;">
                View All Branch Offices &rarr;
              </a>
            </div>
          </div>
          <div>
            <div style="background:#ffffff; border-radius:12px; padding:24px; box-shadow:0 4px 15px rgba(0,0,0,0.06); border:1px solid #e2e8f0;">
              <h3 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:12px;">
                Our Quality Commitment in Bokaro
              </h3>
              <p style="font-size:0.92rem; line-height:1.7; color:#475569; margin-bottom:14px;">
                "Shree Ashirwad Packers and Movers has served thousands of families across Bokaro Steel City and Chas. We operate with our own permanent crew, company-owned trucks, and verified IBA compliance. We never subcontract our moves to unverified third-party transporters."
              </p>
              <div style="display:flex; align-items:center; gap:12px; border-top:1px solid #f1f5f9; padding-top:12px;">
                <div style="background:#0f223d; color:#ffffff; width:40px; height:40px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; font-size:0.9rem;">
                  SA
                </div>
                <div>
                  <div style="font-weight:700; color:#0f223d; font-size:0.95rem;">Operations Lead - Bokaro Branch</div>
                  <div style="color:#64748b; font-size:0.82rem;">Shree Ashirwad Packers and Movers</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section 7: Frequently Asked Questions (FAQ) -->
      <section style="margin-bottom:60px;">
        <h2 style="font-size:2rem; font-weight:800; color:#0f223d; margin-bottom:20px;">
          Frequently Asked Questions About Shifting in Bokaro
        </h2>
        <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:30px;">
          Here are clear, detailed answers to the most common questions our clients ask when preparing for residential or commercial relocations in Bokaro Steel City and Chas:
        </p>

        <div style="display:flex; flex-direction:column; gap:18px;">
          
          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:22px;">
            <h3 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:8px;">
              What are the packers and movers charges in Bokaro for local house shifting?
            </h3>
            <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">
              Local shifting charges in Bokaro typically range between ₹3,500 and ₹7,000 for a 1 BHK home, ₹6,500 to ₹12,000 for a 2 BHK home, and ₹10,000 to ₹18,000 for a 3 BHK home. Exact charges depend on packing material tiers, floor levels, elevator availability, and transit distance between sectors or Chas.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:22px;">
            <h3 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:8px;">
              Do you provide IBA approved moving bills for SAIL and PSU employees in Bokaro?
            </h3>
            <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">
              Yes, Shree Ashirwad Packers provides 100% genuine IBA approved bills, GST invoices, consignment notes (bilty), and car condition reports. These documents comply fully with reimbursement guidelines for SAIL Bokaro Steel Plant (BSL), central government departments, banks, and defense personnel.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:22px;">
            <h3 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:8px;">
              Where is your branch office located in Bokaro?
            </h3>
            <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">
              Our verified local branch office in Bokaro is located at Plot no - 54/c, Post office sector - 12/A, Bokaro, Jharkhand - 827012. You can contact our local moving coordinator directly at 8409531615 or 9835565233.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:22px;">
            <h3 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:8px;">
              Do you handle relocations from Bokaro Steel City sectors to Chas?
            </h3>
            <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">
              Yes, we regularly manage residential and commercial shifting between Bokaro Steel City sectors (such as Sector 1, 4, 6, 9, 12) and Chas municipal areas (such as Chas Bazar, ITI More, Bypass Road, and Checkpost). Our team coordinates truck transit across the Garga bridge smoothly.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:22px;">
            <h3 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:8px;">
              How do you ensure the safety of fragile items and electronic appliances during shifting?
            </h3>
            <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">
              We utilize a specialized 5-layer protective packing protocol. Fragile glassware, chinaware, and LED televisions receive double-layer air bubble wrap, corner foam protectors, corrugated fiberboard layering, stretch film moisture barriers, and custom wooden crating where necessary.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:22px;">
            <h3 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:8px;">
              Can you transport cars and two-wheelers from Bokaro to other Indian states?
            </h3>
            <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">
              Yes, we provide dedicated enclosed car carrier trailers and wooden-crated bike transportation from Bokaro to all major Indian cities including Patna, Kolkata, Delhi NCR, Bengaluru, Hyderabad, and Mumbai, complete with door-to-door pickup and transit insurance.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:22px;">
            <h3 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:8px;">
              How much advance notice is required to book a move in Bokaro?
            </h3>
            <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">
              While we recommend booking 2 to 4 days in advance to ensure preferred truck scheduling and packing crew allocation, we also accommodate emergency and same-day moving requests across Bokaro Steel City and Chas based on vehicle availability.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:22px;">
            <h3 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:8px;">
              Do you provide warehouse and luggage storage facilities in Bokaro?
            </h3>
            <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">
              Yes, we offer secure, CCTV-monitored, moisture-protected, and pest-controlled warehouse storage facilities in Jharkhand for short-term and long-term storage of household goods, office archives, and industrial equipment.
            </p>
          </div>

        </div>
      </section>

      <!-- Section: Google My Business Authentic Reviews -->
      <?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

      <!-- Section 8: Call to Action Banner -->
      <section style="background:linear-gradient(135deg, #0f223d 0%, #1e3a5f 100%); border-radius:14px; padding:45px 30px; text-align:center; color:#ffffff; margin-bottom:40px; box-shadow:0 8px 30px rgba(15,34,61,0.2);">
        <h2 style="font-size:clamp(1.8rem, 3.5vw, 2.4rem); font-weight:800; margin-bottom:14px;">
          Ready for a Stress-Free Move in Bokaro?
        </h2>
        <p style="font-size:1.05rem; color:#cbd5e1; max-width:700px; margin:0 auto 28px; line-height:1.6;">
          Contact Shree Ashirwad Packers and Movers today for a free, zero-obligation moving survey. Get genuine IBA-approved bills, verified 5-layer packing, and reliable door-to-door delivery.
        </p>
        <div style="display:flex; justify-content:center; gap:16px; flex-wrap:wrap;">
          <a href="tel:<?php echo SECONDARY_PHONE_RAW; ?>" class="btn-hero-call" style="background:#ff6a28; color:#ffffff; padding:14px 30px; border-radius:8px; font-weight:700; text-decoration:none; font-size:1rem; box-shadow:0 4px 15px rgba(255,106,40,0.4);">
            Call: 8409531615
          </a>
          <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn-hero-whatsapp" style="background:#25d366; color:#ffffff; padding:14px 28px; border-radius:8px; font-weight:700; text-decoration:none; font-size:1rem; box-shadow:0 4px 15px rgba(37,211,102,0.3);">
            WhatsApp Free Quote
          </a>
          <a href="<?php echo SITE_BASE_URL; ?>/contact" style="background:rgba(255,255,255,0.12); border:1px solid rgba(255,255,255,0.3); color:#ffffff; padding:14px 26px; border-radius:8px; font-weight:600; text-decoration:none; font-size:1rem;">
            Contact Us &rarr;
          </a>
        </div>
      </section>

    </div>

  </main>

  <!-- Footer Navigation -->
  <?php include __DIR__ . '/includes/footer.php'; ?>

  <script src="<?php echo SITE_BASE_URL; ?>/assets/js/main.js" defer></script>
</body>
</html>
