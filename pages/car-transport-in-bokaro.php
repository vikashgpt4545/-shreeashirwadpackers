<?php
/**
 * Car Transport in Bokaro - Shree Ashirwad Packers and Movers
 * 
 * High-performance, fully SEO-optimized landing page for car carrier services,
 * automobile shipping, and door-to-door four-wheeler transport from Bokaro Steel City and Chas.
 * Target Keyword: car transport in bokaro
 */

// Define page-specific metadata
$page_title = "Car Transport in Bokaro | Enclosed Car Carrier Service - Shree Ashirwad";
$page_description = "Specialized car transport in Bokaro & Chas by Shree Ashirwad Packers and Movers. Hydraulic enclosed car carriers, zero-scratch wheel-chock transit, marine insurance, door pickup across Sectors 1-12, Chas, and pan-India delivery. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/car-transport-in-bokaro";

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
  <meta name="keywords" content="car transport in bokaro, car carrier service bokaro, car shifting services chas bokaro, enclosed car transport bokaro steel city, car courier bokaro to ranchi, car transport bokaro to kolkata, vehicle moving service bokaro">
  <link rel="canonical" href="<?php echo $canonical_url; ?>">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta property="og:url" content="<?php echo $canonical_url; ?>">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg">
  <meta property="og:image:alt" content="Professional Car Transport and Carrier Loading in Bokaro by Shree Ashirwad Packers">
  <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
  <meta property="og:locale" content="en_IN">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg">

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
    "name": "Shree Ashirwad Packers and Movers Bokaro Car Carrier",
    "url": "<?php echo $canonical_url; ?>",
    "logo": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
    "image": "<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg",
    "description": "Licensed and certified car transportation services in Bokaro Steel City & Chas by Shree Ashirwad Packers and Movers. Features enclosed hydraulic car trailers, zero-contact wheel clamping, and full transit insurance coverage.",
    "telephone": "<?php echo SECONDARY_PHONE_RAW; ?>",
    "priceRange": "₹4,500 - ₹26,000",
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
    "serviceType": "Automobile Transport Service",
    "provider": {
      "@type": "MovingCompany",
      "name": "Shree Ashirwad Packers and Movers"
    },
    "areaServed": {
      "@type": "City",
      "name": "Bokaro Steel City"
    },
    "description": "Enclosed car carrier transport, hydraulic platform loading, and interstate four-wheeler shifting service in Bokaro Steel City. Full transit insurance, GPS updates, and door-to-door delivery.",
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
        "name": "Car Transport in Bokaro",
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
        "name": "How does Shree Ashirwad ensure scratch-free car transport in Bokaro?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We operate dedicated hydraulic closed car carriers where vehicles are driven up low-angle ramps without underbody scraping. Once inside, cars are secured with non-abrasive over-tyre nylon ratchet straps locked directly into heavy chassis floor anchors. The vehicle rides strictly on its own tires and suspension without metal-to-metal contact with truck sidewalls."
        }
      },
      {
        "@type": "Question",
        "name": "What is the cost of shipping a hatchback or SUV from Bokaro to Kolkata or Bangalore?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Shipping a standard hatchback from Bokaro to Kolkata costs approximately ₹5,500 to ₹7,500, while a mid-size SUV costs ₹7,500 to ₹9,500. Long-distance transit from Bokaro to Bangalore ranges from ₹14,500 to ₹18,500 for hatchbacks and ₹18,000 to ₹23,000 for large SUVs or luxury vehicles."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide car pickup from SAIL Bokaro quarters and Chas residential complexes?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, our certified drivers provide doorstep vehicle inspection and collection across all sectors (Sector 1 through 12, Camp 2, Co-operative Colony, City Centre) and throughout Chas, Bermo, and Chandrapura."
        }
      },
      {
        "@type": "Question",
        "name": "What documents are required to transport a car out of Bokaro?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "You must provide clear photocopies of the Car Registration Certificate (RC), valid Comprehensive Insurance Policy, latest Pollution Under Control (PUC) certificate, and photo ID proof of the vehicle owner (Aadhaar Card, Passport, or PAN card)."
        }
      },
      {
        "@type": "Question",
        "name": "Can I leave personal belongings or household items inside the car?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "As per highway transport carrier rules and GST e-Way bill regulations, luggage or household goods are not permitted inside personal vehicles during interstate transit. Loose items can shift during transit and potentially damage automotive glass or interiors."
        }
      },
      {
        "@type": "Question",
        "name": "Is transit insurance mandatory for car transport from Bokaro?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we strongly recommend and arrange comprehensive marine transit insurance covering accidental collision, vehicle overturn, fire, and structural highway hazards. The insurance is issued based on the car's current Insured Declared Value (IDV)."
        }
      },
      {
        "@type": "Question",
        "name": "How is the pre-transit car condition recorded?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Our vehicle officer conducts a comprehensive 20-point digital inspection before taking custody in Bokaro. High-resolution photographs are captured of all panels, glass, odometer reading, fuel level, and existing minor marks, and signed off on the Car Condition Report."
        }
      },
      {
        "@type": "Question",
        "name": "How long does car carrier transit take from Bokaro to Delhi or Mumbai?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Transit to Kolkata takes 2 to 3 days, Delhi NCR takes 4 to 6 days, Mumbai takes 5 to 7 days, and Southern destinations like Bangalore, Hyderabad, or Chennai take 6 to 8 days via our regular container dispatch schedules."
        }
      },
      {
        "@type": "Question",
        "name": "Do you offer open car carriers or enclosed trailers in Bokaro?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We primarily use enclosed covered car trailers to shield vehicles from highway gravel, monsoon rain, flying debris, and intense sunlight. For short inter-district transfers within Jharkhand, cost-effective single-car flatbed tow trucks are also available."
        }
      },
      {
        "@type": "Question",
        "name": "What fuel level should I maintain before handing over the car in Bokaro?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Keep approximately 10 to 15 liters of fuel (about 1/4th tank) in the vehicle. This is sufficient for driving onto ramps and local delivery maneuvering while complying with fire safety regulations for closed freight vehicles."
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
          <li style="color: #0f223d; font-weight: 600;">Car Transport in Bokaro</li>
        </ol>
      </nav>

      <!-- Main Header Section -->
      <header style="margin-bottom: 35px;">
        <h1 style="font-family: 'Outfit', sans-serif; font-size: 2.6rem; color: #0f223d; font-weight: 800; line-height: 1.25; margin-bottom: 16px;">
          Car Transport in Bokaro: Enclosed Carrier Logistics & Zero-Scratch Delivery
        </h1>
        <p style="font-size: 1.15rem; color: #475569; max-width: 980px; line-height: 1.7;">
          Relocating your family sedan, compact hatchback, luxury SUV, or electric vehicle from Bokaro Steel City demands uncompromising safety, custom enclosed auto trailers, and certified logistics handlers. At <strong>Shree Ashirwad Packers and Movers</strong>, we provide specialized <a href="<?php echo SITE_BASE_URL; ?>/car-transport-in-bokaro" style="color: #ff6a28; text-decoration: underline; font-weight: 600;">car transport in Bokaro</a> featuring hydraulic ramp loading, wheel-chock stabilization, marine transit insurance, and guaranteed door-to-door delivery across India.
        </p>
      </header>

      <!-- Quick Highlights Grid -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px; margin-bottom: 40px;">
        <div style="background: #ffffff; padding: 22px; border-radius: 10px; border-left: 4px solid #ff6a28; box-shadow: 0 2px 10px rgba(0,0,0,0.04);">
          <h3 style="font-size: 1.1rem; color: #0f223d; margin-bottom: 8px; font-weight: 700;">Enclosed Car Trailers</h3>
          <p style="font-size: 0.95rem; color: #64748b; margin: 0;">Weatherproof, sealed container trailers shielding your car from road gravel, tar splatter, rain, and dust.</p>
        </div>
        <div style="background: #ffffff; padding: 22px; border-radius: 10px; border-left: 4px solid #0284c7; box-shadow: 0 2px 10px rgba(0,0,0,0.04);">
          <h3 style="font-size: 1.1rem; color: #0f223d; margin-bottom: 8px; font-weight: 700;">Wheel-Lock Clamping</h3>
          <p style="font-size: 0.95rem; color: #64748b; margin: 0;">Tension-rated ratchet tyre lashes fastened to trailer deck anchors with zero chassis or axle strain.</p>
        </div>
        <div style="background: #ffffff; padding: 22px; border-radius: 10px; border-left: 4px solid #10b981; box-shadow: 0 2px 10px rgba(0,0,0,0.04);">
          <h3 style="font-size: 1.1rem; color: #0f223d; margin-bottom: 8px; font-weight: 700;">Doorstep Collection</h3>
          <p style="font-size: 0.95rem; color: #64748b; margin: 0;">Direct pickup across all Bokaro Sectors 1-12, Chas, BSL township quarters, and Co-operative Colony.</p>
        </div>
        <div style="background: #ffffff; padding: 22px; border-radius: 10px; border-left: 4px solid #8b5cf6; box-shadow: 0 2px 10px rgba(0,0,0,0.04);">
          <h3 style="font-size: 1.1rem; color: #0f223d; margin-bottom: 8px; font-weight: 700;">Comprehensive Insurance</h3>
          <p style="font-size: 0.95rem; color: #64748b; margin: 0;">Full-coverage marine transit policies covering Insured Declared Value (IDV) against any transit hazard.</p>
        </div>
      </div>

      <!-- Hero Visual Section -->
      <figure style="margin: 0 auto 35px; max-width: 550px; text-align: center;">
        <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Enclosed car carrier loading in Bokaro Steel City" style="width: 100%; height: 280px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 14px rgba(0,0,0,0.08); display: block; margin: 0 auto;" loading="lazy">
        <figcaption style="font-size: 0.88rem; color: #64748b; margin-top: 8px; text-align: center;">
          Hydraulic ramp loading of a premium car inside an enclosed carrier trailer by Shree Ashirwad vehicle logistics specialists in Bokaro.
        </figcaption>
      </figure>

      <!-- In-Depth Content Sections -->
      <div style="background: #ffffff; padding: 40px; border-radius: 12px; box-shadow: 0 2px 14px rgba(0,0,0,0.04); margin-bottom: 40px;">
        
        <section style="margin-bottom: 35px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 16px;">
            The Need for Professional Car Transportation Services in Bokaro Steel City
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            As an iconic industrial and educational hub in eastern India, Bokaro Steel City witnesses regular intercity and interstate relocations. Executives from SAIL, engineers, banking professionals, doctors at Bokaro General Hospital (BGH), and defense personnel frequently receive transfer orders to metropolitan hubs like Kolkata, Ranchi, Patna, Delhi NCR, Bangalore, Pune, and Hyderabad.
          </p>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Driving your four-wheeler over 400 to 2,000 kilometers on congested interstate corridors, poorly lit rural stretches, and ghat roads adds immense unnecessary mileage, causes extensive tire and brake wear, exposes your luxury car's finish to flying highway gravel, and incurs steep toll, hotel, and fuel expenses. By choosing <strong>Shree Ashirwad Packers and Movers</strong> for <a href="<?php echo SITE_BASE_URL; ?>/car-transport-in-bokaro" style="color: #ff6a28; text-decoration: underline; font-weight: 600;">car transport in Bokaro</a>, you eliminate highway driving fatigue entirely and preserve your vehicle's pristine showroom condition.
          </p>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            We accommodate all categories of passenger automobiles: from daily commuters like Maruti Suzuki Swift, Hyundai i20, and Tata Tiago to executive sedans like Honda City, Hyundai Verna, and Skoda Slavia, compact and mid-size SUVs like Hyundai Creta, Kia Seltos, Mahindra Thar, and Scorpio-N, large family carriers like Toyota Innova Hycross, and luxury German models like BMW 3 Series, Audi A4, and Mercedes-Benz GLC.
          </p>
        </section>

        <!-- Our Technical 5-Step Vehicle Logistics Workflow -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 20px;">
            Our Technical 5-Step Automobile Logistics Protocol
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 24px;">
            Moving an automobile requires strict adherence to automotive transport engineering. Our Bokaro operations team implements a standardized 5-step handling cycle:
          </p>

          <div style="display: grid; grid-template-columns: 1fr; gap: 20px;">
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 22px;">
              <h3 style="font-size: 1.2rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">
                1. Comprehensive Pre-Loading Inspection & Vehicle Condition Report
              </h3>
              <p style="font-size: 1rem; color: #475569; margin: 0; line-height: 1.7;">
                Before custody transfer at your residence in Bokaro or Chas, our vehicle survey specialist conducts a 20-point digital inspection. We record current odometer readings, fluid levels, tire tread conditions, battery status, and photograph all body panels to catalog preexisting minor marks. A duplicate copy of the signed Car Condition Report is handed to you immediately.
              </p>
            </div>

            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 22px;">
              <h3 style="font-size: 1.2rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">
                2. Hydraulic Ramp Loading with Zero Underbody Scraping
              </h3>
              <p style="font-size: 1rem; color: #475569; margin: 0; line-height: 1.7;">
                Vehicles are carefully loaded onto specialized carriers using heavy-duty, low-incline hydraulic ramps. This design accommodates low ground-clearance sedans and sports coupes, eliminating any risk of front bumper lip scraping, exhaust pipe contact, or underbody scuffing during ingress.
              </p>
            </div>

            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 22px;">
              <h3 style="font-size: 1.2rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">
                3. Over-Tyre Ratchet Strapping & Steel Wheel Chock Locking
              </h3>
              <p style="font-size: 1rem; color: #475569; margin: 0; line-height: 1.7;">
                Inside the carrier deck, each wheel is braced against heavy-gauge contoured steel wheel chocks. Industrial polyester ratchet straps (tested to 3,500 kg breaking strength) are secured over the top circumference of all four tires and tension-locked to deck anchor rings. The car remains 100% immobilized while allowing its own shock absorbers to cushion highway motion without stressing axles or tie rods.
              </p>
            </div>

            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 22px;">
              <h3 style="font-size: 1.2rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">
                4. Enclosed Weatherproof Transit Across National Highway Arterials
              </h3>
              <p style="font-size: 1rem; color: #475569; margin: 0; line-height: 1.7;">
                All long-distance vehicles travel inside sealed, double-walled container trailers. This completely isolates your automobile from diesel soot, flying gravel on NH-320 and NH-19 (GT Road), monsoon rain, bird droppings, and damaging direct sunlight. Dedicated drivers operate in dual-crew shifts to ensure uninterrupted transit schedules.
              </p>
            </div>

            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 22px;">
              <h3 style="font-size: 1.2rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">
                5. Destination Doorstep Unloading & Customer Verification
              </h3>
              <p style="font-size: 1rem; color: #475569; margin: 0; line-height: 1.7;">
                Upon arrival at the destination city (e.g., Bangalore, Delhi, Kolkata, or Patna), our local team performs ramp unloading and drives the vehicle to your new address. We cross-verify the vehicle against the original Bokaro condition report in your presence before completing final handover sign-off.
              </p>
            </div>
          </div>
        </section>

        <!-- Visual Supporting Section -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px; margin: 35px 0;">
          <div>
            <img src="<?php echo SITE_BASE_URL; ?>/images/waterproof-container-loading-jharkhand.jpg" alt="Weatherproof automobile container loading in Bokaro" style="width: 100%; height: 260px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.06);">
            <p style="font-size: 0.9rem; color: #64748b; margin-top: 8px; text-align: center;">All-weather sealed container carrier loading ensuring zero dust and rainwater exposure.</p>
          </div>
          <div>
            <img src="<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg" alt="Intercity long haul vehicle transportation from Bokaro" style="width: 100%; height: 260px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.06);">
            <p style="font-size: 0.9rem; color: #64748b; margin-top: 8px; text-align: center;">Long-haul linehaul carriers connecting Bokaro to metro corridors across India.</p>
          </div>
        </div>

        <!-- Comprehensive Rate Matrix Table -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 16px;">
            Estimated Car Transport Rates & Delivery Schedules from Bokaro
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 20px;">
            Here is our transparent rate matrix for car carrier services originating from Bokaro Steel City and Chas. We provide clear, itemized quotes with no hidden loading charges or gate passes:
          </p>

          <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; margin-bottom: 20px;">
              <thead>
                <tr style="background: #0f223d; color: #ffffff;">
                  <th style="padding: 14px 16px; border: 1px solid #1e293b;">Destination Route</th>
                  <th style="padding: 14px 16px; border: 1px solid #1e293b;">Hatchback (Swift/i10)</th>
                  <th style="padding: 14px 16px; border: 1px solid #1e293b;">Sedan (City/Verna)</th>
                  <th style="padding: 14px 16px; border: 1px solid #1e293b;">SUV / MUV (Creta/Thar)</th>
                  <th style="padding: 14px 16px; border: 1px solid #1e293b;">Transit Timeline</th>
                </tr>
              </thead>
              <tbody>
                <tr style="background: #ffffff;">
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0; font-weight: 600;">
                    <a href="<?php echo SITE_BASE_URL; ?>/bokaro-to-ranchi-packers-and-movers" style="color: #0284c7; text-decoration: none;">Bokaro to Ranchi</a>
                  </td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹4,500 - ₹5,500</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹5,500 - ₹6,500</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹6,500 - ₹8,000</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">Same Day / 24 Hrs</td>
                </tr>
                <tr style="background: #f8fafc;">
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0; font-weight: 600;">
                    <a href="<?php echo SITE_BASE_URL; ?>/bokaro-to-kolkata-packers-and-movers" style="color: #0284c7; text-decoration: none;">Bokaro to Kolkata</a>
                  </td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹6,000 - ₹7,500</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹7,500 - ₹9,000</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹9,000 - ₹11,500</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">2 - 3 Days</td>
                </tr>
                <tr style="background: #ffffff;">
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0; font-weight: 600;">
                    <a href="<?php echo SITE_BASE_URL; ?>/bokaro-to-patna-packers-and-movers" style="color: #0284c7; text-decoration: none;">Bokaro to Patna</a>
                  </td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹7,000 - ₹8,500</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹8,500 - ₹10,000</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹10,500 - ₹13,000</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">2 - 4 Days</td>
                </tr>
                <tr style="background: #f8fafc;">
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0; font-weight: 600;">
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-bangalore-to-bokaro" style="color: #0284c7; text-decoration: none;">Bokaro to Bangalore</a>
                  </td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹14,500 - ₹17,000</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹17,000 - ₹20,000</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹20,500 - ₹25,000</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">6 - 8 Days</td>
                </tr>
                <tr style="background: #ffffff;">
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0; font-weight: 600;">Bokaro to Delhi NCR</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹11,000 - ₹13,500</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹13,500 - ₹16,000</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹16,500 - ₹20,000</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">4 - 6 Days</td>
                </tr>
                <tr style="background: #f8fafc;">
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0; font-weight: 600;">Bokaro to Pune / Mumbai</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹13,500 - ₹16,000</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹16,000 - ₹18,500</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">₹19,000 - ₹23,500</td>
                  <td style="padding: 12px 16px; border: 1px solid #e2e8f0;">5 - 7 Days</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p style="font-size: 0.9rem; color: #64748b; font-style: italic;">
            * Quotes cover complete hydraulic ramp loading in Bokaro, enclosed trailer transit, and doorstep delivery. Marine transit insurance is calculated optionally at 1.5% to 2% of the vehicle IDV.
          </p>
        </section>

        <!-- Driving vs Enclosed Carrier Comparison -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 16px;">
            Self-Driving vs. Professional Enclosed Car Carrier from Bokaro
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 20px;">
            Many car owners weigh the decision between driving the car themselves across several states versus hiring a certified car carrier. Here is a clear cost and risk comparison for a move from Bokaro to Bangalore or Delhi:
          </p>

          <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem;">
              <thead>
                <tr style="background: #0f223d; color: #ffffff;">
                  <th style="padding: 12px 14px; border: 1px solid #1e293b;">Factor</th>
                  <th style="padding: 12px 14px; border: 1px solid #1e293b;">Professional Car Carrier (Shree Ashirwad)</th>
                  <th style="padding: 12px 14px; border: 1px solid #1e293b;">Self-Driving on Interstate Highways</th>
                </tr>
              </thead>
              <tbody>
                <tr style="background: #ffffff;">
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; font-weight: 600;">Vehicle Odometer Mileage</td>
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; color: #15803d; font-weight: 600;">Zero additional kilometers (loaded on trailer)</td>
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; color: #b91c1c;">1,300 to 2,000+ km of severe road wear</td>
                </tr>
                <tr style="background: #f8fafc;">
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; font-weight: 600;">Tire & Mechanical Wear</td>
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; color: #15803d; font-weight: 600;">Completely preserved inside closed deck</td>
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; color: #b91c1c;">High tire heat, brake pad wear, suspension stress</td>
                </tr>
                <tr style="background: #ffffff;">
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; font-weight: 600;">Highway Risks & Paint Chips</td>
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; color: #15803d; font-weight: 600;">Protected from stones, rain, tar, and debris</td>
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; color: #b91c1c;">Frequent stone chips on bumper, windshield pitting</td>
                </tr>
                <tr style="background: #f8fafc;">
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; font-weight: 600;">Owner Personal Time & Safety</td>
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; color: #15803d; font-weight: 600;">Relax and fly or take a train comfortably</td>
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; color: #b91c1c;">3 to 4 days of grueling driving through heavy traffic</td>
                </tr>
                <tr style="background: #ffffff;">
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; font-weight: 600;">Total Out-of-Pocket Expense</td>
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; color: #15803d; font-weight: 600;">One predictable, fixed carrier invoice</td>
                  <td style="padding: 12px 14px; border: 1px solid #e2e8f0; color: #b91c1c;">Fuel (₹12k-18k) + Tolls (₹3k) + Hotels & Food (₹8k+)</td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>

        <!-- Preparation Tips for Car Owners in Bokaro -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 16px;">
            Car Preparation Checklist Before Handover in Bokaro
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 20px;">
            To facilitate rapid inspection and loading at your sector quarter or bungalow in Bokaro, please follow these brief recommendations:
          </p>
          <ul style="padding-left: 24px; font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 24px;">
            <li style="margin-bottom: 10px;">
              <strong>Wash Exterior Thoroughly:</strong> A clean car allows both you and our vehicle inspector to easily identify and mark preexisting minor body chips or door dings.
            </li>
            <li style="margin-bottom: 10px;">
              <strong>Keep Fuel at Quarter Tank:</strong> Maintain roughly 10-15 liters of petrol or diesel. Excessive fuel is hazardous on carriers, while too little risks fuel pump stalling during trailer positioning.
            </li>
            <li style="margin-bottom: 10px;">
              <strong>Remove Fastag, Dashcams & Valuables:</strong> Take out aftermarket dash cameras, toll tags, loose coins, sunglasses, car perfumes, and audio amplifiers.
            </li>
            <li style="margin-bottom: 10px;">
              <strong>Check Battery & Antifreeze:</strong> Ensure your battery terminals are clean and tight so the vehicle starts smoothly during loading and destination rollout.
            </li>
            <li style="margin-bottom: 10px;">
              <strong>Disable Security Alarms:</strong> Deactivate motion or anti-theft sensors that might trigger from normal carrier trailer movement on highway gradients.
            </li>
          </ul>
        </section>

        <!-- Bokaro Localities Covered -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 16px;">
            Bokaro & Chas Localities Serviced for Car Carrier Pickup
          </h2>
          <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 16px;">
            Our vehicle carrier marshals operate across the entire Bokaro district. We provide scheduled doorstep pickup and ramp loading across:
          </p>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 14px;">
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Sector 1, Sector 2 & Sector 3</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Sector 4 City Centre & Sector 5</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Sector 6, Sector 8 & Sector 9</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Sector 11, Sector 12 & Camp 2</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Chas Municipality & Bye Pass</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Co-operative Colony & Kurmidih</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Bokaro Thermal & DVC Colony</div>
            <div style="background: #f1f5f9; padding: 14px; border-radius: 6px; font-weight: 600; color: #1e293b;">Bermo, Phusro & Jaridih Belt</div>
          </div>
        </section>

        <!-- FAQ Section -->
        <section style="margin-bottom: 40px;">
          <h2 style="font-family: 'Outfit', sans-serif; font-size: 1.85rem; color: #0f223d; font-weight: 700; margin-bottom: 24px;">
            Frequently Asked Questions on Car Transport in Bokaro
          </h2>

          <div style="display: grid; grid-template-columns: 1fr; gap: 16px;">
            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">How does Shree Ashirwad ensure scratch-free car transport in Bokaro?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">We operate dedicated hydraulic closed car carriers where vehicles are driven up low-angle ramps without underbody scraping. Once inside, cars are secured with non-abrasive over-tyre nylon ratchet straps locked directly into heavy chassis floor anchors. The vehicle rides strictly on its own tires and suspension without metal-to-metal contact with truck sidewalls.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">What is the cost of shipping a hatchback or SUV from Bokaro to Kolkata or Bangalore?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">Shipping a standard hatchback from Bokaro to Kolkata costs approximately ₹5,500 to ₹7,500, while a mid-size SUV costs ₹7,500 to ₹9,500. Long-distance transit from Bokaro to Bangalore ranges from ₹14,500 to ₹18,500 for hatchbacks and ₹18,000 to ₹23,000 for large SUVs or luxury vehicles.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">Do you provide car pickup from SAIL Bokaro quarters and Chas residential complexes?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">Yes, our certified drivers provide doorstep vehicle inspection and collection across all sectors (Sector 1 through 12, Camp 2, Co-operative Colony, City Centre) and throughout Chas, Bermo, and Chandrapura.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">What documents are required to transport a car out of Bokaro?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">You must provide clear photocopies of the Car Registration Certificate (RC), valid Comprehensive Insurance Policy, latest Pollution Under Control (PUC) certificate, and photo ID proof of the vehicle owner (Aadhaar Card, Passport, or PAN card).</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">Can I leave personal belongings or household items inside the car?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">As per highway transport carrier rules and GST e-Way bill regulations, luggage or household goods are not permitted inside personal vehicles during interstate transit. Loose items can shift during transit and potentially damage automotive glass or interiors.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">Is transit insurance mandatory for car transport from Bokaro?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">Yes, we strongly recommend and arrange comprehensive marine transit insurance covering accidental collision, vehicle overturn, fire, and structural highway hazards. The insurance is issued based on the car's current Insured Declared Value (IDV).</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">How is the pre-transit car condition recorded?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">Our vehicle officer conducts a comprehensive 20-point digital inspection before taking custody in Bokaro. High-resolution photographs are captured of all panels, glass, odometer reading, fuel level, and existing minor marks, and signed off on the Car Condition Report.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">How long does car carrier transit take from Bokaro to Delhi or Mumbai?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">Transit to Kolkata takes 2 to 3 days, Delhi NCR takes 4 to 6 days, Mumbai takes 5 to 7 days, and Southern destinations like Bangalore, Hyderabad, or Chennai take 6 to 8 days via our regular container dispatch schedules.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">Do you offer open car carriers or enclosed trailers in Bokaro?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">We primarily use enclosed covered car trailers to shield vehicles from highway gravel, monsoon rain, flying debris, and intense sunlight. For short inter-district transfers within Jharkhand, cost-effective single-car flatbed tow trucks are also available.</p>
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; background: #ffffff;">
              <h3 style="font-size: 1.1rem; color: #0f223d; font-weight: 700; margin-bottom: 8px;">What fuel level should I maintain before handing over the car in Bokaro?</h3>
              <p style="font-size: 0.95rem; line-height: 1.7; color: #475569; margin: 0;">Keep approximately 10 to 15 liters of fuel (about 1/4th tank) in the vehicle. This is sufficient for driving onto ramps and local delivery maneuvering while complying with fire safety regulations for closed freight vehicles.</p>
            </div>
          </div>
        </section>

        <!-- Final Call to Action Box -->
        <section style="background: linear-gradient(135deg, #0f223d 0%, #1a3a5f 100%); color: #ffffff; padding: 45px 35px; border-radius: 14px; text-align: center;">
          <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 14px;">Ready to Transport Your Car from Bokaro with Complete Peace of Mind?</h2>
          <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 700px; margin: 0 auto 28px;">
            Get an instant, transparent quote for your four-wheeler. Free home inspection, zero-scratch enclosed carrier transit, and comprehensive insurance coverage across Bokaro and Chas.
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
            <a href="<?php echo SITE_BASE_URL; ?>/car-transport-in-bokaro" style="color: #ff6a28; text-decoration: none; background: #fff7ed; padding: 9px 15px; border-radius: 6px; font-weight: 700; border: 1px solid #fed7aa;">Car Transport in Bokaro (Current)</a>
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
