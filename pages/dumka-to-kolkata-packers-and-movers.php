<?php
/**
 * Dumka to Kolkata Packers and Movers - Shree Ashirwad Packers and Movers
 * 
 * High-performance, fully SEO-optimized corridor landing page for household shifting,
 * car carrier shipping, bike parcel, and corporate relocation connecting
 * Dumka (Jharkhand) to Kolkata, Howrah, and Greater West Bengal.
 */

// Define page-specific metadata
$page_title = "Dumka to Kolkata Packers and Movers | Shifting Service - Shree Ashirwad";
$page_description = "Dependable Dumka to Kolkata packers and movers by Shree Ashirwad Packers. Dedicated container trucks, 24-36 hr delivery, car & bike shipping, 5-layer packing, e-Way bill compliance. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/dumka-to-kolkata-packers-and-movers";

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="keywords" content="dumka to kolkata packers and movers, packers and movers dumka to kolkata, household shifting dumka to kolkata, car transport dumka to kolkata, bike parcel dumka to kolkata, goods transport dumka to kolkata">
  <link rel="canonical" href="<?php echo $canonical_url; ?>">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta property="og:url" content="<?php echo $canonical_url; ?>">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg">
  <meta property="og:image:alt" content="Dumka to Kolkata Interstate Relocation Truck by Shree Ashirwad Packers">
  <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
  <meta property="og:locale" content="en_IN">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg">

  <!-- Geo Meta Tags -->
  <meta name="geo.region" content="IN-JH">
  <meta name="geo.placename" content="Dumka">
  <meta name="geo.position" content="24.2694;87.2562">
  <meta name="ICBM" content="24.2694, 87.2562">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
  <link rel="shortcut icon" href="<?php echo SITE_BASE_URL; ?>/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">

  <!-- Typography & CSS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

  <!-- Structured Data: MovingCompany Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "MovingCompany",
    "@id": "<?php echo $canonical_url; ?>/#movingcompany",
    "name": "Shree Ashirwad Packers and Movers - Dumka to Kolkata Route",
    "alternateName": "Dumka Kolkata Interstate Movers",
    "url": "<?php echo $canonical_url; ?>",
    "logo": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
    "image": "<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg",
    "description": "<?php echo $page_description; ?>",
    "telephone": "+918409531615",
    "email": "enquiry@shreeashirwadpackers.com",
    "priceRange": "₹₹",
    "currenciesAccepted": "INR",
    "paymentAccepted": "Cash, UPI, Net Banking, Cheque",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Court Road, Near Tin Bazar Chowk",
      "addressLocality": "Dumka",
      "addressRegion": "Jharkhand",
      "postalCode": "814101",
      "addressCountry": "IN"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 24.2694,
      "longitude": 87.2562
    },
    "openingHoursSpecification": [
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
        "opens": "00:00",
        "closes": "23:59"
      }
    ],
    "areaServed": [
      { "@type": "City", "name": "Dumka" },
      { "@type": "City", "name": "Kolkata" },
      { "@type": "City", "name": "Howrah" },
      { "@type": "State", "name": "West Bengal" },
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
    "serviceType": "Interstate Relocation, Household Shifting, Car Shipping & Bike Parcel",
    "name": "Dumka to Kolkata Packers and Movers Service",
    "provider": {
      "@type": "MovingCompany",
      "name": "Shree Ashirwad Packers and Movers",
      "telephone": "+918409531615",
      "url": "https://www.shreeashirwadpackers.com/"
    },
    "areaServed": [
      { "@type": "City", "name": "Dumka" },
      { "@type": "City", "name": "Kolkata" }
    ],
    "description": "Dedicated interstate moving corridor connecting Dumka (Jharkhand) to Kolkata (West Bengal) via Suri / Panagarh / NH-19. Complete 5-layer packing, 24 to 36-hour express transit, automated e-Way bill compliance, transit insurance, and doorstep delivery across Greater Kolkata.",
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Dumka to Kolkata Relocation Services",
      "itemListElement": [
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Dedicated Full Truck Load Shifting (Dumka to Kolkata)" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Part-Load Consolidated Household Freight" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Enclosed Car Carrier & Motorcycle Transport" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "GST e-Way Bill & IBA Approved Corporate Transfer Billing" } }
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
        "name": "Dumka",
        "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dumka"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Dumka to Kolkata Movers",
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
        "name": "How long does household shifting take from Dumka to Kolkata?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "For a dedicated container vehicle (Full Truck Load), transit takes between 24 and 36 hours. The distance between Dumka and Kolkata is approximately 285 to 300 km via Suri, Panagarh, and Durgapur Expressway (NH-19). Loading is carried out on Day 1 in Dumka, highway travel takes 7 to 9 hours, and delivery and setup in Kolkata occur on Day 2."
        }
      },
      {
        "@type": "Question",
        "name": "What is the cost of packers and movers from Dumka to Kolkata?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Rates typically start at ₹11,000 to ₹15,500 for a 1 BHK flat, ₹16,000 to ₹23,000 for a standard 2 BHK family residence, and ₹23,000 to ₹34,000 for a 3 BHK home. Car transport ranges from ₹5,800 to ₹10,000, and two-wheeler bike parcel ranges from ₹2,600 to ₹4,800."
        }
      },
      {
        "@type": "Question",
        "name": "Which highway route connects Dumka to Kolkata?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Our trucks travel from Dumka via Massanjore and Pattabari crossing into West Bengal at Suri (Birbhum), continuing through Ilambazar and Panagarh to join the Durgapur Expressway (NH-19 / AH1). Trucks enter Greater Kolkata via Dankuni Toll Plaza and connect across Nivedita Setu or Vidyasagar Setu."
        }
      },
      {
        "@type": "Question",
        "name": "Which areas in Kolkata and Howrah do you deliver to?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We deliver to all residential and commercial zones across Greater Kolkata including Salt Lake (Sector 1 to 5), New Town, Rajarhat, Ballygunge, Alipore, Gariahat, Jadavpur, Behala, Tollygunge, Dum Dum, EM Bypass, Howrah, Shibpur, and Newtown."
        }
      },
      {
        "@type": "Question",
        "name": "Is an interstate e-Way bill required for shifting goods to West Bengal?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. Interstate movement of household goods valued above statutory limits requires an electronic e-Way bill generated through the GST portal. Shree Ashirwad Packers and Movers handles complete e-Way bill documentation, vehicle Part-B assignment, and toll clearances for seamless border transit."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide transit insurance for Dumka to Kolkata relocations?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we arrange comprehensive transit insurance through national public-sector underwriters. The policy protects your entire consignment against highway collisions, fire, theft, overturning, and natural hazards during transit from Dumka to Kolkata."
        }
      },
      {
        "@type": "Question",
        "name": "Can you transport my four-wheeler car or scooty to Kolkata?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. We offer covered hydraulic car carrier transport and 4-layer protected bike courier services. Vehicles are loaded in Dumka and delivered directly to your doorstep in Kolkata without adding highway road mileage to your odometer."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide IBA-approved billing for corporate and bank transfers?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. We furnish 100% IBA-approved consignment notes, GST invoices, driver lorry receipts, and itemized packing inventories for bank officers, corporate executives, and central government employees relocating to Kolkata."
        }
      },
      {
        "@type": "Question",
        "name": "How are fragile kitchenware and appliances protected on this interstate route?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We use a rigorous 5-layer packing protocol: heavy bubble wrap for glassware and chinaware, foam corner protectors for LED televisions, stretch film for moisture barriers, and heavy-duty corrugated cartons strapped tightly inside our weatherproof container trucks."
        }
      },
      {
        "@type": "Question",
        "name": "How do I schedule an on-site survey and book my move?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Call our dedicated interstate moving coordinator at 8409531615 or submit your request via WhatsApp. We will conduct a free doorstep survey in Dumka or video assessment and provide an all-inclusive written estimate."
        }
      }
    ]
  }
  </script>
</head>
<body>

  <!-- Global Header Navigation -->
  <?php include __DIR__ . '/../includes/header.php'; ?>

  <main id="mainContent">

    <!-- Page Hero Section -->
    <section class="page-hero" style="position:relative; padding: 75px 0 55px; background: linear-gradient(135deg, #0b1727 0%, #102a45 60%, #1a3a5f 100%); color: #ffffff; overflow: hidden;">
      <div class="container" style="position:relative; z-index:2; max-width:1140px; margin:0 auto; padding:0 20px;">
        <nav class="breadcrumb-trail" aria-label="Breadcrumb" style="margin-bottom:20px; font-size:0.9rem; color:#94a3b8;">
          <a href="<?php echo SITE_BASE_URL; ?>/" style="color:#cbd5e1; text-decoration:none;">Home</a>
          <span style="margin:0 8px; color:#64748b;">&gt;</span>
          <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dumka" style="color:#cbd5e1; text-decoration:none;">Dumka</a>
          <span style="margin:0 8px; color:#64748b;">&gt;</span>
          <span aria-current="page" style="color:#ff6a28; font-weight:600;">Dumka to Kolkata Movers</span>
        </nav>
        
        <h1 style="font-size: clamp(2.1rem, 4.2vw, 3.2rem); font-weight:800; line-height:1.2; margin-bottom:18px;">
          Dumka to Kolkata Packers and Movers
        </h1>
        
        <p style="font-size:1.15rem; line-height:1.75; color:#cbd5e1; max-width:920px; margin-bottom:28px;">
          Fast, direct, and certified interstate relocation connecting Dumka (Jharkhand) to Kolkata, Howrah, and Greater West Bengal. Sealed closed container trucks, 24 to 36-hour guaranteed doorstep delivery, complete GST e-Way bill compliance, 5-layer shockproof packing, vehicle carriers, and 100% genuine IBA-compliant transfer bills.
        </p>

        <div style="display:flex; flex-wrap:wrap; gap:16px; align-items:center;">
          <a href="tel:8409531615" style="display:inline-flex; align-items:center; gap:10px; background:#ff6a28; color:#ffffff; padding:14px 28px; border-radius:8px; font-weight:700; text-decoration:none; box-shadow: 0 4px 15px rgba(255,106,40,0.35);">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
            Book Kolkata Route: 8409531615
          </a>
          <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="nofollow noopener noreferrer" style="display:inline-flex; align-items:center; gap:10px; background:rgba(255,255,255,0.08); border:1px solid rgba(255,255,255,0.25); color:#ffffff; padding:14px 26px; border-radius:8px; font-weight:600; text-decoration:none; backdrop-filter:blur(6px);">
            WhatsApp Kolkata Quote &rarr;
          </a>
        </div>
      </div>
    </section>

    <!-- Operational Credentials Bar -->
    <section style="background:#ffffff; padding:28px 0; border-bottom:1px solid #e2e8f0;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">
        <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap:24px; align-items:center;">
          <div style="display:flex; align-items:center; gap:14px;">
            <div style="background:#fff2eb; color:#ff6a28; width:48px; height:48px; border-radius:10px; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:1.1rem;">24-36h</div>
            <div>
              <div style="font-weight:700; color:#0f223d;">Express Transit</div>
              <div style="font-size:0.85rem; color:#64748b;">Direct Route via Suri &amp; NH-19</div>
            </div>
          </div>
          <div style="display:flex; align-items:center; gap:14px;">
            <div style="background:#e0f2fe; color:#0284c7; width:48px; height:48px; border-radius:10px; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:1.1rem;">E-WAY</div>
            <div>
              <div style="font-weight:700; color:#0f223d;">GST e-Way Bill</div>
              <div style="font-size:0.85rem; color:#64748b;">Zero Border Delays</div>
            </div>
          </div>
          <div style="display:flex; align-items:center; gap:14px;">
            <div style="background:#f0fdf4; color:#16a34a; width:48px; height:48px; border-radius:10px; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:1.2rem;">✓</div>
            <div>
              <div style="font-weight:700; color:#0f223d;">IBA Approved</div>
              <div style="font-size:0.85rem; color:#64748b;">Corporate &amp; Bank Claims</div>
            </div>
          </div>
          <div style="display:flex; align-items:center; gap:14px;">
            <div style="background:#fef3c7; color:#d97706; width:48px; height:48px; border-radius:10px; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:1.1rem;">GPS</div>
            <div>
              <div style="font-weight:700; color:#0f223d;">Satellite Tracking</div>
              <div style="font-size:0.85rem; color:#64748b;">Live Highway Milestone Alerts</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Visual Showcase Gallery -->
    <section style="background:#f8fafc; padding:45px 0;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">
        <div style="text-align:center; margin-bottom:32px;">
          <h2 style="font-size:1.9rem; color:#0f223d; font-weight:800;">Real Interstate Moving Operations &amp; Fleet</h2>
          <p style="color:#64748b; max-width:680px; margin:8px auto 0;">Authentic field photographs showing our dedicated container trucks, loading crews, and door-to-door transit operations between Dumka and Kolkata.</p>
        </div>

        <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap:24px;">
          <div style="background:#ffffff; border-radius:12px; overflow:hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border:1px solid #e2e8f0;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Doorstep delivery truck for interstate move from Dumka to Kolkata" style="width:100%; height:230px; object-fit:cover; display:block;" loading="lazy">
            <div style="padding:18px;">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Door-to-Door Delivery Fleet</h3>
              <p style="color:#64748b; font-size:0.9rem; line-height:1.6; margin:0;">Complete door pickup in Dumka and final unloading across all residential high-rises and sectors in Kolkata and Howrah.</p>
            </div>
          </div>

          <div style="background:#ffffff; border-radius:12px; overflow:hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border:1px solid #e2e8f0;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Closed container truck for safe transit between Jharkhand and West Bengal" style="width:100%; height:230px; object-fit:cover; display:block;" loading="lazy">
            <div style="padding:18px;">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Sealed All-Weather Containers</h3>
              <p style="color:#64748b; font-size:0.9rem; line-height:1.6; margin:0;">Robust steel containers protecting furniture, appliances, and personal items against rain, highway grime, and physical damage.</p>
            </div>
          </div>

          <div style="background:#ffffff; border-radius:12px; overflow:hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border:1px solid #e2e8f0;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/waterproof-container-loading-jharkhand.jpg" alt="Waterproof container truck loading for Dumka to Kolkata route" style="width:100%; height:230px; object-fit:cover; display:block;" loading="lazy">
            <div style="padding:18px;">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Zero Transshipment Guarantee</h3>
              <p style="color:#64748b; font-size:0.9rem; line-height:1.6; margin:0;">Goods loaded and locked at your Dumka residence travel directly to your Kolkata destination without offloading at intermediate warehouses.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Main Content Editorial Article -->
    <article style="padding:55px 0; background:#ffffff;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">

        <!-- Section: Strategic Interstate Corridor Overview -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.95rem; color:#0f223d; font-weight:800; margin-bottom:18px;">
            Connecting Dumka (Santhal Pargana) to Kolkata (West Bengal)
          </h2>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:18px;">
            The geographic proximity of Dumka (located in eastern Jharkhand bordering West Bengal) creates a deep economic, educational, and familial bond with the Kolkata metropolitan area. Covering approximately <strong>285 to 300 kilometers</strong> via the historic Massanjore corridor and Birbhum district, the <strong>Dumka to Kolkata</strong> route is a bustling interstate relocation artery.
          </p>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:18px;">
            Dozens of families, banking professionals from PSU banks, corporate executives, IT engineers moving to Salt Lake Sector V and New Town Rajarhat, doctors, and students frequently relocate along this corridor. However, an interstate move between Jharkhand and West Bengal requires more than just loading a truck; it demands statutory <strong>GST e-Way Bill compliance</strong>, proper commercial motor vehicle documentation, and heavy-duty sealed containers that withstand interstate highway travel.
          </p>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155;">
            <strong>Shree Ashirwad Packers and Movers</strong> provides end-to-end relocation solutions on the Dumka to Kolkata route. With our direct transit container fleet, your household goods are picked up at your Dumka residence, packed with our signature 5-layer protective materials, transported smoothly via Suri and NH-19, and delivered directly to your Kolkata apartment within <strong>24 to 36 hours</strong> with zero risk of damage or border delays.
          </p>
        </section>

        <!-- Section: Route Analysis & Highway Logistics -->
        <section style="margin-bottom:50px; background:#f8fafc; padding:35px 25px; border-radius:12px; border:1px solid #e2e8f0;">
          <h2 style="font-size:1.85rem; color:#0f223d; font-weight:800; margin-bottom:16px;">
            Interstate Highway Logistics: Dumka to Kolkata via Suri &amp; NH-19
          </h2>
          <p style="font-size:1.02rem; line-height:1.75; color:#475569; margin-bottom:24px;">
            Our container carriers follow well-established, high-speed routes connecting Santhal Pargana directly with Greater Kolkata:
          </p>

          <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap:20px;">
            <div style="background:#ffffff; border-radius:8px; padding:20px; border:1px solid #e2e8f0;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">1. Dumka to Suri (Birbhum)</h3>
              <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
                The truck departs Dumka, crossing past scenic Massanjore Dam and Pattabari, entering West Bengal at Suri (~65 km). Commercial documentation and e-Way bills clear border checkpoints effortlessly.
              </p>
            </div>

            <div style="background:#ffffff; border-radius:8px; padding:20px; border:1px solid #e2e8f0;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">2. Suri to Panagarh Junction</h3>
              <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
                Moving south through Ilambazar and the Ajay River bridge, our trucks reach Panagarh to merge onto the world-class, 6-lane Durgapur Expressway (NH-19 / Asian Highway 1).
              </p>
            </div>

            <div style="background:#ffffff; border-radius:8px; padding:20px; border:1px solid #e2e8f0;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">3. Durgapur Expressway to Dankuni</h3>
              <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
                Cruising along the smooth NH-19 through Burdwan and Singur towards Dankuni Toll Plaza, ensuring smooth cargo balance with minimal transit vibration.
              </p>
            </div>

            <div style="background:#ffffff; border-radius:8px; padding:20px; border:1px solid #e2e8f0;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">4. Entry into Greater Kolkata</h3>
              <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
                Crossing via Nivedita Setu (for North Kolkata, Rajarhat, Salt Lake) or Kona Expressway / Vidyasagar Setu (for Howrah, Central, and South Kolkata) for scheduled doorstep delivery.
              </p>
            </div>
          </div>
        </section>

        <!-- Section: Price Matrix Table -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.95rem; color:#0f223d; font-weight:800; margin-bottom:18px;">
            Estimated Relocation Rates: Dumka to Kolkata (~290 km)
          </h2>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:20px;">
            We offer all-inclusive transparent pricing with zero unexpected add-ons. Quotes include 5-layer packing materials, loading labor, highway toll fees, interstate e-Way bill processing, unloading, and furniture reassembly. Below is our benchmark rate matrix:
          </p>

          <div style="overflow-x:auto;">
            <table style="width:100%; border-collapse:collapse; font-size:0.95rem; background:#ffffff; border:1px solid #e2e8f0; border-radius:8px; overflow:hidden;">
              <thead>
                <tr style="background:#0f223d; color:#ffffff; text-align:left;">
                  <th style="padding:14px 16px;">Move Category</th>
                  <th style="padding:14px 16px;">Standard Rate (₹)</th>
                  <th style="padding:14px 16px;">Vehicle &amp; Crew Details</th>
                  <th style="padding:14px 16px;">Transit Timeline</th>
                </tr>
              </thead>
              <tbody>
                <tr style="border-bottom:1px solid #e2e8f0;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">1 BHK Flat Household Move</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹11,000 – ₹15,500</td>
                  <td style="padding:12px 16px; color:#64748b;">14-ft closed container, 3 packers, bubble wrap &amp; cartons</td>
                  <td style="padding:12px 16px; color:#0f223d; font-weight:600;">24 – 36 Hours</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">2 BHK Complete Family Home</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹16,000 – ₹23,000</td>
                  <td style="padding:12px 16px; color:#64748b;">17-ft/19-ft container, 4 packers, carpenter dismantling</td>
                  <td style="padding:12px 16px; color:#0f223d; font-weight:600;">24 – 36 Hours</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">3 BHK Large Residence / Villa</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹23,000 – ₹34,000</td>
                  <td style="padding:12px 16px; color:#64748b;">22-ft container truck, 5-6 packers, full wooden crating</td>
                  <td style="padding:12px 16px; color:#0f223d; font-weight:600;">24 – 48 Hours</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">Hatchback Car Transport</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹5,800 – ₹7,200</td>
                  <td style="padding:12px 16px; color:#64748b;">Covered car carrier trailer, ramp loading, wheel chocks</td>
                  <td style="padding:12px 16px; color:#0f223d; font-weight:600;">24 – 48 Hours</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">Sedan / Compact SUV Transport</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹6,800 – ₹8,500</td>
                  <td style="padding:12px 16px; color:#64748b;">Enclosed trailer, 360° inspection, tie-down lashing</td>
                  <td style="padding:12px 16px; color:#0f223d; font-weight:600;">24 – 48 Hours</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">Full-Size SUV (Fortuner, Safari, XUV)</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹8,000 – ₹10,000</td>
                  <td style="padding:12px 16px; color:#64748b;">Covered carrier, low-gradient ramp, zero road mileage</td>
                  <td style="padding:12px 16px; color:#0f223d; font-weight:600;">24 – 48 Hours</td>
                </tr>
                <tr>
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">Motorcycle / Scooty Transport</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹2,600 – ₹4,800</td>
                  <td style="padding:12px 16px; color:#64748b;">4-layer bubble packing, mirror removal, crating, door delivery</td>
                  <td style="padding:12px 16px; color:#0f223d; font-weight:600;">24 – 36 Hours</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p style="font-size:0.85rem; color:#64748b; margin-top:10px;">
            *Note: Transit insurance is available at nominal premium rates (1.5% to 2% of declared goods valuation). Standard GST applicable on commercial freight invoices.
          </p>
        </section>

        <!-- Section: Greater Kolkata Destination Delivery Network -->
        <section style="margin-bottom:50px; background:#ffffff;">
          <h2 style="font-size:1.95rem; color:#0f223d; font-weight:800; margin-bottom:18px;">
            Comprehensive Delivery Coverage Across Greater Kolkata &amp; Howrah
          </h2>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:20px;">
            Our local delivery teams in West Bengal ensure smooth, hassle-free unloading across all residential localities, high-rise gated societies, and commercial centers:
          </p>

          <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap:18px;">
            <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:8px; padding:18px;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">IT &amp; Modern Townships</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.6; margin:0;">
                Salt Lake (Sectors 1, 2, 3, 4, and Sector 5 IT hub), New Town (Action Area 1, 2, 3), and Rajarhat.
              </p>
            </div>
            <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:8px; padding:18px;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">South &amp; Central Kolkata</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.6; margin:0;">
                Ballygunge, Alipore, Gariahat, Jadavpur, Behala, Tollygunge, Bhowanipore, Park Street, Kasba, and EM Bypass.
              </p>
            </div>
            <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:8px; padding:18px;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">North Kolkata &amp; Suburbs</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.6; margin:0;">
                Dum Dum, Nagerbazar, Baranagar, Belgharia, Sodepur, Madhyamgram, and Barasat.
              </p>
            </div>
            <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:8px; padding:18px;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Howrah &amp; Riverbank Hubs</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.6; margin:0;">
                Howrah Station area, Shibpur, Mandirtala, Kona Expressway residential complexes, and Bally.
              </p>
            </div>
          </div>
        </section>

        <!-- Section: Climate, Monsoon & Moisture Protection on the Bengal Corridor -->
        <section style="margin-bottom:50px; background:#f8fafc; border:1px solid #e2e8f0; border-radius:12px; padding:32px 26px;">
          <h2 style="font-size:1.85rem; color:#0f223d; font-weight:800; margin-bottom:16px;">
            Monsoon, Moisture &amp; Humidity Protection on the Bengal Highway
          </h2>
          <p style="font-size:1.02rem; line-height:1.75; color:#475569; margin-bottom:18px;">
            The geographic expanse connecting eastern Jharkhand across Birbhum, Burdwan, and Hooghly districts experiences sudden monsoon thunderstorms, high ambient humidity, and persistent road moisture. Without specialized weatherproofing, traditional cotton quilts and untreated cardboard absorb atmospheric dampness, risking mold formation on expensive teakwood furniture, fabric odor on sofas and mattresses, and circuit corrosion in sensitive electronics.
          </p>
          <p style="font-size:1.02rem; line-height:1.75; color:#475569; margin-bottom:18px;">
            At Shree Ashirwad Packers and Movers, every item shipped from Dumka to Kolkata undergoes specialized climate-barrier wrapping. Sofas and mattresses are hermetically sealed inside thick polythene liners before bubble wrap and corrugated outer sheets are applied. Silica gel desiccant pouches are placed inside electronics boxes and wardrobe cartons to maintain internal dryness during the 24 to 36-hour transit window.
          </p>
          <p style="font-size:1.02rem; line-height:1.75; color:#475569; margin:0;">
            Furthermore, our container trucks feature rubber-gasket sealed double rear doors and elevated wooden pallet flooring inside the container bed, ensuring your household belongings never touch the floor surface and remain 100% dry and dust-free regardless of heavy rainfall along the Durgapur Expressway (NH-19).
          </p>
        </section>

        <!-- Section: Corporate Relocation & Student Shifting Packages -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.95rem; color:#0f223d; font-weight:800; margin-bottom:18px;">
            Corporate Executive Transfers &amp; Higher Education Student Moves
          </h2>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:18px;">
            Beyond traditional whole-home residential moves, our Dumka to Kolkata logistics corridor caters to two prominent demographics:
          </p>
          <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap:22px;">
            <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:22px; box-shadow:0 2px 8px rgba(0,0,0,0.03);">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:10px;">IT &amp; Corporate Executive Transfers</h3>
              <p style="font-size:0.92rem; color:#475569; line-height:1.65; margin:0;">
                For professionals joining tech majors in Salt Lake Sector V, Rajarhat New Town, or commercial firms in Central Kolkata, we provide end-to-end executive relocation packages. This includes custom workstation packing, fragile desktop computer boxes, wardrobe cartons for formal suits, and scheduled weekend delivery so that executives resume corporate duties on Monday without missing a workday.
              </p>
            </div>
            <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:22px; box-shadow:0 2px 8px rgba(0,0,0,0.03);">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:10px;">Student &amp; Medical Scholar Shifting</h3>
              <p style="font-size:0.92rem; color:#475569; line-height:1.65; margin:0;">
                Dumka students pursuing higher studies at Jadavpur University, Calcutta University, Presidency, medical institutions (Kolkata Medical College, NRS), or engineering academies benefit from our shared part-load (PTL) student moving options. We safely transport study desks, heavy reference book collections, laptops, mattresses, and two-wheelers at discounted student rates.
              </p>
            </div>
          </div>
        </section>

        <!-- Section: IBA Approved Government & Corporate Billing -->
        <section style="margin-bottom:50px; background:#f0fdf4; border:1px solid #bbf7d0; border-radius:12px; padding:32px 26px;">
          <h2 style="font-size:1.85rem; color:#14532d; font-weight:800; margin-bottom:14px;">
            100% IBA-Approved Billing for Interstate Corporate &amp; Bank Transfers
          </h2>
          <p style="font-size:1.02rem; line-height:1.75; color:#166534; margin-bottom:16px;">
            Moving on official transfer from Dumka to Kolkata? We furnish 100% audit-compliant relocation documentation for smooth reimbursement from banks (SBI, PNB, BOI, UBI), central government departments, railway divisions, and multinational corporations:
          </p>
          <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap:14px;">
            <div style="background:#ffffff; padding:14px; border-radius:6px; border:1px solid #dcfce7; font-size:0.92rem; color:#14532d; font-weight:600;">
              ✓ IBA-Compliant Lorry Receipt (LR / Consignment Note)
            </div>
            <div style="background:#ffffff; padding:14px; border-radius:6px; border:1px solid #dcfce7; font-size:0.92rem; color:#14532d; font-weight:600;">
              ✓ Itemized Inventory &amp; Value Declaration Packing List
            </div>
            <div style="background:#ffffff; padding:14px; border-radius:6px; border:1px solid #dcfce7; font-size:0.92rem; color:#14532d; font-weight:600;">
              ✓ GST Tax Invoice with Interstate HSN/SAC Codes
            </div>
            <div style="background:#ffffff; padding:14px; border-radius:6px; border:1px solid #dcfce7; font-size:0.92rem; color:#14532d; font-weight:600;">
              ✓ Marine Transit Insurance Policy Certificate
            </div>
          </div>
        </section>

        <!-- Section: Frequently Asked Questions (FAQ) -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.95rem; color:#0f223d; font-weight:800; margin-bottom:24px;">
            Frequently Asked Questions (FAQs) – Dumka to Kolkata Moving
          </h2>

          <div style="display:flex; flex-direction:column; gap:16px;">
            
            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">How long does household shifting take from Dumka to Kolkata?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">For a dedicated container vehicle (Full Truck Load), transit takes between 24 and 36 hours. The distance between Dumka and Kolkata is approximately 285 to 300 km via Suri, Panagarh, and Durgapur Expressway (NH-19). Loading is carried out on Day 1 in Dumka, highway travel takes 7 to 9 hours, and delivery and setup in Kolkata occur on Day 2.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">What is the cost of packers and movers from Dumka to Kolkata?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Rates typically start at ₹11,000 to ₹15,500 for a 1 BHK flat, ₹16,000 to ₹23,000 for a standard 2 BHK family residence, and ₹23,000 to ₹34,000 for a 3 BHK home. Car transport ranges from ₹5,800 to ₹10,000, and two-wheeler bike parcel ranges from ₹2,600 to ₹4,800.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Which highway route connects Dumka to Kolkata?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Our trucks travel from Dumka via Massanjore and Pattabari crossing into West Bengal at Suri (Birbhum), continuing through Ilambazar and Panagarh to join the Durgapur Expressway (NH-19 / AH1). Trucks enter Greater Kolkata via Dankuni Toll Plaza and connect across Nivedita Setu or Vidyasagar Setu.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Which areas in Kolkata and Howrah do you deliver to?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">We deliver to all residential and commercial zones across Greater Kolkata including Salt Lake (Sector 1 to 5), New Town, Rajarhat, Ballygunge, Alipore, Gariahat, Jadavpur, Behala, Tollygunge, Dum Dum, EM Bypass, Howrah, Shibpur, and Newtown.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Is an interstate e-Way bill required for shifting goods to West Bengal?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Yes. Interstate movement of household goods valued above statutory limits requires an electronic e-Way bill generated through the GST portal. Shree Ashirwad Packers and Movers handles complete e-Way bill documentation, vehicle Part-B assignment, and toll clearances for seamless border transit.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Do you provide transit insurance for Dumka to Kolkata relocations?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Yes, we arrange comprehensive transit insurance through national public-sector underwriters. The policy protects your entire consignment against highway collisions, fire, theft, overturning, and natural hazards during transit from Dumka to Kolkata.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Can you transport my four-wheeler car or scooty to Kolkata?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Yes. We offer covered hydraulic car carrier transport and 4-layer protected bike courier services. Vehicles are loaded in Dumka and delivered directly to your doorstep in Kolkata without adding highway road mileage to your odometer.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Do you provide IBA-approved billing for corporate and bank transfers?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Yes. We furnish 100% IBA-approved consignment notes, GST invoices, driver lorry receipts, and itemized packing inventories for bank officers, corporate executives, and central government employees relocating to Kolkata.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">How are fragile kitchenware and appliances protected on this interstate route?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">We use a rigorous 5-layer packing protocol: heavy bubble wrap for glassware and chinaware, foam corner protectors for LED televisions, stretch film for moisture barriers, and heavy-duty corrugated cartons strapped tightly inside our weatherproof container trucks.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">How do I schedule an on-site survey and book my move?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Call our dedicated interstate moving coordinator at 8409531615 or submit your request via WhatsApp. We will conduct a free doorstep survey in Dumka or video assessment and provide an all-inclusive written estimate.</p>
            </div>

          </div>
        </section>

        <!-- Final Call to Action Box -->
        <section style="background: linear-gradient(135deg, #0f223d 0%, #1a3a5f 100%); color:#ffffff; padding:45px 35px; border-radius:14px; text-align:center;">
          <h2 style="font-size:2rem; font-weight:800; margin-bottom:14px;">Moving from Dumka to Kolkata?</h2>
          <p style="font-size:1.1rem; color:#cbd5e1; max-width:700px; margin:0 auto 28px;">
            Book your dedicated container move today. Experience direct 24-36 hour delivery, full e-Way bill compliance, 5-layer protective packing, and comprehensive transit insurance.
          </p>
          <div style="display:flex; justify-content:center; flex-wrap:wrap; gap:16px;">
            <a href="tel:8409531615" style="display:inline-flex; align-items:center; gap:8px; background:#ff6a28; color:#ffffff; padding:15px 30px; border-radius:8px; font-weight:700; text-decoration:none; box-shadow:0 4px 15px rgba(255,106,40,0.35);">
              Call Kolkata Coordinator: 8409531615
            </a>
            <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="nofollow noopener noreferrer" style="display:inline-flex; align-items:center; gap:8px; background:rgba(255,255,255,0.12); border:1px solid rgba(255,255,255,0.3); color:#ffffff; padding:15px 30px; border-radius:8px; font-weight:600; text-decoration:none;">
              Get Instant WhatsApp Estimate &rarr;
            </a>
          </div>
        </section>

        <!-- Related Dumka Relocation Routes & Services Cluster Navigation -->
        <section style="background:#ffffff; padding:35px 25px; border-radius:12px; border:1px solid #e2e8f0; margin-top:35px; box-shadow:0 2px 10px rgba(0,0,0,0.03);">
          <h3 style="font-size:1.25rem; color:#0f223d; font-weight:800; margin-bottom:12px;">
            Related Dumka Relocation Routes &amp; Moving Services
          </h3>
          <p style="color:#64748b; font-size:0.95rem; margin-bottom:18px; line-height:1.6;">
            Explore our specialized relocation services and trusted intercity transport corridors connecting Dumka across Jharkhand, West Bengal, Bihar, and Pan-India:
          </p>
          <div style="display:flex; flex-wrap:wrap; gap:12px; font-size:0.9rem;">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dumka" style="color:#0284c7; text-decoration:none; background:#f0f9ff; padding:9px 15px; border-radius:6px; font-weight:600; border:1px solid #bae6fd;">Packers and Movers in Dumka</a>
            <a href="<?php echo SITE_BASE_URL; ?>/household-shifting-services-in-dumka" style="color:#0284c7; text-decoration:none; background:#f0f9ff; padding:9px 15px; border-radius:6px; font-weight:600; border:1px solid #bae6fd;">Household Shifting in Dumka</a>
            <a href="<?php echo SITE_BASE_URL; ?>/car-transport-in-dumka" style="color:#0284c7; text-decoration:none; background:#f0f9ff; padding:9px 15px; border-radius:6px; font-weight:600; border:1px solid #bae6fd;">Car Transport in Dumka</a>
            <a href="<?php echo SITE_BASE_URL; ?>/bike-transport-in-dumka" style="color:#0284c7; text-decoration:none; background:#f0f9ff; padding:9px 15px; border-radius:6px; font-weight:600; border:1px solid #bae6fd;">Bike Transport in Dumka</a>
            <a href="<?php echo SITE_BASE_URL; ?>/dumka-to-ranchi-packers-and-movers" style="color:#0284c7; text-decoration:none; background:#f0f9ff; padding:9px 15px; border-radius:6px; font-weight:600; border:1px solid #bae6fd;">Dumka to Ranchi Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/dumka-to-kolkata-packers-and-movers" style="color:#ff6a28; text-decoration:none; background:#fff7ed; padding:9px 15px; border-radius:6px; font-weight:700; border:1px solid #fed7aa;">Dumka to Kolkata Movers (Current)</a>
            <a href="<?php echo SITE_BASE_URL; ?>/dumka-to-patna-packers-and-movers" style="color:#0284c7; text-decoration:none; background:#f0f9ff; padding:9px 15px; border-radius:6px; font-weight:600; border:1px solid #bae6fd;">Dumka to Patna Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/complete-guide-to-house-shifting-in-dumka" style="color:#0284c7; text-decoration:none; background:#f0f9ff; padding:9px 15px; border-radius:6px; font-weight:600; border:1px solid #bae6fd;">Dumka House Shifting Guide</a>
          </div>
        </section>

      </div>
    </article>

  </main>

  <!-- Global Footer -->
  <?php include __DIR__ . '/../includes/footer.php'; ?>
  <script src="<?php echo SITE_BASE_URL; ?>/assets/js/main.js" defer></script>
</body>
</html>
