<?php
/**
 * Household Shifting Services in Dumka - Shree Ashirwad Packers and Movers
 * 
 * High-performance, fully SEO-optimized landing page for residential relocation,
 * apartment shifting, villa packing, and local/intercity household moves in Dumka.
 * Sub-Capital (Up-Rajdhani) of Jharkhand & Santhal Pargana Division Hub.
 */

// Define page-specific metadata
$page_title = "Household Shifting Services in Dumka | Home Relocation - Shree Ashirwad";
$page_description = "Premium household shifting services in Dumka by Shree Ashirwad Packers and Movers. 5-layer packing, furniture dismantling, safe transport, door-to-door unpacking across Dumka & Basukinath. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/household-shifting-services-in-dumka";

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
  <meta name="keywords" content="household shifting services in dumka, home shifting in dumka, house relocation dumka, room shifting dumka, packers and movers household goods dumka, furniture shifting dumka, local house moving dumka">
  <link rel="canonical" href="<?php echo $canonical_url; ?>">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta property="og:url" content="<?php echo $canonical_url; ?>">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg">
  <meta property="og:image:alt" content="Professional Household Shifting and Packing in Dumka by Shree Ashirwad Packers">
  <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
  <meta property="og:locale" content="en_IN">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg">

  <!-- Geo Meta Tags for Dumka / Santhal Pargana -->
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
    "name": "Shree Ashirwad Packers and Movers - Household Shifting Dumka",
    "alternateName": "Dumka Home Relocation Services",
    "url": "<?php echo $canonical_url; ?>",
    "logo": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
    "image": "<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg",
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
      { "@type": "AdministrativeArea", "name": "Dumka District" },
      { "@type": "AdministrativeArea", "name": "Santhal Pargana Division" },
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
    "serviceType": "Residential Moving, Household Goods Relocation, Home Shifting & Furniture Packing",
    "name": "Household Shifting Services in Dumka",
    "provider": {
      "@type": "MovingCompany",
      "name": "Shree Ashirwad Packers and Movers",
      "telephone": "+918409531615",
      "url": "https://www.shreeashirwadpackers.com/"
    },
    "areaServed": [
      { "@type": "City", "name": "Dumka" },
      { "@type": "AdministrativeArea", "name": "Dumka District" }
    ],
    "description": "Comprehensive residential and apartment shifting in Dumka featuring 5-layer protective packing, furniture dismantling and reassembly, specialized kitchen crockery packing, covered container transit, and complete doorstep unpacking.",
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Dumka Household Moving Services",
      "itemListElement": [
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Local Flat & Apartment Shifting (1BHK, 2BHK, 3BHK)" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Intercity Residential Relocation from Dumka" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Furniture Dismantling, Wrapping & Reassembly" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "IBA Approved Bank & Government Transfer Moving Billing" } }
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
        "name": "Household Shifting Services in Dumka",
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
        "name": "What packing materials do you use for household shifting in Dumka?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We deploy a specialized 5-layer packing system: heavy-duty virgin air bubble wrap for fragile glassware and electronics, high-GSM corrugated sheets for furniture surfaces, stretch film for moisture-proofing, corner protectors, and customized wooden crates for LED TVs, marble temples, and mirrors."
        }
      },
      {
        "@type": "Question",
        "name": "Do your workers dismantle and reassemble large furniture?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. Our moving crew includes experienced carpenters equipped with modern power tools who safely dismantle modular double beds, wardrobes, dressing tables, and dining tables in Dumka, wrap each component in protective foam, and reassemble them at your new residence."
        }
      },
      {
        "@type": "Question",
        "name": "How much does local house shifting in Dumka cost?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Local intra-city household moves within Dumka generally cost between ₹3,500 and ₹6,000 for a 1 BHK, ₹5,500 to ₹9,500 for a standard 2 BHK, and ₹8,500 to ₹14,500 for a 3 BHK family house, covering complete packing, loading, transportation, unloading, and basic unpacking."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide transit insurance for household goods?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we provide 100% comprehensive transit insurance for all interstate and long-distance household moves originating from Dumka. The policy protects your entire consignment against highway accidents, vehicle rollover, theft, and natural catastrophes."
        }
      },
      {
        "@type": "Question",
        "name": "How are fragile kitchen items and crockery protected?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Each piece of glassware, bone china, ceramic cup, and dinner set is individually wrapped in multi-layer bubble wrap, placed inside partitioned corrugated boxes, and cushioned with foam peanuts or paper shreds. Cartons are marked 'FRAGILE – HANDLE WITH CARE'."
        }
      },
      {
        "@type": "Question",
        "name": "Can you handle household shifting to and from Basukinath or rural Dumka blocks?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. We serve the entire Dumka district including Basukinath Dham, Jarmundi, Jama, Shikaripara, Kathikund, Ranishwar, Gopikandar, Saraiyahat, and Hansdiha, providing full door-to-door packing and pickup."
        }
      },
      {
        "@type": "Question",
        "name": "How long does local house shifting take in Dumka?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "A standard 1 or 2 BHK local relocation within Dumka is typically completed within 5 to 8 hours on the same day. For larger 3 or 4 BHK homes, packing may begin the previous afternoon or early morning for complete same-day setup."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide official IBA bills for government and SKMU transfer reimbursement?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. Shree Ashirwad Packers and Movers provides authentic IBA-compliant consignment notes, itemized packing lists, GST invoices, and money receipts for government officers, police officials, judges, bank managers, and professors at SKMU and PJMCH."
        }
      },
      {
        "@type": "Question",
        "name": "Are there any items that cannot be loaded onto the moving truck?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. For safety and regulatory compliance, we do not transport hazardous materials, full LPG cylinders, petrol/diesel cans, fireworks, loose cash, fine jewelry, gold, or confidential personal property. Clients must carry currency and jewelry personally."
        }
      },
      {
        "@type": "Question",
        "name": "How can I book a free home shifting survey in Dumka?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "You can call our Dumka moving helpline directly at 8409531615 or send a message via WhatsApp. Our survey coordinator will arrange a free doorstep or instant video inventory assessment and provide a transparent, written quotation."
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
          <span aria-current="page" style="color:#ff6a28; font-weight:600;">Household Shifting</span>
        </nav>
        
        <h1 style="font-size: clamp(2.1rem, 4.2vw, 3.2rem); font-weight:800; line-height:1.2; margin-bottom:18px;">
          Household Shifting Services in Dumka
        </h1>
        
        <p style="font-size:1.15rem; line-height:1.75; color:#cbd5e1; max-width:920px; margin-bottom:28px;">
          Professional home relocation and household goods packing services in Dumka by Shree Ashirwad Packers and Movers. 5-layer protective packing, expert furniture dismantling and reassembly, specialized crockery crating, covered container transit, and 100% genuine IBA-compliant transfer bills across Santhal Pargana and Pan-India.
        </p>

        <div style="display:flex; flex-wrap:wrap; gap:16px; align-items:center;">
          <a href="tel:8409531615" style="display:inline-flex; align-items:center; gap:10px; background:#ff6a28; color:#ffffff; padding:14px 28px; border-radius:8px; font-weight:700; text-decoration:none; box-shadow: 0 4px 15px rgba(255,106,40,0.35);">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
            Book Home Move: 8409531615
          </a>
          <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="nofollow noopener noreferrer" style="display:inline-flex; align-items:center; gap:10px; background:rgba(255,255,255,0.08); border:1px solid rgba(255,255,255,0.25); color:#ffffff; padding:14px 26px; border-radius:8px; font-weight:600; text-decoration:none; backdrop-filter:blur(6px);">
            Get Free Moving Estimate &rarr;
          </a>
        </div>
      </div>
    </section>

    <!-- Operational Credentials Bar -->
    <section style="background:#ffffff; padding:28px 0; border-bottom:1px solid #e2e8f0;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">
        <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap:24px; align-items:center;">
          <div style="display:flex; align-items:center; gap:14px;">
            <div style="background:#fff2eb; color:#ff6a28; width:48px; height:48px; border-radius:10px; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:1.1rem;">5-LYR</div>
            <div>
              <div style="font-weight:700; color:#0f223d;">5-Layer Packing</div>
              <div style="font-size:0.85rem; color:#64748b;">Zero Breakage Guarantee</div>
            </div>
          </div>
          <div style="display:flex; align-items:center; gap:14px;">
            <div style="background:#e0f2fe; color:#0284c7; width:48px; height:48px; border-radius:10px; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:1.1rem;">CARP</div>
            <div>
              <div style="font-weight:700; color:#0f223d;">Expert Carpenters</div>
              <div style="font-size:0.85rem; color:#64748b;">Furniture Dismantling &amp; Setup</div>
            </div>
          </div>
          <div style="display:flex; align-items:center; gap:14px;">
            <div style="background:#f0fdf4; color:#16a34a; width:48px; height:48px; border-radius:10px; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:1.2rem;">✓</div>
            <div>
              <div style="font-weight:700; color:#0f223d;">IBA Approved</div>
              <div style="font-size:0.85rem; color:#64748b;">100% Audit Reimbursement</div>
            </div>
          </div>
          <div style="display:flex; align-items:center; gap:14px;">
            <div style="background:#fef3c7; color:#d97706; width:48px; height:48px; border-radius:10px; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:1.1rem;">DOOR</div>
            <div>
              <div style="font-weight:700; color:#0f223d;">Door-to-Door Delivery</div>
              <div style="font-size:0.85rem; color:#64748b;">Unpacking &amp; Debris Removal</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Visual Showcase Gallery -->
    <section style="background:#f8fafc; padding:45px 0;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">
        <div style="text-align:center; margin-bottom:32px;">
          <h2 style="font-size:1.9rem; color:#0f223d; font-weight:800;">Real Household Relocation Operations in Jharkhand</h2>
          <p style="color:#64748b; max-width:680px; margin:8px auto 0;">Authentic field photographs showing our trained packing crew, furniture dismantling, bubble wrapping, and truck loading across Dumka and Jharkhand.</p>
        </div>

        <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap:24px;">
          <div style="background:#ffffff; border-radius:12px; overflow:hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border:1px solid #e2e8f0;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="5-layer bubble wrap household packing in Dumka" style="width:100%; height:230px; object-fit:cover; display:block;" loading="lazy">
            <div style="padding:18px;">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Multi-Layer Protective Packing</h3>
              <p style="color:#64748b; font-size:0.9rem; line-height:1.6; margin:0;">Heavy-duty bubble wrap, foam sheets, and high-GSM corrugated cartons protecting fragile household belongings against rough road vibration.</p>
            </div>
          </div>

          <div style="background:#ffffff; border-radius:12px; overflow:hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border:1px solid #e2e8f0;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Double bed furniture dismantling and reassembly service" style="width:100%; height:230px; object-fit:cover; display:block;" loading="lazy">
            <div style="padding:18px;">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Furniture Dismantling &amp; Reassembly</h3>
              <p style="color:#64748b; font-size:0.9rem; line-height:1.6; margin:0;">Experienced carpenters safely deconstruct double beds, modular wardrobes, and dining sets, wrapping each wooden panel separately.</p>
            </div>
          </div>

          <div style="background:#ffffff; border-radius:12px; overflow:hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border:1px solid #e2e8f0;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Loading household goods onto covered container truck in Jharkhand" style="width:100%; height:230px; object-fit:cover; display:block;" loading="lazy">
            <div style="padding:18px;">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Weatherproof Container Loading</h3>
              <p style="color:#64748b; font-size:0.9rem; line-height:1.6; margin:0;">Scientific weight distribution and safety strapping inside closed container trucks ensuring complete protection against rain, dust, and transit shifting.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Main Content Editorial Article -->
    <article style="padding:55px 0; background:#ffffff;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">

        <!-- Section: Overview of Household Shifting in Dumka -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.95rem; color:#0f223d; font-weight:800; margin-bottom:18px;">
            Trusted Household Relocation Services Across Dumka and Santhal Pargana
          </h2>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:18px;">
            Moving an entire family home is one of life's most demanding transitions. In Dumka, the administrative Sub-Capital (Up-Rajdhani) of Jharkhand, household relocations are frequent. As the divisional headquarters of Santhal Pargana, the city is home to officials of the <strong>Jharkhand Administrative Service (JAS)</strong>, police commanders, district judiciary staff, medical faculty at <strong>Phulo Jhano Murmu Medical College and Hospital (PJMCH)</strong>, university professors at <strong>Sido Kanhu Murmu University (SKMU)</strong>, and nationalized bank managers.
          </p>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:18px;">
            At <strong>Shree Ashirwad Packers and Movers</strong>, we understand that household shifting is not merely transporting boxes; it is transferring memories, costly electronic appliances, fragile heirloom crockery, sacred pooja idols, and heavy solid wood furniture. Our fully certified moving crew takes complete ownership of your move from the initial inventory survey to final room-wise placement at your new home.
          </p>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155;">
            Whether you are relocating within Dumka—from Tin Bazar to Dudhani, Court Road to Bandarjori, or Rasikpur to Karharbil—or planning an intercity move to Ranchi, Kolkata, Patna, Delhi NCR, or Bengaluru, our specialized packing teams ensure zero breakage, punctual delivery, and a peaceful shifting experience.
          </p>
        </section>

        <!-- Section: 5-Layer Packing System -->
        <section style="margin-bottom:50px; background:#f8fafc; padding:35px 25px; border-radius:12px; border:1px solid #e2e8f0;">
          <h2 style="font-size:1.85rem; color:#0f223d; font-weight:800; margin-bottom:16px;">
            Our Scientific 5-Layer Household Packing Standard
          </h2>
          <p style="font-size:1.02rem; line-height:1.75; color:#475569; margin-bottom:24px;">
            The highway routes radiating from Dumka (such as NH-114A, NH-133, and winding state roads toward West Bengal and Bihar) can feature uneven asphalt, sudden speed breakers, and mining traffic. To protect your home belongings against vibration, moisture, and impact, we implement our signature 5-layer packing methodology:
          </p>

          <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap:20px;">
            <div style="background:#ffffff; border-radius:10px; padding:20px; border:1px solid #e2e8f0; box-shadow:0 2px 6px rgba(0,0,0,0.03);">
              <div style="font-weight:800; color:#ff6a28; font-size:1.1rem; margin-bottom:8px;">Layer 1: Cling &amp; Stretch Film Wrap</div>
              <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
                Shields sofa upholstery, mattresses, wooden finishes, and electronics against humid Santhal Pargana air, fine road dust, scratches, and rain moisture.
              </p>
            </div>

            <div style="background:#ffffff; border-radius:10px; padding:20px; border:1px solid #e2e8f0; box-shadow:0 2px 6px rgba(0,0,0,0.03);">
              <div style="font-weight:800; color:#0284c7; font-size:1.1rem; margin-bottom:8px;">Layer 2: Heavy-Gauge Virgin Bubble Wrap</div>
              <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
                Absorbs mechanical shocks and transit vibrations. Wrapped around glass dining tables, LED TV screens, microwave ovens, refrigerators, and fine bone china.
              </p>
            </div>

            <div style="background:#ffffff; border-radius:10px; padding:20px; border:1px solid #e2e8f0; box-shadow:0 2px 6px rgba(0,0,0,0.03);">
              <div style="font-weight:800; color:#16a34a; font-size:1.1rem; margin-bottom:8px;">Layer 3: 5-Ply Corrugated Sheets &amp; Foam</div>
              <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
                High-GSM corrugated cardboards and foam edge corner protectors custom-fitted over furniture corners, bed panels, almirahs, and washing machines.
              </p>
            </div>

            <div style="background:#ffffff; border-radius:10px; padding:20px; border:1px solid #e2e8f0; box-shadow:0 2px 6px rgba(0,0,0,0.03);">
              <div style="font-weight:800; color:#d97706; font-size:1.1rem; margin-bottom:8px;">Layer 4: Reinforced Outer Cartons &amp; Crates</div>
              <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
                Heavy-duty corrugated boxes for kitchenware, books, clothing, and personalized wooden crating for large ultra-thin OLED screens and marble temples.
              </p>
            </div>

            <div style="background:#ffffff; border-radius:10px; padding:20px; border:1px solid #e2e8f0; box-shadow:0 2px 6px rgba(0,0,0,0.03); grid-column: 1 / -1;">
              <div style="font-weight:800; color:#7c3aed; font-size:1.1rem; margin-bottom:8px;">Layer 5: Poly-Strapping, Security Taping &amp; Color-Coded Room Labels</div>
              <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
                Boxes are tightly cross-taped with industrial adhesive tape, strapped with heavy plastic binding cords, and marked with color-coded labels (e.g., "Master Bedroom", "Kitchen – Fragile", "Kids Room") to streamline organized unpacking at your new residence.
              </p>
            </div>
          </div>
        </section>

        <!-- Section: Room-by-Room Shifting Guide -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.95rem; color:#0f223d; font-weight:800; margin-bottom:18px;">
            Room-by-Room Packing &amp; Protection Methodology
          </h2>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:24px;">
            Every area of a family home presents unique moving challenges. Our experienced Dumka packers follow customized handling procedures for every category of household goods:
          </p>

          <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap:22px;">
            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:8px;">1. Living &amp; Drawing Room</h3>
              <p style="font-size:0.93rem; color:#475569; line-height:1.65; margin:0;">
                Sofas, recliners, and coffee tables are covered in thick stretch film and bubble sheets to prevent fabric tearing or scuffing. Glass table tops are boxed in customized thermocol casings. Wall art, chandeliers, and decorative statues receive bespoke foam padding.
              </p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:8px;">2. Modular Kitchen &amp; Crockery</h3>
              <p style="font-size:0.93rem; color:#475569; line-height:1.65; margin:0;">
                Each glass tumbler, dinner plate, spice container, and ceramic mug is wrapped in double-layer bubble film. Stainless steel utensils are nested to optimize carton space. Chimneys, water purifiers, and microwaves are safely dismounted, packed, and secured.
              </p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:8px;">3. Bedroom &amp; Modular Wardrobes</h3>
              <p style="font-size:0.93rem; color:#475569; line-height:1.65; margin:0;">
                Our carpenters unbolt hydraulic king-size beds, modular almirahs, and study desks. Mattresses are sealed in water-resistant plastic covers. Clothes and linens are packed in clean, heavy-duty wardrobe cartons to keep them wrinkle-free and dust-free.
              </p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:8px;">4. Home Appliances &amp; Electronics</h3>
              <p style="font-size:0.93rem; color:#475569; line-height:1.65; margin:0;">
                Refrigerators are defrosted, dry-cleaned, and wrapped in bubble wrap with compressor immobilizers. Washing machines are locked with transit bolts. Split air conditioners are carefully uninstalled with gas trapped by trained technicians.
              </p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:8px;">5. Mandir &amp; Sacred Pooja Idols</h3>
              <p style="font-size:0.93rem; color:#475569; line-height:1.65; margin:0;">
                We treat pooja mandirs and sacred deities with the utmost cultural reverence. Deities of brass, marble, or clay are cleaned, wrapped in clean soft white paper, cushioned in bubble foam, and packed in dedicated sacred cartons placed in priority positions in the truck.
              </p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:8px;">6. Home Office &amp; Study Library</h3>
              <p style="font-size:0.93rem; color:#475569; line-height:1.65; margin:0;">
                For university professors at SKMU and advocates at Dumka Court, we provide heavy-duty book cartons with reinforced bottoms to carry academic textbooks, case files, desktop computers, printers, and document organizers safely.
              </p>
            </div>
          </div>
        </section>

        <!-- Section: Cost Matrix Table -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.95rem; color:#0f223d; font-weight:800; margin-bottom:18px;">
            Household Shifting Rate Matrix in Dumka (Local &amp; Intercity)
          </h2>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:20px;">
            We believe in honest, crystal-clear pricing without hidden surcharges or post-move extortion. Below is an approximate cost breakdown for local house shifting within Dumka town as well as intercity residential relocation from Dumka:
          </p>

          <div style="overflow-x:auto;">
            <table style="width:100%; border-collapse:collapse; font-size:0.95rem; background:#ffffff; border:1px solid #e2e8f0; border-radius:8px; overflow:hidden;">
              <thead>
                <tr style="background:#0f223d; color:#ffffff; text-align:left;">
                  <th style="padding:14px 16px;">Home Configuration</th>
                  <th style="padding:14px 16px;">Packing Materials &amp; Crew</th>
                  <th style="padding:14px 16px;">Local Shifting (Within Dumka)</th>
                  <th style="padding:14px 16px;">To Ranchi / Kolkata (~280 km)</th>
                  <th style="padding:14px 16px;">To Delhi NCR / Bengaluru (Long-Distance)</th>
                </tr>
              </thead>
              <tbody>
                <tr style="border-bottom:1px solid #e2e8f0;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">1 BHK / Studio Flat</td>
                  <td style="padding:12px 16px; color:#64748b;">15–20 Cartons, 2–3 Packers</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹3,500 – ₹5,800</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹10,500 – ₹15,000</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹21,000 – ₹29,000</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">2 BHK Standard Home</td>
                  <td style="padding:12px 16px; color:#64748b;">30–45 Cartons, 3–4 Packers</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹5,500 – ₹9,500</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹15,000 – ₹22,000</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹32,000 – ₹44,000</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">3 BHK Spacious Family House</td>
                  <td style="padding:12px 16px; color:#64748b;">55–75 Cartons, 4–6 Packers</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹8,500 – ₹14,500</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹22,000 – ₹32,000</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹45,000 – ₹62,000</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">4 BHK / Large Bungalow / Villa</td>
                  <td style="padding:12px 16px; color:#64748b;">80+ Cartons, 6–8 Packers + Carpenter</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹12,500 – ₹19,500</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹30,000 – ₹42,000</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹60,000 – ₹85,000</td>
                </tr>
                <tr>
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">Few Household Goods / Few Items</td>
                  <td style="padding:12px 16px; color:#64748b;">Custom Small Truck / Shared Load</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹2,500 – ₹4,000</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹6,000 – ₹9,500</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹12,000 – ₹18,000</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p style="font-size:0.85rem; color:#64748b; margin-top:10px;">
            *Note: Rates vary depending on floor level, availability of elevators, walking distance from truck to doorstep, and special crating requirements. Full transit insurance is charged at 1.5% - 2% of the declared goods valuation.
          </p>
        </section>

        <!-- Section: Doorstep Coverage in Dumka -->
        <section style="margin-bottom:50px; background:#ffffff;">
          <h2 style="font-size:1.95rem; color:#0f223d; font-weight:800; margin-bottom:18px;">
            Comprehensive Shifting Coverage Across Dumka Localities &amp; Sub-Divisions
          </h2>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:20px;">
            Whether you reside in the congested commercial alleys of Tin Bazar or modern residential developments along Court Road, our local fleet of mini-trucks (Tata Ace, Mahindra Bolero Maxi Truck) and enclosed full-size container vehicles can easily reach your door:
          </p>

          <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap:18px;">
            <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:8px; padding:18px;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Core Municipal Localities</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.6; margin:0;">
                Tin Bazar, Court Road, Dudhani, Rasikpur, Bandarjori, Karharbil, Tata Showroom Chowk, Purana Dumka, Dighee, Babu Para, and Dangalpara.
              </p>
            </div>
            <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:8px; padding:18px;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Institutional &amp; Quarters Area</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.6; margin:0;">
                Sido Kanhu Murmu University (SKMU) campus residential colony, PJMCH Doctors Quarters, Police Line Colony, District Judge &amp; Collectorate staff quarters.
              </p>
            </div>
            <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:8px; padding:18px;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Basukinath Dham &amp; Sub-Divisions</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.6; margin:0;">
                Basukinath Dham holy township (~24 km), Jarmundi, Jama, Shikaripara, Kathikund, Ranishwar, Gopikandar, Saraiyahat, and Hansdiha.
              </p>
            </div>
            <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:8px; padding:18px;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Interstate Corridor Junctions</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.6; margin:0;">
                Highway staging points toward Suri, Asansol, and Rampurhat (West Bengal), as well as northern links toward Banka, Deoghar, and Bhagalpur (Bihar).
              </p>
            </div>
          </div>
        </section>

        <!-- Section: IBA Approved Government & Banking Shifting -->
        <section style="margin-bottom:50px; background:#f0fdf4; border:1px solid #bbf7d0; border-radius:12px; padding:32px 26px;">
          <h2 style="font-size:1.85rem; color:#14532d; font-weight:800; margin-bottom:14px;">
            100% IBA-Approved Billing for Government &amp; PSU Transfers in Dumka
          </h2>
          <p style="font-size:1.02rem; line-height:1.75; color:#166534; margin-bottom:16px;">
            Are you an employee of the Jharkhand Government, State Bank of India, Bank of India, Indian Railway, defense services, or university faculty moving on transfer from Dumka? We provide audit-compliant relocation documentation that guarantees 100% reimbursement from your department without audit objections.
          </p>
          <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap:14px;">
            <div style="background:#ffffff; padding:14px; border-radius:6px; border:1px solid #dcfce7; font-size:0.92rem; color:#14532d; font-weight:600;">
              ✓ IBA-Approved Consignment Note (Lorry Receipt / LR)
            </div>
            <div style="background:#ffffff; padding:14px; border-radius:6px; border:1px solid #dcfce7; font-size:0.92rem; color:#14532d; font-weight:600;">
              ✓ Itemized Household Inventory Packing List
            </div>
            <div style="background:#ffffff; padding:14px; border-radius:6px; border:1px solid #dcfce7; font-size:0.92rem; color:#14532d; font-weight:600;">
              ✓ Official GST-Registered Tax Invoice
            </div>
            <div style="background:#ffffff; padding:14px; border-radius:6px; border:1px solid #dcfce7; font-size:0.92rem; color:#14532d; font-weight:600;">
              ✓ Marine Transit Insurance Policy Certificate
            </div>
          </div>
        </section>

        <!-- Section: Frequently Asked Questions (FAQ) -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.95rem; color:#0f223d; font-weight:800; margin-bottom:24px;">
            Frequently Asked Questions (FAQs) – Household Shifting in Dumka
          </h2>

          <div style="display:flex; flex-direction:column; gap:16px;">
            
            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">What packing materials do you use for household shifting in Dumka?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">We deploy a specialized 5-layer packing system: heavy-duty virgin air bubble wrap for fragile glassware and electronics, high-GSM corrugated sheets for furniture surfaces, stretch film for moisture-proofing, corner protectors, and customized wooden crates for LED TVs, marble temples, and mirrors.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Do your workers dismantle and reassemble large furniture?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Yes. Our moving crew includes experienced carpenters equipped with modern power tools who safely dismantle modular double beds, wardrobes, dressing tables, and dining tables in Dumka, wrap each component in protective foam, and reassemble them at your new residence.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">How much does local house shifting in Dumka cost?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Local intra-city household moves within Dumka generally cost between ₹3,500 and ₹6,000 for a 1 BHK, ₹5,500 to ₹9,500 for a standard 2 BHK, and ₹8,500 to ₹14,500 for a 3 BHK family house, covering complete packing, loading, transportation, unloading, and basic unpacking.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Do you provide transit insurance for household goods?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Yes, we provide 100% comprehensive transit insurance for all interstate and long-distance household moves originating from Dumka. The policy protects your entire consignment against highway accidents, vehicle rollover, theft, and natural catastrophes.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">How are fragile kitchen items and crockery protected?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Each piece of glassware, bone china, ceramic cup, and dinner set is individually wrapped in multi-layer bubble wrap, placed inside partitioned corrugated boxes, and cushioned with foam peanuts or paper shreds. Cartons are marked 'FRAGILE – HANDLE WITH CARE'.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Can you handle household shifting to and from Basukinath or rural Dumka blocks?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Yes. We serve the entire Dumka district including Basukinath Dham, Jarmundi, Jama, Shikaripara, Kathikund, Ranishwar, Gopikandar, Saraiyahat, and Hansdiha, providing full door-to-door packing and pickup.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">How long does local house shifting take in Dumka?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">A standard 1 or 2 BHK local relocation within Dumka is typically completed within 5 to 8 hours on the same day. For larger 3 or 4 BHK homes, packing may begin the previous afternoon or early morning for complete same-day setup.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Do you provide official IBA bills for government and SKMU transfer reimbursement?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Yes. Shree Ashirwad Packers and Movers provides authentic IBA-compliant consignment notes, itemized packing lists, GST invoices, and money receipts for government officers, police officials, judges, bank managers, and professors at SKMU and PJMCH.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Are there any items that cannot be loaded onto the moving truck?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Yes. For safety and regulatory compliance, we do not transport hazardous materials, full LPG cylinders, petrol/diesel cans, fireworks, loose cash, fine jewelry, gold, or confidential personal property. Clients must carry currency and jewelry personally.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">How can I book a free home shifting survey in Dumka?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">You can call our Dumka moving helpline directly at 8409531615 or send a message via WhatsApp. Our survey coordinator will arrange a free doorstep or instant video inventory assessment and provide a transparent, written quotation.</p>
            </div>

          </div>
        </section>

        <!-- Final Call to Action Box -->
        <section style="background: linear-gradient(135deg, #0f223d 0%, #1a3a5f 100%); color:#ffffff; padding:45px 35px; border-radius:14px; text-align:center;">
          <h2 style="font-size:2rem; font-weight:800; margin-bottom:14px;">Planning Your Household Move in Dumka?</h2>
          <p style="font-size:1.1rem; color:#cbd5e1; max-width:700px; margin:0 auto 28px;">
            Get a guaranteed moving quote with zero hidden charges, 5-layer protective packing, expert carpentry setup, and full transit insurance coverage.
          </p>
          <div style="display:flex; justify-content:center; flex-wrap:wrap; gap:16px;">
            <a href="tel:8409531615" style="display:inline-flex; align-items:center; gap:8px; background:#ff6a28; color:#ffffff; padding:15px 30px; border-radius:8px; font-weight:700; text-decoration:none; box-shadow:0 4px 15px rgba(255,106,40,0.35);">
              Call Dumka Moving Desk: 8409531615
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
            <a href="<?php echo SITE_BASE_URL; ?>/household-shifting-services-in-dumka" style="color:#ff6a28; text-decoration:none; background:#fff7ed; padding:9px 15px; border-radius:6px; font-weight:700; border:1px solid #fed7aa;">Household Shifting in Dumka (Current)</a>
            <a href="<?php echo SITE_BASE_URL; ?>/car-transport-in-dumka" style="color:#0284c7; text-decoration:none; background:#f0f9ff; padding:9px 15px; border-radius:6px; font-weight:600; border:1px solid #bae6fd;">Car Transport in Dumka</a>
            <a href="<?php echo SITE_BASE_URL; ?>/bike-transport-in-dumka" style="color:#0284c7; text-decoration:none; background:#f0f9ff; padding:9px 15px; border-radius:6px; font-weight:600; border:1px solid #bae6fd;">Bike Transport in Dumka</a>
            <a href="<?php echo SITE_BASE_URL; ?>/dumka-to-ranchi-packers-and-movers" style="color:#0284c7; text-decoration:none; background:#f0f9ff; padding:9px 15px; border-radius:6px; font-weight:600; border:1px solid #bae6fd;">Dumka to Ranchi Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/dumka-to-kolkata-packers-and-movers" style="color:#0284c7; text-decoration:none; background:#f0f9ff; padding:9px 15px; border-radius:6px; font-weight:600; border:1px solid #bae6fd;">Dumka to Kolkata Movers</a>
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
