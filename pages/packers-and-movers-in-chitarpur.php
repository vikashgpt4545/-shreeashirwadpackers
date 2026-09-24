<?php
/**
 * Packers and Movers in Chitarpur - Shree Ashirwad Packers and Movers
 * Website: https://www.shreeashirwadpackers.com
 * Contact: +91 8409531615 / +91 9308888746
 * Office: Serving Chitarpur, Rajrappa, Ramgarh District, Jharkhand
 */

require_once __DIR__ . '/includes/config.php';

// Page-specific variables
$page_title = "Packers and Movers in Chitarpur - 8409531615 | Shree Ashirwad Packers";
$page_description = "Reputed packers and movers in Chitarpur, Ramgarh. Safe home relocation, Rajrappa temple corridor moves, CCL employee transfers, car and bike shifting with full transit insurance. Call 8409531615.";
$page_keywords = "packers and movers in chitarpur, movers and packers chitarpur ramgarh, household shifting chitarpur, rajrappa packers and movers, car transport chitarpur, bike courier chitarpur, shree ashirwad packers chitarpur";
$canonical_url = SITE_BASE_URL . "/packers-and-movers-in-chitarpur";
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
      "name": "Shree Ashirwad Packers and Movers - Chitarpur",
      "image": "<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg",
      "@id": "<?php echo $canonical_url; ?>#movingcompany",
      "url": "<?php echo $canonical_url; ?>",
      "telephone": "+918409531615",
      "priceRange": "INR 3500 - 52000",
        "keywords": "packers and movers in chitarpur, movers and packers chitarpur ramgarh, household shifting chitarpur, rajrappa packers and movers, car transport chitarpur, bike courier chitarpur, shree ashirwad packers chitarpur",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Main Road, Near Rajrappa Mor, Chitarpur",
        "addressLocality": "Chitarpur",
        "addressRegion": "Jharkhand",
        "postalCode": "825101",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 23.5786,
        "longitude": 85.6542
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
        "name": "Ramgarh Movers",
        "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ramgarh"
      },{
        "@type": "ListItem",
        "position": 4,
        "name": "Packers and Movers in Chitarpur",
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
          "name": "What relocation services does Shree Ashirwad Packers offer in Chitarpur?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We provide end-to-end relocation services in Chitarpur including residential home shifting, Central Coalfields Limited (CCL) employee transfers, office moving, car and bike carrier transport, premium multi-layer packing, secure warehousing, and complete transit insurance."
          }
        },
        {
          "@type": "Question",
          "name": "How much does local household shifting cost in Chitarpur?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Local household relocation within Chitarpur and neighbouring Ramgarh or Rajrappa areas typically ranges between ₹3,500 and ₹12,000 depending on house size (1BHK to 3BHK), packing materials used, floor level, and elevator availability."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide relocation services to and from Rajrappa Project and CCL colonies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we regularly serve Rajrappa Project, CCL colonies, Murubanda, Lari, and adjoining mining and residential belts with full documentation, packing lists, and GST invoices suitable for company transfer allowances."
          }
        },
        {
          "@type": "Question",
          "name": "How do you protect delicate crockery, glassware, and electronics during shifting?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We apply 5-layer protective packing comprising thick polyethylene bubble wrap, corrugated sheets, stretch wrap film, edge guards, and heavy-duty 5-ply cartons. Fragile goods are clearly marked and secured in dedicated soft compartments."
          }
        },
        {
          "@type": "Question",
          "name": "Can you safely transport cars and two-wheelers from Chitarpur to other Indian states?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we provide enclosed container car carriers and customized hydraulic bike stands for two-wheelers with wheel chocks, bubble wrapping, GPS tracking, and comprehensive transit insurance to destinations across India."
          }
        },
        {
          "@type": "Question",
          "name": "Are there any hidden charges in your moving quote for Chitarpur?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No, our estimates are 100% transparent and all-inclusive. All charges covering labour, packaging materials, vehicle freight, loading, unloading, and applicable toll taxes are itemized clearly prior to booking."
          }
        },
        {
          "@type": "Question",
          "name": "How far in advance should I schedule my moving date in Chitarpur?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We recommend booking 2 to 4 days in advance for local moves and 4 to 7 days ahead for intercity or long-distance moves. However, we also cater to emergency or last-minute relocations subject to vehicle and crew availability."
          }
        },
        {
          "@type": "Question",
          "name": "How can I book Packers and Movers in Chitarpur?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can contact our Chitarpur support desk directly at +91 8409531615 or +91 9308888746, or submit our online quick quote form on this page to schedule an immediate free survey."
          }
        }
      ]
    }
    </script>
</head>
<body class="page-template">
<?php include_once __DIR__ . '/includes/header.php'; ?>

<!-- Hero Section -->
<section class="city-hero-section" style="background: linear-gradient(135deg, #0d2b45 0%, #203c56 50%, #544e68 100%); color: #ffffff; padding: 60px 0 50px; position: relative; overflow: hidden;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <div class="hero-content-wrapper" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 40px;">
            <div class="hero-text-block" style="flex: 1 1 600px; min-width: 320px;">
                <div class="hero-badge" style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255, 193, 7, 0.2); border: 1px solid #ffc107; padding: 6px 14px; border-radius: 30px; font-size: 14px; font-weight: 600; color: #ffc107; margin-bottom: 20px;">
                    <i class="fa-solid fa-truck-fast"></i> Leading Relocation Company in Chitarpur & Rajrappa Belt
                </div>
                <h1 style="font-family: 'Outfit', sans-serif; font-size: clamp(2.2rem, 4vw, 3.2rem); font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
                    Packers and Movers in Chitarpur - <span style="color: #ffc107;">8409531615</span>
                </h1>
                <p style="font-family: 'Inter', sans-serif; font-size: 17px; line-height: 1.7; color: #e0e6ed; margin-bottom: 28px;">
                    Welcome to <strong>Shree Ashirwad Packers and Movers</strong> in Chitarpur, your premier moving partner across the Ramgarh district industrial and pilgrimage corridor. Situated on National Highway 23 connecting Ramgarh Cantonment to Gola, Bokaro Steel City, and the sacred temple hub of Rajrappa at the confluence of Damodar and Bhairavi rivers, Chitarpur demands dependable, punctual, and damage-proof shifting services. Whether you are an employee of Central Coalfields Limited (CCL) at Rajrappa Area, a commercial trader in Chitarpur Bazar, or a family moving interstate, our certified crew guarantees zero-stress relocations backed by comprehensive transit insurance.
                </p>
                <div class="hero-stats-row" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(130px, 1fr)); gap: 15px; margin-bottom: 30px;">
                    <div style="background: rgba(255, 255, 255, 0.08); padding: 14px; border-radius: 10px; border-left: 3px solid #ffc107;">
                        <div style="font-size: 24px; font-weight: 700; color: #ffc107;">10+</div>
                        <div style="font-size: 13px; color: #cfd8dc;">Years in Jharkhand</div>
                    </div>
                    <div style="background: rgba(255, 255, 255, 0.08); padding: 14px; border-radius: 10px; border-left: 3px solid #00c853;">
                        <div style="font-size: 24px; font-weight: 700; color: #00c853;">100%</div>
                        <div style="font-size: 13px; color: #cfd8dc;">Safe Transit Record</div>
                    </div>
                    <div style="background: rgba(255, 255, 255, 0.08); padding: 14px; border-radius: 10px; border-left: 3px solid #00b0ff;">
                        <div style="font-size: 24px; font-weight: 700; color: #00b0ff;">4,800+</div>
                        <div style="font-size: 13px; color: #cfd8dc;">Successful Moves</div>
                    </div>
                    <div style="background: rgba(255, 255, 255, 0.08); padding: 14px; border-radius: 10px; border-left: 3px solid #ff9100;">
                        <div style="font-size: 24px; font-weight: 700; color: #ff9100;">24/7</div>
                        <div style="font-size: 13px; color: #cfd8dc;">Helpline Support</div>
                    </div>
                </div>
                <div class="hero-actions" style="display: flex; flex-wrap: wrap; gap: 15px;">
                    <a href="tel:+918409531615" class="btn-primary" style="background: #ffc107; color: #1a252f; padding: 14px 28px; border-radius: 8px; font-weight: 700; font-size: 16px; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; transition: all 0.3s ease;">
                        <i class="fa-solid fa-phone-volume"></i> Call Now: 8409531615
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20moving%20services%20in%20Chitarpur" target="_blank" class="btn-secondary" style="background: #25d366; color: #ffffff; padding: 14px 24px; border-radius: 8px; font-weight: 700; font-size: 16px; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; transition: all 0.3s ease;">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp Quote
                    </a>
                </div>
            </div>

            <!-- Quick Booking Form Container -->
            <div class="hero-form-container" style="flex: 0 1 420px; min-width: 320px; background: #ffffff; padding: 30px; border-radius: 14px; box-shadow: 0 20px 40px rgba(0,0,0,0.25); color: #2c3e50;">
                <h3 style="font-family: 'Outfit', sans-serif; font-size: 22px; font-weight: 700; margin-bottom: 8px; color: #0d2b45; text-align: center;">
                    Get Free Quote in Chitarpur
                </h3>
                <p style="font-size: 13px; color: #7f8c8d; text-align: center; margin-bottom: 20px;">Quick response in under 15 minutes</p>
                <form action="<?php echo SITE_BASE_URL; ?>/contact-form-handler.php" method="POST" class="hero-quote-form">
                    <input type="hidden" name="service_city" value="Chitarpur">
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
                            <input type="text" name="pickup_location" placeholder="e.g. Chitarpur / Murubanda" style="width: 100%; padding: 10px 12px; border: 1px solid #ced4da; border-radius: 6px; font-size: 13px; outline: none;">
                        </div>
                        <div>
                            <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 5px; color: #34495e;">Drop Destination</label>
                            <input type="text" name="drop_location" placeholder="e.g. Ranchi / Bokaro / Outstation" style="width: 100%; padding: 10px 12px; border: 1px solid #ced4da; border-radius: 6px; font-size: 13px; outline: none;">
                        </div>
                    </div>
                    <div style="margin-bottom: 16px;">
                        <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 5px; color: #34495e;">Shifting Type</label>
                        <select name="shifting_type" style="width: 100%; padding: 10px 12px; border: 1px solid #ced4da; border-radius: 6px; font-size: 13px; background-color: #fff; outline: none;">
                            <option value="Household Shifting">Household Shifting (1/2/3+ BHK)</option>
                            <option value="CCL / Government Transfer">CCL / Government Officer Transfer</option>
                            <option value="Bike or Car Transport">Car / Bike Transport</option>
                            <option value="Commercial / Shop Relocation">Commercial / Shop Relocation</option>
                            <option value="Warehousing and Storage">Warehousing & Safe Storage</option>
                        </select>
                    </div>
                    <button type="submit" style="width: 100%; background: #e67e22; color: #ffffff; padding: 13px; border: none; border-radius: 7px; font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.3s ease; box-shadow: 0 4px 12px rgba(230,126,34,0.35);">
                        <i class="fa-solid fa-paper-plane"></i> Get Free Moving Estimate
                    </button>
                    <p style="font-size: 11px; color: #95a5a6; text-align: center; margin-top: 10px; margin-bottom: 0;">
                        <i class="fa-solid fa-lock"></i> 100% Privacy Protected. Zero Spam Guarantee.
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
                <li><a href="<?php echo SITE_BASE_URL; ?>/" style="color: #0d2b45; text-decoration: none;"><i class="fa-solid fa-house"></i> Home</a></li>
                <li>/</li>
                <li><a href="<?php echo SITE_BASE_URL; ?>/#service-areas" style="color: #0d2b45; text-decoration: none;">Jharkhand</a></li>
                <li>/</li>
                <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ramgarh" style="color: #0d2b45; text-decoration: none;">Ramgarh</a></li>
                <li>/</li>
                <li style="color: #0d2b45; font-weight: 600;">Chitarpur</li>
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
                    <div style="color: #0d2b45; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-map-location-dot" style="color: #e67e22;"></i> Trusted Relocation Network
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0d2b45; margin-bottom: 20px; line-height: 1.3;">
                        Professional Shifting Solutions in Chitarpur & The Rajrappa Industrial Corridor
                    </h2>
                    <p style="margin-bottom: 16px;">
                        Chitarpur occupies a vital geographical and cultural junction in the Ramgarh district of Jharkhand. Positioned strategically along National Highway 23, Chitarpur acts as the central arterial gateway connecting the industrial nerve centre of Ramgarh Cantonment with the high-output coal belt of Central Coalfields Limited (CCL) Rajrappa Project, the agricultural heartlands of Gola and Dulmi, and the steel city of Bokaro. Home to vibrant residential neighbourhoods, bustling market alleys at Chitarpur Bazar, growing educational hubs, and adjacent to the revered Maa Chhinnamastika Shaktipeeth temple complex at the confluence of the sacred Damodar and Bhairavi rivers, Chitarpur witnesses steady population flow and frequent residential and commercial transfers.
                    </p>
                    <p style="margin-bottom: 16px;">
                        Moving household goods across Chitarpur presents unique logistical demands. From navigating winding rural-suburban bypass roads and narrow lanes in ancient market colonies to managing heavy dust exposure along the mineral transportation routes, relocating here requires a specialized team equipped with custom vehicles, heavy-duty packing supplies, and meticulous handling protocols. <strong>Shree Ashirwad Packers and Movers</strong> has established a formidable presence in the Ramgarh-Rajrappa-Chitarpur belt, executing thousands of safe moves for public sector employees, private traders, doctors, teachers, defence personnel, and mining engineers.
                    </p>
                    <p>
                        Our mission is straightforward: deliver stress-free, 100% damage-proof relocation backed by punctual doorstep pickup, standardized multi-layer protective packing, transparent written contracts, zero hidden expenses, and real-time live satellite GPS transit tracking. When you trust your valuable possessions to Shree Ashirwad Packers and Movers, you choose peace of mind.
                    </p>
                </div>
                <div style="flex: 1 1 450px; min-width: 300px;">
                    <!-- Image 1: Responsive container with 3:4 aspect ratio -->
                    <div class="content-media-embed" style="margin: 0 auto; max-width: 420px;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Household Packing and Packaging Materials Chitarpur Ramgarh" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-box-open" style="color: #60a5fa; margin-right: 8px;"></i> Multi-layer protective packing for delicate goods in Chitarpur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Core Moving Services -->
        <section class="content-section" style="margin-bottom: 50px; background: #ffffff; padding: 40px; border-radius: 14px; border: 1px solid #edf2f7; box-shadow: 0 8px 25px rgba(0,0,0,0.04);">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 40px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0d2b45; margin-bottom: 15px;">
                    Specialized Relocation Services Tailored for Chitarpur
                </h2>
                <p style="color: #64748b; font-size: 16px;">
                    Whether moving a single room, a sprawling bungalow, or an entire commercial warehouse, our tailor-made services cater to every unique moving requirement with surgical precision.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(270px, 1fr)); gap: 25px;">
                <!-- Service 1 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #0d2b45; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #e0e7ff; color: #3730a3; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-couch"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #0d2b45; margin-bottom: 12px;">Household Shifting</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Complete household goods packing, careful loading, dedicated transport, and organized unpacking for 1BHK, 2BHK, 3BHK, and independent bungalows in Chitarpur, Murubanda, and Rajrappa.
                    </p>
                </div>

                <!-- Service 2 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #e67e22; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #ffedd5; color: #c2410c; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-building-user"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #0d2b45; margin-bottom: 12px;">CCL & Officer Transfers</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Hassle-free transfers for Central Coalfields Limited executives, engineers, banking staff, and state government officers with authentic GST bills, packing inventories, and consignment notes for hassle-free company claims.
                    </p>
                </div>

                <!-- Service 3 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #00c853; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #dcfce7; color: #15803d; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-car-side"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #0d2b45; margin-bottom: 12px;">Car & Bike Relocation</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Specialized enclosed automobile carriers and custom bike packing stands ensuring safe scratch-free interstate vehicle shipping from Chitarpur to Delhi, Patna, Kolkata, Bangalore, and across India.
                    </p>
                </div>

                <!-- Service 4 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #0284c7; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #e0f2fe; color: #0369a1; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-boxes-packing"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #0d2b45; margin-bottom: 12px;">Commercial & Shop Moving</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Relocation of retail outlets, electronics showrooms, hardware traders, clinic equipment, and educational institutions in Chitarpur Bazar with minimum operational downtime.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 3: In-Depth Logistics & Multi-Layer Packing -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
                <div style="flex: 1 1 450px; min-width: 300px; order: 2;">
                    <div style="color: #0d2b45; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-shield-halved" style="color: #00c853;"></i> Zero Damage Protocol
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0d2b45; margin-bottom: 20px; line-height: 1.3;">
                        Engineering Safe Transit: Our 5-Layer Defensive Packaging Standard
                    </h2>
                    <p style="margin-bottom: 16px;">
                        The geography surrounding Chitarpur involves undulating terrain, coal transport dust, highway traffic along NH-23, and unpredictable seasonal weather conditions ranging from intense summer heat to heavy monsoon showers. In such conditions, ordinary packing using newspaper or flimsy cardboard boxes fails to protect high-value belongings.
                    </p>
                    <p style="margin-bottom: 16px;">
                        At Shree Ashirwad Packers and Movers, we treat every shifting assignment with scientific precision. Our 5-layer protective packing protocol includes:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 16px; margin: 0 0 25px;">
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #0d2b45;">Layer 1 - Scratch Prevention</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">High-density polyethylene stretch film and virgin foam sheets wrapped directly onto wooden furniture, leather sofas, polished cabinets, and delicate painted finishes.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #0d2b45;">Layer 2 - Shock Absorption</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Heavy-grade air bubble wrap (75 to 100 GSM) cushioning all LCD/OLED televisions, refrigerators, glass tables, microwave ovens, and bone china dinner sets.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #0d2b45;">Layer 3 - Structural Protection</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Heavy-gauge virgin corrugated cardboard sheets wrapped tightly around edges, corners, and flat surfaces to repel external impact during road transit.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #0d2b45;">Layer 4 - Sturdy Containment</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Customized 5-ply and 7-ply virgin Kraft paper carton boxes separated by goods categories, with internal foam partitioning for fragile articles.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #0d2b45;">Layer 5 - Weather & Dust Barrier</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Industrial-grade shrink wrap film sealed across entire cartons to completely block moisture, rain showers, road grit, and coal dust along the highway.</p>
                        </div>
                    </div>
                    <p>
                        Every piece of furniture is disassembled by trained carpenters, hardware screws and fittings are categorized in numbered pouches, and reassembly is executed methodically at your destination.
                    </p>
                </div>
                <div style="flex: 1 1 450px; min-width: 300px; order: 1;">
                    <!-- Image 2: Responsive container with 3:4 aspect ratio -->
                    <div class="content-media-embed" style="margin: 0 auto; max-width: 420px;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to Door Delivery Truck in Chitarpur Ramgarh" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-truck-fast" style="color: #60a5fa; margin-right: 8px;"></i> Dedicated enclosed container vehicles providing door-to-door delivery across Chitarpur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4: Detailed Cost & Distance Table -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 30px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0d2b45; margin-bottom: 12px;">
                    Estimated Cost of Relocation from Chitarpur
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    Clear, transparent price estimates with zero hidden charges. Actual rates vary based on exact inventory volume, floor heights, packing tier, and distance.
                </p>
            </div>

            <div style="overflow-x: auto; background: #ffffff; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #e2e8f0; margin-bottom: 25px;">
                <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
                    <thead>
                        <tr style="background: #0d2b45; color: #ffffff;">
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
                            <td style="padding: 14px 20px; font-weight: 600; color: #0d2b45;">Chitarpur Local / Rajrappa / Ramgarh</td>
                            <td style="padding: 14px 20px;">10 - 25 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹3,500 - ₹6,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹6,500 - ₹10,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹10,500 - ₹16,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹1,500 - ₹3,500</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #0d2b45;">Chitarpur to Ranchi</td>
                            <td style="padding: 14px 20px;">65 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹6,000 - ₹9,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹9,500 - ₹15,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹15,000 - ₹22,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹2,500 - ₹5,000</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #ffffff;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #0d2b45;">Chitarpur to Bokaro Steel City</td>
                            <td style="padding: 14px 20px;">55 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹5,500 - ₹8,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹8,500 - ₹14,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹14,000 - ₹20,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹2,200 - ₹4,500</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #0d2b45;">Chitarpur to Dhanbad</td>
                            <td style="padding: 14px 20px;">95 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹7,500 - ₹11,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹11,500 - ₹18,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹18,000 - ₹25,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹3,000 - ₹6,000</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #ffffff;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #0d2b45;">Chitarpur to Jamshedpur</td>
                            <td style="padding: 14px 20px;">135 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹9,000 - ₹14,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹14,000 - ₹22,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹22,000 - ₹30,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹3,500 - ₹7,500</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #0d2b45;">Chitarpur to Patna (Bihar)</td>
                            <td style="padding: 14px 20px;">310 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹14,000 - ₹20,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹20,000 - ₹28,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹28,000 - ₹38,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹5,000 - ₹9,500</td>
                        </tr>
                        <tr style="background: #ffffff;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #0d2b45;">Chitarpur to Kolkata (WB)</td>
                            <td style="padding: 14px 20px;">360 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹15,000 - ₹22,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹22,000 - ₹32,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹32,000 - ₹44,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹5,500 - ₹11,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="font-size: 13px; color: #64748b; font-style: italic;">
                * Note: Pricing includes professional packaging supplies, skilled labour for loading/unloading, and road freight. GST (18% for complete relocation or 5% for transport only) and optional comprehensive transit insurance (1.5% of declared goods value) are calculated as per client preference.
            </p>
        </section>

        <!-- Section 5: Specialized Vehicle & Warehouse Storage -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
                <div style="flex: 1 1 450px; min-width: 300px;">
                    <!-- Image 3: Responsive container with 3:4 aspect ratio -->
                    <div class="content-media-embed" style="margin: 0 auto; max-width: 420px;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car and Bike Transport Services in Chitarpur Ramgarh" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-car-side" style="color: #60a5fa; margin-right: 8px;"></i> Hydraulic car carrier and enclosed bike transport trailers serving Chitarpur.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="flex: 1 1 550px; min-width: 320px;">
                    <div style="color: #0d2b45; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-car-burst" style="color: #ff9100;"></i> Safe Automobile Carrier
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0d2b45; margin-bottom: 20px; line-height: 1.3;">
                        Automobile Transportation & Secure Storage Hubs in Chitarpur
                    </h2>
                    <p style="margin-bottom: 16px;">
                        Driving your personal four-wheeler or motorcycling over hundreds of kilometres of congested highways, hill sections, or mining corridors can lead to heavy wear, mechanical breakdown, and safety risks. Shree Ashirwad Packers and Movers operates dedicated enclosed automobile carrier trucks equipped with hydraulic ramps, wheel clamps, and soft interior bumpers to move hatchbacks, sedans, SUVs, and luxury cars securely.
                    </p>
                    <p style="margin-bottom: 16px;">
                        For motorcycles, Royal Enfield cruisers, sports bikes, and scooters, we build specialized foam-padded wooden crates or heavy corrugated wraps. Mirrors are demounted and protected, fuel tanks are drained to safety limits, and battery terminals are insulated to prevent accidental discharge. Your vehicle is tracked round-the-clock via GPS with milestone SMS updates delivered directly to your phone.
                    </p>
                    <p>
                        Furthermore, for clients undergoing renovation, CCL personnel awaiting quarter allocations, or families between leases, we maintain certified clean, pest-controlled, and CCTV-monitored warehousing facilities with short-term and long-term storage leases at affordable weekly or monthly tariffs.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 6: Comprehensive Step-by-Step Relocation Process Table -->
        <section class="content-section" style="margin-bottom: 50px; background: #ffffff; padding: 40px; border-radius: 14px; border: 1px solid #edf2f7; box-shadow: 0 8px 25px rgba(0,0,0,0.04);">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 30px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0d2b45; margin-bottom: 12px;">
                    Our Meticulous 6-Stage Relocation Workflow
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    From initial inquiry to final handover in your new home, experience total clarity and professionalism at every phase of the move.
                </p>
            </div>

            <div style="overflow-x: auto; margin-bottom: 20px;">
                <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
                    <thead>
                        <tr style="background: #203c56; color: #ffffff;">
                            <th style="padding: 14px 18px; width: 12%;">Stage</th>
                            <th style="padding: 14px 18px; width: 22%;">Operational Action</th>
                            <th style="padding: 14px 18px; width: 38%;">Detailed Execution & Materials</th>
                            <th style="padding: 14px 18px; width: 28%;">Client Benefit & Guarantee</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Phase 01</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #0d2b45;">Pre-Move Survey & Assessment</td>
                            <td style="padding: 14px 18px; color: #475569;">Physical doorstep visit or instant video survey to assess goods volume, fragile items, dismantle requirements, and staircase/lift access.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Accurate written quote with zero surprise cost on moving day.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Phase 02</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #0d2b45;">Custom Disassembly & Packing</td>
                            <td style="padding: 14px 18px; color: #475569;">Dismantling beds, wardrobes, and TV units by trained carpenters. Wrapping electronics, chinaware, and furniture with 5-layer materials.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Zero scratches, zero broken glass, perfectly labeled inventory.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Phase 03</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #0d2b45;">Ergonomic Loading & Securing</td>
                            <td style="padding: 14px 18px; color: #475569;">Loading into clean, covered container trucks using heavy-duty lifting belts, hydraulic tailgates, and interior lashing straps.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">No movement or friction during high-speed highway transit.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Phase 04</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #0d2b45;">GPS Monitored Highway Transit</td>
                            <td style="padding: 14px 18px; color: #475569;">Highway navigation via NH-23 and NH-33 by senior certified drivers experienced with Jharkhand topography and toll corridors.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Real-time location tracking and guaranteed arrival schedules.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Phase 05</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #0d2b45;">Careful Unloading & Room Placement</td>
                            <td style="padding: 14px 18px; color: #475569;">Careful unloading at destination, carrying boxes to designated bedrooms, living halls, and kitchens according to color-coded labels.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Eliminates post-move clutter and back-breaking heavy lifting.</td>
                        </tr>
                        <tr style="background: #f8fafc;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Phase 06</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #0d2b45;">Reassembly, Inspection & Signoff</td>
                            <td style="padding: 14px 18px; color: #475569;">Reassembling beds, study tables, and sofas; joint physical inspection against the itemized inventory sheet before final signoff.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">100% satisfaction verified prior to crew departure.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Section 7: Warehousing & Storage Solutions -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
                <div style="flex: 1 1 550px; min-width: 320px;">
                    <div style="color: #0d2b45; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-warehouse" style="color: #0284c7;"></i> Safe Storage Facility
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0d2b45; margin-bottom: 20px; line-height: 1.3;">
                        Secure Warehousing & Household Storage Near Chitarpur
                    </h2>
                    <p style="margin-bottom: 16px;">
                        Whether you are transitioning between residential leases, renovating your ancestral home in Chitarpur, traveling on long-term overseas or interstate project assignments, or waiting for your CCL quarter allocation at Rajrappa Area, finding a clean and dry place to store household articles can be challenging.
                    </p>
                    <p style="margin-bottom: 16px;">
                        Shree Ashirwad Packers and Movers operates modern, climate-controlled, pest-free warehouse hubs strategically situated along the Ramgarh-Ranchi-Bokaro transit line. Our warehouses feature:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 14px; margin: 0 0 20px;">
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-video" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #0d2b45;">24/7 Security & CCTV</strong>
                            </div>
                            <p style="margin: 0; font-size: 13px; color: #475569; line-height: 1.5;">Round-the-clock physical security guards and 24/7 CCTV surveillance cameras with backup storage.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-pallet" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #0d2b45;">Moisture-Proof Pallets</strong>
                            </div>
                            <p style="margin: 0; font-size: 13px; color: #475569; line-height: 1.5;">Elevated moisture-proof pallets keeping cartons, mattresses, and wooden units well clear of damp flooring.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-bug-slash" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #0d2b45;">Pest & Termite Control</strong>
                            </div>
                            <p style="margin: 0; font-size: 13px; color: #475569; line-height: 1.5;">Periodic anti-termite, rodent-repellent, and pest-control treatments to protect antique wood and fabrics.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-calendar-check" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #0d2b45;">Flexible Lease Plans</strong>
                            </div>
                            <p style="margin: 0; font-size: 13px; color: #475569; line-height: 1.5;">Flexible daily, weekly, or multi-month leasing plans with instant inventory access and doorstep retrieval.</p>
                        </div>
                    </div>
                    <p>
                        Store your most treasured possessions with complete confidence knowing they are protected by certified security standards.
                    </p>
                </div>
                <div style="flex: 1 1 450px; min-width: 300px;">
                    <!-- Image 4: Responsive container with 3:4 aspect ratio -->
                    <div class="content-media-embed" style="margin: 0 auto; max-width: 420px;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Commercial Goods and Household Storage Warehouse Chitarpur" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-warehouse" style="color: #60a5fa; margin-right: 8px;"></i> Secure, pest-controlled warehousing facilities accessible for Chitarpur and Ramgarh.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 8: Localities and Coverage in Chitarpur & Ramgarh -->
        <section class="content-section" style="margin-bottom: 50px; background: #f8fafc; padding: 40px; border-radius: 14px; border: 1px solid #e2e8f0;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 30px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0d2b45; margin-bottom: 12px;">
                    Localities & Vicinities Covered Across Chitarpur
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    Our dedicated pickup teams and container trucks provide comprehensive coverage throughout Chitarpur block, Rajrappa corridor, and adjoining Ramgarh towns:
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px;">
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0d2b45; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0d2b45; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Chitarpur Main Bazar</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Market road & commercial centers</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0d2b45; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0d2b45; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Murubanda</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Residential settlements & NH-23 junction</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0d2b45; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0d2b45; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Rajrappa Project & Colony</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">CCL officers colony & mining township</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0d2b45; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0d2b45; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Lari & Jamira</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Rural & suburban neighbourhoods</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0d2b45; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0d2b45; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Rajrappa Mandir Road</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Pilgrim corridor & guest houses</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0d2b45; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0d2b45; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Gola Road & Dulmi</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Highway corridor towards Bokaro</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0d2b45; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0d2b45; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Ramgarh Cantt Hub</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Sub-divisional links & railway yard</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0d2b45; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0d2b45; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Barka Kana Junction Area</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Railway logistics hub & feeder links</div>
                </div>
            </div>
        </section>

        <!-- Section 9: Why Choose Shree Ashirwad Packers and Movers -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 35px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0d2b45; margin-bottom: 12px;">
                    Why Families & Companies in Chitarpur Choose Us
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    We combine local geographical expertise across Ramgarh district with national quality benchmarks to make your moving experience effortless.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 25px;">
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #00c853; flex-shrink: 0;"><i class="fa-solid fa-circle-check"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #0d2b45; margin-bottom: 6px;">Direct Company Operations (No Brokers)</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">We operate our own fleet of GPS trucks, dedicated packaging staff, and registered branch offices without third-party commission brokers.</p>
                    </div>
                </div>
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #0284c7; flex-shrink: 0;"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #0d2b45; margin-bottom: 6px;">IBA & CCL Approved Invoicing</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">Complete documentation including GST invoices, lorry receipts (LR), packing inventory lists, and transit insurance certificates for corporate reimbursement.</p>
                    </div>
                </div>
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #e67e22; flex-shrink: 0;"><i class="fa-solid fa-boxes-stacked"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #0d2b45; margin-bottom: 6px;">Heavy Furniture Handling Expertise</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">Our carpenters dismantle, secure, carry, and reassemble large double beds, wardrobes, glass dining tables, and modular kitchen units safely.</p>
                    </div>
                </div>
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #ec4899; flex-shrink: 0;"><i class="fa-solid fa-satellite-dish"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #0d2b45; margin-bottom: 6px;">Live GPS Tracking & Support</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">Stay informed at every kilometer of the journey with real-time GPS tracking links and dedicated single-point move coordinators available 24/7.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Local Google Map Embed -->
        <div style="margin: 35px 0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58570.123456789!2d85.6500!3d23.5700!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4f5123456789%3A0x7d6a5d4e3c2b1a0!2sChitarpur%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Map Location of Chitarpur Ramgarh"></iframe>
        </div>

        <!-- Section 10: Frequently Asked Questions (Accordion) -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 35px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0d2b45; margin-bottom: 12px;">
                    Frequently Asked Questions - Chitarpur Movers
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    Got queries regarding rates, transit duration, packing standards, or insurance? Find instant answers below:
                </p>
            </div>

            <div class="faq-container" style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0d2b45; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        What relocation services does Shree Ashirwad Packers offer in Chitarpur?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        We provide end-to-end relocation services in Chitarpur including residential home shifting, Central Coalfields Limited (CCL) employee transfers, office moving, car and bike carrier transport, premium multi-layer packing, secure warehousing, and complete transit insurance.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0d2b45; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        How much does local household shifting cost in Chitarpur?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Local household relocation within Chitarpur and neighbouring Ramgarh or Rajrappa areas typically ranges between ₹3,500 and ₹12,000 depending on house size (1BHK to 3BHK), packing materials used, floor level, and elevator availability.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0d2b45; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        Do you provide relocation services to and from Rajrappa Project and CCL colonies?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Yes, we regularly serve Rajrappa Project, CCL colonies, Murubanda, Lari, and adjoining mining and residential belts with full documentation, packing lists, and GST invoices suitable for company transfer allowances.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0d2b45; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        How do you protect delicate crockery, glassware, and electronics during shifting?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        We apply 5-layer protective packing comprising thick polyethylene bubble wrap, corrugated sheets, stretch wrap film, edge guards, and heavy-duty 5-ply cartons. Fragile goods are clearly marked and secured in dedicated soft compartments.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0d2b45; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        Can you safely transport cars and two-wheelers from Chitarpur to other Indian states?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Yes, we provide enclosed container car carriers and customized hydraulic bike stands for two-wheelers with wheel chocks, bubble wrapping, GPS tracking, and comprehensive transit insurance to destinations across India.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0d2b45; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        Are there any hidden charges in your moving quote for Chitarpur?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        No, our estimates are 100% transparent and all-inclusive. All charges covering labour, packaging materials, vehicle freight, loading, unloading, and applicable toll taxes are itemized clearly prior to booking.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0d2b45; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        How far in advance should I schedule my moving date in Chitarpur?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        We recommend booking 2 to 4 days in advance for local moves and 4 to 7 days ahead for intercity or long-distance moves. However, we also cater to emergency or last-minute relocations subject to vehicle and crew availability.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0d2b45; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        How can I book Packers and Movers in Chitarpur?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        You can contact our Chitarpur support desk directly at +91 8409531615 or +91 9308888746, or submit our online quick quote form on this page to schedule an immediate free survey.
                    </p>
                </details>
            </div>
        </section>

        <!-- Section: Google My Business Authentic Reviews -->
<?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

<!-- Section 11: Call to Action Banner -->
        <section class="cta-banner" style="background: linear-gradient(135deg, #0d2b45 0%, #1e3a8a 100%); color: #ffffff; padding: 45px 35px; border-radius: 16px; text-align: center; box-shadow: 0 15px 35px rgba(13,43,69,0.25);">
            <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.8vw, 2.5rem); font-weight: 700; margin-bottom: 15px; color: #ffffff;">
                Planning to Relocate in Chitarpur or Rajrappa?
            </h2>
            <p style="font-size: 16px; color: #cbd5e1; max-width: 720px; margin: 0 auto 28px; line-height: 1.7;">
                Connect with Shree Ashirwad Packers and Movers today for a free on-site survey, customized multi-layer packing options, and an unbeatable moving quote.
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
