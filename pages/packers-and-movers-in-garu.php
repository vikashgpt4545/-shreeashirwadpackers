<?php
/**
 * Packers and Movers in Garu - Shree Ashirwad Packers and Movers
 * Website: https://www.shreeashirwadpackers.com
 * Contact: +91 8409531615 / +91 9308888746
 * Office: Serving Garu, Palamu Tiger Reserve, Betla & Latehar District, Jharkhand
 */

require_once __DIR__ . '/includes/config.php';

// Page-specific variables
$page_title = "Packers and Movers in Garu - 8409531615 | Shree Ashirwad Packers";
$page_description = "Reputed packers and movers in Garu (Palamu Tiger Reserve), Latehar. Safe household shifting, forest officer transfers, car and bike carriers, full transit insurance. Call 8409531615.";
$page_keywords = "packers and movers in garu, movers and packers garu latehar, palamu tiger reserve packers and movers, betla shifting services, household shifting garu, car transport garu, bike courier garu, shree ashirwad packers garu";
$canonical_url = SITE_BASE_URL . "/packers-and-movers-in-garu";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>">
    <link rel="canonical" href="<?php echo $canonical_url; ?>" />
    <meta name="robots" content="index, follow">

    <!-- Open Graph Data -->
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $canonical_url; ?>">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg">
    <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg">

    <!-- CSS & Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Structured Data: MovingCompany -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MovingCompany",
      "name": "Shree Ashirwad Packers and Movers - Garu",
      "image": "<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg",
      "@id": "<?php echo $canonical_url; ?>#movingcompany",
      "url": "<?php echo $canonical_url; ?>",
      "telephone": "+918409531615",
      "priceRange": "INR 3500 - 52000",
        "keywords": "packers and movers in garu, movers and packers garu latehar, palamu tiger reserve packers and movers, betla shifting services, household shifting garu, car transport garu, bike courier garu, shree ashirwad packers garu",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Main Road, Near Forest Range Office, Garu",
        "addressLocality": "Garu",
        "addressRegion": "Jharkhand",
        "postalCode": "822126",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 23.7032,
        "longitude": 84.2234
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
        "opens": "00:00",
        "closes": "23:59"
      },
      "sameAs": [
        "https://www.facebook.com/shreeashirwadpackers",
        "https://www.shreeashirwadpackers.com"
      ]
    }
    </script>

    <!-- Structured Data: BreadcrumbList -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "<?php echo SITE_BASE_URL; ?>/"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Jharkhand Shifting",
        "item": "<?php echo SITE_BASE_URL; ?>/#service-areas"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Latehar Movers",
        "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-latehar"
      },{
        "@type": "ListItem",
        "position": 4,
        "name": "Packers and Movers in Garu",
        "item": "<?php echo $canonical_url; ?>"
      }]
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
          "name": "What relocation services does Shree Ashirwad Packers offer in Garu?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We provide residential home shifting, forest department officer transfers, police and administrative transfers, eco-resort logistics, enclosed car carrier transport, two-wheeler shipping, secure warehousing, and comprehensive transit insurance across Garu, Betla, and Latehar district."
          }
        },
        {
          "@type": "Question",
          "name": "How much does home relocation cost in Garu and Palamu Tiger Reserve area?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Local moves in Garu and towards Betla or Medininagar start from ₹3,500 for 1BHK quarters. Relocations to Latehar, Ranchi, Patna, or Kolkata range between ₹6,000 and ₹26,000 depending on consignment volume, hill ghat navigation, and packing tier."
          }
        },
        {
          "@type": "Question",
          "name": "Do your drivers safely navigate forest roads and hill ghats around Garu and Netarhat?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, our experienced drivers are specially trained for forest ghats, mountain hairpin bends, and rural roads of Palamu Tiger Reserve and Netarhat, ensuring safe transit with zero cargo movement."
          }
        },
        {
          "@type": "Question",
          "name": "How do you protect household furniture from moisture and road friction in forest terrains?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We apply 5-layer protective packing utilizing virgin LDPE foam wrap, heavy 80 GSM air bubble cushioning, corrugated corner angle guards, 5-ply cartons, and waterproof shrink film that completely seals out moisture and humidity."
          }
        },
        {
          "@type": "Question",
          "name": "Can you ship personal cars and motorbikes from Garu to other Indian states?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we operate enclosed automobile carrier trailers and customized hydraulic motorcycle crates with wheel clamps, bubble cushioning, GPS tracking, and complete transit insurance to deliver vehicles safely nationwide."
          }
        },
        {
          "@type": "Question",
          "name": "Are your invoices valid for government employee transfer claims?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we provide 100% genuine GST invoices, official consignment notes (LR copy), itemized packing inventory lists, and transit insurance documentation acceptable across state and central government departments."
          }
        },
        {
          "@type": "Question",
          "name": "How far in advance should I book my moving date in Garu?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We recommend booking 2 to 4 days in advance for local moves and 4 to 7 days ahead for intercity or long-distance moves. However, we also cater to emergency or last-minute relocations subject to vehicle and crew availability."
          }
        },
        {
          "@type": "Question",
          "name": "How can I book Packers and Movers in Garu?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can call our 24/7 Garu support desk directly at +91 8409531615 or +91 9308888746, or submit our online quick quote form on this page to schedule an immediate free doorstep survey."
          }
        }
      ]
    }
    </script>
</head>
<body class="page-template">
<?php include_once __DIR__ . '/includes/header.php'; ?>

<!-- Hero Section -->
<section class="city-hero-section" style="background: linear-gradient(135deg, #0d3b2e 0%, #175440 50%, #286e55 100%); color: #ffffff; padding: 60px 0 50px; position: relative; overflow: hidden;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <div class="hero-content-wrapper" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 40px;">
            <div class="hero-text-block" style="flex: 1 1 600px; min-width: 320px;">
                <div class="hero-badge" style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255, 193, 7, 0.2); border: 1px solid #ffc107; padding: 6px 14px; border-radius: 30px; font-size: 14px; font-weight: 600; color: #ffc107; margin-bottom: 20px;">
                    <i class="fa-solid fa-tree"></i> Trusted Relocation Partner in Garu & Palamu Tiger Reserve
                </div>
                <h1 style="font-family: 'Outfit', sans-serif; font-size: clamp(2.2rem, 4vw, 3.2rem); font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
                    Packers and Movers in Garu - <span style="color: #ffc107;">8409531615</span>
                </h1>
                <p style="font-family: 'Inter', sans-serif; font-size: 17px; line-height: 1.7; color: #e0e6ed; margin-bottom: 28px;">
                    Relocating home, forest department quarters, or commercial resort facilities in Garu? <strong>Shree Ashirwad Packers and Movers</strong> provides trusted, professional, and damage-free moving services across the lush forested heart of Latehar district. Situated along the North Koel River inside the renowned Palamu Tiger Reserve (PTR) corridor between Betla National Park, Medininagar (Daltonganj), Latehar, and Mahuadanr towards Netarhat, Garu requires exceptional driving proficiency, moisture-resistant packaging, and heavy-duty vehicles. Whether you are a forest officer, administrative executive, teacher, or local trader transferring interstate, our certified crew ensures 100% zero-damage execution backed by comprehensive transit insurance.
                </p>
                <div class="hero-stats-row" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(130px, 1fr)); gap: 15px; margin-bottom: 30px;">
                    <div style="background: rgba(255, 255, 255, 0.08); padding: 14px; border-radius: 10px; border-left: 3px solid #ffc107;">
                        <div style="font-size: 24px; font-weight: 700; color: #ffc107;">10+</div>
                        <div style="font-size: 13px; color: #cfd8dc;">Years in Latehar</div>
                    </div>
                    <div style="background: rgba(255, 255, 255, 0.08); padding: 14px; border-radius: 10px; border-left: 3px solid #00c853;">
                        <div style="font-size: 24px; font-weight: 700; color: #00c853;">100%</div>
                        <div style="font-size: 13px; color: #cfd8dc;">Safe Transit Record</div>
                    </div>
                    <div style="background: rgba(255, 255, 255, 0.08); padding: 14px; border-radius: 10px; border-left: 3px solid #00b0ff;">
                        <div style="font-size: 24px; font-weight: 700; color: #00b0ff;">3,900+</div>
                        <div style="font-size: 13px; color: #cfd8dc;">Moves Executed</div>
                    </div>
                    <div style="background: rgba(255, 255, 255, 0.08); padding: 14px; border-radius: 10px; border-left: 3px solid #ff9100;">
                        <div style="font-size: 24px; font-weight: 700; color: #ff9100;">24/7</div>
                        <div style="font-size: 13px; color: #cfd8dc;">Live GPS Support</div>
                    </div>
                </div>
                <div class="hero-actions" style="display: flex; flex-wrap: wrap; gap: 15px;">
                    <a href="tel:+918409531615" class="btn-primary" style="background: #ffc107; color: #1a252f; padding: 14px 28px; border-radius: 8px; font-weight: 700; font-size: 16px; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; transition: all 0.3s ease;">
                        <i class="fa-solid fa-phone-volume"></i> Call Now: 8409531615
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20moving%20services%20in%20Garu" target="_blank" class="btn-secondary" style="background: #25d366; color: #ffffff; padding: 14px 24px; border-radius: 8px; font-weight: 700; font-size: 16px; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; transition: all 0.3s ease;">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp Quote
                    </a>
                </div>
            </div>

            <!-- Quick Booking Form Container -->
            <div class="hero-form-container" style="flex: 0 1 420px; min-width: 320px; background: #ffffff; padding: 30px; border-radius: 14px; box-shadow: 0 20px 40px rgba(0,0,0,0.25); color: #2c3e50;">
                <h3 style="font-family: 'Outfit', sans-serif; font-size: 22px; font-weight: 700; margin-bottom: 8px; color: #0d3b2e; text-align: center;">
                    Get Free Quote in Garu
                </h3>
                <p style="font-size: 13px; color: #7f8c8d; text-align: center; margin-bottom: 20px;">Fast response in under 15 minutes</p>
                <form action="<?php echo SITE_BASE_URL; ?>/contact-form-handler.php" method="POST" class="hero-quote-form">
                    <input type="hidden" name="service_city" value="Garu">
                    <div style="margin-bottom: 14px;">
                        <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 5px; color: #34495e;">Full Name *</label>
                        <input type="text" name="name" required placeholder="Your full name" style="width: 100%; padding: 10px 14px; border: 1px solid #ced4da; border-radius: 6px; font-size: 14px; outline: none;">
                    </div>
                    <div style="margin-bottom: 14px;">
                        <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 5px; color: #34495e;">Mobile Number *</label>
                        <input type="tel" name="phone" required placeholder="10-digit mobile number" style="width: 100%; padding: 10px 14px; border: 1px solid #ced4da; border-radius: 6px; font-size: 14px; outline: none;">
                    </div>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
                        <div>
                            <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 5px; color: #34495e;">Pickup Location</label>
                            <input type="text" name="pickup_location" placeholder="e.g. Garu / PTR Range" style="width: 100%; padding: 10px 12px; border: 1px solid #ced4da; border-radius: 6px; font-size: 13px; outline: none;">
                        </div>
                        <div>
                            <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 5px; color: #34495e;">Destination</label>
                            <input type="text" name="drop_location" placeholder="e.g. Medininagar / Latehar / Ranchi" style="width: 100%; padding: 10px 12px; border: 1px solid #ced4da; border-radius: 6px; font-size: 13px; outline: none;">
                        </div>
                    </div>
                    <div style="margin-bottom: 16px;">
                        <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 5px; color: #34495e;">Shifting Type</label>
                        <select name="shifting_type" style="width: 100%; padding: 10px 12px; border: 1px solid #ced4da; border-radius: 6px; font-size: 13px; background-color: #fff; outline: none;">
                            <option value="Household Shifting">Household Shifting (1/2/3+ BHK)</option>
                            <option value="Forest & Police Transfer">Forest Officer / Police Transfer</option>
                            <option value="Car or Bike Carrier">Car / Bike Transport</option>
                            <option value="Eco Resort & Commercial Logistics">Resort & Commercial Logistics</option>
                            <option value="Warehousing and Storage">Storage & Warehousing</option>
                        </select>
                    </div>
                    <button type="submit" style="width: 100%; background: #e67e22; color: #ffffff; padding: 13px; border: none; border-radius: 7px; font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.3s ease; box-shadow: 0 4px 12px rgba(230,126,34,0.35);">
                        <i class="fa-solid fa-paper-plane"></i> Get Free Moving Estimate
                    </button>
                    <p style="font-size: 11px; color: #95a5a6; text-align: center; margin-top: 10px; margin-bottom: 0;">
                        <i class="fa-solid fa-lock"></i> 100% Privacy Protected. No Spam Calls.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Breadcrumbs Bar -->
<div style="background: #f1f4f8; padding: 12px 0; border-bottom: 1px solid #e2e8f0; font-size: 14px;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <nav aria-label="breadcrumb">
            <ol style="display: flex; flex-wrap: wrap; list-style: none; margin: 0; padding: 0; gap: 8px; color: #64748b;">
                <li><a href="<?php echo SITE_BASE_URL; ?>/" style="color: #0d3b2e; text-decoration: none;"><i class="fa-solid fa-house"></i> Home</a></li>
                <li>/</li>
                <li><a href="<?php echo SITE_BASE_URL; ?>/#service-areas" style="color: #0d3b2e; text-decoration: none;">Jharkhand</a></li>
                <li>/</li>
                <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-latehar" style="color: #0d3b2e; text-decoration: none;">Latehar</a></li>
                <li>/</li>
                <li style="color: #0d3b2e; font-weight: 600;">Garu (PTR)</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Main Content Area -->
<main class="city-page-main" style="padding: 50px 0; background-color: #fdfdfd; font-family: 'Inter', sans-serif; color: #334155; line-height: 1.8;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">

        <!-- Section 1: Overview & Strategic Importance -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
                <div style="flex: 1 1 550px; min-width: 320px;">
                    <div style="color: #0d3b2e; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-compass" style="color: #e67e22;"></i> Palamu Tiger Reserve Logistics
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0d3b2e; margin-bottom: 20px; line-height: 1.3;">
                        Professional Shifting Solutions in Garu & The Palamu Tiger Reserve Belt
                    </h2>
                    <p style="margin-bottom: 16px;">
                        Garu represents one of the most ecologically rich and geographically unique administrative blocks in Jharkhand. Positioned amidst dense sal canopies and undulating hills inside the protected perimeter of the Palamu Tiger Reserve (PTR) in Latehar district, Garu lies peacefully along the North Koel River. It serves as a vital bridge linking the legendary Betla National Park to the north with the scenic hill station of Netarhat and the Mahuadanr valley to the south.
                    </p>
                    <p style="margin-bottom: 16px;">
                        Because of its strategic administrative role in wildlife management and forest governance, Garu is home to forest range officers, wildlife biologists, police department personnel, teachers in government residential schools (KGBV), healthcare staff at rural clinics, bank managers, and eco-tourism hospitality operators. Official transfers across Latehar, Medininagar (Daltonganj), Ranchi, and beyond occur on a regular schedule.
                    </p>
                    <p style="margin-bottom: 16px;">
                        However, moving in Garu requires specialized operational capabilities. Forest ghats with sharp hairpin bends, unpaved jungle tracks, limited cellular network zones, and heavy monsoon rains demand a moving company with seasoned hill drivers, enclosed all-weather container trucks, and rugged 5-layer packaging materials.
                    </p>
                    <p style="margin-bottom: 16px;">
                        <strong>Shree Ashirwad Packers and Movers</strong> has spent years mastering the logistics of the Latehar-Palamu forest belt. We arrive with custom moisture-resistant packaging supplies, heavy-duty furniture blankets, and specialized vehicle tie-downs to ensure that furniture, electronics, and delicate glassware travel without a single scratch or water droplet.
                    </p>
                    <p>
                        From complete furniture dismantling and reassembly to GPS tracking and 100% genuine GST invoices compliant with government transfer allowance rules, we make your relocation in Garu totally effortless.
                    </p>
                </div>
                <div style="flex: 1 1 450px; min-width: 300px;">
                    <!-- Image 1: Responsive container with 3:4 aspect ratio -->
                    <div class="content-media-embed" style="margin: 0 auto; max-width: 420px;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Packaging Materials in Garu Latehar Palamu Tiger Reserve" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-box-open" style="color: #60a5fa; margin-right: 8px;"></i> Heavy-duty multi-layer bubble wrap and sturdy cartons in Garu.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Core Moving Services in Garu -->
        <section class="content-section" style="margin-bottom: 50px; background: #ffffff; padding: 40px; border-radius: 14px; border: 1px solid #edf2f7; box-shadow: 0 8px 25px rgba(0,0,0,0.04);">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 40px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0d3b2e; margin-bottom: 15px;">
                    Comprehensive Moving Services Tailored for Garu
                </h2>
                <p style="color: #64748b; font-size: 16px;">
                    Whether moving government quarters, forest department bungalows, or private residences, our specialized moving solutions ensure maximum safety and convenience.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(270px, 1fr)); gap: 25px;">
                <!-- Service 1 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #0d3b2e; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #e0e7ff; color: #3730a3; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-house-chimney"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #0d3b2e; margin-bottom: 12px;">Household Shifting</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Complete residential moving for 1BHK, 2BHK, 3BHK homes, and official quarters across Garu Bazar, Forest Range Colony, and Betla road with professional packing and room arrangement.
                    </p>
                </div>

                <!-- Service 2 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #e67e22; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #ffedd5; color: #c2410c; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-id-badge"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #0d3b2e; margin-bottom: 12px;">Forest & Officer Transfers</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Hassle-free transfers for forest rangers, police officials, bank managers, and state government officers with authentic GST bills, packing lists, and consignment notes for claims.
                    </p>
                </div>

                <!-- Service 3 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #00c853; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #dcfce7; color: #15803d; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-car-side"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #0d3b2e; margin-bottom: 12px;">Car & Bike Relocation</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Enclosed automobile carrier trailers and custom hydraulic motorcycle cages ensuring zero-scratch transport over forest ghats from Garu to all major Indian cities.
                    </p>
                </div>

                <!-- Service 4 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #0284c7; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #e0f2fe; color: #0369a1; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-campground"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #0d3b2e; margin-bottom: 12px;">Resort & Commercial Logistics</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Safe transportation of eco-tourism resort equipment, solar generators, safari camp furniture, and local commercial goods across the Latehar-Palamu belt.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 3: High-Grade Packaging Standards -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
                <div style="flex: 1 1 450px; min-width: 300px; order: 2;">
                    <div style="color: #0d3b2e; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-layer-group" style="color: #00c853;"></i> Forest-Grade Protective Standards
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0d3b2e; margin-bottom: 20px; line-height: 1.3;">
                        Engineered 5-Layer Defensive Packaging for Forest & Hill Transit
                    </h2>
                    <p style="margin-bottom: 16px;">
                        Traversing forest tracks, unpaved rural bypasses, and mountain ghats connecting Garu to Latehar and Medininagar involves vehicular swaying, gradient shifts, humidity, and damp foliage. Standard cardboard packaging easily absorbs moisture, leading to mold or box collapse under heavy weight.
                    </p>
                    <p style="margin-bottom: 16px;">
                        At Shree Ashirwad Packers and Movers, we apply our proven 5-layer protective packing protocol to every moving consignment:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 16px; margin: 0 0 25px;">
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #0d3b2e;">Layer 1 - Scratch-Proof Foam Wrap</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Direct surface application of virgin polyethylene foam film eliminates scratches and abrasions on polished wood, metallic panels, and gloss finishes.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #0d3b2e;">Layer 2 - Multi-Cellular Air Bubble Cushioning</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Thick 80 GSM air bubble wrap absorbs kinetic shocks on LED smart TVs, refrigerators, washing machines, and fine chinaware.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #0d3b2e;">Layer 3 - Heavy Corrugated Corner Protectors</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Rigid angle guards and corrugated caps secured to wardrobe corners, dining tables, and marble table edges.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #0d3b2e;">Layer 4 - Sturdy 5-Ply & 7-Ply Cartons</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Heavy-duty Kraft corrugated boxes pre-partitioned for delicate kitchenware, books, clothes, and family heirlooms.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #0d3b2e;">Layer 5 - Moisture & Dust-Proof Thermal Wrap</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Industrial shrink wrap film sealed completely over cartons and wrapped items, creating a 100% dust-proof and waterproof outer barrier.</p>
                        </div>
                    </div>
                    <p>
                        Our specialized carpenters handle disassembly and reassembly of modular wardrobes, double beds, and dining sets to ensure perfect alignment in your new residence.
                    </p>
                </div>
                <div style="flex: 1 1 450px; min-width: 300px; order: 1;">
                    <!-- Image 2: Responsive container with 3:4 aspect ratio -->
                    <div class="content-media-embed" style="margin: 0 auto; max-width: 420px;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to Door Delivery Truck in Garu Latehar" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-truck-fast" style="color: #60a5fa; margin-right: 8px;"></i> Dedicated container fleet delivering doorstep household shifting in Garu.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4: Transparent Cost & Distance Table -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 30px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0d3b2e; margin-bottom: 12px;">
                    Estimated Shifting Rates from Garu (PTR)
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    Clear, transparent rate matrix for local and intercity relocation from Garu. Zero unexpected surcharges.
                </p>
            </div>

            <div style="overflow-x: auto; background: #ffffff; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #e2e8f0; margin-bottom: 25px;">
                <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
                    <thead>
                        <tr style="background: #0d3b2e; color: #ffffff;">
                            <th style="padding: 16px 20px; border-bottom: 2px solid #cbd5e1;">Destination Route</th>
                            <th style="padding: 16px 20px; border-bottom: 2px solid #cbd5e1;">Distance (Approx.)</th>
                            <th style="padding: 16px 20px; border-bottom: 2px solid #cbd5e1;">1 BHK Shifting</th>
                            <th style="padding: 16px 20px; border-bottom: 2px solid #cbd5e1;">2 BHK Shifting</th>
                            <th style="padding: 16px 20px; border-bottom: 2px solid #cbd5e1;">3 BHK / Bungalow</th>
                            <th style="padding: 16px 20px; border-bottom: 2px solid #cbd5e1;">Vehicle (Car/Bike)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #ffffff;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #0d3b2e;">Garu Local / Betla / Barwadih</td>
                            <td style="padding: 14px 20px;">15 - 35 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹3,500 - ₹6,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹6,500 - ₹10,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹10,500 - ₹16,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹1,500 - ₹3,500</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #0d3b2e;">Garu to Medininagar (Daltonganj)</td>
                            <td style="padding: 14px 20px;">48 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹5,500 - ₹8,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹8,500 - ₹13,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹13,500 - ₹19,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹2,200 - ₹4,500</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #ffffff;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #0d3b2e;">Garu to Latehar Headquarter</td>
                            <td style="padding: 14px 20px;">60 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹6,000 - ₹9,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹9,000 - ₹14,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹14,500 - ₹20,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹2,500 - ₹5,000</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #0d3b2e;">Garu to Ranchi (State Capital)</td>
                            <td style="padding: 14px 20px;">165 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹9,500 - ₹15,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹15,000 - ₹23,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹23,000 - ₹32,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹3,500 - ₹7,500</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #ffffff;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #0d3b2e;">Garu to Gaya / Patna (Bihar)</td>
                            <td style="padding: 14px 20px;">220 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹12,000 - ₹17,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹17,000 - ₹26,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹26,000 - ₹36,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹4,500 - ₹9,000</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #0d3b2e;">Garu to Kolkata (WB)</td>
                            <td style="padding: 14px 20px;">480 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹17,000 - ₹24,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹24,000 - ₹35,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹35,000 - ₹48,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹6,000 - ₹12,000</td>
                        </tr>
                        <tr style="background: #ffffff;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #0d3b2e;">Garu to Delhi / NCR</td>
                            <td style="padding: 14px 20px;">1,080 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹25,000 - ₹35,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹35,000 - ₹49,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹49,000 - ₹68,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹9,000 - ₹17,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="font-size: 13px; color: #64748b; font-style: italic;">
                * Note: Pricing includes packaging materials, trained loading/unloading labor, and road freight. Applicable GST (18% for complete door-to-door shifting or 5% for transport only) and optional transit insurance (1.5% of declared goods value) are clearly itemized in the formal estimate.
            </p>
        </section>

        <!-- Section 5: Automobile Transport & Warehousing -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
                <div style="flex: 1 1 450px; min-width: 300px;">
                    <!-- Image 3: Responsive container with 3:4 aspect ratio -->
                    <div class="content-media-embed" style="margin: 0 auto; max-width: 420px;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car and Bike Relocation Carrier in Garu Latehar" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-car-side" style="color: #60a5fa; margin-right: 8px;"></i> Specialized hydraulic automobile carrier trucks serving Garu and Latehar.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="flex: 1 1 550px; min-width: 320px;">
                    <div style="color: #0d3b2e; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-car" style="color: #ff9100;"></i> Safe Vehicle Transportation
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0d3b2e; margin-bottom: 20px; line-height: 1.3;">
                        Automobile Carrier Logistics & Safe Storage Hubs
                    </h2>
                    <p style="margin-bottom: 16px;">
                        Driving personal cars or motorcycles across winding forest ghats and remote jungle corridors over hundreds of kilometers exposes vehicles to loose gravel damage, accidental hazards, and unnecessary mechanical wear. Shree Ashirwad Packers and Movers operates specialized hydraulic enclosed car carriers and two-wheeler transport cages connecting Garu directly to all major metropolitan centers.
                    </p>
                    <p style="margin-bottom: 16px;">
                        Each four-wheeler is thoroughly inspected with a joint pre-loading inspection sheet. Vehicles are secured with heavy-duty tyre lashings on hydraulic ramps, and covered with scratch-resistant blankets. Two-wheelers receive thick bubble wrap around headlights, fuel tanks, and mirrors, and are firmly anchored with wheel chocks.
                    </p>
                    <p style="margin-bottom: 16px;">
                        In addition, if your new residence or government quarter in Medininagar, Latehar, or Ranchi is delayed, our secure warehousing hubs provide clean, elevated pallet storage, 24/7 CCTV surveillance, and regular pest-control treatments at highly economical monthly rental rates.
                    </p>
                    <p>
                        Your goods remain completely safe, dry, and protected until you are ready for final doorstep delivery.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 6: Step-by-Step Moving Process Checklist -->
        <section class="content-section" style="margin-bottom: 50px; background: #ffffff; padding: 40px; border-radius: 14px; border: 1px solid #edf2f7; box-shadow: 0 8px 25px rgba(0,0,0,0.04);">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 30px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0d3b2e; margin-bottom: 12px;">
                    Our Step-by-Step Moving Process
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    A systematic, dependable 6-stage shifting workflow ensuring your relocation in Garu is completely organized and stress-free.
                </p>
            </div>

            <div style="overflow-x: auto; margin-bottom: 20px;">
                <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
                    <thead>
                        <tr style="background: #175440; color: #ffffff;">
                            <th style="padding: 14px 18px; width: 12%;">Stage</th>
                            <th style="padding: 14px 18px; width: 22%;">Action Item</th>
                            <th style="padding: 14px 18px; width: 38%;">Execution Protocol & Details</th>
                            <th style="padding: 14px 18px; width: 28%;">Client Benefit & Assurance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 01</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #0d3b2e;">Doorstep Survey & Estimate</td>
                            <td style="padding: 14px 18px; color: #475569;">Free physical visit in Garu/Betla or rapid digital video survey to assess furniture dimensions, fragile goods, and access conditions.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Accurate fixed-rate quote with zero hidden surcharges on moving day.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 02</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #0d3b2e;">5-Layer Defensive Packing</td>
                            <td style="padding: 14px 18px; color: #475569;">Careful packing using virgin bubble wrap, corrugated sheets, foam rolls, and heavy 5-ply cartons. Dismantling of beds and wardrobes.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Maximum shock absorption and scratch-free protection for fragile items.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 03</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #0d3b2e;">Safe Loading & Securing</td>
                            <td style="padding: 14px 18px; color: #475569;">Systematic loading into specialized closed container trucks using heavy-duty belts, cargo nets, and non-slip floor padding.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Prevents cargo shift and vibration damage on forest ghat turns.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 04</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #0d3b2e;">Live GPS Tracked Transit</td>
                            <td style="padding: 14px 18px; color: #475569;">Smooth navigation over forest ghats and connecting state highways with continuous real-time satellite GPS tracking.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Real-time shipment updates and guaranteed punctual arrival schedules.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 05</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #0d3b2e;">Unloading & Room Placement</td>
                            <td style="padding: 14px 18px; color: #475569;">Unloading cartons and placing them directly into corresponding bedrooms, living rooms, and kitchens as designated by the customer.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Zero manual labor or heavy lifting stress for you and your family.</td>
                        </tr>
                        <tr style="background: #f8fafc;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 06</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #0d3b2e;">Reassembly & Verification</td>
                            <td style="padding: 14px 18px; color: #475569;">Expert carpenters reassemble beds and furniture; joint physical cross-check of every numbered item on the inventory list.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">100% complete satisfaction verified prior to final sign-off.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Section 7: Warehousing & Commercial Storage Facilities -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
                <div style="flex: 1 1 550px; min-width: 320px;">
                    <div style="color: #0d3b2e; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-warehouse" style="color: #0284c7;"></i> Secure Warehouse Facilities
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0d3b2e; margin-bottom: 20px; line-height: 1.3;">
                        Secure Warehousing & Storage Facilities for Garu
                    </h2>
                    <p style="margin-bottom: 16px;">
                        Finding safe, clean, and weatherproof storage during government quarter transfers, delayed possession, or outstation job postings can be difficult in remote forest divisions. Shree Ashirwad Packers and Movers provides modern warehousing facilities situated conveniently along the Latehar-Medininagar highway corridor.
                    </p>
                    <p style="margin-bottom: 16px;">
                        Our secure warehouses feature:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 14px; margin: 0 0 20px;">
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-video" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #0d3b2e;">24/7 Security & CCTV</strong>
                            </div>
                            <p style="margin: 0; font-size: 13px; color: #475569; line-height: 1.5;">24-hour on-duty physical security personnel coupled with continuous closed-circuit television (CCTV) cameras.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-pallet" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #0d3b2e;">Moisture-Proof Pallets</strong>
                            </div>
                            <p style="margin: 0; font-size: 13px; color: #475569; line-height: 1.5;">Heavy-duty wooden and plastic pallets elevating goods off concrete floors to prevent dampness and water seepage.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-bug-slash" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #0d3b2e;">Pest & Termite Control</strong>
                            </div>
                            <p style="margin: 0; font-size: 13px; color: #475569; line-height: 1.5;">Scheduled pest control, rodent treatments, and termite repellent spraying to safeguard wooden items and archives.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-calendar-check" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #0d3b2e;">Flexible Lease Terms</strong>
                            </div>
                            <p style="margin: 0; font-size: 13px; color: #475569; line-height: 1.5;">Short-term and extended multi-month storage agreements with itemized warehouse receipts for quick retrieval.</p>
                        </div>
                    </div>
                    <p>
                        Keep your precious household possessions and commercial merchandise totally protected until your new property is ready for occupation.
                    </p>
                </div>
                <div style="flex: 1 1 450px; min-width: 300px;">
                    <!-- Image 4: Responsive container with 3:4 aspect ratio -->
                    <div class="content-media-embed" style="margin: 0 auto; max-width: 420px;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Commercial Goods and Household Storage Warehouse Garu" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-warehouse" style="color: #60a5fa; margin-right: 8px;"></i> Pest-controlled, moisture-free storage and warehousing serving Garu.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 8: Localities and Coverage in Garu Block -->
        <section class="content-section" style="margin-bottom: 50px; background: #f8fafc; padding: 40px; border-radius: 14px; border: 1px solid #e2e8f0;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 30px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0d3b2e; margin-bottom: 12px;">
                    Localities & Vicinities Covered Across Garu Block
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    Our local pickup vehicles and packing crews provide swift doorstep service across all villages, government quarters, and resort areas in Garu:
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px;">
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0d3b2e; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0d3b2e; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Garu Main Bazar</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Central market & administrative hub</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0d3b2e; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0d3b2e; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Forest Range Colony</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">PTR officer residences & checkposts</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0d3b2e; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0d3b2e; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Betla Border Sector</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">National park entry road & resorts</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0d3b2e; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0d3b2e; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> North Koel River Belt</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Riverside hamlets & eco-camps</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0d3b2e; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0d3b2e; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Maromar Forest Corridor</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Dense jungle guest houses & tribal hamlets</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0d3b2e; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0d3b2e; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Mahuadanr-Netarhat Link</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Southbound mountain pass towards Queen of Chotanagpur</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0d3b2e; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0d3b2e; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Barwadih Road Junction</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Railway station feeder connection</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0d3b2e; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0d3b2e; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Daltonganj State Highway</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Northbound route towards Medininagar</div>
                </div>
            </div>
        </section>

        <!-- Section 9: Why Choose Shree Ashirwad Packers and Movers -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 35px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0d3b2e; margin-bottom: 12px;">
                    Why Clients in Garu Trust Shree Ashirwad
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    We bring unyielding integrity, deep hill logistics proficiency, and caring customer support to every relocation.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 25px;">
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #00c853; flex-shrink: 0;"><i class="fa-solid fa-shield-halved"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #0d3b2e; margin-bottom: 6px;">Zero Hidden Charges Guarantee</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">Our written moving quotation includes all packaging supplies, labour, highway tolls, and transport freight. You never pay unexpected surcharges on delivery.</p>
                    </div>
                </div>
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #0284c7; flex-shrink: 0;"><i class="fa-solid fa-file-invoice"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #0d3b2e; margin-bottom: 6px;">100% Valid Reimbursement Bills</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">We supply full GST invoices, LR consignment copies, insurance papers, and itemized inventory lists for effortless employer reimbursement.</p>
                    </div>
                </div>
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #e67e22; flex-shrink: 0;"><i class="fa-solid fa-truck-ramp-box"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #0d3b2e; margin-bottom: 6px;">In-House Experienced Crew</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">Our staff are full-time trained professionals, not daily-wage ad-hoc labourers. They handle your delicate glassware, temple idols, and furniture with supreme respect.</p>
                    </div>
                </div>
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #ec4899; flex-shrink: 0;"><i class="fa-solid fa-satellite"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #0d3b2e; margin-bottom: 6px;">Active GPS Tracking & 24/7 Desk</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">Track your truck along highways and ghat routes in real-time. Our dedicated move coordinator is accessible around the clock for milestone updates.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Local Google Map Embed -->
        <div style="margin: 35px 0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58600.123456789!2d84.1800!3d23.7500!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398c25123456789%3A0x7d6a5d4e3c2b1a0!2sGaru%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Map Location of Garu Palamu Tiger Reserve Latehar"></iframe>
        </div>

        <!-- Section 10: Frequently Asked Questions (Accordion) -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 35px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0d3b2e; margin-bottom: 12px;">
                    Frequently Asked Questions - Garu Moving
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    Find instant answers to common questions about moving in Garu, rates, vehicle shipping, and forest terrain protocols:
                </p>
            </div>

            <div class="faq-container" style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0d3b2e; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        What relocation services does Shree Ashirwad Packers offer in Garu?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        We provide residential home shifting, forest department officer transfers, police and administrative transfers, eco-resort logistics, enclosed car carrier transport, two-wheeler shipping, secure warehousing, and comprehensive transit insurance across Garu, Betla, and Latehar district.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0d3b2e; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        How much does home relocation cost in Garu and Palamu Tiger Reserve area?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Local moves in Garu and towards Betla or Medininagar start from ₹3,500 for 1BHK quarters. Relocations to Latehar, Ranchi, Patna, or Kolkata range between ₹6,000 and ₹26,000 depending on consignment volume, hill ghat navigation, and packing tier.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0d3b2e; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        Do your drivers safely navigate forest roads and hill ghats around Garu and Netarhat?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Yes, our experienced drivers are specially trained for forest ghats, mountain hairpin bends, and rural roads of Palamu Tiger Reserve and Netarhat, ensuring safe transit with zero cargo movement.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0d3b2e; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        How do you protect household furniture from moisture and road friction in forest terrains?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        We apply 5-layer protective packing utilizing virgin LDPE foam wrap, heavy 80 GSM air bubble cushioning, corrugated corner angle guards, 5-ply cartons, and waterproof shrink film that completely seals out moisture and humidity.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0d3b2e; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        Can you ship personal cars and motorbikes from Garu to other Indian states?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Yes, we operate enclosed automobile carrier trailers and customized hydraulic motorcycle crates with wheel clamps, bubble cushioning, GPS tracking, and complete transit insurance to deliver vehicles safely nationwide.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0d3b2e; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        Are your invoices valid for government employee transfer claims?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Yes, we provide 100% genuine GST invoices, official consignment notes (LR copy), itemized packing inventory lists, and transit insurance documentation acceptable across state and central government departments.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0d3b2e; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        How far in advance should I book my moving date in Garu?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        We recommend booking 2 to 4 days in advance for local moves and 4 to 7 days ahead for intercity or long-distance moves. However, we also cater to emergency or last-minute relocations subject to vehicle and crew availability.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0d3b2e; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        How can I book Packers and Movers in Garu?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        You can call our 24/7 Garu support desk directly at +91 8409531615 or +91 9308888746, or submit our online quick quote form on this page to schedule an immediate free doorstep survey.
                    </p>
                </details>
            </div>
        </section>

        <!-- Section: Google My Business Authentic Reviews -->
<?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

<!-- Section 11: Call to Action Banner -->
        <section class="cta-banner" style="background: linear-gradient(135deg, #0d3b2e 0%, #175440 100%); color: #ffffff; padding: 45px 35px; border-radius: 16px; text-align: center; box-shadow: 0 15px 35px rgba(13,59,46,0.25);">
            <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.8vw, 2.5rem); font-weight: 700; margin-bottom: 15px; color: #ffffff;">
                Planning to Relocate in Garu or Latehar?
            </h2>
            <p style="font-size: 16px; color: #cbd5e1; max-width: 720px; margin: 0 auto 28px; line-height: 1.7;">
                Reach out to Shree Ashirwad Packers and Movers today for a transparent, budget-friendly estimate, professional packaging, and stress-free transit across Jharkhand and beyond.
            </p>
            <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px;">
                <a href="tel:+918409531615" style="background: #ffc107; color: #0f172a; padding: 15px 32px; border-radius: 8px; font-weight: 700; font-size: 16px; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; transition: all 0.3s ease;">
                    <i class="fa-solid fa-phone-volume"></i> Call 8409531615
                </a>
                <a href="tel:+919308888746" style="background: rgba(255, 255, 255, 0.12); color: #ffffff; border: 1px solid rgba(255,255,255,0.4); padding: 15px 28px; border-radius: 8px; font-weight: 600; font-size: 16px; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; transition: all 0.3s ease;">
                    <i class="fa-solid fa-headset"></i> Alt Helpline: 9308888746
                </a>
            </div>
        </section>

    </div>
</main>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
