<?php
/**
 * Packers and Movers in Chandankiyari - Shree Ashirwad Packers and Movers
 * Website: https://www.shreeashirwadpackers.com
 * Contact: +91 8409531615 / +91 9308888746
 * Office: Serving Chandankiyari, Chas, Bokaro Steel City & Dhanbad, Jharkhand
 */

require_once __DIR__ . '/includes/config.php';

// Page-specific variables
$page_title = "Packers and Movers in Chandankiyari - 8409531615 | Shree Ashirwad Packers";
$page_description = "Trusted packers and movers in Chandankiyari (Bokaro). Safe household shifting, vehicle transportation, colliery & industrial moving, IBA approved bills. Call 8409531615.";
$page_keywords = "packers and movers in chandankiyari, best movers and packers chandankiyari, household shifting chandankiyari bokaro, car transport chandankiyari, bike shifting chandankiyari, bhojudih packers and movers, shree ashirwad packers chandankiyari";
$canonical_url = SITE_BASE_URL . "/packers-and-movers-in-chandankiyari";
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
      "name": "Shree Ashirwad Packers and Movers - Chandankiyari",
      "image": "<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg",
      "@id": "<?php echo $canonical_url; ?>#movingcompany",
      "url": "<?php echo $canonical_url; ?>",
      "telephone": "+918409531615",
      "keywords": "packers and movers in chandankiyari, packers and movers chandankiyari, best packers and movers in chandankiyari, household shifting chandankiyari, car transport chandankiyari, bike parcel chandankiyari, iba approved packers chandankiyari, local shifting chandankiyari",
      "priceRange": "INR 3500 - 50000",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Chas-Purulia Main Road, Chandankiyari Bazar",
        "addressLocality": "Chandankiyari, Bokaro",
        "addressRegion": "Jharkhand",
        "postalCode": "828134",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 23.5768,
        "longitude": 86.3533
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
          "name": "Chandankiyari",
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
          "name": "How does Shree Ashirwad Packers serve Chandankiyari and nearby colliery belts?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Chandankiyari is strategically positioned between Bokaro Steel City, Chas, Dhanbad, and Purulia. Shree Ashirwad Packers and Movers operates dedicated vehicles and experienced packaging crews across Chandankiyari Bazar, Amlabad Colliery, Bhojudih, and surrounding rural zones, delivering door-to-door packing and guaranteed on-time transit."
          }
        },
        {
          "@type": "Question",
          "name": "What are the estimated rates for shifting from Chandankiyari to Bokaro Steel City or Chas?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Moving from Chandankiyari to Chas or Bokaro Steel City (approx. 20-30 km) typically costs between ₹4,500 and ₹7,500 for a 1 BHK, and ₹7,000 to ₹11,000 for a 2/3 BHK home, including complete packing, vehicle transport, loading, and unloading."
          }
        },
        {
          "@type": "Question",
          "name": "Do you offer household shifting from Chandankiyari to West Bengal locations like Purulia or Kolkata?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, Chandankiyari shares a direct border with Purulia district. We manage daily trips across the Jharkhand-Bengal border to Purulia, Asansol, Durgapur, and Kolkata with all interstate documentation and transit tax clearances handled."
          }
        },
        {
          "@type": "Question",
          "name": "Can SAIL, CCL, and BCCL employees claim transfer allowance with your moving bills?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Shree Ashirwad Packers and Movers is an IBA-approved and ISO-certified logistics company. We provide 100% genuine GST-compliant invoices, consignment bilty, transit insurance certificates, and itemized inventory lists accepted by SAIL Bokaro, BCCL Dhanbad, and government departments."
          }
        },
        {
          "@type": "Question",
          "name": "How do you protect household goods against colliery dust and rough roads?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We apply 5-layer heavy-duty packing, including virgin air bubble wrap, thick corrugated sheets, edge protectors, and multiple passes of dust-proof stretch film. Furthermore, all goods travel inside sealed, weather-tight metal container trucks."
          }
        },
        {
          "@type": "Question",
          "name": "Do you transport cars and two-wheelers from Chandankiyari?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we operate specialized enclosed hydraulics car carriers and dedicated two-wheeler transport bays, providing scratch-free, insured transport from Chandankiyari to all major Indian cities."
          }
        },
        {
          "@type": "Question",
          "name": "How far in advance should I book my relocation in Chandankiyari?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We recommend booking 2 to 3 days ahead of your scheduled moving date to secure your desired slot and truck size. However, for urgent transfers, our rapid response team can facilitate same-day packing and loading."
          }
        },
        {
          "@type": "Question",
          "name": "How can I book a free home survey in Chandankiyari?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can call our dedicated 24x7 helpline at +91 8409531615 or WhatsApp us at +91 9308888746. Our Bokaro operations coordinator will schedule a free physical inspection or quick video survey to provide a transparent, fixed-price estimate."
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
                    <i class="fa-solid fa-truck-ramp-box"></i> Bokaro & Border Corridor Relocation Leader
                </div>
                <h1 style="font-size: clamp(32px, 4.5vw, 48px); font-weight: 800; line-height: 1.2; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                    Expert Packers and Movers in <span style="color: #60a5fa;">Chandankiyari</span>
                </h1>
                <p style="font-size: 17px; line-height: 1.65; color: #e2e8f0; margin-bottom: 28px;">
                    Shifting your home, office, or vehicle in Chandankiyari, Bokaro? Shree Ashirwad Packers and Movers delivers premium, zero-damage shifting services throughout Chandankiyari, Chas, Bhojudih, and the Amlabad colliery belt. With industrial 5-layer packaging, IBA-approved bills for SAIL and BCCL transfer reimbursements, and enclosed GPS-monitored trucks, we ensure an entirely seamless move.
                </p>
                <div class="hero-cta-group" style="display: flex; flex-wrap: wrap; gap: 15px; margin-bottom: 30px;">
                    <a href="tel:8409531615" class="btn-primary" style="display: inline-flex; align-items: center; gap: 10px; background: #ef4444; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; box-shadow: 0 10px 20px rgba(239, 68, 68, 0.3); transition: all 0.3s ease;">
                        <i class="fa-solid fa-phone-volume"></i> Call 8409531615
                    </a>
                    <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20moving%20in%20Chandankiyari" target="_blank" class="btn-whatsapp" style="display: inline-flex; align-items: center; gap: 10px; background: #22c55e; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; box-shadow: 0 10px 20px rgba(34, 197, 94, 0.3); transition: all 0.3s ease;">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp Quote
                    </a>
                </div>
                <div class="hero-features" style="display: flex; flex-wrap: wrap; gap: 20px; font-size: 14px; color: #cbd5e1;">
                    <span><i class="fa-solid fa-check-circle" style="color: #22c55e; margin-right: 6px;"></i> SAIL & BCCL Claim Bills</span>
                    <span><i class="fa-solid fa-check-circle" style="color: #22c55e; margin-right: 6px;"></i> 0% Transit Breakage</span>
                    <span><i class="fa-solid fa-check-circle" style="color: #22c55e; margin-right: 6px;"></i> All-Risk Transit Insurance</span>
                </div>
            </div>
            <div class="hero-media" style="flex: 1 1 420px; max-width: 480px;">
                <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 16px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.4); border: 3px solid rgba(255,255,255,0.15);">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Packers and Movers in Chandankiyari - Safe household packing by Shree Ashirwad Packers" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                    <div class="media-overlay-badge" style="position: absolute; bottom: 20px; left: 20px; right: 20px; background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(8px); padding: 14px 18px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2);">
                        <p style="margin: 0; font-size: 13px; color: #f1f5f9; font-weight: 500;">
                            <i class="fa-solid fa-box-open" style="color: #60a5fa; margin-right: 6px;"></i> Heavy corrugated cartons & bubble cushioning for Chandankiyari families.
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
            <li style="color: #1e3a8a; font-weight: 600;" aria-current="page">Chandankiyari</li>
        </ol>
    </div>
</nav>

<!-- Main Content Section -->
<main class="content-section" style="padding: 70px 0; background: #ffffff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <div class="row" style="display: flex; flex-wrap: wrap; gap: 40px;">
            <div class="main-column" style="flex: 1 1 760px;">
                
                <!-- Section 1: Overview & Strategic Location -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Top-Tier Relocation Services Across Chandankiyari & Bokaro Industrial Basin
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
                        Positioned in the eastern quadrant of Bokaro district, <strong>Chandankiyari</strong> functions as a vital socioeconomic corridor connecting the steel hub of Bokaro Steel City and Chas with the mining clusters of Dhanbad and the Purulia district of West Bengal. Bordered by the Damodar and Izri river systems, Chandankiyari is home to active coal mining settlements like Amlabad Colliery, significant railway junctions like Bhojudih on the Adra railway division, and thriving agrarian-commercial markets centered along the Chas-Purulia highway.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
                        Because of its unique geography, relocating in Chandankiyari presents distinct operational needs. Families regularly transition between Chandankiyari and urban sectors of Bokaro Steel City (Sector 1 through Sector 12, Cooperative Colony), commercial hubs in Chas, colliery townships in Dhanbad and Jharia, or across state borders into Purulia and Bankura. Moving in this belt requires heavy-duty vehicles capable of handling mining road surfaces, dust-resistant packaging materials that shield delicate home furniture from airborne coal particles, and certified billing paperwork for public sector employee transfer allowances.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 25px;">
                        <strong>Shree Ashirwad Packers and Movers</strong> has earned an outstanding reputation in Chandankiyari. Our trained field crews, equipped with dedicated closed container vehicles and multi-layered packaging supplies, manage every step of your move. From dismantling complex modular furniture to carefully cushioning televisions, refrigerators, and glassware, we guarantee that every single item arrives safely, punctually, and in immaculate condition.
                    </p>

                    <!-- Verified Image Embed 1 -->
                    <div class="content-media-embed" style="margin: 30px auto; max-width: 420px; width: 100%;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 12px 28px rgba(0,0,0,0.12);">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Household packaging in Chandankiyari by Shree Ashirwad Packers" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-box" style="color: #60a5fa; margin-right: 8px;"></i> Multi-layer bubble wrap & heavy corrugated cartons for household shifting in Chandankiyari.</p>
                            </div>
                        </div>
                    </div>

                    <div class="highlight-quote-box" style="background: #eff6ff; border-left: 4px solid #2563eb; padding: 20px 24px; border-radius: 0 8px 8px 0; margin-bottom: 30px;">
                        <p style="margin: 0; font-size: 15px; font-style: italic; color: #1e3a8a; line-height: 1.7;">
                            "In the industrial and colliery corridors of Chandankiyari, ordinary packing is simply not enough. Shree Ashirwad Packers provides dust-proof, moisture-sealed packaging and authentic IBA-approved documentation trusted by steel, coal, and railway professionals across Jharkhand."
                        </p>
                    </div>
                </article>

                <!-- Section 2: Comprehensive Shifting Solutions -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 24px; font-family: 'Outfit', sans-serif;">
                        Full-Spectrum Relocation Services in Chandankiyari
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 24px;">
                        Whether moving a modest home near Chandankiyari Bazar, relocating colliery quarters in Amlabad, or organizing cross-border transport to Purulia, our comprehensive service spectrum satisfies every moving requirement:
                    </p>

                    <div class="services-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px; margin-bottom: 35px;">
                        <div class="service-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; transition: all 0.3s ease;">
                            <div class="service-icon" style="width: 50px; height: 50px; background: #dbeafe; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #1e40af; font-size: 22px; margin-bottom: 16px;">
                                <i class="fa-solid fa-house-chimney-crack"></i>
                            </div>
                            <h3 style="font-size: 19px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Household Shifting</h3>
                            <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                End-to-end residential relocation covering sofa suites, solid teak furniture, beds, LED televisions, double-door refrigerators, and chinaware with methodical box numbering.
                            </p>
                        </div>

                        <div class="service-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; transition: all 0.3s ease;">
                            <div class="service-icon" style="width: 50px; height: 50px; background: #fee2e2; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #b91c1c; font-size: 22px; margin-bottom: 16px;">
                                <i class="fa-solid fa-motorcycle"></i>
                            </div>
                            <h3 style="font-size: 19px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Two-Wheeler Transport</h3>
                            <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                Zero-scratch bike courier service. We wrap body panels, mirrors, and exhaust systems with thick foam sheets, locking wheels onto specialized internal truck cradles.
                            </p>
                        </div>

                        <div class="service-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; transition: all 0.3s ease;">
                            <div class="service-icon" style="width: 50px; height: 50px; background: #fef3c7; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #b45309; font-size: 22px; margin-bottom: 16px;">
                                <i class="fa-solid fa-car"></i>
                            </div>
                            <h3 style="font-size: 19px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Car Carrier Logistics</h3>
                            <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                Enclosed multi-car carriers for safe long-distance automobile transit from Chandankiyari to Kolkata, Patna, Lucknow, Delhi NCR, and Bengaluru with complete transit insurance.
                            </p>
                        </div>

                        <div class="service-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; transition: all 0.3s ease;">
                            <div class="service-icon" style="width: 50px; height: 50px; background: #dcfce7; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #15803d; font-size: 22px; margin-bottom: 16px;">
                                <i class="fa-solid fa-building-shield"></i>
                            </div>
                            <h3 style="font-size: 19px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Corporate & Colliery Office Shifting</h3>
                            <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                Streamlined commercial moves for bank branches, school offices, and industrial contractor sites across Bokaro, Dhanbad, and Purulia with minimum downtime.
                            </p>
                        </div>
                    </div>

                    <!-- Verified Image Embed 2 -->
                    <div class="content-media-embed" style="margin: 35px 0;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; max-width: 420px; margin: 0 auto; border-radius: 14px; overflow: hidden; box-shadow: 0 12px 28px rgba(0,0,0,0.12);">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck by Shree Ashirwad Packers in Chandankiyari Bokaro" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 20px; color: #ffffff;">
                                <p style="margin: 0; font-size: 14px; font-weight: 600;"><i class="fa-solid fa-truck-moving" style="color: #60a5fa; margin-right: 8px;"></i> Sealed containerized logistics fleet ensuring dust-free transit across Bokaro and Chas.</p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Section 3: High-Grade Packaging Matrix -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Dust-Proof 5-Layer Packaging for Mining Belt Relocations
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
                        The proximity of coal washeries, rail loading tracks at Bhojudih, and open mines in the surrounding Jharia-Bokaro region generates fine particulate dust that easily infiltrates ordinary moving cartons and soils furniture upholstery. To counteract these conditions, Shree Ashirwad Packers implements an uncompromising <strong>5-Stage Shielding Matrix</strong>:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 15px; margin: 20px 0 30px;">
                        <div style="background: #f8fafc; border-top: 3px solid #2563eb; padding: 16px; border-radius: 6px;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 6px;"><i class="fa-solid fa-circle-check" style="color: #2563eb; margin-right: 6px;"></i> Thermal Cushioning Air Bubble Wrap:</strong>
                            <span style="font-size: 14px; color: #475569;">Double-layered 100 GSM air bubble film wrapping electronics, microwave ovens, kitchen appliances, and delicate glass items.</span>
                        </div>
                        <div style="background: #f8fafc; border-top: 3px solid #1e3a8a; padding: 16px; border-radius: 6px;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 6px;"><i class="fa-solid fa-circle-check" style="color: #1e3a8a; margin-right: 6px;"></i> Heavy-Duty Corrugated Board Armor:</strong>
                            <span style="font-size: 14px; color: #475569;">Robust 5-ply and 7-ply virgin paper wrapping around wooden almirahs, dining tables, and bed frames to absorb road vibration.</span>
                        </div>
                        <div style="background: #f8fafc; border-top: 3px solid #2563eb; padding: 16px; border-radius: 6px;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 6px;"><i class="fa-solid fa-circle-check" style="color: #2563eb; margin-right: 6px;"></i> Rigid Corner Angle Protectors:</strong>
                            <span style="font-size: 14px; color: #475569;">Specially molded corner guards fitted onto glass tabletops, dressing table mirrors, and marble slabs to prevent chipping.</span>
                        </div>
                        <div style="background: #f8fafc; border-top: 3px solid #1e3a8a; padding: 16px; border-radius: 6px;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 6px;"><i class="fa-solid fa-circle-check" style="color: #1e3a8a; margin-right: 6px;"></i> Hermetic Stretch Cling Wrap:</strong>
                            <span style="font-size: 14px; color: #475569;">High-gauge LDPE shrink film wrapped 360 degrees around all boxed goods and upholstered furniture to create a 100% dust-tight and waterproof seal.</span>
                        </div>
                        <div style="background: #f8fafc; border-top: 3px solid #2563eb; padding: 16px; border-radius: 6px;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 6px;"><i class="fa-solid fa-circle-check" style="color: #2563eb; margin-right: 6px;"></i> Heavy-Duty Cargo Ratchet Belts:</strong>
                            <span style="font-size: 14px; color: #475569;">Inside our covered trucks, goods are anchored firmly against structural ribs to prevent load shifts on uneven roads.</span>
                        </div>
                    </div>
                </article>

                <!-- Section 4: Transparent Pricing Tables -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 16px; font-family: 'Outfit', sans-serif;">
                        Estimated Moving Costs in Chandankiyari - Clear & Transparent
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 22px;">
                        We believe that fair pricing builds long-term customer trust. Below is our comprehensive rate schedule for moves originating from Chandankiyari to local destinations in Bokaro/Dhanbad and across national highways:
                    </p>

                    <h3 style="font-size: 20px; font-weight: 700; color: #1e3a8a; margin-bottom: 14px;">
                        Table 1: Local & Regional Moving Charges from Chandankiyari
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
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">1 BHK Local Move (Within Chandankiyari)</td>
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
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chandankiyari to Chas (2 BHK)</td>
                                    <td style="padding: 14px 16px; color: #475569;">22 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹3,000 - ₹4,200</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹3,500 - ₹4,800</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹6,500 - ₹9,000</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chandankiyari to Bokaro Steel City</td>
                                    <td style="padding: 14px 16px; color: #475569;">28 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹3,500 - ₹4,800</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹4,200 - ₹5,800</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹7,700 - ₹10,600</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chandankiyari to Dhanbad / Jharia</td>
                                    <td style="padding: 14px 16px; color: #475569;">42 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹3,800 - ₹5,200</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹5,500 - ₹7,500</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹9,300 - ₹12,700</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chandankiyari to Ranchi</td>
                                    <td style="padding: 14px 16px; color: #475569;">135 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹4,500 - ₹6,500</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹10,000 - ₹13,500</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹14,500 - ₹20,000</td>
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
                        Table 2: Interstate & Major Highway Corridors from Chandankiyari
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
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chandankiyari to Purulia (WB)</td>
                                    <td style="padding: 14px 16px; color: #475569;">40 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">Same Day</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #2563eb;">₹8,500 - ₹12,500</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹4,500 - ₹6,500</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chandankiyari to Asansol / Durgapur</td>
                                    <td style="padding: 14px 16px; color: #475569;">85 - 120 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">1 Day</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #2563eb;">₹12,500 - ₹18,000</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹6,000 - ₹8,500</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chandankiyari to Kolkata / Howrah</td>
                                    <td style="padding: 14px 16px; color: #475569;">290 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">1 - 2 Days</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #2563eb;">₹19,000 - ₹27,500</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹9,500 - ₹13,500</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chandankiyari to Patna / Gaya</td>
                                    <td style="padding: 14px 16px; color: #475569;">320 - 360 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">2 Days</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #2563eb;">₹21,000 - ₹30,000</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹10,500 - ₹14,500</td>
                                </tr>
                                <tr style="background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chandankiyari to Delhi NCR / Bengaluru</td>
                                    <td style="padding: 14px 16px; color: #475569;">1250 - 1700 km</td>
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
                            <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transport carrier loading service in Chandankiyari by Shree Ashirwad Packers" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 20px; color: #ffffff;">
                                <p style="margin: 0; font-size: 14px; font-weight: 600;"><i class="fa-solid fa-car-side" style="color: #60a5fa; margin-right: 8px;"></i> Hydraulic closed-body car carriers providing scratch-free automobile shifting.</p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Section 5: Step-by-Step Moving Process -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Our 6-Step Operational Methodology in Chandankiyari
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 25px;">
                        Professional moving requires seamless logistical discipline. We execute every relocation in Chandankiyari through an established 6-step operational blueprint:
                    </p>

                    <div class="timeline-steps" style="display: flex; flex-direction: column; gap: 20px;">
                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">1</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Free Pre-Move Consultation & Estimate</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    Our Bokaro field coordinator visits your residence in Chandankiyari or reviews goods through video call, calculating packaging supplies, truck volume, and labor to provide a binding quote.
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
                                    Goods are stacked methodically inside our sealed metal-body containers with heavier items anchored at the base. Industrial ratchet tie-downs prevent load shifting on rough mining roads.
                                </p>
                            </div>
                        </div>

                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">5</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">GPS-Tracked Highway Transit & Checkpoint Updates</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    Vehicles are tracked via live GPS. We manage border checkpoint formalities smoothly on the Chas-Purulia corridor, keeping customers informed of highway progress and arrival ETAs.
                                </p>
                            </div>
                        </div>

                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">6</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Doorstep Unloading, Reassembly & Debris Removal</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    Our team carries every box to its designated room, reassembles beds and tables, places major appliances, and disposes of packing debris so you can relax right away.
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
                        For families renovating their premises, public sector employees waiting for quarter allocation in Bokaro or Dhanbad, or commercial traders needing secure buffer storage, we provide clean, pest-controlled, and CCTV-guarded warehousing space. Your possessions remain elevated on moisture-resistant pallets, shielded from industrial dust and moisture.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 25px;">
                        Additionally, every consignment is supported by our comprehensive <strong>All-Risk Transit Insurance</strong> policy. Underwritten by India’s top general insurers, this policy covers accidents, vehicle overturns, fire, and flood, ensuring complete peace of mind and rapid claims settlement.
                    </p>

                    <!-- Verified Image Embed 4 -->
                    <div class="content-media-embed" style="margin: 35px 0;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; max-width: 420px; margin: 0 auto; border-radius: 14px; overflow: hidden; box-shadow: 0 12px 28px rgba(0,0,0,0.12);">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Commercial and household goods storage warehouse serving Chandankiyari by Shree Ashirwad Packers" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 20px; color: #ffffff;">
                                <p style="margin: 0; font-size: 14px; font-weight: 600;"><i class="fa-solid fa-warehouse" style="color: #60a5fa; margin-right: 8px;"></i> Modern, 24/7 guarded warehouse facility protecting goods for short and long-term storage.</p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Section 7: Key Neighborhoods & Rural Sectors in Chandankiyari -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Areas & Localities We Cover in Chandankiyari
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 20px;">
                        We operate an extensive logistics network providing doorstep pickup and delivery across all neighborhoods, market belts, and colliery sectors in Chandankiyari and nearby Bokaro zones:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 14px; margin-bottom: 25px;">
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Chandankiyari Main Bazar</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Chas-Purulia Highway Road</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Amlabad Colliery Quarters</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Bhojudih Railway Colony</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Mahal & Batbinor</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Kumardag & Silphor</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Lalpur Residential Zone</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Damodar River Basin Road</div>
                    </div>
                    <p style="font-size: 15px; color: #64748b; line-height: 1.7;">
                        We also coordinate rapid daily transfers linking Chandankiyari with Chas, Bokaro Steel City, Dhanbad, Jharia, Sindri, Purulia, and Ranchi.
                    </p>
                </article>

                <!-- Section: Transfer Claims & Colliery Moving Advisory -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        SAIL, BCCL & Government Claim Support with Practical Moving Guidance
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
                        A significant share of families shifting from Chandankiyari belong to SAIL Bokaro Steel Plant, Bharat Coking Coal Limited (BCCL), Central Coalfields Limited (CCL), South Eastern Railway (Adra Division), or regional nationalized banks. Claiming relocation reimbursement requires 100% auditable documentation compliant with central and PSU audit rules. Shree Ashirwad Packers provides:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 12px; margin: 20px 0 25px;">
                        <div style="background: #f8fafc; border-left: 3px solid #2563eb; padding: 14px; border-radius: 6px; font-size: 14px; color: #334155;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 4px;"><i class="fa-solid fa-file-invoice" style="color: #2563eb; margin-right: 6px;"></i> GST-Registered Official Invoices:</strong>
                            Clearly stating separate charges for packing material, labor handling, vehicle freight, and transit insurance.
                        </div>
                        <div style="background: #f8fafc; border-left: 3px solid #1e3a8a; padding: 14px; border-radius: 6px; font-size: 14px; color: #334155;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 4px;"><i class="fa-solid fa-receipt" style="color: #1e3a8a; margin-right: 6px;"></i> IBA-Approved Consignment Bilty:</strong>
                            Stamped with our registered logistics code, vehicle numbers, and origin-to-destination route verification.
                        </div>
                        <div style="background: #f8fafc; border-left: 3px solid #2563eb; padding: 14px; border-radius: 6px; font-size: 14px; color: #334155;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 4px;"><i class="fa-solid fa-list-check" style="color: #2563eb; margin-right: 6px;"></i> Itemized Serial Inventory Form:</strong>
                            Signed by both the consignor and delivery supervisor, detailing box counts and appliance conditions.
                        </div>
                    </div>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
                        <strong>Practical Moving Recommendations for Chandankiyari:</strong> Because heavy coal and steel transport vehicles travel heavily along the Chas-Purulia highway, we advise scheduling residential dispatch during early morning hours (6:00 AM to 8:30 AM). Keep identity cards, property papers, bank passbooks, jewelry, and personal medications in your personal travel bags.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
                        <strong>Colliery Quarters Surrender Assistance:</strong> When vacating colliery or railway quarters in Amlabad and Bhojudih, our team assists with quick disassembly, wall patch cleanup, and swift quarter clearance to ensure you receive your security deposit release and quarter clearance certificate without delay.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
                        <strong>Seamless Interstate Border Coordination:</strong> Crossing into Purulia or Bankura in West Bengal requires commercial border compliance and tax documentation. Our operations team prepares all necessary e-way bills and consignment declarations beforehand, guaranteeing smooth transit without roadside border delays.
                    </p>

                    <!-- Local Google Map Embed -->
                    <div style="margin: 35px 0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;">
                        <iframe src="https://maps.google.com/maps?q=Chandankiyari%2C%20Jharkhand&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Map Location of Chandankiyari Jharkhand"></iframe>
                    </div>
                </article>

                <!-- Section 8: Frequently Asked Questions (FAQ) -->
                <article class="article-block" style="margin-bottom: 40px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 24px; font-family: 'Outfit', sans-serif;">
                        Frequently Asked Questions - Packers & Movers in Chandankiyari
                    </h2>
                    
                    <div class="faq-accordion" style="display: flex; flex-direction: column; gap: 16px;">
                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> How does Shree Ashirwad Packers serve Chandankiyari and nearby colliery belts?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Chandankiyari is strategically positioned between Bokaro Steel City, Chas, Dhanbad, and Purulia. Shree Ashirwad Packers and Movers operates dedicated vehicles and experienced packaging crews across Chandankiyari Bazar, Amlabad Colliery, Bhojudih, and surrounding rural zones, delivering door-to-door packing and guaranteed on-time transit.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> What are the estimated rates for shifting from Chandankiyari to Bokaro Steel City or Chas?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Moving from Chandankiyari to Chas or Bokaro Steel City (approx. 20-30 km) typically costs between ₹4,500 and ₹7,500 for a 1 BHK, and ₹7,000 to ₹11,000 for a 2/3 BHK home, including complete packing, vehicle transport, loading, and unloading.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> Do you offer household shifting from Chandankiyari to West Bengal locations like Purulia or Kolkata?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Yes, Chandankiyari shares a direct border with Purulia district. We manage daily trips across the Jharkhand-Bengal border to Purulia, Asansol, Durgapur, and Kolkata with all interstate documentation and transit tax clearances handled.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> Can SAIL, CCL, and BCCL employees claim transfer allowance with your moving bills?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Yes. Shree Ashirwad Packers and Movers is an IBA-approved and ISO-certified logistics company. We provide 100% genuine GST-compliant invoices, consignment bilty, transit insurance certificates, and itemized inventory lists accepted by SAIL Bokaro, BCCL Dhanbad, and government departments.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> How do you protect household goods against colliery dust and rough roads?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                We apply 5-layer heavy-duty packing, including virgin air bubble wrap, thick corrugated sheets, edge protectors, and multiple passes of dust-proof stretch film. Furthermore, all goods travel inside sealed, weather-tight metal container trucks.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> Do you transport cars and two-wheelers from Chandankiyari?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Yes, we operate specialized enclosed hydraulics car carriers and dedicated two-wheeler transport bays, providing scratch-free, insured transport from Chandankiyari to all major Indian cities.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> How far in advance should I book my relocation in Chandankiyari?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                We recommend booking 2 to 3 days ahead of your scheduled moving date to secure your desired slot and truck size. However, for urgent transfers, our rapid response team can facilitate same-day packing and loading.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> How can I book a free home survey in Chandankiyari?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                You can call our dedicated 24x7 helpline at +91 8409531615 or WhatsApp us at +91 9308888746. Our Bokaro operations coordinator will schedule a free physical inspection or quick video survey to provide a transparent, fixed-price estimate.
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
                            Moving in or from Chandankiyari? Speak directly with our Bokaro relocation coordinator today.
                        </p>
                        <div style="display: flex; flex-direction: column; gap: 12px; margin-bottom: 20px;">
                            <a href="tel:8409531615" style="display: flex; align-items: center; justify-content: center; gap: 10px; background: #ef4444; color: #ffffff; text-decoration: none; padding: 14px; border-radius: 8px; font-weight: 700; font-size: 15px; box-shadow: 0 6px 16px rgba(239, 68, 68, 0.25);">
                                <i class="fa-solid fa-phone"></i> +91 8409531615
                            </a>
                            <a href="tel:9308888746" style="display: flex; align-items: center; justify-content: center; gap: 10px; background: #1e3a8a; color: #ffffff; text-decoration: none; padding: 14px; border-radius: 8px; font-weight: 700; font-size: 15px;">
                                <i class="fa-solid fa-phone"></i> +91 9308888746
                            </a>
                            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Chandankiyari" target="_blank" style="display: flex; align-items: center; justify-content: center; gap: 10px; background: #22c55e; color: #ffffff; text-decoration: none; padding: 14px; border-radius: 8px; font-weight: 700; font-size: 15px;">
                                <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
                            </a>
                        </div>
                        <div style="border-top: 1px solid #e2e8f0; padding-top: 16px; font-size: 13px; color: #64748b; line-height: 1.6;">
                            <p style="margin: 0 0 6px;"><i class="fa-solid fa-clock" style="color: #2563eb; margin-right: 6px;"></i> Operations: 24 Hours / 7 Days</p>
                            <p style="margin: 0;"><i class="fa-solid fa-file-shield" style="color: #16a34a; margin-right: 6px;"></i> 100% SAIL/BCCL Claim Bill Guarantee</p>
                        </div>
                    </div>

                    <!-- Why Choose Us Box -->
                    <div class="sidebar-card" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 26px; box-shadow: 0 4px 14px rgba(0,0,0,0.05);">
                        <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 16px;">
                            Why Choose Shree Ashirwad?
                        </h4>
                        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 12px; font-size: 14px; color: #334155;">
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>SAIL & Colliery Transfer Specialists</span></li>
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>IBA Approved Consignment Invoices</span></li>
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>Trained In-House Packaging Specialists</span></li>
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>5-Layer Dust-Proof Packaging</span></li>
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>Live Satellite GPS Vehicle Tracking</span></li>
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
                            <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-chas" style="color: #2563eb; text-decoration: none; font-weight: 500;"><i class="fa-solid fa-arrow-right" style="font-size: 11px; margin-right: 6px;"></i> Chas Commercial Hub</a></li>
                            <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dhanbad" style="color: #2563eb; text-decoration: none; font-weight: 500;"><i class="fa-solid fa-arrow-right" style="font-size: 11px; margin-right: 6px;"></i> Dhanbad Coal City</a></li>
                            <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-chandrapura" style="color: #2563eb; text-decoration: none; font-weight: 500;"><i class="fa-solid fa-arrow-right" style="font-size: 11px; margin-right: 6px;"></i> Chandrapura Thermal Belt</a></li>
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
            Planning Your Move in Chandankiyari?
        </h2>
        <p style="font-size: 16.5px; line-height: 1.7; color: #cbd5e1; margin-bottom: 30px;">
            Reach out to Shree Ashirwad Packers and Movers today for a free pre-move consultation and transparent rate quote. Trust Jharkhand’s premier moving team for an effortless, on-time relocation.
        </p>
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px;">
            <a href="tel:8409531615" style="display: inline-flex; align-items: center; gap: 10px; background: #ef4444; color: #ffffff; padding: 14px 32px; border-radius: 8px; font-weight: 700; text-decoration: none; font-size: 16px; box-shadow: 0 8px 20px rgba(239, 68, 68, 0.35);">
                <i class="fa-solid fa-phone-volume"></i> Call +91 8409531615
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20please%20send%20me%20a%20quote%20for%20Chandankiyari" target="_blank" style="display: inline-flex; align-items: center; gap: 10px; background: #22c55e; color: #ffffff; padding: 14px 32px; border-radius: 8px; font-weight: 700; text-decoration: none; font-size: 16px; box-shadow: 0 8px 20px rgba(34, 197, 94, 0.35);">
                <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
            </a>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
