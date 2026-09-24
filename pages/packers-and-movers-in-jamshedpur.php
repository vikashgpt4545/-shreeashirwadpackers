<?php
/**
 * Packers and Movers in Jamshedpur - Shree Ashirwad Packers and Movers
 * Pure Core PHP Implementation
 * 
 * Target URL: https://www.shreeashirwadpackers.com/packers-and-movers-in-jamshedpur
 * Title: Packers and Movers in Jamshedpur - 8409531615
 * District: East Singhbhum, Jharkhand
 * Coordinates: 22.8046° N, 86.2029° E
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$page_title = "Packers and Movers in Jamshedpur - 8409531615";
$page_description = "Hire top packers and movers in Jamshedpur & Bistupur by Shree Ashirwad Packers. IBA approved bills, 5-layer packing, Tata Steel & corporate shifting. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/packers-and-movers-in-jamshedpur";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title><?php echo $page_title; ?></title>
  <meta name="description" content="<?php echo $page_description; ?>">
  <meta name="keywords" content="packers and movers in jamshedpur, best packers and movers in jamshedpur, household shifting in jamshedpur, house shifting jamshedpur, packers and movers bistupur, packers and movers sakchi, packers and movers telco jamshedpur, packers and movers adityapur, packers and movers jamshedpur to ranchi, packers and movers jamshedpur to kolkata, car transport in jamshedpur, bike parcel jamshedpur, iba approved packers in jamshedpur">
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
  <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/office-equipment-secure-packing-jamshedpur.jpg">
  <meta property="og:image:width" content="1204">
  <meta property="og:image:height" content="1600">
  <meta property="og:image:alt" content="Packers and Movers in Jamshedpur Shree Ashirwad Packers">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo $page_title; ?>">
  <meta name="twitter:description" content="<?php echo $page_description; ?>">
  <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/office-equipment-secure-packing-jamshedpur.jpg">

  <!-- Google Verification & Geo Tags -->
  <meta name="google-site-verification" content="<?php echo htmlspecialchars(GOOGLE_SITE_VERIFICATION, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="theme-color" content="#1a2b4c">
  <meta name="geo.region" content="IN-JH">
  <meta name="geo.placename" content="Jamshedpur">
  <meta name="geo.position" content="22.8046;86.2029">
  <meta name="ICBM" content="22.8046, 86.2029">

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
    "name": "Shree Ashirwad Packers and Movers Jamshedpur",
    "alternateName": "Shree Ashirwad Packers Jamshedpur",
    "url": "<?php echo $canonical_url; ?>",
    "logo": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
    "image": "<?php echo SITE_BASE_URL; ?>/images/office-equipment-secure-packing-jamshedpur.jpg",
    "description": "<?php echo $page_description; ?>",
    "telephone": "+918409531615",
    "email": "enquiry@shreeashirwadpackers.com",
    "priceRange": "₹₹",
    "keywords": "packers and movers in jamshedpur, best packers and movers in jamshedpur, household shifting in jamshedpur, house shifting jamshedpur, packers and movers bistupur, packers and movers sakchi, packers and movers telco jamshedpur, packers and movers adityapur, packers and movers jamshedpur to ranchi, packers and movers jamshedpur to kolkata, car transport in jamshedpur, bike parcel jamshedpur, iba approved packers in jamshedpur",
    "currenciesAccepted": "INR",
    "paymentAccepted": "Cash, UPI, Net Banking, Cheque",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Main Road, Near Gopal Maidan, Bistupur",
      "addressLocality": "Jamshedpur",
      "addressRegion": "Jharkhand",
      "postalCode": "831001",
      "addressCountry": "IN"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 22.8046,
      "longitude": 86.2029
    },
    "hasMap": "https://maps.google.com/?q=22.8046,86.2029",
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
      { "@type": "AdministrativeArea", "name": "Jamshedpur" },
      { "@type": "AdministrativeArea", "name": "Bistupur" },
      { "@type": "AdministrativeArea", "name": "Sakchi" },
      { "@type": "AdministrativeArea", "name": "Kadma" },
      { "@type": "AdministrativeArea", "name": "Sonari" },
      { "@type": "AdministrativeArea", "name": "Telco Colony" },
      { "@type": "AdministrativeArea", "name": "Adityapur" },
      { "@type": "AdministrativeArea", "name": "Golmuri" },
      { "@type": "AdministrativeArea", "name": "Baridih" },
      { "@type": "AdministrativeArea", "name": "Mango" },
      { "@type": "AdministrativeArea", "name": "Jugsalai" },
      { "@type": "AdministrativeArea", "name": "Gamharia" }
    ],
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.9",
      "reviewCount": "512",
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
        "name": "Packers and Movers in Jamshedpur",
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
        "name": "Why is Shree Ashirwad the #1 packers and movers in Jamshedpur?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Shree Ashirwad Packers and Movers brings more than 16 years of recognized relocation mastery to Jamshedpur and the Steel City industrial belt. We offer 5-layer protective packing, trained in-house moving labor, authentic IBA-approved bills for Tata Group, corporate, and bank employees, dedicated GPS-tracked closed container trucks, and seamless transit across NH-33 and NH-18 towards Ranchi, Kolkata, Bhubaneswar, and pan-India."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide moving services for Tata Steel, Tata Motors, and Telco Colony employees in Jamshedpur?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we regularly handle executive, managerial, and technical relocations for employees of Tata Steel, Tata Motors, Tata Power, Tata Cummins, Tinplate, Timken, and Telco Colony residents. We provide specialized packing, itemized computerized inventory lists, and corporate billing compliance for swift claim reimbursement."
        }
      },
      {
        "@type": "Question",
        "name": "Can you provide IBA approved moving bills for corporate and bank claims in Jamshedpur?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we issue 100% genuine IBA-approved bills complete with GST invoices, stamped consignment notes (bilty), transit insurance policies, itemized packing inventory lists, and quotation copies. These documents are recognized and accepted by Tata Group companies, PSU banks (SBI, PNB, Canara, BoI), private financial institutions, and central/state government departments."
        }
      },
      {
        "@type": "Question",
        "name": "How long does shifting take from Jamshedpur to Ranchi, Kolkata, or Bhubaneswar?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Shifting from Jamshedpur to Ranchi (~130 km) takes only 2.5 to 3.5 hours (same-day delivery) via the NH-33 four-lane highway. Relocations to Kolkata (~280 km via NH-18/NH-16) take 1 day (6-8 hours), while moves to Bhubaneswar take 1 day and to Delhi NCR or Mumbai take 3 to 5 days using our dedicated express container fleet."
        }
      },
      {
        "@type": "Question",
        "name": "What packing materials do you use for high-value apartment furniture and luxury goods?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We deploy an engineered 5-layer protective packing standard: 2mm-4mm scratch-preventing foam sheeting, thick virgin bubble wrap, 5-ply to 7-ply heavy duty corrugated cardboard sheets, waterproof stretch film wrapping, and high-tensile polypropylene strapping. Delicate glassware, crystal chandeliers, and OLED smart TVs are packed in custom wooden crates."
        }
      },
      {
        "@type": "Question",
        "name": "Do you handle industrial machinery and factory shifting in Adityapur and Gamharia?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we have specialized heavy-lifting and machinery moving capabilities for MSMEs, auto-ancillaries, and industrial units across the Adityapur Industrial Area (AIADA) and Gamharia. We deploy hydraulic cranes, heavy machinery skates, pallet jacks, and heavy-duty wooden skids for safe industrial relocation."
        }
      },
      {
        "@type": "Question",
        "name": "Do you offer enclosed car carrier and bike transport from Jamshedpur?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we provide safe door-to-door vehicle relocation. Motorcycles and scooters are wrapped in multi-layer foam and corrugated armor and secured upright inside covered trucks with ratchet tie-down straps. Premium sedans and SUVs are transported via enclosed hydraulic car carrier trailers with zero road-wear and complete transit insurance."
        }
      },
      {
        "@type": "Question",
        "name": "How can I book Packers and Movers in Jamshedpur with Shree Ashirwad?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "You can book easily by calling our 24/7 customer service helpline at 8409531615 or messaging us directly on WhatsApp. Our moving supervisor will schedule a free home or office assessment and provide an instant binding quotation."
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
          <li style="color: #ffffff; font-weight: 600;" aria-current="page">Packers and Movers in Jamshedpur</li>
        </ol>
      </nav>

      <div style="max-width: 880px;">
        <div style="display: inline-flex; align-items: center; background: rgba(243, 156, 18, 0.2); border: 1px solid rgba(243, 156, 18, 0.4); padding: 6px 14px; border-radius: 30px; font-size: 13px; font-weight: 600; color: #f39c12; margin-bottom: 18px; letter-spacing: 0.5px; text-transform: uppercase;">
          ★ Certified Relocation Excellence in Jamshedpur & Steel City
        </div>
        <h1 style="font-size: clamp(28px, 4.2vw, 44px); font-weight: 800; line-height: 1.25; margin-bottom: 18px; color: #ffffff;">
          Packers and Movers in Jamshedpur <span style="background: linear-gradient(90deg, #f39c12, #f1c40f); -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent;">- 8409531615</span>
        </h1>
        <p style="font-size: 17px; line-height: 1.7; color: #e2e8f0; margin-bottom: 28px; max-width: 820px;">
          Welcome to Shree Ashirwad Packers and Movers in Jamshedpur — the premier relocation authority across the Steel City, Tatanagar, and the vibrant industrial corridors of East Singhbhum and Adityapur. Whether you are moving between high-rise apartments in Bistupur, Sonari, or Kadma, transferring from corporate residences in Telco Colony and Baridih, or relocating inter-state to Kolkata, Ranchi, Bhubaneswar, Patna, or Delhi NCR via National Highway 33 and National Highway 18, we provide 5-layer protective packing, IBA-approved documentation, dedicated container trucks, and complete transit insurance.
        </p>

        <!-- CTAs -->
        <div style="display: flex; flex-wrap: wrap; gap: 14px; align-items: center;">
          <a href="tel:+918409531615" class="btn" style="background: #f39c12; color: #ffffff; font-weight: 700; padding: 13px 26px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 9px; box-shadow: 0 4px 14px rgba(243, 156, 18, 0.4); transition: transform 0.2s ease;">
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
            Call: 8409531615
          </a>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20moving%20services%20in%20Jamshedpur" target="_blank" rel="noopener" class="btn" style="background: #25d366; color: #ffffff; font-weight: 700; padding: 13px 26px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 9px; box-shadow: 0 4px 14px rgba(37, 211, 102, 0.35); transition: transform 0.2s ease;">
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
          <div style="font-size: 13px; color: #64748b; font-weight: 500; margin-top: 4px;">100% Valid Tata & Bank Bills</div>
        </div>
        <div style="padding: 10px; border-left: 1px solid #e2e8f0;">
          <div style="font-size: 24px; font-weight: 800; color: #1f4068;">5-Layer Armor</div>
          <div style="font-size: 13px; color: #64748b; font-weight: 500; margin-top: 4px;">Bubble Wrap & Custom Crates</div>
        </div>
        <div style="padding: 10px; border-left: 1px solid #e2e8f0;">
          <div style="font-size: 24px; font-weight: 800; color: #27ae60;">NH-33 / NH-18</div>
          <div style="font-size: 13px; color: #64748b; font-weight: 500; margin-top: 4px;">Express Kolkata-Ranchi Route</div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 1: DETAILED INTRODUCTION & LOCAL CONTEXT -->
  <section style="background: #f8fafc; padding: 60px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 36px; align-items: center;">
        
        <div>
          <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">India's Steel City Logistics Specialist</span>
          <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 12px 0 20px; line-height: 1.3;">
            Premier Packers and Movers in Jamshedpur for Corporate & Residential Shifting
          </h2>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Jamshedpur, affectionately known worldwide as the "Steel City" and "Tatanagar", stands as the industrial crown jewel of eastern India. Established by the visionary industrialist Jamsetji Nusserwanji Tata, Jamshedpur is the pioneer of modern Indian manufacturing — home to Tata Steel's flagship integrated works, Tata Motors' commercial vehicle plant, Tata Power, Tata Cummins, Tinplate Company of India, and the sprawling Adityapur Industrial Area (AIADA) housing more than 1,200 manufacturing units and ancillaries.
          </p>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Beyond heavy engineering, Jamshedpur is an intellectual powerhouse boasting premier educational and healthcare institutes like XLRI (Xavier School of Management), National Institute of Technology (NIT Jamshedpur), and MGM Medical College. With the four-lane National Highway 33 (NH-18) corridor offering lightning-fast transit to Ranchi and direct connectivity to Kolkata via Kharagpur, Jamshedpur demands the highest caliber of professional relocation services. <strong>Shree Ashirwad Packers and Movers</strong> has been the benchmark of excellence in Jamshedpur for over 16 years.
          </p>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155;">
            Whether you are relocating between luxury high-rises in Bistupur, Sonari, or Kadma, transferring from corporate executive residences in Telco Colony or Circuit House Area, shifting industrial equipment in Adityapur, or moving inter-state to Kolkata, Ranchi, or Bengaluru, our expert teams deliver perfection at every step.
          </p>

          <div style="margin-top: 24px; display: flex; flex-wrap: wrap; gap: 12px;">
            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 10px 16px; font-size: 14px; font-weight: 600; color: #1e293b; display: flex; align-items: center; gap: 8px;">
              <span style="color: #27ae60;">✔</span> Tata Steel & Telco Colony Corporate Shifting
            </div>
            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 10px 16px; font-size: 14px; font-weight: 600; color: #1e293b; display: flex; align-items: center; gap: 8px;">
              <span style="color: #27ae60;">✔</span> High-Rise Apartment Specialists (Sonari/Kadma)
            </div>
            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 10px 16px; font-size: 14px; font-weight: 600; color: #1e293b; display: flex; align-items: center; gap: 8px;">
              <span style="color: #27ae60;">✔</span> Adityapur Industrial Area (AIADA) Crew
            </div>
          </div>
        </div>

        <!-- Responsive 3:4 Image Container -->
        <div style="display: flex; justify-content: center;">
          <div style="width: 100%; max-width: 400px; aspect-ratio: 3/4; overflow: hidden; border-radius: 14px; box-shadow: 0 12px 30px rgba(0,0,0,0.12); position: relative;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/office-equipment-secure-packing-jamshedpur.jpg" alt="Office Equipment Secure Packing Jamshedpur" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(13, 27, 42, 0.85) 0%, transparent 100%); padding: 20px; color: #ffffff;">
              <p style="font-size: 13px; font-weight: 600; margin: 0; text-transform: uppercase; letter-spacing: 0.5px; color: #f39c12;">Corporate Relocation</p>
              <p style="font-size: 15px; font-weight: 700; margin: 4px 0 0;">Jamshedpur Professional Moving Operations</p>
            </div>
          </div>
        </div>

      </div>

      <!-- LOCAL RELOCATION DRIVERS BOX -->
      <div style="background: #ffffff; border-radius: 12px; border: 1px solid #e2e8f0; padding: 32px; margin-top: 45px; box-shadow: 0 4px 16px rgba(0,0,0,0.04);">
        <h3 style="font-size: 21px; font-weight: 700; color: #0d1b2a; margin-bottom: 14px;">Key Relocation Drivers Across Jamshedpur & Adityapur</h3>
        <p style="font-size: 15px; line-height: 1.8; color: #475569; margin-bottom: 20px;">
          As Jharkhand's commercial and industrial capital, Jamshedpur witnesses constant corporate transfers, residential real estate expansion, and manufacturing relocations:
        </p>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px;">
          <div style="border-left: 3px solid #f39c12; padding-left: 14px;">
            <h4 style="font-size: 16px; font-weight: 700; color: #1e293b; margin-bottom: 6px;">Tata Group & Corporate Transfers</h4>
            <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">Regular executive transfers for Tata Steel, Tata Motors, Tata Power, and multinational engineering companies between Jamshedpur, Mumbai, Pune, Kolkata, and Delhi NCR.</p>
          </div>
          <div style="border-left: 3px solid #1f4068; padding-left: 14px;">
            <h4 style="font-size: 16px; font-weight: 700; color: #1e293b; margin-bottom: 6px;">High-Rise Apartment Relocations</h4>
            <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">Rapidly growing demand in luxury gated societies across Sonari, Kadma, Circuit House Area, and Mango requiring expert hydraulic elevator handling and furniture crating.</p>
          </div>
          <div style="border-left: 3px solid #27ae60; padding-left: 14px;">
            <h4 style="font-size: 16px; font-weight: 700; color: #1e293b; margin-bottom: 6px;">Adityapur Industrial & MSME Shifting</h4>
            <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">Specialized machinery, industrial spare parts, and office relocations for manufacturing units in AIADA, Gamharia, and industrial estates across East Singhbhum.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: COMPREHENSIVE SERVICES IN JAMSHEDPUR -->
  <section style="background: #ffffff; padding: 65px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; max-width: 780px; margin: 0 auto 45px;">
        <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Complete Service Spectrum</span>
        <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 10px 0 16px;">
          Full-Spectrum Moving Services Across Jamshedpur & Adityapur
        </h2>
        <p style="font-size: 15.5px; line-height: 1.7; color: #64748b;">
          From private residential apartments to sprawling corporate campuses and manufacturing plants, our comprehensive logistics services deliver complete peace of mind.
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
            Complete home moving service covering disassembling beds, wardrobes, and modular cabinets, bubble-wrapping delicate kitchenware, protective packaging for sofas, and transporting goods safely in covered container trucks with complete unpacking support.
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
          <h3 style="font-size: 19px; font-weight: 700; color: #0d1b2a; margin-bottom: 12px;">Corporate & Office Relocation</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin-bottom: 14px;">
            Relocate commercial establishments, bank branches, corporate offices, and institutional premises across Jamshedpur with minimum disruption. We systematically handle server racks, computer workstations, document archives, and modular office furniture.
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
            We furnish 100% genuine IBA-approved moving bills complete with GST invoices, stamped consignment notes (bilty), transit insurance policies, packing inventory lists, and quotation copies for Tata Group, corporate, and bank employee reimbursement.
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
            Safe motorcycle and scooter transport from Jamshedpur to Ranchi, Kolkata, Bhubaneswar, Patna, or anywhere in India. Wrapped in bubble foam, corrugated armor, and securely strapped upright inside covered trucks to eliminate highway scratches.
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
            Relocate your sedan, luxury vehicle, or SUV safely across India using specialized hydraulic car carrier trailers. Door-to-door pickup in Jamshedpur, zero road wear, wheel clamping, and full transit insurance coverage included.
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
            Secure short-term and long-term storage for household furniture, commercial inventory, and industrial equipment. Our warehouses are dry, pest-controlled, fire-safe, and monitored 24/7 with CCTV surveillance.
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
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="5 Layer Protective Packaging Household Goods Jamshedpur" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(13, 27, 42, 0.85) 0%, transparent 100%); padding: 20px; color: #ffffff;">
              <p style="font-size: 13px; font-weight: 600; margin: 0; text-transform: uppercase; letter-spacing: 0.5px; color: #f39c12;">Zero Damage Guarantee</p>
              <p style="font-size: 15px; font-weight: 700; margin: 4px 0 0;">5-Layer Shock Absorbing Packaging</p>
            </div>
          </div>
        </div>

        <div style="order: 1;">
          <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Flawless Material Engineering</span>
          <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 12px 0 20px; line-height: 1.3;">
            Engineered 5-Layer Packing Standard for Jamshedpur Relocations
          </h2>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 22px;">
            Transporting goods along the busy NH-33 expressway, navigating multi-level elevators in luxury apartment complexes, and traveling long interstate distances requires superior packaging engineering. Shree Ashirwad Packers implements a rigorous 5-layer packaging system that guarantees complete safety for every household and corporate item:
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
                <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">Industrial 23-micron stretch film tightly seals the entire package, keeping out monsoon rain, humidity, and fine industrial and road dust particles.</p>
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

  <!-- SECTION 4: LOCALITIES & SUBDIVISIONS SERVED IN JAMSHEDPUR -->
  <section style="background: #ffffff; padding: 65px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; max-width: 780px; margin: 0 auto 40px;">
        <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Comprehensive City Reach</span>
        <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 10px 0 16px;">
          Localities & Townships Served Across Jamshedpur & Adityapur
        </h2>
        <p style="font-size: 15.5px; line-height: 1.7; color: #64748b;">
          Our local operations team covers every corporate township, residential colony, commercial market, and industrial sector across Jamshedpur and Adityapur.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px;">
        
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Bistupur & Commercial Heart</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Main Road Bistupur, Gopal Maidan, Circuit House Area, Beldih Club, Regal Square, Kamani Centre, Ramdas Peth, and prime corporate executive suites.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Sakchi & Northern Residential</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Sakchi Market, Jubilee Park periphery, Old Purulia Road, Straight Mile Road, Kalimati Road, and residential complexes along Subarnarekha River.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Kadma & Sonari High-Rise Belt</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Sonari Airport area, Kagalnagar, Vijaya Heritage, Uliyan, Kadma Farm Area, Rankini Mandir vicinity, and luxury multi-story residential towers.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Telco, Baridih & Golmuri</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Telco Colony, Plaza Market, Baridih, Golmuri Golf Course, Agrico, Sidhgora, Tinplate Township, Birsanagar, and Tata Motors manufacturing zones.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Adityapur & Gamharia Industrial</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Adityapur Industrial Area (AIADA), NIT Jamshedpur campus, Tata-Kandra Road, Gamharia industrial estates, and surrounding residential colonies.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Mango, Dimna & Tatanagar Rly</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Mango Chowk, Dimna Road, NH-33 highway link, Jugsalai, Tatanagar Railway Station, Bagbera, Parsudih, and Khasmahal civil hospital area.
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
          Packers and Movers Jamshedpur Rate Card & Inter-City Transit Times
        </h2>
        <p style="font-size: 15.5px; line-height: 1.7; color: #64748b;">
          Transparent, upfront pricing with no hidden charges. Review our standard rate card for domestic moves in Jamshedpur and long-distance relocations across India.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
        
        <!-- Rates Table -->
        <div style="background: #ffffff; border-radius: 12px; border: 1px solid #e2e8f0; overflow: hidden; box-shadow: 0 4px 16px rgba(0,0,0,0.04);">
          <div style="background: #0d1b2a; color: #ffffff; padding: 18px 24px;">
            <h3 style="font-size: 18px; font-weight: 700; margin: 0;">Estimated Shifting Charges in Jamshedpur</h3>
            <p style="font-size: 13px; color: #94a3b8; margin: 4px 0 0;">Includes packing, loading, transport & unloading</p>
          </div>
          <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
              <thead>
                <tr style="background: #f1f5f9; border-bottom: 2px solid #e2e8f0;">
                  <th style="padding: 12px 16px; font-weight: 700; color: #1e293b;">Move Type</th>
                  <th style="padding: 12px 16px; font-weight: 700; color: #1e293b;">Local Shift (Jamshedpur)</th>
                  <th style="padding: 12px 16px; font-weight: 700; color: #1e293b;">Inter-City / State</th>
                </tr>
              </thead>
              <tbody>
                <tr style="border-bottom: 1px solid #e2e8f0;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">1 BHK Shifting</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹4,500 - ₹9,500</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹11,000 - ₹22,000</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">2 BHK Shifting</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹7,500 - ₹15,000</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹16,000 - ₹33,000</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">3 BHK / Villa</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹11,500 - ₹22,500</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹25,000 - ₹48,000</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">4 BHK / Bungalow</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹16,500 - ₹30,000</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹33,000 - ₹68,000</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Bike / Scooter Parcel</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹1,800 - ₹3,500</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹3,500 - ₹8,000</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Car Transport (Carrier)</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹4,500 - ₹8,000</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹9,500 - ₹19,500</td>
                </tr>
                <tr>
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Office / Commercial</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹9,500 - ₹26,000</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹24,000 - ₹65,000</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Transit Times Table -->
        <div style="background: #ffffff; border-radius: 12px; border: 1px solid #e2e8f0; overflow: hidden; box-shadow: 0 4px 16px rgba(0,0,0,0.04);">
          <div style="background: #1b263b; color: #ffffff; padding: 18px 24px;">
            <h3 style="font-size: 18px; font-weight: 700; margin: 0;">Transit Times from Jamshedpur</h3>
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
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Jamshedpur to Ranchi</td>
                  <td style="padding: 12px 16px; color: #64748b;">~130 km (NH-33)</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">Same Day (2.5 - 3.5 Hours)</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Jamshedpur to Chaibasa</td>
                  <td style="padding: 12px 16px; color: #64748b;">~60 km</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">Same Day (1.5 - 2 Hours)</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Jamshedpur to Dhanbad / Bokaro</td>
                  <td style="padding: 12px 16px; color: #64748b;">~125 - 145 km</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">Same Day (3 - 4 Hours)</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Jamshedpur to Kolkata</td>
                  <td style="padding: 12px 16px; color: #64748b;">~280 km (NH-18/NH-16)</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">1 Day (6 - 8 Hours)</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Jamshedpur to Bhubaneswar</td>
                  <td style="padding: 12px 16px; color: #64748b;">~340 km</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">1 Day</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Jamshedpur to Patna (Bihar)</td>
                  <td style="padding: 12px 16px; color: #64748b;">~460 km</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">1 - 2 Days</td>
                </tr>
                <tr>
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Jamshedpur to Delhi / Mumbai</td>
                  <td style="padding: 12px 16px; color: #64748b;">~1,320 - 1,700 km</td>
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
          <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Express Expressway Logistics</span>
          <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 12px 0 20px; line-height: 1.3;">
            Dedicated GPS-Tracked Closed Container Fleet in Jamshedpur
          </h2>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
            Unlike informal transporters who use open tarpaulin trucks where goods face exposure to heavy rains, industrial soot, and highway hazards, Shree Ashirwad Packers maintains an exclusive fleet of weatherproof, closed-body container trucks. Ranging from 14-foot and 17-foot container vehicles for local shifts in Jamshedpur to 24-foot and 32-foot multi-axle trucks for long-distance relocations, your items travel in complete safety.
          </p>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 22px;">
            Every vehicle is equipped with live GPS tracking systems and tamper-evident digital locks. You receive continuous status updates via SMS and WhatsApp throughout the transit journey along NH-33 and interstate expressway corridors.
          </p>

          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px;">
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
              <div style="font-weight: 700; color: #0d1b2a; font-size: 15px; margin-bottom: 4px;">Zero Transshipment</div>
              <p style="font-size: 13px; color: #64748b; margin: 0; line-height: 1.5;">Direct point-to-point transit without transferring goods between different vehicles at intermediate depots.</p>
            </div>
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
              <div style="font-weight: 700; color: #0d1b2a; font-size: 15px; margin-bottom: 4px;">Weatherproof Enclosures</div>
              <p style="font-size: 13px; color: #64748b; margin: 0; line-height: 1.5;">100% waterproof sealed steel containers protect against heavy monsoon downpours and industrial dust.</p>
            </div>
          </div>
        </div>

        <!-- Responsive 3:4 Image Container -->
        <div style="display: flex; justify-content: center;">
          <div style="width: 100%; max-width: 400px; aspect-ratio: 3/4; overflow: hidden; border-radius: 14px; box-shadow: 0 12px 30px rgba(0,0,0,0.12); position: relative;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/multistory-apartment-goods-loading-ranchi.jpg" alt="Multistory Apartment Goods Loading Jamshedpur" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(13, 27, 42, 0.85) 0%, transparent 100%); padding: 20px; color: #ffffff;">
              <p style="font-size: 13px; font-weight: 600; margin: 0; text-transform: uppercase; letter-spacing: 0.5px; color: #f39c12;">Apartment Specialists</p>
              <p style="font-size: 15px; font-weight: 700; margin: 4px 0 0;">High-Rise Elevator & Society Handling</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 7: LUXURY CAR & VEHICLE CARRIER -->
  <section style="background: #f8fafc; padding: 65px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 36px; align-items: center;">
        
        <!-- Responsive 3:4 Image Container -->
        <div style="display: flex; justify-content: center; order: 2;">
          <div style="width: 100%; max-width: 400px; aspect-ratio: 3/4; overflow: hidden; border-radius: 14px; box-shadow: 0 12px 30px rgba(0,0,0,0.12); position: relative;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car Transport Carrier Loading Jamshedpur" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(13, 27, 42, 0.85) 0%, transparent 100%); padding: 20px; color: #ffffff;">
              <p style="font-size: 13px; font-weight: 600; margin: 0; text-transform: uppercase; letter-spacing: 0.5px; color: #f39c12;">Enclosed Carriers</p>
              <p style="font-size: 15px; font-weight: 700; margin: 4px 0 0;">Zero-Mileage Luxury Vehicle Transport</p>
            </div>
          </div>
        </div>

        <div style="order: 1;">
          <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Automotive Logistics</span>
          <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 12px 0 20px; line-height: 1.3;">
            Specialized Hydraulic Car Carriers & Premium Vehicle Relocation
          </h2>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
            In Jamshedpur, home to major automobile manufacturing at Tata Motors, car owners demand the highest standard of vehicle care. Driving your personal sedan, luxury car, or SUV across hundreds of highway kilometers adds unnecessary wear, risks gravel chip damage, and consumes valuable time.
          </p>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 22px;">
            Shree Ashirwad Packers utilizes specialized enclosed hydraulic car carrier trucks. Your vehicle is driven onto covered ramps, secured with heavy-duty wheel chocks and safety belts, and insured under comprehensive transit policies. For two-wheelers, fuel tanks and mirrors receive multi-layer foam wrapping before being locked upright in covered carriers.
          </p>

          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px;">
            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
              <div style="font-weight: 700; color: #0d1b2a; font-size: 15px; margin-bottom: 4px;">Hydraulic Car Trailers</div>
              <p style="font-size: 13px; color: #64748b; margin: 0; line-height: 1.5;">Multi-car enclosed carriers with wheel locking clamps and zero road wear during interstate transport.</p>
            </div>
            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
              <div style="font-weight: 700; color: #0d1b2a; font-size: 15px; margin-bottom: 4px;">Bike Armor Wrapping</div>
              <p style="font-size: 13px; color: #64748b; margin: 0; line-height: 1.5;">Multi-layer bubble and foam armor for fuel tanks, exhaust pipes, and headlights with upright ratchet locking.</p>
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
          Our 4-Step Seamless Moving Process in Jamshedpur
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
            We conduct an in-person or video survey of your belongings in Jamshedpur, assess volume and packing requirements, and provide a guaranteed written estimate with no hidden costs.
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
          <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Local Presence in Jamshedpur</span>
          <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 12px 0 20px; line-height: 1.3;">
            Visit Our Jamshedpur Branch or Schedule an In-Home Survey
          </h2>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 20px;">
            Our Jamshedpur operational branch is centrally located on Main Road in Bistupur near Gopal Maidan, providing rapid response times to customers throughout Bistupur, Sakchi, Kadma, Sonari, Telco, and Adityapur. Our local team is ready to assist you with customized moving plans, corporate billing, and immediate container dispatch.
          </p>

          <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px; margin-bottom: 20px;">
            <div style="font-size: 16px; font-weight: 700; color: #0d1b2a; margin-bottom: 6px;">Jamshedpur Branch Office</div>
            <p style="font-size: 14px; color: #64748b; margin: 0 0 10px; line-height: 1.6;">
              Main Road, Near Gopal Maidan, Bistupur, Jamshedpur, Jharkhand - 831001
            </p>
            <div style="font-size: 14px; color: #1e293b; margin-bottom: 4px;"><strong>Helpline:</strong> +91 8409531615</div>
            <div style="font-size: 14px; color: #1e293b; margin-bottom: 4px;"><strong>Email:</strong> enquiry@shreeashirwadpackers.com</div>
            <div style="font-size: 14px; color: #1e293b;"><strong>Working Hours:</strong> Monday - Sunday: 7:00 AM - 10:00 PM</div>
          </div>

          <div style="display: flex; gap: 12px; flex-wrap: wrap;">
            <a href="tel:+918409531615" class="btn" style="background: #1f4068; color: #ffffff; font-weight: 700; padding: 12px 22px; border-radius: 8px; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 8px;">
              Call Jamshedpur Branch
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact" class="btn" style="background: #f39c12; color: #ffffff; font-weight: 700; padding: 12px 22px; border-radius: 8px; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 8px;">
              Book Pre-Move Survey
            </a>
          </div>
        </div>

        <!-- Google Map Embed -->
        <div style="border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); border: 1px solid #e2e8f0; height: 380px;">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117712.89241584852!2d86.1314128387635!3d22.804620798135893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f5e31989f0e2b5%3A0xeeec8e81ce9b344!2sJamshedpur%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"
            title="Jamshedpur Jharkhand Location Map">
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
          Common Questions About Shifting in Jamshedpur
        </h2>
        <p style="font-size: 15.5px; line-height: 1.7; color: #64748b;">
          Have questions about your upcoming move in Jamshedpur? Here are clear, detailed answers to the most common queries we receive from local residents and corporate clients.
        </p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px; max-width: 920px; margin: 0 auto;">
        
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Why is Shree Ashirwad the #1 packers and movers in Jamshedpur?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            Shree Ashirwad Packers and Movers brings more than 16 years of recognized relocation mastery to Jamshedpur and the Steel City industrial belt. We offer 5-layer protective packing, trained in-house moving labor, authentic IBA-approved bills for Tata Group, corporate, and bank employees, dedicated GPS-tracked closed container trucks, and seamless transit across NH-33 and NH-18 towards Ranchi, Kolkata, Bhubaneswar, and pan-India.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Do you provide moving services for Tata Steel, Tata Motors, and Telco Colony employees in Jamshedpur?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            Yes, we regularly handle executive, managerial, and technical relocations for employees of Tata Steel, Tata Motors, Tata Power, Tata Cummins, Tinplate, Timken, and Telco Colony residents. We provide specialized packing, itemized computerized inventory lists, and corporate billing compliance for swift claim reimbursement.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Can you provide IBA approved moving bills for corporate and bank claims in Jamshedpur?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            Yes, we issue 100% genuine IBA-approved bills complete with GST invoices, stamped consignment notes (bilty), transit insurance policies, itemized packing inventory lists, and quotation copies. These documents are recognized and accepted by Tata Group companies, PSU banks (SBI, PNB, Canara, BoI), private financial institutions, and central/state government departments.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">How long does shifting take from Jamshedpur to Ranchi, Kolkata, or Bhubaneswar?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            Shifting from Jamshedpur to Ranchi (~130 km) takes only 2.5 to 3.5 hours (same-day delivery) via the NH-33 four-lane highway. Relocations to Kolkata (~280 km via NH-18/NH-16) take 1 day (6-8 hours), while moves to Bhubaneswar take 1 day and to Delhi NCR or Mumbai take 3 to 5 days using our dedicated express container fleet.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">What packing materials do you use for high-value apartment furniture and luxury goods?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            We deploy an engineered 5-layer protective packing standard: 2mm-4mm scratch-preventing foam sheeting, thick virgin bubble wrap, 5-ply to 7-ply heavy duty corrugated cardboard sheets, waterproof stretch film wrapping, and high-tensile polypropylene strapping. Delicate glassware, crystal chandeliers, and OLED smart TVs are packed in custom wooden crates.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Do you handle industrial machinery and factory shifting in Adityapur and Gamharia?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            Yes, we have specialized heavy-lifting and machinery moving capabilities for MSMEs, auto-ancillaries, and industrial units across the Adityapur Industrial Area (AIADA) and Gamharia. We deploy hydraulic cranes, heavy machinery skates, pallet jacks, and heavy-duty wooden skids for safe industrial relocation.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Do you offer enclosed car carrier and bike transport from Jamshedpur?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            Yes, we provide safe door-to-door vehicle relocation. Motorcycles and scooters are wrapped in multi-layer foam and corrugated armor and secured upright inside covered trucks with ratchet tie-down straps. Premium sedans and SUVs are transported via enclosed hydraulic car carrier trailers with zero road-wear and complete transit insurance.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">How can I book Packers and Movers in Jamshedpur with Shree Ashirwad?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            You can book easily by calling our 24/7 customer service helpline at 8409531615 or messaging us directly on WhatsApp. Our moving supervisor will schedule a free home or office assessment and provide an instant binding quotation.
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
        Ready for a Smooth, Hassle-Free Move in Jamshedpur?
      </h2>
      <p style="font-size: 16.5px; line-height: 1.7; color: #e2e8f0; margin-bottom: 30px; max-width: 750px; margin-left: auto; margin-right: auto;">
        Get your free, no-obligation moving quote today. Our Jamshedpur moving experts are available 24/7 to plan your move with guaranteed safety, IBA-approved documentation, and zero stress.
      </p>
      <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 14px;">
        <a href="tel:+918409531615" class="btn" style="background: #f39c12; color: #ffffff; font-weight: 700; padding: 14px 28px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 9px; font-size: 15px; box-shadow: 0 4px 14px rgba(243, 156, 18, 0.4);">
          <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
          Call: 8409531615
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Jamshedpur" target="_blank" rel="noopener" class="btn" style="background: #25d366; color: #ffffff; font-weight: 700; padding: 14px 28px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 9px; font-size: 15px; box-shadow: 0 4px 14px rgba(37, 211, 102, 0.35);">
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
