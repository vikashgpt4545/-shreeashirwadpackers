<?php
/**
 * Patna to Ranchi Packers and Movers - Shree Ashirwad Packers and Movers
 * 
 * High-performance, fully SEO-optimized dedicated route landing page for inbound inter-capital relocations,
 * Bihar & Jharkhand State Government administrative staff, banking officers, medical doctors, university professors,
 * and families moving from Patna to Ranchi along the 330-km 4-lane NH-22 / NH-20 highway corridor.
 * 
 * Target Keyword: patna to ranchi packers and movers / packers and movers patna to ranchi
 */

// Define page-specific metadata
$page_title = "Patna to Ranchi Packers & Movers | Shree Ashirwad";
$page_description = "Top Patna to Ranchi packers and movers by Shree Ashirwad. Same-day 7-hr transit via NH-20, Govt & Banking transfer bills, 5-layer packing. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/patna-to-ranchi-packers-and-movers";

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
  <meta name="keywords" content="patna to ranchi packers and movers, packers and movers patna to ranchi, household shifting patna to ranchi, patna to ranchi luggage parcel, patna to ranchi car carrier, patna to ranchi bike transport, patna to ranchi moving charges, bihar to jharkhand movers, boring road to ranchi packers, kankarbagh to ranchi packers">
  <link rel="canonical" href="<?php echo $canonical_url; ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
  <link rel="shortcut icon" href="<?php echo SITE_BASE_URL; ?>/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">

  <!-- Typography & CSS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta property="og:url" content="<?php echo $canonical_url; ?>">
  <meta property="og:type" content="article">
  <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg">
  <meta property="og:image:alt" content="Patna to Ranchi Packers and Movers - Shree Ashirwad Express Linehaul Fleet">
  <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
  <meta property="og:locale" content="en_IN">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg">

  <!-- Geo Meta Tags for Origin: Patna, Destination: Ranchi -->
  <meta name="geo.region" content="IN-BR">
  <meta name="geo.placename" content="Patna">
  <meta name="geo.position" content="25.5941;85.1376">
  <meta name="ICBM" content="25.5941, 85.1376">

  <!-- JSON-LD Structured Data: MovingCompany -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "MovingCompany",
    "name": "Shree Ashirwad Packers and Movers",
    "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
    "telephone": "+91-8409531615",
    "email": "support@shreeashirwadpackers.com",
    "url": "<?php echo $canonical_url; ?>",
    "priceRange": "₹2,500 - ₹48,000",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Harmu Housing Colony, Near Anandpuri Chowk",
      "addressLocality": "Ranchi",
      "addressRegion": "Jharkhand",
      "postalCode": "834002",
      "addressCountry": "IN"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 23.3441,
      "longitude": 85.3096
    },
    "openingHoursSpecification": {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
      ],
      "opens": "07:00",
      "closes": "22:00"
    },
    "areaServed": [
      {
        "@type": "City",
        "name": "Patna"
      },
      {
        "@type": "City",
        "name": "Ranchi"
      }
    ],
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Patna to Ranchi Inbound Inter-Capital Relocation Services",
      "itemListElement": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Household Relocation Patna to Ranchi",
            "description": "Full-service household packing and same-day express linehaul container transport from Patna to Ranchi with guaranteed 7-hour delivery."
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Government & Banking Officer Transfer Shifting",
            "description": "Official relocation package for Bihar & Jharkhand Secretariat, SBI, RBI, High Court, and PSU personnel with 100% reimbursable documentation."
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Two-Wheeler & Car Carrier Transport to Ranchi",
            "description": "Enclosed vehicle carrier and motorcycle parcel service from Patna to Ranchi under comprehensive all-risk transit insurance."
          }
        }
      ]
    }
  }
  </script>

  <!-- JSON-LD Structured Data: Service -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "Inbound Interstate Relocation & Packers and Movers",
    "provider": {
      "@type": "MovingCompany",
      "name": "Shree Ashirwad Packers and Movers"
    },
    "areaServed": {
      "@type": "City",
      "name": "Ranchi",
      "containedInPlace": {
        "@type": "State",
        "name": "Jharkhand"
      }
    },
    "description": "Professional door-to-door relocation services from Patna to Ranchi featuring guaranteed 7-hour express linehaul transit, 5-layer defensive packaging, Government and Banking reimbursement documentation, and dedicated GPS-tracked closed container trucks."
  }
  </script>

  <!-- JSON-LD Structured Data: BreadcrumbList -->
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
        "name": "Packers and Movers in Ranchi",
        "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Patna to Ranchi",
        "item": "<?php echo $canonical_url; ?>"
      }
    ]
  }
  </script>

  <!-- JSON-LD Structured Data: FAQPage -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "How much does household shifting cost from Patna to Ranchi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Household shifting charges from Patna to Ranchi typically range from ₹9,500 to ₹16,500 for a 1 BHK flat, ₹15,000 to ₹24,000 for a 2 BHK apartment, and ₹22,000 to ₹34,000 for a 3 BHK residence. For larger 4 BHK houses or executive bungalows, quotes range from ₹30,000 to ₹46,000. Transparent pricing depends on inventory volume, service elevator availability in Patna apartments, packing tier, and optional car or bike carrier booking."
        }
      },
      {
        "@type": "Question",
        "name": "How long does a moving truck take from Patna to Ranchi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "The highway distance between Patna and Ranchi is approximately 320 to 340 km via NH-22 / NH-31 (via Bakhtiyarpur or Patna-Gaya-Dobhi) and the 4-lane NH-20 through Koderma, Hazaribagh, Ramgarh, and Chutupalu Ghaat. Our dedicated closed-container trucks complete the trip in 6.5 to 8 hours. Morning 7:00 AM dispatch from Patna guarantees same-day delivery and complete room setup in Ranchi by afternoon."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide official transfer claim bills for Bihar & Jharkhand Government and Banking employees?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, Shree Ashirwad Packers and Movers is an established specialist in inter-state government and public sector transfer documentation. We provide 100% reimbursable documentation packets for personnel of Bihar Secretariat, Jharkhand Secretariat (Project Bhawan), Patna High Court, Jharkhand High Court, State Bank of India, Punjab National Bank, and Central PSUs. Our billing includes GST invoices (SAC 9965/9967), IBA-approved bilty consignment notes, itemized inventory sheets, money receipts, and transit insurance policies."
        }
      },
      {
        "@type": "Question",
        "name": "How do you coordinate moves from high-rise apartments in Bailey Road and Danapur?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Our Patna operations team coordinates directly with society Resident Welfare Associations (RWAs) across Bailey Road, Ashiana Nagar, Gola Road, and Danapur Cantonment. We handle move-out permissions, schedule service elevator time slots, lay protective rubber floor runners across lobbies, and deploy small feeder shuttle vans if basement height restrictions prevent large container truck entry."
        }
      },
      {
        "@type": "Question",
        "name": "Can you navigate congested streets in Kankarbagh or old Patna areas?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. For high-density residential streets in Kankarbagh, Rajendra Nagar, Boring Canal Road, or Fraser Road where large 19-foot container trucks face parking constraints, we deploy compact feeder shuttle vehicles (Tata Ace or Mahindra Bolero). Our crew packs and ferries goods from your doorstep directly to our waiting linehaul container parked on the arterial main road without multi-depot transshipment."
        }
      },
      {
        "@type": "Question",
        "name": "Can I transport my motorcycle or car alongside household goods from Patna to Ranchi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we operate dedicated two-wheeler parcel services and enclosed hydraulic car carriers between Patna and Ranchi. Motorbikes receive complete defensive packaging with fork protectors, bubble wrap, mirror detachment, and floor ratchet lashings. Passenger cars are moved in enclosed hydraulic car carriers with wheel chocks under comprehensive all-risk transit insurance."
        }
      }
    ]
  }
  </script>

  <!-- Scoped CSS for Patna to Ranchi Corridor Page (p2r- prefix) -->
  <style>
    :root {
      --p2r-primary: #065f46;
      --p2r-primary-dark: #064e3b;
      --p2r-primary-light: #059669;
      --p2r-primary-tint: #d1fae5;
      --p2r-accent: #d97706;
      --p2r-accent-hover: #b45309;
      --p2r-secondary: #1e1b4b;
      --p2r-slate: #334155;
      --p2r-muted: #64748b;
      --p2r-border: #a7f3d0;
      --p2r-card-bg: #ffffff;
      --p2r-radius: 12px;
      --p2r-shadow-sm: 0 2px 6px rgba(6, 95, 70, 0.05);
      --p2r-shadow-md: 0 8px 24px rgba(6, 95, 70, 0.08);
      --p2r-shadow-lg: 0 16px 36px rgba(6, 95, 70, 0.12);
    }

    .p2r-page-wrapper {
      font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      color: var(--p2r-slate);
      background-color: #f8fafc;
      line-height: 1.7;
    }

    /* Hero Section */
    .p2r-hero-section {
      background: linear-gradient(135deg, #064e3b 0%, #065f46 50%, #1e1b4b 100%);
      color: #ffffff;
      padding: 65px 20px 55px;
      position: relative;
      overflow: hidden;
    }
    .p2r-hero-section::after {
      content: "";
      position: absolute;
      top: -30%;
      right: -15%;
      width: 600px;
      height: 600px;
      background: radial-gradient(circle, rgba(217, 119, 6, 0.2) 0%, rgba(255, 255, 255, 0) 70%);
      pointer-events: none;
    }
    .p2r-hero-container {
      max-width: 1200px;
      margin: 0 auto;
      position: relative;
      z-index: 2;
    }
    .p2r-hero-tagline {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(255, 255, 255, 0.12);
      border: 1px solid rgba(255, 255, 255, 0.25);
      padding: 6px 16px;
      border-radius: 30px;
      font-size: 0.85rem;
      font-weight: 600;
      letter-spacing: 0.5px;
      text-transform: uppercase;
      margin-bottom: 20px;
      color: #fde047;
    }
    .p2r-hero-title {
      font-family: 'Outfit', sans-serif;
      font-size: 2.85rem;
      line-height: 1.2;
      font-weight: 800;
      color: #ffffff;
      margin-bottom: 20px;
      letter-spacing: -0.5px;
    }
    .p2r-hero-title span {
      color: #fbbf24;
      background: linear-gradient(120deg, #fef08a, #f59e0b);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .p2r-hero-desc {
      font-size: 1.15rem;
      line-height: 1.7;
      color: #d1fae5;
      max-width: 900px;
      margin-bottom: 30px;
    }

    /* Route Feature Badges */
    .p2r-pills-row {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-bottom: 35px;
    }
    .p2r-pill {
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
      padding: 8px 18px;
      border-radius: 24px;
      font-size: 0.9rem;
      font-weight: 600;
      color: #ffffff;
      display: flex;
      align-items: center;
      gap: 8px;
      backdrop-filter: blur(6px);
    }
    .p2r-pill-icon {
      color: #fde047;
    }

    /* Hero CTA Bar */
    .p2r-hero-cta {
      display: flex;
      flex-wrap: wrap;
      gap: 16px;
      align-items: center;
    }
    .p2r-btn-primary {
      background: linear-gradient(135deg, #d97706 0%, #b45309 100%);
      color: #ffffff;
      font-weight: 700;
      padding: 14px 30px;
      border-radius: 8px;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      box-shadow: 0 4px 14px rgba(217, 119, 6, 0.35);
      transition: all 0.25s ease;
    }
    .p2r-btn-primary:hover {
      background: linear-gradient(135deg, #b45309 0%, #92400e 100%);
      transform: translateY(-2px);
      box-shadow: 0 6px 18px rgba(217, 119, 6, 0.45);
      color: #ffffff;
    }
    .p2r-btn-secondary {
      background: rgba(255, 255, 255, 0.12);
      border: 1px solid rgba(255, 255, 255, 0.3);
      color: #ffffff;
      font-weight: 600;
      padding: 14px 26px;
      border-radius: 8px;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      transition: all 0.25s ease;
    }
    .p2r-btn-secondary:hover {
      background: rgba(255, 255, 255, 0.22);
      color: #ffffff;
    }

    /* Container Standard */
    .p2r-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }
    .p2r-section {
      padding: 60px 0;
    }
    .p2r-section-alt {
      background-color: #ffffff;
      border-top: 1px solid #f1f5f9;
      border-bottom: 1px solid #f1f5f9;
    }

    .p2r-section-header {
      text-align: center;
      max-width: 820px;
      margin: 0 auto 45px;
    }
    .p2r-badge {
      display: inline-block;
      background: var(--p2r-primary-tint);
      color: var(--p2r-primary);
      padding: 4px 14px;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      margin-bottom: 12px;
    }
    .p2r-section-title {
      font-family: 'Outfit', sans-serif;
      font-size: 2.25rem;
      font-weight: 800;
      color: var(--p2r-secondary);
      line-height: 1.25;
      margin-bottom: 16px;
    }
    .p2r-section-subtitle {
      font-size: 1.05rem;
      color: var(--p2r-muted);
      line-height: 1.7;
    }

    /* Key Corridor Facts Grid */
    .p2r-stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
      gap: 20px;
      margin-top: -30px;
      position: relative;
      z-index: 10;
      margin-bottom: 50px;
    }
    .p2r-stat-card {
      background: #ffffff;
      border-radius: var(--p2r-radius);
      padding: 24px;
      box-shadow: var(--p2r-shadow-md);
      border: 1px solid #a7f3d0;
      text-align: center;
      transition: transform 0.25s ease;
    }
    .p2r-stat-card:hover {
      transform: translateY(-4px);
    }
    .p2r-stat-number {
      font-family: 'Outfit', sans-serif;
      font-size: 2.1rem;
      font-weight: 800;
      color: var(--p2r-primary);
      margin-bottom: 6px;
    }
    .p2r-stat-label {
      font-size: 0.95rem;
      font-weight: 700;
      color: var(--p2r-secondary);
      margin-bottom: 4px;
    }
    .p2r-stat-subtext {
      font-size: 0.82rem;
      color: var(--p2r-muted);
    }

    /* Content Cards & Layouts */
    .p2r-content-grid-2col {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 36px;
      align-items: center;
      margin-bottom: 40px;
    }
    .p2r-image-wrapper {
      position: relative;
      border-radius: var(--p2r-radius);
      overflow: hidden;
      box-shadow: var(--p2r-shadow-md);
      border: 1px solid #e2e8f0;
    }
    .p2r-image-wrapper img {
      width: 100%;
      height: 360px;
      object-fit: cover;
      display: block;
      transition: transform 0.4s ease;
    }
    .p2r-image-wrapper:hover img {
      transform: scale(1.03);
    }
    .p2r-image-caption {
      background: rgba(15, 23, 42, 0.88);
      color: #ffffff;
      font-size: 0.85rem;
      padding: 10px 16px;
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      backdrop-filter: blur(4px);
    }

    .p2r-text-block h3 {
      font-family: 'Outfit', sans-serif;
      font-size: 1.65rem;
      font-weight: 700;
      color: var(--p2r-secondary);
      margin-bottom: 16px;
      line-height: 1.3;
    }
    .p2r-text-block p {
      margin-bottom: 16px;
      color: var(--p2r-slate);
      font-size: 1.02rem;
    }
    .p2r-check-list {
      list-style: none;
      padding: 0;
      margin: 20px 0;
    }
    .p2r-check-list li {
      position: relative;
      padding-left: 28px;
      margin-bottom: 12px;
      font-size: 0.98rem;
      color: var(--p2r-slate);
    }
    .p2r-check-list li::before {
      content: "✔";
      position: absolute;
      left: 0;
      top: 0;
      color: var(--p2r-primary-light);
      font-weight: 800;
      font-size: 1.1rem;
    }

    /* Pricing Table */
    .p2r-pricing-table-wrapper {
      background: #ffffff;
      border-radius: var(--p2r-radius);
      box-shadow: var(--p2r-shadow-md);
      overflow-x: auto;
      border: 1px solid #e2e8f0;
      margin-bottom: 30px;
    }
    .p2r-pricing-table {
      width: 100%;
      border-collapse: collapse;
      min-width: 680px;
      text-align: left;
    }
    .p2r-pricing-table th {
      background: var(--p2r-secondary);
      color: #ffffff;
      padding: 16px 20px;
      font-family: 'Outfit', sans-serif;
      font-size: 0.95rem;
      font-weight: 700;
      letter-spacing: 0.3px;
    }
    .p2r-pricing-table td {
      padding: 16px 20px;
      border-bottom: 1px solid #f1f5f9;
      font-size: 0.95rem;
      color: var(--p2r-slate);
    }
    .p2r-pricing-table tr:hover td {
      background-color: #f0fdf4;
    }
    .p2r-price-tag {
      font-weight: 700;
      color: var(--p2r-primary);
      font-size: 1.05rem;
    }

    /* Grid Cards */
    .p2r-card-grid-3 {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 24px;
      margin-bottom: 35px;
    }
    .p2r-feature-card {
      background: #ffffff;
      border-radius: var(--p2r-radius);
      padding: 28px;
      box-shadow: var(--p2r-shadow-sm);
      border: 1px solid #a7f3d0;
      transition: all 0.3s ease;
    }
    .p2r-feature-card:hover {
      box-shadow: var(--p2r-shadow-lg);
      transform: translateY(-4px);
      border-color: var(--p2r-primary-light);
    }
    .p2r-card-icon {
      width: 52px;
      height: 52px;
      background: var(--p2r-primary-tint);
      color: var(--p2r-primary);
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      margin-bottom: 20px;
    }
    .p2r-card-title {
      font-family: 'Outfit', sans-serif;
      font-size: 1.3rem;
      font-weight: 700;
      color: var(--p2r-secondary);
      margin-bottom: 12px;
    }
    .p2r-card-text {
      color: var(--p2r-muted);
      font-size: 0.95rem;
      line-height: 1.65;
    }

    /* Process Flow */
    .p2r-process-timeline {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
      gap: 20px;
      margin-top: 30px;
    }
    .p2r-process-step {
      background: #ffffff;
      border-radius: var(--p2r-radius);
      padding: 24px 20px;
      box-shadow: var(--p2r-shadow-sm);
      border: 1px solid #e2e8f0;
      position: relative;
    }
    .p2r-step-num {
      width: 36px;
      height: 36px;
      background: var(--p2r-primary);
      color: #ffffff;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 800;
      font-size: 0.95rem;
      margin-bottom: 14px;
    }
    .p2r-step-title {
      font-family: 'Outfit', sans-serif;
      font-size: 1.15rem;
      font-weight: 700;
      color: var(--p2r-secondary);
      margin-bottom: 8px;
    }
    .p2r-step-desc {
      font-size: 0.88rem;
      color: var(--p2r-muted);
      line-height: 1.6;
    }

    /* Locality Matrix */
    .p2r-matrix-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 28px;
    }
    .p2r-matrix-box {
      background: #ffffff;
      border-radius: var(--p2r-radius);
      padding: 28px;
      box-shadow: var(--p2r-shadow-sm);
      border: 1px solid #e2e8f0;
    }
    .p2r-matrix-header {
      font-family: 'Outfit', sans-serif;
      font-size: 1.25rem;
      font-weight: 700;
      color: var(--p2r-primary);
      margin-bottom: 16px;
      padding-bottom: 10px;
      border-bottom: 2px solid var(--p2r-primary-tint);
    }
    .p2r-tags-cloud {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
    }
    .p2r-loc-tag {
      background: #f0fdf4;
      color: #064e3b;
      padding: 6px 14px;
      border-radius: 6px;
      font-size: 0.86rem;
      font-weight: 600;
      border: 1px solid #d1fae5;
    }

    /* FAQ Accordion */
    .p2r-faq-list {
      max-width: 900px;
      margin: 0 auto;
    }
    .p2r-faq-item {
      background: #ffffff;
      border-radius: var(--p2r-radius);
      margin-bottom: 16px;
      border: 1px solid #e2e8f0;
      box-shadow: var(--p2r-shadow-sm);
      overflow: hidden;
    }
    .p2r-faq-question {
      padding: 20px 24px;
      font-family: 'Outfit', sans-serif;
      font-size: 1.12rem;
      font-weight: 700;
      color: var(--p2r-secondary);
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: background-color 0.2s ease;
    }
    .p2r-faq-question:hover {
      background-color: #f0fdf4;
      color: var(--p2r-primary);
    }
    .p2r-faq-answer {
      padding: 0 24px 20px;
      color: var(--p2r-slate);
      font-size: 0.98rem;
      line-height: 1.7;
    }

    /* Navigation Cluster Module */
    .p2r-cluster-box {
      background: #ffffff;
      border-radius: var(--p2r-radius);
      padding: 32px;
      box-shadow: var(--p2r-shadow-sm);
      border: 1px solid #e2e8f0;
      margin-top: 40px;
    }
    .p2r-cluster-title {
      font-family: 'Outfit', sans-serif;
      font-size: 1.35rem;
      font-weight: 700;
      color: var(--p2r-secondary);
      margin-bottom: 18px;
    }
    .p2r-links-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
      gap: 12px;
    }
    .p2r-cluster-link {
      display: block;
      padding: 10px 14px;
      background: #f8fafc;
      border-radius: 8px;
      color: var(--p2r-slate);
      text-decoration: none;
      font-size: 0.9rem;
      font-weight: 600;
      border: 1px solid #e2e8f0;
      transition: all 0.2s ease;
    }
    .p2r-cluster-link:hover {
      background: var(--p2r-primary-tint);
      color: var(--p2r-primary-dark);
      border-color: #a7f3d0;
      transform: translateX(3px);
    }

    /* Bottom Instant CTA */
    .p2r-bottom-cta {
      background: linear-gradient(135deg, #064e3b 0%, #1e1b4b 100%);
      color: #ffffff;
      text-align: center;
      padding: 50px 20px;
      border-radius: var(--p2r-radius);
      margin: 50px auto 0;
      box-shadow: var(--p2r-shadow-lg);
    }
    .p2r-bottom-cta h3 {
      font-family: 'Outfit', sans-serif;
      font-size: 2.1rem;
      font-weight: 800;
      margin-bottom: 14px;
      color: #ffffff;
    }
    .p2r-bottom-cta p {
      font-size: 1.05rem;
      color: #d1fae5;
      max-width: 720px;
      margin: 0 auto 28px;
    }

    @media (max-width: 900px) {
      .p2r-hero-title {
        font-size: 2.2rem;
      }
      .p2r-content-grid-2col {
        grid-template-columns: 1fr;
      }
      .p2r-matrix-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body class="p2r-page-wrapper">

<?php include_once __DIR__ . '/includes/header.php'; ?>

<!-- Hero Section -->
<section class="p2r-hero-section">
  <div class="p2r-hero-container">
    <div class="p2r-hero-tagline">
      <span>Bihar to Jharkhand Inter-Capital Express</span> • Same-Day 7-Hr Corridor
    </div>
    <h1 class="p2r-hero-title">
      Patna to Ranchi <span>Packers and Movers</span>
    </h1>
    <p class="p2r-hero-desc">
      Relocate seamlessly between the two historic sister capitals. Shree Ashirwad Packers and Movers provides top-tier inbound household shifting, corporate employee relocations, and government transfer moving from all neighborhoods of Patna (Kankarbagh, Boring Road, Bailey Road, Danapur, Rajendra Nagar) to Ranchi along the 330-km 4-lane NH-22 / NH-20 highway. Enjoy guaranteed same-day delivery, 100% employer-approved transfer claim bills, museum-grade 5-layer packaging, and sealed GPS-tracked closed container trucks.
    </p>

    <!-- Route Pills -->
    <div class="p2r-pills-row">
      <div class="p2r-pill">
        <span class="p2r-pill-icon">⚡</span> 6.5–8 Hr Express Linehaul
      </div>
      <div class="p2r-pill">
        <span class="p2r-pill-icon">🚚</span> Guaranteed Same-Day Delivery
      </div>
      <div class="p2r-pill">
        <span class="p2r-pill-icon">📑</span> Bihar-Jharkhand Govt & Banking Bills
      </div>
      <div class="p2r-pill">
        <span class="p2r-pill-icon">🛡️</span> Zero-Transshipment Weatherproof Fleet
      </div>
      <div class="p2r-pill">
        <span class="p2r-pill-icon">🏷️</span> Full Transit Marine Insurance
      </div>
    </div>

    <!-- Action Buttons -->
    <div class="p2r-hero-cta">
      <a href="tel:+918409531615" class="p2r-btn-primary">
        📞 Call +91-8409531615
      </a>
      <a href="tel:+919835565233" class="p2r-btn-secondary">
        📱 WhatsApp +91-9835565233
      </a>
    </div>
  </div>
</section>

<!-- Corridor Snapshot Cards -->
<section class="p2r-section" style="padding-top: 0; padding-bottom: 20px;">
  <div class="p2r-container">
    <div class="p2r-stats-grid">
      <div class="p2r-stat-card">
        <div class="p2r-stat-number">330 KM</div>
        <div class="p2r-stat-label">Highway Distance</div>
        <div class="p2r-stat-subtext">Direct via 4-lane NH-22 / NH-20</div>
      </div>
      <div class="p2r-stat-card">
        <div class="p2r-stat-number">6.5 - 8 Hrs</div>
        <div class="p2r-stat-label">Linehaul Transit</div>
        <div class="p2r-stat-subtext">Express same-day loading & setup</div>
      </div>
      <div class="p2r-stat-card">
        <div class="p2r-stat-number">100% Closed</div>
        <div class="p2r-stat-label">Dedicated Containers</div>
        <div class="p2r-stat-subtext">Zero transshipment, single-point seal</div>
      </div>
      <div class="p2r-stat-card">
        <div class="p2r-stat-number">IBA & GST</div>
        <div class="p2r-stat-label">Employer Compliant</div>
        <div class="p2r-stat-subtext">SAC 9965/9967 Secretariat/Bank bills</div>
      </div>
    </div>
  </div>
</section>

<!-- Section 1: Corridor Logistics & Route Overview -->
<section class="p2r-section p2r-section-alt">
  <div class="p2r-container">
    <div class="p2r-section-header">
      <span class="p2r-badge">Corridor Architecture</span>
      <h2 class="p2r-section-title">Engineered Patna to Ranchi Inter-Capital Highway Navigation</h2>
      <p class="p2r-section-subtitle">
        Connecting Bihar’s ancient Gangetic capital with Jharkhand’s scenic plateau capital through modern multi-lane expressways, dedicated container linehauls, and real-time transit telemetry.
      </p>
    </div>

    <div class="k2r-content-grid-2col">
      <div class="p2r-text-block">
        <h3>Direct Highway Transit via NH-22, Rajauli Pass, and 4-Lane NH-20</h3>
        <p>
          Relocating household belongings and office infrastructure from Patna to Ranchi covers approximately 320 to 340 kilometers across one of Eastern India’s most vital inter-state economic corridors. Departing Patna via the New Bypass (NH-31) through Bakhtiyarpur or the newly upgraded Patna-Gaya-Dobhi 4-lane expressway corridor, our dedicated trucks progress toward Nawada and cross the scenic Rajauli forest ghat pass into the Jharkhand border at Koderma (Jhumri Telaiya).
        </p>
        <p>
          From Koderma, our container linehaul travels smoothly along the high-speed 4-lane National Highway 20 through Barhi junction, the Hazaribagh bypass, and Ramgarh Cantonment. Ascending the magnificent 4-lane Chutupalu Ghaat expressway with its engineered curves and concrete safety barriers, our trucks enter Ormanjhi and join the Ranchi Ring Road for swift distribution across all municipal zones. This modernized road alignment minimizes transit vibrations and eliminates urban bottle-necks.
        </p>
        <ul class="p2r-check-list">
          <li><strong>Guaranteed Same-Day Arrival:</strong> Morning 7:00 AM dispatch from Patna reaches your Ranchi doorstep by 2:30 PM for same-day unboxing.</li>
          <li><strong>Zero Multi-Depot Transshipment:</strong> Dedicated closed container locked in Patna and unlocked exclusively at your Ranchi home.</li>
          <li><strong>Interstate Toll & Tax Pre-Clearance:</strong> Seamless border passage with active Fastag and computerized GST E-Way bill compliance.</li>
          <li><strong>Continuous Satellite GPS Tracking:</strong> Real-time journey updates shared with customers from origin departure to final destination.</li>
        </ul>
      </div>

      <div class="p2r-image-wrapper">
        <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Patna to Ranchi Packers and Movers - Closed linehaul container truck on NH-20">
        <div class="p2r-image-caption">
          Heavy-duty weatherproof closed container truck navigating the 330-km Patna-Ranchi NH-20 expressway corridor.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 2: Transparent Price Schedule -->
<section class="p2r-section">
  <div class="p2r-container">
    <div class="p2r-section-header">
      <span class="p2r-badge">Honest Estimates</span>
      <h2 class="p2r-section-title">Transparent Patna to Ranchi Moving Tariff Schedule</h2>
      <p class="p2r-section-subtitle">
        Clear, competitive, and guaranteed written pricing. No hidden fuel surcharges, unexpected toll fees, or post-booking rate inflations.
      </p>
    </div>

    <div class="p2r-pricing-table-wrapper">
      <table class="p2r-pricing-table">
        <thead>
          <tr>
            <th>Shifting Configuration</th>
            <th>Distance / Corridor</th>
            <th>Packaging Tier</th>
            <th>Standard Tariff Range</th>
            <th>Estimated Transit</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>1 BHK Apartment Complete Move</strong></td>
            <td>320 - 340 km (NH-22 / NH-20)</td>
            <td>Standard 3-Layer + Heavy Carton Boxes</td>
            <td><span class="p2r-price-tag">₹9,500 - ₹16,500</span></td>
            <td>Same Day (6.5 - 7.5 Hrs)</td>
          </tr>
          <tr>
            <td><strong>2 BHK Apartment Standard Move</strong></td>
            <td>320 - 340 km (NH-22 / NH-20)</td>
            <td>Premium 4-Layer (Bubble + Foam + Film)</td>
            <td><span class="p2r-price-tag">₹15,000 - ₹24,000</span></td>
            <td>Same Day (7.0 - 8.0 Hrs)</td>
          </tr>
          <tr>
            <td><strong>3 BHK Executive Residence Move</strong></td>
            <td>320 - 340 km (NH-22 / NH-20)</td>
            <td>Executive 5-Layer Defense + Edge Armor</td>
            <td><span class="p2r-price-tag">₹22,000 - ₹34,000</span></td>
            <td>Same Day Express Linehaul</td>
          </tr>
          <tr>
            <td><strong>4 BHK / Bungalow / Duplex Residence</strong></td>
            <td>320 - 340 km (NH-22 / NH-20)</td>
            <td>Heavy-Duty Crating + Full Dismantling</td>
            <td><span class="p2r-price-tag">₹30,000 - ₹46,000</span></td>
            <td>Dedicated Container Fleet</td>
          </tr>
          <tr>
            <td><strong>Two-Wheeler / Motorbike Shifting</strong></td>
            <td>Dedicated Linehaul Parcel</td>
            <td>Bubble Wrap + Fork Covers + Floor Lashings</td>
            <td><span class="p2r-price-tag">₹2,500 - ₹4,800</span></td>
            <td>Same Day / Next Morning</td>
          </tr>
          <tr>
            <td><strong>Car Carrier (Sedan / Compact SUV)</strong></td>
            <td>Enclosed Hydraulic Auto Carrier</td>
            <td>Wheel Chocks + Anti-Scratch Film + Insurance</td>
            <td><span class="p2r-price-tag">₹6,800 - ₹12,500</span></td>
            <td>24 - 36 Hours</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div style="background: #f0fdf4; border-left: 4px solid var(--p2r-primary); padding: 18px 24px; border-radius: 0 8px 8px 0; font-size: 0.95rem; color: #064e3b;">
      <strong>Note on Rate Determinants:</strong> Individual relocation quotes depend on total cubic feet volume, elevator accessibility versus staircase carries in multi-story Patna buildings (Boring Road, Kankarbagh, Bailey Road), optional wooden crating for large LED televisions, glass display units, or sacred marble puja mandirs, and declared goods valuation for comprehensive transit risk insurance.
    </div>
  </div>
</section>

<!-- Section 3: Specialized Government, Banking & Healthcare Relocation Advisory -->
<section class="p2r-section p2r-section-alt">
  <div class="p2r-container">
    <div class="p2r-section-header">
      <span class="p2r-badge">Specialized Demographics</span>
      <h2 class="p2r-section-title">Government, Banking & Academic Relocation Expertise</h2>
      <p class="p2r-section-subtitle">
        Custom-tailored moving procedures designed specifically for state administrative officers, public sector bankers, medical specialists, and university scholars transferring between capitals.
      </p>
    </div>

    <div class="p2r-card-grid-3">
      <!-- Card 1: Secretariat & Govt Claims -->
      <div class="p2r-feature-card">
        <div class="p2r-card-icon">🏛️</div>
        <h3 class="p2r-card-title">Secretariat & Administrative Transfers</h3>
        <p class="p2r-card-text">
          Relocating between Bihar State Secretariat (Old/New Secretariat Patna) and Jharkhand State Secretariat (Project Bhawan, Nepal House, Suchana Bhawan Ranchi) requires strict accounting compliance. We provide 100% employer-reimbursable documentation including GST SAC 9965/9967 invoices, IBA-compliant bilty consignment notes, itemized inventory lists, and stamped money receipts.
        </p>
      </div>

      <!-- Card 2: Banking & Financial Transfers -->
      <div class="p2r-feature-card">
        <div class="p2r-card-icon">🏦</div>
        <h3 class="p2r-card-title">Banking & Financial Sector Moves</h3>
        <p class="p2r-card-text">
          Serving branch managers and zonal officers of State Bank of India (SBI Local Head Office Patna), Punjab National Bank, Bank of India, and RBI moving to Ranchi zonal offices. We adhere strictly to bank transfer budget caps, provide multiple quotation formats if required by your HR guidelines, and guarantee zero paperwork rejections.
        </p>
      </div>

      <!-- Card 3: Judicial & High Court Staff -->
      <div class="p2r-feature-card">
        <div class="p2r-card-icon">⚖️</div>
        <h3 class="p2r-card-title">High Court & Legal Professionals</h3>
        <p class="p2r-card-text">
          Legal professionals, senior advocates, and judicial officers transferring between Patna High Court and Jharkhand High Court at Dhurwa Ranchi rely on our careful handling of confidential legal case files, extensive reference law libraries, and heirloom study desks, packed in moisture-resistant heavy-duty cartons.
        </p>
      </div>

      <!-- Card 4: Medical & Healthcare Faculty -->
      <div class="p2r-feature-card">
        <div class="p2r-card-icon">🏥</div>
        <h3 class="p2r-card-title">Medical Specialists & Doctors</h3>
        <p class="p2r-card-text">
          Medical professors, surgeons, and clinicians rotating between AIIMS Patna, PMCH, IGIMS, and Rajendra Institute of Medical Sciences (RIMS) Ranchi benefit from express same-day relocations that minimize disruption to busy clinical schedules, with full furniture unpacking and room setup upon arrival.
        </p>
      </div>

      <!-- Card 5: High-Rise Bailey Road Moving -->
      <div class="p2r-feature-card">
        <div class="p2r-card-icon">🏢</div>
        <h3 class="p2r-card-title">Bailey Road & Danapur High-Rise Moving</h3>
        <p class="p2r-card-text">
          Modern gated residential societies across Bailey Road, Ashiana Nagar, Gola Road, and Danapur have strict Resident Welfare Association rules. Our trained crews coordinate elevator reservations, lay protective rubber floor runners across lobbies, and ensure clean, noiseless packing that respects apartment community regulations.
        </p>
      </div>

      <!-- Card 6: Congested Lane Shuttle Logistics -->
      <div class="p2r-feature-card">
        <div class="p2r-card-icon">🚐</div>
        <h3 class="p2r-card-title">Kankarbagh & Old Patna Feeder Shuttles</h3>
        <p class="p2r-card-text">
          High-density residential sectors like Kankarbagh Colony, Rajendra Nagar, SK Puri, and Boring Canal Road frequently have narrow approach lanes. We deploy compact feeder shuttle vans (Tata Ace / Bolero Pickup) that ferry items from your doorstep directly to our waiting long-distance container truck without depot delays.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Section 4: 5-Layer Defensive Packaging Shield -->
<section class="p2r-section">
  <div class="p2r-container">
    <div class="p2r-section-header">
      <span class="p2r-badge">Packaging Technology</span>
      <h2 class="p2r-section-title">The 5-Layer Defensive Packaging Shield</h2>
      <p class="p2r-section-subtitle">
        Engineered protective packaging shielding your furniture, home electronics, fragile chinaware, and personal effects against transit shocks and weather variations.
      </p>
    </div>

    <div class="p2r-content-grid-2col">
      <div class="p2r-image-wrapper">
        <img src="<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg" alt="Patna to Ranchi Packers and Movers - Furniture protective wrapping">
        <div class="p2r-image-caption">
          Multi-layer foam wrapping, corner angle guards, and heavy stretch film applied to wooden almirahs and study desks.
        </div>
      </div>

      <div class="p2r-text-block">
        <h3>Industrial-Grade Packing Materials for Absolute Safety</h3>
        <p>
          Highway transit between Patna and Ranchi crosses varied terrain, from flat highway plains to the winding curves of Rajauli pass and Chutupalu Ghaat. We use exclusively virgin industrial-grade packing materials rather than recycled cartons:
        </p>
        <ul class="p2r-check-list">
          <li><strong>Layer 1 - Scratch-Proof Virgin EPE Foam:</strong> Soft protective underlay applied directly to polished wooden surfaces, veneer finishes, and leather upholstery to eliminate surface scratches.</li>
          <li><strong>Layer 2 - Multi-Cell Air Bubble Film:</strong> Heavy shock-dampening air bubble cushioning absorbing mechanical highway vibrations and abrupt vehicle deceleration forces.</li>
          <li><strong>Layer 3 - 5-Ply Corner Angle Armor:</strong> Compressed cardboard V-profile edge protectors safeguarding table corners, wardrobe rims, and display cabinets from edge collisions.</li>
          <li><strong>Layer 4 - Double-Wall Corrugated Cartons:</strong> Heavy-duty 7-ply outer cartons for books, crockery, appliances, and kitchenware, sealed with moisture-resistant PVC tape.</li>
          <li><strong>Layer 5 - Weatherproof Stretch Wrap:</strong> High-tensile clear stretch film binding packed goods hermetically, shielding against monsoon rain, dust, and humidity.</li>
        </ul>
      </div>
    </div>

    <!-- Second Showcase Grid for Crockery & Bikes -->
    <div class="p2r-content-grid-2col" style="margin-top: 50px;">
      <div class="p2r-text-block">
        <h3>Delicate Chinaware Boxing & Appliance Protection</h3>
        <p>
          Fragile dinnerware, bone china tea sets, crystal glassware, and ceramic kitchenware receive individual tissue interleaving and dual air-bubble pouches before being packed into cellular compartmentalized boxes.
        </p>
        <p>
          Heavy household appliances—including double-door refrigerators, front-load washing machines, microwave ovens, and large LED televisions—are encased in custom-padded heavy canvas jackets, with drum locking pins installed to protect delicate internal suspensions during highway motion.
        </p>
        <ul class="p2r-check-list">
          <li><strong>Custom TV Wooden Crating:</strong> Rigid reinforced wooden crating constructed on-site for 55-inch to 85-inch flat-screen televisions with interior foam cushions.</li>
          <li><strong>Washing Machine Drum Locks:</strong> Mechanical transit bolts fitted into washing machine drums to immobilize internal suspension springs during transit.</li>
          <li><strong>Numbered Inventory Barcoding:</strong> Every carton and furniture item is cataloged on a dual-copy manifest for 100% loss-prevention verification upon arrival.</li>
        </ul>
      </div>

      <div class="p2r-image-wrapper">
        <img src="<?php echo SITE_BASE_URL; ?>/images/kitchen-crockery-bubble-packing-ranchi.jpg" alt="Patna to Ranchi Packers and Movers - Kitchen crockery bubble wrapping">
        <div class="p2r-image-caption">
          Individual bubble-wrapping and compartmentalized boxing for delicate chinaware and kitchen ceramics.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 5: The 5-Stage Systematic Relocation Process -->
<section class="p2r-section p2r-section-alt">
  <div class="p2r-container">
    <div class="p2r-section-header">
      <span class="p2r-badge">Execution Blueprint</span>
      <h2 class="p2r-section-title">The 5-Stage Patna to Ranchi Relocation Journey</h2>
      <p class="p2r-section-subtitle">
        From your initial booking consultation in Patna to the final reassembly of furniture in Ranchi, our structured methodology guarantees a smooth same-day moving experience.
      </p>
    </div>

    <div class="p2r-process-timeline">
      <div class="p2r-process-step">
        <div class="p2r-step-num">1</div>
        <h3 class="p2r-step-title">Pre-Move Survey</h3>
        <p class="p2r-step-desc">
          Complimentary physical home inspection in Patna or rapid video inventory audit. We calculate volume, assess elevator accessibility, evaluate street widths, and issue a transparent written quote.
        </p>
      </div>

      <div class="p2r-process-step">
        <div class="p2r-step-num">2</div>
        <h3 class="p2r-step-title">Defensive Packaging</h3>
        <p class="p2r-step-desc">
          Our certified packing team arrives with complete packing supplies. Furniture is disassembled, fragile chinaware is wrapped, electronics are cushioned, and all cartons are numbered and cataloged.
        </p>
      </div>

      <div class="p2r-process-step">
        <div class="p2r-step-num">3</div>
        <h3 class="p2r-step-title">Direct Sealed Linehaul</h3>
        <p class="p2r-step-desc">
          Your shipment is loaded into our dedicated closed container truck, secured with internal nylon wall lashings, locked, and sealed with a numbered tamper-evident seal before departing via NH-22.
        </p>
      </div>

      <div class="p2r-process-step">
        <div class="p2r-step-num">4</div>
        <h3 class="p2r-step-title">Express Highway Transit</h3>
        <p class="p2r-step-desc">
          The container truck navigates through Nawada, Rajauli Pass, Koderma, Barhi, and the 4-lane Chutupalu Ghaat under continuous GPS tracking, completing the 330-km route in 7 hours.
        </p>
      </div>

      <div class="p2r-process-step">
        <div class="p2r-step-num">5</div>
        <h3 class="p2r-step-title">Same-Day Setup in Ranchi</h3>
        <p class="p2r-step-desc">
          Upon arrival at your Ranchi residence by afternoon, our crew unloads, unboxes, reassembles beds and dining tables, places furniture in designated rooms, and hauls away all packaging debris.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Section 6: Dual-City Locality Matrix -->
<section class="p2r-section">
  <div class="p2r-container">
    <div class="p2r-section-header">
      <span class="p2r-badge">Coverage Map</span>
      <h2 class="p2r-section-title">Comprehensive Pickup in Patna & Doorstep Delivery in Ranchi</h2>
      <p class="p2r-section-subtitle">
        We serve every neighborhood, gated township, and municipal ward across the Patna Urban Agglomeration, connecting directly with all residential sectors in Ranchi.
      </p>
    </div>

    <div class="p2r-matrix-grid">
      <!-- Patna Pickup Localities -->
      <div class="p2r-matrix-box">
        <h3 class="p2r-matrix-header">📍 Patna Metropolitan Pickup Zones</h3>
        <div class="p2r-tags-cloud">
          <span class="p2r-loc-tag">Kankarbagh Colony</span>
          <span class="p2r-loc-tag">Boring Road & Boring Canal Road</span>
          <span class="p2r-loc-tag">Bailey Road & Ashiana Nagar</span>
          <span class="p2r-loc-tag">Rajendra Nagar & Kadamkuan</span>
          <span class="p2r-loc-tag">Danapur Cantonment & Khagaul</span>
          <span class="p2r-loc-tag">Patliputra Colony & Digha</span>
          <span class="p2r-loc-tag">Fraser Road & Exhibition Road</span>
          <span class="p2r-loc-tag">Anisabad & Phulwari Sharif</span>
          <span class="p2r-loc-tag">Gola Road & Jagdeo Path</span>
          <span class="p2r-loc-tag">SK Puri & Anandpuri</span>
          <span class="p2r-loc-tag">Rukunpura & Saguna More</span>
          <span class="p2r-loc-tag">Bihta Industrial Hub & IIT Campus</span>
          <span class="p2r-loc-tag">Kumhrar & Agam Kuan</span>
          <span class="p2r-loc-tag">Raja Bazar & Ashiana More</span>
        </div>
      </div>

      <!-- Ranchi Drop Localities -->
      <div class="p2r-matrix-box">
        <h3 class="p2r-matrix-header">📍 Ranchi Residential Delivery Zones</h3>
        <div class="p2r-tags-cloud">
          <span class="p2r-loc-tag">Harmu Housing Colony</span>
          <span class="p2r-loc-tag">Morabadi & Tagore Hill</span>
          <span class="p2r-loc-tag">Bariatu & Booty Road</span>
          <span class="p2r-loc-tag">Lalpur & Circular Road</span>
          <span class="p2r-loc-tag">Doranda & AG Colony</span>
          <span class="p2r-loc-tag">Ashok Nagar & Kadru</span>
          <span class="p2r-loc-tag">Namkum & Tata Road</span>
          <span class="p2r-loc-tag">Kanke Road & CMPDI</span>
          <span class="p2r-loc-tag">Kathal More & Argora</span>
          <span class="p2r-loc-tag">Birsa Chowk & Hatia</span>
          <span class="p2r-loc-tag">Dhurwa & HEC Sector</span>
          <span class="p2r-loc-tag">CCL Darbhanga House</span>
          <span class="p2r-loc-tag">Dipatoli Army Cantonment</span>
          <span class="p2r-loc-tag">Ratu Road & Pandra</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 7: Two-Wheeler & Car Carrier Transport -->
<section class="p2r-section p2r-section-alt">
  <div class="p2r-container">
    <div class="p2r-section-header">
      <span class="p2r-badge">Vehicle Logistics</span>
      <h2 class="p2r-section-title">Dedicated Two-Wheeler Parcel & Enclosed Car Carrier Service</h2>
      <p class="p2r-section-subtitle">
        Relocate your commuter scooter, touring motorcycle, or family car with zero driving fatigue and zero accidental highway damage.
      </p>
    </div>

    <div class="p2r-content-grid-2col">
      <div class="p2r-image-wrapper">
        <img src="<?php echo SITE_BASE_URL; ?>/images/scooter-bike-safe-transit-packing-jharkhand.jpg" alt="Patna to Ranchi Packers and Movers - Motorcycle and bike parcel packing">
        <div class="p2r-image-caption">
          Custom multi-layer motorcycle packing with fork sleeves, padded foam, and heavy floor ratchet tie-downs.
        </div>
      </div>

      <div class="p2r-text-block">
        <h3>Safe, Scratch-Free Vehicle Relocation from Patna to Ranchi</h3>
        <p>
          Riding a two-wheeler or self-driving a car over 330 kilometers through heavy truck traffic on highway sections involves unnecessary wear-and-tear and road hazards. Shree Ashirwad Packers and Movers provides professional automobile shipping ensuring showroom-condition delivery in Ranchi.
        </p>
        <p>
          Motorcycles receive comprehensive defensive packing: fuel tanks are drained to safety thresholds, mirrors are detached and wrapped, suspension forks are encased in corrugated sleeves, and wheels are secured to container floor tracks with industrial nylon ratchet tie-downs.
        </p>
        <ul class="p2r-check-list">
          <li><strong>Enclosed Hydraulic Car Carriers:</strong> Multi-car covered carriers protecting passenger cars from flying stone chips, road debris, and weather.</li>
          <li><strong>Digital Vehicle Inspection Report:</strong> Photo-documented condition report recording odometer reading and minor prior blemishes before loading.</li>
          <li><strong>Comprehensive Marine Transit Insurance:</strong> All-risk coverage protecting against road accidents, collisions, and transit damage.</li>
          <li><strong>Doorstep Delivery:</strong> Convenient pickup from your Patna home and direct delivery to your Ranchi residence driveway.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Section 8: Frequently Asked Questions (FAQ) -->
<section class="p2r-section">
  <div class="p2r-container">
    <div class="p2r-section-header">
      <span class="p2r-badge">Frequently Asked Questions</span>
      <h2 class="p2r-section-title">Common Questions About Moving from Patna to Ranchi</h2>
      <p class="p2r-section-subtitle">
        Clear, factual answers regarding pricing, same-day highway transit, Government and Banking claim paperwork, and vehicle carrier booking.
      </p>
    </div>

    <div class="p2r-faq-list">
      <div class="p2r-faq-item">
        <div class="p2r-faq-question">
          <span>How much does household shifting cost from Patna to Ranchi?</span>
          <span>➕</span>
        </div>
        <div class="p2r-faq-answer">
          Household shifting charges from Patna to Ranchi typically range from ₹9,500 to ₹16,500 for a 1 BHK flat, ₹15,000 to ₹24,000 for a 2 BHK apartment, and ₹22,000 to ₹34,000 for a 3 BHK residence. For larger 4 BHK houses or executive bungalows, quotes range from ₹30,000 to ₹46,000. Transparent pricing depends on inventory volume, service elevator availability in Patna apartments, packing tier, and optional car or bike carrier booking.
        </div>
      </div>

      <div class="p2r-faq-item">
        <div class="p2r-faq-question">
          <span>How long does a moving truck take from Patna to Ranchi?</span>
          <span>➕</span>
        </div>
        <div class="p2r-faq-answer">
          The highway distance between Patna and Ranchi is approximately 320 to 340 km via NH-22 / NH-31 (via Bakhtiyarpur or Patna-Gaya-Dobhi) and the 4-lane NH-20 through Koderma, Hazaribagh, Ramgarh, and Chutupalu Ghaat. Our dedicated closed-container trucks complete the trip in 6.5 to 8 hours. Morning 7:00 AM dispatch from Patna guarantees same-day delivery and complete room setup in Ranchi by afternoon.
        </div>
      </div>

      <div class="p2r-faq-item">
        <div class="p2r-faq-question">
          <span>Do you provide official transfer claim bills for Bihar & Jharkhand Government and Banking employees?</span>
          <span>➕</span>
        </div>
        <div class="p2r-faq-answer">
          Yes, Shree Ashirwad Packers and Movers is an established specialist in inter-state government and public sector transfer documentation. We provide 100% reimbursable documentation packets for personnel of Bihar Secretariat, Jharkhand Secretariat (Project Bhawan), Patna High Court, Jharkhand High Court, State Bank of India, Punjab National Bank, and Central PSUs. Our billing includes GST invoices (SAC 9965/9967), IBA-approved bilty consignment notes, itemized inventory sheets, money receipts, and transit insurance policies.
        </div>
      </div>

      <div class="p2r-faq-item">
        <div class="p2r-faq-question">
          <span>How do you coordinate moves from high-rise apartments in Bailey Road and Danapur?</span>
          <span>➕</span>
        </div>
        <div class="p2r-faq-answer">
          Our Patna operations team coordinates directly with society Resident Welfare Associations (RWAs) across Bailey Road, Ashiana Nagar, Gola Road, and Danapur Cantonment. We handle move-out permissions, schedule service elevator time slots, lay protective rubber floor runners across lobbies, and deploy small feeder shuttle vans if basement height restrictions prevent large container truck entry.
        </div>
      </div>

      <div class="p2r-faq-item">
        <div class="p2r-faq-question">
          <span>Can you navigate congested streets in Kankarbagh or old Patna areas?</span>
          <span>➕</span>
        </div>
        <div class="p2r-faq-answer">
          Yes. For high-density residential streets in Kankarbagh, Rajendra Nagar, Boring Canal Road, or Fraser Road where large 19-foot container trucks face parking constraints, we deploy compact feeder shuttle vehicles (Tata Ace or Mahindra Bolero). Our crew packs and ferries goods from your doorstep directly to our waiting linehaul container parked on the arterial main road without multi-depot transshipment.
        </div>
      </div>

      <div class="p2r-faq-item">
        <div class="p2r-faq-question">
          <span>Can I transport my motorcycle or car alongside household goods from Patna to Ranchi?</span>
          <span>➕</span>
        </div>
        <div class="p2r-faq-answer">
          Yes, we operate dedicated two-wheeler parcel services and enclosed hydraulic car carriers between Patna and Ranchi. Motorbikes receive complete defensive packaging with fork protectors, bubble wrap, mirror detachment, and floor ratchet lashings. Passenger cars are moved in enclosed hydraulic car carriers with wheel chocks under comprehensive all-risk transit insurance.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 9: Cluster Navigation Module -->
<section class="p2r-section p2r-section-alt" style="padding-top: 30px;">
  <div class="p2r-container">
    <div class="p2r-cluster-box">
      <h3 class="p2r-cluster-title">Explore Related Interstate & Regional Moving Corridors</h3>
      <div class="p2r-links-grid">
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi" class="p2r-cluster-link">
          📍 Ranchi Movers Headquarters
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/kolkata-to-ranchi-packers-and-movers" class="p2r-cluster-link">
          🚚 Kolkata to Ranchi Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/delhi-to-ranchi-packers-and-movers" class="p2r-cluster-link">
          🚚 Delhi to Ranchi Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/bangalore-to-ranchi-packers-and-movers" class="p2r-cluster-link">
          🚚 Bangalore to Ranchi Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-gaya-packers-and-movers" class="p2r-cluster-link">
          🚚 Ranchi to Gaya Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-muzaffarpur-packers-and-movers" class="p2r-cluster-link">
          🚚 Ranchi to Muzaffarpur Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-bhagalpur-packers-and-movers" class="p2r-cluster-link">
          🚚 Ranchi to Bhagalpur Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-darbhanga-packers-and-movers" class="p2r-cluster-link">
          🚚 Ranchi to Darbhanga Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-varanasi-packers-and-movers" class="p2r-cluster-link">
          🚚 Ranchi to Varanasi Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-kanpur-packers-and-movers" class="p2r-cluster-link">
          🚚 Ranchi to Kanpur Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-koderma-packers-and-movers" class="p2r-cluster-link">
          🚚 Ranchi to Koderma Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/pricing" class="p2r-cluster-link">
          💰 Relocation Cost Calculator
        </a>
      </div>
    </div>

    <!-- Final Call to Action -->
    <div class="p2r-bottom-cta">
      <h3>Ready to Move from Patna to Ranchi?</h3>
      <p>
        Get an upfront written quotation, free home survey, and dedicated linehaul truck booking with Shree Ashirwad Packers and Movers. Experience stress-free relocation with guaranteed same-day delivery.
      </p>
      <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:+918409531615" class="p2r-btn-primary" style="background: #ffffff; color: #064e3b;">
          📞 Call +91-8409531615
        </a>
        <a href="tel:+919835565233" class="p2r-btn-secondary" style="border-color: #ffffff; color: #ffffff;">
          📱 WhatsApp +91-9835565233
        </a>
      </div>
    </div>
  </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>

</body>
</html>
