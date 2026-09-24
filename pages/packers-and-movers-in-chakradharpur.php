<?php
/**
 * Packers and Movers in Chakradharpur - Shree Ashirwad Packers and Movers
 * Website: https://www.shreeashirwadpackers.com
 * Contact: +91 8409531615 / +91 9308888746
 * Office: Serving Chakradharpur Railway Division, Chaibasa & West Singhbhum, Jharkhand
 */

require_once __DIR__ . '/includes/config.php';

// Page-specific variables
$page_title = "Packers and Movers in Chakradharpur - 8409531615 | Shree Ashirwad Packers";
$page_description = "Top packers and movers in Chakradharpur (West Singhbhum). Specialized railway employee transfers, household shifting, car & bike transport, IBA approved bills. Call 8409531615.";
$page_keywords = "packers and movers in chakradharpur, best movers and packers chakradharpur, railway employee transfer packing chakradharpur, household shifting chakradharpur, car transport chakradharpur, bike shifting chakradharpur, shree ashirwad packers chakradharpur";
$canonical_url = SITE_BASE_URL . "/packers-and-movers-in-chakradharpur";
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
      "name": "Shree Ashirwad Packers and Movers - Chakradharpur",
      "image": "<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg",
      "@id": "<?php echo $canonical_url; ?>#movingcompany",
      "url": "<?php echo $canonical_url; ?>",
      "telephone": "+918409531615",
      "keywords": "packers and movers in chakradharpur, packers and movers chakradharpur, best packers and movers in chakradharpur, household shifting chakradharpur, car transport chakradharpur, bike parcel chakradharpur, iba approved packers chakradharpur, local shifting chakradharpur",
      "priceRange": "INR 3500 - 52000",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Station Road, Near Railway Division HQ",
        "addressLocality": "Chakradharpur",
        "addressRegion": "Jharkhand",
        "postalCode": "833102",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 22.7011,
        "longitude": 85.6268
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
          "name": "Chakradharpur",
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
          "name": "Why is Shree Ashirwad the preferred packer and mover for railway employees in Chakradharpur?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Chakradharpur is a premier Indian Railways divisional headquarters. Shree Ashirwad Packers and Movers specializes in South Eastern Railway (SER) staff transfers. We provide IBA-approved invoices, complete consignment notes (bilty), transit insurance, and itemized inventories that fulfill 100% of railway composite transfer grant (CTG) claim criteria."
          }
        },
        {
          "@type": "Question",
          "name": "What are the estimated charges for household shifting from Chakradharpur?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Local moves within Chakradharpur or to nearby Chaibasa (25 km) start from ₹4,000 for a 1 BHK and ₹7,000 to ₹10,500 for a 2/3 BHK. Intercity shifts to Jamshedpur, Ranchi, Kharagpur, or Rourkela range between ₹12,000 and ₹26,000 depending upon cargo volume."
          }
        },
        {
          "@type": "Question",
          "name": "Do you handle bike and car transportation from Chakradharpur?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we provide enclosed hydraulic car carriers and dedicated two-wheeler stands for safe transport from Chakradharpur to Kolkata, Delhi, Bengaluru, Hyderabad, Patna, and all pan-India locations with door-to-door pickup and full transit insurance."
          }
        },
        {
          "@type": "Question",
          "name": "How do you protect household furniture and electronics during monsoon in Chakradharpur?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Sanjay river valley experiences heavy monsoon downpours. We protect furniture and appliances using multi-layer virgin bubble wrap, heavy corrugated paper sheets, and water-impermeable stretch cling film, transported strictly in sealed, covered container trucks."
          }
        },
        {
          "@type": "Question",
          "name": "Can you pack and vacate railway quarters on short transfer notices?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we maintain standby packing crews and rapid dispatch vehicles in Chakradharpur. We can execute complete packing, furniture dismantling, loading, and quarter clearance within 24 to 48 hours to meet strict railway quarter surrender dates."
          }
        },
        {
          "@type": "Question",
          "name": "Are there any hidden costs or surprise tolls added at delivery?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "None whatsoever. Our quotes are fully comprehensive, including high-grade packing materials, professional labor for loading and unloading, transit toll taxes, driver charges, and unpacking services. Everything is documented upfront."
          }
        },
        {
          "@type": "Question",
          "name": "Is transit insurance provided for relocations from Chakradharpur?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we offer comprehensive All-Risk transit insurance through leading general insurance companies, safeguarding your valuable household electronics, furniture, and vehicles against accidental loss or road transit damage."
          }
        },
        {
          "@type": "Question",
          "name": "How do I book an in-person or video survey in Chakradharpur?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Simply call our dedicated customer hotline at +91 8409531615 or message us via WhatsApp at +91 9308888746. Our West Singhbhum operations manager will schedule a free, no-obligation pre-move assessment at your convenience."
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
                    <i class="fa-solid fa-train-subway"></i> South Eastern Railway Transfer Specialist
                </div>
                <h1 style="font-size: clamp(32px, 4.5vw, 48px); font-weight: 800; line-height: 1.2; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                    Reliable Packers and Movers in <span style="color: #60a5fa;">Chakradharpur</span>
                </h1>
                <p style="font-size: 17px; line-height: 1.65; color: #e2e8f0; margin-bottom: 28px;">
                    Relocating your home or official quarters in West Singhbhum’s premier railway division? Shree Ashirwad Packers and Movers delivers seamless, zero-damage household relocation, vehicle transport, and corporate moving solutions across Chakradharpur. With multi-layered protective packaging, IBA-approved billing for railway transfer claims, and sealed container logistics, your move is completely stress-free.
                </p>
                <div class="hero-cta-group" style="display: flex; flex-wrap: wrap; gap: 15px; margin-bottom: 30px;">
                    <a href="tel:8409531615" class="btn-primary" style="display: inline-flex; align-items: center; gap: 10px; background: #ef4444; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; box-shadow: 0 10px 20px rgba(239, 68, 68, 0.3); transition: all 0.3s ease;">
                        <i class="fa-solid fa-phone-volume"></i> Call 8409531615
                    </a>
                    <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20moving%20in%20Chakradharpur" target="_blank" class="btn-whatsapp" style="display: inline-flex; align-items: center; gap: 10px; background: #22c55e; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; box-shadow: 0 10px 20px rgba(34, 197, 94, 0.3); transition: all 0.3s ease;">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp Quote
                    </a>
                </div>
                <div class="hero-features" style="display: flex; flex-wrap: wrap; gap: 20px; font-size: 14px; color: #cbd5e1;">
                    <span><i class="fa-solid fa-check-circle" style="color: #22c55e; margin-right: 6px;"></i> IBA Approved Bills</span>
                    <span><i class="fa-solid fa-check-circle" style="color: #22c55e; margin-right: 6px;"></i> 100% Zero-Damage Promise</span>
                    <span><i class="fa-solid fa-check-circle" style="color: #22c55e; margin-right: 6px;"></i> All-Risk Transit Insurance</span>
                </div>
            </div>
            <div class="hero-media" style="flex: 1 1 420px; max-width: 480px;">
                <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 16px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.4); border: 3px solid rgba(255,255,255,0.15);">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Packers and Movers in Chakradharpur - Expert household packing by Shree Ashirwad Packers" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                    <div class="media-overlay-badge" style="position: absolute; bottom: 20px; left: 20px; right: 20px; background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(8px); padding: 14px 18px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.2);">
                        <p style="margin: 0; font-size: 13px; color: #f1f5f9; font-weight: 500;">
                            <i class="fa-solid fa-boxes-stacked" style="color: #60a5fa; margin-right: 6px;"></i> Heavy corrugated cartons & multi-layer bubble wrap for railway families.
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
            <li style="color: #1e3a8a; font-weight: 600;" aria-current="page">Chakradharpur</li>
        </ol>
    </div>
</nav>

<!-- Main Content Section -->
<main class="content-section" style="padding: 70px 0; background: #ffffff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <div class="row" style="display: flex; flex-wrap: wrap; gap: 40px;">
            <div class="main-column" style="flex: 1 1 760px;">
                
                <!-- Section 1: Overview & Railway Division Context -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Chakradharpur's Premier Moving Company for Homes & Railway Transfers
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
                        Nestled along the serene banks of the Sanjay River in West Singhbhum district, <strong>Chakradharpur</strong> stands as one of the most vital logistical and administrative hubs of Eastern India. Serving as the headquarters of the prestigious <strong>Chakradharpur Railway Division</strong> under the South Eastern Railway (SER) zone, this bustling township is home to thousands of railway officers, engineers, loco inspectors, administrative staff, healthcare workers, and educators. Its strategic location connecting Chaibasa (25 km), Jamshedpur (60 km), Rourkela (100 km), and Ranchi (130 km) makes it a dynamic focal point of continuous employee mobility.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
                        Relocating in Chakradharpur involves distinct dynamics. Railway families frequently receive transfer orders with predetermined joining windows, requiring swift quarter evacuation, rigorous inventory packaging, and official documentation conforming to the Indian Railways Composite Transfer Grant (CTG) requirements. In civil and private sectors, residents in areas like Potka, Bangalitola, Basti Road, and Asantalia often face narrow colony approaches that demand experienced driving and agile loading teams.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 25px;">
                        <strong>Shree Ashirwad Packers and Movers</strong> has established an unparalleled track record in Chakradharpur. With dedicated local vehicles, seasoned packing specialists, and comprehensive documentation compliance, we take complete ownership of your move. From small apartments and sprawling railway bungalows to local bank branches and business stores, we ensure every carton arrives safely and on schedule.
                    </p>

                    <!-- Verified Image Embed 1 -->
                    <div class="content-media-embed" style="margin: 30px auto; max-width: 420px; width: 100%;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; border-radius: 14px; overflow: hidden; box-shadow: 0 12px 28px rgba(0,0,0,0.12);">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Household packaging in Chakradharpur by Shree Ashirwad Packers" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 18px; color: #ffffff;">
                                <p style="margin: 0; font-size: 13.5px; font-weight: 600;"><i class="fa-solid fa-box" style="color: #60a5fa; margin-right: 8px;"></i> Multi-layer bubble wrap & heavy corrugated cartons for household shifting in Chakradharpur.</p>
                            </div>
                        </div>
                    </div>

                    <div class="highlight-quote-box" style="background: #eff6ff; border-left: 4px solid #2563eb; padding: 20px 24px; border-radius: 0 8px 8px 0; margin-bottom: 30px;">
                        <p style="margin: 0; font-size: 15px; font-style: italic; color: #1e3a8a; line-height: 1.7;">
                            "Railway transfers demand precision timing, reliable vehicles, and authentic IBA-approved documentation. Having conducted hundreds of successful relocations for South Eastern Railway personnel in Chakradharpur, Shree Ashirwad Packers guarantees complete transparency and zero transit headaches."
                        </p>
                    </div>
                </article>

                <!-- Section 2: Comprehensive Moving Solutions -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 24px; font-family: 'Outfit', sans-serif;">
                        Full-Spectrum Shifting Services in Chakradharpur
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 24px;">
                        Whether moving within the railway colonies or shifting across Indian states, our comprehensive service portfolio covers every facet of residential and commercial moving:
                    </p>

                    <div class="services-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px; margin-bottom: 35px;">
                        <div class="service-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; transition: all 0.3s ease;">
                            <div class="service-icon" style="width: 50px; height: 50px; background: #dbeafe; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #1e40af; font-size: 22px; margin-bottom: 16px;">
                                <i class="fa-solid fa-house-chimney"></i>
                            </div>
                            <h3 style="font-size: 19px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Household Goods Shifting</h3>
                            <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                Complete home packing including wooden dining tables, sofa sets, display units, glassware, kitchen appliances, and bedroom sets. Every item is packed room-by-room with serialized labeling.
                            </p>
                        </div>

                        <div class="service-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; transition: all 0.3s ease;">
                            <div class="service-icon" style="width: 50px; height: 50px; background: #fee2e2; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #b91c1c; font-size: 22px; margin-bottom: 16px;">
                                <i class="fa-solid fa-train"></i>
                            </div>
                            <h3 style="font-size: 19px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Railway Transfer Package</h3>
                            <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                Tailor-made for SER employees. Includes fast packing, furniture disassembly, quarters handover cleanup support, and verified documentation compliant with government allowance reimbursement rules.
                            </p>
                        </div>

                        <div class="service-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; transition: all 0.3s ease;">
                            <div class="service-icon" style="width: 50px; height: 50px; background: #fef3c7; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #b45309; font-size: 22px; margin-bottom: 16px;">
                                <i class="fa-solid fa-motorcycle"></i>
                            </div>
                            <h3 style="font-size: 19px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Two-Wheeler & Bike Transport</h3>
                            <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                Damage-free motorcycle and scooter transportation with bubble wrapping for fairings, mirrors, and fuel tanks. Shipped securely via specialized wheel-lock brackets inside covered trucks.
                            </p>
                        </div>

                        <div class="service-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 24px; transition: all 0.3s ease;">
                            <div class="service-icon" style="width: 50px; height: 50px; background: #dcfce7; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #15803d; font-size: 22px; margin-bottom: 16px;">
                                <i class="fa-solid fa-car"></i>
                            </div>
                            <h3 style="font-size: 19px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Car Carrier Services</h3>
                            <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                Multi-deck enclosed car carrier transport connecting Chakradharpur to Kolkata, Bhubaneswar, Delhi NCR, Pune, and Bengaluru with complete condition inspection sheets.
                            </p>
                        </div>
                    </div>

                    <!-- Verified Image Embed 2 -->
                    <div class="content-media-embed" style="margin: 35px 0;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; max-width: 420px; margin: 0 auto; border-radius: 14px; overflow: hidden; box-shadow: 0 12px 28px rgba(0,0,0,0.12);">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Packers and movers delivery truck operating in Chakradharpur by Shree Ashirwad Packers" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 20px; color: #ffffff;">
                                <p style="margin: 0; font-size: 14px; font-weight: 600;"><i class="fa-solid fa-truck-fast" style="color: #60a5fa; margin-right: 8px;"></i> Modern enclosed container trucks ensuring weather-safe relocations across West Singhbhum.</p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Section 3: Advanced Packaging Standards -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Industrial-Grade Multi-Layer Packing Protocol
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
                        The terrain between Chakradharpur, Chaibasa, and the surrounding Singhbhum plateau includes ghat sections, river crossings, and heavy commercial freight corridors. Simple cardboard boxing fails to withstand prolonged highway vibrations. At Shree Ashirwad Packers, we enforce a strict <strong>5-Stage Protection Matrix</strong>:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 15px; margin: 20px 0 30px;">
                        <div style="background: #f8fafc; border-top: 3px solid #2563eb; padding: 16px; border-radius: 6px;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 6px;"><i class="fa-solid fa-circle-check" style="color: #2563eb; margin-right: 6px;"></i> Heavy-Duty Air Bubble Wrap:</strong>
                            <span style="font-size: 14px; color: #475569;">Double-layered 100 GSM bubble rolls wrapped tightly around LED screens, audio systems, microwave ovens, and delicate decorative curios.</span>
                        </div>
                        <div style="background: #f8fafc; border-top: 3px solid #1e3a8a; padding: 16px; border-radius: 6px;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 6px;"><i class="fa-solid fa-circle-check" style="color: #1e3a8a; margin-right: 6px;"></i> Edge & Corner Protectors:</strong>
                            <span style="font-size: 14px; color: #475569;">Reinforced compressed fiber and foam edge angles placed on glass dining tables, wooden wardrobes, and study desks to absorb edge impacts.</span>
                        </div>
                        <div style="background: #f8fafc; border-top: 3px solid #2563eb; padding: 16px; border-radius: 6px;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 6px;"><i class="fa-solid fa-circle-check" style="color: #2563eb; margin-right: 6px;"></i> Corrugated Armor Sheeting:</strong>
                            <span style="font-size: 14px; color: #475569;">High-density 5-ply paper sheets cut and molded to protect upholstered sofa sets, mattresses, and armchairs against road scuffs.</span>
                        </div>
                        <div style="background: #f8fafc; border-top: 3px solid #1e3a8a; padding: 16px; border-radius: 6px;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 6px;"><i class="fa-solid fa-circle-check" style="color: #1e3a8a; margin-right: 6px;"></i> Moisture-Lock Cling Film:</strong>
                            <span style="font-size: 14px; color: #475569;">High-stretch transparent LDPE film providing a 100% moisture-proof and dust-tight seal around all boxed items and furniture sets.</span>
                        </div>
                        <div style="background: #f8fafc; border-top: 3px solid #2563eb; padding: 16px; border-radius: 6px;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 6px;"><i class="fa-solid fa-circle-check" style="color: #2563eb; margin-right: 6px;"></i> Custom Wooden Crating:</strong>
                            <span style="font-size: 14px; color: #475569;">Specially built wooden crates for grand pianos, temple mandirs, stone statues, and fragile high-value crystalware upon request.</span>
                        </div>
                    </div>
                </article>

                <!-- Section 4: Transparent Pricing Tables -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 16px; font-family: 'Outfit', sans-serif;">
                        Transparent Cost Calculator for Relocations from Chakradharpur
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 22px;">
                        We believe that honest moving starts with clear, upfront estimates. Here is our standardized rate structure for relocations within West Singhbhum and across major regional railway corridors:
                    </p>

                    <h3 style="font-size: 20px; font-weight: 700; color: #1e3a8a; margin-bottom: 14px;">
                        Table 1: Local & Regional Shifting Charges from Chakradharpur
                    </h3>
                    <div class="table-responsive" style="overflow-x: auto; margin-bottom: 35px; border-radius: 10px; border: 1px solid #e2e8f0;">
                        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14.5px;">
                            <thead>
                                <tr style="background: #1e3a8a; color: #ffffff;">
                                    <th style="padding: 14px 16px; font-weight: 600;">Relocation Type</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">Distance</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">Packing & Handling</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">Transportation Cost</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">Total Estimate</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">1 BHK Railway Colony / Local Move</td>
                                    <td style="padding: 14px 16px; color: #475569;">Up to 10 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹2,000 - ₹2,800</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹2,000 - ₹2,700</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹4,000 - ₹5,500</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">2 BHK Local Shifting</td>
                                    <td style="padding: 14px 16px; color: #475569;">Up to 15 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹3,200 - ₹4,500</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹3,300 - ₹4,500</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹6,500 - ₹9,000</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">3 BHK / Bungalow Shifting</td>
                                    <td style="padding: 14px 16px; color: #475569;">Up to 20 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹4,800 - ₹6,500</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹4,700 - ₹6,000</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹9,500 - ₹12,500</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chakradharpur to Chaibasa (2 BHK)</td>
                                    <td style="padding: 14px 16px; color: #475569;">25 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹3,500 - ₹4,800</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹4,500 - ₹6,200</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹8,000 - ₹11,000</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chakradharpur to Jamshedpur (Tatanagar)</td>
                                    <td style="padding: 14px 16px; color: #475569;">62 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹4,200 - ₹6,000</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹7,800 - ₹10,500</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹12,000 - ₹16,500</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chakradharpur to Ranchi</td>
                                    <td style="padding: 14px 16px; color: #475569;">130 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹4,800 - ₹7,000</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹10,500 - ₹14,500</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹15,300 - ₹21,500</td>
                                </tr>
                                <tr style="background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Bike Shifting (Within 150 km)</td>
                                    <td style="padding: 14px 16px; color: #475569;">Regional</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹800 - ₹1,200</td>
                                    <td style="padding: 14px 16px; color: #475569;">₹2,000 - ₹2,800</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹2,800 - ₹4,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h3 style="font-size: 20px; font-weight: 700; color: #1e3a8a; margin-bottom: 14px;">
                        Table 2: Major Railway Corridors & Interstate Shifting from Chakradharpur
                    </h3>
                    <div class="table-responsive" style="overflow-x: auto; margin-bottom: 35px; border-radius: 10px; border: 1px solid #e2e8f0;">
                        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14.5px;">
                            <thead>
                                <tr style="background: #0f172a; color: #ffffff;">
                                    <th style="padding: 14px 16px; font-weight: 600;">Destination Hub</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">Distance</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">Transit Time</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">Household (1-2 BHK)</th>
                                    <th style="padding: 14px 16px; font-weight: 600;">Car Relocation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chakradharpur to Rourkela</td>
                                    <td style="padding: 14px 16px; color: #475569;">105 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">1 Day</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #2563eb;">₹13,500 - ₹18,000</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹6,000 - ₹8,500</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chakradharpur to Kharagpur / Kolkata</td>
                                    <td style="padding: 14px 16px; color: #475569;">210 - 330 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">1 - 2 Days</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #2563eb;">₹17,000 - ₹25,000</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹8,500 - ₹12,000</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chakradharpur to Bilaspur / Raipur</td>
                                    <td style="padding: 14px 16px; color: #475569;">420 - 530 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">2 - 3 Days</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #2563eb;">₹23,000 - ₹34,000</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹11,000 - ₹15,500</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chakradharpur to Bhubaneswar</td>
                                    <td style="padding: 14px 16px; color: #475569;">360 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">2 Days</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #2563eb;">₹20,000 - ₹29,000</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹9,500 - ₹13,000</td>
                                </tr>
                                <tr style="background: #ffffff;">
                                    <td style="padding: 14px 16px; font-weight: 600; color: #0f172a;">Chakradharpur to Delhi NCR / Bengaluru</td>
                                    <td style="padding: 14px 16px; color: #475569;">1350 - 1650 km</td>
                                    <td style="padding: 14px 16px; color: #475569;">4 - 6 Days</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #2563eb;">₹32,000 - ₹46,000</td>
                                    <td style="padding: 14px 16px; font-weight: 700; color: #16a34a;">₹16,000 - ₹22,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Verified Image Embed 3 -->
                    <div class="content-media-embed" style="margin: 35px 0;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; max-width: 420px; margin: 0 auto; border-radius: 14px; overflow: hidden; box-shadow: 0 12px 28px rgba(0,0,0,0.12);">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transport carrier loading service in Chakradharpur by Shree Ashirwad Packers" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 20px; color: #ffffff;">
                                <p style="margin: 0; font-size: 14px; font-weight: 600;"><i class="fa-solid fa-car-tunnel" style="color: #60a5fa; margin-right: 8px;"></i> Hydraulic closed-body car carriers providing scratch-free nationwide vehicle transport.</p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Section 5: The 6-Step Precision Moving Process -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Our 6-Stage Relocation Protocol for Chakradharpur Moves
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 25px;">
                        Flawless shifting requires disciplined coordination. Over thousands of relocations executed across Jharkhand and South Eastern Railway zones, we have refined a fail-safe execution workflow:
                    </p>

                    <div class="timeline-steps" style="display: flex; flex-direction: column; gap: 20px;">
                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">1</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Free Physical or Virtual Inventory Assessment</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    Our Chakradharpur field surveyor inspects your residence or reviews your inventory via video call, estimating required carton quantities, vehicle capacity, and labor requirements to issue a binding, transparent quotation.
                                </p>
                            </div>
                        </div>

                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">2</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Systematic Packing with New Protective Materials</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    Our uniformed crew arrives on time with fresh bubble wrap, corrugated sheets, foam edge guards, and virgin carton boxes. All cartons are marked with room identifiers and item summaries.
                                </p>
                            </div>
                        </div>

                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">3</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Careful Carpentry & Appliance Disconnection</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    Trained carpenters dismantle heavy wooden beds, wardrobes, and air conditioners safely. Fasteners, bolts, and remote controllers are categorized into separate labeled bags to eliminate lost parts.
                                </p>
                            </div>
                        </div>

                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">4</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Engineered Loading & Weight Distribution</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    Using industrial tailgates and heavy-duty cargo ratchet belts, heavy items are anchored securely inside our container trucks to prevent sliding or crushing on undulating plateau roads.
                                </p>
                            </div>
                        </div>

                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">5</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Live GPS Tracking & Continuous Communication</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    Our fleet is connected with satellite GPS tracking. You receive automated transit milestone alerts and have direct telephone access to your personal move manager at all times.
                                </p>
                            </div>
                        </div>

                        <div class="step-item" style="display: flex; gap: 20px; background: #f8fafc; padding: 22px; border-radius: 10px; border-left: 4px solid #2563eb;">
                            <div class="step-badge" style="width: 42px; height: 42px; border-radius: 50%; background: #2563eb; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 18px; flex-shrink: 0;">6</div>
                            <div>
                                <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 6px;">Unloading, Reassembly & Room Placement</h4>
                                <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
                                    At your destination, our crew unloads every carton into the right room, reassembles beds and tables, re-positions major home appliances, and collects discarded packing debris.
                                </p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Section 6: Secure Warehousing & Transit Insurance -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Modern Warehousing Facilities & Comprehensive Transit Insurance
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 18px;">
                        Railway transfers and civil relocations frequently encounter scheduling gaps—where official quarters must be surrendered days before new government housing or rented accommodations become available. Shree Ashirwad Packers and Movers operates clean, pest-controlled, and 24/7 CCTV-secured storage facilities. Your belongings remain safely locked on raised wooden pallets, protected from humidity, dust, and rain.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 25px;">
                        Furthermore, our <strong>All-Risk Transit Insurance</strong> policies safeguard your prized household assets against highway collisions, fire incidents, or unforeseen natural events. In the rare instance of transit damage, our dedicated customer support team expedites your claims settlement with leading insurance underwriters.
                    </p>

                    <!-- Verified Image Embed 4 -->
                    <div class="content-media-embed" style="margin: 35px 0;">
                        <div class="image-wrapper" style="position: relative; aspect-ratio: 3/4; max-width: 420px; margin: 0 auto; border-radius: 14px; overflow: hidden; box-shadow: 0 12px 28px rgba(0,0,0,0.12);">
                            <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Commercial goods and household storage warehouse serving Chakradharpur by Shree Ashirwad Packers" style="width: 100%; height: 100%; object-fit: cover; display: block;" loading="lazy">
                            <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 20px; color: #ffffff;">
                                <p style="margin: 0; font-size: 14px; font-weight: 600;"><i class="fa-solid fa-warehouse" style="color: #60a5fa; margin-right: 8px;"></i> Clean, CCTV-guarded warehousing and storage for long and short-term goods security.</p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Section 7: Key Neighborhoods & Colonies in Chakradharpur -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Areas & Localities We Cover Across Chakradharpur
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 20px;">
                        Our dedicated packing crews and logistics fleet provide complete doorstep coverage across every quarter, colony, and commercial pocket in Chakradharpur and adjacent West Singhbhum areas:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 14px; margin-bottom: 25px;">
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> North Railway Colony</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> South Railway Colony</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Potka Residential Area</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Bangalitola & Station Rd</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Basti Road & Purani Basti</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Asantalia Industrial Belt</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Toklo Road & Devgaon</div>
                        <div style="background: #f1f5f9; padding: 12px 16px; border-radius: 8px; font-weight: 600; color: #1e293b; font-size: 14px;"><i class="fa-solid fa-location-dot" style="color: #ef4444; margin-right: 8px;"></i> Chaibasa Road Corridor</div>
                    </div>
                    <p style="font-size: 15px; color: #64748b; line-height: 1.7;">
                        We also coordinate rapid daily transfers linking Chakradharpur with Chaibasa, Saraikela, Kharsawan, Sonua, Goilkera, Manoharpur, and Tatanagar.
                    </p>
                </article>

                <!-- Section: Railway CTG Claim & Moving Tips -->
                <article class="article-block" style="margin-bottom: 50px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 20px; font-family: 'Outfit', sans-serif;">
                        Railway Composite Transfer Grant (CTG) Support & Practical Moving Tips
                    </h2>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
                        For Indian Railways personnel transferred out of Chakradharpur Division, claiming relocation reimbursement under the Composite Transfer Grant (CTG) and personal effects transportation allowance requires accurate, auditable documentation. Shree Ashirwad Packers and Movers provides a 100% compliant documentation package, including:
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 12px; margin: 20px 0 25px;">
                        <div style="background: #f8fafc; border-left: 3px solid #2563eb; padding: 14px; border-radius: 6px; font-size: 14px; color: #334155;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 4px;"><i class="fa-solid fa-file-invoice" style="color: #2563eb; margin-right: 6px;"></i> Official GST Tax Invoice:</strong>
                            Validated corporate tax bill itemizing freight, packing materials, and labor charges with official company stamp.
                        </div>
                        <div style="background: #f8fafc; border-left: 3px solid #1e3a8a; padding: 14px; border-radius: 6px; font-size: 14px; color: #334155;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 4px;"><i class="fa-solid fa-receipt" style="color: #1e3a8a; margin-right: 6px;"></i> IBA-Standard Consignment Bilty:</strong>
                            Complete with designated vehicle numbers, driver credentials, and origin-to-destination route tracking.
                        </div>
                        <div style="background: #f8fafc; border-left: 3px solid #2563eb; padding: 14px; border-radius: 6px; font-size: 14px; color: #334155;">
                            <strong style="color: #0f172a; display: block; margin-bottom: 4px;"><i class="fa-solid fa-clipboard-list" style="color: #2563eb; margin-right: 6px;"></i> Signed Inventory Packing List:</strong>
                            Serialized list of household cartons, appliances, and vehicle condition sheets for flawless verification.
                        </div>
                    </div>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
                        To ensure an effortless moving day, we suggest booking your moving slot at least 3 to 5 days prior to quarter surrender deadlines. Pack all official railway service documents, family medical papers, jewelry, and laptop computers in personal travel luggage. Defrost refrigerators 24 hours before loading to ensure clean, dry transport.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
                        <strong>Railway Quarters Handover & Surrender Assistance:</strong> Vacating Type-II, Type-III, Type-IV, or officer bungalows in North and South Railway Colonies requires strict compliance with railway engineering department guidelines. Our team assists with heavy furniture de-mounting, electrical fixture care, and final debris disposal, leaving your residential quarters pristine for seamless administrative handover and security deposit clearance.
                    </p>
                    <p style="font-size: 16px; line-height: 1.8; color: #334155; margin-bottom: 16px;">
                        <strong>Dedicated South Eastern Railway Route Network:</strong> We run direct, dedicated container trips between Chakradharpur and major railway division headquarters across eastern and central India, including Kharagpur, Adra, Ranchi, Bilaspur, Raipur, Sambalpur, and Khurda Road / Bhubaneswar. By avoiding cargo transshipment hubs, your household goods remain intact in the same container from initial loading at Chakradharpur until final delivery at your new divisional posting.
                    </p>

                    <!-- Local Google Map Embed -->
                    <div style="margin: 35px 0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;">
                        <iframe src="https://maps.google.com/maps?q=Chakradharpur%2C%20Jharkhand&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Map Location of Chakradharpur Jharkhand"></iframe>
                    </div>
                </article>

                <!-- Section 8: Frequently Asked Questions (FAQ) -->
                <article class="article-block" style="margin-bottom: 40px;">
                    <h2 style="font-size: 28px; font-weight: 700; color: #0f172a; margin-bottom: 24px; font-family: 'Outfit', sans-serif;">
                        Frequently Asked Questions - Packers & Movers in Chakradharpur
                    </h2>
                    
                    <div class="faq-accordion" style="display: flex; flex-direction: column; gap: 16px;">
                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> Why is Shree Ashirwad the preferred packer and mover for railway employees in Chakradharpur?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Chakradharpur is a premier Indian Railways divisional headquarters. Shree Ashirwad Packers and Movers specializes in South Eastern Railway (SER) staff transfers. We provide IBA-approved invoices, complete consignment notes (bilty), transit insurance, and itemized inventories that fulfill 100% of railway composite transfer grant (CTG) claim criteria.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> What are the estimated charges for household shifting from Chakradharpur?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Local moves within Chakradharpur or to nearby Chaibasa (25 km) start from ₹4,000 for a 1 BHK and ₹7,000 to ₹10,500 for a 2/3 BHK. Intercity shifts to Jamshedpur, Ranchi, Kharagpur, or Rourkela range between ₹12,000 and ₹26,000 depending upon cargo volume.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> Do you handle bike and car transportation from Chakradharpur?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Yes, we provide enclosed hydraulic car carriers and dedicated two-wheeler stands for safe transport from Chakradharpur to Kolkata, Delhi, Bengaluru, Hyderabad, Patna, and all pan-India locations with door-to-door pickup and full transit insurance.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> How do you protect household furniture and electronics during monsoon in Chakradharpur?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                The Sanjay river valley experiences heavy monsoon downpours. We protect furniture and appliances using multi-layer virgin bubble wrap, heavy corrugated paper sheets, and water-impermeable stretch cling film, transported strictly in sealed, covered container trucks.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> Can you pack and vacate railway quarters on short transfer notices?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Yes, we maintain standby packing crews and rapid dispatch vehicles in Chakradharpur. We can execute complete packing, furniture dismantling, loading, and quarter clearance within 24 to 48 hours to meet strict railway quarter surrender dates.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> Are there any hidden costs or surprise tolls added at delivery?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                None whatsoever. Our quotes are fully comprehensive, including high-grade packing materials, professional labor for loading and unloading, transit toll taxes, driver charges, and unpacking services. Everything is documented upfront.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> Is transit insurance provided for relocations from Chakradharpur?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Yes, we offer comprehensive All-Risk transit insurance through leading general insurance companies, safeguarding your valuable household electronics, furniture, and vehicles against accidental loss or road transit damage.
                            </p>
                        </div>

                        <div class="faq-item" style="border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; background: #f8fafc;">
                            <h3 style="font-size: 17.5px; font-weight: 700; color: #1e3a8a; margin-bottom: 10px;">
                                <i class="fa-solid fa-circle-question" style="color: #2563eb; margin-right: 8px;"></i> How do I book an in-person or video survey in Chakradharpur?
                            </h3>
                            <p style="font-size: 15px; line-height: 1.75; color: #334155; margin: 0;">
                                Simply call our dedicated customer hotline at +91 8409531615 or message us via WhatsApp at +91 9308888746. Our West Singhbhum operations manager will schedule a free, no-obligation pre-move assessment at your convenience.
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
                            Transferring or shifting in Chakradharpur? Get an accurate quote from our senior relocation specialist today.
                        </p>
                        <div style="display: flex; flex-direction: column; gap: 12px; margin-bottom: 20px;">
                            <a href="tel:8409531615" style="display: flex; align-items: center; justify-content: center; gap: 10px; background: #ef4444; color: #ffffff; text-decoration: none; padding: 14px; border-radius: 8px; font-weight: 700; font-size: 15px; box-shadow: 0 6px 16px rgba(239, 68, 68, 0.25);">
                                <i class="fa-solid fa-phone"></i> +91 8409531615
                            </a>
                            <a href="tel:9308888746" style="display: flex; align-items: center; justify-content: center; gap: 10px; background: #1e3a8a; color: #ffffff; text-decoration: none; padding: 14px; border-radius: 8px; font-weight: 700; font-size: 15px;">
                                <i class="fa-solid fa-phone"></i> +91 9308888746
                            </a>
                            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Chakradharpur" target="_blank" style="display: flex; align-items: center; justify-content: center; gap: 10px; background: #22c55e; color: #ffffff; text-decoration: none; padding: 14px; border-radius: 8px; font-weight: 700; font-size: 15px;">
                                <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
                            </a>
                        </div>
                        <div style="border-top: 1px solid #e2e8f0; padding-top: 16px; font-size: 13px; color: #64748b; line-height: 1.6;">
                            <p style="margin: 0 0 6px;"><i class="fa-solid fa-clock" style="color: #2563eb; margin-right: 6px;"></i> Operations: 24 Hours / 7 Days</p>
                            <p style="margin: 0;"><i class="fa-solid fa-file-circle-check" style="color: #16a34a; margin-right: 6px;"></i> 100% Railway CTG Claim Bill Guarantee</p>
                        </div>
                    </div>

                    <!-- Why Choose Us Box -->
                    <div class="sidebar-card" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 26px; box-shadow: 0 4px 14px rgba(0,0,0,0.05);">
                        <h4 style="font-size: 18px; font-weight: 700; color: #0f172a; margin-bottom: 16px;">
                            Why Choose Shree Ashirwad?
                        </h4>
                        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 12px; font-size: 14px; color: #334155;">
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>Railway Transfer Specialization</span></li>
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>IBA Approved Consignment Invoices</span></li>
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>Experienced In-House Crew & Carpenters</span></li>
                            <li style="display: flex; gap: 10px;"><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-top: 3px;"></i> <span>5-Layer Industrial Packaging</span></li>
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
                            <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-chaibasa" style="color: #2563eb; text-decoration: none; font-weight: 500;"><i class="fa-solid fa-arrow-right" style="font-size: 11px; margin-right: 6px;"></i> Chaibasa District Headquarters</a></li>
                            <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-jamshedpur" style="color: #2563eb; text-decoration: none; font-weight: 500;"><i class="fa-solid fa-arrow-right" style="font-size: 11px; margin-right: 6px;"></i> Jamshedpur (Tatanagar)</a></li>
                            <li><a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-saraikela-kharsawan" style="color: #2563eb; text-decoration: none; font-weight: 500;"><i class="fa-solid fa-arrow-right" style="font-size: 11px; margin-right: 6px;"></i> Saraikela Kharsawan</a></li>
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
            Planning Your Move in Chakradharpur?
        </h2>
        <p style="font-size: 16.5px; line-height: 1.7; color: #cbd5e1; margin-bottom: 30px;">
            Get in touch with Shree Ashirwad Packers and Movers today for a free pre-move consultation and transparent rate card. Trust Jharkhand’s premier moving team for a smooth, punctual transfer.
        </p>
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px;">
            <a href="tel:8409531615" style="display: inline-flex; align-items: center; gap: 10px; background: #ef4444; color: #ffffff; padding: 14px 32px; border-radius: 8px; font-weight: 700; text-decoration: none; font-size: 16px; box-shadow: 0 8px 20px rgba(239, 68, 68, 0.35);">
                <i class="fa-solid fa-phone-volume"></i> Call +91 8409531615
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20please%20send%20me%20a%20quote%20for%20Chakradharpur" target="_blank" style="display: inline-flex; align-items: center; gap: 10px; background: #22c55e; color: #ffffff; padding: 14px 32px; border-radius: 8px; font-weight: 700; text-decoration: none; font-size: 16px; box-shadow: 0 8px 20px rgba(34, 197, 94, 0.35);">
                <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
            </a>
        </div>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
