<?php
/**
 * Professional Packers and Movers in Ranchi - Shree Ashirwad Packers and Movers
 * Pure Core PHP Implementation
 * 
 * Target URL: https://www.shreeashirwadpackers.com/professional-packers-and-movers-in-ranchi
 * Target Keyword: professional packers and movers in ranchi
 * Title: Professional Packers and Movers in Ranchi - 8409531615
 * Focus: Gold Standard Relocation, Background-Verified Crew, IBA Approved Billing, GPS Fleet & Zero Hidden Cost
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$page_title = "Professional Packers and Movers in Ranchi - 8409531615 | Shree Ashirwad Packers";
$page_description = "Hire top-rated professional packers and movers in Ranchi by Shree Ashirwad. Certified background-checked crew, 5-layer packing, IBA approved bills & GPS container trucks. Call 8409531615.";
$canonical_url = PRODUCTION_CANONICAL_DOMAIN . "/professional-packers-and-movers-in-ranchi";
$meta_keywords = "professional packers and movers in ranchi, professional movers ranchi, best packers and movers in ranchi, certified packers and movers ranchi, top moving company ranchi, IBA approved packers in ranchi, reliable house shifting ranchi";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title><?php echo $page_title; ?></title>
  <meta name="description" content="<?php echo $page_description; ?>">
  <meta name="keywords" content="<?php echo $meta_keywords; ?>">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <meta name="author" content="<?php echo htmlspecialchars(BUSINESS_NAME, ENT_QUOTES, 'UTF-8'); ?>">
  <link rel="canonical" href="<?php echo $canonical_url; ?>">

  <!-- Open Graph / Facebook / WhatsApp Preview -->
  <meta property="og:locale" content="en_IN">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo $page_title; ?>">
  <meta property="og:description" content="<?php echo $page_description; ?>">
  <meta property="og:url" content="<?php echo $canonical_url; ?>">
  <meta property="og:site_name" content="<?php echo htmlspecialchars(BUSINESS_NAME, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/professional-loading-crew-ranchi.jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="800">
  <meta property="og:image:alt" content="Professional Packers and Movers in Ranchi Shree Ashirwad">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo $page_title; ?>">
  <meta name="twitter:description" content="<?php echo $page_description; ?>">
  <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/professional-loading-crew-ranchi.jpg">

  <!-- Verification & Geo Tags -->
  <meta name="google-site-verification" content="<?php echo htmlspecialchars(GOOGLE_SITE_VERIFICATION, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="theme-color" content="#0f223d">
  <meta name="geo.region" content="IN-JH">
  <meta name="geo.placename" content="Ranchi">
  <meta name="geo.position" content="23.3441;85.3096">
  <meta name="ICBM" content="23.3441, 85.3096">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
  <link rel="shortcut icon" href="<?php echo SITE_BASE_URL; ?>/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">

  <!-- Fonts & Core Stylesheet -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

  <!-- Google Tag Manager / Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo GOOGLE_GTAG_ID; ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '<?php echo GOOGLE_GTAG_ID; ?>');
  </script>

  <!-- Structured Data: MovingCompany Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "MovingCompany",
    "@id": "<?php echo $canonical_url; ?>/#movingcompany",
    "name": "Shree Ashirwad Packers and Movers - Professional Relocation Services Ranchi",
    "alternateName": "Professional Packers and Movers in Ranchi",
    "url": "<?php echo $canonical_url; ?>",
    "logo": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
    "image": "<?php echo SITE_BASE_URL; ?>/images/professional-loading-crew-ranchi.jpg",
    "description": "<?php echo $page_description; ?>",
    "telephone": "+918409531615",
    "email": "enquiry@shreeashirwadpackers.com",
    "priceRange": "₹₹",
    "keywords": "professional packers and movers in ranchi, professional movers ranchi, best packers and movers in ranchi, certified packers and movers ranchi",
    "currenciesAccepted": "INR",
    "paymentAccepted": "Cash, UPI, Net Banking, Cheque",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Harmu Housing Colony, Near Patel Chowk",
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
    "hasMap": "https://maps.google.com/?q=23.3441,85.3096",
    "openingHoursSpecification": [
      {
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
        "opens": "00:00",
        "closes": "23:59"
      }
    ],
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.9",
      "reviewCount": "452",
      "bestRating": "5",
      "worstRating": "1"
    },
    "areaServed": [
      { "@type": "City", "name": "Ranchi" },
      { "@type": "AdministrativeArea", "name": "Harmu" },
      { "@type": "AdministrativeArea", "name": "Morabadi" },
      { "@type": "AdministrativeArea", "name": "Bariatu" },
      { "@type": "AdministrativeArea", "name": "Kanke Road" },
      { "@type": "AdministrativeArea", "name": "Ashok Nagar" },
      { "@type": "AdministrativeArea", "name": "Lalpur" },
      { "@type": "AdministrativeArea", "name": "Doranda" },
      { "@type": "AdministrativeArea", "name": "Argora" },
      { "@type": "AdministrativeArea", "name": "Dhurwa" },
      { "@type": "AdministrativeArea", "name": "HEC Township" },
      { "@type": "AdministrativeArea", "name": "Ratu Road" },
      { "@type": "AdministrativeArea", "name": "Namkum" },
      { "@type": "AdministrativeArea", "name": "Tupudana" },
      { "@type": "AdministrativeArea", "name": "Kokar" },
      { "@type": "AdministrativeArea", "name": "Booty More" },
      { "@type": "AdministrativeArea", "name": "Hatia" }
    ]
  }
  </script>

  <!-- Structured Data: Service Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "@id": "<?php echo $canonical_url; ?>/#service",
    "serviceType": "Professional Packing and Moving Services",
    "name": "Professional Packers and Movers in Ranchi",
    "provider": {
      "@type": "MovingCompany",
      "@id": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/#movingcompany",
      "name": "<?php echo BUSINESS_NAME; ?>",
      "telephone": "+918409531615",
      "url": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/",
      "image": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/assets/images/logo.png",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Anandpuri Chowk, Vidyanagar Road, Harmu",
        "addressLocality": "Ranchi",
        "addressRegion": "Jharkhand",
        "postalCode": "834001",
        "addressCountry": "IN"
      }
    },
    "areaServed": {
      "@type": "City",
      "name": "Ranchi",
      "containedInPlace": {
        "@type": "State",
        "name": "Jharkhand"
      }
    },
    "description": "Certified professional packing and moving services across Ranchi featuring 100% background-verified in-house crew, master carpenter furniture dismantling, multi-layer shock-proof packing, GPS-monitored container fleet, transparent binding contracts, transit insurance, and authentic IBA approved documentation.",
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Professional Relocation Offerings in Ranchi",
      "itemListElement": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Executive Residential Apartment & Villa Shifting in Ranchi"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Corporate MNC & Commercial Office Relocation"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Central Government, PSU & Defense Official Transfer Moving"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "5-Layer Shock-Proof Packaging & Custom Wooden Crating"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "GPS-Tracked All-Weather Closed Container Transportation"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Enclosed Car Carrier & Multi-Layer Bike Parcel Delivery"
          }
        }
      ]
    }
  }
  </script>

  <!-- Structured Data: BreadcrumbList Schema -->
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
        "name": "Services",
        "item": "<?php echo SITE_BASE_URL; ?>/#services"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Professional Packers and Movers in Ranchi",
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
        "name": "What distinguishes professional packers and movers in Ranchi from unorganized local transporters?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Professional packers and movers like Shree Ashirwad employ 100% full-time, background-verified crew members rather than casual daily-wage laborers recruited from street corners. We operate our own company-branded, GPS-tracked closed container fleet, utilize virgin multi-layer industrial packaging materials, provide binding written contracts with zero hidden fees, supply authentic IBA-approved GST documentation for government transfer reimbursements, and provide comprehensive all-risk transit insurance."
        }
      },
      {
        "@type": "Question",
        "name": "How do you protect customers from moving scams, price extortion, and hidden costs in Ranchi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We operate with total pricing transparency. Before accepting any booking, our senior relocation surveyor conducts a detailed physical or video inventory assessment. We provide a computerized, itemized, binding quotation that details all costs: packing materials, carpenter dismantling, labor handling, transport freight, tolls, and taxes. Once agreed upon, our contract guarantees ₹0 hidden fees, meaning our crew will never demand extra money upon arrival or hold your goods hostage."
        }
      },
      {
        "@type": "Question",
        "name": "Are your relocation bills valid for central government, PSU, and bank transfer claims in Ranchi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, absolutely. Shree Ashirwad Packers and Movers is an IBA-approved and ISO 9001:2015 certified moving company. We furnish 100% legitimate GST invoices under SAC Code 996511, stamped consignment notes (Bilty), car carrier receipts, computerized packing lists, and transit insurance certificates. These documents are recognized and approved by Coal India, CMPDI, CCL, HEC, MECON, SAIL, SBI, nationalized banks, Indian Railways, and Central Armed Police Forces (CRPF, CISF)."
        }
      },
      {
        "@type": "Question",
        "name": "What background checks and training do your moving crew members undergo?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Every technician, carpenter, driver, and loader at Shree Ashirwad undergoes thorough identity verification through police background checks, Aadhaar authentication, and drug screening. Our personnel complete rigorous training in scientific lifting ergonomics, delicate glassware packaging, master carpentry assembly, defensive highway driving, and polite customer etiquette before being deployed on any customer project."
        }
      },
      {
        "@type": "Question",
        "name": "What protective packing materials are used during a professional move in Ranchi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We strictly utilize virgin, certified packaging materials: 100-micron air bubble film, 5-ply and 7-ply heavy-duty kraft corrugated cartons with vertical fluting, EPE foam sheets, rigid corrugated corner edge guards, high-tensile cast stretch film, acid-free butter paper for chinaware, thermocol shock absorbers, and bespoke pine-wood crates for large OLED televisions and marble mandirs."
        }
      },
      {
        "@type": "Question",
        "name": "How does Shree Ashirwad handle large modular furniture dismantling and reassembly?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Every relocation team includes in-house master carpenters equipped with cordless electric power drivers, hex wrenches, and precision hand tools. We safely dismantle hydraulic storage beds, sliding modular wardrobes, modular executive desks, and dining sets. All screws, bolts, and cam-locks are sealed into heavy-duty labeled hardware pouches and taped directly to the corresponding furniture unit to guarantee seamless reassembly at your destination."
        }
      },
      {
        "@type": "Question",
        "name": "Is transit insurance mandatory, and how does your claims process work?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "While our zero-damage handling protocols keep incident rates below 0.2%, we strongly recommend all-risk transit insurance for intercity moves and high-value household consignments. We facilitate comprehensive insurance policies underwritten by leading national insurers that cover fire, overturn, vehicle collision, and transit damage. In the rare event of accidental harm, our claims desk coordinates photographic surveys and facilitates prompt settlement without endless paperwork."
        }
      },
      {
        "@type": "Question",
        "name": "Can I track my moving shipment in real time between Ranchi and other cities?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. Our entire linehaul container fleet is integrated with GPS telematics, live speed monitors, and electronic geo-fencing. You are assigned a dedicated Single-Point Move Coordinator who sends real-time WhatsApp milestone updates upon vehicle departure, toll checkpoint crossings, rest stops, and expected arrival times at your destination."
        }
      },
      {
        "@type": "Question",
        "name": "What are the standard charges of professional packers and movers in Ranchi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Professional moving charges within Ranchi typically range from ₹3,500 to ₹5,500 for a 1 RK / studio, ₹5,500 to ₹9,000 for a 1 BHK, ₹8,500 to ₹15,000 for a 2 BHK, ₹13,500 to ₹22,000 for a 3 BHK, and ₹18,000 to ₹32,000 for a 4 BHK / luxury villa. Intercity moving charges are determined by transit distance, volume, vehicle type (dedicated vs consolidated container), and insurance valuation. All quotations are all-inclusive with zero hidden surcharges."
        }
      },
      {
        "@type": "Question",
        "name": "How early should I book professional packers and movers in Ranchi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "To secure your preferred departure time slot and ensure dedicated truck allocation, we recommend booking 2 to 4 days prior to your move date, especially for month-end dates and festive weekends. However, for urgent or same-day relocations in Ranchi, our emergency rapid-response units can arrive at your doorstep in Harmu, Morabadi, Bariatu, Ashok Nagar, or Kanke Road within 60 to 90 minutes."
        }
      }
    ]
  }
  </script>

  <style>
    /* Scoped Styles for Professional Packers and Movers in Ranchi Page */
    .pro-hero {
      position: relative;
      padding: 80px 0 60px;
      background: linear-gradient(135deg, #091524 0%, #11263f 60%, #1a385c 100%);
      color: #ffffff;
      overflow: hidden;
    }
    .pro-glow-1 {
      position: absolute;
      top: -120px;
      left: -120px;
      width: 480px;
      height: 480px;
      background: radial-gradient(circle, rgba(255,106,40,0.18) 0%, rgba(255,106,40,0) 70%);
      border-radius: 50%;
      pointer-events: none;
    }
    .pro-glow-2 {
      position: absolute;
      bottom: -100px;
      right: -100px;
      width: 520px;
      height: 520px;
      background: radial-gradient(circle, rgba(37,99,235,0.18) 0%, rgba(37,99,235,0) 70%);
      border-radius: 50%;
      pointer-events: none;
    }
    .pro-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(255,106,40,0.15);
      border: 1px solid rgba(255,106,40,0.35);
      padding: 6px 16px;
      border-radius: 30px;
      font-size: 0.88rem;
      font-weight: 700;
      color: #ff6a28;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      margin-bottom: 20px;
    }
    .pro-title {
      font-size: clamp(2.2rem, 4.4vw, 3.4rem);
      font-weight: 800;
      line-height: 1.2;
      margin-bottom: 20px;
      color: #ffffff;
    }
    .pro-title span {
      color: #ff6a28;
    }
    .pro-lead {
      font-size: 1.15rem;
      line-height: 1.8;
      color: #cbd5e1;
      max-width: 950px;
      margin-bottom: 30px;
    }
    .pro-hero-btns {
      display: flex;
      flex-wrap: wrap;
      gap: 16px;
      align-items: center;
    }
    .btn-pro-call {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: #ff6a28;
      color: #ffffff;
      padding: 14px 30px;
      border-radius: 8px;
      font-weight: 700;
      text-decoration: none;
      box-shadow: 0 4px 15px rgba(255,106,40,0.35);
      transition: all 0.3s ease;
    }
    .btn-pro-call:hover {
      background: #e85514;
      transform: translateY(-2px);
    }
    .btn-pro-wa {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: rgba(255,255,255,0.08);
      border: 1px solid rgba(255,255,255,0.25);
      color: #ffffff;
      padding: 14px 28px;
      border-radius: 8px;
      font-weight: 600;
      text-decoration: none;
      backdrop-filter: blur(6px);
      transition: all 0.3s ease;
    }
    .btn-pro-wa:hover {
      background: rgba(255,255,255,0.15);
      border-color: #ffffff;
      transform: translateY(-2px);
    }

    /* Trust Metrics Strip */
    .pro-stats-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
      text-align: center;
    }
    .pro-stat-item {
      padding: 24px 16px;
      background: #ffffff;
      border-radius: 12px;
      border: 1px solid #e2e8f0;
      box-shadow: 0 4px 14px rgba(0,0,0,0.04);
      transition: all 0.3s ease;
    }
    .pro-stat-item:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 24px rgba(0,0,0,0.08);
      border-color: #ff6a28;
    }

    /* Lead Form Strip */
    .pro-quote-box {
      background: #ffffff;
      border-radius: 14px;
      padding: 30px;
      box-shadow: 0 8px 30px rgba(0,0,0,0.08);
      border: 1px solid #e2e8f0;
      margin-top: -30px;
      position: relative;
      z-index: 10;
    }

    /* Narrative Grids */
    .pro-two-col {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 45px;
      align-items: center;
    }
    .pro-two-col-reverse {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 45px;
      align-items: center;
    }
    .pro-img-frame {
      border-radius: 14px;
      overflow: hidden;
      box-shadow: 0 12px 30px rgba(0,0,0,0.12);
      border: 1px solid #e2e8f0;
    }
    .pro-img-frame img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.4s ease;
    }
    .pro-img-frame:hover img {
      transform: scale(1.03);
    }

    /* Cards & Features */
    .pro-services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
      gap: 25px;
      margin-top: 35px;
    }
    .pro-service-card {
      background: #ffffff;
      border: 1px solid #e2e8f0;
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0 4px 18px rgba(0,0,0,0.04);
      transition: all 0.3s ease;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .pro-service-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 30px rgba(0,0,0,0.08);
      border-color: #ff6a28;
    }
    .pro-card-icon {
      width: 52px;
      height: 52px;
      background: #fff2eb;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #ff6a28;
      font-size: 22px;
      margin-bottom: 20px;
    }

    /* Comparison Table Component */
    .compare-table-wrapper {
      overflow-x: auto;
      background: #ffffff;
      border-radius: 14px;
      box-shadow: 0 6px 24px rgba(0,0,0,0.06);
      border: 1px solid #e2e8f0;
      margin: 35px 0;
    }
    .compare-table {
      width: 100%;
      border-collapse: collapse;
      text-align: left;
      font-size: 0.95rem;
    }
    .compare-table th {
      padding: 18px 22px;
      font-weight: 800;
      border-bottom: 2px solid #e2e8f0;
    }
    .compare-table th.col-feature {
      background: #0f223d;
      color: #ffffff;
      width: 28%;
    }
    .compare-table th.col-pro {
      background: #1e3a5f;
      color: #ffffff;
      border-bottom: 3px solid #ff6a28;
      width: 38%;
    }
    .compare-table th.col-amateur {
      background: #f1f5f9;
      color: #475569;
      width: 34%;
    }
    .compare-table td {
      padding: 16px 22px;
      border-bottom: 1px solid #e2e8f0;
      vertical-align: top;
      line-height: 1.6;
    }
    .compare-table tr:hover td {
      background-color: #f8fafc;
    }
    .badge-check {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      color: #059669;
      font-weight: 700;
    }
    .badge-cross {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      color: #dc2626;
      font-weight: 600;
    }

    /* Process Timeline */
    .pro-timeline {
      display: flex;
      flex-direction: column;
      gap: 22px;
      margin-top: 30px;
    }
    .pro-step {
      display: flex;
      gap: 20px;
      align-items: flex-start;
      background: #ffffff;
      padding: 24px;
      border-radius: 12px;
      border: 1px solid #e2e8f0;
      box-shadow: 0 4px 14px rgba(0,0,0,0.03);
    }
    .pro-step-num {
      width: 46px;
      height: 46px;
      border-radius: 50%;
      background: #0f223d;
      color: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 800;
      font-size: 1.2rem;
      flex-shrink: 0;
    }

    /* Pricing Tables */
    .pro-table-wrapper {
      overflow-x: auto;
      background: #ffffff;
      border-radius: 12px;
      box-shadow: 0 6px 24px rgba(0,0,0,0.05);
      border: 1px solid #e2e8f0;
      margin: 30px 0;
    }
    .pro-table {
      width: 100%;
      border-collapse: collapse;
      text-align: left;
      font-size: 0.96rem;
    }
    .pro-table th {
      background: #0f223d;
      color: #ffffff;
      padding: 16px 20px;
      font-weight: 700;
      border-bottom: 2px solid #ff6a28;
      white-space: nowrap;
    }
    .pro-table td {
      padding: 16px 20px;
      border-bottom: 1px solid #e2e8f0;
      color: #334155;
    }
    .pro-table tr:nth-child(even) td {
      background-color: #f8fafc;
    }
    .pro-table tr:hover td {
      background-color: #fff8f5;
    }

    /* FAQ Component */
    .faq-wrapper {
      display: flex;
      flex-direction: column;
      gap: 16px;
      margin-top: 35px;
    }
    .faq-item {
      background: #ffffff;
      border: 1px solid #e2e8f0;
      border-radius: 12px;
      padding: 24px 28px;
      box-shadow: 0 3px 12px rgba(0,0,0,0.03);
      transition: all 0.25s ease;
    }
    .faq-item:hover {
      border-color: #cbd5e1;
      box-shadow: 0 8px 24px rgba(0,0,0,0.06);
    }
    .faq-q {
      font-size: 1.15rem;
      font-weight: 700;
      color: #0f223d;
      margin-bottom: 12px;
      display: flex;
      align-items: flex-start;
      gap: 12px;
    }
    .faq-q span {
      color: #ff6a28;
      font-weight: 800;
      flex-shrink: 0;
    }
    .faq-a {
      font-size: 1rem;
      color: #475569;
      line-height: 1.75;
      padding-left: 28px;
    }

    /* Tag Pills */
    .tag-pill {
      display: inline-block;
      background: #f1f5f9;
      color: #334155;
      padding: 7px 16px;
      border-radius: 20px;
      font-size: 0.88rem;
      font-weight: 600;
      margin: 4px 6px 4px 0;
      border: 1px solid #e2e8f0;
      transition: all 0.2s ease;
    }
    .tag-pill:hover {
      background: #ff6a28;
      color: #ffffff;
      border-color: #ff6a28;
    }

    @media (max-width: 991px) {
      .pro-stats-grid {
        grid-template-columns: repeat(2, 1fr);
      }
      .pro-two-col, .pro-two-col-reverse {
        grid-template-columns: 1fr;
        gap: 30px;
      }
    }
    .pro-img-frame {
      border-radius: 14px;
      overflow: hidden;
      box-shadow: 0 10px 25px rgba(0,0,0,0.08);
      border: 1px solid #e2e8f0;
    }
    .pro-img-frame img {
      width: 100%;
      height: 260px;
      max-height: 300px;
      object-fit: cover;
      display: block;
    }
  </style>
</head>
<body>

  <!-- Global Header Navigation -->
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main id="mainContent">

    <!-- 1. Hero Section -->
    <section class="pro-hero">
      <div class="pro-glow-1"></div>
      <div class="pro-glow-2"></div>
      
      <div class="container" style="position:relative; z-index:2; max-width:1140px; margin:0 auto; padding:0 20px;">
        <nav aria-label="Breadcrumb" style="margin-bottom:20px; font-size:0.9rem; color:#94a3b8;">
          <a href="<?php echo SITE_BASE_URL; ?>/" style="color:#cbd5e1; text-decoration:none;">Home</a>
          <span style="margin:0 8px; color:#64748b;">&gt;</span>
          <a href="<?php echo SITE_BASE_URL; ?>/#services" style="color:#cbd5e1; text-decoration:none;">Services</a>
          <span style="margin:0 8px; color:#64748b;">&gt;</span>
          <span aria-current="page" style="color:#ff6a28; font-weight:600;">Professional Packers and Movers in Ranchi</span>
        </nav>
        
        <div class="pro-badge">
          <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
          ISO 9001:2015 Certified & IBA-Approved Relocation Leader
        </div>

        <h1 class="pro-title">
          Professional Packers and Movers in Ranchi
        </h1>
        
        <p class="pro-lead">
          Relocate with complete confidence, dignity, and absolute peace of mind. As the undisputed benchmark for <strong>professional packers and movers in Ranchi</strong>, Shree Ashirwad Packers and Movers delivers an elite relocation standard engineered around integrity, certified expertise, and zero-compromise asset protection. Operating across Harmu, Morabadi, Bariatu, Ashok Nagar, Kanke Road, Doranda, Lalpur, and greater Jharkhand, we field 100% full-time, background-verified personnel, in-house master carpenters, virgin 5-layer shock-absorbent packaging, GPS-monitored enclosed container trucks, and transparent written binding contracts with ₹0 hidden charges.
        </p>

        <div class="pro-hero-btns">
          <a href="tel:<?php echo SECONDARY_PHONE_RAW; ?>" class="btn-pro-call">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
            Call Professional Desk: 8409531615
          </a>
          <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="nofollow noopener noreferrer" class="btn-pro-wa">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2z"/></svg>
            WhatsApp Instant Survey &rarr;
          </a>
        </div>
      </div>
    </section>

    <!-- 2. Trust Metrics Strip -->
    <section style="background:#ffffff; padding:35px 0; border-bottom:1px solid #e2e8f0;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">
        <div class="pro-stats-grid">
          <div class="pro-stat-item">
            <div style="font-size:2.2rem; font-weight:800; color:#ff6a28; line-height:1.1; margin-bottom:6px;">15+ Years</div>
            <div style="font-size:0.95rem; font-weight:700; color:#0f223d; margin-bottom:4px;">Operational Excellence</div>
            <div style="font-size:0.85rem; color:#64748b;">Serving Ranchi & Pan-India since 2011</div>
          </div>
          <div class="pro-stat-item">
            <div style="font-size:2.2rem; font-weight:800; color:#2563eb; line-height:1.1; margin-bottom:6px;">100% In-House</div>
            <div style="font-size:0.95rem; font-weight:700; color:#0f223d; margin-bottom:4px;">Background-Verified Staff</div>
            <div style="font-size:0.85rem; color:#64748b;">Zero outsourced casual laborers</div>
          </div>
          <div class="pro-stat-item">
            <div style="font-size:2.2rem; font-weight:800; color:#0d9488; line-height:1.1; margin-bottom:6px;">IBA Approved</div>
            <div style="font-size:0.95rem; font-weight:700; color:#0f223d; margin-bottom:4px;">GST & ISO 9001:2015</div>
            <div style="font-size:0.85rem; color:#64748b;">100% official claim reimbursement</div>
          </div>
          <div class="pro-stat-item">
            <div style="font-size:2.2rem; font-weight:800; color:#f59e0b; line-height:1.1; margin-bottom:6px;">₹0 Hidden</div>
            <div style="font-size:0.95rem; font-weight:700; color:#0f223d; margin-bottom:4px;">Binding Written Quotes</div>
            <div style="font-size:0.85rem; color:#64748b;">Zero post-loading price extortion</div>
          </div>
        </div>
      </div>
    </section>

    <!-- 3. Quick Quote Form Strip -->
    <section style="background:#f8fafc; padding:30px 0 50px;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">
        <div class="pro-quote-box">
          <div style="text-align:center; max-width:760px; margin:0 auto 24px;">
            <h2 style="font-size:1.6rem; font-weight:800; color:#0f223d; margin-bottom:8px;">Request a Binding Professional Relocation Estimate in Ranchi</h2>
            <p style="font-size:0.95rem; color:#64748b; line-height:1.6; margin:0;">
              Share your relocation specifics to receive an audited, binding price quotation backed by written service-level agreements and guaranteed vehicle allocation.
            </p>
          </div>
          
          <form action="<?php echo SITE_BASE_URL; ?>/submit-quote.php" method="POST" style="display:grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap:16px; align-items:end;">
            <div>
              <label style="display:block; font-size:0.85rem; font-weight:700; color:#334155; margin-bottom:6px;">Your Name</label>
              <input type="text" name="name" required placeholder="Full Name" style="width:100%; padding:11px 14px; border:1px solid #cbd5e1; border-radius:8px; font-size:0.95rem; box-sizing:border-box;">
            </div>
            <div>
              <label style="display:block; font-size:0.85rem; font-weight:700; color:#334155; margin-bottom:6px;">Contact Phone</label>
              <input type="tel" name="phone" required placeholder="10-digit Mobile" style="width:100%; padding:11px 14px; border:1px solid #cbd5e1; border-radius:8px; font-size:0.95rem; box-sizing:border-box;">
            </div>
            <div>
              <label style="display:block; font-size:0.85rem; font-weight:700; color:#334155; margin-bottom:6px;">Pickup Locality (Ranchi)</label>
              <input type="text" name="pickup" required placeholder="E.g., Harmu, Morabadi, Bariatu" style="width:100%; padding:11px 14px; border:1px solid #cbd5e1; border-radius:8px; font-size:0.95rem; box-sizing:border-box;">
            </div>
            <div>
              <label style="display:block; font-size:0.85rem; font-weight:700; color:#334155; margin-bottom:6px;">Destination City</label>
              <input type="text" name="destination" required placeholder="Ranchi Local or Other City" style="width:100%; padding:11px 14px; border:1px solid #cbd5e1; border-radius:8px; font-size:0.95rem; box-sizing:border-box;">
            </div>
            <div>
              <label style="display:block; font-size:0.85rem; font-weight:700; color:#334155; margin-bottom:6px;">Move Scope</label>
              <select name="move_type" style="width:100%; padding:11px 14px; border:1px solid #cbd5e1; border-radius:8px; font-size:0.95rem; box-sizing:border-box; background:#ffffff;">
                <option value="1BHK Household">1 BHK Executive Apartment</option>
                <option value="2BHK Household">2 BHK Family Relocation</option>
                <option value="3BHK Household">3 BHK Spacious Home</option>
                <option value="4BHK / Villa">4+ BHK / Luxury Bungalow</option>
                <option value="Corporate Office">Corporate / Office Shifting</option>
                <option value="Vehicle Carrier">Car / Bike Transport</option>
              </select>
            </div>
            <div>
              <button type="submit" style="width:100%; background:#ff6a28; color:#ffffff; font-weight:700; padding:13px 20px; border:none; border-radius:8px; font-size:1rem; cursor:pointer; box-shadow:0 4px 15px rgba(255,106,40,0.3); transition:background 0.2s ease;">
                Get Binding Quote &rarr;
              </button>
            </div>
          </form>
        </div>
      </div>
    </section>

    <!-- 4. The Benchmark of Professionalism in Ranchi -->
    <section style="padding:70px 0; background:#ffffff;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">
        <div class="pro-two-col">
          <div>
            <span style="display:inline-block; background:#fff2eb; color:#ff6a28; font-weight:700; font-size:0.88rem; padding:6px 14px; border-radius:30px; margin-bottom:14px; text-transform:uppercase; letter-spacing:0.5px;">
              Setting the Gold Standard
            </span>
            <h2 style="font-size:clamp(1.85rem, 3.2vw, 2.6rem); font-weight:800; color:#0f223d; line-height:1.25; margin-bottom:18px;">
              What Defines True Professional Packers and Movers in Ranchi?
            </h2>
            <p style="font-size:1.05rem; line-height:1.8; color:#475569; margin-bottom:16px;">
              In the modern logistics landscape of Jharkhand's capital, anyone with a rented open tempo and a few business cards can claim to be a mover. But true professionalism is defined by accountability, institutional compliance, engineering standards, and behavioral integrity. Too many residents in Ranchi fall victim to fly-by-night operators who offer ridiculously cheap telephone estimates, only to double the price once your furniture is locked inside their truck, employ rough casual laborers with zero background checks, or disappear entirely with irreplaceable family heirlooms.
            </p>
            <p style="font-size:1.05rem; line-height:1.8; color:#475569; margin-bottom:16px;">
              At <strong>Shree Ashirwad Packers and Movers</strong>, we built our reputation on an unwavering commitment to professional standards. As an <strong>IBA-approved (Indian Banks' Association)</strong> and <strong>ISO 9001:2015 certified</strong> logistics institution, every step of our process is audited, transparent, and legally binding. From executive families in Ashok Nagar and Morabadi to defense personnel in Doranda and public sector leaders at CMPDI, CCL, and MECON, discerning clients trust us because we never compromise on safety, transparency, or punctuality.
            </p>
            <ul style="padding-left:22px; color:#334155; font-size:1rem; line-height:1.8; margin-bottom:20px;">
              <li><strong>Zero Subcontracting Guarantee:</strong> Your move is managed from start to finish by full-time, payroll employees wearing official company uniforms and photo ID badges.</li>
              <li><strong>Comprehensive Asset Accountability:</strong> Every item is logged in a digital inventory manifest with pre-existing condition notes before a single piece of tape is applied.</li>
              <li><strong>Legal & Financial Security:</strong> Binding GST invoices, official money receipts, transit insurance policies, and IBA consignment notes ensure complete legal protection.</li>
              <li><strong>Ergonomic & Structural Care:</strong> Hydraulic dollies, stair-climbing hand trucks, and padded carrying straps protect your building's elevators, tiles, and doorframes.</li>
            </ul>
          </div>

          <div>
            <div class="pro-img-frame">
              <img src="<?php echo SITE_BASE_URL; ?>/images/professional-loading-crew-ranchi.jpg" 
                   alt="Professional Loading Crew and Movers in Ranchi Shree Ashirwad" 
                   loading="lazy" 
                   width="540" 
                   height="260"
                   style="width:100%; height:260px; max-height:300px; display:block; object-fit:cover;">
            </div>
            <p style="font-size:0.88rem; color:#64748b; margin-top:10px; text-align:center; font-style:italic;">
              Uniformed, background-verified professional packing and loading specialists in Ranchi
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- 5. The 7 Pillars of Professional Excellence -->
    <section style="padding:70px 0; background:#f8fafc; border-top:1px solid #e2e8f0; border-bottom:1px solid #e2e8f0;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">
        <div style="text-align:center; max-width:820px; margin:0 auto 35px;">
          <span style="display:inline-block; background:#eff6ff; color:#2563eb; font-weight:700; font-size:0.88rem; padding:6px 14px; border-radius:30px; margin-bottom:12px; text-transform:uppercase; letter-spacing:0.5px;">
            The Shree Ashirwad Difference
          </span>
          <h2 style="font-size:clamp(1.85rem, 3.2vw, 2.6rem); font-weight:800; color:#0f223d; line-height:1.25; margin-bottom:14px;">
            The 7 Pillars of Professional Moving Excellence
          </h2>
          <p style="font-size:1.05rem; color:#64748b; line-height:1.7;">
            Discover the foundational infrastructure, ethical standards, and advanced logistics protocols that separate our professional moving teams from unverified street transporters in Ranchi.
          </p>
        </div>

        <div class="pro-services-grid">
          <!-- Pillar 1 -->
          <div class="pro-service-card">
            <div>
              <div class="pro-card-icon">
                <svg width="26" height="26" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
              </div>
              <h3 style="font-size:1.25rem; font-weight:700; color:#0f223d; margin-bottom:10px;">1. 100% Background-Verified Staff</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">
                We never hire random daily-wage loaders from street labor chowks. Every member of our moving crew is a full-time salaried employee vetted through police background verifications, Aadhaar checks, and continuous skill training.
              </p>
            </div>
            <div style="border-top:1px solid #f1f5f9; padding-top:12px; margin-top:15px; font-size:0.85rem; font-weight:700; color:#ff6a28;">
              Trust & Family Safety Assured
            </div>
          </div>

          <!-- Pillar 2 -->
          <div class="pro-service-card">
            <div>
              <div class="pro-card-icon" style="background:#eff6ff; color:#2563eb;">
                <svg width="26" height="26" fill="currentColor" viewBox="0 0 24 24"><path d="M22.7 19l-9.1-9.1c.9-2.3.4-5-1.5-6.9-2-2-5-2.4-7.4-1.3L9 6 6 9 1.6 4.7C.4 7.1.9 10.1 2.9 12.1c1.9 1.9 4.6 2.4 6.9 1.5l9.1 9.1c.4.4 1 .4 1.4 0l2.3-2.3c.5-.4.5-1.1.1-1.4z"/></svg>
              </div>
              <h3 style="font-size:1.25rem; font-weight:700; color:#0f223d; margin-bottom:10px;">2. In-House Master Carpenters</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">
                No more haggling with third-party carpenters. Our moving crew includes experienced master carpenters equipped with cordless electric power drivers, levelers, and hardware organizers to dismantle and assemble hydraulic beds and modular wardrobes.
              </p>
            </div>
            <div style="border-top:1px solid #f1f5f9; padding-top:12px; margin-top:15px; font-size:0.85rem; font-weight:700; color:#2563eb;">
              Zero Scratches & Factory-Level Reassembly
            </div>
          </div>

          <!-- Pillar 3 -->
          <div class="pro-service-card">
            <div>
              <div class="pro-card-icon" style="background:#fef3c7; color:#d97706;">
                <svg width="26" height="26" fill="currentColor" viewBox="0 0 24 24"><path d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm13.5-9l1.96 2.5H17V9.5h2.5zm-1.5 9c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/></svg>
              </div>
              <h3 style="font-size:1.25rem; font-weight:700; color:#0f223d; margin-bottom:10px;">3. GPS-Tracked Closed Containers</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">
                We transport your precious goods exclusively in all-weather, sealed container trucks fitted with live GPS tracking telematics, speed governors, and electronic security locks—never in rickety open tarpaulin trucks exposed to rain and dust.
              </p>
            </div>
            <div style="border-top:1px solid #f1f5f9; padding-top:12px; margin-top:15px; font-size:0.85rem; font-weight:700; color:#d97706;">
              100% Weatherproof & Monitored
            </div>
          </div>

          <!-- Pillar 4 -->
          <div class="pro-service-card">
            <div>
              <div class="pro-card-icon" style="background:#ecfdf5; color:#059669;">
                <svg width="26" height="26" fill="currentColor" viewBox="0 0 24 24"><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
              </div>
              <h3 style="font-size:1.25rem; font-weight:700; color:#0f223d; margin-bottom:10px;">4. Binding Written Quotations</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">
                We guarantee total financial integrity. Our written contracts explicitly detail every charge: packing materials, labor, vehicle hire, tolls, and GST. What we quote before the move is precisely what you pay, with zero nasty post-move surprises.
              </p>
            </div>
            <div style="border-top:1px solid #f1f5f9; padding-top:12px; margin-top:15px; font-size:0.85rem; font-weight:700; color:#059669;">
              Guaranteed ₹0 Hidden Surcharges
            </div>
          </div>

          <!-- Pillar 5 -->
          <div class="pro-service-card">
            <div>
              <div class="pro-card-icon" style="background:#f3e8ff; color:#7c3aed;">
                <svg width="26" height="26" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
              </div>
              <h3 style="font-size:1.25rem; font-weight:700; color:#0f223d; margin-bottom:10px;">5. IBA-Approved Documentation</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">
                Moving on transfer? We provide certified IBA-approved consignment bilty, GST invoices, transit insurance policies, and computerized itemized inventories required for 100% hassle-free reimbursement by government bodies and banks.
              </p>
            </div>
            <div style="border-top:1px solid #f1f5f9; padding-top:12px; margin-top:15px; font-size:0.85rem; font-weight:700; color:#7c3aed;">
              100% Claim Reimbursement Ready
            </div>
          </div>

          <!-- Pillar 6 -->
          <div class="pro-service-card">
            <div>
              <div class="pro-card-icon" style="background:#fff1f2; color:#e11d48;">
                <svg width="26" height="26" fill="currentColor" viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
              </div>
              <h3 style="font-size:1.25rem; font-weight:700; color:#0f223d; margin-bottom:10px;">6. All-Risk Transit Insurance</h3>
              <p style="font-size:0.95rem; line-height:1.7; color:#475569; margin:0;">
                Enjoy peace of mind with legitimate transit insurance underwritten by national general insurance companies. In the exceptionally rare case of highway mishap or structural damage, our dedicated claims desk ensures swift settlement.
              </p>
            </div>
            <div style="border-top:1px solid #f1f5f9; padding-top:12px; margin-top:15px; font-size:0.85rem; font-weight:700; color:#e11d48;">
              Comprehensive Financial Safety Net
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 6. Comparative Audit: Professional vs Amateur Movers -->
    <section style="padding:70px 0; background:#ffffff;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">
        <div style="text-align:center; max-width:800px; margin:0 auto 30px;">
          <span style="display:inline-block; background:#fff2eb; color:#ff6a28; font-weight:700; font-size:0.88rem; padding:6px 14px; border-radius:30px; margin-bottom:12px; text-transform:uppercase; letter-spacing:0.5px;">
            Informed Decision Making
          </span>
          <h2 style="font-size:clamp(1.85rem, 3.2vw, 2.6rem); font-weight:800; color:#0f223d; line-height:1.25; margin-bottom:14px;">
            Professional Moving Company vs Local Unregistered Transporters
          </h2>
          <p style="font-size:1.05rem; color:#64748b; line-height:1.7;">
            Compare the operational differences between Shree Ashirwad Packers and Movers and typical unregistered local transporters in Ranchi before trusting someone with your home.
          </p>
        </div>

        <div class="compare-table-wrapper">
          <table class="compare-table">
            <thead>
              <tr>
                <th class="col-feature">Relocation Dimension</th>
                <th class="col-pro">Shree Ashirwad (Professional Movers)</th>
                <th class="col-amateur">Local Amateur Transporters</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Crew Quality & Verification</strong></td>
                <td><span class="badge-check">✔ 100% In-House Staff</span> — Police verified, trained in handling, uniformed with ID cards.</td>
                <td><span class="badge-cross">✘ Daily-Wage Laborers</span> — Recruited from street corners without background or identity verification.</td>
              </tr>
              <tr>
                <td><strong>Pricing Transparency</strong></td>
                <td><span class="badge-check">✔ Binding Written Quotation</span> — Detailed contract with ₹0 hidden costs guaranteed in writing.</td>
                <td><span class="badge-cross">✘ Bait-and-Switch Pricing</span> — Cheap phone quote, followed by aggressive demands for double money upon loading.</td>
              </tr>
              <tr>
                <td><strong>Packaging Quality</strong></td>
                <td><span class="badge-check">✔ 5-Layer Virgin Materials</span> — Virgin air bubbles, 7-ply cartons, EPE foam, corner guards & custom crates.</td>
                <td><span class="badge-cross">✘ Recycled Scrap Boxes</span> — Flimsy second-hand grocery cartons, thin plastic tape, zero bubble cushioning.</td>
              </tr>
              <tr>
                <td><strong>Transit Fleet</strong></td>
                <td><span class="badge-check">✔ Enclosed Container Trucks</span> — Waterproof, dustproof, fitted with GPS tracking & internal cargo straps.</td>
                <td><span class="badge-cross">✘ Open Wooden Dala Trucks</span> — Tied with rough ropes, vulnerable to rain downpours, theft, and road dust.</td>
              </tr>
              <tr>
                <td><strong>Carpentry & Tools</strong></td>
                <td><span class="badge-check">✔ Master In-House Carpenters</span> — Cordless power tools, hardware pouches, safe dismantle & reassembly.</td>
                <td><span class="badge-cross">✘ Unskilled Forceful Handling</span> — Hammering nails, stripping screw threads, broken hydraulic bed brackets.</td>
              </tr>
              <tr>
                <td><strong>Official Reimbursement (IBA)</strong></td>
                <td><span class="badge-check">✔ 100% Approved Bills</span> — Valid GSTIN, IBA code, Bilty, computerized inventory, official receipts.</td>
                <td><span class="badge-cross">✘ Invalid Paper Slips</span> — Hand-written kacha slips without GST, rejected by all government offices and banks.</td>
              </tr>
              <tr>
                <td><strong>Insurance & Claims</strong></td>
                <td><span class="badge-check">✔ Genuine All-Risk Transit Policy</span> — Official policy document with transparent fast-track claim settlement.</td>
                <td><span class="badge-cross">✘ No Insurance Coverage</span> — Verbal false assurances; complete denial of responsibility if goods break.</td>
              </tr>
              <tr>
                <td><strong>Customer Support</strong></td>
                <td><span class="badge-check">✔ Dedicated Move Manager</span> — 24/7 proactive updates, WhatsApp tracking, and single-point coordination.</td>
                <td><span class="badge-cross">✘ Unreachable Drivers</span> — Switched-off phones, zero tracking, and rude behavior during delays.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- 7. Specialized Relocation Categories -->
    <section style="padding:70px 0; background:#f8fafc; border-top:1px solid #e2e8f0; border-bottom:1px solid #e2e8f0;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">
        <div class="pro-two-col-reverse">
          <div>
            <div class="pro-img-frame">
              <img src="<?php echo SITE_BASE_URL; ?>/images/shree-ashirwad-verified-moving-truck-jharkhand.jpg" 
                   alt="Verified Container Truck Shree Ashirwad Packers in Ranchi Jharkhand" 
                   loading="lazy" 
                   width="540" 
                   height="260"
                   style="width:100%; height:260px; max-height:300px; display:block; object-fit:cover;">
            </div>
            <p style="font-size:0.88rem; color:#64748b; margin-top:10px; text-align:center; font-style:italic;">
              Verified, company-owned closed container fleet operating daily across Ranchi & Jharkhand
            </p>
          </div>

          <div>
            <span style="display:inline-block; background:#eff6ff; color:#2563eb; font-weight:700; font-size:0.88rem; padding:6px 14px; border-radius:30px; margin-bottom:14px; text-transform:uppercase; letter-spacing:0.5px;">
              Specialized Divisions
            </span>
            <h2 style="font-size:clamp(1.85rem, 3.2vw, 2.6rem); font-weight:800; color:#0f223d; line-height:1.25; margin-bottom:18px;">
              Tailored Professional Relocation Services in Ranchi
            </h2>
            <p style="font-size:1.05rem; line-height:1.8; color:#475569; margin-bottom:18px;">
              Every move carries unique requirements. A luxury duplex in Ashok Nagar demands different handling protocols than an IT server room in Lalpur or a central government transfer from MECON Colony. Our specialized divisions deliver purpose-built solutions:
            </p>

            <div style="display:flex; flex-direction:column; gap:16px;">
              <div style="display:flex; gap:14px; align-items:flex-start;">
                <div style="min-width:32px; height:32px; border-radius:50%; background:#0f223d; color:#ffffff; display:flex; align-items:center; justify-content:center; font-size:0.9rem; font-weight:700; margin-top:2px;">A</div>
                <div>
                  <h4 style="font-size:1.1rem; font-weight:700; color:#0f223d; margin:0 0 4px;">Executive Household Relocation</h4>
                  <p style="font-size:0.95rem; color:#64748b; margin:0; line-height:1.6;">White-glove household shifting across Ranchi high-rises and bungalows. Includes furniture disassembly, kitchen bubble packing, wardrobe rehanging, and complete destination setup.</p>
                </div>
              </div>

              <div style="display:flex; gap:14px; align-items:flex-start;">
                <div style="min-width:32px; height:32px; border-radius:50%; background:#0f223d; color:#ffffff; display:flex; align-items:center; justify-content:center; font-size:0.9rem; font-weight:700; margin-top:2px;">B</div>
                <div>
                  <h4 style="font-size:1.1rem; font-weight:700; color:#0f223d; margin:0 0 4px;">Corporate & Commercial Relocations</h4>
                  <p style="font-size:0.95rem; color:#64748b; margin:0; line-height:1.6;">Office shifting for banks, corporate branches, and legal chambers. We deploy anti-static packaging for servers, color-coded file tagging, and weekend moves for zero Monday downtime.</p>
                </div>
              </div>

              <div style="display:flex; gap:14px; align-items:flex-start;">
                <div style="min-width:32px; height:32px; border-radius:50%; background:#0f223d; color:#ffffff; display:flex; align-items:center; justify-content:center; font-size:0.9rem; font-weight:700; margin-top:2px;">C</div>
                <div>
                  <h4 style="font-size:1.1rem; font-weight:700; color:#0f223d; margin:0 0 4px;">Government & PSU Official Postings</h4>
                  <p style="font-size:0.95rem; color:#64748b; margin:0; line-height:1.6;">Dedicated assistance for officers transferring from Coal India, CMPDI, CCL, HEC, SAIL, Defense, and Police. 100% compliant documentation ensures full reimbursement.</p>
                </div>
              </div>

              <div style="display:flex; gap:14px; align-items:flex-start;">
                <div style="min-width:32px; height:32px; border-radius:50%; background:#0f223d; color:#ffffff; display:flex; align-items:center; justify-content:center; font-size:0.9rem; font-weight:700; margin-top:2px;">D</div>
                <div>
                  <h4 style="font-size:1.1rem; font-weight:700; color:#0f223d; margin:0 0 4px;">Enclosed Car Carriers & Bike Transport</h4>
                  <p style="font-size:0.95rem; color:#64748b; margin:0; line-height:1.6;">Specialized hydraulic vehicle carriers with wheel chocks and safety lashing belts. Multi-layer foam wrapping for premium motorcycles with door-to-door transit tracking.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 8. The 6-Phase Standard Operating Procedure -->
    <section style="padding:70px 0; background:#ffffff;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">
        <div style="text-align:center; max-width:800px; margin:0 auto 35px;">
          <span style="display:inline-block; background:#fff2eb; color:#ff6a28; font-weight:700; font-size:0.88rem; padding:6px 14px; border-radius:30px; margin-bottom:12px; text-transform:uppercase; letter-spacing:0.5px;">
            Scientific Execution
          </span>
          <h2 style="font-size:clamp(1.85rem, 3.2vw, 2.6rem); font-weight:800; color:#0f223d; line-height:1.25; margin-bottom:14px;">
            Our 6-Phase Professional Relocation Protocol
          </h2>
          <p style="font-size:1.05rem; color:#64748b; line-height:1.7;">
            Professionalism is grounded in repeatable, audited processes. Here is how our team executes your move from initial survey to final placement in Ranchi.
          </p>
        </div>

        <div class="pro-timeline">
          <!-- Step 1 -->
          <div class="pro-step">
            <div class="pro-step-num">1</div>
            <div>
              <h3 style="font-size:1.25rem; font-weight:700; color:#0f223d; margin-bottom:8px;">Pre-Move Digital or On-Site Inventory Assessment</h3>
              <p style="font-size:0.98rem; line-height:1.75; color:#475569; margin:0;">
                Our field manager visits your residence in Ranchi or conducts an interactive video survey. We catalog every piece of furniture, measure elevator and doorway clearances, calculate packaging material volumes, and present an itemized, binding written proposal with zero hidden clauses.
              </p>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="pro-step">
            <div class="pro-step-num">2</div>
            <div>
              <h3 style="font-size:1.25rem; font-weight:700; color:#0f223d; margin-bottom:8px;">Precision Room-by-Room 5-Layer Packing</h3>
              <p style="font-size:0.98rem; line-height:1.75; color:#475569; margin:0;">
                On moving day, our uniformed team arrives with fresh virgin packaging materials. We pack room by room to prevent disorientation. Chinaware is cocooned in butter paper and bubble wrap, books are boxed in heavy-duty 5-ply cartons, and fragile electronics receive custom foam padding.
              </p>
            </div>
          </div>

          <!-- Step 3 -->
          <div class="pro-step">
            <div class="pro-step-num">3</div>
            <div>
              <h3 style="font-size:1.25rem; font-weight:700; color:#0f223d; margin-bottom:8px;">Master Carpentry Dismantling & Hardware Organization</h3>
              <p style="font-size:0.98rem; line-height:1.75; color:#475569; margin:0;">
                In-house master carpenters dismantle hydraulic beds, modular sliding wardrobes, and dining tables using specialized power tools. Screws, cams, and fasteners are sealed into labeled hardware pouches and taped directly to the unit, ensuring effortless reassembly.
              </p>
            </div>
          </div>

          <!-- Step 4 -->
          <div class="pro-step">
            <div class="pro-step-num">4</div>
            <div>
              <h3 style="font-size:1.25rem; font-weight:700; color:#0f223d; margin-bottom:8px;">Scientific Loading & Cargo Lashing in Closed Containers</h3>
              <p style="font-size:0.98rem; line-height:1.75; color:#475569; margin:0;">
                Loading is conducted with mechanical dollies and safety ramps. Heavy wooden pieces form the stabilized bottom layer, followed by stacked cartons, while fragile dish-packs and TV crates are placed on top and secured with heavy-duty ratcheting cargo straps to prevent internal transit shifts.
              </p>
            </div>
          </div>

          <!-- Step 5 -->
          <div class="pro-step">
            <div class="pro-step-num">5</div>
            <div>
              <h3 style="font-size:1.25rem; font-weight:700; color:#0f223d; margin-bottom:8px;">GPS-Monitored Highway Transit with Live Checkpoints</h3>
              <p style="font-size:0.98rem; line-height:1.75; color:#475569; margin:0;">
                Your sealed container truck travels under real-time satellite GPS tracking. Your dedicated Move Coordinator shares periodic milestone updates, toll crossing alerts, and estimated delivery hours, giving you continuous visibility throughout the journey.
              </p>
            </div>
          </div>

          <!-- Step 6 -->
          <div class="pro-step">
            <div class="pro-step-num">6</div>
            <div>
              <h3 style="font-size:1.25rem; font-weight:700; color:#0f223d; margin-bottom:8px;">White-Glove Unloading, Reassembly & Complete Debris Removal</h3>
              <p style="font-size:0.98rem; line-height:1.75; color:#475569; margin:0;">
                At your new address, our team carries cartons directly into designated rooms according to color tags. We reassemble all beds, wardrobes, and tables, unpack kitchenware onto clean shelves, and collect and haul away all packaging debris, leaving your new home spotless.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 9. Transparent Professional Price Matrix -->
    <section style="padding:70px 0; background:#f8fafc; border-top:1px solid #e2e8f0; border-bottom:1px solid #e2e8f0;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">
        <div style="text-align:center; max-width:780px; margin:0 auto 30px;">
          <span style="display:inline-block; background:#fff2eb; color:#ff6a28; font-weight:700; font-size:0.88rem; padding:6px 14px; border-radius:30px; margin-bottom:12px; text-transform:uppercase; letter-spacing:0.5px;">
            Honest Rate Standards
          </span>
          <h2 style="font-size:clamp(1.85rem, 3.2vw, 2.6rem); font-weight:800; color:#0f223d; line-height:1.25; margin-bottom:14px;">
            Professional Packers and Movers Charges in Ranchi
          </h2>
          <p style="font-size:1.05rem; color:#64748b; line-height:1.7;">
            We believe transparent pricing is the first hallmark of professionalism. Review our standard rate matrices for local Ranchi shifting and intercity relocation across India.
          </p>
        </div>

        <!-- Table 1: Local Ranchi Shifting Cost Matrix -->
        <h3 style="font-size:1.35rem; font-weight:800; color:#0f223d; margin-bottom:16px;">
          Local Shifting Rate Card Across Ranchi (Intra-City)
        </h3>
        <div class="pro-table-wrapper">
          <table class="pro-table">
            <thead>
              <tr>
                <th>Dwelling Size</th>
                <th>Packing Materials & Labor</th>
                <th>Dedicated Vehicle (Tata Ace / 407)</th>
                <th>Total Professional Estimate</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>1 RK / Studio Setup</strong></td>
                <td>₹1,800 - ₹2,800</td>
                <td>₹1,700 - ₹2,700</td>
                <td style="color:#ff6a28; font-weight:800;">₹3,500 - ₹5,500</td>
              </tr>
              <tr>
                <td><strong>1 BHK Apartment</strong></td>
                <td>₹2,800 - ₹4,500</td>
                <td>₹2,700 - ₹4,500</td>
                <td style="color:#ff6a28; font-weight:800;">₹5,500 - ₹9,000</td>
              </tr>
              <tr>
                <td><strong>2 BHK Apartment</strong></td>
                <td>₹4,500 - ₹7,500</td>
                <td>₹4,000 - ₹7,500</td>
                <td style="color:#ff6a28; font-weight:800;">₹8,500 - ₹15,000</td>
              </tr>
              <tr>
                <td><strong>3 BHK Apartment / House</strong></td>
                <td>₹7,000 - ₹11,500</td>
                <td>₹6,500 - ₹10,500</td>
                <td style="color:#ff6a28; font-weight:800;">₹13,500 - ₹22,000</td>
              </tr>
              <tr>
                <td><strong>4 BHK / Luxury Villa</strong></td>
                <td>₹10,000 - ₹17,000</td>
                <td>₹8,000 - ₹15,000</td>
                <td style="color:#ff6a28; font-weight:800;">₹18,000 - ₹32,000</td>
              </tr>
              <tr>
                <td><strong>Corporate Office (per cabin/seat)</strong></td>
                <td>₹600 - ₹1,200</td>
                <td>Consolidated Freight</td>
                <td style="color:#ff6a28; font-weight:800;">₹1,000 - ₹2,200 / seat</td>
              </tr>
            </tbody>
          </table>
        </div>
        <p style="font-size:0.88rem; color:#64748b; line-height:1.6; margin-top:-15px; margin-bottom:35px;">
          * Rates include 5-layer packing materials, master carpenter dismantling & assembly, dedicated covered vehicle, loading, unloading, and debris cleanup. Floor levels without elevators or specialty hoists may involve minor handling adjustments.
        </p>

        <!-- Table 2: Intercity Moving from Ranchi -->
        <h3 style="font-size:1.35rem; font-weight:800; color:#0f223d; margin-bottom:16px;">
          Intercity Professional Moving Rates from Ranchi to Key Metros
        </h3>
        <div class="pro-table-wrapper">
          <table class="pro-table">
            <thead>
              <tr>
                <th>Destination Route</th>
                <th>Distance & Route</th>
                <th>1 BHK Relocation</th>
                <th>2 BHK Relocation</th>
                <th>3 BHK Relocation</th>
                <th>Vehicle Transport</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Ranchi to Patna</strong></td>
                <td>330 km (NH-20 / NH-31)</td>
                <td>₹12,000 - ₹18,000</td>
                <td>₹18,000 - ₹28,000</td>
                <td>₹26,000 - ₹38,000</td>
                <td>₹4,500 - ₹8,500</td>
              </tr>
              <tr>
                <td><strong>Ranchi to Kolkata</strong></td>
                <td>410 km (NH-43 / NH-16)</td>
                <td>₹14,000 - ₹20,000</td>
                <td>₹20,000 - ₹32,000</td>
                <td>₹28,000 - ₹44,000</td>
                <td>₹5,500 - ₹9,500</td>
              </tr>
              <tr>
                <td><strong>Ranchi to Delhi NCR</strong></td>
                <td>1,180 km (NH-19 GT Road)</td>
                <td>₹22,000 - ₹34,000</td>
                <td>₹32,000 - ₹52,000</td>
                <td>₹45,000 - ₹72,000</td>
                <td>₹8,500 - ₹16,000</td>
              </tr>
              <tr>
                <td><strong>Ranchi to Bangalore</strong></td>
                <td>1,820 km (NH-44 Corridor)</td>
                <td>₹26,000 - ₹40,000</td>
                <td>₹38,000 - ₹62,000</td>
                <td>₹52,000 - ₹85,000</td>
                <td>₹11,000 - ₹19,000</td>
              </tr>
              <tr>
                <td><strong>Ranchi to Hyderabad</strong></td>
                <td>1,320 km (NH-30 / NH-44)</td>
                <td>₹24,000 - ₹36,000</td>
                <td>₹35,000 - ₹56,000</td>
                <td>₹48,000 - ₹78,000</td>
                <td>₹9,500 - ₹17,000</td>
              </tr>
              <tr>
                <td><strong>Ranchi to Jamshedpur</strong></td>
                <td>130 km (NH-43 Express)</td>
                <td>₹7,500 - ₹12,000</td>
                <td>₹12,000 - ₹19,000</td>
                <td>₹18,000 - ₹28,000</td>
                <td>₹3,000 - ₹6,000</td>
              </tr>
              <tr>
                <td><strong>Ranchi to Dhanbad / Bokaro</strong></td>
                <td>135 - 165 km (NH-320)</td>
                <td>₹8,000 - ₹13,000</td>
                <td>₹13,000 - ₹20,000</td>
                <td>₹19,000 - ₹30,000</td>
                <td>₹3,500 - ₹6,500</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- 10. Neighborhood-by-Neighborhood Coverage -->
    <section style="padding:70px 0; background:#ffffff;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">
        <div style="text-align:center; max-width:820px; margin:0 auto 35px;">
          <span style="display:inline-block; background:#fff2eb; color:#ff6a28; font-weight:700; font-size:0.88rem; padding:6px 14px; border-radius:30px; margin-bottom:12px; text-transform:uppercase; letter-spacing:0.5px;">
            Rapid City-Wide Mobilization
          </span>
          <h2 style="font-size:clamp(1.85rem, 3.2vw, 2.6rem); font-weight:800; color:#0f223d; line-height:1.25; margin-bottom:14px;">
            Serving Every Neighborhood Across Ranchi
          </h2>
          <p style="font-size:1.05rem; color:#64748b; line-height:1.7;">
            With operational hubs stationed in Harmu, Morabadi, Bariatu, and Ashok Nagar, our professional moving crews arrive punctually at any Ranchi location within 60 to 90 minutes.
          </p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(260px, 1fr)); gap:20px;">
          <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; padding:20px;">
            <h4 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:8px;">Harmu & Patel Chowk</h4>
            <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
              Harmu Housing Colony, Patel Chowk, Sahajanand Chowk, Vidya Nagar, and Bypass Road enclaves.
            </p>
          </div>

          <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; padding:20px;">
            <h4 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:8px;">Morabadi & Tagore Hill</h4>
            <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
              Morabadi Ground, Chiraundi, Bapu Vatika, Tagore Hill Road, and luxury multistory towers.
            </p>
          </div>

          <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; padding:20px;">
            <h4 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:8px;">Bariatu & Medical Hub</h4>
            <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
              RIMS Doctors Colony, Medical Chowk, Booty Road junction, and premium gated complexes.
            </p>
          </div>

          <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; padding:20px;">
            <h4 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:8px;">Kanke Road & CMPDI</h4>
            <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
              CMPDI Colony, Rock Garden, Kanke Dam, Holiday Home, and executive residential societies.
            </p>
          </div>

          <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; padding:20px;">
            <h4 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:8px;">Ashok Nagar & VIP Enclaves</h4>
            <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
              Road No. 1 to 4, Mecon Colony, Kadru Bridge, and distinguished high-profile residential sectors.
            </p>
          </div>

          <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; padding:20px;">
            <h4 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:8px;">Doranda & AG Colony</h4>
            <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
              High Court Colony, AG Colony, Hinoo, Birsa Munda Airport Road, and Defense quarters.
            </p>
          </div>

          <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; padding:20px;">
            <h4 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:8px;">Lalpur & Circular Road</h4>
            <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
              Distillery Bridge, Hari Om Tower, Peace Road, Tharpakhna, and Central Commercial zones.
            </p>
          </div>

          <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; padding:20px;">
            <h4 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:8px;">Dhurwa & HEC Township</h4>
            <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
              JSCA Cricket Stadium, Sector 1, 2 & 3, Vidhan Sabha area, and Shalimar executive housing.
            </p>
          </div>

          <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; padding:20px;">
            <h4 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:8px;">Ratu Road & Piska More</h4>
            <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
              Pahari Mandir, Piska More, Pandra Krishi Bazaar, ITI Bus Stand, and Kamre residential zones.
            </p>
          </div>

          <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; padding:20px;">
            <h4 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:8px;">Kokar & Lalganj</h4>
            <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
              Kokar Industrial Area, Sadabar Chowk, Lalganj Road, and Ranchi Railway Station approaches.
            </p>
          </div>

          <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; padding:20px;">
            <h4 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:8px;">Namkum & Tatisilwai</h4>
            <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
              ICAR campus, Military Cantonment, Tatisilwai industrial zone, and Purulia Road developments.
            </p>
          </div>

          <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; padding:20px;">
            <h4 style="font-size:1.15rem; font-weight:700; color:#0f223d; margin-bottom:8px;">Tupudana & Hatia</h4>
            <p style="font-size:0.92rem; color:#64748b; line-height:1.6; margin:0;">
              Tupudana Industrial Estate, Hatia Railway Station, Singh More, and Ring Road connections.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- 11. Authentic GMB Customer Reviews -->
    <?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

    <!-- 12. Frequently Asked Questions -->
    <section style="padding:70px 0; background:#f8fafc; border-top:1px solid #e2e8f0; border-bottom:1px solid #e2e8f0;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">
        <div style="text-align:center; max-width:800px; margin:0 auto 30px;">
          <span style="display:inline-block; background:#fff2eb; color:#ff6a28; font-weight:700; font-size:0.88rem; padding:6px 14px; border-radius:30px; margin-bottom:12px; text-transform:uppercase; letter-spacing:0.5px;">
            Transparency & Clarity
          </span>
          <h2 style="font-size:clamp(1.85rem, 3.2vw, 2.6rem); font-weight:800; color:#0f223d; line-height:1.25; margin-bottom:14px;">
            Frequently Asked Questions: Professional Movers in Ranchi
          </h2>
          <p style="font-size:1.05rem; color:#64748b; line-height:1.7;">
            Comprehensive answers addressing staff background checks, IBA billing, insurance claims, pricing, and moving protocols.
          </p>
        </div>

        <div class="faq-wrapper">
          <div class="faq-item">
            <div class="faq-q"><span>Q1.</span> What distinguishes professional packers and movers in Ranchi from unorganized local transporters?</div>
            <div class="faq-a">Professional packers and movers like Shree Ashirwad employ 100% full-time, background-verified crew members rather than casual daily-wage laborers recruited from street corners. We operate our own company-branded, GPS-tracked closed container fleet, utilize virgin multi-layer industrial packaging materials, provide binding written contracts with zero hidden fees, supply authentic IBA-approved GST documentation for government transfer reimbursements, and provide comprehensive all-risk transit insurance.</div>
          </div>

          <div class="faq-item">
            <div class="faq-q"><span>Q2.</span> How do you protect customers from moving scams, price extortion, and hidden costs in Ranchi?</div>
            <div class="faq-a">We operate with total pricing transparency. Before accepting any booking, our senior relocation surveyor conducts a detailed physical or video inventory assessment. We provide a computerized, itemized, binding quotation that details all costs: packing materials, carpenter dismantling, labor handling, transport freight, tolls, and taxes. Once agreed upon, our contract guarantees ₹0 hidden fees, meaning our crew will never demand extra money upon arrival or hold your goods hostage.</div>
          </div>

          <div class="faq-item">
            <div class="faq-q"><span>Q3.</span> Are your relocation bills valid for central government, PSU, and bank transfer claims in Ranchi?</div>
            <div class="faq-a">Yes, absolutely. Shree Ashirwad Packers and Movers is an IBA-approved and ISO 9001:2015 certified moving company. We furnish 100% legitimate GST invoices under SAC Code 996511, stamped consignment notes (Bilty), car carrier receipts, computerized packing lists, and transit insurance certificates. These documents are recognized and approved by Coal India, CMPDI, CCL, HEC, MECON, SAIL, SBI, nationalized banks, Indian Railways, and Central Armed Police Forces (CRPF, CISF).</div>
          </div>

          <div class="faq-item">
            <div class="faq-q"><span>Q4.</span> What background checks and training do your moving crew members undergo?</div>
            <div class="faq-a">Every technician, carpenter, driver, and loader at Shree Ashirwad undergoes thorough identity verification through police background checks, Aadhaar authentication, and drug screening. Our personnel complete rigorous training in scientific lifting ergonomics, delicate glassware packaging, master carpentry assembly, defensive highway driving, and polite customer etiquette before being deployed on any customer project.</div>
          </div>

          <div class="faq-item">
            <div class="faq-q"><span>Q5.</span> What protective packing materials are used during a professional move in Ranchi?</div>
            <div class="faq-a">We strictly utilize virgin, certified packaging materials: 100-micron air bubble film, 5-ply and 7-ply heavy-duty kraft corrugated cartons with vertical fluting, EPE foam sheets, rigid corrugated corner edge guards, high-tensile cast stretch film, acid-free butter paper for chinaware, thermocol shock absorbers, and bespoke pine-wood crates for large OLED televisions and marble mandirs.</div>
          </div>

          <div class="faq-item">
            <div class="faq-q"><span>Q6.</span> How does Shree Ashirwad handle large modular furniture dismantling and reassembly?</div>
            <div class="faq-a">Every relocation team includes in-house master carpenters equipped with cordless electric power drivers, hex wrenches, and precision hand tools. We safely dismantle hydraulic storage beds, sliding modular wardrobes, modular executive desks, and dining sets. All screws, bolts, and cam-locks are sealed into heavy-duty labeled hardware pouches and taped directly to the corresponding furniture unit to guarantee seamless reassembly at your destination.</div>
          </div>

          <div class="faq-item">
            <div class="faq-q"><span>Q7.</span> Is transit insurance mandatory, and how does your claims process work?</div>
            <div class="faq-a">While our zero-damage handling protocols keep incident rates below 0.2%, we strongly recommend all-risk transit insurance for intercity moves and high-value household consignments. We facilitate comprehensive insurance policies underwritten by leading national insurers that cover fire, overturn, vehicle collision, and transit damage. In the rare event of accidental harm, our claims desk coordinates photographic surveys and facilitates prompt settlement without endless paperwork.</div>
          </div>

          <div class="faq-item">
            <div class="faq-q"><span>Q8.</span> Can I track my moving shipment in real time between Ranchi and other cities?</div>
            <div class="faq-a">Yes. Our entire linehaul container fleet is integrated with GPS telematics, live speed monitors, and electronic geo-fencing. You are assigned a dedicated Single-Point Move Coordinator who sends real-time WhatsApp milestone updates upon vehicle departure, toll checkpoint crossings, rest stops, and expected arrival times at your destination.</div>
          </div>

          <div class="faq-item">
            <div class="faq-q"><span>Q9.</span> What are the standard charges of professional packers and movers in Ranchi?</div>
            <div class="faq-a">Professional moving charges within Ranchi typically range from ₹3,500 to ₹5,500 for a 1 RK / studio, ₹5,500 to ₹9,000 for a 1 BHK, ₹8,500 to ₹15,000 for a 2 BHK, ₹13,500 to ₹22,000 for a 3 BHK, and ₹18,000 to ₹32,000 for a 4 BHK / luxury villa. Intercity moving charges are determined by transit distance, volume, vehicle type (dedicated vs consolidated container), and insurance valuation. All quotations are all-inclusive with zero hidden surcharges.</div>
          </div>

          <div class="faq-item">
            <div class="faq-q"><span>Q10.</span> How early should I book professional packers and movers in Ranchi?</div>
            <div class="faq-a">To secure your preferred departure time slot and ensure dedicated truck allocation, we recommend booking 2 to 4 days prior to your move date, especially for month-end dates and festive weekends. However, for urgent or same-day relocations in Ranchi, our emergency rapid-response units can arrive at your doorstep in Harmu, Morabadi, Bariatu, Ashok Nagar, or Kanke Road within 60 to 90 minutes.</div>
          </div>
        </div>
      </div>
    </section>

    <!-- 13. Related Relocation Services & District Links -->
    <section style="padding:50px 0; background:#ffffff;">
      <div class="container" style="max-width:1140px; margin:0 auto; padding:0 20px;">
        <div style="text-align:center; margin-bottom:24px;">
          <h3 style="font-size:1.35rem; font-weight:700; color:#0f223d; margin-bottom:8px;">Related Relocation Solutions in Ranchi & Across Jharkhand</h3>
          <p style="font-size:0.95rem; color:#64748b; margin:0;">Explore our full suite of moving, packing, vehicle transport, and storage services:</p>
        </div>

        <div style="display:flex; flex-wrap:wrap; gap:10px; justify-content:center;">
          <a href="<?php echo SITE_BASE_URL; ?>/packing-and-unpacking-services-in-ranchi" class="tag-pill">Packing & Unpacking Services in Ranchi</a>
          <a href="<?php echo SITE_BASE_URL; ?>/household-shifting-services-in-ranchi" class="tag-pill">Household Shifting Ranchi</a>
          <a href="<?php echo SITE_BASE_URL; ?>/local-shifting-services-in-ranchi" class="tag-pill">Local Shifting in Ranchi</a>
          <a href="<?php echo SITE_BASE_URL; ?>/office-shifting-services-in-ranchi" class="tag-pill">Office Shifting in Ranchi</a>
          <a href="<?php echo SITE_BASE_URL; ?>/residential-shifting/" class="tag-pill">Residential Shifting</a>
          <a href="<?php echo SITE_BASE_URL; ?>/residential-shifting-services-in-ranchi" class="tag-pill" style="font-weight:700; color:#ff6a28;">Residential Shifting Ranchi</a>
          <a href="<?php echo SITE_BASE_URL; ?>/business-shifting/" class="tag-pill">Business & Corporate Shifting</a>
          <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi-jharkhand" class="tag-pill">Packers and Movers in Ranchi Jharkhand</a>
          <a href="<?php echo SITE_BASE_URL; ?>/loading-and-unloading-services/" class="tag-pill">Loading & Unloading Services</a>
          <a href="<?php echo SITE_BASE_URL; ?>/vehicle-shifting/" class="tag-pill">Car & Bike Relocation</a>
          <a href="<?php echo SITE_BASE_URL; ?>/vehicle-shifting-services-in-ranchi" class="tag-pill" style="font-weight:700; color:#ff6a28;">Vehicle Shifting Ranchi</a>
          <a href="<?php echo SITE_BASE_URL; ?>/warehouse-service/" class="tag-pill">Warehousing & Storage</a>
          <a href="<?php echo SITE_BASE_URL; ?>/warehouse-services-in-ranchi" class="tag-pill" style="font-weight:700; color:#ff6a28;">Warehouse Services Ranchi</a>
          <a href="<?php echo SITE_BASE_URL; ?>/lohardaga-to-ranchi-packers-and-movers" class="tag-pill">Lohardaga to Ranchi Movers</a>
          <a href="<?php echo SITE_BASE_URL; ?>/latehar-to-ranchi-packers-and-movers" class="tag-pill">Latehar to Ranchi Movers</a>
          <a href="<?php echo SITE_BASE_URL; ?>/koderma-to-ranchi-packers-and-movers" class="tag-pill">Koderma to Ranchi Movers</a>
          <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-pakur-to-ranchi" class="tag-pill">Pakur to Ranchi Movers</a>
          <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-palamu-to-ranchi" class="tag-pill">Palamu to Ranchi Movers</a>
          <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-ramgarh-to-ranchi" class="tag-pill">Ramgarh to Ranchi Movers</a>
          <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-simdega-to-ranchi" class="tag-pill">Simdega to Ranchi Movers</a>
          <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-bangalore-packers-and-movers" class="tag-pill" style="font-weight:700; color:#ff6a28;">Ranchi to Bangalore Movers</a>
          <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-delhi-packers-and-movers" class="tag-pill" style="font-weight:700; color:#ff6a28;">Ranchi to Delhi Movers</a>
          <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-dhanbad-packers-and-movers" class="tag-pill" style="font-weight:700; color:#ff6a28;">Ranchi to Dhanbad Movers</a>
          <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-hyderabad-packers-and-movers" class="tag-pill" style="font-weight:700; color:#ff6a28;">Ranchi to Hyderabad Movers</a>
          <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-jamshedpur-packers-and-movers" class="tag-pill" style="font-weight:700; color:#ff6a28;">Ranchi to Jamshedpur Movers</a>
          <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-kolkata-packers-and-movers" class="tag-pill" style="font-weight:700; color:#ff6a28;">Ranchi to Kolkata Movers</a>
          <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-patna-packers-and-movers" class="tag-pill" style="font-weight:700; color:#ff6a28;">Ranchi to Patna Movers</a>
          <a href="<?php echo SITE_BASE_URL; ?>/jamshedpur-to-ranchi-packers-and-movers" class="tag-pill">Jamshedpur to Ranchi Movers</a>
          <a href="<?php echo SITE_BASE_URL; ?>/contact" class="tag-pill">Contact Ranchi Headquarters</a>
        </div>
      </div>
    </section>

    <!-- 14. Final High-Conversion CTA Banner -->
    <section style="position:relative; padding:75px 0; background:linear-gradient(135deg, #091524 0%, #11263f 50%, #1a385c 100%); color:#ffffff; text-align:center; overflow:hidden;">
      <div style="position:absolute; top:0; left:0; right:0; bottom:0; background:radial-gradient(circle at 50% 50%, rgba(255,106,40,0.15) 0%, transparent 60%); pointer-events:none;"></div>
      <div class="container" style="position:relative; z-index:2; max-width:900px; margin:0 auto; padding:0 20px;">
        <span style="display:inline-block; background:#fff2eb; color:#ff6a28; padding:6px 18px; border-radius:30px; font-weight:800; font-size:0.85rem; text-transform:uppercase; letter-spacing:1px; margin-bottom:20px;">
          Experience True Relocation Professionalism
        </span>
        <h2 style="font-size:clamp(2rem, 3.8vw, 2.8rem); font-weight:800; line-height:1.25; margin-bottom:18px;">
          Choose <span style="color:#ff6a28;">Professional Packers and Movers in Ranchi</span>
        </h2>
        <p style="font-size:1.1rem; line-height:1.8; color:#cbd5e1; max-width:780px; margin:0 auto 32px;">
          Don't settle for amateur transporters or unverified daily laborers. Protect your household goods, family dignity, and budget with Ranchi's most reputable, IBA-approved moving team.
        </p>
        
        <div style="display:flex; flex-wrap:wrap; gap:16px; justify-content:center; align-items:center; margin-bottom:30px;">
          <a href="tel:<?php echo SECONDARY_PHONE_RAW; ?>" class="btn-pro-call" style="font-size:1.05rem; padding:15px 34px;">
            <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
            Call 8409531615 for Professional Survey
          </a>
          <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="nofollow noopener noreferrer" class="btn-pro-wa" style="font-size:1.05rem; padding:15px 30px;">
            <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2z"/></svg>
            Chat with Relocation Specialist
          </a>
        </div>

        <div style="display:inline-flex; align-items:center; gap:8px; color:#94a3b8; font-size:0.9rem;">
          <svg width="18" height="18" fill="#10b981" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
          Same-Day Rapid Survey & Moving Teams Available Across All Ranchi Sectors
        </div>
      </div>
    </section>

  </main>

  <!-- Global Footer -->
  <?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>
