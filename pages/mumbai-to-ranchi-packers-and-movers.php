<?php
/**
 * Mumbai to Ranchi Packers and Movers - Shree Ashirwad Packers and Movers
 * 
 * High-performance, fully SEO-optimized dedicated route landing page for inbound interstate relocations,
 * Corporate & Financial executives (BKC, Nariman Point, Lower Parel), media professionals, Western Naval Command personnel,
 * and returning families moving from Mumbai Metropolitan Region to Ranchi (Jharkhand) along the 1,550-km Samruddhi Mahamarg / NH-53 corridor.
 * 
 * Target Keyword: mumbai to ranchi packers and movers / packers and movers mumbai to ranchi
 */

// Define page-specific metadata
$page_title = "Mumbai to Ranchi Packers & Movers | Shree Ashirwad";
$page_description = "Top Mumbai to Ranchi packers and movers by Shree Ashirwad. Express 4-day transit via Samruddhi/NH-53, BKC/PSU transfer bills, 5-layer packing. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/mumbai-to-ranchi-packers-and-movers";

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
  <meta name="keywords" content="mumbai to ranchi packers and movers, packers and movers mumbai to ranchi, household shifting mumbai to ranchi, mumbai to ranchi luggage parcel, mumbai to ranchi car carrier, mumbai to ranchi bike transport, mumbai to ranchi moving charges, navi mumbai to ranchi packers, thane to ranchi movers, bkc to ranchi corporate transfer">
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
  <meta property="og:image:alt" content="Mumbai to Ranchi Packers and Movers - Shree Ashirwad Express Linehaul Fleet">
  <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
  <meta property="og:locale" content="en_IN">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg">

  <!-- Geo Meta Tags for Origin: Mumbai, Destination: Ranchi -->
  <meta name="geo.region" content="IN-MH">
  <meta name="geo.placename" content="Mumbai">
  <meta name="geo.position" content="19.0760;72.8777">
  <meta name="ICBM" content="19.0760, 72.8777">

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
    "priceRange": "₹4,800 - ₹72,000",
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
        "name": "Mumbai"
      },
      {
        "@type": "City",
        "name": "Ranchi"
      }
    ],
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Mumbai to Ranchi Inbound Interstate Relocation Services",
      "itemListElement": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Household Relocation Mumbai to Ranchi",
            "description": "Full-service household packing and express dedicated container linehaul transport from Mumbai Metropolitan Region to Ranchi with guaranteed 72 to 96-hour delivery."
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Corporate & Financial Executive Transfer Shifting",
            "description": "Official relocation package for BKC, Nariman Point, banking, PSU, and Naval defense personnel with 100% audit-compliant transfer documentation."
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Two-Wheeler & Car Carrier Transport to Ranchi",
            "description": "Enclosed hydraulic auto carrier and motorcycle parcel service from Mumbai to Ranchi under comprehensive all-risk transit insurance."
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
    "description": "Professional door-to-door relocation services from Mumbai to Ranchi featuring guaranteed 3 to 4-day express linehaul transit via Samruddhi Mahamarg, 5-layer defensive packaging, corporate and defense reimbursement bills, and dedicated GPS-tracked closed container trucks."
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
        "name": "Mumbai to Ranchi",
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
        "name": "How much does household shifting cost from Mumbai to Ranchi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Household shifting charges from Mumbai to Ranchi typically range from ₹17,000 to ₹28,000 for a 1 BHK apartment, ₹27,000 to ₹40,000 for a 2 BHK apartment, and ₹38,000 to ₹58,000 for a 3 BHK residence. For large 4 BHK penthouses or duplex villas, quotes range from ₹48,000 to ₹72,000. Transparent pricing depends on cubic feet volume, high-rise service elevator availability in Mumbai gated societies (Powai, Lower Parel, Bandra, Thane), packing tier, and vehicle carrier inclusions."
        }
      },
      {
        "@type": "Question",
        "name": "What is the expected transit duration for a moving truck from Mumbai to Ranchi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "The highway distance between Mumbai and Ranchi is approximately 1,520 to 1,580 km. Our container trucks travel via the high-speed Samruddhi Mahamarg to Nagpur, continuing through Raipur and Ambikapur into Ranchi along NH-53 and NH-43. With dual-driver relay crews, our dedicated closed-container trucks complete the journey within 72 to 96 hours (3 to 4 days), guaranteeing doorstep delivery at your Ranchi residence."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide official reimbursement bills for Corporate, Banking, and Defense transfers?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, Shree Ashirwad Packers and Movers specializes in corporate, banking, and defense relocation billing. We furnish 100% employer-approved documentation packets for financial institutions (RBI, SBI Corporate Centre, HDFC, ICICI), corporate headquarters (Tata Sons, Reliance, Aditya Birla), and Armed Forces personnel (Western Naval Command Mumbai). Our billing includes GST invoices (SAC 9965/9967), IBA-approved bilty consignment notes, itemized inventory sheets, money receipts, and transit insurance policies."
        }
      },
      {
        "@type": "Question",
        "name": "How do you coordinate moves from high-rise societies in Mumbai, Thane, and Navi Mumbai?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Our Mumbai operations team coordinates directly with society estate managers and Resident Welfare Associations (RWAs) across South Mumbai, Powai, Bandra, Thane West, and Navi Mumbai (Kharghar, Vashi). We manage move-out gate passes, schedule service elevator time slots, lay protective rubber floor runners across lobbies, and deploy small feeder shuttle vans if basement height restrictions prevent large container entry."
        }
      },
      {
        "@type": "Question",
        "name": "How do you protect household goods against coastal Mumbai humidity and transit rain?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We apply tailored moisture-barrier packaging to combat coastal marine humidity. Wooden furnishings, leather sofas, and electronic appliances are encased in breathable virgin EPE foam, bound with airtight waterproof stretch film, and packed alongside desiccant silica gel sachets. Our all-weather closed steel containers feature rubber-gasketed doors that prevent any rain or moisture ingress during highway transit."
        }
      },
      {
        "@type": "Question",
        "name": "Can I transport my motorcycle or car alongside household goods from Mumbai to Ranchi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we operate dedicated two-wheeler parcel services and enclosed hydraulic car carriers between Mumbai and Ranchi. Motorbikes receive complete defensive packaging with fork protectors, bubble wrap, mirror detachment, and floor ratchet lashings. Passenger cars are moved in enclosed hydraulic car carriers with wheel chocks under comprehensive all-risk transit insurance."
        }
      }
    ]
  }
  </script>

  <!-- Scoped CSS for Mumbai to Ranchi Corridor Page (m2r- prefix) -->
  <style>
    :root {
      --m2r-primary: #1e3a8a;
      --m2r-primary-dark: #172554;
      --m2r-primary-light: #2563eb;
      --m2r-primary-tint: #dbeafe;
      --m2r-accent: #d97706;
      --m2r-accent-hover: #b45309;
      --m2r-secondary: #0f172a;
      --m2r-slate: #334155;
      --m2r-muted: #64748b;
      --m2r-border: #bfdbfe;
      --m2r-card-bg: #ffffff;
      --m2r-radius: 12px;
      --m2r-shadow-sm: 0 2px 6px rgba(30, 58, 138, 0.05);
      --m2r-shadow-md: 0 8px 24px rgba(30, 58, 138, 0.08);
      --m2r-shadow-lg: 0 16px 36px rgba(30, 58, 138, 0.12);
    }

    .m2r-page-wrapper {
      font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      color: var(--m2r-slate);
      background-color: #f8fafc;
      line-height: 1.7;
    }

    /* Hero Section */
    .m2r-hero-section {
      background: linear-gradient(135deg, #172554 0%, #1e3a8a 50%, #0f172a 100%);
      color: #ffffff;
      padding: 65px 20px 55px;
      position: relative;
      overflow: hidden;
    }
    .m2r-hero-section::after {
      content: "";
      position: absolute;
      top: -30%;
      right: -15%;
      width: 600px;
      height: 600px;
      background: radial-gradient(circle, rgba(217, 119, 6, 0.22) 0%, rgba(255, 255, 255, 0) 70%);
      pointer-events: none;
    }
    .m2r-hero-container {
      max-width: 1200px;
      margin: 0 auto;
      position: relative;
      z-index: 2;
    }
    .m2r-hero-tagline {
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
    .m2r-hero-title {
      font-family: 'Outfit', sans-serif;
      font-size: 2.85rem;
      line-height: 1.2;
      font-weight: 800;
      color: #ffffff;
      margin-bottom: 20px;
      letter-spacing: -0.5px;
    }
    .m2r-hero-title span {
      color: #fbbf24;
      background: linear-gradient(120deg, #fef08a, #f59e0b);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .m2r-hero-desc {
      font-size: 1.15rem;
      line-height: 1.7;
      color: #dbeafe;
      max-width: 900px;
      margin-bottom: 30px;
    }

    /* Route Feature Badges */
    .m2r-pills-row {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-bottom: 35px;
    }
    .m2r-pill {
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
    .m2r-pill-icon {
      color: #fde047;
    }

    /* Hero CTA Bar */
    .m2r-hero-cta {
      display: flex;
      flex-wrap: wrap;
      gap: 16px;
      align-items: center;
    }
    .m2r-btn-primary {
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
    .m2r-btn-primary:hover {
      background: linear-gradient(135deg, #b45309 0%, #92400e 100%);
      transform: translateY(-2px);
      box-shadow: 0 6px 18px rgba(217, 119, 6, 0.45);
      color: #ffffff;
    }
    .m2r-btn-secondary {
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
    .m2r-btn-secondary:hover {
      background: rgba(255, 255, 255, 0.22);
      color: #ffffff;
    }

    /* Container Standard */
    .m2r-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }
    .m2r-section {
      padding: 60px 0;
    }
    .m2r-section-alt {
      background-color: #ffffff;
      border-top: 1px solid #f1f5f9;
      border-bottom: 1px solid #f1f5f9;
    }

    .m2r-section-header {
      text-align: center;
      max-width: 820px;
      margin: 0 auto 45px;
    }
    .m2r-badge {
      display: inline-block;
      background: var(--m2r-primary-tint);
      color: var(--m2r-primary);
      padding: 4px 14px;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      margin-bottom: 12px;
    }
    .m2r-section-title {
      font-family: 'Outfit', sans-serif;
      font-size: 2.25rem;
      font-weight: 800;
      color: var(--m2r-secondary);
      line-height: 1.25;
      margin-bottom: 16px;
    }
    .m2r-section-subtitle {
      font-size: 1.05rem;
      color: var(--m2r-muted);
      line-height: 1.7;
    }

    /* Key Corridor Facts Grid */
    .m2r-stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
      gap: 20px;
      margin-top: -30px;
      position: relative;
      z-index: 10;
      margin-bottom: 50px;
    }
    .m2r-stat-card {
      background: #ffffff;
      border-radius: var(--m2r-radius);
      padding: 24px;
      box-shadow: var(--m2r-shadow-md);
      border: 1px solid #bfdbfe;
      text-align: center;
      transition: transform 0.25s ease;
    }
    .m2r-stat-card:hover {
      transform: translateY(-4px);
    }
    .m2r-stat-number {
      font-family: 'Outfit', sans-serif;
      font-size: 2.1rem;
      font-weight: 800;
      color: var(--m2r-primary);
      margin-bottom: 6px;
    }
    .m2r-stat-label {
      font-size: 0.95rem;
      font-weight: 700;
      color: var(--m2r-secondary);
      margin-bottom: 4px;
    }
    .m2r-stat-subtext {
      font-size: 0.82rem;
      color: var(--m2r-muted);
    }

    /* Content Cards & Layouts */
    .m2r-content-grid-2col {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 36px;
      align-items: center;
      margin-bottom: 40px;
    }
    .m2r-image-wrapper {
      position: relative;
      border-radius: var(--m2r-radius);
      overflow: hidden;
      box-shadow: var(--m2r-shadow-md);
      border: 1px solid #e2e8f0;
    }
    .m2r-image-wrapper img {
      width: 100%;
      height: 360px;
      object-fit: cover;
      display: block;
      transition: transform 0.4s ease;
    }
    .m2r-image-wrapper:hover img {
      transform: scale(1.03);
    }
    .m2r-image-caption {
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

    .m2r-text-block h3 {
      font-family: 'Outfit', sans-serif;
      font-size: 1.65rem;
      font-weight: 700;
      color: var(--m2r-secondary);
      margin-bottom: 16px;
      line-height: 1.3;
    }
    .m2r-text-block p {
      margin-bottom: 16px;
      color: var(--m2r-slate);
      font-size: 1.02rem;
    }
    .m2r-check-list {
      list-style: none;
      padding: 0;
      margin: 20px 0;
    }
    .m2r-check-list li {
      position: relative;
      padding-left: 28px;
      margin-bottom: 12px;
      font-size: 0.98rem;
      color: var(--m2r-slate);
    }
    .m2r-check-list li::before {
      content: "✔";
      position: absolute;
      left: 0;
      top: 0;
      color: var(--m2r-primary-light);
      font-weight: 800;
      font-size: 1.1rem;
    }

    /* Pricing Table */
    .m2r-pricing-table-wrapper {
      background: #ffffff;
      border-radius: var(--m2r-radius);
      box-shadow: var(--m2r-shadow-md);
      overflow-x: auto;
      border: 1px solid #e2e8f0;
      margin-bottom: 30px;
    }
    .m2r-pricing-table {
      width: 100%;
      border-collapse: collapse;
      min-width: 680px;
      text-align: left;
    }
    .m2r-pricing-table th {
      background: var(--m2r-secondary);
      color: #ffffff;
      padding: 16px 20px;
      font-family: 'Outfit', sans-serif;
      font-size: 0.95rem;
      font-weight: 700;
      letter-spacing: 0.3px;
    }
    .m2r-pricing-table td {
      padding: 16px 20px;
      border-bottom: 1px solid #f1f5f9;
      font-size: 0.95rem;
      color: var(--m2r-slate);
    }
    .m2r-pricing-table tr:hover td {
      background-color: #eff6ff;
    }
    .m2r-price-tag {
      font-weight: 700;
      color: var(--m2r-primary);
      font-size: 1.05rem;
    }

    /* Grid Cards */
    .m2r-card-grid-3 {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 24px;
      margin-bottom: 35px;
    }
    .m2r-feature-card {
      background: #ffffff;
      border-radius: var(--m2r-radius);
      padding: 28px;
      box-shadow: var(--m2r-shadow-sm);
      border: 1px solid #bfdbfe;
      transition: all 0.3s ease;
    }
    .m2r-feature-card:hover {
      box-shadow: var(--m2r-shadow-lg);
      transform: translateY(-4px);
      border-color: var(--m2r-primary-light);
    }
    .m2r-card-icon {
      width: 52px;
      height: 52px;
      background: var(--m2r-primary-tint);
      color: var(--m2r-primary);
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      margin-bottom: 20px;
    }
    .m2r-card-title {
      font-family: 'Outfit', sans-serif;
      font-size: 1.3rem;
      font-weight: 700;
      color: var(--m2r-secondary);
      margin-bottom: 12px;
    }
    .m2r-card-text {
      color: var(--m2r-muted);
      font-size: 0.95rem;
      line-height: 1.65;
    }

    /* Process Flow */
    .m2r-process-timeline {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
      gap: 20px;
      margin-top: 30px;
    }
    .m2r-process-step {
      background: #ffffff;
      border-radius: var(--m2r-radius);
      padding: 24px 20px;
      box-shadow: var(--m2r-shadow-sm);
      border: 1px solid #e2e8f0;
      position: relative;
    }
    .m2r-step-num {
      width: 36px;
      height: 36px;
      background: var(--m2r-primary);
      color: #ffffff;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 800;
      font-size: 0.95rem;
      margin-bottom: 14px;
    }
    .m2r-step-title {
      font-family: 'Outfit', sans-serif;
      font-size: 1.15rem;
      font-weight: 700;
      color: var(--m2r-secondary);
      margin-bottom: 8px;
    }
    .m2r-step-desc {
      font-size: 0.88rem;
      color: var(--m2r-muted);
      line-height: 1.6;
    }

    /* Locality Matrix */
    .m2r-matrix-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 28px;
    }
    .m2r-matrix-box {
      background: #ffffff;
      border-radius: var(--m2r-radius);
      padding: 28px;
      box-shadow: var(--m2r-shadow-sm);
      border: 1px solid #e2e8f0;
    }
    .m2r-matrix-header {
      font-family: 'Outfit', sans-serif;
      font-size: 1.25rem;
      font-weight: 700;
      color: var(--m2r-primary);
      margin-bottom: 16px;
      padding-bottom: 10px;
      border-bottom: 2px solid var(--m2r-primary-tint);
    }
    .m2r-tags-cloud {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
    }
    .m2r-loc-tag {
      background: #eff6ff;
      color: #1e3a8a;
      padding: 6px 14px;
      border-radius: 6px;
      font-size: 0.86rem;
      font-weight: 600;
      border: 1px solid #bfdbfe;
    }

    /* FAQ Accordion */
    .m2r-faq-list {
      max-width: 900px;
      margin: 0 auto;
    }
    .m2r-faq-item {
      background: #ffffff;
      border-radius: var(--m2r-radius);
      margin-bottom: 16px;
      border: 1px solid #e2e8f0;
      box-shadow: var(--m2r-shadow-sm);
      overflow: hidden;
    }
    .m2r-faq-question {
      padding: 20px 24px;
      font-family: 'Outfit', sans-serif;
      font-size: 1.12rem;
      font-weight: 700;
      color: var(--m2r-secondary);
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: background-color 0.2s ease;
    }
    .m2r-faq-question:hover {
      background-color: #eff6ff;
      color: var(--m2r-primary);
    }
    .m2r-faq-answer {
      padding: 0 24px 20px;
      color: var(--m2r-slate);
      font-size: 0.98rem;
      line-height: 1.7;
    }

    /* Navigation Cluster Module */
    .m2r-cluster-box {
      background: #ffffff;
      border-radius: var(--m2r-radius);
      padding: 32px;
      box-shadow: var(--m2r-shadow-sm);
      border: 1px solid #e2e8f0;
      margin-top: 40px;
    }
    .m2r-cluster-title {
      font-family: 'Outfit', sans-serif;
      font-size: 1.35rem;
      font-weight: 700;
      color: var(--m2r-secondary);
      margin-bottom: 18px;
    }
    .m2r-links-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
      gap: 12px;
    }
    .m2r-cluster-link {
      display: block;
      padding: 10px 14px;
      background: #f8fafc;
      border-radius: 8px;
      color: var(--m2r-slate);
      text-decoration: none;
      font-size: 0.9rem;
      font-weight: 600;
      border: 1px solid #e2e8f0;
      transition: all 0.2s ease;
    }
    .m2r-cluster-link:hover {
      background: var(--m2r-primary-tint);
      color: var(--m2r-primary-dark);
      border-color: #bfdbfe;
      transform: translateX(3px);
    }

    /* Bottom Instant CTA */
    .m2r-bottom-cta {
      background: linear-gradient(135deg, #172554 0%, #0f172a 100%);
      color: #ffffff;
      text-align: center;
      padding: 50px 20px;
      border-radius: var(--m2r-radius);
      margin: 50px auto 0;
      box-shadow: var(--m2r-shadow-lg);
    }
    .m2r-bottom-cta h3 {
      font-family: 'Outfit', sans-serif;
      font-size: 2.1rem;
      font-weight: 800;
      margin-bottom: 14px;
      color: #ffffff;
    }
    .m2r-bottom-cta p {
      font-size: 1.05rem;
      color: #dbeafe;
      max-width: 720px;
      margin: 0 auto 28px;
    }

    @media (max-width: 900px) {
      .m2r-hero-title {
        font-size: 2.2rem;
      }
      .m2r-content-grid-2col {
        grid-template-columns: 1fr;
      }
      .m2r-matrix-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body class="m2r-page-wrapper">

<?php include_once __DIR__ . '/includes/header.php'; ?>

<!-- Hero Section -->
<section class="m2r-hero-section">
  <div class="m2r-hero-container">
    <div class="m2r-hero-tagline">
      <span>India’s Financial Capital to Jharkhand Capital</span> • Express 4-Day Linehaul
    </div>
    <h1 class="m2r-hero-title">
      Mumbai to Ranchi <span>Packers and Movers</span>
    </h1>
    <p class="m2r-hero-desc">
      Relocate with absolute peace of mind across 1,550 kilometers from the Mumbai Metropolitan Region (South Mumbai, Western Suburbs, Powai, Thane, Navi Mumbai) to Ranchi. Shree Ashirwad Packers and Movers provides premier long-distance shifting via the ultra-modern Samruddhi Mahamarg and NH-53 / NH-43 expressways. Experience guaranteed 72 to 96-hour delivery with dual-driver relay crews, coastal humidity barrier packaging, official BKC and Naval defense transfer reimbursement bills, and dedicated sealed GPS-tracked closed container trucks.
    </p>

    <!-- Route Pills -->
    <div class="m2r-pills-row">
      <div class="m2r-pill">
        <span class="m2r-pill-icon">⚡</span> 72–96 Hr Express Linehaul
      </div>
      <div class="m2r-pill">
        <span class="m2r-pill-icon">🛣️</span> Samruddhi Mahamarg Transit
      </div>
      <div class="m2r-pill">
        <span class="m2r-pill-icon">📑</span> BKC & Corporate Claim Invoices
      </div>
      <div class="m2r-pill">
        <span class="m2r-pill-icon">🛡️</span> Zero-Transshipment Weatherproof Fleet
      </div>
      <div class="m2r-pill">
        <span class="m2r-pill-icon">🏷️</span> Full Marine Transit Insurance
      </div>
    </div>

    <!-- Action Buttons -->
    <div class="m2r-hero-cta">
      <a href="tel:+918409531615" class="m2r-btn-primary">
        📞 Call +91-8409531615
      </a>
      <a href="tel:+919835565233" class="m2r-btn-secondary">
        📱 WhatsApp +91-9835565233
      </a>
    </div>
  </div>
</section>

<!-- Corridor Snapshot Cards -->
<section class="m2r-section" style="padding-top: 0; padding-bottom: 20px;">
  <div class="m2r-container">
    <div class="m2r-stats-grid">
      <div class="m2r-stat-card">
        <div class="m2r-stat-number">1,550 KM</div>
        <div class="m2r-stat-label">Highway Distance</div>
        <div class="m2r-stat-subtext">Direct via Samruddhi / NH-53 / NH-43</div>
      </div>
      <div class="m2r-stat-card">
        <div class="m2r-stat-number">72 - 96 Hrs</div>
        <div class="m2r-stat-label">Linehaul Transit</div>
        <div class="m2r-stat-subtext">Dual-driver relay, 3 to 4 days</div>
      </div>
      <div class="m2r-stat-card">
        <div class="m2r-stat-number">100% Closed</div>
        <div class="m2r-stat-label">Dedicated Containers</div>
        <div class="m2r-stat-subtext">Zero transshipment, single-point seal</div>
      </div>
      <div class="m2r-stat-card">
        <div class="m2r-stat-number">IBA & GST</div>
        <div class="m2r-stat-label">Employer Compliant</div>
        <div class="m2r-stat-subtext">SAC 9965/9967 BKC/Defense claim bills</div>
      </div>
    </div>
  </div>
</section>

<!-- Section 1: Corridor Logistics & Route Overview -->
<section class="m2r-section m2r-section-alt">
  <div class="m2r-container">
    <div class="m2r-section-header">
      <span class="m2r-badge">Corridor Architecture</span>
      <h2 class="m2r-section-title">Engineered Mumbai to Ranchi Long-Haul Logistics & Navigation</h2>
      <p class="m2r-section-subtitle">
        Traversing India’s premier financial hub to Jharkhand’s mineral plateau via high-speed access-controlled expressways, specialized vehicle relay operations, and live satellite tracking.
      </p>
    </div>

    <div class="m2r-content-grid-2col">
      <div class="m2r-text-block">
        <h3>1,550-Km Linehaul Navigation via Samruddhi Mahamarg and NH-53</h3>
        <p>
          Relocating home and corporate assets from Mumbai to Ranchi involves covering approximately 1,520 to 1,580 kilometers. Departing the Mumbai Metropolitan Region via the Eastern Express Highway through Thane and Bhiwandi, our linehaul trucks join the world-class Hindu Hrudaysamrat Balasaheb Thackeray Maharashtra Samruddhi Mahamarg near Igatpuri and Nashik. This cutting-edge 6-lane access-controlled expressway bypasses Chhatrapati Sambhajinagar (Aurangabad), Jalna, and Amravati, saving 6 to 8 hours of driving time to Nagpur.
        </p>
        <p>
          From the Nagpur bypass, our container fleet transitions onto National Highway 53 (Asian Highway 46), crossing through Bhandara, Durg, and Raipur in Chhattisgarh. Continuing north-east via Bilaspur, our trucks merge onto National Highway 43 through Ambikapur, entering Jharkhand via Gumla and ascending straight into Ranchi’s municipal ring road. With two certified commercial drivers operating in continuous rotations, our sealed closed container trucks guarantee arrival in Ranchi within 72 to 96 hours without intermediate transshipment delays.
        </p>
        <ul class="m2r-check-list">
          <li><strong>Samruddhi Mahamarg Speed Corridor:</strong> High-speed expressway transit between Mumbai and Nagpur slashing transit delays and vehicle vibrations.</li>
          <li><strong>Dual-Driver Continuous Relays:</strong> Non-stop linehaul progression with rotational driver rest ensuring safety and schedule adherence.</li>
          <li><strong>Zero Hub Transshipment:</strong> Your belongings are packed and sealed inside a dedicated steel container in Mumbai and opened only at your Ranchi home.</li>
          <li><strong>Live Satellite Telemetry:</strong> 24/7 GPS coordinates and automated checkpoint arrival notifications shared throughout the journey.</li>
        </ul>
      </div>

      <div class="m2r-image-wrapper">
        <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Mumbai to Ranchi Packers and Movers - Closed linehaul container truck on Samruddhi expressway">
        <div class="m2r-image-caption">
          Heavy-duty 1,550-km interstate linehaul container truck operating the Mumbai to Ranchi expressway corridor.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 2: Transparent Price Schedule -->
<section class="m2r-section">
  <div class="m2r-container">
    <div class="m2r-section-header">
      <span class="m2r-badge">Honest Estimates</span>
      <h2 class="m2r-section-title">Transparent Mumbai to Ranchi Moving Tariff Schedule</h2>
      <p class="m2r-section-subtitle">
        Zero hidden costs, no surprise multi-state toll charges, and upfront written binding contracts. Review our standardized pricing structure for apartments, luxury residences, and auto carriers.
      </p>
    </div>

    <div class="m2r-pricing-table-wrapper">
      <table class="m2r-pricing-table">
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
            <td>1,520 - 1,580 km (Samruddhi / NH-53)</td>
            <td>Standard 3-Layer + Heavy Corrugated Cartons</td>
            <td><span class="m2r-price-tag">₹17,000 - ₹28,000</span></td>
            <td>3 - 4 Days (72-96 Hrs)</td>
          </tr>
          <tr>
            <td><strong>2 BHK Apartment Standard Move</strong></td>
            <td>1,520 - 1,580 km (Samruddhi / NH-53)</td>
            <td>Premium 4-Layer (Bubble + Foam + Stretch Film)</td>
            <td><span class="m2r-price-tag">₹27,000 - ₹40,000</span></td>
            <td>3 - 4 Days (72-96 Hrs)</td>
          </tr>
          <tr>
            <td><strong>3 BHK Executive Residence Move</strong></td>
            <td>1,520 - 1,580 km (Samruddhi / NH-53)</td>
            <td>Executive 5-Layer Defense + Edge Armor</td>
            <td><span class="m2r-price-tag">₹38,000 - ₹58,000</span></td>
            <td>Dedicated Container Fleet</td>
          </tr>
          <tr>
            <td><strong>4 BHK / Penthouse / Duplex Villa</strong></td>
            <td>1,520 - 1,580 km (Samruddhi / NH-53)</td>
            <td>Heavy-Duty Crating + Full Dismantling & Setup</td>
            <td><span class="m2r-price-tag">₹48,000 - ₹72,000</span></td>
            <td>Dedicated Multi-Axle Container</td>
          </tr>
          <tr>
            <td><strong>Two-Wheeler / Motorbike Shifting</strong></td>
            <td>Dedicated Linehaul Parcel</td>
            <td>Bubble Wrap + Fork Covers + Floor Lashings</td>
            <td><span class="m2r-price-tag">₹4,800 - ₹8,200</span></td>
            <td>3 - 5 Days</td>
          </tr>
          <tr>
            <td><strong>Car Carrier (Sedan / Premium SUV)</strong></td>
            <td>Enclosed Hydraulic Auto Carrier</td>
            <td>Wheel Chocks + Anti-Scratch Film + Insurance</td>
            <td><span class="m2r-price-tag">₹15,000 - ₹26,000</span></td>
            <td>4 - 6 Days</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div style="background: #eff6ff; border-left: 4px solid var(--m2r-primary); padding: 18px 24px; border-radius: 0 8px 8px 0; font-size: 0.95rem; color: #1e3a8a;">
      <strong>Note on Rate Determinants:</strong> Individual relocation quotes are computed based on overall cubic feet inventory volume, service elevator accessibility in high-rise Mumbai gated complexes (Powai, Lower Parel, Bandra, Thane), specialized wooden crating for Italian marble tops, curved LED televisions, or delicate chandeliers, and declared goods valuation for comprehensive all-risk marine transit insurance.
    </div>
  </div>
</section>

<!-- Section 3: Specialized Corporate, Naval Defense & High-Rise Relocation Advisory -->
<section class="m2r-section m2r-section-alt">
  <div class="m2r-container">
    <div class="m2r-section-header">
      <span class="m2r-badge">Specialized Demographics</span>
      <h2 class="m2r-section-title">Corporate, Defense & High-Rise MMR Relocation Expertise</h2>
      <p class="m2r-section-subtitle">
        Engineered moving solutions designed specifically for financial executives, naval defense officers, media creatives, and families moving from high-rise coastal residential towers.
      </p>
    </div>

    <div class="m2r-card-grid-3">
      <!-- Card 1: BKC & Financial Corporate -->
      <div class="m2r-feature-card">
        <div class="m2r-card-icon">💼</div>
        <h3 class="m2r-card-title">BKC & Financial Corporate Relocations</h3>
        <p class="m2r-card-text">
          Senior bankers, investment analysts, and corporate executives moving from Bandra-Kurla Complex (BKC), Nariman Point, and Lower Parel corporate towers to regional offices in Ranchi rely on our audit-compliant documentation. We furnish official GST SAC 9965/9967 invoices, IBA-approved bilty consignment notes, transit insurance policies, and itemized inventory lists approved across major corporate finance departments.
        </p>
      </div>

      <!-- Card 2: Western Naval Command & Defense -->
      <div class="m2r-feature-card">
        <div class="m2r-card-icon">⚓</div>
        <h3 class="m2r-card-title">Western Naval Command & Defense Postings</h3>
        <p class="m2r-card-text">
          Serving Naval and Armed Forces personnel rotating from Western Naval Command (Colaba / INS Angre / Navy Nagar), Army HQ Maharashtra & Gujarat Area, and defense installations to Dipatoli Cantonment and Namkum Military Station Ranchi. We issue official defense-compliant documentation meeting Cantonment reimbursement criteria.
        </p>
      </div>

      <!-- Card 3: Coastal Moisture Defense -->
      <div class="m2r-feature-card">
        <div class="m2r-card-icon">🌊</div>
        <h3 class="m2r-card-title">Coastal Marine Moisture Barrier Shield</h3>
        <p class="m2r-card-text">
          Mumbai’s coastal humidity and monsoon rains require specialized packaging. We wrap wooden wardrobes, leather upholstery, and electronic components in breathable virgin EPE foam underlayers, sealed exterior waterproof stretch wrap, and place industrial silica-gel desiccant packs inside cartons to prevent mildew or corrosion during the 1,550-km transit.
        </p>
      </div>

      <!-- Card 4: High-Rise MMR Society Coordination -->
      <div class="m2r-feature-card">
        <div class="m2r-card-icon">🏙️</div>
        <h3 class="m2r-card-title">High-Rise MMR Society Move-Out Mastery</h3>
        <p class="m2r-card-text">
          Operating across high-rise residential towers in Powai (Hiranandani), Bandra, Lower Parel, and Thane West requires strict compliance with Resident Welfare Association rules. Our trained crews coordinate elevator reservations, lay protective rubber floor mats across corridors, use corner bumpers during bulky furniture handling, and operate within approved society move-out time windows.
        </p>
      </div>

      <!-- Card 5: Media & Creative Studios -->
      <div class="m2r-feature-card">
        <div class="m2r-card-icon">🎬</div>
        <h3 class="m2r-card-title">Media, Studio & Creative Asset Packing</h3>
        <p class="m2r-card-text">
          Media professionals and filmmakers relocating from Andheri West, Juhu, and Goregaon trust our high-value gear packing. We pack cinema cameras, lighting rigs, high-end editing workstations, soundboards, and studio instruments in shock-absorbing air-bubble wrap and customized reinforced wooden crates.
        </p>
      </div>

      <!-- Card 6: Returning Families & Permanent Shifting -->
      <div class="m2r-feature-card">
        <div class="m2r-card-icon">🏡</div>
        <h3 class="m2r-card-title">Returning Families & Independent Homes</h3>
        <p class="m2r-card-text">
          Families concluding long professional careers in Mumbai and returning to their spacious ancestral homes and independent bungalows in Ranchi benefit from turnkey shifting, door-to-door transit, complete unpacking, and full furniture placement upon arrival.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Section 4: 5-Layer Defensive Packaging Shield -->
<section class="m2r-section">
  <div class="m2r-container">
    <div class="m2r-section-header">
      <span class="m2r-badge">Packaging Technology</span>
      <h2 class="m2r-section-title">The 5-Layer Defensive Packaging Shield</h2>
      <p class="m2r-section-subtitle">
        Engineered protective packaging shielding your furniture, home electronics, fragile chinaware, and personal effects against transit shocks over 1,550 kilometers of highway.
      </p>
    </div>

    <div class="m2r-content-grid-2col">
      <div class="m2r-image-wrapper">
        <img src="<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg" alt="Mumbai to Ranchi Packers and Movers - Furniture protective wrapping">
        <div class="m2r-image-caption">
          Multi-layer foam wrapping, corner angle guards, and heavy stretch film applied to wooden workstations and bedroom furnishings.
        </div>
      </div>

      <div class="m2r-text-block">
        <h3>Industrial-Grade Packing Materials for Absolute Safety</h3>
        <p>
          Long-distance transit between Mumbai and Ranchi crosses three states, requiring materials specifically tested for abrasion resistance, vibration absorption, and climate resilience. We use exclusively virgin industrial-grade packing materials rather than recycled cartons:
        </p>
        <ul class="m2r-check-list">
          <li><strong>Layer 1 - Anti-Scratch Virgin EPE Foam:</strong> Soft protective underlay applied directly to polished wood, glass, and automotive paint surfaces to prevent micro-abrasions.</li>
          <li><strong>Layer 2 - Multi-Cell Air Bubble Film:</strong> Heavy shock-dampening air bubble cushioning absorbing mechanical highway vibrations and abrupt vehicle deceleration forces.</li>
          <li><strong>Layer 3 - 5-Ply Corner Angle Armor:</strong> Compressed cardboard V-profile edge protectors safeguarding table corners, wardrobe rims, and display cabinets from edge collisions.</li>
          <li><strong>Layer 4 - Double-Wall Corrugated Cartons:</strong> Heavy-duty 7-ply outer cartons for books, crockery, appliances, and kitchenware, sealed with moisture-resistant PVC tape.</li>
          <li><strong>Layer 5 - Weatherproof Stretch Wrap:</strong> High-tensile clear stretch film binding packed goods hermetically, shielding against rain, coastal salt air, and dust.</li>
        </ul>
      </div>
    </div>

    <!-- Second Showcase Grid for Crockery & Appliances -->
    <div class="m2r-content-grid-2col" style="margin-top: 50px;">
      <div class="m2r-text-block">
        <h3>Delicate Chinaware Boxing & Heavy Appliance Jackets</h3>
        <p>
          Fine porcelain dinner sets, crystal barware, ceramic art pieces, and delicate chinaware receive individual tissue interleaving and dual air-bubble pouches before being packed into cellular compartmentalized boxes.
        </p>
        <p>
          Heavy household appliances—including double-door refrigerators, front-load washing machines, microwave ovens, and large LED televisions—are encased in custom-padded heavy canvas jackets, with drum locking pins installed to protect delicate internal suspensions during highway motion.
        </p>
        <ul class="m2r-check-list">
          <li><strong>Heavy Quilted Canvas Jackets:</strong> Custom reusable padded jackets protecting washing machines and refrigerators from transit impact.</li>
          <li><strong>Custom TV Wooden Crating:</strong> Rigid reinforced wooden crating constructed on-site for 55-inch to 85-inch flat-screen televisions with interior foam cushions.</li>
          <li><strong>Numbered Inventory Barcoding:</strong> Every carton and furniture item is cataloged on a dual-copy manifest for 100% loss-prevention verification upon arrival.</li>
        </ul>
      </div>

      <div class="m2r-image-wrapper">
        <img src="<?php echo SITE_BASE_URL; ?>/images/kitchen-crockery-bubble-packing-ranchi.jpg" alt="Mumbai to Ranchi Packers and Movers - Kitchen crockery bubble wrapping">
        <div class="m2r-image-caption">
          Individual bubble-wrapping and compartmentalized boxing for delicate chinaware and kitchen ceramics.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 5: The 5-Stage Systematic Relocation Process -->
<section class="m2r-section m2r-section-alt">
  <div class="m2r-container">
    <div class="m2r-section-header">
      <span class="m2r-badge">Execution Blueprint</span>
      <h2 class="m2r-section-title">The 5-Stage Mumbai to Ranchi Relocation Journey</h2>
      <p class="m2r-section-subtitle">
        From your initial booking consultation in Mumbai to the final reassembly of furniture in Ranchi, our structured methodology guarantees a smooth long-haul moving experience.
      </p>
    </div>

    <div class="m2r-process-timeline">
      <div class="m2r-process-step">
        <div class="m2r-step-num">1</div>
        <h3 class="m2r-step-title">Pre-Move Survey</h3>
        <p class="m2r-step-desc">
          Complimentary physical home survey in Mumbai or rapid video inventory audit. We calculate volume, assess society elevator logistics, evaluate approach roads, and issue a transparent written quote.
        </p>
      </div>

      <div class="m2r-process-step">
        <div class="m2r-step-num">2</div>
        <h3 class="m2r-step-title">Defensive Packaging</h3>
        <p class="m2r-step-desc">
          Our certified packing team arrives with complete packing supplies. Furniture is dismantled, electronics are cushioned, delicate chinaware is wrapped, and all cartons are cataloged on the inventory sheet.
        </p>
      </div>

      <div class="m2r-process-step">
        <div class="m2r-step-num">3</div>
        <h3 class="m2r-step-title">Direct Sealed Linehaul</h3>
        <p class="m2r-step-desc">
          Your shipment is loaded into our dedicated closed container truck, secured with internal nylon wall lashings, locked, and sealed with a numbered tamper-evident seal before departing via Samruddhi Mahamarg.
        </p>
      </div>

      <div class="m2r-process-step">
        <div class="m2r-step-num">4</div>
        <h3 class="m2r-step-title">Express Highway Transit</h3>
        <p class="m2r-step-desc">
          The container truck navigates through Aurangabad, Nagpur, Raipur, and Ambikapur with dual-driver relay crews under continuous GPS tracking, completing the 1,550-km journey in 72 to 96 hours.
        </p>
      </div>

      <div class="m2r-process-step">
        <div class="m2r-step-num">5</div>
        <h3 class="m2r-step-title">Doorstep Setup in Ranchi</h3>
        <p class="m2r-step-desc">
          Upon arrival at your Ranchi residence, our crew unloads, unboxes, reassembles beds and dining tables, places furniture in designated rooms, and hauls away all packaging debris.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Section 6: Dual-City Locality Matrix -->
<section class="m2r-section">
  <div class="m2r-container">
    <div class="m2r-section-header">
      <span class="m2r-badge">Coverage Map</span>
      <h2 class="m2r-section-title">Comprehensive Pickup in Mumbai & Doorstep Delivery in Ranchi</h2>
      <p class="m2r-section-subtitle">
        We serve every neighborhood, gated township, and residential zone across the Mumbai Metropolitan Region, connecting directly with all residential sectors in Ranchi.
      </p>
    </div>

    <div class="m2r-matrix-grid">
      <!-- Mumbai Pickup Localities -->
      <div class="m2r-matrix-box">
        <h3 class="m2r-matrix-header">📍 Mumbai Metropolitan Pickup Zones</h3>
        <div class="m2r-tags-cloud">
          <span class="m2r-loc-tag">South Mumbai (Colaba, Nariman Point, Marine Drive)</span>
          <span class="m2r-loc-tag">Lower Parel & Prabhadevi</span>
          <span class="m2r-loc-tag">Bandra West & Bandra-Kurla Complex (BKC)</span>
          <span class="m2r-loc-tag">Andheri East & Andheri West</span>
          <span class="m2r-loc-tag">Juhu & Vile Parle</span>
          <span class="m2r-loc-tag">Goregaon & Malad</span>
          <span class="m2r-loc-tag">Kandivali & Borivali West</span>
          <span class="m2r-loc-tag">Powai & Hiranandani Gardens</span>
          <span class="m2r-loc-tag">Ghatkopar & Mulund West</span>
          <span class="m2r-loc-tag">Thane West & Ghodbunder Road</span>
          <span class="m2r-loc-tag">Navi Mumbai (Vashi, Nerul, Belapur)</span>
          <span class="m2r-loc-tag">Kharghar & Panvel</span>
          <span class="m2r-loc-tag">Chembur & Wadala</span>
          <span class="m2r-loc-tag">Dadar & Mahim</span>
        </div>
      </div>

      <!-- Ranchi Drop Localities -->
      <div class="m2r-matrix-box">
        <h3 class="m2r-matrix-header">📍 Ranchi Residential Delivery Zones</h3>
        <div class="m2r-tags-cloud">
          <span class="m2r-loc-tag">Harmu Housing Colony</span>
          <span class="m2r-loc-tag">Morabadi & Tagore Hill</span>
          <span class="m2r-loc-tag">Bariatu & Booty Road</span>
          <span class="m2r-loc-tag">Lalpur & Circular Road</span>
          <span class="m2r-loc-tag">Doranda & AG Colony</span>
          <span class="m2r-loc-tag">Ashok Nagar & Kadru</span>
          <span class="m2r-loc-tag">Namkum & Tata Road</span>
          <span class="m2r-loc-tag">Kanke Road & CMPDI</span>
          <span class="m2r-loc-tag">Kathal More & Argora</span>
          <span class="m2r-loc-tag">Birsa Chowk & Hatia</span>
          <span class="m2r-loc-tag">Dhurwa & HEC Sector</span>
          <span class="m2r-loc-tag">CCL Darbhanga House</span>
          <span class="m2r-loc-tag">Dipatoli Army Cantonment</span>
          <span class="m2r-loc-tag">Ratu Road & Pandra</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 7: Two-Wheeler & Car Carrier Transport -->
<section class="m2r-section pu2r-section-alt">
  <div class="m2r-container">
    <div class="m2r-section-header">
      <span class="m2r-badge">Vehicle Logistics</span>
      <h2 class="m2r-section-title">Dedicated Two-Wheeler Parcel & Enclosed Car Carrier Service</h2>
      <p class="m2r-section-subtitle">
        Relocate your commuter scooter, touring motorcycle, or family car with zero driving wear-and-tear across 1,550 kilometers of national highway.
      </p>
    </div>

    <div class="m2r-content-grid-2col">
      <div class="m2r-image-wrapper">
        <img src="<?php echo SITE_BASE_URL; ?>/images/household-appliances-protective-cover-ranchi.jpg" alt="Mumbai to Ranchi Packers and Movers - Vehicle protective packing gear">
        <div class="m2r-image-caption">
          Custom vehicle wrapping, fork protectors, and heavy padded covers for vehicle transit.
        </div>
      </div>

      <div class="m2r-text-block">
        <h3>Safe, Scratch-Free Vehicle Relocation from Mumbai to Ranchi</h3>
        <p>
          Riding a two-wheeler or driving a car over 1,550 kilometers through multi-state toll booths, ghat sections, and heavy industrial freight traffic causes significant odometer wear, mechanical stress, and road hazards. Shree Ashirwad Packers and Movers provides professional automobile shipping ensuring showroom-condition delivery in Ranchi.
        </p>
        <p>
          Two-wheelers receive complete defensive packaging: fuel tanks are drained to safety thresholds, mirrors are detached and wrapped, suspension forks are encased in corrugated sleeves, and wheels are secured to container floor tracks with industrial nylon ratchet tie-downs.
        </p>
        <ul class="m2r-check-list">
          <li><strong>Enclosed Hydraulic Car Carriers:</strong> Multi-car covered carriers protecting passenger cars from flying stone chips, road debris, and weather.</li>
          <li><strong>Digital Vehicle Inspection Report:</strong> Photo-documented condition report recording odometer reading and minor prior blemishes before loading.</li>
          <li><strong>Comprehensive Marine Transit Insurance:</strong> All-risk coverage protecting against road accidents, collisions, and transit damage.</li>
          <li><strong>Doorstep Delivery:</strong> Convenient pickup from your Mumbai apartment and direct delivery to your Ranchi residence driveway.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Section 8: Frequently Asked Questions (FAQ) -->
<section class="m2r-section">
  <div class="m2r-container">
    <div class="m2r-section-header">
      <span class="m2r-badge">Frequently Asked Questions</span>
      <h2 class="m2r-section-title">Common Questions About Moving from Mumbai to Ranchi</h2>
      <p class="m2r-section-subtitle">
        Clear, factual answers regarding pricing across 1,550 km, transit duration, BKC corporate and defense claim paperwork, and vehicle shipping.
      </p>
    </div>

    <div class="m2r-faq-list">
      <div class="m2r-faq-item">
        <div class="m2r-faq-question">
          <span>How much does household shifting cost from Mumbai to Ranchi?</span>
          <span>➕</span>
        </div>
        <div class="m2r-faq-answer">
          Household shifting charges from Mumbai to Ranchi typically range from ₹17,000 to ₹28,000 for a 1 BHK apartment, ₹27,000 to ₹40,000 for a 2 BHK apartment, and ₹38,000 to ₹58,000 for a 3 BHK residence. For large 4 BHK penthouses or duplex villas, quotes range from ₹48,000 to ₹72,000. Transparent pricing depends on cubic feet volume, high-rise service elevator availability in Mumbai gated societies (Powai, Lower Parel, Bandra, Thane), packing tier, and vehicle carrier inclusions.
        </div>
      </div>

      <div class="m2r-faq-item">
        <div class="m2r-faq-question">
          <span>What is the expected transit duration for a moving truck from Mumbai to Ranchi?</span>
          <span>➕</span>
        </div>
        <div class="m2r-faq-answer">
          The highway distance between Mumbai and Ranchi is approximately 1,520 to 1,580 km. Our container trucks travel via the high-speed Samruddhi Mahamarg to Nagpur, continuing through Raipur and Ambikapur into Ranchi along NH-53 and NH-43. With dual-driver relay crews, our dedicated closed-container trucks complete the journey within 72 to 96 hours (3 to 4 days), guaranteeing doorstep delivery at your Ranchi residence.
        </div>
      </div>

      <div class="m2r-faq-item">
        <div class="m2r-faq-question">
          <span>Do you provide official reimbursement bills for Corporate, Banking, and Defense transfers?</span>
          <span>➕</span>
        </div>
        <div class="m2r-faq-answer">
          Yes, Shree Ashirwad Packers and Movers specializes in corporate, banking, and defense relocation billing. We furnish 100% employer-approved documentation packets for financial institutions (RBI, SBI Corporate Centre, HDFC, ICICI), corporate headquarters (Tata Sons, Reliance, Aditya Birla), and Armed Forces personnel (Western Naval Command Mumbai). Our billing includes GST invoices (SAC 9965/9967), IBA-approved bilty consignment notes, itemized inventory sheets, money receipts, and transit insurance policies.
        </div>
      </div>

      <div class="m2r-faq-item">
        <div class="m2r-faq-question">
          <span>How do you coordinate moves from high-rise societies in Mumbai, Thane, and Navi Mumbai?</span>
          <span>➕</span>
        </div>
        <div class="m2r-faq-answer">
          Our Mumbai operations team coordinates directly with society estate managers and Resident Welfare Associations (RWAs) across South Mumbai, Powai, Bandra, Thane West, and Navi Mumbai (Kharghar, Vashi). We manage move-out gate passes, schedule service elevator time slots, lay protective rubber floor runners across lobbies, and deploy small feeder shuttle vans if basement height restrictions prevent large container entry.
        </div>
      </div>

      <div class="m2r-faq-item">
        <div class="m2r-faq-question">
          <span>How do you protect household goods against coastal Mumbai humidity and transit rain?</span>
          <span>➕</span>
        </div>
        <div class="m2r-faq-answer">
          We apply tailored moisture-barrier packaging to combat coastal marine humidity. Wooden furnishings, leather sofas, and electronic appliances are encased in breathable virgin EPE foam underlayers, bound with airtight waterproof stretch film, and packed alongside desiccant silica gel sachets. Our all-weather closed steel containers feature rubber-gasketed doors that prevent any rain or moisture ingress during highway transit.
        </div>
      </div>

      <div class="m2r-faq-item">
        <div class="m2r-faq-question">
          <span>Can I transport my motorcycle or car alongside household goods from Mumbai to Ranchi?</span>
          <span>➕</span>
        </div>
        <div class="m2r-faq-answer">
          Yes, we operate dedicated two-wheeler parcel services and enclosed hydraulic car carriers between Mumbai and Ranchi. Motorbikes receive complete defensive packaging with fork protectors, bubble wrap, mirror detachment, and floor ratchet lashings. Passenger cars are moved in enclosed hydraulic car carriers with wheel chocks under comprehensive all-risk transit insurance.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 9: Cluster Navigation Module -->
<section class="m2r-section m2r-section-alt" style="padding-top: 30px;">
  <div class="m2r-container">
    <div class="m2r-cluster-box">
      <h3 class="m2r-cluster-title">Explore Related Interstate & Regional Moving Corridors</h3>
      <div class="m2r-links-grid">
        <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi" class="m2r-cluster-link">
          📍 Ranchi Movers Headquarters
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/pune-to-ranchi-packers-and-movers" class="m2r-cluster-link">
          🚚 Pune to Ranchi Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/bangalore-to-ranchi-packers-and-movers" class="m2r-cluster-link">
          🚚 Bangalore to Ranchi Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/delhi-to-ranchi-packers-and-movers" class="m2r-cluster-link">
          🚚 Delhi to Ranchi Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/kolkata-to-ranchi-packers-and-movers" class="m2r-cluster-link">
          🚚 Kolkata to Ranchi Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/patna-to-ranchi-packers-and-movers" class="m2r-cluster-link">
          🚚 Patna to Ranchi Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-bhopal-packers-and-movers" class="m2r-cluster-link">
          🚚 Ranchi to Bhopal Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-bilaspur-packers-and-movers" class="m2r-cluster-link">
          🚚 Ranchi to Bilaspur Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-prayagraj-packers-and-movers" class="m2r-cluster-link">
          🚚 Ranchi to Prayagraj Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-varanasi-packers-and-movers" class="m2r-cluster-link">
          🚚 Ranchi to Varanasi Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-cuttack-packers-and-movers" class="m2r-cluster-link">
          🚚 Ranchi to Cuttack Movers
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/pricing" class="m2r-cluster-link">
          💰 Relocation Cost Calculator
        </a>
      </div>
    </div>

    <!-- Final Call to Action -->
    <div class="m2r-bottom-cta">
      <h3>Ready to Move from Mumbai to Ranchi?</h3>
      <p>
        Get an upfront written quotation, free home survey, and dedicated linehaul truck booking with Shree Ashirwad Packers and Movers. Experience stress-free relocation with guaranteed on-time delivery.
      </p>
      <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:+918409531615" class="m2r-btn-primary" style="background: #ffffff; color: #172554;">
          📞 Call +91-8409531615
        </a>
        <a href="tel:+919835565233" class="m2r-btn-secondary" style="border-color: #ffffff; color: #ffffff;">
          📱 WhatsApp +91-9835565233
        </a>
      </div>
    </div>
  </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>

</body>
</html>
