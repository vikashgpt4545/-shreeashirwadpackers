<?php
/**
 * Page Name: Hazaribagh to Ramgarh Packers and Movers
 * Route Slug: hazaribagh-to-ramgarh-packers-and-movers
 * Description: Dedicated inter-district moving route page connecting Hazaribagh (North Chotanagpur Plateau) to Ramgarh (Cantonment & Industrial Belt).
 * Focus Keywords: hazaribagh to ramgarh packers and movers, packers and movers hazaribagh to ramgarh, house shifting hazaribagh to ramgarh, hazaribagh to ramgarh luggage parcel, hazaribagh to ramgarh car carrier, hazaribagh to ramgarh bike parcel
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Hazaribagh to Ramgarh Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Top Hazaribagh to Ramgarh packers and movers by Shree Ashirwad. Same-day 1-1.5 hr transit, Army Cantt & CCL transfer bills, 5-layer packing. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/hazaribagh-to-ramgarh-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Hazaribagh">

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

    <!-- Scoped CSS for Route 4 (Hazaribagh to Ramgarh) -->
    <style>
        :root {
            --h2rmg-primary: #1e3a5f;
            --h2rmg-secondary: #047857;
            --h2rmg-accent: #d97706;
            --h2rmg-accent-light: #fef3c7;
            --h2rmg-dark: #0f172a;
            --h2rmg-gray-bg: #f8fafc;
            --h2rmg-border: #e2e8f0;
        }

        .h2rmg-wrapper {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #334155;
            line-height: 1.7;
        }

        .h2rmg-hero {
            background: linear-gradient(135deg, rgba(30,58,95,0.95) 0%, rgba(4,120,87,0.92) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 20px 75px;
            text-align: center;
            position: relative;
        }
        .h2rmg-hero-content {
            max-width: 980px;
            margin: 0 auto;
        }
        .h2rmg-badge {
            display: inline-block;
            background: rgba(217,119,6,0.22);
            border: 1px solid rgba(217,119,6,0.45);
            color: #fef3c7;
            padding: 6px 18px;
            border-radius: 50px;
            font-size: 0.88rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 20px;
        }
        .h2rmg-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2rem, 4vw, 3.2rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 18px;
            color: #ffffff;
        }
        .h2rmg-hero h1 span {
            color: #fbbf24;
            display: inline-block;
        }
        .h2rmg-hero p {
            font-size: 1.15rem;
            color: #e2e8f0;
            max-width: 820px;
            margin: 0 auto 30px;
            line-height: 1.7;
        }
        .h2rmg-hero-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
            gap: 15px;
            margin: 35px 0 30px;
        }
        .h2rmg-stat-card {
            background: rgba(255,255,255,0.08);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255,255,255,0.15);
            padding: 18px 12px;
            border-radius: 12px;
        }
        .h2rmg-stat-card strong {
            display: block;
            font-size: 1.6rem;
            font-family: 'Outfit', sans-serif;
            color: #fbbf24;
        }
        .h2rmg-stat-card span {
            font-size: 0.85rem;
            color: #cbd5e1;
        }

        .h2rmg-btn-group {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .h2rmg-btn-phone {
            background: #d97706;
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
        .h2rmg-btn-phone:hover {
            background: #b45309;
            transform: translateY(-2px);
        }
        .h2rmg-btn-whatsapp {
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
        .h2rmg-btn-whatsapp:hover {
            background: #16a34a;
            transform: translateY(-2px);
        }

        .h2rmg-section {
            padding: 70px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .h2rmg-section-header {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }
        .h2rmg-section-header h2 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(1.8rem, 3vw, 2.5rem);
            font-weight: 800;
            color: var(--h2rmg-primary);
            margin-bottom: 12px;
        }
        .h2rmg-section-header p {
            color: #64748b;
            font-size: 1.05rem;
        }

        .h2rmg-grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 35px;
            align-items: center;
            margin-bottom: 45px;
        }
        .h2rmg-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(290px, 1fr));
            gap: 25px;
        }

        .h2rmg-card {
            background: #ffffff;
            border: 1px solid var(--h2rmg-border);
            border-radius: 12px;
            padding: 28px;
            box-shadow: 0 4px 12px rgba(15,23,42,0.04);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }
        .h2rmg-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(15,23,42,0.08);
        }
        .h2rmg-card h3 {
            font-family: 'Outfit', sans-serif;
            color: var(--h2rmg-primary);
            font-size: 1.3rem;
            margin-bottom: 12px;
            font-weight: 700;
        }
        .h2rmg-card p {
            font-size: 0.96rem;
            color: #475569;
            line-height: 1.65;
            margin-bottom: 0;
        }

        .h2rmg-feature-img {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(15,23,42,0.08);
        }
        .h2rmg-feature-img img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .h2rmg-feature-img:hover img {
            transform: scale(1.03);
        }
        .h2rmg-img-caption {
            background: #f1f5f9;
            padding: 10px 15px;
            font-size: 0.85rem;
            color: #64748b;
            text-align: center;
            font-style: italic;
        }

        .h2rmg-table-wrapper {
            background: #ffffff;
            border: 1px solid var(--h2rmg-border);
            border-radius: 12px;
            overflow-x: auto;
            box-shadow: 0 8px 20px rgba(15,23,42,0.05);
        }
        .h2rmg-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.98rem;
        }
        .h2rmg-table th {
            background: var(--h2rmg-primary);
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 700;
            white-space: nowrap;
        }
        .h2rmg-table td {
            padding: 15px 20px;
            border-bottom: 1px solid var(--h2rmg-border);
            color: #475569;
        }
        .h2rmg-table tr:last-child td {
            border-bottom: none;
        }
        .h2rmg-table tr:hover td {
            background-color: #f1f5f9;
        }

        .h2rmg-matrix-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 15px;
        }
        .h2rmg-matrix-card {
            background: #ffffff;
            border: 1px solid var(--h2rmg-border);
            border-radius: 10px;
            padding: 16px;
            border-left: 4px solid var(--h2rmg-secondary);
        }
        .h2rmg-matrix-card h4 {
            color: var(--h2rmg-primary);
            font-size: 1.05rem;
            margin: 0 0 6px;
            font-weight: 700;
        }
        .h2rmg-matrix-card p {
            color: #64748b;
            font-size: 0.9rem;
            margin: 0;
            line-height: 1.5;
        }

        .h2rmg-process-step {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
            align-items: flex-start;
        }
        .h2rmg-step-num {
            background: var(--h2rmg-secondary);
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
            box-shadow: 0 6px 14px rgba(4,120,87,0.3);
        }
        .h2rmg-step-content {
            background: #ffffff;
            border: 1px solid var(--h2rmg-border);
            border-radius: 10px;
            padding: 18px 22px;
            flex-grow: 1;
        }
        .h2rmg-step-content h3 {
            font-family: 'Outfit', sans-serif;
            color: var(--h2rmg-primary);
            margin: 0 0 6px;
            font-size: 1.15rem;
        }
        .h2rmg-step-content p {
            color: #64748b;
            margin: 0;
            line-height: 1.6;
        }

        .h2rmg-faq-item {
            background: #ffffff;
            border: 1px solid var(--h2rmg-border);
            border-radius: 10px;
            margin-bottom: 15px;
            overflow: hidden;
        }
        .h2rmg-faq-q {
            padding: 18px 24px;
            font-weight: 700;
            color: var(--h2rmg-primary);
            background: var(--h2rmg-gray-bg);
            border-bottom: 1px solid var(--h2rmg-border);
        }
        .h2rmg-faq-a {
            padding: 20px 24px;
            color: #475569;
            line-height: 1.7;
            font-size: 0.98rem;
        }

        .h2rmg-cta-banner {
            background: linear-gradient(135deg, var(--h2rmg-primary) 0%, #0f172a 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 50px 30px;
            text-align: center;
            margin: 60px auto 20px;
            max-width: 1000px;
        }
        .h2rmg-cta-banner h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            margin-bottom: 15px;
            color: #ffffff;
        }
        .h2rmg-cta-banner p {
            font-size: 1.1rem;
            color: #cbd5e1;
            max-width: 720px;
            margin: 0 auto 30px;
        }
        .h2rmg-cluster-links {
            background: #ffffff;
            border: 1px solid var(--h2rmg-border);
            border-radius: 12px;
            padding: 30px;
            margin-top: 40px;
        }
        .h2rmg-cluster-links h3 {
            color: var(--h2rmg-primary);
            font-size: 1.25rem;
            margin-bottom: 20px;
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
        }
        .h2rmg-tag-cloud {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .h2rmg-tag-link {
            background: var(--h2rmg-gray-bg);
            border: 1px solid var(--h2rmg-border);
            padding: 7px 15px;
            border-radius: 6px;
            color: #334155;
            text-decoration: none;
            font-size: 0.88rem;
            font-weight: 600;
            transition: all 0.2s ease;
        }
        .h2rmg-tag-link:hover {
            background: var(--h2rmg-secondary);
            color: #ffffff;
            border-color: var(--h2rmg-secondary);
        }
    </style>

    <!-- Schema 1: MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Hazaribagh to Ramgarh",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "https://www.shreeashirwadpackers.com/#organization",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+918409531615",
        "priceRange": "INR 6,000 - 26,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Canary Hill Road, Near Matwari Chowk",
            "addressLocality": "Hazaribagh",
            "addressRegion": "Jharkhand",
            "postalCode": "825301",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 23.9925,
            "longitude": 85.3637
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
                "name": "Hazaribagh"
            },
            {
                "@type": "City",
                "name": "Ramgarh"
            }
        ],
        "description": "Express inter-district relocation from Hazaribagh to Ramgarh covering 50 km via NH-20 four-lane highway. Same-day 1 to 1.5 hour transit, 5-layer protective packaging, weatherproof container trucks, Army Cantonment & CCL claim billing, and all-risk transit insurance."
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
                "name": "Packers and Movers in Hazaribagh",
                "item": "https://www.shreeashirwadpackers.com/packers-and-movers-in-hazaribagh"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Hazaribagh to Ramgarh",
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
                "name": "How long does household shifting take from Hazaribagh to Ramgarh?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Hazaribagh and Ramgarh is approximately 48 to 55 km via NH-20 four-lane national highway. Driving time is roughly 1.0 to 1.5 hours. Shree Ashirwad Packers provides guaranteed same-day express relocation: loading in Hazaribagh in the morning and completing unloading, unpacking, and setup in Ramgarh by lunchtime or early afternoon."
                }
            },
            {
                "@type": "Question",
                "name": "What are the packers and movers charges from Hazaribagh to Ramgarh?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Estimated relocation rates from Hazaribagh to Ramgarh depend on apartment size: 1 BHK apartment shifting costs ₹6,000 to ₹9,500; 2 BHK household moving ranges from ₹9,000 to ₹14,000; 3 BHK flat/bungalow relocation costs ₹13,000 to ₹19,000; two-wheeler bike parceling ranges from ₹1,500 to ₹2,500; and dedicated enclosed car transport ranges from ₹4,500 to ₹7,000."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide claim-ready bills for Army Cantonment and CCL personnel transfers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Shree Ashirwad Packers and Movers issues 100% compliant computer-generated GST tax invoices (SAC 9965/9967), consignment bilty notes, itemized inventory packing lists, driver payment vouchers, and transit insurance policies accepted across the Sikh Regimental Centre (SRC), Punjab Regimental Centre (PRC), CCL Barkakana/Sayal/Argada areas, PVUNL Patratu, and public sector banks."
                }
            },
            {
                "@type": "Question",
                "name": "How do you protect household furniture from road vibration and dust?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We deploy a specialized 5-layer defensive shield comprising high-density EPE foam sheets, virgin multi-layer bubble wrap, heavy corrugated edge corner guards, 7-ply rigid boxes, and waterproof stretch film. Items travel inside locked, weatherproof closed container vehicles that completely seal out highway dust, road vibrations, and rain."
                }
            },
            {
                "@type": "Question",
                "name": "Can you transport my personal car or motorcycle from Hazaribagh to Ramgarh?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer specialized enclosed hydraulic car carrier trailers and custom two-wheeler parceling with wheel chocks, bubble padding around mirrors and fuel tanks, digital condition inspection reports, and transit insurance with delivery within 12 to 24 hours."
                }
            },
            {
                "@type": "Question",
                "name": "Which localities do you serve in Hazaribagh and Ramgarh?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "In Hazaribagh, we pick up across Canary Hill Road, Korrah, Matwari, Nawabganj, Okni, Hurhuru, Babugaon, Dipugarha, Pugmil, Demotand, BSF Meru Camp, and Indrapuri. In Ramgarh, we provide doorstep delivery and room placement across Ramgarh Cantt, Nai Sarai, Chitarpur, Gola, Barkakana, Kuju, Bhurkunda, Sirka, and Patratu Thermal Power Zone."
                }
            }
        ]
    }
    </script>
</head>
<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<main class="h2rmg-wrapper">
    <!-- Hero Section -->
    <section class="h2rmg-hero">
        <div class="h2rmg-hero-content">
            <span class="h2rmg-badge">&#128666; Express Inter-District Moving Line</span>
            <h1>Hazaribagh to Ramgarh <span>Packers and Movers</span></h1>
            <p>Guaranteed same-day household shifting, defense cantonment transfers, and vehicle transport across the 50 km NH-20 four-lane corridor. 5-layer defensive packing armor, closed container trucks, and Army Cantt-CCL approved GST billing.</p>

            <div class="h2rmg-hero-stats">
                <div class="h2rmg-stat-card">
                    <strong>50 KM</strong>
                    <span>Highway Transit Distance</span>
                </div>
                <div class="h2rmg-stat-card">
                    <strong>1.2 HOURS</strong>
                    <span>Fast Express Transit Time</span>
                </div>
                <div class="h2rmg-stat-card">
                    <strong>100% SAME DAY</strong>
                    <span>Door-to-Door Delivery</span>
                </div>
                <div class="h2rmg-stat-card">
                    <strong>ZERO LOSS</strong>
                    <span>All-Risk Transit Insurance</span>
                </div>
            </div>

            <div class="h2rmg-btn-group">
                <a href="tel:8409531615" class="h2rmg-btn-phone">&#128222; Call 084095 31615</a>
                <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Hazaribagh%20to%20Ramgarh%20shifting." target="_blank" class="h2rmg-btn-whatsapp">&#128172; WhatsApp Instant Quote</a>
            </div>
        </div>
    </section>

    <!-- Section 1: Route Corridor Overview -->
    <section class="h2rmg-section">
        <div class="h2rmg-grid-2">
            <div>
                <span class="h2rmg-badge" style="background:#e0f2fe; color:#0369a1; border-color:#bae6fd;">Four-Lane Express Corridor</span>
                <h2 style="font-family:'Outfit',sans-serif; color:var(--h2rmg-primary); font-size:2.2rem; margin:15px 0;">Swift Relocation from Hazaribagh to Ramgarh Cantt</h2>
                <p>Relocating across the immediate southern boundary between Hazaribagh and Ramgarh involves traveling approximately 48 to 55 km along the well-paved four-lane National Highway 20. Whether you are an Army officer transferring from BSF Meru to the Ramgarh Cantonment Regimental Centres (Sikh Regimental Centre / Punjab Regimental Centre), a mining engineer shifting to Central Coalfields Limited (CCL) Barkakana or Argada, an electrical engineer moving to PVUNL Patratu, or a family relocating to Nai Sarai or Chitarpur, Shree Ashirwad Packers and Movers delivers an effortless moving experience.</p>
                <p>Our dedicated moving network guarantees morning loading in Hazaribagh neighborhoods like Matwari, Canary Hill Road, Korrah, or Hurhuru, with arrival, careful unloading, and customized room setup in your Ramgarh home before lunchtime or early afternoon. We deploy closed weatherproof container vehicles that protect your valued furnishings and electronic appliances from highway vibration, monsoon rains, and industrial grit.</p>
            </div>
            <div class="h2rmg-feature-img">
                <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Closed container moving truck for Hazaribagh to Ramgarh packers and movers" loading="lazy">
                <div class="h2rmg-img-caption">All-weather sealed container trucks operating along the Hazaribagh-Ramgarh four-lane NH-20 highway</div>
            </div>
        </div>
    </section>

    <!-- Section 2: Comprehensive Services -->
    <section class="h2rmg-section" style="background: var(--h2rmg-gray-bg);">
        <div class="h2rmg-section-header">
            <h2>Custom Relocation Solutions for Every Need</h2>
            <p>From single room bachelors to sprawling corporate bungalows, explore our end-to-end relocation services tailored for the Hazaribagh to Ramgarh route.</p>
        </div>

        <div class="h2rmg-grid-3">
            <div class="h2rmg-card">
                <h3>&#127968; Complete Household Relocation</h3>
                <p>Full-service residential packing and moving for 1 BHK, 2 BHK, 3 BHK, and duplex bungalows. We disassemble beds, dining tables, modular wardrobes, pack every item with 5-layer defensive materials, transport securely, and reassemble them at your Ramgarh destination.</p>
            </div>
            <div class="h2rmg-card">
                <h3>&#128188; Defense &amp; CCL Corporate Moves</h3>
                <p>Specialized institutional relocation for military personnel transferring to Ramgarh Cantonment, CCL Barkakana/Sayal/Argada mining officers, and PVUNL Patratu power engineers with 100% compliant claim documentation.</p>
            </div>
            <div class="h2rmg-card">
                <h3>&#128663; Dedicated Enclosed Car Carriers</h3>
                <p>Safe four-wheeler transportation using specialized closed car carrier trailers equipped with hydraulic ramps, wheel-chocks, and safety harness belts. Protect your car from highway odometer run and road debris across the expressway.</p>
            </div>
            <div class="h2rmg-card">
                <h3>&#127949; Two-Wheeler Motorcycle Parcel</h3>
                <p>Doorstep bike and scooter courier service. We wrap mirrors, headlamps, and fuel tanks in heavy-duty bubble wrap, drain fuel safely, strap the bike upright inside container bays, and deliver scratch-free to Ramgarh within same day.</p>
            </div>
            <div class="h2rmg-card">
                <h3>&#128230; Luggage &amp; Mini-Consignment Delivery</h3>
                <p>Economical part-load shifting for students, police officers, or young couples needing to transport a few carton boxes, study table, and refrigerator without paying full truck tariff.</p>
            </div>
            <div class="h2rmg-card">
                <h3>&#128274; Secure Transit Warehousing</h3>
                <p>Need temporary storage while your government quarter or rented flat in Ramgarh Cantt, Nai Sarai, or Barkakana is being readied? We offer clean, 24/7 CCTV-monitored, moisture-free warehouse facilities with flexible weekly and monthly storage plans.</p>
            </div>
        </div>
    </section>

    <!-- Section 3: 5-Layer Defensive Packaging Shield -->
    <section class="h2rmg-section">
        <div class="h2rmg-grid-2">
            <div class="h2rmg-feature-img">
                <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="5-layer household packing materials used by Shree Ashirwad Packers and Movers" loading="lazy">
                <div class="h2rmg-img-caption">Multi-layer defense system: EPE foam, bubble wrap, corner guards, and rigid 7-ply cartons</div>
            </div>
            <div>
                <span class="h2rmg-badge" style="background:#fef3c7; color:#b45309; border-color:#fde68a;">Zero Damage Engineering</span>
                <h2 style="font-family:'Outfit',sans-serif; color:var(--h2rmg-primary); font-size:2.2rem; margin:15px 0;">Our Proven 5-Layer Packaging Shield</h2>
                <p>Even on a swift 50 km highway run, flyover approaches, speed breakers, and loading vibrations demand professional packing rigor. We engineer custom protective armor for every category of item in your home:</p>
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
    <section class="h2rmg-section" style="background: var(--h2rmg-gray-bg);">
        <div class="h2rmg-section-header">
            <h2>Hazaribagh to Ramgarh Shifting Rates &amp; Charges</h2>
            <p>Clear, transparent pricing with no hidden toll fees or destination floor surprises. Compare our competitive relocation packages below.</p>
        </div>

        <div class="h2rmg-table-wrapper">
            <table class="h2rmg-table">
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
                        <td>1.0 - 1.5 Hours</td>
                        <td><strong style="color:var(--h2rmg-accent);">₹6,000 - ₹9,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Complete Shifting</strong></td>
                        <td>17-ft Closed Container</td>
                        <td>4-Layer Foam, Bubble &amp; Film</td>
                        <td>1.2 - 2.0 Hours</td>
                        <td><strong style="color:var(--h2rmg-accent);">₹9,000 - ₹14,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Executive Shifting</strong></td>
                        <td>19-ft or 22-ft High-Cube Truck</td>
                        <td>5-Layer Defensive Shield</td>
                        <td>1.5 - 2.5 Hours</td>
                        <td><strong style="color:var(--h2rmg-accent);">₹13,000 - ₹19,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Bungalow Shifting</strong></td>
                        <td>24-ft Multi-Axle Container</td>
                        <td>Premium Custom Armor &amp; Crates</td>
                        <td>2.0 - 3.0 Hours</td>
                        <td><strong style="color:var(--h2rmg-accent);">₹18,000 - ₹26,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler Bike Parcel</strong></td>
                        <td>Specialized Cargo Truck Bay</td>
                        <td>Bubble Wrap &amp; Ratchet Lashings</td>
                        <td>Same-Day Delivery</td>
                        <td><strong style="color:var(--h2rmg-accent);">₹1,500 - ₹2,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Four-Wheeler Car Carrier</strong></td>
                        <td>Hydraulic Closed Car Carrier</td>
                        <td>Wheel-Chocks &amp; Safety Covers</td>
                        <td>Same-Day Delivery</td>
                        <td><strong style="color:var(--h2rmg-accent);">₹4,500 - ₹7,000</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="text-align: center; margin-top: 15px; font-size: 0.9rem; color: #64748b;">* Tariffs are indicative and vary based on exact consignment volume, packing material grade, floor elevations, elevator access, and optional comprehensive transit insurance (3% of declared asset value).</p>
    </section>

    <!-- Section 5: Vehicle Transport & Automotive Logistics -->
    <section class="h2rmg-section">
        <div class="h2rmg-grid-2">
            <div>
                <span class="h2rmg-badge" style="background:#ecfdf5; color:#047857; border-color:#a7f3d0;">Automotive Transport Specialists</span>
                <h2 style="font-family:'Outfit',sans-serif; color:var(--h2rmg-primary); font-size:2.2rem; margin:15px 0;">Safe Car Carrier &amp; Bike Parcel Services</h2>
                <p>Transferring your personal car or motorcycle across the Hazaribagh-Ramgarh highway is hassle-free with our dedicated vehicle carriers. Shree Ashirwad Packers and Movers provides specialized automotive transport solutions designed to preserve your vehicle in pristine showroom condition.</p>
                <ul style="padding-left: 20px; line-height: 1.8; color: #475569;">
                    <li><strong>Pre-Transit Inspection:</strong> Digital condition audit photographing existing bodywork, tyre status, and odometer reading before loading.</li>
                    <li><strong>Enclosed Hydraulic Carriers:</strong> Vehicles travel inside locked carriers equipped with low-angle hydraulic ramps to prevent front bumper scraping on luxury sedans and hatchbacks.</li>
                    <li><strong>Wheel Chock Locking:</strong> Four-point heavy-duty nylon wheel chocks hold your vehicle firmly without stressing suspension systems during highway transit.</li>
                    <li><strong>Two-Wheeler Bubble Padding:</strong> Mirrors, handlebars, turn indicators, and painted fuel tanks receive double-layer bubble wrap, ensuring zero scratches on arrival in Ramgarh.</li>
                </ul>
            </div>
            <div class="h2rmg-feature-img">
                <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Enclosed car transport carrier for Hazaribagh to Ramgarh vehicle relocation" loading="lazy">
                <div class="h2rmg-img-caption">Hydraulic enclosed car carrier securing vehicles for safe transit between Hazaribagh and Ramgarh</div>
            </div>
        </div>
    </section>

    <!-- Section 6: Step-by-Step Relocation Process -->
    <section class="h2rmg-section" style="background: var(--h2rmg-gray-bg);">
        <div class="h2rmg-section-header">
            <h2>Our 5-Stage Systematic Relocation Workflow</h2>
            <p>From your initial phone inquiry in Hazaribagh to placing the final sofa cushion in your Ramgarh home, every step is executed with precision.</p>
        </div>

        <div style="max-width: 850px; margin: 0 auto;">
            <div class="h2rmg-process-step">
                <div class="h2rmg-step-num">1</div>
                <div class="h2rmg-step-content">
                    <h3>Free Pre-Move Survey &amp; Transparent Quote</h3>
                    <p>Our relocation supervisor conducts an in-person physical survey or virtual video assessment across your Hazaribagh residence to compute goods volume, parking clearance, fragile packing requirements, and provide a binding written estimate.</p>
                </div>
            </div>
            <div class="h2rmg-process-step">
                <div class="h2rmg-step-num">2</div>
                <div class="h2rmg-step-content">
                    <h3>Defensive 5-Layer Packing at Your Residence</h3>
                    <p>On shifting day, our experienced crew arrives punctually with virgin materials, disassembles double beds, dining tables, and wardrobes, bubble-wraps glassware and electronics, and systematically labels every carton by room.</p>
                </div>
            </div>
            <div class="h2rmg-process-step">
                <div class="h2rmg-step-num">3</div>
                <div class="h2rmg-step-content">
                    <h3>Container Loading &amp; Security Sealing</h3>
                    <p>Goods are stacked using weight-balanced principles inside our closed container trucks, anchored with heavy-duty ratchet tie-downs, and locked with a unique tamper-evident numbered bolt seal in your presence.</p>
                </div>
            </div>
            <div class="h2rmg-process-step">
                <div class="h2rmg-step-num">4</div>
                <div class="h2rmg-step-content">
                    <h3>Swift 50 km Highway Transit</h3>
                    <p>Our experienced commercial drivers navigate the 50 km four-lane NH-20 expressway smoothly, bypassing city congestions to reach your Ramgarh address within 1.2 to 1.5 hours.</p>
                </div>
            </div>
            <div class="h2rmg-process-step">
                <div class="h2rmg-step-num">5</div>
                <div class="h2rmg-step-content">
                    <h3>Unloading, Room Placement &amp; Furniture Setup</h3>
                    <p>At your Ramgarh residence in Ramgarh Cantt, Nai Sarai, or Barkakana, the crew breaks the security seal, carefully carries all items inside, reassembles furniture, positions heavy appliances, and collects packing debris.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 7: Unpacking & Destination Services -->
    <section class="h2rmg-section">
        <div class="h2rmg-grid-2">
            <div class="h2rmg-feature-img">
                <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and furniture room setup service in Ramgarh residence" loading="lazy">
                <div class="h2rmg-img-caption">Dedicated room setup, furniture reassembly, and debris removal in Ramgarh residences</div>
            </div>
            <div>
                <span class="h2rmg-badge" style="background:#ede9fe; color:#6d28d9; border-color:#ddd6fe;">Turnkey Destination Assistance</span>
                <h2 style="font-family:'Outfit',sans-serif; color:var(--h2rmg-primary); font-size:2.2rem; margin:15px 0;">Complete Unpacking &amp; Room Setup in Ramgarh</h2>
                <p>Moving is not complete until your new house feels like home. Unlike transport brokers who merely dump carton boxes in the living room and leave, Shree Ashirwad Packers and Movers provides comprehensive destination services across all Ramgarh sectors.</p>
                <p>Our crew unpacks cartons, places kitchen utensils in overhead cabinets, installs study desks, reattaches bed frames, and positions heavy refrigerators and washing machines in their allocated spots. We ensure you can sleep comfortably on your freshly set-up bed on the very first night of your relocation.</p>
                <p>Finally, our team cleans up and carries away all used cardboard boxes, bubble wrap scraps, and plastic film, leaving your new residence tidy and ready for comfortable living.</p>
            </div>
        </div>
    </section>

    <!-- Section 8: Dual-City Locality Coverage Matrix -->
    <section class="h2rmg-section" style="background: var(--h2rmg-gray-bg);">
        <div class="h2rmg-section-header">
            <h2>Hazaribagh &amp; Ramgarh Complete Locality Network</h2>
            <p>Direct doorstep pickup across every neighborhood of Hazaribagh with guaranteed doorstep delivery throughout Ramgarh cantonment and mining zones.</p>
        </div>

        <div class="h2rmg-grid-2">
            <div class="h2rmg-matrix-card">
                <h4>&#128205; Hazaribagh Pickup Sectors</h4>
                <p style="margin-bottom: 12px;">Full door-to-door packing coverage across Hazaribagh township and cantonment perimeters:</p>
                <div style="display:flex; flex-wrap:wrap; gap:6px;">
                    <span class="h2rmg-tag-link">Canary Hill Road</span>
                    <span class="h2rmg-tag-link">Matwari Chowk</span>
                    <span class="h2rmg-tag-link">Korrah</span>
                    <span class="h2rmg-tag-link">Nawabganj</span>
                    <span class="h2rmg-tag-link">Okni</span>
                    <span class="h2rmg-tag-link">Hurhuru</span>
                    <span class="h2rmg-tag-link">Babugaon</span>
                    <span class="h2rmg-tag-link">Dipugarha</span>
                    <span class="h2rmg-tag-link">Pugmil</span>
                    <span class="h2rmg-tag-link">Demotand</span>
                    <span class="h2rmg-tag-link">BSF Meru Camp</span>
                    <span class="h2rmg-tag-link">Indrapuri Colony</span>
                </div>
            </div>

            <div class="h2rmg-matrix-card">
                <h4>&#128205; Ramgarh Delivery Destinations</h4>
                <p style="margin-bottom: 12px;">Complete unloading, room placement, and unpacking across Ramgarh residential sectors:</p>
                <div style="display:flex; flex-wrap:wrap; gap:6px;">
                    <span class="h2rmg-tag-link">Ramgarh Cantonment (SRC/PRC)</span>
                    <span class="h2rmg-tag-link">Nai Sarai Township</span>
                    <span class="h2rmg-tag-link">Chitarpur &amp; Rajrappa Road</span>
                    <span class="h2rmg-tag-link">Gola Block Residential</span>
                    <span class="h2rmg-tag-link">Barkakana Railway Colony</span>
                    <span class="h2rmg-tag-link">CCL Central Workshop Barkakana</span>
                    <span class="h2rmg-tag-link">Kuju Coal Belt</span>
                    <span class="h2rmg-tag-link">Bhurkunda &amp; Sirka Mines</span>
                    <span class="h2rmg-tag-link">PVUNL Patratu Power Zone</span>
                    <span class="h2rmg-tag-link">Kaitha &amp; Subhash Chowk</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 9: Institutional Reimbursement Documentation -->
    <section class="h2rmg-section">
        <div class="h2rmg-section-header">
            <h2>100% Compliant Bills for Defense, CCL &amp; Government Transfers</h2>
            <p>Hassle-free relocation allowance claims with verified GST invoices and official documentation.</p>
        </div>

        <div class="h2rmg-grid-3">
            <div class="h2rmg-card">
                <h3>&#128196; Computerized GST Tax Invoices</h3>
                <p>Official tax invoices bearing our verified GSTIN and proper SAC service accounting codes (SAC 9965 / 9967) for freight and cargo handling services, matching the exact format required by Army Cantt CDA and PSU auditors.</p>
            </div>
            <div class="h2rmg-card">
                <h3>&#128221; Consignment Bilty &amp; Packing Lists</h3>
                <p>Standard IBA-pattern consignment notes (bilty) detailing vehicle number, driver credentials, pickup/delivery addresses, and an itemized serial-numbered inventory packing list.</p>
            </div>
            <div class="h2rmg-card">
                <h3>&#128176; Money Receipts &amp; Transit Policies</h3>
                <p>Formal stamped advance and final payment money receipts accompanied by the official transit insurance certificate copy to ensure fast, seamless reimbursement from your unit or accounts office.</p>
            </div>
        </div>
    </section>

    <!-- Section 10: Verified Customer Testimonials -->
    <section class="h2rmg-section" style="background: var(--h2rmg-gray-bg);">
        <div class="h2rmg-section-header">
            <h2>Verified Client Experiences on the Hazaribagh-Ramgarh Route</h2>
            <p>Discover how defense personnel, mining executives, and relocated families rate our relocation service.</p>
        </div>

        <div class="h2rmg-grid-3">
            <div class="h2rmg-card">
                <div style="color: #f59e0b; margin-bottom: 8px;">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</div>
                <p style="font-style: italic; margin-bottom: 15px;">"Transferred from BSF Meru Camp Hazaribagh to Ramgarh Cantonment. Shree Ashirwad Packers arrived at 7:30 AM, packed all our household goods and TV with 5-layer protective wrapping, and completed delivery by 12:30 PM. Their GST bills were accepted immediately by CDA without any deduction."</p>
                <p style="font-weight: 700; color: var(--h2rmg-primary); margin: 0;">&ndash; Subedar Major J. S. Gill, Army Cantonment Ramgarh</p>
            </div>

            <div class="h2rmg-card">
                <div style="color: #f59e0b; margin-bottom: 8px;">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</div>
                <p style="font-style: italic; margin-bottom: 15px;">"We shifted our family from Canary Hill Road Hazaribagh to Barkakana CCL Township. The team was extremely careful while carrying heavy wooden almirahs and double beds down the stairs. Delivery was fast and seamless. Unpacking and room setup made settling in very easy."</p>
                <p style="font-weight: 700; color: var(--h2rmg-primary); margin: 0;">&ndash; R. K. Mahato, Mining Executive (Barkakana)</p>
            </div>

            <div class="h2rmg-card">
                <div style="color: #f59e0b; margin-bottom: 8px;">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</div>
                <p style="font-style: italic; margin-bottom: 15px;">"Shifted my 2 BHK apartment and TVS Apache bike from Matwari Hazaribagh to Nai Sarai Ramgarh. The container vehicle arrived on time and the bike was bubble-wrapped with zero scratches. Very reasonable rates and professional behavior."</p>
                <p style="font-weight: 700; color: var(--h2rmg-primary); margin: 0;">&ndash; Vivek Kumar, Engineer (PVUNL Patratu)</p>
            </div>
        </div>
    </section>

    <!-- Section 11: Frequently Asked Questions (FAQ) -->
    <section class="h2rmg-section">
        <div class="h2rmg-section-header">
            <h2>Frequently Asked Questions</h2>
            <p>Clear, practical answers about scheduling, transit durations, vehicle transport, and institutional claims.</p>
        </div>
        <div style="max-width: 900px; margin: 0 auto;">
            <div class="h2rmg-faq-item">
                <div class="h2rmg-faq-q">How long does household shifting take from Hazaribagh to Ramgarh?</div>
                <div class="h2rmg-faq-a">The highway distance between Hazaribagh and Ramgarh is approximately 48 to 55 km via NH-20 four-lane national highway. Driving time is roughly 1.0 to 1.5 hours. Shree Ashirwad Packers provides guaranteed same-day express relocation: loading in Hazaribagh in the morning and completing unloading, unpacking, and setup in Ramgarh by lunchtime or early afternoon.</div>
            </div>
            <div class="h2rmg-faq-item">
                <div class="h2rmg-faq-q">What are the packers and movers charges from Hazaribagh to Ramgarh?</div>
                <div class="h2rmg-faq-a">Estimated relocation rates from Hazaribagh to Ramgarh depend on apartment size: 1 BHK apartment shifting costs ₹6,000 to ₹9,500; 2 BHK household moving ranges from ₹9,000 to ₹14,000; 3 BHK flat/bungalow relocation costs ₹13,000 to ₹19,000; two-wheeler bike parceling ranges from ₹1,500 to ₹2,500; and dedicated enclosed car transport ranges from ₹4,500 to ₹7,000.</div>
            </div>
            <div class="h2rmg-faq-item">
                <div class="h2rmg-faq-q">Do you provide claim-ready bills for Army Cantonment and CCL personnel transfers?</div>
                <div class="h2rmg-faq-a">Yes. Shree Ashirwad Packers and Movers issues 100% compliant computer-generated GST tax invoices (SAC 9965/9967), consignment bilty notes, itemized inventory packing lists, driver payment vouchers, and transit insurance policies accepted across the Sikh Regimental Centre (SRC), Punjab Regimental Centre (PRC), CCL Barkakana/Sayal/Argada areas, PVUNL Patratu, and public sector banks.</div>
            </div>
            <div class="h2rmg-faq-item">
                <div class="h2rmg-faq-q">How do you protect household furniture from road vibration and dust?</div>
                <div class="h2rmg-faq-a">We deploy a specialized 5-layer defensive shield comprising high-density EPE foam sheets, virgin multi-layer bubble wrap, heavy corrugated edge corner guards, 7-ply rigid boxes, and waterproof stretch film. Items travel inside locked, weatherproof closed container vehicles that completely seal out highway dust, road vibrations, and rain.</div>
            </div>
            <div class="h2rmg-faq-item">
                <div class="h2rmg-faq-q">Can you transport my personal car or motorcycle from Hazaribagh to Ramgarh?</div>
                <div class="h2rmg-faq-a">Yes. We offer specialized enclosed hydraulic car carrier trailers and custom two-wheeler parceling with wheel chocks, bubble padding around mirrors and fuel tanks, digital condition inspection reports, and transit insurance with delivery within 12 to 24 hours.</div>
            </div>
            <div class="h2rmg-faq-item">
                <div class="h2rmg-faq-q">Which localities do you serve in Hazaribagh and Ramgarh?</div>
                <div class="h2rmg-faq-a">In Hazaribagh, we pick up across Canary Hill Road, Korrah, Matwari, Nawabganj, Okni, Hurhuru, Babugaon, Dipugarha, Pugmil, Demotand, BSF Meru Camp, and Indrapuri. In Ramgarh, we provide doorstep delivery and room placement across Ramgarh Cantt, Nai Sarai, Chitarpur, Gola, Barkakana, Kuju, Bhurkunda, Sirka, and Patratu Thermal Power Zone.</div>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <div class="h2rmg-cta-banner">
        <h2>Book Your Hazaribagh to Ramgarh Move Today</h2>
        <p>Experience seamless, express same-day relocation across the NH-20 four-lane highway. Free home survey, binding transparent quotes, and full transit insurance coverage.</p>
        <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
            <a href="tel:8409531615" class="h2rmg-btn-phone" style="font-size: 1.1rem; padding: 14px 30px;">&#128222; Call 084095 31615</a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20please%20send%20a%20quote%20for%20Hazaribagh%20to%20Ramgarh%20shifting." target="_blank" class="h2rmg-btn-whatsapp" style="font-size: 1.1rem; padding: 14px 30px;">&#128172; WhatsApp Inquiry</a>
        </div>
    </div>

    <!-- Section 12: Cluster Navigation Links -->
    <section class="h2rmg-section" style="padding-top: 10px;">
        <div class="h2rmg-cluster-links">
            <h3>Explore Connected Hazaribagh &amp; Regional Relocation Routes</h3>
            <div class="h2rmg-tag-cloud">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hazaribagh" class="h2rmg-tag-link">Hazaribagh Hub Overview</a>
                <a href="<?php echo SITE_BASE_URL; ?>/hazaribagh-to-dhanbad-packers-and-movers" class="h2rmg-tag-link">Hazaribagh to Dhanbad Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/hazaribagh-to-jamshedpur-packers-and-movers" class="h2rmg-tag-link">Hazaribagh to Jamshedpur Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/hazaribagh-to-giridih-packers-and-movers" class="h2rmg-tag-link">Hazaribagh to Giridih Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/hazaribagh-to-ranchi-packers-and-movers" class="h2rmg-tag-link">Hazaribagh to Ranchi Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-hazaribagh-packers-and-movers" class="h2rmg-tag-link">Ranchi to Hazaribagh Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/hazaribagh-to-bokaro-packers-and-movers" class="h2rmg-tag-link">Hazaribagh to Bokaro Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/pricing" class="h2rmg-tag-link">Cost Calculator &amp; Rates</a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
