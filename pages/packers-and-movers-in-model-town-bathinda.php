<?php
/**
 * Page: Packers and Movers in Model Town, Bathinda
 * Layout: Full-width modern responsive layout (AGENTS.md & AI_PAGE_CREATION_RULES.md compliant)
 * Scoped Prefix: mtb-
 */
require_once __DIR__ . '/../includes/config.php';

$page_title = 'Packers and Movers in Model Town Bathinda | Reliable Shifting';
$page_description = 'Professional packers and movers in Model Town Bathinda (Phase 1, 2 & 3). Expert villa shifting, AIIMS & refinery staff relocations, and containerized transport.';
$page_keywords = 'packers and movers in model town bathinda, movers and packers model town bathinda, household shifting model town bathinda, aiims bathinda packers, packers bathinda';
$canonical_url = SITE_BASE_URL . '/packers-and-movers-in-model-town-bathinda';

$city_name = 'Bathinda';
$locality_name = 'Model Town';
$state_name = 'Punjab';
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
    .mtb-wrapper {
      width: 100%;
      overflow-x: hidden;
      background-color: #f8fafc;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      color: #334155;
      line-height: 1.6;
    }
    .mtb-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }
    .mtb-hero {
      background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 50%, #2563eb 100%);
      color: #ffffff;
      padding: 60px 20px;
      border-radius: 0 0 24px 24px;
      margin-bottom: 40px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    }
    .mtb-hero h1 {
      font-size: 2.3rem;
      line-height: 1.25;
      margin-bottom: 18px;
      font-weight: 800;
      color: #ffffff;
    }
    .mtb-hero p {
      font-size: 1.12rem;
      line-height: 1.7;
      max-width: 950px;
      margin-bottom: 22px;
      color: #dbeafe;
    }
    .mtb-badge-row {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-top: 15px;
    }
    .mtb-badge {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(8px);
      padding: 6px 16px;
      border-radius: 30px;
      font-size: 0.9rem;
      font-weight: 600;
      color: #ffffff;
      border: 1px solid rgba(255, 255, 255, 0.25);
    }
    .mtb-section {
      background: #ffffff;
      border-radius: 12px;
      padding: 35px 30px;
      margin-bottom: 30px;
      border: 1px solid #e2e8f0;
      box-shadow: 0 4px 12px rgba(0,0,0,0.03);
    }
    .mtb-section h2 {
      font-size: 1.75rem;
      color: #1e293b;
      margin-top: 0;
      margin-bottom: 18px;
      font-weight: 700;
      border-bottom: 3px solid #2563eb;
      display: inline-block;
      padding-bottom: 6px;
    }
    .mtb-section h3 {
      font-size: 1.35rem;
      color: #0f172a;
      margin-top: 25px;
      margin-bottom: 14px;
      font-weight: 600;
    }
    .mtb-section p {
      margin-bottom: 16px;
      color: #475569;
      font-size: 1.02rem;
    }
    .mtb-grid-2 {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 30px;
      align-items: center;
      margin: 25px 0;
    }
    .mtb-grid-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 20px;
      margin: 25px 0;
    }
    .mtb-card {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 10px;
      padding: 24px;
      border-left: 4px solid #2563eb;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .mtb-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.06);
    }
    .mtb-card h4 {
      margin: 0 0 10px;
      color: #0f172a;
      font-size: 1.15rem;
      font-weight: 700;
    }
    .mtb-card p {
      margin: 0;
      color: #64748b;
      font-size: 0.95rem;
      line-height: 1.6;
    }
    .mtb-highlight-box {
      background: #eff6ff;
      border-left: 4px solid #2563eb;
      padding: 20px 24px;
      border-radius: 0 10px 10px 0;
      margin: 22px 0;
    }
    .mtb-highlight-box h4 {
      margin: 0 0 8px;
      color: #1e3a8a;
      font-size: 1.1rem;
      font-weight: 700;
    }
    .mtb-highlight-box p {
      margin: 0;
      color: #1d4ed8;
      font-size: 0.98rem;
    }
    .mtb-table {
      width: 100%;
      border-collapse: collapse;
      margin: 25px 0;
      background: #ffffff;
      border-radius: 8px;
      overflow: hidden;
      border: 1px solid #e2e8f0;
    }
    .mtb-table th, .mtb-table td {
      padding: 14px 18px;
      text-align: left;
      border-bottom: 1px solid #e2e8f0;
    }
    .mtb-table th {
      background: #1e3a8a;
      color: #ffffff;
      font-weight: 600;
      font-size: 0.98rem;
    }
    .mtb-table tr:hover {
      background: #f8fafc;
    }
    .mtb-image-container {
      max-width: 580px;
      margin: 25px auto;
      overflow: hidden;
      border-radius: 12px;
      border: 1px solid #cbd5e1;
      background: #ffffff;
      box-shadow: 0 6px 18px rgba(0,0,0,0.06);
    }
    .mtb-image-container img {
      width: 100%;
      height: auto;
      display: block;
      object-fit: cover;
    }
    .mtb-faq-item {
      border: 1px solid #e2e8f0;
      border-radius: 8px;
      padding: 20px 22px;
      margin-bottom: 18px;
      background: #f8fafc;
    }
    .mtb-faq-item h4 {
      margin: 0 0 10px;
      color: #1e293b;
      font-size: 1.1rem;
      font-weight: 600;
    }
    .mtb-faq-item p {
      margin: 0;
      color: #475569;
      font-size: 0.98rem;
      line-height: 1.6;
    }
    .mtb-cluster-wrap {
      background: #f1f5f9;
      border-radius: 12px;
      padding: 28px;
      margin-top: 30px;
    }
    .mtb-cluster-wrap h3 {
      margin-top: 0;
      margin-bottom: 16px;
      color: #0f172a;
      font-size: 1.25rem;
    }
    .mtb-cluster-links {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
    }
    .mtb-cluster-link {
      background: #ffffff;
      color: #1d4ed8;
      border: 1px solid #93c5fd;
      padding: 8px 16px;
      border-radius: 20px;
      text-decoration: none;
      font-size: 0.9rem;
      font-weight: 600;
      transition: all 0.2s ease;
    }
    .mtb-cluster-link:hover {
      background: #1d4ed8;
      color: #ffffff;
      border-color: #1d4ed8;
    }
    @media (max-width: 768px) {
      .mtb-hero { padding: 40px 18px; }
      .mtb-hero h1 { font-size: 1.8rem; }
      .mtb-section { padding: 25px 18px; }
      .mtb-grid-2 { grid-template-columns: 1fr; }
    }
  </style>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "MovingCompany",
    "name": "Shree Ashirwad Packers and Movers Model Town Bathinda",
    "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
    "url": "<?php echo $canonical_url; ?>",
    "telephone": "+91-9835155555",
    "priceRange": "INR 4,500 - 46,000",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Model Town Phase 1 & 2 Main Market, Near 100 Feet Road and Rose Garden",
      "addressLocality": "Bathinda",
      "addressRegion": "Punjab",
      "postalCode": "151001",
      "addressCountry": "IN"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 30.2010,
      "longitude": 74.9450
    },
    "openingHoursSpecification": {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
      "opens": "07:00",
      "closes": "22:00"
    }
  }
  </script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      { "@type": "ListItem", "position": 1, "name": "Home", "item": "<?php echo SITE_BASE_URL; ?>/" },
      { "@type": "ListItem", "position": 2, "name": "Bathinda Authority Hub", "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bathinda" },
      { "@type": "ListItem", "position": 3, "name": "Model Town Locality", "item": "<?php echo $canonical_url; ?>" }
    ]
  }
  </script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Executive Household Shifting and Villa Relocation Model Town Bathinda",
    "provider": { "@type": "MovingCompany", "name": "Shree Ashirwad Packers and Movers" },
    "areaServed": { "@type": "AdministrativeArea", "name": "Model Town, Bathinda" },
    "description": "Comprehensive residential villa shifting, AIIMS medical faculty transfers, refinery executive moving, and closed container transit across Model Town Phase 1, 2, and 3 in Bathinda."
  }
  </script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "What are the moving charges in Model Town Bathinda?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Local moves in Model Town Bathinda start from ₹4,500 to ₹7,500 for 1 BHK, ₹7,000 to ₹12,000 for 2 BHK, and ₹11,000 to ₹20,000 for spacious 3-4 BHK independent kothis and modern duplexes."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide relocation services for AIIMS Bathinda doctors and HMEL refinery engineers?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we regularly handle official corporate and medical transfers for AIIMS faculty, HMEL refinery executives, and thermal power plant personnel with full claim documentation."
        }
      },
      {
        "@type": "Question",
        "name": "How are delicate household items protected during transit?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We deploy our 4-layer defensive packing architecture including 100 GSM virgin air-bubble cushioning, heavy-duty cardboard edge guards, corrugated kraft armor, and hermetic stretch film."
        }
      },
      {
        "@type": "Question",
        "name": "Can you shift homes from Model Town Bathinda to Chandigarh, Delhi, or Jaipur?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we operate daily direct containerized truck routes connecting Bathinda with Chandigarh, Delhi NCR, Jaipur, Ludhiana, and pan-India destinations."
        }
      },
      {
        "@type": "Question",
        "name": "Is transit insurance included with long-distance shifting?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We provide genuine 100% all-risk door-to-door transit insurance backed by recognized national insurance underwriters for comprehensive financial protection."
        }
      },
      {
        "@type": "Question",
        "name": "How quickly can I book a move in Model Town Phase 1, 2, or 3?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Local moves within Bathinda can be scheduled within 24 hours. For interstate relocations, booking 2 to 3 days in advance ensures dedicated vehicle reservation."
        }
      }
    ]
  }
  </script>
</head>
<body>
<?php include_once __DIR__ . '/../includes/header.php'; ?>

<main class="mtb-wrapper">
  <div class="mtb-hero">
    <div class="mtb-container">
      <h1>Packers and Movers in Model Town Bathinda</h1>
      <p>Certified packing, residential shifting, and containerized logistics solutions across Model Town Phase 1, 2 & 3, Bathinda. Dedicated handling for spacious family kothis, AIIMS medical specialists, refinery engineers, and intercity moves with zero damage guarantee.</p>
      <div class="mtb-badge-row">
        <span class="mtb-badge">ISO 9001:2015 Certified</span>
        <span class="mtb-badge">Model Town Bathinda Specialist</span>
        <span class="mtb-badge">4-Tier Defensive Packaging</span>
        <span class="mtb-badge">100% Comprehensive Transit Insurance</span>
      </div>
    </div>
  </div>

  <div class="mtb-container">

    <section class="mtb-section">
      <h2>Premier Residential Infrastructure: Model Town Bathinda Logistics</h2>
      <div class="mtb-grid-2">
        <div>
          <p>Model Town represents the premier master-planned residential destination in Bathinda, the vibrant commercial hub of the Malwa region of Punjab. Divided into systematically laid out phases—Phase 1, Phase 2, and Phase 3—Model Town features broad sector avenues, abundant green parks, peaceful residential enclaves, modern shopping plazas, and seamless connectivity to 100 Feet Road, Rose Garden, and Goniana Road. It is home to prominent business families, cotton and grain traders, senior doctors from AIIMS Bathinda, senior engineers from Guru Gobind Singh Refinery (HMEL), and civil administrative officers.</p>
          <p>Relocating residences in Model Town requires seasoned logistics expertise capable of handling grand independent kothis, multi-story duplex villas, and delicate medical or corporate equipment. From shifting valuable solid teakwood furniture and contemporary modular kitchens to transporting high-value consumer electronics and cars, Shree Ashirwad Packers and Movers brings over 16 years of certified industry leadership to Model Town.</p>
          <p>Our dedicated moving crew manages every stage of relocation with engineering precision—conducting comprehensive pre-move surveys, utilizing multi-layer defensive packing materials, supervising safe loading into closed weatherproof container trucks, and providing full unpacking and placement at the destination.</p>
        </div>
        <div class="mtb-image-container">
          <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Complete Household Packing in Model Town Bathinda" width="580" height="380" loading="lazy">
        </div>
      </div>

      <div class="mtb-highlight-box">
        <h4>Transparent Pricing with Zero Hidden Charges</h4>
        <p>Planning your upcoming move in Model Town Bathinda? Obtain an instant, completely transparent moving estimate using our verified <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" style="color: #1e3a8a; font-weight: 700; text-decoration: underline;">live moving tariff calculator</a>. No hidden fuel surcharges, staircase levies, or unexpected final invoices.</p>
      </div>
    </section>

    <section class="mtb-section">
      <h2>Comprehensive Relocation Solutions for Model Town Residents</h2>
      <p>We provide a comprehensive range of personalized residential and commercial moving services tailored to the refined standards of Model Town Bathinda:</p>

      <div class="mtb-grid-cards">
        <div class="mtb-card">
          <h4>Spacious Kothi & Villa Relocation</h4>
          <p>End-to-end relocation services for multi-story independent kothis. We deploy custom furniture padding, anti-scratch blanket wraps, and specialized disassembly for heavy king-sized beds and dining tables.</p>
        </div>
        <div class="mtb-card">
          <h4>Medical Specialist & Refinery Transfers</h4>
          <p>Specialized moving services for AIIMS doctors, hospital faculty, and HMEL refinery engineers, featuring dedicated computer workstation wrapping, flexible schedules, and full claim documentation.</p>
        </div>
        <div class="mtb-card">
          <h4>Fine Chinaware & Temple Mandir Crating</h4>
          <p>Custom wooden crating and bubble-cushioned encapsulation for sacred marble murtis, glass chandeliers, expensive bone china crockery, and valuable family heirloom art pieces.</p>
        </div>
        <div class="mtb-card">
          <h4>Modern Appliance & Electronic Packing</h4>
          <p>Multi-layer shock-absorbing wrapping for large 4K OLED televisions, side-by-side refrigerators, washing machines, microwaves, and delicate home audio soundbars.</p>
        </div>
        <div class="mtb-card">
          <h4>Intercity Closed Container Transit</h4>
          <p>Weather-sealed, GPS-equipped containerized fleet connecting Model Town Bathinda directly with Chandigarh, Ludhiana, Delhi NCR, Jaipur, and Mumbai with guaranteed delivery timelines.</p>
        </div>
        <div class="mtb-card">
          <h4>Enclosed Car Carrier & Bike Moving</h4>
          <p>Dedicated car carrier trailers and secured motorcycle shipping cages with wheel chocks and transit insurance, guaranteeing zero-odometer-increase vehicle transit across state borders.</p>
        </div>
      </div>

      <div class="mtb-image-container">
        <img src="<?php echo SITE_BASE_URL; ?>/images/office-equipment-secure-packing-jamshedpur.jpg" alt="Office and Household Equipment Packing in Model Town Bathinda" width="580" height="380" loading="lazy">
      </div>
    </section>

    <section class="mtb-section">
      <h2>Our 4-Layer Defensive Packing Architecture for Bathinda Kothis</h2>
      <p>Luxury homes across Model Town Phase 1, 2, and 3 feature bespoke solid wood furnishings, imported Italian marble dining tables, contemporary modular kitchens, and delicate art installations. Standard single-layer corrugated boxes and simple blankets fail to protect against highway vibrations and stairwell maneuvering. Shree Ashirwad Packers and Movers implements an uncompromising four-tier defensive packaging methodology:</p>

      <div class="mtb-grid-cards">
        <div class="mtb-card">
          <h4>Layer 1: Virgin Bubble Wrap & EPE Foam Cushioning</h4>
          <p>Every polished wooden surface, glass door, LED screen, and metallic fitting is wrapped in heavy-grade 100 GSM virgin air-bubble film and non-abrasive expanded polyethylene (EPE) foam, insulating items from surface abrasion and friction damage.</p>
        </div>
        <div class="mtb-card">
          <h4>Layer 2: Heavy-Duty Edge Protectors & Angle Boards</h4>
          <p>Corner impacts are the primary cause of chipped furniture edges. We secure all furniture corners, tabletop rims, and large mirror frames with rigid compressed cardboard edge angle boards fixed securely with tension tape.</p>
        </div>
        <div class="mtb-card">
          <h4>Layer 3: 5-Ply and 7-Ply Heavy Corrugated Encapsulation</h4>
          <p>Items are encased inside high-burst-factor 5-ply or 7-ply double-wall virgin kraft corrugated sheets. For oversized dining tables and kothi wardrobes, our technicians custom-score sheets to form tailor-made exterior armor.</p>
        </div>
        <div class="mtb-card">
          <h4>Layer 4: Waterproof Polyolefin Stretch Film Wrap</h4>
          <p>The entire packaged item is machine-wrapped in multiple layers of 23-micron moisture-barrier stretch film. This binds the packaging hermetically, sealing out highway moisture, rainwater, diesel soot, and road dust during intercity transit.</p>
        </div>
      </div>

      <div class="mtb-highlight-box">
        <h4>Specialized Wooden Crating for Fragile Antiques & Artifacts</h4>
        <p>For precious family heirlooms, royal memorabilia, crystal chandeliers, and sacred marble murtis, our on-site carpentry specialists construct customized heat-treated wooden crates with internal foam suspension, guaranteeing zero vibration transfer during highway journeys.</p>
      </div>
    </section>

    <section class="mtb-section">
      <h2>Standard Packers and Movers Tariff in Model Town Bathinda</h2>
      <p>We maintain an upfront, transparent pricing philosophy based on actual inventory volume, packing material requirements, and moving distance. Review our standard rate schedule below:</p>

      <table class="mtb-table">
        <thead>
          <tr>
            <th>Shifting Type / Home Configuration</th>
            <th>Packing Material & Labour Charges</th>
            <th>Local Transit (Within Bathinda)</th>
            <th>Intercity Highway Transit (100–350 km)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>1 BHK Apartment / Builder Floor</strong></td>
            <td>₹2,500 - ₹3,800</td>
            <td>₹2,000 - ₹3,700</td>
            <td>₹7,500 - ₹13,000</td>
          </tr>
          <tr>
            <td><strong>2 BHK Modern Flat / Villa</strong></td>
            <td>₹4,500 - ₹6,800</td>
            <td>₹3,000 - ₹5,500</td>
            <td>₹11,500 - ₹18,500</td>
          </tr>
          <tr>
            <td><strong>3 BHK Independent Kothi / Duplex</strong></td>
            <td>₹6,800 - ₹10,500</td>
            <td>₹4,500 - ₹7,800</td>
            <td>₹16,500 - ₹26,000</td>
          </tr>
          <tr>
            <td><strong>4 BHK / Luxury Villa / Grand Kothi</strong></td>
            <td>₹10,000 - ₹15,500</td>
            <td>₹6,500 - ₹11,000</td>
            <td>₹24,000 - ₹40,000</td>
          </tr>
          <tr>
            <td><strong>Medical Consulting Suite / Corporate Office</strong></td>
            <td>₹5,500 - ₹12,000</td>
            <td>₹4,500 - ₹9,500</td>
            <td>₹16,000 - ₹32,000</td>
          </tr>
          <tr>
            <td><strong>Two-Wheeler / Bike Transport</strong></td>
            <td>₹1,200 - ₹1,900</td>
            <td>₹1,000 - ₹1,700</td>
            <td>₹3,500 - ₹6,000</td>
          </tr>
          <tr>
            <td><strong>Sedan / SUV Car Carrier Transit</strong></td>
            <td>₹2,500 - ₹3,800</td>
            <td>₹2,000 - ₹3,400</td>
            <td>₹7,800 - ₹15,000</td>
          </tr>
        </tbody>
      </table>

      <div class="mtb-image-container">
        <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe Transit Closed Container Truck in Model Town Bathinda" width="580" height="380" loading="lazy">
      </div>
    </section>

    <section class="mtb-section">
      <h2>Step-by-Step Systematic Moving Protocol</h2>
      <p>To eliminate moving day stress, our moving process adheres to a rigorous six-stage standard operating protocol:</p>

      <div class="mtb-grid-cards">
        <div class="mtb-card">
          <h4>1. Pre-Move Assessment & Survey</h4>
          <p>Our relocation supervisor conducts an on-site or digital walkthrough in Model Town to assess inventory volume, fragile items, access staircases, and street parking.</p>
        </div>
        <div class="mtb-card">
          <h4>2. Multi-Layer Custom Packing</h4>
          <p>Each item is packaged using premium 5-ply corrugated cartons, high-density bubble wrap, stretch film, edge guards, and custom labels detailing destination rooms.</p>
        </div>
        <div class="mtb-card">
          <h4>3. Ergonomic Loading & Securing</h4>
          <p>Heavy teak furniture, sofas, and white goods are hoisted using heavy-duty dolly trolleys and safety straps inside carpet-lined, covered container trucks.</p>
        </div>
        <div class="mtb-card">
          <h4>4. Monitored Highway Transport</h4>
          <p>Our sealed container vehicles travel along designated highway corridors with GPS tracking, ensuring complete visibility and timely arrival updates.</p>
        </div>
        <div class="mtb-card">
          <h4>5. Controlled Unloading & Placement</h4>
          <p>Upon arrival, our crew unloads every box into its designated room, carefully positioning heavy beds, wardrobes, and living room furniture as instructed.</p>
        </div>
        <div class="mtb-card">
          <h4>6. Unpacking, Debris Removal & Setup</h4>
          <p>We unpack fragile items, reassemble modular furniture components, inspect goods alongside the client, and haul away all discarded cartons and plastics cleanly.</p>
        </div>
      </div>

      <div class="mtb-image-container">
        <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and Setup Service in Model Town Bathinda" width="580" height="380" loading="lazy">
      </div>
    </section>

    <section class="mtb-section">
      <h2>Key Residential Localities Connected to Model Town Bathinda</h2>
      <p>Our dedicated moving crews serve Model Town Phase 1, 2, and 3 and all surrounding residential and commercial enclaves across Bathinda:</p>
      
      <div class="mtb-grid-cards">
        <div class="mtb-card">
          <h4>Model Town Phase 1 & 2</h4>
          <p>The established master-planned residential sectors housing grand kothis, doctor clinics, and community parks where we routinely conduct premier home relocations.</p>
        </div>
        <div class="mtb-card">
          <h4>Model Town Phase 3</h4>
          <p>Modern luxury residential extension featuring contemporary multi-story designer kothis, gated communities, and premier retail complexes.</p>
        </div>
        <div class="mtb-card">
          <h4>100 Feet Road Commercial Belt</h4>
          <p>High-transit commercial and retail corridor connecting Model Town to Central Bathinda, featuring corporate offices, showrooms, and banks.</p>
        </div>
        <div class="mtb-card">
          <h4>Civil Lines & District Courts</h4>
          <p>Administrative and judicial nerve center housing judges, senior advocates, administrative officers, and historic colonial bungalows.</p>
        </div>
        <div class="mtb-card">
          <h4>AIIMS Bathinda Campus Corridor</h4>
          <p>National premier medical institute zone housing professors, resident doctors, and healthcare specialists requiring frequent domestic transfers.</p>
        </div>
        <div class="mtb-card">
          <h4>Goniana Road & NH 54 Link</h4>
          <p>Direct arterial highway link enabling our container trucks to connect smoothly with Barnala, Ludhiana, Chandigarh, and Delhi NCR.</p>
        </div>
      </div>
    </section>

    <section class="mtb-section">
      <h2>Highway Navigation, Security Protocols & Transit Insurance Protection</h2>
      <p>Moving goods beyond Bathinda entails navigating major national highway arteries such as National Highway 7 (connecting Bathinda with Barnala, Sangrur, Patiala, and Chandigarh) and National Highway 54 (connecting toward Dabwali, Sirsa, and Rajasthan). High traffic densities, summer heat waves, and highway freight speed differences necessitate robust cargo defense mechanisms.</p>
      <p>Our fleet comprises modern, containerized vehicles featuring all-weather sealed bodies, internal lashing points, and hydraulic tailgate lifters. We eliminate open-top tarp transit risks completely, protecting your electronics, memory foam mattresses, and expensive polished furniture against torrential rains, road grime, dust storms, and heat.</p>
      <p>Key safety and insurance commitments include:</p>
      <ul style="padding-left: 20px; color: #475569; font-size: 1.02rem; line-height: 1.8;">
        <li><strong>Sealed Waterproof Container Vans:</strong> Specialized weatherproof enclosures keep your family heirlooms clean, dry, and protected against external climatic volatility.</li>
        <li><strong>Trained Rigging Personnel:</strong> Our packers are full-time certified professionals trained in knotting, weight distribution, and stairwell maneuvering.</li>
        <li><strong>Continuous GPS Tracking:</strong> Active cellular GPS trackers provide 24/7 visibility on vehicle location, stoppage durations, and expected delivery times.</li>
        <li><strong>Comprehensive All-Risk Insurance:</strong> We partner with premier public-sector insurers to offer door-to-door transit coverage that reimburses any unforeseen transit losses promptly.</li>
      </ul>
    </section>

    <section class="mtb-section">
      <h2>Frequently Asked Questions (FAQs)</h2>

      <div class="mtb-faq-item">
        <h4>What are the moving charges in Model Town Bathinda?</h4>
        <p>Local moves in Model Town Bathinda start from ₹4,500 to ₹7,500 for 1 BHK, ₹7,000 to ₹12,000 for 2 BHK, and ₹11,000 to ₹20,000 for spacious 3-4 BHK independent kothis and modern duplexes.</p>
      </div>

      <div class="mtb-faq-item">
        <h4>Do you provide relocation services for AIIMS Bathinda doctors and HMEL refinery engineers?</h4>
        <p>Yes, we regularly handle official corporate and medical transfers for AIIMS faculty, HMEL refinery executives, and thermal power plant personnel with full claim documentation.</p>
      </div>

      <div class="mtb-faq-item">
        <h4>How are delicate household items protected during transit?</h4>
        <p>We deploy our 4-layer defensive packing architecture including 100 GSM virgin air-bubble cushioning, heavy-duty cardboard edge guards, corrugated kraft armor, and hermetic stretch film.</p>
      </div>

      <div class="mtb-faq-item">
        <h4>Can you shift homes from Model Town Bathinda to Chandigarh, Delhi, or Jaipur?</h4>
        <p>Yes, we operate daily direct containerized truck routes connecting Bathinda with Chandigarh, Delhi NCR, Jaipur, Ludhiana, and pan-India destinations.</p>
      </div>

      <div class="mtb-faq-item">
        <h4>Is transit insurance included with long-distance shifting?</h4>
        <p>We provide genuine 100% all-risk door-to-door transit insurance backed by recognized national insurance underwriters for comprehensive financial protection.</p>
      </div>

      <div class="mtb-faq-item">
        <h4>How quickly can I book a move in Model Town Phase 1, 2, or 3?</h4>
        <p>Local moves within Bathinda can be scheduled within 24 hours. For interstate relocations, booking 2 to 3 days in advance ensures dedicated vehicle reservation.</p>
      </div>
    </section>

    <section class="mtb-cluster-wrap">
      <h3>Connected Bathinda Localities & Regional Moving Corridors</h3>
      <p style="margin-bottom: 15px; color: #475569;">Explore certified packing and moving coverage across key neighborhoods in Bathinda and neighboring Punjab hubs:</p>
      <div class="mtb-cluster-links">
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bathinda" class="mtb-cluster-link">Bathinda Central Authority Hub</a>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-civil-lines-bathinda" class="mtb-cluster-link">Packers and Movers Civil Lines Bathinda</a>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-moga" class="mtb-cluster-link">Packers and Movers in Moga</a>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patiala" class="mtb-cluster-link">Packers and Movers in Patiala</a>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ludhiana" class="mtb-cluster-link">Packers and Movers in Ludhiana</a>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-chandigarh" class="mtb-cluster-link">Packers and Movers in Chandigarh</a>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi" class="mtb-cluster-link">Ranchi Headquarters Hub</a>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="mtb-cluster-link">Live Moving Tariff Calculator</a>
      </div>
    </section>

  </div>
</main>

<?php include_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
