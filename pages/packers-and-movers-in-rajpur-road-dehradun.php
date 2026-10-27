<?php
/**
 * Page: Packers and Movers in Rajpur Road, Dehradun
 * Layout: Full-width modern responsive layout (AGENTS.md & AI_PAGE_CREATION_RULES.md compliant)
 * Scoped Prefix: rrd-
 */
require_once __DIR__ . '/../includes/config.php';

$page_title = 'Packers and Movers in Rajpur Road Dehradun | Villa & Luxury Shifting';
$page_description = 'Professional packers and movers in Rajpur Road, Dehradun. Expert luxury villa packing, antique furniture moving, Old Rajpur kothi shifting, and container transit.';
$page_keywords = 'packers and movers in rajpur road dehradun, movers and packers rajpur road, villa relocation rajpur road, luxury shifting dehradun, packers dehradun';
$canonical_url = SITE_BASE_URL . '/packers-and-movers-in-rajpur-road-dehradun';

$city_name = 'Dehradun';
$locality_name = 'Rajpur Road';
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
    .rrd-wrapper {
      width: 100%;
      overflow-x: hidden;
      background-color: #f8fafc;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      color: #334155;
      line-height: 1.6;
    }
    .rrd-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }
    .rrd-hero {
      background: linear-gradient(135deg, #064e3b 0%, #047857 50%, #059669 100%);
      color: #ffffff;
      padding: 60px 20px;
      border-radius: 0 0 24px 24px;
      margin-bottom: 40px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    }
    .rrd-hero h1 {
      font-size: 2.3rem;
      line-height: 1.25;
      margin-bottom: 18px;
      font-weight: 800;
      color: #ffffff;
    }
    .rrd-hero p {
      font-size: 1.12rem;
      line-height: 1.7;
      max-width: 950px;
      margin-bottom: 22px;
      color: #d1fae5;
    }
    .rrd-badge-row {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-top: 15px;
    }
    .rrd-badge {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(8px);
      padding: 6px 16px;
      border-radius: 30px;
      font-size: 0.9rem;
      font-weight: 600;
      color: #ffffff;
      border: 1px solid rgba(255, 255, 255, 0.25);
    }
    .rrd-section {
      background: #ffffff;
      border-radius: 12px;
      padding: 35px 30px;
      margin-bottom: 30px;
      border: 1px solid #e2e8f0;
      box-shadow: 0 4px 12px rgba(0,0,0,0.03);
    }
    .rrd-section h2 {
      font-size: 1.75rem;
      color: #1e293b;
      margin-top: 0;
      margin-bottom: 18px;
      font-weight: 700;
      border-bottom: 3px solid #059669;
      display: inline-block;
      padding-bottom: 6px;
    }
    .rrd-section h3 {
      font-size: 1.35rem;
      color: #0f172a;
      margin-top: 25px;
      margin-bottom: 14px;
      font-weight: 600;
    }
    .rrd-section p {
      margin-bottom: 16px;
      color: #475569;
      font-size: 1.02rem;
    }
    .rrd-grid-2 {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 30px;
      align-items: center;
      margin: 25px 0;
    }
    .rrd-grid-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 20px;
      margin: 25px 0;
    }
    .rrd-card {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 10px;
      padding: 24px;
      border-left: 4px solid #059669;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .rrd-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.06);
    }
    .rrd-card h4 {
      margin: 0 0 10px;
      color: #0f172a;
      font-size: 1.15rem;
      font-weight: 700;
    }
    .rrd-card p {
      margin: 0;
      color: #64748b;
      font-size: 0.95rem;
      line-height: 1.6;
    }
    .rrd-highlight-box {
      background: #ecfdf5;
      border-left: 4px solid #059669;
      padding: 20px 24px;
      border-radius: 0 10px 10px 0;
      margin: 22px 0;
    }
    .rrd-highlight-box h4 {
      margin: 0 0 8px;
      color: #065f46;
      font-size: 1.1rem;
      font-weight: 700;
    }
    .rrd-highlight-box p {
      margin: 0;
      color: #047857;
      font-size: 0.98rem;
    }
    .rrd-table {
      width: 100%;
      border-collapse: collapse;
      margin: 25px 0;
      background: #ffffff;
      border-radius: 8px;
      overflow: hidden;
      border: 1px solid #e2e8f0;
    }
    .rrd-table th, .rrd-table td {
      padding: 14px 18px;
      text-align: left;
      border-bottom: 1px solid #e2e8f0;
    }
    .rrd-table th {
      background: #065f46;
      color: #ffffff;
      font-weight: 600;
      font-size: 0.98rem;
    }
    .rrd-table tr:hover {
      background: #f8fafc;
    }
    .rrd-image-container {
      max-width: 580px;
      margin: 25px auto;
      overflow: hidden;
      border-radius: 12px;
      border: 1px solid #cbd5e1;
      background: #ffffff;
      box-shadow: 0 6px 18px rgba(0,0,0,0.06);
    }
    .rrd-image-container img {
      width: 100%;
      height: auto;
      display: block;
      object-fit: cover;
    }
    .rrd-faq-item {
      border: 1px solid #e2e8f0;
      border-radius: 8px;
      padding: 20px 22px;
      margin-bottom: 18px;
      background: #f8fafc;
    }
    .rrd-faq-item h4 {
      margin: 0 0 10px;
      color: #1e293b;
      font-size: 1.1rem;
      font-weight: 600;
    }
    .rrd-faq-item p {
      margin: 0;
      color: #475569;
      font-size: 0.98rem;
      line-height: 1.6;
    }
    .rrd-cluster-wrap {
      background: #f1f5f9;
      border-radius: 12px;
      padding: 28px;
      margin-top: 30px;
    }
    .rrd-cluster-wrap h3 {
      margin-top: 0;
      margin-bottom: 16px;
      color: #0f172a;
      font-size: 1.25rem;
    }
    .rrd-cluster-links {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
    }
    .rrd-cluster-link {
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
    .rrd-cluster-link:hover {
      background: #047857;
      color: #ffffff;
      border-color: #047857;
    }
    @media (max-width: 768px) {
      .rrd-hero { padding: 40px 18px; }
      .rrd-hero h1 { font-size: 1.8rem; }
      .rrd-section { padding: 25px 18px; }
      .rrd-grid-2 { grid-template-columns: 1fr; }
    }
  </style>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "MovingCompany",
    "name": "Shree Ashirwad Packers and Movers Rajpur Road Dehradun",
    "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
    "url": "<?php echo $canonical_url; ?>",
    "telephone": "+91-9835155555",
    "priceRange": "INR 4,500 - 55,000",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Rajpur Road, Near Pacific Mall and Mussoorie Diversion",
      "addressLocality": "Dehradun",
      "addressRegion": "Uttarakhand",
      "postalCode": "248001",
      "addressCountry": "IN"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 30.3450,
      "longitude": 78.0650
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
      { "@type": "ListItem", "position": 2, "name": "Dehradun Authority Hub", "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dehradun" },
      { "@type": "ListItem", "position": 3, "name": "Rajpur Road Locality", "item": "<?php echo $canonical_url; ?>" }
    ]
  }
  </script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Luxury Villa and Hillside Residence Relocation Rajpur Road Dehradun",
    "provider": { "@type": "MovingCompany", "name": "Shree Ashirwad Packers and Movers" },
    "areaServed": { "@type": "AdministrativeArea", "name": "Rajpur Road, Dehradun" },
    "description": "Premium villa shifting, antique furniture crating, luxury boutique moving, and closed container transit across Rajpur Road and Old Rajpur, Dehradun."
  }
  </script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "What are the moving charges in Rajpur Road Dehradun?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Local moves in Rajpur Road range from ₹4,500 to ₹7,800 for 1 BHK, ₹7,200 to ₹12,500 for 2 BHK, and ₹12,000 to ₹24,000 for luxury 3-4 BHK independent hillside villas and kothis."
        }
      },
      {
        "@type": "Question",
        "name": "How do you navigate steep driveways and hillside villas along Rajpur Road?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We deploy specialized compact feeder vehicles (Tata 407 / Tata Ace) equipped with mountain brakes, rubber wheel chocks, and hydraulic lifting dollies for hillside inclines."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide white-glove packing for delicate glassware and chandeliers?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, our team employs multi-layer cushioning, honeycomb cardboard partitions, and custom wooden crating with internal foam suspension for crystal lighting and antiques."
        }
      },
      {
        "@type": "Question",
        "name": "Can you shift homes from Rajpur Road Dehradun to Delhi NCR or Chandigarh?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we operate daily direct containerized truck routes connecting Dehradun with Delhi NCR, Chandigarh, Jaipur, Lucknow, and pan-India destinations."
        }
      },
      {
        "@type": "Question",
        "name": "Is transit insurance included with long-distance shifting from Rajpur Road?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We provide genuine 100% all-risk door-to-door transit insurance backed by recognized national insurance underwriters for comprehensive financial protection."
        }
      },
      {
        "@type": "Question",
        "name": "How quickly can I book a move in Rajpur Road Dehradun?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Local moves within Dehradun can be scheduled within 24 hours. For interstate relocations, booking 2 to 3 days in advance ensures dedicated vehicle reservation."
        }
      }
    ]
  }
  </script>
</head>
<body>
<?php include_once __DIR__ . '/../includes/header.php'; ?>

<main class="rrd-wrapper">
  <div class="rrd-hero">
    <div class="rrd-container">
      <h1>Packers and Movers in Rajpur Road Dehradun</h1>
      <p>Premier packing, luxury villa relocation, and containerized moving solutions across Rajpur Road, Dehradun. Dedicated care for hillside kothis, Pacific Mall lifestyle residences, Old Rajpur heritage estates, and intercity container transit with zero damage guarantee.</p>
      <div class="rrd-badge-row">
        <span class="rrd-badge">ISO 9001:2015 Certified</span>
        <span class="rrd-badge">Rajpur Road Specialist</span>
        <span class="rrd-badge">4-Tier Defensive Packaging</span>
        <span class="rrd-badge">100% Comprehensive Transit Insurance</span>
      </div>
    </div>
  </div>

  <div class="rrd-container">

    <section class="rrd-section">
      <h2>Valley Royalty & Foothills Elegance: Rajpur Road Logistics Dynamics</h2>
      <div class="rrd-grid-2">
        <div>
          <p>Rajpur Road stands as the quintessential luxury boulevard and prestigious residential artery of Dehradun. Originating at the historic Clock Tower (Ghanta Ghar) in the heart of the city and stretching gracefully northward towards the foothills of Mussoorie, Rajpur Road represents the pinnacle of Doon Valley living. It features lush, tree-shaded avenues, expansive ancestral kothis, contemporary designer duplex villas, luxury high-rises around Pacific Mall and Silver City, renowned academic schools like Scholars Home, and charming colonial-era heritage estates in Old Rajpur.</p>
          <p>Relocating residences along Rajpur Road requires specialized moving craftsmanship attuned to luxury furnishings and steep topography. As the elevation ascends toward Old Rajpur and Mussoorie Diversion, residential access lanes become steep and curvy, requiring agile feeder transport vehicles rather than bulky multi-axle trucks. Inside these grand homes, our moving technicians handle imported Italian marble tables, delicate crystal chandeliers, fine art paintings, and solid teakwood four-poster beds requiring white-glove packaging standards.</p>
          <p>Shree Ashirwad Packers and Movers brings over 16 years of certified industry leadership to Rajpur Road Dehradun. Our specialized moving teams combine localized route mastery with ISO-certified packing standards, providing complete turnkey shifting services from meticulous packing to safe placement in your new home. From premier lifestyle apartments near Pacific Mall to secluded hillside villas in Old Rajpur, we ensure a seamless, damage-free moving experience backed by prompt delivery schedules.</p>
        </div>
        <div class="rrd-image-container">
          <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Complete Household Packing in Rajpur Road Dehradun" width="580" height="380" loading="lazy">
        </div>
      </div>

      <div class="rrd-highlight-box">
        <h4>Transparent Rates with Zero Hidden Surcharges</h4>
        <p>Planning your upcoming move in Rajpur Road? Calculate your personalized shipping budget transparently with our verified <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" style="color: #065f46; font-weight: 700; text-decoration: underline;">live moving tariff calculator</a>. We offer fixed upfront estimates without hidden toll charges, hill incline levies, or surprise surcharges.</p>
      </div>
    </section>

    <section class="rrd-section">
      <h2>Comprehensive Relocation Solutions Across Rajpur Road</h2>
      <p>We provide a comprehensive range of personalized residential, institutional, and commercial moving services tailored to the specific demands of Rajpur Road Dehradun:</p>

      <div class="rrd-grid-cards">
        <div class="rrd-card">
          <h4>Luxury Kothi & Hillside Villa Moving</h4>
          <p>Turnkey shifting solutions for expansive family kothis, colonial bungalows, and modern duplexes along Rajpur Road. We deploy custom furniture padding, anti-scratch blanket wraps, and specialized disassembly for modular beds and dining tables.</p>
        </div>
        <div class="rrd-card">
          <h4>Fine Art, Chandeliers & Antique Crating</h4>
          <p>Tailor-made pinewood crates and double-wall shock-absorbent cushioning for heritage paintings, crystal lighting, marble deities, and high-value antique decorative pieces.</p>
        </div>
        <div class="rrd-card">
          <h4>High-Street Boutique & Cafe Relocation</h4>
          <p>Swift commercial moving services for apparel showrooms, gourmet cafes, and luxury retail counters across the Rajpur Road shopping strip, executed overnight to eliminate business downtime.</p>
        </div>
        <div class="rrd-card">
          <h4>Modern Appliance & Electronic Packing</h4>
          <p>Multi-layer shock-absorbing wrapping for large 4K OLED televisions, side-by-side refrigerators, washing machines, microwaves, and delicate home audio soundbars.</p>
        </div>
        <div class="rrd-card">
          <h4>Intercity Closed Container Transit</h4>
          <p>Weather-sealed, GPS-equipped containerized fleet connecting Rajpur Road directly with Delhi NCR, Chandigarh, Lucknow, Jaipur, Bengaluru, and Mumbai via the Delhi-Dehradun Expressway.</p>
        </div>
        <div class="rrd-card">
          <h4>Enclosed Car Carrier & Bike Moving</h4>
          <p>Dedicated car carrier trailers and secured motorcycle shipping cages with wheel chocks and transit insurance, guaranteeing zero-odometer-increase vehicle transit across state borders.</p>
        </div>
      </div>

      <div class="rrd-image-container">
        <img src="<?php echo SITE_BASE_URL; ?>/images/office-equipment-secure-packing-jamshedpur.jpg" alt="Office and Household Equipment Packing in Rajpur Road Dehradun" width="580" height="380" loading="lazy">
      </div>
    </section>

    <section class="rrd-section">
      <h2>Our 4-Layer Defensive Packing Architecture for Rajpur Road Estates</h2>
      <p>Residences in Rajpur Road feature handcrafted solid wood furniture, imported marble dining sets, contemporary modular wardrobes, and valuable personal art collections. Mountain highway transit with sharp curves, elevation changes, and temperature variations demands superior packaging protection. Shree Ashirwad Packers and Movers implements an uncompromising four-tier defensive packaging methodology:</p>

      <div class="rrd-grid-cards">
        <div class="rrd-card">
          <h4>Layer 1: Virgin Bubble Wrap & EPE Foam Cushioning</h4>
          <p>Every polished wooden surface, glass door, LED screen, and metallic fitting is wrapped in heavy-grade 100 GSM virgin air-bubble film and non-abrasive expanded polyethylene (EPE) foam, insulating items from surface abrasion and friction damage.</p>
        </div>
        <div class="rrd-card">
          <h4>Layer 2: Heavy-Duty Edge Protectors & Angle Boards</h4>
          <p>Corner impacts are the primary cause of chipped furniture edges. We secure all furniture corners, tabletop rims, and large mirror frames with rigid compressed cardboard edge angle boards fixed securely with tension tape.</p>
        </div>
        <div class="rrd-card">
          <h4>Layer 3: 5-Ply and 7-Ply Heavy Corrugated Encapsulation</h4>
          <p>Items are encased inside high-burst-factor 5-ply or 7-ply double-wall virgin kraft corrugated sheets. For oversized dining tables and kothi wardrobes, our technicians custom-score sheets to form tailor-made exterior armor.</p>
        </div>
        <div class="rrd-card">
          <h4>Layer 4: Waterproof Polyolefin Stretch Film Wrap</h4>
          <p>The entire packaged item is machine-wrapped in multiple layers of 23-micron moisture-barrier stretch film. This binds the packaging hermetically, sealing out mountain fog moisture, rainwater, diesel soot, and road dust during intercity transit.</p>
        </div>
      </div>

      <div class="rrd-highlight-box">
        <h4>Specialized Wooden Crating for Sacred Deities & Glassware</h4>
        <p>For precious family heirlooms, sacred marble murtis, crystal chandeliers, and brass pooja artifacts, our on-site carpentry specialists construct customized heat-treated wooden crates with internal foam suspension, guaranteeing zero vibration transfer during highway journeys.</p>
      </div>
    </section>

    <section class="rrd-section">
      <h2>Standard Packers and Movers Tariff in Rajpur Road Dehradun</h2>
      <p>We maintain an upfront, transparent pricing philosophy based on actual inventory volume, packing material requirements, and moving distance. Review our standard rate schedule below:</p>

      <table class="rrd-table">
        <thead>
          <tr>
            <th>Shifting Type / Home Configuration</th>
            <th>Packing Material & Labour Charges</th>
            <th>Local Transit (Within Dehradun)</th>
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
            <td><strong>4 BHK / Luxury Hillside Villa / Estate</strong></td>
            <td>₹10,000 - ₹15,500</td>
            <td>₹6,500 - ₹11,000</td>
            <td>₹24,000 - ₹40,000</td>
          </tr>
          <tr>
            <td><strong>Boutique Store / Commercial Office</strong></td>
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

      <div class="rrd-image-container">
        <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe Transit Closed Container Truck in Rajpur Road Dehradun" width="580" height="380" loading="lazy">
      </div>
    </section>

    <section class="rrd-section">
      <h2>Step-by-Step Systematic Moving Protocol</h2>
      <p>To eliminate moving day stress, our moving process adheres to a rigorous six-stage standard operating protocol:</p>

      <div class="rrd-grid-cards">
        <div class="rrd-card">
          <h4>1. Pre-Move Assessment & Survey</h4>
          <p>Our relocation supervisor conducts an on-site or digital walkthrough in Rajpur Road to assess inventory volume, fragile items, mountain road accessibility, and parking feasibility.</p>
        </div>
        <div class="rrd-card">
          <h4>2. Multi-Layer Custom Packing</h4>
          <p>Each item is packaged using premium 5-ply corrugated cartons, high-density bubble wrap, stretch film, edge guards, and custom labels detailing destination rooms.</p>
        </div>
        <div class="rrd-card">
          <h4>3. Ergonomic Loading & Securing</h4>
          <p>Heavy teak furniture, sofas, and white goods are hoisted using heavy-duty dolly trolleys and safety straps inside carpet-lined, covered container trucks.</p>
        </div>
        <div class="rrd-card">
          <h4>4. Monitored Highway Transport</h4>
          <p>Our sealed container vehicles travel along designated highway corridors with GPS tracking, ensuring complete visibility and timely arrival updates.</p>
        </div>
        <div class="rrd-card">
          <h4>5. Controlled Unloading & Placement</h4>
          <p>Upon arrival, our crew unloads every box into its designated room, carefully positioning heavy beds, wardrobes, and living room furniture as instructed.</p>
        </div>
        <div class="rrd-card">
          <h4>6. Unpacking, Debris Removal & Setup</h4>
          <p>We unpack fragile items, reassemble modular furniture components, inspect goods alongside the client, and haul away all discarded cartons and plastics cleanly.</p>
        </div>
      </div>

      <div class="rrd-image-container">
        <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and Setup Service in Rajpur Road Dehradun" width="580" height="380" loading="lazy">
      </div>
    </section>

    <section class="rrd-section">
      <h2>Key Localities & Connected Enclaves Around Rajpur Road Dehradun</h2>
      <p>Our dedicated moving crews serve all major residential, lifestyle, and hillside enclaves along Rajpur Road:</p>
      
      <div class="rrd-grid-cards">
        <div class="rrd-card">
          <h4>Pacific Mall & Jakhan Crossing</h4>
          <p>Modern lifestyle hub featuring premier multi-story residential towers, commercial showrooms, and luxury shopping centers.</p>
        </div>
        <div class="rrd-card">
          <h4>Old Rajpur Heritage Village</h4>
          <p>Historic foothills enclave hosting quiet, verdant kothis, organic cafes, and ancestral stone bungalows along winding hillside roads.</p>
        </div>
        <div class="rrd-card">
          <h4>Dalanwala Residential Link</h4>
          <p>The iconic colonial tree-lined residential district just off lower Rajpur Road, celebrated for spacious heritage homes and lush estates.</p>
        </div>
        <div class="rrd-card">
          <h4>Mussoorie Diversion & Malsi</h4>
          <p>Scenic gateway towards Mussoorie featuring luxury hillside resorts, boarding schools, and modern gated communities.</p>
        </div>
        <div class="rrd-card">
          <h4>Astley Hall & Clock Tower Zone</h4>
          <p>Historic shopping bazaar at the southern start of Rajpur Road, bustling with retail businesses, bookshops, and banks.</p>
        </div>
        <div class="rrd-card">
          <h4>Sahastradhara Road Connecting Arterial</h4>
          <p>Direct lateral connector linking Rajpur Road with Dehradun's emerging IT Park and eastern residential sectors.</p>
        </div>
      </div>
    </section>

    <section class="rrd-section">
      <h2>Highway Safety, Route Navigation & Transit Insurance Protection</h2>
      <p>Intercity relocations originating from Rajpur Road travel down the valley towards the Delhi-Dehradun Expressway corridor and National Highway 307. Winding mountain approaches, sudden monsoon downpours, and elevation variations require specialized hill driving skills and sealed container trucks.</p>
      <p>At Shree Ashirwad Packers and Movers, we guarantee security through engineering rigor:</p>
      <ul style="padding-left: 20px; color: #475569; font-size: 1.02rem; line-height: 1.8;">
        <li><strong>All-Weather Sealed Containers:</strong> Closed steel container bodies prevent all contact with mountain monsoon rain, dust storms, diesel fumes, and road grit.</li>
        <li><strong>Internal Cargo Lashing Belts:</strong> Heavy furniture pieces and appliances are anchored to the internal frame with industrial ratchet straps, preventing tipping on mountain hairpin bends.</li>
        <li><strong>Experienced Hill Drivers:</strong> Our verified drivers follow strict speed regulations, defensive driving norms, and mandated rest periods.</li>
        <li><strong>Comprehensive Door-to-Door Insurance:</strong> We arrange 100% all-risk transit insurance through leading public-sector underwriters, covering door-to-door transit from origin to final destination.</li>
      </ul>
    </section>

    <section class="rrd-section">
      <h2>Frequently Asked Questions (FAQs)</h2>

      <div class="rrd-faq-item">
        <h4>What are the moving charges in Rajpur Road Dehradun?</h4>
        <p>Local moves in Rajpur Road range from ₹4,500 to ₹7,800 for 1 BHK, ₹7,200 to ₹12,500 for 2 BHK, and ₹12,000 to ₹24,000 for luxury 3-4 BHK independent hillside villas and kothis.</p>
      </div>

      <div class="rrd-faq-item">
        <h4>How do you navigate steep driveways and hillside villas along Rajpur Road?</h4>
        <p>We deploy specialized compact feeder vehicles (Tata 407 / Tata Ace) equipped with mountain brakes, rubber wheel chocks, and hydraulic lifting dollies for hillside inclines.</p>
      </div>

      <div class="rrd-faq-item">
        <h4>Do you provide white-glove packing for delicate glassware and chandeliers?</h4>
        <p>Yes, our team employs multi-layer cushioning, honeycomb cardboard partitions, and custom wooden crating with internal foam suspension for crystal lighting and antiques.</p>
      </div>

      <div class="rrd-faq-item">
        <h4>Can you shift homes from Rajpur Road Dehradun to Delhi NCR or Chandigarh?</h4>
        <p>Yes, we operate daily direct containerized truck routes connecting Dehradun with Delhi NCR, Chandigarh, Jaipur, Lucknow, and pan-India destinations.</p>
      </div>

      <div class="rrd-faq-item">
        <h4>Is transit insurance included with long-distance shifting from Rajpur Road?</h4>
        <p>We provide genuine 100% all-risk door-to-door transit insurance backed by recognized national insurance underwriters for comprehensive financial protection.</p>
      </div>

      <div class="rrd-faq-item">
        <h4>How quickly can I book a move in Rajpur Road Dehradun?</h4>
        <p>Local moves within Dehradun can be scheduled within 24 hours. For interstate relocations, booking 2 to 3 days in advance ensures dedicated vehicle reservation.</p>
      </div>
    </section>

    <section class="rrd-cluster-wrap">
      <h3>Connected Dehradun Localities & Regional Moving Corridors</h3>
      <p style="margin-bottom: 15px; color: #475569;">Explore our verified packing and moving solutions across major localities in Dehradun and Uttarakhand hubs:</p>
      <div class="rrd-cluster-links">
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dehradun" class="rrd-cluster-link">Dehradun Central Authority Hub</a>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-jakhan-dehradun" class="rrd-cluster-link">Packers and Movers Jakhan Dehradun</a>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sahastradhara-road-dehradun" class="rrd-cluster-link">Packers and Movers Sahastradhara Road Dehradun</a>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dharampur-dehradun" class="rrd-cluster-link">Packers and Movers Dharampur Dehradun</a>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-vasant-vihar-dehradun" class="rrd-cluster-link">Packers and Movers Vasant Vihar Dehradun</a>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-haridwar" class="rrd-cluster-link">Packers and Movers in Haridwar</a>
        <a href="<?php echo SITE_BASE_URL; ?>/" class="rrd-cluster-link">Ranchi Headquarters Hub</a>
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="rrd-cluster-link">Live Moving Tariff Calculator</a>
      </div>
    </section>

  </div>
</main>

<?php include_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
