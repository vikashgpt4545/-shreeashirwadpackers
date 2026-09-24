<?php
/**
 * Packers and Movers in Garhwa - Shree Ashirwad Packers and Movers
 * Pure Core PHP Implementation
 * 
 * Target URL: https://www.shreeashirwadpackers.com/packers-and-movers-in-gharwha
 * Title: Packers and Movers in Garhwa - 8409531615
 * District: Garhwa, Jharkhand
 * Coordinates: 24.1610° N, 83.8057° E
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$page_title = "Packers and Movers in Garhwa - 8409531615";
$page_description = "Hire verified packers and movers in Garhwa & Nagar Untari by Shree Ashirwad Packers. IBA approved bills, 5-layer packing, tri-state transit. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/packers-and-movers-in-gharwha";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title><?php echo $page_title; ?></title>
  <meta name="description" content="<?php echo $page_description; ?>">
  <meta name="keywords" content="packers and movers in garhwa, best packers and movers in garhwa, packers and movers in gharwha, household shifting services in garhwa, house shifting garhwa, packers and movers nagar untari, packers and movers banshidhar nagar, packers and movers garhwa to ranchi, packers and movers garhwa to varanasi, packers and movers garhwa to ambikapur, car transport garhwa, bike parcel garhwa, iba approved packers in garhwa">
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
  <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg">
  <meta property="og:image:width" content="1204">
  <meta property="og:image:height" content="1600">
  <meta property="og:image:alt" content="Packers and Movers in Garhwa Shree Ashirwad Packers">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo $page_title; ?>">
  <meta name="twitter:description" content="<?php echo $page_description; ?>">
  <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg">

  <!-- Google Verification & Geo Tags -->
  <meta name="google-site-verification" content="<?php echo htmlspecialchars(GOOGLE_SITE_VERIFICATION, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="theme-color" content="#1a2b4c">
  <meta name="geo.region" content="IN-JH">
  <meta name="geo.placename" content="Garhwa">
  <meta name="geo.position" content="24.1610;83.8057">
  <meta name="ICBM" content="24.1610, 83.8057">

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

  <!-- Structured Data: MovingCompany / LocalBusiness Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "MovingCompany",
    "@id": "<?php echo $canonical_url; ?>/#movingcompany",
    "name": "Shree Ashirwad Packers and Movers Garhwa",
    "alternateName": "Shree Ashirwad Packers Garhwa",
    "url": "<?php echo $canonical_url; ?>",
    "logo": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
    "image": "<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg",
    "description": "<?php echo $page_description; ?>",
    "telephone": "+918409531615",
    "email": "enquiry@shreeashirwadpackers.com",
    "priceRange": "₹₹",
    "keywords": "packers and movers in garhwa, best packers and movers in garhwa, packers and movers in gharwha, household shifting services in garhwa, house shifting garhwa, packers and movers nagar untari, packers and movers banshidhar nagar, packers and movers garhwa to ranchi, packers and movers garhwa to varanasi, packers and movers garhwa to ambikapur, car transport garhwa, bike parcel garhwa, iba approved packers in garhwa",
    "currenciesAccepted": "INR",
    "paymentAccepted": "Cash, UPI, Net Banking, Cheque",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Main Road, Near Ranka More Chowk",
      "addressLocality": "Garhwa",
      "addressRegion": "Jharkhand",
      "postalCode": "822114",
      "addressCountry": "IN"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 24.1610,
      "longitude": 83.8057
    },
    "hasMap": "https://maps.google.com/?q=24.1610,83.8057",
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
        "opens": "07:00",
        "closes": "22:00"
      }
    ],
    "sameAs": [
      "https://www.facebook.com/shreeashirwadpackers",
      "https://www.instagram.com/shreeashirwadpackers"
    ],
    "areaServed": [
      { "@type": "AdministrativeArea", "name": "Garhwa" },
      { "@type": "AdministrativeArea", "name": "Nagar Untari" },
      { "@type": "AdministrativeArea", "name": "Shri Banshidhar Nagar" },
      { "@type": "AdministrativeArea", "name": "Ranka" },
      { "@type": "AdministrativeArea", "name": "Bhawanathpur" },
      { "@type": "AdministrativeArea", "name": "Majhiaon" },
      { "@type": "AdministrativeArea", "name": "Meral" },
      { "@type": "AdministrativeArea", "name": "Ramna" },
      { "@type": "AdministrativeArea", "name": "Dandai" },
      { "@type": "AdministrativeArea", "name": "Dhurki" },
      { "@type": "AdministrativeArea", "name": "Chiniya" },
      { "@type": "AdministrativeArea", "name": "Kandi" }
    ],
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.9",
      "reviewCount": "284",
      "bestRating": "5",
      "worstRating": "1"
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
        "name": "Jharkhand Relocation Services",
        "item": "<?php echo SITE_BASE_URL; ?>/#service-areas"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Packers and Movers in Garhwa",
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
        "name": "Why is Shree Ashirwad the most trusted packers and movers in Garhwa?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Shree Ashirwad Packers and Movers has over 16 years of hands-on logistics expertise across Jharkhand and border corridors. In Garhwa, we provide specialized multi-layer packaging, trained in-house moving crews, IBA-approved billing for government and public sector transfers, and dedicated GPS-tracked closed container trucks for seamless moves to Ranchi, Patna, Varanasi, Ambikapur, and nationwide."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide IBA approved moving bills for employee transfers in Garhwa?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, absolutely. We provide 100% authentic IBA-approved bills complete with GST invoices, stamped consignment notes (bilty), transit insurance policies, packing inventory lists, and quotation copies. These documents are recognized and accepted by all central/state government departments, banks (SBI, PNB, BoI), police forces, judicial officers, and corporate companies for complete relocation allowance reimbursement."
        }
      },
      {
        "@type": "Question",
        "name": "How does Garhwa's unique tri-state border location affect inter-state transit times?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Garhwa is strategically situated bordering Uttar Pradesh (Sonbhadra/Renukoot), Bihar (Rohtas/Kaimur), and Chhattisgarh (Balrampur/Ambikapur). Our dedicated fleet operates regularly on NH-39 and NH-343. Transit to Daltonganj is completed same-day (4-6 hours), while moves to Ranchi, Varanasi, or Ambikapur take only 1 to 2 days with full e-way bill compliance."
        }
      },
      {
        "@type": "Question",
        "name": "Do you offer packing and moving services in Nagar Untari (Shri Banshidhar Nagar) and Bhawanathpur?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, our operational network covers the entire Garhwa district including Nagar Untari (Shri Banshidhar Nagar), Bhawanathpur mining township, Ranka, Majhiaon, Meral, Ramna, Dandai, Dhurki, Chiniya, Ramkanda, Bhandaria, and Kandi. We provide doorstep survey, premium packaging, and seamless delivery across all towns and rural subdivisions."
        }
      },
      {
        "@type": "Question",
        "name": "What packing materials do you use to protect fragile household items and electronic appliances?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We deploy a robust 5-layer protective packing standard: virgin air-bubble wrap, heavy-duty 5-ply to 7-ply corrugated cardboard sheets, edge corner angle boards, moisture-resistant stretch film wrap, and high-tensile strapping. Fragile glassware, porcelain crockery, and LED/OLED televisions are packed in tailor-made wooden crates with foam cushioning."
        }
      },
      {
        "@type": "Question",
        "name": "Can I transport my two-wheeler bike or car from Garhwa to other cities?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we specialize in safe vehicle shipping. Motorcycles and scooters are wrapped in multi-layer bubble wrap, foam sheets, and corrugated carton armor before being secured with heavy-duty ratchet tie-down belts inside enclosed container trucks. For cars, we provide door-to-door transit via specialized hydraulic car carrier trucks with zero road-wear."
        }
      },
      {
        "@type": "Question",
        "name": "How are household shifting charges calculated in Garhwa?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Our shifting rates are completely transparent and calculated based on: (1) Volume and cubic feet of household goods, (2) Shifting distance and route terrain, (3) Quality and quantity of 5-layer packing materials required, (4) Floor levels and elevator availability at both pickup and destination locations, and (5) Optional comprehensive transit insurance. We provide binding upfront written estimates with zero hidden fees."
        }
      },
      {
        "@type": "Question",
        "name": "How early should I book my relocation with Shree Ashirwad Packers in Garhwa?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "For local moves within Garhwa or nearby Daltonganj, booking 24 to 48 hours in advance is recommended. For inter-state relocations to Delhi, Mumbai, Bengaluru, Kolkata, or Chhattisgarh/UP border destinations, booking 3 to 5 days ahead allows us to perform a complimentary pre-move survey, prepare custom wooden crates, and reserve dedicated container vehicles."
        }
      }
    ]
  }
  </script>
</head>
<body>

<?php include __DIR__ . '/includes/header.php'; ?>

<main id="mainContent">

  <!-- HERO SECTION -->
  <section class="page-hero" style="background: linear-gradient(135deg, #0d1b2a 0%, #1b263b 60%, #1f4068 100%); position: relative; padding: 70px 0 60px; overflow: hidden; color: #ffffff;">
    <div class="hero-glow-1" style="position: absolute; width: 450px; height: 450px; border-radius: 50%; background: radial-gradient(circle, rgba(243, 156, 18, 0.18) 0%, rgba(243, 156, 18, 0) 70%); top: -100px; right: -50px; pointer-events: none;"></div>
    <div class="hero-glow-2" style="position: absolute; width: 380px; height: 380px; border-radius: 50%; background: radial-gradient(circle, rgba(52, 152, 219, 0.15) 0%, rgba(52, 152, 219, 0) 70%); bottom: -80px; left: -40px; pointer-events: none;"></div>

    <div class="container page-hero-wrapper" style="position: relative; z-index: 2; max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <!-- Breadcrumb Trail -->
      <nav aria-label="breadcrumb" style="margin-bottom: 20px;">
        <ol style="display: flex; flex-wrap: wrap; list-style: none; padding: 0; margin: 0; font-size: 14px; gap: 8px;">
          <li><a href="<?php echo SITE_BASE_URL; ?>/" style="color: #cbd5e1; text-decoration: none;">Home</a></li>
          <li style="color: #f39c12;">/</li>
          <li><a href="<?php echo SITE_BASE_URL; ?>/#service-areas" style="color: #cbd5e1; text-decoration: none;">Jharkhand</a></li>
          <li style="color: #f39c12;">/</li>
          <li style="color: #ffffff; font-weight: 600;" aria-current="page">Packers and Movers in Garhwa</li>
        </ol>
      </nav>

      <div style="max-width: 880px;">
        <div style="display: inline-flex; align-items: center; background: rgba(243, 156, 18, 0.2); border: 1px solid rgba(243, 156, 18, 0.4); padding: 6px 14px; border-radius: 30px; font-size: 13px; font-weight: 600; color: #f39c12; margin-bottom: 18px; letter-spacing: 0.5px; text-transform: uppercase;">
          ★ Certified Relocation Excellence in Garhwa & Nagar Untari
        </div>
        <h1 style="font-size: clamp(28px, 4.2vw, 44px); font-weight: 800; line-height: 1.25; margin-bottom: 18px; color: #ffffff;">
          Packers and Movers in Garhwa <span style="background: linear-gradient(90deg, #f39c12, #f1c40f); -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent; color: #f39c12;">- 8409531615</span>
        </h1>
        <p style="font-size: 17px; line-height: 1.7; color: #e2e8f0; margin-bottom: 28px; max-width: 820px;">
          Welcome to Shree Ashirwad Packers and Movers in Garhwa — your most trusted relocation partner across Jharkhand’s western corridor and the vital tri-state border junction of Uttar Pradesh, Bihar, and Chhattisgarh. From family home shifts and civil administration transfers to Bhawanathpur mining township relocations, we provide 5-layer protective packaging, IBA-approved documentation, zero-damage handling, and all-weather closed container transit.
        </p>

        <!-- CTAs -->
        <div style="display: flex; flex-wrap: wrap; gap: 14px; align-items: center;">
          <a href="tel:+918409531615" class="btn" style="background: #f39c12; color: #ffffff; font-weight: 700; padding: 13px 26px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 9px; box-shadow: 0 4px 14px rgba(243, 156, 18, 0.4); transition: transform 0.2s ease;">
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
            Call: 8409531615
          </a>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20moving%20services%20in%20Garhwa" target="_blank" rel="noopener" class="btn" style="background: #25d366; color: #ffffff; font-weight: 700; padding: 13px 26px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 9px; box-shadow: 0 4px 14px rgba(37, 211, 102, 0.35); transition: transform 0.2s ease;">
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-5.46-4.45-9.92-9.91-9.92zM12.04 20.08c-1.48 0-2.93-.4-4.2-1.15l-.3-.18-3.12.82.83-3.04-.2-.31c-.82-1.31-1.26-2.83-1.26-4.39 0-4.49 3.65-8.14 8.14-8.14 4.49 0 8.14 3.65 8.14 8.14 0 4.49-3.65 8.14-8.14 8.14zm4.46-6.1c-.24-.12-1.45-.72-1.67-.8-.23-.09-.39-.12-.56.12-.17.24-.65.8-.8 1.04-.15.24-.3.27-.55.15-.24-.12-1.03-.38-1.96-1.21-.73-.65-1.22-1.45-1.36-1.7-.14-.24-.01-.38.11-.5.11-.11.24-.28.36-.42.12-.14.16-.24.24-.4.08-.17.04-.31-.02-.43s-.56-1.35-.77-1.85c-.2-.49-.41-.42-.56-.43h-.48c-.16 0-.43.06-.66.31-.23.24-.88.86-.88 2.1 0 1.23.9 2.42 1.02 2.59.13.17 1.77 2.7 4.29 3.79.6.26 1.07.41 1.44.53.6.19 1.15.16 1.58.1.48-.07 1.45-.59 1.66-1.16.2-.57.2-1.06.14-1.16-.06-.1-.23-.16-.48-.28z"/></svg>
            WhatsApp Instant Quote
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- CREDENTIALS STRIP -->
  <section class="credentials-bar-section" style="background: #ffffff; border-bottom: 1px solid #e2e8f0; padding: 22px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; text-align: center;">
        <div style="padding: 10px;">
          <div style="font-size: 24px; font-weight: 800; color: #1f4068;">16+ Years</div>
          <div style="font-size: 13px; color: #64748b; font-weight: 500; margin-top: 4px;">Proven Moving Excellence</div>
        </div>
        <div style="padding: 10px; border-left: 1px solid #e2e8f0;">
          <div style="font-size: 24px; font-weight: 800; color: #f39c12;">IBA Approved</div>
          <div style="font-size: 13px; color: #64748b; font-weight: 500; margin-top: 4px;">100% Valid Gov/Bank Bills</div>
        </div>
        <div style="padding: 10px; border-left: 1px solid #e2e8f0;">
          <div style="font-size: 24px; font-weight: 800; color: #1f4068;">5-Layer Armor</div>
          <div style="font-size: 13px; color: #64748b; font-weight: 500; margin-top: 4px;">Bubble Wrap & Corrugated Crates</div>
        </div>
        <div style="padding: 10px; border-left: 1px solid #e2e8f0;">
          <div style="font-size: 24px; font-weight: 800; color: #27ae60;">GPS Container Fleet</div>
          <div style="font-size: 13px; color: #64748b; font-weight: 500; margin-top: 4px;">Zero-Transshipment Guarantee</div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 1: DETAILED INTRODUCTION & LOCAL CONTEXT -->
  <section style="background: #f8fafc; padding: 60px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 36px; align-items: center;">
        
        <div>
          <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Palamu Division Strategic Logistics</span>
          <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 12px 0 20px; line-height: 1.3;">
            Premier Packers and Movers in Garhwa with Tri-State Transit Capability
          </h2>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Garhwa district occupies a uniquely strategic geographic position in the southwestern sector of Jharkhand. As the only district in Jharkhand that shares borders with three neighboring states — Uttar Pradesh (Sonbhadra district), Bihar (Rohtas and Kaimur districts), and Chhattisgarh (Balrampur and Surguja districts) — Garhwa functions as an indispensable interstate commerce and transit gateway. Whether you are moving across town near Ranka More and Tandwa Chowk, or relocating inter-state to Varanasi, Renukoot, Ambikapur, Patna, or Ranchi via National Highway 39 and National Highway 343, having an experienced, reliable logistics partner is paramount.
          </p>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            <strong>Shree Ashirwad Packers and Movers</strong> brings over 16 years of specialized packing and transport mastery directly to your doorstep in Garhwa. We recognize the complex local geography — from the historical administrative seat at Ranka Raj and the bustling commercial hubs of Nagar Untari (Shri Banshidhar Nagar) to the industrial mining settlements of Bhawanathpur. Our professional crews are thoroughly trained in handling delicate heirlooms, massive solid wood furniture, sensitive electronics, and heavy machinery with meticulous care and precision.
          </p>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155;">
            Every move executed by our team is backed by our signature 5-layer protective packaging system, dedicated closed-body containerized trucks, authentic transit insurance coverage, and 100% IBA-approved relocation bills for complete corporate and government claim reimbursement.
          </p>

          <div style="margin-top: 24px; display: flex; flex-wrap: wrap; gap: 12px;">
            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 10px 16px; font-size: 14px; font-weight: 600; color: #1e293b; display: flex; align-items: center; gap: 8px;">
              <span style="color: #27ae60;">✔</span> Nagar Untari Banshidhar Coverage
            </div>
            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 10px 16px; font-size: 14px; font-weight: 600; color: #1e293b; display: flex; align-items: center; gap: 8px;">
              <span style="color: #27ae60;">✔</span> NH-39 & NH-343 Express Fleet
            </div>
            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 10px 16px; font-size: 14px; font-weight: 600; color: #1e293b; display: flex; align-items: center; gap: 8px;">
              <span style="color: #27ae60;">✔</span> Bhawanathpur Mining Crew
            </div>
          </div>
        </div>

        <!-- Responsive 3:4 Image Container -->
        <div style="display: flex; justify-content: center;">
          <div style="width: 100%; max-width: 400px; aspect-ratio: 3/4; overflow: hidden; border-radius: 14px; box-shadow: 0 12px 30px rgba(0,0,0,0.12); position: relative;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg" alt="Intercity Shifting Truck Loading in Garhwa Jharkhand" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(13, 27, 42, 0.85) 0%, transparent 100%); padding: 20px; color: #ffffff;">
              <p style="font-size: 13px; font-weight: 600; margin: 0; text-transform: uppercase; letter-spacing: 0.5px; color: #f39c12;">Verified Inter-City Fleet</p>
              <p style="font-size: 15px; font-weight: 700; margin: 4px 0 0;">Garhwa Express Shifting Operations</p>
            </div>
          </div>
        </div>

      </div>

      <!-- LOCAL RELOCATION DRIVERS BOX -->
      <div style="background: #ffffff; border-radius: 12px; border: 1px solid #e2e8f0; padding: 32px; margin-top: 45px; box-shadow: 0 4px 16px rgba(0,0,0,0.04);">
        <h3 style="font-size: 21px; font-weight: 700; color: #0d1b2a; margin-bottom: 14px;">Key Relocation Drivers Across Garhwa District</h3>
        <p style="font-size: 15px; line-height: 1.8; color: #475569; margin-bottom: 20px;">
          Relocation demand in Garhwa is fueled by several distinctive socio-economic factors. As a prominent administrative headquarters in Palamu division, Garhwa witnesses continuous personnel transfers among civil court judges, district collectorate officials, police officers stationed across border police outposts, and medical personnel at the Garhwa Sadar Hospital. Additionally, nationalized banks (such as State Bank of India, Punjab National Bank, and Bank of India) and regional rural banks frequently rotate branch managers and staff across Garhwa, Nagar Untari, and Ranka subdivisions.
        </p>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px;">
          <div style="border-left: 3px solid #f39c12; padding-left: 14px;">
            <h4 style="font-size: 16px; font-weight: 700; color: #1e293b; margin-bottom: 6px;">Interstate Border Relocations</h4>
            <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">Regular residential and commercial transitions between Garhwa and Sonbhadra/Renukoot (UP), Rohtas/Dehri-on-Sone (Bihar), and Ramanujganj/Ambikapur (Chhattisgarh).</p>
          </div>
          <div style="border-left: 3px solid #1f4068; padding-left: 14px;">
            <h4 style="font-size: 16px; font-weight: 700; color: #1e293b; margin-bottom: 6px;">Industrial & Mining Transfers</h4>
            <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">Comprehensive moving services for mining staff, technical engineers, and contractors associated with SAIL limestone mines in Bhawanathpur and nearby power projects.</p>
          </div>
          <div style="border-left: 3px solid #27ae60; padding-left: 14px;">
            <h4 style="font-size: 16px; font-weight: 700; color: #1e293b; margin-bottom: 6px;">Religious & Heritage Moves</h4>
            <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">High-security packing and cushioned crating for temple trusts, antique wooden items, and heritage residences across Nagar Untari (Shri Banshidhar Nagar) and Ranka Raj.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: COMPREHENSIVE SERVICES IN GARHWA -->
  <section style="background: #ffffff; padding: 65px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; max-width: 780px; margin: 0 auto 45px;">
        <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Tailored Relocation Solutions</span>
        <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 10px 0 16px;">
          Full-Spectrum Moving Services Across Garhwa & Nagar Untari
        </h2>
        <p style="font-size: 15.5px; line-height: 1.7; color: #64748b;">
          From compact studio apartments to sprawling villas and multi-level corporate offices, our specialized logistics services are engineered to provide maximum safety and zero disruption.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 26px;">
        
        <!-- Service 1 -->
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 28px; transition: transform 0.2s ease, box-shadow 0.2s ease;">
          <div style="width: 50px; height: 50px; background: rgba(243, 156, 18, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 24px; color: #f39c12; margin-bottom: 18px;">
            🏠
          </div>
          <h3 style="font-size: 19px; font-weight: 700; color: #0d1b2a; margin-bottom: 12px;">Household Goods Shifting</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin-bottom: 14px;">
            Our residential relocation service covers everything from dismantling king-size double beds and modular wardrobes to packing fragile kitchen glassware, heavy sofas, and dining sets. Each item is individually cushioned with virgin bubble wrap and corrugated cardboard before loading into clean closed container trucks.
          </p>
          <a href="<?php echo SITE_BASE_URL; ?>/residential-shifting/" style="color: #1f4068; font-weight: 700; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 6px;">
            Explore Household Moving →
          </a>
        </div>

        <!-- Service 2 -->
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 28px; transition: transform 0.2s ease, box-shadow 0.2s ease;">
          <div style="width: 50px; height: 50px; background: rgba(31, 64, 104, 0.12); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 24px; color: #1f4068; margin-bottom: 18px;">
            🏢
          </div>
          <h3 style="font-size: 19px; font-weight: 700; color: #0d1b2a; margin-bottom: 12px;">Corporate & Office Relocation</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin-bottom: 14px;">
            Minimize operational downtime during office relocations across Garhwa town, bank branches, and administrative complexes. We systematically package server racks, desktop computers, modular workstations, legal archives, and conference furniture with color-coded labeling and weekend moving schedules.
          </p>
          <a href="<?php echo SITE_BASE_URL; ?>/business-shifting/" style="color: #1f4068; font-weight: 700; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 6px;">
            Explore Office Relocation →
          </a>
        </div>

        <!-- Service 3 -->
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 28px; transition: transform 0.2s ease, box-shadow 0.2s ease;">
          <div style="width: 50px; height: 50px; background: rgba(39, 174, 96, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 24px; color: #27ae60; margin-bottom: 18px;">
            📄
          </div>
          <h3 style="font-size: 19px; font-weight: 700; color: #0d1b2a; margin-bottom: 12px;">IBA Approved Relocation Billing</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin-bottom: 14px;">
            Transferring as a government servant, police official, judicial officer, or nationalized bank employee? We furnish 100% compliant IBA-approved bills, GST invoices, stamped consignment notes (bilty), transit insurance papers, and itemized inventory sheets for smooth reimbursement.
          </p>
          <a href="<?php echo SITE_BASE_URL; ?>/#iba-approved-bills" style="color: #1f4068; font-weight: 700; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 6px;">
            IBA Approved Billing Details →
          </a>
        </div>

        <!-- Service 4 -->
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 28px; transition: transform 0.2s ease, box-shadow 0.2s ease;">
          <div style="width: 50px; height: 50px; background: rgba(231, 76, 60, 0.12); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 24px; color: #e74c3c; margin-bottom: 18px;">
            🏍️
          </div>
          <h3 style="font-size: 19px; font-weight: 700; color: #0d1b2a; margin-bottom: 12px;">Bike & Two-Wheeler Transport</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin-bottom: 14px;">
            Safe motorcycle and scooter transport from Garhwa to any city across India. We wrap fuel tanks, mirrors, headlamps, and exhaust pipes in high-density foam and corrugated sheets, securing your two-wheeler upright in covered trucks using heavy-duty wheel chocks and ratchet tie-downs.
          </p>
          <a href="<?php echo SITE_BASE_URL; ?>/vehicle-shifting/" style="color: #1f4068; font-weight: 700; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 6px;">
            Explore Bike Transport →
          </a>
        </div>

        <!-- Service 5 -->
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 28px; transition: transform 0.2s ease, box-shadow 0.2s ease;">
          <div style="width: 50px; height: 50px; background: rgba(52, 152, 219, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 24px; color: #3498db; margin-bottom: 18px;">
            🚗
          </div>
          <h3 style="font-size: 19px; font-weight: 700; color: #0d1b2a; margin-bottom: 12px;">Car Carrier Transport Services</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin-bottom: 14px;">
            Relocate your sedan, hatchback, or SUV from Garhwa without adding unnecessary odometer mileage or risking highway damage. We utilize enclosed hydraulic car carrier trailers equipped with wheel clamps and safety belts for complete protection against road gravel and weather.
          </p>
          <a href="<?php echo SITE_BASE_URL; ?>/vehicle-shifting/" style="color: #1f4068; font-weight: 700; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 6px;">
            Explore Car Transport →
          </a>
        </div>

        <!-- Service 6 -->
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 28px; transition: transform 0.2s ease, box-shadow 0.2s ease;">
          <div style="width: 50px; height: 50px; background: rgba(155, 89, 182, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 24px; color: #9b59b6; margin-bottom: 18px;">
            📦
          </div>
          <h3 style="font-size: 19px; font-weight: 700; color: #0d1b2a; margin-bottom: 12px;">Warehouse & Safe Goods Storage</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin-bottom: 14px;">
            Need temporary storage during home renovations or while waiting for your new quarter in Garhwa or destination city? We provide dry, pest-controlled, 24/7 CCTV-monitored warehouse facilities with flexible weekly and monthly storage rental agreements.
          </p>
          <a href="<?php echo SITE_BASE_URL; ?>/warehouse-service/" style="color: #1f4068; font-weight: 700; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 6px;">
            Explore Storage Facilities →
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 3: 5-LAYER PROTECTIVE PACKAGING -->
  <section style="background: #f8fafc; padding: 65px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 36px; align-items: center;">
        
        <!-- Responsive 3:4 Image Container -->
        <div style="display: flex; justify-content: center; order: 2;">
          <div style="width: 100%; max-width: 400px; aspect-ratio: 3/4; overflow: hidden; border-radius: 14px; box-shadow: 0 12px 30px rgba(0,0,0,0.12); position: relative;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="5 Layer Protective Packaging Household Goods Garhwa" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(13, 27, 42, 0.85) 0%, transparent 100%); padding: 20px; color: #ffffff;">
              <p style="font-size: 13px; font-weight: 600; margin: 0; text-transform: uppercase; letter-spacing: 0.5px; color: #f39c12;">Zero Damage Guarantee</p>
              <p style="font-size: 15px; font-weight: 700; margin: 4px 0 0;">5-Layer Shock Absorbing Armour</p>
            </div>
          </div>
        </div>

        <div style="order: 1;">
          <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Flawless Material Engineering</span>
          <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 12px 0 20px; line-height: 1.3;">
            Engineered 5-Layer Packing Standard for Garhwa Relocations
          </h2>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 22px;">
            The road conditions across NH-39 and NH-343 connecting Garhwa with neighboring districts feature varied terrain, sharp ghat bends, and heavy inter-state industrial traffic. Ordinary single-layer packing or gunny bags simply cannot withstand the vibration, sudden braking, and friction during long-haul transit. Shree Ashirwad Packers implements a rigorous 5-layer packaging standard that guarantees absolute protection for your belongings.
          </p>

          <div style="display: flex; flex-direction: column; gap: 16px;">
            
            <div style="display: flex; gap: 14px; align-items: flex-start;">
              <div style="width: 32px; height: 32px; background: #f39c12; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; flex-shrink: 0; font-size: 14px;">1</div>
              <div>
                <h4 style="font-size: 16px; font-weight: 700; color: #0d1b2a; margin-bottom: 4px;">Primary Scratch Guard & Foam Sheet</h4>
                <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">Direct application of 2mm to 4mm polyethylene foam wrap on polished wooden veneers, lacquer finishes, glass dining tabletops, and TV screens to prevent micro-scratches.</p>
              </div>
            </div>

            <div style="display: flex; gap: 14px; align-items: flex-start;">
              <div style="width: 32px; height: 32px; background: #1f4068; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; flex-shrink: 0; font-size: 14px;">2</div>
              <div>
                <h4 style="font-size: 16px; font-weight: 700; color: #0d1b2a; margin-bottom: 4px;">High-Density Air Bubble Cushioning</h4>
                <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">Heavy-duty 10mm bubble wrap envelopes fragile glassware, delicate porcelain, microwaves, audio systems, and monitors to absorb impacts and road shocks.</p>
              </div>
            </div>

            <div style="display: flex; gap: 14px; align-items: flex-start;">
              <div style="width: 32px; height: 32px; background: #27ae60; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; flex-shrink: 0; font-size: 14px;">3</div>
              <div>
                <h4 style="font-size: 16px; font-weight: 700; color: #0d1b2a; margin-bottom: 4px;">5-Ply Heavy Duty Corrugated Armour</h4>
                <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">Double-wall virgin kraft corrugated sheets tailored and wrapped around edges, corners, and flat surfaces to resist external punctures and heavy pressure.</p>
              </div>
            </div>

            <div style="display: flex; gap: 14px; align-items: flex-start;">
              <div style="width: 32px; height: 32px; background: #3498db; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; flex-shrink: 0; font-size: 14px;">4</div>
              <div>
                <h4 style="font-size: 16px; font-weight: 700; color: #0d1b2a; margin-bottom: 4px;">Moisture-Proof Stretch Film Sealing</h4>
                <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">Industrial 23-micron stretch film tightly binds all previous layers, sealing out fine road dust, humidity, and water ingress during transit.</p>
              </div>
            </div>

            <div style="display: flex; gap: 14px; align-items: flex-start;">
              <div style="width: 32px; height: 32px; background: #e74c3c; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; flex-shrink: 0; font-size: 14px;">5</div>
              <div>
                <h4 style="font-size: 16px; font-weight: 700; color: #0d1b2a; margin-bottom: 4px;">Polypropylene High-Tensile Strapping</h4>
                <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">Reinforced heat-sealed strapping bands lock packages into a rigid, non-shifting unit for secure container loading and unloading.</p>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 4: LOCALITIES & SUBDIVISIONS SERVED IN GARHWA -->
  <section style="background: #ffffff; padding: 65px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; max-width: 780px; margin: 0 auto 40px;">
        <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Comprehensive District Reach</span>
        <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 10px 0 16px;">
          Localities, Subdivisions & Towns Served Across Garhwa
        </h2>
        <p style="font-size: 15.5px; line-height: 1.7; color: #64748b;">
          Our dedicated local logistics teams provide seamless doorstep survey, packing, loading, and transit across every major town, subdivision, and colony in Garhwa district.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px;">
        
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Garhwa Town & Central Hubs</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Ranka More Chowk, Tandwa Chowk, Kutchery Road, Sahjana, Station Road, Main Market, Tiwari Rest House Area, Sonpurwa, Dipauwa, and Garhwa Sadar Hospital Colony.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Nagar Untari / Shri Banshidhar Nagar</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Shri Banshidhar Temple precincts, Nagar Untari Railway Colony, Block Office campus, Main Bazaar, Purani Bazar, and surrounding residential clusters along NH-39.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Ranka & Southern Corridor</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Ranka Raj Palace vicinity, Ranka Block Colony, NH-343 highway link to Ramanujganj (Chhattisgarh), Ramkanda, Chiniya, and Bhandaria tribal forest belt.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Bhawanathpur Industrial & Mining Area</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            SAIL Limestone Mining Township, Bhawanathpur Power Grid Colony, Makri, Kharaundhi, and Ketar border crossings into Rohtas (Bihar).
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Majhiaon, Meral & Kandi</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Majhiaon Town, Koel River bank areas, Meral Railway Station, Kandi Block, and the agricultural market corridor connecting Garhwa with Medininagar.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Ramna, Dandai & Dhurki</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Ramna Railway Colony, Dandai Market, Dhurki border route connecting into Sonbhadra (UP), and forest settlements near Sukhaldari Falls.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 5: TRANSPARENT RATES & TRANSIT TIMES -->
  <section style="background: #f8fafc; padding: 65px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; max-width: 780px; margin: 0 auto 45px;">
        <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Honest Pricing Policy</span>
        <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 10px 0 16px;">
          Packers and Movers Garhwa Rate Card & Inter-City Transit Times
        </h2>
        <p style="font-size: 15.5px; line-height: 1.7; color: #64748b;">
          We believe in transparent, upfront estimates with zero hidden surprises. Review our estimated rate structure for local shifts within Garhwa and long-distance interstate moves.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
        
        <!-- Rates Table -->
        <div style="background: #ffffff; border-radius: 12px; border: 1px solid #e2e8f0; overflow: hidden; box-shadow: 0 4px 16px rgba(0,0,0,0.04);">
          <div style="background: #0d1b2a; color: #ffffff; padding: 18px 24px;">
            <h3 style="font-size: 18px; font-weight: 700; margin: 0;">Estimated Shifting Charges in Garhwa</h3>
            <p style="font-size: 13px; color: #94a3b8; margin: 4px 0 0;">Includes packing, loading, transport & unloading</p>
          </div>
          <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
              <thead>
                <tr style="background: #f1f5f9; border-bottom: 2px solid #e2e8f0;">
                  <th style="padding: 12px 16px; font-weight: 700; color: #1e293b;">Move Type</th>
                  <th style="padding: 12px 16px; font-weight: 700; color: #1e293b;">Local Shift (Garhwa)</th>
                  <th style="padding: 12px 16px; font-weight: 700; color: #1e293b;">Inter-City / State</th>
                </tr>
              </thead>
              <tbody>
                <tr style="border-bottom: 1px solid #e2e8f0;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">1 BHK Shifting</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹4,500 - ₹9,000</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹11,000 - ₹22,000</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">2 BHK Shifting</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹7,500 - ₹14,500</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹16,000 - ₹32,000</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">3 BHK / Villa</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹11,000 - ₹21,000</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹24,000 - ₹46,000</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">4 BHK / Bungalow</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹16,000 - ₹28,000</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹32,000 - ₹62,000</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Bike / Scooter Parcel</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹1,800 - ₹3,200</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹3,500 - ₹7,500</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Car Transport (Carrier)</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹4,500 - ₹7,500</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹9,000 - ₹18,500</td>
                </tr>
                <tr>
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Office / Commercial</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">₹9,000 - ₹24,000</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">₹22,000 - ₹58,000</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Transit Times Table -->
        <div style="background: #ffffff; border-radius: 12px; border: 1px solid #e2e8f0; overflow: hidden; box-shadow: 0 4px 16px rgba(0,0,0,0.04);">
          <div style="background: #1b263b; color: #ffffff; padding: 18px 24px;">
            <h3 style="font-size: 18px; font-weight: 700; margin: 0;">Transit Times from Garhwa</h3>
            <p style="font-size: 13px; color: #94a3b8; margin: 4px 0 0;">Dedicated express container truck schedules</p>
          </div>
          <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
              <thead>
                <tr style="background: #f1f5f9; border-bottom: 2px solid #e2e8f0;">
                  <th style="padding: 12px 16px; font-weight: 700; color: #1e293b;">Destination City</th>
                  <th style="padding: 12px 16px; font-weight: 700; color: #1e293b;">Distance</th>
                  <th style="padding: 12px 16px; font-weight: 700; color: #1e293b;">Est. Transit Time</th>
                </tr>
              </thead>
              <tbody>
                <tr style="border-bottom: 1px solid #e2e8f0;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Garhwa to Daltonganj</td>
                  <td style="padding: 12px 16px; color: #64748b;">~35 km (NH-39)</td>
                  <td style="padding: 12px 16px; color: #27ae60; font-weight: 600;">Same Day (4 - 6 Hours)</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Garhwa to Ranchi</td>
                  <td style="padding: 12px 16px; color: #64748b;">~215 km (NH-39)</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">1 - 2 Days</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Garhwa to Varanasi (UP)</td>
                  <td style="padding: 12px 16px; color: #64748b;">~210 km (via Renukoot)</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">1 - 2 Days</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Garhwa to Ambikapur (CG)</td>
                  <td style="padding: 12px 16px; color: #64748b;">~165 km (NH-343)</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">1 - 2 Days</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Garhwa to Patna / Gaya</td>
                  <td style="padding: 12px 16px; color: #64748b;">~240 - 275 km</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">2 - 3 Days</td>
                </tr>
                <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Garhwa to Kolkata / JSR</td>
                  <td style="padding: 12px 16px; color: #64748b;">~430 - 560 km</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">2 - 4 Days</td>
                </tr>
                <tr>
                  <td style="padding: 12px 16px; font-weight: 600; color: #334155;">Garhwa to Delhi NCR</td>
                  <td style="padding: 12px 16px; color: #64748b;">~950 km</td>
                  <td style="padding: 12px 16px; color: #1f4068; font-weight: 600;">3 - 5 Days</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 6: MODERN CLOSED CONTAINER FLEET & GPS -->
  <section style="background: #ffffff; padding: 65px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 36px; align-items: center;">
        
        <div>
          <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Specialized Transport Network</span>
          <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 12px 0 20px; line-height: 1.3;">
            Dedicated GPS-Tracked Closed Container Fleet in Garhwa
          </h2>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
            Unlike unorganized local transporters who rely on open tarpaulin trucks prone to water seepage, dust contamination, and highway pilferage, Shree Ashirwad Packers deploys a specialized fleet of closed-body container vehicles. Ranging from 14-foot and 17-foot container trucks for local and regional shifts to 24-foot and 32-foot multi-axle trucks for long-distance relocations, our vehicles ensure maximum security.
          </p>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 22px;">
            Every truck in our fleet is fitted with advanced GPS tracking hardware. You receive regular SMS and WhatsApp transit status updates as your consignment maneuvers the NH-39 corridor towards Ranchi or crosses border check-posts into Sonbhadra or Ramanujganj.
          </p>

          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px;">
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
              <div style="font-weight: 700; color: #0d1b2a; font-size: 15px; margin-bottom: 4px;">Zero Transshipment</div>
              <p style="font-size: 13px; color: #64748b; margin: 0; line-height: 1.5;">Your consignment is loaded at Garhwa and delivered directly at your destination door without midpoint offloading.</p>
            </div>
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
              <div style="font-weight: 700; color: #0d1b2a; font-size: 15px; margin-bottom: 4px;">Weatherproof Enclosure</div>
              <p style="font-size: 13px; color: #64748b; margin: 0; line-height: 1.5;">100% leak-proof steel body containers prevent water damage during heavy monsoons and keep fine road dust out.</p>
            </div>
          </div>
        </div>

        <!-- Responsive 3:4 Image Container -->
        <div style="display: flex; justify-content: center;">
          <div style="width: 100%; max-width: 400px; aspect-ratio: 3/4; overflow: hidden; border-radius: 14px; box-shadow: 0 12px 30px rgba(0,0,0,0.12); position: relative;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe Transit Closed Container Truck Garhwa" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(13, 27, 42, 0.85) 0%, transparent 100%); padding: 20px; color: #ffffff;">
              <p style="font-size: 13px; font-weight: 600; margin: 0; text-transform: uppercase; letter-spacing: 0.5px; color: #f39c12;">All-Weather Fleet</p>
              <p style="font-size: 15px; font-weight: 700; margin: 4px 0 0;">Dedicated Containerized Transport</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 7: ELECTRONICS & HEAVY APPLIANCE CRATING -->
  <section style="background: #f8fafc; padding: 65px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 36px; align-items: center;">
        
        <!-- Responsive 3:4 Image Container -->
        <div style="display: flex; justify-content: center; order: 2;">
          <div style="width: 100%; max-width: 400px; aspect-ratio: 3/4; overflow: hidden; border-radius: 14px; box-shadow: 0 12px 30px rgba(0,0,0,0.12); position: relative;">
            <img src="<?php echo SITE_BASE_URL; ?>/images/electronics-led-tv-crating-jharkhand.jpg" alt="LED TV and Electronics Crating Services Garhwa" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(13, 27, 42, 0.85) 0%, transparent 100%); padding: 20px; color: #ffffff;">
              <p style="font-size: 13px; font-weight: 600; margin: 0; text-transform: uppercase; letter-spacing: 0.5px; color: #f39c12;">Custom Wooden Crates</p>
              <p style="font-size: 15px; font-weight: 700; margin: 4px 0 0;">Electronics & Fragile Appliance Protection</p>
            </div>
          </div>
        </div>

        <div style="order: 1;">
          <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Precision Handling</span>
          <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 12px 0 20px; line-height: 1.3;">
            Specialized Crating for LED TVs, Refrigerators & Fine Furniture
          </h2>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
            Modern homes in Garhwa house sensitive consumer electronics, including large 55-inch to 85-inch 4K OLED screens, double-door inverter refrigerators, front-load washing machines, and water purifiers. These high-value items require specialized handling protocols beyond standard carton packaging.
          </p>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 22px;">
            Our technicians custom-fabricate wooden crates on demand for large smart displays and crystal chandeliers. Washing machine drum locking bolts are inserted before transit to prevent suspension damage, and refrigerator compressors are stabilized with internal padding to prevent coil leakage.
          </p>

          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px;">
            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
              <div style="font-weight: 700; color: #0d1b2a; font-size: 15px; margin-bottom: 4px;">Screen Guard Crates</div>
              <p style="font-size: 13px; color: #64748b; margin: 0; line-height: 1.5;">Solid plywood crates with internal thermocol and foam buffers designed specifically for curved and OLED displays.</p>
            </div>
            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
              <div style="font-weight: 700; color: #0d1b2a; font-size: 15px; margin-bottom: 4px;">Appliance Transit Kits</div>
              <p style="font-size: 13px; color: #64748b; margin: 0; line-height: 1.5;">Drum lock pins for washing machines, anti-tilt brackets, and heavy-duty quilted covers for large refrigerators.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 8: STEP-BY-STEP MOVING PROCESS -->
  <section style="background: #ffffff; padding: 65px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; max-width: 780px; margin: 0 auto 45px;">
        <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Structured Workflow</span>
        <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 10px 0 16px;">
          Our 4-Step Seamless Moving Process in Garhwa
        </h2>
        <p style="font-size: 15.5px; line-height: 1.7; color: #64748b;">
          Every relocation is executed through a disciplined operational framework designed to eliminate stress, ensure accountability, and deliver complete satisfaction.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 24px;">
        
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 26px; position: relative;">
          <div style="width: 46px; height: 46px; background: #0d1b2a; color: #f39c12; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; margin-bottom: 18px;">
            01
          </div>
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 10px;">Pre-Move Survey & Written Quote</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            We conduct an in-person or video survey of your belongings in Garhwa, assess volume and packing requirements, and provide a guaranteed written estimate with no hidden costs.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 26px; position: relative;">
          <div style="width: 46px; height: 46px; background: #0d1b2a; color: #f39c12; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; margin-bottom: 18px;">
            02
          </div>
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 10px;">5-Layer Packing & Numbering</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Our trained packing crew arrives with premium materials, disassembles heavy furniture, wraps every item meticulously, and creates an itemized inventory sheet.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 26px; position: relative;">
          <div style="width: 46px; height: 46px; background: #0d1b2a; color: #f39c12; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; margin-bottom: 18px;">
            03
          </div>
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 10px;">Container Loading & Safe Transit</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Goods are loaded using hydraulic ramps and protective blankets inside closed-body trucks. Real-time GPS tracking keeps you informed throughout the highway journey.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 26px; position: relative;">
          <div style="width: 46px; height: 46px; background: #0d1b2a; color: #f39c12; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; margin-bottom: 18px;">
            04
          </div>
          <h3 style="font-size: 18px; font-weight: 700; color: #0d1b2a; margin-bottom: 10px;">Unloading, Unpacking & Setup</h3>
          <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0;">
            Upon arrival at your new residence, our team unloads, reassembles beds and wardrobes, places furniture in designated rooms, and removes used packing debris.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 9: LOCAL BRANCH & INTERACTIVE MAP -->
  <section style="background: #f8fafc; padding: 65px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 36px; align-items: center;">
        
        <div>
          <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Local Presence in Garhwa</span>
          <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 12px 0 20px; line-height: 1.3;">
            Visit Our Garhwa Office or Request a Free Home Survey
          </h2>
          <p style="font-size: 15.5px; line-height: 1.8; color: #334155; margin-bottom: 20px;">
            Our Garhwa operational branch is centrally located near Ranka More Chowk, providing rapid response times to customers throughout Garhwa town, Nagar Untari, Bhawanathpur, and surrounding areas. Our local team is ready to assist you with customized moving plans, IBA documentation, and immediate container dispatch.
          </p>

          <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px; margin-bottom: 20px;">
            <div style="font-size: 16px; font-weight: 700; color: #0d1b2a; margin-bottom: 6px;">Garhwa Branch Office</div>
            <p style="font-size: 14px; color: #64748b; margin: 0 0 10px; line-height: 1.6;">
              Main Road, Near Ranka More Chowk, Garhwa, Jharkhand - 822114
            </p>
            <div style="font-size: 14px; color: #1e293b; margin-bottom: 4px;"><strong>Helpline:</strong> +91 8409531615</div>
            <div style="font-size: 14px; color: #1e293b; margin-bottom: 4px;"><strong>Email:</strong> enquiry@shreeashirwadpackers.com</div>
            <div style="font-size: 14px; color: #1e293b;"><strong>Working Hours:</strong> Monday - Sunday: 7:00 AM - 10:00 PM</div>
          </div>

          <div style="display: flex; gap: 12px; flex-wrap: wrap;">
            <a href="tel:+918409531615" class="btn" style="background: #1f4068; color: #ffffff; font-weight: 700; padding: 12px 22px; border-radius: 8px; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 8px;">
              Call Garhwa Branch
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact" class="btn" style="background: #f39c12; color: #ffffff; font-weight: 700; padding: 12px 22px; border-radius: 8px; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 8px;">
              Book Pre-Move Survey
            </a>
          </div>
        </div>

        <!-- Google Map Embed -->
        <div style="border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.08); border: 1px solid #e2e8f0; height: 380px;">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115984.87228807987!2d83.74321303862657!3d24.161042797686524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398eb3597379207d%3A0x6b6c0b315264ba3c!2sGarhwa%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"
            title="Garhwa Jharkhand Location Map">
          </iframe>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 10: FAQS -->
  <section style="background: #ffffff; padding: 65px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; max-width: 780px; margin: 0 auto 45px;">
        <span style="color: #f39c12; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">Frequently Asked Questions</span>
        <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0d1b2a; margin: 10px 0 16px;">
          Common Questions About Shifting in Garhwa
        </h2>
        <p style="font-size: 15.5px; line-height: 1.7; color: #64748b;">
          Have questions about your upcoming move in Garhwa? Here are clear, detailed answers to the most common queries we receive from local residents and corporate clients.
        </p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px; max-width: 920px; margin: 0 auto;">
        
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Why is Shree Ashirwad the most trusted packers and movers in Garhwa?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            Shree Ashirwad Packers and Movers has over 16 years of hands-on logistics expertise across Jharkhand and border corridors. In Garhwa, we provide specialized multi-layer packaging, trained in-house moving crews, IBA-approved billing for government and public sector transfers, and dedicated GPS-tracked closed container trucks for seamless moves to Ranchi, Patna, Varanasi, Ambikapur, and nationwide.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Do you provide IBA approved moving bills for employee transfers in Garhwa?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            Yes, absolutely. We provide 100% authentic IBA-approved bills complete with GST invoices, stamped consignment notes (bilty), transit insurance policies, packing inventory lists, and quotation copies. These documents are recognized and accepted by all central/state government departments, banks (SBI, PNB, BoI), police forces, judicial officers, and corporate companies for complete relocation allowance reimbursement.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">How does Garhwa's unique tri-state border location affect inter-state transit times?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            Garhwa is strategically situated bordering Uttar Pradesh (Sonbhadra/Renukoot), Bihar (Rohtas/Kaimur), and Chhattisgarh (Balrampur/Ambikapur). Our dedicated fleet operates regularly on NH-39 and NH-343. Transit to Daltonganj is completed same-day (4-6 hours), while moves to Ranchi, Varanasi, or Ambikapur take only 1 to 2 days with full e-way bill compliance.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Do you offer packing and moving services in Nagar Untari (Shri Banshidhar Nagar) and Bhawanathpur?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            Yes, our operational network covers the entire Garhwa district including Nagar Untari (Shri Banshidhar Nagar), Bhawanathpur mining township, Ranka, Majhiaon, Meral, Ramna, Dandai, Dhurki, Chiniya, Ramkanda, Bhandaria, and Kandi. We provide doorstep survey, premium packaging, and seamless delivery across all towns and rural subdivisions.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">What packing materials do you use to protect fragile household items and electronic appliances?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            We deploy a robust 5-layer protective packing standard: virgin air-bubble wrap, heavy-duty 5-ply to 7-ply corrugated cardboard sheets, edge corner angle boards, moisture-resistant stretch film wrap, and high-tensile strapping. Fragile glassware, porcelain crockery, and LED/OLED televisions are packed in tailor-made wooden crates with foam cushioning.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">Can I transport my two-wheeler bike or car from Garhwa to other cities?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            Yes, we specialize in safe vehicle shipping. Motorcycles and scooters are wrapped in multi-layer bubble wrap, foam sheets, and corrugated carton armor before being secured with heavy-duty ratchet tie-down belts inside enclosed container trucks. For cars, we provide door-to-door transit via specialized hydraulic car carrier trucks with zero road-wear.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">How are household shifting charges calculated in Garhwa?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            Our shifting rates are completely transparent and calculated based on: (1) Volume and cubic feet of household goods, (2) Shifting distance and route terrain, (3) Quality and quantity of 5-layer packing materials required, (4) Floor levels and elevator availability at both pickup and destination locations, and (5) Optional comprehensive transit insurance. We provide binding upfront written estimates with zero hidden fees.
          </p>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h3 style="font-size: 17px; font-weight: 700; color: #0d1b2a; margin-bottom: 8px;">How early should I book my relocation with Shree Ashirwad Packers in Garhwa?</h3>
          <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
            For local moves within Garhwa or nearby Daltonganj, booking 24 to 48 hours in advance is recommended. For inter-state relocations to Delhi, Mumbai, Bengaluru, Kolkata, or Chhattisgarh/UP border destinations, booking 3 to 5 days ahead allows us to perform a complimentary pre-move survey, prepare custom wooden crates, and reserve dedicated container vehicles.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section: Google My Business Authentic Reviews -->
  <?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

  <!-- SECTION 11: CALL TO ACTION BANNER -->
  <section style="background: linear-gradient(135deg, #0d1b2a 0%, #1f4068 100%); padding: 55px 0; color: #ffffff; text-align: center;">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
      <h2 style="font-size: clamp(24px, 3.5vw, 36px); font-weight: 800; margin-bottom: 16px;">
        Ready for a Smooth, Hassle-Free Move in Garhwa?
      </h2>
      <p style="font-size: 16.5px; line-height: 1.7; color: #e2e8f0; margin-bottom: 30px; max-width: 750px; margin-left: auto; margin-right: auto;">
        Get your free, no-obligation moving quote today. Our Garhwa moving experts are available 24/7 to plan your move with guaranteed safety, IBA-approved documentation, and zero stress.
      </p>
      <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 14px;">
        <a href="tel:+918409531615" class="btn" style="background: #f39c12; color: #ffffff; font-weight: 700; padding: 14px 28px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 9px; font-size: 15px; box-shadow: 0 4px 14px rgba(243, 156, 18, 0.4);">
          <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
          Call: 8409531615
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Garhwa" target="_blank" rel="noopener" class="btn" style="background: #25d366; color: #ffffff; font-weight: 700; padding: 14px 28px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 9px; font-size: 15px; box-shadow: 0 4px 14px rgba(37, 211, 102, 0.35);">
          <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-5.46-4.45-9.92-9.91-9.92zM12.04 20.08c-1.48 0-2.93-.4-4.2-1.15l-.3-.18-3.12.82.83-3.04-.2-.31c-.82-1.31-1.26-2.83-1.26-4.39 0-4.49 3.65-8.14 8.14-8.14 4.49 0 8.14 3.65 8.14 8.14 0 4.49-3.65 8.14-8.14 8.14zm4.46-6.1c-.24-.12-1.45-.72-1.67-.8-.23-.09-.39-.12-.56.12-.17.24-.65.8-.8 1.04-.15.24-.3.27-.55.15-.24-.12-1.03-.38-1.96-1.21-.73-.65-1.22-1.45-1.36-1.7-.14-.24-.01-.38.11-.5.11-.11.24-.28.36-.42.12-.14.16-.24.24-.4.08-.17.04-.31-.02-.43s-.56-1.35-.77-1.85c-.2-.49-.41-.42-.56-.43h-.48c-.16 0-.43.06-.66.31-.23.24-.88.86-.88 2.1 0 1.23.9 2.42 1.02 2.59.13.17 1.77 2.7 4.29 3.79.6.26 1.07.41 1.44.53.6.19 1.15.16 1.58.1.48-.07 1.45-.59 1.66-1.16.2-.57.2-1.06.14-1.16-.06-.1-.23-.16-.48-.28z"/></svg>
          WhatsApp Us Now
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/contact" class="btn" style="background: transparent; color: #ffffff; border: 2px solid #ffffff; font-weight: 700; padding: 12px 26px; border-radius: 8px; text-decoration: none; font-size: 15px;">
          Contact Form
        </a>
      </div>
    </div>
  </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

<script src="<?php echo SITE_BASE_URL; ?>/assets/js/main.js" defer></script>
</body>
</html>
