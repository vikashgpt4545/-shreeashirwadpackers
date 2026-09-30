<?php
/**
 * Car Transport in Dhanbad - Shree Ashirwad Packers and Movers
 * Pure Core PHP Implementation - Full Width Premium SEO Architecture
 * 
 * Target URL: https://www.shreeashirwadpackers.com/car-transport-in-dhanbad
 * Primary Keyword: car transport in dhanbad
 * Focus: Four-Wheeler Car Carrier, Hydraulic Ramp Trailer, Sedan/SUV Relocation & Full Transit Insurance
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$page_title = "Car Transport in Dhanbad - 8409531615 | Shree Ashirwad Packers";
$page_description = "Safe car transport in Dhanbad by Shree Ashirwad Packers. Covered hydraulic car carriers, sedan & SUV shipping, transit insurance & door delivery. Call 8409531615.";
$canonical_url = PRODUCTION_CANONICAL_DOMAIN . "/car-transport-in-dhanbad";
$meta_keywords = "car transport in dhanbad, car carrier service dhanbad, car shifting in dhanbad, four wheeler relocation dhanbad, best car transport dhanbad jharkhand, car movers dhanbad, car carrier trailer dhanbad";
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

  <!-- Open Graph / Social Meta -->
  <meta property="og:locale" content="en_IN">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo $page_title; ?>">
  <meta property="og:description" content="<?php echo $page_description; ?>">
  <meta property="og:url" content="<?php echo $canonical_url; ?>">
  <meta property="og:site_name" content="<?php echo htmlspecialchars(BUSINESS_NAME, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="800">
  <meta property="og:image:alt" content="Car Transport in Dhanbad Shree Ashirwad Packers">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo $page_title; ?>">
  <meta name="twitter:description" content="<?php echo $page_description; ?>">
  <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg">

  <!-- Verification & Geo Tags -->
  <meta name="google-site-verification" content="<?php echo htmlspecialchars(GOOGLE_SITE_VERIFICATION, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="theme-color" content="#1a2b4c">
  <meta name="geo.region" content="IN-JH">
  <meta name="geo.placename" content="Dhanbad">
  <meta name="geo.position" content="23.7957;86.4304">
  <meta name="ICBM" content="23.7957, 86.4304">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
  <link rel="shortcut icon" href="<?php echo SITE_BASE_URL; ?>/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">

  <!-- Fonts & Stylesheet -->
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

  <!-- Structured Data: MovingCompany Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "MovingCompany",
    "@id": "<?php echo $canonical_url; ?>/#movingcompany",
    "name": "Shree Ashirwad Packers and Movers - Car Transport Dhanbad",
    "alternateName": "Dhanbad Car Carrier Logistics",
    "url": "<?php echo $canonical_url; ?>",
    "logo": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
    "image": "<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg",
    "description": "<?php echo $page_description; ?>",
    "telephone": "+918409531615",
    "email": "enquiry@shreeashirwadpackers.com",
    "priceRange": "₹₹",
    "keywords": "car transport in dhanbad, car carrier service dhanbad, four wheeler relocation dhanbad",
    "currenciesAccepted": "INR",
    "paymentAccepted": "Cash, UPI, Net Banking, Cheque",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Bank More, Near Dhanbad Railway Station",
      "addressLocality": "Dhanbad",
      "addressRegion": "Jharkhand",
      "postalCode": "826001",
      "addressCountry": "IN"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 23.7957,
      "longitude": 86.4304
    },
    "hasMap": "https://maps.google.com/?q=23.7957,86.4304",
    "openingHoursSpecification": [
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
        "opens": "00:00",
        "closes": "23:59"
      }
    ],
    "areaServed": [
      { "@type": "City", "name": "Dhanbad" },
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
    "serviceType": "Car Carrier Relocation, Vehicle Transportation & Auto Shipping",
    "name": "Car Transport in Dhanbad",
    "provider": {
      "@type": "MovingCompany",
      "@id": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/#movingcompany",
      "name": "<?php echo BUSINESS_NAME; ?>",
      "telephone": "+918409531615",
      "url": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/"
    },
    "areaServed": [
      { "@type": "City", "name": "Dhanbad" },
      { "@type": "AdministrativeArea", "name": "Dhanbad District" }
    ],
    "description": "Specialized four-wheeler and luxury car transportation service in Dhanbad featuring covered hydraulic car carriers, low-angle ramp loading, 360-degree vehicle inspection reports, and full-value transit insurance.",
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Dhanbad Car Transport Services",
      "itemListElement": [
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Enclosed Hydraulic Car Carrier Shipping" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Hatchback & Sedan Intercity Car Shifting" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "SUV & Luxury Four-Wheeler Relocation" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "IBA Approved Official Transfer Car Transport Billing" } }
      ]
    }
  }
  </script>

  <!-- Structured Data: BreadcrumbList -->
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
        "name": "Dhanbad",
        "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dhanbad"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Car Transport in Dhanbad",
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
        "name": "How is my car transported from Dhanbad to another city?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Your vehicle is transported inside specialized, multi-car enclosed hydraulic carriers or dedicated single-car closed container trucks. Vehicles are driven up custom low-angle hydraulic ramps, positioned into dedicated wheel grooves, and locked with four-point heavy-duty nylon wheel chocks and safety chains to prevent any movement during transit."
        }
      },
      {
        "@type": "Question",
        "name": "Do you drive my car to the destination city or load it onto a truck?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We strictly transport your car loaded atop or inside specialized enclosed car trailers. Your vehicle is never driven across highway corridors, preserving your engine, tires, and odometer readings. Driving is strictly limited to short-distance loading at your doorstep and unloading at the delivery address."
        }
      },
      {
        "@type": "Question",
        "name": "What paperwork is required for car transport from Dhanbad?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Required documents include: (1) Vehicle Registration Certificate (RC copy), (2) Active comprehensive vehicle insurance copy, (3) Valid Pollution Under Control (PUC) certificate, (4) Owner's Aadhaar or PAN card copy, and (5) Signed Vehicle Condition Inspection Form detailing fuel gauge, odometer reading, and pre-existing exterior condition."
        }
      },
      {
        "@type": "Question",
        "name": "How much does car transport from Dhanbad cost?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "For short regional transit such as Dhanbad to Ranchi or Patna, charges range from ₹5,500 to ₹9,500. Long-distance transport to metropolitan destinations like Delhi, Kolkata, Bangalore, or Mumbai ranges from ₹7,500 to ₹18,500 depending on vehicle dimensions (Hatchback vs. Sedan vs. Compact SUV vs. Full Luxury 4x4) and carrier type."
        }
      },
      {
        "@type": "Question",
        "name": "Is transit insurance mandatory and what does it cover?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Transit insurance is highly recommended and provides comprehensive financial protection against road accidents, overturned trailers, fire, and natural disasters during highway travel. Insurance is calculated at a nominal premium percentage (typically 1.5% to 2% of your declared vehicle IDV value)."
        }
      },
      {
        "@type": "Question",
        "name": "Which localities in Dhanbad do you service for car pickup?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We provide doorstep car pickup across all areas of Dhanbad including Bank More, Saraidhela, Hirapur, Koyla Nagar, Jagjiwan Nagar, Dhansar, Steel Gate, Govindpur, Barwadda, Katras, Jharia, Sindri, and IIT (ISM) Dhanbad residential campus."
        }
      },
      {
        "@type": "Question",
        "name": "Can I leave personal belongings or luggage inside the car trunk?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Up to 50 kg of non-valuable personal luggage or household items can be safely kept in the trunk (dicky) of the vehicle. However, cash, jewelry, confidential documentation, and hazardous or flammable substances are strictly prohibited under carrier carriage laws."
        }
      },
      {
        "@type": "Question",
        "name": "How can I track my car while it is on the highway?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "All our commercial vehicle carriers are outfitted with satellite GPS hardware. Customers receive regular automated WhatsApp updates, SMS milestones, and 24/7 direct telephone support from our Dhanbad dispatch desk until final delivery."
        }
      }
    ]
  }
  </script>
</head>
<body>

  <!-- Global Header Navigation -->
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main id="mainContent">

    <!-- Page Hero Section -->
    <section class="page-hero" style="position:relative; padding: 75px 0 55px; background: linear-gradient(135deg, #0b1727 0%, #102a45 60%, #1a3a5f 100%); color: #ffffff; overflow: hidden;">
      <div class="container" style="position:relative; z-index:2; max-width:1140px; margin:0 auto; padding:0 20px;">
        <nav class="breadcrumb-trail" aria-label="Breadcrumb" style="margin-bottom:20px; font-size:0.9rem; color:#94a3b8;">
          <a href="<?php echo SITE_BASE_URL; ?>/" style="color:#cbd5e1; text-decoration:none;">Home</a>
          <span style="margin:0 8px; color:#64748b;">&gt;</span>
          <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dhanbad" style="color:#cbd5e1; text-decoration:none;">Dhanbad</a>
          <span style="margin:0 8px; color:#64748b;">&gt;</span>
          <span aria-current="page" style="color:#ff6a28; font-weight:600;">Car Transport</span>
        </nav>
        
        <h1 style="font-size: clamp(2.1rem, 4.2vw, 3.2rem); font-weight:800; line-height:1.2; margin-bottom:18px;">
          Car Transport in Dhanbad
        </h1>
        
        <p style="font-size:1.15rem; line-height:1.75; color:#cbd5e1; max-width:920px; margin-bottom:28px;">
          Certified four-wheeler relocation across India from Dhanbad by Shree Ashirwad Packers and Movers. Covered hydraulic car carrier trailers, low-gradient ramp loading, 360-degree digital condition inspection reports, full-value transit insurance, and 100% genuine IBA-approved transfer claims.
        </p>

        <div style="display:flex; flex-wrap:wrap; gap:16px; align-items:center;">
          <a href="tel:<?php echo SECONDARY_PHONE_RAW; ?>" style="display:inline-flex; align-items:center; gap:10px; background:#ff6a28; color:#ffffff; padding:14px 28px; border-radius:8px; font-weight:700; text-decoration:none; box-shadow: 0 4px 15px rgba(255,106,40,0.35);">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
            Book Car Carrier: 8409531615
          </a>
          <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="nofollow noopener noreferrer" style="display:inline-flex; align-items:center; gap:10px; background:rgba(255,255,255,0.08); border:1px solid rgba(255,255,255,0.25); color:#ffffff; padding:14px 26px; border-radius:8px; font-weight:600; text-decoration:none; backdrop-filter:blur(6px);">
            WhatsApp Vehicle Quote &rarr;
          </a>
        </div>
      </div>
    </section>

    <!-- Operational Credentials Bar -->
    <section style="background:#ffffff; padding:28px 0; border-bottom:1px solid #e2e8f0;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">
        <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap:24px; align-items:center;">
          <div style="display:flex; align-items:center; gap:14px;">
            <div style="background:#fff2eb; color:#ff6a28; width:48px; height:48px; border-radius:10px; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:1.1rem;">RAMP</div>
            <div>
              <div style="font-weight:700; color:#0f223d;">Hydraulic Ramps</div>
              <div style="font-size:0.85rem; color:#64748b;">Low-Clearance Protection</div>
            </div>
          </div>
          <div style="display:flex; align-items:center; gap:14px;">
            <div style="background:#e0f2fe; color:#0284c7; width:48px; height:48px; border-radius:10px; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:1.1rem;">4-PT</div>
            <div>
              <div style="font-weight:700; color:#0f223d;">Wheel Chock Locks</div>
              <div style="font-size:0.85rem; color:#64748b;">Zero Transit Movement</div>
            </div>
          </div>
          <div style="display:flex; align-items:center; gap:14px;">
            <div style="background:#f0fdf4; color:#16a34a; width:48px; height:48px; border-radius:10px; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:1.2rem;">✓</div>
            <div>
              <div style="font-weight:700; color:#0f223d;">IBA Approved</div>
              <div style="font-size:0.85rem; color:#64748b;">100% Audit Claims</div>
            </div>
          </div>
          <div style="display:flex; align-items:center; gap:14px;">
            <div style="background:#fef3c7; color:#d97706; width:48px; height:48px; border-radius:10px; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:1.1rem;">GPS</div>
            <div>
              <div style="font-weight:700; color:#0f223d;">Satellite Tracking</div>
              <div style="font-size:0.85rem; color:#64748b;">Real-Time Location Updates</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Visual Showcase Gallery -->
    <section style="background:#f8fafc; padding:45px 0;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">
        <div style="text-align:center; margin-bottom:32px;">
          <h2 style="font-size:1.9rem; color:#0f223d; font-weight:800;">Real Fleet & Vehicle Loading Operations</h2>
          <p style="color:#64748b; max-width:680px; margin:8px auto 0;">Authentic field photographs of car carrier trailer operations, container loading, and door-to-door delivery managed by our Dhanbad team.</p>
        </div>
        
        <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap:24px;">
          <div style="background:#ffffff; border-radius:12px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.06); border:1px solid #e2e8f0;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transport carrier loading Dhanbad" style="width:100%; height:230px; object-fit:cover; display:block;" loading="lazy">
            <div style="padding:16px;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Hydraulic Low-Ramp Loading</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.5;">Low-angle loading ramps prevent bumper scuffs and underbody scratches even on premium low-clearance sedans.</p>
            </div>
          </div>

          <div style="background:#ffffff; border-radius:12px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.06); border:1px solid #e2e8f0;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Enclosed car container truck Dhanbad" style="width:100%; height:230px; object-fit:cover; display:block;" loading="lazy">
            <div style="padding:16px;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Covered Weatherproof Carriers</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.5;">Double-decker closed car carriers and sealed containers shielding vehicles completely from highway dust and rain.</p>
            </div>
          </div>

          <div style="background:#ffffff; border-radius:12px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.06); border:1px solid #e2e8f0;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door car transport delivery Dhanbad" style="width:100%; height:230px; object-fit:cover; display:block;" loading="lazy">
            <div style="padding:16px;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Doorstep Collection & Handover</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.5;">Direct home pickup across Dhanbad residential sectors and delivery right to your new driveway anywhere across India.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Main Content Editorial -->
    <article class="article-content" style="padding: 55px 0 70px; background:#ffffff;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">
        
        <section style="margin-bottom:45px;">
          <h2 style="font-size:2rem; color:#0f223d; font-weight:800; margin-bottom:18px;">Dedicated Four-Wheeler Car Carrier Solutions in Dhanbad</h2>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:16px;">
            Transporting a car across long distances is a major logistical undertaking that requires strict safety standards, specialized carrier trailers, and reliable handling. Whether you are an officer relocating from BCCL Koyla Nagar, an executive transferring from Eastern Railway Dhanbad division, or a family relocating from Saraidhela or Bank More to Delhi, Kolkata, Patna, or Bangalore, you need absolute certainty that your vehicle will reach its destination without an additional kilometer driven or a single hairline scratch on the paintwork.
          </p>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:16px;">
            At <strong>Shree Ashirwad Packers and Movers</strong>, we specialize in certified vehicle transportation utilizing specialized hydraulic car trailers. Operating directly via our Dhanbad logistics hub near Bank More and our highway freight facility on the Grand Trunk Road (NH-19) in Govindpur, our specialized car transport division provides prompt doorstep vehicle collection, thorough digital condition inspections, closed container trailer transit, and insured door delivery throughout India. As part of our comprehensive <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dhanbad" style="color:#0284c7; font-weight:600; text-decoration:underline;">packers and movers in Dhanbad</a> logistics network, we also provide specialized <a href="<?php echo SITE_BASE_URL; ?>/bike-transport-in-dhanbad" style="color:#0284c7; font-weight:600; text-decoration:underline;">bike transport in Dhanbad</a> and <a href="<?php echo SITE_BASE_URL; ?>/household-shifting-services-in-dhanbad" style="color:#0284c7; font-weight:600; text-decoration:underline;">household shifting services in Dhanbad</a> for customers planning complete home moves.
          </p>
        </section>

        <!-- Mechanical Safety & Ramp Engineering -->
        <section style="margin-bottom:50px; background:#f8fafc; padding:35px; border-radius:14px; border:1px solid #e2e8f0;">
          <h2 style="font-size:1.8rem; color:#0f223d; font-weight:800; margin-bottom:20px;">Engineered Loading & Highway Securing Protocols</h2>
          <p style="font-size:1.02rem; line-height:1.8; color:#334155; margin-bottom:24px;">
            Improper vehicle transport often leads to front bumper cracks, scraping of exhaust systems, suspension strain, and interior damage caused by loose transit vibrations. Our carrier operations follow strict technical safety procedures:
          </p>
          
          <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap:20px;">
            <div style="background:#ffffff; padding:22px; border-radius:10px; border-left:4px solid #ff6a28; box-shadow:0 2px 8px rgba(0,0,0,0.04);">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Ultra-Low Gradient Ramps</h3>
              <p style="font-size:0.95rem; line-height:1.6; color:#64748b;">Specially calibrated hydraulic ramp angles ensure low ground-clearance luxury sedans like Honda City, Hyundai Verna, and BMW 3-Series drive aboard without touching underbody panels.</p>
            </div>

            <div style="background:#ffffff; padding:22px; border-radius:10px; border-left:4px solid #0284c7; box-shadow:0 2px 8px rgba(0,0,0,0.04);">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:8px;">4-Point Wheel Chock Anchoring</h3>
              <p style="font-size:0.95rem; line-height:1.6; color:#64748b;">Steel wheel grooves and rubberized wheel chocks lock all four tires. Heavy-duty 5-ton rated nylon ratchet tie-downs strap wheels directly to the carrier deck without exerting force on axles.</p>
            </div>

            <div style="background:#ffffff; padding:22px; border-radius:10px; border-left:4px solid #16a34a; box-shadow:0 2px 8px rgba(0,0,0,0.04);">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Weatherproof Enclosed Carriers</h3>
              <p style="font-size:0.95rem; line-height:1.6; color:#64748b;">Double-decker covered carriers and custom sealed containers shield your vehicle from loose highway gravel, flyaway stones, torrential monsoon rain, industrial coal dust, and sunlight exposure.</p>
            </div>

            <div style="background:#ffffff; padding:22px; border-radius:10px; border-left:4px solid #d97706; box-shadow:0 2px 8px rgba(0,0,0,0.04);">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Zero Road Travel Guarantee</h3>
              <p style="font-size:0.95rem; line-height:1.6; color:#64748b;">Your car is loaded directly onto our carrier in Dhanbad and unloaded at your destination. We never drive customer cars on highway stretches, completely protecting your tires and mechanical engine health.</p>
            </div>
          </div>
        </section>

        <!-- Pricing Matrix Table -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.8rem; color:#0f223d; font-weight:800; margin-bottom:16px;">Transparent Car Shifting Rate Chart from Dhanbad</h2>
          <p style="font-size:1.02rem; line-height:1.8; color:#334155; margin-bottom:22px;">
            Pricing for car transportation is calculated by route mileage, vehicle size category, tollway clearances, and carrier type (shared covered trailer vs. exclusive container):
          </p>

          <div style="overflow-x:auto; margin-bottom:16px; border-radius:10px; border:1px solid #e2e8f0; box-shadow:0 2px 10px rgba(0,0,0,0.04);">
            <table style="width:100%; border-collapse:collapse; text-align:left; font-size:0.98rem;">
              <thead>
                <tr style="background:#0f223d; color:#ffffff;">
                  <th style="padding:14px 18px; font-weight:700;">Destination Route from Dhanbad</th>
                  <th style="padding:14px 18px; font-weight:700;">Distance</th>
                  <th style="padding:14px 18px; font-weight:700;">Hatchback (Swift/i10)</th>
                  <th style="padding:14px 18px; font-weight:700;">Sedan (Dzire/City)</th>
                  <th style="padding:14px 18px; font-weight:700;">SUV / Luxury (Creta/Fortuner)</th>
                </tr>
              </thead>
              <tbody>
                <tr style="border-bottom:1px solid #e2e8f0; background:#ffffff;">
                  <td style="padding:14px 18px; font-weight:600; color:#0f223d;"><a href="<?php echo SITE_BASE_URL; ?>/dhanbad-to-ranchi-packers-and-movers" style="color:#0f223d; text-decoration:underline;">Dhanbad to Ranchi</a></td>
                  <td style="padding:14px 18px; color:#64748b;">160 km</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹5,500 - ₹7,000</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹6,500 - ₹8,000</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹8,000 - ₹10,500</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                  <td style="padding:14px 18px; font-weight:600; color:#0f223d;"><a href="<?php echo SITE_BASE_URL; ?>/dhanbad-to-kolkata-packers-and-movers" style="color:#0f223d; text-decoration:underline;">Dhanbad to Kolkata</a></td>
                  <td style="padding:14px 18px; color:#64748b;">260 km</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹6,500 - ₹8,500</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹8,000 - ₹10,000</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹9,500 - ₹12,500</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#ffffff;">
                  <td style="padding:14px 18px; font-weight:600; color:#0f223d;"><a href="<?php echo SITE_BASE_URL; ?>/dhanbad-to-patna-packers-and-movers" style="color:#0f223d; text-decoration:underline;">Dhanbad to Patna</a></td>
                  <td style="padding:14px 18px; color:#64748b;">300 km</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹7,000 - ₹9,000</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹8,500 - ₹10,500</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹10,500 - ₹13,500</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                  <td style="padding:14px 18px; font-weight:600; color:#0f223d;"><a href="<?php echo SITE_BASE_URL; ?>/dhanbad-to-delhi-packers-and-movers" style="color:#0f223d; text-decoration:underline;">Dhanbad to Delhi / NCR</a></td>
                  <td style="padding:14px 18px; color:#64748b;">1,180 km</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹10,500 - ₹13,500</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹12,500 - ₹15,500</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹15,000 - ₹19,500</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#ffffff;">
                  <td style="padding:14px 18px; font-weight:600; color:#0f223d;">Dhanbad to Bangalore</td>
                  <td style="padding:14px 18px; color:#64748b;">1,850 km</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹14,000 - ₹17,500</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹16,500 - ₹20,000</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹19,000 - ₹25,000</td>
                </tr>
                <tr style="background:#f8fafc;">
                  <td style="padding:14px 18px; font-weight:600; color:#0f223d;">Dhanbad to Mumbai / Pune</td>
                  <td style="padding:14px 18px; color:#64748b;">1,750 km</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹13,500 - ₹17,000</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹15,500 - ₹19,000</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹18,500 - ₹24,000</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p style="font-size:0.88rem; color:#64748b;">*All charges include doorstep car pickup across Dhanbad, loading onto carrier, highway toll taxes, GST, and delivery to your destination address. Optional full-value comprehensive marine/transit insurance is available at standard carrier tariffs (1.5% - 2% of IDV).</p>
        </section>

        <!-- Localities Covered in Dhanbad -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.8rem; color:#0f223d; font-weight:800; margin-bottom:16px;">Comprehensive Doorstep Vehicle Pickup Across Dhanbad</h2>
          <p style="font-size:1.02rem; line-height:1.8; color:#334155; margin-bottom:20px;">
            Our vehicle retrieval trucks and drivers provide direct home collection across every residential, mining, and institutional pocket of Dhanbad:
          </p>

          <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap:18px;">
            <div style="border:1px solid #e2e8f0; padding:18px; border-radius:10px; background:#ffffff;">
              <h3 style="font-size:1.05rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Bank More & Station Zone</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.5;">Central commercial and residential sectors including Shastri Nagar, Purana Bazar, Matkuria, and Dhanbad Railway Junction area.</p>
            </div>
            <div style="border:1px solid #e2e8f0; padding:18px; border-radius:10px; background:#ffffff;">
              <h3 style="font-size:1.05rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Saraidhela & Steel Gate</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.5;">Modern multi-story apartment complexes across Saraidhela, Steel Gate, VIP Colony, Big Bazaar corridor, and Housing Colony.</p>
            </div>
            <div style="border:1px solid #e2e8f0; padding:18px; border-radius:10px; background:#ffffff;">
              <h3 style="font-size:1.05rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Koyla Nagar & BCCL Township</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.5;">Priority pickup for executive officers and management staff residing in Koyla Nagar, Jagjiwan Nagar, and BCCL headquarters township.</p>
            </div>
            <div style="border:1px solid #e2e8f0; padding:18px; border-radius:10px; background:#ffffff;">
              <h3 style="font-size:1.05rem; color:#0f223d; font-weight:700; margin-bottom:6px;">IIT (ISM) & Hirapur</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.5;">Direct residential pickup for IIT (ISM) faculty, research scholars, Hirapur residential lanes, and Park Market officer bungalows.</p>
            </div>
            <div style="border:1px solid #e2e8f0; padding:18px; border-radius:10px; background:#ffffff;">
              <h3 style="font-size:1.05rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Govindpur & Barwadda Highway Hub</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.5;">Our primary linehaul terminal located on NH-19 (Grand Trunk Road) in Govindpur and Barwadda for rapid express carrier departures.</p>
            </div>
            <div style="border:1px solid #e2e8f0; padding:18px; border-radius:10px; background:#ffffff;">
              <h3 style="font-size:1.05rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Katras, Jharia, Sindri & Nirsa</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.5;">Complete regional suburban coverage including Jharia coalfield belt, Katras Bazar, Putki, Sindri fertilizer township, and Nirsa.</p>
            </div>
          </div>
        </section>

        <!-- Detailed Shipping Process -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.8rem; color:#0f223d; font-weight:800; margin-bottom:16px;">Standard Operating Procedure for Car Relocation</h2>
          <div style="display:flex; flex-direction:column; gap:16px;">
            <div style="display:flex; gap:16px; align-items:flex-start;">
              <div style="background:#ff6a28; color:#ffffff; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; flex-shrink:0;">1</div>
              <div>
                <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:4px;">Booking & Quotation Confirmation</h3>
                <p style="font-size:0.95rem; color:#64748b; line-height:1.6;">Contact our team at 8409531615 or submit an inquiry on WhatsApp. Provide your car make, model, destination city, and shifting date to receive a guaranteed fixed price quote.</p>
              </div>
            </div>
            <div style="display:flex; gap:16px; align-items:flex-start;">
              <div style="background:#ff6a28; color:#ffffff; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; flex-shrink:0;">2</div>
              <div>
                <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:4px;">360-Degree Digital Vehicle Inspection</h3>
                <p style="font-size:0.95rem; color:#64748b; line-height:1.6;">Our certified vehicle inspector arrives at your Dhanbad address. We inspect the vehicle in daylight, mark any pre-existing scratches, note odometer reading and fuel level, and issue a signed joint condition report.</p>
              </div>
            </div>
            <div style="display:flex; gap:16px; align-items:flex-start;">
              <div style="background:#ff6a28; color:#ffffff; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; flex-shrink:0;">3</div>
              <div>
                <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:4px;">Hydraulic Carrier Loading & Chock Locking</h3>
                <p style="font-size:0.95rem; color:#64748b; line-height:1.6;">The car is carefully driven up low-gradient hydraulic ramps into our enclosed carrier trailer. Wheels are anchored into floor grooves with 4-point heavy-duty safety straps to eliminate vibration and transit shifting.</p>
              </div>
            </div>
            <div style="display:flex; gap:16px; align-items:flex-start;">
              <div style="background:#ff6a28; color:#ffffff; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; flex-shrink:0;">4</div>
              <div>
                <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:4px;">GPS-Monitored Highway Transit</h3>
                <p style="font-size:0.95rem; color:#64748b; line-height:1.6;">The carrier departs via major national highways (NH-19, NH-20, NH-22). Real-time GPS tracking keeps you updated at key transit milestones and toll plazas along the route.</p>
              </div>
            </div>
            <div style="display:flex; gap:16px; align-items:flex-start;">
              <div style="background:#ff6a28; color:#ffffff; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; flex-shrink:0;">5</div>
              <div>
                <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:4px;">Destination Doorstep Delivery & Handover</h3>
                <p style="font-size:0.95rem; color:#64748b; line-height:1.6;">Upon arrival at your destination city, our local team drives the car down the hydraulic ramp, conducts a joint verification against the initial inspection report, and hands over keys in immaculate condition.</p>
              </div>
            </div>
          </div>
        </section>

        <!-- Official IBA Approved Billing -->
        <section style="margin-bottom:50px; background:#eff6ff; padding:32px; border-radius:12px; border:1px solid #bfdbfe;">
          <h2 style="font-size:1.7rem; color:#1e3a8a; font-weight:800; margin-bottom:14px;">100% Genuine IBA Approved Vehicle Shifting Claims</h2>
          <p style="font-size:1.02rem; line-height:1.8; color:#1e40af; margin-bottom:16px;">
            Transferring on company relocation orders with Coal India Limited (CIL), BCCL, Eastern Coalfields, CMPF, SAIL Bokaro, SBI, or nationalized banks? We provide complete, audit-compliant vehicle transfer claim documentation packs including:
          </p>
          <ul style="list-style-type:none; padding:0; display:grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap:12px; color:#1e3a8a; font-weight:600;">
            <li style="display:flex; align-items:center; gap:8px;">✓ Official IBA-Format Consignment Note (LR)</li>
            <li style="display:flex; align-items:center; gap:8px;">✓ GST-Compliant Tax Invoice with SAC Codes</li>
            <li style="display:flex; align-items:center; gap:8px;">✓ Vehicle Condition Inspection Certificate</li>
            <li style="display:flex; align-items:center; gap:8px;">✓ Transit Insurance Policy Documentation</li>
            <li style="display:flex; align-items:center; gap:8px;">✓ Official Money Receipt & Payment Acknowledgment</li>
            <li style="display:flex; align-items:center; gap:8px;">✓ 100% Audited Employer Claim Reimbursement</li>
          </ul>
        </section>

        <!-- Frequently Asked Questions -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.8rem; color:#0f223d; font-weight:800; margin-bottom:24px;">Frequently Asked Questions on Car Transport in Dhanbad</h2>
          
          <div style="display:flex; flex-direction:column; gap:16px;">
            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">How is my car transported from Dhanbad to another city?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Your vehicle is transported inside specialized, multi-car enclosed hydraulic carriers or dedicated closed container trucks. Vehicles are driven up custom low-angle hydraulic ramps, positioned into dedicated wheel grooves, and locked with four-point heavy-duty nylon wheel chocks and safety chains to prevent any movement during transit.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Do you drive my car to the destination city or load it onto a truck?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">We strictly transport your car loaded atop or inside specialized enclosed car trailers. Your vehicle is never driven across highway corridors, preserving your engine, tires, and odometer readings. Driving is strictly limited to short-distance loading at your doorstep and unloading at the delivery address.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">What paperwork is required for car transport from Dhanbad?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Required documents include: (1) Vehicle Registration Certificate (RC copy), (2) Active comprehensive vehicle insurance copy, (3) Valid Pollution Under Control (PUC) certificate, (4) Owner's Aadhaar or PAN card copy, and (5) Signed Vehicle Condition Inspection Form detailing fuel gauge, odometer reading, and pre-existing exterior condition.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">How much does car transport from Dhanbad cost?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">For short regional transit such as Dhanbad to Ranchi or Patna, charges range from ₹5,500 to ₹9,500. Long-distance transport to metropolitan destinations like Delhi, Kolkata, Bangalore, or Mumbai ranges from ₹7,500 to ₹18,500 depending on vehicle dimensions (Hatchback vs. Sedan vs. Compact SUV vs. Full Luxury 4x4) and carrier type.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Is transit insurance mandatory and what does it cover?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Transit insurance is highly recommended and provides comprehensive financial protection against road accidents, overturned trailers, fire, and natural disasters during highway travel. Insurance is calculated at a nominal premium percentage (typically 1.5% to 2% of your declared vehicle IDV value).</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Which localities in Dhanbad do you service for car pickup?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">We provide doorstep car pickup across all areas of Dhanbad including Bank More, Saraidhela, Hirapur, Koyla Nagar, Jagjiwan Nagar, Dhansar, Steel Gate, Govindpur, Barwadda, Katras, Jharia, Sindri, and IIT (ISM) Dhanbad residential campus.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Can I leave personal belongings or luggage inside the car trunk?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Up to 50 kg of non-valuable personal luggage or household items can be safely kept in the trunk (dicky) of the vehicle. However, cash, jewelry, confidential documentation, and hazardous or flammable substances are strictly prohibited under carrier carriage laws.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">How can I track my car while it is on the highway?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">All our commercial vehicle carriers are outfitted with satellite GPS hardware. Customers receive regular automated WhatsApp updates, SMS milestones, and 24/7 direct telephone support from our Dhanbad dispatch desk until final delivery.</p>
            </div>
          </div>
        </section>

        <!-- Final Call to Action Box -->
        <section style="background: linear-gradient(135deg, #0f223d 0%, #1a3a5f 100%); color:#ffffff; padding:45px 35px; border-radius:14px; text-align:center;">
          <h2 style="font-size:2rem; font-weight:800; margin-bottom:14px;">Ready to Transport Your Car from Dhanbad?</h2>
          <p style="font-size:1.1rem; color:#cbd5e1; max-width:700px; margin:0 auto 28px;">
            Get a guaranteed vehicle carrier estimate with zero hidden costs, doorstep pickup across Dhanbad, and full transit insurance coverage.
          </p>
          <div style="display:flex; justify-content:center; flex-wrap:wrap; gap:16px;">
            <a href="tel:<?php echo SECONDARY_PHONE_RAW; ?>" style="display:inline-flex; align-items:center; gap:8px; background:#ff6a28; color:#ffffff; padding:15px 30px; border-radius:8px; font-weight:700; text-decoration:none; box-shadow:0 4px 15px rgba(255,106,40,0.35);">
              Call Car Dispatch: 8409531615
            </a>
            <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="nofollow noopener noreferrer" style="display:inline-flex; align-items:center; gap:8px; background:rgba(255,255,255,0.12); border:1px solid rgba(255,255,255,0.3); color:#ffffff; padding:15px 30px; border-radius:8px; font-weight:600; text-decoration:none;">
              Get Instant WhatsApp Estimate &rarr;
            </a>
          </div>
        </section>

        <!-- Related Dhanbad Relocation Routes & Services Cluster Navigation -->
        <section style="background:#ffffff; padding:35px 25px; border-radius:12px; border:1px solid #e2e8f0; margin-top:35px; box-shadow:0 2px 10px rgba(0,0,0,0.03);">
          <h3 style="font-size:1.25rem; color:#0f223d; font-weight:800; margin-bottom:12px;">
            Related Dhanbad Relocation Routes &amp; Moving Services
          </h3>
          <p style="color:#64748b; font-size:0.95rem; margin-bottom:18px; line-height:1.6;">
            Explore our specialized relocation services and trusted intercity transport corridors connecting Dhanbad across Jharkhand, West Bengal, Bihar, and Pan-India:
          </p>
          <div style="display:flex; flex-wrap:wrap; gap:12px; font-size:0.9rem;">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dhanbad" style="color:#0284c7; text-decoration:none; background:#f0f9ff; padding:9px 15px; border-radius:6px; font-weight:600; border:1px solid #bae6fd;">Packers and Movers in Dhanbad</a>
            <a href="<?php echo SITE_BASE_URL; ?>/household-shifting-services-in-dhanbad" style="color:#0284c7; text-decoration:none; background:#f0f9ff; padding:9px 15px; border-radius:6px; font-weight:600; border:1px solid #bae6fd;">Household Shifting in Dhanbad</a>
            <a href="<?php echo SITE_BASE_URL; ?>/car-transport-in-dhanbad" style="color:#ff6a28; text-decoration:none; background:#fff7ed; padding:9px 15px; border-radius:6px; font-weight:700; border:1px solid #fed7aa;">Car Transport in Dhanbad (Current)</a>
            <a href="<?php echo SITE_BASE_URL; ?>/bike-transport-in-dhanbad" style="color:#0284c7; text-decoration:none; background:#f0f9ff; padding:9px 15px; border-radius:6px; font-weight:600; border:1px solid #bae6fd;">Bike Transport in Dhanbad</a>
            <a href="<?php echo SITE_BASE_URL; ?>/dhanbad-to-ranchi-packers-and-movers" style="color:#0284c7; text-decoration:none; background:#f0f9ff; padding:9px 15px; border-radius:6px; font-weight:600; border:1px solid #bae6fd;">Dhanbad to Ranchi Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/dhanbad-to-kolkata-packers-and-movers" style="color:#0284c7; text-decoration:none; background:#f0f9ff; padding:9px 15px; border-radius:6px; font-weight:600; border:1px solid #bae6fd;">Dhanbad to Kolkata Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/dhanbad-to-delhi-packers-and-movers" style="color:#0284c7; text-decoration:none; background:#f0f9ff; padding:9px 15px; border-radius:6px; font-weight:600; border:1px solid #bae6fd;">Dhanbad to Delhi Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/dhanbad-to-patna-packers-and-movers" style="color:#0284c7; text-decoration:none; background:#f0f9ff; padding:9px 15px; border-radius:6px; font-weight:600; border:1px solid #bae6fd;">Dhanbad to Patna Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/dhanbad-to-bokaro-packers-and-movers" style="color:#0284c7; text-decoration:none; background:#f0f9ff; padding:9px 15px; border-radius:6px; font-weight:600; border:1px solid #bae6fd;">Dhanbad to Bokaro Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/complete-guide-to-house-shifting-in-dhanbad" style="color:#0284c7; text-decoration:none; background:#f0f9ff; padding:9px 15px; border-radius:6px; font-weight:600; border:1px solid #bae6fd;">Dhanbad House Shifting Guide</a>
          </div>
        </section>

      </div>
    </article>

  </main>

  <!-- Global Footer -->
  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="<?php echo SITE_BASE_URL; ?>/assets/js/main.js" defer></script>
</body>
</html>
