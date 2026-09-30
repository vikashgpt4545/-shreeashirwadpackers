<?php
/**
 * Car Transport in Dumka - Shree Ashirwad Packers and Movers
 * 
 * High-performance, fully SEO-optimized landing page for four-wheeler shipping,
 * covered hydraulic car carrier transport, and sedan/SUV relocation from Dumka across India.
 * Sub-Capital (Up-Rajdhani) of Jharkhand & Santhal Pargana Division Hub.
 */

// Define page-specific metadata
$page_title = "Car Transport in Dumka | Car Carrier Service - Shree Ashirwad";
$page_description = "Reliable car transport in Dumka by Shree Ashirwad Packers and Movers. Covered hydraulic car carriers, sedan & SUV shipping, transit insurance, doorstep pickup in Dumka & Basukinath. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/car-transport-in-dumka";

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
  <meta name="keywords" content="car transport in dumka, car carrier service dumka, car shifting dumka, four wheeler relocation dumka, car movers dumka, car transport dumka to ranchi, car transport dumka to kolkata, car transport dumka to patna">
  <link rel="canonical" href="<?php echo $canonical_url; ?>">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta property="og:url" content="<?php echo $canonical_url; ?>">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg">
  <meta property="og:image:alt" content="Professional Car Transport and Carrier Loading in Dumka by Shree Ashirwad Packers">
  <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
  <meta property="og:locale" content="en_IN">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg">

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
    "name": "Shree Ashirwad Packers and Movers - Car Transport Dumka",
    "alternateName": "Dumka Car Carrier Logistics",
    "url": "<?php echo $canonical_url; ?>",
    "logo": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
    "image": "<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg",
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
    "serviceType": "Car Carrier Relocation, Vehicle Transportation & Auto Shipping",
    "name": "Car Transport in Dumka",
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
    "description": "Specialized four-wheeler and luxury car transportation service in Dumka featuring covered hydraulic car carriers, low-angle ramp loading, 360-degree vehicle inspection reports, wheel chocking, and full-value transit insurance.",
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Dumka Car Transport Services",
      "itemListElement": [
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Covered Hydraulic Car Carrier Transport" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Hatchback & Sedan Intercity Shifting" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "SUV, Luxury & MUV Four-Wheeler Transport" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "IBA Approved Government & Bank Car Transfer Billing" } }
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
        "name": "Car Transport in Dumka",
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
        "name": "How is my car transported from Dumka to other cities?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Your car is loaded inside specialized enclosed multi-car hydraulic carrier trailers or dedicated closed container trucks. It is driven up gentle low-gradient hydraulic ramps, placed into wheel positioning grooves, and locked securely with four-point heavy-duty nylon wheel chocks and safety chains to eliminate movement during transit."
        }
      },
      {
        "@type": "Question",
        "name": "Do you drive my car over the highway to the destination?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Never. We strictly prohibit highway driving of client vehicles. Your car is transported completely loaded on our enclosed car carriers. Odometer readings, tire treads, and engine health are preserved 100%. Driving is limited strictly to driving onto the ramp during loading and off the ramp during delivery."
        }
      },
      {
        "@type": "Question",
        "name": "What documents are required to transport a car from Dumka?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "You will need: (1) Vehicle Registration Certificate (RC copy), (2) Valid comprehensive insurance policy copy, (3) Pollution Under Control (PUC) certificate, (4) Owner ID proof (Aadhaar or PAN copy), and (5) Signed digital/physical vehicle condition inspection report noted before loading."
        }
      },
      {
        "@type": "Question",
        "name": "How much does car transport from Dumka cost?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Pricing depends on vehicle model and destination distance. Regional moves such as Dumka to Ranchi, Patna, or Kolkata typically cost ₹6,000 to ₹10,500. Long-distance transit to Delhi NCR, Bangalore, Pune, or Mumbai ranges between ₹8,500 and ₹19,500 depending on whether it is a hatchback, sedan, or full-size SUV."
        }
      },
      {
        "@type": "Question",
        "name": "Is transit insurance provided for my vehicle?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we provide comprehensive marine and transit insurance coverage for all car shipments. Coverage protects against collision, rollover, theft, fire, and natural disasters. Insurance is computed based on your vehicle's declared Insured Declared Value (IDV)."
        }
      },
      {
        "@type": "Question",
        "name": "Can you pick up my car from Basukinath Dham or rural Dumka sub-divisions?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. Our Dumka operations team provides door-to-door vehicle pickup across Dumka municipal town (Tin Bazar, Court Road, Dudhani, Rasikpur, Karharbil, Bandarjori) and throughout the surrounding district including Basukinath Dham, Jarmundi, Jama, Shikaripara, Kathikund, and Hansdiha."
        }
      },
      {
        "@type": "Question",
        "name": "Can I keep personal luggage or cartons inside my car during transit?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, clients are permitted to keep up to 40-50 kg of personal luggage or household boxes neatly placed in the car trunk (dicky). However, cash, jewelry, expensive electronics, and inflammable or hazardous items are strictly prohibited by transport safety regulations."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide IBA-approved bills for car transfer reimbursement?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. Shree Ashirwad Packers and Movers provides authentic IBA-compliant vehicle consignment notes, GST invoices, and transit insurance copies for seamless relocation allowance reimbursement for bank managers, government officials, university professors at SKMU, and defense personnel."
        }
      },
      {
        "@type": "Question",
        "name": "How can I track my vehicle while it is in transit?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Our carriers are equipped with active GPS tracking units. Furthermore, our dedicated Dumka dispatch desk provides daily WhatsApp tracking updates, highway milestone alerts, and live phone assistance until your vehicle safely arrives at your delivery doorstep."
        }
      },
      {
        "@type": "Question",
        "name": "How many days in advance should I book car transport in Dumka?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We recommend booking your car carrier 2 to 4 days prior to your planned moving date to reserve your dedicated carrier slot and schedule pre-transit documentation and doorstep inspection."
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
          <span aria-current="page" style="color:#ff6a28; font-weight:600;">Car Transport</span>
        </nav>
        
        <h1 style="font-size: clamp(2.1rem, 4.2vw, 3.2rem); font-weight:800; line-height:1.2; margin-bottom:18px;">
          Car Transport in Dumka
        </h1>
        
        <p style="font-size:1.15rem; line-height:1.75; color:#cbd5e1; max-width:920px; margin-bottom:28px;">
          Certified four-wheeler transportation and hydraulic car carrier shipping from Dumka across India by Shree Ashirwad Packers and Movers. Closed container vehicle trucks, low-gradient hydraulic ramp loading, 360-degree digital inspection documentation, four-point wheel chocking, and 100% genuine IBA-compliant transfer bills.
        </p>

        <div style="display:flex; flex-wrap:wrap; gap:16px; align-items:center;">
          <a href="tel:8409531615" style="display:inline-flex; align-items:center; gap:10px; background:#ff6a28; color:#ffffff; padding:14px 28px; border-radius:8px; font-weight:700; text-decoration:none; box-shadow: 0 4px 15px rgba(255,106,40,0.35);">
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
              <div style="font-size:0.85rem; color:#64748b;">100% Transfer Audit Claims</div>
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
          <h2 style="font-size:1.9rem; color:#0f223d; font-weight:800;">Real Fleet &amp; Vehicle Carrier Loading Operations</h2>
          <p style="color:#64748b; max-width:680px; margin:8px auto 0;">Authentic field photographs of car carrier trailer operations, container loading, and door-to-door delivery managed by our Dumka team.</p>
        </div>

        <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap:24px;">
          <div style="background:#ffffff; border-radius:12px; overflow:hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border:1px solid #e2e8f0;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transport carrier loading using hydraulic ramp in Dumka" style="width:100%; height:230px; object-fit:cover; display:block;" loading="lazy">
            <div style="padding:18px;">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Hydraulic Ramp Loading</h3>
              <p style="color:#64748b; font-size:0.9rem; line-height:1.6; margin:0;">Low-angle specialized ramp entry preventing bumper scrapes, side skirt damage, or chassis underbody scratches on sedans and hatchbacks.</p>
            </div>
          </div>

          <div style="background:#ffffff; border-radius:12px; overflow:hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border:1px solid #e2e8f0;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Covered vehicle transport container truck in Jharkhand" style="width:100%; height:230px; object-fit:cover; display:block;" loading="lazy">
            <div style="padding:18px;">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Covered Container Transporters</h3>
              <p style="color:#64748b; font-size:0.9rem; line-height:1.6; margin:0;">Weatherproof, sealed steel containers shielding your automobile against highway dust, flying gravel, rainstorms, and accidental scratches.</p>
            </div>
          </div>

          <div style="background:#ffffff; border-radius:12px; overflow:hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border:1px solid #e2e8f0;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/shree-ashirwad-verified-moving-truck-jharkhand.jpg" alt="Doorstep vehicle delivery truck operated by Shree Ashirwad Packers Dumka" style="width:100%; height:230px; object-fit:cover; display:block;" loading="lazy">
            <div style="padding:18px;">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Door-to-Door Delivery Fleet</h3>
              <p style="color:#64748b; font-size:0.9rem; line-height:1.6; margin:0;">Complete door pick-up in Dumka and final hand-to-hand delivery at your new residence anywhere across India with verified digital sign-off.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Main Content Editorial Article -->
    <article style="padding:55px 0; background:#ffffff;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">

        <!-- Section: Overview of Car Transport in Dumka -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.95rem; color:#0f223d; font-weight:800; margin-bottom:18px;">
            Professional Car Transport Services in Dumka (Up-Rajdhani of Jharkhand)
          </h2>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:18px;">
            As the administrative Sub-Capital (Up-Rajdhani) of Jharkhand and the zonal headquarters of the Santhal Pargana division, Dumka experiences a steady transfer of government executives, judicial magistrates, banking managers, faculty from <strong>Sido Kanhu Murmu University (SKMU)</strong>, medical specialists from <strong>Phulo Jhano Murmu Medical College and Hospital (PJMCH)</strong>, and defense personnel. Relocating a personal automobile over long interstate distances or regional highway corridors is a major concern for car owners who value vehicle safety, pristine bodywork, and peace of mind.
          </p>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:18px;">
            At <strong>Shree Ashirwad Packers and Movers</strong>, we deliver dependable, zero-headache car transportation in Dumka. Unlike unregistered freight middlemen who hire open trucks or pay amateur drivers to drive your vehicle over hundreds of highway kilometers, we maintain a fleet of specialized closed car container carriers and multi-tier hydraulic trailers. When you hand over your keys to us, your vehicle stays completely protected atop our carrier with zero highway driving, avoiding tire erosion, mechanical strain, rock chips, and accident risks.
          </p>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155;">
            Whether you are shipping a compact hatchback from Tin Bazar, an executive sedan from Court Road, or a luxury 4x4 SUV from Dudhani or Basukinath to Ranchi, Kolkata, Patna, Delhi NCR, Bangalore, or Mumbai, our dedicated vehicle logistics division guarantees safe, fully insured, and on-time doorstep delivery.
          </p>
        </section>

        <!-- Section: Enclosed Carriers vs Driving Comparison -->
        <section style="margin-bottom:50px; background:#f8fafc; padding:35px 25px; border-radius:12px; border:1px solid #e2e8f0;">
          <h2 style="font-size:1.85rem; color:#0f223d; font-weight:800; margin-bottom:16px;">
            Why Choose Enclosed Hydraulic Carriers Over Self-Driving or Open Trucks?
          </h2>
          <p style="font-size:1.02rem; line-height:1.75; color:#475569; margin-bottom:24px;">
            Driving your four-wheeler through rural highways connecting Santhal Pargana (such as NH-114A, NH-133, or winding state highways toward Bengal and Bihar) exposes your car to rough road conditions, heavy mining trucks, flying stones, and prolonged mechanical wear. Discover why thousands of car owners trust our enclosed car shipping system:
          </p>

          <div style="overflow-x:auto;">
            <table style="width:100%; border-collapse:collapse; font-size:0.95rem; background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.04);">
              <thead>
                <tr style="background:#0f223d; color:#ffffff; text-align:left;">
                  <th style="padding:14px 16px;">Transport Feature</th>
                  <th style="padding:14px 16px;">Shree Ashirwad Enclosed Carrier</th>
                  <th style="padding:14px 16px;">Self-Driving on Highway</th>
                  <th style="padding:14px 16px;">Open Flatbed / General Truck</th>
                </tr>
              </thead>
              <tbody>
                <tr style="border-bottom:1px solid #e2e8f0;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">Odometer Mileage</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">Zero Kilometers Added</td>
                  <td style="padding:12px 16px; color:#dc2626;">300 to 2,000+ km Added</td>
                  <td style="padding:12px 16px; color:#16a34a;">Zero Kilometers Added</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#fdfdfd;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">Exterior Paint &amp; Windshield</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">100% Protected from Dirt &amp; Stones</td>
                  <td style="padding:12px 16px; color:#dc2626;">High Stone Chip &amp; Scratch Hazard</td>
                  <td style="padding:12px 16px; color:#ea580c;">Exposed to Rain, Dust &amp; Flying Debris</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">Tire &amp; Suspension Life</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">No Wear on Tires or Struts</td>
                  <td style="padding:12px 16px; color:#dc2626;">Heavy Highway &amp; Pothole Fatigue</td>
                  <td style="padding:12px 16px; color:#16a34a;">No Tire Wear</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#fdfdfd;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">Driver Fatigue &amp; Toll Costs</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">Zero Stress, All Tolls Included</td>
                  <td style="padding:12px 16px; color:#dc2626;">Fuel, High Tolls, Hotel &amp; Fatigue</td>
                  <td style="padding:12px 16px; color:#64748b;">Included in Commercial Rate</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">Transit Insurance Cover</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">Comprehensive Marine &amp; Road Transit</td>
                  <td style="padding:12px 16px; color:#dc2626;">Third-Party Highway Collision Risk</td>
                  <td style="padding:12px 16px; color:#dc2626;">Frequently Missing or Limited</td>
                </tr>
                <tr>
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">Securing Mechanism</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">4-Point Heavy-Duty Wheel Chocks</td>
                  <td style="padding:12px 16px; color:#64748b;">N/A (Driven)</td>
                  <td style="padding:12px 16px; color:#ea580c;">Basic Rope or Loose Wire Ties</td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>

        <!-- Section: Step-by-Step 6-Stage Process -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.95rem; color:#0f223d; font-weight:800; margin-bottom:18px;">
            Our 6-Stage Car Carrier Transportation Protocol in Dumka
          </h2>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:28px;">
            Transporting an automobile requires strict engineering safeguards, calibrated loading mechanisms, and precise documentation. Here is how our Dumka vehicle carrier operations unit handles your car from pickup to delivery:
          </p>

          <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap:24px;">
            
            <div style="border:1px solid #e2e8f0; border-radius:10px; padding:24px; background:#ffffff; box-shadow:0 2px 8px rgba(0,0,0,0.03);">
              <div style="display:flex; align-items:center; gap:12px; margin-bottom:14px;">
                <span style="background:#ff6a28; color:#ffffff; font-weight:800; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:1rem;">1</span>
                <h3 style="font-size:1.2rem; color:#0f223d; font-weight:700; margin:0;">360° Digital Inspection</h3>
              </div>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">
                Before loading in Dumka, our certified vehicle supervisor conducts a thorough 360-degree digital inspection. Every scratch, paint blemish, odometer reading, and fuel gauge level is marked on the physical Condition Report and photographed for mutual transparency.
              </p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:10px; padding:24px; background:#ffffff; box-shadow:0 2px 8px rgba(0,0,0,0.03);">
              <div style="display:flex; align-items:center; gap:12px; margin-bottom:14px;">
                <span style="background:#ff6a28; color:#ffffff; font-weight:800; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:1rem;">2</span>
                <h3 style="font-size:1.2rem; color:#0f223d; font-weight:700; margin:0;">Low-Gradient Ramp Loading</h3>
              </div>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">
                Our trailers utilize custom low-angle hydraulic ramps engineered specifically for sports sedans and low-ground-clearance hatchbacks. Your car glides smoothly into the carrier deck without front bumper scraping, spoiler pressure, or exhaust pipe damage.
              </p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:10px; padding:24px; background:#ffffff; box-shadow:0 2px 8px rgba(0,0,0,0.03);">
              <div style="display:flex; align-items:center; gap:12px; margin-bottom:14px;">
                <span style="background:#ff6a28; color:#ffffff; font-weight:800; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:1rem;">3</span>
                <h3 style="font-size:1.2rem; color:#0f223d; font-weight:700; margin:0;">4-Point Wheel Chocking</h3>
              </div>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">
                Once positioned inside the carrier bay, custom molded wheel chocks are fastened to all four tires. Heavy-duty non-abrasive ratchet straps anchor the wheels to the trailer floor chassis, ensuring the vehicle does not move an inch during highway braking or sharp turns.
              </p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:10px; padding:24px; background:#ffffff; box-shadow:0 2px 8px rgba(0,0,0,0.03);">
              <div style="display:flex; align-items:center; gap:12px; margin-bottom:14px;">
                <span style="background:#ff6a28; color:#ffffff; font-weight:800; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:1rem;">4</span>
                <h3 style="font-size:1.2rem; color:#0f223d; font-weight:700; margin:0;">Full-Value Transit Insurance</h3>
              </div>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">
                Every car shipment from Dumka is backed by comprehensive transit insurance issued by national public-sector underwriting partners. Coverage protects against accidental damage, highway rollover, fire, and catastrophic weather from point of origin to destination.
              </p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:10px; padding:24px; background:#ffffff; box-shadow:0 2px 8px rgba(0,0,0,0.03);">
              <div style="display:flex; align-items:center; gap:12px; margin-bottom:14px;">
                <span style="background:#ff6a28; color:#ffffff; font-weight:800; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:1rem;">5</span>
                <h3 style="font-size:1.2rem; color:#0f223d; font-weight:700; margin:0;">GPS Highway Monitoring</h3>
              </div>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">
                Our fleet vehicles are monitored round-the-clock via satellite GPS. Our central dispatch team tracks carrier speed, highway transit checkpoints across NH-114A, Grand Trunk Road (NH-19), and NH-133, and dispatches regular automated milestone updates directly to your WhatsApp.
              </p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:10px; padding:24px; background:#ffffff; box-shadow:0 2px 8px rgba(0,0,0,0.03);">
              <div style="display:flex; align-items:center; gap:12px; margin-bottom:14px;">
                <span style="background:#ff6a28; color:#ffffff; font-weight:800; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:1rem;">6</span>
                <h3 style="font-size:1.2rem; color:#0f223d; font-weight:700; margin:0;">Doorstep Handover &amp; Audit</h3>
              </div>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">
                Upon arrival at your destination city, the carrier gently unloads the vehicle in front of your premises. You cross-verify the vehicle with the original Condition Report and odometer record before signing the delivery consignment sheet.
              </p>
            </div>

          </div>
        </section>

        <!-- Section: Cost Matrix & Transit Timelines Table -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.95rem; color:#0f223d; font-weight:800; margin-bottom:18px;">
            Estimated Car Transport Charges &amp; Transit Times from Dumka
          </h2>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:20px;">
            We offer completely transparent pricing with zero surprise add-ons. The cost of car transport from Dumka is determined by the vehicle's body dimension category (Hatchback vs. Sedan vs. Compact SUV vs. Large 7-Seater / Luxury 4x4) and interstate distance. Below is our benchmark rate matrix for major Indian transit destinations:
          </p>

          <div style="overflow-x:auto;">
            <table style="width:100%; border-collapse:collapse; font-size:0.95rem; background:#ffffff; border:1px solid #e2e8f0; border-radius:8px; overflow:hidden;">
              <thead>
                <tr style="background:#0f223d; color:#ffffff; text-align:left;">
                  <th style="padding:14px 16px;">Destination Route</th>
                  <th style="padding:14px 16px;">Approx. Distance</th>
                  <th style="padding:14px 16px;">Hatchback (Alto, Swift, i10)</th>
                  <th style="padding:14px 16px;">Sedan (Dzire, City, Verna)</th>
                  <th style="padding:14px 16px;">SUV / MUV (Creta, Scorpio, XUV)</th>
                  <th style="padding:14px 16px;">Estimated Transit</th>
                </tr>
              </thead>
              <tbody>
                <tr style="border-bottom:1px solid #e2e8f0;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">Dumka to Ranchi</td>
                  <td style="padding:12px 16px; color:#64748b;">~280 km</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹5,500 – ₹7,000</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹6,500 – ₹8,000</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹7,500 – ₹9,500</td>
                  <td style="padding:12px 16px; color:#0f223d; font-weight:600;">1 – 2 Days</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">Dumka to Kolkata / Howrah</td>
                  <td style="padding:12px 16px; color:#64748b;">~290 km</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹5,800 – ₹7,200</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹6,800 – ₹8,200</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹8,000 – ₹10,000</td>
                  <td style="padding:12px 16px; color:#0f223d; font-weight:600;">1 – 2 Days</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">Dumka to Patna</td>
                  <td style="padding:12px 16px; color:#64748b;">~280 km</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹6,000 – ₹7,500</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹7,000 – ₹8,500</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹8,200 – ₹10,200</td>
                  <td style="padding:12px 16px; color:#0f223d; font-weight:600;">2 – 3 Days</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">Dumka to Delhi / Noida / Gurgaon</td>
                  <td style="padding:12px 16px; color:#64748b;">~1,250 km</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹9,500 – ₹12,000</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹11,000 – ₹13,500</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹13,000 – ₹16,500</td>
                  <td style="padding:12px 16px; color:#0f223d; font-weight:600;">4 – 6 Days</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">Dumka to Bangalore / Bengaluru</td>
                  <td style="padding:12px 16px; color:#64748b;">~1,850 km</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹12,500 – ₹15,500</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹14,000 – ₹17,000</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹16,500 – ₹19,500</td>
                  <td style="padding:12px 16px; color:#0f223d; font-weight:600;">6 – 8 Days</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">Dumka to Mumbai / Pune / Thane</td>
                  <td style="padding:12px 16px; color:#64748b;">~1,800 km</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹12,000 – ₹15,000</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹13,500 – ₹16,500</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹16,000 – ₹19,000</td>
                  <td style="padding:12px 16px; color:#0f223d; font-weight:600;">6 – 8 Days</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">Dumka to Hyderabad / Secunderabad</td>
                  <td style="padding:12px 16px; color:#64748b;">~1,450 km</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹11,500 – ₹14,000</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹13,000 – ₹15,500</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹15,000 – ₹18,000</td>
                  <td style="padding:12px 16px; color:#0f223d; font-weight:600;">5 – 7 Days</td>
                </tr>
                <tr>
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">Dumka to Bhubaneswar / Cuttack</td>
                  <td style="padding:12px 16px; color:#64748b;">~560 km</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹7,500 – ₹9,500</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹8,500 – ₹10,500</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹10,000 – ₹12,500</td>
                  <td style="padding:12px 16px; color:#0f223d; font-weight:600;">2 – 3 Days</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p style="font-size:0.85rem; color:#64748b; margin-top:10px;">
            *Note: Mentioned rates include doorstep vehicle loading, covered carrier haulage, wheel chocking, and destination unloading. Transit insurance premium is charged as per declared vehicle IDV value. GST at applicable rates.
          </p>
        </section>

        <!-- Section: Local Neighborhoods Served in Dumka -->
        <section style="margin-bottom:50px; background:#ffffff;">
          <h2 style="font-size:1.95rem; color:#0f223d; font-weight:800; margin-bottom:18px;">
            Doorstep Vehicle Pickup &amp; Delivery Network Across Dumka
          </h2>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:20px;">
            Our car transport operations team covers every municipal ward, residential colony, government quarter, and neighboring sub-division of Dumka district. Even if your residential lane has restricted turning radius, our experienced drivers safely ferry your car to our main highway staging terminal on NH-114A:
          </p>

          <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap:18px;">
            <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:8px; padding:18px;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Administrative &amp; Urban Hubs</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.6; margin:0;">
                Tin Bazar, Court Road, Dudhani Chowk, Rasikpur, Bandarjori, Karharbil, Tata Showroom Chowk, Purana Dumka, Dighee, and Police Line residential colonies.
              </p>
            </div>
            <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:8px; padding:18px;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">University &amp; Hospital Quarters</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.6; margin:0;">
                Sido Kanhu Murmu University (SKMU) campus residential staff quarters, Phulo Jhano Murmu Medical College (PJMCH) doctors' colony, Babu Para, and Dangalpara.
              </p>
            </div>
            <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:8px; padding:18px;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Sub-Divisional &amp; Pilgrim Hubs</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.6; margin:0;">
                Basukinath Dham (~24 km), Jarmundi, Jama, Shikaripara, Kathikund, Ranishwar, Gopikandar, Saraiyahat, and Hansdiha highway junction.
              </p>
            </div>
            <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:8px; padding:18px;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Peripheral Towns &amp; Borders</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.6; margin:0;">
                Gilanpara, Khijuria, Pattabari, Massanjore Dam area, Asanbani, and border connectivity towards Suri (West Bengal) and Banka/Bhagalpur (Bihar).
              </p>
            </div>
          </div>
        </section>

        <!-- Section: Essential Documentation Checklist -->
        <section style="margin-bottom:50px; background:#f0fdf4; border:1px solid #bbf7d0; border-radius:12px; padding:32px 26px;">
          <h2 style="font-size:1.85rem; color:#14532d; font-weight:800; margin-bottom:14px;">
            Document Checklist for Car Shipping from Dumka
          </h2>
          <p style="font-size:1.02rem; line-height:1.75; color:#166534; margin-bottom:20px;">
            Commercial vehicle transit requires statutory clearance at state borders, RTO checkpoints, and highway commercial weight stations. Please keep clear photocopies of the following documents ready:
          </p>
          <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap:18px;">
            <div style="background:#ffffff; padding:16px; border-radius:8px; border:1px solid #dcfce7;">
              <div style="font-weight:700; color:#14532d; margin-bottom:4px;">1. Registration Certificate (RC)</div>
              <div style="font-size:0.9rem; color:#4b5563;">Clear copy of Smart Card RC or valid digitized mParivahan vehicle registration copy.</div>
            </div>
            <div style="background:#ffffff; padding:16px; border-radius:8px; border:1px solid #dcfce7;">
              <div style="font-weight:700; color:#14532d; margin-bottom:4px;">2. Comprehensive Vehicle Insurance</div>
              <div style="font-size:0.9rem; color:#4b5563;">Active policy document indicating valid insurance coverage and owner details.</div>
            </div>
            <div style="background:#ffffff; padding:16px; border-radius:8px; border:1px solid #dcfce7;">
              <div style="font-weight:700; color:#14532d; margin-bottom:4px;">3. Pollution Under Control (PUC)</div>
              <div style="font-size:0.9rem; color:#4b5563;">Valid government-authorized emission test certificate with active expiry date.</div>
            </div>
            <div style="background:#ffffff; padding:16px; border-radius:8px; border:1px solid #dcfce7;">
              <div style="font-weight:700; color:#14532d; margin-bottom:4px;">4. Owner Identification Proof</div>
              <div style="font-size:0.9rem; color:#4b5563;">Self-attested photocopy of owner's Aadhaar Card, Driving Licence, or PAN Card.</div>
            </div>
          </div>
        </section>

        <!-- Section: How to Prepare Your Car for Transport -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.95rem; color:#0f223d; font-weight:800; margin-bottom:18px;">
            Expert Tips: Preparing Your Car for Safe Carrier Relocation
          </h2>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:20px;">
            Taking a few simple preparation steps before carrier handover helps eliminate transit delays and ensures your vehicle arrives in pristine condition:
          </p>

          <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap:20px;">
            <div style="border-left:4px solid #ff6a28; padding:14px 18px; background:#fffbf9; border-radius:0 8px 8px 0;">
              <h3 style="font-size:1.08rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Clean Exterior for Visual Audit</h3>
              <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">Thoroughly wash your car before loading so that existing fine scratches or minor dents can be accurately logged during the 360-degree inspection.</p>
            </div>
            <div style="border-left:4px solid #0284c7; padding:14px 18px; background:#f0f9ff; border-radius:0 8px 8px 0;">
              <h3 style="font-size:1.08rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Maintain 15% to 25% Fuel Level</h3>
              <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">Keep enough fuel to drive onto the carrier ramp and to a petrol station at your destination. Avoid full tanks to reduce unnecessary weight and carrier fire risk.</p>
            </div>
            <div style="border-left:4px solid #16a34a; padding:14px 18px; background:#f0fdf4; border-radius:0 8px 8px 0;">
              <h3 style="font-size:1.08rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Remove Personal Valuables</h3>
              <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">Take out cash, gold, legal records, toll tags, electronic gadgets, and dashcams. Ordinary non-fragile luggage in the trunk is permitted.</p>
            </div>
            <div style="border-left:4px solid #d97706; padding:14px 18px; background:#fffdf5; border-radius:0 8px 8px 0;">
              <h3 style="font-size:1.08rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Disable Car Security Alarms</h3>
              <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">Turn off aftermarket motion sensor anti-theft alarms. Vibration during carrier highway travel can trigger alarms and drain your vehicle battery.</p>
            </div>
          </div>
        </section>

        <!-- Section: IBA Approved Government & Medical Transfer Billing -->
        <section style="margin-bottom:50px; background:#f8fafc; border:1px solid #e2e8f0; border-radius:12px; padding:32px 26px;">
          <h2 style="font-size:1.85rem; color:#0f223d; font-weight:800; margin-bottom:14px;">
            100% IBA-Approved Billing for SKMU, PJMCH &amp; Bank Officer Transfers
          </h2>
          <p style="font-size:1.02rem; line-height:1.75; color:#475569; margin-bottom:18px;">
            Dumka is the divisional administrative capital, meaning dozens of officers from the <strong>Jharkhand Administrative Service (JAS)</strong>, judges from the Dumka District and Sessions Court, university professors from <strong>SKMU</strong>, doctors from <strong>PJMCH</strong>, and managers from PSU banks (SBI, Bank of India, PNB) receive official transfer postings throughout the year.
          </p>
          <p style="font-size:1.02rem; line-height:1.75; color:#475569; margin:0;">
            Shree Ashirwad Packers and Movers provides complete, audit-cleared vehicle relocation paperwork including: <strong>IBA-format Consignment Notes (LR Copy)</strong>, <strong>Valid GST Invoices</strong>, <strong>Transit Insurance Certificates</strong>, and official car carrier vehicle condition receipts. Your employee vehicle transfer allowance is reimbursed smoothly without accounting delays or audit objections.
          </p>
        </section>

        <!-- Section: Frequently Asked Questions (FAQ) -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.95rem; color:#0f223d; font-weight:800; margin-bottom:24px;">
            Frequently Asked Questions (FAQs) – Car Transport in Dumka
          </h2>

          <div style="display:flex; flex-direction:column; gap:16px;">
            
            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">How is my car transported from Dumka to other cities?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Your car is loaded inside specialized enclosed multi-car hydraulic carrier trailers or dedicated closed container trucks. It is driven up gentle low-gradient hydraulic ramps, placed into wheel positioning grooves, and locked securely with four-point heavy-duty nylon wheel chocks and safety chains to eliminate movement during transit.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Do you drive my car over the highway to the destination?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Never. We strictly prohibit highway driving of client vehicles. Your car is transported completely loaded on our enclosed car carriers. Odometer readings, tire treads, and engine health are preserved 100%. Driving is limited strictly to driving onto the ramp during loading and off the ramp during delivery.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">What documents are required to transport a car from Dumka?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">You will need: (1) Vehicle Registration Certificate (RC copy), (2) Valid comprehensive insurance policy copy, (3) Pollution Under Control (PUC) certificate, (4) Owner ID proof (Aadhaar or PAN copy), and (5) Signed digital/physical vehicle condition inspection report noted before loading.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">How much does car transport from Dumka cost?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Pricing depends on vehicle model and destination distance. Regional moves such as Dumka to Ranchi, Patna, or Kolkata typically cost ₹6,000 to ₹10,500. Long-distance transit to Delhi NCR, Bangalore, Pune, or Mumbai ranges between ₹8,500 and ₹19,500 depending on whether it is a hatchback, sedan, or full-size SUV.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Is transit insurance provided for my vehicle?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Yes, we provide comprehensive marine and transit insurance coverage for all car shipments. Coverage protects against collision, rollover, theft, fire, and natural disasters. Insurance is computed based on your vehicle's declared Insured Declared Value (IDV).</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Can you pick up my car from Basukinath Dham or rural Dumka sub-divisions?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Yes. Our Dumka operations team provides door-to-door vehicle pickup across Dumka municipal town (Tin Bazar, Court Road, Dudhani, Rasikpur, Karharbil, Bandarjori) and throughout the surrounding district including Basukinath Dham, Jarmundi, Jama, Shikaripara, Kathikund, and Hansdiha.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Can I keep personal luggage or cartons inside my car during transit?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Yes, clients are permitted to keep up to 40-50 kg of personal luggage or household boxes neatly placed in the car trunk (dicky). However, cash, jewelry, expensive electronics, and inflammable or hazardous items are strictly prohibited by transport safety regulations.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Do you provide IBA-approved bills for car transfer reimbursement?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Yes. Shree Ashirwad Packers and Movers provides authentic IBA-compliant vehicle consignment notes, GST invoices, and transit insurance copies for seamless relocation allowance reimbursement for bank managers, government officials, university professors at SKMU, and defense personnel.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">How can I track my vehicle while it is in transit?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Our carriers are equipped with active GPS tracking units. Furthermore, our dedicated Dumka dispatch desk provides daily WhatsApp tracking updates, highway milestone alerts, and live phone assistance until your vehicle safely arrives at your delivery doorstep.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">How many days in advance should I book car transport in Dumka?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">We recommend booking your car carrier 2 to 4 days prior to your planned moving date to reserve your dedicated carrier slot and schedule pre-transit documentation and doorstep inspection.</p>
            </div>

          </div>
        </section>

        <!-- Final Call to Action Box -->
        <section style="background: linear-gradient(135deg, #0f223d 0%, #1a3a5f 100%); color:#ffffff; padding:45px 35px; border-radius:14px; text-align:center;">
          <h2 style="font-size:2rem; font-weight:800; margin-bottom:14px;">Ready to Transport Your Car from Dumka?</h2>
          <p style="font-size:1.1rem; color:#cbd5e1; max-width:700px; margin:0 auto 28px;">
            Get a guaranteed vehicle carrier estimate with zero hidden costs, doorstep pickup across Dumka &amp; Basukinath, and comprehensive transit insurance protection.
          </p>
          <div style="display:flex; justify-content:center; flex-wrap:wrap; gap:16px;">
            <a href="tel:8409531615" style="display:inline-flex; align-items:center; gap:8px; background:#ff6a28; color:#ffffff; padding:15px 30px; border-radius:8px; font-weight:700; text-decoration:none; box-shadow:0 4px 15px rgba(255,106,40,0.35);">
              Call Car Dispatch: 8409531615
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
            <a href="<?php echo SITE_BASE_URL; ?>/car-transport-in-dumka" style="color:#ff6a28; text-decoration:none; background:#fff7ed; padding:9px 15px; border-radius:6px; font-weight:700; border:1px solid #fed7aa;">Car Transport in Dumka (Current)</a>
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
