<?php
/**
 * Dumka to Patna Packers and Movers - Shree Ashirwad Packers and Movers
 * 
 * High-performance, fully SEO-optimized corridor landing page for household shifting,
 * car carrier shipping, bike parcel, and corporate relocation connecting
 * Dumka (Sub-Capital of Jharkhand) to Patna (Capital of Bihar).
 */

// Define page-specific metadata
$page_title = "Dumka to Patna Packers and Movers | Shifting Service - Shree Ashirwad";
$page_description = "Dependable Dumka to Patna packers and movers by Shree Ashirwad Packers. Dedicated container trucks, 24-36 hr delivery, car & bike shipping, 5-layer packing, e-Way bill compliance. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/dumka-to-patna-packers-and-movers";

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
  <meta name="keywords" content="dumka to patna packers and movers, packers and movers dumka to patna, household shifting dumka to patna, car transport dumka to patna, bike parcel dumka to patna, goods transport dumka to patna">
  <link rel="canonical" href="<?php echo $canonical_url; ?>">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta property="og:url" content="<?php echo $canonical_url; ?>">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg">
  <meta property="og:image:alt" content="Dumka to Patna Interstate Relocation Truck by Shree Ashirwad Packers">
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
    "name": "Shree Ashirwad Packers and Movers - Dumka to Patna Route",
    "alternateName": "Dumka Patna Interstate Movers",
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
      { "@type": "City", "name": "Patna" },
      { "@type": "State", "name": "Bihar" },
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
    "serviceType": "Interstate Relocation, Household Shifting, Car Carrier & Two-Wheeler Parcel",
    "name": "Dumka to Patna Packers and Movers Service",
    "provider": {
      "@type": "MovingCompany",
      "name": "Shree Ashirwad Packers and Movers",
      "telephone": "+918409531615",
      "url": "https://www.shreeashirwadpackers.com/"
    },
    "areaServed": [
      { "@type": "City", "name": "Dumka" },
      { "@type": "City", "name": "Patna" }
    ],
    "description": "Dedicated interstate moving corridor connecting Dumka (Jharkhand) to Patna (Bihar) via Hansdiha, Banka, Bhagalpur or Deoghar, Jamui, Mokama. Features 5-layer packing, 24 to 36-hour delivery, zero transshipment, full transit insurance, and IBA-approved billing.",
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Dumka to Patna Relocation Services",
      "itemListElement": [
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Dedicated Full Truck Load Shifting (Dumka to Patna)" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Shared Part-Load Household Freight" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Enclosed Car Carrier & Motorcycle Transport" } },
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
        "name": "Dumka to Patna Movers",
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
        "name": "How much time does goods shifting take from Dumka to Patna?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "For a dedicated container vehicle (Full Truck Load), transit takes 24 to 36 hours. The distance between Dumka and Patna is roughly 275 to 290 km. Packing and loading take place on Day 1 in Dumka, highway travel takes 7-9 hours via Banka/Bhagalpur or Jamui/Mokama, and doorstep delivery with unloading in Patna is scheduled on Day 2."
        }
      },
      {
        "@type": "Question",
        "name": "What is the cost of packers and movers from Dumka to Patna?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Rates typically range between ₹11,500 and ₹16,000 for a 1 BHK flat, ₹16,500 and ₹23,500 for a standard 2 BHK family residence, and ₹23,500 to ₹35,000 for a 3 BHK home. Car transport ranges from ₹6,000 to ₹10,200, and two-wheeler bike shipping ranges from ₹2,600 to ₹4,800."
        }
      },
      {
        "@type": "Question",
        "name": "Which highway route is used from Dumka to Patna?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Our trucks operate across two primary corridors: (1) The northern route via Hansdiha, Banka, Bhagalpur, Lakhisarai, Mokama, and Bakhtiyarpur (NH-133 / NH-31), or (2) The western corridor via Deoghar, Jasidih, Jamui, and Mokama. Both routes feature well-maintained commercial highways."
        }
      },
      {
        "@type": "Question",
        "name": "Do you deliver to all residential localities in Patna?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we deliver across all neighborhoods in Patna including Kankarbagh, Boring Road, Bailey Road, Patliputra Colony, Rajendra Nagar, Danapur, Saguna More, Ashiana Nagar, Exhibition Road, Anisabad, Gola Road, AIIMS Patna (Phulwari Sharif), and Jagdeo Path."
        }
      },
      {
        "@type": "Question",
        "name": "Is an electronic e-Way bill required between Jharkhand and Bihar?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, moving household goods interstate between Jharkhand and Bihar valued above statutory limits mandates a GST e-Way bill. Shree Ashirwad Packers handles complete e-Way bill registration and vehicle Part-B assignment, preventing any checkpost delays."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide transit insurance for Dumka to Patna relocations?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we arrange comprehensive transit insurance through reputed national insurance partners. It protects your consignment against accidental impact, vehicle overturning, fire, theft, and natural hazards on the highway."
        }
      },
      {
        "@type": "Question",
        "name": "Can you transport my car or bike to Patna along with household goods?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. We offer covered hydraulic car carriers and dedicated motorcycle parcel crating. We can either ship your vehicle in specialized carriers or within a partitioned multi-utility container alongside your household furniture."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide IBA-approved bills for government transfer claims in Bihar?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. We supply 100% IBA-compliant consignment notes (LR), GST invoices, itemized packing lists, and insurance documents accepted by Bihar State Government departments, central government ministries, defense divisions, and nationalized banks."
        }
      },
      {
        "@type": "Question",
        "name": "Do your workers dismantle and assemble double beds and modular wardrobes?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. Our moving crew includes experienced carpenters who dismantle wooden double beds, wardrobes, and dining tables at your home in Dumka and reassemble them at your destination residence in Patna."
        }
      },
      {
        "@type": "Question",
        "name": "How can I book a moving slot for Dumka to Patna?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "You can call our dedicated corridor coordinator at 8409531615 or message us on WhatsApp. We provide free doorstep or video inventory surveys and give you an all-inclusive guaranteed written quotation."
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
          <span aria-current="page" style="color:#ff6a28; font-weight:600;">Dumka to Patna Movers</span>
        </nav>
        
        <h1 style="font-size: clamp(2.1rem, 4.2vw, 3.2rem); font-weight:800; line-height:1.2; margin-bottom:18px;">
          Dumka to Patna Packers and Movers
        </h1>
        
        <p style="font-size:1.15rem; line-height:1.75; color:#cbd5e1; max-width:920px; margin-bottom:28px;">
          Fast, direct, and certified interstate relocation connecting Dumka (Sub-Capital of Jharkhand) to Patna (Capital of Bihar). Dedicated container trucks, 24 to 36-hour guaranteed doorstep delivery, complete GST e-Way bill compliance, 5-layer shockproof packing, car carriers, and 100% genuine IBA-compliant transfer bills.
        </p>

        <div style="display:flex; flex-wrap:wrap; gap:16px; align-items:center;">
          <a href="tel:8409531615" style="display:inline-flex; align-items:center; gap:10px; background:#ff6a28; color:#ffffff; padding:14px 28px; border-radius:8px; font-weight:700; text-decoration:none; box-shadow: 0 4px 15px rgba(255,106,40,0.35);">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
            Book Patna Route: 8409531615
          </a>
          <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="nofollow noopener noreferrer" style="display:inline-flex; align-items:center; gap:10px; background:rgba(255,255,255,0.08); border:1px solid rgba(255,255,255,0.25); color:#ffffff; padding:14px 26px; border-radius:8px; font-weight:600; text-decoration:none; backdrop-filter:blur(6px);">
            WhatsApp Patna Quote &rarr;
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
              <div style="font-size:0.85rem; color:#64748b;">Direct Route via Banka/Mokama</div>
            </div>
          </div>
          <div style="display:flex; align-items:center; gap:14px;">
            <div style="background:#e0f2fe; color:#0284c7; width:48px; height:48px; border-radius:10px; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:1.1rem;">E-WAY</div>
            <div>
              <div style="font-weight:700; color:#0f223d;">GST e-Way Bill</div>
              <div style="font-size:0.85rem; color:#64748b;">Seamless Border Checkpoints</div>
            </div>
          </div>
          <div style="display:flex; align-items:center; gap:14px;">
            <div style="background:#f0fdf4; color:#16a34a; width:48px; height:48px; border-radius:10px; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:1.2rem;">✓</div>
            <div>
              <div style="font-weight:700; color:#0f223d;">IBA Approved</div>
              <div style="font-size:0.85rem; color:#64748b;">Government &amp; Bank Claims</div>
            </div>
          </div>
          <div style="display:flex; align-items:center; gap:14px;">
            <div style="background:#fef3c7; color:#d97706; width:48px; height:48px; border-radius:10px; display:flex; align-items:center; justify-content:center; font-weight:800; font-size:1.1rem;">GPS</div>
            <div>
              <div style="font-weight:700; color:#0f223d;">Satellite Tracking</div>
              <div style="font-size:0.85rem; color:#64748b;">Real-Time Location Alerts</div>
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
          <p style="color:#64748b; max-width:680px; margin:8px auto 0;">Authentic field photographs showing our dedicated container trucks, loading crews, and door-to-door transit operations between Dumka and Patna.</p>
        </div>

        <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap:24px;">
          <div style="background:#ffffff; border-radius:12px; overflow:hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border:1px solid #e2e8f0;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg" alt="Interstate container truck loading in Dumka for Patna" style="width:100%; height:230px; object-fit:cover; display:block;" loading="lazy">
            <div style="padding:18px;">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Closed Container Freight</h3>
              <p style="color:#64748b; font-size:0.9rem; line-height:1.6; margin:0;">Heavy-duty closed container vehicles optimized for interstate highway conditions between Jharkhand and Bihar.</p>
            </div>
          </div>

          <div style="background:#ffffff; border-radius:12px; overflow:hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border:1px solid #e2e8f0;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Doorstep delivery truck in Patna" style="width:100%; height:230px; object-fit:cover; display:block;" loading="lazy">
            <div style="padding:18px;">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Door-to-Door Delivery in Patna</h3>
              <p style="color:#64748b; font-size:0.9rem; line-height:1.6; margin:0;">Complete door pickup in Dumka and final unloading across all residential apartment complexes and sectors in Patna.</p>
            </div>
          </div>

          <div style="background:#ffffff; border-radius:12px; overflow:hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border:1px solid #e2e8f0;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/multistory-apartment-goods-loading-ranchi.jpg" alt="High-rise apartment goods delivery by Shree Ashirwad Packers" style="width:100%; height:230px; object-fit:cover; display:block;" loading="lazy">
            <div style="padding:18px;">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:6px;">Elevator &amp; High-Rise Handling</h3>
              <p style="color:#64748b; font-size:0.9rem; line-height:1.6; margin:0;">Experienced moving crews trained to navigate tight stairwells and high-rise service elevators with protective blankets.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Main Content Editorial Article -->
    <article style="padding:55px 0; background:#ffffff;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">

        <!-- Section: Strategic Interstate Moving Overview -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.95rem; color:#0f223d; font-weight:800; margin-bottom:18px;">
            Connecting the Sub-Capital of Jharkhand (Dumka) to the Capital of Bihar (Patna)
          </h2>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:18px;">
            The relocation corridor connecting <strong>Dumka to Patna</strong> bridges the historical cultural and commercial ties of Santhal Pargana with the political and economic heart of Bihar. Spanning approximately <strong>275 to 290 kilometers</strong>, this route witnesses a steady stream of government administrators, judicial officers, medical faculty at <strong>AIIMS Patna</strong> and <strong>PMCH</strong>, university scholars from <strong>SKMU</strong> transferring to Patna University, PSU bank managers, and families relocating for education or business.
          </p>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:18px;">
            Undertaking an interstate move between Jharkhand and Bihar presents distinct logistical hurdles: traversing regional state borders, managing statutory <strong>GST e-Way bills</strong>, crossing major river bridges across the Kiul and Ganga, and navigating high-traffic bypass corridors. Hiring unverified local truck operators frequently leads to cargo transshipment, rough road damage, and extortionate unloading demands upon reaching Patna.
          </p>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155;">
            At <strong>Shree Ashirwad Packers and Movers</strong>, we deliver a seamless, professional experience on the Dumka to Patna route. With our dedicated sealed container fleet, 5-layer scientific packing materials, GPS satellite tracking, and zero transshipment policy, your belongings are loaded at your Dumka doorstep and delivered directly to your home in Patna within <strong>24 to 36 hours</strong> with 100% safety and comprehensive transit insurance.
          </p>
        </section>

        <!-- Section: Highway Route Breakdown -->
        <section style="margin-bottom:50px; background:#f8fafc; padding:35px 25px; border-radius:12px; border:1px solid #e2e8f0;">
          <h2 style="font-size:1.85rem; color:#0f223d; font-weight:800; margin-bottom:16px;">
            Interstate Highway Route Analysis: Dumka to Patna (~280 km)
          </h2>
          <p style="font-size:1.02rem; line-height:1.75; color:#475569; margin-bottom:24px;">
            Our heavy-duty commercial container fleet navigates two verified highway corridors to ensure smooth, timely, and vibration-minimized goods transit:
          </p>

          <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap:20px;">
            <div style="background:#ffffff; border-radius:8px; padding:20px; border:1px solid #e2e8f0;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">1. Northern Route via Hansdiha &amp; Banka</h3>
              <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
                Departs Dumka via NH-133 northwards through Hansdiha into Banka district (Bihar), connecting to Bhagalpur and the 4-lane expressway toward Lakhisarai and Mokama.
              </p>
            </div>

            <div style="background:#ffffff; border-radius:8px; padding:20px; border:1px solid #e2e8f0;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">2. Western Corridor via Deoghar &amp; Jamui</h3>
              <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
                Travels via NH-114A past Basukinath to Deoghar and Jasidih, entering Bihar via Chakai and Jamui, connecting smoothly with NH-333A toward Lakhisarai and Kiul.
              </p>
            </div>

            <div style="background:#ffffff; border-radius:8px; padding:20px; border:1px solid #e2e8f0;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">3. Mokama to Bakhtiyarpur Expressway</h3>
              <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
                Both routes converge onto the high-speed NH-31 / NH-22 corridor running parallel to the Ganga through Mokama, Barh, and Bakhtiyarpur toward Patna.
              </p>
            </div>

            <div style="background:#ffffff; border-radius:8px; padding:20px; border:1px solid #e2e8f0;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">4. Destination Delivery in Patna</h3>
              <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
                Entering Patna through Didarganj Toll or Fatuha bypass, our drivers navigate around city 'no-entry' commercial timings for seamless scheduled delivery.
              </p>
            </div>
          </div>
        </section>

        <!-- Section: Price Matrix Table -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.95rem; color:#0f223d; font-weight:800; margin-bottom:18px;">
            Estimated Relocation Rates: Dumka to Patna (~280 km)
          </h2>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:20px;">
            We maintain total pricing transparency with all-inclusive written estimates covering 5-layer packing materials, loading labor, highway toll fees, interstate e-Way bill processing, unloading, and basic furniture assembly:
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
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹11,500 – ₹16,000</td>
                  <td style="padding:12px 16px; color:#64748b;">14-ft closed container, 3 packers, bubble wrap &amp; cartons</td>
                  <td style="padding:12px 16px; color:#0f223d; font-weight:600;">24 – 36 Hours</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">2 BHK Complete Family Home</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹16,500 – ₹23,500</td>
                  <td style="padding:12px 16px; color:#64748b;">17-ft/19-ft container, 4 packers, carpenter dismantling</td>
                  <td style="padding:12px 16px; color:#0f223d; font-weight:600;">24 – 36 Hours</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">3 BHK Large Residence / Villa</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹23,500 – ₹35,000</td>
                  <td style="padding:12px 16px; color:#64748b;">22-ft container truck, 5-6 packers, full wooden crating</td>
                  <td style="padding:12px 16px; color:#0f223d; font-weight:600;">24 – 48 Hours</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">Hatchback Car Transport</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹6,000 – ₹7,500</td>
                  <td style="padding:12px 16px; color:#64748b;">Covered car carrier trailer, ramp loading, wheel chocks</td>
                  <td style="padding:12px 16px; color:#0f223d; font-weight:600;">24 – 48 Hours</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">Sedan / Compact SUV Transport</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹7,000 – ₹8,800</td>
                  <td style="padding:12px 16px; color:#64748b;">Enclosed trailer, 360° inspection, tie-down lashing</td>
                  <td style="padding:12px 16px; color:#0f223d; font-weight:600;">24 – 48 Hours</td>
                </tr>
                <tr style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                  <td style="padding:12px 16px; font-weight:600; color:#0f223d;">Full-Size SUV (Scorpio, Fortuner, Safari)</td>
                  <td style="padding:12px 16px; color:#16a34a; font-weight:700;">₹8,200 – ₹10,200</td>
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
            *Note: Transit insurance is calculated at 1.5% to 2% of declared goods value. Standard GST applicable on commercial moving invoices.
          </p>
        </section>

        <!-- Section: Doorstep Delivery Coverage Across Patna -->
        <section style="margin-bottom:50px; background:#ffffff;">
          <h2 style="font-size:1.95rem; color:#0f223d; font-weight:800; margin-bottom:18px;">
            Comprehensive Delivery Coverage Across Patna Localities
          </h2>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:20px;">
            Our local delivery network in Patna handles door delivery across all major residential sectors, government colonies, and commercial hubs:
          </p>

          <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap:18px;">
            <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:8px; padding:18px;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Central Patna &amp; Civil Lines</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.6; margin:0;">
                Boring Road, Boring Canal Road, Patliputra Colony, Exhibition Road, Frazer Road, Rajendra Nagar, and Kadamkuan.
              </p>
            </div>
            <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:8px; padding:18px;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">South &amp; West Expansion</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.6; margin:0;">
                Kankarbagh (all colonies &amp; doctors' hubs), Anisabad, Ashiana Nagar, Bailey Road, Gola Road, and Jagdeo Path.
              </p>
            </div>
            <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:8px; padding:18px;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Medical &amp; Institutional Zones</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.6; margin:0;">
                AIIMS Patna (Phulwari Sharif), PMCH doctors' colony, IGIMS residential staff quarters, and Patna University faculty residences.
              </p>
            </div>
            <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:8px; padding:18px;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Danapur &amp; Greater Patna</h3>
              <p style="font-size:0.9rem; color:#64748b; line-height:1.6; margin:0;">
                Danapur Cantonment, Saguna More, Khagaul, Bihta IT park corridor, and Didarganj bypass.
              </p>
            </div>
          </div>
        </section>

        <!-- Section: Academic, Faculty & Healthcare Medical Transfers -->
        <section style="margin-bottom:50px; background:#f8fafc; border:1px solid #e2e8f0; border-radius:12px; padding:32px 26px;">
          <h2 style="font-size:1.85rem; color:#0f223d; font-weight:800; margin-bottom:16px;">
            Specialized Moving for Academic Faculty &amp; Healthcare Professionals
          </h2>
          <p style="font-size:1.02rem; line-height:1.75; color:#475569; margin-bottom:18px;">
            A substantial share of household relocations between Dumka and Patna involves medical faculty from <strong>Phulo Jhano Murmu Medical College and Hospital (PJMCH)</strong> transferring to premier medical institutions in Patna such as <strong>AIIMS Patna (Phulwari Sharif)</strong>, <strong>Patna Medical College and Hospital (PMCH)</strong>, and <strong>IGIMS</strong>, alongside university professors transitioning between <strong>Sido Kanhu Murmu University (SKMU)</strong> and <strong>Patna University</strong>.
          </p>
          <p style="font-size:1.02rem; line-height:1.75; color:#475569; margin-bottom:18px;">
            These moves require specialized handling that ordinary commercial freight companies cannot deliver. We provide reinforced double-walled library boxes for rare academic books, clinical research documentation, and thesis manuscripts. For doctors, delicate diagnostic equipment, microscopes, and electronic medical devices are packed inside customized foam-padded thermocol crates to withstand interstate road travel.
          </p>
          <p style="font-size:1.02rem; line-height:1.75; color:#475569; margin:0;">
            Additionally, we coordinate directly with campus security at doctor's quarters in Phulwari Sharif, PMCH residential complexes, and Boring Road faculty flats to facilitate smooth entry and elevator permissions, ensuring immediate, stress-free settling for busy healthcare and academic professionals.
          </p>
        </section>

        <!-- Section: River Bridge & Bypass Transit Safeguards -->
        <section style="margin-bottom:50px;">
          <h2 style="font-size:1.95rem; color:#0f223d; font-weight:800; margin-bottom:18px;">
            Transit Safeguards Across Kiul River Bridges &amp; NH-31 Bypass
          </h2>
          <p style="font-size:1.05rem; line-height:1.8; color:#334155; margin-bottom:18px;">
            Navigating the regional transit arteries between South Bihar and Santhal Pargana requires experienced drivers who understand highway topography, seasonal flood zones, and bridge restrictions:
          </p>
          <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap:22px;">
            <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:22px; box-shadow:0 2px 8px rgba(0,0,0,0.03);">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:10px;">Shock-Absorbent Pallet Stacking</h3>
              <p style="font-size:0.92rem; color:#475569; line-height:1.65; margin:0;">
                To cushion cargo against expansion joints and road ripples on long bridge crossings over the Kiul River and Mokama bypass, heavy furniture and appliance boxes are mounted on shock-absorbing rubber pallets. Industrial ratchet straps anchor each consignment securely to the truck's steel ribs to prevent load shifts.
              </p>
            </div>
            <div style="background:#ffffff; border:1px solid #e2e8f0; border-radius:10px; padding:22px; box-shadow:0 2px 8px rgba(0,0,0,0.03);">
              <h3 style="font-size:1.15rem; color:#0f223d; font-weight:700; margin-bottom:10px;">Commercial No-Entry Bypass Scheduling</h3>
              <p style="font-size:0.92rem; color:#475569; line-height:1.65; margin:0;">
                Patna municipal limits enforce strict daytime no-entry regulations for heavy commercial vehicles on major corridors like Bailey Road and Kankarbagh Main Road. Our dispatch team plans highway departure from Dumka so that our container enters Patna during permitted early morning hours, ensuring uninterrupted doorstep unloading.
              </p>
            </div>
          </div>
        </section>

        <!-- Section: IBA Approved Government & Medical Billing -->
        <section style="margin-bottom:50px; background:#f0fdf4; border:1px solid #bbf7d0; border-radius:12px; padding:32px 26px;">
          <h2 style="font-size:1.85rem; color:#14532d; font-weight:800; margin-bottom:14px;">
            100% IBA-Approved Billing for Government, AIIMS &amp; Bank Transfers
          </h2>
          <p style="font-size:1.02rem; line-height:1.75; color:#166534; margin-bottom:16px;">
            Moving on official transfer from Dumka to Patna? We supply 100% audit-compliant relocation documentation for smooth reimbursement from Bihar State Government departments, central government ministries, defense divisions, and nationalized banks:
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
            Frequently Asked Questions (FAQs) – Dumka to Patna Moving
          </h2>

          <div style="display:flex; flex-direction:column; gap:16px;">
            
            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">How much time does goods shifting take from Dumka to Patna?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">For a dedicated container vehicle (Full Truck Load), transit takes 24 to 36 hours. The distance between Dumka and Patna is roughly 275 to 290 km. Packing and loading take place on Day 1 in Dumka, highway travel takes 7-9 hours via Banka/Bhagalpur or Jamui/Mokama, and doorstep delivery with unloading in Patna is scheduled on Day 2.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">What is the cost of packers and movers from Dumka to Patna?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Rates typically range between ₹11,500 and ₹16,000 for a 1 BHK flat, ₹16,500 and ₹23,500 for a standard 2 BHK family residence, and ₹23,500 to ₹35,000 for a 3 BHK home. Car transport ranges from ₹6,000 to ₹10,200, and two-wheeler bike shipping ranges from ₹2,600 to ₹4,800.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Which highway route is used from Dumka to Patna?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Our trucks operate across two primary corridors: (1) The northern route via Hansdiha, Banka, Bhagalpur, Lakhisarai, Mokama, and Bakhtiyarpur (NH-133 / NH-31), or (2) The western corridor via Deoghar, Jasidih, Jamui, and Mokama. Both routes feature well-maintained commercial highways.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Do you deliver to all residential localities in Patna?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Yes, we deliver across all neighborhoods in Patna including Kankarbagh, Boring Road, Bailey Road, Patliputra Colony, Rajendra Nagar, Danapur, Saguna More, Ashiana Nagar, Exhibition Road, Anisabad, Gola Road, AIIMS Patna (Phulwari Sharif), and Jagdeo Path.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Is an electronic e-Way bill required between Jharkhand and Bihar?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Yes, moving household goods interstate between Jharkhand and Bihar valued above statutory limits mandates a GST e-Way bill. Shree Ashirwad Packers handles complete e-Way bill registration and vehicle Part-B assignment, preventing any checkpost delays.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Do you provide transit insurance for Dumka to Patna relocations?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Yes, we arrange comprehensive transit insurance through reputed national insurance partners. It protects your consignment against accidental impact, vehicle overturning, fire, theft, and natural hazards on the highway.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Can you transport my car or bike to Patna along with household goods?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Yes. We offer covered hydraulic car carriers and dedicated motorcycle parcel crating. We can either ship your vehicle in specialized carriers or within a partitioned multi-utility container alongside your household furniture.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Do you provide IBA-approved bills for government transfer claims in Bihar?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Yes. We supply 100% IBA-compliant consignment notes (LR), GST invoices, itemized packing lists, and insurance documents accepted by Bihar State Government departments, central government ministries, defense divisions, and nationalized banks.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">Do your workers dismantle and assemble double beds and modular wardrobes?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">Yes. Our moving crew includes experienced carpenters who dismantle wooden double beds, wardrobes, and dining tables at your home in Dumka and reassemble them at your destination residence in Patna.</p>
            </div>

            <div style="border:1px solid #e2e8f0; border-radius:8px; padding:20px; background:#ffffff;">
              <h3 style="font-size:1.1rem; color:#0f223d; font-weight:700; margin-bottom:8px;">How can I book a moving slot for Dumka to Patna?</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">You can call our dedicated corridor coordinator at 8409531615 or message us on WhatsApp. We provide free doorstep or video inventory surveys and give you an all-inclusive guaranteed written quotation.</p>
            </div>

          </div>
        </section>

        <!-- Final Call to Action Box -->
        <section style="background: linear-gradient(135deg, #0f223d 0%, #1a3a5f 100%); color:#ffffff; padding:45px 35px; border-radius:14px; text-align:center;">
          <h2 style="font-size:2rem; font-weight:800; margin-bottom:14px;">Moving from Dumka to Patna?</h2>
          <p style="font-size:1.1rem; color:#cbd5e1; max-width:700px; margin:0 auto 28px;">
            Book your dedicated container move today. Experience direct 24-36 hour delivery, full e-Way bill compliance, 5-layer protective packing, and comprehensive transit insurance.
          </p>
          <div style="display:flex; justify-content:center; flex-wrap:wrap; gap:16px;">
            <a href="tel:8409531615" style="display:inline-flex; align-items:center; gap:8px; background:#ff6a28; color:#ffffff; padding:15px 30px; border-radius:8px; font-weight:700; text-decoration:none; box-shadow:0 4px 15px rgba(255,106,40,0.35);">
              Call Patna Coordinator: 8409531615
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
            <a href="<?php echo SITE_BASE_URL; ?>/dumka-to-kolkata-packers-and-movers" style="color:#0284c7; text-decoration:none; background:#f0f9ff; padding:9px 15px; border-radius:6px; font-weight:600; border:1px solid #bae6fd;">Dumka to Kolkata Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/dumka-to-patna-packers-and-movers" style="color:#ff6a28; text-decoration:none; background:#fff7ed; padding:9px 15px; border-radius:6px; font-weight:700; border:1px solid #fed7aa;">Dumka to Patna Movers (Current)</a>
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
