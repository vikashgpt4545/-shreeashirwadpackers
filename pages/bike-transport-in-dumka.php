<?php
/**
 * Bike Transport in Dumka - Shree Ashirwad Packers and Movers
 * 
 * High-performance, fully SEO-optimized landing page for two-wheeler shipping,
 * scooty parcel, and motorcycle transport from Dumka across India.
 * Sub-Capital (Up-Rajdhani) of Jharkhand & Santhal Pargana Division Hub.
 */

// Define page-specific metadata
$page_title = "Bike Transport in Dumka | Two Wheeler Parcel Service - Shree Ashirwad";
$page_description = "Safe and certified bike transport in Dumka by Shree Ashirwad Packers and Movers. 4-layer shockproof packing, custom wooden crating, door-to-door pickup across Dumka & Basukinath, and all-India enclosed carrier transit. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/bike-transport-in-dumka";

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
  <meta name="keywords" content="bike transport in dumka, two wheeler parcel dumka, motorcycle transport dumka, scooty parcel service dumka, bike courier dumka to ranchi, bike transport dumka to kolkata, bike parcel basukinath">
  <link rel="canonical" href="<?php echo $canonical_url; ?>">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta property="og:url" content="<?php echo $canonical_url; ?>">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/bike-packing-shree-ashirwad-packers-jharkhand.jpg">
  <meta property="og:image:alt" content="Professional Bike Transport and Packaging in Dumka by Shree Ashirwad Packers">
  <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
  <meta property="og:locale" content="en_IN">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/bike-packing-shree-ashirwad-packers-jharkhand.jpg">

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

  <!-- Structured Data: LocalBusiness / MovingCompany -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "MovingCompany",
    "name": "Shree Ashirwad Packers and Movers Dumka",
    "url": "<?php echo $canonical_url; ?>",
    "logo": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
    "image": "<?php echo SITE_BASE_URL; ?>/images/bike-packing-shree-ashirwad-packers-jharkhand.jpg",
    "description": "Certified bike transport and motorcycle courier parcel services in Dumka by Shree Ashirwad Packers and Movers. Doorstep pickup across Tin Bazar, Dudhani, SKMU Campus, and Basukinath.",
    "telephone": "<?php echo SECONDARY_PHONE_RAW; ?>",
    "priceRange": "₹1,500 - ₹9,500",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Tin Bazar, Near Court Road",
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
    "openingHoursSpecification": {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
      "opens": "07:00",
      "closes": "22:00"
    },
    "areaServed": [
      { "@type": "City", "name": "Dumka" },
      { "@type": "AdministrativeArea", "name": "Santhal Pargana Division" },
      { "@type": "Place", "name": "Basukinath" },
      { "@type": "Place", "name": "Jarmundi" },
      { "@type": "Place", "name": "Jama" },
      { "@type": "Place", "name": "Saraiyahat" },
      { "@type": "Place", "name": "Shikaripara" }
    ],
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Bike Transport Services Dumka",
      "itemListElement": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Standard Scooter & Bike Transport",
            "description": "Multi-layer bubble and corrugated packaging with door-to-door pickup across Dumka."
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Heavy Cruiser & Sports Bike Wooden Crating",
            "description": "Reinforced wooden box crating for Royal Enfield, Jawa, KTM, and premium superbikes."
          }
        }
      ]
    }
  }
  </script>

  <!-- Structured Data: Service -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Bike Transport in Dumka",
    "serviceType": "Two-Wheeler Logistics & Vehicle Transportation",
    "provider": {
      "@type": "MovingCompany",
      "name": "Shree Ashirwad Packers and Movers"
    },
    "areaServed": {
      "@type": "City",
      "name": "Dumka"
    },
    "description": "Specialized two-wheeler transportation and motorcycle courier services from Dumka across India with 4-layer shockproof packing and enclosed vehicle trailers.",
    "offers": {
      "@type": "Offer",
      "priceCurrency": "INR",
      "price": "1800",
      "availability": "https://schema.org/InStock"
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
        "name": "Bike Transport in Dumka",
        "item": "<?php echo $canonical_url; ?>"
      }
    ]
  }
  </script>

  <!-- Structured Data: FAQPage -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "How is my bike packed for transport from Dumka?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We utilize an engineered 4-layer packaging protocol: first, a layer of high-density air bubble wrap covers fuel tanks and painted cowls; second, heavy-duty corrugated sheets shield side body panels and silencers; third, foam sleeves encase mirrors, levers, and headlamps; fourth, stretch wrap film seals the unit against road grime and moisture. Custom wooden crates are built for cruisers and premium sports bikes."
        }
      },
      {
        "@type": "Question",
        "name": "What documents are required to transport a two-wheeler from Dumka?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "You will need: (1) Legible photocopy of Registration Certificate (RC), (2) Valid vehicle insurance policy certificate, (3) Pollution Under Control (PUC) certificate, (4) Government photo ID proof of the owner (Aadhaar or PAN Card), and (5) A signed Consignment Note issued by Shree Ashirwad Packers."
        }
      },
      {
        "@type": "Question",
        "name": "Is fuel drained before loading the bike into the carrier?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. Central transport and safety regulations strictly prohibit shipping motor vehicles with substantial fuel. We require the petrol tank to be nearly empty (maximum 0.5 liter remaining) to prevent flammable vapor accumulation, spillage, and highway fire hazards."
        }
      },
      {
        "@type": "Question",
        "name": "How much does bike transport from Dumka cost?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Standard commuter scooty and 100-125cc bike transport from Dumka to nearby state capitals like Ranchi or Patna costs between ₹1,800 to ₹3,200. Long-distance transport to metro hubs like Delhi, Bangalore, or Mumbai ranges between ₹4,200 to ₹7,500 depending on vehicle engine displacement, wooden crating requirements, and transit insurance value."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide doorstep bike pickup across Dumka and Basukinath?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, our pickup team provides doorstep collection across all Dumka localities including Tin Bazar, Dudhani, Rasikpur, Karharbil, Bandarjori, Court Road, SKMU University Campus, PJMCH Hospital area, and extends to Basukinath Dham and Jarmundi."
        }
      },
      {
        "@type": "Question",
        "name": "Can I ship my helmet, riding jacket, or accessories with the bike?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, your helmet, riding gloves, and accessories can be securely packed inside a separate sealed carton or strapped into the under-seat boot of scooters and clearly tagged on your consignment receipt."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide IBA approved bills for university and government staff in Dumka?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. Shree Ashirwad Packers and Movers supplies 100% genuine IBA-format consignment notes (LR), GST tax invoices with SAC code 9965, and money receipts recognized for reimbursement by SKMU, PJMCH, Santhal Pargana Divisional Commissionerate, and public sector banks."
        }
      },
      {
        "@type": "Question",
        "name": "How can I track my two-wheeler during transit from Dumka?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Each vehicle carrier in our fleet is integrated with GPS tracking. Our dispatch control room provides regular SMS, WhatsApp, and telephonic location milestones upon dispatch, transit toll crossings, hub arrivals, and final delivery dispatch."
        }
      },
      {
        "@type": "Question",
        "name": "What is the transit duration for motorcycle delivery from Dumka to Ranchi or Kolkata?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Transit to Ranchi typically takes 24 to 36 hours. Shifting to Kolkata via Suri and Asansol requires approximately 24 to 48 hours. Long-distance metro deliveries (Delhi NCR, Bengaluru, Hyderabad, Pune) take between 4 to 7 business days via scheduled containerized vehicle carriers."
        }
      },
      {
        "@type": "Question",
        "name": "Is transit insurance mandatory for two-wheeler transport from Dumka?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "While third-party motor insurance is a statutory requirement on Indian highways, we strongly recommend comprehensive marine transit insurance covering accidental vehicle impact, fire, theft, or overturn hazards during long-distance linehaul moves. We provide full policy issuance on spot."
        }
      }
    ]
  }
  </script>
</head>
<body style="font-family:'Plus Jakarta Sans', sans-serif; color:#1e293b; background-color:#ffffff; margin:0; padding:0; line-height:1.6;">

  <!-- Global Header Navigation -->
  <?php include __DIR__ . '/../includes/header.php'; ?>

  <main id="main-content">
    
    <!-- Hero Banner Section -->
    <section class="hero-section" style="background: linear-gradient(135deg, #0f223d 0%, #193860 100%); color:#ffffff; padding: 65px 0 55px; position:relative; overflow:hidden;">
      <div class="container" style="position:relative; z-index:2; max-width:1140px; margin:0 auto; padding:0 20px;">
        <nav class="breadcrumb-trail" aria-label="Breadcrumb" style="margin-bottom:20px; font-size:0.9rem; color:#94a3b8;">
          <a href="<?php echo SITE_BASE_URL; ?>/" style="color:#cbd5e1; text-decoration:none;">Home</a>
          <span style="margin:0 8px; color:#64748b;">&gt;</span>
          <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dumka" style="color:#cbd5e1; text-decoration:none;">Dumka</a>
          <span style="margin:0 8px; color:#64748b;">&gt;</span>
          <span aria-current="page" style="color:#ff6a28; font-weight:600;">Bike Transport</span>
        </nav>
        
        <h1 style="font-size: clamp(2.1rem, 4.2vw, 3.2rem); font-weight:800; line-height:1.2; margin-bottom:18px;">
          Bike Transport in Dumka
        </h1>
        
        <p style="font-size:1.15rem; line-height:1.75; color:#cbd5e1; max-width:920px; margin-bottom:28px;">
          Certified two-wheeler parcel and motorcycle transport services from Dumka (Sub-Capital of Jharkhand) across India by Shree Ashirwad Packers and Movers. Multi-layer bubble wrap packaging, custom wooden crating, specialized enclosed vehicle carriers, doorstep pickup across Tin Bazar, Dudhani, SKMU Campus, and Basukinath, and comprehensive transit insurance protection.
        </p>

        <div style="display:flex; flex-wrap:wrap; gap:16px; align-items:center;">
          <a href="tel:<?php echo SECONDARY_PHONE_RAW; ?>" style="display:inline-flex; align-items:center; gap:10px; background:#ff6a28; color:#ffffff; padding:14px 28px; border-radius:8px; font-weight:700; text-decoration:none; box-shadow: 0 4px 15px rgba(255,106,40,0.35);">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
            Book Bike Parcel: 8409531615
          </a>
          <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="nofollow noopener noreferrer" style="display:inline-flex; align-items:center; gap:10px; background:rgba(255,255,255,0.08); border:1px solid rgba(255,255,255,0.25); color:#ffffff; padding:14px 26px; border-radius:8px; font-weight:600; text-decoration:none; backdrop-filter:blur(6px);">
            WhatsApp Bike Quote &rarr;
          </a>
        </div>
      </div>
    </section>

    <!-- Operational Credentials Bar -->
    <section style="background:#ffffff; padding:28px 0; border-bottom:1px solid #e2e8f0;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">
        <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap:24px; align-items:center;">
          <div style="display:flex; align-items:center; gap:14px;">
            <div style="background:#fff2eb; color:#ff6a28; width:48px; height:48px; border-radius:10px; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:1.1rem;">CRATE</div>
            <div>
              <div style="font-weight:700; color:#0f223d;">Wooden Crates</div>
              <div style="font-size:0.85rem; color:#64748b;">Heavy Cruiser & Sports Bikes</div>
            </div>
          </div>
          <div style="display:flex; align-items:center; gap:14px;">
            <div style="background:#e0f2fe; color:#0284c7; width:48px; height:48px; border-radius:10px; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:1.1rem;">ZERO</div>
            <div>
              <div style="font-weight:700; color:#0f223d;">Zero Scratch Safety</div>
              <div style="font-size:0.85rem; color:#64748b;">4-Layer Cushion Wrap</div>
            </div>
          </div>
          <div style="display:flex; align-items:center; gap:14px;">
            <div style="background:#f0fdf4; color:#16a34a; width:48px; height:48px; border-radius:10px; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:1.2rem;">✓</div>
            <div>
              <div style="font-weight:700; color:#0f223d;">Doorstep Pickup</div>
              <div style="font-size:0.85rem; color:#64748b;">All Dumka & Basukinath</div>
            </div>
          </div>
          <div style="display:flex; align-items:center; gap:14px;">
            <div style="background:#fef3c7; color:#d97706; width:48px; height:48px; border-radius:10px; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:1.1rem;">GPS</div>
            <div>
              <div style="font-weight:700; color:#0f223d;">Live Fleet Tracking</div>
              <div style="font-size:0.85rem; color:#64748b;">Real-Time Milestone Alerts</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Visual Showcase Gallery -->
    <section style="background:#f8fafc; padding:45px 0;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">
        <div style="text-align:center; margin-bottom:32px;">
          <h2 style="font-size:1.9rem; color:#0f223d; font-weight:800;">Authentic Two-Wheeler Packing & Carrier Fleet</h2>
          <p style="color:#64748b; max-width:680px; margin:8px auto 0;">Real photographs of motorcycle packaging, heavy-duty wooden crating, and enclosed transport carrier loading handled by our Santhal Pargana logistics team.</p>
        </div>

        <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap:24px;">
          <div style="background:#ffffff; border-radius:12px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.06); border:1px solid #e2e8f0;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/bike-packing-shree-ashirwad-packers-jharkhand.jpg" alt="Motorcycle 4-layer packaging in Dumka" style="width:100%; height:230px; object-fit:cover; display:block;" loading="lazy">
            <div style="padding:16px;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:6px;">4-Layer Scratchproof Wrap</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.5;">Heavy-gauge air bubble wrap, corrugated sheets, foam armoring, and water-sealed stretch film.</p>
            </div>
          </div>

          <div style="display:grid; grid-template-columns: 1fr; background:#ffffff; border-radius:12px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.06); border:1px solid #e2e8f0;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/two-wheeler-motorcycle-carrier-jharkhand.jpg" alt="Two wheeler enclosed motorcycle carrier loading Dumka" style="width:100%; height:230px; object-fit:cover; display:block;" loading="lazy">
            <div style="padding:16px;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Specialized Enclosed Bike Carriers</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.5;">Dedicated enclosed auto-carrier trailers featuring wheel clamp locks and 4-point safety ratchet straps.</p>
            </div>
          </div>

          <div style="background:#ffffff; border-radius:12px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.06); border:1px solid #e2e8f0;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/scooter-bike-safe-transit-packing-jharkhand.jpg" alt="Scooter and bike safe transit crating Dumka" style="width:100%; height:230px; object-fit:cover; display:block;" loading="lazy">
            <div style="padding:16px;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Custom Wooden Crating</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.5;">Solid timber framing engineered specifically for long-distance transit of superbikes and vintage models.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Main Content Editorial -->
    <article class="article-content" style="padding: 55px 0 70px; background:#ffffff;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">
        
        <!-- Section 1: Overview & Strategic Hub Role -->
        <section style="margin-bottom:45px;">
          <h2 style="font-size:2rem; color:#0f223d; font-weight:800; margin-bottom:18px;">Why Choose Shree Ashirwad for Bike Transport in Dumka?</h2>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:16px;">
            Transporting a two-wheeler over long distances requires specialized care, calibrated loading equipment, and protective packaging materials. In Dumka—the administrative Sub-Capital (Up-Rajdhani) of Jharkhand and the headquarters of Santhal Pargana division—there is a constant relocation requirement from government officials, judicial personnel, professors and research scholars from <strong>Sido Kanhu Murmu University (SKMU)</strong>, medical doctors and nursing staff from <strong>Phulo Jhano Murmu Medical College and Hospital (PJMCH)</strong>, and banking executives transferring across Jharkhand, Bihar, and Pan-India.
          </p>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:16px;">
            Conventional railway luggage booking often involves chaotic loading on open railway platforms, risks of fuel tank dents, broken side indicators, and bent levers. At <strong>Shree Ashirwad Packers and Movers</strong>, we eliminate every trace of transit anxiety. Operating directly from our regional center near Tin Bazar and Court Road, our certified vehicle handling team oversees the entire sequence: doorstep collection, multi-layer shockproof packing, custom crating, hydraulic carrier loading, GPS-tracked highway transit, and doorstep delivery directly to your new address anywhere in India. As part of our comprehensive <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dumka" style="color:#0284c7; font-weight:600; text-decoration:underline;">packers and movers in Dumka</a> network, we also provide dedicated <a href="<?php echo SITE_BASE_URL; ?>/car-transport-in-dumka" style="color:#0284c7; font-weight:600; text-decoration:underline;">car transport in Dumka</a> and <a href="<?php echo SITE_BASE_URL; ?>/household-shifting-services-in-dumka" style="color:#0284c7; font-weight:600; text-decoration:underline;">household shifting services in Dumka</a> for clients relocating their complete residence.
          </p>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:16px;">
            Unlike informal booking middlemen who load scooters haphazardly into open trucks alongside bulky wooden almirahs or iron scrap, Shree Ashirwad guarantees dedicated vehicle slots inside specialized, weatherproof automobile carriers. Every vehicle is safeguarded with individual wheel stoppers, heavy-duty ratchet tie-downs, and industrial protective wraps, ensuring your scooter, cruiser, or sports commuter motorcycle arrives at your destination in the exact pristine mechanical and aesthetic condition in which it was handed over to us.
          </p>
        </section>

        <!-- Section 2: Comparison - Railway Parcel vs. Shree Ashirwad Carrier -->
        <section style="margin-bottom:50px; background:#ffffff; border:1px solid #e2e8f0; border-radius:14px; padding:35px; box-shadow:0 4px 15px rgba(0,0,0,0.03);">
          <h2 style="font-size:1.8rem; color:#0f223d; font-weight:800; margin-bottom:14px;">Railway Luggage Parcel vs. Shree Ashirwad Enclosed Carrier</h2>
          <p style="font-size:1.02rem; line-height:1.8; color:#334155; margin-bottom:22px;">
            Before choosing how to relocate your two-wheeler from Dumka, it is vital to understand the crucial technical differences between traditional platform railway parcels and certified door-to-door carrier logistics:
          </p>
          
          <div style="overflow-x:auto;">
            <table style="width:100%; border-collapse:collapse; text-align:left; font-size:0.95rem;">
              <thead>
                <tr style="background:#0f223d; color:#ffffff;">
                  <th style="padding:14px 16px; font-weight:700;">Service Parameter</th>
                  <th style="padding:14px 16px; font-weight:700;">Indian Railways Parcel (Station)</th>
                  <th style="padding:14px 16px; font-weight:700;">Shree Ashirwad Carrier Logistics</th>
                </tr>
              </thead>
              <tbody>
                <tr style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                  <td style="padding:13px 16px; font-weight:700; color:#0f223d;">Pickup &amp; Delivery</td>
                  <td style="padding:13px 16px; color:#dc2626;">Station-to-Station only; self-towing required</td>
                  <td style="padding:13px 16px; color:#16a34a; font-weight:600;">100% Doorstep pickup across Dumka to destination door</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#ffffff;">
                  <td style="padding:13px 16px; font-weight:700; color:#0f223d;">Packaging Standard</td>
                  <td style="padding:13px 16px; color:#dc2626;">Crude gunny sack with thin coir string</td>
                  <td style="padding:13px 16px; color:#16a34a; font-weight:600;">Engineered 4-layer bubble, corrugated, and foam wrap</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                  <td style="padding:13px 16px; font-weight:700; color:#0f223d;">Scratch Risk</td>
                  <td style="padding:13px 16px; color:#dc2626;">High due to platform dragging and rough handling</td>
                  <td style="padding:13px 16px; color:#16a34a; font-weight:600;">Zero-scratch guarantee with soft EPE foam armor</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#ffffff;">
                  <td style="padding:13px 16px; font-weight:700; color:#0f223d;">Transit Tracking</td>
                  <td style="padding:13px 16px; color:#dc2626;">Manual parcel office enquiries only</td>
                  <td style="padding:13px 16px; color:#16a34a; font-weight:600;">Live GPS satellite tracking &amp; regular milestone alerts</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                  <td style="padding:13px 16px; font-weight:700; color:#0f223d;">Cruiser / Superbike Crating</td>
                  <td style="padding:13px 16px; color:#dc2626;">Unavailable; vehicle loaded loose</td>
                  <td style="padding:13px 16px; color:#16a34a; font-weight:600;">Reinforced custom timber crating available</td>
                </tr>
                <tr style="background:#ffffff;">
                  <td style="padding:13px 16px; font-weight:700; color:#0f223d;">Employer Billing</td>
                  <td style="padding:13px 16px; color:#64748b;">Manual railway receipts with limited formats</td>
                  <td style="padding:13px 16px; color:#16a34a; font-weight:600;">100% Audit-compliant IBA-approved bills &amp; GST invoices</td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>

        <!-- Section 3: The 4-Layer Packaging Protocol -->
        <section style="margin-bottom:50px; background:#f8fafc; padding:35px; border-radius:14px; border:1px solid #e2e8f0;">
          <h2 style="font-size:1.8rem; color:#0f223d; font-weight:800; margin-bottom:20px;">Our Precision 4-Layer Two-Wheeler Packaging System</h2>
          <p style="font-size:1.02rem; line-height:1.8; color:#334155; margin-bottom:24px;">
            Standard packaging methods fail to protect fragile components like front cowls, indicators, exhausts, and digital instrument clusters from vibration and friction. Our field technicians apply an engineered multi-tier protective wrapping system:
          </p>
          
          <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap:20px;">
            <div style="background:#ffffff; padding:22px; border-radius:10px; border-left:4px solid #ff6a28; box-shadow:0 2px 8px rgba(0,0,0,0.04);">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Tier 1: High-Density Air Bubble Wrap</h3>
              <p style="font-size:0.95rem; line-height:1.6; color:#64748b;">Shock-absorbing heavy bubble film directly wrapped around the painted metal fuel tank, side fairings, and mudguards to absorb micro-vibrations and prevent paint blemishes.</p>
            </div>

            <div style="background:#ffffff; padding:22px; border-radius:10px; border-left:4px solid #0284c7; box-shadow:0 2px 8px rgba(0,0,0,0.04);">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Tier 2: 5-Ply Corrugated Armor Sheets</h3>
              <p style="font-size:0.95rem; line-height:1.6; color:#64748b;">Tough 5-ply corrugated cardboard sheets contoured around the silencer, engine casing, crankcase, and side panels to shield from incidental mechanical impacts.</p>
            </div>

            <div style="background:#ffffff; padding:22px; border-radius:10px; border-left:4px solid #16a34a; box-shadow:0 2px 8px rgba(0,0,0,0.04);">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Tier 3: EPE Foam Component Sleeves</h3>
              <p style="font-size:0.95rem; line-height:1.6; color:#64748b;">Dense closed-cell foam sleeves fitted individually over rearview mirrors, clutch and brake levers, footpegs, turn signals, and digital speedometer consoles.</p>
            </div>

            <div style="background:#ffffff; padding:22px; border-radius:10px; border-left:4px solid #d97706; box-shadow:0 2px 8px rgba(0,0,0,0.04);">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Tier 4: Waterproof Stretch Film Wrap</h3>
              <p style="font-size:0.95rem; line-height:1.6; color:#64748b;">Heavy-gauge industrial stretch film wrapped tightly around the entire motorcycle, sealing out moisture, torrential highway monsoon rain, highway road grime, and coal soot.</p>
            </div>
          </div>
        </section>

        <!-- Section 4: Two-Wheeler Rate Card Table -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.8rem; color:#0f223d; font-weight:800; margin-bottom:16px;">Estimated Bike Transport Rates from Dumka</h2>
          <p style="font-size:1.02rem; line-height:1.8; color:#334155; margin-bottom:22px;">
            We offer transparent, all-inclusive pricing with zero hidden handling fees. Estimated rates vary by vehicle category, transport distance, and crating selection:
          </p>

          <div style="overflow-x:auto; margin-bottom:16px; border-radius:10px; border:1px solid #e2e8f0; box-shadow:0 2px 10px rgba(0,0,0,0.04);">
            <table style="width:100%; border-collapse:collapse; text-align:left; font-size:0.98rem;">
              <thead>
                <tr style="background:#0f223d; color:#ffffff;">
                  <th style="padding:14px 18px; font-weight:700;">Destination Route from Dumka</th>
                  <th style="padding:14px 18px; font-weight:700;">Distance</th>
                  <th style="padding:14px 18px; font-weight:700;">Scooty / 100cc-125cc</th>
                  <th style="padding:14px 18px; font-weight:700;">150cc - 250cc Bike</th>
                  <th style="padding:14px 18px; font-weight:700;">Royal Enfield / 350cc+</th>
                </tr>
              </thead>
              <tbody>
                <tr style="border-bottom:1px solid #e2e8f0; background:#ffffff;">
                  <td style="padding:14px 18px; font-weight:600; color:#0f223d;"><a href="<?php echo SITE_BASE_URL; ?>/dumka-to-ranchi-packers-and-movers" style="color:#0f223d; text-decoration:underline;">Dumka to Ranchi</a></td>
                  <td style="padding:14px 18px; color:#64748b;">280 km</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹1,800 - ₹2,500</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹2,400 - ₹3,200</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹3,200 - ₹4,000</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                  <td style="padding:14px 18px; font-weight:600; color:#0f223d;"><a href="<?php echo SITE_BASE_URL; ?>/dumka-to-kolkata-packers-and-movers" style="color:#0f223d; text-decoration:underline;">Dumka to Kolkata</a></td>
                  <td style="padding:14px 18px; color:#64748b;">290 km</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹2,200 - ₹3,000</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹2,800 - ₹3,800</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹3,800 - ₹4,600</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#ffffff;">
                  <td style="padding:14px 18px; font-weight:600; color:#0f223d;"><a href="<?php echo SITE_BASE_URL; ?>/dumka-to-patna-packers-and-movers" style="color:#0f223d; text-decoration:underline;">Dumka to Patna</a></td>
                  <td style="padding:14px 18px; color:#64748b;">280 km</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹2,400 - ₹3,200</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹3,000 - ₹3,900</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹3,900 - ₹4,800</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                  <td style="padding:14px 18px; font-weight:600; color:#0f223d;">Dumka to Delhi / NCR</td>
                  <td style="padding:14px 18px; color:#64748b;">1,250 km</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹4,500 - ₹5,800</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹5,800 - ₹7,200</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹7,200 - ₹8,800</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#ffffff;">
                  <td style="padding:14px 18px; font-weight:600; color:#0f223d;">Dumka to Bangalore</td>
                  <td style="padding:14px 18px; color:#64748b;">1,900 km</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹5,800 - ₹7,200</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹7,200 - ₹8,800</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹8,800 - ₹10,800</td>
                </tr>
                <tr style="background:#f8fafc;">
                  <td style="padding:14px 18px; font-weight:600; color:#0f223d;">Dumka to Pune / Mumbai</td>
                  <td style="padding:14px 18px; color:#64748b;">1,820 km</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹5,500 - ₹7,000</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹7,000 - ₹8,500</td>
                  <td style="padding:14px 18px; color:#16a34a; font-weight:600;">₹8,500 - ₹10,500</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p style="font-size:0.88rem; color:#64748b;">*Note: Pricing includes 4-layer shockproof packing, loading, toll taxes, and doorstep delivery. Optional full wooden crating (recommended for cruisers and superbikes) is available for an additional ₹1,000 - ₹1,800 depending on dimensions.</p>
        </section>

        <!-- Section 5: Neighborhood Doorstep Pickup Across Dumka -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.8rem; color:#0f223d; font-weight:800; margin-bottom:16px;">Doorstep Bike Pickup Across All Dumka Localities & Towns</h2>
          <p style="font-size:1.02rem; line-height:1.8; color:#334155; margin-bottom:20px;">
            You do not need to ride your motorcycle to a distant booking warehouse or negotiate station platform red tape. Our specialized pickup vehicles cover every locality in the Dumka municipal area and surrounding sub-divisions:
          </p>

          <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap:18px;">
            <div style="border:1px solid #e2e8f0; padding:18px; border-radius:10px; background:#ffffff;">
              <h3 style="font-size:1.05rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Tin Bazar & Court Road</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.5;">Express doorstep pickup across Commercial Tin Bazar, Chowk Bazar, Court Road, DC Office compound, and Gandhi Maidan vicinity.</p>
            </div>
            <div style="border:1px solid #e2e8f0; padding:18px; border-radius:10px; background:#ffffff;">
              <h3 style="font-size:1.05rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Dudhani & Tata Showroom Chowk</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.5;">Daily collection from residential neighborhoods in Dudhani, Tata Showroom Chowk, Rasikpur, and Kurwa road residential clusters.</p>
            </div>
            <div style="border:1px solid #e2e8f0; padding:18px; border-radius:10px; background:#ffffff;">
              <h3 style="font-size:1.05rem; color:#0f223d; font-weight:700; margin-bottom:6px;">SKMU Campus & Dighee</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.5;">Dedicated pickup service for Sido Kanhu Murmu University (SKMU) faculty, scholars, staff quarters, and Dighee residential area.</p>
            </div>
            <div style="border:1px solid #e2e8f0; padding:18px; border-radius:10px; background:#ffffff;">
              <h3 style="font-size:1.05rem; color:#0f223d; font-weight:700; margin-bottom:6px;">PJMCH & Karharbil</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.5;">Regular dispatch for Phulo Jhano Murmu Medical College and Hospital (PJMCH) doctors, Bandarjori, and Karharbil housing sectors.</p>
            </div>
            <div style="border:1px solid #e2e8f0; padding:18px; border-radius:10px; background:#ffffff;">
              <h3 style="font-size:1.05rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Basukinath Dham & Jarmundi</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.5;">Daily vehicle collection covering the pilgrimage town of Basukinath, Jarmundi block, and Deoghar highway link road.</p>
            </div>
            <div style="border:1px solid #e2e8f0; padding:18px; border-radius:10px; background:#ffffff;">
              <h3 style="font-size:1.05rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Shikaripara & Saraiyahat</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.5;">Comprehensive regional coverage extending to Shikaripara stone mining belt, Saraiyahat, Kathikund, Jama, and Ranishwar border area.</p>
            </div>
          </div>
        </section>

        <!-- Section 6: Step-by-Step Two-Wheeler Shipping Process -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.8rem; color:#0f223d; font-weight:800; margin-bottom:16px;">Step-by-Step Two-Wheeler Shipping Process in Dumka</h2>
          <div style="display:flex; flex-direction:column; gap:16px;">
            <div style="display:flex; gap:16px; background:#f8fafc; padding:20px; border-radius:10px; border:1px solid #e2e8f0;">
              <div style="background:#ff6a28; color:#ffffff; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; flex-shrink:0;">1</div>
              <div>
                <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:4px;">Booking &amp; Documentation Pre-Check</h3>
                <p style="font-size:0.95rem; color:#64748b; line-height:1.6;">Contact our team via call or WhatsApp at 8409531615. Share bike model, destination city, and preferred pickup date. Ensure RC copy, insurance policy, and owner photo ID are prepared.</p>
              </div>
            </div>

            <div style="display:flex; gap:16px; background:#f8fafc; padding:20px; border-radius:10px; border:1px solid #e2e8f0;">
              <div style="background:#ff6a28; color:#ffffff; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; flex-shrink:0;">2</div>
              <div>
                <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:4px;">Doorstep Inspection &amp; Joint Sign-Off</h3>
                <p style="font-size:0.95rem; color:#64748b; line-height:1.6;">Our supervisor visits your Dumka doorstep to note fuel drain compliance, record exact odometer readings, photograph body panels, and issue your official numbered Consignment Note.</p>
              </div>
            </div>

            <div style="display:flex; gap:16px; background:#f8fafc; padding:20px; border-radius:10px; border:1px solid #e2e8f0;">
              <div style="background:#ff6a28; color:#ffffff; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; flex-shrink:0;">3</div>
              <div>
                <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:4px;">Precision 4-Layer On-Site Armor Wrapping</h3>
                <p style="font-size:0.95rem; color:#64748b; line-height:1.6;">Our packing technicians wrap high-density bubble wrap around painted fuel tanks and cowls, affix corrugated cardboard guards to engine casings, secure lever foam sleeves, and water-seal with stretch film.</p>
              </div>
            </div>

            <div style="display:flex; gap:16px; background:#f8fafc; padding:20px; border-radius:10px; border:1px solid #e2e8f0;">
              <div style="background:#ff6a28; color:#ffffff; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; flex-shrink:0;">4</div>
              <div>
                <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:4px;">Hydraulic Ramp Carrier Loading &amp; Securing</h3>
                <p style="font-size:0.95rem; color:#64748b; line-height:1.6;">The bike is wheeled into our enclosed carrier trailer using a low-gradient ramp and locked into dedicated wheel chocks with 4-point industrial ratchet straps to prevent tilting or contact during transit.</p>
              </div>
            </div>

            <div style="display:flex; gap:16px; background:#f8fafc; padding:20px; border-radius:10px; border:1px solid #e2e8f0;">
              <div style="background:#ff6a28; color:#ffffff; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; flex-shrink:0;">5</div>
              <div>
                <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:4px;">GPS-Monitored Highway Transit &amp; Door Delivery</h3>
                <p style="font-size:0.95rem; color:#64748b; line-height:1.6;">Your motorcycle travels inside sealed vehicle carriers with active satellite GPS monitoring. Upon reaching your destination city, our local delivery team safely unpacks your bike and hands over keys in 100% pristine condition.</p>
              </div>
            </div>
          </div>
        </section>

        <!-- Section 7: Official IBA Approved Billing Documentation -->
        <section style="margin-bottom:50px; background:#eff6ff; padding:32px; border-radius:12px; border:1px solid #bfdbfe;">
          <h2 style="font-size:1.7rem; color:#1e3a8a; font-weight:800; margin-bottom:14px;">100% Genuine IBA Approved Vehicle Shifting Claims</h2>
          <p style="font-size:1.02rem; line-height:1.8; color:#1e40af; margin-bottom:16px;">
            Transferring on official company orders from Coal India, SKMU University, PJMCH Medical College, Eastern Railway, State Bank of India, PNB, or Santhal Pargana government directorates? We supply complete, audit-compliant reimbursement packs including:
          </p>
          <ul style="list-style-type:none; padding:0; display:grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap:12px; color:#1e3a8a; font-weight:600;">
            <li style="display:flex; align-items:center; gap:8px;">✓ Official IBA-Format Consignment Note (LR)</li>
            <li style="display:flex; align-items:center; gap:8px;">✓ GST-Compliant Tax Invoice with SAC Code 9965</li>
            <li style="display:flex; align-items:center; gap:8px;">✓ Pre-Dispatch Vehicle Inspection Form</li>
            <li style="display:flex; align-items:center; gap:8px;">✓ Transit Insurance Policy Certificate</li>
            <li style="display:flex; align-items:center; gap:8px;">✓ Official Stamped Payment Money Receipt</li>
            <li style="display:flex; align-items:center; gap:8px;">✓ 100% Guaranteed Employer Reimbursement Acceptance</li>
          </ul>
        </section>

        <!-- Section 8: Preparation Checklist for Two-Wheeler Shifting -->
        <section style="margin-bottom:50px; background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; padding:32px;">
          <h2 style="font-size:1.7rem; color:#0f223d; font-weight:800; margin-bottom:14px;">Pre-Move Preparation Checklist for Bike Owners in Dumka</h2>
          <p style="font-size:1rem; line-height:1.7; color:#475569; margin-bottom:18px;">
            To ensure zero delays during pickup and compliance with highway transport authorities, please review these four practical preparation steps:
          </p>
          <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap:18px;">
            <div style="background:#f8fafc; padding:18px; border-radius:8px; border-left:3px solid #ff6a28;">
              <h4 style="margin:0 0 6px; font-size:1rem; color:#0f223d;">1. Empty Fuel Tank</h4>
              <p style="margin:0; font-size:0.88rem; color:#64748b;">Keep petrol below 0.5 liter. Carriers strictly forbid full tanks due to highway safety and fire norms.</p>
            </div>
            <div style="background:#f8fafc; padding:18px; border-radius:8px; border-left:3px solid #0284c7;">
              <h4 style="margin:0 0 6px; font-size:1rem; color:#0f223d;">2. Prepare Documents</h4>
              <p style="margin:0; font-size:0.88rem; color:#64748b;">Keep self-attested photocopies of RC, valid insurance policy, PUC certificate, and government photo ID ready.</p>
            </div>
            <div style="background:#f8fafc; padding:18px; border-radius:8px; border-left:3px solid #16a34a;">
              <h4 style="margin:0 0 6px; font-size:1rem; color:#0f223d;">3. Remove Personal Items</h4>
              <p style="margin:0; font-size:0.88rem; color:#64748b;">Remove loose accessories, aftermarket mobile phone holders, toll passes, and any personal valuables.</p>
            </div>
            <div style="background:#f8fafc; padding:18px; border-radius:8px; border-left:3px solid #d97706;">
              <h4 style="margin:0 0 6px; font-size:1rem; color:#0f223d;">4. Record Inspection</h4>
              <p style="margin:0; font-size:0.88rem; color:#64748b;">Take photos of current odometer reading and body panels jointly with our pickup supervisor before packing.</p>
            </div>
          </div>
        </section>

        <!-- Section 9: Frequently Asked Questions -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.8rem; color:#0f223d; font-weight:800; margin-bottom:24px;">Frequently Asked Questions on Bike Transport in Dumka</h2>
          
          <div style="display:flex; flex-direction:column; gap:16px;">
            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">How is my bike packed for transport from Dumka?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">We utilize an engineered 4-layer packaging protocol: first, a layer of high-density air bubble wrap covers fuel tanks and painted cowls; second, heavy-duty corrugated sheets shield side body panels and silencers; third, foam sleeves encase mirrors, levers, and headlamps; fourth, stretch wrap film seals the unit against road grime and moisture. Custom wooden crates are built for cruisers and premium sports bikes.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">What documents are required to transport a two-wheeler from Dumka?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">You will need: (1) Legible photocopy of Registration Certificate (RC), (2) Valid vehicle insurance policy certificate, (3) Pollution Under Control (PUC) certificate, (4) Government photo ID proof of the owner (Aadhaar or PAN Card), and (5) A signed Consignment Note issued by Shree Ashirwad Packers.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Is fuel drained before loading the bike into the carrier?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Yes. Central transport and safety regulations strictly prohibit shipping motor vehicles with substantial fuel. We require the petrol tank to be nearly empty (maximum 0.5 liter remaining) to prevent flammable vapor accumulation, spillage, and highway fire hazards.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">How much does bike transport from Dumka cost?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Standard commuter scooty and 100-125cc bike transport from Dumka to nearby state capitals like Ranchi or Patna costs between ₹1,800 to ₹3,200. Long-distance transport to metro hubs like Delhi, Bangalore, or Mumbai ranges between ₹4,200 to ₹7,500 depending on vehicle engine displacement, wooden crating requirements, and transit insurance value.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Do you provide doorstep bike pickup across Dumka and Basukinath?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Yes, our pickup team provides doorstep collection across all Dumka localities including Tin Bazar, Dudhani, Rasikpur, Karharbil, Bandarjori, Court Road, SKMU University Campus, PJMCH Hospital area, and extends to Basukinath Dham and Jarmundi.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Can I ship my helmet, riding jacket, or accessories with the bike?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Yes, your helmet, riding gloves, and accessories can be securely packed inside a separate sealed carton or strapped into the under-seat boot of scooters and clearly tagged on your consignment receipt.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Do you provide IBA approved bills for university and government staff in Dumka?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Yes. Shree Ashirwad Packers and Movers supplies 100% genuine IBA-format consignment notes (LR), GST tax invoices with SAC code 9965, and money receipts recognized for reimbursement by SKMU, PJMCH, Santhal Pargana Divisional Commissionerate, and public sector banks.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">How can I track my two-wheeler during transit from Dumka?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Each vehicle carrier in our fleet is integrated with GPS tracking. Our dispatch control room provides regular SMS, WhatsApp, and telephonic location milestones upon dispatch, transit toll crossings, hub arrivals, and final delivery dispatch.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">What is the transit duration for motorcycle delivery from Dumka to Ranchi or Kolkata?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Transit to Ranchi typically takes 24 to 36 hours. Shifting to Kolkata via Suri and Asansol requires approximately 24 to 48 hours. Long-distance metro deliveries (Delhi NCR, Bengaluru, Hyderabad, Pune) take between 4 to 7 business days via scheduled containerized vehicle carriers.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Is transit insurance mandatory for two-wheeler transport from Dumka?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">While third-party motor insurance is a statutory requirement on Indian highways, we strongly recommend comprehensive marine transit insurance covering accidental vehicle impact, fire, theft, or overturn hazards during long-distance linehaul moves. We provide full policy issuance on spot.</p>
            </div>
          </div>
        </section>

        <!-- Final Call to Action Box -->
        <section style="background: linear-gradient(135deg, #0f223d 0%, #1a3a5f 100%); color:#ffffff; padding:45px 35px; border-radius:14px; text-align:center;">
          <h2 style="font-size:2rem; font-weight:800; margin-bottom:14px;">Ready to Transport Your Bike from Dumka Safely?</h2>
          <p style="font-size:1.1rem; color:#cbd5e1; max-width:700px; margin:0 auto 28px;">
            Get an instant, customized quote for your motorcycle, scooty, or premium sports bike. Free doorstep inspection and zero-scratch guarantee across Dumka and Santhal Pargana.
          </p>
          <div style="display:flex; justify-content:center; flex-wrap:wrap; gap:16px;">
            <a href="tel:<?php echo SECONDARY_PHONE_RAW; ?>" style="display:inline-flex; align-items:center; gap:8px; background:#ff6a28; color:#ffffff; padding:15px 30px; border-radius:8px; font-weight:700; text-decoration:none; box-shadow:0 4px 15px rgba(255,106,40,0.35);">
              Call Dispatch: 8409531615
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
            <a href="<?php echo SITE_BASE_URL; ?>/bike-transport-in-dumka" style="color:#ff6a28; text-decoration:none; background:#fff7ed; padding:9px 15px; border-radius:6px; font-weight:700; border:1px solid #fed7aa;">Bike Transport in Dumka (Current)</a>
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
  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="<?php echo SITE_BASE_URL; ?>/assets/js/main.js" defer></script>
</body>
</html>
