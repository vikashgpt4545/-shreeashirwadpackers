<?php
/**
 * Packers and Movers in Dhanwar (Rajdhanwar) - Shree Ashirwad Packers and Movers
 * Website: https://www.shreeashirwadpackers.com
 * Contact: +91 8409531615 / +91 9308888746
 * Office: Serving Dhanwar, Rajdhanwar, Khori Mahua & Giridih District, Jharkhand
 */

require_once __DIR__ . '/includes/config.php';

// Page-specific variables
$page_title = "Packers and Movers in Dhanwar - 8409531615 | Shree Ashirwad Packers";
$page_description = "Reputed packers and movers in Dhanwar (Rajdhanwar), Giridih. Reliable household shifting, car and bike transportation, commercial moves with full transit insurance. Call 8409531615.";
$page_keywords = "packers and movers in dhanwar, movers and packers rajdhanwar giridih, household shifting dhanwar, car transport rajdhanwar, bike courier dhanwar, jharkhand dham movers, shree ashirwad packers dhanwar";
$canonical_url = SITE_BASE_URL . "/packers-and-movers-in-dhanwar";
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
      "name": "Shree Ashirwad Packers and Movers - Dhanwar",
      "image": "<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg",
      "@id": "<?php echo $canonical_url; ?>#movingcompany",
      "url": "<?php echo $canonical_url; ?>",
      "telephone": "+918409531615",
      "priceRange": "INR 3500 - 52000",
        "keywords": "packers and movers in dhanwar, movers and packers rajdhanwar giridih, household shifting dhanwar, car transport rajdhanwar, bike courier dhanwar, jharkhand dham movers, shree ashirwad packers dhanwar",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Station Road, Near Rajdhanwar Chowk",
        "addressLocality": "Dhanwar",
        "addressRegion": "Jharkhand",
        "postalCode": "825412",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 24.4124,
        "longitude": 85.9816
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
        "name": "Giridih Movers",
        "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-giridih"
      },{
        "@type": "ListItem",
        "position": 4,
        "name": "Packers and Movers in Dhanwar",
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
          "name": "What relocation services are offered by Shree Ashirwad Packers in Dhanwar (Rajdhanwar)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We provide end-to-end relocation services in Dhanwar including home shifting, commercial and retail shop relocation, government officer transfers, enclosed car carrier transport, two-wheeler shipping, secure warehousing, and comprehensive transit insurance."
          }
        },
        {
          "@type": "Question",
          "name": "How much does residential shifting cost in Dhanwar and Khori Mahua?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Local moves in Dhanwar start from ₹3,500 for 1BHK residences. Intercity relocations to Giridih, Koderma, Ranchi, or Patna range between ₹6,000 and ₹25,000 based on cargo volume, floor levels, and packing materials selected."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide shifting to rural towns around Dhanwar such as Gawan, Tisri, and Jamua?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, our specialized logistics network covers all adjoining blocks including Khori Mahua sub-division, Jamua, Tisri, Gawan, Deori, and the pilgrimage corridor near Jharkhand Dham."
          }
        },
        {
          "@type": "Question",
          "name": "How do you protect fragile items, kitchen crockery, and electronics?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We employ a proven 5-layer protective packing protocol using air bubble wrap, corrugated sheets, foam edge protectors, 5-ply cartons, and waterproof stretch wrap film to ensure zero breakage."
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
          "name": "Can you ship two-wheelers and cars from Dhanwar to other Indian states?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we operate enclosed automobile car carriers and customized hydraulic motorcycle cages with wheel clamps, bubble cushioning, and GPS tracking to deliver vehicles across India safely."
          }
        },
        {
          "@type": "Question",
          "name": "Is transit insurance mandatory for household moving?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "While not legally mandatory, we strongly recommend comprehensive transit insurance (1.5% of declared goods value) to provide full financial peace of mind against unexpected road accidents or transit risks."
          }
        },
        {
          "@type": "Question",
          "name": "How do I schedule a move in Dhanwar?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can call our dedicated support team at +91 8409531615 or +91 9308888746, or fill out the online quick quote form on this page to book an immediate free survey."
          }
        }
      ]
    }
    </script>
</head>
<body class="page-template">
<?php include_once __DIR__ . '/includes/header.php'; ?>

<!-- Hero Section -->
<section class="city-hero-section" style="background: linear-gradient(135deg, #132743 0%, #1f4068 50%, #2f5d88 100%); color: #ffffff; padding: 60px 0 50px; position: relative; overflow: hidden;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <div class="hero-content-wrapper" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 40px;">
            <div class="hero-text-block" style="flex: 1 1 600px; min-width: 320px;">
                <div class="hero-badge" style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255, 193, 7, 0.2); border: 1px solid #ffc107; padding: 6px 14px; border-radius: 30px; font-size: 14px; font-weight: 600; color: #ffc107; margin-bottom: 20px;">
                    <i class="fa-solid fa-truck-fast"></i> Leading Packers and Movers in Dhanwar (Rajdhanwar)
                </div>
                <h1 style="font-family: 'Outfit', sans-serif; font-size: clamp(2.2rem, 4vw, 3.2rem); font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
                    Packers and Movers in Dhanwar - <span style="color: #ffc107;">8409531615</span>
                </h1>
                <p style="font-family: 'Inter', sans-serif; font-size: 17px; line-height: 1.7; color: #e0e6ed; margin-bottom: 28px;">
                    Looking for dependable, certified, and affordable shifting services in Dhanwar? <strong>Shree Ashirwad Packers and Movers</strong> is your trusted relocation partner across Rajdhanwar, Khori Mahua, and western Giridih district. Situated on the banks of the Irga River and strategically connected via State Highway 13 and the Koderma-Madhupur railway corridor, Dhanwar is a prominent commercial, agricultural, and educational hub. Whether you are relocating your family residence, transferring for a government or banking post, or moving retail merchandise and vehicles, our trained team delivers 100% damage-free moving with comprehensive transit insurance.
                </p>
                <div class="hero-stats-row" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(130px, 1fr)); gap: 15px; margin-bottom: 30px;">
                    <div style="background: rgba(255, 255, 255, 0.08); padding: 14px; border-radius: 10px; border-left: 3px solid #ffc107;">
                        <div style="font-size: 24px; font-weight: 700; color: #ffc107;">11+</div>
                        <div style="font-size: 13px; color: #cfd8dc;">Years Experience</div>
                    </div>
                    <div style="background: rgba(255, 255, 255, 0.08); padding: 14px; border-radius: 10px; border-left: 3px solid #00c853;">
                        <div style="font-size: 24px; font-weight: 700; color: #00c853;">100%</div>
                        <div style="font-size: 13px; color: #cfd8dc;">Zero Damage Record</div>
                    </div>
                    <div style="background: rgba(255, 255, 255, 0.08); padding: 14px; border-radius: 10px; border-left: 3px solid #00b0ff;">
                        <div style="font-size: 24px; font-weight: 700; color: #00b0ff;">4,500+</div>
                        <div style="font-size: 13px; color: #cfd8dc;">Happy Families Moved</div>
                    </div>
                    <div style="background: rgba(255, 255, 255, 0.08); padding: 14px; border-radius: 10px; border-left: 3px solid #ff9100;">
                        <div style="font-size: 24px; font-weight: 700; color: #ff9100;">24/7</div>
                        <div style="font-size: 13px; color: #cfd8dc;">Live GPS Tracking</div>
                    </div>
                </div>
                <div class="hero-actions" style="display: flex; flex-wrap: wrap; gap: 15px;">
                    <a href="tel:+918409531615" class="btn-primary" style="background: #ffc107; color: #1a252f; padding: 14px 28px; border-radius: 8px; font-weight: 700; font-size: 16px; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; transition: all 0.3s ease;">
                        <i class="fa-solid fa-phone-volume"></i> Call Now: 8409531615
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20moving%20services%20in%20Dhanwar" target="_blank" class="btn-secondary" style="background: #25d366; color: #ffffff; padding: 14px 24px; border-radius: 8px; font-weight: 700; font-size: 16px; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; transition: all 0.3s ease;">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp Quote
                    </a>
                </div>
            </div>

            <!-- Quick Booking Form Container -->
            <div class="hero-form-container" style="flex: 0 1 420px; min-width: 320px; background: #ffffff; padding: 30px; border-radius: 14px; box-shadow: 0 20px 40px rgba(0,0,0,0.25); color: #2c3e50;">
                <h3 style="font-family: 'Outfit', sans-serif; font-size: 22px; font-weight: 700; margin-bottom: 8px; color: #132743; text-align: center;">
                    Get Free Quote in Dhanwar
                </h3>
                <p style="font-size: 13px; color: #7f8c8d; text-align: center; margin-bottom: 20px;">Prompt response within 15 minutes</p>
                <form action="<?php echo SITE_BASE_URL; ?>/contact-form-handler.php" method="POST" class="hero-quote-form">
                    <input type="hidden" name="service_city" value="Dhanwar">
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
                            <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 5px; color: #34495e;">Pickup Point</label>
                            <input type="text" name="pickup_location" placeholder="e.g. Rajdhanwar / Khori Mahua" style="width: 100%; padding: 10px 12px; border: 1px solid #ced4da; border-radius: 6px; font-size: 13px; outline: none;">
                        </div>
                        <div>
                            <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 5px; color: #34495e;">Destination</label>
                            <input type="text" name="drop_location" placeholder="e.g. Giridih / Ranchi / Patna" style="width: 100%; padding: 10px 12px; border: 1px solid #ced4da; border-radius: 6px; font-size: 13px; outline: none;">
                        </div>
                    </div>
                    <div style="margin-bottom: 16px;">
                        <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 5px; color: #34495e;">Relocation Type</label>
                        <select name="shifting_type" style="width: 100%; padding: 10px 12px; border: 1px solid #ced4da; border-radius: 6px; font-size: 13px; background-color: #fff; outline: none;">
                            <option value="Household Shifting">Household Shifting (1/2/3+ BHK)</option>
                            <option value="Government Officer Transfer">Government Officer / Teacher Transfer</option>
                            <option value="Car or Two Wheeler Transport">Car / Bike Transport</option>
                            <option value="Commercial Trade Relocation">Commercial / Shop Relocation</option>
                            <option value="Secure Storage Warehousing">Secure Storage & Warehousing</option>
                        </select>
                    </div>
                    <button type="submit" style="width: 100%; background: #e67e22; color: #ffffff; padding: 13px; border: none; border-radius: 7px; font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.3s ease; box-shadow: 0 4px 12px rgba(230,126,34,0.35);">
                        <i class="fa-solid fa-paper-plane"></i> Get Free Shifting Estimate
                    </button>
                    <p style="font-size: 11px; color: #95a5a6; text-align: center; margin-top: 10px; margin-bottom: 0;">
                        <i class="fa-solid fa-shield-halved"></i> 100% Privacy Guaranteed. Zero Spam Calls.
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
                <li><a href="<?php echo SITE_BASE_URL; ?>/" style="color: #132743; text-decoration: none;"><i class="fa-solid fa-house"></i> Home</a></li>
                <li>/</li>
                <li><a href="<?php echo SITE_BASE_URL; ?>/#service-areas" style="color: #132743; text-decoration: none;">Jharkhand</a></li>
                <li>/</li>
                <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-giridih" style="color: #132743; text-decoration: none;">Giridih</a></li>
                <li>/</li>
                <li style="color: #132743; font-weight: 600;">Dhanwar (Rajdhanwar)</li>
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
                    <div style="color: #132743; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-location-crosshairs" style="color: #e67e22;"></i> Premier Logistics Network
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #132743; margin-bottom: 20px; line-height: 1.3;">
                        Professional Shifting Solutions in Dhanwar (Rajdhanwar) & Western Giridih
                    </h2>
                    <p style="margin-bottom: 16px;">
                        Dhanwar, prominently recognized as Rajdhanwar, is one of the most vibrant sub-divisional commercial centers of Giridih district. Resting along the banks of the picturesque Irga River and centrally positioned on State Highway 13 connecting Giridih town with Koderma and Nawada, Dhanwar functions as the bustling administrative, commercial, and educational core for the Khori Mahua sub-division. It is also the gateway to the sacred pilgrimage shrine of Jharkhand Dham, drawing thousands of visitors and business families throughout the year.
                    </p>
                    <p style="margin-bottom: 16px;">
                        With its rapid semi-urban growth, historical palaces, active trading colonies, and connectivity via the Koderma-Madhupur rail link, Dhanwar experiences regular residential relocations and commercial goods transfers. However, navigating the narrow historic bazaar lanes, rural feeder bypasses, and uneven topography across the mica belt requires a packers and movers company with specialized vehicles, high-strength packaging materials, and experienced moving personnel.
                    </p>
                    <p style="margin-bottom: 16px;">
                        Our dedicated teams understand the unique requirements of Rajdhanwar households. From the heritage residences near the historic Rajbari and old Irga river settlements to modern residential layouts springing up along the bypass and Station Road, our crews arrive fully equipped with floor protection sheets, heavy-duty furniture sliders, and specialized toolkits. We handle family heirlooms, heavy wooden almirahs, glass display cabinets, modular kitchen appliances, and sacred pooja room mandirs with extreme veneration and care.
                    </p>
                    <p style="margin-bottom: 16px;">
                        Furthermore, for customers shifting between Dhanwar, Khori Mahua, and surrounding mining hubs or railway stations, we coordinate synchronized timelines so your transit matches key handover or lease start dates. Each assignment is assigned an experienced move supervisor who oversees packaging standards, loading security, and route navigation along SH-13.
                    </p>
                    <p>
                        <strong>Shree Ashirwad Packers and Movers</strong> provides trusted, doorstep relocation services across Rajdhanwar and surrounding blocks like Jamua, Tisri, Gawan, and Deori. With our zero-damage handling, 5-layer protective packing, transparent written contracts, and round-the-clock GPS tracking, your relocation is executed flawlessly from pickup to final room arrangement.
                    </p>
                </div>
                <div style="flex: 1 1 450px; min-width: 300px;">
                    <!-- Image 1: Responsive container with 3:4 aspect ratio -->
                    <div class="content-media-embed" style="margin: 0 auto; max-width: 420px;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Packaging Materials in Dhanwar Rajdhanwar Giridih" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-box-open" style="color: #60a5fa; margin-right: 8px;"></i> Multi-layer protective bubble wrap and heavy corrugated cartons in Dhanwar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Core Moving Services in Dhanwar -->
        <section class="content-section" style="margin-bottom: 50px; background: #ffffff; padding: 40px; border-radius: 14px; border: 1px solid #edf2f7; box-shadow: 0 8px 25px rgba(0,0,0,0.04);">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 40px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #132743; margin-bottom: 15px;">
                    Comprehensive Moving Services Tailored for Dhanwar
                </h2>
                <p style="color: #64748b; font-size: 16px;">
                    Whether relocating a small residential flat, an ancestral family haveli, or a commercial enterprise, our specialized moving solutions ensure maximum safety and convenience.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(270px, 1fr)); gap: 25px;">
                <!-- Service 1 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #132743; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #e0e7ff; color: #3730a3; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-house-chimney-user"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #132743; margin-bottom: 12px;">Household Shifting</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Complete home relocation for 1BHK, 2BHK, 3BHK homes, and ancestral houses across Rajdhanwar Bazar, Station Road, and Khori Mahua with systematic packing and room setup.
                    </p>
                </div>

                <!-- Service 2 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #e67e22; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #ffedd5; color: #c2410c; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #132743; margin-bottom: 12px;">Officer & Teacher Transfers</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Prompt relocation for government administrative officers, magistrates, bank managers, and educators with official GST invoices, consignment notes (LR), and itemized inventories.
                    </p>
                </div>

                <!-- Service 3 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #00c853; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #dcfce7; color: #15803d; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-motorcycle"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #132743; margin-bottom: 12px;">Vehicle Shipping (Car & Bike)</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Enclosed car trailers and custom two-wheeler wooden crates ensuring zero-scratch transport from Dhanwar to Ranchi, Patna, Kolkata, Delhi, and pan-India destinations.
                    </p>
                </div>

                <!-- Service 4 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #0284c7; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #e0f2fe; color: #0369a1; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-shop"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #132743; margin-bottom: 12px;">Commercial & Retail Moving</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Smooth shifting for textile stores, electronic showrooms, grocery wholesale godowns, clinics, and school equipment across the SH-13 corridor with minimal downtime.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 3: 5-Layer Defensive Packaging Standard -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
                <div style="flex: 1 1 450px; min-width: 300px; order: 2;">
                    <div style="color: #132743; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-box-archive" style="color: #00c853;"></i> Meticulous Packing Protocols
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #132743; margin-bottom: 20px; line-height: 1.3;">
                        Engineered 5-Layer Packaging for Undulating State Highways
                    </h2>
                    <p style="margin-bottom: 16px;">
                        Transporting household furniture, fragile crockery, and sensitive electronics along state highways and rural bypasses requires superior cushioning to withstand vibrations, speed humps, and seasonal weather conditions. Standard gunny bags or flimsy packing boxes are simply inadequate to safeguard valuable assets.
                    </p>
                    <p style="margin-bottom: 16px;">
                        Shree Ashirwad Packers and Movers strictly adheres to a rigorous 5-layer protective packing protocol:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 16px; margin: 0 0 25px;">
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #132743;">Layer 1 - Scratch-Proof Foam & Film</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Virgin polyethylene foam film applied directly over wooden veneers, glossy laminates, and polished furniture to eliminate surface abrasions.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #132743;">Layer 2 - High-Density Air Bubble Padding</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Heavy-grade 80 GSM air bubble cushioning wrapped around LCD televisions, double-door refrigerators, microwave ovens, and glassware.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #132743;">Layer 3 - Heavy Corrugated Edge Guards</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Rigid multi-ply edge protectors and corner caps fixed to wardrobes, dressing tables, and dining tables to absorb direct edge shocks.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #132743;">Layer 4 - Sturdy 5-Ply & 7-Ply Cartons</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Tough Kraft corrugated boxes pre-partitioned for chinaware, kitchen utensils, books, and delicate heirlooms with inner thermocol fillers.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #132743;">Layer 5 - Moisture & Dust-Proof Shrink Film</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Industrial stretch wrap film thermally sealed around cartons and furniture to block humidity, dust, and sudden monsoon showers.</p>
                        </div>
                    </div>
                    <p>
                        Every box is methodically numbered and inventoried, ensuring quick, hassle-free room-by-room unpacking upon reaching your new residence.
                    </p>
                </div>
                <div style="flex: 1 1 450px; min-width: 300px; order: 1;">
                    <!-- Image 2: Responsive container with 3:4 aspect ratio -->
                    <div class="content-media-embed" style="margin: 0 auto; max-width: 420px;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to Door Delivery Truck in Dhanwar Rajdhanwar" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-truck-fast" style="color: #60a5fa; margin-right: 8px;"></i> Specialized container trucks providing doorstep pickup and delivery across Dhanwar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4: Transparent Cost & Distance Matrix -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 30px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #132743; margin-bottom: 12px;">
                    Estimated Shifting Rates from Dhanwar (Rajdhanwar)
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    Transparent and realistic rate estimates. Final quotes depend on total volume, floor elevation, packaging tier, and delivery distance.
                </p>
            </div>

            <div style="overflow-x: auto; background: #ffffff; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #e2e8f0; margin-bottom: 25px;">
                <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
                    <thead>
                        <tr style="background: #132743; color: #ffffff;">
                            <th style="padding: 16px 20px; border-bottom: 2px solid #cbd5e1;">Destination Route</th>
                            <th style="padding: 16px 20px; border-bottom: 2px solid #cbd5e1;">Distance (Approx.)</th>
                            <th style="padding: 16px 20px; border-bottom: 2px solid #cbd5e1;">1 BHK Shifting</th>
                            <th style="padding: 16px 20px; border-bottom: 2px solid #cbd5e1;">2 BHK Shifting</th>
                            <th style="padding: 16px 20px; border-bottom: 2px solid #cbd5e1;">3 BHK / Haveli</th>
                            <th style="padding: 16px 20px; border-bottom: 2px solid #cbd5e1;">Car / Bike Transport</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #ffffff;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #132743;">Dhanwar Local / Khori Mahua / Jamua</td>
                            <td style="padding: 14px 20px;">10 - 25 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹3,500 - ₹6,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹6,500 - ₹10,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹10,500 - ₹16,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹1,500 - ₹3,500</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #132743;">Dhanwar to Giridih Headquarter</td>
                            <td style="padding: 14px 20px;">48 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹5,500 - ₹8,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹8,500 - ₹13,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹13,500 - ₹19,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹2,200 - ₹4,500</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #ffffff;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #132743;">Dhanwar to Koderma / Jhumri Telaiya</td>
                            <td style="padding: 14px 20px;">52 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹5,500 - ₹8,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹8,500 - ₹14,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹14,000 - ₹19,500</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹2,200 - ₹4,500</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #132743;">Dhanwar to Dhanbad / Bokaro</td>
                            <td style="padding: 14px 20px;">115 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹8,000 - ₹12,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹12,500 - ₹19,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹19,000 - ₹26,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹3,000 - ₹6,500</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #ffffff;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #132743;">Dhanwar to Ranchi (Capital)</td>
                            <td style="padding: 14px 20px;">165 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹9,500 - ₹15,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹15,000 - ₹23,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹23,000 - ₹32,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹3,500 - ₹7,500</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #132743;">Dhanwar to Patna (Bihar)</td>
                            <td style="padding: 14px 20px;">220 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹12,000 - ₹17,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹17,000 - ₹26,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹26,000 - ₹36,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹4,500 - ₹9,000</td>
                        </tr>
                        <tr style="background: #ffffff;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #132743;">Dhanwar to Kolkata (WB)</td>
                            <td style="padding: 14px 20px;">375 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹16,000 - ₹23,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹23,000 - ₹34,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹34,000 - ₹46,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹5,500 - ₹11,500</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="font-size: 13px; color: #64748b; font-style: italic;">
                * Note: Pricing includes packaging materials, trained labour for loading/unloading, and road transit. Applicable GST and optional transit insurance (1.5% of declared goods value) are clearly itemized in the formal estimate.
            </p>
        </section>

        <!-- Section 5: Automobile Transport & Warehousing -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
                <div style="flex: 1 1 450px; min-width: 300px;">
                    <!-- Image 3: Responsive container with 3:4 aspect ratio -->
                    <div class="content-media-embed" style="margin: 0 auto; max-width: 420px;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car and Bike Relocation Carrier in Dhanwar Rajdhanwar" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-car-side" style="color: #60a5fa; margin-right: 8px;"></i> Enclosed car carrier trucks and hydraulic bike stands serving Dhanwar.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="flex: 1 1 550px; min-width: 320px;">
                    <div style="color: #132743; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-car-side" style="color: #ff9100;"></i> Safe Vehicle Transportation
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #132743; margin-bottom: 20px; line-height: 1.3;">
                        Automobile Carrier Logistics & Safe Storage Hubs
                    </h2>
                    <p style="margin-bottom: 16px;">
                        Self-driving your four-wheeler or bike across hundreds of kilometers of highway and uneven rural roads exposes your vehicle to accidental hazards, paint chipping, and unnecessary wear. Shree Ashirwad Packers and Movers operates specialized hydraulic enclosed car carriers and two-wheeler transit cages to ship your vehicles safely from Dhanwar to anywhere in India.
                    </p>
                    <p style="margin-bottom: 16px;">
                        Prior to loading, a detailed condition report is signed. Four-wheelers are securely fastened using pneumatic tyre locks and safety chains, while two-wheelers receive multi-layer bubble wrap on handles, lights, and fuel tanks. Complete transit insurance covers your vehicle throughout the road journey.
                    </p>
                    <p>
                        Need temporary storage while your new house in Giridih or Dhanwar undergoes finishing work? Our secure warehousing hubs provide clean, elevated pallet storage, 24/7 CCTV surveillance, and regular pest treatments at highly economical monthly rental rates.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 6: Step-by-Step Moving Process Checklist -->
        <section class="content-section" style="margin-bottom: 50px; background: #ffffff; padding: 40px; border-radius: 14px; border: 1px solid #edf2f7; box-shadow: 0 8px 25px rgba(0,0,0,0.04);">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 30px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #132743; margin-bottom: 12px;">
                    Our Step-by-Step Relocation Workflow
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    A transparent 6-stage moving workflow ensuring your relocation in Dhanwar is executed on time with zero surprises.
                </p>
            </div>

            <div style="overflow-x: auto; margin-bottom: 20px;">
                <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
                    <thead>
                        <tr style="background: #1f4068; color: #ffffff;">
                            <th style="padding: 14px 18px; width: 12%;">Stage</th>
                            <th style="padding: 14px 18px; width: 22%;">Action Item</th>
                            <th style="padding: 14px 18px; width: 38%;">Execution Protocol & Details</th>
                            <th style="padding: 14px 18px; width: 28%;">Customer Assurance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 01</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #132743;">Doorstep Survey & Quotation</td>
                            <td style="padding: 14px 18px; color: #475569;">Physical home visit in Dhanwar or rapid video survey to record furniture inventory, fragile goods, and access conditions.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Accurate fixed written quotation with zero hidden fees.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 02</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #132743;">5-Layer Defensive Packing</td>
                            <td style="padding: 14px 18px; color: #475569;">Careful packing using virgin bubble wrap, corrugated sheets, foam rolls, and heavy-duty 5-ply cartons. Furniture dismantled by carpenters.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Complete protection against scratches, dents, and highway dust.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 03</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #132743;">Systematic Vehicle Loading</td>
                            <td style="padding: 14px 18px; color: #475569;">Loading into clean closed container trucks using heavy-duty lifting straps, protective blankets, and safety belts.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Zero internal load shifting or collision during highway transit.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 04</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #132743;">GPS-Monitored Highway Transit</td>
                            <td style="padding: 14px 18px; color: #475569;">Highway navigation along SH-13 and connecting corridors by licensed drivers with live satellite GPS tracking.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Punctual arrival times with real-time location visibility.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 05</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #132743;">Unloading & Room Placement</td>
                            <td style="padding: 14px 18px; color: #475569;">Careful unloading at destination, carrying labeled boxes directly to designated bedrooms, living room, and kitchen.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Saves you time and prevents post-move physical fatigue.</td>
                        </tr>
                        <tr style="background: #f8fafc;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 06</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #132743;">Reassembly & Final Sign-Off</td>
                            <td style="padding: 14px 18px; color: #475569;">Reassembling beds, wardrobes, and tables; joint physical verification against the inventory list before sign-off.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Complete peace of mind and 100% satisfaction verified.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Section 7: Secure Storage & Warehousing -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
                <div style="flex: 1 1 550px; min-width: 320px;">
                    <div style="color: #132743; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-warehouse" style="color: #0284c7;"></i> Secure Warehouse Facilities
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #132743; margin-bottom: 20px; line-height: 1.3;">
                        Secure Warehousing & Storage Facilities for Dhanwar
                    </h2>
                    <p style="margin-bottom: 16px;">
                        Finding safe, clean, and weatherproof storage during home construction, rental delays, or extended outstation postings can be difficult in semi-urban sub-divisions. Shree Ashirwad Packers and Movers operates clean, modern warehousing facilities easily accessible from Dhanwar and Giridih.
                    </p>
                    <p style="margin-bottom: 16px;">
                        Our secure warehouses feature:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 14px; margin: 0 0 20px;">
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-video" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #132743;">24/7 Security & CCTV</strong>
                            </div>
                            <p style="margin: 0; font-size: 13px; color: #475569; line-height: 1.5;">Continuous 24/7 CCTV surveillance cameras with round-the-clock physical security guards.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-pallet" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #132743;">Raised Wooden Pallets</strong>
                            </div>
                            <p style="margin: 0; font-size: 13px; color: #475569; line-height: 1.5;">Raised wooden pallets keeping all cartons, mattresses, and furniture off the floor to prevent dampness.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-shield-virus" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #132743;">Pest & Termite Control</strong>
                            </div>
                            <p style="margin: 0; font-size: 13px; color: #475569; line-height: 1.5;">Regular pest-control treatments, termite prevention, and rodent barriers to protect books, archives, and wood.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-file-contract" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #132743;">Flexible Lease Terms</strong>
                            </div>
                            <p style="margin: 0; font-size: 13px; color: #475569; line-height: 1.5;">Flexible short-term and multi-month lease terms with detailed inventory receipts for instant retrieval.</p>
                        </div>
                    </div>
                    <p>
                        Keep your precious household possessions and business inventory completely safe until you are ready to receive them.
                    </p>
                </div>
                <div style="flex: 1 1 450px; min-width: 300px;">
                    <!-- Image 4: Responsive container with 3:4 aspect ratio -->
                    <div class="content-media-embed" style="margin: 0 auto; max-width: 420px;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Household Goods and Commercial Storage Warehouse Dhanwar" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-warehouse" style="color: #60a5fa; margin-right: 8px;"></i> Clean, pest-controlled storage and warehousing serving Dhanwar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 8: Localities and Coverage in Dhanwar Block -->
        <section class="content-section" style="margin-bottom: 50px; background: #f8fafc; padding: 40px; border-radius: 14px; border: 1px solid #e2e8f0;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 30px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #132743; margin-bottom: 12px;">
                    Localities & Vicinities Covered Across Dhanwar Block
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    Our dedicated pickup teams and container vehicles provide comprehensive coverage throughout Rajdhanwar and surrounding towns:
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px;">
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #132743; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #132743; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Rajdhanwar Main Bazar</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Commercial hub & central chowk</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #132743; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #132743; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Station Road Sector</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Railway station & residential colonies</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #132743; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #132743; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Irga River Ghat Road</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Riverside settlements & ancient palaces</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #132743; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #132743; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Khori Mahua Sub-Division</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Court & administrative officer quarters</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #132743; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #132743; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Jharkhand Dham Corridor</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Temple pilgrimage road & guest houses</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #132743; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #132743; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Jamua Road Sector</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Connecting road towards Deoghar</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #132743; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #132743; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Gawan & Tisri Link</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Northern mica & forest border belt</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #132743; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #132743; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Koderma State Highway</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">SH-13 interstate connection</div>
                </div>
            </div>
        </section>

        <!-- Section 9: Why Choose Shree Ashirwad Packers and Movers -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 35px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #132743; margin-bottom: 12px;">
                    Why Clients in Dhanwar Choose Shree Ashirwad
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    We combine deep local knowledge of Giridih district with national quality standards to deliver an effortless moving experience.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 25px;">
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #00c853; flex-shrink: 0;"><i class="fa-solid fa-circle-check"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #132743; margin-bottom: 6px;">Zero Hidden Charges Guarantee</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">Our written quote covers all packing supplies, labour, state toll charges, and vehicle freight. You never pay unexpected surcharges on moving day.</p>
                    </div>
                </div>
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #0284c7; flex-shrink: 0;"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #132743; margin-bottom: 6px;">100% Valid Transfer Bills</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">We provide GST invoices, lorry receipts (LR), packing inventory lists, and transit insurance certificates compliant with government and corporate reimbursement.</p>
                    </div>
                </div>
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #e67e22; flex-shrink: 0;"><i class="fa-solid fa-boxes-packing"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #132743; margin-bottom: 6px;">Trained In-House Packaging Team</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">Our permanent staff are skilled carpenters and packing experts who treat your precious heirlooms, temple altars, and furniture with utmost care.</p>
                    </div>
                </div>
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #ec4899; flex-shrink: 0;"><i class="fa-solid fa-satellite-dish"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #132743; margin-bottom: 6px;">Live GPS Tracking & 24/7 Helpline</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">Track your transport vehicle in real-time. Our dedicated move coordinator is accessible 24/7 for milestone updates and complete support.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Local Google Map Embed -->
        <div style="margin: 35px 0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58200.123456789!2d85.9800!3d24.4100!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f35d123456789%3A0x7d6a5d4e3c2b1a0!2sRajdhanwar%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Map Location of Dhanwar Rajdhanwar Giridih"></iframe>
        </div>

        <!-- Section 10: Frequently Asked Questions (Accordion) -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 35px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #132743; margin-bottom: 12px;">
                    Frequently Asked Questions - Dhanwar Moving
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    Answers to common questions regarding household shifting, rates, vehicle carrier services, and insurance in Dhanwar:
                </p>
            </div>

            <div class="faq-container" style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #132743; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        What relocation services are offered by Shree Ashirwad Packers in Dhanwar (Rajdhanwar)?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        We provide end-to-end relocation services in Dhanwar including home shifting, commercial and retail shop relocation, government officer transfers, enclosed car carrier transport, two-wheeler shipping, secure warehousing, and comprehensive transit insurance.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #132743; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        How much does residential shifting cost in Dhanwar and Khori Mahua?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Local moves in Dhanwar start from ₹3,500 for 1BHK residences. Intercity relocations to Giridih, Koderma, Ranchi, or Patna range between ₹6,000 and ₹25,000 based on cargo volume, floor levels, and packing materials selected.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #132743; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        Do you provide shifting to rural towns around Dhanwar such as Gawan, Tisri, and Jamua?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Yes, our specialized logistics network covers all adjoining blocks including Khori Mahua sub-division, Jamua, Tisri, Gawan, Deori, and the pilgrimage corridor near Jharkhand Dham.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #132743; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        How do you protect fragile items, kitchen crockery, and electronics?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        We employ a proven 5-layer protective packing protocol using air bubble wrap, corrugated sheets, foam edge protectors, 5-ply cartons, and waterproof stretch wrap film to ensure zero breakage.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #132743; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        Are your invoices valid for government employee transfer claims?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Yes, we provide 100% genuine GST invoices, official consignment notes (LR copy), itemized packing inventory lists, and transit insurance documentation acceptable across state and central government departments.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #132743; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        Can you ship two-wheelers and cars from Dhanwar to other Indian states?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Yes, we operate enclosed automobile car carriers and customized hydraulic motorcycle cages with wheel clamps, bubble cushioning, and GPS tracking to deliver vehicles across India safely.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #132743; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        Is transit insurance mandatory for household moving?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        While not legally mandatory, we strongly recommend comprehensive transit insurance (1.5% of declared goods value) to provide full financial peace of mind against unexpected road accidents or transit risks.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #132743; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        How do I schedule a move in Dhanwar?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        You can call our dedicated support team at +91 8409531615 or +91 9308888746, or fill out the online quick quote form on this page to book an immediate free survey.
                    </p>
                </details>
            </div>
        </section>

        <!-- Section: Google My Business Authentic Reviews -->
<?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

<!-- Section 11: Call to Action Banner -->
        <section class="cta-banner" style="background: linear-gradient(135deg, #132743 0%, #1f4068 100%); color: #ffffff; padding: 45px 35px; border-radius: 16px; text-align: center; box-shadow: 0 15px 35px rgba(19,39,67,0.25);">
            <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.8vw, 2.5rem); font-weight: 700; margin-bottom: 15px; color: #ffffff;">
                Planning to Move Home or Office in Dhanwar?
            </h2>
            <p style="font-size: 16px; color: #cbd5e1; max-width: 720px; margin: 0 auto 28px; line-height: 1.7;">
                Connect with Shree Ashirwad Packers and Movers today for a free on-site estimate, custom 5-layer packing, and reliable, insured shifting services.
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
