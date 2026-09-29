<?php
/**
 * Car Transport in Ranchi - Shree Ashirwad Packers and Movers
 * Pure Core PHP Implementation
 * 
 * Target URL: https://www.shreeashirwadpackers.com/car-transport-in-ranchi
 * Title: Car Transport in Ranchi - 8409531615
 * Head Office: Anandpuri Chowk, Vidyanagar Road, Harmu, Ranchi, Jharkhand - 834001
 * Coordinates: 23.3639813° N, 85.3090259° E
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$page_title = "Car Transport in Ranchi - 8409531615 | Shree Ashirwad Packers";
$page_description = "Specialized car transport in Ranchi by Shree Ashirwad Packers. Enclosed hydraulic car carriers, low-incline ramps, zero-odometer highway transit, door pickup, and genuine IBA approved bills.";
$canonical_url = PRODUCTION_CANONICAL_DOMAIN . "/car-transport-in-ranchi";
$meta_keywords = "car transport in ranchi, car carrier services in ranchi, car shifting in ranchi, car relocation ranchi, car transportation charges in ranchi, vehicle shifting services in ranchi, packers and movers in ranchi";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title><?php echo $page_title; ?></title>
  <meta name="description" content="<?php echo $page_description; ?>">
  <meta name="keywords" content="<?php echo $meta_keywords; ?>">
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
  <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="800">
  <meta property="og:image:alt" content="Car Transport in Ranchi Shree Ashirwad Packers">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo $page_title; ?>">
  <meta name="twitter:description" content="<?php echo $page_description; ?>">
  <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg">

  <!-- Verification & Geo Tags -->
  <meta name="google-site-verification" content="<?php echo htmlspecialchars(GOOGLE_SITE_VERIFICATION, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="theme-color" content="#1a2b4c">
  <meta name="geo.region" content="IN-JH">
  <meta name="geo.placename" content="Ranchi">
  <meta name="geo.position" content="23.3639813;85.3090259">
  <meta name="ICBM" content="23.3639813, 85.3090259">

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

  <!-- Structured Data: MovingCompany / AutoTransport Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "AutoTransport",
    "@id": "<?php echo $canonical_url; ?>/#autotransport",
    "name": "Shree Ashirwad Packers and Movers - Car Transport Ranchi",
    "alternateName": "Shree Ashirwad Car Carrier Services Ranchi",
    "url": "<?php echo $canonical_url; ?>",
    "logo": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
    "image": "<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg",
    "description": "<?php echo $page_description; ?>",
    "telephone": "+918409531615",
    "email": "enquiry@shreeashirwadpackers.com",
    "priceRange": "₹₹",
    "keywords": "car transport in ranchi, car carrier services in ranchi, car shifting in ranchi, car relocation ranchi, car transportation charges in ranchi",
    "currenciesAccepted": "INR",
    "paymentAccepted": "Cash, UPI, Net Banking, Cheque",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Anandpuri Chowk, Vidyanagar Road, Harmu",
      "addressLocality": "Ranchi",
      "addressRegion": "Jharkhand",
      "postalCode": "834001",
      "addressCountry": "IN"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 23.3639813,
      "longitude": 85.3090259
    },
    "hasMap": "https://maps.google.com/?q=23.3639813,85.3090259",
    "openingHoursSpecification": [
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
        "opens": "00:00",
        "closes": "23:59"
      }
    ],
    "areaServed": [
      { "@type": "City", "name": "Ranchi" },
      { "@type": "AdministrativeArea", "name": "Ranchi District" },
      { "@type": "State", "name": "Jharkhand" }
    ]
  }
  </script>

  <!-- Structured Data: Service Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "@id": "<?php echo $canonical_url; ?>/#service",
    "serviceType": "Automobile and Car Carrier Transportation",
    "name": "Car Transport in Ranchi",
    "provider": {
      "@type": "MovingCompany",
      "@id": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/#movingcompany",
      "name": "<?php echo BUSINESS_NAME; ?>",
      "telephone": "+918409531615",
      "url": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/",
      "image": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/assets/images/logo.png",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Anandpuri Chowk, Vidyanagar Road, Harmu",
        "addressLocality": "Ranchi",
        "addressRegion": "Jharkhand",
        "postalCode": "834001",
        "addressCountry": "IN"
      }
    },
    "areaServed": {
      "@type": "City",
      "name": "Ranchi"
    },
    "description": "Certified car transport in Ranchi utilizing enclosed multi-car trailers, dedicated single-car haulers, hydraulic low-incline ramps, 360-degree digital condition audits, and door-to-door delivery across India.",
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Automobile Transport Packages",
      "itemListElement": [
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Hatchback & Compact Car Carrier Shipping from Ranchi" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Sedan & Executive Car Transport from Ranchi" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Compact & Full-Size SUV Relocation in Ranchi" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Luxury & German Marque Enclosed Transport in Ranchi" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Electric Vehicle (EV) Car Carrier Transit in Ranchi" } }
      ]
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
        "name": "Vehicle Shifting",
        "item": "<?php echo SITE_BASE_URL; ?>/vehicle-shifting/"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Car Transport in Ranchi",
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
        "name": "What are the car transport charges in Ranchi for interstate shifting?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Car transport charges in Ranchi generally start from ₹8,500 to ₹14,000 for regional relocations up to 500 km (such as Ranchi to Kolkata, Patna, or Varanasi), ₹14,000 to ₹22,000 for mid-distance routes (such as Ranchi to Delhi NCR, Lucknow, or Kanpur), and ₹18,000 to ₹32,000 for long-distance transport to cities like Bangalore, Mumbai, Pune, Chennai, or Hyderabad. Exact rates depend on vehicle model, dimensions, carrier type (open vs. enclosed container), and declared transit insurance value."
        }
      },
      {
        "@type": "Question",
        "name": "Why should I choose an enclosed car carrier instead of an open trailer?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "An enclosed car carrier features solid steel walls and an airtight weather seal that completely shields your car from high-speed highway gravel chips, windshield cracks, bird droppings, industrial soot, rain, and extreme solar heat. For sedans, luxury cars, and SUVs, enclosed carriers guarantee zero cosmetic blemishes and zero highway exposure."
        }
      },
      {
        "@type": "Question",
        "name": "How much petrol or diesel should remain in the car during transport?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We advise car owners to maintain approximately 10 to 15 liters of fuel (about one-quarter tank). This provides sufficient fuel for driving the car up our loading ramps, positioning it securely inside the carrier, and driving from the destination unloading terminal to the nearest fuel pump, while eliminating excess deadweight and vapor hazards."
        }
      },
      {
        "@type": "Question",
        "name": "Can I pack personal household luggage inside my car during transit?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "You may place up to 30 to 40 kg of soft personal items (such as bedsheets, blankets, or clothes inside duffel bags) in the car trunk, provided they remain completely below the window glass line. The driver's seat, front passenger seat, and rear visibility must remain totally clear so our crew can safely steer and maneuver the car during loading and unloading."
        }
      },
      {
        "@type": "Question",
        "name": "What documents are required to transport a car from Ranchi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "To transport a car from Ranchi to any other Indian state, you must provide: 1) A clear photocopy of the vehicle Registration Certificate (RC), 2) Valid comprehensive car insurance policy, 3) Current Pollution Under Control (PUC) certificate, and 4) Owner's Government-issued photo ID (Aadhar Card, PAN Card, or Driving License)."
        }
      },
      {
        "@type": "Question",
        "name": "How is a car loaded into the carrier without scraping low bumpers?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Our carriers are fitted with low-incline hydraulic extension ramps and customized wooden riser blocks engineered specifically for vehicles with low ground clearance, such as Honda City, Hyundai Verna, and European luxury sedans. This completely eliminates front bumper lip scrapes, underbody contact, or exhaust damage during loading."
        }
      },
      {
        "@type": "Question",
        "name": "How is the car secured inside the carrier during highway travel?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Every automobile is locked onto specialized floor-mounted steel wheel tracks. We fasten four heavy-duty tire harness ratchet straps around all four wheels, pulling downward against the trailer bed. The vehicle's handbrake is engaged, and the transmission is placed in gear (or 'Park' for automatic transmissions). This secures the car firmly to the chassis while letting its own suspension absorb highway vibrations naturally."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide IBA approved bills for car transportation reimbursement?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, Shree Ashirwad Packers issues 100% authentic IBA-approved bills, GST tax invoices, consignment notes (bilty/LR), and vehicle condition inspection reports accepted by all public sector undertakings (PSUs), central and state government departments, defense establishments, and corporate firms."
        }
      },
      {
        "@type": "Question",
        "name": "How many days does car shipping take from Ranchi to Bangalore or Delhi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Transit from Ranchi to Delhi NCR typically takes 3 to 5 business days, while transit from Ranchi to Bangalore, Mumbai, Pune, or Hyderabad takes 6 to 8 business days. Shorter regional corridors like Ranchi to Kolkata or Patna take 24 to 48 hours."
        }
      },
      {
        "@type": "Question",
        "name": "Can electric cars like Tata Nexon EV or MG ZS EV be transported safely?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we specialize in EV car relocation. Electric vehicles require special loading procedures because of their lower battery pack center of gravity and regenerative braking systems. Our technicians put the EV into 'Transport / Tow Mode', secure high-voltage isolation keys, and use non-conductive rim harness straps."
        }
      }
    ]
  }
  </script>
</head>
<body>

  <!-- 1. Global Header Navigation -->
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main id="mainContent">

    <!-- 2. Page Hero Section -->
    <section class="page-hero" style="position:relative; padding: 75px 0 55px; background: linear-gradient(135deg, #0b1727 0%, #102a45 60%, #1a3a5f 100%); color: #ffffff; overflow: hidden;">
      <div class="hero-glow hero-glow-1" style="position:absolute; top:-100px; left:-100px; width:450px; height:450px; background:radial-gradient(circle, rgba(255,106,40,0.18) 0%, rgba(255,106,40,0) 70%); border-radius:50%; pointer-events:none;"></div>
      <div class="hero-glow hero-glow-2" style="position:absolute; bottom:-100px; right:-100px; width:500px; height:500px; background:radial-gradient(circle, rgba(30,144,255,0.18) 0%, rgba(30,144,255,0) 70%); border-radius:50%; pointer-events:none;"></div>
      
      <div class="container page-hero-wrapper" style="position:relative; z-index:2; max-width:1140px; margin:0 auto; padding:0 20px;">
        <nav class="breadcrumb-trail" aria-label="Breadcrumb" style="margin-bottom:20px; font-size:0.9rem; color:#94a3b8;">
          <a href="<?php echo SITE_BASE_URL; ?>/" style="color:#cbd5e1; text-decoration:none;">Home</a>
          <span class="breadcrumb-sep" style="margin:0 8px; color:#64748b;">&gt;</span>
          <a href="<?php echo SITE_BASE_URL; ?>/vehicle-shifting/" style="color:#cbd5e1; text-decoration:none;">Vehicle Shifting</a>
          <span class="breadcrumb-sep" style="margin:0 8px; color:#64748b;">&gt;</span>
          <span aria-current="page" style="color:#ff6a28; font-weight:600;">Car Transport in Ranchi</span>
        </nav>
        
        <h1 class="page-hero-title" style="font-size: clamp(2.1rem, 4.2vw, 3.2rem); font-weight:800; line-height:1.2; margin-bottom:18px;">
          Car Transport in Ranchi
        </h1>
        
        <p class="page-hero-subtitle" style="font-size:1.15rem; line-height:1.75; color:#cbd5e1; max-width:880px; margin-bottom:28px;">
          Certified, scratch-free automobile relocation by Shree Ashirwad Packers and Movers. Equipped with specialized closed container car carriers, low-incline hydraulic ramps, 360-degree digital inspection audits, zero-odometer highway transit, and pan-India doorstep delivery backed by authentic IBA approved billing.
        </p>

        <div class="hero-cta-buttons" style="display:flex; flex-wrap:wrap; gap:16px; align-items:center;">
          <a href="tel:<?php echo SECONDARY_PHONE_RAW; ?>" class="btn-primary-custom" style="display:inline-flex; align-items:center; gap:10px; background:#ff6a28; color:#ffffff; padding:14px 28px; border-radius:8px; font-weight:700; text-decoration:none; box-shadow: 0 4px 15px rgba(255,106,40,0.35); transition: all 0.3s ease;">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
            Call Car Desk: 8409531615
          </a>
          <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="nofollow noopener noreferrer" class="btn-outline-custom" style="display:inline-flex; align-items:center; gap:10px; background:rgba(255,255,255,0.08); border:1px solid rgba(255,255,255,0.25); color:#ffffff; padding:14px 26px; border-radius:8px; font-weight:600; text-decoration:none; backdrop-filter:blur(6px); transition: all 0.3s ease;">
            WhatsApp Free Car Quote &rarr;
          </a>
        </div>
      </div>
    </section>

    <!-- 3. Key Credentials & Trust Stats Bar -->
    <section class="credentials-bar-section" style="background:#ffffff; padding:32px 0; border-bottom:1px solid #e2e8f0;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">
        <div class="credentials-grid" style="display:grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap:24px; align-items:center;">
          
          <div class="credential-item" style="display:flex; align-items:center; gap:16px;">
            <div style="background:#fff2eb; color:#ff6a28; width:52px; height:52px; border-radius:10px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
              <svg viewBox="0 0 24 24" width="26" height="26" fill="currentColor"><path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/></svg>
            </div>
            <div>
              <div style="font-size:1.4rem; font-weight:800; color:#0f223d;">15,000+</div>
              <div style="font-size:0.88rem; color:#64748b;">Cars Relocated Across India</div>
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
              <div style="font-size:1.4rem; font-weight:800; color:#0f223d;">Enclosed Trailers</div>
              <div style="font-size:0.88rem; color:#64748b;">Weatherproof Metal Cargo</div>
            </div>
          </div>

          <div class="credential-item" style="display:flex; align-items:center; gap:16px;">
            <div style="background:#fef3c7; color:#d97706; width:52px; height:52px; border-radius:10px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
              <svg viewBox="0 0 24 24" width="26" height="26" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14H9v-2h2v2zm0-4H9V7h2v5z"/></svg>
            </div>
            <div>
              <div style="font-size:1.4rem; font-weight:800; color:#0f223d;">Zero Odometer</div>
              <div style="font-size:0.88rem; color:#64748b;">No Highway Wear & Tear</div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Main Content Body -->
    <div class="container" style="max-width:1140px; margin:55px auto; padding:0 20px;">
      
      <!-- Section 1: In-Depth Overview & Driving vs Professional Car Carrier Comparison -->
      <section style="margin-bottom:60px;">
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:40px; align-items:center;">
          <div>
            <span style="background:#fff2eb; color:#ff6a28; padding:5px 14px; border-radius:9999px; font-weight:700; font-size:0.82rem; text-transform:uppercase; display:inline-block; margin-bottom:14px; letter-spacing:0.5px;">
              Premier Automobile Logistics
            </span>
            <h2 style="font-size:clamp(1.85rem, 3vw, 2.4rem); font-weight:800; color:#0f223d; margin-bottom:20px; line-height:1.25;">
              Professional Car Transport in Ranchi: Safeguarding Your Most Valued Asset
            </h2>
            <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:18px;">
              Your car is not merely a mode of commute; it is a substantial emotional and financial investment. When relocating across state borders or to distant metropolitan centers from Ranchi, vehicle owners face a fundamental question: should they drive their automobile across long national highways or entrust it to professional car carrier services?
            </p>
            <p style="font-size:1.02rem; line-height:1.75; color:#475569; margin-bottom:18px;">
              Driving an automobile across 1,000 to 2,000 kilometers of mixed highway conditions (such as traversing the congested stretches of NH-19, treacherous mountain ghats, or isolated rural bypasses) carries heavy hidden penalties. Long highway runs rack up massive odometer mileage that sharply depreciates your car's resale value. In addition, you face flying gravel chips that pit windshields and scrape hood paint, uneven tire tread wear, unexpected mechanical strain on clutches and automatic gearboxes, multiple toll barrier expenses, hotel lodging bills, and severe driver fatigue.
            </p>
            <p style="font-size:1.02rem; line-height:1.75; color:#475569; margin-bottom:22px;">
              <strong>Shree Ashirwad Packers and Movers</strong> eliminates all driving risks through certified, dedicated <strong>car transport in Ranchi</strong>. Operating from our central logistics terminal at Anandpuri Chowk, Vidyanagar Road, Harmu, we load your vehicle onto specialized enclosed multi-car trailers or custom hydraulic single-car haulers. Your automobile travels under complete lock and key, insulated from road debris, weather extremes, and highway hazards, arriving at your doorstep in pristine showroom condition.
            </p>
            <div style="display:flex; gap:14px; flex-wrap:wrap;">
              <a href="tel:<?php echo PRIMARY_PHONE_RAW; ?>" style="background:#0f223d; color:#ffffff; padding:12px 24px; border-radius:8px; font-weight:700; text-decoration:none; font-size:0.95rem; display:inline-flex; align-items:center; gap:8px;">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
                Instant Car Survey: 9835565233
              </a>
              <a href="#rates-section" style="background:#f1f5f9; color:#1e293b; padding:12px 22px; border-radius:8px; font-weight:600; text-decoration:none; font-size:0.95rem;">
                View Car Rate Matrix &darr;
              </a>
            </div>
          </div>
          <div>
            <div style="position:relative; border-radius:16px; overflow:hidden; box-shadow:0 12px 35px rgba(15,34,61,0.15); border:1px solid #e2e8f0;">
              <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car Transport in Ranchi Hydraulic Ramp Loading into Carrier" style="width:100%; height:260px; max-height:300px; display:block; object-fit:cover;">
              <div style="position:absolute; bottom:0; left:0; right:0; background:linear-gradient(to top, rgba(15,34,61,0.92) 0%, rgba(15,34,61,0) 100%); padding:24px 20px 16px; color:#ffffff;">
                <div style="font-size:1.1rem; font-weight:700; margin-bottom:4px;">Hydraulic Low-Incline Carrier Loading</div>
                <div style="font-size:0.88rem; color:#cbd5e1;">Precision wheel alignment, 4-point tire strap locks, and zero underbody impact in Ranchi</div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section 2: Segment-Wise Handling Protocols (Hatchback to Luxury EV) -->
      <section style="margin-bottom:60px; background:#f8fafc; border-radius:16px; padding:45px 35px; border:1px solid #e2e8f0;">
        <div style="text-align:center; max-width:820px; margin:0 auto 36px;">
          <span style="background:#e0f2fe; color:#0369a1; padding:4px 14px; border-radius:9999px; font-weight:700; font-size:0.82rem; text-transform:uppercase; display:inline-block; margin-bottom:12px;">
            Customized Automobile Protocols
          </span>
          <h2 style="font-size:clamp(1.75rem, 2.8vw, 2.2rem); font-weight:800; color:#0f223d; margin-bottom:14px;">
            Specialized Care for Every Automobile Segment in Ranchi
          </h2>
          <p style="font-size:1.02rem; line-height:1.75; color:#475569;">
            Different car categories demand vastly distinct carrier positioning, weight balance, ramp approach angles, and tie-down configurations. Our car shifting experts in Ranchi follow customized technical protocols for each vehicle tier:
          </p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(250px, 1fr)); gap:24px;">
          
          <div style="background:#ffffff; border-radius:12px; padding:26px 22px; border:1px solid #e2e8f0; box-shadow:0 4px 12px rgba(0,0,0,0.03);">
            <div style="background:#fff2eb; color:#ff6a28; width:48px; height:48px; border-radius:10px; display:flex; align-items:center; justify-content:center; margin-bottom:16px;">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="8" rx="2"/><circle cx="7" cy="19" r="2"/><circle cx="17" cy="19" r="2"/><path d="M5 11l2-5h10l2 5"/></svg>
            </div>
            <h3 style="font-size:1.2rem; font-weight:700; color:#0f223d; margin-bottom:10px;">Hatchbacks & Compacts</h3>
            <p style="font-size:0.92rem; line-height:1.65; color:#64748b; margin:0;">
              High-frequency shifting for Maruti Suzuki Swift, Baleno, WagonR, Hyundai i20, Grand i10, Tata Altroz, and Tiago. Compact dimensions allow flexible placement on upper or lower trailer decks with rubberized wheel chocks.
            </p>
          </div>

          <div style="background:#ffffff; border-radius:12px; padding:26px 22px; border:1px solid #e2e8f0; box-shadow:0 4px 12px rgba(0,0,0,0.03);">
            <div style="background:#eff6ff; color:#2563eb; width:48px; height:48px; border-radius:10px; display:flex; align-items:center; justify-content:center; margin-bottom:16px;">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.5 3c-.1.2-.1.5-.1.8v5.3c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/></svg>
            </div>
            <h3 style="font-size:1.2rem; font-weight:700; color:#0f223d; margin-bottom:10px;">Sedans & Executive Saloons</h3>
            <p style="font-size:0.92rem; line-height:1.65; color:#64748b; margin:0;">
              Careful handling for Honda City, Hyundai Verna, Skoda Slavia, and Maruti Ciaz. Low ground clearance requires extended hydraulic ramp angles and soft-wheel polyurethane straps to safeguard front air dams and spoilers.
            </p>
          </div>

          <div style="background:#ffffff; border-radius:12px; padding:26px 22px; border:1px solid #e2e8f0; box-shadow:0 4px 12px rgba(0,0,0,0.03);">
            <div style="background:#fef3c7; color:#d97706; width:48px; height:48px; border-radius:10px; display:flex; align-items:center; justify-content:center; margin-bottom:16px;">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="5" width="22" height="14" rx="2"/><circle cx="6" cy="19" r="2"/><circle cx="18" cy="19" r="2"/><path d="M1 10h22"/></svg>
            </div>
            <h3 style="font-size:1.2rem; font-weight:700; color:#0f223d; margin-bottom:10px;">Compact & Mid SUVs</h3>
            <p style="font-size:0.92rem; line-height:1.65; color:#64748b; margin:0;">
              High-volume transport for Hyundai Creta, Kia Seltos, Tata Nexon, Maruti Brezza, Mahindra Thar, and Scorpio Classic. High rooflines are matched to specific trailer bay height clearances to prevent ceiling contact.
            </p>
          </div>

          <div style="background:#ffffff; border-radius:12px; padding:26px 22px; border:1px solid #e2e8f0; box-shadow:0 4px 12px rgba(0,0,0,0.03);">
            <div style="background:#f0fdf4; color:#16a34a; width:48px; height:48px; border-radius:10px; display:flex; align-items:center; justify-content:center; margin-bottom:16px;">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 18H3c-.6 0-1-.4-1-1V7c0-.6.4-1 1-1h14c.6 0 1 .4 1 1v2"/><circle cx="7" cy="18" r="2"/><circle cx="17" cy="18" r="2"/><path d="M19 18h2c.6 0 1-.4 1-1v-5l-4-4h-4"/></svg>
            </div>
            <h3 style="font-size:1.2rem; font-weight:700; color:#0f223d; margin-bottom:10px;">Full-Size SUVs & MPVs</h3>
            <p style="font-size:0.92rem; line-height:1.65; color:#64748b; margin:0;">
              Robust anchoring for Toyota Fortuner, Innova Hycross/Crysta, Mahindra XUV700, and Tata Safari. Positioned on heavy-load reinforced trailer decks with industrial 4-point chassis ratchet straps.
            </p>
          </div>

          <div style="background:#ffffff; border-radius:12px; padding:26px 22px; border:1px solid #e2e8f0; box-shadow:0 4px 12px rgba(0,0,0,0.03);">
            <div style="background:#faf5ff; color:#9333ea; width:48px; height:48px; border-radius:10px; display:flex; align-items:center; justify-content:center; margin-bottom:16px;">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            </div>
            <h3 style="font-size:1.2rem; font-weight:700; color:#0f223d; margin-bottom:10px;">Luxury & German Marque Cars</h3>
            <p style="font-size:0.92rem; line-height:1.65; color:#64748b; margin:0;">
              VIP white-glove enclosed transport for Mercedes-Benz, BMW, Audi, Volvo, Jaguar, and Land Rover. Dedicated single-car closed container trucks with air suspension protect sensitive electronic air dampers.
            </p>
          </div>

          <div style="background:#ffffff; border-radius:12px; padding:26px 22px; border:1px solid #e2e8f0; box-shadow:0 4px 12px rgba(0,0,0,0.03);">
            <div style="background:#ecfdf5; color:#059669; width:48px; height:48px; border-radius:10px; display:flex; align-items:center; justify-content:center; margin-bottom:16px;">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            </div>
            <h3 style="font-size:1.2rem; font-weight:700; color:#0f223d; margin-bottom:10px;">Electric Vehicles (EVs)</h3>
            <p style="font-size:0.92rem; line-height:1.65; color:#64748b; margin:0;">
              Certified procedures for Tata Nexon EV, Punch EV, MG ZS EV, and BYD Atto 3. Transported in 'Neutral / Tow Mode' with battery health monitors and strict non-conductive rim fastening.
            </p>
          </div>

        </div>
      </section>

      <!-- Section 3: Specialized Enclosed Car Carriers & Fleet Engineering -->
      <section style="margin-bottom:60px;">
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:36px; align-items:center;">
          <div>
            <div style="position:relative; border-radius:16px; overflow:hidden; box-shadow:0 12px 35px rgba(15,34,61,0.15); border:1px solid #e2e8f0;">
              <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Dedicated Enclosed Vehicle Shifting Container Carrier Ranchi" style="width:100%; height:260px; max-height:300px; display:block; object-fit:cover;">
              <div style="position:absolute; bottom:0; left:0; right:0; background:linear-gradient(to top, rgba(15,34,61,0.92) 0%, rgba(15,34,61,0) 100%); padding:24px 20px 16px; color:#ffffff;">
                <div style="font-size:1.1rem; font-weight:700; margin-bottom:4px;">Heavy-Duty Enclosed Automotive Carriers</div>
                <div style="font-size:0.88rem; color:#cbd5e1;">Sealed metal trailers keeping road dust, gravel, and extreme weather off your car</div>
              </div>
            </div>
          </div>
          <div>
            <span style="background:#fff2eb; color:#ff6a28; padding:5px 14px; border-radius:9999px; font-weight:700; font-size:0.82rem; text-transform:uppercase; display:inline-block; margin-bottom:14px;">
              Fleet Engineering Standards
            </span>
            <h2 style="font-size:clamp(1.8rem, 3vw, 2.3rem); font-weight:800; color:#0f223d; margin-bottom:18px; line-height:1.25;">
              Enclosed Metal Containers vs. High-Risk Open Car Trailers
            </h2>
            <p style="font-size:1.02rem; line-height:1.75; color:#334155; margin-bottom:16px;">
              Many low-cost transport brokers in eastern India utilize open, open-air skeletal trailers where cars travel exposed to highway conditions. At highway speeds of 80 to 90 km/h, commercial trucks ahead kick up pebbles, metal fragments, and asphalt grit that mercilessly bombard exposed cars, leaving micro-dents on hoods, chipping front windshield glass, and stripping clear-coat paint.
            </p>
            <p style="font-size:1.02rem; line-height:1.75; color:#475569; margin-bottom:16px;">
              Shree Ashirwad Packers and Movers operates a fleet of purpose-built, <strong>100% enclosed automotive container carriers</strong>. Our trailers feature heavy corrugated steel wall structures, leak-proof rubber door gaskets, and internal pneumatic shock dampening:
            </p>
            <ul style="list-style:none; padding:0; margin:0 0 20px; display:flex; flex-direction:column; gap:10px; font-size:0.95rem; color:#334155;">
              <li style="display:flex; align-items:flex-start; gap:10px;">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="#ff6a28" style="flex-shrink:0; margin-top:3px;"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                <span><strong>Airtight Physical Shield:</strong> Total insulation against road dust, diesel soot, bird droppings, acid rain, and direct UV solar baking.</span>
              </li>
              <li style="display:flex; align-items:flex-start; gap:10px;">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="#ff6a28" style="flex-shrink:0; margin-top:3px;"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                <span><strong>Hydraulic Dual-Deck Lifts:</strong> Upper decks operate with synchronized hydraulic arms, gently raising sedans without jerks or tilt strain.</span>
              </li>
              <li style="display:flex; align-items:flex-start; gap:10px;">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="#ff6a28" style="flex-shrink:0; margin-top:3px;"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                <span><strong>4-Wheel Rim Harness Immobilization:</strong> Heavy-duty polyester straps hug the tire tread directly, eliminating suspension wear or metal-on-metal frame contact.</span>
              </li>
              <li style="display:flex; align-items:flex-start; gap:10px;">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="#ff6a28" style="flex-shrink:0; margin-top:3px;"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                <span><strong>Integrated Satellite GPS Telemetry:</strong> Continuous tracking monitors speed, highway checkpoint passages, and thermal conditions inside the container.</span>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!-- Section 4: 360-Degree Pre-Transit Inspection Audit -->
      <section style="margin-bottom:60px;">
        <div style="background:#0f223d; border-radius:16px; padding:45px 35px; color:#ffffff;">
          <div style="text-align:center; max-width:850px; margin:0 auto 36px;">
            <span style="background:rgba(255,106,40,0.2); color:#ff6a28; border:1px solid #ff6a28; padding:5px 14px; border-radius:9999px; font-weight:700; font-size:0.82rem; text-transform:uppercase; display:inline-block; margin-bottom:12px;">
              Complete Transparency
            </span>
            <h2 style="font-size:clamp(1.8rem, 3vw, 2.3rem); font-weight:800; color:#ffffff; margin-bottom:16px;">
              Our 360-Degree Digital Vehicle Inspection Protocol
            </h2>
            <p style="font-size:1.02rem; line-height:1.75; color:#cbd5e1;">
              Trust begins with unambiguous baseline documentation. Before our crew drives your automobile onto our carrier ramp in Ranchi, we perform an exhaustive joint physical and photographic condition audit:
            </p>
          </div>

          <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(260px, 1fr)); gap:24px;">
            
            <div style="background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.12); border-radius:12px; padding:22px;">
              <div style="font-size:1.8rem; margin-bottom:10px;">📸</div>
              <h3 style="font-size:1.15rem; font-weight:700; color:#ffffff; margin-bottom:8px;">High-Res Exterior Photography</h3>
              <p style="font-size:0.92rem; line-height:1.65; color:#cbd5e1; margin:0;">
                We capture detailed, timestamped photographs of all four corners, front bumper, rear diffuser, rocker panels, glass windshields, side mirrors, and roof to record pre-existing cosmetic condition.
              </p>
            </div>

            <div style="background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.12); border-radius:12px; padding:22px;">
              <div style="font-size:1.8rem; margin-bottom:10px;">📊</div>
              <h3 style="font-size:1.15rem; font-weight:700; color:#ffffff; margin-bottom:8px;">Odometer & Fuel Calibration</h3>
              <p style="font-size:0.92rem; line-height:1.65; color:#cbd5e1; margin:0;">
                The exact odometer reading and fuel level gauge are noted on your official consignment sheet. You have total verification that your car is transported purely on carrier wheels with zero joyriding.
              </p>
            </div>

            <div style="background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.12); border-radius:12px; padding:22px;">
              <div style="font-size:1.8rem; margin-bottom:10px;">🛞</div>
              <h3 style="font-size:1.15rem; font-weight:700; color:#ffffff; margin-bottom:8px;">Tire & Wheel Rim Assessment</h3>
              <p style="font-size:0.92rem; line-height:1.65; color:#cbd5e1; margin:0;">
                Tire tread depth, sidewall condition, and alloy wheel rim lips are checked for curb rash. Tire pressures are adjusted to standard PSI so the car sits squarely on carrier chocks.
              </p>
            </div>

            <div style="background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.12); border-radius:12px; padding:22px;">
              <div style="font-size:1.8rem; margin-bottom:10px;">✍️</div>
              <h3 style="font-size:1.15rem; font-weight:700; color:#ffffff; margin-bottom:8px;">Signed Joint Vehicle Report</h3>
              <p style="font-size:0.92rem; line-height:1.65; color:#cbd5e1; margin:0;">
                Both you and our Ranchi vehicle surveyor sign the standardized Vehicle Condition Sheet. You receive a digital copy instantly via WhatsApp and a physical carbon copy with your consignment note.
              </p>
            </div>

          </div>
        </div>
      </section>

      <!-- Section 5: Preparation Guide for Car Owners in Ranchi -->
      <section style="margin-bottom:60px;">
        <div style="text-align:center; max-width:850px; margin:0 auto 36px;">
          <span style="background:#fff2eb; color:#ff6a28; padding:5px 14px; border-radius:9999px; font-weight:700; font-size:0.82rem; text-transform:uppercase; display:inline-block; margin-bottom:12px;">
            Owner's Handbook
          </span>
          <h2 style="font-size:clamp(1.8rem, 3vw, 2.3rem); font-weight:800; color:#0f223d; margin-bottom:16px;">
            How to Prepare Your Car for Transport in Ranchi
          </h2>
          <p style="font-size:1.02rem; line-height:1.75; color:#475569;">
            Taking a few simple preparatory measures before our car carrier arrives ensures rapid loading, regulatory compliance, and a completely stress-free moving experience:
          </p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:24px;">
          
          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; padding:24px; box-shadow:0 3px 10px rgba(0,0,0,0.02);">
            <div style="display:flex; align-items:center; gap:12px; margin-bottom:12px;">
              <span style="background:#ff6a28; color:#ffffff; width:30px; height:30px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; font-size:0.85rem;">1</span>
              <h3 style="font-size:1.12rem; font-weight:700; color:#0f223d; margin:0;">Maintain 1/4th Tank of Fuel</h3>
            </div>
            <p style="font-size:0.92rem; line-height:1.65; color:#64748b; margin:0;">
              Leave around 10 to 15 liters of petrol or diesel in the tank. This is ample fuel for carrier loading, depot maneuvering, and driving to a fuel station at the destination, while minimizing combustible load weight.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; padding:24px; box-shadow:0 3px 10px rgba(0,0,0,0.02);">
            <div style="display:flex; align-items:center; gap:12px; margin-bottom:12px;">
              <span style="background:#ff6a28; color:#ffffff; width:30px; height:30px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; font-size:0.85rem;">2</span>
              <h3 style="font-size:1.12rem; font-weight:700; color:#0f223d; margin:0;">Remove High-Value Belongings</h3>
            </div>
            <p style="font-size:0.92rem; line-height:1.65; color:#64748b; margin:0;">
              Clear the cabin of toll FASTag tags with excessive auto-recharge balances (or deactivate temporarily), cash, jewelry, expensive sunglasses, dashcams, and loose audio devices.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; padding:24px; box-shadow:0 3px 10px rgba(0,0,0,0.02);">
            <div style="display:flex; align-items:center; gap:12px; margin-bottom:12px;">
              <span style="background:#ff6a28; color:#ffffff; width:30px; height:30px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; font-size:0.85rem;">3</span>
              <h3 style="font-size:1.12rem; font-weight:700; color:#0f223d; margin:0;">Exterior Car Wash</h3>
            </div>
            <p style="font-size:0.92rem; line-height:1.65; color:#64748b; margin:0;">
              A clean car makes our joint pre-loading inspection effortless and crystal clear. Dust and dried mud often conceal minor scratches or stone chips that should be documented accurately beforehand.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; padding:24px; box-shadow:0 3px 10px rgba(0,0,0,0.02);">
            <div style="display:flex; align-items:center; gap:12px; margin-bottom:12px;">
              <span style="background:#ff6a28; color:#ffffff; width:30px; height:30px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; font-size:0.85rem;">4</span>
              <h3 style="font-size:1.12rem; font-weight:700; color:#0f223d; margin:0;">Check Antennas & Spoilers</h3>
            </div>
            <p style="font-size:0.92rem; line-height:1.65; color:#64748b; margin:0;">
              Unscrew long roof whip antennas or retract power antennas. Fold both side rearview mirrors in tightly against the door frames to maximize passage width on the carrier deck.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; padding:24px; box-shadow:0 3px 10px rgba(0,0,0,0.02);">
            <div style="display:flex; align-items:center; gap:12px; margin-bottom:12px;">
              <span style="background:#ff6a28; color:#ffffff; width:30px; height:30px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; font-size:0.85rem;">5</span>
              <h3 style="font-size:1.12rem; font-weight:700; color:#0f223d; margin:0;">Disable Alarms & Immobilizers</h3>
            </div>
            <p style="font-size:0.92rem; line-height:1.65; color:#64748b; margin:0;">
              Turn off after-market anti-theft motion sensors or provide instructions to our crew. Road vibrations can trigger sensitive motion alarms repeatedly during highway travel, draining the 12V battery.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; padding:24px; box-shadow:0 3px 10px rgba(0,0,0,0.02);">
            <div style="display:flex; align-items:center; gap:12px; margin-bottom:12px;">
              <span style="background:#ff6a28; color:#ffffff; width:30px; height:30px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; font-size:0.85rem;">6</span>
              <h3 style="font-size:1.12rem; font-weight:700; color:#0f223d; margin:0;">Verify Document Copies</h3>
            </div>
            <p style="font-size:0.92rem; line-height:1.65; color:#64748b; margin:0;">
              Hand over photocopies of your Registration Certificate (RC), valid insurance certificate, current PUC certificate, and owner ID. Always retain the original documents in your personal handbag.
            </p>
          </div>

        </div>
      </section>

      <!-- Section 6: Major Interstate Routes & Transit Timelines from Ranchi -->
      <section style="margin-bottom:60px; background:#ffffff; border:1px solid #e2e8f0; border-radius:16px; padding:45px 35px; box-shadow:0 4px 20px rgba(0,0,0,0.04);">
        <div style="text-align:center; max-width:850px; margin:0 auto 36px;">
          <span style="background:#f0fdf4; color:#16a34a; padding:5px 14px; border-radius:9999px; font-weight:700; font-size:0.82rem; text-transform:uppercase; display:inline-block; margin-bottom:12px;">
            Pan-India Car Shipping Corridors
          </span>
          <h2 style="font-size:clamp(1.8rem, 3vw, 2.3rem); font-weight:800; color:#0f223d; margin-bottom:16px;">
            Car Relocation Routes & Highway Transit Timelines from Ranchi
          </h2>
          <p style="font-size:1.02rem; line-height:1.75; color:#475569;">
            Shree Ashirwad Packers and Movers operates scheduled car carrier departures connecting Ranchi directly to every major industrial, commercial, and tech hub across India:
          </p>
        </div>

        <div style="overflow-x:auto;">
          <table style="width:100%; border-collapse:collapse; text-align:left; font-size:0.96rem;">
            <thead>
              <tr style="background:#0f223d; color:#ffffff;">
                <th style="padding:16px 18px; border-top-left-radius:8px;">Highway Destination</th>
                <th style="padding:16px 18px;">Approx. Distance</th>
                <th style="padding:16px 18px;">Transit Duration</th>
                <th style="padding:16px 18px;">Departure Frequency</th>
                <th style="padding:16px 18px; border-top-right-radius:8px;">Delivery Mode</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom:1px solid #e2e8f0;">
                <td style="padding:14px 18px; font-weight:700; color:#0f223d;">Ranchi to Bangalore (Bengaluru)</td>
                <td style="padding:14px 18px; color:#475569;">~1,850 km</td>
                <td style="padding:14px 18px; color:#16a34a; font-weight:600;">6 to 8 Days</td>
                <td style="padding:14px 18px; color:#475569;">3 Dispatches / Week</td>
                <td style="padding:14px 18px; color:#475569;">Enclosed Carrier + Door Delivery</td>
              </tr>
              <tr style="background:#f8fafc; border-bottom:1px solid #e2e8f0;">
                <td style="padding:14px 18px; font-weight:700; color:#0f223d;">Ranchi to Delhi NCR (Gurgaon/Noida)</td>
                <td style="padding:14px 18px; color:#475569;">~1,250 km</td>
                <td style="padding:14px 18px; color:#16a34a; font-weight:600;">3 to 5 Days</td>
                <td style="padding:14px 18px; color:#475569;">Daily Scheduled Fleet</td>
                <td style="padding:14px 18px; color:#475569;">Direct NH-19 Transit + Door Delivery</td>
              </tr>
              <tr style="border-bottom:1px solid #e2e8f0;">
                <td style="padding:14px 18px; font-weight:700; color:#0f223d;">Ranchi to Pune & Mumbai</td>
                <td style="padding:14px 18px; color:#475569;">~1,650 - 1,750 km</td>
                <td style="padding:14px 18px; color:#16a34a; font-weight:600;">6 to 8 Days</td>
                <td style="padding:14px 18px; color:#475569;">3 Dispatches / Week</td>
                <td style="padding:14px 18px; color:#475569;">Dedicated Highway Fleet + Door Delivery</td>
              </tr>
              <tr style="background:#f8fafc; border-bottom:1px solid #e2e8f0;">
                <td style="padding:14px 18px; font-weight:700; color:#0f223d;">Ranchi to Kolkata (West Bengal)</td>
                <td style="padding:14px 18px; color:#475569;">~410 km</td>
                <td style="padding:14px 18px; color:#16a34a; font-weight:600;">24 to 48 Hours</td>
                <td style="padding:14px 18px; color:#475569;">Daily Express Transit</td>
                <td style="padding:14px 18px; color:#475569;">Next-Day Doorstep Handover</td>
              </tr>
              <tr style="border-bottom:1px solid #e2e8f0;">
                <td style="padding:14px 18px; font-weight:700; color:#0f223d;">Ranchi to Hyderabad (Telangana)</td>
                <td style="padding:14px 18px; color:#475569;">~1,350 km</td>
                <td style="padding:14px 18px; color:#16a34a; font-weight:600;">5 to 7 Days</td>
                <td style="padding:14px 18px; color:#475569;">3 Dispatches / Week</td>
                <td style="padding:14px 18px; color:#475569;">Full GPS Milestone Alerts</td>
              </tr>
              <tr style="background:#f8fafc; border-bottom:1px solid #e2e8f0;">
                <td style="padding:14px 18px; font-weight:700; color:#0f223d;">Ranchi to Patna (Bihar)</td>
                <td style="padding:14px 18px; color:#475569;">~320 km</td>
                <td style="padding:14px 18px; color:#16a34a; font-weight:600;">24 to 36 Hours</td>
                <td style="padding:14px 18px; color:#475569;">Daily Express Transit</td>
                <td style="padding:14px 18px; color:#475569;">Direct NH-20 Feeder Service</td>
              </tr>
              <tr style="border-bottom:1px solid #e2e8f0;">
                <td style="padding:14px 18px; font-weight:700; color:#0f223d;">Ranchi to Chennai & Coimbatore</td>
                <td style="padding:14px 18px; color:#475569;">~1,650 - 1,850 km</td>
                <td style="padding:14px 18px; color:#16a34a; font-weight:600;">7 to 9 Days</td>
                <td style="padding:14px 18px; color:#475569;">2 Dispatches / Week</td>
                <td style="padding:14px 18px; color:#475569;">Southern Dedicated Corridor</td>
              </tr>
              <tr style="background:#f8fafc;">
                <td style="padding:14px 18px; font-weight:700; color:#0f223d;">Ranchi to Ahmedabad & Gujarat</td>
                <td style="padding:14px 18px; color:#475569;">~1,600 km</td>
                <td style="padding:14px 18px; color:#16a34a; font-weight:600;">6 to 8 Days</td>
                <td style="padding:14px 18px; color:#475569;">2 Dispatches / Week</td>
                <td style="padding:14px 18px; color:#475569;">Western Freight Link</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <!-- Section 7: Transparent Car Transportation Pricing & Rate Chart -->
      <section id="rates-section" style="margin-bottom:60px;">
        <div style="text-align:center; max-width:850px; margin:0 auto 36px;">
          <span style="background:#fff2eb; color:#ff6a28; padding:5px 14px; border-radius:9999px; font-weight:700; font-size:0.82rem; text-transform:uppercase; display:inline-block; margin-bottom:12px;">
            Clear & Honest Pricing
          </span>
          <h2 style="font-size:clamp(1.8rem, 3vw, 2.3rem); font-weight:800; color:#0f223d; margin-bottom:16px;">
            Car Transport Charges in Ranchi - Estimated Rate Matrix
          </h2>
          <p style="font-size:1.02rem; line-height:1.75; color:#475569;">
            We maintain total price transparency. The total cost of car transport in Ranchi is determined by your vehicle model category, overall transit distance, carrier choice (multi-car trailer vs. dedicated single-car carrier), and declared vehicle insurance value:
          </p>
        </div>

        <div style="overflow-x:auto; margin-bottom:28px;">
          <table style="width:100%; border-collapse:collapse; text-align:left; font-size:0.96rem; border:1px solid #e2e8f0; border-radius:10px; overflow:hidden;">
            <thead>
              <tr style="background:#0f223d; color:#ffffff;">
                <th style="padding:16px 18px;">Car Segment / Category</th>
                <th style="padding:16px 18px;">Regional (&lt; 500 km)</th>
                <th style="padding:16px 18px;">Mid-Distance (500 - 1,000 km)</th>
                <th style="padding:16px 18px;">Long-Haul Metro (1,000 - 1,600 km)</th>
                <th style="padding:16px 18px;">Pan-India (&gt; 1,600 km)</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom:1px solid #e2e8f0;">
                <td style="padding:15px 18px; font-weight:700; color:#0f223d;">
                  Hatchback & Compacts<br>
                  <span style="font-size:0.82rem; color:#64748b; font-weight:400;">Swift, i10, WagonR, Tiago, Baleno, Altroz</span>
                </td>
                <td style="padding:15px 18px; color:#16a34a; font-weight:700;">₹7,500 - ₹11,000</td>
                <td style="padding:15px 18px; color:#16a34a; font-weight:700;">₹11,500 - ₹15,500</td>
                <td style="padding:15px 18px; color:#16a34a; font-weight:700;">₹15,000 - ₹19,500</td>
                <td style="padding:15px 18px; color:#16a34a; font-weight:700;">₹18,500 - ₹23,000</td>
              </tr>
              <tr style="background:#f8fafc; border-bottom:1px solid #e2e8f0;">
                <td style="padding:15px 18px; font-weight:700; color:#0f223d;">
                  Sedans & Mid-Saloons<br>
                  <span style="font-size:0.82rem; color:#64748b; font-weight:400;">City, Verna, Dzire, Ciaz, Slavia, Virtus</span>
                </td>
                <td style="padding:15px 18px; color:#16a34a; font-weight:700;">₹8,500 - ₹12,500</td>
                <td style="padding:15px 18px; color:#16a34a; font-weight:700;">₹13,000 - ₹17,500</td>
                <td style="padding:15px 18px; color:#16a34a; font-weight:700;">₹16,500 - ₹21,500</td>
                <td style="padding:15px 18px; color:#16a34a; font-weight:700;">₹20,000 - ₹25,500</td>
              </tr>
              <tr style="border-bottom:1px solid #e2e8f0;">
                <td style="padding:15px 18px; font-weight:700; color:#0f223d;">
                  Compact & Mid SUVs<br>
                  <span style="font-size:0.82rem; color:#64748b; font-weight:400;">Creta, Seltos, Nexon, Brezza, Thar, Grand Vitara</span>
                </td>
                <td style="padding:15px 18px; color:#16a34a; font-weight:700;">₹9,500 - ₹14,000</td>
                <td style="padding:15px 18px; color:#16a34a; font-weight:700;">₹14,500 - ₹19,000</td>
                <td style="padding:15px 18px; color:#16a34a; font-weight:700;">₹18,000 - ₹23,500</td>
                <td style="padding:15px 18px; color:#16a34a; font-weight:700;">₹22,000 - ₹27,500</td>
              </tr>
              <tr style="background:#f8fafc; border-bottom:1px solid #e2e8f0;">
                <td style="padding:15px 18px; font-weight:700; color:#0f223d;">
                  Full-Size SUVs & MPVs<br>
                  <span style="font-size:0.82rem; color:#64748b; font-weight:400;">Fortuner, Innova Hycross, XUV700, Safari, Scorpio-N</span>
                </td>
                <td style="padding:15px 18px; color:#16a34a; font-weight:700;">₹11,000 - ₹16,000</td>
                <td style="padding:15px 18px; color:#16a34a; font-weight:700;">₹16,500 - ₹22,000</td>
                <td style="padding:15px 18px; color:#16a34a; font-weight:700;">₹21,000 - ₹27,000</td>
                <td style="padding:15px 18px; color:#16a34a; font-weight:700;">₹25,000 - ₹32,000</td>
              </tr>
              <tr style="border-bottom:1px solid #e2e8f0;">
                <td style="padding:15px 18px; font-weight:700; color:#0f223d;">
                  Electric Vehicles (EV Cars)<br>
                  <span style="font-size:0.82rem; color:#64748b; font-weight:400;">Nexon EV, ZS EV, XUV400, Ioniq 5 (Includes EV Protocols)</span>
                </td>
                <td style="padding:15px 18px; color:#16a34a; font-weight:700;">₹10,500 - ₹15,000</td>
                <td style="padding:15px 18px; color:#16a34a; font-weight:700;">₹15,000 - ₹20,500</td>
                <td style="padding:15px 18px; color:#16a34a; font-weight:700;">₹19,500 - ₹25,000</td>
                <td style="padding:15px 18px; color:#16a34a; font-weight:700;">₹23,500 - ₹29,500</td>
              </tr>
              <tr style="background:#f8fafc;">
                <td style="padding:15px 18px; font-weight:700; color:#0f223d;">
                  Luxury & German Marques<br>
                  <span style="font-size:0.82rem; color:#64748b; font-weight:400;">Mercedes-Benz, BMW, Audi, Land Rover (Enclosed VIP Hauler)</span>
                </td>
                <td style="padding:15px 18px; color:#16a34a; font-weight:700;">₹16,000 - ₹22,000</td>
                <td style="padding:15px 18px; color:#16a34a; font-weight:700;">₹22,000 - ₹30,000</td>
                <td style="padding:15px 18px; color:#16a34a; font-weight:700;">₹29,000 - ₹38,000</td>
                <td style="padding:15px 18px; color:#16a34a; font-weight:700;">₹36,000 - ₹48,000</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:20px;">
          <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; padding:18px;">
            <div style="font-weight:700; color:#0f223d; margin-bottom:6px; display:flex; align-items:center; gap:8px;">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="#16a34a"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              What is Included in Your Quote:
            </div>
            <p style="font-size:0.88rem; color:#64748b; line-height:1.6; margin:0;">
              Doorstep vehicle collection in Ranchi, 360-degree digital inspection, hydraulic ramp loading, enclosed container highway freight, toll barrier charges, terminal unloading, and door delivery at destination.
            </p>
          </div>

          <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; padding:18px;">
            <div style="font-weight:700; color:#0f223d; margin-bottom:6px; display:flex; align-items:center; gap:8px;">
              <svg viewBox="0 0 24 24" width="18" height="18" fill="#2563eb"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
              Transparent Insurance Charges:
            </div>
            <p style="font-size:0.88rem; color:#64748b; line-height:1.6; margin:0;">
              Comprehensive transit insurance is calculated at approximately 1.5% to 2.5% of the vehicle's declared IDV (Insured Declared Value) on your policy, covering complete loss, fire, and collision damages.
            </p>
          </div>
        </div>
      </section>

      <!-- Section 8: IBA Approved Invoices for PSU / Corporate Relocation Claims -->
      <section style="margin-bottom:60px;">
        <div style="background:linear-gradient(135deg, #102a45 0%, #1a3a5f 100%); border-radius:16px; padding:45px 35px; color:#ffffff;">
          <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(300px, 1fr)); gap:36px; align-items:center;">
            <div>
              <span style="background:rgba(255,255,255,0.15); color:#ffffff; padding:4px 14px; border-radius:9999px; font-weight:700; font-size:0.82rem; text-transform:uppercase; display:inline-block; margin-bottom:14px;">
                Audit Compliant Documentation
              </span>
              <h2 style="font-size:clamp(1.75rem, 2.8vw, 2.2rem); font-weight:800; color:#ffffff; margin-bottom:18px; line-height:1.25;">
                IBA Approved Bills for 100% Car Transport Reimbursement
              </h2>
              <p style="font-size:1.02rem; line-height:1.75; color:#cbd5e1; margin-bottom:16px;">
                Employees transferred from central government departments, armed forces (Army, Air Force, Navy), defense establishments, public sector undertakings (SAIL Bokaro, CCL Ranchi, CMPDI, MECON, HEC), and nationalized banks across Jharkhand require legitimate, IBA-certified billing to successfully claim their automotive transfer allowance.
              </p>
              <p style="font-size:1rem; line-height:1.7; color:#cbd5e1; margin-bottom:20px;">
                Shree Ashirwad Packers and Movers delivers a complete audit-ready documentary docket with every automobile consignment:
              </p>
              <ul style="list-style:none; padding:0; margin:0 0 24px; display:flex; flex-direction:column; gap:10px; font-size:0.95rem; color:#e2e8f0;">
                <li style="display:flex; align-items:center; gap:10px;">
                  <svg viewBox="0 0 24 24" width="18" height="18" fill="#ff6a28"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                  <span><strong>Official IBA Consignment Note (LR/Bilty):</strong> Stamped with our IBA approval code, chassis number, and destination address.</span>
                </li>
                <li style="display:flex; align-items:center; gap:10px;">
                  <svg viewBox="0 0 24 24" width="18" height="18" fill="#ff6a28"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                  <span><strong>Itemized GST Tax Invoice:</strong> Valid GSTIN billing compliant with internal corporate and government finance rules.</span>
                </li>
                <li style="display:flex; align-items:center; gap:10px;">
                  <svg viewBox="0 0 24 24" width="18" height="18" fill="#ff6a28"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                  <span><strong>Vehicle Condition Inspection Sheet:</strong> Signed pre-loading cosmetic condition checklist for total claim clearance.</span>
                </li>
                <li style="display:flex; align-items:center; gap:10px;">
                  <svg viewBox="0 0 24 24" width="18" height="18" fill="#ff6a28"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                  <span><strong>Transit Insurance Certificate:</strong> Authentic marine cargo insurance policy copy protecting against transit perils.</span>
                </li>
              </ul>
              <a href="tel:<?php echo SECONDARY_PHONE_RAW; ?>" style="background:#ff6a28; color:#ffffff; padding:12px 26px; border-radius:8px; font-weight:700; text-decoration:none; font-size:0.95rem; display:inline-flex; align-items:center; gap:8px;">
                Request Corporate Car Quote &rarr;
              </a>
            </div>

            <div style="background:rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.15); border-radius:14px; padding:30px;">
              <h3 style="font-size:1.3rem; font-weight:700; color:#ffffff; margin-bottom:16px;">Corporate & Banking Clients Relying on Our Services</h3>
              <p style="font-size:0.92rem; line-height:1.7; color:#cbd5e1; margin-bottom:20px;">
                Our authentic IBA documentation has enabled 100% hassle-free reimbursement approvals for executives relocated from:
              </p>
              <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px; font-size:0.9rem; color:#f1f5f9; font-weight:600;">
                <div style="background:rgba(255,255,255,0.08); padding:10px; border-radius:6px;">• Central Coalfields (CCL)</div>
                <div style="background:rgba(255,255,255,0.08); padding:10px; border-radius:6px;">• MECON Ranchi</div>
                <div style="background:rgba(255,255,255,0.08); padding:10px; border-radius:6px;">• CMPDI Kanke Road</div>
                <div style="background:rgba(255,255,255,0.08); padding:10px; border-radius:6px;">• Heavy Engineering Corp</div>
                <div style="background:rgba(255,255,255,0.08); padding:10px; border-radius:6px;">• State Bank of India (SBI)</div>
                <div style="background:rgba(255,255,255,0.08); padding:10px; border-radius:6px;">• Punjab National Bank</div>
                <div style="background:rgba(255,255,255,0.08); padding:10px; border-radius:6px;">• Defense & Armed Units</div>
                <div style="background:rgba(255,255,255,0.08); padding:10px; border-radius:6px;">• Indian Railways SE Zone</div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section 9: Local Doorstep Car Pickup & Delivery Across Ranchi -->
      <section style="margin-bottom:60px; background:#f8fafc; border-radius:16px; padding:45px 35px; border:1px solid #e2e8f0;">
        <div style="text-align:center; max-width:850px; margin:0 auto 36px;">
          <span style="background:#e0f2fe; color:#0369a1; padding:4px 14px; border-radius:9999px; font-weight:700; font-size:0.82rem; text-transform:uppercase; display:inline-block; margin-bottom:12px;">
            Full City Logistics
          </span>
          <h2 style="font-size:clamp(1.8rem, 3vw, 2.3rem); font-weight:800; color:#0f223d; margin-bottom:16px;">
            Doorstep Car Collection Across All Ranchi Localities
          </h2>
          <p style="font-size:1.02rem; line-height:1.75; color:#475569;">
            You never have to drive through congested suburban truck terminals. Our certified pickup drivers and hydraulic loading vehicles collect your automobile straight from your residence, apartment complex, or office across Ranchi:
          </p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(240px, 1fr)); gap:20px;">
          
          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:20px;">
            <h3 style="font-size:1.05rem; font-weight:700; color:#0f223d; margin-bottom:8px; display:flex; align-items:center; gap:8px;">
              <span style="color:#ff6a28;">🚗</span> Harmu, Argora & Kadru
            </h3>
            <p style="font-size:0.88rem; line-height:1.65; color:#64748b; margin:0;">
              Harmu Housing Colony, Vidyanagar Road, Bypass Road, Argora Chowk, Kadru, Ashok Nagar, and Birsa Munda Rajpath residential enclaves.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:20px;">
            <h3 style="font-size:1.05rem; font-weight:700; color:#0f223d; margin-bottom:8px; display:flex; align-items:center; gap:8px;">
              <span style="color:#ff6a28;">🚗</span> Morabadi & Kanke Road
            </h3>
            <p style="font-size:0.88rem; line-height:1.65; color:#64748b; margin:0;">
              Morabadi Ground, Kanke Road, Cheshire Home Road, Gandhi Nagar, Bariatu, Chiraundi, Bariyatu Housing Colony, and Booty More.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:20px;">
            <h3 style="font-size:1.05rem; font-weight:700; color:#0f223d; margin-bottom:8px; display:flex; align-items:center; gap:8px;">
              <span style="color:#ff6a28;">🚗</span> Doranda, Hinoo & Dhurwa
            </h3>
            <p style="font-size:0.88rem; line-height:1.65; color:#64748b; margin:0;">
              Doranda Bazar, Hinoo, Birsa Chowk, Airport Road, Hatia Railway Colony, Dhurwa Sector 1 to 4, Tupudana, and Singh More.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:20px;">
            <h3 style="font-size:1.05rem; font-weight:700; color:#0f223d; margin-bottom:8px; display:flex; align-items:center; gap:8px;">
              <span style="color:#ff6a28;">🚗</span> Lalpur & Ratu Road
            </h3>
            <p style="font-size:0.88rem; line-height:1.65; color:#64748b; margin:0;">
              Circular Road, Lalpur, Kantatoli, Old Hazaribagh Road, Ratu Road, Pandra, Hehal, Kathal More, Sukhdeo Nagar, and Namkum.
            </p>
          </div>

        </div>
      </section>

      <!-- Section 10: Comparison Table: Enclosed Carrier vs Open Carrier vs Drive-Away -->
      <section style="margin-bottom:60px;">
        <div style="text-align:center; max-width:850px; margin:0 auto 36px;">
          <span style="background:#fff2eb; color:#ff6a28; padding:5px 14px; border-radius:9999px; font-weight:700; font-size:0.82rem; text-transform:uppercase; display:inline-block; margin-bottom:12px;">
            Critical Comparison
          </span>
          <h2 style="font-size:clamp(1.8rem, 3vw, 2.3rem); font-weight:800; color:#0f223d; margin-bottom:16px;">
            Enclosed Car Carrier vs. Open Trailer vs. Drive-Away Service
          </h2>
          <p style="font-size:1.02rem; line-height:1.75; color:#475569;">
            Comparing your car relocation options clearly reveals why choosing our dedicated enclosed hydraulic carriers delivers superior peace of mind, vehicle preservation, and genuine value:
          </p>
        </div>

        <div style="overflow-x:auto;">
          <table style="width:100%; border-collapse:collapse; text-align:left; font-size:0.94rem; border:1px solid #e2e8f0; border-radius:12px; overflow:hidden;">
            <thead>
              <tr style="background:#0f223d; color:#ffffff;">
                <th style="padding:16px 18px;">Automobile Relocation Factor</th>
                <th style="padding:16px 18px; background:#ff6a28;">Shree Ashirwad Enclosed Carrier</th>
                <th style="padding:16px 18px;">Open Multi-Car Trailer</th>
                <th style="padding:16px 18px;">Commercial Drive-Away Driver</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom:1px solid #e2e8f0;">
                <td style="padding:14px 18px; font-weight:700; color:#0f223d;">Odometer Mileage Increase</td>
                <td style="padding:14px 18px; color:#16a34a; font-weight:700;">✅ Zero (Only Loading Ramp Runs)</td>
                <td style="padding:14px 18px; color:#16a34a; font-weight:700;">✅ Zero Mileage on Trailer</td>
                <td style="padding:14px 18px; color:#dc2626;">❌ 1,000 to 2,000+ km Driven</td>
              </tr>
              <tr style="background:#f8fafc; border-bottom:1px solid #e2e8f0;">
                <td style="padding:14px 18px; font-weight:700; color:#0f223d;">Gravel Chip & Paint Protection</td>
                <td style="padding:14px 18px; color:#16a34a; font-weight:700;">✅ 100% Sealed Steel Container</td>
                <td style="padding:14px 18px; color:#dc2626;">❌ High Exposure to Flying Gravel</td>
                <td style="padding:14px 18px; color:#dc2626;">❌ Road Grit, Tar & Bugs Impact</td>
              </tr>
              <tr style="border-bottom:1px solid #e2e8f0;">
                <td style="padding:14px 18px; font-weight:700; color:#0f223d;">Weather & Dust Resistance</td>
                <td style="padding:14px 18px; color:#16a34a; font-weight:700;">✅ Completely Dustproof & Rainproof</td>
                <td style="padding:14px 18px; color:#f59e0b;">⚠️ Exposed to Sun, Rain & Soot</td>
                <td style="padding:14px 18px; color:#f59e0b;">⚠️ Exposed to All Weather</td>
              </tr>
              <tr style="background:#f8fafc; border-bottom:1px solid #e2e8f0;">
                <td style="padding:14px 18px; font-weight:700; color:#0f223d;">Low Bumper Scrape Prevention</td>
                <td style="padding:14px 18px; color:#16a34a; font-weight:700;">✅ Low-Incline Hydraulic Ramps</td>
                <td style="padding:14px 18px; color:#f59e0b;">⚠️ Steep Manual Iron Ramps</td>
                <td style="padding:14px 18px; color:#dc2626;">❌ Pothole & Speed-breaker Scrapes</td>
              </tr>
              <tr style="border-bottom:1px solid #e2e8f0;">
                <td style="padding:14px 18px; font-weight:700; color:#0f223d;">Engine & Mechanical Wear</td>
                <td style="padding:14px 18px; color:#16a34a; font-weight:700;">✅ Zero Engine / Gearbox Wear</td>
                <td style="padding:14px 18px; color:#16a34a; font-weight:700;">✅ Zero Mechanical Wear</td>
                <td style="padding:14px 18px; color:#dc2626;">❌ Heavy Clutch & Brake Strain</td>
              </tr>
              <tr style="background:#f8fafc; border-bottom:1px solid #e2e8f0;">
                <td style="padding:14px 18px; font-weight:700; color:#0f223d;">Transit Insurance Coverage</td>
                <td style="padding:14px 18px; color:#16a34a; font-weight:700;">✅ Full Marine Cargo Policy</td>
                <td style="padding:14px 18px; color:#f59e0b;">⚠️ Basic Cargo Third-Party Only</td>
                <td style="padding:14px 18px; color:#dc2626;">❌ Owner's Personal Insurance at Risk</td>
              </tr>
              <tr style="background:#ffffff;">
                <td style="padding:14px 18px; font-weight:700; color:#0f223d;">IBA Approved Invoicing</td>
                <td style="padding:14px 18px; color:#16a34a; font-weight:700;">✅ 100% Genuine IBA Bills & GST</td>
                <td style="padding:14px 18px; color:#f59e0b;">⚠️ Rare / Broker Dependent</td>
                <td style="padding:14px 18px; color:#dc2626;">❌ Unofficial Toll & Fuel Chits</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <!-- Section 11: Frequently Asked Questions (FAQ) -->
      <section style="margin-bottom:60px;">
        <div style="text-align:center; max-width:850px; margin:0 auto 36px;">
          <span style="background:#fff2eb; color:#ff6a28; padding:5px 14px; border-radius:9999px; font-weight:700; font-size:0.82rem; text-transform:uppercase; display:inline-block; margin-bottom:12px;">
            Customer Knowledge Desk
          </span>
          <h2 style="font-size:clamp(1.8rem, 3vw, 2.3rem); font-weight:800; color:#0f223d; margin-bottom:16px;">
            Frequently Asked Questions About Car Transport in Ranchi
          </h2>
          <p style="font-size:1.02rem; line-height:1.75; color:#475569;">
            Have questions regarding transit timelines, vehicle safety, documentation, or pricing? Below are comprehensive answers to the most common queries our Ranchi automobile relocation desk receives:
          </p>
        </div>

        <div style="display:flex; flex-direction:column; gap:18px;">
          
          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; padding:24px; box-shadow:0 2px 8px rgba(0,0,0,0.02);">
            <h3 style="font-size:1.18rem; font-weight:700; color:#0f223d; margin-bottom:10px;">
              What are the car transport charges in Ranchi for interstate shifting?
            </h3>
            <p style="font-size:0.96rem; line-height:1.7; color:#475569; margin:0;">
              Interstate car transport charges in Ranchi generally start from ₹7,500 to ₹14,000 for regional corridors under 500 km (like Ranchi to Kolkata or Patna), ₹13,000 to ₹21,500 for mid-distance destinations (such as Ranchi to Delhi NCR, Lucknow, or Varanasi), and ₹18,000 to ₹32,000 for long-haul metropolitan hubs like Bangalore, Mumbai, Pune, Chennai, or Hyderabad. Exact charges vary based on vehicle model, dimensions, carrier configuration (open trailer vs. enclosed carrier), and transit insurance value.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; padding:24px; box-shadow:0 2px 8px rgba(0,0,0,0.02);">
            <h3 style="font-size:1.18rem; font-weight:700; color:#0f223d; margin-bottom:10px;">
              Why should I choose an enclosed car carrier instead of an open trailer?
            </h3>
            <p style="font-size:0.96rem; line-height:1.7; color:#475569; margin:0;">
              Enclosed car carriers feature heavy steel walls and weather gaskets that completely protect your automobile against high-speed highway gravel chips, windshield cracks, bad weather, industrial soot, bird droppings, and direct sun damage. For sedans, SUVs, and luxury marques, enclosed container trailers guarantee that your car reaches its destination without a single cosmetic flaw.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; padding:24px; box-shadow:0 2px 8px rgba(0,0,0,0.02);">
            <h3 style="font-size:1.18rem; font-weight:700; color:#0f223d; margin-bottom:10px;">
              How much petrol or diesel should remain in the car during transport?
            </h3>
            <p style="font-size:0.96rem; line-height:1.7; color:#475569; margin:0;">
              We recommend keeping roughly 10 to 15 liters of fuel (about one-quarter tank). This allows our crew to start the car and maneuver it up and down the carrier ramps and drive it to the nearest petrol station upon delivery, while eliminating fire hazard risks and unnecessary excess weight inside the carrier.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; padding:24px; box-shadow:0 2px 8px rgba(0,0,0,0.02);">
            <h3 style="font-size:1.18rem; font-weight:700; color:#0f223d; margin-bottom:10px;">
              Can I pack personal household luggage inside my car during transit?
            </h3>
            <p style="font-size:0.96rem; line-height:1.7; color:#475569; margin:0;">
              Yes, you may place up to 30 to 40 kg of soft personal items (such as bedsheets, clothes, or duffel bags) in the car trunk, provided they do not rise above the window line. The front seats, rearview visibility, and foot pedals must remain totally clear so our driver can safely operate the car during loading and unloading.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; padding:24px; box-shadow:0 2px 8px rgba(0,0,0,0.02);">
            <h3 style="font-size:1.18rem; font-weight:700; color:#0f223d; margin-bottom:10px;">
              What documents are required to transport a car from Ranchi?
            </h3>
            <p style="font-size:0.96rem; line-height:1.7; color:#475569; margin:0;">
              To dispatch your car from Ranchi across state borders, you only need to provide clear photocopies of: 1) Vehicle Registration Certificate (RC), 2) Valid comprehensive car insurance policy, 3) Current Pollution Under Control (PUC) certificate, and 4) Owner's Government-issued photo ID (Aadhar Card, PAN Card, or Driving License).
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; padding:24px; box-shadow:0 2px 8px rgba(0,0,0,0.02);">
            <h3 style="font-size:1.18rem; font-weight:700; color:#0f223d; margin-bottom:10px;">
              How is a low-clearance sedan loaded without scraping bumpers?
            </h3>
            <p style="font-size:0.96rem; line-height:1.7; color:#475569; margin:0;">
              Our carriers utilize specialized low-incline hydraulic extension ramps and gradual wooden riser tracks designed specifically for sedans with low approach angles like Honda City, Hyundai Verna, and German luxury saloons. This guarantees zero contact between the front bumper lip or underbody exhaust and the loading ramp.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; padding:24px; box-shadow:0 2px 8px rgba(0,0,0,0.02);">
            <h3 style="font-size:1.18rem; font-weight:700; color:#0f223d; margin-bottom:10px;">
              How is the car immobilized inside the carrier during highway travel?
            </h3>
            <p style="font-size:0.96rem; line-height:1.7; color:#475569; margin:0;">
              Your car is positioned onto steel floor tracks and secured with four heavy-duty tire harness ratchet straps directly around each wheel. The emergency handbrake is firmly engaged, and manual cars are placed in first gear (or 'Park' for automatic models). This downward anchoring lets the car's own suspension absorb highway shocks without allowing any lateral sway.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; padding:24px; box-shadow:0 2px 8px rgba(0,0,0,0.02);">
            <h3 style="font-size:1.18rem; font-weight:700; color:#0f223d; margin-bottom:10px;">
              Do you provide IBA approved bills for car transportation reimbursement?
            </h3>
            <p style="font-size:0.96rem; line-height:1.7; color:#475569; margin:0;">
              Yes, Shree Ashirwad Packers issues 100% authentic IBA-approved consignment bills, GST tax invoices, money receipts, and vehicle condition inspection reports accepted by all public sector undertakings (SAIL, CCL, CMPDI, MECON), nationalized banks, government departments, and defense units.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; padding:24px; box-shadow:0 2px 8px rgba(0,0,0,0.02);">
            <h3 style="font-size:1.18rem; font-weight:700; color:#0f223d; margin-bottom:10px;">
              How many days does car shipping take from Ranchi to Bangalore or Delhi?
            </h3>
            <p style="font-size:0.96rem; line-height:1.7; color:#475569; margin:0;">
              Transit from Ranchi to Delhi NCR typically requires 3 to 5 business days, while long-haul routes such as Ranchi to Bangalore, Pune, Mumbai, or Hyderabad take 6 to 8 business days. Express regional routes to Kolkata or Patna take only 24 to 48 hours.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; padding:24px; box-shadow:0 2px 8px rgba(0,0,0,0.02);">
            <h3 style="font-size:1.18rem; font-weight:700; color:#0f223d; margin-bottom:10px;">
              Can electric vehicles (Tata Nexon EV, MG ZS EV) be transported safely?
            </h3>
            <p style="font-size:0.96rem; line-height:1.7; color:#475569; margin:0;">
              Yes, our transport crew has specialized EV handling protocols. Electric cars are placed in 'Transport / Towing Mode', battery management diagnostics are recorded, and tire harness straps are secured without applying pressure to underbody battery packs.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; padding:24px; box-shadow:0 2px 8px rgba(0,0,0,0.02);">
            <h3 style="font-size:1.18rem; font-weight:700; color:#0f223d; margin-bottom:10px;">
              How can I track my car during the highway journey?
            </h3>
            <p style="font-size:0.96rem; line-height:1.7; color:#475569; margin:0;">
              All our vehicle carriers are equipped with live GPS transponders. You receive regular milestone alerts via WhatsApp or SMS informing you of departure, interstate border checkpost crossings, arrival at the destination city terminal, and the delivery handover window. You can also contact your dedicated move coordinator directly at 8409531615.
            </p>
          </div>

          <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; padding:24px; box-shadow:0 2px 8px rgba(0,0,0,0.02);">
            <h3 style="font-size:1.18rem; font-weight:700; color:#0f223d; margin-bottom:10px;">
              Do you provide doorstep car pickup across all areas of Ranchi?
            </h3>
            <p style="font-size:0.96rem; line-height:1.7; color:#475569; margin:0;">
              Yes, our certified vehicle pickup team provides door-to-door car collection across all residential colonies and industrial zones of Ranchi, including Harmu Housing Colony, Morabadi, Kanke Road, Lalpur, Doranda, Hinoo, Ratu Road, Bariatu, Dhurwa, Tupudana, Namkum, Ashok Nagar, and Booty More.
            </p>
          </div>

        </div>
      </section>

      <!-- Section 12: Google My Business Authentic Reviews & Customer Testimonials -->
      <?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

      <!-- Section 13: High-Converting Call to Action Banner -->
      <section style="background:linear-gradient(135deg, #0f223d 0%, #1e3a5f 100%); border-radius:16px; padding:50px 30px; text-align:center; color:#ffffff; margin-bottom:40px; box-shadow:0 10px 35px rgba(15,34,61,0.25);">
        <h2 style="font-size:clamp(1.9rem, 3.8vw, 2.5rem); font-weight:800; margin-bottom:16px;">
          Ready to Transport Your Car from Ranchi Safely?
        </h2>
        <p style="font-size:1.1rem; color:#cbd5e1; max-width:740px; margin:0 auto 30px; line-height:1.7;">
          Book certified car transport in Ranchi with Shree Ashirwad Packers and Movers today. Get doorstep 360-degree inspection, enclosed hydraulic container transit, and authentic IBA approved documentation.
        </p>
        <div style="display:flex; justify-content:center; gap:16px; flex-wrap:wrap;">
          <a href="tel:<?php echo SECONDARY_PHONE_RAW; ?>" class="btn-hero-call" style="background:#ff6a28; color:#ffffff; padding:15px 32px; border-radius:8px; font-weight:700; text-decoration:none; font-size:1.05rem; box-shadow:0 4px 15px rgba(255,106,40,0.4);">
            Call Ranchi Car Desk: 8409531615
          </a>
          <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="nofollow noopener noreferrer" class="btn-hero-whatsapp" style="background:#25d366; color:#ffffff; padding:15px 30px; border-radius:8px; font-weight:700; text-decoration:none; font-size:1.05rem; box-shadow:0 4px 15px rgba(37,211,102,0.3);">
            WhatsApp Free Car Estimate
          </a>
          <a href="<?php echo SITE_BASE_URL; ?>/contact" style="background:rgba(255,255,255,0.12); border:1px solid rgba(255,255,255,0.3); color:#ffffff; padding:15px 28px; border-radius:8px; font-weight:600; text-decoration:none; font-size:1.05rem;">
            Online Enquiry &rarr;
          </a>
        </div>
      </section>

      <!-- Section 14: Related Moving & Vehicle Transport Portals in Ranchi -->
      <section style="background:#ffffff; border-radius:12px; border:1px solid #e2e8f0; padding:25px; margin-bottom:40px; box-shadow:0 2px 10px rgba(0,0,0,0.03);">
        <h3 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:12px;">Related Vehicle & Shifting Services in Ranchi</h3>
        <div style="display:flex; flex-wrap:wrap; gap:10px; font-size:0.9rem;">
          <a href="<?php echo SITE_BASE_URL; ?>/vehicle-shifting-services-in-ranchi" style="color:#ff6a28; text-decoration:underline; font-weight:700;">Vehicle Shifting Services in Ranchi</a> &bull;
          <a href="<?php echo SITE_BASE_URL; ?>/bike-transport-in-ranchi" style="color:#ff6a28; text-decoration:none; font-weight:600;">Bike Transport in Ranchi</a> &bull;
          <a href="<?php echo SITE_BASE_URL; ?>/residential-shifting-services-in-ranchi" style="color:#334155; text-decoration:none; font-weight:600;">Residential Shifting Ranchi</a> &bull;
          <a href="<?php echo SITE_BASE_URL; ?>/household-shifting-services-in-ranchi" style="color:#334155; text-decoration:none; font-weight:600;">Household Shifting Ranchi</a> &bull;
          <a href="<?php echo SITE_BASE_URL; ?>/local-shifting-services-in-ranchi" style="color:#334155; text-decoration:none; font-weight:600;">Local Shifting in Ranchi</a>
        </div>
      </section>

    </div>

  </main>

  <!-- Global Footer Navigation -->
  <?php include __DIR__ . '/includes/footer.php'; ?>

  <script src="<?php echo SITE_BASE_URL; ?>/assets/js/main.js" defer></script>
</body>
</html>
