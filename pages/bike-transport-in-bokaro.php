<?php
/**
 * Bike Transport in Bokaro - Shree Ashirwad Packers and Movers
 * 
 * High-performance, fully SEO-optimized landing page for two-wheeler shipping,
 * scooty parcel, and motorcycle transport from Bokaro Steel City and Chas across India.
 * Target Keyword: bike transport in bokaro
 */

// Define page-specific metadata
$page_title = "Bike Transport in Bokaro | Two Wheeler Parcel Service - Shree Ashirwad";
$page_description = "Safe and certified bike transport in Bokaro & Chas by Shree Ashirwad Packers and Movers. 4-layer shockproof packing, custom wooden crating, door-to-door pickup across Sectors 1-12, Chas, and all-India enclosed carrier transit. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/bike-transport-in-bokaro";

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
  <meta name="keywords" content="bike transport in bokaro, two wheeler parcel bokaro, motorcycle transport bokaro steel city, scooty parcel service chas bokaro, bike courier bokaro to ranchi, bike transport bokaro to kolkata, bike transport sector 4 bokaro">
  <link rel="canonical" href="<?php echo $canonical_url; ?>">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta property="og:url" content="<?php echo $canonical_url; ?>">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/bike-packing-shree-ashirwad-packers-jharkhand.jpg">
  <meta property="og:image:alt" content="Professional Bike Transport and Packaging in Bokaro by Shree Ashirwad Packers">
  <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
  <meta property="og:locale" content="en_IN">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/bike-packing-shree-ashirwad-packers-jharkhand.jpg">

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
    "name": "Shree Ashirwad Packers and Movers Bokaro",
    "url": "<?php echo $canonical_url; ?>",
    "logo": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
    "image": "<?php echo SITE_BASE_URL; ?>/images/bike-packing-shree-ashirwad-packers-jharkhand.jpg",
    "description": "Certified bike transport, motorcycle parcel, and scooty shifting services in Bokaro Steel City and Chas by Shree Ashirwad Packers and Movers. Doorstep pickup across Sectors 1-12, Chas, Bermo, and Bokaro Thermal.",
    "telephone": "<?php echo SECONDARY_PHONE_RAW; ?>",
    "priceRange": "₹1,800 - ₹9,800",
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
      { "@type": "Place", "name": "Sector 4" },
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
    "serviceType": "Two Wheeler Transport Service",
    "provider": {
      "@type": "MovingCompany",
      "name": "Shree Ashirwad Packers and Movers"
    },
    "areaServed": {
      "@type": "City",
      "name": "Bokaro Steel City"
    },
    "description": "Dedicated two-wheeler transportation, motorcycle courier parcel, and scooty moving service in Bokaro Steel City. Features multi-layer shockproof packing, custom crating, wheel clamping, transit insurance, and doorstep delivery.",
    "offers": {
      "@type": "Offer",
      "priceCurrency": "INR",
      "price": "2200",
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
        "name": "Bike Transport in Bokaro",
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
        "name": "How is bike transport in Bokaro carried out by Shree Ashirwad Packers?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Our bike transport in Bokaro follows a meticulous 4-layer packaging standard. We start with foam edge protectors on levers and handlebars, apply 3-ply heavy bubble wrap across fuel tanks, mirrors, and fairings, wrap thick corrugated sheets over engine casings and silencers, and finish with water-resistant stretch film. Bikes are transported in specialized covered carriers fitted with wheel locking chocks and tie-down straps."
        }
      },
      {
        "@type": "Question",
        "name": "What is the cost of transporting a two-wheeler from Bokaro to Ranchi or Kolkata?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Standard commuter bike transport from Bokaro to Ranchi starts from ₹1,800 to ₹2,800 depending on vehicle cubic capacity. Shifting from Bokaro to Kolkata typically ranges from ₹3,200 to ₹4,800. Premium cruiser or sports bikes requiring wooden crate encapsulation have slightly higher packing costs."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide doorstep pickup in SAIL Bokaro township sectors and Chas?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, our mobile inspection and pickup team services all township sectors from Sector 1 through Sector 12, Camp 2, Co-operative Colony, City Centre Sector 4, as well as Chas, Chandrapura, and Bokaro Thermal."
        }
      },
      {
        "@type": "Question",
        "name": "What documents are required for shipping a motorcycle from Bokaro?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "You need to submit a photocopy of the vehicle Registration Certificate (RC Book), valid Motor Vehicle Insurance policy, updated Pollution Under Control (PUC) certificate, and government-issued photo ID of the owner (Aadhaar or Voter ID)."
        }
      },
      {
        "@type": "Question",
        "name": "Should the petrol tank be completely empty before loading?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, as per statutory highway carrier safety norms, the fuel tank must be nearly empty (less than 0.5 litre) to prevent fire hazards during long-distance linehaul transits across NH-320, NH-18, and NH-2."
        }
      },
      {
        "@type": "Question",
        "name": "Is transit insurance included with bike transport from Bokaro?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We provide comprehensive marine transit insurance coverage options against collision, overturn, fire, and catastrophic highway transit risks. Insurance is calculated based on vehicle declared value."
        }
      },
      {
        "@type": "Question",
        "name": "How long does bike parcel delivery take from Bokaro to South India or Delhi NCR?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Transit to Ranchi takes 1 day, Kolkata takes 2 to 3 days, Delhi NCR takes 4 to 5 days, while deliveries to Bangalore, Hyderabad, or Pune take approximately 5 to 7 days via our dedicated intercity container lines."
        }
      },
      {
        "@type": "Question",
        "name": "Can you ship high-end sports bikes like Royal Enfield, KTM, or Harley Davidson?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we specialize in high-end sports bikes and cruisers. For Royal Enfield Himalayan, Classic, KTM Duke, and BMW Motorrad, we build custom heavy-duty pine wood crates with internal pneumatic strapping and zero-contact fork suspension bracing."
        }
      },
      {
        "@type": "Question",
        "name": "Can I ship extra gear like helmets and riding jackets with my bike?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, you can pack your helmet, riding jacket, and rain gear in a sealed corrugated carton. We securely strap it alongside the motorcycle inside the carrier at nominal or zero supplementary charge."
        }
      },
      {
        "@type": "Question",
        "name": "What is the procedure if my motorcycle gets scratched during transit?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Before dispatch in Bokaro, our crew completes a digital condition inspection report signed by you. In the rare event of transit damage covered by transit insurance, claims are processed promptly with our insurer."
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
          <li style="color: #0f223d; font-weight: 600;">Bike Transport in Bokaro</li>
        </ol>
      </nav>

      <!-- Main Header Section -->
      <header style="margin-bottom: 35px;">
        <h1 style="font-family: 'Outfit', sans-serif; font-size: 2.6rem; color: #0f223d; font-weight: 800; line-height: 1.25; margin-bottom: 16px;">
          Certified Bike Transport in Bokaro: Safe, Multi-Layer Two-Wheeler Parcel Service
        </h1>
        <p style="font-size: 1.15rem; color: #475569; max-width: 980px; line-height: 1.7;">
          Relocating your motorcycle, gearless scooter, or premium touring bike from Bokaro Steel City requires industrial-grade packaging, proper mechanical immobilization, and dedicated covered automobile containers. At <strong>Shree Ashirwad Packers and Movers</strong>, we deliver zero-scratch two-wheeler courier and transport solutions across all SAIL township sectors, Chas, and interstate destinations across India.
        </p>
      </header>

      <!-- Quick Highlights Grid -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px; margin-bottom: 40px;">
        <div style="background: #ffffff; padding: 22px; border-radius: 10px; border-left: 4px solid #ff6a28; box-shadow: 0 2px 10px rgba(0,0,0,0.04);">
          <h3 style="font-size: 1.1rem; color: #0f223d; margin-bottom: 8px; font-weight: 700;">4-Layer Shockproof Wrap</h3>
          <p style="font-size: 0.95rem; color: #64748b; margin: 0;">High-density foam, heavy 3-ply air bubble sheets, corrugated fluting, and moisture-proof lamination.</p>
        </div>
        <div style="background: #ffffff; padding: 22px; border-radius: 10px; border-left: 4px solid #0284c7; box-shadow: 0 2px 10px rgba(0,0,0,0.04);">
          <h3 style="font-size: 1.1rem; color: #0f223d; margin-bottom: 8px; font-weight: 700;">Doorstep Sector Pickup</h3>
          <p style="font-size: 0.95rem; color: #64748b; margin: 0;">Direct doorstep collection from Sector 1 through Sector 12, Chas, Bermo, Phusro, and Chandrapura.</p>
        </div>
        <div style="background: #ffffff; padding: 22px; border-radius: 10px; border-left: 4px solid #10b981; box-shadow: 0 2px 10px rgba(0,0,0,0.04);">
          <h3 style="font-size: 1.1rem; color: #0f223d; margin-bottom: 8px; font-weight: 700;">Enclosed Car Carriers</h3>
          <p style="font-size: 0.95rem; color: #64748b; margin: 0;">Hydraulically damped container trucks with wheel locks preventing transit sway on highway routes.</p>
        </div>
        <div style="background: #ffffff; padding: 22px; border-radius: 10px; border-left: 4px solid #8b5cf6; box-shadow: 0 2px 10px rgba(0,0,0,0.04);">
          <h3 style="font-size: 1.1rem; color: #0f223d; margin-bottom: 8px; font-weight: 700;">Transit Insurance & GPS</h3>
          <p style="font-size: 0.95rem; color: #64748b; margin: 0;">Comprehensive marine policy coverage paired with live vehicle tracking updates from Bokaro dispatch.</p>
        </div>
      </div>

      <!-- Hero Visual Section -->
      <figure style="margin: 0 auto 35px; max-width: 550px; text-align: center;">
        <img src="<?php echo SITE_BASE_URL; ?>/images/bike-packing-shree-ashirwad-packers-jharkhand.jpg" alt="Motorcycle packing and two wheeler transport in Bokaro Steel City" style="width: 100%; height: 280px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 14px rgba(0,0,0,0.08); display: block; margin: 0 auto;" loading="lazy">
        <figcaption style="font-size: 0.88rem; color: #64748b; margin-top: 8px; text-align: center;">
          Multi-layer bubble wrap, foam handlebar shields, and corrugated armor applied to a commuter motorcycle in Bokaro before carrier loading.
        </figcaption>
      </figure>

      <!-- In-Depth Content Sections -->
      <div style="background: #ffffff; padding: 40px; border-radius: 12px; box-shadow: 0 2px 14px rgba(0,0,0,0.04); margin-bottom: 40px;">
        
        <section style="margin-bottom: 35px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 16px;">
            Why Reliable Two-Wheeler Transportation Matters in Bokaro Steel City
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Bokaro Steel City is one of India's most planned industrial metropolises, home to the sprawling SAIL (Steel Authority of India Limited) plant, major educational institutions like DPS Bokaro, Chinmaya Vidyalaya, and St. Xavier's, and neighboring industrial belts in Chas, Bermo, and Chandrapura. Engineers, public sector employees, defense personnel, and students frequently transfer to and from Bokaro across metropolitan hubs like Ranchi, Kolkata, Patna, Delhi, Bangalore, and Hyderabad.
          </p>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Riding a two-wheeler hundreds of kilometers along state and national highways (such as NH-320, NH-18, or the congested Grand Trunk corridors) is exhausting, dangerous, and subjects delicate motorcycle components to intense engine wear, stone-chip damage, and unpredictable monsoon weather. Shree Ashirwad Packers and Movers provides a professional, stress-free alternative with specialized <a href="<?php echo SITE_BASE_URL; ?>/bike-transport-in-bokaro" style="color: #ff6a28; text-decoration: underline; font-weight: 600;">bike transport in Bokaro</a> designed to preserve your vehicle's mechanical integrity and showroom finish.
          </p>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Whether you are relocating a fuel-efficient commuter like a Hero Splendor or Honda Shine, an automatic scooter like Honda Activa or TVS Jupiter, a touring cruiser like Royal Enfield Classic 350, or a high-performance machine like KTM 390 Adventure or Kawasaki Ninja, our seasoned vehicle logistics crew handles every step with surgical precision. From door-to-door loading at your quarter in Sector 4 or residence in Chas to secure unloading at your new doorstep anywhere in India, we ensure a seamless experience.
          </p>
        </section>

        <!-- The 4-Layer Packing Protocol -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 20px;">
            Our 4-Layer Defensive Two-Wheeler Packaging Protocol
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 24px;">
            Two-wheelers are precision machines with exposed painted tanks, fragile mirrors, vulnerable clutch and brake cables, LED headlamps, and sensitive engine crankcases. Standard loose transport or improper railway parcel handling often causes bent footrests, snapped brake levers, scratched paint, and cracked mudguards. Our Bokaro crew follows a rigorous 4-step packaging standard:
          </p>

          <div style="display: grid; grid-template-columns: 1fr; gap: 20px;">
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 22px;">
              <h3 style="font-size: 1.2rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">
                1. High-Density EPE Foam Shielding
              </h3>
              <p style="font-size: 1rem; color: #475569; margin: 0; line-height: 1.7;">
                We insulate delicate front forks, rear suspension springs, handlebar grips, rearview mirror mounts, and clutch/front brake master cylinders with high-density expandable polyethylene (EPE) foam tubes. This prevents metal-on-metal friction and dampens high-frequency highway vibrations.
              </p>
            </div>

            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 22px;">
              <h3 style="font-size: 1.2rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">
                2. Heavy-Duty 3-Ply Air Bubble Cushioning
              </h3>
              <p style="font-size: 1rem; color: #475569; margin: 0; line-height: 1.7;">
                The painted petrol tank, fiberglass side cowls, headlamp assembly, and rear tail-light cluster receive continuous 3-ply air bubble wrap. The air bubbles absorb point impacts from shifting forces, keeping the clear coat scratch-free and pristine.
              </p>
            </div>

            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 22px;">
              <h3 style="font-size: 1.2rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">
                3. Heavy Corrugated Fluting Armor
              </h3>
              <p style="font-size: 1rem; color: #475569; margin: 0; line-height: 1.7;">
                Tough, heavy-gauge corrugated board is precision-cut and contoured over the entire bike chassis, engine crankcase, silencer pipe, and wheel mudguards. This armored outer skeleton shields against abrasive rubbing, incidental cargo friction, and accidental bumps during transit.
              </p>
            </div>

            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 22px;">
              <h3 style="font-size: 1.2rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">
                4. Industrial Stretch Film & Custom Wooden Crating
              </h3>
              <p style="font-size: 1rem; color: #475569; margin: 0; line-height: 1.7;">
                The entire package is hermetically sealed with waterproof poly-stretch film to lock all padding in position and guard against rain, dust, and humidity. For luxury cruisers (Royal Enfield 650, Harley Davidson) and performance superbikes, we construct tailored treated-wood crates with heavy base pallets.
              </p>
            </div>
          </div>
        </section>

        <!-- Technical Loading and Highway Transit Mechanics -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 16px;">
            Technical Loading Mechanics: Zero-Contact Highway Transit
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            The difference between professional vehicle logistics and casual trucking lies in the mechanical immobilization inside the carrier. When our dedicated trucks arrive at your Bokaro sector location, loading is executed through full-width hydraulic tailgate lifts or heavy-duty diamond-plate aluminum loading ramps. We strictly forbid manual rough dragging or lifting by exhaust pipes.
          </p>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Inside the container, each two-wheeler is mounted onto individual front-wheel steel chocks. These chocks clamp the front tyre securely in an upright orientation. Four heavy-duty polyester ratchet straps with vinyl-coated S-hooks are anchored from the lower triple clamp and rear subframe directly to flush floor d-rings. The straps compress the bike suspension slightly (approximately 25% of travel), ensuring the vehicle's own shock absorbers absorb road undulations while the chassis remains completely immobile.
          </p>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Furthermore, each vehicle is positioned with a minimum 1.5-foot buffer clearance from surrounding cargo and neighboring vehicles. Padded partition blankets are installed between stalls, eliminating any possibility of harmonic resonance sway or contact during long-haul interstate transits over varying road gradients.
          </p>
        </section>

        <!-- Second Visual Section -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px; margin: 35px 0;">
          <div>
            <img src="<?php echo SITE_BASE_URL; ?>/images/scooter-bike-safe-transit-packing-jharkhand.jpg" alt="Scooty and commuter bike parcel packing in Bokaro" style="width: 100%; height: 260px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.06);">
            <p style="font-size: 0.9rem; color: #64748b; margin-top: 8px; text-align: center;">Protective packaging applied to gearless scooters (Activa, Jupiter, Access) in Chas Bokaro.</p>
          </div>
          <div>
            <img src="<?php echo SITE_BASE_URL; ?>/images/two-wheeler-motorcycle-carrier-jharkhand.jpg" alt="Two wheeler secured carrier transit from Bokaro" style="width: 100%; height: 260px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.06);">
            <p style="font-size: 0.9rem; color: #64748b; margin-top: 8px; text-align: center;">Covered transport carrier fitted with ratcheted wheel chocks and stabilizing anchor straps.</p>
          </div>
        </div>

        <!-- Comparative Cost & Timeline Table -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 16px;">
            Estimated Bike Transport Rates & Transit Durations from Bokaro
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 20px;">
            We maintain 100% transparent pricing with no hidden loading charges, terminal tolls, or fuel surcharges. Below is our standard rate chart for two-wheeler transport originating from Bokaro Steel City and Chas:
          </p>

          <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; margin-bottom: 20px;">
              <thead>
                <tr style="background: #0f223d; color: #ffffff;">
                  <th style="padding: 14px 16px; border: 1px solid #1e293b;">Destination Route</th>
                  <th style="padding: 14px 16px; border: 1px solid #1e293b;">Scooty / 100-125cc</th>
                  <th style="padding: 14px 16px; border: 1px solid #1e293b;">150-250cc Motorbike</th>
                  <th style="padding: 14px 16px; border: 1px solid #1e293b;">Cruiser / 350cc+ Superbike</th>
                  <th style="padding: 14px 16px; border: 1px solid #1e293b;">Expected Transit</th>
                </tr>
              </thead>
              <tbody>
                <tr style="background: #ffffff;">
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0; font-weight: 600;">
                    <a href="<?php echo SITE_BASE_URL; ?>/bokaro-to-ranchi-packers-and-movers" style="color: #0284c7; text-decoration: none;">Bokaro to Ranchi</a>
                  </td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹1,800 - ₹2,200</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹2,200 - ₹2,700</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹2,900 - ₹3,600</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">Same Day - 24 Hrs</td>
                </tr>
                <tr style="background: #f8fafc;">
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0; font-weight: 600;">
                    <a href="<?php echo SITE_BASE_URL; ?>/bokaro-to-kolkata-packers-and-movers" style="color: #0284c7; text-decoration: none;">Bokaro to Kolkata</a>
                  </td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹3,000 - ₹3,600</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹3,600 - ₹4,200</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹4,500 - ₹5,400</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">2 - 3 Days</td>
                </tr>
                <tr style="background: #ffffff;">
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0; font-weight: 600;">
                    <a href="<?php echo SITE_BASE_URL; ?>/bokaro-to-patna-packers-and-movers" style="color: #0284c7; text-decoration: none;">Bokaro to Patna</a>
                  </td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹3,200 - ₹3,800</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹3,800 - ₹4,500</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹4,800 - ₹5,800</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">2 - 3 Days</td>
                </tr>
                <tr style="background: #f8fafc;">
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0; font-weight: 600;">
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-bangalore-to-bokaro" style="color: #0284c7; text-decoration: none;">Bokaro to Bangalore</a>
                  </td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹5,500 - ₹6,500</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹6,500 - ₹7,800</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹8,200 - ₹9,800</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">5 - 7 Days</td>
                </tr>
                <tr style="background: #ffffff;">
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0; font-weight: 600;">Bokaro to Delhi NCR</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹4,500 - ₹5,200</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹5,200 - ₹6,200</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹6,800 - ₹8,200</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">4 - 5 Days</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p style="font-size: 0.9rem; color: #64748b; font-style: italic;">
            * Rates include professional 4-layer packaging, doorstep loading in Bokaro, and unloading at destination. Marine insurance is charged optionally at 1.5% to 2% of vehicle declared value.
          </p>
        </section>

        <!-- Preparation Checklist for Bike Owners in Bokaro -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 16px;">
            Pre-Transport Preparation Checklist for Bike Owners
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 20px;">
            To ensure zero friction during highway inspections, e-Way bill compliance, and safe carrier loading, please complete the following quick steps prior to our crew's arrival in Bokaro:
          </p>
          <ul style="padding-left: 24px; font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 24px;">
            <li style="margin-bottom: 10px;">
              <strong>Empty the Fuel Tank:</strong> Drain petrol down to reserve (under 0.5 liter). Transporting full tanks violates fire safety regulations on closed carriers.
            </li>
            <li style="margin-bottom: 10px;">
              <strong>Wash the Two-Wheeler:</strong> A clean motorcycle enables an accurate pre-transit condition inspection report so all existing minor scratches are clearly documented.
            </li>
            <li style="margin-bottom: 10px;">
              <strong>Remove Detachable Accessories:</strong> Detach loose mobile mounts, saddlebags, premium tank pouches, helmets, and aftermarket fog lights to prevent transit loss.
            </li>
            <li style="margin-bottom: 10px;">
              <strong>Check Tire Air Pressure:</strong> Ensure tires have nominal pressure to protect rims during ramp loading and secure tie-down ratcheting.
            </li>
            <li style="margin-bottom: 10px;">
              <strong>Keep Document Copies Handy:</strong> Provide 1 self-attested set of RC copy, Insurance certificate, PUC, and Aadhaar card for the driver's highway manifest.
            </li>
          </ul>
        </section>

        <!-- Key Highway Corridors Out of Bokaro -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 16px;">
            Strategic Highway Corridors Out of Bokaro Steel City
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Bokaro sits at a vital geographical crossroads in central-eastern Jharkhand. Our long-haul enclosed car and bike carriers leverage well-established highway arterials:
          </p>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 18px; margin-bottom: 20px;">
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">NH-320 & NH-23 (Ranchi Express Line)</h3>
              <p style="font-size: 0.95rem; color: #475569; margin: 0; line-height: 1.6;">Connecting Bokaro through Peterwar, Gola, and Ormanjhi into Ranchi. Daily scheduled departures ensure same-day or 24-hour delivery to the Jharkhand state capital.</p>
            </div>
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">NH-18 (Purulia & Bengal Corridor)</h3>
              <p style="font-size: 0.95rem; color: #475569; margin: 0; line-height: 1.6;">Departing Chas via Chas bypass across the Purulia border into Bankura and connecting with NH-16 straight into Kolkata and Howrah commercial depots.</p>
            </div>
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">NH-32 (Dhanbad-Bokaro Trunk Line)</h3>
              <p style="font-size: 0.95rem; color: #475569; margin: 0; line-height: 1.6;">Direct four-lane link across Telmuchu bridge connecting Bokaro with Dhanbad and linking seamlessly onto the Grand Trunk Golden Quadrilateral (NH-19).</p>
            </div>
          </div>
        </section>

        <!-- Comparison: Shree Ashirwad vs Railway Parcel -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 16px;">
            Shree Ashirwad Bike Transport vs. Indian Railways Parcel Service in Bokaro
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 20px;">
            Many residents consider booking their bikes through Bokaro Steel City Railway Station (BKSC). Here is an objective comparison showing why our dedicated door-to-door carrier service delivers greater peace of mind:
          </p>

          <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem;">
              <thead>
                <tr style="background: #0f223d; color: #ffffff;">
                  <th style="padding: 12px 14px; border: 1px solid #1e293b;">Feature</th>
                  <th style="padding: 12px 14px; border: 1px solid #1e293b;">Shree Ashirwad Packers</th>
                  <th style="padding: 12px 14px; border: 1px solid #1e293b;">Railway Luggage / Parcel</th>
                </tr>
              </thead>
              <tbody>
                <tr style="background: #ffffff;">
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; font-weight: 600;">Pickup & Delivery</td>
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; color: #15803d; font-weight: 600;">100% Doorstep to Doorstep</td>
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; color: #b91c1c;">Must transport to & from station yard</td>
                </tr>
                <tr style="background: #f8fafc;">
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; font-weight: 600;">Packaging Quality</td>
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; color: #15803d; font-weight: 600;">4-Layer Foam, 3-Ply Bubble & Corrugated Armor</td>
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; color: #b91c1c;">Crude gunny sack with straw stuffing</td>
                </tr>
                <tr style="background: #ffffff;">
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; font-weight: 600;">Loading Handling</td>
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; color: #15803d; font-weight: 600;">Hydraulic tailgate ramp & ratchet straps</td>
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; color: #b91c1c;">Manual porter lifting with rough brake dragging</td>
                </tr>
                <tr style="background: #f8fafc;">
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; font-weight: 600;">Transit Protection</td>
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; color: #15803d; font-weight: 600;">All-weather covered container trucks</td>
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; color: #b91c1c;">Exposed platform parking under sun and rain</td>
                </tr>
                <tr style="background: #ffffff;">
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; font-weight: 600;">Tracking & Status</td>
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; color: #15803d; font-weight: 600;">Direct dispatch officer updates & GPS track</td>
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; color: #b91c1c;">Manual parcel office enquiries only</td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>

        <!-- Bokaro Localities Covered -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 16px;">
            Localities Covered for Two-Wheeler Pickup Across Bokaro & Chas
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Our local transport fleet operates daily throughout Bokaro Steel City and neighboring industrial zones. We provide scheduled doorstep pickup across:
          </p>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 14px;">
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Sector 1, Sector 2 & Sector 3</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Sector 4 City Centre & Sector 5</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Sector 6, Sector 8 & Sector 9</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Sector 11, Sector 12 & Camp 2</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Chas, ITI More & Bypass Road</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Co-operative Colony & Kurmidih</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Bokaro Thermal & Chandrapura</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Bermo, Phusro & Gomia Belt</div>
          </div>
        </section>

        <!-- FAQ Section -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 24px;">
            Frequently Asked Questions on Bike Transport in Bokaro
          </h2>

          <div style="display: grid; grid-template-columns: 1fr; gap: 16px;">
            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">How is bike transport in Bokaro carried out by Shree Ashirwad Packers?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">Our bike transport in Bokaro follows a meticulous 4-layer packaging standard. We start with foam edge protectors on levers and handlebars, apply 3-ply heavy bubble wrap across fuel tanks, mirrors, and fairings, wrap thick corrugated sheets over engine casings and silencers, and finish with water-resistant stretch film. Bikes are transported in specialized covered carriers fitted with wheel locking chocks and tie-down straps.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">What is the cost of transporting a two-wheeler from Bokaro to Ranchi or Kolkata?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">Standard commuter bike transport from Bokaro to Ranchi starts from ₹1,800 to ₹2,800 depending on vehicle cubic capacity. Shifting from Bokaro to Kolkata typically ranges from ₹3,200 to ₹4,800. Premium cruiser or sports bikes requiring wooden crate encapsulation have slightly higher packing costs.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">Do you provide doorstep pickup in SAIL Bokaro township sectors and Chas?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">Yes, our mobile inspection and pickup team services all township sectors from Sector 1 through Sector 12, Camp 2, Co-operative Colony, City Centre Sector 4, as well as Chas, Chandrapura, and Bokaro Thermal.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">What documents are required for shipping a motorcycle from Bokaro?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">You need to submit a photocopy of the vehicle Registration Certificate (RC Book), valid Motor Vehicle Insurance policy, updated Pollution Under Control (PUC) certificate, and government-issued photo ID of the owner (Aadhaar or Voter ID).</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">Should the petrol tank be completely empty before loading?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">Yes, as per statutory highway carrier safety norms, the fuel tank must be nearly empty (less than 0.5 litre) to prevent fire hazards during long-distance linehaul transits across NH-320, NH-18, and NH-2.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">Is transit insurance mandatory for two-wheeler transport from Bokaro?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">While third-party motor insurance is a statutory requirement on Indian highways, we strongly recommend comprehensive marine transit insurance covering accidental vehicle impact, fire, theft, or overturn hazards during long-distance linehaul moves. We provide full policy issuance on spot.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">Can you ship high-end sports bikes like Royal Enfield, KTM, or Harley Davidson?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">Yes, we specialize in high-end sports bikes and cruisers. For Royal Enfield Himalayan, Classic, KTM Duke, and BMW Motorrad, we build custom heavy-duty pine wood crates with internal pneumatic strapping and zero-contact fork suspension bracing.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">Can I ship extra gear like helmets and riding jackets with my bike?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">Yes, you can pack your helmet, riding jacket, and rain gear in a sealed corrugated carton. We securely strap it alongside the motorcycle inside the carrier at nominal or zero supplementary charge.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">What is the procedure if my motorcycle gets scratched during transit?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">Before dispatch in Bokaro, our crew completes a digital condition inspection report signed by you. In the rare event of transit damage covered by transit insurance, claims are processed promptly with our insurer.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">How do I track my bike's transit progress after dispatch from Bokaro?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">You receive a dedicated consignment tracking note number (LR number) upon pickup. Our 24/7 central logistics desk provides daily milestone notifications via SMS and WhatsApp until arrival.</p>
            </div>
          </div>
        </section>

        <!-- Final Call to Action Box -->
        <section style="background: linear-gradient(135deg, #0f223d 0%, #1a3a5f 100%); color: #ffffff; padding: 45px 35px; border-radius: 14px; text-align: center;">
          <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 14px;">Ready to Transport Your Bike from Bokaro Safely?</h2>
          <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 700px; margin: 0 auto 28px;">
            Get an instant, customized quote for your motorcycle, scooty, or premium sports bike. Free doorstep inspection and zero-scratch guarantee across Bokaro Steel City and Chas.
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
            <a href="<?php echo SITE_BASE_URL; ?>/bike-transport-in-bokaro" style="color: #ff6a28; text-decoration: none; background: #fff7ed; padding: 9px 15px; border-radius: 6px; font-weight: 700; border: 1px solid #fed7aa;">Bike Transport in Bokaro (Current)</a>
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
