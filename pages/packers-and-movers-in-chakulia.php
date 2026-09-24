<?php
/**
 * Packers and Movers in Chakulia - Shree Ashirwad Packers and Movers
 * Website: https://www.shreeashirwadpackers.com
 * Contact: +91 8409531615 / +91 9308888746
 * Office: Serving Chakulia, Ghatshila, East Singhbhum, Jharkhand
 */

require_once __DIR__ . '/includes/config.php';

// Page-specific variables
$page_title = "Packers and Movers in Chakulia - 8409531615 | Shree Ashirwad Packers";
$page_description = "Trusted packers and movers in Chakulia (East Singhbhum). Safe household shifting, vehicle transportation, rice mill & commercial relocation, full transit insurance. Call 8409531615.";
$page_keywords = "packers and movers in chakulia, best movers and packers chakulia, household shifting chakulia east singhbhum, car transport chakulia, bike courier chakulia, commercial shifting chakulia, shree ashirwad packers chakulia";
$canonical_url = SITE_BASE_URL . "/packers-and-movers-in-chakulia";
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
  <style>
    @media (max-width: 991px) {
      .page-layout-grid {
        display: flex !important;
        flex-direction: column !important;
        gap: 30px !important;
      }
      .sidebar-column {
        position: static !important;
        width: 100% !important;
      }
    }
  </style>

    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Structured Data: MovingCompany -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MovingCompany",
      "name": "Shree Ashirwad Packers and Movers - Chakulia",
      "image": "<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg",
      "@id": "<?php echo $canonical_url; ?>#movingcompany",
      "url": "<?php echo $canonical_url; ?>",
      "telephone": "+918409531615",
      "keywords": "packers and movers in chakulia, packers and movers chakulia, best packers and movers in chakulia, household shifting chakulia, car transport chakulia, bike parcel chakulia, iba approved packers chakulia, local shifting chakulia",
      "priceRange": "INR 3500 - 50000",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Main Bazar Road, Near Chakulia Railway Station",
        "addressLocality": "Chakulia, East Singhbhum",
        "addressRegion": "Jharkhand",
        "postalCode": "832301",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 22.4828,
        "longitude": 86.7197
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
        "https://www.youtube.com/@shreeashirwadpackers"
      ]
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
          "name": "Packers and Movers Jharkhand",
          "item": "<?php echo SITE_BASE_URL; ?>/#service-areas"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Chakulia",
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
          "name": "How does Shree Ashirwad Packers handle moves in Chakulia?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Chakulia is a strategic commercial hub in East Singhbhum near the West Bengal and Odisha borders. Shree Ashirwad Packers and Movers deploys dedicated local packing teams and GPS-tracked container trucks to service residential colonies, trading establishments, and rice mill zones with premium packing and door-to-door transit."
          }
        },
        {
          "@type": "Question",
          "name": "What are the shifting charges from Chakulia to Jamshedpur or Ranchi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Moving from Chakulia to Jamshedpur (approx. 75 km) typically costs between ₹8,000 and ₹14,000 for a 1/2 BHK apartment. Relocating to Ranchi (approx. 200 km) ranges from ₹15,000 to ₹23,000 depending upon the volume of goods and packaging grade selected."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide interstate shifting to West Bengal and Odisha from Chakulia?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, Chakulia enjoys seamless road connectivity to Jhargram, Kharagpur, Medinipur, Kolkata, and Baripada (Odisha). We manage all border documentation, e-way bills, and transit permits for hassle-free interstate household and commercial relocations."
          }
        },
        {
          "@type": "Question",
          "name": "Can you transport cars and two-wheelers safely from Chakulia?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Absolutely. We operate specialized closed car carriers and secured two-wheeler transport vehicles. Every bike is wrapped in bubble film and secured with wheel brackets, backed by comprehensive transit insurance."
          }
        },
        {
          "@type": "Question",
          "name": "Are your invoices and consignment notes approved for government transfer claims?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, Shree Ashirwad Packers and Movers is an IBA-approved and ISO-certified logistics company. We provide GST invoices, consignment notes (bilty), and detailed packing inventories accepted by railways, banks, and state/central government offices."
          }
        },
        {
          "@type": "Question",
          "name": "How do you protect furniture and electronics from humidity and rain in Chakulia?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Being in the Subarnarekha river basin, Chakulia experiences high seasonal humidity. We use 5-layer protective packing comprising air bubble wrap, thick corrugated sheets, corner edge guards, and airtight stretch cling film, transported in fully sealed metal containers."
          }
        },
        {
          "@type": "Question",
          "name": "How much advance notice is required to book a move in Chakulia?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Booking 2 to 3 days in advance allows us to allocate the optimal truck size and packing crew. For urgent relocations, our express shifting team can arrange same-day packing and loading across Chakulia and Ghatshila."
          }
        },
        {
          "@type": "Question",
          "name": "How can I get an accurate cost quotation for my move in Chakulia?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Call our customer service team at +91 8409531615 or WhatsApp us at +91 9308888746. We provide free doorstep physical surveys in Chakulia or swift video estimates with transparent, fixed-rate pricing."
          }
        }
      ]
    }
    </script>
</head>
<body class="page-template">
<?php include_once __DIR__ . '/includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero-section" style="background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 58, 138, 0.92) 100%), url('<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg') center/cover no-repeat; color: #ffffff; padding: 90px 0 70px;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <div class="row" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 40px;">
            <div class="hero-content" style="flex: 1 1 600px; max-width: 680px;">
                <div class="badge-tag" style="display: inline-flex; align-items: center; gap: 8px; background: rgba(37, 99, 235, 0.25); border: 1px solid rgba(59, 130, 246, 0.5); padding: 6px 14px; border-radius: 30px; font-size: 14px; font-weight: 600; color: #93c5fd; margin-bottom: 20px;">
                    <i class="fa-solid fa-award"></i> Tri-Border Moving & Logistics Specialist
                </div>
                <h1 style="font-size: clamp(32px, 4.5vw, 48px); font-weight: 800; line-height: 1.2; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                    Professional Packers and Movers in <span style="color: #60a5fa;">Chakulia</span>
                </h1>
                <p style="font-size: 17px; line-height: 1.65; color: #e2e8f0; margin-bottom: 28px;">
                    Planning a home relocation, vehicle transport, or commercial shifting in Chakulia? Shree Ashirwad Packers and Movers provides top-tier, zero-damage shifting services across East Singhbhum. Positioned right near the Jharkhand-Bengal-Odisha border, we offer flawless connectivity to Jamshedpur, Ranchi, Kharagpur, Kolkata, and Baripada with premium multi-layer packing and verified transit insurance.
                </p>
                <div class="hero-cta-group" style="display: flex; flex-wrap: wrap; gap: 15px; margin-bottom: 30px;">
                    <a href="tel:8409531615" class="btn-primary" style="display: inline-flex; align-items: center; gap: 10px; background: #ef4444; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; box-shadow: 0 10px 20px rgba(239, 68, 68, 0.3); transition: all 0.3s ease;">
                        <i class="fa-solid fa-phone-volume"></i> Call 8409531615
                    </a>
                    <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20moving%20in%20Chakulia" target="_blank" class="btn-whatsapp" style="display: inline-flex; align-items: center; gap: 10px; background: #22c55e; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; box-shadow: 0 10px 20px rgba(34, 197, 94, 0.3); transition: all 0.3s ease;">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp Quote
                    </a>
                </div>
                <div class="hero-features" style="display: flex; flex-wrap: wrap; gap: 20px; font-size: 14px; color: #cbd5e1;">
                    <span><i class="fa-solid fa-check-circle" style="color: #22c55e; margin-right: 6px;"></i> IBA Approved Bilty</span>
                    <span><i class="fa-solid fa-check-circle" style="color: #22c55e; margin-right: 6px;"></i> Sealed Metal Containers</span>
                    <span><i class="fa-solid fa-check-circle" style="color: #22c55e; margin-right: 6px;"></i> Complete Transit Insurance</span>
                </div>
            </div>
            <div class="hero-media" style="flex: 1 1 420px; max-width: 480px;">
                <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 16px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.4); border: 3px solid rgba(255,255,255,0.15);">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Packers and Movers in Chakulia - High quality household packing by Shree Ashirwad Packers" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                    <div class="media-overlay-badge" style="position: absolute; bottom: 20px; left: 20px; right: 20px; background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(8px); padding: 14px 18px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2);">
                        <p style="margin: 0; font-size: 13px; color: #f1f5f9; font-weight: 500;">
                            <i class="fa-solid fa-boxes-packing" style="color: #60a5fa; margin-right: 6px;"></i> High-density bubble wrap & corrugated rolls protecting household goods in Chakulia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Breadcrumb Navigation -->
<nav class="breadcrumb-container" aria-label="Breadcrumb" style="background: #f1f5f9; padding: 14px 0; border-bottom: 1px solid #e2e8f0;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <ol style="display: flex; flex-wrap: wrap; list-style: none; padding: 0; margin: 0; font-size: 14px; gap: 8px; align-items: center;">
            <li><a href="<?php echo SITE_BASE_URL; ?>/" style="color: #475569; text-decoration: none;"><i class="fa-solid fa-house" style="margin-right: 4px;"></i> Home</a></li>
            <li style="color: #94a3b8;">/</li>
            <li><a href="<?php echo SITE_BASE_URL; ?>/#service-areas" style="color: #475569; text-decoration: none;">Jharkhand</a></li>
            <li style="color: #94a3b8;">/</li>
            <li style="color: #1e3a8a; font-weight: 600;" aria-current="page">Chakulia</li>
        </ol>
    </div>
</nav>

<!-- Main Content Section -->
<main class="content-section" style="padding: 70px 0; background: #ffffff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <div class="row" style="display: flex; flex-wrap: wrap; gap: 40px;">
            <div class="main-column" style="flex: 1 1 760px;">
                
                <!-- Section 1: Overview & Strategic Tri-State Connectivity -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Chakulia's Leading Packers and Movers for Seamless Transitions
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
                        Nestled in the southeastern corner of East Singhbhum district, <strong>Chakulia</strong> holds a historic and commercial significance unique to Jharkhand. Historically celebrated for its World War II allied airfield and recognized today as a bustling center of rice mills, bamboo trade, soapstone craft, and bidi industries, Chakulia serves as a crucial economic bridge connecting Jharkhand with the neighboring states of West Bengal and Odisha. With the busy Tatanagar-Kharagpur railway line passing through its core and high-grade highway links to Ghatshila (30 km), Jamshedpur (75 km), Jhargram (45 km), and Baripada (70 km), the township experiences constant movement of residents, entrepreneurs, and government personnel.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
                        Relocating in and out of Chakulia comes with specific logistical needs. While commercial and residential centers around Station Road, Main Bazar, and Puranabasti feature bustling marketplaces and traditional alleys, expanding suburban zones near the Airfield Area, Kankrashol, and Lodhasholi require larger container trucks capable of long-haul highway transit. Furthermore, moving across state lines into West Bengal or Odisha demands complete mastery over border documentation, road tax compliance, and consignment tracking.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 25px;">
                        <strong>Shree Ashirwad Packers and Movers</strong> brings years of hands-on experience to Chakulia. Our trained moving crews handle every possession with precision—from multi-layer cushioning for delicate chinaware and modular beds to custom strapping for heavy industrial inventory and two-wheelers. By combining specialized transport containers with authentic IBA documentation, we ensure your relocation is prompt, compliant, and completely free of anxiety.
                    </p>

                    <!-- Verified Image Embed 1 -->
                    <div class="content-media-embed" style="margin: 30px auto; max-width: 420px; width: 100%;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 12px 28px rgba(0,0,0,0.12);">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Household packaging in Chakulia by Shree Ashirwad Packers" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-box" style="color: #60a5fa; margin-right: 8px;"></i> Multi-layer bubble wrap & heavy corrugated cartons for household shifting in Chakulia.</p>
                            </div>
                        </div>
                    </div>

                    <div class="highlight-quote-box" style="background: #eff6ff; border-left: 4px solid #2563eb; padding: 20px 24px; border-radius: 0 8px 8px 0; margin-bottom: 30px;">
                        <p style="margin: 0; font-size: 15px; font-style: italic; color: #1e3a8a; line-height: 1.7;">
                            "In border towns like Chakulia, relocation requires more than standard tempos. It demands reliable multi-state permits, resilient packaging against river humidity, and respectful customer service. Shree Ashirwad Packers delivers excellence at every milestone of your journey."
                        </p>
                    </div>
                </article>

                <!-- Section 2: Comprehensive Shifting Solutions -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 24px; font-family: 'Outfit', sans-serif;">
                        Tailored Relocation Services in Chakulia
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 24px;">
                        From cozy residential quarters to expansive commercial facilities, we provide end-to-end relocation solutions structured to fit your specific goods and destination:
                    </p>

                    <div class="services-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px; margin-bottom: 35px;">
                        <div class="service-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; transition: all 0.3s ease;">
                            <div class="service-icon" style="width: 50px; height: 50px; background: #dbeafe; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #1e40af; font-size: 22px; margin-bottom: 16px;">
                                <i class="fa-solid fa-house-chimney-window"></i>
                            </div>
                            <h3 style="font-size: 19px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Full Household Relocation</h3>
                            <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                Complete home shifting covering drawing room sofas, solid wood furniture, televisions, refrigerators, washing machines, and sensitive kitchenware with methodical room-wise labeling.
                            </p>
                        </div>

                        <div class="service-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; transition: all 0.3s ease;">
                            <div class="service-icon" style="width: 50px; height: 50px; background: #fee2e2; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #b91c1c; font-size: 22px; margin-bottom: 16px;">
                                <i class="fa-solid fa-motorcycle"></i>
                            </div>
                            <h3 style="font-size: 19px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Bike & Scooter Transport</h3>
                            <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                Scratch-proof motorcycle and scooter shifting. We wrap tanks, headlights, and silencers in heavy-duty foam, securing the bike onto wheel-lock chassis inside covered vehicles.
                            </p>
                        </div>

                        <div class="service-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; transition: all 0.3s ease;">
                            <div class="service-icon" style="width: 50px; height: 50px; background: #fef3c7; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #b45309; font-size: 22px; margin-bottom: 16px;">
                                <i class="fa-solid fa-car-side"></i>
                            </div>
                            <h3 style="font-size: 19px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Car Carrier Transport</h3>
                            <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                Specialized enclosed hydraulic car carriers for zero-odometer, zero-scratch transport from Chakulia to Kolkata, Delhi NCR, Pune, Bengaluru, and pan-India destinations.
                            </p>
                        </div>

                        <div class="service-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; transition: all 0.3s ease;">
                            <div class="service-icon" style="width: 50px; height: 50px; background: #dcfce7; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #15803d; font-size: 22px; margin-bottom: 16px;">
                                <i class="fa-solid fa-industry"></i>
                            </div>
                            <h3 style="font-size: 19px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Commercial & Mill Shifting</h3>
                            <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                Reliable commercial shifting for rice mill offices, trade inventory, banks, schools, and small enterprises across the Chakulia-Ghatshila-Jamshedpur commercial belt.
                            </p>
                        </div>
                    </div>

                    <!-- Verified Image Embed 2 -->
                    <div class="content-media-embed" style="margin: 35px 0;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; max-width: 420px; margin: 0 auto; border-radius: 14px; overflow: hidden; box-shadow: 0 12px 28px rgba(0,0,0,0.12);">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Packers and movers delivery truck in Chakulia by Shree Ashirwad Packers" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 20px; color: #ffffff;">
                                <p style="margin: 0; font-size: 14px; font-weight: 600;"><i class="fa-solid fa-truck-ramp-box" style="color: #60a5fa; margin-right: 8px;"></i> Modern containerized vehicles delivering safe door-to-door relocations across East Singhbhum.</p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Section 3: High-Grade Packaging Matrix -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        5-Layer Protective Packaging for River Basin Conditions
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
                        The Subarnarekha river plains around Chakulia encounter humid summers and intense monsoon rainstorms. Regular cardboard boxes degrade rapidly when exposed to road moisture or atmospheric dampness. To ensure your belongings remain in factory-fresh condition, Shree Ashirwad Packers utilizes our signature <strong>5-Layer Packaging Standard</strong>:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 15px; margin: 20px 0 30px;">
                        <div style="background: #f8fafc; border-top: 3px solid #2563eb; padding: 16px; border-radius: 6px;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 6px;"><i class="fa-solid fa-circle-check" style="color: #2563eb; margin-right: 6px;"></i> Thermal Cushioning Air Bubble Wrap:</strong>
                            <span style="font-size: 14px; color: #475569;">Double-layered 100 GSM air bubble film securely enclosing electronics, micro-ovens, computer screens, and fine porcelain.</span>
                        </div>
                        <div style="background: #f8fafc; border-top: 3px solid #1e3a8a; padding: 16px; border-radius: 6px;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 6px;"><i class="fa-solid fa-circle-check" style="color: #1e3a8a; margin-right: 6px;"></i> Heavy-Duty Corrugated Board Armor:</strong>
                            <span style="font-size: 14px; color: #475569;">Rugged 5-ply and 7-ply virgin paper wrapping around wooden almirahs, dining tables, and sofa structures to protect finishes.</span>
                        </div>
                        <div style="background: #f8fafc; border-top: 3px solid #2563eb; padding: 16px; border-radius: 6px;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 6px;"><i class="fa-solid fa-circle-check" style="color: #2563eb; margin-right: 6px;"></i> Rigid Corner Angle Protectors:</strong>
                            <span style="font-size: 14px; color: #475569;">Molded corner bumpers applied to glass tabletops, dressing table mirrors, and marble slabs to absorb edge shock during transit.</span>
                        </div>
                        <div style="background: #f8fafc; border-top: 3px solid #1e3a8a; padding: 16px; border-radius: 6px;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 6px;"><i class="fa-solid fa-circle-check" style="color: #1e3a8a; margin-right: 6px;"></i> Hermetic Stretch Cling Wrap:</strong>
                            <span style="font-size: 14px; color: #475569;">High-gauge LDPE shrink film wrapped 360 degrees around all boxed goods, creating an impenetrable barrier against dust, moisture, and rainwater.</span>
                        </div>
                        <div style="background: #f8fafc; border-top: 3px solid #2563eb; padding: 16px; border-radius: 6px;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 6px;"><i class="fa-solid fa-circle-check" style="color: #2563eb; margin-right: 6px;"></i> Heavy-Duty Cargo Ratchet Belts:</strong>
                            <span style="font-size: 14px; color: #475569;">Inside the truck, every tier of goods is strapped firmly against structural ribs to eliminate swaying or sliding on winding rural highways.</span>
                        </div>
                    </div>
                </article>

                <!-- Section 4: Transparent Pricing Tables -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 16px; font-family: 'Outfit', sans-serif;">
                        Estimated Shifting Costs in Chakulia - Upfront & Transparent
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 22px;">
                        We believe that trust begins with clear pricing. We provide all-inclusive quotes covering premium packing materials, skilled labor, transport toll charges, and doorstep unloading without surprise markups:
                    </p>

                    <h3 style="font-size: 20px; font-weight: 700; color: #1e3a8a; margin-bottom: 14px;">
                        Table 1: Local & Regional Moving Charges from Chakulia
                    </h3>
                    <div class="table-responsive" style="overflow-x: auto; margin-bottom: 35px; border-radius: 10px; border: 1px solid #e2e8f0;">
                        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14.5px;">
                            <thead>
                                <tr style="background: #1e3a8a; color: #ffffff;">
                                    <th style="padding: 14px 16px; font-weight: 600;">Relocation Type</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">Approximate Distance</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">Packing & Labor Cost</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">Transportation Cost</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">Total Estimated Cost</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">1 BHK Local Move (Within Chakulia)</td>
                                    <td style="padding: 14px 16px; color: #475569;">Up to 10 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹1,800 - ₹2,500</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹1,700 - ₹2,500</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹3,500 - ₹5,000</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">2 BHK Local Shifting</td>
                                    <td style="padding: 14px 16px; color: #475569;">Up to 15 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹2,800 - ₹3,800</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹2,700 - ₹3,700</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹5,500 - ₹7,500</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">3 BHK / Family Bungalow</td>
                                    <td style="padding: 14px 16px; color: #475569;">Up to 20 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹4,200 - ₹5,800</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹3,800 - ₹5,200</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹8,000 - ₹11,000</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chakulia to Ghatshila (2 BHK)</td>
                                    <td style="padding: 14px 16px; color: #475569;">32 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹3,200 - ₹4,500</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹4,000 - ₹5,500</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹7,200 - ₹10,000</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chakulia to Jamshedpur</td>
                                    <td style="padding: 14px 16px; color: #475569;">75 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹3,800 - ₹5,500</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹7,500 - ₹10,500</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹11,300 - ₹16,000</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chakulia to Ranchi</td>
                                    <td style="padding: 14px 16px; color: #475569;">205 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹4,800 - ₹7,000</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹12,000 - ₹16,000</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹16,800 - ₹23,000</td>
                                </tr>
                                <tr style="background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Bike Shifting (Up to 100 km)</td>
                                    <td style="padding: 14px 16px; color: #475569;">Regional</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹600 - ₹900</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹1,600 - ₹2,300</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹2,200 - ₹3,200</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h3 style="font-size: 20px; font-weight: 700; color: #1e3a8a; margin-bottom: 14px;">
                        Table 2: Interstate Routes from Chakulia (West Bengal, Odisha & Pan-India)
                    </h3>
                    <div class="table-responsive" style="overflow-x: auto; margin-bottom: 35px; border-radius: 10px; border: 1px solid #e2e8f0;">
                        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14.5px;">
                            <thead>
                                <tr style="background: #0f172a; color: #ffffff;">
                                    <th style="padding: 14px 16px; font-weight: 600;">Destination City</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">Distance</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">Transit Duration</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">Household (1-2 BHK)</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">Car Shifting</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chakulia to Jhargram (WB)</td>
                                    <td style="padding: 14px 16px; color: #475569;">45 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">Same Day</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #2563eb;">₹9,000 - ₹13,500</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹5,000 - ₹7,000</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chakulia to Baripada (Odisha)</td>
                                    <td style="padding: 14px 16px; color: #475569;">70 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">1 Day</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #2563eb;">₹11,500 - ₹16,000</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹6,000 - ₹8,500</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chakulia to Kharagpur / Medinipur</td>
                                    <td style="padding: 14px 16px; color: #475569;">85 - 95 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">1 Day</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #2563eb;">₹13,000 - ₹18,500</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹6,500 - ₹9,000</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chakulia to Kolkata / Howrah</td>
                                    <td style="padding: 14px 16px; color: #475569;">215 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">1 - 2 Days</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #2563eb;">₹18,000 - ₹26,000</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹9,000 - ₹13,000</td>
                                </tr>
                                <tr style="background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chakulia to Delhi NCR / Bengaluru</td>
                                    <td style="padding: 14px 16px; color: #475569;">1400 - 1700 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">4 - 6 Days</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #2563eb;">₹32,000 - ₹47,000</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹16,000 - ₹22,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Verified Image Embed 3 -->
                    <div class="content-media-embed" style="margin: 35px 0;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; max-width: 420px; margin: 0 auto; border-radius: 14px; overflow: hidden; box-shadow: 0 12px 28px rgba(0,0,0,0.12);">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transport carrier loading in Chakulia by Shree Ashirwad Packers" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 20px; color: #ffffff;">
                                <p style="margin: 0; font-size: 14px; font-weight: 600;"><i class="fa-solid fa-car-rear" style="color: #60a5fa; margin-right: 8px;"></i> Specially engineered hydraulic car loading ramps for zero bumper scraping.</p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Section 5: Step-by-Step Moving Process -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Our 6-Step Flawless Relocation Process in Chakulia
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 25px;">
                        A successful move depends upon disciplined methodology. We execute each relocation in Chakulia through a systematic 6-step operational chain:
                    </p>

                    <div class="timeline-steps" style="display: flex; flex-direction: column; gap: 20px;">
                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">1</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Free Pre-Move Inventory Assessment</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    Our Chakulia representative conducts a doorstep physical survey or a rapid video audit to quantify packing supplies, vehicle volume, and manpower, submitting an upfront binding quotation.
                                </p>
                            </div>
                        </div>

                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">2</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Room-by-Room Systematic Protective Packaging</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    Our experienced crew arrives equipped with virgin bubble wrap, corrugated sheets, edge protectors, and heavy cartons. Every box is marked with room destinations and inventory numbers.
                                </p>
                            </div>
                        </div>

                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">3</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Professional Furniture Disassembly & Labeling</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    Master carpenters carefully dismantle heavy modular beds, wardrobes, and conference desks. All assembly hardware, bolts, and screws are cataloged in clearly labeled pouch packs.
                                </p>
                            </div>
                        </div>

                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">4</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Strategic Loading & Ratchet Anchoring</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    Goods are stacked methodically inside our metal-body containers with heavier items anchored at the base. Industrial ratchet tie-downs prevent shifting during highway transit.
                                </p>
                            </div>
                        </div>

                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">5</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">GPS-Monitored Highway Transit & Border Clearances</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    Vehicles are tracked via live GPS. We manage border checkpoint formalities into West Bengal or Odisha smoothly, keeping customers updated on highway progress and arrival ETAs.
                                </p>
                            </div>
                        </div>

                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">6</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Doorstep Unloading, Reassembly & Debris Removal</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    Our team delivers every box into its designated room, reassembles beds and tables, tests primary appliances, and removes packing debris so you can settle in immediately.
                                </p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Section 6: Warehousing & Transit Insurance -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Clean Warehousing & All-Risk Transit Insurance
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
                        For families renovating their premises, commercial enterprises awaiting warehouse handover, or government officers on temporary duty, we provide clean, pest-proof, and CCTV-guarded storage facilities. Your possessions remain elevated on moisture-resistant pallets, sheltered from dampness and theft.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 25px;">
                        Furthermore, every long-haul consignment is supported by our comprehensive <strong>All-Risk Transit Insurance</strong> policy. Underwritten by India’s leading public and private insurers, this policy covers collision, overturning, fire, and flood, ensuring total economic protection and fast claims resolution.
                    </p>

                    <!-- Verified Image Embed 4 -->
                    <div class="content-media-embed" style="margin: 35px 0;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; max-width: 420px; margin: 0 auto; border-radius: 14px; overflow: hidden; box-shadow: 0 12px 28px rgba(0,0,0,0.12);">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Commercial and household storage warehouse serving Chakulia by Shree Ashirwad Packers" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 20px; color: #ffffff;">
                                <p style="margin: 0; font-size: 14px; font-weight: 600;"><i class="fa-solid fa-warehouse" style="color: #60a5fa; margin-right: 8px;"></i> Secured, climate-regulated warehouse space protecting goods for short and long-term storage.</p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Section 7: Key Neighborhoods & Rural Sectors in Chakulia -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Areas & Localities We Service in Chakulia
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 20px;">
                        We operate an extensive logistics network providing doorstep pickup and delivery across all neighborhoods, market belts, and village clusters in Chakulia and nearby East Singhbhum zones:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 14px; margin-bottom: 25px;">
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Chakulia Main Bazar</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Station Road Belt</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Historic Airfield Area</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Puranabasti & Bidi Mohalla</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Kankrashol Sector</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Simdi & Lodhasholi</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Dhalbhumgarh Link Road</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Ghatshila Highway Corridor</div>
                    </div>
                    <p style="font-size: 15px; color: #64748b; line-height: 1.7;">
                        We also coordinate rapid daily transports linking Chakulia with Ghatshila, Bahragora, Dhalbhumgarh, Musabani, Jaduguda, Jhargram, and Tatanagar.
                    </p>
                </article>

                <!-- Section: Tri-Border Documentation & Practical Moving Tips -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Tri-Border Relocation Guidance & Reimbursement Documentation Support
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
                        Given Chakulia’s geographic position near the West Bengal and Odisha borders, a high volume of relocations involve inter-state administrative or corporate transfers. Whether claiming government relocation grant allowances or completing commercial tax declarations, having authentic and auditable documentation is indispensable. Shree Ashirwad Packers and Movers delivers a 100% compliant documentation packet:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 12px; margin: 20px 0 25px;">
                        <div style="background: #f8fafc; border-left: 3px solid #2563eb; padding: 14px; border-radius: 6px; font-size: 14px; color: #334155;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 4px;"><i class="fa-solid fa-file-invoice-dollar" style="color: #2563eb; margin-right: 6px;"></i> GST-Registered Corporate Invoices:</strong>
                            Clearly itemizing packing materials, transport freight, and labor components, stamped by our registered corporate office.
                        </div>
                        <div style="background: #f8fafc; border-left: 3px solid #1e3a8a; padding: 14px; border-radius: 6px; font-size: 14px; color: #334155;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 4px;"><i class="fa-solid fa-file-contract" style="color: #1e3a8a; margin-right: 6px;"></i> IBA-Standard Lorry Bilty:</strong>
                            Fully documenting driver contact numbers, vehicle registration credentials, and destination station checkpoints.
                        </div>
                        <div style="background: #f8fafc; border-left: 3px solid #2563eb; padding: 14px; border-radius: 6px; font-size: 14px; color: #334155;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 4px;"><i class="fa-solid fa-list-check" style="color: #2563eb; margin-right: 6px;"></i> Itemized Serial Packing Slips:</strong>
                            Signed by both the customer and field supervisor at packing and delivery to verify that every item arrived intact.
                        </div>
                    </div>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
                        <strong>Key Moving Recommendations for Chakulia:</strong> We recommend customers schedule their departure during the early morning hours (between 6:00 AM and 9:00 AM) to easily navigate narrow market corridors near Station Road before retail shop stalls open. Please carry personal identification, property title records, financial passbooks, and essential emergency medicines in your personal travel bags.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
                        <strong>Agricultural & Rice Mill Logistics Support:</strong> For commercial rice millers and agrarian wholesalers in Chakulia, we provide specialized machinery packaging, spare parts crating, and bulk cargo dispatch across Jharkhand, Bengal, and Odisha with guaranteed vehicle availability and zero demurrage delays.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
                        <strong>Interstate Border & E-Way Bill Compliance:</strong> Navigating state border checkpoints at Chichira (Jharkhand-Bengal border) or Jamsola (Jharkhand-Odisha border) requires compliant e-way bills and consignment documentation. Shree Ashirwad Packers generates all requisite electronic transit permits in advance, preventing unnecessary roadside inspections or transit hold-ups for your household goods.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
                        <strong>Airfield Area & Suburban Expansion Coverage:</strong> The open expanse surrounding the historic Chakulia Airfield has seen growing residential plotting and small-scale business facilities. Our dedicated fleet can access wide suburban plots as effortlessly as compact colony lanes, providing complete door-to-door unpacking, bed re-assembly, and heavy electrical appliance positioning.
                    </p>

                    <!-- Local Google Map Embed -->
                    <div style="margin: 35px 0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;">
                        <iframe src="https://maps.google.com/maps?q=Chakulia%2C%20Jharkhand&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Map Location of Chakulia Jharkhand"></iframe>
                    </div>
                </article>

                <!-- Section 8: Frequently Asked Questions (FAQ) -->
                <article class="article-block" style="margin-bottom: 40px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 24px; font-family: 'Outfit', sans-serif;">
                        Frequently Asked Questions - Packers & Movers in Chakulia
                    </h2>
                    
                    <div class="faq-accordion" style="display: flex; flex-direction: column; gap: 16px;">
                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> How does Shree Ashirwad Packers handle moves in Chakulia?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Chakulia is a strategic commercial hub in East Singhbhum near the West Bengal and Odisha borders. Shree Ashirwad Packers and Movers deploys dedicated local packing teams and GPS-tracked container trucks to service residential colonies, trading establishments, and rice mill zones with premium packing and door-to-door transit.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> What are the shifting charges from Chakulia to Jamshedpur or Ranchi?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Moving from Chakulia to Jamshedpur (approx. 75 km) typically costs between ₹8,000 and ₹14,000 for a 1/2 BHK apartment. Relocating to Ranchi (approx. 200 km) ranges from ₹15,000 to ₹23,000 depending upon the volume of goods and packaging grade selected.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> Do you provide interstate shifting to West Bengal and Odisha from Chakulia?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Yes, Chakulia enjoys seamless road connectivity to Jhargram, Kharagpur, Medinipur, Kolkata, and Baripada (Odisha). We manage all border documentation, e-way bills, and transit permits for hassle-free interstate household and commercial relocations.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> Can you transport cars and two-wheelers safely from Chakulia?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Absolutely. We operate specialized closed car carriers and secured two-wheeler transport vehicles. Every bike is wrapped in bubble film and secured with wheel brackets, backed by comprehensive transit insurance.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> Are your invoices and consignment notes approved for government transfer claims?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Yes, Shree Ashirwad Packers and Movers is an IBA-approved and ISO-certified logistics company. We provide GST invoices, consignment notes (bilty), and detailed packing inventories accepted by railways, banks, and state/central government offices.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> How do you protect furniture and electronics from humidity and rain in Chakulia?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Being in the Subarnarekha river basin, Chakulia experiences high seasonal humidity. We use 5-layer protective packing comprising air bubble wrap, thick corrugated sheets, corner edge guards, and airtight stretch cling film, transported in fully sealed metal containers.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> How much advance notice is required to book a move in Chakulia?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Booking 2 to 3 days in advance allows us to allocate the optimal truck size and packing crew. For urgent relocations, our express shifting team can arrange same-day packing and loading across Chakulia and Ghatshila.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> How can I get an accurate cost quotation for my move in Chakulia?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Call our customer service team at +91 8409531615 or WhatsApp us at +91 9308888746. We provide free doorstep physical surveys in Chakulia or swift video estimates with transparent, fixed-rate pricing.
                            </p>
                        </div>
                    </div>
                </article>

            </div>

            <!-- Sidebar Column -->
            <aside class="sidebar-column" style="flex: 1 1 340px; max-width: 380px;">
                <div class="sticky-sidebar" style="position: sticky; top: 90px; display: flex; flex-direction: column; gap: 30px;">
                    
                    <!-- Quick Quote Box -->
                    <div class="sidebar-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 14px; padding: 28px; box-shadow: 0 4px 14px rgba(0,0,0,0.05);">
                        <h3 style="font-size: 20px; font-weight: 800; color: #0f172a; margin-bottom: 8px; font-family: 'Outfit', sans-serif;">
                            Get a Free Moving Quote
                        </h3>
                        <p style="font-size: 14px; color: #64748b; margin-bottom: 20px;">
                            Relocating in or from Chakulia? Connect with our senior East Singhbhum relocation manager today.
                        </p>
                        <div style="display: flex; flex-direction: column; gap: 12px; margin-bottom: 20px;">
                            <a href="tel:8409531615" style="display: flex; align-items: center; justify-content: center; gap: 10px; background: #ef4444; color: #ffffff; text-decoration: none; padding: 14px; border-radius: 8px; font-weight: 700; font-size: 15px; box-shadow: 0 6px 16px rgba(239, 68, 68, 0.25);">
                                <i class="fa-solid fa-phone"></i> +91 8409531615
                            </a>
                            <a href="tel:9308888746" style="display: flex; align-items: center; justify-content: center; gap: 10px; background: #1e3a8a; color: #ffffff; text-decoration: none; padding: 14px; border-radius: 8px; font-weight: 700; font-size: 15px;">
                                <i class="fa-solid fa-phone"></i> +91 9308888746
                            </a>
                            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Chakulia" target="_blank" style="display: flex; align-items: center; justify-content: center; gap: 10px; background: #22c55e; color: #ffffff; text-decoration: none; padding: 14px; border-radius: 8px; font-weight: 700; font-size: 15px;">
                                <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
                            </a>
                        </div>
                        <div style="border-top: 1px solid #e2e8f0; padding-top: 16px; font-size: 13px; color: #64748b; line-height: 1.6;">
                            <p style="margin: 0 0 6px;"><i class="fa-solid fa-clock" style="color: #2563eb; margin-right: 6px;"></i> Operations: 24 Hours / 7 Days</p>
                            <p style="margin: 0;"><i class="fa-solid fa-shield-halved" style="color: #16a34a; margin-right: 6px;"></i> 100% Safe Transit Guarantee</p>
                        </div>
                    </div>

                    <!-- Why Choose Us Box -->
                    <div class="sidebar-card" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 26px; box-shadow: 0 4px 14px rgba(0,0,0,0.05);">
                        <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 16px;">
                            Why Choose Shree Ashirwad?
                        </h4>
                        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 12px; font-size: 14px; color: #334155;">
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>Tri-Border Inter-State Expertise</span></li>
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>IBA Approved Consignment Invoices</span></li>
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>Trained In-House Packaging Specialists</span></li>
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>5-Layer High-Density Packaging</span></li>
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>Live Satellite GPS Tracking</span></li>
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>Zero Hidden Surcharges</span></li>
                        </ul>
                    </div>

                    <!-- Nearby Hubs & Connections -->
                    <div class="sidebar-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 14px; padding: 24px;">
                        <h4 style="font-size: 17px; font-weight: 700; color: #0f172a; margin-bottom: 14px;">
                            Nearby Service Hubs
                        </h4>
                        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px; font-size: 13.5px;">
                            <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ghatshila" style="color: #2563eb; text-decoration: none; font-weight: 500;"><i class="fa-solid fa-arrow-right" style="font-size: 11px; margin-right: 6px;"></i> Ghatshila Sub-Division</a></li>
                            <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-jamshedpur" style="color: #2563eb; text-decoration: none; font-weight: 500;"><i class="fa-solid fa-arrow-right" style="font-size: 11px; margin-right: 6px;"></i> Jamshedpur (Tatanagar)</a></li>
                            <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-baharagora" style="color: #2563eb; text-decoration: none; font-weight: 500;"><i class="fa-solid fa-arrow-right" style="font-size: 11px; margin-right: 6px;"></i> Baharagora Tri-Junction</a></li>
                            <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-adityapur" style="color: #2563eb; text-decoration: none; font-weight: 500;"><i class="fa-solid fa-arrow-right" style="font-size: 11px; margin-right: 6px;"></i> Adityapur Industrial Area</a></li>
                            <li><a href="<?php echo SITE_BASE_URL; ?>/" style="color: #2563eb; text-decoration: none; font-weight: 500;"><i class="fa-solid fa-arrow-right" style="font-size: 11px; margin-right: 6px;"></i> Ranchi State Capital</a></li>
                        </ul>
                    </div>

                </div>
            </aside>
        </div>
    </div>
</main>

<!-- Section: Google My Business Authentic Reviews -->
<?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>


<!-- Bottom CTA Banner -->
<section class="cta-banner" style="background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%); color: #ffffff; padding: 60px 0; text-align: center;">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
        <h2 style="font-size: 32px; font-weight: 800; margin-bottom: 16px; font-family: 'Outfit', sans-serif;">
            Ready to Plan Your Move in Chakulia?
        </h2>
        <p style="font-size: 16.5px; line-height: 1.7; color: #cbd5e1; margin-bottom: 30px;">
            Reach out to Shree Ashirwad Packers and Movers today for a free pre-move survey and customized price estimate. Experience smooth, professional relocations with East Singhbhum’s top-rated logistics team.
        </p>
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px;">
            <a href="tel:8409531615" style="display: inline-flex; align-items: center; gap: 10px; background: #ef4444; color: #ffffff; padding: 14px 32px; border-radius: 8px; font-weight: 700; text-decoration: none; font-size: 16px; box-shadow: 0 8px 20px rgba(239, 68, 68, 0.35);">
                <i class="fa-solid fa-phone-volume"></i> Call +91 8409531615
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20please%20send%20me%20a%20quote%20for%20Chakulia" target="_blank" style="display: inline-flex; align-items: center; gap: 10px; background: #22c55e; color: #ffffff; padding: 14px 32px; border-radius: 8px; font-weight: 700; text-decoration: none; font-size: 16px; box-shadow: 0 8px 20px rgba(34, 197, 94, 0.35);">
                <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
            </a>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
