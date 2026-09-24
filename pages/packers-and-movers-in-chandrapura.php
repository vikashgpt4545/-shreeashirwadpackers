<?php
/**
 * Packers and Movers in Chandrapura - Shree Ashirwad Packers and Movers
 * Website: https://www.shreeashirwadpackers.com
 * Contact: +91 8409531615 / +91 9308888746
 * Office: Serving Chandrapura, DVC Township, Bokaro & Bermo, Jharkhand
 */

require_once __DIR__ . '/includes/config.php';

// Page-specific variables
$page_title = "Packers and Movers in Chandrapura - 8409531615 | Shree Ashirwad Packers";
$page_description = "Leading packers and movers in Chandrapura (Bokaro). Specialized DVC employee transfers, safe household shifting, vehicle transport, IBA approved bills. Call 8409531615.";
$page_keywords = "packers and movers in chandrapura, best movers and packers chandrapura, dvc transfer packing chandrapura, household shifting chandrapura bokaro, car transport chandrapura, bike courier chandrapura, shree ashirwad packers chandrapura";
$canonical_url = SITE_BASE_URL . "/packers-and-movers-in-chandrapura";
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
      "name": "Shree Ashirwad Packers and Movers - Chandrapura",
      "image": "<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg",
      "@id": "<?php echo $canonical_url; ?>#movingcompany",
      "url": "<?php echo $canonical_url; ?>",
      "telephone": "+918409531615",
      "keywords": "packers and movers in chandrapura, packers and movers chandrapura, best packers and movers in chandrapura, household shifting chandrapura, car transport chandrapura, bike parcel chandrapura, iba approved packers chandrapura, local shifting chandrapura",
      "priceRange": "INR 3500 - 52000",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Station Road, Near DVC Central Colony",
        "addressLocality": "Chandrapura, Bokaro",
        "addressRegion": "Jharkhand",
        "postalCode": "828403",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 23.7547,
        "longitude": 86.1189
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
          "name": "Chandrapura",
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
          "name": "Why is Shree Ashirwad the top choice for DVC and railway employees in Chandrapura?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Chandrapura is home to the landmark DVC Chandrapura Thermal Power Station (CTPS) and a major railway junction. Shree Ashirwad Packers and Movers specializes in public sector transfers. We provide IBA-approved GST invoices, consignment bilty, transit insurance certificates, and itemized inventories that fulfill 100% of DVC and Indian Railways composite transfer reimbursement criteria."
          }
        },
        {
          "@type": "Question",
          "name": "What are the estimated charges for household shifting from Chandrapura?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Local moves within DVC colonies or to Bokaro Steel City / Bermo (approx. 15-20 km) start from ₹4,000 for a 1 BHK and ₹6,500 to ₹10,000 for a 2/3 BHK. Intercity shifts to Dhanbad, Ranchi, Durgapur, or Kolkata range between ₹11,000 and ₹26,000 based on cargo volume."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide car and two-wheeler transport from Chandrapura?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we operate specialized enclosed hydraulics car carriers and padded bike transport bays for secure vehicle shifting from Chandrapura to all major cities in India, complete with vehicle inspection sheets and transit insurance."
          }
        },
        {
          "@type": "Question",
          "name": "How do you protect household furniture from thermal plant fly ash and coal dust in Chandrapura?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We implement a strict 5-layer dust-proof packaging protocol. This includes virgin bubble wrap, heavy corrugated paper sheets, edge protectors, and multiple tight wraps of LDPE stretch cling film, transported in fully sealed metal container trucks."
          }
        },
        {
          "@type": "Question",
          "name": "Can you handle quick quarter vacation in DVC township colonies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, our Chandrapura team specializes in fast quarter vacating across DVC West Colony, Central Colony, and New Colony. We manage complete dismantling, room-by-room packing, loading, and quarter debris cleanup within 24 to 48 hours to meet estate office handover deadlines."
          }
        },
        {
          "@type": "Question",
          "name": "How do you manage gate passes and CISF security clearances in Chandrapura?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our vehicle drivers and moving crews carry verified government photo identification, police-verified credentials, and vehicle registration documents, ensuring smooth CISF security verification and fast gate entry across DVC township gates."
          }
        },
        {
          "@type": "Question",
          "name": "Is transit insurance mandatory, and how does it protect my belongings?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Transit insurance is highly recommended for all moves. It provides comprehensive financial coverage against road accidents, fire, overturning, or natural calamities with fast, seamless claim processing."
          }
        },
        {
          "@type": "Question",
          "name": "How can I book an in-person or video survey in Chandrapura?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Simply call our 24x7 booking helpline at +91 8409531615 or message us via WhatsApp at +91 9308888746. Our Bokaro operations manager will arrange a free, no-obligation doorstep survey or virtual assessment at your convenience."
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
                    <i class="fa-solid fa-bolt-lightning"></i> DVC Township & Railway Transfer Specialists
                </div>
                <h1 style="font-size: clamp(32px, 4.5vw, 48px); font-weight: 800; line-height: 1.2; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                    Trusted Packers and Movers in <span style="color: #60a5fa;">Chandrapura</span>
                </h1>
                <p style="font-size: 17px; line-height: 1.65; color: #e2e8f0; margin-bottom: 28px;">
                    Relocating home, office, or vehicle in Chandrapura, Bokaro? Shree Ashirwad Packers and Movers provides top-tier, zero-damage shifting services across the DVC township, railway colonies, and industrial corridors. With multi-layered dust-proof packaging, IBA-approved bills for DVC and railway transfer claims, and sealed container logistics, your move is 100% stress-free.
                </p>
                <div class="hero-cta-group" style="display: flex; flex-wrap: wrap; gap: 15px; margin-bottom: 30px;">
                    <a href="tel:8409531615" class="btn-primary" style="display: inline-flex; align-items: center; gap: 10px; background: #ef4444; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; box-shadow: 0 10px 20px rgba(239, 68, 68, 0.3); transition: all 0.3s ease;">
                        <i class="fa-solid fa-phone-volume"></i> Call 8409531615
                    </a>
                    <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20moving%20in%20Chandrapura" target="_blank" class="btn-whatsapp" style="display: inline-flex; align-items: center; gap: 10px; background: #22c55e; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; box-shadow: 0 10px 20px rgba(34, 197, 94, 0.3); transition: all 0.3s ease;">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp Quote
                    </a>
                </div>
                <div class="hero-features" style="display: flex; flex-wrap: wrap; gap: 20px; font-size: 14px; color: #cbd5e1;">
                    <span><i class="fa-solid fa-check-circle" style="color: #22c55e; margin-right: 6px;"></i> DVC Approved Bills</span>
                    <span><i class="fa-solid fa-check-circle" style="color: #22c55e; margin-right: 6px;"></i> Dust-Proof Packing</span>
                    <span><i class="fa-solid fa-check-circle" style="color: #22c55e; margin-right: 6px;"></i> All-Risk Insurance</span>
                </div>
            </div>
            <div class="hero-media" style="flex: 1 1 420px; max-width: 480px;">
                <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 16px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.4); border: 3px solid rgba(255,255,255,0.15);">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Packers and Movers in Chandrapura - Household packing by Shree Ashirwad Packers" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                    <div class="media-overlay-badge" style="position: absolute; bottom: 20px; left: 20px; right: 20px; background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(8px); padding: 14px 18px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2);">
                        <p style="margin: 0; font-size: 13px; color: #f1f5f9; font-weight: 500;">
                            <i class="fa-solid fa-boxes-stacked" style="color: #60a5fa; margin-right: 6px;"></i> Premium bubble wrap & corrugated cartons for Chandrapura DVC families.
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
            <li style="color: #1e3a8a; font-weight: 600;" aria-current="page">Chandrapura</li>
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
                        Chandrapura’s Most Trusted Movers for DVC Quarters & Regional Shifts
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
                        Situated gracefully along the banks of the Damodar River in Bokaro district, <strong>Chandrapura</strong> represents one of India’s most renowned power-generation hubs. Dominated by the massive <strong>Chandrapura Thermal Power Station (CTPS)</strong> under the Damodar Valley Corporation (DVC), the township features planned residential colonies, prestigious academic institutions like Kendriya Vidyalaya and De Nobili School, and a vital railway junction (CRP) serving as an interchange for coal trains and passenger routes linking Dhanbad, Bokaro Steel City, Ranchi, and Barkakana.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
                        Relocations in Chandrapura present distinctive characteristics. Many moves involve DVC engineers, technical supervisors, CISF security personnel, and Indian Railways employees who receive transfer directives requiring quick quarter handover, rigorous inventory documentation for composite transfer grant claims, and adherence to CISF gate clearance protocols. In addition, the presence of coal handling facilities and thermal power operations requires high-density dust-resistant packaging that shields home upholstery, mattresses, and delicate electronics from fine airborne particles.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 25px;">
                        <strong>Shree Ashirwad Packers and Movers</strong> has established an impeccable track record across Chandrapura. With dedicated closed-body logistics trucks, trained packing professionals, and complete IBA documentation compliance, we manage your move seamlessly. From small flats in Dugda and Tarmi to expansive bungalows in DVC Central and West Colonies, we deliver end-to-end relocation with zero breakage and total peace of mind.
                    </p>

                    <!-- Verified Image Embed 1 -->
                    <div class="content-media-embed" style="margin: 30px 0;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; max-width: 420px; margin: 0 auto; border-radius: 14px; overflow: hidden; box-shadow: 0 12px 28px rgba(0,0,0,0.12);">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Household packaging materials and bubble wrap used in Chandrapura by Shree Ashirwad Packers" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-box-open" style="color: #60a5fa; margin-right: 8px;"></i> Premium multi-layer carton packing protecting home goods across Chandrapura.</p>
                            </div>
                        </div>
                    </div>

                    <div class="highlight-quote-box" style="background: #eff6ff; border-left: 4px solid #2563eb; padding: 20px 24px; border-radius: 0 8px 8px 0; margin-bottom: 30px;">
                        <p style="margin: 0; font-size: 15px; font-style: italic; color: #1e3a8a; line-height: 1.7;">
                            "DVC township transfers require authentic paperwork, strict estate surrender schedules, and heavy-duty dust protection. Having managed hundreds of relocations for DVC and railway personnel in Chandrapura, Shree Ashirwad Packers guarantees complete reliability."
                        </p>
                    </div>
                </article>

                <!-- Section 2: Comprehensive Shifting Solutions -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 24px; font-family: 'Outfit', sans-serif;">
                        Full-Spectrum Relocation Services in Chandrapura
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 24px;">
                        Whether shifting within DVC colonies, relocating across the Damodar basin to Bokaro Steel City or Bermo, or moving interstate to Kolkata, Durgapur, or Delhi NCR, our customized services cover every moving need:
                    </p>

                    <div class="services-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px; margin-bottom: 35px;">
                        <div class="service-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; transition: all 0.3s ease;">
                            <div class="service-icon" style="width: 50px; height: 50px; background: #dbeafe; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #1e40af; font-size: 22px; margin-bottom: 16px;">
                                <i class="fa-solid fa-house-chimney"></i>
                            </div>
                            <h3 style="font-size: 19px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Household Shifting</h3>
                            <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                Complete home packing including wooden dining tables, sofa sets, display units, glassware, kitchen appliances, and bedroom sets with room-by-room serialized labeling.
                            </p>
                        </div>

                        <div class="service-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; transition: all 0.3s ease;">
                            <div class="service-icon" style="width: 50px; height: 50px; background: #fee2e2; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #b91c1c; font-size: 22px; margin-bottom: 16px;">
                                <i class="fa-solid fa-bolt"></i>
                            </div>
                            <h3 style="font-size: 19px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">DVC Transfer Package</h3>
                            <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                Tailored for DVC engineers and technicians. Includes fast packing, furniture disassembly, quarters handover support, and documentation compliant with transfer grant rules.
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
                                Multi-deck enclosed car carrier transport connecting Chandrapura to Kolkata, Delhi NCR, Pune, and Bengaluru with complete condition inspection sheets.
                            </p>
                        </div>
                    </div>

                    <!-- Verified Image Embed 2 -->
                    <div class="content-media-embed" style="margin: 35px 0;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; max-width: 420px; margin: 0 auto; border-radius: 14px; overflow: hidden; box-shadow: 0 12px 28px rgba(0,0,0,0.12);">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Packers and movers delivery truck operating in Chandrapura by Shree Ashirwad Packers" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 20px; color: #ffffff;">
                                <p style="margin: 0; font-size: 14px; font-weight: 600;"><i class="fa-solid fa-truck-fast" style="color: #60a5fa; margin-right: 8px;"></i> Modern enclosed container trucks ensuring dust-free relocations across the Bokaro power corridor.</p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Section 3: High-Grade Packaging Matrix -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Dust-Proof 5-Layer Packaging for Thermal Power Belt Conditions
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
                        The presence of thermal power plant fly ash and coal handling rail lines in Chandrapura means that ordinary packaging allows dust penetration, damaging delicate electronic circuits and soiling expensive furniture. To prevent this, Shree Ashirwad Packers enforces our signature <strong>5-Stage Shielding Matrix</strong>:
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
                        Estimated Shifting Costs in Chandrapura - Clear & Transparent
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 22px;">
                        We believe that fair pricing builds long-term customer trust. Below is our comprehensive rate schedule for moves originating from Chandrapura to regional destinations in Bokaro/Dhanbad and across national highways:
                    </p>

                    <h3 style="font-size: 20px; font-weight: 700; color: #1e3a8a; margin-bottom: 14px;">
                        Table 1: Local & Regional Moving Charges from Chandrapura
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
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">1 BHK DVC Colony / Local Move</td>
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
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chandrapura to Bokaro Steel City</td>
                                    <td style="padding: 14px 16px; color: #475569;">20 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹3,000 - ₹4,200</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹3,500 - ₹4,800</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹6,500 - ₹9,000</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chandrapura to Bermo / Phusro</td>
                                    <td style="padding: 14px 16px; color: #475569;">16 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹2,800 - ₹4,000</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹3,200 - ₹4,500</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹6,000 - ₹8,500</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chandrapura to Dhanbad Coal City</td>
                                    <td style="padding: 14px 16px; color: #475569;">45 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹3,800 - ₹5,200</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹5,500 - ₹7,500</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹9,300 - ₹12,700</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chandrapura to Ranchi</td>
                                    <td style="padding: 14px 16px; color: #475569;">125 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹4,500 - ₹6,500</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹9,500 - ₹13,000</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹14,000 - ₹19,500</td>
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
                        Table 2: DVC Plant Network & Interstate Shifting from Chandrapura
                    </h3>
                    <div class="table-responsive" style="overflow-x: auto; margin-bottom: 35px; border-radius: 10px; border: 1px solid #e2e8f0;">
                        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14.5px;">
                            <thead>
                                <tr style="background: #0f172a; color: #ffffff;">
                                    <th style="padding: 14px 16px; font-weight: 600;">Destination City / Hub</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">Distance</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">Transit Duration</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">Household (1-2 BHK)</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">Car Shifting</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chandrapura to Bokaro Thermal (BTPS)</td>
                                    <td style="padding: 14px 16px; color: #475569;">30 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">Same Day</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #2563eb;">₹7,500 - ₹11,000</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹4,000 - ₹6,000</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chandrapura to Maithon / Panchet (DVC)</td>
                                    <td style="padding: 14px 16px; color: #475569;">80 - 95 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">1 Day</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #2563eb;">₹12,000 - ₹17,500</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹6,000 - ₹8,500</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chandrapura to Durgapur / Mejia (DVC)</td>
                                    <td style="padding: 14px 16px; color: #475569;">145 - 170 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">1 - 2 Days</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #2563eb;">₹15,500 - ₹22,000</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹7,500 - ₹10,500</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chandrapura to Kolkata (DVC HQ)</td>
                                    <td style="padding: 14px 16px; color: #475569;">310 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">2 Days</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #2563eb;">₹20,000 - ₹28,500</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹10,000 - ₹14,000</td>
                                </tr>
                                <tr style="background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chandrapura to Delhi NCR / Bengaluru</td>
                                    <td style="padding: 14px 16px; color: #475569;">1250 - 1750 km</td>
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
                            <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transport carrier loading service in Chandrapura by Shree Ashirwad Packers" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 20px; color: #ffffff;">
                                <p style="margin: 0; font-size: 14px; font-weight: 600;"><i class="fa-solid fa-car-tunnel" style="color: #60a5fa; margin-right: 8px;"></i> Hydraulic closed-body car carriers providing scratch-free automobile transport.</p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Section 5: Step-by-Step Moving Process -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Our 6-Step Operational Methodology in Chandrapura
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 25px;">
                        Professional moving requires seamless logistical discipline. We execute every relocation in Chandrapura through an established 6-step operational blueprint:
                    </p>

                    <div class="timeline-steps" style="display: flex; flex-direction: column; gap: 20px;">
                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">1</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Free Pre-Move Consultation & Estimate</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    Our Bokaro field coordinator visits your residence in Chandrapura or reviews goods through video call, calculating packaging supplies, truck volume, and labor to provide a binding quote.
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
                                    Vehicles are tracked via live GPS. We manage transit milestones smoothly across Bokaro and Dhanbad highways, keeping customers informed of highway progress and arrival ETAs.
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
                        For families renovating their premises, DVC engineers transitioning between plant postings, or commercial traders needing secure buffer storage, we provide clean, pest-controlled, and CCTV-guarded warehousing space. Your possessions remain elevated on moisture-resistant pallets, shielded from industrial dust and humidity.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 25px;">
                        Additionally, every consignment is supported by our comprehensive <strong>All-Risk Transit Insurance</strong> policy. Underwritten by India’s top general insurers, this policy covers accidents, vehicle overturns, fire, and flood, ensuring complete peace of mind and rapid claims settlement.
                    </p>

                    <!-- Verified Image Embed 4 -->
                    <div class="content-media-embed" style="margin: 35px 0;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; max-width: 420px; margin: 0 auto; border-radius: 14px; overflow: hidden; box-shadow: 0 12px 28px rgba(0,0,0,0.12);">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Commercial and household goods storage warehouse serving Chandrapura by Shree Ashirwad Packers" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 20px; color: #ffffff;">
                                <p style="margin: 0; font-size: 14px; font-weight: 600;"><i class="fa-solid fa-warehouse" style="color: #60a5fa; margin-right: 8px;"></i> Modern, 24/7 guarded warehouse facility protecting goods for short and long-term storage.</p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Section 7: Key Neighborhoods & Rural Sectors in Chandrapura -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Areas & Localities We Cover Across Chandrapura
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 20px;">
                        We operate an extensive logistics network providing doorstep pickup and delivery across all colonies, market belts, and residential sectors in Chandrapura and nearby Bokaro zones:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 14px; margin-bottom: 25px;">
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> DVC Central Colony</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> DVC West Colony</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> DVC New Colony Quarters</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Chandrapura Main Bazar</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Station Road & CRP Junction</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Dugda Coal Washery Road</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Pipradih & Tarmi Sectors</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Damodar River Intake Road</div>
                    </div>
                    <p style="font-size: 15px; color: #64748b; line-height: 1.7;">
                        We also coordinate rapid daily transfers linking Chandrapura with Bokaro Steel City, Chas, Bermo, Phusro, Gomoh, Katras, Dhanbad, and Ranchi.
                    </p>
                </article>

                <!-- Section: DVC Quarters Handover & Transfer Claims Advisory -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        DVC Composite Transfer Claims & Quarter Clearance Assistance
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
                        Personnel from Damodar Valley Corporation (DVC), CISF, Indian Railways, and state civil administrative offices frequently undergo scheduled transfers between plants, divisions, and headquarters. Successfully claiming your Composite Transfer Grant (CTG) and personal baggage transportation reimbursement demands transparent, auditable paperwork. Shree Ashirwad Packers and Movers supplies a 100% compliant documentation packet:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 16px; margin: 0 0 25px;">
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-file-invoice" style="color: #2563eb; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #0f172a;">GST-Registered Final Corporate Invoice</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Explicitly detailing packing supplies, labor handling, freight charges, and insurance premiums with official company seal.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-receipt" style="color: #2563eb; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #0f172a;">IBA-Approved Consignment Note (Bilty)</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Documenting designated vehicle registration number, driver contact, and destination depot verification.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px;">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                                <i class="fa-solid fa-list-check" style="color: #2563eb; font-size: 18px;"></i>
                                <h4 style="margin: 0; font-size: 15px; font-weight: 700; color: #0f172a;">Serialized Inventory Slips</h4>
                            </div>
                            <p style="margin: 0; font-size: 13.5px; line-height: 1.6; color: #475569;">Detailed item counts signed by both consignor and field supervisor during packing and unloading.</p>
                        </div>
                    </div>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
                        <strong>CISF Township Gate Clearance Protocols:</strong> Moving trucks entering or exiting DVC township colonies in Chandrapura must undergo security verification at CISF checkpoints. Our operational staff prepares all driver identification, vehicle documentation, and resident gate passes in advance to ensure completely frictionless entry and exit.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
                        <strong>DVC Quarters Handover & Surrender Support:</strong> Vacating quarters in DVC Central, West, or New Colony requires compliance with DVC civil maintenance specifications. Our team assists with heavy fixture de-mounting, neat wall cleanup, and complete packaging debris removal so that your quarters clearance inspection and security deposit refund proceed without a hitch.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
                        <strong>Direct DVC Plant-to-Plant Corridors:</strong> We operate regular, dedicated moving runs linking Chandrapura Thermal Power Station with sister DVC installations, including Bokaro Thermal (BTPS), Koderma Thermal (KTPS), Maithon Hydel & Thermal, Panchet, Mejia Thermal (MTPS), Durgapur, and Kolkata DVC Headquarters. Your household goods travel safely in a single sealed container without risk of intermediate transit transshipment.
                    </p>

                    <!-- Local Google Map Embed -->
                    <div style="margin: 35px 0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58540.123456789!2d86.1189!3d23.7547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f6a5123456789%3A0x7d6a5d4e3c2b1a0!2sChandrapura%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Map Location of Chandrapura Bokaro"></iframe>
                    </div>
                </article>

                <!-- Section 8: Frequently Asked Questions (FAQ) -->
                <article class="article-block" style="margin-bottom: 40px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 24px; font-family: 'Outfit', sans-serif;">
                        Frequently Asked Questions - Packers & Movers in Chandrapura
                    </h2>
                    
                    <div class="faq-accordion" style="display: flex; flex-direction: column; gap: 16px;">
                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> Why is Shree Ashirwad the top choice for DVC and railway employees in Chandrapura?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Chandrapura is home to the landmark DVC Chandrapura Thermal Power Station (CTPS) and a major railway junction. Shree Ashirwad Packers and Movers specializes in public sector transfers. We provide IBA-approved GST invoices, consignment bilty, transit insurance certificates, and itemized inventories that fulfill 100% of DVC and Indian Railways composite transfer reimbursement criteria.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> What are the estimated charges for household shifting from Chandrapura?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Local moves within DVC colonies or to Bokaro Steel City / Bermo (approx. 15-20 km) start from ₹4,000 for a 1 BHK and ₹6,500 to ₹10,000 for a 2/3 BHK. Intercity shifts to Dhanbad, Ranchi, Durgapur, or Kolkata range between ₹11,000 and ₹26,000 based on cargo volume.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> Do you provide car and two-wheeler transport from Chandrapura?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Yes, we operate specialized enclosed hydraulics car carriers and padded bike transport bays for secure vehicle shifting from Chandrapura to all major cities in India, complete with vehicle inspection sheets and transit insurance.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> How do you protect household furniture from thermal plant fly ash and coal dust in Chandrapura?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                We implement a strict 5-layer dust-proof packaging protocol. This includes virgin bubble wrap, heavy corrugated paper sheets, edge protectors, and multiple tight wraps of LDPE stretch cling film, transported in fully sealed metal container trucks.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> Can you handle quick quarter vacation in DVC township colonies?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Yes, our Chandrapura team specializes in fast quarter vacating across DVC West Colony, Central Colony, and New Colony. We manage complete dismantling, room-by-room packing, loading, and quarter debris cleanup within 24 to 48 hours to meet estate office handover deadlines.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> How do you manage gate passes and CISF security clearances in Chandrapura?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Our vehicle drivers and moving crews carry verified government photo identification, police-verified credentials, and vehicle registration documents, ensuring smooth CISF security verification and fast gate entry across DVC township gates.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> Is transit insurance mandatory, and how does it protect my belongings?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Transit insurance is highly recommended for all moves. It provides comprehensive financial coverage against road accidents, fire, overturning, or natural calamities with fast, seamless claim processing.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> How can I book an in-person or video survey in Chandrapura?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Simply call our 24x7 booking helpline at +91 8409531615 or message us via WhatsApp at +91 9308888746. Our Bokaro operations manager will arrange a free, no-obligation doorstep survey or virtual assessment at your convenience.
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
                            Moving in or from Chandrapura? Speak directly with our senior Bokaro relocation coordinator today.
                        </p>
                        <div style="display: flex; flex-direction: column; gap: 12px; margin-bottom: 20px;">
                            <a href="tel:8409531615" style="display: flex; align-items: center; justify-content: center; gap: 10px; background: #ef4444; color: #ffffff; text-decoration: none; padding: 14px; border-radius: 8px; font-weight: 700; font-size: 15px; box-shadow: 0 6px 16px rgba(239, 68, 68, 0.25);">
                                <i class="fa-solid fa-phone"></i> +91 8409531615
                            </a>
                            <a href="tel:9308888746" style="display: flex; align-items: center; justify-content: center; gap: 10px; background: #1e3a8a; color: #ffffff; text-decoration: none; padding: 14px; border-radius: 8px; font-weight: 700; font-size: 15px;">
                                <i class="fa-solid fa-phone"></i> +91 9308888746
                            </a>
                            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Chandrapura" target="_blank" style="display: flex; align-items: center; justify-content: center; gap: 10px; background: #22c55e; color: #ffffff; text-decoration: none; padding: 14px; border-radius: 8px; font-weight: 700; font-size: 15px;">
                                <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
                            </a>
                        </div>
                        <div style="border-top: 1px solid #e2e8f0; padding-top: 16px; font-size: 13px; color: #64748b; line-height: 1.6;">
                            <p style="margin: 0 0 6px;"><i class="fa-solid fa-clock" style="color: #2563eb; margin-right: 6px;"></i> Operations: 24 Hours / 7 Days</p>
                            <p style="margin: 0;"><i class="fa-solid fa-shield-check" style="color: #16a34a; margin-right: 6px;"></i> 100% DVC Claim Bill Guarantee</p>
                        </div>
                    </div>

                    <!-- Why Choose Us Box -->
                    <div class="sidebar-card" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 26px; box-shadow: 0 4px 14px rgba(0,0,0,0.05);">
                        <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 16px;">
                            Why Choose Shree Ashirwad?
                        </h4>
                        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 12px; font-size: 14px; color: #334155;">
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>DVC & Railway Transfer Specialists</span></li>
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>IBA Approved Consignment Invoices</span></li>
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>Trained In-House Packaging Crew</span></li>
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>5-Layer Dust-Proof Packaging</span></li>
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
                            <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bermo" style="color: #2563eb; text-decoration: none; font-weight: 500;"><i class="fa-solid fa-arrow-right" style="font-size: 11px; margin-right: 6px;"></i> Bermo / Phusro Coalfield</a></li>
                            <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-chas" style="color: #2563eb; text-decoration: none; font-weight: 500;"><i class="fa-solid fa-arrow-right" style="font-size: 11px; margin-right: 6px;"></i> Chas Commercial Hub</a></li>
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
            Planning Your Move in Chandrapura?
        </h2>
        <p style="font-size: 16.5px; line-height: 1.7; color: #cbd5e1; margin-bottom: 30px;">
            Get in touch with Shree Ashirwad Packers and Movers today for a free pre-move consultation and transparent rate quote. Trust Jharkhand’s premier moving team for an effortless, on-time relocation.
        </p>
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px;">
            <a href="tel:8409531615" style="display: inline-flex; align-items: center; gap: 10px; background: #ef4444; color: #ffffff; padding: 14px 32px; border-radius: 8px; font-weight: 700; text-decoration: none; font-size: 16px; box-shadow: 0 8px 20px rgba(239, 68, 68, 0.35);">
                <i class="fa-solid fa-phone-volume"></i> Call +91 8409531615
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20please%20send%20me%20a%20quote%20for%20Chandrapura" target="_blank" style="display: inline-flex; align-items: center; gap: 10px; background: #22c55e; color: #ffffff; padding: 14px 32px; border-radius: 8px; font-weight: 700; text-decoration: none; font-size: 16px; box-shadow: 0 8px 20px rgba(34, 197, 94, 0.35);">
                <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
            </a>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
