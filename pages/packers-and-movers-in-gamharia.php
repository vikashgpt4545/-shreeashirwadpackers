<?php
/**
 * Packers and Movers in Gamharia - Shree Ashirwad Packers and Movers
 * Website: https://www.shreeashirwadpackers.com
 * Contact: +91 8409531615 / +91 9308888746
 * Office: Serving Gamharia, Adityapur Industrial Area, Tata-Kandra Road & Jamshedpur Belt, Jharkhand
 */

require_once __DIR__ . '/includes/config.php';

// Page-specific variables
$page_title = "Packers and Movers in Gamharia - 8409531615 | Shree Ashirwad Packers";
$page_description = "Top packers and movers in Gamharia, Adityapur industrial belt. Safe household shifting, industrial machine logistics, car and bike carrier, full transit insurance. Call 8409531615.";
$page_keywords = "packers and movers in gamharia, movers and packers gamharia jamshedpur, adityapur packers and movers, tata kandra road shifting, household shifting gamharia, car transport gamharia, bike courier gamharia, shree ashirwad packers gamharia";
$canonical_url = SITE_BASE_URL . "/packers-and-movers-in-gamharia";
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
      "name": "Shree Ashirwad Packers and Movers - Gamharia",
      "image": "<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg",
      "@id": "<?php echo $canonical_url; ?>#movingcompany",
      "url": "<?php echo $canonical_url; ?>",
      "telephone": "+918409531615",
      "priceRange": "INR 3500 - 58000",
        "keywords": "packers and movers in gamharia, movers and packers gamharia jamshedpur, adityapur packers and movers, tata kandra road shifting, household shifting gamharia, car transport gamharia, bike courier gamharia, shree ashirwad packers gamharia",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Tata-Kandra 4-Lane Expressway, Near Lal Building Chowk",
        "addressLocality": "Gamharia",
        "addressRegion": "Jharkhand",
        "postalCode": "832108",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 22.8125,
        "longitude": 86.0964
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
        "name": "Saraikela Movers",
        "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-saraikela-kharsawan"
      },{
        "@type": "ListItem",
        "position": 4,
        "name": "Packers and Movers in Gamharia",
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
          "name": "What relocation services does Shree Ashirwad Packers offer in Gamharia?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We provide residential household shifting, industrial plant equipment and factory moves, corporate engineer transfers, enclosed car carrier transport, bike courier shipping, secure warehousing, and comprehensive transit insurance throughout Gamharia and Adityapur."
          }
        },
        {
          "@type": "Question",
          "name": "How much does home relocation cost in Gamharia and Adityapur?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Local moves in Gamharia or between Gamharia and Jamshedpur start from ₹3,500 for 1BHK apartments. Long-distance relocations to Ranchi, Kolkata, Pune, or Delhi range from ₹6,500 to ₹32,000 depending on inventory volume, packing tier, and distance."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide relocation services for industrial units in AIADA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we are highly experienced in handling commercial machinery, industrial spare parts, CNC machine components, corporate IT hardware, and office workstations with specialized hydraulic equipment and heavy-duty lashing straps."
          }
        },
        {
          "@type": "Question",
          "name": "How do you protect delicate household furniture and electronics during transit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We implement a strict 5-layer protective packing protocol comprising virgin non-abrasive foam wrap, thick 80 GSM air bubble cushioning, heavy corrugated edge guards, 5-ply cartons, and waterproof shrink wrap film."
          }
        },
        {
          "@type": "Question",
          "name": "Can you safely transport cars and two-wheelers from Gamharia across India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we operate enclosed automobile car carriers and customized hydraulic motorcycle cages with wheel clamps, bubble cushioning, GPS tracking, and complete transit insurance to deliver vehicles safely nationwide."
          }
        },
        {
          "@type": "Question",
          "name": "Are your invoices valid for corporate transfer allowance reimbursement?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we provide 100% authentic GST-compliant invoices, official consignment notes (LR copy), detailed itemized packing lists, and transit insurance policies accepted by all private companies, PSUs, and MNCs."
          }
        },
        {
          "@type": "Question",
          "name": "How far in advance should I book my move in Gamharia?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We recommend booking 2 to 4 days ahead for local moves and 4 to 7 days ahead for outstation moves. However, we also cater to urgent same-day or next-day shifting requirements subject to vehicle availability."
          }
        },
        {
          "@type": "Question",
          "name": "How can I book Packers and Movers in Gamharia?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can call our 24/7 Gamharia customer support desk at +91 8409531615 or +91 9308888746, or fill out our online quick quote form on this page to schedule an immediate free doorstep survey."
          }
        }
      ]
    }
    </script>
</head>
<body class="page-template">
<?php include_once __DIR__ . '/includes/header.php'; ?>

<!-- Hero Section -->
<section class="city-hero-section" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%); color: #ffffff; padding: 60px 0 50px; position: relative; overflow: hidden;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <div class="hero-content-wrapper" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 40px;">
            <div class="hero-text-block" style="flex: 1 1 600px; min-width: 320px;">
                <div class="hero-badge" style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255, 193, 7, 0.2); border: 1px solid #ffc107; padding: 6px 14px; border-radius: 30px; font-size: 14px; font-weight: 600; color: #ffc107; margin-bottom: 20px;">
                    <i class="fa-solid fa-industry"></i> Premier Relocation Partner in Gamharia & Adityapur Industrial Belt
                </div>
                <h1 style="font-family: 'Outfit', sans-serif; font-size: clamp(2.2rem, 4vw, 3.2rem); font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
                    Packers and Movers in Gamharia - <span style="color: #ffc107;">8409531615</span>
                </h1>
                <p style="font-family: 'Inter', sans-serif; font-size: 17px; line-height: 1.7; color: #e0e6ed; margin-bottom: 28px;">
                    Planning to relocate your residence, corporate office, or industrial machinery in Gamharia? <strong>Shree Ashirwad Packers and Movers</strong> provides trusted, certified, and damage-free moving services across the premier automotive and heavy manufacturing hub of Jharkhand. Situated directly along the 4-lane Tata-Kandra Expressway and integrated with the massive Adityapur Industrial Area (AIADA) adjacent to Jamshedpur, Gamharia houses thousands of engineers, automotive suppliers, manufacturing executives, and business families. Whether moving locally across Lal Building Chowk, Usha Martin colony, or shifting interstate to Pune, Kolkata, Ranchi, or Delhi, our certified team ensures 100% zero-damage execution backed by full transit insurance.
                </p>
                <div class="hero-stats-row" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(130px, 1fr)); gap: 15px; margin-bottom: 30px;">
                    <div style="background: rgba(255, 255, 255, 0.08); padding: 14px; border-radius: 10px; border-left: 3px solid #ffc107;">
                        <div style="font-size: 24px; font-weight: 700; color: #ffc107;">12+</div>
                        <div style="font-size: 13px; color: #cfd8dc;">Years in Gamharia</div>
                    </div>
                    <div style="background: rgba(255, 255, 255, 0.08); padding: 14px; border-radius: 10px; border-left: 3px solid #00c853;">
                        <div style="font-size: 24px; font-weight: 700; color: #00c853;">100%</div>
                        <div style="font-size: 13px; color: #cfd8dc;">Safe Transit Record</div>
                    </div>
                    <div style="background: rgba(255, 255, 255, 0.08); padding: 14px; border-radius: 10px; border-left: 3px solid #00b0ff;">
                        <div style="font-size: 24px; font-weight: 700; color: #00b0ff;">5,600+</div>
                        <div style="font-size: 13px; color: #cfd8dc;">Happy Relocations</div>
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
                    <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20moving%20services%20in%20Gamharia" target="_blank" class="btn-secondary" style="background: #25d366; color: #ffffff; padding: 14px 24px; border-radius: 8px; font-weight: 700; font-size: 16px; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; transition: all 0.3s ease;">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp Quote
                    </a>
                </div>
            </div>

            <!-- Quick Booking Form Container -->
            <div class="hero-form-container" style="flex: 0 1 420px; min-width: 320px; background: #ffffff; padding: 30px; border-radius: 14px; box-shadow: 0 20px 40px rgba(0,0,0,0.25); color: #2c3e50;">
                <h3 style="font-family: 'Outfit', sans-serif; font-size: 22px; font-weight: 700; margin-bottom: 8px; color: #0f172a; text-align: center;">
                    Get Free Quote in Gamharia
                </h3>
                <p style="font-size: 13px; color: #7f8c8d; text-align: center; margin-bottom: 20px;">Fast response in under 15 minutes</p>
                <form action="<?php echo SITE_BASE_URL; ?>/contact-form-handler.php" method="POST" class="hero-quote-form">
                    <input type="hidden" name="service_city" value="Gamharia">
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
                            <input type="text" name="pickup_location" placeholder="e.g. Gamharia / Lal Building" style="width: 100%; padding: 10px 12px; border: 1px solid #ced4da; border-radius: 6px; font-size: 13px; outline: none;">
                        </div>
                        <div>
                            <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 5px; color: #34495e;">Destination</label>
                            <input type="text" name="drop_location" placeholder="e.g. Jamshedpur / Ranchi / Pune" style="width: 100%; padding: 10px 12px; border: 1px solid #ced4da; border-radius: 6px; font-size: 13px; outline: none;">
                        </div>
                    </div>
                    <div style="margin-bottom: 16px;">
                        <label style="display: block; font-size: 13px; font-weight: 600; margin-bottom: 5px; color: #34495e;">Shifting Type</label>
                        <select name="shifting_type" style="width: 100%; padding: 10px 12px; border: 1px solid #ced4da; border-radius: 6px; font-size: 13px; background-color: #fff; outline: none;">
                            <option value="Household Shifting">Household Shifting (1/2/3+ BHK)</option>
                            <option value="Corporate Engineer Transfer">Corporate & Engineer Transfer</option>
                            <option value="Car or Two-Wheeler Shipping">Car / Bike Transport</option>
                            <option value="Industrial Machine & Factory Move">Industrial & Machine Logistics</option>
                            <option value="Storage and Warehousing">Storage & Warehousing</option>
                        </select>
                    </div>
                    <button type="submit" style="width: 100%; background: #e67e22; color: #ffffff; padding: 13px; border: none; border-radius: 7px; font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.3s ease; box-shadow: 0 4px 12px rgba(230,126,34,0.35);">
                        <i class="fa-solid fa-paper-plane"></i> Get Free Moving Estimate
                    </button>
                    <p style="font-size: 11px; color: #95a5a6; text-align: center; margin-top: 10px; margin-bottom: 0;">
                        <i class="fa-solid fa-shield-halved"></i> 100% Privacy Protected. Zero Spam Calls.
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
                <li><a href="<?php echo SITE_BASE_URL; ?>/" style="color: #0f172a; text-decoration: none;"><i class="fa-solid fa-house"></i> Home</a></li>
                <li>/</li>
                <li><a href="<?php echo SITE_BASE_URL; ?>/#service-areas" style="color: #0f172a; text-decoration: none;">Jharkhand</a></li>
                <li>/</li>
                <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-saraikela-kharsawan" style="color: #0f172a; text-decoration: none;">Saraikela Kharsawan</a></li>
                <li>/</li>
                <li style="color: #0f172a; font-weight: 600;">Gamharia</li>
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
                    <div style="color: #0f172a; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-gear" style="color: #e67e22;"></i> Asia's Manufacturing Corridor
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0f172a; margin-bottom: 20px; line-height: 1.3;">
                        Professional Shifting Solutions in Gamharia & Adityapur Industrial Zone
                    </h2>
                    <p style="margin-bottom: 16px;">
                        Gamharia represents one of the most critical manufacturing engines and automotive component hubs in the Republic of India. Located in the Seraikela Kharsawan district directly along the four-lane Tata-Kandra Expressway, Gamharia forms an integrated industrial continuum with the Adityapur Industrial Area Development Authority (AIADA) — recognized as one of the largest industrial estates in Asia. Flanked by the Kharkai River separating it from Jamshedpur city (Bistupur, Kadma, Sonari), Gamharia is home to over a thousand auto-ancillary factories, rolling mills, forging plants, fabrication workshops, and prominent residential colonies.
                    </p>
                    <p style="margin-bottom: 16px;">
                        The rapid industrial cadence of Gamharia drives continuous population movement. From mechanical engineers, metallurgists, plant heads, and supply-chain professionals to business merchants, bank managers, and academic faculty at nearby institutes, residential and commercial relocation is a routine requirement. However, moving amidst heavy multi-axle freight carriers, factory forklifts, expressway traffic, and industrial dust requires a packers and movers company with specialized vehicles, heavy-duty packing supplies, and meticulous handling protocols.
                    </p>
                    <p style="margin-bottom: 16px;">
                        <strong>Shree Ashirwad Packers and Movers</strong> has established a commanding operational presence across Gamharia. We handle delicate glassware, high-end home theater setups, imported modular wardrobes, and sensitive industrial prototypes with surgical precision. Our crews utilize floor-protection sheets, heavy-duty furniture sliders, and dust-resistant 5-layer defensive packing to guarantee complete protection against scratches, dents, and highway road shocks.
                    </p>
                    <p style="margin-bottom: 16px;">
                        Whether moving across local sectors like Lal Building Chowk, Usha Martin Colony, Jagannathpur, or Kandra Road, or executing long-distance intercity transfers to Pune, Bangalore, Kolkata, Ranchi, or Delhi, we provide authentic GST bills, live satellite GPS tracking, and comprehensive transit insurance.
                    </p>
                    <p>
                        Our mission is to deliver dependable, punctual, and zero-stress relocation services that let you and your family transition smoothly into your new premises.
                    </p>
                </div>
                <div style="flex: 1 1 450px; min-width: 300px;">
                    <!-- Image 1: Responsive container with 3:4 aspect ratio -->
                    <div class="content-media-embed" style="margin: 0 auto; max-width: 420px;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Packaging Materials in Gamharia Adityapur Jamshedpur" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-box-open" style="color: #60a5fa; margin-right: 8px;"></i> Heavy-duty multi-layer bubble wrap and sturdy cartons in Gamharia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Core Moving Services in Gamharia -->
        <section class="content-section" style="margin-bottom: 50px; background: #ffffff; padding: 40px; border-radius: 14px; border: 1px solid #edf2f7; box-shadow: 0 8px 25px rgba(0,0,0,0.04);">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 40px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0f172a; margin-bottom: 15px;">
                    Comprehensive Moving Solutions Tailored for Gamharia
                </h2>
                <p style="color: #64748b; font-size: 16px;">
                    Whether relocating a modern flat, an executive bungalow, or industrial equipment, our specialized moving solutions guarantee total safety and peace of mind.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(270px, 1fr)); gap: 25px;">
                <!-- Service 1 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #0f172a; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #e0e7ff; color: #3730a3; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-house-chimney"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Household Shifting</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Complete residential moving for 1BHK, 2BHK, 3BHK flats, duplexes, and bungalows across Lal Building Chowk, Chota Gamharia, and Adityapur with professional packing and room arrangement.
                    </p>
                </div>

                <!-- Service 2 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #e67e22; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #ffedd5; color: #c2410c; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-user-gear"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Corporate & Engineer Transfers</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Prompt relocation for plant managers, automotive design engineers, and banking executives with official GST invoices, consignment notes (LR), and itemized inventories for 100% claims.
                    </p>
                </div>

                <!-- Service 3 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #00c853; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #dcfce7; color: #15803d; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-car-side"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Car & Bike Relocation</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Specialized enclosed automobile carriers and custom hydraulic motorcycle cages ensuring scratch-free interstate vehicle shipping from Gamharia to destinations across India.
                    </p>
                </div>

                <!-- Service 4 -->
                <div style="background: #f8fafc; padding: 28px 24px; border-radius: 12px; border-top: 4px solid #0284c7; transition: transform 0.3s ease; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                    <div style="width: 50px; height: 50px; background: #e0f2fe; color: #0369a1; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 18px;">
                        <i class="fa-solid fa-industry"></i>
                    </div>
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 20px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Industrial Machine & Plant Shifting</h3>
                    <p style="font-size: 14px; color: #475569; line-height: 1.6;">
                        Secure transportation of manufacturing machinery, tooling inventory, commercial electronics, and office IT servers across the AIADA industrial estate with minimum downtime.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 3: High-Grade Packaging Standards -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
                <div style="flex: 1 1 450px; min-width: 300px; order: 2;">
                    <div style="color: #0f172a; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-layer-group" style="color: #00c853;"></i> Advanced Protective Standards
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0f172a; margin-bottom: 20px; line-height: 1.3;">
                        Engineered 5-Layer Defensive Packaging for Supreme Protection
                    </h2>
                    <p style="margin-bottom: 16px;">
                        The heavy industrial environment along the Tata-Kandra Expressway involves vehicular vibrations, heavy multi-axle freight traffic, and fine metallic/road dust. Low-quality packaging materials or simple carton boxes can easily puncture, tear, or collapse, leading to severe scratch or breakage damage.
                    </p>
                    <p style="margin-bottom: 16px;">
                        At Shree Ashirwad Packers and Movers, we apply our proven 5-layer protective packing protocol to every moving consignment:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 16px; margin: 0 0 25px;">
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #0f172a;">Layer 1 - Scratch-Proof Foam Wrap</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Direct surface application of virgin polyethylene foam film eliminates scratches and abrasions on polished wood, metallic panels, and gloss finishes.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #0f172a;">Layer 2 - Multi-Cellular Air Bubble Cushioning</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Thick 80 GSM air bubble wrap absorbs kinetic shocks on LED smart TVs, refrigerators, washing machines, and fine chinaware.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #0f172a;">Layer 3 - Heavy Corrugated Corner Protectors</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Rigid angle guards and corrugated caps secured to wardrobe corners, dining tables, and marble table edges.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #0f172a;">Layer 4 - Sturdy 5-Ply & 7-Ply Cartons</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Heavy-duty Kraft corrugated boxes pre-partitioned for delicate kitchenware, books, clothes, and family heirlooms.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-circle-check" style="color: #00c853; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #0f172a;">Layer 5 - Moisture & Dust-Proof Thermal Wrap</h4>
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
                            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to Door Delivery Truck in Gamharia Jamshedpur" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-truck-fast" style="color: #60a5fa; margin-right: 8px;"></i> Dedicated container fleet delivering doorstep household shifting in Gamharia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4: Transparent Cost & Distance Table -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 30px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0f172a; margin-bottom: 12px;">
                    Estimated Shifting Rates from Gamharia
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    Clear, transparent rate matrix for local and intercity relocation from Gamharia. Zero unexpected surcharges.
                </p>
            </div>

            <div style="overflow-x: auto; background: #ffffff; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #e2e8f0; margin-bottom: 25px;">
                <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
                    <thead>
                        <tr style="background: #0f172a; color: #ffffff;">
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
                            <td style="padding: 14px 20px; font-weight: 600; color: #0f172a;">Gamharia Local / Adityapur / Kandra</td>
                            <td style="padding: 14px 20px;">8 - 20 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹3,500 - ₹6,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹6,500 - ₹10,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹10,500 - ₹16,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹1,500 - ₹3,500</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #0f172a;">Gamharia to Jamshedpur City (Bistupur/Telco)</td>
                            <td style="padding: 14px 20px;">12 - 22 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹4,000 - ₹7,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹7,000 - ₹11,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹11,500 - ₹17,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹1,800 - ₹3,800</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #ffffff;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #0f172a;">Gamharia to Ranchi (Capital)</td>
                            <td style="padding: 14px 20px;">125 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹8,000 - ₹12,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹12,500 - ₹19,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹19,000 - ₹27,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹3,000 - ₹6,500</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #0f172a;">Gamharia to Kolkata (WB)</td>
                            <td style="padding: 14px 20px;">265 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹12,500 - ₹17,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹17,500 - ₹26,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹26,000 - ₹36,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹4,500 - ₹9,500</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #ffffff;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #0f172a;">Gamharia to Dhanbad / Bokaro</td>
                            <td style="padding: 14px 20px;">135 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹8,500 - ₹13,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹13,000 - ₹20,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹20,000 - ₹28,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹3,000 - ₹6,500</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #0f172a;">Gamharia to Bhubaneswar / Cuttack</td>
                            <td style="padding: 14px 20px;">320 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹14,000 - ₹19,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹19,500 - ₹28,500</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹28,500 - ₹39,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹5,000 - ₹10,500</td>
                        </tr>
                        <tr style="background: #ffffff;">
                            <td style="padding: 14px 20px; font-weight: 600; color: #0f172a;">Gamharia to Pune / Mumbai (Maharashtra)</td>
                            <td style="padding: 14px 20px;">1,620 km</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹30,000 - ₹42,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹42,000 - ₹58,000</td>
                            <td style="padding: 14px 20px; color: #16a34a; font-weight: 600;">₹58,000 - ₹78,000</td>
                            <td style="padding: 14px 20px; color: #0284c7; font-weight: 600;">₹10,000 - ₹18,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="font-size: 13px; color: #64748b; font-style: italic;">
                * Note: Pricing includes packaging materials, trained loading/unloading labor, and highway freight. Applicable GST (18% for complete door-to-door shifting or 5% for transport only) and optional transit insurance (1.5% of declared goods value) are clearly itemized in the formal estimate.
            </p>
        </section>

        <!-- Section 5: Automobile Transport & Warehousing -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
                <div style="flex: 1 1 450px; min-width: 300px;">
                    <!-- Image 3: Responsive container with 3:4 aspect ratio -->
                    <div class="content-media-embed" style="margin: 0 auto; max-width: 420px;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car and Bike Relocation Carrier in Gamharia Adityapur" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-car-side" style="color: #60a5fa; margin-right: 8px;"></i> Specialized hydraulic automobile carrier trucks serving Gamharia.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="flex: 1 1 550px; min-width: 320px;">
                    <div style="color: #0f172a; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-car" style="color: #ff9100;"></i> Safe Vehicle Transportation
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0f172a; margin-bottom: 20px; line-height: 1.3;">
                        Automobile Carrier Logistics & Safe Storage Hubs
                    </h2>
                    <p style="margin-bottom: 16px;">
                        Driving personal vehicles across congested industrial expressways over hundreds of kilometers exposes cars and bikes to gravel chipping, accidental hazards, and unnecessary mechanical wear. Shree Ashirwad Packers and Movers operates specialized hydraulic enclosed car carriers and two-wheeler transport cages connecting Gamharia directly to all major metropolitan centers.
                    </p>
                    <p style="margin-bottom: 16px;">
                        Each four-wheeler is thoroughly inspected with a joint pre-loading inspection sheet. Vehicles are secured with heavy-duty tyre lashings on hydraulic ramps, and covered with scratch-resistant blankets. Two-wheelers receive thick bubble wrap around headlights, fuel tanks, and mirrors, and are firmly anchored with wheel chocks.
                    </p>
                    <p style="margin-bottom: 16px;">
                        In addition, if your new residence or factory premises in Jamshedpur, Ranchi, or Pune is delayed, our secure warehousing hubs provide clean, elevated pallet storage, 24/7 CCTV surveillance, and regular pest-control treatments at highly economical monthly rental rates.
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
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0f172a; margin-bottom: 12px;">
                    Our Step-by-Step Moving Process
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    A systematic, dependable 6-stage shifting workflow ensuring your relocation in Gamharia is completely organized and stress-free.
                </p>
            </div>

            <div style="overflow-x: auto; margin-bottom: 20px;">
                <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
                    <thead>
                        <tr style="background: #1e293b; color: #ffffff;">
                            <th style="padding: 14px 18px; width: 12%;">Stage</th>
                            <th style="padding: 14px 18px; width: 22%;">Action Item</th>
                            <th style="padding: 14px 18px; width: 38%;">Execution Protocol & Details</th>
                            <th style="padding: 14px 18px; width: 28%;">Client Benefit & Assurance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 01</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #0f172a;">Doorstep Survey & Estimate</td>
                            <td style="padding: 14px 18px; color: #475569;">Free physical visit in Gamharia/Adityapur or rapid digital video survey to assess furniture dimensions, machinery parts, and access elevators.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Accurate fixed-rate quote with zero hidden surcharges on moving day.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 02</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #0f172a;">5-Layer Defensive Packing</td>
                            <td style="padding: 14px 18px; color: #475569;">Careful packing using virgin bubble wrap, corrugated sheets, foam rolls, and heavy 5-ply cartons. Dismantling of beds and wardrobes.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Maximum shock absorption and scratch-free protection for fragile items.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 03</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #0f172a;">Safe Loading & Securing</td>
                            <td style="padding: 14px 18px; color: #475569;">Systematic loading into specialized closed container trucks using heavy-duty belts, cargo nets, and non-slip floor padding.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Prevents cargo shift and vibration damage on expressway turns.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 04</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #0f172a;">Live GPS Tracked Transit</td>
                            <td style="padding: 14px 18px; color: #475569;">Smooth highway navigation over Tata-Kandra Expressway and national highways with continuous real-time satellite GPS tracking.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Real-time shipment updates and guaranteed punctual arrival schedules.</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 05</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #0f172a;">Unloading & Room Placement</td>
                            <td style="padding: 14px 18px; color: #475569;">Unloading cartons and placing them directly into corresponding bedrooms, living rooms, and kitchens as designated by the customer.</td>
                            <td style="padding: 14px 18px; color: #16a34a; font-weight: 600;">Zero manual labor or heavy lifting stress for you and your family.</td>
                        </tr>
                        <tr style="background: #f8fafc;">
                            <td style="padding: 14px 18px; font-weight: 700; color: #e67e22;">Stage 06</td>
                            <td style="padding: 14px 18px; font-weight: 600; color: #0f172a;">Reassembly & Verification</td>
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
                    <div style="color: #0f172a; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">
                        <i class="fa-solid fa-warehouse" style="color: #0284c7;"></i> Secure Warehouse Facilities
                    </div>
                    <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0f172a; margin-bottom: 20px; line-height: 1.3;">
                        Secure Warehousing & Storage Facilities for Gamharia
                    </h2>
                    <p style="margin-bottom: 16px;">
                        Finding safe, clean, and weatherproof storage during property transitions, delayed factory expansions, or corporate postings can be difficult in busy industrial hubs. Shree Ashirwad Packers and Movers provides modern warehousing facilities situated conveniently along the Tata-Kandra corridor.
                    </p>
                    <p style="margin-bottom: 16px;">
                        Our secure warehouses feature:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 14px; margin: 0 0 20px;">
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-video" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #0f172a;">24/7 Security & CCTV</strong>
                            </div>
                            <p style="margin: 0; font-size: 13px; color: #475569; line-height: 1.5;">24-hour on-duty physical security personnel coupled with continuous closed-circuit television (CCTV) cameras.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-pallet" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #0f172a;">Moisture-Proof Pallets</strong>
                            </div>
                            <p style="margin: 0; font-size: 13px; color: #475569; line-height: 1.5;">Heavy-duty wooden and plastic pallets elevating goods off concrete floors to prevent dampness and water seepage.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-bug-slash" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #0f172a;">Pest & Termite Control</strong>
                            </div>
                            <p style="margin: 0; font-size: 13px; color: #475569; line-height: 1.5;">Scheduled pest control, rodent treatments, and termite repellent spraying to safeguard wooden items and archives.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                                <i class="fa-solid fa-calendar-check" style="color: #0284c7;"></i>
                                <strong style="font-size: 14px; color: #0f172a;">Flexible Lease Terms</strong>
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
                            <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Commercial Goods and Household Storage Warehouse Gamharia" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-warehouse" style="color: #60a5fa; margin-right: 8px;"></i> Pest-controlled, moisture-free storage and warehousing serving Gamharia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 8: Localities and Coverage in Gamharia Block -->
        <section class="content-section" style="margin-bottom: 50px; background: #f8fafc; padding: 40px; border-radius: 14px; border: 1px solid #e2e8f0;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 30px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0f172a; margin-bottom: 12px;">
                    Localities & Vicinities Covered Across Gamharia
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    Our local pickup vehicles and packing crews provide swift doorstep service across all residential areas, industrial phases, and colonies in Gamharia:
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px;">
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0f172a; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0f172a; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Lal Building Chowk</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Central commercial & retail area</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0f172a; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0f172a; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Chota & Bada Gamharia</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">High-density residential sectors</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0f172a; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0f172a; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Usha Martin Colony</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Corporate executive townships</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0f172a; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0f172a; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> AIADA Industrial Phase 1-7</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Manufacturing units & factory parks</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0f172a; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0f172a; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Jagannathpur & Asangi</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Suburban residential settlements</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0f172a; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0f172a; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Tata-Kandra 4-Lane Road</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Expressway commercial corridor</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0f172a; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0f172a; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Adityapur Border Zone</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Connecting Jamshedpur bridge route</div>
                </div>
                <div style="background: #ffffff; padding: 15px 18px; border-radius: 8px; border-left: 3px solid #0f172a; box-shadow: 0 2px 6px rgba(0,0,0,0.03);">
                    <strong style="color: #0f172a; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #e67e22; margin-right: 6px;"></i> Kandra & Sini Junction</strong>
                    <div style="font-size: 12px; color: #64748b; margin-top: 3px;">Railway and logistics junction</div>
                </div>
            </div>
        </section>

        <!-- Section 9: Why Choose Shree Ashirwad Packers and Movers -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 35px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0f172a; margin-bottom: 12px;">
                    Why Clients in Gamharia Trust Shree Ashirwad
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    We bring unyielding integrity, deep corporate relocation proficiency, and caring customer support to every relocation.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 25px;">
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #00c853; flex-shrink: 0;"><i class="fa-solid fa-shield-halved"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Zero Hidden Charges Guarantee</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">Our written moving quotation includes all packaging supplies, labour, expressway tolls, and transport freight. You never pay unexpected surcharges on delivery.</p>
                    </div>
                </div>
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #0284c7; flex-shrink: 0;"><i class="fa-solid fa-file-invoice"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">100% Valid Corporate Reimbursement</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">We supply full GST invoices, LR consignment copies, insurance papers, and itemized inventory lists for effortless employer reimbursement.</p>
                    </div>
                </div>
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #e67e22; flex-shrink: 0;"><i class="fa-solid fa-truck-ramp-box"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">In-House Experienced Crew</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">Our staff are full-time trained professionals, not daily-wage ad-hoc labourers. They handle your delicate glassware, temple idols, and furniture with supreme respect.</p>
                    </div>
                </div>
                <div style="display: flex; gap: 16px; background: #ffffff; padding: 22px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 3px 10px rgba(0,0,0,0.03);">
                    <div style="font-size: 28px; color: #ec4899; flex-shrink: 0;"><i class="fa-solid fa-satellite"></i></div>
                    <div>
                        <h4 style="font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Active GPS Tracking & 24/7 Desk</h4>
                        <p style="font-size: 14px; color: #475569; margin: 0;">Track your truck along expressways and highways in real-time. Our dedicated move coordinator is accessible around the clock for milestone updates.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Local Google Map Embed -->
        <div style="margin: 35px 0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58850.123456789!2d86.0900!3d22.8100!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f5e5123456789%3A0x7d6a5d4e3c2b1a0!2sGamharia%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Map Location of Gamharia Adityapur Jamshedpur"></iframe>
        </div>

        <!-- Section 10: Frequently Asked Questions (Accordion) -->
        <section class="content-section" style="margin-bottom: 50px;">
            <div style="text-align: center; max-width: 800px; margin: 0 auto 35px;">
                <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.5vw, 2.4rem); font-weight: 700; color: #0f172a; margin-bottom: 12px;">
                    Frequently Asked Questions - Gamharia Moving
                </h2>
                <p style="color: #64748b; font-size: 15px;">
                    Find instant answers to common questions about moving in Gamharia, rates, industrial logistics, and vehicle shipping:
                </p>
            </div>

            <div class="faq-container" style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0f172a; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        What relocation services does Shree Ashirwad Packers offer in Gamharia?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        We provide residential household shifting, industrial plant equipment and factory moves, corporate engineer transfers, enclosed car carrier transport, bike courier shipping, secure warehousing, and comprehensive transit insurance throughout Gamharia and Adityapur.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0f172a; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        How much does home relocation cost in Gamharia and Adityapur?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Local moves in Gamharia or between Gamharia and Jamshedpur start from ₹3,500 for 1BHK apartments. Long-distance relocations to Ranchi, Kolkata, Pune, or Delhi range from ₹6,500 to ₹32,000 depending on inventory volume, packing tier, and distance.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0f172a; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        Do you provide relocation services for industrial units in AIADA?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Yes, we are highly experienced in handling commercial machinery, industrial spare parts, CNC machine components, corporate IT hardware, and office workstations with specialized hydraulic equipment and heavy-duty lashing straps.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0f172a; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        How do you protect delicate household furniture and electronics during transit?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        We implement a strict 5-layer protective packing protocol comprising virgin non-abrasive foam wrap, thick 80 GSM air bubble cushioning, heavy corrugated edge guards, 5-ply cartons, and waterproof stretch wrap film.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0f172a; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        Can you safely transport cars and two-wheelers from Gamharia across India?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Yes, we operate enclosed automobile car carriers and customized hydraulic motorcycle cages with wheel clamps, bubble cushioning, GPS tracking, and complete transit insurance to deliver vehicles safely nationwide.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0f172a; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        Are your invoices valid for corporate transfer allowance reimbursement?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        Yes, we provide 100% authentic GST-compliant invoices, official consignment notes (LR copy), detailed itemized packing lists, and transit insurance policies accepted by all private companies, PSUs, and MNCs.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0f172a; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        How far in advance should I book my move in Gamharia?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        We recommend booking 2 to 4 days ahead for local moves and 4 to 7 days ahead for outstation moves. However, we also cater to urgent same-day or next-day shifting requirements subject to vehicle availability.
                    </p>
                </details>

                <details style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; padding: 18px 22px; box-shadow: 0 2px 6px rgba(0,0,0,0.02);">
                    <summary style="font-family: 'Outfit', sans-serif; font-weight: 600; font-size: 17px; color: #0f172a; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        How can I book Packers and Movers in Gamharia?
                        <i class="fa-solid fa-chevron-down" style="color: #e67e22; font-size: 14px;"></i>
                    </summary>
                    <p style="margin-top: 14px; font-size: 15px; color: #475569; line-height: 1.7;">
                        You can call our 24/7 Gamharia customer support desk at +91 8409531615 or +91 9308888746, or fill out our online quick quote form on this page to schedule an immediate free doorstep survey.
                    </p>
                </details>
            </div>
        </section>

        <!-- Section: Google My Business Authentic Reviews -->
<?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

<!-- Section 11: Call to Action Banner -->
        <section class="cta-banner" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); color: #ffffff; padding: 45px 35px; border-radius: 16px; text-align: center; box-shadow: 0 15px 35px rgba(15,23,42,0.25);">
            <h2 style="font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 2.8vw, 2.5rem); font-weight: 700; margin-bottom: 15px; color: #ffffff;">
                Planning to Relocate in Gamharia or Adityapur?
            </h2>
            <p style="font-size: 16px; color: #cbd5e1; max-width: 720px; margin: 0 auto 28px; line-height: 1.7;">
                Reach out to Shree Ashirwad Packers and Movers today for a transparent, budget-friendly estimate, professional packaging, and stress-free transit across Jharkhand and nationwide.
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
