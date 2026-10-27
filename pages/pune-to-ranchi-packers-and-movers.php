<?php
/**
 * Pune to Ranchi Packers and Movers - Shree Ashirwad Packers and Movers
 * 
 * High-performance, fully SEO-optimized dedicated route landing page for inbound interstate relocations,
 * IT & Software professionals (Hinjawadi, Magarpatta, Kharadi), automotive engineers (Tata Motors Pimpri / Bharat Forge),
 * defense personnel (Southern Command / NDA Pune), and returning families moving from Pune to Ranchi (Jharkhand)
 * along the 1,500-km NH-53 / NH-43 long-haul interstate highway corridor.
 * 
 * Target Keyword: pune to ranchi packers and movers / packers and movers pune to ranchi
 */

// Define page-specific metadata
$page_title = "Pune to Ranchi Packers & Movers | Shree Ashirwad";
$page_description = "Top Pune to Ranchi packers and movers by Shree Ashirwad. Dedicated container transit, IT workstation packing, car/bike carrier, GST bills. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/pune-to-ranchi-packers-and-movers";

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
  <meta name="keywords" content="pune to ranchi packers and movers, packers and movers pune to ranchi, household shifting pune to ranchi, pune to ranchi luggage parcel, pune to ranchi car carrier, pune to ranchi bike transport, pune to ranchi moving charges, hinjawadi to ranchi packers, kharadi to ranchi movers, tata motors pune to ranchi transfer">
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
  <meta property="og:image:alt" content="Pune to Ranchi Packers and Movers - Shree Ashirwad Express Linehaul Fleet">
  <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
  <meta property="og:locale" content="en_IN">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg">

  <!-- Geo Meta Tags for Origin: Pune, Destination: Ranchi -->
  <meta name="geo.region" content="IN-MH">
  <meta name="geo.placename" content="Pune">
  <meta name="geo.position" content="18.5204;73.8567">
  <meta name="ICBM" content="18.5204, 73.8567">

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
    "priceRange": "₹4,500 - ₹68,000",
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
        "name": "Pune"
      },
      {
        "@type": "City",
        "name": "Ranchi"
      }
    ],
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Pune to Ranchi Inbound Interstate Relocation Services",
      "itemListElement": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Household Relocation Pune to Ranchi",
            "description": "Full-service household packing and express dedicated container linehaul transport from Pune to Ranchi with guaranteed 72 to 96-hour delivery."
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "IT Corporate & Defense Personnel Transfer Shifting",
            "description": "Official relocation package for software engineers, automotive executives, and defense officers with 100% audit-compliant transfer documentation."
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Two-Wheeler & Car Carrier Transport to Ranchi",
            "description": "Enclosed hydraulic auto carrier and motorcycle parcel service from Pune to Ranchi under comprehensive all-risk transit insurance."
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
    "description": "Professional door-to-door relocation services from Pune to Ranchi featuring guaranteed 3 to 4-day express linehaul transit, 5-layer defensive packaging, IT corporate and defense reimbursement bills, and dedicated GPS-tracked closed container trucks."
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
        "name": "Pune to Ranchi",
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
        "name": "How much does household shifting cost from Pune to Ranchi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Household shifting charges from Pune to Ranchi typically range from ₹16,000 to ₹26,000 for a 1 BHK apartment, ₹25,000 to ₹38,000 for a 2 BHK apartment, and ₹35,000 to ₹54,000 for a 3 BHK residence. For large 4 BHK duplexes or villas, quotes range from ₹46,000 to ₹68,000. Transparent pricing depends on cubic feet volume, high-rise service elevator availability in Pune gated societies (Hinjawadi, Wakad, Kharadi), IT workstation crating needs, and vehicle carrier inclusions."
        }
      },
      {
        "@type": "Question",
        "name": "What is the expected transit duration for a moving truck from Pune to Ranchi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "The highway distance between Pune and Ranchi is approximately 1,480 to 1,540 km via NH-53 and NH-43 across Maharashtra (Amravati, Nagpur), Chhattisgarh (Raipur, Bilaspur, Ambikapur), and Jharkhand (Gumla). Our dedicated closed-container trucks with dual-driver relay crews complete the journey within 72 to 96 hours (3 to 4 days), guaranteeing doorstep delivery at your Ranchi residence."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide official reimbursement bills for IT corporate and Defense transfers?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, Shree Ashirwad Packers and Movers specializes in IT corporate, engineering, and defense relocation billing. We furnish 100% employer-approved documentation packets for software companies (TCS, Infosys, Wipro, Tech Mahindra, Cognizant), automotive firms (Tata Motors, Bajaj Auto, Bharat Forge), and Armed Forces personnel (Southern Command HQ, NDA Khadakwasla). Our billing includes GST invoices (SAC 9965/9967), IBA-approved bilty consignment notes, itemized inventory sheets, money receipts, and transit insurance policies."
        }
      },
      {
        "@type": "Question",
        "name": "How do you coordinate moves from high-rise gated societies in Hinjawadi, Wakad, and Baner?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Our Pune operations team coordinates directly with society Facility Management and Resident Welfare Associations (RWAs) across Hinjawadi Phase 1-3, Wakad, Baner, Balewadi, and Kharadi. We manage move-out gate passes, schedule freight elevator slots, lay protective floor runners across common corridors, use corner bumpers during bulky furniture handling, and deploy small feeder shuttle vans if basement height restrictions prevent large container entry."
        }
      },
      {
        "@type": "Question",
        "name": "How do you protect delicate IT assets, multi-monitor setups, and home office workstations?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We apply tailored electronics protection for tech professionals. Multi-monitor setups, gaming rigs, CPUs, and ergonomic chairs receive anti-static bubble wrapping, virgin EPE foam padding, reinforced corner guards, and rigid double-wall carton boxing. High-value computer monitors and curved screens are placed in custom-padded wooden crates with vibration-dampening foam inserts."
        }
      },
      {
        "@type": "Question",
        "name": "Can I transport my motorcycle or car from Pune to Ranchi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we operate dedicated two-wheeler parcel services and enclosed hydraulic car carriers between Pune and Ranchi. Motorbikes receive complete defensive packaging with fork protectors, bubble wrap, mirror detachment, and floor ratchet lashings. Passenger cars are transported in enclosed hydraulic car carriers with wheel chocks under comprehensive all-risk transit insurance."
        }
      }
    ]
  }
  </script>

  <!-- Scoped CSS for Pune to Ranchi Corridor Page (pu2r- prefix) -->
  <style>
    :root {
      --pu2r-primary: #c2410c;
      --pu2r-primary-dark: #9a3412;
      --pu2r-primary-light: #ea580c;
      --pu2r-primary-tint: #ffedd5;
      --pu2r-accent: #d97706;
      --pu2r-accent-hover: #b45309;
      --pu2r-secondary: #1e1b4b;
      --pu2r-slate: #334155;
      --pu2r-muted: #64748b;
      --pu2r-border: #fed7aa;
      --pu2r-card-bg: #ffffff;
      --pu2r-radius: 12px;
      --pu2r-shadow-sm: 0 2px 6px rgba(194, 65, 12, 0.05);
      --pu2r-shadow-md: 0 8px 24px rgba(194, 65, 12, 0.08);
      --pu2r-shadow-lg: 0 16px 36px rgba(194, 65, 12, 0.12);
    }

    .pu2r-page-wrapper {
      font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      color: var(--pu2r-slate);
      background-color: #f8fafc;
      line-height: 1.7;
    }

    /* Hero Section */
    .pu2r-hero-section {
      background: linear-gradient(135deg, #9a3412 0%, #c2410c 50%, #1e1b4b 100%);
      color: #ffffff;
      padding: 65px 20px 55px;
      position: relative;
      overflow: hidden;
    }
    .pu2r-hero-section::after {
      content: "";
      position: absolute;
      top: -30%;
      right: -15%;
      width: 600px;
      height: 600px;
      background: radial-gradient(circle, rgba(217, 119, 6, 0.22) 0%, rgba(255, 255, 255, 0) 70%);
      pointer-events: none;
    }
    .pu2r-hero-container {
      max-width: 1200px;
      margin: 0 auto;
      position: relative;
      z-index: 2;
    }
    .pu2r-hero-tagline {
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
    .pu2r-hero-title {
      font-family: 'Outfit', sans-serif;
      font-size: 2.85rem;
      line-height: 1.2;
      font-weight: 800;
      color: #ffffff;
      margin-bottom: 20px;
      letter-spacing: -0.5px;
    }
    .pu2r-hero-title span {
      color: #fbbf24;
      background: linear-gradient(120deg, #fef08a, #f59e0b);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .pu2r-hero-desc {
      font-size: 1.15rem;
      line-height: 1.7;
      color: #fed7aa;
      max-width: 900px;
      margin-bottom: 30px;
    }

    /* Route Feature Badges */
    .pu2r-pills-row {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-bottom: 35px;
    }
    .pu2r-pill {
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
    .pu2r-pill-icon {
      color: #fde047;
    }

    /* Hero CTA Bar */
    .pu2r-hero-cta {
      display: flex;
      flex-wrap: wrap;
      gap: 16px;
      align-items: center;
    }
    .pu2r-btn-primary {
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
    .pu2r-btn-primary:hover {
      background: linear-gradient(135deg, #b45309 0%, #92400e 100%);
      transform: translateY(-2px);
      box-shadow: 0 6px 18px rgba(217, 119, 6, 0.45);
      color: #ffffff;
    }
    .pu2r-btn-secondary {
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
    .pu2r-btn-secondary:hover {
      background: rgba(255, 255, 255, 0.22);
      color: #ffffff;
    }

    /* Container Standard */
    .pu2r-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }
    .pu2r-section {
      padding: 60px 0;
    }
    .pu2r-section-alt {
      background-color: #ffffff;
      border-top: 1px solid #f1f5f9;
      border-bottom: 1px solid #f1f5f9;
    }

    .pu2r-section-header {
      text-align: center;
      max-width: 820px;
      margin: 0 auto 45px;
    }
    .pu2r-badge {
      display: inline-block;
      background: var(--pu2r-primary-tint);
      color: var(--pu2r-primary);
      padding: 4px 14px;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      margin-bottom: 12px;
    }
    .pu2r-section-title {
      font-family: 'Outfit', sans-serif;
      font-size: 2.25rem;
      font-weight: 800;
      color: var(--pu2r-secondary);
      line-height: 1.25;
      margin-bottom: 16px;
    }
    .pu2r-section-subtitle {
      font-size: 1.05rem;
      color: var(--pu2r-muted);
      line-height: 1.7;
    }

    /* Key Corridor Facts Grid */
    .pu2r-stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
      gap: 20px;
      margin-top: -30px;
      position: relative;
      z-index: 10;
      margin-bottom: 50px;
    }
    .pu2r-stat-card {
      background: #ffffff;
      border-radius: var(--pu2r-radius);
      padding: 24px;
      box-shadow: var(--pu2r-shadow-md);
      border: 1px solid #fed7aa;
      text-align: center;
      transition: transform 0.25s ease;
    }
    .pu2r-stat-card:hover {
      transform: translateY(-4px);
    }
    .pu2r-stat-number {
      font-family: 'Outfit', sans-serif;
      font-size: 2.1rem;
      font-weight: 800;
      color: var(--pu2r-primary);
      margin-bottom: 6px;
    }
    .pu2r-stat-label {
      font-size: 0.95rem;
      font-weight: 700;
      color: var(--pu2r-secondary);
      margin-bottom: 4px;
    }
    .pu2r-stat-subtext {
      font-size: 0.82rem;
      color: var(--pu2r-muted);
    }

    /* Content Cards & Layouts */
    .pu2r-content-grid-2col {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 36px;
      align-items: center;
      margin-bottom: 40px;
    }
    .pu2r-image-wrapper {
      position: relative;
      border-radius: var(--pu2r-radius);
      overflow: hidden;
      box-shadow: var(--pu2r-shadow-md);
      border: 1px solid #e2e8f0;
    }
    .pu2r-image-wrapper img {
      width: 100%;
      height: 360px;
      object-fit: cover;
      display: block;
      transition: transform 0.4s ease;
    }
    .pu2r-image-wrapper:hover img {
      transform: scale(1.03);
    }
    .pu2r-image-caption {
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

    .pu2r-text-block h3 {
      font-family: 'Outfit', sans-serif;
      font-size: 1.65rem;
      font-weight: 700;
      color: var(--pu2r-secondary);
      margin-bottom: 16px;
      line-height: 1.3;
    }
    .pu2r-text-block p {
      margin-bottom: 16px;
      color: var(--pu2r-slate);
      font-size: 1.02rem;
    }
    .pu2r-check-list {
      list-style: none;
      padding: 0;
      margin: 20px 0;
    }
    .pu2r-check-list li {
      position: relative;
      padding-left: 28px;
      margin-bottom: 12px;
      font-size: 0.98rem;
      color: var(--pu2r-slate);
    }
    .pu2r-check-list li::before {
      content: "✔";
      position: absolute;
      left: 0;
      top: 0;
      color: var(--pu2r-primary-light);
      font-weight: 800;
      font-size: 1.1rem;
    }

    /* Pricing Table */
    .pu2r-pricing-table-wrapper {
      background: #ffffff;
      border-radius: var(--pu2r-radius);
      box-shadow: var(--pu2r-shadow-md);
      overflow-x: auto;
      border: 1px solid #e2e8f0;
      margin-bottom: 30px;
    }
    .pu2r-pricing-table {
      width: 100%;
      border-collapse: collapse;
      min-width: 680px;
      text-align: left;
    }
    .pu2r-pricing-table th {
      background: var(--pu2r-secondary);
      color: #ffffff;
      padding: 16px 20px;
      font-family: 'Outfit', sans-serif;
      font-size: 0.95rem;
      font-weight: 700;
      letter-spacing: 0.3px;
    }
    .pu2r-pricing-table td {
      padding: 16px 20px;
      border-bottom: 1px solid #f1f5f9;
      font-size: 0.95rem;
      color: var(--pu2r-slate);
    }
    .pu2r-pricing-table tr:hover td {
      background-color: #fff7ed;
    }
    .pu2r-price-tag {
      font-weight: 700;
      color: var(--pu2r-primary);
      font-size: 1.05rem;
    }

    /* Grid Cards */
    .pu2r-card-grid-3 {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 24px;
      margin-bottom: 35px;
    }
    .pu2r-feature-card {
      background: #ffffff;
      border-radius: var(--pu2r-radius);
      padding: 28px;
      box-shadow: var(--pu2r-shadow-sm);
      border: 1px solid #fed7aa;
      transition: all 0.3s ease;
    }
    .pu2r-feature-card:hover {
      box-shadow: var(--pu2r-shadow-lg);
      transform: translateY(-4px);
      border-color: var(--pu2r-primary-light);
    }
    .pu2r-card-icon {
      width: 52px;
      height: 52px;
      background: var(--pu2r-primary-tint);
      color: var(--pu2r-primary);
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      margin-bottom: 20px;
    }
    .pu2r-card-title {
      font-family: 'Outfit', sans-serif;
      font-size: 1.3rem;
      font-weight: 700;
      color: var(--pu2r-secondary);
      margin-bottom: 12px;
    }
    .pu2r-card-text {
      color: var(--pu2r-muted);
      font-size: 0.95rem;
      line-height: 1.65;
    }

    /* Process Flow */
    .pu2r-process-timeline {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
      gap: 20px;
      margin-top: 30px;
    }
    .pu2r-process-step {
      background: #ffffff;
      border-radius: var(--pu2r-radius);
      padding: 24px 20px;
      box-shadow: var(--pu2r-shadow-sm);
      border: 1px solid #e2e8f0;
      position: relative;
    }
    .pu2r-step-num {
      width: 36px;
      height: 36px;
      background: var(--pu2r-primary);
      color: #ffffff;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 800;
      font-size: 0.95rem;
      margin-bottom: 14px;
    }
    .pu2r-step-title {
      font-family: 'Outfit', sans-serif;
      font-size: 1.15rem;
      font-weight: 700;
      color: var(--pu2r-secondary);
      margin-bottom: 8px;
    }
    .pu2r-step-desc {
      font-size: 0.88rem;
      color: var(--pu2r-muted);
      line-height: 1.6;
    }

    /* Locality Matrix */
    .pu2r-matrix-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 28px;
    }
    .pu2r-matrix-box {
      background: #ffffff;
      border-radius: var(--pu2r-radius);
      padding: 28px;
      box-shadow: var(--pu2r-shadow-sm);
      border: 1px solid #e2e8f0;
    }
    .pu2r-matrix-header {
      font-family: 'Outfit', sans-serif;
      font-size: 1.25rem;
      font-weight: 700;
      color: var(--pu2r-primary);
      margin-bottom: 16px;
      padding-bottom: 10px;
      border-bottom: 2px solid var(--pu2r-primary-tint);
    }
    .pu2r-tags-cloud {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
    }
    .pu2r-loc-tag {
      background: #fff7ed;
      color: #9a3412;
      padding: 6px 14px;
      border-radius: 6px;
      font-size: 0.86rem;
      font-weight: 600;
      border: 1px solid #fed7aa;
    }

    /* FAQ Accordion */
    .pu2r-faq-list {
      max-width: 900px;
      margin: 0 auto;
    }
    .pu2r-faq-item {
      background: #ffffff;
      border-radius: var(--pu2r-radius);
      margin-bottom: 16px;
      border: 1px solid #e2e8f0;
      box-shadow: var(--pu2r-shadow-sm);
      overflow: hidden;
    }
    .pu2r-faq-question {
      padding: 20px 24px;
      font-family: 'Outfit', sans-serif;
      font-size: 1.12rem;
      font-weight: 700;
      color: var(--pu2r-secondary);
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: background-color 0.2s ease;
    }
    .pu2r-faq-question:hover {
      background-color: #fff7ed;
      color: var(--pu2r-primary);
    }
    .pu2r-faq-answer {
      padding: 0 24px 20px;
      color: var(--pu2r-slate);
      font-size: 0.98rem;
      line-height: 1.7;
    }

    /* Navigation Cluster Module */
    .pu2r-cluster-box {
      background: #ffffff;
      border-radius: var(--pu2r-radius);
      padding: 32px;
      box-shadow: var(--pu2r-shadow-sm);
      border: 1px solid #e2e8f0;
      margin-top: 40px;
    }
    .pu2r-cluster-title {
      font-family: 'Outfit', sans-serif;
      font-size: 1.35rem;
      font-weight: 700;
      color: var(--pu2r-secondary);
      margin-bottom: 18px;
    }
    .pu2r-links-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
      gap: 12px;
    }
    .pu2r-cluster-link {
      display: block;
      padding: 10px 14px;
      background: #f8fafc;
      border-radius: 8px;
      color: var(--pu2r-slate);
      text-decoration: none;
      font-size: 0.9rem;
      font-weight: 600;
      border: 1px solid #e2e8f0;
      transition: all 0.2s ease;
    }
    .pu2r-cluster-link:hover {
      background: var(--pu2r-primary-tint);
      color: var(--pu2r-primary-dark);
      border-color: #fed7aa;
      transform: translateX(3px);
    }

    /* Bottom Instant CTA */
    .pu2r-bottom-cta {
      background: linear-gradient(135deg, #9a3412 0%, #1e1b4b 100%);
      color: #ffffff;
      text-align: center;
      padding: 50px 20px;
      border-radius: var(--pu2r-radius);
      margin: 50px auto 0;
      box-shadow: var(--pu2r-shadow-lg);
    }
    .pu2r-bottom-cta h3 {
      font-family: 'Outfit', sans-serif;
      font-size: 2.1rem;
      font-weight: 800;
      margin-bottom: 14px;
      color: #ffffff;
    }
    .pu2r-bottom-cta p {
      font-size: 1.05rem;
      color: #fed7aa;
      max-width: 720px;
      margin: 0 auto 28px;
    }

    @media (max-width: 900px) {
      .pu2r-hero-title {
        font-size: 2.2rem;
      }
      .pu2r-content-grid-2col {
        grid-template-columns: 1fr;
      }
      .pu2r-matrix-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body class="pu2r-page-wrapper">

<?php include_once __DIR__ . '/includes/header.php'; ?>

<!-- Hero Section -->
<section class="pu2r-hero-section">
  <div class="pu2r-hero-container">
    <div class="pu2r-hero-tagline">
      <span>Maharashtra to Jharkhand Long-Haul Corridor</span> • 1,500-Km Linehaul
    </div>
    <h1 class="pu2r-hero-title">
      Pune to Ranchi <span>Packers and Movers</span>
    </h1>
    <p class="pu2r-hero-desc">
      Relocate with complete confidence across 1,500 kilometers from Maharashtra’s premier technology and manufacturing capital to Ranchi. Shree Ashirwad Packers and Movers delivers specialized long-haul household moving services from all sectors of the Pune Metropolitan Region (Hinjawadi, Wakad, Baner, Kharadi, Magarpatta, Pimpri-Chinchwad) to Ranchi via express NH-53 / NH-43 linehaul corridors. Benefit from guaranteed 72 to 96-hour delivery with dual-driver relay crews, IT workstation and electronic gear defensive packaging, corporate and defense claim reimbursement documentation, and sealed GPS-tracked closed container trucks.
    </p>

    <!-- Route Pills -->
    <div class="pu2r-pills-row">
      <div class="pu2r-pill">
        <span class="pu2r-pill-icon">⚡</span> 72–96 Hr Express Linehaul
      </div>
      <div class="pu2r-pill">
        <span class="pu2r-pill-icon">🚚</span> Dedicated Closed Steel Containers
      </div>
      <div class="pu2r-pill">
        <span class="pu2r-pill-icon">💻</span> IT Asset & Workstation Packaging
      </div>
      <div class="pu2r-pill">
        <span class="pu2r-pill-icon">📑</span> Corporate & Defense Claim Invoices
      </div>
      <div class="pu2r-pill">
        <span class="pu2r-pill-icon">🛡️</span> Zero-Transshipment Weatherproof Fleet
      </div>
    </div>

    <!-- Action Buttons -->
    <div class="pu2r-hero-cta">
      <a href="tel:+918409531615" class="pu2r-btn-primary">
        📞 Call +91-8409531615
      </a>
      <a href="tel:+919835565233" class="pu2r-btn-secondary">
        📱 WhatsApp +91-9835565233
      </a>
    </div>
  </div>
</section>

<!-- Corridor Snapshot Cards -->
<section class="pu2r-section" style="padding-top: 0; padding-bottom: 20px;">
  <div class="pu2r-container">
    <div class="pu2r-stats-grid">
      <div class="pu2r-stat-card">
        <div class="pu2r-stat-number">1,500 KM</div>
        <div class="pu2r-stat-label">Highway Distance</div>
        <div class="pu2r-stat-subtext">Direct via NH-53 / NH-43</div>
      </div>
      <div class="pu2r-stat-card">
        <div class="pu2r-stat-number">72 - 96 Hrs</div>
        <div class="pu2r-stat-label">Linehaul Transit</div>
        <div class="pu2r-stat-subtext">Dual-driver relay, 3 to 4 days</div>
      </div>
      <div class="pu2r-stat-card">
        <div class="pu2r-stat-number">100% Closed</div>
        <div class="pu2r-stat-label">Dedicated Containers</div>
        <div class="pu2r-stat-subtext">Zero transshipment, single-point seal</div>
      </div>
      <div class="pu2r-stat-card">
        <div class="pu2r-stat-number">IBA & GST</div>
        <div class="pu2r-stat-label">Employer Compliant</div>
        <div class="pu2r-stat-subtext">SAC 9965/9967 IT/Defense claim bills</div>
      </div>
    </div>
  </div>
</section>

<!-- Section 1: Corridor Logistics & Route Overview -->
<section class="pu2r-section pu2r-section-alt">
  <div class="pu2r-container">
    <div class="pu2r-section-header">
      <span class="pu2r-badge">Corridor Architecture</span>
      <h2 class="pu2r-section-title">Engineered Pune to Ranchi Long-Haul Logistics & Navigation</h2>
      <p class="pu2r-section-subtitle">
        Bridging Western India’s Deccan plateau with Jharkhand’s Chotanagpur plateau across Maharashtra, Chhattisgarh, and Jharkhand through modern expressway networks and continuous satellite tracking.
      </p>
    </div>

    <div class="pu2r-content-grid-2col">
      <div class="pu2r-text-block">
        <h3>1,500-Km Cross-Country Highway Navigation via NH-53 and NH-43</h3>
        <p>
          Moving home and office assets from Pune to Ranchi spans approximately 1,480 to 1,540 kilometers. Departing the Pune Metropolitan Area via the Pune-Ahmednagar highway or the modern Hindu Hrudaysamrat Balasaheb Thackeray Maharashtra Samruddhi Mahamarg via Jalna, our trucks connect with National Highway 53 (the Asian Highway 46 corridor) passing Amravati, bypassing Nagpur, and crossing into Chhattisgarh via Bhandara, Durg, and Raipur.
        </p>
        <p>
          From the Raipur bypass, our dedicated linehaul continues north-east through Bilaspur and Ambikapur along National Highway 43, entering Jharkhand through Gumla and joining the four-lane NH-43 directly into Ranchi’s municipal ring road. With two experienced long-distance commercial drivers operating in continuous relays, our closed container trucks complete the 1,500-km journey within 72 to 96 hours without multi-depot offloading or transshipment delays.
        </p>
        <ul class="pu2r-check-list">
          <li><strong>Dual-Driver Relay System:</strong> Continuous linehaul movement with fresh driver shifts ensuring safe speeds and fatigue-free transit.</li>
          <li><strong>Zero Hub Transshipment:</strong> Your belongings are loaded into a dedicated container in Pune and stay locked until arriving at your Ranchi home.</li>
          <li><strong>Active Satellite GPS Tracking:</strong> Continuous live tracking with automated checkpoint alerts across Maharashtra, Chhattisgarh, and Jharkhand.</li>
          <li><strong>All-Weather Sealed Protection:</strong> Weatherproof heavy steel container bodies protecting against road dust, torrential highway rains, and heat.</li>
        </ul>
      </div>

      <div class="pu2r-image-wrapper">
        <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Pune to Ranchi Packers and Movers - Closed linehaul container truck on NH-53">
        <div class="pu2r-image-caption">
          Heavy-duty 1,500-km interstate linehaul container truck operating the Pune to Ranchi cross-country corridor.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 2: Transparent Price Schedule -->
<section class="pu2r-section">
  <div class="pu2r-container">
    <div class="pu2r-section-header">
      <span class="pu2r-badge">Honest Estimates</span>
      <h2 class="pu2r-section-title">Transparent Pune to Ranchi Moving Tariff Schedule</h2>
      <p class="pu2r-section-subtitle">
        Zero hidden costs, no unexpected multi-state border surcharges, and comprehensive written agreements. Review our standardized pricing structure for apartments, IT workstations, and vehicles.
      </p>
    </div>

    <div class="pu2r-pricing-table-wrapper">
      <table class="pu2r-pricing-table">
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
            <td>1,480 - 1,540 km (NH-53 / NH-43)</td>
            <td>Standard 3-Layer + Heavy Corrugated Cartons</td>
            <td><span class="pu2r-price-tag">₹16,000 - ₹26,000</span></td>
            <td>3 - 4 Days (72-96 Hrs)</td>
          </tr>
          <tr>
            <td><strong>2 BHK Apartment Standard Move</strong></td>
            <td>1,480 - 1,540 km (NH-53 / NH-43)</td>
            <td>Premium 4-Layer (Bubble + Foam + Stretch Film)</td>
            <td><span class="pu2r-price-tag">₹25,000 - ₹38,000</span></td>
            <td>3 - 4 Days (72-96 Hrs)</td>
          </tr>
          <tr>
            <td><strong>3 BHK Executive Residence Move</strong></td>
            <td>1,480 - 1,540 km (NH-53 / NH-43)</td>
            <td>Executive 5-Layer Defense + Edge Armor</td>
            <td><span class="pu2r-price-tag">₹35,000 - ₹54,000</span></td>
            <td>Dedicated Container Fleet</td>
          </tr>
          <tr>
            <td><strong>4 BHK / Villa / Corporate Duplex</strong></td>
            <td>1,480 - 1,540 km (NH-53 / NH-43)</td>
            <td>Heavy-Duty Crating + Full Dismantling & Setup</td>
            <td><span class="pu2r-price-tag">₹46,000 - ₹68,000</span></td>
            <td>Dedicated Multi-Axle Container</td>
          </tr>
          <tr>
            <td><strong>Two-Wheeler / Motorbike Shifting</strong></td>
            <td>Dedicated Linehaul Parcel</td>
            <td>Bubble Wrap + Fork Covers + Floor Lashings</td>
            <td><span class="pu2r-price-tag">₹4,500 - ₹7,800</span></td>
            <td>3 - 5 Days</td>
          </tr>
          <tr>
            <td><strong>Car Carrier (Sedan / Premium SUV)</strong></td>
            <td>Enclosed Hydraulic Auto Carrier</td>
            <td>Wheel Chocks + Anti-Scratch Film + Insurance</td>
            <td><span class="pu2r-price-tag">₹14,000 - ₹24,000</span></td>
            <td>4 - 6 Days</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div style="background: #fff7ed; border-left: 4px solid var(--pu2r-primary); padding: 18px 24px; border-radius: 0 8px 8px 0; font-size: 0.95rem; color: #9a3412;">
      <strong>Note on Rate Determinants:</strong> Individual relocation quotes are computed based on overall cubic feet inventory volume, service elevator accessibility in high-rise Pune gated societies (Hinjawadi, Wakad, Baner, Kharadi), specialized wooden crating for multi-monitor workstations, servers, or fragile glassware, and declared goods valuation for comprehensive all-risk marine transit insurance.
    </div>
  </div>
</section>

<!-- Section 3: Specialized IT, Automotive & Defense Relocation Advisory -->
<section class="pu2r-section pu2r-section-alt">
  <div class="pu2r-container">
    <div class="pu2r-section-header">
      <span class="pu2r-badge">Specialized Demographics</span>
      <h2 class="pu2r-section-title">IT Corporate, Automotive & Defense Relocation Expertise</h2>
      <p class="pu2r-section-subtitle">
        Custom-engineered protocols designed specifically for software engineers, automotive manufacturing technocrats, high-rise apartment dwellers, and armed forces personnel.
      </p>
    </div>

    <div class="pu2r-card-grid-3">
      <!-- Card 1: IT Asset & Remote Setup -->
      <div class="pu2r-feature-card">
        <div class="pu2r-card-icon">💻</div>
        <h3 class="pu2r-card-title">IT Workstations & Electronic Gear Crating</h3>
        <p class="pu2r-card-text">
          Software engineers and tech leads moving from Hinjawadi Rajiv Gandhi Infotech Park, Magarpatta City, and Kharadi EON IT Park trust our electronic asset defense protocols. We pack multi-display monitors, curved gaming screens, high-end desktop rigs, and motorized standing desks in anti-static air bubble film, dense EPE foam, and shock-resistant wooden crates.
        </p>
      </div>

      <!-- Card 2: Automotive Technocrats -->
      <div class="pu2r-feature-card">
        <div class="pu2r-card-icon">⚙️</div>
        <h3 class="pu2r-card-title">Automotive Engineers & Tata Motors Transfers</h3>
        <p class="pu2r-card-text">
          Engineers and plant managers rotating between Pune’s automotive belt (Tata Motors Pimpri-Chinchwad, Bajaj Auto Akurdi, Bharat Forge) and the industrial corridor of Jamshedpur and Ranchi receive complete employer-compliant moving documentation. Our bills meet strict corporate relocation policy guidelines for full reimbursement without audit delays.
        </p>
      </div>

      <!-- Card 3: Armed Forces & Defense -->
      <div class="pu2r-feature-card">
        <div class="pu2r-card-icon">🎖️</div>
        <h3 class="pu2r-card-title">Defense & Armed Forces Transfers</h3>
        <p class="pu2r-card-text">
          Serving Army, Navy, and Air Force officers rotating from Southern Command Headquarters, National Defence Academy (NDA Khadakwasla), College of Military Engineering (CME Dapodi), and Bombay Sappers to Dipatoli Cantonment and Namkum Military Station Ranchi. We issue official defense-compliant documentation adhering to Cantonment boarding orders.
        </p>
      </div>

      <!-- Card 4: High-Rise Gated Societies -->
      <div class="pu2r-feature-card">
        <div class="pu2r-card-icon">🏙️</div>
        <h3 class="pu2r-card-title">Hinjawadi, Wakad & Baner Society Coordination</h3>
        <p class="pu2r-card-text">
          Modern gated residential societies across Wakad, Baner, Balewadi, and Kharadi require strict compliance with Resident Welfare Association rules. Our trained moving crews coordinate elevator reservations, lay protective rubber floor mats across corridors, use corner bumpers during bulky furniture handling, and operate within approved society move-out time windows.
        </p>
      </div>

      <!-- Card 5: Pimpri-Chinchwad Industrial Corridor -->
      <div class="pu2r-feature-card">
        <div class="pu2r-card-icon">🏭</div>
        <h3 class="pu2r-card-title">Pimpri-Chinchwad & Bhosari Logistics</h3>
        <p class="pu2r-card-text">
          Covering the vast industrial and residential twin city of PCMC, from Nigdi and Akurdi to Bhosari, Chakan, and Pimple Saudagar. We deploy low-clearance feeder shuttle vehicles for gated residential basements, transferring goods directly into our sealed linehaul container without intermediate handling.
        </p>
      </div>

      <!-- Card 6: Returning Families & Permanent Shifting -->
      <div class="pu2r-feature-card">
        <div class="pu2r-card-icon">🏡</div>
        <h3 class="pu2r-card-title">Returning Families & Permanent Relocation</h3>
        <p class="pu2r-card-text">
          Professional families returning to their ancestral homes in Ranchi benefit from full turnkey packing, express long-distance haulage, and complete unpacking and furniture reassembly at destination, turning a demanding 1,500-km relocation into an effortless homecoming.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Section 4: 5-Layer Defensive Packaging Shield -->
<section class="pu2r-section">
  <div class="pu2r-container">
    <div class="pu2r-section-header">
      <span class="pu2r-badge">Packaging Technology</span>
      <h2 class="pu2r-section-title">The 5-Layer Defensive Packaging Shield</h2>
      <p class="pu2r-section-subtitle">
        Engineered protective packaging shielding your furniture, home electronics, fragile chinaware, and personal effects against transit shocks over 1,500 kilometers of highway.
      </p>
    </div>

    <div class="pu2r-content-grid-2col">
      <div class="pu2r-image-wrapper">
        <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg" alt="Pune to Ranchi Packers and Movers - Furniture protective wrapping">
        <div class="pu2r-image-caption">
          Multi-layer foam wrapping, corner angle guards, and heavy stretch film applied to wooden workstations and study desks.
        </div>
      </div>

      <div class="pu2r-text-block">
        <h3>Industrial-Grade Packing Materials for Absolute Safety</h3>
        <p>
          Long-distance transit between Pune and Ranchi crosses three states, requiring materials specifically tested for abrasion resistance, vibration absorption, and climate resilience. We use exclusively virgin industrial-grade packing materials rather than recycled cartons:
        </p>
        <ul class="pu2r-check-list">
          <li><strong>Layer 1 - Anti-Scratch Virgin EPE Foam:</strong> Soft protective underlay applied directly to polished wood, glass, and automotive paint surfaces to prevent micro-abrasions.</li>
          <li><strong>Layer 2 - Multi-Cell Air Bubble Film:</strong> Heavy shock-dampening air bubble cushioning absorbing mechanical highway vibrations and abrupt vehicle deceleration forces.</li>
          <li><strong>Layer 3 - 5-Ply Corner Angle Armor:</strong> Compressed cardboard V-profile edge protectors safeguarding table corners, wardrobe rims, and display cabinets from edge collisions.</li>
          <li><strong>Layer 4 - Double-Wall Corrugated Cartons:</strong> Heavy-duty 7-ply outer cartons for books, crockery, appliances, and kitchenware, sealed with moisture-resistant PVC tape.</li>
          <li><strong>Layer 5 - Weatherproof Stretch Wrap:</strong> High-tensile clear stretch film binding packed goods hermetically, shielding against rain, dust, and humidity variations.</li>
        </ul>
      </div>
    </div>

    <!-- Second Showcase Grid for Appliances -->
    <div class="pu2r-content-grid-2col" style="margin-top: 50px;">
      <div class="pu2r-text-block">
        <h3>Appliance Defense & Heavy Canvas Jacket Protection</h3>
        <p>
          Heavy household appliances—including double-door refrigerators, front-load washing machines, microwave ovens, and large LED televisions—receive specialized immobilization. We drain washing machine water lines, lock drum transit bolts, secure compressor coils, and fit custom-quilted padded canvas jackets over appliances.
        </p>
        <p>
          High-value electronics, desktop towers, soundbars, and curved computer monitors receive custom wooden crating with dense foam liners for complete vibration dampening over the 1,500-km journey.
        </p>
        <ul class="pu2r-check-list">
          <li><strong>Heavy Quilted Canvas Jackets:</strong> Custom reusable padded jackets protecting washing machines and refrigerators from transit impact.</li>
          <li><strong>Custom TV Wooden Crating:</strong> Rigid reinforced wooden crating constructed on-site for 55-inch to 85-inch flat-screen televisions with interior foam cushions.</li>
          <li><strong>Washing Machine Drum Locks:</strong> Mechanical transit bolts fitted into washing machine drums to immobilize internal suspension springs during transit.</li>
        </ul>
      </div>

      <div class="pu2r-image-wrapper">
        <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-appliances-protective-cover-ranchi.jpg" alt="Pune to Ranchi Packers and Movers - Heavy appliance protective jackets">
        <div class="pu2r-image-caption">
          Heavy quilted protective padding and corner guards applied to home appliances before loading.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 5: The 5-Stage Systematic Relocation Process -->
<section class="pu2r-section pu2r-section-alt">
  <div class="pu2r-container">
    <div class="pu2r-section-header">
      <span class="pu2r-badge">Execution Blueprint</span>
      <h2 class="pu2r-section-title">The 5-Stage Pune to Ranchi Relocation Journey</h2>
      <p class="pu2r-section-subtitle">
        From your initial booking consultation in Pune to the final reassembly of furniture in Ranchi, our structured methodology guarantees a smooth long-haul moving experience.
      </p>
    </div>

    <div class="pu2r-process-timeline">
      <div class="pu2r-process-step">
        <div class="pu2r-step-num">1</div>
        <h3 class="pu2r-step-title">Pre-Move Survey</h3>
        <p class="pu2r-step-desc">
          Complimentary physical home survey in Pune or rapid video inventory audit. We calculate volume, assess society elevator logistics, evaluate approach roads, and issue a transparent written quote.
        </p>
      </div>

      <div class="pu2r-process-step">
        <div class="pu2r-step-num">2</div>
        <h3 class="pu2r-step-title">Defensive Packaging</h3>
        <p class="pu2r-step-desc">
          Our certified packing team arrives with complete packing supplies. Furniture is dismantled, IT gear is cushioned, delicate chinaware is wrapped, and all cartons are cataloged on the inventory sheet.
        </p>
      </div>

      <div class="pu2r-process-step">
        <div class="pu2r-step-num">3</div>
        <h3 class="pu2r-step-title">Direct Sealed Linehaul</h3>
        <p class="pu2r-step-desc">
          Your shipment is loaded into our dedicated closed container truck, secured with internal nylon wall lashings, locked, and sealed with a numbered tamper-evident seal before departing via NH-53.
        </p>
      </div>

      <div class="pu2r-process-step">
        <div class="pu2r-step-num">4</div>
        <h3 class="pu2r-step-title">Express Highway Transit</h3>
        <p class="pu2r-step-desc">
          The container truck navigates through Jalna, Nagpur, Raipur, and Ambikapur with dual-driver relay crews under continuous GPS tracking, completing the 1,500-km journey in 72 to 96 hours.
        </p>
      </div>

      <div class="pu2r-process-step">
        <div class="pu2r-step-num">5</div>
        <h3 class="pu2r-step-title">Doorstep Setup in Ranchi</h3>
        <p class="pu2r-step-desc">
          Upon arrival at your Ranchi residence, our crew unloads, unboxes, reassembles beds and dining tables, places furniture in designated rooms, and hauls away all packaging debris.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Section 6: Dual-City Locality Matrix -->
<section class="pu2r-section">
  <div class="pu2r-container">
    <div class="pu2r-section-header">
      <span class="pu2r-badge">Coverage Map</span>
      <h2 class="pu2r-section-title">Comprehensive Pickup in Pune & Doorstep Delivery in Ranchi</h2>
      <p class="pu2r-section-subtitle">
        We serve every neighborhood, IT corridor, and residential township across the Pune Metropolitan Region, connecting directly with all residential sectors in Ranchi.
      </p>
    </div>

    <div class="pu2r-matrix-grid">
      <!-- Pune Pickup Localities -->
      <div class="pu2r-matrix-box">
        <h3 class="pu2r-matrix-header">📍 Pune Metropolitan Pickup Zones</h3>
        <div class="pu2r-tags-cloud">
          <span class="pu2r-loc-tag">Hinjawadi (Phase 1, 2, 3)</span>
          <span class="pu2r-loc-tag">Wakad & Hinjawadi Link Road</span>
          <span class="pu2r-loc-tag">Baner & Balewadi High Street</span>
          <span class="pu2r-loc-tag">Aundh & Pashan</span>
          <span class="pu2r-loc-tag">Kothrud & Karve Nagar</span>
          <span class="pu2r-loc-tag">Viman Nagar & Tingre Nagar</span>
          <span class="pu2r-loc-tag">Kharadi & EON Free Zone</span>
          <span class="pu2r-loc-tag">Magarpatta City & Hadapsar</span>
          <span class="pu2r-loc-tag">Pimpri & Chinchwad</span>
          <span class="pu2r-loc-tag">Bhosari Industrial Area</span>
          <span class="pu2r-loc-tag">Pimple Saudagar & Pimple Nilakh</span>
          <span class="pu2r-loc-tag">Bavdhan & Chandani Chowk</span>
          <span class="pu2r-loc-tag">Kalyani Nagar & Koregaon Park</span>
          <span class="pu2r-loc-tag">Kondhwa & NIBM Road</span>
        </div>
      </div>

      <!-- Ranchi Drop Localities -->
      <div class="pu2r-matrix-box">
        <h3 class="pu2r-matrix-header">📍 Ranchi Residential Delivery Zones</h3>
        <div class="pu2r-tags-cloud">
          <span class="pu2r-loc-tag">Harmu Housing Colony</span>
          <span class="pu2r-loc-tag">Morabadi & Tagore Hill</span>
          <span class="pu2r-loc-tag">Bariatu & Booty Road</span>
          <span class="pu2r-loc-tag">Lalpur & Circular Road</span>
          <span class="pu2r-loc-tag">Doranda & AG Colony</span>
          <span class="pu2r-loc-tag">Ashok Nagar & Kadru</span>
          <span class="pu2r-loc-tag">Namkum & Tata Road</span>
          <span class="pu2r-loc-tag">Kanke Road & CMPDI</span>
          <span class="pu2r-loc-tag">Kathal More & Argora</span>
          <span class="pu2r-loc-tag">Birsa Chowk & Hatia</span>
          <span class="pu2r-loc-tag">Dhurwa & HEC Sector</span>
          <span class="pu2r-loc-tag">CCL Darbhanga House</span>
          <span class="pu2r-loc-tag">Dipatoli Army Cantonment</span>
          <span class="pu2r-loc-tag">Ratu Road & Pandra</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 7: Two-Wheeler & Car Carrier Transport -->
<section class="pu2r-section pu2r-section-alt">
  <div class="pu2r-container">
    <div class="pu2r-section-header">
      <span class="pu2r-badge">Vehicle Logistics</span>
      <h2 class="pu2r-section-title">Dedicated Two-Wheeler Parcel & Enclosed Car Carrier Service</h2>
      <p class="pu2r-section-subtitle">
        Relocate your commuter scooter, touring motorcycle, or family car with zero driving wear-and-tear across 1,500 kilometers of national highway.
      </p>
    </div>

    <div class="pu2r-content-grid-2col">
      <div class="pu2r-image-wrapper">
        <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/scooter-bike-safe-transit-packing-jharkhand.jpg" alt="Pune to Ranchi Packers and Movers - Motorcycle and bike parcel packing">
        <div class="pu2r-image-caption">
          Custom multi-layer motorcycle packing with fork sleeves, padded foam, and heavy floor ratchet tie-downs.
        </div>
      </div>

      <div class="pu2r-text-block">
        <h3>Safe, Scratch-Free Vehicle Relocation from Pune to Ranchi</h3>
        <p>
          Riding a two-wheeler or self-driving a car over 1,500 kilometers through multi-state highway tolls, ghat passes, and heavy industrial freight corridors causes significant odometer mileage, tire wear, and risk of accidental stone chips. Shree Ashirwad Packers and Movers provides professional automobile shipping ensuring showroom-condition delivery in Ranchi.
        </p>
        <p>
          Two-wheelers receive complete defensive packaging: fuel tanks are drained to safety thresholds, mirrors are detached and wrapped, suspension forks are encased in corrugated sleeves, and wheels are secured to container floor tracks with industrial nylon ratchet tie-downs.
        </p>
        <ul class="pu2r-check-list">
          <li><strong>Enclosed Hydraulic Car Carriers:</strong> Multi-car covered carriers protecting passenger cars from flying stone chips, road debris, and weather.</li>
          <li><strong>Digital Vehicle Inspection Report:</strong> Photo-documented condition report recording odometer reading and minor prior blemishes before loading.</li>
          <li><strong>Comprehensive Marine Transit Insurance:</strong> All-risk coverage protecting against road accidents, collisions, and transit damage.</li>
          <li><strong>Doorstep Delivery:</strong> Convenient pickup from your Pune apartment and direct delivery to your Ranchi residence driveway.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Section 8: Frequently Asked Questions (FAQ) -->
<section class="pu2r-section">
  <div class="pu2r-container">
    <div class="pu2r-section-header">
      <span class="pu2r-badge">Frequently Asked Questions</span>
      <h2 class="pu2r-section-title">Common Questions About Moving from Pune to Ranchi</h2>
      <p class="pu2r-section-subtitle">
        Clear, factual answers regarding pricing across 1,500 km, transit duration, IT corporate and defense claim paperwork, and vehicle shipping.
      </p>
    </div>

    <div class="pu2r-faq-list">
      <div class="pu2r-faq-item">
        <div class="pu2r-faq-question">
          <span>How much does household shifting cost from Pune to Ranchi?</span>
          <span>➕</span>
        </div>
        <div class="pu2r-faq-answer">
          Household shifting charges from Pune to Ranchi typically range from ₹16,000 to ₹26,000 for a 1 BHK apartment, ₹25,000 to ₹38,000 for a 2 BHK apartment, and ₹35,000 to ₹54,000 for a 3 BHK residence. For large 4 BHK duplexes or villas, quotes range from ₹46,000 to ₹68,000. Transparent pricing depends on cubic feet volume, high-rise service elevator availability in Pune gated societies (Hinjawadi, Wakad, Kharadi), IT workstation crating needs, and vehicle carrier inclusions.
        </div>
      </div>

      <div class="pu2r-faq-item">
        <div class="pu2r-faq-question">
          <span>What is the expected transit duration for a moving truck from Pune to Ranchi?</span>
          <span>➕</span>
        </div>
        <div class="pu2r-faq-answer">
          The highway distance between Pune and Ranchi is approximately 1,480 to 1,540 km via NH-53 and NH-43 across Maharashtra (Amravati, Nagpur), Chhattisgarh (Raipur, Bilaspur, Ambikapur), and Jharkhand (Gumla). Our dedicated closed-container trucks with dual-driver relay crews complete the journey within 72 to 96 hours (3 to 4 days), guaranteeing doorstep delivery at your Ranchi residence.
        </div>
      </div>

      <div class="pu2r-faq-item">
        <div class="pu2r-faq-question">
          <span>Do you provide official reimbursement bills for IT corporate and Defense transfers?</span>
          <span>➕</span>
        </div>
        <div class="pu2r-faq-answer">
          Yes, Shree Ashirwad Packers and Movers specializes in IT corporate, engineering, and defense relocation billing. We furnish 100% employer-approved documentation packets for software companies (TCS, Infosys, Wipro, Tech Mahindra, Cognizant), automotive firms (Tata Motors, Bajaj Auto, Bharat Forge), and Armed Forces personnel (Southern Command HQ, NDA Khadakwasla). Our billing includes GST invoices (SAC 9965/9967), IBA-approved bilty consignment notes, itemized inventory sheets, money receipts, and transit insurance policies.
        </div>
      </div>

      <div class="pu2r-faq-item">
        <div class="pu2r-faq-question">
          <span>How do you coordinate moves from high-rise gated societies in Hinjawadi, Wakad, and Baner?</span>
          <span>➕</span>
        </div>
        <div class="pu2r-faq-answer">
          Our Pune operations team coordinates directly with society Facility Management and Resident Welfare Associations (RWAs) across Hinjawadi Phase 1-3, Wakad, Baner, Balewadi, and Kharadi. We manage move-out gate passes, schedule freight elevator slots, lay protective floor runners across common corridors, use corner bumpers during bulky furniture handling, and deploy small feeder shuttle vans if basement height restrictions prevent large container entry.
        </div>
      </div>

      <div class="pu2r-faq-item">
        <div class="pu2r-faq-question">
          <span>How do you protect delicate IT assets, multi-monitor setups, and home office workstations?</span>
          <span>➕</span>
        </div>
        <div class="pu2r-faq-answer">
          We apply tailored electronics protection for tech professionals. Multi-monitor setups, gaming rigs, CPUs, and ergonomic chairs receive anti-static bubble wrapping, virgin EPE foam padding, reinforced corner guards, and rigid double-wall carton boxing. High-value computer monitors and curved screens are placed in custom-padded wooden crates with vibration-dampening foam inserts.
        </div>
      </div>

      <div class="pu2r-faq-item">
        <div class="pu2r-faq-question">
          <span>Can I transport my motorcycle or car from Pune to Ranchi?</span>
          <span>➕</span>
        </div>
        <div class="pu2r-faq-answer">
          Yes, we operate dedicated two-wheeler parcel services and enclosed hydraulic car carriers between Pune and Ranchi. Motorbikes receive complete defensive packaging with fork protectors, bubble wrap, mirror detachment, and floor ratchet lashings. Passenger cars are transported in enclosed hydraulic car carriers with wheel chocks under comprehensive all-risk transit insurance.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 9: Cluster Navigation Module -->
<section class="pu2r-section pu2r-section-alt" style="padding-top: 30px;">
  <div class="pu2r-container">
    <div class="pu2r-cluster-box">
      <h3 class="pu2r-cluster-title">Explore Related Interstate & Regional Moving Corridors</h3>
      <div class="pu2r-links-grid">
        <a href="<?php echo SITE_BASE_URL; ?>/" class="pu2r-cluster-link">
          📍 Ranchi Movers Headquarters
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/bangalore-to-ranchi-packers-and-movers" class="pu2r-cluster-link">
          🚚 Bangalore to Ranchi Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/delhi-to-ranchi-packers-and-movers" class="pu2r-cluster-link">
          🚚 Delhi to Ranchi Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/kolkata-to-ranchi-packers-and-movers" class="pu2r-cluster-link">
          🚚 Kolkata to Ranchi Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/patna-to-ranchi-packers-and-movers" class="pu2r-cluster-link">
          🚚 Patna to Ranchi Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-bhopal-packers-and-movers" class="pu2r-cluster-link">
          🚚 Ranchi to Bhopal Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-bilaspur-packers-and-movers" class="pu2r-cluster-link">
          🚚 Ranchi to Bilaspur Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-prayagraj-packers-and-movers" class="pu2r-cluster-link">
          🚚 Ranchi to Prayagraj Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-varanasi-packers-and-movers" class="pu2r-cluster-link">
          🚚 Ranchi to Varanasi Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-kanpur-packers-and-movers" class="pu2r-cluster-link">
          🚚 Ranchi to Kanpur Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-cuttack-packers-and-movers" class="pu2r-cluster-link">
          🚚 Ranchi to Cuttack Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/pricing" class="pu2r-cluster-link">
          💰 Relocation Cost Calculator
        </a>
      </div>
    </div>

    <!-- Final Call to Action -->
    <div class="pu2r-bottom-cta">
      <h3>Ready to Move from Pune to Ranchi?</h3>
      <p>
        Get an upfront written quotation, free home survey, and dedicated linehaul truck booking with Shree Ashirwad Packers and Movers. Experience stress-free relocation with guaranteed on-time delivery.
      </p>
      <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:+918409531615" class="pu2r-btn-primary" style="background: #ffffff; color: #9a3412;">
          📞 Call +91-8409531615
        </a>
        <a href="tel:+919835565233" class="pu2r-btn-secondary" style="border-color: #ffffff; color: #ffffff;">
          📱 WhatsApp +91-9835565233
        </a>
      </div>
    </div>
  </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>

</body>
</html>
