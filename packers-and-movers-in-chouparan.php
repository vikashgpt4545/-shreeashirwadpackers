<?php
/**
 * Packers and Movers in Chouparan - Shree Ashirwad Packers and Movers
 * Website: https://www.shreeashirwadpackers.com
 * Contact: +91 8409531615 / +91 9308888746
 * Office: Serving Chouparan, GT Road, Barhi & Hazaribagh District, Jharkhand
 */

require_once __DIR__ . '/includes/config.php';

// Page-specific variables
$page_title = "Packers and Movers in Chouparan - 8409531615 | Shree Ashirwad Packers";
$page_description = "Top packers and movers in Chouparan, Hazaribagh on GT Road NH-19. Reliable household shifting, car and bike carrier transport, office moving, transit insurance. Call 8409531615.";
$page_keywords = "packers and movers in chouparan, movers and packers chouparan hazaribagh, gt road packers and movers, household shifting chouparan, car transport chouparan, bike courier chouparan, shree ashirwad packers chouparan";
$canonical_url = SITE_BASE_URL . "/packers-and-movers-in-chouparan";
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
      "name": "Shree Ashirwad Packers and Movers - Chouparan",
      "image": "<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg",
      "@id": "<?php echo $canonical_url; ?>#movingcompany",
      "url": "<?php echo $canonical_url; ?>",
      "telephone": "+918409531615",
      "priceRange": "INR 3500 - 55000",
        "keywords": "packers and movers in chouparan, movers and packers chouparan hazaribagh, gt road packers and movers, household shifting chouparan, car transport chouparan, bike courier chouparan, shree ashirwad packers chouparan",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Grand Trunk Road, NH-19, Near Chouparan Bazar",
        "addressLocality": "Chouparan",
        "addressRegion": "Jharkhand",
        "postalCode": "825406",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 24.3804,
        "longitude": 85.2443
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
        "name": "Hazaribagh Movers",
        "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hazaribagh"
      },{
        "@type": "ListItem",
        "position": 4,
        "name": "Packers and Movers in Chouparan",
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
          "name": "What moving services does Shree Ashirwad Packers provide in Chouparan?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We provide comprehensive residential shifting, government and banking transfer moves, highway corridor transport along GT Road NH-19, car and bike carrier logistics, office relocation, secure warehousing, and complete transit insurance."
          }
        },
        {
          "@type": "Question",
          "name": "How much does residential packing and moving cost in Chouparan?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Local moves in Chouparan and towards Barhi or Itkhori start from ₹3,500 for 1BHK homes. Intercity moves to Ranchi, Hazaribagh, Gaya, or Patna range between ₹6,000 and ₹26,000 depending on consignment size, distance, and packing material."
          }
        },
        {
          "@type": "Question",
          "name": "Do you transport vehicles across Danuwa Ghati and the Jharkhand-Bihar border?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, our experienced drivers regularly navigate the Danuwa Ghati mountain pass and border checkposts along NH-19 with enclosed car carrier trailers and custom bike stands, ensuring complete safety with zero transit damage."
          }
        },
        {
          "@type": "Question",
          "name": "What packaging materials do you use to ensure zero transit breakage?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We apply 5-layer protective packing utilizing virgin bubble wrap, corrugated sheets, edge protectors, heavy-duty carton boxes, and waterproof stretch wrap film to safeguard goods against vibration, dust, and rainfall."
          }
        },
        {
          "@type": "Question",
          "name": "Are your relocation bills valid for corporate and government transfer reimbursement?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we provide 100% authentic GST invoices, consignment notes (LR copy), itemized packing inventory lists, and transit insurance policies compliant with government and PSU transfer rules."
          }
        },
        {
          "@type": "Question",
          "name": "How is transit insurance calculated for moving from Chouparan?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Transit insurance is typically calculated at 1.5% of the total declared value of your household goods or vehicle, providing full financial protection against rare incidents of road accidents or catastrophic loss."
          }
        },
        {
          "@type": "Question",
          "name": "Can I store my household furniture temporarily in your warehouse?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we offer clean, moisture-controlled, 24/7 CCTV-monitored warehousing facilities with short-term and long-term storage agreements at affordable monthly rates."
          }
        },
        {
          "@type": "Question",
          "name": "How can I book Packers and Movers in Chouparan?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can call our 24/7 Chouparan customer support desk at +91 8409531615 or +91 9308888746, or fill out our online quote form on this page for a quick estimate and free survey."
          }
        }
      ]
    }
    </script>
</head>
<body class="page-template">
<?php include_once __DIR__ . '/includes/header.php'; ?>

<!-- Hero Section -->
<section class="city-hero-section" style="background: linear-gradient(135deg, #0b1f33 0%, #1e3d59 50%, #3d5a80 100%); color: #ffffff; padding: 60px 0 50px; position: relative; overflow: hidden;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <div class="hero-content-wrapper" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 40px;">
            <div class="hero-text-block" style="flex: 1 1 600px; min-width: 320px;">
                <div class="hero-badge" style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255, 193, 7, 0.2); border: 1px solid #ffc107; padding: 6px 14px; border-radius: 30px; font-size: 14px; font-weight: 600; color: #ffc107; margin-bottom: 20px;">
                    <i class="fa-solid fa-truck-moving"></i> Premier Relocation Partner on Grand Trunk Road NH-19
                </div>
                <h1 style="font-family: 'Outfit', sans-serif; font-size: clamp(2.2rem, 4vw, 3.2rem); font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
                    Packers and Movers in Chouparan - <span style="color: #ffc107;">8409531615</span>
                </h1>
                <p style="font-family: 'Inter', sans-serif; font-size: 17px; line-height: 1.7; color: #e0e6ed; margin-bottom: 28px;">
                    Relocating home, office, or commercial goods in Chouparan? <strong>Shree Ashirwad Packers and Movers</strong> provides trusted, reliable, and damage-free moving services across the northern gateway of Jharkhand. Situated right on the legendary Grand Trunk Road (National Highway 19, formerly NH-2), bordering Barhi, Itkhori, and Bihar's Gaya district across the scenic Danuwa Ghati mountain pass, Chouparan is a bustling transportation nerve center. Whether you are transferring for a government department post, relocating an educational establishment, or shifting your entire home interstate to Patna, Ranchi, Kolkata, or Delhi, our professional moving crew handles every article with surgical care and comprehensive transit insurance.
                </p>
                <div class="hero-stats-row" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(130px, 1fr)); gap: 15px; margin-bottom: 30px;">
                    <div style="background: rgba(255, 255, 255, 0.08); padding: 14px; border-radius: 10px; border-left: 3px solid #ffc107;">
                        <div style="font-size: 24px; font-weight: 700; color: #ffc107;">12+</div>
                        <div style="font-size: 13px; color: #cfd8dc;">Years on GT Road</div>
                    </div>
                    <div style="background: rgba(255, 255, 255, 0.08); padding: 14px; border-radius: 10px; border-left: 3px solid #00c853;">
                        <div style="font-size: 24px; font-weight: 700; color: #00c853;">100%</div>
                        <div style="font-size: 13px; color: #cfd8dc;">Damage-Free Moves</div>
                    </div>
                    <div style="background: rgba(255, 255, 255, 0.08); padding: 14px; border-radius: 10px; border-left: 3px solid #00b0ff;">
                        <div style="font-size: 24px; font-weight: 700; color: #00b0ff;">5,200+</div>
                        <div style="font-size: 13px; color: #cfd8dc;">Relocations Executed</div>
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
                    <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20relocation%20services%20in%20Chouparan" target="_blank" class="btn-secondary" style="background: #25d366; color: #ffffff; padding: 14px 24px; border-radius: 8px; font-weight: 700; font-size: 16px; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; transition: all 0.3s ease;">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp Quote
                    </a>
                </div>
            </div>

            <!-- Quick Booking Form Container -->
            <div class="hero-form-container" style="flex: 0 1 420px; min-width: 320px; background: #ffffff; padding: 30px; border-radius: 14px; box-shadow: 0 20px 40px rgba(0,0,0,0.25); color: #2c3e50;">
                <h3 style="font-family: 'Outfit', sans-serif; font-size: 22px; font-weight: 700; margin-bottom: 8px; color: #0b1f33; text-align: center;">
                    Get Free Quote in Chouparan
                </h3>
                <p style="font-size: 13px; color: #7f8c8d; text-align: center; margin-bottom: 20px;">Swift response with transparent pricing</p>
                <form action="<?php echo SITE_BASE_URL; ?>/contact-form-handler.php" method="POST" class="hero-quote-form">
                    <input type="hidden" name="service_city" value="Chouparan">
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
                            <input type="text" name="pickup_location" placeholder="e.g. Chouparan / GT Road" style="width: 100%; padding: 10px 12px; border: 1px solid #ced4da; border-radius: 6px; font-size: 13px; outline: none;">
                        </div>
                        <div>
                            <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 5px; color: #34495e;">Drop Destination</label>
                            <input type="text" name="drop_location" placeholder="e.g. Hazaribagh / Ranchi / Gaya" style="width: 100%; padding: 10px 12px; border: 1px solid #ced4da; border-radius: 6px; font-size: 13px; outline: none;">
                        </div>
                    </div>
                    <div style="margin-bottom: 16px;">
                        <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 5px; color: #34495e;">Shifting Type</label>
                        <select name="shifting_type" style="width: 100%; padding: 10px 12px; border: 1px solid #ced4da; border-radius: 6px; font-size: 13px; background-color: #fff; outline: none;">
                            <option value="Household Shifting">Household Shifting (1/2/3+ BHK)</option>
                            <option value="Government & Police Transfer">Government & Officer Transfer</option>
                            <option value="Car or Two-Wheeler Courier">Car / Bike Transport</option>
                            <option value="Commercial / Shop Relocation">Commercial & Shop Relocation</option>
                            <option value="Storage and Warehousing">Storage & Warehousing</option>
                        </select>
                    </div>
                    <button type="submit" style="width: 100%; background: #e67e22; color: #ffffff; padding: 13px; border: none; border-radius: 7px; font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.3s ease; box-shadow: 0 4px 12px rgba(230,126,34,0.35);">
                        <i class="fa-solid fa-paper-plane"></i> Request Instant Moving Estimate
                    </button>
                    <p style="font-size: 11px; color: #95a5a6; text-align: center; margin-top: 10px; margin-bottom: 0;">
                        <i class="fa-solid fa-shield-check"></i> Strictly Private & Confidential. No Spam Calls.
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
                <li><a href="<?php echo SITE_BASE_URL; ?>/" style="color: #0b1f33; text-decoration: none;"><i class="fa-solid fa-house"></i> Home</a></li>
                <li>/</li>
                <li><a href="<?php echo SITE_BASE_URL; ?>/#service-areas" style="color: #0b1f33; text-decoration: none;">Jharkhand</a></li>
                <li>/</li>
                <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hazaribagh" style="color: #0b1f33; text-decoration: none;">Hazaribagh</a></li>
                <li>/</li>
                <li style="color: #0b1f33; font-weight: 600;">Chouparan</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Main Content Area -->
<main class="city-page-main" style="padding: 50px 0; background-color: #fdfdfd; font-family: 'Inter', sans-serif; color: #334155; line-height: 1.8;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">

        <!-- Section 1: Strategic Position & GT Road Logistics -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
                <div style="flex: 1 1 550px; min-width: 320px;">
                    <div style="color: #0b1f33; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-map-pin" style="color: #e67e22;"></i> Gateway of Northern Jharkhand
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0b1f33; margin-bottom: 20px; line-height: 1.3;">
                        Premier Moving & Logistics Network in Chouparan along NH-19 (GT Road)
                    </h2>
                    <p style="margin-bottom: 16px;">
                        Chouparan holds a uniquely powerful position on India's national transportation map. Situated on the Golden Quadrilateral corridor of National Highway 19 (the historic Grand Trunk Road), Chouparan serves as the critical transit and border trade gateway connecting the northern hills of Jharkhand with the fertile plains of Bihar. Bordering Barhi to the east, Itkhori and Chatra to the west, and Gaya district (Bodh Gaya, Mohanpur, Dobhi) to the north across the famed Danuwa Ghati mountain pass, Chouparan witnesses round-the-clock commercial freight, interstate passenger movement, and regular residential relocations.
                    </p>
                    <p style="margin-bottom: 16px;">
                        Whether you are a government official being posted to the sub-divisional offices, an engineer working on highway expansion and infrastructure developments, a doctor or healthcare worker at local primary health clinics, or an agricultural and hardware merchant expanding operations, moving here demands high standards of punctuality and roadworthiness. <strong>Shree Ashirwad Packers and Movers</strong> brings over a decade of hands-on expertise navigating the hilly turns of Danuwa Ghati, rural-suburban feeder roads, and busy highway corridors without exposing your household belongings to breakage, transit friction, or road dust.
                    </p>
                    <p>
                        From complete furniture disassembly and multi-layer bubble wrap protection to GPS-monitored enclosed container trucking, we guarantee a relocation experience that is totally seamless, transparent, and completely free of anxiety.
                    </p>
                </div>
                <div style="flex: 1 1 450px; min-width: 300px;">
                    <!-- Image 1: Responsive container with 3:4 aspect ratio -->
                    <div class="content-media-embed" style="margin: 0 auto; max-width: 420px;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Packaging Materials and Bubble Wrap in Chouparan Hazaribagh" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-box-open" style="color: #60a5fa; margin-right: 8px;"></i> Heavy-duty corrugated boxes and bubble cushioning in Chouparan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Core Moving Services in Chouparan -->
        <section class="content-section" style="margin-bottom: 50px; background: #ffffff; padding: 40px; border-radius: 14px; border: 1px solid #edf2f7; box-shadow: 0 8px 25px rgba(0,0,0,0.04);">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 40px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0b1f33; margin-bottom: 15px;">
                    End-to-End Relocation Solutions in Chouparan
                </h2>
                <p style="color: #64748b; font-size: 16px;">
                    Tailored shifting packages designed to address the specific needs of families, commercial establishments, and public sector officers in Chouparan and surrounding blocks.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(270px, 1fr)); gap: 25px;">
                <!-- Service 1 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #0b1f33; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #e0e7ff; color: #3730a3; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-house-chimney"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #0b1f33; margin-bottom: 12px;">Household Shifting</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Complete home relocation for 1BHK, 2BHK, 3BHK flats and independent homes across Chouparan Bazar, Tajpur, Danuwa, and Barasingha with comprehensive packing and unpacking.
                    </p>
                </div>

                <!-- Service 2 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #e67e22; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #ffedd5; color: #c2410c; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #0b1f33; margin-bottom: 12px;">Officer & Govt Transfers</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Seamless relocation for police officers, block development officials, bank managers, and teachers with official GST invoices, consignment receipts, and paperwork for claims.
                    </p>
                </div>

                <!-- Service 3 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #00c853; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #dcfce7; color: #15803d; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-truck-pickup"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #0b1f33; margin-bottom: 12px;">Car & Two-Wheeler Transport</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Hydraulic ramp enclosed car carriers and specialized bike packing crates ensuring zero-scratch transport from Chouparan across Bihar, Bengal, Uttar Pradesh, and nationwide.
                    </p>
                </div>

                <!-- Service 4 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #0284c7; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #e0f2fe; color: #0369a1; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-store"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #0b1f33; margin-bottom: 12px;">Shop & Highway Logistics</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Commercial goods transit, retail store moves, electronic showroom relocation, and spare parts warehousing along the NH-19 corridor with rapid turnaround times.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 3: High-Grade Packaging for Highway Transit -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
                <div style="flex: 1 1 450px; min-width: 300px; order: 2;">
                    <div style="color: #0b1f33; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-layer-group" style="color: #00c853;"></i> Advanced Packaging Standards
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0b1f33; margin-bottom: 20px; line-height: 1.3;">
                        Engineered 5-Layer Defensive Packing for Highway Durability
                    </h2>
                    <p style="margin-bottom: 16px;">
                        Transit along the Grand Trunk Road and across the Danuwa Ghati mountain curves involves heavy high-speed vehicular traffic, vibrations, thermal fluctuations, and roadside dust. Household goods transported without scientific multi-tier packaging can easily suffer scratched paint, cracked glass, or dented wooden panels.
                    </p>
                    <p style="margin-bottom: 16px;">
                        At Shree Ashirwad Packers and Movers, we apply our proven 5-layer protective packing protocol to every moving consignment:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 16px; margin: 0 0 25px;">
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #0b1f33;">Layer 1 - Non-Abrasive Foam Wrap</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Direct surface wrapping with virgin LDPE foam film prevents abrasion and static buildup on polished furniture, painted electronics, and wooden tabletops.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #0b1f33;">Layer 2 - Heavy Air Bubble Cushioning</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Thick 80 GSM air bubble wrap absorbs kinetic shocks and road jolts on LED smart TVs, sound systems, glassware, chinaware, and refrigerator panels.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #0b1f33;">Layer 3 - Corrugated Corner Reinforcement</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Heavy corrugated sheets and rigid L-shaped angle guards protect vulnerable furniture corners, wardrobe mirrors, and marble surfaces.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #0b1f33;">Layer 4 - Heavy-Duty 5-Ply Cartons</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Pre-sorted kitchen utensils, clothing, books, and dry goods are boxed in crush-resistant Kraft corrugated cartons with custom compartmental dividers.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #0b1f33;">Layer 5 - Weather & Moisture Shield</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Industrial shrink wrap film seals every carton box and wrapped item, rendering your cargo completely impervious to monsoon moisture and highway dust.</p>
                        </div>
                    </div>
                    <p>
                        Our experienced crew labels each container box with room-specific color codes to ensure swift, organized unpacking at your new residence.
                    </p>
                </div>
                <div style="flex: 1 1 450px; min-width: 300px; order: 1;">
                    <!-- Image 2: Responsive container with 3:4 aspect ratio -->
                    <div class="content-media-embed" style="margin: 0 auto; max-width: 420px;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to Door Delivery Truck in Chouparan Hazaribagh" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-truck-fast" style="color: #60a5fa; margin-right: 8px;"></i> Dedicated container fleet delivering doorstep household shifting in Chouparan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4: Transparent Cost & Distance Table -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 30px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0b1f33; margin-bottom: 12px;">
                    Estimated Shifting Rates from Chouparan
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    Transparent and realistic rate matrix for local and intercity moving from Chouparan. Zero unexpected surcharges.
                </p>
            </div>

            <div style="overflow-x: auto; background: #ffffff; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #e2e8f0; margin-bottom: 25px;">
                <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
                    <thead>
                        <tr style="background: #0b1f33; color: #ffffff;">
                            <th style="padding: 16px 20px; border-bottom: 2px solid #cbd5e1;">Destination Route</th>
                            <th style="padding: 16px 20px; border-bottom: 2px solid #cbd5e1;">Distance (Approx.)</th>
                            <th style="padding: 16px 20px; border-bottom: 2px solid #cbd5e1;">1 BHK Shifting</th>
                            <th style="padding: 16px 20px; border-bottom: 2px solid #cbd5e1;">2 BHK Shifting</th>
                            <th style="padding: 16px 20px; border-bottom: 2px solid #cbd5e1;">3 BHK / Bungalow</th>
                            <th style="padding: 16px 20px; border-bottom: 2px solid #cbd5e1;">Car / Bike Transport</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #ffffff;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #0b1f33;">Chouparan Local / Barhi / Itkhori</td>
                            <td style="padding: 14px 20px;">15 - 30 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹3,500 - ₹6,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹6,500 - ₹10,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹10,500 - ₹16,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹1,500 - ₹3,500</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #0b1f33;">Chouparan to Hazaribagh Town</td>
                            <td style="padding: 14px 20px;">52 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹5,500 - ₹8,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹8,500 - ₹13,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹13,500 - ₹19,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹2,200 - ₹4,500</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #ffffff;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #0b1f33;">Chouparan to Gaya / Bodh Gaya (Bihar)</td>
                            <td style="padding: 14px 20px;">65 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹6,000 - ₹9,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹9,500 - ₹15,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹15,000 - ₹21,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹2,500 - ₹5,000</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #0b1f33;">Chouparan to Ranchi (State Capital)</td>
                            <td style="padding: 14px 20px;">145 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹9,000 - ₹14,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹14,000 - ₹22,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹22,000 - ₹30,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹3,500 - ₹7,000</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #ffffff;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #0b1f33;">Chouparan to Dhanbad / Bokaro</td>
                            <td style="padding: 14px 20px;">130 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹8,500 - ₹13,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹13,000 - ₹20,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹20,000 - ₹28,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹3,000 - ₹6,500</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #0b1f33;">Chouparan to Patna (Bihar)</td>
                            <td style="padding: 14px 20px;">180 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹11,000 - ₹16,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹16,000 - ₹25,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹25,000 - ₹35,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹4,000 - ₹8,500</td>
                        </tr>
                        <tr style="background: #ffffff;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #0b1f33;">Chouparan to Delhi / NCR</td>
                            <td style="padding: 14px 20px;">1,040 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹24,000 - ₹34,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹34,000 - ₹48,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹48,000 - ₹65,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹8,500 - ₹16,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="font-size: 13px; color: #64748b; font-style: italic;">
                * Note: Pricing covers dedicated labor, packaging materials, and freight. Optional transit insurance (1.5% of declared goods value) and standard GST (18% for end-to-end relocation or 5% for transport only) are added transparently to the formal estimate.
            </p>
        </section>

        <!-- Section 5: Specialized Vehicle Transport & Warehousing -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
                <div style="flex: 1 1 450px; min-width: 300px;">
                    <!-- Image 3: Responsive container with 3:4 aspect ratio -->
                    <div class="content-media-embed" style="margin: 0 auto; max-width: 420px;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car and Bike Relocation Carrier in Chouparan GT Road" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-car-side" style="color: #60a5fa; margin-right: 8px;"></i> Enclosed car carrier trucks and hydraulic bike cradles for damage-free vehicle transport.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="flex: 1 1 550px; min-width: 320px;">
                    <div style="color: #0b1f33; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-car-side" style="color: #ff9100;"></i> Automobile Logistics & Storage
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0b1f33; margin-bottom: 20px; line-height: 1.3;">
                        Automobile Carrier Transport & Secure Warehousing in Chouparan
                    </h2>
                    <p style="margin-bottom: 16px;">
                        Driving your personal car or motorbike across long interstate highways can be exhausting, exposes vehicles to accidental hazards, and adds unnecessary mileage and wear. Shree Ashirwad Packers and Movers operates dedicated enclosed multi-car carriers and specialized two-wheeler shipping containers connecting Chouparan directly to key Indian metropolitan centers.
                    </p>
                    <p style="margin-bottom: 16px;">
                        Each automobile is inspected thoroughly during pre-loading condition audits, secured with heavy-duty tyre lashing belts on hydraulic ramps, and covered with scratch-proof blankets. Two-wheelers receive multi-layer bubble wrap on headlights, fairings, and mirrors, with fuel draining and battery disconnection performed to guarantee safe transit over the Danuwa pass.
                    </p>
                    <p>
                        In addition, we maintain clean, secure, and CCTV-surveilled transit warehousing facilities along the GT Road corridor. Whether you require a temporary storage bay for a few days while finalizing your new home lease, or need long-term inventory warehousing for business products, our facilities offer elevated pallets, complete fire protection, and pest-free environments.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 6: Step-by-Step Moving Process Checklist -->
        <section class="content-section" style="margin-bottom: 50px; background: #ffffff; padding: 40px; border-radius: 14px; border: 1px solid #edf2f7; box-shadow: 0 8px 25px rgba(0,0,0,0.04);">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 30px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0b1f33; margin-bottom: 12px;">
                    Our Step-by-Step Moving Process
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    A systematic and dependable 6-stage workflow ensuring your shifting experience in Chouparan is completely organized and stress-free.
                </p>
            </div>

            <div style="overflow-x: auto; margin-bottom: 20px;">
                <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
                    <thead>
                        <tr style="background: #1e3d59; color: #ffffff;">
                            <th style="padding: 14px 18px; width: 12%;">Stage</th>
                            <th style="padding: 14px 18px; width: 22%;">Action Item</th>
                            <th style="padding: 14px 18px; width: 38%;">Execution Protocol & Details</th>
                            <th style="padding: 14px 18px; width: 28%;">Client Benefit & Assurance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 01</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #0b1f33;">Pre-Move Survey & Estimate</td>
                            <td style="padding: 14px 18px; color: #475569;">Free physical visit in Chouparan or digital video inventory check to evaluate furniture size, fragile goods, and access stairs/ramps.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Accurate fixed-rate quote with zero hidden surcharges on moving day.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 02</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #0b1f33;">5-Layer Defensive Packing</td>
                            <td style="padding: 14px 18px; color: #475569;">Careful packing using virgin bubble wrap, corrugated sheets, foam rolls, and heavy 5-ply cartons. Dismantling of beds and wardrobes.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Maximum shock absorption and scratch-free protection for fragile items.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 03</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #0b1f33;">Safe Loading & Vehicle Securing</td>
                            <td style="padding: 14px 18px; color: #475569;">Systematic loading into specialized closed container trucks using heavy-duty belts, cargo nets, and non-slip mats.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Prevents cargo shift and vibration damage on GT Road highway turns.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 04</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #0b1f33;">Live GPS Tracked Transit</td>
                            <td style="padding: 14px 18px; color: #475569;">Smooth navigation over NH-19 and Danuwa Ghati with continuous real-time satellite GPS tracking and transit checkpoints.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Real-time shipment updates and guaranteed punctual arrival schedules.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 05</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #0b1f33;">Unloading & Room-Specific Delivery</td>
                            <td style="padding: 14px 18px; color: #475569;">Unloading cartons and placing them directly into corresponding bedrooms, living rooms, and kitchens as designated by the customer.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Zero manual labor or heavy lifting stress for you and your family.</td>
                        </tr>
                        <tr style="background: #f8fafc;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 06</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #0b1f33;">Reassembly & Inventory Verification</td>
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
                    <div style="color: #0b1f33; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-warehouse" style="color: #0284c7;"></i> Reliable Storage Facilities
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0b1f33; margin-bottom: 20px; line-height: 1.3;">
                        Secure Warehousing & Storage Facilities for Chouparan
                    </h2>
                    <p style="margin-bottom: 16px;">
                        Finding safe, clean, and weatherproof storage during property transitions, delayed construction, or outstation job assignments can be difficult in semi-urban highway junctions. Shree Ashirwad Packers and Movers solves this by providing state-of-the-art warehousing hubs along the Hazaribagh-Ranchi-GT Road transit axis.
                    </p>
                    <p style="margin-bottom: 16px;">
                        Our secure warehouses feature:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 14px; margin: 0 0 20px;">
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-video" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #0b1f33;">24/7 Security & CCTV</strong>
                            </div>
                            <p style="margin: 0; font-size: 13px; color: #475569; line-height: 1.5;">24-hour on-duty physical security personnel coupled with continuous closed-circuit television (CCTV) cameras.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-pallet" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #0b1f33;">Moisture-Proof Pallets</strong>
                            </div>
                            <p style="margin: 0; font-size: 13px; color: #475569; line-height: 1.5;">Heavy-duty wooden and plastic pallets elevating goods off concrete floors to prevent dampness and water seepage.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-bug-slash" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #0b1f33;">Pest & Termite Control</strong>
                            </div>
                            <p style="margin: 0; font-size: 13px; color: #475569; line-height: 1.5;">Scheduled pest control, rodent treatments, and termite repellent spraying to safeguard wooden items and paper archives.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-calendar-check" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #0b1f33;">Flexible Storage Plans</strong>
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
                            <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Commercial Goods and Household Storage Warehouse Chouparan" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-warehouse" style="color: #60a5fa; margin-right: 8px;"></i> Pest-controlled, moisture-free storage and warehousing serving Chouparan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 8: Localities and Coverage in Chouparan Block -->
        <section class="content-section" style="margin-bottom: 50px; background: #f8fafc; padding: 40px; border-radius: 14px; border: 1px solid #e2e8f0;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 30px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0b1f33; margin-bottom: 12px;">
                    Localities & Vicinities Covered Across Chouparan Block
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    Our local pickup vehicles and packing crews provide swift doorstep service across all villages, market centers, and highway junctions in Chouparan:
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px;">
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0b1f33; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0b1f33; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Chouparan Bazar</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Main market & commercial area</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0b1f33; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0b1f33; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Tajpur</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Residential settlements & highway road</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0b1f33; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0b1f33; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Danuwa Ghati Sector</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Mountain pass corridor & checkpost</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0b1f33; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0b1f33; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Chaura & Barasingha</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Agricultural and rural townships</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0b1f33; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0b1f33; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Itkhori Road Junction</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Connecting Chatra district border</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0b1f33; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0b1f33; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Barhi Border Belt</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">NH-19 and NH-33 crossing zone</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0b1f33; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0b1f33; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Jagdishpur & Bahera</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Outlying residential clusters</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0b1f33; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0b1f33; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Dobhi-Gaya Road Link</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Interstate corridor towards Bihar</div>
                </div>
            </div>
        </section>

        <!-- Section 9: Why Choose Shree Ashirwad Packers and Movers -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 35px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0b1f33; margin-bottom: 12px;">
                    Why Clients in Chouparan Trust Shree Ashirwad
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    We bring unyielding integrity, deep highway logistics proficiency, and caring customer support to every relocation.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 25px;">
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #00c853; flex-shrink: 0;"><i class="fa-solid fa-shield-halved"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #0b1f33; margin-bottom: 6px;">Zero Hidden Charges Guarantee</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">Our written moving quotation includes all packaging supplies, labour, highway tolls, and transport freight. You never pay unexpected surcharges on delivery.</p>
                    </div>
                </div>
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #0284c7; flex-shrink: 0;"><i class="fa-solid fa-file-invoice"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #0b1f33; margin-bottom: 6px;">100% Valid Reimbursement Bills</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">We supply full GST invoices, LR consignment copies, insurance papers, and itemized inventory lists for effortless employer reimbursement.</p>
                    </div>
                </div>
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #e67e22; flex-shrink: 0;"><i class="fa-solid fa-truck-ramp-box"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #0b1f33; margin-bottom: 6px;">In-House Experienced Crew</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">Our staff are full-time trained professionals, not daily-wage ad-hoc labourers. They handle your delicate glassware, temple idols, and furniture with supreme respect.</p>
                    </div>
                </div>
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #ec4899; flex-shrink: 0;"><i class="fa-solid fa-satellite"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #0b1f33; margin-bottom: 6px;">Active GPS Tracking & 24/7 Desk</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">Track your truck along the Grand Trunk Road in real-time. Our dedicated move coordinator is accessible around the clock for milestone updates.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Local Google Map Embed -->
        <div style="margin: 35px 0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58200.123456789!2d85.2500!3d24.3800!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f315123456789%3A0x7d6a5d4e3c2b1a0!2sChouparan%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Map Location of Chouparan Hazaribagh"></iframe>
        </div>

        <!-- Section 10: Frequently Asked Questions (Accordion) -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 35px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0b1f33; margin-bottom: 12px;">
                    Frequently Asked Questions - Chouparan Moving
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    Find instant answers to common questions about moving in Chouparan, rates, vehicle shipping, and safety protocols:
                </p>
            </div>

            <div class="faq-container" style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0b1f33; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        What moving services does Shree Ashirwad Packers provide in Chouparan?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        We provide comprehensive residential shifting, government and banking transfer moves, highway corridor transport along GT Road NH-19, car and bike carrier logistics, office relocation, secure warehousing, and complete transit insurance.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0b1f33; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        How much does residential packing and moving cost in Chouparan?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Local moves in Chouparan and towards Barhi or Itkhori start from ₹3,500 for 1BHK homes. Intercity moves to Ranchi, Hazaribagh, Gaya, or Patna range between ₹6,000 and ₹26,000 depending on consignment size, distance, and packing material.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0b1f33; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        Do you transport vehicles across Danuwa Ghati and the Jharkhand-Bihar border?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Yes, our experienced drivers regularly navigate the Danuwa Ghati mountain pass and border checkposts along NH-19 with enclosed car carrier trailers and custom bike stands, ensuring complete safety with zero transit damage.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0b1f33; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        What packaging materials do you use to ensure zero transit breakage?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        We apply 5-layer protective packing utilizing virgin bubble wrap, corrugated sheets, edge protectors, heavy-duty carton boxes, and waterproof stretch wrap film to safeguard goods against vibration, dust, and rainfall.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0b1f33; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        Are your relocation bills valid for corporate and government transfer reimbursement?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Yes, we provide 100% authentic GST invoices, consignment notes (LR copy), itemized packing inventory lists, and transit insurance policies compliant with government and PSU transfer rules.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0b1f33; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        How is transit insurance calculated for moving from Chouparan?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Transit insurance is typically calculated at 1.5% of the total declared value of your household goods or vehicle, providing full financial protection against rare incidents of road accidents or catastrophic loss.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0b1f33; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        Can I store my household furniture temporarily in your warehouse?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Yes, we offer clean, moisture-controlled, 24/7 CCTV-monitored warehousing facilities with short-term and long-term storage agreements at affordable monthly rates.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0b1f33; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        How can I book Packers and Movers in Chouparan?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        You can call our 24/7 Chouparan customer support desk at +91 8409531615 or +91 9308888746, or fill out our online quote form on this page for a quick estimate and free survey.
                    </p>
                </details>
            </div>
        </section>

        <!-- Section: Google My Business Authentic Reviews -->
<?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

<!-- Section 11: Call to Action Banner -->
        <section class="cta-banner" style="background: linear-gradient(135deg, #0b1f33 0%, #1e3d59 100%); color: #ffffff; padding: 45px 35px; border-radius: 16px; text-align: center; box-shadow: 0 15px 35px rgba(11,31,51,0.25);">
            <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.8vw, 2.5rem); font-weight: 700; margin-bottom: 15px; color: #ffffff;">
                Planning to Relocate in Chouparan or GT Road?
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
