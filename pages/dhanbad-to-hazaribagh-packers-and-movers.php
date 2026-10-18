<?php
/**
 * Page Name: Dhanbad to Hazaribagh Packers and Movers
 * Route Slug: dhanbad-to-hazaribagh-packers-and-movers
 * Description: Dedicated inter-district moving route page from Dhanbad (Coal Capital of India) to Hazaribagh (North Chotanagpur Plateau).
 * Focus Keywords: dhanbad to hazaribagh packers and movers, packers and movers dhanbad to hazaribagh, house shifting dhanbad to hazaribagh, dhanbad to hazaribagh luggage parcel, dhanbad to hazaribagh car carrier, dhanbad to hazaribagh bike parcel
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Dhanbad to Hazaribagh Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Top Dhanbad to Hazaribagh packers and movers by Shree Ashirwad. Same-day 3-4 hr transit, BCCL & CCL transfer bills, 5-layer packing, car carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/dhanbad-to-hazaribagh-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="dhanbad to hazaribagh packers and movers, packers and movers dhanbad to hazaribagh, house shifting dhanbad to hazaribagh, dhanbad to hazaribagh luggage parcel, dhanbad to hazaribagh car carrier, dhanbad to hazaribagh bike parcel">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Dhanbad">

    <!-- Open Graph Metadata -->
    <meta property="og:type" content="business.business">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta property="og:url" content="<?php echo $canonical_url; ?>">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg">
    <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter Card Metadata -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg">

    <!-- Favicon & Stylesheets -->
    <link rel="icon" type="image/png" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
    <link rel="shortcut icon" href="<?php echo SITE_BASE_URL; ?>/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Scoped CSS for Route 6 (Dhanbad to Hazaribagh) -->
    <style>
        :root {
            --d2hzb-primary: #152e4d;
            --d2hzb-secondary: #047857;
            --d2hzb-accent: #c25e00;
            --d2hzb-accent-light: #fff3e6;
            --d2hzb-dark: #0b192c;
            --d2hzb-gray-bg: #f8fafc;
            --d2hzb-border: #e2e8f0;
        }

        .d2hzb-wrapper {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #334155;
            line-height: 1.7;
        }

        .d2hzb-hero {
            background: linear-gradient(135deg, rgba(21,46,77,0.95) 0%, rgba(4,120,87,0.92) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 20px 75px;
            text-align: center;
            position: relative;
        }
        .d2hzb-hero-content {
            max-width: 980px;
            margin: 0 auto;
        }
        .d2hzb-badge {
            display: inline-block;
            background: rgba(194,94,0,0.22);
            border: 1px solid rgba(194,94,0,0.45);
            color: #fff3e6;
            padding: 6px 18px;
            border-radius: 50px;
            font-size: 0.88rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 20px;
        }
        .d2hzb-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2rem, 4vw, 3.2rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 18px;
            color: #ffffff;
        }
        .d2hzb-hero h1 span {
            color: #fbbf24;
            display: inline-block;
        }
        .d2hzb-hero p {
            font-size: 1.15rem;
            color: #e2e8f0;
            max-width: 820px;
            margin: 0 auto 30px;
            line-height: 1.7;
        }
        .d2hzb-hero-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
            gap: 15px;
            margin: 35px 0 30px;
        }
        .d2hzb-stat-card {
            background: rgba(255,255,255,0.08);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255,255,255,0.15);
            padding: 18px 12px;
            border-radius: 12px;
        }
        .d2hzb-stat-card strong {
            display: block;
            font-size: 1.6rem;
            font-family: 'Outfit', sans-serif;
            color: #fbbf24;
        }
        .d2hzb-stat-card span {
            font-size: 0.85rem;
            color: #cbd5e1;
        }

        .d2hzb-btn-group {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .d2hzb-btn-phone {
            background: #f59e0b;
            color: #0b192c;
            padding: 13px 28px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.25s ease;
        }
        .d2hzb-btn-phone:hover {
            background: #d97706;
            color: #ffffff;
            transform: translateY(-2px);
        }
        .d2hzb-btn-whatsapp {
            background: #22c55e;
            color: #ffffff;
            padding: 13px 28px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.25s ease;
        }
        .d2hzb-btn-whatsapp:hover {
            background: #16a34a;
            transform: translateY(-2px);
        }

        .d2hzb-section {
            padding: 70px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .d2hzb-section-header {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }
        .d2hzb-section-header h2 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(1.8rem, 3vw, 2.5rem);
            font-weight: 800;
            color: var(--d2hzb-primary);
            margin-bottom: 12px;
        }
        .d2hzb-section-header p {
            color: #64748b;
            font-size: 1.05rem;
        }

        .d2hzb-grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 35px;
            align-items: center;
            margin-bottom: 45px;
        }
        .d2hzb-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(290px, 1fr));
            gap: 25px;
        }

        .d2hzb-card {
            background: #ffffff;
            border: 1px solid var(--d2hzb-border);
            border-radius: 12px;
            padding: 28px;
            box-shadow: 0 4px 12px rgba(15,23,42,0.04);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }
        .d2hzb-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(15,23,42,0.08);
        }
        .d2hzb-card h3 {
            font-family: 'Outfit', sans-serif;
            color: var(--d2hzb-primary);
            font-size: 1.3rem;
            margin-bottom: 12px;
            font-weight: 700;
        }
        .d2hzb-card p {
            font-size: 0.96rem;
            color: #475569;
            line-height: 1.65;
            margin-bottom: 0;
        }

        .d2hzb-feature-img {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(15,23,42,0.08);
        }
        .d2hzb-feature-img img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .d2hzb-feature-img:hover img {
            transform: scale(1.03);
        }
        .d2hzb-img-caption {
            background: #f1f5f9;
            padding: 10px 15px;
            font-size: 0.85rem;
            color: #64748b;
            text-align: center;
            font-style: italic;
        }

        .d2hzb-table-wrapper {
            background: #ffffff;
            border: 1px solid var(--d2hzb-border);
            border-radius: 12px;
            overflow-x: auto;
            box-shadow: 0 8px 20px rgba(15,23,42,0.05);
        }
        .d2hzb-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.98rem;
        }
        .d2hzb-table th {
            background: var(--d2hzb-primary);
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 700;
            white-space: nowrap;
        }
        .d2hzb-table td {
            padding: 15px 20px;
            border-bottom: 1px solid var(--d2hzb-border);
            color: #475569;
        }
        .d2hzb-table tr:last-child td {
            border-bottom: none;
        }
        .d2hzb-table tr:hover td {
            background-color: #f1f5f9;
        }

        .d2hzb-matrix-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 15px;
        }
        .d2hzb-matrix-card {
            background: #ffffff;
            border: 1px solid var(--d2hzb-border);
            border-radius: 10px;
            padding: 16px;
            border-left: 4px solid var(--d2hzb-accent);
        }
        .d2hzb-matrix-card h4 {
            color: var(--d2hzb-primary);
            font-size: 1.05rem;
            margin: 0 0 6px;
            font-weight: 700;
        }
        .d2hzb-matrix-card p {
            color: #64748b;
            font-size: 0.9rem;
            margin: 0;
            line-height: 1.5;
        }

        .d2hzb-process-step {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
            align-items: flex-start;
        }
        .d2hzb-step-num {
            background: var(--d2hzb-accent);
            color: #ffffff;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 1.2rem;
            flex-shrink: 0;
            box-shadow: 0 6px 14px rgba(194,94,0,0.3);
        }
        .d2hzb-step-content {
            background: #ffffff;
            border: 1px solid var(--d2hzb-border);
            border-radius: 10px;
            padding: 18px 22px;
            flex-grow: 1;
        }
        .d2hzb-step-content h3 {
            font-family: 'Outfit', sans-serif;
            color: var(--d2hzb-primary);
            margin: 0 0 6px;
            font-size: 1.15rem;
        }
        .d2hzb-step-content p {
            color: #64748b;
            margin: 0;
            line-height: 1.6;
        }

        .d2hzb-faq-item {
            background: #ffffff;
            border: 1px solid var(--d2hzb-border);
            border-radius: 10px;
            margin-bottom: 15px;
            overflow: hidden;
        }
        .d2hzb-faq-q {
            padding: 18px 24px;
            font-weight: 700;
            color: var(--d2hzb-primary);
            background: var(--d2hzb-gray-bg);
            border-bottom: 1px solid var(--d2hzb-border);
        }
        .d2hzb-faq-a {
            padding: 20px 24px;
            color: #475569;
            line-height: 1.7;
            font-size: 0.98rem;
        }

        .d2hzb-cta-banner {
            background: linear-gradient(135deg, var(--d2hzb-primary) 0%, #0b192c 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 50px 30px;
            text-align: center;
            margin: 60px auto 20px;
            max-width: 1000px;
        }
        .d2hzb-cta-banner h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            margin-bottom: 15px;
            color: #ffffff;
        }
        .d2hzb-cta-banner p {
            font-size: 1.1rem;
            color: #cbd5e1;
            max-width: 720px;
            margin: 0 auto 30px;
        }
        .d2hzb-cluster-links {
            background: #ffffff;
            border: 1px solid var(--d2hzb-border);
            border-radius: 12px;
            padding: 30px;
            margin-top: 40px;
        }
        .d2hzb-cluster-links h3 {
            color: var(--d2hzb-primary);
            font-size: 1.25rem;
            margin-bottom: 20px;
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
        }
        .d2hzb-tag-cloud {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .d2hzb-tag-link {
            background: var(--d2hzb-gray-bg);
            border: 1px solid var(--d2hzb-border);
            padding: 7px 15px;
            border-radius: 6px;
            color: #334155;
            text-decoration: none;
            font-size: 0.88rem;
            font-weight: 600;
            transition: all 0.2s ease;
        }
        .d2hzb-tag-link:hover {
            background: var(--d2hzb-accent);
            color: #ffffff;
            border-color: var(--d2hzb-accent);
        }
    </style>

    <!-- Schema 1: MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Dhanbad to Hazaribagh",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "https://www.shreeashirwadpackers.com/#organization",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+918409531615",
        "priceRange": "INR 9,500 - 38,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Bank More, Near Railway Station",
            "addressLocality": "Dhanbad",
            "addressRegion": "Jharkhand",
            "postalCode": "826001",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 23.7957,
            "longitude": 86.4304
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
            "opens": "07:00",
            "closes": "21:30"
        },
        "sameAs": [
            "https://www.facebook.com/shreeashirwadpackers",
            "https://www.instagram.com/shreeashirwadpackers"
        ]
    }
    </script>

    <!-- Schema 2: Service Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Inter-District Relocation & Packers and Movers",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Dhanbad"
            },
            {
                "@type": "City",
                "name": "Hazaribagh"
            }
        ],
        "description": "Premium inter-district moving services from Dhanbad to Hazaribagh covering 125 km across GT Road (NH-19) via Govindpur and Bagodar. Same-day 3 to 4 hour delivery, 5-layer protective packing, weatherproof container trucks, BCCL & CCL transfer claim billing, and comprehensive transit insurance."
    }
    </script>

    <!-- Schema 3: BreadcrumbList Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "https://www.shreeashirwadpackers.com/"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "Packers and Movers in Dhanbad",
                "item": "https://www.shreeashirwadpackers.com/packers-and-movers-in-dhanbad"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Dhanbad to Hazaribagh",
                "item": "<?php echo $canonical_url; ?>"
            }
        ]
    }
    </script>

    <!-- Schema 4: FAQPage Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "How long does household shifting take from Dhanbad to Hazaribagh?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Dhanbad and Hazaribagh is approximately 125 to 130 km via GT Road (NH-19) passing Govindpur bypass and Bagodar into NH-20. Driving transit requires roughly 3.0 to 3.5 hours. Shree Ashirwad Packers guarantees same-day relocation: morning packing and loading in Dhanbad with complete unloading, room setup, and unpacking in Hazaribagh by early evening."
                }
            },
            {
                "@type": "Question",
                "name": "What are the shifting charges from Dhanbad to Hazaribagh?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Shifting costs depend on household volume and packaging grade: 1 BHK apartment shifting costs ₹9,500 to ₹15,000; 2 BHK household moving ranges from ₹14,000 to ₹21,000; 3 BHK flat/bungalow shifting ranges from ₹19,000 to ₹28,000; two-wheeler bike parceling costs ₹2,000 to ₹3,500; and dedicated enclosed car transport costs ₹6,000 to ₹9,500."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide claim-ready bills for BCCL, CCL, and IIT-ISM employee transfers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Shree Ashirwad Packers and Movers issues 100% compliant computer-generated GST tax invoices (SAC 9965/9967), consignment bilty notes, itemized inventory packing lists, driver payment vouchers, and transit insurance policies accepted across Bharat Coking Coal Limited (BCCL), Central Coalfields Limited (CCL), IIT-ISM Dhanbad, CMPF, Vinoba Bhave University (VBU), and public sector banks."
                }
            },
            {
                "@type": "Question",
                "name": "How do you protect household furniture from road dust and coal soot?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We deploy a specialized 5-layer defensive shield comprising high-density EPE foam sheets, virgin multi-layer bubble wrap, heavy corrugated edge corner guards, 7-ply rigid boxes, and waterproof stretch film. Items travel inside locked, weatherproof closed container vehicles that completely seal out coal belt soot, highway vibration, and rain."
                }
            },
            {
                "@type": "Question",
                "name": "Can you transport my personal car or motorcycle from Dhanbad to Hazaribagh?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer specialized enclosed hydraulic car carrier trailers and custom two-wheeler parceling with wheel chocks, bubble padding around mirrors and fuel tanks, digital condition inspection reports, and transit insurance with delivery within 12 to 24 hours."
                }
            },
            {
                "@type": "Question",
                "name": "Which localities do you serve in Dhanbad and Hazaribagh?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "In Dhanbad, we pick up across Bank More, Saraidhela, Hirapur, Bartand, Steel Gate, Dhansar, Jharia, Katras, Govindpur, and IIT-ISM / BCCL Koyla Nagar. In Hazaribagh, we provide doorstep delivery and room placement across Canary Hill Road, Korrah, Matwari, Nawabganj, Okni, Hurhuru, Babugaon, Dipugarha, Pugmil, Demotand, BSF Meru Camp, and Indrapuri."
                }
            }
        ]
    }
    </script>
</head>
<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<main class="d2hzb-wrapper">
    <!-- Hero Section -->
    <section class="d2hzb-hero">
        <div class="d2hzb-hero-content">
            <span class="d2hzb-badge">&#128666; Return Inter-District Relocation Specialist</span>
            <h1>Dhanbad to Hazaribagh <span>Packers and Movers</span></h1>
            <p>Guaranteed same-day household shifting, executive coal belt transfers, and vehicle transport across the 125 km GT Road corridor. 5-layer packaging armor, closed weatherproof container trucks, and BCCL-CCL approved GST billing.</p>

            <div class="d2hzb-hero-stats">
                <div class="d2hzb-stat-card">
                    <strong>125 KM</strong>
                    <span>Highway Transit Distance</span>
                </div>
                <div class="d2hzb-stat-card">
                    <strong>3.5 HOURS</strong>
                    <span>Fast Express Transit Time</span>
                </div>
                <div class="d2hzb-stat-card">
                    <strong>100% SAME DAY</strong>
                    <span>Door-to-Door Delivery</span>
                </div>
                <div class="d2hzb-stat-card">
                    <strong>ZERO LOSS</strong>
                    <span>All-Risk Transit Insurance</span>
                </div>
            </div>

            <div class="d2hzb-btn-group">
                <a href="tel:8409531615" class="d2hzb-btn-phone">&#128222; Call 084095 31615</a>
                <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Dhanbad%20to%20Hazaribagh%20shifting." target="_blank" class="d2hzb-btn-whatsapp">&#128172; WhatsApp Instant Quote</a>
            </div>
        </div>
    </section>

    <!-- Section 1: Route Corridor Overview -->
    <section class="d2hzb-section">
        <div class="d2hzb-grid-2">
            <div>
                <span class="d2hzb-badge" style="background:#e0f2fe; color:#0369a1; border-color:#bae6fd;">High-Speed Regional Corridor</span>
                <h2 style="font-family:'Outfit',sans-serif; color:var(--d2hzb-primary); font-size:2.2rem; margin:15px 0;">Seamless Shifting from Dhanbad to Hazaribagh Plateau</h2>
                <p>Relocating from the mining and commercial capital of Dhanbad to the pleasant educational plateau of Hazaribagh involves traveling approximately 125 to 130 km along the Grand Trunk Road (NH-19) via Govindpur bypass and Bagodar, turning onto NH-20 into Hazaribagh city. Whether you are an officer transferring from Bharat Coking Coal Limited (BCCL) Koyla Bhawan to Central Coalfields Limited (CCL) Charhi, Barka-Sayal, or North Karanpura, a professor joining Vinoba Bhave University (VBU), a medical professional, or a family settling in Matwari, Canary Hill Road, or Korrah, Shree Ashirwad Packers and Movers delivers an effortless moving experience.</p>
                <p>Our dedicated moving network guarantees morning loading in Dhanbad neighborhoods like Saraidhela, Bank More, Hirapur, or Koyla Nagar, with arrival, careful unloading, and customized room setup in your Hazaribagh home on the very same afternoon. We deploy closed weatherproof container vehicles that protect your valued furnishings and electronic appliances from coal-belt dust, highway turbulence, and unpredictable weather.</p>
            </div>
            <div class="d2hzb-feature-img">
                <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Closed container moving truck for Dhanbad to Hazaribagh packers and movers" loading="lazy">
                <div class="d2hzb-img-caption">All-weather sealed container trucks operating along the Dhanbad-Hazaribagh GT Road corridor</div>
            </div>
        </div>
    </section>

    <!-- Section 2: Comprehensive Services -->
    <section class="d2hzb-section" style="background: var(--d2hzb-gray-bg);">
        <div class="d2hzb-section-header">
            <h2>Custom Relocation Solutions for Every Need</h2>
            <p>From single room bachelors to sprawling corporate bungalows, explore our end-to-end relocation services tailored for the Dhanbad to Hazaribagh route.</p>
        </div>

        <div class="d2hzb-grid-3">
            <div class="d2hzb-card">
                <h3>&#127968; Complete Household Relocation</h3>
                <p>Full-service residential packing and moving for 1 BHK, 2 BHK, 3 BHK, and duplex bungalows. We disassemble beds, dining tables, modular wardrobes, pack every item with 5-layer defensive materials, transport securely, and reassemble them at your Hazaribagh destination.</p>
            </div>
            <div class="d2hzb-card">
                <h3>&#128188; Corporate &amp; PSU Transfer Moves</h3>
                <p>Specialized institutional relocation for executives and personnel transferring between BCCL Dhanbad headquarters, CMPF, IIT-ISM, and CCL Hazaribagh area offices, police academies, and nationalized banks with 100% compliant claim documentation.</p>
            </div>
            <div class="d2hzb-card">
                <h3>&#128663; Dedicated Enclosed Car Carriers</h3>
                <p>Safe four-wheeler transportation using specialized closed car carrier trailers equipped with hydraulic ramps, wheel-chocks, and safety harness belts. Protect your car from highway odometer run and fly ash exposure across the coal corridor.</p>
            </div>
            <div class="d2hzb-card">
                <h3>&#127949; Two-Wheeler Motorcycle Parcel</h3>
                <p>Doorstep bike and scooter courier service. We wrap mirrors, headlamps, and fuel tanks in heavy-duty bubble wrap, drain fuel safely, strap the bike upright inside container bays, and deliver scratch-free to Hazaribagh within 24 hours.</p>
            </div>
            <div class="d2hzb-card">
                <h3>&#128230; Luggage &amp; Mini-Consignment Delivery</h3>
                <p>Economical part-load shifting for students moving from IIT-ISM Dhanbad to Hazaribagh colleges, doctors, or bachelors needing to transport a few cartons, refrigerator, and study desk without paying full truck tariff.</p>
            </div>
            <div class="d2hzb-card">
                <h3>&#128274; Secure Transit Warehousing</h3>
                <p>Need temporary storage while your new flat in Canary Hill Road or Matwari is being renovated? We offer clean, 24/7 CCTV-monitored, moisture-free warehouse facilities with flexible weekly and monthly storage plans.</p>
            </div>
        </div>
    </section>

    <!-- Section 3: 5-Layer Defensive Packaging Shield -->
    <section class="d2hzb-section">
        <div class="d2hzb-grid-2">
            <div class="d2hzb-feature-img">
                <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="5-layer household packing materials used by Shree Ashirwad Packers and Movers" loading="lazy">
                <div class="d2hzb-img-caption">Multi-layer defense system: EPE foam, bubble wrap, corner guards, and rigid 7-ply cartons</div>
            </div>
            <div>
                <span class="d2hzb-badge" style="background:#fef3c7; color:#b45309; border-color:#fde68a;">Zero Damage Engineering</span>
                <h2 style="font-family:'Outfit',sans-serif; color:var(--d2hzb-primary); font-size:2.2rem; margin:15px 0;">Our Proven 5-Layer Packaging Shield</h2>
                <p>Even across a smooth 125 km highway transit, road undulations, bridge transitions, and coal-dust exposure require uncompromising packaging protocols. We engineer custom protective armor for every category of item in your home:</p>
                <ul style="padding-left: 20px; line-height: 1.8; color: #475569;">
                    <li><strong>Layer 1 - Virgin EPE Foam:</strong> Applied directly to polished wood, glass tabletops, and delicate painted laminates to eliminate friction abrasions.</li>
                    <li><strong>Layer 2 - High-Density Air Bubble Wrap:</strong> Shock-damping air chambers cushion televisions, microwave ovens, washing machines, and chinaware.</li>
                    <li><strong>Layer 3 - Heavy Corrugated Corner Protectors:</strong> Rigid L-shaped corner angles safeguard delicate furniture edges from accidental impacts during handling.</li>
                    <li><strong>Layer 4 - Waterproof Stretch Film:</strong> High-grade poly-wrap seals furniture, mattresses, and soft furnishings against moisture, road soot, and monsoon rains.</li>
                    <li><strong>Layer 5 - Reinforced 7-Ply Master Cartons:</strong> Heavy-duty corrugated boxes neatly packed with clothing, kitchen utensils, books, and crockery.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section 4: Transparent Tariff Schedule -->
    <section class="d2hzb-section" style="background: var(--d2hzb-gray-bg);">
        <div class="d2hzb-section-header">
            <h2>Dhanbad to Hazaribagh Shifting Rates &amp; Charges</h2>
            <p>Clear, transparent pricing with no hidden toll fees or destination floor surprises. Compare our competitive relocation packages below.</p>
        </div>

        <div class="d2hzb-table-wrapper">
            <table class="d2hzb-table">
                <thead>
                    <tr>
                        <th>Shifting Type</th>
                        <th>Vehicle Type</th>
                        <th>Packaging Materials</th>
                        <th>Est. Transit Time</th>
                        <th>Estimated Tariff</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Complete Shifting</strong></td>
                        <td>14-ft Closed Container</td>
                        <td>3-Layer Foam &amp; Cartons</td>
                        <td>3.0 - 4.0 Hours</td>
                        <td><strong style="color:var(--d2hzb-accent);">₹9,500 - ₹15,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Complete Shifting</strong></td>
                        <td>17-ft Closed Container</td>
                        <td>4-Layer Foam, Bubble &amp; Film</td>
                        <td>3.5 - 4.5 Hours</td>
                        <td><strong style="color:var(--d2hzb-accent);">₹14,000 - ₹21,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Executive Shifting</strong></td>
                        <td>19-ft or 22-ft High-Cube Truck</td>
                        <td>5-Layer Defensive Shield</td>
                        <td>4.0 - 5.5 Hours</td>
                        <td><strong style="color:var(--d2hzb-accent);">₹19,000 - ₹28,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Bungalow Shifting</strong></td>
                        <td>24-ft Multi-Axle Container</td>
                        <td>Premium Custom Armor &amp; Crates</td>
                        <td>5.0 - 6.5 Hours</td>
                        <td><strong style="color:var(--d2hzb-accent);">₹26,000 - ₹38,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler Bike Parcel</strong></td>
                        <td>Specialized Cargo Truck Bay</td>
                        <td>Bubble Wrap &amp; Ratchet Lashings</td>
                        <td>Same-Day Delivery</td>
                        <td><strong style="color:var(--d2hzb-accent);">₹2,000 - ₹3,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Four-Wheeler Car Carrier</strong></td>
                        <td>Hydraulic Closed Car Carrier</td>
                        <td>Wheel-Chocks &amp; Safety Covers</td>
                        <td>Same-Day Delivery</td>
                        <td><strong style="color:var(--d2hzb-accent);">₹6,000 - ₹9,500</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="text-align: center; margin-top: 15px; font-size: 0.9rem; color: #64748b;">* Tariffs are indicative and vary based on exact consignment volume, packing material grade, floor elevations, elevator access, and optional comprehensive transit insurance (3% of declared asset value).</p>
    </section>

    <!-- Section 5: Vehicle Transport & Automotive Logistics -->
    <section class="d2hzb-section">
        <div class="d2hzb-grid-2">
            <div>
                <span class="d2hzb-badge" style="background:#ecfdf5; color:#047857; border-color:#a7f3d0;">Automotive Transport Specialists</span>
                <h2 style="font-family:'Outfit',sans-serif; color:var(--d2hzb-primary); font-size:2.2rem; margin:15px 0;">Safe Car Carrier &amp; Bike Parcel Services</h2>
                <p>Driving your personal car or motorcycle across the heavy coal truck corridors of GT Road can be exhausting and exposes your vehicle to mechanical wear and flying stone chips. Shree Ashirwad Packers and Movers provides specialized automotive transport solutions designed to preserve your vehicle in pristine showroom condition.</p>
                <ul style="padding-left: 20px; line-height: 1.8; color: #475569;">
                    <li><strong>Pre-Transit Inspection:</strong> Digital condition audit photographing existing bodywork, tyre status, and odometer reading before loading.</li>
                    <li><strong>Enclosed Hydraulic Carriers:</strong> Vehicles travel inside locked carriers equipped with low-angle hydraulic ramps to prevent front bumper scraping on luxury sedans and hatchbacks.</li>
                    <li><strong>Wheel Chock Locking:</strong> Four-point heavy-duty nylon wheel chocks hold your vehicle firmly without stressing suspension systems during highway transit.</li>
                    <li><strong>Two-Wheeler Bubble Padding:</strong> Mirrors, handlebars, turn indicators, and painted fuel tanks receive double-layer bubble wrap, ensuring zero scratches on arrival in Hazaribagh.</li>
                </ul>
            </div>
            <div class="d2hzb-feature-img">
                <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Enclosed car transport carrier for Dhanbad to Hazaribagh vehicle relocation" loading="lazy">
                <div class="h2dhn-img-caption">Hydraulic enclosed car carrier securing vehicles for safe transit between Dhanbad and Hazaribagh</div>
            </div>
        </div>
    </section>

    <!-- Section 6: Step-by-Step Relocation Process -->
    <section class="d2hzb-section" style="background: var(--d2hzb-gray-bg);">
        <div class="d2hzb-section-header">
            <h2>Our 5-Stage Systematic Relocation Workflow</h2>
            <p>From your initial phone inquiry in Dhanbad to placing the final sofa cushion in your Hazaribagh home, every step is executed with precision.</p>
        </div>

        <div style="max-width: 850px; margin: 0 auto;">
            <div class="d2hzb-process-step">
                <div class="d2hzb-step-num">1</div>
                <div class="d2hzb-step-content">
                    <h3>Free Pre-Move Survey &amp; Transparent Quote</h3>
                    <p>Our relocation supervisor conducts an in-person physical survey or virtual video assessment across your Dhanbad residence to compute goods volume, parking clearance, fragile packing requirements, and provide a binding written estimate.</p>
                </div>
            </div>
            <div class="d2hzb-process-step">
                <div class="d2hzb-step-num">2</div>
                <div class="d2hzb-step-content">
                    <h3>Defensive 5-Layer Packing at Your Residence</h3>
                    <p>On shifting day, our experienced crew arrives punctually with virgin materials, disassembles double beds, dining tables, and wardrobes, bubble-wraps glassware and electronics, and systematically labels every carton by room.</p>
                </div>
            </div>
            <div class="d2hzb-process-step">
                <div class="d2hzb-step-num">3</div>
                <div class="d2hzb-step-content">
                    <h3>Container Loading &amp; Security Sealing</h3>
                    <p>Goods are stacked using weight-balanced principles inside our closed container trucks, anchored with heavy-duty ratchet tie-downs, and locked with a unique tamper-evident numbered bolt seal in your presence.</p>
                </div>
            </div>
            <div class="d2hzb-process-step">
                <div class="d2hzb-step-num">4</div>
                <div class="d2hzb-step-content">
                    <h3>Swift 125 km Highway Transit</h3>
                    <p>Our experienced commercial drivers navigate the 125 km highway corridor via GT Road (NH-19) passing Govindpur and Bagodar smoothly, bypassing city congestions to reach your Hazaribagh address within 3.5 hours.</p>
                </div>
            </div>
            <div class="d2hzb-process-step">
                <div class="d2hzb-step-num">5</div>
                <div class="d2hzb-step-content">
                    <h3>Unloading, Room Placement &amp; Furniture Setup</h3>
                    <p>At your Hazaribagh residence in Matwari, Canary Hill Road, Korrah, or Hurhuru, the crew breaks the security seal, carefully carries all items inside, reassembles furniture, positions heavy appliances, and collects packing debris.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 7: Unpacking & Destination Services -->
    <section class="d2hzb-section">
        <div class="d2hzb-grid-2">
            <div class="d2hzb-feature-img">
                <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and furniture room setup service in Hazaribagh residence" loading="lazy">
                <div class="d2hzb-img-caption">Dedicated room setup, furniture reassembly, and debris removal in Hazaribagh residences</div>
            </div>
            <div>
                <span class="d2hzb-badge" style="background:#ede9fe; color:#6d28d9; border-color:#ddd6fe;">Turnkey Destination Assistance</span>
                <h2 style="font-family:'Outfit',sans-serif; color:var(--d2hzb-primary); font-size:2.2rem; margin:15px 0;">Complete Unpacking &amp; Room Setup in Hazaribagh</h2>
                <p>Moving is not complete until your new house feels like home. Unlike transport brokers who merely dump carton boxes in the living room and leave, Shree Ashirwad Packers and Movers provides comprehensive destination services across all Hazaribagh sectors.</p>
                <p>Our crew unpacks cartons, places kitchen utensils in overhead cabinets, installs study desks, reattaches bed frames, and positions heavy refrigerators and washing machines in their allocated spots. We ensure you can sleep comfortably on your freshly set-up bed on the very first night of your relocation.</p>
                <p>Finally, our team cleans up and carries away all used cardboard boxes, bubble wrap scraps, and plastic film, leaving your new residence tidy and ready for comfortable living.</p>
            </div>
        </div>
    </section>

    <!-- Section 8: Dual-City Locality Coverage Matrix -->
    <section class="d2hzb-section" style="background: var(--d2hzb-gray-bg);">
        <div class="d2hzb-section-header">
            <h2>Dhanbad &amp; Hazaribagh Complete Locality Network</h2>
            <p>Direct doorstep pickup across every neighborhood of Dhanbad with guaranteed doorstep delivery throughout Hazaribagh urban and cantonment zones.</p>
        </div>

        <div class="d2hzb-grid-2">
            <div class="d2hzb-matrix-card">
                <h4>&#128205; Dhanbad Pickup Sectors</h4>
                <p style="margin-bottom: 12px;">Full door-to-door packing coverage across Dhanbad commercial and residential perimeters:</p>
                <div style="display:flex; flex-wrap:wrap; gap:6px;">
                    <span class="d2hzb-tag-link">Bank More Commercial Hub</span>
                    <span class="d2hzb-tag-link">Saraidhela High-Rise Enclaves</span>
                    <span class="d2hzb-tag-link">Hirapur &amp; Park Market</span>
                    <span class="d2hzb-tag-link">BCCL Koyla Nagar &amp; Bhawan</span>
                    <span class="d2hzb-tag-link">IIT-ISM Campus</span>
                    <span class="d2hzb-tag-link">Steel Gate &amp; Kolakusma</span>
                    <span class="d2hzb-tag-link">Bartand Bus Stand Colony</span>
                    <span class="d2hzb-tag-link">Dhansar &amp; Manaitand</span>
                    <span class="d2hzb-tag-link">Jharia Main Road</span>
                    <span class="d2hzb-tag-link">Katras &amp; Govindpur Belt</span>
                </div>
            </div>

            <div class="d2hzb-matrix-card">
                <h4>&#128205; Hazaribagh Delivery Destinations</h4>
                <p style="margin-bottom: 12px;">Complete unloading, room placement, and unpacking across Hazaribagh residential sectors:</p>
                <div style="display:flex; flex-wrap:wrap; gap:6px;">
                    <span class="d2hzb-tag-link">Canary Hill Road</span>
                    <span class="d2hzb-tag-link">Matwari Chowk</span>
                    <span class="d2hzb-tag-link">Korrah</span>
                    <span class="d2hzb-tag-link">Nawabganj</span>
                    <span class="d2hzb-tag-link">Okni</span>
                    <span class="d2hzb-tag-link">Hurhuru</span>
                    <span class="d2hzb-tag-link">Babugaon</span>
                    <span class="d2hzb-tag-link">Dipugarha</span>
                    <span class="d2hzb-tag-link">Pugmil</span>
                    <span class="d2hzb-tag-link">Demotand</span>
                    <span class="d2hzb-tag-link">BSF Meru Camp</span>
                    <span class="d2hzb-tag-link">Indrapuri Colony</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 9: Institutional Reimbursement Documentation -->
    <section class="d2hzb-section">
        <div class="d2hzb-section-header">
            <h2>100% Compliant Bills for BCCL, CCL &amp; Government Transfers</h2>
            <p>Hassle-free relocation allowance claims with verified GST invoices and official documentation.</p>
        </div>

        <div class="d2hzb-grid-3">
            <div class="d2hzb-card">
                <h3>&#128196; Computerized GST Tax Invoices</h3>
                <p>Official tax invoices bearing our verified GSTIN and proper SAC service accounting codes (SAC 9965 / 9967) for freight and cargo handling services, matching the exact format required by public sector auditors.</p>
            </div>
            <div class="d2hzb-card">
                <h3>&#128221; Consignment Bilty &amp; Packing Lists</h3>
                <p>Standard IBA-pattern consignment notes (bilty) detailing vehicle number, driver credentials, pickup/delivery addresses, and an itemized serial-numbered inventory packing list.</p>
            </div>
            <div class="d2hzb-card">
                <h3>&#128176; Money Receipts &amp; Transit Policies</h3>
                <p>Formal stamped advance and final payment money receipts accompanied by the official transit insurance certificate copy to ensure fast, seamless reimbursement from your accounts department.</p>
            </div>
        </div>
    </section>

    <!-- Section 10: Verified Customer Testimonials -->
    <section class="d2hzb-section" style="background: var(--d2hzb-gray-bg);">
        <div class="d2hzb-section-header">
            <h2>Verified Client Experiences on the Dhanbad-Hazaribagh Route</h2>
            <p>Discover how coal executives, university faculty, and relocated families rate our relocation service.</p>
        </div>

        <div class="d2hzb-grid-3">
            <div class="d2hzb-card">
                <div style="color: #f59e0b; margin-bottom: 8px;">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</div>
                <p style="font-style: italic; margin-bottom: 15px;">"Transferred from BCCL Koyla Bhawan Dhanbad to CCL Charhi area near Hazaribagh. Shree Ashirwad Packers arrived punctually at 8 AM in Saraidhela, loaded our 3 BHK flat in 3 hours, and completed unloading in Hazaribagh by 3 PM. Their GST bills were approved by CCL accounts immediately without any query."</p>
                <p style="font-weight: 700; color: var(--d2hzb-primary); margin: 0;">&ndash; Rajesh Ranjan Sahay, Mining Superintendent (CCL Charhi)</p>
            </div>

            <div class="d2hzb-card">
                <div style="color: #f59e0b; margin-bottom: 8px;">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</div>
                <p style="font-style: italic; margin-bottom: 15px;">"Shifted our family home from Hirapur Dhanbad to Canary Hill Road Hazaribagh. Their 5-layer packing protected our double-door refrigerator, glassware, and wooden wardrobes from coal soot and road vibration. Their staff in Hazaribagh was exceptionally polite. Very satisfied!"</p>
                <p style="font-weight: 700; color: var(--d2hzb-primary); margin: 0;">&ndash; Sunita Kumari, Teacher (Canary Hill Road)</p>
            </div>

            <div class="d2hzb-card">
                <div style="color: #f59e0b; margin-bottom: 8px;">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</div>
                <p style="font-style: italic; margin-bottom: 15px;">"Moved my 2 BHK flat and Royal Enfield motorcycle from Bank More Dhanbad to Matwari Hazaribagh. Closed container truck kept our household items spotless from coal dust. The bike was bubble-wrapped with zero scratches. Professional team and transparent billing!"</p>
                <p style="font-weight: 700; color: var(--d2hzb-primary); margin: 0;">&ndash; Vikas Sharma, Banking Officer (Matwari Hazaribagh)</p>
            </div>
        </div>
    </section>

    <!-- Section 11: Frequently Asked Questions (FAQ) -->
    <section class="d2hzb-section">
        <div class="d2hzb-section-header">
            <h2>Frequently Asked Questions</h2>
            <p>Clear, practical answers about scheduling, transit durations, vehicle transport, and institutional claims.</p>
        </div>
        <div style="max-width: 900px; margin: 0 auto;">
            <div class="d2hzb-faq-item">
                <div class="d2hzb-faq-q">How long does household shifting take from Dhanbad to Hazaribagh?</div>
                <div class="d2hzb-faq-a">The road distance between Dhanbad and Hazaribagh is approximately 125 to 130 km via GT Road (NH-19) passing Govindpur bypass and Bagodar into NH-20. Driving transit takes roughly 3.0 to 3.5 hours. We provide guaranteed same-day door-to-door relocation: loading in Dhanbad in the morning and completing unloading, unpacking, and setup in Hazaribagh by early evening.</div>
            </div>
            <div class="d2hzb-faq-item">
                <div class="d2hzb-faq-q">What are the shifting charges from Dhanbad to Hazaribagh?</div>
                <div class="d2hzb-faq-a">Estimated moving costs from Dhanbad to Hazaribagh depend on apartment size: 1 BHK apartment shifting costs ₹9,500 to ₹15,000; 2 BHK household moving ranges from ₹14,000 to ₹21,000; 3 BHK flat/bungalow relocation costs ₹19,000 to ₹28,000; two-wheeler bike parceling ranges from ₹2,000 to ₹3,500; and dedicated enclosed car transport ranges from ₹6,000 to ₹9,500.</div>
            </div>
            <div class="d2hzb-faq-item">
                <div class="d2hzb-faq-q">Do you provide claim-ready bills for BCCL, CCL, and IIT-ISM employee transfers?</div>
                <div class="d2hzb-faq-a">Yes. Shree Ashirwad Packers and Movers issues 100% compliant computer-generated GST tax invoices (SAC 9965/9967), consignment bilty notes, itemized inventory packing lists, driver payment vouchers, and transit insurance policies accepted across Bharat Coking Coal Limited (BCCL), Central Coalfields Limited (CCL), IIT-ISM Dhanbad, CMPF, Vinoba Bhave University (VBU), and public sector banks.</div>
            </div>
            <div class="d2hzb-faq-item">
                <div class="d2hzb-faq-q">How do you protect household furniture from road dust and coal soot?</div>
                <div class="d2hzb-faq-a">We deploy a specialized 5-layer defensive shield comprising high-density EPE foam sheets, virgin multi-layer bubble wrap, heavy corrugated edge corner guards, 7-ply rigid boxes, and waterproof stretch film. Items travel inside locked, weatherproof closed container vehicles that completely seal out coal belt soot, highway vibration, and rain.</div>
            </div>
            <div class="d2hzb-faq-item">
                <div class="d2hzb-faq-q">Can you transport my personal car or motorcycle from Dhanbad to Hazaribagh?</div>
                <div class="d2hzb-faq-a">Yes. We offer specialized enclosed hydraulic car carrier trailers and custom two-wheeler parceling with wheel chocks, bubble padding around mirrors and fuel tanks, digital condition inspection reports, and transit insurance with delivery within 12 to 24 hours.</div>
            </div>
            <div class="d2hzb-faq-item">
                <div class="d2hzb-faq-q">Which localities do you serve in Dhanbad and Hazaribagh?</div>
                <div class="d2hzb-faq-a">In Dhanbad, we pick up across Bank More, Saraidhela, Hirapur, Bartand, Steel Gate, Dhansar, Jharia, Katras, Govindpur, and IIT-ISM / BCCL Koyla Nagar. In Hazaribagh, we provide doorstep delivery and room placement across Canary Hill Road, Korrah, Matwari, Nawabganj, Okni, Hurhuru, Babugaon, Dipugarha, Pugmil, Demotand, BSF Meru Camp, and Indrapuri.</div>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <div class="d2hzb-cta-banner">
        <h2>Book Your Dhanbad to Hazaribagh Move Today</h2>
        <p>Experience seamless, same-day relocation across the GT Road industrial corridor. Free home survey, binding transparent quotes, and full transit insurance coverage.</p>
        <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
            <a href="tel:8409531615" class="d2hzb-btn-phone" style="font-size: 1.1rem; padding: 14px 30px;">&#128222; Call 084095 31615</a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20please%20send%20a%20quote%20for%20Dhanbad%20to%20Hazaribagh%20shifting." target="_blank" class="d2hzb-btn-whatsapp" style="font-size: 1.1rem; padding: 14px 30px;">&#128172; WhatsApp Inquiry</a>
        </div>
    </div>

    <!-- Section 12: Cluster Navigation Links -->
    <section class="d2hzb-section" style="padding-top: 10px;">
        <div class="d2hzb-cluster-links">
            <h3>Explore Connected Dhanbad &amp; Regional Relocation Routes</h3>
            <div class="d2hzb-tag-cloud">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dhanbad" class="d2hzb-tag-link">Dhanbad Hub Overview</a>
                <a href="<?php echo SITE_BASE_URL; ?>/hazaribagh-to-dhanbad-packers-and-movers" class="d2hzb-tag-link">Hazaribagh to Dhanbad Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hazaribagh" class="d2hzb-tag-link">Hazaribagh Hub Overview</a>
                <a href="<?php echo SITE_BASE_URL; ?>/hazaribagh-to-ranchi-packers-and-movers" class="d2hzb-tag-link">Hazaribagh to Ranchi Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-hazaribagh-packers-and-movers" class="d2hzb-tag-link">Ranchi to Hazaribagh Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/hazaribagh-to-bokaro-packers-and-movers" class="d2hzb-tag-link">Hazaribagh to Bokaro Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/bokaro-to-hazaribagh-packers-and-movers" class="d2hzb-tag-link">Bokaro to Hazaribagh Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/pricing" class="d2hzb-tag-link">Cost Calculator &amp; Rates</a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
