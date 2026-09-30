<?php
/**
 * Household Shifting Services in Bokaro - Shree Ashirwad Packers and Movers
 * 
 * High-performance, fully SEO-optimized landing page for residential relocation,
 * apartment shifting, quarter moving, and home packing in Bokaro Steel City and Chas.
 * Target Keyword: household shifting services in bokaro
 */

// Define page-specific metadata
$page_title = "Household Shifting Services in Bokaro | 5-Layer Packing - Shree Ashirwad";
$page_description = "Reliable household shifting services in Bokaro & Chas by Shree Ashirwad Packers and Movers. 5-layer packing, furniture dismantling, zero-damage kitchen crockery shifting, IBA approved bills for BSL & bank staff. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/household-shifting-services-in-bokaro";

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
  <meta name="keywords" content="household shifting services in bokaro, home shifting in bokaro, house relocation chas bokaro, packers and movers for home shifting bokaro, bsl quarter shifting bokaro, furniture shifting bokaro steel city, apartment relocation bokaro">
  <link rel="canonical" href="<?php echo $canonical_url; ?>">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta property="og:url" content="<?php echo $canonical_url; ?>">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg">
  <meta property="og:image:alt" content="Household Furniture Wrapping and Home Shifting in Bokaro by Shree Ashirwad Packers">
  <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
  <meta property="og:locale" content="en_IN">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg">

  <!-- Geo Meta Tags for Bokaro Steel City -->
  <meta name="geo.region" content="IN-JH">
  <meta name="geo.placename" content="Bokaro Steel City">
  <meta name="geo.position" content="23.6693;86.1511">
  <meta name="ICBM" content="23.6693, 86.1511">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
  <link rel="shortcut icon" href="<?php echo SITE_BASE_URL; ?>/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">

  <!-- Typography & CSS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

  <!-- Structured Data: LocalBusiness / MovingCompany -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "MovingCompany",
    "name": "Shree Ashirwad Packers and Movers Bokaro - Household Shifting",
    "url": "<?php echo $canonical_url; ?>",
    "logo": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
    "image": "<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg",
    "description": "Premium household shifting services in Bokaro Steel City & Chas by Shree Ashirwad Packers. Full-service home relocation, 5-layer protective packing, furniture dismantling, glassware crating, and IBA compliant billing.",
    "telephone": "<?php echo SECONDARY_PHONE_RAW; ?>",
    "priceRange": "₹4,200 - ₹38,000",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Plot no - 54/c, Post office sector - 12/A",
      "addressLocality": "Bokaro Steel City",
      "addressRegion": "Jharkhand",
      "postalCode": "827012",
      "addressCountry": "IN"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 23.6693,
      "longitude": 86.1511
    },
    "openingHoursSpecification": {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
      "opens": "07:00",
      "closes": "22:00"
    },
    "areaServed": [
      { "@type": "City", "name": "Bokaro Steel City" },
      { "@type": "AdministrativeArea", "name": "Chas" },
      { "@type": "Place", "name": "Sector 4 City Centre" },
      { "@type": "Place", "name": "Sector 1" },
      { "@type": "Place", "name": "Sector 12" },
      { "@type": "Place", "name": "Bermo" },
      { "@type": "Place", "name": "Bokaro Thermal" }
    ]
  }
  </script>

  <!-- Structured Data: Service -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "Household Shifting Service",
    "provider": {
      "@type": "MovingCompany",
      "name": "Shree Ashirwad Packers and Movers"
    },
    "areaServed": {
      "@type": "City",
      "name": "Bokaro Steel City"
    },
    "description": "Comprehensive residential relocation and household packing services in Bokaro Steel City. 5-layer furniture wrap, heavy appliance protection, delicate chinaware crating, and complete reassembly at destination.",
    "offers": {
      "@type": "Offer",
      "priceCurrency": "INR",
      "price": "5500",
      "availability": "https://schema.org/InStock"
    }
  }
  </script>

  <!-- Structured Data: BreadcrumbList -->
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
        "name": "Packers and Movers Bokaro",
        "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bokaro"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Household Shifting in Bokaro",
        "item": "<?php echo $canonical_url; ?>"
      }
    ]
  }
  </script>

  <!-- Structured Data: FAQPage -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "What packing materials are included in household shifting services in Bokaro?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Our 5-layer household packaging includes heavy-gauge air bubble wrap, virgin corrugated rolls, expandable foam edge protectors, heavy 5-ply cartons, and waterproof stretch film. For delicate glass tabletops and marble dining tops, custom wooden crates are constructed on site."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide IBA approved bills for SAIL employee relocation claims in Bokaro?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we are fully IBA approved and provide 100% compliant documentation for SAIL Bokaro Steel Plant, BSNL, Coal India, nationalized bank employees, and defense officers. This includes authentic consignment notes (LR copy), itemized packing inventory lists, transit insurance policy documents, and GST-compliant invoices."
        }
      },
      {
        "@type": "Question",
        "name": "How is fragile kitchen crockery and chinaware packed for transit?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Each ceramic plate, bone china cup, and glassware item is individually wrapped with shock-absorbing foam paper and bubble sheets. Items are packed vertically inside heavy double-wall cartons separated by cell dividers, and voids are filled with crumpled packaging paper to eliminate movement."
        }
      },
      {
        "@type": "Question",
        "name": "Do you dismantle and reassemble heavy double beds, wardrobes, and modular furniture?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, our team includes trained carpenters who dismantle king/queen size hydraulic storage beds, sliding wardrobes, dining tables, and modular study units. At destination, all furniture is reassembled and positioned according to your room floor plan."
        }
      },
      {
        "@type": "Question",
        "name": "What is the average cost of local household shifting in Bokaro & Chas?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Local shifting within Bokaro Steel City or Chas ranges from ₹4,500 to ₹7,500 for a 1 BHK, ₹7,500 to ₹12,000 for a 2 BHK, and ₹11,500 to ₹17,000 for a 3 BHK apartment or bungalow, covering packing, loading, local transport, unloading, and unpacking."
        }
      },
      {
        "@type": "Question",
        "name": "How many days in advance should I schedule my home shifting in Bokaro?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We recommend booking 3 to 5 days in advance for local shifting and 7 to 10 days for long-distance interstate moves to ensure seamless truck allocation and proper crew scheduling, particularly during month-end transfer peak periods."
        }
      },
      {
        "@type": "Question",
        "name": "How do you protect large LED TVs and double-door refrigerators during moves?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "LED TVs are packaged with thermocol screen shields, multi-layer bubble wrap, and encased in heavy telescopic TV crates. Refrigerators and washing machines receive thick padded moving blankets and corrugated corner covers to prevent dents."
        }
      },
      {
        "@type": "Question",
        "name": "Do you handle quarter-to-quarter shifting within SAIL Bokaro Township?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we regularly perform quarter transfers across Sectors 1 through 12, Camp 2, and BSL officer bungalows. We ensure prompt loading and unloading that complies with township security protocols and quarter clearance timelines."
        }
      },
      {
        "@type": "Question",
        "name": "Is goods transit insurance provided for household items?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we provide comprehensive all-risk transit insurance policies underwritten by leading national insurance companies. This covers accidental transit damage, vehicle collision, fire, and structural highway hazards during long-distance moves."
        }
      },
      {
        "@type": "Question",
        "name": "Can you also transport my car or bike along with household goods?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Absolutely. We offer combined household and vehicle shifting packages. Your two-wheeler or four-wheeler can be transported either in the same large covered container carrier or via dedicated enclosed auto carriers at attractive package rates."
        }
      }
    ]
  }
  </script>
</head>
<body style="background-color: #f8fafc; color: #1e293b; font-family: 'Plus Jakarta Sans', sans-serif; line-height: 1.6;">

  <!-- Global Header Navigation -->
  <?php include __DIR__ . '/../includes/header.php'; ?>

  <!-- Main Content Container -->
  <main class="page-content" style="padding: 40px 0; background: #f8fafc;">
    <article class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <!-- Breadcrumb Bar -->
      <nav aria-label="breadcrumb" style="margin-bottom: 24px;">
        <ol style="display: flex; flex-wrap: wrap; list-style: none; padding: 0; margin: 0; font-size: 0.9rem; color: #64748b;">
          <li><a href="<?php echo SITE_BASE_URL; ?>/" style="color: #ff6a28; text-decoration: none;">Home</a></li>
          <li style="margin: 0 8px;">/</li>
          <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bokaro" style="color: #ff6a28; text-decoration: none;">Bokaro Packers</a></li>
          <li style="margin: 0 8px;">/</li>
          <li style="color: #0f223d; font-weight: 600;">Household Shifting in Bokaro</li>
        </ol>
      </nav>

      <!-- Main Header Section -->
      <header style="margin-bottom: 35px;">
        <h1 style="font-family: 'Outfit', sans-serif; font-size: 2.6rem; color: #0f223d; font-weight: 800; line-height: 1.25; margin-bottom: 16px;">
          Household Shifting Services in Bokaro: Professional 5-Layer Residential Relocation
        </h1>
        <p style="font-size: 1.15rem; color: #475569; max-width: 980px; line-height: 1.7;">
          Relocating your household belongings across Bokaro Steel City or interstate across India calls for meticulous care, premium packing materials, and experienced moving personnel. At <strong>Shree Ashirwad Packers and Movers</strong>, we offer industry-standard <a href="<?php echo SITE_BASE_URL; ?>/household-shifting-services-in-bokaro" style="color: #ff6a28; text-decoration: underline; font-weight: 600;">household shifting services in Bokaro</a>, encompassing full-scale furniture dismantling, fragile kitchenware crating, safe appliance handling, and complete doorstep setup across all SAIL sectors, Chas, and neighboring districts.
        </p>
      </header>

      <!-- Quick Highlights Grid -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px; margin-bottom: 40px;">
        <div style="background: #ffffff; padding: 22px; border-radius: 10px; border-left: 4px solid #ff6a28; box-shadow: 0 2px 10px rgba(0,0,0,0.04);">
          <h3 style="font-size: 1.1rem; color: #0f223d; margin-bottom: 8px; font-weight: 700;">5-Layer Defensive Wrap</h3>
          <p style="font-size: 0.95rem; color: #64748b; margin: 0;">Multi-layered bubble cushioning, foam corner shields, heavy corrugated boards, and moisture stretch wrap.</p>
        </div>
        <div style="background: #ffffff; padding: 22px; border-radius: 10px; border-left: 4px solid #0284c7; box-shadow: 0 2px 10px rgba(0,0,0,0.04);">
          <h3 style="font-size: 1.1rem; color: #0f223d; margin-bottom: 8px; font-weight: 700;">Carpenter Dismantling</h3>
          <p style="font-size: 0.95rem; color: #64748b; margin: 0;">Skilled technicians dismantle and reassemble king-size hydraulic beds, sliding wardrobes, and modular units.</p>
        </div>
        <div style="background: #ffffff; padding: 22px; border-radius: 10px; border-left: 4px solid #10b981; box-shadow: 0 2px 10px rgba(0,0,0,0.04);">
          <h3 style="font-size: 1.1rem; color: #0f223d; margin-bottom: 8px; font-weight: 700;">IBA Approved Invoicing</h3>
          <p style="font-size: 0.95rem; color: #64748b; margin: 0;">100% compliant reimbursement documentation for SAIL Bokaro, banks, public sector, and corporate employees.</p>
        </div>
        <div style="background: #ffffff; padding: 22px; border-radius: 10px; border-left: 4px solid #8b5cf6; box-shadow: 0 2px 10px rgba(0,0,0,0.04);">
          <h3 style="font-size: 1.1rem; color: #0f223d; margin-bottom: 8px; font-weight: 700;">Zero-Damage Guarantee</h3>
          <p style="font-size: 0.95rem; color: #64748b; margin: 0;">Comprehensive marine transit insurance backing paired with covered container trucks for all-weather moves.</p>
        </div>
      </div>

      <!-- Hero Visual Section -->
      <figure style="margin: 0 auto 35px; max-width: 550px; text-align: center;">
        <img src="<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg" alt="Household wooden furniture wrapping in Bokaro Steel City" style="width: 100%; height: 280px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 14px rgba(0,0,0,0.08); display: block; margin: 0 auto;" loading="lazy">
        <figcaption style="font-size: 0.88rem; color: #64748b; margin-top: 8px; text-align: center;">
          Multi-layer foam wrapping and corrugated protective edge shielding applied to wooden furniture in Bokaro by Shree Ashirwad Packers.
        </figcaption>
      </figure>

      <!-- In-Depth Content Sections -->
      <div style="background: #ffffff; padding: 40px; border-radius: 12px; box-shadow: 0 2px 14px rgba(0,0,0,0.04); margin-bottom: 40px;">
        
        <section style="margin-bottom: 35px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 16px;">
            The Challenges of Residential Relocation in Bokaro Steel City
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Bokaro Steel City is uniquely structured around distinct planned sectors (from Sector 1 to Sector 12), housing thousands of SAIL engineers, administrative executives, teachers, and technical professionals in government quarters and officer bungalows. Simultaneously, bustling commercial and private residential areas like Chas, Co-operative Colony, Camp 2, and Kurmidih feature multi-storey apartment complexes, narrow service lanes, and independent villas.
          </p>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Moving an entire family residence involves far more than merely packing boxes into a truck. It requires systematically safeguarding delicate electronic home appliances, securing heavy teakwood dining sets, preventing cracks in bone china crockery, navigating strict township estate regulations, and managing staircase hoisting in buildings without service elevators. <strong>Shree Ashirwad Packers and Movers</strong> has developed a proven residential moving system specifically tailored to Bokaro's architectural landscape and corporate transfer requirements.
          </p>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Whether you are shifting locally from Sector 4 to Sector 9, moving into a newly built high-rise in Chas, or transferring out of state to Kolkata, Ranchi, Patna, Delhi NCR, or Bangalore, our experienced packing crews, in-house carpenters, and heavy vehicle operators handle every single item with familial care.
          </p>
        </section>

        <!-- Room-by-Room Packing Protocol -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 20px;">
            Our Systematic Room-by-Room Packing Methodology
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 24px;">
            To ensure zero chaos during unpacking at your new home, our team categorizes and packs your residence room by room using standardized color-coded labeling:
          </p>

          <div style="display: grid; grid-template-columns: 1fr; gap: 20px;">
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 22px;">
              <h3 style="font-size: 1.2rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">
                1. Living & Drawing Room: Upholstery & Electronics Security
              </h3>
              <p style="font-size: 1rem; color: #475569; margin: 0; line-height: 1.7;">
                Fabric and leather sofa sets are enveloped in breathable non-woven moving blankets and sealed with heavy stretch film to prevent dust, grease stains, and scuffing. Glass coffee tables and display cabinets are dismantled, with glass panels encased in protective foam corner caps and double bubble wrap. Ultra-HD LED TVs are crated with shock-dampening screen cushions.
              </p>
            </div>

            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 22px;">
              <h3 style="font-size: 1.2rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">
                2. Modular Kitchen & Dining: Crockery & Spice Rack Precision
              </h3>
              <p style="font-size: 1rem; color: #475569; margin: 0; line-height: 1.7;">
                Kitchen items require the highest packing density. Plates, bowls, and glassware are individually wrapped in newsprint foam and arranged vertically within heavy double-wall corrugated cartons separated by cell dividers. Spice jars and pantry items are sealed in airtight poly bags to avoid spillage, while heavy cookware and non-stick pans are cushioned with corrugated fluting.
              </p>
            </div>

            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 22px;">
              <h3 style="font-size: 1.2rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">
                3. Master Bedrooms: Bed Dismantling & Wardrobe Care
              </h3>
              <p style="font-size: 1rem; color: #475569; margin: 0; line-height: 1.7;">
                Our carpenters carefully unbolt hydraulic king/queen size storage beds, labeling all hardware screws in sealed pouches taped directly to corresponding furniture panels. Mattresses are wrapped in heavy-duty waterproof poly covers. Wardrobe clothes are packed in dedicated upright wardrobe carton boxes to prevent creasing and preserve fabric freshness.
              </p>
            </div>

            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 22px;">
              <h3 style="font-size: 1.2rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">
                4. Heavy Home Appliances: Refrigerator, Washing Machine & Microwave
              </h3>
              <p style="font-size: 1rem; color: #475569; margin: 0; line-height: 1.7;">
                Refrigerators are thoroughly defrosted, interior shelves taped, and external compressors padded with custom corrugated sleeves. Washing machine drums are secured with transit suspension bolts to prevent internal drum off-centering. Microwaves, water purifiers, and split AC units are securely boxed with fitted styrofoam blocks.
              </p>
            </div>
          </div>
        </section>

        <!-- Specialized Mandir, Heirlooms and Delicate Articles -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 16px;">
            Specialized Packing for Mandirs, Deity Idols & Precious Family Heirlooms
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Every household in Jharkhand cherishes sacred puja rooms and family heirlooms passed through generations. We treat your prayer mandir, brass deeyas, marble murtis, and framed deities with utmost spiritual reverence and mechanical care. Before handling sacred items, our crew members wash their hands and use fresh, unused white packing paper and virgin foam sheets.
          </p>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Intricately carved wooden temples and heavy Makrana marble mandirs are encased in custom tailored plywood crates built by our carpenters right on site. Each idol is wrapped in protective velvet cloth, wrapped in 3-ply air bubble sheets, and boxed in clearly labeled "HOLY MANDIR / HANDLE WITH UTMOST REVERENCE" cartons. These boxes are loaded on top of cargo beds to ensure zero weight is placed over them during transit.
          </p>
        </section>

        <!-- SAIL Township Quarter Handover Guidelines -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 16px;">
            SAIL Bokaro Township Quarter Vacating & Estate Office Guidelines
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Vacating a company quarter under the Town Administration Department (TAD) of Bokaro Steel Plant involves specific protocol to obtain the Estate Clearance Certificate and recover your security deposit:
          </p>
          <ul style="padding-left: 24px; font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 20px;">
            <li style="margin-bottom: 10px;">
              <strong>Electrical Fixture Disconnection:</strong> Disconnect all personal ceiling fans, exhaust fans, and decorative chandeliers without causing plaster damage to quarter ceilings. Our crew assists in careful dismounting.
            </li>
            <li style="margin-bottom: 10px;">
              <strong>Water Fitting Inspections:</strong> Ensure personal geysers and RO water purifiers are detached cleanly without stripping internal pipeline threads.
            </li>
            <li style="margin-bottom: 10px;">
              <strong>Township Gate Pass Formalities:</strong> Large moving container trucks require standard township entry registration. Our drivers carry valid commercial road permits, pollution certificates, and driver credentials for effortless passage at CISF security checkpoints.
            </li>
            <li style="margin-bottom: 10px;">
              <strong>Post-Moving Rubbish Clearance:</strong> After packing is finalized, our crew sweeps down packaging debris, torn tape, and scrap cardboard so your quarter is presented in spotless condition for the TAD engineer's handover inspection.
            </li>
          </ul>
        </section>

        <!-- Supporting Visual Grid -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px; margin: 35px 0;">
          <div>
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Household bubble wrap packing in Bokaro" style="width: 100%; height: 260px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.06);">
            <p style="font-size: 0.9rem; color: #64748b; margin-top: 8px; text-align: center;">Heavy 3-ply air bubble wrapping applied to fragile household items and electronic gear.</p>
          </div>
          <div>
            <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture dismantling and bed packing by carpenters in Bokaro" style="width: 100%; height: 260px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.06);">
            <p style="font-size: 0.9rem; color: #64748b; margin-top: 8px; text-align: center;">Trained carpenters dismantling king-size double storage beds and modular wardrobe units.</p>
          </div>
        </div>

        <!-- Comparative Cost Table for Bokaro Home Relocation -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 16px;">
            Estimated Household Shifting Rates in Bokaro & Chas
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 20px;">
            We believe in honest, upfront pricing without last-minute surprise fees. Below is an estimated cost breakdown for local moves within Bokaro/Chas and long-distance intercity relocations:
          </p>

          <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; margin-bottom: 20px;">
              <thead>
                <tr style="background: #0f223d; color: #ffffff;">
                  <th style="padding: 14px 16px; border: 1px solid #1e293b;">Home Size / Configuration</th>
                  <th style="padding: 14px 16px; border: 1px solid #1e293b;">Local Bokaro Shifting</th>
                  <th style="padding: 14px 16px; border: 1px solid #1e293b;">Bokaro to Ranchi (125 km)</th>
                  <th style="padding: 14px 16px; border: 1px solid #1e293b;">Bokaro to Kolkata (310 km)</th>
                  <th style="padding: 14px 16px; border: 1px solid #1e293b;">Bokaro to Delhi / Bangalore</th>
                </tr>
              </thead>
              <tbody>
                <tr style="background: #ffffff;">
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0; font-weight: 600;">1 BHK Apartment / Quarter</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹4,500 - ₹7,500</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹9,000 - ₹13,000</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹14,000 - ₹19,000</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹22,000 - ₹30,000</td>
                </tr>
                <tr style="background: #f8fafc;">
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0; font-weight: 600;">2 BHK Apartment / Quarter</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹7,500 - ₹12,000</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹14,000 - ₹19,000</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹20,000 - ₹27,000</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹32,000 - ₹44,000</td>
                </tr>
                <tr style="background: #ffffff;">
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0; font-weight: 600;">3 BHK Apartment / Duplex</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹11,500 - ₹17,000</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹19,000 - ₹26,000</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹28,000 - ₹38,000</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹45,000 - ₹62,000</td>
                </tr>
                <tr style="background: #f8fafc;">
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0; font-weight: 600;">4 BHK / Officer Bungalow</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹16,000 - ₹24,000</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹26,000 - ₹35,000</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹38,000 - ₹52,000</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹58,000 - ₹82,000</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p style="font-size: 0.9rem; color: #64748b; font-style: italic;">
            * Rates include complete packing material, carpenter dismantling, loading crew, closed container transportation, unloading, and basic furniture positioning. Transit insurance and toll charges are itemized transparently.
          </p>
        </section>

        <!-- IBA Approved Billing for SAIL, Banking & PSU Staff -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 16px;">
            IBA Approved Billing & Corporate Relocation Compliance in Bokaro
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Many residents moving out of Bokaro are employees of Steel Authority of India Limited (SAIL Bokaro Steel Plant), DVC (Damodar Valley Corporation), State Bank of India (SBI), Bank of India, Indian Railways, and Central Public Sector Undertakings. To claim full transfer reimbursement from your employer, strict documentation criteria must be satisfied.
          </p>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            As an IBA approved moving company, <strong>Shree Ashirwad Packers and Movers</strong> provides complete, audit-proof claim dossiers consisting of:
          </p>
          <ul style="padding-left: 24px; font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 24px;">
            <li style="margin-bottom: 8px;"><strong>Original IBA Lorry Receipt (LR / Consignment Note):</strong> Complete with official stamp, registration serial, and vehicle registration numbers.</li>
            <li style="margin-bottom: 8px;"><strong>GST-Compliant Tax Invoice:</strong> Detailed breakdown of packing charges, transportation freight, and handling services with verified HSN/SAC codes.</li>
            <li style="margin-bottom: 8px;"><strong>Itemized Packing Inventory List:</strong> Numbered carton-by-carton inventory counter-signed by you and our loading supervisor.</li>
            <li style="margin-bottom: 8px;"><strong>Transit Insurance Policy & Money Receipt:</strong> Official marine transit policy certificate issued by approved public sector insurance partners.</li>
            <li style="margin-bottom: 8px;"><strong>Vehicle Weight Bridge Slips (if requested):</strong> Certified computerized tare and gross weight receipts for corporate audit compliance.</li>
          </ul>
        </section>

        <!-- Bokaro Localities Covered -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 16px;">
            Bokaro Sectors & Localities We Service Daily
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            We operate fully equipped packing teams with dedicated pickup vehicles stationed across Bokaro Steel City and Chas:
          </p>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 14px;">
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Sector 1, Sector 2 & Sector 3</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Sector 4 City Centre & Sector 5</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Sector 6, Sector 8 & Sector 9</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Sector 11, Sector 12 & Camp 2</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Chas Municipality & Bypass</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Co-operative Colony & Kurmidih</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Bokaro Thermal & Chandrapura</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Bermo, Phusro & Gomia Coal Belt</div>
          </div>
        </section>

        <!-- FAQ Section -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 24px;">
            Frequently Asked Questions on Household Shifting in Bokaro
          </h2>

          <div style="display: grid; grid-template-columns: 1fr; gap: 16px;">
            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">What packing materials are included in household shifting services in Bokaro?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">Our 5-layer household packaging includes heavy-gauge air bubble wrap, virgin corrugated rolls, expandable foam edge protectors, heavy 5-ply cartons, and waterproof stretch film. For delicate glass tabletops and marble dining tops, custom wooden crates are constructed on site.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">Do you provide IBA approved bills for SAIL employee relocation claims in Bokaro?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">Yes, we are fully IBA approved and provide 100% compliant documentation for SAIL Bokaro Steel Plant, BSNL, Coal India, nationalized bank employees, and defense officers. This includes authentic consignment notes (LR copy), itemized packing inventory lists, transit insurance policy documents, and GST-compliant invoices.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">How is fragile kitchen crockery and chinaware packed for transit?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">Each ceramic plate, bone china cup, and glassware item is individually wrapped with shock-absorbing foam paper and bubble sheets. Items are packed vertically inside heavy double-wall cartons separated by cell dividers, and voids are filled with crumpled packaging paper to eliminate movement.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">Do you dismantle and reassemble heavy double beds, wardrobes, and modular furniture?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">Yes, our team includes trained carpenters who dismantle king/queen size hydraulic storage beds, sliding wardrobes, dining tables, and modular study units. At destination, all furniture is reassembled and positioned according to your room floor plan.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">What is the average cost of local household shifting in Bokaro & Chas?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">Local shifting within Bokaro Steel City or Chas ranges from ₹4,500 to ₹7,500 for a 1 BHK, ₹7,500 to ₹12,000 for a 2 BHK, and ₹11,500 to ₹17,000 for a 3 BHK apartment or bungalow, covering packing, loading, local transport, unloading, and unpacking.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">How many days in advance should I schedule my home shifting in Bokaro?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">We recommend booking 3 to 5 days in advance for local shifting and 7 to 10 days for long-distance interstate moves to ensure seamless truck allocation and proper crew scheduling, particularly during month-end transfer peak periods.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">How do you protect large LED TVs and double-door refrigerators during moves?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">LED TVs are packaged with thermocol screen shields, multi-layer bubble wrap, and encased in heavy telescopic TV crates. Refrigerators and washing machines receive thick padded moving blankets and corrugated corner covers to prevent dents.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">Do you handle quarter-to-quarter shifting within SAIL Bokaro Township?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">Yes, we regularly perform quarter transfers across Sectors 1 through 12, Camp 2, and BSL officer bungalows. We ensure prompt loading and unloading that complies with township security protocols and quarter clearance timelines.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">Is goods transit insurance provided for household items?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">Yes, we provide comprehensive all-risk transit insurance policies underwritten by leading national insurance companies. This covers accidental transit damage, vehicle collision, fire, and structural highway hazards during long-distance moves.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">Can you also transport my car or bike along with household goods?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">Absolutely. We offer combined household and vehicle shifting packages. Your two-wheeler or four-wheeler can be transported either in the same large covered container carrier or via dedicated enclosed auto carriers at attractive package rates.</p>
            </div>
          </div>
        </section>

        <!-- Final Call to Action Box -->
        <section style="background: linear-gradient(135deg, #0f223d 0%, #1a3a5f 100%); color: #ffffff; padding: 45px 35px; border-radius: 14px; text-align: center;">
          <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 14px;">Schedule Your Stress-Free Household Relocation in Bokaro Today</h2>
          <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 700px; margin: 0 auto 28px;">
            Enjoy a completely hassle-free home moving experience. Free pre-move home survey, custom 5-layer packing, IBA approved bills, and on-time doorstep delivery across Bokaro Steel City.
          </p>
          <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 16px;">
            <a href="tel:<?php echo SECONDARY_PHONE_RAW; ?>" style="display: inline-flex; align-items: center; gap: 8px; background: #ff6a28; color: #ffffff; padding: 15px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 15px rgba(255,106,40,0.35);">
              Call Dispatch: 8409531615
            </a>
            <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" rel="nofollow noopener noreferrer" style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.3); color: #ffffff; padding: 15px 30px; border-radius: 8px; font-weight: 600; text-decoration: none;">
              Get Instant WhatsApp Estimate &rarr;
            </a>
          </div>
        </section>

        <!-- Related Bokaro Relocation Routes & Services Cluster Navigation -->
        <section style="background: #ffffff; padding: 35px 25px; border-radius: 12px; border: 1px solid #e2e8f0; margin-top: 35px; box-shadow: 0 2px 10px rgba(0,0,0,0.03);">
          <h3 style="font-size: 1.25rem; color: #0f223d; font-weight: 800; margin-bottom: 12px;">
            Related Bokaro Relocation Routes &amp; Moving Services
          </h3>
          <p style="color: #64748b; font-size: 0.95rem; margin-bottom: 18px; line-height: 1.6;">
            Explore our specialized relocation services and trusted intercity transport corridors connecting Bokaro Steel City across Jharkhand, West Bengal, Bihar, and Pan-India:
          </p>
          <div style="display: flex; flex-wrap: wrap; gap: 12px; font-size: 0.9rem;">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bokaro" style="color: #0284c7; text-decoration: none; background: #f0f9ff; padding: 9px 15px; border-radius: 6px; font-weight: 600; border: 1px solid #bae6fd;">Packers and Movers in Bokaro</a>
            <a href="<?php echo SITE_BASE_URL; ?>/household-shifting-services-in-bokaro" style="color: #ff6a28; text-decoration: none; background: #fff7ed; padding: 9px 15px; border-radius: 6px; font-weight: 700; border: 1px solid #fed7aa;">Household Shifting in Bokaro (Current)</a>
            <a href="<?php echo SITE_BASE_URL; ?>/car-transport-in-bokaro" style="color: #0284c7; text-decoration: none; background: #f0f9ff; padding: 9px 15px; border-radius: 6px; font-weight: 600; border: 1px solid #bae6fd;">Car Transport in Bokaro</a>
            <a href="<?php echo SITE_BASE_URL; ?>/bike-transport-in-bokaro" style="color: #0284c7; text-decoration: none; background: #f0f9ff; padding: 9px 15px; border-radius: 6px; font-weight: 600; border: 1px solid #bae6fd;">Bike Transport in Bokaro</a>
            <a href="<?php echo SITE_BASE_URL; ?>/bokaro-to-ranchi-packers-and-movers" style="color: #0284c7; text-decoration: none; background: #f0f9ff; padding: 9px 15px; border-radius: 6px; font-weight: 600; border: 1px solid #bae6fd;">Bokaro to Ranchi Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/bokaro-to-kolkata-packers-and-movers" style="color: #0284c7; text-decoration: none; background: #f0f9ff; padding: 9px 15px; border-radius: 6px; font-weight: 600; border: 1px solid #bae6fd;">Bokaro to Kolkata Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-bangalore-to-bokaro" style="color: #0284c7; text-decoration: none; background: #f0f9ff; padding: 9px 15px; border-radius: 6px; font-weight: 600; border: 1px solid #bae6fd;">Bangalore to Bokaro Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/bokaro-to-patna-packers-and-movers" style="color: #0284c7; text-decoration: none; background: #f0f9ff; padding: 9px 15px; border-radius: 6px; font-weight: 600; border: 1px solid #bae6fd;">Bokaro to Patna Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/dhanbad-to-bokaro-packers-and-movers" style="color: #0284c7; text-decoration: none; background: #f0f9ff; padding: 9px 15px; border-radius: 6px; font-weight: 600; border: 1px solid #bae6fd;">Dhanbad to Bokaro Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/complete-guide-to-house-shifting-in-bokaro" style="color: #0284c7; text-decoration: none; background: #f0f9ff; padding: 9px 15px; border-radius: 6px; font-weight: 600; border: 1px solid #bae6fd;">Bokaro Shifting Guide</a>
          </div>
        </section>

      </div>
    </article>
  </main>

  <!-- Global Footer -->
  <?php include __DIR__ . '/includes/footer.php'; ?>
  <script src="<?php echo SITE_BASE_URL; ?>/assets/js/main.js" defer></script>
</body>
</html>
