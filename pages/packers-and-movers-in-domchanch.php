<?php
/**
 * Packers and Movers in Domchanch - Shree Ashirwad Packers and Movers
 * Website: https://www.shreeashirwadpackers.com
 * Contact: +91 8409531615 / +91 9308888746
 * Office: Serving Domchanch, Jhumri Telaiya & Koderma District, Jharkhand
 */

require_once __DIR__ . '/includes/config.php';

// Page-specific variables
$page_title = "Packers and Movers in Domchanch - 8409531615 | Shree Ashirwad Packers";
$page_description = "Leading packers and movers in Domchanch, Koderma. Safe household shifting, stone industry commercial transport, car & bike carrier, transit insurance. Call 8409531615.";
$page_keywords = "packers and movers in domchanch, movers and packers domchanch koderma, household shifting domchanch, jhumri telaiya packers and movers, car transport domchanch, bike courier domchanch, shree ashirwad packers domchanch";
$canonical_url = SITE_BASE_URL . "/packers-and-movers-in-domchanch";
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
      "name": "Shree Ashirwad Packers and Movers - Domchanch",
      "image": "<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg",
      "@id": "<?php echo $canonical_url; ?>#movingcompany",
      "url": "<?php echo $canonical_url; ?>",
      "telephone": "+918409531615",
      "priceRange": "INR 3500 - 52000",
      "keywords": "<?php echo htmlspecialchars($page_keywords); ?>",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Main Chowk, Koderma-Giridih Road",
        "addressLocality": "Domchanch",
        "addressRegion": "Jharkhand",
        "postalCode": "825418",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 24.4716,
        "longitude": 85.6874
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
        "name": "Koderma Movers",
        "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-koderma"
      },{
        "@type": "ListItem",
        "position": 4,
        "name": "Packers and Movers in Domchanch",
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
          "name": "What relocation services does Shree Ashirwad Packers provide in Domchanch?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We provide residential household shifting, stone crusher and mining commercial equipment moving, government and bank officer transfer relocation, enclosed car carrier transport, bike shipping, secure warehousing, and comprehensive transit insurance."
          }
        },
        {
          "@type": "Question",
          "name": "How much does household shifting cost in Domchanch and Jhumri Telaiya?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Local moves within Domchanch and towards Jhumri Telaiya or Koderma start from ₹3,500 for 1BHK residences. Intercity relocations to Ranchi, Hazaribagh, Patna, or Kolkata range from ₹6,000 to ₹25,000 depending on consignment volume and packing tier."
          }
        },
        {
          "@type": "Question",
          "name": "How do you protect household furniture from quarry dust and vibrations in Domchanch?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We use our specialized 5-layer defensive packing system consisting of non-abrasive foam wrap, thick 80 GSM air bubble cushioning, heavy corrugated corner protectors, sturdy 5-ply cartons, and waterproof shrink film that completely seals out stone quarry dust."
          }
        },
        {
          "@type": "Question",
          "name": "Can you ship personal cars and motorbikes from Domchanch interstate?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we operate dedicated hydraulic enclosed car carrier trailers and custom two-wheeler wooden crates with wheel clamps, bubble cushioning, GPS tracking, and complete transit insurance coverage to any destination in India."
          }
        },
        {
          "@type": "Question",
          "name": "Are your bills valid for public sector and government transfer allowances?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we provide 100% authentic GST-compliant invoices, official consignment notes (LR copy), detailed itemized packing lists, and transit insurance policies accepted by all government departments, PSUs, and banks."
          }
        },
        {
          "@type": "Question",
          "name": "How far in advance should I book my move in Domchanch?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We recommend booking 2 to 4 days ahead for local moves and 5 to 7 days ahead for long-distance moves. However, we also provide urgent same-day or next-day relocation services subject to truck and crew availability."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide temporary storage and warehousing near Domchanch?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we maintain certified clean, moisture-proof, 24/7 CCTV-monitored warehousing facilities with elevated pallets and regular pest control for short-term or multi-month household goods storage."
          }
        },
        {
          "@type": "Question",
          "name": "How can I book Packers and Movers in Domchanch?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can contact our 24/7 customer support desk at +91 8409531615 or +91 9308888746, or complete our online quick quote form on this page to schedule an immediate free doorstep survey."
          }
        }
      ]
    }
    </script>
</head>
<body class="page-template">
<?php include_once __DIR__ . '/includes/header.php'; ?>

<!-- Hero Section -->
<section class="city-hero-section" style="background: linear-gradient(135deg, #102a43 0%, #243b53 50%, #334e68 100%); color: #ffffff; padding: 60px 0 50px; position: relative; overflow: hidden;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <div class="hero-content-wrapper" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 40px;">
            <div class="hero-text-block" style="flex: 1 1 600px; min-width: 320px;">
                <div class="hero-badge" style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255, 193, 7, 0.2); border: 1px solid #ffc107; padding: 6px 14px; border-radius: 30px; font-size: 14px; font-weight: 600; color: #ffc107; margin-bottom: 20px;">
                    <i class="fa-solid fa-truck-moving"></i> Leading Packers and Movers in Domchanch & Koderma Belt
                </div>
                <h1 style="font-family: 'Outfit', sans-serif; font-size: clamp(2.2rem, 4vw, 3.2rem); font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
                    Packers and Movers in Domchanch - <span style="color: #ffc107;">8409531615</span>
                </h1>
                <p style="font-family: 'Inter', sans-serif; font-size: 17px; line-height: 1.7; color: #e0e6ed; margin-bottom: 28px;">
                    Welcome to <strong>Shree Ashirwad Packers and Movers</strong> in Domchanch, your premier moving partner across the industrial, mining, and commercial hub of Koderma district. Internationally celebrated for its rich mica processing heritage and currently recognized as the blue stone and crusher capital of Jharkhand, Domchanch is an energetic town situated just 14 km east of Jhumri Telaiya along State Highway 13. Whether you are relocating your family residence, transferring for a public sector or banking role, or shifting commercial goods and vehicles, our certified moving crew delivers unmatched safety, dust-sealed 5-layer packing, and complete transit insurance.
                </p>
                <div class="hero-stats-row" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(130px, 1fr)); gap: 15px; margin-bottom: 30px;">
                    <div style="background: rgba(255, 255, 255, 0.08); padding: 14px; border-radius: 10px; border-left: 3px solid #ffc107;">
                        <div style="font-size: 24px; font-weight: 700; color: #ffc107;">10+</div>
                        <div style="font-size: 13px; color: #cfd8dc;">Years in Koderma</div>
                    </div>
                    <div style="background: rgba(255, 255, 255, 0.08); padding: 14px; border-radius: 10px; border-left: 3px solid #00c853;">
                        <div style="font-size: 24px; font-weight: 700; color: #00c853;">100%</div>
                        <div style="font-size: 13px; color: #cfd8dc;">Safe Transit Record</div>
                    </div>
                    <div style="background: rgba(255, 255, 255, 0.08); padding: 14px; border-radius: 10px; border-left: 3px solid #00b0ff;">
                        <div style="font-size: 24px; font-weight: 700; color: #00b0ff;">4,200+</div>
                        <div style="font-size: 13px; color: #cfd8dc;">Satisfied Clients</div>
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
                    <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20moving%20services%20in%20Domchanch" target="_blank" class="btn-secondary" style="background: #25d366; color: #ffffff; padding: 14px 24px; border-radius: 8px; font-weight: 700; font-size: 16px; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; transition: all 0.3s ease;">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp Quote
                    </a>
                </div>
            </div>

            <!-- Quick Booking Form Container -->
            <div class="hero-form-container" style="flex: 0 1 420px; min-width: 320px; background: #ffffff; padding: 30px; border-radius: 14px; box-shadow: 0 20px 40px rgba(0,0,0,0.25); color: #2c3e50;">
                <h3 style="font-family: 'Outfit', sans-serif; font-size: 22px; font-weight: 700; margin-bottom: 8px; color: #102a43; text-align: center;">
                    Get Free Quote in Domchanch
                </h3>
                <p style="font-size: 13px; color: #7f8c8d; text-align: center; margin-bottom: 20px;">Fast response in under 15 minutes</p>
                <form action="<?php echo SITE_BASE_URL; ?>/contact-form-handler.php" method="POST" class="hero-quote-form">
                    <input type="hidden" name="service_city" value="Domchanch">
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
                            <input type="text" name="pickup_location" placeholder="e.g. Domchanch / Maheshpur" style="width: 100%; padding: 10px 12px; border: 1px solid #ced4da; border-radius: 6px; font-size: 13px; outline: none;">
                        </div>
                        <div>
                            <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 5px; color: #34495e;">Destination</label>
                            <input type="text" name="drop_location" placeholder="e.g. Telaiya / Ranchi / Patna" style="width: 100%; padding: 10px 12px; border: 1px solid #ced4da; border-radius: 6px; font-size: 13px; outline: none;">
                        </div>
                    </div>
                    <div style="margin-bottom: 16px;">
                        <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 5px; color: #34495e;">Shifting Type</label>
                        <select name="shifting_type" style="width: 100%; padding: 10px 12px; border: 1px solid #ced4da; border-radius: 6px; font-size: 13px; background-color: #fff; outline: none;">
                            <option value="Household Shifting">Household Shifting (1/2/3+ BHK)</option>
                            <option value="Commercial Mining Logistics">Crusher & Commercial Logistics</option>
                            <option value="Car or Bike Carrier">Car / Bike Transport</option>
                            <option value="Government & Bank Transfer">Government & Officer Transfer</option>
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
                <li><a href="<?php echo SITE_BASE_URL; ?>/" style="color: #102a43; text-decoration: none;"><i class="fa-solid fa-house"></i> Home</a></li>
                <li>/</li>
                <li><a href="<?php echo SITE_BASE_URL; ?>/#service-areas" style="color: #102a43; text-decoration: none;">Jharkhand</a></li>
                <li>/</li>
                <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-koderma" style="color: #102a43; text-decoration: none;">Koderma</a></li>
                <li>/</li>
                <li style="color: #102a43; font-weight: 600;">Domchanch</li>
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
                <div style="flex: 1 1 520px; min-width: 320px;">
                    <div style="color: #102a43; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-industry" style="color: #e67e22;"></i> Mining & Industrial Shifting Hub
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #102a43; margin-bottom: 20px; line-height: 1.3;">
                        Professional Shifting Solutions in Domchanch & The Koderma Mica Belt
                    </h2>
                    <p style="margin-bottom: 16px;">
                        Domchanch holds a legendary status in Jharkhand's economic landscape. Globally famous for decades as the premier processing and trading capital for natural mica flakes and sheets, Domchanch has evolved into the thriving blue stone mining and stone crushing nerve center of eastern India. Positioned approximately 14 km east of Jhumri Telaiya along the vital State Highway 13 corridor connecting Koderma with Giridih and Bihar's Nawada district, Domchanch is home to a dynamic business community of quarry owners, industrial traders, banking professionals, educational leaders, and administrative officers.
                    </p>
                    <p style="margin-bottom: 0;">
                        However, the environment in and around Domchanch presents distinct relocation challenges. The omnipresence of fine stone dust, quarry grit, heavy multi-axle dumper traffic, and rural-suburban feeder roads means that ordinary packing materials fail quickly. Moving delicate LED screens, refrigerators, modular furniture, and ancestral crockery here demands industrial-grade sealing and heavy multi-layer cushioning.
                    </p>
                </div>
                <div style="flex: 1 1 420px; min-width: 300px;">
                    <!-- Image 1: Responsive container with 3:4 aspect ratio -->
                    <div class="content-media-embed" style="margin: 0 auto; max-width: 420px;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Household Packing and Packaging Materials Domchanch Koderma" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-box-open" style="color: #60a5fa; margin-right: 8px;"></i> Heavy-duty dust-sealed packing for relocations in Domchanch.</p>
                            </div>
                        </div>
                    </div>
                    <div style="background: #f1f5f9; border-radius: 10px; padding: 12px 16px; margin-top: 12px; display: flex; flex-wrap: wrap; gap: 12px; font-size: 13px; font-weight: 600; color: #1e293b; justify-content: center;">
                        <span><i class="fa-solid fa-shield-halved" style="color: #22c55e;"></i> IBA-Approved Bills</span>
                        <span><i class="fa-solid fa-box" style="color: #e67e22;"></i> 5-Layer Dust Sealing</span>
                        <span><i class="fa-solid fa-truck-fast" style="color: #2563eb;"></i> GPS Container Fleet</span>
                    </div>
                </div>
            </div>

            <!-- Structured Capabilities Cards: Section-wise Organization -->
            <div style="margin-top: 35px; display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
                <div style="background: #ffffff; padding: 22px; border-radius: 10px; border: 1px solid #e2e8f0; border-left: 4px solid #e67e22; box-shadow: 0 4px 12px rgba(0,0,0,0.03);">
                    <h4 style="font-family: 'Outfit', sans-serif; font-size: 17px; font-weight: 700; color: #102a43; margin-bottom: 8px;">
                        <i class="fa-solid fa-shield-virus" style="color: #e67e22; margin-right: 6px;"></i> Dust-Resistant Encapsulation
                    </h4>
                    <p style="font-size: 14px; color: #475569; margin: 0; line-height: 1.65;">
                        <strong>Shree Ashirwad Packers and Movers</strong> has engineered specialized moving protocols tailored specifically for Domchanch. Our dust-resistant shrink wrap encapsulation shields your precious items against airborne dust, while our heavy-duty enclosed container trucks navigate hilly terrain, sharp bypass bends, and state highways with total composure.
                    </p>
                </div>
                <div style="background: #ffffff; padding: 22px; border-radius: 10px; border: 1px solid #e2e8f0; border-left: 4px solid #102a43; box-shadow: 0 4px 12px rgba(0,0,0,0.03);">
                    <h4 style="font-family: 'Outfit', sans-serif; font-size: 17px; font-weight: 700; color: #102a43; margin-bottom: 8px;">
                        <i class="fa-solid fa-map-location-dot" style="color: #102a43; margin-right: 6px;"></i> Local & Outstation Coverage
                    </h4>
                    <p style="font-size: 14px; color: #475569; margin: 0; line-height: 1.65;">
                        Whether moving locally between Domchanch Chowk, Maheshpur, Dhab Road, and Jhumri Telaiya, or relocating outstation to Ranchi, Patna, Kolkata, or Delhi, our experienced team provides end-to-end relocation management backed by transparent written agreements, zero hidden charges, and comprehensive transit insurance.
                    </p>
                </div>
                <div style="background: #ffffff; padding: 22px; border-radius: 10px; border: 1px solid #e2e8f0; border-left: 4px solid #22c55e; box-shadow: 0 4px 12px rgba(0,0,0,0.03);">
                    <h4 style="font-family: 'Outfit', sans-serif; font-size: 17px; font-weight: 700; color: #102a43; margin-bottom: 8px;">
                        <i class="fa-solid fa-couch" style="color: #22c55e; margin-right: 6px;"></i> Skilled Carpenter & Room Placement
                    </h4>
                    <p style="font-size: 14px; color: #475569; margin: 0; line-height: 1.65;">
                        From professional furniture dismantling by skilled carpenters to careful room placement at your destination, we guarantee an effortless, punctual, and completely stress-free shifting experience with dedicated supervisor oversight.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 2: Core Moving Services in Domchanch -->
        <section class="content-section" style="margin-bottom: 50px; background: #ffffff; padding: 40px; border-radius: 14px; border: 1px solid #edf2f7; box-shadow: 0 8px 25px rgba(0,0,0,0.04);">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 40px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #102a43; margin-bottom: 15px;">
                    Specialized Relocation Services Tailored for Domchanch
                </h2>
                <p style="color: #64748b; font-size: 16px;">
                    Comprehensive shifting solutions designed to cater to industrial entrepreneurs, government officers, and families across Domchanch and Koderma district.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(270px, 1fr)); gap: 25px;">
                <!-- Service 1 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #102a43; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #e0e7ff; color: #3730a3; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-house-chimney"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #102a43; margin-bottom: 12px;">Household Shifting</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Complete residential moving for 1BHK, 2BHK, 3BHK flats, duplexes, and bungalows across Domchanch Chowk, Maheshpur, and Dhab Road with dust-sealed packaging and setup.
                    </p>
                </div>

                <!-- Service 2 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #e67e22; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #ffedd5; color: #c2410c; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #102a43; margin-bottom: 12px;">Government & Bank Transfers</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Hassle-free relocation for banking officers, administrative executives, teachers, and mining department inspectors with official GST bills and LR consignment receipts.
                    </p>
                </div>

                <!-- Service 3 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #00c853; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #dcfce7; color: #15803d; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-truck-pickup"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #102a43; margin-bottom: 12px;">Car & Bike Relocation</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Enclosed automobile carrier trailers and custom hydraulic motorcycle cages ensuring zero scratches during transit from Domchanch to major cities nationwide.
                    </p>
                </div>

                <!-- Service 4 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #0284c7; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #e0f2fe; color: #0369a1; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-gears"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #102a43; margin-bottom: 12px;">Crusher & Commercial Logistics</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Safe transportation of mining spare parts, hardware inventories, electronic showrooms, and office setups along the Koderma-Giridih State Highway corridor.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 3: Dust-Sealed 5-Layer Defensive Packaging Standard -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
                <div style="flex: 1 1 450px; min-width: 300px; order: 2;">
                    <div style="color: #102a43; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-shield-halved" style="color: #00c853;"></i> Engineered Protection
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #102a43; margin-bottom: 20px; line-height: 1.3;">
                        Engineered 5-Layer Dust-Sealed Packaging for Heavy Industrial Corridors
                    </h2>
                    <p style="margin-bottom: 16px;">
                        The operational environment of Domchanch is defined by stone crushers, mineral transport trailers, and active mining routes. Standard cardboard boxes without plastic barrier sealing permit abrasive dust particles to seep inside, scratching high-gloss television panels, sofa upholstery, and delicate wooden furniture finishes.
                    </p>
                    <p style="margin-bottom: 16px;">
                        Shree Ashirwad Packers and Movers implements a rigorous 5-layer defensive packing methodology tailored for this harsh environment:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 16px; margin: 0 0 25px;">
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #102a43;">Layer 1 - Scratch-Proof Foam Underlay</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">High-density polyethylene foam film wrapped directly against polished wood, glass mirrors, and metallic appliances to prevent friction and electrostatic charges.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #102a43;">Layer 2 - Heavy 80 GSM Bubble Cushioning</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Multi-pocket air bubble cushioning enclosing smart TVs, washing machines, refrigerators, and delicate crockery to absorb road bumps.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #102a43;">Layer 3 - Heavy-Duty Corrugated Angle Guards</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Rigid Kraft corner caps and edge protectors secured along dining table borders, wardrobes, and cabinet edges.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #102a43;">Layer 4 - Sturdy 5-Ply & 7-Ply Cartons</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Heavy-gauge corrugated boxes partitioned systematically for kitchen appliances, clothing, books, and valuable articles.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #102a43;">Layer 5 - Complete Dust & Moisture Thermal Wrap</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Industrial shrink wrap film sealed completely over each carton and furniture unit, making your goods 100% dust-proof and waterproof.</p>
                        </div>
                    </div>
                    <p>
                        Our specialized carpenters handle disassembly and reassembly of modular wardrobes, double beds, and dining sets to ensure perfect alignment in your new premises.
                    </p>
                </div>
                <div style="flex: 1 1 450px; min-width: 300px; order: 1;">
                    <!-- Image 2: Responsive container with 3:4 aspect ratio -->
                    <div class="content-media-embed" style="margin: 0 auto; max-width: 420px;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to Door Delivery Truck in Domchanch Koderma" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-truck-fast" style="color: #60a5fa; margin-right: 8px;"></i> Enclosed container vehicles delivering doorstep moving services across Domchanch.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4: Transparent Cost & Distance Table -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 30px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #102a43; margin-bottom: 12px;">
                    Estimated Relocation Charges from Domchanch
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    Transparent and realistic rate matrix for local and intercity moving from Domchanch. Zero hidden surprises.
                </p>
            </div>

            <div style="overflow-x: auto; background: #ffffff; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #e2e8f0; margin-bottom: 25px;">
                <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
                    <thead>
                        <tr style="background: #102a43; color: #ffffff;">
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
                            <td style="padding: 14px 20px; font-weight: 600; color: #102a43;">Domchanch Local / Jhumri Telaiya / Koderma</td>
                            <td style="padding: 14px 20px;">12 - 25 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹3,500 - ₹6,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹6,500 - ₹10,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹10,500 - ₹16,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹1,500 - ₹3,500</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #102a43;">Domchanch to Hazaribagh Town</td>
                            <td style="padding: 14px 20px;">75 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹6,500 - ₹9,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹9,500 - ₹15,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹15,000 - ₹21,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹2,500 - ₹5,000</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #ffffff;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #102a43;">Domchanch to Giridih Headquarter</td>
                            <td style="padding: 14px 20px;">90 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹7,000 - ₹11,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹11,000 - ₹17,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹17,000 - ₹24,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹2,800 - ₹5,500</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #102a43;">Domchanch to Gaya / Bodh Gaya (Bihar)</td>
                            <td style="padding: 14px 20px;">95 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹7,500 - ₹11,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹11,500 - ₹18,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹18,000 - ₹25,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹3,000 - ₹6,000</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #ffffff;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #102a43;">Domchanch to Ranchi (Capital)</td>
                            <td style="padding: 14px 20px;">165 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹9,500 - ₹15,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹15,000 - ₹23,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹23,000 - ₹32,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹3,500 - ₹7,500</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #102a43;">Domchanch to Patna (Bihar)</td>
                            <td style="padding: 14px 20px;">190 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹11,000 - ₹16,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹16,500 - ₹25,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹25,000 - ₹35,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹4,000 - ₹8,500</td>
                        </tr>
                        <tr style="background: #ffffff;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #102a43;">Domchanch to Kolkata (WB)</td>
                            <td style="padding: 14px 20px;">410 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹16,500 - ₹24,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹24,000 - ₹35,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹35,000 - ₹48,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹6,000 - ₹12,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="font-size: 13px; color: #64748b; font-style: italic;">
                * Note: Pricing includes packaging materials, skilled loading and unloading labor, and road transit freight. GST (18% for complete door-to-door shifting or 5% for transport only) and optional comprehensive transit insurance (1.5% of declared goods value) are clearly itemized in the formal estimate.
            </p>
        </section>

        <!-- Section 5: Automobile Transport & Warehousing -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
                <div style="flex: 1 1 450px; min-width: 300px;">
                    <!-- Image 3: Responsive container with 3:4 aspect ratio -->
                    <div class="content-media-embed" style="margin: 0 auto; max-width: 420px;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car and Bike Relocation Carrier in Domchanch Koderma" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-car-side" style="color: #60a5fa; margin-right: 8px;"></i> Specialized hydraulic automobile carrier trucks serving Domchanch.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="flex: 1 1 550px; min-width: 320px;">
                    <div style="color: #102a43; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-car" style="color: #ff9100;"></i> Safe Vehicle Transportation
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #102a43; margin-bottom: 20px; line-height: 1.3;">
                        Automobile Carrier Logistics & Safe Storage Hubs
                    </h2>
                    <p style="margin-bottom: 16px;">
                        Self-driving your four-wheeler or motorcycle along heavy truck routes and winding state highways exposes vehicles to stone flying damage, paint chipping, and high mechanical fatigue. Shree Ashirwad Packers and Movers operates dedicated enclosed automobile carrier trucks equipped with hydraulic ramps, non-abrasive tyre lashings, and interior padding.
                    </p>
                    <p style="margin-bottom: 16px;">
                        Each automobile undergoes an exhaustive pre-loading condition report with photographs. Two-wheelers receive multi-layer bubble wrap around headlights, fuel tanks, and rear view mirrors, and are secured inside sturdy wooden or steel cages with wheel chocks.
                    </p>
                    <p style="margin-bottom: 16px;">
                        Furthermore, if your new bungalow or apartment in Koderma, Ranchi, or other destinations is undergoing renovation, our secure warehousing facility provides clean, moisture-controlled, 24/7 CCTV-monitored storage bays with elevated wooden pallets at highly economical monthly rental tariffs.
                    </p>
                    <p>
                        Your belongings remain completely protected from stone dust, moisture, and pests until you are ready for final doorstep delivery.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 6: Step-by-Step Moving Process Checklist -->
        <section class="content-section" style="margin-bottom: 50px; background: #ffffff; padding: 40px; border-radius: 14px; border: 1px solid #edf2f7; box-shadow: 0 8px 25px rgba(0,0,0,0.04);">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 30px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #102a43; margin-bottom: 12px;">
                    Our Step-by-Step Relocation Workflow
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    A dependable, transparent 6-stage shifting process ensuring your relocation in Domchanch is executed smoothly from start to finish.
                </p>
            </div>

            <div style="overflow-x: auto; margin-bottom: 20px;">
                <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
                    <thead>
                        <tr style="background: #243b53; color: #ffffff;">
                            <th style="padding: 14px 18px; width: 12%;">Stage</th>
                            <th style="padding: 14px 18px; width: 22%;">Action Item</th>
                            <th style="padding: 14px 18px; width: 38%;">Execution Protocol & Details</th>
                            <th style="padding: 14px 18px; width: 28%;">Client Benefit & Assurance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 01</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #102a43;">Free On-Site Survey</td>
                            <td style="padding: 14px 18px; color: #475569;">Doorstep survey in Domchanch or quick digital video evaluation to assess household volume, heavy almirahs, and access corridors.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Clear written quote with zero unexpected costs on moving day.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 02</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #102a43;">5-Layer Defensive Packing</td>
                            <td style="padding: 14px 18px; color: #475569;">Application of virgin bubble wrap, corrugated sheets, foam film, and heavy 5-ply cartons. Skilled carpenters dismantle beds and wardrobes.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Complete protection against scratches, quarry dust, and shocks.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 03</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #102a43;">Scientific Vehicle Loading</td>
                            <td style="padding: 14px 18px; color: #475569;">Careful loading into specialized closed container trucks using heavy-duty lifting belts, hydraulic tailgates, and non-slip floor padding.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Eliminates load shifting or friction during transit along SH-13.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 04</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #102a43;">Live GPS Highway Transit</td>
                            <td style="padding: 14px 18px; color: #475569;">Highway navigation by experienced commercial drivers with round-the-clock live satellite GPS tracking.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Real-time location updates and guaranteed timely delivery.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 05</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #102a43;">Unloading & Room Placement</td>
                            <td style="padding: 14px 18px; color: #475569;">Unloading at your new destination, carrying labeled boxes directly to designated bedrooms, living halls, and kitchens.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Saves you hours of exhausting manual labor and heavy lifting.</td>
                        </tr>
                        <tr style="background: #f8fafc;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 06</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #102a43;">Reassembly & Verification</td>
                            <td style="padding: 14px 18px; color: #475569;">Reassembling beds, wardrobes, and modular units; joint physical inspection against the itemized inventory sheet before final sign-off.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">100% complete satisfaction verified prior to crew departure.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Section 7: Warehousing & Storage Solutions -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
                <div style="flex: 1 1 550px; min-width: 320px;">
                    <div style="color: #102a43; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-warehouse" style="color: #0284c7;"></i> Secure Warehouse Facilities
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #102a43; margin-bottom: 20px; line-height: 1.3;">
                        Secure Warehousing & Household Storage Near Domchanch
                    </h2>
                    <p style="margin-bottom: 16px;">
                        Whether transitioning between residential leases, renovating your ancestral home in Domchanch, or taking up temporary outstation project postings, storing your household furniture and commercial inventory securely can be a major headache. Shree Ashirwad Packers and Movers operates dedicated warehousing facilities situated along the Koderma-Ranchi transit line.
                    </p>
                    <p style="margin-bottom: 16px;">
                        Our secure warehouses feature:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 14px; margin: 0 0 20px;">
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-video" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #102a43;">24/7 Security & CCTV</strong>
                            </div>
                            <p style="margin: 0; font-size: 13px; color: #475569; line-height: 1.5;">24/7 CCTV surveillance cameras with round-the-clock physical security guards and entry logging.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-pallet" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #102a43;">Moisture-Proof Pallets</strong>
                            </div>
                            <p style="margin: 0; font-size: 13px; color: #475569; line-height: 1.5;">Heavy-duty elevated moisture-proof pallets keeping all cartons, mattresses, and furniture off the floor.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-shield-virus" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #102a43;">Pest & Termite Control</strong>
                            </div>
                            <p style="margin: 0; font-size: 13px; color: #475569; line-height: 1.5;">Scheduled pest control, rodent treatments, and termite repellent spraying to safeguard wooden items and archives.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-calendar-check" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #102a43;">Flexible Lease Terms</strong>
                            </div>
                            <p style="margin: 0; font-size: 13px; color: #475569; line-height: 1.5;">Flexible daily, monthly, or multi-month leasing terms with quick inventory access and doorstep retrieval.</p>
                        </div>
                    </div>
                    <p>
                        Store your most valuable belongings with complete peace of mind knowing they are guarded by industry-leading security protocols.
                    </p>
                </div>
                <div style="flex: 1 1 450px; min-width: 300px;">
                    <!-- Image 4: Responsive container with 3:4 aspect ratio -->
                    <div class="content-media-embed" style="margin: 0 auto; max-width: 420px;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Commercial Goods and Household Storage Warehouse Domchanch" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-warehouse" style="color: #60a5fa; margin-right: 8px;"></i> Clean, moisture-controlled storage and warehousing serving Domchanch.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 8: Localities and Coverage in Domchanch Block -->
        <section class="content-section" style="margin-bottom: 50px; background: #f8fafc; padding: 40px; border-radius: 14px; border: 1px solid #e2e8f0;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 30px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #102a43; margin-bottom: 12px;">
                    Localities & Vicinities Covered Across Domchanch Block
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    Our dedicated pickup teams and container vehicles provide swift doorstep service across all residential areas, market centers, and industrial clusters in Domchanch:
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px;">
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #102a43; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #102a43; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Domchanch Main Chowk</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Central market & commercial avenue</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #102a43; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #102a43; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Maheshpur Road</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Residential clusters & schools</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #102a43; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #102a43; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Dhab Road Sector</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Mica processing & rural links</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #102a43; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #102a43; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Crusher Mandi Zone</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Stone quarry & machinery transport</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #102a43; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #102a43; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Bagdo & Bangakhalar</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Suburban residential settlements</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #102a43; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #102a43; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Masnodih & Nawadih</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Agricultural and town border zones</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #102a43; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #102a43; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Koderma-Telaiya Road</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Highway corridor towards district HQ</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #102a43; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #102a43; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Gawan-Giridih Link</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">SH-13 interstate connection</div>
                </div>
            </div>
        </section>

        <!-- Section 9: Why Choose Shree Ashirwad Packers and Movers -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 35px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #102a43; margin-bottom: 12px;">
                    Why Families & Businesses in Domchanch Choose Us
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    We bring unyielding commitment to safety, tailored dust protection, and honest pricing to every moving assignment.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 25px;">
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #00c853; flex-shrink: 0;"><i class="fa-solid fa-circle-check"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #102a43; margin-bottom: 6px;">Zero Hidden Charges Guarantee</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">Our written moving quotation includes all packaging supplies, skilled labour, highway tolls, and transport freight. You never face surprise costs.</p>
                    </div>
                </div>
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #0284c7; flex-shrink: 0;"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #102a43; margin-bottom: 6px;">100% Genuine Reimbursement Bills</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">We provide GST invoices, LR consignment copies, insurance certificates, and itemized inventory lists for effortless employer reimbursement.</p>
                    </div>
                </div>
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #e67e22; flex-shrink: 0;"><i class="fa-solid fa-boxes-packing"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #102a43; margin-bottom: 6px;">Permanent Skilled Packing Crew</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">Our staff are full-time trained professionals, not daily-wage labourers. They handle your delicate glassware, temple idols, and furniture with supreme care.</p>
                    </div>
                </div>
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #ec4899; flex-shrink: 0;"><i class="fa-solid fa-satellite-dish"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #102a43; margin-bottom: 6px;">Live GPS Tracking & 24/7 Helpline</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">Track your transport vehicle in real-time. Our dedicated move coordinator is accessible 24/7 for milestone updates and complete support.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Local Google Map Embed -->
        <div style="margin: 35px 0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58100.123456789!2d85.6900!3d24.4700!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f375123456789%3A0x7d6a5d4e3c2b1a0!2sDomchanch%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Map Location of Domchanch Koderma"></iframe>
        </div>

        <!-- Section 10: Frequently Asked Questions (Accordion) -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 35px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #102a43; margin-bottom: 12px;">
                    Frequently Asked Questions - Domchanch Movers
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    Answers to common questions regarding household shifting, rates, vehicle shipping, and storage in Domchanch:
                </p>
            </div>

            <div class="faq-container" style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #102a43; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        What relocation services does Shree Ashirwad Packers provide in Domchanch?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        We provide residential household shifting, stone crusher and mining commercial equipment moving, government and bank officer transfer relocation, enclosed car carrier transport, bike shipping, secure warehousing, and comprehensive transit insurance.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #102a43; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        How much does household shifting cost in Domchanch and Jhumri Telaiya?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Local moves within Domchanch and towards Jhumri Telaiya or Koderma start from ₹3,500 for 1BHK residences. Intercity relocations to Ranchi, Hazaribagh, Patna, or Kolkata range from ₹6,000 to ₹25,000 depending on consignment volume and packing tier.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #102a43; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        How do you protect household furniture from quarry dust and vibrations in Domchanch?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        We use our specialized 5-layer defensive packing system consisting of non-abrasive foam wrap, thick 80 GSM air bubble cushioning, heavy corrugated corner protectors, sturdy 5-ply cartons, and waterproof shrink film that completely seals out stone quarry dust.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #102a43; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        Can you ship personal cars and motorbikes from Domchanch interstate?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Yes, we operate dedicated hydraulic enclosed car carrier trailers and custom two-wheeler wooden crates with wheel clamps, bubble cushioning, GPS tracking, and complete transit insurance coverage to any destination in India.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #102a43; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        Are your bills valid for public sector and government transfer allowances?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Yes, we provide 100% authentic GST-compliant invoices, official consignment notes (LR copy), detailed itemized packing lists, and transit insurance policies accepted by all government departments, PSUs, and banks.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #102a43; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        How far in advance should I book my move in Domchanch?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        We recommend booking 2 to 4 days ahead for local moves and 5 to 7 days ahead for long-distance moves. However, we also provide urgent same-day or next-day relocation services subject to truck and crew availability.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #102a43; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        Do you provide temporary storage and warehousing near Domchanch?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Yes, we maintain certified clean, moisture-proof, 24/7 CCTV-monitored warehousing facilities with elevated pallets and regular pest control for short-term or multi-month household goods storage.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #102a43; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        How can I book Packers and Movers in Domchanch?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        You can contact our 24/7 customer support desk at +91 8409531615 or +91 9308888746, or complete our online quick quote form on this page to schedule an immediate free doorstep survey.
                    </p>
                </details>
            </div>
        </section>

        <!-- Section: Google My Business Authentic Reviews -->
        <?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

        <!-- Section 11: Call to Action Banner -->
        <section class="cta-banner" style="background: linear-gradient(135deg, #102a43 0%, #243b53 100%); color: #ffffff; padding: 45px 35px; border-radius: 16px; text-align: center; box-shadow: 0 15px 35px rgba(16,42,67,0.25);">
            <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.8vw, 2.5rem); font-weight: 700; margin-bottom: 15px; color: #ffffff;">
                Planning to Move Home or Office in Domchanch?
            </h2>
            <p style="font-size: 16px; color: #cbd5e1; max-width: 720px; margin: 0 auto 28px; line-height: 1.7;">
                Contact Shree Ashirwad Packers and Movers today for a transparent, budget-friendly moving estimate, dust-sealed 5-layer packaging, and insured relocation services.
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
