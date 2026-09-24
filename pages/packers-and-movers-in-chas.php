<?php
/**
 * Packers and Movers in Chas - Shree Ashirwad Packers and Movers
 * Website: https://www.shreeashirwadpackers.com
 * Contact: +91 8409531615 / +91 9308888746
 * Office: Serving Chas Municipal Corporation, Bokaro Steel City & Dhanbad, Jharkhand
 */

require_once __DIR__ . '/includes/config.php';

// Page-specific variables
$page_title = "Packers and Movers in Chas - 8409531615 | Shree Ashirwad Packers";
$page_description = "Top packers and movers in Chas, Bokaro. Safe apartment shifting, corporate relocation, vehicle transport, IBA approved bills, full transit insurance. Call 8409531615.";
$page_keywords = "packers and movers in chas, best movers and packers chas bokaro, apartment shifting chas, household shifting chas, car transport chas, bike courier chas, shree ashirwad packers chas";
$canonical_url = SITE_BASE_URL . "/packers-and-movers-in-chas";
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
      "name": "Shree Ashirwad Packers and Movers - Chas",
      "image": "<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg",
      "@id": "<?php echo $canonical_url; ?>#movingcompany",
      "url": "<?php echo $canonical_url; ?>",
      "telephone": "+918409531615",
      "keywords": "packers and movers in chas, packers and movers chas, best packers and movers in chas, household shifting chas, car transport chas, bike parcel chas, iba approved packers chas, local shifting chas",
      "priceRange": "INR 3500 - 55000",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Chas Main Road, Near ITI More & Checkpost",
        "addressLocality": "Chas, Bokaro",
        "addressRegion": "Jharkhand",
        "postalCode": "827013",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 23.6369,
        "longitude": 86.1775
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
          "name": "Chas",
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
          "name": "How does Shree Ashirwad Packers service high-rise apartments and residential societies in Chas?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Chas is the primary apartment and residential hub of Bokaro. Shree Ashirwad Packers and Movers deploys trained crews experienced in society moving protocols, elevator cushioning, narrow hallway navigation, and zero-scratch balcony lowering for oversized furniture across all major residential complexes in Chas."
          }
        },
        {
          "@type": "Question",
          "name": "What are the estimated charges for shifting from Chas to Bokaro Steel City sectors?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Moving from Chas across the Garga bridge into Bokaro Steel City sectors (Sector 1 to 12, Cooperative Colony) typically costs between ₹3,500 and ₹6,000 for a 1 BHK, and ₹6,000 to ₹9,500 for a 2/3 BHK apartment, covering complete packaging, transport, loading, and unloading."
          }
        },
        {
          "@type": "Question",
          "name": "Do you offer vehicle transportation for cars and two-wheelers from Chas?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we provide enclosed hydraulic car carriers and dedicated two-wheeler transport stands. Every vehicle receives a pre-dispatch condition inspection report and complete transit insurance for safe relocation to Kolkata, Delhi, Bengaluru, Hyderabad, and all major cities."
          }
        },
        {
          "@type": "Question",
          "name": "Can SAIL, PSU, and bank officers claim transfer allowance with your bills?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Shree Ashirwad Packers and Movers is an IBA-approved and ISO-certified logistics company. We provide 100% genuine GST invoices, consignment bilty, transit insurance certificates, and itemized inventory lists accepted by SAIL Bokaro, nationalized banks, and state/central government departments."
          }
        },
        {
          "@type": "Question",
          "name": "How do you protect fragile items, glassware, and expensive appliances during moves in Chas?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We implement a strict 5-layer protective packaging protocol. This includes virgin bubble wrap, heavy corrugated paper sheets, molded corner edge angles, and multiple airtight passes of LDPE stretch cling film, transported in sealed container trucks."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide office and commercial showroom shifting in Chas?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, Chas is a prominent commercial wholesale center. We handle corporate office moves, retail showroom relocations, bank branch shifting, and IT equipment transfers across Chas Bazar, Checkpost, and Bye-pass Road with weekend and overnight operational capabilities."
          }
        },
        {
          "@type": "Question",
          "name": "How much advance notice is required to book a move in Chas?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We suggest confirming your booking 2 to 3 days in advance to reserve your preferred truck size and moving team. For emergency or same-day relocations, our express shifting crew can arrange immediate packing and loading across Chas."
          }
        },
        {
          "@type": "Question",
          "name": "How can I book a free home survey in Chas, Bokaro?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Simply call our 24x7 helpline at +91 8409531615 or message us via WhatsApp at +91 9308888746. Our Chas field supervisor will arrange a free doorstep physical assessment or instant video survey with transparent, fixed-price pricing."
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
                    <i class="fa-solid fa-city"></i> Bokaro's Commercial Capital Relocation Leader
                </div>
                <h1 style="font-size: clamp(32px, 4.5vw, 48px); font-weight: 800; line-height: 1.2; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                    Premier Packers and Movers in <span style="color: #60a5fa;">Chas, Bokaro</span>
                </h1>
                <p style="font-size: 17px; line-height: 1.65; color: #e2e8f0; margin-bottom: 28px;">
                    Planning an apartment relocation, commercial shifting, or vehicle transport in Chas, Bokaro? Shree Ashirwad Packers and Movers delivers premium, zero-damage shifting services across Chas Municipal Corporation, ITI More, Checkpost, and Telidih Road. With multi-layer bubble wrap protection, elevator-friendly handling, IBA-approved billing, and sealed container logistics, your move is 100% stress-free.
                </p>
                <div class="hero-cta-group" style="display: flex; flex-wrap: wrap; gap: 15px; margin-bottom: 30px;">
                    <a href="tel:8409531615" class="btn-primary" style="display: inline-flex; align-items: center; gap: 10px; background: #ef4444; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; box-shadow: 0 10px 20px rgba(239, 68, 68, 0.3); transition: all 0.3s ease;">
                        <i class="fa-solid fa-phone-volume"></i> Call 8409531615
                    </a>
                    <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20moving%20in%20Chas" target="_blank" class="btn-whatsapp" style="display: inline-flex; align-items: center; gap: 10px; background: #22c55e; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; box-shadow: 0 10px 20px rgba(34, 197, 94, 0.3); transition: all 0.3s ease;">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp Quote
                    </a>
                </div>
                <div class="hero-features" style="display: flex; flex-wrap: wrap; gap: 20px; font-size: 14px; color: #cbd5e1;">
                    <span><i class="fa-solid fa-check-circle" style="color: #22c55e; margin-right: 6px;"></i> IBA Approved Invoices</span>
                    <span><i class="fa-solid fa-check-circle" style="color: #22c55e; margin-right: 6px;"></i> High-Rise Apartment Specialists</span>
                    <span><i class="fa-solid fa-check-circle" style="color: #22c55e; margin-right: 6px;"></i> All-Risk Transit Insurance</span>
                </div>
            </div>
            <div class="hero-media" style="flex: 1 1 420px; max-width: 480px;">
                <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 16px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.4); border: 3px solid rgba(255,255,255,0.15);">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Packers and Movers in Chas Bokaro - Apartment packing by Shree Ashirwad Packers" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                    <div class="media-overlay-badge" style="position: absolute; bottom: 20px; left: 20px; right: 20px; background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(8px); padding: 14px 18px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2);">
                        <p style="margin: 0; font-size: 13px; color: #f1f5f9; font-weight: 500;">
                            <i class="fa-solid fa-boxes-packing" style="color: #60a5fa; margin-right: 6px;"></i> Multi-layer bubble wrap & heavy corrugated cartons for Chas apartment families.
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
            <li style="color: #1e3a8a; font-weight: 600;" aria-current="page">Chas</li>
        </ol>
    </div>
</nav>

<!-- Main Content Section -->
<main class="content-section" style="padding: 70px 0; background: #ffffff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <div class="row" style="display: flex; flex-wrap: wrap; gap: 40px;">
            <div class="main-column" style="flex: 1 1 760px;">
                
                <!-- Section 1: Overview & Urban Twin City Context -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Chas’s Foremost Relocation Experts for Apartments & Commercial Moves
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
                        Serving as the commercial, wholesale trade, and real estate backbone of the greater Bokaro urban agglomeration, <strong>Chas</strong> is a vibrant municipal corporation situated across the Garga River from Bokaro Steel City. Originally a quiet agricultural and trade settlement, Chas has transformed over the past three decades into a bustling urban center teeming with high-rise residential apartments, private housing colonies, modern healthcare centers, corporate schools, and sprawling retail wholesale markets along the Chas-Purulia and Chas-Dhanbad highway axes.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
                        Relocating within Chas involves specific modern urban demands. Unlike public sector quarters that feature wide open yards, high-density residential developments in areas like Telidih Road, ITI More, Bye-pass Road, Prabhat Nagar, and Kailash Nagar involve multi-floor elevator logistics, dedicated society security regulations, and precise parking timings to avoid blocking busy apartment driveways. Furthermore, hundreds of business owners, doctors, SAIL executive families, and IT professionals move annually between Chas, Dhanbad (35 km), Ranchi (115 km), Kolkata (280 km), and major Indian metropolises.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 25px;">
                        <strong>Shree Ashirwad Packers and Movers</strong> has established an unrivalled leadership position in Chas. Our professional moving crews are thoroughly trained in multi-storey apartment logistics, elevator-safe cushioning, modular furniture assembly, and heavy appliance handling. Combining specialized closed-container vehicles with authentic IBA-approved documentation, we make your relocation fast, completely protected, and entirely free of anxiety.
                    </p>

                    <!-- Verified Image Embed 1 -->
                    <div class="content-media-embed" style="margin: 30px 0;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; max-width: 420px; margin: 0 auto; border-radius: 14px; overflow: hidden; box-shadow: 0 12px 28px rgba(0,0,0,0.12);">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Household packaging materials and bubble wrap used in Chas by Shree Ashirwad Packers" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-box-open" style="color: #60a5fa; margin-right: 8px;"></i> Premium multi-layer carton packing protecting home goods across Chas.</p>
                            </div>
                        </div>
                    </div>

                    <div class="highlight-quote-box" style="background: #eff6ff; border-left: 4px solid #2563eb; padding: 20px 24px; border-radius: 0 8px 8px 0; margin-bottom: 30px;">
                        <p style="margin: 0; font-size: 15px; font-style: italic; color: #1e3a8a; line-height: 1.7;">
                            "In Chas's busy apartment complexes and vibrant markets, moving demands prompt scheduling, elevator-friendly handling, and zero-damage execution. Shree Ashirwad Packers treats your home and possessions with the utmost professionalism and care."
                        </p>
                    </div>
                </article>

                <!-- Section 2: Comprehensive Shifting Solutions -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 24px; font-family: 'Outfit', sans-serif;">
                        Tailored Relocation Services in Chas, Bokaro
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 24px;">
                        Whether moving a high-rise flat in Telidih Road, shifting a retail enterprise in Chas Bazar, or organizing cross-country vehicle transport, our specialized service offerings are structured for perfection:
                    </p>

                    <div class="services-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px; margin-bottom: 35px;">
                        <div class="service-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; transition: all 0.3s ease;">
                            <div class="service-icon" style="width: 50px; height: 50px; background: #dbeafe; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #1e40af; font-size: 22px; margin-bottom: 16px;">
                                <i class="fa-solid fa-building"></i>
                            </div>
                            <h3 style="font-size: 19px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Apartment & Home Shifting</h3>
                            <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                Specialized high-rise flat relocations covering leather sofa sets, modular wardrobes, king-size beds, modular kitchen chinaware, LED TVs, and double-door refrigerators with elevator padding.
                            </p>
                        </div>

                        <div class="service-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; transition: all 0.3s ease;">
                            <div class="service-icon" style="width: 50px; height: 50px; background: #fee2e2; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #b91c1c; font-size: 22px; margin-bottom: 16px;">
                                <i class="fa-solid fa-bridge"></i>
                            </div>
                            <h3 style="font-size: 19px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Chas to Bokaro Steel City Shifts</h3>
                            <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                Rapid daily shifting across the Garga River bridge into Bokaro Steel City Sectors (Sector 1 to 12, City Centre, Cooperative Colony) executed within 4 to 6 hours.
                            </p>
                        </div>

                        <div class="service-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; transition: all 0.3s ease;">
                            <div class="service-icon" style="width: 50px; height: 50px; background: #fef3c7; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #b45309; font-size: 22px; margin-bottom: 16px;">
                                <i class="fa-solid fa-motorcycle"></i>
                            </div>
                            <h3 style="font-size: 19px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Two-Wheeler & Bike Transport</h3>
                            <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                Zero-scratch motorcycle and scooter transport with bubble wrapping for fairings, mirrors, and fuel tanks. Shipped securely via specialized wheel-lock brackets inside covered trucks.
                            </p>
                        </div>

                        <div class="service-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; transition: all 0.3s ease;">
                            <div class="service-icon" style="width: 50px; height: 50px; background: #dcfce7; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #15803d; font-size: 22px; margin-bottom: 16px;">
                                <i class="fa-solid fa-car"></i>
                            </div>
                            <h3 style="font-size: 19px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Car Carrier Logistics</h3>
                            <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                Enclosed multi-deck car carrier transit from Chas to Kolkata, Patna, Delhi NCR, Pune, and Bengaluru with complete condition inspection sheets and transit insurance.
                            </p>
                        </div>
                    </div>

                    <!-- Verified Image Embed 2 -->
                    <div class="content-media-embed" style="margin: 35px 0;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; max-width: 420px; margin: 0 auto; border-radius: 14px; overflow: hidden; box-shadow: 0 12px 28px rgba(0,0,0,0.12);">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Packers and movers delivery truck operating in Chas Bokaro by Shree Ashirwad Packers" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 20px; color: #ffffff;">
                                <p style="margin: 0; font-size: 14px; font-weight: 600;"><i class="fa-solid fa-truck-fast" style="color: #60a5fa; margin-right: 8px;"></i> Modern enclosed container trucks ensuring dust-free relocations across Chas and Bokaro.</p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Section 3: High-Grade Packaging Matrix -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        5-Layer Protective Packaging for High-Rise Apartments & Expressways
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
                        Relocating out of high-rise apartment complexes in Chas involves navigating elevators, stairwells, tight doorways, and long highway routes. To eliminate any possibility of scratches, dents, or chipping, Shree Ashirwad Packers enforces our signature <strong>5-Stage Shielding Matrix</strong>:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 16px; margin: 0 0 30px;">
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-check" style="color: #2563eb; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 16px; font-weight: 700; color: #0f172a;">Thermal Cushioning Air Bubble Wrap</h4>
                            </div>
                            <p style="margin: 0; font-size: 14px; line-height: 1.6; color: #475569;">Double-layered 100 GSM air bubble film wrapping electronics, microwave ovens, kitchen appliances, and fine porcelain.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-check" style="color: #2563eb; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 16px; font-weight: 700; color: #0f172a;">Heavy-Duty Corrugated Board Armor</h4>
                            </div>
                            <p style="margin: 0; font-size: 14px; line-height: 1.6; color: #475569;">Rugged 5-ply and 7-ply virgin paper wrapping around wooden almirahs, dining tables, and bed frames to absorb road vibration.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-check" style="color: #2563eb; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 16px; font-weight: 700; color: #0f172a;">Rigid Corner Angle Protectors</h4>
                            </div>
                            <p style="margin: 0; font-size: 14px; line-height: 1.6; color: #475569;">Molded corner bumpers applied to glass tabletops, dressing table mirrors, and marble counters to absorb edge impact.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-check" style="color: #2563eb; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 16px; font-weight: 700; color: #0f172a;">Hermetic Stretch Cling Wrap</h4>
                            </div>
                            <p style="margin: 0; font-size: 14px; line-height: 1.6; color: #475569;">High-gauge LDPE shrink film wrapped 360 degrees around all boxed goods and upholstered furniture to create an airtight, dust-proof seal.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-check" style="color: #2563eb; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 16px; font-weight: 700; color: #0f172a;">Heavy-Duty Cargo Ratchet Belts</h4>
                            </div>
                            <p style="margin: 0; font-size: 14px; line-height: 1.6; color: #475569;">Inside our covered trucks, goods are anchored firmly against structural ribs to eliminate load shifts during transit.</p>
                        </div>
                    </div>
                </article>

                <!-- Section 4: Transparent Pricing Tables -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 16px; font-family: 'Outfit', sans-serif;">
                        Estimated Moving Costs in Chas - Clear & Transparent
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 22px;">
                        We believe that fair pricing builds long-term customer trust. Below is our comprehensive rate schedule for moves originating from Chas to local destinations in Bokaro/Dhanbad and across national highways:
                    </p>

                    <h3 style="font-size: 20px; font-weight: 700; color: #1e3a8a; margin-bottom: 14px;">
                        Table 1: Local & Regional Moving Charges from Chas
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
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">1 BHK Apartment (Within Chas / Checkpost)</td>
                                    <td style="padding: 14px 16px; color: #475569;">Up to 8 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹1,800 - ₹2,500</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹1,700 - ₹2,500</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹3,500 - ₹5,000</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">2 BHK Apartment Shifting</td>
                                    <td style="padding: 14px 16px; color: #475569;">Up to 12 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹2,800 - ₹3,800</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹2,700 - ₹3,700</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹5,500 - ₹7,500</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chas to Bokaro Steel City (Sector 1-12)</td>
                                    <td style="padding: 14px 16px; color: #475569;">5 - 12 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹2,500 - ₹3,500</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹2,500 - ₹3,500</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹5,000 - ₹7,000</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chas to Dhanbad / Jharia</td>
                                    <td style="padding: 14px 16px; color: #475569;">35 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹3,500 - ₹4,800</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹4,800 - ₹6,800</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹8,300 - ₹11,600</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chas to Purulia (WB)</td>
                                    <td style="padding: 14px 16px; color: #475569;">42 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹3,200 - ₹4,500</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹5,000 - ₹7,000</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹8,200 - ₹11,500</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chas to Ranchi State Capital</td>
                                    <td style="padding: 14px 16px; color: #475569;">115 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹4,200 - ₹6,000</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹9,000 - ₹12,500</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹13,200 - ₹18,500</td>
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
                        Table 2: Long-Distance & Interstate Shifting from Chas
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
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chas to Asansol / Durgapur</td>
                                    <td style="padding: 14px 16px; color: #475569;">95 - 135 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">1 Day</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #2563eb;">₹12,500 - ₹18,000</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹6,000 - ₹8,500</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chas to Kolkata / Howrah</td>
                                    <td style="padding: 14px 16px; color: #475569;">280 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">1 - 2 Days</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #2563eb;">₹19,000 - ₹27,500</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹9,500 - ₹13,500</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chas to Patna / Gaya</td>
                                    <td style="padding: 14px 16px; color: #475569;">320 - 360 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">2 Days</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #2563eb;">₹21,000 - ₹30,000</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹10,500 - ₹14,500</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chas to Delhi NCR / Lucknow</td>
                                    <td style="padding: 14px 16px; color: #475569;">1200 - 1350 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">3 - 4 Days</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #2563eb;">₹30,000 - ₹44,000</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹15,000 - ₹21,000</td>
                                </tr>
                                <tr style="background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chas to Bengaluru / Hyderabad</td>
                                    <td style="padding: 14px 16px; color: #475569;">1550 - 1800 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">5 - 7 Days</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #2563eb;">₹34,000 - ₹48,000</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹17,000 - ₹23,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Verified Image Embed 3 -->
                    <div class="content-media-embed" style="margin: 35px 0;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; max-width: 420px; margin: 0 auto; border-radius: 14px; overflow: hidden; box-shadow: 0 12px 28px rgba(0,0,0,0.12);">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transport carrier loading service in Chas by Shree Ashirwad Packers" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 20px; color: #ffffff;">
                                <p style="margin: 0; font-size: 14px; font-weight: 600;"><i class="fa-solid fa-car-side" style="color: #60a5fa; margin-right: 8px;"></i> Hydraulic closed-body car carriers providing scratch-free automobile shifting.</p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Section 5: Step-by-Step Moving Process -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Our 6-Step Operational Methodology in Chas
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 25px;">
                        Professional moving requires seamless logistical discipline. We execute every relocation in Chas through an established 6-step operational blueprint:
                    </p>

                    <div class="timeline-steps" style="display: flex; flex-direction: column; gap: 20px;">
                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">1</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Free Pre-Move Consultation & Estimate</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    Our Chas field coordinator visits your residence or reviews goods through video call, calculating packaging supplies, truck volume, and labor to provide a binding quote.
                                </p>
                            </div>
                        </div>

                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">2</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Room-by-Room Systematic Protective Packing</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    Our trained packing crew arrives with virgin bubble wrap, corrugated sheets, edge protectors, and heavy cartons. Every box is labeled with room designations and inventory codes.
                                </p>
                            </div>
                        </div>

                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">3</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Expert Carpentry & Electrical Disconnection</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    Skilled carpenters dismantle heavy wooden beds, wardrobes, and TV units safely. Hardware screws and fasteners are sealed in labeled pouches taped to each unit.
                                </p>
                            </div>
                        </div>

                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">4</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Strategic Loading & Ratchet Anchoring</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    Goods are stacked methodically inside our sealed metal-body containers with heavier items anchored at the base. Industrial ratchet tie-downs prevent load shifting on highway turns.
                                </p>
                            </div>
                        </div>

                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">5</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">GPS-Tracked Highway Transit & Checkpoint Updates</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    Vehicles are tracked via live GPS. We manage transit milestones smoothly along the Dhanbad and Purulia highway corridors, keeping customers informed of highway progress and arrival ETAs.
                                </p>
                            </div>
                        </div>

                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">6</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Doorstep Unloading, Reassembly & Debris Removal</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    Our team carries every box to its designated room, reassembles beds and tables, places major appliances, and disposes of packing debris so you can settle in comfortably.
                                </p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Section 6: Warehousing & Transit Insurance -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Clean Warehousing Facilities & Comprehensive Transit Insurance
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
                        For families renovating their premises, business entrepreneurs awaiting commercial property possession, or corporate executives transitioning between postings, we provide clean, pest-controlled, and CCTV-guarded warehousing space. Your possessions remain elevated on moisture-resistant pallets, shielded from industrial dust and humidity.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 25px;">
                        Additionally, every consignment is supported by our comprehensive <strong>All-Risk Transit Insurance</strong> policy. Underwritten by India’s top general insurers, this policy covers accidents, vehicle overturns, fire, and flood, ensuring complete peace of mind and rapid claims settlement.
                    </p>

                    <!-- Verified Image Embed 4 -->
                    <div class="content-media-embed" style="margin: 35px 0;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; max-width: 420px; margin: 0 auto; border-radius: 14px; overflow: hidden; box-shadow: 0 12px 28px rgba(0,0,0,0.12);">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Commercial and household goods storage warehouse serving Chas by Shree Ashirwad Packers" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 20px; color: #ffffff;">
                                <p style="margin: 0; font-size: 14px; font-weight: 600;"><i class="fa-solid fa-warehouse" style="color: #60a5fa; margin-right: 8px;"></i> Modern, 24/7 guarded warehouse facility protecting goods for short and long-term storage.</p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Section 7: Key Neighborhoods & Rural Sectors in Chas -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Areas & Localities We Cover Across Chas
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 20px;">
                        We operate an extensive logistics network providing doorstep pickup and delivery across all neighborhoods, apartment colonies, and commercial markets in Chas:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 14px; margin-bottom: 25px;">
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Telidih Road & Apartments</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> ITI More & Checkpost</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Bye-pass Road Commercial Zone</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Chas Main Bazar</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Prabhat Nagar & Kailash Nagar</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Chinagora & Solgadih</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Jhopro & Kashi Jharia</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Garga Bridge Approach</div>
                    </div>
                    <p style="font-size: 15px; color: #64748b; line-height: 1.7;">
                        We also coordinate rapid daily transfers linking Chas with Bokaro Steel City, Chandankiyari, Chandrapura, Bermo, Dhanbad, Purulia, and Ranchi.
                    </p>
                </article>

                <!-- Section: Transfer Claims & Society Moving Advisory -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Corporate Relocation Claims & High-Rise Society Moving Advisory for Chas
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
                        Many families relocating from Chas include SAIL officers, banking executives from SBI and HDFC, doctors from prominent Bokaro multi-speciality hospitals, educators from DPS and Chinmaya Vidyalaya, and industrial contractors. Submitting admissible paperwork for corporate or government relocation reimbursement is essential. Shree Ashirwad Packers and Movers delivers a 100% compliant documentation packet:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 16px; margin: 0 0 25px;">
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-file-invoice" style="color: #2563eb; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #0f172a;">GST-Registered Corporate Invoices</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Clearly itemizing packing materials, labor, vehicle freight, and transit insurance with official company seal.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-receipt" style="color: #2563eb; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #0f172a;">IBA-Approved Consignment Note (Bilty)</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Documenting vehicle registration details, driver credentials, and origin-to-destination route verification.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-list-check" style="color: #2563eb; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #0f172a;">Itemized Serial Inventory Form</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Signed by both the consignor and field supervisor at packing and delivery to verify carton counts.</p>
                        </div>
                    </div>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
                        <strong>High-Rise Apartment Moving Protocol in Chas:</strong> In multi-storey apartments along Telidih Road and Bye-pass Road, moving requires adherence to Resident Welfare Association (RWA) guidelines. We suggest notifying your society management 48 hours prior to secure elevator service keys. Our crew pads elevator interiors with corrugated buffers to avoid any scratches to common society property.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
                        <strong>Commercial Showroom & Wholesale Relocations:</strong> For wholesale merchant establishments in Chas Bazar and Checkpost, we provide specialized inventory crating, barcode tracking, and off-hours night moving so that your retail operations suffer zero revenue disruption.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
                        <strong>Bridge Transit Timing across Garga River:</strong> When moving between Chas and Bokaro Steel City sectors, our drivers schedule transit during non-peak hours (between 7:30 AM and 10:00 AM or post 8:00 PM) to avoid bridge traffic bottlenecks, ensuring your household goods arrive promptly.
                    </p>

                    <!-- Local Google Map Embed -->
                    <div style="margin: 35px 0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58500.123456789!2d86.1800!3d23.6300!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f423123456789%3A0x7d6a5d4e3c2b1a0!2sChas%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Map Location of Chas Bokaro"></iframe>
                    </div>
                </article>

                <!-- Section 8: Frequently Asked Questions (FAQ) -->
                <article class="article-block" style="margin-bottom: 40px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 24px; font-family: 'Outfit', sans-serif;">
                        Frequently Asked Questions - Packers & Movers in Chas
                    </h2>
                    
                    <div class="faq-accordion" style="display: flex; flex-direction: column; gap: 16px;">
                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> How does Shree Ashirwad Packers service high-rise apartments and residential societies in Chas?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Chas is the primary apartment and residential hub of Bokaro. Shree Ashirwad Packers and Movers deploys trained crews experienced in society moving protocols, elevator cushioning, narrow hallway navigation, and zero-scratch balcony lowering for oversized furniture across all major residential complexes in Chas.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> What are the estimated charges for shifting from Chas to Bokaro Steel City sectors?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Moving from Chas across the Garga bridge into Bokaro Steel City sectors (Sector 1 to 12, Cooperative Colony) typically costs between ₹3,500 and ₹6,000 for a 1 BHK, and ₹6,000 to ₹9,500 for a 2/3 BHK apartment, covering complete packaging, transport, loading, and unloading.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> Do you offer vehicle transportation for cars and two-wheelers from Chas?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Yes, we provide enclosed hydraulic car carriers and dedicated two-wheeler transport stands. Every vehicle receives a pre-dispatch condition inspection report and complete transit insurance for safe relocation to Kolkata, Delhi, Bengaluru, Hyderabad, and all major cities.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> Can SAIL, PSU, and bank officers claim transfer allowance with your bills?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Yes. Shree Ashirwad Packers and Movers is an IBA-approved and ISO-certified logistics company. We provide 100% genuine GST invoices, consignment bilty, transit insurance certificates, and itemized inventory lists accepted by SAIL Bokaro, nationalized banks, and state/central government departments.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> How do you protect fragile items, glassware, and expensive appliances during moves in Chas?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                We implement a strict 5-layer protective packaging protocol. This includes virgin bubble wrap, heavy corrugated paper sheets, molded corner edge angles, and multiple airtight passes of LDPE stretch cling film, transported in sealed container trucks.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> Do you provide office and commercial showroom shifting in Chas?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Yes, Chas is a prominent commercial wholesale center. We handle corporate office moves, retail showroom relocations, bank branch shifting, and IT equipment transfers across Chas Bazar, Checkpost, and Bye-pass Road with weekend and overnight operational capabilities.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> How much advance notice is required to book a move in Chas?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                We suggest confirming your booking 2 to 3 days in advance to reserve your preferred truck size and moving team. For emergency or same-day relocations, our express shifting crew can arrange immediate packing and loading across Chas.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> How can I book a free home survey in Chas, Bokaro?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Simply call our 24x7 helpline at +91 8409531615 or message us via WhatsApp at +91 9308888746. Our Chas field supervisor will arrange a free doorstep physical assessment or instant video survey with transparent, fixed-price pricing.
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
                            Get a Free Instant Quote
                        </h3>
                        <p style="font-size: 14px; color: #64748b; margin-bottom: 20px;">
                            Moving in or from Chas, Bokaro? Speak directly with our senior relocation coordinator today.
                        </p>
                        <div style="display: flex; flex-direction: column; gap: 12px; margin-bottom: 20px;">
                            <a href="tel:8409531615" style="display: flex; align-items: center; justify-content: center; gap: 10px; background: #ef4444; color: #ffffff; text-decoration: none; padding: 14px; border-radius: 8px; font-weight: 700; font-size: 15px; box-shadow: 0 6px 16px rgba(239, 68, 68, 0.25);">
                                <i class="fa-solid fa-phone"></i> +91 8409531615
                            </a>
                            <a href="tel:9308888746" style="display: flex; align-items: center; justify-content: center; gap: 10px; background: #1e3a8a; color: #ffffff; text-decoration: none; padding: 14px; border-radius: 8px; font-weight: 700; font-size: 15px;">
                                <i class="fa-solid fa-phone"></i> +91 9308888746
                            </a>
                            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Chas" target="_blank" style="display: flex; align-items: center; justify-content: center; gap: 10px; background: #22c55e; color: #ffffff; text-decoration: none; padding: 14px; border-radius: 8px; font-weight: 700; font-size: 15px;">
                                <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
                            </a>
                        </div>
                        <div style="border-top: 1px solid #e2e8f0; padding-top: 16px; font-size: 13px; color: #64748b; line-height: 1.6;">
                            <p style="margin: 0 0 6px;"><i class="fa-solid fa-clock" style="color: #2563eb; margin-right: 6px;"></i> Operations: 24 Hours / 7 Days</p>
                            <p style="margin: 0;"><i class="fa-solid fa-shield-check" style="color: #16a34a; margin-right: 6px;"></i> 100% Safe Apartment Relocation</p>
                        </div>
                    </div>

                    <!-- Why Choose Us Box -->
                    <div class="sidebar-card" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 26px; box-shadow: 0 4px 14px rgba(0,0,0,0.05);">
                        <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 16px;">
                            Why Choose Shree Ashirwad?
                        </h4>
                        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 12px; font-size: 14px; color: #334155;">
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>Apartment & Society Moving Experts</span></li>
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>IBA Approved Consignment Invoices</span></li>
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>Trained In-House Packaging Crew</span></li>
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>5-Layer Industrial Packaging</span></li>
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
                            <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bokaro" style="color: #2563eb; text-decoration: none; font-weight: 500;"><i class="fa-solid fa-arrow-right" style="font-size: 11px; margin-right: 6px;"></i> Bokaro Steel City</a></li>
                            <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-chandankiyari" style="color: #2563eb; text-decoration: none; font-weight: 500;"><i class="fa-solid fa-arrow-right" style="font-size: 11px; margin-right: 6px;"></i> Chandankiyari</a></li>
                            <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-chandrapura" style="color: #2563eb; text-decoration: none; font-weight: 500;"><i class="fa-solid fa-arrow-right" style="font-size: 11px; margin-right: 6px;"></i> Chandrapura Thermal Belt</a></li>
                            <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dhanbad" style="color: #2563eb; text-decoration: none; font-weight: 500;"><i class="fa-solid fa-arrow-right" style="font-size: 11px; margin-right: 6px;"></i> Dhanbad Coal Capital</a></li>
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
            Planning Your Move in Chas, Bokaro?
        </h2>
        <p style="font-size: 16.5px; line-height: 1.7; color: #cbd5e1; margin-bottom: 30px;">
            Get in touch with Shree Ashirwad Packers and Movers today for a free pre-move consultation and transparent rate quote. Trust Jharkhand’s premier moving team for an effortless, on-time relocation.
        </p>
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px;">
            <a href="tel:8409531615" style="display: inline-flex; align-items: center; gap: 10px; background: #ef4444; color: #ffffff; padding: 14px 32px; border-radius: 8px; font-weight: 700; text-decoration: none; font-size: 16px; box-shadow: 0 8px 20px rgba(239, 68, 68, 0.35);">
                <i class="fa-solid fa-phone-volume"></i> Call +91 8409531615
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20please%20send%20me%20a%20quote%20for%20Chas" target="_blank" style="display: inline-flex; align-items: center; gap: 10px; background: #22c55e; color: #ffffff; padding: 14px 32px; border-radius: 8px; font-weight: 700; text-decoration: none; font-size: 16px; box-shadow: 0 8px 20px rgba(34, 197, 94, 0.35);">
                <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
            </a>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
