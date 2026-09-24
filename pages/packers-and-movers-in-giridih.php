<?php
/**
 * Packers and Movers in Giridih - Shree Ashirwad Packers and Movers
 * Pure Core PHP Implementation
 * 
 * Target URL: https://www.shreeashirwadpackers.com/packers-and-movers-in-giridih
 * Title: Packers and Movers in Giridih - 8409531615
 * District: Giridih, Jharkhand
 * Coordinates: 24.1860° N, 86.3050° E
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$page_title = "Packers and Movers in Giridih - 8409531615";
$page_description = "Hire top packers and movers in Giridih & Parasnath by Shree Ashirwad Packers. IBA approved bills, 5-layer packing, household & mica industrial moving. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/packers-and-movers-in-giridih";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title><?php echo $page_title; ?></title>
  <meta name="description" content="<?php echo $page_description; ?>">
  <meta name="keywords" content="packers and movers in giridih, best packers and movers in giridih, household shifting in giridih, house shifting giridih, packers and movers parasnath, packers and movers madhuban, packers and movers giridih to ranchi, packers and movers giridih to kolkata, packers and movers giridih to dhanbad, car transport in giridih, bike parcel giridih, iba approved packers in giridih">
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
  <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg">
  <meta property="og:image:width" content="1204">
  <meta property="og:image:height" content="1600">
  <meta property="og:image:alt" content="Packers and Movers in Giridih Shree Ashirwad Packers">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo $page_title; ?>">
  <meta name="twitter:description" content="<?php echo $page_description; ?>">
  <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg">

  <!-- Google Verification & Geo Tags -->
  <meta name="google-site-verification" content="<?php echo htmlspecialchars(GOOGLE_SITE_VERIFICATION, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="theme-color" content="#1a2b4c">
  <meta name="geo.region" content="IN-JH">
  <meta name="geo.placename" content="Giridih">
  <meta name="geo.position" content="24.1860;86.3050">
  <meta name="ICBM" content="24.1860, 86.3050">

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
    "name": "Shree Ashirwad Packers and Movers Giridih",
    "alternateName": "Shree Ashirwad Packers Giridih",
    "url": "<?php echo $canonical_url; ?>",
    "logo": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
    "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
    "description": "<?php echo $page_description; ?>",
    "telephone": "+918409531615",
    "email": "enquiry@shreeashirwadpackers.com",
    "priceRange": "₹₹",
    "keywords": "packers and movers in giridih, best packers and movers in giridih, household shifting in giridih, house shifting giridih, packers and movers parasnath, packers and movers madhuban, packers and movers giridih to ranchi, packers and movers giridih to kolkata, packers and movers giridih to dhanbad, car transport in giridih, bike parcel giridih, iba approved packers in giridih",
    "currenciesAccepted": "INR",
    "paymentAccepted": "Cash, UPI, Net Banking, Cheque",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Makatpur Main Road, Near Bada Chowk",
      "addressLocality": "Giridih",
      "addressRegion": "Jharkhand",
      "postalCode": "815301",
      "addressCountry": "IN"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 24.1860,
      "longitude": 86.3050
    },
    "hasMap": "https://maps.google.com/?q=24.1860,86.3050",
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
        "opens": "07:00",
        "closes": "22:00"
      }
    ],
    "sameAs": [
      "https://www.facebook.com/shreeashirwadpackers",
      "https://www.instagram.com/shreeashirwadpackers"
    ],
    "areaServed": [
      { "@type": "AdministrativeArea", "name": "Giridih" },
      { "@type": "AdministrativeArea", "name": "Parasnath" },
      { "@type": "AdministrativeArea", "name": "Madhuban" },
      { "@type": "AdministrativeArea", "name": "Dumri" },
      { "@type": "AdministrativeArea", "name": "Bagodar" },
      { "@type": "AdministrativeArea", "name": "Pachamba" },
      { "@type": "AdministrativeArea", "name": "Barganda" },
      { "@type": "AdministrativeArea", "name": "Sirsia" },
      { "@type": "AdministrativeArea", "name": "Bhandaridih" },
      { "@type": "AdministrativeArea", "name": "Sariya" },
      { "@type": "AdministrativeArea", "name": "Tisri" },
      { "@type": "AdministrativeArea", "name": "Gawan" },
      { "@type": "AdministrativeArea", "name": "Deori" },
      { "@type": "AdministrativeArea", "name": "Bengabad" }
    ],
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.9",
      "reviewCount": "342",
      "bestRating": "5",
      "worstRating": "1"
    }
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
        "name": "Jharkhand Relocation Services",
        "item": "<?php echo SITE_BASE_URL; ?>/#service-areas"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Packers and Movers in Giridih",
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
        "name": "Why is Shree Ashirwad the top-rated packers and movers in Giridih?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Shree Ashirwad Packers and Movers brings over 16 years of recognized relocation expertise to Giridih. We offer standardized 5-layer protective packaging, trained in-house moving labor, authentic IBA-approved bills for government/bank employees, direct highway connectivity along the Grand Trunk Road (NH-19), and dedicated GPS-tracked container trucks with a zero-damage guarantee."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide relocation services in Madhuban, Parasnath and Dumri?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we regularly handle relocations across Madhuban (Shri Sammed Shikharji pilgrimage base), Parasnath, Dumri, Bagodar, Pachamba, Sirsia, Barganda, Bhandaridih, and Khori Mahuwa. Our crews are experienced with local dharamsalas, religious trust properties, guest houses, and residential quarters."
        }
      },
      {
        "@type": "Question",
        "name": "Can you provide IBA approved bills for CCL, railway, or bank employees in Giridih?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we supply 100% compliant IBA-approved bills with verified GST invoices, stamped consignment notes (bilty), transit insurance policies, itemized packing lists, and pre-move quotation copies. These bills are recognized by Central Coalfields Limited (CCL), Indian Railways, State Bank of India, PNB, Canara Bank, and government departments."
        }
      },
      {
        "@type": "Question",
        "name": "How long does shifting take from Giridih to Kolkata, Ranchi, or Dhanbad?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Thanks to our proximity to the Grand Trunk Road (NH-19), transit to Dhanbad or Bokaro takes only 3 to 6 hours (same day). Shifting from Giridih to Ranchi takes 1 day, while relocations to Kolkata or Patna are completed in 1 to 2 days with direct point-to-point container transport."
        }
      },
      {
        "@type": "Question",
        "name": "What packing materials do you use for fragile household items and furniture?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We implement a strict 5-layer protective packing protocol: scratch-preventing foam sheeting, thick virgin bubble wrap, 5-ply to 7-ply heavy duty corrugated carton armor, waterproof stretch film wrapping, and high-tensile polypropylene strapping. Fragile glassware, porcelain, and LED smart TVs are enclosed in custom wooden crates."
        }
      },
      {
        "@type": "Question",
        "name": "How are moving charges calculated for home shifting in Giridih?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Our shifting rates are determined by the volume and weight of household items, pickup and delivery floor levels (with or without lift), distance to destination, quantity of packing materials used, and transit insurance selection. We offer a transparent written quote after an in-person or video survey with zero hidden surcharges."
        }
      },
      {
        "@type": "Question",
        "name": "Do you transport two-wheelers and cars from Giridih to other states?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we provide specialized vehicle relocation services. Motorcycles and scooters are wrapped in multi-layered foam and bubble padding and secured inside covered trucks with ratchet tie-down straps. Cars are transported via enclosed hydraulic car carrier trucks with comprehensive transit insurance."
        }
      },
      {
        "@type": "Question",
        "name": "How can I book Packers and Movers in Giridih with Shree Ashirwad?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "You can book directly by calling our 24/7 customer helpline at 8409531615 or messaging us on WhatsApp. Our moving supervisor will schedule a free home survey, assess your goods, and provide an instant binding quotation."
        }
      }
    ]
  }
  </script>
</head>
<body>

<?php include __DIR__ . '/includes/header.php'; ?>

<main id="mainContent">

  <!-- HERO SECTION -->
  <section class="page-hero" style="background: linear-gradient(135deg, #0d1b2a 0%, #1b263b 60%, #1f4068 100%); position: relative; padding: 70px 0 60px; overflow: hidden; color: #ffffff;">
    <div class="hero-glow-1" style="position: absolute; width: 450px; height: 450px; border-radius: 50%; background: radial-gradient(circle, rgba(243, 156, 18, 0.18) 0%, rgba(243, 156, 18, 0) 70%); top: -100px; right: -50px; pointer-events: none;"></div>
    <div class="hero-glow-2" style="position: absolute; width: 380px; height: 380px; border-radius: 50%; background: radial-gradient(circle, rgba(52, 152, 219, 0.15) 0%, rgba(52, 152, 219, 0) 70%); bottom: -80px; left: -40px; pointer-events: none;"></div>

    <div class="container page-hero-wrapper" style="position: relative; z-index: 2; max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <!-- Breadcrumb Trail -->
      <nav aria-label="breadcrumb" style="margin-bottom: 20px;">
        <ol style="display: flex; flex-wrap: wrap; list-style: none; padding: 0; margin: 0; font-size: 14px; gap: 8px;">
          <li><a href="<?php echo SITE_BASE_URL; ?>/" style="color: #cbd5e1; text-decoration: none;">Home</a></li>
          <li style="color: #f39c12;">/</li>
          <li><a href="<?php echo SITE_BASE_URL; ?>/#service-areas" style="color: #cbd5e1; text-decoration: none;">Jharkhand</a></li>
          <li style="color: #f39c12;">/</li>
          <li style="color: #ffffff; font-weight: 600;" aria-current="page">Packers and Movers in Giridih</li>
        </ol>
      </nav>

      <div style="max-width: 880px;">
        <div style="display: inline-flex; align-items: center; background: rgba(243, 156, 18, 0.2); border: 1px solid rgba(243, 156, 18, 0.4); padding: 6px 14px; border-radius: 30px; font-size: 13px; font-weight: 600; color: #f39c12; margin-bottom: 18px; letter-spacing: 0.5px; text-transform: uppercase;">
          ★ Certified Relocation Excellence in Giridih & Parasnath
        </div>
        <h1 style="font-size: clamp(28px, 4.2vw, 44px); font-weight: 800; line-height: 1.25; margin-bottom: 18px; color: #ffffff;">
          Packers and Movers in Giridih <span style="background: linear-gradient(90deg, #f39c12, #f1c40f); -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent;">- 8409531615</span>
        </h1>
        <p style="font-size: 17px; line-height: 1.7; color: #e2e8f0; margin-bottom: 28px; max-width: 820px;">
          Welcome to Shree Ashirwad Packers and Movers in Giridih — the trusted moving authority across North Chotanagpur and the historic Parasnath pilgrim corridor. Whether relocating within Giridih town, shifting from Makatpur, Barganda, or Pachamba, or undertaking inter-state moves along the Grand Trunk Road (NH-19) to Kolkata, Dhanbad, Ranchi, Patna, or Delhi NCR, we provide engineered 5-layer protective packing, IBA-approved billing, dedicated container trucks, and complete transit insurance.
        </p>

        <!-- CTAs -->
        <div style="display: flex; flex-wrap: wrap; gap: 14px; align-items: center;">
          <a href="tel:+918409531615" class="btn" style="background: #f39c12; color: #ffffff; font-weight: 700; padding: 13px 26px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 9px; box-shadow: 0 4px 14px rgba(243, 156, 18, 0.4); transition: transform 0.2s ease;">
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
            Call: 8409531615
          </a>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20moving%20services%20in%20Giridih" target="_blank" rel="noopener" class="btn" style="background: #25d366; color: #ffffff; font-weight: 700; padding: 13px 26px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 9px; box-shadow: 0 4px 14px rgba(37, 211, 102, 0.35); transition: transform 0.2s ease;">
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-5.46-4.45-9.92-9.91-9.92zM12.04 20.08c-1.48 0-2.93-.4-4.2-1.15l-.3-.18-3.12.82.83-3.04-.2-.31c-.82-1.31-1.26-2.83-1.26-4.39 0-4.49 3.65-8.14 8.14-8.14 4.49 0 8.14 3.65 8.14 8.14 0 4.49-3.65 8.14-8.14 8.14zm4.46-6.1c-.24-.12-1.45-.72-1.67-.8-.23-.09-.39-.12-.56.12-.17.24-.65.8-.8 1.04-.15.24-.3.27-.55.15-.24-.12-1.03-.38-1.96-1.21-.73-.65-1.22-1.45-1.36-1.7-.14-.24-.01-.38.11-.5.11-.11.24-.28.36-.42.12-.14.16-.24.24-.4.08-.17.04-.31-.02-.43s-.56-1.35-.77-1.85c-.2-.49-.41-.42-.56-.43h-.48c-.16 0-.43.06-.66.31-.23.24-.88.86-.88 2.1 0 1.23.9 2.42 1.02 2.59.13.17 1.77 2.7 4.29 3.79.6.26 1.07.41 1.44.53.6.19 1.15.16 1.58.1.48-.07 1.45-.59 1.66-1.16.2-.57.2-1.06.14-1.16-.06-.1-.23-.16-.48-.28z"/></svg>
            WhatsApp Instant Quote
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- CREDENTIALS STRIP -->
  <section class="credentials-bar-section" style="background: #ffffff; border-bottom: 1px solid #e2e8f0; padding: 22px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; text-align: center;">
        <div style="padding: 10px;">
          <div style="font-size: 24px; font-weight: 800; color: #1f4068;">16+ Years</div>
          <div style="font-size: 13px; color: #64748b; font-weight: 500; margin-top: 4px;">Proven Relocation Leadership</div>
        </div>
        <div style="padding: 10px; border-left: 1px solid #e2e8f0;">
          <div style="font-size: 24px; font-weight: 800; color: #f39c12;">IBA Approved</div>
          <div style="font-size: 13px; color: #64748b; font-weight: 500; margin-top: 4px;">100% Valid Gov/Bank Bills</div>
        </div>
        <div style="padding: 10px; border-left: 1px solid #e2e8f0;">
          <div style="font-size: 24px; font-weight: 800; color: #1f4068;">5-Layer Armor</div>
          <div style="font-size: 13px; color: #64748b; font-weight: 500; margin-top: 4px;">Bubble Wrap & Wooden Crates</div>
        </div>
        <div style="padding: 10px; border-left: 1px solid #e2e8f0;">
          <div style="font-size: 24px; font-weight: 800; color: #27ae60;">GT Road Express</div>
          <div style="font-size: 13px; color: #64748b; font-weight: 500; margin-top: 4px;">Direct NH-19 Transit Route</div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 1: DETAILED INTRODUCTION & LOCAL CONTEXT -->
  <section style="background: #f8fafc; padding: 60px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 36px; align-items: center;">
        
        <div>
          <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">North Chotanagpur Moving Specialists</span>
          <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 12px 0 20px; line-height: 1.3;">
            Trusted Packers and Movers in Giridih for Domestic & Commercial Shifting
          </h2>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Giridih is one of Jharkhand’s most economically dynamic and culturally revered districts. Internationally celebrated as the "Land of Parasnath" — housing the supreme Jain pilgrimage shrine of Shikharji atop the 1,365-meter Parasnath Hill — Giridih is also an established industrial and commercial centre known for mica processing, coal mining under Central Coalfields Limited (CCL Giridih Area), steel manufacturing, and vibrant trading markets at Bada Chowk and Pachamba.
          </p>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            With direct access to the Grand Trunk Road (National Highway 19, formerly NH-2) running through Dumri and Bagodar, Giridih offers exceptional highway connectivity to Kolkata, Dhanbad, Asansol, Bokaro, Ranchi, and northern corridors into Bihar. <strong>Shree Ashirwad Packers and Movers</strong> has established a formidable presence in Giridih over the past 16 years, delivering end-to-end relocation solutions that combine local logistical mastery with world-class packaging standards.
          </p>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155;">
            Whether you are relocating your family from residential areas like Barganda, Alkapuri, Makatpur, or Sirsia, transferring from CCL quarters in Beniadih, or shifting temple trust guest facilities in Madhuban, our expert team guarantees a seamless, stress-free moving experience with zero damage.
          </p>

          <div style="margin-top: 24px; display: flex; flex-wrap: wrap; gap: 12px;">
            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 10px 16px; font-size: 14px; font-weight: 600; color: #1e293b; display: flex; align-items: center; gap: 8px;">
              <span style="color: #27ae60;">✔</span> Madhuban & Parasnath Foothill Coverage
            </div>
            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 10px 16px; font-size: 14px; font-weight: 600; color: #1e293b; display: flex; align-items: center; gap: 8px;">
              <span style="color: #27ae60;">✔</span> Direct Grand Trunk Road (NH-19) Logistics
            </div>
            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 10px 16px; font-size: 14px; font-weight: 600; color: #1e293b; display: flex; align-items: center; gap: 8px;">
              <span style="color: #27ae60;">✔</span> CCL Beniadih Quarters Transfer Team
            </div>
          </div>
        </div>

        <!-- Responsive 3:4 Image Container -->
        <div style="display: flex; justify-content: center;">
          <div style="width: 100%; max-width: 400px; aspect-ratio: 3/4; overflow: hidden; border-radius: 14px; box-shadow: 0 12px 30px rgba(0,0,0,0.12); position: relative;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household Goods Truck Loading Giridih Jharkhand" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(13, 27, 42, 0.85) 0%, transparent 100%); padding: 20px; color: #ffffff;">
              <p style="font-size: 13px; font-weight: 600; margin: 0; text-transform: uppercase; letter-spacing: 0.5px; color: #f39c12;">Verified Moving Fleet</p>
              <p style="font-size: 15px; font-weight: 700; margin: 4px 0 0;">Giridih Professional Shifting Crew</p>
            </div>
          </div>
        </div>

      </div>

      <!-- LOCAL RELOCATION DRIVERS BOX -->
      <div style="background: #ffffff; border-radius: 12px; border: 1px solid #e2e8f0; padding: 32px; margin-top: 45px; box-shadow: 0 4px 16px rgba(0,0,0,0.04);">
        <h3 style="font-size: 21px; font-weight: 700; color: #0d1b2a; margin-bottom: 14px;">Why Residents & Businesses in Giridih Require Specialized Moving</h3>
        <p style="font-size: 15px; line-height: 1.8; color: #475569; margin-bottom: 20px;">
          Giridih represents a vibrant crossroads of pilgrimage tourism, heavy industry, commercial retail, and regional administration. These diverse economic sectors create distinct moving requirements that demand experienced logistical coordination:
        </p>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px;">
          <div style="border-left: 3px solid #f39c12; padding-left: 14px;">
            <h4 style="font-size: 16px; font-weight: 700; color: #1e293b; margin-bottom: 6px;">Pilgrim & Hospitality Moves</h4>
            <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">Specialized shifting services for Jain trust offices, guest houses, dharamsalas, and antique idol shipments in Madhuban and Parasnath foothill communities.</p>
          </div>
          <div style="border-left: 3px solid #1f4068; padding-left: 14px;">
            <h4 style="font-size: 16px; font-weight: 700; color: #1e293b; margin-bottom: 6px;">Coal & Mineral Sector Relocations</h4>
            <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">Routine employee transfers for CCL Beniadih coalfield staff, mica export processing units, and sponge iron plant engineers moving across Giridih, Dhanbad, and Bokaro.</p>
          </div>
          <div style="border-left: 3px solid #27ae60; padding-left: 14px;">
            <h4 style="font-size: 16px; font-weight: 700; color: #1e293b; margin-bottom: 6px;">Bank & Judicial Transfers</h4>
            <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">Certified IBA-compliant relocations for judges, advocates, civil administration officers, and nationalized bank branch managers (SBI, Canara, PNB) posted in Giridih district.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: COMPREHENSIVE SERVICES IN GIRIDIH -->
  <section style="background: #ffffff; padding: 65px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; max-width: 780px; margin: 0 auto 45px;">
        <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Complete Shifting Portfolio</span>
        <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 10px 0 16px;">
          End-to-End Packers and Movers Services in Giridih
        </h2>
        <p style="font-size: 15.5px; line-height: 1.7; color: #64748b;">
          We provide an all-inclusive range of packing and transport solutions tailored for domestic residences, retail businesses, and corporate organizations.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 26px;">
        
        <!-- Service 1 -->
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 28px; transition: transform 0.2s ease, box-shadow 0.2s ease;">
          <div style="width: 50px; height: 50px; background: rgba(243, 156, 18, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 24px; color: #f39c12; margin-bottom: 18px;">
            🏠
          </div>
          <h3 style="font-size: 19px; font-weight: 700; color: #0d1b2a; margin-bottom: 12px;">Residential Household Shifting</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin-bottom: 14px;">
            Complete home moving services covering disassembling beds and modular cupboards, bubble-wrapping glassware and delicate dinner sets, packing high-end LED televisions, and safe delivery in covered container trucks with unpacking support.
          </p>
          <a href="<?php echo SITE_BASE_URL; ?>/residential-shifting/" style="color: #1f4068; font-weight: 700; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 6px;">
            Explore Household Shifting →
          </a>
        </div>

        <!-- Service 2 -->
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 28px; transition: transform 0.2s ease, box-shadow 0.2s ease;">
          <div style="width: 50px; height: 50px; background: rgba(31, 64, 104, 0.12); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 24px; color: #1f4068; margin-bottom: 18px;">
            🏢
          </div>
          <h3 style="font-size: 19px; font-weight: 700; color: #0d1b2a; margin-bottom: 12px;">Office & Commercial Relocation</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin-bottom: 14px;">
            Relocate commercial offices, retail shops at Bada Chowk, corporate branches, and institutional facilities with minimal business downtime. We manage IT servers, workstations, files, and furniture with systematic labeling and rapid setup.
          </p>
          <a href="<?php echo SITE_BASE_URL; ?>/business-shifting/" style="color: #1f4068; font-weight: 700; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 6px;">
            Explore Commercial Relocation →
          </a>
        </div>

        <!-- Service 3 -->
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 28px; transition: transform 0.2s ease, box-shadow 0.2s ease;">
          <div style="width: 50px; height: 50px; background: rgba(39, 174, 96, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 24px; color: #27ae60; margin-bottom: 18px;">
            📄
          </div>
          <h3 style="font-size: 19px; font-weight: 700; color: #0d1b2a; margin-bottom: 12px;">IBA Approved Relocation Billing</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin-bottom: 14px;">
            We furnish 100% genuine IBA-approved moving bills complete with GST invoices, stamped consignment notes (bilty), transit insurance policies, packing inventory lists, and quotation copies for government and bank employee claim reimbursement.
          </p>
          <a href="<?php echo SITE_BASE_URL; ?>/#iba-approved-bills" style="color: #1f4068; font-weight: 700; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 6px;">
            IBA Approved Billing Details →
          </a>
        </div>

        <!-- Service 4 -->
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 28px; transition: transform 0.2s ease, box-shadow 0.2s ease;">
          <div style="width: 50px; height: 50px; background: rgba(231, 76, 60, 0.12); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 24px; color: #e74c3c; margin-bottom: 18px;">
            🏍️
          </div>
          <h3 style="font-size: 19px; font-weight: 700; color: #0d1b2a; margin-bottom: 12px;">Two-Wheeler & Bike Transport</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin-bottom: 14px;">
            Safe motorcycle and scooter transport from Giridih to Ranchi, Kolkata, Patna, or anywhere in India. Wrapped in bubble foam, corrugated armor, and securely strapped inside enclosed carrier trucks to eliminate transit scratches.
          </p>
          <a href="<?php echo SITE_BASE_URL; ?>/vehicle-shifting/" style="color: #1f4068; font-weight: 700; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 6px;">
            Explore Bike Transport →
          </a>
        </div>

        <!-- Service 5 -->
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 28px; transition: transform 0.2s ease, box-shadow 0.2s ease;">
          <div style="width: 50px; height: 50px; background: rgba(52, 152, 219, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 24px; color: #3498db; margin-bottom: 18px;">
            🚗
          </div>
          <h3 style="font-size: 19px; font-weight: 700; color: #0d1b2a; margin-bottom: 12px;">Car Carrier Transport Services</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin-bottom: 14px;">
            Transport your premium sedan or SUV safely across India using specialized hydraulic car carrier trailers. Door-to-door pickup in Giridih, zero road wear, wheel clamping, and full transit insurance coverage included.
          </p>
          <a href="<?php echo SITE_BASE_URL; ?>/vehicle-shifting/" style="color: #1f4068; font-weight: 700; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 6px;">
            Explore Car Transport →
          </a>
        </div>

        <!-- Service 6 -->
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 28px; transition: transform 0.2s ease, box-shadow 0.2s ease;">
          <div style="width: 50px; height: 50px; background: rgba(155, 89, 182, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 24px; color: #9b59b6; margin-bottom: 18px;">
            📦
          </div>
          <h3 style="font-size: 19px; font-weight: 700; color: #0d1b2a; margin-bottom: 12px;">Secure Warehousing & Storage</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin-bottom: 14px;">
            Secure short-term and long-term storage for household furniture, commercial inventory, and pilgrimage trust supplies. Our warehouses are dry, pest-controlled, fire-safe, and monitored 24/7 with CCTV surveillance.
          </p>
          <a href="<?php echo SITE_BASE_URL; ?>/warehouse-service/" style="color: #1f4068; font-weight: 700; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 6px;">
            Explore Storage Facilities →
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 3: 5-LAYER PROTECTIVE PACKAGING -->
  <section style="background: #f8fafc; padding: 65px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 36px; align-items: center;">
        
        <!-- Responsive 3:4 Image Container -->
        <div style="display: flex; justify-content: center; order: 2;">
          <div style="width: 100%; max-width: 400px; aspect-ratio: 3/4; overflow: hidden; border-radius: 14px; box-shadow: 0 12px 30px rgba(0,0,0,0.12); position: relative;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Complete Household Packing in Giridih" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(13, 27, 42, 0.85) 0%, transparent 100%); padding: 20px; color: #ffffff;">
              <p style="font-size: 13px; font-weight: 600; margin: 0; text-transform: uppercase; letter-spacing: 0.5px; color: #f39c12;">Proven Protection</p>
              <p style="font-size: 15px; font-weight: 700; margin: 4px 0 0;">Complete 5-Layer Packing Standard</p>
            </div>
          </div>
        </div>

        <div style="order: 1;">
          <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Zero-Damage Packing Standard</span>
          <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 12px 0 20px; line-height: 1.3;">
            Advanced 5-Layer Material Engineering for Giridih Relocations
          </h2>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 22px;">
            Transporting goods through the varied terrain of North Chotanagpur, crossing railway overbridges, and navigating busy Grand Trunk Road corridors requires superior packing engineering. Shree Ashirwad Packers implements an uncompromising 5-layer protective standard to ensure that every fragile item, delicate electronic display, and heavy teakwood wardrobe arrives at your new home in flawless condition.
          </p>

          <div style="display: flex; flex-direction: column; gap: 16px;">
            
            <div style="display: flex; gap: 14px; align-items: flex-start;">
              <div style="width: 32px; height: 32px; background: #f39c12; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; flex-shrink: 0; font-size: 14px;">1</div>
              <div>
                <h4 style="font-size: 16px; font-weight: 700; color: #0d1b2a; margin-bottom: 4px;">Anti-Scratch Foam Wrapping</h4>
                <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">2mm to 4mm polyethylene foam padding applied directly to polished wooden surfaces, leather sofas, glass dining tables, and television bezels.</p>
              </div>
            </div>

            <div style="display: flex; gap: 14px; align-items: flex-start;">
              <div style="width: 32px; height: 32px; background: #1f4068; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; flex-shrink: 0; font-size: 14px;">2</div>
              <div>
                <h4 style="font-size: 16px; font-weight: 700; color: #0d1b2a; margin-bottom: 4px;">Shock-Absorbing Air Bubble Shield</h4>
                <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">Virgin double-layer bubble wrap encapsulates fragile glassware, bone china crockery, microwave ovens, sound bars, and desktop computer screens.</p>
              </div>
            </div>

            <div style="display: flex; gap: 14px; align-items: flex-start;">
              <div style="width: 32px; height: 32px; background: #27ae60; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; flex-shrink: 0; font-size: 14px;">3</div>
              <div>
                <h4 style="font-size: 16px; font-weight: 700; color: #0d1b2a; margin-bottom: 4px;">Heavy Duty 5-Ply Corrugated Armor</h4>
                <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">High-density corrugated kraft paper sheets tailored tightly around all corners, edges, and flat surfaces to resist compression and puncture forces.</p>
              </div>
            </div>

            <div style="display: flex; gap: 14px; align-items: flex-start;">
              <div style="width: 32px; height: 32px; background: #3498db; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; flex-shrink: 0; font-size: 14px;">4</div>
              <div>
                <h4 style="font-size: 16px; font-weight: 700; color: #0d1b2a; margin-bottom: 4px;">Moisture-Proof Stretch Film Encapsulation</h4>
                <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">Multi-layered industrial stretch film seals the entire package airtight, locking out monsoon moisture, road humidity, and fine coal/mineral dust particles.</p>
              </div>
            </div>

            <div style="display: flex; gap: 14px; align-items: flex-start;">
              <div style="width: 32px; height: 32px; background: #e74c3c; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; flex-shrink: 0; font-size: 14px;">5</div>
              <div>
                <h4 style="font-size: 16px; font-weight: 700; color: #0d1b2a; margin-bottom: 4px;">Reinforced Polypropylene Strapping</h4>
                <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">Tensioned polypropylene straps bind the layers into a unified, rigid protective unit that prevents shifting or loose handling during transit.</p>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 4: LOCALITIES & SUBDIVISIONS SERVED IN GIRIDIH -->
  <section style="background: #ffffff; padding: 65px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; max-width: 780px; margin: 0 auto 40px;">
        <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Extensive Geographic Coverage</span>
        <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 10px 0 16px;">
          Localities & Subdivisions Served Across Giridih District
        </h2>
        <p style="font-size: 15.5px; line-height: 1.7; color: #64748b;">
          Our local operations team covers every municipal ward, commercial market, suburban neighborhood, and rural subdivision across Giridih district.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px;">
        
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Giridih Central & Commercial</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Bada Chowk, Makatpur Main Road, Pachamba, Barganda, Sirsia, Mohanpur, Alkapuri, Court Road, Station Road, and Shastri Nagar residential quarters.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Madhuban & Parasnath Pilgrim Hub</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Madhuban foothill town, Shikharji temple trusts, dharamsalas, Parasnath Railway Station (Isri Bazar), Dumri junction, and Nimiaghat.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Bagodar & Grand Trunk Road (NH-19)</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Bagodar town, Harihar Dham vicinity, Atka, Sariya (Surya Temple area), Khori Mahuwa, and highway corridors connecting to Hazaribagh and Barhi.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Beniadih & Coal Mining Township</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Central Coalfields Limited (CCL) Giridih Area residential colonies, Beniadih coalfield campus, Kabribad, and industrial sponge iron clusters.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Bengabad & Deori Belt</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Bengabad Market, Khandoli Dam tourist area, Motileda, Deori block headquarters, and the northeastern connecting route toward Deoghar.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Tisri & Gawan Mica Corridor</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Tisri block, Gawan town, Lokai, mica processing centers, and northern interstate border crossing points toward Jamui and Nawada in Bihar.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 5: TRANSPARENT RATES & TRANSIT TIMES -->
  <section style="background: #f8fafc; padding: 65px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; max-width: 780px; margin: 0 auto 45px;">
        <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Clear & Honest Pricing</span>
        <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 10px 0 16px;">
          Packers and Movers Giridih Rate Card & Inter-City Transit Times
        </h2>
        <p style="font-size: 15.5px; line-height: 1.7; color: #64748b;">
          Transparent, upfront pricing with no hidden charges. Review our standard rate card for domestic moves in Giridih and long-distance relocations across India.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
        
        <!-- Rates Table -->
        <div style="background: #ffffff; border-radius: 12px; border: 1px solid #e2e8f0; overflow: hidden; box-shadow: 0 4px 16px rgba(0,0,0,0.04);">
          <div style="background: #0d1b2a; color: #ffffff; padding: 18px 24px;">
            <h3 style="font-size: 18px; font-weight: 700; margin: 0;">Estimated Shifting Charges in Giridih</h3>
            <p style="font-size: 13px; color: #94a3b8; margin: 4px 0 0;">Includes packing, loading, transport & unloading</p>
          </div>
          <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
              <thead>
                <tr style="background: #f1f5f9; border-bottom: 2px solid #e2e8f0;">
                  <th style="padding: 12px 16px; font-weight: 700; color: #1e293b;">Move Type</th>
                  <th style="padding: 12px 16px; font-weight: 700; color: #1e293b;">Local Shift (Giridih)</th>
                  <th style="padding: 12px 16px; font-weight: 700; color: #1e293b;">Inter-City / State</th>
                </tr>
              </thead>
              <tbody>
                <tr style="border-bottom: 1px solid #e2e8f0;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">1 BHK Shifting</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹4,500 - ₹9,500</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹11,500 - ₹22,500</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">2 BHK Shifting</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹7,500 - ₹15,000</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹16,500 - ₹33,000</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">3 BHK / Villa</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹11,500 - ₹22,000</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹25,000 - ₹48,000</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">4 BHK / Bungalow</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹16,500 - ₹29,000</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹33,000 - ₹65,000</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Bike / Scooter Parcel</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹1,800 - ₹3,500</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹3,500 - ₹8,000</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Car Transport (Carrier)</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹4,500 - ₹8,000</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹9,500 - ₹19,000</td>
                </tr>
                <tr>
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Office / Commercial</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹9,500 - ₹25,000</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹24,000 - ₹60,000</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Transit Times Table -->
        <div style="background: #ffffff; border-radius: 12px; border: 1px solid #e2e8f0; overflow: hidden; box-shadow: 0 4px 16px rgba(0,0,0,0.04);">
          <div style="background: #1b263b; color: #ffffff; padding: 18px 24px;">
            <h3 style="font-size: 18px; font-weight: 700; margin: 0;">Transit Times from Giridih</h3>
            <p style="font-size: 13px; color: #94a3b8; margin: 4px 0 0;">Dedicated express container truck schedules</p>
          </div>
          <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
              <thead>
                <tr style="background: #f1f5f9; border-bottom: 2px solid #e2e8f0;">
                  <th style="padding: 12px 16px; font-weight: 700; color: #1e293b;">Destination City</th>
                  <th style="padding: 12px 16px; font-weight: 700; color: #1e293b;">Distance</th>
                  <th style="padding: 12px 16px; font-weight: 700; color: #1e293b;">Est. Transit Time</th>
                </tr>
              </thead>
              <tbody>
                <tr style="border-bottom: 1px solid #e2e8f0;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Giridih to Dhanbad</td>
                  <td style="padding: 12px 16px; color: #64748b;">~60 km (SH-13)</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">Same Day (3 - 5 Hours)</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Giridih to Bokaro Steel City</td>
                  <td style="padding: 12px 16px; color: #64748b;">~85 km</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">Same Day (4 - 6 Hours)</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Giridih to Deoghar</td>
                  <td style="padding: 12px 16px; color: #64748b;">~70 km</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">Same Day (3 - 4 Hours)</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Giridih to Ranchi</td>
                  <td style="padding: 12px 16px; color: #64748b;">~185 km</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">1 Day</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Giridih to Kolkata (via GT Rd)</td>
                  <td style="padding: 12px 16px; color: #64748b;">~315 km (NH-19)</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">1 - 2 Days</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Giridih to Patna / Gaya</td>
                  <td style="padding: 12px 16px; color: #64748b;">~235 km</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">1 - 2 Days</td>
                </tr>
                <tr>
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Giridih to Delhi NCR</td>
                  <td style="padding: 12px 16px; color: #64748b;">~1,120 km (NH-19)</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">3 - 5 Days</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 6: MODERN CLOSED CONTAINER FLEET & GPS -->
  <section style="background: #ffffff; padding: 65px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 36px; align-items: center;">
        
        <div>
          <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Superior Transport Fleet</span>
          <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 12px 0 20px; line-height: 1.3;">
            Dedicated GPS-Tracked Closed Container Fleet in Giridih
          </h2>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
            Unlike informal transporters who load household goods into open tarpaulin trucks where items face exposure to monsoon rain, road grime, and theft, Shree Ashirwad Packers maintains an exclusive fleet of weatherproof, closed-body container trucks. Ranging from 14-foot and 17-foot trucks for local moves in Giridih to 24-foot and 32-foot multi-axle containers for inter-state transit along the Grand Trunk Road, your goods travel safely.
          </p>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 22px;">
            Every vehicle is equipped with active GPS tracking and digital locks. You receive regular live updates via SMS and WhatsApp from the moment our truck departs your Giridih residence until it arrives at your new home destination.
          </p>

          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px;">
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
              <div style="font-weight: 700; color: #0d1b2a; font-size: 15px; margin-bottom: 4px;">Zero Transshipment</div>
              <p style="font-size: 13px; color: #64748b; margin: 0; line-height: 1.5;">Direct point-to-point transport without transferring your goods between different trucks at intermediate hubs.</p>
            </div>
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
              <div style="font-weight: 700; color: #0d1b2a; font-size: 15px; margin-bottom: 4px;">All-Weather Enclosures</div>
              <p style="font-size: 13px; color: #64748b; margin: 0; line-height: 1.5;">100% waterproof sealed steel containers protect against torrential rain and highway dust storms.</p>
            </div>
          </div>
        </div>

        <!-- Responsive 3:4 Image Container -->
        <div style="display: flex; justify-content: center;">
          <div style="width: 100%; max-width: 400px; aspect-ratio: 3/4; overflow: hidden; border-radius: 14px; box-shadow: 0 12px 30px rgba(0,0,0,0.12); position: relative;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg" alt="Wooden Furniture Wrapping Giridih" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(13, 27, 42, 0.85) 0%, transparent 100%); padding: 20px; color: #ffffff;">
              <p style="font-size: 13px; font-weight: 600; margin: 0; text-transform: uppercase; letter-spacing: 0.5px; color: #f39c12;">Furniture Protection</p>
              <p style="font-size: 15px; font-weight: 700; margin: 4px 0 0;">Solid Wood Cushioning & Wrapping</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 7: ELECTRONICS & TWO-WHEELER HANDLING -->
  <section style="background: #f8fafc; padding: 65px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 36px; align-items: center;">
        
        <!-- Responsive 3:4 Image Container -->
        <div style="display: flex; justify-content: center; order: 2;">
          <div style="width: 100%; max-width: 400px; aspect-ratio: 3/4; overflow: hidden; border-radius: 14px; box-shadow: 0 12px 30px rgba(0,0,0,0.12); position: relative;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/scooter-bike-safe-transit-packing-jharkhand.jpg" alt="Scooter and Bike Safe Transit Packing Giridih" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(13, 27, 42, 0.85) 0%, transparent 100%); padding: 20px; color: #ffffff;">
              <p style="font-size: 13px; font-weight: 600; margin: 0; text-transform: uppercase; letter-spacing: 0.5px; color: #f39c12;">Two-Wheeler Armor</p>
              <p style="font-size: 15px; font-weight: 700; margin: 4px 0 0;">Motorcycle & Scooter Packing Standard</p>
            </div>
          </div>
        </div>

        <div style="order: 1;">
          <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Delicate Goods Expertise</span>
          <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 12px 0 20px; line-height: 1.3;">
            Specialized Care for High-Value Electronics & Vehicle Shipping
          </h2>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
            Homes and offices in Giridih rely on high-value electronics: large 4K LED TVs, double-door refrigerators, inverter batteries, washing machines, and sensitive computing equipment. These items require specialized handling procedures rather than standard boxing.
          </p>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 22px;">
            Our technicians fabricate custom wooden crates for displays, install transit transit lock bolts for washing machine drums, and use heavy-duty quilted covers for refrigerators. For motorcycle shipping, fuel tanks and headlights receive dense foam armor before the bike is strapped securely upright inside our container trucks.
          </p>

          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px;">
            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
              <div style="font-weight: 700; color: #0d1b2a; font-size: 15px; margin-bottom: 4px;">Plywood Crating</div>
              <p style="font-size: 13px; color: #64748b; margin: 0; line-height: 1.5;">Tailored wooden crates with foam inserts for smart LED televisions, glass chandeliers, and temple marble idols.</p>
            </div>
            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
              <div style="font-weight: 700; color: #0d1b2a; font-size: 15px; margin-bottom: 4px;">Wheel-Lock Transit</div>
              <p style="font-size: 13px; color: #64748b; margin: 0; line-height: 1.5;">Heavy-duty wheel chocks and ratchet tie-down belts lock motorcycles upright to prevent shifting during transit.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 8: STEP-BY-STEP MOVING PROCESS -->
  <section style="background: #ffffff; padding: 65px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; max-width: 780px; margin: 0 auto 45px;">
        <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Systematic Execution</span>
        <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 10px 0 16px;">
          Our 4-Step Moving Workflow in Giridih
        </h2>
        <p style="font-size: 15.5px; line-height: 1.7; color: #64748b;">
          A proven, transparent step-by-step moving methodology that eliminates stress and ensures complete accountability from start to finish.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 24px;">
        
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 26px; position: relative;">
          <div style="width: 46px; height: 46px; background: #0d1b2a; color: #f39c12; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; margin-bottom: 18px;">
            01
          </div>
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 10px;">Free Survey & Guaranteed Quote</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Our moving surveyor visits your Giridih property or conducts a detailed video assessment to inspect your inventory and provide a fixed, binding quotation.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 26px; position: relative;">
          <div style="width: 46px; height: 46px; background: #0d1b2a; color: #f39c12; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; margin-bottom: 18px;">
            02
          </div>
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 10px;">5-Layer Packing & Numbering</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Our skilled packers arrive on schedule with premium materials, dismantle large furniture, pack fragile items meticulously, and create an itemized inventory.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 26px; position: relative;">
          <div style="width: 46px; height: 46px; background: #0d1b2a; color: #f39c12; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; margin-bottom: 18px;">
            03
          </div>
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 10px;">Container Loading & Safe Transit</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Goods are carefully loaded inside sealed container trucks using hydraulic ramps and safety blankets. Live GPS tracking keeps you informed along the route.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 26px; position: relative;">
          <div style="width: 46px; height: 46px; background: #0d1b2a; color: #f39c12; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; margin-bottom: 18px;">
            04
          </div>
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 10px;">Unloading, Unpacking & Setup</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            At your new destination, our crew unloads each item, reassembles furniture, places cartons in respective rooms, and removes all packing debris.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 9: LOCAL BRANCH & INTERACTIVE MAP -->
  <section style="background: #f8fafc; padding: 65px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 36px; align-items: center;">
        
        <div>
          <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Local Presence in Giridih</span>
          <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 12px 0 20px; line-height: 1.3;">
            Visit Our Giridih Branch or Schedule an In-Home Survey
          </h2>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 20px;">
            Our Giridih branch is conveniently located near Bada Chowk on Makatpur Main Road, allowing rapid response throughout Giridih town, Madhuban, Pachamba, and surrounding communities. Visit us or reach out via phone or WhatsApp to arrange an immediate survey and discuss your moving requirements.
          </p>

          <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px; margin-bottom: 20px;">
            <div style="font-size: 16px; font-weight: 700; color: #0d1b2a; margin-bottom: 6px;">Giridih Branch Office</div>
            <p style="font-size: 14px; color: #64748b; margin: 0 0 10px; line-height: 1.6;">
              Makatpur Main Road, Near Bada Chowk, Giridih, Jharkhand - 815301
            </p>
            <div style="font-size: 14px; color: #1e293b; margin-bottom: 4px;"><strong>Helpline:</strong> +91 8409531615</div>
            <div style="font-size: 14px; color: #1e293b; margin-bottom: 4px;"><strong>Email:</strong> enquiry@shreeashirwadpackers.com</div>
            <div style="font-size: 14px; color: #1e293b;"><strong>Working Hours:</strong> Monday - Sunday: 7:00 AM - 10:00 PM</div>
          </div>

          <div style="display: flex; gap: 12px; flex-wrap: wrap;">
            <a href="tel:+918409531615" class="btn" style="background: #1f4068; color: #ffffff; font-weight: 700; padding: 12px 22px; border-radius: 8px; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 8px;">
              Call Giridih Branch
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact" class="btn" style="background: #f39c12; color: #ffffff; font-weight: 700; padding: 12px 22px; border-radius: 8px; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 8px;">
              Schedule Home Survey
            </a>
          </div>
        </div>

        <!-- Google Map Embed -->
        <div style="border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); border: 1px solid #e2e8f0; height: 380px;">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116348.65360982544!2d86.23075253840742!3d24.186064977464016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f15599547d2ea1%3A0x6d11f26a19f2a7a7!2sGiridih%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"
            title="Giridih Jharkhand Location Map">
          </iframe>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 10: FAQS -->
  <section style="background: #ffffff; padding: 65px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; max-width: 780px; margin: 0 auto 45px;">
        <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Frequently Asked Questions</span>
        <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 10px 0 16px;">
          Frequently Asked Questions About Shifting in Giridih
        </h2>
        <p style="font-size: 15.5px; line-height: 1.7; color: #64748b;">
          Clear answers to common questions about household shifting, commercial moves, pricing, and IBA documentation in Giridih.
        </p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px; max-width: 920px; margin: 0 auto;">
        
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Why is Shree Ashirwad the top-rated packers and movers in Giridih?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            Shree Ashirwad Packers and Movers brings over 16 years of recognized relocation expertise to Giridih. We offer standardized 5-layer protective packaging, trained in-house moving labor, authentic IBA-approved bills for government/bank employees, direct highway connectivity along the Grand Trunk Road (NH-19), and dedicated GPS-tracked container trucks with a zero-damage guarantee.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Do you provide relocation services in Madhuban, Parasnath and Dumri?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            Yes, we regularly handle relocations across Madhuban (Shri Sammed Shikharji pilgrimage base), Parasnath, Dumri, Bagodar, Pachamba, Sirsia, Barganda, Bhandaridih, and Khori Mahuwa. Our crews are experienced with local dharamsalas, religious trust properties, guest houses, and residential quarters.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Can you provide IBA approved bills for CCL, railway, or bank employees in Giridih?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            Yes, we supply 100% compliant IBA-approved bills with verified GST invoices, stamped consignment notes (bilty), transit insurance policies, itemized packing lists, and pre-move quotation copies. These bills are recognized by Central Coalfields Limited (CCL), Indian Railways, State Bank of India, PNB, Canara Bank, and government departments.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">How long does shifting take from Giridih to Kolkata, Ranchi, or Dhanbad?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            Thanks to our proximity to the Grand Trunk Road (NH-19), transit to Dhanbad or Bokaro takes only 3 to 6 hours (same day). Shifting from Giridih to Ranchi takes 1 day, while relocations to Kolkata or Patna are completed in 1 to 2 days with direct point-to-point container transport.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">What packing materials do you use for fragile household items and furniture?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            We implement a strict 5-layer protective packing protocol: scratch-preventing foam sheeting, thick virgin bubble wrap, 5-ply to 7-ply heavy duty corrugated carton armor, waterproof stretch film wrapping, and high-tensile polypropylene strapping. Fragile glassware, porcelain, and LED smart TVs are enclosed in custom wooden crates.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">How are moving charges calculated for home shifting in Giridih?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            Our shifting rates are determined by the volume and weight of household items, pickup and delivery floor levels (with or without lift), distance to destination, quantity of packing materials used, and transit insurance selection. We offer a transparent written quote after an in-person or video survey with zero hidden surcharges.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Do you transport two-wheelers and cars from Giridih to other states?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            Yes, we provide specialized vehicle relocation services. Motorcycles and scooters are wrapped in multi-layered foam and bubble padding and secured inside covered trucks with ratchet tie-down straps. Cars are transported via enclosed hydraulic car carrier trucks with comprehensive transit insurance.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">How can I book Packers and Movers in Giridih with Shree Ashirwad?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            You can book directly by calling our 24/7 customer helpline at 8409531615 or messaging us on WhatsApp. Our moving supervisor will schedule a free home survey, assess your goods, and provide an instant binding quotation.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section: Google My Business Authentic Reviews -->
  <?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

  <!-- SECTION 11: CALL TO ACTION BANNER -->
  <section style="background: linear-gradient(135deg, #0d1b2a 0%, #1f4068 100%); padding: 55px 0; color: #ffffff; text-align: center;">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
      <h2 style="font-size: clamp(24px, 3.5vw, 36px); font-weight: 800; margin-bottom: 16px;">
        Plan Your Seamless Relocation in Giridih Today
      </h2>
      <p style="font-size: 16.5px; line-height: 1.7; color: #e2e8f0; margin-bottom: 30px; max-width: 750px; margin-left: auto; margin-right: auto;">
        Get an upfront, binding moving estimate with zero hidden costs. Our Giridih logistics specialists are on standby 24/7 to deliver guaranteed safety, IBA-approved billing, and peaceful moving.
      </p>
      <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 14px;">
        <a href="tel:+918409531615" class="btn" style="background: #f39c12; color: #ffffff; font-weight: 700; padding: 14px 28px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 9px; font-size: 15px; box-shadow: 0 4px 14px rgba(243, 156, 18, 0.4);">
          <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
          Call: 8409531615
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Giridih" target="_blank" rel="noopener" class="btn" style="background: #25d366; color: #ffffff; font-weight: 700; padding: 14px 28px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 9px; font-size: 15px; box-shadow: 0 4px 14px rgba(37, 211, 102, 0.35);">
          <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-5.46-4.45-9.92-9.91-9.92zM12.04 20.08c-1.48 0-2.93-.4-4.2-1.15l-.3-.18-3.12.82.83-3.04-.2-.31c-.82-1.31-1.26-2.83-1.26-4.39 0-4.49 3.65-8.14 8.14-8.14 4.49 0 8.14 3.65 8.14 8.14 0 4.49-3.65 8.14-8.14 8.14zm4.46-6.1c-.24-.12-1.45-.72-1.67-.8-.23-.09-.39-.12-.56.12-.17.24-.65.8-.8 1.04-.15.24-.3.27-.55.15-.24-.12-1.03-.38-1.96-1.21-.73-.65-1.22-1.45-1.36-1.7-.14-.24-.01-.38.11-.5.11-.11.24-.28.36-.42.12-.14.16-.24.24-.4.08-.17.04-.31-.02-.43s-.56-1.35-.77-1.85c-.2-.49-.41-.42-.56-.43h-.48c-.16 0-.43.06-.66.31-.23.24-.88.86-.88 2.1 0 1.23.9 2.42 1.02 2.59.13.17 1.77 2.7 4.29 3.79.6.26 1.07.41 1.44.53.6.19 1.15.16 1.58.1.48-.07 1.45-.59 1.66-1.16.2-.57.2-1.06.14-1.16-.06-.1-.23-.16-.48-.28z"/></svg>
          WhatsApp Us Now
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/contact" class="btn" style="background: transparent; color: #ffffff; border: 2px solid #ffffff; font-weight: 700; padding: 12px 26px; border-radius: 8px; text-decoration: none; font-size: 15px;">
          Contact Form
        </a>
      </div>
    </div>
  </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

<script src="<?php echo SITE_BASE_URL; ?>/assets/js/main.js" defer></script>
</body>
</html>
