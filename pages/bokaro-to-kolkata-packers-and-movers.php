<?php
/**
 * Bokaro to Kolkata Packers and Movers - Shree Ashirwad Packers and Movers
 * 
 * High-performance, fully SEO-optimized landing page for interstate relocation
 * between Bokaro Steel City and the Kolkata Metropolitan Area (West Bengal).
 * Target Keyword: bokaro to kolkata packers and movers
 */

// Define page-specific metadata
$page_title = "Bokaro to Kolkata Packers and Movers | Safe Interstate Shifting - Shree Ashirwad";
$page_description = "Reliable Bokaro to Kolkata packers and movers by Shree Ashirwad Packers. Direct container trucks via NH-18 & NH-16, 5-layer humidity proof packing, e-Way bill compliance, IBA approved bills. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/bokaro-to-kolkata-packers-and-movers";

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
  <meta name="keywords" content="bokaro to kolkata packers and movers, packers and movers bokaro to kolkata, house shifting bokaro to kolkata, furniture transport bokaro to kolkata, car transport bokaro to kolkata, bike courier bokaro to kolkata, movers and packers chas to kolkata">
  <link rel="canonical" href="<?php echo $canonical_url; ?>">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta property="og:url" content="<?php echo $canonical_url; ?>">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg">
  <meta property="og:image:alt" content="Bokaro to Kolkata Interstate Shifting Container Truck">
  <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
  <meta property="og:locale" content="en_IN">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg">

  <!-- Geo Meta Tags for Bokaro & Kolkata Corridor -->
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
    "name": "Shree Ashirwad Packers and Movers - Bokaro to Kolkata Service",
    "url": "<?php echo $canonical_url; ?>",
    "logo": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
    "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
    "description": "Specialized interstate relocation and goods transport services from Bokaro Steel City & Chas to Kolkata and Howrah. Covered container fleet, multi-layer moisture proof packing, e-Way bill compliance, and IBA approved bills.",
    "telephone": "<?php echo SECONDARY_PHONE_RAW; ?>",
    "priceRange": "₹6,000 - ₹48,000",
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
      { "@type": "City", "name": "Kolkata" },
      { "@type": "City", "name": "Howrah" },
      { "@type": "AdministrativeArea", "name": "Chas" }
    ]
  }
  </script>

  <!-- Structured Data: Service -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "Interstate Relocation Service",
    "provider": {
      "@type": "MovingCompany",
      "name": "Shree Ashirwad Packers and Movers"
    },
    "areaServed": [
      { "@type": "City", "name": "Bokaro Steel City" },
      { "@type": "City", "name": "Kolkata" }
    ],
    "description": "Interstate household moving, car carrier, bike parcel, and corporate goods transport service connecting Bokaro Steel City to Kolkata. Features 5-layer moisture-proof packing, e-Way bill processing, and full doorstep setup.",
    "offers": {
      "@type": "Offer",
      "priceCurrency": "INR",
      "price": "9500",
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
        "name": "Bokaro to Kolkata Movers",
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
        "name": "How much does it cost to move from Bokaro to Kolkata?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Household relocation from Bokaro Steel City to Kolkata generally ranges from ₹14,000 to ₹19,000 for a 1 BHK, ₹20,000 to ₹27,000 for a 2 BHK, and ₹28,000 to ₹38,000 for a 3 BHK family residence. Bike parcel costs ₹3,000 to ₹4,200, while enclosed car transport ranges from ₹6,000 to ₹9,000."
        }
      },
      {
        "@type": "Question",
        "name": "What is the expected transit time between Bokaro and Kolkata?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "The highway distance is approximately 310 kilometers via Chas, Purulia, Bankura, and connecting with NH-19/NH-16 Durgapur Expressway. A dedicated direct container truck typically delivers within 24 to 48 hours from the time loading is completed in Bokaro."
        }
      },
      {
        "@type": "Question",
        "name": "Do you handle GST e-Way bills and West Bengal border entry formalities?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, our central dispatch office generates full GST Part-A and Part-B e-Way bills for your consignment, ensuring smooth transit through commercial tax checkpoints at the Jharkhand-West Bengal interstate border without cargo inspection delays."
        }
      },
      {
        "@type": "Question",
        "name": "How do you protect household furniture from Kolkata's coastal humidity?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We apply 5-layer protective packing incorporating silica gel moisture absorbing sachets, virgin corrugated boards, high-density bubble wrap, and hermetically sealed heavy stretch film to insulate solid wood, fabric sofas, and electronics against moisture."
        }
      },
      {
        "@type": "Question",
        "name": "Do you deliver to IT hubs like Salt Lake Sector V, Rajarhat, and New Town?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we regularly deliver to high-rise gated societies across New Town, Rajarhat Action Areas I-III, Salt Lake (Bidhannagar), South Kolkata (Garia, Jadavpur, Tollygunge), Ballygunge, Alipore, and Howrah."
        }
      },
      {
        "@type": "Question",
        "name": "Can you provide IBA approved billing for SAIL and banking transfers to Kolkata?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we provide 100% compliant IBA dossiers including stamped Lorry Receipts (LR), itemized packing inventory lists, GST invoices, and marine transit insurance policies recognized by all public sector undertakings and nationalized banks."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide car transport from Bokaro to Kolkata alongside household goods?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, your four-wheeler can be loaded into an enclosed multi-car carrier or carried inside a large combined household-vehicle container truck with wheel-lock chocks and full insurance coverage."
        }
      },
      {
        "@type": "Question",
        "name": "Are carpentry and electrical disconnection services available in Bokaro?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, our certified team includes skilled carpenters who unbolt storage double beds, wardrobes, and modular desks, and electricians who safely dismount ceiling fans, geysers, and split air conditioning units."
        }
      },
      {
        "@type": "Question",
        "name": "What documents are required for interstate moving from Bokaro to Kolkata?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "You will need a copy of the owner's Aadhaar or PAN card, transfer letter or joining letter (if corporate relocation), destination address proof, and vehicle documents (RC, Insurance, PUC) if shipping an automobile."
        }
      },
      {
        "@type": "Question",
        "name": "How is fragile kitchenware and crockery secured for the 310 km highway trip?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "All china plates, glassware, and ceramic showpieces are wrapped in shock-absorbing foam paper, bubble wrap, and arranged vertically in heavy double-wall cartons separated by corrugated honeycomb dividers to eliminate point-impact stress."
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
          <li style="color: #0f223d; font-weight: 600;">Bokaro to Kolkata Movers</li>
        </ol>
      </nav>

      <!-- Main Header Section -->
      <header style="margin-bottom: 35px;">
        <h1 style="font-family: 'Outfit', sans-serif; font-size: 2.6rem; color: #0f223d; font-weight: 800; line-height: 1.25; margin-bottom: 16px;">
          Bokaro to Kolkata Packers and Movers: Certified Interstate Moving & Carrier Logistics
        </h1>
        <p style="font-size: 1.15rem; color: #475569; max-width: 980px; line-height: 1.7;">
          Relocating between Jharkhand's steel city Bokaro and the metropolis of Kolkata (the financial, educational, and commercial gateway of Eastern India) requires structured interstate planning, high-speed highway compliance, and all-weather container transportation. At <strong>Shree Ashirwad Packers and Movers</strong>, we deliver dependable, professional <a href="<?php echo SITE_BASE_URL; ?>/bokaro-to-kolkata-packers-and-movers" style="color: #ff6a28; text-decoration: underline; font-weight: 600;">Bokaro to Kolkata packers and movers</a> services featuring 5-layer moisture-resistant packing, seamless GST e-Way bill processing, vehicle carrier transit, and full doorstep setup across Kolkata and Howrah.
        </p>
      </header>

      <!-- Quick Highlights Grid -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px; margin-bottom: 40px;">
        <div style="background: #ffffff; padding: 22px; border-radius: 10px; border-left: 4px solid #ff6a28; box-shadow: 0 2px 10px rgba(0,0,0,0.04);">
          <h3 style="font-size: 1.1rem; color: #0f223d; margin-bottom: 8px; font-weight: 700;">24-48 Hr Express Delivery</h3>
          <p style="font-size: 0.95rem; color: #64748b; margin: 0;">Direct 310 km highway linehaul via NH-18 & NH-19 ensuring swift doorstep delivery across Kolkata.</p>
        </div>
        <div style="background: #ffffff; padding: 22px; border-radius: 10px; border-left: 4px solid #0284c7; box-shadow: 0 2px 10px rgba(0,0,0,0.04);">
          <h3 style="font-size: 1.1rem; color: #0f223d; margin-bottom: 8px; font-weight: 700;">Humidity-Proof Packaging</h3>
          <p style="font-size: 0.95rem; color: #64748b; margin: 0;">Multi-layered shrink stretch film and moisture absorbing packs guarding against coastal delta dampness.</p>
        </div>
        <div style="background: #ffffff; padding: 22px; border-radius: 10px; border-left: 4px solid #10b981; box-shadow: 0 2px 10px rgba(0,0,0,0.04);">
          <h3 style="font-size: 1.1rem; color: #0f223d; margin-bottom: 8px; font-weight: 700;">GST e-Way Bill Compliance</h3>
          <p style="font-size: 0.95rem; color: #64748b; margin: 0;">100% verified interstate documentation guaranteeing zero commercial tax checkpoint holds at border gates.</p>
        </div>
        <div style="background: #ffffff; padding: 22px; border-radius: 10px; border-left: 4px solid #8b5cf6; box-shadow: 0 2px 10px rgba(0,0,0,0.04);">
          <h3 style="font-size: 1.1rem; color: #0f223d; margin-bottom: 8px; font-weight: 700;">IBA Approved Invoicing</h3>
          <p style="font-size: 0.95rem; color: #64748b; margin: 0;">Full reimbursement claim papers for SAIL BSL, banking institutions, and central corporate employees.</p>
        </div>
      </div>

      <!-- Hero Visual Section -->
      <figure style="margin: 0 auto 35px; max-width: 550px; text-align: center;">
        <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe transit container truck for Bokaro to Kolkata relocation" style="width: 100%; height: 280px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 14px rgba(0,0,0,0.08); display: block; margin: 0 auto;" loading="lazy">
        <figcaption style="font-size: 0.88rem; color: #64748b; margin-top: 8px; text-align: center;">
          Weatherproof high-capacity container truck prepared for linehaul transit between Bokaro Steel City and Kolkata.
        </figcaption>
      </figure>

      <!-- In-Depth Content Sections -->
      <div style="background: #ffffff; padding: 40px; border-radius: 12px; box-shadow: 0 2px 14px rgba(0,0,0,0.04); margin-bottom: 40px;">
        
        <section style="margin-bottom: 35px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 16px;">
            The Dynamic Interstate Corridor Connecting Bokaro and Kolkata
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Historically and economically, Bokaro and Kolkata enjoy deeply intertwined trade, industrial, and personal connections. A significant portion of engineers, metallurgical specialists, and commercial contractors working with SAIL Bokaro Steel Plant have deep family or business roots in Kolkata and its surrounding districts. Moreover, corporate transfers from Bokaro's industrial sector to Kolkata's expanding IT hubs in Salt Lake Sector V and New Town Rajarhat occur weekly.
          </p>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Covering roughly 310 kilometers, moving household belongings across state lines requires strict compliance with commercial freight norms. Interstate road transport involves inter-state commercial taxes, e-Way bills under the GST regime, multi-lane highway linehauls via NH-18 (through Chas, Purulia, and Bankura) or NH-19 (connecting through Dhanbad, Asansol, and Durgapur onto Kona Expressway), and high-rise delivery logistics across Kolkata's bustling residential townships.
          </p>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            <strong>Shree Ashirwad Packers and Movers</strong> eliminates all uncertainties on this corridor. Our dedicated closed container trucks, skilled carpentry teams, and Kolkata destination logistics partners guarantee that every carton, wardrobe, luxury sofa, and vehicle arrives safely, on schedule, and without a single scratch.
          </p>
        </section>

        <!-- Route Geography & Highway Dynamics -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 20px;">
            Highway Route Architecture: Bokaro to Kolkata (310 km)
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 24px;">
            Our logistics command center tracks two primary interstate transit arterials depending on delivery destination within Greater Kolkata:
          </p>

          <div style="display: grid; grid-template-columns: 1fr; gap: 20px;">
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 22px;">
              <h3 style="font-size: 1.2rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">
                Route Option 1: NH-18 via Chas, Purulia & Bankura into South & Central Kolkata
              </h3>
              <p style="font-size: 1rem; color: #475569; margin: 0; line-height: 1.7;">
                Departing Chas across the Purulia border, this 305 km arterial passes through Bankura, Bishnupur, and Arambagh, connecting directly onto Kona Expressway and Vidyasagar Setu (Second Hooghly Bridge). It is the fastest route for deliveries to South Kolkata (Ballygunge, Alipore, Garia, Jadavpur, Behala) and central commercial districts.
              </p>
            </div>

            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 22px;">
              <h3 style="font-size: 1.2rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">
                Route Option 2: NH-32 / NH-19 via Dhanbad, Asansol & Durgapur into Salt Lake & New Town
              </h3>
              <p style="font-size: 1rem; color: #475569; margin: 0; line-height: 1.7;">
                Traveling from Bokaro via Telmuchu bridge onto the 6-lane Grand Trunk arterial (NH-19), passing Asansol, Durgapur, and Bardhaman directly onto the Durgapur Expressway (NH-16). This high-speed corridor enters Kolkata via Dankuni and Nibra, offering optimal routing for Rajarhat, New Town, Salt Lake Sector V, and Dum Dum.
              </p>
            </div>
          </div>
        </section>

        <!-- Moisture & Humidity Protection -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 16px;">
            Engineered Moisture & Coastal Humidity Defense Packaging
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            One critical aspect often overlooked by inexperienced movers is the drastic shift in climatic conditions between Bokaro's dry, elevated Chota Nagpur plateau and Kolkata's high-humidity lower Gangetic delta. Solid wood furniture, composite particle-board wardrobes, and delicate consumer electronics can absorb atmospheric moisture during transit or upon unloading, leading to wood swelling, mould growth, or circuit corrosion.
          </p>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            To counter this, our Bokaro packing crew integrates dedicated moisture defense safeguards into our 5-layer standard:
          </p>
          <ul style="padding-left: 24px; font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 20px;">
            <li style="margin-bottom: 10px;">
              <strong>Silica Gel Dehumidifier Pouches:</strong> Active desiccant packs are inserted inside electronic boxes, computer server casings, and mattress covers to absorb ambient moisture.
            </li>
            <li style="margin-bottom: 10px;">
              <strong>High-Density Stretch Film Hermetic Sealing:</strong> After wrapping furniture with corrugated rolls and 3-ply bubble sheets, the entire piece is tightly sealed with 23-micron linear low-density polyethylene (LLDPE) stretch film, forming a moisture-barrier membrane.
            </li>
            <li style="margin-bottom: 10px;">
              <strong>Heavy-Gauge Corrugated Base Sheets:</strong> Truck container floors are lined with virgin corrugated cardboard sheets, insulating lower cartons from ground chill and road splash humidity.
            </li>
          </ul>
        </section>

        <!-- Kolkata High-Rise Complex Navigations -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 16px;">
            High-Rise Gated Community Delivery Protocol in Kolkata & New Town
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Delivering into modern residential complexes like Uniworld City, Rosedale, Elita Garden Vista, Urbana, or South City requires strict adherence to Resident Welfare Association (RWA) guidelines. In Kolkata, most high-rises enforce restricted entry hours for commercial moving vehicles (typically between 10:00 AM and 05:00 PM), mandatory service elevator reservations, and floor protection sheeting.
          </p>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Our Kolkata destination delivery crew coordinates closely with facility managers. We lay padded floor runners across common corridors, line service elevator walls with protective quilts, and utilize pneumatic rubber-wheeled trolleys to transfer goods noiselessly and without scratching imported vitrified tiles.
          </p>
        </section>

        <!-- Industrial & Corporate Transfers -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 16px;">
            Corporate, Bank & Commercial Shifting: Bokaro to Kolkata
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Beyond residential shifting, we manage steady commercial freight between Bokaro Steel City's industrial belt and corporate headquarters in Kolkata. This includes moving engineering consultancy blueprints, laboratory testing apparatus, industrial spares, bank audit registries, and full IT office setups with desktop workstations and modular cubicles:
          </p>
          <ul style="padding-left: 24px; font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 20px;">
            <li style="margin-bottom: 8px;"><strong>Crated Heavy Machinery & Tooling:</strong> Heavy engineering testing equipment crated on treated wooden skids with forklift hoisting slots.</li>
            <li style="margin-bottom: 8px;"><strong>Tamper-Evident Security Seals:</strong> Bank files and confidential legal documents secured with serial-numbered metal seal ties.</li>
            <li style="margin-bottom: 8px;"><strong>Scheduled Weekend Transitions:</strong> Dismantling in Bokaro on Friday night with full installation in Kolkata by Sunday evening to ensure business continuity.</li>
          </ul>
        </section>

        <!-- Student, Scholar & Academic Relocations -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 16px;">
            Student, Scholar & Academic Relocations to Kolkata
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Every academic session, students graduating from renowned Bokaro schools (such as DPS Bokaro, Chinmaya Vidyalaya, and St. Xavier's) move to Kolkata for undergraduate and postgraduate studies at Jadavpur University, Calcutta University, Presidency University, St. Xavier's College Kolkata, and engineering institutions like IIEST Shibpur.
          </p>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            For students moving into university hostels or shared apartments in South Kolkata, Salt Lake, or Howrah, we provide shared partial-load transport. This includes packing academic book cartons, desktop setups, personal wardrobe trunks, and two-wheeler parcel couriers at student-friendly pricing, backed by full tracking and zero transshipment handling.
          </p>
        </section>

        <!-- Supporting Visual Section -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px; margin: 35px 0;">
          <div>
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Moisture proof packing for Bokaro to Kolkata moving" style="width: 100%; height: 260px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.06);">
            <p style="font-size: 0.9rem; color: #64748b; margin-top: 8px; text-align: center;">Multi-layer bubble wrap and waterproof stretch film applied to cartons destined for Kolkata.</p>
          </div>
          <div>
            <img src="<?php echo SITE_BASE_URL; ?>/images/multistory-apartment-goods-loading-ranchi.jpg" alt="Multi-storey apartment goods delivery in Kolkata" style="width: 100%; height: 260px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.06);">
            <p style="font-size: 0.9rem; color: #64748b; margin-top: 8px; text-align: center;">Trained crews equipped for high-rise apartment elevator and staircase deliveries across Kolkata.</p>
          </div>
        </div>

        <!-- Comparative Rate Matrix for Bokaro to Kolkata -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 16px;">
            Estimated Moving Charges: Bokaro to Kolkata Corridor (310 km)
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 20px;">
            We offer transparent, all-inclusive pricing with no hidden tolls or destination unloading surprises:
          </p>

          <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; margin-bottom: 20px;">
              <thead>
                <tr style="background: #0f223d; color: #ffffff;">
                  <th style="padding: 14px 16px; border: 1px solid #1e293b;">Relocation Category</th>
                  <th style="padding: 14px 16px; border: 1px solid #1e293b;">Packaging & Materials</th>
                  <th style="padding: 14px 16px; border: 1px solid #1e293b;">Dedicated Container</th>
                  <th style="padding: 14px 16px; border: 1px solid #1e293b;">Handling Crew</th>
                  <th style="padding: 14px 16px; border: 1px solid #1e293b;">Total Estimated Range</th>
                </tr>
              </thead>
              <tbody>
                <tr style="background: #ffffff;">
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0; font-weight: 600;">1 BHK Apartment / Quarter</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹4,000 - ₹5,500</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹7,500 - ₹10,000</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹2,500 - ₹3,500</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0; font-weight: 700; color: #0284c7;">₹14,000 - ₹19,000</td>
                </tr>
                <tr style="background: #f8fafc;">
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0; font-weight: 600;">2 BHK Family Residence</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹5,500 - ₹7,500</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹11,000 - ₹14,500</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹3,500 - ₹5,000</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0; font-weight: 700; color: #0284c7;">₹20,000 - ₹27,000</td>
                </tr>
                <tr style="background: #ffffff;">
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0; font-weight: 600;">3 BHK Spacious Home</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹7,500 - ₹10,500</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹15,500 - ₹21,000</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹5,000 - ₹6,500</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0; font-weight: 700; color: #0284c7;">₹28,000 - ₹38,000</td>
                </tr>
                <tr style="background: #f8fafc;">
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0; font-weight: 600;">4 BHK / Executive Villa</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹10,500 - ₹14,000</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹21,000 - ₹28,000</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹6,500 - ₹8,500</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0; font-weight: 700; color: #0284c7;">₹38,000 - ₹50,500</td>
                </tr>
                <tr style="background: #ffffff;">
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0; font-weight: 600;">
                    <a href="<?php echo SITE_BASE_URL; ?>/bike-transport-in-bokaro" style="color: #0284c7; text-decoration: none;">Motorcycle / Scooty Parcel</a>
                  </td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹800 - ₹1,200</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹1,800 - ₹2,500</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹400 - ₹500</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0; font-weight: 700; color: #0284c7;">₹3,000 - ₹4,200</td>
                </tr>
                <tr style="background: #f8fafc;">
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0; font-weight: 600;">
                    <a href="<?php echo SITE_BASE_URL; ?>/car-transport-in-bokaro" style="color: #0284c7; text-decoration: none;">Car Carrier (Enclosed Trailer)</a>
                  </td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹1,000 - ₹1,500</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹4,500 - ₹6,500</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹500 - ₹1,000</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0; font-weight: 700; color: #0284c7;">₹6,000 - ₹9,000</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p style="font-size: 0.9rem; color: #64748b; font-style: italic;">
            * Rates cover comprehensive 5-layer packing, e-Way bill processing, commercial tolls, loading, unloading, and furniture positioning in Kolkata. Marine transit insurance is calculated at 1.5% to 2% of the declared cargo value.
          </p>
        </section>

        <!-- Kolkata Destination Localities Covered -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 16px;">
            Comprehensive Delivery Coverage Across Greater Kolkata & Howrah
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Our direct trucks deliver seamlessly across the entire Kolkata Metropolitan Area:
          </p>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 14px;">
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">New Town & Rajarhat (Action Areas I-III)</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Salt Lake (Bidhannagar) & Sector V</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Ballygunge, Gariahat & Park Circus</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Alipore, New Alipore & Bhowanipore</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Jadavpur, Tollygunge & Garia</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Behala, Taratala & Thakurpukur</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Dum Dum, Nagerbazar & VIP Road</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Howrah, Shibpur, Kona & Salkia</div>
          </div>
        </section>

        <!-- FAQ Section -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 24px;">
            Frequently Asked Questions on Bokaro to Kolkata Shifting
          </h2>

          <div style="display: grid; grid-template-columns: 1fr; gap: 16px;">
            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">How much does it cost to move from Bokaro to Kolkata?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">Household relocation from Bokaro Steel City to Kolkata generally ranges from ₹14,000 to ₹19,000 for a 1 BHK, ₹20,000 to ₹27,000 for a 2 BHK, and ₹28,000 to ₹38,000 for a 3 BHK family residence. Bike parcel costs ₹3,000 to ₹4,200, while enclosed car transport ranges from ₹6,000 to ₹9,000.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">What is the expected transit time between Bokaro and Kolkata?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">The highway distance is approximately 310 kilometers via Chas, Purulia, Bankura, and connecting with NH-19/NH-16 Durgapur Expressway. A dedicated direct container truck typically delivers within 24 to 48 hours from the time loading is completed in Bokaro.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">Do you handle GST e-Way bills and West Bengal border entry formalities?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">Yes, our central dispatch office generates full GST Part-A and Part-B e-Way bills for your consignment, ensuring smooth transit through commercial tax checkpoints at the Jharkhand-West Bengal interstate border without cargo inspection delays.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">How do you protect household furniture from Kolkata's coastal humidity?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">We apply 5-layer protective packing incorporating silica gel moisture absorbing sachets, virgin corrugated boards, high-density bubble wrap, and hermetically sealed heavy stretch film to insulate solid wood, fabric sofas, and electronics against moisture.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">Do you deliver to IT hubs like Salt Lake Sector V, Rajarhat, and New Town?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">Yes, we regularly deliver to high-rise gated societies across New Town, Rajarhat Action Areas I-III, Salt Lake (Bidhannagar), South Kolkata (Garia, Jadavpur, Tollygunge), Ballygunge, Alipore, and Howrah.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">Can you provide IBA approved billing for SAIL and banking transfers to Kolkata?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">Yes, we provide 100% compliant IBA dossiers including stamped Lorry Receipts (LR), itemized packing inventory lists, GST invoices, and marine transit insurance policies recognized by all public sector undertakings and nationalized banks.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">Do you provide car transport from Bokaro to Kolkata alongside household goods?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">Yes, your four-wheeler can be loaded into an enclosed multi-car carrier or carried inside a large combined household-vehicle container truck with wheel-lock chocks and full insurance coverage.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">Are carpentry and electrical disconnection services available in Bokaro?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">Yes, our certified team includes skilled carpenters who unbolt storage double beds, wardrobes, and modular desks, and electricians who safely dismount ceiling fans, geysers, and split air conditioning units.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">What documents are required for interstate moving from Bokaro to Kolkata?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">You will need a copy of the owner's Aadhaar or PAN card, transfer letter or joining letter (if corporate relocation), destination address proof, and vehicle documents (RC, Insurance, PUC) if shipping an automobile.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">How is fragile kitchenware and crockery secured for the 310 km highway trip?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">All china plates, glassware, and ceramic showpieces are wrapped in shock-absorbing foam paper, bubble wrap, and arranged vertically in heavy double-wall cartons separated by corrugated honeycomb dividers to eliminate point-impact stress.</p>
            </div>
          </div>
        </section>

        <!-- Final Call to Action Box -->
        <section style="background: linear-gradient(135deg, #0f223d 0%, #1a3a5f 100%); color: #ffffff; padding: 45px 35px; border-radius: 14px; text-align: center;">
          <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 14px;">Moving from Bokaro to Kolkata? Get Your Free Express Quote Now</h2>
          <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 700px; margin: 0 auto 28px;">
            Experience 5-layer moisture defense packing, dedicated container transport, full GST e-Way compliance, and on-time doorstep delivery across Kolkata and Howrah.
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
            <a href="<?php echo SITE_BASE_URL; ?>/household-shifting-services-in-bokaro" style="color: #0284c7; text-decoration: none; background: #f0f9ff; padding: 9px 15px; border-radius: 6px; font-weight: 600; border: 1px solid #bae6fd;">Household Shifting in Bokaro</a>
            <a href="<?php echo SITE_BASE_URL; ?>/car-transport-in-bokaro" style="color: #0284c7; text-decoration: none; background: #f0f9ff; padding: 9px 15px; border-radius: 6px; font-weight: 600; border: 1px solid #bae6fd;">Car Transport in Bokaro</a>
            <a href="<?php echo SITE_BASE_URL; ?>/bike-transport-in-bokaro" style="color: #0284c7; text-decoration: none; background: #f0f9ff; padding: 9px 15px; border-radius: 6px; font-weight: 600; border: 1px solid #bae6fd;">Bike Transport in Bokaro</a>
            <a href="<?php echo SITE_BASE_URL; ?>/bokaro-to-ranchi-packers-and-movers" style="color: #0284c7; text-decoration: none; background: #f0f9ff; padding: 9px 15px; border-radius: 6px; font-weight: 600; border: 1px solid #bae6fd;">Bokaro to Ranchi Movers</a>
            <a href="<?php echo SITE_BASE_URL; ?>/bokaro-to-kolkata-packers-and-movers" style="color: #ff6a28; text-decoration: none; background: #fff7ed; padding: 9px 15px; border-radius: 6px; font-weight: 700; border: 1px solid #fed7aa;">Bokaro to Kolkata Movers (Current)</a>
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
