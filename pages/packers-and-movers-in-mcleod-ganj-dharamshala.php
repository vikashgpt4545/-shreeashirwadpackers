<?php
/**
 * Page: Packers and Movers in McLeod Ganj Dharamshala
 * Layout: Full-width modern responsive layout (AGENTS.md & AI_PAGE_CREATION_RULES.md compliant)
 * Scoped Prefix: mgd-
 */
require_once __DIR__ . '/../includes/config.php';

$page_title = 'Packers and Movers in McLeod Ganj Dharamshala | Spiritual & Hill Shifting';
$page_description = 'Certified packers and movers in McLeod Ganj Dharamshala. Specialized mountain porter handling, Tibetan monastery & expat relocations across Bhagsu Nag & Dharamkot, 4-tier packaging, and nationwide safe transit.';
$page_keywords = 'packers and movers in mcleod ganj dharamshala, house shifting mcleod ganj, movers packers bhagsu nag, dharamkot relocation dharamshala, best moving company mcleod ganj, mountain porters upper dharamshala';
$canonical_url = SITE_BASE_URL . '/packers-and-movers-in-mcleod-ganj-dharamshala';

$city_name = 'Dharamshala';
$locality_name = 'McLeod Ganj';
$state_name = 'Himachal Pradesh';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">
  <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

  <style>
    .mgd-wrapper {
      width: 100%;
      overflow-x: hidden;
      background-color: #f8fafc;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      color: #334155;
      line-height: 1.6;
    }
    .mgd-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }
    .mgd-hero {
      background: linear-gradient(135deg, #064e3b 0%, #047857 50%, #0f766e 100%);
      color: #ffffff;
      padding: 60px 20px;
      border-radius: 0 0 24px 24px;
      margin-bottom: 40px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    }
    .mgd-hero h1 {
      font-size: 2.3rem;
      line-height: 1.25;
      margin-bottom: 18px;
      font-weight: 800;
      color: #ffffff;
    }
    .mgd-hero p {
      font-size: 1.12rem;
      line-height: 1.7;
      max-width: 860px;
      margin-bottom: 22px;
      color: #ecfdf5;
    }
    .mgd-badge-row {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-top: 15px;
    }
    .mgd-badge {
      background: rgba(255, 255, 255, 0.16);
      border: 1px solid rgba(255, 255, 255, 0.32);
      color: #ffffff;
      padding: 6px 14px;
      border-radius: 20px;
      font-size: 0.88rem;
      font-weight: 600;
    }
    .mgd-section {
      padding: 38px 0;
      border-bottom: 1px solid #e2e8f0;
    }
    .mgd-section h2 {
      font-size: 1.85rem;
      color: #064e3b;
      margin-bottom: 18px;
      font-weight: 700;
      line-height: 1.3;
      position: relative;
      padding-bottom: 10px;
    }
    .mgd-section h2::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 60px;
      height: 4px;
      background: #047857;
      border-radius: 2px;
    }
    .mgd-section h3 {
      font-size: 1.35rem;
      color: #0f766e;
      margin: 22px 0 12px;
      font-weight: 600;
    }
    .mgd-section p {
      margin-bottom: 16px;
      color: #475569;
    }
    .mgd-grid-2 {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 32px;
      align-items: center;
      margin: 24px 0;
    }
    .mgd-image-container {
      max-width: 580px;
      margin: 25px auto;
      overflow: hidden;
      border-radius: 12px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.08);
    }
    .mgd-image-container img {
      width: 100%;
      height: auto;
      display: block;
      transition: transform 0.3s ease;
    }
    .mgd-image-container:hover img {
      transform: scale(1.02);
    }
    .mgd-grid-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      margin: 24px 0;
    }
    .mgd-card {
      background: #ffffff;
      border-radius: 12px;
      padding: 22px;
      border: 1px solid #e2e8f0;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .mgd-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }
    .mgd-card h4 {
      font-size: 1.15rem;
      font-weight: 700;
      color: #064e3b;
      margin-bottom: 10px;
    }
    .mgd-card p {
      font-size: 0.94rem;
      color: #64748b;
      line-height: 1.6;
      margin: 0;
    }
    .mgd-table {
      width: 100%;
      border-collapse: collapse;
      margin: 24px 0;
      background: #ffffff;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 4px rgba(0,0,0,0.04);
    }
    .mgd-table th, .mgd-table td {
      padding: 14px 18px;
      text-align: left;
      border-bottom: 1px solid #e2e8f0;
      font-size: 0.95rem;
    }
    .mgd-table th {
      background-color: #064e3b;
      color: #ffffff;
      font-weight: 600;
    }
    .mgd-table tr:hover {
      background-color: #f1f5f9;
    }
    .mgd-highlight-box {
      background: #ecfdf5;
      border-left: 5px solid #047857;
      padding: 20px 24px;
      border-radius: 0 10px 10px 0;
      margin: 24px 0;
    }
    .mgd-highlight-box h4 {
      font-size: 1.15rem;
      font-weight: 700;
      color: #064e3b;
      margin-bottom: 8px;
    }
    .mgd-highlight-box p {
      color: #1e293b;
      font-size: 0.96rem;
      margin: 0;
    }
    .mgd-faq-item {
      background: #ffffff;
      border: 1px solid #e2e8f0;
      border-radius: 10px;
      margin-bottom: 16px;
      padding: 20px;
    }
    .mgd-faq-item h4 {
      font-size: 1.15rem;
      font-weight: 700;
      color: #064e3b;
      margin-bottom: 10px;
    }
    .mgd-faq-item p {
      color: #475569;
      font-size: 0.96rem;
      margin: 0;
    }
    .mgd-cluster-links {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-top: 20px;
    }
    .mgd-cluster-link {
      display: inline-block;
      background: #ffffff;
      border: 1px solid #cbd5e1;
      padding: 8px 18px;
      border-radius: 8px;
      color: #064e3b;
      text-decoration: none;
      font-size: 0.92rem;
      font-weight: 600;
      transition: all 0.2s ease;
    }
    .mgd-cluster-link:hover {
      background: #047857;
      color: #ffffff;
      border-color: #047857;
    }

    @media (max-width: 768px) {
      .mgd-hero h1 { font-size: 1.85rem; }
      .mgd-grid-2 { grid-template-columns: 1fr; }
      .mgd-section { padding: 30px 0; }
      .mgd-table { font-size: 0.85rem; }
      .mgd-table th, .mgd-table td { padding: 10px 12px; }
    }
  </style>

  <!-- JSON-LD Structured Data: 4 Mandatory Schemas -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "MovingCompany",
        "@id": "https://shreeashirwadpackers.com/packers-and-movers-in-mcleod-ganj-dharamshala#organization",
        "name": "Shree Ashirwad Packers and Movers McLeod Ganj Dharamshala",
        "url": "https://shreeashirwadpackers.com/packers-and-movers-in-mcleod-ganj-dharamshala",
        "logo": "https://shreeashirwadpackers.com/assets/images/logo.png",
        "image": "https://shreeashirwadpackers.com/images/complete-household-packing-dhanbad.jpg",
        "description": "Licensed and insured packers and movers in McLeod Ganj Dharamshala offering specialized mountain porter handling, Tibetan monastery and expat relocations across Bhagsu Nag and Dharamkot, 4-tier packaging, and nationwide transit.",
        "telephone": "+91-9334800375",
        "email": "support@shreeashirwadpackers.com",
        "priceRange": "₹₹",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Main Temple Road, Near Tsuglagkhang Complex & McLeod Chowk",
          "addressLocality": "Dharamshala",
          "addressRegion": "Himachal Pradesh",
          "postalCode": "176219",
          "addressCountry": "IN"
        },
        "geo": {
          "@type": "GeoCoordinates",
          "latitude": 32.2426,
          "longitude": 76.3213
        },
        "openingHoursSpecification": {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
          "opens": "07:00",
          "closes": "22:00"
        }
      },
      {
        "@type": "BreadcrumbList",
        "@id": "https://shreeashirwadpackers.com/packers-and-movers-in-mcleod-ganj-dharamshala#breadcrumb",
        "itemListElement": [
          {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://shreeashirwadpackers.com"
          },
          {
            "@type": "ListItem",
            "position": 2,
            "name": "Packers and Movers in Dharamshala",
            "item": "https://shreeashirwadpackers.com/packers-and-movers-in-dharamshala"
          },
          {
            "@type": "ListItem",
            "position": 3,
            "name": "McLeod Ganj Dharamshala",
            "item": "https://shreeashirwadpackers.com/packers-and-movers-in-mcleod-ganj-dharamshala"
          }
        ]
      },
      {
        "@type": "Service",
        "@id": "https://shreeashirwadpackers.com/packers-and-movers-in-mcleod-ganj-dharamshala#service",
        "name": "Mountain Porter & Spiritual Community Relocation Services McLeod Ganj",
        "provider": {
          "@id": "https://shreeashirwadpackers.com/packers-and-movers-in-mcleod-ganj-dharamshala#organization"
        },
        "areaServed": {
          "@type": "AdministrativeArea",
          "name": "McLeod Ganj, Bhagsu Nag, Dharamkot, Forsyth Ganj, Upper Dharamshala, Himachal Pradesh"
        },
        "hasOfferCatalog": {
          "@type": "OfferCatalog",
          "name": "McLeod Ganj Shifting Solutions",
          "itemListElement": [
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Steep Hillside Walking Trail Porter Moving Service"
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Tibetan Sacred Thangka & Monastery Relocation"
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "International Expatriate & Scholar Household Shifting"
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Closed Container Intercity Transport & Vehicle Moving"
              }
            }
          ]
        }
      },
      {
        "@type": "FAQPage",
        "@id": "https://shreeashirwadpackers.com/packers-and-movers-in-mcleod-ganj-dharamshala#faq",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "How do you handle moves along narrow cobblestone alleys and steep footpaths in McLeod Ganj?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "McLeod Ganj features pedestrian-only alleys, steep stone stairways, and vehicle-restricted paths around the Tsuglagkhang Temple, Bhagsu, and Dharamkot. We deploy experienced mountain porters using heavy-duty carrying harnesses, padded protective blankets, and stair trolleys to safely convey goods down to vehicular loading bays on Main Temple Road or Jogiwara Road."
            }
          },
          {
            "@type": "Question",
            "name": "How are sacred Tibetan Buddhist relics, bronze statues, and thangkas protected during shifting?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We provide museum-grade custom crating using acid-free silk paper, virgin bubble cushioning, custom-built wooden crates, and moisture-sealed film to protect delicate hand-painted thangka scrolls, consecrated statues, and religious scriptures from moisture and transit shock."
            }
          },
          {
            "@type": "Question",
            "name": "Do you provide relocation services for international scholars, expats, and yoga practitioners in McLeod Ganj?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, we regularly relocate international researchers, spiritual scholars, and expatriates living in McLeod Ganj and Dharamkot, providing English-speaking move coordinators, official computerized GST billing, and door-to-door pan-India delivery."
            }
          },
          {
            "@type": "Question",
            "name": "What are the moving rates in McLeod Ganj Dharamshala?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Local moves in McLeod Ganj range from ₹3,000 to ₹4,500 for 1 BHK flats, ₹5,000 to ₹8,000 for 2 BHK homes, and ₹7,500 to ₹12,500 for 3 BHK hillside residences (including manual porter carriage). Long-haul relocations to Delhi NCR, Chandigarh, or Mumbai range between ₹12,500 and ₹39,000."
            }
          },
          {
            "@type": "Question",
            "name": "Can you transport vehicles down from McLeod Ganj to other Indian states?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, we operate enclosed hydraulic car carrier trailers and dedicated motorcycle shipping bays with wheel lock chocks and marine transit insurance, guaranteeing 100% scratch-free transport across state borders."
            }
          }
        ]
      }
    ]
  }
  </script>
</head>
<body>
<?php include_once __DIR__ . '/../includes/header.php'; ?>

<main class="mgd-wrapper">

  <div class="mgd-hero">
    <div class="mgd-container">
      <h1>Packers and Movers in McLeod Ganj Dharamshala</h1>
      <p>World spiritual haven and Upper Dharamshala mountain relocation specialists. Premier household shifting, steep walking track porter handling, and monastery moves across McLeod Ganj, Bhagsu Nag, and Dharamkot. Certified four-layer moisture-proof packaging, art crating mastery, and nationwide insured container transport.</p>
      <div class="mgd-badge-row">
        <span class="mgd-badge">ISO 9001:2015 Certified</span>
        <span class="mgd-badge">McLeod Ganj & Upper Hill Specialist</span>
        <span class="mgd-badge">4-Tier Protective Packaging</span>
        <span class="mgd-badge">100% Comprehensive Transit Insurance</span>
      </div>
    </div>
  </div>

  <div class="mgd-container">

    <section class="mgd-section">
      <h2>Spiritual Citadel of Upper Dharamshala: Relocation Logistics in McLeod Ganj</h2>
      <div class="mgd-grid-2">
        <div>
          <p>McLeod Ganj, perched dramatically at an elevation of 2,082 meters upon the pine-cloaked upper ridges of Dharamshala beneath the soaring snowfields of the Dhauladhar range, is recognized worldwide as the vibrant seat of the Tibetan government-in-exile and the official residence of His Holiness the 14th Dalai Lama. Encompassing iconic cultural landmarks such as the Tsuglagkhang Temple Complex, Namgyal Monastery, the Tibetan Institute of Performing Arts (TIPA), and adjoining hillside communities of Bhagsu Nag, Dharamkot, and Forsyth Ganj, McLeod Ganj attracts a cosmopolitan global tapestry of Buddhist monks, international spiritual seekers, university scholars, writers, and local Himachali families.</p>
          <p>Household relocations in McLeod Ganj require an elite level of specialized mountain logistical expertise. The town's historic topography features steep cobblestone pedestrian alleys, narrow cliffside walking paths, and multi-story hillside guest houses that are entirely inaccessible to four-wheeled vehicles. Delicate items frequently include sacred hand-painted thangka scrolls, consecrated brass and bronze Buddha deities, ancient woodblock scriptures, intricate hand-knotted Tibetan rugs, and delicate pottery. Standard commercial handling is entirely unsuitable for these treasured items. Our certified teams deploy skilled mountain porters equipped with padded shoulder harnesses, custom wooden crating kits, and non-abrasive wrapping to ensure that every artifact is transported with religious reverence and zero physical impact.</p>
          <p>Backed by more than 16 years of certified industry leadership across Himachal Pradesh, Shree Ashirwad Packers and Movers has earned the enduring trust of residential families, spiritual institutions, and expatriates in McLeod Ganj. We coordinate vehicle loading along Jogiwara Road and Temple Road, deploy hermetically sealed all-weather packaging to repel high-altitude rain and condensation, and provide GPS-tracked container transport to any destination across India.</p>
        </div>
        <div class="mgd-image-container">
          <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Complete Household Packing in McLeod Ganj Dharamshala" width="580" height="380" loading="lazy">
        </div>
      </div>

      <div class="mgd-highlight-box">
        <h4>100% Compliant Expatriate & Official Reimbursement Documentation</h4>
        <p>Relocating on university research fellowship, cultural foundation posting, or official administrative transfer? We furnish 100% approved computerized GST invoices, consignment notes (Bilty), and verified inventory packing lists tailored for prompt reimbursement. Plan your relocation budget transparently using our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" style="color: #064e3b; font-weight: 700; text-decoration: underline;">live moving tariff calculator</a>.</p>
      </div>
    </section>

    <section class="mgd-section">
      <h2>Tailored Moving Services in McLeod Ganj Dharamshala</h2>
      <p>We provide a comprehensive range of personalized residential, institutional, and long-distance moving services designed specifically for the unique vertical topography and cultural assets of McLeod Ganj:</p>

      <div class="mgd-grid-cards">
        <div class="mgd-card">
          <h4>Steep Hillside Walking Trail Porter Moving</h4>
          <p>Specialized manual handling for multi-story hillside apartments across Bhagsu Nag and Dharamkot, utilizing skilled mountain porters and heavy-duty carrying harnesses for zero-damage trail transit.</p>
        </div>
        <div class="mgd-card">
          <h4>Tibetan Sacred Thangka & Relic Crating</h4>
          <p>Custom wooden boxing, acid-free silk wrapping, thermocol cushioning, and dense air-bubble encapsulation for sacred thangka scrolls, brass Buddha murtis, singing bowls, and temple scriptures.</p>
        </div>
        <div class="mgd-card">
          <h4>Expatriate & International Scholar Relocation</h4>
          <p>Dedicated moving services for researchers, language scholars, and global expatriates in McLeod Ganj and Forsyth Ganj, supported by English-speaking coordinators and pan-India container delivery.</p>
        </div>
        <div class="mgd-card">
          <h4>Modular Wooden Furniture Dismantling</h4>
          <p>Skilled in-house carpenters carefully disassemble modular beds, carved wooden tables, and book shelving units, safely reassembling them at your destination residence.</p>
        </div>
        <div class="mgd-card">
          <h4>GPS-Tracked Intercity Mountain Fleets</h4>
          <p>Weather-sealed, GPS-enabled container trucks linking McLeod Ganj directly with Chandigarh, Delhi NCR, Amritsar, Pathankot, and pan-India destinations via the Kangra-Mandi Highway.</p>
        </div>
        <div class="mgd-card">
          <h4>Enclosed Car Carrier & Motorcycle Moving</h4>
          <p>Dedicated enclosed automobile carrier trailers and custom motorcycle shipping crates equipped with wheel locks, providing 100% scratch-free vehicle transit down the mountain highway.</p>
        </div>
      </div>

      <div class="mgd-image-container">
        <img src="<?php echo SITE_BASE_URL; ?>/images/office-equipment-secure-packing-jamshedpur.jpg" alt="Office and Household Equipment Packing in McLeod Ganj Dharamshala" width="580" height="380" loading="lazy">
      </div>
    </section>

    <section class="mgd-section">
      <h2>Our 4-Tier Defensive Packaging Architecture</h2>
      <p>Mountain highway transit between the high-altitude ridges of McLeod Ganj and the northern plains involves steep downhill descents, sharp hairpin turns, and elevation transitions. At Shree Ashirwad Packers and Movers, we treat every client possession with engineering precision, deploying our proven four-tier protective packaging standard:</p>

      <div class="mgd-grid-cards">
        <div class="mgd-card">
          <h4>Layer 1: Virgin Bubble Wrap & Non-Abrasive EPE Foam</h4>
          <p>Every wooden veneer, modular cabinetry surface, high-definition television screen, and sensitive electronic fitting is enveloped in thick 100 GSM virgin air-bubble film and non-abrasive expanded polyethylene foam to absorb friction and prevent surface scuffs.</p>
        </div>
        <div class="mgd-card">
          <h4>Layer 2: Multi-Ply Cardboard Edge & Corner Buffers</h4>
          <p>Corners represent the most fragile impact zones of furniture during transit. We reinforce all table perimeters, wardrobe rims, and mirror corners with rigid compressed cardboard angle boards bound securely with tension tape.</p>
        </div>
        <div class="mgd-card">
          <h4>Layer 3: 5-Ply Heavy-Duty Corrugated Outer Armor</h4>
          <p>Kitchenware, porcelain china, home library volumes, and personal effects are categorized and packed into rigid 5-ply virgin craft paper cartons, color-coded by destination room for efficient unloading.</p>
        </div>
        <div class="mgd-card">
          <h4>Layer 4: Industrial Moisture-Sealed Stretch Film</h4>
          <p>The entire exterior of every wrapped furniture assembly and carton stack is wrapped with heavy-gauge stretch film, sealing goods against morning mountain mist, cold dampness, and unexpected snowfall.</p>
        </div>
      </div>

      <div class="mgd-highlight-box">
        <h4>High-Grade Virgin Packaging Supplies Guaranteed</h4>
        <p>We strictly utilize virgin, factory-fresh packing materials for every relocation in McLeod Ganj. Our specialized moving kits include anti-static packaging for electronics, heavy wardrobe boxes for hanging woolens, and sterile bubble cushioning for culinary glassware.</p>
      </div>
    </section>

    <section class="mgd-section">
      <h2>Transparent Moving Tariff Matrix for McLeod Ganj Dharamshala</h2>
      <p>We believe in absolute financial transparency without hidden surcharges, surprise stairs fees, or unquoted fuel taxes. Below is our verified standard pricing matrix for local moves within Upper Dharamshala and long-haul intercity relocations from McLeod Ganj:</p>

      <table class="mgd-table">
        <thead>
          <tr>
            <th>Home Size / Shifting Category</th>
            <th>Packing Materials & Crew</th>
            <th>Local McLeod Ganj Transit</th>
            <th>Intercity Relocation (e.g., Delhi NCR)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>1 BHK Apartment / Hillside Flat</strong></td>
            <td>₹2,800 - ₹4,200</td>
            <td>₹2,500 - ₹4,000</td>
            <td>₹8,000 - ₹13,500</td>
          </tr>
          <tr>
            <td><strong>2 BHK Modern Flat / Independent Floor</strong></td>
            <td>₹4,800 - ₹7,200</td>
            <td>₹3,500 - ₹5,800</td>
            <td>₹12,000 - ₹19,500</td>
          </tr>
          <tr>
            <td><strong>3 BHK Independent Kothi / Villa</strong></td>
            <td>₹7,200 - ₹11,000</td>
            <td>₹5,000 - ₹8,500</td>
            <td>₹17,000 - ₹28,000</td>
          </tr>
          <tr>
            <td><strong>4 BHK / Luxury Estate / Hillside Residence</strong></td>
            <td>₹11,000 - ₹16,500</td>
            <td>₹7,000 - ₹12,000</td>
            <td>₹25,000 - ₹42,000</td>
          </tr>
          <tr>
            <td><strong>Commercial Cafe / Boutique Studio</strong></td>
            <td>₹6,000 - ₹13,000</td>
            <td>₹5,000 - ₹10,500</td>
            <td>₹17,000 - ₹35,000</td>
          </tr>
          <tr>
            <td><strong>Motorcycle / Two-Wheeler Transit</strong></td>
            <td>₹1,400 - ₹2,000</td>
            <td>₹1,200 - ₹1,800</td>
            <td>₹3,800 - ₹6,500</td>
          </tr>
          <tr>
            <td><strong>Sedan / SUV Enclosed Car Transport</strong></td>
            <td>₹2,800 - ₹4,200</td>
            <td>₹2,200 - ₹3,800</td>
            <td>₹8,500 - ₹16,500</td>
          </tr>
        </tbody>
      </table>

      <div class="mgd-image-container">
        <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe Transit Closed Container Truck in McLeod Ganj Dharamshala" width="580" height="380" loading="lazy">
      </div>
    </section>

    <section class="mgd-section">
      <h2>Systematic 6-Stage Moving Workflow for McLeod Ganj Clients</h2>
      <p>To eliminate relocation anxieties, our experienced team executes moves according to an organized, step-by-step standard operating protocol:</p>

      <div class="mgd-grid-cards">
        <div class="mgd-card">
          <h4>1. In-Person / Virtual Site Assessment</h4>
          <p>Our relocation coordinator conducts an exhaustive survey of your McLeod Ganj residence, assessing footpath walking distance to road head, staircase gradients, and vehicle access logistics to prepare a binding price quotation.</p>
        </div>
        <div class="mgd-card">
          <h4>2. Systematic Defensive Packing</h4>
          <p>Our uniformed packing crew arrives punctually with specialized crating boxes, bubble films, and corner guards. Every fragile piece, glassware set, and sacred artwork is methodically wrapped and barcoded.</p>
        </div>
        <div class="mgd-card">
          <h4>3. Mountain Porter Trail Handling</h4>
          <p>Heavy furniture and bulky white goods are maneuvered using padded carrying straps and specialized mountain porters along walking trails to the awaiting covered container truck on the road head.</p>
        </div>
        <div class="mgd-card">
          <h4>4. GPS-Tracked Mountain Highway Transit</h4>
          <p>Your belongings travel in weather-sealed, locked container trucks driven by experienced hill drivers. We provide proactive checkpoint notifications until the truck reaches your destination gate.</p>
        </div>
        <div class="mgd-card">
          <h4>5. Room-by-Room Unloading & Placement</h4>
          <p>At your new address, our moving crew unloads each carton and furniture component directly into its intended room, ensuring zero clutter and immediate residential livability.</p>
        </div>
        <div class="mgd-card">
          <h4>6. Professional Assembly & Debris Clearance</h4>
          <p>Our technicians reassemble modular beds, tables, and cabinets, assist with unpacking kitchenware and wardrobes, and remove all used cardboard and plastic wrapping materials cleanly from the premises.</p>
        </div>
      </div>

      <div class="mgd-image-container">
        <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and Setup Service in McLeod Ganj Dharamshala" width="580" height="380" loading="lazy">
      </div>
    </section>

    <section class="mgd-section">
      <h2>Key Neighboring Localities & Enclaves Around McLeod Ganj</h2>
      <p>Our localized moving teams operate extensively across McLeod Ganj and all connected residential, spiritual, and artistic enclaves in Upper Dharamshala:</p>

      <div class="mgd-grid-cards">
        <div class="mgd-card">
          <h4>Bhagsu Nag & Waterfall Enclave</h4>
          <p>Scenic hillside residential sector famous for the ancient Shiva temple and waterfall, featuring hillside villas, yoga centers, and guest houses where our porter teams execute regular household relocations.</p>
        </div>
        <div class="mgd-card">
          <h4>Dharamkot Meditation Village</h4>
          <p>Tranquil hilltop village perched above McLeod Ganj, home to international meditation centers, artists, and expatriates accessed via narrow cobblestone footpaths serviced by our mountain porters.</p>
        </div>
        <div class="mgd-card">
          <h4>Forsyth Ganj & St. John in the Wilderness</h4>
          <p>Historic colonial sector nestled in dense deodar forests, featuring heritage bungalows, church enclaves, and quiet residential residences requiring low-noise, respectful relocation handling.</p>
        </div>
        <div class="mgd-card">
          <h4>Tsuglagkhang & Main Temple Road</h4>
          <p>The spiritual center of the Tibetan diaspora housing the Dalai Lama's temple and monastic quarters, serviced by our specialized cultural artifact moving personnel.</p>
        </div>
        <div class="mgd-card">
          <h4>Lower Dharamshala & Kotwali Bazar Link</h4>
          <p>The winding 9-kilometer mountain road connecting McLeod Ganj with the administrative offices, commercial banks, and district sports stadium in lower Dharamshala.</p>
        </div>
        <div class="mgd-card">
          <h4>Kangra Valley & Gaggal Airport Highway</h4>
          <p>Strategic transport corridor allowing our long-haul container trucks to descend safely into the Kangra Valley and begin highway transit towards Punjab, Chandigarh, and Delhi NCR.</p>
        </div>
      </div>
    </section>

    <section class="mgd-section">
      <h2>Frequently Asked Questions About Moving in McLeod Ganj Dharamshala</h2>

      <div class="mgd-faq-item">
        <h4>How do you handle moves along narrow cobblestone alleys and steep footpaths in McLeod Ganj?</h4>
        <p>McLeod Ganj features pedestrian-only alleys, steep stone stairways, and vehicle-restricted paths around the Tsuglagkhang Temple, Bhagsu, and Dharamkot. We deploy experienced mountain porters using heavy-duty carrying harnesses, padded protective blankets, and stair trolleys to safely convey goods down to vehicular loading bays on Main Temple Road or Jogiwara Road.</p>
      </div>

      <div class="mgd-faq-item">
        <h4>How are sacred Tibetan Buddhist relics, bronze statues, and thangkas protected during shifting?</h4>
        <p>We provide museum-grade custom crating using acid-free silk paper, virgin bubble cushioning, custom-built wooden crates, and moisture-sealed film to protect delicate hand-painted thangka scrolls, consecrated statues, and religious scriptures from moisture and transit shock.</p>
      </div>

      <div class="mgd-faq-item">
        <h4>Do you provide relocation services for international scholars, expats, and yoga practitioners in McLeod Ganj?</h4>
        <p>Yes, we regularly relocate international researchers, spiritual scholars, and expatriates living in McLeod Ganj and Dharamkot, providing English-speaking move coordinators, official computerized GST billing, and door-to-door pan-India delivery.</p>
      </div>

      <div class="mgd-faq-item">
        <h4>What are the moving rates in McLeod Ganj Dharamshala?</h4>
        <p>Local moves in McLeod Ganj range from ₹3,000 to ₹4,500 for 1 BHK flats, ₹5,000 to ₹8,000 for 2 BHK homes, and ₹7,500 to ₹12,500 for 3 BHK hillside residences (including manual porter carriage). Long-haul relocations to Delhi NCR, Chandigarh, or Mumbai range between ₹12,500 and ₹39,000.</p>
      </div>

      <div class="mgd-faq-item">
        <h4>Can you transport vehicles down from McLeod Ganj to other Indian states?</h4>
        <p>Yes, we operate enclosed hydraulic car carrier trailers and dedicated motorcycle shipping bays with wheel lock chocks and marine transit insurance, guaranteeing 100% scratch-free transport across state borders.</p>
      </div>
    </section>

    <section class="mgd-section">
      <h2>Connected Himachal Shifting Hubs & Regional Moving Corridors</h2>
      <p>Shree Ashirwad Packers and Movers operates an extensive moving network across Himachal Pradesh, Punjab, Chandigarh, and North India. Explore our neighboring city hubs and key residential localities:</p>
      
      <div class="mgd-cluster-links">
        <a class="mgd-cluster-link" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dharamshala">Packers and Movers in Dharamshala</a>
        <a class="mgd-cluster-link" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-mandi">Packers and Movers in Mandi</a>
        <a class="mgd-cluster-link" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-shimla">Packers and Movers in Shimla</a>
        <a class="mgd-cluster-link" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-solan">Packers and Movers in Solan</a>
        <a class="mgd-cluster-link" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-baddi">Packers and Movers in Baddi</a>
        <a class="mgd-cluster-link" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-amritsar">Packers and Movers in Amritsar</a>
        <a class="mgd-cluster-link" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-chandigarh">Packers and Movers in Chandigarh</a>
        <a class="mgd-cluster-link" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">Moving Charges Calculator</a>
      </div>
    </section>

  </div>

</main>

<?php include_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
