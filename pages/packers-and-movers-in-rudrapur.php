<?php
/**
 * Page: Packers and Movers in Rudrapur
 * Layout: Full-width modern responsive layout (AGENTS.md & AI_PAGE_CREATION_RULES.md compliant)
 * Scoped Prefix: rdp-
 */
require_once __DIR__ . '/../includes/config.php';

$page_title = 'Packers and Movers in Rudrapur | SIDCUL & Corporate Shifting';
$page_description = 'Best packers and movers in Rudrapur. Professional SIDCUL industrial corporate relocations, residential moving, Pantnagar University transfers, and secure container transit.';
$page_keywords = 'packers and movers in rudrapur, movers and packers rudrapur, sidcul packers rudrapur, pantnagar packers, household shifting rudrapur, packers awas vikas rudrapur';
$canonical_url = SITE_BASE_URL . '/packers-and-movers-in-rudrapur';

$city_name = 'Rudrapur';
$state_name = 'Uttarakhand';
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
    .rdp-wrapper {
      width: 100%;
      overflow-x: hidden;
      background-color: #f8fafc;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      color: #334155;
      line-height: 1.6;
    }
    .rdp-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }
    .rdp-hero {
      background: linear-gradient(135deg, #064e3b 0%, #047857 50%, #059669 100%);
      color: #ffffff;
      padding: 60px 20px;
      border-radius: 0 0 24px 24px;
      margin-bottom: 40px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    }
    .rdp-hero h1 {
      font-size: 2.3rem;
      line-height: 1.25;
      margin-bottom: 18px;
      font-weight: 800;
      color: #ffffff;
    }
    .rdp-hero p {
      font-size: 1.12rem;
      line-height: 1.7;
      max-width: 950px;
      margin-bottom: 22px;
      color: #d1fae5;
    }
    .rdp-badge-row {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-top: 15px;
    }
    .rdp-badge {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(8px);
      padding: 6px 16px;
      border-radius: 30px;
      font-size: 0.9rem;
      font-weight: 600;
      color: #ffffff;
      border: 1px solid rgba(255, 255, 255, 0.25);
    }
    .rdp-section {
      background: #ffffff;
      border-radius: 12px;
      padding: 35px 30px;
      margin-bottom: 30px;
      border: 1px solid #e2e8f0;
      box-shadow: 0 4px 12px rgba(0,0,0,0.03);
    }
    .rdp-section h2 {
      font-size: 1.75rem;
      color: #1e293b;
      margin-top: 0;
      margin-bottom: 18px;
      font-weight: 700;
      border-bottom: 3px solid #059669;
      display: inline-block;
      padding-bottom: 6px;
    }
    .rdp-section h3 {
      font-size: 1.35rem;
      color: #0f172a;
      margin-top: 25px;
      margin-bottom: 14px;
      font-weight: 600;
    }
    .rdp-section p {
      margin-bottom: 16px;
      color: #475569;
      font-size: 1.02rem;
    }
    .rdp-grid-2 {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 30px;
      align-items: center;
      margin: 25px 0;
    }
    .rdp-grid-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 20px;
      margin: 25px 0;
    }
    .rdp-card {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 10px;
      padding: 24px;
      border-left: 4px solid #059669;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .rdp-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.06);
    }
    .rdp-card h4 {
      margin: 0 0 10px;
      color: #0f172a;
      font-size: 1.15rem;
      font-weight: 700;
    }
    .rdp-card p {
      margin: 0;
      color: #64748b;
      font-size: 0.95rem;
      line-height: 1.6;
    }
    .rdp-highlight-box {
      background: #ecfdf5;
      border-left: 4px solid #059669;
      padding: 20px 24px;
      border-radius: 0 10px 10px 0;
      margin: 22px 0;
    }
    .rdp-highlight-box h4 {
      margin: 0 0 8px;
      color: #065f46;
      font-size: 1.1rem;
      font-weight: 700;
    }
    .rdp-highlight-box p {
      margin: 0;
      color: #047857;
      font-size: 0.98rem;
    }
    .rdp-table {
      width: 100%;
      border-collapse: collapse;
      margin: 25px 0;
      background: #ffffff;
      border-radius: 8px;
      overflow: hidden;
      border: 1px solid #e2e8f0;
    }
    .rdp-table th, .rdp-table td {
      padding: 14px 18px;
      text-align: left;
      border-bottom: 1px solid #e2e8f0;
    }
    .rdp-table th {
      background: #065f46;
      color: #ffffff;
      font-weight: 600;
      font-size: 0.98rem;
    }
    .rdp-table tr:hover {
      background: #f8fafc;
    }
    .rdp-image-container {
      max-width: 580px;
      margin: 25px auto;
      overflow: hidden;
      border-radius: 12px;
      border: 1px solid #cbd5e1;
      background: #ffffff;
      box-shadow: 0 6px 18px rgba(0,0,0,0.06);
    }
    .rdp-image-container img {
      width: 100%;
      height: auto;
      display: block;
      object-fit: cover;
    }
    .rdp-faq-item {
      border: 1px solid #e2e8f0;
      border-radius: 8px;
      padding: 20px 22px;
      margin-bottom: 18px;
      background: #f8fafc;
    }
    .rdp-faq-item h4 {
      margin: 0 0 10px;
      color: #1e293b;
      font-size: 1.1rem;
      font-weight: 600;
    }
    .rdp-faq-item p {
      margin: 0;
      color: #475569;
      font-size: 0.98rem;
      line-height: 1.6;
    }
    .rdp-cluster-wrap {
      background: #f1f5f9;
      border-radius: 12px;
      padding: 28px;
      margin-top: 30px;
    }
    .rdp-cluster-wrap h3 {
      margin-top: 0;
      margin-bottom: 16px;
      color: #0f172a;
      font-size: 1.25rem;
    }
    .rdp-cluster-links {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
    }
    .rdp-cluster-link {
      background: #ffffff;
      color: #047857;
      border: 1px solid #6ee7b7;
      padding: 8px 16px;
      border-radius: 20px;
      text-decoration: none;
      font-size: 0.9rem;
      font-weight: 600;
      transition: all 0.2s ease;
    }
    .rdp-cluster-link:hover {
      background: #047857;
      color: #ffffff;
      border-color: #047857;
    }
    @media (max-width: 768px) {
      .rdp-hero { padding: 40px 18px; }
      .rdp-hero h1 { font-size: 1.8rem; }
      .rdp-section { padding: 25px 18px; }
      .rdp-grid-2 { grid-template-columns: 1fr; }
    }
  </style>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "MovingCompany",
    "name": "Shree Ashirwad Packers and Movers Rudrapur",
    "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
    "url": "<?php echo $canonical_url; ?>",
    "telephone": "+91-9835155555",
    "priceRange": "INR 4,500 - 52,000",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Kashipur Bypass Road, Near SIDCUL Industrial Estate and Awas Vikas",
      "addressLocality": "Rudrapur",
      "addressRegion": "Uttarakhand",
      "postalCode": "263153",
      "addressCountry": "IN"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 28.9800,
      "longitude": 79.4000
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
      { "@type": "ListItem", "position": 2, "name": "Uttarakhand Movers", "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dehradun" },
      { "@type": "ListItem", "position": 3, "name": "Rudrapur Hub", "item": "<?php echo $canonical_url; ?>" }
    ]
  }
  </script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Industrial and Executive Household Shifting Services Rudrapur",
    "provider": { "@type": "MovingCompany", "name": "Shree Ashirwad Packers and Movers" },
    "areaServed": { "@type": "City", "name": "Rudrapur" },
    "description": "Comprehensive residential packing, SIDCUL manufacturing corporate relocations, Pantnagar university faculty shifting, and closed container transit across Rudrapur."
  }
  </script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "What are the moving charges in Rudrapur?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Local moves within Rudrapur range from ₹4,500 to ₹7,800 for 1 BHK, ₹7,000 to ₹12,000 for 2 BHK, and ₹11,000 to ₹21,000 for spacious 3-4 BHK independent houses and Awas Vikas villas."
        }
      },
      {
        "@type": "Question",
        "name": "Do you handle relocations for SIDCUL auto and FMCG manufacturing executives in Rudrapur?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we regularly manage executive employee transfers and corporate relocations for Tata Motors, Bajaj Auto, Nestle, and allied industries with GST invoices and corporate claim paperwork."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide moving services for G.B. Pant University faculty in Pantnagar?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, our Pantnagar dedicated teams provide full household transfers, specialized library box packing, and computer workstation wrapping for university professors and research scientists."
        }
      },
      {
        "@type": "Question",
        "name": "Can you shift household goods from Rudrapur to Delhi NCR, Pune, or Bengaluru?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we operate daily direct containerized truck routes connecting Rudrapur with Delhi NCR, Pune, Bengaluru, Chennai, Lucknow, and pan-India destinations via NH 9 and NH 109."
        }
      },
      {
        "@type": "Question",
        "name": "Is transit insurance included with long-distance shifting from Rudrapur?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We provide genuine 100% all-risk door-to-door transit insurance backed by recognized national insurance underwriters for comprehensive financial protection."
        }
      },
      {
        "@type": "Question",
        "name": "How quickly can I book a move in Rudrapur?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Local moves within Rudrapur can be scheduled within 24 hours. For interstate relocations, booking 2 to 3 days in advance ensures dedicated vehicle reservation."
        }
      }
    ]
  }
  </script>
</head>
<body>
<?php include_once __DIR__ . '/../includes/header.php'; ?>

<main class="rdp-wrapper">
  <div class="rdp-hero">
    <div class="rdp-container">
      <h1>Packers and Movers in Rudrapur</h1>
      <p>SIDCUL Industrial Capital Hub: Professional packing, executive corporate relocation, and residential moving solutions across Rudrapur. Specialist care for SIDCUL automobile and FMCG corporate staff, G.B. Pant University faculty in Pantnagar, Awas Vikas kothis, and secure container transit with zero damage guarantee.</p>
      <div class="rdp-badge-row">
        <span class="rdp-badge">ISO 9001:2015 Certified</span>
        <span class="rdp-badge">Rudrapur City Hub</span>
        <span class="rdp-badge">SIDCUL Industrial Specialist</span>
        <span class="rdp-badge">100% Comprehensive Transit Insurance</span>
      </div>
    </div>
  </div>

  <div class="rdp-container">

    <section class="rdp-section">
      <h2>Uttarakhand's Industrial Hub: Relocating in Rudrapur & Pantnagar</h2>
      <div class="rdp-grid-2">
        <div>
          <p>Rudrapur stands as the dynamic industrial capital of Uttarakhand and the administrative headquarters of the fertile Udham Singh Nagar district. Over the past two decades, Rudrapur has undergone an extraordinary industrial transformation, fueled by the massive Integrated Industrial Estate developed by SIDCUL in Pantnagar. Hosting world-class automotive manufacturing plants (Tata Motors, Bajaj Auto, Ashok Leyland, Mahindra), global consumer goods giants (Nestle, Britannia, Dabur, Reckitt Benckiser), and agricultural powerhouses, Rudrapur attracts engineers, plant heads, supply chain managers, and corporate technocrats from across the nation.</p>
          <p>Relocating in Rudrapur requires specialized industrial-grade logistics competence. Corporate transfers often involve fast-track executive employee relocations between manufacturing hubs like Pune, Gurugram, Chennai, and Jamshedpur, requiring strict scheduling discipline, computerized documentation for company HR claims, and certified protective packaging for expensive appliances, home electronics, and designer furnishings. Furthermore, the neighboring G.B. Pant University of Agriculture & Technology in Pantnagar requires dedicated academic library shifting and campus faculty moves.</p>
          <p>Shree Ashirwad Packers and Movers brings over 16 years of certified industry leadership to Rudrapur. Our specialized moving teams combine localized route mastery with ISO-certified packing standards, providing complete turnkey shifting services from meticulous packing to safe placement in your new home. Whether you are moving across town from SIDCUL to Awas Vikas or executing an intercity transfer to automotive hubs in Pune, Chennai, or Gurugram, our dedicated supervisors ensure an organized, stress-free moving experience.</p>
        </div>
        <div class="rdp-image-container">
          <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Complete Household Packing in Rudrapur" width="580" height="380" loading="lazy">
        </div>
      </div>

      <div class="rdp-highlight-box">
        <h4>Transparent Corporate & Plant Transfer Claim Invoices</h4>
        <p>Relocating on corporate executive transfer or plant deputation? We provide certified computerized consignment notes, GST invoices, and itemized packing lists tailored for prompt corporate HR reimbursement. Estimate your shipping budget transparently using our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" style="color: #065f46; font-weight: 700; text-decoration: underline;">live moving tariff calculator</a>.</p>
      </div>
    </section>

    <section class="rdp-section">
      <h2>Comprehensive Relocation Solutions Across Rudrapur</h2>
      <p>We provide a comprehensive range of personalized residential, industrial, and institutional moving services tailored to the specific demands of Rudrapur:</p>

      <div class="rdp-grid-cards">
        <div class="rdp-card">
          <h4>SIDCUL Executive & Plant Relocations</h4>
          <p>Turnkey shifting solutions for plant heads, operations managers, and corporate technical staff in SIDCUL's automotive and FMCG manufacturing majors. We handle complete residential transfers, executive apartment setups, modular furniture disassembly, and computerized paperwork for corporate HR claim reimbursements.</p>
        </div>
        <div class="rdp-card">
          <h4>Pantnagar University Faculty Transfers</h4>
          <p>Specialized moving services for professors, research scientists, and academic staff at G.B. Pant University of Agriculture & Technology, featuring dedicated book packing cartons and workstation wrapping.</p>
        </div>
        <div class="rdp-card">
          <h4>Awas Vikas & Kothi Relocation</h4>
          <p>End-to-end relocation services for expansive family kothis and private residences in Awas Vikas, Alliance City, and Omaxe Riviera, handling solid timber furniture with care.</p>
        </div>
        <div class="rdp-card">
          <h4>Fine Chinaware & Temple Mandir Crating</h4>
          <p>Custom wooden crating and bubble-cushioned encapsulation for sacred marble murtis, glass chandeliers, expensive bone china crockery, and family heirlooms.</p>
        </div>
        <div class="rdp-card">
          <h4>Intercity Closed Container Transit</h4>
          <p>Weather-sealed, GPS-equipped containerized fleet connecting Rudrapur directly with Delhi NCR, Pune, Bengaluru, Chennai, Lucknow, and Mumbai via NH 9 and NH 109.</p>
        </div>
        <div class="rdp-card">
          <h4>Enclosed Car Carrier & Bike Moving</h4>
          <p>Dedicated car carrier trailers and secured motorcycle shipping cages with wheel chocks and transit insurance, guaranteeing zero-odometer-increase vehicle transit across state borders.</p>
        </div>
      </div>

      <div class="rdp-image-container">
        <img src="<?php echo SITE_BASE_URL; ?>/images/office-equipment-secure-packing-jamshedpur.jpg" alt="Office and Household Equipment Packing in Rudrapur" width="580" height="380" loading="lazy">
      </div>
    </section>

    <section class="rdp-section">
      <h2>Our 4-Layer Defensive Packing Architecture for Industrial Transit</h2>
      <p>Residences in Rudrapur feature valuable teakwood furniture, imported Italian marble dining tables, contemporary modular kitchens, and delicate electronics. Long-haul highway transit along NH 9 demands superior packaging protection. Shree Ashirwad Packers and Movers implements an uncompromising four-tier defensive packaging methodology:</p>

      <div class="rdp-grid-cards">
        <div class="rdp-card">
          <h4>Layer 1: Virgin Bubble Wrap & EPE Foam Cushioning</h4>
          <p>Every polished wooden surface, glass door, LED screen, and metallic fitting is wrapped in heavy-grade 100 GSM virgin air-bubble film and non-abrasive expanded polyethylene (EPE) foam, insulating items from surface abrasion and friction damage.</p>
        </div>
        <div class="rdp-card">
          <h4>Layer 2: Heavy-Duty Edge Protectors & Angle Boards</h4>
          <p>Corner impacts are the primary cause of chipped furniture edges. We secure all furniture corners, tabletop rims, and large mirror frames with rigid compressed cardboard edge angle boards fixed securely with tension tape.</p>
        </div>
        <div class="rdp-card">
          <h4>Layer 3: 5-Ply and 7-Ply Heavy Corrugated Encapsulation</h4>
          <p>Items are encased inside high-burst-factor 5-ply or 7-ply double-wall virgin kraft corrugated sheets. For oversized dining tables and kothi wardrobes, our technicians custom-score sheets to form tailor-made exterior armor.</p>
        </div>
        <div class="rdp-card">
          <h4>Layer 4: Waterproof Polyolefin Stretch Film Wrap</h4>
          <p>The entire packaged item is machine-wrapped in multiple layers of 23-micron moisture-barrier stretch film. This binds the packaging hermetically, sealing out highway moisture, rainwater, industrial dust, and diesel soot during transit.</p>
        </div>
      </div>

      <div class="rdp-highlight-box">
        <h4>Specialized Wooden Crating for Fragile Antiques & Artifacts</h4>
        <p>For precious family heirlooms, royal memorabilia, crystal chandeliers, and sacred marble murtis, our on-site carpentry specialists construct customized heat-treated wooden crates with internal foam suspension, guaranteeing zero vibration transfer during highway journeys.</p>
      </div>
    </section>

    <section class="rdp-section">
      <h2>Standard Packers and Movers Tariff in Rudrapur</h2>
      <p>We maintain an upfront, transparent pricing philosophy based on actual inventory volume, packing material requirements, and moving distance. Review our standard rate schedule below:</p>

      <table class="rdp-table">
        <thead>
          <tr>
            <th>Shifting Type / Home Configuration</th>
            <th>Packing Material & Labour Charges</th>
            <th>Local Transit (Within Rudrapur)</th>
            <th>Intercity Highway Transit (100–350 km)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>1 BHK Apartment / Executive Flat</strong></td>
            <td>₹2,500 - ₹3,800</td>
            <td>₹2,000 - ₹3,700</td>
            <td>₹7,500 - ₹13,000</td>
          </tr>
          <tr>
            <td><strong>2 BHK Modern Flat / Independent Floor</strong></td>
            <td>₹4,500 - ₹6,800</td>
            <td>₹3,000 - ₹5,500</td>
            <td>₹11,500 - ₹18,500</td>
          </tr>
          <tr>
            <td><strong>3 BHK Independent Kothi / Villa</strong></td>
            <td>₹6,800 - ₹10,500</td>
            <td>₹4,500 - ₹7,800</td>
            <td>₹16,500 - ₹26,000</td>
          </tr>
          <tr>
            <td><strong>4 BHK / Luxury Villa / Executive Bungalow</strong></td>
            <td>₹10,000 - ₹15,500</td>
            <td>₹6,500 - ₹11,000</td>
            <td>₹24,000 - ₹40,000</td>
          </tr>
          <tr>
            <td><strong>Corporate Plant Office / Commercial Suite</strong></td>
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

      <div class="rdp-image-container">
        <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe Transit Closed Container Truck in Rudrapur" width="580" height="380" loading="lazy">
      </div>
    </section>

    <section class="rdp-section">
      <h2>Step-by-Step Systematic Moving Protocol</h2>
      <p>To eliminate moving day stress, our moving process adheres to a rigorous six-stage standard operating protocol:</p>

      <div class="rdp-grid-cards">
        <div class="rdp-card">
          <h4>1. Pre-Move Assessment & Survey</h4>
          <p>Our relocation supervisor conducts an on-site or digital walkthrough in Rudrapur to assess inventory volume, fragile items, access staircases, and street parking.</p>
        </div>
        <div class="rdp-card">
          <h4>2. Multi-Layer Custom Packing</h4>
          <p>Each item is packaged using premium 5-ply corrugated cartons, high-density bubble wrap, stretch film, edge guards, and custom labels detailing destination rooms.</p>
        </div>
        <div class="rdp-card">
          <h4>3. Ergonomic Loading & Securing</h4>
          <p>Heavy teak furniture, sofas, and white goods are hoisted using heavy-duty dolly trolleys and safety straps inside carpet-lined, covered container trucks.</p>
        </div>
        <div class="rdp-card">
          <h4>4. Monitored Highway Transport</h4>
          <p>Our sealed container vehicles travel along designated highway corridors with GPS tracking, ensuring complete visibility and timely arrival updates.</p>
        </div>
        <div class="rdp-card">
          <h4>5. Controlled Unloading & Placement</h4>
          <p>Upon arrival, our crew unloads every box into its designated room, carefully positioning heavy beds, wardrobes, and living room furniture as instructed.</p>
        </div>
        <div class="rdp-card">
          <h4>6. Unpacking, Debris Removal & Setup</h4>
          <p>We unpack fragile items, reassemble modular furniture components, inspect goods alongside the client, and haul away all discarded cartons and plastics cleanly.</p>
        </div>
      </div>

      <div class="rdp-image-container">
        <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and Setup Service in Rudrapur" width="580" height="380" loading="lazy">
      </div>
    </section>

    <section class="rdp-section">
      <h2>Key Localities & Connected Enclaves Across Rudrapur</h2>
      <p>Our dedicated moving crews serve all major residential, industrial, and institutional sectors across Rudrapur and Pantnagar:</p>
      
      <div class="rdp-grid-cards">
        <div class="rdp-card">
          <h4>SIDCUL Integrated Industrial Estate</h4>
          <p>The manufacturing nerve center housing hundreds of automotive, FMCG, and engineering global conglomerates and executive residential colonies.</p>
        </div>
        <div class="rdp-card">
          <h4>Pantnagar & G.B. Pant University</h4>
          <p>Renowned agricultural university campus and airport enclave housing professors, researchers, and senior technical officers.</p>
        </div>
        <div class="rdp-card">
          <h4>Awas Vikas Colony</h4>
          <p>Established, planned residential neighborhood housing prominent business families, private kothis, and medical clinics.</p>
        </div>
        <div class="rdp-card">
          <h4>Alliance City & Omaxe Riviera</h4>
          <p>Modern luxury gated townships featuring contemporary multi-story apartments, clubhouse amenities, and executive residents.</p>
        </div>
        <div class="rdp-card">
          <h4>Kashipur Bypass Corridor</h4>
          <p>Strategic logistics artery connecting western industrial zones with rapid access towards Moradabad, Delhi, and Kashipur.</p>
        </div>
        <div class="rdp-card">
          <h4>Kichha Road & Rampur Road Link</h4>
          <p>High-transit arterial junction enabling our container trucks to connect smoothly with Bareilly, Lucknow, and national highway networks.</p>
        </div>
      </div>
    </section>

    <section class="rdp-section">
      <h2>Highway Safety, Route Navigation & Transit Insurance Protection</h2>
      <p>Intercity relocations originating from Rudrapur travel across key national transport corridors including National Highway 9 (connecting Delhi, Moradabad, Rampur, Rudrapur, Pithoragarh) and National Highway 109 towards Haldwani and Bareilly. High freight traffic density, monsoon downpours, and freight speed differences necessitate robust cargo defense mechanisms.</p>
      <p>At Shree Ashirwad Packers and Movers, we guarantee security through engineering rigor:</p>
      <ul style="padding-left: 20px; color: #475569; font-size: 1.02rem; line-height: 1.8;">
        <li><strong>All-Weather Sealed Containers:</strong> Closed steel container bodies prevent all contact with monsoon rain, dust storms, diesel fumes, and road grit.</li>
        <li><strong>Internal Cargo Lashing Belts:</strong> Heavy furniture pieces and appliances are anchored to the internal frame with industrial ratchet straps, preventing tipping.</li>
        <li><strong>Experienced Long-Haul Drivers:</strong> Our verified drivers follow strict speed regulations, defensive driving norms, and mandated rest periods.</li>
        <li><strong>Comprehensive Door-to-Door Insurance:</strong> We arrange 100% all-risk transit insurance through leading public-sector underwriters, covering door-to-door transit from origin to final destination.</li>
      </ul>
    </section>

    <section class="rdp-section">
      <h2>Frequently Asked Questions (FAQs)</h2>

      <div class="rdp-faq-item">
        <h4>What are the moving charges in Rudrapur?</h4>
        <p>Local moves within Rudrapur range from ₹4,500 to ₹7,800 for 1 BHK, ₹7,000 to ₹12,000 for 2 BHK, and ₹11,000 to ₹21,000 for spacious 3-4 BHK independent houses and Awas Vikas villas.</p>
      </div>

      <div class="rdp-faq-item">
        <h4>Do you handle relocations for SIDCUL auto and FMCG manufacturing executives in Rudrapur?</h4>
        <p>Yes, we regularly manage executive employee transfers and corporate relocations for Tata Motors, Bajaj Auto, Nestle, and allied industries with GST invoices and corporate claim paperwork.</p>
      </div>

      <div class="rdp-faq-item">
        <h4>Do you provide moving services for G.B. Pant University faculty in Pantnagar?</h4>
        <p>Yes, our Pantnagar dedicated teams provide full household transfers, specialized library box packing, and computer workstation wrapping for university professors and research scientists.</p>
      </div>

      <div class="rdp-faq-item">
        <h4>Can you shift household goods from Rudrapur to Delhi NCR, Pune, or Bengaluru?</h4>
        <p>Yes, we operate daily direct containerized truck routes connecting Rudrapur with Delhi NCR, Pune, Bengaluru, Chennai, Lucknow, and pan-India destinations via NH 9 and NH 109.</p>
      </div>

      <div class="rdp-faq-item">
        <h4>Is transit insurance included with long-distance shifting from Rudrapur?</h4>
        <p>We provide genuine 100% all-risk door-to-door transit insurance backed by recognized national insurance underwriters for comprehensive financial protection.</p>
      </div>

      <div class="rdp-faq-item">
        <h4>How quickly can I book a move in Rudrapur?</h4>
        <p>Local moves within Rudrapur can be scheduled within 24 hours. For interstate relocations, booking 2 to 3 days in advance ensures dedicated vehicle reservation.</p>
      </div>
    </section>

    <section class="rdp-cluster-wrap">
      <h3>Connected Uttarakhand City Hubs & Regional Moving Corridors</h3>
      <p style="margin-bottom: 15px; color: #475569;">Explore our verified packing and moving solutions across major Uttarakhand cities and regional corridors:</p>
      <div class="rdp-cluster-links">
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-haldwani" class="rdp-cluster-link">Packers and Movers in Haldwani</a>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kashipur" class="rdp-cluster-link">Packers and Movers in Kashipur</a>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dehradun" class="rdp-cluster-link">Packers and Movers in Dehradun</a>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-haridwar" class="rdp-cluster-link">Packers and Movers in Haridwar</a>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-roorkee" class="rdp-cluster-link">Packers and Movers in Roorkee</a>
        <a href="<?php echo SITE_BASE_URL; ?>/" class="rdp-cluster-link">Ranchi Headquarters Hub</a>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="rdp-cluster-link">Live Moving Tariff Calculator</a>
      </div>
    </section>

  </div>
</main>

<?php include_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
