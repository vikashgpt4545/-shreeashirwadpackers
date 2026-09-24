<?php
/**
 * Packers and Movers in Jamtara - Shree Ashirwad Packers and Movers
 * Pure Core PHP Implementation
 * 
 * Target URL: https://www.shreeashirwadpackers.com/packers-and-movers-in-jamtara
 * Title: Packers and Movers in Jamtara - 8409531615
 * District: Jamtara, Jharkhand
 * Coordinates: 23.9628° N, 86.8016° E
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$page_title = "Packers and Movers in Jamtara - 8409531615";
$page_description = "Hire certified packers and movers in Jamtara & Mihijam by Shree Ashirwad Packers. IBA approved bills, 5-layer packing, railway & home shifting. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/packers-and-movers-in-jamtara";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title><?php echo $page_title; ?></title>
  <meta name="description" content="<?php echo $page_description; ?>">
  <meta name="keywords" content="packers and movers in jamtara, best packers and movers in jamtara, household shifting in jamtara, house shifting jamtara, packers and movers mihijam, packers and movers karmatar, packers and movers chittaranjan, packers and movers jamtara to ranchi, packers and movers jamtara to kolkata, car transport jamtara, bike parcel jamtara, iba approved packers in jamtara">
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
  <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg">
  <meta property="og:image:width" content="1204">
  <meta property="og:image:height" content="1600">
  <meta property="og:image:alt" content="Packers and Movers in Jamtara Shree Ashirwad Packers">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo $page_title; ?>">
  <meta name="twitter:description" content="<?php echo $page_description; ?>">
  <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg">

  <!-- Google Verification & Geo Tags -->
  <meta name="google-site-verification" content="<?php echo htmlspecialchars(GOOGLE_SITE_VERIFICATION, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="theme-color" content="#1a2b4c">
  <meta name="geo.region" content="IN-JH">
  <meta name="geo.placename" content="Jamtara">
  <meta name="geo.position" content="23.9628;86.8016">
  <meta name="ICBM" content="23.9628, 86.8016">

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
    "name": "Shree Ashirwad Packers and Movers Jamtara",
    "alternateName": "Shree Ashirwad Packers Jamtara",
    "url": "<?php echo $canonical_url; ?>",
    "logo": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
    "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
    "description": "<?php echo $page_description; ?>",
    "telephone": "+918409531615",
    "email": "enquiry@shreeashirwadpackers.com",
    "priceRange": "₹₹",
    "keywords": "packers and movers in jamtara, best packers and movers in jamtara, household shifting in jamtara, house shifting jamtara, packers and movers mihijam, packers and movers karmatar, packers and movers chittaranjan, packers and movers jamtara to ranchi, packers and movers jamtara to kolkata, car transport jamtara, bike parcel jamtara, iba approved packers in jamtara",
    "currenciesAccepted": "INR",
    "paymentAccepted": "Cash, UPI, Net Banking, Cheque",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Station Road, Near Indira Chowk",
      "addressLocality": "Jamtara",
      "addressRegion": "Jharkhand",
      "postalCode": "815351",
      "addressCountry": "IN"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 23.9628,
      "longitude": 86.8016
    },
    "hasMap": "https://maps.google.com/?q=23.9628,86.8016",
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
      { "@type": "AdministrativeArea", "name": "Jamtara" },
      { "@type": "AdministrativeArea", "name": "Mihijam" },
      { "@type": "AdministrativeArea", "name": "Karmatar" },
      { "@type": "AdministrativeArea", "name": "Narayanpur" },
      { "@type": "AdministrativeArea", "name": "Nala" },
      { "@type": "AdministrativeArea", "name": "Kundahit" },
      { "@type": "AdministrativeArea", "name": "Fatehpur" },
      { "@type": "AdministrativeArea", "name": "Chittaranjan Border" }
    ],
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.9",
      "reviewCount": "264",
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
        "name": "Packers and Movers in Jamtara",
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
        "name": "Why is Shree Ashirwad the leading packers and movers in Jamtara?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Shree Ashirwad Packers and Movers brings more than 16 years of proven relocation expertise to Jamtara and Mihijam. We offer 5-layer protective packing, trained in-house moving labor, authentic IBA-approved bills for railway, bank, and government employees, dedicated GPS-tracked closed container trucks, and rapid connectivity along the Howrah-Delhi main line corridor to Asansol, Kolkata, Dhanbad, and Ranchi."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide moving services for Chittaranjan Locomotive Works (CLW) and Mihijam residents?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we regularly handle residential and official relocations for Indian Railways personnel at Chittaranjan Locomotive Works (CLW), Mihijam township, Kangoi, and surrounding border areas. We provide complete railway-compliant documentation, itemized inventory, and door-to-door transit across all railway divisions nationwide."
        }
      },
      {
        "@type": "Question",
        "name": "Can you provide IBA approved moving bills for bank and civil servants in Jamtara?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we issue 100% genuine IBA-approved bills complete with GST invoices, stamped consignment notes (bilty), transit insurance policies, itemized packing inventory lists, and quotation copies. These documents are recognized and accepted by SBI, PNB, Bank of India, District Collectorate, Civil Court, and Jharkhand state departments."
        }
      },
      {
        "@type": "Question",
        "name": "How long does shifting take from Jamtara to Kolkata, Asansol, or Ranchi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Shifting from Jamtara to Asansol or Chittaranjan takes only 1 to 2 hours (same-day delivery). Relocations from Jamtara to Dhanbad or Deoghar take 2 to 3 hours, while moves to Kolkata (~255 km) take 1 day and to Ranchi take 1 day using our dedicated closed container fleet."
        }
      },
      {
        "@type": "Question",
        "name": "What packing materials do you use for fragile household items and furniture?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We deploy a standardized 5-layer protective packaging standard: scratch-preventing foam sheeting, thick virgin bubble wrap, 5-ply to 7-ply heavy duty corrugated cardboard sheets, waterproof stretch film wrapping, and high-tensile polypropylene strapping. Delicate glassware, chinaware, and smart LED TVs are packed in custom wooden crates."
        }
      },
      {
        "@type": "Question",
        "name": "Do you offer vehicle relocation for two-wheelers and cars from Jamtara?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we provide safe door-to-door two-wheeler and four-wheeler transport. Motorcycles and scooters are wrapped in multi-layer foam and corrugated armor and secured upright inside covered trucks with ratchet tie-down straps. Cars are transported via enclosed hydraulic car carrier trailers."
        }
      },
      {
        "@type": "Question",
        "name": "How are household shifting charges calculated in Jamtara?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Our shifting rates are determined by the volume and cubic feet of household items, pickup and delivery floor levels (with or without elevator), transit distance, packaging material quantity, and optional transit insurance. We conduct a free in-person or video survey to offer a transparent, binding written estimate with zero hidden fees."
        }
      },
      {
        "@type": "Question",
        "name": "How can I book Packers and Movers in Jamtara with Shree Ashirwad?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "You can book easily by calling our 24/7 customer service helpline at 8409531615 or messaging us directly on WhatsApp. Our moving supervisor will schedule a free home assessment and provide an instant binding quotation."
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
          <li style="color: #ffffff; font-weight: 600;" aria-current="page">Packers and Movers in Jamtara</li>
        </ol>
      </nav>

      <div style="max-width: 880px;">
        <div style="display: inline-flex; align-items: center; background: rgba(243, 156, 18, 0.2); border: 1px solid rgba(243, 156, 18, 0.4); padding: 6px 14px; border-radius: 30px; font-size: 13px; font-weight: 600; color: #f39c12; margin-bottom: 18px; letter-spacing: 0.5px; text-transform: uppercase;">
          ★ Certified Relocation Excellence in Jamtara & Mihijam
        </div>
        <h1 style="font-size: clamp(28px, 4.2vw, 44px); font-weight: 800; line-height: 1.25; margin-bottom: 18px; color: #ffffff;">
          Packers and Movers in Jamtara <span style="background: linear-gradient(90deg, #f39c12, #f1c40f); -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent;">- 8409531615</span>
        </h1>
        <p style="font-size: 17px; line-height: 1.7; color: #e2e8f0; margin-bottom: 28px; max-width: 820px;">
          Welcome to Shree Ashirwad Packers and Movers in Jamtara — the premier relocation expert across Santhal Pargana and the vital industrial border corridor adjoining West Bengal. Whether you are moving locally within Jamtara town, relocating between Mihijam and Chittaranjan Locomotive Works (CLW), or shifting inter-state to Asansol, Kolkata, Dhanbad, Ranchi, or Patna via the Howrah-Delhi mainline corridor, we provide engineered 5-layer protective packing, IBA-approved documentation, dedicated container trucks, and complete transit insurance.
        </p>

        <!-- CTAs -->
        <div style="display: flex; flex-wrap: wrap; gap: 14px; align-items: center;">
          <a href="tel:+918409531615" class="btn" style="background: #f39c12; color: #ffffff; font-weight: 700; padding: 13px 26px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 9px; box-shadow: 0 4px 14px rgba(243, 156, 18, 0.4); transition: transform 0.2s ease;">
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
            Call: 8409531615
          </a>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20moving%20services%20in%20Jamtara" target="_blank" rel="noopener" class="btn" style="background: #25d366; color: #ffffff; font-weight: 700; padding: 13px 26px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 9px; box-shadow: 0 4px 14px rgba(37, 211, 102, 0.35); transition: transform 0.2s ease;">
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
          <div style="font-size: 13px; color: #64748b; font-weight: 500; margin-top: 4px;">100% Valid Gov/Railway/Bank Bills</div>
        </div>
        <div style="padding: 10px; border-left: 1px solid #e2e8f0;">
          <div style="font-size: 24px; font-weight: 800; color: #1f4068;">5-Layer Armor</div>
          <div style="font-size: 13px; color: #64748b; font-weight: 500; margin-top: 4px;">Bubble Wrap & Heavy Crates</div>
        </div>
        <div style="padding: 10px; border-left: 1px solid #e2e8f0;">
          <div style="font-size: 24px; font-weight: 800; color: #27ae60;">CLW Border Express</div>
          <div style="font-size: 13px; color: #64748b; font-weight: 500; margin-top: 4px;">Direct Asansol-Kolkata Route</div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 1: DETAILED INTRODUCTION & LOCAL CONTEXT -->
  <section style="background: #f8fafc; padding: 60px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 36px; align-items: center;">
        
        <div>
          <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Santhal Pargana Border Corridor</span>
          <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 12px 0 20px; line-height: 1.3;">
            Trusted Packers and Movers in Jamtara with Interstate Railway Link
          </h2>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Jamtara district occupies an extraordinary socio-cultural and industrial position along the southeastern fringe of Jharkhand. Bordered by Deoghar and Dumka to the north, Giridih to the west, Dhanbad to the southwest, and Paschim Bardhaman district of West Bengal (housing Asansol and Chittaranjan) to the south and east, Jamtara functions as an organic gateway between the mineral belts of Jharkhand and the industrial plains of West Bengal.
          </p>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            The twin towns of Mihijam (in Jamtara) and Chittaranjan (in West Bengal) form an integrated industrial ecosystem centered around Chittaranjan Locomotive Works (CLW) — Asia’s premier electric locomotive manufacturer. Furthermore, Karmatar (Vidyasagar block) holds immense historical reverence as the sanctuary where the great polymath and social reformer Ishwar Chandra Vidyasagar spent the final 18 years of his life. <strong>Shree Ashirwad Packers and Movers</strong> has proudly served Jamtara, Mihijam, and surrounding areas for over 16 years.
          </p>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155;">
            Whether you are a railway employee transferring from CLW Chittaranjan, an administrative officer at the Jamtara Collectorate, a banking professional shifting branches, or a private family moving across town, our dedicated team guarantees a seamless, stress-free moving experience with zero damage.
          </p>

          <div style="margin-top: 24px; display: flex; flex-wrap: wrap; gap: 12px;">
            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 10px 16px; font-size: 14px; font-weight: 600; color: #1e293b; display: flex; align-items: center; gap: 8px;">
              <span style="color: #27ae60;">✔</span> CLW Chittaranjan & Mihijam Coverage
            </div>
            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 10px 16px; font-size: 14px; font-weight: 600; color: #1e293b; display: flex; align-items: center; gap: 8px;">
              <span style="color: #27ae60;">✔</span> Howrah-Delhi Mainline Express Route
            </div>
            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 10px 16px; font-size: 14px; font-weight: 600; color: #1e293b; display: flex; align-items: center; gap: 8px;">
              <span style="color: #27ae60;">✔</span> Karmatar Vidyasagar Heritage Team
            </div>
          </div>
        </div>

        <!-- Responsive 3:4 Image Container -->
        <div style="display: flex; justify-content: center;">
          <div style="width: 100%; max-width: 400px; aspect-ratio: 3/4; overflow: hidden; border-radius: 14px; box-shadow: 0 12px 30px rgba(0,0,0,0.12); position: relative;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe Transit Closed Container Truck Jamtara" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(13, 27, 42, 0.85) 0%, transparent 100%); padding: 20px; color: #ffffff;">
              <p style="font-size: 13px; font-weight: 600; margin: 0; text-transform: uppercase; letter-spacing: 0.5px; color: #f39c12;">Verified Moving Fleet</p>
              <p style="font-size: 15px; font-weight: 700; margin: 4px 0 0;">Jamtara Express Transport Operations</p>
            </div>
          </div>
        </div>

      </div>

      <!-- LOCAL RELOCATION DRIVERS BOX -->
      <div style="background: #ffffff; border-radius: 12px; border: 1px solid #e2e8f0; padding: 32px; margin-top: 45px; box-shadow: 0 4px 16px rgba(0,0,0,0.04);">
        <h3 style="font-size: 21px; font-weight: 700; color: #0d1b2a; margin-bottom: 14px;">Key Relocation Drivers Across Jamtara District</h3>
        <p style="font-size: 15px; line-height: 1.8; color: #475569; margin-bottom: 20px;">
          Jamtara’s relocation demand is driven by its close cross-border ties with West Bengal, major railway locomotive production, and civil administration:
        </p>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px;">
          <div style="border-left: 3px solid #f39c12; padding-left: 14px;">
            <h4 style="font-size: 16px; font-weight: 700; color: #1e293b; margin-bottom: 6px;">CLW & Railway Personnel Moves</h4>
            <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">Regular residential transfers for Indian Railways engineers, technicians, and supervisors stationed at Chittaranjan Locomotive Works and Mihijam moving across zonal railways.</p>
          </div>
          <div style="border-left: 3px solid #1f4068; padding-left: 14px;">
            <h4 style="font-size: 16px; font-weight: 700; color: #1e293b; margin-bottom: 6px;">Interstate Bengal-Jharkhand Trade</h4>
            <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">Frequent residential and commercial shifts between Jamtara and the industrial cities of Asansol, Durgapur, Raniganj, and Kolkata with seamless cross-border transit permits.</p>
          </div>
          <div style="border-left: 3px solid #27ae60; padding-left: 14px;">
            <h4 style="font-size: 16px; font-weight: 700; color: #1e293b; margin-bottom: 6px;">Civil & Banking Administration</h4>
            <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">100% IBA-compliant relocations for District Collectorate staff, judicial officers, Sadar Hospital medical personnel, and nationalized bank branch managers (SBI, PNB, BoI) in Jamtara.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: COMPREHENSIVE SERVICES IN JAMTARA -->
  <section style="background: #ffffff; padding: 65px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; max-width: 780px; margin: 0 auto 45px;">
        <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Complete Moving Solutions</span>
        <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 10px 0 16px;">
          Full-Spectrum Moving Services Across Jamtara & Mihijam
        </h2>
        <p style="font-size: 15.5px; line-height: 1.7; color: #64748b;">
          From private residential bungalows to commercial stores, corporate offices, and railway quarters, our specialized services guarantee maximum safety and zero transit hassle.
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
            Our residential relocation service covers dismantling beds and modular wardrobes, packing fragile kitchen glassware in bubble wrap, securing delicate sofas and electronics, and transporting goods in clean closed container trucks with complete setup support.
          </p>
          <a href="<?php echo SITE_BASE_URL; ?>/residential-shifting/" style="color: #1f4068; font-weight: 700; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 6px;">
            Explore Household Moving →
          </a>
        </div>

        <!-- Service 2 -->
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 28px; transition: transform 0.2s ease, box-shadow 0.2s ease;">
          <div style="width: 50px; height: 50px; background: rgba(31, 64, 104, 0.12); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 24px; color: #1f4068; margin-bottom: 18px;">
            🏢
          </div>
          <h3 style="font-size: 19px; font-weight: 700; color: #0d1b2a; margin-bottom: 12px;">Commercial & Office Relocation</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin-bottom: 14px;">
            Minimize operational downtime during office relocations across Jamtara town, Mihijam market, and administrative complexes. We systematically handle server racks, computer workstations, legal archives, and modular office furniture with color-coded labeling.
          </p>
          <a href="<?php echo SITE_BASE_URL; ?>/business-shifting/" style="color: #1f4068; font-weight: 700; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 6px;">
            Explore Office Relocation →
          </a>
        </div>

        <!-- Service 3 -->
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 28px; transition: transform 0.2s ease, box-shadow 0.2s ease;">
          <div style="width: 50px; height: 50px; background: rgba(39, 174, 96, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 24px; color: #27ae60; margin-bottom: 18px;">
            📄
          </div>
          <h3 style="font-size: 19px; font-weight: 700; color: #0d1b2a; margin-bottom: 12px;">IBA Approved Relocation Billing</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin-bottom: 14px;">
            We furnish 100% genuine IBA-approved moving bills complete with GST invoices, stamped consignment notes (bilty), transit insurance policies, itemized packing lists, and quotation copies for railway, government, and bank employee reimbursement.
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
          <h3 style="font-size: 19px; font-weight: 700; color: #0d1b2a; margin-bottom: 12px;">Bike & Two-Wheeler Transport</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin-bottom: 14px;">
            Safe motorcycle and scooter transport from Jamtara to Kolkata, Asansol, Ranchi, Patna, or anywhere in India. Wrapped in bubble foam, corrugated armor, and securely strapped upright inside covered trucks to eliminate transit scratches.
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
            Relocate your sedan, hatchback, or SUV safely across India using specialized hydraulic car carrier trailers. Door-to-door pickup in Jamtara, zero road wear, wheel clamping, and full transit insurance coverage included.
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
          <h3 style="font-size: 19px; font-weight: 700; color: #0d1b2a; margin-bottom: 12px;">Warehouse & Safe Storage</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin-bottom: 14px;">
            Secure short-term and long-term storage for household furniture, commercial inventory, and institutional supplies. Our warehouses are dry, pest-controlled, fire-safe, and monitored 24/7 with CCTV surveillance.
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
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="5 Layer Protective Packaging Household Goods Jamtara" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(13, 27, 42, 0.85) 0%, transparent 100%); padding: 20px; color: #ffffff;">
              <p style="font-size: 13px; font-weight: 600; margin: 0; text-transform: uppercase; letter-spacing: 0.5px; color: #f39c12;">Zero Damage Guarantee</p>
              <p style="font-size: 15px; font-weight: 700; margin: 4px 0 0;">5-Layer Shock Absorbing Packaging</p>
            </div>
          </div>
        </div>

        <div style="order: 1;">
          <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Flawless Material Engineering</span>
          <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 12px 0 20px; line-height: 1.3;">
            Engineered 5-Layer Packing Standard for Jamtara Relocations
          </h2>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 22px;">
            Transporting goods through the busy road networks connecting Jamtara with Mihijam, crossing railway tracks, and traveling across state borders into West Bengal requires superior packing engineering. Shree Ashirwad Packers implements a rigorous 5-layer packaging system that guarantees complete safety for every household and office item:
          </p>

          <div style="display: flex; flex-direction: column; gap: 16px;">
            
            <div style="display: flex; gap: 14px; align-items: flex-start;">
              <div style="width: 32px; height: 32px; background: #f39c12; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; flex-shrink: 0; font-size: 14px;">1</div>
              <div>
                <h4 style="font-size: 16px; font-weight: 700; color: #0d1b2a; margin-bottom: 4px;">Polyethylene Foam Scratch Shield</h4>
                <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">2mm to 4mm high-density foam sheeting applied directly to polished wooden furniture, glass dining tabletops, mirror frames, and television bezels.</p>
              </div>
            </div>

            <div style="display: flex; gap: 14px; align-items: flex-start;">
              <div style="width: 32px; height: 32px; background: #1f4068; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; flex-shrink: 0; font-size: 14px;">2</div>
              <div>
                <h4 style="font-size: 16px; font-weight: 700; color: #0d1b2a; margin-bottom: 4px;">Shock-Absorbing Air Bubble Cushioning</h4>
                <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">Virgin double-layer air bubble wrap encapsulates delicate glassware, chinaware crockery, kitchen appliances, and computer monitors to absorb transit vibrations.</p>
              </div>
            </div>

            <div style="display: flex; gap: 14px; align-items: flex-start;">
              <div style="width: 32px; height: 32px; background: #27ae60; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; flex-shrink: 0; font-size: 14px;">3</div>
              <div>
                <h4 style="font-size: 16px; font-weight: 700; color: #0d1b2a; margin-bottom: 4px;">5-Ply Heavy Duty Corrugated Armour</h4>
                <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">Double-wall virgin kraft corrugated sheets tailored around all corners, edges, and flat surfaces to resist compression forces and accidental impacts.</p>
              </div>
            </div>

            <div style="display: flex; gap: 14px; align-items: flex-start;">
              <div style="width: 32px; height: 32px; background: #3498db; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; flex-shrink: 0; font-size: 14px;">4</div>
              <div>
                <h4 style="font-size: 16px; font-weight: 700; color: #0d1b2a; margin-bottom: 4px;">Moisture-Proof Stretch Film Sealing</h4>
                <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">Industrial 23-micron stretch film tightly seals the entire package, keeping out monsoon rain, humidity, and fine road dust particles.</p>
              </div>
            </div>

            <div style="display: flex; gap: 14px; align-items: flex-start;">
              <div style="width: 32px; height: 32px; background: #e74c3c; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; flex-shrink: 0; font-size: 14px;">5</div>
              <div>
                <h4 style="font-size: 16px; font-weight: 700; color: #0d1b2a; margin-bottom: 4px;">High-Tensile Polypropylene Strapping</h4>
                <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">Reinforced tensioned strapping bands lock packages into a unified, rigid unit for secure container loading and transit stability.</p>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 4: LOCALITIES & SUBDIVISIONS SERVED IN JAMTARA -->
  <section style="background: #ffffff; padding: 65px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; max-width: 780px; margin: 0 auto 40px;">
        <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Comprehensive District Reach</span>
        <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 10px 0 16px;">
          Localities & Subdivisions Served Across Jamtara District
        </h2>
        <p style="font-size: 15.5px; line-height: 1.7; color: #64748b;">
          Our local operations team covers every municipal ward, commercial market, suburban neighborhood, and railway colony across Jamtara district.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px;">
        
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Jamtara Town & Central Hubs</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Indira Chowk, Court Road, Station Road, New Town, Dulardih, Budhadweep, Sadar Hospital area, Jamtara College campus, and Main Market commercial center.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Mihijam & CLW Chittaranjan Border</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Mihijam Main Market, Chittaranjan Railway Colony border gates, Kangoi, Kudabandh, and cross-border transport junctions connecting into Paschim Bardhaman.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Karmatar / Vidyasagar Block</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Karmatar Railway Station area, Nandan Kanan Vidyasagar Smriti Mandir, Sitakund, and residential neighborhoods along the Howrah-Delhi mainline.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Narayanpur & Northern Corridor</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Narayanpur block headquarters, Dakhinbahal, and the connecting highway routes heading north toward Deoghar and Madhupur.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Nala & Kundahit Border Belt</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Nala market, Kundahit block, Fatehpur, Ajay River banks, and eastern highway routes connecting directly into West Bengal's Birbhum district.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Fatehpur & Southern Corridor</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Fatehpur block, Ladhna Dam area, and southwestern state highway routes leading directly across the Barakar River into Dhanbad district.
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
          Packers and Movers Jamtara Rate Card & Inter-City Transit Times
        </h2>
        <p style="font-size: 15.5px; line-height: 1.7; color: #64748b;">
          Transparent, upfront pricing with no hidden charges. Review our standard rate card for domestic moves in Jamtara and long-distance relocations across India.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
        
        <!-- Rates Table -->
        <div style="background: #ffffff; border-radius: 12px; border: 1px solid #e2e8f0; overflow: hidden; box-shadow: 0 4px 16px rgba(0,0,0,0.04);">
          <div style="background: #0d1b2a; color: #ffffff; padding: 18px 24px;">
            <h3 style="font-size: 18px; font-weight: 700; margin: 0;">Estimated Shifting Charges in Jamtara</h3>
            <p style="font-size: 13px; color: #94a3b8; margin: 4px 0 0;">Includes packing, loading, transport & unloading</p>
          </div>
          <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
              <thead>
                <tr style="background: #f1f5f9; border-bottom: 2px solid #e2e8f0;">
                  <th style="padding: 12px 16px; font-weight: 700; color: #1e293b;">Move Type</th>
                  <th style="padding: 12px 16px; font-weight: 700; color: #1e293b;">Local Shift (Jamtara)</th>
                  <th style="padding: 12px 16px; font-weight: 700; color: #1e293b;">Inter-City / State</th>
                </tr>
              </thead>
              <tbody>
                <tr style="border-bottom: 1px solid #e2e8f0;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">1 BHK Shifting</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹4,500 - ₹9,000</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹10,500 - ₹21,500</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">2 BHK Shifting</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹7,500 - ₹14,500</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹15,500 - ₹31,000</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">3 BHK / Villa</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹11,000 - ₹21,000</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹23,500 - ₹45,000</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">4 BHK / Bungalow</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹16,000 - ₹28,000</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹31,000 - ₹62,000</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Bike / Scooter Parcel</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹1,800 - ₹3,200</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹3,200 - ₹7,500</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Car Transport (Carrier)</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹4,500 - ₹7,500</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹8,500 - ₹17,500</td>
                </tr>
                <tr>
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Office / Commercial</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹9,000 - ₹24,000</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹22,000 - ₹55,000</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Transit Times Table -->
        <div style="background: #ffffff; border-radius: 12px; border: 1px solid #e2e8f0; overflow: hidden; box-shadow: 0 4px 16px rgba(0,0,0,0.04);">
          <div style="background: #1b263b; color: #ffffff; padding: 18px 24px;">
            <h3 style="font-size: 18px; font-weight: 700; margin: 0;">Transit Times from Jamtara</h3>
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
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Jamtara to Mihijam / CLW</td>
                  <td style="padding: 12px 16px; color: #64748b;">~15 - 20 km</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">Same Day (1 - 2 Hours)</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Jamtara to Asansol (WB)</td>
                  <td style="padding: 12px 16px; color: #64748b;">~35 km</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">Same Day (1 - 2 Hours)</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Jamtara to Dhanbad</td>
                  <td style="padding: 12px 16px; color: #64748b;">~65 km (SH-13)</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">Same Day (2 - 3 Hours)</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Jamtara to Deoghar</td>
                  <td style="padding: 12px 16px; color: #64748b;">~70 km</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">Same Day (2 - 3 Hours)</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Jamtara to Ranchi</td>
                  <td style="padding: 12px 16px; color: #64748b;">~210 km</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">1 Day</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Jamtara to Kolkata</td>
                  <td style="padding: 12px 16px; color: #64748b;">~255 km</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">1 Day</td>
                </tr>
                <tr>
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Jamtara to Delhi NCR</td>
                  <td style="padding: 12px 16px; color: #64748b;">~1,190 km</td>
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
          <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Protected Transport Operations</span>
          <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 12px 0 20px; line-height: 1.3;">
            Dedicated GPS-Tracked Closed Container Fleet in Jamtara
          </h2>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
            Unlike unorganized local transporters who use open trucks covered with thin tarpaulins where goods face rain damage, road dust contamination, and highway theft, Shree Ashirwad Packers maintains an exclusive fleet of weatherproof, closed-body container trucks. Ranging from 14-foot and 17-foot container vehicles for regional moves to 24-foot and 32-foot multi-axle trucks for interstate transit, your belongings remain 100% protected.
          </p>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 22px;">
            Every vehicle in our fleet is equipped with active GPS tracking and digital locks. You receive regular live updates via SMS and WhatsApp from the moment our truck departs your Jamtara or Mihijam residence until it arrives at your destination.
          </p>

          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px;">
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
              <div style="font-weight: 700; color: #0d1b2a; font-size: 15px; margin-bottom: 4px;">Zero Transshipment</div>
              <p style="font-size: 13px; color: #64748b; margin: 0; line-height: 1.5;">Direct point-to-point transit without transferring goods between different vehicles at intermediate depots.</p>
            </div>
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
              <div style="font-weight: 700; color: #0d1b2a; font-size: 15px; margin-bottom: 4px;">Weatherproof Enclosures</div>
              <p style="font-size: 13px; color: #64748b; margin: 0; line-height: 1.5;">100% waterproof sealed steel containers protect against heavy monsoon downpours and highway dust.</p>
            </div>
          </div>
        </div>

        <!-- Responsive 3:4 Image Container -->
        <div style="display: flex; justify-content: center;">
          <div style="width: 100%; max-width: 400px; aspect-ratio: 3/4; overflow: hidden; border-radius: 14px; box-shadow: 0 12px 30px rgba(0,0,0,0.12); position: relative;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg" alt="Wooden Furniture Wrapping in Jamtara" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(13, 27, 42, 0.85) 0%, transparent 100%); padding: 20px; color: #ffffff;">
              <p style="font-size: 13px; font-weight: 600; margin: 0; text-transform: uppercase; letter-spacing: 0.5px; color: #f39c12;">Furniture Protection</p>
              <p style="font-size: 15px; font-weight: 700; margin: 4px 0 0;">Solid Wood Wrapping & Cushioning</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 7: APPLIANCE & TWO-WHEELER HANDLING -->
  <section style="background: #f8fafc; padding: 65px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 36px; align-items: center;">
        
        <!-- Responsive 3:4 Image Container -->
        <div style="display: flex; justify-content: center; order: 2;">
          <div style="width: 100%; max-width: 400px; aspect-ratio: 3/4; overflow: hidden; border-radius: 14px; box-shadow: 0 12px 30px rgba(0,0,0,0.12); position: relative;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/scooter-bike-safe-transit-packing-jharkhand.jpg" alt="Scooter and Bike Safe Transit Packing Jamtara" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(13, 27, 42, 0.85) 0%, transparent 100%); padding: 20px; color: #ffffff;">
              <p style="font-size: 13px; font-weight: 600; margin: 0; text-transform: uppercase; letter-spacing: 0.5px; color: #f39c12;">Two-Wheeler Armor</p>
              <p style="font-size: 15px; font-weight: 700; margin: 4px 0 0;">Motorcycle & Scooter Packing Standard</p>
            </div>
          </div>
        </div>

        <div style="order: 1;">
          <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Precision Handling</span>
          <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 12px 0 20px; line-height: 1.3;">
            Specialized Handling for Electronics & Motorcycle Shipping
          </h2>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
            Modern homes in Jamtara and CLW quarters house high-value consumer electronics including 55-inch to 85-inch 4K smart screens, double-door inverter refrigerators, automatic washing machines, and personal computing systems. These high-value items demand specialized handling protocols beyond ordinary boxing.
          </p>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 22px;">
            Our technicians custom-fabricate wooden crates on demand for large smart displays and crystal chandeliers. Washing machine drum locking bolts are inserted before transit to prevent internal suspension damage, and refrigerator compressors are stabilized with internal padding to prevent coil leakage.
          </p>

          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px;">
            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
              <div style="font-weight: 700; color: #0d1b2a; font-size: 15px; margin-bottom: 4px;">Plywood Crating</div>
              <p style="font-size: 13px; color: #64748b; margin: 0; line-height: 1.5;">Solid plywood crates with internal thermocol and foam buffers designed specifically for curved and OLED displays.</p>
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
        <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Structured Workflow</span>
        <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 10px 0 16px;">
          Our 4-Step Seamless Moving Process in Jamtara
        </h2>
        <p style="font-size: 15.5px; line-height: 1.7; color: #64748b;">
          Every relocation is executed through a disciplined operational framework designed to eliminate stress, ensure accountability, and deliver complete satisfaction.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 24px;">
        
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 26px; position: relative;">
          <div style="width: 46px; height: 46px; background: #0d1b2a; color: #f39c12; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; margin-bottom: 18px;">
            01
          </div>
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 10px;">Pre-Move Survey & Written Quote</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            We conduct an in-person or video survey of your belongings in Jamtara, assess volume and packing requirements, and provide a guaranteed written estimate with no hidden costs.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 26px; position: relative;">
          <div style="width: 46px; height: 46px; background: #0d1b2a; color: #f39c12; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; margin-bottom: 18px;">
            02
          </div>
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 10px;">5-Layer Packing & Numbering</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Our trained packing crew arrives with premium materials, disassembles heavy furniture, wraps every item meticulously, and creates an itemized inventory sheet.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 26px; position: relative;">
          <div style="width: 46px; height: 46px; background: #0d1b2a; color: #f39c12; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; margin-bottom: 18px;">
            03
          </div>
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 10px;">Container Loading & Safe Transit</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Goods are loaded using hydraulic ramps and protective blankets inside closed-body trucks. Real-time GPS tracking keeps you informed throughout the highway journey.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 26px; position: relative;">
          <div style="width: 46px; height: 46px; background: #0d1b2a; color: #f39c12; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; margin-bottom: 18px;">
            04
          </div>
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 10px;">Unloading, Unpacking & Setup</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Upon arrival at your new residence, our team unloads, reassembles beds and wardrobes, places furniture in designated rooms, and removes used packing debris.
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
          <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Local Presence in Jamtara</span>
          <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 12px 0 20px; line-height: 1.3;">
            Visit Our Jamtara Branch or Schedule a Free Home Survey
          </h2>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 20px;">
            Our Jamtara branch is conveniently located near Indira Chowk on Station Road, providing rapid response times to customers throughout Jamtara town, Mihijam, Karmatar, and surrounding areas. Our local team is ready to assist you with customized moving plans, IBA documentation, and immediate container dispatch.
          </p>

          <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px; margin-bottom: 20px;">
            <div style="font-size: 16px; font-weight: 700; color: #0d1b2a; margin-bottom: 6px;">Jamtara Branch Office</div>
            <p style="font-size: 14px; color: #64748b; margin: 0 0 10px; line-height: 1.6;">
              Station Road, Near Indira Chowk, Jamtara, Jharkhand - 815351
            </p>
            <div style="font-size: 14px; color: #1e293b; margin-bottom: 4px;"><strong>Helpline:</strong> +91 8409531615</div>
            <div style="font-size: 14px; color: #1e293b; margin-bottom: 4px;"><strong>Email:</strong> enquiry@shreeashirwadpackers.com</div>
            <div style="font-size: 14px; color: #1e293b;"><strong>Working Hours:</strong> Monday - Sunday: 7:00 AM - 10:00 PM</div>
          </div>

          <div style="display: flex; gap: 12px; flex-wrap: wrap;">
            <a href="tel:+918409531615" class="btn" style="background: #1f4068; color: #ffffff; font-weight: 700; padding: 12px 22px; border-radius: 8px; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 8px;">
              Call Jamtara Branch
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact" class="btn" style="background: #f39c12; color: #ffffff; font-weight: 700; padding: 12px 22px; border-radius: 8px; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 8px;">
              Book Pre-Move Survey
            </a>
          </div>
        </div>

        <!-- Google Map Embed -->
        <div style="border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); border: 1px solid #e2e8f0; height: 380px;">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116492.89241584852!2d86.7314128387635!3d23.962820798135893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f137e04b5ef769%3A0xda5ebef0cf6a3dbb!2sJamtara%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"
            title="Jamtara Jharkhand Location Map">
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
          Common Questions About Shifting in Jamtara
        </h2>
        <p style="font-size: 15.5px; line-height: 1.7; color: #64748b;">
          Have questions about your upcoming move in Jamtara? Here are clear, detailed answers to the most common queries we receive from local residents and corporate clients.
        </p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px; max-width: 920px; margin: 0 auto;">
        
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Why is Shree Ashirwad the leading packers and movers in Jamtara?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            Shree Ashirwad Packers and Movers brings more than 16 years of proven relocation expertise to Jamtara and Mihijam. We offer 5-layer protective packing, trained in-house moving labor, authentic IBA-approved bills for railway, bank, and government employees, dedicated GPS-tracked closed container trucks, and rapid connectivity along the Howrah-Delhi main line corridor to Asansol, Kolkata, Dhanbad, and Ranchi.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Do you provide moving services for Chittaranjan Locomotive Works (CLW) and Mihijam residents?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            Yes, we regularly handle residential and official relocations for Indian Railways personnel at Chittaranjan Locomotive Works (CLW), Mihijam township, Kangoi, and surrounding border areas. We provide complete railway-compliant documentation, itemized inventory, and door-to-door transit across all railway divisions nationwide.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Can you provide IBA approved moving bills for bank and civil servants in Jamtara?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            Yes, we issue 100% genuine IBA-approved bills complete with GST invoices, stamped consignment notes (bilty), transit insurance policies, itemized packing inventory lists, and quotation copies. These documents are recognized and accepted by SBI, PNB, Bank of India, District Collectorate, Civil Court, and Jharkhand state departments.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">How long does shifting take from Jamtara to Kolkata, Asansol, or Ranchi?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            Shifting from Jamtara to Asansol or Chittaranjan takes only 1 to 2 hours (same-day delivery). Relocations from Jamtara to Dhanbad or Deoghar take 2 to 3 hours, while moves to Kolkata (~255 km) take 1 day and to Ranchi take 1 day using our dedicated closed container fleet.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">What packing materials do you use for fragile household items and furniture?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            We deploy a standardized 5-layer protective packaging standard: scratch-preventing foam sheeting, thick virgin bubble wrap, 5-ply to 7-ply heavy duty corrugated cardboard sheets, waterproof stretch film wrapping, and high-tensile polypropylene strapping. Delicate glassware, chinaware, and smart LED TVs are packed in custom wooden crates.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Do you offer vehicle relocation for two-wheelers and cars from Jamtara?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            Yes, we provide safe door-to-door two-wheeler and four-wheeler transport. Motorcycles and scooters are wrapped in multi-layer foam and corrugated armor and secured upright inside covered trucks with ratchet tie-down straps. Cars are transported via enclosed hydraulic car carrier trailers.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">How are household shifting charges calculated in Jamtara?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            Our shifting rates are determined by the volume and cubic feet of household items, pickup and delivery floor levels (with or without elevator), transit distance, packaging material quantity, and optional transit insurance. We conduct a free in-person or video survey to offer a transparent, binding written estimate with zero hidden fees.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">How can I book Packers and Movers in Jamtara with Shree Ashirwad?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            You can book easily by calling our 24/7 customer service helpline at 8409531615 or messaging us directly on WhatsApp. Our moving supervisor will schedule a free home assessment and provide an instant binding quotation.
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
        Ready for a Smooth, Hassle-Free Move in Jamtara?
      </h2>
      <p style="font-size: 16.5px; line-height: 1.7; color: #e2e8f0; margin-bottom: 30px; max-width: 750px; margin-left: auto; margin-right: auto;">
        Get your free, no-obligation moving quote today. Our Jamtara moving experts are available 24/7 to plan your move with guaranteed safety, IBA-approved documentation, and zero stress.
      </p>
      <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 14px;">
        <a href="tel:+918409531615" class="btn" style="background: #f39c12; color: #ffffff; font-weight: 700; padding: 14px 28px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 9px; font-size: 15px; box-shadow: 0 4px 14px rgba(243, 156, 18, 0.4);">
          <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
          Call: 8409531615
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Jamtara" target="_blank" rel="noopener" class="btn" style="background: #25d366; color: #ffffff; font-weight: 700; padding: 14px 28px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 9px; font-size: 15px; box-shadow: 0 4px 14px rgba(37, 211, 102, 0.35);">
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
