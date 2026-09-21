<?php
/**
 * Packers and Movers in East Singhbhum - Shree Ashirwad Packers and Movers
 * Website: https://www.shreeashirwadpackers.com
 * Contact: +91 8409531615 / +91 9308888746
 * Office: Serving Jamshedpur, Ghatshila, Jaduguda, Chakulia & Entire East Singhbhum District, Jharkhand
 */

require_once __DIR__ . '/includes/config.php';

// Page-specific variables
$page_title = "Packers and Movers in East Singhbhum - 8409531615 | Shree Ashirwad Packers";
$page_description = "Top packers and movers in East Singhbhum (Jamshedpur, Ghatshila, Jaduguda). Corporate employee relocation, household shifting, car and bike carriers, full transit insurance. Call 8409531615.";
$page_keywords = "packers and movers in east singhbhum, movers and packers east singhbhum jamshedpur, household shifting ghatshila, jaduguda packers and movers, car transport east singhbhum, bike courier jamshedpur, shree ashirwad packers east singhbhum";
$canonical_url = SITE_BASE_URL . "/packers-and-movers-in-east-singhbhum";
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
      "name": "Shree Ashirwad Packers and Movers - East Singhbhum",
      "image": "<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg",
      "@id": "<?php echo $canonical_url; ?>#movingcompany",
      "url": "<?php echo $canonical_url; ?>",
      "telephone": "+918409531615",
      "priceRange": "INR 3500 - 65000",
        "keywords": "packers and movers in east singhbhum, movers and packers east singhbhum jamshedpur, household shifting ghatshila, jaduguda packers and movers, car transport east singhbhum, bike courier jamshedpur, shree ashirwad packers east singhbhum",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Bistupur Main Road, Near Tatanagar Station Corridor",
        "addressLocality": "Jamshedpur",
        "addressRegion": "Jharkhand",
        "postalCode": "831001",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 22.8046,
        "longitude": 86.2029
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
        "name": "East Singhbhum Relocation",
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
          "name": "What relocation services does Shree Ashirwad Packers offer in East Singhbhum?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We provide comprehensive corporate executive transfers, residential household moving, industrial machinery transport, enclosed car and bike carrier logistics, secure warehousing, and 100% transit insurance across Jamshedpur, Ghatshila, Jaduguda, Chakulia, and all blocks of East Singhbhum district."
          }
        },
        {
          "@type": "Question",
          "name": "How much does residential shifting cost in East Singhbhum district?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Local moves within Jamshedpur, Ghatshila, or Jaduguda start from ₹3,500 to ₹6,500 for 1BHK homes. Intercity moves to Ranchi, Kolkata, Bhubaneswar, Patna, or Delhi range from ₹6,500 to ₹35,000 depending on consignment volume, packing tier, and distance."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide relocation services for Tata Steel, Tata Motors, and UCIL employees?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we are highly experienced in serving corporate and PSU employees from Tata Steel, Tata Motors, Tinplate, UCIL Jaduguda, and HCL Ghatshila with complete GST billing, official consignment notes (LR), and itemized inventory sheets for 100% company reimbursement."
          }
        },
        {
          "@type": "Question",
          "name": "How do you protect luxury furniture, modular kitchens, and delicate home electronics?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We apply our specialized 5-layer defensive packing system consisting of virgin non-abrasive foam wrap, thick 80 GSM air bubble cushioning, heavy corrugated edge protectors, sturdy 5-ply cartons, and waterproof stretch wrap film that prevents all scratches and vibrations."
          }
        },
        {
          "@type": "Question",
          "name": "Can you ship cars and premium two-wheelers interstate from East Singhbhum?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we operate dedicated hydraulic enclosed car carrier trailers and custom two-wheeler wooden crates with wheel clamps, bubble cushioning, GPS tracking, and complete transit insurance coverage to any destination across India."
          }
        },
        {
          "@type": "Question",
          "name": "Are your relocation bills valid for corporate and government transfer allowance claims?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we provide 100% authentic GST-compliant invoices, official consignment notes (LR copy), detailed itemized packing lists, and transit insurance policies accepted by all corporate enterprises, banks, and government ministries."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide short-term and long-term warehousing in East Singhbhum?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we maintain clean, moisture-proof, 24/7 CCTV-monitored warehousing facilities with elevated pallets and regular pest control for short-term or multi-month household goods and commercial storage."
          }
        },
        {
          "@type": "Question",
          "name": "How can I book Packers and Movers in East Singhbhum?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can call our 24/7 East Singhbhum customer support desk at +91 8409531615 or +91 9308888746, or complete our online quick quote form on this page to schedule an immediate free doorstep survey."
          }
        }
      ]
    }
    </script>
</head>
<body class="page-template">
<?php include_once __DIR__ . '/includes/header.php'; ?>

<!-- Hero Section -->
<section class="city-hero-section" style="background: linear-gradient(135deg, #091e3a 0%, #173d6b 50%, #2f5f98 100%); color: #ffffff; padding: 60px 0 50px; position: relative; overflow: hidden;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <div class="hero-content-wrapper" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 40px;">
            <div class="hero-text-block" style="flex: 1 1 600px; min-width: 320px;">
                <div class="hero-badge" style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255, 193, 7, 0.2); border: 1px solid #ffc107; padding: 6px 14px; border-radius: 30px; font-size: 14px; font-weight: 600; color: #ffc107; margin-bottom: 20px;">
                    <i class="fa-solid fa-truck-fast"></i> Premier Relocation Partner in East Singhbhum District
                </div>
                <h1 style="font-family: 'Outfit', sans-serif; font-size: clamp(2.2rem, 4vw, 3.2rem); font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
                    Packers and Movers in East Singhbhum - <span style="color: #ffc107;">8409531615</span>
                </h1>
                <p style="font-family: 'Inter', sans-serif; font-size: 17px; line-height: 1.7; color: #e0e6ed; margin-bottom: 28px;">
                    Relocating home, corporate office, or industrial assets in East Singhbhum? <strong>Shree Ashirwad Packers and Movers</strong> provides trusted, certified, and damage-free moving services across Jamshedpur, Ghatshila, Jaduguda, Chakulia, Baharagora, and all surrounding industrial and mining blocks. As the premier manufacturing, automotive, and mineral capital of eastern India, East Singhbhum demands supreme professionalism, punctual schedules, and specialized handling. Whether you are an executive moving between corporate townships, an engineer relocating interstate, or a family settling into a new residential complex, our certified crew ensures 100% zero-damage execution backed by comprehensive transit insurance.
                </p>
                <div class="hero-stats-row" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(130px, 1fr)); gap: 15px; margin-bottom: 30px;">
                    <div style="background: rgba(255, 255, 255, 0.08); padding: 14px; border-radius: 10px; border-left: 3px solid #ffc107;">
                        <div style="font-size: 24px; font-weight: 700; color: #ffc107;">12+</div>
                        <div style="font-size: 13px; color: #cfd8dc;">Years in Singhbhum</div>
                    </div>
                    <div style="background: rgba(255, 255, 255, 0.08); padding: 14px; border-radius: 10px; border-left: 3px solid #00c853;">
                        <div style="font-size: 24px; font-weight: 700; color: #00c853;">100%</div>
                        <div style="font-size: 13px; color: #cfd8dc;">Safe Transit Record</div>
                    </div>
                    <div style="background: rgba(255, 255, 255, 0.08); padding: 14px; border-radius: 10px; border-left: 3px solid #00b0ff;">
                        <div style="font-size: 24px; font-weight: 700; color: #00b0ff;">6,800+</div>
                        <div style="font-size: 13px; color: #cfd8dc;">Moves Completed</div>
                    </div>
                    <div style="background: rgba(255, 255, 255, 0.08); padding: 14px; border-radius: 10px; border-left: 3px solid #ff9100;">
                        <div style="font-size: 24px; font-weight: 700; color: #ff9100;">24/7</div>
                        <div style="font-size: 13px; color: #cfd8dc;">Customer Support</div>
                    </div>
                </div>
                <div class="hero-actions" style="display: flex; flex-wrap: wrap; gap: 15px;">
                    <a href="tel:+918409531615" class="btn-primary" style="background: #ffc107; color: #1a252f; padding: 14px 28px; border-radius: 8px; font-weight: 700; font-size: 16px; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; transition: all 0.3s ease;">
                        <i class="fa-solid fa-phone-volume"></i> Call Now: 8409531615
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20moving%20services%20in%20East%20Singhbhum" target="_blank" class="btn-secondary" style="background: #25d366; color: #ffffff; padding: 14px 24px; border-radius: 8px; font-weight: 700; font-size: 16px; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; transition: all 0.3s ease;">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp Quote
                    </a>
                </div>
            </div>

            <!-- Quick Booking Form Container -->
            <div class="hero-form-container" style="flex: 0 1 420px; min-width: 320px; background: #ffffff; padding: 30px; border-radius: 14px; box-shadow: 0 20px 40px rgba(0,0,0,0.25); color: #2c3e50;">
                <h3 style="font-family: 'Outfit', sans-serif; font-size: 22px; font-weight: 700; margin-bottom: 8px; color: #091e3a; text-align: center;">
                    Get Free Quote in East Singhbhum
                </h3>
                <p style="font-size: 13px; color: #7f8c8d; text-align: center; margin-bottom: 20px;">Prompt estimate within 15 minutes</p>
                <form action="<?php echo SITE_BASE_URL; ?>/contact-form-handler.php" method="POST" class="hero-quote-form">
                    <input type="hidden" name="service_city" value="East Singhbhum">
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
                            <input type="text" name="pickup_location" placeholder="e.g. Jamshedpur / Ghatshila" style="width: 100%; padding: 10px 12px; border: 1px solid #ced4da; border-radius: 6px; font-size: 13px; outline: none;">
                        </div>
                        <div>
                            <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 5px; color: #34495e;">Destination</label>
                            <input type="text" name="drop_location" placeholder="e.g. Ranchi / Kolkata / Outstation" style="width: 100%; padding: 10px 12px; border: 1px solid #ced4da; border-radius: 6px; font-size: 13px; outline: none;">
                        </div>
                    </div>
                    <div style="margin-bottom: 16px;">
                        <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 5px; color: #34495e;">Relocation Type</label>
                        <select name="shifting_type" style="width: 100%; padding: 10px 12px; border: 1px solid #ced4da; border-radius: 6px; font-size: 13px; background-color: #fff; outline: none;">
                            <option value="Household Shifting">Household Shifting (1/2/3+ BHK)</option>
                            <option value="Corporate & PSU Transfer">Corporate & PSU Employee Transfer</option>
                            <option value="Car or Two-Wheeler Shipping">Car / Bike Transport</option>
                            <option value="Industrial & Commercial Logistics">Industrial & Commercial Logistics</option>
                            <option value="Warehousing and Storage">Storage & Warehousing</option>
                        </select>
                    </div>
                    <button type="submit" style="width: 100%; background: #e67e22; color: #ffffff; padding: 13px; border: none; border-radius: 7px; font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.3s ease; box-shadow: 0 4px 12px rgba(230,126,34,0.35);">
                        <i class="fa-solid fa-paper-plane"></i> Get Free Moving Estimate
                    </button>
                    <p style="font-size: 11px; color: #95a5a6; text-align: center; margin-top: 10px; margin-bottom: 0;">
                        <i class="fa-solid fa-lock"></i> 100% Privacy Guaranteed. No Spam Calls.
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
                <li><a href="<?php echo SITE_BASE_URL; ?>/" style="color: #091e3a; text-decoration: none;"><i class="fa-solid fa-house"></i> Home</a></li>
                <li>/</li>
                <li><a href="<?php echo SITE_BASE_URL; ?>/#service-areas" style="color: #091e3a; text-decoration: none;">Jharkhand</a></li>
                <li>/</li>
                <li style="color: #091e3a; font-weight: 600;">East Singhbhum District</li>
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
                    <div style="color: #091e3a; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-city" style="color: #e67e22;"></i> The Steel & Mineral Capital of India
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #091e3a; margin-bottom: 20px; line-height: 1.3;">
                        Premier Shifting Solutions Across East Singhbhum (Purvi Singhbhum)
                    </h2>
                    <p style="margin-bottom: 16px;">
                        East Singhbhum district represents the undisputed industrial powerhouse, manufacturing core, and economic engine of Jharkhand. Centered around the world-famous planned steel metropolis of Jamshedpur (Tatanagar) and extending across historic mining and commercial towns like Ghatshila, Jaduguda, Chakulia, Musabani, and Baharagora, East Singhbhum is a region of extraordinary dynamism. Bordering West Bengal to the east and Odisha to the south, the district is seamlessly connected via National Highway 33, National Highway 18, and the high-speed South Eastern Railway mainline.
                    </p>
                    <p style="margin-bottom: 16px;">
                        With multinational industrial titans such as Tata Steel, Tata Motors, Tinplate Company of India, TRF, Timken, and central PSU behemoths like Uranium Corporation of India Limited (UCIL) at Jaduguda and Hindustan Copper Limited (HCL/ICC) at Ghatshila, the district experiences continuous employee transfers. From senior corporate vice presidents and automotive design engineers to central government scientists, defense personnel, doctors, and business leaders, the relocation expectations in East Singhbhum are exceptionally high.
                    </p>
                    <p style="margin-bottom: 16px;">
                        <strong>Shree Ashirwad Packers and Movers</strong> has spent over a decade establishing itself as the most reliable, professional, and efficient moving partner across East Singhbhum. We understand the stringent gate pass regulations of corporate townships in Telco, Kadma, Sonari, Bistupur, and CH Area, as well as the unique logistics required for rural-suburban corridors in Ghatshila and Baharagora.
                    </p>
                    <p style="margin-bottom: 16px;">
                        Our dedicated crews arrive with specialized floor protection sheets, heavy-duty furniture dollies, and customized packaging supplies to ensure that delicate glass dining tables, expensive modular electronics, family heirlooms, and vehicles are relocated without a single scratch.
                    </p>
                    <p>
                        Supported by 100% authentic GST invoices compliant with corporate HR transfer reimbursement standards, live satellite GPS tracking, and comprehensive transit insurance, we deliver an executive-grade relocation experience you can rely on completely.
                    </p>
                </div>
                <div style="flex: 1 1 450px; min-width: 300px;">
                    <!-- Image 1: Responsive container with 3:4 aspect ratio -->
                    <div class="content-media-embed" style="margin: 0 auto; max-width: 420px;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Household Packing and Packaging Materials East Singhbhum Jamshedpur" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-box-open" style="color: #60a5fa; margin-right: 8px;"></i> Executive multi-layer packaging for relocations in East Singhbhum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Core Moving Services in East Singhbhum -->
        <section class="content-section" style="margin-bottom: 50px; background: #ffffff; padding: 40px; border-radius: 14px; border: 1px solid #edf2f7; box-shadow: 0 8px 25px rgba(0,0,0,0.04);">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 40px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #091e3a; margin-bottom: 15px;">
                    Comprehensive Moving Solutions Tailored for East Singhbhum
                </h2>
                <p style="color: #64748b; font-size: 16px;">
                    From high-rise apartments and corporate bungalows to mining townships and industrial logistics, we deliver specialized shifting packages crafted for total satisfaction.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(270px, 1fr)); gap: 25px;">
                <!-- Service 1 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #091e3a; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #e0e7ff; color: #3730a3; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-house-laptop"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #091e3a; margin-bottom: 12px;">Household Shifting</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Complete home relocation for 1BHK, 2BHK, 3BHK flats, and luxury villas across Bistupur, Kadma, Sonari, Sakchi, Telco, Ghatshila, and Jaduguda with careful room setup.
                    </p>
                </div>

                <!-- Service 2 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #e67e22; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #ffedd5; color: #c2410c; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-building-circle-check"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #091e3a; margin-bottom: 12px;">Corporate & PSU Transfers</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Seamless transfer management for Tata Group, UCIL, HCL, banking, and government officers with authentic GST invoices, consignment notes (LR), and itemized inventories.
                    </p>
                </div>

                <!-- Service 3 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #00c853; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #dcfce7; color: #15803d; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-car-side"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #091e3a; margin-bottom: 12px;">Car & Bike Relocation</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Enclosed hydraulic automobile carriers and customized two-wheeler shipping cages ensuring zero-scratch transport from East Singhbhum to any destination across India.
                    </p>
                </div>

                <!-- Service 4 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #0284c7; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #e0f2fe; color: #0369a1; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-boxes-stacked"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #091e3a; margin-bottom: 12px;">Industrial & Office Moving</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Specialized transport for corporate IT server rooms, industrial tools, commercial showrooms, laboratory machinery, and warehouse stock with minimum operational downtime.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 3: High-Grade Packaging Standards -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
                <div style="flex: 1 1 450px; min-width: 300px; order: 2;">
                    <div style="color: #091e3a; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-layer-group" style="color: #00c853;"></i> Multi-Tier Defense System
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #091e3a; margin-bottom: 20px; line-height: 1.3;">
                        Engineered 5-Layer Packaging for Supreme Transit Protection
                    </h2>
                    <p style="margin-bottom: 16px;">
                        Relocating valuable household furnishings, imported kitchen crockery, delicate art pieces, and expensive smart electronics across highways like NH-33 and state corridors requires engineered packaging. Low-cost packing solutions like unpadded cartons or simple newspapers fail under highway vibrations, leading to chipped finishes, broken glass, or dented panels.
                    </p>
                    <p style="margin-bottom: 16px;">
                        At Shree Ashirwad Packers and Movers, we treat packing as an exact science. Our 5-layer defensive packing methodology includes:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 16px; margin: 0 0 25px;">
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #091e3a;">Layer 1 - Scratch-Proof Foam Underlay</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Non-abrasive virgin polyethylene foam film applied directly to polished wooden surfaces, glossy furniture laminates, and TV screens.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #091e3a;">Layer 2 - Multi-Cellular Air Bubble Cushioning</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Thick 80 GSM air bubble wrap absorbs kinetic shocks and road jolts on LED TVs, audio systems, microwave ovens, and glassware.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #091e3a;">Layer 3 - Heavy-Duty Corrugated Angle Guards</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Rigid Kraft edge protectors fixed to corners of dining tables, wardrobes, marble countertops, and cabinets to absorb impact.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #091e3a;">Layer 4 - Sturdy 5-Ply & 7-Ply Cartons</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Heavy-gauge crush-resistant Kraft cartons compartmentalized for delicate dinner sets, books, apparel, and family heirlooms.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #091e3a;">Layer 5 - Moisture & Dust-Proof Thermal Wrap</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Industrial shrink wrap film thermally sealed around cartons and furniture, creating a 100% dust-proof and waterproof outer shield.</p>
                        </div>
                    </div>
                    <p>
                        Our expert carpenters handle the methodical disassembly of double beds, modular wardrobes, and home theater assemblies, bagging and labeling all hardware screws in numbered packets for quick reconstruction at your destination.
                    </p>
                </div>
                <div style="flex: 1 1 450px; min-width: 300px; order: 1;">
                    <!-- Image 2: Responsive container with 3:4 aspect ratio -->
                    <div class="content-media-embed" style="margin: 0 auto; max-width: 420px;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to Door Delivery Truck in East Singhbhum Jamshedpur" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-truck-fast" style="color: #60a5fa; margin-right: 8px;"></i> Modern container fleet providing safe doorstep relocation in East Singhbhum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4: Transparent Cost & Distance Matrix -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 30px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #091e3a; margin-bottom: 12px;">
                    Estimated Shifting Rates Across East Singhbhum
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    Transparent and realistic rate matrix for local and intercity relocation from East Singhbhum. Zero hidden costs.
                </p>
            </div>

            <div style="overflow-x: auto; background: #ffffff; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #e2e8f0; margin-bottom: 25px;">
                <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
                    <thead>
                        <tr style="background: #091e3a; color: #ffffff;">
                            <th style="padding: 16px 20px; border-bottom: 2px solid #cbd5e1;">Destination Route</th>
                            <th style="padding: 16px 20px; border-bottom: 2px solid #cbd5e1;">Distance (Approx.)</th>
                            <th style="padding: 16px 20px; border-bottom: 2px solid #cbd5e1;">1 BHK Shifting</th>
                            <th style="padding: 16px 20px; border-bottom: 2px solid #cbd5e1;">2 BHK Shifting</th>
                            <th style="padding: 16px 20px; border-bottom: 2px solid #cbd5e1;">3 BHK / Villa Shifting</th>
                            <th style="padding: 16px 20px; border-bottom: 2px solid #cbd5e1;">Vehicle (Car/Bike)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #ffffff;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #091e3a;">Local East Singhbhum (Jamshedpur / Ghatshila / Jaduguda)</td>
                            <td style="padding: 14px 20px;">10 - 45 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹4,000 - ₹7,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹7,000 - ₹11,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹11,500 - ₹17,500</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹1,800 - ₹4,000</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #091e3a;">East Singhbhum to Ranchi (State Capital)</td>
                            <td style="padding: 14px 20px;">130 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹8,000 - ₹12,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹12,500 - ₹19,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹19,000 - ₹27,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹3,000 - ₹6,500</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #ffffff;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #091e3a;">East Singhbhum to Kolkata / Kharagpur (WB)</td>
                            <td style="padding: 14px 20px;">250 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹12,000 - ₹17,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹17,000 - ₹25,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹25,000 - ₹35,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹4,500 - ₹9,000</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #091e3a;">East Singhbhum to Bhubaneswar / Cuttack (Odisha)</td>
                            <td style="padding: 14px 20px;">310 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹13,500 - ₹19,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹19,000 - ₹28,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹28,000 - ₹38,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹5,000 - ₹10,000</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #ffffff;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #091e3a;">East Singhbhum to Dhanbad / Bokaro</td>
                            <td style="padding: 14px 20px;">140 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹8,500 - ₹13,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹13,000 - ₹20,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹20,000 - ₹28,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹3,000 - ₹6,500</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #091e3a;">East Singhbhum to Patna (Bihar)</td>
                            <td style="padding: 14px 20px;">450 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹17,000 - ₹24,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹24,000 - ₹34,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹34,000 - ₹46,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹6,000 - ₹12,000</td>
                        </tr>
                        <tr style="background: #ffffff;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #091e3a;">East Singhbhum to Delhi / NCR</td>
                            <td style="padding: 14px 20px;">1,350 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹28,000 - ₹38,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹38,000 - ₹52,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹52,000 - ₹72,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹9,000 - ₹17,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="font-size: 13px; color: #64748b; font-style: italic;">
                * Note: Pricing includes packaging supplies, skilled labour for loading/unloading, and road freight. GST (18% for complete door-to-door shifting or 5% for transport only) and optional comprehensive transit insurance (1.5% of declared goods value) are clearly itemized in the formal estimate.
            </p>
        </section>

        <!-- Section 5: Automobile Transport & Warehousing -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
                <div style="flex: 1 1 450px; min-width: 300px;">
                    <!-- Image 3: Responsive container with 3:4 aspect ratio -->
                    <div class="content-media-embed" style="margin: 0 auto; max-width: 420px;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car and Bike Relocation Carrier East Singhbhum Jamshedpur" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-car-side" style="color: #60a5fa; margin-right: 8px;"></i> Specialized hydraulic automobile carriers serving East Singhbhum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="flex: 1 1 550px; min-width: 320px;">
                    <div style="color: #091e3a; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-car-burst" style="color: #ff9100;"></i> Safe Vehicle Transportation
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #091e3a; margin-bottom: 20px; line-height: 1.3;">
                        Automobile Carrier Logistics & Safe Storage Hubs
                    </h2>
                    <p style="margin-bottom: 16px;">
                        Driving personal cars or motorcycles across congested industrial highways over hundreds of kilometers exposes vehicles to mechanical wear, loose gravel chips, and accidental road hazards. Shree Ashirwad Packers and Movers operates specialized hydraulic enclosed car carriers and two-wheeler shipping cages connecting East Singhbhum directly to all major metropolitan centers.
                    </p>
                    <p style="margin-bottom: 16px;">
                        Each four-wheeler is thoroughly inspected with an exhaustive pre-loading condition report and photographic inventory. Cars are secured onto hydraulic ramps using heavy-duty tyre lashing straps and wheel stoppers. Two-wheelers receive multi-layer bubble wrap on fuel tanks, fairings, and mirrors, and are firmly locked into wooden or steel frames.
                    </p>
                    <p style="margin-bottom: 16px;">
                        Furthermore, if your new apartment or company quarter in Jamshedpur or an outstation city is under renovation, our certified warehousing facilities offer clean, elevated pallet storage, 24/7 CCTV surveillance, and regular pest-control treatments at affordable monthly rental rates.
                    </p>
                    <p>
                        Your valuable possessions remain completely safe, climate-protected, and ready for swift doorstep dispatch.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 6: Step-by-Step Moving Process Checklist -->
        <section class="content-section" style="margin-bottom: 50px; background: #ffffff; padding: 40px; border-radius: 14px; border: 1px solid #edf2f7; box-shadow: 0 8px 25px rgba(0,0,0,0.04);">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 30px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #091e3a; margin-bottom: 12px;">
                    Our Step-by-Step Moving Process
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    A systematic, dependable 6-stage shifting workflow ensuring your relocation in East Singhbhum is completely organized and stress-free.
                </p>
            </div>

            <div style="overflow-x: auto; margin-bottom: 20px;">
                <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
                    <thead>
                        <tr style="background: #173d6b; color: #ffffff;">
                            <th style="padding: 14px 18px; width: 12%;">Stage</th>
                            <th style="padding: 14px 18px; width: 22%;">Action Item</th>
                            <th style="padding: 14px 18px; width: 38%;">Execution Protocol & Details</th>
                            <th style="padding: 14px 18px; width: 28%;">Client Benefit & Assurance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 01</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #091e3a;">Doorstep Survey & Estimate</td>
                            <td style="padding: 14px 18px; color: #475569;">Free physical visit across Jamshedpur or Ghatshila, or rapid video inventory check to evaluate furniture volume, fragile goods, and access elevators.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Accurate fixed-rate quote with zero hidden surcharges on moving day.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 02</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #091e3a;">5-Layer Defensive Packing</td>
                            <td style="padding: 14px 18px; color: #475569;">Careful packing using virgin bubble wrap, corrugated sheets, foam rolls, and heavy 5-ply cartons. Skilled carpenters dismantle beds and wardrobes.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Maximum shock absorption and scratch-free protection for fragile items.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 03</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #091e3a;">Safe Loading & Securing</td>
                            <td style="padding: 14px 18px; color: #475569;">Systematic loading into specialized closed container trucks using heavy-duty belts, cargo nets, and non-slip floor padding.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Prevents cargo shift and vibration damage on highway transit.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 04</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #091e3a;">Live GPS Tracked Transit</td>
                            <td style="padding: 14px 18px; color: #475569;">Smooth highway navigation over NH-33 and state highway corridors with continuous real-time satellite GPS tracking.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Real-time shipment updates and guaranteed punctual arrival schedules.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 05</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #091e3a;">Unloading & Room Placement</td>
                            <td style="padding: 14px 18px; color: #475569;">Unloading cartons and placing them directly into corresponding bedrooms, living rooms, and kitchens as designated by the customer.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Zero manual labor or heavy lifting stress for you and your family.</td>
                        </tr>
                        <tr style="background: #f8fafc;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 06</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #091e3a;">Reassembly & Verification</td>
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
                    <div style="color: #091e3a; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-warehouse" style="color: #0284c7;"></i> Secure Warehouse Facilities
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #091e3a; margin-bottom: 20px; line-height: 1.3;">
                        Secure Warehousing & Storage Facilities in East Singhbhum
                    </h2>
                    <p style="margin-bottom: 16px;">
                        Finding safe, clean, and weatherproof storage during property transitions, delayed possession of company quarters, or interstate transfers can be challenging. Shree Ashirwad Packers and Movers operates dedicated warehousing facilities situated conveniently along the Jamshedpur-Ranchi highway corridor.
                    </p>
                    <p style="margin-bottom: 16px;">
                        Our secure warehouses feature:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 14px; margin: 0 0 20px;">
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-video" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #091e3a;">24/7 Security & CCTV</strong>
                            </div>
                            <p style="margin: 0; font-size: 13px; color: #475569; line-height: 1.5;">24-hour on-duty physical security personnel coupled with continuous closed-circuit television (CCTV) cameras.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-pallet" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #091e3a;">Moisture-Proof Pallets</strong>
                            </div>
                            <p style="margin: 0; font-size: 13px; color: #475569; line-height: 1.5;">Heavy-duty wooden and plastic pallets elevating goods off concrete floors to prevent dampness and water seepage.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-bug-slash" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #091e3a;">Pest & Termite Control</strong>
                            </div>
                            <p style="margin: 0; font-size: 13px; color: #475569; line-height: 1.5;">Scheduled pest control, rodent treatments, and termite repellent spraying to safeguard wooden items and archives.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-calendar-check" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #091e3a;">Flexible Lease Terms</strong>
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
                            <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Commercial Goods and Household Storage Warehouse East Singhbhum" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-warehouse" style="color: #60a5fa; margin-right: 8px;"></i> Pest-controlled, moisture-free storage and warehousing serving East Singhbhum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 8: Localities and Coverage in East Singhbhum District -->
        <section class="content-section" style="margin-bottom: 50px; background: #f8fafc; padding: 40px; border-radius: 14px; border: 1px solid #e2e8f0;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 30px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #091e3a; margin-bottom: 12px;">
                    Major Subdivisions & Localities Covered Across East Singhbhum
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    Our dedicated pickup vehicles and packing crews provide swift doorstep service across all urban sectors, company townships, and rural blocks in East Singhbhum:
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px;">
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #091e3a; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #091e3a; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Jamshedpur City Center</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Bistupur, Sakchi & Northern Town</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #091e3a; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #091e3a; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Telco & Golmuri</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Tata Motors residential colonies</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #091e3a; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #091e3a; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Kadma & Sonari</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Premium residential complexes & airport zone</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #091e3a; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #091e3a; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Ghatshila Sub-Division</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Copper township & educational core</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #091e3a; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #091e3a; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Jaduguda UCIL Colony</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Uranium corporation officers township</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #091e3a; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #091e3a; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Chakulia & Musabani</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Railway trade & agro-industrial belt</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #091e3a; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #091e3a; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Baharagora & Potka</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Odisha & Bengal border highway junction</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #091e3a; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #091e3a; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Mango & Jugsalai</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">High-density commercial & wholesale markets</div>
                </div>
            </div>
        </section>

        <!-- Section 9: Why Choose Shree Ashirwad Packers and Movers -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 35px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #091e3a; margin-bottom: 12px;">
                    Why Clients in East Singhbhum Trust Shree Ashirwad
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    We bring unyielding integrity, deep corporate relocation proficiency, and caring customer support to every moving assignment.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 25px;">
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #00c853; flex-shrink: 0;"><i class="fa-solid fa-shield-halved"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #091e3a; margin-bottom: 6px;">Zero Hidden Charges Guarantee</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">Our written moving quotation includes all packaging supplies, labour, highway tolls, and transport freight. You never pay unexpected surcharges on delivery.</p>
                    </div>
                </div>
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #0284c7; flex-shrink: 0;"><i class="fa-solid fa-file-invoice"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #091e3a; margin-bottom: 6px;">100% Valid Corporate Reimbursement</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">We supply full GST invoices, LR consignment copies, insurance papers, and itemized inventory lists for effortless employer reimbursement.</p>
                    </div>
                </div>
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #e67e22; flex-shrink: 0;"><i class="fa-solid fa-truck-ramp-box"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #091e3a; margin-bottom: 6px;">In-House Experienced Crew</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">Our staff are full-time trained professionals, not daily-wage ad-hoc labourers. They handle your delicate glassware, temple idols, and furniture with supreme respect.</p>
                    </div>
                </div>
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #ec4899; flex-shrink: 0;"><i class="fa-solid fa-satellite"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #091e3a; margin-bottom: 6px;">Active GPS Tracking & 24/7 Desk</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">Track your truck along national highways in real-time. Our dedicated move coordinator is accessible around the clock for milestone updates.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Local Google Map Embed -->
        <div style="margin: 35px 0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58850.123456789!2d86.2029!3d22.8046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f5e3123456789%3A0x7d6a5d4e3c2b1a0!2sEast%20Singhbhum%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Map Location of East Singhbhum Jamshedpur"></iframe>
        </div>

        <!-- Section 10: Frequently Asked Questions (Accordion) -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 35px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #091e3a; margin-bottom: 12px;">
                    Frequently Asked Questions - East Singhbhum Moving
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    Find instant answers to common questions about moving in East Singhbhum, rates, corporate billing, and vehicle shipping:
                </p>
            </div>

            <div class="faq-container" style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #091e3a; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        What relocation services does Shree Ashirwad Packers offer in East Singhbhum?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        We provide comprehensive corporate executive transfers, residential household moving, industrial machinery transport, enclosed car and bike carrier logistics, secure warehousing, and 100% transit insurance across Jamshedpur, Ghatshila, Jaduguda, Chakulia, and all blocks of East Singhbhum district.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #091e3a; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        How much does residential shifting cost in East Singhbhum district?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Local moves within Jamshedpur, Ghatshila, or Jaduguda start from ₹3,500 to ₹6,500 for 1BHK homes. Intercity moves to Ranchi, Kolkata, Bhubaneswar, Patna, or Delhi range from ₹6,500 to ₹35,000 depending on consignment volume, packing tier, and distance.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #091e3a; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        Do you provide relocation services for Tata Steel, Tata Motors, and UCIL employees?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Yes, we are highly experienced in serving corporate and PSU employees from Tata Steel, Tata Motors, Tinplate, UCIL Jaduguda, and HCL Ghatshila with complete GST billing, official consignment notes (LR), and itemized inventory sheets for 100% company reimbursement.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #091e3a; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        How do you protect luxury furniture, modular kitchens, and delicate home electronics?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        We apply our specialized 5-layer defensive packing system consisting of virgin non-abrasive foam wrap, thick 80 GSM air bubble cushioning, heavy corrugated edge protectors, sturdy 5-ply cartons, and waterproof stretch wrap film that prevents all scratches and vibrations.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #091e3a; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        Can you ship cars and premium two-wheelers interstate from East Singhbhum?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Yes, we operate dedicated hydraulic enclosed car carrier trailers and custom two-wheeler wooden crates with wheel clamps, bubble cushioning, GPS tracking, and complete transit insurance coverage to any destination across India.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #091e3a; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        Are your relocation bills valid for corporate and government transfer allowance claims?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Yes, we provide 100% authentic GST-compliant invoices, official consignment notes (LR copy), detailed itemized packing lists, and transit insurance policies accepted by all corporate enterprises, banks, and government ministries.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #091e3a; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        Do you provide short-term and long-term warehousing in East Singhbhum?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Yes, we maintain clean, moisture-proof, 24/7 CCTV-monitored warehousing facilities with elevated pallets and regular pest control for short-term or multi-month household goods and commercial storage.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #091e3a; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        How can I book Packers and Movers in East Singhbhum?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        You can call our 24/7 East Singhbhum customer support desk at +91 8409531615 or +91 9308888746, or complete our online quick quote form on this page to schedule an immediate free doorstep survey.
                    </p>
                </details>
            </div>
        </section>

        <!-- Section: Google My Business Authentic Reviews -->
<?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

<!-- Section 11: Call to Action Banner -->
        <section class="cta-banner" style="background: linear-gradient(135deg, #091e3a 0%, #173d6b 100%); color: #ffffff; padding: 45px 35px; border-radius: 16px; text-align: center; box-shadow: 0 15px 35px rgba(9,30,58,0.25);">
            <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.8vw, 2.5rem); font-weight: 700; margin-bottom: 15px; color: #ffffff;">
                Planning to Relocate in East Singhbhum or Jamshedpur?
            </h2>
            <p style="font-size: 16px; color: #cbd5e1; max-width: 720px; margin: 0 auto 28px; line-height: 1.7;">
                Reach out to Shree Ashirwad Packers and Movers today for a transparent, executive-grade estimate, professional 5-layer packaging, and stress-free transit across India.
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
