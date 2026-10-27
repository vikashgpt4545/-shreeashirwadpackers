<?php
/**
 * Page: Packers and Movers in Moga, Punjab
 * Layout: Full-width modern responsive layout (AGENTS.md & AI_PAGE_CREATION_RULES.md compliant)
 * Scoped Prefix: mga-
 */
require_once __DIR__ . '/../includes/config.php';

$page_title = 'Packers and Movers in Moga | Certified Relocation Services';
$page_description = 'Professional packers and movers in Moga, Punjab. Verified household shifting, Nestle industrial goods transit, GT Road logistics, vehicle moving, and transparent charges.';
$page_keywords = 'packers and movers in moga, household shifting moga, movers and packers moga punjab, office relocation moga, luggage transport moga, car parcel moga';
$canonical_url = SITE_BASE_URL . '/packers-and-movers-in-moga';

$city_name = 'Moga';
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
    .mga-wrapper {
      width: 100%;
      overflow-x: hidden;
      background-color: #f8fafc;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      color: #334155;
      line-height: 1.6;
    }
    .mga-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }
    .mga-hero {
      background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 50%, #1d4ed8 100%);
      color: #ffffff;
      padding: 60px 20px;
      border-radius: 0 0 24px 24px;
      margin-bottom: 40px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    }
    .mga-hero h1 {
      font-size: 2.3rem;
      line-height: 1.25;
      margin-bottom: 18px;
      font-weight: 800;
      color: #ffffff;
    }
    .mga-hero p {
      font-size: 1.12rem;
      line-height: 1.7;
      max-width: 950px;
      margin-bottom: 22px;
      color: #dbeafe;
    }
    .mga-badge-row {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-top: 15px;
    }
    .mga-badge {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(8px);
      padding: 6px 16px;
      border-radius: 30px;
      font-size: 0.9rem;
      font-weight: 600;
      color: #ffffff;
      border: 1px solid rgba(255, 255, 255, 0.25);
    }
    .mga-section {
      background: #ffffff;
      border-radius: 12px;
      padding: 35px 30px;
      margin-bottom: 30px;
      border: 1px solid #e2e8f0;
      box-shadow: 0 4px 12px rgba(0,0,0,0.03);
    }
    .mga-section h2 {
      font-size: 1.75rem;
      color: #1e293b;
      margin-top: 0;
      margin-bottom: 18px;
      font-weight: 700;
      border-bottom: 3px solid #2563eb;
      display: inline-block;
      padding-bottom: 6px;
    }
    .mga-section h3 {
      font-size: 1.35rem;
      color: #0f172a;
      margin-top: 25px;
      margin-bottom: 14px;
      font-weight: 600;
    }
    .mga-section p {
      margin-bottom: 16px;
      color: #475569;
      font-size: 1.02rem;
    }
    .mga-grid-2 {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 30px;
      align-items: center;
      margin: 25px 0;
    }
    .mga-grid-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 20px;
      margin: 25px 0;
    }
    .mga-card {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 10px;
      padding: 24px;
      border-left: 4px solid #2563eb;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .mga-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.06);
    }
    .mga-card h4 {
      margin: 0 0 10px;
      color: #0f172a;
      font-size: 1.15rem;
      font-weight: 700;
    }
    .mga-card p {
      margin: 0;
      color: #64748b;
      font-size: 0.95rem;
      line-height: 1.6;
    }
    .mga-highlight-box {
      background: #eff6ff;
      border-left: 4px solid #2563eb;
      padding: 20px 24px;
      border-radius: 0 10px 10px 0;
      margin: 22px 0;
    }
    .mga-highlight-box h4 {
      margin: 0 0 8px;
      color: #1e3a8a;
      font-size: 1.1rem;
      font-weight: 700;
    }
    .mga-highlight-box p {
      margin: 0;
      color: #1d4ed8;
      font-size: 0.98rem;
    }
    .mga-table {
      width: 100%;
      border-collapse: collapse;
      margin: 25px 0;
      background: #ffffff;
      border-radius: 8px;
      overflow: hidden;
      border: 1px solid #e2e8f0;
    }
    .mga-table th, .mga-table td {
      padding: 14px 18px;
      text-align: left;
      border-bottom: 1px solid #e2e8f0;
    }
    .mga-table th {
      background: #1e3a8a;
      color: #ffffff;
      font-weight: 600;
      font-size: 0.98rem;
    }
    .mga-table tr:hover {
      background: #f8fafc;
    }
    .mga-image-container {
      max-width: 580px;
      margin: 25px auto;
      overflow: hidden;
      border-radius: 12px;
      border: 1px solid #cbd5e1;
      background: #ffffff;
      box-shadow: 0 6px 18px rgba(0,0,0,0.06);
    }
    .mga-image-container img {
      width: 100%;
      height: auto;
      display: block;
      object-fit: cover;
    }
    .mga-faq-item {
      border: 1px solid #e2e8f0;
      border-radius: 8px;
      padding: 20px 22px;
      margin-bottom: 18px;
      background: #f8fafc;
    }
    .mga-faq-item h4 {
      margin: 0 0 10px;
      color: #1e3a8a;
      font-size: 1.15rem;
      font-weight: 700;
    }
    .mga-faq-item p {
      margin: 0;
      color: #475569;
      font-size: 0.98rem;
      line-height: 1.65;
    }
    .mga-cluster-wrap {
      background: #f1f5f9;
      border-radius: 12px;
      padding: 28px;
      margin-top: 35px;
      border: 1px solid #cbd5e1;
    }
    .mga-cluster-wrap h3 {
      margin-top: 0;
      color: #0f172a;
      font-size: 1.25rem;
      margin-bottom: 14px;
    }
    .mga-cluster-links {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
    }
    .mga-cluster-link {
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
    .mga-cluster-link:hover {
      background: #1d4ed8;
      color: #ffffff;
      border-color: #1d4ed8;
    }
    @media (max-width: 768px) {
      .mga-hero { padding: 40px 18px; }
      .mga-hero h1 { font-size: 1.8rem; }
      .mga-section { padding: 25px 18px; }
      .mga-grid-2 { grid-template-columns: 1fr; }
    }
  </style>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "MovingCompany",
    "name": "Shree Ashirwad Packers and Movers Moga",
    "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
    "url": "<?php echo $canonical_url; ?>",
    "telephone": "+91-9835155555",
    "priceRange": "INR 4,500 - 45,000",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "GT Road, Near Nestle Factory Complex, Civil Lines Extension",
      "addressLocality": "Moga",
      "addressRegion": "Punjab",
      "postalCode": "142001",
      "addressCountry": "IN"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 30.8165,
      "longitude": 75.1716
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
      { "@type": "ListItem", "position": 2, "name": "Punjab Packers and Movers", "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ludhiana" },
      { "@type": "ListItem", "position": 3, "name": "Moga Authority Hub", "item": "<?php echo $canonical_url; ?>" }
    ]
  }
  </script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Household Relocation and Industrial Logistics Moga",
    "provider": { "@type": "MovingCompany", "name": "Shree Ashirwad Packers and Movers" },
    "areaServed": { "@type": "City", "name": "Moga" },
    "description": "Comprehensive packing, moving, corporate transit, agricultural machinery transport, and residential relocation services across Moga and Malwa Punjab."
  }
  </script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "What is the shifting cost for a 2 BHK apartment in Moga?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Local shifting for a 2 BHK apartment in Moga generally ranges from ₹5,500 to ₹11,500 depending on packing supplies, floor height, elevator accessibility, and distance within GT Road, New Town, or Baghapurana Road."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide container truck logistics for industrial goods in Moga?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, Shree Ashirwad Packers and Movers offers sealed, weather-tight container trucks for corporate consignments, dairy processing equipment, Nestle supplier freight, and agricultural machinery across Punjab and intercity corridors."
        }
      },
      {
        "@type": "Question",
        "name": "How is fragile kitchenware and crockery protected during moving?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Our skilled crew utilizes multi-layer corrugated bubble wrap, foam sheets, reinforced honeycomb carton boxes, and edge guards to ensure zero breakage during loading, transit, and unloading."
        }
      },
      {
        "@type": "Question",
        "name": "Can I get transit insurance for intercity household moving from Moga?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Absolutely. We arrange 100% genuine transit insurance coverage with on-spot documentation that protects your household items, appliances, and commercial goods against unforeseen transit hazards."
        }
      },
      {
        "@type": "Question",
        "name": "Do you handle transfers for bank officers, teachers, and defense families in Moga?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we specialize in official employee relocations across Moga district with computerized itemized inventory slips, IBA-compliant freight bills, and GST invoices for hassle-free claim reimbursement."
        }
      },
      {
        "@type": "Question",
        "name": "How much advance notice is required to schedule a home shifting in Moga?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "For local moves within Moga or nearby towns like Kotkapura and Baghapurana, 24 to 48 hours notice is recommended. For intercity moves to Delhi, Chandigarh, or Bangalore, booking 3 to 4 days ahead ensures dedicated container vehicle allocation."
        }
      }
    ]
  }
  </script>
</head>
<body>
<?php include_once __DIR__ . '/../includes/header.php'; ?>

<main class="mga-wrapper">
  <div class="mga-container">

    <section class="mga-hero">
      <h1>Packers and Movers in Moga, Punjab</h1>
      <p>Professional, certified packing and moving solutions across Moga and the Malwa agricultural heartland. Specialists in corporate employee relocations, dairy & agro-industrial freight, family villa shifting, and intercity container transit along NH-05 and the GT Road corridor.</p>
      <div class="mga-badge-row">
        <span class="mga-badge">✓ 100% Damage-Free Guarantee</span>
        <span class="mga-badge">✓ Multi-Layer Cushion Packing</span>
        <span class="mga-badge">✓ GPS-Tracked Closed Containers</span>
        <span class="mga-badge">✓ Transparent Upfront Pricing</span>
        <span class="mga-badge">✓ IBA-Compliant Documentation</span>
      </div>
    </section>

    <section class="mga-section">
      <h2>Reliable Relocation Services in Moga: Malwa's Industrial & Agricultural Hub</h2>
      <div class="mga-grid-2">
        <div>
          <p>Moga holds a prominent position in Punjab's economic and cultural landscape. Globally celebrated as the birthplace of Lala Lajpat Rai and the premier manufacturing home of Nestle India's flagship dairy processing facility since 1961, Moga is also a bustling center for tractor components, agricultural implement manufacturing, combine harvesters, and food processing industries. The city connects critical agrarian trade corridors between Ludhiana, Firozpur, Faridkot, Barnala, and Jalandhar.</p>
          <p>The urban geography of Moga has expanded rapidly over the past two decades. Established residential localities like New Town, Friends Colony, Civil Lines, Dashmesh Nagar, and GT Road are characterized by upscale multi-story kothis, contemporary villas, and modern apartment complexes. In addition, new residential developments along the Baghapurana Bypass and Dharamkot Road host thousands of doctors, industrialists, dairy specialists, educators, and returning NRIs.</p>
          <p>Relocating family homes or corporate offices in Moga requires specialized moving expertise. Shifting heavy hardwood furniture, delicate crockery, temple shrines, large LED TVs, double-door refrigerators, and modular kitchen accessories demands high-caliber packing materials and meticulous handling. Navigating congested railway overbridges, local bazaar corridors, and busy bypass intersections requires experienced commercial drivers familiar with local traffic patterns and truck entry regulations.</p>
          <p>Shree Ashirwad Packers and Movers brings over two decades of relocation mastery to Moga. Whether you are moving down the road to Friends Colony, transferring to a new home in Ludhiana or Chandigarh, or shifting across the nation to Delhi, Bangalore, or Mumbai, our dedicated moving specialists manage every aspect with surgical precision, prompt timing, and zero damage.</p>
        </div>
        <div>
          <div class="mga-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Household Packing Services in Moga Punjab" width="580" height="380" loading="lazy">
          </div>
        </div>
      </div>

      <div class="mga-highlight-box">
        <h4>Authorized Corporate & Employee Relocation Billing</h4>
        <p>We provide authorized, IBA-compliant consignment notes (bilty), detailed inventory item sheets, GST-compliant invoices, and verified transit insurance policies accepted by multinational companies, banks (SBI, PNB, HDFC), Nestle India corporate branches, and defense establishments for prompt claim settlement.</p>
      </div>

      <div class="mga-grid-cards">
        <div class="mga-card">
          <h4>Home & Villa Relocation</h4>
          <p>Complete packing for double beds, sofa suites, crystal chinaware, heavy wardrobes, refrigerators, and modular kitchenware using heavy-grade cartons and custom padding.</p>
        </div>
        <div class="mga-card">
          <h4>Corporate & Bank Shifting</h4>
          <p>Tailored shifting services for bank managers, government officials, school administrators, and corporate staff with IBA-compliant paperwork and prompt turnaround.</p>
        </div>
        <div class="mga-card">
          <h4>Industrial & Agro Transit</h4>
          <p>Heavy machinery parts, combine harvester assemblies, dairy processing containers, and retail inventory moved in weather-sealed commercial trucks.</p>
        </div>
        <div class="mga-card">
          <h4>Vehicle Moving (Car & Bike)</h4>
          <p>Hydraulic enclosed car carriers and customized wooden crates for two-wheelers ensuring scratch-free transit to any major city across India.</p>
        </div>
      </div>
    </section>

    <section class="mga-section">
      <h2>Our 4-Layer Defensive Packing Architecture</h2>
      <p>The agricultural roads and national highway stretches connecting Moga to Ludhiana, Firozpur, and Bathinda experience heavy multi-axle freight movement and highway vibration. To protect delicate household electronics, wooden finishes, and fragile ceramics, our team implements a rigorous four-layer packaging method:</p>

      <div class="mga-grid-2">
        <div>
          <ul style="padding-left: 20px; color: #475569; font-size: 1.02rem; line-height: 1.8;">
            <li><strong>Primary Contact Layer:</strong> High-density virgin foam wrap and scratch-resistant tissue shielding wooden polish, painted metal panels, and glass table tops from abrasive rubbing.</li>
            <li><strong>Cushioning Shock Layer:</strong> Heavy-gauge 10mm bubble wrap absorbing transit shocks, sudden road bumps, and braking forces during highway haulage.</li>
            <li><strong>Rigid Structural Layer:</strong> Double-wall 5-ply corrugated cardboard sheets custom-creased around furniture corners, appliance edges, and delicate electronics.</li>
            <li><strong>Outer Weather Barrier:</strong> 23-micron waterproof stretch film wrapped tightly with plastic strapping bands, ensuring dust-proof and moisture-tight sealing.</li>
          </ul>
          <p>For fragile showpieces, imported bone china, crystal chandeliers, and expensive temple marble idols, our carpentry team builds customized wooden crates lined with expanded polyethylene (EPE) foam, guaranteeing total immobility during long-distance transit.</p>
        </div>
        <div>
          <div class="mga-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/office-equipment-secure-packing-jamshedpur.jpg" alt="Office and Equipment Packing in Moga" width="580" height="380" loading="lazy">
          </div>
        </div>
      </div>

      <div class="mga-highlight-box">
        <h4>Zero Compromise on Quality Supplies</h4>
        <p>We do not use substandard recycled cartons or weak adhesive tapes that collapse under pressure. Every client receives fresh, factory-tested cartons categorized by weight capacity to ensure structural integrity when boxes are stacked inside the truck.</p>
      </div>
    </section>

    <section class="mga-section">
      <h2>Comprehensive Relocation Rates in Moga</h2>
      <p>We maintain 100% transparency with zero hidden costs, sudden fuel surcharges, or unquoted loading fees. Our pricing reflects exact material utilization, dedicated manpower, floor height complexity, and transport vehicle selection. Review our transparent baseline rates below and calculate custom itineraries using our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" style="color: #2563eb; font-weight: 700; text-decoration: underline;">online shifting charges calculator</a>.</p>

      <table class="mga-table">
        <thead>
          <tr>
            <th>Shifting Category</th>
            <th>Packing Materials & Crew</th>
            <th>Transport Freight (Local)</th>
            <th>Interstate Move (Delhi/NCR/East)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>1 BHK Apartment Move</strong></td>
            <td>₹2,200 - ₹3,600</td>
            <td>₹2,200 - ₹3,400</td>
            <td>₹12,000 - ₹21,000</td>
          </tr>
          <tr>
            <td><strong>2 BHK Family Home Move</strong></td>
            <td>₹3,800 - ₹5,800</td>
            <td>₹3,500 - ₹5,500</td>
            <td>₹18,000 - ₹32,000</td>
          </tr>
          <tr>
            <td><strong>3 BHK Independent Villa Move</strong></td>
            <td>₹5,500 - ₹8,800</td>
            <td>₹5,200 - ₹8,000</td>
            <td>₹28,000 - ₹48,000</td>
          </tr>
          <tr>
            <td><strong>4+ BHK Luxury Kothi Move</strong></td>
            <td>₹8,000 - ₹14,000</td>
            <td>₹7,500 - ₹12,000</td>
            <td>₹42,000 - ₹72,000</td>
          </tr>
          <tr>
            <td><strong>Complete Office Setup (Small to Mid)</strong></td>
            <td>₹6,500 - ₹12,500</td>
            <td>₹6,000 - ₹13,500</td>
            <td>₹25,000 - ₹55,000</td>
          </tr>
          <tr>
            <td><strong>Two-Wheeler Parcel Service</strong></td>
            <td>₹1,200 - ₹2,000</td>
            <td>₹2,200 - ₹4,500</td>
            <td>₹4,500 - ₹9,500</td>
          </tr>
          <tr>
            <td><strong>Four-Wheeler Enclosed Carrier</strong></td>
            <td>₹2,500 - ₹4,000</td>
            <td>₹7,500 - ₹16,500</td>
            <td>₹14,000 - ₹28,000</td>
          </tr>
        </tbody>
      </table>

      <div class="mga-image-container">
        <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="All Weather Container Truck in Moga" width="580" height="380" loading="lazy">
      </div>
    </section>

    <section class="mga-section">
      <h2>Step-by-Step Systematic Moving Workflow</h2>
      <p>To eliminate moving day stress, Shree Ashirwad Packers and Movers implements a transparent 5-stage relocation execution workflow:</p>

      <div class="mga-grid-cards">
        <div class="mga-card">
          <h4>1. Pre-Move Inventory Survey</h4>
          <p>We review your home or commercial inventory in person or through video call, evaluating delicate items, elevator dimensions, and access roads to provide a firm, binding quote with no hidden charges.</p>
        </div>
        <div class="mga-card">
          <h4>2. Room-by-Room Packing</h4>
          <p>Our uniformed packing specialists arrive with all materials, systematically boxing kitchenware, books, wardrobe essentials, and electronics with detailed color-coded labeling on every box.</p>
        </div>
        <div class="mga-card">
          <h4>3. Scientific Vehicle Loading</h4>
          <p>Heavier furniture and kitchen appliances are loaded at the vehicle base and anchored with ratchet straps to prevent weight shifting during transit along Punjab state highways.</p>
        </div>
        <div class="mga-card">
          <h4>4. Safe Transit & Tracking</h4>
          <p>Closed all-weather container trucks safeguard items from weather elements, road grime, and dust, backed by regular transit status updates directly to your mobile phone.</p>
        </div>
        <div class="mga-card">
          <h4>5. Unloading & Setup Service</h4>
          <p>At destination, our crew unloads items into assigned rooms, reassembles beds and dining tables, unpacks fragile items, and disposes of packing debris cleanly.</p>
        </div>
        <div class="mga-card">
          <h4>6. Post-Move Inspection</h4>
          <p>A final walk-through inspection with the customer confirms that every inventory item has been delivered safely and in pristine condition before project sign-off.</p>
        </div>
      </div>

      <div class="mga-image-container">
        <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and Setup Service in Moga" width="580" height="380" loading="lazy">
      </div>
    </section>

    <section class="mga-section">
      <h2>Key Neighborhoods and Residential Corridors We Serve in Moga</h2>
      <p>Our localized crews operate throughout Moga urban district and surrounding suburban belts with rapid dispatch times and dedicated transport vehicles:</p>
      
      <div class="mga-grid-cards">
        <div class="mga-card">
          <h4>GT Road & Civil Lines</h4>
          <p>The administrative and commercial heart of Moga, accommodating government bungalows, judicial residences, executive apartments, and premier banking offices requiring discrete, high-speed relocation.</p>
        </div>
        <div class="mga-card">
          <h4>New Town & Friends Colony</h4>
          <p>Prominent affluent residential enclaves featuring spacious independent kothis and modern family residences where we regularly conduct full-scale villa packing and car carrier loading.</p>
        </div>
        <div class="mga-card">
          <h4>Dashmesh Nagar & Akalsar Road</h4>
          <p>Dense residential and educational belts with vibrant commercial activity, requiring experienced hand-trolley teams and disciplined vehicular maneuvering to prevent traffic disruptions.</p>
        </div>
        <div class="mga-card">
          <h4>Baghapurana & Kotkapura Road</h4>
          <p>High-growth suburban corridors connecting Moga southward toward Bathinda, hosting newly developed residential colonies, farmhouses, and agro-equipment warehousing units.</p>
        </div>
        <div class="mga-card">
          <h4>Dharamkot Road & Industrial Area</h4>
          <p>Northward trade belt housing grain elevators, cold storage complexes, combine manufacturing facilities, and industrial worker colonies requiring dependable heavy cargo moving.</p>
        </div>
        <div class="mga-card">
          <h4>Railway Road & Main Bazaar</h4>
          <p>Traditional wholesale markets and trade corridors where retail merchants, hardware suppliers, and textile distributors rely on our scheduled night-time and early morning commercial shifting.</p>
        </div>
      </div>
    </section>

    <section class="mga-section">
      <h2>Highway Safety, Route Navigation & Transit Insurance Protection</h2>
      <p>Moving goods out of Moga involves extensive highway transit across Punjab, Haryana, Rajasthan, and the National Capital Region. The major logistics arteries—National Highway 05 connecting towards Ludhiana and Chandigarh, State Highway 16 linking to Barnala, and NH-105B heading towards Bathinda—carry high volumes of intercity freight traffic. Unsecured cargo, open-body trucks, or careless driving can result in catastrophic transit losses.</p>
      <p>At Shree Ashirwad Packers and Movers, we mitigate transit risks through disciplined engineering:</p>
      <ul style="padding-left: 20px; color: #475569; font-size: 1.02rem; line-height: 1.8;">
        <li><strong>All-Weather Sealed Containers:</strong> We use closed containerized trucks equipped with weather-tight rubber seals that protect your belongings from rainstorms, highway dust, diesel exhaust, and harsh sun exposure.</li>
        <li><strong>Air-Suspension Fleet for Delicate Items:</strong> Specialized vehicles with enhanced shock-absorption transport high-end electronics, server equipment, and antique heirlooms safely.</li>
        <li><strong>Experienced Long-Haul Drivers:</strong> Our drivers possess over 10 years of intercity highway experience, strictly following speed limits, statutory rest intervals, and defensive driving principles.</li>
        <li><strong>Comprehensive Door-to-Door Insurance:</strong> Every interstate consignment can be covered under comprehensive all-risk transit insurance policies through leading public sector underwriters, providing full financial reimbursement in the improbable event of road mishaps.</li>
      </ul>
    </section>

    <section class="mga-section">
      <h2>Frequently Asked Questions (FAQs)</h2>

      <div class="mga-faq-item">
        <h4>What is the shifting cost for a 2 BHK apartment in Moga?</h4>
        <p>Local shifting for a 2 BHK apartment in Moga generally ranges from ₹5,500 to ₹11,500 depending on packing supplies, floor height, elevator accessibility, and distance within GT Road, New Town, or Baghapurana Road.</p>
      </div>

      <div class="mga-faq-item">
        <h4>Do you provide container truck logistics for industrial goods in Moga?</h4>
        <p>Yes, Shree Ashirwad Packers and Movers offers sealed, weather-tight container trucks for corporate consignments, dairy processing equipment, Nestle supplier freight, and agricultural machinery across Punjab and intercity corridors.</p>
      </div>

      <div class="mga-faq-item">
        <h4>How is fragile kitchenware and crockery protected during moving?</h4>
        <p>Our skilled crew utilizes multi-layer corrugated bubble wrap, foam sheets, reinforced honeycomb carton boxes, and edge guards to ensure zero breakage during loading, transit, and unloading.</p>
      </div>

      <div class="mga-faq-item">
        <h4>Can I get transit insurance for intercity household moving from Moga?</h4>
        <p>Absolutely. We arrange 100% genuine transit insurance coverage with on-spot documentation that protects your household items, appliances, and commercial goods against unforeseen transit hazards.</p>
      </div>

      <div class="mga-faq-item">
        <h4>Do you handle transfers for bank officers, teachers, and defense families in Moga?</h4>
        <p>Yes, we specialize in official employee relocations across Moga district with computerized itemized inventory slips, IBA-compliant freight bills, and GST invoices for hassle-free claim reimbursement.</p>
      </div>

      <div class="mga-faq-item">
        <h4>How much advance notice is required to schedule a home shifting in Moga?</h4>
        <p>For local moves within Moga or nearby towns like Kotkapura and Baghapurana, 24 to 48 hours notice is recommended. For intercity moves to Delhi, Chandigarh, or Bangalore, booking 3 to 4 days ahead ensures dedicated container vehicle allocation.</p>
      </div>
    </section>

    <section class="mga-cluster-wrap">
      <h3>Connected Punjab & Regional Moving Corridors</h3>
      <p style="margin-bottom: 15px; color: #475569;">Explore our certified moving and packing coverage across major cities and commercial hubs in Punjab and North India:</p>
      <div class="mga-cluster-links">
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ludhiana" class="mga-cluster-link">Packers and Movers in Ludhiana</a>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bathinda" class="mga-cluster-link">Packers and Movers in Bathinda</a>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-jalandhar" class="mga-cluster-link">Packers and Movers in Jalandhar</a>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-amritsar" class="mga-cluster-link">Packers and Movers in Amritsar</a>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patiala" class="mga-cluster-link">Packers and Movers in Patiala</a>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-mohali" class="mga-cluster-link">Packers and Movers in Mohali</a>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-chandigarh" class="mga-cluster-link">Packers and Movers in Chandigarh</a>
        <a href="<?php echo SITE_BASE_URL; ?>/" class="mga-cluster-link">Ranchi Headquarters Hub</a>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="mga-cluster-link">Live Moving Tariff Calculator</a>
      </div>
    </section>

  </div>
</main>

<?php include_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
