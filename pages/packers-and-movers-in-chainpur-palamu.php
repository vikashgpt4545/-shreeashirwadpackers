<?php
/**
 * Packers and Movers in Chainpur (Palamu) - Shree Ashirwad Packers and Movers
 * Website: https://www.shreeashirwadpackers.com
 * Contact: +91 8409531615 / +91 9308888746
 * Office: Shree Ashirwad Packers and Movers, Serving Chainpur, Medininagar (Daltonganj), Palamu, Jharkhand
 */

require_once __DIR__ . '/includes/config.php';

// Page-specific variables
$page_title = "Packers and Movers in Chainpur Palamu - 8409531615 | Shree Ashirwad Packers";
$page_description = "Reliable packers and movers in Chainpur (Palamu), Medininagar. Shree Ashirwad Packers offers verified household shifting, vehicle transport, office relocation, safe packing, and full transit insurance. Call 8409531615.";
$page_keywords = "packers and movers in chainpur palamu, best movers and packers chainpur daltonganj, household shifting chainpur palamu, car transport chainpur palamu, bike shifting chainpur, office relocation chainpur medininagar, shree ashirwad packers chainpur";
$canonical_url = SITE_BASE_URL . "/packers-and-movers-in-chainpur-palamu";
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
      "name": "Shree Ashirwad Packers and Movers - Chainpur (Palamu)",
      "image": "<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg",
      "@id": "<?php echo $canonical_url; ?>#movingcompany",
      "url": "<?php echo $canonical_url; ?>",
      "telephone": "+918409531615",
      "keywords": "packers and movers in chainpur palamu, packers and movers chainpur palamu, best packers and movers in chainpur palamu, household shifting chainpur palamu, car transport chainpur palamu, bike parcel chainpur palamu, iba approved packers chainpur palamu, local shifting chainpur palamu",
      "priceRange": "INR 3500 - 48000",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Near Shahpur Bridge, Chainpur Main Road",
        "addressLocality": "Chainpur, Medininagar",
        "addressRegion": "Jharkhand",
        "postalCode": "822110",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 24.0325,
        "longitude": 84.0628
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
          "name": "Chainpur Palamu",
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
          "name": "How is Chainpur (Palamu) serviced by Shree Ashirwad Packers and Movers?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Chainpur is situated right across the North Koel River from Medininagar (Daltonganj). Shree Ashirwad Packers and Movers operates dedicated vehicles and experienced packaging crews throughout Chainpur, Shahpur, Purnadih, Baralot, and connected rural sectors, ensuring prompt doorstep pickups and safe local or national transit."
          }
        },
        {
          "@type": "Question",
          "name": "What are the estimated charges for household shifting from Chainpur (Palamu)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Local shifting within Chainpur or across the bridge to Medininagar typically ranges from ₹3,500 to ₹9,500 depending upon home size (1 BHK to 3 BHK). Intercity transfers to Ranchi, Patna, Gaya, or Kolkata range from ₹11,000 to ₹38,000 based on cargo volume and exact road distance."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide car and bike carrier services from Chainpur (Palamu)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we operate specialized enclosed hydraulics car carriers and padded bike stands for secure vehicle shifting from Chainpur to all major cities across India, complete with pre-dispatch vehicle inspection reports and comprehensive transit insurance."
          }
        },
        {
          "@type": "Question",
          "name": "How do you protect delicate household goods against Palamu's extreme summer temperatures?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Palamu frequently encounters summer temperatures exceeding 44°C. We use multi-layer thermal bubble insulation, corrugated rolls, heat-resistant poly-stretch film, and ventilated weatherproof truck bodies to prevent any heat degradation, melting, or warping of electronic displays and polished furniture."
          }
        },
        {
          "@type": "Question",
          "name": "Can government, bank, and police officers in Chainpur claim relocation allowance with your bill?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, Shree Ashirwad Packers and Movers is an IBA-approved and ISO-certified logistics company. We provide 100% genuine GST-compliant invoices, vehicle consignment notes (bilty), transit insurance certificates, and itemized inventory lists accepted by all government departments, public sector banks, and defense institutions."
          }
        },
        {
          "@type": "Question",
          "name": "How much advance booking notice is required for moving from Chainpur?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We recommend confirming your booking 2 to 4 days in advance to reserve your preferred moving slot and customized truck size. However, for urgent transfers and emergency relocations, we also offer express same-day packing and dispatch services across Chainpur and Medininagar."
          }
        },
        {
          "@type": "Question",
          "name": "Is transit insurance mandatory, and how does it safeguard my items?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "While voluntary, transit insurance is strongly recommended for intercity relocations. It covers any unforeseen accidental transit damages or natural mishaps on highways with swift compensation settlement backed by leading national insurance partners."
          }
        },
        {
          "@type": "Question",
          "name": "How can I schedule a pre-move home survey in Chainpur (Palamu)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can call our 24x7 booking helpline at +91 8409531615 or WhatsApp us at +91 9308888746. Our survey coordinator will arrange a free physical home visit or a quick video survey to provide a transparent, fixed-price quotation with no hidden costs."
          }
        }
      ]
    }
    </script>
</head>
<body class="page-template">
<?php include_once __DIR__ . '/includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero-section" style="background: linear-gradient(135deg, rgba(16, 24, 40, 0.94) 0%, rgba(30, 58, 138, 0.92) 100%), url('<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg') center/cover no-repeat; color: #ffffff; padding: 90px 0 70px;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <div class="row" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 40px;">
            <div class="hero-content" style="flex: 1 1 600px; max-width: 680px;">
                <div class="badge-tag" style="display: inline-flex; align-items: center; gap: 8px; background: rgba(239, 68, 68, 0.2); border: 1px solid rgba(239, 68, 68, 0.4); padding: 6px 14px; border-radius: 30px; font-size: 14px; font-weight: 600; color: #fca5a5; margin-bottom: 20px;">
                    <i class="fa-solid fa-shield-halved"></i> IBA Approved & ISO 9001:2015 Certified
                </div>
                <h1 style="font-size: clamp(32px, 4.5vw, 48px); font-weight: 800; line-height: 1.2; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                    Top-Rated Packers and Movers in <span style="color: #60a5fa;">Chainpur (Palamu)</span>
                </h1>
                <p style="font-size: 17px; line-height: 1.65; color: #e2e8f0; margin-bottom: 28px;">
                    Relocating home, office, or personal vehicles across the North Koel river corridor? Shree Ashirwad Packers and Movers delivers professional, stress-free packing and moving services in Chainpur (Palamu) and adjoining Medininagar (Daltonganj). From multi-layer bubble wrap protection to GPS-monitored logistics trucks and transit insurance, your household belongings are safe with Jharkhand's most trusted shifting specialists.
                </p>
                <div class="hero-cta-group" style="display: flex; flex-wrap: wrap; gap: 15px; margin-bottom: 30px;">
                    <a href="tel:8409531615" class="btn-primary" style="display: inline-flex; align-items: center; gap: 10px; background: #ef4444; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; box-shadow: 0 10px 20px rgba(239, 68, 68, 0.3); transition: all 0.3s ease;">
                        <i class="fa-solid fa-phone-volume"></i> Call 8409531615
                    </a>
                    <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20moving%20in%20Chainpur%20Palamu" target="_blank" class="btn-whatsapp" style="display: inline-flex; align-items: center; gap: 10px; background: #22c55e; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; box-shadow: 0 10px 20px rgba(34, 197, 94, 0.3); transition: all 0.3s ease;">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp Quote
                    </a>
                </div>
                <div class="hero-features" style="display: flex; flex-wrap: wrap; gap: 20px; font-size: 14px; color: #cbd5e1;">
                    <span><i class="fa-solid fa-check-circle" style="color: #22c55e; margin-right: 6px;"></i> 0% Damage Guarantee</span>
                    <span><i class="fa-solid fa-check-circle" style="color: #22c55e; margin-right: 6px;"></i> Transparent Pricing</span>
                    <span><i class="fa-solid fa-check-circle" style="color: #22c55e; margin-right: 6px;"></i> GST Claims Invoices</span>
                </div>
            </div>
            <div class="hero-media" style="flex: 1 1 420px; max-width: 480px;">
                <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 16px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.4); border: 3px solid rgba(255,255,255,0.15);">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Packers and Movers in Chainpur Palamu - Shree Ashirwad Packers packing household goods" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                    <div class="media-overlay-badge" style="position: absolute; bottom: 20px; left: 20px; right: 20px; background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(8px); padding: 14px 18px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2);">
                        <p style="margin: 0; font-size: 13px; color: #f1f5f9; font-weight: 500;">
                            <i class="fa-solid fa-truck-ramp-box" style="color: #60a5fa; margin-right: 6px;"></i> High-density corrugated boxes & bubble wrapping for Palamu families.
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
            <li style="color: #1e3a8a; font-weight: 600;" aria-current="page">Chainpur Palamu</li>
        </ol>
    </div>
</nav>

<!-- Main Content Area -->
<main class="content-section" style="padding: 70px 0; background: #ffffff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <div class="row" style="display: flex; flex-wrap: wrap; gap: 40px;">
            <div class="main-column" style="flex: 1 1 760px;">
                
                <!-- Section 1: Overview & Strategic Location -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Seamless Relocation Solutions Across Chainpur & Palamu Division
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
                        Situated gracefully on the southern banks of the historic North Koel River directly across from Medininagar (Daltonganj), <strong>Chainpur</strong> occupies an indispensable place in Palamu district's residential, cultural, and administrative landscape. Known for its heritage landmarks including the iconic Chainpur Fort and nearby Shahpur Fort, Chainpur functions both as a vibrant historic settlement and a rapidly growing suburban residential belt that accommodates government officials, educators, healthcare professionals, business entrepreneurs, and security personnel stationed throughout Palamu.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
                        Relocating in Chainpur poses distinctive geographic and logistical considerations. Homes situated in heritage alleys, expanding suburban developments along Shahpur Main Road, or residential pockets connecting toward Purnadih, Baralot, and Chando require nimble vehicle handling and skilled manual packaging crews. Moreover, shifting between Chainpur and Medininagar involves crossing the North Koel bridge corridor, where traffic congestion during peak market hours necessitates precise logistical coordination. <strong>Shree Ashirwad Packers and Movers</strong> brings over a decade of deep local domain expertise, operating tailored mini-trucks and heavy logistics carriers designed to execute relocations smoothly, punctually, and without an ounce of stress.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 25px;">
                        Whether you are moving a 1 BHK apartment across the bridge to Redma or Sudna in Daltonganj, transitioning an executive bungalow from Shahpur to Ranchi's Morabadi, or handling an interstate transfer to Patna, Kolkata, Lucknow, or Delhi NCR, our professional teams manage every detail. We pack with premium European-grade materials, load with hydraulic safety equipment, and transport in sealed weather-resistant trucks.
                    </p>

                    <!-- Verified Image Embed 1 -->
                    <div class="content-media-embed" style="margin: 30px auto; max-width: 420px; width: 100%;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 12px 28px rgba(0,0,0,0.12);">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Household shifting and packaging in Chainpur Palamu" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-box" style="color: #60a5fa; margin-right: 8px;"></i> Multi-layer bubble wrap & heavy corrugated cartons for household shifting in Chainpur.</p>
                            </div>
                        </div>
                    </div>

                    <div class="highlight-quote-box" style="background: #f8fafc; border-left: 4px solid #3b82f6; padding: 20px 24px; border-radius: 0 8px 8px 0; margin-bottom: 30px;">
                        <p style="margin: 0; font-size: 15px; font-style: italic; color: #1e293b; line-height: 1.7;">
                            "In Chainpur and Medininagar, moving requires more than just loading boxes into a tempo. It requires understanding fragile heritage furniture, safeguarding delicate electronics against summer heat, and respecting the customer's timeline. Shree Ashirwad Packers and Movers treats every family heirloom as if it were our own."
                        </p>
                    </div>
                </article>

                <!-- Section 2: Comprehensive Moving Services -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 24px; font-family: 'Outfit', sans-serif;">
                        End-to-End Relocation Services Tailored for Chainpur Residents
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 24px;">
                        Every household and commercial relocation carries unique constraints. At Shree Ashirwad Packers and Movers, we do not believe in one-size-fits-all moving packages. We offer dedicated, specialized moving services in Chainpur (Palamu) that address your exact inventory, distance, and timeline:
                    </p>

                    <div class="services-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px; margin-bottom: 35px;">
                        <div class="service-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; transition: all 0.3s ease;">
                            <div class="service-icon" style="width: 50px; height: 50px; background: #dbeafe; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #1e40af; font-size: 22px; margin-bottom: 16px;">
                                <i class="fa-solid fa-couch"></i>
                            </div>
                            <h3 style="font-size: 19px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Full Household Shifting</h3>
                            <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                Comprehensive door-to-door home relocation covering living room sofas, teak dining sets, modular wardrobes, kitchen chinaware, refrigerators, washing machines, and personal curios with room-wise systematic labeling.
                            </p>
                        </div>

                        <div class="service-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; transition: all 0.3s ease;">
                            <div class="service-icon" style="width: 50px; height: 50px; background: #fee2e2; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #b91c1c; font-size: 22px; margin-bottom: 16px;">
                                <i class="fa-solid fa-motorcycle"></i>
                            </div>
                            <h3 style="font-size: 19px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Two-Wheeler & Bike Transport</h3>
                            <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                Customized zero-scratch bike courier service. We wrap mirrors, indicators, exhaust pipes, and fuel tanks with shock-absorbing foam, loading two-wheelers into dedicated wheel-clamp truck bays.
                            </p>
                        </div>

                        <div class="service-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; transition: all 0.3s ease;">
                            <div class="service-icon" style="width: 50px; height: 50px; background: #fef3c7; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #b45309; font-size: 22px; margin-bottom: 16px;">
                                <i class="fa-solid fa-car-side"></i>
                            </div>
                            <h3 style="font-size: 19px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Car Carrier Logistics</h3>
                            <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                Enclosed car carrier transit from Chainpur to Bengaluru, Pune, Hyderabad, Mumbai, Delhi, and Kolkata. Fully insured multi-deck carriers guarantee zero odometer tampering and absolute road safety.
                            </p>
                        </div>

                        <div class="service-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; transition: all 0.3s ease;">
                            <div class="service-icon" style="width: 50px; height: 50px; background: #dcfce7; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #15803d; font-size: 22px; margin-bottom: 16px;">
                                <i class="fa-solid fa-building-circle-check"></i>
                            </div>
                            <h3 style="font-size: 19px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Office & Bank Relocations</h3>
                            <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                Swift weekend corporate, banking, and government office transfers. We pack servers, workstations, modular cabins, and confidential archives with zero operational disruption.
                            </p>
                        </div>
                    </div>

                    <!-- Verified Image Embed 2 -->
                    <div class="content-media-embed" style="margin: 35px 0;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; max-width: 420px; margin: 0 auto; border-radius: 14px; overflow: hidden; box-shadow: 0 12px 28px rgba(0,0,0,0.12);">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck by Shree Ashirwad Packers in Chainpur Palamu" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 20px; color: #ffffff;">
                                <p style="margin: 0; font-size: 14px; font-weight: 600;"><i class="fa-solid fa-truck-moving" style="color: #60a5fa; margin-right: 8px;"></i> Modern, sealed container trucks providing safe transit across Palamu highways.</p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Section 3: Palamu Climate & Geography Specialized Packing -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Overcoming Palamu’s Unique Climate & Geographic Challenges
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
                        Palamu district features one of Jharkhand’s most intense climate variations. During peak summer months (April through June), temperatures in Chainpur, Medininagar, and the North Koel valley frequently surge past 44°C to 46°C. Relocations during this timeframe face risks of thermal warping of high-gloss laminate furniture, screen debonding in LED televisions, and softening of plastic packaging materials. Conversely, the monsoon season brings heavy localized downpours that cause humidity spikes and dampness around riverbank settlements.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
                        To counter these regional environmental variables, Shree Ashirwad Packers and Movers implements a rigorous <strong>5-Layer Climate-Resilient Packaging Protocol</strong>:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 15px; margin: 20px 0 30px;">
                        <div style="background: #f8fafc; border-top: 3px solid #2563eb; padding: 16px; border-radius: 6px;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 6px;"><i class="fa-solid fa-circle-check" style="color: #2563eb; margin-right: 6px;"></i> Thermal Barrier Bubble Wrap:</strong>
                            <span style="font-size: 14px; color: #475569;">High-density, virgin-grade air bubble sheeting that insulates electronics and temperature-sensitive acrylic surfaces from highway heat buildup.</span>
                        </div>
                        <div style="background: #f8fafc; border-top: 3px solid #1e3a8a; padding: 16px; border-radius: 6px;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 6px;"><i class="fa-solid fa-circle-check" style="color: #1e3a8a; margin-right: 6px;"></i> Virgin Corrugated Armor:</strong>
                            <span style="font-size: 14px; color: #475569;">Heavy 5-ply and 7-ply corrugated paper rolls wrapped securely around wooden furniture, dining tables, and bed headboards to absorb transport vibrations on NH-39.</span>
                        </div>
                        <div style="background: #f8fafc; border-top: 3px solid #2563eb; padding: 16px; border-radius: 6px;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 6px;"><i class="fa-solid fa-circle-check" style="color: #2563eb; margin-right: 6px;"></i> Reinforced Foam Edge Protectors:</strong>
                            <span style="font-size: 14px; color: #475569;">Specially molded EVA foam corners fitted over glass tabletops, dressing mirrors, and marble counters to prevent chipping and edge fractures.</span>
                        </div>
                        <div style="background: #f8fafc; border-top: 3px solid #1e3a8a; padding: 16px; border-radius: 6px;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 6px;"><i class="fa-solid fa-circle-check" style="color: #1e3a8a; margin-right: 6px;"></i> Moisture & Dust Barrier Cling Film:</strong>
                            <span style="font-size: 14px; color: #475569;">High-tensile, industrial-grade stretch film wrapped 360 degrees around sofas, mattresses, and carton stacks, creating an airtight shield against dust and rain.</span>
                        </div>
                        <div style="background: #f8fafc; border-top: 3px solid #2563eb; padding: 16px; border-radius: 6px;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 6px;"><i class="fa-solid fa-circle-check" style="color: #2563eb; margin-right: 6px;"></i> Heavy Duty Weatherproof Tarpaulins:</strong>
                            <span style="font-size: 14px; color: #475569;">Every transport vehicle features sealed container bodies and secondary heavy-gauge water-resistant tarpaulins to guarantee complete cargo dryness.</span>
                        </div>
                    </div>
                </article>

                <!-- Section 4: Transparent Rate Card & Pricing Tables -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 16px; font-family: 'Outfit', sans-serif;">
                        Estimated Moving Rates in Chainpur (Palamu) - Transparent Pricing
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 22px;">
                        Hidden fees, unexpected toll surcharges, and last-minute packing markups plague unorganized moving contractors. Shree Ashirwad Packers and Movers believes in total billing transparency. Below are our indicative rates for local moves within Chainpur / Medininagar and regional routes across Jharkhand:
                    </p>

                    <h3 style="font-size: 20px; font-weight: 700; color: #1e3a8a; margin-bottom: 14px;">
                        Table 1: Local & Regional Shifting Charges from Chainpur (Palamu)
                    </h3>
                    <div class="table-responsive" style="overflow-x: auto; margin-bottom: 35px; border-radius: 10px; border: 1px solid #e2e8f0;">
                        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14.5px;">
                            <thead>
                                <tr style="background: #1e3a8a; color: #ffffff;">
                                    <th style="padding: 14px 16px; font-weight: 600;">Relocation Type</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">Approximate Distance</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">Packing & Labor Cost</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">Transport & Vehicle</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">Total Estimated Cost</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">1 BHK Local (Chainpur to Medininagar)</td>
                                    <td style="padding: 14px 16px; color: #475569;">3 - 10 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹1,800 - ₹2,500</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹1,700 - ₹2,500</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹3,500 - ₹5,000</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">2 BHK Local (Within Palamu Block)</td>
                                    <td style="padding: 14px 16px; color: #475569;">5 - 15 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹2,800 - ₹3,800</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹2,700 - ₹3,700</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹5,500 - ₹7,500</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">3 BHK / Independent House</td>
                                    <td style="padding: 14px 16px; color: #475569;">5 - 20 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹4,200 - ₹5,800</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹3,800 - ₹5,200</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹8,000 - ₹11,000</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chainpur to Ranchi (Household)</td>
                                    <td style="padding: 14px 16px; color: #475569;">165 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹4,500 - ₹6,500</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹9,500 - ₹13,500</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹14,000 - ₹20,000</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chainpur to Jamshedpur / Bokaro</td>
                                    <td style="padding: 14px 16px; color: #475569;">280 - 310 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹5,500 - ₹8,000</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹14,000 - ₹19,000</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹19,500 - ₹27,000</td>
                                </tr>
                                <tr style="background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Two-Wheeler Transport (Regional)</td>
                                    <td style="padding: 14px 16px; color: #475569;">Up to 250 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹700 - ₹1,000</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹1,800 - ₹2,500</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹2,500 - ₹3,500</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h3 style="font-size: 20px; font-weight: 700; color: #1e3a8a; margin-bottom: 14px;">
                        Table 2: Long-Distance & Interstate Shifting from Chainpur (Palamu)
                    </h3>
                    <div class="table-responsive" style="overflow-x: auto; margin-bottom: 35px; border-radius: 10px; border: 1px solid #e2e8f0;">
                        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14.5px;">
                            <thead>
                                <tr style="background: #0f172a; color: #ffffff;">
                                    <th style="padding: 14px 16px; font-weight: 600;">Destination City</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">Distance</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">Estimated Transit Time</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">1/2 BHK Household</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">Car Relocation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chainpur to Patna / Gaya</td>
                                    <td style="padding: 14px 16px; color: #475569;">230 - 275 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">1 - 2 Days</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #2563eb;">₹14,500 - ₹21,000</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹6,500 - ₹9,500</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chainpur to Kolkata</td>
                                    <td style="padding: 14px 16px; color: #475569;">540 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">2 - 3 Days</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #2563eb;">₹22,000 - ₹32,000</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹11,000 - ₹14,500</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chainpur to Delhi NCR / Lucknow</td>
                                    <td style="padding: 14px 16px; color: #475569;">680 - 1050 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">3 - 4 Days</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #2563eb;">₹26,000 - ₹39,000</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹13,500 - ₹18,000</td>
                                </tr>
                                <tr style="background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chainpur to Bengaluru / Hyderabad</td>
                                    <td style="padding: 14px 16px; color: #475569;">1450 - 1800 km</td>
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
                            <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transport carrier loading service in Chainpur Palamu by Shree Ashirwad Packers" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 20px; color: #ffffff;">
                                <p style="margin: 0; font-size: 14px; font-weight: 600;"><i class="fa-solid fa-car" style="color: #60a5fa; margin-right: 8px;"></i> Hydraulic car loading ramp ensuring zero-undercarriage contact during transit.</p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Section 5: The 6-Step Precision Moving Process -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Our Step-by-Step Moving Methodology for Chainpur
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 25px;">
                        Relocation excellence is built upon methodical planning and flawless field execution. Over more than ten thousand successful moves across Jharkhand, we have honed an unyielding 6-step protocol that ensures zero lost cartons, zero damaged furniture, and absolute peace of mind:
                    </p>

                    <div class="timeline-steps" style="display: flex; flex-direction: column; gap: 20px;">
                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">1</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Free Pre-Move Survey & Transparent Estimate</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    Our surveyor evaluates your residence in Chainpur or reviews video recordings of your items, analyzing heavy appliances, fragile crockery, access staircases, and street width to issue a legally binding, transparent quote.
                                </p>
                            </div>
                        </div>

                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">2</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Room-Wise Itemized Packing with Quality Materials</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    Our uniformed packing specialists arrive punctually with brand-new bubble wrap, corrugated sheets, foam edge guards, and sturdy boxes. Each box is color-coded and labeled by room name and item category.
                                </p>
                            </div>
                        </div>

                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">3</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Dismantling of Complex Furniture & Appliances</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    Skilled carpenters safely disassemble king-size beds, modular wardrobes, TV wall units, and RO water purifiers. Hardware screws and fittings are sealed in labeled pouches taped securely to each unit.
                                </p>
                            </div>
                        </div>

                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">4</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Calculated Loading into Specialized Transport Trucks</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    Heavy items are loaded at the base and secured with heavy-duty ratchet tie-down belts to prevent internal shifting when navigating speed bumps or sharp turns on North Koel bridges and bypass roads.
                                </p>
                            </div>
                        </div>

                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">5</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">GPS-Tracked Highway Transit & Regular SMS Updates</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    Our fleet is equipped with live satellite tracking. Customers receive periodic checkpoint updates from our dispatch coordinator, giving full visibility on truck location and estimated arrival time.
                                </p>
                            </div>
                        </div>

                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">6</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Careful Unloading, Reassembly & Debris Removal</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    Upon arrival at your new destination, our crew unloads every box into its designated room, reassembles beds and tables, places major appliances, and collects discarded packing materials for eco-friendly recycling.
                                </p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Section 6: Secure Warehousing & Transit Insurance -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Transit Insurance & Short/Long-Term Storage Solutions
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
                        When relocating between cities or waiting for construction on your new property to conclude, safeguarding your belongings during intermediate periods is vital. Shree Ashirwad Packers and Movers provides clean, pest-controlled, and 24/7 CCTV-monitored warehousing and storage facilities with dedicated pallets and fire-suppression equipment.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 25px;">
                        Additionally, our <strong>All-Risk Transit Insurance</strong> protects your financial interests throughout the journey. Underwritten by India’s premier general insurance institutions, this policy covers accidents, vehicle overturns, flood, and fire. In the rare event of transit damage, our claims department assists you with swift, hassle-free settlement documentation.
                    </p>

                    <!-- Verified Image Embed 4 -->
                    <div class="content-media-embed" style="margin: 35px 0;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; max-width: 420px; margin: 0 auto; border-radius: 14px; overflow: hidden; box-shadow: 0 12px 28px rgba(0,0,0,0.12);">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Commercial goods storage warehouse serving Chainpur Palamu by Shree Ashirwad Packers" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 20px; color: #ffffff;">
                                <p style="margin: 0; font-size: 14px; font-weight: 600;"><i class="fa-solid fa-warehouse" style="color: #60a5fa; margin-right: 8px;"></i> Modern, 24/7 guarded warehouse facilities for household goods and commercial consignments.</p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Section 7: Key Neighborhoods & Rural Sectors in Chainpur -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Areas & Localities We Serve in Chainpur (Palamu)
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 20px;">
                        Our dedicated transport fleet operates throughout every neighborhood, village cluster, and transit corridor across Chainpur block and connected Medininagar suburban zones:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 14px; margin-bottom: 25px;">
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Chainpur Main Bazar</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Shahpur Fort Road</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Purnadih Sector</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Baralot Residential Zone</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Mahugawan Corridor</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Semra & Bansdih</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Chando & Salatuwa</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Koel River Bridge Approach</div>
                    </div>
                    <p style="font-size: 15px; color: #64748b; line-height: 1.7;">
                        We also coordinate seamless inter-block relocations connecting Chainpur with Daltonganj, Paton, Lesliganj, Satbarwa, Bishrampur, Chhatarpur, and Betla National Park corridor.
                    </p>
                </article>

                <!-- Section: Transfer Claims & Local Relocation Advisory -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Government Relocation Claims & Helpful Moving Tips for Chainpur
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
                        A significant proportion of moves originating in Chainpur and Medininagar involve personnel from Jharkhand Administrative Service, Nilamber Pitamber University faculty, police personnel, doctors from Medirai Medical College Hospital, and banking staff from SBI, PNB, and Bank of India. When taking transfers to other district headquarters or state capitals, submitting admissible paperwork for relocation reimbursement is paramount. Shree Ashirwad Packers and Movers provides a 100% verified documentation packet including:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 12px; margin: 20px 0 25px;">
                        <div style="background: #f8fafc; border-left: 3px solid #2563eb; padding: 14px; border-radius: 6px; font-size: 14px; color: #334155;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 4px;"><i class="fa-solid fa-file-invoice" style="color: #2563eb; margin-right: 6px;"></i> GST-Registered Final Invoice:</strong>
                            Clear breakdown of packing, loading, freight, and unloading expenses with official company seal.
                        </div>
                        <div style="background: #f8fafc; border-left: 3px solid #1e3a8a; padding: 14px; border-radius: 6px; font-size: 14px; color: #334155;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 4px;"><i class="fa-solid fa-receipt" style="color: #1e3a8a; margin-right: 6px;"></i> Consignment Note (Bilty):</strong>
                            Documenting vehicle registration number, driver details, and destination depot verification.
                        </div>
                        <div style="background: #f8fafc; border-left: 3px solid #2563eb; padding: 14px; border-radius: 6px; font-size: 14px; color: #334155;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 4px;"><i class="fa-solid fa-list-check" style="color: #2563eb; margin-right: 6px;"></i> Serialized Inventory Sheet:</strong>
                            Numbered list signed by both sender and field supervisor during packing and delivery.
                        </div>
                    </div>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
                        To ensure an effortless moving day across the North Koel River, we advise customers in Chainpur to plan bridge transit during non-peak hours (between 7:00 AM and 10:00 AM or after 8:00 PM) when local market traffic is lightest. Additionally, keep personal identity documents, land deeds, gold jewelry, and critical medical supplies packed in a separate overnight bag carried directly with your family.
                    </p>

                    <!-- Local Google Map Embed -->
                    <div style="margin: 35px 0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;">
                        <iframe src="https://maps.google.com/maps?q=Chainpur%2C%20Palamu%2C%20Jharkhand&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Map Location of Chainpur Palamu Jharkhand"></iframe>
                    </div>
                </article>

                <!-- Section 8: Frequently Asked Questions (FAQ) -->
                <article class="article-block" style="margin-bottom: 40px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 24px; font-family: 'Outfit', sans-serif;">
                        Frequently Asked Questions - Packers & Movers in Chainpur (Palamu)
                    </h2>
                    
                    <div class="faq-accordion" style="display: flex; flex-direction: column; gap: 16px;">
                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> How is Chainpur (Palamu) serviced by Shree Ashirwad Packers and Movers?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Chainpur is situated right across the North Koel River from Medininagar (Daltonganj). Shree Ashirwad Packers and Movers operates dedicated vehicles and experienced packaging crews throughout Chainpur, Shahpur, Purnadih, Baralot, and connected rural sectors, ensuring prompt doorstep pickups and safe local or national transit.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> What are the estimated charges for household shifting from Chainpur (Palamu)?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Local shifting within Chainpur or across the bridge to Medininagar typically ranges from ₹3,500 to ₹9,500 depending upon home size (1 BHK to 3 BHK). Intercity transfers to Ranchi, Patna, Gaya, or Kolkata range from ₹11,000 to ₹38,000 based on cargo volume and exact road distance.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> Do you provide car and bike carrier services from Chainpur (Palamu)?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Yes, we operate specialized enclosed hydraulics car carriers and padded bike stands for secure vehicle shifting from Chainpur to all major cities across India, complete with pre-dispatch vehicle inspection reports and comprehensive transit insurance.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> How do you protect delicate household goods against Palamu's extreme summer temperatures?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Palamu frequently encounters summer temperatures exceeding 44°C. We use multi-layer thermal bubble insulation, corrugated rolls, heat-resistant poly-stretch film, and ventilated weatherproof truck bodies to prevent any heat degradation, melting, or warping of electronic displays and polished furniture.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> Can government, bank, and police officers in Chainpur claim relocation allowance with your bill?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Yes, Shree Ashirwad Packers and Movers is an IBA-approved and ISO-certified logistics company. We provide 100% genuine GST-compliant invoices, vehicle consignment notes (bilty), transit insurance certificates, and itemized inventory lists accepted by all government departments, public sector banks, and defense institutions.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> How much advance booking notice is required for moving from Chainpur?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                We recommend confirming your booking 2 to 4 days in advance to reserve your preferred moving slot and customized truck size. However, for urgent transfers and emergency relocations, we also offer express same-day packing and dispatch services across Chainpur and Medininagar.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> Is transit insurance mandatory, and how does it safeguard my items?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                While voluntary, transit insurance is strongly recommended for intercity relocations. It covers any unforeseen accidental transit damages or natural mishaps on highways with swift compensation settlement backed by leading national insurance partners.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> How can I schedule a pre-move home survey in Chainpur (Palamu)?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                You can call our 24x7 booking helpline at +91 8409531615 or WhatsApp us at +91 9308888746. Our survey coordinator will arrange a free physical home visit or a quick video survey to provide a transparent, fixed-price quotation with no hidden costs.
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
                            Moving in or out of Chainpur, Palamu? Speak directly with our senior relocation coordinator today.
                        </p>
                        <div style="display: flex; flex-direction: column; gap: 12px; margin-bottom: 20px;">
                            <a href="tel:8409531615" style="display: flex; align-items: center; justify-content: center; gap: 10px; background: #ef4444; color: #ffffff; text-decoration: none; padding: 14px; border-radius: 8px; font-weight: 700; font-size: 15px; box-shadow: 0 6px 16px rgba(239, 68, 68, 0.25);">
                                <i class="fa-solid fa-phone"></i> +91 8409531615
                            </a>
                            <a href="tel:9308888746" style="display: flex; align-items: center; justify-content: center; gap: 10px; background: #1e3a8a; color: #ffffff; text-decoration: none; padding: 14px; border-radius: 8px; font-weight: 700; font-size: 15px;">
                                <i class="fa-solid fa-phone"></i> +91 9308888746
                            </a>
                            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Chainpur%20Palamu" target="_blank" style="display: flex; align-items: center; justify-content: center; gap: 10px; background: #22c55e; color: #ffffff; text-decoration: none; padding: 14px; border-radius: 8px; font-weight: 700; font-size: 15px;">
                                <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
                            </a>
                        </div>
                        <div style="border-top: 1px solid #e2e8f0; padding-top: 16px; font-size: 13px; color: #64748b; line-height: 1.6;">
                            <p style="margin: 0 0 6px;"><i class="fa-solid fa-clock" style="color: #2563eb; margin-right: 6px;"></i> Working Hours: 24 Hours / 7 Days</p>
                            <p style="margin: 0;"><i class="fa-solid fa-shield-check" style="color: #16a34a; margin-right: 6px;"></i> 100% Safe & Secure Packing</p>
                        </div>
                    </div>

                    <!-- Why Choose Us Box -->
                    <div class="sidebar-card" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 26px; box-shadow: 0 4px 14px rgba(0,0,0,0.05);">
                        <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 16px;">
                            Why Choose Shree Ashirwad?
                        </h4>
                        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 12px; font-size: 14px; color: #334155;">
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>10+ Years Regional Experience</span></li>
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>IBA Approved Transit Invoices</span></li>
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>Trained In-House Packaging Crew</span></li>
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>Climate-Resilient 5-Layer Wraps</span></li>
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>Real-Time GPS Vehicle Tracking</span></li>
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>Zero Hidden Costs or Surcharges</span></li>
                        </ul>
                    </div>

                    <!-- Nearby Hubs & Connections -->
                    <div class="sidebar-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 14px; padding: 24px;">
                        <h4 style="font-size: 17px; font-weight: 700; color: #0f172a; margin-bottom: 14px;">
                            Nearby Service Hubs
                        </h4>
                        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px; font-size: 13.5px;">
                            <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-daltonganj" style="color: #2563eb; text-decoration: none; font-weight: 500;"><i class="fa-solid fa-arrow-right" style="font-size: 11px; margin-right: 6px;"></i> Daltonganj (Medininagar)</a></li>
                            <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-palamu" style="color: #2563eb; text-decoration: none; font-weight: 500;"><i class="fa-solid fa-arrow-right" style="font-size: 11px; margin-right: 6px;"></i> Palamu District Headquarters</a></li>
                            <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bishrampur" style="color: #2563eb; text-decoration: none; font-weight: 500;"><i class="fa-solid fa-arrow-right" style="font-size: 11px; margin-right: 6px;"></i> Bishrampur</a></li>
                            <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gharwha" style="color: #2563eb; text-decoration: none; font-weight: 500;"><i class="fa-solid fa-arrow-right" style="font-size: 11px; margin-right: 6px;"></i> Garhwa District</a></li>
                            <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-latehar" style="color: #2563eb; text-decoration: none; font-weight: 500;"><i class="fa-solid fa-arrow-right" style="font-size: 11px; margin-right: 6px;"></i> Latehar District</a></li>
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
            Ready for a Hassle-Free Move in Chainpur (Palamu)?
        </h2>
        <p style="font-size: 16.5px; line-height: 1.7; color: #cbd5e1; margin-bottom: 30px;">
            Contact Shree Ashirwad Packers and Movers today for a free pre-move consultation and upfront transparent price quote. Experience the peace of mind that comes with Jharkhand’s trusted moving professionals.
        </p>
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px;">
            <a href="tel:8409531615" style="display: inline-flex; align-items: center; gap: 10px; background: #ef4444; color: #ffffff; padding: 14px 32px; border-radius: 8px; font-weight: 700; text-decoration: none; font-size: 16px; box-shadow: 0 8px 20px rgba(239, 68, 68, 0.35);">
                <i class="fa-solid fa-phone-volume"></i> Call +91 8409531615
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20please%20send%20me%20a%20quote%20for%20Chainpur%20Palamu" target="_blank" style="display: inline-flex; align-items: center; gap: 10px; background: #22c55e; color: #ffffff; padding: 14px 32px; border-radius: 8px; font-weight: 700; text-decoration: none; font-size: 16px; box-shadow: 0 8px 20px rgba(34, 197, 94, 0.35);">
                <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
            </a>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
