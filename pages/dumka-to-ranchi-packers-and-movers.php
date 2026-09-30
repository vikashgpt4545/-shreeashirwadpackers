<?php
/**
 * Dumka to Ranchi Packers and Movers - Shree Ashirwad Packers and Movers
 * 
 * High-performance, fully SEO-optimized corridor landing page for household shifting,
 * car carrier transport, bike courier, and office relocation connecting
 * Dumka (Sub-Capital / Up-Rajdhani) to Ranchi (State Capital of Jharkhand).
 */

// Define page-specific metadata
$page_title = "Dumka to Ranchi Packers and Movers | Shifting Service - Shree Ashirwad";
$page_description = "Dependable Dumka to Ranchi packers and movers by Shree Ashirwad Packers. Dedicated container trucks, 24-48 hr delivery, car & bike shipping, 5-layer packing, IBA approved bills. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/dumka-to-ranchi-packers-and-movers";

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
  <meta name="keywords" content="dumka to ranchi packers and movers, packers and movers dumka to ranchi, household shifting dumka to ranchi, car transport dumka to ranchi, bike parcel dumka to ranchi, goods transport dumka to ranchi">
  <link rel="canonical" href="<?php echo $canonical_url; ?>">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta property="og:url" content="<?php echo $canonical_url; ?>">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg">
  <meta property="og:image:alt" content="Dumka to Ranchi Intercity Moving Truck Loading by Shree Ashirwad Packers">
  <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
  <meta property="og:locale" content="en_IN">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg">

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
    "name": "Shree Ashirwad Packers and Movers - Dumka to Ranchi Route",
    "alternateName": "Dumka Ranchi Intercity Movers",
    "url": "<?php echo $canonical_url; ?>",
    "logo": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
    "image": "<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg",
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
      { "@type": "City", "name": "Ranchi" },
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
    "serviceType": "Intercity Relocation, Household Shifting, Car Shipping & Bike Parcel",
    "name": "Dumka to Ranchi Packers and Movers Service",
    "provider": {
      "@type": "MovingCompany",
      "name": "Shree Ashirwad Packers and Movers",
      "telephone": "+918409531615",
      "url": "https://www.shreeashirwadpackers.com/"
    },
    "areaServed": [
      { "@type": "City", "name": "Dumka" },
      { "@type": "City", "name": "Ranchi" }
    ],
    "description": "Specialized intercity relocation services connecting Dumka (Sub-Capital) to Ranchi (State Capital) via NH-114A. Features dedicated sealed container trucks, 24 to 48-hour delivery, zero transshipment, full-value transit insurance, and IBA-approved billing.",
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Dumka to Ranchi Relocation Services",
      "itemListElement": [
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Dedicated Full Truck Load Shifting (Dumka to Ranchi)" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Part-Load Shared Container Moving" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Doorstep Car Transport & Bike Parcel" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Government & Secretariat Official Transfer Billing" } }
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
        "name": "Dumka to Ranchi Movers",
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
        "name": "How long does household goods transport take from Dumka to Ranchi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "For a dedicated container vehicle (Full Truck Load), transit takes approximately 24 to 36 hours. The distance between Dumka and Ranchi is roughly 280 to 295 km via NH-114A. Loading occurs on Day 1 in Dumka, highway travel takes 7-9 hours, and delivery with unloading and setup is completed in Ranchi on Day 2."
        }
      },
      {
        "@type": "Question",
        "name": "How much does it cost to hire packers and movers from Dumka to Ranchi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Rates typically range between ₹10,500 and ₹15,000 for a 1 BHK home, ₹15,000 and ₹22,000 for a standard 2 BHK, and ₹22,000 to ₹32,000 for a 3 BHK family house. Car shipping ranges from ₹5,500 to ₹9,500, and two-wheeler bike parcel ranges from ₹2,500 to ₹4,500."
        }
      },
      {
        "@type": "Question",
        "name": "Which highway route is taken from Dumka to Ranchi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Our carriers navigate primarily via NH-114A and State Highway corridors connecting Dumka through Deoghar, Madhupur, Giridih or Jamtara onto Grand Trunk Road (NH-19) and NH-20 toward Ramgarh and Ranchi. Our drivers are thoroughly trained on these regional ghats and highway bypasses."
        }
      },
      {
        "@type": "Question",
        "name": "Do you deliver across all neighborhoods in Ranchi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we provide direct door-to-door delivery across all areas of Ranchi including Kanke Road, Morabadi, Bariatu, Doranda, Ashok Nagar, Lalpur, Harmu Housing Colony, Hinoo, Namkum, Ratu Road, Dhurwa (near Project Bhawan & High Court), and Tupudana."
        }
      },
      {
        "@type": "Question",
        "name": "Do you transship goods into another truck between Dumka and Ranchi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "No. When you book a dedicated relocation with Shree Ashirwad Packers, your goods are loaded into our container truck in Dumka, secured, locked, and transported directly to your delivery destination in Ranchi without any intermediate transshipment or warehouse offloading."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide IBA-approved billing for Secretariat and government transfers?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. As Dumka is the Sub-Capital and Ranchi is the State Capital, we regularly handle official transfers for Jharkhand Administrative Service (JAS) officers, Secretariat staff at Project Bhawan, High Court advocates, and PSU bank managers. We provide 100% audit-compliant IBA bills, GST invoices, and consignment notes."
        }
      },
      {
        "@type": "Question",
        "name": "Can I transport my car or bike along with my household items in the same truck?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. We operate customized 19-foot and 22-foot multi-purpose container trucks equipped with dedicated vehicle ramps and wheel chocks. We can securely transport your household goods alongside your car or motorcycle in a single vehicle, reducing relocation costs."
        }
      },
      {
        "@type": "Question",
        "name": "Is transit insurance mandatory for Dumka to Ranchi moving?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Transit insurance is highly recommended. It covers unforeseen road risks such as collision, overturn, fire, and flood damage. We arrange comprehensive transit insurance policies through leading nationalized insurers at nominal premium rates."
        }
      },
      {
        "@type": "Question",
        "name": "Can you dismantle and reassemble modular furniture at both ends?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. Our skilled carpenters dismantle double beds, modular wardrobes, and dining tables at your home in Dumka, pack them with protective foam sheets, and reassemble them at your new address in Ranchi."
        }
      },
      {
        "@type": "Question",
        "name": "How can I book a moving slot for Dumka to Ranchi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Simply call our moving desk at 8409531615 or contact us through WhatsApp. We will conduct a free pre-move inventory survey and provide a guaranteed, written all-inclusive quotation."
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
          <span aria-current="page" style="color:#ff6a28; font-weight:600;">Dumka to Ranchi Movers</span>
        </nav>
        
        <h1 style="font-size: clamp(2.1rem, 4.2vw, 3.2rem); font-weight:800; line-height:1.2; margin-bottom:18px;">
          Dumka to Ranchi Packers and Movers
        </h1>
        
        <p style="font-size:1.15rem; line-height:1.75; color:#cbd5e1; max-width:920px; margin-bottom:28px;">
          Fast, direct, and certified relocation connecting Jharkhand's Sub-Capital (Dumka) to the State Capital (Ranchi). Dedicated container trucks, 24 to 36-hour guaranteed doorstep delivery, zero transshipment risk, 5-layer shockproof packing, full vehicle carrier transport, and 100% genuine IBA-approved transfer bills.
        </p>

        <div style="display:flex; flex-wrap:wrap; gap:16px; align-items:center;">
          <a href="tel:8409531615" style="display:inline-flex; align-items:center; gap:10px; background:#ff6a28; color:#ffffff; padding:14px 28px; border-radius:8px; font-weight:700; text-decoration:none; box-shadow: 0 4px 15px rgba(255,106,40,0.35);">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
            Book Corridor Move: 8409531615
          </a>
          <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="nofollow noopener noreferrer" style="display:inline-flex; align-items:center; gap:10px; background:rgba(255,255,255,0.08); border:1px solid rgba(255,255,255,0.25); color:#ffffff; padding:14px 26px; border-radius:8px; font-weight:600; text-decoration:none; backdrop-filter:blur(6px);">
            WhatsApp Route Quote &rarr;
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
              <div style="font-size:0.85rem; color:#64748b;">Direct Route via NH-114A</div>
            </div>
          </div>
          <div style="display:flex; align-items:center; gap:14px;">
            <div style="background:#e0f2fe; color:#0284c7; width:48px; height:48px; border-radius:10px; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:1.1rem;">ZERO</div>
            <div>
              <div style="font-weight:700; color:#0f223d;">Zero Transshipment</div>
              <div style="font-size:0.85rem; color:#64748b;">Same Sealed Truck Handover</div>
            </div>
          </div>
          <div style="display:flex; align-items:center; gap:14px;">
            <div style="background:#f0fdf4; color:#16a34a; width:48px; height:48px; border-radius:10px; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:1.2rem;">✓</div>
            <div>
              <div style="font-weight:700; color:#0f223d;">IBA Approved</div>
              <div style="font-size:0.85rem; color:#64748b;">Secretariat &amp; Bank Claims</div>
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
          <h2 style="font-size:1.9rem; color:#0f223d; font-weight:800;">Real Intercity Moving Fleet &amp; Highway Logistics</h2>
          <p style="color:#64748b; max-width:680px; margin:8px auto 0;">Authentic field photographs showing our dedicated container trucks, loading crews, and door-to-door transit operations between Dumka and Ranchi.</p>
        </div>

        <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap:24px;">
          <div style="background:#ffffff; border-radius:12px; overflow:hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border:1px solid #e2e8f0;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg" alt="Intercity shifting truck loading in Dumka for Ranchi" style="width:100%; height:230px; object-fit:cover; display:block;" loading="lazy">
            <div style="padding:18px;">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Direct Highway Container Trucks</h3>
              <p style="color:#64748b; font-size:0.9rem; line-height:1.6; margin:0;">Heavy-duty closed container vehicles optimized for the 280 km highway transit between Santhal Pargana and Ranchi via NH-114A.</p>
            </div>
          </div>

          <div style="background:#ffffff; border-radius:12px; overflow:hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border:1px solid #e2e8f0;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/waterproof-container-loading-jharkhand.jpg" alt="Sealed waterproof container loading in Dumka" style="width:100%; height:230px; object-fit:cover; display:block;" loading="lazy">
            <div style="padding:18px;">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Sealed Waterproof Cargo</h3>
              <p style="color:#64748b; font-size:0.9rem; line-height:1.6; margin:0;">Complete protection against rain showers, dust, and highway turbulence, ensuring electronic appliances and furniture remain dry and secure.</p>
            </div>
          </div>

          <div style="background:#ffffff; border-radius:12px; overflow:hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border:1px solid #e2e8f0;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Doorstep delivery truck in Ranchi" style="width:100%; height:230px; object-fit:cover; display:block;" loading="lazy">
            <div style="padding:18px;">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Door-to-Door Delivery in Ranchi</h3>
              <p style="color:#64748b; font-size:0.9rem; line-height:1.6; margin:0;">Prompt unloading, elevator carrying, room-by-room box positioning, and furniture reassembly across all residential sectors of Ranchi.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Main Content Editorial Article -->
    <article style="padding:55px 0; background:#ffffff;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">

        <!-- Section: Strategic Highway & Administrative Overview -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.95rem; color:#0f223d; font-weight:800; margin-bottom:18px;">
            Connecting the Sub-Capital (Dumka) to the State Capital (Ranchi)
          </h2>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:18px;">
            The relocation corridor connecting <strong>Dumka to Ranchi</strong> is one of the most vital administrative and commercial moving arteries in the state of Jharkhand. As the administrative Sub-Capital (Up-Rajdhani) and divisional headquarters of Santhal Pargana, Dumka sees continuous official transfers of senior bureaucrats, judicial officers from the Dumka District Court, police officers, medical staff from <strong>Phulo Jhano Murmu Medical College and Hospital (PJMCH)</strong>, professors from <strong>Sido Kanhu Murmu University (SKMU)</strong>, and PSU banking managers to headquarters in Ranchi (Project Bhawan, Nepal House, Jharkhand High Court, Doranda, Morabadi, and Kanke).
          </p>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:18px;">
            Covering an approximate distance of <strong>280 to 295 kilometers</strong>, this route demands an experienced logistics provider who understands the topography of Central and Eastern Jharkhand. Unlike local movers who lack highway transport permits or commercial brokers who dump consignments at intermediate godowns, <strong>Shree Ashirwad Packers and Movers</strong> operates dedicated, direct-transit container vehicles. We load your home goods at your doorstep in Dumka, seal the container, and deliver directly to your new home in Ranchi within <strong>24 to 36 hours</strong> without any intermediate transshipment.
          </p>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155;">
            From delicate kitchen chinaware and smart OLED televisions to heavy double beds, family cars, and commuter motorbikes, our certified moving crews manage every stage of your relocation with unmatched efficiency and complete transit insurance coverage.
          </p>
        </section>

        <!-- Section: Route Analysis & Highway Logistics -->
        <section style="margin-bottom:50px; background:#f8fafc; padding:35px 25px; border-radius:12px; border:1px solid #e2e8f0;">
          <h2 style="font-size:1.85rem; color:#0f223d; font-weight:800; margin-bottom:16px;">
            Highway Route Breakdown: Dumka to Ranchi (NH-114A / NH-19 / NH-20)
          </h2>
          <p style="font-size:1.02rem; line-height:1.75; color:#475569; margin-bottom:24px;">
            Our heavy-duty commercial container fleet navigates tested highway corridors to ensure smooth, timely, and vibration-minimized goods transit:
          </p>

          <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap:20px;">
            <div style="background:#ffffff; border-radius:8px; padding:20px; border:1px solid #e2e8f0;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">1. Origin: Dumka to Deoghar</h3>
              <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
                The journey commences from Dumka municipal town via NH-114A, passing through Jarmundi and the sacred pilgrimage hub of Basukinath Dham (~24 km) towards Deoghar (~68 km).
              </p>
            </div>

            <div style="background:#ffffff; border-radius:8px; padding:20px; border:1px solid #e2e8f0;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">2. Deoghar to Giridih / Jamtara</h3>
              <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
                Depending on traffic conditions, our trucks travel via Madhupur and Giridih or via Jamtara to connect seamlessly with the wider four-lane expressway network of Grand Trunk Road (NH-19).
              </p>
            </div>

            <div style="background:#ffffff; border-radius:8px; padding:20px; border:1px solid #e2e8f0;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">3. GT Road to Ramgarh Valley</h3>
              <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
                Transitioning towards NH-20 near Barhi/Bagodar or Dhanbad-Bokaro corridors, our experienced highway drivers navigate the scenic Chutupalu Ghati and Ramgarh bypass with utmost safety.
              </p>
            </div>

            <div style="background:#ffffff; border-radius:8px; padding:20px; border:1px solid #e2e8f0;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">4. Destination: Entry into Ranchi</h3>
              <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
                Entering Ranchi via Booty More or Namkum Ring Road, avoiding inner-city daytime commercial truck restrictions to ensure prompt doorstep unloading at your exact residence.
              </p>
            </div>
          </div>
        </section>

        <!-- Section: Dedicated Container vs Shared Part-Load -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.95rem; color:#0f223d; font-weight:800; margin-bottom:18px;">
            Choose Your Moving Mode: Dedicated FTL vs. Shared PTL
          </h2>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:24px;">
            To match varying family budgets and scheduling requirements, we offer two distinct moving configurations for the Dumka to Ranchi route:
          </p>

          <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap:24px;">
            
            <div style="border:2px solid #ff6a28; border-radius:10px; padding:24px; background:#fffbf9;">
              <div style="display:inline-block; background:#ff6a28; color:#ffffff; font-size:0.8rem; font-weight:800; padding:4px 10px; border-radius:4px; margin-bottom:12px; text-transform:uppercase;">Recommended for 2 &amp; 3 BHK</div>
              <h3 style="font-size:1.3rem; color:#0f223d; font-weight:800; margin-bottom:10px;">Dedicated Full Truck Load (FTL)</h3>
              <ul style="color:#475569; font-size:0.95rem; line-height:1.75; padding-left:20px; margin-bottom:16px;">
                <li>Exclusive closed container truck assigned solely to your family belongings.</li>
                <li>Truck is locked in Dumka and unlocked only at your doorstep in Ranchi.</li>
                <li>Guaranteed fast transit: Delivered within <strong>24 to 36 hours</strong>.</li>
                <li>Zero handling by intermediate parties or warehouse hubs.</li>
                <li>Flexibility to choose exact loading and unloading timings.</li>
              </ul>
              <div style="font-weight:700; color:#0f223d;">Ideal For: Complete 2 BHK, 3 BHK, 4 BHK homes, and combined household + vehicle moves.</div>
            </div>

            <div style="border:1px solid #cbd5e1; border-radius:10px; padding:24px; background:#f8fafc;">
              <div style="display:inline-block; background:#0284c7; color:#ffffff; font-size:0.8rem; font-weight:800; padding:4px 10px; border-radius:4px; margin-bottom:12px; text-transform:uppercase;">Budget Friendly</div>
              <h3 style="font-size:1.3rem; color:#0f223d; font-weight:800; margin-bottom:10px;">Shared Part-Load (PTL) Moving</h3>
              <ul style="color:#475569; font-size:0.95rem; line-height:1.75; padding-left:20px; margin-bottom:16px;">
                <li>Pay only for the exact volume or square footage your consignment occupies.</li>
                <li>Individual consignments partitioned with protective wooden dividers.</li>
                <li>Budget-friendly pricing with up to 40% cost savings.</li>
                <li>Estimated delivery window: <strong>2 to 4 days</strong>.</li>
                <li>Full barcode labeling and digital consignment tracking.</li>
              </ul>
              <div style="font-weight:700; color:#0f223d;">Ideal For: 1 BHK apartments, student relocations, bachelor moves, and single furniture items.</div>
            </div>

          </div>
        </section>

        <!-- Section: Price Matrix Table -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.95rem; color:#0f223d; font-weight:800; margin-bottom:18px;">
            Estimated Relocation Rates: Dumka to Ranchi (~280 km)
          </h2>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:20px;">
            We maintain 100% price integrity with comprehensive written quotations that detail packing, loading, highway toll charges, unloading, and basic unpacking. Below are typical costs for the Dumka to Ranchi corridor:
          </p>

          <div style="overflow-x:auto;">
            <table style="width:100%; border-collapse:collapse; font-size:0.95rem; background:#ffffff; border:1px solid #e2e8f0; border-radius:8px; overflow:hidden;">
              <thead>
                <tr style="background:#0f223d; color:#ffffff; text-align:left;">
                  <th style="padding:14px 16px;">Relocation Type</th>
                  <th style="padding:14px 16px;">Standard Rate (₹)</th>
                  <th style="padding:14px 16px;">Included Inclusions</th>
                  <th style="padding:14px 16px;">Transit Time</th>
                </tr>
              </thead>
              <tbody>
                <tr style="border-bottom:1px solid #e2e8f0;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">1 BHK Flat Household Move</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹10,500 – ₹15,000</td>
                  <td style="padding:12px 16px; color:#64748b;">Complete packing, 14-ft container, loading &amp; unloading</td>
                  <td style="padding:12px 16px; color:#0f223d; font-weight:600;">24 – 36 Hours</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">2 BHK Complete Family Home</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹15,000 – ₹22,000</td>
                  <td style="padding:12px 16px; color:#64748b;">5-layer packing, 17-ft/19-ft container, bed dismantling &amp; setup</td>
                  <td style="padding:12px 16px; color:#0f223d; font-weight:600;">24 – 36 Hours</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">3 BHK Large Bungalow / House</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹22,000 – ₹32,000</td>
                  <td style="padding:12px 16px; color:#64748b;">Full crating, large closed container truck, carpenter service</td>
                  <td style="padding:12px 16px; color:#0f223d; font-weight:600;">24 – 48 Hours</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">Hatchback Car Transport</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹5,500 – ₹7,000</td>
                  <td style="padding:12px 16px; color:#64748b;">Covered car carrier trailer, ramp loading, wheel chocking</td>
                  <td style="padding:12px 16px; color:#0f223d; font-weight:600;">24 – 48 Hours</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">Sedan / Compact SUV Transport</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹6,500 – ₹8,500</td>
                  <td style="padding:12px 16px; color:#64748b;">Covered carrier, 360° inspection, tie-down safety straps</td>
                  <td style="padding:12px 16px; color:#0f223d; font-weight:600;">24 – 48 Hours</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">Full-Size SUV (Scorpio, Safari, XUV)</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹7,500 – ₹9,500</td>
                  <td style="padding:12px 16px; color:#64748b;">Enclosed carrier, low-gradient ramp, zero road mileage</td>
                  <td style="padding:12px 16px; color:#0f223d; font-weight:600;">24 – 48 Hours</td>
                </tr>
                <tr>
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">Motorcycle / Scooty Transport</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹2,500 – ₹4,500</td>
                  <td style="padding:12px 16px; color:#64748b;">4-layer bubble packing, mirror removal, crating, door delivery</td>
                  <td style="padding:12px 16px; color:#0f223d; font-weight:600;">24 – 36 Hours</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p style="font-size:0.85rem; color:#64748b; margin-top:10px;">
            *Note: Taxes (GST) and optional transit insurance (typically 1.5% to 2% of declared goods value) are billed transparently. Zero hidden charges.
          </p>
        </section>

        <!-- Section: Academic & Secretariat Transfer Logistics -->
        <section style="margin-bottom:50px; background:#f8fafc; border:1px solid #e2e8f0; border-radius:12px; padding:32px 26px;">
          <h2 style="font-size:1.85rem; color:#0f223d; font-weight:800; margin-bottom:16px;">
            Specialized Relocation for Secretariat Officials, SKMU &amp; Ranchi University Faculty
          </h2>
          <p style="font-size:1.02rem; line-height:1.75; color:#475569; margin-bottom:18px;">
            The administrative pipeline connecting Dumka (the Sub-Capital) and Ranchi (the State Capital) generates a substantial volume of official employee transfers every quarter. This includes administrative officers shifting to the Project Bhawan Secretariat, judicial clerks moving to the Jharkhand High Court in Dhurwa, academic professors transferring between <strong>Sido Kanhu Murmu University (SKMU)</strong> and Ranchi University or DSPMU, and medical specialists moving from <strong>PJMCH Dumka</strong> to RIMS Ranchi.
          </p>
          <p style="font-size:1.02rem; line-height:1.75; color:#475569; margin-bottom:18px;">
            These relocations involve sensitive official records, academic thesis libraries, specialized laboratory instruments, and high-value domestic electronics. Shree Ashirwad Packers and Movers assigns trained handling supervisors who utilize tamper-evident security tape, reinforced document cartons, and dedicated lock-and-key container transit to ensure complete confidentiality and zero loss during the 280 km highway transit.
          </p>
          <p style="font-size:1.02rem; line-height:1.75; color:#475569; margin:0;">
            Furthermore, our accounts division ensures all documentation—including government transfer composite grants, IBA consignment notes (LR), and GST invoices—is formatted strictly according to Jharkhand State Service Rules, enabling seamless 100% reimbursement without administrative objections.
          </p>
        </section>

        <!-- Section: Door-to-Door Localities in Dumka & Ranchi -->
        <section style="margin-bottom:50px; background:#ffffff;">
          <h2 style="font-size:1.95rem; color:#0f223d; font-weight:800; margin-bottom:18px;">
            Doorstep Coverage in Dumka and All Neighborhoods in Ranchi
          </h2>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:20px;">
            Our direct corridor moving network guarantees that wherever your departure point is in Dumka and wherever your destination address is in Ranchi, our dedicated teams manage the entire move from doorstep to doorstep:
          </p>

          <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap:22px;">
            <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; padding:22px;">
              <h3 style="font-size:1.15rem; color:#ff6a28; font-weight:700; margin-bottom:10px;">Dumka Origin Pickup Areas</h3>
              <p style="font-size:0.92rem; color:#475569; line-height:1.65; margin:0;">
                Tin Bazar, Court Road, Dudhani, Rasikpur, Bandarjori, Karharbil, Tata Showroom Chowk, Purana Dumka, Dighee, Babu Para, Dangalpara, Police Line, SKMU Staff Quarters, PJMCH Doctors Colony, and surrounding areas including Basukinath Dham, Jarmundi, Jama, Shikaripara, and Kathikund.
              </p>
            </div>

            <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; padding:22px;">
              <h3 style="font-size:1.15rem; color:#0284c7; font-weight:700; margin-bottom:10px;">Ranchi Destination Delivery Hubs</h3>
              <p style="font-size:0.92rem; color:#475569; line-height:1.65; margin:0;">
                Kanke Road, Morabadi, Bariatu, Doranda, Ashok Nagar, Lalpur, Harmu Housing Colony, Hinoo, Namkum, Ratu Road, Dhurwa (near Project Bhawan Secretariat, High Court &amp; JSCA Stadium), Argora, Pundag, Tupudana, Hatia, and Mesra (BIT Mesra campus).
              </p>
            </div>
          </div>
        </section>

        <!-- Section: IBA Approved Government & Medical Billing -->
        <section style="margin-bottom:50px; background:#f0fdf4; border:1px solid #bbf7d0; border-radius:12px; padding:32px 26px;">
          <h2 style="font-size:1.85rem; color:#14532d; font-weight:800; margin-bottom:14px;">
            100% IBA-Approved Billing for Secretariat &amp; Government Transfers
          </h2>
          <p style="font-size:1.02rem; line-height:1.75; color:#166534; margin-bottom:16px;">
            The Dumka-to-Ranchi corridor is predominantly utilized by government and banking officers on transfer between the Sub-Capital and State Capital. We provide complete, audit-cleared relocation paperwork including:
          </p>
          <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap:14px;">
            <div style="background:#ffffff; padding:14px; border-radius:6px; border:1px solid #dcfce7; font-size:0.92rem; color:#14532d; font-weight:600;">
              ✓ IBA-Approved Lorry Receipt (LR / Consignment Note)
            </div>
            <div style="background:#ffffff; padding:14px; border-radius:6px; border:1px solid #dcfce7; font-size:0.92rem; color:#14532d; font-weight:600;">
              ✓ Detailed Itemized Packing &amp; Inventory Inventory Sheet
            </div>
            <div style="background:#ffffff; padding:14px; border-radius:6px; border:1px solid #dcfce7; font-size:0.92rem; color:#14532d; font-weight:600;">
              ✓ Official GST-Registered Tax Invoice
            </div>
            <div style="background:#ffffff; padding:14px; border-radius:6px; border:1px solid #dcfce7; font-size:0.92rem; color:#14532d; font-weight:600;">
              ✓ Money Receipt &amp; Full Transit Insurance Certificate
            </div>
          </div>
        </section>

        <!-- Section: Frequently Asked Questions (FAQ) -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.95rem; color:#0f223d; font-weight:800; margin-bottom:24px;">
            Frequently Asked Questions (FAQs) – Dumka to Ranchi Relocation
          </h2>

          <div style="display:flex; flex-direction:column; gap:16px;">
            
            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">How long does household goods transport take from Dumka to Ranchi?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">For a dedicated container vehicle (Full Truck Load), transit takes approximately 24 to 36 hours. The distance between Dumka and Ranchi is roughly 280 to 295 km via NH-114A. Loading occurs on Day 1 in Dumka, highway travel takes 7-9 hours, and delivery with unloading and setup is completed in Ranchi on Day 2.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">How much does it cost to hire packers and movers from Dumka to Ranchi?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Rates typically range between ₹10,500 and ₹15,000 for a 1 BHK home, ₹15,000 and ₹22,000 for a standard 2 BHK, and ₹22,000 to ₹32,000 for a 3 BHK family house. Car shipping ranges from ₹5,500 to ₹9,500, and two-wheeler bike parcel ranges from ₹2,500 to ₹4,500.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Which highway route is taken from Dumka to Ranchi?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Our carriers navigate primarily via NH-114A and State Highway corridors connecting Dumka through Deoghar, Madhupur, Giridih or Jamtara onto Grand Trunk Road (NH-19) and NH-20 toward Ramgarh and Ranchi. Our drivers are thoroughly trained on these regional ghats and highway bypasses.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Do you deliver across all neighborhoods in Ranchi?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Yes, we provide direct door-to-door delivery across all areas of Ranchi including Kanke Road, Morabadi, Bariatu, Doranda, Ashok Nagar, Lalpur, Harmu Housing Colony, Hinoo, Namkum, Ratu Road, Dhurwa (near Project Bhawan & High Court), and Tupudana.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Do you transship goods into another truck between Dumka and Ranchi?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">No. When you book a dedicated relocation with Shree Ashirwad Packers, your goods are loaded into our container truck in Dumka, secured, locked, and transported directly to your delivery destination in Ranchi without any intermediate transshipment or warehouse offloading.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Do you provide IBA-approved billing for Secretariat and government transfers?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Yes. As Dumka is the Sub-Capital and Ranchi is the State Capital, we regularly handle official transfers for Jharkhand Administrative Service (JAS) officers, Secretariat staff at Project Bhawan, High Court advocates, and PSU bank managers. We provide 100% audit-compliant IBA bills, GST invoices, and consignment notes.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Can I transport my car or bike along with my household items in the same truck?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Yes. We operate customized 19-foot and 22-foot multi-purpose container trucks equipped with dedicated vehicle ramps and wheel chocks. We can securely transport your household goods alongside your car or motorcycle in a single vehicle, reducing relocation costs.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Is transit insurance mandatory for Dumka to Ranchi moving?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Transit insurance is highly recommended. It covers unforeseen road risks such as collision, overturn, fire, and flood damage. We arrange comprehensive transit insurance policies through leading nationalized insurers at nominal premium rates.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Can you dismantle and reassemble modular furniture at both ends?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Yes. Our skilled carpenters dismantle double beds, modular wardrobes, and dining tables at your home in Dumka, pack them with protective foam sheets, and reassemble them at your new address in Ranchi.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">How can I book a moving slot for Dumka to Ranchi?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Simply call our moving desk at 8409531615 or contact us through WhatsApp. We will conduct a free pre-move inventory survey and provide a guaranteed, written all-inclusive quotation.</p>
            </div>

          </div>
        </section>

        <!-- Final Call to Action Box -->
        <section style="background: linear-gradient(135deg, #0f223d 0%, #1a3a5f 100%); color:#ffffff; padding:45px 35px; border-radius:14px; text-align:center;">
          <h2 style="font-size:2rem; font-weight:800; margin-bottom:14px;">Moving from Dumka to Ranchi?</h2>
          <p style="font-size:1.1rem; color:#cbd5e1; max-width:700px; margin:0 auto 28px;">
            Book your dedicated container move today. Enjoy direct 24-36 hour delivery, zero transshipment, 5-layer packing, and complete transit insurance.
          </p>
          <div style="display:flex; justify-content:center; flex-wrap:wrap; gap:16px;">
            <a href="tel:8409531615" style="display:inline-flex; align-items:center; gap:8px; background:#ff6a28; color:#ffffff; padding:15px 30px; border-radius:8px; font-weight:700; text-decoration:none; box-shadow:0 4px 15px rgba(255,106,40,0.35);">
              Call Route Coordinator: 8409531615
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
            <a href="<?php echo SITE_BASE_URL; ?>/dumka-to-ranchi-packers-and-movers" style="color:#ff6a28; text-decoration:none; background:#fff7ed; padding:9px 15px; border-radius:6px; font-weight:700; border:1px solid #fed7aa;">Dumka to Ranchi Movers (Current)</a>
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
